<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Reviewer extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->model('proposal');
		// $this->load->database(); // load database
		$this->load->helper('url');
		$this->load->helpers('money_format');
		if($this->session->userdata('status') != "login" OR $this->session->userdata('role') != '3'){
			redirect("Authentication/login");
		}
	}

	public function index()
	{
		$data['content'] = $this->template();
		$this->load->view('templates/reviewer/dashboard',$data);
	}

	public function template()
	{		
		$data['user_id'] = array(			
			'id' => $this->session->userdata('user_id'),
		);

		$data['content'] = $this->load->view('templates/reviewer/header', $data);
		$data['content'] = $this->load->view('templates/reviewer/sidebar');
		$data['content'] = $this->load->view('templates/reviewer/footer');

		return $this->load->view('templates/reviewer/template',$data);
	}

	public function list_proposal()
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/reviewer/proposal/ongoing",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$proposal = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$data['proposal'] = json_decode($proposal);	
		$data['content'] = $this->template();

		$this->load->view('reviewer/list_proposal',$data);
	}

	public function list_review_proposal()
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/reviewer/proposal/revision",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$proposal = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$data['proposal'] = json_decode($proposal);	
		$data['content'] = $this->template();
		$this->load->view('reviewer/revisi_proposal',$data);
	}

	public function review_proposal_submission(){
		$proposal = $_POST['proposal'];
		$rab = $_POST['rab'];
		$konten = $_POST['konten'];
		$status = $_POST['radio'];		
		$sumber = $_POST['source'];

		//get budget
        preg_match_all('/\d+/', $_POST['budget'], $matches);
        $power = sizeof($matches[0]) - 2;
        $dana = $matches[0][0] * pow(1000, $power);	        

		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/reviewer/proposal",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "proposal=".$proposal."&rab=".$rab."&konten=".$konten."&status=".$status."&dana=".$dana."&sumber=".$sumber."",
		));

		$cmpt = curl_exec($curl);
		$err = curl_error($curl);				
		curl_close($curl);		

		redirect('Reviewer/list_proposal');
	}

	public function print_report()
	{
		$data['content'] = $this->template();
		$this->load->view('Reviewer/print_report',$data);
	}

	public function edit_deadline()
	{
		$data['content'] = $this->template();
		$this->load->view('Reviewer/edit_deadline',$data);
	}

	public function export()
	{
		$from = $_POST['regist_opendate'];
		$to = $_POST['regist_closedate'];

		echo $from;
		echo $to;

		//Kompetisi
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL =>  API_URL."/api/admin/report",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "from=".$from."&to=".$to."",
		));

		$cmpt = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);	

		$competitions = json_decode($cmpt);
		
		//  GET KOMPETISI
		$this->makeExcel($competitions);
          
	}

	public function makeExcel($competitions){
		$spreadsheet = new Spreadsheet;

          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'ID')
                      ->setCellValue('B1', 'Kompetisi')
                      ->setCellValue('C1', 'Tanggal')
                      ->setCellValue('D1', 'Organisasi')
                      ->setCellValue('E1', 'Lokasi')
                      ->setCellValue('F1', 'Pengajuan Dana')
                      ->setCellValue('G1', 'Dana yang disetujui')
                      ->setCellValue('H1', 'Realisasi Dana')
                      ->setCellValue('I1', 'Sumber Dana');

                       // $spreadsheet->setActiveSheetIndex(0)->setCellValue('A2', 'ID')->setCellValue('B2', 'Kompetisi')->setCellValue('C2', 'Jurusan')->setCellValue('D2', 'Lokasi')->setCellValue('E2', 'Dana')->setCellValue('F2', 'Sumber Dana');
                      

          $kolom = 2;
          $nomor = 1;
          foreach($competitions as $cmpt) {

               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $cmpt->competition->name)
                           ->setCellValue('C' . $kolom, $cmpt->competition->event_startdate)
                           ->setCellValue('D' . $kolom, $cmpt->organization->name)
                           ->setCellValue('E' . $kolom, $cmpt->competition->location)
                           ->setCellValue('F' . $kolom, $cmpt->draft_budget)
                           ->setCellValue('G' . $kolom, $cmpt->realisazion_budget)
                           ->setCellValue('H' . $kolom, $cmpt->approved_budget)
                           ->setCellValue('I' . $kolom, $cmpt->budget_source);                                          			
               $kolom++;
               $nomor++;

          }

          $writer = new Xlsx($spreadsheet);
          
	      header('Content-Type: application/vnd.ms-excel');
		  header('Content-Disposition: attachment;filename="Kompetisi.xlsx"');
		  header('Cache-Control: max-age=0');
		  // header('Cache-Control: cache, must-revalidate'); 
		  header('Pragma: public');
		  ob_end_clean();		    
		  $writer->save('php://output');
	}
}


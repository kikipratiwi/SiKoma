<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->database(); 
		$this->load->helper('url');
		$this->load->helpers('money_format');
    }
    
    public function template()
	{
		$data['content'] = $this->load->view('templates/staff/header');
		$data['content'] = $this->load->view('templates/staff/sidebar');
		$data['content'] = $this->load->view('templates/staff/footer');

		return $this->load->view('templates/staff/template',$data);
    }
    
    public function index()
	{
		$data['content'] = $this->template();
		$this->load->view('templates/staff/dashboard',$data);
	}

	public function list_proposal()
	{
		$data['content'] = $this->template();
		$this->load->view('staff/list_proposal',$data);
	}

	public function list_revisi_proposal()
	{
		$data['content'] = $this->template();
		$this->load->view('staff/list_revisi',$data);
	}

	public function rejected()
	{
		$data['content'] = $this->template();
		$this->load->view('staff/rejected',$data);
	}

	public function list_fund_submission()
	{	
		$data['content'] = $this->template();
		$this->load->view('staff/list_fund_submission',$data);
	}
	
	public function finished()
	{		
		$data['content'] = $this->template();
		$this->load->view('staff/finished',$data);
	}

	public function report()
	{
		$data['content'] = $this->template();
		$this->load->view('staff/report',$data);
	}

	public function print_report()
	{
		$data['content'] = $this->template();
		$this->load->view('staff/print_report',$data);
	}

	public function edit_deadline()
	{
		$data['content'] = $this->template();
		$this->load->view('staff/edit_deadline',$data);
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

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Staff extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->database(); 
		$this->load->helper('url');
		$this->load->helpers('money_format');
		if($this->session->userdata('status') != "login" OR $this->session->userdata('role') != 5){
			redirect("Authentication/login");
		}
    }
    
    public function template()
	{
		$data['user_id'] = array(			
			'id' => $this->session->userdata('user_id'),
		);

		$data['content'] = $this->load->view('templates/staff/header', $data);
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
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/admin/proposal/new",
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
		$this->load->view('staff/list_proposal',$data);
	}

	public function list_revisi_proposal()
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/admin/proposal/revision",
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
		$this->load->view('staff/list_revisi',$data);
	}

	public function rejected()
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/admin/proposal/rejected",
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
		$this->load->view('staff/rejected',$data);
	}

	public function list_fund_submission()
	{	
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/admin/proposal/fund",
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
		$this->load->view('staff/list_fund_submission',$data);
	}
	
	public function finished()
	{		
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/admin/proposal/finished",
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
		$this->load->view('staff/finished',$data);
	}

	public function report()
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/admin/proposal/reported",
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
		$this->load->view('staff/report',$data);
	}

	//lpj
	public function updateReport()
	{
		$id = $_POST['id'];
		$budget = $_POST['budget'];

		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/admin/proposal/reported",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "id=".$id."&budget=".$budget,
		));

		$cmpt = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);		

		redirect('Staff/report');
	}

	public function addDeadline(){

		$deadline = $_POST['deadline']; 
		$currentDateTime = date('Y-m-d');
		$date1 = new DateTime($currentDateTime);
		$date2 = new DateTime($deadline);
		
		echo $_POST['proposal'];
		echo $deadline;

		if($date1 < $date2){
			$curl = curl_init();
			curl_setopt_array($curl, array(
			CURLOPT_URL => API_URL."/api/admin/proposal/revision",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",		
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "proposal=".$_POST['proposal']."&deadline=".$deadline."",
			));

			$cmpt = curl_exec($curl);

			$err = curl_error($curl);				
			curl_close($curl);		

			redirect('Staff/list_revisi_proposal');
		}
		else{
			$this->session->set_flashdata('error', 'Deadline tidak sesuai');
			redirect('Staff/list_revisi_proposal');
		}

		echo $selisih;

		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/admin/proposal/revision",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "proposal=".$_POST['proposal']."&deadline=".$deadline."",
		));

		$cmpt = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);		

		redirect('Staff/list_revisi_proposal');
	}

	public function updatefund()
	{
		$id = $_POST['id'];
		$budget = $_POST['budget'];

		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/admin/proposal/fund",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "id=".$id."&budget=".$budget,
		));

		$cmpt = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);		

		redirect('Staff/list_fund_submission');

	}

	public function updatedisfund()
	{
		$id = $_GET['id'];
		
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/admin/proposal/disfund",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "id=".$id."",
		));

		$cmpt = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);		

		redirect('Staff/list_fund_submission');

	}

	//spj
	public function updateFinancial()
	{
		$id = $_POST['id'];
		$note = $_POST['note'];
		$status = $_POST['radio'];
		echo $status;

		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/admin/proposal/financial",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "id=".$id."&note=".$note."&status=".$status,
		));

		$cmpt = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);		

		redirect('Staff/report');
	}

	//pengesahan
	public function updateLegalization()
	{
		$id = $_POST['id'];

		if(!empty($_FILES['legalization']['name']) ) {
			// setting konfigurasi upload
	        $config['upload_path'] = './data/legalization/'; 
	        $config['allowed_types'] = 'png';
	        $new_name = "Pengesahan_Proposal_".$id.".png";        
	        $config['file_name'] = $new_name;

	        // load library upload
	        $this->load->library('upload', $config);
			$this->upload->initialize($config);
	        if (!$this->upload->do_upload('legalization')) {
	            $error = $this->upload->display_errors();            
	            print_r($error);
	        } else {
	            $result = $this->upload->data();            
	        }

	        $curl = curl_init();
			curl_setopt_array($curl, array(
			CURLOPT_URL => API_URL."/api/admin/proposal/legalization",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",		
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "id=".$id."&legalization=".$new_name,
			));

			$cmpt = curl_exec($curl);

			$err = curl_error($curl);				
			curl_close($curl);		

			

	    }
	    redirect('Staff/report');

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
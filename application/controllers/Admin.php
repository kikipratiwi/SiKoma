<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->database(); // load database
		$this->load->model('m_competitions');
		$this->load->helper('url');
		$this->load->helpers('money_format');
		if($this->session->userdata('status') != "login" OR $this->session->userdata('role') != 4){
			redirect("Authentication/login");
		}
	}

	public function index()
	{
		// $data['content'] = $this->template();
		// $this->load->view('list_proposal_admin',$data);

		$db["competitions"] = $this->m_competitions->getData();
		$data1['content'] = $this->load->view('templates/admin/dashboard',$db);
		$data_['content_'] = $this->template($data1);
		$this->load->view('templates/admin/template',$data_);
    }
    
    public function template()
	{
		$data['content'] = $this->load->view('templates/admin/header');
		$data['content'] = $this->load->view('templates/admin/sidebar');
		$data['content'] = $this->load->view('templates/admin/footer');

		return $this->load->view('templates/admin/template',$data);
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
		$this->load->view('admin/list_proposal_admin',$data);
	}

	public function list_kompetisi()
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/competitions",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$cmpt = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$data['competition'] = json_decode($cmpt);		
		$data['content'] = $this->template();
		$this->load->view('admin/list_kompetisi_admin',$data);
	}

	public function input_kompetisi()
	{
		$data['content'] = $this->template();
		$this->load->view('admin/input_kompetisi_admin',$data);
	}

	public function print_report()
	{
		$data['content'] = $this->template();
		$this->load->view('admin/print_report',$data);
	}

	public function input_kategori()
	{
		$data['content'] = $this->template();
		$this->load->view('admin/input_kategori',$data);
	}

	public function master_student()
	{
		$data['content'] = $this->template();
		$this->load->view('admin/master_student',$data);
	}

	public function master_lecturer()
	{
		$data['content'] = $this->template();
		$this->load->view('admin/master_lecturer',$data);
	}

	public function master_student_organizations()
	{
		$data['content'] = $this->template();
		$this->load->view('admin/master_student_organizations',$data);
	}

	public function master_departement()
	{
		$data['content'] = $this->template();
		$this->load->view('admin/master_departement',$data);
	}

	public function master_study_program()
	{
		$data['content'] = $this->template();
		$this->load->view('admin/master_study_program',$data);
	}

	public function master_user()
	{
		$data['content'] = $this->template();
		$this->load->view('admin/master_user',$data);
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
		$this->load->view('admin/list_revisi',$data);
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
		$this->load->view('admin/list_fund_submission',$data);
	}

	public function updatefund()
	{
		$id = $_GET['id'];

		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/admin/proposal/fund",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "id=".$id."",
		));

		$cmpt = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);		

		redirect('Admin/list_fund_submission');

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

		redirect('Admin/list_fund_submission');

	}

	public function reset_password()
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL =>  API_URL."/api/users",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$users = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$data['user'] = json_decode($users);
		$data['content'] = $this->template();
		$this->load->view('admin/reset_password',$data);
	}

	public function act_reset_password()
	{
		$id = $_GET['id'];

		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL =>  API_URL."/api/user/reset",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "id=".$id."",
		));

		$users = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		redirect('Admin/reset_password');
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
		$this->load->view('admin/report',$data);
	}

	public function updateReport()
	{

		$id = $_GET['id'];

		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/admin/proposal/reported",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "id=".$id."",
		));

		$cmpt = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);		

		redirect('Admin/report');
	}

	public function import_data()
	{
		$data['content'] = $this->template();
		$this->load->view('admin/import_data',$data);
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
		$this->load->view('admin/rejected',$data);
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
		$this->load->view('admin/finished',$data);
	}

	//
	public function addDeadline(){
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/admin/proposal/revision",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "proposal=".$_POST['proposal']."&deadline=".$_POST['deadline']."",
		));

		$cmpt = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);		

		redirect('Admin/list_revisi_proposal');
	}

	public function act_add_competition()
	{
		//Kompetisi
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/competitions",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "name=".$_POST['name']."&inst=".$_POST['institusion']."&cmpt_level=".$_POST['level']."&ropen=".$_POST['regist_opendate']."&rclose=".$_POST['regist_closedate']."&estart=".$_POST['event_startdate']."&eend=".$_POST['event_closedate']."&location=".$_POST['location']."",
		));

		$cmpt = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);		

		redirect('Admin/list_kompetisi');
		
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
		// $test = $competitions->toArray();
		// foreach($competitions as  $key => $cmpt) {
		// 	echo $cmpt->competition->name;
		// 	echo $cmpt->department->name;
		// 	echo $cmpt->competition->location;
		// 	echo $cmpt->realisazion_budget;
		// 	echo $cmpt->budget_source;
		// }

		//  GET KOMPETISI
		$this->makeExcel($competitions);
          
	}

	public function makeExcel($competitions){
		$spreadsheet = new Spreadsheet;

          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'ID')
                      ->setCellValue('B1', 'Kompetisi')
                      ->setCellValue('C1', 'Jurusan')
                      ->setCellValue('D1', 'Lokasi')
                      ->setCellValue('E1', 'Dana')
                      ->setCellValue('F1', 'Sumber Dana');

                       // $spreadsheet->setActiveSheetIndex(0)->setCellValue('A2', 'ID')->setCellValue('B2', 'Kompetisi')->setCellValue('C2', 'Jurusan')->setCellValue('D2', 'Lokasi')->setCellValue('E2', 'Dana')->setCellValue('F2', 'Sumber Dana');
                      

          $kolom = 2;
          $nomor = 1;
          foreach($competitions as $cmpt) {

               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $cmpt->competition->name)
                           ->setCellValue('C' . $kolom, $cmpt->department->name)
                           ->setCellValue('D' . $kolom, $cmpt->competition->location)
                           ->setCellValue('E' . $kolom, $cmpt->realisazion_budget)
                           ->setCellValue('F' . $kolom, $cmpt->budget_source);                                          			
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

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

	//Kategori Kompetisi
	public function input_kategori()
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/admin/competitionscat",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$cmpt = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$data['competitioncat'] = json_decode($cmpt);		
		$data['content'] = $this->template();
		$this->load->view('admin/input_kategori',$data);
	}

	public function act_input_kategori()
	{
		//Kompetisi
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/admin/competitionscat",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "name=".$_POST['name'],
		));

		$cmpt = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);	

		redirect("Admin/input_kategori");	
	}

	public function act_delete_kategori(){
		$id = $_GET['id']; /* define later*/
		$curl = curl_init();
	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/admin/competitionscat?id=".$id."",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "DELETE",
		));

		$cmpt = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		redirect("Admin/input_kategori");	
	}

	public function act_update_kategori(){
		$curl = curl_init();
	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/admin/competitionscatu",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "id=".$_POST['id']."&name=".$_POST['name'],
		));

		$cmpt = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		redirect("Admin/input_kategori");	
	}



	public function master_student()
	{
		$data['content'] = $this->template();
		$this->load->view('admin/master_student',$data);
	}


	//DOSEN
	public function master_lecturer()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/mentors",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$cmpt = curl_exec($curl);
		$err = curl_error($curl);

		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/departments",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$dpt = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$data['department'] = json_decode($dpt);	
		$data['dosen'] = json_decode($cmpt);		
		$data['content'] = $this->template();
		$this->load->view('admin/master_lecturer',$data);
	}

	public function act_input_lecturer()
	{
		//Kompetisi
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/mentors",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "name=".$_POST['name']."&dpt=".$_POST['dpt']."&nip=".$_POST['nip'],
		));

		$cmpt = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);	

		redirect("Admin/master_lecturer");	
	}

	public function act_delete_lecturer(){
		$id = $_GET['id']; /* define later*/
		$curl = curl_init();
	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/mentors?id=".$id."",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "DELETE",
		));

		$cmpt = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		redirect("Admin/master_lecturer");	
	}

	public function act_update_lecturer(){
		$curl = curl_init();
	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/mentor",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "id=".$_POST['id']."&name=".$_POST['name']."&dpt=".$_POST['dpt']."&nip=".$_POST['nip'],
		));

		$cmpt = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		redirect("Admin/master_lecturer");	
	}


	//ORMAWA
	public function master_student_organizations()
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/ormawa",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$cmpt = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$data['ormawa'] = json_decode($cmpt);		
		$data['content'] = $this->template();
		$this->load->view('admin/master_student_organizations',$data);
	}

	public function act_input_ormawa()
	{
		//Kompetisi
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/ormawa",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "name=".$_POST['name']."&acr=".$_POST['acr'],
		));

		$cmpt = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);	

		redirect("Admin/master_student_organizations");	
	}

	public function act_delete_ormawa(){
		$id = $_GET['id']; /* define later*/
		$curl = curl_init();
	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/ormawa?id=".$id."",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "DELETE",
		));

		$cmpt = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		redirect("Admin/master_student_organizations");	
	}

	public function act_update_ormawa(){
		$curl = curl_init();
	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/ormawau",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "id=".$_POST['id']."&name=".$_POST['name']."&acr=".$_POST['acr'],
		));

		$cmpt = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		redirect("Admin/master_student_organizations");	
	}

	//JURUSAN
	public function master_departement()
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/departments",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$cmpt = curl_exec($curl);
		$err = curl_error($curl);


		curl_close($curl);

		$data['department'] = json_decode($cmpt);		
		$data['content'] = $this->template();
		$this->load->view('admin/master_departement',$data);
	}

	public function act_input_department()
	{
		//Kompetisi
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/departments",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "name=".$_POST['name'],
		));

		$cmpt = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);	

		redirect("Admin/master_departement");	
	}

	public function act_delete_department(){
		$id = $_GET['id']; /* define later*/
		$curl = curl_init();
	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/departments?id=".$id."",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "DELETE",
		));

		$cmpt = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		redirect("Admin/master_departement");	
	}

	public function act_update_department(){
		$curl = curl_init();
	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/departmentsu",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "id=".$_POST['id']."&name=".$_POST['name'],
		));

		$cmpt = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		redirect("Admin/master_departement");	
	}

	//Program STUDI
	public function master_study_program()
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/programs",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$cmpt = curl_exec($curl);
		$err = curl_error($curl);

		//Department
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/departments",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$dpt = curl_exec($curl);
		$errcmp = curl_error($curl);
		curl_close($curl);

		$data['department'] = json_decode($dpt);		
		$data['program'] = json_decode($cmpt);		
		$data['content'] = $this->template();
		$this->load->view('admin/master_study_program',$data);
	}

	public function act_input_program()
	{
		//Kompetisi
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/programs",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "name=".$_POST['name']."&dpt=".$_POST['dpt'],
		));

		$cmpt = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);	

		redirect("Admin/master_study_program");	
	}

	public function act_delete_program(){
		$id = $_GET['id']; /* define later*/
		$curl = curl_init();
	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/programs?id=".$id."",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "DELETE",
		));

		$cmpt = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		redirect("Admin/master_study_program");	
	}

	public function act_update_program(){
		$curl = curl_init();
	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/programsu",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "id=".$_POST['id']."&name=".$_POST['name']."&dpt=".$_POST['dpt'],
		));

		$cmpt = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		redirect("Admin/master_study_program");	
	}


	//USER
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
                      ->setCellValue('C1', 'Tahun')
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
                           ->setCellValue('C' . $kolom, $cmpt->competition->year)
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

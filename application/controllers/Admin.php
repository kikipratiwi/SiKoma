<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->database(); // load database
		$this->load->model('m_competitions');
		$this->load->model('m_proposals');
		$this->load->helper('url');
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
		$data['content'] = $this->template();
		$this->load->view('admin/reset_password',$data);
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

}

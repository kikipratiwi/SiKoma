<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mentor extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->model('proposal');
		// $this->load->database(); // load database
		$this->load->helper('url');
		if($this->session->userdata('status') != "login" OR $this->session->userdata('role') != 2){
			redirect("Authentication/login");
		}
	}

	public function index()
	{
		$data['content'] = $this->template();
		$this->load->view('templates/mentor/dashboard',$data);
    }
    
    
	public function template()
	{
		$data['content'] = $this->load->view('templates/mentor/header');
		$data['content'] = $this->load->view('templates/mentor/sidebar');
		$data['content'] = $this->load->view('templates/mentor/footer');

		return $this->load->view('templates/mentor/template',$data);
	}

	public function list_proposal()
	{
		$data['content'] = $this->template();
		$this->load->view('mentor/list_proposal_mentor',$data);
	}

	public function finished_submission()
	{
		$nip = $this->session->userdata('id');
		$curl = curl_init();
		
		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://localhost:8000/api/mentor/proposal/finished?nip=".$nip."",
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
		$this->load->view('mentor/finished_submission',$data);
	}

	public function ongoing_submission()
	{
		$nip = $this->session->userdata('id');
		$curl = curl_init();
		
		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://localhost:8000/api/mentor/proposal/ongoing?nip=".$nip."",
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
		$this->load->view('mentor/ongoing_submission',$data);
	}


}

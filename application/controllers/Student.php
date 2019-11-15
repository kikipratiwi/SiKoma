<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->model('student');
		// $this->load->database(); // load database
		$this->load->helper('url');
	}

	public function template()
	{
		$data['content'] = $this->load->view('templates/student/header');
		$data['content'] = $this->load->view('templates/student/sidebar');
		$data['content'] = $this->load->view('templates/student/footer');

		return $this->load->view('templates/student/template',$data);
	}

	public function index()
	{
		$data['content'] = $this->template();
		$this->load->view('student/ongoing_submission',$data);
    }
    
    public function proposal_submission() //form
	{
		//Jurusan
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://localhost:8000/api/departments",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));
		$dpt = curl_exec($curl);
		$err = curl_error($curl);

		//Kompetisi
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://localhost:8000/api/competitions",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$cmp = curl_exec($curl);
		$errcmp = curl_error($curl);

		$data['content'] = $this->template();
		$data['department'] = json_decode($dpt);
		$data['competition'] = json_decode($cmp);
		$this->load->view('student/proposal_submission',$data);
	}
	
	public function act_proposal_submission()
	{

	}

	public function act_add_competition()
	{

	}
    
    public function ongoing_submission()
	{
		$data['content'] = $this->template();
		$this->load->view('student/ongoing_submission',$data);
	}
    
    public function finished_submission()
	{
		$data['content'] = $this->template();
		$this->load->view('student/finished_submission',$data);
	}

	public function _proposal_submission()
	{	
		$data['content'] = $this->template();
		$this->load->view('student/proposal_submission',$data);
	}
}

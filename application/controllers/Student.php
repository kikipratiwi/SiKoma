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
		$this->load->view('templates/student/dashboard',$data);
    }
    
    public function proposal_submission()
	{
		$data['content'] = $this->template();
		$this->load->view('proposal_submission',$data);
    }
    
    public function your_submission()
	{
		$data['content'] = $this->template();
		$this->load->view('/your_submission',$data);
	}
}

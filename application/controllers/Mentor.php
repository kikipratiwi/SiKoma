<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mentor extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->model('proposal');
		// $this->load->database(); // load database
		$this->load->helper('url');
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
		$data['content'] = $this->template();
		$this->load->view('mentor/finished_submission',$data);
	}

	public function ongoing_submission()
	{
		$data['content'] = $this->template();
		$this->load->view('mentor/ongoing_submission',$data);
	}


}

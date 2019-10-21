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

		return $this->load->view('templates/student/template',$data);
	}


}

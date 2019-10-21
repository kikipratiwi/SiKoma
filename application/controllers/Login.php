<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->model('proposal');
		// $this->load->database(); // load database
		$this->load->helper('url');
	}

	public function index()
	{
		$data['content'] = $this->template();
		$this->load->view('login',$data);
	}

    public function template()
	{
		$data['content'] = $this->load->view('templates/login/header');
		$data['content'] = $this->load->view('templates/login/footer');

		return $this->load->view('login',$data);
	}

}

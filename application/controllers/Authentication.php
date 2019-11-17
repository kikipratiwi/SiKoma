<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->model('proposal');
		// $this->load->database(); // load database
		$this->load->helper('url');
	}

	public function login()
	{
		$data['content'] = $this->template();
		$this->load->view('login',$data);
	}

	public function login_act()
	{
		// jika role student, maka ke /Student (index=dashboard)
	}

	public function change_password() {
		$data['content'] = $this->template();
		$this->load->view('change_password',$data);
	}

    public function template()
	{
		$data['content'] = $this->load->view('templates/login/header');
		$data['content'] = $this->load->view('templates/login/footer');

		return $this->load->view('templates/template',$data);
	}

}

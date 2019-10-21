<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->model('proposal');
		// $this->load->database(); // load database
		$this->load->helper('url');
	}

	public function index()
	{
		$data['content'] = $this->template();
		$this->load->view('templates/admin/dashboard',$data);
    }
    
    public function template()
	{
		$data['content'] = $this->load->view('templates/admin/header');
		$data['content'] = $this->load->view('templates/admin/sidebar');
		$data['content'] = $this->load->view('templates/admin/footer');

		return $this->load->view('templates/admin/template',$data);
	}


}

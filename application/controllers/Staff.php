<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->database(); 
		$this->load->helper('url');
		$this->load->helpers('money_format');
    }
    
    public function template()
	{
		$data['content'] = $this->load->view('templates/staff/header');
		$data['content'] = $this->load->view('templates/staff/sidebar');
		$data['content'] = $this->load->view('templates/staff/footer');

		return $this->load->view('templates/staff/template',$data);
    }
    
    public function index()
	{
		$data['content'] = $this->template();
		$this->load->view('templates/staff/dashboard',$data);
	}

}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/student/header');
		$this->load->view('templates/student/sidebar');
		$this->load->view('templates/student/dashboard');
		$this->load->view('templates/student/footer');
    }
    
    public function proposal_submission()
	{
		$this->load->view('templates/student/header');
		$this->load->view('templates/student/sidebar');
		$this->load->view('templates/student/proposal_submission');
		$this->load->view('templates/student/footer');
    }
    
    public function your_submission()
	{
		$this->load->view('templates/student/header');
		$this->load->view('templates/student/sidebar');
		$this->load->view('templates/student/your_submission');
		$this->load->view('templates/student/footer');
	}
}

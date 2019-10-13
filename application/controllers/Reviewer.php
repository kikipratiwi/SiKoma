<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviewer extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/reviewer/header');
		$this->load->view('templates/reviewer/sidebar');
		$this->load->view('templates/reviewer/dashboard');
		$this->load->view('templates/reviewer/footer');
	}

	public function list_proposal()
	{
		$this->load->view('templates/reviewer/header');
		$this->load->view('templates/reviewer/sidebar');
		$this->load->view('templates/reviewer/list_proposal');
		$this->load->view('templates/reviewer/footer');
	}
}

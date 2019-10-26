<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviewer extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->model('proposal');
		// $this->load->database(); // load database
		$this->load->helper('url');
	}

	public function index()
	{
		$data['content'] = $this->template();
		$this->load->view('list_proposal',$data);
	}

	public function template()
	{
		$data['content'] = $this->load->view('templates/reviewer/header');
		$data['content'] = $this->load->view('templates/reviewer/sidebar');
		$data['content'] = $this->load->view('templates/reviewer/footer');

		return $this->load->view('templates/reviewer/template',$data);
	}

	public function list_proposal()
	{
		$data['content'] = $this->template();
		$this->load->view('list_proposal',$data);
	}

	public function list_review_proposal()
	{
		$data['content'] = $this->template();
		$this->load->view('list_review_proposal',$data);
	}
}

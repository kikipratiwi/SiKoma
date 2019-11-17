<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->database(); // load database
		$this->load->model('m_competitions');
		$this->load->model('m_proposals');
		$this->load->helper('url');
	}

	public function index()
	{
		// $data['content'] = $this->template();
		// $this->load->view('list_proposal_admin',$data);

		$db["competitions"] = $this->m_competitions->getData();
		$data1['content'] = $this->load->view('templates/admin/dashboard',$db);
		$data_['content_'] = $this->template($data1);
		$this->load->view('templates/admin/template',$data_);
    }
    
    public function template()
	{
		$data['content'] = $this->load->view('templates/admin/header');
		$data['content'] = $this->load->view('templates/admin/sidebar');
		$data['content'] = $this->load->view('templates/admin/footer');

		return $this->load->view('templates/admin/template',$data);
	}

	public function list_proposal()
	{
		$data['content'] = $this->template();
		$this->load->view('admin/list_proposal_admin',$data);
	}

	public function list_kompetisi()
	{
		$data['content'] = $this->template();
		$this->load->view('admin/list_kompetisi_admin',$data);
	}

	public function input_kompetisi()
	{
		$data['content'] = $this->template();
		$this->load->view('admin/input_kompetisi_admin',$data);
	}

	public function print_report()
	{
		$data['content'] = $this->template();
		$this->load->view('admin/print_report',$data);
	}

	public function list_revisi_proposal()
	{
		$data['content'] = $this->template();
		$this->load->view('admin/list_revisi',$data);
	}

	public function list_fund_submission()
	{
		$data['content'] = $this->template();
		$this->load->view('admin/list_fund_submission',$data);
	}

	public function reset_password()
	{
		$data['content'] = $this->template();
		$this->load->view('admin/reset_password',$data);
	}


}

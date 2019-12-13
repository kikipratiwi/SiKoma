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

	public function list_proposal()
	{
		$data['content'] = $this->template();
		$this->load->view('staff/list_proposal',$data);
	}

	public function list_revisi_proposal()
	{
		$data['content'] = $this->template();
		$this->load->view('staff/list_revisi',$data);
	}

	public function rejected()
	{
		$data['content'] = $this->template();
		$this->load->view('staff/rejected',$data);
	}

	public function list_fund_submission()
	{	
		$data['content'] = $this->template();
		$this->load->view('staff/list_fund_submission',$data);
	}
	
	public function finished()
	{		
		$data['content'] = $this->template();
		$this->load->view('staff/finished',$data);
	}

	public function report()
	{
		$data['content'] = $this->template();
		$this->load->view('staff/report',$data);
	}

	public function print_report()
	{
		$data['content'] = $this->template();
		$this->load->view('staff/print_report',$data);
	}

	public function edit_limit()
	{
		$data['content'] = $this->template();
		$this->load->view('staff/edit_deadline',$data);
	}
}

?>
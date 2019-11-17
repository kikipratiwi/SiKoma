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
		$this->load->view('templates/reviewer/dashboard',$data);
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
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://localhost:8000/api/reviewer/proposal/ongoing",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$proposal = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$data['proposal'] = json_decode($proposal);	
		$data['content'] = $this->template();

		$this->load->view('reviewer/list_proposal',$data);
	}

	public function list_review_proposal()
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://localhost:8000/api/reviewer/proposal/revision",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$proposal = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$data['proposal'] = json_decode($proposal);	
		$data['content'] = $this->template();
		$this->load->view('reviewer/revisi_proposal',$data);
	}

	public function review_proposal_submission(){
		$proposal = $_POST['proposal'];
		$rab = $_POST['rab'];
		$konten = $_POST['konten'];
		$status = $_POST['radio'];
		$dana = $_POST['budget'];
		$sumber = $_POST['source'];

		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://localhost:8000/api/reviewer/proposal",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "proposal=".$proposal."&rab=".$rab."&konten=".$konten."&status=".$status."&dana=".$dana."&sumber=".$sumber."",
		));

		$cmpt = curl_exec($curl);
		$err = curl_error($curl);				
		curl_close($curl);		

		redirect('Reviewer/list_proposal');


	}
}


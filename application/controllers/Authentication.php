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

	public function user_login()
	{
		$user = $this->input->post('username');
		$pwd = $this->input->post('password');
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://localhost:8000/api/login",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "username=".$user."&password=".$pwd."",
		));
		$user = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);				
		$us = json_decode($user);

		if($us->message == "success"){
			$id = $us->user->username;
			$name = $us->user->student->name;
			$department = $us->user->student->department_id;

			if($us->user->role == 2){
				$id = $us->user->lecturer->nip;
				$name = $us->user->lecturer->name;
				$department = $us->user->lecturer->department_id;
			}

			$data_session = array(
				'id' => $id,
				'name' => $name,
				'role' => $us->user->role,
				'token' => $us->token,
				'department' => $department,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			$this->login_act();
		}

		redirect('Authentication/login');
		
	}

	public function login_act()
	{
		// jika role student, maka ke /Student (index=dashboard)
		$role = $this->session->userdata('role');

		if($role == 1){
			redirect("Student");
		}
		else if($role == 2){
			redirect("Mentor");
		}
		else if($role == 3){
			redirect("Reviewer");
		}
		else{
			redirect("admin");		
		}
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

	public function logout(){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://localhost:8000/api/logout",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",		
		));
		$user = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);	

		$this->session->sess_destroy();			

		redirect("Authentication/login");
	}

}

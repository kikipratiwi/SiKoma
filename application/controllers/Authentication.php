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
		$user = $this->input->post('email');
		$pwd = $this->input->post('password');
		
		$curl = curl_init();
		echo API_URL."/api/login";
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/login",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "email=".$user."&password=".$pwd."",
		));
		$user = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);				
		$us = json_decode($user);

		if($us->message == "success"){
			if($us->user->role == 3 || $us->user->role == 4 || $us->user->role == 5){
				$id = 0;		
				$name = "Special Role";
				$department = 0;	
			}
			else if($us->user->role == 2){
				$id = $us->user->lecturer->id;		
				$name = $us->user->lecturer->name;
				$department = $us->user->lecturer->department_id;	
			}
			else{
				$id = $us->user->organization->id;		
				$name = $us->user->organization->acronym;
				$department = $us->user->organization->id;	
			}

			$data_session = array(
				'id' => $id,
				'name' => $name,
				'role' => $us->user->role,
				'token' => $us->token,
				'department' => $department,
				'status' => "login",
				'user_id' => $us->user->id
				);

			$this->session->set_userdata($data_session);

			$this->login_act();
		}

		redirect('Authentication/login');
		// $data_session = array(
		// 	'id' => $id,
		// 	'nama' => $us->user->ormawa->name,
		// 	'role' => $us->user->role,
		// 	'token' => $us->token,
		// 	'status' => "login"
		// 	);

		// $this->session->set_userdata($data_session);
		// $this->login_act();
	}

	public function login_act()
	{
		// jika role ormawa, maka ke /Ormawa (index=dashboard)
		$role = $this->session->userdata('role');

		if($role == 1){
			redirect("Ormawa");
		}
		else if($role == 2){
			redirect("Mentor");
		}
		else if($role == 3){
			redirect("Reviewer");
		}
		else if($role == 4){
			redirect("admin");		
		}

		else{
			redirect("Staff");		
		}
	}

	public function change_password() {

		$data['user_id'] = $this->input->get('id');
		$data['content'] = $this->template();
		$this->load->view('change_password',$data);
	}

	public function act_change_password() {

		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/users/password",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",		
		CURLOPT_POSTFIELDS => "id=".$_POST['id']."&cur_password=".$_POST['current_password']."&password=".$_POST['new_password']."&password_confirm=".$_POST['confirmation_new_password']."",
		));

		$tim = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);

		$role = $this->session->userdata('role');

		if($role == 1){
			redirect("Ormawa");
		}
		else if($role == 2){
			redirect("Mentor");
		}
		else if($role == 3){
			redirect("Reviewer");
		}
		else if($role == 4){
			redirect("admin");		
		}

		else{
			redirect("Staff");		
		}
	}

    public function template()
	{
		$data['content'] = $this->load->view('templates/login/header');
		$data['content'] = $this->load->view('templates/login/footer');

		return $this->load->view('templates/template',$data);
	}

	public function logout(){
		$authorization = "Authorization: Bearer ".$this->session->userdata('token');
		echo $authorization;

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/logout",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",		
		));
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
		$user = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);	

		$this->session->sess_destroy();			

	 	redirect("Authentication/login");
	}

}


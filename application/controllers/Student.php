<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->model('student');
		// $this->load->database(); // load database
		$this->load->helper('url');	
		if($this->session->userdata('status') != "login" OR $this->session->userdata('role') != 1){
			redirect("Authentication/login");
		}		
	}

	public function template()
	{
		$data['content'] = $this->load->view('templates/student/header');
		$data['content'] = $this->load->view('templates/student/sidebar');
		$data['content'] = $this->load->view('templates/student/footer');

		return $this->load->view('templates/student/template',$data);
	}

	public function index()
	{
		$nim = $this->session->userdata('id');

		$curl = curl_init();
	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/mahasiswa/proposal/all?nim=".$nim."",
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
		$this->load->view('templates/student/dashboard',$data);
    }
    
    public function proposal_submission() //form
	{
		//Jurusan
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/departments",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));
		$dpt = curl_exec($curl);
		$err = curl_error($curl);

		//Kompetisi
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/competitions",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$cmp = curl_exec($curl);
		$errcmp = curl_error($curl);
		

		//Cek LPJ		
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/mahasiswa/proposal/report?department=1",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$lpj = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$data['accountability_report'] = json_decode($lpj);
		$data['content'] = $this->template();
		$data['department'] = json_decode($dpt);
		$data['competition'] = json_decode($cmp);
		$this->load->view('student/proposal_submission',$data);
	}
	

	public function act_add_competition()
	{
		//Kompetisi
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/competitions",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "name=".$_POST['name']."&inst=".$_POST['institusion']."&cmpt_level=".$_POST['level']."&ropen=".$_POST['regist_opendate']."&rclose=".$_POST['regist_closedate']."&estart=".$_POST['event_startdate']."&eend=".$_POST['event_closedate']."&location=".$_POST['location']."",
		));

		$cmpt = curl_exec($curl);

		$err = curl_error($curl);				
		curl_close($curl);		

		redirect('Student/ongoing_submission');
		
	}
    
    public function ongoing_submission()
	{
		$nim = $this->session->userdata('id');
		$curl = curl_init();
		
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/mahasiswa/proposal/ongoing?nim=".$nim."",
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
		$this->load->view('student/ongoing_submission',$data);
	}
    
    public function finished_submission()
	{
		$nim = $this->session->userdata('id');
		$curl = curl_init();
	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/mahasiswa/proposal/finished?nim=".$nim."",
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
		$this->load->view('student/finished_submission',$data);
	}

	public function act_proposal_submission()
	{
		// setting konfigurasi upload
        $config['upload_path'] = './data/proposals/'; 
        $config['allowed_types'] = 'pdf';
        $new_name = "Proposal".$_POST['competition'].time().".pdf";        
        $config['file_name'] = $new_name;

        // load library upload
        $this->load->library('upload', $config);
		$this->upload->initialize($config);
        if (!$this->upload->do_upload('proposal')) {
            $error = $this->upload->display_errors();            
            print_r($error);
        } else {
            $result = $this->upload->data();            
        }

		//Proposal
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/mahasiswa/proposal",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "competition=".$_POST['competition']."&proposal=".$new_name."&department=".$_POST['department']."&draftbudget=".$_POST['budget']."&summary=".$_POST['summary']."",
		));

		$proposal = curl_exec($curl);
		$err = curl_error($curl);
		$prop = json_decode($proposal);		
		curl_close($curl);

		//Tim
		$index = 0; // Set index array awal dengan 0    
		foreach($this->input->post("leader") as $leader){ 

			$curl = curl_init();
			curl_setopt_array($curl, array(
			CURLOPT_URL => API_URL."/api/mahasiswa/team",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",		
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "leader=".$leader."&member1=".$this->input->post("member1")[$index]."&member2=".$this->input->post("member2")[$index]."&member3=".$this->input->post("member3")[$index]."&member4=".$this->input->post("member4")[$index]."&mentor=".$this->input->post("coach")[$index]."&proposal=".$prop->id_proposal."&competition=".$this->input->post("category")[$index]."",
			));	
			$tim = curl_exec($curl);
			$err = curl_error($curl);
			curl_close($curl);

			$index++;
		}

		redirect('Student/ongoing_submission');

	}

	public function revision_submission() {
		$proposal_id = $_GET['id']; /* define later*/
		$curl = curl_init();
	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/mahasiswa/proposal/?id=".$proposal_id."",
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
		$this->load->view('student/revision_submission',$data);
	}

	public function act_revision_submission() {
		$new_name = $_POST['oldproposal'];		

		echo $new_name;
		unlink("./data/proposals/".$new_name."");
		// setting konfigurasi upload
        $config['upload_path'] = './data/proposals/'; 
        $config['allowed_types'] = 'pdf';        
        $config['file_name'] = $new_name;

        // load library upload
        $this->load->library('upload', $config);
		$this->upload->initialize($config);

        if (!$this->upload->do_upload('proposal')) {
            $error = $this->upload->display_errors();            
            print_r($error);
        } else {
            $result = $this->upload->data();            
        }

        $curl = curl_init();
	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/mahasiswa/proposal/update",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "id=".$_POST['id_proposal']."",
		));

		$proposal = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);


        redirect('Student/ongoing_submission');
	}

}

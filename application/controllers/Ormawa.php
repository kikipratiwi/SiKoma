<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ormawa extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->model('ormawa');
		// $this->load->database(); // load database
		$this->load->helper('url');	
		if($this->session->userdata('status') != "login" OR $this->session->userdata('role') != 1){
			redirect("Authentication/login");
		}		
	}

	public function template()
	{
		$data['user'] = array(
			// 'id' => $this->session->userdata('id'),
			'name' => $this->session->userdata('name'),
		);
		$data['content'] = $this->load->view('templates/ormawa/header');
		$data['content'] = $this->load->view('templates/ormawa/sidebar', $data);
		$data['content'] = $this->load->view('templates/ormawa/footer');

		return $this->load->view('templates/ormawa/template',$data);
	}

	public function index()
	{
		$nim = $this->session->userdata('id');

		$curl = curl_init();
	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/ormawa/proposal/all?nim=".$nim."",
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
		$this->load->view('templates/ormawa/dashboard',$data);
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

		//Mahasiswa
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/students",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$student = curl_exec($curl);
		$errStudent = curl_error($curl);

		//Dosen
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/mentors",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$mentor = curl_exec($curl);
		$errMentor = curl_error($curl);

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
		$dptt = $this->session->userdata('department');	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/ormawa/proposal/report?department=1",
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
		$data['student'] = json_decode($student);
		$data['mentor'] = json_decode($mentor);
		$data['department'] = json_decode($dpt);
		$data['competition'] = json_decode($cmp);
		$this->load->view('ormawa/proposal_submission',$data);
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

		redirect('Ormawa/ongoing_submission');
		
	}
    
    public function ongoing_submission()
	{
		$id = $this->session->userdata('id');
		$curl = curl_init();
		
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/ormawa/proposal/ongoing?id=".$id."",
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
		$this->load->view('ormawa/ongoing_submission',$data);
	}
    
    public function finished_submission()
	{
		$id = $this->session->userdata('id');
		$curl = curl_init();
	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/ormawa/proposal/finished?id=".$id."",
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
		$this->load->view('ormawa/finished_submission',$data);
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
			CURLOPT_URL => API_URL."/api/ormawa/team",
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

		redirect('Ormawa/ongoing_submission');

	}

	public function revision_submission() {
		$proposal_id = $_GET['id']; /* define later*/
		$curl = curl_init();
	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/ormawa/proposal/?id=".$proposal_id."",
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
		$this->load->view('ormawa/_revision_submission',$data);
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
		CURLOPT_URL => API_URL."/api/ormawa/proposal/update",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "id=".$_POST['id_proposal']."",
		));

		$proposal = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);


        redirect('Ormawa/ongoing_submission');
	}

	public function realization_budget() {
		$id = $this->session->userdata('id');
		$curl = curl_init();
	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/ormawa/proposal/finished?id=".$id."",
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
		$this->load->view('ormawa/realization_budget',$data);
	}

}

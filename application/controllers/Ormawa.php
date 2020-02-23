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
			'name' => $this->session->userdata('name'),
		);
		$data['user_id'] = array(			
			'id' => $this->session->userdata('user_id'),
		);
		$data['content'] = $this->load->view('templates/ormawa/header', $data);
		$data['content'] = $this->load->view('templates/ormawa/sidebar', $data);
		$data['content'] = $this->load->view('templates/ormawa/footer');

		return $this->load->view('templates/ormawa/template',$data);
	}

	public function index()
	{
		$id = $this->session->userdata('id');

		$curl = curl_init();
	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/ormawa/proposal/all?id=".$id."",
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
		
		//Kategori
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/admin/competitionscat",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$cmpcat = curl_exec($curl);
		$errcmp = curl_error($curl);

		//Cek LPJ	
		$department = $this->session->userdata('department');	
		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL."/api/ormawa/proposal/report?organization=".$department,
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
		$data['competitioncat'] = json_decode($cmpcat);
		$this->load->view('ormawa/proposal_submission',$data);
	}

	public function act_proposal_submission()
	{		
		if(!empty($_FILES['proposal']['name']) && pathinfo($_FILES["proposal"]["name"], PATHINFO_EXTENSION) == 'pdf') {
			// setting konfigurasi upload
	        $config['upload_path'] = './data/proposals/'; 
	        $config['allowed_types'] = 'pdf';
	        $config['max_size'] = '2048';
	        $new_name = "Proposal".$_POST['competition'].time().".pdf";        
	        $config['file_name'] = $new_name;

	        // load library upload
	        $this->load->library('upload', $config);
			$this->upload->initialize($config);
	        if (!$this->upload->do_upload('proposal')) {
	            $error = $this->upload->display_errors();            
	            print_r($error);
	            redirect('Ormawa/ongoing_submission');
	        } else {
	            $result = $this->upload->data();            
	        }

	        $organization = $this->session->userdata('department');

	        //get budget
	        preg_match_all('/\d+/', $_POST['budget'], $matches);
	        $power = sizeof($matches[0]) - 2;
	        $budget = $matches[0][0] * pow(1000, $power);	        
	    	
			//Proposal
			$curl = curl_init();
			curl_setopt_array($curl, array(
			CURLOPT_URL => API_URL."/api/ormawa/proposal",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",		
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "competition=".$_POST['competition']."&proposal=".$new_name."&organization=".$organization."&draftbudget=".$budget."",
			));
			$proposal = curl_exec($curl);
			$err = curl_error($curl);
			$prop = json_decode($proposal);		
			curl_close($curl);

			//Tim
			$index = 0; // Set index array awal dengan 0    
			foreach($this->input->post("leader") as $key => $leader){ 
				$member1 = $this->input->post("member1")[$index];
				$member2 = $this->input->post("member2")[$index];
				$member3 = $this->input->post("member3")[$index];
				$member4 = $this->input->post("member4")[$index];
				$coach = $this->input->post("coach")[$index];
				$category = $this->input->post("category")[$index];

				if(!isset($member1)){ $member1 = 0; }
				if(!isset($member2)){ $member2 = 0; }
				if(!isset($member3)){ $member3 = 0; }
				if(!isset($member4)){ $member4 = 0; }

				echo $category;
				echo $coach;
				echo $leader;
				// echo $member1;
				// echo $member2;
				// echo $member3;
				// echo $member4;
				echo " ";
				
				$curl = curl_init();
				curl_setopt_array($curl, array(
				CURLOPT_URL => API_URL."/api/ormawa/team",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",		
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "POST",			
				CURLOPT_POSTFIELDS => "leader=".$leader."&member1=".$member1."&member2=".$member2."&member3=".$member3."&member4=".$member4."&mentor=".$coach."&proposal=".$prop->id_proposal."&competition=".$category."",
				));	
				$tim = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);

				$index++;
			}
		}

		redirect('Ormawa/ongoing_submission');
	}
	
	

	public function act_add_competition()
	{
		$event = $_POST['event_startdate']; 
		$currentDateTime = date('Y-m-d');
		$date1 = new DateTime($currentDateTime);
		$date2 = new DateTime($event);

		$diff = $date1->diff($date2);
		$selisih = $diff->format('%a');

		if($selisih >= 7){
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
		}
		else{
			$this->session->set_flashdata('error', 'Anda tidak bisa mengajukan proposal, pengajuan minimal h-7 lomba');
		}
		    	
		redirect('Ormawa/proposal_submission');
		
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
		$id_proposal = $_POST['id_proposal'];		

		if(!empty($_FILES['proposal']['name']) && pathinfo($_FILES["proposal"]["name"], PATHINFO_EXTENSION) == 'pdf') {
			unlink("./data/proposals/".$new_name."");
			// setting konfigurasi upload
	        $config['upload_path'] = './data/proposals/'; 
	        $config['allowed_types'] = 'pdf';
	        $config['max_size'] = '2048';        
	        $config['file_name'] = $new_name;

	        // load library upload
	        $this->load->library('upload', $config);
			$this->upload->initialize($config);

	        if (!$this->upload->do_upload('proposal')) {
	            $error = $this->upload->display_errors();            
	            print_r($error);
	            redirect('Ormawa/ongoing_submission');
	        } else {
	            $result = $this->upload->data();            
	        }

	        echo $id_proposal;	       
	        echo $_POST['summary'];

	       	preg_match_all('/\d+/', $_POST['budget'], $matches);
	        $inc = sizeof($matches[0]);
	        $power = sizeof($matches[0]) - 2;
	        $dana = $matches[0][0] * pow(1000, $power);	                

	        for ($i=1; $i < $inc; $i++) {         	
	        	$power--;

	        	if($power >= 0){
	        		$cur = $matches[0][$i] * pow(1000, $power);	                
	        		$dana = $dana + $cur;	
	        	}
	        }    	

	        $curl = curl_init();
		
			curl_setopt_array($curl, array(
			CURLOPT_URL => API_URL."/api/ormawa/proposal/update",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",		
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "id=".$id_proposal."&budget=".$dana,
			));

			$proposal = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);
			redirect('Ormawa/ongoing_submission');
		}
		else{
			$this->session->set_flashdata('error', 'File Proposal Tidak Sesuai');
			redirect('ormawa/revision_submission?id='.$id_proposal);
		}
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

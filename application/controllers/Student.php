<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->model('student');
		// $this->load->database(); // load database
		$this->load->helper('url');			
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
		$data['content'] = $this->template();
		$this->load->view('student/ongoing_submission',$data);
    }
    
    public function proposal_submission() //form
	{
		//Jurusan
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://localhost:8000/api/departments",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));
		$dpt = curl_exec($curl);
		$err = curl_error($curl);

		//Kompetisi
		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://localhost:8000/api/competitions",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		));

		$cmp = curl_exec($curl);
		$errcmp = curl_error($curl);

		$data['content'] = $this->template();
		$data['department'] = json_decode($dpt);
		$data['competition'] = json_decode($cmp);
		$this->load->view('student/proposal_submission',$data);
	}
	

	public function act_add_competition()
	{

	}
    
    public function ongoing_submission()
	{
		$data['content'] = $this->template();
		$this->load->view('student/ongoing_submission',$data);
	}
    
    public function finished_submission()
	{
		$data['content'] = $this->template();
		$this->load->view('student/finished_submission',$data);
	}

	public function act_proposal_submission()
	{
		// setting konfigurasi upload
        $config['upload_path'] = './proposals/'; 
        $config['allowed_types'] = 'doc|docx';
        $new_name = time().$_FILES["proposal"]['name'];        
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
		CURLOPT_URL => "http://localhost:8000/api/mahasiswa/proposal",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",		
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "competition=".$_POST['competition']."&proposal=".$new_name."&department=".$_POST['department']."&draftbudget=".$_POST['budget']."&summary=".$_POST['summary']."",
		));

		$proposal = curl_exec($curl);
		$err = curl_error($curl);
		$prop = json_decode($proposal);
		echo $prop->id_proposal;
		// echo $prop;
		curl_close($curl);

		//Tim
		$index = 0; // Set index array awal dengan 0    
		foreach($this->input->post("leader") as $leader){ 

			$curl = curl_init();
			curl_setopt_array($curl, array(
			CURLOPT_URL => "http://localhost:8000/api/mahasiswa/team",
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

	}

}

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
		$this->load->view('templates/student/dashboard',$data);
    }
    
    public function proposal_submission() //form
	{
		$data['content'] = $this->template();
		$this->load->view('proposal_submission',$data);
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

	public function _proposal_submission()
	{
		// [teams] => Array ( 
		// 	[coach] => Array ( 
		// 	  [0] => 1 
		// 	  [1] => 2 
		// 	) 
		// 	[leader] => Array ( 
		// 	  [0] => 234 
		// 	  [1] => 456 
		// 	) 
		// 	[member1] => Array ( 
		// 	  [0] => 234 
		// 	  [1] => 456 
		// 	) 
		// 	[member2] => Array ( 
		// 	  [0] => 234 
		// 	  [1] => 456 
		// 	) 
		// 	[member3] => Array ( 
		// 	  [0] => 234 
		// 	  [1] => 456 
		// 	) 
		// 	[member4] => Array ( 
		// 	  [0] => 234 
		// 	  [1] => 456 
		// 	)
		// )	
	}
}

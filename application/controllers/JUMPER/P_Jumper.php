<?php
defined('BASEPATH') or exit('No direct script access allowed');


class P_Jumper extends CI_Controller
{
	public function __construct()
	{
	 parent::__construct();
	
	  $this->load->model('JUMPER/Pjumper_Model', 'j');
	}
	public function index()
	{
   
	
	 $this->load->view("JUMPER/PJumper");

	}
	public function insertion(){
		

	
	
		$data = $this->j->submit($_POST["cardno"],$_POST["deptId"],$_POST["sectionid"],$_POST["designationid"]);
		// print_r($data);
		
		return $this->output
		->set_content_type('application/json')
		->set_status_header(200)
		->set_output(json_encode($data));
	
	
	}

	public function getemployeeData(){
    
		$data['dataTable'] = $this->j->gethistoryData();
		return $this->output
		->set_content_type('application/json')
		->set_status_header(200)
		->set_output(json_encode($data));
		// $this->load->view("JUMPER/PJumper",$data);
	}


	public function edit(){
		echo $_POST['id'];
		die;
		$data = $this->j->edit($_POST['id']);
	}


}

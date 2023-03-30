<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Efficiency_Process extends CI_Controller
{
    

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Efficiency_Process_Model', 'EPM');
	}

    public function index()
	{
 		
        $this->load->view('Efficiency_Process_View.php');	
    }
    
    public function getProcess(){
        $data['getProcess'] = $this->EPM->getProcess();

		return $this->output
		->set_content_type('application/json')
		->set_status_header(200)
		->set_output(json_encode($data));
    }

    public function insertProcess(){
        $data= $this->EPM->insertProcess($_POST['processSelect'],$_POST['etarget'],$_POST['samval']);
        return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }

    public function getEfficiencyData(){
        $data['getEfficiencyData'] = $this->EPM->getEfficiencyData();
		return $this->output
		->set_content_type('application/json')
		->set_status_header(200)
		->set_output(json_encode($data));
    }

    public function editEfficiencyData(){
        $data = $this->EPM->editEfficiencyData($_POST['PID']);
		return $this->output
		->set_content_type('application/json')
		->set_status_header(200)
		->set_output(json_encode($data));
    }

    public function updateEfficiencyData(){
        $data = $this->EPM->updateEfficiencyData($_POST['PID'],$_POST['emptarget'],$_POST['sam']);
		return $this->output
		->set_content_type('application/json')
		->set_status_header(200)
		->set_output(json_encode($data));
    }
    public function  DeletData(){
        $data = $this->EPM->DeletData($_POST['PID']);
		return $this->output
		->set_content_type('application/json')
		->set_status_header(200)
		->set_output(json_encode($data));
    }
}
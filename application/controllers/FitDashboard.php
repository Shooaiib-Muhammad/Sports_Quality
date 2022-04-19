<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FitDashboard extends CI_Controller {

    public function __construct()
    {
     parent::__construct();
     $this->load->model('LabModel', 'l');
     $this->load->model('FIT_Model');
     $this->load->library('session');
    }
    public function dashboard(){
   
        
//    $data['getData'] = $this->FIT_Model->CallData();
//    $data['TestType']=$this->FIT_Model->TestType();
   
//    $data['getPckg']=$this->FIT_Model->CallDataD();
  
//   $this->load->view('FIT/Capablity', $data);
        $this->load->view('FIT/Fitdashboard');
    }
}
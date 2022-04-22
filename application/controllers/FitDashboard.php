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


        $data['RequestCOunter'] = $this->FIT_Model->RequestCOunter();
        $data['getuser'] = $this->FIT_Model->getuser();
        $data['getApproved'] = $this->FIT_Model->getApproved();
        $data['getAmount'] = $this->FIT_Model->getAmount();
        $data['WeeklyData'] = $this->FIT_Model->getWeeklyrequestData();
        $data['getCountryCOunter'] = $this->FIT_Model->getCountryCOunter();
        
        $this->load->view('FIT/Fitdashboard',$data);
    }
}
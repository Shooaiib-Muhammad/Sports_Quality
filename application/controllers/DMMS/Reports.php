<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model('DMMS/Section_model', 'model');
        $this->load->model('DMMS/Department_model', 'd');
    }

    public function index()
    {
       
        $data['dept'] = $this->d->findall();
        $id =  $this->session->userdata('DeptID');

         $OnMachine = $this->model->getOnMachine($id);
  
             $data['ON'] = $OnMachine;
               //$data['OFF'] = $OFFMachine;
       // $data['sections'] = $sections;
        //$data['department'] = $id;
        $data['title'] = "Maintance Reports";
        $this->load->view("DMMS/MDetails", $data);
    }
     public function OnMachines()
    {
       
       
        $id =  $this->session->userdata('DeptID');

         $OnMachine = $this->model->machinedetils($id);
  
             $data['OnMachine'] = $OnMachine;
               //$data['OFF'] = $OFFMachine;
       // $data['sections'] = $sections;
        //$data['department'] = $id;
        $data['title'] = "ON Machines";
        $this->load->view("DMMS/Onmachine", $data);
    }

    public function OffMachines()
    {
       
       
        $id =  $this->session->userdata('DeptID');

         $OnMachine = $this->model->Offmachinedetils($id);
  
             $data['OnMachine'] = $OnMachine;
               //$data['OFF'] = $OFFMachine;
       // $data['sections'] = $sections;
        //$data['department'] = $id;
        $data['title'] = "OFF Machines";
        $this->load->view("DMMS/Offmachines", $data);
    }

}
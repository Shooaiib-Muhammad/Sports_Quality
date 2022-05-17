<?php

class Efficiency extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();
  $this->load->model('Efficiency_model', 'E');
  
  $this->load->model('RWPD_Model', 'RWPD');
 
 }

 public function index()
 {
  $data['count'] = $this->E->departments();
  $count=[];
  foreach($data['count'] as $c){
   array_push($count,$c['DeptName']);
  }
  $data['total']=count($count);
  $this->load->view('Efficiency/efficiency',$data);
 }

 public function departments(){

  $data['departments'] = $this->E->departments();
   

  $this->load->view('Efficiency/departments',$data);
 }

 public function sections(){

 
  $data['sections'] = $this->E->sections($_GET['id']);
 
  $this->load->view('Efficiency/sections',$data);
 }

 public function realTimeAtten(){

 
  $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'],$_GET['section_id']);
  

  // print_r($data['realtime']);
  // die;
  $this->load->view('Efficiency/realTimeAtten',$data);
 }
 public function RWPD(){
  $Month = date('m');
  $Year = date('Y');
  $Day = date('d');
  $CurrentDate = $Year . '-' . $Month . '-' . $Day;

  $data['machineCounter'] = $this->RWPD->machineCounter($CurrentDate, $CurrentDate);
  $total = 0;
  foreach ($data['machineCounter'] as $count) {

   $total = $total + $count['BallCounter'];
  }

  $data['total'] = $total;
  // echo "<pre>";
  $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'],$_GET['section_id']);
  

  // print_r($data['realtime']);
  // die;
  $this->load->view('Efficiency/RWPD',$data);
 }
 public function Cutting()
 {
  $Month = date('m');
  $Year = date('Y');
  $Day = date('d');
  $CurrentDate = $Year . '-' . $Month . '-' . $Day;
  
  $data['Counter'] = $this->RWPD->Cutting();
  // // $total = 0;
  // // foreach ($data['machineCounter'] as $count) {

  // //  $total = $total + $count['BallCounter'];
  // // }

  // // $data['total'] = $total;
  // // echo "<pre>";
  $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);


  // print_r($data['realtime']);
  // die;
  $this->load->view('Efficiency/Cutting', $data);
 }
 public function getEmployees(){

 // print_r($_POST);
 // die;
  $data = $this->E->getEmployees($_POST['section_id'],$_POST['dept_id'],$_POST['direct']);
  
  return $this->output
  ->set_content_type('application/json')
  ->set_status_header(200)
  ->set_output(json_encode($data));
 }

 public function getEmployeesNull(){
  $data = $this->E->getEmployeesNull($_POST['section_id'],$_POST['dept_id'],$_POST['direct']);
  return $this->output
  ->set_content_type('application/json')
  ->set_status_header(200)
  ->set_output(json_encode($data));
 }
}
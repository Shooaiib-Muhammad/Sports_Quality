<?php

class Efficiency extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();
  $this->load->model('Efficiency_model', 'E');
 
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

  $this->load->view('Efficiency/realTimeAtten',$data);
 }
}
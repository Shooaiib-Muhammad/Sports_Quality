<?php

class TMB extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();
  $this->load->model('LabModel', 'l');
 
 }


//  public function Capablity()
//  {

//    $data['getData'] = $this->FIT_Model->CallData();
//    $data['TestType']=$this->FIT_Model->TestType();
   
//    $data['getPckg']=$this->FIT_Model->CallDataD();
  
//   $this->load->view('FIT/Capablity', $data);
//  }
 
 
public function carcas(){
    $this->load->view('Efficiency/TMB/carcas');
}
public function lamination(){
    $this->load->view('Efficiency/TMB/lamination');
}

public function panelCutting(){
    $this->load->view('Efficiency/TMB/panelCutting');
}

public function assembly(){
    $this->load->view('Efficiency/TMB/assembly');
}
public function labellingPackaging(){
    $this->load->view('Efficiency/TMB/labellingPackaging');
}



}

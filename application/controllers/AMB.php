<?php

class AMB extends CI_Controller
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
 
 

public function SheetSizing(){
    $this->load->view('Efficiency/AMB/SheetSizing');
}
public function hfCutting(){
    $this->load->view('Efficiency/AMB/hfCutting');
}

public function assembly(){
    $this->load->view('Efficiency/AMB/assembly');
}
public function labellingPackaging(){
    $this->load->view('Efficiency/AMB/labellingPackaging');
}



}

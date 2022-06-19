<?php

class MSB extends CI_Controller
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
 
 
public function bladderWinding(){
    $this->load->view('Efficiency/MSB/bladderWinding');
}

public function SheetSizing(){
    $this->load->view('Efficiency/MSB/SheetSizing');
}
public function panelCutting(){
    $this->load->view('Efficiency/MSB/panelCutting');
}
public function panelPreparation(){
    $this->load->view('Efficiency/MSB/panelPreparation');
}
public function assembly(){
    $this->load->view('Efficiency/MSB/assembly');
}
public function labellingPackaging(){
    
    $this->load->view('Efficiency/MSB/labellingPackaging');
}



}

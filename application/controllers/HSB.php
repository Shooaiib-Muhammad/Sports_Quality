<?php

class HSB extends CI_Controller
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
    $this->load->view('Efficiency/HSB/carcas');
}
public function lamination(){
    $this->load->view('Efficiency/HSB/lamination');
}
public function SheetSizing(){
    $this->load->view('Efficiency/HSB/SheetSizing');
}
public function panelCutting(){
    $this->load->view('Efficiency/HSB/panelCutting');
}
public function panelPreparation(){
    $this->load->view('Efficiency/HSB/panelPreparation');
}
public function assembly(){
    $this->load->view('Efficiency/HSB/assembly');
}
public function labellingPackaging(){
    $this->load->view('Efficiency/HSB/labellingPackaging');
}



}

<?php

class Laminated extends CI_Controller
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
    $this->load->view('Efficiency/LFB/carcas');
}
public function lamination(){
    $this->load->view('Efficiency/LFB/lamination');
}
public function SheetSizing(){
    $this->load->view('Efficiency/LFB/SheetSizing');
}
public function hfCutting(){
    $this->load->view('Efficiency/LFB/hfCutting');
}
public function panelCutting(){
    $this->load->view('Efficiency/LFB/panelCutting');
}
public function panelPreparation(){
    $this->load->view('Efficiency/LFB/panelPreparation');
}
public function assembly(){
    $this->load->view('Efficiency/LFB/assembly');
}
public function labellingPackaging(){
    $this->load->view('Efficiency/LFB/labellingPackaging');
}



}

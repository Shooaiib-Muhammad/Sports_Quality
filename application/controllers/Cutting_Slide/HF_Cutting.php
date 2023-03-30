<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HF_Cutting extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Efficiency_model', 'E');
  $this->load->model('Cutting/Cutting_Model', 'Cutting');

  $this->load->model('RWPD_Model', 'RWPD');

 }

 public function index()
 {

    $Month = date('m'); 
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Day . '/' . $Month . '/' . $Year;
    $data['HourllyReading'] = $this->E->HourllyReadingHFCutting($CurrentDate, $CurrentDate);
    $data['hfcutting'] = $this->Cutting->HfCutting($CurrentDate);
    $total=[];
    foreach($data['hfcutting'] as $hf){
        array_push($total,$hf['Counter']);
    }

   $d=0;
    foreach($total as $t){
        $d=$d+$t;
    }
    $data['totalHF']=$d;


  $this->load->view("CuttingSlide/HCutting", $data);
 }

 
}

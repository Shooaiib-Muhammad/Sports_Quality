<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Cutting extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Efficiency_model', 'E');
  $this->load->model('Cutting/Cutting_Model', 'Cutting');
 }

 public function index()
 {

  $Month = date('m');
  $Year = date('Y');
  $Day = date('d');
  $CurrentDate = $Day . '/' . $Month . '/' . $Year;

  
  $data['machineCounter'] = $this->Cutting->machineCounter($CurrentDate , $CurrentDate);



  $total = 0;
  
  foreach ($data['machineCounter'] as $count) {

   $total = $total + $count['BallCounter'];

  }

  
  $data['total'] = $total;



  // echo "<pre>";
  //print_r($data['articleCounter']);
  //   echo "</pre>";
  // // // die;
  $this->load->view("Cutting/cutting", $data);
 }



 public function searchData()
 {

  $data['machineCounter'] = $this->Cutting->machineCounter(date("d/m/Y",strtotime($_POST['Sdate'])), date("d/m/Y", strtotime($_POST['Edate'])));

 

  // date("d/m/Y",strtotime($_POST['Sdate'])), date("d/m/Y",strtotime($_POST['Edate']))
  
  $total = 0;
  foreach ($data['machineCounter'] as $count) {

   
   $total = $total + $count['BallCounter'];
  }

  $data['total'] = $total;



  // echo "<pre>";
  //   print_r($data['articleCounter']);
  //   echo "</pre>";
  // // // die;
  $this->load->view("Cutting/cutingDateWise", $data);

 }

 public function HfCutting(){
    
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

    $data['dieTestingSheetSizing']=$this->E->dieTestingHfCutting();
    $data['dieTestingSheetSizingGraph']=$this->E->dieTestingHfCuttingGraph();
    $data['ONASheetSizing']=$this->E->ONAHfCutting();
    $data['ONASheetSizingGraph']=$this->E->ONAHfCuttingGraph();
    // print_r( $data['ONASheetSizingGraph']);
    // die;
    $data['machineTestingSheetSizing']=$this->E->machineTestingHfCutting();
    $data['machineTestingSheetSizingGraph']=$this->E->machineTestingHfCuttingGraph();

    
    $this->load->view("Cutting/HfCutting", $data);

 }


}

?>



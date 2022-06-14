<?php
defined('BASEPATH') or exit('No direct script access allowed');


class JUMPER extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
 
  $this->load->model('JUMPER/JUMPER_Model', 'j');
 }

 public function index()
 {

    $data['alldept'] = $this->j->CallDept();
    $data['alldesig'] = $this->j->CallDesig();
  $this->load->view("JUMPER/JUMPER",$data);
 }
public function CallData(){
    //echo "Called";
    $data = $this->j->CallData($_POST['cardNo']);
  
    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
}
public function Callsection($deptId){
    $data = $this->j->CallSection($deptId);
  
    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
}
public function CallDept(){
    $data = $this->j->CallDept();
  
    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
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
    $this->load->view("Cutting/HfCutting", $data);

 }


}

?>



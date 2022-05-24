<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LFB_Packing extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();

  $this->load->model('LFB_Packing/LFB_Packing_Model', 'LFB_Packing_Model');
 }

 public function index()
 {
  // echo "I am herer";
  // die;
  $Month = date('m');
  $Year = date('Y');
  $Day = date('d');
  $CurrentDate = $Day . '/' . $Month . '/' . $Year;

  $data['Counter'] = $this->LFB_Packing_Model->TotalCounter($CurrentDate, $CurrentDate);
  
  $data['Throsters'] = $this->LFB_Packing_Model->Throsters($CurrentDate, $CurrentDate);
// print_r($data['Counter']);
// die;
  $this->load->view("LFB_Packing/LFB_Packing", $data);
 }

 public function searchData()
 {
  $Date1=$_POST['Sdate'];
  $Date2=$_POST['Edate'];
  $SYear = substr($Date1, 0, 4);
  $SMonth = substr($Date1, 5, 2);
  $SDay = substr($Date1, -2, 2);
  $EYear = substr($Date2, 0, 4);
  //echo "<br>";
  $EMonth = substr($Date2, 5, 2);
  //echo "<br>";
  $EDay = substr($Date2, -2, 2);
  $StartDateeee = $SDay . '/' . $SMonth . '/' . $SYear;
  $EndDateeee = $EDay . '/' . $EMonth . '/' . $EYear;
  $data['Counter'] = $this->LFB_Packing_Model->TotalCounter($StartDateeee, $EndDateeee);

  $data['Throsters'] = $this->LFB_Packing_Model->Throsters($StartDateeee, $EndDateeee);
  // print_r($data['Counter']);
  // die;
  $data['SDate'] =$_POST['Sdate'];
  $data['EDate'] =$_POST['Edate'];
  $this->load->view("LFB_Packing/LFB_PackingDateWise", $data);
  // $this->load->view("UFB_Packing/UFB_PackingDateWise", $data);
 }
}

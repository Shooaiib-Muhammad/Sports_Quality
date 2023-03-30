<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AMB_Packing extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();

  $this->load->model('AMB_Packing/AMB_Packing_Model', 'AMB_Packing_Model');
 }

 public function index()
 {
  // echo "I am herer";
  // die;
  $Month = date('m');
  $Year = date('Y');
  $Day = date('d');
  $CurrentDate = $Day . '/' . $Month . '/' . $Year;
  $CurrentDateNew = $Year . '-' . $Month . '-' . $Day;
  $data['Data'] = $this->AMB_Packing_Model->TotalCounter($CurrentDateNew, $CurrentDateNew);
  
  

  $data['Stationwise'] = $this->AMB_Packing_Model->StationWise($CurrentDateNew, $CurrentDateNew);
// print_r($data['Counter']);
// die;
$this->load->view("AMBForming_Slide/AMB_Packing", $data);
 }

}

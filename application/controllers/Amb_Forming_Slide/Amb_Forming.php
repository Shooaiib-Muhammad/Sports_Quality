<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Amb_Forming extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();

  $this->load->model('AMB_Forming/AMB_Forming_Model', 'AMB_Packing_Model');
 }

 public function index()
 {
  // echo "I am herer";
  // die;
  $Month = date('m');
  $Year = date('Y');
  $Day = date('d');
  $CurrentDate = $Day . '/' . $Month . '/' . $Year;

  $data['Data'] = $this->AMB_Packing_Model->TotalCounter($CurrentDate, $CurrentDate);
  
  $data['Stationwise'] = $this->AMB_Packing_Model->StationWise($CurrentDate, $CurrentDate);
// print_r($data['Counter']);
// die;
  $this->load->view("AMBForming_Slide/AMBFoming", $data);
 }


 

}

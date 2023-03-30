<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TM_Packing extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();

  $this->load->model('TM_Packing/TM_Packing_Model', 'TM_Packing_Model');
 }

 public function index()
 {
  // echo "I am herer";
  // die;
  $Month = date('m');
  $Year = date('Y');
  $Day = date('d');
  $CurrentDate = $Day . '/' . $Month . '/' . $Year;

  $data['Data'] = $this->TM_Packing_Model->TotalCounter($CurrentDate, $CurrentDate);
  
  $data['Stationwise'] = $this->TM_Packing_Model->Stationwise($CurrentDate, $CurrentDate);
// print_r($data['Counter']);
// die;
  $this->load->view("Packing_Slide/TM_Packing", $data);
 }


}

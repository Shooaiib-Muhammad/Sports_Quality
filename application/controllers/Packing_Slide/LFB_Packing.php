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

  $data['Data'] = $this->LFB_Packing_Model->TotalCounter($CurrentDate, $CurrentDate);
  
  $data['Stationwise'] = $this->LFB_Packing_Model->Stationwise($CurrentDate, $CurrentDate);
// print_r($data['Stationwise']);
// die;
  $this->load->view("Packing_Slide/LFB_Packing", $data);
 }

 
}

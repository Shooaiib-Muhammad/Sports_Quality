<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Throster extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();

  $this->load->model('Throster_Model', 'T');
 }


 public function index()
 {
  // echo "I am herer";
  // die;
  $Month = date('m');
  $Year = date('Y');
  $Day = date('d');
  $CurrentDate = $Day . '/' . $Month . '/' . $Year;

  $data['Data'] = $this->T->TotalCounter($CurrentDate, $CurrentDate);
  
  $data['Stationwise'] = $this->T->Stationwise($CurrentDate, $CurrentDate);



// print_r($data['Counter']);
// die;
  $this->load->view("Throster_Slide/Throster", $data);
 }


}

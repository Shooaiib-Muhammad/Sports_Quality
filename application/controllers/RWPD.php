<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RWPD extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();

  $this->load->model('RWPD_Model', 'RWPD');
 }

 public function index()
 {

  $Month = date('m');
  $Year = date('Y');
  $Day = date('d');
  $CurrentDate = $Year . '-' . $Month . '-' . $Day;

  $data['machineCounter'] = $this->RWPD->machineCounter($CurrentDate, $CurrentDate);
  $data['poCounter'] = $this->RWPD->poCounter($CurrentDate, $CurrentDate);
  $data['articleCounter'] = $this->RWPD->articleCounter($CurrentDate, $CurrentDate);
  $total = 0;
  foreach ($data['machineCounter'] as $count) {

   $total = $total + $count['BallCounter'];
  }

  $data['total'] = $total;
  // echo "<pre>";
  //print_r($data['articleCounter']);
  //   echo "</pre>";
  // // // die;
  $this->load->view("RWPD/rwpd", $data);
 }

 public function searchData()
 {

  $data['machineCounter'] = $this->RWPD->machineCounter($_POST['Sdate'], $_POST['Edate']);
  $data['poCounter'] = $this->RWPD->poCounter($_POST['Sdate'], $_POST['Edate']);
  $data['articleCounter'] = $this->RWPD->articleCounter($_POST['Sdate'], $_POST['Edate']);
  $total = 0;
  foreach ($data['machineCounter'] as $count) {

   $total = $total + $count['BallCounter'];
  }

  $data['total'] = $total;
  // echo "<pre>";
  //   print_r($data['articleCounter']);
  //   echo "</pre>";
  // // // die;
  $this->load->view("RWPD/rwpdDateWise", $data);
 }
}

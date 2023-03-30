<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rwpd extends CI_Controller
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
    $CurrentDate = $Day . '/' . $Month . '/' . $Year;
    $currentDateNew = $Year . '-' . $Month . '-' . $Day;
    $data['IndividualReading'] = $this->RWPD->IndividualReading($currentDateNew, $currentDateNew);
    $data['machineCounter'] = $this->RWPD->machineCounter($CurrentDate, $CurrentDate);
    $total = 0;
    foreach ($data['machineCounter'] as $count) {

      $total = $total + $count['BallCounter'];
    }

    $data['total'] = $total;
    // echo "<pre>";
    // $data['realtime'] = $this->RWPD->realTimeAtten($_GET['dept_id'], $_GET['section_id']);

    $data['HourllyReading'] = $this->RWPD->HourllyReading($CurrentDate, $CurrentDate);

    // print_r($data['realtime']);
    // die;

  $this->load->view("RWPD_Slide/Rwpd", $data);
 }

 
}

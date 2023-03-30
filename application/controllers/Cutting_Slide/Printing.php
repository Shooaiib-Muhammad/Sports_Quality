<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Printing extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();

  $this->load->model('Efficiency_model', 'E');

  $this->load->model('RWPD_Model', 'RWPD');

 }

 public function index()
 {

    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    $data['HourllyReading'] = $this->E->HourllyReadingCutting($CurrentDate, $CurrentDate);
    $data['Counter'] = $this->RWPD->Cutting();
    // // $total = 0;
    // // foreach ($data['machineCounter'] as $count) {

    // //  $total = $total + $count['BallCounter'];
    // // }

    // // $data['total'] = $total;
    // // echo "<pre>";

    $data['count'] = $this->E->departments();
    $count = [];
    foreach ($data['count'] as $c) {
      array_push($count, $c['DeptName']);
    }
    $data['total'] = count($count);


    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);
    $data['dieTestingSheetSizing']=$this->E->dieTestingSheetSizing();
    $data['dieTestingSheetSizingGraph']=$this->E->dieTestingSheetSizingGraph();
    $data['ONASheetSizing']=$this->E->ONASheetSizing();
    $data['ONASheetSizingGraph']=$this->E->ONASheetSizingGraph();
    $data['machineTestingSheetSizing']=$this->E->machineTestingSheetSizing();
    $data['machineTestingSheetSizingGraph']=$this->E->machineTestingSheetSizingGraph();


  $this->load->view("CuttingSlide/SheetSizing", $data);
 }

 
}

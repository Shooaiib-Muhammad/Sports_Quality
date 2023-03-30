<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PanelCuttingPress extends CI_Controller
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
    $data['HourllyReading'] = $this->E->HourllyReadingPanelCutting($CurrentDate, $CurrentDate);
    $data['Counter'] = $this->RWPD->panelCutting();

    
    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);


    // print_r($data['realtime']);
    // die;


  $this->load->view("CuttingSlide/PanelCuttingPress", $data);
 }

 
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SheetSizing extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();

  $this->load->model('Efficiency_model', 'E');
  $this->load->model('Line1_model', 'L');



  $this->load->model('RWPD_Model', 'RWPD');

 }

 public function index()
 {

  // Sheet Sizing Graphs Data

    // $Month = date('m');
    // $Year = date('Y');
    // $Day = date('d');
    // $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    // $data['HourllyReading'] = $this->E->HourllyReadingCutting($CurrentDate, $CurrentDate);
    // $data['Counter'] = $this->RWPD->Cutting();
    // // // $total = 0;
    // // // foreach ($data['machineCounter'] as $count) {

    // // //  $total = $total + $count['BallCounter'];
    // // // }

    // // // $data['total'] = $total;
    // // // echo "<pre>";

    // $data['count'] = $this->E->departments();
    // $count = [];
    // foreach ($data['count'] as $c) {
    //   array_push($count, $c['DeptName']);
    // }
    // $data['total'] = count($count);


    // $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);
    // $data['dieTestingSheetSizing']=$this->E->dieTestingSheetSizing();
    // $data['dieTestingSheetSizingGraph']=$this->E->dieTestingSheetSizingGraph();
    // $data['ONASheetSizing']=$this->E->ONASheetSizing();
    // $data['ONASheetSizingGraph']=$this->E->ONASheetSizingGraph();
    // $data['machineTestingSheetSizing']=$this->E->machineTestingSheetSizing();
    // $data['machineTestingSheetSizingGraph']=$this->E->machineTestingSheetSizingGraph();



    // 4 new Graphs Data  Sheets Balls Houly Based

    $Month=date('m');
		$Year=date('Y');
		$Day=date('d');
		$result = $this->L->GetLineInfo();
		$MsLine1=$result[0]['LineName'];
		$LineID=$result[0]['LineID'];
 		$data['data_points']= $this->L->GetGraphData($Day, $Month, $Year, $LineID);
 		$data['LineName'] = $MsLine1;
		$data['LineID']  = $LineID;

		// $this->load->view('Line1/Production', $data);


  $this->load->view("CuttingSlide/SheetSizing", $data);
 }
 public function BallsSlide(){
  $Month=date('m');
		$Year=date('Y');
		$Day=date('d');
		$result = $this->L->GetLineInfo();
		$MsLine1=$result[0]['LineName'];
		$LineID=$result[0]['LineID'];
 		$data['data_points']= $this->L->GetGraphData($Day, $Month, $Year, $LineID);
 		$data['LineName'] = $MsLine1;
		$data['LineID']  = $LineID;

		// $this->load->view('Line1/Production', $data);


  $this->load->view("CuttingSlide/Balls", $data);
 }
 

 public function SheetsHourly(){
  $Month=date('m');
		$Year=date('Y');
		$Day=date('d');
		$result = $this->L->GetLineInfo();
		$MsLine1=$result[0]['LineName'];
		$LineID=$result[0]['LineID'];
 		$data['data_points']= $this->L->GetGraphData($Day, $Month, $Year, $LineID);
 		$data['LineName'] = $MsLine1;
		$data['LineID']  = $LineID;

		// $this->load->view('Line1/Production', $data);


  $this->load->view("CuttingSlide/SheetsHourly", $data);
 }
 public function BallsHourly(){
  $Month=date('m');
		$Year=date('Y');
		$Day=date('d');
		$result = $this->L->GetLineInfo();
		$MsLine1=$result[0]['LineName'];
		$LineID=$result[0]['LineID'];
 		$data['data_points']= $this->L->GetGraphData($Day, $Month, $Year, $LineID);
 		$data['LineName'] = $MsLine1;
		$data['LineID']  = $LineID;

		// $this->load->view('Line1/Production', $data);


  $this->load->view("CuttingSlide/BallsHourly", $data);
 }
 
 

 
}

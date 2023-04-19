<?php

class Efficiency extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Efficiency_model', 'E');

    $this->load->model('RWPD_Model', 'RWPD');


    $this->load->model('Lamination_Model/Lamination_Model', 'Lamination');

    $this->load->model('Bladder_model', 'Bladder');


    $this->load->model('Throster_Model', 'T');

    $this->load->model('TM_Packing/TM_Packing_Model', 'TM_Packing_Model');

    $this->load->model('AMB_Forming/AMB_Forming_Model', 'AMB_Packing_Model');

    $this->load->model('LFB_Packing/LFB_Packing_Model', 'LFB_Packing_Model');

    $this->load->model('AMB_Packing/AMB_Packing_Model', 'AMB_Packing_Model1');

    $this->load->model('carcas_model', 'carcas');

    $this->load->model('Ball_Shaping', 'Shaping');

    $this->load->model('Ball_Forming', 'BladderF');

    $this->load->model('Laser_cutting', 'LSC');
    $this->load->model('Lfb_Carcas1', 'lfb');
  }

  public function index()
  {
    $data['count'] = $this->E->departments();
    $count = [];
    foreach ($data['count'] as $c) {
      array_push($count, $c['DeptName']);
    }
    $data['total'] = count($count);




    // RWPD


    $data['count'] = $this->E->departments();

    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Day . '/' . $Month . '/' . $Year;
    $currentDateNew = $Year . '-' . $Month . '-' . $Day;

    $data['IndividualReading'] = $this->RWPD->IndividualReading($currentDateNew, $currentDateNew);
    $data['machineCounter'] = $this->RWPD->machineCounter($CurrentDate, $CurrentDate);

    $totalRWPD = 0;
    foreach ($data['machineCounter'] as $count) {

      $totalRWPD = $totalRWPD + $count['BallCounter'];
    }

    $data['totalRWPD'] = $totalRWPD;



    $data['HourllyReading'] = $this->E->HourllyReading($CurrentDate, $CurrentDate);


    // Downtime Sheet Sizing


    // $data['downTimeSheetSizing']=$this->E->downTimeSheetSizing();

    // Cutting
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    $data['HourllyReading'] = $this->E->HourllyReadingCutting($CurrentDate, $CurrentDate);
    $data['CounterSheetSizing'] = $this->RWPD->Cutting();



    // Printing

    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    $data['HourllyReadingP'] = $this->E->HourllyReadingCutting($CurrentDate, $CurrentDate);
    $data['CounterP'] = $this->RWPD->Cutting();
    // // $total = 0;
    // // foreach ($data['machineCounter'] as $count) {

    // //  $total = $total + $count['BallCounter'];
    // // }

    // // $data['total'] = $total;
    // // echo "<pre>";
    // $data['realtimeP'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);
    $data['dieTestingSheetSizingP'] = $this->E->dieTestingSheetSizing();
    $data['dieTestingSheetSizingGraphP'] = $this->E->dieTestingSheetSizingGraph();
    $data['ONASheetSizingP'] = $this->E->ONASheetSizing();
    $data['ONASheetSizingGraphP'] = $this->E->ONASheetSizingGraph();
    $data['machineTestingSheetSizingP'] = $this->E->machineTestingSheetSizing();
    $data['machineTestingSheetSizingGraphP'] = $this->E->machineTestingSheetSizingGraph();



    // Panel Cutting
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    $data['HourllyReading'] = $this->E->HourllyReadingCutting($CurrentDate, $CurrentDate);

    $data['Cutting'] = $this->RWPD->panelCutting();






    // HF Cutting
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Day . '/' . $Month . '/' . $Year;
    $data['HourllyReading'] = $this->E->HourllyReadingHFCutting($CurrentDate, $CurrentDate);
    $data['hfcutting'] = $this->RWPD->HfCutting($CurrentDate);
    $total = [];
    foreach ($data['hfcutting'] as $hf) {
      array_push($total, $hf['Counter']);
    }

    $d = 0;
    foreach ($total as $t) {
      $d = $d + $t;
    }
    $data['totalHF'] = $d;








    // Lamination
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    $CurrentDate1 = $Day . '/' . $Month . '/' . $Year;

    $data['TotalReading'] = $this->Lamination->TotalReading($CurrentDate, $CurrentDate);
    $data['IndividualReadingLamination'] = $this->Lamination->IndividualReading($CurrentDate1, $CurrentDate1);

    $data['HourllyReading'] = $this->Lamination->HourllyReading($CurrentDate, $CurrentDate);
    // $data['Lamination'] = $this->Lamination->getData($CurrentDate);
    // $data['getData'] = $this->Lamination->getData($CurrentDate);

    $totalLamination = 0;


    foreach ($data['TotalReading'] as $totalreading) {

      $totalLamination = $totalLamination + $totalreading['Reading'];
    }




    $data['totalLamination'] = $totalLamination;



    // Bladder
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    $data['getDataBladder'] = $this->Bladder->getData();
    $data['Stationwise'] = $this->Bladder->Stationwise($CurrentDate, $CurrentDate);




    // MS Lines
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Day . '/' . $Month . '/' . $Year;

    $data['DataMSLines'] = $this->T->TotalCounter($CurrentDate, $CurrentDate);

    $data['StationwiseMSLines'] = $this->T->Stationwise($CurrentDate, $CurrentDate);


    // TM Packing
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Day . '/' . $Month . '/' . $Year;

    $data['DataTMPacking'] = $this->TM_Packing_Model->TotalCounter($CurrentDate, $CurrentDate);

    $data['Stationwise'] = $this->TM_Packing_Model->Stationwise($CurrentDate, $CurrentDate);





    // AMB Forming
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Day . '/' . $Month . '/' . $Year;

    $data['DataAMBForming'] = $this->AMB_Packing_Model->TotalCounter($CurrentDate, $CurrentDate);

    $data['Stationwise'] = $this->AMB_Packing_Model->StationWise($CurrentDate, $CurrentDate);



    // AMB Packing
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Day . '/' . $Month . '/' . $Year;
    $CurrentDateNew = $Year . '-' . $Month . '-' . $Day;


    $data['DataAMBPacking'] = $this->AMB_Packing_Model1->TotalCounter($CurrentDateNew, $CurrentDateNew);






    // LFB Packing
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Day . '/' . $Month . '/' . $Year;

    $data['DataLFBPacking'] = $this->LFB_Packing_Model->TotalCounter($CurrentDate, $CurrentDate);

    $data['Stationwise'] = $this->LFB_Packing_Model->Stationwise($CurrentDate, $CurrentDate);



    // Carcas
    $data['getDataTMCarcas'] = $this->carcas->getDatacarcas();
    //$data['realtime'] = $this->E->realTimeAtten(3, 1165);

    $data['HourllyCore'] = $this->carcas->HourllyCarcas();



    // LFB Carcas
    $data['getDataLFBCarcas'] = $this->carcas->getlfbDatacarcas();
    //$data['realtime'] = $this->E->realTimeAtten(3, 1165);

    $data['HourllyCore'] = $this->carcas->HourllylfbCarcas();


    // Core
    $data['getDataCore'] = $this->carcas->getDatacore();
    //$data['realtime'] = $this->E->realTimeAtten(3, 1165);

    $data['HourllyCore'] = $this->carcas->HourllyCore();


    // Ball Forming

    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    $data['getDataBallForming'] = $this->BladderF->getData();
    $data['StationwiseBallForming'] = $this->BladderF->Stationwise($CurrentDate, $CurrentDate);
    $data['RowCounterBallForming'] = $this->BladderF->RowCounter();

    // Ball Shaping


    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    $data['getDataBallShaping'] = $this->Shaping->getData();
    $data['StationwiseBallShaping'] = $this->Shaping->Stationwise($CurrentDate, $CurrentDate);
    $data['RowCounterBallShaping'] = $this->Shaping->RowCounter();

    // TM Assembling

    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    $data['getDataTMAssembling'] = $this->BladderF->getDataTM();
    $data['StationwiseTMAssembling'] = $this->BladderF->StationwiseTM($CurrentDate, $CurrentDate);
    $data['RowCounterTMAssembling'] = $this->BladderF->RowCounterTM();


    // Laser Cutting

    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    $data['getDataLaserCutting'] = $this->LSC->getData();
    $data['StationwiseLaserCutting'] = $this->LSC->Stationwise($CurrentDate, $CurrentDate);
    $data['RowCounterLaserCutting'] = $this->LSC->RowCounter();
    // print_r($data['getData']);
    // die;
    $total = 0;
    foreach ($data['getDataLaserCutting'] as $count) {

      $total = $total + $count['OutPut'];
    }

    $data['total'] = $total;


    // Inflation

    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    $data['getDataInfilation'] = $this->lfb->getData();
    // $data['Stationwise'] = $this->lfb->Stationwise($CurrentDate, $CurrentDate);
    $data['RowCounter'] = $this->lfb->RowCounter();


    $this->load->view('Efficiency/efficiency', $data);
  }
  public function EffDashboard()
  {


    // $data['count'] = $this->E->departments();
    // $count = [];
    // foreach ($data['count'] as $c) {
    //   array_push($count, $c['DeptName']);
    // }
    // $data['total'] = count($count);




    // // RWPD


    // $data['count'] = $this->E->departments();

    // $Month = date('m');
    // $Year = date('Y');
    // $Day = date('d');
    // $CurrentDate = $Day . '/' . $Month . '/' . $Year;
    // $currentDateNew = $Year . '-' . $Month . '-' . $Day;
    $data['MSEfficiency'] = $this->RWPD->MSEfficiency();
    // $data['IndividualReading'] = $this->RWPD->IndividualReading($currentDateNew, $currentDateNew);
    // $data['machineCounter'] = $this->RWPD->machineCounter($CurrentDate, $CurrentDate);

    // $totalRWPD = 0;
    // foreach ($data['machineCounter'] as $count) {

    //   $totalRWPD = $totalRWPD + $count['BallCounter'];
    // }

    // $data['totalRWPD'] = $totalRWPD;



    // $data['HourllyReading'] = $this->E->HourllyReading($CurrentDate, $CurrentDate);


    // // Downtime Sheet Sizing


    // // $data['downTimeSheetSizing']=$this->E->downTimeSheetSizing();

    // // Cutting
    // $Month = date('m');
    // $Year = date('Y');
    // $Day = date('d');
    // $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    // $data['HourllyReading'] = $this->E->HourllyReadingCutting($CurrentDate, $CurrentDate);
    // $data['CounterSheetSizing'] = $this->RWPD->Cutting();



    // // Printing

    // $Month = date('m');
    // $Year = date('Y');
    // $Day = date('d');
    // $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    // $data['HourllyReadingP'] = $this->E->HourllyReadingCutting($CurrentDate, $CurrentDate);
    // $data['CounterP'] = $this->RWPD->Cutting();
    // // // $total = 0;
    // // // foreach ($data['machineCounter'] as $count) {

    // // //  $total = $total + $count['BallCounter'];
    // // // }

    // // // $data['total'] = $total;
    // // // echo "<pre>";
    // // $data['realtimeP'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);
    // $data['dieTestingSheetSizingP'] = $this->E->dieTestingSheetSizing();
    // $data['dieTestingSheetSizingGraphP'] = $this->E->dieTestingSheetSizingGraph();
    // $data['ONASheetSizingP'] = $this->E->ONASheetSizing();
    // $data['ONASheetSizingGraphP'] = $this->E->ONASheetSizingGraph();
    // $data['machineTestingSheetSizingP'] = $this->E->machineTestingSheetSizing();
    // $data['machineTestingSheetSizingGraphP'] = $this->E->machineTestingSheetSizingGraph();



    // // Panel Cutting
    // $Month = date('m');
    // $Year = date('Y');
    // $Day = date('d');
    // $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    // $data['HourllyReading'] = $this->E->HourllyReadingCutting($CurrentDate, $CurrentDate);

    // $data['Cutting'] = $this->RWPD->panelCutting();






    // // HF Cutting
    // $Month = date('m');
    // $Year = date('Y');
    // $Day = date('d');
    // $CurrentDate = $Day . '/' . $Month . '/' . $Year;
    // $data['HourllyReading'] = $this->E->HourllyReadingHFCutting($CurrentDate, $CurrentDate);
    // $data['hfcutting'] = $this->RWPD->HfCutting($CurrentDate);
    // $total = [];
    // foreach ($data['hfcutting'] as $hf) {
    //   array_push($total, $hf['Counter']);
    // }

    // $d = 0;
    // foreach ($total as $t) {
    //   $d = $d + $t;
    // }
    // $data['totalHF'] = $d;








    // // Lamination
    // $Month = date('m');
    // $Year = date('Y');
    // $Day = date('d');
    // $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    // $CurrentDate1 = $Day . '/' . $Month . '/' . $Year;

    // $data['TotalReading'] = $this->Lamination->TotalReading($CurrentDate, $CurrentDate);
    // $data['IndividualReadingLamination'] = $this->Lamination->IndividualReading($CurrentDate1, $CurrentDate1);

    // $data['HourllyReading'] = $this->Lamination->HourllyReading($CurrentDate, $CurrentDate);
    // // $data['Lamination'] = $this->Lamination->getData($CurrentDate);
    // // $data['getData'] = $this->Lamination->getData($CurrentDate);

    // $totalLamination = 0;


    // foreach ($data['TotalReading'] as $totalreading) {

    //   $totalLamination = $totalLamination + $totalreading['Reading'];
    // }




    // $data['totalLamination'] = $totalLamination;



    // // Bladder
    // $Month = date('m');
    // $Year = date('Y');
    // $Day = date('d');
    // $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    // $data['getDataBladder'] = $this->Bladder->getData();
    // $data['Stationwise'] = $this->Bladder->Stationwise($CurrentDate, $CurrentDate);




    // // MS Lines
    // $Month = date('m');
    // $Year = date('Y');
    // $Day = date('d');
    // $CurrentDate = $Day . '/' . $Month . '/' . $Year;

    // $data['DataMSLines'] = $this->T->TotalCounter($CurrentDate, $CurrentDate);

    // $data['StationwiseMSLines'] = $this->T->Stationwise($CurrentDate, $CurrentDate);


    // // TM Packing
    // $Month = date('m');
    // $Year = date('Y');
    // $Day = date('d');
    // $CurrentDate = $Day . '/' . $Month . '/' . $Year;

    // $data['DataTMPacking'] = $this->TM_Packing_Model->TotalCounter($CurrentDate, $CurrentDate);

    // $data['Stationwise'] = $this->TM_Packing_Model->Stationwise($CurrentDate, $CurrentDate);





    // // AMB Forming
    // $Month = date('m');
    // $Year = date('Y');
    // $Day = date('d');
    // $CurrentDate = $Day . '/' . $Month . '/' . $Year;

    // $data['DataAMBForming'] = $this->AMB_Packing_Model->TotalCounter($CurrentDate, $CurrentDate);

    // $data['Stationwise'] = $this->AMB_Packing_Model->StationWise($CurrentDate, $CurrentDate);



    // // AMB Packing
    // $Month = date('m');
    // $Year = date('Y');
    // $Day = date('d');
    // $CurrentDate = $Day . '/' . $Month . '/' . $Year;
    // $CurrentDateNew = $Year . '-' . $Month . '-' . $Day;


    // $data['DataAMBPacking'] = $this->AMB_Packing_Model1->TotalCounter($CurrentDateNew, $CurrentDateNew);






    // // LFB Packing
    // $Month = date('m');
    // $Year = date('Y');
    // $Day = date('d');
    // $CurrentDate = $Day . '/' . $Month . '/' . $Year;

    // $data['DataLFBPacking'] = $this->LFB_Packing_Model->TotalCounter($CurrentDate, $CurrentDate);

    // $data['Stationwise'] = $this->LFB_Packing_Model->Stationwise($CurrentDate, $CurrentDate);



    // // Carcas
    // $data['getDataTMCarcas'] = $this->carcas->getDatacarcas();
    // //$data['realtime'] = $this->E->realTimeAtten(3, 1165);

    // $data['HourllyCore'] = $this->carcas->HourllyCarcas();



    // // LFB Carcas
    // $data['getDataLFBCarcas'] = $this->carcas->getlfbDatacarcas();
    // //$data['realtime'] = $this->E->realTimeAtten(3, 1165);

    // $data['HourllyCore'] = $this->carcas->HourllylfbCarcas();


    // // Core
    // $data['getDataCore'] = $this->carcas->getDatacore();
    // //$data['realtime'] = $this->E->realTimeAtten(3, 1165);

    // $data['HourllyCore'] = $this->carcas->HourllyCore();


    // // Ball Forming

    // $Month = date('m');
    // $Year = date('Y');
    // $Day = date('d');
    // $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    // $data['getDataBallForming'] = $this->BladderF->getData();
    // $data['StationwiseBallForming'] = $this->BladderF->Stationwise($CurrentDate, $CurrentDate);
    // $data['RowCounterBallForming'] = $this->BladderF->RowCounter();

    // // Ball Shaping


    // $Month = date('m');
    // $Year = date('Y');
    // $Day = date('d');
    // $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    // $data['getDataBallShaping'] = $this->Shaping->getData();
    // $data['StationwiseBallShaping'] = $this->Shaping->Stationwise($CurrentDate, $CurrentDate);
    // $data['RowCounterBallShaping'] = $this->Shaping->RowCounter();

    // // TM Assembling

    // $Month = date('m');
    // $Year = date('Y');
    // $Day = date('d');
    // $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    // $data['getDataTMAssembling'] = $this->BladderF->getDataTM();
    // $data['StationwiseTMAssembling'] = $this->BladderF->StationwiseTM($CurrentDate, $CurrentDate);
    // $data['RowCounterTMAssembling'] = $this->BladderF->RowCounterTM();


    // // Laser Cutting

    // $Month = date('m'); 
    // $Year = date('Y');
    // $Day = date('d');
    // $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    // $data['getDataLaserCutting'] = $this->LSC->getData();
    // $data['StationwiseLaserCutting'] = $this->LSC->Stationwise($CurrentDate, $CurrentDate);
    // $data['RowCounterLaserCutting'] = $this->LSC->RowCounter();
    // // print_r($data['getData']);
    // // die;
    // $total = 0;
    // foreach ($data['getDataLaserCutting'] as $count) {

    //  $total = $total + $count['OutPut'];
    // }

    // $data['total'] = $total;


    // // Inflation

    // $Month = date('m'); 
    // $Year = date('Y');
    // $Day = date('d');
    // $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    // $data['getDataInfilation'] = $this->lfb->getData();
    // // $data['Stationwise'] = $this->lfb->Stationwise($CurrentDate, $CurrentDate);
    // $data['RowCounter'] = $this->lfb->RowCounter();

    $this->load->view('NewEfficiency', $data);
  }
  public function departments()
  {

    $data['departments'] = $this->E->departments();


    $this->load->view('Efficiency/departments', $data);
  }
  public function AirlessMini()
  {

    // print_r$data['departments'] = $this->E->departments();


    $this->load->view('Efficiency/AirlessMini/AirlessMini');
  }
  public function MS()
  {

    // print_r$data['departments'] = $this->E->departments();


    $this->load->view('Efficiency/MS/MS');
  }

  public function Gluing()
  {

    // print_r$data['departments'] = $this->E->departments();


    $this->load->view('Efficiency/AirlessMini/GLuing');
  }


  public function HF_Cutting()
  {

    // print_r$data['departments'] = $this->E->departments();


    $this->load->view('Efficiency/AirlessMini/HF_Cutting');
  }

  public function Sheet_Sizing()
  {

    // print_r$data['departments'] = $this->E->departments();


    $this->load->view('Efficiency/AirlessMini/Sheet_Sizing');
  }

  public function Panel_Preparation()
  {

    // print_r$data['departments'] = $this->E->departments();


    $this->load->view('Efficiency/AirlessMini/Panel_Preparation');
  }


  public function Assembly()
  {

    // print_r$data['departments'] = $this->E->departments();


    $this->load->view('Efficiency/AirlessMini/Assembly');
  }


  public function Final_Cleaning()
  {

    // print_r$data['departments'] = $this->E->departments();


    $this->load->view('Efficiency/AirlessMini/Final_Cleaning');
  }

  public function  LabelingAndPacking()
  {

    // print_r$data['departments'] = $this->E->departments();


    $this->load->view('Efficiency/AirlessMini/LabelingAndPacking');
  }

  public function  Bladder_Winding()
  {

    // print_r$data['departments'] = $this->E->departments();


    $this->load->view('Efficiency/MS/Bladder_Winding');
  }

  public function  Sheet_SizingMS()
  {

    // print_r$data['departments'] = $this->E->departments();


    $this->load->view('Efficiency/MS/Sheet_Sizing');
  }

  public function  Panel_CuttingMS()
  {

    // print_r$data['departments'] = $this->E->departments();


    $this->load->view('Efficiency/MS/Panel_Cutting');
  }

  public function  Panel_PreparationMS()
  {

    // print_r$data['departments'] = $this->E->departments();


    $this->load->view('Efficiency/MS/Panel_Preparation');
  }

  public function  AssemblyMS()
  {

    // print_r$data['departments'] = $this->E->departments();


    $this->load->view('Efficiency/MS/Assembly');
  }

  public function  LabelingAndPackingMS()
  {

    // print_r$data['departments'] = $this->E->departments();


    $this->load->view('Efficiency/MS/LabelingAndPacking');
  }



  public function sections()
  {


    $data['sections'] = $this->E->sections($_GET['id']);

    $this->load->view('Efficiency/sections', $data);
  }

  public function realTimeAtten()
  {


    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);


    // print_r($data['realtime']);
    // die;
    $this->load->view('Efficiency/realTimeAtten', $data);
  }
  public function RWPD()
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
    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);

    $data['HourllyReading'] = $this->E->HourllyReading($CurrentDate, $CurrentDate);
    // print_r($data['realtime']);
    // die;
    $this->load->view('Efficiency/RWPD', $data);
  }

  public function Cutting()
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
    $CurrentDate = $Day . '/' . $Month . '/' . $Year;

    $data['PressWiseData'] = $this->E->PressWiseData($CurrentDate, $CurrentDate);
    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);
    $data['dieTestingSheetSizing'] = $this->E->dieTestingSheetSizing();
    $data['dieTestingSheetSizingGraph'] = $this->E->dieTestingSheetSizingGraph();
    $data['ONASheetSizing'] = $this->E->ONASheetSizing();
    $data['ONASheetSizingGraph'] = $this->E->ONASheetSizingGraph();
    $data['machineTestingSheetSizing'] = $this->E->machineTestingSheetSizing();
    $data['machineTestingSheetSizingGraph'] = $this->E->machineTestingSheetSizingGraph();

    // print_r($data['downTimeSheetSizing']);
    // die;

    // print_r($data['realtime']);
    // die;

    $data['energy_C'] = $this->E->energy_C();
    $data['energy_C_Drill'] = $this->E->energy_C_Drill();

    $this->load->view('Efficiency/Cutting', $data);
  }



  public function Printing()
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
    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);
    $data['dieTestingSheetSizing'] = $this->E->dieTestingSheetSizing();
    $data['dieTestingSheetSizingGraph'] = $this->E->dieTestingSheetSizingGraph();
    $data['ONASheetSizing'] = $this->E->ONASheetSizing();
    $data['ONASheetSizingGraph'] = $this->E->ONASheetSizingGraph();
    $data['machineTestingSheetSizing'] = $this->E->machineTestingSheetSizing();
    $data['machineTestingSheetSizingGraph'] = $this->E->machineTestingSheetSizingGraph();

    $data['energy_C'] = $this->E->energy_C();
    $data['energy_C_Drill'] = $this->E->energy_C_Drill();

    $this->load->view('Efficiency/Printing', $data);
  }

  public function panelCutting()
  {
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    $data['HourllyReading'] = $this->E->HourllyReadingPanelCutting($CurrentDate, $CurrentDate);
    $data['Counter'] = $this->RWPD->panelCutting();


    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);

    $data['dieTestingSheetSizing'] = $this->E->panelCutting();
    $data['dieTestingSheetSizingGraph'] = $this->E->panelCuttingGraph();
    $data['ONASheetSizing'] = $this->E->ONAPanel();
    $data['ONASheetSizingGraph'] = $this->E->ONAPanelGraph();
    $data['machineTestingSheetSizing'] = $this->E->machineTestingPanel();
    $data['machineTestingSheetSizingGraph'] = $this->E->machineTestingPanelGraph();


    // print_r($data['realtime']);
    // die;
    $this->load->view('Efficiency/panelCutting', $data);
  }


  public function CuttingBladderWinding()
  {
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;

    $data['Counter'] = $this->RWPD->Cutting();
    // // $total = 0;
    // // foreach ($data['machineCounter'] as $count) {

    // //  $total = $total + $count['BallCounter'];
    // // }

    // // $data['total'] = $total;
    // // echo "<pre>";
    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);


    // print_r($data['realtime']);
    // die;
    $this->load->view('Efficiency/MS/CuttingBladderWinding', $data);
  }

  public function CuttingSheetSizing()
  {
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;

    $data['Counter'] = $this->RWPD->Cutting();
    // // $total = 0;
    // // foreach ($data['machineCounter'] as $count) {

    // //  $total = $total + $count['BallCounter'];
    // // }

    // // $data['total'] = $total;
    // // echo "<pre>";
    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);


    // print_r($data['realtime']);
    // die;
    $this->load->view('Efficiency/MS/CuttingSheetSizing', $data);
  }


  public function CuttingPanelCutting()
  {
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;

    $data['Counter'] = $this->RWPD->Cutting();
    // // $total = 0;
    // // foreach ($data['machineCounter'] as $count) {

    // //  $total = $total + $count['BallCounter'];
    // // }

    // // $data['total'] = $total;
    // // echo "<pre>";
    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);


    // print_r($data['realtime']);
    // die;
    $this->load->view('Efficiency/MS/CuttingPanelCutting', $data);
  }
  public function HSB34001()
  {

    $this->load->view('Efficiency/HSB34001');
  }

  public function TMB()
  {

    $this->load->view('Efficiency/TMB');
  }
  public function LFB()
  {

    $this->load->view('Efficiency/LFB');
  }
  public function AMB()
  {



    $this->load->view('Efficiency/AMB');
  }
  public function MSB()
  {

    // print_r$data['departments'] = $this->E->departments();


    $this->load->view('Efficiency/MSB');
  }
  public function CuttingPanelPreparation()
  {
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;

    $data['Counter'] = $this->RWPD->Cutting();
    // // $total = 0;
    // // foreach ($data['machineCounter'] as $count) {

    // //  $total = $total + $count['BallCounter'];
    // // }

    // // $data['total'] = $total;
    // // echo "<pre>";
    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);


    // print_r($data['realtime']);
    // die;
    $this->load->view('Efficiency/MS/CuttingPanelPreparation', $data);
  }

  public function CuttingAssembly()
  {
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;

    $data['Counter'] = $this->RWPD->Cutting();
    // // $total = 0;
    // // foreach ($data['machineCounter'] as $count) {

    // //  $total = $total + $count['BallCounter'];
    // // }

    // // $data['total'] = $total;
    // // echo "<pre>";
    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);


    // print_r($data['realtime']);
    // die;
    $this->load->view('Efficiency/MS/CuttingAssembly', $data);
  }

  public function CuttingLabelingAndPacking()
  {
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;

    $data['Counter'] = $this->RWPD->Cutting();
    // // $total = 0;
    // // foreach ($data['machineCounter'] as $count) {

    // //  $total = $total + $count['BallCounter'];
    // // }

    // // $data['total'] = $total;
    // // echo "<pre>";
    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);


    // print_r($data['realtime']);
    // die;
    $this->load->view('Efficiency/MS/CuttingLabelingAndPacking', $data);
  }

  public function CuttingCorGluining()
  {
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;

    $data['Counter'] = $this->RWPD->Cutting();
    // // $total = 0;
    // // foreach ($data['machineCounter'] as $count) {

    // //  $total = $total + $count['BallCounter'];
    // // }

    // // $data['total'] = $total;
    // // echo "<pre>";
    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);


    // print_r($data['realtime']);
    // die;
    $this->load->view('Efficiency/AirlessMini/CuttingCorGluining', $data);
  }


  public function CuttingHF_Cutting()
  {
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;

    $data['Counter'] = $this->RWPD->Cutting();
    // // $total = 0;
    // // foreach ($data['machineCounter'] as $count) {

    // //  $total = $total + $count['BallCounter'];
    // // }

    // // $data['total'] = $total;
    // // echo "<pre>";
    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);


    // print_r($data['realtime']);
    // die;
    $this->load->view('Efficiency/AirlessMini/CuttingHF_Cutting', $data);
  }


  public function CuttingSheetSizingAirless()
  {
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;

    $data['Counter'] = $this->RWPD->Cutting();
    // // $total = 0;
    // // foreach ($data['machineCounter'] as $count) {

    // //  $total = $total + $count['BallCounter'];
    // // }

    // // $data['total'] = $total;
    // // echo "<pre>";
    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);


    // print_r($data['realtime']);
    // die;
    $this->load->view('Efficiency/AirlessMini/CuttingSheetSizingAirless', $data);
  }

  public function CuttingPanelPreparationAirless()
  {
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;

    $data['Counter'] = $this->RWPD->Cutting();
    // // $total = 0;
    // // foreach ($data['machineCounter'] as $count) {

    // //  $total = $total + $count['BallCounter'];
    // // }

    // // $data['total'] = $total;
    // // echo "<pre>";
    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);


    // print_r($data['realtime']);
    // die;
    $this->load->view('Efficiency/AirlessMini/CuttingPanelPreparationAirless', $data);
  }


  public function CuttingAssemblyAirless()
  {
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;

    $data['Counter'] = $this->RWPD->Cutting();
    // // $total = 0;
    // // foreach ($data['machineCounter'] as $count) {

    // //  $total = $total + $count['BallCounter'];
    // // }

    // // $data['total'] = $total;
    // // echo "<pre>";
    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);


    // print_r($data['realtime']);
    // die;
    $this->load->view('Efficiency/AirlessMini/CuttingAssemblyAirless', $data);
  }


  public function CuttingFinalCleaningAirless()
  {
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;

    $data['Counter'] = $this->RWPD->Cutting();
    // // $total = 0;
    // // foreach ($data['machineCounter'] as $count) {

    // //  $total = $total + $count['BallCounter'];
    // // }

    // // $data['total'] = $total;
    // // echo "<pre>";
    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);


    // print_r($data['realtime']);
    // die;
    $this->load->view('Efficiency/AirlessMini/CuttingFinalCleaningAirless', $data);
  }

  public function CuttingLabelingAndPackingAirless()
  {
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;

    $data['Counter'] = $this->RWPD->Cutting();
    // // $total = 0;
    // // foreach ($data['machineCounter'] as $count) {

    // //  $total = $total + $count['BallCounter'];
    // // }

    // // $data['total'] = $total;
    // // echo "<pre>";
    $data['realtime'] = $this->E->realTimeAtten($_GET['dept_id'], $_GET['section_id']);


    // print_r($data['realtime']);
    // die;
    $this->load->view('Efficiency/AirlessMini/CuttingLabelingAndPackingAirless', $data);
  }


  public function getEmployees()
  {

    // print_r($_POST);
    // die;
    $data = $this->E->getEmployees($_POST['section_id'], $_POST['dept_id'], $_POST['direct']);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }

  public function getEmployeesNull()
  {
    $data = $this->E->getEmployeesNull($_POST['section_id'], $_POST['dept_id'], $_POST['direct']);
    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }

  public function getRWPDDateRangeData()
  {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $data['BarData'] = $this->E->getRWPDDateRangeDataBar($startDate, $endDate);
    $data['MachineData'] = $this->E->getRWPDDateRangeDataMachine($startDate, $endDate);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }

  public function getCuttingSheetSizingDateRangeData()
  {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $shift = $_POST['shift'];
    $data['BarData'] = $this->E->getCuttingSheetSizingDateRangeData($startDate, $endDate, $shift);
    $data['MachineData'] = $this->E->getCuttingSheetSizingDateRangeDataMachineWise($startDate, $endDate, $shift);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }

  public function getCuttingPanelDateRangeData()
  {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $data['BarData'] = $this->E->getCuttingPanelDateRangeData($startDate, $endDate);
    $data['MachineData'] = $this->E->getCuttingPanelDateRangeDataMachineWise($startDate, $endDate);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }

  public function getCuttingHFDateRangeData()
  {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $data['BarData'] = $this->E->getCuttingHFDateRangeData($startDate, $endDate);
    $data['MachineData'] = $this->E->getCuttingHFDateRangeDataMachineWise($startDate, $endDate);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }

  public function getLaminationDateRangeData()
  {

    $startDate = date("Y-m-d", strtotime($_POST['startDate']));
    $endDate = date("Y-m-d", strtotime($_POST['endDate']));

    //  $data['getData'] = $this->Lamination->getData($startDate, $endDate);
    $data['BarData'] = $this->E->getLaminationDateRangeData($startDate, $endDate);
    $data['MachineData'] = $this->E->getLaminationDateRangeDataMachineWise($startDate, $endDate);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }

  public function getInflationDateRangeData()
  {

    $startDate = date("Y-m-d", strtotime($_POST['startDate']));
    $endDate = date("Y-m-d", strtotime($_POST['endDate']));

    //  $data['getData'] = $this->Lamination->getData($startDate, $endDate);
    $data['BarData'] = $this->E->getInflationDateRangeData($startDate, $endDate);
    $data['MachineData'] = $this->E->getInflationDateRangeDataMachineWise($startDate, $endDate);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }

  public function getRealTimeDateRange()
  {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $data['realtime'] = $this->E->realTimeAttenDateRange($_POST['dept_id'], $_POST['section_id'], $startDate, $endDate);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }
  public function gettingambcoreData()
  {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $data['BarData'] = $this->E->gettingambcoreData($startDate, $endDate);
    //$data['MachineData'] = $this->E->getCuttingSheetSizingDateRangeDataMachineWise($startDate, $endDate);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }

  public function gettingCarcasData()
  {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $data['BarData'] = $this->E->gettingCarcasData($startDate, $endDate);
    //$data['MachineData'] = $this->E->getCuttingSheetSizingDateRangeDataMachineWise($startDate, $endDate);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }
  public function gettinglfbCarcasData()
  {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $data['BarData'] = $this->E->gettinglfbCarcasData($startDate, $endDate);
    //$data['MachineData'] = $this->E->getCuttingSheetSizingDateRangeDataMachineWise($startDate, $endDate);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }

  public function getMSLinesDateRangeData()
  {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $data['BarData'] = $this->E->getMSLinesDateRangeData($startDate, $endDate);
    $data['MachineData'] = $this->E->getMSLinesDateRangeDataMachineWise($startDate, $endDate);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }

  public function getBladderWindingDateRangeData()
  {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $data['BarData'] = $this->E->getBladderWindingDateRangeData($startDate, $endDate);
    $data['MachineData'] = $this->E->getBladderWindingDateRangeDataMachineWise($startDate, $endDate);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }
  public function getBladderWindingDateRangeDatanew()
  {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $data['BarData'] = $this->E->getBladderWindingDateRangeDatanew($startDate, $endDate);
    $data['MachineData'] = $this->E->getBladderWindingDateRangeDataMachineWisenew($startDate, $endDate);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }
  public function getBallFormingDateRangeData()
  {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $data['BarData'] = $this->E->getBallFormingDateRangeData($startDate, $endDate);
    $data['MachineData'] = $this->E->getBallFormingDateRangeDataMachineWise($startDate, $endDate);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }

  public function getBallShapingDateRangeData()
  {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $data['BarData'] = $this->E->getBallShapingDateRangeData($startDate, $endDate);
    $data['MachineData'] = $this->E->getBallShapingDateRangeDataMachineWise($startDate, $endDate);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }

  public function getLaserCuttingDateRangeData()
  {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $data['BarData'] = $this->E->getLaserCuttingDateRangeData($startDate, $endDate);
    $data['MachineData'] = $this->E->getLaserCuttingDateRangeDataMachineWise($startDate, $endDate);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }


  public function getTMDateRangeData()
  {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $data['BarData'] = $this->E->getTMDateRangeData($startDate, $endDate);
    $data['MachineData'] = $this->E->getTMDateRangeDataMachineWise($startDate, $endDate);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }

  public function getAMBAssemblingDateRangeData()
  {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $data['BarData'] = $this->E->getAMBAssemblingDateRangeData($startDate, $endDate);
    $data['MachineData'] = $this->E->getAMBAssemblingDateRangeDataMachineWise($startDate, $endDate);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }

  public function getAMBPackingDateRangeData()
  {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $data['BarData'] = $this->E->getAMBPackingDateRangeData($startDate, $endDate);
    $data['MachineData'] = $this->E->getAMBPackingDateRangeDataMachineWise($startDate, $endDate);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }

  public function getLFBDateRangeData()
  {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $data['BarData'] = $this->E->getLFBDateRangeData($startDate, $endDate);
    $data['MachineData'] = $this->E->getLFBDateRangeDataMachineWise($startDate, $endDate);

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
  }
}

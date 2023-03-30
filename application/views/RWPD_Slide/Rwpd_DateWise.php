<?php

class BladderWinding extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Bladder_model','Bladder');

  }



  public function index()
  {


    $Month = date('m'); 
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    $data['getData'] = $this->Bladder->getData();
    $data['Stationwise'] = $this->Bladder->Stationwise($CurrentDate, $CurrentDate);
    $this->load->view("CuttingSlides/bladder", $data);



  }





}

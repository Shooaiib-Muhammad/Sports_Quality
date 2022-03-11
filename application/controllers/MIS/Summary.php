<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Summary extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('MIS/summary_model');

}
public function index()

{
  $Month=date('m');
    $Year=date('Y');
    $Day=date('d');
 	$data['Data1']=$this->summary_model->Cutting($Month,$Year,$Day);
  	$data['foam']=$this->summary_model->foam($Month,$Year,$Day);
   	$data['fabric']=$this->summary_model->fabric($Month,$Year,$Day);
   $data['Data2']=$this->summary_model->getCarsasData($Month,$Year,$Day);
     $data['Data3']=$this->summary_model->getDippingData($Month,$Year,$Day);
      $data['Data4']=$this->summary_model->getAssemblingData($Month,$Year,$Day);
       $data['Data7']=$this->summary_model->getLfbData($Month,$Year,$Day);
 $data['Data6']=$this->summary_model->getFinalQcData($Month,$Year,$Day);
  $data['Data5']=$this->summary_model->getPanelShapeData($Month,$Year,$Day);
 $this->load->view('MIS/Summary/cutting',$data);

 
}

   public function data($Domain){
    $DAte = $Domain;

 	//echo "<br>";
 	 $Year=substr($DAte,0,4);
 	//echo "<br>";
 	 $Month=substr($DAte,5,2);
 	//echo "<br>";
 	 $Day=substr($DAte,-2,2);
    // Echo $Year;
    // echo "<br>";
    // Echo $Month;
    // echo "<br>";
    // Echo $Day;

   $data['Day']=$Month;
     $data['Month']=$Day;
       $data['Year']=$Year;
    	$data['Data1']=$this->summary_model->Cutting($Month,$Year,$Day);
     	$data['foam']=$this->summary_model->foam($Month,$Year,$Day);
   	$data['fabric']=$this->summary_model->fabric($Month,$Year,$Day);
   $data['Data2']=$this->summary_model->getCarsasData($Month,$Year,$Day);
     $data['Data3']=$this->summary_model->getDippingData($Month,$Year,$Day);
      $data['Data4']=$this->summary_model->getAssemblingData($Month,$Year,$Day);
       $data['Data7']=$this->summary_model->getLfbData($Month,$Year,$Day);
 $data['Data6']=$this->summary_model->getFinalQcData($Month,$Year,$Day);
  $data['Data5']=$this->summary_model->getPanelShapeData($Month,$Year,$Day);
 $this->load->view('MIS/Summary/CuttingD',$data);
   } 


}


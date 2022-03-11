<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TM extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('MIS/TM_model');
}
public function index()
{
$Month=date('m');
        $Year=date('Y');
        $Day=date('d');
        $data['line_data'] = $this->TM_model->getLinesdata($Day,$Month,$Year);
         $data['Lines_infro'] = $this->TM_model->getLinesinfo();
         $data['SumData'] = $this->TM_model->getSumdata($Day,$Month,$Year);
         $data['graph_data'] = NULL;
$this->load->view('MIS/TM',$data);

}
 public function GetprdData()
{
    $Month=date('m');
    $Year=date('Y');
    $Day=date('d');
    $VendorId = $this->input->post('VendorId');
    $Sdate = $this->input->post('Sdate');
    $Edate = $this->input->post('Edate');

    $Data['Sdate']=$Sdate;
    $Data['Edate']=$Edate;
    $Data['VendorId']=$VendorId;
    $Data['Lines_infro'] = $this->TM_model->getLinesinfo();
    $Data['line_data'] = $this->TM_model->getLinesdata($Day,$Month,$Year);
    $Data['graph_data'] = $this->TM_model->GetprdInfo($VendorId, $Sdate,$Edate);
    $Data['SumData'] = $this->TM_model->getSumdata($Day,$Month,$Year);
    
  $this->load->view('MIS/TM',$Data);
}
}

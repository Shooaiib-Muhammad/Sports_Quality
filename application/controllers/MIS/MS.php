<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ms extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('MIS/MS_Model');
}

public function index()
{
	$Month=date('m');
$Year=date('Y');
$Day=date('d');

$CurrentDate=$Year.'-'.$Month.'-'.$Day;
$Data['Date1']=$CurrentDate;
$Data['Date2']=$CurrentDate;
$Data['LineNo']=1;
$LineNo=1;
	$Data['MSLinesinfo'] = $this->MS_Model->MSLinesinfo();
	$Data['record']= $this->MS_Model->GetMsData($Day, $Month,$Year);
	$Data['Sum']=  $this->MS_Model->GetMsLineWiseSum($CurrentDate, $CurrentDate,$LineNo);
$Data['Line_Wise_record']=Null;
$this->load->view('MIS/MS',$Data);


}
 public function getAllData(){
	$Month=date('m');
$Year=date('Y');
$Day=date('d');
$Date1 = $this->input->post('Date1');
$Date2 = $this->input->post('Date2');
$LineNo = $this->input->post('LineNo');
$Data['Date1']=$Date1;
$Data['Date2']=$Date2;
$Data['LineNo']=$LineNo;

$Data['record']= $this->MS_Model->GetMsData($Day, $Month,$Year);
$Data['Line_Wise_record']=  $this->MS_Model->GetMsLineWiseData($Date1, $Date2,$LineNo);
$Data['Sum']=  $this->MS_Model->GetMsLineWiseSum($Date1, $Date2,$LineNo);
$Data['MSLinesinfo']= $this->MS_Model->MSLinesinfo();
$this->load->view('MIS/MS', $Data); 
  	}
}

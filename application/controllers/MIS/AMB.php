<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AMB extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('MIS/AMB_Model');
}
public function index()
{

$Month=date('m');
$Year=date('Y');
$Day=date('d');
$LineNo =1;
$CurrentDate=$Year.'-'.$Month.'-'.$Day;
$data['record']=Null;
if ($LineNo==1) {
$data['table']=1;
}else{
$data['table']=2;
}
$data['Date1']=$CurrentDate;
$data['Date2']=$CurrentDate;
$data['LineNo']=$LineNo;
$data['line_data'] = $this->AMB_Model->getlinedata();
$data['record']= $this->AMB_Model->getAllData($CurrentDate, $CurrentDate,$LineNo);
$data['Sum']=  $this->AMB_Model->getAllSum($CurrentDate, $CurrentDate,$LineNo);

$this->load->view('MIS/AMB',$data);
}
 public function getAllData(){
$Date1 = $this->input->post('Date1');
$Date2 = $this->input->post('Date2');
$LineNo = $this->input->post('LineNo');
$data['Date1']=$Date1;
$data['Date2']=$Date2;
$data['LineNo']=$LineNo;
if ($LineNo==1) {
	$data['table']=1;
}else{
	$data['table']=2;
}
$data['record']=  $this->AMB_Model->getAllData($Date1, $Date2,$LineNo);
$data['Sum']=  $this->AMB_Model->getAllSum($Date1, $Date2,$LineNo);
$data['line_data'] = $this->AMB_Model->getlinedata();
$this->load->view('MIS/Amb', $data); 
  	}
}

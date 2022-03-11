<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HS extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('MIS/HS_Model');
}
public function index()
{
$data['Record'] = Null;
$this->load->view('MIS/HS', $data); 
}
public function getAllData(){
	$Date1 = $this->input->post('Date1');
$Date2 = $this->input->post('Date2');
$data['Date1']=$Date1;
$data['Date2']=$Date2;
$data['Record'] = $this->HS_Model->getHSInfor($Date1,$Date2);
$data['Sum'] = $this->HS_Model->getHSSum($Date1,$Date2);
$this->load->view('MIS/HS', $data); 

 }
}
 

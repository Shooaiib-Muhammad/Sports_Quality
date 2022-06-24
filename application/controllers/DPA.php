<?php

class DPA extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();
  $this->load->model('LabModel', 'l');
  $this->load->model('DPAModel');
  $this->load->library('session');
 }

 public function index()
 {

  $data['Articles'] = $this->l->GetArticles();
  // $data['allDPA'] = $this->DPAModel->allDPA();
  // echo "<pre>";
  // print_r($data['allDPA']);
  // die;
  // echo "</pre>";
  $this->load->view('DPA/dpa', $data);
 }

 public function dpaLoad(){
  $data = $this->DPAModel->allDPA();
  return $this->output
  ->set_content_type('application/json')
  ->set_status_header(200)
  ->set_output(json_encode($data));
 }

 public function CallData()
 {

  $data = $this->DPAModel->CallData($_POST['article']);
  
  return $this->output
  ->set_content_type('application/json')
  ->set_status_header(200)
  ->set_output(json_encode($data));
 }  

 public function submit(){
  
 
  
  $data = $this->DPAModel->submit($_POST["article"],
  $_POST["working"],
  $_POST["pname"],
  $_POST["colorway"],
  $_POST["fcode"],
  $_POST["pshape"],
  $_POST["yields"],
  $_POST["client"],
 $_POST["model"],
 $_POST["art"],
  $_POST["ac"],
  $_POST["fbo"],
  $_POST["inhousedate"],
 $_POST["csdate"],
  $_POST["cr1comments"],
  $_POST["inhousedate1"],
  $_POST["csdate1"],
  $_POST["cr2comments"],
  $_POST["postD"],
  $_POST["comments"],
  $_POST["buymodel"],
 $_POST["buyarticle"],
  $_POST["revdate"],
  $_POST["retail"],
  $_POST["cars"],
  $_POST["remarks"],
  $_POST["mktg"],
  $_POST["fifa"],
  $_POST["inhouse"],
  $_POST["cs"],
  $_POST["inhouse1"],
  $_POST["cs1"],
  $_POST["approve"],
  $_POST["finalcs"],
  $_POST["br"],
  $_POST["mcs"],
    $_POST["DevType"],
  $_POST['finalSeason']);
  
  
  return $this->output
  ->set_content_type('application/json')
  ->set_status_header(200)
  ->set_output(json_encode($data));
 }

 public function getTableData(){

  $data = $this->DPAModel->getTableData($_POST['fc'],$_POST['season'],$_POST['fSeason']);
  return $this->output
  ->set_content_type('application/json')
  ->set_status_header(200)
  ->set_output(json_encode($data));
 }

 public function delteRecord(){
 
  $data = $this->DPAModel->delteRecord($_POST['id']);
 }

 public function updateDPA(){
  // echo "<pre>";
  // print_r($_POST);
  // die;
  // echo "</pre>";

  $data = $this->DPAModel->updateDPA( $_POST['id'],
  // $_POST['PrintingColors'],
  // $_POST['PanelShape'],
  $_POST['Yield'],
  $_POST['Article_Count'],
  $_POST['BF_Date'],
  $_POST['CR1_In_House_Date'],
  $_POST['CR1_Subbmition_Date'],
  $_POST['CR1_Comments'],
  $_POST['CR2_In_House_Date'],
  $_POST['CR2_Subbmition_Date'],
  $_POST['CR2_Comments'],
  $_POST['Post_CR2_Ex_fty'],
  $_POST['Comments_Remarks'],
  $_POST['EBR_Model_Date'],
  $_POST['EBR_Article_Date'],
  $_POST['Rev_BR_Date'],
  $_POST['Retail_Intro'],
  $_POST['Fty_Priority'],
  $_POST['Remarks'],
  $_POST['Mktg_FC'],
  $_POST['FIFA_authorization_validity_Date'],
  $_POST['CR1_In_House_Status'],
  $_POST['CR1_Subbmition_Status'],
  $_POST['CR2_In_House_Status'],
  $_POST['CR2_Subbmition_Status'],
  $_POST['Approved'],
  $_POST['Final_CS_Confirmation'],
  $_POST['BR_Status'],
  $_POST['MCS'],
  $_POST['DevTypeN'],
  $_POST['seasonN']);

  echo "Updated";

 }
}

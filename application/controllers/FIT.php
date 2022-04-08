<?php

class FIT extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();
  $this->load->model('LabModel', 'l');
  $this->load->model('FIT_Model');
  $this->load->library('session');
 }

 public function index()
 {

  // $data['Articles'] = $this->l->GetArticles();
  $this->load->view('FIT/Dashbaord');
 }
 public function Capablity()
 {

   $data['getData'] = $this->FIT_Model->CallData();
   
  $this->load->view('FIT/Capablity', $data);
 }
 
 public function CallData()
 {

  $data = $this->FIT_Model->CallData();

  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));
 }
 public function gettestData()
 {
  $Id = $_POST['Id'];
  $data = $this->FIT_Model->gettestData($Id);

  return $this->output
  ->set_content_type('application/json')
  ->set_status_header(200)
  ->set_output(json_encode($data));
 }
 public function submit()
 {


  $data = $this->FIT_Model->submit(
   $_POST["Type"],
   $_POST["Name"],
   $_POST["Method"],
   $_POST["Sprice"],
   $_POST["Sprice"],
   $_POST["GPrice"],
   $_POST["PPrice"],
   $_POST["SDays"],
   $_POST["PDays"],
   $_POST["Ggays"],
   $_POST["SDesc"],
   $_POST["Pdesc"],
   $_POST["GDesc"],
   $_POST["status"]
  );


  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));
 }

 public function getTableData()
 {
  $data = $this->DPAModel->getTableData($_POST['fc'], $_POST['season']);
  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));
 }

 public function Undotest($TID)
 {
  // $TID= $TID;

  // $data = $this->FIT_Model->undobtn($TID);
  // return $this->output
  //  ->set_content_type('application/json')
  //  ->set_status_header(200)
  //  ->set_output(json_encode($data));

  $data['undoTestType'] = $this->FIT_Model->undobtn($TID);
 }
}

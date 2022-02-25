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
  $this->load->view('DPA/dpa', $data);
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
  $_POST["mcs"]);

  
  return $this->output
  ->set_content_type('application/json')
  ->set_status_header(200)
  ->set_output(json_encode($data));
 }

 public function getTableData(){
  $data = $this->DPAModel->getTableData($_POST['article']);
  return $this->output
  ->set_content_type('application/json')
  ->set_status_header(200)
  ->set_output(json_encode($data));
 }
}

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
   $data['TestType']=$this->FIT_Model->TestType();
   
   $data['getPckg']=$this->FIT_Model->CallDataD();
  
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
 public function EditTest()
 {

  $allData=explode(",",$_POST['data']);




    if (!empty($_FILES['file']['name'])) {
      $config['upload_path'] = 'assets\img\img';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $config['file_name'] = basename($_FILES['file']['name']);

      //Load upload library and initialize configuration
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if ($this->upload->do_upload('file')) {
        $uploadData = $this->upload->data();
        $pictureFresh = $uploadData['file_name'];
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/img/img/' . $pictureFresh;
        $config['create_thumb'] = false;
        $config['maintain_ratio'] = false;
        $config['quality'] = '60%';
        $config['width'] = 800;
        $config['height'] = 600;
        $config['new_image'] = 'assets/img/img/' . $pictureFresh;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
      } else {
        echo 'nothing';

        $pictureFresh = '';
      }
    } else {
      $pictureFresh = '';
    }
  $data = $this->FIT_Model->EditTest(
    $allData[0],
    $allData[1],
    $allData[2],
    $allData[3],
    $allData[4],
    $allData[5],
    $allData[6],
    $allData[7],
    $allData[8],
    $allData[9],
    $allData[10],
    $allData[11],
      $pictureFresh
  );

  
  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));
 }
 public function submit()
 {

  $allData=explode(",",$_POST['data']);
    if (!empty($_FILES['file']['name'])) {
      $config['upload_path'] = 'assets\img\img';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $config['file_name'] = basename($_FILES['file']['name']);

      //Load upload library and initialize configuration
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if ($this->upload->do_upload('file')) {
        $uploadData = $this->upload->data();
        $pictureFresh = $uploadData['file_name'];
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/img/img/' . $pictureFresh;
        $config['create_thumb'] = false;
        $config['maintain_ratio'] = false;
        $config['quality'] = '60%';
        $config['width'] = 800;
        $config['height'] = 600;
        $config['new_image'] = 'assets/img/img/' . $pictureFresh;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
      } else {
        echo 'nothing';

        $pictureFresh = '';
      }
    } else {
      $pictureFresh = '';
    }


  $data = $this->FIT_Model->submit(
    $allData[0],
    $allData[1],
    $allData[2],
    $allData[3],
    $allData[4],
    $allData[5],
    $allData[6],
    $allData[7],
    $allData[8],
    $allData[9],
    $allData[10],
    $pictureFresh
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
 public function submitPackage()
 {
  $allData=explode(",",$_POST['data']);
  $data = $this->FIT_Model->submitPackage(
    $allData[0],
    $allData[1],
    $allData[2],
    $allData[3]
    
  );

  
  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));

 
 }

 public function Deletetest(){

  echo $_GET['TID'];
  $data['delete'] = $this->FIT_Model->Deletetest($_GET['TID']);
 }
 public function Deletepkg(){

  $data['delete'] = $this->FIT_Model->Deletepkg($_GET['TID']);
 }
 public function updatePkg(){

  
       

   $data['delete'] = $this->FIT_Model->updatePkg($_POST['Id'],$_POST['pkgtype'],$_POST['PName'],$_POST['PMethod'],$_POST['status']);
   return $this;
 }

 public function editPkg(){
  $Id = $_POST['Id'];
  $data = $this->FIT_Model->editPkg($Id);

  return $this->output
  ->set_content_type('application/json')
  ->set_status_header(200)
  ->set_output(json_encode($data));
 }
}

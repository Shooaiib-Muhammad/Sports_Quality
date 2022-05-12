<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaterialType extends CI_Controller {
    public function __construct()
    {
     parent::__construct();
    
     $this->load->model('MBB_model');
    
    }

    public function getMaterial(){
        $this->load->view('FIT/material');
    }

 public function submit()
 {

    // print_r($_POST);
    // die;

  $data['material'] = $this->MBB_model->material($_POST['Mname'],$_POST['status']);

 
  return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($data));
 }

 public function getdata(){
    $data['material'] = $this->MBB_model->getdata();

    return $this->output
     ->set_content_type('application/json')
     ->set_status_header(200)
     ->set_output(json_encode($data));
 }
 
 public function singleRecord(){
    $data= $this->MBB_model->singleRecord($_POST['id']);

    return $this->output
     ->set_content_type('application/json')
     ->set_status_header(200)
     ->set_output(json_encode($data));
}

public function singleRecordBag(){
    $data= $this->MBB_model->singleRecordBag($_POST['id']);

    return $this->output
     ->set_content_type('application/json')
     ->set_status_header(200)
     ->set_output(json_encode($data));
}

public function updateMaterial(){
    $data= $this->MBB_model->updateMaterial($_POST['id'],$_POST['Mname'],$_POST['status']);

    return $this->output
     ->set_content_type('application/json')
     ->set_status_header(200)
     ->set_output(json_encode($data));
}
}

?>
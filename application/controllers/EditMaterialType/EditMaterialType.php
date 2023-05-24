<?php
defined('BASEPATH') or exit('No direct script access allowed');


class EditMaterialType extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('EditMaterial_Model/EditMaterial_Model', 'm');

 }

 public function index()
 {

    $data['getLabRequestData'] = $this->m->getLabRequestData();
    
    $this->load->view("EditMaterialType/EditMaterialType", $data);
 }


 public function getLabRequestDataById()
 {
     $idGet = $_POST['Id'];
     $data = $this->m->getLabRequestDataById($idGet);

     return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
 }


 public function EditMaterialType()
 {
     $Id = $_POST['Id'];
     $materialName = $_POST['materialName'];
     
     // $data['detailsData'] = $this->l->getDetails($_GET['id']);
     $data = $this->m->EditMaterialType($Id,$materialName);

     return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
 }


 
 public function EditMaterialTypeCSS()
 {
     $cssCodetUpdate = $_POST['cssCodetUpdate'];
     $materialName = $_POST['materialName'];
     
     // $data['detailsData'] = $this->l->getDetails($_GET['id']);
     $data = $this->m->EditMaterialTypeCSS($cssCodetUpdate,$materialName);

     return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
 }


}

?>



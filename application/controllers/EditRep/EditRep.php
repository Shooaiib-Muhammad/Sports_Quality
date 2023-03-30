<?php
defined('BASEPATH') or exit('No direct script access allowed');


class EditRep extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('EditRep/EditRepModel', 'm');

 }

 public function index()
 {

    $data['getLabEditRep'] = $this->m->getLabEditRep();
    

    $this->load->view("EditRep/EditRep", $data);
 }


 public function getLabRepById()
 {
     $idGet = $_POST['Id'];
     $data = $this->m->getLabRepById($idGet);

     return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
 }



 public function EditLabRep()
 {
     $Id = $_POST['Id'];
     $Size = $_POST['Size'];
     $supplierName = $_POST['supplierName'];
     $quantityCarton = $_POST['quantityCarton'];
     
     // $data['detailsData'] = $this->l->getDetails($_GET['id']);
     $data = $this->m->EditLabRep($Id,$Size,$supplierName,$quantityCarton);

     return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
 }


}

?>



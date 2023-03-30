<?php
defined('BASEPATH') or exit('No direct script access allowed');


class EditCss extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('EditCssModel/EditCssModel', 'css');

 }

 public function index()
 {

    $data['getCSSDataBlank'] = $this->css->getCSSDataBlank();
    $data['getTestRequests'] = $this->css->getTestRequests();

    

    $this->load->view("EditCss/EditCss", $data);
 }


 public function getNullCssDataById()
 {
     $idGet = $_POST['Id'];
     $data = $this->css->getNullCssDataById($idGet);

     return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
 }

 


 public function EditCssCode()
 {
     $Id = $_POST['Id'];
     $CSSNo = $_POST['cssCode'];
     

     // $data['detailsData'] = $this->l->getDetails($_GET['id']);
     $data = $this->css->EditCssCode($Id,$CSSNo);


     return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
 }



}

?>



<?php
defined('BASEPATH') or exit('No direct script access allowed');


class DigitalizationP extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
 
 }

 public function index()
 {

  $this->load->view("Digitalization_Projects/DigitalizationP");
 }


}

?>



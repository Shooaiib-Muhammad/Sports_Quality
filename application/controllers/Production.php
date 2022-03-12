<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductionController extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('Production_Model');
}
public function index(){

$this->load->view('Welcome/Dashboard');
}

}

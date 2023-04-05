<?php
defined('BASEPATH') or exit('No direct script access allowed');

class B34006 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MIS/AMB_Model');
    }
    public function index()
    {

        $this->load->view("MIS/B34006");
    }
}

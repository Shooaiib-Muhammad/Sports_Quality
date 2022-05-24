<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lamination extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Section_model', 's');
        
    }

    public function index()
    {
        $this->load->view('Lamination/lamination');
    }
   }
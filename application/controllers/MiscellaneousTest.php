<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MiscellaneousTest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
   
        $this->load->model('miscellaneousTestModel', 'm');
    }

    public function index()
    {
        $data['miscellaneous'] = $this->m->CallMiscellaneousTest();
        
        $this->load->view('MiscellaneousTest', $data);
    }



}

?>
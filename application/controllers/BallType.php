<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BallType extends CI_Controller {
    public function __construct()
    {
     parent::__construct();
    
     $this->load->model('MBB_model');
    }

    public function getBalls(){
        $this->load->view('FIT/balls');

    }
 

}
?>
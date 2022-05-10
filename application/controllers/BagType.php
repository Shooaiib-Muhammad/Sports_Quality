<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BagType extends CI_Controller {
    public function __construct()
    {
     parent::__construct();
    
      $this->load->model('MBB_model','mbb');
    
    }

    public function getBags(){
        $this->load->view('FIT/bags');

    }
    public function submit(){
        $data['getbagsData']=$this->mbb->getbagsData();
        print_r($data);
        
        $this->load->view('bags',$data);
    }
 

}
?>
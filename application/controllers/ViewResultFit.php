<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewResultFit extends CI_Controller {
    public function __construct()
    {
     parent::__construct();
    
     $this->load->model('ResultFit','RF');
   
    }

   public function totalrequest(){
    $data['trequest'] = $this->RF->trequest();
       $this->load->view('FIT/totalRequest',$data);
   }
   public function activeuser(){
    $data['auser'] = $this->RF->auser();

    $this->load->view('FIT/activeUser',$data);
}
public function approvedrequest(){
    $data['arequest'] = $this->RF->arequest();

    $this->load->view('FIT/approvedRequest',$data);
}
public function amountgain(){
    $data['again'] = $this->RF->again();

    $this->load->view('FIT/amountGain',$data);
}   
   

}
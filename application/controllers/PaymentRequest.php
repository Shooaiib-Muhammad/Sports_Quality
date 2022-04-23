<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentRequest extends CI_Controller {
    public function __construct()
    {
     parent::__construct();
    
     $this->load->model('Payment');
     $this->load->model('Approved');
    //  $this->load->library('session');
    }

    
    public function verify(){
        $ID=$_POST['TID'];
       // $CssNo=$_POST['CSSNo'];
        $data =$this->Payment->verify($ID);
        
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));

    }

    public function payment(){
        
        $data['getpending']=$this->Payment->getPending();
        $data['getApproved']=$this->Payment->getApproved();
        $data['pendingEvidance'] = $this->Payment->pendingEvidance();
   
        $this->load->view('FIT/paymentRequest', $data);
    }
}
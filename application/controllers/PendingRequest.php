<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PendingRequest extends CI_Controller {
    
    public function __construct()
    {
     parent::__construct();
    
     $this->load->model('Pending');
     $this->load->model('Approved');
    //  $this->load->library('session');
    }

    public function pendingRequest(){

        $data['getpending']=$this->Pending->getPending();
        $data['getApproved']=$this->Approved->getApproved();
        $this->load->view('FIT/pendingRequest',$data);
    }
    public function AddCssNo(){
        $ID=$_POST['TID'];
        $CssNo=$_POST['CSSNo'];
        $data =$this->Pending->AddCSSNo($ID,$CssNo);
        
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));

    }
}
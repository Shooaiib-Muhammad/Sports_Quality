<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BallType extends CI_Controller {
    public function __construct()
    {
     parent::__construct();
    
     $this->load->model('MBB_model','mbb');
    }

    public function getBalls(){

        $data['getballsData']= $this->mbb->getballsData();

        $this->load->view('FIT/balls',$data);

    }

    public function insertRecord(){
   $data = $this->mbb->insertRecord($_POST['ballname'],$_POST['ballstatus']);
    }
    
    public function UpdateBall(){
        
        $data= $this->mbb->UpdateBall($_POST['id'],$_POST['name'],$_POST['status']);
        return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }
 

}
?>
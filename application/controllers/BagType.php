<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BagType extends CI_Controller {
    public function __construct()
    {
     parent::__construct();
    
      $this->load->model('MBB_model','mbb');
    
    }

    public function getBags(){
        $data['getbagsData']=$this->mbb->getbagsData();
    
        $this->load->view('FIT/bags',$data);

    }
    public function submit(){
        $data['getbagsData']=$this->mbb->getbagsData();
        
        $this->load->view('FIT/bags',$data);
    }
 
    public function submitBalls()
    {
     $allData=explode(",",$_POST['data']);
     $data = $this->mbb->submitBalls(
       $allData[0],
       $allData[1]
       
     );
   
     
     return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($data));
   
    
    }
    public function submitbag(){
        $data = $this->mbb->submitbag($_POST['name'],$_POST['status']);
    }
    
    public function updateBag(){
        $data= $this->mbb->updateBag($_POST['id'],$_POST['Bname'],$_POST['status']);
        return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output(json_encode($data));
    }
}
?>
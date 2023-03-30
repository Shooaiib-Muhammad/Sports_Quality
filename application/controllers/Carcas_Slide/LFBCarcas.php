<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LFBCarcas extends CI_Controller {
    public function __construct()
    {
     parent::__construct();
    
     $this->load->model('Efficiency_model', 'E');
     $this->load->model('carcas_model','carcas');
    }

    public function index(){

               // $data['getballsData']= $this->mbb->getballsData();
               $data['getData']= $this->carcas->getlfbDatacarcas();
               //$data['realtime'] = $this->E->realTimeAtten(3, 1165);
            
               $data['HourllyCore']= $this->carcas->HourllylfbCarcas();
               // $data['realtime'] = $this->carcas->realTimeAtten($_GET['dept_id'], $_GET['section_id']);

        $this->load->view('Carcas_Slide/LFBCarcas',$data);

    }

   
    
    // public function UpdateBall(){
        
    //     $data= $this->mbb->UpdateBall($_POST['id'],$_POST['name'],$_POST['status']);
    //     return $this->output
    //      ->set_content_type('application/json')
    //      ->set_status_header(200)
    //      ->set_output(json_encode($data));
    // }
 

}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CarcasController extends CI_Controller {
    public function __construct()
    {
     parent::__construct();
    
     $this->load->model('Efficiency_model', 'E');
     $this->load->model('carcas_model','carcas');
    }

    public function index(){

        $data['getData']= $this->carcas->getData();
        $data['realtime'] = $this->E->realTimeAtten(24, 125);
        $this->load->view('Carcas/carcas',$data);

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
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaserCutting extends CI_Controller {
    public function __construct()
    {
     parent::__construct();
    
     $this->load->model('Laser_cutting','LSC');
    }
    public function index(){

        $Month = date('m'); 
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
        $data['getData'] = $this->LSC->getData();
        $data['Stationwise'] = $this->LSC->Stationwise($CurrentDate, $CurrentDate);
        $data['RowCounter'] = $this->LSC->RowCounter();
        // print_r($data['getData']);
        // die;
        $total = 0;
        foreach ($data['getData'] as $count) {
      
         $total = $total + $count['OutPut'];
        }
      
        $data['total'] = $total;
        $this->load->view("LaserCutting/Lasercutting", $data);
    }
    public function data(){

        // $Month = date('m'); 
        // $Year = date('Y');
        // $Day = date('d');
        // $CurrentDate = $Day . '/' . $Month . '/' . $Year;
        // $data['getData'] = $this->Bladder->getData($CurrentDate,$CurrentDate);
       
        // $this->load->view("Bladder/Bladder", $data);
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

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bladernew extends CI_Controller {
    public function __construct()
    {
     parent::__construct();
    
     $this->load->model('Bladder_ModelNew','Bladder');
    }
    public function index(){

        $Month = date('m'); 
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
        $data['getData'] = $this->Bladder->getData();
        $data['Stationwise'] = $this->Bladder->Stationwise($CurrentDate, $CurrentDate);
        $data['getScannerCount'] = $this->Bladder->getScannerCount();
        $this->load->view("Bladder/BladderCount", $data);
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

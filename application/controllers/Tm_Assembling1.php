<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tm_Assembling1 extends CI_Controller {
    public function __construct()
    {
     parent::__construct();
    
     $this->load->model('Ball_Forming','BladderF');
    }
    public function index(){

        $Month = date('m'); 
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
        $data['getData'] = $this->BladderF->getDataTM();
        $data['Stationwise'] = $this->BladderF->StationwiseTM($CurrentDate, $CurrentDate);
        $data['RowCounter'] = $this->BladderF->RowCounterTM();
		// print_r($data);
		// die();
        $this->load->view("BallForming/Tm_Assembling", $data);
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

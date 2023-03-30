<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BallShaping extends CI_Controller {
    public function __construct()
    {
     parent::__construct();
    
     $this->load->model('Ball_Shaping','Shaping');
    }
    public function index(){

        $Month = date('m'); 
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
        $data['getData'] = $this->Shaping->getData();
        $data['Stationwise'] = $this->Shaping->Stationwise($CurrentDate, $CurrentDate);
        $data['RowCounter'] = $this->Shaping->RowCounter();
        $this->load->view("BallShaping_Slide/BallShaping", $data);
    }


   
 

}
?>

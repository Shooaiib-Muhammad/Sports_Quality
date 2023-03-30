<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TM_Asseming extends CI_Controller {
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
        $this->load->view("Packing_Slide/TM_Assembling", $data);
    }
 
 

}
?>

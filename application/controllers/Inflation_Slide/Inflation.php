<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inflation extends CI_Controller {
    public function __construct()
    {
     parent::__construct();
    
      $this->load->model('Infilation1','inf');
    }
    public function index(){

        $Month = date('m'); 
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
        $data['getData'] = $this->inf->getData();
        $data['Stationwise'] = $this->inf->Stationwise($CurrentDate, $CurrentDate);
        $this->load->view("Inflation_Slide/Inflation", $data);

    }

 

}
?>

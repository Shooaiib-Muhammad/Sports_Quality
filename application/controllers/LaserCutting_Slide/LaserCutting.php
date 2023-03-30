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
        $this->load->view("LaserCutting_Slide/LaserCutting", $data);
    }


 

}
?>


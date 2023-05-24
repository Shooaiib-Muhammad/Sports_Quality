<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TemperatureController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('MIS/TemperatureModel', 'PM');
    }

    public function index()
    {
        $this->load->view('MIS/environmental_control/Temperature');
    }

    public function LFB(){
		$data = $this->PM->searchQuery($_POST["Sdate"],$_POST["EDate"]);
    
    
    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
	
	}
    public function Humidity(){
		$data = $this->PM->search($_POST["Sdate"],$_POST["EDate"]);
    
    
    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
	
	}

    
}

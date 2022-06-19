<?php

class Legder extends CI_Controller
{

    public function __construct()
	{
		parent::__construct();
	$this->load->model('energyModel/EnergyModel', 'Energy');
		// $this->load->library('session');
	}

    public function index()
	{

		$data['energyinfo'] = $this->Energy->energyinfo();
		
        // $this->load->view('energy/energyView');
		$this->load->view('energy/Energy',$data);

		
    }
    
}
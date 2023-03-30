<?php

class Watercontroller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	$this->load->model('WaterModel/WaterModel', 'Water');
		// $this->load->library('session');
	}

    public function index()
	{

		$data['CallData'] = $this->Water->CallData();
		$data['getData'] = $this->Water->getData();
        // $this->load->view('energy/energyView');
		$this->load->view('Water/view',$data);

		
    }
	public function dashboard(){


        $data['CallData'] = $this->Water->CallData();
		$data['getData'] = $this->Water->getData();
	// Print_r($data['CallData']);
	// die;
	
		$this->load->view('Water/view',$data);
}
}
?>

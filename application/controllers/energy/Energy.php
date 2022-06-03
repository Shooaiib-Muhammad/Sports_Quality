<?php

class Energy extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	$this->load->model('energyModel/EnergyModel', 'Energy');
		// $this->load->library('session');
	}

    public function index()
	{

		$data['CallData'] = $this->Energy->CallData();
		$data['getData'] = $this->Energy->getData();
		$data['AllFACILITY'] = $this->Energy->AllFACILITY();
		$data['MSPRINTING'] = $this->Energy->MSPRINTING();
		$data['MSPRESS'] = $this->Energy->MSPRESS();
        // $this->load->view('energy/energyView');
		$this->load->view('energy/Energy',$data);

		
    }

	public function getData(){
		$data['CallData'] = $this->Energy->CallData();
		$data['getData'] = $this->Energy->getData();
		$data['AllFACILITY'] = $this->Energy->AllFACILITY();
		$data['MSPRINTING'] = $this->Energy->MSPRINTING();
		$data['MSPRESS'] = $this->Energy->MSPRESS();
		return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
	}
	public function dashboard(){


        $data['CallData'] = $this->Energy->CallData();
		$data['getData'] = $this->Energy->getData();
	// Print_r($data['CallData']);
	// die;
	
		$this->load->view('energy/view',$data);
}
}

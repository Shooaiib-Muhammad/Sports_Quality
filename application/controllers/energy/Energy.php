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

		$data['energyinfo'] = $this->Energy->energyinfo();
		
        // $this->load->view('energy/energyView');
		$this->load->view('energy/Energy',$data);

		
    }

	public function getData(){
		
		// $data['CallData'] = $this->Energy->CallData();
		// $data['getData'] = $this->Energy->getData();
		// $data['AllFACILITY'] = $this->Energy->AllFACILITY();
		// $data['MSPRINTING'] = $this->Energy->MSPRINTING();
		// // $data['AMB'] = $this->Energy->AMB();
		// // $data['Canteenhall'] = $this->Energy->Canteenhall();
		// // $data['Compressorhall'] = $this->Energy->Compressorhall();
		// // $data['CompressorPanelhall'] = $this->Energy->CompressorPanelhall();
		// // $data['OVALMachinehall'] = $this->Energy->OVALMachinehall();
		// // $data['WorkShophall'] = $this->Energy->WorkShophall();
		// // $data['TMHALL'] = $this->Energy->TMHALL();
$data['dailyenergy']= $this->Energy->dailyenergy();
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

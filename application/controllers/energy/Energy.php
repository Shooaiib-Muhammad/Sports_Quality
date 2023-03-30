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
		
		$data['energy_C'] = $this->Energy->energy_C();
		$data['energy_C_By_Hourly'] = $this->Energy->energy_C_By_Hourly();
		$data['energy_C_Drill'] = $this->Energy->energy_C_Drill();


		// print_r($data['energy_C']);die;
		// echo "</br>";
		// echo "</br>";
		// echo "</br>";
		// echo "</br>";

		// print_r($data['energy_C_By_Hourly']);
        // $this->load->view('energy/energyView');
		$this->load->view('energy/Energy',$data);

		
    }

	public function energy_C(){


		
		$data['energy_C'] = $this->Energy->energy_C();
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
public function getEnergyDt($date1 ,$date2){
	//echo "i am hjere";
		$data['tabular']= $this->Energy->getEnergyDt($date1 ,$date2);
		$data['dailyenergy']= $this->Energy->dailyenergygraph($date1 ,$date2);
	
		return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
	}




}

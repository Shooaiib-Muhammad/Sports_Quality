<?php

class Water extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	$this->load->model('WaterModel/WaterModel', 'Water');
		// $this->load->library('session');
	}

    public function index()
	{

		// $data['waterinfo'] = $this->Water->waterinfo();
		// $data['waterinfoByHourly'] = $this->Water->waterinfoByHourly();
		$data['waterOverAllData'] = $this->Water->waterOverAllData();
		$data['waterHourlyData'] = $this->Water->waterHourlyData();
        
		$data['toatalemployeesPerDept'] = $this->Water->toatalemployeesPerDept(); // employee all data per department
        $data['employeesDataPerHourly'] = $this->Water->employeesDataPerHourly(); // Employee Per Hourly Data

       
		$this->load->view('Water/Water',$data);
    }


	public function getWaterSendByDateRange()
    {
    
        $data['waterinfoByDateRange'] = $this->Water->waterinfoByDateRange($_POST['startDate'],$_POST['endDate']);
        
        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));

    }


	public function waterinfoByHourlyByDate()
    {
      
        $data['waterinfoByHourlyByDate'] = $this->Water->waterinfoByHourlyByDate($_POST['startDate'],$_POST['endDate']);

        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));

    }

	


// 	public function getData(){
		
// 		// $data['CallData'] = $this->Energy->CallData();
// 		// $data['getData'] = $this->Energy->getData();
// 		// $data['AllFACILITY'] = $this->Energy->AllFACILITY();
// 		// $data['MSPRINTING'] = $this->Energy->MSPRINTING();
// 		// // $data['AMB'] = $this->Energy->AMB();
// 		// // $data['Canteenhall'] = $this->Energy->Canteenhall();
// 		// // $data['Compressorhall'] = $this->Energy->Compressorhall();
// 		// // $data['CompressorPanelhall'] = $this->Energy->CompressorPanelhall();
// 		// // $data['OVALMachinehall'] = $this->Energy->OVALMachinehall();
// 		// // $data['WorkShophall'] = $this->Energy->WorkShophall();
// 		// // $data['TMHALL'] = $this->Energy->TMHALL();
// $data['dailywater']= $this->Water->dailywater();
// 		return $this->output
//         ->set_content_type('application/json')
//         ->set_status_header(200)
//         ->set_output(json_encode($data));
// 	}
// 	public function dashboard(){


//         $data['CallData'] = $this->Water->CallData();
// 		$data['getData'] = $this->Water->getData();
// 	// Print_r($data['CallData']);
// 	// die;
	
// 		$this->load->view('Water/view',$data);
// }
// public function getWaterDt($date1 ,$date2){
// 	//echo "i am here";
// 		$data['tabular']= $this->Water->getWaterDt($date1 ,$date2);
// 		$data['dailywater']= $this->Water->dailywatergraph($date1 ,$date2);
	
// 		return $this->output
//         ->set_content_type('application/json')
//         ->set_status_header(200)
//         ->set_output(json_encode($data));
// 	}

}

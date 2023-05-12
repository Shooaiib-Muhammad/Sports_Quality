<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('MIS/Pivot_Model', 'PM');
        $this->load->model('MIS/dashboard_Model','PM');
	}
	public function index()
	{
        $data['getCarsasData'] = $this->PM->getCarsasData();
		$data['getfinalQCData'] = $this->PM->getfinalQCData();
		$data['pivotSingleDate'] = $this->PM->pivotCurrentDateData();
        $data['getPanelShapeData'] = $this->PM->getPanelShapeData();
		$data['getAssemblingData'] = $this->PM->getAssemblingData();
		$data['getDippingData'] = $this->PM->getDippingData();
		$data['Data1']=$this->PM->CuttingPU();
		$data['Data2']=$this->PM->Cuttingfabric();
		$data['Data3']=$this->PM->CuttingForm();
		
		$this->load->view('MIS/MISdashboard', $data);
	}
	public function getPivotDateRange()
	{
		$date1 = $this->input->post('date1');
		$date2 = $this->input->post('date2');

		$data = $this->PM->getPivotDateRange($date1, $date2);

		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode($data));
	}
	

	public function getPivotSystemIPWise()
	{

		$data = $this->PM->getPivotSystemIPWise($_POST['systemip']);
		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode($data));
	}

	public function getPivotSystemUpperData()
	{

		$data = $this->PM->getPivotSystemUpperData($_POST['systemip']);
		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode($data));
	}

	
	public function getPivotSystemIpWiseFailedBall()
	{

		$data = $this->PM->getPivotSystemIpWiseFailedBall($_POST['systemip']);
		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode($data));
	}

	public function finalQc(){
		$data = $this->PM->filter($_POST["Sdate"],$_POST["EDate"]);
    
    
    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));



		// $data = $this->PM->filter($Sdate,$EDate);
	  
		// return $this->output
		// ->set_content_type('application/json')
		// ->set_status_header(200)
		// ->set_output(json_encode($data));
	}

	public function LFB(){
		$data = $this->PM->searchQuery($_POST["Sdate"],$_POST["EDate"]);
    
    
    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
	
	}

}

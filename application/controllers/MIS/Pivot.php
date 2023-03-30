<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pivot extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MIS/Pivot_Model', 'PM');
	}
	public function index()
	{
		$data['pivotSingleDate'] = $this->PM->pivotCurrentDateData();
		$this->load->view('MIS/Pivot', $data);
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

}

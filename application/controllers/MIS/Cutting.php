<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cutting extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('MIS/Cutting_Model');
}
public function index()
{
    $data['getPuDate'] = $this->Cutting_Model->getPuDate();
    $data['getFoamData'] = $this->Cutting_Model->getFoamData();
    $data['getfabricDate'] = $this->Cutting_Model->getfabricDate();
				$data['Data1']=$this->Cutting_Model->CuttingPU();
					$data['Data2']=$this->Cutting_Model->Cuttingfabric();
						$data['Data3']=$this->Cutting_Model->CuttingForm();
    $this->load->view('MIS/tm_analysis/Cutting',$data);
}
public function fact2($Domain)
	{
		$data = $this->Cutting_Model->fact2($Domain);
		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'data' => $data,
			)));
    }
    
    public function material($Domain)
	{
		$data = $this->Cutting_Model->material($Domain);
		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'data' => $data,
			)));
    }
    
    public function shape($Domain)
	{
		$data = $this->Cutting_Model->shape($Domain);
		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'data' => $data,
			)));
    }
    
 public function searchQuery()
	{

$data['Sdate'] =$Sdate;
$data['Edate'] =$EDate;
$data['CuttingData'] = $this->Cutting_Model->searchQuery($fc,$matType,$Shape,$material,$Sdate,$EDate);
$data['getPuDate'] = $this->Cutting_Model->getPuDate();
$data['getFoamData'] = $this->Cutting_Model->getFoamData();
$data['getfabricDate'] = $this->Cutting_Model->getfabricDate();

	$this->load->view('MIS/Cutting', $data);
	}
public function Cutting1($fc,$matType,$Shape,$material,$Sdate,$EDate){
// print_r($material);
// die;
$data['Sdate'] =$Sdate;
$data['Edate'] =$EDate;
$data['MaterialTYpe'] =$matType;
$data['FactoryCode']=$fc;
$data['CuttingFinal'] = $this->Cutting_Model->Cutting_final($fc,$matType,$Shape,$material,$Sdate,$EDate);
// print_r($data['CuttingFinal']);
// die;
	$this->load->view('MIS/tm_analysis/cutting1',$data);
}

}


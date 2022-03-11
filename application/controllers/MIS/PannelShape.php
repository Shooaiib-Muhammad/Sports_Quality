<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PannelShape extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('MIS/PannelShape_Model');
}
public function index()
{
        $data['getCarsasData'] = $this->PannelShape_Model->getCarsasData();
        $this->load->view('MIS/tm_analysis/PanelShape',$data);
}
public function fact2($Domain)
	{
        $data = $this->PannelShape_Model->fact2($Domain);
       
        return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'data' => $data,
			)));
    }
    
    public function shape($Domain)
	{
		$data = $this->PannelShape_Model->shape($Domain);
		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'data' => $data,
			)));
    }

	public function material($Domain)
	{
		$data = $this->PannelShape_Model->material($Domain);
		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'data' => $data,
			)));
    }
    
    public function searchQuery($fc,$matType,$Shape,$Sdate,$EDate,$size1,$size2)

	{
		      
		      $sizenew=$size1."/".$size2;
        $data['Sdate'] =$Sdate;
        $data['Edate'] =$EDate;
        $data['PanelShape'] = $this->PannelShape_Model->searchQuery($fc,$matType,$Shape,$Sdate,$EDate,$sizenew);
							
		      $this->load->view('MIS/tm_analysis//PanelShapeNew',$data);
	}


}


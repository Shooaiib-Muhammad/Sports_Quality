<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carcas extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('MIS/Carcas_Model');
}
public function index()
{
       

        $data['getCarsasData'] = $this->Carcas_Model->getCarsasData();
        $this->load->view('MIS/tm_analysis/Carcas',$data);
}
public function fact2($Domain)
	{
        $data = $this->Carcas_Model->fact2($Domain);
       
        return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'data' => $data,
			)));
    }
    
    public function material($Domain)
	{
		$data = $this->Carcas_Model->material($Domain);
		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'data' => $data,
			)));
    }
    
    public function searchQuery($fc,$matType,$Shape,$Sdate,$EDate)
	{
      
        $data['Sdate'] =$Sdate;
        $data['Edate'] =$EDate;
        $data['CarcasData'] = $this->Carcas_Model->searchQuery($fc,$matType,$Shape,$Sdate,$EDate);
		      $this->load->view('MIS/tm_analysis/Carcasnew', $data);
	}


}


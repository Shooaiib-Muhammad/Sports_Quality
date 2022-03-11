<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dipping extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('MIS/Dipping_Model');
}
public function index()
{
       

        $data['getCarsasData'] = $this->Dipping_Model->getCarsasData();
        $this->load->view('MIS/tm_analysis/Dipping',$data);
}
public function fact2($Domain)
	{
        $data = $this->Dipping_Model->fact2($Domain);
       
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
    
    public function searchQuery($fc,$Sdate,$EDate,$Size,$Size1)
	{
	
        $sizenew=$Size . "/" .$Size1;
        
        $data['Sdate'] =$Sdate;
        $data['Edate'] =$EDate;
        $data['CarcasData'] = $this->Dipping_Model->searchQuery($fc,$Sdate,$EDate,$sizenew);
        
		      $this->load->view('MIS/tm_analysis/Dippingnew', $data);
	}


}


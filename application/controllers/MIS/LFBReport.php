<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LFBReport extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('MIS/LFBReport_Model');
}
public function index()
{
        $data['getCarsasData'] = $this->LFBReport_Model->getCarsasData();
		$data['getArticleData'] = $this->LFBReport_Model->allArticles();
        $this->load->view('MIS/tm_analysis/LFB',$data);
}
public function fact2($Domain)
	{
        $data = $this->LFBReport_Model->fact2($Domain);
       
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
    
    public function searchQuery()
	{
      
        $data['Sdate'] =$Sdate;
        $data['Edate'] =$EDate;
        $data['Lfb'] = $this->Carcas_Model->searchQuery($fc,$matType,$Shape,$Sdate,$EDate);
		      $this->load->view('MIS/tm_analysis/Carcas', $data);
	}


}


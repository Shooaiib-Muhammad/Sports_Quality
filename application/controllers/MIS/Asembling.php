<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asembling extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('MIS/Asembling_Model');

$this->load->model('MIS/FinalQC_Model');
}
public function index()
{
       

        $data['getCarsasData'] = $this->Asembling_Model->getCarsasData();
          $data['getArticleData'] = $this->FinalQC_Model->allArticles();
        $this->load->view('MIS/tm_analysis/Asembling',$data);
}
public function fact2($Domain)
	{
        $data = $this->Asembling_Model->fact2($Domain);
       
        return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'data' => $data,
			)));
    }
    
    public function searchQuery($Sdate,$EDate,$Art,$Size,$Size1)
	{
       $sizenew=$Size . "/" .$Size1;
        $data['Sdate'] =$Sdate;
        $data['Edate'] =$EDate;
        $data['Assemblig'] = $this->Asembling_Model->searchQuery($Sdate,$EDate,$Art,$sizenew);
        
		$this->load->view('MIS/tm_analysis/AssemblingNew', $data);
	}


}


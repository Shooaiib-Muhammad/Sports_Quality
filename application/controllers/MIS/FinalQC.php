<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinalQC extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('MIS/FinalQC_Model');
}
public function index()
{
      
      $data['getCarsasData'] = $this->FinalQC_Model->getCarsasData();
		    $data['getArticleData'] = $this->FinalQC_Model->allArticles();
      $this->load->view('MIS/tm_analysis/FinalQC',$data);
}
public function fact2($Domain)
	{
        $data = $this->FinalQC_Model->fact2($Domain);
       
        return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'data' => $data,
			)));
    }
    
    public function material($Domain)
	{
		$data = $this->FinalQC_Model->material($Domain);
		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode(array(
				'data' => $data,
			)));
    }
    
    public function searchQuery()
					{

						      $fc = $this->input->post('Type');
												$matType = $this->input->post('materialType');
												$Shape = $this->input->post('material');
												$Sdate = $this->input->post('Sdate');
												$EDate = $this->input->post('Edate');
										
												$data['Sdate'] =$Sdate;
												$data['Edate'] =$EDate;
												$data['CarcasData'] = $this->Carcas_Model->searchQuery($fc,$matType,$Shape,$Sdate,$EDate);
												$data['getCarsasData'] = $this->Carcas_Model->getCarsasData();
												$this->load->view('Carcas', $data);
					}
public function finalQc($Article,$Sdate,$EDate,$Size,$Size1){
	           $sizenew=$Size . "/" .$Size1;
										
												$data['Data'] = $this->FinalQC_Model->filter($Article,$Sdate,$EDate,$sizenew);
											 $data['Sdate'] =$Sdate;
												$data['Edate'] =$EDate;
	           $this->load->view('MIS/tm_analysis/FinalQc_result',$data);
}

}


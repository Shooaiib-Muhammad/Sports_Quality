<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lfb extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MIS/Lfb_Model');
		$this->load->model('MIS/DW_Model');
	}


	public function get_Lfb_Sheet_Sizing($start_date, $end_date)
	{

		$data['data'] = $this->Lfb_Model->get_Lfb_Sheet_Sizing($start_date, $end_date);
		
		$data['start_date1'] = $start_date;
		$data['end_date1'] = $end_date;
		return $this->load->view('MIS/tm_analysis/sheet_sizing', $data, false);
	}
	public function get_Lfb_printing_cutting($start_date, $end_date)
	{
	
		$data['data'] = $this->Lfb_Model->get_Lfb_printing_cutting($start_date, $end_date);

		$data['data1'] = $this->Lfb_Model->get_Lfb_HF_cutting($start_date, $end_date);
		//$data['datasum'] = $this->Quality_Modal->get_hs_summary_sum( $start_date, $end_date);
		$data['start_date1'] = $start_date;
		$data['end_date1'] = $end_date;
		$data['Record'] = $this->DW_Model->getMPwiseData();;
		return $this->load->view('MIS/printing_cutting', $data, false);
	}
	public function get_Lfb_assembling($start_date, $end_date)
	{

		$data['data'] = $this->Lfb_Model->get_Lfb_assembling($start_date, $end_date);
		//$data['datasum'] = $this->Quality_Modal->get_hs_summary_sum( $start_date, $end_date);
		$data['start_date1'] = $start_date;
		$data['end_date1'] = $end_date;
		return $this->load->view('MIS/tm_analysis/assembling', $data, false);
	}
	public function get_Lfb_final_qc($start_date, $end_date)
	{

		$data['data'] = $this->Lfb_Model->get_Lfb_final_qc($start_date, $end_date);
		$data['data1'] = $this->Lfb_Model->get_Lfb_final_qc_articles($start_date, $end_date);
		
		$data['data2'] = $this->Lfb_Model->leffinalQC();
		$data['balance'] = $this->Lfb_Model->get_lfb_balance($start_date, $end_date);
		//$data['datasum'] = $this->Quality_Modal->get_hs_summary_sum( $start_date, $end_date);
		$data['start_date1'] = $start_date;
		$data['end_date1'] = $end_date;
		return $this->load->view('MIS/final_qc', $data, false);
	}
	public function get_Lfb_Carcas($start_date, $end_date)
	{
		$data['data'] = $this->Lfb_Model->get_Lfb_Carcas($start_date, $end_date);
		$data['start_date1'] = $start_date;
		$data['end_date1'] = $end_date;
		return $this->load->view('MIS/tm_analysis/DailyCarcas', $data, false);
	}
   
	public function searchQuery($Art,$Sdate,$EDate,$size1,$size2)

	{
		     
		      $sizenew=$size1."/".$size2;
								
        $data['Sdate'] =$Sdate;

        $data['Edate'] =$EDate;

        $data['lfb'] = $this->Lfb_Model->searchQuery($Art,$Sdate,$EDate,$sizenew);

		      $this->load->view('MIS/Lfb_new',$data);
	}

	public function searchQueryGet($Art,$Sdate,$EDate,$size1,$size2)

	{
		     
		      $sizenew=$size1."/".$size2;
								
        $data['Sdate'] =$Sdate;

        $data['Edate'] =$EDate;

        $data['lfb'] = $this->Lfb_Model->searchQuery($Art,$Sdate,$EDate,$sizenew);

		return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
		    
	}

}

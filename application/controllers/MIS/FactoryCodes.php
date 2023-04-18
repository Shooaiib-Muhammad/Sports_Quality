<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FactoryCodes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MIS/Quality_Modal');
    }
 
    public function index()
    {
        $data['compBallInspection']  = $this->Quality_Modal->compBallInspectionCurrentDate();
        $data['finaleBallInspection']  = $this->Quality_Modal->finaleBallInspectionCurrentDate();
        $data['urbanBallInspection']  = $this->Quality_Modal->urbanBallInspectionCurrentDate();

        $data['ambSheetSizing']  = $this->Quality_Modal->ambSheetSizing();
        $data['ambPanelDefects']  = $this->Quality_Modal->ambPanelDefects();
        $data['ambHFCutting']  = $this->Quality_Modal->ambHFCutting();
        $data['ambBGradeBall']  = $this->Quality_Modal->ambBGradeBall();
        $data['ambCoreBGrade']  = $this->Quality_Modal->ambCoreBGrade();
        $this->load->view('MIS/factory_codes/factoryCodes', $data);
    }


    public function AmbReportAll($start_date, $end_date)
    {
        $data['data'] = $this->Quality_Modal->rpt_amb_detail($start_date, $end_date, 1);
        $data['data_RP'] = $this->Quality_Modal->rpt_amb_detail_RP($start_date, $end_date);
        $data['data_RF'] = $this->Quality_Modal->rpt_amb_datewise_RF($start_date, $end_date);
        //print_r($data['data']);
        $data['data2'] = $this->Quality_Modal->rpt_amb_detail_Packing($start_date, $end_date);
        
        $data['data_packing_RP'] = $this->Quality_Modal->rpt_amb_datewise_all_Packing_RP($start_date, $end_date);
   
        $data['StationwiseOutput'] = $this->Quality_Modal->rpt_amb_detail_Packing_Station($start_date, $end_date);
        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
    }

    public function AmbReportLineWise($start_date, $end_date, $lineID)
    {

        $data['data'] = $this->Quality_Modal->rpt_amb_line_data($start_date, $end_date, $lineID, 1);
        $data['data_RP'] = $this->Quality_Modal->rpt_amb_detail_LineWise_RP($start_date, $end_date,$lineID);
        $data['data_RF'] = $this->Quality_Modal->rpt_amb_datewise_LineWise_RF($start_date, $end_date,$lineID);
        //print_r($data['data']);
        $data['data2'] = $this->Quality_Modal->rpt_amb_detail_Packing_LineWise($start_date, $end_date,$lineID);
        $data['data_packing_RP'] = $this->Quality_Modal->rpt_amb_datewise_all_Packing_RP_lineWise($start_date, $end_date,$lineID);
        $data['StationwiseOutput'] = $this->Quality_Modal->rpt_amb_detail_Packing_Station_LineWise($start_date, $end_date,$lineID);
        
       
        
      
        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
    }

    public function AmbArticleWiseDateWise($start_date, $end_date, $code)
    {
        $data['data'] = $this->Quality_Modal->rpt_amb_datewise_article($start_date, $end_date, 1, $code);
        $data['data_RP'] = $this->Quality_Modal->rpt_amb_datewise_article_Art_RP($start_date, $end_date, $code);
        $data['data_RF'] = $this->Quality_Modal->rpt_amb_datewise_article_Art_RF($start_date, $end_date, $code);
        $data['data2'] = $this->Quality_Modal->rpt_amb_datewise_article($start_date, $end_date, 2, $code);
        
        $data['data_packing_RP'] = $this->Quality_Modal->rpt_amb_datewise_all_articles_Art_Packing_RP($start_date, $end_date, $code);
        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
    }

    public function AmbArticleWiseDateWiseAll($start_date, $end_date)
    {
        $data['data'] = $this->Quality_Modal->rpt_amb_datewise_all_articles($start_date, $end_date, 1);
        $data['data_overall'] = $this->Quality_Modal->rpt_amb_datewise_all_articles_OverAll($start_date, $end_date, 1);
        $data['data_RP'] = $this->Quality_Modal->rpt_amb_datewise_all_articles_RP($start_date, $end_date);
        $data['data_RF'] = $this->Quality_Modal->rpt_amb_datewise_all_articles_RF($start_date, $end_date);
        $data['data_packing_RP'] = $this->Quality_Modal->rpt_amb_datewise_all_articles_Packing_RP($start_date, $end_date);
        
        $data['data2'] = $this->Quality_Modal->rpt_amb_datewise_all_articles($start_date, $end_date, 2);
        
        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
    }
    
}

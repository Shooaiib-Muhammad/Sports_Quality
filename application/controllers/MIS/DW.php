<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DW extends CI_Controller
{

        public function __construct()
        {
                parent::__construct();
                $this->load->model('MIS/DW_Model');
                $this->load->model('MIS/AMB_Model');
                $this->load->model('MIS/MS_Model');
                $this->load->model('MIS/TM_Model');
        }

        public function index()
        {
                $Data['Record'] = Null;
                $Data['RecordSum'] = Null;
                $this->load->view('MIS/DW', $Data);
        }
        public function Store()
        {
                $Data['Record'] = NULL;
                $this->load->view('MIS/StoreReports', $Data);
        }
       
        
        public function StoreReportsData()
        {
                $Sdate = $this->input->post('Sdate');
                $Edate = $this->input->post('Edate');
                 $Data['Sdate'] = $Sdate;

                 $Data['Edate'] = $Edate;
         
                $Data['Record'] = $this->DW_Model->getStoredata($Sdate, $Edate);
                //$Data['RecordSum'] = $this->DW_Model->getlineSum($Sdate,$Edate);
                $this->load->view('MIS/StoreReports', $Data);
        }
        public function AllData()
        {
                $Month = date('m');
                $Year = date('Y');
                $Day = date('d');
                $FC = $this->input->post('FC');
                $Sdate = $this->input->post('Sdate');
                $Edate = $this->input->post('Edate');
                $Process = $this->input->post('Process');
                $Data['Date1'] = $Sdate;
                $Data['Date2'] = $Edate;
                $Data['FC'] = $FC;
                $Data['Process'] = $Process;
                $Data['Record'] = $this->DW_Model->getlinedata($FC, $Sdate, $Edate, $Process);
                $Data['RecordSum'] = $this->DW_Model->getlineSum($FC, $Sdate, $Edate, $Process);


                $this->load->view('MIS/DW', $Data);
        }

        public function Reports()
        {
                // 	$Month=date('m');

                $Data['Record'] = NULL;
                $this->load->view('MIS/downtime/DTReports', $Data);
        }
        public function DTReportsData()
        {
                $Sdate = $this->input->post('Sdate');
                $Edate = $this->input->post('Edate');
                $Data['Sdate'] = $Sdate;
                $Data['Edate'] = $Edate;
                $Data['Record'] = $this->DW_Model->getDTdata($Sdate, $Edate);
                //$Data['RecordSum'] = $this->DW_Model->getlineSum($Sdate,$Edate);
                $this->load->view('MIS/downtime/DTReports', $Data);
        }
      
        
        public function MSArticle()
        {
              
                $Data['Article'] = $this->DW_Model->Get_MS_Article();
                $Data['Lines'] = $this->DW_Model->Get_Ms_Lines();
                $this->load->view('MIS/MSArticle', $Data);
        }
        public function Get_Size($ArticleCode)
        {
                $data = $this->DW_Model->Get_MS_ArticleSize($ArticleCode);
                return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200)
                        ->set_output(json_encode(array(
                                'data' => $data,
                        )));
        }

        public function GetMSSummary()
        {
                $Sdate = $this->input->post('Sdate');
                $Edate = $this->input->post('Edate');
                $ArtSize = $this->input->post('ArtSize');
                if ($ArtSize == "") {
                        $ArtSize = '1';
                } else {
                        $ArtSize = $ArtSize;
                }
                $ArtCode = $this->input->post('ArtCode');
            
                if ($ArtCode == "") {
                        $ArtCode = '1';
                } else {
                        $ArtCode = $ArtCode;
                }
                $bySLine = $this->input->post('bySLine');
                if ($bySLine == "") {
                        $bySLine = '1';
                } else {
                        $bySLine = $bySLine;
                }
                $byEline = $this->input->post('byEline');
                if ($byEline == "") {
                        $byEline = '1';
                } else {
                        $byEline = $byEline;
                }
                $SLine = $this->input->post('SLine');
                $Eline = $this->input->post('Eline');
                $Reports = $this->input->post('SelectBox');
        //      Echo $bySLine;
        //      Echo '<pre>';
        //      Echo $byEline;
                $Data['GetEfficiency'] = $this->DW_Model->Efficiency($Sdate, $Edate);
                $Data['Reports']  = $this->DW_Model->getdata($Reports, $Sdate, $Edate, $ArtSize, $ArtCode, $byEline, $bySLine);
                $Data['GetArticle'] = $this->DW_Model->get_Article_ledger($Sdate, $Edate,$ArtCode,$ArtSize);
                $Data['MSlines'] = $this->DW_Model->MS_Lines($SLine, $Eline);
                $Data['MSlinesandarticle'] = $this->DW_Model->MS_Lines_and_Article($bySLine, $byEline,$Sdate, $Edate, $ArtCode,$ArtSize);
                $Data['Sdate'] = $Sdate;
                $Data['Edate'] = $Edate;
                $Data['bySLine'] = $bySLine;
                $Data['byEline'] = $byEline;
                $Data['ArtCode'] = $ArtCode;
                $Data['ArtSize'] = $ArtSize;
                $Data['SelectionBox'] = $Reports;
                $Data['Article'] = $this->DW_Model->Get_MS_Article();
                $Data['Lines'] = $this->DW_Model->Get_Ms_Lines();
                $this->load->view('MIS/MSArticle', $Data);

        }
        public function AMbReports()
        {
                // 	$Month=date('m');
                $Month=date('m');
                $Year=date('Y');
                $Day=date('d');
                $Data['Record'] = $this->DW_Model->Get_Article_Wise_Defects($Day,$Month, $Year);
                $this->load->view('MIS/quality/AMBReports', $Data);
        }

        public function LFB()
        {
                // 	$Month=date('m');

                $Data['Record'] = $this->DW_Model->getMPwiseData();;
                $this->load->view('MIS/Quality/lfb_all', $Data);
        }
        public function LFBReportsData()
        {
                $Sdate = $this->input->post('Sdate');
                $Edate = $this->input->post('Edate');
                $Data['Sdate'] = $Sdate;
                $Data['Edate'] = $Edate;
                $Data['Record'] = $this->DW_Model->getLFBdata($Sdate, $Edate);
                $Data['RecordSum'] = $this->DW_Model->getLFBdataSum($Sdate,$Edate);
                $this->load->view('MIS/Quality/lfb_all', $Data);
        }
        public function bladder()
        {
                $this->load->view("bladder");
        }
        public function bladderDateRange(){
                $data = $this->DW_Model->bladderDateRange($_POST['date1'], $_POST['date2']);      
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode($data));
        }
        
}

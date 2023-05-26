<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FactoryCodes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MIS/factoryCode_Model', 'FCM');
    }

    public function index()
    {
        $start_date = date('Y/m/d');
        $end_date = date('Y/m/d');
        $line = 'all';
        $fc2 = 'B34002';
        $fc3 = 'B34003';
        $fc4 = 'B34004';
        $fc7 = 'B34007';

        $data['printingData002'] = $this->FCM->printing002($start_date, $end_date); //printing B34002
        $data['panelShappingData002'] = $this->FCM->panelShapping002($start_date, $end_date); //Panel Shapping B34002
        $data['datasum002'] = $this->FCM->get_tm_ball_forming_sum002($start_date, $end_date, $fc2); // forming B34002
        $data['data2sum002'] = $this->FCM->get_tm_final_qc_sum002($start_date, $end_date, $fc2); // End Line QC B34002

        $data['printingData003'] = $this->FCM->printing003($start_date, $end_date); //printing B34003
        $data['panelShappingData003'] = $this->FCM->panelShapping003($start_date, $end_date); //Panel Shapping B34003
        $data['datasum003'] = $this->FCM->get_tm_ball_forming_sum003($start_date, $end_date, $fc3); // forming B34003
        $data['data2sum003'] = $this->FCM->get_tm_final_qc_sum003($start_date, $end_date, $fc3); // End Line QC B34003


        $data['printingData004'] = $this->FCM->printing004($start_date, $end_date); //printing B34004
        $data['panelShappingData004'] = $this->FCM->panelShapping004($start_date, $end_date); //Panel Shapping B34004
        $data['
        '] = $this->FCM->get_tm_ball_forming_sum004($start_date, $end_date, $fc4); // forming B34004
        $data['data2sum004'] = $this->FCM->get_tm_final_qc_sum004($start_date, $end_date, $fc4); // End Line QC B34004





        // B34005
        $data['printing005'] = $this->FCM->printing005($start_date, $end_date); //printing B34005
        $data['bladderWinding'] = $this->FCM->bladderWinding($start_date, $end_date); //bladderWinding B34005
        $data['bladderUnWinding'] = $this->FCM->bladderUnWinding($start_date, $end_date); //bladderUnWinding B34005
        $data['sheetInspection005'] = $this->FCM->sheetInspection005($start_date, $end_date); //sheetInspection B34005
        $data['pivot005'] = $this->FCM->pivot005($start_date, $end_date); //pivot005 B34005
        $data['dataEndLineQC'] = $this->FCM->get_ms_summary2($line, $start_date, $end_date); //end line QC B34005

        // B34006
        $data['core006'] = $this->FCM->core006($start_date, $end_date); //Core B34006
        $data['BHFCutting006'] = $this->FCM->BHFCutting006($start_date, $end_date); //BHFCutting006 B34006
        $data['AHFCutting006'] = $this->FCM->AHFCutting006($start_date, $end_date); //AHFCutting006 B34006
        $data['forming006'] = $this->FCM->rpt_amb_detail006($start_date, $end_date, 1); //Forming B34006
        $data['data2'] = $this->FCM->rpt_amb_detail_Packing006($start_date, $end_date); //end Line QC b34006

        // B34007
        $data['printing007'] = $this->FCM->printing007($start_date, $end_date); //Printing B34007
        $data['AHFCutting007'] = $this->FCM->AHFCutting007($start_date, $end_date); //BHFCutting B34007
        $data['carcass007'] = $this->FCM->carcass007($start_date, $end_date); //Carcass B34007
        $data['datasum007'] = $this->FCM->get_tm_final_qc_sum007($start_date, $end_date, $fc7); // Forming B34007
        $data['endLineQC007'] = $this->FCM->get_Lfb_final_qc($start_date, $end_date); //End Line QC B34007



        $data['start_date'] = date('Y/m/d');
        $data['end_date'] = date('Y/m/d');
        $this->load->view('MIS/factory_codes/factoryCodes', $data);
    }


    public function getDateRangeData()
    {


        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $line = 'all';
        $fc2 = 'B34002';
        $fc3 = 'B34003';
        $fc4 = 'B34004';
        $fc7 = 'B34007';

        $data['printingData002'] = $this->FCM->printing002($start_date, $end_date); //printing B34002
        $data['panelShappingData002'] = $this->FCM->panelShapping002($start_date, $end_date); //Panel Shapping B34002
        $data['datasum002'] = $this->FCM->get_tm_ball_forming_sum002($start_date, $end_date, $fc2); // forming B34002
        $data['data2sum002'] = $this->FCM->get_tm_final_qc_sum002($start_date, $end_date, $fc2); // End Line QC B34002

        $data['printingData003'] = $this->FCM->printing003($start_date, $end_date); //printing B34003
        $data['panelShappingData003'] = $this->FCM->panelShapping003($start_date, $end_date); //Panel Shapping B34003
        $data['datasum003'] = $this->FCM->get_tm_ball_forming_sum003($start_date, $end_date, $fc3); // forming B34003
        $data['data2sum003'] = $this->FCM->get_tm_final_qc_sum003($start_date, $end_date, $fc3); // End Line QC B34003


        $data['printingData004'] = $this->FCM->printing004($start_date, $end_date); //printing B34004
        $data['panelShappingData004'] = $this->FCM->panelShapping004($start_date, $end_date); //Panel Shapping B34004
        $data['datasum004'] = $this->FCM->get_tm_ball_forming_sum004($start_date, $end_date, $fc4); // forming B34004
        $data['data2sum004'] = $this->FCM->get_tm_final_qc_sum004($start_date, $end_date, $fc4); // End Line QC B34004





        // B34005
        $data['printing005'] = $this->FCM->printing005($start_date, $end_date); //printing B34005
        $data['bladderWinding'] = $this->FCM->bladderWinding($start_date, $end_date); //bladderWinding B34005
        $data['bladderUnWinding'] = $this->FCM->bladderUnWinding($start_date, $end_date); //bladderUnWinding B34005
        $data['sheetInspection005'] = $this->FCM->sheetInspection005($start_date, $end_date); //sheetInspection B34005
        $data['pivot005'] = $this->FCM->pivot005($start_date, $end_date); //pivot005 B34005
        $data['dataEndLineQC'] = $this->FCM->get_ms_summary2($line, $start_date, $end_date); //end line QC B34005

        // B34006
        $data['core006'] = $this->FCM->core006($start_date, $end_date); //Core B34006
        $data['BHFCutting006'] = $this->FCM->BHFCutting006($start_date, $end_date); //BHFCutting006 B34006
        $data['AHFCutting006'] = $this->FCM->AHFCutting006($start_date, $end_date); //AHFCutting006 B34006
        $data['forming006'] = $this->FCM->rpt_amb_detail006($start_date, $end_date, 1); //Forming B34006
        $data['data2'] = $this->FCM->rpt_amb_detail_Packing006($start_date, $end_date); //end Line QC b34006

        // B34007
        $data['printing007'] = $this->FCM->printing007($start_date, $end_date); //Printing B34007
        $data['AHFCutting007'] = $this->FCM->AHFCutting007($start_date, $end_date); //BHFCutting B34007
        $data['carcass007'] = $this->FCM->carcass007($start_date, $end_date); //Carcass B34007
        $data['datasum007'] = $this->FCM->get_tm_final_qc_sum007($start_date, $end_date, $fc7); // Forming B34007
        $data['endLineQC007'] = $this->FCM->get_Lfb_final_qc($start_date, $end_date); //End Line QC B34007


        $data['start_date'] = $_POST['start_date'];
        $data['end_date'] = $_POST['end_date'];
        return $this->load->view('MIS/factory_codes/factoryCodeDateRange', $data);
    }
}

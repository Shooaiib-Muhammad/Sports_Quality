<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Efficiency extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MIS/DW_Model');
        $this->load->model('MIS/AMB_Model');
        $this->load->model('MIS/MS_Model');
        $this->load->model('MIS/TM_Model');
        $this->load->model('MIS/Efficiency_Model');
    }

    public function index()
    {
        $this->load->view('MIS/quality/efficiency_reports');
    }
    public function getCB()
    {
        $data['data'] = $this->Efficiency_Model->get_CB(
            $_POST['start_date'],
            $_POST['end_date'],
            $_POST['factory']
        );

        return $this->load->view('MIS/Efficiency/cb_view', $data);
    }
    public function getFB()
    {
        $data['data'] = $this->Efficiency_Model->get_FB(
            $_POST['start_date'],
            $_POST['end_date'],
            $_POST['factory']
        );

        return $this->load->view('MIS/Efficiency/fb_view', $data);
    }
    public function getUB()
    {
        $data['data'] = $this->Efficiency_Model->get_UB(
            $_POST['start_date'],
            $_POST['end_date'],
            $_POST['factory']
        );

        return $this->load->view('MIS/Efficiency/ub_view', $data, false);
    }
    public function getMSB()
    {
        $data['data'] = $this->Efficiency_Model->get_MSB(
            $_POST['start_date'],
            $_POST['end_date'],
            $_POST['factory']
        );

        return $this->load->view('MIS/Efficiency/msb_view', $data, false);
    }
    public function getAMB()
    {
        $data['data'] = $this->Efficiency_Model->get_AMB(
            $_POST['start_date'],
            $_POST['end_date'],
            $_POST['factory']
        );

        return $this->load->view('MIS/Efficiency/amb_view', $data, false);
    }
    public function getLF()
    {
        $data['data'] = $this->Efficiency_Model->get_LF(
            $_POST['start_date'],
            $_POST['end_date'],
            $_POST['factory']
        );

        return $this->load->view('MIS/Efficiency/lf_view', $data, false);
    }
    function search_keyword()
    {
        $keyword = $this->input->post('keyword');
        $data['results'] = $this->Efficiency_Model->search($keyword);
        //$this->twig->display('result_view.php',$this->data);
        $this->load->view('MIS/quality/efficiency_reports.php', $data);
    }

    public function samValue()
    {
        $this->load->view('MIS/Efficiency/samValue');
    }
    public function samValue1()
    {
        $data = $this->Efficiency_Model->samValue();

        echo json_encode($data);
    }

    public function samValueInterface(){
        $this->load->view('MIS/Efficiency/samValueNotify');
    }
    public function samValueNotification()
    {
        $data = $this->Efficiency_Model->samValueNotification();
        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
    }
    public function samValueNotificationDate()
    {
        // die;
        $data = $this->Efficiency_Model->samValueNotificationDate($_POST['start-date'],$_POST['end-date']);
        // print_r($data);
        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
    }
    public function loadArticleStuff()
    {
        $data = $this->Efficiency_Model->loadArticleStuff($_GET['article']);

        echo json_encode($data);
    }

    public function updateSam()
    {
        $data = $this->Efficiency_Model->updateSam(
            $_POST['articleID'],
            $_POST['clientID'],
            $_POST['modelID'],
            $_POST['forming'],
            $_POST['packing']
        );
        echo 'updated';
    }
    public function Cutting()
    {
        $this->load->view('FIT/Cutting');
    }

    public function getFactoryCode()
    {
        $data = $this->Efficiency_Model->getFactoryCode(
            $_POST['factory_code']

        );

        // echo "<pre>";
        // print_r($data);
        // die;
        // echo "</pre>";

      
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function getFactoryCode_with_year()
    {
        $data = $this->Efficiency_Model->getFactoryCode_with_year(
            $_POST['factory_code'],
            $_POST['year']

        );

        // echo "<pre>";
        // print_r($data);
        // die;
        // echo "</pre>";

      
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function missingValues()
    {
        $data = $this->Efficiency_Model->showMissingValues(
        

        );
      
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }




    public function updateArt01()
    {

   



        $data = $this->Efficiency_Model->updateArt01($_POST['client'], $_POST['model'], $_POST['article'], $_POST['Carcase'], $_POST['Lamination'], $_POST['SheetSizing'], $_POST['HF_Cutting'], $_POST['Panel_Preparation'], $_POST['Assembling'], $_POST['labelingandPacking']);
        echo "INSerted";
    }
    public function updateArt05()
    {




        $data = $this->Efficiency_Model->updateArt05($_POST['client'], $_POST['model'], $_POST['article'], $_POST['bladder_Winding'], $_POST['SheetSizing'], $_POST['Panel_Cutting'], $_POST['Panel_Preparation'], $_POST['Assembling'], $_POST['labelingandPacking']);
        echo "INSerted";
    }
    public function updateArt06()
    {




        $data = $this->Efficiency_Model->updateArt06($_POST['client'], $_POST['model'], $_POST['article'],  $_POST['SheetSizing'], $_POST['HF_Cutting'], $_POST['Assembling'], $_POST['labelingandPacking']);
        echo "INSerted";
    }

    public function updateArt07()
    {





        $data = $this->Efficiency_Model->updateArt07($_POST['client'], $_POST['model'], $_POST['article'],  $_POST['Carcase'], $_POST['Lamination'], $_POST['HF_Cutting'], $_POST['Panel_Cutting'], $_POST['Assembling'], $_POST['labelingandPacking']);
        echo "INSerted";
    }

    public function updateArt()
    {





        $data = $this->Efficiency_Model->updateArt($_POST['client'], $_POST['model'], $_POST['article'],  $_POST['Carcase'], $_POST['Lamination'], $_POST['Panel_Cutting'], $_POST['Assembling'], $_POST['labelingandPacking']);
        echo "INSerted";
    }
}

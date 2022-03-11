<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MetalDetectorController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('MIS/MetalDetectorModel', 'model');
    }

    public function index()
    {
        $this->load->view('MIS/metal_detector/MetalDetector');
    }

    public function getChartData(){
        $data = $this->model->getChartData($_POST['c_date']);
        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
    }

    public function getTableData(){
        $data = $this->model->getTableData($_POST['c_date']);
        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
    }

    public function getTableDataRange(){
        $data = $this->model->getTableDataRange($_POST['c_date'],$_POST['e_date']);
        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
    }

    public function getTotalCount(){
        $data = $this->model->getTotalCount($_POST['c_date']);
        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
    }

    public function getTotalCountRange(){
        $data = $this->model->getTotalCountRange($_POST['c_date'],$_POST['e_date']);
        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
    }

    public function getChartDataRange(){
        $data = $this->model->getChartDataRange($_POST['c_date'],$_POST['e_date']);
        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
    }

}

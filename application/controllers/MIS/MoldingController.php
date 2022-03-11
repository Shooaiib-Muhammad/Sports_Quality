<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MoldingController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('MIS/MoldingModel', 'model');
    }

    public function index()
    {
        $this->load->view('MIS/environmental_control/molding');
    }

    public function getMoldTemp()
    {
        $data['MoldtempMax'] = $this->model->getMoldMaxTemp(
            $_POST['c_date'],
            $_POST['e_date']
        );
        $data['MoldtempMin'] = $this->model->getMoldMinTemp(
            $_POST['c_date'],
            $_POST['e_date']
        );
        $data['Moldtemp'] = $this->model->getMoldTemp(
            $_POST['c_date'],
            $_POST['e_date']
        );
        $data['Moldline'] = $this->model->getMoldLine(
            $_POST['c_date'],
            $_POST['e_date'],
            $_POST['hallName']
        );

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function gellHallnames()
    {
        $data = $this->model->gellHallnames();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
}

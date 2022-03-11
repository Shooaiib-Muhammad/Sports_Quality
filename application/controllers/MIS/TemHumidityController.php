<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TemHumidityController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('MIS/TemHumidityModel', 'model');
    }

    public function index()
    {
        $this->load->view('MIS/environmental_control/temhumidity');
    }

    public function getData()
    {
        $data = $this->model->getData($_POST['entrYdate']);
        echo json_encode($data);
    }

    public function gethumMax()
    {
        $data['max'] = $this->model->gethumMax(
            $_POST['c_date'],
            $_POST['e_date']
        );
        $data['min'] = $this->model->gethumMin(
            $_POST['c_date'],
            $_POST['e_date']
        );
        $data['tempmax'] = $this->model->gettempMax(
            $_POST['c_date'],
            $_POST['e_date']
        );
        $data['tempmin'] = $this->model->gettempMin(
            $_POST['c_date'],
            $_POST['e_date']
        );
        $data['amb'] = $this->model->gethumidityAmb(
            $_POST['c_date'],
            $_POST['e_date']
        );
        $data['tm'] = $this->model->gethumidityTM(
            $_POST['c_date'],
            $_POST['e_date']
        );
        $data['ms1'] = $this->model->gethumidityMS1(
            $_POST['c_date'],
            $_POST['e_date']
        );
        $data['ms2'] = $this->model->gethumidityMS2(
            $_POST['c_date'],
            $_POST['e_date']
        );

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function gethumHallWise()
    {
        $data['max'] = $this->model->gethumMaxHall(
            $_POST['c_date'],
            $_POST['e_date'],
            $_POST['hallName']
        );
        $data['min'] = $this->model->gethumMinHall(
            $_POST['c_date'],
            $_POST['e_date'],
            $_POST['hallName']
        );
        $data['tempmax'] = $this->model->gettempMaxHall(
            $_POST['c_date'],
            $_POST['e_date'],
            $_POST['hallName']
        );
        $data['tempmin'] = $this->model->gettempMinHall(
            $_POST['c_date'],
            $_POST['e_date'],
            $_POST['hallName']
        );
        if($_POST['hallName'] == "AMB Hall"){
            $data['amb'] = $this->model->gethumidityAmb(
                $_POST['c_date'],
                $_POST['e_date']
            );
        }
        else if($_POST['hallName'] == "TM Hall"){
        $data['tm'] = $this->model->gethumidityTM(
            $_POST['c_date'],
            $_POST['e_date']
        );
    }
    else if($_POST['hallName'] == "MS Hall-1"){

        $data['ms1'] = $this->model->gethumidityMS1(
            $_POST['c_date'],
            $_POST['e_date']
        );
     }
     else if($_POST['hallName'] == "MS Hall-2"){
        $data['ms2'] = $this->model->gethumidityMS2(
            $_POST['c_date'],
            $_POST['e_date']
        );
     }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function gethumidity()
    {
        $data['amb'] = $this->model->gethumidityAmb(
            $_POST['c_date'],
            $_POST['e_date']
        );
        $data['tm'] = $this->model->gethumidityTM(
            $_POST['c_date'],
            $_POST['e_date']
        );
        $data['ms1'] = $this->model->gethumidityMS1(
            $_POST['c_date'],
            $_POST['e_date']
        );
        $data['ms2'] = $this->model->gethumidityMS2(
            $_POST['c_date'],
            $_POST['e_date']
        );
        $data['ambtemp'] = $this->model->gettempAmb(
            $_POST['c_date'],
            $_POST['e_date']
        );
        $data['tmtemp'] = $this->model->gettempTM(
            $_POST['c_date'],
            $_POST['e_date']
        );
        $data['ms1temp'] = $this->model->gettempMS1(
            $_POST['c_date'],
            $_POST['e_date']
        );
        $data['ms2temp'] = $this->model->gettempMS2(
            $_POST['c_date'],
            $_POST['e_date']
        );

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
}

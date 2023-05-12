f<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lab extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MIS/Development_Model');
    }
    public function index()
    {
        $data['supplier'] = $this->Development_Model->supplier();

        $this->load->view('MIS/Lab_Views/LabDashbaord', $data);
    }
    public function Dashboard()
    {
        $data['supplier'] = $this->Development_Model->supplier();

        $this->load->view('MIS/Lab_Views/lab', $data);
    }

    public function load()
    {
        $c_date = $_GET['c_date'];
        $e_date = $_GET['e_date'];

        $data = $this->Development_Model->load();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function customload()
    {
        $c_date = $_GET['c_date'];
        $e_date = $_GET['e_date'];
        $testtype = $_GET['testtype'];
        $data = $this->Development_Model->customLoad(
            $c_date,
            $e_date,
            $testtype
        );

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function custompie()
    {
        $c_date = $_GET['c_date'];
        $e_date = $_GET['e_date'];
        $testtype = $_GET['testtype'];
        $data = $this->Development_Model->custompie(
            $c_date,
            $e_date,
            $testtype
        );

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function pie()
    {
        $data = $this->Development_Model->pie();

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function customtable()
    {
        $c_date = $_GET['c_date'];
        $e_date = $_GET['e_date'];
        $testtype = $_GET['testtype'];
        $data = $this->Development_Model->customTable(
            $c_date,
            $e_date,
            $testtype
        );
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function customtable1()
    {
        $c_date = $_GET['c_date'];
        $e_date = $_GET['e_date'];
        $data = $this->Development_Model->customTable1($c_date, $e_date);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function loadtable()
    {
        $c_date = $_GET['c_date'];
        $e_date = $_GET['e_date'];
        $data = $this->Development_Model->loadTable($c_date, $e_date);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function loadSupplier()
    {
        $data = $this->Development_Model->loadSupplier();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function loadMaterial()
    {
        $data = $this->Development_Model->loadMaterial();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function getDatewiseSupplier()
    {
        $data['supplier'] = $this->Development_Model->getDatewiseSupplier(
            $_GET['c_date'],
            $_GET['e_date'],
            $_GET['supplierName']
        );
        $data[
            'suppliermaterial'
        ] = $this->Development_Model->getDatewisematerial(
            $_GET['c_date'],
            $_GET['e_date'],
            $_GET['supplierName']
        );
        $data['suppliertable'] = $this->Development_Model->customTablesuplier(
            $_GET['c_date'],
            $_GET['e_date'],
            $_GET['supplierName']
        );
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function getDatewiseMaterial()
    {
        $data['material'] = $this->Development_Model->getDatewisematSupplier(
            $_GET['c_date'],
            $_GET['e_date'],
            $_GET['materialName']
        );
        $data['materialsupplier'] = $this->Development_Model->getDatemat(
            $_GET['c_date'],
            $_GET['e_date'],
            $_GET['materialName']
        );
        $data['materialtable'] = $this->Development_Model->customTablemat(
            $_GET['c_date'],
            $_GET['e_date'],
            $_GET['materialName']
        );
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
}

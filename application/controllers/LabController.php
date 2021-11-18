<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LabController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Section_model', 's');
        $this->load->model('Department_model', 'd');
        $this->load->model('Machine_model', 'm');
        $this->load->model('Team_model', 't');
        $this->load->model('LabModel', 'l');
    }

    public function index()
    {
        $this->load->view('LabDashboard');
    }

    public function dashboard()
    {
        $data['amb_count'] = $this->m->countambInstalledMachines(1);
        $data['amb_team'] = $this->t->countamb(1);
        $data['ms1_count'] = $this->m->countms1InstalledMachines(7);
        $data['ms1_team'] = $this->t->countms1(7);
        $data['ms2_count'] = $this->m->countms2InstalledMachines(6);
        $data['ms2_team'] = $this->t->countms2(6);
        $data['tm_count'] = $this->m->counttmInstalledMachines(3);
        $data['tm_team'] = $this->t->counttm(3);
        $data['lfb_count'] = $this->m->countlfbInstalledMachines(24);
        $data['lfb_team'] = $this->t->countlfb(24);
        $data['packing_count'] = $this->m->countpackingInstalledMachines(25);

        $this->load->view('LabDashboard', $data);
    }

    public function master_form()
    {
         $data['Labtest'] = $this->l->labtest();
        $this->load->view('LabMasterForm',$data);
      
    }

    public function main_form()
    {
        $this->load->view('LabMainForm');
    }

    public function addHeadData()
    {
        $header = $_POST['HeaderArray'];
        $child = $_POST['ChildArray'];
        $TestDate = $header[0][0];
        $PONo = $header[0][1];
        $Quantity = $header[0][2];
        $ReceivingDate = $header[0][3];
        $ItemName = $header[0][4];
        $SupplierName = $header[0][5];
        $testNo = $header[0][6];
        $SupplierRef = $header[0][7];
        $Result = $header[0][8];
        $ItemType = $header[0][9];
        $this->l->AddHeader(
            $TestDate,
            $PONo,
            $Quantity,
            $ReceivingDate,
            $ItemName,
            $SupplierName,
            $testNo,
            $SupplierRef,
            $Result,
            $ItemType,
            $child
        );
    }

    public function addBodyData()
    {
        $child = $_POST['ChildArray'];
        $IdOfHead = $_POST['IdOfNewlyEnteredRecord'];
        foreach ($child as $key => $value) {
            $testNo = $value[0];
            $PONo = $value[1];
            $Requirement = $value[2];
            $Test = $value[3];
            $Results = $value[4];
            $this->l->AddDetails(
                $testNo,
                $PONo,
                $Requirement,
                $Test,
                $Results,
                $IdOfHead
            );
        }
    }
}

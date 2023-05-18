<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DevelopmentController extends CI_Controller
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
        $this->load->view('DevelopmentDashboard');
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

        $this->load->view('DevelopmentDashboard', $data);
    }

    public function master_form()
    {
        $data['FactoryCodes'] = $this->l->Vendors();
        $data['Activities'] = $this->l->Activities();
        $this->load->view('Devmaster', $data);
    }

    public function Process()
    {
        $data['Articles'] = $this->l->GetArticles();
        $data['Activities'] = $this->l->Activities();
        $this->load->view('Process', $data);
    }

    public function AddActivity()
    {
        $FC = $this->input->post('FC');
        $name = $this->input->post('AName');
        $status = $this->input->post('Status');
        if ($status == "on") {
            $status = 1;
        } else {
            $status = 0;
        }
        $this->l->AddActivity($FC, $name, $status);
    }
    public function UpdateActivity($Name, $Status, $TID)
    {
        $NameS = str_replace("%20", " ", $Name);
        $TID = $TID;
        $name = $NameS;
        $status = $Status;
        if ($status == "1") {
            $status = 1;
        } else {
            $status = 0;
        }
        $this->l->updateActivity($TID, $name, $status);
    }
    public function CallData($ArtID)
    {
        $data = $this->l->CallData($ArtID);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function LoadData($FactoryCode, $ArticleID, $noofballs, $MID, $CID, $Type, $splitter1, $splitter2)
    {

        $data['LoadData'] = $this->l->LoadData($FactoryCode);
        //  Print_r($data['LoadData']);
        //  Die;
        foreach ($data['LoadData'] as $keys) {
            $ActivityID = $keys['ActivityID'];
            $VendorID = $keys['VendorID'];
            $ArticleID = $ArticleID;
            $CID = $CID;
            $MID = $MID;
            $Size = $splitter1 . "/" . $splitter2;
            $Balls = $noofballs;
            $Type = $Type;
            $data['insertion'] = $this->l->insertion($ActivityID, $VendorID, $Balls, $ArticleID, $CID, $MID, $Size, $Type);
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function POData($article, $Size1, $Size2)
    {
        $Size = $Size1 . "/" . $Size2;
        $data['ProcessData'] = $this->l->Process($article, $Size);
        $this->load->view('ProcessData', $data);
    }
    public function updateprocess()
    {
        //$RBy=str_replace("%20"," ",$Receivedby);
        //$this->ID->updateKitsissuance($RBy,$iDate ,$RID);
        $TID  = $_POST['TID'];
        $Balls = $_POST['Balls'];
        $Status = $_POST['Status'];
        $date_make = $_POST['Datee'];
        $ProcessEndDate = $_POST['ProcessEndDate'];
        $percentageComplete = $_POST['percentageComplete'];

        $data = $this->l->updateprocess($TID, $Balls, $Status, $date_make, $ProcessEndDate, $percentageComplete);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function updatecprocess()
    {
        $TID  = $_POST['TID'];
        $Balls = $_POST['Balls'];
        $Status = $_POST['Status'];
        $date_make = $_POST['Datee'];
        $ProcessEndDate = $_POST['ProcessEndDate'];
        $rootcasuse = $_POST['rootcasuse'];
        $action = $_POST['action'];
        $percentageComplete = $_POST['percentageComplete'];

        $data = $this->l->updatecprocess($TID, $Balls, $Status, $date_make, $ProcessEndDate, $rootcasuse, $action, $percentageComplete);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }


    public function undo($TID)
    {
        $data = $this->l->undoActivity($TID);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function getSize($ArtCode)
    {
        $data = $this->l->getSize($ArtCode);
        // return $this->output
        // ->set_content_type('application/json')
        // ->set_status_header(200)
        // ->set_output(json_encode($data));

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array(
                'data' => $data,
            )));
    }
    public function developmentTests()
    {
        $this->load->view("developmentTests.php");
    }
    public function developmentTestsReport()
    {
        $data = $this->l->developmentTestsReport($_POST['startDate'], $_POST['endDate']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function FGTTests()
    {
        $this->load->view("FGTTests.php");
    }
    public function FGTTestsReport()
    {
        $data = $this->l->FGTTestsReport($_POST['startDate'], $_POST['endDate']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
}

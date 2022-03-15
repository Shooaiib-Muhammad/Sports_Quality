<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OEE extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DMMS/Section_model', 's');
        $this->load->model('DMMS/Department_model', 'd');
        $this->load->model('DMMS/Machine_model', 'm');
        $this->load->model('DMMS/Team_model', 't');
    }

    public function index()
    {
        $this->load->view('DMMS/login');
    }
    public function loginPage()
    {
        $this->load->view('DMMS/page_login');
    }
    public function loginPage1()
    {
        $this->load->view('DMMS/page_login1');
    }
    public function loginpafe()
    {
        $this->load->view('DMMS/login');
    }
    public function OEE_Main()
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
        $data['dept'] = $this->d->findall();
        $this->load->view('DMMS/OEE_Main', $data);
    }

    public function maintance_login()
    {
        $user = $this->input->post('username');
        $password = $this->input->post('password');
        $this->m->loginn($user, $password);
        if ($this->session->has_userdata('user_id')) {
            if ($password == '123') {
                redirect('changepwd');
            } else {
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
                $data[
                    'packing_count'
                ] = $this->m->countpackingInstalledMachines(25);
                $this->load->view('DMMS/Maintance_Dashboard', $data);
            }
        }
    }
    public function Maintance_Dashboard()
    {
        $user = $this->input->post('username');
        $password = $this->input->post('password');
        //$this->m->loginn($user, $password);

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
        $this->load->view('DMMS/Maintance_Dashboard', $data);
    }

    public function Preventive_Maintance()
    {
        $this->load->view('DMMS/Preventive_maintance');
    }
    public function Accidental_Maintance()
    {
        $data['done'] = $this->m->MDone();
        $data['pending'] = $this->m->MPending();
        $data['downtime'] = $this->m->downtime();
        $data['DeptwiseGraph'] = $this->m->DeptwiseDowntime();
        $data['MachineDowntime2'] = $this->m->MachineDowntime(); //MS1
        $data['MachineDowntime3'] = $this->m->MachineDowntime3(); //MS2
        $data['MachineDowntime4'] = $this->m->MachineDowntime4(); //AMB
        $data['MachineDowntime5'] = $this->m->MachineDowntime5(); //TM
        $data['MachineDowntime6'] = $this->m->MachineDowntime6(); //LFB
        $data['MachineDowntime7'] = $this->m->MachineDowntime7(); //Packing

        $data['GetMS1WeekData'] = $this->m->GetMS1WeekData(); //Dates
        $data['MSWeek'] = $this->m->MSWeek(); //Ms
        $data['MS2Week'] = $this->m->MS2Week();
        $data['AMBWeek'] = $this->m->AMBWeek();
        $data['TMWeek'] = $this->m->TMWeek();
        $data['LFBWeek'] = $this->m->LFBWeek();
        $data['PCWeek'] = $this->m->PCWeek();

        $data['Counter'] = $this->m->issuedCounter();
        $data['Hcounter'] = $this->m->historyCounter();
        $this->load->view('DMMS/Maintance_Process', $data);
    }
    public function issued()
    {
        $data['issued'] = $this->m->getissued();
        $this->load->view('DMMS/issued', $data);
    }
    public function History()
    {
        $data['history'] = $this->m->gethistory();
        $this->load->view('DMMS/history', $data);
    }
    public function process_login()
    {
        $user = $this->input->post('username');
        $password = $this->input->post('password');
        $this->m->loginn($user, $password);
        if ($this->session->has_userdata('user_id')) {
            if ($password == '123') {
                redirect('changepwd');
            } else {
                // $data['amb_count'] = $this->m->countambInstalledMachines(1);
                // $data['amb_team'] = $this->t->countamb(1);
                // $data['ms1_count'] = $this->m->countms1InstalledMachines(7);
                // $data['ms1_team'] = $this->t->countms1(7);
                // $data['ms2_count'] = $this->m->countms2InstalledMachines(6);
                // $data['ms2_team'] = $this->t->countms2(6);
                // $data['tm_count'] = $this->m->counttmInstalledMachines(3);
                // $data['tm_team'] = $this->t->counttm(3);
                // $data['lfb_count'] = $this->m->countlfbInstalledMachines(24);
                // $data['lfb_team'] = $this->t->countlfb(24);
                // $data[
                //     'packing_count'
                // ] = $this->m->countpackingInstalledMachines(25);
                // $this->load->view('Dmms_Dashboard', $data);
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
                $data[
                    'packing_count'
                ] = $this->m->countpackingInstalledMachines(25);
                $this->load->view('DMMS/Maintance_Dashboard', $data);
            }
        }
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

        $this->load->view('DMMS/Dmms_Dashboard', $data);
    }

    public function Home()
    {
        $data['done'] = $this->m->MDone();
        $data['pending'] = $this->m->MPending();
        $data['downtime'] = $this->m->downtime();
        $data['DeptwiseGraph'] = $this->m->DeptwiseDowntime();
        $data['MachineDowntime2'] = $this->m->MachineDowntime(); //MS1
        $data['MachineDowntime3'] = $this->m->MachineDowntime3(); //MS2
        $data['MachineDowntime4'] = $this->m->MachineDowntime4(); //AMB
        $data['MachineDowntime5'] = $this->m->MachineDowntime5(); //TM
        $data['MachineDowntime6'] = $this->m->MachineDowntime6(); //LFB
        $data['MachineDowntime7'] = $this->m->MachineDowntime7(); //Packing

        $data['GetMS1WeekData'] = $this->m->GetMS1WeekData(); //Dates
        $data['MSWeek'] = $this->m->MSWeek(); //Ms
        $data['MS2Week'] = $this->m->MS2Week();
        $data['AMBWeek'] = $this->m->AMBWeek();
        $data['TMWeek'] = $this->m->TMWeek();
        $data['LFBWeek'] = $this->m->LFBWeek();
        $data['PCWeek'] = $this->m->PCWeek();

        // $data['downtimeLine'] = $this->m->downtimeLine();
        // $data['downtimePie'] = $this->m->downtimePie();
        $this->load->view('DMMS/intel_marketing_dashboard', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }

    public function getCustomData()
    {
        // print_r($_POST);
        // die();
        // $data['bar'] = $this->m->barChart($_POST['s_date'], $_POST['e_date']);

        // return $this->output
        //     ->set_content_type('application/json')
        //     ->set_status_header(200)
        //     ->set_output(json_encode($data));
        $data['sdate'] = $_POST['Sdate'];
        $data['edate'] = $_POST['Edate'];
        $data['done'] = $this->m->MDone1($_POST['Sdate'], $_POST['Edate']);

        $data['pending'] = $this->m->MPending1(
            $_POST['Sdate'],
            $_POST['Edate']
        );

        $data['downtime'] = $this->m->downtime1(
            $_POST['Sdate'],
            $_POST['Edate']
        );

        $data['DeptwiseGraph'] = $this->m->DeptwiseDowntime1(
            $_POST['Sdate'],
            $_POST['Edate']
        );
        $data['MachineDowntime2'] = $this->m->MachineDowntime1(
            $_POST['Sdate'],
            $_POST['Edate']
        );

        $data['MachineDowntime3'] = $this->m->MachineDowntimeCustom3(
            $_POST['Sdate'],
            $_POST['Edate']
        ); //MS2

        $data['MachineDowntime4'] = $this->m->MachineDowntimeCustom4(
            $_POST['Sdate'],
            $_POST['Edate']
        ); //AMB

        $data['MachineDowntime5'] = $this->m->MachineDowntimeCustom5(
            $_POST['Sdate'],
            $_POST['Edate']
        ); //TM

        $data['MachineDowntime6'] = $this->m->MachineDowntimeCustom6(
            $_POST['Sdate'],
            $_POST['Edate']
        ); //LFB
        // print_r($data['MachineDowntime6']);
        // die();
        $data['MachineDowntime7'] = $this->m->MachineDowntime7(
            $_POST['Sdate'],
            $_POST['Edate']
        ); //Packing

        $data['GetMS1WeekData'] = $this->m->GetMS1WeekData(
            $_POST['Sdate'],
            $_POST['Edate']
        ); //Dates
        $data['MSWeek'] = $this->m->MSWeek($_POST['Sdate'], $_POST['Edate']); //Ms
        $data['MS2Week'] = $this->m->MS2Week($_POST['Sdate'], $_POST['Edate']);
        $data['AMBWeek'] = $this->m->AMBWeek($_POST['Sdate'], $_POST['Edate']);
        $data['TMWeek'] = $this->m->TMWeek($_POST['Sdate'], $_POST['Edate']);
        $data['LFBWeek'] = $this->m->LFBWeek($_POST['Sdate'], $_POST['Edate']);
        $data['PCWeek'] = $this->m->PCWeek($_POST['Sdate'], $_POST['Edate']);

        $data['Counter'] = $this->m->issuedCounter(
            $_POST['Sdate'],
            $_POST['Edate']
        );
        $data['Hcounter'] = $this->m->historyCounter(
            $_POST['Sdate'],
            $_POST['Edate']
        );
        $this->load->view('DMMS/Maintance_Process', $data);
    }
}

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
        $data['FactoryCodes']=$this->l->Vendors();
        $data['Activities']=$this->l->Activities();
        $this->load->view('Devmaster',$data);
    }
    public function AddActivity(){
     $FC = $this->input->post('FC');
      $name = $this->input->post('AName');
	$status = $this->input->post('Status');
	if($status =="on"){
		$status =1;
	}
	else{
		$status=0;
	}
	$this->l->AddActivity($FC,$name,$status); 
	
    }
    public function UpdateActivity($Name,$Status,$TID){
        $NameS=str_replace("%20"," ",$Name);
             $TID = $TID;
      $name = $NameS;
	$status = $Status;
	if($status =="1"){
		$status =1;
	}
	else{
		$status=0;
	}
	$this->l->updateActivity($TID,$name,$status); 
    }
}

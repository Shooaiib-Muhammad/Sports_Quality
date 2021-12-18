<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FGT extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LabModel','FGT');
        
    }

    public function index()
    {
        $data['loadFGT_H']= $this->FGT->getFGRH();
     
        $this->load->view('FGT',$data);
    }
    public function FGT_H(){
       
        $data= $this->FGT->FGT_H_insertion($_POST['fgttype'],$_POST['labno'],$_POST['tdate'],$_POST['testcat'],$_POST['fifastump'],$_POST['pmonth'],$_POST['cmat'],$_POST['backing'],$_POST['bladder'],$_POST['btype'],$_POST['ttype'],$_POST['mmcolor'],$_POST['pcolors'],$_POST['result'],$_POST['fn'],$_POST['m'],$_POST['inn'],$_POST['pshape'], $_POST['rem']);
        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
    }

    public function FGT_D(){
        // $w1=$_POST['w1'];
        // $w2=$_POST['w1'];
        // print_r($_POST);die();
        $data= $this->FGT->FGT_D_insertion($_POST['TID'],$_POST['w1'],$_POST['w2'],$_POST['c1_sp'],$_POST['c2_sp'],$_POST['sp1_sp'],$_POST['sp2_sp'],$_POST['lp1'],$_POST['lp2'],$_POST['rrt1'],$_POST['rrt2'],$_POST['rrt51'],$_POST['rrt52'],$_POST['rrt01'],$_POST['rrt02'],$_POST['c1_dp'],$_POST['c2_dp'],$_POST['sp_dp1'],$_POST['sp_dp2'],$_POST['lp_dp1'],$_POST['lp_dp2'],$_POST['m1'],$_POST['m2'],$_POST['wup1'],$_POST['wup2'],$_POST['c1_wrt'],$_POST['c2_wrt'],$_POST['sp1_wrt'],$_POST['sp2_wrt'],$_POST['dt1'],$_POST['dt2'],$_POST['abr1'],$_POST['abr2'],$_POST['uvlf1'],$_POST['uvlf2'],$_POST['otr1'],$_POST['otr2'],$_POST['hl1'],$_POST['hl2'],$_POST['hcc1'],$_POST['hcc2']);
        return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
    }




    
}

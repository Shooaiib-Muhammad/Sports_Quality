<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardModel extends CI_Model
{

    public function TM()
    {
        $date = date("d/m/Y");
        $query = $this->db
        ->query("SELECT        Datename, TotalChecked, pass, Fail, FactoryCode
        FROM            dbo.view_DMMS_TMProduction
        WHERE        (Datename = '$date')
        ");
                return $query->result_array();
    }

    public function B34005()
    {
        $date = date("d/m/Y");
        $query = $this->db
        ->query("SELECT        DateName, TotalChecked, Pass, Fail
        FROM            dbo.view_DMMS_production
        WHERE        (DateName = '$date')
        ");
                return $query->result_array();
    }

    public function B34006()
    {
        $date = date("d/m/Y");
        $query = $this->db
        ->query("SELECT        Datename, TotalChecked, Pass, Fail
        FROM            dbo.view_DMMS_AMb_production
        WHERE        (Datename = '$date')
        ");
                return $query->result_array();
    }

    public function B34007()
    {
        $date = date("d/m/Y");
        $query = $this->db
        ->query("SELECT        Datename, TotalChecked, pass, Fail
        FROM            dbo.view_DMMS_LFB_Production
        WHERE        (Datename = '$date')
        ");
                return $query->result_array();
    }

}
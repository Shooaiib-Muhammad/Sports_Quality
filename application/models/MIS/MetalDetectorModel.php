<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MetalDetectorModel extends CI_Model
{

    public function getChartData($sdate)
    {
        $time = strtotime($sdate);
        $newformat = date('d/m/Y', $time);
        $query = $this->db
            ->query("SELECT        SUM(DedCount) AS DedCount, MachineName, Date
            FROM            dbo.view_Metal_Ded
            GROUP BY MachineName, Date
            HAVING        (Date BETWEEN '$newformat' AND '$newformat')");
        return $query->result();
    }

    public function getTableData($sdate)
    {
        $time = strtotime($sdate);
        $newformat = date('d/m/Y', $time);
        $query = $this->db
            ->query("SELECT        dbo.view_Metal_Ded.*
            FROM            dbo.view_Metal_Ded
            WHERE        (Date BETWEEN '$newformat' AND '$newformat')
            ");
        return $query->result();
    }

    public function getTableDataRange($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('Y-m-d', $time);
        $newformat1 = date('Y-m-d', $time1);
      
        
        $query = $this->db
            ->query("SELECT        dbo.view_Metal_Ded.*
            FROM            dbo.view_Metal_Ded
            WHERE        (Date BETWEEN CONVERT(DATETIME, '$newformat 00:00:00', 102) AND CONVERT(DATETIME, '$newformat1 00:00:00', 102))");
        return $query->result();
    }

    public function getTotalCount($sdate)
    {
        $time = strtotime($sdate);
        $newformat = date('d/m/Y', $time);
        $query = $this->db
            ->query("SELECT        SUM(DedCount) AS DedCount
            FROM            dbo.view_Metal_Ded
            WHERE        (Date BETWEEN '$newformat' AND '$newformat')
            ");
        return $query->result();
    }

    public function getTotalCountRange($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        SUM(DedCount) AS DedCount
            FROM            dbo.view_Metal_Ded
            WHERE        (Date BETWEEN '$newformat' AND '$newformat1')");
        return $query->result();
    }

    public function getChartDataRange($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        SUM(DedCount) AS DedCount, MachineName, Date
            FROM            dbo.view_Metal_Ded
            GROUP BY MachineName, Date
            HAVING        (Date BETWEEN '$newformat' AND '$newformat1')");
        return $query->result();
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pivot_Model extends CI_Model
{
    public function getPivotDateRange($sdate, $edate)
    {

        $query = $this->db
            ->query("SELECT      *
            FROM            dbo.View_pivot_Datewise2
            WHERE        (date BETWEEN CONVERT(DATETIME, '$sdate 00:00:00', 102) AND CONVERT(DATETIME, '$edate 00:00:00', 102))
");
        return $query->result();
    }
    public function pivotCurrentDateData()
    {
        $Date = date('Y/m/d');
        $query = $this->db
            ->query("SELECT        dbo.view_Pivot_Hours.date, SUM(dbo.view_Pivot_Hours.Qty) AS Qty, SUM(dbo.view_Pivot_Hours.Pass) AS Pass, SUM(dbo.view_Pivot_Hours.fail) AS fail, dbo.view_Pivot_Hours.SystemName, 
            dbo.view_Pivot_Hours.SystemIP
FROM            dbo.view_Pivot_Hours INNER JOIN
            dbo.tbl_PC_AMB_Hours ON dbo.view_Pivot_Hours.H = dbo.tbl_PC_AMB_Hours.Hour
GROUP BY dbo.view_Pivot_Hours.date, dbo.view_Pivot_Hours.SystemName, dbo.view_Pivot_Hours.SystemIP
HAVING        (dbo.view_Pivot_Hours.date = CONVERT(DATETIME, '$Date 00:00:00', 102))");
        return $query->result_array();
    }

    public function getPivotSystemIPWise($systemIp)
    {
        $Date = date('Y/m/d');
        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT dbo.view_Pivot_Hours.date, SUM(dbo.view_Pivot_Hours.Qty) AS Qty, SUM(dbo.view_Pivot_Hours.Pass) AS pass, SUM(dbo.view_Pivot_Hours.fail) AS fail, dbo.view_Pivot_Hours.SystemName, 
            dbo.view_Pivot_Hours.SystemIP, dbo.tbl_PC_AMB_Hours.HourName, dbo.view_Pivot_Hours.H
FROM            dbo.view_Pivot_Hours INNER JOIN
            dbo.tbl_PC_AMB_Hours ON dbo.view_Pivot_Hours.H = dbo.tbl_PC_AMB_Hours.Hour
GROUP BY dbo.view_Pivot_Hours.date, dbo.view_Pivot_Hours.SystemName, dbo.view_Pivot_Hours.SystemIP, dbo.tbl_PC_AMB_Hours.HourName, dbo.view_Pivot_Hours.H
HAVING        (dbo.view_Pivot_Hours.date = CONVERT(DATETIME, '$Date 00:00:00', 102)) AND (dbo.view_Pivot_Hours.SystemIP = '$systemIp')
ORDER BY dbo.view_Pivot_Hours.H
");
        return $query->result_array();
        
    }
    public function getPivotSystemUpperData($systemIp)
    {
        $Date = date('Y/m/d');
        $query = $this->db
            ->query("SELECT        dbo.view_Pivot_Hours.date, SUM(dbo.view_Pivot_Hours.Qty) AS Qty, SUM(dbo.view_Pivot_Hours.Pass) AS pass, SUM(dbo.view_Pivot_Hours.fail) AS fail, dbo.view_Pivot_Hours.SystemName, 
                         dbo.view_Pivot_Hours.SystemIP
FROM            dbo.view_Pivot_Hours INNER JOIN
                         dbo.tbl_PC_AMB_Hours ON dbo.view_Pivot_Hours.H = dbo.tbl_PC_AMB_Hours.Hour
GROUP BY dbo.view_Pivot_Hours.date, dbo.view_Pivot_Hours.SystemName, dbo.view_Pivot_Hours.SystemIP
HAVING        (dbo.view_Pivot_Hours.date = CONVERT(DATETIME, '$Date 00:00:00', 102)) AND (dbo.view_Pivot_Hours.SystemIP = '$systemIp')");
        return $query->result_array();
    }
    public function getPivotSystemIpWiseFailedBall($systemIp)
    {
        $Date = date('Y/m/d');
        $query = $this->db
            ->query("SELECT        dbo.tbl_Pivot.po_line_id AS po, dbo.tbl_Pivot.sku_id AS article, dbo.tbl_Pivot.ArtSize, dbo.defects.label, COUNT(dbo.tbl_Pivot.PassQty) AS defects, dbo.tbl_Pivot.defects_id, DATEADD(dd, 0, DATEDIFF(dd, 0, 
            dbo.tbl_Pivot.inspection_completed_date)) AS Date, dbo.tbl_Pivot.SystemIP, dbo.tbl_Pivot.Name, dbo.tbl_Pivot.CheckerName
FROM            dbo.tbl_Pivot INNER JOIN
            dbo.defects ON dbo.tbl_Pivot.defects_id = dbo.defects.defects_id
WHERE        (dbo.tbl_Pivot.defects_id <> 0)
GROUP BY dbo.tbl_Pivot.po_line_id, dbo.tbl_Pivot.ArtSize, dbo.tbl_Pivot.defects_id, dbo.tbl_Pivot.sku_id, DATEADD(dd, 0, DATEDIFF(dd, 0, dbo.tbl_Pivot.inspection_completed_date)), dbo.tbl_Pivot.SystemIP, dbo.defects.label, 
            dbo.tbl_Pivot.Name, dbo.tbl_Pivot.CheckerName
HAVING        (DATEADD(dd, 0, DATEDIFF(dd, 0, dbo.tbl_Pivot.inspection_completed_date)) = CONVERT(DATETIME, '$Date 00:00:00', 102)) AND (dbo.tbl_Pivot.SystemIP = '$systemIp')");
        return $query->result_array();
    }
}

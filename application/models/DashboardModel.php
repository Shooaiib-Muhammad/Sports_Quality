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

   
    public function FactoryWiseProduction($Day, $Month, $Year)
    {
        $query = $this->db->query("SELECT        SUM(TotalChecked) AS TotalChecked, SUM(pass) AS pass, SUM(Fail) AS Fail, FactoryCode
FROM            dbo.View_Production
GROUP BY Datename, FactoryCode
HAVING        (Datename = '$Day/$Month/$Year')");
        return $result = $query->result_array();
    }
    public function targets($Day, $Month, $Year)
    {
        $query = $this->db->query("SELECT        dbo.view_target.*
FROM            dbo.view_target
WHERE        (Datename = '$Day/$Month/$Year')");
        return $result = $query->result_array();
    }
    
   
    public function B34001($Day, $Month, $Year)
    {
        $query = $this->db->query(" SELECT        SUM(FailQty) AS FailQty, SUM(PassQty) AS PassQty, SUM(TotalChecked) AS TotalChecked, ArtSize, ArtCode
FROM            dbo.view_Article_Wise_HS
WHERE        (DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
GROUP BY ArtSize, ArtCode");
        return $result = $query->result_array();
    }
    public function B34002($Day, $Month, $Year)
    {
        $query = $this->db->query("SELECT        ArtSize, ArtCode, SUM(TotalChecked) AS TotalChecked, SUM(Fail) AS Fail, SUM(pass) AS pass
FROM            dbo.view_TM_Article_Wise_Production
WHERE        (Datename = '$Day/$Month/$Year') And (FactoryCode='B34002')
GROUP BY ArtSize, ArtCode");
        return $result = $query->result_array();
    }
    public function B34003($Day, $Month, $Year)
    {
        $query = $this->db->query("SELECT        ArtSize, ArtCode, SUM(TotalChecked) AS TotalChecked, SUM(Fail) AS Fail, SUM(pass) AS pass
FROM            dbo.view_TM_Article_Wise_Production
WHERE        (Datename = '$Day/$Month/$Year') And (FactoryCode='B34003')
GROUP BY ArtSize, ArtCode");
        return $result = $query->result_array();
    }
    public function B34004($Day, $Month, $Year)
    {
        $query = $this->db->query("SELECT        ArtSize, ArtCode, SUM(TotalChecked) AS TotalChecked, SUM(Fail) AS Fail, SUM(pass) AS pass
FROM            dbo.view_TM_Article_Wise_Production
WHERE        (Datename = '$Day/$Month/$Year') And (FactoryCode='B34004')
GROUP BY ArtSize, ArtCode");
        return $result = $query->result_array();
    }

    public function B34005($Day, $Month, $Year)
    {
        $query = $this->db->query("SELECT        ArtSize, ArtCode, SUM(Fail) AS Fail, SUM(Pass) AS Pass, SUM(TotalChecked) AS TotalChecked
FROM            dbo.view_Article_Wise_MS
WHERE        (DateName = '$Day/$Month/$Year')
GROUP BY ArtSize, ArtCode");
        return $result = $query->result_array();
    }
    public function B34006($Day, $Month, $Year)
    {
        $query = $this->db->query("SELECT        ArtCode, ArtSize, SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(Fail) AS Fail
FROM            dbo.view_Article_Wise_AMB
WHERE        (DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
GROUP BY ArtCode, ArtSize");
        return $result = $query->result_array();
    }
    public function B34007($Day, $Month, $Year)
    {
        $query = $this->db->query("SELECT        ArtCode, SUM(TotalChecked) AS TotalChecked, SUM(TotalPass) AS TotalPass, SUM(Fail) AS Fail, ArtSIze
FROM            dbo.view_Article_Wise_LFB
WHERE        (DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
GROUP BY ArtCode, ArtSIze");
        return $result = $query->result_array();
    }

    public function TmProduction($Day, $Month, $Year)
    {
        $query = $this->db->query("SELECT        Datename, TotalChecked, pass, Fail, FactoryCode
FROM            dbo.view_DMMS_TMProduction
WHERE        (Datename = '$Day/$Month/$Year')");
        return $result = $query->result_array();
    }
    Public function GetMsproduction($Day, $Month, $Year){
       
        $query = $this->db->query(" SELECT        TOP (100) PERCENT dbo.tbl_PC_AMB_Line.LineName, SUM(dbo.tbl_PC_MS.TotalChecked) AS TotalChecked, SUM(dbo.tbl_PC_MS.Pass) AS Pass, SUM(dbo.tbl_PC_MS.Fail) AS Fail
FROM            dbo.tbl_PC_MS INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_PC_MS.DayNo = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                         dbo.tbl_PC_AMB_Line ON dbo.tbl_PC_MS.Line = dbo.tbl_PC_AMB_Line.LineID
WHERE        (dbo.tbl_Inv_Tran_Date.DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
GROUP BY dbo.tbl_PC_AMB_Line.LineName");
        return $result = $query->result_array();
    }
    public function GetAMBproduction($Day, $Month, $Year)
    {

        $query = $this->db->query("SELECT        SUM(TotalChecked) AS TotalChecked, SUM(Fail) AS Fail, LineName, SUM(Pass) AS Pass
FROM            dbo.view_Line_wise_AMB
WHERE        (DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
GROUP BY LineName");
        return $result = $query->result_array();
    }
    
}
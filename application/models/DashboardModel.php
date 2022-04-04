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
public function monthlyOrder(){
   

$query = $this->db
->query("SELECT        FactoryCode, SUM(OrderQty) AS OrderQty
FROM            dbo.View_PO_OrderQty_Sum
GROUP BY FactoryCode, Month, Year
HAVING        (Month = 04) AND (Year = 2022)");
        return $query->result_array();
   
}
public function getMonthtlyOrder_Article_Wise(){
   
$query = $this->db
->query(" SELECT        SUM(dbo.View_PO_OrderQty_Sum.OrderQty) AS OrderQty, dbo.tbl_Pro_Article.ArtCode
FROM            dbo.View_PO_OrderQty_Sum INNER JOIN
                         dbo.tbl_Pro_Article ON dbo.View_PO_OrderQty_Sum.ClientID = dbo.tbl_Pro_Article.ClientID AND dbo.View_PO_OrderQty_Sum.ModelID = dbo.tbl_Pro_Article.ModelID AND 
                         dbo.View_PO_OrderQty_Sum.ArtID = dbo.tbl_Pro_Article.ArtID
WHERE        (dbo.View_PO_OrderQty_Sum.FactoryCode = 'B34001') AND (dbo.View_PO_OrderQty_Sum.Year = 2022) AND (dbo.View_PO_OrderQty_Sum.Month = 03)
GROUP BY dbo.tbl_Pro_Article.ArtCode");
        return $query->result_array();
}
   
public function getMonthtlyOrder_Article_Wise02(){
   
    $query = $this->db
    ->query(" SELECT        SUM(dbo.View_PO_OrderQty_Sum.OrderQty) AS OrderQty, dbo.tbl_Pro_Article.ArtCode
    FROM            dbo.View_PO_OrderQty_Sum INNER JOIN
                             dbo.tbl_Pro_Article ON dbo.View_PO_OrderQty_Sum.ClientID = dbo.tbl_Pro_Article.ClientID AND dbo.View_PO_OrderQty_Sum.ModelID = dbo.tbl_Pro_Article.ModelID AND 
                             dbo.View_PO_OrderQty_Sum.ArtID = dbo.tbl_Pro_Article.ArtID
    WHERE        (dbo.View_PO_OrderQty_Sum.FactoryCode = 'B34002') AND (dbo.View_PO_OrderQty_Sum.Year = 2022) AND (dbo.View_PO_OrderQty_Sum.Month = 03)
    GROUP BY dbo.tbl_Pro_Article.ArtCode");
            return $query->result_array();
    }
    public function getMonthtlyOrder_Article_Wise03(){
   
        $query = $this->db
        ->query(" SELECT        SUM(dbo.View_PO_OrderQty_Sum.OrderQty) AS OrderQty, dbo.tbl_Pro_Article.ArtCode
        FROM            dbo.View_PO_OrderQty_Sum INNER JOIN
                                 dbo.tbl_Pro_Article ON dbo.View_PO_OrderQty_Sum.ClientID = dbo.tbl_Pro_Article.ClientID AND dbo.View_PO_OrderQty_Sum.ModelID = dbo.tbl_Pro_Article.ModelID AND 
                                 dbo.View_PO_OrderQty_Sum.ArtID = dbo.tbl_Pro_Article.ArtID
        WHERE        (dbo.View_PO_OrderQty_Sum.FactoryCode = 'B34003') AND (dbo.View_PO_OrderQty_Sum.Year = 2022) AND (dbo.View_PO_OrderQty_Sum.Month = 03)
        GROUP BY dbo.tbl_Pro_Article.ArtCode");
                return $query->result_array();
        }
        public function getMonthtlyOrder_Article_Wise04(){
   
            $query = $this->db
            ->query(" SELECT        SUM(dbo.View_PO_OrderQty_Sum.OrderQty) AS OrderQty, dbo.tbl_Pro_Article.ArtCode
            FROM            dbo.View_PO_OrderQty_Sum INNER JOIN
                                     dbo.tbl_Pro_Article ON dbo.View_PO_OrderQty_Sum.ClientID = dbo.tbl_Pro_Article.ClientID AND dbo.View_PO_OrderQty_Sum.ModelID = dbo.tbl_Pro_Article.ModelID AND 
                                     dbo.View_PO_OrderQty_Sum.ArtID = dbo.tbl_Pro_Article.ArtID
            WHERE        (dbo.View_PO_OrderQty_Sum.FactoryCode = 'B34004') AND (dbo.View_PO_OrderQty_Sum.Year = 2022) AND (dbo.View_PO_OrderQty_Sum.Month = 03)
            GROUP BY dbo.tbl_Pro_Article.ArtCode");
                    return $query->result_array();
            }
            public function getMonthtlyOrder_Article_Wise05(){
   
                $query = $this->db
                ->query(" SELECT        SUM(dbo.View_PO_OrderQty_Sum.OrderQty) AS OrderQty, dbo.tbl_Pro_Article.ArtCode
                FROM            dbo.View_PO_OrderQty_Sum INNER JOIN
                                         dbo.tbl_Pro_Article ON dbo.View_PO_OrderQty_Sum.ClientID = dbo.tbl_Pro_Article.ClientID AND dbo.View_PO_OrderQty_Sum.ModelID = dbo.tbl_Pro_Article.ModelID AND 
                                         dbo.View_PO_OrderQty_Sum.ArtID = dbo.tbl_Pro_Article.ArtID
                WHERE        (dbo.View_PO_OrderQty_Sum.FactoryCode = 'B34005') AND (dbo.View_PO_OrderQty_Sum.Year = 2022) AND (dbo.View_PO_OrderQty_Sum.Month = 03)
                GROUP BY dbo.tbl_Pro_Article.ArtCode");
                        return $query->result_array();
                }
                public function getMonthtlyOrder_Article_Wise06(){
   
                    $query = $this->db
                    ->query(" SELECT        SUM(dbo.View_PO_OrderQty_Sum.OrderQty) AS OrderQty, dbo.tbl_Pro_Article.ArtCode
                    FROM            dbo.View_PO_OrderQty_Sum INNER JOIN
                                             dbo.tbl_Pro_Article ON dbo.View_PO_OrderQty_Sum.ClientID = dbo.tbl_Pro_Article.ClientID AND dbo.View_PO_OrderQty_Sum.ModelID = dbo.tbl_Pro_Article.ModelID AND 
                                             dbo.View_PO_OrderQty_Sum.ArtID = dbo.tbl_Pro_Article.ArtID
                    WHERE        (dbo.View_PO_OrderQty_Sum.FactoryCode = 'B34006') AND (dbo.View_PO_OrderQty_Sum.Year = 2022) AND (dbo.View_PO_OrderQty_Sum.Month = 03)
                    GROUP BY dbo.tbl_Pro_Article.ArtCode");
                            return $query->result_array();
                    }
                    public function getMonthtlyOrder_Article_WiseAll(){
   
                        $query = $this->db
                        ->query("SELECT        SUM(dbo.View_PO_OrderQty_Sum.OrderQty) AS OrderQty, dbo.tbl_Pro_Article.ArtCode, dbo.View_PO_OrderQty_Sum.FactoryCode
                        FROM            dbo.View_PO_OrderQty_Sum INNER JOIN
                                                 dbo.tbl_Pro_Article ON dbo.View_PO_OrderQty_Sum.ClientID = dbo.tbl_Pro_Article.ClientID AND dbo.View_PO_OrderQty_Sum.ModelID = dbo.tbl_Pro_Article.ModelID AND 
                                                 dbo.View_PO_OrderQty_Sum.ArtID = dbo.tbl_Pro_Article.ArtID
                        WHERE        (dbo.View_PO_OrderQty_Sum.Year = 2022) AND (dbo.View_PO_OrderQty_Sum.Month = 03)
                        GROUP BY dbo.tbl_Pro_Article.ArtCode, dbo.View_PO_OrderQty_Sum.FactoryCode");
                                return $query->result_array();
                        }
    public function FactoryWiseProduction($Day, $Month, $Year)
    {
        
        $query = $this->db->query("SELECT        SUM(Checked) AS TotalChecked, SUM(Pass) AS pass, SUM(Fail) AS Fail, FactoryCode
FROM            dbo.tbl_Production_View
WHERE        (TranDate = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
GROUP BY FactoryCode");
        return $result = $query->result_array();
    }
    public function FactoryWiseProductionmonthly()
    {
        
        $query = $this->db->query("SELECT        SUM(Checked) AS TotalChecked, SUM(Pass) AS pass, SUM(Fail) AS Fail, FactoryCode
        FROM            dbo.tbl_Production_View
        WHERE        (MONTH(TranDate) = 04) AND (YEAR(TranDate) = 2022)
        GROUP BY FactoryCode");
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
       
        $query = $this->db->query("SELECT        TOP (100) PERCENT dbo.tbl_PC_AMB_Line.LineName, SUM(dbo.tbl_PC_MS.TotalChecked) AS TotalChecked, SUM(dbo.tbl_PC_MS.Pass) AS Pass, SUM(dbo.tbl_PC_MS.Fail) AS Fail, dbo.tbl_PC_AMB_Line.LineID
FROM            dbo.tbl_PC_MS INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_PC_MS.DayNo = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                         dbo.tbl_PC_AMB_Line ON dbo.tbl_PC_MS.Line = dbo.tbl_PC_AMB_Line.LineID
WHERE        (dbo.tbl_Inv_Tran_Date.DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
GROUP BY dbo.tbl_PC_AMB_Line.LineName, dbo.tbl_PC_AMB_Line.LineID
ORDER BY dbo.tbl_PC_AMB_Line.LineID");
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
    public function last5dayProduction()
    {
        $lastday= date('Y-m-d', strtotime('-1 days'));
       $last7day= date('Y-m-d', strtotime('-7 days'));
        $query = $this->db->query("SELECT        SUM(Checked) AS TotalChecked, SUM(Pass) AS pass, SUM(Fail) AS Fail, TranDate
FROM            dbo.tbl_Production_View
WHERE        (TranDate BETWEEN CONVERT(DATETIME, '$last7day 00:00:00', 102) AND CONVERT(DATETIME, '$lastday 00:00:00', 102))
GROUP BY TranDate");
        return $result = $query->result_array();
    }
    public function getweeklydata(){
        

        
        $lastday = date('Y-m-d', strtotime('-1 days'));
        $last7day = date('Y-m-d', strtotime('-7 days'));
        $query = $this->db->query("SELECT        SUM(Checked) AS TotalChecked, SUM(Pass) AS pass, SUM(Fail) AS Fail, CONVERT(varchar, TranDate, 104) AS TranDate, FactoryCode
FROM            dbo.tbl_Production_View
WHERE       (TranDate BETWEEN CONVERT(DATETIME, '$last7day 00:00:00', 102) AND CONVERT(DATETIME, '$lastday 00:00:00', 102))
GROUP BY CONVERT(varchar, TranDate, 104), FactoryCode
ORDER BY TranDate");
        return $result = $query->result_array();
    }
    public function getmonthly()
    {
        $lastday = date('Y-m-d', strtotime('-1 days'));
        $last7day = date('Y-m-d', strtotime('-30 days'));
        $query = $this->db->query("SELECT        SUM(Checked) AS TotalChecked, SUM(Pass) AS pass, SUM(Fail) AS Fail, CONVERT(varchar, TranDate, 104) AS TranDate, FactoryCode
FROM            dbo.tbl_Production_View
WHERE       (TranDate BETWEEN CONVERT(DATETIME, '$last7day 00:00:00', 102) AND CONVERT(DATETIME, '$lastday 00:00:00', 102))
GROUP BY CONVERT(varchar, TranDate, 104), FactoryCode
ORDER BY TranDate");
        return $result = $query->result_array();
    }
    public function getYear()
    {
        $Year = date('Y');
       
        $query = $this->db->query("SELECT        TOP (100) PERCENT SUM(Checked) AS TotalChecked, SUM(Pass) AS pass, SUM(Fail) AS Fail, FactoryCode, YEAR(TranDate) AS Year, MONTH(TranDate) AS Month
FROM            dbo.tbl_Production_View
GROUP BY FactoryCode, YEAR(TranDate), MONTH(TranDate)
HAVING        (YEAR(TranDate) = 2021)");
        return $result = $query->result_array();
    }
    public function weekDates(){
        $lastday = date('Y-m-d', strtotime('-1 days'));
        $last7day = date('Y-m-d', strtotime('-7 days'));
       
        $query = $this->db->query("SELECT        TOP (100) PERCENT CONVERT(varchar, TranDate, 104) AS TranDate
FROM            dbo.tbl_Production_View
WHERE       (TranDate BETWEEN CONVERT(DATETIME, '$last7day 00:00:00', 102) AND CONVERT(DATETIME, '$lastday 00:00:00', 102))
GROUP BY CONVERT(varchar, TranDate, 104)
ORDER BY TranDate");
        return $result = $query->result_array();
    }
    

    public function monthlydate()
    {
        $lastday = date('Y-m-d', strtotime('-1 days'));
        $last7day = date('Y-m-d', strtotime('-30 days'));
        $query = $this->db->query("SELECT        TOP (100) PERCENT CONVERT(varchar, TranDate, 104) AS TranDate
FROM            dbo.tbl_Production_View
WHERE        (TranDate BETWEEN CONVERT(DATETIME, '$last7day 00:00:00', 102) AND CONVERT(DATETIME, '$lastday 00:00:00', 102))
GROUP BY CONVERT(varchar, TranDate, 104)
ORDER BY TranDate");
        return $result = $query->result_array();
    }
    Public function Year(){
        
        $query = $this->db->query("SELECT        TOP (100) PERCENT YEAR(TranDate) AS Year, MONTH(TranDate) AS Month
FROM            dbo.tbl_Production_View
WHERE        (YEAR(TranDate) = 2021)
GROUP BY MONTH(TranDate), YEAR(TranDate)
ORDER BY Month");
        return $result = $query->result_array();
    }
}
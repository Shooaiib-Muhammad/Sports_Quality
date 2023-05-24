<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DW_Model extends CI_Model
{


     public function getlinedata($FC, $Sdate, $Edate, $Process)
     {


          $SYear = substr($Sdate, 0, 4);
          $SMonth = substr($Sdate, 5, 2);
          $SDay = substr($Sdate, -2, 2);
          $Startdate = $SYear . '-' . $SMonth . '-' . $SDay;
          $EYear = substr($Edate, 0, 4);
          $EMonth = substr($Edate, 5, 2);
          $EDay = substr($Edate, -2, 2);
          $Enddate = $EYear . '-' . $EMonth . '-' . $EDay;
          $FC = $FC;

          $Process = $Process;

          if ($Process == 22) { // Date Wise



               $query = $this->db->query("SELECT        SUM(dbo.tbl_TM_Final_QC.Pass) AS PassQty, CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103) AS Dateee, MONTH(dbo.tbl_Inv_Tran_Date.DateName) 
                         AS Month
FROM            dbo.tbl_Inv_Tran_Date INNER JOIN
                         dbo.tbl_TM_Final_QC ON dbo.tbl_Inv_Tran_Date.DayNo = dbo.tbl_TM_Final_QC.DayNo
WHERE        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$Startdate 00:00:00', 102) AND CONVERT(DATETIME, '$Enddate 00:00:00', 102))
GROUP BY CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103), MONTH(dbo.tbl_Inv_Tran_Date.DateName)");
               return $result = $query->result_array();
          } elseif ($Process == 33) { // Line Wise 
               if ($FC == 2) {
                    $query = $this->db->query("SELECT        TOP (100) PERCENT FactoryCode, SUM(CheckedQty) AS CheckedQty, SUM(PassQty) AS PassQty, SUM(FailQty) AS FailQty, SUM(FCheckedQty) AS FCheckedQty, 
                         SUM(FPassQty) AS FPassQty, SUM(FFailQty) AS FFailQty
FROM            dbo.View_Final_QC_FORMING
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Startdate 00:00:00', 102) AND CONVERT(DATETIME, '$Enddate 00:00:00', 102))
GROUP BY FactoryCode");
                    return $result = $query->result_array();
                    # code...
               } elseif ($FC == 3) {

                    # code...
                    $query = $this->db->query("SELECT        TOP (100) PERCENT dbo.tbl_PC_AMB_Line.LineName, SUM(dbo.View_Union_MS.TotalChecked) AS TotalChecked, SUM(dbo.View_Union_MS.Pass) AS Pass, 
                         SUM(dbo.View_Union_MS.Fail) AS Fail, MAX(dbo.View_Union_MS.PresentWorkers) AS PresentWorkers
FROM            dbo.View_Union_MS INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.View_Union_MS.DayNo = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                         dbo.tbl_PC_AMB_Line ON dbo.View_Union_MS.Line = dbo.tbl_PC_AMB_Line.LineID
WHERE        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$Startdate 00:00:00', 102) AND CONVERT(DATETIME, '$Enddate 00:00:00', 102))
GROUP BY dbo.tbl_PC_AMB_Line.LineName, dbo.View_Union_MS.Line
ORDER BY dbo.View_Union_MS.Line");
                    return $query->result_array();
               } elseif ($FC == 4) {

                    $query = $this->db->query(" SELECT        TOP (100) PERCENT dbo.tbl_PC_AMB_Line.LineName, SUM(dbo.View_union_All_Amb.Checked) AS Checked, SUM(dbo.View_union_All_Amb.Passed) AS Passed, 
                         SUM(dbo.View_union_All_Amb.Strength) AS Strength, SUM(dbo.View_union_All_Amb.SAM) AS SAM, SUM(dbo.View_union_All_Amb.Mints) AS Mints, 
                         SUM(dbo.View_union_All_Amb.pchecked) AS pchecked, SUM(dbo.View_union_All_Amb.Ppassed) AS Ppassed, SUM(dbo.View_union_All_Amb.pFailed) AS pFailed, 
                         SUM(dbo.View_union_All_Amb.PStrength) AS PStrength, SUM(dbo.View_union_All_Amb.PSAm) AS PSAm, SUM(dbo.View_union_All_Amb.PMints) AS PMints, 
                         dbo.View_union_All_Amb.LineID
FROM            dbo.View_union_All_Amb INNER JOIN
                         dbo.tbl_PC_AMB_Line ON dbo.View_union_All_Amb.LineID = dbo.tbl_PC_AMB_Line.LineID
WHERE        (dbo.View_union_All_Amb.DateName BETWEEN CONVERT(DATETIME, '$Startdate 00:00:00', 102) AND CONVERT(DATETIME, '$Enddate 00:00:00', 102))
GROUP BY dbo.View_union_All_Amb.LineID, dbo.tbl_PC_AMB_Line.LineName");
                    return $DateResult = $query->result_array();
               }
          } elseif ($Process == 44) { /// Summary 

               if ($FC == 2) {

                    $query = $this->db->query("SELECT        TOP (100) PERCENT SUM(Inspected) AS Inspected, SUM(PassQty) AS PassQty, SUM(FailQty) AS FailQty, Date, FactoryCode
FROM            dbo.View_Tm_Final_QC_Articles
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Startdate 00:00:00', 102) AND CONVERT(DATETIME, '$Enddate 00:00:00', 102))
GROUP BY Date, FactoryCode
ORDER BY Date");
                    return $result = $query->result_array();
               } elseif ($FC == 3) {

                    $query = $this->db->query("SELECT        TOP (100) PERCENT SUM(dbo.View_Union_MS.TotalChecked) AS Inspected, SUM(dbo.View_Union_MS.Pass) AS PassQty, CONVERT(varchar, dbo.tbl_Inv_Tran_Date.DateName,
                          103) AS Date, SUM(dbo.View_Union_MS.Fail) AS FailQty
FROM            dbo.View_Union_MS INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.View_Union_MS.DayNo = dbo.tbl_Inv_Tran_Date.DayNo
WHERE        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$Startdate 00:00:00', 102) AND CONVERT(DATETIME, '$Enddate 00:00:00', 102))
GROUP BY CONVERT(varchar, dbo.tbl_Inv_Tran_Date.DateName, 103)
");
                    return $result = $query->result_array();
               } elseif ($FC == 4) {

                    $query = $this->db->query("SELECT        TOP (100) PERCENT SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked) AS Inspected, SUM(dbo.tbl_PC_AMB_Hours_Tran.Pass) AS PassQty, CONVERT(Varchar, 
                         dbo.tbl_Inv_Tran_Date.DateName, 103) AS Date, SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked - dbo.tbl_PC_AMB_Hours_Tran.Pass) AS FailQty
FROM            dbo.tbl_PC_AMB_Hours_Tran INNER JOIN
                         
                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_PC_AMB_Hours_Tran.DayID = dbo.tbl_Inv_Tran_Date.DayNo
WHERE        (dbo.tbl_PC_AMB_Hours_Tran.ProcessID = 2) AND (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$Startdate 00:00:00', 102) AND 
                         CONVERT(DATETIME, '$Enddate 00:00:00', 102))
GROUP BY CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103)
");
                    return $result = $query->result_array();
               }
          }
     }

     public function getlineSum($FC, $Sdate, $Edate, $Process)
     {

          $SYear = substr($Sdate, 0, 4);
          $SMonth = substr($Sdate, 5, 2);
          $SDay = substr($Sdate, -2, 2);
          $Startdate = $SYear . '-' . $SMonth . '-' . $SDay;
          $EYear = substr($Edate, 0, 4);
          $EMonth = substr($Edate, 5, 2);
          $EDay = substr($Edate, -2, 2);
          $Enddate = $EYear . '-' . $EMonth . '-' . $EDay;
          $FC = $FC;

          $Process = $Process;
          if ($Process == 33) { // Line Wise

               if ($FC == 2) { ///TM



                    $query = $this->db->query("SELECT        TOP (100) PERCENT SUM(CheckedQty) AS CheckedQty, SUM(PassQty) AS PassQty, SUM(FCheckedQty) AS FCheckedQty, SUM(FPassQty) AS FPassQty
FROM            dbo.View_Final_QC_FORMING
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Startdate 00:00:00', 102) AND CONVERT(DATETIME, '$Enddate 00:00:00', 102))");
                    return $result = $query->result_array();
               } elseif ($FC == 3) { //MS

                    $query = $this->db->query("SELECT        TOP (100) PERCENT SUM(dbo.View_Union_MS.TotalChecked) AS TotalChecked, SUM(dbo.View_Union_MS.Pass) AS Pass, SUM(dbo.View_Union_MS.Fail) AS Fail
FROM            dbo.View_Union_MS INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.View_Union_MS.DayNo = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                         dbo.tbl_PC_AMB_Line ON dbo.View_Union_MS.Line = dbo.tbl_PC_AMB_Line.LineID
WHERE        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$Startdate 00:00:00', 102) AND CONVERT(DATETIME, '$Enddate 00:00:00', 102))");
                    return $result = $query->result_array();
               } elseif ($FC == 4) { // AMb

                    $query = $this->db->query("SELECT        TOP (100) PERCENT SUM(dbo.View_union_All_Amb.Checked) AS Checked, SUM(dbo.View_union_All_Amb.Passed) AS Passed, 
                         SUM(dbo.View_union_All_Amb.Strength) AS Strength, SUM(dbo.View_union_All_Amb.SAM) AS SAM, SUM(dbo.View_union_All_Amb.Mints) AS Mints, 
                         SUM(dbo.View_union_All_Amb.pchecked) AS pchecked, SUM(dbo.View_union_All_Amb.Ppassed) AS Ppassed, SUM(dbo.View_union_All_Amb.pFailed) AS pFailed, 
                         SUM(dbo.View_union_All_Amb.PStrength) AS PStrength, SUM(dbo.View_union_All_Amb.PSAm) AS PSAm, SUM(dbo.View_union_All_Amb.PMints) AS PMints
FROM            dbo.View_union_All_Amb INNER JOIN
                         dbo.tbl_PC_AMB_Line ON dbo.View_union_All_Amb.LineID = dbo.tbl_PC_AMB_Line.LineID
WHERE        (dbo.View_union_All_Amb.DateName BETWEEN CONVERT(DATETIME, '$Startdate 00:00:00', 102) AND CONVERT(DATETIME, '$Enddate 00:00:00', 102))");
                    return $result = $query->result_array();
               }
          } elseif ($Process == 44) { /// By Summary

               if ($FC == 2) {



                    $query = $this->db->query("SELECT        TOP (100) PERCENT SUM(Inspected) AS Inspected, SUM(PassQty) AS PassQty, SUM(FailQty) AS FailQty
FROM            dbo.View_Tm_Final_QC_Articles
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Startdate 00:00:00', 102) AND CONVERT(DATETIME, '$Enddate 00:00:00', 102))");
                    return $result = $query->result_array();
               } elseif ($FC == 3) {

                    $query = $this->db->query("SELECT        TOP (100) PERCENT SUM(dbo.View_Union_MS.TotalChecked) AS Inspected, SUM(dbo.View_Union_MS.Pass) AS PassQty, SUM(dbo.View_Union_MS.Fail) AS FailQty
FROM            dbo.View_Union_MS INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.View_Union_MS.DayNo = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                         dbo.tbl_PC_AMB_Line ON dbo.View_Union_MS.Line = dbo.tbl_PC_AMB_Line.LineID
WHERE        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$Startdate 00:00:00', 102) AND CONVERT(DATETIME, '$Enddate 00:00:00', 102))");
                    return $result = $query->result_array();
               } elseif ($FC == 4) {

                    $query = $this->db->query("SELECT        TOP (100) PERCENT SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked) AS Inspected, SUM(dbo.tbl_PC_AMB_Hours_Tran.Pass) AS PassQty, 
                         SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked - dbo.tbl_PC_AMB_Hours_Tran.Pass) AS FailQty
FROM            dbo.tbl_PC_AMB_Hours_Tran INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_PC_AMB_Hours_Tran.DayID = dbo.tbl_Inv_Tran_Date.DayNo
WHERE        (dbo.tbl_PC_AMB_Hours_Tran.ProcessID = 2) AND (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$Startdate 00:00:00', 102) AND CONVERT(DATETIME, '$Enddate 00:00:00', 102))");
                    return $result = $query->result_array();
               }
          }
     }



     public function getDTdata($Sdate, $Edate)
     {
          $SYear = substr($Sdate, 0, 4);
          $SMonth = substr($Sdate, 5, 2);
          $SDay = substr($Sdate, -2, 2);
          $StartDate = $SYear . '-' . $SMonth . '-' . $SDay;
          $EYear = substr($Edate, 0, 4);
          $EMonth = substr($Edate, 5, 2);
          $EDay = substr($Edate, -2, 2);
          $EndDate = $EYear . '-' . $EMonth . '-' . $EDay;


          $query = $this->db->query("SELECT        SUM(Mints) AS Mints, LineName, Catagory, Reason, MachineType, MachineNo, CONVERT(Varchar, StartTime, 108) AS StrtTime, CONVERT(Varchar, EndTime, 108) AS EndTime, FromArtCode, ToArtCode, MachineOperator, 
CONVERT(Varchar, DateName, 103) AS Dateee
FROM            dbo.MS_WEB_Downtime
WHERE         (DateName BETWEEN '$StartDate' AND '$EndDate')
GROUP BY LineName, Catagory, Reason, MachineType, MachineNo, CONVERT(Varchar, StartTime, 108), CONVERT(Varchar, EndTime, 108), FromArtCode, ToArtCode, MachineOperator, CONVERT(Varchar, DateName, 103) ORDER BY Dateee");
          return $result = $query->result_array();
     }

     public function Get_Ms_Lines()
     {
          $query = $this->db->query("SELECT        LineID, LineName,MSStatus
     FROM            dbo.tbl_PC_AMB_Line Where (MSStatus =1)");
          return  $result = $query->result_array();
     }

     public function Get_MS_Article()
     {
          $query = $this->db->query("SELECT        TOP (100) PERCENT dbo.tbl_Pro_Article.ClientID, dbo.tbl_Pro_Article.ModelID, dbo.tbl_Pro_Article.ArtID, dbo.tbl_Pro_Article.ArtCode, dbo.tbl_Pro_Article.Target, dbo.tbl_Pro_Article.SAMForming, dbo.tbl_Pro_Article.SAMPacking, 
          dbo.tbl_Pro_Article.TargetPacking, dbo.tbl_Pro_Model.ModelNo, dbo.tbl_Pro_Model.ModelName, dbo.tbl_Pro_Model.FactoryCode, dbo.tbl_Pro_Client.UnitID
FROM            dbo.tbl_Pro_Article INNER JOIN
          dbo.tbl_Pro_Model ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_Model.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_Model.ModelID INNER JOIN
          dbo.tbl_Pro_Client ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_Client.ClientID
WHERE        (dbo.tbl_Pro_Model.FactoryCode = 'B34005') AND (dbo.tbl_Pro_Client.UnitID = 1)
ORDER BY dbo.tbl_Pro_Article.ArtCode");
          return  $result = $query->result_array();
     }
     public function Get_MS_ArticleSize($ArticleCode)
     {

          $query = $this->db->query(" SELECT        dbo.tbl_Pro_Article.ArtCode, dbo.tbl_Pro_Article_D.ArtSize
FROM            dbo.tbl_Pro_Article INNER JOIN
                         dbo.tbl_Pro_Article_D ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_Article_D.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_Article_D.ModelID AND 
                         dbo.tbl_Pro_Article.ArtID = dbo.tbl_Pro_Article_D.ArtID
WHERE        (dbo.tbl_Pro_Article.ArtCode = '$ArticleCode') ");
          return  $result = $query->result_array();
     }

     public function getdata($Reports, $Sdate, $Edate, $ArtSize, $ArtCode, $byEline, $bySLine)
     {
          $Reportsselection = $Reports;
          $SYear = substr($Sdate, 0, 4);
          $SMonth = substr($Sdate, 5, 2);
          $SDay = substr($Sdate, -2, 2);
          $StartDate = $SYear . '-' . $SMonth . '-' . $SDay;
          $EYear = substr($Edate, 0, 4);
          $EMonth = substr($Edate, 5, 2);
          $EDay = substr($Edate, -2, 2);
          $EndDate = $EYear . '-' . $EMonth . '-' . $EDay;
          if ($Reportsselection == 1) { ////
               $query = $this->db->query("SELECT        ArtCode, ArtSize, SUM(OpeningQty) AS OpeningQty, SUM(FreshIssue) AS FreshIssue, SUM(RepairReturn) AS RepairReturn,
               SUM(Pass) AS Pass, SUM(TotalChecked) AS TotalChecked, AVG(SAMValue) AS SAMValue, MAX(PresentWorkers) AS PresentWorkers, 
              SUM(OtherDowntime) AS OtherDowntime, SUM(BGradeBall) AS BGradeBall, SUM(CGradeBall) AS CGradeBall, SUM(Defects) AS DEFECTS
            FROM            dbo.View_MS_All_ArticleWise_WEb
            WHERE        (DateName BETWEEN CONVERT(DATETIME, '$StartDate 00:00:00', 102) AND CONVERT(DATETIME, '$EndDate 00:00:00', 102))
            GROUP BY ArtCode, ArtSize");
               return  $result = $query->result_array();
          } elseif ($Reportsselection == 2) {
               $query = $this->db->query("SELECT        TOP (100) PERCENT TranDate, TranID, ArtCode,ArtSize,  LineName, InQty, OutPut,
               SUM(InQty- OutPut) OVER (ORDER BY trandate ROWS UNBOUNDED PRECEDING) + ISNULL
              ((SELECT        SUM(OpeningQty) AS Expr1
              FROM            dbo.View_MS_All_ArticleWise_WEb
              WHERE        (ArtCode = '$ArtCode') AND (ArtSize = '$ArtSize') And (DateName = CONVERT(DATETIME, '$StartDate 00:00:00', 102))), 0) + 0 AS Total 
              FROM            dbo.View_MS_legder
              WHERE        (trandate BETWEEN CONVERT(DATETIME, '$StartDate 00:00:00', 102) 
              AND CONVERT(DATETIME, '$EndDate 00:00:00', 102)) and ArtCode ='$ArtCode' and ArtSize='$ArtSize' 
              ORDER BY trandate");
               return  $result = $query->result_array();
          } elseif ($Reportsselection == 3) {
               return 'by lines';
          } elseif ($Reportsselection == 4) {
               return 'By Article';
          }
     }
     public function Efficiency($Sdate, $Edate)
     {
          $SYear = substr($Sdate, 0, 4);
          $SMonth = substr($Sdate, 5, 2);
          $SDay = substr($Sdate, -2, 2);
          $StartDate = $SYear . '-' . $SMonth . '-' . $SDay;
          $EYear = substr($Edate, 0, 4);
          $EMonth = substr($Edate, 5, 2);
          $EDay = substr($Edate, -2, 2);
          $EndDate = $EYear . '-' . $EMonth . '-' . $EDay;
          $query = $this->db->query("SELECT        SUM(WorkingTime) AS WorkingTime
          FROM            dbo.View_MS_Time
          WHERE        (dbo.View_MS_Time.DateName 
          BETWEEN CONVERT(DATETIME, '$StartDate 00:00:00', 102) AND CONVERT(DATETIME, '$EndDate 00:00:00', 102)) AND (Line = 3)");
          return  $result = $query->result_array();
     }
     public function get_Article_ledger($Sdate, $Edate, $ArtCode, $ArtSize)
     {
          $SYear = substr($Sdate, 0, 4);
          $SMonth = substr($Sdate, 5, 2);
          $SDay = substr($Sdate, -2, 2);
          $StartDate = $SYear . '-' . $SMonth . '-' . $SDay;
          $EYear = substr($Edate, 0, 4);
          $EMonth = substr($Edate, 5, 2);
          $EDay = substr($Edate, -2, 2);
          $EndDate = $EYear . '-' . $EMonth . '-' . $EDay;
          $query = $this->db->query("SELECT        TOP (100) PERCENT TranDate, TranID, ArtCode,ArtSize,  LineName, InQty, OutPut,CONVERT(varchar, TranDate, 103) AS Date,
          SUM(InQty- OutPut) OVER (ORDER BY trandate ROWS UNBOUNDED PRECEDING) + ISNULL
         ((SELECT       SUM(OpeningQty) AS Expr1
         FROM            dbo.View_MS_All_ArticleWise_WEb
         WHERE        (ArtCode = '$ArtCode') AND (ArtSize = '$ArtSize') And (DateName = CONVERT(DATETIME, '$StartDate 00:00:00', 102))), 0) + 0 AS Total 
         FROM            dbo.View_MS_legder
         WHERE        (trandate BETWEEN CONVERT(DATETIME, '$StartDate 00:00:00', 102) 
         AND CONVERT(DATETIME, '$EndDate 00:00:00', 102)) and ArtCode ='$ArtCode' and ArtSize='$ArtSize' 
         ORDER BY trandate");

          return  $result = $query->result_array();
     }


     public function MS_Lines($bySLine, $byEline)
     {
          $query = $this->db->query("SELECT        LineID, LineName,MSStatus
FROM            dbo.tbl_PC_AMB_Line Where (dbo.tbl_PC_AMB_Line.LineID BETWEEN 
$bySLine AND $byEline)");
          return  $result = $query->result_array();
     }
     public function MS_linewiseData($Lineid, $Sdate, $Edate)
     {
          $SYear = substr($Sdate, 0, 4);
          $SMonth = substr($Sdate, 5, 2);
          $SDay = substr($Sdate, -2, 2);
          $StartDate = $SYear . '-' . $SMonth . '-' . $SDay;
          $EYear = substr($Edate, 0, 4);
          $EMonth = substr($Edate, 5, 2);
          $EDay = substr($Edate, -2, 2);
          $EndDate = $EYear . '-' . $EMonth . '-' . $EDay;

          $query = $this->db->query("SELECT        TOP (100) PERCENT dbo.tbl_PC_AMB_Line.LineName, dbo.View_MS_All_ArticleWise_WEb.ArtCode, dbo.View_MS_All_ArticleWise_WEb.ArtSize, SUM(dbo.View_MS_All_ArticleWise_WEb.OpeningQty) AS OpeningQty, 
          SUM(dbo.View_MS_All_ArticleWise_WEb.FreshIssue) AS FreshIssue, SUM(dbo.View_MS_All_ArticleWise_WEb.RepairReturn) AS RepairReturn, SUM(dbo.View_MS_All_ArticleWise_WEb.Pass) AS Pass, 
          SUM(dbo.View_MS_All_ArticleWise_WEb.TotalChecked) AS TotalChecked, AVG(dbo.View_MS_All_ArticleWise_WEb.SAMValue) AS SAMValue, MAX(dbo.View_MS_All_ArticleWise_WEb.PresentWorkers) AS PresentWorkers, 
          SUM(dbo.View_MS_All_ArticleWise_WEb.OtherDowntime) AS OtherDowntime, SUM(dbo.View_MS_All_ArticleWise_WEb.BGradeBall) AS BGradeBall, SUM(dbo.View_MS_All_ArticleWise_WEb.CGradeBall) AS CGradeBall, 
          SUM(dbo.View_MS_All_ArticleWise_WEb.Defects) AS DEFECTS, dbo.tbl_PC_AMB_Line.LineID
FROM            dbo.View_MS_All_ArticleWise_WEb INNER JOIN
          dbo.tbl_PC_AMB_Line ON dbo.View_MS_All_ArticleWise_WEb.Line = dbo.tbl_PC_AMB_Line.LineID
WHERE        (dbo.View_MS_All_ArticleWise_WEb.DateName BETWEEN CONVERT(DATETIME, '$StartDate 00:00:00', 102) 
AND CONVERT(DATETIME, '$EndDate 00:00:00', 102)) AND (dbo.View_MS_All_ArticleWise_WEb.Line = $Lineid)
GROUP BY dbo.View_MS_All_ArticleWise_WEb.ArtCode, dbo.View_MS_All_ArticleWise_WEb.ArtSize, dbo.tbl_PC_AMB_Line.LineName, dbo.View_MS_All_ArticleWise_WEb.Line, dbo.tbl_PC_AMB_Line.LineID
ORDER BY dbo.View_MS_All_ArticleWise_WEb.Line");
          return  $result = $query->result_array();
     }

     public function MS_Lines_sum($Lineid, $Sdate, $Edate)
     {
          $SYear = substr($Sdate, 0, 4);
          $SMonth = substr($Sdate, 5, 2);
          $SDay = substr($Sdate, -2, 2);
          $StartDate = $SYear . '-' . $SMonth . '-' . $SDay;
          $EYear = substr($Edate, 0, 4);
          $EMonth = substr($Edate, 5, 2);
          $EDay = substr($Edate, -2, 2);
          $EndDate = $EYear . '-' . $EMonth . '-' . $EDay;
          $query = $this->db->query("SELECT        TOP (100) PERCENT dbo.tbl_PC_AMB_Line.LineName, SUM(dbo.View_MS_All_ArticleWise_WEb.OpeningQty) AS OpeningQty, SUM(dbo.View_MS_All_ArticleWise_WEb.FreshIssue) AS FreshIssue, 
SUM(dbo.View_MS_All_ArticleWise_WEb.RepairReturn) AS RepairReturn, SUM(dbo.View_MS_All_ArticleWise_WEb.Pass) AS Pass, SUM(dbo.View_MS_All_ArticleWise_WEb.TotalChecked) AS TotalChecked, 
AVG(dbo.View_MS_All_ArticleWise_WEb.SAMValue) AS SAMValue, MAX(dbo.View_MS_All_ArticleWise_WEb.PresentWorkers) AS PresentWorkers, SUM(dbo.View_MS_All_ArticleWise_WEb.OtherDowntime) AS OtherDowntime, 
SUM(dbo.View_MS_All_ArticleWise_WEb.BGradeBall) AS BGradeBall, SUM(dbo.View_MS_All_ArticleWise_WEb.CGradeBall) AS CGradeBall, SUM(dbo.View_MS_All_ArticleWise_WEb.Defects) AS DEFECTS
FROM            dbo.View_MS_All_ArticleWise_WEb INNER JOIN
dbo.tbl_PC_AMB_Line ON dbo.View_MS_All_ArticleWise_WEb.Line = dbo.tbl_PC_AMB_Line.LineID
WHERE        (dbo.View_MS_All_ArticleWise_WEb.DateName BETWEEN CONVERT(DATETIME, '$StartDate 00:00:00', 102)
AND CONVERT(DATETIME, '$EndDate 00:00:00', 102)) AND (dbo.View_MS_All_ArticleWise_WEb.Line =  $Lineid)
GROUP BY dbo.tbl_PC_AMB_Line.LineName, dbo.View_MS_All_ArticleWise_WEb.Line
ORDER BY dbo.View_MS_All_ArticleWise_WEb.Line");
          return  $result = $query->result_array();
     }
     public function MS_Lines_and_Article($bySLine, $byEline, $Sdate, $Edate, $ArtCode, $ArtSize)
     {
          $SYear = substr($Sdate, 0, 4);
          $SMonth = substr($Sdate, 5, 2);
          $SDay = substr($Sdate, -2, 2);
          $StartDate = $SYear . '-' . $SMonth . '-' . $SDay;
          $EYear = substr($Edate, 0, 4);
          $EMonth = substr($Edate, 5, 2);
          $EDay = substr($Edate, -2, 2);
          $EndDate = $EYear . '-' . $EMonth . '-' . $EDay;
          $query = $this->db->query("SELECT        TOP (100) PERCENT dbo.tbl_PC_AMB_Line.LineName, dbo.View_MS_All_ArticleWise_WEb.ArtCode, dbo.View_MS_All_ArticleWise_WEb.ArtSize, SUM(dbo.View_MS_All_ArticleWise_WEb.OpeningQty) AS OpeningQty, 
          SUM(dbo.View_MS_All_ArticleWise_WEb.FreshIssue) AS FreshIssue, SUM(dbo.View_MS_All_ArticleWise_WEb.RepairReturn) AS RepairReturn, SUM(dbo.View_MS_All_ArticleWise_WEb.Pass) AS Pass, 
          SUM(dbo.View_MS_All_ArticleWise_WEb.TotalChecked) AS TotalChecked, AVG(dbo.View_MS_All_ArticleWise_WEb.SAMValue) AS SAMValue, MAX(dbo.View_MS_All_ArticleWise_WEb.PresentWorkers) AS PresentWorkers, 
          SUM(dbo.View_MS_All_ArticleWise_WEb.OtherDowntime) AS OtherDowntime, SUM(dbo.View_MS_All_ArticleWise_WEb.BGradeBall) AS BGradeBall, SUM(dbo.View_MS_All_ArticleWise_WEb.CGradeBall) AS CGradeBall, 
          SUM(dbo.View_MS_All_ArticleWise_WEb.Defects) AS DEFECTS, dbo.tbl_PC_AMB_Line.LineID
          FROM            dbo.View_MS_All_ArticleWise_WEb INNER JOIN
          dbo.tbl_PC_AMB_Line ON dbo.View_MS_All_ArticleWise_WEb.Line = dbo.tbl_PC_AMB_Line.LineID
          WHERE        (dbo.View_MS_All_ArticleWise_WEb.DateName BETWEEN CONVERT(DATETIME, '$StartDate 00:00:00', 102) AND CONVERT(DATETIME, '$EndDate 00:00:00', 102))
          GROUP BY dbo.View_MS_All_ArticleWise_WEb.ArtCode, dbo.View_MS_All_ArticleWise_WEb.ArtSize, dbo.tbl_PC_AMB_Line.LineName, dbo.tbl_PC_AMB_Line.LineID
          HAVING        (dbo.tbl_PC_AMB_Line.LineID BETWEEN $bySLine AND $byEline) 
          AND (dbo.View_MS_All_ArticleWise_WEb.ArtCode = '$ArtCode')
          AND (dbo.View_MS_All_ArticleWise_WEb.ArtSize = '$ArtSize')
          ORDER BY dbo.tbl_PC_AMB_Line.LineID");
          return  $result = $query->result_array();
     }
     public function Get_Article_Wise_Defects($Day, $Month, $Year)
     {


          $query = $this->db->query("SELECT        TOP (100) PERCENT ArtCode, SUM(PanelDMG) AS PanelDMG, SUM(OverLap) AS OverLap, SUM(Wrinkle) AS Wrinkle, SUM(ZigZagSeam) AS ZigZagSeam, SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, 
SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching, SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(ColorMArk) AS ColorMArk, 
SUM(StraightCut) AS StraightCut, SUM(GLueDirts) AS GLueDirts, SUM(DisColor) AS DisColor, SUM(LogoDoubling) AS LogoDoubling, SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots, SUM(Smearing) 
AS Smearing, SUM(MissAlligment) AS MissAlligment, SUM(BlurPrinting) AS BlurPrinting, SUM(HFMissAlignment) AS HFMissAlignment, SUM(RoundCorner) AS RoundCorner, SUM(CornerOut) AS CornerOut, SUM(coveringDefects) 
AS coveringDefects, SUM(Burning) AS Burning
FROM            dbo.View_Amb_DayWise_Article_Wise
WHERE        (DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
GROUP BY ArtCode");
          return  $result = $query->result_array();
     }
     public function getStoredata($Sdate, $Edate){
        
          $SYear = substr($Sdate, 0, 4);
          $SMonth = substr($Sdate, 5, 2);
          $SDay = substr($Sdate, -2, 2);
          $StartDate = $SYear . '-' . $SMonth . '-' . $SDay;
          $EYear = substr($Edate, 0, 4);
          $EMonth = substr($Edate, 5, 2);
          $EDay = substr($Edate, -2, 2);
          $EndDate = $EYear . '-' . $EMonth . '-' . $EDay;

          $query = $this->db->query("SELECT        SuplierID, LotNo, lengthOntage, lengthactual, widthOntage, widthactual, Def1, Def2, Def3, Def4, Def11, Def21, Def31, Def41, Def12, Def22, Def32, Def42, Def13, Def23, Def33, Def43, Hole1, Hole2, Name, Name2, Name3, Name4, 
          TID, Date, SupplierName, fabric, Color, CONVERT(varchar, Date, 103) AS Datee
FROM            dbo.view_store_transaction
WHERE       (Date BETWEEN '$StartDate' AND '$EndDate')");

          return  $result = $query->result_array();

     }
     
     public function getLFBdata($Sdate, $Edate)
     {
          $SYear = substr($Sdate, 0, 4);
          $SMonth = substr($Sdate, 5, 2);
          $SDay = substr($Sdate, -2, 2);
          $StartDate = $SYear . '-' . $SMonth . '-' . $SDay;
          $EYear = substr($Edate, 0, 4);
          $EMonth = substr($Edate, 5, 2);
          $EDay = substr($Edate, -2, 2);
          $EndDate = $EYear . '-' . $EMonth . '-' . $EDay;

          
          $query = $this->db->query("SELECT        TOP (100) PERCENT DateName, MPID, ArtSIze, ArtCode, TotalChecked, TotalPass, Fail, SeamDefect, MaterialDefect, SeamOverlaping, Wrinkles, ExcessGlue, PressureMarks, AirBubble, HeavyPrintDefect, TouchingPeelingOff, 
          PrintMisalignment, WrongeArtwork, MoldMark, ColourShade, ValveNozzleMove, Oversize, UnderSize, OverWeight, UnderWeight, factoryCode, DShape, MissGlue, Hour, HourName, HourID, CONVERT(Varchar, DateName, 103) 
          AS Datee, DayNo
FROM            dbo.View_TM_LFB_FInalQC_Final
          WHERE        (DateName BETWEEN CONVERT(DATETIME, ' $StartDate 00:00:00', 102) AND CONVERT(DATETIME, '$EndDate 00:00:00', 102))
          ORDER BY DayNo, HourID");
          return $result = $query->result_array();
     }
     public function getLFBdataSum($Sdate, $Edate)
     {
          $SYear = substr($Sdate, 0, 4);
          $SMonth = substr($Sdate, 5, 2);
          $SDay = substr($Sdate, -2, 2);
          $StartDate = $SYear . '-' . $SMonth . '-' . $SDay;
          $EYear = substr($Edate, 0, 4);
          $EMonth = substr($Edate, 5, 2);
          $EDay = substr($Edate, -2, 2);
          $EndDate = $EYear . '-' . $EMonth . '-' . $EDay;

          
          $query = $this->db->query("SELECT        TOP (100) PERCENT SUM(TotalChecked) AS TotalChecked, SUM(TotalPass) AS TotalPass, SUM(Fail) AS Fail, SUM(SeamDefect) AS SeamDefect, SUM(MaterialDefect) AS MaterialDefect, SUM(SeamOverlaping) 
          AS SeamOverlaping, SUM(Wrinkles) AS Wrinkles, SUM(ExcessGlue) AS ExcessGlue, SUM(PressureMarks) AS PressureMarks, SUM(AirBubble) AS AirBubble, SUM(HeavyPrintDefect) AS HeavyPrintDefect, 
          SUM(TouchingPeelingOff) AS TouchingPeelingOff, SUM(PrintMisalignment) AS PrintMisalignment, SUM(WrongeArtwork) AS WrongeArtwork, SUM(MoldMark) AS MoldMark, SUM(ColourShade) AS ColourShade, 
          SUM(ValveNozzleMove) AS ValveNozzleMove, SUM(Oversize) AS Oversize, SUM(UnderSize) AS UnderSize, SUM(OverWeight) AS OverWeight, SUM(UnderWeight) AS UnderWeight, SUM(DShape) AS DShape, SUM(MissGlue) 
          AS MissGlue
FROM            dbo.View_TM_LFB_FInalQC_Final
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$StartDate 00:00:00', 102) AND CONVERT(DATETIME, '$EndDate 00:00:00', 102))");
          return $result = $query->result_array();
     }
    
     public function getMPwiseData()
     {
          $query = $this->db->query("SELECT        view_TM_Cutting_Printing_MPNo_wise_PO_details.*
FROM            dbo.view_TM_Cutting_Printing_MPNo_wise_PO_details ");
          return  $result = $query->result_array();
     }
     public function bladderDateRange($startDate, $endDate)
     {
          $query = $this->db->query("SELECT        CompanyName, BladderTpye, Size, TotalChecked, Pass, Fail, JointFault, NozzleFault, BodyFault, WeightFault, SizeFault, DateName
          FROM            dbo.View_QC_Bladders_Qty_Sum
          WHERE        (DateName BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))");
          return  $query->result_array();
     }
}

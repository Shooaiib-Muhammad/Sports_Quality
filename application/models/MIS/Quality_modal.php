<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Quality_Modal extends CI_Model
{

    public function Get001Fail($Date1, $Date2, $FactoryCode1)
    {

        $query = $this->db->query("SELECT        TOP (100) PERCENT MonthName, SUM(Fail) AS Fail, Year
FROM            dbo.View_HS_FailQty
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102))
GROUP BY MonthName, Month, Year
ORDER BY Month");
        return $query->result_array();
    }

    public function Get002Fail($Date1, $Date2, $FactoryCode2)
    {

        $query = $this->db->query("SELECT        TOP (100) PERCENT MonthName, Year, SUM(Fail) AS Fail
FROM            dbo.View_FailQty_TM_Final
WHERE        (FactoryCode = 'B34002') AND (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102))
GROUP BY MonthName, Year, MONTH(DateName)
ORDER BY MONTH(DateName)");
        return $query->result_array();
    }
    public function Get003Fail($Date1, $Date2, $FactoryCode3)
    {

        $query = $this->db->query("SELECT TOP (100) PERCENT MonthName, Year, SUM(Fail) AS Fail
FROM            dbo.View_FailQty_TM_Final
WHERE        (FactoryCode = 'B34003') AND (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102))
GROUP BY MonthName, Year, MONTH(DateName)
ORDER BY MONTH(DateName)");
        return $query->result_array();
    }
    public function Get004Fail($Date1, $Date2, $FactoryCode4)
    {

        $query = $this->db->query("SELECT        TOP (100) PERCENT MonthName, Year, SUM(Fail) AS Fail
FROM            dbo.View_FailQty_TM_Final
WHERE        (FactoryCode = 'B34004') AND (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102))
GROUP BY MonthName, Year, MONTH(DateName)
ORDER BY MONTH(DateName)");
        return $query->result_array();
    }
    public function Get005Fail($Date1, $Date2, $FactoryCode5)
    {

        $query = $this->db->query("SELECT        TOP (100) PERCENT SUM(Fail) AS Fail, Year, MonthName
FROM            dbo.View_MS_Fail_Qty
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102))
GROUP BY Year, MonthName, MONTH(DateName)
ORDER BY MONTH(DateName)");
        return $query->result_array();
    }
    public function Get006Fail($Date1, $Date2, $FactoryCode6)
    {

        $query = $this->db->query("SELECT        TOP (100) PERCENT Year, MonthName, SUM(Fail) AS Fail
FROM            dbo.View_AMB_Fail
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102))
GROUP BY Year, MonthName, Month
ORDER BY Month");
        return $query->result_array();
    }

    public function Get001FailSum($Date1, $Date2)
    {

        $query = $this->db->query("SELECT        SUM(OutPut) AS OutPut, SUM(Fail) AS Fail
FROM            dbo.View_Final_prd
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102)) AND (LineName = 'Hand Stitch Ball')");
        return $query->result_array();
    }

    public function Get002FailSum($Date1, $Date2)
    {

        $query = $this->db->query("SELECT        SUM(dbo.View_TM_FailQty.FailQty) AS Fail, SUM(dbo.View_TM_FailQty.PassQty) AS PassQty
FROM            dbo.View_TM_FailQty INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.View_TM_FailQty.DayNo = dbo.tbl_Inv_Tran_Date.DayNo
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102)) AND
                         (dbo.View_TM_FailQty.FactoryCode = 'B34002')");
        return $query->result_array();
    }
    public function Get003FailSum($Date1, $Date2)
    {

        $query = $this->db->query("SELECT        SUM(dbo.View_TM_FailQty.FailQty) AS Fail, SUM(dbo.View_TM_FailQty.PassQty) AS PassQty
FROM            dbo.View_TM_FailQty INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.View_TM_FailQty.DayNo = dbo.tbl_Inv_Tran_Date.DayNo
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102)) AND
                         (dbo.View_TM_FailQty.FactoryCode = 'B34003')");
        return $query->result_array();
    }
    public function Get004FailSum($Date1, $Date2)
    {

        $query = $this->db->query("SELECT        SUM(dbo.View_TM_FailQty.FailQty) AS Fail, SUM(dbo.View_TM_FailQty.PassQty) AS PassQty
FROM            dbo.View_TM_FailQty INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.View_TM_FailQty.DayNo = dbo.tbl_Inv_Tran_Date.DayNo
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102)) AND
                         (dbo.View_TM_FailQty.FactoryCode = 'B34004')");
        return $query->result_array();
    }
    public function Get005FailSum($Date1, $Date2)
    {

        $query = $this->db->query("SELECT        SUM(OutPut) AS OutPut, SUM(Fail) AS Fail
FROM            dbo.View_Final_prd
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102)) AND (LineName = 'Machine Stitch Ball')");
        return $query->result_array();
    }
    public function Get006FailSum($Date1, $Date2)
    {

        $query = $this->db->query("SELECT        SUM(OutPut) AS OutPut, SUM(Fail) AS Fail
FROM            dbo.View_Final_prd
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102)) AND (LineName = 'Airless Mini Ball')");
        return $query->result_array();
    }

    public function GetB34001Fail($Date1, $Date2, $Process)
    {
        if ($Process == 'B34001') {
            $query = $this->db->query("SELECT        TOP (100) PERCENT MonthName, SUM(Fail) AS Fail, Year
                    FROM            dbo.View_HS_FailQty
                    WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102))
                    GROUP BY MonthName, Month, Year
                    ORDER BY Month");
            return $query->result_array();
        } elseif ($Process == 'B34002') {
            $query = $this->db->query("SELECT        TOP (100) PERCENT MonthName, Year, SUM(Fail) AS Fail
                    FROM            dbo.View_FailQty_TM_Final
                    WHERE        (FactoryCode = 'B34002') AND (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102))
                    GROUP BY MonthName, Year, MONTH(DateName)
                    ORDER BY MONTH(DateName)");
            return $query->result_array();
        } elseif ($Process == 'B34003') {
            $query = $this->db->query("SELECT        TOP (100) PERCENT MonthName, Year, SUM(Fail) AS Fail
                    FROM            dbo.View_FailQty_TM_Final
                    WHERE        (FactoryCode = 'B34003') AND (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102))
                    GROUP BY MonthName, Year, MONTH(DateName)
                    ORDER BY MONTH(DateName)");
            return $query->result_array();
            # code...
        } elseif ($Process == 'B34004') {
            $query = $this->db->query("SELECT        TOP (100) PERCENT MonthName, Year, SUM(Fail) AS Fail
                    FROM            dbo.View_FailQty_TM_Final
                    WHERE        (FactoryCode = 'B34004') AND (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102))
                    GROUP BY MonthName, Year, MONTH(DateName)
                    ORDER BY MONTH(DateName)");
            return $query->result_array();
        } elseif ($Process == 'B34005') {

            $query = $this->db->query("SELECT        TOP (100) PERCENT SUM(Fail) AS Fail, Year, MonthName
                    FROM            dbo.View_MS_Fail_Qty
                    WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102))
                    GROUP BY Year, MonthName, MONTH(DateName)
                    ORDER BY MONTH(DateName)");
            return $query->result_array();
        } elseif ($Process == 'B34006') {

            $query = $this->db->query("SELECT        TOP (100) PERCENT Year, MonthName, SUM(Fail) AS Fail
                    FROM            dbo.View_AMB_Fail
                    WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102))
                    GROUP BY Year, MonthName, Month
                    ORDER BY Month");
            return $query->result_array();
        }
    }

    public function AllPassQty($year)
    {

        $query = $this->db->query("SELECT TOP (100) PERCENT SUM(Pass) AS Pass
     FROM            dbo.View_Prd_Production_Trends
     WHERE        (Year = $year)");
        return $query->result_array();
    }

    public function rpt_amb_detail($start_date, $end_date, $processID)
    {
        return $this->db->select('SUM(dbo.tbl_PC_AMB_Hours_Tran.PanelDMG) AS PanelDMG, SUM(dbo.tbl_PC_AMB_Hours_Tran.OverLap) AS OverLap,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.ZigZagSeam) AS ZigZagSeam, SUM(dbo.tbl_PC_AMB_Hours_Tran.Wrinkle) AS Wrinkle,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.ArtWork) AS ArtWork, SUM(dbo.tbl_PC_AMB_Hours_Tran.UnbondedPanels) AS UnbondedPanels,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.UncureGlue) AS SingleOpenStrip, SUM(dbo.tbl_PC_AMB_Hours_Tran.OpenSeam) AS OpenSeam,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.PanelCavity) AS PanelCavity, SUM(dbo.tbl_PC_AMB_Hours_Tran.Touching) AS Touching,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.OtherPrintingIssue) AS OtherPrintingIssue, SUM(dbo.tbl_PC_AMB_Hours_Tran.CoreCavity) AS CoreCavity,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.PUC) AS PUC, SUM(dbo.tbl_PC_AMB_Hours_Tran.SeamClosingGlue) AS SeamClosingGlue,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.Rejection) AS Rejection,  SUM(ISNULL(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked, 0) + ISNULL(dbo.tbl_PC_AMB_Hours_Tran.RCheck, 0)) AS TotalChecked, SUM(dbo.tbl_PC_AMB_Hours_Tran.StraightCut) AS StraightCut, SUM(dbo.tbl_PC_AMB_Hours_Tran.ConnectionBreak) AS ConnectionBreak,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.BGrade) AS BGrade, Sum(dbo.tbl_PC_AMB_Hours_Tran.DisColor) As DisColor,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.LogoSmearing) As LogoSmearing,  Sum(dbo.tbl_PC_AMB_Hours_Tran.LogoDoubling) As LogoDoubling,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.BarcodeMissing) As BarcodeMissing,Sum(dbo.tbl_PC_AMB_Hours_Tran.LargerSpots) As LargerSpots,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.Smearing) As Smearing,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.unevenBallSurface) As unevenBallSurface,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.unshapecut) As unshapecut,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.zigzagedge) As zigzagedge,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.cuttingpanel) As cuttingpanel,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.heavyprintdefects) As heavyprintdefects,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.NewTouching) As NewTouching,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.printmissallignament) As printmissallignament,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.anymisprint) As anymisprint,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.colourShape) As colourShape,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.wrongartwork) As wrongartwork,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.materialdefects) As materialdefects,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.newopenSeam) As newopenSeam,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.seamoverlapping) As seamoverlapping,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.wrinkles) As wrinkles,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.excussglue) As excussglue,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.missingglue) As missingglue,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.pressoremark) As pressoremark,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.airbubble) As airbubble,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.Dirty) As Dirty,
          dbo.tbl_PC_AMB_Line.LineName,Sum(dbo.tbl_PC_AMB_Hours_Tran.pass) As pass,dbo.tbl_Inv_Tran_Date.DateName')
            ->from('dbo.tbl_PC_AMB_Hours_Tran')
            ->join('dbo.tbl_Inv_Tran_Date', 'dbo.tbl_PC_AMB_Hours_Tran.DayID = dbo.tbl_Inv_Tran_Date.DayNo')
            ->join('dbo.tbl_PC_AMB_Line', 'dbo.tbl_PC_AMB_Hours_Tran.LineID = dbo.tbl_PC_AMB_Line.LineID')
            ->where('dbo.tbl_PC_AMB_Hours_Tran.ProcessID', $processID)
            ->where('dbo.tbl_Inv_Tran_Date.DateName >=', $start_date)
            ->where('dbo.tbl_Inv_Tran_Date.DateName <=', $end_date)
            ->where('dbo.tbl_PC_AMB_Hours_Tran.BallType', 'FreshBall')
            ->group_by('dbo.tbl_PC_AMB_Line.LineName,dbo.tbl_Inv_Tran_Date.DateName')
            ->get()->result();
    }

    public function rpt_amb_detail_Packing($start_date, $end_date)
    {
        return $this->db->select('SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(Fail) AS Fail, SUM(PanelDMG) AS PanelDMG, SUM(OverLap) AS OverLap, SUM(ZigZagSeam) AS ZigZagSeam, SUM(Wrinkle) AS Wrinkle,
        SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(OpenSeam) AS OpenSeam, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching,
        SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(PUC) AS PUC, SUM(SeamClosingGlue) AS SeamClosingGlue, SUM(StraightCut) AS StraightCut, SUM(CuttingResidual) AS CuttingResidual,
        SUM(ConnectionBreak) AS ConnectionBreak, SUM(UncureGlue) AS UncureGlue, SUM(ExcessiveGlue) AS ExcessiveGlue, SUM(Dirty) AS Dirty, SUM(BGrade) AS BGrade, SUM(Rejection) AS Rejection, LineName,
        SUM(DisColor) AS DisColor, SUM(LogoSmearing) AS LogoSmearing, SUM(LogoDoubling) AS LogoDoubling, 
        SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots, SUM(Smearing) AS Smearing,
        SUM(unevenBallSurface) AS unevenBallSurface,
        SUM(unshapecut) AS unshapecut,
        SUM(zigzagedge) AS zigzagedge,
        SUM(cuttingpanel) AS cuttingpanel,
        SUM(heavyprintdefects) AS heavyprintdefects,
        SUM(NewTouching) AS NewTouching,
        SUM(printmissallignament) AS printmissallignament,
        SUM(anymisprint) AS anymisprint,
        SUM(colourShape) AS colourShape,
        SUM(wrongartwork) AS wrongartwork,
        SUM(materialdefects) AS materialdefects,
        SUM(newopenSeam) AS newopenSeam,
        SUM(seamoverlapping) AS seamoverlapping,
        SUM(wrinkles) AS wrinkles,
        SUM(excussglue) AS excussglue,userID,
        SUM(missingglue) AS missingglue,
        SUM(pressoremark) AS pressoremark,
        SUM(airbubble) AS airbubble, SUM(Dirty) AS Dirty, Sum(pass) as pass,DateName')
            ->from('View_AMB_Packing_DAywise_Article')
            ->where('DateName >=', $start_date)
            ->where('DateName <=', $end_date)
            ->where('UserID IS NULL')
            ->group_by('LineName, LineID, DateName,userID')
            ->order_by('DateName, LineID')
            ->get()
            ->result();
    }
    public function rpt_amb_detail_Packing_Station($start_date, $end_date)
    {
        return $this->db->select(" TOP (100) 
        PERCENT CASE WHEN SysIP = '192.168.40.51' THEN 'Station 1' ELSE CASE WHEN SysIP = '192.168.40.52' THEN 'Station 2' ELSE CASE WHEN SysIP = '192.168.40.53' THEN 'Station 3' ELSE CASE WHEN SysIP = '192.168.40.54'
         THEN 'Station 4' ELSE CASE WHEN SysIP = '192.168.40.55' THEN 'Station 5' ELSE CASE WHEN SysIP = '192.168.40.81' THEN 'Repair Line Station' ELSE CASE WHEN SysIP = '192.168.40.88' THEN 'Station 6' ELSE CASE WHEN
         SysIP = '192.168.40.56' THEN 'Station 7' ELSE Sysip END END END END END END END END AS StationName, SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(Fail) AS Fail, SUM(PanelDMG) AS PanelDMG, 
        SUM(OverLap) AS OverLap, SUM(ZigZagSeam) AS ZigZagSeam, SUM(Wrinkle) AS Wrinkle, SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(OpenSeam) 
        AS OpenSeam, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching, SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(PUC) AS PUC, SUM(SeamClosingGlue) 
        AS SeamClosingGlue, SUM(StraightCut) AS StraightCut, SUM(CuttingResidual) AS CuttingResidual, SUM(ConnectionBreak) AS ConnectionBreak, SUM(UncureGlue) AS UncureGlue, SUM(ExcessiveGlue) AS ExcessiveGlue, 
        SUM(Dirty) AS Dirty, SUM(BGrade) AS BGrade, SUM(Rejection) AS Rejection, LineName, SUM(DisColor) AS DisColor, SUM(LogoSmearing) AS LogoSmearing, SUM(LogoDoubling) AS LogoDoubling, SUM(BarcodeMissing) 
        AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots, SUM(Smearing) AS Smearing, SUM(unevenBallSurface) AS unevenBallSurface, SUM(unshapecut) AS unshapecut, SUM(zigzagedge) AS zigzagedge, SUM(cuttingpanel) 
        AS cuttingpanel, SUM(heavyprintdefects) AS heavyprintdefects, SUM(NewTouching) AS NewTouching, SUM(printmissallignament) AS printmissallignament, SUM(anymisprint) AS anymisprint, SUM(colourShape) AS colourShape, 
        SUM(wrongartwork) AS wrongartwork, SUM(materialdefects) AS materialdefects, SUM(newopenSeam) AS newopenSeam, SUM(seamoverlapping) AS seamoverlapping, SUM(wrinkles) AS wrinkles, SUM(excussglue) 
        AS excussglue, UserID, SUM(missingglue) AS missingglue, SUM(pressoremark) AS pressoremark, SUM(airbubble) AS airbubble, SUM(Dirty) AS Dirty, SUM(Pass) AS Expr1, 
        CASE WHEN SysIP = '192.168.40.51' THEN 'A' ELSE CASE WHEN SysIP = '192.168.40.52' THEN 'B' ELSE CASE WHEN SysIP = '192.168.40.53' THEN 'C' ELSE CASE WHEN SysIP = '192.168.40.54' THEN 'D' ELSE CASE WHEN SysIP
         = '192.168.40.55' THEN 'E' ELSE CASE WHEN SysIP = '192.168.40.81' THEN 'H' ELSE CASE WHEN SysIP = '192.168.40.88' THEN 'F' ELSE CASE WHEN SysIP = '192.168.40.56' THEN 'G' ELSE Sysip END END END END END END
         END END AS Station, DateName,ArtSize, ArtCode

")
            ->from('dbo.View_AMB_Packing_DAywise_Article')

            ->where('DateName >=', $start_date)
            ->where('DateName <=', $end_date)
            ->where('UserID IS NULL')
            ->group_by("CASE WHEN SysIP = '192.168.40.51' THEN 'Station 1' ELSE CASE WHEN SysIP = '192.168.40.52' THEN 'Station 2' ELSE CASE WHEN SysIP = '192.168.40.53' THEN 'Station 3' ELSE CASE WHEN SysIP = '192.168.40.54' THEN 'Station 4'
         ELSE CASE WHEN SysIP = '192.168.40.55' THEN 'Station 5' ELSE CASE WHEN SysIP = '192.168.40.81' THEN 'Repair Line Station' ELSE CASE WHEN SysIP = '192.168.40.88' THEN 'Station 6' ELSE CASE WHEN SysIP = '192.168.40.56'
         THEN 'Station 7' ELSE Sysip END END END END END END END END, 
        CASE WHEN SysIP = '192.168.40.51' THEN 'A' ELSE CASE WHEN SysIP = '192.168.40.52' THEN 'B' ELSE CASE WHEN SysIP = '192.168.40.53' THEN 'C' ELSE CASE WHEN SysIP = '192.168.40.54' THEN 'D' ELSE CASE WHEN SysIP
         = '192.168.40.55' THEN 'E' ELSE CASE WHEN SysIP = '192.168.40.81' THEN 'H' ELSE CASE WHEN SysIP = '192.168.40.88' THEN 'F' ELSE CASE WHEN SysIP = '192.168.40.56' THEN 'G' ELSE Sysip END END END END END END
         END END, DateName, LineName, LineID, UserID,ArtSize, ArtCode

")
            ->order_by("Station")
            ->get()
            ->result();
    }
    public function rpt_amb_detail_Packing_Station_LineWise($start_date, $end_date, $lineID)
    {
        return $this->db->select(" TOP (100)  
        PERCENT CASE WHEN SysIP = '192.168.40.51' THEN 'Station 1' ELSE CASE WHEN SysIP = '192.168.40.52' THEN 'Station 2' ELSE CASE WHEN SysIP = '192.168.40.53' THEN 'Station 3' ELSE CASE WHEN SysIP = '192.168.40.54'
         THEN 'Station 4' ELSE CASE WHEN SysIP = '192.168.40.55' THEN 'Station 5' ELSE CASE WHEN SysIP = '192.168.40.81' THEN 'Repair Line Station' ELSE CASE WHEN SysIP = '192.168.40.88' THEN 'Station 6' ELSE CASE WHEN
         SysIP = '192.168.40.56' THEN 'Station 7' ELSE Sysip END END END END END END END END AS StationName, SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(Fail) AS Fail, SUM(PanelDMG) AS PanelDMG, 
        SUM(OverLap) AS OverLap, SUM(ZigZagSeam) AS ZigZagSeam, SUM(Wrinkle) AS Wrinkle, SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(OpenSeam) 
        AS OpenSeam, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching, SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(PUC) AS PUC, SUM(SeamClosingGlue) 
        AS SeamClosingGlue, SUM(StraightCut) AS StraightCut, SUM(CuttingResidual) AS CuttingResidual, SUM(ConnectionBreak) AS ConnectionBreak, SUM(UncureGlue) AS UncureGlue, SUM(ExcessiveGlue) AS ExcessiveGlue, 
        SUM(Dirty) AS Dirty, SUM(BGrade) AS BGrade, SUM(Rejection) AS Rejection, LineName, SUM(DisColor) AS DisColor, SUM(LogoSmearing) AS LogoSmearing, SUM(LogoDoubling) AS LogoDoubling, SUM(BarcodeMissing) 
        AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots, SUM(Smearing) AS Smearing, SUM(unevenBallSurface) AS unevenBallSurface, SUM(unshapecut) AS unshapecut, SUM(zigzagedge) AS zigzagedge, SUM(cuttingpanel) 
        AS cuttingpanel, SUM(heavyprintdefects) AS heavyprintdefects, SUM(NewTouching) AS NewTouching, SUM(printmissallignament) AS printmissallignament, SUM(anymisprint) AS anymisprint, SUM(colourShape) AS colourShape, 
        SUM(wrongartwork) AS wrongartwork, SUM(materialdefects) AS materialdefects, SUM(newopenSeam) AS newopenSeam, SUM(seamoverlapping) AS seamoverlapping, SUM(wrinkles) AS wrinkles, SUM(excussglue) 
        AS excussglue, UserID, SUM(missingglue) AS missingglue, SUM(pressoremark) AS pressoremark, SUM(airbubble) AS airbubble, SUM(Dirty) AS Dirty, SUM(Pass) AS Expr1, 
        CASE WHEN SysIP = '192.168.40.51' THEN 'A' ELSE CASE WHEN SysIP = '192.168.40.52' THEN 'B' ELSE CASE WHEN SysIP = '192.168.40.53' THEN 'C' ELSE CASE WHEN SysIP = '192.168.40.54' THEN 'D' ELSE CASE WHEN SysIP
         = '192.168.40.55' THEN 'E' ELSE CASE WHEN SysIP = '192.168.40.81' THEN 'H' ELSE CASE WHEN SysIP = '192.168.40.88' THEN 'F' ELSE CASE WHEN SysIP = '192.168.40.56' THEN 'G' ELSE Sysip END END END END END END
         END END AS Station, DateName,ArtSize, ArtCode

")
            ->from('dbo.View_AMB_Packing_DAywise_Article')

            ->where('DateName >=', $start_date)
            ->where('DateName <=', $end_date)
            ->where('LineID <=', $lineID)
            ->where('UserID IS NULL')
            ->group_by("CASE WHEN SysIP = '192.168.40.51' THEN 'Station 1' ELSE CASE WHEN SysIP = '192.168.40.52' THEN 'Station 2' ELSE CASE WHEN SysIP = '192.168.40.53' THEN 'Station 3' ELSE CASE WHEN SysIP = '192.168.40.54' THEN 'Station 4'
         ELSE CASE WHEN SysIP = '192.168.40.55' THEN 'Station 5' ELSE CASE WHEN SysIP = '192.168.40.81' THEN 'Repair Line Station' ELSE CASE WHEN SysIP = '192.168.40.88' THEN 'Station 6' ELSE CASE WHEN SysIP = '192.168.40.56'
         THEN 'Station 7' ELSE Sysip END END END END END END END END, 
        CASE WHEN SysIP = '192.168.40.51' THEN 'A' ELSE CASE WHEN SysIP = '192.168.40.52' THEN 'B' ELSE CASE WHEN SysIP = '192.168.40.53' THEN 'C' ELSE CASE WHEN SysIP = '192.168.40.54' THEN 'D' ELSE CASE WHEN SysIP
         = '192.168.40.55' THEN 'E' ELSE CASE WHEN SysIP = '192.168.40.81' THEN 'H' ELSE CASE WHEN SysIP = '192.168.40.88' THEN 'F' ELSE CASE WHEN SysIP = '192.168.40.56' THEN 'G' ELSE Sysip END END END END END END
         END END, DateName, LineName, LineID, UserID,ArtSize, ArtCode

")
            ->order_by("Station")
            ->get()
            ->result();
    }
    public function rpt_amb_detail_Packing_LineWise($start_date, $end_date, $LineID)
    {
        return $this->db->select('SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(Fail) AS Fail, SUM(PanelDMG) AS PanelDMG, SUM(OverLap) AS OverLap, SUM(ZigZagSeam) AS ZigZagSeam, SUM(Wrinkle) AS Wrinkle,
        SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(OpenSeam) AS OpenSeam, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching,
        SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(PUC) AS PUC, SUM(SeamClosingGlue) AS SeamClosingGlue, SUM(StraightCut) AS StraightCut, SUM(CuttingResidual) AS CuttingResidual,
        SUM(ConnectionBreak) AS ConnectionBreak, SUM(UncureGlue) AS UncureGlue, SUM(ExcessiveGlue) AS ExcessiveGlue, SUM(Dirty) AS Dirty, SUM(BGrade) AS BGrade, SUM(Rejection) AS Rejection, LineName,
        SUM(DisColor) AS DisColor, SUM(LogoSmearing) AS LogoSmearing, SUM(LogoDoubling) AS LogoDoubling, 
        SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots, SUM(Smearing) AS Smearing,
        SUM(unevenBallSurface) AS unevenBallSurface,
        SUM(unshapecut) AS unshapecut,
        SUM(zigzagedge) AS zigzagedge,
        SUM(cuttingpanel) AS cuttingpanel,
        SUM(heavyprintdefects) AS heavyprintdefects,
        SUM(NewTouching) AS NewTouching,
        SUM(printmissallignament) AS printmissallignament,
        SUM(anymisprint) AS anymisprint,
        SUM(colourShape) AS colourShape,
        SUM(wrongartwork) AS wrongartwork,
        SUM(materialdefects) AS materialdefects,
        SUM(newopenSeam) AS newopenSeam,
        SUM(seamoverlapping) AS seamoverlapping,
        SUM(wrinkles) AS wrinkles,
        SUM(excussglue) AS excussglue,userID,
        SUM(missingglue) AS missingglue,
        SUM(pressoremark) AS pressoremark,
        SUM(airbubble) AS airbubble, SUM(Dirty) AS Dirty, Sum(pass) as pass,DateName')
            ->from('View_AMB_Packing_DAywise_Article')
            ->where('DateName >=', $start_date)
            ->where('DateName <=', $end_date)
            ->where('LineID =', $LineID)
            ->where('UserID IS NULL')
            ->group_by('LineName, LineID, DateName,userID')
            ->order_by('DateName, LineID')
            ->get()
            ->result();
    }
    public function rpt_amb_datewise_all_Packing_RP($start_date, $end_date)
    {


        return $this->db->select('DateName,ArtCode, userID,ArtSize,SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(Fail) AS Fail, SUM(PanelDMG) AS PanelDMG, SUM(OverLap) AS OverLap, SUM(ZigZagSeam) AS ZigZagSeam, SUM(Wrinkle) AS Wrinkle,
         SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(OpenSeam) AS OpenSeam, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching,
         SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(PUC) AS PUC, SUM(SeamClosingGlue) AS SeamClosingGlue, SUM(StraightCut) AS StraightCut, SUM(CuttingResidual) AS CuttingResidual,
         SUM(ConnectionBreak) AS ConnectionBreak, SUM(UncureGlue) AS UncureGlue, SUM(ExcessiveGlue) AS ExcessiveGlue, SUM(Dirty) AS Dirty, SUM(BGrade) AS BGrade, SUM(Rejection) AS Rejection, LineName,
         SUM(DisColor) AS DisColor, SUM(LogoSmearing) AS LogoSmearing, SUM(LogoDoubling) AS LogoDoubling,
          SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots, SUM(Smearing) AS Smearing,
          SUM(unevenBallSurface) AS unevenBallSurface,
          SUM(unshapecut) AS unshapecut,
          SUM(zigzagedge) AS zigzagedge,
          SUM(cuttingpanel) AS cuttingpanel,
          SUM(heavyprintdefects) AS heavyprintdefects,
          SUM(NewTouching) AS NewTouching,
          SUM(printmissallignament) AS printmissallignament,
          SUM(anymisprint) AS anymisprint,
          SUM(colourShape) AS colourShape,
          SUM(wrongartwork) AS wrongartwork,
          SUM(materialdefects) AS materialdefects,
          SUM(newopenSeam) AS newopenSeam,
          SUM(seamoverlapping) AS seamoverlapping,
          SUM(wrinkles) AS wrinkles,
          SUM(excussglue) AS excussglue,
          SUM(missingglue) AS missingglue,
          SUM(pressoremark) AS pressoremark,
          SUM(airbubble) AS airbubble, SUM(Dirty) AS Dirty, Sum(pass) as pass,')
            ->from('View_AMB_Packing_DAywise_Article')
            ->where('DateName >=', $start_date)
            ->where('DateName <=', $end_date)
            ->where('userID ', 278)
            ->where('BallType', 'packingRepair')
            ->group_by('ArtCode, LineName, LineID, DateName,ArtSize,userID')

            ->order_by('LineID')
            ->get()
            ->result();
    }
    public function rpt_amb_datewise_all_Packing_RP_LineWise($start_date, $end_date, $LineID)
    {


        return $this->db->select('DateName,ArtCode, userID,ArtSize,SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(Fail) AS Fail, SUM(PanelDMG) AS PanelDMG, SUM(OverLap) AS OverLap, SUM(ZigZagSeam) AS ZigZagSeam, SUM(Wrinkle) AS Wrinkle,
         SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(OpenSeam) AS OpenSeam, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching,
         SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(PUC) AS PUC, SUM(SeamClosingGlue) AS SeamClosingGlue, SUM(StraightCut) AS StraightCut, SUM(CuttingResidual) AS CuttingResidual,
         SUM(ConnectionBreak) AS ConnectionBreak, SUM(UncureGlue) AS UncureGlue, SUM(ExcessiveGlue) AS ExcessiveGlue, SUM(Dirty) AS Dirty, SUM(BGrade) AS BGrade, SUM(Rejection) AS Rejection, LineName,
         SUM(DisColor) AS DisColor, SUM(LogoSmearing) AS LogoSmearing, SUM(LogoDoubling) AS LogoDoubling,
          SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots, SUM(Smearing) AS Smearing,
          SUM(unevenBallSurface) AS unevenBallSurface,
          SUM(unshapecut) AS unshapecut,
          SUM(zigzagedge) AS zigzagedge,
          SUM(cuttingpanel) AS cuttingpanel,
          SUM(heavyprintdefects) AS heavyprintdefects,
          SUM(NewTouching) AS NewTouching,
          SUM(printmissallignament) AS printmissallignament,
          SUM(anymisprint) AS anymisprint,
          SUM(colourShape) AS colourShape,
          SUM(wrongartwork) AS wrongartwork,
          SUM(materialdefects) AS materialdefects,
          SUM(newopenSeam) AS newopenSeam,
          SUM(seamoverlapping) AS seamoverlapping,
          SUM(wrinkles) AS wrinkles,
          SUM(excussglue) AS excussglue,
          SUM(missingglue) AS missingglue,
          SUM(pressoremark) AS pressoremark,
          SUM(airbubble) AS airbubble, SUM(Dirty) AS Dirty, Sum(pass) as pass,')
            ->from('View_AMB_Packing_DAywise_Article')
            ->where('DateName >=', $start_date)
            ->where('DateName <=', $end_date)
            ->where('userID ', 278)
            ->where('LineID =', $LineID)

            ->where('BallType', 'packingRepair')
            ->group_by('ArtCode, LineName, LineID, DateName,ArtSize,userID')

            ->order_by('LineID')
            ->get()
            ->result();
    }
    public function rpt_amb_detail_RP($start_date, $end_date)
    {
        return $this->db->select('SUM(dbo.tbl_PC_AMB_Hours_Tran.PanelDMG) AS PanelDMG, SUM(dbo.tbl_PC_AMB_Hours_Tran.OverLap) AS OverLap,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.ZigZagSeam) AS ZigZagSeam, SUM(dbo.tbl_PC_AMB_Hours_Tran.Wrinkle) AS Wrinkle,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.ArtWork) AS ArtWork, SUM(dbo.tbl_PC_AMB_Hours_Tran.UnbondedPanels) AS UnbondedPanels,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.UncureGlue) AS SingleOpenStrip, SUM(dbo.tbl_PC_AMB_Hours_Tran.OpenSeam) AS OpenSeam,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.PanelCavity) AS PanelCavity, SUM(dbo.tbl_PC_AMB_Hours_Tran.Touching) AS Touching,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.OtherPrintingIssue) AS OtherPrintingIssue, SUM(dbo.tbl_PC_AMB_Hours_Tran.CoreCavity) AS CoreCavity,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.PUC) AS PUC, SUM(dbo.tbl_PC_AMB_Hours_Tran.SeamClosingGlue) AS SeamClosingGlue,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.Rejection) AS Rejection,  SUM(ISNULL(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked, 0) + ISNULL(dbo.tbl_PC_AMB_Hours_Tran.RCheck, 0)) AS TotalChecked, SUM(dbo.tbl_PC_AMB_Hours_Tran.StraightCut) AS StraightCut, SUM(dbo.tbl_PC_AMB_Hours_Tran.ConnectionBreak) AS ConnectionBreak,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.BGrade) AS BGrade, Sum(dbo.tbl_PC_AMB_Hours_Tran.DisColor) As DisColor,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.LogoSmearing) As LogoSmearing,  Sum(dbo.tbl_PC_AMB_Hours_Tran.LogoDoubling) As LogoDoubling,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.BarcodeMissing) As BarcodeMissing,Sum(dbo.tbl_PC_AMB_Hours_Tran.LargerSpots) As LargerSpots,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.Smearing) As Smearing,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.unevenBallSurface) As unevenBallSurface,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.unshapecut) As unshapecut,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.zigzagedge) As zigzagedge,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.cuttingpanel) As cuttingpanel,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.heavyprintdefects) As heavyprintdefects,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.NewTouching) As NewTouching,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.printmissallignament) As printmissallignament,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.anymisprint) As anymisprint,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.colourShape) As colourShape,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.wrongartwork) As wrongartwork,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.materialdefects) As materialdefects,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.newopenSeam) As newopenSeam,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.seamoverlapping) As seamoverlapping,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.wrinkles) As wrinkles,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.excussglue) As excussglue,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.missingglue) As missingglue,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.pressoremark) As pressoremark,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.airbubble) As airbubble,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.Dirty) As airbubble,
          dbo.tbl_PC_AMB_Line.LineName,Sum(dbo.tbl_PC_AMB_Hours_Tran.pass) As pass,Sum(dbo.tbl_PC_AMB_Hours_Tran.Rpass) As RPass,dbo.tbl_Inv_Tran_Date.DateName')
            ->from('dbo.tbl_PC_AMB_Hours_Tran')
            ->join('dbo.tbl_Inv_Tran_Date', 'dbo.tbl_PC_AMB_Hours_Tran.DayID = dbo.tbl_Inv_Tran_Date.DayNo')
            ->join('dbo.tbl_PC_AMB_Line', 'dbo.tbl_PC_AMB_Hours_Tran.LineID = dbo.tbl_PC_AMB_Line.LineID')
            ->where('dbo.tbl_PC_AMB_Hours_Tran.ProcessID', 1)
            ->where('dbo.tbl_Inv_Tran_Date.DateName >=', $start_date)
            ->where('dbo.tbl_Inv_Tran_Date.DateName <=', $end_date)
            ->where('dbo.tbl_PC_AMB_Hours_Tran.BallType', 'RepairPass')
            ->group_by('dbo.tbl_PC_AMB_Line.LineName,dbo.tbl_Inv_Tran_Date.DateName')
            ->get()->result();
    }
    public function rpt_amb_detail_LineWise_RP($start_date, $end_date, $lineID)
    {
        return $this->db->select('  SUM(dbo.tbl_PC_AMB_Hours_Tran.PanelDMG) AS PanelDMG, SUM(dbo.tbl_PC_AMB_Hours_Tran.OverLap) AS OverLap,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.ZigZagSeam) AS ZigZagSeam, SUM(dbo.tbl_PC_AMB_Hours_Tran.Wrinkle) AS Wrinkle,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.ArtWork) AS ArtWork, SUM(dbo.tbl_PC_AMB_Hours_Tran.UnbondedPanels) AS UnbondedPanels,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.UncureGlue) AS SingleOpenStrip, SUM(dbo.tbl_PC_AMB_Hours_Tran.OpenSeam) AS OpenSeam,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.PanelCavity) AS PanelCavity, SUM(dbo.tbl_PC_AMB_Hours_Tran.Touching) AS Touching,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.OtherPrintingIssue) AS OtherPrintingIssue, SUM(dbo.tbl_PC_AMB_Hours_Tran.CoreCavity) AS CoreCavity,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.PUC) AS PUC, SUM(dbo.tbl_PC_AMB_Hours_Tran.SeamClosingGlue) AS SeamClosingGlue,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.Rejection) AS Rejection,  SUM(ISNULL(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked, 0) + ISNULL(dbo.tbl_PC_AMB_Hours_Tran.RCheck, 0)) AS TotalChecked, SUM(dbo.tbl_PC_AMB_Hours_Tran.StraightCut) AS StraightCut, SUM(dbo.tbl_PC_AMB_Hours_Tran.ConnectionBreak) AS ConnectionBreak,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.BGrade) AS BGrade, Sum(dbo.tbl_PC_AMB_Hours_Tran.DisColor) As DisColor,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.LogoSmearing) As LogoSmearing,  Sum(dbo.tbl_PC_AMB_Hours_Tran.LogoDoubling) As LogoDoubling,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.BarcodeMissing) As BarcodeMissing,Sum(dbo.tbl_PC_AMB_Hours_Tran.LargerSpots) As LargerSpots,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.Smearing) As Smearing,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.unevenBallSurface) As unevenBallSurface,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.unshapecut) As unshapecut,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.zigzagedge) As zigzagedge,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.cuttingpanel) As cuttingpanel,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.heavyprintdefects) As heavyprintdefects,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.NewTouching) As NewTouching,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.printmissallignament) As printmissallignament,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.anymisprint) As anymisprint,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.colourShape) As colourShape,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.wrongartwork) As wrongartwork,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.materialdefects) As materialdefects,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.newopenSeam) As newopenSeam,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.seamoverlapping) As seamoverlapping,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.wrinkles) As wrinkles,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.excussglue) As excussglue,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.missingglue) As missingglue,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.pressoremark) As pressoremark,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.airbubble) As airbubble,
          dbo.tbl_PC_AMB_Line.LineName,Sum(dbo.tbl_PC_AMB_Hours_Tran.pass) As pass,Sum(dbo.tbl_PC_AMB_Hours_Tran.Rpass) As RPass,dbo.tbl_Inv_Tran_Date.DateName')
            ->from('dbo.tbl_PC_AMB_Hours_Tran')
            ->join('dbo.tbl_Inv_Tran_Date', 'dbo.tbl_PC_AMB_Hours_Tran.DayID = dbo.tbl_Inv_Tran_Date.DayNo')
            ->join('dbo.tbl_PC_AMB_Line', 'dbo.tbl_PC_AMB_Hours_Tran.LineID = dbo.tbl_PC_AMB_Line.LineID')
            ->where('dbo.tbl_PC_AMB_Hours_Tran.ProcessID', 1)
            ->where('dbo.tbl_Inv_Tran_Date.DateName >=', $start_date)
            ->where('dbo.tbl_Inv_Tran_Date.DateName <=', $end_date)
            ->where('dbo.tbl_PC_AMB_Hours_Tran.LineID =', $lineID)
            ->where('dbo.tbl_PC_AMB_Hours_Tran.BallType', 'RepairPass')
            ->group_by('dbo.tbl_PC_AMB_Line.LineName,dbo.tbl_Inv_Tran_Date.DateName')
            ->get()->result();
    }

    public function rpt_amb_sum($start_date, $end_date, $processID)
    {
        return $this->db->select('SUM(dbo.tbl_PC_AMB_Hours_Tran.PanelDMG) AS PanelDMG, 
        SUM(dbo.tbl_PC_AMB_Hours_Tran.OverLap) AS OverLap,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.ZigZagSeam) AS ZigZagSeam, SUM(dbo.tbl_PC_AMB_Hours_Tran.Wrinkle) AS Wrinkle,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.ArtWork) AS ArtWork, SUM(dbo.tbl_PC_AMB_Hours_Tran.UnbondedPanels) AS UnbondedPanels,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.UncureGlue) AS SingleOpenStrip, SUM(dbo.tbl_PC_AMB_Hours_Tran.OpenSeam) AS OpenSeam,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.PanelCavity) AS PanelCavity, SUM(dbo.tbl_PC_AMB_Hours_Tran.Touching) AS Touching,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.OtherPrintingIssue) AS OtherPrintingIssue,
           SUM(dbo.tbl_PC_AMB_Hours_Tran.CoreCavity) AS CoreCavity,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.PUC) AS PUC, 
          SUM(dbo.tbl_PC_AMB_Hours_Tran.SeamClosingGlue) AS SeamClosingGlue,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.Rejection) AS Rejection,  
          SUM(ISNULL(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked, 0) + ISNULL(dbo.tbl_PC_AMB_Hours_Tran.RCheck, 0)) AS TotalChecked,
           SUM(dbo.tbl_PC_AMB_Hours_Tran.StraightCut) AS StraightCut, SUM(dbo.tbl_PC_AMB_Hours_Tran.ConnectionBreak) AS ConnectionBreak,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.BGrade) AS BGrade, Sum(dbo.tbl_PC_AMB_Hours_Tran.DisColor) As DisColor,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.LogoSmearing) As LogoSmearing,  Sum(dbo.tbl_PC_AMB_Hours_Tran.LogoDoubling) As LogoDoubling,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.BarcodeMissing) As BarcodeMissing,Sum(dbo.tbl_PC_AMB_Hours_Tran.LargerSpots) As LargerSpots,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.Smearing) As Smearing,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.unevenBallSurface) As unevenBallSurface,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.unshapecut) As unshapecut,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.zigzagedge) As zigzagedge,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.cuttingpanel) As cuttingpanel,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.heavyprintdefects) As heavyprintdefects,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.NewTouching) As NewTouching,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.printmissallignament) As printmissallignament,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.anymisprint) As anymisprint,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.colourShape) As colourShape,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.wrongartwork) As wrongartwork,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.materialdefects) As materialdefects,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.newopenSeam) As newopenSeam,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.seamoverlapping) As seamoverlapping,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.wrinkles) As wrinkles,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.excussglue) As excussglue,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.missingglue) As missingglue,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.pressoremark) As pressoremark,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.airbubble) As airbubble,
          Sum(dbo.tbl_PC_AMB_Hours_Tran.pass) As pass')
            ->from('dbo.tbl_PC_AMB_Hours_Tran')
            ->join('dbo.tbl_Inv_Tran_Date', 'dbo.tbl_PC_AMB_Hours_Tran.DayID = dbo.tbl_Inv_Tran_Date.DayNo')
            ->join('dbo.tbl_PC_AMB_Line', 'dbo.tbl_PC_AMB_Hours_Tran.LineID = dbo.tbl_PC_AMB_Line.LineID')
            ->where('dbo.tbl_PC_AMB_Hours_Tran.ProcessID', $processID)
            ->where('dbo.tbl_Inv_Tran_Date.DateName >=', $start_date)
            ->where('dbo.tbl_Inv_Tran_Date.DateName <=', $end_date)
            // ->group_by('dbo.tbl_PC_AMB_Line.LineName')
            //   ->group_by('dbo.tbl_Inv_Tran_Date.DateName')
            // ->get_compiled_select();
            ->get()->result();
    }
    public function rpt_amb_line_data($start_date, $end_date, $line)
    {
        return $this->db->select(
            'SUM(dbo.tbl_PC_AMB_Hours_Tran.PanelDMG) AS PanelDMG, SUM(dbo.tbl_PC_AMB_Hours_Tran.OverLap) AS OverLap,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.ZigZagSeam) AS ZigZagSeam, SUM(dbo.tbl_PC_AMB_Hours_Tran.Wrinkle) AS Wrinkle,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.ArtWork) AS ArtWork, SUM(dbo.tbl_PC_AMB_Hours_Tran.UnbondedPanels) AS UnbondedPanels,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.UncureGlue) AS SingleOpenStrip, SUM(dbo.tbl_PC_AMB_Hours_Tran.OpenSeam) AS OpenSeam,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.PanelCavity) AS PanelCavity, SUM(dbo.tbl_PC_AMB_Hours_Tran.Touching) AS Touching,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.OtherPrintingIssue) AS OtherPrintingIssue, SUM(dbo.tbl_PC_AMB_Hours_Tran.CoreCavity) AS CoreCavity,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.PUC) AS PUC, SUM(dbo.tbl_PC_AMB_Hours_Tran.SeamClosingGlue) AS SeamClosingGlue,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.Rejection) AS Rejection,  SUM(ISNULL(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked, 0) + ISNULL(dbo.tbl_PC_AMB_Hours_Tran.RCheck, 0)) AS TotalChecked, SUM(dbo.tbl_PC_AMB_Hours_Tran.StraightCut) AS StraightCut, SUM(dbo.tbl_PC_AMB_Hours_Tran.ConnectionBreak) AS ConnectionBreak,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.BGrade) AS BGrade,SUM(dbo.tbl_PC_AMB_Hours_Tran.LogoSmearing) AS LogoSmearing,SUM(dbo.tbl_PC_AMB_Hours_Tran.DisColor) AS DisColor,
          SUM(dbo.tbl_PC_AMB_Hours_Tran.LogoDoubling) AS LogoDoubling,SUM(dbo.tbl_PC_AMB_Hours_Tran.BarcodeMissing) AS BarcodeMissing,SUM(dbo.tbl_PC_AMB_Hours_Tran.LargerSpots)
           AS LargerSpots, SUM(dbo.tbl_PC_AMB_Hours_Tran.Smearing) AS Smearing,
           Sum(dbo.tbl_PC_AMB_Hours_Tran.unevenBallSurface) As unevenBallSurface,
           Sum(dbo.tbl_PC_AMB_Hours_Tran.unshapecut) As unshapecut,
           Sum(dbo.tbl_PC_AMB_Hours_Tran.zigzagedge) As zigzagedge,
           Sum(dbo.tbl_PC_AMB_Hours_Tran.cuttingpanel) As cuttingpanel,
           Sum(dbo.tbl_PC_AMB_Hours_Tran.heavyprintdefects) As heavyprintdefects,
           Sum(dbo.tbl_PC_AMB_Hours_Tran.NewTouching) As NewTouching,
           Sum(dbo.tbl_PC_AMB_Hours_Tran.printmissallignament) As printmissallignament,
           Sum(dbo.tbl_PC_AMB_Hours_Tran.anymisprint) As anymisprint,
           Sum(dbo.tbl_PC_AMB_Hours_Tran.colourShape) As colourShape,
           Sum(dbo.tbl_PC_AMB_Hours_Tran.wrongartwork) As wrongartwork,
           Sum(dbo.tbl_PC_AMB_Hours_Tran.materialdefects) As materialdefects,
           Sum(dbo.tbl_PC_AMB_Hours_Tran.newopenSeam) As newopenSeam,
           Sum(dbo.tbl_PC_AMB_Hours_Tran.seamoverlapping) As seamoverlapping,
           Sum(dbo.tbl_PC_AMB_Hours_Tran.wrinkles) As wrinkles,
           Sum(dbo.tbl_PC_AMB_Hours_Tran.excussglue) As excussglue,
           Sum(dbo.tbl_PC_AMB_Hours_Tran.missingglue) As missingglue,
           Sum(dbo.tbl_PC_AMB_Hours_Tran.pressoremark) As pressoremark,
           Sum(dbo.tbl_PC_AMB_Hours_Tran.airbubble) As airbubble,dbo.tbl_Inv_Tran_Date.DateName, dbo.tbl_PC_AMB_Line.LineName,Sum(dbo.tbl_PC_AMB_Hours_Tran.pass) As pass'

        )

            ->from('dbo.tbl_PC_AMB_Hours_Tran')
            ->join('dbo.tbl_Inv_Tran_Date', 'dbo.tbl_PC_AMB_Hours_Tran.DayID = dbo.tbl_Inv_Tran_Date.DayNo')
            ->join('dbo.tbl_PC_AMB_Line', 'dbo.tbl_PC_AMB_Hours_Tran.LineID = dbo.tbl_PC_AMB_Line.LineID')
            ->where('dbo.tbl_PC_AMB_Hours_Tran.ProcessID', 1)
            ->where('dbo.tbl_PC_AMB_Hours_Tran.BallType', 'FreshBall')
            ->where('dbo.tbl_Inv_Tran_Date.DateName >=', $start_date)
            ->where('dbo.tbl_Inv_Tran_Date.DateName <=', $end_date)
            ->where('dbo.tbl_PC_AMB_Line.LineID', $line)
            ->group_by('dbo.tbl_PC_AMB_Line.LineName,dbo.tbl_Inv_Tran_Date.DateName')
            ->get()
            ->result();
    }

    public function rpt_amb_datewise_all_articles($start_date, $end_date, $processID)
    {
        if ($processID == 1) {
            return $this->db->select('ArtCode,ArtSize, SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(Fail) AS Fail, SUM(PanelDMG) AS PanelDMG, SUM(OverLap) AS OverLap, SUM(ZigZagSeam) AS ZigZagSeam, SUM(Wrinkle) AS Wrinkle,
          SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(OpenSeam) AS OpenSeam, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching,
          SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(PUC) AS PUC, SUM(SeamClosingGlue) AS SeamClosingGlue, SUM(StraightCut) AS StraightCut, SUM(CuttingResidual) AS CuttingResidual,
          SUM(ConnectionBreak) AS ConnectionBreak, SUM(UncureGlue) AS UncureGlue, SUM(ExcessiveGlue) AS ExcessiveGlue, SUM(OverUnderWght) AS OverUnderWght, SUM(BGrade) AS BGrade, SUM(Rejection) AS Rejection, LineName, LineID, SUM(DisColor) AS DisColor, SUM(LogoSmearing) AS LogoSmearing, SUM(LogoDoubling) AS LogoDoubling, SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots,
          SUM(Smearing) AS Smearing,
          SUM(unevenBallSurface) AS unevenBallSurface,
          SUM(unshapecut) AS unshapecut,
          SUM(zigzagedge) AS zigzagedge,
          SUM(cuttingpanel) AS cuttingpanel,
          SUM(heavyprintdefects) AS heavyprintdefects,
          SUM(NewTouching) AS NewTouching,
          SUM(printmissallignament) AS printmissallignament,
          SUM(anymisprint) AS anymisprint,
          SUM(colourShape) AS colourShape,
          SUM(wrongartwork) AS wrongartwork,
          SUM(materialdefects) AS materialdefects,
          SUM(newopenSeam) AS newopenSeam,
          SUM(seamoverlapping) AS seamoverlapping,
          SUM(wrinkles) AS wrinkles,
          SUM(excussglue) AS excussglue,
          SUM(missingglue) AS missingglue,
          SUM(pressoremark) AS pressoremark,
          SUM(airbubble) AS airbubble,SUM(Dirty) AS Dirty, Sum(pass) as pass,
           DateName')
                ->from('View_Amb_DayWise_Article_Wise')
                ->where('DateName >=', $start_date)
                ->where('DateName <=', $end_date)
                ->where('BallType', 'FreshBall')
                ->group_by('ArtCode, LineName, LineID, DateName,ArtSize')
                ->order_by('DateName, LineID')
                ->get()
                ->result();
        } else if ($processID == 2) {
            return $this->db->select('ArtCode,ArtSize, SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(Fail) AS Fail, SUM(PanelDMG) AS PanelDMG, SUM(OverLap) AS OverLap, SUM(ZigZagSeam) AS ZigZagSeam, SUM(Wrinkle) AS Wrinkle,
               SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(OpenSeam) AS OpenSeam, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching,
               SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(PUC) AS PUC, SUM(SeamClosingGlue) AS SeamClosingGlue, SUM(StraightCut) AS StraightCut, SUM(CuttingResidual) AS CuttingResidual,
               SUM(ConnectionBreak) AS ConnectionBreak, SUM(UncureGlue) AS UncureGlue, SUM(ExcessiveGlue) AS ExcessiveGlue, SUM(Dirty) AS Dirty, SUM(BGrade) AS BGrade, SUM(Rejection) AS Rejection, LineName,
               SUM(DisColor) AS DisColor, SUM(LogoSmearing) AS LogoSmearing, SUM(LogoDoubling) AS LogoDoubling, 
               SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots, SUM(Smearing) AS Smearing,
               SUM(unevenBallSurface) AS unevenBallSurface,
               SUM(unshapecut) AS unshapecut,
               SUM(zigzagedge) AS zigzagedge,
               SUM(cuttingpanel) AS cuttingpanel,
               SUM(heavyprintdefects) AS heavyprintdefects,
               SUM(NewTouching) AS NewTouching,
               SUM(printmissallignament) AS printmissallignament,
               SUM(anymisprint) AS anymisprint,
               SUM(colourShape) AS colourShape,
               SUM(wrongartwork) AS wrongartwork,
               SUM(materialdefects) AS materialdefects,
               SUM(newopenSeam) AS newopenSeam,
               SUM(seamoverlapping) AS seamoverlapping,
               SUM(wrinkles) AS wrinkles,
               SUM(excussglue) AS excussglue,userID,
               SUM(missingglue) AS missingglue,
               SUM(pressoremark) AS pressoremark,
               SUM(airbubble) AS airbubble, Sum(pass) as pass,DateName')
                ->from('View_AMB_Packing_DAywise_Article')
                ->where('DateName >=', $start_date)
                ->where('DateName <=', $end_date)
                ->where('UserID IS NULL')
                ->group_by('ArtCode, LineName, LineID, DateName,ArtSize,userID')
                ->order_by('DateName, LineID')
                ->get()
                ->result();
        }
    }

    public function rpt_amb_datewise_all_articles_OverAll($start_date, $end_date, $processID)
    {
        if ($processID == 1) {
            return $this->db->select('ArtCode,ArtSize, SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(Fail) AS Fail, SUM(PanelDMG) AS PanelDMG, SUM(OverLap) AS OverLap, SUM(ZigZagSeam) AS ZigZagSeam, SUM(Wrinkle) AS Wrinkle,
          SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(OpenSeam) AS OpenSeam, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching,
          SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(PUC) AS PUC, SUM(SeamClosingGlue) AS SeamClosingGlue, SUM(StraightCut) AS StraightCut, SUM(CuttingResidual) AS CuttingResidual,
          SUM(ConnectionBreak) AS ConnectionBreak, SUM(UncureGlue) AS UncureGlue, SUM(ExcessiveGlue) AS ExcessiveGlue, SUM(OverUnderWght) AS OverUnderWght, SUM(BGrade) AS BGrade, SUM(Rejection) AS Rejection, LineName, LineID, SUM(DisColor) AS DisColor, SUM(LogoSmearing) AS LogoSmearing, SUM(LogoDoubling) AS LogoDoubling, SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots,
          SUM(Smearing) AS Smearing,
          SUM(unevenBallSurface) AS unevenBallSurface,
          SUM(unshapecut) AS unshapecut,
          SUM(zigzagedge) AS zigzagedge,
          SUM(cuttingpanel) AS cuttingpanel,
          SUM(heavyprintdefects) AS heavyprintdefects,
          SUM(NewTouching) AS NewTouching,
          SUM(printmissallignament) AS printmissallignament,
          SUM(anymisprint) AS anymisprint,
          SUM(colourShape) AS colourShape,
          SUM(wrongartwork) AS wrongartwork,
          SUM(materialdefects) AS materialdefects,
          SUM(newopenSeam) AS newopenSeam,
          SUM(seamoverlapping) AS seamoverlapping,
          SUM(wrinkles) AS wrinkles,
          SUM(excussglue) AS excussglue,
          SUM(missingglue) AS missingglue,
          SUM(pressoremark) AS pressoremark,
          SUM(airbubble) AS airbubble,SUM(Dirty) AS Dirty, Sum(pass) as pass,
           DateName')
                ->from('View_Amb_DayWise_Article_Wise')
                ->where('DateName >=', $start_date)
                ->where('DateName <=', $end_date)
                ->group_by('ArtCode, LineName, LineID, DateName,ArtSize')
                ->order_by('DateName, LineID')
                ->get()
                ->result();
        } else if ($processID == 2) {
            return $this->db->select('ArtCode,ArtSize, SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(Fail) AS Fail, SUM(PanelDMG) AS PanelDMG, SUM(OverLap) AS OverLap, SUM(ZigZagSeam) AS ZigZagSeam, SUM(Wrinkle) AS Wrinkle,
               SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(OpenSeam) AS OpenSeam, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching,
               SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(PUC) AS PUC, SUM(SeamClosingGlue) AS SeamClosingGlue, SUM(StraightCut) AS StraightCut, SUM(CuttingResidual) AS CuttingResidual,
               SUM(ConnectionBreak) AS ConnectionBreak, SUM(UncureGlue) AS UncureGlue, SUM(ExcessiveGlue) AS ExcessiveGlue, SUM(Dirty) AS Dirty, SUM(BGrade) AS BGrade, SUM(Rejection) AS Rejection, LineName,
               SUM(DisColor) AS DisColor, SUM(LogoSmearing) AS LogoSmearing, SUM(LogoDoubling) AS LogoDoubling, 
               SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots, SUM(Smearing) AS Smearing,
               SUM(unevenBallSurface) AS unevenBallSurface,
               SUM(unshapecut) AS unshapecut,
               SUM(zigzagedge) AS zigzagedge,
               SUM(cuttingpanel) AS cuttingpanel,
               SUM(heavyprintdefects) AS heavyprintdefects,
               SUM(NewTouching) AS NewTouching,
               SUM(printmissallignament) AS printmissallignament,
               SUM(anymisprint) AS anymisprint,
               SUM(colourShape) AS colourShape,
               SUM(wrongartwork) AS wrongartwork,
               SUM(materialdefects) AS materialdefects,
               SUM(newopenSeam) AS newopenSeam,
               SUM(seamoverlapping) AS seamoverlapping,
               SUM(wrinkles) AS wrinkles,
               SUM(excussglue) AS excussglue,userID,
               SUM(missingglue) AS missingglue,
               SUM(pressoremark) AS pressoremark,
               SUM(airbubble) AS airbubble, Sum(pass) as pass,DateName')
                ->from('View_AMB_Packing_DAywise_Article')
                ->where('DateName >=', $start_date)
                ->where('DateName <=', $end_date)
                ->where('UserID IS NULL')
                ->group_by('ArtCode, LineName, LineID, DateName,ArtSize,userID')
                ->order_by('DateName, LineID')
                ->get()
                ->result();
        }
    }



    public function rpt_amb_datewise_all_articles_Packing_RP($start_date, $end_date)
    {

        return $this->db->select('ArtCode,ArtSize, SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(Fail) AS Fail, SUM(PanelDMG) AS PanelDMG, SUM(OverLap) AS OverLap, SUM(ZigZagSeam) AS ZigZagSeam, SUM(Wrinkle) AS Wrinkle,
        SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(OpenSeam) AS OpenSeam, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching,
        SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(PUC) AS PUC, SUM(SeamClosingGlue) AS SeamClosingGlue, SUM(StraightCut) AS StraightCut, SUM(CuttingResidual) AS CuttingResidual,
        SUM(ConnectionBreak) AS ConnectionBreak, SUM(UncureGlue) AS UncureGlue, SUM(ExcessiveGlue) AS ExcessiveGlue, SUM(Dirty) AS Dirty, SUM(BGrade) AS BGrade, SUM(Rejection) AS Rejection, LineName,
        SUM(DisColor) AS DisColor, SUM(LogoSmearing) AS LogoSmearing, SUM(LogoDoubling) AS LogoDoubling, 
        SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots, SUM(Smearing) AS Smearing,
        SUM(unevenBallSurface) AS unevenBallSurface,
        SUM(unshapecut) AS unshapecut,
        SUM(zigzagedge) AS zigzagedge,
        SUM(cuttingpanel) AS cuttingpanel,
        SUM(heavyprintdefects) AS heavyprintdefects,
        SUM(NewTouching) AS NewTouching,
        SUM(printmissallignament) AS printmissallignament,
        SUM(anymisprint) AS anymisprint,
        SUM(colourShape) AS colourShape,
        SUM(wrongartwork) AS wrongartwork,
        SUM(materialdefects) AS materialdefects,
        SUM(newopenSeam) AS newopenSeam,
        SUM(seamoverlapping) AS seamoverlapping,
        SUM(wrinkles) AS wrinkles,
        SUM(excussglue) AS excussglue,
        SUM(missingglue) AS missingglue,
        SUM(pressoremark) AS pressoremark,userID,
        SUM(airbubble) AS airbubble, Sum(pass) as pass,DateName')
            ->from('View_AMB_Packing_DAywise_Article')
            ->where('DateName >=', $start_date)
            ->where('DateName <=', $end_date)
            ->where('userID ', 278)
            ->where('BallType', 'packingRepair')
            ->group_by('ArtCode, LineName, LineID, DateName,ArtSize,userID')
            ->order_by('DateName, LineID')
            ->get()
            ->result();
    }
    public function rpt_amb_datewise_all_articles_Art_Packing_RP($start_date, $end_date, $code)
    {


        return $this->db->select('DateName,ArtCode, userID,ArtSize,SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(Fail) AS Fail, SUM(PanelDMG) AS PanelDMG, SUM(OverLap) AS OverLap, SUM(ZigZagSeam) AS ZigZagSeam, SUM(Wrinkle) AS Wrinkle,
         SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(OpenSeam) AS OpenSeam, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching,
         SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(PUC) AS PUC, SUM(SeamClosingGlue) AS SeamClosingGlue, SUM(StraightCut) AS StraightCut, SUM(CuttingResidual) AS CuttingResidual,
         SUM(ConnectionBreak) AS ConnectionBreak, SUM(UncureGlue) AS UncureGlue, SUM(ExcessiveGlue) AS ExcessiveGlue, SUM(Dirty) AS Dirty, SUM(BGrade) AS BGrade, SUM(Rejection) AS Rejection, LineName,
         SUM(DisColor) AS DisColor, SUM(LogoSmearing) AS LogoSmearing, SUM(LogoDoubling) AS LogoDoubling,
          SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots, SUM(Smearing) AS Smearing,
          SUM(unevenBallSurface) AS unevenBallSurface,
          SUM(unshapecut) AS unshapecut,
          SUM(zigzagedge) AS zigzagedge,
          SUM(cuttingpanel) AS cuttingpanel,
          SUM(heavyprintdefects) AS heavyprintdefects,
          SUM(NewTouching) AS NewTouching,
          SUM(printmissallignament) AS printmissallignament,
          SUM(anymisprint) AS anymisprint,
          SUM(colourShape) AS colourShape,
          SUM(wrongartwork) AS wrongartwork,
          SUM(materialdefects) AS materialdefects,
          SUM(newopenSeam) AS newopenSeam,
          SUM(seamoverlapping) AS seamoverlapping,
          SUM(wrinkles) AS wrinkles,
          SUM(excussglue) AS excussglue,
          SUM(missingglue) AS missingglue,
          SUM(pressoremark) AS pressoremark,
          SUM(airbubble) AS airbubble, Sum(pass) as pass,')
            ->from('View_AMB_Packing_DAywise_Article')
            ->where('DateName >=', $start_date)
            ->where('DateName <=', $end_date)
            ->where('ArtCode', $code)
            ->where('userID ', 278)
            ->where('BallType', 'packingRepair')
            ->group_by('ArtCode, LineName, LineID, DateName,ArtSize,userID')

            ->order_by('LineID')
            ->get()
            ->result();
    }
    public function rpt_amb_datewise_all_articles_RP($start_date, $end_date)
    {

        return $this->db->select('TOP (100) PERCENT SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(RPass) AS RPass,
            SUM(OutPut) AS OutPut, SUM(FinalFail) AS FinalFail, SUM(PanelDMG) AS PanelDMG, SUM(OverLap) AS OverLap, 
         SUM(Wrinkle) AS Wrinkle, SUM(ZigZagSeam) AS ZigZagSeam, SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(PanelCavity) AS PanelCavity, 
         SUM(Touching) AS Touching, SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(ColorMArk) AS ColorMArk, SUM(StraightCut) AS StraightCut, SUM(GLueDirts) AS GLueDirts, SUM(DisColor) 
         AS DisColor, SUM(LogoDoubling) AS LogoDoubling, SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots, SUM(Smearing) AS Smearing, SUM(MissAlligment) AS MissAlligment, SUM(BlurPrinting) 
         AS BlurPrinting, SUM(HFMissAlignment) AS HFMissAlignment, SUM(RoundCorner) AS RoundCorner, SUM(CornerOut) AS CornerOut, SUM(coveringDefects) AS coveringDefects, SUM(Burning) AS Burning, LineName, ArtCode, 
         ArtSize, DateName,
         SUM(unevenBallSurface) AS unevenBallSurface,
         SUM(unshapecut) AS unshapecut,
         SUM(zigzagedge) AS zigzagedge,
         SUM(cuttingpanel) AS cuttingpanel,
         SUM(heavyprintdefects) AS heavyprintdefects,
         SUM(NewTouching) AS NewTouching,
         SUM(printmissallignament) AS printmissallignament,
         SUM(anymisprint) AS anymisprint,
         SUM(colourShape) AS colourShape,
         SUM(wrongartwork) AS wrongartwork,
         SUM(materialdefects) AS materialdefects,
         SUM(newopenSeam) AS newopenSeam,
         SUM(seamoverlapping) AS seamoverlapping,
         SUM(wrinkles) AS wrinkles,
         SUM(excussglue) AS excussglue,
         SUM(missingglue) AS missingglue,
         SUM(pressoremark) AS pressoremark,
         SUM(airbubble) AS airbubble')
            ->from('View_Amb_DayWise_Article_Wise_new')
            ->where('DateName >=', $start_date)
            ->where('DateName <=', $end_date)
            ->where('BallType', 'RepairPass')
            ->group_by('ArtCode, LineName, LineID, DateName,ArtSize')
            ->order_by('DateName, LineID')
            ->get()
            ->result();
    }
    public function rpt_amb_datewise_all_articles_RF($start_date, $end_date)
    {

        return $this->db->select('TOP (100) PERCENT SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(RPass) AS RPass, SUM(RCheck) AS RCheck,
            SUM(OutPut) AS OutPut, SUM(FinalFail) AS FinalFail, SUM(PanelDMG) AS PanelDMG, SUM(OverLap) AS OverLap, 
         SUM(Wrinkle) AS Wrinkle, SUM(ZigZagSeam) AS ZigZagSeam, SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(PanelCavity) AS PanelCavity, 
         SUM(Touching) AS Touching, SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(ColorMArk) AS ColorMArk, SUM(StraightCut) AS StraightCut, SUM(GLueDirts) AS GLueDirts, SUM(DisColor) 
         AS DisColor, SUM(LogoDoubling) AS LogoDoubling, SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots, SUM(Smearing) AS Smearing, SUM(MissAlligment) AS MissAlligment, SUM(BlurPrinting) 
         AS BlurPrinting, SUM(HFMissAlignment) AS HFMissAlignment, SUM(RoundCorner) AS RoundCorner, SUM(CornerOut) AS CornerOut, SUM(coveringDefects) AS coveringDefects, SUM(Burning) AS Burning, LineName, ArtCode, 
         ArtSize, DateName,
         SUM(unevenBallSurface) AS unevenBallSurface,
         SUM(unshapecut) AS unshapecut,
         SUM(zigzagedge) AS zigzagedge,
         SUM(cuttingpanel) AS cuttingpanel,
         SUM(heavyprintdefects) AS heavyprintdefects,
         SUM(NewTouching) AS NewTouching,
         SUM(printmissallignament) AS printmissallignament,
         SUM(anymisprint) AS anymisprint,
         SUM(colourShape) AS colourShape,
         SUM(wrongartwork) AS wrongartwork,
         SUM(materialdefects) AS materialdefects,
         SUM(newopenSeam) AS newopenSeam,
         SUM(seamoverlapping) AS seamoverlapping,
         SUM(wrinkles) AS wrinkles,
         SUM(excussglue) AS excussglue,
         SUM(missingglue) AS missingglue,
         SUM(pressoremark) AS pressoremark,
         SUM(airbubble) AS airbubble')
            ->from('View_Amb_DayWise_Article_Wise_new')
            ->where('DateName >=', $start_date)
            ->where('DateName <=', $end_date)
            ->where('BallType', 'RepairFail')
            ->group_by('ArtCode, LineName, LineID, DateName,ArtSize')
            ->order_by('DateName, LineID')
            ->get()
            ->result();
    }

    public function rpt_amb_datewise_article($start_date, $end_date, $processID, $code)
    {
        if ($processID == 1) {
            return $this->db->select('DateName, ArtCode,ArtSize, SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(Fail) AS Fail, SUM(PanelDMG) AS PanelDMG, SUM(OverLap) AS OverLap, SUM(ZigZagSeam) AS ZigZagSeam, SUM(Wrinkle) AS Wrinkle,
          SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(OpenSeam) AS OpenSeam, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching,
          SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(PUC) AS PUC, SUM(SeamClosingGlue) AS SeamClosingGlue, SUM(StraightCut) AS StraightCut, SUM(CuttingResidual) AS CuttingResidual,
          SUM(ConnectionBreak) AS ConnectionBreak, SUM(UncureGlue) AS UncureGlue, SUM(ExcessiveGlue) AS ExcessiveGlue, SUM(OverUnderWght) AS OverUnderWght, SUM(BGrade) AS BGrade, SUM(Rejection) AS Rejection, LineName, LineID, SUM(DisColor) AS DisColor, SUM(LogoSmearing) AS LogoSmearing, SUM(LogoDoubling) AS LogoDoubling, SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots,
          SUM(Smearing) AS Smearing,
          SUM(unevenBallSurface) AS unevenBallSurface,
          SUM(unshapecut) AS unshapecut,
          SUM(zigzagedge) AS zigzagedge,
          SUM(cuttingpanel) AS cuttingpanel,
          SUM(heavyprintdefects) AS heavyprintdefects,
          SUM(NewTouching) AS NewTouching,
          SUM(printmissallignament) AS printmissallignament,
          SUM(anymisprint) AS anymisprint,
          SUM(colourShape) AS colourShape,
          SUM(wrongartwork) AS wrongartwork,
          SUM(materialdefects) AS materialdefects,
          SUM(newopenSeam) AS newopenSeam,
          SUM(seamoverlapping) AS seamoverlapping,
          SUM(wrinkles) AS wrinkles,
          SUM(excussglue) AS excussglue,
          SUM(missingglue) AS missingglue,
          SUM(pressoremark) AS pressoremark,
          SUM(airbubble) AS airbubble, SUM(Dirty) AS Dirty, Sum(pass) as pass,')
                ->from('View_Amb_DayWise_Article_Wise')
                ->where('DateName >=', $start_date)
                ->where('DateName <=', $end_date)
                ->where('ArtCode', $code)
                ->where('BallType', 'FreshBall')
                ->group_by('ArtCode, LineName, LineID, DateName,ArtSize')
                ->order_by('LineID')
                ->get()
                ->result();
        } else if ($processID == 2) {
            return $this->db->select('DateName,ArtCode, ArtSize,SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(Fail) AS Fail, SUM(PanelDMG) AS PanelDMG, SUM(OverLap) AS OverLap, SUM(ZigZagSeam) AS ZigZagSeam, SUM(Wrinkle) AS Wrinkle,
          SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(OpenSeam) AS OpenSeam, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching,
          SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(PUC) AS PUC, SUM(SeamClosingGlue) AS SeamClosingGlue, SUM(StraightCut) AS StraightCut, SUM(CuttingResidual) AS CuttingResidual,
          SUM(ConnectionBreak) AS ConnectionBreak, SUM(UncureGlue) AS UncureGlue, SUM(ExcessiveGlue) AS ExcessiveGlue, SUM(Dirty) AS Dirty, SUM(BGrade) AS BGrade, SUM(Rejection) AS Rejection, LineName,
          SUM(DisColor) AS DisColor, SUM(LogoSmearing) AS LogoSmearing, SUM(LogoDoubling) AS LogoDoubling,
           SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots, SUM(Smearing) AS Smearing,
           SUM(unevenBallSurface) AS unevenBallSurface,
           SUM(unshapecut) AS unshapecut,
           SUM(zigzagedge) AS zigzagedge,
           SUM(cuttingpanel) AS cuttingpanel,
           SUM(heavyprintdefects) AS heavyprintdefects,
           SUM(NewTouching) AS NewTouching,
           SUM(printmissallignament) AS printmissallignament,
           SUM(anymisprint) AS anymisprint,
           SUM(colourShape) AS colourShape,
           SUM(wrongartwork) AS wrongartwork,
           SUM(materialdefects) AS materialdefects,
           SUM(newopenSeam) AS newopenSeam,
           SUM(seamoverlapping) AS seamoverlapping,
           SUM(wrinkles) AS wrinkles,
           SUM(excussglue) AS excussglue,
           SUM(missingglue) AS missingglue,
           SUM(pressoremark) AS pressoremark,
           SUM(airbubble) AS airbubble, Sum(pass) as pass,')
                ->from('View_AMB_Packing_DAywise_Article')
                ->where('DateName >=', $start_date)
                ->where('DateName <=', $end_date)
                ->where('ArtCode', $code)

                ->group_by('ArtCode, LineName, LineID, DateName,ArtSize')
                ->order_by('LineID')
                ->get()
                ->result();
        }
    }
    public function rpt_amb_datewise_article_Art_RP($start_date, $end_date, $code)
    {

        return $this->db->select('DateName, ArtCode,ArtSize, SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass,
             SUM(Fail) AS Fail, SUM(PanelDMG) AS PanelDMG, SUM(RPass) AS RPass,SUM(OverLap) AS OverLap, SUM(ZigZagSeam) AS ZigZagSeam,
              SUM(Wrinkle) AS Wrinkle,
          SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(OpenSeam) AS OpenSeam, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching,
          SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(PUC) AS PUC, SUM(SeamClosingGlue) AS SeamClosingGlue, SUM(StraightCut) AS StraightCut, SUM(CuttingResidual) AS CuttingResidual,
          SUM(ConnectionBreak) AS ConnectionBreak, SUM(UncureGlue) AS UncureGlue, SUM(ExcessiveGlue) AS ExcessiveGlue, SUM(OverUnderWght) AS OverUnderWght, SUM(BGrade) AS BGrade, SUM(Rejection) AS Rejection, LineName, LineID, SUM(DisColor) AS DisColor, SUM(LogoSmearing) AS LogoSmearing, SUM(LogoDoubling) AS LogoDoubling, SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots,
          SUM(Smearing) AS Smearing,
          SUM(unevenBallSurface) AS unevenBallSurface,
          SUM(unshapecut) AS unshapecut,
          SUM(zigzagedge) AS zigzagedge,
          SUM(cuttingpanel) AS cuttingpanel,
          SUM(heavyprintdefects) AS heavyprintdefects,
          SUM(NewTouching) AS NewTouching,
          SUM(printmissallignament) AS printmissallignament,
          SUM(anymisprint) AS anymisprint,
          SUM(colourShape) AS colourShape,
          SUM(wrongartwork) AS wrongartwork,
          SUM(materialdefects) AS materialdefects,
          SUM(newopenSeam) AS newopenSeam,
          SUM(seamoverlapping) AS seamoverlapping,
          SUM(wrinkles) AS wrinkles,
          SUM(excussglue) AS excussglue,
          SUM(missingglue) AS missingglue,
          SUM(pressoremark) AS pressoremark,
          SUM(airbubble) AS airbubble, Sum(pass) as pass')
            ->from('View_Amb_DayWise_Article_Wise')
            ->where('DateName >=', $start_date)
            ->where('DateName <=', $end_date)
            ->where('ArtCode', $code)
            ->where('BallType', 'RepairPass')
            ->group_by('ArtCode, LineName, LineID, DateName,ArtSize')
            ->order_by('LineID')
            ->get()
            ->result();
    }
    public function rpt_amb_datewise_article_Art_RF($start_date, $end_date, $code)
    {

        return $this->db->select('DateName, ArtCode,ArtSize, SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(Fail) AS Fail, SUM(PanelDMG) AS PanelDMG, SUM(OverLap) AS OverLap, SUM(ZigZagSeam) AS ZigZagSeam, SUM(Wrinkle) AS Wrinkle,
          SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(RPass) AS RPass,SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(OpenSeam) AS OpenSeam, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching,
          SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(PUC) AS PUC, SUM(SeamClosingGlue) AS SeamClosingGlue, SUM(StraightCut) AS StraightCut, SUM(CuttingResidual) AS CuttingResidual,
          SUM(ConnectionBreak) AS ConnectionBreak, SUM(UncureGlue) AS UncureGlue, SUM(ExcessiveGlue) AS ExcessiveGlue, SUM(OverUnderWght) AS OverUnderWght, SUM(BGrade) AS BGrade, SUM(Rejection) AS Rejection, LineName, LineID, SUM(DisColor) AS DisColor, SUM(LogoSmearing) AS LogoSmearing, SUM(LogoDoubling) AS LogoDoubling, SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots,
          SUM(Smearing) AS Smearing,
          SUM(unevenBallSurface) AS unevenBallSurface,
          SUM(unshapecut) AS unshapecut,
          SUM(zigzagedge) AS zigzagedge,
          SUM(cuttingpanel) AS cuttingpanel,
          SUM(heavyprintdefects) AS heavyprintdefects,
          SUM(NewTouching) AS NewTouching,
          SUM(printmissallignament) AS printmissallignament,
          SUM(anymisprint) AS anymisprint,
          SUM(colourShape) AS colourShape,
          SUM(wrongartwork) AS wrongartwork,
          SUM(materialdefects) AS materialdefects,
          SUM(newopenSeam) AS newopenSeam,
          SUM(seamoverlapping) AS seamoverlapping,
          SUM(wrinkles) AS wrinkles,
          SUM(excussglue) AS excussglue,
          SUM(missingglue) AS missingglue,
          SUM(pressoremark) AS pressoremark,
          SUM(airbubble) AS airbubble, Sum(pass) as pass,')
            ->from('View_Amb_DayWise_Article_Wise')
            ->where('DateName >=', $start_date)
            ->where('DateName <=', $end_date)
            ->where('ArtCode', $code)
            ->where('BallType', 'RepairFail')
            ->group_by('ArtCode, LineName, LineID, DateName,ArtSize')
            ->order_by('LineID')
            ->get()
            ->result();
    }
    public function rpt_amb_datewise_RF($start_date, $end_date)
    {

        return $this->db->select('DateName, SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(Fail) AS Fail, SUM(PanelDMG) AS PanelDMG, SUM(OverLap) AS OverLap, SUM(ZigZagSeam) AS ZigZagSeam, SUM(Wrinkle) AS Wrinkle,
          SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(RPass) AS RPass,SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(OpenSeam) AS OpenSeam, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching,
          SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(PUC) AS PUC, SUM(SeamClosingGlue) AS SeamClosingGlue, SUM(StraightCut) AS StraightCut, SUM(CuttingResidual) AS CuttingResidual,
          SUM(ConnectionBreak) AS ConnectionBreak, SUM(UncureGlue) AS UncureGlue, SUM(ExcessiveGlue) AS ExcessiveGlue, SUM(OverUnderWght) AS OverUnderWght, SUM(BGrade) AS BGrade, SUM(Rejection) AS Rejection, LineName, LineID, SUM(DisColor) AS DisColor, SUM(LogoSmearing) AS LogoSmearing, SUM(LogoDoubling) AS LogoDoubling, SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots,
          SUM(Smearing) AS Smearing,
          SUM(unevenBallSurface) AS unevenBallSurface,
          SUM(unshapecut) AS unshapecut,
          SUM(zigzagedge) AS zigzagedge,
          SUM(cuttingpanel) AS cuttingpanel,
          SUM(heavyprintdefects) AS heavyprintdefects,
          SUM(NewTouching) AS NewTouching,
          SUM(printmissallignament) AS printmissallignament,
          SUM(anymisprint) AS anymisprint,
          SUM(colourShape) AS colourShape,
          SUM(wrongartwork) AS wrongartwork,
          SUM(materialdefects) AS materialdefects,
          SUM(newopenSeam) AS newopenSeam,
          SUM(seamoverlapping) AS seamoverlapping,
          SUM(wrinkles) AS wrinkles,
          SUM(excussglue) AS excussglue,
          SUM(missingglue) AS missingglue,
          SUM(pressoremark) AS pressoremark,
          SUM(airbubble) AS airbubble, Sum(pass) as pass,')
            ->from('View_Amb_DayWise_Article_Wise')
            ->where('DateName >=', $start_date)
            ->where('DateName <=', $end_date)
            ->where('BallType', 'RepairFail')
            ->group_by(' LineName, LineID, DateName')
            ->order_by('LineID')
            ->get()
            ->result();
    }
    public function rpt_amb_datewise_LineWise_RF($start_date, $end_date, $LineID)
    {

        return $this->db->select('DateName, SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(Fail) AS Fail, SUM(PanelDMG) AS PanelDMG, SUM(OverLap) AS OverLap, SUM(ZigZagSeam) AS ZigZagSeam, SUM(Wrinkle) AS Wrinkle,
          SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(RPass) AS RPass,SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(OpenSeam) AS OpenSeam, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching,
          SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(PUC) AS PUC, SUM(SeamClosingGlue) AS SeamClosingGlue, SUM(StraightCut) AS StraightCut, SUM(CuttingResidual) AS CuttingResidual,
          SUM(ConnectionBreak) AS ConnectionBreak, SUM(UncureGlue) AS UncureGlue, SUM(ExcessiveGlue) AS ExcessiveGlue, SUM(OverUnderWght) AS OverUnderWght, SUM(BGrade) AS BGrade, SUM(Rejection) AS Rejection, LineName, LineID, SUM(DisColor) AS DisColor, SUM(LogoSmearing) AS LogoSmearing, SUM(LogoDoubling) AS LogoDoubling, SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots,
          SUM(Smearing) AS Smearing,
          SUM(unevenBallSurface) AS unevenBallSurface,
          SUM(unshapecut) AS unshapecut,
          SUM(zigzagedge) AS zigzagedge,
          SUM(cuttingpanel) AS cuttingpanel,
          SUM(heavyprintdefects) AS heavyprintdefects,
          SUM(NewTouching) AS NewTouching,
          SUM(printmissallignament) AS printmissallignament,
          SUM(anymisprint) AS anymisprint,
          SUM(colourShape) AS colourShape,
          SUM(wrongartwork) AS wrongartwork,
          SUM(materialdefects) AS materialdefects,
          SUM(newopenSeam) AS newopenSeam,
          SUM(seamoverlapping) AS seamoverlapping,
          SUM(wrinkles) AS wrinkles,
          SUM(excussglue) AS excussglue,
          SUM(missingglue) AS missingglue,
          SUM(pressoremark) AS pressoremark,
          SUM(airbubble) AS airbubble, Sum(pass) as pass,')
            ->from('View_Amb_DayWise_Article_Wise')
            ->where('DateName >=', $start_date)
            ->where('DateName <=', $end_date)
            ->where('LineID=', $LineID)
            ->where('BallType', 'RepairFail')
            ->group_by(' LineName, LineID, DateName')
            ->order_by('LineID')
            ->get()
            ->result();
    }
    public function rpt_amb_datewise_article_RP($start_date, $end_date, $code)
    {

        return $this->db->select('DateName, ArtCode,ArtSize, SUM(TotalChecked) AS TotalChecked, SUM(Pass) AS Pass, SUM(Fail) AS Fail, SUM(PanelDMG) AS PanelDMG, SUM(OverLap) AS OverLap, SUM(ZigZagSeam) AS ZigZagSeam, SUM(Wrinkle) AS Wrinkle,
          SUM(ArtWork) AS ArtWork, SUM(UnbondedPanels) AS UnbondedPanels, SUM(SingleOpenStrip) AS SingleOpenStrip, SUM(OpenSeam) AS OpenSeam, SUM(PanelCavity) AS PanelCavity, SUM(Touching) AS Touching,
          SUM(OtherPrintingIssue) AS OtherPrintingIssue, SUM(CoreCavity) AS CoreCavity, SUM(PUC) AS PUC, SUM(SeamClosingGlue) AS SeamClosingGlue, SUM(StraightCut) AS StraightCut, SUM(CuttingResidual) AS CuttingResidual,
          SUM(ConnectionBreak) AS ConnectionBreak, SUM(UncureGlue) AS UncureGlue, SUM(ExcessiveGlue) AS ExcessiveGlue, SUM(OverUnderWght) AS OverUnderWght, SUM(BGrade) AS BGrade, SUM(Rejection) AS Rejection, LineName, LineID, SUM(DisColor) AS DisColor, SUM(LogoSmearing) AS LogoSmearing, SUM(LogoDoubling) AS LogoDoubling, SUM(BarcodeMissing) AS BarcodeMissing, SUM(LargerSpots) AS LargerSpots,
          SUM(Smearing) AS Smearing,
          SUM(unevenBallSurface) AS unevenBallSurface,
          SUM(unshapecut) AS unshapecut,
          SUM(zigzagedge) AS zigzagedge,
          SUM(cuttingpanel) AS cuttingpanel,
          SUM(heavyprintdefects) AS heavyprintdefects,
          SUM(NewTouching) AS NewTouching,
          SUM(printmissallignament) AS printmissallignament,
          SUM(anymisprint) AS anymisprint,
          SUM(colourShape) AS colourShape,
          SUM(wrongartwork) AS wrongartwork,
          SUM(materialdefects) AS materialdefects,
          SUM(newopenSeam) AS newopenSeam,
          SUM(seamoverlapping) AS seamoverlapping,
          SUM(wrinkles) AS wrinkles,
          SUM(excussglue) AS excussglue,
          SUM(missingglue) AS missingglue,
          SUM(pressoremark) AS pressoremark,
          SUM(airbubble) AS airbubble, Sum(pass) as pass,')
            ->from('View_Amb_DayWise_Article_Wise')
            ->where('DateName >=', $start_date)
            ->where('DateName <=', $end_date)
            ->where('ArtCode', $code)
            ->where('BallType', 'FreshBall')
            ->group_by('ArtCode, LineName, LineID, DateName,ArtSize')
            ->order_by('LineID')
            ->get()
            ->result();
    }

    public function getArticles($FactoryCode)
    {
        $this->db->select('dbo.tbl_Pro_Article.ArtCode')
            ->from('dbo.tbl_Pro_Article')
            ->join('dbo.tbl_Pro_Model', 'dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_Model.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_Model.ModelID')
            ->join('dbo.tbl_Pro_PO', 'dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_PO.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_PO.ModelID AND
               dbo.tbl_Pro_Article.ArtID = dbo.tbl_Pro_PO.ArtID AND dbo.tbl_Pro_Model.ClientID = dbo.tbl_Pro_PO.ClientID AND
               dbo.tbl_Pro_Model.ModelID = dbo.tbl_Pro_PO.ModelID')
            ->where('dbo.tbl_Pro_Model.ClientID', 1)
            ->where('dbo.tbl_Pro_PO.OrderType', "Original Order")
            ->where('dbo.tbl_Pro_PO.SecondConfDate >', "2019-01-01")
            ->group_by('dbo.tbl_Pro_Article.ArtCode');

        if ($FactoryCode == 'B34002' || $FactoryCode == 'B34003' || $FactoryCode == 'B34004') {
            return $this->db->where_in('dbo.tbl_Pro_Model.FactoryCode', ["B34002", "B34003", "B34004"])
                ->get()
                ->result();
        } else {
            return $this->db->where('dbo.tbl_Pro_Model.FactoryCode', $FactoryCode)
                ->get()
                ->result();
        }
    }

    public function getLFB()
    {

        return $this->db->select(" ProcessID, name, status")
            ->from("dbo.tbl_LFBProcess")
            ->where("status = 1")
            ->get()
            ->result();
    }
    public function get_tm_ball_forming($start_date, $end_date, $fc)
    {
        return $this->db->select("DailyDate, Pass, Fail, FactoryCode, CheckedQty, PanelDMG, Bubble, Alignment, Corner, Touching, WrongArtWork, NozzleMove, Overlapping, OverLaping, Cavity, UnBondedPanels, TMRollNo, BGrade, 
         LeakPuncture, Wrinkle, Moldmark, Dirty, Indent, Printing, OpenSeam")
            ->from(' View__TM_Rpt_Ball_forming')
            ->where('DailyDate >=', $start_date)
            ->where('DailyDate <=', $end_date)
            ->where('FactoryCode', $fc)
            //     ->get_compiled_select();
            ->get()
            ->result();
    }

    public function get_tm_ball_forming_sum($start_date, $end_date, $fc)
    {
        return $this->db->select("SUM(Pass) AS Pass, SUM(Fail) AS Fail, SUM(CheckedQty) AS CheckedQty, SUM(PanelDMG) AS PanelDMG, 
         SUM(Bubble) AS Bubble, SUM(Alignment) AS Alignment, SUM(Corner) 
         AS Corner, SUM(Touching) AS Touching, SUM(WrongArtWork) AS WrongArtWork, SUM(NozzleMove) AS NozzleMove, 
         SUM(Overlapping) AS Overlapping, SUM(OverLaping) AS OverLaping, SUM(Cavity) AS Cavity, 
         SUM(UnBondedPanels) AS UnBondedPanels, SUM(TMRollNo) AS TMRollNo, SUM(BGrade) AS BGrade, 
         SUM(LeakPuncture) AS LeakPuncture, SUM(Wrinkle) AS Wrinkle, SUM(Moldmark) AS Moldmark, SUM(Dirty) AS Dirty, 
         SUM(Indent) AS Indent,SUM(Printing) AS Printing,SUM(OpenSeam) AS OpenSeam")
            ->from(' View__TM_Rpt_Ball_forming')
            ->where('DailyDate >=', $start_date)
            ->where('DailyDate <=', $end_date)
            ->where('FactoryCode', $fc)
            //     ->get_compiled_select();
            ->get()
            ->result();
    }

    public function get_tm_final_qc($start_date, $end_date, $fc)
    {
        return $this->db->select("SUM(PassQty + FailQty) AS Checked, SUM(PassQty) AS Pass, SUM(FailQty) AS FailQty, SUM(BGrade) AS BGrade, SUM(Printing) AS Printing, SUM(PanelDefect) AS PanelDefect, SUM(Cavity) AS Cavity, SUM(DShape) 
     AS DShape, SUM(Touching) AS Touching, SUM(ArtWork) AS ArtWork, SUM(Puncture) AS Puncture, SUM(Dirty) AS Dirty, SUM(SeamAlligment) AS SeamAlligment, SUM(LeakPuncture) AS LeakPuncture, SUM(Wrinkle) AS Wrinkle, 
     SUM(Moldmark) AS Moldmark, SUM(PrintingAlligment) AS PrintingAlligment, SUM(Dull) AS Dull, SUM(Indent) AS Indent, SUM(Overlaping) AS Overlaping, SUM(UnderSize) AS UnderSize, SUM(UnderWeight) AS UnderWeight, 
     SUM(OverWeight) AS OverWeight, SUM(OverSize) AS OverSize, EntryDate As DailyDate,SUM(AirBubble) AS AirBubble")
            ->from('dbo.View_FinalQC_Rebotics')
            ->where('EntryDate  >=', $start_date)
            ->where('EntryDate  <=', $end_date)
            ->where('FactoryCode', $fc)
            ->group_by("EntryDate , CASE WHEN View_FinalQC_Rebotics.FactoryCode = '' THEN 'B34002' ELSE FactoryCode END")

            ->get()
            ->result();
    }
    public function get_tm_final_qc_sum($start_date, $end_date, $fc)
    {
        return $this->db->select("SUM(PassQty + FailQty) AS Checked, SUM(PassQty) AS Pass, SUM(FailQty) AS FailQty, SUM(BGrade) AS BGrade, SUM(Printing) AS Printing, SUM(PanelDefect) AS PanelDefect, SUM(Cavity) AS Cavity, SUM(DShape) 
     AS DShape, SUM(Touching) AS Touching, SUM(ArtWork) AS ArtWork, SUM(Puncture) AS Puncture, SUM(Dirty) AS Dirty, SUM(SeamAlligment) AS SeamAlligment, SUM(LeakPuncture) AS LeakPuncture, SUM(Wrinkle) AS Wrinkle, 
     SUM(Moldmark) AS Moldmark, SUM(PrintingAlligment) AS PrintingAlligment, SUM(Dull) AS Dull, SUM(Indent) AS Indent, SUM(Overlaping) AS Overlaping, SUM(UnderSize) AS UnderSize, SUM(UnderWeight) AS UnderWeight, 
     SUM(OverWeight) AS OverWeight, SUM(OverSize) AS OverSize, SUM(AirBubble) AS AirBubble")
            ->from('View_FinalQC_Rebotics')
            ->where('EntryDate >=', $start_date)
            ->where('EntryDate <=', $end_date)
            ->where('FactoryCode', $fc)
            ->get()
            ->result();
    }
    public function get_TM_Po_Sum($start_date, $end_date, $fc)
    {

        return $this->db->select("EntryDate, FactoryCode, POCode, ArtCode, ArtSize, OrderQty, SUM(Inspected) AS Inspected, SUM(Pass) AS Pass, SUM(Fail) AS Fail
            ")
            ->from('view_TM_FinalQC_Po_Wise_SUm')
            ->where('EntryDate >=', $start_date)
            ->where('EntryDate <=', $end_date)
            ->where('FactoryCode', $fc)
            ->group_by('POCode, EntryDate, ArtCode, ArtSize, OrderQty, FactoryCode')
            ->get()
            ->result();
    }
    public function get_tm_final_qc_article_datewise($start_date, $end_date, $fc, $art)
    {
        $this->db->select("ArtCode,ArtSize,EntryDate As DateName,SUM(PassQty + FailQty) AS Inspected, SUM(PassQty) AS PassQty, SUM(FailQty) AS FailQty, SUM(BGrade) AS BGrade, SUM(Printing) AS Printing, SUM(PanelDefect) AS PanelDefect, SUM(Cavity) AS Cavity, SUM(DShape) 
        AS DShape, SUM(Touching) AS Touching, SUM(ArtWork) AS ArtWork, SUM(Puncture) AS Puncture, SUM(Dirty) AS Dirty, SUM(SeamAlligment) AS SeamAlligment, SUM(LeakPuncture) AS LeakPuncture, SUM(Wrinkle) AS Wrinkle, 
        SUM(Moldmark) AS Moldmark, SUM(PrintingAlligment) AS PrintingAlligment, SUM(Dull) AS Dull, SUM(Indent) AS Indent, SUM(Overlaping) AS Overlaping, SUM(UnderSize) AS UnderSize, SUM(UnderWeight) AS UnderWeight, 
        SUM(OverWeight) AS OverWeight, SUM(OverSize) AS OverSize, SUM(AirBubble) AS AirBubble")
            ->from('dbo.View_FinalQC_Rebotics')
            ->where('EntryDate >=', $start_date)
            ->where('EntryDate <=', $end_date)
            ->where('FactoryCode', $fc)
            ->group_by('ArtCode, EntryDate, ArtSize')
            ->order_by("EntryDate");

        if ($art == 'all') {
            return $this->db->get()
                ->result();
        } else {
            return $this->db->where('ArtCode', $art)
                ->get()
                ->result();
        }
    }

    public function get_tm_final_qc_article_datewise_sum($start_date, $end_date, $fc, $art)
    {
        if ($art == 'all') {
            return $this->db->select("SUM(PassQty + FailQty) AS Inspected, SUM(PassQty) AS PassQty, SUM(FailQty) AS FailQty, SUM(BGrade) AS BGrade, SUM(Printing) AS Printing, SUM(PanelDefect) AS PanelDefect, SUM(Cavity) AS Cavity, SUM(DShape) 
            AS DShape, SUM(Touching) AS Touching, SUM(ArtWork) AS ArtWork, SUM(Puncture) AS Puncture, SUM(Dirty) AS Dirty, SUM(SeamAlligment) AS SeamAlligment, SUM(LeakPuncture) AS LeakPuncture, SUM(Wrinkle) AS Wrinkle, 
            SUM(Moldmark) AS Moldmark, SUM(PrintingAlligment) AS PrintingAlligment, SUM(Dull) AS Dull, SUM(Indent) AS Indent, SUM(Overlaping) AS Overlaping, SUM(UnderSize) AS UnderSize, SUM(UnderWeight) AS UnderWeight, 
            SUM(OverWeight) AS OverWeight, SUM(OverSize) AS OverSize, SUM(AirBubble) AS AirBubble")
                ->from('dbo.View_FinalQC_Rebotics')
                ->where('EntryDate >=', $start_date)
                ->where('EntryDate <=', $end_date)
                ->where('FactoryCode', $fc)
                ->get()
                ->result();
        } else {
            return $this->db->select("SUM(PassQty + FailQty) AS Inspected, SUM(PassQty) AS PassQty, SUM(FailQty) AS FailQty, SUM(BGrade) AS BGrade, SUM(Printing) AS Printing, SUM(PanelDefect) AS PanelDefect, SUM(Cavity) AS Cavity, SUM(DShape) 
            AS DShape, SUM(Touching) AS Touching, SUM(ArtWork) AS ArtWork, SUM(Puncture) AS Puncture, SUM(Dirty) AS Dirty, SUM(SeamAlligment) AS SeamAlligment, SUM(LeakPuncture) AS LeakPuncture, SUM(Wrinkle) AS Wrinkle, 
            SUM(Moldmark) AS Moldmark, SUM(PrintingAlligment) AS PrintingAlligment, SUM(Dull) AS Dull, SUM(Indent) AS Indent, SUM(Overlaping) AS Overlaping, SUM(UnderSize) AS UnderSize, SUM(UnderWeight) AS UnderWeight, 
            SUM(OverWeight) AS OverWeight, SUM(OverSize) AS OverSize, SUM(AirBubble) AS AirBubble")
                ->from('dbo.View_FinalQC_Rebotics')
                ->where('EntryDate >=', $start_date)
                ->where('EntryDate <=', $end_date)
                ->where('FactoryCode', $fc)
                ->where('ArtCode', $art)
                ->get()
                ->result();
        }
    }

    public function get_tm_ball_forming_article_datewise($start_date, $end_date, $fc, $art)
    {
        $this->db->select("DateName, ArtCode, SUM(PassQty) AS PassQty, SUM(FailQty) AS FailQty, SUM(CheckedQty) AS Inspected, SUM(PanelDMG) AS PanelDMG, SUM(Bubble) AS Bubble, SUM(Alignment) AS Alignment, SUM(Corner) AS Corner, 
            SUM(Touching) AS Touching, SUM(WrongArtWork) AS WrongArtWork, SUM(NozzleMove) AS NozzleMove, SUM(Overlapping) AS Overlapping, SUM(Cavity) AS Cavity, SUM(UnBondedPanels) AS UnBondedPanels, SUM(TMRollNo) 
            AS TMRollNo, SUM(BGrade) AS BGrade, SUM(LeakPuncture) AS LeakPuncture,
             SUM(Wrinkle) AS Wrinkle, SUM(Moldmark) AS Moldmark, SUM(Dirty) AS Dirty, 
             SUM(Printing) AS Printing, SUM(OpenSeam) AS OpenSeam, 
            SUM(Indent) AS Indent, ArtSize, FactoryCode")
            ->from('View_TM_Forming_Articles')
            ->where('DateName >=', $start_date)
            ->where('DateName <=', $end_date)
            ->where('FactoryCode', $fc)
            ->group_by('ArtCode,ArtSize, FactoryCode, DateName')
            ->order_by("DateName");

        if ($art == 'all') {
            return $this->db->get()
                ->result();
        } else {
            return $this->db->where("ArtCode", $art)
                ->get()
                ->result();
        }
    }

    public function get_tm_ball_forming_article_datewise_sum($start_date, $end_date, $fc, $art)
    {
        $this->db->select("SUM(PassQty) AS PassQty, SUM(FailQty) AS FailQty, SUM(CheckedQty) AS Inspected, SUM(PanelDMG) AS PanelDMG, SUM(Bubble) AS Bubble, SUM(Alignment) AS Alignment, SUM(Corner) AS Corner, 
		SUM(Touching) AS Touching, SUM(WrongArtWork) AS WrongArtWork, SUM(NozzleMove) AS NozzleMove, SUM(Overlapping) AS Overlapping, SUM(Cavity) AS Cavity, SUM(UnBondedPanels) AS UnBondedPanels, SUM(TMRollNo) 
		AS TMRollNo, SUM(BGrade) AS BGrade, SUM(LeakPuncture) AS LeakPuncture, SUM(Wrinkle) AS Wrinkle, SUM(Moldmark) AS Moldmark, SUM(Dirty) AS Dirty, SUM(Printing) AS Printing, SUM(OpenSeam) AS OpenSeam, 
		SUM(Indent) AS Indent")
            ->from('View_TM_Forming_Articles')
            ->where('DateName >=', $start_date)
            ->where('DateName <=', $end_date)
            ->where('FactoryCode', $fc);

        if ($art == 'all') {
            return $this->db->get()
                ->result();
        } else {
            return $this->db->where("ArtCode", $art)
                ->get()
                ->result();
        }
    }

    public function getLines($fc)
    {
        $this->db->select("LineID, LineName")
            ->from("tbl_PC_AMB_Line");

        if ($fc == 'B34006') {
            return $this->db->where("LineID >=", 3)
                ->where("LineID <=", 18)
                ->get()
                ->result();
        } else {
            return $this->db->get()
                ->result();
        }
    }


    public function get_ms_summary($line, $start_date, $end_date)
    {
        $this->db->select('TOP (100) PERCENT SUM(dbo.View_Union_MS.OpenComposit) AS OpenComposit, SUM(dbo.View_Union_MS.DailyComposit) AS DailyComposit, 
			SUM(dbo.View_Union_MS.CompositCornersEdges) AS CompositCornersEdges, SUM(dbo.View_Union_MS.LooseStitch) AS LooseStitch, SUM(dbo.View_Union_MS.TornStitch) 
			AS TornStitch, SUM(dbo.View_Union_MS.MissStitch) AS MissStitch, SUM(dbo.View_Union_MS.CornersOut) AS CornersOut, SUM(dbo.View_Union_MS.ZigZagStitch) AS ZigZagStitch, 
			SUM(dbo.View_Union_MS.WrongArtWork) AS WrongArtWork, SUM(dbo.View_Union_MS.WrongSewingMargin) AS WrongSewingMargin, SUM(dbo.View_Union_MS.MaterialTorn) 
			AS MaterialTorn, SUM(dbo.View_Union_MS.DisColor) AS DisColor, SUM(dbo.View_Union_MS.LamProblem) AS LamProblem, SUM(dbo.View_Union_MS.TreatOff) AS TreatOff, 
			SUM(dbo.View_Union_MS.Smearing) AS Smearing, SUM(dbo.View_Union_MS.MissPrinting) AS MissPrinting, SUM(dbo.View_Union_MS.NozleMove) AS NozleMove, 
			SUM(dbo.View_Union_MS.LeakPuncture)  AS LeakPuncture, SUM(dbo.View_Union_MS.BGrade) AS BGrade, dbo.tbl_PC_AMB_Line.LineName, Sum(dbo.View_Union_MS.TotalChecked) As TotalChecked,
			dbo.tbl_PC_AMB_Line.LineID, SUM(dbo.View_Union_MS.UnHold) AS UnHold, SUM(dbo.View_Union_MS.NeedleMark) AS NeedleMark, SUM(dbo.View_Union_MS.VolPanelAlligment) 
			AS VolPanelAlligment,SUM(CompoitMissPrint) as CompoitMissPrint,
             SUM(dbo.View_Union_MS.CutMark) AS CutMark, SUM(dbo.View_Union_MS.Fail) AS Fail, SUM(dbo.View_Union_MS.Pass) AS Pass, DateName')
            ->from('dbo.View_Union_MS')
            ->where('DateName >= ', $start_date)
            ->where('DateName <= ', $end_date)
            ->where('TotalChecked > ', 0)
            ->join('dbo.tbl_Inv_Tran_Date', 'dbo.View_Union_MS.DayNo = dbo.tbl_Inv_Tran_Date.DayNo')
            ->join('dbo.tbl_PC_AMB_Line', 'dbo.View_Union_MS.Line = dbo.tbl_PC_AMB_Line.LineID')
            ->group_by('dbo.tbl_PC_AMB_Line.LineName, dbo.tbl_PC_AMB_Line.LineID,DateName')
            ->Order_by('LineID');

        if ($line == 'all') {
            return $this->db->get()
                ->result();
        } else {
            return $this->db->where('dbo.View_Union_MS.Line', $line)
                ->get()
                ->result();
        }
    }

    public function get_ms_summary_sum($line, $start_date, $end_date)
    {
        $select = "TOP (100) PERCENT SUM(dbo.View_Union_MS.OpenComposit) AS OpenComposit, SUM(dbo.View_Union_MS.DailyComposit) AS DailyComposit, 
		SUM(dbo.View_Union_MS.CompositCornersEdges) AS CompositCornersEdges, SUM(dbo.View_Union_MS.LooseStitch) AS LooseStitch, SUM(dbo.View_Union_MS.TornStitch) 
		AS TornStitch, SUM(dbo.View_Union_MS.MissStitch) AS MissStitch, SUM(dbo.View_Union_MS.CornersOut) AS CornersOut, SUM(dbo.View_Union_MS.ZigZagStitch) AS ZigZagStitch, 
		SUM(dbo.View_Union_MS.WrongArtWork) AS WrongArtWork, SUM(dbo.View_Union_MS.WrongSewingMargin) AS WrongSewingMargin, SUM(dbo.View_Union_MS.MaterialTorn) 
		AS MaterialTorn, SUM(dbo.View_Union_MS.DisColor) AS DisColor, SUM(dbo.View_Union_MS.LamProblem) AS LamProblem, SUM(dbo.View_Union_MS.TreatOff) AS TreatOff, 
		SUM(dbo.View_Union_MS.Smearing) AS Smearing, SUM(dbo.View_Union_MS.MissPrinting) AS MissPrinting, SUM(dbo.View_Union_MS.NozleMove) AS NozleMove, 
		SUM(dbo.View_Union_MS.LeakPuncture) AS LeakPuncture, SUM(dbo.View_Union_MS.BGrade) AS BGrade, Sum(dbo.View_Union_MS.TotalChecked) As TotalChecked, SUM(dbo.View_Union_MS.UnHold) AS UnHold, SUM(dbo.View_Union_MS.NeedleMark) AS NeedleMark, SUM(dbo.View_Union_MS.VolPanelAlligment) 
		AS VolPanelAlligment, SUM(CompoitMissPrint) as CompoitMissPrint,SUM(dbo.View_Union_MS.CutMark) AS CutMark, SUM(dbo.View_Union_MS.Fail) AS Fail, SUM(dbo.View_Union_MS.Pass) AS Pass";
        $this->db->select($select)
            ->from('dbo.View_Union_MS')
            ->where('DateName >= ', $start_date)
            ->where('DateName <= ', $end_date)
            ->where('TotalChecked > ', 0)
            ->join('dbo.tbl_Inv_Tran_Date', 'dbo.View_Union_MS.DayNo = dbo.tbl_Inv_Tran_Date.DayNo')
            ->join('dbo.tbl_PC_AMB_Line', 'dbo.View_Union_MS.Line = dbo.tbl_PC_AMB_Line.LineID');

        if ($line == 'all') {
            return $this->db->get()->result();
        } else {
            return $this->db->where('dbo.View_Union_MS.Line', $line)
                ->get()
                ->result();
        }
    }
    // public function get_ms_summary_sum_All($line, $start_date, $end_date)
    // {
    // 	$select = "TOP (100) PERCENT SUM(dbo.View_Union_MS.OpenComposit) AS OpenComposit, SUM(dbo.View_Union_MS.DailyComposit) AS DailyComposit, 
    // 	SUM(dbo.View_Union_MS.CompositCornersEdges) AS CompositCornersEdges, SUM(dbo.View_Union_MS.LooseStitch) AS LooseStitch, SUM(dbo.View_Union_MS.TornStitch) 
    // 	AS TornStitch, SUM(dbo.View_Union_MS.MissStitch) AS MissStitch, SUM(dbo.View_Union_MS.CornersOut) AS CornersOut, SUM(dbo.View_Union_MS.ZigZagStitch) AS ZigZagStitch, 
    // 	SUM(dbo.View_Union_MS.WrongArtWork) AS WrongArtWork, SUM(dbo.View_Union_MS.WrongSewingMargin) AS WrongSewingMargin, SUM(dbo.View_Union_MS.MaterialTorn) 
    // 	AS MaterialTorn, SUM(dbo.View_Union_MS.DisColor) AS DisColor, SUM(dbo.View_Union_MS.LamProblem) AS LamProblem, SUM(dbo.View_Union_MS.TreatOff) AS TreatOff, 
    // 	SUM(dbo.View_Union_MS.Smearing) AS Smearing, SUM(dbo.View_Union_MS.MissPrinting) AS MissPrinting, SUM(dbo.View_Union_MS.NozleMove) AS NozleMove, 
    // 	SUM(dbo.View_Union_MS.LeakPuncture) AS LeakPuncture, SUM(dbo.View_Union_MS.BGrade) AS BGrade, Sum(dbo.View_Union_MS.TotalChecked) As TotalChecked, SUM(dbo.View_Union_MS.UnHold) AS UnHold, SUM(dbo.View_Union_MS.NeedleMark) AS NeedleMark, SUM(dbo.View_Union_MS.VolPanelAlligment) 
    // 	AS VolPanelAlligment, SUM(dbo.View_Union_MS.CutMark) AS CutMark, SUM(dbo.View_Union_MS.Fail) AS Fail, SUM(dbo.View_Union_MS.Pass) AS Pass";
    // 	$this->db->select($select)
    // 	->from('dbo.View_Union_MS')
    // 	->where('DateName >= ', $start_date)
    // 		->where('DateName <= ', $end_date)
    // 		->where('TotalChecked > ',0)
    // 		->join('dbo.tbl_Inv_Tran_Date', 'dbo.View_Union_MS.DayNo = dbo.tbl_Inv_Tran_Date.DayNo')
    // 		->join('dbo.tbl_PC_AMB_Line', 'dbo.View_Union_MS.Line = dbo.tbl_PC_AMB_Line.LineID');

    // 	if($line == 'all'){
    // 		return $this->db->get()->result();
    // 	}else{
    // 		return $this->db->where('dbo.View_Union_MS.Line', $line)
    // 		->get()
    // 		->result();
    // 	}

    // }


    public function get_ms_articlewise($art, $start_date, $end_date)
    {
        $this->db->select('Pass , TotalChecked, ArtCode, OpenComposit, DailyComposit, CompositCornersEdges, LooseStitch, TornStitch, MissStitch, CornersOut, ZigZagStitch, WrongArtWork, WrongSewingMargin, MaterialTorn, DisColor, 
			LamProblem, TreatOff, MissPrinting, Smearing, NozleMove, LeakPuncture, Unroundness, CutMark, Dirty, DevInCircum, UnderWght, OverWeight, internalAirPresure, BGrade, DateName, UnHold, NeedleMark, 
			VolPanelAlligment, ArtSize, CompoitMissPrint, LineName, Line, outPut, RepairReturn, Fail,CompoitMissPrint')
            ->from('View_MS_Article_Wise_Sum')
            ->where('DateName >= ', $start_date)
            ->where('DateName <= ', $end_date)
            ->Order_by('Line');
        if ($art == 'all') {
            return $this->db->get()
                ->result();
        } else {
            return $this->db->where('ArtCode', $art)
                ->get()
                ->result();
        }
    }

    public function get_ms_articlewise_sum($art, $start_date, $end_date)
    {
        $this->db->select('SUM(Pass) AS Pass, SUM(TotalChecked) AS TotalChecked, SUM(OpenComposit) AS OpenComposit, SUM(DailyComposit) AS DailyComposit, SUM(CompositCornersEdges) AS CompositCornersEdges, SUM(LooseStitch) 
			AS LooseStitch, SUM(TornStitch) AS TornStitch, SUM(MissStitch) AS MissStitch, SUM(CornersOut) AS CornersOut, SUM(ZigZagStitch) AS ZigZagStitch, SUM(WrongArtWork) AS WrongArtWork, SUM(WrongSewingMargin) 
			AS WrongSewingMargin, SUM(MaterialTorn) AS MaterialTorn, SUM(DisColor) AS DisColor, SUM(LamProblem) AS LamProblem, SUM(TreatOff) AS TreatOff, SUM(MissPrinting) AS MissPrinting, SUM(Smearing) AS Smearing, 
			SUM(NozleMove) AS NozleMove, SUM(LeakPuncture) AS LeakPuncture, SUM(Unroundness) AS Unroundness, SUM(CutMark) AS CutMark, SUM(Dirty) AS Dirty, SUM(DevInCircum) AS DevInCircum, SUM(UnderWght) 
			AS UnderWght, SUM(OverWeight) AS OverWeight, SUM(internalAirPresure) AS internalAirPresure, SUM(BGrade) AS BGrade, SUM(UnHold) AS UnHold, SUM(NeedleMark) AS NeedleMark, SUM(VolPanelAlligment) 
			AS VolPanelAlligment, SUM(CompoitMissPrint) as CompoitMissPrint,SUM(CompoitMissPrint) AS CompoitMissPrint, SUM(outPut) AS outPut, SUM(RepairReturn) AS RepairReturn,SUM(Fail) AS Fail')
            ->from('View_MS_Article_Wise_Sum')
            ->where('DateName >= ', $start_date)
            ->where('DateName <= ', $end_date);

        if ($art == 'all') {
            return $this->db->get()
                ->result();
        } else {
            return $this->db->where('ArtCode', $art)
                ->get()
                ->result();
        }
    }

    public function get_hs_articlewise($art, $start_date, $end_date)
    {
        $this->db->select('ArtCode, TotalChecked, PassQty, FailQty, DateName, Day, Month, Year, ZigZag, ArtWork, TornStitch, LooseStitch, UnStitched, OverStitch, LPS, FullPuncture, MissPanel, NozzleMove, NeedleMark, MakerDirty, BladderDrop, 
			LatexBladder, NozzleMoveInSalaBladder, PUBladder, LaminationProb, DisColor, ColorMark, CutMark, ThreadDiscolor, PrintingCrack, Smearing, SettingOut, FabricImpression, ShadeDiff, FactoryFaultDirty, 
			FactoryFaultBladderDrop, MatTorn, Others, JointProblem, Lamination, Dirty, Puncture, NozzelDrop, ArtSize, UnMold, Fail')
            ->from('View_HS_FinalOutPut')
            ->where('DateName >= ', $start_date)
            ->where('DateName <= ', $end_date);

        if ($art == 'all') {
            return $this->db->get()
                ->result();
        } else {
            return $this->db->where('ArtCode', $art)
                ->get()
                ->result();
        }
    }
    public function get_hs_articlewise_sum($art, $start_date, $end_date)
    {
        $this->db->select('SUM(TotalChecked) AS TotalChecked, SUM(PassQty) AS PassQty, SUM(FailQty) AS FailQty, SUM(ZigZag) AS ZigZag, SUM(TornStitch) AS TornStitch, SUM(LooseStitch) AS LooseStitch, SUM(UnStitched) AS UnStitched, 
			SUM(OverStitch) AS OverStitch, SUM(LPS) AS LPS, SUM(FullPuncture) AS FullPuncture, SUM(MissPanel) AS MissPanel, SUM(NozzleMove) AS NozzleMove, SUM(NeedleMark) AS NeedleMark, SUM(MakerDirty) AS MakerDirty, 
			SUM(BladderDrop) AS BladderDrop, SUM(LatexBladder) AS LatexBladder, SUM(NozzleMoveInSalaBladder) AS NozzleMoveInSalaBladder, SUM(PUBladder) AS PUBladder, SUM(LaminationProb) AS LaminationProb, 
			SUM(DisColor) AS DisColor, SUM(ColorMark) AS ColorMark, SUM(CutMark) AS CutMark, SUM(ThreadDiscolor) AS ThreadDiscolor, SUM(PrintingCrack) AS PrintingCrack, SUM(Smearing) AS Smearing, SUM(SettingOut) 
			AS SettingOut, SUM(FabricImpression) AS FabricImpression, SUM(ShadeDiff) AS ShadeDiff, SUM(FactoryFaultDirty) AS FactoryFaultDirty, SUM(FactoryFaultBladderDrop) AS FactoryFaultBladderDrop, SUM(MatTorn) AS MatTorn, 
			SUM(Others) AS Others, SUM(JointProblem) AS JointProblem, SUM(Lamination) AS Lamination, SUM(Dirty) AS Dirty, SUM(Puncture) AS Puncture, SUM(NozzelDrop) AS NozzelDrop, SUM(UnMold) AS UnMold, SUM(Fail) AS Fail, 
			SUM(ArtWork) AS ArtWork')
            ->from('View_HS_FinalOutPut')
            ->where('DateName >= ', $start_date)
            ->where('DateName <= ', $end_date);


        if ($art == 'all') {
            return $this->db->get()
                ->result();
        } else {
            return $this->db->where('ArtCode', $art)
                ->get()
                ->result();
        }
    }

    public function get_hs_summary($art, $start_date, $end_date)
    {
        $this->db->select('SUM(TotalChecked) AS TotalChecked, SUM(PassQty) AS PassQty, SUM(FailQty) AS FailQty, SUM(ZigZag) AS ZigZag, SUM(TornStitch) AS TornStitch, SUM(LooseStitch) AS LooseStitch, SUM(UnStitched) AS UnStitched, 
			SUM(OverStitch) AS OverStitch, SUM(LPS) AS LPS, SUM(FullPuncture) AS FullPuncture, SUM(MissPanel) AS MissPanel, SUM(NozzleMove) AS NozzleMove, SUM(NeedleMark) AS NeedleMark, SUM(MakerDirty) AS MakerDirty, 
			SUM(BladderDrop) AS BladderDrop, SUM(LatexBladder) AS LatexBladder, SUM(NozzleMoveInSalaBladder) AS NozzleMoveInSalaBladder, SUM(PUBladder) AS PUBladder, SUM(LaminationProb) AS LaminationProb, 
			SUM(DisColor) AS DisColor, SUM(ColorMark) AS ColorMark, SUM(CutMark) AS CutMark, SUM(ThreadDiscolor) AS ThreadDiscolor, SUM(PrintingCrack) AS PrintingCrack, SUM(Smearing) AS Smearing, SUM(SettingOut) 
			AS SettingOut, SUM(FabricImpression) AS FabricImpression, SUM(ShadeDiff) AS ShadeDiff, SUM(FactoryFaultDirty) AS FactoryFaultDirty, SUM(FactoryFaultBladderDrop) AS FactoryFaultBladderDrop, SUM(MatTorn) AS MatTorn, 
			SUM(Others) AS Others, SUM(JointProblem) AS JointProblem, SUM(Lamination) AS Lamination, SUM(Dirty) AS Dirty, SUM(Puncture) AS Puncture, SUM(NozzelDrop) AS NozzelDrop, SUM(UnMold) AS UnMold, SUM(Fail) AS Fail, 
			SUM(ArtWork) AS ArtWork, ArtCode')
            ->from('View_HS_FinalOutPut')
            ->group_by('ArtCode')
            ->where('DateName >= ', $start_date)
            ->where('DateName <= ', $end_date);

        if ($art == 'all') {
            return $this->db->get()->result();
        } else {
            return $this->db->where('ArtCode', $art)
                ->get()
                ->result();
        }
    }

    public function get_lfb_summary($start_date, $end_date)
    {
        $this->db->select('SUM(TotalChecked) AS TotalChecked, SUM(PassQty) AS PassQty, SUM(FailQty) AS FailQty, SUM(ZigZag) AS ZigZag, SUM(TornStitch) AS TornStitch, SUM(LooseStitch) AS LooseStitch, SUM(UnStitched) AS UnStitched, 
			SUM(OverStitch) AS OverStitch, SUM(LPS) AS LPS, SUM(FullPuncture) AS FullPuncture, SUM(MissPanel) AS MissPanel, SUM(NozzleMove) AS NozzleMove, SUM(NeedleMark) AS NeedleMark, SUM(MakerDirty) AS MakerDirty, 
			SUM(BladderDrop) AS BladderDrop, SUM(LatexBladder) AS LatexBladder, SUM(NozzleMoveInSalaBladder) AS NozzleMoveInSalaBladder, SUM(PUBladder) AS PUBladder, SUM(LaminationProb) AS LaminationProb, 
			SUM(DisColor) AS DisColor, SUM(ColorMark) AS ColorMark, SUM(CutMark) AS CutMark, SUM(ThreadDiscolor) AS ThreadDiscolor, SUM(PrintingCrack) AS PrintingCrack, SUM(Smearing) AS Smearing, SUM(SettingOut) 
			AS SettingOut, SUM(FabricImpression) AS FabricImpression, SUM(ShadeDiff) AS ShadeDiff, SUM(FactoryFaultDirty) AS FactoryFaultDirty, SUM(FactoryFaultBladderDrop) AS FactoryFaultBladderDrop, SUM(MatTorn) AS MatTorn, 
			SUM(Others) AS Others, SUM(JointProblem) AS JointProblem, SUM(Lamination) AS Lamination, SUM(Dirty) AS Dirty, SUM(Puncture) AS Puncture, SUM(NozzelDrop) AS NozzelDrop, SUM(UnMold) AS UnMold, SUM(Fail) AS Fail, 
			SUM(ArtWork) AS ArtWork, ArtCode')
            ->from('View_HS_FinalOutPut')
            ->group_by('ArtCode')
            ->where('DateName >= ', $start_date)
            ->where('DateName <= ', $end_date);


        return $this->db->get()->result();
    }

    public function get_hs_summary_sum($art, $start_date, $end_date)
    {
        $this->db->select('SUM(TotalChecked) AS TotalChecked, SUM(PassQty) AS PassQty, SUM(FailQty) AS FailQty, SUM(ZigZag) AS ZigZag, SUM(TornStitch) AS TornStitch, SUM(LooseStitch) AS LooseStitch, SUM(UnStitched) AS UnStitched, 
		SUM(OverStitch) AS OverStitch, SUM(LPS) AS LPS, SUM(FullPuncture) AS FullPuncture, SUM(MissPanel) AS MissPanel, SUM(NozzleMove) AS NozzleMove, SUM(NeedleMark) AS NeedleMark, SUM(MakerDirty) AS MakerDirty, 
		SUM(BladderDrop) AS BladderDrop, SUM(LatexBladder) AS LatexBladder, SUM(NozzleMoveInSalaBladder) AS NozzleMoveInSalaBladder, SUM(PUBladder) AS PUBladder, SUM(LaminationProb) AS LaminationProb, 
		SUM(DisColor) AS DisColor, SUM(ColorMark) AS ColorMark, SUM(CutMark) AS CutMark, SUM(ThreadDiscolor) AS ThreadDiscolor, SUM(PrintingCrack) AS PrintingCrack, SUM(Smearing) AS Smearing, SUM(SettingOut) 
		AS SettingOut, SUM(FabricImpression) AS FabricImpression, SUM(ShadeDiff) AS ShadeDiff, SUM(FactoryFaultDirty) AS FactoryFaultDirty, SUM(FactoryFaultBladderDrop) AS FactoryFaultBladderDrop, SUM(MatTorn) AS MatTorn, 
		SUM(Others) AS Others, SUM(JointProblem) AS JointProblem, SUM(Lamination) AS Lamination, SUM(Dirty) AS Dirty, SUM(Puncture) AS Puncture, SUM(NozzelDrop) AS NozzelDrop, SUM(UnMold) AS UnMold, SUM(Fail) AS Fail, 
		SUM(ArtWork) AS ArtWork')
            ->from('View_HS_FinalOutPut')
            ->where('DateName >= ', $start_date)
            ->where('DateName <= ', $end_date);

        if ($art == 'all') {
            return $this->db->get()->result();
        } else {
            return $this->db->where('ArtCode', $art)
                ->get()
                ->result();
        }
    }

    public function get_lfb_summary_sum($art, $start_date, $end_date)
    {
        $this->db->select('SUM(TotalChecked) AS TotalChecked, SUM(PassQty) AS PassQty, SUM(FailQty) AS FailQty, SUM(ZigZag) AS ZigZag, SUM(TornStitch) AS TornStitch, SUM(LooseStitch) AS LooseStitch, SUM(UnStitched) AS UnStitched, 
		SUM(OverStitch) AS OverStitch, SUM(LPS) AS LPS, SUM(FullPuncture) AS FullPuncture, SUM(MissPanel) AS MissPanel, SUM(NozzleMove) AS NozzleMove, SUM(NeedleMark) AS NeedleMark, SUM(MakerDirty) AS MakerDirty, 
		SUM(BladderDrop) AS BladderDrop, SUM(LatexBladder) AS LatexBladder, SUM(NozzleMoveInSalaBladder) AS NozzleMoveInSalaBladder, SUM(PUBladder) AS PUBladder, SUM(LaminationProb) AS LaminationProb, 
		SUM(DisColor) AS DisColor, SUM(ColorMark) AS ColorMark, SUM(CutMark) AS CutMark, SUM(ThreadDiscolor) AS ThreadDiscolor, SUM(PrintingCrack) AS PrintingCrack, SUM(Smearing) AS Smearing, SUM(SettingOut) 
		AS SettingOut, SUM(FabricImpression) AS FabricImpression, SUM(ShadeDiff) AS ShadeDiff, SUM(FactoryFaultDirty) AS FactoryFaultDirty, SUM(FactoryFaultBladderDrop) AS FactoryFaultBladderDrop, SUM(MatTorn) AS MatTorn, 
		SUM(Others) AS Others, SUM(JointProblem) AS JointProblem, SUM(Lamination) AS Lamination, SUM(Dirty) AS Dirty, SUM(Puncture) AS Puncture, SUM(NozzelDrop) AS NozzelDrop, SUM(UnMold) AS UnMold, SUM(Fail) AS Fail, 
		SUM(ArtWork) AS ArtWork')
            ->from('View_HS_FinalOutPut')
            ->where('DateName >= ', $start_date)
            ->where('DateName <= ', $end_date);

        if ($art == 'all') {
            return $this->db->get()->result();
        } else {
            return $this->db->where('ArtCode', $art)
                ->get()
                ->result();
        }
    }
    public function getStationwiseOutput($start_date, $end_date)
    {
        return $this->db->select("SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked) AS TotalChecked, SUM(dbo.tbl_PC_AMB_Hours_Tran.Pass) AS Pass, SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked - dbo.tbl_PC_AMB_Hours_Tran.Pass) AS Fail, 
        CASE WHEN SysIP = '192.168.40.51' THEN 'Station 1' ELSE CASE WHEN SysIP = '192.168.40.52' THEN 'Station 2' ELSE CASE WHEN SysIP = '192.168.40.53' THEN 'Station 3' ELSE CASE WHEN SysIP = '192.168.40.54' THEN 'Station 4'
         ELSE CASE WHEN SysIP = '192.168.40.55' THEN 'Station 5' ELSE CASE WHEN SysIP = '192.168.40.81' THEN 'Repair Line Station' ELSE CASE WHEN SysIP = '192.168.40.88' THEN 'Station 6' ELSE CASE WHEN SysIP = '192.168.40.56'
         THEN 'Station 7' ELSE Sysip END END END END END END END END AS Stationname,dbo.tbl_Inv_Tran_Date.DateName
         ")
            ->from(' dbo.tbl_PC_AMB_Hours_Tran')
            ->JOIN('dbo.tbl_Inv_Tran_Date', 'dbo.tbl_PC_AMB_Hours_Tran.DayID = dbo.tbl_Inv_Tran_Date.DayNo')
            ->where('dbo.tbl_Inv_Tran_Date.DateName >=', $start_date)
            ->where('dbo.tbl_Inv_Tran_Date.DateName <=', $end_date)
            ->where('dbo.tbl_PC_AMB_Hours_Tran.ProcessID =', 2)

            ->group_by("CASE WHEN SysIP = '192.168.40.51' THEN 'Station 1' ELSE CASE WHEN SysIP = '192.168.40.52' THEN 'Station 2' ELSE CASE WHEN SysIP = '192.168.40.53' THEN 'Station 3' ELSE CASE WHEN SysIP = '192.168.40.54' THEN 'Station 4'
                    ELSE CASE WHEN SysIP = '192.168.40.55' THEN 'Station 5' ELSE CASE WHEN SysIP = '192.168.40.81' THEN 'Repair Line Station' ELSE CASE WHEN SysIP = '192.168.40.88' THEN 'Station 6' ELSE CASE WHEN SysIP = '192.168.40.56'
                    THEN 'Station 7' ELSE Sysip END END END END END END END END,CASE WHEN SysIP = '192.168.40.51' THEN 'A' ELSE CASE WHEN SysIP = '192.168.40.52' THEN 'B' ELSE CASE WHEN SysIP = '192.168.40.53' THEN 'C' ELSE CASE WHEN SysIP = '192.168.40.54' THEN 'D' ELSE CASE WHEN SysIP
                    = '192.168.40.55' THEN 'E' ELSE CASE WHEN SysIP = '192.168.40.81' THEN 'H' ELSE CASE WHEN SysIP = '192.168.40.88' THEN 'F' ELSE CASE WHEN SysIP = '192.168.40.56' THEN 'G' ELSE Sysip END END END END END END
                    END END,dbo.tbl_Inv_Tran_Date.DateName")
            ->order_by(" CASE WHEN SysIP = '192.168.40.51' THEN 'A' ELSE CASE WHEN SysIP = '192.168.40.52' THEN 'B' ELSE CASE WHEN SysIP = '192.168.40.53' THEN 'C' ELSE CASE WHEN SysIP = '192.168.40.54' THEN 'D' ELSE CASE WHEN SysIP
                          = '192.168.40.55' THEN 'E' ELSE CASE WHEN SysIP = '192.168.40.81' THEN 'H' ELSE CASE WHEN SysIP = '192.168.40.88' THEN 'F' ELSE CASE WHEN SysIP = '192.168.40.56' THEN 'G' ELSE Sysip END END END END END END
                          END END")
            ->get()
            ->result();

        // $query = $this->db->query("SELECT        SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked) AS TotalChecked, SUM(dbo.tbl_PC_AMB_Hours_Tran.Pass) AS Pass, SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked - dbo.tbl_PC_AMB_Hours_Tran.Pass) AS Fail, 
        // CASE WHEN SysIP = '192.168.40.51' THEN 'Station 1' ELSE CASE WHEN SysIP = '192.168.40.52' THEN 'Station 2' ELSE CASE WHEN SysIP = '192.168.40.53' THEN 'Station 3' ELSE CASE WHEN SysIP = '192.168.40.54' THEN 'Station 4'
        //  ELSE CASE WHEN SysIP = '192.168.40.55' THEN 'Station 5' ELSE CASE WHEN SysIP = '192.168.40.81' THEN 'Repair Line Station' ELSE CASE WHEN SysIP = '192.168.40.88' THEN 'Station 6' ELSE CASE WHEN SysIP = '192.168.40.56'
        //  THEN 'Station 7' ELSE Sysip END END END END END END END END AS Stationname
        // FROM            dbo.tbl_PC_AMB_Hours_Tran INNER JOIN
        // dbo.tbl_Inv_Tran_Date ON dbo.tbl_PC_AMB_Hours_Tran.DayID = dbo.tbl_Inv_Tran_Date.DayNo
        // WHERE        (dbo.tbl_PC_AMB_Hours_Tran.ProcessID = 2) AND (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102))
        // GROUP BY CASE WHEN SysIP = '192.168.40.51' THEN 'Station 1' ELSE CASE WHEN SysIP = '192.168.40.52' THEN 'Station 2' ELSE CASE WHEN SysIP = '192.168.40.53' THEN 'Station 3' ELSE CASE WHEN SysIP = '192.168.40.54' THEN 'Station 4'
        //  ELSE CASE WHEN SysIP = '192.168.40.55' THEN 'Station 5' ELSE CASE WHEN SysIP = '192.168.40.81' THEN 'Repair Line Station' ELSE CASE WHEN SysIP = '192.168.40.88' THEN 'Station 6' ELSE CASE WHEN SysIP = '192.168.40.56'
        //  THEN 'Station 7' ELSE Sysip END END END END END END END END");
        //         return  $result = $query->result_array();
    }

    public function get_ms_bladder($startDate, $endDate)
    {
        $query = $this->db->query("SELECT        CompanyName, BladderTpye, Size, TotalChecked, Pass, JointFault + NozzleFault + BodyFault + WeightFault + SizeFault AS Fail, JointFault, NozzleFault, BodyFault, WeightFault, SizeFault, DateName, CONVERT(Varchar, 
DateName, 103) AS Datee
FROM            dbo.View_QC_Bladders_Qty_Sum
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))");
        return $query->result_array();
    }
    public function get_mlp_rejection($startDate, $endDate)
    {
        $query = $this->db->query("SELECT        ArtSize, SUM(Trail + Op + inkFault + LamProb + Cuttingmaterial + Pmaterial) AS Fail, SUM(PrdQty) AS PrdQty, SUM(PrintQty) AS PrintQty, SUM(SSQty) AS SSQty, SUM(CuttinQty) AS CuttinQty, SUM(PrintingMat) AS PrintingMat, 
                         SUM(CuttingMat) AS CuttingMat, ArtCode, DateName, CONVERT(Varchar, DateName, 103) AS Datee
FROM            dbo.View_MLP_Rejection
GROUP BY ArtCode, ArtSize, DateName, CONVERT(Varchar, DateName, 103)
HAVING        (DateName BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))");
        return $query->result_array();
    }

    public function MsEmployeeWiseSum($startDate, $endDate)
    {
        $query = $this->db->query("SELECT        dbo.view_MS_EmployeWise_Sum.*
        FROM            dbo.view_MS_EmployeWise_Sum
        WHERE        (DateName BETWEEN CONVERT(DATETIME, '$startDate', 102) AND CONVERT(DATETIME, '$endDate', 102))
        ");
        return $query->result_array();
    }



    // new changes Factory Codes wise
    public function compBallInspectionCurrentDate()
    {

        $start_date = date('d/m/Y');
        $end_date = date('d/m/Y');
        $fc = 'B34002';
        return $this->db->select("SUM(PassQty + FailQty) AS Checked, SUM(PassQty) AS Pass, SUM(FailQty) AS FailQty, SUM(BGrade) AS BGrade, SUM(Printing) AS Printing, SUM(PanelDefect) AS PanelDefect, SUM(Cavity) AS Cavity, SUM(DShape) 
     AS DShape, SUM(Touching) AS Touching, SUM(ArtWork) AS ArtWork, SUM(Puncture) AS Puncture, SUM(Dirty) AS Dirty, SUM(SeamAlligment) AS SeamAlligment, SUM(LeakPuncture) AS LeakPuncture, SUM(Wrinkle) AS Wrinkle, 
     SUM(Moldmark) AS Moldmark, SUM(PrintingAlligment) AS PrintingAlligment, SUM(Dull) AS Dull, SUM(Indent) AS Indent, SUM(Overlaping) AS Overlaping, SUM(UnderSize) AS UnderSize, SUM(UnderWeight) AS UnderWeight, 
     SUM(OverWeight) AS OverWeight, SUM(OverSize) AS OverSize, EntryDate As DailyDate,SUM(AirBubble) AS AirBubble")
            ->from('dbo.View_FinalQC_Rebotics')
            ->where('EntryDate  >=', $start_date)
            ->where('EntryDate  <=', $end_date)
            ->where('FactoryCode', $fc)
            ->group_by("EntryDate , CASE WHEN View_FinalQC_Rebotics.FactoryCode = '' THEN 'B34002' ELSE FactoryCode END")
            ->get()
            ->result();
    }
}

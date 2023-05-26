<?php
defined('BASEPATH') or exit('No direct script access allowed');

class factoryCode_Model extends CI_Model
{
    // B34002
    public function printing002($start_date, $end_date)
    {
        
        $query =  $this->db->query("SELECT        TOP (100) PERCENT dbo.tbl_Inv_Tran_Date.DateName AS DailyDate, SUM(dbo.tbl_TM_Print_Inspection.PassQty) AS PassQty, SUM(dbo.tbl_TM_Print_Inspection.FailQty) AS FailQty, dbo.tbl_Pro_PO_H.FactoryCode, 
        SUM(dbo.tbl_TM_Print_Inspection.Misprint) AS Misprint, SUM(dbo.tbl_TM_Print_Inspection.Smearing) AS Smearing, SUM(dbo.tbl_TM_Print_Inspection.Setting) AS Setting, SUM(dbo.tbl_TM_Print_Inspection.MaterialDFC) 
        AS MaterialDFC, SUM(dbo.tbl_TM_Print_Inspection.DisColour) AS DisColour, SUM(dbo.tbl_TM_Print_Inspection.DMG) AS DMG, SUM(dbo.tbl_TM_Print_Inspection.Touching) AS Touching, 
        SUM(dbo.tbl_TM_Print_Inspection.PanelChecked) AS PanelChecked, SUM(ISNULL(dbo.tbl_TM_Print_Inspection.BGrade, 0)) AS BGrade, SUM(ISNULL(dbo.tbl_TM_Print_Inspection.Dust, 0)) AS Dust
FROM            dbo.tbl_TM_Print_Inspection INNER JOIN
        dbo.tbl_Inv_Tran_Date ON dbo.tbl_TM_Print_Inspection.DayNo = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
        dbo.tbl_Pro_PO_H ON dbo.tbl_TM_Print_Inspection.PO = dbo.tbl_Pro_PO_H.PO
GROUP BY dbo.tbl_Inv_Tran_Date.DateName, dbo.tbl_Pro_PO_H.FactoryCode
HAVING        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102)) AND (dbo.tbl_Pro_PO_H.FactoryCode = 'b34002')");
        return $query->result_array();
    }
    public function panelShapping002($start_date, $end_date)
    {
        
        $query =  $this->db->query("SELECT        TOP (100) PERCENT dbo.tbl_Inv_Tran_Date.DateName AS DailyDate, SUM(dbo.tbl_TM_Panel_Forming_Inspection.TotalCheck) AS PassQty, SUM(dbo.tbl_TM_Panel_Forming_Inspection.FailQty) AS Fail, 
        SUM(dbo.tbl_TM_Panel_Forming_Inspection.PassQty) AS Pass, dbo.tbl_Pro_PO_H.FactoryCode, SUM(dbo.tbl_TM_Panel_Forming_Inspection.TotalCheck) AS TotalCheck, SUM(dbo.tbl_TM_Panel_Forming_Inspection.PanelDMG) 
        AS PanelDMG, SUM(dbo.tbl_TM_Panel_Forming_Inspection.Misprint) AS Misprint, SUM(dbo.tbl_TM_Panel_Forming_Inspection.DisColour) AS DisColour, SUM(dbo.tbl_TM_Panel_Forming_Inspection.Pasting) AS Pasting, 
        SUM(dbo.tbl_TM_Panel_Forming_Inspection.Shaping) AS Shaping, SUM(dbo.tbl_TM_Panel_Forming_Inspection.PassedPanel) AS PassedPanel, SUM(dbo.tbl_TM_Panel_Forming_Inspection.FailedPanel) AS FailedPanel, 
        SUM(dbo.tbl_TM_Panel_Forming_Inspection.SettingOut) AS SettingOut, SUM(dbo.tbl_TM_Panel_Forming_Inspection.Smearing) AS Smearing, SUM(dbo.tbl_TM_Panel_Forming_Inspection.MaterialFault) AS MaterialFault, 
        SUM(dbo.tbl_TM_Panel_Forming_Inspection.FabricImpression) AS FabricImpression, SUM(dbo.tbl_TM_Panel_Forming_Inspection.BGrade) AS BGrade
FROM            dbo.tbl_Inv_Tran_Date INNER JOIN
        dbo.tbl_TM_Panel_Forming_Inspection ON dbo.tbl_Inv_Tran_Date.DayNo = dbo.tbl_TM_Panel_Forming_Inspection.DayNo INNER JOIN
        dbo.tbl_Pro_PO_H ON dbo.tbl_TM_Panel_Forming_Inspection.PO = dbo.tbl_Pro_PO_H.PO
GROUP BY dbo.tbl_Inv_Tran_Date.DateName, dbo.tbl_Pro_PO_H.FactoryCode
HAVING        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102)) AND (dbo.tbl_Pro_PO_H.FactoryCode = 'B34002')");
        return $query->result_array();
    }
    // Forming B34002
    public function get_tm_ball_forming_sum002($start_date, $end_date, $fc)
    {
        return $this->db->query("SELECT        factoryCode, DateName, TotalChecked, TotalPass, MaterialDefect, SeamDefect, Fail, SeamOverlaping, Wrinkles, ExcessGlue, PressureMarks, AirBubble, TouchingPeelingOff, PrintMisalignment, WrongeArtwork, MoldMark, 
        ColourShade, ValveNozzleMove, DShape, Oversize, UnderSize, OverWeight, UnderWeight, MissGlue
FROM            dbo.view_TM_Forming_Proces
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102)) AND (factoryCode = '$fc')")->result_array();
    }
    // End Line QC B34002
    public function get_tm_final_qc_sum002($start_date, $end_date, $fc)
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
            ->result_array();
    }









    // B34003
    public function printing003($start_date, $end_date)
    {
        
        $query =  $this->db->query("SELECT        TOP (100) PERCENT dbo.tbl_Inv_Tran_Date.DateName AS DailyDate, SUM(dbo.tbl_TM_Print_Inspection.PassQty) AS PassQty, SUM(dbo.tbl_TM_Print_Inspection.FailQty) AS FailQty, dbo.tbl_Pro_PO_H.FactoryCode, 
        SUM(dbo.tbl_TM_Print_Inspection.Misprint) AS Misprint, SUM(dbo.tbl_TM_Print_Inspection.Smearing) AS Smearing, SUM(dbo.tbl_TM_Print_Inspection.Setting) AS Setting, SUM(dbo.tbl_TM_Print_Inspection.MaterialDFC) 
        AS MaterialDFC, SUM(dbo.tbl_TM_Print_Inspection.DisColour) AS DisColour, SUM(dbo.tbl_TM_Print_Inspection.DMG) AS DMG, SUM(dbo.tbl_TM_Print_Inspection.Touching) AS Touching, 
        SUM(dbo.tbl_TM_Print_Inspection.PanelChecked) AS PanelChecked, SUM(ISNULL(dbo.tbl_TM_Print_Inspection.BGrade, 0)) AS BGrade, SUM(ISNULL(dbo.tbl_TM_Print_Inspection.Dust, 0)) AS Dust
FROM            dbo.tbl_TM_Print_Inspection INNER JOIN
        dbo.tbl_Inv_Tran_Date ON dbo.tbl_TM_Print_Inspection.DayNo = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
        dbo.tbl_Pro_PO_H ON dbo.tbl_TM_Print_Inspection.PO = dbo.tbl_Pro_PO_H.PO
GROUP BY dbo.tbl_Inv_Tran_Date.DateName, dbo.tbl_Pro_PO_H.FactoryCode
HAVING        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102)) AND (dbo.tbl_Pro_PO_H.FactoryCode = 'b34003')");
        return $query->result_array();
    }
    public function panelShapping003($start_date, $end_date)
    {
        
        $query =  $this->db->query("SELECT        TOP (100) PERCENT dbo.tbl_Inv_Tran_Date.DateName AS DailyDate, SUM(dbo.tbl_TM_Panel_Forming_Inspection.TotalCheck) AS PassQty, SUM(dbo.tbl_TM_Panel_Forming_Inspection.FailQty) AS Fail, 
        SUM(dbo.tbl_TM_Panel_Forming_Inspection.PassQty) AS Pass, dbo.tbl_Pro_PO_H.FactoryCode, SUM(dbo.tbl_TM_Panel_Forming_Inspection.TotalCheck) AS TotalCheck, SUM(dbo.tbl_TM_Panel_Forming_Inspection.PanelDMG) 
        AS PanelDMG, SUM(dbo.tbl_TM_Panel_Forming_Inspection.Misprint) AS Misprint, SUM(dbo.tbl_TM_Panel_Forming_Inspection.DisColour) AS DisColour, SUM(dbo.tbl_TM_Panel_Forming_Inspection.Pasting) AS Pasting, 
        SUM(dbo.tbl_TM_Panel_Forming_Inspection.Shaping) AS Shaping, SUM(dbo.tbl_TM_Panel_Forming_Inspection.PassedPanel) AS PassedPanel, SUM(dbo.tbl_TM_Panel_Forming_Inspection.FailedPanel) AS FailedPanel, 
        SUM(dbo.tbl_TM_Panel_Forming_Inspection.SettingOut) AS SettingOut, SUM(dbo.tbl_TM_Panel_Forming_Inspection.Smearing) AS Smearing, SUM(dbo.tbl_TM_Panel_Forming_Inspection.MaterialFault) AS MaterialFault, 
        SUM(dbo.tbl_TM_Panel_Forming_Inspection.FabricImpression) AS FabricImpression, SUM(dbo.tbl_TM_Panel_Forming_Inspection.BGrade) AS BGrade
FROM            dbo.tbl_Inv_Tran_Date INNER JOIN
        dbo.tbl_TM_Panel_Forming_Inspection ON dbo.tbl_Inv_Tran_Date.DayNo = dbo.tbl_TM_Panel_Forming_Inspection.DayNo INNER JOIN
        dbo.tbl_Pro_PO_H ON dbo.tbl_TM_Panel_Forming_Inspection.PO = dbo.tbl_Pro_PO_H.PO
GROUP BY dbo.tbl_Inv_Tran_Date.DateName, dbo.tbl_Pro_PO_H.FactoryCode
HAVING        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102)) AND (dbo.tbl_Pro_PO_H.FactoryCode = 'B34003')");

        return $query->result_array();
    }
    // Forming B34003
    public function get_tm_ball_forming_sum003($start_date, $end_date, $fc)
    {
        return $this->db->query("SELECT        factoryCode, DateName, TotalChecked, TotalPass, MaterialDefect, SeamDefect, Fail, SeamOverlaping, Wrinkles, ExcessGlue, PressureMarks, AirBubble, TouchingPeelingOff, PrintMisalignment, WrongeArtwork, MoldMark, 
        ColourShade, ValveNozzleMove, DShape, Oversize, UnderSize, OverWeight, UnderWeight, MissGlue
FROM            dbo.view_TM_Forming_Proces
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102)) AND (factoryCode = '$fc')")->result_array();
    }
    // End Line QC B34003
    public function get_tm_final_qc_sum003($start_date, $end_date, $fc)
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
            ->result_array();
    }












    // B34004
    public function printing004($start_date, $end_date)
    {
        
        $query =  $this->db->query("SELECT        TOP (100) PERCENT dbo.tbl_Inv_Tran_Date.DateName AS DailyDate, SUM(dbo.tbl_TM_Print_Inspection.PassQty) AS PassQty, SUM(dbo.tbl_TM_Print_Inspection.FailQty) AS FailQty, dbo.tbl_Pro_PO_H.FactoryCode, 
        SUM(dbo.tbl_TM_Print_Inspection.Misprint) AS Misprint, SUM(dbo.tbl_TM_Print_Inspection.Smearing) AS Smearing, SUM(dbo.tbl_TM_Print_Inspection.Setting) AS Setting, SUM(dbo.tbl_TM_Print_Inspection.MaterialDFC) 
        AS MaterialDFC, SUM(dbo.tbl_TM_Print_Inspection.DisColour) AS DisColour, SUM(dbo.tbl_TM_Print_Inspection.DMG) AS DMG, SUM(dbo.tbl_TM_Print_Inspection.Touching) AS Touching, 
        SUM(dbo.tbl_TM_Print_Inspection.PanelChecked) AS PanelChecked, SUM(ISNULL(dbo.tbl_TM_Print_Inspection.BGrade, 0)) AS BGrade, SUM(ISNULL(dbo.tbl_TM_Print_Inspection.Dust, 0)) AS Dust
FROM            dbo.tbl_TM_Print_Inspection INNER JOIN
        dbo.tbl_Inv_Tran_Date ON dbo.tbl_TM_Print_Inspection.DayNo = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
        dbo.tbl_Pro_PO_H ON dbo.tbl_TM_Print_Inspection.PO = dbo.tbl_Pro_PO_H.PO
GROUP BY dbo.tbl_Inv_Tran_Date.DateName, dbo.tbl_Pro_PO_H.FactoryCode
HAVING        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102)) AND (dbo.tbl_Pro_PO_H.FactoryCode = 'b34004')");
        return $query->result_array();
    }
    public function panelShapping004($start_date, $end_date)
    {
        
        $query =  $this->db->query("SELECT        TOP (100) PERCENT dbo.tbl_Inv_Tran_Date.DateName AS DailyDate, SUM(dbo.tbl_TM_Panel_Forming_Inspection.TotalCheck) AS PassQty, SUM(dbo.tbl_TM_Panel_Forming_Inspection.FailQty) AS Fail, 
        SUM(dbo.tbl_TM_Panel_Forming_Inspection.PassQty) AS Pass, dbo.tbl_Pro_PO_H.FactoryCode, SUM(dbo.tbl_TM_Panel_Forming_Inspection.TotalCheck) AS TotalCheck, SUM(dbo.tbl_TM_Panel_Forming_Inspection.PanelDMG) 
        AS PanelDMG, SUM(dbo.tbl_TM_Panel_Forming_Inspection.Misprint) AS Misprint, SUM(dbo.tbl_TM_Panel_Forming_Inspection.DisColour) AS DisColour, SUM(dbo.tbl_TM_Panel_Forming_Inspection.Pasting) AS Pasting, 
        SUM(dbo.tbl_TM_Panel_Forming_Inspection.Shaping) AS Shaping, SUM(dbo.tbl_TM_Panel_Forming_Inspection.PassedPanel) AS PassedPanel, SUM(dbo.tbl_TM_Panel_Forming_Inspection.FailedPanel) AS FailedPanel, 
        SUM(dbo.tbl_TM_Panel_Forming_Inspection.SettingOut) AS SettingOut, SUM(dbo.tbl_TM_Panel_Forming_Inspection.Smearing) AS Smearing, SUM(dbo.tbl_TM_Panel_Forming_Inspection.MaterialFault) AS MaterialFault, 
        SUM(dbo.tbl_TM_Panel_Forming_Inspection.FabricImpression) AS FabricImpression, SUM(dbo.tbl_TM_Panel_Forming_Inspection.BGrade) AS BGrade
FROM            dbo.tbl_Inv_Tran_Date INNER JOIN
        dbo.tbl_TM_Panel_Forming_Inspection ON dbo.tbl_Inv_Tran_Date.DayNo = dbo.tbl_TM_Panel_Forming_Inspection.DayNo INNER JOIN
        dbo.tbl_Pro_PO_H ON dbo.tbl_TM_Panel_Forming_Inspection.PO = dbo.tbl_Pro_PO_H.PO
GROUP BY dbo.tbl_Inv_Tran_Date.DateName, dbo.tbl_Pro_PO_H.FactoryCode
HAVING        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102)) AND (dbo.tbl_Pro_PO_H.FactoryCode = 'B34004')");
        return $query->result_array();
    }
    // Forming B34004
    public function get_tm_ball_forming_sum004($start_date, $end_date, $fc)
    {
        return $this->db->query("SELECT        factoryCode, DateName, TotalChecked, TotalPass, MaterialDefect, SeamDefect, Fail, SeamOverlaping, Wrinkles, ExcessGlue, PressureMarks, AirBubble, TouchingPeelingOff, PrintMisalignment, WrongeArtwork, MoldMark, 
        ColourShade, ValveNozzleMove, DShape, Oversize, UnderSize, OverWeight, UnderWeight, MissGlue
FROM            dbo.view_TM_Forming_Proces
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102)) AND (factoryCode = '$fc')")->result_array();
    }
    // End Line QC B34004
    public function get_tm_final_qc_sum004($start_date, $end_date, $fc)
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
            ->result_array();
    }








    // Printing B34005
    public function printing005($start_date, $end_date)
    {
        
        $query =  $this->db->query("SELECT        DateName, TSheetsChecked, PassQuantity, FailQuantity, ColorShade, SettingOut, Covering, Material, Smearing, Scratches, Lacquer, Dust, TapeTest, DamageQuantity, PrintingDryhours
        FROM            dbo.View_MS_Printing
        WHERE        (DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102))");
        return $query->result_array();
    }
    // Bladder Windding B34005
    public function bladderWinding($start_date, $end_date)
    {
        
        $query =  $this->db->query("SELECT        dbo.tbl_Inv_Tran_Date.DateName, SUM(dbo.Tbl_PC_Bladder_Westage.Inspected) AS Inspected, SUM(dbo.Tbl_PC_Bladder_Westage.Fail) AS Fail, SUM(dbo.Tbl_PC_Bladder_Westage.Puntcture) AS Puntcture, 
        SUM(dbo.Tbl_PC_Bladder_Westage.SlowLeak) AS SlowLeak, SUM(dbo.Tbl_PC_Bladder_Westage.RechackFail) AS RechackFail
FROM            dbo.Tbl_PC_Bladder_Westage INNER JOIN
        dbo.tbl_Inv_Tran_Date ON dbo.Tbl_PC_Bladder_Westage.DayID = dbo.tbl_Inv_Tran_Date.DayNo
WHERE        (dbo.Tbl_PC_Bladder_Westage.BladderType = 'Winded')
GROUP BY dbo.tbl_Inv_Tran_Date.DateName, dbo.Tbl_PC_Bladder_Westage.BladderType
HAVING        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102))");
        return $query->result_array();
    }
    // Bladder Unwindding B34005
    public function bladderUnWinding($start_date, $end_date)
    {
        
        $query =  $this->db->query("SELECT        dbo.tbl_Inv_Tran_Date.DateName, SUM(dbo.Tbl_PC_Bladder_Westage.Inspected) AS Inspected, SUM(dbo.Tbl_PC_Bladder_Westage.Pass) AS Pass, SUM(dbo.Tbl_PC_Bladder_Westage.Fail) AS Fail, 
        SUM(dbo.Tbl_PC_Bladder_Westage.Crease) AS Crease, SUM(dbo.Tbl_PC_Bladder_Westage.JointThin) AS JointThin, SUM(dbo.Tbl_PC_Bladder_Westage.JointHole) AS JointHole, SUM(dbo.Tbl_PC_Bladder_Westage.JointCut) 
        AS JointCut, SUM(dbo.Tbl_PC_Bladder_Westage.JointPatchLeak) AS JointPatchLeak, SUM(dbo.Tbl_PC_Bladder_Westage.JointPatchOffcure) AS JointPatchOffcure, SUM(dbo.Tbl_PC_Bladder_Westage.NozzleOffcure) 
        AS NozzleOffcure, SUM(dbo.Tbl_PC_Bladder_Westage.Nozzlethin) AS Nozzlethin, SUM(dbo.Tbl_PC_Bladder_Westage.NozzleOut) AS NozzleOut, SUM(dbo.Tbl_PC_Bladder_Westage.NozzlePatchLeak) AS NozzlePatchLeak, 
        SUM(dbo.Tbl_PC_Bladder_Westage.NozzleCentreOut) AS NozzleCentreOut, SUM(dbo.Tbl_PC_Bladder_Westage.NozzleLeak) AS NozzleLeak, SUM(dbo.Tbl_PC_Bladder_Westage.DSHAPE) AS DSHAPE, 
        SUM(dbo.Tbl_PC_Bladder_Westage.NozzleCoverGap) AS NozzleCoverGap, SUM(dbo.Tbl_PC_Bladder_Westage.FM) AS FM, SUM(dbo.Tbl_PC_Bladder_Westage.FMLeak) AS FMLeak, 
        SUM(dbo.Tbl_PC_Bladder_Westage.OverWeight) AS OverWeight, SUM(dbo.Tbl_PC_Bladder_Westage.UnderWeight) AS UnderWeight, SUM(dbo.Tbl_PC_Bladder_Westage.OverSize) AS OverSize, 
        SUM(dbo.Tbl_PC_Bladder_Westage.UnderSize) AS UnderSize, SUM(dbo.Tbl_PC_Bladder_Westage.RubberCut) AS RubberCut, SUM(dbo.Tbl_PC_Bladder_Westage.Burst) AS Burst, SUM(dbo.Tbl_PC_Bladder_Westage.Flash) 
        AS Flash, SUM(dbo.Tbl_PC_Bladder_Westage.BodyThin) AS BodyThin, SUM(dbo.Tbl_PC_Bladder_Westage.Ballon) AS Ballon, SUM(dbo.Tbl_PC_Bladder_Westage.Puncture) AS Puncture
FROM            dbo.Tbl_PC_Bladder_Westage INNER JOIN
        dbo.tbl_Inv_Tran_Date ON dbo.Tbl_PC_Bladder_Westage.DayID = dbo.tbl_Inv_Tran_Date.DayNo
WHERE        (dbo.Tbl_PC_Bladder_Westage.BladderType = 'UnWinded')
GROUP BY dbo.tbl_Inv_Tran_Date.DateName
HAVING        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102))");
        return $query->result_array();
    }
    // Pivot B34005
    public function sheetInspection005($start_date, $end_date)
    {
        
        $query =  $this->db->query("SELECT        SUM(dbo.tbl_MS_SheetChecking.TotalCheck) AS TotalCheck, SUM(dbo.tbl_MS_SheetChecking.TotalPass) AS TotalPass, SUM(dbo.tbl_MS_SheetChecking.TotalDefected) AS TotalDefected, 
        SUM(dbo.tbl_MS_SheetChecking.ThickJoint) AS ThickJoint, SUM(dbo.tbl_MS_SheetChecking.ThinJoint) AS ThinJoint, SUM(dbo.tbl_MS_SheetChecking.Wrinkle) AS Wrinkle, SUM(dbo.tbl_MS_SheetChecking.MaterialShade) 
        AS MaterialShade, SUM(dbo.tbl_MS_SheetChecking.InkSpot) AS InkSpot, SUM(dbo.tbl_MS_SheetChecking.MaterialDamage) AS MaterialDamage, SUM(dbo.tbl_MS_SheetChecking.Impression) AS Impression, 
        dbo.tbl_MS_SheetChecking.DayNo, dbo.tbl_Inv_Tran_Date.DateName
FROM            dbo.tbl_MS_SheetChecking INNER JOIN
        dbo.tbl_Inv_Tran_Date ON dbo.tbl_MS_SheetChecking.DayNo = dbo.tbl_Inv_Tran_Date.DayNo
GROUP BY dbo.tbl_MS_SheetChecking.DayNo, dbo.tbl_Inv_Tran_Date.DateName
HAVING        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102))");
        return $query->result_array();
    }
    // Pivot B34005
    public function pivot005($start_date, $end_date)
    {
        
        $query =  $this->db->query("SELECT        dbo.defects.label, COUNT(dbo.tbl_Pivot.PassQty) AS defects, DATEADD(dd, 0, DATEDIFF(dd, 0, dbo.tbl_Pivot.inspection_completed_date)) AS Date
        FROM            dbo.tbl_Pivot INNER JOIN
                                 dbo.defects ON dbo.tbl_Pivot.defects_id = dbo.defects.defects_id
        WHERE        (dbo.tbl_Pivot.defects_id <> 0)
        GROUP BY DATEADD(dd, 0, DATEDIFF(dd, 0, dbo.tbl_Pivot.inspection_completed_date)), dbo.defects.label
        HAVING        (DATEADD(dd, 0, DATEDIFF(dd, 0, dbo.tbl_Pivot.inspection_completed_date)) BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102))");
        return $query->result_array();
    }
    // End Line QC B34005
    public function get_ms_summary2($line, $start_date, $end_date)
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
                ->result_array();
        } else {
            return $this->db->where('dbo.View_Union_MS.Line', $line)
                ->get()
                ->result_array();
        }
    }
    







    // Core B34006
    public function core006($start_date, $end_date)
    {
        return $this->db->query("SELECT        DateName, TotalChecked, PassQuantity, FailQuantity, FailPercent, UnderWeight, OverWeight, HardPoint, HoleLoose, DShape, DeepCut
        FROM            dbo.View_Amb_Core_QCInspection
        WHERE        (DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102))")->result_array();
    }
    // BHF Cutting B34006
    public function BHFCutting006($start_date, $end_date)
    {
        return $this->db->query("SELECT        dbo.View_Amb_BHF_Cutting.*
        FROM            dbo.View_Amb_BHF_Cutting
        WHERE        (DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102))
        ")->result_array();
    }
    // AHF Cutting B34006
    public function AHFCutting006($start_date, $end_date)
    {
        return $this->db->query("SELECT        dbo.View_AMB_Af_HF_Cutt.*
        FROM            dbo.View_AMB_Af_HF_Cutt
        WHERE        (DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102))        
        ")->result_array();
    }
    // Forming B34006
    public function rpt_amb_detail006($start_date, $end_date, $processID)
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
          SUM(dbo.tbl_PC_AMB_Hours_Tran.Fail) AS Fail,
          dbo.tbl_PC_AMB_Line.LineName,Sum(dbo.tbl_PC_AMB_Hours_Tran.pass) As pass,dbo.tbl_Inv_Tran_Date.DateName')
            ->from('dbo.tbl_PC_AMB_Hours_Tran')
            ->join('dbo.tbl_Inv_Tran_Date', 'dbo.tbl_PC_AMB_Hours_Tran.DayID = dbo.tbl_Inv_Tran_Date.DayNo')
            ->join('dbo.tbl_PC_AMB_Line', 'dbo.tbl_PC_AMB_Hours_Tran.LineID = dbo.tbl_PC_AMB_Line.LineID')
            ->where('dbo.tbl_PC_AMB_Hours_Tran.ProcessID', $processID)
            ->where('dbo.tbl_Inv_Tran_Date.DateName >=', $start_date)
            ->where('dbo.tbl_Inv_Tran_Date.DateName <=', $end_date)
            ->where('dbo.tbl_PC_AMB_Hours_Tran.BallType', 'FreshBall')
            ->group_by('dbo.tbl_PC_AMB_Line.LineName,dbo.tbl_Inv_Tran_Date.DateName')
            ->get()->result_array();
    }
    // packing/end line qc B34006
    public function rpt_amb_detail_Packing006($start_date, $end_date)
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
            ->result_array();
    }




    // Printing B34007
    public  function printing007($start_date, $end_date)
    {
        
        $query = $this->db->query("SELECT        DateName, SheetsChecked, TotalPass, TotalFail, MWrinkles, TapeFoamJoint, FilmFoamDifference, HolesinFoam, Indent, Smearing, MisPrint, InkSpread, PrintingSpots, LacquerMissing, SettingOutPanels, DiscolorPanels, 
        MaterialSpot, Dust, Touching, Damage, DateName AS Expr1
FROM            dbo.View_LFB_PrintMat
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102))");
        return $query->result_array();
    }
    // AHF Cutting B34007
    public  function AHFCutting007($start_date, $end_date)
    {
        
        $query = $this->db->query("SELECT        DateName, SheetsChecked, PassSheets, FailSheets, Smearing, MisPrint, InkSpread, PrintingSpots, LacquerMissing, SettingOutPanels, DiscolorPanels, ImproperEmbossing, MisAllignment, StraightCut, DamagePanels, 
        BurningPanels, SparkingPanels
FROM            dbo.View_Lfb_AHF_Cutt
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102))");
        return $query->result_array();
    }
    // Carcass B34007
    public  function carcass007($start_date, $end_date)
    {
        
        $query = $this->db->query("SELECT        SUM(dbo.tbl_Carcas.TotalCheck) AS TotalCheck, SUM(dbo.tbl_Carcas.TotalPass) AS TotalPass, SUM(dbo.tbl_Carcas.TotalFail) AS TotalFail, SUM(dbo.tbl_Carcas.underSize) AS underSize, SUM(dbo.tbl_Carcas.OverSize) 
        AS OverSize, SUM(dbo.tbl_Carcas.Puncture) AS Puncture, SUM(dbo.tbl_Carcas.DShape) AS DShape, dbo.tbl_Inv_Tran_Date.DateName
    FROM            dbo.tbl_Carcas INNER JOIN
        dbo.tbl_Inv_Tran_Date ON dbo.tbl_Carcas.DayID = dbo.tbl_Inv_Tran_Date.DayNo
    GROUP BY dbo.tbl_Carcas.FactoryCode, dbo.tbl_Inv_Tran_Date.DateName
    HAVING        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102)) AND (dbo.tbl_Carcas.FactoryCode = 'b34007')");
        return $query->result_array();
    }
    // Forming B34007
    public function get_tm_final_qc_sum007($start_date, $end_date, $fc)
    {
        $query = $this->db->query("SELECT        SUM(dbo.tbl_TM_Article_Wise_prd.TotalChecked) AS TotalChecked, SUM(dbo.tbl_TM_Article_Wise_prd.TotalPass) AS TotalPass, SUM(dbo.tbl_TM_Article_Wise_prd.Fail) AS Fail, 
        SUM(dbo.tbl_TM_Article_Wise_prd.MaterialDefect) AS MaterialDefect, SUM(dbo.tbl_TM_Article_Wise_prd.SeamDefect) AS SeamDefect, SUM(dbo.tbl_TM_Article_Wise_prd.SeamOverlaping) AS SeamOverlaping, 
        SUM(dbo.tbl_TM_Article_Wise_prd.Wrinkles) AS Wrinkles, SUM(dbo.tbl_TM_Article_Wise_prd.ExcessGlue) AS ExcessGlue, SUM(dbo.tbl_TM_Article_Wise_prd.PressureMarks) AS PressureMarks, 
        SUM(dbo.tbl_TM_Article_Wise_prd.AirBubble) AS AirBubble, SUM(dbo.tbl_TM_Article_Wise_prd.HeavyPrintDefect) AS HeavyPrintDefect, SUM(dbo.tbl_TM_Article_Wise_prd.TouchingPeelingOff) AS TouchingPeelingOff, 
        SUM(dbo.tbl_TM_Article_Wise_prd.PrintMisalignment) AS PrintMisalignment, SUM(dbo.tbl_TM_Article_Wise_prd.WrongeArtwork) AS WrongeArtwork, SUM(dbo.tbl_TM_Article_Wise_prd.MoldMark) AS MoldMark, 
        SUM(dbo.tbl_TM_Article_Wise_prd.ColourShade) AS ColourShade, SUM(dbo.tbl_TM_Article_Wise_prd.ValveNozzleMove) AS ValveNozzleMove, SUM(dbo.tbl_TM_Article_Wise_prd.DShape) AS DShape, 
        SUM(dbo.tbl_TM_Article_Wise_prd.Oversize) AS Oversize, SUM(dbo.tbl_TM_Article_Wise_prd.UnderSize) AS UnderSize, SUM(dbo.tbl_TM_Article_Wise_prd.OverWeight) AS OverWeight, 
        SUM(dbo.tbl_TM_Article_Wise_prd.UnderWeight) AS UnderWeight, SUM(dbo.tbl_TM_Article_Wise_prd.MissGlue) AS MissGlue, dbo.tbl_Inv_Tran_Date.DateName
FROM            dbo.tbl_TM_Article_Wise_prd INNER JOIN
        dbo.tbl_Pro_Article ON dbo.tbl_TM_Article_Wise_prd.ClientID = dbo.tbl_Pro_Article.ClientID AND dbo.tbl_TM_Article_Wise_prd.ModelID = dbo.tbl_Pro_Article.ModelID AND 
        dbo.tbl_TM_Article_Wise_prd.ArtiD = dbo.tbl_Pro_Article.ArtID INNER JOIN
        dbo.tbl_Inv_Tran_Date ON dbo.tbl_TM_Article_Wise_prd.DayID = dbo.tbl_Inv_Tran_Date.DayNo
WHERE        (dbo.tbl_TM_Article_Wise_prd.BallType = 'Freshball') AND (dbo.tbl_TM_Article_Wise_prd.factoryCode = 'B34007')
GROUP BY dbo.tbl_Inv_Tran_Date.DateName
HAVING        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102))");
return $query->result_array();
    }
    // End Line QC B34007
    public function get_Lfb_final_qc($start_date, $end_date)
    {
        $query = $this->db->query("SELECT        TOP (100) PERCENT DateName, SUM(TotalChecked) AS TotalChecked, SUM(TotalPass) AS TotalPass, SUM(Fail) AS Fail, SUM(SeamDefect) AS SeamDefect, SUM(MaterialDefect) AS MaterialDefect, SUM(SeamOverlaping) 
        AS SeamOverlaping, SUM(Wrinkles) AS Wrinkles, SUM(ExcessGlue) AS ExcessGlue, SUM(PressureMarks) AS PressureMarks, SUM(AirBubble) AS AirBubble, SUM(HeavyPrintDefect) AS HeavyPrintDefect, 
        SUM(TouchingPeelingOff) AS TouchingPeelingOff, SUM(PrintMisalignment) AS PrintMisalignment, SUM(WrongeArtwork) AS WrongeArtwork, SUM(MoldMark) AS MoldMark, SUM(ColourShade) AS ColourShade, 
        SUM(ValveNozzleMove) AS ValveNozzleMove, SUM(Oversize) AS Oversize, SUM(UnderSize) AS UnderSize, SUM(OverWeight) AS OverWeight, SUM(UnderWeight) AS UnderWeight, SUM(DShape) AS DShape, SUM(MissGlue) 
        AS MissGlue, Stationname AS LineName
FROM            dbo.View_TM_LFB_FInalQC_Final
GROUP BY DateName, factoryCode, Stationname
HAVING        (DateName BETWEEN CONVERT(DATETIME, '$start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102)) AND (factoryCode = 'b34007')");
        return $query->result_array();
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Amb_Model extends CI_Model {
public function getAllData($Date1, $Date2,$LineNo)
    {


if ($LineNo==1) {
    
         $query = $this->db->query("SELECT        TOP (100) PERCENT SUM(dbo.View_union_All_Amb.Checked) AS Checked, SUM(dbo.View_union_All_Amb.Passed) AS Passed, 
          SUM(dbo.View_union_All_Amb.Strength) AS Strength, SUM(dbo.View_union_All_Amb.SAM) AS SAM, SUM(dbo.View_union_All_Amb.Mints) AS Mints, 
                         SUM(dbo.View_union_All_Amb.pchecked) AS pchecked, SUM(dbo.View_union_All_Amb.Ppassed) AS Ppassed, SUM(dbo.View_union_All_Amb.pFailed) AS pFailed, 
                         SUM(dbo.View_union_All_Amb.PStrength) AS PStrength, SUM(dbo.View_union_All_Amb.PSAm) AS PSAm, SUM(dbo.View_union_All_Amb.PMints) AS PMints, 
                         dbo.View_union_All_Amb.LineID, dbo.tbl_PC_AMB_Line.LineName
FROM            dbo.View_union_All_Amb INNER JOIN
                         dbo.tbl_PC_AMB_Line ON dbo.View_union_All_Amb.LineID = dbo.tbl_PC_AMB_Line.LineID
WHERE        (dbo.View_union_All_Amb.DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102))
GROUP BY dbo.tbl_PC_AMB_Line.LineName, dbo.View_union_All_Amb.LineID
ORDER BY dbo.View_union_All_Amb.LineID");
         return $query->result_array();
}else{


$query = $this->db->query("SELECT  HourTime, ArtCode, SUM(Checked) AS Checked, SUM(Passed) AS Passed, SUM(Strength) AS Strength, SUM(SAM) AS SAM, SUM(Mints) AS Mints, 
                         SUM(pchecked) AS pchecked, SUM(Ppassed) AS Ppassed, SUM(pFailed) AS pFailed, SUM(PStrength) AS PStrength, SUM(PSAm) AS PSAm, SUM(PMints) AS PMints, 
                         HourID
FROM            dbo.View_union_All_Amb
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102)) AND (LineID = $LineNo)
GROUP BY HourTime, ArtCode, HourID
ORDER BY HourID");
         return $query->result_array();
        }

    }
public function getAllSum($Date1, $Date2,$LineNo)
{
if ($LineNo==1) {   
$query = $this->db->query("SELECT        TOP (100) PERCENT SUM(dbo.View_union_All_Amb.Checked) AS Checked, SUM(dbo.View_union_All_Amb.Passed) AS Passed, 
                         SUM(dbo.View_union_All_Amb.Strength) AS Strength, SUM(dbo.View_union_All_Amb.SAM) AS SAM, SUM(dbo.View_union_All_Amb.Mints) AS Mints, 
                         SUM(dbo.View_union_All_Amb.pchecked) AS pchecked, SUM(dbo.View_union_All_Amb.Ppassed) AS Ppassed, SUM(dbo.View_union_All_Amb.pFailed) AS pFailed, 
                         SUM(dbo.View_union_All_Amb.PStrength) AS PStrength, SUM(dbo.View_union_All_Amb.PSAm) AS PSAm, SUM(dbo.View_union_All_Amb.PMints) AS PMints
FROM            dbo.View_union_All_Amb INNER JOIN
                         dbo.tbl_PC_AMB_Line ON dbo.View_union_All_Amb.LineID = dbo.tbl_PC_AMB_Line.LineID
WHERE        (dbo.View_union_All_Amb.DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102))");
         return $query->result_array();
}else{
$query = $this->db->query("SELECT        SUM(Checked) AS Checked, SUM(Passed) AS Passed, SUM(Strength) AS Strength, SUM(SAM) AS SAM, SUM(Mints) AS Mints, SUM(pchecked) AS pchecked, 
                         SUM(Ppassed) AS Ppassed, SUM(pFailed) AS pFailed, SUM(PStrength) AS PStrength, SUM(PSAm) AS PSAm, SUM(PMints) AS PMints
FROM            dbo.View_union_All_Amb
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102)) AND (LineID = $LineNo)");
         return $query->result_array();
        }

    }
public function getlinedata()
    {
        $query = $this->db->query('SELECT        LineID, LineName
FROM            dbo.tbl_PC_AMB_Line
WHERE        (Status = 1)');
        return $query->result_array();
    }
    public function getAmbLineData($Date1, $Date2){


$query = $this->db->query("SELECT        TOP (100) PERCENT HourTime, ArtCode, SUM(Checked) AS Checked, SUM(Passed) AS Passed, SUM(Strength) AS Strength, SUM(SAM) AS SAM, SUM(Mints) AS Mints, 
                         SUM(pchecked) AS pchecked, SUM(Ppassed) AS Ppassed, SUM(pFailed) AS pFailed, SUM(PStrength) AS PStrength, SUM(PSAm) AS PSAm, SUM(PMints) AS PMints, 
                         HourID, LineID
FROM            dbo.View_union_All_Amb
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102))
GROUP BY HourTime, ArtCode, HourID, LineID
ORDER BY HourID");
         return $query->result_array();
    }

public Function GetAMbForming($Values){
    $query= $this->db->query("SELECT        *
FROM            (SELECT        TOP (100) PERCENT LineID, LineName, MyDate1, OutPut
FROM            dbo.View_forming_Production
ORDER BY LineID) up PIVOT (sum(output) FOR mydate1 IN ($Values)) AS pivo ORDER BY LineID");
     return $query->result_array();

}
public Function GetAMbFormingSu($StartDateeee,$EndDateeee,$LineID){
    $query= $this->db->query("SELECT        SUM(OutPut) AS OutPut
FROM            dbo.View_forming_Production
WHERE        (DateName BETWEEN '$StartDateeee' AND '$EndDateeee') AND (LineID = $LineID)");
 return $query->result_array();
}
public Function GetAMbFormingDSum($StartDateeee,$EndDateeee){


     $query= $this->db->query("SELECT        dbo.tbl_Inv_Tran_Date.DateName, SUM(dbo.tbl_PC_AMB_Hours_Tran.Pass) AS OutPut, CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103) AS Dateee 
FROM            dbo.tbl_PC_AMB_Hours_Tran INNER JOIN
                         dbo.tbl_PC_AMB_Line ON dbo.tbl_PC_AMB_Hours_Tran.LineID = dbo.tbl_PC_AMB_Line.LineID INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_PC_AMB_Hours_Tran.DayID = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                         dbo.tbl_PC_AMB_Hours ON dbo.tbl_PC_AMB_Hours_Tran.HourID = dbo.tbl_PC_AMB_Hours.HourID INNER JOIN
                         dbo.tbl_PC_AMB_Processes ON dbo.tbl_PC_AMB_Hours_Tran.ProcessID = dbo.tbl_PC_AMB_Processes.ProcessID
GROUP BY dbo.tbl_Inv_Tran_Date.DateName, dbo.tbl_PC_AMB_Processes.ProcessName, CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103)
HAVING        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN '$StartDateeee' AND '$EndDateeee')  AND 
                         (dbo.tbl_PC_AMB_Processes.ProcessName = 'Forming') ORDER BY dbo.tbl_Inv_Tran_Date.DateName");
return $query->result_array();
}
public function GetFormingSum($StartDateeee,$EndDateeee){
     $query= $this->db->query("SELECT        SUM(OutPut) AS OutPut
     FROM            dbo.View_forming_Production
    WHERE        (DateName BETWEEN '$StartDateeee' AND '$EndDateeee')");
     return $query->result_array();
}


public Function GetAMbpacking($Values){
    $query= $this->db->query("SELECT        *
FROM            (SELECT        TOP (100) PERCENT LineID, LineName, mydate1, OutPut
FROM            dbo.View_Packing_Production
ORDER BY LineID) up PIVOT (sum(output) FOR mydate1 IN ($Values)) AS pivo ORDER BY LineID");
return $query->result_array();
}
public Function GetAMbpackingSum($StartDateeee,$EndDateeee,$LineID){
    $query= $this->db->query("SELECT        SUM(OutPut) AS OutPut
FROM            dbo.View_Packing_Production
WHERE        (DateName BETWEEN '$StartDateeee' AND '$EndDateeee') AND (LineID = $LineID)");
return $query->result_array();
}

public Function GetAMbpackingDSum($StartDateeee,$EndDateeee){

           $query= $this->db->query("SELECT        dbo.tbl_Inv_Tran_Date.DateName, SUM(dbo.tbl_PC_AMB_Hours_Tran.Pass) AS OutPut, CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103) AS Dateee 
FROM            dbo.tbl_PC_AMB_Hours_Tran INNER JOIN
                         dbo.tbl_PC_AMB_Line ON dbo.tbl_PC_AMB_Hours_Tran.LineID = dbo.tbl_PC_AMB_Line.LineID INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_PC_AMB_Hours_Tran.DayID = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                         dbo.tbl_PC_AMB_Hours ON dbo.tbl_PC_AMB_Hours_Tran.HourID = dbo.tbl_PC_AMB_Hours.HourID INNER JOIN
                         dbo.tbl_PC_AMB_Processes ON dbo.tbl_PC_AMB_Hours_Tran.ProcessID = dbo.tbl_PC_AMB_Processes.ProcessID
GROUP BY dbo.tbl_Inv_Tran_Date.DateName, dbo.tbl_PC_AMB_Processes.ProcessName, CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103)
HAVING        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN '$StartDateeee' AND '$EndDateeee')  AND 
                         (dbo.tbl_PC_AMB_Processes.ProcessName = 'Packing') ORDER BY dbo.tbl_Inv_Tran_Date.DateName");
return $query->result_array();
}
public Function GetpackingSum($StartDateeee,$EndDateeee){
                                $query= $this->db->query("SELECT        SUM(OutPut) AS OutPut
FROM            dbo.View_Packing_Production
WHERE        (DateName BETWEEN '$StartDateeee' AND '$EndDateeee')");
return $query->result_array();
}

}

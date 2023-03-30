<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RWPD_Model extends CI_Model
{
 public function machineCounter($s_date, $e_date)
 {
  $query = $this->db->query("SELECT        COUNT(TID) AS BallCounter,machineName AS MachineName

FROM            dbo.view_RWPD_DT
WHERE        (CONVERT(varchar, EntryDate, 103) BETWEEN '$s_date' AND '$e_date')
GROUP BY machineName");
  return  $query->result_array();
 }
 public function poCounter($s_date, $e_date)
 {
  $query = $this->db->query("SELECT        POCode, SUM(BallCounter) AS BallCounter
        FROM            dbo.view_RWPD_Line_Output_PO_Wise
        WHERE        (DateName BETWEEN CONVERT(DATETIME, '$s_date 00:00:00', 103) AND CONVERT(DATETIME, '$e_date 00:00:00', 103))
        GROUP BY POCode
        
        ");
  return  $query->result_array();
 }
 public function articleCounter($s_date, $e_date)
 {
  $query = $this->db->query("SELECT        SUM(BallCounter) AS BallCounter, ArtCode
       FROM            dbo.view_RWPD_Line_Output_PO_Wise
       WHERE        (DateName BETWEEN CONVERT(DATETIME, '$s_date 00:00:00', 103) AND CONVERT(DATETIME, '$e_date 00:00:00', 103))
       GROUP BY ArtCode
       
       ");
  return  $query->result_array();
 }

 public function realTimeAtten($depart, $sect)
 {

         $Month = date('m');
         $Year = date('Y');
         $Day = date('d');
         $CurrentDate = $Year . '-' . $Month . '-' . $Day;
         $HRDB = $this->load->database('HRMS', TRUE);
         $query = $HRDB->query("SELECT        AttDate, RealTime, EmpCount, EmployeeType, SectionName, DeptName
         FROM            dbo.View_Emp_ATT_REALTIME_CALC_Final
 WHERE        (AttDate = CONVERT(DATETIME, '$CurrentDate 00:00:00', 102)) AND (DeptID = $depart) AND (SectionID = $sect) AND (EmployeeType = 'Direct')
 
 ");
         return  $query->result_array();
 }

 public function HourllyReading()
 {
         $Month = date('m');
         $Year = date('Y');
         $Day = date('d');
         $query = $this->db->query("SELECT        balls, HourName,HID
         FROM            dbo.view_RWPD_Hourlly
WHERE        (EntryDate BETWEEN '$Day/$Month/$Year' AND '$Day/$Month/$Year') 
GROUP BY balls, HourName,HID
ORDER BY HID");
         return  $query->result_array();
 }

 Public function Cutting(){
            $Month = date('m');
            $Year = date('Y');
            $Day = date('d');
            
            $query = $this->db->query("SELECT        SUM(Counter) AS Counter, SUM(TotalBalls) AS TotalBalls, SUM(TotalSheets) AS TotalSheets
            FROM            dbo.view_PC_SheetSizing_Final
            WHERE        (Date = '$Day/$Month/$Year')");
            return  $query->result_array();
 }
 public function MSEfficiency(){
  $Month = date('m');
            $Year = date('Y');
            $Day = date('d');
  $query = $this->db->query("SELECT        Date, Name, Counter, Process
  FROM            dbo.view_Eff_All
  WHERE        (Date = '$Day/$Month/$Year')
  ORDER BY Name");
  return  $query->result_array();
 }
 Public function panelCutting(){
  $Month = date('m');
  $Year = date('Y');
  $Day = date('d');
  $query = $this->db->query("SELECT        count(Counter) AS Counter
FROM            dbo.view_PC_panel_Sizing
WHERE        (Date = '$Day/$Month/$Year') And (Hours>7)");
  return  $query->result_array();
}

Public function IndividualReading($startDate,$endDate){
  $startMonth = explode("-",$startDate)[1];
  $startYear = explode("-",$startDate)[0];
  $startDay = explode("-",$startDate)[2];
  $endMonth = explode("-",$endDate)[1];
  $endYear = explode("-",$endDate)[0];
  $endDay = explode("-",$endDate)[2];
  $query = $this->db->query("SELECT  Date, COUNT(Counter) AS Counter, Name
  FROM            dbo.view_RWPD_DT          
  WHERE        (Date BETWEEN '$startDay/$startMonth/$startYear' AND '$endDay/$endMonth/$endYear') 
  GROUP BY Date, Name 
  ORDER BY Name");
  return  $query->result_array();
}

public function HfCutting($currentDate)
{
  $Month = date('m');
  $Year = date('Y');
  $Day = date('d');
  $Date=$Year.'-'.$Month.'-'.$Day;
  $query = $this->db->query("SELECT        Name, COUNT(Counter) AS Counter
  FROM            dbo.view_HF_Cutting
  WHERE        (Date = CONVERT(DATETIME, '$Date 00:00:00', 102))
  GROUP BY Name");
 
return  $query->result_array();
}
 
}

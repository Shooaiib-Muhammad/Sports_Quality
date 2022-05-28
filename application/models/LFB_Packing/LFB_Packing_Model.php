<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LFB_Packing_Model extends CI_Model
{
 public function TotalCounter($s_date, $e_date)
 {
   
    $query = $this->db->query("SELECT        SUM(TotalPass) AS PassQty
FROM            dbo.view_Packing_LFB
WHERE        (DateName BETWEEN '$s_date' AND '$e_date')");
    return  $query->result_array();
  }
  public function Stationwise($s_date, $e_date)
  {
 
    $query = $this->db->query("SELECT       SysIp AS StationName, SUM(TotalPass) AS PassQty
FROM            dbo.view_Packing_LFB
WHERE        (DateName BETWEEN '$s_date' AND '$e_date')
GROUP BY SysIp");

    return  $query->result_array();
 
 }
  public function StationwiseData($s_date, $e_date)
  {

    $query = $this->db->query("SELECT     SAMPacking,  SysIp AS StationName, SUM(TotalPass) AS PassQty
FROM            dbo.view_Packing_LFB
WHERE        (DateName BETWEEN '$s_date' AND '$e_date')
GROUP BY SysIp,SAMPacking");

    return  $query->result_array();
  }
  public function realTimeAtten($depart, $sect)
  {

    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    $HRDB = $this->load->database('HRMS', TRUE);
    $query = $HRDB->query("SELECT        EmployeeType, COUNT(EmpCount) AS EmpCount, SUM(RealTime) AS RealTime, SectionName, DeptName, SectionID, DeptID, AttDate, EmpCount AS Count
        FROM            dbo.View_Emp_ATT_REALTIME_CALC_Final
        GROUP BY EmployeeType, SectionName, DeptName, SectionID, DeptID, AttDate, EmpCount
        HAVING        (AttDate = CONVERT(DATETIME, '$CurrentDate 00:00:00', 102)) AND (DeptID = $depart) AND (SectionID = $sect)
        
        ");
    return  $query->result_array();
  }
}

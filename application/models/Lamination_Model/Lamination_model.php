<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lamination_Model extends CI_Model
{
 public function TotalReading($s_date, $e_date)
 {
  $query = $this->db->query("SELECT        Max(dbo.view_lamination_Process.TID) AS Reading, dbo.view_lamination_Process.Date
  FROM            dbo.view_lamination_Process INNER JOIN
                           dbo.tbl_PC_AMB_Hours ON dbo.view_lamination_Process.HID = dbo.tbl_PC_AMB_Hours.Hour
  WHERE        (dbo.view_lamination_Process.Hours > 7) AND (dbo.view_lamination_Process.Date BETWEEN '$s_date' AND '$e_date')
  GROUP BY dbo.view_lamination_Process.Date
  
        ");
  return  $query->result_array();
 }

public function IndividualReading($s_date, $e_date){
 $query = $this->db->query("SELECT       Max(dbo.view_lamination_Process.TID) AS Reading, dbo.view_lamination_Process.Date, dbo.view_lamination_Process.Name
 FROM            dbo.view_lamination_Process INNER JOIN
                          dbo.tbl_PC_AMB_Hours ON dbo.view_lamination_Process.HID = dbo.tbl_PC_AMB_Hours.Hour
 WHERE         (dbo.view_lamination_Process.Hours > 7) AND (dbo.view_lamination_Process.Date BETWEEN '$s_date' AND '$e_date')
 GROUP BY dbo.view_lamination_Process.Date, dbo.view_lamination_Process.Name
 ORDER BY dbo.view_lamination_Process.Name
        ");
  return  $query->result_array();
}

public function TotalReadingDateRange($s_date, $e_date)
{
 $query = $this->db->query("SELECT        COUNT(dbo.view_lamination_Process.TID) AS Reading, dbo.view_lamination_Process.Date
 FROM            dbo.view_lamination_Process INNER JOIN
                          dbo.tbl_PC_AMB_Hours ON dbo.view_lamination_Process.HID = dbo.tbl_PC_AMB_Hours.Hour
 WHERE       (dbo.view_lamination_Process.Hours > 7) AND  (dbo.view_lamination_Process.Date BETWEEN '$s_date' AND '$e_date')
 GROUP BY dbo.view_lamination_Process.Date
 
       ");
 return  $query->result_array();
}

public function IndividualReadingDateRange($s_date, $e_date){
$query = $this->db->query("SELECT        Max(dbo.view_lamination_Process.TID) AS Reading, dbo.view_lamination_Process.Date, dbo.view_lamination_Process.Name
FROM            dbo.view_lamination_Process INNER JOIN
                         dbo.tbl_PC_AMB_Hours ON dbo.view_lamination_Process.HID = dbo.tbl_PC_AMB_Hours.Hour
WHERE        (dbo.view_lamination_Process.Hours > 7) AND  (dbo.view_lamination_Process.Date BETWEEN '$s_date' AND '$e_date')
GROUP BY dbo.view_lamination_Process.Date, dbo.view_lamination_Process.Name

       ");
 return  $query->result_array();
}

      public function HourllyReading($s_date, $e_date)
      {
            $query = $this->db->query("SELECT        Reading ,  HourName
FROM            dbo.view_lamination_Hourlly
WHERE        (EntryDate BETWEEN '$s_date' AND '$e_date')");
            return  $query->result_array();
      }


public function getData($s_date){
 $query = $this->db->query("SELECT  TOP (100) PERCENT Reading, CONVERT(Varchar, '$s_date', 103) AS EntryDate, TID, MachineName
 FROM            dbo.tbl_Lamination_Process
 ORDER BY TID DESC
       ");
 return  $query->result_array();
}


public function getEnergy($startDate,$endDate){


      $query = $this->db->query("SELECT        AVG(Energy) AS Energy, HallName FROM            dbo.view_Energy
WHERE        (CONVERT(Varchar, EntryDate, 23) = '$startDate')
GROUP BY HallName
            ");
      return  $query->result_array();


}

public function getEnergyByHourly($startDate,$endDate){


      $query = $this->db->query("SELECT        TOP (100) PERCENT HallName, HourName, Energy, HourID
      FROM            dbo.View_Energy_Hourlly_Data
      WHERE       EntryDate = '12/12/2022'
      ORDER BY HourID
            ");
      return  $query->result_array();


}
//for ms lamination machine total
public function energy_C(){
      $query = $this->db->query("SELECT        AVG(Energy) AS Energy, HallName
      FROM            dbo.view_Energy
      WHERE        (CONVERT(Varchar, EntryDate, 103) = '10/12/2022')
      GROUP BY HallName"); 
      return  $query->result_array();
}
//for ms lamination machine drilldown
public function energy_C_Drill(){
      $currentDate= date('d/m/Y');
      $query = $this->db->query("SELECT        TOP (100) PERCENT HallName, HourName, Energy, HourID
      FROM            dbo.View_Energy_Hourlly_Data
      WHERE        (EntryDate = '$currentDate') 
      ORDER BY HourID"); 
      return  $query->result_array();
}



}


?>
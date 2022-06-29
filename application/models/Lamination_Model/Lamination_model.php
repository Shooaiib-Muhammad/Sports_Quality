<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lamination_Model extends CI_Model
{
 public function TotalReading($s_date, $e_date)
 {
  $query = $this->db->query("SELECT        COUNT(dbo.view_lamination_Process.TID) AS Reading, dbo.view_lamination_Process.Date
  FROM            dbo.view_lamination_Process INNER JOIN
                           dbo.tbl_PC_AMB_Hours ON dbo.view_lamination_Process.HID = dbo.tbl_PC_AMB_Hours.Hour
  WHERE        (dbo.view_lamination_Process.EntryDate BETWEEN CONVERT(DATETIME, '$s_date 00:00:00', 102) AND CONVERT(DATETIME, '$e_date 00:00:00', 102))
  GROUP BY dbo.view_lamination_Process.Date
  
        ");
  return  $query->result_array();
 }

public function IndividualReading($s_date, $e_date){
 $query = $this->db->query("SELECT        COUNT(dbo.view_lamination_Process.TID) AS Reading, dbo.view_lamination_Process.Date, dbo.view_lamination_Process.Name
 FROM            dbo.view_lamination_Process INNER JOIN
                          dbo.tbl_PC_AMB_Hours ON dbo.view_lamination_Process.HID = dbo.tbl_PC_AMB_Hours.Hour
 WHERE        (dbo.view_lamination_Process.EntryDate BETWEEN CONVERT(DATETIME, '$s_date 00:00:00', 102) AND CONVERT(DATETIME, '$e_date 00:00:00', 102) AND dbo.view_lamination_Process.Name = 'Lamination Machine 1')
 GROUP BY dbo.view_lamination_Process.Date, dbo.view_lamination_Process.Name
 
        ");
  return  $query->result_array();
}

public function TotalReadingDateRange($s_date, $e_date)
{
 $query = $this->db->query("SELECT        COUNT(dbo.view_lamination_Process.TID) AS Reading, dbo.view_lamination_Process.Date
 FROM            dbo.view_lamination_Process INNER JOIN
                          dbo.tbl_PC_AMB_Hours ON dbo.view_lamination_Process.HID = dbo.tbl_PC_AMB_Hours.Hour
 WHERE        (dbo.view_lamination_Process.EntryDate BETWEEN CONVERT(DATETIME, '$s_date 00:00:00', 102) AND CONVERT(DATETIME, '$e_date 00:00:00', 102))
 GROUP BY dbo.view_lamination_Process.Date
 
       ");
 return  $query->result_array();
}

public function IndividualReadingDateRange($s_date, $e_date){
$query = $this->db->query("SELECT        COUNT(dbo.view_lamination_Process.TID) AS Reading, dbo.view_lamination_Process.Date, dbo.view_lamination_Process.Name
FROM            dbo.view_lamination_Process INNER JOIN
                         dbo.tbl_PC_AMB_Hours ON dbo.view_lamination_Process.HID = dbo.tbl_PC_AMB_Hours.Hour
WHERE        (dbo.view_lamination_Process.EntryDate BETWEEN CONVERT(DATETIME, '$s_date 00:00:00', 102) AND CONVERT(DATETIME, '$e_date 00:00:00', 102))
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


}


?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lamination_Model extends CI_Model
{
 public function TotalReading($s_date, $e_date)
 {
  $query = $this->db->query("SELECT MAX(Reading) AS TotalReading FROM dbo.view_Lamintion
  WHERE (EntryDate BETWEEN CONVERT(Varchar, '$s_date', 103) AND CONVERT(Varchar, '$e_date', 103))
        ");
  return  $query->result_array();
 }

public function IndividualReading($s_date, $e_date){
 $query = $this->db->query("SELECT MAX(Reading) AS Reading, MachineName FROM dbo.view_Lamintion
  WHERE (EntryDate BETWEEN CONVERT(Varchar, '$s_date', 103) AND CONVERT(Varchar, '$e_date', 103))
  GROUP BY MachineName
        ");
  return  $query->result_array();
}

public function TotalReadingDateRange($s_date, $e_date)
{
 $query = $this->db->query("SELECT MAX(Reading) AS TotalReading, EntryDate FROM dbo.view_Lamintion
 WHERE (EntryDate BETWEEN CONVERT(Varchar, '$s_date', 103) AND CONVERT(Varchar, '$e_date', 103))
 GROUP BY EntryDate
 ORDER BY EntryDate
       ");
 return  $query->result_array();
}

public function IndividualReadingDateRange($s_date, $e_date){
$query = $this->db->query("SELECT MAX(Reading) AS Reading, MachineName, EntryDate FROM dbo.view_Lamintion
 WHERE (EntryDate BETWEEN CONVERT(Varchar, '$s_date', 103) AND CONVERT(Varchar, '$e_date', 103))
 GROUP BY MachineName, EntryDate
 ORDER BY EntryDate
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
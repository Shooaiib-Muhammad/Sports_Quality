<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AMB_Packing_Model extends CI_Model
{
 public function TotalCounter($s_date, $e_date)
 {

  
  $query = $this->db->query("SELECT        CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103) AS DateName, SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked) AS PassQty
  FROM            dbo.tbl_PC_AMB_Hours_Tran INNER JOIN
                           dbo.tbl_Inv_Tran_Date ON dbo.tbl_PC_AMB_Hours_Tran.DayID = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                           dbo.tbl_PC_AMB_Line ON dbo.tbl_PC_AMB_Hours_Tran.LineID = dbo.tbl_PC_AMB_Line.LineID
  WHERE        (dbo.tbl_PC_AMB_Hours_Tran.ProcessID = 2) AND (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$s_date 00:00:00', 102) AND CONVERT(DATETIME, '$e_date 00:00:00', 102))
  GROUP BY CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103)
  HAVING        (SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked) > 0)
  ORDER BY DateName");
  return  $query->result_array();
 }
 public function StationWise($s_date, $e_date){
  $query = $this->db->query("SELECT        CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103) AS DateName, SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked) AS PassQty, dbo.tbl_PC_AMB_Line.LineName
  FROM            dbo.tbl_PC_AMB_Hours_Tran INNER JOIN
                           dbo.tbl_Inv_Tran_Date ON dbo.tbl_PC_AMB_Hours_Tran.DayID = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                           dbo.tbl_PC_AMB_Line ON dbo.tbl_PC_AMB_Hours_Tran.LineID = dbo.tbl_PC_AMB_Line.LineID
  WHERE        (dbo.tbl_PC_AMB_Hours_Tran.ProcessID = 2) AND (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$s_date 00:00:00', 102) AND CONVERT(DATETIME, '$e_date 00:00:00', 102))
  GROUP BY CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103), dbo.tbl_PC_AMB_Line.LineName
  HAVING        (SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked) > 0)
  ORDER BY DateName");
  return  $query->result_array();
   

 
 }
}

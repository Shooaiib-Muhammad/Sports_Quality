<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RWPD_Model extends CI_Model
{
 public function machineCounter($s_date, $e_date)
 {
  $query = $this->db->query("SELECT        COUNT(TID) AS BallCounter,machineName AS MachineName

FROM            dbo.tbl_Audiuno
WHERE        (CONVERT(varchar, EntryDate, 103) BETWEEN '$s_date' AND '$e_date')
GROUP BY machineName");
  return  $query->result_array();
 }
 public function poCounter($s_date, $e_date)
 {
  $query = $this->db->query("SELECT        POCode, SUM(BallCounter) AS BallCounter
        FROM            dbo.view_RWPD_Line_Output_PO_Wise
        WHERE        (DateName BETWEEN CONVERT(DATETIME, '$s_date 00:00:00', 102) AND CONVERT(DATETIME, '$e_date 00:00:00', 102))
        GROUP BY POCode
        
        ");
  return  $query->result_array();
 }
 public function articleCounter($s_date, $e_date)
 {
  $query = $this->db->query("SELECT        SUM(BallCounter) AS BallCounter, ArtCode
       FROM            dbo.view_RWPD_Line_Output_PO_Wise
       WHERE        (DateName BETWEEN CONVERT(DATETIME, '$s_date 00:00:00', 102) AND CONVERT(DATETIME, '$e_date 00:00:00', 102))
       GROUP BY ArtCode
       
       ");
  return  $query->result_array();
 }
 Public function Cutting(){
            $Month = date('m');
            $Year = date('Y');
            $Day = date('d');
            $query = $this->db->query("SELECT        SUM(Counter) AS Counter
FROM            dbo.view_PC_Cutting_Process
WHERE        (Date = '$Day/$Month/$Year')");
            return  $query->result_array();
 }
 Public function panelCutting(){
  $Month = date('m');
  $Year = date('Y');
  $Day = date('d');
  $query = $this->db->query("SELECT        SUM(Counter) AS Counter
FROM            dbo.view_PC_panel_Sizing
WHERE        (Date = '$Day/$Month/$Year')");
  return  $query->result_array();
}
 
}

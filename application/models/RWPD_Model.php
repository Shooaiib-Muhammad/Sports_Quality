<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RWPD_Model extends CI_Model
{
 public function machineCounter($s_date, $e_date)
 {
  $query = $this->db->query("SELECT        SUM(BallCounter) AS BallCounter, MachineName
        FROM            dbo.view_RWPD_Line_Wise_OutPut
        WHERE        (DateName BETWEEN CONVERT(DATETIME, '$s_date 00:00:00', 102) AND CONVERT(DATETIME, '$e_date 00:00:00', 102))
        GROUP BY MachineName
        ");
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
}

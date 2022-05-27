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
 
    $query = $this->db->query("SELECT        SAMPacking, SysIp AS StationName, ArtCode, SUM(TotalPass) AS PassQty
FROM            dbo.view_Packing_LFB
WHERE        (DateName BETWEEN '$s_date' AND '$e_date')
GROUP BY SAMPacking, SysIp, ArtCode");

    return  $query->result_array();
 
 }
}

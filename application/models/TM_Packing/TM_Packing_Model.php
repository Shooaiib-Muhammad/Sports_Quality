<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TM_Packing_Model extends CI_Model
{
 public function TotalCounter($s_date, $e_date)
 {
    $query = $this->db->query("SELECT         SUM(Pass) AS PassQty
FROM            dbo.view_Packing_TM
WHERE        (CONVERT(varchar, DateName, 103) BETWEEN '$s_date' AND '$e_date')");
    return  $query->result_array();
  }
  public function Stationwise($s_date, $e_date)
  {
    $query = $this->db->query("SELECT        ArtCode, IP AS StationName, SUM(Pass) AS PassQty, SAMPacking
FROM            dbo.view_Packing_TM
WHERE        (CONVERT(varchar, DateName, 103) BETWEEN '$s_date' AND '$e_date')
GROUP BY ArtCode, IP, SAMPacking");
    return  $query->result_array();

 
 }
}

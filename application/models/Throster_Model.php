<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Throster_Model extends CI_Model
{
 public function TotalCounter($s_date, $e_date)
 {
  $query = $this->db->query("SELECT       SUM(Pass) AS PassQty
FROM            dbo.view_packing_MS
WHERE        (CONVERT(varchar, DateName, 103) BETWEEN '$s_date' AND '$e_date')
");
  return  $query->result_array();
 }
 public function Stationwise($s_date, $e_date){
  $query = $this->db->query("SELECT         IP AS StationName, SUM(Pass) AS PassQty
FROM            dbo.view_packing_MS
WHERE        (CONVERT(varchar, DateName, 103) BETWEEN '$s_date' AND '$e_date')
GROUP BY  IP");
  return  $query->result_array();
   

 
 }
}

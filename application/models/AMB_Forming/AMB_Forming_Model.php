<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AMB_Forming_Model extends CI_Model
{
 public function TotalCounter($s_date, $e_date)
 {

  
  $query = $this->db->query("SELECT        SUM(PassQty) AS PassQty
FROM            dbo.view_packing_Amb_Forming
WHERE        (CONVERT(varchar, DateName, 103) BETWEEN '$s_date' AND '$e_date') ");
  return  $query->result_array();
 }
 public function StationWise($s_date, $e_date){
  $query = $this->db->query("SELECT        SUM(PassQty) AS PassQty,  SysIP AS StationName
FROM            dbo.view_packing_Amb_Forming
WHERE        (CONVERT(varchar, DateName, 103) BETWEEN '$s_date' AND '$e_date') 
GROUP BY  SysIP");
  return  $query->result_array();
   

 
 }
}

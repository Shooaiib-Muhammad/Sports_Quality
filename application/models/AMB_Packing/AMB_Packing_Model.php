<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AMB_Packing_Model extends CI_Model
{
 public function TotalCounter($s_date, $e_date)
 {

  
  $query = $this->db->query("SELECT        SUM(PassQty) AS PassQty
FROM            dbo.view_packing_AMB
WHERE        (CONVERT(varchar, DateName, 103) BETWEEN '$s_date' AND '$e_date') ");
  return  $query->result_array();
 }
 public function StationWise($s_date, $e_date){
  $query = $this->db->query("SELECT        SUM(PassQty) AS PassQty, SAMPacking, ArtCode, SysIP AS StationName
FROM            dbo.view_packing_AMB
WHERE        (CONVERT(varchar, DateName, 103) BETWEEN '$s_date' AND '$e_date') 
GROUP BY SAMPacking, ArtCode, SysIP");
  return  $query->result_array();
   

 
 }
}

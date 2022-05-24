<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TM_Packing_Model extends CI_Model
{
 public function TotalCounter($s_date, $e_date)
 {
  $query = $this->db->query("SELECT        COUNT(Counter) AS Counter
FROM            dbo.tbl_TM_Packing
WHERE        (CONVERT(varchar, EntryDate, 103) BETWEEN '$s_date' AND '$e_date')");
  return  $query->result_array();
 }
 public function Throsters($s_date, $e_date){
  $query = $this->db->query("SELECT        PackingLine, COUNT(Counter) AS Counter
FROM            dbo.tbl_TM_Packing
WHERE        (CONVERT(varchar, EntryDate, 103) BETWEEN '$s_date' AND '$e_date')
GROUP BY PackingLine");
  return  $query->result_array();
   

 
 }
}

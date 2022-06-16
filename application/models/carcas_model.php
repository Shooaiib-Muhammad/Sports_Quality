<?php
defined('BASEPATH') or exit('No direct script access allowed');

class carcas_model extends CI_Model
{
    public function getData()
    {
        $query = $this->db->query("SELECT        COUNT(Counter) AS Counter, HallType, EntryDate
        FROM            dbo.view_prd_carcas
        WHERE        (EntryDate BETWEEN '15/06/2022' AND '16/06/2022')
        GROUP BY HallType, EntryDate");
      return  $query->result_array();
    }
    public function getDatacore()
    {
        $query = $this->db->query("SELECT        COUNT(Counter) AS Counter,  EntryDate
        FROM            dbo.view_core
        WHERE        (EntryDate BETWEEN '15/06/2022' AND '16/06/2022')
        GROUP BY  EntryDate");
      return  $query->result_array();
    }
public function AddCSSNo($ID,$CssNo){
    $Date= date("Y/m/d");
    // $query = $this->db->query("update Set CSSNo='$CssNo' , LabStatus=1,ProceedDate='$Date' Where Id= '$ID'");
    
    $query = $this->db->query("update  dbo . tbl_Outward_Transaction
      Set CSSNo='$CssNo' , LabStatus=1,labProceedDate='$Date' Where TID= '$ID'");
   // return  $query->result_array();

    if($query){
        return true;
    }
    else{
        return false;
    }

}
}

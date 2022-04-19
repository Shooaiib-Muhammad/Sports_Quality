<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pending extends CI_Model
{
    public function getPending()
    {
        $query = $this->db->query("SELECT        view_Outward_transaction.*
        FROM            dbo.view_Outward_transaction
        WHERE        (labStatus IS NULL)");
      return  $query->result_array();
    }
public function AddCSSNo($ID,$CssNo){
    $Date= date("Y/m/d");
    // $query = $this->db->query("update Set CSSNo='$CssNo' , LabStatus=1,ProceedDate='$Date' Where Id= '$ID'");
    
    $query = $this->db->query("update  dbo . tbl_Outward_Transaction
      Set CSSNo='$CssNo' , LabStatus=1,labProceedDate='$Date',Request_Status='Proceed By Lab' Where TID= '$ID'");
   // return  $query->result_array();

    if($query){
        return true;
    }
    else{
        return false;
    }

}
}

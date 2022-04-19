<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Model
{
    public function getPending()
    {
        $query = $this->db->query("SELECT        view_Outward_transaction.*
        FROM            dbo.view_Outward_transaction
        WHERE        (AccountsStatus IS NULL)");
      return  $query->result_array();
    }
    public function getApproved()
    {
        $query = $this->db->query("SELECT        view_Outward_transaction.*
        FROM            dbo.view_Outward_transaction
        WHERE        (AccountsStatus =1)");
      return  $query->result_array();
    }
public function verify($ID){
    $Date= date("Y/m/d");
    // $query = $this->db->query("update Set CSSNo='$CssNo' , LabStatus=1,ProceedDate='$Date' Where Id= '$ID'");
    
    $query = $this->db->query("update  dbo . tbl_Outward_Transaction
      Set  AccountsStatus=1,AccountsverfiyDate='$Date',Request_Status='Payment Proceed' Where TID= '$ID'");
   // return  $query->result_array();

    if($query){
        return true;
    }
    else{
        return false;
    }

}
}

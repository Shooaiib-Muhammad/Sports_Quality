<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Model
{
    public function getPending()
    {
        $query = $this->db->query("SELECT        view_Outward_transaction.*
        FROM            dbo.view_Outward_transaction
        WHERE        (AccountsStatus IS NULL) and (Evidence_pic IS Not NULL)");
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
      Set  AccountsStatus=1,AccountsverfiyDate='$Date',Request_Status='Accounts Verfication Done' Where TID= '$ID'");
        // return  $query->result_array();
        $query = $this->db->query("update  dbo . tbl_Outward_Transaction_D
      Set  AccountsStatus=1,AccountsverfiyDate='$Date',Request_Status='Accounts Verfication Done' Where TID= '$ID'");
    if($query){
        return true;
    }
    else{
        return false;
    }

}
  
    
public function pendingEvidance(){
    $query = $this->db->query("SELECT        view_Outward_transaction.*
        FROM            dbo.view_Outward_transaction
        WHERE        (Evidence_pic IS NULL) And  (AccountsStatus IS NULL)");
    return  $query->result_array();
}

}

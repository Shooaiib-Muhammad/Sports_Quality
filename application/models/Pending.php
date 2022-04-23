<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pending extends CI_Model
{
    public function getPending()
    {
        $query = $this->db->query("SELECT        view_Outward_transaction.*
        FROM            dbo.view_Outward_transaction
        WHERE        (labStatus IS NULL) And (AccountsStatus=1)");
      return  $query->result_array();
    }
    public function getApproved()
    {
        $query = $this->db->query("SELECT        view_Outward_transaction.*
        FROM            dbo.view_Outward_transaction
        WHERE        (labStatus=1)");
        return  $query->result_array();
    }
public function AddCSSNo($ID,$CssNo){
    $Date= date("Y/m/d");
    // $query = $this->db->query("update Set CSSNo='$CssNo' , LabStatus=1,ProceedDate='$Date' Where Id= '$ID'");
    
    $query = $this->db->query("update  dbo . tbl_Outward_Transaction
      Set CSSNo='$CssNo' , LabStatus=1,labProceedDate='$Date',Request_Status='Proceed to Lab' Where TID= '$ID'");
   // return  $query->result_array();

    if($query){
        return true;
    }
    else{
        return false;
    }

}
    public function pendingAccounts()
    {
        $query = $this->db->query("SELECT        view_Outward_transaction.*
        FROM            dbo.view_Outward_transaction
        WHERE        (AccountsStatus IS NULL) and (labStatus IS NULL)");
        return  $query->result_array();
    }
}

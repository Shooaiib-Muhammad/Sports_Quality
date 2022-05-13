<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pending extends CI_Model
{
    public function getPending()
    {
        $query = $this->db->query("SELECT        view_Outward_Transaction_D.*
        FROM            dbo.view_Outward_Transaction_D
        WHERE         (AccountsStatus=1) and (MaterialInStatus IS NULL)");
      return  $query->result_array();
    }
    public function getApproved()
    {
        $query = $this->db->query("SELECT        view_Lab_Add_Css.*
        FROM            dbo.view_Lab_Add_Css
        WHERE        (MaterialInStatus=1)");
        return  $query->result_array();
    }
public function AddCSSNo($ID,$CssNo){
    $Date= date("Y/m/d");
    // $query = $this->db->query("update Set CSSNo='$CssNo' , LabStatus=1,ProceedDate='$Date' Where Id= '$ID'");
    
    $query = $this->db->query("update  dbo . tbl_Outward_Transaction_D
      Set CSSNo='$CssNo' , MaterialInStatus=1,MaterialteceivedDate='$Date',Request_Status='Sample Received' Where DID= '$ID'");
      
   // return  $query->result_array();

    if($query){
        return true;
    }
    else{
        return false;
    }

}
    public function proceedtolab($ID)
    {
        $Date = date("Y/m/d");
        // $query = $this->db->query("update Set CSSNo='$CssNo' , LabStatus=1,ProceedDate='$Date' Where Id= '$ID'");

        $query = $this->db->query("update  dbo . tbl_Outward_Transaction_D
      Set  labStatus=1,labProceedDate='$Date',Request_Status='Proceed to lab' Where DID= '$ID'");
        // return  $query->result_array();

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public function pendingAccounts()
    {
        $query = $this->db->query("SELECT        view_Outward_transaction_D.*
        FROM            dbo.view_Outward_transaction_D
        WHERE        (AccountsStatus IS NULL) and (MaterialInStatus IS NULL)");
        return  $query->result_array();
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload extends CI_Model
{
    public function getUpload()
    {
        $query = $this->db->query("SELECT        view_Outward_transaction_D.*
        FROM            dbo.view_Outward_transaction_D
        WHERE        (Result IS NULL) and (AccountsStatus =1)");
      return  $query->result_array();
    }
   
    
    public function getApproved()
    {
        $query = $this->db->query("SELECT        view_Outward_transaction_D.*
        FROM            dbo.view_Outward_transaction_D
        WHERE         (Request_Status ='Result Uploaded') ");
      return  $query->result_array();
    }
public function Submit($pictureFresh,$ID){
    $Date= date("Y/m/d");
    // $query = $this->db->query("update Set CSSNo='$CssNo' , LabStatus=1,ProceedDate='$Date' Where Id= '$ID'");
    
    $query = $this->db->query("update  dbo . tbl_Outward_Transaction_D
      Set  Result='$pictureFresh',RDate='$Date',Request_Status='Result Uploaded' Where DID= '$ID'");
   // return  $query->result_array();

    if($query){
        redirect('UploadResult/upload');
    }
    else{
        return false;
    }

}
public function getimage($TID)
{

  $query = $this->db->query("SELECT        view_Outward_transaction_D.*
  FROM            dbo.view_Outward_transaction_D
  WHERE         dbo.view_Outward_transaction_D.TID= $TID");
  return  $query->result_array();
}



}

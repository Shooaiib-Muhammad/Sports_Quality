<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload extends CI_Model
{
    public function getUpload()
    {
        $query = $this->db->query("SELECT        view_Outward_transaction.*
        FROM            dbo.view_Outward_transaction
        WHERE        (Result IS NULL) and (AccountsStatus =1)");
      return  $query->result_array();
    }
    public function getApproved()
    {
        $query = $this->db->query("SELECT        view_Outward_transaction.*
        FROM            dbo.view_Outward_transaction
        WHERE         (Request_Status ='Result Uploaded') ");
      return  $query->result_array();
    }
public function Submit($pictureFresh,$ID){
    $Date= date("Y/m/d");
    // $query = $this->db->query("update Set CSSNo='$CssNo' , LabStatus=1,ProceedDate='$Date' Where Id= '$ID'");
    
    $query = $this->db->query("update  dbo . tbl_Outward_Transaction
      Set  Result='$pictureFresh',RDate='$Date',Request_Status='Result Uploaded ' Where TID= '$ID'");
   // return  $query->result_array();

    if($query){
        redirect('UploadResult/upload');
    }
    else{
        return false;
    }

}

// public function Submit($pictureFresh,$TID) {
//       print_r($pictureFresh);
//       die;
 
  
//   }


}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EditCssModel extends CI_Model
{
      public function getCSSDataBlank(){
            $query = $this->db->query("SELECT * FROM tbl_lab_test_request WHERE (CSSNo = '' OR CSSNo IS Null)");
            return  $query->result_array(); 
           }


           public function getNullCssDataById(){
            $query = $this->db->query(" SELECT * FROM tbl_lab_test_request WHERE TID=44
            ");
            return  $query->result_array(); 
           }


           
    public function EditCssCode($id,$CSSNo)
    {
        
        $query = $this->db->query("UPDATE dbo.tbl_lab_test_request 
        SET CSSNo = '$CSSNo'
        WHERE TID='$id'
        ");

        if($query){
            return true;
        }
        else{
            return false;
        }
   
    }

    public function getTestRequests()
    {

        $Month=date('m');
        $Year=date('Y');
        $Day=date('d');
        $CurrentDate=$Year.'/'.$Month.'/'.$Day;

        $query = $this->db->query("SELECT   dbo.View_Test_Request_Pending.*     
        FROM    dbo.View_Test_Request_Pending
        WHERE (Sample_RequestDate BETWEEN CONVERT(DATETIME, '$CurrentDate 00:00:00', 102) AND CONVERT(DATETIME, '$CurrentDate 00:00:00', 102))
        ");

        return $query->result_array();
   
    }

    public function getrequesttest($Requestid){
        $query = $this->db->query(" SELECT * 
    FROM            dbo.view_get_test_name
    WHERE RequestID='$Requestid'");

        return $query->result_array();

    }



}


?>
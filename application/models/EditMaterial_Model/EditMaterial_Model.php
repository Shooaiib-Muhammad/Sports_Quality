<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EditMaterial_Model extends CI_Model
{
      public function getLabRequestData(){
            $query = $this->db->query("SELECT * FROM tbl_lab_test_request WHERE Type = 'Production'");
            return  $query->result_array(); 
           }


           public function getLabRequestDataById(){
            $query = $this->db->query(" SELECT * FROM tbl_lab_test_request WHERE TID=44
            ");
            return  $query->result_array(); 
           }


           
    public function EditMaterialType($id,$materialName)
    {
        
        $query = $this->db->query("UPDATE dbo.tbl_lab_test_request 
        SET MaterialType = '$materialName'
        WHERE TID='$id'
        ");

        if($query){
            return true;
        }
        else{
            return false;
        }
   
    }



}


?>
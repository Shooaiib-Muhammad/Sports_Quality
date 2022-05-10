<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MBB_model extends CI_Model
{

    
    public function bags(){
        
    }
    public function balls(){
        
    }

     public function material($Mname, $status  ) {
     
   

       $query = $this->db->query("INSERT INTO  dbo .tbl_Material_Type  ( Name,Status) VALUES ('$Mname', '$status') ");

      }

      public function getdata(){
        $query = $this->db->query("SELECT dbo.tbl_Material_Type.*
        FROM tbl_Material_Type
       
        ");
          return  $query->result_array();
      }

      public function singleRecord($id){
        $query = $this->db->query("SELECT dbo.tbl_Material_Type.*
        FROM tbl_Material_Type
        WHERE        (TID = $id)
       
        ");
          return  $query->result_array();
      }

      public function updateMaterial($id,$name,$status){
        $query = $this->db->query("UPDATE    dbo.tbl_Material_Type 
        SET   Name  =  '$name',Status='$status'
      WHERE  TID='$id'");  

      }


      public function getbagsData(){
        $query = $this->db->query("SELECT dbo.tbl_BagType.*
        FROM tbl_BagType
        ");
          return  $query->result_array();
      }
}
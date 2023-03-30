<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EditRepModel extends CI_Model
{
      public function getLabEditRep(){
            $query = $this->db->query("SELECT * FROM view_lab_test 
            ORDER BY TestNO DESC
            ");
            return  $query->result_array(); 
           }



           public function getLabRepById($Id){
            $query = $this->db->query(" SELECT * FROM view_lab_test WHERE TID=$Id
            ");
            return  $query->result_array(); 
           }


           public function EditLabRep($Id,$Size,$supplierName,$quantityCarton)
    {
        
        $query = $this->db->query("UPDATE dbo.view_lab_test 
        SET Size = '$Size',Supplier_Name = '$supplierName',Quantity_Carton = $quantityCarton WHERE TID=$Id
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
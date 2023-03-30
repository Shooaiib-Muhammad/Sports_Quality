<?php
defined('BASEPATH') or exit('No direct script access allowed');

class miscellaneousTestModel extends CI_Model
{
      public function CallMiscellaneousTest(){
            $query = $this->db->query("SELECT Name, mislaneous_status FROM dbo.tbl_test_types");
            
            return  $query->result_array(); 
           }


}


?>
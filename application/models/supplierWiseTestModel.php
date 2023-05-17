
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class supplierWiseTestModel extends CI_Model
{

	public function getTestTypematerial()
    {

        $query = $this->db->query("SELECT * 
       FROM     dbo.tbl_test_types  WHERE        (testCatagoty = 'Material Test')");

        return $query->result_array();
    }

	public function submitSupplierTest($testType,$image){
		// echo $testType;
		// echo $image;
	
       $query = $this->db->query("INSERT  INTO dbo.supplierWiseTest 
        (testName,image)
        VALUES
        ('$testType','$image')");

		if($query){
			$this->session->set_flashdata('info', 'Data Saved Successfully');
			redirect('supplierWiseTestController');
		}else {
			$this->session->set_flashdata('danger', 'Data Insertion Failed !!!');
			redirect('supplierWiseTestController');

		}			
        	
	}
	public function getSupplierTest(){
		$query = $this->db->query("SELECT * 
		FROM     dbo.supplierWiseTest ");
 
		 return $query->result_array();
	}
	public function getsignleSupplier($id){
		$query = $this->db->query("SELECT * 
		FROM     dbo.supplierWiseTest WHERE TID =$id ");
 
		 return $query->result_array();
	}
	public function updateSupplierData($id,$updateImage){
		$query = $this->db->query("UPDATE   dbo.supplierWiseTest 
		SET   image  =  '$updateImage'
	  WHERE  TID='$id'");
	  redirect('supplierWiseTestController');
	  return true;	
	}
}

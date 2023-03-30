<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pjumper_Model extends CI_Model
{

// public function Asubmit(){
// 	$HRDB = $this->load->database('HRMS', TRUE);
// 	// $query = $HRDB->query()
// }

//insertion of data in tbl_practice_jumper
public function submit($cardno,
    $deptId,
    $sectionid,
    $designationid){
     
     
      $HRDB = $this->load->database('HRMS', TRUE);
      $query = $HRDB->query("INSERT INTO dbo.tbl_practice_jumper
	  (cardno,deptid,sectionid,desigid)
VALUES
	  
      ($cardno,'$deptId','$sectionid','$designationid')");
    
}
// for displaying data in tabular form 
public function gethistoryData(){
      $HRDB = $this->load->database('HRMS', TRUE);
      $query = $HRDB->query("SELECT TID,cardno,deptid,sectionid,desigid
      
	FROM dbo.tbl_practice_jumper
              ");
                   return  $query->result_array();
			// print_r( $query->result_array());
			// die;
    }

    public function update(){
	
    }
    
    public function delete(){
	$HRDB = $this->load->database('HRMS', TRUE);
      $query = $HRDB->query("DELETE FROM [dbo].[tbl_practice_jumper]
      WHERE ");
	
    }

    public function edit($id){
	$HRDB = $this->load->database('HRMS', TRUE);
      $query = $HRDB->query("DELETE FROM dbo.tbl_practice_jumper
      WHERE TID=$id ");
    }


    
}
?>

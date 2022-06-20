<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JUMPER_Model extends CI_Model
{
      public function CallData($cardNo){
            $HRDB = $this->load->database('HRMS', TRUE);
            $query = $HRDB->query("SELECT       CardNo, Name, FatherName, DesigName, SectionName, DeptName, DeptID, DesignationID, SectionID, EmpStatus
            FROM            dbo.View_Rpt_Acc_AllEmployees
            WHERE        (EmpStatus = 1)  AND (CardNo = $cardNo)");
                    return  $query->result_array(); 
           }
public function CallDept(){
      $HRDB = $this->load->database('HRMS', TRUE);
 $query =  $HRDB->query("SELECT        DeptID, HODName, DeptName
 FROM            dbo.tbl_HRM_Dept
 WHERE        (Status = 1)");


 
  return  $query->result_array();
}
public function CallDesig(){
      $HRDB = $this->load->database('HRMS', TRUE);
 $query =  $HRDB->query("SELECT        DesignationID, DesigName, Status
 FROM            dbo.tbl_HRM_Designation
 WHERE        (Status = 1)");

 
  return  $query->result_array();
}
public function CallSection($Dept){
      $HRDB = $this->load->database('HRMS', TRUE);
      $query =  $HRDB->query("SELECT        SectionName, SectionID, DeptID, Status
      FROM            dbo.tbl_HRM_Section
      WHERE        (DeptID = $Dept) AND (Status = 1)");
     
      
       return  $query->result_array();
}
public function submit($cardno,
    $deptId,
    $sectionid,
    $designationid){
     
      $user=$this->session->has_userdata('user_id');
 
       $HRDB = $this->load->database('HRMS', TRUE);
      $query = $HRDB->query("update  dbo.tbl_jumper
      Set tbl_jumper.Status=0  Where tbl_jumper.cardno= '$cardno'");
      
   // return  $query->result_array();

    if($query){
      $HRDB = $this->load->database('HRMS', TRUE);
      $query = $HRDB->query("INSERT INTO  dbo.tbl_jumper 
      (cardno,deptid,sectionid,designid,userid,Status)
VALUES
      ($cardno,$deptId,$sectionid,$designationid,$user,1)");
    }
    else{
      $HRDB = $this->load->database('HRMS', TRUE);
      $query = $HRDB->query("INSERT INTO  dbo.tbl_jumper 
      (cardno,deptid,sectionid,designid,userid,Status)
VALUES
      ($cardno,$deptId,$sectionid,$designationid,$user,1)");
    }
 


       
    
        
      

    }
    public function gethistoryData($cardno){
      $HRDB = $this->load->database('HRMS', TRUE);
      $query = $HRDB->query("SELECT        view_jumper.*
      FROM            view_jumper 
      WHERE        (view_jumper.cardno = $cardno) ORDER BY dbo.view_jumper.TID DESC");
                  return  $query->result_array();
    }
      public function HourllyReading($s_date, $e_date)
      {
            $query = $this->db->query("SELECT        Reading ,  HourName
FROM            dbo.view_lamination_Hourlly
WHERE        (EntryDate BETWEEN '$s_date' AND '$e_date')");
            return  $query->result_array();
      }


public function getData($s_date){
 $query = $this->db->query("SELECT  TOP (100) PERCENT Reading, CONVERT(Varchar, '$s_date', 103) AS EntryDate, TID, MachineName
 FROM            dbo.tbl_Lamination_Process
 ORDER BY TID DESC
       ");
 return  $query->result_array();
}


}


?>
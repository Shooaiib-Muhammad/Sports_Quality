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

      public function HourllyReading($s_date, $e_date)
      {
            $query = $this->db->query("SELECT        Reading , MachineName, HourName
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
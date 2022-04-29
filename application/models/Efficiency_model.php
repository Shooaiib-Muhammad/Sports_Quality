<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Efficiency_model extends CI_Model
{

    public function __construct()
	{
		parent::__construct();
		$this->load->database();
  $this->load->library('session');
        
	}

 public function departments(){
  $HRDB = $this->load->database('HRMS', TRUE);
  $query = $HRDB->query("SELECT DeptID, DeptName, Status, HODName
  FROM            dbo.tbl_HRM_Dept
  WHERE        (Status = 1)");
          return  $query->result_array(); 
 }

 public function sections($id){
  $HRDB = $this->load->database('HRMS', TRUE);
  $query = $HRDB->query("SELECT        DeptID, SectionName, SectionCode, Status, SectionID
  FROM            dbo.tbl_HRM_Section
  WHERE        (Status = 1) And (DeptID=$id)
  ");
          return  $query->result_array(); 
 }
 public function GetSecionConter($ID){
  $HRDB = $this->load->database('HRMS', TRUE);
  $query = $HRDB->query("SELECT        COUNT(dbo.tbl_HRM_Section.SectionID) AS SectionID, dbo.tbl_HRM_Dept.DeptName
  FROM            dbo.tbl_HRM_Section INNER JOIN
                           dbo.tbl_HRM_Dept ON dbo.tbl_HRM_Section.DeptID = dbo.tbl_HRM_Dept.DeptID
  WHERE        (dbo.tbl_HRM_Section.DeptID = $ID)
  GROUP BY dbo.tbl_HRM_Dept.DeptName
  ");
          return  $query->result_array(); 
  
 }

 public function realTimeAtten($depart,$sect){
        $HRDB = $this->load->database('HRMS', TRUE);
        $query = $HRDB->query("SELECT        EmployeeType, COUNT(EmpCount) AS EmpCount, SUM(RealTime) AS RealTime, SectionName, DeptName, SectionID, DeptID, AttDate, EmpCount AS Count
        FROM            dbo.View_Emp_ATT_REALTIME_CALC_Final
        GROUP BY EmployeeType, SectionName, DeptName, SectionID, DeptID, AttDate, EmpCount
        HAVING        (AttDate = CONVERT(DATETIME, '2022-04-26 00:00:00', 102)) AND (DeptID = $depart) AND (SectionID = $sect)
        
        ");
                return  $query->result_array(); 
 }
}
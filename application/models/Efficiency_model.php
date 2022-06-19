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

        public function departments()
        {
                $HRDB = $this->load->database('HRMS', TRUE);
                $query = $HRDB->query("SELECT DeptID, DeptName, Status, HODName
  FROM            dbo.tbl_HRM_Dept
  WHERE        (Status = 1)");
                return  $query->result_array();
        }

        public function sections($id)
        {
                $HRDB = $this->load->database('HRMS', TRUE);
                $query = $HRDB->query("SELECT        DeptID, SectionName, SectionCode, Status, SectionID
  FROM            dbo.tbl_HRM_Section
  WHERE        (Status = 1) And (DeptID=$id)
  ");
                return  $query->result_array();
        }
        public function GetSecionConter($ID)
        {
                $HRDB = $this->load->database('HRMS', TRUE);
                $query = $HRDB->query("SELECT        COUNT(dbo.tbl_HRM_Section.SectionID) AS SectionID, dbo.tbl_HRM_Dept.DeptName
  FROM            dbo.tbl_HRM_Section INNER JOIN
                           dbo.tbl_HRM_Dept ON dbo.tbl_HRM_Section.DeptID = dbo.tbl_HRM_Dept.DeptID
  WHERE        (dbo.tbl_HRM_Section.DeptID = $ID)
  GROUP BY dbo.tbl_HRM_Dept.DeptName
  ");
                return  $query->result_array();
        }

        public function realTimeAtten($depart, $sect)
        {

                $Month = date('m');
                $Year = date('Y');
                $Day = date('d');
                $CurrentDate = $Year . '-' . $Month . '-' . $Day;
                $HRDB = $this->load->database('HRMS', TRUE);
                $query = $HRDB->query("SELECT        AttDate, RealTime, EmpCount, EmployeeType, SectionName, DeptName
                FROM            dbo.View_Emp_ATT_REALTIME_CALC_Final
        WHERE        (AttDate = CONVERT(DATETIME, '$CurrentDate 00:00:00', 102)) AND (DeptID = $depart) AND (SectionID = $sect) AND (EmployeeType = 'Direct')
        
        ");
                return  $query->result_array();
        }
        public function getEmployees($section, $depart, $type)
        {
                $Month = date('m');
                $Year = date('Y');
                $Day = date('d');
                $CurrentDate = $Year . '-' . $Month . '-' . $Day;
                $HRDB = $this->load->database('HRMS', TRUE);
                $query = $HRDB->query("SELECT        DeptID, SectionID, AttDate, EmpID, AttTime, EmployeeType, CardNo, Name, DesigName
        FROM            dbo.View_Emp_ATT_REALTIME
        WHERE        (AttDate = CONVERT(DATETIME, '$CurrentDate 00:00:00', 102)) AND (DeptID = $depart) AND (SectionID = $section) AND (EmployeeType ='$type')
        
        
        ");
                return  $query->result_array();
        }

        public function getEmployeesNull($section, $depart, $type)
        {
                $Month = date('m');
                $Year = date('Y');
                $Day = date('d');
                $CurrentDate = $Year . '-' . $Month . '-' . $Day;
                $HRDB = $this->load->database('HRMS', TRUE);
                $query = $HRDB->query("SELECT        DeptID, SectionID, AttDate, EmpID, AttTime, EmployeeType, CardNo, Name, DesigName
        FROM            dbo.View_Emp_ATT_REALTIME
        WHERE        (AttDate = CONVERT(DATETIME, '$CurrentDate 00:00:00', 102)) AND (DeptID = $depart) AND (SectionID = $section) AND (EmployeeType IS NULL)
        
        
        ");
                return  $query->result_array();
        }
        public function HourllyReading()
        {
                $Month = date('m');
                $Year = date('Y');
                $Day = date('d');
                $query = $this->db->query("SELECT        balls, HourName,HID
                FROM            dbo.view_RWPD_Hourlly
WHERE        (EntryDate BETWEEN '$Day/$Month/$Year' AND '$Day/$Month/$Year') 
GROUP BY balls, HourName,HID
ORDER BY HID");
                return  $query->result_array();
        }

        public function getRWPDDateRangeDataBar($startDate,$endDate)
        {
                $startMonth = explode("-",$startDate)[1];
                $startYear = explode("-",$startDate)[0];
                $startDay = explode("-",$startDate)[2];
                $endMonth = explode("-",$endDate)[1];
                $endYear = explode("-",$endDate)[0];
                $endDay = explode("-",$endDate)[2];
                $query = $this->db->query("SELECT Date, COUNT(Counter) AS Counter
                FROM            dbo.view_RWPD_DT
                WHERE        (EntryDate BETWEEN '$startDay/$startMonth/$startYear' AND '$endDay/$endMonth/$endYear')
                GROUP BY Date
                ORDER BY Date");
                return  $query->result_array();
        }

        public function getRWPDDateRangeDataMachine($startDate,$endDate)
        {
                $startMonth = explode("-",$startDate)[1];
                $startYear = explode("-",$startDate)[0];
                $startDay = explode("-",$startDate)[2];
                $endMonth = explode("-",$endDate)[1];
                $endYear = explode("-",$endDate)[0];
                $endDay = explode("-",$endDate)[2];
                $query = $this->db->query("SELECT     Date, COUNT(Counter) AS Counter, Name
                FROM            dbo.view_RWPD_DT          
                WHERE        (Date BETWEEN '$startDay/$startMonth/$startYear' AND '$endDay/$endMonth/$endYear')
                GROUP BY Date, Name 
                ORDER BY Name");
                return  $query->result_array();
        }

        public function realTimeAttenDateRange($depart, $sect,$startDate,$endDate)
        {

                $startMonth = explode("-",$startDate)[1];
                $startYear = explode("-",$startDate)[0];
                $startDay = explode("-",$startDate)[2];
                $endMonth = explode("-",$endDate)[1];
                $endYear = explode("-",$endDate)[0];
                $endDay = explode("-",$endDate)[2];
                $HRDB = $this->load->database('HRMS', TRUE);
        
                $query = $HRDB->query("SELECT AttDate, CONVERT(Varchar, AttDate, 103) AS AttDate1,RealTime, EmpCount, EmployeeType, SectionName, DeptName
                FROM            dbo.View_Emp_ATT_REALTIME_CALC_Final
                WHERE        (AttDate BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND (CONVERT(DATETIME, '$endDate 00:00:00', 102))) AND (DeptID = $depart) AND (SectionID = $sect) AND (EmployeeType = 'Direct')
                ORDER BY AttDate
        ");
                return  $query->result_array();
        }
        
}

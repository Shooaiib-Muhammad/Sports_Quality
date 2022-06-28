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

        public function HourllyReadingPanelCutting()
        {
                $Month = date('m');
                $Year = date('Y');
                $Day = date('d');
                $query = $this->db->query("SELECT        TOP (100) PERCENT dbo.view_PC_Panel_Sizing.Date, COUNT(dbo.view_PC_Panel_Sizing.Counter) AS Counter, dbo.tbl_PC_AMB_Hours.HourName, dbo.tbl_PC_AMB_Hours.HourID
                FROM            dbo.view_PC_Panel_Sizing INNER JOIN
                                         dbo.tbl_PC_AMB_Hours ON dbo.view_PC_Panel_Sizing.HID = dbo.tbl_PC_AMB_Hours.Hour
                WHERE        (dbo.view_PC_Panel_Sizing.EntryDate BETWEEN CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102) AND CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
                GROUP BY dbo.view_PC_Panel_Sizing.Date, dbo.tbl_PC_AMB_Hours.HourName, dbo.tbl_PC_AMB_Hours.HourID
                ORDER BY dbo.tbl_PC_AMB_Hours.HourID
                ");
                return  $query->result_array();
        }

        public function HourllyReadingHFCutting()
        {
                $Month = date('m');
                $Year = date('Y');
                $Day = date('d');
                $query = $this->db->query("SELECT        TOP (100) PERCENT COUNT(dbo.view_PC_HF_Cutting.Counter) AS Counter, dbo.tbl_PC_AMB_Hours.HourName
                FROM            dbo.view_PC_HF_Cutting INNER JOIN
                                         dbo.tbl_PC_AMB_Hours ON dbo.view_PC_HF_Cutting.HID = dbo.tbl_PC_AMB_Hours.Hour
                WHERE        (dbo.view_PC_HF_Cutting.EntryDate BETWEEN CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102) AND CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
                GROUP BY dbo.tbl_PC_AMB_Hours.HourID, dbo.tbl_PC_AMB_Hours.HourName
                ORDER BY dbo.tbl_PC_AMB_Hours.HourID
                
                ");
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
        
                $query = $this->db->query("SELECT        SUM(Counter) AS Counter, CONVERT(varchar, Date, 103) AS Date
                FROM            dbo.Table_15
                WHERE        (Date BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
                GROUP BY CONVERT(varchar, Date, 103)");
                return  $query->result_array();
        }

        Public function getCuttingSheetSizingDateRangeData($startDate,$endDate){
            
                $query = $this->db->query("SELECT        MAX(Counter) AS Counter, Date
                FROM            dbo.view_Sheet_Sizing
                WHERE        (EntryDate BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
                GROUP BY Date
    ");
                return  $query->result_array();
     }

     Public function getCuttingSheetSizingDateRangeDataMachineWise($startDate,$endDate){
        $query = $this->db->query("SELECT        MAX(Counter) AS Counter, Date, MachineName
        FROM            dbo.view_Sheet_Sizing
        WHERE        (EntryDate BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
        GROUP BY Date, MachineName
        ORDER BY Date
");
        return  $query->result_array();
}

Public function getCuttingPanelDateRangeData($startDate,$endDate){
            
        $query = $this->db->query("SELECT        Date, COUNT(Counter) AS Counter
        FROM            dbo.view_PC_Panel_Sizing
        WHERE        (EntryDate BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
        GROUP BY Date        
");
        return  $query->result_array();
}

Public function getCuttingPanelDateRangeDataMachineWise($startDate,$endDate){
$query = $this->db->query("SELECT        Date, COUNT(Counter) AS Counter, MachineName
FROM            dbo.view_PC_Panel_Sizing
WHERE        (EntryDate BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
GROUP BY Date, MachineName
ORDER BY Date
");


return  $query->result_array();
}

Public function getCuttingHFDateRangeData($startDate,$endDate){
            
        $query = $this->db->query("SELECT        TOP (100) PERCENT COUNT(Counter) AS Counter, Date
        FROM            dbo.view_PC_HF_Cutting
        WHERE        (EntryDate BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
        GROUP BY Date
        ORDER BY Date
        
");
        return  $query->result_array();
}

Public function getCuttingHFDateRangeDataMachineWise($startDate,$endDate){
$query = $this->db->query("SELECT        TOP (100) PERCENT COUNT(Counter) AS Counter, Date, Name
FROM            dbo.view_PC_HF_Cutting
WHERE        (EntryDate BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
GROUP BY Date, Name
ORDER BY Date

");
return  $query->result_array();
}


Public function getLaminationDateRangeData($startDate,$endDate){
            
        $query = $this->db->query("SELECT        COUNT(dbo.view_lamination_Process.TID) AS Reading, dbo.view_lamination_Process.Date
        FROM            dbo.view_lamination_Process INNER JOIN
                                 dbo.tbl_PC_AMB_Hours ON dbo.view_lamination_Process.HID = dbo.tbl_PC_AMB_Hours.Hour
        WHERE        (dbo.view_lamination_Process.EntryDate BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
        GROUP BY dbo.view_lamination_Process.Date
        ORDER BY Date
        
");
        return  $query->result_array();
}

Public function getLaminationDateRangeDataMachineWise($startDate,$endDate){
$query = $this->db->query("SELECT        COUNT(dbo.view_lamination_Process.TID) AS Reading, dbo.view_lamination_Process.Date, dbo.view_lamination_Process.Name
FROM            dbo.view_lamination_Process INNER JOIN
                         dbo.tbl_PC_AMB_Hours ON dbo.view_lamination_Process.HID = dbo.tbl_PC_AMB_Hours.Hour
WHERE        (dbo.view_lamination_Process.EntryDate BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
GROUP BY dbo.view_lamination_Process.Date, dbo.view_lamination_Process.Name

ORDER BY Date

");


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
                $query = $this->db->query("SELECT        SUM(Counter) AS Counter, CONVERT(varchar, Date, 103) AS Date, Name
                FROM            dbo.Table_15         
                WHERE        (Date BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
                GROUP BY CONVERT(varchar, Date, 103), Name
                ORDER BY Date
                ");
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
        public function gettingambcoreData($startDate,$endDate){
            
                
                $query = $this->db->query("SELECT        Date, COUNT(counter) AS Counter
                FROM            dbo.view_PC_Core
                WHERE        (Entrydate BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
                GROUP BY Date
                
    ");
                return  $query->result_array();

        }

        public function HourllyReadingCutting()
        {
                $Month = date('m');
                $Year = date('Y');
                $Day = date('d');
                $query = $this->db->query("SELECT        TOP (100) PERCENT dbo.tbl_PC_AMB_Hours.HourName, MAX(dbo.view_PC_Cutting_Process.Counter) AS Counter
                FROM            dbo.view_PC_Cutting_Process INNER JOIN
                                         dbo.tbl_PC_AMB_Hours ON dbo.view_PC_Cutting_Process.HID = dbo.tbl_PC_AMB_Hours.Hour
                WHERE        (dbo.view_PC_Cutting_Process.EntryDate = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
                GROUP BY dbo.tbl_PC_AMB_Hours.HourName, dbo.view_PC_Cutting_Process.HID, dbo.tbl_PC_AMB_Hours.HourID
                ORDER BY dbo.tbl_PC_AMB_Hours.HourID");
                return  $query->result_array();
        }

        public function gettingCarcasData($startDate,$endDate){
            
                $startMonth = explode("-",$startDate)[1];
                $startYear = explode("-",$startDate)[0];
                $startDay = explode("-",$startDate)[2];
                $endMonth = explode("-",$endDate)[1];
                $endYear = explode("-",$endDate)[0];
                $endDay = explode("-",$endDate)[2];
                $query = $this->db->query("SELECT        COUNT(Counter) AS Counter, Date
                FROM            dbo.view_prd_carcas
                WHERE        (EntryDate BETWEEN CONVERT(DATETIME, '$startYear-$startMonth-$startDay 00:00:00', 102) AND CONVERT(DATETIME, '$endYear-$endMonth-$endDay 00:00:00', 102))
                GROUP BY Date
                
                
    ");
                return  $query->result_array();

        }
        public function gettinglfbCarcasData($startDate,$endDate){
            
                $startMonth = explode("-",$startDate)[1];
                $startYear = explode("-",$startDate)[0];
                $startDay = explode("-",$startDate)[2];
                $endMonth = explode("-",$endDate)[1];
                $endYear = explode("-",$endDate)[0];
                $endDay = explode("-",$endDate)[2];
                $query = $this->db->query("SELECT        COUNT(Counter) AS Counter, Date
                FROM            dbo.view_Prd_Lfb_Carcas
                WHERE        (EntryDate BETWEEN CONVERT(DATETIME, '$startYear-$startMonth-$startDay 00:00:00', 102) AND CONVERT(DATETIME, '$endYear-$endMonth-$endDay 00:00:00', 102))
                GROUP BY Date
                
                
    ");
                return  $query->result_array();

        }

        public function getMSLinesDateRangeData($startDate,$endDate){
            
                $startMonth = explode("-",$startDate)[1];
                $startYear = explode("-",$startDate)[0];
                $startDay = explode("-",$startDate)[2];
                $endMonth = explode("-",$endDate)[1];
                $endYear = explode("-",$endDate)[0];
                $endDay = explode("-",$endDate)[2];
                $query = $this->db->query("SELECT        TOP (100) PERCENT SUM(TotalChecked) AS Counter, Date
                FROM            dbo.view_PC_MS_Lines
                WHERE        (EntryDate BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
                GROUP BY Date
                ORDER BY Date
                
                
    ");
                return  $query->result_array();

        }

        public function getMSLinesDateRangeDataMachineWise($startDate,$endDate)
        {
                $startMonth = explode("-",$startDate)[1];
                $startYear = explode("-",$startDate)[0];
                $startDay = explode("-",$startDate)[2];
                $endMonth = explode("-",$endDate)[1];
                $endYear = explode("-",$endDate)[0];
                $endDay = explode("-",$endDate)[2];
                $query = $this->db->query("SELECT        TOP (100) PERCENT SUM(TotalChecked) AS Counter, Date, LineName AS Name
                FROM            dbo.view_PC_MS_Lines
                WHERE        (EntryDate BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
                GROUP BY Date, LineName
                 
                ORDER BY LineName");
                return  $query->result_array();
        }

        public function getBladderWindingDateRangeData($startDate,$endDate){
            
                $startMonth = explode("-",$startDate)[1];
                $startYear = explode("-",$startDate)[0];
                $startDay = explode("-",$startDate)[2];
                $endMonth = explode("-",$endDate)[1];
                $endYear = explode("-",$endDate)[0];
                $endDay = explode("-",$endDate)[2];
                $query = $this->db->query("SELECT        COUNT(Counter) AS Counter, Date
                FROM            dbo.view_Bladder_Winding_FInal
                WHERE        (EntryDate BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
                GROUP BY Date
                
                ORDER BY Date
                
                
    ");
                return  $query->result_array();

        }

        public function getBladderWindingDateRangeDataMachineWise($startDate,$endDate)
        {
                $startMonth = explode("-",$startDate)[1];
                $startYear = explode("-",$startDate)[0];
                $startDay = explode("-",$startDate)[2];
                $endMonth = explode("-",$endDate)[1];
                $endYear = explode("-",$endDate)[0];
                $endDay = explode("-",$endDate)[2];
                $query = $this->db->query("SELECT        COUNT(Counter) AS Counter, Date, Name
                FROM            dbo.view_Bladder_Winding_FInal
                WHERE        (EntryDate BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
                GROUP BY Date, Name
                ORDER BY Name
                ");
                return  $query->result_array();
        }

        public function getTMDateRangeData($startDate,$endDate){
            
                $startMonth = explode("-",$startDate)[1];
                $startYear = explode("-",$startDate)[0];
                $startDay = explode("-",$startDate)[2];
                $endMonth = explode("-",$endDate)[1];
                $endYear = explode("-",$endDate)[0];
                $endDay = explode("-",$endDate)[2];
                $query = $this->db->query("SELECT        CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103) AS DateName, SUM(dbo.tbl_TM_Final_QC.Inspected) AS Pass
                FROM            dbo.tbl_TM_Final_QC INNER JOIN
                                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_TM_Final_QC.DayNo = dbo.tbl_Inv_Tran_Date.DayNo
                WHERE        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
                GROUP BY CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103)
                ORDER BY DateName                 
    ");
                return  $query->result_array();

        }

        public function getTMDateRangeDataMachineWise($startDate,$endDate)
        {
                $startMonth = explode("-",$startDate)[1];
                $startYear = explode("-",$startDate)[0];
                $startDay = explode("-",$startDate)[2];
                $endMonth = explode("-",$endDate)[1];
                $endYear = explode("-",$endDate)[0];
                $endDay = explode("-",$endDate)[2];
                $query = $this->db->query("SELECT        CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103) AS DateName, SUM(dbo.tbl_TM_Final_QC.Inspected) AS Pass, dbo.tbl_TM_Final_QC.FactoryCode
                FROM            dbo.tbl_TM_Final_QC INNER JOIN
                                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_TM_Final_QC.DayNo = dbo.tbl_Inv_Tran_Date.DayNo
                WHERE        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
                GROUP BY CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103), dbo.tbl_TM_Final_QC.FactoryCode
        
                ");
                return  $query->result_array();
        }

        public function getAMBAssemblingDateRangeData($startDate,$endDate){
            
                $startMonth = explode("-",$startDate)[1];
                $startYear = explode("-",$startDate)[0];
                $startDay = explode("-",$startDate)[2];
                $endMonth = explode("-",$endDate)[1];
                $endYear = explode("-",$endDate)[0];
                $endDay = explode("-",$endDate)[2];
                $query = $this->db->query("SELECT        CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103) AS DateName, SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked) AS PassQty
                FROM            dbo.tbl_PC_AMB_Hours_Tran INNER JOIN
                                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_PC_AMB_Hours_Tran.DayID = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                                         dbo.tbl_PC_AMB_Line ON dbo.tbl_PC_AMB_Hours_Tran.LineID = dbo.tbl_PC_AMB_Line.LineID
                WHERE        (dbo.tbl_PC_AMB_Hours_Tran.ProcessID = 1) AND (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
                GROUP BY CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103)
                HAVING        (SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked) > 0)
                ORDER BY DateName
    ");
                return  $query->result_array();

        }

        public function getAMBAssemblingDateRangeDataMachineWise($startDate,$endDate)
        {
                $startMonth = explode("-",$startDate)[1];
                $startYear = explode("-",$startDate)[0];
                $startDay = explode("-",$startDate)[2];
                $endMonth = explode("-",$endDate)[1];
                $endYear = explode("-",$endDate)[0];
                $endDay = explode("-",$endDate)[2];
                $query = $this->db->query("SELECT        CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103) AS DateName, SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked) AS PassQty, dbo.tbl_PC_AMB_Line.LineName
                FROM            dbo.tbl_PC_AMB_Hours_Tran INNER JOIN
                                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_PC_AMB_Hours_Tran.DayID = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                                         dbo.tbl_PC_AMB_Line ON dbo.tbl_PC_AMB_Hours_Tran.LineID = dbo.tbl_PC_AMB_Line.LineID
                WHERE        (dbo.tbl_PC_AMB_Hours_Tran.ProcessID = 1) AND (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
                GROUP BY CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103), dbo.tbl_PC_AMB_Line.LineName
                HAVING        (SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked) > 0)
                ORDER BY DateName
                ");
                return  $query->result_array();
        }

        public function getAMBPackingDateRangeData($startDate,$endDate){
            
                $startMonth = explode("-",$startDate)[1];
                $startYear = explode("-",$startDate)[0];
                $startDay = explode("-",$startDate)[2];
                $endMonth = explode("-",$endDate)[1];
                $endYear = explode("-",$endDate)[0];
                $endDay = explode("-",$endDate)[2];
                $query = $this->db->query("SELECT        CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103) AS DateName, SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked) AS PassQty
                FROM            dbo.tbl_PC_AMB_Hours_Tran INNER JOIN
                                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_PC_AMB_Hours_Tran.DayID = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                                         dbo.tbl_PC_AMB_Line ON dbo.tbl_PC_AMB_Hours_Tran.LineID = dbo.tbl_PC_AMB_Line.LineID
                WHERE        (dbo.tbl_PC_AMB_Hours_Tran.ProcessID = 2) AND (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
                GROUP BY CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103)
                HAVING        (SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked) > 0)
                ORDER BY DateName
                    
    ");
                return  $query->result_array();

        }

        public function getAMBPackingDateRangeDataMachineWise($startDate,$endDate)
        {
                $startMonth = explode("-",$startDate)[1];
                $startYear = explode("-",$startDate)[0];
                $startDay = explode("-",$startDate)[2];
                $endMonth = explode("-",$endDate)[1];
                $endYear = explode("-",$endDate)[0];
                $endDay = explode("-",$endDate)[2];
                $query = $this->db->query("SELECT        CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103) AS DateName, SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked) AS PassQty, dbo.tbl_PC_AMB_Line.LineName
                FROM            dbo.tbl_PC_AMB_Hours_Tran INNER JOIN
                                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_PC_AMB_Hours_Tran.DayID = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                                         dbo.tbl_PC_AMB_Line ON dbo.tbl_PC_AMB_Hours_Tran.LineID = dbo.tbl_PC_AMB_Line.LineID
                WHERE        (dbo.tbl_PC_AMB_Hours_Tran.ProcessID = 2) AND (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
                GROUP BY CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103), dbo.tbl_PC_AMB_Line.LineName
                HAVING        (SUM(dbo.tbl_PC_AMB_Hours_Tran.TotalChecked) > 0)
                ORDER BY DateName
                
                ");
                return  $query->result_array();
        }

        public function getLFBDateRangeData($startDate,$endDate){
            
                $startMonth = explode("-",$startDate)[1];
                $startYear = explode("-",$startDate)[0];
                $startDay = explode("-",$startDate)[2];
                $endMonth = explode("-",$endDate)[1];
                $endYear = explode("-",$endDate)[0];
                $endDay = explode("-",$endDate)[2];
                $query = $this->db->query("SELECT        SUM(TotalPass) AS Pass, DateName
                FROM            dbo.view_Packing_LFB
                WHERE        (EntryDate BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
                GROUP BY DateName
                ORDER BY DateName
                    
    ");
                return  $query->result_array();

        }

        public function getLFBDateRangeDataMachineWise($startDate,$endDate)
        {
                $startMonth = explode("-",$startDate)[1];
                $startYear = explode("-",$startDate)[0];
                $startDay = explode("-",$startDate)[2];
                $endMonth = explode("-",$endDate)[1];
                $endYear = explode("-",$endDate)[0];
                $endDay = explode("-",$endDate)[2];
                $query = $this->db->query("SELECT        SUM(TotalPass) AS Pass, DateName, SysIp AS Name
                FROM            dbo.view_Packing_LFB
                WHERE        (EntryDate BETWEEN CONVERT(DATETIME, '$startDate 00:00:00', 102) AND CONVERT(DATETIME, '$endDate 00:00:00', 102))
                GROUP BY DateName, SysIp
                ORDER BY DateName
                
                ");
                return  $query->result_array();
        }
        
        
        
        
}

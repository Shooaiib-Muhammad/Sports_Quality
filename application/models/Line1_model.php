<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Line1_model extends CI_Model 
{
///////////////////////////////////////////// Quries Execute Before 9:00 AM ////////////////////////////////////////////
	public function GetSectionData($SectionID)
	{        
		$HRDB = $this->load->database('HRMS', TRUE);
		$query = $HRDB->query("SELECT SectionID, SectionName FROM dbo.tbl_HRM_Section WHERE SectionID = $SectionID");
		return $query->result_array();
	}	
	public function GetTotalAbsent($Day, $Month, $Year, $DeptId, $SectionID)
	{
		$HRDB = $this->load->database('HRMS', TRUE);
		$query = $HRDB->query("SELECT EmpID, CardNo, Name, DeptName, SectionName, DesigName, Gender,SectionID,DeptID, 
            DesignationID 
            FROM  dbo.View_Emp_Data  Where DeptID=$DeptId And SectionID=$SectionID EXCEPT
            SELECT     EmpID, CardNo, Name, DeptName, SectionName, DesigName, Gender,SectionID,DeptID, 
                        DesignationID
            FROM         View_att_leave_data_final
            WHERE     YEAR(AttDate) = $Year And MONTH(AttDate) = $Month AND DAY(AttDate) = $Day And DeptID=$DeptId And SectionID=$SectionID");
		return $query->num_rows();
	}
	public function GetTotalEmp($DeptId, $SectionID)
	{
		$HRDB = $this->load->database('HRMS', TRUE);
		$query = $HRDB->query("SELECT        COUNT(CardNo) AS CardNo
			FROM            dbo.View_Emp_Data
			WHERE        (DeptID = $DeptId) AND (SectionID = $SectionID)");
		$result = $query->result_array();
		return $result[0]['CardNo'];
	}
	public function GetTotalPresent($Day, $Month, $Year, $DeptId, $SectionID)
	{
		$HRDB = $this->load->database('HRMS', TRUE);
		$query = $HRDB->query("SELECT COUNT(CardNo) AS CardNo
			FROM   dbo.View_Emp_Attendance
			WHERE  (Day = $Day) AND (Month = $Month) AND (Year = $Year) AND (SectionID = $SectionID) AND (DeptID = $DeptId)");
		$result = $query->result_array();
		return $result[0]['CardNo'];
	}	
	public function GetTotalLeave($Day, $Month, $Year, $DeptId, $SectionID)
	{
		$HRDB = $this->load->database('HRMS', TRUE);
		$query = $HRDB->query("SELECT        COUNT(dbo.View_Emp_Data.CardNo) AS CardNo
			FROM            dbo.View_Emp_Data INNER JOIN
                         dbo.tbl_PayRoll_LongLeaves ON dbo.View_Emp_Data.EmpID = dbo.tbl_PayRoll_LongLeaves.EmpID
			WHERE        (dbo.View_Emp_Data.DeptID = $DeptId) AND (dbo.View_Emp_Data.SectionID = $SectionID) AND (DAY(dbo.tbl_PayRoll_LongLeaves.LeaveDate) = $Day) AND 
                         (MONTH(dbo.tbl_PayRoll_LongLeaves.LeaveDate) = $Month) AND (YEAR(dbo.tbl_PayRoll_LongLeaves.LeaveDate) = $Year)");
		$result = $query->result_array();
		return $result[0]['CardNo'];
	}	
	public function GetAbsentEmpData($Day, $Month, $Year, $DeptId, $SectionID)
	{
		$HRDB = $this->load->database('HRMS', TRUE);
		$query = $HRDB->query("SELECT        EmpID, CardNo, Name, DeptName, SectionName, DesigName, Gender,SectionID,DeptID, 
                        DesignationID
			FROM            dbo.View_Emp_Data  Where DeptID=$DeptId And SectionID=$SectionID
							EXCEPT
			SELECT     EmpID, CardNo, Name, DeptName, SectionName, DesigName, Gender,SectionID,DeptID, 
                        DesignationID
 			 FROM         View_att_leave_data_final
  			WHERE     YEAR(AttDate) = $Year And MONTH(AttDate) = $Month AND DAY(AttDate) = $Day And DeptID=$DeptId And SectionID=$SectionID");
		return $query->result_array();
	}	
	public function GetPresentEmpData($Day, $Month, $Year, $DeptId, $SectionID)
	{
		$HRDB = $this->load->database('HRMS', TRUE);
		$query = $HRDB->query("SELECT  DesigName, COUNT(CardNo) AS CardNo, DesignationID
			FROM            dbo.View_Emp_Data
			WHERE        (SectionID = $SectionID) AND (DeptID = $DeptId)
			GROUP BY DesigName, DesignationID");
		return $query->result_array();
	}	
	public function GetLeaveEmpData($Day, $Month, $Year, $DeptId, $SectionID)
	{
		$HRDB = $this->load->database('HRMS', TRUE);
		$query = $HRDB->query("SELECT dbo.View_Emp_Data.CardNo, dbo.View_Emp_Data.Name, dbo.View_Emp_Data.DeptName, dbo.View_Emp_Data.DesigName, 
                         dbo.View_Emp_Data.Gender,dbo.tbl_PayRoll_LongLeaves.LeaveType
FROM            dbo.View_Emp_Data INNER JOIN
                         dbo.tbl_PayRoll_LongLeaves ON dbo.View_Emp_Data.EmpID = dbo.tbl_PayRoll_LongLeaves.EmpID
WHERE          (dbo.View_Emp_Data.DeptID = $DeptId) AND (dbo.View_Emp_Data.SectionID = $SectionID) AND (DAY(dbo.tbl_PayRoll_LongLeaves.LeaveDate) = $Day) AND 
                         (MONTH(dbo.tbl_PayRoll_LongLeaves.LeaveDate) = $Month) AND (YEAR(dbo.tbl_PayRoll_LongLeaves.LeaveDate) = $Year)
GROUP BY dbo.View_Emp_Data.Name, dbo.View_Emp_Data.DeptName, dbo.View_Emp_Data.DesigName, dbo.View_Emp_Data.Gender,dbo.tbl_PayRoll_LongLeaves.LeaveType,dbo.View_Emp_Data.CardNo");
		return $query->result_array();
	}	



	///////////////////////////////////////////// Function Execute After 9:00 AM ////////////////////////////////////////////
	// For Get Line Information 
	public function GetLineInfo()
	{
		$query = $this->db->query('SELECT LineName, LineID FROM dbo.tbl_PC_AMB_Line WHERE (LineID = 3)');
		if($query->num_rows()>0){
			return $query->result_array();
		}
	}
	// Get Graph Data
	public function GetGraphData($Day, $Month, $Year, $LineID)
	{

		
		

		$query = $this->db->query("SELECT        TOP (100) PERCENT dbo.tbl_PC_AMB_Hours.HourName, SUM(dbo.View_MS_Prd_Hourlly_Pre.TotalChecked) AS TotalChecked, SUM(dbo.View_MS_Prd_Hourlly_Pre.Pass) AS Pass, dbo.tbl_PC_AMB_Hours.HourID, 
                         dbo.tbl_Inv_Tran_Date.DateName, SUM(dbo.View_MS_Prd_Hourlly_Pre.Fail) AS Fail
FROM            dbo.View_MS_Prd_Hourlly_Pre INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.View_MS_Prd_Hourlly_Pre.DayNo = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                         dbo.tbl_PC_AMB_Hours ON dbo.View_MS_Prd_Hourlly_Pre.HID = dbo.tbl_PC_AMB_Hours.Hour
WHERE        (dbo.View_MS_Prd_Hourlly_Pre.Status = 1) AND (DAY(dbo.tbl_Inv_Tran_Date.DateName) = $Day) AND (MONTH(dbo.tbl_Inv_Tran_Date.DateName) = $Month) AND (YEAR(dbo.tbl_Inv_Tran_Date.DateName) =$Year) AND 
                         (dbo.View_MS_Prd_Hourlly_Pre.Line = $LineID)
GROUP BY dbo.tbl_PC_AMB_Hours.HourName, dbo.tbl_PC_AMB_Hours.HourID, dbo.tbl_Inv_Tran_Date.DateName
ORDER BY dbo.tbl_PC_AMB_Hours.HourID"); 
		return $query->result_array();
	}	
	public function GetEFFData($Day, $Month, $Year, $LineID)
	{
		$query = $this->db->query("SELECT        View_Web_MS_LinesWise.* From View_Web_MS_LinesWise
		WHERE        (Line = '$LineID') AND (DAY = '$Day') AND (MONTH = '$Month') AND (YEAR= '$Year')and 
		  (TotalChecked > 0) ORDER BY HourID");
		return $query->result_array();
	}	
	public function GetDownTime($Day, $Month, $Year, $LineID)
	{
		$query = $this->db->query("SELECT Reason, SUM(Mints) AS Mints FROM dbo.MS_WEB_Downtime
			WHERE (dbo.MS_WEB_Downtime.DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))AND (dbo.MS_WEB_Downtime.LineID =$LineID ) GROUP BY Reason");
		return $query->result_array();
	}	
	public function GetBladderData(){
		
$query = $this->db->query("SELECT        CompanyName, BladderTpye, Size, TotalChecked, Pass, JointFault + NozzleFault + BodyFault + WeightFault + SizeFault AS Fail, JointFault, NozzleFault, BodyFault, WeightFault, SizeFault, DateName, CONVERT(Varchar, 
DateName, 103) AS Datee
FROM            dbo.View_QC_Bladders_Qty_Sum
WHERE        (DateName BETWEEN CONVERT(DATETIME, '2020-11-01 00:00:00', 102) AND CONVERT(DATETIME, '2020-11-14 00:00:00', 102))");
		return $query->result_array();

	}
	public function GetMLPData(){
		
		$query = $this->db->query("SELECT        ArtSize, SUM(Trail + Op + inkFault + LamProb + Cuttingmaterial + Pmaterial) AS Fail
		FROM            dbo.View_MLP_Rejection
		WHERE        (DateName = CONVERT(DATETIME, '2020-11-15 00:00:00', 102))
		GROUP BY ArtSize
		HAVING        (SUM(Trail + Op + inkFault + LamProb + Cuttingmaterial + Pmaterial) > 0)");
				return $query->result_array();
		
			}
			public function GetMLPArtData(){
		
				$query = $this->db->query("SELECT        SUM(Trail + Op + inkFault + LamProb + Cuttingmaterial + Pmaterial) AS Fail,
				 ArtCode, ArtSize
				FROM            dbo.View_MLP_Rejection
				WHERE        (DateName = CONVERT(DATETIME, '2020-11-14 00:00:00', 102))
				GROUP BY ArtCode, ArtSize
				HAVING        (SUM(Trail + Op + inkFault + LamProb + Cuttingmaterial + Pmaterial) > 0)");
						return $query->result_array();
				
					}
}		
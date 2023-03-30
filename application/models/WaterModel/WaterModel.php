<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WaterModel extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}
	public function waterinfo()
	{
		$Month = date('m');
		$Year = date('Y');
		$Day = date('d');
		$Hour = date('H');
		$query = $this->db->query("
	 SELECT     *
FROM            dbo.view_Water_Metter");
		return  $query->result_array();
	}


	public function waterinfoByHourly()
	{
		// $Month = date('m');
		// $Year = date('Y');
		// $Day = date('d');
		// $Hour = date('H');
		$query = $this->db->query("SELECT * FROM dbo.view_Water_meter_Hourlly");
		return  $query->result_array();
	}

public function waterOverAllData(){

	$Month = date('m');
	$Year = date('Y');
	$Day = date('d');
	$Hour = date('H');

	$query = $this->db->query("SELECT        MAX(Output) AS Output, DID, DATEADD(dd, 0, DATEDIFF(dd, 0, EntryDate)) AS EntryDate,
	CASE
    WHEN DID= 1 THEN 'Rwpd water 1'
    WHEN DID = 2 THEN 'Rwpd water 2'
	WHEN DID= 3 THEN 'LFB Hall Water Meter'
    WHEN DID = 4 THEN 'Canteen Building Meter'
	WHEN DID = 5 THEN 'Account Office Building'
	WHEN DID = 6 THEN 'TM & AMB Building'

	END AS Hallname

	FROM            dbo.tbl_water_meter
	GROUP BY DID, DATEADD(dd, 0, DATEDIFF(dd, 0, EntryDate))
	HAVING        (DATEADD(dd, 0, DATEDIFF(dd, 0, EntryDate)) = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
	ORDER BY DID
	
	");
	return  $query->result_array();
}

public function waterHourlyData(){

	$Month = date('m');
	$Year = date('Y');
	$Day = date('d');
	$Hour = date('H');

	$query = $this->db->query("SELECT        Output, HourName, EntryDate, DID
	
	FROM            dbo.view_Water_meter_Hourlly
	WHERE        (EntryDate = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
	ORDER BY HourID


	");


	return  $query->result_array();
}
	
public function waterinfoByDateRange($sDate,$eDate)
{
	$Month = date('m');
	$Year = date('Y');
	$Day = date('d');
	$Hour = date('H');
	// SELECT        TOP (100) PERCENT EntryDate, SUM(Output) AS Output
	// FROM            dbo.view_Water_Metter
	// GROUP BY EntryDate
	$query = $this->db->query("SELECT        TOP (100) PERCENT SUM(OutPut) AS OutPut, EntryDate
	FROM            dbo.view_Water_Metter
	GROUP BY EntryDate
	HAVING        (EntryDate BETWEEN CONVERT(DATETIME, '$sDate 00:00:00', 102) AND CONVERT(DATETIME, '$eDate 00:00:00', 102))
	ORDER BY EntryDate
	");


	return  $query->result_array();
	
}


public function waterinfoByHourlyByDate($sDate,$eDate)
{
	$Month = date('m');
	$Year = date('Y');
	$Day = date('d');
	$Hour = date('H');

	
	$query = $this->db->query("SELECT        TOP (100) PERCENT SUM(OutPut) AS OutPut, EntryDate, DID,
		CASE
    WHEN DID= 1 THEN 'Rwpd water 1'
    WHEN DID = 2 THEN 'Rwpd water 2'
	WHEN DID= 3 THEN 'LFB Hall Water Meter'
    WHEN DID = 4 THEN 'Canteen Building Meter'
	WHEN DID = 5 THEN 'Account Office Building'
	WHEN DID = 6 THEN 'TM & AMB Building'
	END AS Hallname
	FROM            dbo.view_Water_Metter
	GROUP BY EntryDate, DID
	HAVING        (EntryDate BETWEEN CONVERT(DATETIME, '$sDate 00:00:00', 102) AND CONVERT(DATETIME, '$eDate 00:00:00', 102))
	ORDER BY EntryDate, DID
	");


	return  $query->result_array();
	
}


// All employee Number Per Department
public function toatalemployeesPerDept()
{
	$Month = date('m');
	$Year = date('Y');
	$Day = date('d');
	$Hour = date('H');
	$HRMS = $this->load->database('HRMS', TRUE);

	$query = $HRMS->query("SELECT        AttDAte, Dept, EmpCount
FROM            dbo.view_ALl_Emp_Dept
WHERE        (AttDAte = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))") ;

	return  $query->result_array();
	
}
// Employee Per Hourly Data
public function employeesDataPerHourly()
{
	$Month = date('m');
	$Year = date('Y');
	$Day = date('d');
	$Hour = date('H');
	$HRMS = $this->load->database('HRMS', TRUE);

	$query = $HRMS->query("SELECT        AttDAte, Dept, EmpCount, HourName
	FROM            dbo.View_All_Emp_Hours
	WHERE        (AttDAte = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102)) ") ;

	return  $query->result_array();
	
}


}






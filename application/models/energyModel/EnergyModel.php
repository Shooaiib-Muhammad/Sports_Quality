<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EnergyModel extends CI_Model
{

 public function __construct()
 {
  parent::__construct();
  $this->load->database();
  $this->load->library('session');
 }
 public function CallData()
	{
		$Month = date('m');
		$Year = date('Y');
		$Day = date('d');
		$Hour = date('H');
	 $query = $this->db->query("SELECT  Day, Month, Year, Hours, Energy
	 FROM           dbo.view_Energy    WHERE (Day = $Day) AND (Month =$Month) AND (Year = $Year) AND (Hours = $Hour) ");
	 return  $query->result_array();
	}
	public function getData()
	{
		$Month = date('m');
		$Year = date('Y');
		$Day = date('d');
	
	 $query = $this->db->query("	SELECT        Energy, CONVERT(Varchar, EntryDate, 103) AS EntryDate
	 FROM            dbo.view_Energy
	 WHERE        (CONVERT(Varchar, EntryDate, 103) = '$Day/$Month/$Year')");
	 return  $query->result_array();
	}
	public function FACILITY(){
		
		$Month = date('m');
		$Year = date('Y');
		$Day = date('d');

		$query = $this->db->query("SELECT        TOP (100) PERCENT HallName, Energy
FROM            dbo.tbl_Prod_Energy_Info
HAVING        (DAY(EntryTime) = $Day) AND (MONTH(EntryTime) = $Month) AND (YEAR(EntryTime) = $Year) AND (HallName = 'FACILITY')");
		return  $query->result_array();
	}
	
	public function MSPRESS()
	{

		$Month = date('m');
		$Year = date('Y');
		$Day = date('d');

		$query = $this->db->query("SELECT        TOP (100) PERCENT HallName, Energy
FROM            dbo.tbl_Prod_Energy_Info
where        (DAY(EntryTime) = $Day) AND (MONTH(EntryTime) = $Month) AND (YEAR(EntryTime) = $Year) AND (HallName = 'MS PRESS') AND (Energy > 1)");
		return  $query->result_array();
	}
	public function MSPRINTING()
	{

		$Month = date('m');
		$Year = date('Y');
		$Day = date('d');

		$query = $this->db->query("SELECT        TOP (100) PERCENT HallName, Energy
FROM            dbo.tbl_Prod_Energy_Info
where        (DAY(EntryTime) = $Day) AND (MONTH(EntryTime) = $Month) AND (YEAR(EntryTime) = $Year) AND (HallName = 'MS PRINTING')  AND (Energy > 1)");
		return  $query->result_array();
	}
	public function AllFACILITY()
	{

		$Month = date('m');
		$Year = date('Y');
		$Day = date('d');

		$query = $this->db->query("SELECT       TOP (100) PERCENT HallName, EntryTime, Energy, DAY(EntryDate) AS Day, MONTH(EntryDate) AS Month, YEAR(EntryDate) AS Year,
		 { fn HOUR(EntryDate) } AS Hour

FROM            dbo.tbl_Prod_Energy_Info
where        (DAY(EntryDate) = $Day) AND (MONTH(EntryDate) = $Month) AND (YEAR(EntryDate) = $Year) AND (HallName = 'FACILITY') AND (Energy > 1)");
		return  $query->result_array();
	}
	public function dailyenergy()
	{

		$Month = date('m');
		$Year = date('Y');
		$Day = date('d');

		$query = $this->db->query("SELECT        TOP (100) PERCENT HallName, Energy
FROM            dbo.tbl_Prod_Energy_Info
where        (DAY(EntryTime) = $Day) AND (MONTH(EntryTime) = $Month) AND (YEAR(EntryTime) = $Year)  AND (Energy > 1)");
		return  $query->result_array();
	}
	public function energyinfo(){
		$Month = date('m');
		$Year = date('Y');
		$Day = date('d');

		$query = $this->db->query("SELECT        TOP (100) PERCENT HallName, Energy, ID
		FROM            dbo.tbl_Prod_Energy_Info
		WHERE        (Energy > 0) AND (DAY(EntryTime) = $Day) AND (MONTH(EntryTime) = $Month) AND (YEAR(EntryTime) = $Year)
		ORDER BY ID DESC");
		return  $query->result_array();
		
	}
}

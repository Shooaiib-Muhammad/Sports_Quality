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

}

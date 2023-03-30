<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ball_Shaping extends CI_Model
{
    public function getData()
    {
      $Month = date('m');
      $Year = date('Y');
      $Day = date('d');
			$query = $this->db->query("SELECT    SUM(OutPut) AS OutPut
			FROM            dbo.view_BallShaping_machineWise
			WHERE        (EntryDate = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))");
      return  $query->result_array();
    }
    public function Stationwise()
    {
      $Month = date('m');
      $Year = date('Y');
      $Day = date('d');
        $query = $this->db->query("SELECT         MAX(dbo.tbl_BallShaping.OutPut) AS OutPut, dbo.tbl_BallShaping.MID, dbo.tbl_DMMS_Dept_Machine.Name, DATEADD(dd, 0, DATEDIFF(dd, 0, dbo.tbl_BallShaping.EntryDate)) AS EntryDate
FROM            dbo.tbl_BallShaping INNER JOIN
                         dbo.tbl_DMMS_Dept_Machine ON dbo.tbl_BallShaping.MID = dbo.tbl_DMMS_Dept_Machine.DMID
GROUP BY dbo.tbl_BallShaping.MID, dbo.tbl_DMMS_Dept_Machine.Name, DATEADD(dd, 0, DATEDIFF(dd, 0, dbo.tbl_BallShaping.EntryDate))
HAVING        (DATEADD(dd, 0, DATEDIFF(dd, 0, dbo.tbl_BallShaping.EntryDate)) = 
CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
ORDER BY dbo.tbl_DMMS_Dept_Machine.Name
        ");
			return  $query->result_array();

    }
    public function RowCounter()
    {
      $Month = date('m');
      $Year = date('Y');
      $Day = date('d');
        $query = $this->db->query("SELECT         MAX(dbo.tbl_BallShaping.OutPut) AS OutPut, dbo.tbl_BallShaping.MID, dbo.tbl_DMMS_Dept_Machine.Name, DATEADD(dd, 0, DATEDIFF(dd, 0, dbo.tbl_BallShaping.EntryDate)) AS EntryDate
FROM            dbo.tbl_BallShaping INNER JOIN
                         dbo.tbl_DMMS_Dept_Machine ON dbo.tbl_BallShaping.MID = dbo.tbl_DMMS_Dept_Machine.DMID
GROUP BY dbo.tbl_BallShaping.MID, dbo.tbl_DMMS_Dept_Machine.Name, DATEADD(dd, 0, DATEDIFF(dd, 0, dbo.tbl_BallShaping.EntryDate))
HAVING        (DATEADD(dd, 0, DATEDIFF(dd, 0, dbo.tbl_BallShaping.EntryDate)) = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
ORDER BY dbo.tbl_DMMS_Dept_Machine.Name
        ");
			return  $query->num_rows();

    }
    
    public function getDatacore()
    {
        $query = $this->db->query("SELECT        Date, COUNT(counter) AS Counter
        FROM            dbo.view_PC_Core
        WHERE        (Entrydate = CONVERT(DATETIME, '2022-06-18 00:00:00', 102))
        GROUP BY Date");
      return  $query->result_array();
    }


public function HourllyCore(){
  $Month = date('m');
  $Year = date('Y');
  $Day = date('d');
  $query = $this->db->query("SELECT        TOP (100) PERCENT dbo.view_PC_Core.Date, COUNT(dbo.view_PC_Core.counter) AS Counter, dbo.view_PC_Core.HID, dbo.tbl_PC_AMB_Hours.HourName
  FROM            dbo.view_PC_Core INNER JOIN
                           dbo.tbl_PC_AMB_Hours ON dbo.view_PC_Core.HID = dbo.tbl_PC_AMB_Hours.Hour
  WHERE        (dbo.view_PC_Core.Entrydate BETWEEN CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102) AND CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
  GROUP BY dbo.view_PC_Core.Date, dbo.view_PC_Core.HID, dbo.tbl_PC_AMB_Hours.HourName
  ORDER BY dbo.view_PC_Core.HID
  ");
return  $query->result_array();
}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lfb_Carcas1 extends CI_Model
{
    public function getData()
    {
      $Month = date('m');
      $Year = date('Y');
      $Day = date('d');
			$query = $this->db->query("SELECT        EntryDate, SUM(Output) AS Output
      FROM            dbo.view_LFB_machine_wise
      GROUP BY EntryDate
      HAVING        (EntryDate = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))");
      return  $query->result_array();
    }
    public function Stationwise()
    {
      $Month = date('m');
      $Year = date('Y');
      $Day = date('d');
        $query = $this->db->query("SELECT        Name, MAX(Output) AS Output, EntryDate
        FROM            dbo.view_lfb_Carcas_output
        GROUP BY Name, EntryDate
        HAVING        (EntryDate = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
        ");
			return  $query->result_array();

    }
    public function RowCounter()
    {
      $Month = date('m');
      $Year = date('Y');
      $Day = date('d');
        $query = $this->db->query("SELECT        Name, MAX(Output) AS Output, EntryDate
        FROM            dbo.view_lfb_Carcas_output
        GROUP BY Name, EntryDate
        HAVING        (EntryDate = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
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

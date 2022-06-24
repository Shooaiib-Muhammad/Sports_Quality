<?php
defined('BASEPATH') or exit('No direct script access allowed');

class carcas_model extends CI_Model
{
    public function getData()
    {
        $query = $this->db->query("SELECT        COUNT(Counter) AS Counter, HallType, EntryDate
        FROM            dbo.view_prd_carcas
        WHERE        (EntryDate BETWEEN '15/06/2022' AND '16/06/2022')
        GROUP BY HallType, EntryDate");
      return  $query->result_array();
    }
    public function getDatacore()
    {
      $Month = date('m');
      $Year = date('Y');
      $Day = date('d');
        $query = $this->db->query("SELECT        Date, COUNT(counter) AS Counter
        FROM            dbo.view_PC_Core
        WHERE        (Entrydate = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
        GROUP BY Date");
      return  $query->result_array();
    }
public function AddCSSNo($ID,$CssNo){
    $Date= date("Y/m/d");
    // $query = $this->db->query("update Set CSSNo='$CssNo' , LabStatus=1,ProceedDate='$Date' Where Id= '$ID'");
    
    $query = $this->db->query("update  dbo . tbl_Outward_Transaction
      Set CSSNo='$CssNo' , LabStatus=1,labProceedDate='$Date' Where TID= '$ID'");
   // return  $query->result_array();

    if($query){
        return true;
    }
    else{
        return false;
    }

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

public function getDatacarcas()
{
  $Month = date('m');
  $Year = date('Y');
  $Day = date('d');
    $query = $this->db->query("SELECT        COUNT(Counter) AS Counter, Date
    FROM            dbo.view_prd_carcas
    WHERE        (EntryDate BETWEEN CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102) AND CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
    GROUP BY Date
    ");
  return  $query->result_array();
}

public function HourllyCarcas(){
  $Month = date('m');
  $Year = date('Y');
  $Day = date('d');
  $query = $this->db->query("SELECT        COUNT(dbo.view_prd_carcas.Counter) AS Counter, dbo.view_prd_carcas.Date, dbo.view_prd_carcas.HID, dbo.tbl_PC_AMB_Hours.HourName
  FROM            dbo.view_prd_carcas INNER JOIN
                           dbo.tbl_PC_AMB_Hours ON dbo.view_prd_carcas.HID = dbo.tbl_PC_AMB_Hours.Hour
  WHERE        (dbo.view_prd_carcas.EntryDate BETWEEN CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102) AND CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
  GROUP BY dbo.view_prd_carcas.Date, dbo.view_prd_carcas.HID, dbo.tbl_PC_AMB_Hours.HourName
  
  ");
return  $query->result_array();
}
}

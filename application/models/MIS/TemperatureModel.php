<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TemperatureModel extends CI_Model
{

    public function searchQuery($Sdate, $EDate)
    {
        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $query = $this->db->query("SELECT        TOP (100) PERCENT Name, Temperature, TSRange, TERange, EntryDate
    FROM            dbo.view_Temp_HallWise
WHERE        (Date BETWEEN '$Sdate' AND '$EDate') 
ORDER BY Date
");

        return $result = $query->result_array();
    }

    public function search($Sdate, $EDate)
    {
        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $query = $this->db->query("SELECT        dbo.view_Humdidity_Hall_Wise.*
        FROM            dbo.view_Humdidity_Hall_Wise        
WHERE        (Date BETWEEN '$Sdate' AND '$EDate') 
ORDER BY Date
");

        return $result = $query->result_array();
    }
}

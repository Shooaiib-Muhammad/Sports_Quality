<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ParametersModel extends CI_Model
{

    public function getTemperatureAll($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT     Temperature, Name
            FROM            dbo.tbl_Temperature
            WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1')
            GROUP BY Temperature, Name
            HAVING        (NOT (Name IN ('TM Hall', 'AMB Hall', 'MS Hall-1,''MS Hall-2')))
");
        return $query->result();
    }

    public function getTemperatureConveyor($sdate, $edate,$conveyor)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        Temperature, Name, EntryDate AS Date
            FROM            dbo.tbl_Temperature
            WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1')
            GROUP BY Temperature, Name, EntryDate
            HAVING   (Name = '$conveyor')
");
        return $query->result();
    }

    public function getTemperatureMax($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        Max(Temperature) AS Temperature, CONVERT(Varchar, EntryDate, 103) AS Date, Name
            FROM            dbo.tbl_Temperature
            WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1') AND (Name <> 'AMB Hall') AND (Name <> 'TM Hall') AND (Name <> 'MS Hall-1') AND (Name <> 'MS Hall-2')
            GROUP BY CONVERT(Varchar, EntryDate, 103), Name
");
        return $query->result();
    }

    public function getTemperatureMaxConveyor($sdate, $edate,$conveyor)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        MAX(Temperature) AS Temperature, CONVERT(Varchar, EntryDate, 103) AS Date, Name
            FROM            dbo.tbl_Temperature
            WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1') AND (Name = '$conveyor')
            GROUP BY CONVERT(Varchar, EntryDate, 103), Name
");
        return $query->result();
    }



    public function getTemperatureMin($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        MIN(Temperature) AS Temperature, CONVERT(Varchar, EntryDate, 103) AS Date, Name
            FROM            dbo.tbl_Temperature
            WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1') AND (Name <> 'AMB Hall') AND (Name <> 'TM Hall') AND (Name <> 'MS Hall-1') AND (Name <> 'MS Hall-2')
            GROUP BY CONVERT(Varchar, EntryDate, 103), Name
");
        return $query->result();
    }

    public function getTemperatureMinConveyor($sdate, $edate,$conveyor)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        MIN(Temperature) AS Temperature, CONVERT(Varchar, EntryDate, 103) AS Date, Name
            FROM            dbo.tbl_Temperature
            WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1') AND (Name = '$conveyor')
            GROUP BY CONVERT(Varchar, EntryDate, 103), Name
");
        return $query->result();
    }



    public function gethumidityAmb($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT   Humdity, HallName,EntryDate
FROM            dbo.tbl_Humidity


WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1') AND (HallName = 'AMB Hall')
ORDER BY EntryDate DESC

");
        return $query->result();
    }
    public function gethumidityTM($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT   Humdity, HallName,EntryDate
FROM            dbo.tbl_Humidity


WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1') AND (HallName = 'TM Hall')
ORDER BY EntryDate DESC

");
        return $query->result();
    }
    public function gethumidityMS1($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT    Humdity, HallName,EntryDate
FROM            dbo.tbl_Humidity


WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1') AND (HallName = 'MS Hall-1')
ORDER BY EntryDate DESC

");
        return $query->result();
    }
    public function gethumidityMS2($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT    Humdity, HallName,EntryDate
FROM            dbo.tbl_Humidity


WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1') AND (HallName = 'MS Hall-2')
ORDER BY EntryDate DESC


");
        return $query->result();
    }

    public function gettempAmb($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT  Temperature, Name,EntryDate
FROM            dbo.tbl_Temperature


WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1') AND (Name = 'AMB Hall')
ORDER BY EntryDate DESC

");
        return $query->result();
    }
    public function gettempTM($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT   Temperature, Name,EntryDate
FROM            dbo.tbl_Temperature


WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1') AND (Name = 'TM Hall')
ORDER BY EntryDate DESC

");
        return $query->result();
    }
    public function gettempMS1($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT Temperature, Name,EntryDate
FROM            dbo.tbl_Temperature


WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1') AND (Name = 'MS Hall-1')
ORDER BY EntryDate DESC

");
        return $query->result();
    }
    public function gettempMS2($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT  Temperature, Name,EntryDate
FROM            dbo.tbl_Temperature


WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1') AND (Name = 'MS Hall-2')
ORDER BY EntryDate DESC


");
        return $query->result();
    }
}

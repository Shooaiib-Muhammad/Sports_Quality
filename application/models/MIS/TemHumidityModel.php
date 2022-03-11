<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TemHumidityModel extends CI_Model
{
    public function gethumMax($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        TOP (10) PERCENT HallName, MAX(Humdity) AS Humdity, CONVERT(Varchar, EntryDate, 103) AS Date
FROM            dbo.tbl_Humidity
WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1')
GROUP BY HallName, CONVERT(Varchar, EntryDate, 103)");
        return $query->result();
    }

    public function gethumMaxHall($sdate, $edate,$hall)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        MAX(Humdity) AS Humdity, CONVERT(Varchar, EntryDate, 103) AS Date, HallName
            FROM            dbo.tbl_Humidity
            WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1') AND (HallName = '$hall')
            GROUP BY CONVERT(Varchar, EntryDate, 103), HallName");
        return $query->result();
    }

    public function gethumMin($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT HallName, MIN(Humdity) AS Humdity, CONVERT(Varchar, EntryDate, 103) AS Date
FROM            dbo.tbl_Humidity
WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1')
GROUP BY HallName, CONVERT(Varchar, EntryDate, 103)");
        return $query->result();
    }

    public function gethumMinHall($sdate, $edate,$hall)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        MIN(Humdity) AS Humdity, CONVERT(Varchar, EntryDate, 103) AS Date, HallName
            FROM            dbo.tbl_Humidity
            WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1') AND (HallName = '$hall')
            GROUP BY CONVERT(Varchar, EntryDate, 103), HallName");
        return $query->result();
    }

    public function gettempMax($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT MAX(Temperature) AS Temperature, Name, CONVERT(Varchar, EntryDate, 103) AS Date
FROM            dbo.tbl_Temperature
WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1')
GROUP BY Name, CONVERT(Varchar, EntryDate, 103)
HAVING        (Name IN ('AMB Hall', 'MS Hall-1', 'MS Hall-2', 'TM Hall'))
");
        return $query->result();
    }

    public function gettempMaxHall($sdate, $edate,$hall)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        MAX(Temperature) AS Temperature, CONVERT(Varchar, EntryDate, 103) AS Date,Name
            FROM            dbo.tbl_Temperature
            WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1') AND (Name = '$hall')
            GROUP BY CONVERT(Varchar, EntryDate, 103),Name
");
        return $query->result();
    }


    public function gettempMin($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT MIN(Temperature) AS Temperature, Name, CONVERT(Varchar, EntryDate, 103) AS Date
FROM            dbo.tbl_Temperature
WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1')
GROUP BY Name, CONVERT(Varchar, EntryDate, 103)
HAVING        (Name IN ('AMB Hall', 'MS Hall-1', 'MS Hall-2', 'TM Hall') AND (MIN(Temperature) > '0') )
");
        return $query->result();
    }

    public function gettempMinHall($sdate, $edate,$hall)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        MIN(Temperature) AS Temperature, CONVERT(Varchar, EntryDate, 103) AS Date,Name
            FROM            dbo.tbl_Temperature
            WHERE        (CONVERT(Varchar, EntryDate, 103) BETWEEN '$newformat' AND '$newformat1') AND (Name = '$hall')
            GROUP BY CONVERT(Varchar, EntryDate, 103),Name
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

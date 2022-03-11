<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MoldingModel extends CI_Model
{
    public function getMoldMaxTemp($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT Name, MAX(ROUND((TC1 + TC2 + TC3 + TC4 + TC5 + TC6) / 6, 2)) AS Temp, EntryDate
FROM            dbo.view_Molding_Temp
WHERE        (EntryDate BETWEEN '$newformat' AND '$newformat1')
GROUP BY Name, EntryDate
ORDER BY Name
");
        return $query->result();
    }
    public function getMoldMinTemp($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT Name, MIN(ROUND((TC1 + TC2 + TC3 + TC4 + TC5 + TC6) / 6, 2)) AS Temp, EntryDate
FROM            dbo.view_Molding_Temp
WHERE        (EntryDate BETWEEN '$newformat' AND '$newformat1')
GROUP BY Name, EntryDate
HAVING        (MIN(ROUND((TC1 + TC2 + TC3 + TC4 + TC5 + TC6) / 6, 2)) > 0)
ORDER BY Name

");
        return $query->result();
    }
    public function getMoldTemp($sdate, $edate)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        TOP (10) PERCENT Name, TC1, TC2, TC3, TC4, TC5, TC6
FROM            dbo.view_Molding_Temp
WHERE        (EntryDate BETWEEN '$newformat' AND '$newformat1') 
ORDER BY Name


");
        return $query->result();
    }

    public function gellHallnames()
    {
        $query = $this->db->query("SELECT        TOP (100) PERCENT Name
FROM            dbo.view_Molding_Temp
GROUP BY Name
ORDER BY Name

");
        return $query->result();
    }
    public function getMoldLine($sdate, $edate, $hall)
    {
        $time = strtotime($sdate);
        $time1 = strtotime($edate);
        $newformat = date('d/m/Y', $time);
        $newformat1 = date('d/m/Y', $time1);
        $query = $this->db
            ->query("SELECT        TOP (10) PERCENT Name, TC1, TC2, TC3, TC4, TC5, TC6
FROM            dbo.view_Molding_Temp
WHERE        (EntryDate BETWEEN '$newformat' AND '$newformat1') AND (Name = '$hall')
ORDER BY Name

");
        return $query->result();
    }
}

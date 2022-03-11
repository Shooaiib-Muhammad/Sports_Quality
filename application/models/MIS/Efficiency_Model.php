<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Efficiency_Model extends CI_Model
{
    function get_CB($start, $end, $FactryCode)
    {
        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT DateName, Produced, Strength, Day, Month, Year, FactoryCode, PassQty, Mints, HourName, HourID, Attendance, HID
        FROM            dbo.View_Forming_Efficiency
        WHERE         (DateName BETWEEN CONVERT(DATETIME, '$start 00:00:00', 102) AND CONVERT(DATETIME, '$end 00:00:00', 102) And (FactoryCode = '$FactryCode'))
        ORDER BY HID");
        return $query->result_array();
    }

    function get_FB($start, $end, $FactryCode)
    {
        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT DateName, Produced, Strength, Day, Month, Year, FactoryCode, PassQty, Mints, HourName, HourID, Attendance, HID
        FROM            dbo.View_Forming_Efficiency
        WHERE         (DateName BETWEEN CONVERT(DATETIME, '$start 00:00:00', 102) AND CONVERT(DATETIME, '$end 00:00:00', 102) And (FactoryCode = '$FactryCode'))
        ORDER BY HID");
        return $query->result_array();
    }

    function get_UB($start, $end, $FactryCode)
    {
        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT DateName, Produced, Strength, Day, Month, Year, FactoryCode, PassQty, Mints, HourName, HourID, Attendance, HID
        FROM            dbo.View_Forming_Efficiency
        WHERE         (DateName BETWEEN CONVERT(DATETIME, '$start 00:00:00', 102) AND CONVERT(DATETIME, '$end 00:00:00', 102) And (FactoryCode = '$FactryCode'))
        ORDER BY HID");
        return $query->result_array();
    }

    function get_MSB($start, $end, $FactryCode)
    {
        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT DateName, Produced, Strength, Day, Month, Year, FactoryCode, PassQty, Mints, HourName, HourID, Attendance, HID
        FROM            dbo.View_Forming_Efficiency
        WHERE         (DateName BETWEEN CONVERT(DATETIME, '$start 00:00:00', 102) AND CONVERT(DATETIME, '$end 00:00:00', 102) And (FactoryCode = '$FactryCode'))
        ORDER BY HID");
        return $query->result_array();
    }

    function get_AMB($start, $end, $FactryCode)
    {
        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT DateName, Produced, Strength, Day, Month, Year, FactoryCode, PassQty, Mints, HourName, HourID, Attendance, HID
        FROM            dbo.View_Forming_Efficiency
        WHERE         (DateName BETWEEN CONVERT(DATETIME, '$start 00:00:00', 102) AND CONVERT(DATETIME, '$end 00:00:00', 102) And (FactoryCode = '$FactryCode'))
        ORDER BY HID");
        return $query->result_array();
    }

    function get_LF($start, $end, $FactryCode)
    {
        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT DateName, Produced, Strength, Day, Month, Year, FactoryCode, PassQty, Mints, HourName, HourID, Attendance, HID
        FROM            dbo.View_Forming_Efficiency
        WHERE         (DateName BETWEEN CONVERT(DATETIME, '$start 00:00:00', 102) AND CONVERT(DATETIME, '$end 00:00:00', 102) And (FactoryCode = '$FactryCode'))
        ORDER BY HID");
        return $query->result_array();
    }
    function search($keyword)
    {
        $this->db->like('item_name', $keyword);
        $query = $this->db->get('');
        return $query->result();
    }

    function samValue()
    {
        $query = $this->db->query("SELECT        ArtCode
FROM            dbo.view_PC_Articles");
        return $query->result_array();
    }

    function loadArticleStuff($article)
    {
        $query = $this->db->query("SELECT        dbo.view_PC_Articles.*, ArtCode
FROM            dbo.view_PC_Articles
WHERE        (ArtCode = '$article')");
        return $query->result_array();
    }

    function updateSam($articleID, $clientID, $modelID, $forming, $packing)
    {
        $query = $this->db->query("UPDATE tbl_Pro_Article
    SET 
      tbl_Pro_Article.SAMForming = '$forming'
      ,tbl_Pro_Article.SAMPacking = '$packing'
     
 WHERE tbl_Pro_Article.ArtID='$articleID' And  tbl_Pro_Article.ModelID='$modelID' AND tbl_Pro_Article.ClientID='$clientID'");
        return $query;
    }
}

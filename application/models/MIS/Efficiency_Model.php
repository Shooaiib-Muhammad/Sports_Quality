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
    public function getFactoryCode($code)
    {


        $query = $this->db->query("SELECT    view_SMV_Values.*
FROM            dbo.view_SMV_Values
WHERE        (FactoryCode = '$code')
");
        return  $query->result_array();
    }

    public function updateArt01($client, $model, $article, $Carcase, $Lamination, $SheetSizing, $Panel_Cutting, $Panel_Preparation, $Assembling, $labelingandPacking)
    {

        // echo $HF_Cutting;
        // die;
       
        // update  dbo.tbl_jumper
        // Set tbl_jumper.Status=0 
        // ArticleID ,ModelID,,
        // $article ,$,$client,

      
        // $query = $this->db->query("update   tbl_Pro_Article  set Carcase=$Carcase,Lamination=$Lamination,SheetSizing=$SheetSizing,HFCutting=$HF_Cutting,panel_preperation=$Panel_Preparation,
        // Assembling=$Assembling,labelingandPacking=$labelingandPacking  Where tbl_Pro_Article.ArticleID= '$article' 
        // and tbl_Pro_Article.ModelID= '$model' and  tbl_Pro_Article.ClientID= '$client'");
        $query = $this->db->query(" UPDATE tbl_Pro_Article 
        SET Carcase=$Carcase,Lamination=$Lamination,SheetSizing=$SheetSizing,Panel_Cutting=$Panel_Cutting,panel_preperation=$Panel_Preparation,
         Assembling=$Assembling,labelingandPacking=$labelingandPacking
        WHERE ArtID = $article AND ModelID= $model AND ClientID= $client");
      
        return  $query;
    }

    public function updateArt05($client, $model, $article, $bladder_Winding, $SheetSizing, $Panel_Cutting, $Panel_Preparation, $Assembling, $labelingandPacking)
    {

        $query = $this->db->query("UPDATE tbl_Pro_Article 
        SET bladder_Winding=$bladder_Winding,SheetSizing=$SheetSizing,Panel_Cutting=$Panel_Cutting,panel_preperation=$Panel_Preparation,
         Assembling=$Assembling,labelingandPacking=$labelingandPacking
        WHERE ArtID = $article AND ModelID= $model AND ClientID= $client");
        return  $query;
    }

    public function updateArt06($client, $model, $article, $SheetSizing, $HF_Cutting, $Assembling, $labelingandPacking)
    {

        

        $query = $this->db->query("UPDATE tbl_Pro_Article 
        SET SheetSizing=$SheetSizing,HFCutting=$HF_Cutting,
         Assembling=$Assembling,labelingandPacking=$labelingandPacking
        WHERE ArtID = $article AND ModelID= $model AND ClientID= $client");
        return  $query;
    }
    public function updateArt07($client, $model, $article, $Carcase, $Lamination, $HF_Cutting, $Panel_Cutting, $Assembling, $labelingandPacking)
    {

        $query = $this->db->query("UPDATE tbl_Pro_Article 
        SET Carcase=$Carcase,Lamination=$Lamination,HFCutting=$HF_Cutting,Panel_Cutting=$Panel_Cutting,
         Assembling=$Assembling,labelingandPacking=$labelingandPacking
        WHERE ArtID = $article AND ModelID= $model AND ClientID= $client");
        return  $query;
    }

    public function updateArt($client, $model, $article, $Carcase, $Lamination,  $Panel_Cutting, $Assembling, $labelingandPacking)
    {
        $query = $this->db->query("UPDATE tbl_Pro_Article 
        SET Carcase=$Carcase,Lamination=$Lamination,Panel_Cutting=$Panel_Cutting,
         Assembling=$Assembling,labelingandPacking=$labelingandPacking
        WHERE ArtID = $article AND ModelID= $model AND ClientID= $client");
        return  $query;
    }
}

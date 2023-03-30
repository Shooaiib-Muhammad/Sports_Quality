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

    public function HourllyReading()
    {
            $Month = date('m');
            $Year = date('Y');
            $Day = date('d');
            $query = $this->db->query("SELECT        balls, HourName,HID
            FROM            dbo.view_RWPD_Hourlly
WHERE        (EntryDate BETWEEN '$Day/$Month/$Year' AND '$Day/$Month/$Year') 
GROUP BY balls, HourName,HID
ORDER BY HID");
            return  $query->result_array();
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

    public function getFactoryCode_with_year($code , $years)
    {


        $query = $this->db->query("SELECT * FROM  dbo.view_SMV_Values WHERE (FactoryCode = '$code' AND SesonalRange = '$years')
");
        return  $query->result_array();
    }

    public function showMissingValues()
    {


        $query = $this->db->query("SELECT FactoryCode , SesonalRange , Carcase , Lamination , SheetSizing , panel_preperation , Assembling , labelingandPacking , Panel_Cutting , bladder_Winding FROM view_SMV_Values
        WHERE Carcase is NULL AND Lamination is NULL AND SheetSizing is NULL AND panel_preperation is NULL AND Assembling is NULL AND labelingandPacking is NULL AND Panel_Cutting is NULL AND bladder_Winding is NULL;");
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
    public function samValueNotification(){
        $currDate= date("d/m/Y");
        $query = $this->db->query("SELECT        Datename, ArtCode, ArtSize, FactoryCode
        FROM            dbo.View_MIssing_SAM
        WHERE        (Datename = '$currDate')");
        return $query->result_array();
    }
    public function samValueNotificationDate($start,$end){
        $SYear = substr($start, 0, 4);
        $SMonth = substr($start, 5, 2);
        $SDay = substr($start, -2, 2);
        $Startdate = $SDay . '/' . $SMonth . '/' . $SYear;
        $EYear = substr($end, 0, 4);
        $EMonth = substr($end, 5, 2);
        $EDay = substr($end, -2, 2);
        $Enddate = $EDay . '/' . $EMonth . '/' . $EYear;
        $query = $this->db->query("SELECT        Datename, ArtCode, ArtSize, FactoryCode
        FROM            dbo.View_MIssing_SAM
        WHERE        (Datename BETWEEN '$Startdate' AND '$Enddate')");
        return $query->result_array();
    }
}

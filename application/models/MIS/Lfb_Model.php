<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lfb_Model extends CI_Model
{

	public function get_Lfb_Sheet_Sizing( $start_date, $end_date)
	{

		$query = $this->db->query("SELECT dbo.View_lfb_final_sheets.*
FROM            dbo.View_lfb_final_sheets
WHERE        (DateName >= '$start_date') AND (DateName <= '$end_date')");
		return $query->result_array();

		
	}
	public function get_Lfb_printing_cutting( $start_date, $end_date)
	{

		$query = $this->db->query("SELECT View_LFB_Printing_Final.*
		FROM            View_LFB_Printing_Final
		WHERE        (DateName >= '$start_date') AND (DateName <= '$end_date')");
				return $query->result_array();
		

	}
	public function get_Lfb_HF_cutting( $start_date, $end_date)
	{

		$query = $this->db->query("SELECT View_LFB_Printing_Final_Hf.*
		FROM            View_LFB_Printing_Final_HF
		WHERE        (DateName >= '$start_date') AND (DateName <= '$end_date')");
				return $query->result_array();
		

	}
	public function get_Lfb_assembling( $start_date, $end_date)
	{

		$query = $this->db->query("SELECT View_LFB_Assembling_Final.*
		FROM            View_LFB_Assembling_Final
		WHERE        (DateName >= '$start_date') AND (DateName <= '$end_date')");
				return $query->result_array();

	}
	public function get_Lfb_final_qc( $start_date, $end_date)
	{
		  $query = $this->db->query("SELECT   TOP (100) PERCENT DateName, MPID, ArtSIze, ArtCode, TotalChecked, TotalPass, Fail, SeamDefect, MaterialDefect, SeamOverlaping, Wrinkles, ExcessGlue, PressureMarks, AirBubble, HeavyPrintDefect, TouchingPeelingOff, 
          PrintMisalignment, WrongeArtwork, MoldMark, ColourShade, ValveNozzleMove, Oversize, UnderSize, OverWeight, UnderWeight, factoryCode, DShape, MissGlue, Hour, HourName, HourID, CONVERT(Varchar, DateName, 103) 
          AS Datee, DayNo,Stationname
		FROM             dbo.View_TM_LFB_FInalQC_Final
		WHERE        (DateName BETWEEN CONVERT(DATETIME, ' $start_date 00:00:00', 102) AND CONVERT(DATETIME, '$end_date 00:00:00', 102))
          ORDER BY DayNo, HourID");
				return $query->result_array();
		
	}
		public function get_Lfb_final_qc_articles( $start_date, $end_date)
	{
		  $query = $this->db->query("SELECT        TOP (100) PERCENT ArtSIze, ArtCode, SUM(TotalChecked) AS TotalChecked, SUM(TotalPass) AS TotalPass, SUM(Fail) AS Fail, CONVERT(Varchar, DateName, 103) AS Datee, DateName
FROM            dbo.View_TM_LFB_FInalQC_Final
GROUP BY ArtSIze, ArtCode, CONVERT(Varchar, DateName, 103), DateName, DayNo
HAVING        (DateName BETWEEN '$start_date' AND '$end_date')
ORDER BY DayNo");
				return $query->result_array();
		
	}
	public function get_lfb_balance( $start_date, $end_date)
	{
		  $query = $this->db->query("SELECT        ArtSIze, ArtCode, SUM(TotalChecked) AS TotalChecked, SUM(TotalPass) AS TotalPass, SUM(Fail) AS Fail, Datee, DateName, MPID, SUM(TotalQty) AS TotalQty, SUM(Balance) AS Balance
FROM            dbo.view_TM_MPWise_Balance
WHERE        (DateName BETWEEN '$start_date' AND '$end_date')
GROUP BY ArtSIze, ArtCode, Datee, DateName, MPID");
				return $query->result_array();
		
	}
	
	 public function searchQuery($Art,$Sdate,$EDate,$sizenew){
                    $Month=date('m');
                    $Year=date('Y');
                    $Day=date('d');
                    $query=$this->db->query("SELECT        TOP (100) PERCENT dbo.tbl_TM_Article_Wise_prd.TID, dbo.tbl_Inv_Tran_Date.DateName, CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103) AS Dateee, dbo.tbl_Pro_Article.ArtCode, 
                         dbo.tbl_TM_Article_Wise_prd.ArtSIze AS ArtSize, dbo.tbl_TM_Article_Wise_prd.factoryCode, dbo.tbl_TM_Article_Wise_prd.Weight, dbo.tbl_TM_Article_Wise_prd.Circum1, dbo.tbl_TM_Article_Wise_prd.Circum2, 
                         dbo.tbl_TM_Article_Wise_prd.Circum3, dbo.tbl_TM_Article_Wise_prd.BallType, dbo.tbl_TM_Article_Wise_prd.MPID, dbo.tbl_TM_Article_Wise_prd.BallSize, dbo.tbl_Pro_Article_D.StrtWeight, dbo.tbl_Pro_Article_D.EndWeight, 
                         (dbo.tbl_TM_Article_Wise_prd.Circum1 + dbo.tbl_TM_Article_Wise_prd.Circum2 + dbo.tbl_TM_Article_Wise_prd.Circum3) / 3 AS Circimference, dbo.tbl_Pro_Article_D.StrtRange, dbo.tbl_Pro_Article_D.EndRange, 
                         CASE WHEN Sysip = '192.168.40.72' THEN 'B34003 Star' ELSE CASE WHEN Sysip = '192.168.40.73' THEN 'B34007 LFB' ELSE CASE WHEN Sysip = '192.168.15.36' THEN 'B34007 LFB' ELSE CASE WHEN Sysip = '192.168.40.80'
                          THEN 'B34002 Classic' ELSE 'LFB Line' END END END END AS Stationname
FROM            dbo.tbl_TM_Article_Wise_prd INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_TM_Article_Wise_prd.DayID = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                         dbo.tbl_Pro_Article ON dbo.tbl_TM_Article_Wise_prd.ClientID = dbo.tbl_Pro_Article.ClientID AND dbo.tbl_TM_Article_Wise_prd.ModelID = dbo.tbl_Pro_Article.ModelID AND 
                         dbo.tbl_TM_Article_Wise_prd.ArtiD = dbo.tbl_Pro_Article.ArtID INNER JOIN
                         dbo.tbl_Pro_Article_D ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_Article_D.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_Article_D.ModelID AND dbo.tbl_Pro_Article.ArtID = dbo.tbl_Pro_Article_D.ArtID AND 
                         dbo.tbl_TM_Article_Wise_prd.ArtSIze = dbo.tbl_Pro_Article_D.ArtSize
WHERE        (DateName BETWEEN '$Sdate' AND '$EDate') 
AND (dbo.tbl_Pro_Article.ArtCode = '$Art') 
AND (dbo.tbl_TM_Article_Wise_prd.ArtSIze = '$sizenew') And  (dbo.tbl_TM_Article_Wise_prd.Weight > 0)");

                return $result = $query->result_array(); 
        

                            }
																													public function leffinalQC()
	{
		  $query = $this->db->query("SELECT        view_FInalQC_PO_Wise_Sum.*
FROM            dbo.view_FInalQC_PO_Wise_Sum");
				return $query->result_array();
		
	}
	
																		public function get_Lfb_Carcas( $start_date, $end_date)
	{
		  $query = $this->db->query("SELECT      Datee,  TID, FactoryCode, Material, Catagory, HourID, DayID, TotalCheck, TotalPass, TotalFail, underSize, OverSize, Puncture, DShape, IP, EntryDate, HourName, DateName
FROM            dbo.view_Daily_Carcas
WHERE        (DateName BETWEEN '$start_date' AND '$end_date')");
				return $query->result_array();
		
	}											
}


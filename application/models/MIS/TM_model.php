<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TM_model extends CI_Model {

	public function getLinesdata($Day,$Month,$Year)
	{
	

	$query = $this->db->query("SELECT        TOP (100) PERCENT FactoryCode, SUM(CheckedQty) AS CheckedQty, SUM(PassQty) AS PassQty, SUM(FailQty) AS FailQty, SUM(FCheckedQty) AS FCheckedQty, 
                         SUM(FPassQty) AS FPassQty, SUM(FFailQty) AS FFailQty
   FROM            dbo.View_Final_QC_FORMING
   WHERE        (DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
   GROUP BY FactoryCode");
		 return $query->result_array();
		}

   public function getSumdata($Day,$Month,$Year)
	{
	$query = $this->db->query("SELECT        TOP (100) PERCENT SUM(CheckedQty) AS CheckedQty, SUM(PassQty) AS PassQty, SUM(FCheckedQty) AS FCheckedQty, SUM(FPassQty) AS FPassQty
   FROM            dbo.View_Final_QC_FORMING
   WHERE        (DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))");
		 return $query->result_array();


	}

	public function getLinesinfo()
	{
	

	$query = $this->db->query("SELECT        VendorName, VendorId
  FROM            dbo.tbl_Pro_Vendor
   WHERE        (VendorId IN (2, 3, 4))");
		 return $query->result_array();


	}

public function GetprdInfo($VendorId, $Sdate,$Edate)
	{
		$SYear=substr($Sdate,0,4);
    //echo "<br>";
     $SMonth=substr($Sdate,5,2);
    //echo "<br>";
     $SDay=substr($Sdate,-2,2);
        $Startdate=$SYear.'-'.$SMonth.'-'.$SDay;

 $EYear=substr($Edate,0,4);
    //echo "<br>";
     $EMonth=substr($Edate,5,2);
    //echo "<br>";
     $EDay=substr($Edate,-2,2);

   $Enddate=$EYear.'-'.$EMonth.'-'.$EDay;

if ($VendorId==2) {
	$FactoryCode="B34002";
}elseif ($VendorId==3) {
	$FactoryCode="B34003";
}elseif ($VendorId==4) {
	$FactoryCode="B34004";
}


	if ($VendorId==1) {
		$query = $this->db->query("SELECT        TOP (100) PERCENT SUM(CheckedQty) AS CheckedQty, SUM(PassQty) AS PassQty, SUM(FCheckedQty) AS FCheckedQty, SUM(FPassQty) AS FPassQty, 
                         FactoryCode AS HourName
FROM            dbo.View_Final_QC_FORMING
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Startdate 00:00:00', 102) AND CONVERT(DATETIME, '$Enddate 00:00:00', 102))
GROUP BY FactoryCode");
		 return $query->result_array();

	}elseif ($VendorId==2) {
	$FactoryCode="B34002";
	$query = $this->db->query("SELECT        TOP (100) PERCENT HourName, ArtCode, CheckedQty, PassQty, FailQty, FactoryCode, SAMValue, Mints, Strength, FArtCode, FCheckedQty, FPassQty, FFailQty, 
                         FSamValue, FMints, FStrength
FROM            dbo.View_Final_QC_FORMING
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Startdate 00:00:00', 102) AND CONVERT(DATETIME, '$Enddate 00:00:00', 102))  AND (FactoryCode = '$FactoryCode')

ORDER BY Hour");
		 return $query->result_array();

}elseif ($VendorId==3) {
	$FactoryCode="B34003";
	$query = $this->db->query("SELECT        TOP (100) PERCENT HourName, ArtCode, CheckedQty, PassQty, FailQty, FactoryCode, SAMValue, Mints, Strength, FArtCode, FCheckedQty, FPassQty, FFailQty, 
                         FSamValue, FMints, FStrength
FROM            dbo.View_Final_QC_FORMING
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Startdate 00:00:00', 102) AND CONVERT(DATETIME, '$Enddate 00:00:00', 102))  AND (FactoryCode = '$FactoryCode')

ORDER BY Hour");
		 return $query->result_array();

}elseif ($VendorId==4) {
	$FactoryCode="B34004";
	$query = $this->db->query("SELECT        TOP (100) PERCENT HourName, ArtCode, CheckedQty, PassQty, FailQty, FactoryCode, SAMValue, Mints, Strength, FArtCode, FCheckedQty, FPassQty, FFailQty, 
                         FSamValue, FMints, FStrength
FROM            dbo.View_Final_QC_FORMING
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Startdate 00:00:00', 102) AND CONVERT(DATETIME, '$Enddate 00:00:00', 102))  AND (FactoryCode = '$FactoryCode')

ORDER BY Hour");
		 return $query->result_array();
}

	


		


		}


		
	public Function GETTMPIOV($Values){
		$query= $this->db->query("SELECT * FROM (SELECT FactoryCode, Date, PassQty FROM View__BF_OutPut WHERE        (FactoryCode IS NOT NULL) AND (Date IS NOT NULL) AND (PassQty IS NOT NULL) ) up PIVOT (sum(PassQty) FOR Date IN ($Values)) AS pivo");
return $query->result_array();
	}

	public Function GETTMDSUm($StartDateeee,$EndDateeee,$Lines){
		$query= $this->db->query("SELECT        TOP (100) PERCENT SUM(dbo.tbl_TM_Forming_Inspection.PassQty) AS PassQty
FROM            dbo.tbl_Inv_Tran_Date INNER JOIN
                         dbo.tbl_TM_Forming_Inspection ON dbo.tbl_Inv_Tran_Date.DayNo = dbo.tbl_TM_Forming_Inspection.DayNo
WHERE        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$StartDateeee 00:00:00', 102) AND CONVERT(DATETIME, '$EndDateeee 00:00:00', 102)) AND 
                         (dbo.tbl_TM_Forming_Inspection.FactoryCode = '$Lines')");
return $query->result_array();
	}

public function GETTMSUm($StartDateeee,$EndDateeee){
	    $query= $this->db->query("SELECT        TOP (100) PERCENT SUM(dbo.tbl_TM_Forming_Inspection.PassQty) AS OutPut, CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103) AS DDate, 
                         MONTH(dbo.tbl_Inv_Tran_Date.DateName) AS Month
FROM            dbo.tbl_Inv_Tran_Date INNER JOIN
                         dbo.tbl_TM_Forming_Inspection ON dbo.tbl_Inv_Tran_Date.DayNo = dbo.tbl_TM_Forming_Inspection.DayNo
WHERE        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$StartDateeee 00:00:00', 102) AND CONVERT(DATETIME, '$EndDateeee 00:00:00', 102))
GROUP BY CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103), MONTH(dbo.tbl_Inv_Tran_Date.DateName)");
   return $query->result_array();
}
public function GETSUm($StartDateeee,$EndDateeee){
	  $query= $this->db->query("SELECT        TOP (100) PERCENT SUM(dbo.tbl_TM_Forming_Inspection.PassQty) AS OutPut
FROM            dbo.tbl_Inv_Tran_Date INNER JOIN
                         dbo.tbl_TM_Forming_Inspection ON dbo.tbl_Inv_Tran_Date.DayNo = dbo.tbl_TM_Forming_Inspection.DayNo
WHERE        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$StartDateeee 00:00:00', 102) AND CONVERT(DATETIME, '$EndDateeee 00:00:00', 102))");
 return $query->result_array();
}

public Function GETTMFQPIOV($Values){
	$query= $this->db->query("SELECT * FROM (SELECT FactoryCode, Date, PassQty FROM View__FQ_OutPut WHERE        (FactoryCode IS NOT NULL) AND (Date IS NOT NULL) AND (PassQty IS NOT NULL) ) up PIVOT (sum(PassQty) FOR Date IN ($Values)) AS pivo");
return $query->result_array();
}
public Function GETTMFQDSum($StartDateeee,$EndDateeee,$Lines){
	$query= $this->db->query("SELECT        SUM(dbo.tbl_TM_Final_QC.Pass) AS PassQty
FROM            dbo.tbl_TM_Final_QC INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_TM_Final_QC.DayNo = dbo.tbl_Inv_Tran_Date.DayNo
WHERE        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$StartDateeee 00:00:00', 102) AND CONVERT(DATETIME, '$EndDateeee 00:00:00', 102)) AND 
                         (dbo.tbl_TM_Final_QC.FactoryCode = '$Lines')");
 return $query->result_array();

}
public Function GETTMFQSum($StartDateeee,$EndDateeee){
	$query= $this->db->query("SELECT        TOP (100) PERCENT SUM(dbo.tbl_TM_Final_QC.Pass) AS OutPut, CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103) AS DDate, 
                         MONTH(dbo.tbl_Inv_Tran_Date.DateName) AS Month
FROM            dbo.tbl_Inv_Tran_Date INNER JOIN
                         dbo.tbl_TM_Final_QC ON dbo.tbl_Inv_Tran_Date.DayNo = dbo.tbl_TM_Final_QC.DayNo
WHERE        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$StartDateeee 00:00:00', 102) AND CONVERT(DATETIME, '$EndDateeee 00:00:00', 102))
GROUP BY CONVERT(Varchar, dbo.tbl_Inv_Tran_Date.DateName, 103), MONTH(dbo.tbl_Inv_Tran_Date.DateName)");
 return $query->result_array();

}
public function GETTMFQ($StartDateeee,$EndDateeee){
	 $query= $this->db->query("SELECT        SUM(dbo.tbl_TM_Final_QC.Pass) AS OutPut
FROM            dbo.tbl_TM_Final_QC INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_TM_Final_QC.DayNo = dbo.tbl_Inv_Tran_Date.DayNo
WHERE        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$StartDateeee 00:00:00', 102) AND CONVERT(DATETIME, '$EndDateeee 00:00:00', 102))");
return  $query->result_array();
}
}
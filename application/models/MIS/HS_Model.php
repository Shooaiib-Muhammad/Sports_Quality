<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HS_Model extends CI_Model {

public function getHSInfor($Date1,$Date2){
	 $SYear=substr($Date1,0,4);
    $SMonth=substr($Date1,5,2);
    $SDay=substr($Date1,-2,2);
    $Startdate=$SYear.'-'.$SMonth.'-'.$SDay;
    $EYear=substr($Date2,0,4);
    $EMonth=substr($Date2,5,2);
    $EDay=substr($Date2,-2,2);
    $Enddate=$EYear.'-'.$EMonth.'-'.$EDay;

 $query = $this->db->query("SELECT        SUM(TotalChecked) AS TotalChecked, SUM(PassQty) AS OutPut, SUM(FailQty) AS Fail, ArtCode
FROM            dbo.View_HS_FinalOutPut
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Startdate 00:00:00', 102) AND CONVERT(DATETIME, '$Enddate 00:00:00', 102))
GROUP BY ArtCode");

return   $query->result_array();
}

public function getHSSum($Date1,$Date2){
	
 $SYear=substr($Date1,0,4);
    $SMonth=substr($Date1,5,2);
    $SDay=substr($Date1,-2,2);
    $Startdate=$SYear.'-'.$SMonth.'-'.$SDay;
    $EYear=substr($Date2,0,4);
    $EMonth=substr($Date2,5,2);
    $EDay=substr($Date2,-2,2);
    $Enddate=$EYear.'-'.$EMonth.'-'.$EDay;

 $query = $this->db->query(" SELECT        SUM(TotalChecked) AS TotalChecked, SUM(PassQty) AS OutPut, SUM(FailQty) AS Fail
FROM            dbo.View_HS_FinalOutPut
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Startdate 00:00:00', 102) AND CONVERT(DATETIME, '$Enddate 00:00:00', 102))");




return   $query->result_array();
}

}

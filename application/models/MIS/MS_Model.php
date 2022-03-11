<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MS_model extends CI_Model {



public function MSLinesinfo(){
	
$query = $this->db->query("SELECT        LineID, LineName
FROM            dbo.tbl_PC_AMB_Line");
		 return $query->result_array();
}
	public function GetMsData($Day, $Month,$Year)
	{
	

	$query = $this->db->query("SELECT        TOP (100) PERCENT dbo.tbl_PC_AMB_Line.LineName, SUM(dbo.tbl_PC_MS.TotalChecked) AS TotalChecked, SUM(dbo.tbl_PC_MS.Pass) AS Pass, 
                         SUM(dbo.tbl_PC_MS.Fail) AS Fail, MAX(dbo.tbl_PC_MS.PresentWorkers) AS PresentWorkers
FROM            dbo.tbl_PC_MS INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_PC_MS.DayNo = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                         dbo.tbl_PC_AMB_Line ON dbo.tbl_PC_MS.Line = dbo.tbl_PC_AMB_Line.LineID
WHERE        (dbo.tbl_Inv_Tran_Date.DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
GROUP BY dbo.tbl_PC_AMB_Line.LineName, dbo.tbl_PC_AMB_Line.LineID
ORDER BY dbo.tbl_PC_AMB_Line.LineID");
		 return $query->result_array();
		}

  Public Function GetMsLineWiseData($Date1, $Date2,$LineNo){

if ($LineNo==1) {




	$query = $this->db->query("SELECT        TOP (100) PERCENT dbo.tbl_PC_AMB_Line.LineName, SUM(dbo.tbl_PC_MS.TotalChecked) AS TotalChecked, SUM(dbo.tbl_PC_MS.Pass) AS Pass, 
                         SUM(dbo.tbl_PC_MS.Fail) AS Fail, MAX(dbo.tbl_PC_MS.PresentWorkers) AS PresentWorkers
FROM            dbo.tbl_PC_MS INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_PC_MS.DayNo = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                         dbo.tbl_PC_AMB_Line ON dbo.tbl_PC_MS.Line = dbo.tbl_PC_AMB_Line.LineID
WHERE        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102))
GROUP BY dbo.tbl_PC_AMB_Line.LineName, dbo.tbl_PC_AMB_Line.LineID
ORDER BY dbo.tbl_PC_AMB_Line.LineID");
		 return $query->result_array();
  }else{



   

	$query = $this->db->query(" SELECT        View_Web_MS_LinesWise.* From View_Web_MS_LinesWise
  WHERE        (Line = '$LineNo') and  (DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) 
  AND CONVERT(DATETIME, '$Date2 00:00:00', 102)) and (TotalChecked>0)
  ORDER BY HourID");
		 return $query->result_array();
  }


		
	

}


public Function GetMsLineWiseSum($Date1, $Date2,$LineNo){

if ($LineNo==1) {




	$query = $this->db->query("SELECT        TOP (100) PERCENT SUM(dbo.tbl_PC_MS.TotalChecked) AS TotalChecked, SUM(dbo.tbl_PC_MS.Pass) AS Pass, SUM(dbo.tbl_PC_MS.Fail) AS Fail
FROM            dbo.tbl_PC_MS INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_PC_MS.DayNo = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                         dbo.tbl_PC_AMB_Line ON dbo.tbl_PC_MS.Line = dbo.tbl_PC_AMB_Line.LineID
WHERE        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102))");
		 return $query->result_array();
  }else{

	$query = $this->db->query("SELECT        TOP (100) PERCENT SUM(dbo.tbl_PC_MS.TotalChecked) AS TotalChecked, SUM(dbo.tbl_PC_MS.Pass) AS Pass, SUM(dbo.tbl_PC_MS.Fail) AS Fail
FROM            dbo.tbl_PC_MS INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_PC_MS.DayNo = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                         dbo.tbl_PC_AMB_Line ON dbo.tbl_PC_MS.Line = dbo.tbl_PC_AMB_Line.LineID
WHERE        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN CONVERT(DATETIME, '$Date1 00:00:00', 102) AND CONVERT(DATETIME, '$Date2 00:00:00', 102)) AND 
                         (dbo.tbl_PC_AMB_Line.LineID = $LineNo)");
		 return $query->result_array();
  }


}
public Function GETMSPIOV($Values){
	$query= $this->db->query("SELECT        *
FROM            (SELECT      LineID,  LineName, mydate, OutPut
                          FROM           View_MS_DateWise) up PIVOT (sum(output) FOR mydate IN ($Values)) AS pivo ORDER BY LineID");
return $query->result_array();
}
public Function GETMSSUm($StartDateeee,$EndDateeee,$LineID){
	$query= $this->db->query("SELECT        SUM(Passed) AS OutPut, SUM(TotalChecked) AS TotalChecked
FROM            dbo.View_36
WHERE        (DateName BETWEEN '$StartDateeee' AND '$EndDateeee') AND (LineID = $LineID)");
return $query->result_array();
}
public Function GETMSDSUm($StartDateeee,$EndDateeee){

	 $query= $this->db->query("SELECT        TOP (100) PERCENT dbo.tbl_Inv_Tran_Date.DateName, SUM(dbo.tbl_PC_MS.TotalChecked) AS OutPut
FROM            dbo.tbl_PC_MS INNER JOIN
                         dbo.tbl_PC_AMB_Line ON dbo.tbl_PC_MS.Line = dbo.tbl_PC_AMB_Line.LineID INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_PC_MS.DayNo = dbo.tbl_Inv_Tran_Date.DayNo
WHERE        (dbo.tbl_Inv_Tran_Date.DateName BETWEEN '$StartDateeee' AND '$EndDateeee')
GROUP BY dbo.tbl_Inv_Tran_Date.DateName");
 return $query->result_array();

}

Public Function GETMSUm($StartDateeee,$EndDateeee){
	 $query= $this->db->query("SELECT        SUM(Passed) AS OutPut
FROM            dbo.View_36
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$StartDateeee 00:00:00', 102) AND CONVERT(DATETIME, '$EndDateeee 00:00:00', 102))");
return $query->result_array();
}
public function GETMS($StartDateeee,$EndDateeee){
	  $query= $this->db->query("SELECT        SUM(Passed) AS OutPut, SUM(TotalChecked) AS TotalChecked, CONVERT(Varchar, DateName, 103) AS Date, MONTH(DateName) AS Month
FROM            dbo.View_36
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$StartDateeee 00:00:00', 102) AND CONVERT(DATETIME, '$EndDateeee 00:00:00', 102))
GROUP BY CONVERT(Varchar, DateName, 103), MONTH(DateName)");
return $query->result_array();
}
Public function GetAllMSData($Sdate, $Edate){

  $select = "TOP (100) PERCENT  SUM(dbo.tbl_PC_MS.OpenComposit) AS OpenComposit, SUM(dbo.tbl_PC_MS.DailyComposit) AS DailyComposit, 
		SUM(dbo.tbl_PC_MS.CompositCornersEdges) AS CompositCornersEdges, SUM(dbo.tbl_PC_MS.LooseStitch) AS LooseStitch, SUM(dbo.tbl_PC_MS.TornStitch) 
		AS TornStitch, SUM(dbo.tbl_PC_MS.MissStitch) AS MissStitch, SUM(dbo.tbl_PC_MS.CornersOut) AS CornersOut, SUM(dbo.tbl_PC_MS.ZigZagStitch) AS ZigZagStitch, 
		SUM(dbo.tbl_PC_MS.WrongArtWork) AS WrongArtWork, SUM(dbo.tbl_PC_MS.WrongSewingMargin) AS WrongSewingMargin, SUM(dbo.tbl_PC_MS.MaterialTorn) 
		AS MaterialTorn, SUM(dbo.tbl_PC_MS.DisColor) AS DisColor, SUM(dbo.tbl_PC_MS.LamProblem) AS LamProblem, SUM(dbo.tbl_PC_MS.TreatOff) AS TreatOff, 
		SUM(dbo.tbl_PC_MS.Smearing) AS Smearing, SUM(dbo.tbl_PC_MS.MissPrinting) AS MissPrinting, SUM(dbo.tbl_PC_MS.NozleMove) AS NozleMove, 
		SUM(dbo.tbl_PC_MS.LeakPuncture) AS LeakPuncture, SUM(dbo.tbl_PC_MS.BGrade) AS BGrade, Sum(dbo.tbl_PC_MS.TotalChecked) As TotalChecked, SUM(dbo.tbl_PC_MS.UnHold) AS UnHold, SUM(dbo.tbl_PC_MS.NeedleMark) AS NeedleMark, SUM(dbo.tbl_PC_MS.VolPanelAlligment) 
		AS VolPanelAlligment, SUM(dbo.tbl_PC_MS.CutMark) AS CutMark, SUM(dbo.tbl_PC_MS.Fail) AS Fail, SUM(dbo.tbl_PC_MS.Pass) AS Pass";
		$this->db->select($select)
		->from('dbo.tbl_PC_MS')
		->where('DateName >= ', $Sdate)
			->where('DateName <= ', $Edate)
			->where('TotalChecked > ',0)
			->join('dbo.tbl_Inv_Tran_Date', 'dbo.tbl_PC_MS.DayNo = dbo.tbl_Inv_Tran_Date.DayNo')
			->join('dbo.tbl_PC_AMB_Line', 'dbo.tbl_PC_MS.Line = dbo.tbl_PC_AMB_Line.LineID');

		
			return $this->db->get()->result();
		

}
}

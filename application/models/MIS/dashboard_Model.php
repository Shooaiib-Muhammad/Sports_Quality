<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard_Model extends CI_Model
{
    public function getPivotDateRange($sdate, $edate)
    {

        $query = $this->db
            ->query("SELECT       date, PO, Article, ArtSize, Qty, Pass, fail, RFT
            FROM            dbo.View_pivot_Datewise2
            WHERE        (date BETWEEN CONVERT(DATETIME, '$sdate 00:00:00', 102) AND CONVERT(DATETIME, '$edate 00:00:00', 102))
");
        return $query->result();
    }
    public function pivotCurrentDateData()
    {
        $Date = date('Y/m/d');
        $query = $this->db
            ->query("SELECT        dbo.view_Pivot_Hours.date, SUM(dbo.view_Pivot_Hours.Qty) AS Qty, SUM(dbo.view_Pivot_Hours.Pass) AS Pass, SUM(dbo.view_Pivot_Hours.fail) AS fail, dbo.view_Pivot_Hours.SystemName, 
            dbo.view_Pivot_Hours.SystemIP
FROM            dbo.view_Pivot_Hours INNER JOIN
            dbo.tbl_PC_AMB_Hours ON dbo.view_Pivot_Hours.H = dbo.tbl_PC_AMB_Hours.Hour
GROUP BY dbo.view_Pivot_Hours.date, dbo.view_Pivot_Hours.SystemName, dbo.view_Pivot_Hours.SystemIP
HAVING        (dbo.view_Pivot_Hours.date = CONVERT(DATETIME, '$Date 00:00:00', 102))");
        return $query->result_array();
    }

    public function getPivotSystemIPWise($systemIp)
    {
        $Date = date('Y/m/d');
        $query = $this->db
            ->query("SELECT        TOP (100) PERCENT dbo.view_Pivot_Hours.date, SUM(dbo.view_Pivot_Hours.Qty) AS Qty, SUM(dbo.view_Pivot_Hours.Pass) AS pass, SUM(dbo.view_Pivot_Hours.fail) AS fail, dbo.view_Pivot_Hours.SystemName, 
            dbo.view_Pivot_Hours.SystemIP, dbo.tbl_PC_AMB_Hours.HourName, dbo.view_Pivot_Hours.H
FROM            dbo.view_Pivot_Hours INNER JOIN
            dbo.tbl_PC_AMB_Hours ON dbo.view_Pivot_Hours.H = dbo.tbl_PC_AMB_Hours.Hour
GROUP BY dbo.view_Pivot_Hours.date, dbo.view_Pivot_Hours.SystemName, dbo.view_Pivot_Hours.SystemIP, dbo.tbl_PC_AMB_Hours.HourName, dbo.view_Pivot_Hours.H
HAVING        (dbo.view_Pivot_Hours.date = CONVERT(DATETIME, '$Date 00:00:00', 102)) AND (dbo.view_Pivot_Hours.SystemIP = '$systemIp')
ORDER BY dbo.view_Pivot_Hours.H
");
        return $query->result_array();
        
    }
    public function getPivotSystemUpperData($systemIp)
    {
        $Date = date('Y/m/d');
        $query = $this->db
            ->query("SELECT        dbo.view_Pivot_Hours.date, SUM(dbo.view_Pivot_Hours.Qty) AS Qty, SUM(dbo.view_Pivot_Hours.Pass) AS pass, SUM(dbo.view_Pivot_Hours.fail) AS fail, dbo.view_Pivot_Hours.SystemName, 
                         dbo.view_Pivot_Hours.SystemIP
FROM            dbo.view_Pivot_Hours INNER JOIN
                         dbo.tbl_PC_AMB_Hours ON dbo.view_Pivot_Hours.H = dbo.tbl_PC_AMB_Hours.Hour
GROUP BY dbo.view_Pivot_Hours.date, dbo.view_Pivot_Hours.SystemName, dbo.view_Pivot_Hours.SystemIP
HAVING        (dbo.view_Pivot_Hours.date = CONVERT(DATETIME, '$Date 00:00:00', 102)) AND (dbo.view_Pivot_Hours.SystemIP = '$systemIp')");
        return $query->result_array();
    }
    public function getPivotSystemIpWiseFailedBall($systemIp)
    {
        $Date = date('Y/m/d');
        $query = $this->db
            ->query("SELECT        dbo.tbl_Pivot.po_line_id AS po, dbo.tbl_Pivot.sku_id AS article, dbo.tbl_Pivot.ArtSize, dbo.defects.label, COUNT(dbo.tbl_Pivot.PassQty) AS defects, dbo.tbl_Pivot.defects_id, DATEADD(dd, 0, DATEDIFF(dd, 0, 
            dbo.tbl_Pivot.inspection_completed_date)) AS Date, dbo.tbl_Pivot.SystemIP
FROM            dbo.tbl_Pivot INNER JOIN
            dbo.defects ON dbo.tbl_Pivot.defects_id = dbo.defects.defects_id
WHERE        (dbo.tbl_Pivot.defects_id <> 0)
GROUP BY dbo.tbl_Pivot.po_line_id, dbo.tbl_Pivot.ArtSize, dbo.tbl_Pivot.defects_id, dbo.tbl_Pivot.sku_id, DATEADD(dd, 0, DATEDIFF(dd, 0, dbo.tbl_Pivot.inspection_completed_date)), dbo.tbl_Pivot.SystemIP, dbo.defects.label
HAVING        (DATEADD(dd, 0, DATEDIFF(dd, 0, dbo.tbl_Pivot.inspection_completed_date)) = CONVERT(DATETIME, '$Date 00:00:00', 102)) AND (dbo.tbl_Pivot.SystemIP = '$systemIp')");
        return $query->result_array();
    }
    public function getCarsasData(){
        
        $Month=date('m');
        $Year=date('Y');
        $Day=date('d');
        $query=$this->db->query("SELECT        dbo.tbl_TM_Article_Wise_prd.ArtSIze as ArtSize, dbo.tbl_TM_Article_Wise_prd.factoryCode as FactoryCode, dbo.tbl_Pro_Article.ArtCode, dbo.tbl_Pro_Model.ModelName
 FROM            dbo.tbl_TM_Article_Wise_prd INNER JOIN
                          dbo.tbl_Inv_Tran_Date ON dbo.tbl_TM_Article_Wise_prd.DayID = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                          dbo.tbl_Pro_Article ON dbo.tbl_TM_Article_Wise_prd.ClientID = dbo.tbl_Pro_Article.ClientID AND dbo.tbl_TM_Article_Wise_prd.ModelID = dbo.tbl_Pro_Article.ModelID AND 
                          dbo.tbl_TM_Article_Wise_prd.ArtiD = dbo.tbl_Pro_Article.ArtID INNER JOIN
                          dbo.tbl_Pro_Model ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_Model.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_Model.ModelID
 WHERE        (dbo.tbl_Inv_Tran_Date.DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
 GROUP BY dbo.tbl_TM_Article_Wise_prd.ArtSIze, dbo.tbl_TM_Article_Wise_prd.factoryCode, dbo.tbl_Pro_Article.ArtCode, dbo.tbl_Pro_Model.ModelName");
    return $result = $query->result_array(); 


                            }

public function getfinalQCData(){

        $Month=date('m');
        $Year=date('Y');
        $Day=date('d');
            $query = $this->db->query("SELECT        dbo.tbl_Pro_Article.ArtCode, dbo.tbl_TM_Adidas_QC.ArtSize, dbo.tbl_Pro_Model.FactoryCode, dbo.tbl_Pro_Model.ModelName
            FROM            dbo.tbl_TM_Adidas_QC INNER JOIN
                            dbo.tbl_Pro_Article ON dbo.tbl_TM_Adidas_QC.ClientID = dbo.tbl_Pro_Article.ClientID AND dbo.tbl_TM_Adidas_QC.ModelID = dbo.tbl_Pro_Article.ModelID AND 
                            dbo.tbl_TM_Adidas_QC.ArtID = dbo.tbl_Pro_Article.ArtID INNER JOIN
                            dbo.tbl_Inv_Tran_Date ON dbo.tbl_TM_Adidas_QC.DayId = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                            dbo.tbl_Pro_Model ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_Model.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_Model.ModelID
            WHERE        (dbo.tbl_Inv_Tran_Date.DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
            GROUP BY dbo.tbl_Pro_Article.ArtCode, dbo.tbl_TM_Adidas_QC.ArtSize, dbo.tbl_Pro_Model.FactoryCode, dbo.tbl_Pro_Model.ModelName");
            return $result = $query->result_array();
        


            }

 public function getPanelShapeData(){
        
    $Month=date('m');
    $Year=date('Y');
    $Day=date('d');
    $query=$this->db->query("  SELECT        TOP (100) PERCENT EntryType, ShapeName, Type, FactoryCode, MatName + ' /  ' + 'Size' + '  ' + Size AS MatName
     FROM            dbo.View_Tm_panelShape
     WHERE        (DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
     GROUP BY EntryType, MatName + ' /  ' + 'Size' + '  ' + Size, ShapeName, Type, FactoryCode");
     return $result = $query->result_array(); 
                                                 
                                             
    }

public function getAssemblingData(){
        

        $Month=date('m');
        $Year=date('Y');
        $Day=date('d');
        $query=$this->db->query("   SELECT        TOP (100) PERCENT FactoryCode, Size, ArtCode
        FROM            dbo.View_TM_Assembly
        WHERE        (DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
        GROUP BY FactoryCode, Size, ArtCode");
            return $result = $query->result_array(); 


            }
public function getDippingData(){
        
    $Month=date('m');
    $Year=date('Y');
    $Day=date('d');
    $query=$this->db->query(" SELECT        VendorName, Size, MaterialName
    FROM            dbo.View_TM_Dipping_Process
    WHERE        (CONVERT(Varchar, DateName, 103) = '$Day/$Month/$Year')
    GROUP BY VendorName, Size, MaterialName");
        return $result = $query->result_array();     
        
        
        }

public function CuttingPU(){

    $Month=date('m');
    $Year=date('Y');
    $Day=date('d');
    $query=$this->db->query("SELECT    TOP (100) PERCENT dbo.View_PC_TM_Cutting.FactoryCode, dbo.View_PC_TM_Cutting.MatName, 
                                 dbo.Tbl_TM_Material_Shape.ShapeName + ' /  ' + 'Size' + '  ' + dbo.Tbl_TM_Material_Shape.Size AS ShpeName
    FROM            dbo.View_PC_TM_Cutting INNER JOIN
                                 dbo.Tbl_TM_Material_Shape ON dbo.View_PC_TM_Cutting.shapeID = dbo.Tbl_TM_Material_Shape.ShapeID
    WHERE        (dbo.View_PC_TM_Cutting.DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102)) AND (dbo.View_PC_TM_Cutting.PU > 0)
    GROUP BY dbo.View_PC_TM_Cutting.FactoryCode, dbo.View_PC_TM_Cutting.MatName, 
                                 dbo.Tbl_TM_Material_Shape.ShapeName + ' /  ' + 'Size' + '  ' + dbo.Tbl_TM_Material_Shape.Size");
        return $result = $query->result_array();                                   
        }

public function Cuttingfabric(){

    $Month=date('m');
    $Year=date('Y');
    $Day=date('d');
        $query=$this->db->query("SELECT    TOP (100) PERCENT dbo.View_PC_TM_Cutting.FactoryCode, dbo.View_PC_TM_Cutting.MatName, 
                            dbo.Tbl_TM_Material_Shape.ShapeName + ' /  ' + 'Size' + '  ' + dbo.Tbl_TM_Material_Shape.Size AS ShpeName
FROM            dbo.View_PC_TM_Cutting INNER JOIN
                            dbo.Tbl_TM_Material_Shape ON dbo.View_PC_TM_Cutting.shapeID = dbo.Tbl_TM_Material_Shape.ShapeID
WHERE        (dbo.View_PC_TM_Cutting.DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102)) AND (dbo.View_PC_TM_Cutting.Fabric > 0)
GROUP BY dbo.View_PC_TM_Cutting.FactoryCode, dbo.View_PC_TM_Cutting.MatName, 
                            dbo.Tbl_TM_Material_Shape.ShapeName + ' /  ' + 'Size' + '  ' + dbo.Tbl_TM_Material_Shape.Size");
    return $result = $query->result_array();                                   
}

public function CuttingForm(){

    $Month=date('m');
    $Year=date('Y');
    $Day=date('d');
        $query=$this->db->query("SELECT    TOP (100) PERCENT dbo.View_PC_TM_Cutting.FactoryCode, dbo.View_PC_TM_Cutting.MatName, 
                            dbo.Tbl_TM_Material_Shape.ShapeName + ' /  ' + 'Size' + '  ' + dbo.Tbl_TM_Material_Shape.Size AS ShpeName
FROM            dbo.View_PC_TM_Cutting INNER JOIN
                            dbo.Tbl_TM_Material_Shape ON dbo.View_PC_TM_Cutting.shapeID = dbo.Tbl_TM_Material_Shape.ShapeID
WHERE        (dbo.View_PC_TM_Cutting.DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102)) AND (dbo.View_PC_TM_Cutting.Foam > 0)
GROUP BY dbo.View_PC_TM_Cutting.FactoryCode, dbo.View_PC_TM_Cutting.MatName, 
                            dbo.Tbl_TM_Material_Shape.ShapeName + ' /  ' + 'Size' + '  ' + dbo.Tbl_TM_Material_Shape.Size");
    return $result = $query->result_array();                                   
}

public function filter($Sdate,$EDate){

    $SYear = substr($Sdate, 0, 4);
       $SMonth = substr($Sdate, 5, 2);
       $SDay = substr($Sdate, -2, 2);
        $StartDate = $SYear . '.' . $SMonth . '.' . $SDay;
       $EYear = substr($EDate, 0, 4);
       $EMonth = substr($EDate, 5, 2);
       $EDay = substr($EDate, -2, 2);
        $EndDate = $EYear . '.' . $EMonth . '.' . $EDay;
      $query = $this->db->query("SELECT   TOP (100) PERCENT dbo.tbl_TM_Adidas_QC.TranID, dbo.tbl_Pro_Article.ArtCode, dbo.tbl_TM_Adidas_QC.ArtSize, dbo.tbl_TM_Adidas_QC.Weight, dbo.tbl_TM_Adidas_QC.Circum1, dbo.tbl_TM_Adidas_QC.Circum2, 
dbo.tbl_TM_Adidas_QC.Circum3, dbo.tbl_Pro_Article_D.StrtRange, dbo.tbl_Pro_Article_D.EndRange, dbo.tbl_Pro_Article_D.StrtWeight, dbo.tbl_Pro_Article_D.EndWeight, 
(dbo.tbl_TM_Adidas_QC.Circum1 + dbo.tbl_TM_Adidas_QC.Circum2 + dbo.tbl_TM_Adidas_QC.Circum3) / 3 AS Circimference, CONVERT(Varchar, dbo.tbl_TM_Adidas_QC.EntryDate, 102) AS Datee, CONVERT(Varchar, 
dbo.tbl_TM_Adidas_QC.EntryDate, 103) AS Dateee
FROM            dbo.tbl_TM_Adidas_QC INNER JOIN
dbo.tbl_Pro_Article ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_TM_Adidas_QC.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_TM_Adidas_QC.ModelID AND dbo.tbl_Pro_Article.ArtID = dbo.tbl_TM_Adidas_QC.ArtID INNER JOIN
dbo.tbl_Pro_Article_D ON dbo.tbl_Pro_Article_D.ClientID = dbo.tbl_Pro_Article.ClientID AND dbo.tbl_Pro_Article_D.ModelID = dbo.tbl_Pro_Article.ModelID AND dbo.tbl_Pro_Article_D.ArtID = dbo.tbl_Pro_Article.ArtID AND 
dbo.tbl_TM_Adidas_QC.ArtSize = dbo.tbl_Pro_Article_D.ArtSize
WHERE        ((dbo.tbl_TM_Adidas_QC.Circum1 + dbo.tbl_TM_Adidas_QC.Circum2 + dbo.tbl_TM_Adidas_QC.Circum3) / 3 > 0) AND (CONVERT(Varchar, 
dbo.tbl_TM_Adidas_QC.EntryDate, 102) BETWEEN '$StartDate' AND '$EndDate')
ORDER BY dbo.tbl_TM_Adidas_QC.TranID");
       return $result = $query->result_array();
}

public function searchQuery($Sdate,$EDate){
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
And  (dbo.tbl_TM_Article_Wise_prd.Weight > 0)");

return $result = $query->result_array(); 


            }

}

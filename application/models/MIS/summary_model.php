<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class summary_model extends CI_Model {


public function Cutting($Month,$Year,$Day){

  
     $query=$this->db->query("SELECT        TOP (100) PERCENT dbo.View_PC_TM_Cutting.FactoryCode, dbo.View_PC_TM_Cutting.MatName, 
                         dbo.Tbl_TM_Material_Shape.ShapeName + ' / ' + 'Size' + ' ' + dbo.Tbl_TM_Material_Shape.Size AS ShpeName, MAX(dbo.View_PC_TM_Cutting.PU) AS PUMax, 
                         MIN(dbo.View_PC_TM_Cutting.PU) AS PUMin, dbo.View_PC_TM_Cutting.PUStartRange, dbo.View_PC_TM_Cutting.PUEndRange
FROM            dbo.View_PC_TM_Cutting INNER JOIN
                         dbo.Tbl_TM_Material_Shape ON dbo.View_PC_TM_Cutting.shapeID = dbo.Tbl_TM_Material_Shape.ShapeID
WHERE        (dbo.View_PC_TM_Cutting.DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102)) AND (dbo.View_PC_TM_Cutting.PU > 0)
GROUP BY dbo.View_PC_TM_Cutting.FactoryCode, dbo.View_PC_TM_Cutting.MatName, 
                         dbo.Tbl_TM_Material_Shape.ShapeName + ' / ' + 'Size' + ' ' + dbo.Tbl_TM_Material_Shape.Size, dbo.View_PC_TM_Cutting.PUStartRange, 
                         dbo.View_PC_TM_Cutting.PUEndRange");
  return $result = $query->result_array();                                   
}
public function foam($Month,$Year,$Day){

  
     $query=$this->db->query("SELECT        TOP (100) PERCENT dbo.View_PC_TM_Cutting.FactoryCode, dbo.View_PC_TM_Cutting.MatName, 
                         dbo.Tbl_TM_Material_Shape.ShapeName + ' / ' + 'Size' + ' ' + dbo.Tbl_TM_Material_Shape.Size AS ShpeName, MAX(dbo.View_PC_TM_Cutting.Foam) AS FoamMax, 
                         MIN(dbo.View_PC_TM_Cutting.Foam) AS FoamMin, dbo.View_PC_TM_Cutting.PUStartRange, dbo.View_PC_TM_Cutting.PUEndRange
FROM            dbo.View_PC_TM_Cutting INNER JOIN
                         dbo.Tbl_TM_Material_Shape ON dbo.View_PC_TM_Cutting.shapeID = dbo.Tbl_TM_Material_Shape.ShapeID
WHERE        (dbo.View_PC_TM_Cutting.DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102)) AND (dbo.View_PC_TM_Cutting.Foam > 0)
GROUP BY dbo.View_PC_TM_Cutting.FactoryCode, dbo.View_PC_TM_Cutting.MatName, 
                         dbo.Tbl_TM_Material_Shape.ShapeName + ' / ' + 'Size' + ' ' + dbo.Tbl_TM_Material_Shape.Size, dbo.View_PC_TM_Cutting.PUStartRange, 
                         dbo.View_PC_TM_Cutting.PUEndRange");
  return $result = $query->result_array();                                   
}
public function fabric($Month,$Year,$Day){

  
     $query=$this->db->query("SELECT        TOP (100) PERCENT dbo.View_PC_TM_Cutting.FactoryCode, dbo.View_PC_TM_Cutting.MatName, 
                         dbo.Tbl_TM_Material_Shape.ShapeName + ' / ' + 'Size' + ' ' + dbo.Tbl_TM_Material_Shape.Size AS ShpeName, MAX(dbo.View_PC_TM_Cutting.Fabric) AS FabricMax, 
                         MIN(dbo.View_PC_TM_Cutting.Fabric) AS FabricMin, dbo.View_PC_TM_Cutting.PUStartRange, dbo.View_PC_TM_Cutting.PUEndRange
FROM            dbo.View_PC_TM_Cutting INNER JOIN
                         dbo.Tbl_TM_Material_Shape ON dbo.View_PC_TM_Cutting.shapeID = dbo.Tbl_TM_Material_Shape.ShapeID
WHERE        (dbo.View_PC_TM_Cutting.DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102)) AND (dbo.View_PC_TM_Cutting.Fabric > 0)
GROUP BY dbo.View_PC_TM_Cutting.FactoryCode, dbo.View_PC_TM_Cutting.MatName, 
                         dbo.Tbl_TM_Material_Shape.ShapeName + ' / ' + 'Size' + ' ' + dbo.Tbl_TM_Material_Shape.Size, dbo.View_PC_TM_Cutting.PUStartRange, 
                         dbo.View_PC_TM_Cutting.PUEndRange");
  return $result = $query->result_array();                                   
}
   public function getCarsasData($Month,$Year,$Day){
    
        $query=$this->db->query("SELECT        TOP (100) PERCENT FactoryCode, MatName + ' / ' + 'Size' + ' ' + Size AS MatName, ShapeName, CarcWghtStartRange, CarcWghtEndRange, CarcCircumStartRange, CarcCircumEndRange, MAX(CarcassWght) AS Cirweightmax, 
                         MIN(CarcassWght) AS Cirweightmin, MAX(CarcassCircum) AS CirMax, MIN(CarcassCircum) AS CirMin
FROM            dbo.View_TM_Carcas
WHERE        (DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
GROUP BY MatName + ' / ' + 'Size' + ' ' + Size, ShapeName, FactoryCode, CarcWghtStartRange, CarcWghtEndRange, CarcCircumStartRange, CarcCircumEndRange");
    return $result = $query->result_array();                                   
}
   public function getDippingData($Month,$Year,$Day){
        
   
     $query=$this->db->query("SELECT        VendorName, MaterialName, Size, MIN(AirPBC) AS AirPBC, MAX(AirPAC) AS AirPAC, 
            AirPSR, AirPER, 
            MIN(CarcasWBB) AS CarcasWBB, MAX(CarcasWAB) AS CarcasWAB, WeightSR, WeightER, MIN(CarcasCirBB1) 
            AS CarcasCirBB1, MIN(CarcasCirBB2) AS CarcasCirBB2, CirSR, CirER, MAX(CarasCirAB1) AS CarasCirAB1, 
            MAX(CarasCirAB2) AS CarasCirAB2, WeightASR, WeightAER
            FROM            dbo.View_TM_Dipping_Process
            WHERE        (DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
            GROUP BY VendorName, MaterialName, Size, AirPSR, AirPER, WeightSR, WeightER, WeightASR, WeightAER, CirSR, CirER");
  return $result = $query->result_array();     


              }
      public function getAssemblingData($Month,$Year,$Day){
 
    
        $query=$this->db->query("SELECT        TOP (100) PERCENT FactoryCode, Size, ArtCode, MAX(AssemblyWght) AS AssemblyWghtMAx, AssemblyWghtEndRange, AssemblyWghtStartRange, MIN(AssemblyWght) AS AssemblyWghtMin
FROM            dbo.View_TM_Assembly
WHERE        (DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
GROUP BY FactoryCode, Size, ArtCode, AssemblyWghtEndRange, AssemblyWghtStartRange");
  return $result = $query->result_array(); 


                            }
  public function getPanelShapeData($Month,$Year,$Day){
        
        
        $query=$this->db->query("SELECT        TOP (100) PERCENT EntryType, ShapeName, Type, FactoryCode, MatName + ' /  ' + 'Size' + '  ' + Size AS MatName, MAX(PanelShapeWeight) AS PSMax, 
                         MIN(PanelShapeWeight) AS PSMin, PanelShapeStartRange, PanelShapeEndRange
FROM            dbo.View_Tm_panelShape
WHERE        (DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
GROUP BY EntryType, MatName + ' /  ' + 'Size' + '  ' + Size, ShapeName, Type, FactoryCode, PanelShapeStartRange, PanelShapeEndRange");
    return $result = $query->result_array(); 
    

                            }
            public function getFinalQcData($Month,$Year,$Day){
        
        
         $query = $this->db->query("SELECT        ArtSize, MAX(Weight) AS FQMax, MIN(Weight) AS FQMin, ArtCode, StrtWeight, EndWeight, FactoryCode, ModelName, MAX((Circum2 + Circum1 + Circum3) / 3) AS Circummax, MIN((Circum2 + Circum1 + Circum3) / 3) AS Circummin,
                          StrtRange, EndRange
FROM            dbo.View_TM_ADidas_QC_withRange
WHERE        (DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
GROUP BY ArtSize, ArtCode, StrtWeight, EndWeight, FactoryCode, ModelName, StrtRange, EndRange");
          return $result = $query->result_array();
                                }
    public function getLfbData($Month,$Year,$Day){
        
      
        $query=$this->db->query("SELECT        dbo.tbl_Pro_Article.ArtCode, dbo.tbl_Pro_Model.ModelName, dbo.tbl_TM_Article_Wise_prd.ArtSIze, dbo.tbl_TM_Article_Wise_prd.factoryCode AS FactoryCode, 
                         MAX((dbo.tbl_TM_Article_Wise_prd.Circum1 + dbo.tbl_TM_Article_Wise_prd.Circum2 + dbo.tbl_TM_Article_Wise_prd.Circum3) / 3) AS CirMAx, 
                         MIN((dbo.tbl_TM_Article_Wise_prd.Circum1 + dbo.tbl_TM_Article_Wise_prd.Circum2 + dbo.tbl_TM_Article_Wise_prd.Circum3) / 3) AS CirMin, MAX(dbo.tbl_TM_Article_Wise_prd.Weight) AS WeightMAX, 
                         MIN(dbo.tbl_TM_Article_Wise_prd.Weight) AS WeightMin, dbo.tbl_Pro_Article_D.StrtWeight, dbo.tbl_Pro_Article_D.EndWeight, dbo.tbl_Pro_Article_D.StrtRange, dbo.tbl_Pro_Article_D.EndRange, 
                         ISNULL(dbo.tbl_TM_Article_Wise_prd.BallType, 'Junior 350') AS BallType
FROM            dbo.tbl_TM_Article_Wise_prd INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_TM_Article_Wise_prd.DayID = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                         dbo.tbl_Pro_Article ON dbo.tbl_TM_Article_Wise_prd.ClientID = dbo.tbl_Pro_Article.ClientID AND dbo.tbl_TM_Article_Wise_prd.ModelID = dbo.tbl_Pro_Article.ModelID AND 
                         dbo.tbl_TM_Article_Wise_prd.ArtiD = dbo.tbl_Pro_Article.ArtID INNER JOIN
                         dbo.tbl_Pro_Model ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_Model.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_Model.ModelID INNER JOIN
                         dbo.tbl_Pro_Article_D ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_Article_D.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_Article_D.ModelID AND dbo.tbl_Pro_Article.ArtID = dbo.tbl_Pro_Article_D.ArtID AND 
                         dbo.tbl_TM_Article_Wise_prd.ArtSIze = dbo.tbl_Pro_Article_D.ArtSize
WHERE        (dbo.tbl_Inv_Tran_Date.DateName = CONVERT(DATETIME,'$Year-$Month-$Day 00:00:00', 102))
GROUP BY dbo.tbl_TM_Article_Wise_prd.ArtSIze, dbo.tbl_TM_Article_Wise_prd.factoryCode, dbo.tbl_Pro_Article.ArtCode, dbo.tbl_Pro_Model.ModelName, dbo.tbl_Pro_Article_D.StrtWeight, dbo.tbl_Pro_Article_D.EndWeight, 
                         dbo.tbl_Pro_Article_D.StrtRange, dbo.tbl_Pro_Article_D.EndRange, ISNULL(dbo.tbl_TM_Article_Wise_prd.BallType, 'Junior 350')
HAVING        (MAX((dbo.tbl_TM_Article_Wise_prd.Circum1 + dbo.tbl_TM_Article_Wise_prd.Circum2 + dbo.tbl_TM_Article_Wise_prd.Circum3) / 3) IS NOT NULL)");
    return $result = $query->result_array(); 


                            }
	}

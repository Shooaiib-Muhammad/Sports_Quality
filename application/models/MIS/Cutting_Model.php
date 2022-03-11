<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cutting_Model extends CI_Model {

    public function fact2($Domain){

return $this->db->select ("MaterialType, VendorID, TID")
			->from("dbo.Tbl_TM_Material_Type")
			->where("VendorID =$Domain")
			->get()
            ->result();
    }


    public function material($Domain){

        return $this->db->select ("MatName, MTID,MatID, Status")
                    ->from("dbo.tbl_TM_FC_Cutting_Mat")
                    ->where("MTID =$Domain")
                    ->where("Status = 1")
                    ->get()
                    ->result();
            }
            public function shape($Domain){

                return $this->db->select ("ShapeName, ShapeID,MatID,Size,Status")
                            ->from("dbo.Tbl_TM_Material_Shape")
                            ->where("MatID =$Domain")
                            ->where("Status = 1")
                            ->get()
                            ->result();
                    }
            public function searchQuery($fc,$matType,$Shape,$material,$Sdate,$EDate){

                        return $this->db->select ( "FactoryCode, Size, MatID, PUStartRange, PUEndRange, PU, Foam, Fabric, VenderID, MattypeID, HourName, MatName, DateName, HourID")
                                    ->from("dbo.View_PC_TM_Cutting")
                                    ->where("DateName >=", $Sdate)
                                    ->where("DateName <=", $EDate)
                                    ->where("VenderID =$fc")
                                    ->where("MattypeID =$matType")
                                    ->where("MatID =$Shape")
                                    ->where("shapeID =$material")
                                    ->get()
                                    ->result();
                            }
                         
                            Public function getPuDate(){
                                $Month=date('m');
                                $Year=date('Y');
                                $Day=date('d');
                                return $query= $this->db->select  ( "dbo.View_PC_TM_Cutting.FactoryCode, dbo.View_PC_TM_Cutting.MatName, dbo.Tbl_TM_Material_Shape.ShapeName + ' / ' + 'Size' + ' ' + dbo.Tbl_TM_Material_Shape.Size AS ShapeName")
                                    ->from(" dbo.View_PC_TM_Cutting")
                                    ->join("dbo.Tbl_TM_Material_Shape" , "dbo.View_PC_TM_Cutting.shapeID = dbo.Tbl_TM_Material_Shape.ShapeID ")
                                    
                                    ->where("dbo.View_PC_TM_Cutting.DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102)")
                                    ->where("dbo.View_PC_TM_Cutting.PU >", 0)
                                    ->group_by(" dbo.View_PC_TM_Cutting.FactoryCode, dbo.View_PC_TM_Cutting.MatName, dbo.Tbl_TM_Material_Shape.ShapeName + ' / ' + 'Size' + ' ' + dbo.Tbl_TM_Material_Shape.Size")
                                    //->group_by("dbo.View_PC_TM_Cutting.MatName")
                                    //->group_by(" dbo.Tbl_TM_Material_Shape.ShapeName + ' / ' + 'Size' + ' ' + dbo.Tbl_TM_Material_Shape.Size")
                                    ->get()
                                    ->result();
                                   




                            }
                             Public function getFoamData(){
                                  $Month=date('m');
                                $Year=date('Y');
                                $Day=date('d');
                                  return $this->db->select ( " dbo.View_PC_TM_Cutting.FactoryCode, dbo.View_PC_TM_Cutting.MatName, dbo.Tbl_TM_Material_Shape.ShapeName + ' / ' + 'Size' + ' ' + dbo.Tbl_TM_Material_Shape.Size AS ShapeName")
                                    ->from(" dbo.View_PC_TM_Cutting")
                                    ->join("dbo.Tbl_TM_Material_Shape" , "dbo.View_PC_TM_Cutting.shapeID = dbo.Tbl_TM_Material_Shape.ShapeID ")
                                    
                                    ->where("dbo.View_PC_TM_Cutting.DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102)")
                                    ->where("dbo.View_PC_TM_Cutting.Foam >", 0)
                                    ->group_by(" dbo.View_PC_TM_Cutting.FactoryCode, dbo.View_PC_TM_Cutting.MatName, dbo.Tbl_TM_Material_Shape.ShapeName + ' / ' + 'Size' + ' ' + dbo.Tbl_TM_Material_Shape.Size")
                                  
                                    ->get()
                                    ->result();

                         }
                            public function getfabricDate(){
                                $Month=date('m');
                                $Year=date('Y');
                                $Day=date('d');
                                  return $this->db->select ( " dbo.View_PC_TM_Cutting.FactoryCode, dbo.View_PC_TM_Cutting.MatName, dbo.Tbl_TM_Material_Shape.ShapeName + ' / ' + 'Size' + ' ' + dbo.Tbl_TM_Material_Shape.Size AS ShapeName")
                                    ->from(" dbo.View_PC_TM_Cutting")
                                    ->join("dbo.Tbl_TM_Material_Shape" , "dbo.View_PC_TM_Cutting.shapeID = dbo.Tbl_TM_Material_Shape.ShapeID ")
                                    
                                    ->where("dbo.View_PC_TM_Cutting.DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102)")
                                    ->where("dbo.View_PC_TM_Cutting.Fabric >", 0)
                                    ->group_by(" dbo.View_PC_TM_Cutting.FactoryCode, dbo.View_PC_TM_Cutting.MatName, dbo.Tbl_TM_Material_Shape.ShapeName + ' / ' + 'Size' + ' ' + dbo.Tbl_TM_Material_Shape.Size")
                                  
                                    ->get()
                                    ->result();
                                
                                
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
public function Cutting_final($fc,$matType,$Shape,$material,$Sdate,$EDate){
   
     $query=$this->db->query("SELECT        TOP (100) PERCENT FactoryCode, Size, PUStartRange, PUEndRange, PU, Foam, Fabric, HourName, MatName, shapeID, HourID, MatID, VenderID, MattypeID
FROM            dbo.View_PC_TM_Cutting
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Sdate', 102) AND CONVERT(DATETIME, 
                         '$EDate', 102)) AND (shapeID = $material) AND (VenderID = $fc) AND (MattypeID = $matType ) AND (MatID =$Shape )
ORDER BY HourID");



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

	}

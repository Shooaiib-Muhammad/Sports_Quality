<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carcas_Model extends CI_Model {

    public function fact2($Domain){

            return $this->db->select ("ShapeName, vendorID, ShapeID, Status")
			->from("dbo.Tbl_TM_Carcas_Shape")
            ->where("VendorID =$Domain")
            ->where("Status = 1")
			->get()
            ->result();
    }


    public function material($Domain){


        return $this->db->select ("ShapeID, MatName, MatID,Size, Status")
                    ->from("dbo.tbl_TM_FC_Carcass_Mat")
                    ->where("ShapeID =$Domain")
                    ->where("Status = 1")
                    ->get()
                    ->result();
            }
    public function searchQuery($fc,$matType,$Shape,$Sdate,$EDate){

        $Month=date('m');
        $Year=date('Y');
        $Day=date('d');
        $query=$this->db->query("SELECT      TOP (100) PERCENT HourName, CarcassWght, CarcassCircum, CarcWghtStartRange, CarcWghtEndRange, CarcCircumStartRange, CarcCircumEndRange, Size
FROM            dbo.View_TM_Carcas
WHERE        (VenderID = $fc) AND (MatID = $Shape   ) AND (shapeID = $matType) AND (DateName BETWEEN CONVERT(DATETIME, '$Sdate 00:00:00', 102) AND CONVERT(DATETIME, '$EDate 00:00:00', 102))
ORDER BY HourID");
  return $result = $query->result_array(); 



                            }
                         
                           
public function getCarsasData(){
        
        $Month=date('m');
        $Year=date('Y');
        $Day=date('d');
        $query=$this->db->query("SELECT   TOP (100) PERCENT FactoryCode, MatName + ' / ' + 'Size' + ' ' + Size AS MatName, ShapeName
    FROM            dbo.View_TM_Carcas
    WHERE        (DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
    GROUP BY FactoryCode, MatName + ' / ' + 'Size' + ' ' + Size, ShapeName");
    return $result = $query->result_array();                                   
}


        
}

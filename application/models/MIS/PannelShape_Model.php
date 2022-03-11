<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PannelShape_Model extends CI_Model {

    public function fact2($Domain){

        return $this->db->select ("FactoryCode, ArtSize,VendorID")
        ->from("dbo.View_TM_FactoryCode_SizeWise")
        ->where("VendorID =$Domain")
        ->get()
        ->result();
    }
    

    
    public function shape($Domain){


        return $this->db->select ("ShapeName, ShapeID,VendorId")
                    ->from("dbo.Tbl_TM_panelShape_Shape")
                    ->where("vendorID =$Domain")
                    ->get()
                    ->result();
            }
    
    public function material($Domain){


        return $this->db->select ("ShapeID, MatName, MatID,Size,Status")
                    ->from("dbo.tbl_TM_FC_PanelShap_Mat")
                    ->where("ShapeID =$Domain")
                    ->where("Status = 1")
                    ->get()
                    ->result();
            }
    

    public function searchQuery($fc,$matType,$Shape,$Sdate,$EDate,$sizenew){

          $Month=date('m');
                    $Year=date('Y');
                    $Day=date('d');
                    
                    $query=$this->db->query("SELECT        TOP (100) PERCENT HourName, PanelShapeStartRange, PanelShapeEndRange, PanelShapeWeight, MatName, HourID, Size
FROM            dbo.View_Tm_panelShape
WHERE       (DateName BETWEEN '$Sdate' AND '$EDate') And (VenderID=$fc) And (Type='$sizenew') And (shapeID=$Shape) And (MatID=$matType)
ORDER BY HourID");
                return $result = $query->result_array(); 
        

                            }
                         
                           
    public function getCarsasData(){
        
           $Month=date('m');
        $Year=date('Y');
        $Day=date('d');
        $query=$this->db->query("  SELECT        TOP (100) PERCENT EntryType, ShapeName, Type, FactoryCode, MatName + ' /  ' + 'Size' + '  ' + Size AS MatName
FROM            dbo.View_Tm_panelShape
WHERE        (DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
GROUP BY EntryType, MatName + ' /  ' + 'Size' + '  ' + Size, ShapeName, Type, FactoryCode");
    return $result = $query->result_array(); 
    

                            }
    
	}
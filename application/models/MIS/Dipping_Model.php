<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dipping_Model extends CI_Model {

    public function fact2($Domain){

            return $this->db->select ("ArtSize")
            ->from(" dbo.Tbl_Carcas_Dipping_Material")
            ->where("FactoryCode =$Domain")
            ->get()
            ->result();
    }


    public function searchQuery($fc,$Sdate,$EDate,$sizenew){

        $Month=date('m');
        $Year=date('Y');
        $Day=date('d');
        $query=$this->db->query("SELECT      6363  Size, MaterialName, AirPBC, AirPAC, AirDifference, CarcasWBB, CarcasWAB, WeightDifference, CarcasCirBB1, CarcasCirBB2, CirBDiffenence, CarasCirAB1, CarasCirAB2, CirADifference, DateName, VendorId
FROM            dbo.View_TM_Dipping_Process
WHERE        (DateName BETWEEN CONVERT(DATETIME, '$Sdate 00:00:00', 102) AND CONVERT(DATETIME, '$EDate 00:00:00', 102)) AND (VendorId = $fc) AND (Size = '$sizenew')");
  return $result = $query->result_array(); 

        

                            }
                         
                           
    public function getCarsasData(){
        
        $Month=date('m');
        $Year=date('Y');
        $Day=date('d');
     $query=$this->db->query(" SELECT        VendorName, Size, MaterialName
FROM            dbo.View_TM_Dipping_Process
WHERE        (CONVERT(Varchar, DateName, 103) = '$Day/$Month/$Year')
GROUP BY VendorName, Size, MaterialName");
  return $result = $query->result_array();     


                            }
    
	}

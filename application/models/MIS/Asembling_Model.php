<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asembling_Model extends CI_Model {

    public function fact2($Domain){



            return $this->db->select ("FactoryCode, ArtSize,VendorID")
            ->from("dbo.View_TM_FactoryCode_SizeWise")
            ->where("FactoryCode ='$Domain'")
            ->get()
            ->result();
    }

    public function searchQuery($Sdate,$EDate,$Art,$sizenew){

        $Month=date('m');
        $Year=date('Y');
        $Day=date('d');
        $query=$this->db->query("SELECT        TOP (100) PERCENT FactoryCode, Size, ArtCode, AssemblyWghtStartRange, AssemblyWghtEndRange, AssemblyWght
FROM            dbo.View_TM_Assembly
WHERE        (DateName BETWEEN '$Sdate' AND '$EDate') AND (ArtCode = '$Art') AND (Size = '$sizenew')");
       
       return $result = $query->result_array(); 
        

                            }
                         
                           
    public function getCarsasData(){
        

        $Month=date('m');
        $Year=date('Y');
        $Day=date('d');
        $query=$this->db->query("   SELECT        TOP (100) PERCENT FactoryCode, Size, ArtCode
FROM            dbo.View_TM_Assembly
WHERE        (DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
GROUP BY FactoryCode, Size, ArtCode");
  return $result = $query->result_array(); 


                            }
    
	}

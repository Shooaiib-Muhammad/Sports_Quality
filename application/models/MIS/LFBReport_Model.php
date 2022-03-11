<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LFBReport_Model extends CI_Model {

    public function fact2($Domain){
        $fac_code = 'B34007';
        $query = $this->db->query("SELECT        dbo.tbl_Pro_Article_D.ArtSize
            FROM         dbo.tbl_Pro_Article INNER JOIN
                        dbo.tbl_Pro_Model ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_Model.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_Model.ModelID INNER JOIN
                        dbo.tbl_Pro_Article_D ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_Article_D.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_Article_D.ModelID AND dbo.tbl_Pro_Article.ArtID = dbo.tbl_Pro_Article_D.ArtID
            
            WHERE dbo.tbl_Pro_Model.FactoryCode = '$fac_code' AND dbo.tbl_Pro_Article.ArtCode = '$Domain'"
        );
            return $query->result_array();

         
       /*  return $this->db->select (" dbo.tbl_Pro_Article_D.ArtSize")
        ->from(" dbo.tbl_Pro_Article")
        ->where("dbo.tbl_Pro_Model.FactoryCode = $fac_code")
        ->where("dbo.tbl_Pro_Article.ArtCode = $Domain")
        ->join('INNER JOIN
        dbo.tbl_Pro_Model ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_Model.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_Model.ModelID INNER JOIN
        dbo.tbl_Pro_Article_D ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_Article_D.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_Article_D.ModelID AND dbo.tbl_Pro_Article.ArtID = dbo.tbl_Pro_Article_D.ArtID','INNER JOIN')
        ->get()
        ->result(); */
    }

    public function allArticles(){
        $query = $this->db->query("SELECT dbo.tbl_Pro_Article.ArtCode
        FROM            dbo.tbl_Pro_Article INNER JOIN
        dbo.tbl_Pro_Model ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_Model.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_Model.ModelID
        WHERE        (dbo.tbl_Pro_Model.FactoryCode = 'B34007')");
        return $query->result_array();
    }
    

    
    public function searchQuery($fc,$matType,$Shape,$Sdate,$EDate){

        $Month=date('m');
        $Year=date('Y');
        $Day=date('d');
        return $this->db->select ( "TOP (100) PERCENT HourName, AVG(CarcassWght) AS CarcassWght, AVG(CarcassCircum) AS CarcassCircum, CarcWghtStartRange, CarcWghtEndRange, 
        CarcCircumStartRange, CarcCircumEndRange, Size")
                    ->from("dbo.View_TM_Carcas")
                    ->where("VenderID = $fc")
                    ->where("MatID = $matType")
                    ->where("shapeID = $Shape")
                    ->where("DateName >=", $Sdate)
                    ->where("DateName <=", $EDate)
                    ->group_by("HourName, HourID, CarcWghtStartRange, CarcWghtEndRange, CarcCircumStartRange, CarcCircumEndRange, Size")
                    ->order_by("HourID")
                    ->get()
                    ->result();

        

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
    
	}
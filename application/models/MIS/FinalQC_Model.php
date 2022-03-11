<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinalQC_Model extends CI_Model {

    public function fact2($Domain){

        $query = $this->db->query("SELECT        dbo.tbl_Pro_Article_D.ArtSize
        FROM            dbo.tbl_Pro_Article INNER JOIN
                                 dbo.tbl_Pro_Model ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_Model.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_Model.ModelID INNER JOIN
                                 dbo.tbl_Pro_Article_D ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_Article_D.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_Article_D.ModelID AND dbo.tbl_Pro_Article.ArtID = dbo.tbl_Pro_Article_D.ArtID
        WHERE        (dbo.tbl_Pro_Article.ArtCode = '$Domain')"
        );
            return $query->result_array();
    }
    
    public function allArticles(){
        $query = $this->db->query("SELECT        dbo.tbl_Pro_Article.ArtCode
FROM            dbo.tbl_Pro_Article INNER JOIN
                         dbo.tbl_Pro_Model ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_Model.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_Model.ModelID INNER JOIN
                         dbo.tbl_Pro_PO ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_PO.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_PO.ModelID AND 
                         dbo.tbl_Pro_Article.ArtID = dbo.tbl_Pro_PO.ArtID AND dbo.tbl_Pro_Model.ClientID = dbo.tbl_Pro_PO.ClientID AND 
                         dbo.tbl_Pro_Model.ModelID = dbo.tbl_Pro_PO.ModelID
WHERE        (dbo.tbl_Pro_Model.ClientID = 1) AND (dbo.tbl_Pro_PO.OrderType = N'Original Order') AND (dbo.tbl_Pro_PO.SecondConfDate > CONVERT(DATETIME, 
                         '2019-01-01 00:00:00', 102))
GROUP BY dbo.tbl_Pro_Article.ArtCode");
        return $query->result_array();
    }
    
    public function selectAllArticleCode($Domain){


        return $this->db->select ("ShapeName, ShapeID,VendorId")
                    ->from("dbo.Tbl_TM_panelShape_Shape")
                    ->where("ShapeID =$Domain")
                    ->get()
                    ->result();
            }

    
    public function shape($Domain){


        return $this->db->select ("ShapeName, ShapeID,VendorId")
                    ->from("dbo.Tbl_TM_panelShape_Shape")
                    ->where("ShapeID =$Domain")
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
         $query = $this->db->query("SELECT        dbo.tbl_Pro_Article.ArtCode, dbo.tbl_TM_Adidas_QC.ArtSize, dbo.tbl_Pro_Model.FactoryCode, dbo.tbl_Pro_Model.ModelName
FROM            dbo.tbl_TM_Adidas_QC INNER JOIN
                         dbo.tbl_Pro_Article ON dbo.tbl_TM_Adidas_QC.ClientID = dbo.tbl_Pro_Article.ClientID AND dbo.tbl_TM_Adidas_QC.ModelID = dbo.tbl_Pro_Article.ModelID AND 
                         dbo.tbl_TM_Adidas_QC.ArtID = dbo.tbl_Pro_Article.ArtID INNER JOIN
                         dbo.tbl_Inv_Tran_Date ON dbo.tbl_TM_Adidas_QC.DayId = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
                         dbo.tbl_Pro_Model ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_Model.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_Model.ModelID
WHERE        (dbo.tbl_Inv_Tran_Date.DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102))
GROUP BY dbo.tbl_Pro_Article.ArtCode, dbo.tbl_TM_Adidas_QC.ArtSize, dbo.tbl_Pro_Model.FactoryCode, dbo.tbl_Pro_Model.ModelName");
          return $result = $query->result_array();
        // return $this->db->select ( " dbo.tbl_Pro_Article.ArtCode, dbo.tbl_TM_Adidas_QC.ArtSize, dbo.tbl_Pro_Model.FactoryCode, dbo.tbl_Pro_Model.ModelName")
        // ->from(" dbo.tbl_TM_Adidas_QC INNER JOIN
        //                  dbo.tbl_Pro_Article ON dbo.tbl_TM_Adidas_QC.ClientID = dbo.tbl_Pro_Article.ClientID AND dbo.tbl_TM_Adidas_QC.ModelID = dbo.tbl_Pro_Article.ModelID AND 
        //                  dbo.tbl_TM_Adidas_QC.ArtID = dbo.tbl_Pro_Article.ArtID INNER JOIN
        //                  dbo.tbl_Inv_Tran_Date ON dbo.tbl_TM_Adidas_QC.DayId = dbo.tbl_Inv_Tran_Date.DayNo INNER JOIN
        //                  dbo.tbl_Pro_Model ON dbo.tbl_Pro_Article.ClientID = dbo.tbl_Pro_Model.ClientID AND dbo.tbl_Pro_Article.ModelID = dbo.tbl_Pro_Model.ModelID")
        // ->where("(dbo.tbl_Inv_Tran_Date.DateName = CONVERT(DATETIME, '$Year-$Month-$Day 00:00:00', 102)")
        // ->group_by("dbo.tbl_Pro_Article.ArtCode, dbo.tbl_TM_Adidas_QC.ArtSize, dbo.tbl_Pro_Model.FactoryCode, dbo.tbl_Pro_Model.ModelName")
        // // ->order_by("HourID")
        // ->get()
        // ->result();


                            }
public function filter($Article,$Sdate,$EDate,$sizenew){

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
WHERE        (dbo.tbl_Pro_Article.ArtCode = '$Article') AND (dbo.tbl_TM_Adidas_QC.ArtSize = '$sizenew') AND ((dbo.tbl_TM_Adidas_QC.Circum1 + dbo.tbl_TM_Adidas_QC.Circum2 + dbo.tbl_TM_Adidas_QC.Circum3) / 3 > 0) AND (CONVERT(Varchar, 
dbo.tbl_TM_Adidas_QC.EntryDate, 102) BETWEEN '$StartDate' AND '$EndDate')
ORDER BY dbo.tbl_TM_Adidas_QC.TranID");
          return $result = $query->result_array();
}
    
	}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DPAModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
     $this->load->library('session');
        
    }

 public function CallData($article){

  $query = $this->db->query("SELECT      dbo.view_Dev_DPA.*
  FROM            dbo.view_Dev_DPA
  WHERE        (ArtCode = '$article')");
          return  $query->result_array(); 
 }

 public function getTableData($fc,$season,$fSeason){
    $query = $this->db->query("SELECT dbo.view_Dev_DPA_Article.*
FROM dbo.view_Dev_DPA_Article 
WHERE        (FactoryCode = '$fc') AND (season = '$fSeason')
");
            return  $query->result_array();
 }

  
   
    public function submit($article,
    $working,
    $pname,
    $colorway,
    $fcode,
    $pshape,
    $yields,
    $client,
   $model,
   $art,
    $ac,
    $fbo,
    $inhousedate,
   $csdate,
    $cr1comments,
    $inhousedate1,
    $csdate1,
    $cr2comments,
    $postD,
    $comments,
    $buymodel,
   $buyarticle,
    $revdate,
    $retail,
    $cars,
    $remarks,
    $mktg,
    $fifa,
    $inhouse,
    $cs,
    $inhouse1,
    $cs1,
    $approve,
    $finalcs,
    $br,
    $mcs,
        $DevType,$season){

            if($yields){
                $y=$yields;
            }else{
                $y=0;
            }
        //    echo $mktg;
        //    die; 

        $user=$this->session->has_userdata('user_id');
        $query = $this->db->query("INSERT INTO  dbo . Tbl_Dev_DPA 
        ( ArticleID 
           , ClientID  
           , ModelID 
           , FactoryCode 
           , Article_Count 
           , BF_Date 
           , CR1_In_House_Date 
           , CR1_Subbmition_Date,
           CR1_In_House_Status,
           CR1_Subbmition_Status,
           CR1_Comments,
           CR2_In_House_Date,
           CR2_Subbmition_Date,
           CR2_In_House_Status,
           CR2_Subbmition_Status,
           CR2_Comments,
           Post_CR2_Ex_fty,
           Comments_Remarks,
           Approved,
           EBR_Model_Date,
           EBR_Article_Date,
           Rev_BR_Date,
           Final_CS_Confirmation,
           BR_Status,
           MCS,
           Retail_Intro,
           Fty_Priority,
           Remarks,
           Mktg_FC,
           FIFA_authorization_validity_Date,
           Ball_Picture,
           EntryDate,
           UserID,ArtCode,Yield ,DevType,season)
  VALUES
        ( $art , $client   , $model , '$fcode', '$ac'  , '$fbo'     , '$inhousedate'  ,  '$csdate','$inhouse','$cs','$cr1comments','$inhousedate1','$csdate1','$inhouse1','$cs1','$cr2comments','$postD','$comments','$approve','$buymodel','$buyarticle','$revdate','$finalcs','$br','$mcs','$retail','$cars','$remarks','$mktg','$fifa',' ', '$inhousedate ', $user,'$article', $y ,'$DevType','$season')");
        
      

    }

          public function getimages(){
                  $query=$this->db->query("SELECT        dbo.View_156.CNIC, dbo.View_156.EmpPic
FROM            dbo.Table_10 INNER JOIN
                         dbo.View_156 ON dbo.Table_10.CNICN = dbo.View_156.CNIC
WHERE        (dbo.View_156.EmpPic IS NOT NULL)");
      return $query->result_array();   
          }

          public function delteRecord($id){
          
            $query=$this->db->query("DELETE FROM dbo . Tbl_Dev_DPA WHERE (TID = '$id')");
                  return $query;  
          }

        public function updateDPA($id,
        // $PrintingColors,
        // $PanelShape,
        $Yield,
        $Article_Count,
        $BF_Date,
        $CR1_In_House_Date,
        $CR1_Subbmition_Date,
        $CR1_Comments,
        $CR2_In_House_Date,
        $CR2_Subbmition_Date,
        $CR2_Comments,
        $Post_CR2_Ex_fty,
        $Comments_Remarks,
        $EBR_Model_Date,
        $EBR_Article_Date,
        $Rev_BR_Date,
        $Retail_Intro,
        $Fty_Priority,
        $Remarks,
        $Mktg_FC,
        $FIFA_authorization_validity_Date,
        $CR1_In_House_Status,
        $CR1_Subbmition_Status,
        $CR2_In_House_Status,
        $CR2_Subbmition_Status,
        $Approved,
        $Final_CS_Confirmation,
        $BR_Status,
        $MCS,
        $DevTypeN,
        $seasonN){
        
       

$query=$this->db->query("UPDATE dbo . Tbl_Dev_DPA
SET  Yield=$Yield,Article_Count=$Article_Count,BF_Date='$BF_Date',CR1_In_House_Date='$CR1_In_House_Date',CR1_Subbmition_Date='$CR1_Subbmition_Date',CR1_Comments='$CR1_Comments',CR2_In_House_Date='$CR2_In_House_Date',CR2_Subbmition_Date='$CR2_Subbmition_Date',CR2_Comments='$CR2_Comments',Post_CR2_Ex_fty='$Post_CR2_Ex_fty',Comments_Remarks='$Comments_Remarks',EBR_Model_Date='$EBR_Model_Date',EBR_Article_Date='$EBR_Article_Date',Rev_BR_Date='$Rev_BR_Date',Retail_Intro='$Retail_Intro',Fty_Priority='$Fty_Priority',Remarks='$Remarks',Mktg_FC='$Mktg_FC',FIFA_authorization_validity_Date='$FIFA_authorization_validity_Date',CR1_In_House_Status=$CR1_In_House_Status,CR1_Subbmition_Status=$CR1_Subbmition_Status,CR2_In_House_Status=$CR2_In_House_Status,CR2_Subbmition_Status=$CR2_Subbmition_Status,Approved=$Approved,Final_CS_Confirmation=$Final_CS_Confirmation,BR_Status=$BR_Status,MCS=$MCS,DevType='$DevTypeN',season='$seasonN'
WHERE  (TID = '$id')");
    return $query;  
        }

        public function allDPA(){
            $query=$this->db->query(" SELECT dbo.view_Dev_DPA_Article.*
            FROM dbo.view_Dev_DPA_Article");
                  return $query->result_array();   
        }
}



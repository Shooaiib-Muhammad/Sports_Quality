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
  $query = $this->db->query("  SELECT       dbo.view_Dev_DPA.*
  FROM            dbo.view_Dev_DPA
  WHERE        (ArtCode = '$article')");
          return  $query->result_array(); 
 }

 public function getTableData($article){
    $query = $this->db->query("SELECT dbo.view_Dev_DPA_Article.*
FROM dbo.view_Dev_DPA_Article 
WHERE        (dbo.view_Dev_DPA_Article.ArtCode ='$article')
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
    $mcs){

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
           UserID,ArtCode )
  VALUES
        ( '$art' , '$client'   , '$model'     , '$fcode'    , '$ac'  , '$fbo'     , '$inhousedate'  ,  '$csdate','$inhouse','$cs','$cr1comments','$inhousedate1','$csdate1','$inhouse1','$cs1','$cr2comments','$postD','$comments','$approve','$buymodel','$buyarticle','$revdate','$finalcs','$br','$mcs','$retail','$cars','$remarks','$mktg','$fifa',' ', '$inhousedate ', ' $user','$article' )");
        
      

    }




  


      


        public function editMaterial($matDid, $matPName, $matDName,$matName, $matQtyy, $matUomm, $matNarrat, $user){


 $MIS = $this->load->database('MIS', TRUE);
            $query = $MIS->query("UPDATE  dbo . tbl_Project_D 
            SET  ProjectHID  =  '$matPName'  
               , DeptID  =  ' $matDName' 
               , Code  =  '$matName'  
               , Qty  =  '$matQtyy'  
               , UOM  =  '$matUomm'  
               , Narration  =  '$matNarrat'  
               , UserID  =  '$user'  
               
          WHERE ProjectDID='$matDid'");
            
            if ($query) {
                $this->session->set_flashdata('Proinfo', 'Material has been Updated. ');
                redirect('Material');
            } else {
                $this->session->set_flashdata('danger', 'There is an error while Updating Material.');
                redirect('Material');
            }
    
        }

          public function getimages(){
                  $query=$this->db->query("SELECT        dbo.View_156.CNIC, dbo.View_156.EmpPic
FROM            dbo.Table_10 INNER JOIN
                         dbo.View_156 ON dbo.Table_10.CNICN = dbo.View_156.CNIC
WHERE        (dbo.View_156.EmpPic IS NOT NULL)");
      return $query->result_array();   
          }

        
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FIT_Model extends CI_Model
{

 public function __construct()
 {
  parent::__construct();
  $this->load->database();
  $this->load->library('session');
 }

 public function CallData()
 {

  $query = $this->db->query("SELECT      dbo.Tbl_Fit_Lab_Capability.*
  FROM            dbo.Tbl_Fit_Lab_Capability");
  return  $query->result_array();
 }
 public function CallDataD()
 {

  $query = $this->db->query("SELECT      dbo.view_FIt_Package_D.*
  FROM            dbo.view_FIt_Package_D");
  return  $query->result_array();
 }
  public function gettestData($TID)
  {

    $query = $this->db->query("SELECT      dbo.Tbl_Fit_Lab_Capability.*
  FROM            dbo.Tbl_Fit_Lab_Capability
  WHERE TestID=$TID");
    return  $query->result_array();
  }
 public function getTableData($fc, $season)
 {
  $query = $this->db->query("SELECT dbo.view_Dev_DPA_Article.*
FROM dbo.view_Dev_DPA_Article 
WHERE        (FactoryCode = '$fc') AND (SesonalRange = '$season')
");
  return  $query->result_array();
 }

public function EditTest(
    $TID,
    $Type,
    $Type1,
    $Name,
    $Method,
    $Sprice,
    $GPrice,
    $PPrice,
    $SDays,
    $PDays,
    $Ggays,
    $SDesc,
    $Pdesc,
    $GDesc,
    $image
    ){
    $query = $this->db->query("UPDATE    dbo .Tbl_Fit_Lab_Capability 
            SET   Type  =  '$Type',Name  =  '$Name',Method  =  '$Method' ,StandardPrice='$Sprice' ,PremimumPrice='$PPrice' ,GoldenPrice='$GPrice',
            StandardDays='$SDays',PermimumDays = '$PDays',GoldenDays= '$Ggays',StandardDesc= '$SDesc',PermimumDesc= '$Pdesc',GoldenDesc= '$GDesc',Image='$image',TestType='$Type1'
          WHERE  TestID='$TID'");  

}

 public function submit(
   $Type,
   $Type1,
   $Name,
   $Method,
   $Sprice,
   $GPrice,
   $PPrice,
   $SDays,
   $PDays,
   $Ggays,
   $SDesc,
   $Pdesc,
   $GDesc,
   $status,
   $picture
 ) {

  $user = $this->session->has_userdata('user_id');
  $query = $this->db->query("INSERT INTO  dbo . Tbl_Fit_Lab_Capability 
        (  
   Type,
   TestType,
Name,
Method,
StandardPrice	,
PremimumPrice,
GoldenPrice	,
StandardDays,
PermimumDays,
GoldenDays,
StandardDesc,
PermimumDesc,
GoldenDesc,
   status,image)
  VALUES
        ('$Type',
        '$Type1',
   '$Name',
   '$Method',
   '$Sprice',
   '$GPrice',
   '$PPrice',
   '$SDays',
   '$PDays',
   '$Ggays',
   '$SDesc',
   '$Pdesc',
   '$GDesc',
   1,
   '$picture')");
 }


 public function getimages()
 {
  $query = $this->db->query("SELECT        dbo.View_156.CNIC, dbo.View_156.EmpPic
FROM            dbo.Table_10 INNER JOIN
                         dbo.View_156 ON dbo.Table_10.CNICN = dbo.View_156.CNIC
WHERE        (dbo.View_156.EmpPic IS NOT NULL)");
  return $query->result_array();
 }

 public function undobtn($id)
 {
    $query = $this->db->query("DELETE  FROM dbo.Tbl_Fit_Lab_Capability
       WHERE TestID=$id");
  // $query = $this->db->query("DELETE FROM dbo . Tbl_Fit_Lab_Capability WHERE (TestID = '$id')");
  // return $query;
 }

 public function submitPackage($Type,
 $Name,
 $Method,
 $status

) {

$user = $this->session->has_userdata('user_id');

if($status=='on' || $status=='On'){
$sta=1;
}else{
  $sta=0;
}
$query = $this->db->query("INSERT INTO  dbo . tbl_Fit_Pckg_D 
      (  
TestID,
Name,
Method,
 Status)
VALUES
      (
        '$Type',
 '$Name',
 '$Method',
 $sta
 )");
 return $query;
 }

 public function TestType(){
  $query = $this->db->query("SELECT   TestID, Name, TestType
  FROM            dbo.Tbl_Fit_Lab_Capability
  WHERE        (TestType = 'Package')");
    return $query->result_array();

 }

 public function Deletetest($id){
  
  
  $query = $this->db->query("DELETE   FROM dbo.Tbl_Fit_Lab_Capability
  WHERE TestID='$id'");
 }
 public function Deletepkg($id){
  
  
  $query = $this->db->query("DELETE   FROM dbo.tbl_Fit_Pckg_D
  WHERE ID='$id'");
 }

 public function updatePkg($id,$testname,$pkgname,$method,$status){

  if($status=='on' || $status=='On'){
    $checked=1;
  }else{
    $checked=0;
  }
  $query = $this->db->query("UPDATE    dbo .tbl_Fit_Pckg_D 
  SET   TestID  =  '$testname',Name  =  '$pkgname',Method  =  '$method' ,Status='$checked'
 
WHERE  ID='$id'"); 
 return;
 }

 public function editPkg($id){
  
  $query = $this->db->query("SELECT        dbo.view_FIt_Package_D.*
  FROM            dbo.view_FIt_Package_D
  WHERE        (ID = $id)");
    return  $query->result_array();
 }


}

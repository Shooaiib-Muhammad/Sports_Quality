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



 public function submit(
   $Type,
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
   $status
 ) {

  $user = $this->session->has_userdata('user_id');
  $query = $this->db->query("INSERT INTO  dbo . Tbl_Fit_Lab_Capability 
        (  
   Type,
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
   status)
  VALUES
        ('$Type',
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
   1)");
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
}

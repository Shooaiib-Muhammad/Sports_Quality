<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LFB_Packing extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();

  $this->load->model('LFB_Packing/LFB_Packing_Model', 'LFB_Packing_Model');
 }

 public function index()
 {
  // echo "I am herer";
  // die;
  $Month = date('m');
  $Year = date('Y');
  $Day = date('d');
  $CurrentDate = $Day . '/' . $Month . '/' . $Year;

  $data['Data'] = $this->LFB_Packing_Model->TotalCounter($CurrentDate, $CurrentDate);
  
  $data['Stationwise'] = $this->LFB_Packing_Model->Stationwise($CurrentDate, $CurrentDate);
// print_r($data['Stationwise']);
// die;
  $this->load->view("LFB_Packing/LFB_Packing", $data);
 }
  public function Efficiency($SectionID)
  {
    // echo "I am herer";
    // die;
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Day . '/' . $Month . '/' . $Year;

    // $data['Data'] = $this->LFB_Packing_Model->TotalCounter($CurrentDate, $CurrentDate);
    // $total = 0;
    // foreach ($data['Data'] as $count) {

    //   $total = $total + $count['PassQty'];
    // }
    // $data['total'] = $total;
    $data['Stationwise'] = $this->LFB_Packing_Model->StationwiseData($CurrentDate, $CurrentDate);
   // print_r($data['Stationwise']);
    foreach ($data['Stationwise'] as $Keys){
      $StationName = $Keys['StationName'];
      $SAMPacking = $Keys['SAMPacking'];
      $SAM=0;
      $total = 0;
      if($SectionID==1){

      
      if($StationName== 'NO 1'){
        $data['StationName'] = $StationName;
        $SAM = $SAM + $SAMPacking;
        $data['SAM'] = $SAM;
          $total = $Keys['PassQty'];
        $data['realtime'] = $this->LFB_Packing_Model->realTimeAtten(24, 1221);
         $data['total'] = $total;
          //print_r($data['total']);
      }
    } elseif ($SectionID == 2) {


        if ($StationName == 'NO 2') {
          $data['StationName'] = $StationName;
          $SAM = $SAM + $SAMPacking;
          $data['SAM'] = $SAM;
          $total = $Keys['PassQty'];
          $data['realtime'] = $this->LFB_Packing_Model->realTimeAtten(24, 1222);
          $data['total'] = $total;
          //print_r($data['total']);
        }
      } elseif ($SectionID == 3) {


        if ($StationName == 'NO 3') {
          $data['StationName'] = $StationName;
          $SAM = $SAM + $SAMPacking;
          $data['SAM'] = $SAM;
          $total = $Keys['PassQty'];
          $data['realtime'] = $this->LFB_Packing_Model->realTimeAtten(24, 1223);
          $data['total'] = $total;
          //print_r($data['total']);
        }
      } elseif ($SectionID == 4) {


        if ($StationName == 'NO 4') {
          $data['StationName'] = $StationName;
          $SAM = $SAM + $SAMPacking;
          $data['SAM'] = $SAM;
          $total = $Keys['PassQty'];
          $data['realtime'] = $this->LFB_Packing_Model->realTimeAtten(24, 1224);
          $data['total'] = $total;
          //print_r($data['total']);
        }
      }
    }
    $this->load->view("LFB_Packing/Efficiency", $data);
   
   
    // print_r($data['Stationwise']);
    // die;
    
  }
 public function searchData()
 {
  $Date1=$_POST['Sdate'];
  $Date2=$_POST['Edate'];
  $SYear = substr($Date1, 0, 4);
  $SMonth = substr($Date1, 5, 2);
  $SDay = substr($Date1, -2, 2);
  $EYear = substr($Date2, 0, 4);
  //echo "<br>";
  $EMonth = substr($Date2, 5, 2);
  //echo "<br>";
  $EDay = substr($Date2, -2, 2);
  $StartDateeee = $SDay . '/' . $SMonth . '/' . $SYear;
  $EndDateeee = $EDay . '/' . $EMonth . '/' . $EYear;
    $data['Data'] = $this->LFB_Packing_Model->TotalCounter($StartDateeee, $EndDateeee);

    $data['Stationwise'] = $this->LFB_Packing_Model->Stationwise($StartDateeee, $EndDateeee);
  // print_r($data['Counter']);
  // die;
  $data['SDate'] =$_POST['Sdate'];
  $data['EDate'] =$_POST['Edate'];
  $this->load->view("LFB_Packing/LFB_PackingDateWise", $data);
  // $this->load->view("UFB_Packing/UFB_PackingDateWise", $data);
 }
}

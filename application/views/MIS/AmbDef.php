<!doctype html>
<?php
if ($this->session->userdata('userStus')==1) {
?>
<html class="no-js" lang="en">
<!--<![endif]-->

<?php
$this->load->View('Adminheader');
?>

<body>
<?php
$this->load->View('menu');
?>
<div id="right-panel" class="right-panel">
<?php
$this->load->View('Setting');


?>  <?php
$this->load->View('DefSubmenu');
  ?>
        <?php
if($record) {

$Date1;
$Date2;
 $LineNo;

if ($LineNo==1) {

               $LineName="All";
            }elseif($LineNo==3){
                $LineName="Line# 1";
            }elseif($LineNo==4){
                $LineName="Line# 2";
            }elseif($LineNo==5){
                $LineName="Line# 3";
            }elseif($LineNo==6){
                $LineName="Line# 4";
            }elseif($LineNo==7){
                $LineName="Line# 5";
            }elseif($LineNo==8){
                $LineName="Line# 6";
            }elseif($LineNo==9){
                $LineName="Line# 7";
            }elseif($LineNo==10){
                $LineName="Line# 8";
            }elseif($LineNo==11){
                $LineName="Line# 9";
            }elseif($LineNo==16){
                $LineName="Line# 10";
            }elseif($LineNo==17){
                $LineName="Line# 11";
            }elseif($LineNo==18){
                $LineName="Line# 12";
            }

$SYear=substr($Date1,0,4);

     $SMonth=substr($Date1,5,2);

     $SDay=substr($Date1,-2,2);

 $EYear=substr($Date2,0,4);
    //echo "<br>";
     $EMonth=substr($Date2,5,2);
    //echo "<br>";
     $EDay=substr($Date2,-2,2);


$StartDateeee=$SYear.'-'.$SMonth.'-'.$SDay;

 $EndDateeee=$EYear.'-'.$EMonth.'-'.$EDay;

  ?>
  <form style="display:flex" action="<?php echo base_url('MIS/AMB/getAllData'); ?>" method="POST">
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
<input class="form-control" type="Date" name="Date1" value="<?php echo $StartDateeee;?>" >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
<input class="form-control" type="Date" name="Date2" value="<?php echo $EndDateeee;?>" >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class=" form-control-label">Line Name:</label>
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-list"></i></div>
<select  class="standardSelect" name="LineNo" style="width: 80%;border-radius: 5px;" >
  <option value="<?php Echo $LineNo;?>"><?php Echo $LineName;?></option>
  <option value="1">All</option>
<?php
foreach($line_data As $Key){
?>
<option value="<?php Echo $Key['LineID'];?>"><?php Echo $Key['LineName'];?></option>
<?php
}
?>
</select>
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class=" form-control-label"></label>
<div class="input-group">
<br>
<br>

  <button type="submit" id="submit" name="submit" class="btn btn-primary " ><i class=" fa fa-search"></i> Search</button>
</div>                    
</div>
</div>
</form>
  <?php

}else{
  $Month=date('m');
$Year=date('Y');
$Day=date('d');
$CurrentDate=$Year.'-'.$Month.'-'.$Day;
  ?>
  <form style="display:flex" action="<?php echo base_url('MIS/AMB/getAllData'); ?>" method="POST">
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
<input class="form-control" type="Date" name="Date1" value="<?php echo $CurrentDate;?>" >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
<input class="form-control" type="Date" name="Date2" value="<?php echo $CurrentDate;?>" >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class=" form-control-label">Line Name:</label>
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-list"></i></div>
<select  class="standardSelect" name="LineNo" style="width: 80%;border-radius: 5px;" ><option value="1">All</option>
<?php
foreach($line_data As $Key){
?>
<option value="<?php Echo $Key['LineID'];?>"><?php Echo $Key['LineName'];?></option>
<?php
}
?>
</select>
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class=" form-control-label"></label>
<div class="input-group">
<br>
<br>

  <button type="submit" id="submit" name="submit" class="btn btn-primary " ><i class=" fa fa-search"></i> Search</button>
</div>                    
</div>
</div>
</form>
  <?php
}
        ?>

<style type="text/css">
  .precentage{
    color: red;
  }
  td{
    border:1px #a6a6a6 solid;
  }
</style>
     

<div class="col-lg-10"   >
                        <div class="card">
                            <div class="card-header">
<strong class="card-title">Airless Mini Ball Froming  Defects Detail </strong>
                            </div>
                           
                            <div class="card-body" > 
                          <table  id="table" class=" table responsive" >


                                
                                       
<tr style="background-color: #33cccc; color: #fff;">
   <td style=" text-align: left;">Lines</td>
       <td style="text-align: center; ">Checked</td>
     
       <td style="text-align: center; width: 5%;" colspan="2">Panel DMG</td>
        <td style=" text-align: center; width: 5%;" colspan="2">Over Lap</td>
     <td style=" text-align: center; width: 5%;"  colspan="2">Zig Zag Seam</td>
   
      <td style="text-align: center; width: 5%;" colspan="2">Wrinkle</td>
   <td style=" text-align: center; width: 5%;" colspan="2">Art Work</td>
      <td style="text-align: center;" colspan="2">Straight Cut:</td>
            <td style="text-align: center;"  colspan="2">Burning  </td>
     <td style=" text-align: center;" colspan="2">Un bonded Panels</td>
       <td style=" text-align: center;" colspan="2">Single Open Strip</td>
        <td style=" text-align: center;" colspan="2">Open Seam</td>
         <td style=" text-align: center;" colspan="2">Panel Cavity</td>
          <td style="text-align: center;" colspan="2">Touching</td>
           <td style=" text-align: center;" colspan="2">Otder Printing Issue</td>
            <td style=" text-align: center;" colspan="2">Core Cavity</td>
            <td style="text-align: center;" colspan="2">PUC</td>
        
            <td style=" text-align: center;" colspan="2">B Grade</td>
             <td style=" text-align: center;" colspan="2">Fail Qty</td>
</tr>

<tbody style="border:1px #202020 solid; ">

<?php 
if($Forming) {
 foreach($Forming as $PTL9) {
 $LineName=$PTL9['LineName'];
         $TotalChecked9=$PTL9['TotalChecked'];
   

$PanelDMGL9=$PTL9['PanelDMG'];
 $OverLapL9=$PTL9['OverLap'];
$ZigZagSeamL9=$PTL9['ZigZagSeam'];
$WrinkleL9=$PTL9['Wrinkle'];
$ArtWorkL9=$PTL9['ArtWork'];
$StraightCut=$PTL9['StraightCut'];
$Burning=$PTL9['ConnectionBreak'];
$UnbondedPanelsL9=$PTL9['UnbondedPanels'];
$SingleOpenStripL9=$PTL9['SingleOpenStrip'];
$OpenSeamL9=$PTL9['OpenSeam'];
 
$PanelCavityL9=$PTL9['PanelCavity'];
$TouchingL9=$PTL9['Touching'];
$OtherPrintingIssueL9=$PTL9['OtherPrintingIssue'];
$CoreCavityL9=$PTL9['CoreCavity'];
$PUCL9=$PTL9['PUC'];

//$SeamClosingGlueL9=$PTL9['SeamClosingGlue'];

 $BGradeL9=$PTL9['BGrade'];
$RejectionL9=$BGradeL9+$PanelDMGL9+$OverLapL9+$ZigZagSeamL9+$WrinkleL9+$ArtWorkL9+$UnbondedPanelsL9+$SingleOpenStripL9+$OpenSeamL9+$PanelCavityL9+$TouchingL9+$OtherPrintingIssueL9+$CoreCavityL9+$PUCL9+$Burning+$StraightCut;
?> 
<tr style="overflow-x: scroll;" >
<td style="text-align: left; "><?php Echo $LineName;?></td>
    <td style="text-align: center; "><?php Echo Round($TotalChecked9);?></td>

    <td style="text-align: center; "><?php Echo Round($PanelDMGL9);?></td>
    <?php
if ($TotalChecked9==0 or $PanelDMGL9== 0) {
   $PanelDMGL9=0;
}else{
 
  $PanelDMGL9=$PanelDMGL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($PanelDMGL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($OverLapL9);?></td>
    <?php
if ($TotalChecked9==0 or $OverLapL9== 0) {
   $OverLapL9=0;
}else{
 
  $OverLapL9=$OverLapL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($OverLapL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($ZigZagSeamL9);?></td>
    <?php
if ($TotalChecked9==0 or $ZigZagSeamL9== 0) {
   $ZigZagSeamL9=0;
}else{
 
  $ZigZagSeamL9=$ZigZagSeamL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($ZigZagSeamL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($WrinkleL9);?></td>
    <?php
if ($TotalChecked9==0 or $WrinkleL9== 0) {
   $WrinkleL9=0;
}else{
 
  $WrinkleL9=$WrinkleL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($WrinkleL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($ArtWorkL9);?></td>
    <?php
if ($TotalChecked9==0 or $ArtWorkL9== 0) {
   $ArtWorkL9=0;
}else{
 
  $ArtWorkL9=$ArtWorkL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($ArtWorkL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($StraightCut);?></td>
    <?php
if ($TotalChecked9==0 or $StraightCut== 0) {
   $StraightCutL9=0;
}else{
 
  $StraightCutL9=$StraightCut/$TotalChecked9*100;
}


?>
   
   <td style="text-align: center;" class="precentage"><?php Echo round($StraightCutL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($Burning);?></td>
    <?php
if ($TotalChecked9==0 or $Burning== 0) {
   $BurningL9=0;
}else{
 
  $BurningL9=$Burning/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($BurningL9,2);?>%</td>
  <td style="text-align: center;" class="precentage"><?php Echo round($UnbondedPanelsL9,2);?></td>
   <?php
if ($TotalChecked9==0 or $UnbondedPanelsL9== 0) {
   $UnbondedPanelsL9=0;
}else{
 
  $UnbondedPanelsL9=$UnbondedPanelsL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($UnbondedPanelsL9,2);?>%</td>
    
  
    <td style="text-align: center; "><?php Echo Round($SingleOpenStripL9);?></td>
    <?php
if ($TotalChecked9==0 or $SingleOpenStripL9== 0) {
   $SingleOpenStripL9=0;
}else{
 
  $SingleOpenStripL9=$SingleOpenStripL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($SingleOpenStripL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($OpenSeamL9);?></td>
    <?php
if ($TotalChecked9==0 or $OpenSeamL9== 0) {
   $OpenSeamL9=0;
}else{
 
  $OpenSeamL9=$OpenSeamL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($OpenSeamL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($PanelCavityL9);?></td>
    <?php
if ($TotalChecked9==0 or $PanelCavityL9== 0) {
   $PanelCavityL9=0;
}else{
 
  $PanelCavityL9=$PanelCavityL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($PanelCavityL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($TouchingL9);?></td>
    <?php
if ($TotalChecked9==0 or $TouchingL9== 0) {
   $TouchingL9=0;
}else{
 
  $TouchingL9=$TouchingL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($TouchingL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($OtherPrintingIssueL9);?></td>
    <?php
if ($TotalChecked9==0 or $OtherPrintingIssueL9== 0) {
   $OtherPrintingIssueL9=0;
}else{
 
  $OtherPrintingIssueL9=$OtherPrintingIssueL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($OtherPrintingIssueL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($CoreCavityL9);?></td>
    <?php
if ($TotalChecked9==0 or $CoreCavityL9== 0) {
   $CoreCavityL9=0;
}else{
 
  $CoreCavityL9=$CoreCavityL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($CoreCavityL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($PUCL9);?></td>
    <?php
if ($TotalChecked9==0 or $PUCL9== 0) {
   $PUCL9=0;
}else{
 
  $PUCL9=$PUCL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($PUCL9,2);?>%</td>
    


     <td style="text-align: center; "><?php Echo Round($BGradeL9);?></td>
   <?php
if ($TotalChecked9==0 or $BGradeL9== 0) {
   $BGradeL9=0;
}else{
 
  $BGradeL9=$BGradeL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($BGradeL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($RejectionL9);?></td>
    <?php
if ($TotalChecked9==0 or $RejectionL9== 0) {
   $RejectionL9=0;
}else{
 
  $RejectionL9=$RejectionL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($RejectionL9,2);?>%</td>

   </tr>
</tr>
<?php }

?>

<?php 
if($FormingSum) {
 foreach($FormingSum as $PTL9) {
 //$LineName=$PTL9['LineName'];
         $TotalChecked9=$PTL9['TotalChecked'];
   

$PanelDMGL9=$PTL9['PanelDMG'];
 $OverLapL9=$PTL9['OverLap'];
$ZigZagSeamL9=$PTL9['ZigZagSeam'];
$WrinkleL9=$PTL9['Wrinkle'];
$ArtWorkL9=$PTL9['ArtWork'];
$StraightCut=$PTL9['StraightCut'];
$Burning=$PTL9['ConnectionBreak'];
$UnbondedPanelsL9=$PTL9['UnbondedPanels'];
$SingleOpenStripL9=$PTL9['SingleOpenStrip'];
$OpenSeamL9=$PTL9['OpenSeam'];
 
$PanelCavityL9=$PTL9['PanelCavity'];
$TouchingL9=$PTL9['Touching'];
$OtherPrintingIssueL9=$PTL9['OtherPrintingIssue'];
$CoreCavityL9=$PTL9['CoreCavity'];
$PUCL9=$PTL9['PUC'];

//$SeamClosingGlueL9=$PTL9['SeamClosingGlue'];

 $BGradeL9=$PTL9['BGrade'];
$RejectionL9=$BGradeL9+$PanelDMGL9+$OverLapL9+$ZigZagSeamL9+$WrinkleL9+$ArtWorkL9+$UnbondedPanelsL9+$SingleOpenStripL9+$OpenSeamL9+$PanelCavityL9+$TouchingL9+$OtherPrintingIssueL9+$CoreCavityL9+$PUCL9+$Burning+$StraightCut;
?> 
<tr style="background-color: #202020; color: #fff;">
<td style="text-align: left; ">Total</td>
    <td style="text-align: center; "><?php Echo Round($TotalChecked9);?></td>

    <td style="text-align: center; "><?php Echo Round($PanelDMGL9);?></td>
    <?php
if ($TotalChecked9==0 or $PanelDMGL9== 0) {
   $PanelDMGL9=0;
}else{
 
  $PanelDMGL9=$PanelDMGL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;"><?php Echo round($PanelDMGL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($OverLapL9);?></td>
    <?php
if ($TotalChecked9==0 or $OverLapL9== 0) {
   $OverLapL9=0;
}else{
 
  $OverLapL9=$OverLapL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($OverLapL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($ZigZagSeamL9);?></td>
    <?php
if ($TotalChecked9==0 or $ZigZagSeamL9== 0) {
   $ZigZagSeamL9=0;
}else{
 
  $ZigZagSeamL9=$ZigZagSeamL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($ZigZagSeamL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($WrinkleL9);?></td>
    <?php
if ($TotalChecked9==0 or $WrinkleL9== 0) {
   $WrinkleL9=0;
}else{
 
  $WrinkleL9=$WrinkleL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($WrinkleL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($ArtWorkL9);?></td>
    <?php
if ($TotalChecked9==0 or $ArtWorkL9== 0) {
   $ArtWorkL9=0;
}else{
 
  $ArtWorkL9=$ArtWorkL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($ArtWorkL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($StraightCut);?></td>
    <?php
if ($TotalChecked9==0 or $StraightCut== 0) {
   $StraightCutL9=0;
}else{
 
  $StraightCutL9=$StraightCut/$TotalChecked9*100;
}


?>
   
   <td style="text-align: center;"><?php Echo round($StraightCutL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($Burning);?></td>
    <?php
if ($TotalChecked9==0 or $Burning== 0) {
   $BurningL9=0;
}else{
 
  $BurningL9=$Burning/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($BurningL9,2);?>%</td>
  <td style="text-align: center;" ><?php Echo round($UnbondedPanelsL9,2);?></td>
   <?php
if ($TotalChecked9==0 or $UnbondedPanelsL9== 0) {
   $UnbondedPanelsL9=0;
}else{
 
  $UnbondedPanelsL9=$UnbondedPanelsL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($UnbondedPanelsL9,2);?>%</td>
    
  
    <td style="text-align: center; "><?php Echo Round($SingleOpenStripL9);?></td>
    <?php
if ($TotalChecked9==0 or $SingleOpenStripL9== 0) {
   $SingleOpenStripL9=0;
}else{
 
  $SingleOpenStripL9=$SingleOpenStripL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($SingleOpenStripL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($OpenSeamL9);?></td>
    <?php
if ($TotalChecked9==0 or $OpenSeamL9== 0) {
   $OpenSeamL9=0;
}else{
 
  $OpenSeamL9=$OpenSeamL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;"><?php Echo round($OpenSeamL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($PanelCavityL9);?></td>
    <?php
if ($TotalChecked9==0 or $PanelCavityL9== 0) {
   $PanelCavityL9=0;
}else{
 
  $PanelCavityL9=$PanelCavityL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($PanelCavityL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($TouchingL9);?></td>
    <?php
if ($TotalChecked9==0 or $TouchingL9== 0) {
   $TouchingL9=0;
}else{
 
  $TouchingL9=$TouchingL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($TouchingL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($OtherPrintingIssueL9);?></td>
    <?php
if ($TotalChecked9==0 or $OtherPrintingIssueL9== 0) {
   $OtherPrintingIssueL9=0;
}else{
 
  $OtherPrintingIssueL9=$OtherPrintingIssueL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($OtherPrintingIssueL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($CoreCavityL9);?></td>
    <?php
if ($TotalChecked9==0 or $CoreCavityL9== 0) {
   $CoreCavityL9=0;
}else{
 
  $CoreCavityL9=$CoreCavityL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($CoreCavityL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($PUCL9);?></td>
    <?php
if ($TotalChecked9==0 or $PUCL9== 0) {
   $PUCL9=0;
}else{
 
  $PUCL9=$PUCL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($PUCL9,2);?>%</td>
    


     <td style="text-align: center; "><?php Echo Round($BGradeL9);?></td>
   <?php
if ($TotalChecked9==0 or $BGradeL9== 0) {
   $BGradeL9=0;
}else{
 
  $BGradeL9=$BGradeL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($BGradeL9,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($RejectionL9);?></td>
    <?php
if ($TotalChecked9==0 or $RejectionL9== 0) {
   $RejectionL9=0;
}else{
 
  $RejectionL9=$RejectionL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($RejectionL9,2);?>%</td>

   </tr>
</tr>
<?php } 
 }
 } else{ ?>
<tr>
<td colspan="5"> <center>No Record Available Yet!</center> </td>
</tr>
<?php }?>


</tbody>
</table> 
</div>

</div>


</div>


<div class="col-lg-10"   >
                        <div class="card">
                            <div class="card-header">
<strong class="card-title">Airless Mini Ball Packing  Defects Detail </strong>
                            </div>
                           
                              <div class="card-body" > 
                          <table  id="table1" class=" table responsive" >


                                
                                       
<tr style="background-color: #1a8cff; color: #fff;">
   <Td style="border:1px black solid; text-align: left; width : 10%;">Lines</Td>
       <Td style="border:1px black solid; text-align: center; ">Checked</Td>
     <Td style="border:1px black solid; text-align: center;" colspan="2">Touching</Td>
       <Td style="border:1px black solid; text-align: center;" colspan="2">Other Printing Issue</Td>
        <Td style="border:1px black solid; text-align: center;" colspan="2">Straight Cut</Td>
     <Td style="border:1px black solid; text-align: center;"  colspan="2">Cutting Residual</Td>
   
    <Td style="border:1px black solid; text-align: center;" colspan="2">Panel DMG</Td>
   <Td style="border:1px black solid; text-align: center;" colspan="2">Zig Zag Seam</Td>
  <Td style="border:1px black solid; text-align: center;" colspan="2">Wrinkle</Td>
  <Td style="border:1px black solid; text-align: center;" colspan="2">Art Work</Td>
    <Td style="border:1px black solid; text-align: center;" colspan="2">Over Lap</Td>
    <Td style="border:1px black solid; text-align: center;" colspan="2">Panel Cavity</Td>

  <Td style="border:1px black solid; text-align: center;" colspan="2">Connection Break</Td>
   
      <Td style="border:1px black solid; text-align: center;" colspan="2">Seam Missing</Td>

        <Td style="border:1px black solid; text-align: center;" colspan="2">Uncure Glue</Td>
  
    <Td style="border:1px black solid; text-align: center;" colspan="2">Core Cavity</Td>
    <Td style="border:1px black solid; text-align: center;" colspan="2">PUC</Td>
    <Td style="border:1px black solid; text-align: center;" colspan="2">Dirty</Td>
        <Td style="border:1px black solid; text-align: center;" colspan="2">B Grade</Td>
        <Td style="border:1px black solid; text-align: center;" colspan="2">Rejection</Td>
</tr>

<tbody style="border:1px #fff solid; ">

<?php 
if($Packing) {
 foreach($Packing as $PTL9) {
 $LineName=$PTL9['LineName'];
         $TotalChecked9=$PTL9['TotalChecked'];
         $TouchingL9=$PTL9['Touching'];
         $OtherPrintingIssueL9=$PTL9['OtherPrintingIssue'];
         $StraightCutL9=$PTL9['StraightCut'];
           $CuttingResidualL9=$PTL9['CuttingResidual'];
      $PanelDMGL9=$PTL9['PanelDMG'];
       $ZigZagSeamL9=$PTL9['ZigZagSeam'];
       $WrinkleL9=$PTL9['Wrinkle'];
$ArtWorkL9=$PTL9['ArtWork'];
      $OverLapL9=$PTL9['OverLap'];
      $PanelCavityL9=$PTL9['PanelCavity'];
      $ConnectionBreakL9=$PTL9['ConnectionBreak'];  
 $SeamClosingGlueL9=$PTL9['SeamClosingGlue'];
$DirtyL9=$PTL9['Dirty'];
$UncureGlueL9=$PTL9['UncureGlue'];
$ExcessiveGlueL9=$PTL9['ExcessiveGlue'];
$CoreCavityL9=$PTL9['CoreCavity'];
$PUCL9=$PTL9['PUC'];
 $BGradeL9=$PTL9['BGrade'];

$RejectionL9=$TouchingL9+$OtherPrintingIssueL9+$StraightCutL9+$CuttingResidualL9+$PanelDMGL9+$ZigZagSeamL9+$WrinkleL9+$ArtWorkL9+$OverLapL9+$PanelCavityL9+$ConnectionBreakL9+$SeamClosingGlueL9+$DirtyL9+$UncureGlueL9+$ExcessiveGlueL9+$CoreCavityL9+$PUCL9+$BGradeL9;

    ?>
    <td style="text-align: left; "><?php Echo $LineName;?></td>
    <td style="text-align: center; "><?php Echo Round($TotalChecked9);?></td>
   <td style="text-align: center; "><?php Echo Round($TouchingL9);?></td>
   <?php
if ($TotalChecked9==0 or $TouchingL9== 0) {
   $TouchingL9=0;
}else{
 
  $TouchingL9=$TouchingL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($TouchingL9,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($OtherPrintingIssueL9);?></td>
   <?php
if ($TotalChecked9==0 or $OtherPrintingIssueL9== 0) {
   $OtherPrintingIssueL9=0;
}else{
 
  $OtherPrintingIssueL9=$OtherPrintingIssueL9/$TotalChecked9*100;
}



?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($OtherPrintingIssueL9,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($StraightCutL9);?></td>
   <?php
if ($TotalChecked9==0 or $StraightCutL9== 0) {
   $StraightCutL9=0;
}else{
 
  $StraightCutL9=$StraightCutL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($StraightCutL9,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($CuttingResidualL9);?></td>
   <?php
if ($TotalChecked9==0 or $CuttingResidualL9== 0) {
   $CuttingResidualL9=0;
}else{
 
  $CuttingResidualL9=$CuttingResidualL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($CuttingResidualL9,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($PanelDMGL9);?></td>
   <?php
if ($TotalChecked9==0 or $PanelDMGL9== 0) {
   $PanelDMGL9=0;
}else{
 
  $PanelDMGL9=$PanelDMGL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($PanelDMGL9,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($ZigZagSeamL9);?></td>
   <?php
if ($TotalChecked9==0 or $ZigZagSeamL9== 0) {
   $ZigZagSeamL9=0;
}else{
 
  $ZigZagSeamL9=$ZigZagSeamL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($ZigZagSeamL9,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($WrinkleL9);?></td>
   <?php
if ($TotalChecked9==0 or $WrinkleL9== 0) {
   $WrinkleL9=0;
}else{
 
  $WrinkleL9=$WrinkleL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($WrinkleL9,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($ArtWorkL9);?></td>
   <?php
if ($TotalChecked9==0 or $ArtWorkL9== 0) {
   $ArtWorkL9=0;
}else{
 
  $ArtWorkL9=$ArtWorkL9/$TotalChecked9*100;
}
     

   



?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($ArtWorkL9,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($OverLapL9);?></td>
   <?php
if ($TotalChecked9==0 or $OverLapL9== 0) {
   $OverLapL9=0;
}else{
 
  $OverLapL9=$OverLapL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($OverLapL9,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($PanelCavityL9);?></td>
   <?php
if ($TotalChecked9==0 or $PanelCavityL9== 0) {
   $PanelCavityL9=0;
}else{
 
  $PanelCavityL9=$PanelCavityL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($PanelCavityL9,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($ConnectionBreakL9);?></td>
   <?php
if ($TotalChecked9==0 or $ConnectionBreakL9== 0) {
   $ConnectionBreakL9=0;
}else{
 
  $ConnectionBreakL9=$ConnectionBreakL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($ConnectionBreakL9,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($SeamClosingGlueL9);?></td>
   <?php
if ($TotalChecked9==0 or $SeamClosingGlueL9== 0) {
   $SeamClosingGlueL9=0;
}else{
 
  $SeamClosingGlueL9=$SeamClosingGlueL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($SeamClosingGlueL9,2);?>%</td>
  
  <td style="text-align: center; "><?php Echo Round($UncureGlueL9);?></td>
   <?php
if ($TotalChecked9==0 or $UncureGlueL9== 0) {
   $UncureGlueL9=0;
}else{
 
  $UncureGlueL9=$UncureGlueL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($UncureGlueL9,2);?>%</td>

  <td style="text-align: center; "><?php Echo Round($CoreCavityL9);?></td>
   <?php
if ($TotalChecked9==0 or $CoreCavityL9== 0) {
   $CoreCavityL9=0;
}else{
 
  $CoreCavityL9=$CoreCavityL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($CoreCavityL9,2);?>%</td>
   <td style="text-align: center; "><?php Echo Round($PUCL9);?></td>
   <?php
if ($TotalChecked9==0 or $PUCL9== 0) {
   $PUCL9=0;
}else{
 
  $PUCL9=$PUCL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($PUCL9,2);?>%</td>

   <td style="text-align: center; "><?php Echo Round($DirtyL9);?></td>
   <?php
if ($TotalChecked9==0 or $DirtyL9== 0) {
   $DirtyL9=0;
}else{
 
  $DirtyL9=$DirtyL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($DirtyL9,2);?>%</td>
  
    <td style="text-align: center; "><?php Echo Round($BGradeL9);?></td>
    <?php
if ($TotalChecked9==0 or $BGradeL9== 0) {
   $BGradeL9=0;
}else{
 
  $BGradeL9=$BGradeL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($BGradeL9,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($RejectionL9);?></td>
    <?php
if ($TotalChecked9==0 or $RejectionL9== 0) {
   $RejectionL9=0;
}else{
 
  $RejectionL9=$RejectionL9/$TotalChecked9*100;
}


?>
      
  <td style="text-align: center;" class="precentage"><?php Echo round($RejectionL9,2);?>%</td>
   </tr>
<?php }
?>
<?php 
if($PackingSum) {
 foreach($PackingSum as $PT) {
 //$LineName=$PTL9['LineName'];
         $TotalChecked=$PT['TotalChecked'];
         $Touching=$PT['Touching'];
         $OtherPrintingIssue=$PT['OtherPrintingIssue'];
         $StraightCut=$PT['StraightCut'];
           $CuttingResidual=$PT['CuttingResidual'];
      $PanelDMG=$PT['PanelDMG'];
       $ZigZagSeam=$PT['ZigZagSeam'];
       $Wrinkle=$PT['Wrinkle'];
$ArtWork=$PT['ArtWork'];
      $OverLap=$PT['OverLap'];
      $PanelCavity=$PT['PanelCavity'];
      $ConnectionBreak=$PT['ConnectionBreak'];  
 $SeamClosingGlue=$PT['SeamClosingGlue'];
$Dirty=$PT['Dirty'];
$UncureGlue=$PT['UncureGlue'];
$ExcessiveGlue=$PT['ExcessiveGlue'];
$CoreCavity=$PT['CoreCavity'];
$PUC=$PT['PUC'];
 $BGrade=$PT['BGrade'];
$Rejection=$Touching+$OtherPrintingIssue+$StraightCut+$CuttingResidual+$PanelDMG+$ZigZagSeam+$Wrinkle+$ArtWork+$OverLap+$PanelCavity+$ConnectionBreak+$SeamClosingGlue+$Dirty+$UncureGlue+$ExcessiveGlue+$CoreCavity+$PUC+$BGrade;

  ?>
<tr style="background-color: #202020; color: #fff;">
  <td style="text-align: right; "> Total</td> 
  <td style="text-align: center; "><?php Echo Round($TotalChecked);?></td>
   <td style="text-align: center; "><?php Echo Round($Touching);?></td>
   <?php
if ($TotalChecked==0 or $Touching== 0) {
   $Touching=0;
}else{
 
  $Touching=$Touching/$TotalChecked*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($Touching,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($OtherPrintingIssue);?></td>
   <?php
if ($TotalChecked==0 or $OtherPrintingIssue== 0) {
   $OtherPrintingIssue=0;
}else{
 
  $OtherPrintingIssue=$OtherPrintingIssue/$TotalChecked*100;
}



?>
      
  <td style="text-align: center;" ><?php Echo round($OtherPrintingIssue,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($StraightCut);?></td>
   <?php
if ($TotalChecked==0 or $StraightCut== 0) {
   $StraightCut=0;
}else{
 
  $StraightCut=$StraightCut/$TotalChecked*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($StraightCut,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($CuttingResidual);?></td>
   <?php
if ($TotalChecked==0 or $CuttingResidual== 0) {
   $CuttingResidual=0;
}else{
 
  $CuttingResidual=$CuttingResidual/$TotalChecked*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($CuttingResidual,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($PanelDMG);?></td>
   <?php
if ($TotalChecked==0 or $PanelDMG== 0) {
   $PanelDMG=0;
}else{
 
  $PanelDMG=$PanelDMG/$TotalChecked*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($PanelDMG,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($ZigZagSeam);?></td>
   <?php
if ($TotalChecked==0 or $ZigZagSeam== 0) {
   $ZigZagSeam=0;
}else{
 
  $ZigZagSeam=$ZigZagSeam/$TotalChecked*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($ZigZagSeam,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($Wrinkle);?></td>
   <?php
if ($TotalChecked==0 or $Wrinkle== 0) {
   $Wrinkle=0;
}else{
 
  $Wrinkle=$Wrinkle/$TotalChecked*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($Wrinkle,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($ArtWork);?></td>
   <?php
if ($TotalChecked==0 or $ArtWork== 0) {
   $ArtWork=0;
}else{
 
  $ArtWork=$ArtWork/$TotalChecked*100;
}
     

   



?>
      
  <td style="text-align: center;" ><?php Echo round($ArtWork,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($OverLap);?></td>
   <?php
if ($TotalChecked==0 or $OverLap== 0) {
   $OverLap=0;
}else{
 
  $OverLap=$OverLap/$TotalChecked*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($OverLap,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($PanelCavity);?></td>
   <?php
if ($TotalChecked==0 or $PanelCavity== 0) {
   $PanelCavity=0;
}else{
 
  $PanelCavity=$PanelCavity/$TotalChecked*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($PanelCavity,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($ConnectionBreak);?></td>
   <?php
if ($TotalChecked==0 or $ConnectionBreak== 0) {
   $ConnectionBreak=0;
}else{
 
  $ConnectionBreak=$ConnectionBreak/$TotalChecked*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($ConnectionBreak,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($SeamClosingGlue);?></td>
   <?php
if ($TotalChecked==0 or $SeamClosingGlue== 0) {
   $SeamClosingGlue=0;
}else{
 
  $SeamClosingGlue=$SeamClosingGlue/$TotalChecked*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($SeamClosingGlue,2);?>%</td>
  
  <td style="text-align: center; "><?php Echo Round($UncureGlue);?></td>
   <?php
if ($TotalChecked==0 or $UncureGlue== 0) {
   $UncureGlue=0;
}else{
 
  $UncureGlue=$UncureGlue/$TotalChecked*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($UncureGlue,2);?>%</td>
  
  <td style="text-align: center; "><?php Echo Round($CoreCavity);?></td>
   <?php
if ($TotalChecked==0 or $CoreCavity== 0) {
   $CoreCavity=0;
}else{
 
  $CoreCavity=$CoreCavity/$TotalChecked*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($CoreCavity,2);?>%</td>
   
  <td style="text-align: center; "><?php Echo Round($PUC);?></td>
   <?php
if ($TotalChecked==0 or $PUC== 0) {
   $PUC=0;
}else{
 
  $PUC=$PUC/$TotalChecked*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($PUC,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($Dirty);?></td>
   <?php
if ($TotalChecked==0 or $Dirty== 0) {
   $Dirty=0;
}else{
 
  $Dirty=$Dirty/$TotalChecked*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($Dirty,2);?>%</td>
    <td style="text-align: center; "><?php Echo Round($BGrade);?></td>
    <?php
if ($TotalChecked==0 or $BGrade== 0) {
   $BGrade=0;
}else{
 
  $BGrade=$BGrade/$TotalChecked*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($BGrade,2);?>%</td>
  <td style="text-align: center; "><?php Echo Round($Rejection);?></td>
    <?php
if ($TotalChecked==0 or $Rejection== 0) {
   $Rejection=0;
}else{
 
  $Rejection=$Rejection/$TotalChecked*100;
}


?>
      
  <td style="text-align: center;" ><?php Echo round($Rejection,2);?>%</td>
   </tr>
<?php } 
 }
 } else{ ?>
<tr>
<td colspan="5"> <center>No Record Available Yet!</center> </td>
</tr>
<?php }?>


</tbody>
</table> 
</div>

</div>


</div>

</body>
<?php
$this->load->View('AdminFooter');
?>
 

<script>
  $(document).ready( function () {
    $('#table').DataTable(
    { 
       dom: 'Bfrtip',
        buttons: [
            'copy',
            {
                extend: 'excel',
                messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
            },
            {
                extend: 'pdf',
                messageBottom: null
            },
            {
                extend: 'print',
                messageTop: function () {
                    printCounter++;
 
                    if ( printCounter === 1 ) {
                        return 'This is the first time you have printed this document.';
                    }
                    else {
                        return 'You have printed this document '+printCounter+' times';
                    }
                },
                messageBottom: null
            }
        ],
      "ordering":true,
      "pageLength":10,
      "searching":true,
      "LengthChange":true,
      "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},
    
    }


      );



     $('#table1').DataTable(
    { 
       dom: 'Bfrtip',
        buttons: [
            'copy',
            {
                extend: 'excel',
                messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
            },
            {
                extend: 'pdf',
                messageBottom: null
            },
            {
                extend: 'print',
                messageTop: function () {
                    printCounter++;
 
                    if ( printCounter === 1 ) {
                        return 'This is the first time you have printed this document.';
                    }
                    else {
                        return 'You have printed this document '+printCounter+' times';
                    }
                },
                messageBottom: null
            }
        ],
      "ordering":true,
      "pageLength":10,
      "searching":true,
      "LengthChange":true,
      "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},
    
    }


      );
} );
</script>
<?php
}else{
    redirect('Welcome/index');
}
?>

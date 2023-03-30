
<Style>
    .center{
        text-align: center;
    }
</style>
<?php 

// print_r($data1);

?>

<div class="row">
  <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12">
    
  <h2 class="bg-primary text-white p-2 text-center">LFB Final QC ( <?php format($start_date1); echo " To "; format($end_date1) ?> )</h2>
<table class="table table-hover table-bordered table-responsive w-100" id="forming-table" >
    <thead class="bg-primary-200 text-light">
    <tr>
    <th>Date</th>
    <th>Station Name</th>
      <th>MP No</th>
           <th>Article</th>
          <th>Size</th>
          <th>Check</th>
          <th>Pass</th>
          <th>Fail</th>
          <th>Seam Defect</th>
          <th>Material Defect</th>
          <th>Seam Over laping</th>
          <th>Wrinkles</th>
          <th>Excess Glue</th>
           <th>Miss Glue</th>
          <th>Pressure Marks</th>
          <th>Air Bubble</th>
          <th>Heavy Printing Defect</th>
          <th>Touching Peeling Off</th>
          <th>Print Mis Alignment</th>
          <th>Wrong Artwork</th>
          <th>Mold Mark</th>
          <th>Colour Shade</th>
          <th>Valve Nozzle Move</th>
          <th>Over size</th>
          <th>Under Size</th>
          <th>Over  Weight</th>
          <th>Under Weight</th>
          <th>D shape</th>
         
        
    </tr>
    </thead>

    <tbody style="border:1px black solid; ">

<?php 
  $TotalChecked1=0;
  $TotalPass1=0;
  $Fail1=0;
 
  $SeamDefect1=0;
  $MaterialDefect1=0;
  $SeamOverlaping1=0;
  $Wrinkles1=0;
  $ExcessGlue1=0;
  $PressureMarks1=0;
  $AirBubble1=0;
  $HeavyPrintDefect1=0;
  $PrintMisalignment1=0;
  $TouchingPeelingOff1=0;
  $WrongeArtwork1=0;
  $MoldMark1=0;
  $ColourShade1=0;
  $ValveNozzleMove1=0;
  $Oversize1=0;
  $UnderSize1=0;
  $OverWeight1=0;
  $UnderWeight1=0;
  $DShape1=0;
  $MissGlue1=0;
if($data) {
foreach($data as $d) {
    $Datee=$d['Datee'];
    $Stationname=$d['Stationname'];
    $HourName=$d['HourName'];
    $TotalChecked=$d['TotalChecked'];
    $TotalPass=$d['TotalPass'];
    $Fail=$d['Fail'];
    $MPID=$d['MPID'];
    $ArtCode=$d['ArtCode'];
    $ArtSIze=$d['ArtSIze'];
    $SeamDefect=$d['SeamDefect'];
    $MaterialDefect=$d['MaterialDefect'];
    $SeamOverlaping=$d['SeamOverlaping'];
    $Wrinkles=$d['Wrinkles'];
    $ExcessGlue=$d['ExcessGlue'];
    $MissGlue=$d['MissGlue'];
    $PressureMarks=$d['PressureMarks'];
    $AirBubble=$d['AirBubble'];
    $HeavyPrintDefect=$d['HeavyPrintDefect'];
    $PrintMisalignment=$d['PrintMisalignment'];
    $TouchingPeelingOff=$d['TouchingPeelingOff'];
    $WrongeArtwork=$d['WrongeArtwork'];
    $MoldMark=$d['MoldMark'];
    $ColourShade=$d['ColourShade'];
    $ValveNozzleMove=$d['ValveNozzleMove'];
    $Oversize=$d['Oversize'];
    $UnderSize=$d['UnderSize'];
    $OverWeight=$d['OverWeight'];
    $UnderWeight=$d['UnderWeight'];
    $DShape=$d['DShape'];
    
   
    ?>
     <tr>
     <td><?php Echo $Datee; ?></td>
     
     <td><?php Echo $Stationname; ?></td>
     <td><?php Echo $MPID; ?></td>
     <td><?php Echo $ArtCode; ?></td>
     <td><?php Echo $ArtSIze; ?></td>
     <td><?php r($TotalChecked); ?></td>
     <td><?php r($TotalPass); ?></td>
     <td><?php r($Fail); ?></td>
     <td><?php r($SeamDefect); ?></td>
     <td><?php r($MaterialDefect); ?></td>
     <td><?php r($SeamOverlaping); ?></td>
     <td><?php r($Wrinkles); ?></td>
     <td><?php r($ExcessGlue); ?></td>
         <td><?php r($MissGlue); ?></td>
     <td><?php r($PressureMarks); ?></td>
     <td><?php r($AirBubble); ?></td>
     <td><?php r($HeavyPrintDefect); ?></td>
     <td><?php r($TouchingPeelingOff); ?></td>
      <td><?php r($PrintMisalignment); ?></td>
     <td><?php r($WrongeArtwork); ?></td>
     
     <td><?php r($MoldMark); ?></td>
     <td><?php r($ColourShade); ?></td>
     <td><?php r($ValveNozzleMove); ?></td>
     <td><?php r($Oversize); ?></td>
     <td><?php r($UnderSize); ?></td>
     <td><?php r($OverWeight); ?></td>
     <td><?php r($UnderWeight); ?></td>
     <td><?php r($DShape); ?></td>
 
 
    
</tr>
<?php
$TotalChecked1=$d['TotalChecked']+$TotalChecked1;
$TotalPass1=$d['TotalPass']+$TotalPass1;
$Fail1=$d['Fail']+$Fail1;

$SeamDefect1=$d['SeamDefect']+$SeamDefect1;
$MaterialDefect1=$d['MaterialDefect']+$MaterialDefect1;
$SeamOverlaping1=$d['SeamOverlaping']+$SeamOverlaping1;
$Wrinkles1=$d['Wrinkles']+$Wrinkles1;
$ExcessGlue1=$d['ExcessGlue']+$ExcessGlue1;
$PressureMarks1=$d['PressureMarks']+$PressureMarks1;
$AirBubble1=$d['AirBubble']+$AirBubble1;
$HeavyPrintDefect1=$d['HeavyPrintDefect']+$HeavyPrintDefect1;
$PrintMisalignment1=$d['PrintMisalignment']+$PrintMisalignment1;
$TouchingPeelingOff1=$d['TouchingPeelingOff']+$TouchingPeelingOff1;
$WrongeArtwork1=$d['WrongeArtwork']+$WrongeArtwork1;
$MoldMark1=$d['MoldMark']+$MoldMark1;
$ColourShade1=$d['ColourShade']+$ColourShade1;
$ValveNozzleMove1=$d['ValveNozzleMove']+$ValveNozzleMove1;
$Oversize1=$d['Oversize']+$Oversize1;
$UnderSize1=$d['UnderSize']+$UnderSize1;
$OverWeight1=$d['OverWeight']+$OverWeight1;
$UnderWeight1=$d['UnderWeight']+$UnderWeight1;
$DShape1=$d['DShape']+$DShape1;
$MissGlue1=$d['MissGlue']+$MissGlue1;
 }
?>
<tr class="bg-primary text-white"> 
     <td></td>
         <td></td>
     <td></td>
     <td></td>
        <td>Total :</td>
 
     <td><?php r($TotalChecked1); ?></td>
     <td><?php r($TotalPass1); ?></td>
     <td><?php r($Fail1); ?></td>
     <td><?php r($SeamDefect1); ?></td>
     <td><?php r($MaterialDefect1); ?></td>
     <td><?php r($SeamOverlaping1); ?></td>
     <td><?php r($Wrinkles1); ?></td>
     <td><?php r($ExcessGlue1); ?></td>
      <td><?php r($MissGlue1); ?></td>
     <td><?php r($PressureMarks1); ?></td>
     <td><?php r($AirBubble1); ?></td>
     <td><?php r($HeavyPrintDefect1); ?></td>
     <td><?php r($TouchingPeelingOff1); ?></td>
       <td><?php r($PrintMisalignment1); ?></td>
     <td><?php r($WrongeArtwork1); ?></td>
     <td><?php r($MoldMark1); ?></td>
     <td><?php r($ColourShade1); ?></td>
     <td><?php r($ValveNozzleMove1); ?></td>
     <td><?php r($Oversize1); ?></td>
     <td><?php r($UnderSize1); ?></td>
     <td><?php r($OverWeight1); ?></td>
     <td><?php r($UnderWeight1); ?></td>
     <td><?php r($DShape1); ?></td>
    
 
    
</tr>

   
 
  <?php
} else{ 
?>
<tr>
<th colspan="5"> <center>No Record Available Yet!</center> </th>
</tr>
<?php }
?>


</tbody>
</table>

  </div>
</div>

<div class="row">
  <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12">

  <h2 class="bg-primary text-white p-2 text-center">LFB Final Line wise Details between  ( <?php format($start_date1); echo " To "; format($end_date1) ?> )</h2>
<table class="table table-hover table-bordered table-responsive w-100" id="forming-table1"  >
    <thead class="bg-primary-200 text-light">
    <tr>
          <th>Date</th>
          <th>Line Name</th>
          <th>Check</th>
          <th>Pass</th>
          <th>Fail</th>    
    </tr>
    </thead>

    <tbody style="border:1px black solid; ">

<?php 
  $TotalChecked1=0;
  $TotalPass1=0;
  $Fail1=0;
 
if($data1) {
foreach($data1 as $d) {
    $Datee=$d['Datee'];
    //$Stationname=$d['Stationname'];
    // $ArtCode=$d['ArtCode'];
    // $ArtSIze=$d['ArtSIze'];

    $Stationname=$d['Stationname'];
    $TotalChecked=$d['TotalChecked'];
    $TotalPass=$d['TotalPass'];
    $Fail=$d['Fail'];
   
    // $ArtSIze=$d['ArtSIze'];
    
   
    ?>
     <tr>
     <td><?php Echo $Datee; ?></td>
     <td><?php Echo $Stationname; ?></td>
     <td><?php r($TotalChecked); ?></td>
     <td><?php r($TotalPass); ?></td>
     <td><?php r($Fail); ?></td>
    
    
</tr>
<?php
$TotalChecked1=$d['TotalChecked']+$TotalChecked1;
$TotalPass1=$d['TotalPass']+$TotalPass1;
$Fail1=$d['Fail']+$Fail1;

 }
?>
<tr class="bg-primary text-white"> 
     <td></td>
     <td>Total : </td>
     <td><?php r($TotalChecked1); ?></td>
     <td><?php r($TotalPass1); ?></td>
     <td><?php r($Fail1); ?></td>
     
 
    
</tr>

   
 
  <?php
} else{ 
?>
<tr>
<th colspan="5"> <center>No Record Available Yet!</center> </th>
</tr>
<?php }
?>


</tbody>
</table>

  </div>
</div>

<div class="row">
<div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12">

<h2 class="bg-primary text-white p-2 text-center">LFB Final Article wise Details between  ( <?php format($start_date1); echo " To "; format($end_date1) ?> )</h2>
<table class="table table-hover table-bordered table-responsive w-100" id="forming-table2" >
    <thead class="bg-primary-200 text-light">
    <tr>
    <th>Date</th>
     <th>MPNo.</th>
           <th>Article</th>
          <th>Size</th>
          <th>Check</th>
          <th>Pass</th>
          <th>Fail</th>
  <th>Plan Qty</th>
   <th>Balance</th>
        
        
    </tr>
    </thead>

    <tbody style="border:1px black solid; ">

<?php 
  $TotalChecked1=0;
  $TotalPass1=0;
  $Fail1=0;
 $TotalQty1= 0;
 $Balance1=0;
if($balance) {
foreach($balance as $d) {
    $Datee=$d['Datee'];
    //$Stationname=$d['Stationname'];
      $ArtCode=$d['ArtCode'];
    $ArtSIze=$d['ArtSIze'];
    $TotalChecked=$d['TotalChecked'];
    $TotalPass=$d['TotalPass'];
    $MPID=$d['MPID'];
    $Fail=$d['Fail'];
    $ArtCode=$d['ArtCode'];
    $ArtSIze=$d['ArtSIze'];
    $TotalQty=$d['TotalQty'];
    $Balance=$TotalQty-$TotalPass;
   
    ?>
     <tr>
     <td><?php Echo $Datee; ?></td>
     <td><?php Echo $MPID; ?></td>
     <td><?php Echo $ArtCode; ?></td>
     <td><?php Echo $ArtSIze; ?></td>
     <td><?php r($TotalChecked); ?></td>
     <td><?php r($TotalPass); ?></td>
     <td><?php r($Fail); ?></td>
     <td><?php r($TotalQty); ?></td>
      <td><?php r($Balance); ?></td>
    
</tr>
<?php
$TotalChecked1=$d['TotalChecked']+$TotalChecked1;
$TotalPass1=$d['TotalPass']+$TotalPass1;
$Fail1=$d['Fail']+$Fail1;
$TotalQty1=$d['TotalQty']+$TotalQty;
$Balance1=$TotalQty1-$TotalPass1;
 }
?>
<tr class="bg-primary text-white"> 
     <td></td>
         <td></td>
  <td></td>
  
     <td>Total :</td>
     <td><?php r($TotalChecked1); ?></td>
     <td><?php r($TotalPass1); ?></td>
     <td><?php r($Fail1); ?></td>
      <td></td>
     <td></td>
  
 
    
</tr>

   
 
  <?php
} else{ 
?>
<tr>
<th colspan="5"> <center>No Record Available Yet!</center> </th>
</tr>
<?php }
?>


</tbody>
</table>

</div>

</div>

<div class="row">
<div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12">


<h2 class="bg-primary text-white p-2 text-center">LFB Final PO Wise Detail</h2>
<table class="table table-hover table-bordered table-responsive w-100" id="Po-table" >
    <thead class="bg-primary-200 text-white">
    <tr>
      <th>PO.</th>
    <th>MP No</th>
     <th>TIcket No.</th>
           <th>Article</th>
          <th>Size</th>
           <th>Ticket wise Plan Qty</th>
  
          <th>Plan Qty</th>
          <th>Check</th>
          <th>Pass</th>
          <th>Fail</th>
 
        
    </tr>
    </thead>

    <tbody style="border:1px black solid; ">

<?php 
  $TotalChecked1=0;
  $TotalPass1=0;
  $Fail1=0;
 $TotalQty1= 0;
 
if($data2) {
foreach($data2 as $d) {
    $POCode=$d['POCode'];
    //$Stationname=$d['Stationname'];
      $ArtCode=$d['ArtCode'];

    $TotalChecked=$d['TotalChecked'];
    $TotalPass=$d['TotalPass'];
    $MPID=$d['MPID'];
    $Fail=$d['Fail'];
    $ArtCode=$d['ArtCode'];
    $ArtSIze=$d['ArtSize'];
    $TotalQty=$d['TotalQty'];
      $TID=$d['TID'];
    $TicketPlanQty=$d['TicketPlanQty'];
    ?>
     <tr>
     <td><?php Echo $POCode; ?></td>
     <td><?php Echo $MPID; ?></td>
       <td><?php Echo $TID; ?></td>
     <td><?php Echo $ArtCode; ?></td>
     <td><?php Echo $ArtSIze; ?></td>
       <td><?php r($TicketPlanQty); ?></td>
       <td><?php r($TotalQty); ?></td>
     <td><?php r($TotalChecked); ?></td>
     <td><?php r($TotalPass); ?></td>
     <td><?php r($Fail); ?></td>
   
      
    
</tr>
<?php


 }
?>


   
 
  <?php
} else{ 
?>
<tr>
<th colspan="5"> <center>No Record Available Yet!</center> </th>
</tr>
<?php }
?>


</tbody>
</table>


</div>
</div>



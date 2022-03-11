<!-- <div>
<table class="table table-hover " style="border: 1px gray solid; width:100%;">
    <thead style="background-color:#003366; color: #fff;" >
      <th style="text-align: center"><h4>  TM  Carcas Dipping Detail  Between (<?php echo $Sdate;?>) To (<?php echo $Edate;?>) </h4></th>
  </thead>
</table>
<table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 100%; margin-top: -30px" id="forming-table">
  <thead style="background-color: #3399ff; color: #fff;  font-size: 15px;">
   <th style="width: 2%; text-align: center;"> Serial No.</th>
    <th style="text-align: left;" >Factory Code</th>
    <th style="text-align: center;"> Size</th>
    
    
      <th style="width: 10%;" style="text-align: left;">Material Name</th>
    <th style="width: 3%;">Air Pressure Before Conveyor</th>
      <th style="width:5%;">Air Pressure After Conveyor</th>
    <th> Difference</th>
       <th style="width:5%;">Weight Before Brushing </th>
    <th style="width:5%;"> Weight After Brushing </th>
      <th>Difference</th>
    <th colspan="2"> Cir. Before Brushing</th>
      
 <th> Diffenence</th>
       <th colspan="2"> Cir. After Brushing</th>
      

  <th> Diffenence</th>
     
  </thead>
 


<?php
 $i=0;

foreach($CarcasData as $Data1){
  $j=$i+1;

$FactoryCode=$Data1['VendorId'];
$Size=$Data1['Size'];

$MaterialName=$Data1['MaterialName'];

$AirPBC=$Data1['AirPBC'];
$AirPAC=$Data1['AirPAC'];
$AirDifference=$Data1['AirDifference'];
$CarcasWBB=$Data1['CarcasWBB'];
$CarcasWAB=$Data1['CarcasWAB'];
$WeightDifference=$Data1['WeightDifference'];
$CarcasCirBB1=$Data1['CarcasCirBB1'];
$CarcasCirBB2=$Data1['CarcasCirBB2'];
$CirADifference=$Data1['CirADifference'];

 $CarasCirAB1=$Data1['CarasCirAB1'];
$CarasCirAB2=$Data1['CarasCirAB2'];
$CirBDiffenence=$Data1['CirBDiffenence'];


   ?>


    <tr>
   <td style="text-align: center;" style="width: 3%;"><?php echo $j;?></td>
      <td style="text-align: left;"><?php echo $FactoryCode;?></td>
<td style="text-align: center;"><?php echo $Size;?></td>
      <td style="text-align: left;" style="width: 10%;"><?php echo $MaterialName;?></td>
<td style="text-align: center; color: green;"><?php echo $AirPBC;?> </td>
      <td style="text-align: center;width:5%;  color: green;"><?php echo $AirPAC;?></td>
<td style="text-align: center;" class="Diff">0<?php echo $AirDifference;?></td>
      <td style="text-align: center;width:5%; color: #3366ff;"><?php echo Round($CarcasWBB);?> </td>
<td style="text-align: center;width:5%; color: #3366ff;"><?php echo Round($CarcasWAB);?> </td>
      <td style="text-align: center;" class="Diff"><?php echo Round($WeightDifference);?> </td>
<td style="text-align: center;width:5%; color: #202020;"><?php echo $CarcasCirBB1;?> </td>
      <td style="text-align: center; width:5%; color: #202020;"><?php echo $CarcasCirBB2;?></td>
<td style="text-align: center;" class="Diff">0<?php echo $CirBDiffenence;?></td>
      <td style="text-align: center;width:5%; color: #ff9900;"><?php echo $CarasCirAB1;?></td>
<td style="text-align: center;width:5%; color: #ff9900;"><?php echo $CarasCirAB2;?></td>
      <td style="text-align: center;" class="Diff">0<?php echo $CirADifference;?></td>


  <?php
  $i++;
}

?>
     </tr>
 

</tbody>


</table>
</div>
 -->

<div class="table-responsive " style="width:100%; margin-top:100px; overflow:hidden;">
<table class="table table-hover " style="border: 1px gray solid; margin-top:50px;">
    <thead class="bg-primary-200 text-light" style="color: #fff;" >
      <th style="text-align: center"><h4>  TM  Carcas Dipping Detail  Between (<?php echo $Sdate;?>) To (<?php echo $Edate;?>) </h4></th>
  </thead>

</table>
<table class="table table-bordered table-striped table-hover js-basic-example dataTable"  id="forming-table">
  <thead class="bg-primary-200 text-light" style="color: #fff;  font-size: 15px;">
   <th style="width: 2%; text-align: center;"> Serial No.</th>
    <th style="text-align: left;" >Factory Code</th>
    <th style="text-align: center;"> Size</th>
    
    
      <th style="width: 10%;" style="text-align: left;">Material Name</th>
    <th style="width: 3%;">Air Pressure Before Conveyor</th>
      <th style="width:5%;">Air Pressure After Conveyor</th>
    <th> Difference</th>
       <th style="width:5%;">Weight Before Brushing </th>
    <th style="width:5%;"> Weight After Brushing </th>
      <th>Difference</th>
    <th colspan="2"> Cir. Before Brushing</th>
      
 <th> Diffenence</th>
       <th colspan="2"> Cir. After Brushing</th>
      

  <th> Diffenence</th>
     
  </thead>
 <tbody>


<?php
 $i=0;

foreach($CarcasData as $Data1){
  $j=$i+1;

$FactoryCode=$Data1['VendorId'];
$Size=$Data1['Size'];

$MaterialName=$Data1['MaterialName'];

$AirPBC=$Data1['AirPBC'];
$AirPAC=$Data1['AirPAC'];
$AirDifference=$Data1['AirDifference'];
$CarcasWBB=$Data1['CarcasWBB'];
$CarcasWAB=$Data1['CarcasWAB'];
$WeightDifference=$Data1['WeightDifference'];
$CarcasCirBB1=$Data1['CarcasCirBB1'];
$CarcasCirBB2=$Data1['CarcasCirBB2'];
$CirADifference=$Data1['CirADifference'];

 $CarasCirAB1=$Data1['CarasCirAB1'];
$CarasCirAB2=$Data1['CarasCirAB2'];
$CirBDiffenence=$Data1['CirBDiffenence'];


   ?>


    <tr>
   <td style="text-align: center;" style="width: 3%;"><?php echo $j;?></td>
      <td style="text-align: left;"><?php echo $FactoryCode;?></td>
<td style="text-align: center;"><?php echo $Size;?></td>
      <td style="text-align: left;" style="width: 10%;"><?php echo $MaterialName;?></td>
<td style="text-align: center; color: green;"><?php echo $AirPBC;?> </td>
      <td style="text-align: center;width:5%;  color: green;"><?php echo $AirPAC;?></td>
<td style="text-align: center;" class="Diff">0<?php echo $AirDifference;?></td>
      <td style="text-align: center;width:5%; color: #3366ff;"><?php echo Round($CarcasWBB);?> </td>
<td style="text-align: center;width:5%; color: #3366ff;"><?php echo Round($CarcasWAB);?> </td>
      <td style="text-align: center;" class="Diff"><?php echo Round($WeightDifference);?> </td>
<td style="text-align: center;width:5%; color: #202020;"><?php echo $CarcasCirBB1;?> </td>
      <td style="text-align: center; width:5%; color: #202020;"><?php echo $CarcasCirBB2;?></td>
<td style="text-align: center;" class="Diff">0<?php echo $CirBDiffenence;?></td>
      <td style="text-align: center;width:5%; color: #ff9900;"><?php echo $CarasCirAB1;?></td>
<td style="text-align: center;width:5%; color: #ff9900;"><?php echo $CarasCirAB2;?></td>
      <td style="text-align: center;" class="Diff">0<?php echo $CirADifference;?></td>


  <?php
  $i++;
}

?>
     </tr>
 

</tbody>


</table>
  </div>
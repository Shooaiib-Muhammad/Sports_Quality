
<Style>
    .center{
        text-align: center;
    }
    td{
     text-align: center;
    }
</style>
<h2 class="bg-primary text-white p-2 text-center">LFB Carcas QC ( <?php format($start_date1); echo " To "; format($end_date1) ?> )</h2>
<table class="table table-hover table-bordered table-responsive" id="forming-table" >
    <thead>
    <tr class="bg-dark text-white">
    <th>Date</th>
    <th style="text-align: center;" >Factory Code</th>
      <th style="width:20%; text-align: center;" >Material</th>
     <th style="width:20%; text-align: center;" >Category</th>
           <th style="width:15%; text-align: center;" >Hour</th>
          
          <th>Check</th>
          <th>Pass</th>
          <th>Fail</th>
       
          <th>Over size</th>
          <th>Under Size</th>
          <th>puncture</th>
          <th>D shape</th>
         
        
    </tr>
    </thead>

    <tbody style="border:1px black solid; ">

<?php 
  $TotalChecked1=0;
  $TotalPass1=0;
  $Fail1=0;
 $Oversize1=0;

  $UnderSize1=0;
  $OverWeight1=0;
  $puncture=0;
  $DShape1=0;
$Puncture1=0;
if($data) {
foreach($data as $d) {
    $Datee=$d['Datee'];
    $FactoryCode=$d['FactoryCode'];
     $hour=$d['HourName'];
    $Material=$d['Material'];
    $Catagory=$d['Catagory'];
    $TotalChecked=$d['TotalCheck'];
    $TotalPass=$d['TotalPass'];
    $Fail=$d['TotalFail'];

    $OverSize=$d['OverSize'];
    $UnderSize=$d['underSize'];
  $Puncture=$d['Puncture'];

    $DShape=$d['DShape'];
    
   
    ?>
     <tr>
     <td><?php Echo $Datee; ?></td>
     
     <td><?php Echo $FactoryCode; ?></td>
     <td><?php Echo $Material; ?></td>
     <td><?php Echo $Catagory; ?></td>
     <td><?php Echo $hour; ?></td>
     <td><?php r($TotalChecked); ?></td>
     <td><?php r($TotalPass); ?></td>
     <td><?php r($Fail); ?></td>
  
     <td><?php r($OverSize); ?></td>
   <td><?php r($UnderSize); ?></td>
      <td><?php r($Puncture); ?></td>
     <td><?php r($DShape); ?></td>
 
 
    
</tr>
<?php
$TotalChecked1=$d['TotalCheck']+$TotalChecked1;
$TotalPass1=$d['TotalPass']+$TotalPass1;
$Fail1=$d['TotalFail']+$Fail1;
$Oversize1=$OverSize+$Oversize1;
$UnderSize1=$d['underSize']+$UnderSize1;
$Puncture1=$Puncture+$Puncture1;

$DShape1=$d['DShape']+$DShape1;

 }
?>
<tr style="background-color:#202020; color:White;"> 
     <td></td>
         <td></td>
     <td></td>
    <td></td>
        <td>Total :</td>
 
     <td><?php r($TotalChecked1); ?></td>
     <td><?php r($TotalPass1); ?></td>
     <td><?php r($Fail1); ?></td>
     
     <td><?php r($Oversize1); ?></td>
     <td><?php r($UnderSize1); ?></td>
     <td><?php r($Puncture1); ?></td>

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

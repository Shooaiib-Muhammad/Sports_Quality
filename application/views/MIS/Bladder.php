
<Style>
    .center{
        text-align: center;
    }
    td{
     text-align: center;
    }
</style>
<h2 class="bg-primary-200 text-light text-white p-2 text-center">MS Bladders Details ( <?php format($start_date1); echo " To "; format($end_date1) ?> )</h2>
<table class="table table-hover table-bordered table-responsive" id="forming-table" >
    <thead>
    <tr class="bg-primary-200 text-light">
    <th>Date</th>
    <th style="width:20%; text-align: center;" >Company Name</th>
      <th>Bladder Type</th>
     <th >Size</th>
          <th>Check</th>
          <th>Pass</th>
          <th>Fail</th>
          <th>Joint Fault</th>
          <th>Nozzle Fault</th>
          <th>Body Fault</th>
          <th>Weight Fault</th>
           <th>Size Fault</th>
        
    </tr>
    </thead>
<tbody>

 <?php
 //print_r($data);
 $TotalChecked1=0;
$Pass1=0;
 $Fail1=0;
 $JointFault1=0;
 $NozzleFault1=0;
 $BodyFault1=0;
 $WeightFault1=0;
 $SizeFault1=0;
 foreach ($data as $key){
 $Company = $key['CompanyName'];
 $BladderTpye = $key['BladderTpye'];
 $Size = $key['Size'];
 $TotalChecked = $key['TotalChecked'];
 $Pass = $key['Pass'];
 $Fail = $key['Fail'];
 $JointFault = $key['JointFault'];
 $NozzleFault = $key['NozzleFault'];
 $BodyFault = $key['BodyFault'];
 $WeightFault = $key['WeightFault'];
 $SizeFault = $key['SizeFault'];
$Datee = $key['Datee'];
 
 ?>
 <tr>
  <td><?php Echo $Datee; ?></td>
 <td><?php Echo $Company; ?></td>
 <td><?php Echo $BladderTpye; ?></td>
 <td><?php Echo $Size ?></td>
 <td><?php r($TotalChecked); ?></td>
 <td><?php r($Pass); ?></td>
 <td><?php r($Fail); ?></td>
 <td><?php r($JointFault); ?></td>
 <td><?php r($NozzleFault); ?></td>
 <td><?php r($BodyFault); ?></td>
 <td><?php r($WeightFault); ?></td>
 <td><?php r($SizeFault); ?></td>
   </tr>
<?php
 $TotalChecked1=$TotalChecked+$TotalChecked1;
$Pass1=$Pass+$Pass1;
 $Fail1=$Fail+$Fail1;;
 $JointFault1=$JointFault+$JointFault1;
 $NozzleFault1=$NozzleFault+$NozzleFault1;
 $BodyFault1=$BodyFault+$BodyFault1;
 $WeightFault1=$WeightFault+$WeightFault1;
 $SizeFault1=$SizeFault+$SizeFault1;
 }
 ?>
 
 <tr style="color: black;">
  <td></td>
 <td></td>
 <td></td>
 <td>Total</td>
 <td><?php r($TotalChecked1); ?></td>
 <td><?php r($Pass1); ?></td>
 <td><?php r($Fail1); ?></td>
 <td><?php r($JointFault1); ?></td>
 <td><?php r($NozzleFault1); ?></td>
 <td><?php r($BodyFault1); ?></td>
 <td><?php r($WeightFault1); ?></td>
 <td><?php r($SizeFault1); ?></td>
   </tr>
</tbody>
    
</table>
<h2 class="bg-primary-200 text-light text-white p-2 text-center">MLP Rejection Details From( <?php format($start_date1); echo " To "; format($end_date1) ?> )</h2>
<table class="table table-hover table-bordered table-responsive" id="forming-RPtable" >
    <thead>
    <tr class="bg-primary-200 text-light">
    <th>Date</th>
    <th style="width:20%; text-align: center;" >Article </th>
      
     <th >Size</th>
         
          <th>Prd Qty</th>
          <th>Fail</th>
          <th>Print Qty</th>
          <th>Sheet Sizing Qty</th>
          <th>Cuttin Qty</th>
          <th>Printing Material</th>
           <th>Cutting Material</th>
        
    </tr>
    </thead>
<tbody>

 <?php
 //print_r($data);

 $Fail1=0;
 $PrintQty1=0;
 $SSQty1=0;
 $CuttinQty1=0;
 $PrintingMat1=0;
 $CuttingMat1=0;
 $PrdQty1=0;
 foreach ($mlprejection as $key){
 $ArtSize = $key['ArtSize'];
 $ArtCode = $key['ArtCode'];

 $PrdQty = $key['PrdQty'];

 $Fail = $key['Fail'];
 $PrintQty = $key['PrintQty'];
 $SSQty = $key['SSQty'];
 $CuttinQty = $key['CuttinQty'];
 $PrintingMat = $key['PrintingMat'];
 $CuttingMat = $key['CuttingMat'];
$Datee = $key['Datee'];
 
 ?>
 <tr>
  <td><?php Echo $Datee; ?></td>
 <td><?php Echo $ArtCode; ?></td>
 <td><?php Echo $ArtSize; ?></td>
 <td><?php r($PrdQty); ?></td>
 <td><?php r($Fail); ?></td>

 <td><?php r($PrintQty); ?></td>
 <td><?php r($SSQty); ?></td>
 <td><?php r($CuttinQty); ?></td>
 <td><?php r($PrintingMat); ?></td>
 <td><?php r($CuttingMat); ?></td>
   </tr>
<?php
 $Fail1=$Fail+$Fail1;
 $PrintQty1=$PrintQty+$PrintQty1;
 $SSQty1=$SSQty+$SSQty1;
 $CuttinQty1=$CuttinQty+$CuttinQty1;
 $PrintingMat1=$PrintingMat+$PrintingMat1;
 $CuttingMat1=$CuttingMat+$CuttingMat1;
 $PrdQty1=$PrdQty+$PrdQty1;
 }
 ?>
 
 <tr style="color: black;">
    <td></td>
 <td></td>
 <td>Total</td>
 <td><?php r($PrdQty1); ?></td>
 <td><?php r($Fail1); ?></td>

 <td><?php r($PrintQty1); ?></td>
 <td><?php r($SSQty1); ?></td>
 <td><?php r($CuttinQty1); ?></td>
 <td><?php r($PrintingMat1); ?></td>
 <td><?php r($CuttingMat1); ?></td>
   </tr>
</tbody>
    
</table>

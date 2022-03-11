<div class="table-responsive " style="width:100%; margin-top:100px; overflow:scroll;">
  <table class="table table-hover " style="border: 1px gray solid; width:100%; margin-top:100px;">
    <thead class="bg-primary-200 text-light" style="color: #fffbfb;" >
       <th style="text-align: center"><h4>  TM  Panel Shape Detail  Between (<?php echo $Sdate;?>) To (<?php echo $Edate;?>) </h4></th> 
  </thead>
</table>

  <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="forming-table">
  <thead  style="border:2px solid black; font-size: 15px;">

    <th>Hours Code</th>
    <th> Size</th>
    
    <th style="text-align: center;">Weight Range</th>
   <th style="text-align: center;">Weight</th>

     
  </thead>

  <tbody>


<?php

foreach($PanelShape as $Data1){
$FactoryCode=$Data1['HourName'];
$CarcasDip=$Data1['PanelShapeWeight'];

$CarcasDipS=$Data1['PanelShapeStartRange'];

$CarcasDipE=$Data1['PanelShapeEndRange'];
$Matname=$Data1['MatName'];
$Size=$Data1['Size'];
 


   ?>
  

    <tr>
   
      <td style="text-align: left;"><?php echo $FactoryCode;?></td>
<td style="text-align: center;"><?php echo $Size;?></td>

<td style="text-align: right;"><?php echo Round($CarcasDipS);?>-<?php echo Round($CarcasDipE);?></td>

<?php if(($CarcasDip>$CarcasDipE) ||($CarcasDip<$CarcasDipS)){
?>
<td style="text-align: right;background-color:red;color:#fffbfb;"><?php echo Round($CarcasDip);?></td>
<?php
}
else{
  ?>
  <td style="text-align: right;"><?php echo Round($CarcasDip);?></td>
  <?php
}
?>
  </tr>
  <?php

 
 }?>
     </tr>



</tbody>


</table>

</div>


<div class="table-responsive " style="width:100%; overflow:hidden;">
<table class="table table-hover " style="border: 1px gray solid; margin-top:50px;">
    <thead class="bg-primary-200 text-light"  style="color: #fffbfb;" >
    <th style="text-align: center" colspan="5"><h4 >  TM  Assembling Detail  Between (<?php echo $Sdate;?>) To (<?php echo $Edate;?>) </h4></th>
  </thead>

  <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="forming-table">
 
  <thead class="bg-primary-200 text-light" style="border:2px solid black; color: #fff;  font-size: 15px;">
    <th>Serial No.</th>
    <th> ArtCode</th>
    <th> Size</th>
    <th style="text-align: center;">Weight Range</th>
   <th style="text-align: center;">Weight</th>
  </thead>
  <tbody>
<?php
//print_r($Assemblig);

 $i=0;
foreach($Assemblig as $Data1){
 $j=$i+1;
 $ArtCode=$Data1['ArtCode'];
// $FactoryCode=$Data1['HourName'];
$Size=$Data1['Size'];

$ArtCode=$Data1['ArtCode'];

$AssemblyWghtStartRange=$Data1['AssemblyWghtStartRange'];
$AssemblyWghtEndRange=$Data1['AssemblyWghtEndRange'];
$AssemblyWght=$Data1['AssemblyWght'];
 



   ?>
  
    <tr>
   
      <td style="text-align: left;"><?php Echo $j;?>
</td>
<td style="text-align: left;"><?php echo $ArtCode;?></td>
<td style="text-align: center;"><?php echo $Size;?></td>

<td style="text-align: right;color: red;"><?php echo Round($AssemblyWghtStartRange);?>-<?php echo Round($AssemblyWghtEndRange);?></td>
<?php if(($AssemblyWght>$AssemblyWghtEndRange) ||($AssemblyWght<$AssemblyWghtStartRange)){
?>
<td style="text-align: right;background-color:red;color:#fffbfb;"><?php echo Round($AssemblyWght);?></td>
<?php
}
else{
  ?>
  <td style="text-align: right;color:Green;"><?php echo Round($AssemblyWght);?></td>
  <?php
}
?>
  <?php
  $i++;
}
    ?>

     </tr>

</tbody>


</table>
</div>

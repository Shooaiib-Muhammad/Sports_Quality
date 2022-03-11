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


?>


<div class="card-body">
                                <table  id="table" class="display responsive nowrap" style="width: 100%;">
                                  <thead class="thead-dark">
                <style type="text/css">
                  td{
                    text-align: center;
                  }
                  .Froming{
                    color: #33cccc;
                  }
                  .packing{
                    color: #1a8cff;
                  }
                </style>                      
                                       
<tr style="background-color: #282828; color: #fff;">
   <td></td>
<td colspan="6" style="text-align: center; border-right: 1px #ffff solid;border-right: : 1px #ffff solid;">Forming</td>
<td colspan="3" style="text-align: center;">Packing </td></tr>

<tr style="font-weight: bold;">
  <td style="text-align: left;">Hour Name</td> 
<td  style="widtd:10%; text-align: left;">Article</td>
<td  style="widtd:10%;">Checked</td>
<td  style="widtd:10%;">Passed</td>
<td  style="widtd:10%;">RFT</td>
<td  style="widtd:10%;">Strengtd</td>
<td  style="widtd:10%;">Efficiency</td>
<td  style="widtd:10%;">Checked</td>
<td  style="widtd:10%;">Passed</td>
<td  style="widtd:10%;">RFT</td>
</tr>
</thead>

<tbody style="border:1px black solid; ">

<?php 
if($record) {
 foreach($record as $key) {
$line = $key['HourTime'];
$ArtCode = $key['ArtCode'];
$Strength = $key['Strength'];
$Pass = $key['Passed'];
$Checked = $key['Checked'];
if ($Pass==0 or $Checked==0) {
$RFT=0;
}else{
$RFT=$Pass/$Checked*100;
}
$PPass = $key['Ppassed'];
$PChecked = $key['pchecked'];
if ($PPass==0 or $PChecked==0) {
$PRFT=0;
}else{
$PRFT=$PPass/$PChecked*100;
}

$SAM = $key['SAM'];
$Mints = $key['Mints'];
if ($Strength==0 or $SAM== 0 or $Mints==0 or $Pass== 0){
$Efficiency=0;
}
else{
  $Efficiency=($Pass*$SAM)/($Strength*$Mints)*100;
}
?> 
<tr  style="text-align:center; ">
<td style="width:20%; text-align: left;"><?php echo $line;?></td>
<td style="width:10%; text-align: left;"><?php echo $ArtCode;?></td>  
<td  style="width:10%;" class="Froming"><?php echo Round($Checked);?></td>
<td  style="width:10%;" class="Froming"><?php echo Round($Pass);?></td>
<td  style="width:10%;" class="Froming"><?php echo Round($RFT);?>%</td>
<td  style="width:10%;" class="Froming"><?php echo Round($Strength);?></td>
<td  style="width:10%;" class="Froming"><?php echo Round($Efficiency);?>%</td>
<td  style="width:10%;" class="packing"><?php echo Round($PChecked);?></td>
<td  style="width:10%;" class="packing"><?php echo Round($PPass);?></td>
<td  style="width:10%;" class="packing"><?php echo Round($PRFT);?>%</td>
</tr>
<?php } } else{ ?>
<tr>
 <th colspan="10"> <center>No Record Available Yet!</center> </th>
</tr>

<?php } 
 foreach($Sum as $Data) {

$SStrength = $Data['Strength'];
$SPass = $Data['Passed'];
$SChecked = $Data['Checked'];
if ($SPass==0 or $SChecked==0) {
$SRFT=0;
}else{
$SRFT=$SPass/$SChecked*100;
}
$SPPass = $Data['Ppassed'];
$SPChecked = $Data['pchecked'];
if ($SPPass==0 or $SPChecked==0) {
$SPRFT=0;
}else{
$SPRFT=$SPPass/$SPChecked*100;
}

$SSAM = $Data['SAM'];
$SMints = $Data['Mints'];
if ($SStrength==0 or $SSAM== 0 or $SMints==0 or $SPass== 0){
$SEfficiency=0;
 }
 else{
  $SEfficiency=($SPass*$SSAM)/($SStrength*$SMints)*100;
}
}
?>
<tr style="background-color: #202020;text-align:center;  color:#fff;">
<td style="width:20%;">Total</td>
<td style="width:10%;"></td>  
<td  style="width:10%;"><?php echo Round($SChecked);?></td>
<td  style="width:10%;"><?php echo Round($SPass);?></td>
<td  style="width:10%;"><?php echo Round($SRFT);?>%</td>
<td  style="width:10%;"><?php echo Round($SStrength);?></td>
<td  style="width:10%;"><?php echo Round($SEfficiency);?>%</td>
<td  style="width:10%;"><?php echo Round($SPChecked);?></td>
<td  style="width:10%;"><?php echo Round($SPPass);?></td>
<td  style="width:10%;"><?php echo Round($SPRFT);?>%</td>

</tr>
</tbody>
</table> 
</div>
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
} );
</script>
<?php
}else{
    redirect('Welcome/index');
}
?>

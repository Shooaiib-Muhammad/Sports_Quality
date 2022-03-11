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
//$this->load->View('Submenu');
  ?>
      

  <?php
        
if($Record) {

$Sdate;
$Edate;
 

$SYear=substr($Sdate,0,4);
$SMonth=substr($Sdate,5,2);
$SDay=substr($Sdate,-2,2);
$EYear=substr($Edate,0,4);
    //echo "<br>";
$EMonth=substr($Edate,5,2);
    //echo "<br>";
$EDay=substr($Edate,-2,2);
$StartDateeee=$SYear.'-'.$SMonth.'-'.$SDay;
$EndDateeee=$EYear.'-'.$EMonth.'-'.$EDay;
?>
<form action="<?php echo base_url('Graph/Data'); ?>" method="POST">
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<input class="form-control" type="Date" name="Sdate" value="<?php echo $StartDateeee;?>" >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<input class="form-control" type="Date" name="Edate" value="<?php echo $EndDateeee;?>" >
</div>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="form-control-label"></label>
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
<form action="<?php echo base_url('Graph/Data'); ?>" method="POST">
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<input class="form-control" type="Date" name="Sdate" value="<?php echo $CurrentDate;?>" >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<input class="form-control" type="Date" name="Edate" value="<?php echo $CurrentDate;?>" >
</div>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label class="form-control-label"></label>
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
if($Record) {
    //print_r($Record);
  $data_points1 = array();
foreach($Record as $key) {
$point1 = array("label" => $key['LineName'] , "y" => Round($key['OpenComposit']));
array_push($data_points1, $point1); 
}

        ?>
<script type="text/javascript">
window.onload = function() {
var chart = new CanvasJS.Chart("chartContainer1", {
  animationEnabled: true,
  title:{
    
  },
   axisY:{
  
     },
  legend:{
    cursor: "pointer",
    fontSize: 18,
    itemclick: toggleDataSeries
  },
  toolTip:{
    shared: true
  },
  data: [{
   type: "column",
        yValueFormatString: "#",
       // indexLabel: "{y} ",
 indexLabelFontSize: 18, 
  name: "Check",

        indexLabelPlacement: "top",
       color:"#33cccc", 
    dataPoints: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
  }]
});

chart.render();


function toggleDataSeries(e){
  if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    e.dataSeries.visible = false;
  }
  else{
    e.dataSeries.visible = true;
  }
  chart.render();
}




chart.render();


function toggleDataSeries(e){
  if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    e.dataSeries.visible = false;
  }
  else{
    e.dataSeries.visible = true;
  }
  chart.render();
}


}
 </script>
<div class="col-lg-12">
<div class="card">
<div class="card-body">
<h3 class="mb-3">Production</h3>
<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>

</div>
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<strong class="card-title">Hand Stitch Ball Production </strong>
</div>
<div class="card-body" class="table-responsive"> 
<table  id="table" class="display responsive nowrap table table-sm" style="width: 100%;">
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
<tr style="font-weight: bold; color: #fff; background-color: #202020;"><td style="text-align: left;">Article</td> 
<td  style="width:10%; " >Check</td>
<td  style="width:10%;">Pass</td>
<td  style="width:10%;">Fail</td>
<td  style="width:10%;">RFT</td>
</tr>
</thead>
<tbody style="border:1px black solid; ">
<?php 
if($Record) {
foreach($Record as $key) {
$ArtCode = $key['ArtCode'];
$TotalChecked = $key['TotalChecked'];
$PassQty = $key['OutPut'];
$Fail = $key['Fail'];
if ($PassQty==0 or $TotalChecked==0) {
$RFT=0;
}else{
$RFT=$PassQty/$TotalChecked*100;
}
?> 
<tr >
<td style="width:10%; text-align: left;"><?php echo $ArtCode;?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo Round($TotalChecked);?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo Round($PassQty);?></td>

<td  style="width:10%; text-align: center;" ><?php echo Round($Fail);?></td>
<td  style="width:10%; text-align: center; color: #00e6b8;"" ><?php echo Round($RFT);?>%</td>
</tr>
<?php
 }

} else{ ?>
<tr>
<th colspan="5"> <center>No Record Available Yet!</center> </th>
</tr>
<?php }
?>
</tbody>
</table> 
</div>
</div>
</div>
  <?php

}

?>

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
           
        ],
     "ordering":false,
      "pageLength":10,
      "searching":false,
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

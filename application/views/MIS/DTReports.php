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
<?php

        
if($Record) {

$Date1=$Sdate;
$Date2=$Edate;
 

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
<form action="<?php echo base_url('DW/DTReportsData'); ?>" method="POST">
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
<form action="<?php echo base_url('DW/DTReportsData'); ?>" method="POST">

<div class="col-md-2">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<input class="form-control" type="Date" name="Sdate" value="<?php echo $CurrentDate;?>" style="width: 110%" >
</div>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<input class="form-control" type="Date" name="Edate" value="<?php echo $CurrentDate;?>" style="width: 110%" >
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

if($Record){
    $Date1=$Sdate;
    $Date2=$Edate;
     
    
    $SYear=substr($Date1,0,4);
    $SMonth=substr($Date1,5,2);
    $SDay=substr($Date1,-2,2);
    $EYear=substr($Date2,0,4);
        //echo "<br>";
    $EMonth=substr($Date2,5,2);
        //echo "<br>";
    $EDay=substr($Date2,-2,2);
    $StartDateeee=$SDay.'/'.$SMonth.'/'.$SYear;
    $EndDateeee=$EDay.'/'.$EMonth.'/'.$EYear;
?>

<div class="col-lg-12">
<div class="card">
<div class="card-header">
<strong class="card-title">Down Time Reports</strong>
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
                <tr style="font-weight: bold; color: #fff; background-color: #3385ff;"><td colspan="12"><strong class="card-title">Down Time Reports From (<?php Echo  $StartDateeee;?>) To (<?php Echo $EndDateeee;?>)</strong> </td></tr>
<tr style="font-weight: bold; color: #fff; background-color: #202020;">
<th>Date</th>
<th>Line Name</th>
           <th>Category</th>
          <th>Reasons</th>
          <th>Machine Type</th>
          <th>Machine No</th>
         
          <th>Operator Name</th>
          <th>From Art Code</th>
          <th>To Art Code</th>
          <th>Start Time</th>
          <th>End Time</th>
             <th>Duration</th>
</tr>
</thead>
<tbody style="border:1px black solid; ">
<?php 
if($Record) {
foreach($Record as $Transaction) {
    $Datee=$Transaction['Dateee'];
    $LineName=$Transaction['LineName'];
    $MachineType=$Transaction['MachineType'];
    $MachineNo=$Transaction['MachineNo'];
    $Catagory=$Transaction['Catagory'];
    $Reason=$Transaction['Reason'];
    $MachineOperator=$Transaction['MachineOperator'];
    $FromArtCode=$Transaction['FromArtCode'];
    $ToArtCode=$Transaction['ToArtCode'];
    $StartTime=$Transaction['StrtTime'];
    
    $EndTime=$Transaction['EndTime'];
    $Mints=$Transaction['Mints'];
    ?>
     <tr>
     <td><?php Echo $Datee; ?></td>
    <td><?php Echo $LineName; ?></td>
    <td><?php Echo $Catagory; ?></td>
    <td><?php Echo $Reason; ?></td>
    <td><?php Echo $MachineType; ?></td>
    <td><?php Echo $MachineNo; ?></td>
    
    <td><?php Echo $MachineOperator; ?></td>
    <td><?php Echo $FromArtCode; ?></td>
    <td><?php Echo $ToArtCode; ?></td>
    <td><?php Echo $StartTime; ?></td>
    <td><?php Echo $EndTime; ?></td>
    <td><?php Echo $Mints; ?> Mints</td>
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
           
        ],
     "ordering":false,
      "pageLength":10,
      "searching":false,
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

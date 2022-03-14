<?php
if (!$this->session->has_userdata('user_id')) {
    redirect('');
} else {
?>

<div id="panel-1" class="panel">

  <?php $this->load->view('includes/new_header'); ?>

  <!-- BEGIN Page Wrapper -->
  <div class="page-wrapper">
    <div class="page-inner">
      <!-- BEGIN Left Aside -->
      <?php $this->load->view('includes/new_aside'); ?>
      <!-- END Left Aside -->
      <div class="page-content-wrapper">
        <!-- BEGIN Page Header -->
        <?php $this->load->view('includes/top_header.php'); ?>
        <main id="js-page-content" role="main" class="page-content">

          <div class="col-lg-12" style="margin-bottom:20px">
          <ol class="breadcrumb page-breadcrumb">
               
               <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
           </ol>
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i>Detail Reports</span>

                        </h1>
                    </div>

          <!doctype html>
<?php
if ($this->session->userdata('userStus')==1) {
?>
<html class="no-js" lang="en">
<!--<![endif]-->


<body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div id="right-panel" class="right-panel">


<style type="text/css">
                  td{
                    text-align: center;
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
<form style="display:flex" action="<?php echo base_url('DW/DTReportsData'); ?>" method="POST">
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
<button style="margin:18px" type="submit" id="submit" name="submit" class="btn btn-primary " ><i class=" fa fa-search"></i> Search</button>
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
<form style="display:flex" action="<?php echo base_url('DW/DTReportsData'); ?>" method="POST">

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
<button style="margin:18px" type="submit" id="submit" name="submit" class="btn btn-primary " ><i class=" fa fa-search"></i> Search</button>
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
<thead class="bg-primary-200 text-light">
                <style type="text/css">
                  td{
                    text-align: center;
                  }
             
                </style>                      
                <tr class="bg-primary-200 text-light" style="font-weight: bold; color: #fff;"><td colspan="12"><strong class="card-title">Down Time Reports From (<?php Echo  $StartDateeee;?>) To (<?php Echo $EndDateeee;?>)</strong> </td></tr>
<tr class="bg-primary-200 text-light" style="font-weight: bold; color: #fff;">
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
<tbody style="border:0px black solid; ">
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
<script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
      <script type="text/javascript">
          /* Activate smart panels */
          $('#js-page-content').smartPanel();
      </script>
      
      <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
      
<script>
  $(document).ready( function () {

    $('#table').DataTable(
    { 
       dom: 'Bfrtip',
        buttons: [
           /*{
                    	extend:    'colvis',
                    	text:      'Column Visibility',
                    	titleAttr: 'Col visibility',
                    	className: 'mr-sm-3'
                    },*/
                    {
                        extend: 'pdfHtml5',
                        text: 'PDF',
                        titleAttr: 'Generate PDF',
                        className: 'btn-outline-danger btn-sm mr-1'
                    },
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        titleAttr: 'Generate Excel',
                        className: 'btn-outline-success btn-sm mr-1'
                    },
                    {
                        extend: 'csvHtml5',
                        text: 'CSV',
                        titleAttr: 'Generate CSV',
                        className: 'btn-outline-primary btn-sm mr-1'
                    },
                    {
                        extend: 'copyHtml5',
                        text: 'Copy',
                        titleAttr: 'Copy to clipboard',
                        className: 'btn-outline-primary btn-sm mr-1'
                    },
                    {
                        extend: 'print',
                        text: 'Print',
                        titleAttr: 'Print Table',
                        className: 'btn-outline-primary btn-sm'
                    }
           
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
           /*{
                    	extend:    'colvis',
                    	text:      'Column Visibility',
                    	titleAttr: 'Col visibility',
                    	className: 'mr-sm-3'
                    },*/
                    {
                        extend: 'pdfHtml5',
                        text: 'PDF',
                        titleAttr: 'Generate PDF',
                        className: 'btn-outline-danger btn-sm mr-1'
                    },
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        titleAttr: 'Generate Excel',
                        className: 'btn-outline-success btn-sm mr-1'
                    },
                    {
                        extend: 'csvHtml5',
                        text: 'CSV',
                        titleAttr: 'Generate CSV',
                        className: 'btn-outline-primary btn-sm mr-1'
                    },
                    {
                        extend: 'copyHtml5',
                        text: 'Copy',
                        titleAttr: 'Copy to clipboard',
                        className: 'btn-outline-primary btn-sm mr-1'
                    },
                    {
                        extend: 'print',
                        text: 'Print',
                        titleAttr: 'Print Table',
                        className: 'btn-outline-primary btn-sm'
                    }
           
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


          </div>
        </main>
      </div>
    </div>
  </div>
</div>

<?php 
}
?>
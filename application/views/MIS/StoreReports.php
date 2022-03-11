
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
         
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i> Store Reports</span>

                        </h1>
                    </div>
          <!doctype html>
<?php
if ($this->session->userdata('userStus')==1) {
?>
<html class="no-js" lang="en">
<!--<![endif]-->

<body>

<div id="right-panel" class="right-panel">
 

<style type="text/css">
                  td{
                    text-align: center;
                  }
                  .Froming{
              
                  }
                  .packing{
                    
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
<form action="<?php echo base_url('DW/StoreReportsData'); ?>" method="POST">
<div class="row">
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
<div style="margin:18px" class="input-group">

<button type="submit" id="submit" name="submit" class="btn btn-primary " ><i class=" fa fa-search"></i> Search</button>
</div>                    
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
<form action="<?php echo base_url('DW/StoreReportsData'); ?>" method="POST">
<div class="row">
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
<div style="margin:18px" class="input-group">

<button style="margin:18px" type="submit" id="submit" name="submit" class="btn btn-primary " ><i class=" fa fa-search"></i> Search</button>
</div>                    
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
<div class="col-lg-12">

<table class="table table-bordered table-responsive text-center table-sm" id="table" style="width: 100%;">

<thead class="bg-primary-200 text-light">
                                  
                <tr style="font-weight: bold;"><td colspan="35">
                    <strong class="card-title">4 Point System Inspection Reports Between  (<?php Echo  $StartDateeee;?>) To (<?php Echo $EndDateeee;?>)
                </strong> </td></tr>

                <tr style="font-weight: bold;">
<th style="text-align:center;" >Sr #</th>
<th style="text-align:center;">Date</th>
<th colspan ="4" style="text-align:center;">Details</th>
         
          <th colspan ="2" style="text-align:center;">Length (meter)</th>
          <th colspan ="2" style="text-align:center;">Width (inches)</th>
          
          <th colspan ="20" style="text-align:center;">Defects Categories</th>
          <th style="text-align:center;" colspan ="2">Hole</th>
          <th style="text-align:center;">Total Point Found</th>
          <th style="text-align:center;">Points/1000 Squre Meter</th>
          <th style="text-align:center;">Status</th>
</tr>
<tr style="font-weight: bold; ">
<th></th>
<th></th>
<th>Fabric Description</th>
           <th>Supplier Name</th>
          <th>Color</th>
          <th>Lot#/GP#</th>
          <th>On Tag</th>
          <th>Actual</th>
          <th>On Tag</th>
          <th>Actual</th>
          <th>Defects 1</th>
          <th>0-3"</th>
          <th>3-6"</th>
          <th>6-9"</th>
          <th>> 9"</th>
          <th>Defects 2</th>
          <th>0-3"</th>
          <th>3-6"</th>
          <th>6-9"</th>
          <th>> 9"</th>
          <th>Defects 3</th>
          <th>0-3"</th>
          <th>3-6"</th>
          <th>6-9"</th>
          <th>> 9"</th>
          <th>Defects 4</th>
          <th>0-3"</th>
          <th>3-6"</th>
          <th>6-9"</th>
          <th>> 9"</th>
          <th>0-1"</th>
          <th>> 1"</th>
          <th></th>
          <th></th>
          <th></th>
          
</tr>
</thead>
<tbody style="border:1px black solid; ">
<?php 
if($Record) {
foreach($Record as $Transaction) {
    
    $TID=$Transaction['TID'];
    $Datee=$Transaction['Datee'];
    $fabric=$Transaction['fabric'];
    $SupplierName=$Transaction['SupplierName'];
    $Color=$Transaction['Color'];
    $LotNo=$Transaction['LotNo'];
    $lengthOntage=$Transaction['lengthOntage'];
    $lengthactual=$Transaction['lengthactual'];
    $widthOntage=$Transaction['widthOntage'];
    $widthactual=$Transaction['widthactual'];
    $Name=$Transaction['Name'];
    $Def1=$Transaction['Def1'];
    $Def2=$Transaction['Def2'];
    $Def3=$Transaction['Def3'];
    $Def4=$Transaction['Def4'];
    $Def1=$Def1*1;
    $Def2=$Def2*2;
    $Def3=$Def3*3;
    $Def4=$Def4*4;
    $Name2=$Transaction['Name2'];
    $Def11=$Transaction['Def11'];
    $Def21=$Transaction['Def21'];
    $Def31=$Transaction['Def31'];
    $Def41=$Transaction['Def41'];
    $Def11=$Def11*1;
    $Def21=$Def21*2;
    $Def31=$Def31*3;
    $Def41=$Def41*4;
    $Name3=$Transaction['Name3'];
    $Def12=$Transaction['Def12'];
    $Def22=$Transaction['Def22'];
    $Def32=$Transaction['Def32'];
    $Def42=$Transaction['Def42'];
    $Def12=$Def12*1;
    $Def22=$Def22*2;
    $Def32=$Def32*3;
    $Def42=$Def42*4;
    $Name4=$Transaction['Name4'];
    $Def13=$Transaction['Def13'];
    $Def23=$Transaction['Def23'];
    $Def33=$Transaction['Def33'];
    $Def43=$Transaction['Def43'];
    $Def13=$Def13*1;
    $Def23=$Def23*2;
    $Def33=$Def33*3;
    $Def43=$Def43*4;
    $Hole1=$Transaction['Hole1'];
    $Hole2=$Transaction['Hole2'];
    $Hole1=$Hole1*4;
    $Hole2=$Hole2*4;
    $Actual=($lengthactual*$widthactual);

    $totalpoints=$Hole1+$Hole2+$Def1+$Def2+$Def3+$Def4+$Def11+$Def21+$Def31+$Def41+$Def12+$Def22+$Def32+$Def42+$Def13+$Def23+$Def33+$Def43;
    $Final=($totalpoints/$Actual)*3947;
    ?>
     <tr>
     <td><?php Echo $TID; ?></td>
     <td><?php Echo $Datee; ?></td>
    <td><?php Echo $fabric; ?></td>
    <td><?php Echo $SupplierName; ?></td>
    <td><?php Echo $Color; ?></td>
    <td><?php Echo $LotNo; ?></td>
    <td><?php Echo $lengthOntage; ?></td>
    <td><?php Echo $lengthactual; ?></td>
    <td><?php Echo $widthOntage; ?></td>
    <td><?php Echo $widthactual; ?></td>
    <td><?php Echo $Name; ?></td>
    <td><?php Echo $Def1; ?></td>
    <td><?php Echo $Def2; ?></td>
    <td><?php Echo $Def3; ?></td>
    <td><?php Echo $Def4; ?></td>
    <td><?php Echo $Name2; ?></td>
    <td><?php Echo $Def11; ?></td>
    <td><?php Echo $Def21; ?></td>
    <td><?php Echo $Def31; ?></td>
    <td><?php Echo $Def41; ?></td>
    <td><?php Echo $Name3; ?></td>
    <td><?php Echo $Def12; ?></td>
    <td><?php Echo $Def22; ?></td>
    <td><?php Echo $Def32; ?></td>
    <td><?php Echo $Def42; ?></td>
    <td><?php Echo $Name4; ?></td>
    <td><?php Echo $Def13; ?></td>
    <td><?php Echo $Def23; ?></td>
    <td><?php Echo $Def33; ?></td>
    <td><?php Echo $Def43; ?></td>
    <td><?php Echo $Hole1; ?></td>
    <td><?php Echo $Hole2; ?></td>
    <td><?php Echo $totalpoints; ?></td>
    <td><?php Echo $Final; ?></td>
    <td></td>
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

<?php
}
?>
</body>

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

    $('#table').dataTable({
                responsive: false,
                lengthChange: false,
                dom:
                    /*	--- Layout Structure 
                    	--- Options
                    	l	-	length changing input control
                    	f	-	filtering input
                    	t	-	The table!
                    	i	-	Table information summary
                    	p	-	pagination control
                    	r	-	processing display element
                    	B	-	buttons
                    	R	-	ColReorder
                    	S	-	Select

                    	--- Markup
                    	< and >				- div element
                    	<"class" and >		- div with a class
                    	<"#id" and >		- div with an ID
                    	<"#id.class" and >	- div with an ID and a class

                    	--- Further reading
                    	https://datatables.net/reference/option/dom
                    	--------------------------------------
                     */
                    "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
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
                ]
            });

    // $('#table').DataTable(
    // { 
    //    dom: 'Bfrtip',
    //     buttons: [
    //         'copy',
    //         {
    //             extend: 'excel',
    //             messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
    //         },
    //         {
    //             extend: 'pdf',
    //             messageBottom: null
    //         },
           
    //     ],
    //  "ordering":false,
    //   "pageLength":10,
    //   "searching":false,
    //   "LengthChange":true,
    //   "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},

    
    // }


    //   );

     $('#table1').dataTable({
                responsive: false,
                lengthChange: false,
                dom:
                    /*	--- Layout Structure 
                    	--- Options
                    	l	-	length changing input control
                    	f	-	filtering input
                    	t	-	The table!
                    	i	-	Table information summary
                    	p	-	pagination control
                    	r	-	processing display element
                    	B	-	buttons
                    	R	-	ColReorder
                    	S	-	Select

                    	--- Markup
                    	< and >				- div element
                    	<"class" and >		- div with a class
                    	<"#id" and >		- div with an ID
                    	<"#id.class" and >	- div with an ID and a class

                    	--- Further reading
                    	https://datatables.net/reference/option/dom
                    	--------------------------------------
                     */
                    "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
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
                ]
            });

    // $('#table1').DataTable(
    // { 
    //    dom: 'Bfrtip',
    //     buttons: [
    //         'copy',
    //         {
    //             extend: 'excel',
    //             messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
    //         },
    //         {
    //             extend: 'pdf',
    //             messageBottom: null
    //         },
           
    //     ],
    //  "ordering":false,
    //   "pageLength":10,
    //   "searching":false,
    //   "LengthChange":true,
    //   "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},

    
    // }


    //   );
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
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
                            <i class='subheader-icon fal fa-chart-area'></i>Summary</span>

                        </h1>
                    </div>
          <!doctype html>
<?php if ($this->session->userdata('userStus') == 1) { ?>
<html class="no-js" lang="en">
<!--<![endif]-->

<?php $this->load->View('Adminheader'); ?>
<style>
  .Range{
    color:red;
  }
  </style>
<body>

<div id="right-panel" class="right-panel">
<?php
$Month = date('m');
$Year = date('Y');
$Day = date('d');
$CurrentDate = $Year . '-' . $Month . '-' . $Day;
?>  
<script src="<?php echo base_url(); ?>assets/js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
      function Myfunction() {

        var Domain = $("#AMB").val();
        //
    //alert(Domain);
        url = '<?php echo base_url('MIS/Summary/data/'); ?>' + Domain 
//alert(url);
   $.get(url, function(data) {

     $("#content").html(data)
 }) 
      }
    </script>

    <div class="row clearfix" style="margin-left: -60px;">
         
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="form-group">
              <!-- <div class="form-line">
                <input type="Date" name="Sdate" id="AMB" class="form-control" value="<?php echo $CurrentDate; ?>" onchange="Myfunction()" min="2019-01-01">
              </div> -->
            </div>
          </div>
        </div>
      
   
      
      
      <div id="content">
<center>
<table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 65%; ">
            <thead class="bg-primary-200 text-light" style="color: #fff;">
              <th colspan="6" style="text-align: center;">TM and LFB Circumference and Weight Summary Report </th>
            </thead>
            <thead class="bg-primary-200 text-light" style="color: #fff;">
              <th colspan="6" style="text-align: center;">Cutting Weight  Details </th>
            </thead>
            <tr style="font-weight: bold;">
              <td>Factory Code</td>
              <td>Shape</td>
              <td> Material</td>
                <td> Min (gm)</td>
              <td> Max (gm)</td>
            
              <td> Range (gm)</td>
            </tr>
            <tr>
              <td colspan="6">Material Type:PU</td>
            </tr>
<?php foreach ($Data1 as $Key) {

    $FactoryCode = $Key['FactoryCode'];
    $ShpeName = $Key['ShpeName'];
    $MatName = $Key['MatName'];
    $PUMax = $Key['PUMax'];
    $PUMin = $Key['PUMin'];
    $PUStartRange = $Key['PUStartRange'];
    $PUEndRange = $Key['PUEndRange'];
    $Range = Round($PUStartRange) . '-' . Round($PUEndRange);
    ?>
                <td><?php echo $FactoryCode; ?></td>
                <td><?php echo $MatName; ?></td>
                <td><?php echo $ShpeName; ?></td>
                 <td class="Min"><?php echo Round($PUMin); ?></td>
                <td class="max"><?php echo Round($PUMax); ?></td>
               
                <td class="Range"><?php echo $Range; ?></td>

            </tr>
            <?php
} ?>
 <tr>
<td colspan="6">Material Type:Foam</td>
            </tr>
<?php //print_r($foam);

foreach ($foam as $Key) {

    $FactoryCode = $Key['FactoryCode'];
    $FactoryCode = $Key['FactoryCode'];
    $ShpeName = $Key['ShpeName'];
    $MatName = $Key['MatName'];
    $FoamMax = $Key['FoamMax'];
    $FoamMin = $Key['FoamMin'];
    $PUStartRange = $Key['PUStartRange'];
    $PUEndRange = $Key['PUEndRange'];
    $Range = Round($PUStartRange) . '-' . Round($PUEndRange);
    ?>
                <td><?php echo $FactoryCode; ?></td>
                <td><?php echo $MatName; ?></td>
                <td><?php echo $ShpeName; ?></td>
                  <td class="min"><?php echo Round($FoamMin); ?></td>
               <td class="max"><?php echo Round($FoamMax); ?></td>
            
              <td class="Range"><?php echo $Range; ?></td>

            </tr>
            <?php
} ?>
 <tr>
<td colspan="6">Material Type:Fabric</td>
            </tr>
<?php foreach ($fabric as $Key) {

    $FactoryCode = $Key['FactoryCode'];
    $FactoryCode = $Key['FactoryCode'];
    $ShpeName = $Key['ShpeName'];
    $MatName = $Key['MatName'];
    $FabricMax = $Key['FabricMax'];
    $FabricMin = $Key['FabricMin'];
    $PUStartRange = $Key['PUStartRange'];
    $PUEndRange = $Key['PUEndRange'];
    $Range = Round($PUStartRange) . '-' . Round($PUEndRange);
    ?>
                <td><?php echo $FactoryCode; ?></td>
                <td><?php echo $MatName; ?></td>
                <td><?php echo $ShpeName; ?></td>
                 <td class="min"><?php echo Round($FabricMin); ?></td>
                  <td class="max"><?php echo Round($FabricMax); ?></td>
           
            <td class="Range"><?php echo $Range; ?></td>

            </tr>
            <?php
} ?>
 

</table>
</center>

<center>
 <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 65%;  ">
  <thead class="bg-primary-200 text-light" style="color: #fff;"  >
    <th colspan="9" style="text-align: center;">Carcas Circumference and Weight  Details </th>
</thead>
<tr style="font-weight: bold;">
              <td>Factory Code</td>
              <td>Shape</td>
              <td> Material</td>
               <td> Min (gm)</td>
              <td> Max (gm)</td>
             
              <td> Range (gm)</td>
               <td> Cir Min (cm)</td>
              <td> Cir Max (cm)</td>
             
              <td>Cir  Range (cm)</td>
            </tr>
  <?php foreach ($Data2 as $Key) {

      $FactoryCode = $Key['FactoryCode'];
      $ShpeName = $Key['ShapeName'];
      $MatName = $Key['MatName'];
      $CarcassMax = $Key['CirMax'];
      $CarcassMin = $Key['CirMin'];
      $CarcCircumStartRange = $Key['CarcCircumStartRange'];
      $CarcCircumEndRange = $Key['CarcCircumEndRange'];
      $CarcWghtStartRange = $Key['CarcWghtStartRange'];
      $CarcWghtEndRange = $Key['CarcWghtEndRange'];
      $CarcassCircumMin = $Key['Cirweightmin'];
      $CarcassCircummax = $Key['Cirweightmax'];
      $Range = Round($CarcWghtStartRange) . '-' . Round($CarcWghtEndRange);
      $CRange =
          Round($CarcCircumStartRange, 2) . '-' . Round($CarcCircumEndRange, 2);
      ?>
              <tr>
                <td><?php echo $FactoryCode; ?></td>
                <td><?php echo $ShpeName; ?></td>
                <td><?php echo $MatName; ?></td>
                <td class="min"><?php echo Round($CarcassCircumMin, 2); ?></td>
                <td class="max"><?php echo Round($CarcassCircummax, 2); ?></td>
                  
              
                <td class="Range"><?php echo $Range; ?></td>
                  <td class="min"><?php echo Round($CarcassMin, 2); ?></td>
                <td class="max"><?php echo Round($CarcassMax, 2); ?></td>
              
                <td class="Range"><?php echo $CRange; ?></td>
            </tr>
 <?php
  } ?>
  </center>
  <center>
          <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 65%;">
            <thead class="bg-primary-200 text-light" style="color: #fff;">
              <th colspan="7" style="text-align: center;">Assembling Weight  Details </th>
            </thead>
            <tr style="font-weight: bold;">
             <td>Factory Code</td>
             <td>Article</td>
             <td>Size</td>
                  <td>Min (gm)</td>
              <td>Max (gm)</td>
          
              <td> Range (gm))</td>
            </tr>
            
            <tr>
              <?php foreach ($Data4 as $keys) {

                  $FactoryCode = $keys['FactoryCode'];
                  $ArtCode = $keys['ArtCode'];
                  $size = $keys['Size'];
                  $AssemblyMax = $keys['AssemblyWghtMAx'];
                  $AssemblyMin = $keys['AssemblyWghtMin'];
                  $AssemblyWghtStartRange = $keys['AssemblyWghtStartRange'];
                  $AssemblyWghtEndRange = $keys['AssemblyWghtEndRange'];
                  $Range =
                      Round($AssemblyWghtStartRange) .
                      '-' .
                      Round($AssemblyWghtEndRange);
                  ?>
                <td><?php echo $FactoryCode; ?></td>
                 <td><?php echo $ArtCode; ?></td>
                  <td><?php echo $size; ?></td>
                    <td class="min"><?php echo Round($AssemblyMin); ?></td>
                <td class="max"><?php echo Round($AssemblyMax); ?></td>
              
                <td class="Range"><?php echo $Range; ?></td>
            </tr>
          <?php
              } ?>
          </table>
        </center>
  <center>
 <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 65%;">
  <thead class="bg-primary-200 text-light" style="color: #fff;"  >
    <th colspan="17" style="text-align: center;">Dipping Air Pressure, Circumference and Weight Details </th>
</thead>
  <tr style="font-weight: bold;">
              <th style="text-align: left;">Factory Code</th>
              <th style="text-align: center;"> Size</th>
              <th style="width: 10%;" style="text-align: left;">Material Name</th>
              <th style="width: 3%;">Air Pressure Before Conveyor (bar)</th>
              <th style="width:5%;">Air Pressure After Conveyor (bar)</th>
              <th> Range</th>
              <th style="width:5%;">Weight Before Brushing (gm)</th>
              <th style="width:5%;"> Weight After Brushing (gm)</th>
              <th>Range</th>
              <th colspan="2"> Cir. Before Brushing (cm)</th>

              <th> Range</th>
              <th colspan="2"> Cir. After Brushing (cm)</th>


              <th> Range</th>
            </tr>

 
  <tr>
     <?php foreach ($Data3 as $Data1) {

         $FactoryCode = $Data1['VendorName'];
         $Size = $Data1['Size'];

         $MaterialName = $Data1['MaterialName'];

         $AirPBC = $Data1['AirPBC'];
         $AirPAC = $Data1['AirPAC'];
         $AirSR = $Data1['AirPSR'];
         $AirER = $Data1['AirPER'];
         $CarcasWBB = $Data1['CarcasWBB'];
         $CarcasWAB = $Data1['CarcasWAB'];
         $WeightSR = $Data1['WeightSR'];
         $WeightER = $Data1['WeightER'];
         $CarcasCirBB1 = $Data1['CarcasCirBB1'];
         $CarcasCirBB2 = $Data1['CarcasCirBB2'];
         $CirSR = $Data1['CirSR'];
         $CirER = $Data1['CirER'];

         $CarasCirAB1 = $Data1['CarasCirAB1'];
         $CarasCirAB2 = $Data1['CarasCirAB2'];
         $WeightASR = $Data1['WeightASR'];
         $WeightAER = $Data1['WeightAER'];
         ?>
                <td style="text-align: left;"><?php echo $FactoryCode; ?></td>
                <td style="text-align: center;"><?php echo $Size; ?></td>
                <td style="text-align: left;" style="width: 10%;"><?php echo $MaterialName; ?></td>
                <td class="min"><?php echo $AirPBC; ?> </td>
                <td class="Max"><?php echo $AirPAC; ?></td>
                <td class="Range"><?php echo $AirSR; ?>-<?php echo $AirER; ?></td>
                <td class="min"><?php echo Round($CarcasWBB); ?> </td>
                <td class="Max"><?php echo Round($CarcasWAB); ?> </td>
                <td class="Range"><?php echo $WeightSR; ?>-<?php echo $WeightER; ?></td>
                <td class="min"><?php echo $CarcasCirBB1; ?> </td>
                <td class="Max"><?php echo $CarcasCirBB2; ?></td>
                <td class="Range"><?php echo $CirSR; ?>-<?php echo $CirER; ?></td>
                <td class="min"><?php echo $CarasCirAB1; ?></td>
                <td class="Max"><?php echo $CarasCirAB2; ?></td>
                <td class="Range"><?php echo $WeightASR; ?>-<?php echo $WeightAER; ?></td>
            </tr>
 <?php
     } ?>
  </center>
  <center>
 <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 65%;">
  <thead class="bg-primary-200 text-light" style="color: #fff;"  >
    <th colspan="7" style="text-align: center;">Pannel Shape Weight Details </th>
</thead>
  <tr style="font-weight: bold;">
              <td>Factory Code</td>
              <td style="text-align: center;">Size</td>
              <td>Shape</td>
              <td>Material</td>
              <td>Min (gm)</td>
              <td>Max (gm)</td>
              
              <td> Range (gm)</td>
            </tr>
 
  <tr>
     <?php foreach ($Data5 as $Data1) {

         $Type = $Data1['Type'];
         $FactoryCode = $Data1['FactoryCode'];
         $ShpeName = $Data1['ShapeName'];
         $MatName = $Data1['MatName'];
         $PSMax = $Data1['PSMax'];
         $PSMin = $Data1['PSMin'];
         $PanelShapeStartRange = $Data1['PanelShapeStartRange'];
         $PanelShapeEndRange = $Data1['PanelShapeEndRange'];
         $Range =
             Round($PanelShapeStartRange) . '-' . Round($PanelShapeEndRange);
         ?>
                <td><?php echo $FactoryCode; ?></td>
                <td style="text-align: center;"><?php echo $Type; ?></td>
                <td><?php echo $ShpeName; ?></td>
                <td><?php echo $MatName; ?></td>
                  <td class="min"><?php echo Round($PSMin); ?></td>
                <td class="max"><?php echo Round($PSMax); ?></td>
              
                <td class="Range"> <?php echo $Range; ?></td>
            </tr>
 <?php
     } ?>
  </center>
  <center>
<div id="content">
 <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 65%; ">
  <thead class="bg-primary-200 text-light" style="color: #fff;"  >
    <th colspan="10" style="text-align: center;">TMB Final Inspection Circumference and Weight Details </th>
</thead>
    <tr style="font-weight: bold;">
              <td style="width: 20%">Factory Code</td>
              <td>Article Code</td>
              <td style="text-align: left;">Model Name</td>
              <td style="text-align: left;">Size</td>
               <td> Min (gm)</td>
              <td> Max (gm)</td>
             
              <td> Range (gm)</td>
               <td> Cir Min (cm)</td>
              <td>Cir Max (cm)</td>
             
              <td> Cir Range (cm)</td>
            </tr>
 
  <tr>
     <?php foreach ($Data6 as $Data1) {

         $ArtSize = $Data1['ArtSize'];
         $FactoryCode = $Data1['FactoryCode'];
         $ArtCode = $Data1['ArtCode'];
         $ModelName = $Data1['ModelName'];
         $FQMax = $Data1['FQMax'];
         $FQMin = $Data1['FQMin'];
         $StrtRange = $Data1['StrtRange'];
         $EndRange = $Data1['EndRange'];
         $StrtWeight = $Data1['StrtWeight'];
         $EndWeight = $Data1['EndWeight'];
         $Range = Round($StrtWeight) . '-' . Round($EndWeight);
         $Circummin = $Data1['Circummin'];
         $Circummax = $Data1['Circummax'];
         $CRange = Round($StrtRange, 2) . '-' . Round($EndRange, 2);
         ?>
                <td><?php echo $FactoryCode; ?></td>
                <td style="text-align: left;"><?php echo $ArtCode; ?></td>
                <td><?php echo $ModelName; ?></td>
                <td><?php echo $ArtSize; ?></td>
                  <td class="min"><?php echo Round($FQMin); ?></td>
                <td class="max"><?php echo Round($FQMax); ?></td>
              
                <td class="Range"><?php echo $Range; ?></td>
                 <td class="min"><?php echo Round($Circummin, 2); ?></td>
                <td class="max"><?php echo Round($Circummax, 2); ?></td>
              
                <td class="Range"><?php echo Round($CRange, 2); ?></td>

            </tr>
 <?php
     } ?>
 </div>
  </center>
  <center>
 <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 65%;">
  <thead class="bg-primary-200 text-light" style="color: #fff;"  >
    <th colspan="10" style="text-align: center;">LFB Final Inspection Circumference and Weight Details  </th>
</thead>
 <tr style="font-weight: bold;"> 


<td>Article Code</td>
  <!-- <td style="text-align: left;">Model Name</td> -->
  <td style="text-align: left;">Size</td>
 <td style="text-align: left;">Ball Cat. Type</td>
  <td style="text-align: left;">Min Range (gm)</td>
  <td style="text-align: left;">Max Range (gm)</td>
  
    <td style="text-align: left;">Range (gm) </td>

  <td style="text-align: left;"> Cir Min (cm) </td>
  <td style="text-align: left;">Cir Max  (cm)</td>
  
    <td style="text-align: left;">Cir Range (cm)</td>

  </tr>

  <?php foreach ($Data7 as $Key) { ?>
  <tr>
 
 <td><?php echo $Key['ArtCode']; ?></td>
 <!-- <td><?php echo $Key['ModelName']; ?></td> -->
 <td><?php echo $Key['ArtSIze']; ?></td> 
  <td><?php echo $Key['BallType']; ?></td> 
    <td><?php echo Round($Key['WeightMin'], 0); ?></td> 
   <td><?php echo Round($Key['WeightMAX'], 0); ?></td> 
  
     <td class="Range"><?php echo Round(
         $Key['StrtWeight'],
         0
     ); ?>-<?php echo Round($Key['EndWeight'], 0); ?></td> 

     <td><?php echo Round($Key['CirMin'], 2); ?></td> 
   <td><?php echo Round($Key['CirMAx'], 2); ?></td> 
  
     <td class="Range"><?php echo Round(
         $Key['StrtRange'],
         2
     ); ?>-<?php echo Round($Key['EndRange'], 2); ?></td> 
  </tr>
 <?php } ?>
 </table>
 <table style="width: 65%;">
  <thead style="border:none;">
    <th colspan="2" style="text-align: center;"></th><th colspan="2" style="text-align: center;"></th><th colspan="2" style="text-align: center;"></th>
</thead>

<thead  style="border:none;" >
    <th colspan="2" style="text-align: center;">HOD Quality</th><th colspan="2" style="text-align: center;"></th><th colspan="2" style="text-align: center;">General Manager </th>
</thead>
 </table>
  </center>
</div>
<?php $this->load->View('AdminFooter'); ?>
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
  
<?php } else {redirect('Welcome/index');}
?>


          </div>
        </main>
      </div>
    </div>
  </div>
</div>
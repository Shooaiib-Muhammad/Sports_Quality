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
                            <i class='subheader-icon fal fa-chart-area'></i> Asembling</span>

                        </h1>
                    </div>
                                
<?php
if ($this->session->userdata('userStus')==1) {
?>

<body>

<div id="right-panel" class="right-panel">

<style>

#container {
  height: 420px; 
}

.highcharts-figure, .highcharts-data-table table {
  min-width: 360px; 
  max-width: 820px;
  margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}

</style>
<link href="<?php link_file('assets/qa_assets/main.css')?>" rel="stylesheet">

<script src="js/jquery.js" type="text/javascript"></script>

    </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js" integrity="sha512-gtII6Z4fZyONX9GBrF28JMpodY4vIOI0lBjAtN/mcK7Pz19Mu1HHIRvXH6bmdChteGpEccxZxI0qxXl9anY60w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
           
<script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
<script>


function CallCombox(){
 Domain = $('#Select').val();
  url = "<?php echo base_url('MIS/FinalQC/fact2/') ?>"+Domain
//alert(Domain);
//  alert(url);
  $.get(url, function (res) {
                    
                    data = res.data
                    //alert(data); 
                    options = "<option value=''>Select Size </option>"
                    for (i = 0; i < data.length; i++) {
                        options +=  '<option value="' + data[i].ArtSize + '">' + data[i].ArtSize + '</option>'
                    }
                    $("#SelectBox").html(options)
});

}

function MainFunction(){
  Art = $('#Select').val();
  size = $('#SelectBox').val();
  var splitter=size.split('/');
  Sdate = $('#SDate').val();
  EDate = $('#EDate').val();
  //alert(fc);
  url = "<?php echo base_url('MIS/Asembling/searchQuery/') ?>"+Sdate+"/"+EDate+"/"+Art+"/"+splitter[0]+"/"+splitter[1];
  //alert(url);
 $.get(url, function(data) {
    //
  
                    fillReport(data,true)
                });

   function fillReport(data, group) {

                
                $('#content').html(data);
                $('#forming-table').dataTable(getOptions(group))


            }
function getOptions(group){
               var options = {
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
                    "ordering": false,
                    "pageLength": 10,
                    "searching": false,
                    "LengthChange": true,
                    "oLanguage": {
                        "sEmptyTable": "Data Is Not Available Yet!"
                    },

                }

           


                return options
            }


}
 



</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


<?php

        

$Month=date('m');
$Year=date('Y');
$Day=date('d');
$CurrentDate=$Year.'-'.$Month.'-'.$Day;
  ?>


<!-- <div class="row clearfix"> -->
<div class="row">
<div class="col-md-1">
<div class="form-group">
<div class="input-group">
  <label for="email">Select Art.Code</label>
<select  class="form-control" name="Type"  required="true" onchange="CallCombox()" id="Select" style="width: 100%" >    
<option value="" data-live-search="true">Select Art. Code</option>  
<?php
                                        if (isset($getArticleData)) {
                                            foreach ($getArticleData as $Key) {
                                               
                                        ?>     
    <option value="<?php echo $Key['ArtCode']; ?>"><?php echo $Key['ArtCode']; ?></option>
                        <?php
                                            }
}
?>
</select>
</div>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<div class="form-line">
     <label for="email">Select Material Size :</label>
<select class="form-control show-tick" data-live-search="true" name="materialType" id="SelectBox" style="width: 100%;" required="required" >
<option   value="">Select Material Size</option>
</select>
</div>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<input class="form-control" type="Date" id="SDate" name="Sdate" value="<?php echo $CurrentDate;?>" style="width: 100%" >
</div>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<input class="form-control" type="Date" id="EDate"  name="Edate" value="<?php echo $CurrentDate;?>" style="width: 100%" >
</div>
</div>
</div>
<div class="col-md-1">
<div class="form-group">
<label class=" form-control-label"></label>
<div style="margin:20px" class="input-group">
<br>
<br>
<button type="submit" id="submit" name="submit"  onclick="MainFunction()" class="btn btn-success btn-block" style="border-radius: 15px;" ><i class=" fa fa-search"></i> Search</button>
</div>                    
</div>
</div>
</div>

</form>
<?php
  if(isset($CarcasData)){
    ?>
  <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width:70%;">
  <thead class="bg-primary-200 text-light" style="color: #fff;"  >
    <th colspan="6" style="text-align: center;">Assembling Weight Between of (<?php echo $Sdate;?>) And (<?php echo $Edate;?>)</th>
</thead>

</table>
<table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 65%;">
<thead class="bg-primary-200 text-light" style="color: #fff;">
  <th>Hours</th>
  <th>Size</th>
   <th>Weight Range</th>
   
     <th>Weight</th>
     
      <th>Cir. Range</th>
      <th>Circumference</th>
</thead>
<tbody>
<tr>
<?php
Foreach($CarcasData as $d){
  $HourName=$d->HourName;
  $Size=$d->Size;
  ?>

<td style="text-align: center;"><?php echo $HourName;?></td>

<td style="text-align: center;"><?php echo $Size;?></td>

<td style="text-align: right; color: red;"><?php Echo Round($d->CarcWghtStartRange);?>-<?php Echo Round($d->CarcWghtEndRange);?></td>

  <?php if(($d->CarcassWght>$d->CarcWghtEndRange) || ($d->CarcassWght<$d->CarcWghtStartRange)){
?>

<td style="text-align: right; background-color:red;color:#fffbfb;"><?php Echo Round($d->CarcassWght);?></td>
<?php

}else{
?>
<td style="text-align: right; color: green;"><?php Echo Round($d->CarcassWght);?></td>
<?php
}
?>

<td style="text-align: right; color: red;"><?php Echo Round($d->CarcCircumStartRange);?>-<?php Echo Round($d->CarcCircumEndRange);?></td>

<?php if(($d->CarcassCircum>$d->CarcWghtEndRange) || ($d->CarcassCircum<$d->CarcWghtStartRange)){
?>

<td style="text-align: right; background-color:red;color:#fffbfb;"><?php Echo Round($d->CarcassCircum);?></td>
<?php

}else{
?>
<td style="text-align: right; color: green;"><?php Echo Round($d->CarcassCircum);?></td>
<?php
}
?>

  </tr>
  </tbody>
<?php

}
?>

    <?php
  }else{
  
  ?>
  <div id="content">
<center>
 <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 50%; ">
  <thead class="bg-primary-200 text-light" style="color: #fff;"  >
    <th colspan="6" style="text-align: center;">Assembling Details (<?php echo $Day;?>/<?php echo $Month;?>/<?php echo $Year;?> )</th>
</thead>
 <tr style="font-weight: bold;"> 
<td>Factory Code</td>

<td>Size</td>
<td>ArtCode</td>

  </tr>
  <?php



foreach($getCarsasData as $Key){
 
 ?>
  <tr>
 <td><?php Echo $Key['FactoryCode'];?></td>
 <td><?php Echo $Key['Size'];?></td>
 <td><?php Echo $Key['ArtCode'];?></td> 

  </tr>
 <?php
}
 
 ?>
  </center>
  </div>
  <div id="container"></div>


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
<?php

  }

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
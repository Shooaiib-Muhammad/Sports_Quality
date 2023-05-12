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
                        <li class="breadcrumb-item"><a href="<?php echo base_url(
                                                                    'index.php/DashboardController'
                                                                ); ?>">Dashboard</a></li>
                                                                <li class="breadcrumb-item"> Final Qc</li>


                        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                    </ol>

          
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i>Final Qc</span>

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



<?php

        

$Month=date('m');
$Year=date('Y');
$Day=date('d');
$CurrentDate=$Year.'-'.$Month.'-'.$Day;
  ?>



<!-- <div class="row clearfix"> -->
  <div class="row">
  <div class="col-md-2">
<div class="form-group">
<div class="input-group">
  <label for="email"><i class="fas fa-calendar-alt; "></i>Select Art.Code</label>
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
     <label for="email"><i class="fas fa-calendar-alt"></i>Select Size :</label>
<select class="form-control show-tick" data-live-search="true" name="materialType" id="SelectBox" style="width: 100%;" required="required" >
<option value="">Select Size</option>
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
<button  name="submit"  onclick="FianlQc_func()" class="btn btn-success btn-block" style="border-radius: 15px;" ><i class=" fa fa-search"></i> Search</button>
</div>                    
</div>
</div>
  </div>


<div id="content">
 <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 100%; margin-top:100px">
  <thead class="bg-primary-200 text-light" style="color: #fff;"  >
    <th colspan="6" style="text-align: center;">Final QC Details (<?php echo $Day;?>/<?php echo $Month;?>/<?php echo $Year;?> )</th>
</thead>
    <tr style="font-weight: bold;"> 
      <td>Factory Code</td>
      <td>Article Code</td>
      <td>  Model Name</td>
      <td > Size</td>
    </tr>
  <?php
foreach($getCarsasData as $Key){
 ?>
  <tr>
 <td><?php Echo $Key['FactoryCode'];?></td>
 <td><?php Echo $Key['ArtCode'];?></td>
 <td><?php Echo $Key['ModelName'];?></td>
 <td><?php Echo $Key['ArtSize'];?></td>
 </tr>
 <?php
}

 ?>
 </div>
<!-- </div> -->
<script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js" ></script>
      
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>

 
<script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $("#Select").select2({
            width:'100%'
          })
        })
          /* Activate smart panels */
          $('#js-page-content').smartPanel();
      </script>
      

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


function FianlQc_func(){
  //alert('i am here');
  Article = $('#Select').val();
  Size = $('#SelectBox').val();
  var splitter=Size.split('/');
  //alert(typeof splitter);
  Sdate = $('#SDate').val();
  EDate = $('#EDate').val();
  url = "<?php echo base_url('MIS/FinalQC/finalQc/') ?>"+Article+"/"+Sdate+"/"+EDate+"/"+splitter[0]+"/"+splitter[1];
  //alert(url);
   $.get(url, function(data) {
    //alert(data);
   console.log("Table HTML",data);
                    fillReport(data,true)
                });

     function fillReport(data,group) {
                   console.log("Table HTML",data);
                  $('#content').html("");
                $('#content').append(data);
              // $('#forming-table').dataTable(getOptions(group))
             

            }

}
</script>
<?php

  

}else{
    redirect('Welcome/index');
}
?>
</body>
          </div>
        </main>
      </div>
    </div>
  </div>
</div>

<?php 
}
?>
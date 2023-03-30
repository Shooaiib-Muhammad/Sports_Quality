
<?php
if (!$this->session->has_userdata('user_id')) {
    redirect('');
} else {
?>
<div id="panel-1" class="panel">
    
<?php $this->load->view('includes/new_header'); ?>
<div class="page-wrapper">
<div class="page-inner">
<?php $this->load->view('includes/new_aside'); ?>
<div class="page-content-wrapper">
<?php $this->load->view('includes/top_header.php'); ?>
<main id="js-page-content" role="main" class="page-content">
<div class="col-lg-12" style="margin-bottom:20px">
<ol class="breadcrumb page-breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(
                                                                    'index.php/DashboardController'
                                                                ); ?>">Dashboard</a></li>
                                                                <li class="breadcrumb-item"> Hand Stitch Ball</li>


                        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                    </ol>

    
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i>HS (Hand Stitch Ball)</span>

                        </h1>
                    </div>

                      <!-- Start here with columns -->
                      <!doctype html>
<?php
if ($this->session->userdata('userStus')==1) {
?>
<html class="no-js" lang="en">
<!--<![endif]-->


<body>

<div id="right-panel" class="right-panel">

      

  <?php
        
if($Record) {

$Date1;
$Date2;
 

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
<form action="<?php echo base_url('MIS/HS/getAllData'); ?>" method="POST">
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<input class="form-control" type="Date" name="Date1" value="<?php echo $StartDateeee;?>" >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<input class="form-control" type="Date" name="Date2" value="<?php echo $EndDateeee;?>" >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label"></label>
<div class="input-group">
<br>
<br>
<button style="margin:17px" type="submit" id="submit" name="submit" class="btn btn-primary " ><i class=" fa fa-search"></i> Search</button>
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
<form action="<?php echo base_url('MIS/HS/getAllData'); ?>" method="POST">
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<input class="form-control" type="Date" name="Date1" value="<?php echo $CurrentDate;?>" >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<input class="form-control" type="Date" name="Date2" value="<?php echo $CurrentDate;?>" >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label"></label>
<div class="input-group">
<br>
<br>
<button style="margin:17px" type="submit" id="submit" name="submit" class="btn btn-primary " ><i class=" fa fa-search"></i> Search</button>
</div>                    
</div>
</div>
</div>

</form>

  <?php
}
if($Record) {
  $data_points1 = array();
  $artcode = array();
foreach($Record as $key) {
$point1 = array("label" => $key['ArtCode'] , "y" => Round($key['TotalChecked']));
array_push($data_points1, $point1);
array_push($artcode, $key['ArtCode']); 
 
}
$data_points2 = array();
foreach($Record as $key1) {
$point2 = array("label" => $key1['ArtCode'] , "y" =>  Round($key1['OutPut']));
array_push($data_points2, $point2);       
}
$data_points4 = array();
foreach($Record as $key3) {
$PPass = $key3['OutPut'];
$PChecked = $key3['TotalChecked'];
if ($PPass==0 or $PChecked==0) {
$PRFT=0;
}else{
$PRFT=$PPass/$PChecked*100;
}
$point4 = array("label" => $key3['ArtCode'] , "y" =>  Round($PRFT));
array_push($data_points4, $point4);  
}
        ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.min.js" integrity="sha512-FJ2OYvUIXUqCcPf1stu+oTBlhn54W0UisZB/TNrZaVMHHhYvLBV9jMbvJYtvDe5x/WVaoXZ6KB+Uqe5hT2vlyA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>


<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
<script type="text/javascript">
window.onload = function() {
  Highcharts.chart('chartContainer1', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    subtitle: {
        
    },
    xAxis: {
        categories: <?php echo json_encode($artcode, JSON_NUMERIC_CHECK); ?>,
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0">{point.y:.1f}</td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
           color: '#33cccc',
            name: 'Check',
            data: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
        }, {
            color: '#1a8cff',
            name: 'Pass',
            data: <?php echo json_encode($data_points2, JSON_NUMERIC_CHECK); ?>
        }]
    // series: [
    //     { 
    //         name: "",
    //         data: <?php echo json_encode($data_points2, JSON_NUMERIC_CHECK); ?>
    //     }
        
    // ]
});
// var chart = new CanvasJS.Chart("chartContainer1", {
//   animationEnabled: true,
//   title:{
    
//   },
//    axisY:{
  
//      },
//   legend:{
//     cursor: "pointer",
//     fontSize: 18,
//     itemclick: toggleDataSeries
//   },
//   toolTip:{
//     shared: true
//   },
//   data: [{
//    type: "column",
//         yValueFormatString: "#",
//        // indexLabel: "{y} ",
//  indexLabelFontSize: 18, 
//   name: "Check",

//         indexLabelPlacement: "top",
//        color:"#33cccc", 
//     dataPoints: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
//   },{
//    type: "column",
//         yValueFormatString: "#",
//        // indexLabel: "{y} ",
//  indexLabelFontSize: 18, 
//   name: "Pass",
// indexLabelPlacement: "top",
//        color:"#1a8cff", 
//     dataPoints: <?php echo json_encode($data_points2, JSON_NUMERIC_CHECK); ?>
//   }]
// });

// chart.render();



// function toggleDataSeries(e){
//   if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
//     e.dataSeries.visible = false;
//   }
//   else{
//     e.dataSeries.visible = true;
//   }
//   chart.render();
// }

Highcharts.chart('chartContainer2', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    subtitle: {
        
    },
    xAxis: {
        categories: <?php echo json_encode($artcode, JSON_NUMERIC_CHECK); ?>,
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0">{point.y:.1f}</td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [
        { 
            color: '#00e6b8',
            name: "Check",
            data: <?php echo json_encode($data_points4, JSON_NUMERIC_CHECK); ?>
        }
    ]
});



// var chart = new CanvasJS.Chart("chartContainer2", {
//   animationEnabled: true,
//   title:{
   
//   },
//    axisY:{
    
//      },
//   legend:{
//     cursor: "pointer",
//     fontSize: 18,
//     itemclick: toggleDataSeries
//   },
//   toolTip:{
//     shared: true
//   },
//   data: [{
//    type: "column",
//         yValueFormatString: "#",
//        // indexLabel: "{y}% ",
//  indexLabelFontSize: 18, 
//   name: "RFT",

//         indexLabelPlacement: "top",
//        color:"#00e6b8",  
//     dataPoints: <?php echo json_encode($data_points4, JSON_NUMERIC_CHECK); ?>
//   }]
// });

// chart.render();


// function toggleDataSeries(e){
//   if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
//     e.dataSeries.visible = false;
//   }
//   else{
//     e.dataSeries.visible = true;
//   }
//   chart.render();
// }


}
 </script>
 <div class="row">
 <div class="col-lg-6">
<div class="card">
<div class="card-body">
<h3 class="mb-3">Production</h3>
<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="card">
<div class="card-body">
<h3 class="mb-3">RFT</h3>
<div id="chartContainer2" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
 </div>
<div class="col-lg-12">
<div class="card">
<div id="panel-1" class="panel">
<div class="panel-hdr">
<div class="card-header">
<strong class="card-title">Hand Stitch Ball Production </strong>
</div>
</div>
<div class="card-body table-responsive"> 
<table  id="table" class="table table-bordered table-hover table-responsive table-striped w-100" style="width: 100%;">
<thead class="bg-primary-200 text-light">
                <style type="text/css">
                  td{
                    text-align: center;
                  }
              
                </style>                      
<tr style="font-weight: bold; color: #fff;"><td style="text-align: left;">Article</td> 
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
<td  style="width:10%; text-align: center;" ><?php echo Round($RFT);?>%</td>
</tr>
<?php
 }

} else{ ?>
<tr>
<th colspan="5"> <center>No Record Available Yet!</center> </th>
</tr>
<?php }
?><?php 
if($Sum) {
foreach($Sum as $key) {

$TotalChecked = $key['TotalChecked'];
$PassQty = $key['OutPut'];
$Fail = $key['Fail'];
if ($PassQty==0 or $TotalChecked==0) {
$RFT=0;
}else{
$RFT=$PassQty/$TotalChecked*100;
}
?> 
<tr style="color: black" >
<td style="width:10%; text-align: left;">Total</td>
<td  style="width:10%; text-align: center;" ><?php echo Round($TotalChecked);?></td>
<td  style="width:10%; text-align: center;" ><?php echo Round($PassQty);?></td>

<td  style="width:10%; text-align: center;" ><?php echo Round($Fail);?></td>
<td  style="width:10%; text-align: center; " ><?php echo Round($RFT);?>%</td>
</tr>
<?php
 }

} ?>
</tbody>
</table> 
</div>
</div>
</div>
</div>
  <?php

}

?>


<!-- <script>
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
</script> -->
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
         $(document).ready(function() {
            // LoadData(stDate, enDate);

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


        });
        </script>
<?php
}else{
    redirect('Welcome/index');
}
?>
</div>
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
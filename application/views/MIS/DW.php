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
                                                                <li class="breadcrumb-item"> Date Wise</li>


                        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                    </ol>

                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i> DW (Date Wise)</span>

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
$FC;
$Process;
$SYear=substr($Date1,0,4);
$SMonth=substr($Date1,5,2);
$SDay=substr($Date1,-2,2);
$EYear=substr($Date2,0,4);
$EMonth=substr($Date2,5,2);
$EDay=substr($Date2,-2,2);
$StartDateeee=$SYear.'-'.$SMonth.'-'.$SDay;
$EndDateeee=$EYear.'-'.$EMonth.'-'.$EDay;
$StartDate=$SDay.'/'.$SMonth.'/'.$SYear;
$EndDate=$EDay.'/'.$EMonth.'/'.$EYear;
  if ($FC==2) {
    $FactoryCode='Thermo Bounded Ball';
  }elseif ($FC==3) {
    $FactoryCode='Machine Stitch Ball';
  }elseif ($FC==4) {
    $FactoryCode='Airless Mini Ball';
  }
if ($Process==22) {
  $ProcessName='By Date Wise';
}elseif ($Process==33) {
  $ProcessName='By Line Wise';
}elseif($Process==44) {
  $ProcessName='By Summary';
}
?>
<form  action="<?php echo base_url('MIS/DW/AllData'); ?>" method="POST">
<div class="row">
<div class="col-md-2">
<div class="form-group">
<label class=" form-control-label">Select Product:</label>
<div class="input-group">
<select  class="form-control" name="FC" style="width: 80%;border-radius: 5px;" required="required" >
<?php
if ($FC==2) {
?>
<option value="<?php Echo $FC;?>"><?php Echo $FactoryCode;?></option>
<option value="3">Machine Stitch Ball</option>
<option value="4">Airless Mini Ball</option>
<?php
}elseif ($FC==3) {
?>
<option value="<?php Echo $FC;?>"><?php Echo $FactoryCode;?></option>
<option value="2">Thermo Bounded Ball</option>
<option value="4">Airless Mini Ball</option>
<?php
}elseif ($FC==4) {
 ?>
<option value="<?php Echo $FC;?>"><?php Echo $FactoryCode;?></option>
<option value="2">Thermo Bounded Ball</option>
<option value="3">Machine Stitch Ball</option>  
<?php
}
  ?>
</select>
</div>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<input class="form-control" type="Date" name="Sdate" value="<?php echo $StartDateeee;?>" style="width: 110%">
</div>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<input class="form-control" type="Date" name="Edate" value="<?php echo $EndDateeee;?>" style="width: 110%" >
</div>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<label class=" form-control-label">Select Option:</label>
<div class="input-group">
<select  class="form-control" name="Process" style="width: 80%;border-radius: 5px;" required="required" >
  <?php

if ($Process==22) {
?>
<option value="<?php Echo $Process;?>"><?php Echo $ProcessName;?></option>
<option value="33">By Line Wise</option>
<option value="44">By Summary</option>
<?php
}elseif ($Process==33) {
?>
<option value="<?php Echo $Process;?>"><?php Echo $ProcessName;?></option>
<option value="22">By Date Wise</option>
<option value="44">By Summary</option>
<?php
}elseif ($Process==44) {
 ?>
<option value="<?php Echo $Process;?>"><?php Echo $ProcessName;?></option>
<option value="22">By Date Wise</option>
<option value="33">By Line Wise</option>  
<?php
}
  ?>     
</select>
</div>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<label class=" form-control-label"></label>
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
<form action="<?php echo base_url('MIS/DW/AllData'); ?>" method="POST">
<div class="row">
<div class="col-md-2">
<div class="form-group">
<label class=" form-control-label">Select Product:</label>
<div class="input-group">
<select  class="form-control" name="FC"  required="required" >
<option value="">Select Product</option>
<option value="2">Thermo Bounded Ball</option>
<option value="3">Machine Stitch Ball</option>
<option value="4">Airless Mini Ball</option>
</select>
</div>
</div>
</div>
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

<div class="col-md-2">
<div class="form-group">
<label class=" form-control-label">Select Option:</label>
<div class="input-group">
<select  class="form-control" name="Process"  required="required" >
<option value="">Select Option</option>
<option value="22">By Date Wise</option>
<option value="33">By Line Wise</option>
<option value="44">By Summary</option>    
</select>
</div>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<label class=" form-control-label"></label>
<div style="margin-top:18px" class="input-group">

<button type="submit" id="submit" name="submit" class="btn btn-primary " ><i class=" fa fa-search"></i> Search</button>
</div>                    
</div>
</div>
</div>
</div>
</form>
  <?php
}
?>

<style type="text/css">
                  td{
                    text-align: center;
                  }
                
</style>  
<?php
if ($Record) {
$Date1;
$Date2;
$FC;
$Process;
    if ($FC==2) {
    $FactoryCode='Thermo Bounded Ball';
  }elseif ($FC==3) {
    $FactoryCode='Machine Stitch Ball';
  }elseif ($FC==4) {
    $FactoryCode='Airless Mini Ball';
  }

if ($Process==22) { // Date Wise
  if ($FC==2) {// TM
$data_points1 = array();
$ddate = array();
 $result=$this->TM_Model->GETTMFQSum($StartDateeee,$EndDateeee);
foreach ($result as $rsData){
$OutPut=$rsData['OutPut'];
$point1 = array("label" => $rsData['DDate'] , "y" => Round($OutPut));
array_push($data_points1, $point1); 
array_push($ddate, $rsData['DDate']);
}
$data_points2 = array();
$result=$this->TM_Model->GETTMSUm($StartDateeee,$EndDateeee);
foreach ($result as $rsData){
$OutPut=$rsData['OutPut'];
$point1 = array("label" => $rsData['DDate'] , "y" => Round($OutPut));
array_push($data_points2, $point1); 
}
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
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
        categories: <?php echo json_encode($ddate, JSON_NUMERIC_CHECK); ?>,
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
            color:"#1a8cff", 
            name: 'Pass',
            data: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
        },]
    // series: [
    //     { 
    //         name: "",
    //         data: <?php echo json_encode($data_points2, JSON_NUMERIC_CHECK); ?>
    //     }
    // ]
});
//   Highcharts.chart('chartContainer1', {
//     chart: {
//         type: 'column'
//     },
//     title: {
//         text: ''
//     },
//     subtitle: {
        
//     },
//     xAxis: {
//         categories: <?php echo json_encode($ddate, JSON_NUMERIC_CHECK); ?>,
//         crosshair: true
//     },
//     yAxis: {
//         min: 0,
//         title: {
//             text: ''
//         }
//     },
//     tooltip: {
//         headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
//         pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
//             '<td style="padding:0">{point.y:.1f}</td></tr>',
//         footerFormat: '</table>',
//         shared: true,
//         useHTML: true
//     },
//     plotOptions: {
//         column: {
//             pointPadding: 0.2,
//             borderWidth: 0
//         }
//     },
//     series: [
//         { 
//             color: '#1a8cff',
//             name: "Pass",
//             data: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
//         }
//     ]
// });
// var chart = new CanvasJS.Chart("chartContainer1", {
//   animationEnabled: true,
//    axisX:{
    
//     gridThickness: 0,
//     tickLength: 0,
//     lineThickness: 0,
//      labelFormatter: function(){
//         return " ";
//       }
//   },
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
//   name: "Pass",
// indexLabelPlacement: "top",
// color:"#1a8cff", 
// dataPoints: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
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
        categories: <?php echo json_encode($ddate, JSON_NUMERIC_CHECK); ?>,
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
            color:"#33cccc", 
            name: 'Check',
            data: <?php echo json_encode($data_points2, JSON_NUMERIC_CHECK); ?>
        },]
    // series: [
    //     { 
    //         name: "",
    //         data: <?php echo json_encode($data_points2, JSON_NUMERIC_CHECK); ?>
    //     }
    // ]
});

// var chart = new CanvasJS.Chart("chartContainer2", {
//   animationEnabled: true,
//   axisX:{
    
//     gridThickness: 0,
//     tickLength: 0,
//     lineThickness: 0,
//      labelFormatter: function(){
//         return " ";
//       }
//   },
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
//   name: "Pass",

//         indexLabelPlacement: "top",
//        color:"#33cccc", 
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

}
</script>
<div class="row">
<div class="col-lg-6">
<div class="card">
<div class="card-body">
<h3 class="mb-3">Forming </h3>
<div id="chartContainer2" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card">
<div class="card-body">
<h3 class="mb-3">Final QC </h3>
<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
</div>

<?php
$date="";
$spd="";
foreach($Record as $rsData) {
$date.= "[".$rsData['Dateee']."],";
$spd.= $rsData['Dateee']." ";
}
$Values=rtrim($date,",");
$this->load->model('TM_Model');
$result=$this->TM_Model->GETTMPIOV($Values);

?>
<div style="margin-top:40px" class="row">
<div class="col-lg-6" style="width: 800px;">
<div class="card">
<div class="card-header">
<strong class="card-title">Forming  Production </strong>
</div>
  <style type="text/css">
  table{
     display: block;
        overflow-x: scroll;
        white-space: nowrap;
  }
</style>
<div class="card-body table-responsive"> 
<table  id="table" class="table table-bordered table-hover table-responsive table-striped w-100"   cellpadding="0" cellspacing="0" >
 <thead class="bg-primary-200 text-light" style="color: #fff; font-size: 15px; border:1px black solid;">
<th>Factory Code</th>
<?php
foreach($Record as $Dataa1) {
$HDate=$Dataa1['Dateee'];
?>
<th style="text-align: center;"><?php echo $HDate;?></th>
<?php
}
?>
<th class="bg-primary text-light" style="text-align: center;">Total</th>
</thead>
<?php
$spd=trim($spd);
$values=explode(" ",$spd);
foreach ($result as $key) {
$Lines=$key['FactoryCode'];
//$LineID=$key['LineID'];
?>

<tbody>
<tr style="text-align: center; ">
<td style="text-align: left; font-weight: bold;"><?php Echo $Lines?></td>
<?php 
foreach ($values as $val){
        //$Finaldate= "'".$val."'"."<br/>";
$Data=$key[$val];
 ?>
<td class="Froming" ><?php Echo round($Data);?></td>
<?php
}
$result=$this->TM_Model->GETTMDSUm($StartDateeee,$EndDateeee,$Lines);
foreach ($result as $rsData){
$OutPut= $rsData['PassQty'];
 // $TotalChecked=$rsData['TotalChecked'];
?>
<td style="color: black;"><?php
Echo Round($OutPut);
?></td>
<?php
}
?>
</tr>
<?php
}
?>
<tr style="font-size: 15px; font-weight: bold; ">
<td style="text-align: right;">Production </td>
<?php
$result=$this->TM_Model->GETTMSUm($StartDateeee,$EndDateeee);
foreach ($result as $rsData){
$OutPut=$rsData['OutPut'];
?>
<td style="text-align: center; border:0px black solid;">
<?php echo round($OutPut);?></td>
<?php
}
$result=$this->TM_Model->GETSUm($StartDateeee,$EndDateeee);
                          
 foreach ($result as $rsData){
          //$Luinesss= $rsData['LineName'];
 $OutPut= $rsData['OutPut'];
 // $TotalChecked=$rsData['TotalChecked'];
?>
<td style="color: black; text-align: center;" ><?php Echo Round($OutPut); ?></td>
<?php
}
?>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<?php
$date="";
$spd="";
foreach($Record as $rsData) {
$date.= "[".$rsData['Dateee']."],";
$spd.= $rsData['Dateee']." ";
}
$Values=rtrim($date,",");
$result=$this->TM_Model->GETTMFQPIOV($Values);
?>
<div class="col-lg-6"  style="width: 800px;">
<div class="card">
<div id="panel-1" class="panel">
<div class="panel-hdr">
<h2>
<strong class="card-title">Final QC Production </strong>
</h2>
</div>
<div class="card-body table-responsive"> 
<style type="text/css">
  table{
     display: block;
        overflow-x: scroll;
        white-space: nowrap;
  }
</style>

<table  id="table1" class="table table-bordered table-hover table-responsive table-striped w-100" style="width: 100%;">
<thead class="bg-primary text-light" style="color: #fff; font-size: 15px">
<th>Factory Code</th>
<?php
foreach($Record as $Dataa1) {
  $HDate=$Dataa1['Dateee'];
?>
<th style="text-align: center;"><?php echo $HDate;?></th>
<?php
}
?>
<th class="bg-primary text-light" style="text-align: center;">Total</th>
</thead>
<?php
$spd=trim($spd);
$values=explode(" ",$spd);
foreach ($result as $key) {
$Lines=$key['FactoryCode'];
//$LineID=$key['LineID'];
?>
<tr style="text-align: center; ">
<td style="text-align: left; font-weight: bold;"><?php Echo $Lines?></td>
<?php 
foreach ($values as $val){
        //$Finaldate= "'".$val."'"."<br/>";
$Data=$key[$val];
?>
<td class="packing" ><?php Echo round($Data);?></td>
<?php
}
$result=$this->TM_Model->GETTMFQDSum($StartDateeee,$EndDateeee,$Lines);
foreach ($result as $rsData){
//$Luinesss= $rsData['LineName'];
$OutPut= $rsData['PassQty'];
 // $TotalChecked=$rsData['TotalChecked'];
?>
<td style="color: black;"><?php
Echo Round($OutPut);
?></td>
<?php
}
?>
</tr>
<?php
  }
?>
</tr>
<tr style="color: black; font-size: 15px; font-weight: bold; ">
<td style="text-align: right;">Production </td>
<?php
$result=$this->TM_Model->GETTMFQSum($StartDateeee,$EndDateeee);
foreach ($result as $rsData){
$OutPut=$rsData['OutPut'];
  ?>
<td style="text-align: center; border:0px black solid;">
<?php echo round($OutPut);?></td>
<?php
}
$result=$this->TM_Model->GETTMFQ($StartDateeee,$EndDateeee);
foreach ($result as $rsData){
//$Luinesss= $rsData['LineName'];
$OutPut= $rsData['OutPut'];
 // $TotalChecked=$rsData['TotalChecked'];
?>
<td class="bg-primary text-light" style="color: black; text-align: center;" ><?php  Echo Round($OutPut); ?></td>
<?php
}

?> 
</table>
</div>
</div>
</div>
</div>
</div>

<?php
}elseif ($FC==3) {
$data_points1 = array();
$date = array();
$result=$this->MS_Model->GETMS($StartDateeee,$EndDateeee);
foreach ($result as $rsData){
$OutPut=$rsData['OutPut'];
$point1 = array("label" => $rsData['Date'] , "y" => Round($OutPut));
array_push($data_points1, $point1); 
array_push($date, $rsData['Date']); 
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
        categories: <?php echo json_encode($date, JSON_NUMERIC_CHECK); ?>,
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
            color:"#1a8cff", 
            name: 'Check',
            data: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
        },]
    // series: [
    //     { 
    //         name: "",
    //         data: <?php echo json_encode($data_points2, JSON_NUMERIC_CHECK); ?>
    //     }
    // ]
});
// var chart = new CanvasJS.Chart("chartContainer1", {
//   animationEnabled: true,
//    axisX:{
    
//     gridThickness: 0,
//     tickLength: 0,
//     lineThickness: 0,
//      labelFormatter: function(){
//         return "";
//       }
//   },
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
//   name: "Pass",

//         indexLabelPlacement: "top",
//        color:"#1a8cff", 
//     dataPoints: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
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
<div class="col-lg-12">
<div class="card">
<div class="card-body">
<h3 class="mb-3">Production </h3>
<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
<?php
$date="";
$spd="";
foreach($Record as $rsData) {
$date.= "[".$rsData['Dateee']."],";
$spd.= $rsData['Dateee']." ";
}
$Values=rtrim($date,",");
$this->load->model('MS_Model');
$result=$this->MS_Model->GETMSPIOV($Values);
?>
<div class="col-lg-12" style="width: 1100px;">
<div class="card">
<div id="panel-1" class="panel">
<div class="panel-hdr">
<h2>
<strong class="card-title">Machine Stitch Ball Production </strong>
</h2>
</div>
<div class="card-body table-responsive"> 
<table  id="table" class="table table-bordered table-hover table-responsive table-striped w-100" style="width: 100%;">
<thead class="bg-primary-200 text-light" style="color: #fff; font-size: 15px; border:2px black solid;">
<th>Lines</th>
<?php
foreach($Record as $Dataa1) {
  $HDate=$Dataa1['Dateee'];
  ?>
<th style="text-align: center;"><?php echo $HDate;?></th>
  <?php
}
?>
<th class="bg-primary text-light" style="text-align: center;">Total</th>
</thead>
<?php
$spd=trim($spd);
$values=explode(" ",$spd);
foreach ($result as $key) {
 $Lines=$key['LineName'];
$LineID=$key['LineID'];
?>
<tr style="text-align: center; ">
<td style="text-align: left; font-weight: bold;"><?php Echo $Lines?></td>
<?php 
foreach ($values as $val){
//$Finaldate= "'".$val."'"."<br/>";
$Data=$key[$val];
 ?>
<td class="packing"><?php Echo round($Data);?></td>
<?php
}
$result=$this->MS_Model->GETMSSUm($StartDateeee,$EndDateeee,$LineID);
foreach ($result as $rsData){
//$Luinesss= $rsData['LineName'];
$OutPut= $rsData['OutPut'];
 // $TotalChecked=$rsData['TotalChecked'];
?>
<td class="bg-primary text-light" style="color: #fff;"><?php
Echo Round($OutPut);
      ?></td>
      <?php
    }

    ?>
 </tr>
<?php
  }
?>
<tr style="color:black; font-size: 15px; font-weight: bold; ">
  <td style="text-align: right;">Production </td>
<?php
$result=$this->MS_Model->GETMSDSUm($StartDateeee,$EndDateeee);
foreach ($result as $rsData){
  $OutPut=$rsData['OutPut'];
  ?>
<td class="bg-primary-200 text-light" style="text-align: center; border:1px black solid;">
<?php echo round($OutPut);?></td>
<?php
}
$result=$this->MS_Model->GETMSUm($StartDateeee,$EndDateeee);
foreach ($result as $rsData){
          //$Luinesss= $rsData['LineName'];
$OutPut= $rsData['OutPut'];
 // $TotalChecked=$rsData['TotalChecked'];
?>
<td class="bg-primary text-light" style="text-align: center;" ><?php  Echo Round($OutPut); ?></td>
<?php
}
?>
</tr>
</table>
</div>
</div>
</div>
</div>
<?php
}elseif ($FC==4) {
$data_points1 = array();
$Datee = array();
$result=$this->AMB_Model->GetAMbpackingDSum($StartDateeee,$EndDateeee);
foreach ($result as $rsData){
$OutPut=$rsData['OutPut'];
$point1 = array("label" => $rsData['Dateee'] , "y" => Round($OutPut));
array_push($data_points1, $point1); 
array_push($Datee, $rsData['Dateee']); 
}
$data_points2 = array();
$result=$this->AMB_Model->GetAMbFormingDSum($StartDateeee,$EndDateeee);
foreach ($result as $rsData){
$OutPut=$rsData['OutPut'];
$point1 = array("label" => $rsData['Dateee'] , "y" => Round($OutPut));
array_push($data_points2, $point1); 
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>


<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
<script type="text/javascript">
window.onload = function() {

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
        categories: <?php echo json_encode($Datee, JSON_NUMERIC_CHECK); ?>,
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
            color:"#33cccc", 
            name: 'Check',
            data: <?php echo json_encode($data_points2, JSON_NUMERIC_CHECK); ?>
        },]
    // series: [
    //     { 
    //         name: "",
    //         data: <?php echo json_encode($data_points2, JSON_NUMERIC_CHECK); ?>
    //     }
    // ]
});

// var chart = new CanvasJS.Chart("chartContainer2", {
//   animationEnabled: true,
//     axisX:{
    
//     gridThickness: 0,
//     tickLength: 0,
//     lineThickness: 0,
//      labelFormatter: function(){
//         return " ";
//       }
//   },
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
//   name: "Pass",

//         indexLabelPlacement: "top",
//        color:"#33cccc", 
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
        categories: <?php echo json_encode($Datee, JSON_NUMERIC_CHECK); ?>,
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
            color:"#1a8cff", 
            name: 'Pass',
            data: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
        },]
    // series: [
    //     { 
    //         name: "",
    //         data: <?php echo json_encode($data_points2, JSON_NUMERIC_CHECK); ?>
    //     }
    // ]
});
// var chart = new CanvasJS.Chart("chartContainer1", {
//   animationEnabled: true,
//     axisX:{
    
//     gridThickness: 0,
//     tickLength: 0,
//     lineThickness: 0,
//      labelFormatter: function(){
//         return " ";
//       }
//   },
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
//   name: "Pass",

//         indexLabelPlacement: "top",
//        color:"#1a8cff", 
//     dataPoints: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
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
<div style="margin-top:40px" class="row">
<div class="col-lg-6">
<div class="card ">
<div class="card-body ">  
<h3 class="mb-3">Forming </h3>
<div id="chartContainer2" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card ">
<div class="card-body "> 
<h3 class="mb-3">Packing </h3>
<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
</div>

<?php
$date="";
$spd="";
foreach($Record as $rsData) {
$date.= "[".$rsData['Dateee']."],";
$spd.= $rsData['Dateee']." ";
}
$Values=rtrim($date,",");
$this->load->model('AMB_Model');
$result12=$this->AMB_Model->GetAMbForming($Values);
?>
<div class="row">
<div class="col-lg-6" style="width: 800px;">
<div class="card">
<div id="panel-1" class="panel">
<div class="panel-hdr"> 
<div class="card-header">
<strong class="card-title">Forming Ball Production </strong>
</div>
</div>
<div class="card-body table-responsive"> 
<table  id="table" class="table table-bordered table-hover table-responsive table-striped w-100">
<thead class="bg-primary-200 text-light" style="color: #fff; font-size: 15px; border:1px black solid;">
<th>Lines</th>
<?php
foreach($Record as $Dataa1) {
$HDate=$Dataa1['Dateee'];
?>
<th style="text-align: center;"><?php echo $HDate;?></th>
<?php
}
?>
<th class="bg-primary text-light" style="text-align: center;"> Total</th>
</thead>
<?php
$spd=trim($spd);
$values=explode(" ",$spd);
foreach ($result12 as $key) {
$Lines=$key['LineName'];
$LineID=$key['LineID'];
?>
<tr style="text-align: center; ">
<td style="text-align: left; font-weight: bold;"><?php Echo $Lines?></td>
<?php 
foreach ($values as $val){
$Data=$key[$val];
?>
<td class="Froming" ><?php Echo round($Data);?></td>
<?php
}
$result120=$this->AMB_Model->GetAMbFormingSu($StartDateeee,$EndDateeee,$LineID);
foreach ($result120 as $rsData){
$OutPut= $rsData['OutPut'];
?>
<td class="bg-primary text-light" style="color: #fff;"><?php  Echo Round($OutPut); ?></td>
<?php
 }
?>
</tr>
<?php
  }
?>
<tr style="color: black; font-size: 15px; font-weight: bold; ">
<td style="text-align: right;">Production </td>
<?php            
$result=$this->AMB_Model->GetAMbFormingDSum($StartDateeee,$EndDateeee);
foreach ($result as $rsData){
  $OutPut=$rsData['OutPut'];
  ?>
<td style="text-align: center; border:1px black solid;">
<?php echo round($OutPut);?></td>
<?php
}                        
$result=$this->AMB_Model->GetFormingSum($StartDateeee,$EndDateeee);
  foreach ($result as $rsData){
           $OutPut= $rsData['OutPut'];
?>
<td class="bg-primary text-light" style="color: #fff; text-align: center;" ><?php Echo Round($OutPut);  ?></td>
<?php
}
?>
</tr>
</table>
</div>
</div>
</div>
</div>
<?php
$date="";
$spd="";
foreach($Record as $rsData) {
$date.= "[".$rsData['Dateee']."],";
$spd.= $rsData['Dateee']." ";
}
$Values=rtrim($date,",");
$result=$this->AMB_Model->GetAMbpacking($Values);
?>
<div class="col-lg-6" style="width: 800px;">
<div class="card">
<div id="panel-1" class="panel">
<div class="panel-hdr">
<div class="card-header">
<strong class="card-title">Packing Ball Production </strong>
</div>
</div>
<div class="card-body table-responsive"> 
<table  id="table1" class="table table-bordered table-hover table-responsive table-striped w-100">
<thead class="bg-primary-200 text-ligh" style="color: #fff; font-size: 15px; border:0px black solid;">
<th>Lines</th>
<?php
 foreach($Record as $Dataa1) {
  $HDate=$Dataa1['Dateee'];
  ?>
<th style="text-align: center;"><?php echo $HDate;?></th>
<?php
}
?>
<th class="bg-primary text-light" style="text-align: center;">Total</th>
</thead>
<?php
$spd=trim($spd);
$values=explode(" ",$spd);
foreach ($result12 as $key) {
$Lines=$key['LineName'];
$LineID=$key['LineID'];
?>
<tr style="text-align: center; ">
<td style="text-align: left; font-weight: bold;"><?php Echo $Lines?></td>
<?php 
foreach ($values as $val){
        //$Finaldate= "'".$val."'"."<br/>";
$Data=$key[$val];
?>
<td class="packing" ><?php Echo round($Data);?></td>
<?php
}
$result=$this->AMB_Model->GetAMbpackingSum($StartDateeee,$EndDateeee,$LineID);
foreach ($result as $rsData){
//$Luinesss= $rsData['LineName'];
$OutPut= $rsData['OutPut'];
 // $TotalChecked=$rsData['TotalChecked'];
?>
<td class="bg-primary text-light" style="color: #fff;"><?php
Echo Round($OutPut); ?></td>
<?php
}
?>
</tr>
<?php
  }
?>
<tr style="color: black; font-size: 15px; font-weight: bold; ">
<td style="text-align: right;">Production </td>
<?php
$result=$this->AMB_Model->GetAMbpackingDSum($StartDateeee,$EndDateeee);
  foreach ($result as $rsData){
  $OutPut=$rsData['OutPut'];
  ?>
<td style="text-align: center; border:1px black solid;">
<?php echo round($OutPut);?></td>
<?php
}
$result=$this->AMB_Model->GetpackingSum($StartDateeee,$EndDateeee);   
foreach ($result as $rsData){
          //$Luinesss= $rsData['LineName'];
$OutPut= $rsData['OutPut'];
 // $TotalChecked=$rsData['TotalChecked'];
?>
<td class="bg-primary text-light" style="color: #fff; text-align: center;" ><?php
Echo Round($OutPut);
?></td>
<?php
    }
?>
</tr>
</table>
</div>
</div>
</div>
</div>
</div>
<?php
}
}elseif ($Process==33) { // Line Wise 
?>
<?php
if ($FC==2) {
$data_points1 = array();
$factorycode = array();
 foreach($Record as $key) {
  $OutPut=$key['FCheckedQty'];
$point1 = array("label" => $key['FactoryCode'] , "y" => Round($OutPut));
array_push($data_points1, $point1);
array_push($factorycode, $key['FactoryCode']); 
}
$data_points2 = array();
foreach($Record as $key) {
$OutPut=$key['FPassQty'];
$point1 = array("label" => $key['FactoryCode'] , "y" => Round($OutPut));
array_push($data_points2, $point1); 
}
$data_points3 = array();
foreach($Record as $key) {
$OutPut=$key['CheckedQty'];
$point1 = array("label" => $key['FactoryCode'] , "y" => Round($OutPut));
array_push($data_points3, $point1); 
}
$data_points4 = array();
foreach($Record as $key) {
$OutPut=$key['PassQty'];
$point1 = array("label" => $key['FactoryCode'] , "y" => Round($OutPut));
array_push($data_points4, $point1); 
}
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
        categories: <?php echo json_encode($factorycode, JSON_NUMERIC_CHECK); ?>,
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
            color:"#33cccc", 
            name: 'Check',
            data: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
        }, {
            color:"#1a8cff",
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
// animationEnabled: true,
//   axisX:{
    
//     gridThickness: 0,
//     tickLength: 0,
//     lineThickness: 0,
//      labelFormatter: function(){
//         return " ";
//       }
//   },
//  axisY:{
  
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
//   name: "Check ",

//         indexLabelPlacement: "top",
//        color:"#33cccc", 
//     dataPoints: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
//   },{
//    type: "column",
//         yValueFormatString: "#",
//        // indexLabel: "{y} ",
//  indexLabelFontSize: 18, 
//   name: "Pass ",

//         indexLabelPlacement: "top",
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
        categories: <?php echo json_encode($factorycode, JSON_NUMERIC_CHECK); ?>,
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
            color:"#33cccc", 
            name: 'Check',
            data: <?php echo json_encode($data_points3, JSON_NUMERIC_CHECK); ?>
        }, {
            color:"#1a8cff",
            name: 'Pass',
            data: <?php echo json_encode($data_points4, JSON_NUMERIC_CHECK); ?>
        }]
    // series: [
    //     { 
    //         name: "",
    //         data: <?php echo json_encode($data_points2, JSON_NUMERIC_CHECK); ?>
    //     }
    // ]
});
// var chart = new CanvasJS.Chart("chartContainer2", {
//   animationEnabled: true,
//   title:{
    
//   },
//     axisX:{
    
//     gridThickness: 0,
//     tickLength: 0,
//     lineThickness: 0,
//      labelFormatter: function(){
//         return " ";
//       }
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
//   name: "Check ",

//         indexLabelPlacement: "top",
//        color:"#33cccc", 
//     dataPoints: <?php echo json_encode($data_points3, JSON_NUMERIC_CHECK); ?>
//   },{
//    type: "column",
//         yValueFormatString: "#",
//        // indexLabel: "{y} ",
//  indexLabelFontSize: 18, 
//   name: "Pass ",

//         indexLabelPlacement: "top",
//        color:"#1a8cff", 
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
<h3 class="mb-3">Forming </h3>
<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card">
<div class="card-body">
<h3 class="mb-3">Final QC </h3>
<div id="chartContainer2" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
</div>
<div style="margin-top:40px" class="col-lg-12">
<div class="card">
<div id="panel-1" class="panel">
<div class="panel-hdr">   
<h2>
<strong class="card-title">Thermo Bounded Ball Production </strong>
</h2>
</div>
<div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="demo-v-spacing" id="defaultTable" >

<table id="table" class="table table-bordered table-hover table-responsive table-striped w-100" style="width: 200%;" >
<thead class="bg-primary-200 text-light">   
<tr style="color: #fff;text-align: center;">
<td colspan="8">
Line Wise Detials Between <?php Echo $StartDate;?> and <?php Echo $EndDate;?></td>
</tr>          
<tr style="color: #fff;">
 
<td></td>
<td colspan="3" style="text-align: center;">Forming</td>
<td colspan="3" style="text-align: center;">Final QC </td></tr>
<tr style="font-weight: bold;"><td style="text-align: left;">Line Name</td> 
<td  style="width:10%; text-align: center; " >Check</td>
<td  style="width:10%; text-align: center;">Pass</td>
<td  style="width:10%; text-align: center;">RFT</td>
<td  style="width:10%;  text-align: center;">Check</td>
<td  style="width:10%;  text-align: center;">Pass</td>
<td  style="width:10%; ">RFT</td>
</tr>
</thead>
<tbody style="border:1px black solid; ">
<?php 
foreach($Record as $key) {
$line = $key['FactoryCode'];
$Pass = $key['FPassQty'];
$Checked = $key['FCheckedQty'];
if ($Pass==0 or $Checked==0) {
$RFT=0;
}else{
$RFT=$Pass/$Checked*100;
}
$PPass = $key['PassQty'];
$PChecked = $key['CheckedQty'];
if ($PPass==0 or $PChecked==0) {
$PRFT=0;
}else{
$PRFT=$PPass/$PChecked*100;
}
?> 
<tr >
<td style="width:10%; text-align: left;"><?php echo $line;?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo Round($Checked);?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo Round($Pass);?></td>
<td  style="width:10%; text-align: center;" ><?php echo Round($RFT);?>%</td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo Round($PChecked);?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo Round($PPass);?></td>
<td  style="width:10%; text-align: center; "><?php echo Round($PRFT);?>%</td>
</tr>
<?php  }
foreach($RecordSum as $Data) {
$SPass = $Data['FPassQty'];
$SChecked = $Data['FCheckedQty'];
if ($SPass==0 or $SChecked==0) {
$SRFT=0;
}else{
$SRFT=$SPass/$SChecked*100;
}
$SPPass = $Data['PassQty'];
$SPChecked = $Data['CheckedQty'];
if ($SPPass==0 or $SPChecked==0) {
$SPRFT=0;
}else{
$SPRFT=$SPPass/$SPChecked*100;
}
}
?>
<tr style="text-align:center;  color:black">
<td class="bg-primary text-light" style="width:20%;">Total</td>  
<td  style="width:10%; text-align: center;"><?php echo Round($SChecked);?></td>
<td  style="width:10%; text-align: center;"><?php echo Round($SPass);?></td>
<td  style="width:10%; text-align: center;"><?php echo Round($SRFT);?>%</td>
<td  style="width:10%; text-align: center;"><?php echo Round($SPChecked);?></td>
<td  style="width:10%; text-align: center;"><?php echo Round($SPPass);?></td>
<td  style="width:10%; text-align: center;"><?php echo Round($SPRFT);?>%</td>
</tr>
</tbody>
</table> 
</div>
</div>
</div>
</div>
<?php
    # code...
}elseif ($FC==3) { 
$data_points1 = array();
$lineNames = array();
foreach ($Record as $key){
$OutPut=$key['TotalChecked'];
$point1 = array("label" => $key['LineName'] , "y" => Round($OutPut));
array_push($data_points1, $point1); 
array_push($lineNames, $key['LineName']); 
}
$data_points2 = array();
foreach($Record as $key) {
$OutPut=$key['Pass'];
$point1 = array("label" => $key['LineName'] , "y" => Round($OutPut));
array_push($data_points2, $point1); 
}
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
        categories: <?php echo json_encode($lineNames, JSON_NUMERIC_CHECK); ?>,
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
            color:"#33cccc", 
            name: 'Check',
            data: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
        }, {
            color:"#1a8cff",
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
//   axisX:{
    
//     gridThickness: 0,
//     tickLength: 0,
//     lineThickness: 0,
//      labelFormatter: function(){
//         return " ";
//       }
//   },
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
//   name: "Check ",

//         indexLabelPlacement: "top",
//        color:"#33cccc", 
//     dataPoints: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
//   },{
//    type: "column",
//         yValueFormatString: "#",
//        // indexLabel: "{y} ",
//  indexLabelFontSize: 18, 
//   name: "Pass ",

//         indexLabelPlacement: "top",
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
}
</script>
<div class="col-lg-12">
<div class="card">
<div class="card-body">
<h3 class="mb-3">Production </h3>
<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="card">
<div id="panel-1" class="panel">
<div class="panel-hdr">
<h2>
<strong class="card-title">Machine Stitch Ball Production </strong>
</h2>
</div>
<div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="demo-v-spacing" id="defaultTable" >
<table id="table"  class="table table-bordered table-hover table-responsive table-striped w-100" style="width: 100%;" >
<thead class="bg-primary-200 text-light">   
<tr style="color: #fff;text-align: center;">
<td colspan="8">
Line Wise Detials Between <?php Echo $StartDate;?> and <?php Echo $EndDate;?></td>
</tr>                                            
<tr style="font-weight: bold; color: #fff;" ><td style="text-align: left;">Line Name</td> 
<td  style="width:10%;  text-align: center;" >Check</td>
<td  style="width:10%; text-align: center;">Pass</td>
<td  style="width:10%; text-align: center;">RFT</td>
<td  style="width:10%; text-align: center;">Strength</td>
</tr>
</thead>
<tbody style="border:1px black solid; ">
<?php
foreach ($Record as $key){
$line = $key['LineName'];
$PresentWorkers = $key['PresentWorkers'];
$Pass = $key['Pass'];
$Checked = $key['TotalChecked'];
if ($Pass==0 or $Checked==0) {
$RFT=0;
}else{
$RFT=$Pass/$Checked*100;
}
?> 
<tr >
<td style="width:10%; text-align: left;"><?php echo $line;?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo Round($Checked);?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo Round($Pass);?></td>
<td  style="width:10%; text-align: center;" ><?php echo Round($RFT);?>%</td>
<td  style="width:10%; text-align: center;" ><?php echo Round($PresentWorkers);?></td>
</tr>
<?php } 
foreach($RecordSum as $key) {
$SumQty=$key['Pass'];
$SumFail=$key['Fail'];
$SumCheck=$key['TotalChecked'];
}
?>
<tr style="color: black;">
<td style="width:10%; text-align: right; ">Total</td>
<td  style="width:10%; text-align: center;" ><?php echo Round($SumCheck);?></td>
<td  style="width:10%; text-align: center;" ><?php echo Round($SumQty);?></td>
<td  style="width:10%; text-align: center;"><?php echo Round($RFT);?>%</td>
<td  style="width:10%; text-align: center;" ></td>
</tr>                 
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
}elseif ($FC==4) {
$data_points1 = array();
$lineNames = array();
foreach($Record as $key) {
$OutPut=$key['Checked'];
$point1 = array("label" => $key['LineName'] , "y" => Round($OutPut));
array_push($data_points1, $point1);
array_push($lineNames, $key['LineName']); 
}
$data_points2 = array();
foreach($Record as $key) {
$OutPut=$key['Passed'];
$point1 = array("label" => $key['LineName'] , "y" => Round($OutPut));
array_push($data_points2, $point1); 
}
$data_points3 = array();
foreach($Record as $key) {
$OutPut=$key['pchecked'];
$point1 = array("label" => $key['LineName'] , "y" => Round($OutPut));
array_push($data_points3, $point1); 
}
$data_points4 = array();
foreach($Record as $key) {
$OutPut=$key['Ppassed'];
$point1 = array("label" => $key['LineName'] , "y" => Round($OutPut));
array_push($data_points4, $point1); 
}
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
        categories: <?php echo json_encode($lineNames, JSON_NUMERIC_CHECK); ?>,
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
            color:"#33cccc", 
            name: 'Check',
            data: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
        }, {
            color:"#1a8cff",
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
//     axisX:{
    
//     gridThickness: 0,
//     tickLength: 0,
//     lineThickness: 0,
//      labelFormatter: function(){
//         return " ";
//       }
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
//   name: "Check ",

//         indexLabelPlacement: "top",
//        color:"#33cccc", 
//     dataPoints: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
//   },{
//    type: "column",
//         yValueFormatString: "#",
//        // indexLabel: "{y} ",
//  indexLabelFontSize: 18, 
//   name: "Pass ",

//         indexLabelPlacement: "top",
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
        categories: <?php echo json_encode($lineNames, JSON_NUMERIC_CHECK); ?>,
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
            color:"#33cccc", 
            name: 'Check',
            data: <?php echo json_encode($data_points3, JSON_NUMERIC_CHECK); ?>
        }, {
            color:"#1a8cff",
            name: 'Pass',
            data: <?php echo json_encode($data_points4, JSON_NUMERIC_CHECK); ?>
        }]
    // series: [
    //     { 
    //         name: "",
    //         data: <?php echo json_encode($data_points2, JSON_NUMERIC_CHECK); ?>
    //     }
    // ]
});
// var chart = new CanvasJS.Chart("chartContainer2", {
//   animationEnabled: true,
//   title:{
    
//   },
//     axisX:{
    
//     gridThickness: 0,
//     tickLength: 0,
//     lineThickness: 0,
//      labelFormatter: function(){
//         return " ";
//       }
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
//   name: "Check ",

//         indexLabelPlacement: "top",
//        color:"#33cccc", 
//     dataPoints: <?php echo json_encode($data_points3, JSON_NUMERIC_CHECK); ?>
//   },{
//    type: "column",
//         yValueFormatString: "#",
//        // indexLabel: "{y} ",
//  indexLabelFontSize: 18, 
//   name: "Pass ",

//         indexLabelPlacement: "top",
//        color:"#1a8cff", 
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
<h3 class="mb-3">Forming </h3>
<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card">
<div class="card-body">
<h3 class="mb-3">Packing </h3>
<div id="chartContainer2" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="card">
<div id="panel-1" class="panel">
<div class="panel-hdr">
<h2>
<strong class="card-title">Airless Mini Ball Production </strong>
</h2>
</div>
<div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="demo-v-spacing" id="defaultTable" >
<table  id="table" class="table table-bordered table-hover table-responsive table-striped w-10" style="width: 100%;">
<thead class="bg-primary-200 text-light">                   
<tr style="color: #fff;text-align: center;">
<td colspan="8">
Line Wise Detials Between <?php Echo $StartDate;?> and <?php Echo $EndDate;?></td>
</tr>            
<tr style="color: #fff;">
<td></td>
<td colspan="3" style="text-align: center;">Forming</td>
<td colspan="3" style="text-align: center;">Packing </td></tr>
<tr style="font-weight: bold;"><td style="text-align: left;">Line Name</td> 
<td  style="width:10%; " >Check</td>
<td  style="width:10%;">Pass</td>
<td  style="width:10%;">RFT</td>
<td  style="width:10%;">Check</td>
<td  style="width:10%;">Pass</td>
<td  style="width:10%;">RFT</td>
</tr>
</thead>
<tbody style="border:1px black solid; ">
<?php
foreach ($Record as $key){
$line = $key['LineName'];
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
?> 
<tr >
<td style="width:10%; text-align: left;"><?php echo $line;?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo Round($Checked);?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo Round($Pass);?></td>
<td  style="width:10%; text-align: center;"><?php echo Round($RFT);?>%</td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo Round($PChecked);?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo Round($PPass);?></td>
<td  style="width:10%; text-align: center;"><?php echo Round($PRFT);?>%</td>
</tr>
<?php } 
foreach($RecordSum as $key) {        
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
}

?> 
<tr style="color: black;" >
<td class="bg-primary text-light" style="width:10%; text-align: left;">Total</td>
<td  style="width:10%; text-align: center;" ><?php echo Round($Checked);?></td>
<td  style="width:10%; text-align: center;" ><?php echo Round($Pass);?></td>
<td  style="width:10%; text-align: center;"><?php echo Round($RFT);?>%</td>
<td  style="width:10%; text-align: center;" ><?php echo Round($PChecked);?></td>
<td  style="width:10%; text-align: center;"><?php echo Round($PPass);?></td>
<td  style="width:10%; text-align: center;"><?php echo Round($PRFT);?>%</td>
</tr>                
</table>
</div>
</div>
</div>
</div>
</div>
</div>

<?php


}

}elseif ($Process==44) { // by Summary
$data_points1 = array();
$date = array();
foreach($Record as $key) {
$point1 = array("label" => $key['Date'] , "y" => Round($key['Inspected']));
array_push($data_points1, $point1); 
array_push($date, $key['Date']); 
}
$data_points2 = array();
foreach($Record as $key1) {
$point1 = array("label" => $key1['Date'] , "y" => Round($key1['PassQty']));
array_push($data_points2, $point1); 
}
$data_points3 = array();
foreach($Record as $key12) {
$Pass= $key12['PassQty'];

  $Checked=$key12['Inspected'];
  if ($Pass==0 or $Checked==0) {
$RFT=0;
}else{
$RFT=$Pass/$Checked*100;
}
    $point = array("label" => $key12['Date'] , "y" =>  $RFT);    
    array_push($data_points3, $point);       
}

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
        categories: <?php echo json_encode($date, JSON_NUMERIC_CHECK); ?>,
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
            color:"#33cccc", 
            name: 'Check',
            data: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
        }, {
            color:"#1a8cff",
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
//    axisX:{
    
//     gridThickness: 0,
//     tickLength: 0,
//     lineThickness: 0,
//      labelFormatter: function(){
//         return " ";
//       }
//   },
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
//       //  indexLabel: "{y} ",
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

Highcharts.chart('chartContainer5', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    subtitle: {
        
    },
    xAxis: {
        categories: <?php echo json_encode($date, JSON_NUMERIC_CHECK); ?>,
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
        {   color:"#fec81b",  
            name: "",
            data: <?php echo json_encode($data_points3, JSON_NUMERIC_CHECK); ?>
        }
    ]
});
// var chart = new CanvasJS.Chart("chartContainer5", {
//    // colorSet: "greenShades",
//     animationEnabled: true,
//     //exportEnabled: true,
//     theme: "light1", // "light1", "light2", "dark1", "dark2"
//     title:{
//         //text: "Defected"
//     },
//     data: [{

//          type: "column",
//         //yValueFormatString: "#",
//         //indexLabel: "{y} %", 
//         color:"#fec81b",  
//         dataPoints: <?php echo json_encode($data_points3, JSON_NUMERIC_CHECK); ?>
//     }]
// });
// chart.render();


}
</script>
<div class="col-lg-12">
<div class="card">
<div class="card-body">
<h3 class="mb-3">Production </h3>
<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
<style type="text/css">
                  td{
                    text-align: center;
                  }
              
</style>     
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<strong class="card-title"><?php Echo $FactoryCode?> Production </strong>
</div>
<div class="card-body table-responsive"> 
<table  id="table" class="table table-bordered table-hover table-responsive table-striped w-100" style="width: 100%;">
<thead class="bg-primary-200 text-light">
<tr class="bg-primary-200 text-light" style="color: #fff;text-align: center;">
<td colspan="5">
Summary Detials Between <?php Echo $StartDate;?> and <?php Echo $EndDate;?></td>
</tr> 
<tr style="font-weight: bold;color: #fff;">
<td style="text-align: left;">Date</td> 
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
$line = $key['Date'];
$Pass = $key['PassQty'];
$Checked = $key['Inspected'];
if ($Pass==0 or $Checked==0) {
$RFT=0;
}else{
$RFT=$Pass/$Checked*100;
}
$Fail = $key['FailQty'];
?> 
<tr >
<td style="width:10%; text-align: left;"><?php echo $line;?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo Round($Checked);?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo Round($Pass);?></td>
<td  style="width:10%; text-align: center;" ><?php echo Round($Fail);?></td>
<td  style="width:10%; text-align: center; font-weight: bold;" ><?php echo Round($RFT);?>%</td>
</tr>
<?php } } else{ ?>
<tr>
<th colspan="5"> <center>No Record Available Yet!</center> </th>
</tr>
<?php
}
if($RecordSum) {
foreach($RecordSum as $key) { 
$Pass = $key['PassQty'];
$Checked = $key['Inspected'];
if ($Pass==0 or $Checked==0) {
$RFT=0;
}else{
$RFT=$Pass/$Checked*100;
}
$Fail = $key['FailQty'];
?> 
<tr style="color: black;" >

<td class="bg-primary text-light" style="width:10%; text-align: right;">Total</td>

 
<td  style="width:10%; text-align: center;" ><?php echo Round($Checked);?></td>
<td  style="width:10%; text-align: center;" ><?php echo Round($Pass);?></td>
<td  style="width:10%; text-align: center;" ><?php echo Round($Fail);?></td>
<td  style="width:10%; text-align: center;" ><?php echo Round($RFT);?>%</td>
</tr>
<?php } }


?>
</tbody>
</table>
</div>
</div>
</div>
<?php 
}
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



        });
        

        
        
        
        </script>

        





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
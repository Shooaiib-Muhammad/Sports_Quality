<div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i>TM</span>

                        </h1>
                    </div>

                        <?php
if ($this->session->userdata('userStus')==1) {

$Month=date('m');
$Year=date('Y');
$Day=date('d');
$CurrentDate=$Year.'-'.$Month.'-'.$Day;
    
?>

<!--<![endif]-->

<html>
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
if($graph_data) {
$Sdate;
$Edate;
$Process;
if ($VendorId==1) {
               $VendorName="All";
            }elseif($VendorId==2){
                $VendorName="B34002";
            }elseif($VendorId==3){
                $VendorName="B34003";
            }elseif($VendorId==4){
                $VendorName="B34004";
            }

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
<form  action="<?php echo base_url('MIS/TM/GetprdData'); ?>" method="POST">
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
<label class=" form-control-label">Line Name:</label>
<div class="input-group">
<select  class="form-control"  name="VendorId"  required="required"> 
<option value="<?php Echo $VendorId;?>"><?php Echo $VendorName;?></option>   
<option value="1">All</option>               
       <?php
foreach($Lines_infro as $Keys){
    ?>
<option value="<?php Echo $Keys['VendorId'];?>"><?php Echo $Keys['VendorName'];?></option>
<?php
}
?>
</select>
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label"></label>
<div style="margin-top:18px" class="input-group">
<button type="submit" id="submit" name="submit" class="btn btn-primary " ><i class=" fa fa-search"></i> Search</button>
</div>                    
</div>
</div>
</div>
</form>

  
      <?php

  }else{
    ?>
<form  action="<?php echo base_url('MIS/TM/GetprdData'); ?>" method="POST">
<div class="row">
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
<label class=" form-control-label">Line Name:</label>
<div class="input-group">
<select  class="form-control"  name="VendorId"  required="required">    
 <option value="1">All</option>               
       <?php
foreach($Lines_infro as $Keys){
    ?>
 <option value="<?php Echo $Keys['VendorId'];?>"><?php Echo $Keys['VendorName'];?></option>
    <?php
}
       ?>
      </select>
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label"></label>
<div style="margin-top:18px" class="input-group">
<button type="submit" id="submit" name="submit" class="btn btn-primary " ><i class=" fa fa-search"></i> Search</button>
</div>                    
</div>
</div>
</div>
</form>
<?php
  }
?>
<br>
<?php 
if($graph_data) {
$data_points1 = array();
$hours = array();
foreach($graph_data as $key) {
$point1 = array("label" => $key['HourName'] , "y" => Round($key['FPassQty']));
array_push($data_points1, $point1); 
array_push($hours, $key['HourName']); 
}
$data_points2 = array();
foreach($graph_data as $key1) {
$point2 = array("label" => $key1['HourName'] , "y" =>  Round($key1['PassQty']));
array_push($data_points2, $point2);       
}

$data_points3 = array();
foreach($graph_data as $key2) {
$Pass = $key2['FPassQty'];
$Checked = $key2['FCheckedQty'];
if ($Pass==0 or $Checked==0) {
$RFT=0;
}else{
$RFT=$Pass/$Checked*100;
}
$point3 = array("label" => $key2['HourName'] , "y" =>  Round($RFT));
array_push($data_points3, $point3);   
}
$data_points4 = array();
foreach($graph_data as $key3) {
$PPass = $key3['PassQty'];
$PChecked = $key3['CheckedQty'];
if ($PPass==0 or $PChecked==0) {
$PRFT=0;
}else{
$PRFT=$PPass/$PChecked*100;
}
$point4 = array("label" => $key3['HourName'] , "y" =>  Round($PRFT));
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
        categories:  <?php echo json_encode($hours, JSON_NUMERIC_CHECK); ?>,
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
            name: 'Forming',
            data:  <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
        }, {
            color:"#1a8cff",
            name: 'Final QC',
            data: <?php echo json_encode($data_points2, JSON_NUMERIC_CHECK); ?>
        }]
    // series: [
    //     { 
    //         name: "Lines",
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
//         //indexLabel: "{y} ",
//  indexLabelFontSize: 18, 
//   name: "Forming",

//         indexLabelPlacement: "top",
//        color:"#33cccc", 
//     dataPoints: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
//   },{
//    type: "column",
//         yValueFormatString: "#",
//        // indexLabel: "{y} ",
//  indexLabelFontSize: 18, 
//   name: "Final QC",
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
        categories: <?php echo json_encode($hours, JSON_NUMERIC_CHECK); ?>,
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
            name: 'Forming',
            data:  <?php echo json_encode($data_points3, JSON_NUMERIC_CHECK); ?>
        }, {
            color:"#1a8cff",
            name: 'Final QC',
            data: <?php echo json_encode($data_points4, JSON_NUMERIC_CHECK); ?>
        }]
    // series: [
    //     { 
    //         name: "Lines",
    //         data: <?php echo json_encode($data_points4, JSON_NUMERIC_CHECK); ?>
    //     }
    // ]
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
//         //indexLabel: "{y}% ",
//  indexLabelFontSize: 18, 
//   name: "Forming",

//         indexLabelPlacement: "top",
//        color:"#33cccc",  
//     dataPoints: <?php echo json_encode($data_points3, JSON_NUMERIC_CHECK); ?>
//   },{
//    type: "column",
//         yValueFormatString: "#",
//         //indexLabel: "{y}% ",
//  indexLabelFontSize: 18, 
//   name: "Final QC",

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

    <div style="margin-top:40px" class="col-lg-12">
    <div id="panel-1" class="panel">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Thermo Bonded Ball Production </strong>
                            </div>
                            <div class="card-body">
                                <table id="table2" class="col-md-12 table table-bordered table-hover table-responsive table-striped w-100" style="width: 100%;" >
<thead class="bg-primary-200 text-light">
                     
<tr class="bg-primary-200 text-light" style="color: #fff;">
   <td></td>
<td colspan="4" style="text-align: center; border-right: 1px #ffff solid; ">Forming</td>
<td colspan="3" style="text-align: center;">Final QC </td></tr>

<tr style="font-weight: bold;"><td style="text-align: left;">Hours Name</td> 
    
    <?php
if ($VendorId==1) {
}else{
?>
<td  style="width:10%; " >Aticle Code</td>
<?php
}

?>
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
 foreach($graph_data as $key) {
    $line = $key['HourName'];
     
if ($VendorId==1) {
}else{
$ArticleCode = $key['ArtCode'];
}


      
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
<?php
if ($VendorId==1) {
  # code...
}else{
?>
<td  style="width:10%; text-align: center;" ><?php echo $ArticleCode;?></td>
<?php
}

?>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo Round($Checked);?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo Round($Pass);?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo Round($RFT);?>%</td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo Round($PChecked);?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo Round($PPass);?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo Round($PRFT);?>%</td>
</tr>
<?php 
 }
}else{

?>
</tbody>
</table>
</div>
</div>
</div>
</div>
<?php
  
$data_points1 = array();
$factorycode = array();

foreach($line_data as $key) {
$point1 = array("label" => $key['FactoryCode'] , "y" => Round($key['FPassQty']));
array_push($data_points1, $point1);
array_push($factorycode, $key['FactoryCode']); 

}
$data_points2 = array();
foreach($line_data as $key1) {
$point2 = array("label" => $key1['FactoryCode'] , "y" =>  Round($key1['PassQty']));
array_push($data_points2, $point2);       
}

$data_points3 = array();
foreach($line_data as $key2) {
$Pass = $key2['FPassQty'];
$Checked = $key2['FCheckedQty'];
if ($Pass==0 or $Checked==0) {
$RFT=0;
}else{
$RFT=$Pass/$Checked*100;
}
$point3 = array("label" => $key2['FactoryCode'] , "y" =>  Round($RFT));
array_push($data_points3, $point3);   
}
$data_points4 = array();
foreach($line_data as $key3) {
$PPass = $key3['PassQty'];
$PChecked = $key3['CheckedQty'];
if ($PPass==0 or $PChecked==0) {
$PRFT=0;
}else{
$PRFT=$PPass/$PChecked*100;
}
$point4 = array("label" => $key3['FactoryCode'] , "y" =>  Round($PRFT));
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
        categories:  <?php echo json_encode($factorycode, JSON_NUMERIC_CHECK); ?>,
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
            name: 'Forming',
            data:  <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
        }, {
            color:"#1a8cff",
            name: 'Final QC',
            data:  <?php echo json_encode($data_points2, JSON_NUMERIC_CHECK); ?>
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
//   name: "Forming",

//         indexLabelPlacement: "top",
//        color:"#33cccc", 
//     dataPoints: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
//   },{
//    type: "column",
//         yValueFormatString: "#",
//        // indexLabel: "{y} ",
//  indexLabelFontSize: 18, 
//   name: "Final QC",
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
        categories:  <?php echo json_encode($factorycode, JSON_NUMERIC_CHECK); ?>,
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
            name: 'Forming',
            data: <?php echo json_encode($data_points3, JSON_NUMERIC_CHECK); ?>
        }, {
            color:"#1a8cff",
            name: 'Final QC',
            data:  <?php echo json_encode($data_points4, JSON_NUMERIC_CHECK); ?>
        }]
    // series: [
    //     { 
    //         name: "",
    //         data: <?php echo json_encode($data_points4, JSON_NUMERIC_CHECK); ?>
    //     }
    // ]
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
//   name: "Forming",

//         indexLabelPlacement: "top",
//        color:"#33cccc",  
//     dataPoints: <?php echo json_encode($data_points3, JSON_NUMERIC_CHECK); ?>
//   },{
//    type: "column",
//         yValueFormatString: "#",
//        // indexLabel: "{y}% ",
//  indexLabelFontSize: 18, 
//   name: "Final QC",

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
<h3 class="mb-3">Production  </h3>
<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card">
<div class="card-body">
<h3 class="mb-3"> RFT</h3>
<div id="chartContainer2" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
 </div>

          <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Thermo Bonded Ball Production </strong>
                            </div>
                            <div class="card-body">
                                <table id="table2" class="col-md-12 table table-bordered table-hover table-responsive table-striped w-100" style="width: 100%;" >
<thead class="bg-primary-200 text-light">
                          
<tr class="bg-primary-200 text-light" style="color: #fff;">
   <td></td>
<td colspan="3" style="text-align: center;">Forming</td>
<td colspan="3" style="text-align: center;">Final QC </td></tr>

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
if($line_data) {
 foreach($line_data as $key) {
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
<td  style="width:10%; text-align: center;" class="Froming"><?php echo Round($Pass);?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo Round($RFT);?>%</td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo Round($PChecked);?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo Round($PPass);?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo Round($PRFT);?>%</td>
</tr>
<?php  }
}else{
?>
<tr>
<th colspan="5"> <center>No Record Available Yet!</center> </th>
</tr>
<?php

}


foreach($SumData as $Data) {


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
<tr class="bg-primary text-light" style="text-align:center;  color:#fff;">
<td style="width:20%;">Total</td>  
<td  style="width:10%;"><?php echo Round($SChecked);?></td>
<td  style="width:10%;"><?php echo Round($SPass);?></td>
<td  style="width:10%;"><?php echo Round($SRFT);?>%</td>
<td  style="width:10%;"><?php echo Round($SPChecked);?></td>
<td  style="width:10%;"><?php echo Round($SPPass);?></td>
<td  style="width:10%;"><?php echo Round($SPRFT);?>%</td>

</tr>
</tbody>

</table> 
</div>
</div>
 </div>

<?php

}
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
</body>

     
<script>
   $(document).ready(function() {
            // LoadData(stDate, enDate);

            $('#table2').dataTable({
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
//   $(document).ready( function () {
//     $('#table').DataTable(
//     { 
//        dom: 'Bfrtip',
//         buttons: [
//             'copy',
//             {
//                 extend: 'excel',
//                 messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
//             },
//             {
//                 extend: 'pdf',
//                 messageBottom: null
//             },
           
//         ],
//      "ordering":false,
//       "pageLength":10,
//       "searching":false,
//       "LengthChange":true,
//       "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},

    
//     }


//       );
// } );
</script>
   </html>
<?php

}else{
    redirect('Welcome/index');
}
?>

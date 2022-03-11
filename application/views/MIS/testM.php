<?php
if (!$this->session->has_userdata('user_id')) {
    redirect('');
} else {
?>



                
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i>MS</span>

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

  <?php


       

if($Line_Wise_record) {
  $Date1;
$Date2;
 $LineNo;
 if ($LineNo==1) {
               $LineName="All";
            }elseif($LineNo==3){
                $LineName="Line# 1";
            }elseif($LineNo==4){
                $LineName="Line# 2";
            }elseif($LineNo==5){
                $LineName="Line# 3";
            }elseif($LineNo==6){
                $LineName="Line# 4";
            }elseif($LineNo==7){
                $LineName="Line# 5";
            }elseif($LineNo==8){
                $LineName="Line# 6";
            }elseif($LineNo==9){
                $LineName="Line# 7";
            }elseif($LineNo==10){
                $LineName="Line# 8";
            }elseif($LineNo==11){
                $LineName="Line# 9";
            }elseif($LineNo==16){
                $LineName="Line# 10";
            }elseif($LineNo==17){
                $LineName="Line# 11";
            }elseif($LineNo==18){
                $LineName="Line# 12";
            }elseif($LineNo==19){
                $LineName="Line# 13";
            }elseif($LineNo==20){
                $LineName="Line# 14";
            }elseif($LineNo==21){
                $LineName="Line# 15";
            }elseif($LineNo==22){
                $LineName="Line# 16";
            }elseif($LineNo==23){
                $LineName="Line# 17";
            }elseif($LineNo==24){
                $LineName="Line# 18";
            }elseif($LineNo==25){
                $LineName="Line# 19";
            }elseif($LineNo==26){
                $LineName="Line# 20";
            }elseif($LineNo==38){
                $LineName="MLine# 1";
            }elseif($LineNo==39){
                $LineName="MLine# 2";
            }elseif($LineNo==32){
                $LineName="MLine# 3";
            }elseif($LineNo==40){
                $LineName="MLine# 4";
            }elseif($LineNo==41){
                $LineName="MLine# 5";
            }elseif($LineNo==42){
                $LineName="MLine# 6";
            }elseif($LineNo==43){
                $LineName="MLine# 7";
            }elseif($LineNo==44){
                $LineName="MLine# 8";
            }

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
<form action="<?php echo base_url('MIS/MS/getAllData'); ?>" method="POST">
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
<label class=" form-control-label">Line Name:</label>
<div class="input-group">
<select  class="form-control" name="LineNo" style="width: 80%;border-radius: 5px;" >
  <option value="<?php Echo $LineNo;?>"><?php Echo $LineName;?></option>
<option value="1">All</option>
<?php
foreach($MSLinesinfo As $Key){
?>
<option value="<?php Echo $Key['LineID'];?>"><?php Echo $Key['LineName'];?></option>
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
<span><a href="<?php Echo base_url('MIS/DW/MSArticle')?>" style="color: #202020;">MS Daily Article Wise </a></span>
</form>
<?php
}else{
$Month=date('m');
$Year=date('Y');
$Day=date('d');
$CurrentDate=$Year.'-'.$Month.'-'.$Day;
?>
<form action="<?php echo base_url('MIS/MS/getAllData'); ?>" method="POST">
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
<label class=" form-control-label">Line Name:</label>
<div class="input-group">
<select  class="form-control" name="LineNo" style="width: 80%;border-radius: 5px;" >
<option value="1">All</option>
<?php
foreach($MSLinesinfo As $Key){
?>
<option value="<?php Echo $Key['LineID'];?>"><?php Echo $Key['LineName'];?></option>
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
<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="<?php Echo base_url('MIS/DW/MSArticle')?>" style="color: #202020;">Summary Reports</a></span> -->
</div> 
                   
</div>
</div>

</div>
</form>
<?php
}
?>
<?php
if ($Line_Wise_record) {
 $LineNo;
 if ($LineNo==1) {
               $LineName="All";
            }elseif($LineNo==3){
                $LineName="Line# 1";
            }elseif($LineNo==4){
                $LineName="Line# 2";
            }elseif($LineNo==5){
                $LineName="Line# 3";
            }elseif($LineNo==6){
                $LineName="Line# 4";
            }elseif($LineNo==7){
                $LineName="Line# 5";
            }elseif($LineNo==8){
                $LineName="Line# 6";
            }elseif($LineNo==9){
                $LineName="Line# 7";
            }elseif($LineNo==10){
                $LineName="Line# 8";
            }elseif($LineNo==11){
                $LineName="Line# 9";
            }elseif($LineNo==16){
                $LineName="Line# 10";
            }elseif($LineNo==17){
                $LineName="Line# 11";
            }elseif($LineNo==18){
                $LineName="Line# 12";
            }elseif($LineNo==19){
                $LineName="Line# 13";
            }elseif($LineNo==20){
                $LineName="Line# 14";
            }elseif($LineNo==21){
                $LineName="Line# 15";
            }elseif($LineNo==22){
                $LineName="Line# 16";
            }elseif($LineNo==23){
                $LineName="Line# 17";
            }elseif($LineNo==24){
                $LineName="Line# 18";
            }elseif($LineNo==25){
                $LineName="Line# 19";
            }elseif($LineNo==26){
                $LineName="Line# 20";
            }elseif($LineNo==38){
                $LineName="MLine# 1";
            }elseif($LineNo==39){
                $LineName="MLine# 2";
            }elseif($LineNo==32){
                $LineName="MLine# 3";
            }elseif($LineNo==40){
                $LineName="MLine# 4";
            }elseif($LineNo==41){
                $LineName="MLine# 5";
            }elseif($LineNo==42){
                $LineName="MLine# 6";
            }elseif($LineNo==43){
                $LineName="MLine# 7";
            }elseif($LineNo==44){
                $LineName="MLine# 8";
            }

if ($LineNo==1) {
$data_points1 = array();
$lineNames = array();
foreach($Line_Wise_record as $key) {
$point1 = array("label" => $key['LineName'] , "y" => Round($key['TotalChecked']));
array_push($lineNames, $key['LineName']);
array_push($data_points1, $point1); 

}
$data_points2 = array();
foreach($Line_Wise_record as $key1) {
$point2 = array("label" => $key1['LineName'] , "y" =>  Round($key1['Pass']));
array_push($data_points2, $point2);       
}
$data_points5 = array();
foreach($Line_Wise_record as $key12) {
$Pass= $key12['Pass'];
$Checked=$key12['TotalChecked'];
if ($Pass==0 or  $Checked==0) {
$RFT=0;
}else{
$RFT=($Pass/$Checked)*100;
  }
$point = array("label" => $key12['LineName'] , "y" =>  $RFT);    
    array_push($data_points5, $point);       
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
            borderWidth: 0,
            "turboThreshold": 3000,
        }
    },
    series: [{
            color:"#33cccc", 
            name: 'Check',
            data: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
        }, {
            color:"#1a8cff",
            name: 'Pass',
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
            borderWidth: 0,
            "turboThreshold": 3000,
        }
    },

    series: [{
            color:"#33cccc", 
            name: 'Check',
            data: <?php echo json_encode($data_points5, JSON_NUMERIC_CHECK); ?>
        },
    ]

    // series: [
    //     { 
    //         name: "",
    //         data: <?php echo json_encode($data_points5, JSON_NUMERIC_CHECK); ?>
    //     }
    // ]
});


// var chart = new CanvasJS.Chart("chartContainer5", {
//    // colorSet: "greenShades",
//     animationEnabled: true,
//     //exportEnabled: true,
//     theme: "light1", // "light1", "light2", "dark1", "dark2"
//     axisX:{
    
//     gridThickness: 0,
//     tickLength: 0,
//     lineThickness: 0,
//      labelFormatter: function(){
//         return " ";
//       }
//   },
//     data: [{

//          type: "column",
//         yValueFormatString: "#",
//         //indexLabel: "{y} %", 
//         color:"#00e6b8",  
//         dataPoints: <?php echo json_encode($data_points5, JSON_NUMERIC_CHECK); ?>
//     }]
// });
// chart.render();
}
</script>
<div class="row">
<div class="col-lg-6">
<div class="card">
<div class="card-body">
<h3 class="mb-3">Production </h3>
<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
<div class="col-lg-6" >
<div class="card" >
<div class="card-body">
<h3 class="mb-3">RFT</h3>
<div id="chartContainer2" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
</div>

<div class="col-lg-12">
<div class="card">


<h2>
<strong class="card-title">Machine Stitch Ball Production </strong>
</h2>

<div class="card-body table-responsive"> 
<table  id="table" class="table table-bordered table-hover table-responsive table-striped w-100" style="width: 100%;">
<thead class="bg-primary-200 text-light">
                <style type="text/css">
                  td{
                    text-align: center;
                  }
                  .Froming{
                    
                  }
                  .packing{
                   
                  }
                </style>                      
<tr class="bg-primary-200 text-light" style="font-weight: bold; color: #fff;"><td style="text-align: left;">Line Name</td> 
<td  style="width:10%; " >Check</td>
<td  style="width:10%;">Pass</td>
<td  style="width:10%;">RFT</td>
<td  style="width:10%;">Strength</td>
</tr>
</thead>
<tbody style="border:1px black solid; ">
<?php 
if($Line_Wise_record) {
foreach($Line_Wise_record as $key) {
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
<?php
 }
if ($Sum) {
foreach ($Sum as $key) {
$SumQty=$key['Pass'];
$SumFail=$key['Fail'];
$SumCheck=$key['TotalChecked'];
?>
<tr style="color: black;">
<td style="width:10%; text-align: right; color: #202020;">Total</td>
<td  style="width:10%; text-align: center;" ><?php echo Round($SumCheck);?></td>
<td  style="width:10%; text-align: center;" ><?php echo Round($SumQty);?></td>
<td  style="width:10%; text-align: center;"><?php echo Round($RFT);?>%</td>
<td  style="width:10%; text-align: center;" ></td>
</tr>
<?php }
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
}else{
$data_points1 = array();
$hours = array();
foreach($Line_Wise_record as $key) {
$point1 = array("label" => $key['HourName'] , "y" => Round($key['TotalChecked']));
array_push($data_points1, $point1);
array_push($hours, $key['HourName']); 

}
$data_points2 = array();
foreach($Line_Wise_record as $key1) {
$point2 = array("label" => $key1['HourName'] , "y" =>  Round($key1['Pass']));
array_push($data_points2, $point2);       
}
$data_points3 = array();
foreach($Line_Wise_record as $key12) {
$Pass= $key12['Pass'];
$Checked=$key12['TotalChecked'];
  if ($Pass==0 or  $Checked==0) {
    $RFT=0;
  }else{
    $RFT=($Pass/$Checked)*100;
  }
    $point = array("label" => $key12['HourName'] , "y" =>  $RFT);    
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
            borderWidth: 0,
            "turboThreshold": 3000,
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
            borderWidth: 0,
            "turboThreshold": 3000,
        }
    },
    series: [{
            color:"#33cccc", 
            name: 'RFT',
            data: <?php echo json_encode($data_points3, JSON_NUMERIC_CHECK); ?>
        },
    ]
    // series: [
    //     { 
    //         name: "",
    //         data: <?php echo json_encode($data_points3, JSON_NUMERIC_CHECK); ?>
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
//   name: "RFT",

//         indexLabelPlacement: "top",
//        color:"#00e6b8", 
//     dataPoints: <?php echo json_encode($data_points3, JSON_NUMERIC_CHECK); ?>
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
<style type="text/css">
                  td{
                    text-align: center;
                  }
                  .Froming{
                    
                  }
                  .packing{
                    
                  }
                </style> 

<div class="row">
<div class="col-lg-6">
<div class="card">
<div class="card-body table-responsive" >
<h3 class="mb-3"> <?php Echo $LineName;?> Production </h3>
<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
<div class="col-lg-6" >
<div class="card" >
<div class="card-body table-responsive">
<h3 class="mb-3">RFT</h3>
<div id="chartContainer2" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
</div>


<div class="col-lg-12">
    
<div class="card">
    
  

                                
<div class="card-header">
<strong class="card-title">Forming  Production </strong>
</div>

<div class="card-body table-responsive"> 
<table  id="table" class="table table-bordered table-hover table-responsive table-striped w-100" style="width: 100%;">
<thead class="bg-primary-200 text-light" style="color: #fff; font-size: 15px; border:2px black solid;">
<td style="text-align: left;">Hours Name</td>
<td style="text-align: left;">Article No</td>
<td style="text-align: center;">Size</td>         
<td style="text-align: center;">Checked</td>
<td style="text-align: center;">Pass</td>
<td style="text-align: center;">RFT</td>
<td style="text-align: center;">Total Worker</td>
<td style="text-align: center;">Efficiency</td>
</thead>
<tbody style="border:1px black solid; ">
<?php 
if($Line_Wise_record) {
foreach($Line_Wise_record as $key) {
   $HourName = $key['HourName'];
   $ArtCode = $key['ArtCode'];
   $ArtSize = $key['ArtSize'];
   $OpenQty = $key['OpenQty'];
   $FreshIssue = $key['FreshIssue'];
   $RepairReturn = $key['RepairReturn'];
   $OutPut = $key['OutPut'];
   $ChangeOverDownTIme = $key['ChangeOverDownTIme'];
   $OtherDowntime = $key['OtherDowntime'];
   $Mints = $key['Mints'];
  
  $Pass = $key['Pass'];
  $Checked = $key['TotalChecked'];
   $SAMValue = $key['SAMValue'];
   $PresentWorkers = $key['PresentWorkers'];
if ($Pass==0 or $Checked==0) {
  $RFT=0;
}else{
  $RFT=$Pass/$Checked*100;
}

if ($SAMValue==0 or $Pass== 0 or $PresentWorkers==0 or $Mints== 0){
$Efficiency=0;
}
else{
  $Efficiency=($Pass*$SAMValue)/($PresentWorkers*$Mints)*100;
}

?> 
<tr >
<td style="width:10%; text-align: left;"><?php echo $HourName;?></td>
<td style="width:10%; text-align: left;"><?php echo $ArtCode;?></td>
<td style="width:10%; text-align: center;"><?php echo $ArtSize;?></td>


<td style="width:10%; text-align: center;" class="Froming"><?php echo Round($Checked);?></td>
<td style="width:10%; text-align: center;" class="packing"><?php echo Round($Pass);?></td>

<td style="width:10%; text-align: center;"><?php echo Round($RFT);?>%</td>

<td  style="width:10%; text-align: center;" ><?php echo Round($PresentWorkers);?></td>
<td  style="width:10%; text-align: center;" ><?php echo Round($Efficiency);?>%</td>
</tr>
<?php } 
if ($Sum) {
foreach ($Sum as $key) {
$SumQty=$key['Pass'];
$SumFail=$key['Fail'];
$SumCheck=$key['TotalChecked'];
?>
<tr style="color: black;">

<td  style="width:10%; text-align: center;" ></td>
<td  style="width:10%; text-align: center;" ></td>
<td style="width:10%; text-align: center; color: black;">Total</td>
<td  style="width:10%; text-align: center;" ><?php echo Round($SumCheck);?></td>
<td  style="width:10%; text-align: center;" ><?php echo Round($SumQty);?></td>
<td  style="width:10%; text-align: center;"><?php echo Round($RFT);?>%</td>
<td  style="width:10%; text-align: center;" ></td>
<td  style="width:10%; text-align: center;" ></td>
</tr>
<?php }

}
} else{ ?>
<tr>
<td colspan="5"> <center>No Record Available Yet!</center> </td>
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

}else{
 ?>
<?php
$data_points1 = array();
$lineNames = array();
foreach($record as $key) {
$point1 = array("label" => $key['LineName'] , "y" => Round($key['TotalChecked']));
array_push($data_points1, $point1); 
array_push($lineNames, $key['LineName']); 
}
$data_points2 = array();
foreach($record as $key1) {
$point2 = array("label" => $key1['LineName'] , "y" =>  Round($key1['Pass']));
array_push($data_points2, $point2);       
}
$data_points5 = array();
foreach($record as $key12) {
$Pass= $key12['Pass'];

  $Checked=$key12['TotalChecked'];
  if ($Pass==0 or  $Checked==0) {
    $RFT=0;
  }else{
    $RFT=($Pass/$Checked)*100;
  }
    $point = array("label" => $key12['LineName'] , "y" =>  $RFT);    
    array_push($data_points5, $point);       
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
            borderWidth: 0,
            "turboThreshold": 3000,
        }
    },
    series: [{
            color:"#33cccc", 
            name: 'Check',
            data:  <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
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
            borderWidth: 0,
            "turboThreshold": 3000,
        }
    },
    series: [
        { 
            color:"#00e6b8",  
            name: "Check",
            data: <?php echo json_encode($data_points5, JSON_NUMERIC_CHECK); ?>
        }
    ]
});

// var chart = new CanvasJS.Chart("chartContainer5", {
//    // colorSet: "greenShades",
//     animationEnabled: true,
//     //exportEnabled: true,
//     theme: "light1", // "light1", "light2", "dark1", "dark2"
//    axisX:{
    
//     gridThickness: 0,
//     tickLength: 0,
//     lineThickness: 0,
//      labelFormatter: function(){
//         return " ";
//       }
//   },
//     data: [{

//          type: "column",
//         yValueFormatString: "#",
//       //  indexLabel: "{y} %", 
//         color:"#00e6b8",  
//         dataPoints: <?php echo json_encode($data_points5, JSON_NUMERIC_CHECK); ?>
//     }]
// });
// chart.render();
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
<div class="col-lg-6" >
<div class="card" >
<div class="card-body">
<h3 class="mb-3">RFT</h3>
<div id="chartContainer5" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
 </div>

<div class="col-lg-12">
<div class="card">
<div id="panel-1" class="panel">
<div class="panel-hdr">
<h2 class="card-header">
<strong class="card-title">Machine Stitch Ball Production </strong>
</h2>
</div>
<div class="card-body table-responsive"> 
<table  id="table" class="table table-bordered table-hover table-responsive table-striped w-100" style="width: 100%;">
<thead class="bg-primary-200 text-light">
                <style type="text/css">
                  td{
                    text-align: center;
                  }
                  .Froming{
                   
                  }
                  .packing{
                    
                  }
                </style>                      
                                       

<tr style="font-weight: bold; color: #fff;"><td style="text-align: left;">Line Name</td> 
<td  style="width:10%; " >Check</td>
<td  style="width:10%;">Pass</td>
<td  style="width:10%;">RFT</td>
<td  style="width:10%;">Strength</td>
</tr>
</thead>
<tbody style="border:1px black solid; ">
<?php 
if($record) {
 foreach($record as $key) {
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
if ($Sum) {
foreach ($Sum as $key) {
$SumQty=$key['Pass'];
$SumFail=$key['Fail'];
$SumCheck=$key['TotalChecked'];
?>
<tr style="color: black;">
<td style="width:10%; text-align: right; color: #202020;">Total</td>
<td  style="width:10%; text-align: center;" ><?php echo Round($SumCheck);?></td>
<td  style="width:10%; text-align: center;" ><?php echo Round($SumQty);?></td>
<td  style="width:10%; text-align: center;"><?php echo Round($RFT);?>%</td>
<td  style="width:10%; text-align: center;" ></td>
</tr>
<?php }
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js" integrity="sha512-gtII6Z4fZyONX9GBrF28JMpodY4vIOI0lBjAtN/mcK7Pz19Mu1HHIRvXH6bmdChteGpEccxZxI0qxXl9anY60w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>


<?php 
}
?>
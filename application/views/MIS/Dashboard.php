
<?php
if ($this->session->userdata('userStus')==1) {
$Month=date('m');
$Year=date('Y');
$Day=date('d');
$CurrentDate=$Year.'-'.$Month.'-'.$Day;
?>
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
<?php
if ($graph_data) {
$Sdate;
$Edate;
$Process;
if ($Process==1) {
$ProcessName="Airless Mini Ball";
}elseif($Process==2){
$ProcessName="Thermo Bounded Ball";
}elseif($Process==3){
$ProcessName="Machine Stitch Ball";
}elseif($Process==4){
$ProcessName="All";
}elseif($Process==5){
$ProcessName="Hand Stitch Ball";
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
<form action="<?php echo base_url('MIS/prdData/GetprdData'); ?>" method="POST">
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input type="Date" name="Sdate" id="Sdate" required="required" class="form-control"  value="<?php Echo $StartDateeee;?>"  style="width: 110%">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input type="Date"  name="Edate" id="Edate" required="required" class="form-control" value="<?php Echo $EndDateeee;?>" style="width: 110%">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class=" form-control-label">Factory Code:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-list"></i></div> -->
<select  class="form-control"  name="Process"  required="required" >
  <?php
if ($Process==1) {
?>
<option value="<?php Echo $Process;?>" ><?php Echo $ProcessName;?> </option>
<option value="4">All</option>
<option value="2">Thermo Bonded Ball</option>
<option value="3">Machine Stitch Ball</option>
<option value="5">Hand Stitch Ball</option>
<?php
}elseif($Process==2){
?>
<option value="<?php Echo $Process;?>" ><?php Echo $ProcessName;?> </option>
<option value="4">All</option>
<option value="1">Airless Mini Ball</option>
<option value="3">Machine Stitch Ball</option>
<option value="5">Hand Stitch Ball</option>
<?php
 }elseif($Process==3){
?>
<option value="<?php Echo $Process;?>" ><?php Echo $ProcessName;?> </option>
<option value="4">All</option>
<option value="1">Airles Mini Ball</option>
<option value="2">Thermo Bonded Ball</option>
<option value="5">Hand Stitch Ball</option>
<?php
}elseif($Process==4){
?>
<option value="<?php Echo $Process;?>" >All</option>
<option value="1">Airles Mini Ball</option>
<option value="2">Thermo Bonded Ball</option>
<option value="3">Machine Stitch Ball</option>
<option value="5">Hand Stitch Ball</option>
<?php
}elseif($Process==5){
?>
<option value="<?php Echo $Process;?>" >Hand Stitch Ball</option><option value="4">All</option>
<option value="1">Airles Mini Ball</option>
<option value="2">Thermo Bonded Ball</option>
<option value="3">Machine Stitch Ball</option>
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
?>
<form  action="<?php echo base_url('MIS/prdData/GetprdData'); ?>" method="POST">
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input type="Date" name="Sdate" id="Sdate" required="required" class="form-control"  value="<?php Echo $CurrentDate;?>"  >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input type="Date"  name="Edate" id="Edate"  required="required" class="form-control" value="<?php Echo $CurrentDate;?>" >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">Select Product:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<select  class="form-control"  name="Process"  required="required">
<option value="4">All</option>
<option value="1">Airless Mini Ball</option>
<option value="2">Thermo Bonded Ball</option>
<option value="3">Machine Stitch Ball</option>
<option value="5">Hand Stitch Ball</option>
</select>
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
}

?>
<br>
<?php
if ($graph_data) {
foreach ($graph_data as $key) {
    $LineName = $key['LineName'];
    $OutPut = $key['OutPut'];
    $data1[] = "['$LineName', $OutPut]";
}
foreach ($graph_data as $key) {

    $LineName = $key['LineName'];
   $Fail = $key['Fail'];
   $data2[] = "['$LineName', $Fail]";
}
 $dataPoint5 = array();
foreach ($graph_data as $key) {
    $LineName = $key['LineName'];
 $Pass= $key['OutPut'];
  $Fail= $key['Fail'];
  $Checked=$Pass+$Fail;
  if ($Pass==0 or  $Checked==0) {
    $RFT=0;
  }else{
    $RFT=Round(($Pass/$Checked)*100);
  }
 $data3[] = "['$LineName', $RFT]";
}



foreach ($TargetDW as $key) {

    $allTarget = $key['Target'];


}
foreach ($AmbTotalSum as $key) {
$AmbTotalSum=$key['OutPut'];
$Fail=$key['TotalChecked']-$key['OutPut'];
}


foreach ($AllSum as $keyFull) {
$AlllSum=$keyFull['OutPut'];
}
foreach ($TmpSum as $keyTM) {
$TMMSum=$keyTM['OutPut'];
}

foreach ($HSSum as $keyHS) {
$HSSSSum=$keyHS['OutPut'];
}
foreach ($MSSum as $keyMS) {
$MSSSSSum=$keyMS['OutPut'];
}


 $AllPass = $AlllSum;
   if($allTarget==Null){
 $AllPercentage=0;
 }else{
    $AllPercentage=$AllPass/$allTarget*100;
 }
if ($HSTargetDW) {
 foreach ($HSTargetDW as $key1) {

    $HSTarget = $key1['Target'];
   $HSPass = $HSSSSum;
      if($HSTarget==Null){
 $HSPercentage=0;
 }else{
    $HSPercentage=$HSPass/$HSTarget*100;
 }
}
}else{
  $HSTarget = 0;
   $HSPass = 0;
$HSPercentage=0;
}

foreach ($AMBTargetDW as $key6) {

    $AMbTarget = $key6['Target'];
   $AMBPass =$AmbTotalSum;
      if($AMbTarget==Null){
 $AMbPercentage=0;
 }else{
    $AMbPercentage=$AMBPass/$AMbTarget*100;
 }
}
foreach ($TMTargetDW as $key2) {

    $TM02Target = $key2['Target'];
   $TM02Pass = 500;
     if($TM02Target==Null){
 $TM02Percentage=0;
 }else{
    $TM02Percentage=$TM02Pass/$TM02Target*100;
 }

}
foreach ($TMTarget02DW as $key3) {

    $TM03Target = $key3['Target'];
   $TM03Pass = 600;

     if($TM03Target==Null){
 $TM03Percentage=0;
 }else{
    $TM03Percentage=$TM03Pass/$TM03Target*100;
 }

}
foreach ($TMTarget03DW as $key4) {

    $TM04Target = $key4['Target'];
   $TM04Pass =700;
      if($TM04Target==Null){
 $TM04Percentage=0;
 }else{
    $TM04Percentage=$TM04Pass/$TM04Target*100;
 }
}
foreach ($MSTargetDW as $key5) {

    $MSTarget = $key5['Target'];
   $MSPass =$MSSSSSum;
     if($MSTarget==Null){
 $MSPercentage=0;
 }else{
    $MSPercentage=$MSPass/$MSTarget*100;
 }

}

$TMProd=$TMMSum;
$TMtarget=$TM04Target+$TM03Target+$TM02Target;
 if($TMtarget==Null){
 $TMPercentage=0;
 }else{
    $TMPercentage=$TMProd/$TMtarget*100;
 }



?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>


<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>

<script>
window.onload = function() {

Highcharts.chart('chartContainer2', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
    },
    title: {
        text: ''
    },
    subtitle: {

    },
    plotOptions: {
        pie: {
            innerSize: 100,
            depth: 45
        }
    },
    series: [{
        name: 'Defect Qty',
        data: [<?php echo join(',', $data2,) ?>]
    }]
});

var chart = Highcharts.chart('chartContainer1', {

    title: {
        text: ''
    },


     xAxis: {

        labels: {
            enabled: false
        }
    },
    yAxis: {
      title: {
        text: 'Produced Qty '
    }
    },

    series: [{
        type: 'column',
        name: 'Produced Qty',
        colorByPoint: true,
        data: [<?php echo join(',', $data1) ?>],
        showInLegend: false
    }]

});
var chart = Highcharts.chart('chartContainer5', {

    title: {
        text: ''
    },


     xAxis: {

        labels: {
            enabled: false
        }
    },
    yAxis: {
      title: {
        text: 'RFT'
    }
    },

    series: [{
        type: 'column',
        name: 'RFT',
        colorByPoint: true,
        data: [<?php echo join(',', $data3,) ?>],
        showInLegend: false
    }]

});



Highcharts.chart('gaugeAll', {



        chart: {
            type: 'solidgauge',
            backgroundColor: '#fff'
        },
         navigation: {
        buttonOptions: {
            enabled: false
        }
    },

                title: {
            text: 'Target: <?php echo (int)$allTarget;?><br>Produced:<?php echo (int)$AllPass;?>'
        },

        pane: {
            center: ['50%', '80%'],
            size: '100%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor: '#FFF',
                innerRadius: '10%',
                outerRadius: '105%',
                shape: 'arc',
                borderColor: '#fff'
            }
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,

            stops: [
                [0.1, '#e74c3c'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#2ecc71'] // green
                ],
            minorTickInterval: null,
            tickPixelInterval: 400,
            tickWidth: 0,
            gridLineWidth: 0,
            gridLineColor: 'transparent',
            labels: {
                enabled: false
            }
        },

        series: [{
            data: [<?php echo (int)$AllPercentage;?>],
            dataLabels: {
             borderWidth: 0,
            format:
                '<div style="font-size:30px;">{y}%</div>'
                 },
            innerRadius:'150%',

        }]
    });

Highcharts.chart('gauge', {
        chart: {
            type: 'solidgauge',
            backgroundColor: '#fff'
        },
         navigation: {
        buttonOptions: {
            enabled: false
        }
    },
                title: {
            text: 'AMB Target: <?php echo (int)$AMbTarget;?><br>Produced:<?php echo (int)$AMBPass;?> '
        },

        pane: {
            center: ['50%', '80%'],
            size: '100%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor: '#FFF',
                innerRadius: '10%',
                outerRadius: '105%',
                shape: 'arc',
                borderColor: '#fff'
            }
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            min: 0,
            max:100,

            stops: [
                [0.1, '#e74c3c'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#2ecc71'] // green
                ],
            minorTickInterval: null,
            tickPixelInterval: 400,
            tickWidth: 0,
            gridLineWidth: 0,
            gridLineColor: 'transparent',
            labels: {
                enabled: false
            }
        },

        series: [{
            data: [<?php echo (int)$AMbPercentage;?>],
            dataLabels: {
             borderWidth: 0,
            format:
                '<div style="font-size:15px;">{y}%</div>'

        },
            innerRadius:'150%',

        }]
    });
Highcharts.chart('gauge1', {

        chart: {
            type: 'solidgauge',
            backgroundColor: '#fff'
        },

                  title: {
            text: 'TM Ball Target: <?php echo (int)$TMtarget;?><br>Produced:<?php echo (int)$TMProd;?> '
        },
                 navigation: {
        buttonOptions: {
            enabled: false
        }
    },

        pane: {
            center: ['50%', '80%'],
            size: '100%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor: '#FFF',
                innerRadius: '10%',
                outerRadius: '105%',
                shape: 'arc',
                borderColor: '#fff'
            }
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            min: 0,
            max:100,

            stops: [
                [0.1, '#e74c3c'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#2ecc71'] // green
                ],
            minorTickInterval: null,
            tickPixelInterval: 400,
            tickWidth: 0,
            gridLineWidth: 0,
            gridLineColor: 'transparent',
            labels: {
                enabled: false
            }
        },

        series: [{
            data: [<?php echo  (int)$TMPercentage;?>],
                dataLabels: {
             borderWidth: 0,
            format:
               '<div style="font-size:15px;">{y}%</div>'

        },
            innerRadius:'150%',

        }]
    });

Highcharts.chart('gauge2', {

        chart: {
            type: 'solidgauge',
            backgroundColor: '#fff'
        },

              title: {
            text: 'MSB Target: <?php echo (int)$MSTarget;?><br>Produced:<?php echo (int)$MSPass;?> '
        },

                 navigation: {
        buttonOptions: {
            enabled: false
        }
    },

        pane: {
            center: ['50%', '80%'],
            size: '100%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor: '#FFF',
                innerRadius: '10%',
                outerRadius: '105%',
                shape: 'arc',
                borderColor: '#fff'
            }
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,
        stops: [
                [0.1, '#e74c3c'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#2ecc71'] // green
                ],
            minorTickInterval: null,
            tickPixelInterval: 400,
            tickWidth: 0,
            gridLineWidth: 0,
            gridLineColor: 'transparent',
            labels: {
                enabled: false
            }
        },

        series: [{
            data: [<?php echo  (int)$MSPercentage;?>],
                dataLabels: {
             borderWidth: 0,
            format:
                '<div style="font-size:15px;">{y}%</div>'

        },
            innerRadius:'150%',

        }]
    });

Highcharts.chart('gauge3', {

        chart: {
            type: 'solidgauge',
            backgroundColor: '#fff'
        },

              title: {
            text: 'HS Target: <?php echo (int)$HSTarget;?><br>Produced:<?php echo (int)$HSPass;?> '
        },

                 navigation: {
        buttonOptions: {
            enabled: false
        }
    },

        pane: {
            center: ['50%', '80%'],
            size: '100%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor: '#FFF',
                innerRadius: '10%',
                outerRadius: '105%',
                shape: 'arc',
                borderColor: '#fff'
            }
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,
        stops: [
                [0.1, '#e74c3c'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#2ecc71'] // green
                ],
            minorTickInterval: null,
            tickPixelInterval: 400,
            tickWidth: 0,
            gridLineWidth: 0,
            gridLineColor: 'transparent',
            labels: {
                enabled: false
            }
        },

        series: [{
            data: [<?php echo  (int)$HSPercentage;?>],
                dataLabels: {
             borderWidth: 0,
            format:
                '<div style="font-size:15px;">{y}%</div>'

        },
            innerRadius:'150%',

        }]
    });
}


</script>

<?php

if ($Process==1) {
if ($AmbTotalSumAll) {
   foreach ($AmbTotalSumAll as $key) {
$AmbSum=$key['OutPut'];
$Fail=$key['TotalChecked']-$key['OutPut'];
}
}
// $AmbSum=$AmbSum[0]['OutPut'];
// $Fail=$AmbSum[0]['Fail'];
}elseif($Process==2){
$AmbSum=$TmpSum[0]['OutPut'];
$Fail=$TmpSum[0]['Fail'];
}elseif($Process==3){
$AmbSum=$MSSum[0]['OutPut'];
$Fail=$MSSum[0]['Fail'];
}elseif($Process==4){
$AmbSum=$AllSum[0]['OutPut'];
$Fail=$AllSum[0]['Fail'];
}elseif($Process==5){
$AmbSum=$HSSum[0]['OutPut'];
$Fail=$HSSum[0]['Fail'];
}
$Precentage=($Fail/$AmbSum)*100;
?>



      <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="p-0 clearfix">
                <i class="fa fa-line-chart bg-success p-4 px-5 font-2xl mr-3 float-left text-light"></i>
                <div class="h5 text-success mb-0 pt-3"><span class="count"><?php Echo $AmbSum;?></div>
                <div class="text-muted text-uppercase font-weight-bold font-xs small">Total  Production</div>
            </div>
        </div>
    </div>
    <!--/.col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="p-0 clearfix">
                <i class="fa fa-pie-chart bg-danger p-4 px-5 font-2xl mr-3 float-left text-light"></i>
                <div class="h5 text-danger mb-0 pt-3"><span class="count"><?php Echo $Fail;?></span> (<span class="count"><?php Echo Round($Precentage,2);?> </span>%)</div>
                <div class="text-muted text-uppercase font-weight-bold font-xs small">Total  Defects </div>
            </div>
        </div>
    </div>

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
<h3 class="mb-3">Defects </h3>
<div id="chartContainer2" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
<div class="col-lg-12 d-none" >
<div class="card">
<div class="card-body" >
<h3 class="mb-3">Target Achieved</h3>
<div class="col-lg-6" >
<div id="gaugeAll" style="height:300px;"></div>
</div>
<div class="col-lg-3" >
<div id="gauge" style="height:200px;"></div>
</div>
<div class="col-lg-3" >
<div id="gauge1" style="height:200px;"></div>
</div>
<div class="col-lg-3" >
<div id="gauge2" style="height:200px;"></div>
</div>
<div class="col-lg-3" >
<div id="gauge3" style="height:200px;"></div>
</div>
</div>
</div>
</div>


<div class="col-lg-6">
<div class="card">
<!-- <div class="card-header">
<strong class="card-title"><?php Echo $Process_name;?> Production </strong>
</div>   -->
<?php
if ($Process==1) {
?>
<div class="modal fade" id="infoviewModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="ModalLabel">Line Information</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close Out</button>
</div>
</div>
</div>
</div>
<div class="card-body">
<table  class="table table-sm">
<thead class="thead-dark">
<tr>
<th scope="col">Line Name</th>
<th scope="col" style="text-align: center;">Pass</th>
<th scope="col" style="text-align: center;">Fail</th>
<th scope="col" style="text-align: center;">RFT</th>
<th scope="col" style="text-align: center;">View</th>
</tr>
</thead>
<tbody>
<?php
foreach ($graph_data as $key) {
$CheckedQty=$key['OutPut']+$key['Fail'];
if ($key['OutPut']==0 or $CheckedQty==0) {
$RFT=0;
}else{
$RFT=($key['OutPut']/$CheckedQty)*100;
}
$LineNo= $key['LineID'];
?>
<tr id="<?php echo $key['LineID']; ?>">
<td style="text-align: left;">
<?php Echo $key['LineName'];?>
</td>
<td  style="text-align: center;"><?php Echo Round($key['OutPut']);?></td>
<td style="text-align: center;"><?php Echo Round($key['Fail']);?></td>
<td style="color: #3399ff;text-align: center;" ><?php Echo Round($RFT,2);?> %</td>
<td style="color: #3399ff;text-align: center;"  >
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-sm btn-outline-primary py-0 abc" data-toggle="modal" data-target="#myModal" style="height: 20%">View</button>
<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Line Information</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<table  id="table" class="table table-sm nowrap" style="width: 100%;">
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
<tr style="background-color: #282828; color: #fff;">
<td></td>
<td colspan="5" style="text-align: center; border-right: 1px #ffff solid;border-right: 1px #ffff solid;">Forming</td>
<td colspan="4" style="text-align: center;">Packing </td></tr>
<tr style="font-weight: bold; background-color: #282828; color: #fff;" >
<td style="width:20%; text-align: left;">Hours</td>
<td  style="width:10%; text-align: left;">Article</td>
<td  style="width:10%;">Checked</td>
<td  style="width:10%;">Passed</td>
<td  style="width:10%;">Fail</td>
<td  style="width:10%;">RFT</td>
<td  style="width:10%;">Checked</td>
<td  style="width:10%;">Passed</td>
<td  style="width:10%;">Fail</td>
<td  style="width:10%;">RFT</td>
</tr>
</thead>
<tbody style="border:1px black solid;" id="data">
</tbody>
</table>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</td>
</tr>
<?php
}
$Qty=$AmbSum+$Fail;
if ($AmbSum==0 or $Qty==0) {
   $FinalRFT=0;
  }else{
  $FinalRFT=($AmbSum/$Qty)*100;
}
?>
<tr style="background-color: #202020; color: #fff;">
<td style="text-align: left;">Total</td>
<td style="text-align: center;"><?php Echo Round($AmbSum);?></td>
<td style="text-align: center;"><?php Echo Round($Fail);?></td>
<td style="text-align: center;"><?php Echo Round($FinalRFT,2);?> %</td>
<td></td>
</tr>
</tbody>
</table>
</div>
  <?php
}elseif($Process==2){
 ?>
 <div class="card-body">
<table class="table table-sm" >
<thead class="thead-dark">
<tr>
<th scope="col">Line Name</th>
<th scope="col" style="text-align: center;">Pass</th>
<th scope="col" style="text-align: center;">Fail</th>
<th scope="col" style="text-align: center;">RFT</th>
<th scope="col" style="text-align: center;">View</th>
</tr>
</thead>
<tbody>
<?php
foreach ($graph_data as $key) {
$CheckedQty=$key['OutPut']+$key['Fail'];
if ($key['OutPut']==0 or $CheckedQty==0) {
$RFT=0;
}else{
$RFT=($key['OutPut']/$CheckedQty)*100;
}
?>
<tr id="<?php echo $key['LineName']; ?>">

<td style="text-align: left;"><?php Echo $key['LineName'];?></td>
<td  style="text-align: center;"><?php Echo Round($key['OutPut']);?></td>
<td style="text-align: center;"><?php Echo Round($key['Fail']);?></td>
<td style="color: #3399ff;text-align: center;" ><?php Echo Round($RFT,2);?> %</td>
<td style="color: #3399ff;text-align: center;">
 <button type="button" class="btn btn-sm btn-outline-primary py-0 xyz" data-toggle="modal" data-target="#myModal1" >View</button>
<div id="myModal1" class="modal fade" role="dialog">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Line Information</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<table   id="table" class="table table-sm nowrap" style="width: 100%;">
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
<tr style="background-color: #282828; color: #fff;">
<td></td>
<td colspan="5" style="text-align: center; border-right: 1px #ffff solid;border-right: 1px #ffff solid;">Forming</td>
<td colspan="4" style="text-align: center;">Final QC </td></tr>
<tr style="font-weight: bold; background-color: #282828; color: #fff;" >
<td  style="width:70%;text-align: left;">Hours</td>
<td  style="width:10%; text-align: left;">Article</td>
<td  style="width:10%;">Checked</td>
<td  style="width:10%;">Passed</td>
<td  style="width:10%;">Fail</td>
<td  style="width:10%;">RFT</td>
<td  style="width:10%;">Checked</td>
<td  style="width:10%;">Passed</td>
<td  style="width:10%;">Fail</td>
<td  style="width:10%;">RFT</td>
</tr>
</thead>
<tbody style="border:1px black solid;" id="data1">
</tbody>
</table>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>



</td>
</tr>
<?php
}
$Qty=$AmbSum+$Fail;
if ($AmbSum==0 or $Qty==0) {
   $FinalRFT=0;
  }else{
  $FinalRFT=($AmbSum/$Qty)*100;
}
?>
<tr style="background-color: #202020; color: #fff;">
<td style="text-align: left;">Total</td>
<td style="text-align: center;"><?php Echo Round($AmbSum);?></td>
<td style="text-align: center;"><?php Echo Round($Fail);?></td>
<td style="text-align: center;"><?php Echo Round($FinalRFT,2);?> %</td>
<td></td>
</tr>
</tbody>
</table>
</div>
<?php
}elseif($Process==3){
 ?>
<div class="card-body">
<table  class="table table-sm">
<thead class="thead-dark">
<tr>
<th scope="col">Line Name</th>
<th scope="col" style="text-align: center;">Pass</th>
<th scope="col" style="text-align: center;">Fail</th>
<th scope="col" style="text-align: center;">RFT</th>
<th scope="col" style="text-align: center;">View</th>

</tr>
</thead>
<tbody>
<?php
foreach ($graph_data as $key) {
  $CheckedQty=$key['OutPut']+$key['Fail'];
if ($key['OutPut']==0 or $CheckedQty==0) {
$RFT=0;
}else{
$RFT=($key['OutPut']/$CheckedQty)*100;
}
?>
<tr id="<?php echo $key['LineID']; ?>">
<td style="text-align: left;"><?php Echo $key['LineName'];?></td>
<td  style="text-align: center;"><?php Echo Round($key['OutPut']);?></td>
<td style="text-align: center;"><?php Echo Round($key['Fail']);?></td>
<td style="color: #3399ff;text-align: center;" ><?php Echo Round($RFT,2);?> %</td>
<td  style="text-align: center;">
<button type="button" class="btn btn-sm btn-outline-primary py-0 fgh" data-toggle="modal" data-target="#myModal2" style="height: 20%">View</button>
<div id="myModal2" class="modal fade" role="dialog">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Line Information</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<table   id="table" class="table table-sm nowrap" style="width: 100%;" >
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

<tr style="font-weight: bold; background-color: #282828; color: #fff;" >
<td style="text-align: left;">Hours</td>
<td  style="width:10%; text-align: left;">Article</td>
<td  style="width:10%; text-align: left;">Size</td>
<td  style="width:10%;">Checked</td>
<td  style="width:10%;">Passed</td>
<td  style="width:10%;">Fail</td>
<td  style="width:10%;">RFT</td>
</tr>
</thead>
<tbody style="border:1px black solid;" id="data11">
</tbody>
</table>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

</td>
</tr>
<?php
}
$Qty=$AmbSum+$Fail;
if ($AmbSum==0 or $Qty==0) {
   $FinalRFT=0;
  }else{
  $FinalRFT=($AmbSum/$Qty)*100;
}
?>
<tr style="background-color: #202020; color: #fff;">
<td  style="text-align: left;">Total</td>
<td  style="text-align: center;"><?php Echo Round($AmbSum);?></td>
<td  style="text-align: center;"><?php Echo Round($Fail);?></td>
<td  style="text-align: center;"><?php Echo Round($FinalRFT,2);?> %</td>
<td></td>

</tr>
</tbody>
</table>
</div>
<?php
}elseif($Process==4){

 ?>
<div class="card-body">
<table class="table table-sm" id="table">
<thead class="thead-dark">
<tr>
<th scope="col">Product</th>
<th scope="col" style="text-align: center;">Pass</th>
<th scope="col" style="text-align: center;">Fail</th>
<th scope="col" style="text-align: center;">RFT</th>
</tr>
</thead>
<tbody>
<?php
foreach ($graph_data as $key) {
$CheckedQty=$key['OutPut']+$key['Fail'];
if ($key['OutPut']==0 or $CheckedQty==0) {
$RFT=0;
}else{
$RFT=($key['OutPut']/$CheckedQty)*100;
}
?>
<tr>
<td><?php Echo $key['LineName'];?></td>
<td  style="text-align: center;"><?php Echo Round($key['OutPut']);?></td>
<td style="text-align: center;"><?php Echo Round($key['Fail']);?></td>
<td style="color: #3399ff;text-align: center;" ><?php Echo Round($RFT,2);?> %</td>
</tr>
<?php
 }
$Qty=$AmbSum+$Fail;
if ($AmbSum==0 or $Qty==0) {
   $FinalRFT=0;
  }else{
  $FinalRFT=($AmbSum/$Qty)*100;
}
?>
<tr style="background-color: #202020; color: #fff;">
<td  style="text-align: right;">Total</td>
<td  style="text-align: center;"><?php Echo Round($AmbSum);?></td>
<td  style="text-align: center;"><?php Echo Round($Fail);?></td>
<td   style="text-align: center;"><?php Echo Round($FinalRFT,2);?> %</td>
</tr>
</tbody>
</table>
</div>
<?php
}elseif($Process==5){
 ?>
<div class="card-body">
<table  class="table table-sm">
<thead class="thead-dark">
<tr>
<th scope="col">Article Code </th>
<th scope="col" style="text-align: center;">Pass</th>
<th scope="col" style="text-align: center;">Fail</th>
<th scope="col" style="text-align: center;">RFT</th>
</tr>
</thead>
<tbody>
 <?php
foreach ($graph_data as $key) {
$CheckedQty=$key['OutPut']+$key['Fail'];
if ($key['OutPut']==0 or $CheckedQty==0) {
$RFT=0;
}else{
$RFT=($key['OutPut']/$CheckedQty)*100;
}
?>
<tr>
<td><?php Echo $key['LineName'];?></td>
<td  style="text-align: center;"><?php Echo Round($key['OutPut']);?></td>
<td style="text-align: center;"><?php Echo Round($key['Fail']);?></td>
<td style="color: #3399ff;text-align: center;" ><?php Echo Round($RFT,2);?> %</td>
</tr>
<?php
}
$Qty=$AmbSum+$Fail;
if ($AmbSum==0 or $Qty==0) {
   $FinalRFT=0;
  }else{
  $FinalRFT=($AmbSum/$Qty)*100;
}
?>
<tr style="background-color: #202020; color: #fff;">
<td  style="text-align: right;">Total</td>
<td  style="text-align: center;"><?php Echo Round($AmbSum);?></td>
<td  style="text-align: center;"><?php Echo Round($Fail);?></td>
<td   style="text-align: center;"><?php Echo Round($FinalRFT,2);?> %</td>
</tr>
</tbody>
</table>
</div>
<?php }
?>
</div>
</div>
<div class="col-lg-6">
<div class="card">
<div class="card-body">
<h3 class="mb-3">RFT (<span class="count"><?php Echo Round($FinalRFT,2);?> </span> %)
</h3>
<div id="chartContainer5" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
<?php
}else{

    $OutPut = $AmbPrd[0]['OutPut'];
    $AMbFail = $AmbPrd[0]['Fail'];
if ($OutPut == Null) {
    $OutPut=0;
 }else{
$OutPut = $AmbPrd[0]['OutPut'];
}
if ($AMbFail == Null) {
  $AMbFail=0;
}else{
$AMbFail = $AmbPrd[0]['Fail'];
}
$TmOutPut = $Tmprd[0]['Pass'];
$TMFail = $Tmprd[0]['FailQty'];
if ($TmOutPut == Null) {
   $TmOutPut=0;

}else{
    $TmOutPut = $Tmprd[0]['Pass'];

  }
if ($TMFail == Null) {
   $TMFail =0;
}else{
    $TMFail = $Tmprd[0]['FailQty'];
}
$MSOutPut = $MSprd[0]['OutPut'];
$MSFail = $MSprd[0]['Fail'];
if ($MSOutPut == Null) {
    $MSOutPut=0;
}else{
   $MSOutPut = $MSprd[0]['OutPut'];
}
if ($MSFail == Null) {
    $MSFail =0;
}else{
   $MSFail = $MSprd[0]['Fail'];
}

if ($HSPrd == Null) {
$HSOutPut = 0;
$HSFail=0;
}else{
$HSOutPut = $HSPrd[0]['PassQty'];
$HSFail= $HSPrd[0]['FailQty'];
}
$totalPrd= $MSOutPut + $TmOutPut+$OutPut+$HSOutPut;
$totalFail= $MSFail + $TMFail+$AMbFail+$HSFail;

$data11[] = "['Hand  Stitch Ball', $HSOutPut]";
$data22[] = "['Machine Stitch Ball', $MSOutPut]";
$data33[] = "['Airless Mini Ball', $OutPut]";
$data44[] = "['Thermo Bonded Ball', $TmOutPut]";

$dataD11[] = "['Hand  Stitch Ball', $HSFail]";
$dataD22[] = "['Machine Stitch Ball',$MSFail]";
$dataD33[] = "['Airless Mini Ball', $AMbFail]";
$dataD44[] = "['Thermo Bonded Ball',$TMFail]";

if ($AMBTarget) {
foreach ($AMBTarget as $key) {
$AmbProduces=$key['Pass'];
$AmbTarget=$key['Target'];
 if($AmbTarget==Null){
 $AmbPercentage=0;
 }else{
$AmbPercentage=$AmbProduces/$AmbTarget*100;
}
}
}else{
$AmbProduces=0;
$AmbTarget=0;
$AmbPercentage=0;
}
if ($TMTarget) {

foreach ($TMTarget as $key1) {
 $TMProduces=$key1['PassQty'];

 $TMTarget=$key1['Target'];
 if($TMTarget==Null){
 $TMPercentage=0;
 }else{
    $TMPercentage=$TMProduces/$TMTarget*100;
 }

}
}else{
$TMProduces=0;
$TMTarget=0;
$TMPercentage=0;
}

if ($TMTarget03) {

foreach ($TMTarget03 as $key03) {
 $TMProduces03=$key03['PassQty'];

 $TMTarget03=$key03['Target'];
 if($TMTarget03==Null){
 $TMPercentage03=0;
 }else{
    $TMPercentage03=$TMProduces03/$TMTarget03*100;
 }

}
}else{
$TMProduces03=0;
$TMTarget03=0;
$TMPercentage03=0;
}

if ($TMTarget04) {

foreach ($TMTarget04 as $key04) {
 $TMProduces04=$key04['PassQty'];

 $TMTarget04=$key04['Target'];
 if($TMTarget04==Null){
 $TMPercentage04=0;
 }else{
    $TMPercentage04=$TMProduces04/$TMTarget04*100;
 }

}
}else{
$TMProduces04=0;
$TMTarget04=0;
$TMPercentage04=0;
}


$TMProducesFinal=$TMProduces04+$TMProduces03+$TMProduces;

$TMTargetFinal=$TMTarget04+$TMTarget03+$TMTarget;

if($TMTargetFinal==Null){
 $TmtargetPrec=0;
 }else{
$TmtargetPrec=$TMProducesFinal/$TMTargetFinal*100;
}


if ($MSTarget) {
foreach ($MSTarget as $key2) {
$MSProduces=$key2['Pass'];
$MSTarget=$key2['Target'];
 if($MSTarget==Null){
 $MSPercentage=0;
 }else{
$MSPercentage=$MSProduces/$MSTarget*100;
}
}
}else{
 $MSProduces=0;
 $MSTarget=0;
 $MSPercentage=0;

}

if ($Target) {
foreach ($Target as $key2) {
$AllProduces=$key2['Pass'];
$AllTarget=$key2['OrderQty'];
 if($AllTarget==Null){
 $Percentage=0;
 }else{
$Percentage=$AllProduces/$AllTarget*100;
}
}
}else{
 $AllProduces=0;
 $AllTarget=0;
 $Percentage=0;

}
if ($HSTarget) {
foreach ($HSTarget as $key2) {

$HSProduces=$key2['PassQty'];
$HSTarget12=$key2['Target'];
 if($HSTarget12==Null){
 $HSPercentage=0;
 }else{
$HSPercentage=$HSProduces/$HSTarget12*100;
}
}
}else{
 $HSProduces=0;
 $HSTarget12=0;
 $HSPercentage=0;

}

$ProducesFinal=$TMProducesFinal+$AmbProduces+$MSProduces+$HSProduces;//All Producd MonthWise

$TargetFinal=$TMTargetFinal+$AmbTarget+$MSTarget+$HSTarget12;//All target MonthWise

if($TargetFinal==Null){
 $TrgetPrec=0;
 }else{
$TrgetPrec=$ProducesFinal/$TargetFinal*100; //MonthWise Target
}

$DailyTarget=$TargetFinal/26;
$totalPrd;
if($DailyTarget==Null){
 $TrPrec=0;
 }else{
$TrPrec=$totalPrd/$DailyTarget*100;
}



$DailyTMTarget=$TMTargetFinal/26;
$TmOutPut;
if($DailyTMTarget==Null){
 $TrTMPrec=0;
 }else{
$TrTMPrec=$TmOutPut/$DailyTMTarget*100;
}

$DailyAMbTarget=$AmbTarget/26;
$OutPut;
if($DailyAMbTarget==Null){
 $TrAMbPrec=0;
 }else{
$TrAMbPrec=$OutPut/$DailyAMbTarget*100;
}

$DailyMSTarget=$MSTarget/26;
$MSOutPut;
if($DailyMSTarget==Null){
 $TrMSPrec=0;
 }else{
$TrMSPrec=$MSOutPut/$DailyMSTarget*100;
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
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
    },
    title: {
        text: ''
    },
    subtitle: {

    },
    plotOptions: {
        pie: {
            innerSize: 100,
            depth: 45
        }
    },
    series: [{
        name: 'Defect Qty',
        data: [<?php echo join($dataD11); ?>, <?php echo join($dataD22); ?>, <?php echo join($dataD33); ?>, <?php echo join($dataD44); ?>]
    }]
});

var chart = Highcharts.chart('chartContainer', {

    title: {
        text: ''
    },


     xAxis: {

        labels: {
            enabled: false
        }
    },
    yAxis: {
      title: {
        text: 'Produced Qty '
    }
    },

    series: [{
        type: 'column',
        name: 'Produced Qty',
        colorByPoint: true,
        data: [<?php echo join(',', $data11,) ?>,<?php echo join(',', $data22,) ?>,<?php echo join(',', $data33,) ?>,<?php echo join(',',$data44,) ?>],
        showInLegend: false
    }]

});


Highcharts.chart('gaugeAll', {



        chart: {
            type: 'solidgauge',
            backgroundColor: '#fff'
        },
         navigation: {
        buttonOptions: {
            enabled: false
        }
    },

                title: {
            text: 'Target: <?php echo (int)$TargetFinal;?><br>Produced:<?php echo (int)$ProducesFinal;?>'
        },

        pane: {
            center: ['50%', '80%'],
            size: '100%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor: '#FFF',
                innerRadius: '10%',
                outerRadius: '105%',
                shape: 'arc',
                borderColor: '#fff'
            }
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,

            stops: [
                [0.1, '#e74c3c'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#2ecc71'] // green
                ],
            minorTickInterval: null,
            tickPixelInterval: 400,
            tickWidth: 0,
            gridLineWidth: 0,
            gridLineColor: 'transparent',
            labels: {
                enabled: false
            }
        },

        series: [{
            data: [<?php echo (int)$TrgetPrec;?>],
            dataLabels: {
             borderWidth: 0,
            format:
                '<div style="font-size:30px;">{y}%</div>'

        },
            innerRadius:'150%',

        }]
    });




Highcharts.chart('gauge', {

        chart: {
            type: 'solidgauge',
            backgroundColor: '#fff'
        },
         navigation: {
        buttonOptions: {
            enabled: false
        }
    },

                title: {
            text: 'AMB Target: <?php echo (int)$AmbTarget;?><br>Produced:<?php echo (int)$AmbProduces;?> '
        },

        pane: {
            center: ['50%', '80%'],
            size: '100%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor: '#FFF',
                innerRadius: '10%',
                outerRadius: '105%',
                shape: 'arc',
                borderColor: '#fff'
            }
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            min: 0,
            max:100,

            stops: [
                [0.1, '#e74c3c'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#2ecc71'] // green
                ],
            minorTickInterval: null,
            tickPixelInterval: 400,
            tickWidth: 0,
            gridLineWidth: 0,
            gridLineColor: 'transparent',
            labels: {
                enabled: false
            }
        },

        series: [{
            data: [<?php echo (int)$AmbPercentage;?>],
            dataLabels: {
             borderWidth: 0,
            format:
                '<div style="font-size:15px;">{y}%</div>'

        },
            innerRadius:'150%',

        }]
    });
Highcharts.chart('gauge1', {

        chart: {
            type: 'solidgauge',
            backgroundColor: '#fff'
        },

                  title: {
            text: 'TM Ball Target: <?php echo (int)$TMTargetFinal;?><br>Produced:<?php echo (int)$TMProducesFinal;?> '
        },
                 navigation: {
        buttonOptions: {
            enabled: false
        }
    },

        pane: {
            center: ['50%', '80%'],
            size: '100%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor: '#FFF',
                innerRadius: '10%',
                outerRadius: '105%',
                shape: 'arc',
                borderColor: '#fff'
            }
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            min: 0,
            max:100,

            stops: [
                [0.1, '#e74c3c'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#2ecc71'] // green
                ],
            minorTickInterval: null,
            tickPixelInterval: 400,
            tickWidth: 0,
            gridLineWidth: 0,
            gridLineColor: 'transparent',
            labels: {
                enabled: false
            }
        },

        series: [{
            data: [<?php echo  (int)$TmtargetPrec;?>],
                dataLabels: {
             borderWidth: 0,
            format:
               '<div style="font-size:15px;">{y}%</div>'

        },
            innerRadius:'150%',

        }]
    });

Highcharts.chart('gauge2', {

        chart: {
            type: 'solidgauge',
            backgroundColor: '#fff'
        },

              title: {
            text: 'MSB Target: <?php echo (int)$MSTarget;?><br>Produced:<?php echo (int)$MSProduces;?> '
        },

                 navigation: {
        buttonOptions: {
            enabled: false
        }
    },

        pane: {
            center: ['50%', '80%'],
            size: '100%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor: '#FFF',
                innerRadius: '10%',
                outerRadius: '105%',
                shape: 'arc',
                borderColor: '#fff'
            }
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,
        stops: [
                [0.1, '#e74c3c'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#2ecc71'] // green
                ],
            minorTickInterval: null,
            tickPixelInterval: 400,
            tickWidth: 0,
            gridLineWidth: 0,
            gridLineColor: 'transparent',
            labels: {
                enabled: false
            }
        },

        series: [{
            data: [<?php echo  (int)$MSPercentage;?>],
                dataLabels: {
             borderWidth: 0,
            format:
                '<div style="font-size:15px;">{y}%</div>'

        },
            innerRadius:'150%',

        }]
    });


Highcharts.chart('gauge3', {

        chart: {
            type: 'solidgauge',
            backgroundColor: '#fff'
        },

              title: {
            text: 'HS Target: <?php echo (int)$HSTarget12;?><br>Produced:<?php echo (int)$HSProduces;?> '
        },

                 navigation: {
        buttonOptions: {
            enabled: false
        }
    },

        pane: {
            center: ['50%', '80%'],
            size: '100%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor: '#FFF',
                innerRadius: '10%',
                outerRadius: '105%',
                shape: 'arc',
                borderColor: '#fff'
            }
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,
        stops: [
                [0.1, '#e74c3c'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#2ecc71'] // green
                ],
            minorTickInterval: null,
            tickPixelInterval: 400,
            tickWidth: 0,
            gridLineWidth: 0,
            gridLineColor: 'transparent',
            labels: {
                enabled: false
            }
        },

        series: [{
            data: [<?php echo  (int)$HSPercentage;?>],
                dataLabels: {
             borderWidth: 0,
            format:
                '<div style="font-size:15px;">{y}%</div>'

        },
            innerRadius:'150%',

        }]
    });
Highcharts.chart('gaugeDaily', {


        chart: {
            type: 'solidgauge',
            backgroundColor: '#fff'
        },
         navigation: {
        buttonOptions: {
            enabled: false
        }
    },

                title: {
            text: 'Target: <?php echo (int)$DailyTarget;?><br>Produced:<?php echo (int)$totalPrd;?>'
        },

        pane: {
            center: ['50%', '80%'],
            size: '100%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor: '#FFF',
                innerRadius: '10%',
                outerRadius: '105%',
                shape: 'arc',
                borderColor: '#fff'
            }
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,

            stops: [
                [0.1, '#e74c3c'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#2ecc71'] // green
                ],
            minorTickInterval: null,
            tickPixelInterval: 400,
            tickWidth: 0,
            gridLineWidth: 0,
            gridLineColor: 'transparent',
            labels: {
                enabled: false
            }
        },

        series: [{
            data: [<?php echo (int)$TrPrec;?>],
            dataLabels: {
             borderWidth: 0,
            format:
                '<div style="font-size:30px;">{y}%</div>'

        },
            innerRadius:'150%',

        }]
    });




Highcharts.chart('gauge1Daily', {

        chart: {
            type: 'solidgauge',
            backgroundColor: '#fff'
        },
         navigation: {
        buttonOptions: {
            enabled: false
        }
    },

                title: {
            text: 'AMB Target: <?php echo (int)$DailyAMbTarget;?><br>Produced:<?php echo (int)$OutPut;?> '
        },

        pane: {
            center: ['50%', '80%'],
            size: '100%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor: '#FFF',
                innerRadius: '10%',
                outerRadius: '105%',
                shape: 'arc',
                borderColor: '#fff'
            }
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            min: 0,
            max:100,

            stops: [
                [0.1, '#e74c3c'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#2ecc71'] // green
                ],
            minorTickInterval: null,
            tickPixelInterval: 400,
            tickWidth: 0,
            gridLineWidth: 0,
            gridLineColor: 'transparent',
            labels: {
                enabled: false
            }
        },

        series: [{
            data: [<?php echo (int)$TrAMbPrec;?>],
            dataLabels: {
             borderWidth: 0,
            format:
                '<div style="font-size:15px;">{y}%</div>'

        },
            innerRadius:'150%',

        }]
    });
Highcharts.chart('gauge2Daily', {

        chart: {
            type: 'solidgauge',
            backgroundColor: '#fff'
        },

                  title: {
            text: 'TM Ball Target: <?php echo (int)$DailyTMTarget;?><br>Produced:<?php echo (int)$TmOutPut;?> '
        },
                 navigation: {
        buttonOptions: {
            enabled: false
        }
    },

        pane: {
            center: ['50%', '80%'],
            size: '100%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor: '#FFF',
                innerRadius: '10%',
                outerRadius: '105%',
                shape: 'arc',
                borderColor: '#fff'
            }
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            min: 0,
            max:100,

            stops: [
                [0.1, '#e74c3c'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#2ecc71'] // green
                ],
            minorTickInterval: null,
            tickPixelInterval: 400,
            tickWidth: 0,
            gridLineWidth: 0,
            gridLineColor: 'transparent',
            labels: {
                enabled: false
            }
        },

        series: [{
            data: [<?php echo  (int)$TrTMPrec;?>],
                dataLabels: {
             borderWidth: 0,
            format:
               '<div style="font-size:15px;">{y}%</div>'

        },
            innerRadius:'150%',

        }]
    });
Highcharts.chart('gauge3Daily', {

        chart: {
            type: 'solidgauge',
            backgroundColor: '#fff'
        },

              title: {
            text: 'MSB Target: <?php echo (int)$DailyMSTarget;?><br>Produced:<?php echo (int)$MSOutPut;?> '
        },

                 navigation: {
        buttonOptions: {
            enabled: false
        }
    },

        pane: {
            center: ['50%', '80%'],
            size: '100%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor: '#FFF',
                innerRadius: '10%',
                outerRadius: '105%',
                shape: 'arc',
                borderColor: '#fff'
            }
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 100,
        stops: [
                [0.1, '#e74c3c'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#2ecc71'] // green
                ],
            minorTickInterval: null,
            tickPixelInterval: 400,
            tickWidth: 0,
            gridLineWidth: 0,
            gridLineColor: 'transparent',
            labels: {
                enabled: false
            }
        },

        series: [{
            data: [<?php echo  (int)$TrMSPrec;?>],
                dataLabels: {
             borderWidth: 0,
            format:
                '<div style="font-size:15px;">{y}%</div>'

        },
            innerRadius:'150%',

        }]
    });
}


</script>
<?php
$Precentage=($totalFail/$totalPrd)*100;
?>
<div class="col-md-6 col-lg-6">
<div class="card">
<div class="p-0 clearfix">
<i class="fa fa-line-chart bg-success p-4 px-5 font-2xl mr-3 float-left text-light"></i>
<div class="h5 text-success mb-0 pt-3"><span class="count"><?php Echo $totalPrd;?></div>
<div class="text-muted text-uppercase font-weight-bold font-xs small">Total  Produced</div>
</div>
</div>
</div>
    <!--/.col-->
<div class="col-md-6 col-lg-6">
<div class="card">
<div class="p-0 clearfix">
<i class="fa fa-pie-chart bg-danger p-4 px-5 font-2xl mr-3 float-left text-light"></i>
<div class="h5 text-danger mb-0 pt-3"><span class="count"><?php Echo $totalFail;?> </span> (<span class="count"><?php Echo Round($Precentage,2);?> </span>%) </div>
<div class="text-muted text-uppercase font-weight-bold font-xs small">Total  Defects </div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card">
<div class="card-body">
<h3 class="mb-3">Production</h3>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card">
<div class="card-body">
<h3 class="mb-3">Defects</h3>
<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div>
<!-- <div class="col-lg-6">
<div class="card">
<div class="card-body">
<h3 class="mb-3">Defects</h3>
<div id="gaugeAll" style="height: 370px; width: 100%;"></div>
</div>
</div>
</div> -->
<!-- <div class="col-lg-12" >

<div id="chartContainer1"></div>
<div id="chartContainer"></div>
<div id="gaugeAll"></div>
<div id="gauge" ></div>
<div id="gauge1" ></div>
<div id="gauge2" ></div>
<div id="gauge3" ></div>
<div id="gaugeDaily" ></div>
<div id="gauge1Daily" ></div>
<div id="gauge2Daily" ></div>
<div id="gauge3Daily" ></div>

</div> -->
<div class="col-lg-12 d-none" >
<div class="card">
<div class="card-body" >
<h3 class="mb-3">Daily Target Achieved</h3>
<div class="col-lg-6" >
<div id="gaugeDaily" style="height:300px;"></div>
</div>
<div class="col-lg-3" >
<div id="gauge1Daily" style="height:200px;"></div>
</div>
<div class="col-lg-3" >
<div id="gauge2Daily" style="height:200px;"></div>
</div>
<div class="col-lg-3" >
<div id="gauge3Daily" style="height:200px;"></div>
</div>
<!-- <div class="col-lg-3" >
<div id="gaugeDaily3" style="height:200px;"></div>
</div> -->
</div>
</div>
</div>
<div class="col-lg-12 d-none" >
<div class="card">
<div class="card-body" >
<h3 class="mb-3">Montly Target Achieved</h3>
<div class="col-lg-6" >
<div id="gaugeAll" style="height:300px;"></div>
</div>
<div class="col-lg-3" >
<div id="gauge" style="height:200px;"></div>
</div>
<div class="col-lg-3" >
<div id="gauge1" style="height:200px;"></div>
</div>
<div class="col-lg-3" >
<div id="gauge2" style="height:200px;"></div>
</div>
<div class="col-lg-3" >
<div id="gauge3" style="height:200px;"></div>
</div>
</div>
</div>
</div>

<!-- /# column -->
<?php
}

?>
</body>
<?php
$this->load->View('AdminFooter');
    ?>
<script>
$(document).ready( function () {
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
            {
                extend: 'print',
                messageTop: function () {
                    printCounter++;

                    if ( printCounter === 1 ) {
                        return 'This is the first time you have printed this document.';
                    }
                    else {
                        return 'You have printed this document '+printCounter+' times';
                    }
                },
                messageBottom: null
            }
        ],
      "ordering":true,
      "pageLength":10,
      "searching":true,
      "LengthChange":true,
      "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},

    }
      );
} );
</script>
   </html>
<?php

}else{
    redirect('Welcome/index');
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  $(document).ready( function () {
$(".abc").on('click', function() {


      var id = $(this).closest('tr').attr('id');
      // alert(id);
      var Date1 = $("#Sdate").val();
      var Date2 = $("#Edate").val();
      $.ajax({
        url:'<?php echo base_url(); ?>MIS/prdData/viewInfo_ofline',
        method:'POST',
        data:{'id':id,'Date1':Date1,'Date2':Date2},
        dataType:'json',
        success:function(response){
        if(response.success == true) {
            $("#data").html('');
          var html ='';
        for (var i=0; i<response.messages.length; i++) {
          var pass = response.messages[i].Passed;
          var Checked = response.messages[i].Checked;
          var Fail=Checked-pass;
                      if (pass==0 || Checked==0) {
            var RFT=0;
            }else{
            var RFT=pass/Checked*100;
            }
            var ppass = response.messages[i].Ppassed;
          var pChecked = response.messages[i].pchecked;
           var pFail=pChecked-ppass;
                      if (ppass==0 || pChecked==0) {
            var pRFT=0;
            }else{
            var pRFT=ppass/pChecked*100;
            }

            html += '<tr>';
            html += '<td style="color:black; text-align:left;">'+response.messages[i].HourTime+'</td>';
            html += '<td style="color:black; text-align:left;">'+response.messages[i].ArtCode+'</td>';
            html += '<td class="Froming">'+Math.round(response.messages[i].Checked)+'</td>';
            html += '<td class="Froming">'+Math.round(response.messages[i].Passed)+'</td>';
            html += '<td class="Froming">'+Math.round(Fail)+'</td>';
            html += '<td class="Froming">'+Math.round(RFT)+'%</td>';
            html += '<td class="packing">'+Math.round(response.messages[i].pchecked)+'</td>';
            html += '<td class="packing">'+Math.round(response.messages[i].Ppassed)+'</td>';
            html += '<td class="packing">'+Math.round(pFail)+'</td>';
            html += '<td class="packing">'+Math.round(pRFT)+'%</td>';
            html += '</tr>';
          }
        $("#data").append(html);
        }

      }
      });
    });
});
    </script>
    <script>
  $(document).ready( function () {
$(".xyz").on('click', function() {
var id = $(this).closest('tr').attr('id');
       //alert(id);
      var Date1 = $("#Sdate").val();
      var Date2 = $("#Edate").val();
      $.ajax({
        url:'<?php echo base_url(); ?>MIS/prdData/viewInfo_oflineTM',
        method:'POST',
        data:{'id':id,'Date1':Date1,'Date2':Date2},
        dataType:'json',
        success:function(response){
        if(response.success == true) {
            $("#data1").html('');
          var html ='';
        for (var i=0; i<response.messages.length; i++) {
          var pass = response.messages[i].PassQty;
          var Checked = response.messages[i].CheckedQty;
          var Fail=Checked-pass;
                      if (pass==0 || Checked==0) {
            var RFT=0;
            }else{
            var RFT=pass/Checked*100;
            }
            var Fpass = response.messages[i].FPassQty;
          var FChecked = response.messages[i].FCheckedQty;
          var FFail=FChecked-Fpass;
                      if (Fpass==0 || FChecked==0) {
            var FRFT=0;
            }else{
            var FRFT=Fpass/FChecked*100;
            }

            html += '<tr>';
            html += '<td style="color:black; text-align:left;">'+response.messages[i].HourName+'</td>';
              html += '<td style="color:black;text-align:left;">'+response.messages[i].ArtCode+'</td>';
            html += '<td class="Froming">'+Math.round(response.messages[i].FCheckedQty)+'</td>';
            html += '<td class="Froming">'+Math.round(response.messages[i].FPassQty)+'</td>';
            html += '<td class="Froming">'+Math.round(FFail)+'</td>';
            html += '<td class="Froming">'+Math.round(FRFT)+'%</td>';

            html += '<td class="packing">'+Math.round(response.messages[i].CheckedQty)+'</td>';
            html += '<td class="packing">'+Math.round(response.messages[i].PassQty)+'</td>';
            html += '<td class="packing">'+Math.round(Fail)+'</td>';
            html += '<td class="packing">'+Math.round(RFT)+'%</td>';
            html += '</00o00--ptr>';
          }
        $("#data1").append(html);
        }

      }
      });
    });
});
    </script>

    <script>
  $(document).ready( function () {





$(".fgh").on('click', function() {
var id = $(this).closest('tr').attr('id');
       //alert(id);
      var Date1 = $("#Sdate").val();
      var Date2 = $("#Edate").val();
      $.ajax({
        url:'<?php echo base_url(); ?>MIS/prdData/viewInfo_oflineMS',
        method:'POST',
        data:{'id':id,'Date1':Date1,'Date2':Date2},
        dataType:'json',
        success:function(response){
        if(response.success == true) {
            $("#data11").html('');
          var html ='';
        for (var i=0; i<response.messages.length; i++) {
          var pass = response.messages[i].Pass;
          var Checked = response.messages[i].TotalChecked;
          var Fail=Checked-pass;
            html += '<tr>';
            html += '<td style="color:black; text-align:left;">'+response.messages[i].HourName+'</td>';
              html += '<td style="color:black; text-align:left;">'+response.messages[i].ArtCode+'</td>';
            html += '<td style="text-align:left;">'+response.messages[i].ArtSize+'</td>';
            html += '<td class="packing">'+Math.round(response.messages[i].TotalChecked)+'</td>';
            html += '<td class="packing">'+Math.round(response.messages[i].Pass)+'</td>';
            html += '<td class="packing">'+Math.round(Fail)+'</td>';
            html += '<td class="packing">'+Math.round(response.messages[i].RFT)+'%</td>';

            html += '</00o00--ptr>';
          }
        $("#data11").append(html);
        }

      }
      });
    });
});
    </script>
    <script type="text/javascript">
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


    });
          });
    </script>

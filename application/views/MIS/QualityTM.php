<!doctype html>
<?php
if ($this->session->userdata('userStus')==1) {
?>
<html class="no-js" lang="en">
<!--<![endif]-->

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


?>  <?php
$this->load->View('Qmenu');
$Month=date('m');
$Year=date('Y');
$Day=date('d');
$CurrentDate= $Year.'-'.$Month.'-'.$Day;  
$CurrentDate2=$Year.'-'.$Month.'-'.$Day;   
  
  if ($table == 2) {
   // Echo "heloo";

 $Date1;


 $Date2;

$FC;
$SYear=substr($Date1,0,4);
$SMonth=substr($Date1,5,2);
$SDay=substr($Date1,-2,2);
$EYear=substr($Date2,0,4);
$EMonth=substr($Date2,5,2);
$EDay=substr($Date2,-2,2);
$StartDateeee=$SYear.'-'.$SMonth.'-'.$SDay;
$EndDateeee=$EYear.'-'.$EMonth.'-'.$EDay;
if ($FC==1) {
$FCName="All";
$FCValue=1;

}elseif($FC=='B34002'){
$FCName="Competition Ball";
}elseif($FC=='B34003'){
$FCName="Finale Ball";
}elseif($FC=='B34004'){
$FCName="Urban Ball";
}

?>
<form action="<?php echo base_url('QualityTM/GetQCData'); ?>" method="POST">
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input type="Date" name="Date1" id="Sdate" required="required" class="form-control"  value="<?php Echo $StartDateeee;?>"  style="width: 110%">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input type="Date"  name="Date2" id="Edate" required="required" class="form-control" value="<?php Echo $EndDateeee;?>" style="width: 110%">
</div>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<label class=" form-control-label">Line No:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-list"></i></div> -->
<select class="form-control"  name="FC"  required="required" style="width: 110%"> 

<option value="<?php Echo $FCValue;?>"><?php Echo $FCName;?></option>     
<option value="B34002">Competition Ball</option>
<option value="B34003">Finale Ball</option>
<option value="B34004">Urban Ball</option>
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


foreach($record1 as $key1) {
   $MonthName = $key1['MonthName'];
   $Fail = $key1['Fail'];
   $Year = $key1['Year'];
   $data1[] = "['$MonthName', $Fail]";  
   $dataMonth[] = "['$MonthName']+' '+ $Year";
}
foreach($record2 as $key2) {
   $MonthName = $key2['MonthName'];
   $Fail = $key2['Fail'];
   $Year = $key2['Year'];
   $data2[] = "['$MonthName', $Fail]";  
   $dataMonth[] = "['$MonthName']+' '+ $Year";
}
foreach($record3 as $key3) {
   $MonthName = $key3['MonthName'];
   $Fail = $key3['Fail'];
   $Year = $key3['Year'];
   $data3[] = "['$MonthName', $Fail]";  
   $dataMonth[] = "['$MonthName']+' '+ $Year";
}
foreach($record4 as $key4) {
   $MonthName = $key1['MonthName'];
   $Fail = $key4['Fail'];
   $Year = $key4['Year'];
   $data4[] = "['$MonthName', $Fail]";  
   $dataMonth[] = "['$MonthName']+' '+ $Year";
}
foreach($record5 as $key5) {
   $MonthName = $key5['MonthName'];
   $Fail = $key5['Fail'];
   $Year = $key5['Year'];
   $data5[] = "['$MonthName', $Fail]";  
   $dataMonth[] = "['$MonthName']+' '+ $Year";
}
foreach($record6 as $key6) {
   $MonthName = $key6['MonthName'];
   $Fail = $key6['Fail'];
   $Year = $key6['Year'];
   $data6[] = "['$MonthName', $Fail]";  
   $dataMonth[] = "['$MonthName']+' '+ $Year";
}


foreach($recordSum1 as $key1) {
 
    $Fail001 = $key1['Fail'];
   $OutPut01 = $key1['OutPut'];
   $Failratio01=($Fail001/$OutPut01)*100;
}
foreach($recordSum2 as $key2) {
 
 
   $Fail002 = $key2['Fail'];
   $OutPut02 = $key2['PassQty'];
   $Failratio02=($Fail002/$OutPut02)*100;
}
foreach($recordSum3 as $key3) {
 
   $Fail003 = $key3['Fail'];
   $OutPut03 = $key3['PassQty'];
   $Failratio03=($Fail003/$OutPut03)*100;
}
foreach($recordSum4 as $key4) {
 
   $Fail004 = $key4['Fail'];
   $OutPut04 = $key4['PassQty'];
   $Failratio04=($Fail004/$OutPut04)*100;
}
foreach($recordSum5 as $key5) {
 
   $Fail005 = $key5['Fail'];
   $OutPut05 = $key5['OutPut'];
   $Failratio05=($Fail005/$OutPut05)*100;
}
foreach($recordSum6 as $key6) {
  
 
   $Fail006 = $key6['Fail'];
   $OutPut06 = $key6['OutPut'];
   $Failratio06=($Fail006/$OutPut06)*100;

}

  $Totalpass=$Fail001+$Fail002+$Fail003+$Fail004+$Fail005+$Fail006;
  $TotalFail=$OutPut01+$OutPut02+$OutPut03+$OutPut04+$OutPut05+$OutPut06;
$AllFailration=($Totalpass/$TotalFail)*100;
                  $present_per0 = $Failratio01; 
                  $absent_per0 =  $Failratio02; 
                  $leave_per0 =  $Failratio03; 
                  $late_per0 = $Failratio04; 
                  $present_per1 = $Failratio05; 
                  $absent_per1 =  $Failratio06; 
                     $AllFail1 =  $AllFailration; 
?>

<script>
window.onload = function() {

Highcharts.chart('container', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Quality Trends'
    },
    xAxis: {
        categories: [<?php echo join($dataMonth, ',') ?>]
    },
    credits: {
        enabled: true
    },
    series: [{
        name: '<?php echo $FactoryCode1;?>',
        data: [<?php echo join($data1, null) ?>]
    },{
        name: '<?php echo $FactoryCode2;?>',
        data: [<?php echo join($data2, null) ?>]
    },{
        name: '<?php echo $FactoryCode3;?>',
        data: [<?php echo join($data3, null) ?>]
    },{
        name: '<?php echo $FactoryCode4;?>',
        data: [<?php echo join($data4, null) ?>]
    },{
        name: '<?php echo $FactoryCode5;?>',
        data: [<?php echo join($data5, null) ?>]
    },{
        name: '<?php echo $FactoryCode6;?>',
        data: [<?php echo join($data6, null) ?>]
    }]
});


}

</script>
<div class="col-md-12">
<div id="container" style="height: 400px; width: 100%;"></div>
</div>

<?php

}elseif ($table==1) {
if ($FC==1) {
$FCName="All";
$FCValue=1;

}elseif($FC=='B34002'){
$FCName="Competition Ball";
}elseif($FC=='B34003'){
$FCName="Finale Ball";
}elseif($FC=='B34004'){
$FCName="Urban Ball";
}
}
  ?>
<form  action="<?php echo base_url('QualityTM/GetQCData'); ?>" method="POST">
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<input type="Date" name="Date1" id="Date1" required="required" class="form-control"  value="<?php Echo $CurrentDate;?>"  >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input type="Date"  name="Date2" id="Date2"  required="required" class="form-control" value="<?php Echo $CurrentDate2;?>" >
</div>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<label class=" form-control-label">Factory Code:</label>
<div class="input-group">

<!-- <div class="input-group-addon"><i class="fa fa-list"></i></div> -->
<select class="form-control"  name="FC"  required="required" style="width: 110%">   

<option value="<?php Echo $FC;?>"><?php Echo $FCName;?></option>  
<option value="1">All</option>                   
<option value="B34002">Competition Ball</option>
<option value="B34003">Finale Ball</option>
<option value="B34004">Urban Ball</option>
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
if ($record) {
 $FactoryCode1=$FC;
  foreach($record as $key) {
   $MonthName = $key['MonthName'];
   $Fail = $key['Fail'];
   $Year = $key['Year'];
   $data1[] = "['$MonthName', $Fail]";  
   $dataMonth[] = "['$MonthName']+' '+ $Year";
}
}
?>

<script>
window.onload = function() {
//alert("Heloo");
Highcharts.chart('container', {
    chart: {
        type: 'spline'
    },
    title: {
        text: 'Quality Trends'
    },
    xAxis: {
        categories: [<?php echo join($dataMonth, ',') ?>]
    },
    credits: {
        enabled: true
    },
    series: [{
        name: '<?php echo $FactoryCode1;?>',
        data: [<?php echo join($data1, ',') ?>]
    }]
});


}
</script>
<div class="col-md-12">
<div id="container" style="height: 400px; width: 100%;"></div>
</div>

</body>



<?php

}else{
  
 
?>
<form  action="<?php echo base_url('QualityTM/GetQCData'); ?>" method="POST">
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input type="Date" name="Date1" id="Date1" required="required" class="form-control"  value="<?php Echo $CurrentDate;?>"  >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input type="Date"  name="Date2" id="Date2"  required="required" class="form-control" value="<?php Echo $CurrentDate2;?>" >
</div>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<label class=" form-control-label">Factory Code:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-list"></i></div> -->
<select class="form-control"  name="FC"  required="required" style="width: 110%">    
<option value="1">All</option>               
     
<option value="B34002">Competition Ball</option>
<option value="B34003">Finale Ball</option>
<option value="B34004">Urban Ball</option>
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

$FactoryCode2="B34002";
$FactoryCode3="B34003";
$FactoryCode4="B34004";


foreach($record2 as $key2) {
   $MonthName = $key2['MonthName'];
   $Fail = $key2['Fail'];
   $Year = $key2['Year'];
   $data2[] = "['$MonthName', $Fail]";  
   $dataMonth[] = "['$MonthName']+' '+ $Year";
}
foreach($record3 as $key3) {
   $MonthName = $key3['MonthName'];
   $Fail = $key3['Fail'];
   $Year = $key3['Year'];
   $data3[] = "['$MonthName', $Fail]";  
   $dataMonth[] = "['$MonthName']+' '+ $Year";
}
foreach($record4 as $key4) {
   $MonthName = $key1['MonthName'];
   $Fail = $key4['Fail'];
   $Year = $key4['Year'];
   $data4[] = "['$MonthName', $Fail]";  
   $dataMonth[] = "['$MonthName']+' '+ $Year";
}


// foreach($recordSum1 as $key1) {
 
//     $Fail001 = $key1['Fail'];
//    $OutPut01 = $key1['OutPut'];
//    $Failratio01=($Fail001/$OutPut01)*100;
// }
// foreach($recordSum2 as $key2) {
 
 
//    $Fail002 = $key2['Fail'];
//    $OutPut02 = $key2['PassQty'];
//    $Failratio02=($Fail002/$OutPut02)*100;
// }
// foreach($recordSum3 as $key3) {
 
//    $Fail003 = $key3['Fail'];
//    $OutPut03 = $key3['PassQty'];
//    $Failratio03=($Fail003/$OutPut03)*100;
// }
// foreach($recordSum4 as $key4) {
 
//    $Fail004 = $key4['Fail'];
//    $OutPut04 = $key4['PassQty'];
//    $Failratio04=($Fail004/$OutPut04)*100;
// }
// foreach($recordSum5 as $key5) {
 
//    $Fail005 = $key5['Fail'];
//    $OutPut05 = $key5['OutPut'];
//    $Failratio05=($Fail005/$OutPut05)*100;
// }
// foreach($recordSum6 as $key6) {
  
 
//      $Fail006 = $key6['Fail'];
//    $OutPut06 = $key6['OutPut'];
//    $Failratio06=($Fail006/$OutPut06)*100;

// }

//   $Totalpass=$Fail001+$Fail002+$Fail003+$Fail004+$Fail005+$Fail006;
//   $TotalFail=$OutPut01+$OutPut02+$OutPut03+$OutPut04+$OutPut05+$OutPut06;
// $AllFailration=($Totalpass/$TotalFail)*100;


?>

<script>
window.onload = function() {

Highcharts.chart('container', {
    chart: {
        type: 'spline'
    },
    title: {
        text: 'Quality Trends'
    },
    xAxis: {
        categories: [<?php echo join($dataMonth, ',') ?>]
    },
    credits: {
        enabled: true
    },
    series: [{
        name: '<?php echo $FactoryCode1;?>',
        data: [<?php echo join($data1, ',') ?>]
    },{
        name: '<?php echo $FactoryCode2;?>',
        data: [<?php echo join($data2, ',') ?>]
    },{
        name: '<?php echo $FactoryCode3;?>',
        data: [<?php echo join($data3, ',') ?>]
    },{
        name: '<?php echo $FactoryCode4;?>',
        data: [<?php echo join($data4, ',') ?>]
    },{
        name: '<?php echo $FactoryCode5;?>',
        data: [<?php echo join($data5, ',') ?>]
    },{
        name: '<?php echo $FactoryCode6;?>',
        data: [<?php echo join($data6, ',') ?>]
    }]
});
Highcharts.chart('containerCircle', {

        chart: {
            type: 'solidgauge'
        },

               title: {
            text: 'ALL'
        },
                navigation: {
        buttonOptions: {
            enabled: false
        }
    },
        pane: {
            center: ['50%', '50%'],
            size: '100%',
            startAngle: 0,
            endAngle: 360,
            background: {
                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                innerRadius: '60%',
                outerRadius: '100%',
                shape: 'arc'
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
                [0.1, '#2ecc71'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#e74c3c']
                 // green
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

        plotOptions: {
            solidgauge: {
                dataLabels: {
                    y: 5,
                    borderWidth: 0,
                    useHTML: true
                }
            }
        },
        

        series: [{
            name: 'RPM',
            data: [<?php echo  round($AllFailration); ?>],
            dataLabels: {
             borderWidth: 0,
            format:
                '<div style="font-size:30px;">{y}%</div>'
                 },
            tooltip: {
                valueSuffix: ' revolutions/min'
            }
        }]
    });
  
  Highcharts.chart('containerCircle1', {

        chart: {
            type: 'solidgauge'
        },

               title: {
            text: 'HS'
        },
                navigation: {
        buttonOptions: {
            enabled: false
        }
    },
        pane: {
            center: ['50%', '50%'],
            size: '100%',
            startAngle: 0,
            endAngle: 360,
            background: {
                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                innerRadius: '60%',
                outerRadius: '100%',
                shape: 'arc'
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
                [0.1, '#2ecc71'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#e74c3c']  // green
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

        plotOptions: {
            solidgauge: {
                dataLabels: {
                    y: 5,
                    borderWidth: 0,
                    useHTML: true
                }
            }
        },
        

        series: [{
            name: 'RPM',
            data: [<?php echo  round($Failratio01); ?>],
            dataLabels: {
             borderWidth: 0,
            format:
                '<div style="font-size:20px;">{y}%</div>'
                 },
            tooltip: {
                valueSuffix: ' revolutions/min'
            }
        }]
    });
    Highcharts.chart('containerCircle2', {

        chart: {
            type: 'solidgauge'
        },

              title: {
            text: 'CB'
        },
                navigation: {
        buttonOptions: {
            enabled: false
        }
    },
        pane: {
            center: ['50%', '50%'],
            size: '100%',
            startAngle: 0,
            endAngle: 360,
            background: {
                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                innerRadius: '60%',
                outerRadius: '100%',
                shape: 'arc'
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
                [0.1, '#2ecc71'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#e74c3c']
                 // green
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

        plotOptions: {
            solidgauge: {
                dataLabels: {
                    y: 5,
                    borderWidth: 0,
                    useHTML: true
                }
            }
        },
        

        series: [{
            name: 'RPM',
            data: [<?php echo  round($Failratio02); ?>],
            dataLabels: {
             borderWidth: 0,
            format:
                '<div style="font-size:20px;">{y}%</div>'
                 },
            tooltip: {
                valueSuffix: ' revolutions/min'
            }
        }]
    });
    Highcharts.chart('containerCircle3', {

        chart: {
            type: 'solidgauge'
        },

              title: {
            text: 'FB'
        },
                navigation: {
        buttonOptions: {
            enabled: false
        }
    },
        pane: {
            center: ['50%', '50%'],
            size: '100%',
            startAngle: 0,
            endAngle: 360,
            background: {
                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                innerRadius: '60%',
                outerRadius: '100%',
                shape: 'arc'
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
                [0.1, '#2ecc71'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#e74c3c']
                 // green
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

        plotOptions: {
            solidgauge: {
                dataLabels: {
                    y: 5,
                    borderWidth: 0,
                    useHTML: true
                }
            }
        },
        

        series: [{
            name: 'RPM',
            data: [<?php echo  round($Failratio03); ?>],
            dataLabels: {
             borderWidth: 0,
            format:
                '<div style="font-size:20px;">{y}%</div>'
                 },
            tooltip: {
                valueSuffix: ' revolutions/min'
            }
        }]
    });
    Highcharts.chart('containerCircle4', {

        chart: {
            type: 'solidgauge'
        },

               title: {
            text: 'UB'
        },
                 navigation: {
        buttonOptions: {
            enabled: false
        }
    },
        pane: {
            center: ['50%', '50%'],
            size: '100%',
            startAngle: 0,
            endAngle: 360,
            background: {
                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                innerRadius: '60%',
                outerRadius: '100%',
                shape: 'arc'
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
                [0.1, '#2ecc71'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#e74c3c']
                 // green
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

        plotOptions: {
            solidgauge: {
                dataLabels: {
                    y: 5,
                    borderWidth: 0,
                    useHTML: true
                }
            }
        },
        

        series: [{
            name: 'RPM',
            data: [<?php echo  round($Failratio04); ?>],
            dataLabels: {
             borderWidth: 0,
            format:
                '<div style="font-size:20px;">{y}%</div>'
                 },
            tooltip: {
                valueSuffix: ' revolutions/min'
            }
        }]
    });
    Highcharts.chart('containerCircle5', {

        chart: {
            type: 'solidgauge'
        },

               title: {
            text: 'MSB'
        },
                 navigation: {
        buttonOptions: {
            enabled: false
        }
    },
        pane: {
            center: ['50%', '50%'],
            size: '100%',
            startAngle: 0,
            endAngle: 360,
            background: {
                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                innerRadius: '60%',
                outerRadius: '100%',
                shape: 'arc'
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
                [0.1, '#2ecc71'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#e74c3c']
                 // green
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

        plotOptions: {
            solidgauge: {
                dataLabels: {
                    y: 5,
                    borderWidth: 0,
                    useHTML: true
                }
            }
        },
        

        series: [{
            name: 'RPM',
            data: [<?php echo  round($Failratio05); ?>],
            dataLabels: {
             borderWidth: 0,
            format:
                '<div style="font-size:20px;">{y}%</div>'
                 },
            tooltip: {
                valueSuffix: ' revolutions/min'
            }
        }]
    });
    Highcharts.chart('containerCircle6', {

        chart: {
            type: 'solidgauge'
        },

               title: {
            text: 'AMB'
        },
          
                 navigation: {
        buttonOptions: {
            enabled: false
        }
    },
        pane: {
            center: ['50%', '50%'],
            size: '100%',
            startAngle: 0,
            endAngle: 360,
            background: {
                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                innerRadius: '60%',
                outerRadius: '100%',
                shape: 'arc'
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
                [0.1, '#2ecc71'], // red
                [0.5, '#f1c40f'], // yellow
                [0.9, '#e74c3c']
                 // green
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

        plotOptions: {
            solidgauge: {
                dataLabels: {
                    y: 5,
                    borderWidth: 0,
                    useHTML: true
                }
            }
        },
        

        series: [{
            name: 'RPM',
            data: [<?php echo  round($Failratio06); ?>],
            dataLabels: {
             borderWidth: 0,
            format:
                '<div style="font-size:20px;">{y}%</div>'
                 },
            tooltip: {
                valueSuffix: ' revolutions/min'
            }
        }]
    }); 
}
</script>
<div class="col-md-12">
<div id="container" style="height: 400px; width: 100%;"></div>
</div>
<div class="col-lg-12" >
<div class="card">
<div class="card-body" >
<h3 class="mb-3">Yearly Fail Percentage</h3>
<div class="col-lg-6" >
<div id="containerCircle" style="height:300px;"></div>
</div>
<div class="col-lg-3" >
<div id="containerCircle1" style="height:200px;"></div>
</div>
<div class="col-lg-3" >
<div id="containerCircle2" style="height:200px;"></div>
</div>
<div class="col-lg-3" >
<div id="containerCircle3" style="height:200px;"></div>
</div>
<div class="col-lg-3" >
<div id="containerCircle4" style="height:200px;"></div>
</div>
<div class="col-lg-3" >

</div>
<div class="col-lg-3" >

</div>
<div class="col-lg-3" >
<div id="containerCircle5" style="height:200px;"></div>
</div>
<div class="col-lg-3" >
<div id="containerCircle6" style="height:200px;"></div>
</div>
</div>
</div>
</div>


<?php
}

?>

<?php

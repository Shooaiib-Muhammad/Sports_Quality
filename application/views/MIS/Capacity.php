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
$this->load->View('Submenu1');
$Month=date('m');
$Year=date('Y');
$Day=date('d');
$CurrentDate= date('Y-m-01', strtotime(date('Y-m')." -9 month"));
$CurrentDate2= date('Y-m-01', strtotime(date('Y-m')." +2 month"));
?>
<?php 
if($table==2) {
$Date1;
$Date2;
$Process;
$SYear=substr($Date1,0,4);
$SMonth=substr($Date1,5,2);
$SDay=substr($Date1,-2,2);
$EYear=substr($Date2,0,4);
$EMonth=substr($Date2,5,2);
$EDay=substr($Date2,-2,2);
$StartDateeee=$SYear.'-'.$SMonth.'-'.$SDay;
$EndDateeee=$EYear.'-'.$EMonth.'-'.$EDay;
if ($Process==1) {
$ProcessName="All";
}elseif($Process=="B34001"){
$ProcessName="Hand Stitched Ball";
}elseif($Process=="B34002"){
$ProcessName="Competition Ball";
}elseif($Process=="B34003"){
$ProcessName="Finale Ball";
}elseif($Process=="B34004"){
$ProcessName="Urban Ball";
}elseif($Process=="B34005"){
$ProcessName="Machine Stitched Ball";
}elseif($Process=="B34006"){
$ProcessName="Airless Mini Ball";

}
?>
<form action="<?php echo base_url('Capacity/getAllData'); ?>" method="POST">
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
 <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
<input class="form-control" type="Date" name="Date1" value="<?php echo $StartDateeee;?>" >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-calendar"></i></div> 
<input class="form-control" type="Date" name="Date2" value="<?php echo $EndDateeee;?>" >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class=" form-control-label">Factory Code:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-list"></i></div> -->
<select class="form-control"  name="Process"  required="required"> 
<option value="<?php Echo $Process;?>" ><?php Echo $ProcessName;?> </option><<option value="1">All</option>               
<option value="B34001">Hand Stitched Ball</option>      
<option value="B34002">Competition Ball</option>
<option value="B34003">Finale Ball</option>
<option value="B34004">Urban Ball</option>
<option value="B34005">Machine Stitched Ball</option>
<option value="B34006">Airless Mini Ball</option>
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
   $FactoryCode = $key1['FactoryCode'];
   $OrderQty = $key1['OrderQty'];
    $DispQty = $key1['DispQty'];
   $data1[] = "$OrderQty";  
   $data4[] = "$DispQty";  
}
foreach($record2 as $key2) {
   $FactoryCode = $key2['VendorName'];
   $Capacity = $key2['Capacity'];
   $data2[] = "$Capacity";  
}
foreach($record3 as $key3) {
   $FactoryCode = $key3['VendorName'];
   $Pass = $key3['Pass'];
   $data3[] = "$Pass";  
}
foreach($Sum1 as $key4) {
   $OrderQty = $key4['OrderQty'];
    $DispQty = $key4['DispQty'];
   $dataSum1[] = "$OrderQty";  
   $dataSum3[] = "$DispQty";  
}
foreach($Sum2 as $key5) {
   $Pass = $key5['Pass'];
   $dataSum2[] = "$Pass";   
}
foreach($MonthData as $keyMonth) {
   $Pass = $keyMonth['Pass'];
   $Capacity = $keyMonth['Capacity'];
   $OrderQty = $keyMonth['OrderQty'];
   $DispQty = $keyMonth['DispQty'];
   $MonthName = $keyMonth['MonthName']; 
   $dataCapacity[] = "$Capacity";
   $dataOrderQty[] = "$OrderQty"; 
   $dataPass[] = "$Pass"; 
   $dataDispQty[] = "$DispQty";  
  $dataMonth[] =  "['$MonthName']";
}

?>

<script type="text/javascript">
    window.onload = function() {


Highcharts.chart('container111', {
    chart: {
        type: 'spline',
        scrollablePlotArea: {
            minWidth: 600,
            scrollPositionX: 1
        }
    },
    title: {
        text: 'Comparison Chart',
        align: 'center'
    },
   
    xAxis: {
           categories: [<?php echo join($dataMonth, ',') ?>],
    },
    yAxis: {
        title: {
            text: ''
        },
        minorGridLineWidth: 0,
        gridLineWidth: 0,
        alternateGridColor: null,
        plotBands: [{ // Light air
            from: 0.3,
            to: 1.5,
            color: 'rgba(68, 170, 213, 0.1)',
            label: {
                text: '',
                style: {
                    color: '#606060'
                }
            }
        }]
    },
 
    plotOptions: {
        spline: {
            lineWidth: 4,
            states: {
                hover: {
                    lineWidth: 5
                }
            },
            marker: {
                enabled: false
            },

        }
    },
    series: [{
        name: 'Capacity',
        data:  [<?php echo join($dataCapacity, ',') ?>]
    }, {
        name: 'OrderQty',
        data: [<?php echo join($dataOrderQty, ',') ?>]
    }, {
        name: 'Produced',
        data: [<?php echo join($dataPass, ',') ?>]
    }],
    navigation: {
        menuItemStyle: {
            fontSize: '10px'
        }
    }
});


}
</script>
<div class="col-md-12">
<div id="container111" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
</div>
<div class="col-md-12">
<div class="card-body">
<table class="table table-sm">
<thead class="thead-dark" >
<tr style="background-color: black;color: #fff;text-align: center;">

<th scope="col" style="text-align: left;">Month Name</th>
<th scope="col" style="text-align: center;">Capacity</th>
<th scope="col" style="text-align: center;">Order Qty</th>
<th scope="col" style="text-align: center;">Produced Qty</th>
<th scope="col" style="text-align: center;">Ex-factory</th>
</tr>
</thead>
<tbody>
 <tr>
    <?php
    $Ordersum=0; 
    $Capacitysum=0;
    $Passsum=0;
    $DispQtysum=0;
    foreach($MonthData as $keyMonth) {
   $Pass = $keyMonth['Pass'];
   $Capacity = $keyMonth['Capacity'];
   $OrderQty = $keyMonth['OrderQty'];
   $DispQty = $keyMonth['DispQty'];
   $MonthName = $keyMonth['MonthName']; 
   $Ordersum += $OrderQty;
    $Capacitysum += $Capacity;
    $Passsum += $Pass;
    $DispQtysum += $DispQty;
    ?>
<td scope="col"><?php echo $MonthName?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($Capacity);?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($OrderQty);?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($Pass);?></td>  
<td scope="col" style="text-align: center;"><?php echo number_format($DispQty);?></td>  
 </tr>
<?php } 

?>
<tr style="background-color: black;color: #fff;text-align: center;">
<td scope="col">Total</td>
<td scope="col" style="text-align: center;"><?php echo number_format($Capacitysum);?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($Ordersum);?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($Passsum);?></td>  
<td scope="col" style="text-align: center;"><?php echo number_format($DispQtysum);?></td>  
 </tr>
</tbody>
</table>
<?php } else {
?>
<form action="<?php echo base_url('Capacity/getAllData'); ?>" method="POST">
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
 <div class="input-group-addon"><i class="fa fa-calendar"></i></div> 
<input class="form-control" type="Date" name="Date1" value="<?php echo $CurrentDate;?>" >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
<input class="form-control" type="Date" name="Date2" value="<?php echo $CurrentDate2;?>" >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class=" form-control-label">Factory Code:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-list"></i></div> -->
<select class="form-control"  name="Process"  required="required" >    
<option value="1">All</option>               
<option value="B34001">Hand Stitched Ball</option>      
<option value="B34002">Competition Ball</option>
<option value="B34003">Finale Ball</option>
<option value="B34004">Urban Ball</option>
<option value="B34005">Machine Stitched Ball</option>
<option value="B34006">Airless Mini Ball</option>
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
   $FactoryCode = $key1['FactoryCode'];
   $OrderQty = $key1['OrderQty'];
    $DispQty = $key1['DispQty'];
   $data1[] = "$OrderQty";  
   $data4[] = "$DispQty";  
}
foreach($record2 as $key2) {
   $FactoryCode = $key2['VendorName'];
   $Capacity = $key2['Capacity'];
   $data2[] = "$Capacity";  
}
foreach($record3 as $key3) {
   $FactoryCode = $key3['VendorName'];
   $Pass = $key3['Pass'];
   $data3[] = "$Pass";  
}
foreach($Sum1 as $key4) {
   $OrderQty = $key4['OrderQty'];
    $DispQty = $key4['DispQty'];
   $dataSum1[] = "$OrderQty";  
   $dataSum3[] = "$DispQty";  
}
foreach($Sum2 as $key5) {
   $Pass = $key5['Pass'];
   $dataSum2[] = "$Pass";   
}
foreach($MonthData as $keyMonth) {
   $Pass = $keyMonth['Pass'];
   $Capacity = $keyMonth['Capacity'];
   $OrderQty = $keyMonth['OrderQty'];
   $DispQty = $keyMonth['DispQty'];
   $MonthName = $keyMonth['MonthName']; 
   $dataCapacity[] = "$Capacity";
   $dataOrderQty[] = "$OrderQty"; 
   $dataPass[] = "$Pass"; 
   $dataDispQty[] = "$DispQty";  
  $dataMonth[] =  "['$MonthName']"  ;
}

?>

<script type="text/javascript">
    window.onload = function() {
    Highcharts.chart('container', {
    title: {
        text: 'Product Wise Comparison Chart'
    },
    xAxis: {
        categories: ['Hand Stitched Ball', 'Competition Ball', 'Finale Ball', 'Urban Ball', 'Machine Stitched Ball','Airless Mini Ball']
    },
    labels: {
        items: [{
            html: '',
            style: {
                left: '50px',
                top: '18px',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'black'
            }
        }]
    },
    series: [{
        type: 'column',
        name: 'Orders',
        data:  [<?php echo join($data1, ',') ?>]
    }, {
        type: 'column',
        name: 'Production',
        data:  [<?php echo join($data3, ',') ?>]
    }, {
        type: 'column',
        name: 'Ex-Factory',
        data:  [<?php echo join($data4, ',') ?>]
    }, {
        type: 'spline',
        name: 'Capacity',
        data: [<?php echo join($data2, ',') ?>],
        marker: {
            lineWidth: 3,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor:  Highcharts.getOptions().colors[3]
        }
    }, {
        type: 'pie',
        name: 'Total',
        data: [{
            name: 'Orders',
            y: <?php echo join($dataSum1) ?>,
            color: Highcharts.getOptions().colors[0] // Jane's color
        }, {
            name: 'Production',
            y: <?php echo join($dataSum2) ?>,
            color: Highcharts.getOptions().colors[1] // John's color
        }, {
            name: 'Ex-Factory',
            y: <?php echo join($dataSum2) ?>,
            color: Highcharts.getOptions().colors[2] // Joe's color
        }],
        center: [100, 80],
        size: 100,
        showInLegend: false,
        dataLabels: {
            enabled: false
        }
    }]
});


Highcharts.chart('container111', {
    chart: {
        type: 'spline',
        scrollablePlotArea: {
            minWidth: 600,
            scrollPositionX: 1
        }
    },
    title: {
        text: 'Month Wise Comparison Chart',
        align: 'center'
    },
   
    xAxis: {
           categories: [<?php echo join($dataMonth, ',') ?>],
    },
    yAxis: {
        title: {
            text: ''
        },
        minorGridLineWidth: 0,
        gridLineWidth: 0,
        alternateGridColor: null,
        plotBands: [{ // Light air
            from: 0.3,
            to: 1.5,
            color: 'rgba(68, 170, 213, 0.1)',
            label: {
                text: '',
                style: {
                    color: '#606060'
                }
            }
        }]
    },
 
    plotOptions: {
        spline: {
            lineWidth: 4,
            states: {
                hover: {
                    lineWidth: 5
                }
            },
            marker: {
                enabled: false
            },

        }
    },
    series: [{
        name: 'Capacity',
        data:  [<?php echo join($dataCapacity, ',') ?>]
    }, {
        name: 'OrderQty',
        data: [<?php echo join($dataOrderQty, ',') ?>]
    }, {
        name: 'Produced',
        data: [<?php echo join($dataPass, ',') ?>]
    }],
    navigation: {
        menuItemStyle: {
            fontSize: '10px'
        }
    }
});


}
</script>
<div class="col-md-12">
<div id="container111" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
</div>
<div class="col-md-12">
<div id="container" style=" width: 100%;"></div>
</div>

<?php
}
?>

</body>
<?php
$this->load->View('AdminFooter');
?>
<script src="<?php echo base_url();?>assets/Css/Testcode.js"></script>
<script src="<?php echo base_url();?>assets/Admin/vendors/chart.js/dist/Chart.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/Admin/assets/js/init-scripts/chart-js/chartjs-init.js"></script>
</html>
<?php

}else{
    redirect('Welcome/index');
}
?>
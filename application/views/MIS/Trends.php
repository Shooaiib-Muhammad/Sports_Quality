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

$this->load->View('Submenu');

$Month=date('m');
$Year=date('Y');
$Day=date('d');
$CurrentDate= date('Y-m-01', strtotime(date('Y-m')." -9 month"));
$CurrentDate2= date('Y-m-t', strtotime(date('Y-m')." +2 month"));
?>
<?php
$FactoryCode1="Hand Stitched Ball";
$FactoryCode2="Competition Ball";
$FactoryCode3="Finale Ball";
$FactoryCode4="Urban Ball";
$FactoryCode5="Machine Stitched Ball";
$FactoryCode6="Airless Mini Ball";
if ($table == 1) {
  ?>
<form action="<?php echo base_url('Trends/getAllData'); ?>" method="POST">
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input class="form-control" type="Date" name="Date1" value="<?php echo $CurrentDate;?>" style="width: 110%">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input class="form-control" type="Date" name="Date2" value="<?php echo $CurrentDate2;?>" style="width: 110%">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class=" form-control-label">Factory Code:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-list"></i></div> -->
<select class="form-control"  name="Process"  required="required" style="width: 110%">    
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
   $MonthName = $key1['MonthName'];
   $OrderQty = $key1['Pass'];
   $data1[] = "['$MonthName', $OrderQty]";
   $dataMonth[] = "['$MonthName']";   
}
foreach($record2 as $key2) {
   $MonthName = $key2['MonthName'];
   $OrderQty = $key2['Pass'];
   $data2[] = "['$MonthName', $OrderQty]";  
}
foreach($record3 as $key3) {
   $MonthName = $key3['MonthName'];
   $OrderQty = $key3['Pass'];
   $data3[] = "['$MonthName', $OrderQty]";  
}
foreach($record4 as $key4) {
   $MonthName = $key4['MonthName'];
   $OrderQty = $key4['Pass'];
   $data4[] = "['$MonthName', $OrderQty]";  
}
foreach($record5 as $key5) {
   $MonthName = $key5['MonthName'];
   $OrderQty = $key5['Pass'];
   $data5[] = "['$MonthName', $OrderQty]";  
}
foreach($record6 as $key6) {
   $MonthName = $key6['MonthName'];
   $OrderQty = $key6['Pass'];
   $data6[] = "['$MonthName', $OrderQty]";  
}


foreach($Sum as $keySum) {
   // extract $keySum;
   $FactoryCode = $keySum['FactoryCode1'];
   $OrderQty = $keySum['Pass'];
   $data[] = "['$FactoryCode', $OrderQty]";
}
}else{
foreach($record as $Data) {
    $MonthName11 = $Data['MonthName'];
   $OrderQty11 = $Data['Pass'];
   $data11[] = "['$MonthName11', $OrderQty11]";  
   $dataMonth11[] = "['$MonthName11']";  
}
  foreach($SumData as $Sum11) {
    $MonthNameSum = $Sum11['MonthName'];
   $OrderQtySum = $Sum11['Pass'];
   $dataSum[] = "['$MonthNameSum', $OrderQtySum]";  

}
}
?>


<?php 
if ($table==1) {
?>
<script>
window.onload = function() {

Highcharts.chart('Data', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
    },
    title: {
        text: 'Produced Qty'
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
        name: 'Order Qty',
        data: [<?php echo join($data, ',') ?>]
    }]
});

Highcharts.chart('container', {

    title: {
        text: 'Production Trend'
    },
     xAxis: {
         categories: [<?php echo join($dataMonth, ',') ?>],
      title: {
        text: 'Months '
    }
    },

    yAxis: {
        title: {
            text: 'Produced Qty'
        },
           min:-200
        
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            }
        
        }
    },

    series: [{
        name: '<?php echo $FactoryCode1;?>',
        data: [<?php echo join($data1, ',') ?>]
    }, {
        name: '<?php echo $FactoryCode2;?>',
        data: [<?php echo join($data2, ',') ?>]
    }, {
        name: '<?php echo $FactoryCode3;?>',
        data: [<?php echo join($data3, ',') ?>]
    }
    , {
        name: '<?php echo $FactoryCode4;?>',
        data: [<?php echo join($data4, ',') ?>]
    }
    , {
        name: '<?php echo $FactoryCode5;?>',
        data: [<?php echo join($data5, ',') ?>]
    }
    , {
        name: '<?php echo $FactoryCode6;?>',
        data: [<?php echo join($data6, ',') ?>]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});


}
</script>
<div class="col-md-12">
<div id="container" style="height: 400px; width: 100%;"></div>
</div>
<div class="col-md-12">
<div id="Data" style="height: 400px"></div>
</div>
<div class="col-md-12">
<div class="card-body">
<table class="table table-sm" style="background-color: #fff;">
<thead  >
<tr style="text-align: center;font-size: 20px;">
<td colspan="8"><b>Produced Qty</b></td>
</tr>
<tr>
<th scope="col">Month Name</th>
<th scope="col" style="text-align: center;">Hand Stitched Ball</th>
<th scope="col" style="text-align: center;">Competiton Ball</th>
<th scope="col" style="text-align: center;">Finale Ball</th>
<th scope="col" style="text-align: center;">Urban Ball</th>
<th scope="col" style="text-align: center;">Machine Stitched Ball</th>
<th scope="col" style="text-align: center;">Airless Mini Ball</th>
<th scope="col" style="text-align: center;">Total</th>
</tr>
</thead>
<tbody>
<tr>
<?php
foreach($Factory as $Data) {
$MonthName = $Data['MonthName'];
$B34001 = $Data['B34001'];
$B34002 = $Data['B34002'];
$B34003 = $Data['B34003'];
$B34004 = $Data['B34004'];
$B34005 = $Data['B34005'];
$B34006 = $Data['B34006'];
$Sum=$B34001+$B34002+$B34003+$B34004+$B34005+$B34006;
?>     
<td scope="col"><?php echo $MonthName?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($B34001);?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($B34002);?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($B34003);?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($B34004);?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($B34005);?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($B34006);?></td>
<td scope="col" style="text-align: center;"><b><?php echo number_format($Sum);?></b></td>
</tr>
<?php 
} 
?>
<?php
foreach($FactorySum as $DataSum) {
$B34001Sum = $DataSum['B34001'];
$B34002Sum = $DataSum['B34002'];
$B34003Sum = $DataSum['B34003'];
$B34004Sum = $DataSum['B34004'];
$B34005Sum = $DataSum['B34005'];
$B34006Sum = $DataSum['B34006'];
$AllSum=$B34001Sum+$B34002Sum+$B34003Sum+$B34004Sum+$B34005Sum+$B34006Sum;
?>  
<tr>   
<td scope="col" ><b>Total</b></td>
<td scope="col" style="text-align: center;"><b><?php echo number_format($B34001Sum);?></b></td>
<td scope="col" style="text-align: center;"><b><?php echo number_format($B34002Sum);?></b></td>
<td scope="col" style="text-align: center;"><b><?php echo number_format($B34003Sum);?></b></td>
<td scope="col" style="text-align: center;"><b><?php echo number_format($B34004Sum);?></b></td>
<td scope="col" style="text-align: center;"><b><?php echo number_format($B34005Sum);?></b></td>
<td scope="col" style="text-align: center;"><b><?php echo number_format($B34006Sum);?></b></td>
<td scope="col" style="text-align: center;"><b><?php echo number_format($AllSum);?></b></td>
</tr>
<?php
} 
?> 
</tbody>
</table>
</div>
</div>
<?php }else{
$Date1;
$Date2;
$Process; 
$Date1;
$Type;
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
<script type="text/javascript">

window.onload = function() {

Highcharts.chart('Data11', {

    title: {
        text: 'Production Trend'
    },

   xAxis: {
         categories: [<?php echo join($dataMonth11, ',') ?>],
      title: {
        text: 'Months '
    }
    },
    yAxis: {
        title: {
            text: 'Order Qty'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            }
        
        }
    },

    series: [{
        name: '<?php echo $ProcessName;?>',
        data: [<?php echo join($data11, ',') ?>]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});

Highcharts.chart('Sum', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
    },
    title: {
        text: 'Produced Qty'
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
        name: 'Order Qty',
        data: [<?php echo join($dataSum, ',') ?>]
    }]
});


}
</script>

<form action="<?php echo base_url('Trends/getAllData'); ?>" method="POST">
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input class="form-control" type="Date" name="Date1" value="<?php echo $StartDateeee;?>" style="width: 110%" >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input class="form-control" type="Date" name="Date2" value="<?php echo $EndDateeee;?>" style="width: 110%" >
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class=" form-control-label">Factory Code:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-list"></i></div> -->
<select  class="form-control"  name="Process"  required="required" style="width: 110%"> 
<option value="<?php Echo $Process;?>" ><?php Echo $ProcessName;?> </option>               
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
<div class="col-md-12">
<div id="Data11" style="height: 400px"></div>
</div>
<div class="col-md-12">
<div id="Sum" style="height: 400px"></div>
</div>
<div class="col-md-12">
<div class="card-body">
<table class="table table-sm" style="background-color: #fff;">
<thead>
<tr style="text-align: center;font-size: 20px;">
<td colspan="3"><b><?php echo $ProcessName;?> Produced Qty</b></td>
</tr>
<tr>
<th scope="col">Month Name</th>
<th scope="col" style="text-align: center;">Produced Qty</th>
</tr>
</thead>
<tbody>
<tr>
<?php
foreach($ExFactory as $Data) {
$MonthName11 = $Data['MonthName'];
$OrderQty11 = $Data['Pass'];


?>
<td scope="col"><?php echo $MonthName11?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($OrderQty11);?></td>
</tr>
<?php
} 
?> 
<tr>
<?php
foreach($FactoryCodeSum as $DataCodeSum) {
$OrderQtyCodeSum= $DataCodeSum['Pass'];

?>
<td scope="col"><b>Total</b></td>
<td scope="col" style="text-align: center;"><b><?php echo number_format($OrderQtyCodeSum);?></b></td>
</tr>
<?php
} 
?> 
</tbody>
</table>
</div>

<!-- <div class="col-md-3">
<div class="form-group">
<label class="form-control-label">Select Article:</label>
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-list"></i></div>
<input type="text" list="browsers" name="Article" value="All">
<datalist  id="browsers" >
    <?php
foreach($Article as $get) {
?>
<option value="<?php echo $get['ArtCode']; ?>">
<?php
  }
?>
</datalist>
</div>
</div>
</div> -->
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
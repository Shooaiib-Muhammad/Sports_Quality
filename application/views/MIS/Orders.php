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
$CurrentDate2= date('Y-m-t', strtotime(date('Y-m')." +2 month"));
?>
<?php
$FactoryCode1="Hand Stitched Ball";
$FactoryCode2="Competition Ball";
$FactoryCode3="Finale Ball";
$FactoryCode4="Urban Ball";
$FactoryCode5="Machine Stitched Ball";
$FactoryCode6="Airless Mini Ball";
if ($ID == 00) {
if ($table == 1) {
  ?>
<form action="<?php echo base_url('Orders/getAllData'); ?>" method="POST">
<div class="col-md-2">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input class="form-control" type="Date" name="Date1" value="<?php echo $CurrentDate;?>" style="width: 110%">
</div>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input class="form-control" type="Date" name="Date2" value="<?php echo $CurrentDate2;?>" style="width: 110%">
</div>
</div>
</div>
<div class="col-md-2">
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
<div class="col-md-2">
<div class="form-group">
<label class=" form-control-label">Report Type:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-list"></i></div> -->
<select class="form-control"  name="Type"  required="required" style="width: 120%">    
<option value="00">Order Wise</option>               
<option value="11">Article Wise</option>      
<option value="22">Country Wise</option>
</select>
</div>
</div>
</div>
<div class="col-md-2">
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
   $OrderQty = $key1['OrderQty'];
   $data1[] = "['$MonthName', $OrderQty]";  
}
foreach($record2 as $key2) {
   $MonthName = $key2['MonthName'];
   $OrderQty = $key2['OrderQty'];
   $data2[] = "['$MonthName', $OrderQty]";  
}
foreach($record3 as $key3) {
   $MonthName = $key3['MonthName'];
   $OrderQty = $key3['OrderQty'];
   $data3[] = "['$MonthName', $OrderQty]";  
}
foreach($record4 as $key4) {
   $MonthName = $key4['MonthName'];
   $OrderQty = $key4['OrderQty'];
   $data4[] = "['$MonthName', $OrderQty]";  
}
foreach($record5 as $key5) {
   $MonthName = $key5['MonthName'];
   $OrderQty = $key5['OrderQty'];
   $data5[] = "['$MonthName', $OrderQty]";  
}
foreach($record6 as $key6) {
   $MonthName = $key6['MonthName'];
   $OrderQty = $key6['OrderQty'];
   $data6[] = "['$MonthName', $OrderQty]";  
}


foreach($Sum as $keySum) {
   // extract $keySum;
   $FactoryCode = $keySum['FactoryCode1'];
   $OrderQty = $keySum['OrderQty'];
   $data[] = "['$FactoryCode', $OrderQty]";
}
}else{
foreach($record as $Data) {
    $MonthName11 = $Data['MonthName'];
   $OrderQty11 = $Data['OrderQty'];
   $data11[] = "['$MonthName11', $OrderQty11]";  

}
  foreach($SumData as $Sum11) {
    $MonthNameSum = $Sum11['MonthName'];
   $OrderQtySum = $Sum11['OrderQty'];
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
        text: 'Orders Qty'
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
        text: 'Orders Trend'
    },
   xAxis: {

        labels: {
            enabled: false
        }
    },

    yAxis: {
        title: {
            text: 'Order Qty'
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
<table class="table table-sm">
<thead class="thead-dark" >
<tr style="background-color: black;color: #fff;text-align: center;font-size: 20px;">
<td colspan="8"><b>Orders Qty</b></td>
</tr>
<tr>
<th scope="col">Month Name</th>
<th scope="col" style="text-align: center;">Hand Stitched Ball</th>
<th scope="col" style="text-align: center;">Competition Ball</th>
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
<td scope="col" style="text-align: center;background-color: #282828;color:#fff;"><?php echo number_format($Sum);?></td>
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
<tr style="background-color: #282828;color:#fff;">   
<td scope="col" >Total</td>
<td scope="col" style="text-align: center;"><?php echo number_format($B34001Sum);?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($B34002Sum);?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($B34003Sum);?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($B34004Sum);?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($B34005Sum);?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($B34006Sum);?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($AllSum);?></td>
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
if($Type==00){
$TypeName="Order Wise";
}elseif($Type==11){
    $TypeName="Article Wise";
}elseif($Type==11){
    $TypeName="Country Wise";
}
?>
<script type="text/javascript">

window.onload = function() {

Highcharts.chart('Data11', {

    title: {
        text: 'Orders Trend'
    },

   xAxis: {

        labels: {
            enabled: false
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
        text: 'Orders Qty'
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

<form action="<?php echo base_url('Orders/getAllData'); ?>" method="POST">
<div class="col-md-2">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input class="form-control" type="Date" name="Date1" value="<?php echo $StartDateeee;?>" style="width: 110%" >
</div>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input class="form-control" type="Date" name="Date2" value="<?php echo $EndDateeee;?>" style="width: 110%" >
</div>
</div>
</div>
<div class="col-md-2">
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
<div class="col-md-2">
<div class="form-group">
<label class=" form-control-label">Report Type:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-list"></i></div> -->
<select class="form-control"  name="Type"  required="required" style="width: 120%">  
<option value="<?php Echo $Type;?>" ><?php Echo $TypeName;?> </option>   
<option value="00">Order Wise</option>               
<option value="11">Article Wise</option>      
<option value="22">Country Wise</option>
</select>
</div>
</div>
</div>
<div class="col-md-2">
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
<div class="col-md-6">
<div id="Data11" style="height: 400px"></div>
</div>
<div class="col-md-6">
<div id="Sum" style="height: 400px"></div>
</div>
<div class="col-md-12">
<div class="card-body">
<table  class="table table-sm">
<thead class="thead-dark">
<tr style="background-color: black;color: #fff;text-align: center;font-size: 20px;">
<td colspan="3"><b><?php echo $ProcessName;?> Orders Qty</b></td>
</tr>
<tr>
<th scope="col">Month Name</th>
<th scope="col" style="text-align: center;">Order Qty</th>
<th scope="col" style="text-align: center;">Ex-Factory</th>
</tr>
</thead>
<tbody>
<tr>
<?php
foreach($ExFactory as $Data) {
$MonthName11 = $Data['MonthName'];
$OrderQty11 = $Data['OrderQty'];
$DispQty11 = $Data['DispQty'];

?>
<td scope="col"><?php echo $MonthName11?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($OrderQty11);?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($DispQty11);?></td>
</tr>
<?php
} 
?> 
<tr style="background-color: #282828;color:#fff">
<?php
foreach($FactoryCodeSum as $DataCodeSum) {
$OrderQtyCodeSum= $DataCodeSum['OrderQty'];
$DispQtySum= $DataCodeSum['DispQty'];

?>
<td scope="col">Total</td>
<td scope="col" style="text-align: center;"><?php echo number_format($OrderQtyCodeSum);?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($DispQtySum);?></td>
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
} elseif($ID==11){

if ($Data == 1) {
  ?>
<form action="<?php echo base_url('Orders/getAllData'); ?>" method="POST">
<div class="col-md-2">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input class="form-control" type="Date" name="Date1" value="<?php echo $CurrentDate;?>" style="width: 110%">
</div>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input class="form-control" type="Date" name="Date2" value="<?php echo $CurrentDate2;?>" style="width: 110%">
</div>
</div>
</div>
<div class="col-md-2">
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
<div class="col-md-2">
<div class="form-group">
<label class=" form-control-label">Report Type:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-list"></i></div> -->
<select class="form-control"  name="Type"  required="required" style="width: 120%">    
<option value="00">Order Wise</option>               
<option value="11">Article Wise</option>      
<option value="22">Country Wise</option>
</select>
</div>
</div>
</div>
<div class="col-md-2">
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

foreach($TopArticle as $Data) {
   $OrderQty = $Data['OrderQty'];
   $ArtCode = $Data['ArtCode'];
   $dataGet[] = "['$ArtCode', $OrderQty]";  
   $dataArt[] = "['$ArtCode']";  
}


?>
<?php 

?>
<script type="text/javascript">

window.onload = function() {
var chart = Highcharts.chart('Graph', {

    title: {
        text: 'Top 20 Articles Order Qty '
    },

    
    xAxis: {
         categories: [<?php echo join($dataArt, ',') ?>],
      title: {
        text: 'Articles '
    }
    },
    yAxis: {
      title: {
        text: 'Order Qty '
    }
    },

    series: [{
        type: 'column',
        name: 'Order Qty',
        colorByPoint: true,
        data: [<?php echo join($dataGet, ',') ?>],
        showInLegend: false
    }]

});

}
</script>
<div class="col-md-12">
<div id="Graph" style="height: 400px; width: 100%;"></div>
</div>
<div class="col-md-12">
<div class="card-body">
<table  class="table table-sm">
<thead class="thead-dark">
<tr style="background-color: black;color: #fff;text-align: center;font-size: 20px;">
<td colspan="6"><b>Top 20 Article Orders Qty </b></td>
</tr>
<tr>
<th scope="col">Article Code</th>

<th scope="col" style="text-align: center;">Factory Code</th>
<th scope="col" style="text-align: center;">Model Name</th>
<th scope="col" style="text-align: center;">Working No</th>
<th scope="col" style="text-align: center;">Order Qty</th>
</tr>
</thead>
<tbody>
<tr>
<?php
foreach($TopArticle as $Data) {
   $OrderQty = $Data['OrderQty'];
   $ArtCode = $Data['ArtCode'];
    $FactoryCode = $Data['FactoryCode'];
     $ModelName = $Data['ModelName'];
      $WorkNo = $Data['WorkNo'];
   ?>
<td scope="col"><?php echo $ArtCode?></td>

<td scope="col" style="text-align: center;"><?php echo $FactoryCode;?></td>
<td scope="col" style="text-align: center;"><?php echo $ModelName;?></td>
<td scope="col" style="text-align: center;"><?php echo $WorkNo;?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($OrderQty);?></td>
</tr>
<?php
} 
?> 
 
</tbody>
</table>
</div>
</div>
<?php }else{


foreach($TopArticleCode as $DataCode) {
   $OrderQty = $DataCode['OrderQty'];
   $ArtCode = $DataCode['ArtCode'];
   $dataGetCode[] = "['$ArtCode', $OrderQty]";  
   $dataArtCode[] = "['$ArtCode']";  
}


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
if($Type==00){
$TypeName="Order Wise";
}elseif($Type==11){
    $TypeName="Article Wise";
}elseif($Type==22){
    $TypeName="Country Wise";
}
?>
<script type="text/javascript">
window.onload = function() {
var chart = Highcharts.chart('Graph11', {

    title: {
        text: 'Top 20 Articles Order Qty '
    },

    
    xAxis: {
         categories: [<?php echo join($dataArtCode, ',') ?>],
      title: {
        text: 'Articles '
    }
    },
    yAxis: {
      title: {
        text: 'Order Qty '
    }
    },

    series: [{
        type: 'column',
        name: 'Order Qty',
        colorByPoint: true,
        data: [<?php echo join($dataGetCode, ',') ?>],
        showInLegend: false
    }]

});

}
</script>

<form action="<?php echo base_url('Orders/getAllData'); ?>" method="POST">
<div class="col-md-2">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input class="form-control" type="Date" name="Date1" value="<?php echo $StartDateeee;?>" style="width: 110%">
</div>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input class="form-control" type="Date" name="Date2" value="<?php echo $EndDateeee;?>" style="width: 110%">
</div>
</div>
</div>
<div class="col-md-2">
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
<div class="col-md-2">
<div class="form-group">
<label class=" form-control-label">Report Type:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-list"></i></div> -->
<select class="form-control"  name="Type"  required="required" style="width: 120%">  
<option value="<?php Echo $Type;?>" ><?php Echo $TypeName;?> </option>    
<option value="00">Order Wise</option>               
<option value="11">Article Wise</option>      
<option value="22">Country Wise</option>
</select>
</div>
</div>
</div>
<div class="col-md-2">
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
<div id="Graph11" style="height: 400px"></div>
</div>

<div class="col-md-12">
<div class="card-body">
<table  class="table table-sm">
<thead class="thead-dark">
<tr style="background-color: black;color: #fff;text-align: center;font-size: 20px;">
<td colspan="4"><b>TOp 20 Article Orders Qty (<?php echo $Process ?>) </b></td>
</tr>
<tr>
<th scope="col">Article Code</th>

<th scope="col" style="text-align: center;">Model Name</th>
<th scope="col" style="text-align: center;">Working No</th>
<th scope="col" style="text-align: center;">Order Qty</th>
</tr>
</thead>
<tbody>
<tr>
<?php
foreach($TopArticleCode as $DataCode) {
   $OrderQty = $DataCode['OrderQty'];
   $ArtCode = $DataCode['ArtCode'];
   $ModelName = $DataCode['ModelName'];
   $WorkNo = $DataCode['WorkNo'];
   ?>
<td scope="col"><?php echo $ArtCode?></td>

<td scope="col" style="text-align: center;"><?php echo $ModelName;?></td>
<td scope="col" style="text-align: center;"><?php echo $WorkNo;?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($OrderQty);?></td>
</tr>
<?php
} 
?> 
 
</tbody>
</table>
</div>
</div>
<?php
}
}
elseif($ID==22){
 if ($Data == 1) {
?>

<form action="<?php echo base_url('Orders/getAllData'); ?>" method="POST">
<div class="col-md-2">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input class="form-control" type="Date" name="Date1" value="<?php echo $CurrentDate;?>" style="width: 110%">
</div>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input class="form-control" type="Date" name="Date2" value="<?php echo $CurrentDate2;?>" style="width: 110%">
</div>
</div>
</div>
<div class="col-md-2">
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
<div class="col-md-2">
<div class="form-group">
<label class=" form-control-label">Report Type:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-list"></i></div> -->
<select class="form-control"  name="Type"  required="required" style="width: 120%">    
<option value="00">Order Wise</option>               
<option value="11">Article Wise</option>      
<option value="22">Country Wise</option>
</select>
</div>
</div>
</div>
<div class="col-md-2">
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

foreach($TopCustomers as $Data) {
   $OrderQty = $Data['OrderQty'];
   $CustomerName = $Data['CountryName'];
   $dataGetCustomer[] = "['$CustomerName', $OrderQty]";  
   $dataCustomer[] = "['$CustomerName']";  
}


?>
<?php 

?>
<script type="text/javascript">

window.onload = function() {
var chart = Highcharts.chart('Graph', {

    title: {
        text: 'Top 20 Countries Order Qty '
    },

    
    xAxis: {
         categories: [<?php echo join($dataCustomer, ',') ?>],
      title: {
        text: 'Countries '
    }
    },
    yAxis: {
      title: {
        text: 'Order Qty '
    }
    },

    series: [{
        type: 'column',
        name: 'Order Qty',
        colorByPoint: true,
        data: [<?php echo join($dataGetCustomer, ',') ?>],
        showInLegend: false
    }]

});

}
</script>
<div class="col-md-12">
<div id="Graph" style="height: 400px; width: 100%;"></div>
</div>

<div class="col-md-12">
<div class="card-body">
<table  class="table table-sm">
<thead class="thead-dark">
<tr style="background-color: black;color: #fff;text-align: center;font-size: 20px;">
<td colspan="4"><b>TOp 20 Countries Orders Qty </b></td>
</tr>
<tr>
<th scope="col">Country Name</th>
<th scope="col">Customer No</th>
<th scope="col">Customer Name</th>
<th scope="col" style="text-align: center;">Order Qty</th>
</tr>
</thead>
<tbody>
<tr>
<?php
foreach($TopCustomers as $Data) {
   $OrderQty = $Data['OrderQty'];
   $CustomerName = $Data['CountryName'];
     $CustCode = $Data['CustCode'];
       $CustomerName111 = $Data['CustomerName'];
   $dataGetCustomer[] = "['$CustomerName', $OrderQty]";
?>
<td scope="col"><?php echo $CustomerName?></td>
<td scope="col"><?php echo $CustCode?></td>
<td scope="col"><?php echo $CustomerName111?></td>
<td scope="col" style="text-align: center;"><?php echo number_format($OrderQty);?></td>
</tr>
<?php
} 
?> 
 
</tbody>
</table>
</div>
</div>
<?php }else{


foreach($TopCustomersCode as $DataCode) {
   $OrderQty = $DataCode['OrderQty'];
   $CustomerName = $DataCode['CountryName'];
   $dataGetCodeCustomer[] = "['$CustomerName', $OrderQty]";  
   $dataCustomerCode[] = "['$CustomerName']";  
}


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
if($Type==00){
$TypeName="Order Wise";
}elseif($Type==11){
    $TypeName="Article Wise";
}elseif($Type==22){
    $TypeName="Country Wise";
}
?>
<script type="text/javascript">
window.onload = function() {
var chart = Highcharts.chart('Graph11', {

    title: {
        text: 'Top 20 Countries Order Qty '
    },

    
    xAxis: {
         categories: [<?php echo join($dataCustomerCode, ',') ?>],
      title: {
        text: 'Countries'
    }
    },
    yAxis: {
      title: {
        text: 'Order Qty '
    }
    },

    series: [{
        type: 'column',
        name: 'Order Qty',
        colorByPoint: true,
        data: [<?php echo join($dataGetCodeCustomer, ',') ?>],
        showInLegend: false
    }]

});

}
</script>

<form action="<?php echo base_url('Orders/getAllData'); ?>" method="POST">
<div class="col-md-2">
<div class="form-group">
<label class="form-control-label">From Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input class="form-control" type="Date" name="Date1" value="<?php echo $StartDateeee;?>" style="width: 110%">
</div>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<label class="form-control-label">To Date:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> -->
<input class="form-control" type="Date" name="Date2" value="<?php echo $EndDateeee;?>" style="width: 110%">
</div>
</div>
</div>
<div class="col-md-2">
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
<div class="col-md-2">
<div class="form-group">
<label class=" form-control-label">Report Type:</label>
<div class="input-group">
<!-- <div class="input-group-addon"><i class="fa fa-list"></i></div> -->
<select class="form-control"  name="Type"  required="required" style="width: 120%">  
<option value="<?php Echo $Type;?>" ><?php Echo $TypeName;?> </option>  
<option value="00">Order Wise</option>               
<option value="11">Article Wise</option>      
<option value="22">Country Wise</option>
</select>
</div>
</div>
</div>
<div class="col-md-2">
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
<div id="Graph11" style="height: 400px"></div>
</div>
<div class="col-md-12">
<div class="card-body">
<table  class="table table-sm">
<thead class="thead-dark">
<tr style="background-color: black;color: #fff;text-align: center;font-size: 20px;">
<td colspan="4"><b>Top 20 Countries Orders Qty (<?php echo $Process ?>)</b></td>
</tr>
<tr>
<th scope="col">Country Name</th>
<th scope="col">Customer No</th>
<th scope="col">Customer Name</th>
<th scope="col" style="text-align: center;">Order Qty</th>
</tr>
</thead>
<tbody>
<tr>
<?php
foreach($TopCustomersCode as $DataCode) {
$OrderQty = $DataCode['OrderQty'];
$CustomerName = $DataCode['CountryName'];
$CustomerName11 = $DataCode['CustomerName'];
$CustCode = $DataCode['CustCode'];

?>
<td scope="col"><?php echo $CustomerName?></td>
<td scope="col"><?php echo $CustCode?></td>
<td scope="col"><?php echo $CustomerName11?></td>

<td scope="col" style="text-align: center;"><?php echo number_format($OrderQty);?></td>
</tr>
<?php
} 
?> 
 
</tbody>
</table>
</div>

</div>
<?php
}

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
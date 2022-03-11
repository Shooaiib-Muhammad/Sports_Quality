
<?php
if (!$this->session->has_userdata('user_id')) {
    redirect('');
} else {
?>
          
<?php 

$dateArray = [];
$weightStart = [];
$weightEnd = [];
$weight = [];

$circumferenceStart = [];
$circumferenceEnd = [];
$circumference = [];
foreach ($lfb as $key => $value) {

  array_push($dateArray,(string)$value['ArtCode']);
  array_push($weightStart,$value['StrtWeight']);
  array_push($weightEnd,$value['EndWeight']);
  array_push($weight,$value['Weight']);

  array_push($circumferenceStart,$value['StrtRange']);
  array_push($circumferenceEnd,$value['EndRange']);
  array_push($circumference,(($value['Circum1']+$value['Circum2']+$value['Circum3'])/3));


}


?>
<div class="table-responsive " style="width:60%; margin-left:250px; overflow:scroll;">
<table class="table table-hover " style="border: 1px gray solid; width:100%; margin-top:50px;">
    <thead class="bg-primary-200 text-light" style="color: #fffbfb;" >
      <th style="text-align: center" ><h4>  TM  LFB Detail  Between (<?php echo date("d/m/Y", strtotime($Sdate));?>) To (<?php echo date("d/m/Y", strtotime($Edate));?>) </h4></th>
  </thead>
</table>
<table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="forming-table" style="width:100%;">
  <thead class="bg-primary-200 text-light" style="border:2px solid black; color: #fff;  font-size: 15px;">
  <th>Serial No.</th>
  <th>Station Name</th>
  <th>Date</th>
    <th>Art Code</th>
    <th> Size</th>
    <th style="text-align: center;">Weight Range</th>
   <th style="text-align: center;">Weight</th>
<th style="text-align: center;">Cir. Range</th>
<th style="text-align: center;">Cir 1</th>
<th style="text-align: center;">Cir 2</th>
<th style="text-align: center;">Cir 3</th>

   <th style="text-align: center;">Circumfrances</th>
     
  </thead>
  <tbody>
<?php
  $i=0;
foreach($lfb as $Data1){
  $j=$i+1;
$Hoursname=$Data1['ArtCode'];
$Datee=$Data1['Dateee'];
$Weight=$Data1['Weight'];

$StrtWeight=$Data1['StrtWeight'];
$ArtSize=$Data1['ArtSize'];
$EndWeight=$Data1['EndWeight'];

$Circum1=$Data1['Circum1'];
$Circum2=$Data1['Circum2'];
$Circum3=$Data1['Circum3'];
$Circumfrances=($Circum1+$Circum2+$Circum3)/3;
$FinCircumfrances=$Circumfrances;
$StrtRange=$Data1['StrtRange'];
$EndRange=$Data1['EndRange'];
//$Size=$Data1['ArtSize'];
 $Stationname=$Data1['Stationname'];


   ?>
  

    <tr>
    <td style="text-align: left;"><?php Echo $j;?>
</td>
<td style="text-align: left;"><?php echo $Stationname;?></td>
<td style="text-align: left;"><?php echo $Datee;?></td>
 
      <td style="text-align: left;"><?php echo $Hoursname;?></td>
<!--       <td style="text-align: left;"><?php echo $FactoryCode;?></td> -->
<td style="text-align: center;"><?php echo $ArtSize;?></td>
<td style="text-align: right;"><?php echo Round($StrtWeight);?>-<?php echo Round($EndWeight);?></td>
<?php if(($Weight>$EndWeight) ||($Weight<$StrtWeight)){
?>
<td style="text-align: right;color:#202020; background: red;"><?php echo Round($Weight);?></td>
<?php
}else{ 
  ?>
  <td style="text-align: right;"><?php echo Round($Weight);?></td>
<?php
}

?>
<td style="text-align: right;"><?php echo Round($StrtRange,2);?>-<?php echo Round($EndRange,2);?></td>
<td style="text-align: right;"><?php echo Round($Circum1,2);?></td>
<td style="text-align: right;"><?php echo Round($Circum2,2);?></td>
<td style="text-align: right;"><?php echo Round($Circum3,2);?></td>
<?php if(($FinCircumfrances>$EndRange) ||($FinCircumfrances<$StrtRange)){
?>
<td style="text-align: right;color:#202020; background: red;"><?php echo Round($FinCircumfrances,2);?></td>
<?php

}else{
  ?>
  <td style="text-align: right;"><?php echo Round($FinCircumfrances,2);?></td>
  <?php
}
?>
     </tr>
  <?php
  $i++;
}



//}
    ?>


</tbody>


</table>
</div>

<div class="col-md-12">
      <div class="card">
        <div class="card-body">
        <div id="container"></div>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
        <div id="containerCircumference"></div>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>


<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>



    <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
      <script type="text/javascript">


          /* Activate smart panels */
          $('#js-page-content').smartPanel();
      </script>
      

<script>
    Highcharts.chart('container', {

title: {
  text: 'Weigth wise Graph  Between (<?php echo date("d/m/Y", strtotime($Sdate));?>) To (<?php echo date("d/m/Y", strtotime($Edate));?>)'
},

yAxis: {
  title: {
    text: 'Weights'
  }
},

xAxis: {
  title: {
    text: 'Article Code'
  },
  categories: <?php echo json_encode($dateArray);  ?>
},

legend: {
  layout: 'vertical',
  align: 'right',
  verticalAlign: 'middle'
},

// plotOptions: {
//   series: {
//     label: {
//       connectorAllowed: false
//     },
//     pointStart: 2010
//   }
// },

series: [

  
  {
  name: 'Weight Start',
  data: [<?php echo implode(",",$weightStart) ?>]
},{
  name: 'Weight',
  color:'red',
  data: [<?php echo implode(",",$weight) ?>]
},
{
  name: 'Weight End',
  data: [<?php echo implode(",",$weightEnd) ?>]
}
],

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

Highcharts.chart('containerCircumference', {

title: {
  text: 'Circumference wise Graph  Between (<?php echo date("d/m/Y", strtotime($Sdate));?>) To (<?php echo date("d/m/Y", strtotime($Edate));?>)'
},

yAxis: {
  title: {
    text: 'Circumference'
  }
},

xAxis: {
  title: {
    text: 'Article Code'
  },
  categories: <?php echo json_encode($dateArray);  ?>
},

legend: {
  layout: 'vertical',
  align: 'right',
  verticalAlign: 'middle'
},

// plotOptions: {
//   series: {
//     label: {
//       connectorAllowed: false
//     },
//     pointStart: 2010
//   }
// },

series: [

  
  {
  name: 'Circumference Start',
  data: [<?php echo implode(",",$circumferenceStart) ?>]
},{
  name: 'Circumference',
  color:'red',
  data: [<?php echo implode(",",$circumference) ?>]
},
{
  name: 'Circumference End',
  data: [<?php echo implode(",",$circumferenceEnd) ?>]
}
],

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
</script>

<?php 
}
?>
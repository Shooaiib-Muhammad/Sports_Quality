<?php
foreach ($CarcasData as $key1) {
  $HourName = $key1['HourName'];
  $values = $key1['CarcassWght'];
  $data1[] = "['$HourName', $values]";
}
foreach ($CarcasData as $key1) {
  $HourName = $key1['HourName'];
  $PUStartRange = $key1['CarcWghtStartRange'];
  $data2[] = "['$HourName', $PUStartRange]";
}
foreach ($CarcasData as $key1) {
  $HourName = $key1['HourName'];
  $PUEndRange = $key1['CarcWghtEndRange'];
  $data3[] = "['$HourName', $PUEndRange]";
}
?>
<div id="content" class="table-responsive " style="width:100%; margin-top:100px; overflow:scroll;">
  <div class="col-lg-12" id="chart">
    <!DOCTYPE html>
    <html>

    <head>

      <style>
        .highcharts-figure,
        .highcharts-data-table table {
          min-width: 360px;
          max-width: 800px;
          margin: 1em auto;
        }

        .highcharts-data-table table {
          font-family: Verdana, sans-serif;
          border-collapse: collapse;
          border: 1px solid #EBEBEB;
          margin: 10px auto;
          text-align: center;
          width: 100%;
          max-width: 500px;
        }

        .highcharts-data-table caption {
          padding: 1em 0;
          font-size: 1.2em;
          color: #555;
        }

        .highcharts-data-table th {
          font-weight: 600;
          padding: 0.5em;
        }

        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
          padding: 0.5em;
        }

        .highcharts-data-table thead tr,
        .highcharts-data-table tr:nth-child(even) {
          background: #f8f8f8;
        }

        .highcharts-data-table tr:hover {
          background: #f1f7ff;
        }
      </style>
    </head>

    <body>



      <script src="<?php echo base_url(); ?>assets/Css/Testcode.js"></script>
      <script src="<?php echo base_url(); ?>assets/Admin/vendors/chart.js/dist/Chart.bundle.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/Admin/assets/js/init-scripts/chart-js/chartjs-init.js"></script>

      <figure class="highcharts-figure">
        <div id="container"></div>

      </figure>
      <script>
        Highcharts.chart('container', {

          title: {
            text: 'Weight Between of (<?php echo $Sdate; ?>) To(<?php echo $Edate; ?>)'
          },

          xAxis: {

            labels: {
              enabled: false
            }
          },

          yAxis: {
            minColor: '#FFFFFF',
            maxColor: '#000000',
            max: <?php echo $CarcasData[0]['CarcWghtEndRange'] + 20 ?>,
            min: <?php echo $CarcasData[0]['CarcWghtStartRange'] - 20 ?>,
          },

          plotOptions: {
            column: {
              zones: [{
                value: 10, // Values up to 10 (not including) ...
                color: 'blue' // ... have the color blue.
              }, {
                color: 'red' // Values from 10 (including) and up have the color red
              }]
            }
          },



          // join(" ",$arr)
          series: [{
            name: 'Weight',
            data: [<?php echo join(',',$data1) ?>]
          }, {
            name: 'Start Range',
            data: [<?php echo join(',', $data2) ?>]
          }, {
            name: 'End Range',
            data: [<?php echo join(',', $data3) ?>]
          }]



        });
      </script>
    </body>

    </html>
  </div>
  <table class="table table-hover " style="border: 1px gray solid;">
    <thead class="bg-primary-200 text-light" style="color: #fffbfb;">
      <th style="text-align: center; margin-top:200px;">
        <h4> TM Carcas Between of (<?php echo $Sdate; ?>) To (<?php echo $Edate; ?>) </h4>
      </th>
    </thead>

  </table>
  <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="forming">
    <thead class="bg-primary-200 text-light" style="border:2px solid black; color: #fff;  font-size: 15px;">

      <th>Hours</th>
      <th> Size</th>
      <th style="text-align: center;">Weight Range</th>
      <th style="text-align: center;">Weight</th>
      <th style="text-align: center;">Cir. Range</th>
      <th style="text-align: center;">Circumference</th>

    </thead>

    <?php

    foreach ($CarcasData as $Data1) {
      $FactoryCode = $Data1['HourName'];
      $CarcassWght = $Data1['CarcassWght'];
      $CarcassCircum = $Data1['CarcassCircum'];
      $CarcassWghtS = $Data1['CarcWghtStartRange'];
      $CarcassCircumS = $Data1['CarcCircumStartRange'];
      $CarcassWghtE = $Data1['CarcWghtEndRange'];
      $CarcassCircumE = $Data1['CarcCircumEndRange'];
      $Size = $Data1['Size'];


      $Size = $Data1['Size'];
      $HourName = $Data1['HourName'];
    ?>

      <tbody style="border:1px #ff6600 solid; ">
        <tr>

          <td style="text-align: left;"><?php echo $FactoryCode; ?></td>
          <td style="text-align: center;"><?php echo $Size; ?></td>
          <td style="text-align: right;"><?php echo Round($CarcassWghtS); ?>-<?php echo Round($CarcassWghtE); ?></td>
          <?php if (($CarcassWght > $CarcassWghtE) || ($CarcassWght < $CarcassWghtS)) {
          ?>
            <td style="text-align: center; background-color:red;color:#fffbfb;"><?php echo Round($CarcassWght, 2); ?></td>
          <?php
          } else {
          ?>
            <td style="text-align: center;"><?php echo Round($CarcassWght, 2); ?></td>
          <?php
          }
          ?>
          <td style=" text-align: right;"><?php echo $CarcassCircumS; ?>-<?php echo $CarcassCircumE; ?></td>
          <?php if (($CarcassCircum > $CarcassCircumE) || ($CarcassCircum < $CarcassCircumS)) {
          ?>
            <td style=" text-align: right;background-color:red;color:#fffbfb;"><?php echo Round($CarcassCircum, 2); ?></td>
          <?php
          } else {
          ?>
            <td style=" text-align: right;"><?php echo Round($CarcassCircum, 2); ?></td>
          <?php
          }

          ?>
        </tr>
      <?php

    }


      ?>


      </tbody>


  </table>


</div>
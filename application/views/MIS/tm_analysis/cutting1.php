<?php


//echo json_encode($hours);
foreach ($CuttingFinal as $key1) {
  $HourName = $key1['HourName'];
  $values = $key1['PU'];
  $data1[] = "['$HourName', $values]";
}
foreach ($CuttingFinal as $key1) {
  $HourName = $key1['HourName'];
  $PUStartRange = $key1['PUStartRange'];
  $data2[] = "['$HourName', $PUStartRange]";
}
foreach ($CuttingFinal as $key1) {
  $HourName = $key1['HourName'];
  $PUEndRange = $key1['PUEndRange'];
  $data3[] = "['$HourName', $PUEndRange]";
}
?>
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
<div class="table-responsive container-fluid " style="width:50%; margin-top:100px; ">




  <!DOCTYPE html>
  <html>

  <body>



    <script src="<?php echo base_url(); ?>assets/Css/Testcode.js"></script>
    <script src="<?php echo base_url(); ?>assets/Admin/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/Admin/assets/js/init-scripts/chart-js/chartjs-init.js"></script>

    <figure class="highcharts-figure">
      <div id="container"></div>
      <p class="highcharts-description">
        Basic line chart Showing Weight between balls passed of different types.
      </p>
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
          max: <?php echo $CuttingFinal[0]['PUEndRange'] + 20 ?>,
          min: <?php echo $CuttingFinal[0]['PUStartRange'] - 20 ?>,
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



//  join(" ",$arr);
        series: [{
          name: 'Weight',
          data: [<?php echo join( ',', $data1,) ?>]
        }, {
          name: 'Start Range',
          data: [<?php echo join(',', $data2,) ?>]
        }, {
          name: 'End Range',
          data: [<?php echo join(',', $data3,) ?>]
        }]



      });
    </script>
  </body>

  </html>
  <table class="table table-hover " style="border: 1px gray solid; margin-top:50px;">
    <thead class="bg-primary-200 text-light" style="color: #fffbfb;">
      <th style="text-align: center; ">
        <h4> Weight Between of (<?php echo $Sdate; ?>) To (<?php echo $Edate; ?>) </h4>
      </th>
    </thead>

  </table>
  <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="forming-table">
    <thead class="bg-primary-200 text-light" style="border:2px solid black; color: #fff;  font-size: 15px;">
      <th>Serial No.</th>
      <th>Hours</th>
      <th>Factory Code</th>
      <th> Size</th>
      <th style="text-align: center;">Weight Range</th>
      <th style="text-align: center;">Weight</th>
    </thead>
    <tbody>
      <?php
      $Process = $MaterialTYpe;
      $i = 0;
      foreach ($CuttingFinal as $key) {
        $j = $i + 1;
        $PU = $key['PU'];
        $Foam = $key['Foam'];
        $Fabric = $key['Fabric'];


        if ($Process == 1 or $Process == 4 or $Process == 7) {
          $Weight = $PU;
        }
        if ($Process == 3 or $Process == 5 or $Process == 8) {
          $Weight = $Foam;
        }
        if ($Process == 2 or $Process == 6 or $Process == 9) {
          $Weight = $Fabric;
        }
        $PUStartRange = $key['PUStartRange'];
        $PUEndRange = $key['PUEndRange'];
      ?>
        <tr>
          <td><?php echo $j; ?></td>
          <td><?php echo $key['HourName']; ?></td>
          <td><?php echo $key['FactoryCode']; ?></td>
          <td><?php echo $key['Size']; ?></td>
          <td style="text-align: center;"><?php echo Round($PUStartRange); ?>-<?php echo Round($PUEndRange); ?></td>
          <?php if (($Weight > $PUEndRange) || ($Weight < $PUStartRange)) {
          ?>

            <td style="text-align: right;"><?php echo Round($Weight); ?></td>
          <?php

          } else {
          ?>
            <td style="text-align: right;"><?php echo Round($Weight); ?></td>

          <?php


          }
          ?>
        </tr>
      <?php
        $i++;
      } ?>

    </tbody>
  </table>
</div>
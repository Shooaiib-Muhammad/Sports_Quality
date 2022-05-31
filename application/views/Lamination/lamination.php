<?php $this->load->view('includes/new_header'); ?>
<!-- BEGIN Page Wrapper -->
<div class="page-wrapper">
  <div class="page-inner">
    <!-- BEGIN Left Aside -->
    <?php

    $this->load->view('includes/new_aside.php');
    ?>
    <!-- END Left Aside -->
    <div class="page-content-wrapper">
      <!-- BEGIN Page Header -->
      <?php

      $this->load->view('includes/top_header.php');
      ?>
      <!-- END Page Header -->
      <!-- BEGIN Page Content -->
      <!-- the #js-page-content id is needed for some plugins to initialize -->
      <main id="js-page-content" role="main" class="page-content">

        <ol class="breadcrumb page-breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url(
                                                  'Efficiency'
                                                ); ?>">Dashboard</a></li>


          <li class="breadcrumb-item"><a href="javascript:void(0);"> Dashboard</a></li>
          <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>

        <div class="subheader">
          <h1 class="subheader-title">
            <i class='subheader-icon fal fa-chart-area'></i> <span class='fw-300'>Dashboard</span>
          </h1>


        </div>

        <div class="row">

          <div class="col-md-12">

            <?php
            $Month = date('m');
            $Year = date('Y');
            $Day = date('d');
            $CurrentDate = $Year . '-' . $Month . '-' . $Day;
            ?>


            <!-- <div class="row clearfix"> -->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><b>Date Filteration</b></h5>
                <form method="post" action="<?php echo base_url('Lamination/searchData') ?>">
                  <div class="row clearfix">
                    <div class="col-md-2" style="margin-right:20px;">
                      <div class="form-group">
                        <label class="form-control-label">From Date:</label>
                        <div class="input-group">
                          <input class="form-control" type="Date" id="SDate" name="Sdate" value="<?php echo $CurrentDate; ?>" style="width: 100%">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label class="form-control-label">To Date:</label>
                        <div class="input-group">
                          <input class="form-control" type="Date" id="EDate" name="Edate" value="<?php echo $CurrentDate; ?>" style="width: 100%">
                        </div>
                      </div>
                    </div>


                    <div class="col-md-2">
                      <div class="form-group">
                        <label class=" form-control-label"></label>
                        <div class="input-group">
                          <button type="submit" id="submit" class="btn btn-primary " style="border-radius: 15px;"><i class="fa fa-search"></i> Search</button>

                        </div>
                      </div>
                    </div>

                  </div>
                </form>
              </div>
            </div>

            <br>


          </div>





        </div>






        <div class="row">


          <div class="col-md-12">

            <div class="row mt-4">
              <div class="col-md-2">

                <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g" style="background-color:black;">

                  <h3 class="display-4 d-block l-h-n m-0 fw-500">

                    <small class="m-0 l-h-n">Total Reading</small>
                  </h3>
                  <h3 class="display-4 d-block l-h-n m-0 fw-500">

                    <?php echo $total * 0.05; ?> mtr
                  </h3>
                  <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size:6rem"></i>

                  <!-- <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i> -->
                </div>

              </div>


              <?php foreach ($IndividualReading as $Inmachine) {
                $no = $Inmachine['MachineName'];

              ?>
                <div class="col-md-2">

                  <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
                    <div class="">
                      <h3 class="display-4 d-block l-h-n m-0 fw-500">

                        <small class="m-0 l-h-n">Lamination Machine </small>
                      </h3>
                      <h3 class="display-4 d-block l-h-n m-0 fw-500">

                        <?php echo $Inmachine['Reading'] * 0.05; ?> mtr
                      </h3>
                      <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size:6rem"></i>
                    </div>
                    <!-- <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i> -->
                  </div>

                </div>




              <?php
              }
              ?>

              </a>






            </div>


            <?php

            $GetHours = array();
            $GetReading = array();
            $target = array();

            foreach ($HourllyReading as $key) {
              $point1 = array(Round($key['Reading'] * 0.05, 2),);
              $point2 = array($key['HourName'],);
              $dailytarget = 3000 / 6;
              $point3 = $dailytarget / 8;

              array_push($GetReading, $point1);
              array_push($GetHours, $point2);
              array_push($target, $point3);
              //array_push($lineNames, $key['LineName']);

            } ?>






            <div class="row">
              <div class="col-md-12">

                <div id="panel-1" class="panel">
                  <div class="panel-hdr">
                    <h2>
                      Lamination Reading
                      <!-- <?php Print_r($HourllyReading); ?> -->
                    </h2>
                  </div>
                  <div class="panel-container show">
                    <div id="container">

                    </div>

                  </div>
                </div>

              </div>
            </div>
            <style>
              .highcharts-figure,
              .highcharts-data-table table {
                min-width: 310px;
                max-width: 800px;
                margin: 1em auto;
              }

              #container {
                height: 400px;
              }

              .highcharts-data-table table {
                font-family: Verdana, sans-serif;
                border-collapse: collapse;
                border: 1px solid #ebebeb;
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

            <!-- <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/export-data.js"></script>
            <script src="https://code.highcharts.com/modules/accessibility.js"></script> -->

            <!-- <figure class="highcharts-figure">
              <div id="container"></div> -->
            <?php

            $this->load->view('adminHeader.php');
            ?>

            <!-- <script src="https://code.highcharts.com/highcharts.js"></script>
              <script src="https://code.highcharts.com/highcharts-3d.js"></script>
              <script src="https://code.highcharts.com/modules/exporting.js"></script>
              <script src="https://code.highcharts.com/modules/export-data.js"></script>
              <script src="https://code.highcharts.com/modules/accessibility.js"></script> -->



            <script>
              Highcharts.chart('container', {
                chart: {
                  zoomType: 'xy'
                },
                title: {
                  text: 'Target vs Achieved'
                },
                subtitle: {
                  // text: 'Source: WorldClimate.com'
                },
                xAxis: [{
                  categories: <?php echo json_encode($GetHours, JSON_NUMERIC_CHECK); ?>,
                  crosshair: true
                }],
                yAxis: [{ // Primary yAxis
                  labels: {
                    format: '{value} mtr',
                    style: {
                      color: Highcharts.getOptions().colors[1]
                    }
                  },
                  title: {
                    text: 'Achieved',
                    style: {
                      color: Highcharts.getOptions().colors[1]
                    }
                  }
                }, { // Secondary yAxis
                  title: {
                    text: 'Target',
                    style: {
                      color: Highcharts.getOptions().colors[0]
                    }
                  },
                  labels: {
                    format: '{value} mtr',
                    style: {
                      color: Highcharts.getOptions().colors[0]
                    }
                  },
                  opposite: true
                }],
                tooltip: {
                  shared: true
                },
                legend: {
                  layout: 'vertical',
                  align: 'left',
                  x: 120,
                  verticalAlign: 'top',
                  y: 100,
                  floating: true,
                  backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || // theme
                    'rgba(255,255,255,0.25)'
                },
                series: [{
                    name: 'Achieved',
                    type: 'column',
                    yAxis: 1,
                    data: <?php echo json_encode($GetReading, JSON_NUMERIC_CHECK); ?>,
                    tooltip: {
                      valueSuffix: ' mtr'
                    }

                  }, {

                    name: 'Target',
                    type: 'spline',
                    color: 'red',
                    data: <?php echo json_encode($target, JSON_NUMERIC_CHECK); ?>,
                    tooltip: {
                      valueSuffix: ' mtr'
                    }
                  }

                ]


              });
              // Highcharts.chart('container', {

              //   title: {
              //     text: ''
              //   },

              //   subtitle: {
              //     text: ''
              //   },

              //   yAxis: {
              //     title: {
              //       text: <?php echo json_encode($point2, JSON_NUMERIC_CHECK); ?>,
              //     }
              //   },

              //   xAxis: {
              //     accessibility: {
              //       rangeDescription: 'Range: 2010 to 2017'
              //     }
              //   },

              //   legend: {
              //     layout: 'vertical',
              //     align: 'right',
              //     verticalAlign: 'middle'
              //   },

              //   plotOptions: {
              //     series: {
              //       label: {
              //         connectorAllowed: false
              //       },
              //       pointStart: 1
              //     }
              //   },

              //   series: [{
              //     name: 'Lamination',
              //     data: <?php echo json_encode($point1, JSON_NUMERIC_CHECK); ?>,
              //   }],

              //   responsive: {
              //     rules: [{
              //       condition: {
              //         maxWidth: 500
              //       },
              //       chartOptions: {
              //         legend: {
              //           layout: 'horizontal',
              //           align: 'center',
              //           verticalAlign: 'bottom'
              //         }
              //       }
              //     }]
              //   }

              // });
            </script>






          </div>
      </main>
    </div>
  </div>

</div>
</div>

</div>
<?php
if (!$this->session->has_userdata('user_id')) {
    redirect('');
} else {
?>
    <div id="panel-1" class="panel">



        <?php $this->load->view('includes/new_header'); ?>

        <!-- BEGIN Page Wrapper -->
        <div class="page-wrapper">
            <div class="page-inner">
                <!-- BEGIN Left Aside -->
                <?php $this->load->view('includes/new_aside'); ?>
                <!-- END Left Aside -->
                <div class="page-content-wrapper">
                    <!-- BEGIN Page Header -->
                    <?php $this->load->view('includes/top_header.php'); ?>
                    <main id="js-page-content" role="main" class="page-content">

                        <div class="col-lg-12" style="margin-bottom:20px">

                            <ol class="breadcrumb page-breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(
                                                                            'index.php/DashboardController'
                                                                        ); ?>">Dashboard</a></li>
                                <li class="breadcrumb-item"> AMB</li>


                                <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                            </ol>


                            <div class="subheader">
                                <h1 class="subheader-title">
                                    <i class='subheader-icon fal fa-chart-area'></i>AMB (Airless Mini Ball Reports)</span>

                                </h1>
                            </div>


                            <!doctype html>
                            <?php
                            if ($this->session->userdata('userStus') == 1) {
                            ?>
                                <html class="no-js" lang="en">
                                <!--<![endif]-->



                                <body>

                                    <div id="right-panel" class="right-panel">

                                        <?php

                                        if ($record) {

                                            $Date1;
                                            $Date2;
                                            $LineNo;
                                            if ($LineNo == 1) {
                                                $LineName = "All";
                                            } elseif ($LineNo == 3) {
                                                $LineName = "Line# 1";
                                            } elseif ($LineNo == 4) {
                                                $LineName = "Line# 2";
                                            } elseif ($LineNo == 5) {
                                                $LineName = "Line# 3";
                                            } elseif ($LineNo == 6) {
                                                $LineName = "Line# 4";
                                            } elseif ($LineNo == 7) {
                                                $LineName = "Line# 5";
                                            } elseif ($LineNo == 8) {
                                                $LineName = "Line# 6";
                                            } elseif ($LineNo == 9) {
                                                $LineName = "Line# 7";
                                            } elseif ($LineNo == 10) {
                                                $LineName = "Line# 8";
                                            } elseif ($LineNo == 11) {
                                                $LineName = "Line# 9";
                                            } elseif ($LineNo == 16) {
                                                $LineName = "Line# 10";
                                            } elseif ($LineNo == 17) {
                                                $LineName = "Line# 11";
                                            } elseif ($LineNo == 18) {
                                                $LineName = "Line# 12";
                                            }

                                            $SYear = substr($Date1, 0, 4);
                                            $SMonth = substr($Date1, 5, 2);
                                            $SDay = substr($Date1, -2, 2);
                                            $EYear = substr($Date2, 0, 4);
                                            //echo "<br>";
                                            $EMonth = substr($Date2, 5, 2);
                                            //echo "<br>";
                                            $EDay = substr($Date2, -2, 2);
                                            $StartDateeee = $SYear . '-' . $SMonth . '-' . $SDay;
                                            $EndDateeee = $EYear . '-' . $EMonth . '-' . $EDay;
                                        ?>
                                            <form action="<?php echo base_url('MIS/AMB/getAllData'); ?>" method="POST">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-control-label">From Date:</label>
                                                            <div class="input-group">
                                                                <input class="form-control" type="Date" name="Date1" value="<?php echo $StartDateeee; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-control-label">To Date:</label>
                                                            <div class="input-group">
                                                                <input class="form-control" type="Date" name="Date2" value="<?php echo $EndDateeee; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class=" form-control-label">Line Name:</label>
                                                            <div class="input-group">
                                                                <select class="form-control" name="LineNo" style="width: 80%;border-radius: 5px;">
                                                                    <option value="<?php echo $LineNo; ?>"><?php echo $LineName; ?></option>
                                                                    <option value="1">All</option>
                                                                    <?php
                                                                    foreach ($line_data as $Key) {
                                                                    ?>
                                                                        <option value="<?php echo $Key['LineID']; ?>"><?php echo $Key['LineName']; ?></option>
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
                                                                <button type="submit" id="submit" name="submit" class="btn btn-primary "><i class=" fa fa-search"></i> Search</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        <?php
                                        } else {
                                            $Month = date('m');
                                            $Year = date('Y');
                                            $Day = date('d');
                                            $CurrentDate = $Year . '-' . $Month . '-' . $Day;
                                        ?>
                                            <form action="<?php echo base_url('MIS/AMB/getAllData'); ?>" method="POST">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-control-label">From Date:</label>
                                                            <div class="input-group">
                                                                <input class="form-control" type="Date" name="Date1" value="<?php echo $CurrentDate; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-control-label">To Date:</label>
                                                            <div class="input-group">
                                                                <input class="form-control" type="Date" name="Date2" value="<?php echo $CurrentDate; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class=" form-control-label">Line Name:</label>
                                                            <div class="input-group">
                                                                <select class="form-control" name="LineNo" required="required">
                                                                    <option value="1">All</option>
                                                                    <?php
                                                                    foreach ($line_data as $Key) {
                                                                    ?>
                                                                        <option value="<?php echo $Key['LineID']; ?>"><?php echo $Key['LineName']; ?></option>
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

                                                                <button type="submit" id="submit" name="submit" class="btn btn-primary "><i class=" fa fa-search"></i> Search</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if ($table == 1) {
                                            $data_points1 = array();
                                            $lineNames = array();
                                            foreach ($record as $key) {
                                                $point1 = array("label" => $key['LineName'], "y" => Round($key['Passed']));
                                                array_push($data_points1, $point1);
                                                array_push($lineNames, $key['LineName']);
                                            }
                                            $data_points2 = array();
                                            foreach ($record as $key1) {
                                                $point2 = array("label" => $key1['LineName'], "y" =>  Round($key1['Ppassed']));
                                                array_push($data_points2, $point2);
                                            }

                                            $data_points3 = array();
                                            foreach ($record as $key2) {
                                                $Pass = $key2['Passed'];
                                                $Checked = $key2['Checked'];
                                                if ($Pass == 0 or $Checked == 0) {
                                                    $RFT = 0;
                                                } else {
                                                    $RFT = $Pass / $Checked * 100;
                                                }
                                                $point3 = array("label" => $key2['LineName'], "y" =>  Round($RFT));
                                                array_push($data_points3, $point3);
                                            }
                                            $data_points4 = array();
                                            foreach ($record as $key3) {
                                                $PPass = $key3['Ppassed'];
                                                $PChecked = $key3['pchecked'];
                                                if ($PPass == 0 or $PChecked == 0) {
                                                    $PRFT = 0;
                                                } else {
                                                    $PRFT = $PPass / $PChecked * 100;
                                                }
                                                $point4 = array("label" => $key3['LineName'], "y" =>  Round($PRFT));
                                                array_push($data_points4, $point4);
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
                                                                borderWidth: 0
                                                            }
                                                        },
                                                        series: [{
                                                            color: "#33cccc",
                                                            name: 'Forming',
                                                            data: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
                                                        }, {
                                                            color: "#1a8cff",
                                                            name: 'Packing',
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
                                                    //   title:{

                                                    //   },
                                                    //    axisY:{

                                                    //      },
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
                                                    //   name: "Forming",

                                                    //         indexLabelPlacement: "top",
                                                    //        color:"#33cccc", 
                                                    //     dataPoints: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
                                                    //   },{
                                                    //    type: "column",
                                                    //         yValueFormatString: "#",
                                                    //        // indexLabel: "{y} ",
                                                    //  indexLabelFontSize: 18, 
                                                    //   name: "Packing",
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
                                                                borderWidth: 0
                                                            }
                                                        },
                                                        series: [{
                                                            color: "#33cccc",
                                                            name: 'Forming',
                                                            data: <?php echo json_encode($data_points3, JSON_NUMERIC_CHECK); ?>
                                                        }, {
                                                            color: "#1a8cff",
                                                            name: 'Packing',
                                                            data: <?php echo json_encode($data_points4, JSON_NUMERIC_CHECK); ?>
                                                        }]
                                                        // series: [
                                                        //     { 
                                                        //         name: "",
                                                        //         data: <?php echo json_encode($data_points2, JSON_NUMERIC_CHECK); ?>
                                                        //     }
                                                        // ]
                                                    });

                                                    // var chart = new CanvasJS.Chart("chartContainer2", {
                                                    //   animationEnabled: true,
                                                    //   title:{

                                                    //   },
                                                    //    axisY:{

                                                    //      },
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
                                                    //        // indexLabel: "{y}% ",
                                                    //  indexLabelFontSize: 18, 
                                                    //   name: "Forming",

                                                    //         indexLabelPlacement: "top",
                                                    //        color:"#33cccc",  
                                                    //     dataPoints: <?php echo json_encode($data_points3, JSON_NUMERIC_CHECK); ?>
                                                    //   },{
                                                    //    type: "column",
                                                    //         yValueFormatString: "#",
                                                    //        // indexLabel: "{y}% ",
                                                    //  indexLabelFontSize: 18, 
                                                    //   name: "Packing",

                                                    //         indexLabelPlacement: "top",
                                                    //        color:"#1a8cff", 
                                                    //     dataPoints: <?php echo json_encode($data_points4, JSON_NUMERIC_CHECK); ?>
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
                                            <div class="row">
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
                                                            <h3 class="mb-3">RFT</h3>
                                                            <div id="chartContainer2" style="height: 370px; width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div style="margin-top:40px" class="col-md-12 table-responsive">



                                                <div class="card">
                                                    <div id="panel-1" class="panel">
                                                        <div class="panel-hdr">
                                                            <h2>
                                                                <strong class="card-title">Airless Mini Ball Production </strong>
                                                            </h2>
                                                        </div>
                                                        <div class="card-body ab-c-btable-responsive">
                                                            <div class="panel-container show">
                                                                <div class="panel-content">
                                                                    <div class="demo-v-spacing" id="defaultTable">
                                                                        <table id="table" class="table table-bordered table-hover table-responsive table-striped w-100" style="width: 100%;">
                                                                            <thead class="bg-primary-200 text-light">
                                                                                <style type="text/css">
                                                                                    td {
                                                                                        text-align: center;
                                                                                    }
                                                                                </style>

                                                                                <tr class="bg-primary-200 text-light" style="color: #fff;">
                                                                                    <td></td>
                                                                                    <td colspan="3" style="text-align: center;">Forming</td>
                                                                                    <td colspan="3" style="text-align: center;">Packing </td>
                                                                                </tr>

                                                                                <tr style="font-weight: bold;">
                                                                                    <td style="text-align: left;">Line Name</td>
                                                                                    <td style="width:10%; ">Check</td>
                                                                                    <td style="width:10%;">Pass</td>
                                                                                    <td style="width:10%;">RFT</td>
                                                                                    <td style="width:10%;">Check</td>
                                                                                    <td style="width:10%;">Pass</td>
                                                                                    <td style="width:10%;">RFT</td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody style="border:1px black solid; ">

                                                                                <?php
                                                                                if ($record) {
                                                                                    foreach ($record as $key) {
                                                                                        $line = $key['LineName'];
                                                                                        $Pass = $key['Passed'];
                                                                                        $Checked = $key['Checked'];
                                                                                        if ($Pass == 0 or $Checked == 0) {
                                                                                            $RFT = 0;
                                                                                        } else {
                                                                                            $RFT = $Pass / $Checked * 100;
                                                                                        }
                                                                                        $PPass = $key['Ppassed'];
                                                                                        $PChecked = $key['pchecked'];
                                                                                        if ($PPass == 0 or $PChecked == 0) {
                                                                                            $PRFT = 0;
                                                                                        } else {
                                                                                            $PRFT = $PPass / $PChecked * 100;
                                                                                        }
                                                                                ?>
                                                                                        <tr>
                                                                                            <td style="width:10%; text-align: left;"><?php echo $line; ?></td>
                                                                                            <td style="width:10%; text-align: center;" class="Froming"><?php echo Round($Checked); ?></td>
                                                                                            <td style="width:10%; text-align: center;" class="Froming"><?php echo Round($Pass); ?></td>
                                                                                            <td style="width:10%; text-align: center;" class="Froming"><?php echo Round($RFT); ?>%</td>
                                                                                            <td style="width:10%; text-align: center;" class="packing"><?php echo Round($PChecked); ?></td>
                                                                                            <td style="width:10%; text-align: center;" class="packing"><?php echo Round($PPass); ?></td>
                                                                                            <td style="width:10%; text-align: center;" class="packing"><?php echo Round($PRFT); ?>%</td>
                                                                                        </tr>
                                                                                    <?php }
                                                                                } else { ?>
                                                                                    <tr>
                                                                                        <th colspan="5">
                                                                                            <center>No Record Available Yet!</center>
                                                                                        </th>
                                                                                    </tr>
                                                                                <?php }
                                                                                foreach ($Sum as $Data) {

                                                                                    $SStrength = $Data['Strength'];
                                                                                    $SPass = $Data['Passed'];
                                                                                    $SChecked = $Data['Checked'];
                                                                                    if ($SPass == 0 or $SChecked == 0) {
                                                                                        $SRFT = 0;
                                                                                    } else {
                                                                                        $SRFT = $SPass / $SChecked * 100;
                                                                                    }
                                                                                    $SPPass = $Data['Ppassed'];
                                                                                    $SPChecked = $Data['pchecked'];
                                                                                    if ($SPPass == 0 or $SPChecked == 0) {
                                                                                        $SPRFT = 0;
                                                                                    } else {
                                                                                        $SPRFT = $SPPass / $SPChecked * 100;
                                                                                    }

                                                                                    $SSAM = $Data['SAM'];
                                                                                    $SMints = $Data['Mints'];
                                                                                    if ($SStrength == 0 or $SSAM == 0 or $SMints == 0 or $SPass == 0) {
                                                                                        $SEfficiency = 0;
                                                                                    } else {
                                                                                        $SEfficiency = ($SPass * $SSAM) / ($SStrength * $SMints) * 100;
                                                                                    }
                                                                                }
                                                                                ?>
                                                                                <tr class="bg-primary text-light" style="text-align:center;  color:black;">
                                                                                    <td style="width:20%;">Total</td>
                                                                                    <td style="width:10%;"><?php echo Round($SChecked); ?></td>
                                                                                    <td style="width:10%;"><?php echo Round($SPass); ?></td>
                                                                                    <td style="width:10%;"><?php echo Round($SRFT); ?>%</td>
                                                                                    <td style="width:10%;"><?php echo Round($SPChecked); ?></td>
                                                                                    <td style="width:10%;"><?php echo Round($SPPass); ?></td>
                                                                                    <td style="width:10%;"><?php echo Round($SPRFT); ?>%</td>

                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php

                                        } else {
                                            $data_points1 = array();
                                            $hours = array();
                                            foreach ($record as $key) {
                                                $point1 = array("label" => $key['HourTime'], "y" => Round($key['Passed']));
                                                array_push($data_points1, $point1);
                                                array_push($hours, $key['HourTime']);
                                            }
                                            $data_points2 = array();
                                            foreach ($record as $key1) {
                                                $point2 = array("label" => $key1['HourTime'], "y" =>  Round($key1['Ppassed']));
                                                array_push($data_points2, $point2);
                                            }

                                            $data_points3 = array();
                                            foreach ($record as $key2) {
                                                $Pass = $key2['Passed'];
                                                $Checked = $key2['Checked'];
                                                if ($Pass == 0 or $Checked == 0) {
                                                    $RFT = 0;
                                                } else {
                                                    $RFT = $Pass / $Checked * 100;
                                                }
                                                $point3 = array("label" => $key2['HourTime'], "y" =>  Round($RFT));
                                                array_push($data_points3, $point3);
                                            }
                                            $data_points4 = array();
                                            foreach ($record as $key3) {
                                                $PPass = $key3['Ppassed'];
                                                $PChecked = $key3['pchecked'];
                                                if ($PPass == 0 or $PChecked == 0) {
                                                    $PRFT = 0;
                                                } else {
                                                    $PRFT = $PPass / $PChecked * 100;
                                                }
                                                $point4 = array("label" => $key3['HourTime'], "y" =>  Round($PRFT));
                                                array_push($data_points4, $point4);
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
                                                                borderWidth: 0
                                                            }
                                                        },
                                                        series: [{
                                                            color: "#33cccc",
                                                            name: 'Forming',
                                                            data: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
                                                        }, {
                                                            color: "#1a8cff",
                                                            name: 'Packing',
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
                                                    //   title:{

                                                    //   },
                                                    //    axisY:{

                                                    //      },
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
                                                    //   name: "Forming",

                                                    //         indexLabelPlacement: "top",
                                                    //        color:"#33cccc", 
                                                    //     dataPoints: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>
                                                    //   },{
                                                    //    type: "column",
                                                    //         yValueFormatString: "#",
                                                    //       //  indexLabel: "{y} ",
                                                    //  indexLabelFontSize: 18, 
                                                    //   name: "Packing",
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
                                                                borderWidth: 0
                                                            }
                                                        },
                                                        series: [{
                                                            color: "#33cccc",
                                                            name: 'Forming',
                                                            data: <?php echo json_encode($data_points3, JSON_NUMERIC_CHECK); ?>
                                                        }, {
                                                            color: "#1a8cff",
                                                            name: 'Packing',
                                                            data: <?php echo json_encode($data_points4, JSON_NUMERIC_CHECK); ?>
                                                        }]
                                                        // series: [
                                                        //     { 
                                                        //         name: "",
                                                        //         data: <?php echo json_encode($data_points2, JSON_NUMERIC_CHECK); ?>
                                                        //     }
                                                        // ]
                                                    });

                                                    // var chart = new CanvasJS.Chart("chartContainer2", {
                                                    //   animationEnabled: true,
                                                    //   title:{

                                                    //   },
                                                    //    axisY:{

                                                    //      },
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
                                                    //        // indexLabel: "{y}% ",
                                                    //  indexLabelFontSize: 18, 
                                                    //   name: "Forming",

                                                    //         indexLabelPlacement: "top",
                                                    //        color:"#33cccc",  
                                                    //     dataPoints: <?php echo json_encode($data_points3, JSON_NUMERIC_CHECK); ?>
                                                    //   },{
                                                    //    type: "column",
                                                    //         yValueFormatString: "#",
                                                    //       //  indexLabel: "{y}% ",
                                                    //  indexLabelFontSize: 18, 
                                                    //   name: "Packing",

                                                    //         indexLabelPlacement: "top",
                                                    //        color:"#1a8cff", 
                                                    //     dataPoints: <?php echo json_encode($data_points4, JSON_NUMERIC_CHECK); ?>
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
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h3 class="mb-3"> <?php
                                                                                if ($record) {
                                                                                    echo $LineName;
                                                                                }
                                                                                ?> Production</h3>
                                                            <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h3 class="mb-3"> <?php
                                                                                if ($record) {
                                                                                    echo $LineName;
                                                                                }
                                                                                ?> RFT</h3>
                                                            <div id="chartContainer2" style="height: 370px; width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div id="panel-1" class="panel">
                                                    <div class="card">
                                                        <div class="panel-hdr">

                                                            <div class="card-header">
                                                                <strong class="card-title"><?php
                                                                                            if ($record) {
                                                                                                echo $LineName;
                                                                                            }
                                                                                            ?> Production </strong>
                                                            </div>
                                                            <div class="card-body">
                                                                <table id="table" class="table table-bordered table-hover table-responsive table-striped w-100" style="width: 100%;">
                                                                    <thead class="bg-primary-200 text-light">
                                                                        <style type="text/css">
                                                                            td {
                                                                                text-align: center;
                                                                            }
                                                                        </style>

                                                                        <tr class="bg-primary-200 text-light" style="color: #fff;">
                                                                            <td></td>
                                                                            <td colspan="6" style="text-align: center; border-right: 1px #ffff solid;border-right: 1px #ffff solid;">Forming</td>
                                                                            <td colspan="3" style="text-align: center;">Packing </td>
                                                                        </tr>

                                                                        <tr style="font-weight: bold;">
                                                                            <td style="text-align: left;">Hour Name</td>
                                                                            <td style="width:10%; text-align: left;">Article</td>
                                                                            <td style="width:10%;">Checked</td>
                                                                            <td style="width:10%;">Passed</td>
                                                                            <td style="width:10%;">RFT</td>
                                                                            <td style="width:10%;">Strength</td>
                                                                            <td style="width:10%;">Efficiency</td>
                                                                            <td style="width:10%;">Checked</td>
                                                                            <td style="width:10%;">Passed</td>
                                                                            <td style="width:10%;">RFT</td>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody style="border:1px black solid; ">

                                                                        <?php

                                                                        if ($record) {
                                                                            foreach ($record as $key) {
                                                                                $line = $key['HourTime'];
                                                                                $ArtCode = $key['ArtCode'];
                                                                                $Strength = $key['Strength'];
                                                                                $Pass = $key['Passed'];
                                                                                $Checked = $key['Checked'];
                                                                                if ($Pass == 0 or $Checked == 0) {
                                                                                    $RFT = 0;
                                                                                } else {
                                                                                    $RFT = $Pass / $Checked * 100;
                                                                                }
                                                                                $PPass = $key['Ppassed'];
                                                                                $PChecked = $key['pchecked'];
                                                                                if ($PPass == 0 or $PChecked == 0) {
                                                                                    $PRFT = 0;
                                                                                } else {
                                                                                    $PRFT = $PPass / $PChecked * 100;
                                                                                }

                                                                                $SAM = $key['SAM'];
                                                                                $Mints = $key['Mints'];
                                                                                if ($Strength == 0 or $SAM == 0 or $Mints == 0 or $Pass == 0) {
                                                                                    $Efficiency = 0;
                                                                                } else {
                                                                                    $Efficiency = ($Pass * $SAM) / ($Strength * $Mints) * 100;
                                                                                }
                                                                        ?>
                                                                                <tr style="text-align:center; ">
                                                                                    <td style="width:20%; text-align: left;"><?php echo $line; ?></td>
                                                                                    <td style="width:10%; text-align: left;"><?php echo $ArtCode; ?></td>
                                                                                    <td style="width:10%;" class="Froming"><?php echo Round($Checked); ?></td>
                                                                                    <td style="width:10%;" class="Froming"><?php echo Round($Pass); ?></td>
                                                                                    <td style="width:10%;" class="Froming"><?php echo Round($RFT); ?>%</td>
                                                                                    <td style="width:10%;" class="Froming"><?php echo Round($Strength); ?></td>
                                                                                    <td style="width:10%;" class="Froming"><?php echo Round($Efficiency); ?>%</td>
                                                                                    <td style="width:10%;" class="packing"><?php echo Round($PChecked); ?></td>
                                                                                    <td style="width:10%;" class="packing"><?php echo Round($PPass); ?></td>
                                                                                    <td style="width:10%;" class="packing"><?php echo Round($PRFT); ?>%</td>
                                                                                </tr>
                                                                            <?php }
                                                                        } else { ?>
                                                                            <tr>
                                                                                <th colspan="10">
                                                                                    <center>No Record Available Yet!</center>
                                                                                </th>
                                                                            </tr>

                                                                        <?php }
                                                                        foreach ($Sum as $Data) {

                                                                            $SStrength = $Data['Strength'];
                                                                            $SPass = $Data['Passed'];
                                                                            $SChecked = $Data['Checked'];
                                                                            if ($SPass == 0 or $SChecked == 0) {
                                                                                $SRFT = 0;
                                                                            } else {
                                                                                $SRFT = $SPass / $SChecked * 100;
                                                                            }
                                                                            $SPPass = $Data['Ppassed'];
                                                                            $SPChecked = $Data['pchecked'];
                                                                            if ($SPPass == 0 or $SPChecked == 0) {
                                                                                $SPRFT = 0;
                                                                            } else {
                                                                                $SPRFT = $SPPass / $SPChecked * 100;
                                                                            }

                                                                            $SSAM = $Data['SAM'];
                                                                            $SMints = $Data['Mints'];
                                                                            if ($SStrength == 0 or $SSAM == 0 or $SMints == 0 or $SPass == 0) {
                                                                                $SEfficiency = 0;
                                                                            } else {
                                                                                $SEfficiency = ($SPass * $SSAM) / ($SStrength * $SMints) * 100;
                                                                            }
                                                                        }
                                                                        ?>
                                                                        <tr style="text-align:center;  color:black;">
                                                                            <td class="bg-primary text-light" style="width:20%;">Total</td>
                                                                            <td style="width:10%;"></td>
                                                                            <td style="width:10%;"><?php echo Round($SChecked); ?></td>
                                                                            <td style="width:10%;"><?php echo Round($SPass); ?></td>
                                                                            <td style="width:10%;"><?php echo Round($SRFT); ?>%</td>
                                                                            <td style="width:10%;"><?php echo Round($SStrength); ?></td>
                                                                            <td style="width:10%;"><?php echo Round($SEfficiency); ?>%</td>
                                                                            <td style="width:10%;"><?php echo Round($SPChecked); ?></td>
                                                                            <td style="width:10%;"><?php echo Round($SPPass); ?></td>
                                                                            <td style="width:10%;"><?php echo Round($SPRFT); ?>%</td>

                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                        </div>
                </div>
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

                </body>

                </html>

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
                    //   $(document).ready( function () {
                    //     $('#table').DataTable(
                    //     { 
                    //        dom: 'Bfrtip',
                    //         buttons: [
                    //             'copy',
                    //             {
                    //                 extend: 'excel',
                    //                 messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
                    //             },
                    //             {
                    //                 extend: 'pdf',
                    //                 messageBottom: null
                    //             },

                    //         ],
                    //      "ordering":false,
                    //       "pageLength":10,
                    //       "searching":false,
                    //       "LengthChange":true,
                    //       "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},


                    //     }


                    //       );
                    // } );
                </script>
            <?php
                            } else {
                                redirect('Welcome/index');
                            }
            ?>

            </div>
            </main>
        </div>
    </div>
    </div>
    </div>
<?php
}
?>
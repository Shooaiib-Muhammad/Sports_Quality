<?php

if (!$this->session->has_userdata('user_id')) {
    redirect('');
} else {
?>

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
                    <!-- 
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i> Dashboard</span>

                        </h1>
                    </div> -->

                    <style>
                        .highcharts-figure .chart-container {
                            width: 300px;
                            height: 50px;
                            /* display: flex; */
                        }

                        .highcharts-figure {
                            height: 250px;
                            display: flex;
                            flex-direction: column;
                            flex-wrap: wrap;
                        }

                        .highcharts-figure>* {
                            flex: 1 1 80px;
                        }

                        .highcharts-figure1 .chart-container1 {
                            width: 300px;
                            height: 50px;
                            /* display: flex; */
                        }

                        .highcharts-figure1 {
                            height: 250px;
                            display: flex;
                            flex-direction: column;
                            flex-wrap: wrap;
                        }

                        .highcharts-figure1>* {
                            flex: 1 1 80px;
                        }

                        .highcharts-figure2 .chart-container2 {
                            width: 300px;
                            height: 50px;
                            /* display: flex; */
                        }

                        .highcharts-figure2 {
                            height: 250px;
                            display: flex;
                            flex-direction: column;
                            flex-wrap: wrap;
                        }

                        .highcharts-figure2>* {
                            flex: 1 1 80px;
                        }

                        .highcharts-figure3 .chart-container3 {
                            width: 300px;
                            height: 50px;
                            /* display: flex; */
                        }

                        .highcharts-figure3 {
                            height: 250px;
                            display: flex;
                            flex-direction: column;
                            flex-wrap: wrap;
                        }

                        .highcharts-figure3>* {
                            flex: 1 1 80px;
                        }

                        .highcharts-figure4 .chart-container4 {
                            width: 300px;
                            height: 50px;
                            /* display: flex; */
                        }

                        .highcharts-figure4 {
                            height: 250px;
                            display: flex;
                            flex-direction: column;
                            flex-wrap: wrap;
                        }

                        .highcharts-figure4>* {
                            flex: 1 1 80px;
                        }
                    </style>
                    <script src="https://code.highcharts.com/highcharts.js"></script>
                    <script src="https://code.highcharts.com/modules/data.js"></script>
                    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
                    <script src="https://code.highcharts.com/modules/exporting.js"></script>
                    <script src="https://code.highcharts.com/modules/export-data.js"></script>
                    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                    <div class="row">
                        <div id="panel-3" class="panel">

                            <div class="panel-container show">
                                <div class="panel-content">

                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab_direction-1" role="tab">Production</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-2" role="tab">RFT</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-3" role="tab">Defects</a></li>
                                    </ul>
                                    <div class="tab-content p-3">
                                        <div class="tab-pane fade show active" id="tab_direction-1" role="tabpanel">

                                            <center>
                                                <div class="row">
                                                    <figure class="highcharts-figure">
                                                        <div id="container-speed0" class="chart-container"></div>

                                                    </figure>
                                                    <figure class="highcharts-figure">
                                                        <div id="container-speed" class="chart-container"></div>

                                                    </figure>
                                                    <figure class="highcharts-figure1">
                                                        <div id="container-speed1" class="chart-container1"></div>



                                                    </figure>
                                                    <figure class="highcharts-figure2">
                                                        <div id="container-speed2" class="chart-container2"></div>



                                                    </figure>
                                                    <figure class="highcharts-figure3">
                                                        <div id="container-speed3" class="chart-container3"></div>



                                                    </figure>
                                                    <figure class="highcharts-figure4">
                                                        <div id="container-speed4" class="chart-container4"></div>



                                                    </figure>
                                                    <figure class="highcharts-figure4">
                                                        <div id="container-speed5" class="chart-container4"></div>



                                                    </figure>
                                                </div>
                                            </center>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="AllPrd"></div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div id="hsprd"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div id="tmprd"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div id="msprd"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div id="ambprd"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div id="lfbprd"></div>
                                                </div>
                                            </div>


                                        </div>


                                        <div class="tab-pane fade" id="tab_direction-2" role="tabpanel">
                                            RFT
                                        </div>
                                        <div class="tab-pane fade" id="tab_direction-3" role="tabpanel">
                                            Defects
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>






                    </div>
            </div>
        </div>

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/highcharts-more.js"></script>
        <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>

        <script>
            var gaugeOptions = {
                chart: {
                    type: 'solidgauge'
                },

                title: null,

                pane: {
                    center: ['50%', '85%'],
                    size: '110%',
                    startAngle: -90,
                    endAngle: 90,
                    background: {
                        backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                        innerRadius: '60%',
                        outerRadius: '100%',
                        shape: 'arc'
                    }
                },

                exporting: {
                    enabled: false
                },

                tooltip: {
                    enabled: false
                },

                // the value axis
                yAxis: {
                    stops: [
                        [0.1, '#55BF3B'], // green
                        [0.5, '#DDDF0D'], // yellow
                        [0.9, '#DF5353'] // red
                    ],
                    lineWidth: 0,
                    tickWidth: 0,
                    minorTickInterval: null,
                    tickAmount: 2,
                    title: {
                        y: -70
                    },
                    labels: {
                        y: 16
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
                }
            };
            var gaugeOptions = {
                chart: {
                    type: 'solidgauge'
                },

                title: null,

                pane: {
                    center: ['50%', '85%'],
                    size: '110%',
                    startAngle: -90,
                    endAngle: 90,
                    background: {
                        backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                        innerRadius: '60%',
                        outerRadius: '100%',
                        shape: 'arc'
                    }
                },

                exporting: {
                    enabled: false
                },

                tooltip: {
                    enabled: false
                },

                // the value axis
                yAxis: {
                    stops: [
                        [0.1, '#55BF3B'], // green
                        [0.5, '#DDDF0D'], // yellow
                        [0.9, '#DF5353'] // red
                    ],
                    lineWidth: 0,
                    tickWidth: 0,
                    minorTickInterval: null,
                    tickAmount: 2,
                    title: {
                        y: -70
                    },
                    labels: {
                        y: 16
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
                }
            };
            // The speed gauge
            var chartSpeed = Highcharts.chart('container-speed0', Highcharts.merge(gaugeOptions, {
                yAxis: {
                    min: 0,
                    max: 200,
                    title: {
                        text: 'Hand Stitched Balls'
                    }
                },

                credits: {
                    enabled: false
                },

                series: [{
                    name: 'Hand Stitched Balls',
                    data: [80],
                    dataLabels: {
                        format: '<div style="text-align:center">' +
                            '<span style="font-size:25px">{y}</span><br/>' +
                            '<span style="font-size:12px;opacity:5">Produced Quantity</span>' +
                            '</div>'
                    },
                    tooltip: {
                        valueSuffix: ' km/h'
                    }
                }]

            }));
            // The speed gauge

            // The speed gauge
            var chartSpeed = Highcharts.chart('container-speed', Highcharts.merge(gaugeOptions, {
                yAxis: {
                    min: 0,
                    max: 200,
                    title: {
                        text: 'Competition Balls'
                    }
                },

                credits: {
                    enabled: false
                },

                series: [{
                    name: 'Competiton Balls',
                    data: [80],
                    dataLabels: {
                        format: '<div style="text-align:center">' +
                            '<span style="font-size:25px">{y}</span><br/>' +
                            '<span style="font-size:12px;opacity:5">Produced Quantity</span>' +
                            '</div>'
                    },
                    tooltip: {
                        valueSuffix: ' km/h'
                    }
                }]

            }));
            // The speed gauge
            var chartSpeed = Highcharts.chart('container-speed1', Highcharts.merge(gaugeOptions, {
                yAxis: {
                    min: 0,
                    max: 200,
                    title: {
                        text: 'Urban Balls'
                    }
                },

                credits: {
                    enabled: false
                },

                series: [{
                    name: 'Urban Balls',
                    data: [80],
                    dataLabels: {
                        format: '<div style="text-align:center">' +
                            '<span style="font-size:25px">{y}</span><br/>' +
                            '<span style="font-size:12px;opacity:5">Produced Quantity</span>' +
                            '</div>'
                    },
                    tooltip: {
                        valueSuffix: ' km/h'
                    }
                }]

            }));
            var chartSpeed = Highcharts.chart('container-speed2', Highcharts.merge(gaugeOptions, {
                yAxis: {
                    min: 0,
                    max: 200,
                    title: {
                        text: 'Finale Balls'
                    }
                },

                credits: {
                    enabled: false
                },

                series: [{
                    name: 'Competition Balls',
                    data: [80],
                    dataLabels: {
                        format: '<div style="text-align:center">' +
                            '<span style="font-size:25px">{y}</span><br/>' +
                            '<span style="font-size:12px;opacity:5">Produced Quantity</span>' +
                            '</div>'
                    },
                    tooltip: {
                        valueSuffix: ' km/h'
                    }
                }]

            }));
            var gaugeOptions = {
                chart: {
                    type: 'solidgauge'
                },

                title: null,

                pane: {
                    center: ['50%', '85%'],
                    size: '110%',
                    startAngle: -90,
                    endAngle: 90,
                    background: {
                        backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                        innerRadius: '60%',
                        outerRadius: '100%',
                        shape: 'arc'
                    }
                },

                exporting: {
                    enabled: false
                },

                tooltip: {
                    enabled: false
                },

                // the value axis
                yAxis: {
                    stops: [
                        [0.1, '#55BF3B'], // green
                        [0.5, '#DDDF0D'], // yellow
                        [0.9, '#DF5353'] // red
                    ],
                    lineWidth: 0,
                    tickWidth: 0,
                    minorTickInterval: null,
                    tickAmount: 2,
                    title: {
                        y: -70
                    },
                    labels: {
                        y: 16
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
                }
            };

            // The speed gauge
            var chartSpeed = Highcharts.chart('container-speed3', Highcharts.merge(gaugeOptions, {
                yAxis: {
                    min: 0,
                    max: 200,
                    title: {
                        text: 'Machine Stitched Balls'
                    }
                },

                credits: {
                    enabled: false
                },

                series: [{
                    name: 'Machine Stitched Balls',
                    data: [80],
                    dataLabels: {
                        format: '<div style="text-align:center">' +
                            '<span style="font-size:25px">{y}</span><br/>' +
                            '<span style="font-size:12px;opacity:5">Produced Quantity</span>' +
                            '</div>'
                    },
                    tooltip: {
                        valueSuffix: ' km/h'
                    }
                }]

            }));
            var gaugeOptions = {
                chart: {
                    type: 'solidgauge'
                },

                title: null,

                pane: {
                    center: ['50%', '85%'],
                    size: '110%',
                    startAngle: -90,
                    endAngle: 90,
                    background: {
                        backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                        innerRadius: '60%',
                        outerRadius: '100%',
                        shape: 'arc'
                    }
                },

                exporting: {
                    enabled: false
                },

                tooltip: {
                    enabled: false
                },

                // the value axis
                yAxis: {
                    stops: [
                        [0.1, '#55BF3B'], // green
                        [0.5, '#DDDF0D'], // yellow
                        [0.9, '#DF5353'] // red
                    ],
                    lineWidth: 0,
                    tickWidth: 0,
                    minorTickInterval: null,
                    tickAmount: 2,
                    title: {
                        y: -70
                    },
                    labels: {
                        y: 16
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
                }
            };

            // The speed gauge
            var chartSpeed = Highcharts.chart('container-speed4', Highcharts.merge(gaugeOptions, {
                yAxis: {
                    min: 0,
                    max: 200,
                    title: {
                        text: 'Airless Mini Balls'
                    }
                },

                credits: {
                    enabled: false
                },

                series: [{
                    name: 'Airless Mini Balls',
                    data: [80],
                    dataLabels: {
                        format: '<div style="text-align:center">' +
                            '<span style="font-size:25px">{y}</span><br/>' +
                            '<span style="font-size:12px;opacity:5">Produced Quantity</span>' +
                            '</div>'
                    },
                    tooltip: {
                        valueSuffix: ' km/h'
                    }
                }]

            }));
            var gaugeOptions = {
                chart: {
                    type: 'solidgauge'
                },

                title: null,

                pane: {
                    center: ['50%', '85%'],
                    size: '110%',
                    startAngle: -90,
                    endAngle: 90,
                    background: {
                        backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                        innerRadius: '60%',
                        outerRadius: '100%',
                        shape: 'arc'
                    }
                },

                exporting: {
                    enabled: false
                },

                tooltip: {
                    enabled: false
                },

                // the value axis
                yAxis: {
                    stops: [
                        [0.1, '#55BF3B'], // green
                        [0.5, '#DDDF0D'], // yellow
                        [0.9, '#DF5353'] // red
                    ],
                    lineWidth: 0,
                    tickWidth: 0,
                    minorTickInterval: null,
                    tickAmount: 2,
                    title: {
                        y: -70
                    },
                    labels: {
                        y: 16
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
                }
            };

            // The speed gauge
            var chartSpeed = Highcharts.chart('container-speed5', Highcharts.merge(gaugeOptions, {
                yAxis: {
                    min: 0,
                    max: 200,
                    title: {
                        text: 'Laminated Balls'
                    }
                },

                credits: {
                    enabled: false
                },

                series: [{
                    name: 'Laminated Ballss',
                    data: [80],
                    dataLabels: {
                        format: '<div style="text-align:center">' +
                            '<span style="font-size:25px">{y}</span><br/>' +
                            '<span style="font-size:12px;opacity:5">Produced Quantity</span>' +
                            '</div>'
                    },
                    tooltip: {
                        valueSuffix: ' km/h'
                    }
                }]

            }));
            Highcharts.chart('hsprd', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Hand Stitched Balls (B34001)'
                },
                xAxis: {
                    type: 'category',
                    labels: {
                        rotation: -45,
                        style: {
                            fontSize: '13px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Total Produced'
                    }
                },
                legend: {
                    enabled: false
                },
                series: [{
                    name: 'Population',
                    colorByPoint: true,
                    data: [
                        ['Shanghai', 24.2],
                        ['Beijing', 20.8],
                        ['Karachi', 14.9],
                        ['Shenzhen', 13.7]
                    ]
                }]
            });
            Highcharts.chart('tmprd', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Thermo Bounded Balls (B34002,B34003,B34004)'
                },
                xAxis: {
                    type: 'category',
                    labels: {
                        rotation: -45,
                        style: {
                            fontSize: '13px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Total Produced'
                    }
                },
                legend: {
                    enabled: false
                },
                tooltip: {
                    pointFormat: 'Population in 2017: <b>{point.y:.1f} millions</b>'
                },
                series: [{
                    name: 'Produced',
                    colorByPoint: true,
                    data: [
                        ['Shanghai', 24.2],
                        ['Beijing', 20.8],
                        ['Karachi', 14.9],
                        ['Shenzhen', 13.7]
                    ]
                }]
            });
            Highcharts.chart('msprd', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Machine Stitched Balls (B34005)'
                },
                xAxis: {
                    type: 'category',
                    labels: {
                        rotation: -45,
                        style: {
                            fontSize: '13px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Total Produced'
                    }
                },
                legend: {
                    enabled: false
                },
                tooltip: {
                    pointFormat: 'Population in 2017: <b>{point.y:.1f} millions</b>'
                },
                series: [{
                    name: 'Population',
                    colorByPoint: true,
                    data: [
                        ['Shanghai', 24.2],
                        ['Beijing', 20.8],
                        ['Karachi', 14.9],
                        ['Shenzhen', 13.7],
                        ['Guangzhou', 13.1]
                    ]
                }]
            });
            Highcharts.chart('ambprd', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Airless Mini Balls (B34006)'
                },
                xAxis: {
                    type: 'category',
                    labels: {
                        rotation: -45,
                        style: {
                            fontSize: '13px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Total Produced'
                    }
                },
                legend: {
                    enabled: false
                },
                tooltip: {
                    pointFormat: 'Population in 2017: <b>{point.y:.1f} millions</b>'
                },
                series: [{
                    name: 'Population',
                    colorByPoint: true,
                    data: [
                        ['Shanghai', 24.2],
                        ['Beijing', 20.8],
                        ['Karachi', 14.9],
                        ['Shenzhen', 13.7]
                    ]
                }]
            });
            Highcharts.chart('lfbprd', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Laminated Balls (B34007)'
                },
                xAxis: {
                    type: 'category',
                    labels: {
                        rotation: -45,
                        style: {
                            fontSize: '13px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Total Produced'
                    }
                },
                legend: {
                    enabled: false
                },
                tooltip: {
                    pointFormat: 'Population in 2017: <b>{point.y:.1f} millions</b>'
                },
                series: [{
                    name: 'Population',
                    colorByPoint: true,
                    data: [
                        ['Shanghai', 24.2],
                        ['Beijing', 20.8],
                        ['Karachi', 14.9],
                        ['Shenzhen', 13.7]
                    ]
                }]
            });

            Highcharts.chart('AllPrd', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Today Production'
                },

                accessibility: {
                    announceNewData: {
                        enabled: true
                    }
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: 'Total Produced'
                    }

                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.1f}%'
                        }
                    }
                },

                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                },

                series: [{
                    name: "Browsers",
                    colorByPoint: true,
                    data: [{
                            name: "Hand Stitch Balls",
                            y: 62.74,
                            drilldown: "HS"
                        },
                        {
                            name: "Machine Stitched Balls",
                            y: 10.57,
                            drilldown: "MS"
                        },
                        {
                            name: "Competition Balls",
                            y: 7.23,
                            drilldown: "CB"
                        },
                        {
                            name: "Urban Balls",
                            y: 5.58,
                            drilldown: "UB"
                        },
                        {
                            name: "Finale Balls",
                            y: 4.02,
                            drilldown: "FB"
                        },
                        {
                            name: "Air Less Mini Balls",
                            y: 1.92,
                            drilldown: "AMB"
                        },
                        {
                            name: "Laminated Balls",
                            y: 7.62,
                            drilldown: "LFB"
                        }
                    ]
                }],
                drilldown: {
                    series: [{
                            name: "HS",
                            id: "HS",
                            data: [
                                [
                                    "v65.0",
                                    0.1
                                ],
                                [
                                    "v64.0",
                                    1.3
                                ],
                                [
                                    "v63.0",
                                    53.02
                                ],
                                [
                                    "v62.0",
                                    1.4
                                ],
                                [
                                    "v61.0",
                                    0.88
                                ],
                                [
                                    "v60.0",
                                    0.56
                                ],
                                [
                                    "v59.0",
                                    0.45
                                ],
                                [
                                    "v58.0",
                                    0.49
                                ],
                                [
                                    "v57.0",
                                    0.32
                                ],
                                [
                                    "v56.0",
                                    0.29
                                ],
                                [
                                    "v55.0",
                                    0.79
                                ],
                                [
                                    "v54.0",
                                    0.18
                                ],
                                [
                                    "v51.0",
                                    0.13
                                ],
                                [
                                    "v49.0",
                                    2.16
                                ],
                                [
                                    "v48.0",
                                    0.13
                                ],
                                [
                                    "v47.0",
                                    0.11
                                ],
                                [
                                    "v43.0",
                                    0.17
                                ],
                                [
                                    "v29.0",
                                    0.26
                                ]
                            ]
                        },
                        {
                            name: "MS",
                            id: "MS",
                            data: [
                                [
                                    "v58.0",
                                    1.02
                                ],
                                [
                                    "v57.0",
                                    7.36
                                ],
                                [
                                    "v56.0",
                                    0.35
                                ],
                                [
                                    "v55.0",
                                    0.11
                                ],
                                [
                                    "v54.0",
                                    0.1
                                ],
                                [
                                    "v52.0",
                                    0.95
                                ],
                                [
                                    "v51.0",
                                    0.15
                                ],
                                [
                                    "v50.0",
                                    0.1
                                ],
                                [
                                    "v48.0",
                                    0.31
                                ],
                                [
                                    "v47.0",
                                    0.12
                                ]
                            ]
                        },
                        {
                            name: "CB",
                            id: "CB",
                            data: [
                                [
                                    "v11.0",
                                    6.2
                                ],
                                [
                                    "v10.0",
                                    0.29
                                ],
                                [
                                    "v9.0",
                                    0.27
                                ],
                                [
                                    "v8.0",
                                    0.47
                                ]
                            ]
                        },
                        {
                            name: "UB",
                            id: "UB",
                            data: [
                                [
                                    "v11.0",
                                    3.39
                                ],
                                [
                                    "v10.1",
                                    0.96
                                ],
                                [
                                    "v10.0",
                                    0.36
                                ],
                                [
                                    "v9.1",
                                    0.54
                                ],
                                [
                                    "v9.0",
                                    0.13
                                ],
                                [
                                    "v5.1",
                                    0.2
                                ]
                            ]
                        },
                        {
                            name: "FB",
                            id: "FB",
                            data: [
                                [
                                    "v16",
                                    2.6
                                ],
                                [
                                    "v15",
                                    0.92
                                ],
                                [
                                    "v14",
                                    0.4
                                ],
                                [
                                    "v13",
                                    0.1
                                ]
                            ]
                        },
                        {
                            name: "AMB",
                            id: "AMB",
                            data: [
                                [
                                    "v50.0",
                                    0.96
                                ],
                                [
                                    "v49.0",
                                    0.82
                                ],
                                [
                                    "v12.1",
                                    0.14
                                ]
                            ]
                        },
                        {
                            name: "LFB",
                            id: "LFB",
                            data: [
                                [
                                    "v50.0",
                                    0.96
                                ],
                                [
                                    "v49.0",
                                    0.82
                                ],
                                [
                                    "v12.1",
                                    0.14
                                ]
                            ]
                        }
                    ]
                }
            });
        </script>
        <script src="<?php echo base_url(); ?>/assets/js//jquery.min.js" type="text/javascript">
        </script>
        <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
        <script src="js/statistics/sparkline/sparkline.bundle.js"></script>
        <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
        <!-- BEGIN Page Footer -->
        <footer class="page-footer" role="contentinfo">
            <div class="d-flex align-items-center flex-1 text-muted">
                <span class="hidden-md-down fw-700">2021 © Forward Sports by&nbsp;IT Dept Forward Sports</span>
            </div>
            <div>

            </div>
        </footer>
        <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>



        <!-- END Page Footer -->
        <!-- BEGIN Shortcuts -->
        <?php $this->load->view('btomfooter'); ?>
    <?php
} ?>
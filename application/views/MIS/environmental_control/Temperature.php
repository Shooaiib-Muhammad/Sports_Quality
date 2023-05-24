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
                                <li class="breadcrumb-item">Tem Humidity</li>


                                <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                            </ol>
                            <div class="subheader">
                                <h1 class="subheader-title">
                                    <i class='subheader-icon fal fa-chart-area'></i>Tem Humidty</span>

                                </h1>
                            </div>
                            <?php if ($this->session->userdata('userStus') == 1) { ?>


                                <body>


                                    <div id="right-panel" class="right-panel">

                                        <style>



                                        </style>
                                        <link href="<?php link_file(
                                                        'assets/qa_assets/main.css'
                                                    ); ?>" rel="stylesheet">





                                        <?php
                                        $Month = date('m');
                                        $Year = date('Y');
                                        $Day = date('d');
                                        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
                                        ?>


                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title"><b>Date Filteration</b></h5>
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


                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <label class=" form-control-label"></label>
                                                            <div style="margin-top:18px" class="input-group">

                                                                <button type="submit" id="submit" name="submit" onclick="MainFunction()" class="btn btn-success btn-block" style="border-radius: 15px;"><i class=" fa fa-search"></i> Search</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <center><h1 style="color:firebrick">Hall Wise Temperature Details</h1></center>


                                        <div class="card">
                                        
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div id="container3"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="container4"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div id="container5"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="container6"></div>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                        <br>
                                        <center><h1 style="color:firebrick">Hall Wise Humidity Details</h1></center>

                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div id="humidity1"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="Humidity2"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div id="humidity3"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="humidity4"></div>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>


                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div id="container7"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="container8"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div id="container9"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="container10"></div>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>







                                        <script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
                                        <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
                                        <script type="text/javascript">
                                            /* Activate smart panels */
                                            $('#js-page-content').smartPanel();
                                        </script>

                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                                        <script src="https://code.highcharts.com/highcharts.js"></script>
                                        <script src="https://code.highcharts.com/highcharts-more.js"></script>


                                        <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>





                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js" integrity="sha512-gtII6Z4fZyONX9GBrF28JMpodY4vIOI0lBjAtN/mcK7Pz19Mu1HHIRvXH6bmdChteGpEccxZxI0qxXl9anY60w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

                                        <script>
                                            window.onload = function() {

                                                let date_ob = new Date();

                                                // adjust 0 before single digit date
                                                let date = ("0" + date_ob.getDate()).slice(-2);

                                                // current month
                                                let month = ("0" + (date_ob.getMonth() + 1)).slice(-2);

                                                // current year
                                                let year = date_ob.getFullYear();

                                                // current hours
                                                let hours = date_ob.getHours();
                                                console.log("hours", hours)

                                                // current minutes
                                                let minutes = (date_ob.getMinutes() < 10 ? '0' : '') + date_ob.getMinutes();

                                                // current seconds
                                                let seconds = date_ob.getSeconds();
                                                let entrYdate = year + "-" + month + "-" + date + " " + hours + ":" + minutes + ":" + "00"
                                                $.ajax({

                                                    url: "<?php echo base_url('/MIS/TemHumidityController/getData'); ?>",
                                                    method: "POST",
                                                    data: {
                                                        "entrYdate": entrYdate,

                                                    },
                                                    success: function(data) {


                                                        console.log("load table data", data);

                                                    }
                                                })


                                            }
                                        </script>
                                        <script>
                                            function generateDataLFB(data1) {


                                                var ret = {}

                                                date = []
                                                strttemp = []
                                                Endtemp = []
                                                temp = []
                                                strtcircum = []
                                                Endcircum = []
                                                circum = []
                                                len = data1.length;


                                                for (var i = 0; i < data1.length; i++) {
                                                    // console.log(data1[i]);
                                                    date.push(data1[i]['EntryDate'])
                                                    strttemp.push(parseInt(data1[i]['TSRange']))
                                                    Endtemp.push(parseInt(data1[i]['TERange']))
                                                    temp.push(parseInt(data1[i]['Temperature']))
                                                    // let circumfer = parseInt(data1[i]['Circum1'])
                                                    // let circumfer1 = parseInt(data1[i]['Circum2'])
                                                    // let circumfer2 = parseInt(data1[i]['Circum3'])
                                                    // let circumfer3 = (circumfer + circumfer1 + circumfer2) / 3

                                                    // strtcircum.push(parseInt(data1[i]['StrtRange']))
                                                    // Endcircum.push(parseInt(data1[i]['EndRange']))
                                                    // circum.push(parseInt(circumfer3))

                                                }

                                                return [date, strttemp, Endtemp, temp];
                                            }

                                            function generateDataHumdity(data1) {


                                                var ret = {}

                                                date = []
                                                strthumidity = []
                                                Endhumidity = []
                                                humidity = []
                                                strtcircum = []
                                                Endcircum = []
                                                circum = []
                                                len = data1.length;


                                                for (var i = 0; i < data1.length; i++) {
                                                    // console.log(data1[i]);
                                                    date.push(data1[i]['Date'])
                                                    strthumidity.push(parseInt(data1[i]['HSRange']))
                                                    Endhumidity.push(parseInt(data1[i]['HERange']))
                                                    humidity.push(parseInt(data1[i]['Humdity']))
                                                    // let circumfer = parseInt(data1[i]['Circum1'])
                                                    // let circumfer1 = parseInt(data1[i]['Circum2'])
                                                    // let circumfer2 = parseInt(data1[i]['Circum3'])
                                                    // let circumfer3 = (circumfer + circumfer1 + circumfer2) / 3

                                                    // strtcircum.push(parseInt(data1[i]['StrtRange']))
                                                    // Endcircum.push(parseInt(data1[i]['EndRange']))
                                                    // circum.push(parseInt(circumfer3))

                                                }

                                                return [date, strttemp, Endtemp, temp];
                                            }

                                            function MainFunction() {

                                                // alert("heloo");return;
                                                // var Sdate1 = $('#SDate1').val();
                                                // var EDate1 = $('#EDate1').val();
                                                // //var deptId = $("#dept]").val()
                                                // alert(Edate1);return;
                                                data = {
                                                    "Sdate": $('#SDate').val(),
                                                    "EDate": $('#EDate').val(),

                                                }
                                                let url = "<?php echo base_url('MIS/TemperatureController/LFB/') ?>";
                                                let url1 = "<?php echo base_url('MIS/TemperatureController/Humidity/') ?>";
                                                // alert(url)
                                                // return;
                                                //var section = $("#sectionID").val()
                                                //alert(url);
                                                //console.log(sec alert(deptId);tion ? "selected" : "not selected")
                                                $.post(url, data, function(data) {
                                                    //articles = JSON.parse(data)
                                                    // console.log(articles);
                                                    // console.log(data);return;

                                                    //location.reload();
                                                    //   getemployeedata()
                                                    var tmData = [];
                                                    var ambData = [];
                                                    var msData1 = [];
                                                    var msData2 = [];
                                                    data.filter(item => {
                                                        if (item['Name'] == 'TM Hall') {

                                                            tmData.push(item);
                                                        }

                                                        if (item['Name'] == 'AMB Hall') {
                                                            ambData.push(item);
                                                        }
                                                        if (item['Name'] == 'MS Hall-1') {
                                                            msData1.push(item);
                                                        }
                                                        if (item['Name'] == 'MS Hall-2') {
                                                            msData2.push(item);
                                                        }

                                                    })


                                                    var seriesdate1 = generateDataLFB(tmData)
                                                    var seriesdate2 = generateDataLFB(ambData)
                                                    var seriesdate3 = generateDataLFB(msData1)
                                                    var seriesdate4 = generateDataLFB(msData2)
                                                    // console.log("tm", tmData);
                                                    // console.log("amb", ambData);return;
                                                    // console.log(seriesdate[6]);
                                                    Highcharts.chart('container3', {

                                                        title: {
                                                            text: 'TM Hall Temperature Graph'
                                                        },

                                                        yAxis: {
                                                            title: {
                                                                text: 'Temperature'
                                                            }
                                                        },

                                                        xAxis: {
                                                            title: {
                                                                text: 'date'
                                                            },
                                                            categories: seriesdate1[0]
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
                                                                name: 'Temerature Start',
                                                                data: seriesdate1[1]
                                                            }, {
                                                                name: 'Temerature End',
                                                                data: seriesdate1[2]
                                                            },
                                                            {
                                                                name: 'Temerature',
                                                                color: 'red',
                                                                data: seriesdate1[3]
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
                                                    Highcharts.chart('container4', {

                                                        title: {
                                                            text: 'AMB Hall Temperature Graph'
                                                        },

                                                        yAxis: {
                                                            title: {
                                                                text: 'Temperature'
                                                            }
                                                        },

                                                        xAxis: {
                                                            title: {
                                                                text: 'date'
                                                            },
                                                            categories: seriesdate2[0]
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
                                                                name: 'Temerature Start',
                                                                data: seriesdate2[1]
                                                            }, {
                                                                name: 'Temerature End',
                                                                data: seriesdate2[2]
                                                            },
                                                            {
                                                                name: 'Temerature',
                                                                color: 'red',
                                                                data: seriesdate2[3]
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
                                                    Highcharts.chart('container5', {

                                                        title: {
                                                            text: 'MS Hall-1 Temperature Graph'
                                                        },

                                                        yAxis: {
                                                            title: {
                                                                text: 'Temperature'
                                                            }
                                                        },

                                                        xAxis: {
                                                            title: {
                                                                text: 'date'
                                                            },
                                                            categories: seriesdate3[0]
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
                                                                name: 'Temerature Start',
                                                                data: seriesdate3[1]
                                                            }, {
                                                                name: 'Temerature End',
                                                                data: seriesdate3[2]
                                                            },
                                                            {
                                                                name: 'Temerature',
                                                                color: 'red',
                                                                data: seriesdate3[3]
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

                                                    Highcharts.chart('container6', {

                                                        title: {
                                                            text: 'MS Hall-2 Temperature Graph'
                                                        },

                                                        yAxis: {
                                                            title: {
                                                                text: 'Temperature'
                                                            }
                                                        },

                                                        xAxis: {
                                                            title: {
                                                                text: 'date'
                                                            },
                                                            categories: seriesdate4[0]
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
                                                                name: 'Temerature Start',
                                                                data: seriesdate4[1]
                                                            }, {
                                                                name: 'Temerature End',
                                                                data: seriesdate4[2]
                                                            },
                                                            {
                                                                name: 'Temerature',
                                                                color: 'red',
                                                                data: seriesdate4[3]
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








                                                });


                                                $.post(url1, data, function(data) {
                                                    //articles = JSON.parse(data)
                                                    // console.log(articles);
                                                    // console.log(data);return;

                                                    //location.reload();
                                                    //   getemployeedata()
                                                    var tmData1 = [];
                                                    var ambData1 = [];
                                                    var msData11 = [];
                                                    var msData22 = [];
                                                    data.filter(item => {
                                                        if (item['Name'] == 'TM Hall') {

                                                            tmData1.push(item);
                                                        }

                                                        if (item['Name'] == 'AMB Hall') {
                                                            ambData1.push(item);
                                                        }
                                                        if (item['Name'] == 'MS Hall-1') {
                                                            msData11.push(item);
                                                        }
                                                        if (item['Name'] == 'MS Hall-2') {
                                                            msData22.push(item);
                                                        }

                                                    })


                                                    var humiditydata1 = generateDataHumdity(tmData1)
                                                    var humiditydata2 = generateDataHumdity(ambData1)
                                                    var humiditydata3 = generateDataHumdity(msData11)
                                                    var humiditydata4 = generateDataHumdity(msData22)
                                                    // console.log("tm", tmData);
                                                    // console.log("amb", ambData);return;
                                                    // console.log(seriesdate[6]);
                                                    Highcharts.chart('humidity1', {

                                                        title: {
                                                            text: 'TM Hall Humidity Graph'
                                                        },

                                                        yAxis: {
                                                            title: {
                                                                text: 'Humidity'
                                                            }
                                                        },

                                                        xAxis: {
                                                            title: {
                                                                text: 'date'
                                                            },
                                                            categories: humiditydata1[0]
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
                                                                name: 'Humidity Start',
                                                                data: humiditydata1[1]
                                                            }, {
                                                                name: 'Humidity End',
                                                                data: humiditydata1[2]
                                                            },
                                                            {
                                                                name: 'Humidity',
                                                                color: 'red',
                                                                data: humiditydata1[3]
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
                                                    Highcharts.chart('Humidity2', {

                                                        title: {
                                                            text: 'AMB Hall Humidity Graph'
                                                        },

                                                        yAxis: {
                                                            title: {
                                                                text: 'Humidity'
                                                            }
                                                        },

                                                        xAxis: {
                                                            title: {
                                                                text: 'date'
                                                            },
                                                            categories: humiditydata2[0]
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
                                                                name: 'Humidity Start',
                                                                data: humiditydata2[1]
                                                            }, {
                                                                name: 'Humidity End',
                                                                data: humiditydata2[2]
                                                            },
                                                            {
                                                                name: 'Humidity',
                                                                color: 'red',
                                                                data: humiditydata2[3]
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
                                                    Highcharts.chart('humidity3', {

                                                        title: {
                                                            text: 'MS Hall-1 Humidity Graph'
                                                        },

                                                        yAxis: {
                                                            title: {
                                                                text: 'Humidity'
                                                            }
                                                        },

                                                        xAxis: {
                                                            title: {
                                                                text: 'date'
                                                            },
                                                            categories: humiditydata3[0]
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
                                                                name: 'Humidity Start',
                                                                data: humiditydata3[1]
                                                            }, {
                                                                name: 'Humidity End',
                                                                data: humiditydata3[2]
                                                            },
                                                            {
                                                                name: 'Humidity',
                                                                color: 'red',
                                                                data: humiditydata3[3]
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

                                                    Highcharts.chart('humidity4', {

                                                        title: {
                                                            text: 'MS Hall-2 Humidity Graph'
                                                        },

                                                        yAxis: {
                                                            title: {
                                                                text: 'Humidity'
                                                            }
                                                        },

                                                        xAxis: {
                                                            title: {
                                                                text: 'date'
                                                            },
                                                            categories: humiditydata4[0]
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
                                                                name: 'Humidity Start',
                                                                data: humiditydata4[1]
                                                            }, {
                                                                name: 'Humidity End',
                                                                data: humiditydata4[2]
                                                            },
                                                            {
                                                                name: 'Humidity',
                                                                color: 'red',
                                                                data: humiditydata4[3]
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








                                                });





                                            }


                                            window.onload = function() {
                                                MainFunction();


                                            }




                                            function fillReport(data, group) {


                                                $('#content').html(data);
                                                $('#forming').dataTable(getOptions(group))



                                            }

                                            function getOptions(group) {
                                                var options = {
                                                    dom: 'Bfrtip',
                                                    buttons: [
                                                        'copy',
                                                        {
                                                            extend: 'excel',
                                                            messageTop: 'The information in this table is copyright Forward Sports.'
                                                        },
                                                        {
                                                            extend: 'pdf',
                                                            messageBottom: null
                                                        }
                                                    ],
                                                    "ordering": false,
                                                    "pageLength": 10,
                                                    "searching": false,
                                                    "LengthChange": true,
                                                    "oLanguage": {
                                                        "sEmptyTable": "Data Is Not Available Yet!"
                                                    },

                                                }




                                                return options
                                            }
                                        </script>

                                    </div>

                                    <script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
                                    <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
                                    <script type="text/javascript">
                                        /* Activate smart panels */
                                        $('#js-page-content').smartPanel();
                                    </script>

                                </body>


                            <?php } else {
                                redirect('Welcome/index');
                            }
                            ?>


                        <?php
                    }
                        ?>

                        </div>

                    </main>

                </div>

            </div>

        </div>

    </div>
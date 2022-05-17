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
                 
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i>Molding</span>

                        </h1>
                    </div>
                    <?php if ($this->session->userdata('userStus') == 1) { ?>

<style>
    #Tempmax {
        margin: 0 auto;
        min-width: 600px;
    }

    #TempMin {
        margin: 0 auto;
        min-width: 600px;
    }

    #lineChartTemp {
        margin: 0 auto;
        min-width: 600px;
    }
</style>

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


        <!-- <div class="row clearfix"> -->
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

                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-control-label">Select hall Names :</label>
                            <div class="input-group" id="hallnames">
                                <select class="form-control" id="hallValue" name="hall" style="width: 100%">
                                </select>
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


        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <div id="MoldTempmax"></div>
                    </div>
                    <div class="col-md-12">
                        <div id="MoldTempmin"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="lineChartMoldTemp"></div>
                    </div>

                </div>
            </div>
        </div>







        <script src="<?php echo base_url(); ?>assets/js/chart.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
      
        
<script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
      <script type="text/javascript">

          /* Activate smart panels */
          $('#js-page-content').smartPanel();
      </script>
        <script src="<?php echo base_url(); ?>/assets/charts/highcharts.js"></script>
        <script src="<?php echo base_url(); ?>/assets/charts/data.js"></script>
        <script src="<?php echo base_url(); ?>/assets/charts/drilldown.js"></script>
        <script src="<?php echo base_url(); ?>/assets/charts/exporting.js"></script>
        <script src="<?php echo base_url(); ?>/assets/charts/export-data.js"></script>
        <script src="<?php echo base_url(); ?>/assets/charts/accessibility.js"></script>
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

                    url: "<?php echo base_url(
                        'MIS/TemHumidityController/getData'
                    ); ?>",
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
            function MainFunction() {

                $("#MoldTempmax").html('');
                $("#MoldTempmin").html('');

                c_date = $('#SDate').val();
                e_date = $('#EDate').val();
                hallName = $("#hallValue option:selected").text();




                $.ajax({

                    url: "<?php echo base_url(
                        'MIS/MoldingController/getMoldTemp'
                    ); ?>",
                    method: "POST",
                    data: {
                        "c_date": c_date,
                        "e_date": e_date,
                        "hallName": hallName

                    },
                    success: function(data) {
                        moldMaxdate = [];
                        moldMindate = [];
                        moldHalles = [];
                        moldMax1 = [];
                        moldMax2 = [];
                        moldMax3 = [];
                        moldMax4 = [];
                        moldMax5 = [];
                        moldMax6 = [];
                        moldMax7 = [];
                        moldMax8 = [];
                        moldMax9 = [];
                        moldMax10 = [];
                        moldMax11 = [];
                        moldMin1 = [];
                        moldMin2 = [];
                        moldMin3 = [];
                        moldMin4 = [];
                        moldMin5 = [];
                        moldMin6 = [];
                        moldMin7 = [];
                        moldMin8 = [];
                        moldMin9 = [];
                        moldMin10 = [];
                        moldMin11 = [];
                        moldMaxTemp = [];
                        tc1 = [];
                        tc2 = [];
                        tc3 = [];
                        tc4 = [];
                        tc5 = [];
                        tc6 = [];



                        $.each(data['MoldtempMax'], function(index, value) {

                            if (value.Name == "Hall2-Molding L-4") {
                                moldMax1.push(parseInt(value.Temp))
                            } else if (value.Name == "Hall2-Molding L-5") {
                                moldMax2.push(parseInt(value.Temp))
                            } else if (value.Name == "Hall2-Molding L-6") {
                                moldMax3.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-10") {
                                moldMax4.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-12") {
                                moldMax5.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-13") {
                                moldMax6.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-3") {
                                moldMax7.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-4") {
                                moldMax8.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-5") {
                                moldMax9.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-6") {
                                moldMax10.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-9") {
                                moldMax11.push(parseInt(value.Temp))
                            }

                            if (moldMaxdate.indexOf(value.EntryDate) === -1) {
                                moldMaxdate.push(value.EntryDate);
                            }


                        });
                        $.each(data['MoldtempMin'], function(index, value) {

                            if (value.Name == "Hall2-Molding L-4") {
                                moldMin1.push(parseInt(value.Temp))
                            } else if (value.Name == "Hall2-Molding L-5") {
                                moldMin2.push(parseInt(value.Temp))
                            } else if (value.Name == "Hall2-Molding L-6") {
                                moldMin3.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-10") {
                                moldMin4.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-12") {
                                moldMin5.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-13") {
                                moldMin6.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-3") {
                                moldMin7.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-4") {
                                moldMin8.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-5") {
                                moldMin9.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-6") {
                                moldMin10.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-9") {
                                moldMin11.push(parseInt(value.Temp))
                            }

                            if (moldMindate.indexOf(value.EntryDate) === -1) {
                                moldMindate.push(value.EntryDate);
                            }


                        });
                        $.each(data['Moldline'], function(index, value) {

                            if (value.Name == "Hall2-Molding L-4") {

                                tc1.push(parseInt(value.TC1))
                                tc2.push(parseInt(value.TC2))
                                tc3.push(parseInt(value.TC3))
                                tc4.push(parseInt(value.TC4))
                                tc5.push(parseInt(value.TC5))
                                tc6.push(parseInt(value.TC6))
                            } else if (value.Name == "Hall2-Molding L-5") {
                                tc1.push(parseInt(value.TC1))
                                tc2.push(parseInt(value.TC2))
                                tc3.push(parseInt(value.TC3))
                                tc4.push(parseInt(value.TC4))
                                tc5.push(parseInt(value.TC5))
                                tc6.push(parseInt(value.TC6))
                            } else if (value.Name == "Hall2-Molding L-6") {
                                tc1.push(parseInt(value.TC1))
                                tc2.push(parseInt(value.TC2))
                                tc3.push(parseInt(value.TC3))
                                tc4.push(parseInt(value.TC4))
                                tc5.push(parseInt(value.TC5))
                                tc6.push(parseInt(value.TC6))
                            } else if (value.Name == "Molding L-10") {
                                tc1.push(parseInt(value.TC1))
                                tc2.push(parseInt(value.TC2))
                                tc3.push(parseInt(value.TC3))
                                tc4.push(parseInt(value.TC4))
                                tc5.push(parseInt(value.TC5))
                                tc6.push(parseInt(value.TC6))
                            } else if (value.Name == "Molding L-12") {
                                tc1.push(parseInt(value.TC1))
                                tc2.push(parseInt(value.TC2))
                                tc3.push(parseInt(value.TC3))
                                tc4.push(parseInt(value.TC4))
                                tc5.push(parseInt(value.TC5))
                                tc6.push(parseInt(value.TC6))
                            } else if (value.Name == "Molding L-13") {
                                tc1.push(parseInt(value.TC1))
                                tc2.push(parseInt(value.TC2))
                                tc3.push(parseInt(value.TC3))
                                tc4.push(parseInt(value.TC4))
                                tc5.push(parseInt(value.TC5))
                                tc6.push(parseInt(value.TC6))
                            } else if (value.Name == "Molding L-3") {
                                tc1.push(parseInt(value.TC1))
                                tc2.push(parseInt(value.TC2))
                                tc3.push(parseInt(value.TC3))
                                tc4.push(parseInt(value.TC4))
                                tc5.push(parseInt(value.TC5))
                                tc6.push(parseInt(value.TC6))
                            } else if (value.Name == "Molding L-4") {
                                tc1.push(parseInt(value.TC1))
                                tc2.push(parseInt(value.TC2))
                                tc3.push(parseInt(value.TC3))
                                tc4.push(parseInt(value.TC4))
                                tc5.push(parseInt(value.TC5))
                                tc6.push(parseInt(value.TC6))
                            } else if (value.Name == "Molding L-5") {
                                tc1.push(parseInt(value.TC1))
                                tc2.push(parseInt(value.TC2))
                                tc3.push(parseInt(value.TC3))
                                tc4.push(parseInt(value.TC4))
                                tc5.push(parseInt(value.TC5))
                                tc6.push(parseInt(value.TC6))
                            } else if (value.Name == "Molding L-6") {
                                tc1.push(parseInt(value.TC1))
                                tc2.push(parseInt(value.TC2))
                                tc3.push(parseInt(value.TC3))
                                tc4.push(parseInt(value.TC4))
                                tc5.push(parseInt(value.TC5))
                                tc6.push(parseInt(value.TC6))
                            } else if (value.Name == "Molding L-9") {
                                tc1.push(parseInt(value.TC1))
                                tc2.push(parseInt(value.TC2))
                                tc3.push(parseInt(value.TC3))
                                tc4.push(parseInt(value.TC4))
                                tc5.push(parseInt(value.TC5))
                                tc6.push(parseInt(value.TC6))
                            }

                            if (moldHalles.indexOf(value.Name) === -1) {
                                moldHalles.push(value.Name);
                            }


                        });

                        let seriesmoldtempmax = [{
                                name: 'Hall2-Molding L-4',
                                data: moldMax1
                            },
                            {
                                name: 'Hall2-Molding L-5',
                                data: moldMax2
                            },
                            {
                                name: 'Hall2-Molding L-6',
                                data: moldMax3
                            },
                            {
                                name: 'Molding L-10',
                                data: moldMax4
                            },
                            {
                                name: 'Molding L-12',
                                data: moldMax5
                            },
                            {
                                name: 'Molding L-13',
                                data: moldMax6
                            },
                            {
                                name: 'Molding L-3',
                                data: moldMax7
                            },
                            {
                                name: 'Molding L-4',
                                data: moldMax8
                            },
                            {
                                name: 'Molding L-5',
                                data: moldMax9
                            },
                            {
                                name: 'Molding L-6',
                                data: moldMax10
                            },
                            {
                                name: 'Molding L-9',
                                data: moldMax11
                            }


                        ]
                        let seriesmoldtempmin = [{
                                name: 'Hall2-Molding L-4',
                                data: moldMin1
                            },
                            {
                                name: 'Hall2-Molding L-5',
                                data: moldMin2
                            },
                            {
                                name: 'Hall2-Molding L-6',
                                data: moldMin3
                            },
                            {
                                name: 'Molding L-10',
                                data: moldMin4
                            },
                            {
                                name: 'Molding L-12',
                                data: moldMin5
                            },
                            {
                                name: 'Molding L-13',
                                data: moldMin6
                            },
                            {
                                name: 'Molding L-3',
                                data: moldMin7
                            },
                            {
                                name: 'Molding L-4',
                                data: moldMin8
                            },
                            {
                                name: 'Molding L-5',
                                data: moldMin9
                            },
                            {
                                name: 'Molding L-6',
                                data: moldMin10
                            },
                            {
                                name: 'Molding L-9',
                                data: moldMin11
                            }


                        ]


                        let seriesmoldtemp = [{
                                name: 'Hall2-Molding L-4',
                                data: moldMin1
                            },
                            {
                                name: 'Hall2-Molding L-5',
                                data: moldMin2
                            },
                            {
                                name: 'Hall2-Molding L-6',
                                data: moldMin3
                            },
                            {
                                name: 'Molding L-10',
                                data: moldMin4
                            },
                            {
                                name: 'Molding L-12',
                                data: moldMin5
                            },
                            {
                                name: 'Molding L-13',
                                data: moldMin6
                            },
                            {
                                name: 'Molding L-3',
                                data: moldMin7
                            },
                            {
                                name: 'Molding L-4',
                                data: moldMin8
                            },
                            {
                                name: 'Molding L-5',
                                data: moldMin9
                            },
                            {
                                name: 'Molding L-6',
                                data: moldMin10
                            },
                            {
                                name: 'Molding L-9',
                                data: moldMin11
                            }


                        ]
                        let moldHallesseries = [{
                                name: 'TC1',
                                data: tc1
                            },
                            {
                                name: 'TC2',
                                data: tc2
                            },
                            {
                                name: 'TC3',
                                data: tc3
                            },
                            {
                                name: 'TC4',
                                data: tc4
                            },
                            {
                                name: 'TC5',
                                data: tc5
                            },
                            {
                                name: 'TC6',
                                data: tc6
                            }
                        ]

                        //    Highcharts.chart('MoldTempmax', {
                        //     chart: {
                        //      type: 'column'
                        //     },
                        //     title: {
                        //      text: 'Molding Maximum Temperature '
                        //     },
                        //     xAxis: {
                        //      categories: moldMaxdate,
                        //      crosshair: true
                        //     },
                        //     yAxis: {
                        //      min: 0,
                        //      title: {
                        //       text: 'Molding (Max)'
                        //      }
                        //     },
                        //     tooltip: {
                        //      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        //      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        //       '<td style="padding:0"><b>{point.y:.1f} Max</b></td></tr>',
                        //      footerFormat: '</table>',
                        //      shared: true,
                        //      useHTML: true
                        //     },
                        //     plotOptions: {
                        //      column: {
                        //       pointPadding: 0.2,
                        //       borderWidth: 0
                        //      }
                        //     },
                        //     series: seriesmoldtempmax
                        //    });
                        //    Highcharts.chart('MoldTempmin', {
                        //     chart: {
                        //      type: 'column'
                        //     },
                        //     title: {
                        //      text: 'Molding Minimum Temperature '
                        //     },
                        //     xAxis: {
                        //      categories: moldMindate,
                        //      crosshair: true
                        //     },
                        //     yAxis: {
                        //      min: 0,
                        //      title: {
                        //       text: 'Molding (Min)'
                        //      }
                        //     },
                        //     tooltip: {
                        //      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        //      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        //       '<td style="padding:0"><b>{point.y:.1f} Min</b></td></tr>',
                        //      footerFormat: '</table>',
                        //      shared: true,
                        //      useHTML: true
                        //     },
                        //     plotOptions: {
                        //      column: {
                        //       pointPadding: 0.2,
                        //       borderWidth: 0
                        //      }
                        //     },
                        //     series: seriesmoldtempmin
                        //    });
                        Highcharts.chart('lineChartMoldTemp', {

                            title: {
                                text: `Molding Temeprature of ${hallName}`
                            },

                            yAxis: {
                                title: {
                                    text: 'Molding'
                                }
                            },

                            xAxis: {
                                visible: false
                            },

                            legend: {
                                layout: 'vertical',
                                align: 'right',
                                verticalAlign: 'middle'
                            },

                            // plotOptions: {
                            //     series: {
                            //         label: {
                            //             connectorAllowed: true
                            //         },
                            //         pointStart: 2010
                            //     }
                            // },

                            series: moldHallesseries,

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
                })
            }





            window.onload = function() {

                c_date = $('#SDate').val();
                e_date = $('#EDate').val();
                hallName = $("#hallValue option:selected").text();
                $.ajax({

                    url: "<?php echo base_url(
                        'MIS/MoldingController/gellHallnames'
                    ); ?>",
                    method: "GET",
                    data: {
                        "c_date": c_date,
                        "e_date": e_date,

                    },
                    success: function(data) {

                        var appendTable = '';

                        data.forEach(element => {
                            console.log(element.Name);
                            appendTable += `
            <option value="${element.Name}">${element.Name}</option>
            
            `

                        })
                        $("#hallValue").html(appendTable);



                    }
                })

                $.ajax({

                    url: "<?php echo base_url(
                        'MIS/MoldingController/getMoldTemp'
                    ); ?>",
                    method: "POST",
                    data: {
                        "c_date": c_date,
                        "e_date": e_date,
                        "hallName": hallName

                    },
                    success: function(data) {
                        console.log("Data Get", data)
                        moldMaxdate = [];
                        moldMindate = [];
                        moldMax1 = [];
                        moldMax2 = [];
                        moldMax3 = [];
                        moldMax4 = [];
                        moldMax5 = [];
                        moldMax6 = [];
                        moldMax7 = [];
                        moldMax8 = [];
                        moldMax9 = [];
                        moldMax10 = [];
                        moldMax11 = [];
                        moldMin1 = [];
                        moldMin2 = [];
                        moldMin3 = [];
                        moldMin4 = [];
                        moldMin5 = [];
                        moldMin6 = [];
                        moldMin7 = [];
                        moldMin8 = [];
                        moldMin9 = [];
                        moldMin10 = [];
                        moldMin11 = [];
                        moldMaxTemp = [];

                        $.each(data['MoldtempMax'], function(index, value) {



                            if (value.Name == "Hall2-Molding L-4") {
                                moldMax1.push(parseInt(value.Temp))
                            } else if (value.Name == "Hall2-Molding L-5") {
                                moldMax2.push(parseInt(value.Temp))
                            } else if (value.Name == "Hall2-Molding L-6") {
                                moldMax3.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-10") {
                                moldMax4.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-12") {
                                moldMax5.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-13") {
                                moldMax6.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-3") {
                                moldMax7.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-4") {
                                moldMax8.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-5") {
                                moldMax9.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-6") {
                                moldMax10.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-9") {
                                moldMax11.push(parseInt(value.Temp))
                            }

                            if (moldMaxdate.indexOf(value.EntryDate) === -1) {
                                moldMaxdate.push(value.EntryDate);
                            }


                        });
                        $.each(data['MoldtempMin'], function(index, value) {



                            if (value.Name == "Hall2-Molding L-4") {
                                moldMin1.push(parseInt(value.Temp))
                            } else if (value.Name == "Hall2-Molding L-5") {
                                moldMin2.push(parseInt(value.Temp))
                            } else if (value.Name == "Hall2-Molding L-6") {
                                moldMin3.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-10") {
                                moldMin4.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-12") {
                                moldMin5.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-13") {
                                moldMin6.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-3") {
                                moldMin7.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-4") {
                                moldMin8.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-5") {
                                moldMin9.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-6") {
                                moldMin10.push(parseInt(value.Temp))
                            } else if (value.Name == "Molding L-9") {
                                moldMin11.push(parseInt(value.Temp))
                            }

                            if (moldMindate.indexOf(value.EntryDate) === -1) {
                                moldMindate.push(value.EntryDate);
                            }


                        });
                        let seriesmoldtempmax = [{
                                name: 'Hall2-Molding L-4',
                                data: moldMax1
                            },
                            {
                                name: 'Hall2-Molding L-5',
                                data: moldMax2
                            },
                            {
                                name: 'Hall2-Molding L-6',
                                data: moldMax3
                            },
                            {
                                name: 'Molding L-10',
                                data: moldMax4
                            },
                            {
                                name: 'Molding L-12',
                                data: moldMax5
                            },
                            {
                                name: 'Molding L-13',
                                data: moldMax6
                            },
                            {
                                name: 'Molding L-3',
                                data: moldMax7
                            },
                            {
                                name: 'Molding L-4',
                                data: moldMax8
                            },
                            {
                                name: 'Molding L-5',
                                data: moldMax9
                            },
                            {
                                name: 'Molding L-6',
                                data: moldMax10
                            },
                            {
                                name: 'Molding L-9',
                                data: moldMax11
                            }


                        ]
                        let seriesmoldtempmin = [{
                                name: 'Hall2-Molding L-4',
                                data: moldMin1
                            },
                            {
                                name: 'Hall2-Molding L-5',
                                data: moldMin2
                            },
                            {
                                name: 'Hall2-Molding L-6',
                                data: moldMin3
                            },
                            {
                                name: 'Molding L-10',
                                data: moldMin4
                            },
                            {
                                name: 'Molding L-12',
                                data: moldMin5
                            },
                            {
                                name: 'Molding L-13',
                                data: moldMin6
                            },
                            {
                                name: 'Molding L-3',
                                data: moldMin7
                            },
                            {
                                name: 'Molding L-4',
                                data: moldMin8
                            },
                            {
                                name: 'Molding L-5',
                                data: moldMin9
                            },
                            {
                                name: 'Molding L-6',
                                data: moldMin10
                            },
                            {
                                name: 'Molding L-9',
                                data: moldMin11
                            }


                        ]

                        let seriesmoldtemp = [{
                                name: 'Hall2-Molding L-4',
                                data: moldMin1
                            },
                            {
                                name: 'Hall2-Molding L-5',
                                data: moldMin2
                            },
                            {
                                name: 'Hall2-Molding L-6',
                                data: moldMin3
                            },
                            {
                                name: 'Molding L-10',
                                data: moldMin4
                            },
                            {
                                name: 'Molding L-12',
                                data: moldMin5
                            },
                            {
                                name: 'Molding L-13',
                                data: moldMin6
                            },
                            {
                                name: 'Molding L-3',
                                data: moldMin7
                            },
                            {
                                name: 'Molding L-4',
                                data: moldMin8
                            },
                            {
                                name: 'Molding L-5',
                                data: moldMin9
                            },
                            {
                                name: 'Molding L-6',
                                data: moldMin10
                            },
                            {
                                name: 'Molding L-9',
                                data: moldMin11
                            }


                        ]



                        Highcharts.chart('MoldTempmax', {
                            chart: {
                                type: 'column'
                            },
                            title: {
                                text: 'Molding Maximum Temperature '
                            },
                            xAxis: {
                                categories: moldMaxdate,
                                crosshair: true
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Molding (Max)'
                                }
                            },
                            tooltip: {
                                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                    '<td style="padding:0"><b>{point.y:.1f} Max</b></td></tr>',
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
                            series: seriesmoldtempmax
                        });
                        Highcharts.chart('MoldTempmin', {
                            chart: {
                                type: 'column'
                            },
                            title: {
                                text: 'Molding Minimum Temperature '
                            },
                            xAxis: {
                                categories: moldMindate,
                                crosshair: true
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Molding (Min)'
                                }
                            },
                            tooltip: {
                                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                    '<td style="padding:0"><b>{point.y:.1f} Min</b></td></tr>',
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
                            series: seriesmoldtempmin
                        });

                    }
                })


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



    <?php } else {redirect('Welcome/index');}
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
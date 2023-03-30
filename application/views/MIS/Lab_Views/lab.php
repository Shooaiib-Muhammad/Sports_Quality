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
                                                                <li class="breadcrumb-item">Lab Dashboard</li>


                        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                    </ol>
   
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i>Lab Dashboard</span>

                        </h1>
                    </div>

<?php
if ($this->session->userdata('userStus') == 1) { ?>


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
            <div class="col-md-2">
                <div class="position-relative form-group">
                    <label for="factory" class="">Filteration Type</label>
                    <select id="Filteration" class="form-control" onchange="loadSupplier()">
                        <option value="" selected>Select Filteration</option>
                        <option value="1">Test Type</option>
                        <option value="2">Supplier</option>
                        <option value="3">Material Size</option>



                    </select>
                </div>
            </div>
            <div class="" style="display:none;margin-top:28px;margin-left:20px; font-size:17px;" id="display">
                <div class="position-relative form-group">
                    <label for="factory" class="">Select</label>
                    <select id="loadMaterial" class="js-example-basic-single">
                        <option value="" selected>Select here</option>

                    </select>
                </div>
                

            </div>
            <div class="col-md-1 mt-3">
                <div class="form-group">
                    <label class=" form-control-label"></label>
                    <div class="input-group">
                        
                        <button type="submit" id="submit" name="submit" onclick="MainFunction()" class="btn btn-success btn-block" style="border-radius: 15px;"><i class=" fa fa-search"></i> Search</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- <div class="col-md-2">
<div class="position-relative form-group">
                    <label for="factory" class="">Suppliers Type</label>
                    <select  id="articlePlace" class="form-control">
                         <option value="All" selected>All</option>
                                                        <option value="1" >Carton Test</option>
                                                        <option value="2">Foam</option>
                                                        <option value="3">Fabric</option>
                                                        <option value="4">Thread</option>
                                                        <option value="5">SR Blader</option>
                       

                    </select>
                </div>
</div> -->







<style type="text/css">
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



<div style="margin-top:40px" class="col-md-12" id="loadChart">
    <div class="card">
        <!-- <div class="card-header">
Lab Supplier Wise
</div> -->
        <!-- <canvas id="myChart"></canvas> -->
        <div id="container2"></div>
    </div>
</div>
<div class="col-md-12" id="CustomChart" style="display: none;">
    <div class="card">
        <!-- <div class="card-header">
Lab Supplier Wise
</div> -->
        <div id="myChart3"></div>
    </div>
</div>
<div class="col-md-12">
    <div class="card">
        <!-- <div class="card-header">
Material Wise 
</div> -->
        <div class="card-body">
            <div id="container1"></div>
        </div>

    </div>
</div>
<div class="col-md-12">
    <?php
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CDate = $Day . '/' . $Month . '/' . $Year;
    ?>
    <div id="appenTitle" class="card-header mt-2 mb-2" class="bg-primary-200 text-light">
        <h4>Data From <?php echo $CDate; ?> to <?php echo $CDate; ?></h4>
    </div>
    <div class="card" id="appendDatatable">

    </div>
</div>







<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
          
          <script src="<?php echo base_url(); ?>/assets/charts/highcharts.js"></script>
          <script src="<?php echo base_url(); ?>/assets/charts/data.js"></script>
          <script src="<?php echo base_url(); ?>/assets/charts/drilldown.js"></script>
          <script src="<?php echo base_url(); ?>/assets/charts/exporting.js"></script>
          <script src="<?php echo base_url(); ?>/assets/charts/export-data.js"></script>
          <script src="<?php echo base_url(); ?>/assets/charts/accessibility.js"></script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>


<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>



<script>
    var c_date = $("#SDate").val();
    var e_date = $("#EDate").val();



    $.ajax({

        url: "<?php echo base_url('MIS/Lab/pie'); ?>",
        method: "GET",
        data: {
            "c_date": c_date,
            "e_date": e_date
        },
        success: function(data) {


            s_pass = []
            s_pass_num = []

            s_fail_num = []


            data.forEach((item, index) => {

                s_pass.push(item.Size)
                s_pass_num.push(item.pass)
                s_fail_num.push(item.fail)

            })


            $(function() {
                var corr = 1,
                    pre = [];


                $('#container1').highcharts({
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Material Wise '
                    },
                    xAxis: {
                        categories: s_pass
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Total fruit consumption'
                        }
                    },
                    legend: {
                        reversed: true
                    },
                    plotOptions: {
                        series: {
                            stacking: 'percent',
                            dataLabels: {
                                enabled: true,
                                style: {
                                    color: 'black'
                                },
                                formatter: function() {
                                    var ret = '',
                                        i = 0,
                                        j = 0,
                                        serNo = this.series._i;

                                    if (serNo == 0) {
                                        corr = this.total - this.y + 1;
                                        pre[this.x] = this.y;
                                    } else if (serNo == 1) {
                                        corr = this.total - pre[this.x] - this.y + 1;
                                    } else {
                                        corr = 1;
                                    }

                                    // for (i; i < this.y; i++) {
                                    //     ret += (i + corr) + ' ';
                                    // }

                                    return ret + this.percentage.toFixed(0) + '%';
                                }
                            }
                        }
                    },
                    series: [{
                        name: 'Pass',
                        data: s_pass_num
                    }, {
                        name: 'Fail',
                        data: s_fail_num
                    }]
                });
            });


            //           Highcharts.chart('container1', {
            //     chart: {
            //         type: 'column'
            //     },
            //     title: {
            //         text: 'Material Wise '
            //     },
            //     xAxis: {
            //         categories: s_pass
            //     },
            //     yAxis: {
            //         min: 0,
            //         title: {
            //             text: 'Total fruit consumption'
            //         },
            //         stackLabels: {
            //             enabled: true,
            //             style: {
            //                 fontWeight: 'bold',
            //                 color: ( // theme
            //                     Highcharts.defaultOptions.title.style &&
            //                     Highcharts.defaultOptions.title.style.color
            //                 ) || 'gray'
            //             }
            //         }
            //     },
            //     legend: {
            //         align: 'right',
            //         x: -30,
            //         verticalAlign: 'top',
            //         y: 25,
            //         floating: true,
            //         backgroundColor:
            //             Highcharts.defaultOptions.legend.backgroundColor || 'white',
            //         borderColor: '#CCC',
            //         borderWidth: 1,
            //         shadow: false
            //     },
            //     tooltip: {
            //         headerFormat: '<b>{point.x}</b><br/>',
            //         pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
            //     },
            //     plotOptions: {
            //         column: {
            //             stacking: 'normal',
            //             dataLabels: {
            //                 enabled: true
            //             }
            //         }
            //     },
            //     series: [{
            //         name: 'Pass',
            //         data: s_pass_num
            //     }, {
            //         name: 'Fail',
            //         data: s_fail_num
            //     }]
            // });


        }



    })
</script>

<script>
    window.onload = function() {


        //$('#exampleDataTable').DataTable();

        var c_date = $("#SDate").val();
        var e_date = $("#EDate").val();
        

        $('#exampleDataTable').DataTable({

                dom: 'Bfrtip',
                buttons: [
                    'copy',
                    {
                        extend: 'excel',
                        messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
                    },
                    {
                        extend: 'pdf',
                        messageBottom: null
                    }
                ],
                "ordering": false,
                "pageLength": 10,
                "searching": true,
                "LengthChange": true,
                "oLanguage": {
                    "sEmptyTable": "Data Is Not Available Yet!"
                },

            }


        );
        $.ajax({

            url: "<?php echo base_url('MIS/Lab/loadtable'); ?>",
            method: "GET",
            data: {
                "c_date": c_date,
                "e_date": e_date
                
            },
            success: function(data) {

                console.log('data from table',data)
                var appenTable = '';

                    appenTable += `<table id="exampleDataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Test No</th>
                    <th>Date</th>
                    <th>Material Name</th>
                    <th>PO</th>
                    <th>Receiving Date</th>
                    <th>Supplier Name</th>
                    <th>Supplier Ref</th>
                    <th>Quantity Carton</th>
                    <th>Entry Date</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody id="">
           `
                    data.forEach((item, index) => {



                        appenTable += ` <tr>
    <td>${item.TestNO}</td>
    <td>${item.Date}</td>
    <td>${item.Size}</td>
    <td>${item.PO}</td>
    <td>${item.Receiving_Date}</td>
    <td>${item.Supplier_Name}</td>
     <td>${item.Supplier_Ref}</td>
    <td>${item.Quantity_Carton}</td>
    <td>${item.Entrydate}</td>
    <td>${item.Result}</td>
</tr>`;


                    })
                    appenTable += `  </tbody>

        </table>`

                    $("#appendDatatable").html(appenTable);
                    $('#exampleDataTable').DataTable({

                            
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


                        }


                    );
             
            }
        })
        $.ajax({

            url: "<?php echo base_url('MIS/Lab/load'); ?>",
            method: "GET",
            data: {
                "c_date": c_date,
                "e_date": e_date
            },
            success: function(data) {

                s_pass = []
                s_pass_num = []

                s_fail_num = []


                data.forEach((item, index) => {

                    s_pass.push(item.Supplier_Name)
                    s_pass_num.push(item.pass)
                    s_fail_num.push(item.fail)

                })



                $(function() {
                    var corr = 1,
                        pre = [];


                    $('#container2').highcharts({
                        chart: {
                            type: 'column'
                        },
                        title: {
                            text: `Supplier Wise `
                        },
                        xAxis: {
                            categories: s_pass
                        },
                        yAxis: {
                            min: 0,
                            title: {
                                text: 'Total fruit consumption'
                            }
                        },
                        legend: {
                            reversed: true
                        },
                        plotOptions: {
                            series: {
                                stacking: 'percent',
                                dataLabels: {
                                    enabled: true,
                                    style: {
                                        color: 'black'
                                    },
                                    formatter: function() {
                                        var ret = '',
                                            i = 0,
                                            j = 0,
                                            serNo = this.series._i;

                                        if (serNo == 0) {
                                            corr = this.total - this.y + 1;
                                            pre[this.x] = this.y;
                                        } else if (serNo == 1) {
                                            corr = this.total - pre[this.x] - this.y + 1;
                                        } else {
                                            corr = 1;
                                        }

                                        // for (i; i < this.y; i++) {
                                        //     ret += (i + corr) + ' ';
                                        // }

                                        return ret + this.percentage.toFixed(0) + '%';
                                    }
                                }
                            }
                        },
                        series: [{
                            name: 'Pass',
                            data: s_pass_num
                        }, {
                            name: 'Fail',
                            data: s_fail_num
                        }]
                    });
                });




                // Highcharts.chart('container2', {
                //     chart: {
                //         type: 'column'
                //     },
                //     title: {
                //         text: `Supplier Wise `
                //     },
                //     xAxis: {
                //         categories: s_pass
                //     },
                //     yAxis: {
                //         min: 0,
                //         title: {
                //             text: 'Total fruit consumption'
                //         },
                //         stackLabels: {
                //             enabled: true,
                //             style: {
                //                 fontWeight: 'bold',
                //                 color: ( // theme
                //                     Highcharts.defaultOptions.title.style &&
                //                     Highcharts.defaultOptions.title.style.color
                //                 ) || 'gray'
                //             }
                //         }
                //     },
                //     legend: {
                //         align: 'right',
                //         x: -30,
                //         verticalAlign: 'top',
                //         y: 25,
                //         floating: true,
                //         backgroundColor:
                //             Highcharts.defaultOptions.legend.backgroundColor || 'white',
                //         borderColor: '#CCC',
                //         borderWidth: 1,
                //         shadow: false
                //     },
                //     tooltip: {
                //         headerFormat: '<b>{point.x}</b><br/>',
                //         pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
                //     },
                //     plotOptions: {
                //         column: {
                //             stacking: 'normal',
                //             dataLabels: {
                //                 enabled: true
                //             }
                //         }
                //     },
                //     series: [{
                //         name: 'Pass',
                //         data: s_pass_num
                //     }, {
                //         name: 'Fail',
                //         data: s_fail_num
                //     }]
                // });

            }



        })

    }
</script>
<script>
    function MainFunction() {
        //alert('I am here');
        c_date = $('#SDate').val();
        e_date = $('#EDate').val();
        testtype = $('#loadMaterial').val();

        var supplier = $("#Filteration").val();
        let datesplit = c_date.split("-");
        let cur_date = datesplit[2] + "/" + datesplit[1] + "/" + datesplit[0];
        let datesplitend_date = e_date.split("-");
        let end_date = datesplitend_date[2] + "/" + datesplitend_date[1] + "/" + datesplitend_date[0];
        if (supplier == 2) {
            supplierName = $('#loadMaterial').val();
            $("#loadChart").css("display", 'none')
            $("#CustomChart").css("display", 'block')
            $.ajax({

                url: "<?php echo base_url(
                    'MIS/Lab/getDatewiseSupplier'
                ); ?>",
                method: "GET",
                data: {
                    "c_date": c_date,
                    "e_date": e_date,
                    "supplierName": supplierName
                },
                success: function(data) {
                    var appenTable = '';
                    console.log("from suuplier", data)
                    data['suppliertable'].forEach((item, index) => {
                        console.log("array in js ", index, item)

                        appenTable += ` <tr>
    <td>${item.TestNO}</td>
    <td>${item.Date}</td>
    <td>${item.Size}</td>
    <td>${item.PO}</td>
    <td>${item.Receiving_Date}</td>
    <td>${item.Supplier_Name}</td>
     <td>${item.Supplier_Ref}</td>
    <td>${item.Quantity_Carton}</td>
    <td>${item.Entrydate}</td>
    <td>${item.Result}</td>
</tr>`;
                    })

                    $("#appendTable").html(appenTable);
                    var appendTitle = '';
                    $("#appenTitle").html(appendTitle);

                    s_pass = []
                    s_pass_num = []

                    s_fail_num = []

                    s_pass_mat = []
                    s_pass_num_mat = []

                    s_fail_num_mat = []
                    data['supplier'].forEach((item, index) => {

                        s_pass.push(item.Supplier_Name)
                        s_pass_num.push(item.Pass)
                        s_fail_num.push(item.Fail)


                    })

                    data['suppliermaterial'].forEach((item, index) => {

                        s_pass_mat.push(item.Size)
                        s_pass_num_mat.push(item.Pass)
                        s_fail_num_mat.push(item.Fail)


                    })

                    ////////////////////////////////////////////////////////// Testing Chart ///////////////////////////////////

                    $(function() {
                        var corr = 1,
                            pre = [];


                        $('#myChart3').highcharts({
                            chart: {
                                type: 'column'
                            },
                            title: {
                                text: `${supplierName} From (${cur_date}) To (${end_date})`
                            },
                            xAxis: {
                                categories: s_pass
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Total fruit consumption'
                                }
                            },
                            legend: {
                                reversed: true
                            },
                            plotOptions: {
                                series: {
                                    stacking: 'percent',
                                    dataLabels: {
                                        enabled: true,
                                        style: {
                                            color: 'black'
                                        },
                                        formatter: function() {
                                            var ret = '',
                                                i = 0,
                                                j = 0,
                                                serNo = this.series._i;

                                            if (serNo == 0) {
                                                corr = this.total - this.y + 1;
                                                pre[this.x] = this.y;
                                            } else if (serNo == 1) {
                                                corr = this.total - pre[this.x] - this.y + 1;
                                            } else {
                                                corr = 1;
                                            }

                                            // for (i; i < this.y; i++) {
                                            //     ret += (i + corr) + ' ';
                                            // }

                                            return ret + this.percentage.toFixed(0) + '%';
                                        }
                                    }
                                }
                            },
                            series: [{
                                name: 'Pass',
                                data: s_pass_num
                            }, {
                                name: 'Fail',
                                data: s_fail_num
                            }]
                        });
                    });

                    /////////////////////////////////////////////////// Working Chart /////////////////////////////////////////////////////////


                    // Highcharts.chart('myChart3', {
                    //     chart: {
                    //         type: 'column'
                    //     },
                    //     title: {
                    //       text:  `${supplierName} From (${cur_date}) To (${end_date})`
                    //     },
                    //     xAxis: {
                    //         categories: s_pass
                    //     },
                    //     yAxis: {
                    //         min: 0,
                    //         title: {
                    //             text: 'Quantity'
                    //         },
                    //         stackLabels: {
                    //             enabled: true,
                    //             style: {
                    //                 fontWeight: 'bold',
                    //                 color: ( // theme
                    //                     Highcharts.defaultOptions.title.style &&
                    //                     Highcharts.defaultOptions.title.style.color
                    //                 ) || 'gray'
                    //             }
                    //         }
                    //     },
                    //     legend: {
                    //         align: 'right',
                    //         x: -30,
                    //         verticalAlign: 'top',
                    //         y: 25,
                    //         floating: true,
                    //         backgroundColor:
                    //             Highcharts.defaultOptions.legend.backgroundColor || 'white',
                    //         borderColor: '#CCC',
                    //         borderWidth: 1,
                    //         shadow: false
                    //     },
                    //     tooltip: {
                    //         headerFormat: '<b>{point.x}</b><br/>',
                    //         pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
                    //     },
                    //     plotOptions: {
                    //         column: {
                    //             stacking: 'normal',
                    //             dataLabels: {
                    //                 enabled: true
                    //             }
                    //         }
                    //     },
                    //       series: [{
                    //         name: 'Pass',
                    //         data: s_pass_num
                    //     }, {
                    //         name: 'Fail',
                    //         data: s_fail_num
                    //     }]
                    // });

                    ////////////////////////////////////////////////////////////////// Testing Chart //////////////////////////////////////////////

                    $(function() {
                        var corr = 1,
                            pre = [];


                        $('#container1').highcharts({
                            chart: {
                                type: 'column'
                            },
                            title: {
                                text: `${supplierName} Material Wise From (${cur_date}) To (${end_date})`
                            },
                            xAxis: {
                                categories: s_pass_mat
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Total fruit consumption'
                                }
                            },
                            legend: {
                                reversed: true
                            },
                            plotOptions: {
                                series: {
                                    stacking: 'percent',
                                    dataLabels: {
                                        enabled: true,
                                        style: {
                                            color: 'black'
                                        },
                                        formatter: function() {
                                            var ret = '',
                                                i = 0,
                                                j = 0,
                                                serNo = this.series._i;

                                            if (serNo == 0) {
                                                corr = this.total - this.y + 1;
                                                pre[this.x] = this.y;
                                            } else if (serNo == 1) {
                                                corr = this.total - pre[this.x] - this.y + 1;
                                            } else {
                                                corr = 1;
                                            }

                                            // for (i; i < this.y; i++) {
                                            //     ret += (i + corr) + ' ';
                                            // }

                                            return ret + this.percentage.toFixed(0) + '%';
                                        }
                                    }
                                }
                            },
                            series: [{
                                name: 'Pass',
                                data: s_pass_num_mat
                            }, {
                                name: 'Fail',
                                data: s_fail_num_mat
                            }]
                        });
                    });

                    ///////////////////////////////////////////////////////////////// Working Chart //////////////////////////////////////////////


                    // Highcharts.chart('container1', {
                    //     chart: {
                    //         type: 'column'
                    //     },
                    //     title: {
                    //       text:  `${supplierName} Material Wise From (${cur_date}) To (${end_date})`
                    //     },
                    //     xAxis: {
                    //         categories: s_pass_mat
                    //     },
                    //     yAxis: {
                    //         min: 0,
                    //         title: {
                    //             text: 'Quantity'
                    //         },
                    //         stackLabels: {
                    //             enabled: true,
                    //             style: {
                    //                 fontWeight: 'bold',
                    //                 color: ( // theme
                    //                     Highcharts.defaultOptions.title.style &&
                    //                     Highcharts.defaultOptions.title.style.color
                    //                 ) || 'gray'
                    //             }
                    //         }
                    //     },
                    //     legend: {
                    //         align: 'right',
                    //         x: -30,
                    //         verticalAlign: 'top',
                    //         y: 25,
                    //         floating: true,
                    //         backgroundColor:
                    //             Highcharts.defaultOptions.legend.backgroundColor || 'white',
                    //         borderColor: '#CCC',
                    //         borderWidth: 1,
                    //         shadow: false
                    //     },
                    //     tooltip: {
                    //         headerFormat: '<b>{point.x}</b><br/>',
                    //         pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
                    //     },
                    //     plotOptions: {
                    //         column: {
                    //             stacking: 'normal',
                    //             dataLabels: {
                    //                 enabled: true
                    //             }
                    //         }
                    //     },
                    //       series: [{
                    //         name: 'Pass',
                    //         data: s_pass_num_mat
                    //     }, {
                    //         name: 'Fail',
                    //         data: s_fail_num_mat
                    //     }]
                    // });

                }



            })
        } else if (supplier == 3) {
            materialName = $('#loadMaterial').val();
            $("#loadChart").css("display", 'none')
            $("#CustomChart").css("display", 'block')
            $.ajax({

                url: "<?php echo base_url(
                    'MIS/Lab/getDatewiseMaterial'
                ); ?>",
                method: "GET",
                data: {
                    "c_date": c_date,
                    "e_date": e_date,
                    "materialName": materialName
                },
                success: function(data) {

                    var appenTable = '';

                    data['materialtable'].forEach((item, index) => {
                        console.log("array in js ", index, item)

                        appenTable += ` <tr>
    <td>${item.TestNO}</td>
    <td>${item.Date}</td>
    <td>${item.Size}</td>
    <td>${item.PO}</td>
    <td>${item.Receiving_Date}</td>
    <td>${item.Supplier_Name}</td>
     <td>${item.Supplier_Ref}</td>
    <td>${item.Quantity_Carton}</td>
    <td>${item.Entrydate}</td>
    <td>${item.Result}</td>
</tr>`;
                    })

                    $("#appendTable").html(appenTable);

                    var appendTitle = '';
                    appendTitle += `<h4>Material wise </h4>`
                    $("#appenTitle").html(appendTitle);

                    s_pass = []
                    s_pass_num = []

                    s_fail_num = []

                    s_pass_mat = []
                    s_pass_num_mat = []

                    s_fail_num_mat = []
                    data['material'].forEach((item, index) => {

                        s_pass.push(item.Supplier_Name)
                        s_pass_num.push(item.Pass)
                        s_fail_num.push(item.Fail)


                    })

                    data['materialsupplier'].forEach((item, index) => {

                        s_pass_mat.push(item.Size)
                        s_pass_num_mat.push(item.Pass)
                        s_fail_num_mat.push(item.Fail)


                    })
                    // console.log(s_pass_mat)
                    // console.log(s_pass_num_mat)
                    // console.log(s_fail_num_mat)

                    $(function() {
                        var corr = 1,
                            pre = [];


                        $('#myChart3').highcharts({
                            chart: {
                                type: 'column'
                            },
                            title: {
                                text: `${materialName} Material Wise From (${cur_date}) To (${end_date})`
                            },
                            xAxis: {
                                categories: s_pass_mat
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Total fruit consumption'
                                }
                            },
                            legend: {
                                reversed: true
                            },
                            plotOptions: {
                                series: {
                                    stacking: 'percent',
                                    dataLabels: {
                                        enabled: true,
                                        style: {
                                            color: 'black'
                                        },
                                        formatter: function() {
                                            var ret = '',
                                                i = 0,
                                                j = 0,
                                                serNo = this.series._i;

                                            if (serNo == 0) {
                                                corr = this.total - this.y + 1;
                                                pre[this.x] = this.y;
                                            } else if (serNo == 1) {
                                                corr = this.total - pre[this.x] - this.y + 1;
                                            } else {
                                                corr = 1;
                                            }

                                            // for (i; i < this.y; i++) {
                                            //     ret += (i + corr) + ' ';
                                            // }

                                            return ret + this.percentage.toFixed(0) + '%';
                                        }
                                    }
                                }
                            },
                            series: [{
                                name: 'Pass',
                                data: s_pass_num_mat
                            }, {
                                name: 'Fail',
                                data: s_fail_num_mat
                            }]
                        });
                    });

                    // Highcharts.chart('myChart3', {
                    //     chart: {
                    //         type: 'column'
                    //     },
                    //     title: {
                    //       text:  `${materialName} Material Wise From (${cur_date}) To (${end_date})`
                    //     },
                    //     xAxis: {
                    //         categories: s_pass_mat
                    //     },
                    //     yAxis: {
                    //         min: 0,
                    //         title: {
                    //             text: 'Total fruit consumption'
                    //         },
                    //         stackLabels: {
                    //             enabled: true,
                    //             style: {
                    //                 fontWeight: 'bold',
                    //                 color: ( // theme
                    //                     Highcharts.defaultOptions.title.style &&
                    //                     Highcharts.defaultOptions.title.style.color
                    //                 ) || 'gray'
                    //             }
                    //         }
                    //     },
                    //     legend: {
                    //         align: 'right',
                    //         x: -30,
                    //         verticalAlign: 'top',
                    //         y: 25,
                    //         floating: true,
                    //         backgroundColor:
                    //             Highcharts.defaultOptions.legend.backgroundColor || 'white',
                    //         borderColor: '#CCC',
                    //         borderWidth: 1,
                    //         shadow: false
                    //     },
                    //     tooltip: {
                    //         headerFormat: '<b>{point.x}</b><br/>',
                    //         pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
                    //     },
                    //     plotOptions: {
                    //         column: {
                    //             stacking: 'normal',
                    //             dataLabels: {
                    //                 enabled: true
                    //             }
                    //         }
                    //     },
                    //       series: [{
                    //         name: 'Pass',
                    //         data: s_pass_num_mat
                    //     }, {
                    //         name: 'Fail',
                    //         data: s_fail_num_mat
                    //     }]
                    // });

                    //   let datesplit = c_date.split("-");
                    //   let cur_date = datesplit[2]+"/"+datesplit[1]+"/"+datesplit[0];
                    //   let datesplitend_date = e_date.split("-");
                    //   let end_date = datesplitend_date[2]+"/"+datesplitend_date[1]+"/"+datesplitend_date[0];


                    $(function() {
                        var corr = 1,
                            pre = [];


                        $('#container1').highcharts({
                            chart: {
                                type: 'column'
                            },
                            title: {
                                text: `${materialName} Supplier Wise From (${cur_date}) To (${end_date})`
                            },
                            xAxis: {
                                categories: s_pass
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Total fruit consumption'
                                }
                            },
                            legend: {
                                reversed: true
                            },
                            plotOptions: {
                                series: {
                                    stacking: 'percent',
                                    dataLabels: {
                                        enabled: true,
                                        style: {
                                            color: 'black'
                                        },
                                        formatter: function() {
                                            var ret = '',
                                                i = 0,
                                                j = 0,
                                                serNo = this.series._i;

                                            if (serNo == 0) {
                                                corr = this.total - this.y + 1;
                                                pre[this.x] = this.y;
                                            } else if (serNo == 1) {
                                                corr = this.total - pre[this.x] - this.y + 1;
                                            } else {
                                                corr = 1;
                                            }

                                            // for (i; i < this.y; i++) {
                                            //     ret += (i + corr) + ' ';
                                            // }

                                            return ret + this.percentage.toFixed(0) + '%';
                                        }
                                    }
                                }
                            },
                            series: [{
                                name: 'Pass',
                                data: s_pass_num
                            }, {
                                name: 'Fail',
                                data: s_fail_num
                            }]
                        });
                    });


                    // Highcharts.chart('container1', {
                    //     chart: {
                    //         type: 'column'
                    //     },
                    //     title: {
                    //       text:  `${materialName} Supplier Wise From (${cur_date}) To (${end_date})`
                    //     },
                    //     xAxis: {
                    //         categories: s_pass
                    //     },
                    //     yAxis: {
                    //         min: 0,
                    //         title: {
                    //             text: 'Total fruit consumption'
                    //         },
                    //         stackLabels: {
                    //             enabled: true,
                    //             style: {
                    //                 fontWeight: 'bold',
                    //                 color: ( // theme
                    //                     Highcharts.defaultOptions.title.style &&
                    //                     Highcharts.defaultOptions.title.style.color
                    //                 ) || 'gray'
                    //             }
                    //         }
                    //     },
                    //     legend: {
                    //         align: 'right',
                    //         x: -30,
                    //         verticalAlign: 'top',
                    //         y: 25,
                    //         floating: true,
                    //         backgroundColor:
                    //             Highcharts.defaultOptions.legend.backgroundColor || 'white',
                    //         borderColor: '#CCC',
                    //         borderWidth: 1,
                    //         shadow: false
                    //     },
                    //     tooltip: {
                    //         headerFormat: '<b>{point.x}</b><br/>',
                    //         pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
                    //     },
                    //     plotOptions: {
                    //         column: {
                    //             stacking: 'normal',
                    //             dataLabels: {
                    //                 enabled: true
                    //             }
                    //         }
                    //     },
                    //       series: [{
                    //         name: 'Pass',
                    //         data: s_pass_num
                    //     }, {
                    //         name: 'Fail',
                    //         data: s_fail_num
                    //     }]
                    // });

                }



            })

        } else {



            let datesplit = c_date.split("-");
            let cur_date = datesplit[2] + "/" + datesplit[1] + "/" + datesplit[0];
            let datesplitend_date = e_date.split("-");
            let end_date = datesplitend_date[2] + "/" + datesplitend_date[1] + "/" + datesplitend_date[0];
            $("#loadChart").css("display", 'none')
            $("#CustomChart").css("display", 'block')
            $.ajax({

                url: "<?php echo base_url('MIS/Lab/customload'); ?>",
                method: "GET",
                data: {
                    "c_date": c_date,
                    "e_date": e_date,
                    "testtype": testtype
                },
                success: function(data) {

                    console.log("data table not showinhg", data)

                    var appendTitle = '';
                    appendTitle += `<h4>${testtype} From (${cur_date}) To (${end_date}) </h4>`
                    $("#appenTitle").html(appendTitle);

                    s_pass = []
                    s_pass_num = []

                    s_fail_num = []


                    data.forEach((item, index) => {

                        s_pass.push(item.Supplier_Name)
                        s_pass_num.push(item.pass)
                        s_fail_num.push(item.fail)

                    })


                    $(function() {
                        var corr = 1,
                            pre = [];


                        $('#myChart3').highcharts({
                            chart: {
                                type: 'column'
                            },
                            title: {
                                text: `${testtype} Supplier Wise (${cur_date}) To (${end_date})`
                            },
                            xAxis: {
                                categories: s_pass
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Total fruit consumption'
                                }
                            },
                            legend: {
                                reversed: true
                            },
                            plotOptions: {
                                series: {
                                    stacking: 'percent',
                                    dataLabels: {
                                        enabled: true,
                                        style: {
                                            color: 'black'
                                        },
                                        formatter: function() {
                                            var ret = '',
                                                i = 0,
                                                j = 0,
                                                serNo = this.series._i;

                                            if (serNo == 0) {
                                                corr = this.total - this.y + 1;
                                                pre[this.x] = this.y;
                                            } else if (serNo == 1) {
                                                corr = this.total - pre[this.x] - this.y + 1;
                                            } else {
                                                corr = 1;
                                            }

                                            // for (i; i < this.y; i++) {
                                            //     ret += (i + corr) + ' ';
                                            // }

                                            return ret + this.percentage.toFixed(0) + '%';
                                        }
                                    }
                                }
                            },
                            series: [{
                                name: 'Pass',
                                data: s_pass_num
                            }, {
                                name: 'Fail',
                                data: s_fail_num
                            }]
                        });
                    });


                    // Highcharts.chart('myChart3', {
                    //     chart: {
                    //         type: 'column'
                    //     },
                    //     title: {
                    //       text: `${testtype} Supplier Wise (${cur_date}) To (${end_date})`
                    //     },
                    //     xAxis: {
                    //         categories: s_pass
                    //     },
                    //     yAxis: {
                    //         min: 0,
                    //         title: {
                    //             text: 'Total fruit consumption'
                    //         },
                    //         stackLabels: {
                    //             enabled: true,
                    //             style: {
                    //                 fontWeight: 'bold',
                    //                 color: ( // theme
                    //                     Highcharts.defaultOptions.title.style &&
                    //                     Highcharts.defaultOptions.title.style.color
                    //                 ) || 'gray'
                    //             }
                    //         }
                    //     },
                    //     legend: {
                    //         align: 'right',
                    //         x: -30,
                    //         verticalAlign: 'top',
                    //         y: 25,
                    //         floating: true,
                    //         backgroundColor:
                    //             Highcharts.defaultOptions.legend.backgroundColor || 'white',
                    //         borderColor: '#CCC',
                    //         borderWidth: 1,
                    //         shadow: false
                    //     },
                    //     tooltip: {
                    //         headerFormat: '<b>{point.x}</b><br/>',
                    //         pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
                    //     },
                    //     plotOptions: {
                    //         column: {
                    //             stacking: 'normal',
                    //             dataLabels: {
                    //                 enabled: true
                    //             }
                    //         }
                    //     },
                    //       series: [{
                    //         name: 'Pass',
                    //         data: s_pass_num
                    //     }, {
                    //         name: 'Fail',
                    //         data: s_fail_num
                    //     }]
                    // });




                }
            })

            $.ajax({

                url: "<?php echo base_url('MIS/Lab/custompie'); ?>",
                method: "GET",
                data: {
                    "c_date": c_date,
                    "e_date": e_date,
                    "testtype": testtype
                },
                success: function(data) {



                    s_pass = []
                    s_pass_num = []

                    s_fail_num = []


                    data.forEach((item, index) => {

                        s_pass.push(item.Size)
                        s_pass_num.push(item.pass)
                        s_fail_num.push(item.fail)

                    })


                    $(function() {
                        var corr = 1,
                            pre = [];


                        $('#container1').highcharts({
                            chart: {
                                type: 'column'
                            },
                            title: {
                                text: `${testtype} Material Wise (${cur_date}) To (${end_date})`
                            },
                            xAxis: {
                                categories: s_pass
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Total fruit consumption'
                                }
                            },
                            legend: {
                                reversed: true
                            },
                            plotOptions: {
                                series: {
                                    stacking: 'percent',
                                    dataLabels: {
                                        enabled: true,
                                        style: {
                                            color: 'black'
                                        },
                                        formatter: function() {
                                            var ret = '',
                                                i = 0,
                                                j = 0,
                                                serNo = this.series._i;

                                            if (serNo == 0) {
                                                corr = this.total - this.y + 1;
                                                pre[this.x] = this.y;
                                            } else if (serNo == 1) {
                                                corr = this.total - pre[this.x] - this.y + 1;
                                            } else {
                                                corr = 1;
                                            }

                                            // for (i; i < this.y; i++) {
                                            //     ret += (i + corr) + ' ';
                                            // }

                                            return ret + this.percentage.toFixed(0) + '%';
                                        }
                                    }
                                }
                            },
                            series: [{
                                name: 'Pass',
                                data: s_pass_num
                            }, {
                                name: 'Fail',
                                data: s_fail_num
                            }]
                        });
                    });




                    // Highcharts.chart('container1', {
                    //     chart: {
                    //         type: 'column'
                    //     },
                    //     title: {
                    //         text: `${testtype} Material Wise (${cur_date}) To (${end_date})`
                    //     },
                    //     xAxis: {
                    //         categories: s_pass
                    //     },
                    //     yAxis: {
                    //         min: 0,
                    //         title: {
                    //             text: 'Total fruit consumption'
                    //         },
                    //         stackLabels: {
                    //             enabled: true,
                    //             style: {
                    //                 fontWeight: 'bold',
                    //                 color: ( // theme
                    //                     Highcharts.defaultOptions.title.style &&
                    //                     Highcharts.defaultOptions.title.style.color
                    //                 ) || 'gray'
                    //             }
                    //         }
                    //     },
                    //     legend: {
                    //         align: 'right',
                    //         x: -30,
                    //         verticalAlign: 'top',
                    //         y: 25,
                    //         floating: true,
                    //         backgroundColor:
                    //             Highcharts.defaultOptions.legend.backgroundColor || 'white',
                    //         borderColor: '#CCC',
                    //         borderWidth: 1,
                    //         shadow: false
                    //     },
                    //     tooltip: {
                    //         headerFormat: '<b>{point.x}</b><br/>',
                    //         pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
                    //     },
                    //     plotOptions: {
                    //         column: {
                    //             stacking: 'normal',
                    //             dataLabels: {
                    //                 enabled: true
                    //             }
                    //         }
                    //     },
                    //      series: [{
                    //         name: 'Pass',
                    //         data: s_pass_num
                    //     }, {
                    //         name: 'Fail',
                    //         data: s_fail_num
                    //     }]
                    // });


                }
            })

            $.ajax({

                url: "<?php echo base_url('MIS/Lab/customtable'); ?>",
                method: "GET",
                data: {
                    "c_date": c_date,
                    "e_date": e_date,
                    "testtype": testtype
                },
                success: function(data) {

                    var appenTable = '';

                    appenTable += `<table id="exampleDataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Test No</th>
                    <th>Date</th>
                    <th>Material Name</th>
                    <th>PO</th>
                    <th>Receiving Date</th>
                    <th>Supplier Name</th>
                    <th>Supplier Ref</th>
                    <th>Quantity Carton</th>
                    <th>Entry Date</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody id="">
           `
                    data.forEach((item, index) => {



                        appenTable += ` <tr>
    <td>${item.TestNO}</td>
    <td>${item.Date}</td>
    <td>${item.Size}</td>
    <td>${item.PO}</td>
    <td>${item.Receiving_Date}</td>
    <td>${item.Supplier_Name}</td>
     <td>${item.Supplier_Ref}</td>
    <td>${item.Quantity_Carton}</td>
    <td>${item.Entrydate}</td>
    <td>${item.Result}</td>
</tr>`;


                    })
                    appenTable += `  </tbody>

        </table>`

                    $("#appendDatatable").html(appenTable);
                    $('#exampleDataTable').DataTable({

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


                        }


                    );
                }
            })

        }


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

<script>
    function loadSupplier() {

        $("#loadMaterial").html('');
        $("#display").css("display", "block");
        var supplier = $("#Filteration").val();
        if (supplier == 2) {
            $.ajax({

                url: "<?php echo base_url('MIS/Lab/loadSupplier'); ?>",
                method: "GET",
                data: {},
                success: function(data) {

                    var appendSupplier = '';
                    console.log("supplier", data);
                    data.forEach((item, index) => {


                        appendSupplier += `
                        
                          <option value="${item.Supplier_Name}" >${item.Supplier_Name}</option>
                     `;



                    })
                    $("#loadMaterial").append(appendSupplier);
                }
            })
        } else if (supplier == 1) {
            appendTest = '';
            appendTest += ` <option value="Carton" >Carton</option>
                                                        <option value="Foam">Foam</option>
                                                        <option value="Fabric">Fabric</option>
                                                        <option value="Thread">Thread</option>
                                                        <option value="SR Blader">SR Blader</option>
                                                        <option value="Material">Material</option>
                                                                                        <option value="FGT Report">FGT Report</option>
                                                                                        <option value="MS Thread">MS Thread</option>
                                                                                        <option value="MS Material">MS Material</option>
                                                                                        <option value="Poly Bag">Poly Bag</option>
                                                                                        <option value="Adhesion">Adhesion</option>
                                                                                        <option value="CSM">CSM</option>
                                                        
                                                        `;

            $("#loadMaterial").append(appendTest);
        } else {

            $.ajax({

                url: "<?php echo base_url('MIS/Lab/loadMaterial'); ?>",
                method: "GET",
                data: {},
                success: function(data) {

                    console.log("material", data);
                    var appendMaterial = '';

                    data.forEach((item, index) => {


                        appendMaterial += `
                        
                          <option value="${item.Size}" >${item.Size}</option>
                     `;



                    })
                    $("#loadMaterial").append(appendMaterial);
                }
            })
        }
    }
</script>

<!-- <script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script> -->
      <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
      <script type="text/javascript">
          /* Activate smart panels */
          $('#js-page-content').smartPanel();
      </script>


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
<script>
    $(document).ready(function() {
    
$('.js-example-basic-single').select2();
});
</script>


<?php } else {redirect('Welcome/index');}
?>

</div>

        
</body>

</div>

</main>

</div>

</div>

</div>

</div>
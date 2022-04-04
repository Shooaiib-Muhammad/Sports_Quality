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

              <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
            </ol>

            <div class="subheader">
              <h1 class="subheader-title">
                <i class='subheader-icon fal fa-chart-area'></i>Dashboard</span>

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
                          <div class="position-relative form-group">
                            <label for="factory" class="">Filteration Type</label>
                            <select id="Filteration" class="form-control" onchange="loadSupplier()">
                              <option value="" selected>Select Filteration</option>
                              <option value="1">Test Type</option>
                              <option value="2">Article</option>
                              <option value="3">Test Request</option>
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
                        <div class="col-md-1">
                          <div class="form-group">
                            <label class=" form-control-label"></label>
                            <divstyl class="input-group">

                              <button type="submit" id="submit" name="submit" onclick="MainFunction()" class="btn btn-success btn-block" style="border-radius: 15px;"><i class=" fa fa-search"></i> Search</button>
                            </divstyl>
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
                  <script src="<?php echo base_url(); ?>assets/js/chart.js"></script>



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
                  <!-- <div class="col-md-12">
                    <?php
                    // $Month = date('m');
                    // $Year = date('Y');
                    // $Day = date('d');
                    // $CDate = $Day . '/' . $Month . '/' . $Year;
                    ?>
                    <div id="appenTitle" class="card-header mt-2 mb-2" class="bg-primary-200 text-light">
                      <h4>Data From <?php echo $CDate; ?> to <?php echo $CDate; ?></h4>
                    </div>
                    <!-- <div class="card" id="appendDatatable"> 

                    </div> -->
                </div>








                <script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>

                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script src="https://code.highcharts.com/modules/series-label.js"></script>
                <script src="https://code.highcharts.com/modules/exporting.js"></script>
                <script src="https://code.highcharts.com/modules/export-data.js"></script>
                <script src="https://code.highcharts.com/modules/accessibility.js"></script>




                <script>
                  //   var c_date = $("#SDate").val();
                  //   var e_date = $("#EDate").val();



                  //   $.ajax({

                  //     url: "<?php echo base_url('MIS/Lab/pie'); ?>",
                  //     method: "GET",
                  //     data: {
                  //       "c_date": c_date,
                  //       "e_date": e_date
                  //     },
                  //     success: function(data) {


                  //       s_pass = []
                  //       s_pass_num = []

                  //       s_fail_num = []


                  //       data.forEach((item, index) => {

                  //         s_pass.push(item.Size)
                  //         s_pass_num.push(item.pass)
                  //         s_fail_num.push(item.fail)

                  //       })


                  //       $(function() {
                  //         var corr = 1,
                  //           pre = [];


                  //         $('#container1').highcharts({
                  //           chart: {
                  //             type: 'column'
                  //           },
                  //           title: {
                  //             text: 'Material Wise '
                  //           },
                  //           xAxis: {
                  //             categories: s_pass
                  //           },
                  //           yAxis: {
                  //             min: 0,
                  //             title: {
                  //               text: 'Total fruit consumption'
                  //             }
                  //           },
                  //           legend: {
                  //             reversed: true
                  //           },
                  //           plotOptions: {
                  //             series: {
                  //               stacking: 'percent',
                  //               dataLabels: {
                  //                 enabled: true,
                  //                 style: {
                  //                   color: 'black'
                  //                 },
                  //                 formatter: function() {
                  //                   var ret = '',
                  //                     i = 0,
                  //                     j = 0,
                  //                     serNo = this.series._i;

                  //                   if (serNo == 0) {
                  //                     corr = this.total - this.y + 1;
                  //                     pre[this.x] = this.y;
                  //                   } else if (serNo == 1) {
                  //                     corr = this.total - pre[this.x] - this.y + 1;
                  //                   } else {
                  //                     corr = 1;
                  //                   }

                  //                   // for (i; i < this.y; i++) {
                  //                   //     ret += (i + corr) + ' ';
                  //                   // }

                  //                   return ret + this.percentage.toFixed(0) + '%';
                  //                 }
                  //               }
                  //             }
                  //           },
                  //           series: [{
                  //             name: 'Pass',
                  //             data: s_pass_num
                  //           }, {
                  //             name: 'Fail',
                  //             data: s_fail_num
                  //           }]
                  //         });
                  //       });


                  //       //           Highcharts.chart('container1', {
                  //       //     chart: {
                  //       //         type: 'column'
                  //       //     },
                  //       //     title: {
                  //       //         text: 'Material Wise '
                  //       //     },
                  //       //     xAxis: {
                  //       //         categories: s_pass
                  //       //     },
                  //       //     yAxis: {
                  //       //         min: 0,
                  //       //         title: {
                  //       //             text: 'Total fruit consumption'
                  //       //         },
                  //       //         stackLabels: {
                  //       //             enabled: true,
                  //       //             style: {
                  //       //                 fontWeight: 'bold',
                  //       //                 color: ( // theme
                  //       //                     Highcharts.defaultOptions.title.style &&
                  //       //                     Highcharts.defaultOptions.title.style.color
                  //       //                 ) || 'gray'
                  //       //             }
                  //       //         }
                  //       //     },
                  //       //     legend: {
                  //       //         align: 'right',
                  //       //         x: -30,
                  //       //         verticalAlign: 'top',
                  //       //         y: 25,
                  //       //         floating: true,
                  //       //         backgroundColor:
                  //       //             Highcharts.defaultOptions.legend.backgroundColor || 'white',
                  //       //         borderColor: '#CCC',
                  //       //         borderWidth: 1,
                  //       //         shadow: false
                  //       //     },
                  //       //     tooltip: {
                  //       //         headerFormat: '<b>{point.x}</b><br/>',
                  //       //         pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
                  //       //     },
                  //       //     plotOptions: {
                  //       //         column: {
                  //       //             stacking: 'normal',
                  //       //             dataLabels: {
                  //       //                 enabled: true
                  //       //             }
                  //       //         }
                  //       //     },
                  //       //     series: [{
                  //       //         name: 'Pass',
                  //       //         data: s_pass_num
                  //       //     }, {
                  //       //         name: 'Fail',
                  //       //         data: s_fail_num
                  //       //     }]
                  //       // });


                  //     }



                  //   })
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

                        console.log('data from table', data)
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



                        // $(function() {
                        //   var corr = 1,
                        //     pre = [];


                        //   $('#container2').highcharts({
                        //     chart: {
                        //       type: 'column'
                        //     },
                        //     title: {
                        //       text: `Supplier Wise `
                        //     },
                        //     xAxis: {
                        //       categories: s_pass
                        //     },
                        //     yAxis: {
                        //       min: 0,
                        //       title: {
                        //         text: 'Total fruit consumption'
                        //       }
                        //     },
                        //     legend: {
                        //       reversed: true
                        //     },
                        //     plotOptions: {
                        //       series: {
                        //         stacking: 'percent',
                        //         dataLabels: {
                        //           enabled: true,
                        //           style: {
                        //             color: 'black'
                        //           },
                        //           formatter: function() {
                        //             var ret = '',
                        //               i = 0,
                        //               j = 0,
                        //               serNo = this.series._i;

                        //             if (serNo == 0) {
                        //               corr = this.total - this.y + 1;
                        //               pre[this.x] = this.y;
                        //             } else if (serNo == 1) {
                        //               corr = this.total - pre[this.x] - this.y + 1;
                        //             } else {
                        //               corr = 1;
                        //             }

                        //             // for (i; i < this.y; i++) {
                        //             //     ret += (i + corr) + ' ';
                        //             // }

                        //             return ret + this.percentage.toFixed(0) + '%';
                        //           }
                        //         }
                        //       }
                        //     },
                        //     series: [{
                        //       name: 'Pass',
                        //       data: s_pass_num
                        //     }, {
                        //       name: 'Fail',
                        //       data: s_fail_num
                        //     }]
                        //   });
                        // });




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

                    c_date = $('#SDate').val();
                    e_date = $('#EDate').val();
                    testtype = $('#loadMaterial').val();

                    var supplier = $("#Filteration").val();

                    let datesplit = c_date.split("-");
                    let cur_date = datesplit[2] + "/" + datesplit[1] + "/" + datesplit[0];
                    let datesplitend_date = e_date.split("-");
                    let end_date = datesplitend_date[2] + "/" + datesplitend_date[1] + "/" + datesplitend_date[0];

                    if (supplier == 2) {
                      ArticleName = $('#loadMaterial').val();
                      $("#loadChart").css("display", 'none')
                      $("#CustomChart").css("display", 'block')
                      $.ajax({

                        url: "<?php echo base_url(
                                'LabController/GetArticlesData'
                              ); ?>",
                        method: "POST",
                        data: {
                          "c_date": c_date,
                          "e_date": e_date,
                          "ArticleName": ArticleName
                        },
                        success: function(data) {

                          var tidfail;
                          var tidpass;

                          console.log("from data a", data)

                          var appendTitle = '';
                          appendTitle += `<h4>${data['supplier'][0]?data['supplier'][0].Article:'nothing'} wise </h4>`
                          $("#appenTitle").html(appendTitle);

                          article = []

                          Resultpass = []
                          ResultFail = []
                          check = []
                          Sample_RequestDate = []
                          $.each(data['supplier'], function(index, value) {

                            if (value.Result == 'Pass') {
                              tidpass = value.TID

                              Resultpass.push(value.TID)

                            }
                            if (value.Result == 'Fail') {
                              tidfail = value.TID
                              ResultFail.push(value.TID)
                            }
                            //  alert(tidpass)
                            if (Sample_RequestDate.indexOf(value.Sample_RequestDate) === -1) {
                              Sample_RequestDate.push(value.Sample_RequestDate);
                              alert(tidpass)
                              if (tidpass == undefined) {
                                tidpass = 0
                              }
                              if (tidfail == undefined) {
                                tidfail = 0
                              }

                              if (tidpass == 0 || tidpass == 1 || tidpass == undefined) {
                                var checked = tidfail - tidpass

                              } else {
                                var checked = tidpass - tidfail


                              }

                              check.push(checked);

                            }
                          });

                          console.log(check, "hi")
                          console.log(Resultpass, "hi44")
                          console.log("article", Sample_RequestDate)
                          var chart = Highcharts.chart('myChart3', {

                            chart: {
                              type: 'column'
                            },

                            title: {
                              text: 'Arcile Wise '
                            },

                            subtitle: {
                              // text: 'Resize the frame or click buttons to change appearance'
                            },

                            legend: {
                              align: 'right',
                              verticalAlign: 'middle',
                              layout: 'vertical'
                            },

                            xAxis: {
                              categories: Sample_RequestDate,
                              labels: {
                                x: -10
                              }
                            },

                            yAxis: {
                              allowDecimals: false,
                              title: {
                                text: 'Result'
                              }
                            },

                            series: [{
                                name: 'Checked',
                                data: check
                              },
                              {
                                name: 'Pass',
                                data: Resultpass
                              },
                              {
                                name: 'Fail',
                                data: ResultFail
                              }
                            ],

                            responsive: {
                              rules: [{
                                condition: {
                                  maxWidth: 500
                                },
                                chartOptions: {
                                  legend: {
                                    align: 'center',
                                    verticalAlign: 'bottom',
                                    layout: 'horizontal'
                                  },
                                  yAxis: {
                                    labels: {
                                      align: 'left',
                                      x: 0,
                                      y: -5
                                    },
                                    title: {
                                      text: null
                                    }
                                  },
                                  subtitle: {
                                    text: null
                                  },
                                  credits: {
                                    enabled: false
                                  }
                                }
                              }]
                            }
                          });

                          document.getElementById('small').addEventListener('click', function() {
                            chart.setSize(400);
                          });

                          document.getElementById('large').addEventListener('click', function() {
                            chart.setSize(600);
                          });

                          document.getElementById('auto').addEventListener('click', function() {
                            chart.setSize(null);
                          });

                        }



                      })
                    } else if (supplier == 3) {
                      materialName = $('#loadMaterial').val();

                      $("#loadChart").css("display", 'none')
                      $("#CustomChart").css("display", 'block')
                      $.ajax({

                        url: "<?php echo base_url(

                                'LabController/getTestrequest'
                              ); ?>",
                        method: "POST",
                        data: {
                          "c_date": c_date,
                          "e_date": e_date,
                          "materialName": materialName
                        },
                        success: function(data) {

                          var tidfail;
                          var tidpass;

                          console.log("from data a", data)

                          // var appendTitle = '';
                          // appendTitle += `<h4>${data['Name']?data['Name'].Name:'nothing'} wise </h4>`
                          // $("#appenTitle").html(appendTitle);

                          article = []

                          Resultpass = []
                          ResultFail = []
                          check = []
                          Sample_RequestDate = []
                          $.each(data, function(index, value) {

                            if (value.Result == 'Pass') {
                              tidpass = value.TID

                              Resultpass.push(value.TID)

                            }
                            if (value.Result == 'Fail') {
                              tidfail = value.TID
                              ResultFail.push(value.TID)
                            }
                            //  alert(tidpass)
                            if (Sample_RequestDate.indexOf(value.Sample_RequestDate) === -1) {
                              Sample_RequestDate.push(value.Sample_RequestDate);
                              alert(tidpass)
                              if (tidpass == undefined) {
                                tidpass = 0
                              }
                              if (tidfail == undefined) {
                                tidfail = 0
                              }

                              if (tidpass == 0 || tidpass == 1 || tidpass == undefined) {
                                var checked = tidfail - tidpass

                              } else {
                                var checked = tidpass - tidfail


                              }

                              check.push(checked);

                            }
                          });

                          console.log(check, "hi")
                          console.log(Resultpass, "hi44")
                          console.log("article", Sample_RequestDate)
                          var chart = Highcharts.chart('myChart3', {

                            chart: {
                              type: 'column'
                            },

                            title: {
                              text: 'Test Request '
                            },

                            subtitle: {
                              // text: 'Resize the frame or click buttons to change appearance'
                            },

                            legend: {
                              align: 'right',
                              verticalAlign: 'middle',
                              layout: 'vertical'
                            },

                            xAxis: {
                              categories: Sample_RequestDate,
                              labels: {
                                x: -10
                              }
                            },

                            yAxis: {
                              allowDecimals: false,
                              title: {
                                text: 'Result'
                              }
                            },

                            series: [{
                                name: 'Checked',
                                data: check
                              },
                              {
                                name: 'Pass',
                                data: Resultpass
                              },
                              {
                                name: 'Fail',
                                data: ResultFail
                              }
                            ],

                            responsive: {
                              rules: [{
                                condition: {
                                  maxWidth: 500
                                },
                                chartOptions: {
                                  legend: {
                                    align: 'center',
                                    verticalAlign: 'bottom',
                                    layout: 'horizontal'
                                  },
                                  yAxis: {
                                    labels: {
                                      align: 'left',
                                      x: 0,
                                      y: -5
                                    },
                                    title: {
                                      text: null
                                    }
                                  },
                                  subtitle: {
                                    text: null
                                  },
                                  credits: {
                                    enabled: false
                                  }
                                }
                              }]
                            }
                          });

                          document.getElementById('small').addEventListener('click', function() {
                            chart.setSize(400);
                          });

                          document.getElementById('large').addEventListener('click', function() {
                            chart.setSize(600);
                          });

                          document.getElementById('auto').addEventListener('click', function() {
                            chart.setSize(null);
                          });

                        }



                      })

                    } else {

                      let testtype = $('#loadMaterial').val();
                      let datesplit = c_date.split("-");
                      let cur_date = datesplit[2] + "/" + datesplit[1] + "/" + datesplit[0];
                      let datesplitend_date = e_date.split("-");
                      let end_date = datesplitend_date[2] + "/" + datesplitend_date[1] + "/" + datesplitend_date[0];

                      $.ajax({

                        url: "<?php echo base_url('LabController/getTesttype'); ?>",
                        method: "POST",
                        data: {
                          "c_date": c_date,
                          "e_date": e_date,
                          "testtype": testtype
                        },
                        success: function(data) {

                          console.log("data table not showinhg", data)

                          // var appendTitle = '';
                          // appendTitle += `<h4>${testtype} From (${cur_date}) To (${end_date}) </h4>`
                          // $("#appenTitle").html(appendTitle);

                          var tidfail;
                          var tidpass;

                          console.log("from data a", data)

                          // var appendTitle = '';
                          // appendTitle += `<h4>${data['Name']?data['Name'].Name:'nothing'} wise </h4>`
                          // $("#appenTitle").html(appendTitle);

                          article = []

                          Resultpass = []
                          ResultFail = []
                          check = []
                          Sample_RequestDate = []
                          $.each(data, function(index, value) {

                            if (value.Result == 'Pass') {
                              tidpass = value.TID

                              Resultpass.push(value.TID)

                            }
                            if (value.Result == 'Fail') {
                              tidfail = value.TID
                              ResultFail.push(value.TID)
                            }
                            //  alert(tidpass)
                            if (Sample_RequestDate.indexOf(value.Sample_RequestDate) === -1) {
                              Sample_RequestDate.push(value.Sample_RequestDate);
                              alert(tidpass)
                              if (tidpass == undefined) {
                                tidpass = 0
                              }
                              if (tidfail == undefined) {
                                tidfail = 0
                              }

                              if (tidpass == 0 || tidpass == 1 || tidpass == undefined) {
                                var checked = tidfail - tidpass

                              } else {
                                var checked = tidpass - tidfail


                              }

                              check.push(checked);

                            }
                          });

                          console.log(check, "hi")
                          console.log(Resultpass, "hi44")
                          console.log("article", Sample_RequestDate)
                          var chart = Highcharts.chart('myChart3', {

                            chart: {
                              type: 'column'
                            },

                            title: {
                              text: 'Test Request '
                            },

                            subtitle: {
                              // text: 'Resize the frame or click buttons to change appearance'
                            },

                            legend: {
                              align: 'right',
                              verticalAlign: 'middle',
                              layout: 'vertical'
                            },

                            xAxis: {
                              categories: Sample_RequestDate,
                              labels: {
                                x: -10
                              }
                            },

                            yAxis: {
                              allowDecimals: false,
                              title: {
                                text: 'Result'
                              }
                            },

                            series: [{
                                name: 'Checked',
                                data: check
                              },
                              {
                                name: 'Pass',
                                data: Resultpass
                              },
                              {
                                name: 'Fail',
                                data: ResultFail
                              }
                            ],

                            responsive: {
                              rules: [{
                                condition: {
                                  maxWidth: 500
                                },
                                chartOptions: {
                                  legend: {
                                    align: 'center',
                                    verticalAlign: 'bottom',
                                    layout: 'horizontal'
                                  },
                                  yAxis: {
                                    labels: {
                                      align: 'left',
                                      x: 0,
                                      y: -5
                                    },
                                    title: {
                                      text: null
                                    }
                                  },
                                  subtitle: {
                                    text: null
                                  },
                                  credits: {
                                    enabled: false
                                  }
                                }
                              }]
                            }
                          });

                          document.getElementById('small').addEventListener('click', function() {
                            chart.setSize(400);
                          });

                          document.getElementById('large').addEventListener('click', function() {
                            chart.setSize(600);
                          });

                          document.getElementById('auto').addEventListener('click', function() {
                            chart.setSize(null);
                          });
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

                        url: "<?php echo base_url(
                                'LabController/requestArticles'
                              ); ?>",
                        method: "GET",
                        data: {},
                        success: function(data) {

                          var appendSupplier = '';
                          console.log("supplier", data);
                          data.forEach((item, index) => {


                            appendSupplier += `
                                    
                                      <option value="${item.ArtCode}" >${item.ArtCode}</option>
                                 `;



                          })
                          $("#loadMaterial").append(appendSupplier);
                        }
                      })
                    } else if (supplier == 1) {
                      appendTest = '';
                      appendTest += ` <option value="Production">Production</option>
                                                                                    <option value="Development">Development</option>
                                                                                    <option value="Material">Material</option>`;

                      $("#loadMaterial").append(appendTest);
                    } else {

                      $.ajax({

                        url: "<?php echo base_url(
                                'LabController/Gettest'
                              ); ?>",
                        method: "GET",
                        data: {},
                        success: function(data) {

                          console.log("material", data);
                          var appendMaterial = '';

                          data.forEach((item, index) => {


                            appendMaterial += `
                                    
                                      <option value="${item.Name}" >${item.Name}</option>
                                 `;



                          })
                          $("#loadMaterial").append(appendMaterial);
                        }
                      })
                    }
                  }
                </script>
                <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
                <script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
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


              <?php } else {
              redirect('Welcome/index');
            } ?>
          </div>
        </main>
      </div>
    </div>
  </div>
</div>
</div>
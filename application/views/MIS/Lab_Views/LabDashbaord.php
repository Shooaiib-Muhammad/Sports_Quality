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
                                                                <li class="breadcrumb-item">Lab</li>


                        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                    </ol>
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i> Lab</span>

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
 
         
            <div class="col-md-1">
              <div class="form-group">
                <label class=" form-control-label"></label>
                <div style="margin:18px" class="input-group">
                  <br>
                  <br>
                  <button type="submit" id="submit" name="submit" onclick="MainFunction()" class="btn btn-primary " style="border-radius: 15px;"><i class=" fa fa-search"></i> Search</button>
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
      <script src="<?php echo base_url(); ?>assets/js/chart.js"></script>



     
    
     
      <div class="col-md-12">
        <?php
        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $CDate = $Day . '/' . $Month . '/' . $Year;
        ?>
        <div id="appenTitle" class="card-header mt-2 mb-2 bg-primary-200 text-light" >
          <h4>Data From <?php echo $CDate; ?> to <?php echo $CDate; ?></h4>
        </div>
        <div class="card" id="defaultLoad">
          <table id="noway" class="table table-bordered table-hover table-responsive table-striped w-100" style="width:100%">
            <thead class="bg-primary-200 text-light">
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
            <tbody id="appendTable">
            </tbody>

          </table>
        </div>
        <div class="card" id="customLoad" style="display: none">
       
        </div>
      </div>

      <script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
      <?php $this->load->View('AdminFooter'); ?>
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
      <script src="<?php echo base_url(); ?>/assets/charts/highcharts.js"></script>
      <script src="<?php echo base_url(); ?>/assets/charts/data.js"></script>
      <script src="<?php echo base_url(); ?>/assets/charts/drilldown.js"></script>
      <script src="<?php echo base_url(); ?>/assets/charts/exporting.js"></script>
      <script src="<?php echo base_url(); ?>/assets/charts/export-data.js"></script>
      <script src="<?php echo base_url(); ?>/assets/charts/accessibility.js"></script>
      <script>
        window.onload = function() {

          var c_date = $("#SDate").val();
          var e_date = $("#EDate").val();
          
         
          $.ajax({

            url: "<?php echo base_url('MIS/Lab/loadTable'); ?>",
            method: "GET",
            data: {
              "c_date": c_date,
              "e_date": e_date
            },
            success: function(data) {
              
              var appenTable = '';
              console.log("load table data", data);
             
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



              $("#appendTable").html(appenTable);
  //             $("#noway").DataTable(
  //  { 
  
  //      dom: 'Bfrtip',
  //       buttons: [
  //           'copy',
  //           {
  //               extend: 'excel',
  //               messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
  //           },
  //           {
  //               extend: 'pdf',
  //               messageBottom: null
  //           }
  //       ],
  //     "ordering":false,
  //     "pageLength":10,
  //     "searching":true,
  //     "LengthChange":true,
  //     "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},
    
  //   });
  $(document).ready(function() {
            // LoadData(stDate, enDate);

            $('#noway').dataTable({
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
            }
          })
        

        }
      </script>
      <script>
        function MainFunction() {
          //alert('I am here');
          c_date = $('#SDate').val();
          e_date = $('#EDate').val();


           appendTitledat=`<h4>Data From ${c_date} To ${e_date} </h4>`
          let datesplit = c_date.split("-");
          let cur_date = datesplit[2] + "/" + datesplit[1] + "/" + datesplit[0];
          let datesplitend_date = e_date.split("-");
          let end_date = datesplitend_date[2] + "/" + datesplitend_date[1] + "/" + datesplitend_date[0];
        
           
          
            $.ajax({

              url: "<?php echo base_url('MIS/Lab/customtable1'); ?>",
              method: "GET",
              data: {
                "c_date": c_date,
                "e_date": e_date,
                
              },
              success: function(data) {
                $("#defaultLoad").css("display","none");
                $("#customLoad").css("display","block");
                $("#customLoad").html("");
                var appenTable = `   <table id="nowayCustom" class="table table-bordered table-hover table-responsive table-striped w-100" style="width:100%">
            <thead class="bg-primary-200 text-light">
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
            <tbody>
           `;
                console.log("from table and latest", data)
                data.forEach((item, index) => {
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
      appenTable += ` </tbody>
</table>`;
                $("#customLoad").html(appenTable);
                $("#appenTitle").html(appendTitledat);
                $("#nowayCustom").DataTable(
   { 
  
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
      "ordering":false,
      "pageLength":10,
      "searching":true,
      "LengthChange":true,
      "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},
    
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
                                                                    <option value="SR Blader">SR Blader</option>`;

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


    <?php } else {
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
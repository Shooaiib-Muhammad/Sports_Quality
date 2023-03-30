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

                                <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                            </ol>
                            <div class="subheader">
                                <h1 class="subheader-title">
                                    <i class='subheader-icon fal fa-chart-area'></i>SMV</span>

                                </h1>
                            </div>
                            <!doctype html>
                            <?php if ($this->session->userdata('userStus') == 1) { ?>
                                <html class="no-js" lang="en">
                                <!--<![endif]-->
                                <link href="<?php link_file('assets/qa_assets/main.css'); ?>" rel="stylesheet">
                                <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

                                <!-- <link href="https://cdn.datatables.net/rowgroup/1.1.1/css/rowGroup.dataTables.min.css" rel="stylesheet"> -->
                                <style>
                                    .loader-container {
                                        background: #000;
                                        position: absolute;
                                        top: 0;
                                        left: 0;
                                        background: #000;
                                        opacity: 0.5;
                                        width: 100%;
                                        height: 100%;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        z-index: 10000;
                                    }

                                    .loader {

                                        opacity: 0.5;
                                        border: 16px solid #f3f3f3;
                                        border-radius: 50%;
                                        border-top: 16px solid blue;
                                        border-bottom: 16px solid blue;
                                        width: 120px;
                                        height: 120px;
                                        -webkit-animation: spin 2s linear infinite;
                                        animation: spin 2s linear infinite;

                                    }

                                    @-webkit-keyframes spin {
                                        0% {
                                            -webkit-transform: rotate(0deg);
                                        }

                                        100% {
                                            -webkit-transform: rotate(360deg);
                                        }
                                    }

                                    @keyframes spin {
                                        0% {
                                            transform: rotate(0deg);
                                        }

                                        100% {
                                            transform: rotate(360deg);
                                        }
                                    }

                                    table.dataTable tr.dtrg-group td {
                                        background-color: #e0e0e0;
                                        text-align: left;
                                    }

                                    table.dataTable tr.dtrg-group.dtrg-level-0 td {
                                        font-weight: bold
                                    }

                                    table.dataTable tr.dtrg-group.dtrg-level-1 td,
                                    table.dataTable tr.dtrg-group.dtrg-level-2 td {
                                        background-color: #f0f0f0;
                                        padding-top: 0.25em;
                                        padding-bottom: 0.25em;
                                        padding-left: 2em;
                                        font-size: 0.9em
                                    }

                                    table.dataTable tr.dtrg-group.dtrg-level-2 td {
                                        background-color: #f3f3f3
                                    }

                                    a.w-link {
                                        text-decoration: none;
                                    }
                                </style>

                                <body>
                                    <div id="right-panel" class="right-panel">

                                        <div class="container-fluid">
                                            <div class="card mb-3">
                                                <div class="card-body" hidden>
                                                    <div class="form-row">

                                                        <div class="col-md-2" style="display:none">
                                                            <div class="position-relative form-group">
                                                                <input name="clientID" id="clientID" type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2" style="display:none">
                                                            <div class="position-relative form-group">
                                                                <input name="modelID" id="modelID" type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2" style="display:none">
                                                            <div class="position-relative form-group">
                                                                <input name="articleID" id="articleID" type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="position-relative form-group">
                                                                <label for="factory" class="">Article</label>
                                                                <select name="factory" id="factory" class="form-control" onchange="loadData()">
                                                                    <option value="">Select Article Code</option>


                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="position-relative form-group">
                                                                <label class="">Model Name</label>
                                                                <input name="model" id="model" type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="position-relative form-group">
                                                                <label class="">Factory Code</label>
                                                                <input name="factoryCode" id="factoryCode" type="text" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="position-relative form-group">
                                                                <label class="">SAM Forming </label>
                                                                <input name="forming" id="forming" type="number" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="position-relative form-group">
                                                                <label class="">SAM Packing</label>
                                                                <input name="packing" id="packing" type="number" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="position-relative form-group">
                                                                <label class="">Working No</label>
                                                                <input name="workno" id="workno" type="text" class="form-control" readonly value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="position-relative form-group">
                                                                <button class="btn btn-primary btn-block" id="update" style="margin-top:1.75rem; font-size:1.05rem;">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <?php $factoryCode = array("B34001", "B34002", "B34003", "B34004", "B34005", "B34006", "B34007") ?> -->



                                            <!-- To Select Year Code -->
                                            <?php $years = range(2005, 2050); ?>
                                            <div class="card mb-3 ">
                                                <div class="row ml-2 mt-2 mr-2">
                                                    <div class="col-md-2 p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:#32a8a2">
                                                        <div class="position-relative form-group">
                                                            <select id="year">
                                                                <option>Select Year</option>
                                                                <?php foreach ($years as $year) : ?>
                                                                    <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card mb-3 ">
                                                <div class="row ml-2 mt-2 mr-2">
                                                    <div class="col-md-2" hidden>
                                                        <a href="javascript:void(0)" onclick="showForm('<?php echo "B34001" ?>')">
                                                            <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:#997300">
                                                                <div class="">
                                                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                                                        <small id="showValueB34001" class="m-0 l-h-n" style="font-weight:bold;">B34001</small>


                                                                    </h3>
                                                                </div>
                                                                <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                                            </div>
                                                        </a>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="javascript:void(0)" onclick="showForm('<?php echo "B34002" ?>')">
                                                            <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:purple">
                                                                <div class="">
                                                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                                                        <small id="showValueB34002" class="m-0 l-h-n" style="font-weight:bold;">B34002</small>


                                                                    </h3>
                                                                </div>
                                                                <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="javascript:void(0)" onclick="showForm('<?php echo "B34003" ?>')">
                                                            <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:orange">
                                                                <div class="">
                                                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                                                        <small id="showValueB34003" class="m-0 l-h-n" style="font-weight:bold;">B34003</small>


                                                                    </h3>
                                                                </div>
                                                                <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="javascript:void(0)" onclick="showForm('<?php echo "B34004" ?>')">
                                                            <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:blue">
                                                                <div class="">
                                                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                                                        <small id="showValueB34004" class="m-0 l-h-n" style="font-weight:bold;">B34004</small>


                                                                    </h3>
                                                                </div>
                                                                <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="javascript:void(0)" onclick="showForm('<?php echo "B34005" ?>')">
                                                            <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:black">
                                                                <div class="">
                                                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                                                        <small id="showValueB34005" class="m-0 l-h-n" style="font-weight:bold;">B34005</small>


                                                                    </h3>
                                                                </div>
                                                                <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="javascript:void(0)" onclick="showForm('<?php echo "B34006" ?>')">
                                                            <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:maroon">
                                                                <div class="">
                                                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                                                        <small id="showValueB34006" class="m-0 l-h-n" style="font-weight:bold;">B34006</small>


                                                                    </h3>
                                                                </div>
                                                                <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="javascript:void(0)" onclick="showForm('<?php echo "B34007" ?>')">
                                                            <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:#330066">
                                                                <div class="">
                                                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                                                        <small id="showValueB34007" class="m-0 l-h-n" style="font-weight:bold;">B34007</small>


                                                                    </h3>
                                                                </div>
                                                                <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!-- Show Miss SAM Values T -->
                                                    <div class="col-md-2">
                                                        <a href="javascript:void(0)" onclick="showMissValues()">
                                                            <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:green">
                                                                <div class="">
                                                                    <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                                                        <small class="m-0 l-h-n" style="font-weight:bold;">Missing Values</small>


                                                                    </h3>
                                                                </div>
                                                                <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                                            </div>
                                                        </a>

                                                    </div>


                                                </div>
                                                <!-- Show factory Code Tables here  -->
                                                <div>
                                                    <div class="form-row mb-2 ml-2" id="showForm" style="overflow-x:auto;"></div>
                                                </div>

                                                <!-- Show Miss SAM Values Tables here  -->
                                                <div>
                                                    <div class="form-row mb-2 ml-2" id="showMissValues" style="overflow-x:auto;"></div>
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
                                        <script src="<?php echo base_url(); ?>assets/js/datagrid/datatables/datatables.bundle.js"></script>

                                        <script src="<?php echo base_url(); ?>Assets/select/select2.min.js"></script>
                                        <script>
                                            function showMissValues() {
                                                $("#ActivityData").hide();
                                                $("#showMissValues").html(' ');
                                                url = "<?php echo base_url('MIS/Efficiency/missingValues') ?>"
                                                $.post(url, function(data) {
                                                    console.log(data)
                                                    var table = '';
                                                    table += ` <table class="table table-responsive" id="showMissTable">
                        <thead>
                          <tr>
                            <th>Factory Code</th>
                            <th>Year</th>
                            <th>Carcas</th>
                            <th>Lamination</th>
                            <th>Sheet Sizing</th>
                            <th>Panel Cutting</th>
                            <th>Panel_Preparation</th>
                            <th>Assembly</th>
                            <th>Labelling_packaging</th>
                            <th>Bladder Winding</th>
                          </tr>
                        </thead>
                        <tbody>`




                                                    data.forEach(e => {
                                                        table += `<tr>
                              <td> ${e.FactoryCode}</td>
                              <td contentEditable="true"> ${e.SesonalRange}</td>
                              <td contentEditable="true"> ${e.Carcase}</td>
                              <td contentEditable="true">  ${e.Lamination}</td>
                              <td contentEditable="true">${e.SheetSizing} </td>
                              <td contentEditable="true">  ${e.Panel_Cutting}</td>
                              <td contentEditable="true"> ${e.panel_preperation}</td>
                              <td contentEditable="true"> ${e.Assembling}</td>
                              <td contentEditable="true"> ${e.labelingandPacking}</td>
                              <td contentEditable="true"> ${e.bladder_Winding}</td>
                            </tr>`
                                                    });





                                                    table += `</tbody>
                      </table>`

                                                    $("#showMissValues").append(table)
                                                    $(document).ready(function() {
                                                        // LoadData(stDate, enDate);

                                                        $('#showMissTable').dataTable({
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

                                                })
                                            }

                                            

                                            function showForm(factorCode, years) {
                                                $("#showMissTable").hide();
                                                var year = $("#year").val();
                                                $("#showForm").html(' ');
                                                url = "<?php echo base_url('MIS/Efficiency/getFactoryCode_with_year') ?>"
                                                $.post(url, {
                                                    "factory_code": factorCode,
                                                    "year": year
                                                }, function(data) {
                                                    console.log(data)

                                                    if (data[0]['FactoryCode'] == 'B34001' && data['year'] == year) {

                                                        var table = '';
                                                        table += ` <table class="table table-responsive" id="ActivityData">
                        <thead>
                          <tr>
                            <th>Article Code</th>
                            <th>Panel Shape</th>
                            <th>Complexity Level</th>
                            <th>Carcas</th>
                            <th>Lamination</th>
                            <th>Sheet Sizing</th>
                            <th>Panel Cutting</th>
                            <th>Panel_Preparation</th>
                            <th>Assembly</th>
                            <th>Labelling_packaging</th>
                           
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>`




                                                        data.forEach(e => {
                                                            table += `<tr>
                              <td> ${e.ArtCode}</td>
                              <td> ${e.PanelShape}</td>
                              <td id="Carcase01" contentEditable="true"> ${e.Clevel}</td>
                              <td id="Carcase01" contentEditable="true"> ${e.Carcase}</td>
                              <td id="Lamination01" contentEditable="true">  ${e.Lamination}</td>
                              <td id="SheetSizing01" contentEditable="true">${e.SheetSizing} </td>
                              <td id="Panel_Cutting01" contentEditable="true">  ${e.Panel_Cutting}</td>
                              <td id="panel_preperation01" contentEditable="true"> ${e.panel_preperation}</td>
                              <td id="Assembling01" contentEditable="true"> ${e.Assembling}</td>
                              <td id="labelingandPacking01" contentEditable="true"> ${e.labelingandPacking}</td>
                              <td>
                                <button type="button" style="display: inline-block;" class="btn btn-info btn-xs " id="btn" onclick="updateArt(${e.ClientID},${e.ModelID},${e.ArtID},'${e.FactoryCode}')"><i class="fal fa-edit" aria-hidden="true"></i></button>
                              </td>
                            </tr>`
                                                        });





                                                        table += `</tbody>
                      </table>`

                                                        $("#showForm").append(table)
                                                    } else if (data[0]['FactoryCode'] == 'B34005') {

                                                        var table = '';
                                                        table += ` <table class="table table-responsive" id="ActivityData">
                        <thead>
                          <tr>
                            <th>Article Code</th>
                            <th>Panel Shape</th>
                            <th>Complexity Level</th>
                            <th>Bladder Winding</th>
                            <th>Sheet Sizing</th>
                            <th>Panel Cutting</th>
                            <th>Panel_Preparation</th>
                            <th>Assembly</th>
                            <th>Labelling_packaging</th>
                           
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>`




                                                        data.forEach(e => {
                                                            table += `<tr>
                              <td> ${e.ArtCode}</td>
                              <td> ${e.PanelShape}</td>
                              <td id="Carcase01" contentEditable="true"> ${e.Clevel}</td>
                              <td id="bladder_Winding05" contentEditable="true"> ${e.bladder_Winding}</td>
                              <td id="SheetSizing05" contentEditable="true">${e.SheetSizing} </td>
                              <td id="Panel_Cutting05" contentEditable="true">  ${e.Panel_Cutting}</td>
                              <td id="panel_preperation05" contentEditable="true"> ${e.panel_preperation}</td>
                              <td id="Assembling05" contentEditable="true"> ${e.Assembling}</td>
                              <td id="labelingandPacking05" contentEditable="true"> ${e.labelingandPacking}</td>
                              <td>
                                <button type="button" style="display: inline-block;" class="btn btn-info btn-xs " id="btn" onclick="updateArt(${e.ClientID},${e.ModelID},${e.ArtID},'${e.FactoryCode}')"><i class="fal fa-edit" aria-hidden="true"></i></button>
                              </td>
                            </tr>`
                                                        });





                                                        table += `</tbody>
                      </table>`

                                                        $("#showForm").append(table)
                                                    } else if (data[0]['FactoryCode'] == 'B34006') {
                                                        var table = '';
                                                        table += ` <table class="table table-responsive" id="ActivityData">
                        <thead>
                          <tr>
                            <th>Article Code</th>
                            <th>Panel Shape</th>
                            <th>Complexity Level</th>
                            <th>Sheet Sizing</th>
                            <th>Hf Cutting</th>
                            <th>Assembly</th>
                            <th>Labelling_packaging</th>
                           
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>`




                                                        data.forEach(e => {
                                                            table += `<tr>
                              <td > ${e.ArtCode}</td>
                              <td> ${e.PanelShape}</td>
                              <td id="Carcase01" contentEditable="true"> ${e.Clevel}</td>
                              <td id="SheetSizing06" contentEditable="true">${e.SheetSizing} </td>
                              <td id="HFCutting06" contentEditable="true">  ${e.HFCutting}</td>
                           
                              <td id="Assembling06" contentEditable="true"> ${e.Assembling}</td>
                              <td id="labelingandPacking06" contentEditable="true"> ${e.labelingandPacking}</td>
                              <td>
                                <button type="button" style="display: inline-block;" class="btn btn-info btn-xs " id="btn" onclick="updateArt(${e.ClientID},${e.ModelID},${e.ArtID},'${e.FactoryCode}')"><i class="fal fa-edit" aria-hidden="true"></i></button>
                              </td>
                            </tr>`
                                                        });





                                                        table += `</tbody>
                      </table>`

                                                        $("#showForm").append(table)
                                                    } else if (data[0]['FactoryCode'] == 'B34007') {
                                                        var table = '';
                                                        table += ` <table class="table table-responsive" id="ActivityData">
                        <thead>
                          <tr>
                          <th>Article Code</th>
                          <th>Panel Shape</th>
                            <th>Complexity Level</th>
                            <th>Carcas</th>
                            <th>Fabric Lamination</th>
                            <th>Hf Cutting</th>
                            <th>Panel Cutting</th>
                           
                            <th>Assembly</th>
                            <th>Labelling_packaging</th>
                           
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>`




                                                        data.forEach(e => {
                                                            table += `<tr>
                              <td> ${e.ArtCode}</td>
                              <td> ${e.PanelShape}</td>
                              <td id="Carcase01" contentEditable="true"> ${e.Clevel}</td>
                              <td id="Carcase07" contentEditable="true">${e.Carcase} </td>
                              <td id="Lamination07" contentEditable="true">  ${e.Lamination}</td>
                              <td id="HFCutting07" contentEditable="true">  ${e.HFCutting}</td>
                              <td id="Panel_Cutting07" contentEditable="true">  ${e.Panel_Cutting}</td>
                           
                              <td id="Assembling07" contentEditable="true"> ${e.Assembling}</td>
                              <td id="labelingandPacking07" contentEditable="true"> ${e.labelingandPacking}</td>
                              <td>
                                <button type="button" style="display: inline-block;" class="btn btn-info btn-xs " id="btn" onclick="updateArt(${e.ClientID},${e.ModelID},${e.ArtID},'${e.FactoryCode}')"><i class="fal fa-edit" aria-hidden="true"></i></button>
                              </td>
                            </tr>`
                                                        });





                                                        table += `</tbody>
                      </table>`

                                                        $("#showForm").append(table)
                                                    } else {
                                                        var table = '';
                                                        table += ` <table class="table table-responsive" id="ActivityData">
                        <thead>
                          <tr>
                          <th>Article Code</th>
                          <th>Panel Shape</th>
                            <th>Complexity Level</th>
                            <th>Carcas</th>
                            <th>Lamination</th>
                            <th>Panel Cutting</th>
                           
                            <th>Assembly</th>
                            <th>Labelling_packaging</th>
                           
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>`




                                                        data.forEach(e => {
                                                            table += `<tr>
                              <td> ${e.ArtCode}</td>
                              <td> ${e.PanelShape}</td>
                              <td id="Carcase01" contentEditable="true"> ${e.Clevel}</td>
                              <td id="Carcase" contentEditable="true">${e.Carcase} </td>
                              <td id="Lamination" contentEditable="true">  ${e.Lamination}</td>
                              <td id="Panel_Cutting" contentEditable="true">  ${e.Panel_Cutting}</td>
                           
                              <td id="Assembling" contentEditable="true"> ${e.Assembling}</td>
                              <td id="labelingandPacking" contentEditable="true"> ${e.labelingandPacking}</td>
                              <td>
                                <button type="button" style="display: inline-block;" class="btn btn-info btn-xs " id="btn" onclick="updateArt(${e.ClientID},${e.ModelID},${e.ArtID},'${e.FactoryCode}')"><i class="fal fa-edit" aria-hidden="true"></i></button>
                              </td>
                            </tr>`
                                                        });





                                                        table += `</tbody>
                      </table>`

                                                        $("#showForm").append(table)
                                                    }



                                                    $(document).ready(function() {
                                                        // LoadData(stDate, enDate);

                                                        $('#ActivityData').dataTable({
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
                                                })
                                            }
                                            $(document).ready(function() {
                                                //alert("Heloo");
                                                // 

                                                loadarticle();
                                            });

                                            function loadarticle() {
                                                //alert("load");
                                                $('#factory').select2();
                                                url = "<?php echo base_url('MIS/Efficiency/samValue1/'); ?>";

                                                $.get(url, function(data) {
                                                    let parsed = JSON.parse(data);
                                                    var appendArticle = '';
                                                    console.log(parsed);
                                                    parsed.forEach(element => {

                                                        appendArticle += `
                 
                                       <option value='${element.ArtCode}'>${element.ArtCode}</option>`
                                                    })
                                                    $("#factory").append(appendArticle)
                                                });
                                            }

                                            function loadData() {

                                                let article = $("#factory").val();

                                                url = "<?php echo base_url('MIS/Efficiency/loadArticleStuff/'); ?>";
                                                // alert(url);
                                                $.get(url, {
                                                    article
                                                }, function(data) {
                                                    let parsed = JSON.parse(data);
                                                    console.log("pasrsed data", parsed);
                                                    document.getElementById("model").value = parsed[0].ModelName
                                                    document.getElementById("factoryCode").value = parsed[0].FactoryCode
                                                    document.getElementById("forming").value = parsed[0].SAMForming
                                                    document.getElementById("packing").value = parsed[0].SAMPacking
                                                    document.getElementById("clientID").value = parsed[0].ClientID
                                                    document.getElementById("articleID").value = parsed[0].ArtID
                                                    document.getElementById("modelID").value = parsed[0].ModelID
                                                    document.getElementById("workno").value = parsed[0].WorkNo
                                                })
                                            }

                                            $("#update").on("click", function() {

                                                let articleID = $("#articleID").val();
                                                let clientID = $("#clientID").val();
                                                let modelID = $("#modelID").val();
                                                let forming = $("#forming").val();
                                                let packing = $("#packing").val();
                                                let workno = $("#workno").val();
                                                url = "<?php echo base_url('MIS/Efficiency/updateSam/'); ?>";


                                                $.post(url, {
                                                    articleID,
                                                    clientID,
                                                    modelID,
                                                    forming,
                                                    packing,
                                                    workno
                                                }, function(data) {
                                                    console.log(data);
                                                    alert('Updated Successfully');
                                                    window.location.reload();

                                                })
                                            })
                                        </script>

                                    <?php } else {
                                    redirect('Welcome/index');
                                }
                                    ?>

                                    </div>
                                    <script>
                                        function updateArt(client, model, article, factory) {

                                            if (factory == 'B34001') {

                                                Carcase = $("#Carcase01").text()
                                                Lamination = $("#Lamination01").text()
                                                SheetSizing = $("#SheetSizing01").text()
                                                //  SheetSizing= document.getElementById('SheetSizing01').innerText
                                                HF_Cutting = $("#Panel_Cutting01").text()
                                                Panel_Preparation = $("#panel_preperation01").text()
                                                //  Panel_Preparation=document.getElementById('Panel_Preparation01').innerText
                                                Assembling = $("#Assembling01").text()
                                                labelingandPacking = $("#labelingandPacking01").text()

                                                url = "<?php echo base_url('MIS/Efficiency/updateArt01') ?>"

                                                $.post(url, {
                                                    "client": client,
                                                    "model": model,
                                                    "article": article,
                                                    "Carcase": Carcase,
                                                    "Lamination": Lamination,
                                                    "SheetSizing": SheetSizing,
                                                    "HF_Cutting": HF_Cutting,
                                                    "Panel_Preparation": Panel_Preparation,
                                                    "Assembling": Assembling,
                                                    "labelingandPacking": labelingandPacking
                                                }, function(data) {

                                                    console.log(data);
                                                    alert("Data Updated Successfully!")
                                                    location.reload();
                                                })
                                            } else if (factory == 'B34005') {
                                                bladder_Winding = $("#bladder_Winding05").text()
                                                SheetSizing = $("#SheetSizing05").text()
                                                Panel_Cutting = $("#Panel_Cutting05").text()
                                                Panel_Preparation = $("#panel_preperation05").text()
                                                Assembling = $("#Assembling05").text()
                                                labelingandPacking = $("#labelingandPacking05").text()

                                                // if (Panel_Preparation = '') {
                                                //     Panel_Preparation = null
                                                // }
                                                alert(Panel_Preparation)

                                                url = "<?php echo base_url('MIS/Efficiency/updateArt05') ?>"

                                                $.post(url, {
                                                    "client": client,
                                                    "model": model,
                                                    "article": article,
                                                    "bladder_Winding": bladder_Winding,
                                                    "SheetSizing": SheetSizing,
                                                    "Panel_Cutting": Panel_Cutting,
                                                    "Panel_Preparation": Panel_Preparation,
                                                    "Assembling": Assembling,
                                                    "labelingandPacking": labelingandPacking
                                                }, function(data) {

                                                    console.log(data);
                                                    alert("Data Inserted Successfully!")
                                                    location.reload();
                                                })
                                            } else if (factory == 'B34006') {

                                                SheetSizing = $("#SheetSizing06").text()
                                                HF_Cutting = $("#HFCutting06").text()
                                                Assembling = $("#Assembling06").text()
                                                labelingandPacking = $("#labelingandPacking06").text()

                                                url = "<?php echo base_url('MIS/Efficiency/updateArt06') ?>"

                                                $.post(url, {
                                                    "client": client,
                                                    "model": model,
                                                    "article": article,
                                                    "SheetSizing": SheetSizing,
                                                    "HF_Cutting": HF_Cutting,
                                                    "Assembling": Assembling,
                                                    "labelingandPacking": labelingandPacking
                                                }, function(data) {

                                                    console.log(data);
                                                    alert("Data Inserted Successfully!")
                                                    location.reload();
                                                })
                                            } else if (factory == 'B34007') {
                                                Carcase = $("#Carcase07").text()
                                                Lamination = $("#Lamination07").text()
                                                HF_Cutting = $("#HFCutting07").text()
                                                Panel_Cutting = $("#Panel_Cutting07").text()
                                                Assembling = $("#Assembling07").text()
                                                labelingandPacking = $("#labelingandPacking07").text()

                                                url = "<?php echo base_url('MIS/Efficiency/updateArt07') ?>"

                                                $.post(url, {
                                                    "client": client,
                                                    "model": model,
                                                    "article": article,
                                                    "Carcase": Carcase,
                                                    "Lamination": Lamination,
                                                    "HF_Cutting": HF_Cutting,
                                                    "Panel_Cutting": Panel_Cutting,
                                                    "Assembling": Assembling,
                                                    "labelingandPacking": labelingandPacking
                                                }, function(data) {

                                                    console.log(data);
                                                    alert("Data Inserted Successfully!")
                                                    location.reload();
                                                })
                                            } else {
                                                Carcase = $("#Carcase").text()
                                                Lamination = $("#Lamination").text()
                                                Panel_Cutting = $("#Panel_Cutting").text()
                                                Assembling = $("#Assembling").text()
                                                labelingandPacking = $("#labelingandPacking").text()

                                                url = "<?php echo base_url('MIS/Efficiency/updateArt') ?>"

                                                $.post(url, {
                                                    "client": client,
                                                    "model": model,
                                                    "article": article,
                                                    "Carcase": Carcase,
                                                    "Lamination": Lamination,
                                                    "Panel_Cutting": Panel_Cutting,
                                                    "Assembling": Assembling,
                                                    "labelingandPacking": labelingandPacking
                                                }, function(data) {

                                                    console.log(data);
                                                    alert("Data Inserted Successfully!")
                                                    location.reload();
                                                })
                                            }

                                        }
                                    </script>
                    </main>
                </div>
            </div>
        </div>
    </div>

<?php

}
?>
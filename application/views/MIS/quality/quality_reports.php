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
                            <li class="breadcrumb-item">Quality Reports</li>


                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>

                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-chart-area'></i>QR (Quality Reports)</span>

                            </h1>
                        </div>

                        <!-- Start here with columns -->
                        <!doctype html>
                        <?php
                        if ($this->session->userdata('userStus') == 1) {
                        ?>
                            <html class="no-js" lang="en">
                            <!--<![endif]-->

                            <link href="<?php link_file('assets/qa_assets/main.css') ?>" rel="stylesheet">
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
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="col-md-2">
                                                        <div class="position-relative form-group">
                                                            <label for="factory" class="">Factory Code</label>
                                                            <select name="factory" id="factory" class="form-control" onchange="getLfb()">
                                                                <option value="">Select Factory Code</option>
                                                                <option value="B34001">Hand Stitched Ball</option>
                                                                <option value="B34002">Competition Ball</option>
                                                                <option value="B34003">Finale Ball</option>
                                                                <option value="B34004">Urban Ball</option>
                                                                <option value="B34005">Machine Stitch Ball</option>
                                                                <option value="B34006">Airless Mini Ball</option>
                                                                <option value="B34007">LFB Ball</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="position-relative form-group">
                                                            <label for="start_date" class="">Start Date</label>
                                                            <input name="start_date" id="start_date" type="date" class="form-control" value="<?php current_date(); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="position-relative form-group">
                                                            <label for="end_date" class="">End Date</label>
                                                            <input name="end_date" id="end_date" type="date" class="form-control" value="<?php current_date(); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="position-relative form-group">
                                                            <label for="report" class="">Select Report</label>
                                                            <select name="report" id="report" class="form-control">

                                                                <option>Select Report</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 d-none" id='line-option'>
                                                        <div class="position-relative form-group">
                                                            <label for="line" class="">Select Line</label>
                                                            <select name="line" id="line" class="form-control">
                                                                <option value="all">All</option>
                                                                <option value="3">Line # 1</option>
                                                                <option value="4">Line # 2</option>
                                                                <option value="5">Line # 3</option>
                                                                <option value="6">Line # 4</option>
                                                                <option value="7">Line # 5</option>
                                                                <option value="8">Line # 6</option>
                                                                <option value="9">Line # 7</option>
                                                                <option value="10">Line #8</option>
                                                                <option value="11">Line # 9</option>
                                                                <option value="16">Line # 10</option>
                                                                <option value="17">Line # 11</option>
                                                                <option value="18">Line # 12</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 d-none" id="article-option">
                                                        <div class="position-relative form-group">
                                                            <label for="line" class="">Select Artcode</label>
                                                            <select name="article" id="article" class="form-control">
                                                                <option value="all">All</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="position-relative form-group">
                                                            <button class="btn btn-success btn-block" id="search" style="margin-top:1.25rem; font-size:1.05rem;">Search</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3">
                                            <div class="col-12" id="content">

                                            </div>
                                        </div>
                                        <div class="card mb-3 mt-2">
                                            <div class="col-12" id="content2">

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

                                    <script>
                                        $(document).ready(function() {

                                            $('#report').change(function() {
                                                showLines();
                                                showArticles()
                                            })

                                            $('#factory').change(function() {
                                                showLines()
                                                updateArticles($(this).val())
                                                showArticles()
                                                showLFB()
                                            })

                                            function showLines() {
                                                fc = $('#factory').val();
                                                rpt = $('#report').val();
                                                $('#line').val('all')
                                                url = "<?php echo base_url('MIS/Quality/getLines/') ?>" + fc
                                                if ((fc == 'B34006' || fc == 'B34005') && rpt == 'summary') {
                                                    lines = '<option value="all">All</option>'
                                                    $.get(url, function(res) {
                                                        data = res.data
                                                        for (i = 0; i < data.length; i++) {
                                                            lines += '<option value="' + data[i].LineID + '">' + data[i].LineName +
                                                                '</option>'
                                                        }
                                                        $('#line').html(lines);
                                                        $('#line-option').removeClass('d-none');
                                                    })

                                                } else {
                                                    $('#line-option').addClass('d-none');
                                                }
                                            }

                                            function showArticles() {
                                                fc = $('#factory').val();
                                                rpt = $('#report').val();
                                                $('#article').val('all')
                                                if (rpt == 'datewise' || (fc == 'B34001' && rpt == 'summary')) {
                                                    $('#article-option').removeClass('d-none');
                                                    console.log(article - option);
                                                } else {
                                                    $('#article-option').addClass('d-none');
                                                }
                                            }

                                            function showLFB() {
                                                fc = $('#factory').val();
                                                if (fc == 'B34007') {
                                                    getLfb()
                                                }
                                            }
                                            width = $('.card').width();


                                            $('#search').click(function() {
                                                fc = $('#factory').val();
                                                report = $('#report').val()
                                                if (fc == '') {
                                                    $('#content').html(
                                                        '<h4 class="alert alert-danger">Please select a factory code</h4>')
                                                    return;
                                                }
                                                if (report == '') {
                                                    $('#content').html('<h4 class="alert alert-danger">Please select a report</h4>')
                                                    return;
                                                }
                                                $('#content').html('<h4 class="p-4 text-center text-primary">Loading...</h4>')

                                                if(fc == 'B34005'){
                                                    start_date = $('#start_date').val();
                                                    end_date = $('#end_date').val();
                                                    url = "<?php echo base_url('MIS/Quality/MsEmployeeWiseSum/') ?>"
                                                    $.post(url, {
                                                        start_date: start_date,
                                                        end_date: end_date,
                                                        },function(data) {
                                                        if (data) {
                                                            html = `<h2 class="mt-4">Employee wise sum from <b>`+start_date +` To `+ end_date +`</b> </h2>
                                                            <table id="table1" class="table table-bordered table-hover table-striped">
                                                            <thead class="bg-primary-200">
                                                            <tr style="color:white;">
                                                                <th>Date</th>
                                                                <th>Line No </th>
                                                                <th>Total Checked</th>
                                                                <th> Pass </th>
                                                                <th> Fail </th>
                                                                <th>RFT</th>
                                                                <th>UserName</th>
                                                                <th>Card No</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>`;
                                                            var totalcheckedSum = 0;
                                                            var totalPassSum = 0;
                                                            var totalFailSum = 0;
                                                            data.forEach(element => {
                                                                totalcheckedSum += parseInt(element.TotalChecked);
                                                                totalPassSum += parseInt(element.Pass);
                                                                if(element.Fail != ".00"){
                                                                    totalFailSum += parseInt(element.Fail);
                                                                }
                                                                html += `
                                                                    <tr>
                                                                <td>${element.DateName.split("00:00:00")[0]}</td>
                                                                <td>${element.LineName}</td>
                                                                <td>${element.TotalChecked.split(".00")[0]}</td>
                                                                <td>${element.Pass.split(".00")[0]}</td>
                                                                <td>${element.Fail.split(".00")[0]}</td>
                                                                <td>` + parseInt((element.Pass/element.TotalChecked)*100)+ `%</td>
                                                                <td>${element.UserName}</td>
                                                                <td>${element.CardNo}</td>
                                                                </tr>`


                                                            });
                                                            html += `</tbody>
                                                            <tfoot class="bg-primary-200">
                                                                <tr style="color:white;">
                                                                <td></td>
                                                                <td></td>
                                                                <td class="font-weight-bold">Total Checked = ` +totalcheckedSum+ `</td>
                                                                <td class="font-weight-bold">Total Pass = ` +totalPassSum+ `</td>
                                                                <td class="font-weight-bold">Total Fail = ` +totalFailSum+ `</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                </tr>
                                                            </tfoot>
                                                            </table>`;

                                                            $("#content2").html(html);

                                                        }
                                                        $('#table1').dataTable({
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
                                                        // fillReport(data, true);
                                                    })
                                                }else{
                                                    $('#content2').html('');
                                                }

                                                switch (fc) {

                                                    case 'B34006':
                                                        switch (report) {
                                                            case 'summary':
                                                                getAmbSummary();
                                                                break;
                                                            case 'datewise':
                                                                getAmbArticleDateWise();
                                                                break;
                                                        }
                                                        break;
                                                    case 'B34007':
                                                        switch (report) {
                                                            //alert("helo i am here too")
                                                            case '1':
                                                                showSheetSizing();
                                                                break;
                                                            case '2':
                                                                printing_cutting();
                                                                break;
                                                            case '3':
                                                                assembling();
                                                                break;
                                                            case '4':
                                                                final_qc();
                                                                break;
                                                            case '5':
                                                                carcas();
                                                                break;
                                                        }
                                                        break;
                                                    case 'B34002':
                                                    case 'B34003':
                                                    case 'B34004':
                                                        switch (report) {
                                                            case 'summary':
                                                                getTMSummary();
                                                                break;
                                                            case 'datewise':
                                                                getTMArticleWise();
                                                                break;
                                                        }
                                                        break;

                                                    case 'B34005':
                                                        switch (report) {
                                                            case 'summary':
                                                                showMSSummary();
                                                                break;
                                                            case 'datewise':
                                                                getMSArtwise();
                                                                break;
                                                            case 'Bladder':
                                                                getBladder();
                                                                break;
                                                            default: 
                                                                
                                                        }
                                                        break;
                                                    case 'B34001':
                                                        switch (report) {
                                                            case 'summary':
                                                                showHSSummary();
                                                                break;
                                                            case 'datewise':
                                                                showHSArticleWise();
                                                                break;
                                                        }
                                                        break;


                                                    default:
                                                        break;
                                                }
                                            })

                                            function getBladder() {
                                                //alert('shoaib')
                                                start_date = $('#start_date').val();
                                                end_date = $('#end_date').val();
                                                art = $('#article').val();
                                                url = "<?php echo base_url('MIS/Quality/get_ms_bladder/') ?>" + start_date + '/' + end_date
                                                // alert(url);
                                                $.get(url, function(data) {
                                                    // alert(url);
                                                    fillReport(data, true, true)
                                                })
                                            }

                                            function showSheetSizing() {
                                                start_date = $('#start_date').val();
                                                end_date = $('#end_date').val();

                                                url = "<?php echo base_url('Lfb/get_Lfb_Sheet_Sizing/') ?>" + start_date + "/" + end_date
                                                //alert(url);
                                                $.get(url, function(data) {
                                                    fillReport(data)
                                                })
                                            }

                                            function printing_cutting() {
                                                start_date = $('#start_date').val();
                                                end_date = $('#end_date').val();
                                                url = "<?php echo base_url('Lfb/get_Lfb_printing_cutting/') ?>" + start_date + "/" + end_date
                                                //alert(url);
                                                $.get(url, function(data) {
                                                    fillReport(data)
                                                })
                                            }

                                            function assembling() {
                                                start_date = $('#start_date').val();
                                                end_date = $('#end_date').val();

                                                url = "<?php echo base_url('Lfb/get_Lfb_assembling/') ?>" + start_date + "/" + end_date
                                                //alert(url);
                                                $.get(url, function(data) {
                                                    fillReport(data)
                                                })
                                            }

                                            function final_qc() {
                                                //alert(' i am Final QC')
                                                start_date = $('#start_date').val();
                                                end_date = $('#end_date').val();

                                                url = "<?php echo base_url('Lfb/get_Lfb_final_qc/') ?>" + start_date + "/" + end_date
                                                //alert(url);
                                                $.get(url, function(data) {
                                                    fillReport(data, true)
                                                })
                                            }

                                            function carcas() {
                                                //alert("I am Carcas")
                                                start_date = $('#start_date').val();
                                                end_date = $('#end_date').val();

                                                url = "<?php echo base_url('Lfb/get_Lfb_Carcas/') ?>" + start_date + "/" + end_date
                                                //alert(url);
                                                $.get(url, function(data) {
                                                    fillReport(data, true)
                                                })
                                            }

                                            function showHSSummary() {
                                                start_date = $('#start_date').val();
                                                end_date = $('#end_date').val();
                                                art = $('#article').val();
                                                url = "<?php echo base_url('MIS/Quality/get_hs_summary/') ?>" + start_date + "/" + end_date + "/" +
                                                    art

                                                $.get(url, function(data) {
                                                    fillReport(data)
                                                })

                                            }

                                            function showHSArticleWise() {
                                                start_date = $('#start_date').val();
                                                end_date = $('#end_date').val();
                                                art = $('#article').val();
                                                url = "<?php echo base_url('MIS/Quality/get_hs_artwise/') ?>" + start_date + "/" + end_date + "/" +
                                                    art

                                                $.get(url, function(data) {
                                                    fillReport(data, true)
                                                })

                                            }

                                            function getTMArticleWise() {
                                                fc = $('#factory').val();
                                                start_date = $('#start_date').val();
                                                end_date = $('#end_date').val();
                                                art = $('#article').val();

                                                url = "<?php echo base_url('MIS/Quality/TMArticleDateWise/') ?>" + start_date + '/' + end_date +
                                                    "/" + fc + "/" + art
                                                //alert(url);
                                                $.get(url, function(data) {
                                                    fillReport(data, true, true)
                                                })
                                            }

                                            function getTMSummary() {
                                                fc = $('#factory').val();
                                                start_date = $('#start_date').val();
                                                end_date = $('#end_date').val();

                                                url = "<?php echo base_url('MIS/Quality/TMSummary/') ?>" + start_date + '/' + end_date + "/" + fc
                                                //alert(url);
                                                $.get(url, function(data) {
                                                    fillReport(data, true, true)
                                                })
                                            }

                                            function getAmbArticleDateWise() {
                                                start_date = $('#start_date').val();
                                                end_date = $('#end_date').val();
                                                art = $('#article').val();
                                                if (art == 'all') {
                                                    url = "<?php echo base_url('MIS/Quality/AmbArticleWiseDateWiseAll/') ?>" + start_date + '/' +
                                                        end_date
                                                    //alert(url);
                                                } else {
                                                    url = "<?php echo base_url('MIS/Quality/AmbArticleWiseDateWise/') ?>" + start_date + '/' +
                                                        end_date + "/" + art
                                                    //alert(url);
                                                }

                                                $.get(url, function(data) {
                                                    fillReport(data, true, true, true, true, true)
                                                })
                                            }

                                            function getAmbSummary() {
                                                start_date = $('#start_date').val();
                                                end_date = $('#end_date').val();
                                                line = $('#line').val();
                                                if (line == 'all') {
                                                    url = "<?php echo base_url('MIS/Quality/AmbReportAll/') ?>" + start_date + '/' + end_date
                                                    //alert(url);
                                                } else {
                                                    url = "<?php echo base_url('MIS/Quality/AmbReportLineWise/') ?>" + start_date + '/' + end_date +
                                                        "/" + line
                                                    //alert(url);
                                                }
                                                $.get(url, function(data) {
                                                    fillReport(data, true, true, true, true, true, true)
                                                })

                                            }

                                            function updateArticles() {
                                                fc = $("#factory").val();
                                                url = "<?php echo base_url('MIS/Quality/Articles/') ?>" + fc
                                                $.get(url, function(res) {
                                                    data = res.data
                                                    options = "<option value='all'>All</option>"
                                                    for (i = 0; i < data.length; i++) {
                                                        options += "<option>" + data[i].ArtCode + "</option>"
                                                    }

                                                    $("#article").html(options)

                                                })
                                            }

                                            function showMSSummary() {
                                                start_date = $('#start_date').val();
                                                end_date = $('#end_date').val();
                                                line = $('#line').val();
                                                url = "<?php echo base_url('MIS/Quality/get_ms_summary/') ?>" + line + "/" + start_date + "/" +
                                                    end_date

                                                $.get(url, function(data) {
                                                    fillReport(data, true)
                                                })
                                            }

                                            function getMSArtwise() {
                                                start_date = $('#start_date').val();
                                                end_date = $('#end_date').val();
                                                art = $('#article').val();
                                                url = "<?php echo base_url('MIS/Quality/get_ms_artwise/') ?>" + start_date + '/' + end_date + "/" +
                                                    art
                                                $.get(url, function(data) {
                                                    // alert(url);
                                                    fillReport(data, true)
                                                })
                                            }



                                            function getOptions(group) {
                                                var options = {
                                                    dom: 'Bfrtip',
                                                    buttons: [{
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

                                            function fillReport(data, group1, group2, group3, group4, group5, group6) {

                                                $('#content').css('width', width);
                                                $('#content').html(data);
                                                // $('#content2').css('width', width);
                                                // $('#content2').html(data);
                                                $('#forming-table').dataTable(getOptions(group1))
                                                $('#forming-table1').dataTable(getOptions(group1))
                                                $('#forming-table2').dataTable(getOptions(group1))
                                                $('#forming-RPtable').dataTable(getOptions(group1))
                                                $('#forming-RFtable').dataTable(getOptions(group1))

                                                $('#packing-table').dataTable(getOptions(group2))
                                                $('#packing-RPtable').dataTable(getOptions(group3))

                                                $('#packing-StationWise').dataTable(getOptions(group3))
                                                $('#FH-table').dataTable(getOptions(group1))
                                                $('#Po-table').dataTable(getOptions(group1))

                                            }

                                        })

                                        function getLfb() {
                                            //alert('hello');
                                            fc = $("#factory").val();
                                            //alert(fc);
                                            if (fc == "B34007") {
                                                url = "<?php echo base_url('MIS/Quality/getLfb') ?>"
                                                //alert(url);
                                                $.get(url, function(res) {
                                                    data = res.data
                                                    options = "<option value=''>Select Report</option>"
                                                    for (i = 0; i < data.length; i++) {
                                                        options += '<option value="' + data[i].ProcessID + '">' + data[i].name + '</option>'

                                                    }

                                                    $("#report").html(options)

                                                })
                                            } else {
                                                options = "<option value=''>Select Report</option>"
                                                for (i = 0; i < 1; i++) {
                                                    options += "<option value='summary'>" + 'Summary' + "</option>"
                                                    options += "<option value='datewise'>" + 'Art. Date Wise' + "</option>"
                                                    options += "<option value='Bladder'>" + 'Bladder' + "</option>"

                                                }

                                                $("#report").html(options)
                                            }
                                        }
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
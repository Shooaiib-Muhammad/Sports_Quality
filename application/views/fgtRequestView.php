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

                    <?php if ($this->session->flashdata('info')) { ?>
                        <div class="alert alert-danger alert-dismissible show fade" id="msgbox">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>&times;</span>
                                </button>
                                <?php echo $this->session->flashdata('info'); ?>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('danger')) { ?>
                        <div class="alert alert-danger alert-dismissible show fade" id="msgbox">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>&times;</span>
                                </button>
                                <?php echo $this->session->flashdata('danger'); ?>
                            </div>
                        </div>
                    <?php } ?>

                    <!--Start ADD FGT REQUEST MODAL -->
                    <div id="addFGTRequest" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(83,78,130);color:white;font-weight:bolder">
                                    <h1 class="modal-title" id="changeTitle">FGT Request</h1>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" style="color: white;">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form name="formDepartment" id="fgtRequestForm" method="POST">
                                        <input type="hidden" name="Id" id="IdValue" value="">

                                        <div class="row" style="display:flex">
                                            <input type="hidden" name="FGTId" id="FGTId" value="">
                                            <div class="col-md-6 mb-2">

                                                <label for="customFile">Article No</label>
                                                <select name="articleNo" id="articleNo" class="form-control" style="width: 100%;">
                                                    <?php
                                                    if (isset($articleNo)) {
                                                        foreach ($articleNo as $key) {
                                                    ?>
                                                            <option value="<?php echo $key['ArtCode']; ?>"><?php echo $key['ArtCode']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>

                                            </div>

                                            <div class="col-md-6 mb-2">

                                                <label for="customFile">working No</label>
                                                <input type="text" class="form-control" required id="workingNo" name="workingNo">
                                            </div>

                                            <div class="col-md-6 mt-2 mb-2">

                                                <label for="customFile">Model Name</label>
                                                <input type="text" class="form-control" required id="modelName" name="modelName">

                                            </div>

                                            <div class="col-md-6 mt-2 mb-2">

                                                <label for="customFile">Size</label>
                                                <input type="text" class="form-control" required id="size" name="size">

                                            </div>

                                            <!-- <div class="col-md-6 mb-2">

                                                <label for="customFile">Quantity Returned</label>
                                                <input type="number" class="form-control" id="qReturned" name="qReturned">

                                            </div> -->

                                            <div class="col-md-6 mb-2">

                                                <label for="customFile">Ball Type</label>
                                                <input type="text" class="form-control" required id="ballType" name="ballType">

                                            </div>

                                            <div class="col-md-6 mb-2">

                                                <label for="customFile">Main Material Colour</label>
                                                <input type="text" class="form-control" required id="mainMatCol" name="mainMatCol">

                                            </div>

                                            <div class="col-md-6 mb-2">

                                                <label for="customFile">Cover Material</label>
                                                <input type="text" class="form-control" required id="coverMat" name="coverMat">

                                            </div>

                                            <div class="col-md-6 mb-2">

                                                <label for="customFile">Backing</label>
                                                <input type="text" class="form-control" required id="backing" name="backing">

                                            </div>
                                            <div class="col-md-6 mb-2">

                                                <label for="customFile">Bladder Details</label>
                                                <input type="text" class="form-control" required id="bladderDetails" name="bladderDetails">

                                            </div>
                                            <div class="col-md-6 mb-2">

                                                <label for="customFile">Production Month</label>
                                                <input type="date" class="form-control" required id="prodMonth" name="prodMonth">

                                            </div>
                                            <div class="col-md-6 mb-2">

                                                <label for="customFile">Printing Color</label>
                                                <input type="text" class="form-control" required id="printColor" name="printColor">

                                            </div>
                                            <div class="col-md-6 mb-2">

                                                <label for="customFile">Panel Shape</label>
                                                <input type="text" class="form-control" required id="panelShape" name="panelShape">

                                            </div>
                                            <div class="col-md-6 mb-2">

                                                <label for="customFile">Test Type</label>
                                                <select name="testType" id="testType" class="form-control">
                                                    <?php
                                                    if (isset($TestTypes)) {
                                                        foreach ($TestTypes as $testtype) {
                                                    ?>
                                                            <option value="<?php echo $testtype['Name']; ?>"><?php echo $testtype['Name']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>

                                            </div>
                                            <div class="col-md-6 mb-2">

                                                <label for="customFile">Delivering Quantity</label>
                                                <input type="number" class="form-control" required id="dQuantity" name="dQuantity">

                                            </div>
                                            <div class="col-md-12 mb-2">

                                                <label for="customFile">Any Additional Information</label>
                                                <textarea class="form-control" id="anyInfo" required name="anyInfo"></textarea>

                                            </div>
                                            <!-- <div class="col-md-6">

                                            <label for="customFile">Signature of request person</label>
                                            <input type="text" class="form-control" id="sign" name="sign">

                                            </div> -->


                                        </div>
                                        <div class="col-md-6 mt-4">

                                            <button type="submit" class="btn btn-primary" id="saveFGTBtn">Save</button>
                                            <button type="submit" class="btn btn-primary" id="updateFGTBtn">Update</button>

                                        </div>


                                    </form>

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                    <!--End ADD FGT REQUEST MODAL -->


                    <!-- Model FGT TESTING HTML -->
                    <?php include('FGT_Models/fgtTestingModel.php') ?>
                    <?php include('FGT_Models/fgtTestingAirlessMiniModel.php') ?>
                    <?php include('FGT_Models/fgtTestingAdhesionModel.php') ?>
                    <?php include('FGT_Models/fgtTestingCSMModel.php') ?>
                    <!-- End Model FGT TESTING  HTML -->

                    <br><br>
                    <div class="row">
                        <div class="col-md-12">



                            <div class="col-md-12">

                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            <i class='subheader-icon fal fa-vial'></i> FGT Requests</span>
                                            <i class="bi bi-bootstrap-reboot" aria-hidden="true">Refresh</i>
                                        </h2>

                                        <?php
                                        $Uploading = $this->session->userdata('Uploading');
                                        $RS = $this->session->userdata('ReviewStatus');
                                        $AS = $this->session->userdata('ApprovalStatus');
                                        $userdata = $this->session->userdata();
                                        $user_id = $this->session->userdata('user_id');
                                        ?>



                                    </div>


                                    <div class="panel-container show">

                                        <div class="panel-content">

                                            <button class="btn btn-primary float-right" id="addFGTModal">Add FGT Request</button>

                                            <ul class="nav nav-pills" role="tablist">
                                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab_direction-1">Generated Requests</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-2">Aknowledged By Lab </a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-3">Historical Requests </a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-4">FGT Requests Status</a></li>
                                            </ul>

                                            <div class="tab-content py-3">

                                                <div class="tab-pane fade show active" id="tab_direction-1" role="tabpanel">
                                                    <?php
                                                    $Month = date('m');
                                                    $Year = date('Y');
                                                    $Day = date('d');
                                                    $CurrentDate = $Year . '-' . $Month . '-' . $Day;
                                                    ?>

                                                    <div id="fgtRequestData1">

                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="tab_direction-2" role="tabpanel">
                                                    <?php
                                                    $Month = date('m');
                                                    $Year = date('Y');
                                                    $Day = date('d');
                                                    $CurrentDate = $Year . '-' . $Month . '-' . $Day;
                                                    ?>
                                                    <div id="fgtRequestData2">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade mt-2" id="tab_direction-3" role="tabpanel">
                                                    <?php
                                                    $Month = date('m');
                                                    $Year = date('Y');
                                                    $Day = date('d');
                                                    $CurrentDate = $Year . '-' . $Month . '-' . $Day;
                                                    ?>
                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            <div id="panel-1" class="panel">
                                                                <div class="panel-hdr">
                                                                    <h2>Date Filteration</h2>
                                                                </div>
                                                                <div class="row m-2">
                                                                    <div class="col-md-3"><input class="form-control" type="date" id="date1" />
                                                                    </div>
                                                                    <div class="col-md-3"><input class="form-control" type="date" id="date2" />
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <select name="factoryCode" id="factoryCode" class="form-control">
                                                                            <option value="">Select Factory Code</option>
                                                                            <option value="B34002">B34002</option>
                                                                            <option value="B34003">B34003</option>
                                                                            <option value="B34004">B34004</option>
                                                                            <option value="B34005">B34005</option>
                                                                            <option value="B34006">B34006</option>
                                                                            <option value="B34007">B34007</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3"><button class="btn btn-primary" id="searchFGTtest">Search</button></div>
                                                                </div>
                                                                <div class="panel-container show m-2">
                                                                    <div id="tableData">


                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade mt-2" id="tab_direction-4" role="tabpanel">
                                                    <div class="row mx-4">
                                                        <div class="col-md-2 mt-3">
                                                            <label for="month">Select Month:</label>
                                                            <input type="month" class="form-control" id="getmonth">
                                                        </div>
                                                        <div class="col-md-4 mt-3">

                                                            <input type="button" value="Search" class="form-contorl mt-4" id="searchBtn">
                                                        </div>

                                                    </div>
                                                    <div class="row" id="counterShow">

                                                    </div>
                                                    <div class="row p-2 mt-4">
                                                        <div class="col-md-12" id="reportData">

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>




                            </div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
            </div>
        </div>
    </div>
    <!-- FGT ADD MODAL -->

    <script src="<?php echo base_url(); ?>/assets/js//jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script>
        $('.undobtn').click(function() {
            let id = this.id;
            let split_value = id.split(".");
            var TID = split_value[1];
            var proceed = confirm("Are you sure you want to Delete?");
            if (proceed) {
                url = "<?php echo base_url(''); ?>LabController/undoTestType/" + TID
                $.get(url, function(data) {
                    alert("Data Deleted Successfully");
                    location.reload();
                });
            } else {
                alert("Undo Cancel");
            }

        });


        $(".updatebtn").click(function(e) {
            $('#Modaldepartment').modal('toggle');
            let id = this.id;
            let split_value = id.split(".");
            var TID = split_value[1];
            $('#IdValue').val(TID);

        });

        $(".updatebtnBacktoSender").click(function(e) {
            let id = this.id;
            let split_value = id.split(".");
            var TID = split_value[1];
            let proceed = confirm("Are you sure you want send Results back to Requester?");
            if (proceed) {
                let quantity = prompt("Enter Quantity Returned");
                url = "<?php echo base_url(''); ?>LabController/TestRequestById";
                url2 = "<?php echo base_url(''); ?>LabController/EditTestRequestBackToSender";
                $.post(url, {
                    'Id': TID
                }, function(data, status) {
                    $.post(url2, {
                        'Id': TID,
                        'Quantity': quantity,
                        'receiverId': data[0].SRSenderID,
                        'senderId': data[0].SRReceiverID
                    }, function(data, status) {
                        alert("Data Updated Successfully! Click on Ok to Reload the Page")
                        window.location.reload();
                    });
                });
            } else {
                alert("Sending Cancel");
            }
        });

        $('#save').click(function(e) {
            e.preventDefault();
            let TID = $('#IdValue').val();
            let Sample_Receiving_Date = $('#recDate').val();
            let CSSNo = $('#cssNo').val();
            let Quantity_Received = $('#qReceived').val();
            let Quantity_Retained = $('#qRetained').val();
            let Quantity_Returned = $('#qReturned').val();
            let senderSignature = $('#sSignature').val();
            let Due_Date = $('#dueDate').val();
            let CompletationDate = $('#compDate').val();
            let Remarks = $('#Remarks').val();

            if (CSSNo.length <= 0) {
                alert("Kindly add CSS Number")
            } else {
                let url = "<?php echo base_url(''); ?>LabController/EditTestRequest"

                $.post(url, {
                        'TID': TID,
                        'CSSNo': CSSNo,
                        'Sample_Receiving_Date': Sample_Receiving_Date,
                        'Quantity_Received': Quantity_Received,
                        'Quantity_Retained': Quantity_Retained,
                        'Due_Date': Due_Date,
                        'CompletationDate': CompletationDate,
                        'Remarks': Remarks,
                        'senderSignature': senderSignature
                    },
                    function(data, status) {
                        alert("Data Updated Successfully! Click on Ok to Reload the Page")
                        window.location.reload();

                    });
            }

        });


        $(document).ready(function() {
            let currentDate = new Date().toJSON().substr(0, 10);
            $('#recDate').val(currentDate);
            $('#dueDate').val(currentDate);
            $('#compDate').val(currentDate);
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
            $('#ActivityData2').dataTable({
                responsive: false,
                lengthChange: true,
                lengthMenu: [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"],
                ],
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

            $('#ActivityData3').dataTable({
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

            $('#ActivityData4').dataTable({
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
    </script>

    <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
    <!-- BEGIN Page Footer -->
    <footer class="page-footer" role="contentinfo">
        <div class="d-flex align-items-center flex-1 text-muted">
            <span class="hidden-md-down fw-700">2021 © Forward Sports by&nbsp;IT Dept Forward Sports</span>
        </div>
        <div>

        </div>
    </footer>
    <scri src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></scri>
    <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js" integrity="sha512-d5Jr3NflEZmFDdFHZtxeJtBzk0eB+kkRXWFQqEc1EKmolXjHm2IKCA7kTvXBNjIYzjXfD5XzIjaaErpkZHCkBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>

    <!-- BEGIN Shortcuts -->
    <div class="modal fade modal-backdrop-transparent" id="modal-shortcut" tabindex="-1" role="dialog" aria-labelledby="modal-shortcut" aria-hidden="true">
        <div class="modal-dialog modal-dialog-top modal-transparent" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <ul class="app-list w-auto h-auto p-0 text-left">
                        <li>
                            <a href="intel_introduction.html" class="app-list-item text-white border-0 m-0">
                                <div class="icon-stack">
                                    <i class="base base-7 icon-stack-3x opacity-100 color-primary-500 "></i>
                                    <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                    <i class="fal fa-home icon-stack-1x opacity-100 color-white"></i>
                                </div>
                                <span class="app-list-name">
                                    Home
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="page_inbox_general.html" class="app-list-item text-white border-0 m-0">
                                <div class="icon-stack">
                                    <i class="base base-7 icon-stack-3x opacity-100 color-success-500 "></i>
                                    <i class="base base-7 icon-stack-2x opacity-100 color-success-300 "></i>
                                    <i class="ni ni-envelope icon-stack-1x text-white"></i>
                                </div>
                                <span class="app-list-name">
                                    Inbox
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="intel_introduction.html" class="app-list-item text-white border-0 m-0">
                                <div class="icon-stack">
                                    <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                    <i class="fal fa-plus icon-stack-1x opacity-100 color-white"></i>
                                </div>
                                <span class="app-list-name">
                                    Add More
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- END Shortcuts -->
    <!-- BEGIN Color profile -->
    <!-- this area is hidden and will not be seen on screens or screen readers -->
    <!-- we use this only for CSS color refernce for JS stuff -->
    <p id="js-color-profile" class="d-none">
        <span class="color-primary-50"></span>
        <span class="color-primary-100"></span>
        <span class="color-primary-200"></span>
        <span class="color-primary-300"></span>
        <span class="color-primary-400"></span>
        <span class="color-primary-500"></span>
        <span class="color-primary-600"></span>
        <span class="color-primary-700"></span>
        <span class="color-primary-800"></span>
        <span class="color-primary-900"></span>
        <span class="color-info-50"></span>
        <span class="color-info-100"></span>
        <span class="color-info-200"></span>
        <span class="color-info-300"></span>
        <span class="color-info-400"></span>
        <span class="color-info-500"></span>
        <span class="color-info-600"></span>
        <span class="color-info-700"></span>
        <span class="color-info-800"></span>
        <span class="color-info-900"></span>
        <span class="color-danger-50"></span>
        <span class="color-danger-100"></span>
        <span class="color-danger-200"></span>
        <span class="color-danger-300"></span>
        <span class="color-danger-400"></span>
        <span class="color-danger-500"></span>
        <span class="color-danger-600"></span>
        <span class="color-danger-700"></span>
        <span class="color-danger-800"></span>
        <span class="color-danger-900"></span>
        <span class="color-warning-50"></span>
        <span class="color-warning-100"></span>
        <span class="color-warning-200"></span>
        <span class="color-warning-300"></span>
        <span class="color-warning-400"></span>
        <span class="color-warning-500"></span>
        <span class="color-warning-600"></span>
        <span class="color-warning-700"></span>
        <span class="color-warning-800"></span>
        <span class="color-warning-900"></span>
        <span class="color-success-50"></span>
        <span class="color-success-100"></span>
        <span class="color-success-200"></span>
        <span class="color-success-300"></span>
        <span class="color-success-400"></span>
        <span class="color-success-500"></span>
        <span class="color-success-600"></span>
        <span class="color-success-700"></span>
        <span class="color-success-800"></span>
        <span class="color-success-900"></span>
        <span class="color-fusion-50"></span>
        <span class="color-fusion-100"></span>
        <span class="color-fusion-200"></span>
        <span class="color-fusion-300"></span>
        <span class="color-fusion-400"></span>
        <span class="color-fusion-500"></span>
        <span class="color-fusion-600"></span>
        <span class="color-fusion-700"></span>
        <span class="color-fusion-800"></span>
        <span class="color-fusion-900"></span>
    </p>
    <!-- END Color profile -->
    </div>
    </div>
    </div>
    <!-- END Page Wrapper -->
    <!-- BEGIN Quick Menu -->
    <!-- to add more items, please make sure to change the variable '$menu-items: number;' in your _page-components-shortcut.scss -->
    <nav class="shortcut-menu d-none d-sm-block">
        <input type="checkbox" class="menu-open" name="menu-open" id="menu_open" />
        <label for="menu_open" class="menu-open-button ">
            <span class="app-shortcut-icon d-block"></span>
        </label>
        <a href="#" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Scroll Top">
            <i class="fal fa-arrow-up"></i>
        </a>
        <a href="page_login_alt.html" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Logout">
            <i class="fal fa-sign-out"></i>
        </a>
        <a href="#" class="menu-item btn" data-action="app-fullscreen" data-toggle="tooltip" data-placement="left" title="Full Screen">
            <i class="fal fa-expand"></i>
        </a>
        <a href="#" class="menu-item btn" data-action="app-print" data-toggle="tooltip" data-placement="left" title="Print page">
            <i class="fal fa-print"></i>
        </a>
        <a href="#" class="menu-item btn" data-action="app-voice" data-toggle="tooltip" data-placement="left" title="Voice command">
            <i class="fal fa-microphone"></i>
        </a>
    </nav>




    <!-- END Quick Menu -->
    <!-- BEGIN Messenger -->
    <div class="modal fade js-modal-messenger modal-backdrop-transparent" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content h-100">
                <div class="dropdown-header bg-trans-gradient d-flex align-items-center w-100">
                    <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                        <span class="mr-2">
                            <span class="rounded-circle profile-image d-block" style="background-image:url('img/demo/avatars/avatar-d.png'); background-size: cover;"></span>
                        </span>
                        <div class="info-card-text">
                            <a href="javascript:void(0);" class="fs-lg text-truncate text-truncate-lg text-white" data-toggle="dropdown" aria-expanded="false">
                                Tracey Chang
                                <i class="fal fa-angle-down d-inline-block ml-1 text-white fs-md"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Send Email</a>
                                <a class="dropdown-item" href="#">Create Appointment</a>
                                <a class="dropdown-item" href="#">Block User</a>
                            </div>
                            <span class="text-truncate text-truncate-md opacity-80">IT Director</span>
                        </div>
                    </div>
                    <button type="button" class="close text-white position-absolute pos-top pos-right p-2 m-1 mr-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body p-0 h-100 d-flex">
                    <!-- BEGIN msgr-list -->
                    <div class="msgr-list d-flex flex-column bg-faded border-faded border-top-0 border-right-0 border-bottom-0 position-absolute pos-top pos-bottom">
                        <div>
                            <div class="height-4 width-3 h3 m-0 d-flex justify-content-center flex-column color-primary-500 pl-3 mt-2">
                                <i class="fal fa-search"></i>
                            </div>
                            <input type="text" class="form-control bg-white" id="msgr_listfilter_input" placeholder="Filter contacts" aria-label="FriendSearch" data-listfilter="#js-msgr-listfilter">
                        </div>
                        <div class="flex-1 h-100 custom-scroll">
                            <div class="w-100">
                                <ul id="js-msgr-listfilter" class="list-unstyled m-0">
                                    <li>
                                        <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="tracey chang online">
                                            <div class="d-table-cell align-middle status status-success status-sm ">
                                                <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-d.png'); background-size: cover;"></span>
                                            </div>
                                            <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                <div class="text-truncate text-truncate-md">
                                                    Tracey Chang
                                                    <small class="d-block font-italic text-success fs-xs">
                                                        Online
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="oliver kopyuv online">
                                            <div class="d-table-cell align-middle status status-success status-sm ">
                                                <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-b.png'); background-size: cover;"></span>
                                            </div>
                                            <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                <div class="text-truncate text-truncate-md">
                                                    Oliver Kopyuv
                                                    <small class="d-block font-italic text-success fs-xs">
                                                        Online
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="dr john cook phd away">
                                            <div class="d-table-cell align-middle status status-warning status-sm ">
                                                <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
                                            </div>
                                            <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                <div class="text-truncate text-truncate-md">
                                                    Dr. John Cook PhD
                                                    <small class="d-block font-italic fs-xs">
                                                        Away
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney online">
                                            <div class="d-table-cell align-middle status status-success status-sm ">
                                                <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-g.png'); background-size: cover;"></span>
                                            </div>
                                            <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                <div class="text-truncate text-truncate-md">
                                                    Ali Amdaney
                                                    <small class="d-block font-italic fs-xs text-success">
                                                        Online
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="sarah mcbrook online">
                                            <div class="d-table-cell align-middle status status-success status-sm">
                                                <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-h.png'); background-size: cover;"></span>
                                            </div>
                                            <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                <div class="text-truncate text-truncate-md">
                                                    Sarah McBrook
                                                    <small class="d-block font-italic fs-xs text-success">
                                                        Online
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney offline">
                                            <div class="d-table-cell align-middle status status-sm">
                                                <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-a.png'); background-size: cover;"></span>
                                            </div>
                                            <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                <div class="text-truncate text-truncate-md">
                                                    oliver.kopyuv@gotbootstrap.com
                                                    <small class="d-block font-italic fs-xs">
                                                        Offline
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney busy">
                                            <div class="d-table-cell align-middle status status-danger status-sm">
                                                <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-j.png'); background-size: cover;"></span>
                                            </div>
                                            <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                <div class="text-truncate text-truncate-md">
                                                    oliver.kopyuv@gotbootstrap.com
                                                    <small class="d-block font-italic fs-xs text-danger">
                                                        Busy
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney offline">
                                            <div class="d-table-cell align-middle status status-sm">
                                                <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-c.png'); background-size: cover;"></span>
                                            </div>
                                            <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                <div class="text-truncate text-truncate-md">
                                                    oliver.kopyuv@gotbootstrap.com
                                                    <small class="d-block font-italic fs-xs">
                                                        Offline
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney inactive">
                                            <div class="d-table-cell align-middle">
                                                <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-m.png'); background-size: cover;"></span>
                                            </div>
                                            <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                <div class="text-truncate text-truncate-md">
                                                    +714651347790
                                                    <small class="d-block font-italic fs-xs opacity-50">
                                                        Missed Call
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="filter-message js-filter-message"></div>
                            </div>
                        </div>
                        <div>
                            <a class="fs-xl d-flex align-items-center p-3">
                                <i class="fal fa-cogs"></i>
                            </a>
                        </div>
                    </div>
                    <!-- END msgr-list -->
                    <!-- BEGIN msgr -->
                    <div class="msgr d-flex h-100 flex-column bg-white">
                        <!-- BEGIN custom-scroll -->
                        <div class="custom-scroll flex-1 h-100">
                            <div id="chat_container" class="w-100 p-4">
                                <!-- start .chat-segment -->
                                <div class="chat-segment">
                                    <div class="time-stamp text-center mb-2 fw-400">
                                        Jun 19
                                    </div>
                                </div>
                                <!--  end .chat-segment -->
                                <!-- start .chat-segment -->
                                <div class="chat-segment chat-segment-sent">
                                    <div class="chat-message">
                                        <p>
                                            Hey Tracey, did you get my files?
                                        </p>
                                    </div>
                                    <div class="text-right fw-300 text-muted mt-1 fs-xs">
                                        3:00 pm
                                    </div>
                                </div>
                                <!--  end .chat-segment -->
                                <!-- start .chat-segment -->
                                <div class="chat-segment chat-segment-get">
                                    <div class="chat-message">
                                        <p>
                                            Hi
                                        </p>
                                        <p>
                                            Sorry going through a busy time in office. Yes I analyzed the solution.
                                        </p>
                                        <p>
                                            It will require some resource, which I could not manage.
                                        </p>
                                    </div>
                                    <div class="fw-300 text-muted mt-1 fs-xs">
                                        3:24 pm
                                    </div>
                                </div>
                                <!--  end .chat-segment -->
                                <!-- start .chat-segment -->
                                <div class="chat-segment chat-segment-sent chat-start">
                                    <div class="chat-message">
                                        <p>
                                            Okay
                                        </p>
                                    </div>
                                </div>
                                <!--  end .chat-segment -->
                                <!-- start .chat-segment -->
                                <div class="chat-segment chat-segment-sent chat-end">
                                    <div class="chat-message">
                                        <p>
                                            Sending you some dough today, you can allocate the resources to this project.
                                        </p>
                                    </div>
                                    <div class="text-right fw-300 text-muted mt-1 fs-xs">
                                        3:26 pm
                                    </div>
                                </div>
                                <!--  end .chat-segment -->
                                <!-- start .chat-segment -->
                                <div class="chat-segment chat-segment-get chat-start">
                                    <div class="chat-message">
                                        <p>
                                            Perfect. Thanks a lot!
                                        </p>
                                    </div>
                                </div>
                                <!--  end .chat-segment -->
                                <!-- start .chat-segment -->
                                <div class="chat-segment chat-segment-get">
                                    <div class="chat-message">
                                        <p>
                                            I will have them ready by tonight.
                                        </p>
                                    </div>
                                </div>
                                <!--  end .chat-segment -->
                                <!-- start .chat-segment -->
                                <div class="chat-segment chat-segment-get chat-end">
                                    <div class="chat-message">
                                        <p>
                                            Cheers
                                        </p>
                                    </div>
                                </div>
                                <!--  end .chat-segment -->
                                <!-- start .chat-segment for timestamp -->
                                <div class="chat-segment">
                                    <div class="time-stamp text-center mb-2 fw-400">
                                        Jun 20
                                    </div>
                                </div>
                                <!--  end .chat-segment for timestamp -->
                            </div>
                        </div>
                        <!-- END custom-scroll  -->
                        <!-- BEGIN msgr__chatinput -->
                        <div class="d-flex flex-column">
                            <div class="border-faded border-right-0 border-bottom-0 border-left-0 flex-1 mr-3 ml-3 position-relative shadow-top">
                                <div class="pt-3 pb-1 pr-0 pl-0 rounded-0" tabindex="-1">
                                    <div id="msgr_input" contenteditable="true" data-placeholder="Type your message here..." class="height-10 form-content-editable"></div>
                                </div>
                            </div>
                            <div class="height-8 px-3 d-flex flex-row align-items-center flex-wrap flex-shrink-0">
                                <a href="javascript:void(0);" class="btn btn-icon fs-xl width-1 mr-1" data-toggle="tooltip" data-original-title="More options" data-placement="top">
                                    <i class="fal fa-ellipsis-v-alt color-fusion-300"></i>
                                </a>
                                <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1" data-toggle="tooltip" data-original-title="Attach files" data-placement="top">
                                    <i class="fal fa-paperclip color-fusion-300"></i>
                                </a>
                                <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1" data-toggle="tooltip" data-original-title="Insert photo" data-placement="top">
                                    <i class="fal fa-camera color-fusion-300"></i>
                                </a>
                                <div class="ml-auto">
                                    <a href="javascript:void(0);" class="btn btn-info">Send</a>
                                </div>
                            </div>
                        </div>
                        <!-- END msgr__chatinput -->
                    </div>
                    <!-- END msgr -->
                </div>
            </div>
        </div>
    </div>
    <!-- END Messenger -->
    <!-- BEGIN Page Settings -->
    <div class="modal fade js-modal-settings modal-backdrop-transparent" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right modal-md">
            <div class="modal-content">
                <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center w-100">
                    <h4 class="m-0 text-center color-white">
                        Layout Settings
                        <small class="mb-0 opacity-80">User Interface Settings</small>
                    </h4>
                    <button type="button" class="close text-white position-absolute pos-top pos-right p-2 m-1 mr-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="settings-panel">
                        <div class="mt-4 d-table w-100 px-5">
                            <div class="d-table-cell align-middle">
                                <h5 class="p-0">
                                    App Layout
                                </h5>
                            </div>
                        </div>
                        <div class="list" id="fh">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="header-function-fixed"></a>
                            <span class="onoffswitch-title">Fixed Header</span>
                            <span class="onoffswitch-title-desc">header is in a fixed at all times</span>
                        </div>
                        <div class="list" id="nff">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-fixed"></a>
                            <span class="onoffswitch-title">Fixed Navigation</span>
                            <span class="onoffswitch-title-desc">left panel is fixed</span>
                        </div>
                        <div class="list" id="nfm">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-minify"></a>
                            <span class="onoffswitch-title">Minify Navigation</span>
                            <span class="onoffswitch-title-desc">Skew nav to maximize space</span>
                        </div>
                        <div class="list" id="nfh">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-hidden"></a>
                            <span class="onoffswitch-title">Hide Navigation</span>
                            <span class="onoffswitch-title-desc">roll mouse on edge to reveal</span>
                        </div>
                        <div class="list" id="nft">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-top"></a>
                            <span class="onoffswitch-title">Top Navigation</span>
                            <span class="onoffswitch-title-desc">Relocate left pane to top</span>
                        </div>
                        <div class="list" id="mmb">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-main-boxed"></a>
                            <span class="onoffswitch-title">Boxed Layout</span>
                            <span class="onoffswitch-title-desc">Encapsulates to a container</span>
                        </div>
                        <div class="expanded">
                            <ul class="">
                                <li>
                                    <div class="bg-fusion-50" data-action="toggle" data-class="mod-bg-1"></div>
                                </li>
                                <li>
                                    <div class="bg-warning-200" data-action="toggle" data-class="mod-bg-2"></div>
                                </li>
                                <li>
                                    <div class="bg-primary-200" data-action="toggle" data-class="mod-bg-3"></div>
                                </li>
                                <li>
                                    <div class="bg-success-300" data-action="toggle" data-class="mod-bg-4"></div>
                                </li>
                            </ul>
                            <div class="list" id="mbgf">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-fixed-bg"></a>
                                <span class="onoffswitch-title">Fixed Background</span>
                            </div>
                        </div>
                        <div class="mt-4 d-table w-100 px-5">
                            <div class="d-table-cell align-middle">
                                <h5 class="p-0">
                                    Mobile Menu
                                </h5>
                            </div>
                        </div>
                        <div class="list" id="nmp">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-push"></a>
                            <span class="onoffswitch-title">Push Content</span>
                            <span class="onoffswitch-title-desc">Content pushed on menu reveal</span>
                        </div>
                        <div class="list" id="nmno">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-no-overlay"></a>
                            <span class="onoffswitch-title">No Overlay</span>
                            <span class="onoffswitch-title-desc">Removes mesh on menu reveal</span>
                        </div>
                        <div class="list" id="sldo">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-slide-out"></a>
                            <span class="onoffswitch-title">Off-Canvas <sup>(beta)</sup></span>
                            <span class="onoffswitch-title-desc">Content overlaps menu</span>
                        </div>
                        <div class="mt-4 d-table w-100 px-5">
                            <div class="d-table-cell align-middle">
                                <h5 class="p-0">
                                    Accessibility
                                </h5>
                            </div>
                        </div>
                        <div class="list" id="mbf">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-bigger-font"></a>
                            <span class="onoffswitch-title">Bigger Content Font</span>
                            <span class="onoffswitch-title-desc">content fonts are bigger for readability</span>
                        </div>
                        <div class="list" id="mhc">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-high-contrast"></a>
                            <span class="onoffswitch-title">High Contrast Text (WCAG 2 AA)</span>
                            <span class="onoffswitch-title-desc">4.5:1 text contrast ratio</span>
                        </div>
                        <div class="list" id="mcb">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-color-blind"></a>
                            <span class="onoffswitch-title">Daltonism <sup>(beta)</sup> </span>
                            <span class="onoffswitch-title-desc">color vision deficiency</span>
                        </div>
                        <div class="list" id="mpc">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-pace-custom"></a>
                            <span class="onoffswitch-title">Preloader Inside</span>
                            <span class="onoffswitch-title-desc">preloader will be inside content</span>
                        </div>
                        <div class="mt-4 d-table w-100 px-5">
                            <div class="d-table-cell align-middle">
                                <h5 class="p-0">
                                    Global Modifications
                                </h5>
                            </div>
                        </div>
                        <div class="list" id="mcbg">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-clean-page-bg"></a>
                            <span class="onoffswitch-title">Clean Page Background</span>
                            <span class="onoffswitch-title-desc">adds more whitespace</span>
                        </div>
                        <div class="list" id="mhni">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-hide-nav-icons"></a>
                            <span class="onoffswitch-title">Hide Navigation Icons</span>
                            <span class="onoffswitch-title-desc">invisible navigation icons</span>
                        </div>
                        <div class="list" id="dan">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-disable-animation"></a>
                            <span class="onoffswitch-title">Disable CSS Animation</span>
                            <span class="onoffswitch-title-desc">Disables CSS based animations</span>
                        </div>
                        <div class="list" id="mhic">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-hide-info-card"></a>
                            <span class="onoffswitch-title">Hide Info Card</span>
                            <span class="onoffswitch-title-desc">Hides info card from left panel</span>
                        </div>
                        <div class="list" id="mlph">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-lean-subheader"></a>
                            <span class="onoffswitch-title">Lean Subheader</span>
                            <span class="onoffswitch-title-desc">distinguished page header</span>
                        </div>
                        <div class="list" id="mnl">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-nav-link"></a>
                            <span class="onoffswitch-title">Hierarchical Navigation</span>
                            <span class="onoffswitch-title-desc">Clear breakdown of nav links</span>
                        </div>
                        <div class="list mt-1">
                            <span class="onoffswitch-title">Global Font Size <small>(RESETS ON REFRESH)</small> </span>
                            <div class="btn-group btn-group-sm btn-group-toggle my-2" data-toggle="buttons">
                                <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-sm" data-target="html">
                                    <input type="radio" name="changeFrontSize"> SM
                                </label>
                                <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text" data-target="html">
                                    <input type="radio" name="changeFrontSize" checked=""> MD
                                </label>
                                <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-lg" data-target="html">
                                    <input type="radio" name="changeFrontSize"> LG
                                </label>
                                <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-xl" data-target="html">
                                    <input type="radio" name="changeFrontSize"> XL
                                </label>
                            </div>
                            <span class="onoffswitch-title-desc d-block mb-0">Change <strong>root</strong> font size to effect rem
                                values</span>
                        </div>
                        <hr class="mb-0 mt-4">
                        <div class="mt-2 d-table w-100 pl-5 pr-3">
                            <div class="fs-xs text-muted p-2 alert alert-warning mt-3 mb-2">
                                <i class="fal fa-exclamation-triangle text-warning mr-2"></i>The settings below uses localStorage to load
                                the external CSS file as an overlap to the base css. Due to network latency and CPU utilization, you may
                                experience a brief flickering effect on page load which may show the intial applied theme for a split
                                second. Setting the prefered style/theme in the header will prevent this from happening.
                            </div>
                        </div>
                        <div class="mt-2 d-table w-100 pl-5 pr-3">
                            <div class="d-table-cell align-middle">
                                <h5 class="p-0">
                                    Theme colors
                                </h5>
                            </div>
                        </div>
                        <div class="expanded theme-colors pl-5 pr-3">
                            <ul class="m-0">
                                <li>
                                    <a href="#" id="myapp-0" data-action="theme-update" data-themesave data-theme="" data-toggle="tooltip" data-placement="top" title="Wisteria (base css)" data-original-title="Wisteria (base css)"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-1" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-1.css" data-toggle="tooltip" data-placement="top" title="Tapestry" data-original-title="Tapestry"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-2" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-2.css" data-toggle="tooltip" data-placement="top" title="Atlantis" data-original-title="Atlantis"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-3" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-3.css" data-toggle="tooltip" data-placement="top" title="Indigo" data-original-title="Indigo"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-4" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-4.css" data-toggle="tooltip" data-placement="top" title="Dodger Blue" data-original-title="Dodger Blue"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-5" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-5.css" data-toggle="tooltip" data-placement="top" title="Tradewind" data-original-title="Tradewind"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-6" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-6.css" data-toggle="tooltip" data-placement="top" title="Cranberry" data-original-title="Cranberry"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-7" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-7.css" data-toggle="tooltip" data-placement="top" title="Oslo Gray" data-original-title="Oslo Gray"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-8" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-8.css" data-toggle="tooltip" data-placement="top" title="Chetwode Blue" data-original-title="Chetwode Blue"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-9" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-9.css" data-toggle="tooltip" data-placement="top" title="Apricot" data-original-title="Apricot"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-10" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-10.css" data-toggle="tooltip" data-placement="top" title="Blue Smoke" data-original-title="Blue Smoke"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-11" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-11.css" data-toggle="tooltip" data-placement="top" title="Green Smoke" data-original-title="Green Smoke"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-12" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-12.css" data-toggle="tooltip" data-placement="top" title="Wild Blue Yonder" data-original-title="Wild Blue Yonder"></a>
                                </li>
                                <li>
                                    <a href="#" id="myapp-13" data-action="theme-update" data-themesave data-theme="css/themes/cust-theme-13.css" data-toggle="tooltip" data-placement="top" title="Emerald" data-original-title="Emerald"></a>
                                </li>
                            </ul>
                        </div>
                        <hr class="mb-0 mt-4">
                        <div class="pl-5 pr-3 py-3 bg-faded">
                            <div class="row no-gutters">
                                <div class="col-6 pr-1">
                                    <a href="#" class="btn btn-outline-danger fw-500 btn-block" data-action="app-reset">Reset Settings</a>
                                </div>
                                <div class="col-6 pl-1">
                                    <a href="#" class="btn btn-danger fw-500 btn-block" data-action="factory-reset">Factory Reset</a>
                                </div>
                            </div>
                        </div>
                    </div> <span id="saving"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Settings -->
    <!-- base vendor bundle: 
			 DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations 
						+ pace.js (recommended)
						+ jquery.js (core)
						+ jquery-ui-cust.js (core)
						+ popper.js (core)
						+ bootstrap.js (core)
						+ slimscroll.js (extension)
						+ app.navigation.js (core)
						+ ba-throttle-debounce.js (core)
						+ waves.js (extension)
						+ smartpanels.js (extension)
						+ src/../jquery-snippets.js (core) -->
    <script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
    <script type="text/javascript">
        /* Activate smart panels */
        $('#js-page-content').smartPanel();
    </script>
    <!-- The order of scripts is irrelevant. Please check out the plugin pages for more details about these plugins below: -->
    <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/js/notifications/toastr/toastr.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('#schedule').dataTable({
            responsive: true,
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
        /* defined datas */
        var dataTargetProfit = [
            [1354586000000, 153],
            [1364587000000, 658],
            [1374588000000, 198],
            [1384589000000, 663],
            [1394590000000, 801],
            [1404591000000, 1080],
            [1414592000000, 353],
            [1424593000000, 749],
            [1434594000000, 523],
            [1444595000000, 258],
            [1454596000000, 688],
            [1464597000000, 364]
        ]
        var dataProfit = [
            [1354586000000, 53],
            [1364587000000, 65],
            [1374588000000, 98],
            [1384589000000, 83],
            [1394590000000, 980],
            [1404591000000, 808],
            [1414592000000, 720],
            [1424593000000, 674],
            [1434594000000, 23],
            [1444595000000, 79],
            [1454596000000, 88],
            [1464597000000, 36]
        ]
        var dataSignups = [
            [1354586000000, 647],
            [1364587000000, 435],
            [1374588000000, 784],
            [1384589000000, 346],
            [1394590000000, 487],
            [1404591000000, 463],
            [1414592000000, 479],
            [1424593000000, 236],
            [1434594000000, 843],
            [1444595000000, 657],
            [1454596000000, 241],
            [1464597000000, 341]
        ]
        var dataSet1 = [
            [0, 10],
            [100, 8],
            [200, 7],
            [300, 5],
            [400, 4],
            [500, 6],
            [600, 3],
            [700, 2]
        ];
        var dataSet2 = [
            [0, 9],
            [100, 6],
            [200, 5],
            [300, 3],
            [400, 3],
            [500, 5],
            [600, 2],
            [700, 1]
        ];

        $(document).ready(function() {

            /* init datatables */
            $('#dt-basic-example').dataTable({
                responsive: true,
                dom: "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'B>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                buttons: [{
                        extend: 'colvis',
                        text: 'Column Visibility',
                        titleAttr: 'Col visibility',
                        className: 'btn-outline-default'
                    },
                    {
                        extend: 'csvHtml5',
                        text: 'CSV',
                        titleAttr: 'Generate CSV',
                        className: 'btn-outline-default'
                    },
                    {
                        extend: 'copyHtml5',
                        text: 'Copy',
                        titleAttr: 'Copy to clipboard',
                        className: 'btn-outline-default'
                    },
                    {
                        extend: 'print',
                        text: '<i class="fal fa-print"></i>',
                        titleAttr: 'Print Table',
                        className: 'btn-outline-default'
                    }

                ],
                columnDefs: [{
                        targets: -1,
                        title: '',
                        orderable: false,
                        render: function(data, type, full, meta) {

                            /*
                            -- ES6
                            -- convert using https://babeljs.io online transpiler
                            return `
                            <a href='javascript:void(0);' class='btn btn-sm btn-icon btn-outline-danger rounded-circle mr-1' title='Delete Record'>
                            	<i class="fal fa-times"></i>
                            </a>
                            <div class='dropdown d-inline-block dropleft '>
                            	<a href='#'' class='btn btn-sm btn-icon btn-outline-primary rounded-circle shadow-0' data-toggle='dropdown' aria-expanded='true' title='More options'>
                            		<i class="fal fa-ellipsis-v"></i>
                            	</a>
                            	<div class='dropdown-menu'>
                            		<a class='dropdown-item' href='javascript:void(0);'>Change Status</a>
                            		<a class='dropdown-item' href='javascript:void(0);'>Generate Report</a>
                            	</div>
                            </div>`;
                            	
                            ES5 example below:	

                            */
                            return "\n\t\t\t\t\t\t<a href='javascript:void(0);' class='btn btn-sm btn-icon btn-outline-danger rounded-circle mr-1' title='Delete Record'>\n\t\t\t\t\t\t\t<i class=\"fal fa-times\"></i>\n\t\t\t\t\t\t</a>\n\t\t\t\t\t\t<div class='dropdown d-inline-block dropleft'>\n\t\t\t\t\t\t\t<a href='#'' class='btn btn-sm btn-icon btn-outline-primary rounded-circle shadow-0' data-toggle='dropdown' aria-expanded='true' title='More options'>\n\t\t\t\t\t\t\t\t<i class=\"fal fa-ellipsis-v\"></i>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t<div class='dropdown-menu'>\n\t\t\t\t\t\t\t\t<a class='dropdown-item' href='javascript:void(0);'>Change Status</a>\n\t\t\t\t\t\t\t\t<a class='dropdown-item' href='javascript:void(0);'>Generate Report</a>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>";
                        },
                    },

                ]

            });


            /* flot toggle example */
            var flot_toggle = function() {

                var data = [{
                        label: "Target Profit",
                        data: dataTargetProfit,
                        color: color.info._400,
                        bars: {
                            show: true,
                            align: "center",
                            barWidth: 30 * 30 * 60 * 1000 * 80,
                            lineWidth: 0,
                            /*fillColor: {
                            	colors: [color.primary._500, color.primary._900]
                            },*/
                            fillColor: {
                                colors: [{
                                        opacity: 0.9
                                    },
                                    {
                                        opacity: 0.1
                                    }
                                ]
                            }
                        },
                        highlightColor: 'rgba(255,255,255,0.3)',
                        shadowSize: 0
                    },
                    {
                        label: "Actual Profit",
                        data: dataProfit,
                        color: color.warning._500,
                        lines: {
                            show: true,
                            lineWidth: 2
                        },
                        shadowSize: 0,
                        points: {
                            show: true
                        }
                    },
                    {
                        label: "User Signups",
                        data: dataSignups,
                        color: color.success._500,
                        lines: {
                            show: true,
                            lineWidth: 2
                        },
                        shadowSize: 0,
                        points: {
                            show: true
                        }
                    }
                ]

                var options = {
                    grid: {
                        hoverable: true,
                        clickable: true,
                        tickColor: '#f2f2f2',
                        borderWidth: 1,
                        borderColor: '#f2f2f2'
                    },
                    tooltip: true,
                    tooltipOpts: {
                        cssClass: 'tooltip-inner',
                        defaultTheme: false
                    },
                    xaxis: {
                        mode: "time"
                    },
                    yaxes: {
                        tickFormatter: function(val, axis) {
                            return "$" + val;
                        },
                        max: 1200
                    }

                };

                var plot2 = null;

                function plotNow() {
                    var d = [];
                    $("#js-checkbox-toggles").find(':checkbox').each(function() {
                        if ($(this).is(':checked')) {
                            d.push(data[$(this).attr("name").substr(4, 1)]);
                        }
                    });
                    if (d.length > 0) {
                        if (plot2) {
                            plot2.setData(d);
                            plot2.draw();
                        } else {
                            plot2 = $.plot($("#flot-toggles"), d, options);
                        }
                    }

                };

                $("#js-checkbox-toggles").find(':checkbox').on('change', function() {
                    plotNow();
                });
                plotNow()
            }
            flot_toggle();
            /* flot toggle example -- end*/

            /* flot area */
            var flotArea = $.plot($('#flot-area'), [{
                    data: dataSet1,
                    label: 'New Customer',
                    color: color.success._200
                },
                {
                    data: dataSet2,
                    label: 'Returning Customer',
                    color: color.info._200
                }
            ], {
                series: {
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true,
                        fillColor: {
                            colors: [{
                                    opacity: 0
                                },
                                {
                                    opacity: 0.5
                                }
                            ]
                        }
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    noColumns: 1,
                    position: 'nw'
                },
                grid: {
                    hoverable: true,
                    clickable: true,
                    borderColor: '#ddd',
                    tickColor: '#ddd',
                    aboveData: true,
                    borderWidth: 0,
                    labelMargin: 5,
                    backgroundColor: 'transparent'
                },
                yaxis: {
                    tickLength: 1,
                    min: 0,
                    max: 15,
                    color: '#eee',
                    font: {
                        size: 0,
                        color: '#999'
                    }
                },
                xaxis: {
                    tickLength: 1,
                    color: '#eee',
                    font: {
                        size: 10,
                        color: '#999'
                    }
                }

            });
            /* flot area -- end */

            var flotVisit = $.plot('#flotVisit', [{
                    data: [
                        [3, 0],
                        [4, 1],
                        [5, 3],
                        [6, 3],
                        [7, 10],
                        [8, 11],
                        [9, 12],
                        [10, 9],
                        [11, 12],
                        [12, 8],
                        [13, 5]
                    ],
                    color: color.success._200
                },
                {
                    data: [
                        [1, 0],
                        [2, 0],
                        [3, 1],
                        [4, 2],
                        [5, 2],
                        [6, 5],
                        [7, 8],
                        [8, 12],
                        [9, 9],
                        [10, 11],
                        [11, 5]
                    ],
                    color: color.info._200
                }
            ], {
                series: {
                    shadowSize: 0,
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true,
                        fillColor: {
                            colors: [{
                                    opacity: 0
                                },
                                {
                                    opacity: 0.12
                                }
                            ]
                        }
                    }
                },
                grid: {
                    borderWidth: 0
                },
                yaxis: {
                    min: 0,
                    max: 15,
                    tickColor: '#ddd',
                    ticks: [
                        [0, ''],
                        [5, '100K'],
                        [10, '200K'],
                        [15, '300K']
                    ],
                    font: {
                        color: '#444',
                        size: 10
                    }
                },
                xaxis: {

                    tickColor: '#eee',
                    ticks: [
                        [2, '2am'],
                        [3, '3am'],
                        [4, '4am'],
                        [5, '5am'],
                        [6, '6am'],
                        [7, '7am'],
                        [8, '8am'],
                        [9, '9am'],
                        [10, '1pm'],
                        [11, '2pm'],
                        [12, '3pm'],
                        [13, '4pm']
                    ],
                    font: {
                        color: '#999',
                        size: 9
                    }
                }
            });


        });
    </script>




    <script>
        window.onload = function() {
            // alert("called");
            let date = new Date().toJSON().substr(0, 10);

            $("#prodMonth").val(date);
            $("#date1").val(date);
            $("#date2").val(date);

            $("#articleNo").select2({
                dropdownParent: $('#addFGTRequest')
            });

            let currentDate = new Date().toJSON().substr(0, 7);
            console.log(currentDate);
            $('#getmonth').val(currentDate);
        };


        $(document).ready(function() {
            loadFGTRequestwithoutCssNo();
            FGTRequestwithCssNowithAknowledge();
        })

        $("#articleNo").on("change", function() {
            url = "<?php echo base_url("LabController/getFgtRequestFormData") ?>";
            $.post(url, {
                articleNo: this.value
            }, function(data) {
                if (data) {
                    console.log(data);
                    $('#workingNo').val(data[0].WorkNo);
                    $('#modelName').val(data[0].ModelName);

                    $('#size').val(data[0].ArtSize);
                    $('#backing').val(data[0].backing);

                    $('#ballType').val(data[0].BallType);
                    $('#mainMatCol').val(data[0].MainMaterialColour);
                    $('#coverMat').val(data[0].COvMatMaterial);
                    $('#bladderDetails').val(data[0].BladderDetails);
                    $('#printColor').val(data[0].PrintingColors);
                    $('#panelShape').val(data[0].PanelShape);
                }

            })
        });

        // setInterval(() => {
        //     loadFGTRequestwithoutCssNo();
        //     FGTRequestwithCssNowithAknowledge();
        // }, 2000);

        function loadFGTRequestwithoutCssNo() {

            url = "<?php echo base_url("LabController/FGTRequestwithAknowledge") ?>";
            $.get(url, function(data) {
                let html = `<table class="table table-bordered table-hover table-responsive table-striped table-sm w-100" style="width:100%" id="fgtTableExport1">
                    <thead class="bg-primary-200 text-light p-2">
                    <tr>
                        <th class="h5">Css No</th>
                        <th class="h5">Factory Code</th>
                        <th class="h5">Working No</th>
                        <th class="h5">Article No</th>
                        <th class="h5">Modal Name</th>
                        <th class="h5">Size</th>
                        <th class="h5">Ball Type</th>                  
                        <th class="h5">Main Material Color</th>
                        <th class="h5">Convert Mat</th>
                        <th class="h5">Backing</th>
                        <th class="h5">Bladder Details</th>
                        <th class="h5">Production Month</th>
                        <th class="h5">Printing Color</th>
                        <th class="h5">Panel Shape</th>
                        <th class="h5">Test Type</th>
                        <th class="h5">Deliever Qty</th>
                        <th class="h5">Any Info</th>
                        <th class="h5">Lab Status</th>
                        <!--<th class="h5">Receiver Signature</th>
                        <th class="h5">Sender Signature</th>-->
                        <th class="h5">Request Status</th>
                        <th class="h5">Generated By</th>
                        <th class="h5">Action</th>
                        </tr>
                        </thead>
                        <tbody>`;
                if (data) {

                    data.forEach(element => {
                        html += `
                            <tr>        
                            <td><span class="badge badge-warning p-1">${element.CssNO}</span></td>
                            <td>${element.factoryCode}</td>
                            <td>${element.WorkingNo}</td>
                            <td>${element.Articleno}</td>
                            <td>${element.ModelName}</td>
                            <td>${element.Size}</td>
                            <td>${element.BallType}</td>               
                            <td>${element.mainmaterialColor}</td>
                            <td><span>${element.Covermat}</span></td>
                            <td><span>${element.backing}</span></td>
                            <td><span> ${element.Bladderdetail} </span></td>
                            <td><span> ${element.ProductionMonth} </span></td>
                            <td><span> ${element.Printingcolor} </span></td>
                            <td><span> ${element.panelShape} </span></td>
                            <td><span> ${element.testype} </span></td>
                            <td><span> ${element.deliverqty} </span></td>
                            <td><span> ${element.additionalinfo} </span></td>
                            <td><span class="badge badge-secondary p-1">${element.LabStatus == null ? `Pending` : `Aknowledged`} </span></td>

                            <!--<td> <span class="badge badge-primary p-1">Receiver Signature</span></td>

                            <td> <span class="badge badge-primary p-1">Sender Signature</span></td> -->

                            <td><span class="badge badge-warning p-1">${element.RequestStatus}</span></td>
                            <td><span class="badge badge-danger p-1">${element.LoginName}</span></td>
                            <td>
                            <div class="col-md-2 d-flex">
                                ${element.CssNO == null ? `<button type="button" style="display: inline-block;" class="btn btn-primary btn-xs updatebtn2" id="" onclick="editFGT(${element.TID})"><i class="fal fa-edit" aria-hidden="true"></i></button>  &nbsp;
                                
                                <button type="button" style="display: inline-block;" class="btn btn-danger btn-xs updatebtn2" id="" onclick="deleteFGT(${element.TID})"><i class="fal fa-trash" aria-hidden="true" ></i></button>` : `<span class="badge badge-danger p-1">Action Prohibited!</span>`}
                                
                                
                            </div>
                            </td>

                        </tr>`
                    })

                    html += `</tbody>
                            </table>`;
                    $("#fgtRequestData1").html(html);


                }

                $('#fgtTableExport1').dataTable({
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

        function FGTRequestwithCssNowithAknowledge() {

            url = "<?php echo base_url("LabController/FGTRequestwithCssNowithAknowledge") ?>";
            $.get(url, function(data) {
                let html = `<table class="table table-bordered table-hover table-responsive table-striped table-sm w-100" style="width:100%" id="fgtTableExport2">
                <thead class="bg-primary-200 text-light p-2">
                <tr>
                    <th class="h5">CSS Date</th>
                    <th class="h5">CSS NO</th>
                    <th class="h5">Factory Code</th>
                    <th class="h5">Working No</th>
                    <th class="h5">Article No</th>
                    <th class="h5">Modal Name</th>
                    <th class="h5">Size</th>
                    <th class="h5">Ball Type</th>                  
                    <th class="h5">Main Material Color</th>
                    <th class="h5">Convert Mat</th>
                    <th class="h5">Backing</th>
                    <th class="h5">Bladder Details</th>
                    <th class="h5">Production Month</th>
                    <th class="h5">Printing Color</th>
                    <th class="h5">Panel Shape</th>
                    <th class="h5">Test Type</th>
                    <th class="h5">Deliever Qty</th>
                    <th class="h5">Any Info</th>
                    <th class="h5">Lab Status</th>
                    <th class="h5">Request Status</th>
                    <th class="h5">Generated By</th>
                    <th class="h5">Action</th>
                </tr>
                </thead>
                <tbody>`;
                if (data) {
                    data.forEach(element => {
                        html += `
                            <tr>
                                <td>${element.CssDate.split("00:00:00")[0]}</td>
                                <td><span class="badge badge-warning p-1">${element.CssNO}</span></td>
                                <td>${element.factoryCode}</td>
                                <td>${element.WorkingNo}</td>
                                <td>${element.Articleno}</td>
                                <td>${element.ModelName}</td>
                                <td>${element.Size}</td>
                                <td>${element.BallType}</td>               
                                <td>${element.mainmaterialColor}</td>
                                <td><span>${element.Covermat}</span></td>
                                <td><span>${element.backing}</span></td>
                                <td><span> ${element.Bladderdetail} </span></td>
                                <td><span> ${element.ProductionMonth} </span></td>
                                <td><span> ${element.Printingcolor} </span></td>
                                <td><span> ${element.panelShape} </span></td>
                                <td><span> ${element.testype} </span></td>
                                <td><span> ${element.deliverqty} </span></td>
                                <td><span> ${element.additionalinfo} </span></td>
                                <td><span class="badge badge-secondary p-1">${element.LabStatus == 1 ? `Aknowledged` : `Pending`} </span></td>
                                <td><span class="badge badge-warning p-1">${element.RequestStatus}</span></td>
                                <td><span class="badge badge-danger p-1">${element.LoginName}</span></td>

                                <td>
                                <div class="col-md-2 d-flex ">
                                
                                    <button type="button" style="display: inline-block;" class="btn btn-warning btn-xs updatebtn2" id="" onclick="printFgt('${element.TID}', '${element.CssNO}')"><i class="fal fa-print" aria-hidden="true" ></i></button> &nbsp;

                                    <!--<button type="button" style="display: inline-block;" class="btn btn-danger btn-xs updatebtn2" id="" onclick="deleteFGT(${element.TID})"><i class="fal fa-trash" aria-hidden="true" ></i></button>-->

                                </div>
                                </td>

                            </tr>`
                    })

                    html += `</tbody>
                            </table>`;

                    $("#fgtRequestData2").html(html);


                    $('#fgtTableExport2').dataTable({
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
                }

            });

        }

        $('#addFGTModal').on('click', function() {
            $('#saveFGTBtn').show();
            $('#updateFGTBtn').hide();
            $('#addFGTRequest').modal('toggle');
        })

        $('#saveFGTBtn').on('click', function(e) {
            e.preventDefault();

            let url = "<?php echo base_url('LabController/addFGTRequest') ?>";

            let workingNo = $('#workingNo').val();
            let articleNo = $('#articleNo').val();
            let modelName = $('#modelName').val();
            let size = $('#size').val();
            let ballType = $('#ballType').val();
            let mainMatCol = $('#mainMatCol').val();
            let coverMat = $('#coverMat').val();
            let backing = $('#backing').val();
            let bladderDetails = $('#bladderDetails').val();
            let prodMonth = $('#prodMonth').val();
            let printColor = $('#printColor').val();
            let panelShape = $('#panelShape').val();
            let testType = $('#testType').val();
            let dQuantity = $('#dQuantity').val();
            let anyInfo = $('#anyInfo').val();
            if (workingNo && articleNo && modelName && size && ballType && mainMatCol && coverMat && backing && bladderDetails && prodMonth && printColor && panelShape && testType && dQuantity) {
                $.post(url, {
                    workingNo: workingNo,
                    articleNo: articleNo,
                    modelName: modelName,
                    size: size,
                    ballType: ballType,
                    mainMatCol: mainMatCol,
                    coverMat: coverMat,
                    backing: backing,
                    bladderDetails: bladderDetails,
                    prodMonth: prodMonth,
                    printColor: printColor,
                    panelShape: panelShape,
                    testType: testType,
                    dQuantity: dQuantity,
                    anyInfo: anyInfo,
                }, function(data) {
                    if (data == true) {
                        $('#addFGTRequest').modal('toggle');
                        alert("Data added successfully");
                        $('#workingNo').val('');
                        // $('#articleNo').prop('selected', false);
                        $('#articleNo option:selected').remove();
                        $('#modelName').val('');
                        $('#size').val('');
                        $('#ballType').val('');
                        $('#mainMatCol').val('');
                        $('#coverMat').val('');
                        $('#backing').val('');
                        $('#bladderDetails').val('');
                        $('#prodMonth').val('');
                        $('#printColor').val('');
                        $('#panelShape').val('');
                        $('#testType').prop('selected', false);
                        // $('#testType option:selected').remove();
                        $('#dQuantity').val('');
                        $('#anyInfo').val('');
                        loadFGTRequestwithoutCssNo();
                        FGTRequestwithCssNowithAknowledge();
                    }
                })

            } else {
                alert('All fields are required!');
            }
        });

        // function addCssModal(TID){
        //     $('#FGTId').val(TID);
        //     console.log(TID);
        //     $('#addCssModal').modal('show');
        // }

        function editFGT(TID) {

            url = "<?php echo base_url(''); ?>LabController/editFGTRequest";
            $.post(url, {
                TID: TID
            }, function(data) {
                if (data) {
                    $('#FGTId').val(data[0].TID);
                    $('#workingNo').val(data[0].WorkingNo);
                    $('#articleNo').val(data[0].Articleno);
                    $('#modelName').val(data[0].ModelName);
                    $('#size').val(data[0].Size);
                    $('#ballType').val(data[0].BallType);
                    $('#mainMatCol').val(data[0].mainmaterialColor);
                    $('#coverMat').val(data[0].Covermat);
                    $('#backing').val(data[0].backing);
                    $('#bladderDetails').val(data[0].Bladderdetail);
                    $('#prodMonth').val(data[0].ProductionMonth);
                    $('#printColor').val(data[0].Printingcolor);
                    $('#panelShape').val(data[0].panelShape);
                    $('#testType').val(data[0].testype);
                    $('#dQuantity').val(data[0].deliverqty);
                    $('#anyInfo').val(data[0].additionalinfo);
                    $('#saveFGTBtn').hide();
                    $('#updateFGTBtn').show();
                    $('#addFGTRequest').modal('toggle');
                } else {
                    alert('Something went wrong!')
                }

            });

        }

        $('#updateFGTBtn').on('click', function(e) {
            e.preventDefault();

            let url = "<?php echo base_url('LabController/updateFGTRequest') ?>";

            let TID = $('#FGTId').val();
            // let factoryCode = $('#factoryCode').val();
            let workingNo = $('#workingNo').val();
            let articleNo = $('#articleNo').val();
            let modelName = $('#modelName').val();
            let size = $('#size').val();
            let ballType = $('#ballType').val();
            let mainMatCol = $('#mainMatCol').val();
            let coverMat = $('#coverMat').val();
            let backing = $('#backing').val();
            let bladderDetails = $('#bladderDetails').val();
            let prodMonth = $('#prodMonth').val();
            let printColor = $('#printColor').val();
            let panelShape = $('#panelShape').val();
            let testType = $('#testType').val();
            let dQuantity = $('#dQuantity').val();
            let anyInfo = $('#anyInfo').val();

            $.post(url, {
                TID: TID,
                workingNo: workingNo,
                articleNo: articleNo,
                modelName: modelName,
                size: size,
                ballType: ballType,
                mainMatCol: mainMatCol,
                coverMat: coverMat,
                backing: backing,
                bladderDetails: bladderDetails,
                prodMonth: prodMonth,
                printColor: printColor,
                panelShape: panelShape,
                testType: testType,
                dQuantity: dQuantity,
                anyInfo: anyInfo,
            }, function(data) {
                if (data) {
                    $('#addFGTRequest').modal('toggle');
                    alert("Data updated successfully");
                    $('#workingNo').val('');
                    $('#articleNo').val('');
                    $('#modelName').val('');
                    $('#size').val('');
                    $('#ballType').val('');
                    $('#mainMatCol').val('');
                    $('#coverMat').val('');
                    $('#backing').val('');
                    $('#bladderDetails').val('');
                    $('#prodMonth').val('');
                    $('#printColor').val('');
                    $('#panelShape').val('');
                    $('#testType').val('');
                    $('#dQuantity').val('');
                    $('#anyInfo').val('');
                    loadFGTRequestwithoutCssNo();
                    FGTRequestwithCssNowithAknowledge();
                } else {
                    alert('Something went wrong!')
                }
            })
        });

        function deleteFGT(TID) {
            let confirmm = confirm("Are you sure you want to delete?");
            if (confirmm) {
                url = "<?php echo base_url(''); ?>LabController/deleteFGTRequest";


                $.post(url, {
                    TID: TID
                }, function(data) {
                    if (data == true) {
                        alert("FGT request deleted successfully")
                        loadFGTRequestwithoutCssNo();
                        FGTRequestwithCssNowithAknowledge();
                    }
                });
            } else {
                alert('Deletion is cancelled.')
            }
        }

        // Dashboard Mini data user wise request handling
        var TotalReq = [];
        var pendingOrNoCssNoFGT = [];
        var sendToLabOrAppliedCssNoFGT = [];
        var acknowledgedByLabFGT = [];

        var TotalReq3 = [];
        var pendingOrNoCssNoFGT3 = [];
        var sendToLabOrAppliedCssNoFGT3 = [];
        var acknowledgedByLabFGT3 = [];

        var user_id = <?php echo $user_id; ?>;
        console.log("user id is ", user_id);

        $(document).ready(function() {
            let date = new Date().toJSON().substr(0, 10);
            $("#start_date").val(date);
            $("#end_date").val(date);

            let currentDate = new Date().toJSON().substr(0, 7);
            console.log(currentDate);
            $('#getmonth').val(currentDate);


            url = "<?php echo base_url('LabController/allFGTRequests'); ?>"
            $.post(url, {
                "search": false
            }, function(data) {

                // FGT Requests
                // TotalReq = data.allFGTRequests;
                data.allFGTRequests.filter(item => {
                    if (item.userid == user_id) {
                        TotalReq.push(item);
                    }
                    if (item.RequestStatus == null && item.userid == user_id) {
                        pendingOrNoCssNoFGT.push(item)
                    }
                    if (item.RequestStatus == "Send to Lab" && item.userid == user_id) {
                        sendToLabOrAppliedCssNoFGT.push(item)
                    }
                    if ((item.RequestStatus == "Acknowledge By Lab" && item.userid == user_id)) {
                        acknowledgedByLabFGT.push(item)
                    }
                })
                let html = `<div class="col-md-4">
                                        </div>
                                        <div class="col-md-4 detailsClick " id="allFGTRequests">
                                            <a href="javascript:void(0)">
                                                <div class="p-3 bg-primary rounded overflow-hidden position-relative text-white mb-g">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                            ${TotalReq.length}
                                                            <small class="m-0 l-h-n "> <strong>Total FGT Requests </strong> </small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                        </div>

                                        <div class="col-md-4 detailsClick " id="pendingOrNoCssNoFGT">
                                            <a href="javascript:void(0)">
                                                <div class="p-3 bg-warning rounded overflow-hidden position-relative text-white mb-g">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                            ${pendingOrNoCssNoFGT.length}
                                                            <small class="m-0 l-h-n "> <strong>(No CSS No.) Requests </strong> </small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>
                                        

                                        <div class="col-md-4 detailsClick" id="sendToLabOrAppliedCssNoFGT" >
                                            <a href="javascript:void(0)">
                                                <div class="p-3 bg-danger rounded overflow-hidden position-relative text-white mb-g" >
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">

                                                        ${sendToLabOrAppliedCssNoFGT.length}
                                                            <small class="m-0 l-h-n"> <strong>(Applied CSS No./Send To Lab/Lab Pending) Requests</strong></small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4 detailsClick" id="acknowledgedByLabFGT">
                                            <a href="javascript:void(0)">
                                                <div class="p-3  rounded overflow-hidden position-relative text-white mb-g"
                                                style="background-color:green">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                        ${acknowledgedByLabFGT.length}
                                                            <small class="m-0 l-h-n"> <strong>(Aknowledged By Lab) Requests</strong></small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>`
                $("#counterShow").html("");
                $("#counterShow").html(html);


                // // New Raw Material Requests
                // // TotalReq3 = data.allNewRawMaterialRequests;
                // data.allNewRawMaterialRequests.filter(item => {
                //     if (item.userid == user_id) {
                //         TotalReq3.push(item);
                //     }
                //     if (item.status == 'Pending' && item.userid == user_id) {
                //         pendingOrNoCssNoFGT3.push(item)
                //     }
                //     if (item.status == "Send to Lab" && item.userid == user_id) {
                //         sendToLabOrAppliedCssNoFGT3.push(item)
                //     }
                //     if (item.LabAcknowledge == "Acknowledged" && item.userid == user_id) {
                //         acknowledgedByLabFGT3.push(item)
                //     }
                // })
                // let html3 = `        <div class="col-md-4">
                //                         </div>
                //                         <div class="col-md-4 detailsClick3 " id="allNewRawMaterialRequests">
                //                             <a href="javascript:void(0)">
                //                                 <div class="p-3 bg-primary rounded overflow-hidden position-relative text-white mb-g">
                //                                     <div class="">
                //                                         <h3 class="display-4 d-block l-h-n m-0 fw-500">
                //                                             ${TotalReq3.length}
                //                                             <small class="m-0 l-h-n "> <strong>Total Raw Material Requests </strong> </small>
                //                                         </h3>
                //                                     </div>
                //                                     <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                //                                 </div>
                //                             </a>
                //                         </div>
                                        
                //                         <div class="col-md-4">
                //                         </div>

                //                         <div class="col-md-4 detailsClick3 " id="pendingOrNoCssNoFGT3">
                //                             <a href="javascript:void(0)">
                //                                 <div class="p-3 bg-warning rounded overflow-hidden position-relative text-white mb-g">
                //                                     <div class="">
                //                                         <h3 class="display-4 d-block l-h-n m-0 fw-500">
                //                                             ${pendingOrNoCssNoFGT3.length}
                //                                             <small class="m-0 l-h-n "> <strong>(No CSS No.) Requests </strong> </small>
                //                                         </h3>
                //                                     </div>
                //                                     <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                //                                 </div>
                //                             </a>
                //                         </div>
                                        

                //                         <div class="col-md-4 detailsClick3" id="sendToLabOrAppliedCssNoFGT3" >
                //                             <a href="javascript:void(0)">
                //                                 <div class="p-3 bg-danger rounded overflow-hidden position-relative text-white mb-g">
                //                                     <div class="">
                //                                         <h3 class="display-4 d-block l-h-n m-0 fw-500">

                //                                         ${sendToLabOrAppliedCssNoFGT3.length}
                //                                             <small class="m-0 l-h-n"> <strong>(Applied CSS No./Send To Lab/Lab Pending) Requests</strong></small>
                //                                         </h3>
                //                                     </div>
                //                                     <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                //                                 </div>
                //                             </a>
                //                         </div>

                //                         <div class="col-md-4 detailsClick3" id="acknowledgedByLabFGT3">
                //                             <a href="javascript:void(0)">
                //                                 <div class="p-3 rounded overflow-hidden position-relative text-white mb-g"
                //                                 style="background-color:green">
                //                                     <div class="">
                //                                         <h3 class="display-4 d-block l-h-n m-0 fw-500">
                //                                         ${acknowledgedByLabFGT3.length}
                //                                             <small class="m-0 l-h-n"> <strong>(Aknowledged By Lab) Requests</strong></small>
                //                                         </h3>
                //                                     </div>
                //                                     <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                //                                 </div>
                //                             </a>
                //                         </div>`
                // $("#counterShow3").html("");
                // $("#counterShow3").html(html3);

            })


        });

        $("#counterShow").on('click', '.detailsClick', function(e) {
            let id = $(this).attr('id');
            // console.log(id)
            let data;
            let Title;
            if (id == "allFGTRequests") {
                data = TotalReq
                title = "Total FGT Requests"
            } else if (id == "pendingOrNoCssNoFGT") {
                data = pendingOrNoCssNoFGT
                title = "Pending/No CSS No. FGT Requests"
            } else if (id == "sendToLabOrAppliedCssNoFGT") {
                data = sendToLabOrAppliedCssNoFGT
                title = "Applied CSS NO/Send To Lab/Lab Pending Requests"
            } else if (id == "acknowledgedByLabFGT") {
                data = acknowledgedByLabFGT
                title = "Aknowledged By Lab Requests"
            }

            $("#reportData").html('')
            // console.log(data);return;




            let appendtable = '';
            appendtable += `<h1 style="text-align:center;font-weight:bolder;border:1px solid black;padding:20px">${title}</h3>
                                <table class="table table-bordered table-hover table-responsive table-striped w-100" id="OtReport">
                                <thead class="bg-primary-200 text-light p-2">
                                <tr>
                                    <th class="h5">Request Date</th>
                                    <th class="h5">Lab Aknowledged Date</th>
                                    <th class="h5">CSS NO</th>
                                    <th class="h5">Factory Code</th>
                                    <th class="h5">Working No</th>
                                    <th class="h5">Article No</th>
                                    <th class="h5">Modal Name</th>
                                    <th class="h5">Size</th>
                                    <th class="h5">Ball Type</th>                  
                                    <th class="h5">Main Material Color</th>
                                    <th class="h5">Convert Mat</th>
                                    <th class="h5">Backing</th>
                                    <th class="h5">Bladder Details</th>
                                    <th class="h5">Production Month</th>
                                    <th class="h5">Printing Color</th>
                                    <th class="h5">Panel Shape</th>
                                    <th class="h5">Test Type</th>
                                    <th class="h5">Deliever Qty</th>
                                    <th class="h5">Any Info</th>
                                    <th class="h5">Lab Status</th>
                                    <th class="h5">CSS Status</th>
                                    <th class="h5">Request Status</th>
                                    <th class="h5">Generated By</th>`
            if (id == 'acknowledgedByLabFGT') {

                appendtable += `<th class="h5">Action</th>`
            }

            appendtable += `</tr>
                                </thead>
                                <tbody>`
            data.forEach((element) => {
                appendtable += `<tr>
                            <td><span class="badge badge-info p-1">${element.Date != null ? element.Date.split("00:00:00")[0]: ''}</span></td>
                            <td><span class="badge badge-info p-1">${element.labAcceptDate != null ? element.labAcceptDate.split("00:00:00")[0]: ''}</span></td>
                            <td><span class="badge badge-warning p-1">${element.CssNO}</span></td>
                            <td>${element.factoryCode}</td>
                            <td>${element.WorkingNo}</td>
                            <td>${element.Articleno}</td>
                            <td>${element.ModelName}</td>
                            <td>${element.Size}</td>
                            <td>${element.BallType}</td>               
                            <td>${element.mainmaterialColor}</td>
                            <td><span>${element.Covermat}</span></td>
                            <td><span>${element.backing}</span></td>
                            <td><span> ${element.Bladderdetail} </span></td>
                            <td><span> ${element.ProductionMonth} </span></td>
                            <td><span> ${element.Printingcolor} </span></td>
                            <td><span> ${element.panelShape} </span></td>
                            <td><span> ${element.testype} </span></td>
                            <td><span> ${element.deliverqty} </span></td>
                            <td><span> ${element.additionalinfo} </span></td>
                            <td><span class="badge badge-secondary p-1">${element.LabStatus == null ? `Pending` : `Aknowledged`} </span></td>
                            <td><span class="badge badge-secondary p-1">${element.CsStatus == 1 ? `Applied Css` : `null`} </span></td>

                            <td><span class="badge badge-warning p-1">${element.RequestStatus}</span></td>
                            <td><span class="badge badge-danger p-1">${element.LoginName}</span></td>`

                if (id == 'acknowledgedByLabFGT') {
                    appendtable += `<td>
                                    <button type="button" style="display: inline-block;" class="btn btn-warning btn-xs updatebtn2" id="" onclick="printFgt('${element.TID}', '${element.CssNO}')"><i class="fal fa-print" aria-hidden="true" ></i></button> &nbsp;
                                    
                                    </td>`
                }

                appendtable += `</tr>`;
            })

            appendtable += `</tbody>

                                </table>`

            $("#reportData").html(appendtable)
            $('#OtReport').dataTable({
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
        })


        // $("#counterShow3").on('click', '.detailsClick3', function(e) {
        //     let id = $(this).attr('id');
        //     // console.log(id)
        //     let data;
        //     let Title;
        //     if (id == "allNewRawMaterialRequests") {
        //         data = TotalReq3
        //         title = "Total New Raw Material Requests"
        //     } else if (id == "pendingOrNoCssNoFGT3") {
        //         data = pendingOrNoCssNoFGT3
        //         title = "Pending/No CSS No. Raw Material Requests"
        //     } else if (id == "sendToLabOrAppliedCssNoFGT3") {
        //         data = sendToLabOrAppliedCssNoFGT3
        //         title = "Applied CSS NO/Send To Lab/Lab Pending Requests"
        //     } else if (id == "acknowledgedByLabFGT3") {
        //         data = acknowledgedByLabFGT3
        //         title = "Aknowledged By Lab Requests"
        //     }

        //     $("#reportData3").html('')
        //     console.log(data);




        //     let appendtable = '';
        //     appendtable += `<h1 style="text-align:center;font-weight:bolder;border:1px solid black;padding:20px">${title}</h3>
        //                         <table class="table table-bordered table-hover table-responsive table-striped w-100" id="OtReport3">
        //                         <thead class="bg-primary-200 text-light p-2">
        //                         <tr>
        //                             <th class="h5">CSS No</th>
        //                             <th class="h5">Request Generated Date</th>
        //                             <th class="h5">Completion Date</th>
        //                             <th class="h5">Due Date</th>
        //                             <th class="h5">Factory Code</th>
        //                             <th class="h5">Item Name</th>
        //                             <th class="h5">Lab Status</th>
        //                             <th class="h5">Material Type</th>
        //                             <th class="h5">PO No</th>
        //                             <th class="h5">Quantity Issued</th>
        //                             <th class="h5">Quantity Recieved</th>
        //                             <th class="h5">Quantity Retained</th>
        //                             <th class="h5">Remarks</th>
        //                             <th class="h5">Status</th>
        //                             <th class="h5">Supplier Name</th>
        //                             <th class="h5">Test Type</th>
        //                             <th class="h5">Material Type</th>
        //                             <th class="h5">Test Name</th>
        //                             <th class="h5">Lab Acknowledge</th>
        //                             <th class="h5">Generated By</th>
        //                             <th class="h5">Receiver Signature</th>
        //                             <th class="h5">Sender Signature</th>
        //                             <th class="h5">Undo Request</th>`
        //     if (id == 'acknowledgedByLabFGT3') {
        //         appendtable += `<th class="h5">Action</th>`

        //     }
        //     appendtable += `</tr>
        //                         </thead>
        //                         <tbody>`
        //     data.forEach((element) => {
        //         appendtable += `<tr>
        //                     <td><span class="badge badge-info p-1">${element.CSSNo != null ? element.CSSNo : ''}</span></td>
        //                     <td><span class="badge badge-warning p-1">${element.Date != null ? element.Date.split("00:00:00")[0] : ''}</span></td>
        //                     <td><span class="badge badge-warning p-1">${element.comDate != null ? element.comDate.split("00:00:00")[0] : ''}</span></td>
        //                     <td><span class="badge badge-warning p-1">${element.dueDate != null ? element.dueDate.split("00:00:00")[0] : ''}</span></td>
        //                     <td>${element.FactoryCode}</td>
        //                     <td>${element.itemName}</td>
        //                     <td><span class="badge badge-warning p-1">${element.LabStatus == 1 ? `Send To Lab` : ''}</span></td>
        //                     <td>${element.Type}</td>
        //                     <td>${element.Po}</td>
        //                     <td>${element.Quantity}</td>
        //                     <td>${element.qtyRece}</td>               
        //                     <td>${element.qtyRetain}</td>
        //                     <td><span>${element.remarks}</span></td>
        //                     <td><span class="badge badge-danger p-1"> ${element.status == "Pending" ? `Pending` : element.status == "Send to Lab" ? `Send to Lab` : `Locked`} </span></td>
        //                     <td><span> ${element.SupplierNam} </span></td>
        //                     <td><span> ${element.TestType} </span></td>
        //                     <td><span> ${element.Type} </span></td>
        //                     <td><span> ${element.comptest} </span></td>
        //                     <td><span class="badge badge-info p-1"> ${element.LabAcknowledge == "Acknowledged" ? `Acknowledged`: ``} </span></td>
        //                     <td><span> ${element.LoginName} </span></td>
        //                     <td><span> ${element.receSign} </span></td>
        //                     <td><span> ${element.senderSign} </span></td>

        //                     <td>
        //                     <button type="button" class="btn btn-danger btn-xs deleteBtn waves-effect waves-themed" id="undoBtn.${element.Requestid}"
        //                     ><i class="fal fa-delete" aria-hidden="true"></i>Delete</button>
        //                     </td>`
        //         if (id == 'acknowledgedByLabFGT3') {

        //             appendtable += `<td>
        //                         <button type="button" class="btn btn-warning btn-xs customprintButton" id="btnPrint.${element.Requestid}"><i class="fal fa-print" aria-hidden="true"></i></button>
        //                         </td>`
        //         }
        //         appendtable += `</tr>`
        //     })

        //     appendtable += `</tbody>

        //                         </table>`

        //     $("#reportData3").html(appendtable)
        //     $('#OtReport3').dataTable({
        //         responsive: false,
        //         lengthChange: false,
        //         dom:
        //             /*	--- Layout Structure 
        //                 --- Options
        //                 l	-	length changing input control
        //                 f	-	filtering input
        //                 t	-	The table!
        //                 i	-	Table information summary
        //                 p	-	pagination control
        //                 r	-	processing display element
        //                 B	-	buttons
        //                 R	-	ColReorder
        //                 S	-	Select

        //                 --- Markup
        //                 < and >				- div element
        //                 <"class" and >		- div with a class
        //                 <"#id" and >		- div with an ID
        //                 <"#id.class" and >	- div with an ID and a class

        //                 --- Further reading
        //                 https://datatables.net/reference/option/dom
        //                 --------------------------------------
        //              */
        //             "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
        //             "<'row'<'col-sm-12'tr>>" +
        //             "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        //         buttons: [
        //             /*{
        //                 extend:    'colvis',
        //                 text:      'Column Visibility',
        //                 titleAttr: 'Col visibility',
        //                 className: 'mr-sm-3'
        //             },*/
        //             {
        //                 extend: 'pdfHtml5',
        //                 text: 'PDF',
        //                 titleAttr: 'Generate PDF',
        //                 className: 'btn-outline-danger btn-sm mr-1'
        //             },
        //             {
        //                 extend: 'excelHtml5',
        //                 text: 'Excel',
        //                 titleAttr: 'Generate Excel',
        //                 className: 'btn-outline-success btn-sm mr-1'
        //             },
        //             {
        //                 extend: 'csvHtml5',
        //                 text: 'CSV',
        //                 titleAttr: 'Generate CSV',
        //                 className: 'btn-outline-primary btn-sm mr-1'
        //             },
        //             {
        //                 extend: 'copyHtml5',
        //                 text: 'Copy',
        //                 titleAttr: 'Copy to clipboard',
        //                 className: 'btn-outline-primary btn-sm mr-1'
        //             },
        //             {
        //                 extend: 'print',
        //                 text: 'Print',
        //                 titleAttr: 'Print Table',
        //                 className: 'btn-outline-primary btn-sm'
        //             }
        //         ]
        //     });
        // })

        // Search By Month
        $('#searchBtn').click(function() {
            $("#reportData").html('');
            $("#reportData3").html('');
            getmonth = $('#getmonth').val();
            console.log(getmonth);

            TotalReq.length = 0;
            pendingOrNoCssNoFGT.length = 0;
            sendToLabOrAppliedCssNoFGT.length = 0;
            acknowledgedByLabFGT.length = 0;

            TotalReq3.length = 0;
            pendingOrNoCssNoFGT3.length = 0;
            sendToLabOrAppliedCssNoFGT3.length = 0;
            acknowledgedByLabFGT3.length = 0;


            url = "<?php echo base_url('LabController/allFGTRequests'); ?>"
            $.post(url, {
                "getMonth": getmonth,
                "search": true
            }, function(data) {

                // FGT Requests
                data.allFGTRequests.filter(item => {
                    if (item.RequestStatus == null && item.userid == user_id) {
                        TotalReq.push(item);
                        pendingOrNoCssNoFGT.push(item)
                    }
                    if (item.RequestStatus == "Send to Lab" && item.userid == user_id) {
                        TotalReq.push(item);
                        sendToLabOrAppliedCssNoFGT.push(item)
                    }
                    if ((item.RequestStatus == "Acknowledge By Lab" && item.userid == user_id)) {
                        TotalReq.push(item);
                        acknowledgedByLabFGT.push(item)
                    }
                })
                let html = `<div class="col-md-4">
                                        </div>
                                        <div class="col-md-4 detailsClick" id="allFGTRequests">
                                            <a href="javascript:void(0)">
                                                <div class="p-3 bg-primary rounded overflow-hidden position-relative text-white mb-g">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                            ${TotalReq.length}
                                                            <small class="m-0 l-h-n "> <strong>Total FGT Requests </strong> </small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                        </div>

                                        <div class="col-md-4 detailsClick" id="pendingOrNoCssNoFGT">
                                            <a href="javascript:void(0)">
                                                <div class="p-3 bg-warning rounded overflow-hidden position-relative text-white mb-g">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                            ${pendingOrNoCssNoFGT.length}
                                                            <small class="m-0 l-h-n "> <strong>(No CSS No.) Requests </strong> </small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>
                                        

                                        <div class="col-md-4 detailsClick" id="sendToLabOrAppliedCssNoFGT" >
                                            <a href="javascript:void(0)">
                                                <div class="p-3 bg-danger rounded overflow-hidden position-relative text-white mb-g" >
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">

                                                        ${sendToLabOrAppliedCssNoFGT.length}
                                                            <small class="m-0 l-h-n"> <strong>(Applied CSS No./Send To Lab/Lab Pending) Requests</strong></small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4 detailsClick" id="acknowledgedByLabFGT">
                                            <a href="javascript:void(0)">
                                                <div class="p-3  rounded overflow-hidden position-relative text-white mb-g"
                                                style="background-color:green">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                        ${acknowledgedByLabFGT.length}
                                                            <small class="m-0 l-h-n"> <strong>(Aknowledged By Lab) Requests</strong></small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>`
                $("#counterShow").html("");
                $("#counterShow").html(html);


                // // New Raw Material Requests
                // data.allNewRawMaterialRequests.filter(item => {
                //     if (item.status == 'Pending' && item.userid == user_id) {
                //         TotalReq3.push(item);
                //         pendingOrNoCssNoFGT3.push(item)
                //     }
                //     if (item.status == "Send to Lab" && item.userid == user_id) {
                //         TotalReq3.push(item);
                //         sendToLabOrAppliedCssNoFGT3.push(item)
                //     }
                //     if (item.LabAcknowledge == "Acknowledged" && item.userid == user_id) {
                //         TotalReq3.push(item);
                //         acknowledgedByLabFGT3.push(item)
                //     }
                // })
                // let html3 = `        <div class="col-md-4">
                //                         </div>
                //                         <div class="col-md-4 detailsClick3" id="allNewRawMaterialRequests">
                //                             <a href="javascript:void(0)">
                //                                 <div class="p-3 bg-primary rounded overflow-hidden position-relative text-white mb-g">
                //                                     <div class="">
                //                                         <h3 class="display-4 d-block l-h-n m-0 fw-500">
                //                                             ${TotalReq3.length}
                //                                             <small class="m-0 l-h-n "> <strong>Total Raw Material Requests </strong> </small>
                //                                         </h3>
                //                                     </div>
                //                                     <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                //                                 </div>
                //                             </a>
                //                         </div>
                                        
                //                         <div class="col-md-4">
                //                         </div>

                //                         <div class="col-md-4 detailsClick3" id="pendingOrNoCssNoFGT3">
                //                             <a href="javascript:void(0)">
                //                                 <div class="p-3 bg-warning rounded overflow-hidden position-relative text-white mb-g">
                //                                     <div class="">
                //                                         <h3 class="display-4 d-block l-h-n m-0 fw-500">
                //                                             ${pendingOrNoCssNoFGT3.length}
                //                                             <small class="m-0 l-h-n "> <strong>(No CSS No.) Requests </strong> </small>
                //                                         </h3>
                //                                     </div>
                //                                     <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                //                                 </div>
                //                             </a>
                //                         </div>
                                        

                //                         <div class="col-md-4 detailsClick3" id="sendToLabOrAppliedCssNoFGT3" >
                //                             <a href="javascript:void(0)">
                //                                 <div class="p-3 bg-danger rounded overflow-hidden position-relative text-white mb-g">
                //                                     <div class="">
                //                                         <h3 class="display-4 d-block l-h-n m-0 fw-500">

                //                                         ${sendToLabOrAppliedCssNoFGT3.length}
                //                                             <small class="m-0 l-h-n"> <strong>(Applied CSS No./Send To Lab/Lab Pending) Requests</strong></small>
                //                                         </h3>
                //                                     </div>
                //                                     <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                //                                 </div>
                //                             </a>
                //                         </div>

                //                         <div class="col-md-4 detailsClick3" id="acknowledgedByLabFGT3">
                //                             <a href="javascript:void(0)">
                //                                 <div class="p-3 rounded overflow-hidden position-relative text-white mb-g"
                //                                 style="background-color:green">
                //                                     <div class="">
                //                                         <h3 class="display-4 d-block l-h-n m-0 fw-500">
                //                                         ${acknowledgedByLabFGT3.length}
                //                                             <small class="m-0 l-h-n"> <strong>(Aknowledged By Lab) Requests</strong></small>
                //                                         </h3>
                //                                     </div>
                //                                     <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                //                                 </div>
                //                             </a>
                //                         </div>`
                // $("#counterShow3").html("");
                // $("#counterShow3").html(html3);
            })
        })

        function printFgt(TID, CssNo) {
            url1 = '<?php echo base_url('LabController/getFGTTestReqHead'); ?>'
            url2 = '<?php echo base_url('LabController/getFGTTestReqDetails'); ?>'
            let returnedTID;
            $.post(url1, {
                    CssNo: CssNo
                },
                function(data, status) {
                    if (data != '') {
                        returnedTID = data[0]['TID'];
                        if (data[0]['FC'] == 'B34006') { //Airless Mini Formate
                            $('#labNoFGTAirlessMini').html(data[0]['LabNo']);
                            $('#cssNoFGTAirlessMini').html(data[0]['CssNo']);
                            $('#receiveDateFGTAirlessMini').html(data[0]['Receiving_Date']);
                            $('#testingDataFGTSAirlessMini').html(data[0]['Testing_DateS']);
                            $('#testingDataFGTEAirlessMini').html(data[0]['Testing_DateE']);
                            $('#issueDateFGTAirlessMini').html(data[0]['Issue_Date']);
                            $('#environmentalCondFGTAirlessMini').html(data[0]['EnvironmentalC']);
                            $('#testAccToCatFGTAirlessMini').html(data[0]['TestAccToCat']);
                            $('#coverMatFGTAirlessMini').html(data[0]['CoverMat']);
                            $('#backingFGTAirlessMini').html(data[0]['Backing']);
                            $('#bladderFGTAirlessMini').html(data[0]['Bladder']);
                            $('#ballTypeFGTAirlessMini').html(data[0]['BallType']);
                            $('#fifaStumpFGTAirlessMini').html(data[0]['Fifa_stump']);
                            $('#prodMonthFGTAirlessMini').html(data[0]['ProductionMon']);
                            $('#testTypeFGTAirlessMini').html(data[0]['TestType']);
                            $('#mainMatColorFGTAirlessMini').html(data[0]['MainMatColor']);
                            $('#printingColorFGTAirlessMini').html(data[0]['PrintingColor']);
                            $('#modelNameFGTAirlessMini').html(data[0]['ModelName']);
                            $('#acticleNoFGTAirlessMini').html(data[0]['Article']);
                            $('#workingNoFGTAirlessMini').html(data[0]['Working']);
                            $('#resultFGTAirlessMini').html(data[0]['Result']);
                            $('#testedbyFGtAirlessMini').html(data[0]['TestedBy']);
                            if (data[0]['freshImage']) {
                                $("#freshImageFGTAirlessMini").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].freshImage);
                            } else {
                                $("#freshImageFGTAirlessMini").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            if (data[0]['afterShooterImage']) {
                                $("#afterShooterImageFGTAirlessMini").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].afterShooterImage);
                            } else {
                                $("#afterShooterImageFGTAirlessMini").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            if (data[0]['hydrolysisImage']) {
                                $("#hydrolysisImageFGTAirlessMini").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].hydrolysisImage);
                            } else {
                                $("#hydrolysisImageFGTAirlessMini").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            if (data[0]['drumImage']) {
                                $("#drumImageFGTAirlessMini").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].drumImage);
                            } else {
                                $("#drumImageFGTAirlessMini").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }
                            $.post(url2, {
                                TID: returnedTID
                            }, function(data, status) {
                                // console.log("details data",data);
                                let html;
                                if (data) {
                                    data.forEach((element, index) => {
                                        html += `<tr>
                                                <td style="padding:left: 2px">${element.Test}</td>
                                                <th style="text-align:center">${element.Method }</th>
                                                <th style="text-align:center">${element.Condition}</th>
                                                <th style="text-align:center">${element.Unit}</th>
                                                <th style="text-align:center">${element.AirlessMiniSoccerball}</th>
                                                <th style="text-align:center">${element.Ball1}</th>
                                                <th style="text-align:center">${element.Ball2}</th>
                                                <th style="text-align:center">${element.Ball3}</th>
                                                <th style="text-align:center">${element.Ball4}</th>
                                                <th style="text-align:center">${element.Ball5}</th>
                                        </tr>`

                                    })
                                    $('#fgtTestDetailsAirlessMini').html(html);
                                }
                            });
                            $('#exampleModalFGTAirlessMiniTesting').modal('toggle');
                        } else if (data[0]['Type'] == 'Adhesion test') { //For FGT Adhesion test
                            $('#testNoFGTAdhesion').html(data[0]['TestNo']);
                            $('#dateFGTAdhesion').html(data[0]['Testing_DateS']);
                            $('#RecDateFGTAdhesion').html(data[0]['Receiving_Date']);
                            $('#cssNoFGTAdhesion').html(data[0]['CssNo']);
                            $('#articleNoFGTAdhesion').html(data[0]['Article']);
                            $('#articleNameFGTAdhesion').html(data[0]['ArticleName']);
                            $('#POFGTAdhesion').html(data[0]['PONo']);
                            $('#resultFGTAdhesion').html(data[0]['Result']);
                            $('#testedByFGTAdhesion').html(data[0]['TestedBy']);
                            $.post(url2, {
                                TID: returnedTID
                            }, function(data, status) {
                                // console.log("details data",data);
                                let html;
                                if (data) {
                                    data.forEach((element, index) => {
                                        html += `<tr>
                                                <td style="padding:left: 2px">${element.AdhesionDate}</td>
                                                <th style="text-align:center">${element.BatchReference}</th>
                                                <th style="text-align:center">${element.ArticleNo}</th>
                                                <th style="text-align:center">${element.Standard}</th>
                                                <th style="text-align:center">${element.MaxForce}</th>
                                                <th style="text-align:center">${element.AvgForce}</th>
                                                <th style="text-align:center">${element.Comments}</th>
                                        </tr>`

                                    })
                                    $('#fgtTestDetailsAdhesion').html(html);
                                }
                            });
                            $('#fgtTestingAdhesionModel').modal('toggle');
                        } else if (data[0]['Type'] == 'CSM Rebound') { // For FGT CSM Rebound
                            $('#labNoFGTCSM').html(data[0]['LabNo']);
                            $('#cssNoFGTCSM').html(data[0]['CssNo']);
                            $('#receiveDateFGTCSM').html(data[0]['Receiving_Date']);
                            $('#testingDataFGTSCSM').html(data[0]['Testing_DateS']);
                            $('#testingDataFGTECSM').html(data[0]['Testing_DateE']);
                            $('#issueDateFGTCSM').html(data[0]['Issue_Date']);
                            $('#environmentalCondFGTCSM').html(data[0]['EnvironmentalC']);
                            $('#testAccToCatFGTCSM').html(data[0]['TestAccToCat']);
                            $('#coverMatFGTCSM').html(data[0]['CoverMat']);
                            $('#backingFGTCSM').html(data[0]['Backing']);
                            $('#bladderFGTCSM').html(data[0]['Bladder']);
                            $('#pressureFGTCSM').html(data[0]['Pressure']);
                            $('#ballTypeFGTCSM').html(data[0]['BallType']);
                            $('#fifaStumpFGTCSM').html(data[0]['Fifa_stump']);
                            $('#prodMonthFGTCSM').html(data[0]['ProductionMon']);
                            $('#testTypeFGTCSM').html(data[0]['TestType']);
                            $('#mainMatColorFGTCSM').html(data[0]['MainMatColor']);
                            $('#modelNameFGTCSM').html(data[0]['ModelName']);
                            $('#printingColorFGTCSM').html(data[0]['PrintingColor']);
                            $('#acticleNoFGTCSM').html(data[0]['Article']);
                            $('#workingNoFGTCSM').html(data[0]['Working']);
                            $('#resultFGTCSM').html(data[0]['Result']);
                            $('#testedbyFGTCSM').html(data[0]['TestedBy']);
                            // if (data[0]['LabNo'].includes('MS')) {
                            //     $("#testRequestCSM").html("By Mr.Zeeshan Ikram - MS2@Forward.pk")
                            // }else if(data[0]['LabNo'].includes('LFB') || data[0]['LabNo'].includes('lfb')){
                            //     $("#testRequestCSM").html("By Ahmed Sb - Qc@forward.pk")
                            // } else {
                            //     $("#testRequestCSM").html("By Oman Sb - oman@forward.pk")
                            // }
                            if (data[0]['freshImage']) {
                                $("#freshImageFGTCSM").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].freshImage);
                            } else {
                                $("#freshImageFGTCSM").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            if (data[0]['afterShooterImage']) {
                                $("#afterShooterImageFGTCSM").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].afterShooterImage);
                            } else {
                                $("#afterShooterImageFGTCSM").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            if (data[0]['hydrolysisImage']) {
                                $("#hydrolysisImageFGTCSM").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].hydrolysisImage);
                            } else {
                                $("#hydrolysisImageFGTCSM").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            if (data[0]['drumImage']) {
                                $("#drumImageFGTCSM").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].drumImage);
                            } else {
                                $("#drumImageFGTCSM").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }
                            $.post(url2, {
                                TID: returnedTID
                            }, function(data, status) {
                                // console.log("details data",data);
                                let html;
                                if (data != '') {
                                    data.forEach((element, index) => {
                                        html += `<tr>
                                                            <td style="text-align:center">${element.Weight}</td>
                                                            <th style="text-align:center">${element.Average}</th>
                                                            <th style="text-align:center">${element.Min}</th>
                                                            <th style="text-align:center">${element.Max}</th>
                                                            <th style="text-align:center">${element.Diff}</th>
                                                            <th style="text-align:center">${element.Deviation}</th>
                                                            <th style="text-align:center">${element.Rebound}</th>
                                                            <th style="text-align:center">${element.Remarks}</th>
                                                        </tr>`

                                    })
                                    $('#fgtTestDetailsCSM').html(html);
                                }
                            });
                            $('#exampleModalFGTTestingCSMRebound').modal('toggle');

                        } else {
                            $('#labNoFGT').html(data[0]['LabNo']);
                            $('#cssNoFGT').html(data[0]['CssNo']);
                            $('#receiveDateFGT').html(data[0]['Receiving_Date']);
                            $('#testingDataFGTS').html(data[0]['Testing_DateS']);
                            $('#testingDataFGTE').html(data[0]['Testing_DateE']);
                            $('#issueDateFGT').html(data[0]['Issue_Date']);
                            $('#environmentalCondFGT').html(data[0]['EnvironmentalC']);
                            $('#testAccToCatFGT').html(data[0]['TestAccToCat']);
                            $('#coverMatFGT').html(data[0]['CoverMat']);
                            $('#backingFGT').html(data[0]['Backing']);
                            $('#bladderFGT').html(data[0]['Bladder']);
                            $('#ballTypeFGT').html(data[0]['BallType']);
                            $('#fifaStumpFGT').html(data[0]['Fifa_stump']);
                            $('#prodMonthFGT').html(data[0]['ProductionMon']);
                            $('#testTypeFGT').html(data[0]['TestType']);
                            $('#mainMatColorFGT').html(data[0]['MainMatColor']);
                            $('#printingColorFGT').html(data[0]['PrintingColor']);
                            $('#acticleNoFGT').html(data[0]['Article']);
                            $('#workingNoFGT').html(data[0]['Working']);
                            $('#resultFGT').html(data[0]['Result']);
                            $('#testedbyFGt').html(data[0]['TestedBy']);

                            if (data[0]['LabNo'].includes('MS')) {
                                $("#testRequest").html("By Mr.Zeeshan Ikram - MS2@Forward.pk")
                            } else {
                                $("#testRequest").html("By Oman Sb - oman@forward.pk")
                            }

                            if (data[0]['freshImage']) {
                                $("#freshImageFGT").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].freshImage);
                            } else {
                                $("#freshImageFGT").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            if (data[0]['afterShooterImage']) {
                                $("#afterShooterImageFGT").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].afterShooterImage);
                            } else {
                                $("#afterShooterImageFGT").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            if (data[0]['hydrolysisImage']) {
                                $("#hydrolysisImageFGT").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].hydrolysisImage);
                            } else {
                                $("#hydrolysisImageFGT").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            if (data[0]['drumImage']) {
                                $("#drumImageFGT").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].drumImage);
                            } else {
                                $("#drumImageFGT").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            $.post(url2, {
                                TID: returnedTID
                            }, function(data, status) {
                                // console.log("details data",data);
                                let html;
                                if (data) {
                                    data.forEach((element, index) => {
                                        if (index == 12) {
                                            let mergedRow = '';
                                            mergedRow += element.Method + "," + element.Condition;
                                            html += `<tr>
                                            <td style="padding:left: 2px">${element.Test}</td>
                                            <th style="text-align:center">` + mergedRow + `</th>
                                            <th style="text-align:center"></th>
                                            <th style="text-align:center">${element.Unit}</th>
                                            <th style="text-align:center">${element.Cat1}</th>
                                            <th style="text-align:center">${element.Cat2}</th>
                                            <th style="text-align:center">${element.Cat3}</th>
                                            <th style="text-align:center">${element.Min}</th>
                                            <th style="text-align:center">${element.Max}</th>
                                            <th style="text-align:center">${element.Remarks}</th>
                                        </tr>`
                                            // console.log("merged data", mergedRow);
                                        } else {
                                            html += `<tr>
                                                <td style="padding:left: 2px">${element.Test}</td>
                                                <th style="text-align:center">${element.Method }</th>
                                                <th style="text-align:center">${element.Condition}</th>
                                                <th style="text-align:center">${element.Unit}</th>
                                                <th style="text-align:center">${element.Cat1}</th>
                                                <th style="text-align:center">${element.Cat2}</th>
                                                <th style="text-align:center">${element.Cat3}</th>
                                                <th style="text-align:center">${element.Min}</th>
                                                <th style="text-align:center">${element.Max}</th>
                                                <th style="text-align:center">${element.Remarks}</th>
                                            </tr>`
                                        }
                                    })
                                    $('#fgtTestDetails').html(html);
                                }
                            });
                            $('#exampleModalFGTTesting').modal('toggle');
                        }
                    } else {
                        alert('Lab did not upload data(excel file) of this test type and with matched Css No. Contact Lab for your query!');
                    }

                })


        }

        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
            window.location.reload();
        }

        $('#searchFGTtest').on('click', function() {
            let url = "<?php echo base_url('LabController/FGTRequestDateRange'); ?>"

            var date1 = $("#date1").val();
            var date2 = $("#date2").val();

            var factoryCode = $("#factoryCode").val();

            $.post(url, {
                date1: date1,
                date2: date2,
                factoryCode: factoryCode
            }, function(data) {
                let html = `<table class="table table-bordered table-hover table-responsive table-striped table-sm w-100" style="width:100%" id="fgtReqDateRange">
                    <thead class="bg-primary-200 text-light p-2">
                    <tr>
                        <th class="h5">Css Date</th>
                        <th class="h5">Css No</th>
                        <th class="h5">Factory Code</th>
                        <th class="h5">Working No</th>
                        <th class="h5">Article No</th>
                        <th class="h5">Modal Name</th>
                        <th class="h5">Size</th>
                        <th class="h5">Ball Type</th>                  
                        <th class="h5">Main Material Color</th>
                        <th class="h5">Convert Mat</th>
                        <th class="h5">Backing</th>
                        <th class="h5">Bladder Details</th>
                        <th class="h5">Production Month</th>
                        <th class="h5">Printing Color</th>
                        <th class="h5">Panel Shape</th>
                        <th class="h5">Test Type</th>
                        <th class="h5">Deliever Qty</th>
                        <th class="h5">Any Info</th>
                        <th class="h5">Lab Status</th>
                        <!--<th class="h5">Receiver Signature</th>
                        <th class="h5">Sender Signature</th>-->
                        <th class="h5">Request Status</th>
                        <th class="h5">Lab Acnowleged Date</th>
                        <th class="h5">Generated By</th>
                        <!--<th class="h5">Action</th>-->
                        </tr>
                        </thead>
                        <tbody>`;
                if (data && data.length > 0) {
                    console.log("data", data);
                    data.forEach(element => {
                        html += `
                            <tr>        
                            <td><span class="badge badge-warning p-1">${element.CssDate ? element.CssDate.split("00:00:00")[0] : 'null'}</span></td>
                            <td><span class="badge badge-warning p-1">${element.CssNO}</span></td>
                            <td>${element.factoryCode}</td>
                            <td>${element.WorkingNo}</td>
                            <td>${element.Articleno}</td>
                            <td>${element.ModelName}</td>
                            <td>${element.Size}</td>
                            <td>${element.BallType}</td>               
                            <td>${element.mainmaterialColor}</td>
                            <td><span>${element.Covermat}</span></td>
                            <td><span>${element.backing}</span></td>
                            <td><span> ${element.Bladderdetail} </span></td>
                            <td><span> ${element.ProductionMonth} </span></td>
                            <td><span> ${element.Printingcolor} </span></td>
                            <td><span> ${element.panelShape} </span></td>
                            <td><span> ${element.testype} </span></td>
                            <td><span> ${element.deliverqty} </span></td>
                            <td><span> ${element.additionalinfo} </span></td>
                            <td><span class="badge badge-secondary p-1">${element.LabStatus == null ? `Pending` : `Aknowledged`} </span></td>

                            <!--<td> <span class="badge badge-primary p-1">Receiver Signature</span></td>

                            <td> <span class="badge badge-primary p-1">Sender Signature</span></td> -->

                            <td><span class="badge badge-warning p-1">${element.RequestStatus}</span></td>
                            <td><span class="badge badge-warning p-1">${element.labAcceptDate != null ? element.labAcceptDate.split("00:00:00")[0] : 'null'}</span></td>
                            <td><span class="badge badge-danger p-1">${element.LoginName}</span></td>
                            <!--<td>
                                <div class="col-md-2 d-flex">
                                    ${element.CssNO == null ? `<button type="button" style="display: inline-block;" class="btn btn-primary btn-xs updatebtn2" id="" onclick="editFGT(${element.TID})"><i class="fal fa-edit" aria-hidden="true"></i></button>  &nbsp;
                                    
                                    <button type="button" style="display: inline-block;" class="btn btn-danger btn-xs updatebtn2" id="" onclick="deleteFGT(${element.TID})"><i class="fal fa-trash" aria-hidden="true" ></i></button>` : `<span class="badge badge-danger p-1">Action Prohibited!</span>`}
                                    
                                    
                                </div>
                            </td>-->

                        </tr>`
                    })

                    html += `</tbody>
                            </table>`;
                    $("#tableData").html(html);

                    $('#fgtReqDateRange').dataTable({
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

                } else {

                    toastr["info"]("No data found!")
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": true,
                        "progressBar": true,
                        "positionClass": "toast-top-center",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "timeOut": 0,
                    }

                    $("#tableData").html(html);
                }

            });


        });
    </script>


    </body>

    </html>
<?php } ?>
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

                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i> <span>Pivot</span>

                        </h1>
                    </div>

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

                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="border px-3 pt-3 pb-0 rounded">
                                <ul class="nav nav-pills" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tab_direction-1" role="tab"><i class="fal fa-home mr-1"></i>LFB </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab_direction-2" role="tab">Final QC </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab_direction-3" role="tab">Panel Shape </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab_direction-4" role="tab">Assembling </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab_direction-5" role="tab">Dipping </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab_direction-6" role="tab">Cutting </a>
                                    </li>
                                </ul>

                                <div class="tab-content py-3">

                                    <div class="tab-pane fade show active" id="tab_direction-1" role="tabpanel">
                                        <div id="content">

                                            <?php

                                            $Day = date('d');
                                            $Month = date('m');
                                            $Year = date('Y');
                                            $CurrentDate = $Year . '-' . $Month . '-' . $Day;
                                            ?>
                                            <div class="row">

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label">From Date:</label>
                                                        <div class="input-group">
                                                            <input class="form-control" type="Date" id="SDate1" name="Sdate1" value="<?php echo $CurrentDate; ?>" style="width: 100%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label">To Date:</label>
                                                        <div class="input-group">
                                                            <input class="form-control" type="Date" id="EDate1" name="Edate1" value="<?php echo $CurrentDate; ?>" style="width: 100%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label class=" form-control-label"> </label>
                                                        <div class="input-group">

                                                            <button name="submit" onclick="LFB_func()" class="btn btn-success btn-block" style="border-radius: 15px;"><i class=" fa fa-search"></i> Search</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>

                                            <center>
                                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 65%; margin-top:-300px;">
                                                    <thead class="bg-primary-200 text-light" style="color: #fff;">
                                                        <th colspan="6" style="text-align: center;">LFB Details (<?php echo $Day; ?>/<?php echo $Month; ?>/<?php echo $Year; ?> )</th>
                                                    </thead>
                                                    <tr style="font-weight: bold;">
                                                        <td>Factory Code</td>

                                                        <td>Article Code</td>
                                                        <td>Model Name</td>

                                                        <td> Size</td>


                                                    </tr>

                                                    <?php



                                                    foreach ($getCarsasData as $Key) {

                                                    ?>
                                                        <tr>
                                                            <td><?php echo $Key['FactoryCode']; ?></td>
                                                            <td><?php echo $Key['ArtCode']; ?></td>
                                                            <td><?php echo $Key['ModelName']; ?></td>
                                                            <td><?php echo $Key['ArtSize']; ?></td>


                                                        </tr>
                                                    <?php
                                                    }

                                                    ?>
                                                </table>

                                                <br>
                                                <br>
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                        <div id="container3"></div>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                        <div id="container4"></div>
                                                    </div>
                                                </div>
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                                                <script src="https://code.highcharts.com/highcharts.js"></script>
                                                <script src="https://code.highcharts.com/highcharts-more.js"></script>


                                                <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
                                                

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab_direction-2" role="tabpanel">
                                        <?php
                                        $Month = date('m');
                                        $Year = date('Y');
                                        $Day = date('d');
                                        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
                                        ?>
                                        <div class="row">

                                            <div class="col-md-2">
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
                                                    <label class=" form-control-label"> </label>
                                                    <div class="input-group">

                                                        <button name="submit" onclick="FianlQc_func()" class="btn btn-success btn-block" style="border-radius: 15px;"><i class=" fa fa-search"></i> Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <center>
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 50%; margin-top:100px">
                                                <thead class="bg-primary-200 text-light" style="color: #fff;">
                                                    <th colspan="6" style="text-align: center;">Final QC Details (<?php echo $Day; ?>/<?php echo $Month; ?>/<?php echo $Year; ?> )</th>
                                                </thead>
                                                <tr style="font-weight: bold;">
                                                    <td>Factory Code</td>
                                                    <td>Article Code</td>
                                                    <td> Model Name</td>
                                                    <td> Size</td>
                                                </tr>
                                                <?php
                                                foreach ($getfinalQCData as $Key) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $Key['FactoryCode']; ?></td>
                                                        <td><?php echo $Key['ArtCode']; ?></td>
                                                        <td><?php echo $Key['ModelName']; ?></td>
                                                        <td><?php echo $Key['ArtSize']; ?></td>
                                                    </tr>
                                                <?php
                                                }

                                                ?>
                                            </table>
                                            <br>
                                            <br>
                                            <div class="row mt-2">
                                                <div class="col-md-12">
                                                    <div id="container1"></div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="row mt-2">
                                                <div class="col-md-12">
                                                    <div id="container2"></div>
                                                </div>
                                            </div>
                                        </center>
                                    </div>

                                    <div class="tab-pane fade" id="tab_direction-3" role="tabpanel">
                                        <center>
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 50%; margin-top:100px">
                                                <thead class="bg-primary-200 text-light" style="color: #fff;">
                                                    <th colspan="6" style="text-align: center;">Pannel Shape Details (<?php echo $Day; ?>/<?php echo $Month; ?>/<?php echo $Year; ?> )</th>
                                                </thead>
                                                <tr style="font-weight: bold;">
                                                    <td>Factory Code</td>
                                                    <td>Size</td>
                                                    <td> Material</td>
                                                    <td>Shape</td>

                                                </tr>
                                                <?php



                                                foreach ($getPanelShapeData as $Key) {

                                                ?>
                                                    <tr>
                                                        <td><?php echo $Key['FactoryCode']; ?></td>
                                                        <td><?php echo $Key['Type']; ?></td>
                                                        <td><?php echo $Key['ShapeName']; ?></td>
                                                        <td><?php echo $Key['MatName']; ?></td>


                                                    </tr>
                                                <?php
                                                }

                                                ?>
                                            </table>
                                        </center>
                                    </div>

                                    <div class="tab-pane fade" id="tab_direction-4" role="tabpanel">

                                        <center>
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 50%; ">
                                                <thead class="bg-primary-200 text-light" style="color: #fff;">
                                                    <th colspan="6" style="text-align: center;">Assembling Details (<?php echo $Day; ?>/<?php echo $Month; ?>/<?php echo $Year; ?> )</th>
                                                </thead>
                                                <tr style="font-weight: bold;">
                                                    <td>Factory Code</td>

                                                    <td>Size</td>
                                                    <td>ArtCode</td>

                                                </tr>
                                                <?php



                                                foreach ($getAssemblingData as $Key) {

                                                ?>
                                                    <tr>
                                                        <td><?php echo $Key['FactoryCode']; ?></td>
                                                        <td><?php echo $Key['Size']; ?></td>
                                                        <td><?php echo $Key['ArtCode']; ?></td>

                                                    </tr>
                                                <?php
                                                }

                                                ?>
                                            </table>
                                        </center>

                                    </div>

                                    <div class="tab-pane fade" id="tab_direction-5" role="tabpanel">
                                        <center>
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 50%; margin-top:-300PX;">
                                                <thead class="bg-primary-200 text-light" style="color: #fff;">
                                                    <th colspan="6" style="text-align: center;">Dipping Details (<?php echo $Day; ?>/<?php echo $Month; ?>/<?php echo $Year; ?> )</th>
                                                </thead>
                                                <tr style="font-weight: bold;">
                                                    <td>Factory Code</td>
                                                    <td>Size</td>
                                                    <td>Material</td>
                                                </tr>

                                                <?php

                                                foreach ($getDippingData as $Key) {

                                                ?>
                                                    <tr>
                                                        <td><?php echo $Key['VendorName']; ?></td>
                                                        <td><?php echo $Key['Size']; ?></td>
                                                        <td><?php echo $Key['MaterialName']; ?></td>

                                                    </tr>
                                                <?php
                                                }

                                                ?>
                                            </table>
                                        </center>
                                    </div>

                                    <div class="tab-pane fade" id="tab_direction-6" role="tabpanel">
                                        <center>
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 50%; ">
                                                <thead class="bg-primary-200 text-light" style="color: #fff;">
                                                    <th colspan="6" style="text-align: center;">Cutting Details</th>
                                                </thead>
                                                <tr>
                                                    <td colspan="3">Material Type:PU</td>
                                                </tr>
                                                <tr style="font-weight: bold;">
                                                    <td>Factory Code</td>
                                                    <td>Shape</td>
                                                    <td> Material</td>
                                                </tr>
                                                <?php
                                                foreach ($Data1 as $Key) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $Key['FactoryCode']; ?></td>
                                                        <td><?php echo $Key['MatName']; ?></td>
                                                        <td><?php echo $Key['ShpeName']; ?></td>

                                                    </tr>
                                                <?php
                                                }

                                                ?>



                                            </table>
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 50%; ">

                                                <tr>
                                                    <td colspan="3">Material Type:Fabric</td>
                                                </tr>

                                                <?php
                                                foreach ($Data2 as $Key) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $Key['FactoryCode']; ?></td>
                                                        <td><?php echo $Key['MatName']; ?></td>
                                                        <td><?php echo $Key['ShpeName']; ?></td>

                                                    </tr>
                                                <?php
                                                }

                                                ?>



                                            </table>
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 50%; ">

                                                <tr>
                                                    <td colspan="3">Material Type:Foam</td>
                                                </tr>

                                                <?php
                                                foreach ($Data3 as $Key) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $Key['FactoryCode']; ?></td>
                                                        <td><?php echo $Key['MatName']; ?></td>
                                                        <td><?php echo $Key['ShpeName']; ?></td>

                                                    </tr>
                                                <?php
                                                }

                                                ?>



                                            </table>
                                        </center>
                                    </div>


                                </div>

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
                                                            Sending you some dough today, you can allocate the resources to this
                                                            project.
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
                                            <span class="onoffswitch-title">Global Font Size <small>(RESETS ON REFRESH)</small>
                                            </span>
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
                                            <span class="onoffswitch-title-desc d-block mb-0">Change <strong>root</strong> font size
                                                to effect rem
                                                values</span>
                                        </div>
                                        <hr class="mb-0 mt-4">
                                        <div class="mt-2 d-table w-100 pl-5 pr-3">
                                            <div class="fs-xs text-muted p-2 alert alert-warning mt-3 mb-2">
                                                <i class="fal fa-exclamation-triangle text-warning mr-2"></i>The settings below uses
                                                localStorage to load
                                                the external CSS file as an overlap to the base css. Due to network latency and CPU
                                                utilization, you may
                                                experience a brief flickering effect on page load which may show the intial applied
                                                theme for a split
                                                second. Setting the prefered style/theme in the header will prevent this from
                                                happening.
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
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
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

                        //             function getRandomArbitrary(min, max) {
                        //     return (Math.random() * (max - min) + min).toFixed(1);
                        // }

                        $(document).ready(function() {
                            // FianlQc_func()


                            // temperature = getRandomArbitrary(10,30);

                            // $("#temperature").text(temperature);

                            $("#cssCode").select2();
                            /* init datatables */
                            $('#defualtTable').dataTable({
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
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js" integrity="sha512-gtII6Z4fZyONX9GBrF28JMpodY4vIOI0lBjAtN/mcK7Pz19Mu1HHIRvXH6bmdChteGpEccxZxI0qxXl9anY60w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                    <script src="<?php echo base_url() ?>assets/js/notifications/toastr/toastr.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



                    <script>
                        let fileSelectStore;
                        let HeaderArray = [];
                        let ChildArray = [];
                        let IdOfNewlyEnteredRecord;

                        function fileSelect(event) {
                            fileSelectStore = event[0];

                        }

                        function generateDataTop(data1) {


                            var ret = {}

                            artCode = []
                            strtWeight = []
                            EndWeight = []
                            weight = []
                            strtcircum = []
                            Endcircum = []
                            circum = []
                            len = data1.length;


                            for (var i = 0; i < data1.length; i++) {
                                // console.log(data1[i]);
                                artCode.push(data1[i]['ArtCode'])
                                strtWeight.push(parseInt(data1[i]['StrtWeight']))
                                EndWeight.push(parseInt(data1[i]['EndWeight']))
                                weight.push(parseInt(data1[i]['Weight']))
                                let circumfer = parseInt(data1[i]['Circum1'])
                                let circumfer1 = parseInt(data1[i]['Circum2'])
                                let circumfer2 = parseInt(data1[i]['Circum3'])
                                let circumfer3 = (circumfer + circumfer1 + circumfer2) / 3

                                strtcircum.push(parseInt(data1[i]['StrtRange']))
                                Endcircum.push(parseInt(data1[i]['EndRange']))
                                circum.push(parseInt(circumfer3))

                            }

                            return [artCode, strtWeight, EndWeight, weight, strtcircum, Endcircum, circum];
                        }


                        function generateDataLFB(data1) {


                            var ret = {}

                            artCode = []
                            strtWeight = []
                            EndWeight = []
                            weight = []
                            strtcircum = []
                            Endcircum = []
                            circum = []
                            len = data1.length;


                            for (var i = 0; i < data1.length; i++) {
                                // console.log(data1[i]);
                                artCode.push(data1[i]['ArtCode'])
                                strtWeight.push(parseInt(data1[i]['StrtWeight']))
                                EndWeight.push(parseInt(data1[i]['EndWeight']))
                                weight.push(parseInt(data1[i]['Weight']))
                                let circumfer = parseInt(data1[i]['Circum1'])
                                let circumfer1 = parseInt(data1[i]['Circum2'])
                                let circumfer2 = parseInt(data1[i]['Circum3'])
                                let circumfer3 = (circumfer + circumfer1 + circumfer2) / 3

                                strtcircum.push(parseInt(data1[i]['StrtRange']))
                                Endcircum.push(parseInt(data1[i]['EndRange']))
                                circum.push(parseInt(circumfer3))

                            }

                            return [artCode, strtWeight, EndWeight, weight, strtcircum, Endcircum, circum];
                        }



                        $("#submitData").click(function(e) {
                            e.preventDefault();
                            if (!fileSelectStore) {
                                toastr["error"]("Please Select FGT excel file  to upload", "Error!")

                                toastr.options = {
                                    "closeButton": false,
                                    "debug": false,
                                    "newestOnTop": true,
                                    "progressBar": true,
                                    "positionClass": "toast-top-right",
                                    "preventDuplicates": false,
                                    "onclick": null,
                                    "showDuration": 300,
                                    "hideDuration": 100,
                                    "timeOut": 5000,
                                    "extendedTimeOut": 1000
                                }
                                // Swal.fire({
                                //     position: 'top',
                                //     text: 'Please Select FGT excel file  to upload',

                                // })
                                return;
                            }
                            // $("#submitData").css("display", "none");
                            // $("#sendHeaderValues").css("display", "block");
                            // let CssCodeValue = $("#cssCode").val();
                            // let testType = $("#testType").val();

                            this.filetoupload = fileSelectStore;
                            var reader = new FileReader();
                            reader.readAsDataURL(this.filetoupload);
                            this.fileNameStore = this.filetoupload.name;

                            this.file = fileSelectStore;
                            let fileReader = new FileReader();
                            fileReader.readAsArrayBuffer(this.file);
                            fileReader.onload = (e) => {
                                this.arrayBuffer = fileReader.result;
                                var data = new Uint8Array(this.arrayBuffer);
                                var arr = new Array();
                                for (var i = 0; i != data.length; ++i) arr[i] = String.fromCharCode(data[i]);
                                var bstr = arr.join("");
                                const workbook = XLSX.read(bstr, {
                                    type: 'binary'
                                });
                                const firstSheetName = workbook.SheetNames[1];
                                const worksheet = workbook.Sheets[firstSheetName];

                                let arraylist = XLSX.utils.sheet_to_json(worksheet, {
                                    raw: false
                                });

                                let filelist = arraylist;
                                let testNo;
                                let cssNo;
                                filelist.forEach(element => {
                                    if (element.LABNO != "" && element.CSSNO != "" && element.TestingDate != "") {
                                        $("#submitData").css("display", "none");
                                        $("#sendHeaderValues").css("display", "block");
                                        let arrayHead = [element.LABNO, element.CSSNO, element.ReceivingDate,
                                            element.TestingDate, element.IssueDate, element.EnvironmentalCond,
                                            element.TestAccToCat, element.COVERMAT, element.BACKING, element
                                            .BLADDER, element.BALLTYPE, element.FIFAStamp, element
                                            .Productionmonth, element.TESTTYPE, element.MAINMATCOLOR, element
                                            .PRINTINGCOLORS, element.Article, element.Working, element.RESULT,
                                            element.TESTEDBY
                                        ];
                                        let arrayBody = [element.TEST, element.METHOD, element.CONDITION, element
                                            .UNIT, element.CAT1, element.CAT2, element.CAT3, element.MIN,
                                            element.MAX, element.REMARKS, ']'
                                        ];

                                        HeaderArray.push(arrayHead);
                                        ChildArray.push(arrayBody);
                                    } else {
                                        alert("Lab No and CSS No is required in Excel File!");
                                        $("#submitData").css("display", "block");
                                        $("#sendHeaderValues").css("display", "none");
                                        return;
                                        // let arrayBody = [testNumber, PONumber, element.Requirement, element.Test, element.Results, element.Value, ']'];
                                        // ChildArray.push(arrayBody)
                                    }
                                });
                                // console.log("header data", HeaderArray);
                                // console.log("child data", ChildArray);
                                $("#headerData").val(HeaderArray);
                                $("#childData").val(ChildArray);
                            };

                        });

                        function FianlQc_func() {
                            //alert("heloo");
                            let Sdate = $('#SDate').val();
                            let EDate = $('#EDate').val();
                            //var deptId = $("#dept]").val()
                            //alert(deptId);
                            data = {
                                "Sdate": Sdate,
                                "EDate": EDate,

                            }
                            let url = "<?php echo base_url('MIS/Dashboard/finalQc/') ?>";
                            // alert(Sdate)
                            // return;
                            //var section = $("#sectionID").val()
                            //alert(url);
                            //console.log(sec alert(deptId);tion ? "selected" : "not selected")
                            $.post(url, data, function(data) {
                                //articles = JSON.parse(data)
                                // console.log(articles);
                                // console.log(data);
                                //location.reload();
                                //   getemployeedata()
                                var seriesdate = generateDataTop(data)
                                // console.log(seriesdate[6]);
                                Highcharts.chart('container1', {

                                    title: {
                                        text: 'Weigth wise Graph'
                                    },

                                    yAxis: {
                                        title: {
                                            text: 'Weights'
                                        }
                                    },

                                    xAxis: {
                                        title: {
                                            text: 'Article Code'
                                        },
                                        categories: seriesdate[0]
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
                                            name: 'Weight Start',
                                            data: seriesdate[1]
                                        }, {
                                            name: 'Weight End',
                                            data: seriesdate[2]
                                        },
                                        {
                                            name: 'Weight',
                                            color: 'red',
                                            data: seriesdate[3]
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


                                Highcharts.chart('container2', {

                                    title: {
                                        text: 'Circumference wise Graph'
                                    },

                                    yAxis: {
                                        title: {
                                            text: 'Weights'
                                        }
                                    },

                                    xAxis: {
                                        title: {
                                            text: 'Article Code'
                                        },
                                        categories: seriesdate[0]
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
                                            name: 'Circumference Start',
                                            data: seriesdate[4]
                                        }, {
                                            name: 'Circumference End',
                                            data: seriesdate[5]
                                        },
                                        {
                                            name: 'Circumference',
                                            color: 'red',
                                            data: seriesdate[6]
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


                        function LFB_func() {
                            // alert("heloo");return;
                            // var Sdate1 = $('#SDate1').val();
                            // var EDate1 = $('#EDate1').val();
                            // //var deptId = $("#dept]").val()
                            // alert(Edate1);return;
                            data = {
                                "Sdate": $('#SDate1').val(),
                                "EDate": $('#EDate1').val(),

                            }
                            let url = "<?php echo base_url('MIS/Dashboard/LFB/') ?>";
                            // alert(Sdate)
                            // return;
                            //var section = $("#sectionID").val()
                            //alert(url);
                            //console.log(sec alert(deptId);tion ? "selected" : "not selected")
                            $.post(url, data, function(data) {
                                //articles = JSON.parse(data)
                                // console.log(articles);
                                // console.log(data);
                                //location.reload();
                                //   getemployeedata()
                                var seriesdate1 = generateDataLFB(data)
                                // console.log(seriesdate[6]);
                                Highcharts.chart('container3', {

                                    title: {
                                        text: 'Weigth wise Graph'
                                    },

                                    yAxis: {
                                        title: {
                                            text: 'Weights'
                                        }
                                    },

                                    xAxis: {
                                        title: {
                                            text: 'Article Code'
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
                                            name: 'Weight Start',
                                            data: seriesdate1[1]
                                        }, {
                                            name: 'Weight End',
                                            data: seriesdate1[2]
                                        },
                                        {
                                            name: 'Weight',
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
                                        text: 'Circumference wise Graph'
                                    },

                                    yAxis: {
                                        title: {
                                            text: 'Weights'
                                        }
                                    },

                                    xAxis: {
                                        title: {
                                            text: 'Article Code'
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
                                            name: 'Circumference Start',
                                            data: seriesdate1[4]
                                        }, {
                                            name: 'Circumference End',
                                            data: seriesdate1[5]
                                        },
                                        {
                                            name: 'Circumference',
                                            color: 'red',
                                            data: seriesdate1[6]
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


                        $("#sendHeaderValues").click(function(e) {
                            e.preventDefault()
                            freshImage = $('#freshImage')[0].files[0];
                            aftershooterImage = $('#afterShooterImage')[0].files[0];
                            hydrolysisImage = $('#hydrolysisImage')[0].files[0];
                            drumImage = $('#drumImage')[0].files[0];
                            console.log(freshImage);
                            url = "<?php echo base_url(''); ?>LabController/uploadFgtFile/";
                            var fd = new FormData();
                            // var H = JSON.stringify(HeaderArray);
                            // var C = JSON.stringify(ChildArray);

                            fd.append('HeaderArray', HeaderArray);
                            fd.append('ChildArray', ChildArray);
                            fd.append('freshImage', freshImage);
                            fd.append('afterShooterImage', aftershooterImage);
                            fd.append('hydrolysisImage', hydrolysisImage);
                            fd.append('drumImage', drumImage);
                            if (freshImage || aftershooterImage || hydrolysisImage || drumImage) {
                                $.ajax({
                                    url: url,
                                    type: 'post',
                                    data: fd,
                                    contentType: false,
                                    processData: false,
                                    beforeSend: function() {
                                        $("#alertShown").show();
                                    },
                                    complete: function() {
                                        $("#alertShown").hide();
                                    },
                                    success: function(data, status) {
                                        if (data == true) {
                                            alert("File Upload Successfully");
                                            setInterval(function() {
                                                window.location.reload();
                                            }, 1000);
                                        } else {
                                            alert("Failed to Upload! Error");
                                            setInterval(function() {
                                                window.location.reload();
                                            }, 1000);
                                        }

                                    }
                                });
                            } else {
                                alert("Please select any one images.");
                            }

                            // let file_data =  
                            // var fd = new FormData();
                            // var files = $("#img")[0].files[0];
                            // $("#alertShown").css("display", "block");
                            // let CssCodeValue = $("#cssCode").val();
                            // let testGroup = $("#testGroup").val();
                            // let testPerformer = $("#testPerformer").val();
                            // fd.append('file', files);
                            // fd.append('HeaderArray', HeaderArray);
                            // fd.append('ChildArray', ChildArray);
                            // fd.append('testGroup', testGroup);
                            // fd.append('testPerformer', testPerformer);
                            // fd.append('CSSCodeValue', CssCodeValue);
                            // let testType = $("#testType").val();
                            // console.log("Test type", testType)
                            // if (testType == 1) {
                            //     url = '<?php echo base_url('LabController/addHeadData'); ?>'

                            //     $.ajax({
                            //         url: url,
                            //         type: 'post',
                            //         data: fd,
                            //         contentType: false,
                            //         processData: false,
                            //         function(data, status) {
                            //             setInterval(function() {
                            //                 window.location.reload();
                            //             }, 2000);

                            //         }
                            //     });
                            // } else if (testType == 2) {
                            //     url = '<?php echo base_url('LabController/addHeadDataFoam'); ?>'

                            //     $.ajax({
                            //         url: url,
                            //         type: 'post',
                            //         data: fd,
                            //         contentType: false,
                            //         processData: false,
                            //         function(data, status) {

                            //             setInterval(function() {
                            //                 window.location.reload();
                            //             }, 2000);

                            //         }
                            //     });
                            // } else if (testType == 3) {
                            //     url = '<?php echo base_url('LabController/addHeadDataFabric'); ?>'

                            //     $.ajax({
                            //         url: url,
                            //         type: 'post',
                            //         data: fd,
                            //         contentType: false,
                            //         processData: false,
                            //         function(data, status) {

                            //             setInterval(function() {
                            //                 window.location.reload();
                            //             }, 2000);

                            //         }
                            //     });
                            // } else if (testType == 4) {
                            //     url = '<?php echo base_url('LabController/addHeadDataThread'); ?>'

                            //     $.ajax({
                            //         url: url,
                            //         type: 'post',
                            //         data: fd,
                            //         contentType: false,
                            //         processData: false,
                            //         function(data, status) {

                            //             setInterval(function() {
                            //                 window.location.reload();
                            //             }, 2000);

                            //         }
                            //     });
                            // } else if (testType == 5) {
                            //     url = '<?php echo base_url('LabController/addHeadDataBlader'); ?>'

                            //     $.ajax({
                            //         url: url,
                            //         type: 'post',
                            //         data: fd,
                            //         contentType: false,
                            //         processData: false,
                            //         function(data, status) {

                            //             setInterval(function() {
                            //                 window.location.reload();
                            //             }, 2000);

                            //         }
                            //     });
                            // } else if (testType == 6) {
                            //     url = '<?php echo base_url('LabController/addHeadDataMaterial'); ?>'

                            //     $.ajax({
                            //         url: url,
                            //         type: 'post',
                            //         data: fd,
                            //         contentType: false,
                            //         processData: false,
                            //         function(data, status) {

                            //             setInterval(function() {
                            //                 window.location.reload();
                            //             }, 2000);

                            //         }
                            //     });
                            // } else if (testType == 7) {
                            //     url = '<?php echo base_url('LabController/addHeadDataFGT'); ?>'

                            //     $.ajax({
                            //         url: url,
                            //         type: 'post',
                            //         data: fd,
                            //         contentType: false,
                            //         processData: false,
                            //         function(data, status) {

                            //             setInterval(function() {
                            //                 window.location.reload();
                            //             }, 2000);

                            //         }
                            //     });
                            // } else if (testType == 8) {
                            //     url = '<?php echo base_url('LabController/addHeadDataMSThread'); ?>'

                            //     $.ajax({
                            //         url: url,
                            //         type: 'post',
                            //         data: fd,
                            //         contentType: false,
                            //         processData: false,
                            //         function(data, status) {

                            //             setInterval(function() {
                            //                 window.location.reload();
                            //             }, 2000);

                            //         }
                            //     });
                            // } else if (testType == 9) {


                            //     url = '<?php echo base_url('LabController/addHeadDataMSMaterial'); ?>'


                            //     $.ajax({
                            //         url: url,
                            //         type: 'post',
                            //         data: fd,
                            //         contentType: false,
                            //         processData: false,
                            //         function(data, status) {

                            //             console.log(data);

                            //             setInterval(function() {
                            //                 window.location.reload();
                            //             }, 2000);

                            //         }
                            //     });

                            // } else if (testType == 10) {


                            //     url = '<?php echo base_url('LabController/addHeadDataPolyBag'); ?>'


                            //     $.ajax({
                            //         url: url,
                            //         type: 'post',
                            //         data: fd,
                            //         contentType: false,
                            //         processData: false,
                            //         function(data, status) {

                            //             console.log(data);

                            //             // setInterval(function() {
                            //             //     window.location.reload();
                            //             // }, 2000);

                            //         }
                            //     });

                            // } else if (testType == 11) {


                            //     url = '<?php echo base_url('LabController/addHeadDataAdhesion'); ?>'


                            //     $.ajax({
                            //         url: url,
                            //         type: 'post',
                            //         data: fd,
                            //         contentType: false,
                            //         processData: false,
                            //         function(data, status) {

                            //             console.log(data);

                            //             // setInterval(function() {
                            //             //     window.location.reload();
                            //             // }, 2000);

                            //         }
                            //     });

                            // } else if (testType == 12) {


                            //     url = '<?php echo base_url('LabController/addHeadDataCSM'); ?>'


                            //     $.ajax({
                            //         url: url,
                            //         type: 'post',
                            //         data: fd,
                            //         contentType: false,
                            //         processData: false,
                            //         function(data, status) {

                            //             console.log(data);

                            //             // setInterval(function() {
                            //             //     window.location.reload();
                            //             // }, 2000);

                            //         }
                            //     });

                            // }
                        });

                        $("#sendDetailsValues").click(function(e) {
                            e.preventDefault()

                            postData = {
                                ChildArray,
                                IdOfNewlyEnteredRecord
                            }

                            url = '<?php echo base_url('LabController/addBodyData'); ?>'

                            $.post(url, postData,
                                function(data, status) {});
                        });

                        //  <select class="form-control" id="testType" onchange="SetSheetNo()">
                        //  <option value="" selected>Select Test </option>
                        //  <option value="1" >Cotton Test</option>
                        //  <option value="2">Foam</option>
                        //  <option value="3">Fabric</option>
                        //  <option value="4">Thread</option>
                        //  <option value="5">SR Blader</option>
                        //  </select>
                        function getData() {


                            css = $("#cssCode").val();


                            //alert("heloo");

                            url = "<?php echo base_url(''); ?>LabController/getCssRaw"
                            $.post(url, {
                                "css": css
                            }, function(data) {
                                console.log(data);

                                materialType = data[0]['MaterialType'];
                                Type = data[0]['Type'];
                                //alert(Type);
                                $("#sheetNo").val(2);
                                $("#materialType").val(materialType);

                                if (materialType == 'Carton Test') {
                                    testType = 1;
                                } else if (materialType == 'Foam') {
                                    testType = 2;
                                } else if (materialType == 'Fabric') {
                                    testType = 3;
                                } else if (materialType == 'Thread') {
                                    testType = 4;
                                } else if (materialType == 'SR Blader') {
                                    testType = 5;
                                } else if (materialType == 'Material') {
                                    testType = 6;
                                } else if (materialType == 'FGT Report') {
                                    testType = 7;
                                } else if (materialType == 'MS Thread') {
                                    testType = 8;
                                } else if (materialType == 'MS Material') {
                                    testType = 9;
                                } else if (materialType == 'Poly Bag') {
                                    testType = 10;
                                } else if (materialType == 'Adhesion') {
                                    testType = 11;
                                } else if (materialType == 'CSM') {
                                    testType = 12;
                                }

                                //testtype=    $("#testType").val(testType);

                                let Sheetvalue;
                                if (testType == 1) {
                                    Sheetvalue = 2;
                                } else if (testType == 2) {
                                    Sheetvalue = 2;
                                } else if (testType == 3) {
                                    Sheetvalue = 2;
                                } else if (testType == 4) {
                                    Sheetvalue = 2;
                                } else if (testType == 5) {
                                    Sheetvalue = 2;
                                } else if (testType == 6) {
                                    Sheetvalue = 2;
                                } else if (testType == 7) {
                                    Sheetvalue = 2;
                                } else if (testType == 8) {
                                    Sheetvalue = 2;
                                } else if (testType == 9) {
                                    Sheetvalue = 2;
                                } else if (testType == 10) {
                                    Sheetvalue = 2;
                                } else if (testType == 11) {
                                    Sheetvalue = 2;
                                } else if (testType == 12) {
                                    Sheetvalue = 2;
                                }
                                //alert(materialType);
                                //alert(testType);
                                //alert(Sheetvalue);
                                $("#testType").val(testType);
                                $("#testGroup").val(Type);

                                //
                                //alert(Sheetvalue);
                                // $("#pcolors").val(data['css'][0]['PrintingColors']);
                                // $("#pshape").val(data['css'][0]['PanelShape']);
                                // $("#backing").val(data['css'][0]['L4Name']);
                                // $("#bladder").val(data['css'][1]['L4Name']);
                                // $("#cmat").val(data['css'][2]['L4Name']);

                            });
                        }


                        function getData2() {


                            css = $("#cssCode2").val();


                            //alert("heloo");

                            url = "<?php echo base_url(''); ?>LabController/getCssRaw"
                            $.post(url, {
                                "css": css
                            }, function(data) {
                                console.log(data);

                                materialType = data[0]['MaterialType'];
                                Type = data[0]['Type'];
                                //alert(Type);
                                $("#sheetNo").val(2);
                                $("#materialType").val(materialType);

                                if (materialType == 'Carton Test') {
                                    testType = 1;
                                } else if (materialType == 'Foam') {
                                    testType = 2;
                                } else if (materialType == 'Fabric') {
                                    testType = 3;
                                } else if (materialType == 'Thread') {
                                    testType = 4;
                                } else if (materialType == 'SR Blader') {
                                    testType = 5;
                                } else if (materialType == 'Material') {
                                    testType = 6;
                                } else if (materialType == 'FGT Report') {
                                    testType = 7;
                                } else if (materialType == 'MS Thread') {
                                    testType = 8;
                                } else if (materialType == 'MS Material') {
                                    testType = 9;
                                } else if (materialType == 'Poly Bag') {
                                    testType = 10;
                                } else if (materialType == 'Adhesion') {
                                    testType = 11;
                                } else if (materialType == 'CSM') {
                                    testType = 12;
                                }
                                //testtype=    $("#testType").val(testType);

                                let Sheetvalue;
                                if (testType == 1) {
                                    Sheetvalue = 2;
                                } else if (testType == 2) {
                                    Sheetvalue = 2;
                                } else if (testType == 3) {
                                    Sheetvalue = 2;
                                } else if (testType == 4) {
                                    Sheetvalue = 2;
                                } else if (testType == 5) {
                                    Sheetvalue = 2;
                                } else if (testType == 6) {
                                    Sheetvalue = 2;
                                } else if (testType == 7) {
                                    Sheetvalue = 2;
                                } else if (testType == 8) {
                                    Sheetvalue = 2;
                                } else if (testType == 9) {
                                    Sheetvalue = 2;
                                } else if (testType == 10) {
                                    Sheetvalue = 2;
                                } else if (testType == 11) {
                                    Sheetvalue = 2;
                                } else if (testType == 12) {
                                    Sheetvalue = 2;
                                }
                                //alert(materialType);
                                //alert(testType);
                                //alert(Sheetvalue);
                                $("#testType").val(testType);
                                $("#testGroup").val(Type);

                                //
                                //alert(Sheetvalue);
                                // $("#pcolors").val(data['css'][0]['PrintingColors']);
                                // $("#pshape").val(data['css'][0]['PanelShape']);
                                // $("#backing").val(data['css'][0]['L4Name']);
                                // $("#bladder").val(data['css'][1]['L4Name']);
                                // $("#cmat").val(data['css'][2]['L4Name']);

                            });
                        }



                        function SetSheetNo() {
                            testno = $("#testType").val();
                            //alert(testno);
                            let Sheetvalue;
                            if (testno == 1) {
                                Sheetvalue = 2;
                            } else if (testno == 2) {
                                Sheetvalue = 2;
                            } else if (testno == 3) {
                                Sheetvalue = 2;
                            } else if (testno == 4) {
                                Sheetvalue = 2;
                            } else if (testno == 5) {
                                Sheetvalue = 2;
                            } else if (testno == 6) {
                                Sheetvalue = 2;
                            } else if (testno == 7) {
                                Sheetvalue = 2;
                            } else if (testno == 8) {
                                Sheetvalue = 2;
                            } else if (testno == 9) {
                                Sheetvalue = 2;
                            } else if (testno == 10) {
                                Sheetvalue = 2;
                            } else if (testno == 11) {
                                Sheetvalue = 2;
                            } else if (testno == 12) {
                                Sheetvalue = 2;
                            }

                            $("#sheetNo").val(Sheetvalue);
                            //alert(Sheetvalue);

                        }


                        $('#customData').on('click', '.customundobtn', function() {

                            let id = this.id;
                            let split_value = id.split(".");
                            var TID = split_value[1];
                            var proceed = confirm("Are you sure you want to Delete?");
                            if (proceed) {
                                url = "<?php echo base_url(''); ?>LabController/undo/" + TID
                                $.get(url, function(data) {
                                    alert("Data Updated Successfully");
                                    location.reload();
                                });
                            } else {
                                alert("Undo Cancel");
                            }
                        });



                        $('.undobtn').click(function() {
                            let id = this.id;
                            let split_value = id.split(".");
                            var TID = split_value[1];
                            var proceed = confirm("Are you sure you want to Delete?");
                            if (proceed) {
                                url = "<?php echo base_url(''); ?>LabController/undo/" + TID
                                $.get(url, function(data) {
                                    alert("Data Updated Successfully");
                                    location.reload();
                                });
                            } else {
                                alert("Undo Cancel");
                            }


                        });



                        function CheckMisTest() {

                            // var checkMisTest = $('input[name="checkMisTest"]').is(':checked');


                            if ($('input[name="checkMisTest"]').is(':checked')) {

                                $("#checkCSSNo1").css("display", "none");
                                $("#checkCSSNo2").css("display", "block");
                            } else {

                                $("#checkCSSNo1").css("display", "block");
                                $("#checkCSSNo2").css("display", "none");
                            }
                        }



                        // function CheckBoxCssNo1(){

                        //     $("#checkCSSNo1").css("display", "block");
                        //     $("#checkCSSNo2").css("display", "none");

                        // }

                        // function CheckBoxCssNo2(){
                        //     $("#checkCSSNo1").css("display", "none");
                        //     $("#checkCSSNo2").css("display", "block");
                        // }
                    </script>
                    </body>

                    </html>


                <?php
            } ?>
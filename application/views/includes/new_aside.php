<aside class="page-sidebar">
    <div class="page-logo">
        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">

            <span class="page-logo-text mr-1"> <?php echo $username = $this->session->userdata(
                                                    'Username'
                                                ); ?></span>
            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
        </a>
    </div>
    <!-- BEGIN PRIMARY NAVIGATION -->
    <nav id="js-primary-nav" class="primary-nav" role="navigation">
        <div class="nav-filter">
            <div class="position-relative">
                <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                    <i class="fal fa-chevron-up"></i>
                </a>
            </div>
        </div>
        <?php
        $AdminStatus = $this->session->userdata('isAdmin');

        $lab = $this->session->userdata('lab');
        $Dev = $this->session->userdata('Dev');
        $store = $this->session->userdata('store');
        $admin = $this->session->userdata('admin');
        $testRequest = $this->session->userdata('testRequest');
        $FIT = $this->session->userdata('FIT');
        // Echo $FIT;
        // die;
        ?>
        <?php if ($admin == '1') { ?>
            <ul id="js-nav-menu" class="nav-menu">
                <li>
                    <a href="#" title="Application Intel" data-filter-tags="application intel">
                        <!-- <i class="fa fa-angle-double-down"></i> -->
                        <span class="nav-link-text" data-i18n="nav.application_intel">Dashboard</span>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>DashboardController" title="Introduction" data-filter-tags="application intel introduction">
                                <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Dashboard </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>main/Logout" title="Introduction" data-filter-tags="application intel introduction">
                                <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Logout </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" title="Application Intel" data-filter-tags="application intel">

                        <span class="nav-link-text" data-i18n="nav.application_intel">Lab</span>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo base_url(
                                            'MIS/Lab'
                                        ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Dashoard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(
                                            'MIS/Lab/Dashboard'
                                        ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Dashoard Filteration</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>LabController/master_form" title="Introduction" data-filter-tags="application intel introduction">
                                <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Raw Material Testing</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>FGT" title="Introduction" data-filter-tags="application intel introduction">
                                <span class="nav-link-text" data-i18n="nav.application_intel_introduction">FGT </span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>LabController/TestType" title="Introduction" data-filter-tags="application intel introduction">
                                <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Test Type </span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>LabController/TestRequestLab" title="Introduction" data-filter-tags="application intel introduction">
                                <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Test Requests Received </span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li>
                    <a href="#" title="Theme Settings" data-filter-tags="theme settings">

                        <span class="nav-link-text" data-i18n="nav.theme_settings">Development</span>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo base_url(
                                            'MIS/Developement'
                                        ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Dashoard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>DevelopmentController/master_form" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Developnment Activities</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>DevelopmentController/Process" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Process</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>DPA" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">DPA</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" title="Theme Settings" data-filter-tags="theme settings">

                        <span class="nav-link-text" data-i18n="nav.theme_settings">Test Request and Receive</span>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo base_url(
                                            'LabController/RDashbaord'
                                        ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Dashoard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>LabController/TestReceive" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Receive Form</span>
                            </a>
                        </li>


                        <li>
                            <a href="<?php echo base_url(
                                            ''

                                        ); ?>LabController/TestRequest" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Request Form</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="#" title="Theme Settings" data-filter-tags="theme settings">

                        <span class="nav-link-text" data-i18n="nav.theme_settings">MIS</span>
                    </a>
                    <ul>

                        <li>
                            <a href="#" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Production</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(
                                                    ''
                                                ); ?>MIS/Amb" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Airless Mini Ball</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/TM'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Thermo Bonded Ball</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/MS'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Machine Stitch Ball</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/HS'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Hand Stitch Ball</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/DW'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Date Wise</span>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li>
                            <a href="#" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Quality</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/Quality/Reports'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Reports</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/Quality/Dashboard'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Quality Analysis</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/DW/AMbReports'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">AMB Analysis</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/DW/Store'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">MS Store</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/DW/LFB'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">LFB Ball</span>
                                    </a>
                                </li>

                            </ul>

                        </li>
                        <!-- 
                        <li>
                            <a href="#" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Down Time</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/DW/Reports'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Reports</span>
                                    </a>
                                </li>


                            </ul>

                        </li> -->

                        <!-- <li>
                            <a href="#" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Efficiency</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/Efficiency'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Reports</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/Efficiency/samValue'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">ADD SAM Value</span>
                                    </a>
                                </li>

                            </ul>

                        </li> -->

                        <li>
                            <a href="#" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Time Analysis</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/Cutting'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Cutting</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/Carcas'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Carcas</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/Dipping'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Dipping</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/Asembling'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Assembling</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/PannelShape'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Panel Shape</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/FinalQC'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Final QC</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/LFBReport'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">LFB</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/Summary'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Summary</span>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li>
                            <a href="#" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Lab</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/Lab'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Dashoard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/Lab/Dashboard'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Dashoard Filteration</span>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li>
                            <a href="#" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Development</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/Developement'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Dashoard</span>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li>
                            <a href="#" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Environment control</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/TemHumidityController'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Temp and Humdity</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/ParametersController'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Conveyers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/MoldingController'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Moldings</span>
                                    </a>
                                </li>

                            </ul>

                        </li>
                        <li>
                            <a href="#" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Metal Detector</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(
                                                    'MIS/MetalDetectorController'
                                                ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Dashoard</span>
                                    </a>
                                </li>

                            </ul>

                        </li>

                    </ul>
                </li>

                <li>
                    <a href="#" title="Application Intel" data-filter-tags="application intel">
                        <!-- <i class="fal fa-info-tachometer"></i> -->
                        <span class="nav-link-text" data-i18n="nav.application_intel">DMMS</span>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo base_url(
                                            'index.php/DMMS/main/Home'
                                        ); ?>" title="Build Notes" data-filter-tags="application intel build notes">
                                <span class="nav-link-text" data-i18n="nav.application_intel_build_notes">Home</span>

                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(
                                            'index.php/DMMS/main/dmms_dashboard'
                                        ); ?>" title="DMMS Dashboard" data-filter-tags="application intel analytics dashboard">
                                <span class="nav-link-text" data-i18n="nav.application_intel_analytics_dashboard">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(
                                            'index.php/DMMS/main/Maintance_Dashboard'
                                        ); ?>" title="Privacy" data-filter-tags="application intel privacy">
                                <span class="nav-link-text" data-i18n="nav.application_intel_privacy">Maintance Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(
                                            'index.php/DMMS/OEE/OEE_Main'
                                        ); ?>" title="Privacy" data-filter-tags="application intel privacy">
                                <span class="nav-link-text" data-i18n="nav.application_intel_privacy">OEE</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(
                                            'index.php/DMMS/Main/BEC'
                                        ); ?>" title="Privacy" data-filter-tags="application intel privacy">
                                <span class="nav-link-text" data-i18n="nav.application_intel_privacy">BEC</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(
                                            'index.php/DMMS/teams'
                                        ); ?>" title="Privacy" data-filter-tags="application intel privacy">
                                <span class="nav-link-text" data-i18n="nav.application_intel_privacy">Teams</span>
                            </a>
                        </li>
                        <?php if ($AdminStatus == 1) { ?>
                            <li>
                                <a href="<?php echo base_url(
                                                'index.php/DMMS/teams/assignTeam'
                                            ); ?>" title="Build Notes" data-filter-tags="application intel build notes">
                                    <span class="nav-link-text" data-i18n="nav.application_intel_build_notes">Assign Team</span>

                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(
                                                'index.php/DMMS/main/Ideamints'
                                            ); ?>" title="Build Notes" data-filter-tags="application intel build notes">
                                    <span class="nav-link-text" data-i18n="nav.application_intel_build_notes">Machine Ideal Mints</span>

                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(
                                                'index.php/DMMS/main/Idealmachines'
                                            ); ?>" title="Build Notes" data-filter-tags="application intel build notes">
                                    <span class="nav-link-text" data-i18n="nav.application_intel_build_notes">Ideal Machine</span>

                                </a>
                            </li>

                        <?php } ?>


                    </ul>
                </li>

                <li>
                    <a href="#" title="Theme Settings" data-filter-tags="theme settings">

                        <span class="nav-link-text" data-i18n="nav.theme_settings">Outward Request</span>
                    </a>
                    <ul>
                        <!-- <li>
                            <a href="<?php echo base_url(
                                            'FIT'
                                        ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Dashoard</span>
                            </a>
                        </li> -->
                        <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>FitDashboard/dashboard" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works"> Dashboard </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>FIT/Capablity" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Lab Capability </span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>PaymentRequest/payment" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works"> Payment Request </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>PendingRequest/pendingRequest" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Test Requests </span>
                            </a>
                        </li>



                        <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>UploadResult/upload" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works"> Upload Result </span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>MaterialType/getMaterial" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works"> Material Type </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>BagType/getBags" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works"> Bag Type </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>BallType/getBalls" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works"> Ball Type </span>
                            </a>
                        </li> -->


                    </ul>
                </li>


                <li>
                    <a href="#" title="Theme Settings" data-filter-tags="theme settings">

                        <span class="nav-link-text" data-i18n="nav.theme_settings">Efficiency</span>
                    </a>
                    <ul>

                        <li>
                            <a href="<?php echo base_url('Efficiency') ?>" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="" data-i18n="nav.theme_settings_how_it_works">Dashboard</span>
                            </a>


                        </li>

                        <li>
                            <a href="<?php echo base_url('Efficiency/RWPD/?dept_id=23&section_id=118') ?>" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="" data-i18n="nav.theme_settings_how_it_works">RWPD</span>
                            </a>


                        </li>

                        <li>
                            <a href="#" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Cutting</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url("Efficiency/Cutting/?dept_id=15&section_id=72") ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Diamond Press</span>
                                    </a>
                                </li>


                            </ul>

                        </li>


                        <li>
                            <a href="<?php echo base_url('Lamination') ?>" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="" data-i18n="nav.theme_settings_how_it_works">Lamination</span>
                            </a>


                        </li>

                        <li>
                            <a href="<?php echo base_url('Throster') ?>" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="" data-i18n="nav.theme_settings_how_it_works">Throster</span>
                            </a>


                        </li>




                        <li>
                            <a href="#" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Packing</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url("TM_Packing/TM_Packing") ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">TM Packing</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url("AMB_Packing/AMB_Packing") ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">AMB Packing</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url('LFB_Packing/LFB_Packing') ?>" title="How it works" data-filter-tags="theme settings how it works">
                                        <span class="" data-i18n="nav.theme_settings_how_it_works">LFB Packing</span>
                                    </a>


                                </li>


                            </ul>

                        </li>

                        <li>
                            <a href="<?php echo base_url('Carcas/Carcas') ?>" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="" data-i18n="nav.theme_settings_how_it_works">Carcas</span>
                            </a>


                        </li>
                        <li>
                            <a href="<?php echo base_url('Core/Core') ?>" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="" data-i18n="nav.theme_settings_how_it_works">Core</span>
                            </a>


                        </li>
                        <li>
                            <a href="<?php echo base_url(
                                            'MIS/Efficiency/samValue'
                                        ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">ADD SAM Value</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url(
                                    'energy/Energycontroller'
                                ); ?>" title="Theme Settings" data-filter-tags="theme settings">

                        <span class="nav-link-text" data-i18n="nav.theme_settings">Energy</span>
                    </a>
                </li>
            </ul>
        <?php } else { ?>
            <ul id="js-nav-menu" class="nav-menu">
                <?php
                if ($lab == '1') { ?>
                    <li>
                        <a href="#" title="Application Intel" data-filter-tags="application intel">
                            <!-- <i class="fa fa-angle-double-down"></i> -->
                            <span class="nav-link-text" data-i18n="nav.application_intel">Lab</span>
                        </a>
                        <ul>
                            <!-- <li>
                                        <a href="<?php echo base_url(
                                                        ''
                                                    ); ?>LabController" title="Introduction" data-filter-tags="application intel introduction">
                                            <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Dashboard</span>
                                        </a>
                                    </li> -->
                            <li>
                                <a href="<?php echo base_url(
                                                ''
                                            ); ?>LabController/master_form" title="Introduction" data-filter-tags="application intel introduction">
                                    <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Raw Material Testing</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(
                                                ''
                                            ); ?>FGT" title="Introduction" data-filter-tags="application intel introduction">
                                    <span class="nav-link-text" data-i18n="nav.application_intel_introduction">FGT </span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url(
                                                ''
                                            ); ?>LabController/TestType" title="Introduction" data-filter-tags="application intel introduction">
                                    <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Test Type </span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url(
                                                ''
                                            ); ?>LabController/TestRequestLab" title="Introduction" data-filter-tags="application intel introduction">
                                    <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Test Requests Received </span>
                                </a>
                            </li>
                        </ul>


                    </li>
                <?php }

                if ($store == '1') { ?>
                    <!-- <li>
                                <a href="#" title="Theme Settings" data-filter-tags="theme settings">
                                    <i class="fa fa-angle-double-down"></i> 
                                    <span class="nav-link-text" data-i18n="nav.theme_settings">Store</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url(
                                                        ''
                                                    ); ?>StoreController" title="How it works" data-filter-tags="theme settings how it works">
                                            <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Dashboard</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo base_url(
                                                        ''
                                                    ); ?>StoreController/master_form" title="How it works" data-filter-tags="theme settings how it works">
                                            <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Master Data</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo base_url(
                                                        ''
                                                    ); ?>StoreController/request_form" title="How it works" data-filter-tags="theme settings how it works">
                                            <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Request Generation</span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>  -->
                <?php }

                if ($Dev == '1') { ?>
                    <li>
                        <a href="#" title="Theme Settings" data-filter-tags="theme settings">

                            <span class="nav-link-text" data-i18n="nav.theme_settings">Development</span>
                        </a>
                        <ul>
                            <!-- <li>
                                        <a href="<?php echo base_url(
                                                        ''
                                                    ); ?>DevelopmentController" title="How it works" data-filter-tags="theme settings how it works">
                                            <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Dashboard</span>
                                        </a>
                                    </li> -->
                            <li>
                                <a href="<?php echo base_url(
                                                ''
                                            ); ?>DevelopmentController/master_form" title="How it works" data-filter-tags="theme settings how it works">
                                    <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Developnment Activities</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(
                                                ''
                                            ); ?>DevelopmentController/Process" title="How it works" data-filter-tags="theme settings how it works">
                                    <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Process</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(
                                                ''
                                            ); ?>DPA" title="How it works" data-filter-tags="theme settings how it works">
                                    <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">DPA</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php }
                ?>
                <li>
                    <a href="#" title="Theme Settings" data-filter-tags="theme settings">

                        <span class="nav-link-text" data-i18n="nav.theme_settings">Test Request</span>
                    </a>
                    <ul>

                        <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>LabController/TestRequest" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Request Form</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <?php
                if ($testRequest == '1') {


                ?>

                    <li>
                        <a href="#" title="Theme Settings" data-filter-tags="theme settings">

                            <span class="nav-link-text" data-i18n="nav.theme_settings">Test Receive</span>
                        </a>
                        <ul>

                            <li>
                                <a href="<?php echo base_url(
                                                ''
                                            ); ?>LabController/TestReceive" title="How it works" data-filter-tags="theme settings how it works">
                                    <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Receive Form</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                <?php
                }

                if ($FIT == '1') {
                ?>
                    <li>
                        <a href="#" title="Theme Settings" data-filter-tags="theme settings">

                            <span class="nav-link-text" data-i18n="nav.theme_settings">Outward Request</span>
                        </a>
                        <ul>
                            <!-- <li>
                            <a href="<?php echo base_url(
                                            'FIT'
                                        ); ?>" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Dashoard</span>
                            </a>
                        </li> -->
                            li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>FitDashboard/dashboard" title="How it works" data-filter-tags="theme settings how it works">
                                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works"> Dashboard </span>
                            </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(
                                        ''
                                    ); ?>FIT/Capablity" title="How it works" data-filter-tags="theme settings how it works">
                            <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Lab Capability </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(
                                        ''
                                    ); ?>PaymentRequest/payment" title="How it works" data-filter-tags="theme settings how it works">
                            <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works"> Payment Request </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(
                                        ''
                                    ); ?>PendingRequest/pendingRequest" title="How it works" data-filter-tags="theme settings how it works">
                            <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">Test Requests </span>
                        </a>
                    </li>



                    <li>
                        <a href="<?php echo base_url(
                                        ''
                                    ); ?>UploadResult/upload" title="How it works" data-filter-tags="theme settings how it works">
                            <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works"> Upload Result </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(
                                        ''
                                    ); ?>MaterialType/getMaterial" title="How it works" data-filter-tags="theme settings how it works">
                            <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works"> Material Type </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(
                                        ''
                                    ); ?>BagType/getBags" title="How it works" data-filter-tags="theme settings how it works">
                            <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works"> Ball Type </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(
                                        ''
                                    ); ?>BallType/getBalls" title="How it works" data-filter-tags="theme settings how it works">
                            <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works"> Bag Type </span>
                        </a>
                    </li>

            </ul>
            </li>
    <?php
                }
            } ?>
    </ul>



    <div class="filter-message js-filter-message bg-success-600"></div>
    </nav>
    <!-- END PRIMARY NAVIGATION -->
    <!-- NAV FOOTER -->

</aside>
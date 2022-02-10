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
                                            ''
                                        ); ?>FGT" title="Introduction" data-filter-tags="application intel introduction">
                                <span class="nav-link-text" data-i18n="nav.application_intel_introduction">FGT </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(
                                            ''
                                        ); ?>LabController/master_form" title="Introduction" data-filter-tags="application intel introduction">
                                <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Raw Material Testing</span>
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
                    </ul>
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
                        </ul>
                    </li>
            <?php }
            } ?>
            </ul>



            <div class="filter-message js-filter-message bg-success-600"></div>
    </nav>
    <!-- END PRIMARY NAVIGATION -->
    <!-- NAV FOOTER -->

</aside>
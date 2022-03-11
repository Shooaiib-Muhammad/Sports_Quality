<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img style="width: 40%;" src="<?php echo base_url(); ?>assets/Admin/images/Forward.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="<?php echo base_url(); ?>assets/Admin/images/Forward.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url(
                            'Welcome/Dashboard'
                        ); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>

                    <!-- <li >
                        <a href="<?php echo base_url(
                            'Orders'
                        ); ?>" > <i class="menu-icon fa fa-laptop"></i>Orders In Hands</a>
                    </li> -->


                    <li class="menu-item-has-children dropdown">
                        <a href="<?php echo base_url(
                            'Orders'
                        ); ?>" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Production</a>
                        <ul class="sub-menu children dropdown-menu">
                           <!-- <li >
                               <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'Trends'
                                ); ?>">Trends</a>
                            </li> -->
                            <li >
                               <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/AMB'
                                ); ?>">Airless Mini Ball</a>
                            </li>
                             <li>
                              <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/TM'
                                ); ?>">Thermo Bonded Ball</a>
                            </li>
                            <li>
                               <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/MS'
                                ); ?>">Machine Stitch Ball</a>
                            </li>
                              <li>
                               <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/HS'
                                ); ?>">Hand Stitch Stitch Ball</a>
                            </li>
                             <li>
                               <i class="menu-icon fa fa-calendar"></i>
                                <a href="<?php echo base_url(
                                    'MIS/DW'
                                ); ?>">Date Wise</a>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Quality</a>
                           <ul class="sub-menu children dropdown-menu">

                                <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                    <a href="<?php echo base_url(
                                        'MIS/Quality/Reports'
                                    ); ?>">Reports</a>
                                </li>
                                <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                    <a href="<?php echo base_url(
                                        'MIS/Quality/Dashboard'
                                    ); ?>">Quality Analysis</a>
                                </li>
                                <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                    <a href="<?php echo base_url(
                                        'MIS/DW/AMbReports'
                                    ); ?>">AMB Analysis</a>
                                </li>

                                <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/DW/Store'
                                ); ?>">MS Store</a>
                                </li>
                                <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/DW/LFB'
                                ); ?>">LFB Ball</a>
                                </li>
                             <li>

                        </ul>
                    </li>
                    <!-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-th"></i>MS Store</a>
                           <ul class="sub-menu children dropdown-menu">
                              <li >


                             <li>

                        </ul>
                    </li> -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-th"></i>Down Time</a>
                           <ul class="sub-menu children dropdown-menu">
                              <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                    <a href="<?php echo base_url(
                                        'MIS/DW/Reports'
                                    ); ?>">Reports</a>
                                </li>
                             <li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-th"></i>Efficiency</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/Efficiency'
                                ); ?>">Reports</a>
                            </li>
                             <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/Efficiency/samValue'
                                ); ?>">Add SAM Value</a>
                            </li>
                            <li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-th"></i>Tm Analysis</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/Cutting'
                                ); ?>">Cutting</a>
                            </li>
                            <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/Carcas'
                                ); ?>">Carcas</a>
                            </li>
                            <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/Dipping'
                                ); ?>">Dipping</a>
                            </li>
                            <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/Asembling'
                                ); ?>">Assembling</a>
                            </li>
                            <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/PannelShape'
                                ); ?>">Panel Shape</a>
                            </li>
                             <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/FinalQC'
                                ); ?>">Final QC</a>
                            </li>
                             <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/LFBReport'
                                ); ?>">LFB</a>
                            </li>
                            <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/Summary'
                                ); ?>">Summary</a>
                            </li>
                        </ul>
                    </li>
                       <!-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-th"></i>Development</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/Developement'
                                ); ?>">Dashboard</a>
                            </li>
                          
                        </ul>
                    </li> -->
                       <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-th"></i>Lab</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/Lab'
                                ); ?>">Dashboard</a>
                            </li>
                             <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/Lab/Dashboard'
                                ); ?>">Dashboard Filteration</a>
                            </li>
                          
                        </ul>
                    </li>
    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-th"></i>Development </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/Developement'
                                ); ?>">Dashboard</a>
                            </li>
                          
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-th"></i>Environment control</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/TemHumidityController'
                                ); ?>">Temp and Humdity</a>
                            </li>

                            <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/ParametersController'
                                ); ?>">Conveyers</a>
                            </li>

                            <li >
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url(
                                    'MIS/MoldingController'
                                ); ?>">Moldings</a>
                            </li>
                            
                          
                        </ul>
                    </li>
              <!-- <li >
                        <a href="#" > <i class="menu-icon fa fa-laptop"></i>Inspection</a>
                    </li>

                        <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Efficiency</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li >
                               <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="<?php echo base_url('Eff'); ?>">All</a>
                            </li>


                        </ul>
                          <li >
                        <a href="#" > <i class="menu-icon fa fa-laptop"></i>Packing</a>
                    </li>
                       <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Westage</a>
                         <ul class="sub-menu children dropdown-menu">
                            <li >
                               <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="#">AMB</a>
                            </li>
                             <li>
                              <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="#">TM</a>
                            </li>
                            <li>
                               <i class="menu-icon fa fa-bar-chart"></i>
                                <a href="#">MS</a>
                            </li> -->
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>

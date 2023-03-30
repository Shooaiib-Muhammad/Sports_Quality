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


                    <style>
                        video {
                        min-width: 100%;
                        min-height: 100vh;
                        z-index: 1;
                        }
                        h1 {
                        text-align: center;
                        color: #fff;
                        position: absolute;
                        top: 0;
                        bottom: 20px;
                        left: 0;
                        right: 0;
                        margin: auto;
                        z-index: 1;
                        width: 100%;
                        height: 50px;
                        font-size: 40px;
                        }
                        .desc{
                        text-align: center;
                        color: #fff;
                        position: absolute;
                        top: 90px;
                        bottom: 0;
                        left: 0;
                        right: 0;
                        margin: auto;
                        z-index: 2;
                        max-width: 200px;
                        width: 100%;
                        height: 50px;
                        border-radius: 5px;
                        background-color: #ddd;
                        }
                        .desc p{
                            padding-top: 10px;
                            color: black;
                            font-weight: bold;
                            font-size: 20px;
                            font-family: 'Arial';
                        }
                    </style>
                    <?php
                    $GetHoursMSLines = array();
                    $GetReadingMSLines = array();
                    //$target = array();
                    //print_r($HourllyReading);
                    foreach ($StationwiseMSLines as $key) {
                        date_default_timezone_set('Asia/Karachi');
                     $dateTimeObject1 = date_create(date('Y').'-'.date('m').'-'.date('d').' '.date('H').':'.date('i').''); 
                    $dateTimeObject2 = date_create(date('Y').'-'.date('m').'-'.date('d').' 07:45'); 
                    
                    $difference = date_diff($dateTimeObject1, $dateTimeObject2); 
                    $minutes = $difference->days * 24 * 60;
                    $minutes += $difference->h * 60;
                    $minutes += $difference->i;
                    if(date('H') >= 14){
                        if(date('w') == 4){
                            $minutes = $minutes - 60;
                        }
                        else{
                            $minutes = $minutes - 45; 
                        }
                    }
                    
                        $point1 = array(round(((($key['PassQty']*7.74)/($minutes*20))*100),2),);
                        $point2 = array($key['StationName'],);
                        $dailytarget = 3000 / 6;
                        $point3 = $dailytarget / 8;
                        
                        array_push($GetReadingMSLines, $point1);
                        array_push($GetHoursMSLines, $point2);
                        // array_push($target, $point3);
                        //array_push($lineNames, $key['LineName']);
                    
                    } 
                    ?>
                    <div class="bg-video-wrap">
                        <!-- test -->
                        <!-- <video src="<?php echo base_url('assets/pexels-cottonbro-10349005.mp4') ?>" controls loop muted autoplay>
                        </video> -->
<!--                        
                        <h1 class="w-100">Welcome to Forward Sports MIS System</h1>
                        <div class="desc">
                            <p class="p">The Soccer Expert</p>

                        </div> -->
                    </div>
                    
                    
                        <div class="row">
                            <div class="col-xl-6">
                            <div id="panel-11" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                        Machine Stitch Ball Efficiency</span>
                                        </h2>
                                       
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="border px-3 pt-3 pb-0 rounded">
                                                <ul class="nav nav-pills" role="tablist">
                                               
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#tab_borders_icons-1" role="tab"><i class="fal fa-home mr-1"></i> MSB Product Efficiency </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-2" role="tab">Bladder Winding  <i class="fal fa-percent mr-1"></i> </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-39" role="tab">Sheet Sizing  <i class="fal fa-percent mr-1"></i> </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-3" role="tab">Panel Cutting  <i class="fal fa-percent mr-1"></i>  </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-4" role="tab">MS Lines  <i class="fal fa-percent mr-1"></i> </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-5" role="tab"> RWPD  <i class="fal fa-percent mr-1"></i> </a>
                                                </li>
                                            </ul>
                                                <div class="tab-content py-3">
                                                <div class="tab-pane fade show active" id="tab_borders_icons-1" role="tabpanel">
                                                <div id="MSEfficiency"></div>
                                                <!-- <div id="flot-toggles" class="w-100 mt-4" style="height: 300px"></div> -->
                                            </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-2" role="tabpanel">
                                                <span id="efficiencyValueIdBladder"></span>
                                            <?php if(array_key_exists(0,$getDataBladder)) { ?>
                                            <span id="counterValueIdBladder"><span style="display:none"><?php echo Round($getDataBladder[0]['Counter'],0)*6; ?></span></span>
                                            <?php } else{ ?>
                                                <span id="counterValueIdBladder">0</span>
                                                <?php }  ?>
                                                <div id="BWEfficiency"></div>
                                            
                                            </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-39" role="tabpanel">
                                                <span id="counterValueIdSheetSizing"><span style='display:none'><?php echo $CounterSheetSizing[0]['Counter']*5.25*2; ?></span></span>
                                       

                                                <div id="SSEfficiency"></div>

                                                </div>
                                                
                                                <div class="tab-pane fade" id="tab_borders_icons-3" role="tabpanel">
                                                <span id="counterValueIdPanelCutting"><span style="display:none"><?php  echo $Cutting[0]['Counter']*3.5; ?></span></span>

                                                <div id="PCEfficiency"></div>

                                                </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-4" role="tabpanel">
                                                <span id="counterValueIdMSLines"><?php echo Round($DataMSLines[0]['PassQty'],0); ?></span>
                                                <div id="MSSEfficiency"></div>
                                                </div>

                                                <div class="tab-pane fade" id="tab_borders_icons-4" role="tabpanel">

                                                <span id="counterValueIdHFCutting"><span style='display:none'><?php echo $totalHF*0.2; ?></span></span>

                                                </div>
                                                
                                                
                                                <div class="tab-pane fade" id="tab_borders_icons-5" role="tabpanel">
                                                <span id="counterValueIdRWPD"><span style='display:none' ><?php echo $totalRWPD ?></span></span>
                                                
                                                <div id="RWPDEfficiency"></div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                               
                                                              
                        </div>
                        
                        <div class="col-xl-6">
                            <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Thermo Bonded Ball Efficiency </span>
                                        </h2>
                                        <!-- <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div> -->
                                    </div>
                                    <div class="border px-3 pt-3 pb-0 rounded">
                                                <ul class="nav nav-pills" role="tablist">
                                               
                                                <li class="nav-item">
                                              
                                                    <a class="nav-link active" data-toggle="tab" href="#tab_borders_icons-111" role="tab"><i class="fal fa-home mr-1"></i> TMB Product Efficiency</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-611" role="tab"> Carcas  <i class="fal fa-percent mr-1"></i> </a>
                                                </li> 
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-211" role="tab">Lamination  <i class="fal fa-percent mr-1"></i> </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-311" role="tab">HF Cutting  <i class="fal fa-percent mr-1"></i> </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-411" role="tab"> Assembling  <i class="fal fa-percent mr-1"></i> </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-511" role="tab">Packing  <i class="fal fa-percent mr-1"></i> </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content border border-top-0 p-3">
                                                <div class="tab-pane fade show active" id="tab_borders_icons-111" role="tabpanel">
                                                <div id="TMEfficiency"></div> </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-611" role="tabpanel">
                                            
                                                <?php if(array_key_exists(0,$getDataTMCarcas)){ ?>
                                            <span id="counterValueIdTMCarcas"><span style='display:none'><?php echo $getDataTMCarcas[0]['Counter'] ?></span></span>
                                            <?php } else{ ?>
                                                <span id="counterValueIdTMCarcas">0</span>
                                                <?php } ?>


                                                <div id="TMcarcasEfficiency"></div>

                                              </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-211" role="tabpanel">
                                                <?php $totalReading = 0;
                                                        foreach ($IndividualReadingLamination as $Inmachine) {

                                                            $totalReading += ($Inmachine['Reading']);

                                                        }
                                                        ?>
                                                        <span id="counterValueIdLamination" style='display:none' ><?php echo $totalLamination; ?></span>  
                                                      
                                                        <div id="LamEfficiency"></div>

                                                      
                                                      </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-311" role="tabpanel">
                                                
                                              
                                                <span id="efficiencyValueIdHFCutting"></span>
                                       <span id="counterValueIdHFCutting"><span style='display:none'><?php echo $totalHF*0.2; ?></span></span>


                                       <div id="HFEfficiency"></div>


                                              </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-411" role="tabpanel">
                                                
                                                <?php if(array_key_exists(0,$getDataBallShaping)) { ?>
                                            <span id="counterValueIdBallShaping"><?php echo Round($getDataBallShaping[0]['OutPut'],0); ?></span>
                                            <?php } else{ ?>
                                                <span id="counterValueIdBallShaping">0</span>
                                                <?php }  ?>
                                           
                                                <div id="TMFEfficiency"></div>

                                              </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-511" role="tabpanel">
                                                
                                                <span id="efficiencyValueIdTMPacking"></span>
                                            <?php if(array_key_exists(0,$DataTMPacking)) { ?>
                                            <span id="counterValueIdTMPacking"><span style='display:none'><?php echo Round($DataTMPacking[0]['PassQty'],0); ?></span></span>
                                            <?php } else{ ?>
                                                <span id="counterValueIdTMPacking">0</span>
                                                <?php }  ?>


      
                                                <div id="TMPEfficiency"></div>
                                                <div id="TMAMBEfficiency"></div>


                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                                
                        <div class="row">
                            <div class="col-xl-6">
                            <div id="panel-11" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                       Airless Mini Ball Efficiency</span>
                                        </h2>
                                       
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="border px-3 pt-3 pb-0 rounded">
                                                <ul class="nav nav-pills" role="tablist">
                                               
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#tab_borders_icons-12" role="tab"> <i class="fal fa-home mr-1"></i> AMB Product Efficiency    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-22" role="tab">Sheet Sizing  <i class="fal fa-percent mr-1"></i>  </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-32" role="tab"> HF Cutting  <i class="fal fa-percent mr-1"></i>  </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-42" role="tab"> Assembling  <i class="fal fa-percent mr-1"></i> </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-52" role="tab">Packing  <i class="fal fa-percent mr-1"></i> </a>
                                                </li>
                                            </ul>
                                                <div class="tab-content py-3">
                                                <div class="tab-pane fade show active" id="tab_borders_icons-12" role="tabpanel">
                                                <div id="AMBEfficiency"></div>
                                            </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-22" role="tabpanel">
                                                <div id="SSAMBEfficiency"></div>
                                            
                                            </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-32" role="tabpanel">
                                                <div id="HFCAMBEfficiency"></div>
                                            
                                            </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-42" role="tabpanel">

                                                <?php if(array_key_exists(0,$DataAMBForming)) { ?>
                                            <span id="counterValueIdAMBForming"><span style='display:none'><?php echo Round($DataAMBForming[0]['PassQty'],0); ?></span></span>
                                            <?php } else{ ?>
                                                <span id="counterValueIdAMBForming">0</span>
                                                <?php }  ?>

                                                <div id="AMBFEfficiency1"></div>

                                                </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-52" role="tabpanel">
                                                <?php if(array_key_exists(0,$DataAMBPacking)) { ?>
                                            <span id="counterValueIdAMBPacking"><?php echo Round($DataAMBPacking[0]['PassQty'],0); ?></span>
                                            <?php } else{ ?>
                                                <span id="counterValueIdAMBPacking">0</span>
                                                <?php }  ?>
                                                
                                                <div id="TMPEfficiency1"></div>
                                               

                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                               
                                                              
                        </div>
                        <div class="col-xl-6">
                            <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Laminated Football Efficiency</span>
                                        </h2>
                                        <!-- <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div> -->
                                    </div>
                                    <div class="border px-3 pt-3 pb-0 rounded">
                                                <ul class="nav nav-pills" role="tablist">
                                               
                                                <li class="nav-item">
                                              
                                                    <a class="nav-link active" data-toggle="tab" href="#tab_borders_icons-11" role="tab"><i class="fal fa-home mr-1"></i> LFB Product Efficiency   </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-61" role="tab"> Carcas <i class="fal fa-percent mr-1"></i>  </a>
                                                </li> 
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-21" role="tab">Lamination <i class="fal fa-percent mr-1"></i>  </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-31" role="tab">Panel Cutting <i class="fal fa-percent mr-1"></i>  </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-41" role="tab">Assembling <i class="fal fa-percent mr-1"></i>  </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-51" role="tab"> Packing <i class="fal fa-percent mr-1"></i>  </a>
                                                </li>
                                            </ul> 
                                            <div class="tab-content border border-top-0 p-3">
                                                <div class="tab-pane fade show active" id="tab_borders_icons-11" role="tabpanel">
                                                <div id="LFBEfficiency"></div> </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-61" role="tabpanel">
                          

                                                <?php if(array_key_exists(0,$getDataLFBCarcas)){ ?>
                                            <span id="counterValueIdLFBCarcas"><span style='display:none'><?php echo $getDataLFBCarcas[0]['Counter'] ?></span></span>
                                            <?php } else{ ?>
                                                <span id="counterValueIdLFBCarcas">0</span>
                                                <?php } ?>
                                                <div id="carcasEfficiency2"></div>
                          


                                                 </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-21" role="tabpanel">
                                                
                                                <div id="LamEfficiency1"></div>
                                              
                                              </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-31" role="tabpanel">
                                                <span id="counterValueIdPanelCuttingLfb"><span style="display:none"><?php  echo $Cutting[0]['Counter']*3.5; ?></span></span>

                                                <div id="LFBPanelCEfficiency"></div>
                                              
                                              </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-41" role="tabpanel">
                                                
                                                <div id="AMBLamFEfficiency"></div>
                                              
                                              </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-51" role="tabpanel">

                                                <?php if(array_key_exists(0,$DataLFBPacking)) { ?>
                                            <span id="counterValueIdLFBPacking"><span style='display:none'><?php echo Round($DataLFBPacking[0]['PassQty'],0); ?></span></span>
                                            <?php } else{ ?>
                                                <span id="counterValueIdLFBPacking">0</span>
                                                <?php }  ?>

                                                <div id="LFBPackingEfficiency"></div>
                                              
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                                
                                
                    </main>
                    <!-- this overlay is activated only when mobile menu is triggered -->
                    <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
                    <!-- BEGIN Page Footer -->
                 

                    <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
                    <!-- BEGIN Page Footer -->
                    <footer class="page-footer" role="contentinfo" style="position: absolute; bottom: 0px">
                        <div class="d-flex align-items-center flex-1 text-muted">
                            <span class="hidden-md-down fw-700">2023 © Forward Sports by &nbsp; <b> IT Dept Forward Sports</b></span>
                        </div>
                        <div>

                        </div>
                    </footer>
                    <script src="<?php echo base_url(); ?>/assets/js//jquery.min.js" type="text/javascript"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js" integrity="sha512-d5Jr3NflEZmFDdFHZtxeJtBzk0eB+kkRXWFQqEc1EKmolXjHm2IKCA7kTvXBNjIYzjXfD5XzIjaaErpkZHCkBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                    <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
                    <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
                    <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
                    <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>



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
                </main>
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
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>
   $(document).ready(function() {
    var EfficiencyFinal;
        var EfficiencyFinalArray = [];
        let counterValue = $("#counterValueIdRWPD").text()
        let currentDate = new Date().toJSON().substr(0,10);
        let dateGet = new Date()
        let dayId = dateGet.getDay()
        let today = new Date()
let yesterday = new Date(today)
yesterday.setDate(yesterday.getDate() - 1)
        $("#startDate").val(yesterday.toJSON().substr(0,10));
        $("#endDate").val(yesterday.toJSON().substr(0,10));
        $("#startDate").attr('max',yesterday.toJSON().substr(0,10));
        $("#endDate").attr('max',yesterday.toJSON().substr(0,10));
        var date1 = new Date(dateGet.getFullYear(),dateGet.getMonth(),dateGet.getDay(),7,45,0); // Thu Sep 16 2010 13:30:58
var date2 = new Date(dateGet.getFullYear(),dateGet.getMonth(),dateGet.getDay(),dateGet.getHours(),dateGet.getMinutes(),dateGet.getSeconds()); // Tue Aug 18 2015 14:20:48

let dateDifference;
let minutes;
if(dayId == 0){
$("#currentDateData").css('display','none');
$("#sundayStatus").css('display',"inline-block");
}
else{
    if(dateGet.getHours() >= 7 && dateGet.getHours() <= 16){
    
    if(dateGet.getHours() >= 14){
        dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    if(dayId == 5){
        EfficiencyFinal = (((counterValue*0.58)/((minutes*62)-(60*62)) )*100).toFixed(2)
        $("#realTimeIdRWPD").text((minutes*62)-(60*62))
    }
    else{
        EfficiencyFinal = (((counterValue*0.58)/((minutes*62)-(45*62)) )*100).toFixed(2)
        $("#realTimeIdRWPD").text((minutes*62)-(45*62))
    }
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    $("#employeeId").text(62)
    $("#efficiencyValueIdRWPD").text(EfficiencyFinal + "%")
   // console.log(EfficiencyFinalArray)
}
else{

  dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    EfficiencyFinal = (((counterValue*0.58)/(minutes*62) )*100).toFixed(2)
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    console.log(EfficiencyFinalArray)
    $("#realTimeIdRWPD").text(minutes*62)
    $("#employeeId").text(62)
    $("#efficiencyValueIdRWPD").text(EfficiencyFinal + "%")

}


    }
}
var SSEfficiencyFinal;
        var SSEfficiencyFinalArray = [];
        let counterValueSS = $("#counterValueIdSheetSizing").text()

        let SScurrentDate = new Date().toJSON().substr(0,10);
        let SSdateGet = new Date()
        let SSdayId = dateGet.getDay()
        let SStoday = new Date()
let SSyesterday = new Date(SStoday)
SSyesterday.setDate(SSyesterday.getDate() - 1)
        $("#startDate").val(SSyesterday.toJSON().substr(0,10));
        $("#endDate").val(SSyesterday.toJSON().substr(0,10));
        $("#startDate").attr('max',SSyesterday.toJSON().substr(0,10));
        $("#endDate").attr('max',SSyesterday.toJSON().substr(0,10));
        var date1 = new Date(SSdateGet.getFullYear(),SSdateGet.getMonth(),SSdateGet.getDay(),7,45,0); // Thu Sep 16 2010 13:30:58
var date2 = new Date(SSdateGet.getFullYear(),SSdateGet.getMonth(),SSdateGet.getDay(),SSdateGet.getHours(),SSdateGet.getMinutes(),SSdateGet.getSeconds());
        

if(SSdayId == 0){
$("#currentDateData").css('display','none');
$("#sundayStatus").css('display',"inline-block");
}
else{
    if(SSdateGet.getHours() >= 7 && SSdateGet.getHours() <= 16){
    
    if(SSdateGet.getHours() >= 14){
    //     dateDifference = date2 - date1;
    // minutes = Math.floor(dateDifference / 60000);
  

    if(SSdayId == 5){
        SSEfficiencyFinal = (((counterValueSS*0.10)/((minutes*8)-(60*8)) )*100).toFixed(2)
        $("#realTimeIdSheetSizing").text((minutes*8)-(60*8))
    }
    else{
        SSEfficiencyFinal = (((counterValueSS*0.10)/((minutes*8)-(45*8)) )*100).toFixed(2)
        $("#realTimeIdSheetSizing").text((minutes*8)-(45*8))
    }
    SSEfficiencyFinalArray.push(parseFloat(SSEfficiencyFinal))
    $("#employeeId").text(8)
    $("#efficiencyValueIdSheetSizing").text(SSEfficiencyFinal + "%")
   // console.log(SSEfficiencyFinalArray)
}
else{

  dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    SSEfficiencyFinal = (((counterValueSS*0.10)/(minutes*8) )*100).toFixed(2)
    SSEfficiencyFinalArray.push(parseFloat(SSEfficiencyFinal))

    $("#realTimeIdSheetSizing").text(minutes*8)
    $("#employeeId").text(8)
    $("#efficiencyValueIdSheetSizing").text(SSEfficiencyFinal + "%")

}
    }
}


var PCEfficiencyFinal;
        var PCEfficiencyFinalArray = [];
        let PCcounterValue = $("#counterValueIdPanelCutting").text()
 

        let PCcurrentDate = new Date().toJSON().substr(0,10);
        let PCdateGet = new Date()
        let PCdayId = dateGet.getDay()
        let PCtoday = new Date()
let PCyesterday = new Date(PCtoday)
PCyesterday.setDate(PCyesterday.getDate() - 1)
        $("#startDate").val(PCyesterday.toJSON().substr(0,10));
        $("#endDate").val(PCyesterday.toJSON().substr(0,10));
        $("#startDate").attr('max',PCyesterday.toJSON().substr(0,10));
        $("#endDate").attr('max',PCyesterday.toJSON().substr(0,10));
        var date1 = new Date(PCdateGet.getFullYear(),PCdateGet.getMonth(),PCdateGet.getDay(),7,45,0); // Thu Sep 16 2010 13:30:58
var date2 = new Date(PCdateGet.getFullYear(),PCdateGet.getMonth(),PCdateGet.getDay(),PCdateGet.getHours(),PCdateGet.getMinutes(),PCdateGet.getSeconds()); 

if(PCdayId == 0){
$("#currentDateData").css('display','none');
$("#sundayStatus").css('display',"inline-block");
}
else{
    if(PCdateGet.getHours() >= 7 && PCdateGet.getHours() <= 16){
    
    if(PCdateGet.getHours() >= 14){


   

    if(PCdayId == 5){
       
        PCEfficiencyFinal = (((PCcounterValue*0.28)/((minutes*7)-(60*7)) )*100).toFixed(2)
        $("#realTimeIdPanelCutting").text((minutes*7)-(60*7))
    }
    else{
        PCEfficiencyFinal = (((PCcounterValue*0.28)/((minutes*7)-(45*7)) )*100).toFixed(2)
        $("#realTimeIdPanelCutting").text((minutes*7)-(45*7))
    }
    PCEfficiencyFinalArray.push(parseFloat(PCEfficiencyFinal))
    $("#employeeId").text(7)
    $("#efficiencyValueIdPanelCutting").text(PCEfficiencyFinal + "%")
    //console.log(PCEfficiencyFinalArray)
}
else{

  dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    PCEfficiencyFinal = (((PCcounterValue*0.28)/(minutes*7) )*100).toFixed(2)
    PCEfficiencyFinalArray.push(parseFloat(PCEfficiencyFinal))
    console.log(PCEfficiencyFinalArray)
    $("#realTimeIdPanelCutting").text(minutes*7)
    $("#employeeId").text(7)
    $("#efficiencyValueIdPanelCutting").text(PCEfficiencyFinal + "%")

}
    }
}


var BWEfficiencyFinal;
        var BWEfficiencyFinalArray = [];
        let BWcounterValue = $("#counterValueIdBladder").text()


        console.log((BWcounterValue/2920)*100)



        let BWcurrentDate = new Date().toJSON().substr(0,10);
        let BWdateGet = new Date()
        let BWdayId = BWdateGet.getDay()
        let BWtoday = new Date()
let BWyesterday = new Date(BWtoday)
BWyesterday.setDate(BWyesterday.getDate() - 1)
        $("#startDate").val(BWyesterday.toJSON().substr(0,10));
        $("#endDate").val(BWyesterday.toJSON().substr(0,10));
        $("#startDate").attr('max',BWyesterday.toJSON().substr(0,10));
        $("#endDate").attr('max',BWyesterday.toJSON().substr(0,10));
        var date1 = new Date(BWdateGet.getFullYear(),BWdateGet.getMonth(),BWdateGet.getDay(),7,45,0); // Thu Sep 16 2010 13:30:58
var date2 = new Date(BWdateGet.getFullYear(),BWdateGet.getMonth(),BWdateGet.getDay(),BWdateGet.getHours(),BWdateGet.getMinutes(),BWdateGet.getSeconds()); 
    
if(BWdayId == 0){
$("#currentDateData").css('display','none');
$("#sundayStatus").css('display',"inline-block");



}
else{



    if(BWdateGet.getHours() >= 7 && BWdateGet.getHours() <= 16){


    if(BWdateGet.getHours() >= 14){

        

    //     dateDifference = date2 - date1;
    // minutes = Math.floor(dateDifference / 60000);
   
    // EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    // if(dayId == 5){
    //     $("#realTimeId").text((minutes*0.5*16)-(60*0.5*16))
    // }
    // else{
        
    // }


    
    if(BWdayId == 5){
        BWEfficiencyFinal = (((BWcounterValue*0.22)/((minutes*0.5*16)-(60*0.5*16)) )*100).toFixed(2)
        $("#realTimeId").text((minutes*0.5*16)-(60*0.5*16))


   }
   else{
    BWEfficiencyFinal = (((BWcounterValue*0.22)/((minutes*0.5*16)-(45*0.5*16)) )*100).toFixed(2)
    $("#realTimeId").text((minutes*0.5*16)-(45*0.5*16))
   }


   BWEfficiencyFinalArray.push(parseFloat(BWEfficiencyFinal))

    $("#employeeId").text(0.5*16)
    $("#efficiencyValueId").text(BWEfficiencyFinal + "%")


   // console.log(BWEfficiencyFinalArray)
}
else{

    dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    BWEfficiencyFinal = (((BWcounterValue*0.22)/(minutes*0.5*16) )*100).toFixed(2)
    BWEfficiencyFinalArray.push(parseFloat(BWEfficiencyFinal))
    $("#realTimeIdBladder").text(minutes*0.5*16)
    $("#employeeId").text(0.5*16)
    $("#efficiencyValueIdBladder").text(BWEfficiencyFinal + "%")




}

    }
}







var MSEfficiencyFinal;
        var MSEfficiencyFinalArray = [];
        let MScounterValue = $("#counterValueIdMSLines").text()

        let MScurrentDate = new Date().toJSON().substr(0,10);
        let MSdateGet = new Date()
        let MSdayId = dateGet.getDay()
        let MStoday = new Date()
let MSyesterday = new Date(MStoday)
MSyesterday.setDate(MSyesterday.getDate() - 1)
        $("#startDate").val(MSyesterday.toJSON().substr(0,10));
        $("#endDate").val(MSyesterday.toJSON().substr(0,10));
        $("#startDate").attr('max',MSyesterday.toJSON().substr(0,10));
        $("#endDate").attr('max',MSyesterday.toJSON().substr(0,10));
        var date1 = new Date(MSdateGet.getFullYear(),MSdateGet.getMonth(),MSdateGet.getDay(),7,45,0); // Thu Sep 16 2010 13:30:58
var date2 = new Date(MSdateGet.getFullYear(),MSdateGet.getMonth(),MSdateGet.getDay(),MSdateGet.getHours(),MSdateGet.getMinutes(),MSdateGet.getSeconds());

if(MSdayId == 0){
$("#currentDateData").css('display','none');
$("#sundayStatus").css('display',"inline-block");
}
else{
    
    if(MSdateGet.getHours() >= 7 && MSdateGet.getHours() <= 16){
    
    if(MSdateGet.getHours() >= 14){
        dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    realMinutes = 0;

 
    if(MSdayId == 5){
        realMinutes = (minutes*20*20)-(60*20*20)
        MSEfficiencyFinal = (((MScounterValue*7.74)/((minutes*20*20)-(60*20*20)) )*100).toFixed(2)
        $("#realTimeIdMSLines").text((minutes*<?php echo count($GetHoursMSLines);?>*20)-(60*<?php echo count($GetHoursMSLines);?>*20))
    }
    else{
        realMinutes = (minutes*20*20)-(45*20*20)
        MSEfficiencyFinal = (((MScounterValue*7.74)/((minutes*20*20)-(45*20*20)) )*100).toFixed(2)
        $("#realTimeIdMSLines").text((minutes*<?php echo count($GetHoursMSLines);?>*20)-(45*<?php echo count($GetHoursMSLines);?>*20))
    }
    MSEfficiencyFinalArray.push(parseFloat(MSEfficiencyFinal))
 
    console.log("Efficiency Final ", (minutes*20)-(45*20))
    $("#employeeId").text(<?php echo count($GetHoursMSLines);?>*20)
    $("#efficiencyValueIdMSLines").text(MSEfficiencyFinal + "%")
  //  console.log(MSEfficiencyFinalArray)
    }
    else{
      dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    realMinutes = minutes*20
    MSEfficiencyFinal = (((MScounterValue*7.74)/(minutes*<?php echo count($GetHoursMSLines);?>*20) )*100).toFixed(2)
    MSEfficiencyFinalArray.push(parseFloat(MSEfficiencyFinal))
    console.log(MSEfficiencyFinalArray)
    $("#realTimeIdMSLines").text(minutes*<?php echo count($GetHoursMSLines);?>*20)
    $("#employeeId").text(<?php echo count($GetHoursMSLines);?>*20)
    $("#efficiencyValueIdMSLines").text(MSEfficiencyFinal + "%")

    }
}

}


<?php $HfTotalMachines = count($hfcutting); ?>

    var HFCEfficiencyFinal;
        var HFCEfficiencyFinalArray = [];
        let HFCcounterValue = $("#counterValueIdHFCutting").text()
        let HFCcurrentDate = new Date().toJSON().substr(0,10);
        let HFCdateGet = new Date()
        let HFCdayId = HFCdateGet.getDay()
        let HFCtoday = new Date()
let HFCyesterday = new Date(HFCtoday)
HFCyesterday.setDate(HFCyesterday.getDate() - 1)
        $("#startDate").val(HFCyesterday.toJSON().substr(0,10));
        $("#endDate").val(HFCyesterday.toJSON().substr(0,10));
        $("#startDate").attr('max',HFCyesterday.toJSON().substr(0,10));
        $("#endDate").attr('max',HFCyesterday.toJSON().substr(0,10));
        var date1 = new Date(HFCdateGet.getFullYear(),HFCdateGet.getMonth(),HFCdateGet.getDay(),7,45,0); // Thu Sep 16 2010 13:30:58
var date2 = new Date(HFCdateGet.getFullYear(),HFCdateGet.getMonth(),HFCdateGet.getDay(),HFCdateGet.getHours(),HFCdateGet.getMinutes(),HFCdateGet.getSeconds());



let HFCdateDifference;
let HFCminutes;
if(HFCdayId == 0){
$("#currentDateData").css('display','none');
$("#sundayStatus").css('display',"inline-block");
}
else{
   
    if(HFCdateGet.getHours() >= 7 && HFCdateGet.getHours() <= 16){


        if(HFCdateGet.getHours() >= 14){
        HFCdateDifference = date2 - date1;
        HFCminutes = Math.floor(HFCdateDifference / 60000);


    if(HFCdayId == 5){
      HFCEfficiencyFinal = (((HFCcounterValue*2.87)/((HFCminutes*<?php echo $HfTotalMachines; ?>*1.5)-(60*<?php echo $HfTotalMachines; ?>*1.5)) )*100).toFixed(2)
      
      $("#realTimeIdHFCutting").text((HFCminutes*<?php echo $HfTotalMachines; ?>*1.5)-(60*<?php echo $HfTotalMachines; ?>*1.5))
   }
   else{
    HFCEfficiencyFinal = (((HFCcounterValue*2.87)/((HFCminutes*<?php echo $HfTotalMachines; ?>*1.5)-(45*<?php echo $HfTotalMachines; ?>*1.5)) )*100).toFixed(2)
      
       $("#realTimeIdHFCutting").text((HFCminutes*<?php echo $HfTotalMachines; ?>*1.5)-(45*<?php echo $HfTotalMachines; ?>*1.5))
   }
   HFCEfficiencyFinalArray.push(parseFloat(HFCEfficiencyFinal))
   
    
    $("#employeeId").text(<?php echo $HfTotalMachines; ?>*1.5)
    $("#efficiencyValueIdHFCutting").text(HFCEfficiencyFinal + "%")
    console.log(HFCEfficiencyFinalArray)

    } 
    else{

HFCdateDifference = date2 - date1;
HFCminutes = Math.floor(HFCdateDifference / 60000);
   HFCEfficiencyFinal = (((HFCcounterValue*2.87)/(HFCminutes*<?php echo $HfTotalMachines; ?>*1.5) )*100).toFixed(2)
   HFCEfficiencyFinalArray.push(parseFloat(HFCEfficiencyFinal))
   console.log(HFCEfficiencyFinalArray)
   $("#realTimeIdHFCutting").text(HFCminutes*<?php echo $HfTotalMachines; ?>*1.5)
   $("#employeeId").text(<?php echo $HfTotalMachines; ?>*1.5)
   $("#efficiencyValueIdHFCutting").text(HFCEfficiencyFinal + "%")
 


       
   } 

    }
   



    var AMBFEfficiencyFinal;
        var AMBFEfficiencyFinalArray = [];
        let AMBFcounterValue = $("#counterValueIdAMBForming").text()
        console.log((AMBFcounterValue/2920)*100)
        let AMBFcurrentDate = new Date().toJSON().substr(0,10);
        let AMBFdateGet = new Date()
        let AMBFdayId = AMBFdateGet.getDay()
        let AMBFtoday = new Date()
let AMBFyesterday = new Date(AMBFtoday)
AMBFyesterday.setDate(AMBFyesterday.getDate() - 1)
        $("#startDate").val(AMBFyesterday.toJSON().substr(0,10));
        $("#endDate").val(AMBFyesterday.toJSON().substr(0,10));
        $("#startDate").attr('max',AMBFyesterday.toJSON().substr(0,10));
        $("#endDate").attr('max',AMBFyesterday.toJSON().substr(0,10));
        var date1 = new Date(AMBFdateGet.getFullYear(),AMBFdateGet.getMonth(),AMBFdateGet.getDay(),7,45,0); // Thu Sep 16 2010 13:30:58
var date2 = new Date(AMBFdateGet.getFullYear(),AMBFdateGet.getMonth(),AMBFdateGet.getDay(),AMBFdateGet.getHours(),AMBFdateGet.getMinutes(),AMBFdateGet.getSeconds()); // Tue Aug 18 2015 14:20:48

let AMBFdateDifference;
let AMBFminutes;
if(AMBFdayId == 0){
$("#currentDateData").css('display','none');
$("#sundayStatus").css('display',"inline-block");
}
else{
    if(AMBFdateGet.getHours() >= 7 && AMBFdateGet.getHours() <= 16){
    
    if(AMBFdateGet.getHours() >= 14){
      AMBFdateDifference = date2 - date1;
      AMBFminutes = Math.floor(AMBFdateDifference / 60000);
  
   
    // if(dayId == 5){
    //     $("#realTimeId").text((minutes*208)-(60*208))
    // }
    // else{
    //     $("#realTimeId").text((minutes*208)-(45*208))
    // }
    


    if(AMBFdayId == 5){
      AMBFEfficiencyFinal = (((AMBFcounterValue*10.03)/((AMBFminutes*208)-(60*208)) )*100).toFixed(2)  
      $("#realTimeIdAMBForming").text((AMBFminutes*208)-(60*208))
   }
   else{
    AMBFEfficiencyFinal = (((AMBFcounterValue*0.32)/((AMBFminutes*208)-(45*208)) )*100).toFixed(2)   
    $("#realTimeIdAMBForming").text((AMBFminutes*208)-(45*208))
   }
   AMBFEfficiencyFinalArray.push(parseFloat(AMBFEfficiencyFinal))


    $("#employeeId").text(208)
    $("#efficiencyValueIdAMBForming").text(AMBFEfficiencyFinal + "%")
    console.log(AMBFEfficiencyFinalArray)
 
    }  
    else{
      AMBFdateDifference = date2 - date1;
      AMBFminutes = Math.floor(AMBFdateDifference / 60000);
      AMBFEfficiencyFinal = (((AMBFcounterValue*10.03)/(AMBFminutes*208) )*100).toFixed(2)
      AMBFEfficiencyFinalArray.push(parseFloat(AMBFEfficiencyFinal))
    console.log(AMBFEfficiencyFinalArray)
    $("#realTimeIdAMBForming").text(AMBFminutes*208)
    $("#employeeId").text(208)
    $("#efficiencyValueIdAMBForming").text(AMBFEfficiencyFinal + " %")
   
    } 
}

}




var CEfficiencyFinal;
        var CEfficiencyFinalArray = [];
        let CcounterValue = $("#counterValueIdLFBCarcas1").text()
        let CcurrentDate = new Date().toJSON().substr(0,10);
        let CdateGet = new Date()
        let CdayId = CdateGet.getDay()
        let Ctoday = new Date()
let Cyesterday = new Date(Ctoday)
Cyesterday.setDate(Cyesterday.getDate() - 1)
        $("#startDate").val(Cyesterday.toJSON().substr(0,10));
        $("#endDate").val(Cyesterday.toJSON().substr(0,10));
        $("#startDate").attr('max',Cyesterday.toJSON().substr(0,10));
        $("#endDate").attr('max',Cyesterday.toJSON().substr(0,10));
        var date1 = new Date(CdateGet.getFullYear(),CdateGet.getMonth(),CdateGet.getDay(),7,45,0); // Thu Sep 16 2010 13:30:58
var date2 = new Date(CdateGet.getFullYear(),CdateGet.getMonth(),CdateGet.getDay(),CdateGet.getHours(),CdateGet.getMinutes(),CdateGet.getSeconds()); // Tue Aug 18 2015 14:20:48

let CdateDifference;
let Cminutes;
if(CdayId == 0){
$("#currentDateData").css('display','none');
$("#sundayStatus").css('display',"inline-block");
}
else{
    if(CdateGet.getHours() >= 7 && CdateGet.getHours() <= 16){
    
    if(CdateGet.getHours() >= 14){
      CdateDifference = date2 - date1;
      Cminutes = Math.floor(CdateDifference / 60000);
    // EfficiencyFinal = (((counterValue*3.67)/(minutes*95) )*100).toFixed(2)
    // EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    // if(dayId == 5){
    //     $("#realTimeId").text((minutes*95)-(60*95))
    // }
    // else{
    //     $("#realTimeId").text((minutes*95)-(45*95))
    // }
    


    if(CdayId == 5){
      CEfficiencyFinal = (((CcounterValue*3.67)/((Cminutes*95)-(60*95)) )*100).toFixed(2)
 $("#realTimeIdLFBCarcas").text((Cminutes*95)-(60*95))
}
else{
  CEfficiencyFinal = (((CcounterValue*3.67)/((Cminutes*95)-(45*95)) )*100).toFixed(2)
    $("#realTimeIdLFBCarcas").text((Cminutes*95)-(45*95))
}
CEfficiencyFinalArray.push(parseFloat(CEfficiencyFinal))

    $("#employeeId").text(95)
    $("#efficiencyValueIdLFBCarcas").text(CEfficiencyFinal + "%")
    console.log(CEfficiencyFinalArray)
  
    }  
    else{
      CdateDifference = date2 - date1;
      Cminutes = Math.floor(CdateDifference / 60000);
      CEfficiencyFinal = (((CcounterValue*3.67)/(Cminutes*95) )*100).toFixed(2)
      CEfficiencyFinalArray.push(parseFloat(CEfficiencyFinal))
    console.log(CEfficiencyFinalArray)
    $("#realTimeIdLFBCarcas").text(Cminutes*95)
    $("#employeeId").text(95)
    $("#efficiencyValueIdLFBCarcas").text(CEfficiencyFinal + "%")
    
    } 
}

}



var TMCEfficiencyFinal;
        var TMCEfficiencyFinalArray = [];
        let TMCcounterValue = $("#counterValueIdTMCarcas").text()
        let TMCcurrentDate = new Date().toJSON().substr(0,10);
        let TMCdateGet = new Date()
        let TMCdayId = TMCdateGet.getDay()
        let TMCtoday = new Date()
let TMCyesterday = new Date(TMCtoday)
TMCyesterday.setDate(TMCyesterday.getDate() - 1)
        $("#startDate").val(TMCyesterday.toJSON().substr(0,10));
        $("#endDate").val(TMCyesterday.toJSON().substr(0,10));
        $("#startDate").attr('max',TMCyesterday.toJSON().substr(0,10));
        $("#endDate").attr('max',TMCyesterday.toJSON().substr(0,10));
        var date1 = new Date(TMCdateGet.getFullYear(),TMCdateGet.getMonth(),TMCdateGet.getDay(),7,45,0); // Thu Sep 16 2010 13:30:58
var date2 = new Date(TMCdateGet.getFullYear(),TMCdateGet.getMonth(),TMCdateGet.getDay(),TMCdateGet.getHours(),TMCdateGet.getMinutes(),TMCdateGet.getSeconds()); // Tue Aug 18 2015 14:20:48

let TMCdateDifference;
let TMCminutes;
if(TMCdayId == 0){
$("#currentDateData").css('display','none');
$("#sundayStatus").css('display',"inline-block");
}
else{
    if(TMCdateGet.getHours() >= 7 && TMCdateGet.getHours() <= 16){
    
    if(TMCdateGet.getHours() >= 14){
      TMCdateDifference = date2 - date1;
      TMCminutes = Math.floor(TMCdateDifference / 60000);
   

    if(TMCdayId == 5){
 
      TMCEfficiencyFinal = (((TMCcounterValue*5.87)/((TMCminutes*22)-(60*22)) )*100).toFixed(2)

 $("#realTimeIdTMCarcas").text((TMCminutes*22)-(60*22))
}
else{
  TMCEfficiencyFinal = (((TMCcounterValue*5.87)/((TMCminutes*22)-(45*22)) )*100).toFixed(2)


$("#realTimeIdTMCarcas").text((TMCminutes*22)-(45*22))
}
TMCEfficiencyFinalArray.push(parseFloat(TMCEfficiencyFinal))
    $("#employeeId").text(17)
    $("#efficiencyValueIdTMCarcas").text(TMCEfficiencyFinal + "%")
    console.log(TMCEfficiencyFinalArray)

    }  
    else{
      TMCdateDifference = date2 - date1;
      TMCminutes = Math.floor(TMCdateDifference / 60000);
      TMCEfficiencyFinal = (((TMCcounterValue*5.87)/(TMCminutes*22) )*100).toFixed(2)
      TMCEfficiencyFinalArray.push(parseFloat(TMCEfficiencyFinal))
    console.log(TMCEfficiencyFinalArray)
    $("#realTimeIdTMCarcas").text(TMCminutes*22)
    $("#employeeId").text(22)
    $("#efficiencyValueIdTMCarcas").text(TMCEfficiencyFinal + "%")
   
    } 
}

}


var LFBCEfficiencyFinal;
        var LFBCEfficiencyFinalArray = [];
        let LFBCcounterValue = $("#counterValueIdLFBCarcas").text()
        let LFBCcurrentDate = new Date().toJSON().substr(0,10);
        let LFBCdateGet = new Date()
        let LFBCdayId = LFBCdateGet.getDay()
        let LFBCtoday = new Date()
let LFBCyesterday = new Date(LFBCtoday)
LFBCyesterday.setDate(LFBCyesterday.getDate() - 1)
        $("#startDate").val(LFBCyesterday.toJSON().substr(0,10));
        $("#endDate").val(LFBCyesterday.toJSON().substr(0,10));
        $("#startDate").attr('max',LFBCyesterday.toJSON().substr(0,10));
        $("#endDate").attr('max',LFBCyesterday.toJSON().substr(0,10));
        var date1 = new Date(LFBCdateGet.getFullYear(),LFBCdateGet.getMonth(),LFBCdateGet.getDay(),7,45,0); // Thu Sep 16 2010 13:30:58
var date2 = new Date(LFBCdateGet.getFullYear(),LFBCdateGet.getMonth(),LFBCdateGet.getDay(),LFBCdateGet.getHours(),LFBCdateGet.getMinutes(),LFBCdateGet.getSeconds()); // Tue Aug 18 2015 14:20:48

let LFBCdateDifference;
let LFBCminutes;
if(LFBCdayId == 0){
$("#currentDateData").css('display','none');
$("#sundayStatus").css('display',"inline-block");
}
else{
    if(LFBCdateGet.getHours() >= 7 && LFBCdateGet.getHours() <= 16){
    
    if(LFBCdateGet.getHours() >= 14){
      LFBCdateDifference = date2 - date1;
      LFBCminutes = Math.floor(LFBCdateDifference / 60000);
   
    
    if(LFBCdayId == 5){
      LFBCEfficiencyFinal = (((LFBCcounterValue*3.67)/((LFBCminutes*95)-(60*95)) )*100).toFixed(2)
 $("#realTimeIdLFBCarcas").text((LFBCminutes*95)-(60*95))
}
else{
  LFBCEfficiencyFinal = (((LFBCcounterValue*3.67)/((LFBCminutes*95)-(45*95)) )*100).toFixed(2)
    $("#realTimeIdLFBCarcas").text((LFBCminutes*95)-(45*95))
}
LFBCEfficiencyFinalArray.push(parseFloat(LFBCEfficiencyFinal))

    $("#employeeId").text(95)
    $("#efficiencyValueIdLFBCarcas").text(LFBCEfficiencyFinal + "%")
    console.log(LFBCEfficiencyFinalArray)

    }  
    else{
      LFBCdateDifference = date2 - date1;
      LFBCminutes = Math.floor(LFBCdateDifference / 60000);
      LFBCEfficiencyFinal = (((LFBCcounterValue*3.67)/(LFBCminutes*95) )*100).toFixed(2)
      LFBCEfficiencyFinalArray.push(parseFloat(LFBCEfficiencyFinal))
    console.log(LFBCEfficiencyFinalArray)
    $("#realTimeIdLFBCarcas").text(LFBCminutes*95)
    $("#employeeId").text(95)
    $("#efficiencyValueIdLFBCarcas").text(LFBCEfficiencyFinal + "%")

    } 
}






<?php $HfTotalMachines = count($hfcutting); ?>

    var HFEfficiencyFinal;
        var HFEfficiencyFinalArray = [];
        let HFcounterValue = $("#counterValueIdHFCutting").text()
        let HFcurrentDate = new Date().toJSON().substr(0,10);
        let HFdateGet = new Date()
        let HFdayId = HFdateGet.getDay()
        let HFtoday = new Date()
let HFyesterday = new Date(HFtoday)
HFyesterday.setDate(HFyesterday.getDate() - 1)
        $("#startDate").val(HFyesterday.toJSON().substr(0,10));
        $("#endDate").val(HFyesterday.toJSON().substr(0,10));
        $("#startDate").attr('max',HFyesterday.toJSON().substr(0,10));
        $("#endDate").attr('max',HFyesterday.toJSON().substr(0,10));
        var date1 = new Date(HFdateGet.getFullYear(),HFdateGet.getMonth(),HFdateGet.getDay(),7,45,0); // Thu Sep 16 2010 13:30:58
var date2 = new Date(HFdateGet.getFullYear(),HFdateGet.getMonth(),HFdateGet.getDay(),HFdateGet.getHours(),HFdateGet.getMinutes(),HFdateGet.getSeconds()); // Tue Aug 18 2015 14:20:48

let HFdateDifference;
let HFminutes;
if(HFdayId == 0){
$("#currentDateData").css('display','none');
$("#sundayStatus").css('display',"inline-block");
}
else{
    if(HFdateGet.getHours() >= 7 && HFdateGet.getHours() <= 16){
    
    if(HFdateGet.getHours() >= 14){
      HFdateDifference = date2 - date1;
      HFminutes = Math.floor(HFdateDifference / 60000);


    if(HFdayId == 5){
      HFEfficiencyFinal = (((HFcounterValue*2.87)/((HFminutes*<?php echo $HfTotalMachines; ?>*1.5)-(60*<?php echo $HfTotalMachines; ?>*1.5)) )*100).toFixed(2)
      
      $("#realTimeIdHFCutting").text((HFminutes*<?php echo $HfTotalMachines; ?>*1.5)-(60*<?php echo $HfTotalMachines; ?>*1.5))
   }
   else{
    HFEfficiencyFinal = (((HFcounterValue*2.87)/((minutes*<?php echo $HfTotalMachines; ?>*1.5)-(45*<?php echo $HfTotalMachines; ?>*1.5)) )*100).toFixed(2)
      
       $("#realTimeIdHFCutting").text((HFminutes*<?php echo $HfTotalMachines; ?>*1.5)-(45*<?php echo $HfTotalMachines; ?>*1.5))
   }
   HFEfficiencyFinalArray.push(parseFloat(HFEfficiencyFinal))
   
    
    $("#employeeId").text(<?php echo $HfTotalMachines; ?>*1.5)
    $("#efficiencyValueIdHFCutting").text(HFEfficiencyFinal + "%")
    console.log(HFEfficiencyFinalArray)
   


    }  
    else{
      HFdateDifference = date2 - date1;
      HFminutes = Math.floor(HFdateDifference / 60000);
      HFEfficiencyFinal = (((HFcounterValue*2.87)/(HFminutes*<?php echo $HfTotalMachines; ?>*1.5) )*100).toFixed(2)
      HFEfficiencyFinalArray.push(parseFloat(HFEfficiencyFinal))
    console.log(HFEfficiencyFinalArray)
    $("#realTimeIdHFCutting").text(HFminutes*<?php echo $HfTotalMachines; ?>*1.5)
    $("#employeeId").text(<?php echo $HfTotalMachines; ?>*1.5)
    $("#efficiencyValueIdHFCutting").text(HFEfficiencyFinal + "%")
   
    } 
}




var LFBPEfficiencyFinal;
        var LFBPEfficiencyFinalArray = [];
        let LFBPcounterValue = $("#counterValueIdLFBPacking").text()
        console.log((LFBPcounterValue/2920)*100)
        let LFBPcurrentDate = new Date().toJSON().substr(0,10);
        let LFBPdateGet = new Date()
        let LFBPdayId = LFBPdateGet.getDay()
        let LFBPtoday = new Date()
let LFBPyesterday = new Date(LFBPtoday)
LFBPyesterday.setDate(LFBPyesterday.getDate() - 1)
        $("#startDate").val(LFBPyesterday.toJSON().substr(0,10));
        $("#endDate").val(LFBPyesterday.toJSON().substr(0,10));
        $("#startDate").attr('max',LFBPyesterday.toJSON().substr(0,10));
        $("#endDate").attr('max',LFBPyesterday.toJSON().substr(0,10));
        var date1 = new Date(LFBPdateGet.getFullYear(),LFBPdateGet.getMonth(),LFBPdateGet.getDay(),7,45,0); // Thu Sep 16 2010 13:30:58
var date2 = new Date(LFBPdateGet.getFullYear(),LFBPdateGet.getMonth(),LFBPdateGet.getDay(),LFBPdateGet.getHours(),LFBPdateGet.getMinutes(),LFBPdateGet.getSeconds()); // Tue Aug 18 2015 14:20:48

let LFBPdateDifference;
let LFBPminutes;
if(LFBPdayId == 0){
$("#currentDateData").css('display','none');
$("#sundayStatus").css('display',"inline-block");
}
else{
    if(LFBPdateGet.getHours() >= 7 && LFBPdateGet.getHours() <= 16){
    
    if(LFBPdateGet.getHours() >= 14){
      LFBPdateDifference = date2 - date1;
      LFBPminutes = Math.floor(LFBPdateDifference / 60000);
      LFBPEfficiencyFinal = (((LFBPcounterValue*12.88)/(LFBPminutes*80) )*100).toFixed(2)
      LFBPEfficiencyFinalArray.push(parseFloat(LFBPEfficiencyFinal))
    if(LFBPdayId == 5){
        $("#realTimeIdLFBPacking").text((LFBPminutes*269)-(60*80))
    }
    else{
        $("#realTimeIdLFBPacking").text((LFBPminutes*269)-(45*80))
    }
    
    $("#employeeId").text(80)
    $("#efficiencyValueIdLFBPacking").text(LFBPEfficiencyFinal + "%")
    console.log(LFBPEfficiencyFinalArray)
  
    }  
    else{
      LFBPdateDifference = date2 - date1;
      LFBPminutes = Math.floor(LFBPdateDifference / 60000);
      LFBPEfficiencyFinal = (((LFBPcounterValue*12.88)/(LFBPminutes*80) )*100).toFixed(2)
      LFBPEfficiencyFinalArray.push(parseFloat(LFBPEfficiencyFinal))
    console.log(LFBPEfficiencyFinalArray)
    $("#realTimeIdLFBPacking").text(LFBPminutes*80)
    $("#employeeId").text(80)
    $("#efficiencyValueIdLFBPacking").text(LFBPEfficiencyFinal + "%")
   
    } 

}

}

var TMambEfficiencyFinal;
        var TMambEfficiencyFinalArray = [];
        let TMambcounterValue = $("#counterValueIdAMBPacking").text()
        
        let TMambcurrentDate = new Date().toJSON().substr(0,10);
        let TMambdateGet = new Date()
        let TMambdayId = TMambdateGet.getDay()
        let TMambtoday = new Date()
let TMambyesterday = new Date(TMambtoday)
TMambyesterday.setDate(TMambyesterday.getDate() - 1)
        $("#startDate").val(TMambyesterday.toJSON().substr(0,10));
        $("#endDate").val(TMambyesterday.toJSON().substr(0,10));
        $("#startDate").attr('max',TMambyesterday.toJSON().substr(0,10));
        $("#endDate").attr('max',TMambyesterday.toJSON().substr(0,10));
        var date1 = new Date(TMambdateGet.getFullYear(),TMambdateGet.getMonth(),TMambdateGet.getDay(),7,45,0); // Thu Sep 16 2010 13:30:58
var date2 = new Date(TMambdateGet.getFullYear(),TMambdateGet.getMonth(),TMambdateGet.getDay(),TMambdateGet.getHours(),TMambdateGet.getMinutes(),TMambdateGet.getSeconds()); // Tue Aug 18 2015 14:20:48

let TMambdateDifference;
let TMambminutes;
if(TMambdayId == 0){
$("#currentDateData").css('display','none');
$("#sundayStatus").css('display',"inline-block");
}
else{
    if(TMambdateGet.getHours() >= 7 && TMambdateGet.getHours() <= 16){
    
    if(TMambdateGet.getHours() >= 14){
      TMambdateDifference = date2 - date1;
        TMambminutes = Math.floor(TMambdateDifference / 60000);
    // EfficiencyFinal = (((counterValue*0.50)/(minutes*21) )*100).toFixed(2)
    // EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    // if(dayId == 5){
    //     $("#realTimeId").text((minutes*21)-(60*21))
    // }
    // else{
    //     $("#realTimeId").text((minutes*21)-(45*21))
    // }
    if(TMambdayId == 5){
        //EfficiencyFinal = (((counterValue*10.03)/((minutes*208)-(60*208)) )*100).toFixed(2)  
        TMambEfficiencyFinal = (((TMambcounterValue*0.50)/((TMambminutes*21)-(60*21)) )*100).toFixed(2)
        $("#realTimeIdAMBPacking").text((TMambminutes*21)-(60*21))
   }
   else{
    TMambEfficiencyFinal = (((TMambcounterValue*0.50)/((TMambminutes*21)-(45*21)) )*100).toFixed(2)
    $("#realTimeIdAMBPacking").text((TMambminutes*21)-(45*21))
   }
   TMambEfficiencyFinalArray.push(parseFloat(TMambEfficiencyFinal))

    $("#employeeId").text(21)
    $("#efficiencyValueIdAMBPacking").text(TMambEfficiencyFinal + "%")
    console.log(TMambEfficiencyFinalArray)
   
    }  
    else{
      TMambdateDifference = date2 - date1;
        TMambminutes = Math.floor(TMambdateDifference / 60000);
    TMambEfficiencyFinal = (((TMambcounterValue*0.50)/(TMambminutes*21) )*100).toFixed(2)
    TMambEfficiencyFinalArray.push(parseFloat(TMambEfficiencyFinal))
    console.log(TMambEfficiencyFinalArray)
    $("#realTimeIdAMBPacking").text(TMambminutes*21)
    $("#employeeId").text(21)
    $("#efficiencyValueIdAMBPacking").text(TMambEfficiencyFinal + "%")
  
    } 

  }

}

}
}



var TMBEfficiencyFinalBallShaping;
        var TMBEfficiencyFinalArrayBallShaping = [];
        let TMBcounterValue = $("#counterValueIdBallShaping").text()
        console.log((TMBcounterValue/2920)*100)

        
        let TMBcurrentDate = new Date().toJSON().substr(0,10);
        let TMBdateGet = new Date()
        let TMBdayId = TMBdateGet.getDay()
        let TMBtoday = new Date()
let TMByesterday = new Date(TMBtoday)
TMByesterday.setDate(TMByesterday.getDate() - 1)
        $("#startDate").val(TMByesterday.toJSON().substr(0,10));
        $("#endDate").val(TMByesterday.toJSON().substr(0,10));
        $("#startDate").attr('max',TMByesterday.toJSON().substr(0,10));
        $("#endDate").attr('max',TMByesterday.toJSON().substr(0,10));
        var date1 = new Date(TMBdateGet.getFullYear(),TMBdateGet.getMonth(),TMBdateGet.getDay(),7,45,0); // Thu Sep 16 2010 13:30:58
var date2 = new Date(TMBdateGet.getFullYear(),TMBdateGet.getMonth(),TMBdateGet.getDay(),TMBdateGet.getHours(),TMBdateGet.getMinutes(),TMBdateGet.getSeconds()); // Tue Aug 18 2015 14:20:48

let TMBdateDifference;
let TMBminutes;
if(TMBdayId == 0){
$("#currentDateData").css('display','none');
$("#sundayStatus").css('display',"inline-block");
}
else{
    if(TMBdateGet.getHours() >= 7 && TMBdateGet.getHours() <= 16){
    
    if(TMBdateGet.getHours() >= 14){
      TMBdateDifference = date2 - date1;
      TMBminutes = Math.floor(TMBdateDifference / 60000);

    

    if(TMBdayId == 5){
      TMBEfficiencyFinalBallShaping = (((TMBcounterValue*0.22)/((TMBminutes*0.5*16)-(60*0.5*16)) )*100).toFixed(2)
        $("#realTimeId").text((TMBminutes*0.5*16)-(60*0.5*16))
   }
   else{
    TMBEfficiencyFinalBallShaping = (((TMBcounterValue*0.22)/((TMBminutes*0.5*16)-(45*0.5*16)) )*100).toFixed(2)
    $("#realTimeId").text((TMBminutes*0.5*16)-(45*0.5*16))
   }
   TMBEfficiencyFinalArrayBallShaping.push(parseFloat(TMBEfficiencyFinalBallShaping))

    $("#employeeId").text(0.5*16)
    $("#efficiencyValueId").text(TMBEfficiencyFinalBallShaping + "%")
    console.log(TMBEfficiencyFinalArrayBallShaping)
  
    }  
    else{
      TMBdateDifference = date2 - date1;
      TMBminutes = Math.floor(TMBdateDifference / 60000);
      TMBEfficiencyFinalBallShaping = (((TMBcounterValue*0.22)/(TMBminutes*0.5*16) )*100).toFixed(2)
      TMBEfficiencyFinalArrayBallShaping.push(parseFloat(TMBEfficiencyFinalBallShaping))
    console.log(TMBEfficiencyFinalArrayBallShaping)
    $("#realTimeId").text(TMBminutes*0.5*16)
    $("#employeeId").text(0.5*16)
    $("#efficiencyValueId").text(TMBEfficiencyFinalBallShaping + "%")

    } 
}
}


var TMPEfficiencyFinal;
        var TMPEfficiencyFinalArray = [];
        let TMPcounterValue = $("#counterValueIdTMPacking").text()

        console.log((TMPcounterValue/2920)*100)
        let TMPcurrentDate = new Date().toJSON().substr(0,10);
        let TMPdateGet = new Date()
        let TMPdayId = TMPdateGet.getDay()
        let TMPtoday = new Date()
let TMPyesterday = new Date(TMPtoday)
TMPyesterday.setDate(TMPyesterday.getDate() - 1)
        $("#startDate").val(TMPyesterday.toJSON().substr(0,10));
        $("#endDate").val(TMPyesterday.toJSON().substr(0,10));
        $("#startDate").attr('max',TMPyesterday.toJSON().substr(0,10));
        $("#endDate").attr('max',TMPyesterday.toJSON().substr(0,10));
        var date1 = new Date(TMPdateGet.getFullYear(),TMPdateGet.getMonth(),TMPdateGet.getDay(),7,45,0); // Thu Sep 16 2010 13:30:58
var date2 = new Date(TMPdateGet.getFullYear(),TMPdateGet.getMonth(),TMPdateGet.getDay(),TMPdateGet.getHours(),TMPdateGet.getMinutes(),TMPdateGet.getSeconds()); 



let TMPdateDifference;
let TMminutes;


if(TMPdayId == 0){
$("#currentDateData").css('display','none');
$("#sundayStatus").css('display',"inline-block");
}
else{
    if(TMPdateGet.getHours() >= 7 && TMPdateGet.getHours() <= 16){
    
        

    if(TMPdateGet.getHours() >= 14){
      TMPdateDifference = date2 - date1;
      TMminutes = Math.floor(TMPdateDifference / 60000);
   
    // EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    // if(dayId == 5){
    //     $("#realTimeId").text((minutes*55)-(60*55))
    // }
    // else{
    //     $("#realTimeId").text((minutes*55)-(45*55))
    // }
    

    if(TMPdayId == 5){
 
      TMPEfficiencyFinal = (((TMPcounterValue*31.33)/((TMminutes*55)-(60*55)) )*100).toFixed(2)
       
       
        $("#realTimeIdTMPacking").text((TMminutes*55)-(60*55))
   }
   else{
    
   
    TMPEfficiencyFinal = (((TMPcounterValue*31.33)/((TMminutes*55)-(45*55)) )*100).toFixed(2)
 
    $("#realTimeIdTMPacking").text((TMminutes*55)-(45*55))
   }
   TMPEfficiencyFinalArray.push(parseFloat(TMPEfficiencyFinal))

    $("#employeeId").text(55)
    $("#efficiencyValueIdTMPacking").text(TMPEfficiencyFinal + "%")
    console.log(TMPEfficiencyFinalArray)
   
    }  
    else{
      TMPdateDifference = date2 - date1;
      TMminutes = Math.floor(TMPdateDifference / 60000);
    TMPEfficiencyFinal = (((TMPcounterValue*31.33)/(TMminutes*55) )*100).toFixed(2)
    TMPEfficiencyFinalArray.push(parseFloat(TMPEfficiencyFinal))
    console.log(TMPEfficiencyFinalArray)
    $("#realTimeIdTMPacking").text(TMminutes*55)
    $("#employeeId").text(55)
    $("#efficiencyValueIdTMPacking").text(TMPEfficiencyFinal + "%")
    
    } 



}

}




}




var LamEfficiencyFinal;
        var LamEfficiencyFinalArray = [];
        let LamcounterValueOld = $("#counterValueIdLamination").text()


        let Lammachine1Counter = $("#machine1Reading").text()

        let LamtotalCounter = <?php echo $totalReading; ?>;


        // let machine2Counter = parseFloat(machine1Counter)+10.25
        // let machine3Counter = parseFloat(machine1Counter)-7.55
        // let totalCounter = (machine2Counter*3) + (machine3Counter*3) + parseFloat(counterValueOld);
        // console.log("Total Counter",machine2Counter*0.05*3)
        $("#counterValueIdLamination").text(LamtotalCounter.toFixed(2))
        // $("#machine2Reading").text(machine2Counter)
        // $("#machine3Reading").text(machine3Counter)
        let LamcounterValue = $("#counterValueIdLamination").text()

        
        console.log((counterValue/2920)*100)

        // alert(counterValue)

        let LamcurrentDate = new Date().toJSON().substr(0,10);
        let LamdateGet = new Date()
        let LamdayId = LamdateGet.getDay()
        let Lamtoday = new Date()
let Lamyesterday = new Date(Lamtoday)
Lamyesterday.setDate(Lamyesterday.getDate() - 1)
        $("#startDate").val(Lamyesterday.toJSON().substr(0,10));
        $("#endDate").val(Lamyesterday.toJSON().substr(0,10));
        $("#startDate").attr('max',Lamyesterday.toJSON().substr(0,10));
        $("#endDate").attr('max',Lamyesterday.toJSON().substr(0,10));
        var date1 = new Date(LamdateGet.getFullYear(),LamdateGet.getMonth(),LamdateGet.getDay(),7,45,0); // Thu Sep 16 2010 13:30:58
var date2 = new Date(LamdateGet.getFullYear(),LamdateGet.getMonth(),LamdateGet.getDay(),LamdateGet.getHours(),LamdateGet.getMinutes(),LamdateGet.getSeconds()); // Tue Aug 18 2015 14:20:48

let LamdateDifference;
let Lamminutes;
if(LamdayId == 0){
$("#currentDateData").css('display','none');
$("#sundayStatus").css('display',"inline-block");
}
else{
    if(LamdateGet.getHours() >= 7 && LamdateGet.getHours() <= 16){
    
    if(LamdateGet.getHours() >= 14){
      LamdateDifference = date2 - date1;
      Lamminutes = Math.floor(LamdateDifference / 60000);
  


    if(LamdayId == 5){
      LamEfficiencyFinal = (((LamcounterValue*0.32)/((Lamminutes*6)-(60*6)) )*100).toFixed(2)
      
      $("#realTimeIdLamination").text((Lamminutes*6)-(60*6))
   }
   else{
    LamEfficiencyFinal = (((LamcounterValue*0.32)/((Lamminutes*6)-(45*6)) )*100).toFixed(2)
    //EfficiencyFinal = (((counterValue*2.87)/((minutes*32*1.5)-(45*32*1.5)) )*100).toFixed(2)
      
    $("#realTimeIdLamination").text((Lamminutes*6)-(45*6))
   }
   LamEfficiencyFinalArray.push(parseFloat(LamEfficiencyFinal))
    
    $("#employeeId").text(6)
    $("#efficiencyValueIdLamination").text(LamEfficiencyFinal + "%")
    console.log(LamEfficiencyFinalArray)
  
    }  
    else{
      LamdateDifference = date2 - date1;
      Lamminutes = Math.floor(LamdateDifference / 60000);
      LamEfficiencyFinal = (((LamcounterValue*0.32)/(Lamminutes*6) )*100).toFixed(2)
      LamEfficiencyFinalArray.push(parseFloat(LamEfficiencyFinal))
    console.log(LamEfficiencyFinalArray)
    $("#realTimeIdLamination").text(Lamminutes*6)
    $("#employeeId").text(6)
    $("#efficiencyValueIdLamination").text(LamEfficiencyFinal + "%")
    
    } 
}


}
       
Highcharts.chart('MSEfficiency', {
  title: {
    text: 'MSB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['Bladder Winding', 'Sheet Sizing', 'Panel Cutting', 'MS Lines', 'RWPD']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [BWEfficiencyFinalArray, SSEfficiencyFinalArray, PCEfficiencyFinalArray, MSEfficiencyFinalArray, EfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [69,69,69,69,69],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});



      
Highcharts.chart('BWEfficiency', {
  title: {
    text: 'MSB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['Bladder Winding']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [BWEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [71],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});

   


Highcharts.chart('SSEfficiency', {
  title: {
    text: 'MSB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['Sheet Sizing']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [SSEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [71],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});


Highcharts.chart('PCEfficiency', {
  title: {
    text: 'MSB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['Panel Cutting']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [PCEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [71],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});








Highcharts.chart('MSSEfficiency', {
  title: {
    text: 'MSB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['MS Lines']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [MSEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [71],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});





Highcharts.chart('RWPDEfficiency', {
  title: {
    text: 'MSB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['RWPD']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [EfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [71],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});





Highcharts.chart('TMPEfficiency1', {
  title: {
    text: 'TMB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['Amb Packing']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [TMambEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [TMambEfficiencyFinalArray],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});


Highcharts.chart('AMBEfficiency', {
  title: {
    text: 'AMB  Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['Sheet Sizing', 'HF Cutting', 'AMB Assembling',  'AMB Packing']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [SSEfficiencyFinalArray, HFEfficiencyFinalArray, AMBFEfficiencyFinalArray, TMambEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [69,69,69,69],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});



Highcharts.chart('AMBFEfficiency1', {
  title: {
    text: 'TMB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['AMB Forming']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [AMBFEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [AMBFEfficiencyFinalArray],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});





Highcharts.chart('HFCAMBEfficiency', {
  title: {
    text: 'TMB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['HF Cutting']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [HFEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [HFEfficiencyFinalArray],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});



Highcharts.chart('SSAMBEfficiency', {
  title: {
    text: 'AMB  Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['SheetSizing']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [SSEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [69],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});


Highcharts.chart('TMEfficiency', {
  title: {
    text: 'TMB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['TM Carcas', 'Lamination', 'HF Cutting', 'Assembling', 'TM Packing']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [TMCEfficiencyFinalArray, LamEfficiencyFinalArray, HFEfficiencyFinalArray, TMBEfficiencyFinalArrayBallShaping, TMPEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [69,69,69,69,69],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});




Highcharts.chart('LamEfficiency', {
  title: {
    text: 'TMB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['Lamination']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [LamEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [LamEfficiencyFinalArray],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});


Highcharts.chart('TMFEfficiency', {
  title: {
    text: 'TMB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['TM Assembling']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [TMBEfficiencyFinalArrayBallShaping]
  }, {
    type: 'spline',
    name: 'Target',
    data: [TMBEfficiencyFinalArrayBallShaping],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});





Highcharts.chart('HFEfficiency', {
  title: {
    text: 'TMB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['HF Cutting']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [HFEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [HFEfficiencyFinalArray],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});


Highcharts.chart('TMcarcasEfficiency', {
  title: {
    text: 'TMB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['TM Carcas']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [TMCEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [TMCEfficiencyFinalArray],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});





Highcharts.chart('AMBLamFEfficiency', {
  title: {
    text: 'TMB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['LFB Assembling']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [AMBFEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [AMBFEfficiencyFinalArray],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});

Highcharts.chart('LFBEfficiency', {
  title: {
    text: 'LFB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['Carcas', 'Lamination', 'Panel Cutting', 'Assembling', 'LFB Packing']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [LFBCEfficiencyFinalArray, LamEfficiencyFinalArray, PCEfficiencyFinalArray, AMBFEfficiencyFinalArray, LFBPEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [69,69,69,69,69],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});





Highcharts.chart('LFBPackingEfficiency', {
  title: {
    text: 'TMB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['LFB Packing']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [LFBPEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [LFBPEfficiencyFinalArray],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});



Highcharts.chart('LamEfficiency1', {
  title: {
    text: 'TMB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['Lamination']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [LamEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [LamEfficiencyFinalArray],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});




Highcharts.chart('carcasEfficiency2', {
  title: {
    text: 'TMB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['Carcas']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [LFBCEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [LFBCEfficiencyFinalArray],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});





Highcharts.chart('LFBPanelCEfficiency', {
  title: {
    text: 'LFB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['Panel Cutting']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [PCEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [PCEfficiencyFinalArray],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});


Highcharts.chart('TMPEfficiency', {
  title: {
    text: 'TMB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['TM Packing']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [TMPEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [TMPEfficiencyFinalArray],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});





Highcharts.chart('TMPELfficiency', {
  title: {
    text: 'TMB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['LFB Packing']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [TMPEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [TMPEfficiencyFinalArray],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});




Highcharts.chart('carcasEfficiency1', {
  title: {
    text: 'TMB Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['Carcas']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' %'
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [CEfficiencyFinalArray]
  }, {
    type: 'spline',
    name: 'Target',
    data: [CEfficiencyFinalArray],
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total',
    data: [{
      name: 'Efficiency',
      y: 619,
      color: Highcharts.getOptions().colors[0], // 2020 color
      dataLabels: {
        enabled: true,
        distance: -50,
        format: '{point.total} %',
        style: {
          fontSize: '15px'
        }
      }
    }, {
      name: '2021',
      y: 586,
      color: Highcharts.getOptions().colors[1] // 2021 color
    }, {
      name: '2022',
      y: 647,
      color: Highcharts.getOptions().colors[2] // 2022 color
    }],
    center: [75, 65],
    size: 100,
    innerSize: '70%',
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});











});




  

           </script>

    </body>

    </html>


<?php
} ?>
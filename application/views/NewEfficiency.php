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
                                             
                                                <div id="BWEfficiency"></div>
                                            
                                            </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-39" role="tabpanel">
                                                

                                                <div id="SSEfficiency"></div>

                                                </div>
                                                
                                                <div class="tab-pane fade" id="tab_borders_icons-3" role="tabpanel">
                                              
                                                <div id="PCEfficiency"></div>

                                                </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-4" role="tabpanel">
                                                
                                                <div id="MSLinesSEfficiency"></div>
                                                </div>

                                                <div class="tab-pane fade" id="tab_borders_icons-4" role="tabpanel">

                                              
                                                </div>
                                                
                                                
                                                <div class="tab-pane fade" id="tab_borders_icons-5" role="tabpanel">
                                               <div id="RWPDEfficiency"></div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                  
                        </div>
                        <div class="col-xl-6">
                            <div id="panel-11" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                        Thermo Bonded Ball Efficiency </span>
                                        </h2>
                                       
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
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
                                                   <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-311" role="tab">Panel Cutting  <i class="fal fa-percent mr-1"></i> </a>
                                               </li>
                                               <li class="nav-item">
                                                   <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-411" role="tab"> Assembling  <i class="fal fa-percent mr-1"></i> </a>
                                               </li>
                                               <li class="nav-item">
                                                   <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-511" role="tab">Packing  <i class="fal fa-percent mr-1"></i> </a>
                                               </li>
                                           </ul>
                                                <div class="tab-content py-3">
                                                <div class="tab-pane fade show active" id="tab_borders_icons-111" role="tabpanel">
                                                <div id="TMEfficiency"></div> 
                                                <!-- <div id="flot-toggles" class="w-100 mt-4" style="height: 300px"></div> -->
                                            </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-611" role="tabpanel">
                                             
                                                <div id="TMcarcasEfficiency"></div>
                                            
                                            </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-211" role="tabpanel">
                                                

                                                <div id="LamEfficiency"></div>

                                                </div>
                                                
                                                <div class="tab-pane fade" id="tab_borders_icons-311" role="tabpanel">
                                              
                                                

                                                </div>
                                              

                                                <div class="tab-pane fade" id="tab_borders_icons-411" role="tabpanel">

                                                <div id="TMAMBEfficiency"></div>
                                                </div>
                                                
                                                
                                                <div class="tab-pane fade" id="tab_borders_icons-511" role="tabpanel">
                                               <div id="tmpacking"></div>
                                                </div>
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
                                                   <a class="nav-link active" data-toggle="tab" href="#tab_borders_icons-122" role="tab"> <i class="fal fa-home mr-1"></i> AMB Product Efficiency    </a>
                                               </li>
                                               <li class="nav-item">
                                                   <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-222" role="tab">Lamniaition  <i class="fal fa-percent mr-1"></i>  </a>
                                               </li>
                                               <li class="nav-item">
                                                   <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-322" role="tab"> HF Cutting  <i class="fal fa-percent mr-1"></i>  </a>
                                               </li>
                                               <li class="nav-item">
                                                   <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-422" role="tab"> Assembling  <i class="fal fa-percent mr-1"></i> </a>
                                               </li>
                                               <li class="nav-item">
                                                   <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-522" role="tab">Packing  <i class="fal fa-percent mr-1"></i> </a>
                                               </li>
                                           </ul>
                                                <div class="tab-content py-3">
                                                <div class="tab-pane fade show active" id="tab_borders_icons-122" role="tabpanel">
                                                <div id="AMBEfficiency"></div> 
                                              
                                              
                                                <!-- <div id="flot-toggles" class="w-100 mt-4" style="height: 300px"></div> -->
                                            </div>
                                               
                                                <div class="tab-pane fade" id="tab_borders_icons-222" role="tabpanel">
                                                

                                               
                                                </div>
                                                
                                                <div class="tab-pane fade" id="tab_borders_icons-322" role="tabpanel">
                                              
                                               

                                                </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-422" role="tabpanel">
                                                
                                                <div id="AMBEfficiencyForm"></div>
                                                32323 
                                                </div>

                                                <div class="tab-pane fade" id="tab_borders_icons-522" role="tabpanel">
                                                
                                                <div id="AMBEfficiencypak"></div> 
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                  
                        </div>
                        <div class="col-xl-6">
                            <div id="panel-11" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                        Laminated Bonded Ball Efficiency </span>
                                        </h2>
                                       
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="border px-3 pt-3 pb-0 rounded">
                                            <ul class="nav nav-pills" role="tablist">
                                               
                                                <li class="nav-item">
                                              
                                                    <a class="nav-link active" data-toggle="tab" href="#tab_borders_icons-1111" role="tab"><i class="fal fa-home mr-1"></i> LFB Product Efficiency   </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-6111" role="tab"> Carcas <i class="fal fa-percent mr-1"></i>  </a>
                                                </li> 
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-2111" role="tab">Lamination <i class="fal fa-percent mr-1"></i>  </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-3111" role="tab">Panel Cutting <i class="fal fa-percent mr-1"></i>  </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-45011" role="tab">HF Cutting <i class="fal fa-percent mr-1"></i>  </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-4111" role="tab">Assembling <i class="fal fa-percent mr-1"></i>  </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_borders_icons-5111" role="tab"> Packing <i class="fal fa-percent mr-1"></i>  </a>
                                                </li>
                                            </ul> 
                                                <div class="tab-content py-3">
                                                <div class="tab-pane fade show active" id="tab_borders_icons-1111" role="tabpanel">
                                                <div id="lfbEfficiency"></div> 
                                                <!-- <div id="flot-toggles" class="w-100 mt-4" style="height: 300px"></div> -->
                                            </div>
                                               
                                                <div class="tab-pane fade" id="tab_borders_icons-6111" role="tabpanel">
                                                

                                                

                                                </div>
                                                
                                                <div class="tab-pane fade" id="tab_borders_icons-2111" role="tabpanel">
                                              
                                             

                                                </div>
                                              

                                                <div class="tab-pane fade" id="tab_borders_icons-3111" role="tabpanel">

                                                
                                                </div>
                                                
                                                <div class="tab-pane fade" id="tab_borders_icons-45011" role="tabpanel">
                                                <div id="HFEfficiency"></div>
                                                
                                                </div>
                                                
                                                <div class="tab-pane fade" id="tab_borders_icons-4111" role="tabpanel">
                                              
                                                </div>
                                                <div class="tab-pane fade" id="tab_borders_icons-5111" role="tabpanel">
                                               
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                               
                                                              
                        </div>
                                
                                
                    </main>
            <?php $this->load->view('includes/topsetting'); ?>
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
<?php
//print_r($MSEfficiency);
$BladderWInding=0;
$Sheetsizing=0;
$PanelCutting=0;
$Stitchinglines=0;
$RWPD=0;
$GetBWReading = array();
$GetBWName = array();
$BWTarget = array();

$GetSSReading = array();
$GetSSName = array();
$SSTarget = array();

$GetPCReading = array();
$GetPCName = array();
$PCTarget = array();

$GetSLReading = array();
$GetSLName = array();
$SLTarget = array();

$GetRWPDReading = array();
$GetRWPDName = array();
$RWPDTarget = array();

$TMCarcas=0;
$TMLamination=0;
$TMHFCutting=0;
$TMAssembling=0;
$TMpacking=0;
$GetTMCReading = array();
$GetTMCName = array();
$TMCTarget = array();

$GetLamiReading = array();
$GetLamiName = array();
$LamiTarget = array();

$GetHFCutReading = array();
$GetHFCutName = array();
$HFCutTarget = array();

$GetTMAssemReading = array();
$GetTMAssemName = array();
$TMAssemTarget = array();

$GetTMpackReading = array();
$GetTMpackName = array();
$TMpackTarget = array();

$AmbFoming=0;
$AmbPacking=0;

$GetAMBAssemReading = array();
$GetAMBAssemName = array();
$AMBAssemTarget = array();

$GetAMBpackReading = array();
$GetAMBpackName = array();
$AMBpackTarget = array();

foreach($MSEfficiency as $key){
$Process=$key['Process'];
$target=71;
if($Process=='Bladder Winding'){
    $BladerwindigCount=$key['Counter']*6;
    $BladerWindingName=$key['Name'];
    
    
    array_push($GetBWReading, $BladerwindigCount);
    array_push($GetBWName, $BladerWindingName);
    array_push($BWTarget, $target);
    $BladderWInding += $BladerwindigCount;
}
if($Process=='Stitching Lines'){
    $StitchlinesCount=$key['Counter'];
    $StitchlinesName=$key['Name'];
    
    array_push($GetSLReading, $StitchlinesCount);
    array_push($GetSLName, $StitchlinesName);
    array_push($SLTarget, $target);
    $Stitchinglines += $StitchlinesCount;
}
if($Process=='Panel Cutting'){
    $PanelCuttingCount=$key['Counter'];
    $PanelCuttingName=$key['Name'];
    array_push($GetPCReading, $PanelCuttingCount);
    array_push($GetPCName, $PanelCuttingName);
    array_push($PCTarget, $target);
    
    $PanelCutting += $PanelCuttingCount;
}
if($Process=='RWPD'){
    $RWPDCount=$key['Counter'];
    $RWPDName=$key['Name'];
    
    array_push($GetRWPDReading, $RWPDCount);
    array_push($GetRWPDName, $RWPDName);
    array_push($RWPDTarget, $target);
    $RWPD += $RWPDCount;
}
if($Process=='Sheet Sizing'){
    $SheetSizingCount=$key['Counter'];
    $SheetSizingName=$key['Name'];
    array_push($GetSSReading, $SheetSizingCount);
    array_push($GetSSName, $SheetSizingName);
    array_push($SSTarget, $target);
    
    $Sheetsizing += $SheetSizingCount;
}
if($Process=='TM Assembling'){
    $TMAssebmlnigCount=$key['Counter'];
    $tmassebmlingName=$key['Name'];
    array_push($GetTMAssemReading, $TMAssebmlnigCount);
    array_push($GetTMAssemReading, $tmassebmlingName);
    array_push($TMAssemTarget, $target);
    
    $TMAssembling += $TMAssebmlnigCount;
}
if($Process=='TM Carcas'){
    $tmcarcasCount=$key['Counter'];
    $tmcarcasname=$key['Name'];
    array_push($GetTMCReading, $tmcarcasCount);
    array_push($GetTMCName, $tmcarcasname);
    array_push($TMCTarget, $target);
    
    $tmcarcas += $tmcarcasCount;
}else{
  $tmcarcas=0;
}
if($Process=='TM Packing'){
    $TMPackingCount=$key['Counter'];
    $TMpackinganme=$key['Name'];
    array_push($GetTMpackReading, $TMPackingCount);
    array_push($GetTMpackName, $TMpackinganme);
    array_push($TMpackTarget, $target);
    
    $TMpacking += $TMPackingCount;
}
if($Process=='Lamination'){
    $LaminationCount=$key['Counter'];
    $LmainatioName=$key['Name'];
    array_push($GetLamiReading, $LaminationCount);
    array_push($GetLamiName, $LmainatioName);
    array_push($LamiTarget, $target);
    
    $TMLamination += $LaminationCount;
}
if($Process=='HF Cutting'){
    $HFCuttingCount=$key['Counter'];
    $HFCuttName=$key['Name'];
    array_push($GetHFCutReading, $HFCuttingCount);
    array_push($GetHFCutName, $HFCuttName);
    array_push($HFCutTarget, $target);
    
    $TMHFCutting += $HFCuttingCount;
}
if($Process=='HF Cutting'){
  $HFCuttingCount=$key['Counter'];
  $HFCuttName=$key['Name'];
  array_push($GetHFCutReading, $HFCuttingCount);
  array_push($GetHFCutName, $HFCuttName);
  array_push($HFCutTarget, $target);
  
  $TMHFCutting += $HFCuttingCount;
}

if($Process=='AMB Packing'){
  $Packing=$key['Counter'];
  $PackName=$key['Name'];
  array_push($GetAMBpackReading, $Packing);
  array_push($GetAMBpackName, $PackName);
  array_push($AMBAssemTarget, $target);
  
  $AmbPacking += $Packing;
}

if($Process=='AMB Assembling'){
  $Forrming=$key['Counter'];
  $FormingName=$key['Name'];
  array_push($GetAMBAssemReading, $Forrming);
  array_push($GetAMBAssemName, $FormingName);
  array_push($AMBAssemTarget, $target);
  
  $AmbFoming += $Forrming;
}


}

//Print_r($GetAMBAssemReading);
?>
    <script>
   $(document).ready(function() {

       
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
    valueSuffix: ''
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [<?php Echo $BladderWInding; ?>, <?php Echo $Sheetsizing; ?>, <?php Echo $PanelCutting; ?>
    , <?php Echo $Stitchinglines; ?>, <?php Echo $RWPD; ?>]
    
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
        format: '{point.total}',
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
    text: 'Bladder Winding Efficiency',
    align: 'left'
  },
  xAxis: {
    
    categories: <?php echo json_encode($GetBWName, JSON_NUMERIC_CHECK); ?>,
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' '
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: <?php echo json_encode($GetBWReading, JSON_NUMERIC_CHECK); ?>,
    
  }, {
    type: 'spline',
    name: 'Target',
    data: <?php echo json_encode($BWTarget, JSON_NUMERIC_CHECK); ?>,
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
        format: '{point.total} ',
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
    text: 'Sheet Sizing Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: <?php echo json_encode($GetSSName, JSON_NUMERIC_CHECK); ?>
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' '
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: <?php echo json_encode($GetSSReading, JSON_NUMERIC_CHECK); ?>
    
  }, {
    type: 'spline',
    name: 'Target',
    data: <?php echo json_encode($SSTarget, JSON_NUMERIC_CHECK); ?>,
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
        format: '{point.total} ',
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
    text: 'Panel Cutting Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: <?php echo json_encode($GetPCName, JSON_NUMERIC_CHECK); ?>
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' '
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: <?php echo json_encode($GetPCReading, JSON_NUMERIC_CHECK); ?>
    
  }, {
    type: 'spline',
    name: 'Target',
    data: <?php echo json_encode($PCTarget, JSON_NUMERIC_CHECK); ?>,
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
        format: '{point.total} ',
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
    text: 'RWPD Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: <?php echo json_encode($GetRWPDName, JSON_NUMERIC_CHECK); ?>
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' '
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data:<?php echo json_encode($GetRWPDReading, JSON_NUMERIC_CHECK); ?>
    
  }, {
    type: 'spline',
    name: 'Target',
    data: <?php echo json_encode($RWPDTarget, JSON_NUMERIC_CHECK); ?>,
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
        format: '{point.total} ',
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

Highcharts.chart('MSLinesSEfficiency', {
  title: {
    text: 'Stitching Lines Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: <?php echo json_encode($GetSLName, JSON_NUMERIC_CHECK); ?>
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' '
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: <?php echo json_encode($GetSLReading, JSON_NUMERIC_CHECK); ?>
    
  }, {
    type: 'spline',
    name: 'Target',
    data: <?php echo json_encode($SLTarget, JSON_NUMERIC_CHECK); ?>,
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
        format: '{point.total}',
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
    text: 'Thermo Bounded Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['Carcas', 'Lamination', 'HF Cutting', 'Assembling', 'Packing']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ''
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [<?php Echo $tmcarcas; ?>, <?php Echo $TMLamination; ?>, 0
    , <?php Echo $TMpacking; ?>, <?php Echo $TMpacking ; ?>]
    
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
        format: '{point.total}',
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
    text: 'TM Carcas Efficiency',
    align: 'left'
  },
  xAxis: {
    
    categories: <?php echo json_encode($GetTMCName, JSON_NUMERIC_CHECK); ?>,
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' '
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: <?php echo json_encode($GetTMCReading, JSON_NUMERIC_CHECK); ?>,
    
  }, {
    type: 'spline',
    name: 'Target',
    data: <?php echo json_encode($TMCTarget, JSON_NUMERIC_CHECK); ?>,
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
        format: '{point.total} ',
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
    text: 'Sheet Sizing Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: <?php echo json_encode($GetLamiName, JSON_NUMERIC_CHECK); ?>
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' '
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: <?php echo json_encode($GetLamiReading, JSON_NUMERIC_CHECK); ?>
    
  }, {
    type: 'spline',
    name: 'Target',
    data: <?php echo json_encode($LamiTarget, JSON_NUMERIC_CHECK); ?>,
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
        format: '{point.total} ',
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
    text: 'Panel Cutting Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: <?php echo json_encode($GetHFCutName, JSON_NUMERIC_CHECK); ?>
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' '
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: <?php echo json_encode($GetHFCutReading, JSON_NUMERIC_CHECK); ?>
    
  }, {
    type: 'spline',
    name: 'Target',
    data: <?php echo json_encode($HFCutTarget, JSON_NUMERIC_CHECK); ?>,
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
        format: '{point.total} ',
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
Highcharts.chart('TMAMBEfficiency', {
  title: {
    text: 'TM Assembling Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: <?php echo json_encode($GetTMpackName, JSON_NUMERIC_CHECK); ?>
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' '
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data:<?php echo json_encode($GetTMpackReading, JSON_NUMERIC_CHECK); ?>
    
  }, {
    type: 'spline',
    name: 'Target',
    data: <?php echo json_encode($TMpackTarget, JSON_NUMERIC_CHECK); ?>,
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
        format: '{point.total} ',
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

Highcharts.chart('tmpacking', {
  title: {
    text: 'TM Packing Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: <?php echo json_encode($GetTMpackName, JSON_NUMERIC_CHECK); ?>
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ' '
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: <?php echo json_encode($GetTMpackReading, JSON_NUMERIC_CHECK); ?>
    
  }, {
    type: 'spline',
    name: 'Target',
    data: <?php echo json_encode($TMpackTarget, JSON_NUMERIC_CHECK); ?>,
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
        format: '{point.total}',
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
    text: 'Airless Mini Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['Lamination','HF Cutting', 'Assembling', 'Packing']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ''
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [0,0, <?php Echo $AmbFoming; ?>, <?php Echo $AmbPacking ; ?>]
    
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
        format: '{point.total}',
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




Highcharts.chart('AMBEfficiencyform', {
  title: {
    text: 'Airless Mini Forming Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: <?php echo json_encode($GetAMBAssemName, JSON_NUMERIC_CHECK); ?>
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ''
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: <?php echo json_encode($GetAMBAssemReading, JSON_NUMERIC_CHECK); ?>
    
  }, {
    type: 'spline',
    name: 'Target',
    data: <?php echo json_encode($AMBAssemTarget, JSON_NUMERIC_CHECK); ?>,
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
        format: '{point.total}',
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




alert("I am happy");
Highcharts.chart('lfbEfficiency', {
  title: {
    text: 'Laminated Footbal Product Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: ['Carcas','Lamination', 'Panel Cutting', 'HF Cutting', 'Assembling', 'Packing']
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ''
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: [10,20,30,40,50,60]
    
  }, {
    type: 'spline',
    name: 'Target',
    data: [69,69,69,69,69,69],
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
        format: '{point.total}',
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


Highcharts.chart('AMBEfficiencypak', {
  title: {
    text: 'Airless Mini Packing Efficiency',
    align: 'left'
  },
  xAxis: {
    categories: <?php echo json_encode($GetAMBpackName, JSON_NUMERIC_CHECK); ?>
  },
  yAxis: {
    title: {
      text: 'Efficiency'
    }
  },
  tooltip: {
    valueSuffix: ''
  },
  series: [{
    type: 'column',
    name: 'Efficiency',
    data: <?php echo json_encode($GetAMBpackReading, JSON_NUMERIC_CHECK); ?>
    
  }, {
    type: 'spline',
    name: 'Target',
    data: <?php echo json_encode($AMBpackTarget, JSON_NUMERIC_CHECK); ?>,
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
        format: '{point.total}',
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
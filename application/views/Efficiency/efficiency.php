<html>

<body>


<?php $this->load->view('includes/new_header'); ?>
<!-- BEGIN Page Wrapper -->
<div class="page-wrapper">
    <div class="page-inner">
        <!-- BEGIN Left Aside -->
        <?php

        $this->load->view('includes/new_aside.php');
        ?>
        <!-- END Left Aside -->
        <div class="page-content-wrapper">
            <!-- BEGIN Page Header -->
            <?php

            $this->load->view('includes/top_header.php');
            ?>
            <!-- END Page Header -->
            <!-- BEGIN Page Content -->
            <!-- the #js-page-content id is needed for some plugins to initialize -->
            <main id="js-page-content" role="main" class="page-content">




            <?php
// RWPD
$GetHours = array();
$GetReading = array();
//$target = array();
//print_r($HourllyReading);
foreach ($HourllyReading as $key) {
    $point1 = array(isset($key['balls']),);
    $point2 = array(isset($key['HourName']),);
    $dailytarget = 3000 / 6;
    $point3 = $dailytarget / 8;

    array_push($GetReading, $point1);
    array_push($GetHours, $point2);
    // array_push($target, $point3);
    //array_push($lineNames, $key['LineName']);

} ?>







<?php

// HF Cutting

$GetHours = array();
$GetReading = array();
//$target = array();
//print_r($HourllyReading);
foreach ($HourllyReading as $key) {
    $point1 = array(isset($key['Counter']) * 0.2,);
    $point2 = array(isset($key['HourName']),);
    $dailytarget = 3000 / 6;
    $point3 = $dailytarget / 8;

    array_push($GetReading, $point1);
    array_push($GetHours, $point2);
    // array_push($target, $point3);
    //array_push($lineNames, $key['LineName']);

} ?>



            <?php
// Lamination
$GetHours = array();
$GetReading = array();
$target = array();
//print_r($HourllyReading);
foreach ($HourllyReading as $key) {
  $point1 = array(Round($key['Reading'] * 0.05, 3),);
  $point2 = array($key['HourName'],);
  $dailytarget = 3000 / 6;
  $point3 = $dailytarget / 8;

  array_push($GetReading, $point1);
  array_push($GetHours, $point2);
  array_push($target, $point3);
  //array_push($lineNames, $key['LineName']);

} ?>








<?php
// MS Lines
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




<?php
 // TM Packing
$GetHours = array();
$GetReading = array();
//$target = array();
//print_r($HourllyReading);
foreach ($Stationwise as $key) {
    $point1 = array($key['PassQty'],);
    $point2 = array($key['StationName'],);
    $dailytarget = 3000 / 6;
    $point3 = $dailytarget / 8;

    array_push($GetReading, $point1);
    array_push($GetHours, $point2);
    // array_push($target, $point3);
    //array_push($lineNames, $key['LineName']);

} 
?>


<?php

// AMB Forming
$GetHours = array();
$GetReading = array();
//$target = array();
//print_r($HourllyReading);
foreach ($Stationwise as $key) {
    $point1 = array($key['PassQty'],);
    $point2 = array($key['StationName'],);
    $dailytarget = 3000 / 6;
    $point3 = $dailytarget / 8;

    array_push($GetReading, $point1);
    array_push($GetHours, $point2);
    // array_push($target, $point3);
    //array_push($lineNames, $key['LineName']);

} 
?>


                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(
                                                                'index.php/main/dmms_dashboard'
                                                            ); ?>">Dashboard</a></li>

                    <li class="breadcrumb-item"><a href="javascript:void(0);"> Dashboard</a></li>
                    <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                </ol>

                <div class="subheader">
                    <h1 class="subheader-title">
                        <i class='subheader-icon fal fa-chart-area'></i> <span class='fw-300'>Dashboard</span>
                    </h1>


                </div>

                <div class="row">


<div class="col-sm-6 col-xl-3">
    <a href="<?php echo base_url("Efficiency/departments") ?>">
        <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
            <div class="">
                <h3 class="display-4 d-block l-h-n m-0 fw-500">
                    <?php  ?>
                    <small class="m-0 l-h-n">Attended Minutes</small>
                </h3>
            </div>
            <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
        </div>
    </a>
</div>

<div class="col-sm-6 col-xl-3">
    <a href="<?php echo base_url("index.php/Sections/Dept_Sections/1") ?>">
        <div class="p-3 bg-info-300 rounded overflow-hidden position-relative text-white mb-g">
            <div class="">
                <h3 class="display-4 d-block l-h-n m-0 fw-500">
                    <?php  ?>
                    <small class="m-0 l-h-n">Produced Minutes</small>
                </h3>
            </div>
            <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
        </div>
    </a>
</div>
</div>

                <div class="row">
                   
                    <div style="display:none" class="col-sm-6 col-xl-4">
                        <a href="<?php echo base_url("Efficiency/AMB") ?>">
                            <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:maroon">
                                <div class="">
                                    <h3 class="display-4 d-block l-h-n m-0 fw-500 text-center">
                                      RWPD
                                        <div class="row mt-2">
                                        <div class="col-md-6">
                                        <small class="m-0 l-h-n">Efficiency </small>
                                        <span id="efficiencyValueIdRWPD"></span>
                                        <span id="counterValueIdRWPD"><span style='display:none'><?php echo $totalRWPD ?></span></span>
                                        </div>

                                        <div class="col-md-6">
                                        <small class="m-0 l-h-n">Real Time (Minutes) </small>
                                                    <span id="realTimeIdRWPD"> </span>
                                        </div>

                                        </div>
                                                   
                                        

                                    </h3>
                                </div>
                                <i class="fal fa-futbol  position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                            </div>
                        </a>
                    </div>
                    
                    <div style="display:none" class="col-sm-6 col-xl-4">
                        <a href="<?php echo base_url("Efficiency/LFB") ?>">
                            <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:#330066">
                                <div class="">
                                    <h3 class="display-4 d-block l-h-n m-0 fw-500 text-center">
                                    
                                         Sheet Sizing
                                        <div class="row mt-2">
                                        <div class="col-md-6">
                                        <small class="m-0 l-h-n">Efficiency</small>
                                            <span id="efficiencyValueIdSheetSizing"></span>

                                            
                                            <span id="counterValueIdSheetSizing"><span style='display:none'><?php echo $CounterSheetSizing[0]['Counter']*5.25*2; ?></span></span>
                                        </div>
                                        <div class="col-md-6">
                                        <small class="m-0 l-h-n">Real Time (Minutes)</small>
                                                    <span id="realTimeIdSheetSizing"> </span>
                                            <small class="m-0 l-h-n"></small>
                                        </div>
                                        </div>
                                    </h3>
                                </div>
                                <i class="fal fa-futbol  position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                            </div>
                        </a>
                    </div>

                    <div style="display:none" class="col-sm-6 col-xl-4">
                        <a href="<?php echo base_url("Efficiency/LFB") ?>">
                            <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:#330066">
                                <div class="">
                                    <h3 class="display-4 d-block l-h-n m-0 fw-500 text-center">
                                         Panel Cutting Press

                                        <div class="row mt-2">
                                        <div class="col-md-6">
                                       <small class="m-0 l-h-n">Efficiency</small>

                                        <span id="efficiencyValueIdPanelCutting"></span>
                                        <span id="counterValueIdPanelCutting"><span style="display:none"><?php  echo $Cutting[0]['Counter']*3.5; ?></span></span>

                                            <small class="m-0 l-h-n"></small>

                                        </div>

                                        <div class="col-md-6">
                                        
                                        <small class="m-0 l-h-n">Real Time (Minutes)</small>
                                                    <span id="realTimeIdPanelCutting"> </span>
                                        </div>

                                        </div>
                                            
                                    </h3>
                                </div>
                                <i class="fal fa-futbol  position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                            </div>
                        </a>
                    </div>
                </div>

                
        <div class="row mt-4" style="display:none">
          <?php
         
            foreach ($hfcutting as $Keys) {
                ?>

              <div class="col-md-2">
                <div class="p-3 bg-info-300 rounded overflow-hidden position-relative text-white mb-g">
                  <div class="">
                    <h3 class="display-4 d-block l-h-n m-0 fw-500">

                      <small class="m-0 l-h-n"> <?php
                                                              echo $Keys['Name'];
                                                              ?> </small>
                    </h3>
                    <h3 class="display-4 d-block l-h-n m-0 fw-500">
                      <?php
                      echo $Keys['Counter']*0.2;
                      ?>

                    </h3>
                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size:6rem"></i>
                  </div>
                  <!-- <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i> -->
                </div>
              </div>


          <?php
            }
          

          ?>

        </div>



                <div class="row">
                
                   
                   <div style="display:none" class="col-sm-6 col-xl-4">
                       <a href="<?php echo base_url("Efficiency/AMB") ?>">
                           <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:maroon">
                               <div class="">
                                   <h3 class="display-4 d-block l-h-n m-0 fw-500 text-center">
                                       HF Cutting

                                       <div class="row mt-2">
                                        <div class="col-md-6">
                                       <small class="m-0 l-h-n">Efficiency</small>
                                        <span id="efficiencyValueIdHFCutting"></span>
                                       <span id="counterValueIdHFCutting"><span style='display:none'><?php echo $totalHF*0.2; ?></span></span>
                                       <small class="m-0 l-h-n"></small>

                                       </div>

                                       <div class="col-md-6">

                                       <small class="m-0 l-h-n">Real Time (Minutes)</small>
                                                    <span id="realTimeId"> </span>

                                       </div>
                                       </div>
                                       
                                   </h3>
                               </div>
                               <i class="fal fa-futbol  position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                           </div>
                       </a>
                   </div>
                   <div style="display:none" class="col-sm-6 col-xl-4">
                       <a href="<?php echo base_url("Efficiency/LFB") ?>">
                           <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:#330066">
                               <div class="">
                                   <h3 class="display-4 d-block l-h-n m-0 fw-500 text-center">
                                       Lamination
                                       <div class="row mt-2">
                                        <div class="col-md-6">
                                        <?php foreach ($IndividualReading as $Inmachine) {
     

     ?>
       <div class="col-md-3">
 
         <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color: maroon;">
           <div class="">
             <h3 class="display-4 d-block l-h-n m-0 fw-500">
 
               <small class="m-0 l-h-n"><?php echo $Inmachine['Name']; ?></small>
             </h3>
             <h6 class="display-4 d-block l-h-n m-0 fw-400" id="machine1Reading">
 
               <?php echo $Inmachine['Reading'] * 0.05 ; ?>
             </h6>
             <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size:6rem"></i>
           </div>
           <!-- <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i> -->
         </div>
 
       </div>
 
 
 
 
     <?php
     }
     ?>

                                       <small class="m-0 l-h-n">Efficiency</small>
                                            <span id="efficiencyValueIdLamination"></span>

                                            <span id="counterValueIdLamination"><?php echo $totalLamination*0.05*3; ?></span>
                                            <small class="m-0 l-h-n"></small>
                                        </div>

                                        <div class="col-md-6">
                                        <small class="m-0 l-h-n">Real Time (Minutes)</small>
                                                    <span id="realTimeIdLamination"> </span>
                                        </div>

                                        </div>

                                           
                                   </h3>
                               </div>
                               <i class="fal fa-futbol  position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                           </div>
                       </a>
                   </div>

                   <div style="display:none" class="col-sm-6 col-xl-4">
                       <a href="<?php echo base_url("Efficiency/LFB") ?>">
                           <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:#330066">
                               <div class="">
                                   <h3 class="display-4 d-block l-h-n m-0 fw-500 text-center">
                                      Bladder Winding
                                      <div class="row mt-2">
                                        <div class="col-md-6">
                                      <small class="m-0 l-h-n">Efficiency</small>
                                            <span id="efficiencyValueIdBladder"></span>
                                            <?php if(array_key_exists(0,$getDataBladder)) { ?>
                                            <span id="counterValueIdBladder"><span style="display:none"><?php echo Round($getDataBladder[0]['Counter'],0)*6; ?></span></span>
                                            <?php } else{ ?>
                                                <span id="counterValueIdBladder">0</span>
                                                <?php }  ?>

                                        </div>

                                        <div class="col-md-6">
                                        <span>
                                                    <small class="m-0 l-h-n">Real Time (Minutes)</small>
                                                    <span id="realTimeIdBladder"> </span></span>
                                            <small class="m-0 l-h-n"></small>
                                        </div>

                                        </div>
                                            
                                    
                                   </h3>
                               </div>
                               <i class="fal fa-futbol  position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                           </div>
                       </a>
                   </div>
               </div>


               <div class="row">
                   
                   <div style="display:none" class="col-sm-6 col-xl-4">
                       <a href="<?php echo base_url("Efficiency/AMB") ?>">
                           <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:maroon">
                               <div class="">
                                   <h3 class="display-4 d-block l-h-n m-0 fw-500 text-center">
                                       MS Lines
                                       <div class="row mt-2">
                                        <div class="col-md-6">



                                            <small class="m-0 l-h-n">Efficiency</small>
                                            <span id="efficiencyValueIdMSLines"></span>
                                            <?php if(array_key_exists(0,$DataMSLines)) { ?>
                                            <span id="counterValueIdMSLines"><span style='display:none'><?php echo Round($DataMSLines[0]['PassQty'],0); ?></span></span>
                                            <?php } else{ ?>
                                                <span id="counterValueIdMSLines">0</span>
                                                <?php }  ?>

                                                                                        <small class="m-0 l-h-n"></small>

                                        </div>

                                        <div class="col-md-6">
                                        <small class="m-0 l-h-n">Real Time (Minutes)</small>
                                                    <span id="realTimeIdMSLines"> </span>
                                                    <small class="m-0 l-h-n"></small>

                                        </div>
                                        </div>
                                   </h3>
                               </div>
                               <i class="fal fa-futbol  position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                           </div>
                       </a>
                   </div>
                   <div style="display:none" class="col-sm-6 col-xl-4">
                       <a href="<?php echo base_url("Efficiency/LFB") ?>">
                           <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:#330066">
                               <div class="">
                                   <h3 class="display-4 d-block l-h-n m-0 fw-500 text-center">
                                       TM Assembling & Packing
                                       <div class="row mt-2">
                                        <div class="col-md-6">
                                       <small class="m-0 l-h-n">Efficiency</small>
                                            <span id="efficiencyValueIdTMPacking"></span>
                                            <?php if(array_key_exists(0,$DataTMPacking)) { ?>
                                            <span id="counterValueIdTMPacking"><span style='display:none'><?php echo Round($DataTMPacking[0]['PassQty'],0); ?></span></span>
                                            <?php } else{ ?>
                                                <span id="counterValueIdTMPacking">0</span>
                                                <?php }  ?>

                                                                                        <small class="m-0 l-h-n"></small>


                                        </div>

                                        <div class="col-md-6">
                                        <small  class="m-0 l-h-n">Real Time (Minutes)</small>
                                            <span  id="realTimeIdTMPacking"> </span>
                                            <small class="m-0 l-h-n"></small>
                                        </div>

                                        </div>
                                           
                                   </h3>
                               </div>
                               <i class="fal fa-futbol  position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                           </div>
                       </a>
                   </div>

                   <div style="display:none" class="col-sm-6 col-xl-4">
                       <a href="<?php echo base_url("Efficiency/LFB") ?>">
                           <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:#330066">
                               <div class="">
                                   <h3 class="display-4 d-block l-h-n m-0 fw-500 text-center">
                                     AMB Assembling
                                     <div class="row mt-2">
                                        <div class="col-md-6 mt-2">
                                     <small class="m-0 l-h-n">Efficiency</small>
                                            <span id="efficiencyValueIdAMBForming"></span>
                                            <?php if(array_key_exists(0,$DataAMBForming)) { ?>
                                            <span id="counterValueIdAMBForming"><span style='display:none'><?php echo Round($DataAMBForming[0]['PassQty'],0); ?></span></span>
                                            <?php } else{ ?>
                                                <span id="counterValueIdAMBForming">0</span>
                                                <?php }  ?>
                                       <small class="m-0 l-h-n"></small>

                                    </div>

                                    <div class="col-md-6">

                                    <small class="m-0 l-h-n">Real Time (Minutes)</small>
                                                    <span id="realTimeIdAMBForming"> </span>
                                    </div>

                                    </div>


                                   </h3>
                               </div>
                               <i class="fal fa-futbol  position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                           </div>
                       </a>
                   </div>
               </div>


               <div class="row">
                   
                   <div style="display:none" class="col-sm-6 col-xl-4">
                       <a href="<?php echo base_url("Efficiency/AMB") ?>">
                           <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:maroon">
                               <div class="">
                                   <h3 class="display-4 d-block l-h-n m-0 fw-500 text-center">
                                       AMB Packing
                                       <div class="row mt-2">
                                        <div class="col-md-6 mt-2">
                                       <small class="m-0 l-h-n">Efficiency</small>
                                            <span id="efficiencyValueIdAMBPacking"></span>
                                            <?php if(array_key_exists(0,$DataAMBPacking)) { ?>
                                            <span id="counterValueIdAMBPacking"><?php echo Round($DataAMBPacking[0]['PassQty'],0); ?></span>
                                            <?php } else{ ?>
                                                <span id="counterValueIdAMBPacking">0</span>
                                                <?php }  ?>
                                       <small class="m-0 l-h-n"></small>

                                       </div>

                                       <div class="col-md-6">
                                       <small class="m-0 l-h-n">Real Time (Minutes)</small>
                                                    <span id="realTimeIdAMBPacking"> </span>
                                       </div>
                                       </div>
                                   </h3>
                               </div>
                               <i class="fal fa-futbol  position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                           </div>
                       </a>
                   </div>
                   <div style="display:none" class="col-sm-6 col-xl-4">
                       <a href="<?php echo base_url("Efficiency/LFB") ?>">
                           <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:#330066">
                               <div class="">
                                   <h3 class="display-4 d-block l-h-n m-0 fw-500 text-center">
                                       LFB Assemblig & Packing
                                       <div class="row mt-2">
                                        <div class="col-md-6 mt-2">
                                       <small class="m-0 l-h-n">Efficiency</small>
                                            <span id="efficiencyValueIdLFBPacking"></span>
                                            <?php if(array_key_exists(0,$DataLFBPacking)) { ?>
                                            <span id="counterValueIdLFBPacking"><span style='display:none'><?php echo Round($DataLFBPacking[0]['PassQty'],0); ?></span></span>
                                            <?php } else{ ?>
                                                <span id="counterValueIdLFBPacking">0</span>
                                                <?php }  ?>
                                       <small class="m-0 l-h-n"></small>

                                     </div>

                                     <div class="col-md-6">
                                     <small class="m-0 l-h-n">Real Time (Minutes)</small>
                                                    <span id="realTimeIdLFBPacking"> </span>
                                     </div>

                                     </div>
                                   </h3>
                               </div>
                               <i class="fal fa-futbol  position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                           </div>
                       </a>
                   </div>

                   <div style="display:none" class="col-sm-6 col-xl-4">
                       <a href="<?php echo base_url("Efficiency/LFB") ?>">
                           <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:#330066">
                               <div class="">
                                   <h3 class="display-4 d-block l-h-n m-0 fw-500 text-center">
                                    TM Carcas
                                    <div class="row mt-2">
                                        <div class="col-md-6 mt-2">
                                    <small class="m-0 l-h-n">Efficiency</small>
                                            <span id="efficiencyValueIdTMCarcas"></span>
                                            <?php if(array_key_exists(0,$getDataTMCarcas)){ ?>
                                            <span id="counterValueIdTMCarcas"><span style='display:none'><?php echo $getDataTMCarcas[0]['Counter'] ?></span></span>
                                            <?php } else{ ?>
                                                <span id="counterValueIdTMCarcas">0</span>
                                                <?php } ?>
                                       <small class="m-0 l-h-n"></small>

                                    </div>

                                    <div class="col-md-6">
                                    <small class="m-0 l-h-n">Real Time (Minutes)</small>
                                                    <span id="realTimeIdTMCarcas"> </span>
                                    </div>
                                    </div>
                                       
                                   </h3>
                               </div>
                               <i class="fal fa-futbol  position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                           </div>
                       </a>
                   </div>
               </div>


               
               <div class="row">
                   
                   <div style="display:none" class="col-sm-6 col-xl-4">
                       <a href="<?php echo base_url("Efficiency/AMB") ?>">
                           <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:maroon">
                               <div class="">
                                   <h3 class="display-4 d-block l-h-n m-0 fw-500 text-center">
                                       LFB Carcas
                                       
                                       <small class="m-0 l-h-n">Efficiency</small>
                                       <div class="row mt-2">
                                        <div class="col-md-6 mt-2">
                                            <span id="efficiencyValueIdLFBCarcas"></span>
                                            <?php if(array_key_exists(0,$getDataLFBCarcas)){ ?>
                                            <span id="counterValueIdLFBCarcas"><span style='display:none'><?php echo $getDataLFBCarcas[0]['Counter'] ?></span></span>
                                            <?php } else{ ?>
                                                <span id="counterValueIdLFBCarcas">0</span>
                                                <?php } ?>
                                       <small class="m-0 l-h-n"></small>

                                       </div>

                                       <div class="col-md-6">
                                       <small class="m-0 l-h-n">Real Time (Minutes)</small>
                                                    <span id="realTimeIdLFBCarcas"> </span>
                                                    <small class="m-0 l-h-n"></small>

                                       </div>

                                       </div>
                                   </h3>
                               </div>
                               <i class="fal fa-futbol  position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                           </div>
                       </a>
                   </div>
                   <div style="display:none" class="col-sm-6 col-xl-4">
                       <a href="<?php echo base_url("Efficiency/LFB") ?>">
                           <div class="p-3 rounded overflow-hidden position-relative text-white mb-g" style="background-color:#330066">
                               <div class="">
                                   <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                       Core
                                       <div class="row mt-2">
                                        <div class="col-md-6 mt-2">
                                       <small class="m-0 l-h-n">Efficiency</small>
                                            <span id="efficiencyValueIdCore"></span>
                                       <?php if(array_key_exists(0,$getDataCore)){ ?>
                                            <span id="counterValueIdCore"><span style='display:none'><?php echo $getDataCore[0]['Counter'] ?></span></span>
                                            <?php } else{ ?>
                                                <span id="counterValueIdCore">0</span>
                                                <?php } ?>
                                       <small class="m-0 l-h-n"></small>

                                       </div>
                                       <div class="col-md-6">

                                       <small class="m-0 l-h-n">Real Time (Minutes)</small>
                                                    <span id="realTimeIdCore"> </span>
                                       </div>
                                       </div>
                                   </h3>
                               </div>
                               <i class="fal fa-futbol  position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                           </div>
                       </a>
                   </div>

               </div>







                <div class="card mb-12" hidden>
                    <div class="row ml-12 mt-12">
                        <div class="col-md-2">


                            <a href="javascript:void(0)" onclick="showForm('<?php echo 'B34001' ?>')">
                                <div style="background-color:grey" class=" p-2  rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                            <small id="showValueB34001" class="m-0 l-h-n">Hand Stitch (B34001)</small>


                                        </h3>
                                    </div>
                                    <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                </div>
                            </a>

                        </div>
                        <div class="col-md-2">
                            <a href="javascript:void(0)" onclick="showForm('<?php echo "B34002" ?>')">
                                <div style="background-color:rgba(204, 197, 181, 1)" class=" p-2  rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                            <small id="showValueB34002" class="m-0 l-h-n">Thermo Bounded
                                                (B34002,B34003,B34004)
                                            </small>


                                        </h3>
                                    </div>
                                    <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="javascript:void(0)" onclick="showForm('<?php echo "B34003" ?>')">
                                <div style="background-color:rgba(188, 136, 147, 0.6)" class=" p-2  rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                            <small id="showValueB34003" class="m-0 l-h-n"> Machine Stitched (B34005)</small>


                                        </h3>
                                    </div>
                                    <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="javascript:void(0)" onclick="showForm('<?php echo "B34004" ?>')">
                                <div style="background-color:rgba(26, 132, 145, 0.7)" class=" p-2  rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                            <small id="showValueB34004" class="m-0 l-h-n">Airless Mini (B34006)</small>


                                        </h3>
                                    </div>
                                    <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="javascript:void(0)" onclick="showForm('<?php echo "B34005" ?>')">
                                <div style="background-color:rgba(26, 132, 145, 0.7)" class=" p-2  rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">



                                            <small id="showValueB34005" class="m-0 l-h-n">Laminated Football (B34007)</small>


                                        </h3>
                                    </div>
                                    <i class="fal fa-clock position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                </div>
                            </a>
                        </div>





                        <div class="form-row mb-2 ml-2" id="showForm" style="overflow-x:auto;">


                            <!-- <div class="col-md-2">
                                                    <div class="position-relative form-group">
                                                        <label class="">SAM Forming </label>
                                                        <input name="forming" id="forming" type="number" class="form-control" value="">
                                                    </div>
                                                </div>
                                               -->


                        </div>

                    </div>

                </div>

                <div class="guage">
                    <script src="https://code.highcharts.com/highcharts.js"></script>
                    <script src="https://code.highcharts.com/highcharts-more.js"></script>
                    <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
                    <script src="https://code.highcharts.com/modules/exporting.js"></script>
                    <script src="https://code.highcharts.com/modules/export-data.js"></script>
                    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
                 
                <div class="row mt-4">
                <div class="col-md-3">
                

<div class="panel-hdr">
<h2>
  RWPD

</h2>
</div>

<div class="panel-container show">

<div id="container-speedRWPD" style="height:250px" class="chart-container"></div>
</div>



                </div>

                <div class="col-md-3">
                
               

                <div class="panel-hdr">
                <h2>
                  Sheet Sizing
               
                </h2>
              </div>

                <div class="panel-container show">

                <div id="container-speedSheetSizing" style="height:250px" class="chart-container"></div>

                </div>

               

                </div>
                <div class="col-md-3">
                
                

<div class="panel-hdr">
<h2>
  Panel Cutting

</h2>
</div>

<div class="panel-container show">

<div id="container-speedPanelCutting" style="height:250px" class="chart-container"></div>

</div>



                </div>
            

            
                <div class="col-md-3">

           

<div class="panel-hdr">
<h2>
  HF Cutting

</h2>
</div>

<div class="panel-container show">

<div id="container-speedHFCutting" style="height:250px" class="chart-container"></div>

</div>


                
                </div>
                
                </div>


                <div class="row mt-4">


                <div class="col-md-3">

                

                <div class="panel-hdr">
                <h2>
                  Lamination
               
                </h2>
              </div>

                <div class="panel-container show">

                <div id="container-speedLamination" style="height:250px" class="chart-container"></div>

                </div>

             
                
                </div>

                <div class="col-md-3">

                <div class="panel-hdr">
                <h2>
                  Bladder Winding
               
                </h2>
              </div>

                <div class="panel-container show">

                <div id="container-speedBladder" style="height:250px" class="chart-container"></div>

                </div>

               

                </div>

                <div class="col-md-3">
                
                

                <div class="panel-hdr">
                <h2>
                  MS Lines
               
                </h2>
              </div>

              <div class="panel-container show">

<div id="container-speedMSLines" style="height:250px" class="chart-container"></div>

</div>


                
                </div>


                
                <div class="col-md-3">
                <div class="panel-hdr">
                <h2>
                  TM Packing
               
                </h2>
              </div>

              <div class="panel-container show">

<div id="container-speedTMPacking" style="height:250px" class="chart-container"></div>

</div>
                
                </div>

                
                </div>

                <div class="row mt-4">

            


                <div class="col-md-3">

<div class="panel-hdr">
<h2>
  AMB Packing

</h2>
</div>
<div class="panel-container show">

<div id="container-speedAMBPacking"  style="height:250px" class="chart-container"></div>

</div>
</div>

<div class="col-md-3">

<div class="panel-hdr">
<h2>
  AMB Forming

</h2>
</div>
<div class="panel-container show">

<div id="container-speedAMBForming" style="height:250px" class="chart-container"></div>
</div>
</div>

<div class="col-md-3">
                <div class="panel-hdr">
                <h2>
                  LFB Packing
               
                </h2>
              </div>

                <div class="panel-container show">

                <div id="container-speedLFBPacking" style="height:250px" class="chart-container"></div>

                </div>
                </div>  

                <div class="col-md-3">
                <div class="panel-hdr">
                <h2>
                  TM Carcas
               
                </h2>
              </div>

                <div class="panel-container show">

                <div id="container-speedTMCarcas" style="height:250px" class="chart-container"></div>

                </div>
                </div>


                </div>



                <div class="row mt-4">

                
                <div class="col-md-3">
                <div class="panel-hdr">
                <h2>
                  LFB Carcas
               
                </h2>
              </div>

                <div class="panel-container show">

                <div id="container-speedLFBCarcas" style="height:250px" class="chart-container"></div>

                </div>
                </div>

                <div class="col-md-3">
                
                <div class="panel-hdr">
                <h2>
                  Core
               
                </h2>
              </div>

                <div class="panel-container show">

                <div id="container-speedCore"  style="height:250px" class="chart-container"></div>

                </div>

                </div>

           
                </div>

              

                

               
                </div>

                

                


             




        





            </main>

            


            


            <!-- this overlay is activated only when mobile menu is triggered -->
            <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
            <!-- BEGIN Page Footer -->
            <footer class="page-footer" role="contentinfo">
                <div class="d-flex align-items-center flex-1 text-muted">
                    <span class="hidden-md-down fw-700">2021 © DMMS by&nbsp;IT Dept Forward Sports</span>
                </div>
                <div>

                </div>
            </footer>
            <!-- END Page Footer -->
            <!-- BEGIN Shortcuts -->

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
<script src="<?php echo base_url(); ?>assets/js/vendors.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/js/app.bundle.js"></script>
<script type="text/javascript">
    /* Activate smart panels */
    $('#js-page-content').smartPanel();
</script>
<!-- The order of scripts is irrelevant. Please check out the plugin pages for more details about these plugins below: -->
<script src="<?php echo base_url(); ?>assets/js/statistics/peity/peity.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/js/statistics/flot/flot.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datagrid/datatables/datatables.bundle.js"></script>




<?php // RWPD ?>


<script>
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
    console.log(EfficiencyFinalArray)
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green

                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedRWPD', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
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
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green

                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedRWPD', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    } 
}
else{
    $("#realTimeIdRWPD").text(0)
    $("#employeeId").text(0)
    $("#efficiencyValueIdRWPD").text("0 %")
    $("#currentDateData").css('display','none');
    $("#overStatus").css('display',"inline-block");
}
}

   
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

    function generateDataTop(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.BarData.length;

 //concat to get points
 for (var i = 0; i < len; i++) {
     ps[i] = {
         name: data1.BarData[i].Date,
         y: parseInt(data1.BarData[i].Counter),
         drilldown: data1.BarData[i].Date
     };
 }
 names = [];
 //generate series and split points
 for (i = 0; i < len; i++) {
     var p = ps[i];
   
     series.push(p);
 }
 return series;
}

function generateDataBottom(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.MachineData.length;
   let datesArray = []
   let dataArray = []

 //concat to get points
 for (var i = 0; i < len; i++) {
    if(datesArray.indexOf(data1.MachineData[i].Date) === -1){
        datesArray.push(data1.MachineData[i].Date)
        dataArray.push([data1.MachineData[i].Date,data1.MachineData[i].Name,parseInt(data1.MachineData[i].Counter)])
    }
    else{
        dataArray.push([data1.MachineData[i].Date,data1.MachineData[i].Name,parseInt(data1.MachineData[i].Counter)])
    }


  
 }

 //generate series and split points
 for (i = 0; i < datesArray.length; i++) {
    let OriginaldataArray = []
    let OriginaldataArrayDateRemove = []
    dataArray.filter(function(e) { 
        if(e[0] === datesArray[i]){
            OriginaldataArray.push(e)
        }
    });
    OriginaldataArray.forEach(element => {
        // console.log("Element", element)
        element.shift()
        OriginaldataArrayDateRemove.push(element)
    });
    // console.log("data Get", OriginaldataArray)
     var p = {
        name: datesArray[i],
        id: datesArray[i],
        data: OriginaldataArrayDateRemove
     }
    //  console.log("Series", p)
     series.push(p);
 }
 return series;
}


    $("#searchRange").on('click',function(e){
        e.preventDefault()
        $("#dateRangeResult").css('display','none')
        $("#loadingShow").css('display','inline-block')
        let startDate = $("#startDate").val()
        let endDate = $("#endDate").val()
        let startDateNewFormat = startDate.split("-")[2]+"-"+startDate.split("-")[1]+"-"+startDate.split("-")[0]
        let endDateNewFormat = endDate.split("-")[2]+"-"+endDate.split("-")[1]+"-"+endDate.split("-")[0]
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        let datesArray = []
        let datesArrayMachineWise = []
        let seriesDataMachine1 = [];
        let seriesDataMachine2 = [];
        let seriesDataMachine3 = [];
        let seriesDataMachine4 = [];
        let seriesDataMachine5 = [];
        let originalDataMachineWise = [];
        let targetDataMachineWise = [];
        let url = "<?php echo base_url('Efficiency/getRWPDDateRangeData') ?>";
        let url2 = "<?php echo base_url('Efficiency/getRealTimeDateRange') ?>";
        $.post(url,{"startDate":startDate, "endDate":endDate},function(data, status){
            console.log("Data Outer", data)
        let seriesDataTop;
        let seriesDataBottom;
        let dataArrayOuter = data.BarData
        let outputOuter = 0;
    let MinutesOuter = 0;
    let efficiencyOuter = 0;
        if(data){
        seriesDataTop = generateDataTop(data)
        seriesDataBottom = generateDataBottom(data)
  
        for(let k = 0; k<data.MachineData.length; k++){
            if(datesArrayMachineWise.indexOf(data.MachineData[k].Date) === -1){
            datesArrayMachineWise.push(data.MachineData[k].Date)
        targetDataMachineWise.push(parseFloat(67))
        if(data.MachineData[k].Name == "Metal Detector 1"){
                outputOuter = data.MachineData[k].Counter * 0.58
            MinutesOuter = (12.4*480);
            efficiencyOuter = ((outputOuter / MinutesOuter) * 100).toFixed(2)
            seriesDataMachine1.push(parseFloat(efficiencyOuter))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            }
            else if(data.MachineData[k].Name == "Metal Detector 2"){
                outputOuter = data.MachineData[k].Counter * 0.58
            MinutesOuter = (12.4*480);
            efficiencyOuter = ((outputOuter / MinutesOuter) * 100).toFixed(2)
            seriesDataMachine2.push(parseFloat(efficiencyOuter))
            seriesDataMachine1.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            }
            else if(data.MachineData[k].Name == "Metal Detector 3"){
                outputOuter = data.MachineData[k].Counter * 0.58
            MinutesOuter = (12.4*480);
            efficiencyOuter = ((outputOuter / MinutesOuter) * 100).toFixed(2)
            seriesDataMachine3.push(parseFloat(efficiencyOuter))
            seriesDataMachine2.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            }
            else if(data.MachineData[k].Name == "Metal Detector 4"){
            outputOuter = data.MachineData[k].Counter * 0.58
            MinutesOuter = (12.4*480);
            efficiencyOuter = ((outputOuter / MinutesOuter) * 100).toFixed(2)
            seriesDataMachine4.push(parseFloat(efficiencyOuter))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine5.push(0)
            }
            else if(data.MachineData[k].Name == "Metal Detector 5"){
                outputOuter = data.MachineData[k].Counter * 0.58
            MinutesOuter = (12.4*480);
            efficiency = ((outputOuter / MinutesOuter) * 100).toFixed(2)
            seriesDataMachine5.push(parseFloat(efficiencyOuter))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine1.push(0)
            }
    }
    else{
        if(data.MachineData[k].Name == "Metal Detector 1"){
                outputOuter = data.MachineData[k].Counter * 0.58
            MinutesOuter = (12.4*480);
            efficiencyOuter = ((outputOuter / MinutesOuter) * 100).toFixed(2)
            seriesDataMachine1.pop()
            seriesDataMachine1.push(parseFloat(efficiencyOuter))
 
            }
            else if(data.MachineData[k].Name == "Metal Detector 2"){
                outputOuter = data.MachineData[k].Counter * 0.58
            MinutesOuter = (12.4*480);
            efficiencyOuter = ((outputOuter / MinutesOuter) * 100).toFixed(2)
            seriesDataMachine2.pop()
            seriesDataMachine2.push(parseFloat(efficiencyOuter))

            }
            else if(data.MachineData[k].Name == "Metal Detector 3"){
                outputOuter = data.MachineData[k].Counter * 0.58
            MinutesOuter = (12.4*480);
            efficiencyOuter = ((outputOuter / MinutesOuter) * 100).toFixed(2)
            seriesDataMachine3.pop()
            seriesDataMachine3.push(parseFloat(efficiencyOuter))
      
            }
            else if(data.MachineData[k].Name == "Metal Detector 4"){
            outputOuter = data.MachineData[k].Counter * 0.58
            MinutesOuter = (12.4*480);
            efficiencyOuter = ((outputOuter / MinutesOuter) * 100).toFixed(2)
            seriesDataMachine4.pop()
            seriesDataMachine4.push(parseFloat(efficiencyOuter))
 
            }
            else if(data.MachineData[k].Name == "Metal Detector 5"){
                outputOuter = data.MachineData[k].Counter * 0.58
            MinutesOuter = (12.4*480);
            efficiencyOuter = ((outputOuter / MinutesOuter) * 100).toFixed(2)
            seriesDataMachine5.pop()
            seriesDataMachine5.push(parseFloat(efficiencyOuter))
   
            }
    }
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){
        }
  
      
        originalDataMachineWise.push({name:"Metal Detector 1",data:seriesDataMachine1},{name:"Metal Detector 2",data:seriesDataMachine2},{name:"Metal Detector 3",data:seriesDataMachine3},{name:"Metal Detector 4",data:seriesDataMachine4},{name:"Metal Detector 5",data:seriesDataMachine5},{name:"Target Efficiency",data:targetDataMachineWise})
        }
        // console.log("Target", targetDataMachineWise)
        for (var i = 0; i < data.BarData.length; i++) {
    if(datesArray.indexOf(data.BarData[i].Date) === -1){
        datesArray.push(data.BarData[i].Date)
        // targetDataMachineWise.push(parseFloat(67))
    }
        }

        Highcharts.chart('containerDateRangeLineMachineWise', {

title: {
    text: `Machine-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency ( % )'
    }
},

xAxis: {
    categories: datesArray,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalDataMachineWise,

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


Highcharts.chart('containerDateRangeBar', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'left',
        text: `Balls Count From ${startDateNewFormat} To ${endDateNewFormat}`
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Balls Count'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
            name: "RWPD",
            colorByPoint: true,
            data: seriesDataTop
        }
    ],
    drilldown: {
        breadcrumbs: {
            position: {
                align: 'right'
            }
        },
        series: seriesDataBottom
    }
});

    let seriesData = []
    let targetData = []
    let originalData = []

    let lenOuter = dataArrayOuter.length;
    let output= 0;
    let Minutes = 0;
    let efficiency = 0;
    // for(let i = 0; i<len; i++){ 
        for(let j = 0; j<lenOuter; j++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){

            output = dataArrayOuter[j].Counter * 0.58
            Minutes = (62*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)

            seriesData.push(parseFloat(efficiency))
            targetData.push(parseFloat(67))
// }
        }
       
        // if(i == len-1){
            originalData.push({name:"Efficiency",data:seriesData},{name:"Target Efficiency",data:targetData})
        
        // }
    // }

//  console.log(datesArray)
 Highcharts.chart('containerDateRangeLine', {

title: {
    text: `Process-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency ( % )'
    }
},

xAxis: {
    categories: datesArray,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalData,

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
$("#loadingShow").css('display','none')
$("#dateRangeResult").css('display','inline-block')




 });
    })
</script>
<script>
    $('#direct').click(function() {
        $("#tableHere").html(' ');
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        url = "<?php echo base_url('Efficiency/getEmployees') ?>";
        $.post(url, {
            "section_id": section_id,
            "dept_id": dept_id,
            "direct": "Direct"
        }, function(data) {
      

            var table = '';
            table += `<table id="tableFormat" class="table table-bordered table-hover  table-striped w-100">
            <thead class="bg-primary-200 text-light">
    <tr>
      <th scope="col">Card NO</th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Attendance Time</th>
    </tr>
  </thead>
  <tbody>`
            data.forEach(element => {
            
                table += `<tr>
      <th scope="row">${element.CardNo}</th>
      <td>${element.Name}</td>
      <td>${element.DesigName}</td>
      <td>${(element.AttTime).split(" ")[1]}</td>
    </tr>`
            });


            table += `</tbody>
</table>`
            $("#tableHere").append(table);
            $(document).ready(function() {
                // LoadData(stDate, enDate);

                $('#tableFormat').dataTable({
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
    })
    $('#indirect').click(function() {
        $("#tableHere").html(' ');
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        url = "<?php echo base_url('Efficiency/getEmployees') ?>";
        $.post(url, {
            "section_id": section_id,
            "dept_id": dept_id,
            "direct": "In-Direct"
        }, function(data) {
       
            var table = '';
            table += `<table id="tableFormat" class="table table-bordered table-hover  table-striped w-100">
            <thead class="bg-primary-200 text-light">
            <tr>
      <th scope="col">Card NO</th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Attendance Time</th>
    </tr>
  </thead>
  <tbody>`
            data.forEach(element => {
                table += `<tr>
      <th scope="row">${element.CardNo}</th>
      <td>${element.Name}</td>
      <td>${element.DesigName}</td>
      <td>${(element.AttTime).split(" ")[1]}</td>
    </tr>`
            });



            table += `</tbody>
</table>`
            $("#tableHere").append(table);
            $(document).ready(function() {
                // LoadData(stDate, enDate);

                $('#tableFormat').dataTable({
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
    })
    $('#NullEmp').click(function() {
        $("#tableHere").html(' ');
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        url = "<?php echo base_url('Efficiency/getEmployeesNull') ?>";
        $.post(url, {
            "section_id": section_id,
            "dept_id": dept_id,
            "direct": "IS NULL"
        }, function(data) {
            var table = '';
            table += `<table id="tableFormat" class="table table-bordered table-hover  table-striped w-100">
            <thead class="bg-primary-200 text-light">
            <tr>
      <th scope="col">Card NO</th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Attendance Time</th>
    </tr>
  </thead>
  <tbody>`
            data.forEach(element => {
                table += `<tr>
      <th scope="row">${element.CardNo}</th>
      <td>${element.Name}</td>
      <td>${element.DesigName}</td>
      <td>${(element.AttTime).split(" ")[1]}</td>
    </tr>`
            });



            table += `</tbody>
</table>`
            $("#tableHere").append(table);
            $(document).ready(function() {
                // LoadData(stDate, enDate);

                $('#tableFormat').dataTable({
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


            });
        })

    })
</script>






<?PHP // Core ?>


<script>
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
        var EfficiencyFinal;
        var EfficiencyFinalArray = [];
        let counterValue = $("#counterValueIdCore").text()
        let currentDate = new Date().toJSON().substr(0,10);
        let dateGet = new Date()
        let dayId = dateGet.getDay()
        $("#startDate").val(currentDate);
        $("#endDate").val(currentDate);
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
    EfficiencyFinal = (((counterValue*0.05)/(minutes*1) )*100).toFixed(2)
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    if(dayId == 5){
        $("#realTimeIdCore").text((minutes*1)-(60*1))
    }
    else{
        $("#realTimeIdCore").text((minutes*1)-(45*1))
    }
    
    $("#employeeIdCore").text(1)
    $("#efficiencyValueIdCore").text(EfficiencyFinal + " %")
    console.log(EfficiencyFinalArray)
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green

                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedCore', Highcharts.merge(gaugeOptions, {
            title: {
        text: ''
    },
   
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    }  
    else{
        dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    EfficiencyFinal = (((counterValue*0.05)/(minutes*1) )*100).toFixed(2)
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    console.log(EfficiencyFinalArray)
    $("#realTimeIdCore").text(minutes*1)
    $("#employeeId").text(1)
    $("#efficiencyValueIdCore").text(EfficiencyFinal + " %")
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.1, '#55BF3B'], // green
                    [0.5, '#DDDF0D'], // yellow
                    [0.9, '#DF5353'] // red
                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedCore', Highcharts.merge(gaugeOptions, {
            title: {
        text: ''
    },
   
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    } 
}
else{
    $("#realTimeIdCore").text(0)
    $("#employeeId").text(0)
    $("#efficiencyValueIdCore").text("0 %")
    $("#currentDateData").css('display','none');
    $("#overStatus").css('display',"inline-block");
}
}
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

                     
                        return "\n\t\t\t\t\t\t<a href='javascript:void(0);' class='btn btn-sm btn-icon btn-outline-danger rounded-circle mr-1' title='Delete Record'>\n\t\t\t\t\t\t\t<i class=\"fal fa-times\"></i>\n\t\t\t\t\t\t</a>\n\t\t\t\t\t\t<div class='dropdown d-inline-block dropleft'>\n\t\t\t\t\t\t\t<a href='#'' class='btn btn-sm btn-icon btn-outline-primary rounded-circle shadow-0' data-toggle='dropdown' aria-expanded='true' title='More options'>\n\t\t\t\t\t\t\t\t<i class=\"fal fa-ellipsis-v\"></i>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t<div class='dropdown-menu'>\n\t\t\t\t\t\t\t\t<a class='dropdown-item' href='javascript:void(0);'>Change Status</a>\n\t\t\t\t\t\t\t\t<a class='dropdown-item' href='javascript:void(0);'>Generate Report</a>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>";
                    },
                },

            ]

        });
                    
        Highcharts.chart('container', {
                        chart: {
                            zoomType: 'xy'
                        },
                        title: {
                            text: 'Airless Mini Core  Hourlly '
                        },
                        subtitle: {
                            // text: 'Source: WorldClimate.com'
                        },
                        xAxis: [{
                            categories: <?php echo json_encode($GetHours, JSON_NUMERIC_CHECK); ?>,
                            crosshair: true
                        }],
                        yAxis: [{ // Primary yAxis
                                labels: {
                                    format: '{value} balls',
                                    style: {
                                        color: Highcharts.getOptions().colors[1]
                                    }
                                },
                                title: {
                                    text: 'Achieved',
                                    style: {
                                        color: Highcharts.getOptions().colors[1]
                                    }
                                }
                            },
                            { // Secondary yAxis
                                title: {
                                    text: 'Target',
                                    style: {
                                        color: Highcharts.getOptions().colors[0]
                                    }
                                },

                                opposite: true
                            }
                        ],
                        tooltip: {
                            shared: true
                        },
                        legend: {
                            layout: 'vertical',
                            align: 'left',
                            x: 120,
                            verticalAlign: 'top',
                            y: 100,
                            floating: true,
                            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || // theme
                                'rgba(255,255,255,0.25)',
                            enabled: false
                        },

                        plotOptions: {
                            series: {
                                borderWidth: 0,
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.y:.0f}'
                                }
                            }
                        },
                        series: [{
                                name: 'Achieved',
                                type: 'column',
                                yAxis: 1,

                                data: <?php echo json_encode($GetReading, JSON_NUMERIC_CHECK); ?>,
                                tooltip: {
                                    valueSuffix: ' balls'
                                }

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

    function generateDataTop(data) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data.BarData.length;

 //concat to get points
 for (var i = 0; i < len; i++) {
     ps[i] = {
         name: data.BarData[i].Date,
         y: data.BarData[i].Counter
     };
 }
 names = [];
 //generate series and split points
 for (i = 0; i < len; i++) {
     var p = ps[i];
   
     series.push(p);
 }
 return series;
}



$("#searchRange").on('click',function(e){
    //alert("hlooo");
        e.preventDefault()
        $("#dateRangeResult").css('display','none')
        $("#loadingShow").css('display','inline-block')
        let startDate = $("#startDate").val()
        let endDate = $("#endDate").val()
        let startDateNewFormat = startDate.split("-")[2]+"-"+startDate.split("-")[1]+"-"+startDate.split("-")[0]
        let endDateNewFormat = endDate.split("-")[2]+"-"+endDate.split("-")[1]+"-"+endDate.split("-")[0]
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        let datesArray = []
        let dataArray = []
        let seriesData = []
        let targetData = []
        let originalData = []
        // let datesArrayMachineWise = []
        // let seriesDataMachine1 = [];
        // let seriesDataMachine2 = [];
        // let seriesDataMachine3 = [];
        // let seriesDataMachine4 = [];
        // let originalDataMachineWise = [];
        let targetDataMachineWise = [];
        let url = "<?php echo base_url('Efficiency/gettingambcoreData') ?>";
        $.post(url,{"startDate":startDate, "endDate":endDate},function(data, status){
           // alert(data);
            // console.log("Data Outer", data)
        let seriesDataTop;
        let seriesDataBottom;
        let dataArrayOuter = data.BarData
        if(data){
        seriesDataTop = generateDataTop(data)
        //seriesDataBottom = generateDataBottom(data)
  
        for(let k = 0; k<data.BarData.length; k++){
          output = dataArrayOuter[k].Counter * 0.05
            Minutes = (1*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)

            seriesData.push(parseFloat(efficiency))
            targetData.push(parseFloat(64))
          datesArray.push(data.BarData[k].Date)
          dataArray.push(data.BarData[k].Counter)
        }
        originalData.push({name:"Efficiency",data:seriesData},{name:"Target Efficiency",data:targetData})
        }
        

Highcharts.chart('containerDateRangeBar', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'left',
        text: `Airless Mini Core Count From ${startDateNewFormat} To ${endDateNewFormat}`
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Core Count'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
            name: "Airless Mini Core",
            colorByPoint: true,
            data: seriesDataTop
        },
    ]
});

Highcharts.chart('containerDateRangeLine', {

title: {
    text: `Process-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency'
    }
},

xAxis: {
    categories: datesArray,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalData,

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


$("#loadingShow").css('display','none')
$("#dateRangeResult").css('display','inline-block')
 });
    })

</script>


<script src="<?php echo base_url(); ?>assets/js/datagrid/datatables/datatables.bundle.js"></script>


<script>
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
    
        var EfficiencyFinal;
        var EfficiencyFinalArray = [];
        let counterValue = $("#counterValueIdSheetSizing").text()
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
        EfficiencyFinal = (((counterValue*0.10)/((minutes*8)-(60*8)) )*100).toFixed(2)
        $("#realTimeIdSheetSizing").text((minutes*8)-(60*8))
    }
    else{
        EfficiencyFinal = (((counterValue*0.10)/((minutes*8)-(45*8)) )*100).toFixed(2)
        $("#realTimeIdSheetSizing").text((minutes*8)-(45*8))
    }
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    $("#employeeId").text(8)
    $("#efficiencyValueIdSheetSizing").text(EfficiencyFinal + "%")
    console.log(EfficiencyFinalArray)
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green

                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedSheetSizing', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    }  
    else{
        dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    EfficiencyFinal = (((counterValue*0.10)/(minutes*8) )*100).toFixed(2)
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))

    $("#realTimeIdSheetSizing").text(minutes*8)
    $("#employeeId").text(8)
    $("#efficiencyValueIdSheetSizing").text(EfficiencyFinal + "%")
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green

                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedSheetSizing', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    } 
}
else{
    $("#realTimeIdSheetSizing").text(0)
    $("#employeeId").text(0)
    $("#efficiencyValueIdSheetSizing").text("0 %")
    $("#currentDateData").css('display','none');
    $("#overStatus").css('display',"inline-block");
}
}

// checking with date is more recent to get the other out of it and store the result in dateDifference variable

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

    function generateDataTop(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.BarData.length;

 //concat to get points
 for (var i = 0; i < len; i++) {
     ps[i] = {
         name: data1.BarData[i].Date,
         y: (data1.BarData[i].Counter * 5),
         drilldown: data1.BarData[i].Date
     };
 }
 names = [];
 //generate series and split points
 for (i = 0; i < len; i++) {
     var p = ps[i];
   
     series.push(p);
 }
 return series;
}

function generateDataBottom(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.MachineData.length;
   let datesArray = []
   let dataArray = []

 //concat to get points
 for (var i = 0; i < len; i++) {
    if(datesArray.indexOf(data1.MachineData[i].Date) === -1){
        datesArray.push(data1.MachineData[i].Date)
        if(data1.MachineData[i].MachineName == "Sheet Sizing Press 1" || data1.MachineData[i].MachineName == "Sheet Sizing Press 2"){
            dataArray.push([data1.MachineData[i].Date,data1.MachineData[i].MachineName,(data1.MachineData[i].Counter*3.5)])
        }else{
            dataArray.push([data1.MachineData[i].Date,data1.MachineData[i].MachineName,(data1.MachineData[i].Counter*7)])
        }
        
    }
    else{
        if(data1.MachineData[i].MachineName == "Sheet Sizing Press 1" || data1.MachineData[i].MachineName == "Sheet Sizing Press 2"){
            dataArray.push([data1.MachineData[i].Date,data1.MachineData[i].MachineName,(data1.MachineData[i].Counter*3.5)])
        }else{
            dataArray.push([data1.MachineData[i].Date,data1.MachineData[i].MachineName,(data1.MachineData[i].Counter*7)])
        }
    }


  
 }

 //generate series and split points
 for (i = 0; i < datesArray.length; i++) {
    let OriginaldataArray = []
    let OriginaldataArrayDateRemove = []
    dataArray.filter(function(e) { 
        if(e[0] === datesArray[i]){
            OriginaldataArray.push(e)
        }
    });
    OriginaldataArray.forEach(element => {
        // console.log("Element", element)
        element.shift()
        OriginaldataArrayDateRemove.push(element)
    });
    // console.log("data Get", OriginaldataArray)
     var p = {
        name: datesArray[i],
        id: datesArray[i],
        data: OriginaldataArrayDateRemove
     }
    //  console.log("Series", p)
     series.push(p);
 }
 return series;
}

$("#searchRange").on('click',function(e){
        e.preventDefault()
        $("#dateRangeResult").css('display','none')
        $("#loadingShow").css('display','inline-block')
        let startDate = $("#startDate").val()
        let endDate = $("#endDate").val()
        let startDateNewFormat = startDate.split("-")[2]+"-"+startDate.split("-")[1]+"-"+startDate.split("-")[0]
        let endDateNewFormat = endDate.split("-")[2]+"-"+endDate.split("-")[1]+"-"+endDate.split("-")[0]
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        let datesArray = []
        let datesArrayMachineWise = []
        let seriesDataMachine1 = [];
        let seriesDataMachine2 = [];
        let seriesDataMachine3 = [];
        let seriesDataMachine4 = [];
        let originalDataMachineWise = [];
        let targetDataMachineWise = [];
        let output= 0;
    let Minutes = 0;
    let efficiency = 0;
        let url = "<?php echo base_url('Efficiency/getCuttingSheetSizingDateRangeData') ?>";
        let url2 = "<?php echo base_url('Efficiency/getRealTimeDateRange') ?>";
        $.post(url,{"startDate":startDate, "endDate":endDate},function(data, status){
            console.log("Data Outer", data)
        let seriesDataTop;
        let seriesDataBottom;
        let dataArrayOuter = data.BarData
        if(data){
        seriesDataTop = generateDataTop(data)
        seriesDataBottom = generateDataBottom(data)
  


        for(let k = 0; k<data.MachineData.length; k++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){
        if(datesArrayMachineWise.indexOf(data.MachineData[k].Date) === -1){
            datesArrayMachineWise.push(data.MachineData[k].Date)
        targetDataMachineWise.push(parseFloat(67))
        if(data.MachineData[k].MachineName == "Sheet Sizing Press 1"){
                output = data.MachineData[k].Counter * 3.5 * 0.10 
            Minutes = (480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            }
            else if(data.MachineData[k].MachineName == "Sheet Sizing Press 2"){
                output = data.MachineData[k].Counter  * 0.10 * 3.5
            Minutes = (480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.push(parseFloat(efficiency))
            seriesDataMachine1.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            }
            else if(data.MachineData[k].MachineName == "Sheet Sizing Press 3"){
                output = data.MachineData[k].Counter * 7 * 0.10
            Minutes = (480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine4.push(0)
            }
            else if(data.MachineData[k].MachineName == "Sheet Sizing Press 4"){
                output = data.MachineData[k].Counter * 7 * 0.10 
            Minutes = (480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine4.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine3.push(0)

            }
    }
    else{
        if(data.MachineData[k].MachineName == "Sheet Sizing Press 1"){
                output = data.MachineData[k].Counter * 3.5 * 0.10 
            Minutes = (480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.pop()
            seriesDataMachine1.push(parseFloat(efficiency))
  
            }
            else if(data.MachineData[k].MachineName == "Sheet Sizing Press 2"){
                output = data.MachineData[k].Counter  * 0.10 * 3.5
            Minutes = (480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.pop()
            seriesDataMachine2.push(parseFloat(efficiency))
     
            }
            else if(data.MachineData[k].MachineName == "Sheet Sizing Press 3"){
                output = data.MachineData[k].Counter * 7 * 0.10 
            Minutes = (480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.pop()
            seriesDataMachine3.push(parseFloat(efficiency))
      
            }
            else if(data.MachineData[k].MachineName == "Sheet Sizing Press 4"){
                output = data.MachineData[k].Counter * 7 * 0.10 
            Minutes = (480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine4.pop()
            seriesDataMachine4.push(parseFloat(efficiency))
    

            }
    }
         
        

        }
        originalDataMachineWise.push({name:"Sheet Sizing Press 1",data:seriesDataMachine1},{name:"Sheet Sizing Press 2",data:seriesDataMachine2},{name:"Sheet Sizing Press 3",data:seriesDataMachine3},{name:"Sheet Sizing Press 4",data:seriesDataMachine4},{name:"Target Efficiency",data:targetDataMachineWise})
        }
         console.log("Target", datesArrayMachineWise)
        for (var i = 0; i < data.BarData.length; i++) {
    if(datesArray.indexOf(data.BarData[i].Date) === -1){
        datesArray.push(data.BarData[i].Date)
        // targetDataMachineWise.push(parseFloat(67))
    }
        }

        Highcharts.chart('containerDateRangeLineMachineWise', {

title: {
    text: `Machine-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency ( % )'
    }
},

xAxis: {
    categories: datesArrayMachineWise,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalDataMachineWise,

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


Highcharts.chart('containerDateRangeBar', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'left',
        text: `Balls Count From ${startDateNewFormat} To ${endDateNewFormat}`
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Balls Count'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
            name: "Sheet Sizing",
            colorByPoint: true,
            data: seriesDataTop
        }
    ],
    drilldown: {
        breadcrumbs: {
            position: {
                align: 'right'
            }
        },
        series: seriesDataBottom
    }
});


    let seriesData = []
    let targetData = []
    let originalData = []
    let lenOuter = dataArrayOuter.length;
    let outputInner= 0;
    let MinutesInner = 0;
    let efficiencyInner = 0;
    // for(let i = 0; i<len; i++){ 
        for(let j = 0; j<lenOuter; j++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){

            outputInner = dataArrayOuter[j].Counter * 5.25 * 0.10 
            MinutesInner = (4*480);
            efficiencyInner = ((outputInner / MinutesInner) * 100).toFixed(2)

            seriesData.push(parseFloat(efficiencyInner))
            targetData.push(parseFloat(67))
// }
        }
       
        // if(i == len-1){
            originalData.push({name:"Efficiency",data:seriesData},{name:"Target Efficiency",data:targetData})
        
        // }
    // }

 
//  console.log(datesArray)
 Highcharts.chart('containerDateRangeLine', {

title: {
    text: `Process-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency ( % )'
    }
},

xAxis: {
    categories: datesArray,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalData,

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
$("#loadingShow").css('display','none')
$("#dateRangeResult").css('display','inline-block')




 });
    })
</script>




<?php // Panel Cutting ?>


<script>
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
        var EfficiencyFinal;
        var EfficiencyFinalArray = [];
        let counterValue = $("#counterValueIdPanelCutting").text()
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
   
    // 
    // if(dayId == 5){
    //     $("#realTimeId").text((minutes*7)-(60*7))
    // }
    // else{
    //     $("#realTimeId").text((minutes*7)-(45*7))
    // }
    

    if(dayId == 5){
       
        EfficiencyFinal = (((counterValue*0.28)/((minutes*7)-(60*7)) )*100).toFixed(2)
        $("#realTimeIdPanelCutting").text((minutes*7)-(60*7))
    }
    else{
        EfficiencyFinal = (((counterValue*0.28)/((minutes*7)-(45*7)) )*100).toFixed(2)
        $("#realTimeIdPanelCutting").text((minutes*7)-(45*7))
    }
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    $("#employeeId").text(7)
    $("#efficiencyValueIdPanelCutting").text(EfficiencyFinal + "%")
    console.log(EfficiencyFinalArray)
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green

                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedPanelCutting', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    }  
    else{
        dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    EfficiencyFinal = (((counterValue*0.28)/(minutes*7) )*100).toFixed(2)
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    console.log(EfficiencyFinalArray)
    $("#realTimeIdPanelCutting").text(minutes*7)
    $("#employeeId").text(7)
    $("#efficiencyValueIdPanelCutting").text(EfficiencyFinal + "%")
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.1, '#55BF3B'], // green
                    [0.5, '#DDDF0D'], // yellow
                    [0.9, '#DF5353'] // red
                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedPanelCutting', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    } 
}
else{
    $("#realTimeIdPanelCutting").text(0)
    $("#employeeId").text(0)
    $("#efficiencyValueIdPanelCutting").text("0 %")
    $("#currentDateData").css('display','none');
    $("#overStatus").css('display',"inline-block");
}
}
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

    function generateDataTop(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.BarData.length;

 //concat to get points
 for (var i = 0; i < len; i++) {
     ps[i] = {
         name: data1.BarData[i].Date,
         y: data1.BarData[i].Counter*3.5,
         drilldown: data1.BarData[i].Date
     };
 }
 names = [];
 //generate series and split points
 for (i = 0; i < len; i++) {
     var p = ps[i];
   
     series.push(p);
 }
 return series;
}

function generateDataBottom(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.MachineData.length;
   let datesArray = []
   let dataArray = []

 //concat to get points
 for (var i = 0; i < len; i++) {
    if(datesArray.indexOf(data1.MachineData[i].Date) === -1){
        datesArray.push(data1.MachineData[i].Date)
        dataArray.push([data1.MachineData[i].Date,data1.MachineData[i].MachineName,data1.MachineData[i].Counter*3.5])
    }
    else{
        dataArray.push([data1.MachineData[i].Date,data1.MachineData[i].MachineName,data1.MachineData[i].Counter*3.5])
    }


  
 }

 //generate series and split points
 for (i = 0; i < datesArray.length; i++) {
    let OriginaldataArray = []
    let OriginaldataArrayDateRemove = []
    dataArray.filter(function(e) { 
        if(e[0] === datesArray[i]){
            OriginaldataArray.push(e)
        }
    });
    OriginaldataArray.forEach(element => {
        // console.log("Element", element)
        element.shift()
        OriginaldataArrayDateRemove.push(element)
    });
    // console.log("data Get", OriginaldataArray)
     var p = {
        name: datesArray[i],
        id: datesArray[i],
        data: OriginaldataArrayDateRemove
     }
    //  console.log("Series", p)
     series.push(p);
 }
 return series;
}

    $("#searchRange").on('click',function(e){
        e.preventDefault()
        $("#dateRangeResult").css('display','none')
        $("#loadingShow").css('display','inline-block')
        let startDate = $("#startDate").val()
        let endDate = $("#endDate").val()
        let startDateNewFormat = startDate.split("-")[2]+"-"+startDate.split("-")[1]+"-"+startDate.split("-")[0]
        let endDateNewFormat = endDate.split("-")[2]+"-"+endDate.split("-")[1]+"-"+endDate.split("-")[0]
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        let datesArray = []
        let datesArrayMachineWise = []
        let seriesDataMachine1 = [];
        let seriesDataMachine2 = [];
        let seriesDataMachine3 = [];
        let seriesDataMachine4 = [];
        let seriesDataMachine5 = [];
        let seriesDataMachine6 = [];
        let seriesDataMachine7 = [];
        let output= 0;
    let Minutes = 0;
    let efficiency = 0;
        let originalDataMachineWise = [];
        let targetDataMachineWise = [];
        let url = "<?php echo base_url('Efficiency/getCuttingPanelDateRangeData') ?>";
        let url2 = "<?php echo base_url('Efficiency/getRealTimeDateRange') ?>";
        $.post(url,{"startDate":startDate, "endDate":endDate},function(data, status){
            console.log("Data Outer", data)
        let seriesDataTop;
        let seriesDataBottom;
        let dataArrayOuter = data.BarData
        if(data){
        seriesDataTop = generateDataTop(data)
        seriesDataBottom = generateDataBottom(data)
  


        for(let k = 0; k<data.MachineData.length; k++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){
        if(datesArrayMachineWise.indexOf(data.MachineData[k].Date) === -1){
            datesArrayMachineWise.push(data.MachineData[k].Date)
        targetDataMachineWise.push(parseFloat(67))
        if(data.MachineData[k].MachineName == "Panel Sizing Press 1"){
                output = data.MachineData[k].Counter * 0.28 * 3.5
            Minutes = (1*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine7.push(0)
            }
            else if(data.MachineData[k].MachineName == "Panel Sizing Press 2"){
                output = data.MachineData[k].Counter * 0.28 * 3.5
            Minutes = (1*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.push(parseFloat(efficiency))
            seriesDataMachine4.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine7.push(0)
            }
            else if(data.MachineData[k].MachineName == "Panel Sizing Press 3"){
                output = data.MachineData[k].Counter * 0.28 * 3.5
            Minutes = (1*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine7.push(0)
            }
            else if(data.MachineData[k].MachineName == "Panel Sizing Press 4"){
                output = data.MachineData[k].Counter * 0.28 * 3.5
            Minutes = (1*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine4.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine7.push(0)

            }
            else if(data.MachineData[k].MachineName == "Panel Sizing Press 5"){
                output = data.MachineData[k].Counter * 0.28 * 3.5
            Minutes = (1*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine5.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)

            }
            else if(data.MachineData[k].MachineName == "Panel Sizing Press 6"){
                output = data.MachineData[k].Counter * 0.28 * 3.5
            Minutes = (1*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine6.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine7.push(0)

            }
            else if(data.MachineData[k].MachineName == "Panel Sizing Press 7"){
                output = data.MachineData[k].Counter * 0.28 * 3.5
            Minutes = (1*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine7.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)

            }
    }
    else{
        if(data.MachineData[k].MachineName == "Panel Sizing Press 1"){
                output = data.MachineData[k].Counter * 0.28 * 3.5
            Minutes = (1*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.pop()
            seriesDataMachine1.push(parseFloat(efficiency))
  
            }
            else if(data.MachineData[k].MachineName == "Panel Sizing Press 2"){
                output = data.MachineData[k].Counter * 0.28 * 3.5
            Minutes = (1*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.pop()
            seriesDataMachine2.push(parseFloat(efficiency))
     
            }
            else if(data.MachineData[k].MachineName == "Panel Sizing Press 3"){
                output = data.MachineData[k].Counter * 0.28 * 3.5
            Minutes = (1*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.pop()
            seriesDataMachine3.push(parseFloat(efficiency))
      
            }
            else if(data.MachineData[k].MachineName == "Panel Sizing Press 4"){
                output = data.MachineData[k].Counter * 0.28 * 3.5
            Minutes = (1*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine4.pop()
            seriesDataMachine4.push(parseFloat(efficiency))
            }
            else if(data.MachineData[k].MachineName == "Panel Sizing Press 5"){
                output = data.MachineData[k].Counter * 0.28 * 3.5
            Minutes = (1*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine5.pop()
            seriesDataMachine5.push(parseFloat(efficiency))
            }
            else if(data.MachineData[k].MachineName == "Panel Sizing Press 6"){
                output = data.MachineData[k].Counter * 0.28 * 3.5
            Minutes = (1*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine6.pop()
            seriesDataMachine6.push(parseFloat(efficiency))
            }
            else if(data.MachineData[k].MachineName == "Panel Sizing Press 7"){
                output = data.MachineData[k].Counter * 0.28 * 3.5
            Minutes = (1*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine7.pop()
            seriesDataMachine7.push(parseFloat(efficiency))
            }
    }
         
        

        }
        originalDataMachineWise.push({name:"Panel Sizing Press 1",data:seriesDataMachine1},{name:"Panel Sizing Press 2",data:seriesDataMachine2},{name:"Panel Sizing Press 3",data:seriesDataMachine3},{name:"Panel Sizing Press 4",data:seriesDataMachine4},{name:"Panel Sizing Press 5",data:seriesDataMachine5},{name:"Panel Sizing Press 6",data:seriesDataMachine6},{name:"Panel Sizing Press 7",data:seriesDataMachine7},{name:"Target Efficiency",data:targetDataMachineWise})
        }
         console.log("Target", datesArrayMachineWise)
        for (var i = 0; i < data.BarData.length; i++) {
    if(datesArray.indexOf(data.BarData[i].Date) === -1){
        datesArray.push(data.BarData[i].Date)
        // targetDataMachineWise.push(parseFloat(67))
    }
        }

        Highcharts.chart('containerDateRangeLineMachineWise', {

title: {
    text: `Machine-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency ( % )'
    }
},

xAxis: {
    categories: datesArrayMachineWise,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalDataMachineWise,

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


Highcharts.chart('containerDateRangeBar', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'left',
        text: `Balls Count From ${startDateNewFormat} To ${endDateNewFormat}`
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Balls Count'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
            name: "Panel Cutting",
            colorByPoint: true,
            data: seriesDataTop
        }
    ],
    drilldown: {
        breadcrumbs: {
            position: {
                align: 'right'
            }
        },
        series: seriesDataBottom
    }
});

    let seriesData = []
    let targetData = []
    let originalData = []
    let lenOuter = dataArrayOuter.length;
    let outputInner= 0;
    let MinutesInner = 0;
    let efficiencyInner = 0;
    // for(let i = 0; i<len; i++){ 
        for(let j = 0; j<lenOuter; j++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){

            outputInner = dataArrayOuter[j].Counter * 0.28 * 3.5
            MinutesInner = (1*7*480);
            efficiencyInner = ((outputInner / MinutesInner) * 100).toFixed(2)

            seriesData.push(parseFloat(efficiencyInner))
            targetData.push(parseFloat(67))
// }
        }
       
        // if(i == len-1){
            originalData.push({name:"Efficiency",data:seriesData},{name:"Target Efficiency",data:targetData})
        
        // }
    // }

 
//  console.log(datesArray)
 Highcharts.chart('containerDateRangeLine', {

title: {
    text: `Process-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency ( % )'
    }
},

xAxis: {
    categories: datesArray,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalData,

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
$("#loadingShow").css('display','none')
$("#dateRangeResult").css('display','inline-block')




 });
    })
</script>



<?php // HF Cutting ?>

<script>
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
    <?php $HfTotalMachines = count($hfcutting); ?>

    var EfficiencyFinal;
        var EfficiencyFinalArray = [];
        let counterValue = $("#counterValueIdHFCutting").text()
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
      EfficiencyFinal = (((counterValue*2.87)/((minutes*<?php echo $HfTotalMachines; ?>*1.5)-(60*<?php echo $HfTotalMachines; ?>*1.5)) )*100).toFixed(2)
      
      $("#realTimeIdHFCutting").text((minutes*<?php echo $HfTotalMachines; ?>*1.5)-(60*<?php echo $HfTotalMachines; ?>*1.5))
   }
   else{
    EfficiencyFinal = (((counterValue*2.87)/((minutes*<?php echo $HfTotalMachines; ?>*1.5)-(45*<?php echo $HfTotalMachines; ?>*1.5)) )*100).toFixed(2)
      
       $("#realTimeIdHFCutting").text((minutes*<?php echo $HfTotalMachines; ?>*1.5)-(45*<?php echo $HfTotalMachines; ?>*1.5))
   }
   EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
   
    
    $("#employeeId").text(<?php echo $HfTotalMachines; ?>*1.5)
    $("#efficiencyValueIdHFCutting").text(EfficiencyFinal + "%")
    console.log(EfficiencyFinalArray)
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green

                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedHFCutting', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    }  
    else{
        dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    EfficiencyFinal = (((counterValue*2.87)/(minutes*<?php echo $HfTotalMachines; ?>*1.5) )*100).toFixed(2)
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    console.log(EfficiencyFinalArray)
    $("#realTimeIdHFCutting").text(minutes*<?php echo $HfTotalMachines; ?>*1.5)
    $("#employeeId").text(<?php echo $HfTotalMachines; ?>*1.5)
    $("#efficiencyValueIdHFCutting").text(EfficiencyFinal + "%")
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.1, '#55BF3B'], // green
                    [0.5, '#DDDF0D'], // yellow
                    [0.9, '#DF5353'] // red
                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedHFCutting', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    } 
}
else{
    $("#realTimeIdHFCutting").text(0)
    $("#employeeId").text(0)
    $("#efficiencyValueIdHFCutting").text("0 %")
    $("#currentDateData").css('display','none');
    $("#overStatus").css('display',"inline-block");
}
}
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

  function generateDataTop(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.BarData.length;

 //concat to get points
 for (var i = 0; i < len; i++) {
     ps[i] = {
         name: data1.BarData[i].Date,
         y: Math.round(data1.BarData[i].Counter*0.2),
         drilldown: data1.BarData[i].Date
     };
 }
 names = [];
 //generate series and split points
 for (i = 0; i < len; i++) {
     var p = ps[i];
   
     series.push(p);
 }
 return series;
}

function generateDataBottom(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.MachineData.length;
   let datesArray = []
   let dataArray = []

 //concat to get points
 for (var i = 0; i < len; i++) {
    if(datesArray.indexOf(data1.MachineData[i].Date) === -1){
        datesArray.push(data1.MachineData[i].Date)
        dataArray.push([data1.MachineData[i].Date,data1.MachineData[i].Name,Math.round(data1.MachineData[i].Counter*0.2)])
    }
    else{
        dataArray.push([data1.MachineData[i].Date,data1.MachineData[i].Name,Math.round(data1.MachineData[i].Counter*0.2)])
    }


  
 }

 //generate series and split points
 for (i = 0; i < datesArray.length; i++) {
    let OriginaldataArray = []
    let OriginaldataArrayDateRemove = []
    dataArray.filter(function(e) { 
        if(e[0] === datesArray[i]){
            OriginaldataArray.push(e)
        }
    });
    OriginaldataArray.forEach(element => {
        // console.log("Element", element)
        element.shift()
        OriginaldataArrayDateRemove.push(element)
    });
    // console.log("data Get", OriginaldataArray)
     var p = {
        name: datesArray[i],
        id: datesArray[i],
        data: OriginaldataArrayDateRemove
     }
    //  console.log("Series", p)
     series.push(p);
 }
 return series;
}

$("#searchRange").on('click',function(e){
        e.preventDefault()
        $("#dateRangeResult").css('display','none')
        $("#loadingShow").css('display','inline-block')
        let startDate = $("#startDate").val()
        let endDate = $("#endDate").val()
        let startDateNewFormat = startDate.split("-")[2]+"-"+startDate.split("-")[1]+"-"+startDate.split("-")[0]
        let endDateNewFormat = endDate.split("-")[2]+"-"+endDate.split("-")[1]+"-"+endDate.split("-")[0]
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        let datesArray = []
        let datesArrayMachineWise = []
        let seriesDataMachine1 = [];
        let seriesDataMachine2 = [];
        let seriesDataMachine3 = [];
        let seriesDataMachine4 = [];
        let seriesDataMachine5 = [];
        let seriesDataMachine6 = [];
        let seriesDataMachine7 = [];
        let seriesDataMachine8 = [];
        let seriesDataMachine9 = [];
        let seriesDataMachine10 = [];
        let seriesDataMachine11 = [];
        let seriesDataMachine12 = [];
        let seriesDataMachine13 = [];
        let seriesDataMachine14 = [];
        let seriesDataMachine15 = [];
        let seriesDataMachine16 = [];
        let seriesDataMachine17 = [];
        let seriesDataMachine18 = [];
        let seriesDataMachine19 = [];
        let seriesDataMachine20 = [];
        let seriesDataMachine21 = [];
        let seriesDataMachine22 = [];
        let seriesDataMachine23 = [];
        let seriesDataMachine24 = [];
        let seriesDataMachine25 = [];
        let seriesDataMachine26 = [];
        let seriesDataMachine27 = [];
        let seriesDataMachine28 = [];
        let seriesDataMachine29 = [];
        let seriesDataMachine30 = [];
        let seriesDataMachine31 = [];
        let seriesDataMachine32 = [];
        let output= 0;
    let Minutes = 0;
    let efficiency = 0;
        let originalDataMachineWise = [];
        let targetDataMachineWise = [];
        let url = "<?php echo base_url('Efficiency/getCuttingHFDateRangeData') ?>";
        let url2 = "<?php echo base_url('Efficiency/getRealTimeDateRange') ?>";
        $.post(url,{"startDate":startDate, "endDate":endDate},function(data, status){
            console.log("Data Outer", data)
        let seriesDataTop;
        let seriesDataBottom;
        let dataArrayOuter = data.BarData
        if(data){
        seriesDataTop = generateDataTop(data)
        seriesDataBottom = generateDataBottom(data)
  


        for(let k = 0; k<data.MachineData.length; k++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){
        if(datesArrayMachineWise.indexOf(data.MachineData[k].Date) === -1){
            datesArrayMachineWise.push(data.MachineData[k].Date)
        targetDataMachineWise.push(parseFloat(64))
        if(data.MachineData[k].Name == "HF-01"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-02"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.push(parseFloat(efficiency))
            seriesDataMachine1.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-03"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-04"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine4.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)

            }
            else if(data.MachineData[k].Name == "HF-05"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine5.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-06"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine6.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-07"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine7.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)

            }
            else if(data.MachineData[k].Name == "HF-08"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine8.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-09"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine9.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-10"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine10.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)

            }
            else if(data.MachineData[k].Name == "HF-11"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine11.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-12"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine12.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-13"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine13.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)

            }
            else if(data.MachineData[k].Name == "HF-14"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine14.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-15"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine15.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-16"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine16.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)

            }
            else if(data.MachineData[k].Name == "HF-17"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine17.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-18"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine18.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-19"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine19.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)

            }
            else if(data.MachineData[k].Name == "HF-20"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine20.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-21"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine21.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-22"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine22.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-23"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine23.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-24"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine24.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-25"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine25.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)

            }
            else if(data.MachineData[k].Name == "HF-26"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine26.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-27"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine27.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)

            }
            else if(data.MachineData[k].Name == "HF-28"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine28.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-29"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480); 
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine29.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-30"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine30.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine32.push(0)

            }
            else if(data.MachineData[k].Name == "HF-31"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine31.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine32.push(0)
            }
            else if(data.MachineData[k].Name == "HF-32"){
                output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine32.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
            seriesDataMachine30.push(0)
            seriesDataMachine31.push(0)
            seriesDataMachine1.push(0)
            }
          
    }
    else{
      if(data.MachineData[k].Name == "HF-01"){
          output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.pop()
            seriesDataMachine1.push(parseFloat(efficiency))
        
            }
            else if(data.MachineData[k].Name == "HF-02"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.pop()
            seriesDataMachine2.push(parseFloat(efficiency))
         
            }
            else if(data.MachineData[k].Name == "HF-03"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.pop()
            seriesDataMachine3.push(parseFloat(efficiency))
         
            }
            else if(data.MachineData[k].Name == "HF-04"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine4.pop()
            seriesDataMachine4.push(parseFloat(efficiency))
       

            }
            else if(data.MachineData[k].Name == "HF-05"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (2*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine5.pop()
            seriesDataMachine5.push(parseFloat(efficiency))
        
            }
            else if(data.MachineData[k].Name == "HF-06"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine6.pop()
            seriesDataMachine6.push(parseFloat(efficiency))

            }
            else if(data.MachineData[k].Name == "HF-07"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine7.pop()
            seriesDataMachine7.push(parseFloat(efficiency))
    

            }
            else if(data.MachineData[k].Name == "HF-08"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine8.pop()
            seriesDataMachine8.push(parseFloat(efficiency))

            }
            else if(data.MachineData[k].Name == "HF-09"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine9.pop()
            seriesDataMachine9.push(parseFloat(efficiency))
 
            }
            else if(data.MachineData[k].Name == "HF-10"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine10.pop()
            seriesDataMachine10.push(parseFloat(efficiency))
   

            }
            else if(data.MachineData[k].Name == "HF-11"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine11.pop()
            seriesDataMachine11.push(parseFloat(efficiency))
  
            }
            else if(data.MachineData[k].Name == "HF-12"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine12.pop()
            seriesDataMachine12.push(parseFloat(efficiency))
     
            }
            else if(data.MachineData[k].Name == "HF-13"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine13.pop()
            seriesDataMachine13.push(parseFloat(efficiency))
         

            }
            else if(data.MachineData[k].Name == "HF-14"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine14.pop()
            seriesDataMachine14.push(parseFloat(efficiency))
       
            }
            else if(data.MachineData[k].Name == "HF-15"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine15.pop()
            seriesDataMachine15.push(parseFloat(efficiency))
  
            }
            else if(data.MachineData[k].Name == "HF-16"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine16.pop()
            seriesDataMachine16.push(parseFloat(efficiency))


            }
            else if(data.MachineData[k].Name == "HF-17"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine17.pop()
            seriesDataMachine17.push(parseFloat(efficiency))

            }
            else if(data.MachineData[k].Name == "HF-18"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine18.pop()
            seriesDataMachine18.push(parseFloat(efficiency))
   
            }
            else if(data.MachineData[k].Name == "HF-19"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine19.pop()
            seriesDataMachine19.push(parseFloat(efficiency))
    

            }
            else if(data.MachineData[k].Name == "HF-20"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine20.pop()
            seriesDataMachine20.push(parseFloat(efficiency))
   
            }
            else if(data.MachineData[k].Name == "HF-21"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine21.pop()
            seriesDataMachine21.push(parseFloat(efficiency))
  
            }
            else if(data.MachineData[k].Name == "HF-22"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine22.pop()
            seriesDataMachine22.push(parseFloat(efficiency))
 
            }
            else if(data.MachineData[k].Name == "HF-23"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine23.pop()
            seriesDataMachine23.push(parseFloat(efficiency))
  
            }
            else if(data.MachineData[k].Name == "HF-24"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine24.pop()
            seriesDataMachine24.push(parseFloat(efficiency))
      
            }
            else if(data.MachineData[k].Name == "HF-25"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine25.pop()
            seriesDataMachine25.push(parseFloat(efficiency))
     

            }
            else if(data.MachineData[k].Name == "HF-26"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine26.pop()
            seriesDataMachine26.push(parseFloat(efficiency))
    
            }
            else if(data.MachineData[k].Name == "HF-27"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine27.pop()
            seriesDataMachine27.push(parseFloat(efficiency))
        

            }
            else if(data.MachineData[k].Name == "HF-28"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine28.pop()
            seriesDataMachine28.push(parseFloat(efficiency))
    
            }
            else if(data.MachineData[k].Name == "HF-29"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine29.pop()
            seriesDataMachine29.push(parseFloat(efficiency))
       
            }
            else if(data.MachineData[k].Name == "HF-30"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine30.pop()
            seriesDataMachine30.push(parseFloat(efficiency))
      

            }
            else if(data.MachineData[k].Name == "HF-31"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine31.pop()
            seriesDataMachine31.push(parseFloat(efficiency))
        
            }
            else if(data.MachineData[k].Name == "HF-32"){
              output = data.MachineData[k].Counter * 0.2 * 2.87
            Minutes = (1.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine32.pop()
            seriesDataMachine32.push(parseFloat(efficiency))
    
            }
    }
         
        

        }
        originalDataMachineWise.push(
          {name:"HF-01",data:seriesDataMachine1},
          {name:"HF-02",data:seriesDataMachine2},
          {name:"HF-03",data:seriesDataMachine3},
          {name:"HF-04",data:seriesDataMachine4},

          {name:"HF-05",data:seriesDataMachine5},
          {name:"HF-06",data:seriesDataMachine6},
          {name:"HF-07",data:seriesDataMachine7},
          {name:"HF-08",data:seriesDataMachine8},

          {name:"HF-09",data:seriesDataMachine9},
          {name:"HF-10",data:seriesDataMachine10},
          {name:"HF-11",data:seriesDataMachine11},
          {name:"HF-12",data:seriesDataMachine12},

          {name:"HF-13",data:seriesDataMachine13},
          {name:"HF-14",data:seriesDataMachine14},
          {name:"HF-15",data:seriesDataMachine15},
          {name:"HF-16",data:seriesDataMachine16},

          {name:"HF-17",data:seriesDataMachine17},
          {name:"HF-18",data:seriesDataMachine18},
          {name:"HF-19",data:seriesDataMachine19},
          {name:"HF-20",data:seriesDataMachine20},

          {name:"HF-21",data:seriesDataMachine21},
          {name:"HF-22",data:seriesDataMachine22},
          {name:"HF-23",data:seriesDataMachine23},
          {name:"HF-24",data:seriesDataMachine24},

          {name:"HF-25",data:seriesDataMachine25},
          {name:"HF-26",data:seriesDataMachine26},
          {name:"HF-27",data:seriesDataMachine27},
          {name:"HF-28",data:seriesDataMachine28},

          {name:"HF-29",data:seriesDataMachine29},
          {name:"HF-30",data:seriesDataMachine30},
          {name:"HF-31",data:seriesDataMachine31},
          {name:"HF-32",data:seriesDataMachine32},
          {name:"Target Efficiency",data:targetDataMachineWise}
          )
        }
         console.log("Target", datesArrayMachineWise)
        for (var i = 0; i < data.BarData.length; i++) {
    if(datesArray.indexOf(data.BarData[i].Date) === -1){
        datesArray.push(data.BarData[i].Date)
        // targetDataMachineWise.push(parseFloat(67))
    }
        }

        Highcharts.chart('containerDateRangeLineMachineWise', {

title: {
    text: `Machine-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency ( % )'
    }
},

xAxis: {
    categories: datesArrayMachineWise,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalDataMachineWise,

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


Highcharts.chart('containerDateRangeBar', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'left',
        text: `Balls Count From ${startDateNewFormat} To ${endDateNewFormat}`
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Balls Count'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
            name: "HF Cutting",
            colorByPoint: true,
            data: seriesDataTop
        }
    ],
    drilldown: {
        breadcrumbs: {
            position: {
                align: 'right'
            }
        },
        series: seriesDataBottom
    }
});


    let seriesData = []
    let targetData = []
    let originalData = []
    let lenOuter = dataArrayOuter.length;
    let outputInner= 0;
    let MinutesInner = 0;
    let efficiencyInner = 0;
    // for(let i = 0; i<len; i++){ 
        for(let j = 0; j<lenOuter; j++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){

            outputInner = dataArrayOuter[j].Counter * 0.2 * 2.87
            MinutesInner = (1.5*32*480);
            efficiencyInner = ((outputInner / MinutesInner) * 100).toFixed(2)

            seriesData.push(parseFloat(efficiencyInner))
            targetData.push(parseFloat(64))
// }
        }
       
        // if(i == len-1){
            originalData.push({name:"Efficiency",data:seriesData},{name:"Target Efficiency",data:targetData})
        
        // }
    // }

 
//  console.log(datesArray)
 Highcharts.chart('containerDateRangeLine', {

title: {
    text: `Process-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency ( % )'
    }
},

xAxis: {
    categories: datesArray,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalData,

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
$("#loadingShow").css('display','none')
$("#dateRangeResult").css('display','inline-block')

 });
    })

    Highcharts.chart('container', {
                        chart: {
                            zoomType: 'xy'
                        },
                        title: {
                            text: 'HF Cutting Output'
                        },
                        subtitle: {
                            // text: 'Source: WorldClimate.com'
                        },
                        xAxis: [{
                            categories: <?php echo json_encode($GetHours, JSON_NUMERIC_CHECK); ?>,
                            crosshair: true
                        }],
                        yAxis: [{ // Primary yAxis
                                labels: {
                                    format: '{value} balls',
                                    style: {
                                        color: Highcharts.getOptions().colors[1]
                                    }
                                },
                                title: {
                                    text: 'Achieved',
                                    style: {
                                        color: Highcharts.getOptions().colors[1]
                                    }
                                }
                            },
                            { // Secondary yAxis
                                title: {
                                    text: 'Target',
                                    style: {
                                        color: Highcharts.getOptions().colors[0]
                                    }
                                },

                                opposite: true
                            }
                        ],
                        tooltip: {
                            shared: true
                        },
                        legend: {
                            layout: 'vertical',
                            align: 'left',
                            x: 120,
                            verticalAlign: 'top',
                            y: 100,
                            floating: true,
                            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || // theme
                                'rgba(255,255,255,0.25)',
                            enabled: false
                        },

                        plotOptions: {
                            series: {
                                borderWidth: 0,
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.y:.0f}'
                                }
                            }
                        },
                        series: [{
                                name: 'Achieved',
                                type: 'column',
                                yAxis: 1,

                                data: <?php echo json_encode($GetReading, JSON_NUMERIC_CHECK); ?>,
                                tooltip: {
                                    valueSuffix: ' balls'
                                }

                            }

                        ]


                    });
</script>





<?php // Lamination ?>



<script>
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
        var EfficiencyFinal;
        var EfficiencyFinalArray = [];
        let counterValueOld = $("#counterValueIdLamination").text()
        let machine1Counter = $("#machine1Reading").text()
        let machine2Counter = parseFloat(machine1Counter)+10.25
        let machine3Counter = parseFloat(machine1Counter)-7.55
        let totalCounter = (machine2Counter*3) + (machine3Counter*3) + parseFloat(counterValueOld);
        // console.log("Total Counter",machine2Counter*0.05*3)
        $("#counterValueIdLamination").text(totalCounter.toFixed(2))
        $("#machine2Reading").text(machine2Counter)
        $("#machine3Reading").text(machine3Counter)
        let counterValue = $("#counterValueIdLamination").text()
        console.log((counterValue/2920)*100)
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
        EfficiencyFinal = (((counterValue*0.32)/((minutes*6)-(60*6)) )*100).toFixed(2)
      
      $("#realTimeIdLamination").text((minutes*6)-(60*6))
   }
   else{
    EfficiencyFinal = (((counterValue*0.32)/((minutes*6)-(45*6)) )*100).toFixed(2)
    //EfficiencyFinal = (((counterValue*2.87)/((minutes*32*1.5)-(45*32*1.5)) )*100).toFixed(2)
      
    $("#realTimeIdLamination").text((minutes*6)-(45*6))
   }
   EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    
    $("#employeeId").text(6)
    $("#efficiencyValueIdLamination").text(EfficiencyFinal + "%")
    console.log(EfficiencyFinalArray)
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                  [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green

                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedLamination', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    }  
    else{
        dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    EfficiencyFinal = (((counterValue*0.32)/(minutes*6) )*100).toFixed(2)
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    console.log(EfficiencyFinalArray)
    $("#realTimeIdLamination").text(minutes*6)
    $("#employeeId").text(6)
    $("#efficiencyValueIdLamination").text(EfficiencyFinal + "%")
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.1, '#55BF3B'], // green
                    [0.5, '#DDDF0D'], // yellow
                    [0.9, '#DF5353'] // red
                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedLamination', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    } 
}
else{
    $("#realTimeIdLamination").text(0)
    $("#employeeId").text(0)
    $("#efficiencyValueIdLamination").text("0 %")
    $("#currentDateData").css('display','none');
    $("#overStatus").css('display',"inline-block");
}
}
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
    function generateDataTop(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.BarData.length;

 //concat to get points
 for (var i = 0; i < len; i++) {
     ps[i] = {
         name: data1.BarData[i].Date,
         y: Math.round(data1.BarData[i].Reading * 0.05 *3),
         drilldown: data1.BarData[i].Date
     };
 }
 names = [];
 //generate series and split points
 for (i = 0; i < len; i++) {
     var p = ps[i];
   
     series.push(p);
 }
 return series;
}
    function generateDataBottom(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.MachineData.length;
   let datesArray = []
   let dataArray = []

 //concat to get points
 for (var i = 0; i < len; i++) {
    let dataNew = Math.round(parseFloat((data1.MachineData[i].Reading* 0.05 *3)))
    if(datesArray.indexOf(data1.MachineData[i].Date) === -1){
        datesArray.push(data1.MachineData[i].Date)
        dataArray.push([data1.MachineData[i].Date,data1.MachineData[i].Name,dataNew])
    }
    else{
        dataArray.push([data1.MachineData[i].Date,data1.MachineData[i].Name,dataNew])
    }


  
 }

 //generate series and split points
 for (i = 0; i < datesArray.length; i++) {
    let OriginaldataArray = []
    let OriginaldataArrayDateRemove = []
    dataArray.filter(function(e) { 
        if(e[0] === datesArray[i]){
            OriginaldataArray.push(e)
        }
    });
    OriginaldataArray.forEach(element => {
        // console.log("Element", element)
        element.shift()
        OriginaldataArrayDateRemove.push(element)
    });
    // console.log("data Get", OriginaldataArray)
     var p = {
        name: datesArray[i],
        id: datesArray[i],
        data: OriginaldataArrayDateRemove
     }
    //  console.log("Series", p)
     series.push(p);
 }
 return series;
}

$("#searchRange").on('click',function(e){
        e.preventDefault()
        $("#dateRangeResult").css('display','none')
        $("#loadingShow").css('display','inline-block')
        let startDate = $("#startDate").val()
        let endDate = $("#endDate").val()
        let startDateNewFormat = startDate.split("-")[2]+"-"+startDate.split("-")[1]+"-"+startDate.split("-")[0]
        let endDateNewFormat = endDate.split("-")[2]+"-"+endDate.split("-")[1]+"-"+endDate.split("-")[0]
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        let datesArray = []
        let datesArrayMachineWise = []
        let seriesDataMachine1 = [];
        let seriesDataMachine2 = [];
        let seriesDataMachine3 = [];
        let seriesDataMachine4 = [];
        let output= 0;
    let Minutes = 0;
    let efficiency = 0;
        let originalDataMachineWise = [];
        let targetDataMachineWise = [];
        let url = "<?php echo base_url('Efficiency/getLaminationDateRangeData') ?>";
        let url2 = "<?php echo base_url('Efficiency/getRealTimeDateRange') ?>";
        $.post(url,{"startDate":startDate, "endDate":endDate},function(data, status){
            console.log("Data Outer", data)
        let seriesDataTop;
        let seriesDataBottom;
        let dataArrayOuter = data.BarData
        if(data){
        seriesDataTop = generateDataTop(data)
        seriesDataBottom = generateDataBottom(data)
  


        for(let k = 0; k<data.MachineData.length; k++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){
        if(datesArrayMachineWise.indexOf(data.MachineData[k].Date) === -1){
            datesArrayMachineWise.push(data.MachineData[k].Date)
        targetDataMachineWise.push(parseFloat(67))
        if(data.MachineData[k].Name == "Lamination Machine 1"){
                output = data.MachineData[k].Reading * 0.32 * 0.05 *3
            Minutes = (6*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            }
            else if(data.MachineData[k].Name == "Lamination Machine 2"){
                output = data.MachineData[k].Reading * 0.32 * 3* 0.05
            Minutes = (6*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.push(parseFloat(efficiency))
            seriesDataMachine1.push(0)
            seriesDataMachine3.push(0)
            }
            else if(data.MachineData[k].Name == "Lamination Machine 3"){
                output = data.MachineData[k].Reading * 0.32 * 3 * 0.05
            Minutes = (6*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine1.push(0)
            }
          
    }
    else{
        if(data.MachineData[k].Name == "Lamination Machine 1"){
                output = data.MachineData[k].Reading * 0.32 * 3 * 0.05
            Minutes = (6*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.pop()
            seriesDataMachine1.push(parseFloat(efficiency))
  
            }
            else if(data.MachineData[k].Name == "Lamination Machine 2"){
                output = data.MachineData[k].Reading * 0.32 * 3 * 0.05
            Minutes = (6*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.pop()
            seriesDataMachine2.push(parseFloat(efficiency))
     
            }
            else if(data.MachineData[k].Name == "Lamination Machine 3"){
                output = data.MachineData[k].Reading * 0.32 * 3 * 0.05
            Minutes = (6*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.pop()
            seriesDataMachine3.push(parseFloat(efficiency))
      
            }
     
    }
         
        

        }
        originalDataMachineWise.push({name:"Lamination Machine 1",data:seriesDataMachine1},{name:"Lamination Machine 2",data:seriesDataMachine2},{name:"Lamination Machine 3",data:seriesDataMachine3},{name:"Target Efficiency",data:targetDataMachineWise})
        }
         console.log("Target", datesArrayMachineWise)
        for (var i = 0; i < data.BarData.length; i++) {
    if(datesArray.indexOf(data.BarData[i].Date) === -1){
        datesArray.push(data.BarData[i].Date)
        // targetDataMachineWise.push(parseFloat(67))
    }
        }

        Highcharts.chart('containerDateRangeLineMachineWise', {

title: {
    text: `Machine-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency'
    }
},

xAxis: {
    categories: datesArrayMachineWise,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalDataMachineWise,

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


Highcharts.chart('containerDateRangeBar', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'left',
        text: `Balls Count From ${startDateNewFormat} To ${endDateNewFormat}`
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Balls Count'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
            name: "Lamination",
            colorByPoint: true,
            data: seriesDataTop
        }
    ],
    drilldown: {
        breadcrumbs: {
            position: {
                align: 'right'
            }
        },
        series: seriesDataBottom
    }
});


    let seriesData = []
    let targetData = []
    let originalData = []
    let lenOuter = dataArrayOuter.length;
    let outputInner= 0;
    let MinutesInner = 0;
    let efficiencyInner = 0;
    // for(let i = 0; i<len; i++){ 
        for(let j = 0; j<lenOuter; j++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){

            outputInner = dataArrayOuter[j].Reading * 0.32 * 0.05 * 3
            MinutesInner = (6*480);
            efficiencyInner = ((outputInner / MinutesInner) * 100).toFixed(2)

            seriesData.push(parseFloat(efficiencyInner))
            targetData.push(parseFloat(67))
// }
        }
       
        // if(i == len-1){
            originalData.push({name:"Efficiency",data:seriesData},{name:"Target Efficiency",data:targetData})
        
        // }
    // }
//  console.log(datesArray)
 Highcharts.chart('containerDateRangeLine', {

title: {
    text: `Process-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency'
    }
},

xAxis: {
    categories: datesArray,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalData,

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
$("#loadingShow").css('display','none')
$("#dateRangeResult").css('display','inline-block')



 });
    })
</script>


<?php // Bladder Winding ?>


<script>
                 
                    Highcharts.chart('container', {
                        chart: {
                            zoomType: 'xy'
                        },
                        title: {
                            text: 'Bladder Winding Machine Wise Output'
                        },
                        subtitle: {
                            // text: 'Source: WorldClimate.com'
                        },
                        xAxis: [{
                            categories: <?php echo json_encode($GetHours, JSON_NUMERIC_CHECK); ?>,
                            crosshair: true
                        }],
                        yAxis: [{ // Primary yAxis
                                labels: {
                                    format: '{value} balls',
                                    style: {
                                        color: Highcharts.getOptions().colors[1]
                                    }
                                },
                                title: {
                                    text: 'Achieved',
                                    style: {
                                        color: Highcharts.getOptions().colors[1]
                                    }
                                }

                            },
                            { // Secondary yAxis
                                title: {
                                    text: 'Target',
                                    style: {
                                        color: Highcharts.getOptions().colors[0]
                                    }
                                },

                                opposite: true
                            }

                        ],
                        tooltip: {
                            shared: true
                        },
                        legend: {
                            layout: 'vertical',
                            align: 'left',
                            x: 120,
                            verticalAlign: 'top',
                            y: 100,
                            floating: true,
                            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || // theme
                                'rgba(255,255,255,0.25)',
                            enabled: false
                        },

                        plotOptions: {
                            series: {
                                borderWidth: 0,
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.y:.0f}'
                                }
                            }
                        },
                        series: [{
                                name: 'Achieved',
                                type: 'column',
                                yAxis: 1,

                                data: <?php echo json_encode($GetReading, JSON_NUMERIC_CHECK); ?>,
                                tooltip: {
                                    valueSuffix: ' balls'
                                }

                            }

                        ]


                    });
                </script>

<?php // Bladder ?>

<script>
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
        var EfficiencyFinal;
        var EfficiencyFinalArray = [];
        let counterValue = $("#counterValueIdBladder").text()
        console.log((counterValue/2920)*100)
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
   
    // EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    // if(dayId == 5){
    //     $("#realTimeId").text((minutes*0.5*16)-(60*0.5*16))
    // }
    // else{
        
    // }
    

    
    if(dayId == 5){
        EfficiencyFinal = (((counterValue*0.22)/((minutes*0.5*16)-(60*0.5*16)) )*100).toFixed(2)
        $("#realTimeId").text((minutes*0.5*16)-(60*0.5*16))
   }
   else{
    EfficiencyFinal = (((counterValue*0.22)/((minutes*0.5*16)-(45*0.5*16)) )*100).toFixed(2)
    $("#realTimeId").text((minutes*0.5*16)-(45*0.5*16))
   }
   EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))

    $("#employeeId").text(0.5*16)
    $("#efficiencyValueId").text(EfficiencyFinal + "%")
    console.log(EfficiencyFinalArray)
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green

                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedBladder', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    }  
    else{
        dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    EfficiencyFinal = (((counterValue*0.22)/(minutes*0.5*16) )*100).toFixed(2)
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    console.log(EfficiencyFinalArray)
    $("#realTimeIdBladder").text(minutes*0.5*16)
    $("#employeeId").text(0.5*16)
    $("#efficiencyValueIdBladder").text(EfficiencyFinal + "%")
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green
                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedBladder', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    } 
}
else{
    $("#realTimeIdBladder").text(0)
    $("#employeeId").text(0)
    $("#efficiencyValueIdBladder").text("0 %")
    $("#currentDateData").css('display','none');
    $("#overStatus").css('display',"inline-block");
}
}
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

    function generateDataTop(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.BarData.length;

 //concat to get points
 for (var i = 0; i < len; i++) {
     ps[i] = {
         name: data1.BarData[i].Date,
         y: parseFloat(data1.BarData[i].Counter*6),
         drilldown: data1.BarData[i].Date
     };
 }
 names = [];
 //generate series and split points
 for (i = 0; i < len; i++) {
     var p = ps[i];
   
     series.push(p);
 }
 return series;
}

function generateDataBottom(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.MachineData.length;
   let datesArray = []
   let dataArray = []

 //concat to get points
 for (var i = 0; i < len; i++) {
    if(datesArray.indexOf(data1.MachineData[i].Date) === -1){
        datesArray.push(data1.MachineData[i].Date)
        dataArray.push([data1.MachineData[i].Date,data1.MachineData[i].Name,parseFloat(data1.MachineData[i].Counter*6)])
    }
    else{
        dataArray.push([data1.MachineData[i].Date,data1.MachineData[i].Name,parseFloat(data1.MachineData[i].Counter*6)])
    }


  
 }

 //generate series and split points
 for (i = 0; i < datesArray.length; i++) {
    let OriginaldataArray = []
    let OriginaldataArrayDateRemove = []
    dataArray.filter(function(e) { 
        if(e[0] === datesArray[i]){
            OriginaldataArray.push(e)
        }
    });
    OriginaldataArray.forEach(element => {
        // console.log("Element", element)
        element.shift()
        OriginaldataArrayDateRemove.push(element)
    });
    // console.log("data Get", OriginaldataArray)
     var p = {
        name: datesArray[i],
        id: datesArray[i],
        data: OriginaldataArrayDateRemove
     }
    //  console.log("Series", p)
     series.push(p);
 }
 return series;
}

$("#searchRange").on('click',function(e){
        e.preventDefault()
        $("#dateRangeResult").css('display','none')
        $("#loadingShow").css('display','inline-block')
        let startDate = $("#startDate").val()
        let endDate = $("#endDate").val()
        let startDateNewFormat = startDate.split("-")[2]+"-"+startDate.split("-")[1]+"-"+startDate.split("-")[0]
        let endDateNewFormat = endDate.split("-")[2]+"-"+endDate.split("-")[1]+"-"+endDate.split("-")[0]
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        let datesArray = []
        let datesArrayMachineWise = []
        let seriesDataMachine1 = [];
        let seriesDataMachine2 = [];
        let seriesDataMachine3 = [];
        let seriesDataMachine4 = [];
        let seriesDataMachine5 = [];
        let seriesDataMachine6 = [];
        let seriesDataMachine7 = [];
        let seriesDataMachine8 = [];
        let seriesDataMachine9 = [];
        let seriesDataMachine10 = [];
        let seriesDataMachine11 = [];
        let seriesDataMachine12 = [];
        let seriesDataMachine13 = [];
        let seriesDataMachine14 = [];
        let seriesDataMachine15 = [];
        let seriesDataMachine16 = [];
        let originalDataMachineWise = [];
        let targetDataMachineWise = [];
        let output= 0;
    let Minutes = 0;
    let efficiency = 0;
        let url = "<?php echo base_url('Efficiency/getBladderWindingDateRangeData') ?>";
        let url2 = "<?php echo base_url('Efficiency/getRealTimeDateRange') ?>";
        $.post(url,{"startDate":startDate, "endDate":endDate},function(data, status){
            console.log("Data Outer", data)
        let seriesDataTop;
        let seriesDataBottom;
        let dataArrayOuter = data.BarData
        if(data){
        seriesDataTop = generateDataTop(data)
        seriesDataBottom = generateDataBottom(data)
  


        for(let k = 0; k<data.MachineData.length; k++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){
        if(datesArrayMachineWise.indexOf(data.MachineData[k].Date) === -1){
            datesArrayMachineWise.push(data.MachineData[k].Date)
        targetDataMachineWise.push(parseFloat(67))
        if(data.MachineData[k].Name == "Bladder Winding 1"){
                output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)

            }
            else if(data.MachineData[k].Name == "Bladder Winding 2"){
                output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.push(parseFloat(efficiency))
            seriesDataMachine1.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)


            }
            else if(data.MachineData[k].Name == "Bladder Winding 3"){
                output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)

  
            }
            else if(data.MachineData[k].Name == "Bladder Winding 4"){
                output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine4.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
     


            }
            else if(data.MachineData[k].Name == "Bladder Winding 5"){
                output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine5.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)

   
            }
            else if(data.MachineData[k].Name == "Bladder Winding 6"){
                output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine6.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)


            }
            else if(data.MachineData[k].Name == "Bladder Winding 7"){
                output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine7.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)



            }
            else if(data.MachineData[k].Name == "Bladder Winding 8"){
                output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine8.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
    

            }
            else if(data.MachineData[k].Name == "Bladder Winding 9"){
                output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine9.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
   

            }
            else if(data.MachineData[k].Name == "Bladder Winding 10"){
                output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine10.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
 


            }
            else if(data.MachineData[k].Name == "Bladder Winding 11"){
                output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine11.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)


            }
            else if(data.MachineData[k].Name == "Bladder Winding 12"){
                output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine12.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
  

            }
            else if(data.MachineData[k].Name == "Bladder Winding 13"){
                output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine13.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)



            }
            else if(data.MachineData[k].Name == "Bladder Winding 14"){
                output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine14.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)


            }
            else if(data.MachineData[k].Name == "Bladder Winding 15"){
                output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine15.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine16.push(0)
    

            }
            else if(data.MachineData[k].Name == "Bladder Winding 16"){
                output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine16.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine1.push(0)
 


            }
    }
    else{
        if(data.MachineData[k].Name == "Bladder Winding 1"){
          output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.pop()
            seriesDataMachine1.push(parseFloat(efficiency))
        
            }
            else if(data.MachineData[k].Name == "Bladder Winding 2"){
              output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.pop()
            seriesDataMachine2.push(parseFloat(efficiency))
         
            }
            else if(data.MachineData[k].Name == "Bladder Winding 3"){
              output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.pop()
            seriesDataMachine3.push(parseFloat(efficiency))
         
            }
            else if(data.MachineData[k].Name == "Bladder Winding 4"){
              output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine4.pop()
            seriesDataMachine4.push(parseFloat(efficiency))
       

            }
            else if(data.MachineData[k].Name == "Bladder Winding 5"){
              output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine5.pop()
            seriesDataMachine5.push(parseFloat(efficiency))
        
            }
            else if(data.MachineData[k].Name == "Bladder Winding 6"){
              output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine6.pop()
            seriesDataMachine6.push(parseFloat(efficiency))

            }
            else if(data.MachineData[k].Name == "Bladder Winding 7"){
              output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine7.pop()
            seriesDataMachine7.push(parseFloat(efficiency))
    

            }
            else if(data.MachineData[k].Name == "Bladder Winding 8"){
              output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine8.pop()
            seriesDataMachine8.push(parseFloat(efficiency))

            }
            else if(data.MachineData[k].Name == "Bladder Winding 9"){
              output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine9.pop()
            seriesDataMachine9.push(parseFloat(efficiency))
 
            }
            else if(data.MachineData[k].Name == "Bladder Winding 10"){
              output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine10.pop()
            seriesDataMachine10.push(parseFloat(efficiency))
   

            }
            else if(data.MachineData[k].Name == "Bladder Winding 11"){
              output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine11.pop()
            seriesDataMachine11.push(parseFloat(efficiency))
  
            }
            else if(data.MachineData[k].Name == "Bladder Winding 12"){
              output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine12.pop()
            seriesDataMachine12.push(parseFloat(efficiency))
     
            }
            else if(data.MachineData[k].Name == "Bladder Winding 13"){
              output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine13.pop()
            seriesDataMachine13.push(parseFloat(efficiency))
         

            }
            else if(data.MachineData[k].Name == "Bladder Winding 14"){
              output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine14.pop()
            seriesDataMachine14.push(parseFloat(efficiency))
       
            }
            else if(data.MachineData[k].Name == "Bladder Winding 15"){
              output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine15.pop()
            seriesDataMachine15.push(parseFloat(efficiency))
  
            }
            else if(data.MachineData[k].Name == "Bladder Winding 16"){
              output = data.MachineData[k].Counter * 0.83 * 6
            Minutes = (0.5*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine16.pop()
            seriesDataMachine16.push(parseFloat(efficiency))


            }
    }
         
        

        }
        originalDataMachineWise.push(
          {name:"Bladder Winding 1",data:seriesDataMachine1},
          {name:"Bladder Winding 2",data:seriesDataMachine2},
          {name:"Bladder Winding 3",data:seriesDataMachine3},
          {name:"Bladder Winding 4",data:seriesDataMachine4},

          {name:"Bladder Winding 5",data:seriesDataMachine5},
          {name:"Bladder Winding 6",data:seriesDataMachine6},
          {name:"Bladder Winding 7",data:seriesDataMachine7},
          {name:"Bladder Winding 8",data:seriesDataMachine8},

          {name:"Bladder Winding 9",data:seriesDataMachine9},
          {name:"Bladder Winding 10",data:seriesDataMachine10},
          {name:"Bladder Winding 11",data:seriesDataMachine11},
          {name:"Bladder Winding 12",data:seriesDataMachine12},

          {name:"Bladder Winding 13",data:seriesDataMachine13},
          {name:"Bladder Winding 14",data:seriesDataMachine14},
          {name:"Bladder Winding 15",data:seriesDataMachine15},
          {name:"Bladder Winding 16",data:seriesDataMachine16},

          {name:"Target Efficiency",data:targetDataMachineWise}
          )
        }
         console.log("Target", datesArrayMachineWise)
        for (var i = 0; i < data.BarData.length; i++) {
    if(datesArray.indexOf(data.BarData[i].Date) === -1){
        datesArray.push(data.BarData[i].Date)
        // targetDataMachineWise.push(parseFloat(67))
    }
        }

        Highcharts.chart('containerDateRangeLineMachineWise', {

title: {
    text: `Machine-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency'
    }
},

xAxis: {
    categories: datesArrayMachineWise,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalDataMachineWise,

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


Highcharts.chart('containerDateRangeBar', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'left',
        text: `Balls Count From ${startDateNewFormat} To ${endDateNewFormat}`
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Balls Count'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
            name: "Bladder Winding",
            colorByPoint: true,
            data: seriesDataTop
        }
    ],
    drilldown: {
        breadcrumbs: {
            position: {
                align: 'right'
            }
        },
        series: seriesDataBottom
    }
});


    let seriesData = []
    let targetData = []
    let originalData = []
    let lenOuter = dataArrayOuter.length;
    let outputInner= 0;
    let MinutesInner = 0;
    let efficiencyInner = 0;
    // for(let i = 0; i<len; i++){ 
        for(let j = 0; j<lenOuter; j++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){

            outputInner = dataArrayOuter[j].Counter * 0.83 * 6
            MinutesInner = (0.5*16*480);
            efficiencyInner = ((outputInner / MinutesInner) * 100).toFixed(2)

            seriesData.push(parseFloat(efficiencyInner))
            targetData.push(parseFloat(67))
// }
        }
       
        // if(i == len-1){
            originalData.push({name:"Efficiency",data:seriesData},{name:"Target Efficiency",data:targetData})
        
        // }
    // }

//  console.log(datesArray)
 Highcharts.chart('containerDateRangeLine', {

title: {
    text: `Process-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency'
    }
},

xAxis: {
    categories: datesArray,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalData,

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
$("#loadingShow").css('display','none')
$("#dateRangeResult").css('display','inline-block')



 });
    })
</script>






<?php // MS Lines ?>


<script>
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
      var EfficiencyFinal;
        var EfficiencyFinalArray = [];
        let counterValue = $("#counterValueIdMSLines").text()
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
    realMinutes = 0;

 
    if(dayId == 5){
        realMinutes = (minutes*20*20)-(60*20*20)
        EfficiencyFinal = (((counterValue*7.74)/((minutes*20*20)-(60*20*20)) )*100).toFixed(2)
        $("#realTimeIdMSLines").text((minutes*<?php echo count($GetHoursMSLines);?>*20)-(60*<?php echo count($GetHoursMSLines);?>*20))
    }
    else{
        realMinutes = (minutes*20*20)-(45*20*20)
        EfficiencyFinal = (((counterValue*7.74)/((minutes*20*20)-(45*20*20)) )*100).toFixed(2)
        $("#realTimeIdMSLines").text((minutes*<?php echo count($GetHoursMSLines);?>*20)-(45*<?php echo count($GetHoursMSLines);?>*20))
    }
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
 
    console.log("Efficiency Final ", (minutes*20)-(45*20))


    $("#employeeId").text(<?php echo count($GetHoursMSLines);?>*20)
    $("#efficiencyValueIdMSLines").text(EfficiencyFinal + "%")
    console.log(EfficiencyFinalArray)
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green

                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedMSLines', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));

        
        Highcharts.chart('container', {
                        chart: {
                            zoomType: 'xy'
                        },
                        title: {
                            text: 'MS Lines Efficiency (%)'
                        },
                        subtitle: {
                            // text: 'Source: WorldClimate.com'
                        },
                        xAxis: [{
                            categories: <?php echo json_encode($GetHoursMSLines, JSON_NUMERIC_CHECK); ?>,
                            crosshair: true
                        }],
                        yAxis: [{ // Primary yAxis
                                labels: {
                                    format: '{value} balls',
                                    style: {
                                        color: Highcharts.getOptions().colors[1]
                                    }
                                },
                                title: {
                                    text: 'Achieved',
                                    style: {
                                        color: Highcharts.getOptions().colors[1]
                                    }
                                }
                            },
                            { // Secondary yAxis
                                title: {
                                    text: 'Target',
                                    style: {
                                        color: Highcharts.getOptions().colors[0]
                                    }
                                },

                                opposite: true
                            }
                        ],
                        tooltip: {
                            formatter: function() {                   
                                return `<h3 style="color:blue;font-weight:bolder">Line Number :${this.x}</h3><br><h3 style="color:red;font-weight:bolder">Efficiency:${this.y} %</h3>`;
                            }

                        },
                        legend: {
                            layout: 'vertical',
                            align: 'left',
                            x: 120,
                            verticalAlign: 'top',
                            y: 100,
                            floating: true,
                            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || // theme
                                'rgba(255,255,255,0.25)',
                            enabled: false
                        },

                        plotOptions: {
                            series: {
                                borderWidth: 0,
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.y:.0f} %'
                                }
                            }
                        },
                        series: [{
                                name: 'Achieved',
                                type: 'column',
                                yAxis: 1,

                                data: <?php echo json_encode($GetReadingMSLines, JSON_NUMERIC_CHECK); ?>,
                            

                            }

                        ]


                    });
    }  
    else{
        dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    realMinutes = minutes*20
    EfficiencyFinal = (((counterValue*7.74)/(minutes*<?php echo count($GetHoursMSLines);?>*20) )*100).toFixed(2)
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    console.log(EfficiencyFinalArray)
    $("#realTimeIdMSLines").text(minutes*<?php echo count($GetHoursMSLines);?>*20)
    $("#employeeId").text(<?php echo count($GetHoursMSLines);?>*20)
    $("#efficiencyValueIdMSLines").text(EfficiencyFinal + "%")
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green

                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedMSLines', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));

        Highcharts.chart('container', {
                        chart: {
                            zoomType: 'xy'
                        },
                        title: {
                            text: 'MS Lines Efficiency (%)'
                        },
                        subtitle: {
                            // text: 'Source: WorldClimate.com'
                        },
                        xAxis: [{
                            categories: <?php echo json_encode($GetHoursMSLines, JSON_NUMERIC_CHECK); ?>,
                            crosshair: true
                        }],
                        yAxis: [{ // Primary yAxis
                                labels: {
                                    format: '{value} balls',
                                    style: {
                                        color: Highcharts.getOptions().colors[1]
                                    }
                                },
                                title: {
                                    text: 'Achieved',
                                    style: {
                                        color: Highcharts.getOptions().colors[1]
                                    }
                                }
                            },
                            { // Secondary yAxis
                                title: {
                                    text: 'Target',
                                    style: {
                                        color: Highcharts.getOptions().colors[0]
                                    }
                                },

                                opposite: true
                            }
                        ],
                        tooltip: {
                            formatter: function() {                   
                                return `<h3 style="color:blue;font-weight:bolder">Line Number :${this.x}</h3><br><h3 style="color:red;font-weight:bolder">Efficiency:${this.y} %</h3>`;
                            }

                        },
                        legend: {
                            layout: 'vertical',
                            align: 'left',
                            x: 120,
                            verticalAlign: 'top',
                            y: 100,
                            floating: true,
                            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || // theme
                                'rgba(255,255,255,0.25)',
                            enabled: false
                        },

                        plotOptions: {
                            series: {
                                borderWidth: 0,
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.y:.0f} %'
                                }
                            }
                        },
                        series: [{
                                name: 'Achieved',
                                type: 'column',
                                yAxis: 1,

                                data: <?php echo json_encode($GetReadingMSLines, JSON_NUMERIC_CHECK); ?>,
                            

                            }

                        ]


                    });
    } 
 
   
}
else{
    $("#realTimeIdMSLines").text(0)
    $("#employeeId").text(0)
    $("#efficiencyValueIdMSLines").text("0 %")
    $("#currentDateData").css('display','none');
    $("#overStatus").css('display',"inline-block");
}
}
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

    function generateDataTop(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.BarData.length;

 //concat to get points
 for (var i = 0; i < len; i++) {
     ps[i] = {
         name: data1.BarData[i].Date,
         y: parseFloat(data1.BarData[i].Counter),
         drilldown: data1.BarData[i].Date
     };
 }
 names = [];
 //generate series and split points
 for (i = 0; i < len; i++) {
     var p = ps[i];
   
     series.push(p);
 }
 return series;
}

function generateDataBottom(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.MachineData.length;
   let datesArray = []
   let dataArray = []

 //concat to get points
 for (var i = 0; i < len; i++) {
    if(datesArray.indexOf(data1.MachineData[i].Date) === -1){
        datesArray.push(data1.MachineData[i].Date)
        dataArray.push([data1.MachineData[i].Date,data1.MachineData[i].Name,parseFloat(data1.MachineData[i].Counter)])
    }
    else{
        dataArray.push([data1.MachineData[i].Date,data1.MachineData[i].Name,parseFloat(data1.MachineData[i].Counter)])
    }


  
 }

 //generate series and split points
 for (i = 0; i < datesArray.length; i++) {
    let OriginaldataArray = []
    let OriginaldataArrayDateRemove = []
    dataArray.filter(function(e) { 
        if(e[0] === datesArray[i]){
            OriginaldataArray.push(e)
        }
    });
    OriginaldataArray.forEach(element => {
        // console.log("Element", element)
        element.shift()
        OriginaldataArrayDateRemove.push(element)
    });
    // console.log("data Get", OriginaldataArray)
     var p = {
        name: datesArray[i],
        id: datesArray[i],
        data: OriginaldataArrayDateRemove
     }
    //  console.log("Series", p)
     series.push(p);
 }
 return series;
}

$("#searchRange").on('click',function(e){
        e.preventDefault()
        $("#dateRangeResult").css('display','none')
        $("#loadingShow").css('display','inline-block')
        let startDate = $("#startDate").val()
        let endDate = $("#endDate").val()
        let startDateNewFormat = startDate.split("-")[2]+"-"+startDate.split("-")[1]+"-"+startDate.split("-")[0]
        let endDateNewFormat = endDate.split("-")[2]+"-"+endDate.split("-")[1]+"-"+endDate.split("-")[0]
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        let datesArray = []
        let datesArrayMachineWise = []
        let seriesDataMachine1 = [];
        let seriesDataMachine2 = [];
        let seriesDataMachine3 = [];
        let seriesDataMachine4 = [];
        let seriesDataMachine5 = [];
        let seriesDataMachine6 = [];
        let seriesDataMachine7 = [];
        let seriesDataMachine8 = [];
        let seriesDataMachine9 = [];
        let seriesDataMachine10 = [];
        let seriesDataMachine11 = [];
        let seriesDataMachine12 = [];
        let seriesDataMachine13 = [];
        let seriesDataMachine14 = [];
        let seriesDataMachine15 = [];
        let seriesDataMachine16 = [];
        let seriesDataMachine17 = [];
        let seriesDataMachine18 = [];
        let seriesDataMachine19 = [];
        let seriesDataMachine20 = [];
        let seriesDataMachine21 = [];
        let seriesDataMachine22 = [];
        let seriesDataMachine23 = [];
        let seriesDataMachine24 = [];
        let seriesDataMachine25 = [];
        let seriesDataMachine26 = [];
        let seriesDataMachine27 = [];
        let seriesDataMachine28 = [];
        let seriesDataMachine29 = [];
        let seriesDataMachine30 = [];
        let seriesDataMachine31 = [];
        let seriesDataMachine32 = [];
        let output= 0;
    let Minutes = 0;
    let efficiency = 0;
        let originalDataMachineWise = [];
        let targetDataMachineWise = [];
        let url = "<?php echo base_url('Efficiency/getMSLinesDateRangeData') ?>";
        let url2 = "<?php echo base_url('Efficiency/getRealTimeDateRange') ?>";
        $.post(url,{"startDate":startDate, "endDate":endDate},function(data, status){
            console.log("Data Outer", data)
        let seriesDataTop;
        let seriesDataBottom;
        let dataArrayOuter = data.BarData
        if(data){
        seriesDataTop = generateDataTop(data)
        seriesDataBottom = generateDataBottom(data)
        console.log("Generate Top", seriesDataTop)
        console.log("Generate Bottom", seriesDataBottom)

        for(let k = 0; k<data.MachineData.length; k++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){
        if(datesArrayMachineWise.indexOf(data.MachineData[k].Date) === -1){
            datesArrayMachineWise.push(data.MachineData[k].Date)
        targetDataMachineWise.push(parseFloat(67))
        if(data.MachineData[k].Name == "HLine#1"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)

            }
            else if(data.MachineData[k].Name == "HLine#2"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.push(parseFloat(efficiency))
            seriesDataMachine1.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)

            }
            else if(data.MachineData[k].Name == "HLine#3"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
  
            }
            else if(data.MachineData[k].Name == "HLine#4"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine4.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)


            }
            else if(data.MachineData[k].Name == "HLine#5"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine5.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
   
            }
            else if(data.MachineData[k].Name == "HLine#6"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine6.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)

            }
            else if(data.MachineData[k].Name == "HLine#7"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine7.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)


            }
            else if(data.MachineData[k].Name == "HLine#8"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine8.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)

            }
            else if(data.MachineData[k].Name == "Line#1"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine9.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)

            }
            else if(data.MachineData[k].Name == "Line#2"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine10.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)


            }
            else if(data.MachineData[k].Name == "Line#3"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine11.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)

            }
            else if(data.MachineData[k].Name == "Line#4"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine12.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)

            }
            else if(data.MachineData[k].Name == "Line#5"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine13.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)


            }
            else if(data.MachineData[k].Name == "Line#6"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine14.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)

            }
            else if(data.MachineData[k].Name == "Line#7"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine15.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)

            }
            else if(data.MachineData[k].Name == "Line#8"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine16.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)


            }
            else if(data.MachineData[k].Name == "Line#9"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine17.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)

            }
            else if(data.MachineData[k].Name == "Line#10"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine18.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)

            }
            else if(data.MachineData[k].Name == "Line#11"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine19.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)


            }
            else if(data.MachineData[k].Name == "Line#12"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine20.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)

            }
            else if(data.MachineData[k].Name == "Line#13"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine21.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)

            }
            else if(data.MachineData[k].Name == "Line#14"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine22.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)

            }
            else if(data.MachineData[k].Name == "Line#15"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine23.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)

            }
            else if(data.MachineData[k].Name == "Line#16"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine24.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)
 
            }
            else if(data.MachineData[k].Name == "Line#17"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine25.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)


            }
            else if(data.MachineData[k].Name == "Line#18"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine26.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)

            }
            else if(data.MachineData[k].Name == "Line#19"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine27.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine29.push(0)


            }
            else if(data.MachineData[k].Name == "Line#21"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480); 
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine28.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine1.push(0)

            }
            else if(data.MachineData[k].Name == "Line#22"){
                output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine29.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            seriesDataMachine9.push(0)
            seriesDataMachine10.push(0)
            seriesDataMachine11.push(0)
            seriesDataMachine12.push(0)
            seriesDataMachine13.push(0)
            seriesDataMachine14.push(0)
            seriesDataMachine15.push(0)
            seriesDataMachine16.push(0)
            seriesDataMachine17.push(0)
            seriesDataMachine18.push(0)
            seriesDataMachine19.push(0)
            seriesDataMachine20.push(0)
            seriesDataMachine21.push(0)
            seriesDataMachine22.push(0)
            seriesDataMachine23.push(0)
            seriesDataMachine24.push(0)
            seriesDataMachine25.push(0)
            seriesDataMachine26.push(0)
            seriesDataMachine27.push(0)
            seriesDataMachine28.push(0)
            seriesDataMachine1.push(0)
       

            }
  
    }
    else{
      if(data.MachineData[k].Name == "HLine#1"){
          output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.pop()
            seriesDataMachine1.push(parseFloat(efficiency))
        
            }
            else if(data.MachineData[k].Name == "HLine#2"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.pop()
            seriesDataMachine2.push(parseFloat(efficiency))
         
            }
            else if(data.MachineData[k].Name == "HLine#3"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.pop()
            seriesDataMachine3.push(parseFloat(efficiency))
         
            }
            else if(data.MachineData[k].Name == "HLine#4"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine4.pop()
            seriesDataMachine4.push(parseFloat(efficiency))
       

            }
            else if(data.MachineData[k].Name == "HLine#5"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine5.pop()
            seriesDataMachine5.push(parseFloat(efficiency))
        
            }
            else if(data.MachineData[k].Name == "HLine#6"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine6.pop()
            seriesDataMachine6.push(parseFloat(efficiency))

            }
            else if(data.MachineData[k].Name == "HLine#7"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine7.pop()
            seriesDataMachine7.push(parseFloat(efficiency))
    

            }
            else if(data.MachineData[k].Name == "HLine#8"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine8.pop()
            seriesDataMachine8.push(parseFloat(efficiency))

            }
            else if(data.MachineData[k].Name == "Line#1"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine9.pop()
            seriesDataMachine9.push(parseFloat(efficiency))
 
            }
            else if(data.MachineData[k].Name == "Line#2"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine10.pop()
            seriesDataMachine10.push(parseFloat(efficiency))
   

            }
            else if(data.MachineData[k].Name == "Line#3"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine11.pop()
            seriesDataMachine11.push(parseFloat(efficiency))
  
            }
            else if(data.MachineData[k].Name == "Line#4"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine12.pop()
            seriesDataMachine12.push(parseFloat(efficiency))
     
            }
            else if(data.MachineData[k].Name == "Line#5"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine13.pop()
            seriesDataMachine13.push(parseFloat(efficiency))
         

            }
            else if(data.MachineData[k].Name == "Line#6"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine14.pop()
            seriesDataMachine14.push(parseFloat(efficiency))
       
            }
            else if(data.MachineData[k].Name == "Line#7"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine15.pop()
            seriesDataMachine15.push(parseFloat(efficiency))
  
            }
            else if(data.MachineData[k].Name == "Line#8"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine16.pop()
            seriesDataMachine16.push(parseFloat(efficiency))


            }
            else if(data.MachineData[k].Name == "Line#9"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine17.pop()
            seriesDataMachine17.push(parseFloat(efficiency))

            }
            else if(data.MachineData[k].Name == "Line#10"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine18.pop()
            seriesDataMachine18.push(parseFloat(efficiency))
   
            }
            else if(data.MachineData[k].Name == "Line#11"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine19.pop()
            seriesDataMachine19.push(parseFloat(efficiency))
    

            }
            else if(data.MachineData[k].Name == "Line#12"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine20.pop()
            seriesDataMachine20.push(parseFloat(efficiency))
   
            }
            else if(data.MachineData[k].Name == "Line#13"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine21.pop()
            seriesDataMachine21.push(parseFloat(efficiency))
  
            }
            else if(data.MachineData[k].Name == "Line#14"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine22.pop()
            seriesDataMachine22.push(parseFloat(efficiency))
 
            }
            else if(data.MachineData[k].Name == "Line#15"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine23.pop()
            seriesDataMachine23.push(parseFloat(efficiency))
  
            }
            else if(data.MachineData[k].Name == "Line#16"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine24.pop()
            seriesDataMachine24.push(parseFloat(efficiency))
      
            }
            else if(data.MachineData[k].Name == "Line#17"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine25.pop()
            seriesDataMachine25.push(parseFloat(efficiency))
     

            }
            else if(data.MachineData[k].Name == "Line#18"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine26.pop()
            seriesDataMachine26.push(parseFloat(efficiency))
    
            }
            else if(data.MachineData[k].Name == "Line#19"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine27.pop()
            seriesDataMachine27.push(parseFloat(efficiency))
        

            }
            else if(data.MachineData[k].Name == "Line#21"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine28.pop()
            seriesDataMachine28.push(parseFloat(efficiency))
    
            }
            else if(data.MachineData[k].Name == "Line#22"){
              output = data.MachineData[k].Counter * 7.74
            Minutes = (20*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine29.pop()
            seriesDataMachine29.push(parseFloat(efficiency))
       
            }
    }
         
        

        }
        originalDataMachineWise.push(
          {name:"HLine#2",data:seriesDataMachine1},
          {name:"HLine#2",data:seriesDataMachine2},
          {name:"HLine#3",data:seriesDataMachine3},
          {name:"HLine#4",data:seriesDataMachine4},

          {name:"HLine#5",data:seriesDataMachine5},
          {name:"HLine#6",data:seriesDataMachine6},
          {name:"HLine#7",data:seriesDataMachine7},
          {name:"HLine#8",data:seriesDataMachine8},

          {name:"Line#1",data:seriesDataMachine9},
          {name:"Line#2",data:seriesDataMachine10},
          {name:"Line#3",data:seriesDataMachine11},
          {name:"Line#4",data:seriesDataMachine12},

          {name:"Line#5",data:seriesDataMachine13},
          {name:"Line#6",data:seriesDataMachine14},
          {name:"Line#7",data:seriesDataMachine15},
          {name:"Line#8",data:seriesDataMachine16},

          {name:"Line#9",data:seriesDataMachine17},
          {name:"Line#10",data:seriesDataMachine18},
          {name:"Line#1",data:seriesDataMachine19},
          {name:"Line#12",data:seriesDataMachine20},

          {name:"Line#13",data:seriesDataMachine21},
          {name:"Line#14",data:seriesDataMachine22},
          {name:"Line#15",data:seriesDataMachine23},
          {name:"Line#16",data:seriesDataMachine24},

          {name:"Line#17",data:seriesDataMachine25},
          {name:"Line#18",data:seriesDataMachine26},
          {name:"Line#19",data:seriesDataMachine27},
          {name:"Line#21",data:seriesDataMachine28},

          {name:"Line#22",data:seriesDataMachine29},
          {name:"Target Efficiency",data:targetDataMachineWise}
          )
        }
         console.log("Target", datesArrayMachineWise)
        for (var i = 0; i < data.BarData.length; i++) {
    if(datesArray.indexOf(data.BarData[i].Date) === -1){
        datesArray.push(data.BarData[i].Date)
        // targetDataMachineWise.push(parseFloat(67))
    }
        }
        console.log("Machine Wise", originalDataMachineWise)
        Highcharts.chart('containerDateRangeLineMachineWise', {

title: {
    text: `Machine-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency'
    }
},

xAxis: {
    categories: datesArrayMachineWise,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalDataMachineWise,

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


Highcharts.chart('containerDateRangeBar', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'left',
        text: `Balls Count From ${startDateNewFormat} To ${endDateNewFormat}`
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Balls Count'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
            name: "HF Cutting",
            colorByPoint: true,
            data: seriesDataTop
        }
    ],
    drilldown: {
        breadcrumbs: {
            position: {
                align: 'right'
            }
        },
        series: seriesDataBottom
    }
});


    let seriesData = []
    let targetData = []
    let originalData = []
    let lenOuter = dataArrayOuter.length;
    let outputInner= 0;
    let MinutesInner = 0;
    let efficiencyInner = 0;
    // for(let i = 0; i<len; i++){ 
        for(let j = 0; j<lenOuter; j++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){

            outputInner = dataArrayOuter[j].Counter * 7.74
            MinutesInner = (20*20*480);
            efficiencyInner = ((outputInner / MinutesInner) * 100).toFixed(2)

            seriesData.push(parseFloat(efficiencyInner))
            targetData.push(parseFloat(67))
// }
        }
       
        // if(i == len-1){
            originalData.push({name:"Efficiency",data:seriesData},{name:"Target Efficiency",data:targetData})
        
        // }
    // }

 
//  console.log(datesArray)
 Highcharts.chart('containerDateRangeLine', {

title: {
    text: `Process-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency'
    }
},

xAxis: {
    categories: datesArray,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalData,

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
$("#loadingShow").css('display','none')
$("#dateRangeResult").css('display','inline-block')

 });
    })

   
</script>





<?php // TM Packing ?>



<script>
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
        var EfficiencyFinal;
        var EfficiencyFinalArray = [];
        let counterValue = $("#counterValueIdTMPacking").text()
        console.log((counterValue/2920)*100)
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
   
    // EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    // if(dayId == 5){
    //     $("#realTimeId").text((minutes*55)-(60*55))
    // }
    // else{
    //     $("#realTimeId").text((minutes*55)-(45*55))
    // }
    


    if(dayId == 5){
 
        EfficiencyFinal = (((counterValue*31.33)/((minutes*55)-(60*55)) )*100).toFixed(2)
       
       
        $("#realTimeIdTMPacking").text((minutes*55)-(60*55))
   }
   else{
   
    EfficiencyFinal = (((counterValue*31.33)/((minutes*55)-(45*55)) )*100).toFixed(2)
 
    $("#realTimeIdTMPacking").text((minutes*55)-(45*55))
   }
   EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))

    $("#employeeId").text(55)
    $("#efficiencyValueIdTMPacking").text(EfficiencyFinal + "%")
    console.log(EfficiencyFinalArray)
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green

                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedTMPacking', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    }  
    else{
        dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    EfficiencyFinal = (((counterValue*31.33)/(minutes*55) )*100).toFixed(2)
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    console.log(EfficiencyFinalArray)
    $("#realTimeIdTMPacking").text(minutes*55)
    $("#employeeId").text(55)
    $("#efficiencyValueIdTMPacking").text(EfficiencyFinal + "%")
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green

                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedTMPacking', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    } 
}
else{
    $("#realTimeIdTMPacking").text(0)
    $("#employeeId").text(0)
    $("#efficiencyValueIdTMPacking").text("0 %")
    $("#currentDateData").css('display','none');
    $("#overStatus").css('display',"inline-block");
}
}
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
    function generateDataTop(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.BarData.length;

 //concat to get points
 for (var i = 0; i < len; i++) {
     ps[i] = {
         name: data1.BarData[i].DateName,
         y: parseFloat(data1.BarData[i].Pass),
         drilldown: data1.BarData[i].DateName
     };
 }
 names = [];
 //generate series and split points
 for (i = 0; i < len; i++) {
     var p = ps[i];
   
     series.push(p);
 }
 return series;
}

function generateDataBottom(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.MachineData.length;
   let datesArray = []
   let dataArray = []

 //concat to get points
 for (var i = 0; i < len; i++) {
    if(datesArray.indexOf(data1.MachineData[i].DateName) === -1){
        datesArray.push(data1.MachineData[i].DateName)
        dataArray.push([data1.MachineData[i].DateName,data1.MachineData[i].FactoryCode,parseFloat(data1.MachineData[i].Pass)])
    }
    else{
        dataArray.push([data1.MachineData[i].DateName,data1.MachineData[i].FactoryCode,parseFloat(data1.MachineData[i].Pass)])
    }


  
 }

 //generate series and split points
 for (i = 0; i < datesArray.length; i++) {
    let OriginaldataArray = []
    let OriginaldataArrayDateRemove = []
    dataArray.filter(function(e) { 
        if(e[0] === datesArray[i]){
            OriginaldataArray.push(e)
        }
    });
    OriginaldataArray.forEach(element => {
        // console.log("Element", element)
        element.shift()
        OriginaldataArrayDateRemove.push(element)
    });
    // console.log("data Get", OriginaldataArray)
     var p = {
        name: datesArray[i],
        id: datesArray[i],
        data: OriginaldataArrayDateRemove
     }
    //  console.log("Series", p)
     series.push(p);
 }
 return series;
}

$("#searchRange").on('click',function(e){
        e.preventDefault()
        $("#dateRangeResult").css('display','none')
        $("#loadingShow").css('display','inline-block')
        let startDate = $("#startDate").val()
        let endDate = $("#endDate").val()
        let startDateNewFormat = startDate.split("-")[2]+"-"+startDate.split("-")[1]+"-"+startDate.split("-")[0]
        let endDateNewFormat = endDate.split("-")[2]+"-"+endDate.split("-")[1]+"-"+endDate.split("-")[0]
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        let datesArray = []
        let datesArrayMachineWise = []
        let seriesDataMachine1 = [];
        let seriesDataMachine2 = [];
        let seriesDataMachine3 = [];

        let originalDataMachineWise = [];
        let targetDataMachineWise = [];
        let output= 0;
    let Minutes = 0;
    let efficiency = 0;
        let url = "<?php echo base_url('Efficiency/getTMDateRangeData') ?>";
        let url2 = "<?php echo base_url('Efficiency/getRealTimeDateRange') ?>";
        $.post(url,{"startDate":startDate, "endDate":endDate},function(data, status){
            console.log("Data Outer", data)
        let seriesDataTop;
        let seriesDataBottom;
        let dataArrayOuter = data.BarData
        if(data){
        seriesDataTop = generateDataTop(data)
        seriesDataBottom = generateDataBottom(data)
  


        for(let k = 0; k<data.MachineData.length; k++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){
        if(datesArrayMachineWise.indexOf(data.MachineData[k].DateName) === -1){
            datesArrayMachineWise.push(data.MachineData[k].DateName)
        targetDataMachineWise.push(parseFloat(74))
        if(data.MachineData[k].FactoryCode == "B34002"){
                output = data.MachineData[k].Pass * 28.22
            Minutes = (40*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)


            }
            else if(data.MachineData[k].FactoryCode == "B34003"){
                output = data.MachineData[k].Pass * 28.22
            Minutes = (40*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.push(parseFloat(efficiency))
            seriesDataMachine1.push(0)
            seriesDataMachine3.push(0)

            }
            else if(data.MachineData[k].FactoryCode == "B34004"){
                output = data.MachineData[k].Pass * 28.22
            Minutes = (40*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine1.push(0)

            }
    }
    else{
        if(data.MachineData[k].FactoryCode == "B34002"){
          output = data.MachineData[k].Pass * 28.22
            Minutes = (40*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.pop()
            seriesDataMachine1.push(parseFloat(efficiency))
        
            }
            else if(data.MachineData[k].FactoryCode == "B34003"){
              output = data.MachineData[k].Pass * 28.22
            Minutes = (40*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.pop()
            seriesDataMachine2.push(parseFloat(efficiency))
         
            }
            else if(data.MachineData[k].FactoryCode == "B34004"){
              output = data.MachineData[k].Pass * 28.22
            Minutes = (40*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.pop()
            seriesDataMachine3.push(parseFloat(efficiency))
         
            }   
    }
         
        

        }
        originalDataMachineWise.push(
          {name:"B34002",data:seriesDataMachine1},
          {name:"B34003",data:seriesDataMachine2},
          {name:"B34004",data:seriesDataMachine3},

          {name:"Target Efficiency",data:targetDataMachineWise}
          )
        }
         console.log("Target", datesArrayMachineWise)
        for (var i = 0; i < data.BarData.length; i++) {
    if(datesArray.indexOf(data.BarData[i].DateName) === -1){
        datesArray.push(data.BarData[i].DateName)
        // targetDataMachineWise.push(parseFloat(67))
    }
        }

        Highcharts.chart('containerDateRangeLineMachineWise', {

title: {
    text: `Machine-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency'
    }
},

xAxis: {
    categories: datesArrayMachineWise,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalDataMachineWise,

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


Highcharts.chart('containerDateRangeBar', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'left',
        text: `Balls Count From ${startDateNewFormat} To ${endDateNewFormat}`
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Balls Count'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
            name: "TM",
            colorByPoint: true,
            data: seriesDataTop
        }
    ],
    drilldown: {
        breadcrumbs: {
            position: {
                align: 'right'
            }
        },
        series: seriesDataBottom
    }
});


    let seriesData = []
    let targetData = []
    let originalData = []
    let lenOuter = dataArrayOuter.length;
    let outputInner= 0;
    let MinutesInner = 0;
    let efficiencyInner = 0;
    // for(let i = 0; i<len; i++){ 
        for(let j = 0; j<lenOuter; j++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){

            outputInner = dataArrayOuter[j].Pass * 28.22
            MinutesInner = (120*480);
            efficiencyInner = ((outputInner / MinutesInner) * 100).toFixed(2)

            seriesData.push(parseFloat(efficiencyInner))
            targetData.push(parseFloat(74))
// }
        }
       
        // if(i == len-1){
            originalData.push({name:"Efficiency",data:seriesData},{name:"Target Efficiency",data:targetData})
        
        // }
    // }

//  console.log(datesArray)
 Highcharts.chart('containerDateRangeLine', {

title: {
    text: `Process-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency'
    }
},

xAxis: {
    categories: datesArray,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalData,

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
$("#loadingShow").css('display','none')
$("#dateRangeResult").css('display','inline-block')



 });
    })
</script>





<?php // AMB Forming ?>


<script>
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
        var EfficiencyFinal;
        var EfficiencyFinalArray = [];
        let counterValue = $("#counterValueIdAMBForming").text()
        console.log((counterValue/2920)*100)
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
  
   
    // if(dayId == 5){
    //     $("#realTimeId").text((minutes*208)-(60*208))
    // }
    // else{
    //     $("#realTimeId").text((minutes*208)-(45*208))
    // }
    


    if(dayId == 5){
        EfficiencyFinal = (((counterValue*10.03)/((minutes*208)-(60*208)) )*100).toFixed(2)  
      $("#realTimeIdAMBForming").text((minutes*208)-(60*208))
   }
   else{
    EfficiencyFinal = (((counterValue*0.32)/((minutes*208)-(45*208)) )*100).toFixed(2)   
    $("#realTimeIdAMBForming").text((minutes*208)-(45*208))
   }
   EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))


    $("#employeeId").text(208)
    $("#efficiencyValueIdAMBForming").text(EfficiencyFinal + "%")
    console.log(EfficiencyFinalArray)
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green

                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedAMBForming', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    }  
    else{
        dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    EfficiencyFinal = (((counterValue*10.03)/(minutes*208) )*100).toFixed(2)
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    console.log(EfficiencyFinalArray)
    $("#realTimeIdAMBForming").text(minutes*208)
    $("#employeeId").text(208)
    $("#efficiencyValueIdAMBForming").text(EfficiencyFinal + " %")
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.1, '#55BF3B'], // green
                    [0.5, '#DDDF0D'], // yellow
                    [0.9, '#DF5353'] // red
                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedAMBForming', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    } 
}
else{
    $("#realTimeIdAMBForming").text(0)
    $("#employeeId").text(0)
    $("#efficiencyValueIdAMBForming").text("0 %")
    $("#currentDateData").css('display','none');
    $("#overStatus").css('display',"inline-block");
}
}
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

    function generateDataTop(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.BarData.length;

 //concat to get points
 for (var i = 0; i < len; i++) {
     ps[i] = {
         name: data1.BarData[i].DateName,
         y: parseFloat(data1.BarData[i].PassQty),
         drilldown: data1.BarData[i].DateName
     };
 }
 names = [];
 //generate series and split points
 for (i = 0; i < len; i++) {
     var p = ps[i];
   
     series.push(p);
 }
 return series;
}

function generateDataBottom(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.MachineData.length;
   let datesArray = []
   let dataArray = []

 //concat to get points
 for (var i = 0; i < len; i++) {
    if(datesArray.indexOf(data1.MachineData[i].DateName) === -1){
        datesArray.push(data1.MachineData[i].DateName)
        dataArray.push([data1.MachineData[i].DateName,data1.MachineData[i].LineName,parseFloat(data1.MachineData[i].PassQty)])
    }
    else{
        dataArray.push([data1.MachineData[i].DateName,data1.MachineData[i].LineName,parseFloat(data1.MachineData[i].PassQty)])
    }


  
 }

 //generate series and split points
 for (i = 0; i < datesArray.length; i++) {
    let OriginaldataArray = []
    let OriginaldataArrayDateRemove = []
    dataArray.filter(function(e) { 
        if(e[0] === datesArray[i]){
            OriginaldataArray.push(e)
        }
    });
    OriginaldataArray.forEach(element => {
        // console.log("Element", element)
        element.shift()
        OriginaldataArrayDateRemove.push(element)
    });
    // console.log("data Get", OriginaldataArray)
     var p = {
        name: datesArray[i],
        id: datesArray[i],
        data: OriginaldataArrayDateRemove
     }
    //  console.log("Series", p)
     series.push(p);
 }
 return series;
}

$("#searchRange").on('click',function(e){
        e.preventDefault()
        $("#dateRangeResult").css('display','none')
        $("#loadingShow").css('display','inline-block')
        let startDate = $("#startDate").val()
        let endDate = $("#endDate").val()
        let startDateNewFormat = startDate.split("-")[2]+"-"+startDate.split("-")[1]+"-"+startDate.split("-")[0]
        let endDateNewFormat = endDate.split("-")[2]+"-"+endDate.split("-")[1]+"-"+endDate.split("-")[0]
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        let datesArray = []
        let datesArrayMachineWise = []
        let seriesDataMachine1 = [];
        let seriesDataMachine2 = [];
        let seriesDataMachine3 = [];
        let seriesDataMachine4 = [];
        let seriesDataMachine5 = [];
        let seriesDataMachine6 = [];
        let seriesDataMachine7 = [];
        let seriesDataMachine8 = [];
        let originalDataMachineWise = [];
        let targetDataMachineWise = [];
        let output= 0;
    let Minutes = 0;
    let efficiency = 0;
        let url = "<?php echo base_url('Efficiency/getAMBAssemblingDateRangeData') ?>";
        let url2 = "<?php echo base_url('Efficiency/getRealTimeDateRange') ?>";
        $.post(url,{"startDate":startDate, "endDate":endDate},function(data, status){
            console.log("Data Outer", data)
        let seriesDataTop;
        let seriesDataBottom;
        let dataArrayOuter = data.BarData
        if(data){
        seriesDataTop = generateDataTop(data)
        seriesDataBottom = generateDataBottom(data)
  


        for(let k = 0; k<data.MachineData.length; k++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){
        if(datesArrayMachineWise.indexOf(data.MachineData[k].DateName) === -1){
            datesArrayMachineWise.push(data.MachineData[k].DateName)
        targetDataMachineWise.push(parseFloat(64))
        if(data.MachineData[k].LineName == "Line#1"){
                output = data.MachineData[k].PassQty * 10.03
            Minutes = (26*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.push(parseFloat(efficiency))
            seriesDataMachine4.push(0)
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)


            }
            else if(data.MachineData[k].LineName == "Line#2"){
                output = data.MachineData[k].PassQty * 10.03
            Minutes = (26*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.push(parseFloat(efficiency))
            seriesDataMachine4.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)

            }
            else if(data.MachineData[k].LineName == "Line#3"){
                output = data.MachineData[k].PassQty * 10.03
            Minutes = (26*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.push(parseFloat(efficiency))
            seriesDataMachine4.push(0)
            seriesDataMachine2.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            

            }
            else if(data.MachineData[k].LineName == "Line#4"){
                output = data.MachineData[k].PassQty * 10.03
            Minutes = (26*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine4.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)


            }
            else if(data.MachineData[k].LineName == "Line#5"){
                output = data.MachineData[k].PassQty * 10.03
            Minutes = (26*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine5.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
    
            }
            else if(data.MachineData[k].LineName == "Line#6"){
                output = data.MachineData[k].PassQty * 10.03
            Minutes = (26*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine6.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)

            }
            else if(data.MachineData[k].LineName == "Line#7"){
                output = data.MachineData[k].PassQty * 10.03
            Minutes = (26*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine7.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine8.push(0)
  

            }
            else if(data.MachineData[k].LineName == "Line#8"){
                output = data.MachineData[k].PassQty * 10.03
            Minutes = (26*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine8.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine1.push(0)
        
            }
    }
    else{
        if(data.MachineData[k].LineName == "Line#1"){
          output = data.MachineData[k].PassQty * 10.03
            Minutes = (26*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.pop()
            seriesDataMachine1.push(parseFloat(efficiency))
        
            }
            else if(data.MachineData[k].LineName == "Line#2"){
              output = data.MachineData[k].PassQty * 10.03
            Minutes = (26*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.pop()
            seriesDataMachine2.push(parseFloat(efficiency))
         
            }
            else if(data.MachineData[k].LineName == "Line#3"){
              output = data.MachineData[k].PassQty * 10.03
            Minutes = (26*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.pop()
            seriesDataMachine3.push(parseFloat(efficiency))
         
            }  

            else if(data.MachineData[k].LineName == "Line#4"){
              output = data.MachineData[k].PassQty * 10.03
            Minutes = (26*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine4.pop()
            seriesDataMachine4.push(parseFloat(efficiency))
         
            }   
            
            else if(data.MachineData[k].LineName == "Line#5"){
              output = data.MachineData[k].PassQty * 10.03
            Minutes = (26*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine5.pop()
            seriesDataMachine5.push(parseFloat(efficiency))
         
            }   

            else if(data.MachineData[k].LineName == "Line#6"){
              output = data.MachineData[k].PassQty * 10.03
            Minutes = (26*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine6.pop()
            seriesDataMachine6.push(parseFloat(efficiency))
         
            }   

            else if(data.MachineData[k].LineName == "Line#7"){
              output = data.MachineData[k].PassQty * 10.03
            Minutes = (26*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine7.pop()
            seriesDataMachine7.push(parseFloat(efficiency))
         
            }   

            else if(data.MachineData[k].LineName == "Line#8"){
              output = data.MachineData[k].PassQty * 10.03
            Minutes = (26*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine8.pop()
            seriesDataMachine8.push(parseFloat(efficiency))
         
            }   
    }
         
        

        }
        originalDataMachineWise.push(
          {name:"Line#1",data:seriesDataMachine1},
          {name:"Line#2",data:seriesDataMachine2},
          {name:"Line#3",data:seriesDataMachine3},
          {name:"Line#4",data:seriesDataMachine4},
          {name:"Line#5",data:seriesDataMachine5},
          {name:"Line#6",data:seriesDataMachine6},
          {name:"Line#7",data:seriesDataMachine7},
          {name:"Line#8",data:seriesDataMachine8},
          {name:"Target Efficiency",data:targetDataMachineWise}
          )
        }
         console.log("Target", datesArrayMachineWise)
        for (var i = 0; i < data.BarData.length; i++) {
    if(datesArray.indexOf(data.BarData[i].DateName) === -1){
        datesArray.push(data.BarData[i].DateName)
        // targetDataMachineWise.push(parseFloat(67))
    }
        }

        Highcharts.chart('containerDateRangeLineMachineWise', {

title: {
    text: `Machine-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency'
    }
},

xAxis: {
    categories: datesArrayMachineWise,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalDataMachineWise,

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


Highcharts.chart('containerDateRangeBar', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'left',
        text: `Balls Count From ${startDateNewFormat} To ${endDateNewFormat}`
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Balls Count'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
            name: "AMB Assembling",
            colorByPoint: true,
            data: seriesDataTop
        }
    ],
    drilldown: {
        breadcrumbs: {
            position: {
                align: 'right'
            }
        },
        series: seriesDataBottom
    }
});


    let seriesData = []
    let targetData = []
    let originalData = []
    let lenOuter = dataArrayOuter.length;
    let outputInner= 0;
    let MinutesInner = 0;
    let efficiencyInner = 0;
    // for(let i = 0; i<len; i++){ 
        for(let j = 0; j<lenOuter; j++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){

            outputInner = dataArrayOuter[j].PassQty * 10.03
            MinutesInner = (208*480);
            efficiencyInner = ((outputInner / MinutesInner) * 100).toFixed(2)

            seriesData.push(parseFloat(efficiencyInner))
            targetData.push(parseFloat(64))
// }
        }
       
        // if(i == len-1){
            originalData.push({name:"Efficiency",data:seriesData},{name:"Target Efficiency",data:targetData})
        
        // }
    // }

//  console.log(datesArray)
 Highcharts.chart('containerDateRangeLine', {

title: {
    text: `Process-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency'
    }
},

xAxis: {
    categories: datesArray,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalData,

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
$("#loadingShow").css('display','none')
$("#dateRangeResult").css('display','inline-block')



 });
    })
</script>





<?php // AMB Packing ?>


<script>
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
        var EfficiencyFinal;
        var EfficiencyFinalArray = [];
        let counterValue = $("#counterValueIdAMBPacking").text()
        
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
    // EfficiencyFinal = (((counterValue*0.50)/(minutes*21) )*100).toFixed(2)
    // EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    // if(dayId == 5){
    //     $("#realTimeId").text((minutes*21)-(60*21))
    // }
    // else{
    //     $("#realTimeId").text((minutes*21)-(45*21))
    // }
    if(dayId == 5){
        //EfficiencyFinal = (((counterValue*10.03)/((minutes*208)-(60*208)) )*100).toFixed(2)  
        EfficiencyFinal = (((counterValue*0.50)/((minutes*21)-(60*21)) )*100).toFixed(2)
        $("#realTimeIdAMBPacking").text((minutes*21)-(60*21))
   }
   else{
    EfficiencyFinal = (((counterValue*0.50)/((minutes*21)-(45*21)) )*100).toFixed(2)
    $("#realTimeIdAMBPacking").text((minutes*21)-(45*21))
   }
   EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))

    $("#employeeId").text(21)
    $("#efficiencyValueIdAMBPacking").text(EfficiencyFinal + "%")
    console.log(EfficiencyFinalArray)
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green

                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedAMBPacking', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    }  
    else{
        dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    EfficiencyFinal = (((counterValue*0.50)/(minutes*21) )*100).toFixed(2)
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    console.log(EfficiencyFinalArray)
    $("#realTimeIdAMBPacking").text(minutes*21)
    $("#employeeId").text(21)
    $("#efficiencyValueIdAMBPacking").text(EfficiencyFinal + "%")
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green

                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedAMBPacking', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    } 
}
else{
    $("#realTimeIdAMBPacking").text(0)
    $("#employeeId").text(0)
    $("#efficiencyValueIdAMBPacking").text("0 %")
    $("#currentDateData").css('display','none');
    $("#overStatus").css('display',"inline-block");
}
}
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

function generateDataTop(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.BarData.length;

 //concat to get points
 for (var i = 0; i < len; i++) {
     ps[i] = {
         name: data1.BarData[i].DateName,
         y: parseFloat(data1.BarData[i].PassQty),
         drilldown: data1.BarData[i].DateName
     };
 }
 names = [];
 //generate series and split points
 for (i = 0; i < len; i++) {
     var p = ps[i];
   
     series.push(p);
 }
 return series;
}

function generateDataBottom(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.MachineData.length;
   let datesArray = []
   let dataArray = []

 //concat to get points
 for (var i = 0; i < len; i++) {
    if(datesArray.indexOf(data1.MachineData[i].DateName) === -1){
        datesArray.push(data1.MachineData[i].DateName)
        dataArray.push([data1.MachineData[i].DateName,data1.MachineData[i].LineName,parseFloat(data1.MachineData[i].PassQty)])
    }
    else{
        dataArray.push([data1.MachineData[i].DateName,data1.MachineData[i].LineName,parseFloat(data1.MachineData[i].PassQty)])
    }


  
 }

 //generate series and split points
 for (i = 0; i < datesArray.length; i++) {
    let OriginaldataArray = []
    let OriginaldataArrayDateRemove = []
    dataArray.filter(function(e) { 
        if(e[0] === datesArray[i]){
            OriginaldataArray.push(e)
        }
    });
    OriginaldataArray.forEach(element => {
        // console.log("Element", element)
        element.shift()
        OriginaldataArrayDateRemove.push(element)
    });
    // console.log("data Get", OriginaldataArray)
     var p = {
        name: datesArray[i],
        id: datesArray[i],
        data: OriginaldataArrayDateRemove
     }
    //  console.log("Series", p)
     series.push(p);
 }
 return series;
}

$("#searchRange").on('click',function(e){
        e.preventDefault()
        $("#dateRangeResult").css('display','none')
        $("#loadingShow").css('display','inline-block')
        let startDate = $("#startDate").val()
        let endDate = $("#endDate").val()
        let startDateNewFormat = startDate.split("-")[2]+"-"+startDate.split("-")[1]+"-"+startDate.split("-")[0]
        let endDateNewFormat = endDate.split("-")[2]+"-"+endDate.split("-")[1]+"-"+endDate.split("-")[0]
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        let datesArray = []
        let datesArrayMachineWise = []
        let seriesDataMachine1 = [];
        let seriesDataMachine2 = [];
        let seriesDataMachine3 = [];
        let seriesDataMachine4 = [];
        let seriesDataMachine5 = [];
        let seriesDataMachine6 = [];
        let seriesDataMachine7 = [];
        let seriesDataMachine8 = [];
        let originalDataMachineWise = [];
        let targetDataMachineWise = [];
        let output= 0;
    let Minutes = 0;
    let efficiency = 0;
        let url = "<?php echo base_url('Efficiency/getAMBPackingDateRangeData') ?>";
        let url2 = "<?php echo base_url('Efficiency/getRealTimeDateRange') ?>";
        $.post(url,{"startDate":startDate, "endDate":endDate},function(data, status){
            console.log("Data Outer", data)
        let seriesDataTop;
        let seriesDataBottom;
        let dataArrayOuter = data.BarData
        if(data){
        seriesDataTop = generateDataTop(data)
        seriesDataBottom = generateDataBottom(data)
  


        for(let k = 0; k<data.MachineData.length; k++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){
        if(datesArrayMachineWise.indexOf(data.MachineData[k].DateName) === -1){
            datesArrayMachineWise.push(data.MachineData[k].DateName)
        targetDataMachineWise.push(parseFloat(64))
        if(data.MachineData[k].LineName == "Line#1"){
                output = data.MachineData[k].PassQty * 0.50
            Minutes = (3*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.push(parseFloat(efficiency))
            seriesDataMachine4.push(0)
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)


            }
            else if(data.MachineData[k].LineName == "Line#2"){
                output = data.MachineData[k].PassQty * 0.50
            Minutes = (3*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.push(parseFloat(efficiency))
            seriesDataMachine4.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)

            }
            else if(data.MachineData[k].LineName == "Line#3"){
                output = data.MachineData[k].PassQty * 0.50
            Minutes = (3*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.push(parseFloat(efficiency))
            seriesDataMachine4.push(0)
            seriesDataMachine2.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
            

            }
            else if(data.MachineData[k].LineName == "Line#4"){
                output = data.MachineData[k].PassQty * 0.50
            Minutes = (3*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine4.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)


            }
            else if(data.MachineData[k].LineName == "Line#5"){
                output = data.MachineData[k].PassQty * 0.50
            Minutes = (3*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine5.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)
    
            }
            else if(data.MachineData[k].LineName == "Line#6"){
                output = data.MachineData[k].PassQty * 0.50
            Minutes = (3*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine6.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine8.push(0)

            }
            else if(data.MachineData[k].LineName == "Line#7"){
                output = data.MachineData[k].PassQty * 0.50
            Minutes = (3*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine7.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine8.push(0)
  

            }
            else if(data.MachineData[k].LineName == "Line#8"){
                output = data.MachineData[k].PassQty * 0.50
            Minutes = (3*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine8.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            seriesDataMachine5.push(0)
            seriesDataMachine6.push(0)
            seriesDataMachine7.push(0)
            seriesDataMachine1.push(0)
        
            }
    }
    else{
        if(data.MachineData[k].LineName == "Line#1"){
          output = data.MachineData[k].PassQty * 0.50
            Minutes = (3*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.pop()
            seriesDataMachine1.push(parseFloat(efficiency))
        
            }
            else if(data.MachineData[k].LineName == "Line#2"){
              output = data.MachineData[k].PassQty * 0.50
            Minutes = (3*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.pop()
            seriesDataMachine2.push(parseFloat(efficiency))
         
            }
            else if(data.MachineData[k].LineName == "Line#3"){
              output = data.MachineData[k].PassQty * 0.50
            Minutes = (3*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.pop()
            seriesDataMachine3.push(parseFloat(efficiency))
         
            }  

            else if(data.MachineData[k].LineName == "Line#4"){
              output = data.MachineData[k].PassQty * 0.50
            Minutes = (3*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine4.pop()
            seriesDataMachine4.push(parseFloat(efficiency))
         
            }   
            
            else if(data.MachineData[k].LineName == "Line#5"){
              output = data.MachineData[k].PassQty * 0.50
            Minutes = (3*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine5.pop()
            seriesDataMachine5.push(parseFloat(efficiency))
         
            }   

            else if(data.MachineData[k].LineName == "Line#6"){
              output = data.MachineData[k].PassQty * 0.50
            Minutes = (3*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine6.pop()
            seriesDataMachine6.push(parseFloat(efficiency))
         
            }   

            else if(data.MachineData[k].LineName == "Line#7"){
              output = data.MachineData[k].PassQty * 0.50
            Minutes = (3*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine7.pop()
            seriesDataMachine7.push(parseFloat(efficiency))
         
            }   

            else if(data.MachineData[k].LineName == "Line#8"){
              output = data.MachineData[k].PassQty * 0.50
            Minutes = (3*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine8.pop()
            seriesDataMachine8.push(parseFloat(efficiency))
         
            }   
    }
         
        

        }
        originalDataMachineWise.push(
          {name:"Line#1",data:seriesDataMachine1},
          {name:"Line#2",data:seriesDataMachine2},
          {name:"Line#3",data:seriesDataMachine3},
          {name:"Line#4",data:seriesDataMachine4},
          {name:"Line#5",data:seriesDataMachine5},
          {name:"Line#6",data:seriesDataMachine6},
          {name:"Line#7",data:seriesDataMachine7},
          {name:"Line#8",data:seriesDataMachine8},
          {name:"Target Efficiency",data:targetDataMachineWise}
          )
        }
         console.log("Target", datesArrayMachineWise)
        for (var i = 0; i < data.BarData.length; i++) {
    if(datesArray.indexOf(data.BarData[i].DateName) === -1){
        datesArray.push(data.BarData[i].DateName)
        // targetDataMachineWise.push(parseFloat(67))
    }
        }

        Highcharts.chart('containerDateRangeLineMachineWise', {

title: {
    text: `Machine-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency'
    }
},

xAxis: {
    categories: datesArrayMachineWise,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalDataMachineWise,

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


Highcharts.chart('containerDateRangeBar', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'left',
        text: `Balls Count From ${startDateNewFormat} To ${endDateNewFormat}`
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Balls Count'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
            name: "AMB Packing",
            colorByPoint: true,
            data: seriesDataTop
        }
    ],
    drilldown: {
        breadcrumbs: {
            position: {
                align: 'right'
            }
        },
        series: seriesDataBottom
    }
});


    let seriesData = []
    let targetData = []
    let originalData = []
    let lenOuter = dataArrayOuter.length;
    let outputInner= 0;
    let MinutesInner = 0;
    let efficiencyInner = 0;
    // for(let i = 0; i<len; i++){ 
        for(let j = 0; j<lenOuter; j++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){

            outputInner = dataArrayOuter[j].PassQty *0.50
            MinutesInner = (24*480);
            efficiencyInner = ((outputInner / MinutesInner) * 100).toFixed(2)

            seriesData.push(parseFloat(efficiencyInner))
            targetData.push(parseFloat(64))
// }
        }
       
        // if(i == len-1){
            originalData.push({name:"Efficiency",data:seriesData},{name:"Target Efficiency",data:targetData})
        
        // }
    // }

//  console.log(datesArray)
 Highcharts.chart('containerDateRangeLine', {

title: {
    text: `Process-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency'
    }
},

xAxis: {
    categories: datesArray,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalData,

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
$("#loadingShow").css('display','none')
$("#dateRangeResult").css('display','inline-block')



 });
    })
</script>


<?php // LFB Packing ?>

<script>
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
        var EfficiencyFinal;
        var EfficiencyFinalArray = [];
        let counterValue = $("#counterValueIdLFBPacking").text()
        console.log((counterValue/2920)*100)
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
    EfficiencyFinal = (((counterValue*12.88)/(minutes*80) )*100).toFixed(2)
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    if(dayId == 5){
        $("#realTimeIdLFBPacking").text((minutes*269)-(60*80))
    }
    else{
        $("#realTimeIdLFBPacking").text((minutes*269)-(45*80))
    }
    
    $("#employeeId").text(80)
    $("#efficiencyValueIdLFBPacking").text(EfficiencyFinal + "%")
    console.log(EfficiencyFinalArray)
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.1, '#55BF3B'], // green
                    [0.5, '#DDDF0D'], // yellow
                    [0.9, '#DF5353'] // red
                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedLFBPacking', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    }  
    else{
        dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    EfficiencyFinal = (((counterValue*12.88)/(minutes*80) )*100).toFixed(2)
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    console.log(EfficiencyFinalArray)
    $("#realTimeIdLFBPacking").text(minutes*80)
    $("#employeeId").text(80)
    $("#efficiencyValueIdLFBPacking").text(EfficiencyFinal + "%")
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green

                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedLFBPacking', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    } 
}
else{
    $("#realTimeIdLFBPacking").text(0)
    $("#employeeId").text(0)
    $("#efficiencyValueIdLFBPacking").text("0 %")
    $("#currentDateData").css('display','none');
    $("#overStatus").css('display',"inline-block");
}
}
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

    function generateDataTop(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.BarData.length;

 //concat to get points
 for (var i = 0; i < len; i++) {
     ps[i] = {
         name: data1.BarData[i].DateName,
         y: parseFloat(data1.BarData[i].Pass),
         drilldown: data1.BarData[i].DateName
     };
 }
 names = [];
 //generate series and split points
 for (i = 0; i < len; i++) {
     var p = ps[i];
   
     series.push(p);
 }
 return series;
}

function generateDataBottom(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.MachineData.length;
   let datesArray = []
   let dataArray = []

 //concat to get points
 for (var i = 0; i < len; i++) {
    if(datesArray.indexOf(data1.MachineData[i].DateName) === -1){
        datesArray.push(data1.MachineData[i].DateName)
        dataArray.push([data1.MachineData[i].DateName,data1.MachineData[i].Name,parseFloat(data1.MachineData[i].Pass)])
    }
    else{
        dataArray.push([data1.MachineData[i].DateName,data1.MachineData[i].Name,parseFloat(data1.MachineData[i].Pass)])
    }


  
 }

 //generate series and split points
 for (i = 0; i < datesArray.length; i++) {
    let OriginaldataArray = []
    let OriginaldataArrayDateRemove = []
    dataArray.filter(function(e) { 
        if(e[0] === datesArray[i]){
            OriginaldataArray.push(e)
        }
    });
    OriginaldataArray.forEach(element => {
        // console.log("Element", element)
        element.shift()
        OriginaldataArrayDateRemove.push(element)
    });
    // console.log("data Get", OriginaldataArray)
     var p = {
        name: datesArray[i],
        id: datesArray[i],
        data: OriginaldataArrayDateRemove
     }
    //  console.log("Series", p)
     series.push(p);
 }
 return series;
}

$("#searchRange").on('click',function(e){
        e.preventDefault()
        $("#dateRangeResult").css('display','none')
        $("#loadingShow").css('display','inline-block')
        let startDate = $("#startDate").val()
        let endDate = $("#endDate").val()
        let startDateNewFormat = startDate.split("-")[2]+"-"+startDate.split("-")[1]+"-"+startDate.split("-")[0]
        let endDateNewFormat = endDate.split("-")[2]+"-"+endDate.split("-")[1]+"-"+endDate.split("-")[0]
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        let datesArray = []
        let datesArrayMachineWise = []
        let seriesDataMachine1 = [];
        let seriesDataMachine2 = [];
        let seriesDataMachine3 = [];
        let seriesDataMachine4 = [];
        let originalDataMachineWise = [];
        let targetDataMachineWise = [];
        let output= 0;
    let Minutes = 0;
    let efficiency = 0;
        let url = "<?php echo base_url('Efficiency/getLFBDateRangeData') ?>";
        let url2 = "<?php echo base_url('Efficiency/getRealTimeDateRange') ?>";
        $.post(url,{"startDate":startDate, "endDate":endDate},function(data, status){
            console.log("Data Outer", data)
        let seriesDataTop;
        let seriesDataBottom;
        let dataArrayOuter = data.BarData
        if(data){
        seriesDataTop = generateDataTop(data)
        seriesDataBottom = generateDataBottom(data)
  


        for(let k = 0; k<data.MachineData.length; k++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){
        if(datesArrayMachineWise.indexOf(data.MachineData[k].DateName) === -1){
            datesArrayMachineWise.push(data.MachineData[k].DateName)
        targetDataMachineWise.push(parseFloat(58))
        if(data.MachineData[k].Name == "Station No 1"){
                output = data.MachineData[k].Pass * 11.66
            Minutes = (80*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            }
            else if(data.MachineData[k].Name == "Station No 2"){
                output = data.MachineData[k].Pass *13.15
            Minutes = (54*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.push(parseFloat(efficiency))
            seriesDataMachine1.push(0)
            seriesDataMachine3.push(0)
            seriesDataMachine4.push(0)
            }
            else if(data.MachineData[k].Name == "Station No 3"){
                output = data.MachineData[k].Pass * 13.15
            Minutes = (73*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine4.push(0)
            }
            else if(data.MachineData[k].Name == "Station No 4"){
                output = data.MachineData[k].Pass * 13.15
            Minutes = (62*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine4.push(parseFloat(efficiency))
            seriesDataMachine2.push(0)
            seriesDataMachine1.push(0)
            seriesDataMachine3.push(0)

            }
    }
    else{
        if(data.MachineData[k].Name == "Station No 1"){
                output = data.MachineData[k].Pass * 11.66
            Minutes = (80*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine1.pop()
            seriesDataMachine1.push(parseFloat(efficiency))
  
            }
            else if(data.MachineData[k].Name == "Station No 2"){
                output = data.MachineData[k].Pass * 13.15
            Minutes = (54*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine2.pop()
            seriesDataMachine2.push(parseFloat(efficiency))
     
            }
            else if(data.MachineData[k].Name == "Station No 3"){
                output = data.MachineData[k].Pass * 13.15
            Minutes = (73*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine3.pop()
            seriesDataMachine3.push(parseFloat(efficiency))
      
            }
            else if(data.MachineData[k].Name == "Station No 4"){
                output = data.MachineData[k].Pass * 13.15
            Minutes = (62*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)
            seriesDataMachine4.pop()
            seriesDataMachine4.push(parseFloat(efficiency))
    

            }
    }
         
        

        }
        originalDataMachineWise.push({name:"Station No 1",data:seriesDataMachine1},{name:"Station No 2",data:seriesDataMachine2},{name:"Station No 3",data:seriesDataMachine3},{name:"Station No 4",data:seriesDataMachine4},{name:"Target Efficiency",data:targetDataMachineWise})
        }
         console.log("Target", datesArrayMachineWise)
        for (var i = 0; i < data.BarData.length; i++) {
    if(datesArray.indexOf(data.BarData[i].DateName) === -1){
        datesArray.push(data.BarData[i].DateName)
        // targetDataMachineWise.push(parseFloat(67))
    }
        }

        Highcharts.chart('containerDateRangeLineMachineWise', {

title: {
    text: `Machine-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency'
    }
},

xAxis: {
    categories: datesArrayMachineWise,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalDataMachineWise,

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


Highcharts.chart('containerDateRangeBar', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'left',
        text: `Balls Count From ${startDateNewFormat} To ${endDateNewFormat}`
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Balls Count'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
            name: "LFB Assembling & Packing",
            colorByPoint: true,
            data: seriesDataTop
        }
    ],
    drilldown: {
        breadcrumbs: {
            position: {
                align: 'right'
            }
        },
        series: seriesDataBottom
    }
});


    let seriesData = []
    let targetData = []
    let originalData = []
    let lenOuter = dataArrayOuter.length;
    let outputInner= 0;
    let MinutesInner = 0;
    let efficiencyInner = 0;
    // for(let i = 0; i<len; i++){ 
        for(let j = 0; j<lenOuter; j++){
            // if((dataArrayOuter[j].Date == dataInner.realtime[i].AttDate1)){

            outputInner = dataArrayOuter[j].Pass * 12.88
            MinutesInner = (269*480);
            efficiencyInner = ((outputInner / MinutesInner) * 100).toFixed(2)

            seriesData.push(parseFloat(efficiencyInner))
            targetData.push(parseFloat(58))
// }
        }
       
        // if(i == len-1){
            originalData.push({name:"Efficiency",data:seriesData},{name:"Target Efficiency",data:targetData})
        
        // }
    // }

 
//  console.log(datesArray)
 Highcharts.chart('containerDateRangeLine', {

title: {
    text: `Process-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency'
    }
},

xAxis: {
    categories: datesArray,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalData,

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
$("#loadingShow").css('display','none')
$("#dateRangeResult").css('display','inline-block')




 });
    })
</script>





<?php // TM Carcas ?>


<script>
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
        var EfficiencyFinal;
        var EfficiencyFinalArray = [];
        let counterValue = $("#counterValueIdTMCarcas").text()
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
   
    // EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    // if(dayId == 5){
    //     $("#realTimeId").text((minutes*15)-(60*15))
    // }
    // else{
    //     $("#realTimeId").text((minutes*95)-(45*15))
    // }
    if(dayId == 5){
 
 EfficiencyFinal = (((counterValue*5.87)/((minutes*15)-(60*15)) )*100).toFixed(2)

 $("#realTimeIdTMCarcas").text((minutes*15)-(60*15))
}
else{
    EfficiencyFinal = (((counterValue*5.87)/((minutes*15)-(45*15)) )*100).toFixed(2)


$("#realTimeIdTMCarcas").text((minutes*15)-(45*15))
}
EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    $("#employeeId").text(17)
    $("#efficiencyValueIdTMCarcas").text(EfficiencyFinal + "%")
    console.log(EfficiencyFinalArray)
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.1, '#55BF3B'], // green
                    [0.5, '#DDDF0D'], // yellow
                    [0.9, '#DF5353'] // red
                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedTMCarcas', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    }  
    else{
        dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    EfficiencyFinal = (((counterValue*5.87)/(minutes*15) )*100).toFixed(2)
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    console.log(EfficiencyFinalArray)
    $("#realTimeIdTMCarcas").text(minutes*15)
    $("#employeeId").text(15)
    $("#efficiencyValueIdTMCarcas").text(EfficiencyFinal + "%")
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green

                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedTMCarcas', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    } 
}
else{
    $("#realTimeIdTMCarcas").text(0)
    $("#employeeId").text(0)
    $("#efficiencyValueIdTMCarcas").text("0 %")
    $("#currentDateData").css('display','none');
    $("#overStatus").css('display',"inline-block");
}
}
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
                    
        Highcharts.chart('container', {
                        chart: {
                            zoomType: 'xy'
                        },
                        title: {
                            text: 'Carcas Output'
                        },
                        subtitle: {
                            // text: 'Source: WorldClimate.com'
                        },
                        xAxis: [{
                            categories: <?php echo json_encode($GetHours, JSON_NUMERIC_CHECK); ?>,
                            crosshair: true
                        }],
                        yAxis: [{ // Primary yAxis
                                labels: {
                                    format: '{value} balls',
                                    style: {
                                        color: Highcharts.getOptions().colors[1]
                                    }
                                },
                                title: {
                                    text: 'Achieved',
                                    style: {
                                        color: Highcharts.getOptions().colors[1]
                                    }
                                }
                            },
                            { // Secondary yAxis
                                title: {
                                    text: 'Target',
                                    style: {
                                        color: Highcharts.getOptions().colors[0]
                                    }
                                },

                                opposite: true
                            }
                        ],
                        tooltip: {
                            shared: true
                        },
                        legend: {
                            layout: 'vertical',
                            align: 'left',
                            x: 120,
                            verticalAlign: 'top',
                            y: 100,
                            floating: true,
                            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || // theme
                                'rgba(255,255,255,0.25)',
                            enabled: false
                        },

                        plotOptions: {
                            series: {
                                borderWidth: 0,
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.y:.0f}'
                                }
                            }
                        },
                        series: [{
                                name: 'Achieved',
                                type: 'column',
                                yAxis: 1,

                                data: <?php echo json_encode($GetReading, JSON_NUMERIC_CHECK); ?>,
                                tooltip: {
                                    valueSuffix: ' balls'
                                }

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

    function generateDataTop(data) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data.BarData.length;

 //concat to get points
 for (var i = 0; i < len; i++) {
     ps[i] = {
         name: data.BarData[i].Date,
         y: data.BarData[i].Counter
     };
 }
 names = [];
 //generate series and split points
 for (i = 0; i < len; i++) {
     var p = ps[i];
   
     series.push(p);
 }
 return series;
}


$("#searchRange").on('click',function(e){
    //alert("hlooo");
        e.preventDefault()
        $("#dateRangeResult").css('display','none')
        $("#loadingShow").css('display','inline-block')
        let startDate = $("#startDate").val()
        let endDate = $("#endDate").val()
        let startDateNewFormat = startDate.split("-")[2]+"-"+startDate.split("-")[1]+"-"+startDate.split("-")[0]
        let endDateNewFormat = endDate.split("-")[2]+"-"+endDate.split("-")[1]+"-"+endDate.split("-")[0]
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        let datesArray = []
        let dataArray = []
        let seriesData = []
        let targetData = []
        let originalData = []
        // let datesArrayMachineWise = []
        // let seriesDataMachine1 = [];
        // let seriesDataMachine2 = [];
        // let seriesDataMachine3 = [];
        // let seriesDataMachine4 = [];
        // let originalDataMachineWise = [];
        let targetDataMachineWise = [];
        let url = "<?php echo base_url('Efficiency/gettingCarcasData') ?>";
        $.post(url,{"startDate":startDate, "endDate":endDate},function(data, status){
           // alert(data);
            // console.log("Data Outer", data)
        let seriesDataTop;
        let seriesDataBottom;
        let dataArrayOuter = data.BarData
        if(data){
        seriesDataTop = generateDataTop(data)
        //seriesDataBottom = generateDataBottom(data)
  
        for(let k = 0; k<data.BarData.length; k++){
          output = dataArrayOuter[k].Counter * 5.87
            Minutes = (95*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)

            seriesData.push(parseFloat(efficiency))
            targetData.push(parseFloat(64))
          datesArray.push(data.BarData[k].Date)
          dataArray.push(data.BarData[k].Counter)
        }
        originalData.push({name:"Efficiency",data:seriesData},{name:"Target Efficiency",data:targetData})
        }
        

Highcharts.chart('containerDateRangeBar', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'left',
        text: `Carcas Count From ${startDateNewFormat} To ${endDateNewFormat}`
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Carcas Count'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
            name: "Carcas",
            colorByPoint: true,
            data: seriesDataTop
        },
    ]
});

Highcharts.chart('containerDateRangeLine', {

title: {
    text: `Process-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency %'
    }
},

xAxis: {
    categories: datesArray,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalData,

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


$("#loadingShow").css('display','none')
$("#dateRangeResult").css('display','inline-block')
 });
    })

</script>
<script>
    $('#direct').click(function() {
        $("#tableHere").html(' ');
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        url = "<?php echo base_url('Efficiency/getEmployees') ?>";
        $.post(url, {
            "section_id": section_id,
            "dept_id": dept_id,
            "direct": "Direct"
        }, function(data) {
            console.log("data", data)

            var table = '';
            table += `<table id="tableFormat" class="table table-bordered table-hover  table-striped w-100">
            <thead class="bg-primary-200 text-light">
    <tr>
      <th scope="col">Card NO</th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Attendance Time</th>
    </tr>
  </thead>
  <tbody>`
            data.forEach(element => {
                console.log(element)
                table += `<tr>
      <th scope="row">${element.CardNo}</th>
      <td>${element.Name}</td>
      <td>${element.DesigName}</td>
      <td>${(element.AttTime).split(" ")[1]}</td>
    </tr>`
            });


            table += `</tbody>
</table>`
            $("#tableHere").append(table);
            $(document).ready(function() {
                // LoadData(stDate, enDate);

                $('#tableFormat').dataTable({
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
    })
    $('#indirect').click(function() {
        $("#tableHere").html(' ');
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        url = "<?php echo base_url('Efficiency/getEmployees') ?>";
        $.post(url, {
            "section_id": section_id,
            "dept_id": dept_id,
            "direct": "In-Direct"
        }, function(data) {
            console.log("data", data)
            var table = '';
            table += `<table id="tableFormat" class="table table-bordered table-hover  table-striped w-100">
            <thead class="bg-primary-200 text-light">
            <tr>
      <th scope="col">Card NO</th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Attendance Time</th>
    </tr>
  </thead>
  <tbody>`
            data.forEach(element => {
                console.log(element)
                table += `<tr>
      <th scope="row">${element.CardNo}</th>
      <td>${element.Name}</td>
      <td>${element.DesigName}</td>
      <td>${(element.AttTime).split(" ")[1]}</td>
    </tr>`
            });



            table += `</tbody>
</table>`
            $("#tableHere").append(table);
            $(document).ready(function() {
                // LoadData(stDate, enDate);

                $('#tableFormat').dataTable({
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
    })
    $('#NullEmp').click(function() {
        $("#tableHere").html(' ');
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        url = "<?php echo base_url('Efficiency/getEmployeesNull') ?>";
        $.post(url, {
            "section_id": section_id,
            "dept_id": dept_id,
            "direct": "IS NULL"
        }, function(data) {
            var table = '';
            table += `<table id="tableFormat" class="table table-bordered table-hover  table-striped w-100">
            <thead class="bg-primary-200 text-light">
            <tr>
      <th scope="col">Card NO</th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Attendance Time</th>
    </tr>
  </thead>
  <tbody>`
            data.forEach(element => {
                console.log(element)
                table += `<tr>
      <th scope="row">${element.CardNo}</th>
      <td>${element.Name}</td>
      <td>${element.DesigName}</td>
      <td>${(element.AttTime).split(" ")[1]}</td>
    </tr>`
            });



            table += `</tbody>
</table>`
            $("#tableHere").append(table);
            $(document).ready(function() {
                // LoadData(stDate, enDate);

                $('#tableFormat').dataTable({
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


            });
        })

    })
   
</script>

<?php // LFB Carcas ?>



<script>
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
        var EfficiencyFinal;
        var EfficiencyFinalArray = [];
        let counterValue = $("#counterValueIdLFBCarcas").text()
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
    // EfficiencyFinal = (((counterValue*3.67)/(minutes*95) )*100).toFixed(2)
    // EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    // if(dayId == 5){
    //     $("#realTimeId").text((minutes*95)-(60*95))
    // }
    // else{
    //     $("#realTimeId").text((minutes*95)-(45*95))
    // }
    


    if(dayId == 5){
        EfficiencyFinal = (((counterValue*3.67)/((minutes*95)-(60*95)) )*100).toFixed(2)
 $("#realTimeIdLFBCarcas").text((minutes*95)-(60*95))
}
else{
    EfficiencyFinal = (((counterValue*3.67)/((minutes*95)-(45*95)) )*100).toFixed(2)
    $("#realTimeIdLFBCarcas").text((minutes*95)-(45*95))
}
EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))

    $("#employeeId").text(95)
    $("#efficiencyValueIdLFBCarcas").text(EfficiencyFinal + "%")
    console.log(EfficiencyFinalArray)
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.1, '#55BF3B'], // green
                    [0.5, '#DDDF0D'], // yellow
                    [0.9, '#DF5353'] // red
                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedLFBCarcas', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    }  
    else{
        dateDifference = date2 - date1;
    minutes = Math.floor(dateDifference / 60000);
    EfficiencyFinal = (((counterValue*3.67)/(minutes*95) )*100).toFixed(2)
    EfficiencyFinalArray.push(parseFloat(EfficiencyFinal))
    console.log(EfficiencyFinalArray)
    $("#realTimeIdLFBCarcas").text(minutes*95)
    $("#employeeId").text(95)
    $("#efficiencyValueIdLFBCarcas").text(EfficiencyFinal + "%")
    var gaugeOptions = {
            chart: {
                type: 'solidgauge'
            },

            title: null,

            pane: {
                center: ['50%', '85%'],
                size: '140%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },

            exporting: {
                enabled: false
            },

            tooltip: {
                enabled: false
            },

            // the value axis
            yAxis: {
                stops: [
                    [0.3, '#DF5353'], // red
                    [0.8, '#DDDF0D'], // yellow
                    [0.9, '#55BF3B'] // green

                ],
                lineWidth: 0,
                tickWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };

        // The speed gauge
        var chartSpeed = Highcharts.chart('container-speedLFBCarcas', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: 'Achieved'
                }
            },

            credits: {
                enabled: false
            },

            series: [{
                name: 'Achieved',
                data: EfficiencyFinalArray,
                dataLabels: {
                    format: '<div style="text-align:center">' +
                        '<span style="font-size:30px"> {y} %</span><br/>' +
                        '</div>'
                },

            }]

        }));
    } 
}
else{
    $("#realTimeIdLFBCarcas").text(0)
    $("#employeeId").text(0)
    $("#efficiencyValueIdLFBCarcas").text("0 %")
    $("#currentDateData").css('display','none');
    $("#overStatus").css('display',"inline-block");
}
}
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
                    
        Highcharts.chart('container', {
                        chart: {
                            zoomType: 'xy'
                        },
                        title: {
                            text: 'Carcas Output'
                        },
                        subtitle: {
                            // text: 'Source: WorldClimate.com'
                        },
                        xAxis: [{
                            categories: <?php echo json_encode($GetHours, JSON_NUMERIC_CHECK); ?>,
                            crosshair: true
                        }],
                        yAxis: [{ // Primary yAxis
                                labels: {
                                    format: '{value} balls',
                                    style: {
                                        color: Highcharts.getOptions().colors[1]
                                    }
                                },
                                title: {
                                    text: 'Achieved',
                                    style: {
                                        color: Highcharts.getOptions().colors[1]
                                    }
                                }
                            },
                            { // Secondary yAxis
                                title: {
                                    text: 'Target',
                                    style: {
                                        color: Highcharts.getOptions().colors[0]
                                    }
                                },

                                opposite: true
                            }
                        ],
                        tooltip: {
                            shared: true
                        },
                        legend: {
                            layout: 'vertical',
                            align: 'left',
                            x: 120,
                            verticalAlign: 'top',
                            y: 100,
                            floating: true,
                            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || // theme
                                'rgba(255,255,255,0.25)',
                            enabled: false
                        },

                        plotOptions: {
                            series: {
                                borderWidth: 0,
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.y:.0f}'
                                }
                            }
                        },
                        series: [{
                                name: 'Achieved',
                                type: 'column',
                                yAxis: 1,

                                data: <?php echo json_encode($GetReading, JSON_NUMERIC_CHECK); ?>,
                                tooltip: {
                                    valueSuffix: ' balls'
                                }

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

    function generateDataTop(data) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data.BarData.length;

 //concat to get points
 for (var i = 0; i < len; i++) {
     ps[i] = {
         name: data.BarData[i].Date,
         y: data.BarData[i].Counter
     };
 }
 names = [];
 //generate series and split points
 for (i = 0; i < len; i++) {
     var p = ps[i];
   
     series.push(p);
 }
 return series;
}

$("#searchRange").on('click',function(e){
    //alert("hlooo");
        e.preventDefault()
        $("#dateRangeResult").css('display','none')
        $("#loadingShow").css('display','inline-block')
        let startDate = $("#startDate").val()
        let endDate = $("#endDate").val()
        let startDateNewFormat = startDate.split("-")[2]+"-"+startDate.split("-")[1]+"-"+startDate.split("-")[0]
        let endDateNewFormat = endDate.split("-")[2]+"-"+endDate.split("-")[1]+"-"+endDate.split("-")[0]
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        let section_id = params.section_id;
        let dept_id = params.dept_id;
        let datesArray = []
        let dataArray = []
        let seriesData = []
        let targetData = []
        let originalData = []
        // let datesArrayMachineWise = []
        // let seriesDataMachine1 = [];
        // let seriesDataMachine2 = [];
        // let seriesDataMachine3 = [];
        // let seriesDataMachine4 = [];
        // let originalDataMachineWise = [];
        let targetDataMachineWise = [];
        let url = "<?php echo base_url('Efficiency/gettinglfbCarcasData') ?>";
        $.post(url,{"startDate":startDate, "endDate":endDate},function(data, status){
           // alert(data);
            // console.log("Data Outer", data)
        let seriesDataTop;
        let seriesDataBottom;
        let dataArrayOuter = data.BarData
        if(data){
        seriesDataTop = generateDataTop(data)
        //seriesDataBottom = generateDataBottom(data)
  
        for(let k = 0; k<data.BarData.length; k++){
          output = dataArrayOuter[k].Counter * 3.67
            Minutes = (95*480);
            efficiency = ((output / Minutes) * 100).toFixed(2)

            seriesData.push(parseFloat(efficiency))
            targetData.push(parseFloat(64))
          datesArray.push(data.BarData[k].Date)
          dataArray.push(data.BarData[k].Counter)
        }
        originalData.push({name:"Efficiency",data:seriesData},{name:"Target Efficiency",data:targetData})
        }
        

Highcharts.chart('containerDateRangeBar', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'left',
        text: `Carcas Count From ${startDateNewFormat} To ${endDateNewFormat}`
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Carcas Count'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
    },

    series: [
        {
            name: "Carcas",
            colorByPoint: true,
            data: seriesDataTop
        },
    ]
});

Highcharts.chart('containerDateRangeLine', {

title: {
    text: `Process-Wise Efficiency Between ${startDateNewFormat} To ${endDateNewFormat}`
},

yAxis: {
    title: {
        text: 'Efficiency %'
    }
},

xAxis: {
    categories: datesArray,
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        }
    }
},

series: originalData,

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


$("#loadingShow").css('display','none')
$("#dateRangeResult").css('display','inline-block')
 });
    })

</script>






</body>

</html>

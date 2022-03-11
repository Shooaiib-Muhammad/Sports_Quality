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
                    
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i> Quality</span>

                        </h1>
                    </div>
                    <!doctype html>
<?php
if ($this->session->userdata('userStus')==1) {
?>
<html class="no-js" lang="en">
<!--<![endif]-->

<link href="<?php link_file('assets/qa_assets/main.css')?>" rel="stylesheet">
<style>
    .loader-container{
        background: #000;
        position: absolute;
        top:0;
        left:0;
        background: #000;
        opacity: 0.5;
        width: 100%;
        height:100%;
        display: flex;
        align-items:center;
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
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
    }

    </style>



<style>
    .widget-content{
        cursor:pointer;
    }
    .widget-heading{
        font-size:1.2rem;
    }
     .nav-text{
        font-size: 1.1rem;
        font-weight: bold;
    }
    .disable-form{
        pointer-events: none;
    }
</style>

<body>

<div id="right-panel" class="right-panel">


<div class="app-page-title">


<?php


    $OverSize = 0;
    $UnderSize = 0;
    $UnderWeight = 0;
    $OverWeight = 0;
    $DShape = 0;
    $PrintingAlligment = 0;
    $Dull = 0;
    $BGrade = 0;
    $ArtWork = 0;
    $Cavity = 0;
    $Printing = 0;
    $Wrinkle = 0;
    $Moldmark = 0;
    $LeakPuncture = 0;
    $Puncture = 0;
    $Indent = 0;
    $AirBubble = 0;
    $Dirty = 0;
    $Overlaping = 0;
    $SeamAlligment = 0;
    $PanelDefect = 0;
    $Touching = 0;
    $check = 0;
    $pass = 0;
    $fail = 0;


    foreach ($data as $d) {
            $OverSize = $OverSize + $d->OverSize;
            $UnderSize = $UnderSize + $d->UnderSize;
            $OverWeight = $OverWeight + $d->OverWeight;
            $UnderWeight = $UnderWeight + $d->UnderWeight;
            $PrintingAlligment = $PrintingAlligment + $d->PrintingAlligment;
            $PanelDefect = $PanelDefect + $d->PanelDefect;
            $Touching = $Touching + $d->Touching;
            $BGrade = $BGrade + $d->BGrade;
            $ArtWork = $ArtWork + $d->ArtWork;
            $Dirty = $Dirty + $d->Dirty;
            $AirBubble = $AirBubble + $d->AirBubble;
            $Overlaping = $Overlaping + $d->Overlaping;
            $Cavity = $Cavity + $d->Cavity;
            $Wrinkle = $Wrinkle + $d->Wrinkle;
            $Moldmark = $Moldmark + $d->Moldmark;
            $SeamAlligment = $SeamAlligment + $d->SeamAlligment;
            $LeakPuncture = $LeakPuncture + $d->LeakPuncture;
            $Puncture = $Puncture + $d->Puncture;
            $Indent = $Indent + $d->Indent;
            $Printing = $Printing + $d->Printing;
            $Dull = $Dull + $d->Dull;
            $DShape = $DShape + $d->DShape;
            $check = $check + $d->Inspected;
            $pass = $pass + $d->Pass;
            $fail = $fail + $d->Fail;
    }




?>

    <div class="container-fluid">
        <?php //if($this->uri->segment(2) == 'competition'  || $this->uri->segment(2) == 'finale' || $this->uri->segment(2) == 'urban'){ ?>

        <div class="card mb-3">
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="start_date" class="">Start Date</label>
                            <input name="start_date" id="start_date" type="date" class="form-control" value="<?php current_date(); ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="end_date" class="">End Date</label>
                            <input name="end_date" id="end_date" type="date" class="form-control" value="<?php current_date(); ?>">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <button class="btn btn-success btn-block" id="search" style="margin-top:1.75rem; font-size:1.05rem;">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="mb-3 card">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-3 widget-content bg-arielle-smile">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Total Checked</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white" id="check"> <?php r($check) ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-3 widget-content bg-happy-green">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Total Pass</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white" id="pass" ><span> <?php r($pass) ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-3 widget-content bg-midnight-bloom">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Total Fail</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white" id="fail"><span> <?php r($fail) ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">

                        <div class="row">
                                <div class="col-md-3">
                                    <div class="card mb-3 widget-content oversize-div">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Over Size</div>
                                                    <div class="widget-subheading">Quantity: <strong class="text-primary" id="toversize" style="font-size:18px"> <?php  r($OverSize) ?> </strong></div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-danger" id="oversize"><?php percent($OverSize, $check) ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card mb-3 widget-content undersize-div">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Under Size</div>
                                                    <div class="widget-subheading">Quantity: <strong class="text-primary" id="tundersize" style="font-size:18px"> <?php  r($UnderSize) ?> </strong></div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-danger" id="undersize"><?php percent($UnderSize, $check) ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card mb-3 widget-content dshape-div">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">D-Shape</div>
                                                    <div class="widget-subheading">Quantity: <strong class="text-primary" id="tdshape" style="font-size:18px"> <?php  r($DShape) ?> </strong></div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-danger" id="dshape"><?php percent($DShape, $check) ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card mb-3 widget-content underweight-div">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Under Weight</div>
                                                    <div class="widget-subheading">Quantity: <strong class="text-primary" id="tunderweight" style="font-size:18px"> <?php  r($UnderWeight) ?> </strong></div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-danger" id="underweight"><?php percent($UnderWeight, $check) ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content overweight-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Over Weight</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="toverweight" style="font-size:18px"> <?php  r($OverWeight) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="overweight"><?php percent($OverWeight, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content printingal-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Printing Alignment</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tprintingal" style="font-size:18px"> <?php  r($PrintingAlligment) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="printingal"><?php percent($PrintingAlligment, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content panel-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Panel Defect</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tpanel" style="font-size:18px"> <?php  r($PanelDefect) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="panel"><?php percent($PanelDefect, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content touching-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Touching</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="ttouching" style="font-size:18px"> <?php  r($Touching) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="touching"><?php percent($Touching, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content dull-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Dull</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tdull" style="font-size:18px"> <?php  r($Dull) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="dull"><?php percent($Dull, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content artwork-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Wrong Art Work</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tartwork" style="font-size:18px"> <?php  r($ArtWork) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="artwork"><?php percent($ArtWork, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content bgrade-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">B-Grade</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tbgrade" style="font-size:18px"> <?php  r($BGrade) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="bgrade"><?php percent($BGrade, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content seam-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Seam Alignment</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tseam" style="font-size:18px"> <?php  r($SeamAlligment) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="seam"><?php percent($SeamAlligment, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content printing-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Printing</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tprinting" style="font-size:18px"> <?php  r($Printing) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="printing"><?php percent($Printing, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content panelgap-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Panel Gap</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tpanelgap" style="font-size:18px"> <?php  r($Cavity) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="panelgap"><?php percent($Cavity, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content wrinkle-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Wrinkle</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="twrinkle" style="font-size:18px"> <?php  r($Wrinkle) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="wrinkle"><?php percent($Wrinkle, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content indent-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Pressure Mark</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tindent" style="font-size:18px"> <?php  r($Indent) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="indent"><?php percent($Indent, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content moldmark-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Mold Mark</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tmoldmark" style="font-size:18px"> <?php  r($Moldmark) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="moldmark"><?php percent($Moldmark, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content puncture-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Nozzle Move</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tpuncture" style="font-size:18px"> <?php  r($Puncture) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="puncture"><?php percent($Puncture, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content leakpuncture-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Leak Puncture</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tleakpuncture" style="font-size:18px"> <?php  r($LeakPuncture) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="leakpuncture"><?php percent($LeakPuncture, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content airbubble-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Air Bubble</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tairbubble" style="font-size:18px"> <?php  r($AirBubble) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="airbubble"><?php percent($AirBubble, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content overlap-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Over Lapping</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="toverLap" style="font-size:18px"> <?php  r($Overlaping) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="overlap"><?php percent($Overlaping, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content dirty-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Dirty</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tdirty" style="font-size:18px"> <?php  r($Dirty) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="dirty"><?php percent($Dirty, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php //}; ?>

    </div>

    <form action="<?php echo base_url('MIS/Quality/details') ?>" method ="post" id="detail-form">
        <input type="hidden" name="start_date" class="start_date">
        <input type="hidden" name="end_date" class="end_date">
        <input type="hidden" name="type" class="type">
        <input type="hidden" name="total" class="total">
        <input type="hidden" name="title" class="title">
        <input type="hidden" name="src" class="src">
        <input type="hidden" name="detail" class="detail">
        <input type="hidden" name="detail2" class="detail2">
        <input type="hidden" name="quantity" class="quantity">
        <input type="hidden" name="totalchecked" class="totalchecked">
        <input type="hidden" name="code" class="code" value="<?php echo $code ?>">
    </form>

<script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
      <script type="text/javascript">

          /* Activate smart panels */
          $('#js-page-content').smartPanel();
      </script>
    <script>
    $(document).ready(function(){

        function round(value){
            if(!isNaN(value)){
                return Math.round(value)
            }
                return 0;
        }

        function percent(value, total){
            if(value == 0 || total == 0){
                return "0%"
            }else{
                result = (value / total) * 100;
                return result.toFixed(2) + "%";
            }
        }

        function search(){
            $('.loader-container').show();
            url = "<?php echo base_url("MIS/Quality/get_errors") ?>"
            //alert(url);
            sdate = $('#start_date').val();
            edate = $('#end_date').val();
            code = "<?php echo $code; ?>"

            postdata = {
                start_date: sdate,
                end_date: edate,
                code
            }

            $(".all-forms").addClass('disable-form')

            $.post(url, postdata, function(res){
                data = res.data;
                OverSize = 0;
                UnderSize = 0;
                UnderWeight = 0;
                OverWeight = 0;
                DShape = 0;
                PrintingAlligment = 0;
                Dull = 0;
                BGrade = 0;
                ArtWork = 0;
                Cavity = 0;
                Printing = 0;
                Wrinkle = 0;
                Moldmark = 0;
                LeakPuncture = 0;
                Puncture = 0;
                Indent = 0;
                AirBubble = 0;
                Dirty = 0;
                Overlaping = 0;
                SeamAlligment = 0;
                PanelDefect = 0;
                Touching = 0;
                check = 0;
                pass = 0;
                fail = 0;

                for(i = 0; i < data.length ; i++){
                    OverSize += round(data[i].OverSize);
                    UnderSize += round(data[i].UnderSize)
                    UnderWeight += round(data[i].UnderWeight)
                    OverWeight += round(data[i].OverWeight)
                    DShape += round(data[i].DShape)
                    check += round(data[i].Inspected)
                    PrintingAlligment += round(data[i].PrintingAlligment)
                    Dull += round(data[i].Dull)
                    BGrade += round(data[i].BGrade)
                    ArtWork += round(data[i].ArtWork)
                    Cavity += round(data[i].Cavity)
                    Printing += round(data[i].Printing)
                    Wrinkle += round(data[i].Wrinkle)
                    Moldmark += round(data[i].Moldmark)
                    LeakPuncture += round(data[i].LeakPuncture)
                    Puncture += round(data[i].Puncture)
                    Indent += round(data[i].Indent)
                    AirBubble += round(data[i].AirBubble)
                    Dirty += round(data[i].Dirty)
                    Overlaping += round(data[i].Overlaping)
                    SeamAlligment += round(data[i].SeamAlligment)
                    PanelDefect += round(data[i].PanelDefect)
                    Touching += round(data[i].Touching)
                    pass += round(data[i].Pass)
                    fail += round(data[i].Fail)
                }
                    $('#check').text(round(check))
                    $('#pass').text(round(pass))
                    $('#fail').text(round(fail))
                    $('#oversize').text(percent(OverSize, check))
                    $('#toversize').text(round(OverSize))
                    $('#undersize').text(percent(UnderSize, check))
                    $('#tundersize').text(round(UnderSize))
                    $('#dshape').text(percent(DShape, check))
                    $('#tdshape').text(round(DShape))
                    $('#overweight').text(percent(OverWeight, check))
                    $('#toverweight').text(round(OverWeight))
                    $('#underweight').text(percent(UnderWeight, check))
                    $('#tunderweight').text(round(UnderWeight))
                    $('#printingal').text(percent(PrintingAlligment, check))
                    $('#tprintingal').text(round(PrintingAlligment))
                    $('#panel').text(percent(PanelDefect, check))
                    $('#tpanel').text(round(PanelDefect))
                    $('#touching').text(percent(Touching, check))
                    $('#ttouching').text(round(Touching))
                    $('#dull').text(percent(Dull, check))
                    $('#tdull').text(round(Dull))
                    $('#artwork').text(percent(ArtWork, check))
                    $('#tartwork').text(round(ArtWork))
                    $('#bgrade').text(percent(BGrade, check))
                    $('#tbgrade').text(round(BGrade))
                    $('#seam').text(percent(SeamAlligment, check))
                    $('#tseam').text(round(SeamAlligment))
                    $('#printing').text(percent(Printing, check))
                    $('#tprinting').text(round(Printing))
                    $('#panelgap').text(percent(Cavity, check))
                    $('#tpanelgap').text(round(Cavity))
                    $('#wrinkle').text(percent(Wrinkle, check))
                    $('#twrinkle').text(round(Wrinkle))
                    $('#indent').text(percent(Indent, check))
                    $('#tindent').text(round(Indent))
                    $('#moldmark').text(percent(Moldmark, check))
                    $('#tmoldmark').text(round(Moldmark))
                    $('#puncture').text(percent(Puncture, check))
                    $('#tpuncture').text(round(Puncture))
                    $('#leakpunture').text(percent(LeakPuncture, check))
                    $('#tleakpunture').text(round(LeakPuncture))
                    $('#airbubble').text(percent(AirBubble, check))
                    $('#tairbubble').text(round(AirBubble))
                    $('#overlap').text(percent(Overlaping, check))
                    $('#toverlap').text(Overlaping)
                    $('#dirty').text(percent(Dirty, check))
                    $('#tdirty').text(round(Dirty))
                    $('.loader-container').hide()
            })

            $(".all-forms").removeClass('disable-form')

        }

        search();
        $('#search').on('click', function(){
            search()
        })



        function sendForm(total, dbOption, title, img, detail1, detail2){
            $("." +total + "-div").on('click', function(e){
            $('.total').val($("#" +total).text())
            $('.type').val(dbOption)
            $('.title').val(" <?php echo $title ?> : " + title)
            if(img != ''){
                $('.src').val("<?php echo base_url('assets/qa_assets/tm/') ?>" + img)
            }else{
                $('.src').val("")
            }

            $('.detail').val(detail1)
            $('.detail2').val(detail2)
            $('.quantity').val($('#t' + total).text())
            $('.totalchecked').val($('#check').text())
            console.log($(".totalchecked").val())
            $('#detail-form').submit();
        })
        }

        $('.widget-content').on('click', function(e){
            $('.start_date').val($('#start_date').val())
            $('.end_date').val($('#end_date').val())
        })

        sendForm('oversize', "OverSize", "Over Size", "Over Size.jpg", "greater than 69.5 cm", "greater than 66 cm" );
        sendForm('undersize', "UnderSize", "Under Size", "under size.jpg", "Less than 68.5 cm", "Less than 63.5 cm" );
        sendForm('dshape', "DShape", "D Shape", "D-Shape.jpg", "3 mm on both sides in ring", "3 mm on both sides in ring" );
        sendForm('overweight', "OverWeight", "Over Weight", "Over Weight.jpg", "Greater than 390 gram", "Greater than 445 gram" );
        sendForm('underweight', "UnderWeight", "Under Weight", "Under Weight.png", "Less than 420 gram", "Less than 350 gram" );
        sendForm('printingal', "PrintingAlligment", "Printing Alligment", "Printing Alligment.jpg", "", "" );
        sendForm('panel', "PanelDefect", "Panel Defect", "Panel Defect.jpg", "", "" );
        sendForm('touching', "Touching", "Touching", "Touching.jpg", "", "" );
        sendForm('dull', "Dull", "Dull", "", "", "" );
        sendForm('artwork', "ArtWork", "Wrong Art Work", "", "", "" );
        sendForm('bgrade', "BGrade", "B Grade", "B-Grade.jpg", "", "" );
        sendForm('seam', "SeamAlligment", "Seam Alignment", "Seam Alligment.jpg", "", "" );
        sendForm('printing', "Printing", "Printing", "printing.jpg", "", "" );
        sendForm('panelgap', "Cavity", "Panel Gap", "Panel Gap.jpg", "", "" );
        sendForm('wrinkle', "Wrinkle", "Wrinkle", "wrinkle.jpg", "", "" );
        sendForm('indent', "Indent", "Pressure Mark", "", "", "" );
        sendForm('moldmark', "Moldmark", "Mold Mark", "", "", "" );
        sendForm('puncture', "Puncture", "Nozzle Move", "Nozzle Move.jpg", "", "" );
        sendForm('leakpuncture', "LeakPuncture", "Leak Puncture", "puncture.jpg", "", "" );
        sendForm('airbubble', "AirBubble", "Air Bubble", "Air Bubble.jpg", "", "" );
        sendForm('overlap', "Overlaping", "Over Lapping", "Over Lapping.jpg", "", "" );
        sendForm('dirty', "Dirty", "Dirty", "dirty.jpg", "", "" );



    })
    </script>


<?php
}else{
    redirect('Welcome/index');
}
?>

                    </div>
                </main>
            </div>
        </div>
    </div>
</div>

<?php
}
?>
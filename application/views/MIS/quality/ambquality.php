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
                            <i class='subheader-icon fal fa-chart-area'></i> Amb Quality</span>

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

    $Smearing = 0;
    $DisColor = 0;
    $LargerSpots = 0;
    $BarcodeMissing = 0;
    $LogoDoubling = 0;
    $LogoSmearing = 0;
    $MissAlligment = 0;
    $OverUnderWght = 0;
    $ExcessiveGlue = 0;
    $UncureGlue = 0;
    $ConnectionBreak = 0;
    $CuttingResidual = 0;
    $StraightCut = 0;
    $BGrade = 0;
    $SeamClosingGlue = 0;
    $PUC = 0;
    $CoreCavity = 0;
    $OtherPrintingIssue = 0;
    $Touching = 0;
    $PanelCavity = 0;
    $OpenSeam = 0;
    $ArtWork = 0;
    $SingleOpenStrip = 0;
    $UnbondedPanels = 0;
    $Wrinkle = 0;
    $OverLap = 0;
    $ZigZagSeam = 0;
    $PanelDMG = 0;

    $check = 0;
    $Pass = 0;
    $Fail = 0;


    foreach ($data as $d) {
            $LargerSpots = $LargerSpots + $d->LargerSpots;
            $BarcodeMissing = $BarcodeMissing + $d->BarcodeMissing;
            $LogoDoubling = $LogoDoubling + $d->LogoDoubling;
            $LogoSmearing = $LogoSmearing + $d->LogoSmearing;
            $MissAlligment = $MissAlligment + $d->MissAlligment;
            $OverUnderWght = $OverUnderWght + $d->OverUnderWght;
            $ExcessiveGlue = $ExcessiveGlue + $d->ExcessiveGlue;
            $UncureGlue = $UncureGlue + $d->UncureGlue;
            $ConnectionBreak = $ConnectionBreak + $d->ConnectionBreak;
            $ArtWork = $ArtWork + $d->ArtWork;
            $DisColor = $DisColor + $d->DisColor;
            $CuttingResidual = $CuttingResidual + $d->CuttingResidual;
            $StraightCut = $StraightCut + $d->StraightCut;
            $BGrade = $BGrade + $d->BGrade;
            $SeamClosingGlue = $SeamClosingGlue + $d->SeamClosingGlue;
            $PUC = $PUC + $d->PUC;
            $CoreCavity = $CoreCavity + $d->CoreCavity;
            $OtherPrintingIssue = $OtherPrintingIssue + $d->OtherPrintingIssue;
            $Touching = $Touching + $d->Touching;
            $PanelCavity = $PanelCavity + $d->PanelCavity;
            $ZigZagSeam = $ZigZagSeam + $d->ZigZagSeam;
            $Smearing = $Smearing + $d->Smearing;
            $OpenSeam = $OpenSeam + $d->OpenSeam;
            $SingleOpenStrip = $SingleOpenStrip + $d->SingleOpenStrip;
            $UnbondedPanels = $UnbondedPanels + $d->UnbondedPanels;
            $Wrinkle = $Wrinkle + $d->Wrinkle;
            $OverLap = $OverLap + $d->OverLap;
            $PanelDMG = $PanelDMG + $d->PanelDMG;
            $check = $check + $d->TotalChecked;
            $Pass = $Pass + $d->Pass;
    }
?>

    <div class="container-fluid">

        <div class="card mb-3">
            <div class="card-body">
            <div class="form-row">
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="start_date" class="">Start Date</label>
                        <input name="start_date" id="start_date" type="date" class="form-control" value="<?php if(isset($start_date)) echo $start_date; else  current_date(); ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="end_date" class="">End Date</label>
                        <input name="end_date" id="end_date" type="date" class="form-control" value="<?php if(isset($end_date)) echo $end_date; else  current_date(); ?>">
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
                                        <div class="widget-numbers text-white" id="check"><span> <?php r($check) ?></span></div>
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
                                        <div class="widget-numbers text-white" id="pass" ><?php r($Pass) ?></div>
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
                                        <div class="widget-numbers text-white" id="fail"><span> <?php echo($check - $Pass) ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   </div>
                <div class="card-body">

                <div class="row">
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content LargerSpots-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Laquar Spots</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tLargerSpots" style="font-size:18px"> <?php  r($LargerSpots) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="LargerSpots"><?php percent($LargerSpots, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content BarcodeMissing-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Barcode Missing</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tBarcodeMissing" style="font-size:18px"> <?php  r($BarcodeMissing) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="BarcodeMissing"><?php percent($BarcodeMissing, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content LogoDoubling-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Logo Doubling</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tLogoDoubling" style="font-size:18px"> <?php  r($LogoDoubling) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="LogoDoubling"><?php percent($LogoDoubling, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content MissAlligment-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Miss Alligment</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tMissAlligment" style="font-size:18px"> <?php  r($MissAlligment) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="MissAlligment"><?php percent($MissAlligment, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content LogoSmearing-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Logo Smearing</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tLogoSmearing" style="font-size:18px"> <?php  r($LogoSmearing) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="LogoSmearing"><?php percent($LogoSmearing, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content OverUnderWght-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Over Under Wght</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tOverUnderWght" style="font-size:18px"> <?php  r($OverUnderWght) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="OverUnderWght"><?php percent($OverUnderWght, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content ExcessiveGlue-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Excessive Glue</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tExcessiveGlue" style="font-size:18px"> <?php  r($ExcessiveGlue) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="ExcessiveGlue"><?php percent($ExcessiveGlue, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content UncureGlue-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Uncure Glue</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tUncureGlue" style="font-size:18px"> <?php  r($UncureGlue) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="UncureGlue"><?php percent($UncureGlue, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content ArtWork-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Wrong Art Work</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tArtWork" style="font-size:18px"> <?php  r($ArtWork) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="ArtWork"><?php percent($ArtWork, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content OpenSeam-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">OpenSeam</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tOpenSeam" style="font-size:18px"> <?php  r($OpenSeam) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="OpenSeam"><?php percent($OpenSeam, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content DisColor-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Dis Color</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tDisColor" style="font-size:18px"> <?php  r($DisColor) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="DisColor"><?php percent($DisColor, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content CoreCavity-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">CoreCavity</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tCoreCavity" style="font-size:18px"> <?php  r($CoreCavity) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="CoreCavity"><?php percent($CoreCavity, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content StraightCut-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Straight Cut</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tStraightCut" style="font-size:18px"> <?php  r($StraightCut) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="StraightCut"><?php percent($StraightCut, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content BGrade-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">BGrade</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tBGrade" style="font-size:18px"> <?php  r($BGrade) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="BGrade"><?php percent($BGrade, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content SeamClosingGlue-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Seam Closing Glue</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tSeamClosingGlue" style="font-size:18px"> <?php  r($SeamClosingGlue) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="SeamClosingGlue"><?php percent($SeamClosingGlue, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content PUC-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">PUC</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tPUC" style="font-size:18px"> <?php  r($PUC) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="PUC"><?php percent($PUC, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content OtherPrintingIssue-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Other Printing Issues</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tOtherPrintingIssue" style="font-size:18px"> <?php  r($OtherPrintingIssue) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="OtherPrintingIssue"><?php percent($OtherPrintingIssue, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content Touching-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Touching</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tTouching" style="font-size:18px"> <?php  r($Touching) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="Touching"><?php percent($Touching, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content PanelCavity-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Panel Cavity</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tPanelCavity" style="font-size:18px"> <?php  r($PanelCavity) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="PanelCavity"><?php percent($PanelCavity, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content Smearing-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Smearing</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tSmearing" style="font-size:18px"> <?php  r($Smearing) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="Smearing"><?php percent($Smearing, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                                <div class="card mb-3 widget-content SingleOpenStrip-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">SingleOpenStrip</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tSingleOpenStrip" style="font-size:18px"> <?php  r($SingleOpenStrip) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="SingleOpenStrip"><?php percent($SingleOpenStrip, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content CuttingResidual-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Cutting Residual</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tCuttingResidual" style="font-size:18px"> <?php  r($CuttingResidual) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="CuttingResidual"><?php percent($CuttingResidual, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content ZigZagSeam-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">ZigZagSeam</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tZigZagSeam" style="font-size:18px"> <?php  r($ZigZagSeam) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="ZigZagSeam"><?php percent($ZigZagSeam, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content UnbondedPanels-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Unbonded Panels</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tUnbondedPanels" style="font-size:18px"> <?php  r($UnbondedPanels) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="UnbondedPanels"><?php percent($UnbondedPanels, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card mb-3 widget-content ConnectionBreak-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Connection Break</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tConnectionBreak" style="font-size:18px"> <?php  r($ConnectionBreak) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="ConnectionBreak"><?php percent($ConnectionBreak, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content Wrinkle-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Wrinkle</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tWrinkle" style="font-size:18px"> <?php  r($Wrinkle) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="Wrinkle"><?php percent($Wrinkle, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card mb-3 widget-content OverLap-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">OverLap</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tOverLap" style="font-size:18px"> <?php  r($OverLap) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="OverLap"><?php percent($OverLap, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card mb-3 widget-content PanelDMG-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">PanelDMG</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tPanelDMG" style="font-size:18px"> <?php  r($PanelDMG) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="PanelDMG"><?php percent($PanelDMG, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                console.log(res)
                data = res.data;
                Smearing = 0;
                DisColor = 0;
                LargerSpots = 0;
                BarcodeMissing = 0;
                LogoDoubling = 0;
                LogoSmearing = 0;
                MissAlligment = 0;
                OverUnderWght = 0;
                ExcessiveGlue = 0;
                UncureGlue = 0;
                ConnectionBreak = 0;
                CuttingResidual = 0;
                StraightCut = 0;
                BGrade = 0;
                SeamClosingGlue = 0;
                PUC = 0;
                CoreCavity = 0;
                OtherPrintingIssue = 0;
                Touching = 0;
                PanelCavity = 0;
                OpenSeam = 0;
                ArtWork = 0;
                SingleOpenStrip = 0;
                UnbondedPanels = 0;
                Wrinkle = 0;
                OverLap = 0;
                ZigZagSeam = 0;
                PanelDMG = 0;
                check = 0;
                Pass = 0;
                Fail = 0;
                for(i = 0; i < data.length ; i++){
                    Smearing += round(data[i].Smearing) ;
                    DisColor += round(data[i].DisColor) ;
                    LargerSpots += round(data[i].LargerSpots) ;
                    BarcodeMissing += round(data[i].BarcodeMissing) ;
                    LogoDoubling += round(data[i].LogoDoubling) ;
                    LogoSmearing += round(data[i].LogoSmearing) ;
                    MissAlligment += round(data[i].MissAlligment) ;
                    OverUnderWght += round(data[i].OverUnderWght) ;
                    ExcessiveGlue += round(data[i].ExcessiveGlue) ;
                    UncureGlue += round(data[i].UncureGlue) ;
                    ConnectionBreak += round(data[i].ConnectionBreak) ;
                    CuttingResidual += round(data[i].CuttingResidual) ;
                    StraightCut += round(data[i].StraightCut) ;
                    BGrade += round(data[i].BGrade) ;
                    SeamClosingGlue += round(data[i].SeamClosingGlue) ;
                    PUC += round(data[i].PUC) ;
                    CoreCavity += round(data[i].CoreCavity) ;
                    OtherPrintingIssue += round(data[i].OtherPrintingIssue) ;
                    Touching += round(data[i].Touching) ;
                    PanelCavity += round(data[i].PanelCavity) ;
                    OpenSeam += round(data[i].OpenSeam) ;
                    ArtWork += round(data[i].ArtWork) ;
                    SingleOpenStrip += round(data[i].SingleOpenStrip) ;
                    UnbondedPanels += round(data[i].UnbondedPanels) ;
                    Wrinkle += round(data[i].Wrinkle) ;
                    OverLap += round(data[i].OverLap) ;
                    PanelDMG += round(data[i].PanelDMG) ;
                    ZigZagSeam += round(data[i].ZigZagSeam) ;

                    check += round(data[i].TotalChecked) ;
                    Pass += round(data[i].Pass) ;
                    Fail += round(data[i].Fail) ;

                }

                    $('#check').text(check)
                    $('#pass').text(Pass)
                    $('#fail').text(check - Pass)

                    $('#BarcodeMissing').text(percent(BarcodeMissing, check))
                    $('#tBarcodeMissing').text(round(BarcodeMissing))

                    $('#LogoDoubling').text(percent(LogoDoubling, check))
                    $('#tLogoDoubling').text(round(LogoDoubling))

                    $('#LargerSpots').text(percent(LargerSpots, check))
                    $('#tLargerSpots').text(round(LargerSpots))

                    $('#LogoSmearing').text(percent(LogoSmearing, check))
                    $('#tLogoSmearing').text(round(LogoSmearing))

                    $('#MissAlligment').text(percent(MissAlligment, check))
                    $('#tMissAlligment').text(round(MissAlligment))

                    $('#OverUnderWght').text(percent(OverUnderWght, check))
                    $('#tOverUnderWght').text(round(OverUnderWght))

                    $('#ExcessiveGlue').text(percent(ExcessiveGlue, check))
                    $('#tExcessiveGlue').text(round(ExcessiveGlue))

                    $('#ArtWork').text(percent(ArtWork, check))
                    $('#tArtWork').text(round(ArtWork))

                    $('#UncureGlue').text(percent(UncureGlue, check))
                    $('#tUncureGlue').text(round(UncureGlue))

                    $('#ConnectionBreak').text(percent(ConnectionBreak, check))
                    $('#tConnectionBreak').text(round(ConnectionBreak))

                    $('#DisColor').text(percent(DisColor, check))
                    $('#tDisColor').text(round(DisColor))

                    $('#CuttingResidual').text(percent(CuttingResidual, check))
                    $('#tCuttingResidual').text(round(CuttingResidual))

                    $('#OtherPrintingIssue').text(percent(OtherPrintingIssue, check))
                    $('#tOtherPrintingIssue').text(round(OtherPrintingIssue))

                    $('#SeamClosingGlue').text(percent(SeamClosingGlue, check))
                    $('#tSeamClosingGlue').text(round(SeamClosingGlue))

                    $('#PUC').text(percent(PUC, check))
                    $('#tPUC').text(round(PUC))

                    $('#CoreCavity').text(percent(CoreCavity, check))
                    $('#tCoreCavity').text(round(CoreCavity))

                    $('#Touching').text(percent(Touching, check))
                    $('#tTouching').text(round(Touching))

                    $('#PanelDMG').text(percent(PanelDMG, check))
                    $('#tPanelDMG').text(round(PanelDMG))


                    $('#PanelCavity').text(percent(PanelCavity, check))
                    $('#tPanelCavity').text(round(PanelCavity))

                    $('#ZigZagSeam').text(percent(ZigZagSeam, check))
                    $('#tZigZagSeam').text(ZigZagSeam)

                    $('#Smearing').text(percent(Smearing, check))
                    $('#tSmearing').text(round(Smearing))

                    $('#CuttingResidual').text(percent(CuttingResidual, check))
                    $('#tCuttingResidual').text(round(CuttingResidual))

                    $('#SingleOpenStrip').text(percent(SingleOpenStrip, check))
                    $('#tSingleOpenStrip').text(round(SingleOpenStrip))

                    $('#OpenSeam').text(percent(OpenSeam, check))
                    $('#tOpenSeam').text(round(OpenSeam))

                    $('#Wrinkle').text(percent(Wrinkle, check))
                    $('#tWrinkle').text(round(Wrinkle))

                    $('#OpenSeam').text(percent(OpenSeam, check))
                    $('#tOpenSeam').text(round(OpenSeam))

                    $('#OverLap').text(percent(OverLap, check))
                    $('#tOverLap').text(round(OverLap))

                    $('#UnbondedPanels').text(percent(UnbondedPanels, check))
                    $('#tUnbondedPanels').text(round(UnbondedPanels))

                    $('.loader-container').hide()
            })

            $(".all-forms").removeClass('disable-form')

        }

        search();

        $('#search').click(function(){
            search()
        })


        function sendForm(div, title, img, detail1, detail2){
            $("." +div + "-div").on('click', function(e){
            $('.total').val($("#" +div).text())
            $('.type').val(div)
            $('.quantity').val(($('#t'+div).text()))
            $('.title').val(" <?php echo $title ?> : " + title)
            if(img != ''){
                $('.src').val("<?php echo base_url('assets/qa_assets/') ?>" + img)
            }else{
                $('.src').val("")
            }
            $('.detail').val(detail1)
            $('.detail2').val(detail2)
            $('.totalchecked').val($('#check').text())
            $('#detail-form').submit();
        })
        }

        $('.widget-content').on('click', function(e){
            $('.start_date').val($('#start_date').val())
            $('.end_date').val($('#end_date').val())
        })

        sendForm('LargerSpots', "Larger Spots", "", "", "" );
        sendForm('BarcodeMissing', "Barcode Missing", "", "", "" );
        sendForm('LogoDoubling', "Logo Doubling", "", "", "" );
        sendForm('LogoSmearing', "Logo Smearing", "", "", "" );
        sendForm('MissAlligment', "Miss Alligment", "", "", "" );
        sendForm('OverUnderWght', "Over Under Weight", "", "", "" );
        sendForm('ExcessiveGlue', "Excessive Glue", "", "", "" );
        sendForm('ArtWork', "Wrong Art Work", "", "", "" );
        sendForm('UncureGlue', "Uncure Glue", "", "", "" );
        sendForm('ConnectionBreak', "Connection Break", "", "", "" );
        sendForm('DisColor', "DisColor", "", "", "" );
        sendForm('CuttingResidual', "Cutting Residual", "", "", "" );
        sendForm('StraightCut', "Straight Cut", "", "", "" );
        sendForm('BGrade', "BGrade", "Extra Glued.png", "", "" );
        sendForm('SeamClosingGlue', "Seam Closing Glue", "", "", "" );
        sendForm('OtherPrintingIssue', "Other PrintingI ssue", "", "", "" );
        sendForm('PUC', "PUC", "Puc.png", "", "" );
        sendForm('CoreCavity', "Core Cavity", "", "", "" );
        sendForm('Touching', "Touching", "", "", "" );
        sendForm('PanelDMG', "Panel Damage", "", "", "" );
        sendForm('PanelCavity', "PanelC avity", "", "", "" );
        sendForm('Smearing', "Smearing", "", "", "" );
        sendForm('SingleOpenStrip', "Single Open Strip", "", "", "" );
        sendForm('OpenSeam', "OpenSeam", "Open Seam.png", "", "" );
        sendForm('UnbondedPanels', "Unbonded Panels", "", "", "" );
        sendForm('ZigZagSeam', "ZigZag Seam", "", "", "" );
        sendForm('Wrinkle', "Wrinkle", "Wrinkle.png", "", "" );
        sendForm('OverLap', "OverLap", "", "", "" );
        sendForm('UnMold', "Un Mold", "", "", "" );

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
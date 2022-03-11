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
                            <i class='subheader-icon fal fa-chart-area'></i> MS Quality</span>

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

    $OpenComposit = 0;
    $DailyComposit = 0;
    $CompositCornersEdges = 0;
    $LooseStitch = 0;
    $TornStitch = 0;
    $MissStitch = 0;
    $CornersOut = 0;
    $ZigZagStitch = 0;
    $ArtWork = 0;
    $WrongSewingMargin = 0;
    $MaterialTorn = 0;
    $DisColor = 0;
    $LamProblem = 0;
    $TreatOff = 0;
    $MissPrinting = 0;
    $Smearing = 0;
    $NozleMove = 0;
    $LeakPuncture = 0;
    $Unroundness = 0;
    $CutMark = 0;
    $Dirty = 0;
    $DevInCircum = 0;
    $UnderWght = 0;
    $OverWeight = 0;
    $internalAirPresure = 0;
    $NeedleMark = 0;
    $UnHold = 0;
    $BGrade = 0;
    $VolPanelAlligment = 0;
    $CompoitMissPrint = 0;
    $check = 0;
    $Pass = 0;
    $Fail = 0;


    foreach ($data as $d) {
            $OpenComposit = $OpenComposit + $d->OpenComposit;
            $DailyComposit = $DailyComposit + $d->DailyComposit;
            $CompositCornersEdges = $CompositCornersEdges + $d->CompositCornersEdges;
            $LooseStitch = $LooseStitch + $d->LooseStitch;
            $TornStitch = $TornStitch + $d->TornStitch;
            $MissStitch = $MissStitch + $d->MissStitch;
            $CornersOut = $CornersOut + $d->CornersOut;
            $ZigZagStitch = $ZigZagStitch + $d->ZigZagStitch;
            $WrongSewingMargin = $WrongSewingMargin + $d->WrongSewingMargin;

            $MaterialTorn = $MaterialTorn + $d->MaterialTorn;
            $ArtWork = $ArtWork + $d->WrongArtWork;
            $DisColor = $DisColor + $d->DisColor;
            $LamProblem = $LamProblem + $d->LamProblem;
            $TreatOff = $TreatOff + $d->TreatOff;
            $MissPrinting = $MissPrinting + $d->MissPrinting;
            $Smearing = $Smearing + $d->Smearing;
            $LeakPuncture = $LeakPuncture + $d->LeakPuncture;
            $Unroundness = $Unroundness + $d->Unroundness;
            $NozleMove = $NozleMove + $d->NozleMove;
            $CutMark = $CutMark + $d->CutMark;
            $DevInCircum = $DevInCircum + $d->DevInCircum;
            $Dirty = $Dirty + $d->Dirty;
            $UnderWght = $UnderWght + $d->UnderWght;
            $OverWeight = $OverWeight + $d->OverWeight;
            $internalAirPresure = $internalAirPresure + $d->internalAirPresure;
            $BGrade = $BGrade + $d->BGrade;
            $UnHold = $UnHold + $d->UnHold;
            $NeedleMark = $NeedleMark + $d->NeedleMark;
            $VolPanelAlligment = $VolPanelAlligment + $d->VolPanelAlligment;
            $CompoitMissPrint = $CompoitMissPrint + $d->CompoitMissPrint;
            $check = $check + $d->TotalChecked;
            $Pass = $Pass + $d->Pass;
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
                                        <div class="widget-numbers text-white" id="pass" ><span> <?php r($Pass) ?></span></div>
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
                                <div class="card mb-3 widget-content OpenComposit-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Open Composite</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tOpenComposit" style="font-size:18px"> <?php  r($OpenComposit) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="OpenComposit"><?php percent($OpenComposit, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card mb-3 widget-content DailyComposit-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Dirty Composite</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tDailyComposit" style="font-size:18px"> <?php  r($DailyComposit) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="DailyComposit"><?php percent($DailyComposit, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card mb-3 widget-content CompositCornersEdges-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">CompositCornersEdges</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tCompositCornersEdges" style="font-size:18px"> <?php  r($CompositCornersEdges) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="CompositCornersEdges"><?php percent($CompositCornersEdges, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card mb-3 widget-content LooseStitch-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Loose Stitch</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tLooseStitch" style="font-size:18px"> <?php  r($LooseStitch) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="LooseStitch"><?php percent($LooseStitch, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content MissStitch-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">MissStitch</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tMissStitch" style="font-size:18px"> <?php  r($MissStitch) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="MissStitch"><?php percent($MissStitch, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content TornStitch-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Torn Stitch</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tTornStitch" style="font-size:18px"> <?php  r($TornStitch) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="TornStitch"><?php percent($TornStitch, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content CornersOut-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Corners Out</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tCornersOut" style="font-size:18px"> <?php  r($CornersOut) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="CornersOut"><?php percent($CornersOut, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content ZigZagStitch-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">ZigZag Stitch</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tZigZagStitch" style="font-size:18px"> <?php  r($ZigZagStitch) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="ZigZagStitch"><?php percent($ZigZagStitch, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content WrongSewingMargin-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">WrongSewingMargin</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tWrongSewingMargin" style="font-size:18px"> <?php  r($WrongSewingMargin) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="WrongSewingMargin"><?php percent($WrongSewingMargin, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content WrongArtWork-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Wrong Art Work</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tWrongArtWork" style="font-size:18px"> <?php  r($ArtWork) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="WrongArtWork"><?php percent($ArtWork, $check) ?></div>
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
                                            <div class="widget-heading">B-Grade</div>
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
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content LamProblem-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Lam Problem</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tLamProblem" style="font-size:18px"> <?php  r($LamProblem) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="LamProblem"><?php percent($LamProblem, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content TreatOff-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Treat Off</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tTreatOff" style="font-size:18px"> <?php  r($TreatOff) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="TreatOff"><?php percent($TreatOff, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content MissPrinting-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Miss Printing</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tMissPrinting" style="font-size:18px"> <?php  r($MissPrinting) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="MissPrinting"><?php percent($MissPrinting, $check) ?></div>
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
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content LeakPuncture-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Leak Puncture</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tLeakPuncture" style="font-size:18px"> <?php  r($LeakPuncture) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="LeakPuncture"><?php percent($LeakPuncture, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card mb-3 widget-content NozleMove-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Nozzle Move</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tNozleMove" style="font-size:18px"> <?php  r($NozleMove) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="NozleMove"><?php percent($NozleMove, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card mb-3 widget-content CutMark-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">CutMark</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tCutMark" style="font-size:18px"> <?php  r($CutMark) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="CutMark"><?php percent($CutMark, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content Dirty-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Dirty</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tDirty" style="font-size:18px"> <?php  r($Dirty) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="Dirty"><?php percent($Dirty, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-3">
                            <div class="card mb-3 widget-content DevInCircum-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">DevInCircum</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tDevInCircum" style="font-size:18px"> <?php  r($DevInCircum) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="DevInCircum"><?php percent($DevInCircum, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content UnderWght-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Under Weight</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tUnderWght" style="font-size:18px"> <?php  r($UnderWght) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="UnderWght"><?php percent($UnderWght, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card mb-3 widget-content OverWeight-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Over Weight</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tOverWeight" style="font-size:18px"> <?php  r($OverWeight) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="OverWeight"><?php percent($OverWeight, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- internalAirPresure -->
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content internalAirPresure-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Internal Air Presure</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tinternalAirPresure" style="font-size:18px"> <?php  r($internalAirPresure) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="internalAirPresure"><?php percent($internalAirPresure, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-md-3">
                            <div class="card mb-3 widget-content UnHold-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">UnHold</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tUnHold" style="font-size:18px"> <?php  r($UnHold) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="UnHold"><?php percent($UnHold, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-3">
                        <div class="card mb-3 widget-content NeedleMark-div">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Needle Mark</div>
                                        <div class="widget-subheading">Quantity: <strong class="text-primary" id="tNeedleMark" style="font-size:18px"> <?php  r($NeedleMark) ?> </strong></div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-danger" id="NeedleMark"><?php percent($NeedleMark, $check) ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-3 widget-content VolPanelAlligment-div">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Vol Panel Alligment</div>
                                        <div class="widget-subheading">Quantity: <strong class="text-primary" id="tVolPanelAlligment" style="font-size:18px"> <?php  r($VolPanelAlligment) ?> </strong></div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-danger" id="VolPanelAlligment"><?php percent($VolPanelAlligment, $check) ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-3 widget-content Unroundness-div">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Un Roundness</div>
                                        <div class="widget-subheading">Quantity: <strong class="text-primary" id="tUnroundness" style="font-size:18px"> <?php  r($Unroundness) ?> </strong></div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-danger" id="Unroundness"><?php percent($Unroundness, $check) ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-3">
                        <div class="card mb-3 widget-content MaterialTorn-div">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">MaterialTorn</div>
                                        <div class="widget-subheading">Quantity: <strong class="text-primary" id="tMaterialTorn" style="font-size:18px"> <?php  r($MaterialTorn) ?> </strong></div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-danger" id="MaterialTorn"><?php percent($MaterialTorn, $check) ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-3 widget-content CompoitMissPrint-div">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Composit Miss Print</div>
                                        <div class="widget-subheading">Quantity: <strong class="text-primary" id="tCompoitMissPrint" style="font-size:18px"> <?php  r($CompoitMissPrint) ?> </strong></div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-danger" id="CompoitMissPrint"><?php percent($CompoitMissPrint, $check) ?></div>
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

        $('#search').on('click', function(){
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
                data = res.data;
                OpenComposit = 0;
                DailyComposit = 0;
                CompositCornersEdges = 0;
                LooseStitch = 0;
                TornStitch = 0;
                MissStitch = 0;
                CornersOut = 0;
                ZigZagStitch = 0;
                ArtWork = 0;
                WrongSewingMargin = 0;
                MaterialTorn = 0;
                DisColor = 0;
                LamProblem = 0;
                TreatOff = 0;
                MissPrinting = 0;
                Smearing = 0;
                NozleMove = 0;
                LeakPuncture = 0;
                Unroundness = 0;
                CutMark = 0;
                Dirty = 0;
                DevInCircum = 0;
                UnderWght = 0;
                OverWeight = 0;
                internalAirPresure = 0;
                NeedleMark = 0;
                UnHold = 0;
                BGrade = 0;
                VolPanelAlligment = 0;
                CompoitMissPrint = 0;
                check = 0;
                Pass = 0;
                Fail = 0;
                for(i = 0; i < data.length ; i++){
                    OpenComposit += round(data[i].OpenComposit);
                    DailyComposit += round(data[i].DailyComposit);
                    CompositCornersEdges += round(data[i].CompositCornersEdges);
                    LooseStitch += round(data[i].LooseStitch);
                    TornStitch += round(data[i].TornStitch);
                    MissStitch += round(data[i].MissStitch);
                    CornersOut += round(data[i].CornersOut);
                    ZigZagStitch += round(data[i].ZigZagStitch);
                    ArtWork += round(data[i].WrongArtWork);
                    WrongSewingMargin += round(data[i].WrongWrongSewingMargin);
                    MaterialTorn += round(data[i].WrongMaterialTorn);
                    DisColor += round(data[i].DisColor);
                    LamProblem += round(data[i].LamProblem);
                    TreatOff += round(data[i].TreatOff);
                    MissPrinting += round(data[i].MissPrinting);
                    Smearing += round(data[i].Smearing);
                    NozleMove += round(data[i].NozleMove);
                    LeakPuncture += round(data[i].LeakPuncture);
                    Unroundness += round(data[i].Unroundness);
                    CutMark += round(data[i].CutMark);
                    Dirty += round(data[i].Dirty);
                    DevInCircum += round(data[i].DevInCircum);
                    UnderWght += round(data[i].UnderWght);
                    internalAirPresure += round(data[i].UnderWght);
                    NeedleMark += round(data[i].NeedleMark);
                    UnHold += round(data[i].UnHold);
                    BGrade += round(data[i].BGrade);
                    VolPanelAlligment += round(data[i].VolPanelAlligment);
                    CompoitMissPrint += round(data[i].CompoitMissPrint);
                    check += round(data[i].TotalChecked);
                    console.log(data[i].Pass)
                    Pass += round(data[i].Pass);
                }

                    $('#check').text(check)
                    $('#pass').text(Pass)
                    $('#fail').text(check - Pass)

                    $('#OpenComposit').text(percent(OpenComposit, check))
                    $('#tOpenComposit').text(round(OpenComposit))

                    $('#DailyComposit').text(percent(DailyComposit, check))
                    $('#tDailyComposit').text(round(DailyComposit))

                    $('#CompositCornersEdges').text(percent(CompositCornersEdges, check))
                    $('#tCompositCornersEdges').text(round(CompositCornersEdges))

                    $('#LooseStitch').text(percent(LooseStitch, check))
                    $('#tLooseStitch').text(round(LooseStitch))

                    $('#TornStitch').text(percent(TornStitch, check))
                    $('#tTornStitch').text(round(TornStitch))

                    $('#MissStitch').text(percent(MissStitch, check))
                    $('#tMissStitch').text(round(MissStitch))

                    $('#CornersOut').text(percent(CornersOut, check))
                    $('#tCornersOut').text(round(CornersOut))

                    $('#ZigZagStitch').text(percent(ZigZagStitch, check))
                    $('#tZigZagStitch').text(round(ZigZagStitch))

                    $('#WrongArtWork').text(percent(ArtWork, check))
                    $('#tWrongArtWork').text(round(ArtWork))

                    $('#WrongSewingMargin').text(percent(WrongSewingMargin, check))
                    $('#tWrongSewingMargin').text(round(WrongSewingMargin))

                    $('#MaterialTorn').text(percent(MaterialTorn, check))
                    $('#tMaterialTorn').text(round(MaterialTorn))

                    $('#DisColor').text(percent(DisColor, check))
                    $('#tDisColor').text(round(DisColor))

                    $('#LamProblem').text(percent(LamProblem, check))
                    $('#tLamProblem').text(round(LamProblem))

                    $('#NozleMove').text(percent(NozleMove, check))
                    $('#tNozleMove').text(round(NozleMove))

                    $('#Smearing').text(percent(Smearing, check))
                    $('#tSmearing').text(round(Smearing))

                    $('#LeakPuncture').text(percent(LeakPuncture, check))
                    $('#tLeakPuncture').text(round(LeakPuncture))

                    $('#Unroundness').text(percent(Unroundness, check))
                    $('#tUnroundness').text(round(Unroundness))

                    $('#CutMark').text(percent(CutMark, check))
                    $('#tCutMark').text(round(CutMark))

                    $('#Dirty').text(percent(Dirty, check))
                    $('#tDirty').text(round(Dirty))


                    $('#DevInCircum').text(percent(DevInCircum, check))
                    $('#tDevInCircum').text(round(DevInCircum))

                    $('#UnderWght').text(percent(UnderWght, check))
                    $('#tUnderWght').text(UnderWght)

                    $('#OverWeight').text(percent(UnderWght, check))
                    $('#tOverWeight').text(UnderWght)


                    $('#internalAirPresure').text(percent(internalAirPresure, check))
                    $('#tinternalAirPresure').text(round(internalAirPresure))

                    $('#NeedleMark').text(percent(NeedleMark, check))
                    $('#tNeedleMark').text(round(NeedleMark))

                    $('#UnHold').text(percent(UnHold, check))
                    $('#tUnHold').text(round(UnHold))

                    $('#BGrade').text(percent(BGrade, check))
                    $('#tBGrade').text(round(BGrade))
                    $('#CompoitMissPrint').text(percent(CompoitMissPrint, check))
                    $('#tCompoitMissPrint').text(round(CompoitMissPrint))

                    $('#VolPanelAlligment').text(percent(VolPanelAlligment, check))
                    $('#tVolPanelAlligment').text(round(VolPanelAlligment))

                    $('.loader-container').hide()
            })

            $(".all-forms").removeClass('disable-form')

        })


        function sendForm(div, title, img, detail1, detail2){
            $("." +div + "-div").on('click', function(e){
            $('.total').val($("#" +div).text())
            $('.type').val(div)
            $('.quantity').val(($('#t'+div).text()))
            $('.title').val(" <?php echo $title ?> : " + title)
            if(img != ''){
                $('.src').val("<?php echo base_url('assets/qa_assets/ms-defects/') ?>" + img)
            }else{
                $('.src').val("")
            }

            $('.detail').val(detail1)
            $('.detail2').val(detail2)
            $('.totalchecked').val($("#check span").text())
            $('#detail-form').submit();
        })
        }

        $('.widget-content').on('click', function(e){
            $('.start_date').val($('#start_date').val())
            $('.end_date').val($('#end_date').val())
        })

        sendForm('OpenComposit', "Open Composit", "opencomposit.png", "", "" );
        sendForm('DailyComposit', "Dirty Composit", "dirtycomposit.jpg", "", "" );
        sendForm('CompositCornersEdges', "Composit Corners Edges", "", "", "" );
        sendForm('LooseStitch', "Loose Stitch", "loosestitch.jpg", "", "" );
        sendForm('TornStitch', "Torn Stitch", "tornstitch.jpg", "", "" );
        sendForm('MissStitch', "Miss Stitch", "mis stitch.jpg", "", "" );
        sendForm('CornersOut', "Corners Out", "cornersout.jpg", "", "" );
        sendForm('ZigZagStitch', "ZigZag Stitch", "", "", "" );
        sendForm('WrongArtWork', "Wrong Art Work", "", "", "" );
        sendForm('WrongSewingMargin', "Wrong Sewing Margin", "wrongsewingmargin.jpg", "", "" );
        sendForm('MaterialTorn', "Material Torn", "", "", "" );
        sendForm('DisColor', "DisColor", "discolor.jpg", "", "" );
        sendForm('LamProblem', "Lam Problem", "LampProblem.jpg", "", "" );
        sendForm('TreatOff', "Tear Off", "printing-tearoff.jpg", "", "" );
        sendForm('MissPrinting', "Miss Printing", "misprinting.jpg", "", "" );
        sendForm('Smearing', "Smearing", "smearing.jpg", "", "" );
        sendForm('NozleMove', "NozleMove", "nozelmove-clear.jpg", "", "" );
        sendForm('LeakPuncture', "Leak Puncture", "", "", "" );
        sendForm('Unroundness', "Unroundness", "", "", "" );
        sendForm('CutMark', "Cut Mark", "cutmark.jpg", "", "" );
        sendForm('Dirty', "Dirty", "", "", "" );
        sendForm('DevInCircum', "DevInCircum", "", "", "" );
        sendForm('UnderWght', "UnderWght", "", "", "" );
        sendForm('OverWeight', "OverWeight", "", "", "" );
        sendForm('internalAirPresure', "internal AirPresure", "", "", "" );
        sendForm('NeedleMark', "Needle Mark", "needlemark.jpg", "", "" );
        sendForm('UnHold', "Un Mold", "", "", "" );
        sendForm('BGrade', "BGrade", "", "", "" );
        sendForm('VolPanelAlligment', "Vol Panel Alligment", "volve PanelAlligmnent.jpg", "", "" );
        sendForm('CompoitMissPrint', "Composit Miss Print", "compositmisprinting.jpg", "", "" );
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
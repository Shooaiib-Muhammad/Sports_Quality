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
                            <i class='subheader-icon fal fa-chart-area'></i> HS Quality</span>

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

    $LooseStitch = 0;
    $UnStitched = 0;
    $OverStitch = 0;
    $TornStitch = 0;
    $LPS = 0;
    $FullPuncture = 0;
    $ZigZag = 0;
    $ArtWork = 0;
    $MissPanel = 0;
    $NozzleMove = 0;
    $DisColor = 0;
    $MakerDirty = 0;
    $BladderDrop = 0;
    $LatexBladder = 0;
    $NozzleMoveInSalaBladder = 0;
    $LaminationProb = 0;
    $PUBladder = 0;
    $ColorMark = 0;
    $CutMark = 0;
    $FactoryFaultBladderDrop = 0;
    $ThreadDiscolor = 0;
    $PrintingCrack = 0;
    $Smearing = 0;
    $Dirty = 0;
    $NeedleMark = 0;
    $SettingOut = 0;
    $FabricImpression = 0;
    $ShadeDiff = 0;
    $FactoryFaultDirty = 0;
    $NozzelDrop = 0;
    $JointProblem = 0;
    $Lamination = 0;
    $Others = 0;
    $Puncture = 0;
    $MatTorn = 0;
    $UnMold = 0;
    $check = 0;
    $Pass = 0;
    $Fail = 0;


    foreach ($data as $d) {
            $LooseStitch = $LooseStitch + $d->LooseStitch;
            $UnStitched = $UnStitched + $d->UnStitched;
            $OverStitch = $OverStitch + $d->OverStitch;
            $LooseStitch = $LooseStitch + $d->LooseStitch;
            $TornStitch = $TornStitch + $d->TornStitch;
            $LPS = $LPS + $d->LPS;
            $FullPuncture = $FullPuncture + $d->FullPuncture;
            $ZigZag = $ZigZag + $d->ZigZag;
            $MissPanel = $MissPanel + $d->MissPanel;
            $NozzleMove = $NozzleMove + $d->NozzleMove;
            $ArtWork = $ArtWork + $d->ArtWork;
            $DisColor = $DisColor + $d->DisColor;
            $NeedleMark = $NeedleMark + $d->NeedleMark;
            $MakerDirty = $MakerDirty + $d->MakerDirty;
            $BladderDrop = $BladderDrop + $d->BladderDrop;
            $LatexBladder = $LatexBladder + $d->LatexBladder;
            $LaminationProb = $LaminationProb + $d->LaminationProb;
            $PUBladder = $PUBladder + $d->PUBladder;
            $NozzleMoveInSalaBladder = $NozzleMoveInSalaBladder + $d->NozzleMoveInSalaBladder;
            $ColorMark = $ColorMark + $d->ColorMark;
            $CutMark = $CutMark + $d->CutMark;
            $FactoryFaultBladderDrop = $FactoryFaultBladderDrop + $d->FactoryFaultBladderDrop;
            $ThreadDiscolor = $ThreadDiscolor + $d->ThreadDiscolor;
            $PrintingCrack = $PrintingCrack + $d->PrintingCrack;
            $Smearing = $Smearing + $d->Smearing;
            $FabricImpression = $FabricImpression + $d->FabricImpression;
            $SettingOut = $SettingOut + $d->SettingOut;
            $NeedleMark = $NeedleMark + $d->NeedleMark;
            $ShadeDiff = $ShadeDiff + $d->ShadeDiff;
            $FactoryFaultDirty = $FactoryFaultDirty + $d->FactoryFaultDirty;
            $MatTorn = $MatTorn + $d->MatTorn;
            $Others = $Others + $d->Others;
            $Dirty = $Dirty + $d->Dirty;
            $JointProblem = $JointProblem + $d->JointProblem;
            $Lamination = $Lamination + $d->Lamination;
            $UnMold = $UnMold + $d->UnMold;
            $Puncture = $Puncture + $d->Puncture;
            $NozzelDrop = $NozzelDrop + $d->NozzelDrop;
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

                            <div class="col-md-3">
                                <div class="card mb-3 widget-content UnStitched-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Un Stitched</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tUnStitched" style="font-size:18px"> <?php  r($UnStitched) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="UnStitched"><?php percent($UnStitched, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card mb-3 widget-content OverStitch-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Over Stitch</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tOverStitch" style="font-size:18px"> <?php  r($OverStitch) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="OverStitch"><?php percent($OverStitch, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card mb-3 widget-content NozzelDrop-div">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Nozzel Drop</div>
                                                <div class="widget-subheading">Quantity: <strong class="text-primary" id="tNozzelDrop" style="font-size:18px"> <?php  r($NozzelDrop) ?> </strong></div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-danger" id="NozzelDrop"><?php percent($NozzelDrop, $check) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content LPS-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">LPS</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tLPS" style="font-size:18px"> <?php  r($LPS) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="LPS"><?php percent($LPS, $check) ?></div>
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
                            <div class="card mb-3 widget-content FullPuncture-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Full Puncture</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tFullPuncture" style="font-size:18px"> <?php  r($FullPuncture) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="FullPuncture"><?php percent($FullPuncture, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content ZigZag-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">ZigZag</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tZigZag" style="font-size:18px"> <?php  r($ZigZag) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="ZigZag"><?php percent($ZigZag, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content MissPanel-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Miss Panel</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tMissPanel" style="font-size:18px"> <?php  r($MissPanel) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="MissPanel"><?php percent($MissPanel, $check) ?></div>
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
                            <div class="card mb-3 widget-content FabricImpression-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Fabric Impression</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tFabricImpression" style="font-size:18px"> <?php  r($FabricImpression) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="FabricImpression"><?php percent($FabricImpression, $check) ?></div>
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
                        <div class="card mb-3 widget-content PUBladder-div">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">PUBladder</div>
                                        <div class="widget-subheading">Quantity: <strong class="text-primary" id="tPUBladder" style="font-size:18px"> <?php  r($PUBladder) ?> </strong></div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-danger" id="PUBladder"><?php percent($PUBladder, $check) ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="col-md-3">
                            <div class="card mb-3 widget-content MakerDirty-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Maker Dirty</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tMakerDirty" style="font-size:18px"> <?php  r($MakerDirty) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="MakerDirty"><?php percent($MakerDirty, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content BladderDrop-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Bladder Drop</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tBladderDrop" style="font-size:18px"> <?php  r($BladderDrop) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="BladderDrop"><?php percent($BladderDrop, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content LatexBladder-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Latex Bladder</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tLatexBladder" style="font-size:18px"> <?php  r($LatexBladder) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="LatexBladder"><?php percent($LatexBladder, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content LaminationProb-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Lamination Prob</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tLaminationProb" style="font-size:18px"> <?php  r($LaminationProb) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="LaminationProb"><?php percent($LaminationProb, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card mb-3 widget-content NozzleMoveInSalaBladder-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Nozzle Move In SalaBladder</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tNozzleMoveInSalaBladder" style="font-size:18px"> <?php  r($NozzleMoveInSalaBladder) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="NozzleMoveInSalaBladder"><?php percent($NozzleMoveInSalaBladder, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card mb-3 widget-content ColorMark-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Color Mark</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tColorMark" style="font-size:18px"> <?php  r($ColorMark) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="ColorMark"><?php percent($ColorMark, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3 widget-content FactoryFaultBladderDrop-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Factory Fault Bladder Drop</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tFactoryFaultBladderDrop" style="font-size:18px"> <?php  r($FactoryFaultBladderDrop) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="FactoryFaultBladderDrop"><?php percent($FactoryFaultBladderDrop, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-3">
                            <div class="card mb-3 widget-content CutMark-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Cut Mark</div>
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
                            <div class="card mb-3 widget-content ThreadDiscolor-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Thread Discolor</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tThreadDiscolor" style="font-size:18px"> <?php  r($ThreadDiscolor) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="ThreadDiscolor"><?php percent($ThreadDiscolor, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card mb-3 widget-content PrintingCrack-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Printing Crack</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tPrintingCrack" style="font-size:18px"> <?php  r($PrintingCrack) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="PrintingCrack"><?php percent($PrintingCrack, $check) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Smearing -->
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
                            <div class="card mb-3 widget-content SettingOut-div">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">SettingOut</div>
                                            <div class="widget-subheading">Quantity: <strong class="text-primary" id="tSettingOut" style="font-size:18px"> <?php  r($SettingOut) ?> </strong></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger" id="SettingOut"><?php percent($SettingOut, $check) ?></div>
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
                        <div class="card mb-3 widget-content MatTorn-div">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">MatTorn</div>
                                        <div class="widget-subheading">Quantity: <strong class="text-primary" id="tMatTorn" style="font-size:18px"> <?php  r($MatTorn) ?> </strong></div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-danger" id="MatTorn"><?php percent($MatTorn, $check) ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-3 widget-content ShadeDiff-div">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Shade Diff</div>
                                        <div class="widget-subheading">Quantity: <strong class="text-primary" id="tShadeDiff" style="font-size:18px"> <?php  r($ShadeDiff) ?> </strong></div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-danger" id="ShadeDiff"><?php percent($ShadeDiff, $check) ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card mb-3 widget-content NozzleMove-div">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">NozzleMove</div>
                                        <div class="widget-subheading">Quantity: <strong class="text-primary" id="tNozzleMove" style="font-size:18px"> <?php  r($NozzleMove) ?> </strong></div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-danger" id="NozzleMove"><?php percent($NozzleMove, $check) ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-3 widget-content FactoryFaultDirty-div">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Factory Fault Dirty</div>
                                        <div class="widget-subheading">Quantity: <strong class="text-primary" id="tFactoryFaultDirty" style="font-size:18px"> <?php  r($FactoryFaultDirty) ?> </strong></div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-danger" id="FactoryFaultDirty"><?php percent($FactoryFaultDirty, $check) ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-3 widget-content JointProblem-div">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Joint Problem</div>
                                        <div class="widget-subheading">Quantity: <strong class="text-primary" id="tJointProblem" style="font-size:18px"> <?php  r($JointProblem) ?> </strong></div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-danger" id="JointProblem"><?php percent($JointProblem, $check) ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-3 widget-content Lamination-div">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Lamination</div>
                                        <div class="widget-subheading">Quantity: <strong class="text-primary" id="tLamination" style="font-size:18px"> <?php  r($Lamination) ?> </strong></div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-danger" id="Lamination"><?php percent($Lamination, $check) ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-3 widget-content Others-div">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Others</div>
                                        <div class="widget-subheading">Quantity: <strong class="text-primary" id="tOthers" style="font-size:18px"> <?php  r($Others) ?> </strong></div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-danger" id="Others"><?php percent($Others, $check) ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-3 widget-content Puncture-div">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Puncture</div>
                                        <div class="widget-subheading">Quantity: <strong class="text-primary" id="tPuncture" style="font-size:18px"> <?php  r($Puncture) ?> </strong></div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-danger" id="Puncture"><?php percent($Puncture, $check) ?></div>
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
                    <div class="col-md-3">
                        <div class="card mb-3 widget-content UnMold-div">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">UnMold</div>
                                        <div class="widget-subheading">Quantity: <strong class="text-primary" id="tUnMold" style="font-size:18px"> <?php  r($UnMold) ?> </strong></div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-danger" id="UnMold"><?php percent($UnMold, $check) ?></div>
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
        <input type="hidden" name="checked" class="checked">
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
            $('#search').on('click', function(){
            $('.loader-container').show()
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
                LooseStitch = 0;
                UnStitched = 0;
                OverStitch = 0;
                TornStitch = 0;
                LPS = 0;
                FullPuncture = 0;
                ZigZag = 0;
                ArtWork = 0;
                MissPanel = 0;
                NozzleMove = 0;
                DisColor = 0;
                MakerDirty = 0;
                BladderDrop = 0;
                LatexBladder = 0;
                NozzleMoveInSalaBladder = 0;
                LaminationProb = 0;
                PUBladder = 0;
                ColorMark = 0;
                CutMark = 0;
                FactoryFaultBladderDrop = 0;
                Dirty = 0;
                ThreadDiscolor = 0;
                PrintingCrack = 0;
                Smearing = 0;
                NeedleMark = 0;
                SettingOut = 0;
                FabricImpression = 0;
                ShadeDiff = 0;
                FactoryFaultDirty = 0;
                MatTorn = 0;
                Others = 0;
                UnMold = 0;
                Puncture = 0;
                check = 0;
                Pass = 0;
                Fail = 0;
                for(i = 0; i < data.length ; i++){
                    LooseStitch += round(data[i].LooseStitch);
                    UnStitched += round(data[i].UnStitched);
                    OverStitch += round(data[i].OverStitch);
                    LooseStitch += round(data[i].LooseStitch);
                    TornStitch += round(data[i].TornStitch);
                    LPS += round(data[i].LPS);
                    FullPuncture += round(data[i].FullPuncture);
                    ZigZag += round(data[i].ZigZag);
                    ArtWork += round(data[i].ArtWork);
                    MissPanel += round(data[i].MissPanel);
                    NozzleMove += round(data[i].NozzleMove);
                    DisColor += round(data[i].DisColor);
                    NeedleMark += round(data[i].NeedleMark);
                    MakerDirty += round(data[i].MakerDirty);
                    BladderDrop += round(data[i].BladderDrop);
                    LatexBladder += round(data[i].LatexBladder);
                    NozzleMoveInSalaBladder += round(data[i].NozzleMoveInSalaBladder);
                    LaminationProb += round(data[i].LaminationProb);
                    PUBladder += round(data[i].PUBladder);
                    ColorMark += round(data[i].ColorMark);
                    Dirty += round(data[i].Dirty);
                    CutMark += round(data[i].CutMark);
                    ThreadDiscolor += round(data[i].ThreadDiscolor);
                    Smearing += round(data[i].ThreadDiscolor);
                    NeedleMark += round(data[i].NeedleMark);
                    SettingOut += round(data[i].SettingOut);
                    FabricImpression += round(data[i].FabricImpression);
                    ShadeDiff += round(data[i].ShadeDiff);
                    FactoryFaultDirty += round(data[i].FactoryFaultDirty);
                    MatTorn =  round(data[i].MatTorn);
                    Others =  round(data[i].Others);
                    JointProblem +=  round(data[i].JointProblem);
                    Lamination +=  round(data[i].Lamination);
                    UnMold +=  round(data[i].UnMold);
                    Puncture +=  round(data[i].Puncture);
                    NozzelDrop +=  round(data[i].NozzelDrop);
                    check += round(data[i].TotalChecked);
                    Pass += round(data[i].Pass);
                }

                    $('#check').text(check)
                    $('#pass').text(Pass)
                    $('#fail').text(check - Pass)

                    $('#LooseStitch').text(percent(LooseStitch, check))
                    $('#tLooseStitch').text(round(LooseStitch))

                    $('#UnStitched').text(percent(UnStitched, check))
                    $('#tUnStitched').text(round(UnStitched))

                    $('#OverStitch').text(percent(OverStitch, check))
                    $('#tOverStitch').text(round(OverStitch))

                    $('#LooseStitch').text(percent(LooseStitch, check))
                    $('#tLooseStitch').text(round(LooseStitch))

                    $('#TornStitch').text(percent(TornStitch, check))
                    $('#tTornStitch').text(round(TornStitch))

                    $('#LPS').text(percent(LPS, check))
                    $('#tLPS').text(round(LPS))

                    $('#FullPuncture').text(percent(FullPuncture, check))
                    $('#tFullPuncture').text(round(FullPuncture))

                    $('#ZigZag').text(percent(ZigZag, check))
                    $('#tZigZag').text(round(ZigZag))

                    $('#ArtWork').text(percent(ArtWork, check))
                    $('#tArtWork').text(round(ArtWork))

                    $('#MissPanel').text(percent(MissPanel, check))
                    $('#tMissPanel').text(round(MissPanel))

                    $('#NozzleMove').text(percent(NozzleMove, check))
                    $('#tNozzleMove').text(round(NozzleMove))

                    $('#DisColor').text(percent(DisColor, check))
                    $('#tDisColor').text(round(DisColor))

                    $('#NeedleMark').text(percent(NeedleMark, check))
                    $('#tNeedleMark').text(round(NeedleMark))

                    $('#NozzleMoveInSalaBladder').text(percent(NozzleMoveInSalaBladder, check))
                    $('#tNozzleMoveInSalaBladder').text(round(NozzleMoveInSalaBladder))

                    $('#LatexBladder').text(percent(LatexBladder, check))
                    $('#tLatexBladder').text(round(LatexBladder))

                    $('#LaminationProb').text(percent(LaminationProb, check))
                    $('#tLaminationProb').text(round(LaminationProb))

                    $('#PUBladder').text(percent(PUBladder, check))
                    $('#tPUBladder').text(round(PUBladder))

                    $('#ColorMark').text(percent(ColorMark, check))
                    $('#tColorMark').text(round(ColorMark))

                    $('#Dirty').text(percent(Dirty, check))
                    $('#tDirty').text(round(Dirty))


                    $('#CutMark').text(percent(CutMark, check))
                    $('#tCutMark').text(round(CutMark))

                    $('#ThreadDiscolor').text(percent(ThreadDiscolor, check))
                    $('#tThreadDiscolor').text(ThreadDiscolor)

                    $('#PrintingCrack').text(percent(ThreadDiscolor, check))
                    $('#tPrintingCrack').text(ThreadDiscolor)


                    $('#Smearing').text(percent(Smearing, check))
                    $('#tSmearing').text(round(Smearing))

                    $('#NeedleMark').text(percent(NeedleMark, check))
                    $('#tNeedleMark').text(round(NeedleMark))

                    $('#SettingOut').text(percent(SettingOut, check))
                    $('#tSettingOut').text(round(SettingOut))

                    $('#FabricImpression').text(percent(FabricImpression, check))
                    $('#tFabricImpression').text(round(FabricImpression))
                    $('#FactoryFaultDirty').text(percent(FactoryFaultDirty, check))
                    $('#tFactoryFaultDirty').text(round(FactoryFaultDirty))
                    $('#Puncture').text(percent(Puncture, check))
                    $('#tPuncture').text(round(Puncture))
                    $('#MatTorn').text(percent(MatTorn, check))
                    $('#tMatTorn').text(round(MatTorn))
                    $('#UnMold').text(percent(UnMold, check))
                    $('#tUnMold').text(round(UnMold))

                    $('#ShadeDiff').text(percent(ShadeDiff, check))
                    $('#tShadeDiff').text(round(ShadeDiff))

                    $('.loader-container').hide()
            })

            $(".all-forms").removeClass('disable-form')
        }

        search();
        $('#search').on('click', function(){
            search();
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
            $('.checked').val($('#checked').text())
            $('#detail-form').submit();
        })
        }

        $('.widget-content').on('click', function(e){
            $('.start_date').val($('#start_date').val())
            $('.end_date').val($('#end_date').val())
        })

        sendForm('LooseStitch', "Loose Stitch", "", "", "" );
        sendForm('UnStitched', "Un Stitched", "", "", "" );
        sendForm('OverStitch', "Over Stitch", "", "", "" );
        sendForm('LooseStitch', "Loose Stitch", "", "", "" );
        sendForm('TornStitch', "Torn Stitch", "", "", "" );
        sendForm('LPS', "LPS", "", "", "" );
        sendForm('FullPuncture', "Full Puncture", "", "", "" );
        sendForm('ZigZag', "ZigZag", "", "", "" );
        sendForm('ArtWork', "Wrong Art Work", "", "", "" );
        sendForm('MissPanel', "Miss Panel", "", "", "" );
        sendForm('NozzleMove', "Nozzle Move", "", "", "" );
        sendForm('DisColor', "DisColor", "", "", "" );
        sendForm('NeedleMark', "Needle Mark", "", "", "" );
        sendForm('MakerDirty', "Maker Dirty", "", "", "" );
        sendForm('BladderDrop', "Bladder Drop", "", "", "" );
        sendForm('LatexBladder', "LatexBladder", "", "", "" );
        sendForm('NozzleMoveInSalaBladder', "Nozzle Move In SalaBladder", "", "", "" );
        sendForm('LaminationProb', "LaminationProb", "", "", "" );
        sendForm('PUBladder', "PUBladder", "", "", "" );
        sendForm('ColorMark', "ColorMark", "", "", "" );
        sendForm('Dirty', "Dirty", "", "", "" );
        sendForm('CutMark', "CutMark", "", "", "" );
        sendForm('ThreadDiscolor', "ThreadDiscolor", "", "", "" );
        sendForm('PrintingCrack', "PrintingCrack", "", "", "" );
        sendForm('Smearing', "Smearing", "", "", "" );
        sendForm('NeedleMark', "Needle Mark", "", "", "" );
        sendForm('SettingOut', "SettingOut", "", "", "" );
        sendForm('FabricImpression', "FabricImpression", "", "", "" );
        sendForm('ShadeDiff', "ShadeDiff", "", "", "" );
        sendForm('FactoryFaultDirty', "FactoryFaultDirty", "", "", "" );
        sendForm('Puncture', "Puncture", "", "", "" );
        sendForm('MatTorn', "MatTorn", "", "", "" );
        sendForm('UnMold', "UnMold", "", "", "" );

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

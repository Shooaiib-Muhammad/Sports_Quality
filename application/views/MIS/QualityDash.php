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
                    <ol class="breadcrumb page-breadcrumb">
               
                        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                    </ol>
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i> QD (Quality Dashboard)</span>

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
    a.w-link{
        text-decoration: none;
    }
</style>

<body>

<div id="right-panel" class="right-panel">


      
<div class="container-fluid">
<div id="panel-1" class="panel">

    <div class="row">
    
        <div class="col-md-6 col-xl-4">
        <a href="<?php echo base_url("MIS/Quality/hs") ?>" class="w-link">  
            <div class="card mb-3 widget-content bg-midnight-bloom">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">B34001</div>
                        <div class="widget-subheading">Hand Stitch Ball</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white">
                        <span>HS</span></div>
                    </div>
                </div>
            </div>
        </a>
        </div>
        <div class="col-md-6 col-xl-4">
        <a href="<?php echo base_url("MIS/Quality/competition") ?>" class="w-link">  
            <div class="card mb-3 widget-content bg-arielle-smile">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">B34002</div>
                        <div class="widget-subheading">Competition Ball</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>COMPETITION</span></div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-4">
        <a href="<?php echo base_url("MIS/Quality/finale") ?>" class="w-link">  
            <div class="card mb-3 widget-content bg-grow-early">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">B34003</div>
                        <div class="widget-subheading">Finale Ball</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>FINALE</span></div>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-4">
        <a href="<?php echo base_url("MIS/Quality/urban") ?>" class="w-link">  
            <div class="card mb-3 widget-content bg-happy-green">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">B34004</div>
                        <div class="widget-subheading">Urban Ball</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>URBAN</span></div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-4">
        <a href="<?php echo base_url("MIS/Quality/ms") ?>" class="w-link">  
            <div class="card mb-3 widget-content bg-night-sky">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">B34005</div>
                        <div class="widget-subheading">Machine Stitch Ball</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>MS</span></div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-4">
        <a href="<?php echo base_url("MIS/Quality/amb") ?>" class="w-link">  
            <div class="card mb-3 widget-content bg-mean-fruit">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">B34006</div>
                        <div class="widget-subheading">Airless Mini Ball</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>AMB</span></div>
                    </div>
                </div>
            </div>
        </a>
        </div>
    </div>
</div>


<script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
      <script type="text/javascript">
          /* Activate smart panels */
          $('#js-page-content').smartPanel();
      </script>
<?php
}else{
    redirect('Welcome/index');
}
?>

</div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>

<?php 
}
?>
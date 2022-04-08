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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div id="right-panel" class="right-panel">


      
<div class="container-fluid p-2">
<div id="panel-1" class="panel">

    <div class="row">
    
        <div class="col-md-4">
        <a href="<?php echo base_url("MIS/Quality/hs") ?>" class="w-link">  
            <div class="card mb-3 widget-content" style="background: rgb(31,103,138);
background: linear-gradient(90deg, rgba(31,103,138,1) 18%, rgba(51,86,110,1) 89%);">
                <div class="widget-content-wrapper text-white">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="widget-content-left p-1">
                        <div class="widget-heading"><h6><b>B34001</b></h6></div>
                        <div class="widget-subheading" >Hand Stitch Ball</div>
                    </div>
                        </div>
                        <div class="col-md-6">
                        
                        <div class="widget-content-right p-1">
                        <div class="widget-numbers text-white">
                        <span class="h4 font-weight-bold d-flex justify-content-end text-end">HS</span>
                    </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        </div>
        <div class="col-md-4">
        <a href="<?php echo base_url("MIS/Quality/competition") ?>" class="w-link">  
            <div class="card mb-3 widget-content"  style="background: rgb(29,179,196);
background: linear-gradient(90deg, rgba(29,179,196,1) 25%, rgba(69,198,213,1) 50%, rgba(81,177,189,1) 75%);">
                <div class="widget-content-wrapper text-white">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="widget-content-left p-1">
                        <div class="widget-heading"><b>B34002</b></div>
                        <div class="widget-subheading">Competition Ball</div>
                    </div>
                        </div>
                        <div class="col-md-6">
                        <div class="widget-content-right p-1">
                        <div class="widget-numbers text-white">
                            <span class="h4 font-weight-bold d-flex justify-content-end text-end">COMPETITION</span>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-4">
        <a href="<?php echo base_url("MIS/Quality/finale") ?>" class="w-link">  
            <div class="card mb-3 widget-content bg-grow-early" style="background: rgb(61,171,97);
background: linear-gradient(90deg, rgba(61,171,97,1) 10%, rgba(164,215,172,1) 50%, rgba(61,171,97,1) 90%);">
                <div class="widget-content-wrapper text-white">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="widget-content-left p-1">
                        <div class="widget-heading"><b>B34003</b></div>
                        <div class="widget-subheading">Finale Ball</div>
                    </div>
                        </div>
                        <div class="col-md-6">
                        <div class="widget-content-right p-1">
                        <div class="widget-numbers text-white">
                            <span class="h4 font-weight-bold d-flex justify-content-end text-end">FINALE</span>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        <a href="<?php echo base_url("MIS/Quality/urban") ?>" class="w-link">  
            <div class="card mb-3 widget-content" style="background: rgb(148,171,61);
background: linear-gradient(90deg, rgba(148,171,61,0.9332107843137255) 28%, rgba(74,166,74,1) 74%);">
                <div class="widget-content-wrapper text-white">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="widget-content-left p-2">
                        <div class="widget-heading"><b>B34004</b></div>
                        <div class="widget-subheading">Urban Ball</div>
                    </div>
                        </div>
                        <div class="col-md-6">
                        <div class="widget-content-right p-2">
                        <div class="widget-numbers text-white">
                            <span class="h4 font-weight-bold d-flex justify-content-end text-end">URBAN</span>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-4">
        <a href="<?php echo base_url("MIS/Quality/ms") ?>" class="w-link">  
            <div class="card mb-3 widget-content" style="background: rgb(74,119,166);
background: linear-gradient(90deg, rgba(74,119,166,1) 10%, rgba(61,156,171,0.9500175070028011) 54%, rgba(74,119,166,0.9444152661064426) 90%);">
                <div class="widget-content-wrapper text-white">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="widget-content-left p-2">
                        <div class="widget-heading"><b>B34005</b></div>
                        <div class="widget-subheading">Machine Stitch Ball</div>
                    </div>
                        </div>
                        <div class="col-md-6">
                        <div class="widget-content-right p-2">
                        <div class="widget-numbers text-white">
                            <span class="h4 font-weight-bold d-flex justify-content-end text-end">MS</span>
                        </div>
                    </div>
                        </div>
                    </div>

                </div>
            </div>
            </a>
        </div>
        <div class="col-md-4">
        <a href="<?php echo base_url("MIS/Quality/amb") ?>" class="w-link">  
            <div class="card mb-3 widget-content" style="background: rgb(210,151,66);
background: linear-gradient(90deg, rgba(210,151,66,1) 10%, rgba(106,182,43,1) 50%, rgba(210,151,66,0.7455357142857143) 90%);">
                <div class="widget-content-wrapper text-white">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="widget-content-left p-2">
                        <div class="widget-heading"><b>B34006</b></div>
                        <div class="widget-subheading">Airless Mini Ball</div>
                    </div>
                        </div>
                        <div class="col-md-6">
                        <div class="widget-content-right p-2">
                        <div class="widget-numbers text-white">
                            <span class="h4 font-weight-bold d-flex justify-content-end text-end">AMB</span>
                        </div>
                    </div>
                        </div>
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
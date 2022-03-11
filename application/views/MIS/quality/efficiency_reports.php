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
                            <i class='subheader-icon fal fa-chart-area'></i>Efficiency</span>

                        </h1>
                    </div>
                    <!doctype html>
<?php
if ($this->session->userdata('userStus')==1) {
?>
<html class="no-js" lang="en">
<!--<![endif]-->

<link href="<?php link_file('assets/qa_assets/main.css')?>" rel="stylesheet">

<!-- <link href="https://cdn.datatables.net/rowgroup/1.1.1/css/rowGroup.dataTables.min.css" rel="stylesheet"> -->
<style>
.loader-container {
    background: #000;
    position: absolute;
    top: 0;
    left: 0;
    background: #000;
    opacity: 0.5;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
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
    0% {
        -webkit-transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
    }
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

table.dataTable tr.dtrg-group td {
    background-color: #e0e0e0;
    text-align: left;
}

table.dataTable tr.dtrg-group.dtrg-level-0 td {
    font-weight: bold
}

table.dataTable tr.dtrg-group.dtrg-level-1 td,
table.dataTable tr.dtrg-group.dtrg-level-2 td {
    background-color: #f0f0f0;
    padding-top: 0.25em;
    padding-bottom: 0.25em;
    padding-left: 2em;
    font-size: 0.9em
}

table.dataTable tr.dtrg-group.dtrg-level-2 td {
    background-color: #f3f3f3
}

a.w-link {
    text-decoration: none;
}
</style>

<body>
  
    <div id="right-panel" class="right-panel">
       
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-2">
                            <div class="position-relative form-group">
                                <label for="factory" class="">Factory Code</label>
                                <select name="factory" id="factory" class="form-control">
                                    <option value="">Select Factory Code</option>
                                    
                                    <option value="B34002">Competition Ball</option>
                                    <option value="B34003">Finale Ball</option>
                                    <option value="B34004">Urban Ball</option>
                                    <option value="B34005">Machine Stitch Ball</option>
                                    <option value="B34006">Airless Mini Ball</option>
                                    <option value="B34007">LFB BAll</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="position-relative form-group">
                                <label for="start_date" class="">Start Date</label>
                                <input name="start_date" id="start_date" type="date" class="form-control"
                                    value="<?php current_date(); ?>">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="position-relative form-group">
                                <label for="end_date" class="">End Date</label>
                                <input name="end_date" id="end_date" type="date" class="form-control"
                                    value="<?php current_date(); ?>">
                            </div>
                        </div>
                            <div class="col-md-2">
                                <div class="position-relative form-group">
                                    <button class="btn btn-success btn-block"  id="search" name="keyword"
                                        style="margin-top:1.75rem; font-size:1.05rem;">Search</button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="col-12" id="content">
                </div>
            </div>
        </div>
        <?php

         $this->load->View('AdminFooter');
        ?>
        
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
        <script type="text/javascript">
          /* Activate smart panels */
          $('#js-page-content').smartPanel();
          </script>

<script>


$(document).ready(function(){
  $("#search").on('click',function(){
    input = $("#factory").val();
     if(input==''){
        $('#content').html(
                '<h4 style="font-size: 30px" >Please select a factory code</h4>')
     }else
        {
            switch(input){
                case 'B34002':
                CB();
                break;
                case 'B34003':
                FB();
                break;
                case 'B34004':
                UB();
                break;
                case 'B34005':
                MSB();
                break;
                case 'B34006':
                AMB();
                break;
                case 'B34007':
                LF();
                break;
                default:
                break;
            }
            
       
        }
  });
});
function CB(){
            start_date = $('#start_date').val();
           end_date = $('#end_date').val();
            factory=$('#factory').val();
            url = "<?php echo base_url('MIS/Efficiency/getCB/') ?>";
            //"+ start_date + "/" + end_date+ "/"+ factory
          
            $.post(url,{start_date,end_date,factory } ,function(data) {
          
                $('#content').html(data);
            })
        }
        function FB(){
            start_date = $('#start_date').val();
           end_date = $('#end_date').val();
            factory=$('#factory').val();
            url = "<?php echo base_url('MIS/Efficiency/getFB/') ?>";
            //"+ start_date + "/" + end_date+ "/"+ factory
            //alert(url);
            $.post(url, {start_date,end_date,factory }, function(data) {
          
                $('#content').html(data);
            })
        }
        function UB(){
            start_date = $('#start_date').val();
           end_date = $('#end_date').val();
            factory=$('#factory').val();
            url = "<?php echo base_url('MIS/Efficiency/getUB/') ?>";
            //"+ start_date + "/" + end_date+ "/"+ factory
            //alert(url);
            $.post(url,{start_date,end_date,factory }, function(data) {
          
                $('#content').html(data);
            })
        }
        function MSB(){
            start_date = $('#start_date').val();
            end_date = $('#end_date').val();
            factory=$('#factory').val();
            url = "<?php echo base_url('MIS/Efficiency/getMSB/') ?>";
           
            $.post(url,{start_date,end_date,factory }, function(data) {
          
                $('#content').html(data);
            })
        }
        function AMB(){
            start_date = $('#start_date').val();
           end_date = $('#end_date').val();
            factory=$('#factory').val();
            url = "<?php echo base_url('MIS/Efficiency/getAMB/') ?>";
            
            $.post(url,{start_date,end_date,factory }, function(data) {
          
                $('#content').html(data);
            })
        }
        function LF(){
            start_date = $('#start_date').val();
           end_date = $('#end_date').val();
            factory=$('#factory').val();
            url = "<?php echo base_url('MIS/Efficiency/getLF/') ?>";
           
            $.post(url,{start_date,end_date,factory}, function(data) {
          
                $('#content').html(data);
            })
        }
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
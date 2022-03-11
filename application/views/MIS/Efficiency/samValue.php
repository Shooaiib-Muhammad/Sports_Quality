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
                            <i class='subheader-icon fal fa-chart-area'></i>samValue</span>

                        </h1>
                    </div>
                    <!doctype html>
<?php if ($this->session->userdata('userStus') == 1) { ?>
<html class="no-js" lang="en">
<!--<![endif]-->
<link href="<?php link_file('assets/qa_assets/main.css'); ?>" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
                      
                              <div class="col-md-2" style="display:none">
                            <div class="position-relative form-group">
                                <input name="clientID" id="clientID" type="text" class="form-control" value=""
                                   >
                                      </div>
                        </div>
                       <div class="col-md-2" style="display:none"> 
                            <div class="position-relative form-group">
                                <input name="modelID" id="modelID" type="text" class="form-control" value=""
                                   >
                                               </div>
                        </div>
                        <div class="col-md-2" style="display:none">
                            <div class="position-relative form-group">
                                <input name="articleID" id="articleID" type="text" class="form-control" value=""
                                   >
                                    </div>
                        </div>
                        <div class="col-md-2" >
                            <div class="position-relative form-group">
                                <label for="factory" class="">Article</label>
                                <select name="factory" id="factory" class="form-control" onchange="loadData()">
                                      <option value="">Select Article Code</option>
                                   

                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="position-relative form-group">
                                <label  class="">Model Name</label>
                                <input name="model" id="model" type="text" class="form-control" value=""
                                   >
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="position-relative form-group">
                                <label  class="">Factory Code</label>
                                <input name="factoryCode" id="factoryCode" type="text" class="form-control"
                                   value="">
                            </div>
                        </div>
                          <div class="col-md-2">
                            <div class="position-relative form-group">
                                <label  class="">SAM Forming </label>
                                <input name="forming" id="forming" type="number" class="form-control"
                                   value="">
                            </div>
                        </div>
                          <div class="col-md-2">
                            <div class="position-relative form-group">
                                <label  class="">SAM Packing</label>
                                <input name="packing" id="packing" type="number" class="form-control"
                                   value="">
                            </div>
                        </div>
                         <div class="col-md-2">
                            <div class="position-relative form-group">
                                <label  class="">Working No</label>
                                <input name="workno" id="workno" type="text" class="form-control" readonly
                                   value="">
                            </div>
                        </div>
                            <div class="col-md-2">
                                <div class="position-relative form-group">
                                    <button class="btn btn-success btn-block"  id="update" 
                                        style="margin-top:1.75rem; font-size:1.05rem;">Update</button>
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
       
        
<script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
      <script type="text/javascript">



      

          /* Activate smart panels */
          $('#js-page-content').smartPanel();
      </script>
      <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
  
  <script src="<?php echo base_url(); ?>/Assets/js/select2.min.js"></script>
<script>


$(document).ready(function(){

 $('#factory').select2();
  url = "<?php echo base_url('MIS/Efficiency/samValue1/'); ?>";

            $.get(url, function(data) {
          let parsed=JSON.parse(data);
          var appendArticle='';
                console.log(parsed);
                parsed.forEach(element => {

                  appendArticle+=`
                 
                  <option value='${element.ArtCode}'>${element.ArtCode}</option>`
                })
               $("#factory").append(appendArticle)
            })

});
function loadData(){

 let article=$("#factory").val();

  url = "<?php echo base_url('MIS/Efficiency/loadArticleStuff/'); ?>";

            $.get(url, {article},function(data) {
          let parsed=JSON.parse(data);
          console.log("pasrsed data",parsed);
          document.getElementById("model").value=parsed[0].ModelName
          document.getElementById("factoryCode").value=parsed[0].FactoryCode
          document.getElementById("forming").value=parsed[0].SAMForming
          document.getElementById("packing").value=parsed[0].SAMPacking
          document.getElementById("clientID").value=parsed[0].ClientID
          document.getElementById("articleID").value=parsed[0].ArtID
          document.getElementById("modelID").value=parsed[0].ModelID  
          document.getElementById("workno").value=parsed[0].WorkNo  
            })
}

$("#update").on("click",function(){

let articleID=$("#articleID").val();
let clientID=$("#clientID").val();
let modelID=$("#modelID").val();
let forming=$("#forming").val();
let packing=$("#packing").val();
let workno=$("#workno").val();
url = "<?php echo base_url('MIS/Efficiency/updateSam/'); ?>";


          $.post(url, {articleID,clientID,modelID,forming,packing,workno},function(data) {
          console.log(data);
          alert('Updated Successfully');
          window.location.reload();
         
            })
})



</script>

        <?php } else {redirect('Welcome/index');}
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
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
        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
        ?>


        <!-- <div class="row clearfix"> -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><b>Date Filteration</b></h5>
            <form method="post" action="<?php echo base_url('Cutting/Cutting/searchData') ?>">
              <div class="row clearfix">
                <div class="col-md-2" style="margin-right:20px;">
                  <div class="form-group">
                    <label class="form-control-label">From Date:</label>
                    <div class="input-group">
                      <input class="form-control" date-format="dd/MM/yyyy" type="Date" id="SDate" name="Sdate" value="<?php echo $CurrentDate; ?>" style="width: 100%">
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="form-control-label">To Date:</label>
                    <div class="input-group">
                      <input class="form-control" date-format="dd/MM/yyyy" type="Date" id="EDate"  name="Edate" value="<?php echo $CurrentDate; ?>" style="width: 100%">
                    </div>
                  </div>
                </div>


                <div class="col-md-1">
                  <div class="form-group">
                    <label class=" form-control-label"></label>
                    <div class="input-group">

                      <button type="submit" id="submit" class="btn btn-primary " style="border-radius: 15px;"><i class="fa fa-search"></i> Search</button>

                    </div>
                  </div>
                </div>

              </div>
            </form>
          </div>
        </div>


        <div class="row mt-5">
        <div class="col-md-12">

        <div class="row">


        

        

        <div class="row">

        <div class="col-md-12">
        
       

        </div>


        </div>
     
        </div>
        </div>


        </div>



      </main>
     
     </div>

     </div>

    </div>


 
<?php
if (!$this->session->has_userdata('user_id')) {
    redirect('');
} else {
?>

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
                    <ol class="breadcrumb page-breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(
                                                                    'index.php/main/dmms_dashboard'
                                                                ); ?>">Raw Material Testing</a></li>


                        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                    </ol>
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i> Raw Material Testing</span>

                        </h1>
                    </div>
                    <?php
                    if ($this->session->flashdata('danger')) {


                    ?>
                        <div class="alert alert-danger alert-dismissible show fade" id="msgbox">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>&times;</span>
                                </button>
                                <?php echo $this->session->flashdata('danger'); ?>
                            </div>
                        </div>
                    <?php
                    }

                    ?>
                    <div class="col-lg-12" style="margin-bottom:20px">

                        <!-- Start here with columns -->

                        <div class="col-md-6 offset-md-3 offset-0 table-responsive">
                            <?php if (validation_errors()) : ?>
                                <div class="alert alert-danger">
                                    <?php echo validation_errors(); ?>
                                </div>
                            <?php endif; ?>
                            <div id="panel-1" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Upload <span class="fw-300">Excel Data </span>
                                    </h2>
                                    <!-- <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div> -->
                                </div>

        <!-- Model Carton HTML -->

<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
        <h5 class="modal-title" id="exampleModalLabel" ><b>Report</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card" id="printCard">
  <div class="card-body">

       <div class="row">
       <table class="table">
               <tr>
               <th><img src="<?php echo base_url()?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>
             
                   <th></th>
                   <th></th>
                   <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Carton</th>
                <th></th>
               </tr>
           </table>
           <!-- <div class="col-md-6" style="font-weight: bolder;font-size:x-large;margin-top:25px"></div>
           <div class="col-md-3"></div>
           <div class="col-md-3"><img src="https://upload.wikimedia.org/wikipedia/en/0/01/This_is_the_Forward_Sport_brand_logo.jpg" alt="report_logo" width="150px" height="100px" /></div> -->
          <table class="table">
          <tr>    
          <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNo"> </span></label></th>
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTest"> </span></label></th>
        </tr>
        <tr>      
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Size:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="size"> </span> </label></th>
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="pono"> </span></label></th>
        </tr>
            </table>
           <!-- <div class="col-md-6">
            <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span></label>
            </div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span></label></div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Size:</span></label></div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span></label></div> -->
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDate"> </span></label></div>
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="supplierName"> </span></label></div>
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRef"> </span></label></div>
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Quantity Carton:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="quantityCarton"> </span></label></div>
            <div class="col-md-2"></div>
            <div class="col-md-10 mt-3" >
                <table class="table table-bordered" style="border:2px solid black">
                    <thead>
                        <tr style="border:2px solid black">
                            <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Test</th>
                            <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Requirement</th>
                                  <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Value</th>
                            <th style="text-align: center;font-size:large;border:2px solid black">  
                            Result
                            </th>
                            <!-- <table style="width: 100%;">
                                   <thead >
                                       <tr >
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                       </tr>
                                   </thead> 
                                </table> -->
                         

                        </tr>
                    </thead>
                    <tbody id= "DetailsTest">
                    
                    </tbody>                
                </table>
            </div>

            <div class="col-md-2"></div>
            <!-- <div class="col-md-4">
                <table class="table table-bordered" style="border:2px solid black"> 
                       <thead>
                           <tr>
                               <th style="border:2px solid black">Lab Reading</th>
                               <th colspan="2" style="border:2px solid black">Humidity</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr >
                               <td rowspan="2"></td>
                               <td style="border:2px solid black">Max</td>
                               <td style="border:2px solid black">Min</td>
                           </tr>
                           <tr >
                             
                               <td style="border:2px solid black"><span style="font-size: medium;font-weight:bold" id="Max"> </span></td>
                               <td style="border:2px solid black"><span style="font-size: medium;font-weight:bold" id="Min"> </span></td>
                               
                           </tr>
                       </tbody>         
                </table>
            </div> -->
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="Conclusion"> </span></label></div>
            <!-- <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Causes of Rejection:</span> <span style="font-size: medium;font-weight:bold" id="rejection"> </span></label></div> -->

            <table class="table">
                <tr>
                    <th></th>
                    <th></th>
                    <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                    <span >Sohail Ghouri </span></th>
          <th></th>
                    <th></th>
                    <th></th>
                    <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                    <span id="testPerformed"> </span></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span  id="testReviewed"> </span>
            </th>
            <th></th>
                    <th></th>
                    <th></th>
             

                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                    <span id="testApproved"> </span></th>
                </tr>
            </table>
            <!-- <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"><u>Test Performed By</u> </span><br>
          Habib Ur Rehman
            </div>
            <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"> <u>Test Approved By</u> </span><br>
            Sohail Ghouri
            </div>
            <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"> <u>Laboratory Incharge</u> </span><br>
            Sohail Ghouri
            </div> -->
        </div>

       </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('printCard')" data-dismiss="modal">Print Report</button>
      </div>
      <div class="card-footer text-muted">
  Forward Sports Pvt. Ltd.
  </div>
    </div>
  </div>
</div>
 
        <!-- End Model Carton HTML -->


      <!-- Model Foam HTML -->

      <div class="modal fade bd-example-modal-lg" id="exampleModalFoam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
        <h5 class="modal-title" id="exampleModalLabel" ><b>Report</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card" id="printCardFoam">
  <div class="card-body">

       <div class="row">
       <table class="table">
               <tr>
               <th><img src="<?php echo base_url()?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>
             
                   <th></th>
                   <th></th>
                   <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Foam</th>
                <th> </th>
               </tr>
           </table>
           <!-- <div class="col-md-6" style="font-weight: bolder;font-size:x-large;margin-top:25px"></div>
           <div class="col-md-3"></div>
           <div class="col-md-3"><img src="https://upload.wikimedia.org/wikipedia/en/0/01/This_is_the_Forward_Sport_brand_logo.jpg" alt="report_logo" width="150px" height="100px" /></div> -->
          <table class="table">
          <tr>    
          <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoFoam"> </span></label></th>
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestFoam"> </span></label></th>
        </tr>
        <tr>      
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoFoam"> </span></label></th>
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateFoam"> </span></label></th>     
    </tr>
            </table>
           <!-- <div class="col-md-6">
            <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span></label>
            </div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span></label></div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Size:</span></label></div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span></label></div> -->
            <!-- <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateFoam"> </span></label></div> -->
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefFoam"> </span></label></div>
            <div class="col-md-2"></div>
            <div class="col-md-10 mt-3" >
                <table class="table table-bordered" style="border:2px solid black">
                    <thead>
                        <tr style="border:2px solid black">
                            <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Test</th>
                            <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Result</th>
                                  <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Unit</th>
                            <th style="text-align: center;font-size:large;border:2px solid black">  
                            Standard
                            </th>
                            <!-- <table style="width: 100%;">
                                   <thead >
                                       <tr >
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                       </tr>
                                   </thead> 
                                </table> -->
                         

                        </tr>
                    </thead>
                    <tbody id= "DetailsTestFoam">
                    
                    </tbody>                
                </table>
            </div>

            <div class="col-md-2"></div>
            <!-- <div class="col-md-4">
                <table class="table table-bordered" style="border:2px solid black"> 
                       <thead>
                           <tr>
                               <th style="border:2px solid black">Lab Reading</th>
                               <th colspan="2" style="border:2px solid black">Humidity</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr >
                               <td rowspan="2"></td>
                               <td style="border:2px solid black">Max</td>
                               <td style="border:2px solid black">Min</td>
                           </tr>
                           <tr >
                             
                               <td style="border:2px solid black"><span style="font-size: medium;font-weight:bold" id="Max"> </span></td>
                               <td style="border:2px solid black"><span style="font-size: medium;font-weight:bold" id="Min"> </span></td>
                               
                           </tr>
                       </tbody>         
                </table>
            </div> -->
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="ConclusionFoam"> </span></label></div>
            <!-- <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Causes of Rejection:</span> <span style="font-size: medium;font-weight:bold" id="rejection"> </span></label></div> -->

            <table class="table">
                <tr>
                    <th></th>
                    <th></th>
                    <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                    <span >Sohail Ghouri </span></th>
          <th></th>
                    <th></th>
                    <th></th>
                    <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                    <span id="testPerformedFoam"> </span></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span  id="testReviewedFoam"> </span>
            </th>
            <th></th>
                    <th></th>
                    <th></th>
             

                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                    <span id="testApprovedFoam"> </span></th>
                </tr>
            </table>
            <!-- <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"><u>Test Performed By</u> </span><br>
          Habib Ur Rehman
            </div>
            <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"> <u>Test Approved By</u> </span><br>
            Sohail Ghouri
            </div>
            <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"> <u>Laboratory Incharge</u> </span><br>
            Sohail Ghouri
            </div> -->
        </div>

       </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('printCardFoam')" data-dismiss="modal">Print Report</button>
      </div>
      <div class="card-footer text-muted">
  Forward Sports Pvt. Ltd.
  </div>
    </div>
  </div>
</div>
 
        <!-- End Model Foam HTML -->

  <!-- Model Fabric HTML -->

  <div class="modal fade bd-example-modal-lg" id="exampleModalFabric" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
        <h5 class="modal-title" id="exampleModalLabel" ><b>Report</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card" id="printCardFabric">
  <div class="card-body">

       <div class="row">
       <table class="table">
               <tr>
               <th><img src="<?php echo base_url()?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>
             
                   <th></th>
                   <th></th>
                   <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Fabric</th>
                <td  style="font-size: small;padding:0%">
                <table class="table table-bordered" style="font-size: small;padding:0%">
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Document</th>
                        <td style="font-size: small;padding:1%">QSD-12/RTR/TRF</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Revision</th>
                        <td style="font-size: small;padding:1%">0</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Copy</th>
                        <td style="font-size: small;padding:1%">03</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Holder</th>
                        <td style="font-size: small;padding:1%">Lab</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Status</th>
                        <td style="font-size: small;padding:1%">Controlled</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Date</th>
                        <td style="font-size: small;padding:1%">1/Jul/21</td>
                    </tr>
                </table>
                </td>
               </tr>
           </table>
           <!-- <div class="col-md-6" style="font-weight: bolder;font-size:x-large;margin-top:25px"></div>
           <div class="col-md-3"></div>
           <div class="col-md-3"><img src="https://upload.wikimedia.org/wikipedia/en/0/01/This_is_the_Forward_Sport_brand_logo.jpg" alt="report_logo" width="150px" height="100px" /></div> -->
          <table class="table">
          <tr>    
          <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoFabric"> </span></label></th>
          <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> CSS No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="CSSNoFabric"> </span></label></th>
    
        </tr>
        <tr>     
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestFabric"> </span></label></th>
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateFabric"> </span></label></th>     
    </tr>
    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Material Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="materialNameFabric"> </span></label></th>
    </tr>
    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Status:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="ResultFabric"> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoFabric"> </span></label></th>
</tr>
    <tr>
    <!-- <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="supplierNameFabric"> </span></label></th> -->
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefFabric"> </span></label></th>
    </tr>
            </table>
           <!-- <div class="col-md-6">
            <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span></label>
            </div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span></label></div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Size:</span></label></div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span></label></div> -->
            <!-- <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateFoam"> </span></label></div> -->
            <!-- <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefFabric"> </span></label></div> -->
            <div class="col-md-2"></div>
            <div class="col-md-10 mt-3" >
                <table class="table table-bordered" style="border:2px solid black">
                    <thead>
                        <tr style="border:2px solid black">
                            <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Test</th>
                            <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Result</th>
                                  <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Uncertainty</th>
                            <th style="text-align: center;font-size:large;border:2px solid black">  
                            Remark
                            </th>
                            <!-- <table style="width: 100%;">
                                   <thead >
                                       <tr >
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                       </tr>
                                   </thead> 
                                </table> -->
                         

                        </tr>
                    </thead>
                    <tbody id= "DetailsTestFabric">
                    
                    </tbody>                
                </table>
            </div>

            <div class="col-md-2"></div>
            <!-- <div class="col-md-4">
                <table class="table table-bordered" style="border:2px solid black"> 
                       <thead>
                           <tr>
                               <th style="border:2px solid black">Lab Reading</th>
                               <th colspan="2" style="border:2px solid black">Humidity</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr >
                               <td rowspan="2"></td>
                               <td style="border:2px solid black">Max</td>
                               <td style="border:2px solid black">Min</td>
                           </tr>
                           <tr >
                             
                               <td style="border:2px solid black"><span style="font-size: medium;font-weight:bold" id="Max"> </span></td>
                               <td style="border:2px solid black"><span style="font-size: medium;font-weight:bold" id="Min"> </span></td>
                               
                           </tr>
                       </tbody>         
                </table>
            </div> -->
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="ConclusionFabric"> </span></label></div>
            <!-- <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Causes of Rejection:</span> <span style="font-size: medium;font-weight:bold" id="rejection"> </span></label></div> -->

            <table class="table">
                <tr>
                    <th></th>
                    <th></th>
                    <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                    <span >Sohail Ghouri </span></th>
          <th></th>
                    <th></th>
                    <th></th>
                    <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                    <span id="testPerformedFabric"> </span></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span  id="testReviewedFabric"> </span>
            </th>
            <th></th>
                    <th></th>
                    <th></th>
             

                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                    <span id="testApprovedFabric"> </span></th>
                </tr>
            </table>
            <!-- <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"><u>Test Performed By</u> </span><br>
          Habib Ur Rehman
            </div>
            <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"> <u>Test Approved By</u> </span><br>
            Sohail Ghouri
            </div>
            <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"> <u>Laboratory Incharge</u> </span><br>
            Sohail Ghouri
            </div> -->
        </div>

       </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('printCardFabric')" data-dismiss="modal">Print Report</button>
      </div>
      <div class="card-footer text-muted">
  Forward Sports Pvt. Ltd.
  </div>
    </div>
  </div>
</div>
 
        <!-- End Model Fabric HTML -->


 <!-- Model Fabric HTML -->

 <div class="modal fade bd-example-modal-lg" id="exampleModalMaterial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
        <h5 class="modal-title" id="exampleModalLabel" ><b>Report</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card" id="printCardMaterial">
  <div class="card-body">

       <div class="row">
       <table class="table">
               <tr>
               <th><img src="<?php echo base_url()?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>
             
                   <th></th>
                   <th></th>
                   <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Material</th>
                <td  style="font-size: small;padding:0%">
                <table class="table table-bordered" style="font-size: small;padding:0%">
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Document</th>
                        <td style="font-size: small;padding:1%">QSD-12/RTR/TRF</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Revision</th>
                        <td style="font-size: small;padding:1%">0</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Copy</th>
                        <td style="font-size: small;padding:1%">03</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Holder</th>
                        <td style="font-size: small;padding:1%">Lab</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Status</th>
                        <td style="font-size: small;padding:1%">Controlled</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Date</th>
                        <td style="font-size: small;padding:1%">1/Jul/21</td>
                    </tr>
                </table>
                </td>
               </tr>
           </table>
           <!-- <div class="col-md-6" style="font-weight: bolder;font-size:x-large;margin-top:25px"></div>
           <div class="col-md-3"></div>
           <div class="col-md-3"><img src="https://upload.wikimedia.org/wikipedia/en/0/01/This_is_the_Forward_Sport_brand_logo.jpg" alt="report_logo" width="150px" height="100px" /></div> -->
          <table class="table">
          <tr>    
          <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoMaterial"> </span></label></th>
          <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> CSS No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="CSSNoMaterial"> </span></label></th>
    
        </tr>
        <tr>     
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestMaterial"> </span></label></th>
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateMaterial"> </span></label></th>     
    </tr>
    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Material Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="materialNameMaterial"> </span></label></th>
    </tr>
    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Status:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="ResultMaterial"> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoMaterial"> </span></label></th>
</tr>
    <tr>
    <!-- <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="supplierNameFabric"> </span></label></th> -->
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefMaterial"> </span></label></th>
    </tr>
            </table>
           <!-- <div class="col-md-6">
            <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span></label>
            </div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span></label></div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Size:</span></label></div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span></label></div> -->
            <!-- <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateFoam"> </span></label></div> -->
            <!-- <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefFabric"> </span></label></div> -->
            <div class="col-md-2"></div>
            <div class="col-md-10 mt-3" >
                <table class="table table-bordered" style="border:2px solid black">
                    <thead>
                        <tr style="border:2px solid black">
                            <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Test</th>
                            <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Result</th>
                                  <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Uncertainty</th>
                            <th style="text-align: center;font-size:large;border:2px solid black">  
                            Remark
                            </th>
                            <!-- <table style="width: 100%;">
                                   <thead >
                                       <tr >
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                       </tr>
                                   </thead> 
                                </table> -->
                         

                        </tr>
                    </thead>
                    <tbody id= "DetailsTestMaterial">
                    
                    </tbody>                
                </table>
            </div>

            <div class="col-md-2"></div>
            <!-- <div class="col-md-4">
                <table class="table table-bordered" style="border:2px solid black"> 
                       <thead>
                           <tr>
                               <th style="border:2px solid black">Lab Reading</th>
                               <th colspan="2" style="border:2px solid black">Humidity</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr >
                               <td rowspan="2"></td>
                               <td style="border:2px solid black">Max</td>
                               <td style="border:2px solid black">Min</td>
                           </tr>
                           <tr >
                             
                               <td style="border:2px solid black"><span style="font-size: medium;font-weight:bold" id="Max"> </span></td>
                               <td style="border:2px solid black"><span style="font-size: medium;font-weight:bold" id="Min"> </span></td>
                               
                           </tr>
                       </tbody>         
                </table>
            </div> -->
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="ConclusionMaterial"> </span></label></div>
            <!-- <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Causes of Rejection:</span> <span style="font-size: medium;font-weight:bold" id="rejection"> </span></label></div> -->

            <table class="table">
                <tr>
                    <th></th>
                    <th></th>
                    <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                    <span >Sohail Ghouri </span></th>
          <th></th>
                    <th></th>
                    <th></th>
                    <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                    <span id="testPerformedMaterial"> </span></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span  id="testReviewedMaterial"> </span>
            </th>
            <th></th>
                    <th></th>
                    <th></th>
             

                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                    <span id="testApprovedMaterial"> </span></th>
                </tr>
            </table>
            <!-- <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"><u>Test Performed By</u> </span><br>
          Habib Ur Rehman
            </div>
            <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"> <u>Test Approved By</u> </span><br>
            Sohail Ghouri
            </div>
            <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"> <u>Laboratory Incharge</u> </span><br>
            Sohail Ghouri
            </div> -->
        </div>

       </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('printCardMaterial')" data-dismiss="modal">Print Report</button>
      </div>
      <div class="card-footer text-muted">
  Forward Sports Pvt. Ltd.
  </div>
    </div>
  </div>
</div>
 
        <!-- End Model Fabric HTML -->


          <!-- Model Thread HTML -->

  <div class="modal fade bd-example-modal-lg" id="exampleModalThread" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
        <h5 class="modal-title" id="exampleModalLabel" ><b>Report</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card" id="printCardThread">
  <div class="card-body">

       <div class="row">
       <table class="table">
               <tr>
               <th><img src="<?php echo base_url()?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>
             
                   <th></th>
                   <th></th>
                   <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Thread</th>
                <td  style="font-size: small;padding:0%">
                <table class="table table-bordered" style="font-size: small;padding:0%">
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Document</th>
                        <td style="font-size: small;padding:1%">QSD-12/RTR/TRF</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Revision</th>
                        <td style="font-size: small;padding:1%">0</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Copy</th>
                        <td style="font-size: small;padding:1%">03</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Holder</th>
                        <td style="font-size: small;padding:1%">Lab</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Status</th>
                        <td style="font-size: small;padding:1%">Controlled</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Date</th>
                        <td style="font-size: small;padding:1%">1/Jul/21</td>
                    </tr>
                </table>
                </td>
               </tr>
           </table>
           <!-- <div class="col-md-6" style="font-weight: bolder;font-size:x-large;margin-top:25px"></div>
           <div class="col-md-3"></div>
           <div class="col-md-3"><img src="https://upload.wikimedia.org/wikipedia/en/0/01/This_is_the_Forward_Sport_brand_logo.jpg" alt="report_logo" width="150px" height="100px" /></div> -->
          <table class="table">
          <tr>    
          <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoThread"> </span></label></th>
       
        </tr>
        <tr>     
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestThread"> </span></label></th>
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateThread"> </span></label></th>     
    </tr>

    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="supplierNameThread"> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefThread"> </span></label></th>
    </tr>

    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoThread"> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Thickness:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="thicknessThread"> </span></label></th>
   
</tr>

    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Linear Density:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="linearDensityThread"> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Twist Per Inch:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="twistThread"> </span></label></th>
    </tr>
 
 
            </table>
           <!-- <div class="col-md-6">
            <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span></label>
            </div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span></label></div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Size:</span></label></div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span></label></div> -->
            <!-- <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateFoam"> </span></label></div> -->
            <!-- <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefFabric"> </span></label></div> -->
            <div class="col-md-2"></div>
            <div class="col-md-10 mt-3" >
                <table class="table table-bordered" style="border:2px solid black">
                    <thead>
                        <tr style="border:2px solid black">
                            <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Date</th>
                            <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Ext. at Max. Load (mm)</th>
                                  <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Max. Load (N)</th>
                            <th style="text-align: center;font-size:large;border:2px solid black">  
                            Ext. at 350.0 N (mm)
                            </th>
                            <!-- <table style="width: 100%;">
                                   <thead >
                                       <tr >
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                       </tr>
                                   </thead> 
                                </table> -->
                         

                        </tr>
                    </thead>
                    <tbody id= "DetailsTestThread">
                    
                    </tbody>                
                </table>
            </div>

            <div class="col-md-2"></div>
            <!-- <div class="col-md-4">
                <table class="table table-bordered" style="border:2px solid black"> 
                       <thead>
                           <tr>
                               <th style="border:2px solid black">Lab Reading</th>
                               <th colspan="2" style="border:2px solid black">Humidity</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr >
                               <td rowspan="2"></td>
                               <td style="border:2px solid black">Max</td>
                               <td style="border:2px solid black">Min</td>
                           </tr>
                           <tr >
                             
                               <td style="border:2px solid black"><span style="font-size: medium;font-weight:bold" id="Max"> </span></td>
                               <td style="border:2px solid black"><span style="font-size: medium;font-weight:bold" id="Min"> </span></td>
                               
                           </tr>
                       </tbody>         
                </table>
            </div> -->
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="ConclusionThread"> </span></label></div>
            <!-- <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Causes of Rejection:</span> <span style="font-size: medium;font-weight:bold" id="rejection"> </span></label></div> -->

            <table class="table">
                <tr>
                    <th></th>
                    <th></th>
                    <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                    <span >Sohail Ghouri </span></th>
          <th></th>
                    <th></th>
                    <th></th>
                    <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                    <span id="testPerformedThread"> </span></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span  id="testReviewedThread"> </span>
            </th>
            <th></th>
                    <th></th>
                    <th></th>
             

                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                    <span id="testApprovedThread"> </span></th>
                </tr>
            </table>
            <!-- <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"><u>Test Performed By</u> </span><br>
          Habib Ur Rehman
            </div>
            <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"> <u>Test Approved By</u> </span><br>
            Sohail Ghouri
            </div>
            <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"> <u>Laboratory Incharge</u> </span><br>
            Sohail Ghouri
            </div> -->
        </div>

       </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('printCardThread')" data-dismiss="modal">Print Report</button>
      </div>
      <div class="card-footer text-muted">
  Forward Sports Pvt. Ltd.
  </div>
    </div>
  </div>
</div>
 
        <!-- End Model Thread HTML -->


   <!-- Model Blader HTML -->

   <div class="modal fade bd-example-modal-lg" id="exampleModalBlader" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
        <h5 class="modal-title" id="exampleModalLabel" ><b>Report</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card" id="printCardBlader">
  <div class="card-body">

       <div class="row">
       <table class="table">
               <tr>
               <th><img src="<?php echo base_url()?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>
             
                   <th></th>
                   <th></th>
                   <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Blader</th>
                <th> </th>
               </tr>
           </table>
           <!-- <div class="col-md-6" style="font-weight: bolder;font-size:x-large;margin-top:25px"></div>
           <div class="col-md-3"></div>
           <div class="col-md-3"><img src="https://upload.wikimedia.org/wikipedia/en/0/01/This_is_the_Forward_Sport_brand_logo.jpg" alt="report_logo" width="150px" height="100px" /></div> -->
          <table class="table">
          <tr>    
          <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoBlader"> </span></label></th>
          <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestBlader"> </span></label></th>
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateBlader"> </span></label></th>         
        </tr>
    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="supplierNameBlader"> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefBlader"> </span></label></th>
    </tr>

    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Material Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="materialBlader"> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Size:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="sizeBlader"> </span></label></th>
   
</tr>

    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Hardness:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="hardnessBlader"> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoBlader"> </span></label></th>
 
    </tr>
 
 
            </table>
           <!-- <div class="col-md-6">
            <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span></label>
            </div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span></label></div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Size:</span></label></div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span></label></div> -->
            <!-- <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateFoam"> </span></label></div> -->
            <!-- <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefFabric"> </span></label></div> -->
            <div class="col-md-2"></div>
            <div class="col-md-10 mt-3" >
                <table class="table table-bordered" style="border:2px solid black">
                    <thead>
                        <tr style="border:2px solid black">
                            <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Test</th>
                            <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Unit</th>
                                  <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Result 1</th>
                                  <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Result 2</th>
                                  <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Result 3</th>
                                  <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Result 4</th>
                            <!-- <table style="width: 100%;">
                                   <thead >
                                       <tr >
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                       </tr>
                                   </thead> 
                                </table> -->
                         

                        </tr>
                    </thead>
                    <tbody id= "DetailsTestBlader">
                    
                    </tbody>                
                </table>
            </div>

            <div class="col-md-2"></div>
            <!-- <div class="col-md-4">
                <table class="table table-bordered" style="border:2px solid black"> 
                       <thead>
                           <tr>
                               <th style="border:2px solid black">Lab Reading</th>
                               <th colspan="2" style="border:2px solid black">Humidity</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr >
                               <td rowspan="2"></td>
                               <td style="border:2px solid black">Max</td>
                               <td style="border:2px solid black">Min</td>
                           </tr>
                           <tr >
                             
                               <td style="border:2px solid black"><span style="font-size: medium;font-weight:bold" id="Max"> </span></td>
                               <td style="border:2px solid black"><span style="font-size: medium;font-weight:bold" id="Min"> </span></td>
                               
                           </tr>
                       </tbody>         
                </table>
            </div> -->
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Remarks:</span> <span style="font-size: medium;font-weight:bold" id="remarksBlader"> </span></label></div>
            <!-- <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Causes of Rejection:</span> <span style="font-size: medium;font-weight:bold" id="rejection"> </span></label></div> -->

            <table class="table">
                <tr>
                    <th></th>
                    <th></th>
                    <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                    <span >Sohail Ghouri </span></th>
          <th></th>
                    <th></th>
                    <th></th>
                    <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                    <span id="testPerformedBlader"> </span></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span  id="testReviewedBlader"> </span>
            </th>
            <th></th>
                    <th></th>
                    <th></th>
             

                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                    <span id="testApprovedBlader"> </span></th>
                </tr>
            </table>
            <!-- <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"><u>Test Performed By</u> </span><br>
          Habib Ur Rehman
            </div>
            <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"> <u>Test Approved By</u> </span><br>
            Sohail Ghouri
            </div>
            <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"> <u>Laboratory Incharge</u> </span><br>
            Sohail Ghouri
            </div> -->
        </div>

       </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('printCardBlader')" data-dismiss="modal">Print Report</button>
      </div>
      <div class="card-footer text-muted">
  Forward Sports Pvt. Ltd.
  </div>
    </div>
  </div>
</div>
 
        <!-- End Model Blader HTML -->


 <!-- Model FGT HTML -->

 <div class="modal fade bd-example-modal-lg" id="exampleModalFGT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
        <h5 class="modal-title" id="exampleModalLabel" ><b>Report</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card" id="printCardFGT">
  <div class="card-body">

       <div class="row">
       <table class="table">
               <tr>
               <th><img src="<?php echo base_url()?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>
             
                   <th></th>
                   <th></th>
                   <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>CSM Test Report of Football</th>
                <td  style="font-size: small;padding:0%">
                <table class="table table-bordered" style="font-size: small;padding:0%">
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Document</th>
                        <td style="font-size: small;padding:1%">QSD-12/RTR/TRF</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Revision</th>
                        <td style="font-size: small;padding:1%">0</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Copy</th>
                        <td style="font-size: small;padding:1%">03</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Holder</th>
                        <td style="font-size: small;padding:1%">Lab Manager</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Status</th>
                        <td style="font-size: small;padding:1%">Controlled</td>
                    </tr>
                    <tr style="font-size: small;padding:0%">
                        <th style="font-size: small;padding:1%">Date</th>
                        <td style="font-size: small;padding:1%">1/Jul/21</td>
                    </tr>
                </table>
                </td>
               </tr>
           </table>
           <!-- <div class="col-md-6" style="font-weight: bolder;font-size:x-large;margin-top:25px"></div>
           <div class="col-md-3"></div>
           <div class="col-md-3"><img src="https://upload.wikimedia.org/wikipedia/en/0/01/This_is_the_Forward_Sport_brand_logo.jpg" alt="report_logo" width="150px" height="100px" /></div> -->
          <table class="table">
          <tr>    
          <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoFGT"> </span></label></th>
          <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestFGT"> </span></label></th>
        </tr>
    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Model Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="modelNameFGT"> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> CSS Code:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="CSSCodeFGT"> </span></label></th>
    </tr>

    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Pressure:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="pressureFGT"> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Temp/Humidity:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="TempHumFGT"> </span></label></th>
   
</tr>

    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Article:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="articleFGT"> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Category:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="categoryFGT"> </span></label></th>
 
    </tr>
    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Size:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="sizeFGT"> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Tested For:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testedForFGT"> </span></label></th>
 
    </tr>
 
            </table>
           <!-- <div class="col-md-6">
            <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span></label>
            </div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span></label></div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Size:</span></label></div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span></label></div> -->
            <!-- <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateFoam"> </span></label></div> -->
            <!-- <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefFabric"> </span></label></div> -->
            <div class="col-md-2"></div>
            <div class="col-md-10 mt-3" >
                <table class="table table-bordered" style="border:2px solid black">
                    <thead>
                        <tr style="border:2px solid black">
                            <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Weight</th>
                            <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Circumference Min</th>
                                  <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Circumference Max</th>
                                  <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Deviation</th>
                                  <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Rebound Test</th>
                                  <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Remarks</th>
                            <!-- <table style="width: 100%;">
                                   <thead >
                                       <tr >
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                       </tr>
                                   </thead> 
                                </table> -->
                         

                        </tr>
                    </thead>
                    <tbody id= "DetailsTestFGT">
                    
                    </tbody>                
                </table>
            </div>

            <div class="col-md-2"></div>
            <!-- <div class="col-md-4">
                <table class="table table-bordered" style="border:2px solid black"> 
                       <thead>
                           <tr>
                               <th style="border:2px solid black">Lab Reading</th>
                               <th colspan="2" style="border:2px solid black">Humidity</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr >
                               <td rowspan="2"></td>
                               <td style="border:2px solid black">Max</td>
                               <td style="border:2px solid black">Min</td>
                           </tr>
                           <tr >
                             
                               <td style="border:2px solid black"><span style="font-size: medium;font-weight:bold" id="Max"> </span></td>
                               <td style="border:2px solid black"><span style="font-size: medium;font-weight:bold" id="Min"> </span></td>
                               
                           </tr>
                       </tbody>         
                </table>
            </div> -->
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Note:</span> <span style="font-size: medium;font-weight:bold" id="noteFGT"> </span></label></div>
            <!-- <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Causes of Rejection:</span> <span style="font-size: medium;font-weight:bold" id="rejection"> </span></label></div> -->

            <table class="table">
                <tr>
                    <th></th>
                    <th></th>
                    <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                    <span >Sohail Ghouri </span></th>
          <th></th>
                    <th></th>
                    <th></th>
                    <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                    <span id="testPerformedFGT"> </span></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span  id="testReviewedFGT"> </span>
            </th>
            <th></th>
                    <th></th>
                    <th></th>
             

                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                    <span id="testApprovedFGT"> </span></th>
                </tr>
            </table>
            <!-- <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"><u>Test Performed By</u> </span><br>
          Habib Ur Rehman
            </div>
            <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"> <u>Test Approved By</u> </span><br>
            Sohail Ghouri
            </div>
            <div class="col-md-4 mt-2">
            <span style="font-size: medium;font-weight:bold"> <u>Laboratory Incharge</u> </span><br>
            Sohail Ghouri
            </div> -->
        </div>

       </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('printCardFGT')" data-dismiss="modal">Print Report</button>
      </div>
      <div class="card-footer text-muted">
  Forward Sports Pvt. Ltd.
  </div>
    </div>
  </div>
</div>
 
        <!-- End Model FGT HTML -->


<?php
 $Uploading = $this->session->userdata('Uploading');
  $RS = $this->session->userdata('ReviewStatus');
   $AS = $this->session->userdata('ApprovalStatus');
   

  // if($Uploading==1){

  ?>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="demo-v-spacing">
                                            <form method="post" enctype="multipart/form-data" action='<?php echo base_url('LabController/addHeadData'); ?>'>
                                                <div class="card-body">
                                                    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alertShown" style="display: none;">
                                                        <strong>Congractulations!</strong> Record Added Successfully. Kindly wait for page to be reloaded!
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="row">
                                                  
                                                        <div class="col-md-12">
                                                            <div class="form-group mt-4">
                                                                <div class="custom-file">
                                                                    <?php
                                                                    if($Uploading==1){

                                                                    
                                                                    ?>
                                                                    <input type="file" class="custom-file-input" id="customFile" onchange="fileSelect(this.files);" name="CottonData" accept=".xlsx, .xls, .csv">

                                                                    <label class="custom-file-label" for="customFile">Choose file</label>
<?php

                                                                    }else{
                                                                        ?>
                                                                           <input type="file"  disabled="disabled" lass="custom-file-input" id="customFile" onchange="fileSelect(this.files);" name="CottonData" accept=".xlsx, .xls, .csv">

                                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                                        <?PHP
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Select Test Type</label>
                                                                <select class="form-control" id="testType" onchange="SetSheetNo()">
                                                                     <option value="" selected>Select Test Type</option>
                                                                    <option value="1" >Carton Test</option>
                                                                    <option value="2">Foam</option>
                                                                    <option value="3">Fabric</option>
                                                                    <option value="4">Thread</option>
                                                                    <option value="5">SR Blader</option>
                                                                    <option value="6">Material</option>
                                                                    <option value="7">FGT Report</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Enter Sheet No. *</label>
                                                                <input type="number" class="form-control" id="sheetNo" required readonly="readonly">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Test Group</label>
                                                                <select class="form-control" id="testGroup">
                                                                     <option value="" selected>Select Test Group</option>
                                                                    <option value="Development" >Development</option>
                                                                    <option value="Production">Production</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Test Performed By</label>
                                                                <select class="form-control" id="testPerformer">
                                                                     <option value="" selected>Select Test Performed By</option>
                                                                    <option value="Imran" >Imran</option>
                                                                    <option value="Pervaiz">Pervaiz</option>
                                                                    <option value="Tanveer" >Tanveer</option>
                                                                    <option value="Umer">Umer</option>
                                                                    <option value="Bilal">Bilal</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- <div class="form-group col-md-3">
                                                            <div>
                                                                <label for="img">Upload Image:</label>
                                                                <input type="file" id="img" name="img" accept="image/*">
                                                            </div>
                                                        </div> -->


                                                        <div class="col-md-8">
                                                            <div class="form-group mt-4">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="img" name="img" accept="image/*">

                                                                    <label class="custom-file-label" for="customFile">Upload Spectrum Image</label>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group mt-4" style="display: none;">
                                                              
                                                                    <input type="text" class="form-control" id="headerData" name="HeaderData[]">
                                                                    <input type="text" class="form-control" id="childData" name="ChildData[][]">
                                                            </div>
                                                        </div>

                                                    </div>



                                                </div>


                                        </div>
                                        <!-- /.card-body -->
  <?php
                                                                    if($Uploading==1){

                                                                    
                                                                    ?>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-primary" id="submitData">Load</button>
                                            <button class="btn btn-primary" id="sendHeaderValues" style="display: none;">Save Data</button>
                                            <!-- <button class="btn btn-primary" id="sendDetailsValues" style="display: none;" >Save Test Details</button> -->
                                        </div>
                                        <?php
                                        
                                                                    }else{
                                                                        ?>
                                                                            <div class="card-footer text-right">
                                            <button class="btn btn-primary" disabled="disabled" id="submitData">Load</button>
                                            <button class="btn btn-primary" disabled="disabled" id="sendHeaderValues" style="display: none;">Save Data</button>
                                            <!-- <button class="btn btn-primary" id="sendDetailsValues" style="display: none;" >Save Test Details</button> -->
                                        </div>
                                                                        <?php
                                                                    }?>
                                        </form>
                                    </div>
                                </div>
<?php

 //}
?>
                            </div>
                        </div>
                        <div class="col-md-12  table-responsive">

                            <div id="panel-1" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Lab Test Report</span>
                                    </h2>
                                    <!-- <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div> -->
                                </div>
                                <div class="card">
                         
                                    <div class="card-body">
                                    <h5 class="card-title" style="color:black;font-weight:bolder">Date Filteration</h5>
                                     <div class="row">
                                         <div class="col-md-3"><input class="form-control" type="date" id="startDate"  /></div>
                                         <div class="col-md-3"><input class="form-control" type="date" id="endDate" /></div>
                                         <div class="col-md-3"><button class="btn btn-primary" id="searchRange">Search</button></div>
                                     </div>
                                    </div>
                                 </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="demo-v-spacing" id="defaultTable" >
                                            <table id="table" class="table table-bordered table-hover table-responsive table-striped w-100">
                                                <thead class="bg-primary-200">
                                                    <tr style="color:white;">
                                                      <th>Item Type</th>
                                                        <th>Test No </th>
                                                        <th>CSS No </th>
                                                        <th> Date </th>
                                                        <th>Item Name </th>
                                                        <th>PO # </th>
                                                           <th>Receiving Date  </th>
                                                        <th>Supplier</th>
                                                          <!-- <th>Supplier Refrence</th> -->
                                                            <th>Quantity </th>
                                                             
                                                                 <th>Result </th>
                                                                   <th>Generated By </th>
                                                                   <th>Review Status </th>
                                                                    <th>Review By </th>
                                                                     <th>Approved Status </th>
                                                                    <th>Approved By </th>
                                                                  
                                                                   <th>Actions </th>
                                                                       <th>Undo </th>
                                                            
                                                                  
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     
                                                    <?php
                                                     //$this->load->model('LabModel', 'l');
                                                     //print_r($Labtest);

 
 foreach ($Labtest as $Key){
    
  $Approvalname =$Key['Approvalname'];
  $ReviewName =$Key['reviewName'];
  $ReviewStatus =$Key['ReviewStatus'];
  $ApprovedStatus =$Key['ApprovedStatus'];
  ?>
  <tr>
     <td><?php Echo $Key['ItemType']; ?></td>
      <td><?php Echo $Key['TestNO']; ?></td>
      <td><?php Echo $Key['CSSNO']; ?></td>
 <td><?php Echo $Key['Date']; ?></td>
  <td><?php Echo $Key['Size']; ?></td>
     <td><?php Echo $Key['PO']; ?></td>
     <td><?php Echo $Key['Receiving_Date']; ?></td>
     <td><?php Echo $Key['Supplier_Name']; ?></td>
     <!-- <td><?php Echo $Key['Supplier_Ref']; ?></td> -->
      <td><?php Echo $Key['Quantity_Carton']; ?></td>
       
      <td><?php Echo $Key['Result']; ?></td>
     <td><?php Echo $Key['LoginName']; ?></td>
       
        <td>
             <?php
                                                                   

                                                                    
               
    if($ReviewStatus=='1'){
        ?>    
        <div class="custom-control custom-switch">
            
            <?php
             if($RS==1){
            ?>
                                                                <input type="checkbox" class="custom-control-input" id="review<?php Echo $Key['TID']; ?>" checked="">
                                                                <?php
                                                                
             }else{
                 ?>
                    <input type="checkbox" disabled="disabled" class="custom-control-input" id="review<?php Echo $Key['TID']; ?>" checked="">
                 <?php
                 }
                 ?>
                                                                <label class="custom-control-label" for="review<?php Echo $Key['TID']; ?>"></label>
                                                            </div>
                                                          <?php
    }else{
        ?>
         <div class="custom-control custom-switch">
                                                               <?php
             if($RS==1){
            ?>
                                                                <input type="checkbox" class="custom-control-input" id="review<?php Echo $Key['TID']; ?>" >
                                                                <?php
                                                                
             }else{
                 ?>
                    <input type="checkbox" disabled="disabled" class="custom-control-input" id="review<?php Echo $Key['TID']; ?>">
                 <?php
                 }
                 ?>
                                                                <label class="custom-control-label" for="review<?php Echo $Key['TID']; ?>"></label>
                                                            </div>
         <?php
    }
    ?>
                                                        </td>
        <td>
            
    <?php
    if($ReviewStatus=='1'){
        ?>
        <?php Echo $ReviewName; ?>
        <?php
    }else{
        ?>
          <span class="badge badge-warning p-1">Pending</span>
        <?php
    }
    ?>
    </td>
        <td>
             <?php
    if($ApprovedStatus=='1'){
        ?>
            <div class="custom-control custom-switch">
                  <?php
             if($AS==1){
            ?>
                                                                <input type="checkbox" class="custom-control-input" id="approved<?php Echo $Key['TID']; ?>" checked="">
                                                                <?php
                                                                }else{
                                                                    ?>
                                                                     <input type="checkbox" disabled="disabled" class="custom-control-input" id="approved<?php Echo $Key['TID']; ?>" checked="">
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                <label class="custom-control-label" for="approved<?php Echo $Key['TID']; ?>"></label>
                                                            </div>
                                                               <?php
    }else{
        ?>
         <div class="custom-control custom-switch">
                                                                       <?php
             if($AS==1){
            ?>
                                                                <input type="checkbox" class="custom-control-input" id="approved<?php Echo $Key['TID']; ?>" >
                                                                <?php
                                                                }else{
                                                                    ?>
                                                                     <input type="checkbox" disabled="disabled" class="custom-control-input" id="approved<?php Echo $Key['TID']; ?>" >
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                <label class="custom-control-label" for="approved<?php Echo $Key['TID']; ?>"></label>
                                                            </div>
        <?php
    }
    ?>
                                                        </td>
        <td>  <?php
    if($ApprovedStatus=='1'){
        ?>
        <?php Echo $Approvalname; ?>
        <?php
    }else{
        ?>
         <span class="badge badge-warning p-1">Pending</span>
        <?php
    }
    ?></td>
        <td>
            <div class="row">
                <div class="col-md-2">
                <button type="button" class="btn btn-info btn-xs updatebtn" id="btn.<?php Echo $Key['TID']; ?>"><i class="fal fa-edit" aria-hidden="true"></i></button>
                </div>
                <div class="col-md-2">
             
                </div>
               
                <div class="col-md-2">
             
             </div>
                <div class="col-md-2">
                <button type="button" class="btn btn-warning btn-xs printButton" id="btnPrint.<?php Echo $Key['TID']; ?>" ><i class="fal fa-print" aria-hidden="true"></i></button>
                </div>
            </div>
          
        
           
           
           </td>   
            <td> <div class="col-md-2">
               
            <button type="button" id="undo.<?php echo $Key['TID'];?>" value="<?php echo $Key['TID'];?>" class="btn btn-danger btn-xs undobtn"><i class="fal fa-trash" aria-hidden="true"></i></button> 
      
                </div>
            </td>
 </tr>
 <?php
 
 }
 ?>
                                                </tbody>
                                                 
                                            </table>
                                        </div>
                                    </div>

                                </div>


<!--  Custom Table Content -->
<div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="demo-v-spacing" id="customData">
                                
                                        </div>
                                    </div>

                                </div>

<!-- End Custom Table Content -->
                            </div>
                        </div>
                        <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
                        <!-- BEGIN Page Footer -->
                        <footer class="page-footer" role="contentinfo">
                            <div class="d-flex align-items-center flex-1 text-muted">
                                <span class="hidden-md-down fw-700">2021 © Forward Sports by&nbsp;IT Dept Forward Sports</span>
                            </div>
                            <div>

                            </div>
                        </footer>
                        <script src="<?php echo base_url(); ?>/assets/js//jquery.min.js" type="text/javascript"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js" integrity="sha512-d5Jr3NflEZmFDdFHZtxeJtBzk0eB+kkRXWFQqEc1EKmolXjHm2IKCA7kTvXBNjIYzjXfD5XzIjaaErpkZHCkBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
                        <script>
                            
var sDate;
var edate;
    //     $("#printReport").click(function(e){
    //      e.preventDefault();
    // alert("called");
    //      $("#printCard").printThis({
    //     debug: false,               // show the iframe for debugging
    // importCSS: true,            // import parent page css
    // importStyle: false,         // import style tags
    // printContainer: true,       // print outer container/$.selector
    // loadCSS: "",                // path to additional css file - use an array [] for multiple
    // pageTitle: "",              // add title to print page
    // removeInline: false,        // remove inline styles from print elements
    // removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
    // printDelay: 333,            // variable print delay
    // header: null,               // prefix to html
    // footer: null,               // postfix to html
    // base: false,                // preserve the BASE tag or accept a string for the URL
    // formValues: true,           // preserve input/form values
    // canvas: false,              // copy canvas content
    // doctypeString: '...',       // enter a different doctype for older markup
    // removeScripts: false,       // remove script tags from print content
    // copyTagClasses: false,      // copy classes from the html & body tag
    // beforePrintEvent: null,     // function for printEvent in iframe
    // beforePrint: null,          // function called before iframe is filled
    // afterPrint: null            // function called before iframe is removed
    // })
    //     });

    $(window).on('load', function() {
        let date = new Date().toJSON().substr(0,10);
        $("#startDate").val(date);
        $("#endDate").val(date);
})

function loadData(stDate,enDate){
    $("#customData").html("");
    url = '<?php echo base_url('LabController/getTableData'); ?>'

$.post(url, {'startDate':stDate,'endDate':enDate},
    function(data, status) {
     
        let reviewStatus = '<?php echo $RS; ?>';
     
    
    html =`    <table id="table1" class="table table-bordered table-hover table-responsive table-striped w-100">
                                                <thead class="bg-primary-200">
                                                    <tr style="color:white;">
                                                      <th>Item Type</th>
                                                        <th>Test No </th>
                                                        <th>CSS No </th>
                                                        <th> Date </th>
                                                        <th>Item Name </th>
                                                        <th>PO # </th>
                                                           <th>Receiving Date  </th>
                                                        <th>Supplier</th>
                                                          <!-- <th>Supplier Refrence</th> -->
                                                            <th>Quantity </th>
                                                             
                                                                 <th>Result </th>
                                                                   <th>Generated By </th>
                                                                   <th>Review Status </th>
                                                                    <th>Review By </th>
                                                                     <th>Approved Status </th>
                                                                    <th>Approved By </th>
                                                                  
                                                                   <th>Actions </th>
                                                                     <th>Undo </th>
                                                            
                                                                  
                                                    </tr>
                                                </thead>
                                                <tbody>`;
    data.forEach(element => {
      
        html += `
        <tr>
    <td>${element.ItemType}</td>
    <td>${element.TestNO}</td>
    <td>${element.CSSNO}</td>
    <td>${element.Date}</td>
    <td>${element.Size}</td>
    <td>${element.PO}</td>
    <td>${element.Receiving_Date}</td>
    <td>${element.Supplier_Name}</td>
 
    <td>${element.Quantity_Carton}</td>

    <td>${element.Result}</td>
    <td><span class="badge badge-primary p-1">${element.LoginName}</span></td>

    <td>
      
      ${element.ReviewStatus == '1' ?
    
          `<div class="custom-control custom-switch">
         
${reviewStatus == '1' ?
           
          ` <input type="checkbox" class="custom-control-input" id="customreview${element.TID}" checked="">
          <label class="custom-control-label" for="customreview${element.TID}"></label>
          `
          : `<input type="checkbox" class="custom-control-input" id="customreview${element.TID}"  checked="" disabled>
          <label class="custom-control-label" for="customreview${element.TID}"></label>
          `
}
         
          </div>`

      :

      `${reviewStatus == '1' ?

          `<div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customreview${element.TID}">
              <label class="custom-control-label" for="customreview${element.TID}" disabled></label>
          </div>`
          :
          `<div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customreview${element.TID}" disabled>
              <label class="custom-control-label" for="customreview${element.TID}" disabled></label>
          </div>`
      }
 `   }
  </td>
    <td>

    ${element.ReviewStatus == '1'?
            `<span class="badge badge-primary p-1">${element.reviewName}</span>`:
            `<span class="badge badge-warning p-1">Pending</span>`
        }
    </td>
    <td>
        ${element.ApprovedStatus == '1'?
            `<div class="custom-control custom-switch">
            ${approvalStatus == '1'?
                `<input type="checkbox" class="custom-control-input" id="customapproved${element.TID}" checked="">
                <label class="custom-control-label" for="customapproved${element.TID}"></label>`
             :           
             `<input type="checkbox" class="custom-control-input" id="customapproved${element.TID}" checked="" disabled>
                <label class="custom-control-label" for="customapproved${element.TID}"></label>`
       
    }
    </div>`
       :
       `${approvalStatus == '1' ?
            `<div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customapproved${element.TID}">
                <label class="custom-control-label" for="customapproved${element.TID}"></label>
            </div>`
            :
            `<div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customapproved${element.TID}" disabled>
                <label class="custom-control-label" for="customapproved${element.TID}"></label>
            </div>`
       }
      `  }
    </td>
    <td>
            ${element.ApprovedStatus == '1'?
          `<span class="badge badge-primary p-1">${element.Approvalname}</span>`:
          
            `<span class="badge badge-warning p-1">Pending</span>`
            }
    </td>
    <td>
        <div class="row">
            <div class="col-md-2">
                <button type="button" class="btn btn-info btn-xs customupdatebtn1 waves-effect waves-themed" id="custombtn.${element.TID}"><i class="fal fa-edit" aria-hidden="true"></i></button>
            </div>
            <div class="col-md-2">

            </div>
           
            <div class="col-md-2">

            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-warning btn-xs customprintButton waves-effect waves-themed" id="btnPrint.${element.TID}"><i class="fal fa-print" aria-hidden="true"></i></button>
            </div>
        </div>




    </td>
      


           
            <td>
             <div class="col-md-2">
               
            <button type="button" id="customundo.${element.TID}" value="${element.TID}" class="btn btn-danger btn-xs customundobtn">
            <i class="fal fa-trash" aria-hidden="true"></i></button> 
      
                </div>
    </td>
</tr>`
    });
    html += `</tbody></table>`;

$("#customData").append(html);

$('#table1').dataTable({
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

}

$("#searchRange").click(function(e){
   e.preventDefault();
   sDate = $("#startDate").val();
   eDate = $("#endDate").val();
  $("#customData").html("");
  $("#defaultTable").css("display","none");

  url = '<?php echo base_url('LabController/getTableData'); ?>'

$.post(url, {'startDate':sDate,'endDate':eDate},
    function(data, status) {
     
    let reviewStatus = '<?php echo $RS; ?>';
    let approvalStatus = '<?php echo $AS; ?>';
 

    html =`    <table id="table1" class="table table-bordered table-hover table-responsive table-striped w-100">
                                                <thead class="bg-primary-200">
                                                    <tr style="color:white;">
                                                      <th>Item Type</th>
                                                        <th>Test No </th>
                                                        <th>CSS No </th>
                                                        <th> Date </th>
                                                        <th>Item Name </th>
                                                        <th>PO # </th>
                                                           <th>Receiving Date  </th>
                                                        <th>Supplier</th>
                                                          <!-- <th>Supplier Refrence</th> -->
                                                            <th>Quantity </th>
                                                             
                                                                 <th>Result </th>
                                                                   <th>Generated By </th>
                                                                   <th>Review Status </th>
                                                                    <th>Review By </th>
                                                                     <th>Approved Status </th>
                                                                    <th>Approved By </th>
                                                                  
                                                                   <th>Actions </th>
                                                                      <th>Undo </th>
                                                            
                                                                  
                                                    </tr>
                                                </thead>
                                                <tbody>`;
    data.forEach(element => {
      
        html += `
        <tr>
    <td>${element.ItemType}</td>
    <td>${element.TestNO}</td>
    <td>${element.CSSNO}</td>
    <td>${element.Date}</td>
    <td>${element.Size}</td>
    <td>${element.PO}</td>
    <td>${element.Receiving_Date}</td>
    <td>${element.Supplier_Name}</td>
 
    <td>${element.Quantity_Carton}</td>

    <td>${element.Result}</td>
    <td><span class="badge badge-primary p-1">${element.LoginName}</span></td>

    <td>
      
      ${element.ReviewStatus == '1' ?
    
          `<div class="custom-control custom-switch">
         
${reviewStatus == '1' ?
           
          ` <input type="checkbox" class="custom-control-input" id="customreview${element.TID}" checked="">
          <label class="custom-control-label" for="customreview${element.TID}"></label>
          `
          : `<input type="checkbox" class="custom-control-input" id="customreview${element.TID}"  checked="" disabled>
          <label class="custom-control-label" for="customreview${element.TID}"></label>
          `
}
         
          </div>`

      :

      `${reviewStatus == '1' ?

          `<div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customreview${element.TID}">
              <label class="custom-control-label" for="customreview${element.TID}" disabled></label>
          </div>`
          :
          `<div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customreview${element.TID}" disabled>
              <label class="custom-control-label" for="customreview${element.TID}" disabled></label>
          </div>`
      }
 `   }
  </td>
    <td>

    ${element.ReviewStatus == '1'?
            `<span class="badge badge-primary p-1">${element.reviewName}</span>`:
            `<span class="badge badge-warning p-1">Pending</span>`
        }
    </td>
    <td>
        ${element.ApprovedStatus == '1'?
            `<div class="custom-control custom-switch">
            ${approvalStatus == '1'?
                `<input type="checkbox" class="custom-control-input" id="customapproved${element.TID}" checked="">
                <label class="custom-control-label" for="customapproved${element.TID}"></label>`
             :           
             `<input type="checkbox" class="custom-control-input" id="customapproved${element.TID}" checked="" disabled>
                <label class="custom-control-label" for="customapproved${element.TID}"></label>`
       
    }
    </div>`
       :
       `${approvalStatus == '1' ?
            `<div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customapproved${element.TID}">
                <label class="custom-control-label" for="customapproved${element.TID}"></label>
            </div>`
            :
            `<div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customapproved${element.TID}" disabled>
                <label class="custom-control-label" for="customapproved${element.TID}"></label>
            </div>`
       }
      `  }
    </td>
    <td>
            ${element.ApprovedStatus == '1'?
          `<span class="badge badge-primary p-1">${element.Approvalname}</span>`:
          
            `<span class="badge badge-warning p-1">Pending</span>`
            }
    </td>
    <td>
        <div class="row">
            <div class="col-md-2">
                <button type="button" class="btn btn-info btn-xs customupdatebtn1 waves-effect waves-themed" id="custombtn.${element.TID}"><i class="fal fa-edit" aria-hidden="true"></i></button>
            </div>
            <div class="col-md-2">

            </div>
          
            <div class="col-md-2">

            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-warning btn-xs customprintButton waves-effect waves-themed" id="btnPrint.${element.TID}"><i class="fal fa-print" aria-hidden="true"></i></button>
            </div>
        </div>




    </td>
   <td>
             <div class="col-md-2">
               
           <button type="button" id="customundo.${element.TID}" value="${element.TID}" class="btn btn-danger btn-xs customundobtn">
            <i class="fal fa-trash" aria-hidden="true"></i></button> 
      
                </div>
    </td>
</tr>`
    });
    html += `</tbody></table>`;

$("#customData").append(html);

$('#table1').dataTable({
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

});
     function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
     window.location.reload();
}

                            
    $(".updatebtn").click(function(e) {
    //alert("heloo");
     let id= this.id;
    //alert(id);
     let split_value = id.split(".");
    //alert(split_value);
     //console.log(split_value);
     var TID =split_value[1];
     //alert(`#issueDate.${split_value[1]}`);
      //alert(split_value[1]);
//   let RID =split_value[1]);
     ///var reviewStatus = $(`#review${split_value[1]}`).val();
     ///var approved = $(`#review${split_value[1]}`).val();
     
     let reviewStatus;
     if($(`#review${split_value[1]}`).is(":checked")){
        reviewStatus = 1;
     }
     else{
        reviewStatus = 0;
     }
     let approvedStatus;
     if($(`#approved${split_value[1]}`).is(":checked")){
        approvedStatus = 1;
     }
     else{
        approvedStatus = 0;
     }
//alert(Status);
      //$('#check_id').val();
      //alert(reviewStatus);
       //alert(approvedStatus);
        //alert(TID);
   
 url = "<?php echo base_url(''); ?>LabController/updated/"+ reviewStatus + "/" + approvedStatus  + "/" + TID
  
//alert(url);
   $.get(url, function(data){
            alert("Data Updated Successfully");
            location.reload();
            });

            
     });

     $("#customData").on('click','.customupdatebtn1',function() {
   
     let id= this.id;
    //alert(id);
     let split_value = id.split(".");
    //alert(split_value);
     //console.log(split_value);
     var TID =split_value[1];
     //alert(`#issueDate.${split_value[1]}`);
      //alert(split_value[1]);
//   let RID =split_value[1]);
     ///var reviewStatus = $(`#review${split_value[1]}`).val();
     ///var approved = $(`#review${split_value[1]}`).val();
     
     let reviewStatus;
     if($(`#customreview${split_value[1]}`).is(":checked")){
        reviewStatus = 1;
     }
     else{
        reviewStatus = 0;
     }
     let approvedStatus;
     if($(`#customapproved${split_value[1]}`).is(":checked")){
        approvedStatus = 1;
     }
     else{
        approvedStatus = 0;
     }
//alert(Status);
      //$('#check_id').val();
      //alert(reviewStatus);
       //alert(approvedStatus);
        //alert(TID);
   
 url = "<?php echo base_url(''); ?>LabController/updated/"+ reviewStatus + "/" + approvedStatus  + "/" + TID
  
//alert(url);
   $.get(url, function(data){
            alert("Data Updated Successfully");
            loadData(sDate,eDate)
            });

            
     });

      $(".printButton").click(function(e) {

 
         let id= this.id;

     let split_value = id.split(".");

     var TID =split_value[1];
      let testTypeGet;
    let url = '<?php echo base_url('LabController/getHead'); ?>'
    let url2 = '<?php echo base_url('LabController/getDetails'); ?>'
$.post(url, {'TID':TID},
    function(data, status) {
  
    testTypeGet = data[0].ItemType;
  
    if(data[0].ItemType.trim() == 'Carton'){
        $("#testNo").text(data[0].TestNO);
     $("#dateTest").text(data[0].Date);
     $("#pono").text(data[0].PO);
     $("#receiveDate").text(data[0].Receiving_Date);
     $("#size").text(data[0].Size);
     $("#supplierName").text(data[0].Supplier_Name);
     $("#supplierRef").text(data[0].Supplier_Ref);
     $("#quantityCarton").text(data[0].Quantity_Carton);

     $("#testPerformed").text(data[0].performedBy);
     data[0].Approvalname? $("#testApproved").text(data[0].Approvalname):$("#testApproved").text("Pending");
   //  $("#Incharge").text(data[0].Approvalname);
     
     data[0].reviewName? $("#testReviewed").text(data[0].reviewName):$("#testReviewed").text("Pending");
     $("#Conclusion").text(data[0].Result);
     $.post(url2, {'TID':TID},
    function(data, status) {
      
        html = ''
        data.forEach(element => {
           html += `<tr>
                            <td style="border:2px solid black">${element.Test}</td>
                            <td style="border:2px solid black">${element.Requirments}</td>
                            <td style="border:2px solid black">${element.Value}</td>
                            <td style="border:2px solid black">
                           ${element.result}
                            </td>
                        </tr>`
       });

     $("#DetailsTest").html(html);

    });
    $('#exampleModal').modal('toggle');
    }
    else if(data[0].ItemType.trim() == 'Foam'){
        $("#testNoFoam").text(data[0].TestNO);
     $("#dateTestFoam").text(data[0].Date);
     $("#ponoFoam").text(data[0].PO);
     $("#receiveDateFoam").text(data[0].Receiving_Date);
    
     $("#supplierRefFoam").text(data[0].Supplier_Ref);

     $("#testPerformedFoam").text(data[0].performedBy);
     data[0].Approvalname? $("#testApprovedFoam").text(data[0].Approvalname):$("#testApprovedFoam").text("Pending");
   //  $("#Incharge").text(data[0].Approvalname);
     
     data[0].reviewName? $("#testReviewedFoam").text(data[0].reviewName):$("#testReviewedFoam").text("Pending");
     $("#ConclusionFoam").text(data[0].Result);
     $.post(url2, {'TID':TID},
    function(data, status) {

        html = ''
        data.forEach(element => {
           html += `<tr>
                            <td style="border:2px solid black">${element.Test}</td>
                            <td style="border:2px solid black">${element.result}</td>
                            <td style="border:2px solid black">${element.Unit}</td>
                            <td style="border:2px solid black">
                           ${element.Standard}
                            </td>
                        </tr>`
       });

     $("#DetailsTestFoam").html(html);

    });
    $('#exampleModalFoam').modal('toggle');
    }
    else if(data[0].ItemType.trim() == 'Fabric'){
        $("#testNoFabric").text(data[0].TestNO);
     $("#dateTestFabric").text(data[0].Date);
     $("#ponoFabric").text(data[0].PO);
     $("#receiveDateFabric").text(data[0].Receiving_Date);
    
     $("#supplierRefFabric").text(data[0].Supplier_Ref);

     $("#testPerformedFabric").text(data[0].performedBy);
     $("#ResultFabric").text(data[0].Result);
     $("#CSSNoFabric").text(data[0].CSSNO);
     $("#materialNameFabric").text(data[0].Size);

     data[0].Approvalname? $("#testApprovedFabric").text(data[0].Approvalname):$("#testApprovedFabric").text("Pending");
   //  $("#Incharge").text(data[0].Approvalname);
     
     data[0].reviewName? $("#testReviewedFabric").text(data[0].reviewName):$("#testReviewedFabric").text("Pending");
     $("#ConclusionFabric").text(data[0].Result);
     $.post(url2, {'TID':TID},
    function(data, status) {
    
        html = ''
        data.forEach(element => {
           html += `<tr>
                            <td style="border:2px solid black">${element.Test}</td>
                            <td style="border:2px solid black">${element.result}</td>
                            <td style="border:2px solid black">${element.Uncertainty}</td>
                            <td style="border:2px solid black">
                           ${element.ReMarks}
                            </td>
                        </tr>`
       });

     $("#DetailsTestFabric").html(html);

    });
    $('#exampleModalFabric').modal('toggle');
    }
    else if(data[0].ItemType.trim() == 'Material'){
        $("#testNoMaterial").text(data[0].TestNO);
     $("#dateTestMaterial").text(data[0].Date);
     $("#ponoMaterial").text(data[0].PO);
     $("#receiveDateMaterial").text(data[0].Receiving_Date);
    
     $("#supplierRefMaterial").text(data[0].Supplier_Ref);

     $("#testPerformedMaterial").text(data[0].performedBy);
     $("#ResultMaterial").text(data[0].Result);
     $("#CSSNoMaterial").text(data[0].CSSNO);
     $("#materialNameMaterial").text(data[0].Size);

     data[0].Approvalname? $("#testApprovedMaterial").text(data[0].Approvalname):$("#testApprovedMaterial").text("Pending");
   //  $("#Incharge").text(data[0].Approvalname);
     
     data[0].reviewName? $("#testReviewedMaterial").text(data[0].reviewName):$("#testReviewedMaterial").text("Pending");
     $("#ConclusionMaterial").text(data[0].Result);
     $.post(url2, {'TID':TID},
    function(data, status) {
       
        html = ''
        data.forEach(element => {
           html += `<tr>
                            <td style="border:2px solid black">${element.Test}</td>
                            <td style="border:2px solid black">${element.result}</td>
                            <td style="border:2px solid black">${element.Uncertainty}</td>
                            <td style="border:2px solid black">
                           ${element.ReMarks}
                            </td>
                        </tr>`
       });

     $("#DetailsTestMaterial").html(html);

    });
    $('#exampleModalMaterial').modal('toggle');
    }
    else if(data[0].ItemType.trim() == 'Thread'){
       
        $("#testNoThread").text(data[0].TestNO);
     $("#dateTestThread").text(data[0].Date);
     $("#ponoThread").text(data[0].PO);
     $("#receiveDateThread").text(data[0].Receiving_Date);
     $("#thicknessThread").text(data[0].Thickness);
     $("#supplierNameThread").text(data[0].Supplier_Name);
     $("#supplierRefThread").text(data[0].Supplier_Ref);
     $("#linearDensityThread").text(data[0].LinearDensity);
     $("#twistThread").text(data[0].TwistPerInch);
     $("#testPerformedThread").text(data[0].performedBy);
     data[0].Approvalname? $("#testApprovedThread").text(data[0].Approvalname):$("#testApprovedThread").text("Pending");
   //  $("#Incharge").text(data[0].Approvalname);
     
     data[0].reviewName? $("#testReviewedThread").text(data[0].reviewName):$("#testReviewedThread").text("Pending");
     $("#ConclusionThread").text(data[0].Result);
     $.post(url2, {'TID':TID},
    function(data, status) {
     
        html = ''
        let i=0;
       let extMax = 0;
       let Max = 0;
       let ext = 0;
        data.forEach(element => {
        
          extMax += parseInt(element.ExtatMax);
          Max += parseInt(element.MaxLoad);
          ext += parseInt(element.Ext);
            html += `<tr>
                            <td style="border:2px solid black">${element.TDate}</td>
                            <td style="border:2px solid black">${element.ExtatMax}</td>
                            <td style="border:2px solid black">${element.MaxLoad}</td>
                            <td style="border:2px solid black">
                           ${element.Ext}
                            </td>
                        </tr>`
       });
    let sizeOfThread = data.length;
      html += `<tr>
      <td style="border:2px solid black">Average</td>
                            <td style="border:2px solid black">${extMax/sizeOfThread}</td>
                            <td style="border:2px solid black">${Max/sizeOfThread}</td>
                            <td style="border:2px solid black">
                           ${ext/sizeOfThread}
                            </td>
      </tr>`

     $("#DetailsTestThread").html(html);

    });
    $('#exampleModalThread').modal('toggle');
    }
    else if(data[0].ItemType.trim() == 'Blader')
    {
        $("#testNoBlader").text(data[0].TestNO);
     $("#dateTestBlader").text(data[0].Date);
     $("#ponoBlader").text(data[0].PO);
     $("#receiveDateBlader").text(data[0].Receiving_Date);
  
     $("#supplierNameBlader").text(data[0].Supplier_Name);
     $("#supplierRefBlader").text(data[0].Supplier_Ref);
     $("#hardnessBlader").text(data[0].Hardness);
     $("#sizeBlader").text(data[0].Size);
     $("#materialBlader").text(data[0].material);
     $("#testPerformedBlader").text(data[0].performedBy);
     data[0].Approvalname? $("#testApprovedBlader").text(data[0].Approvalname):$("#testApprovedBlader").text("Pending");
   //  $("#Incharge").text(data[0].Approvalname);
     
     data[0].reviewName? $("#testReviewedBlader").text(data[0].reviewName):$("#testReviewedBlader").text("Pending");
     $("#Conclusion").text(data[0].Result);
     $.post(url2, {'TID':TID},
    function(data, status) {
  
        html = ''
        data.forEach(element => {
           html += `<tr>
                            <td style="border:2px solid black">${element.Test}</td>
                            <td style="border:2px solid black">${element.Unit}</td>
                            <td style="border:2px solid black">${element.result1}</td>
                            <td style="border:2px solid black">${element.result2}</td>
                            <td style="border:2px solid black">${element.result3}</td>
                            <td style="border:2px solid black">${element.result4}</td>
                   
                        </tr>`
       });

     $("#DetailsTestBlader").html(html);

    });
    $('#exampleModalBlader').modal('toggle');

    }
    else if(data[0].ItemType.trim() == 'FGT')
    {
  
        $("#testNoFGT").text(data[0].TestNO);
     $("#dateTestFGT").text(data[0].Date);
     $("#modelNameFGT").text(data[0].ModelName);
     $("#CSSCodeFGT").text(data[0].CSSNO);
  
     $("#pressureFGT").text(data[0].Pressure);
     $("#TempHumFGT").text(data[0].TempHumidity);
     $("#articleFGT").text(data[0].Article);
     $("#categoryFGT").text(data[0].Category);
     $("#sizeFGT").text(data[0].Size);
     $("#testedForFGT").text(data[0].Testedfor);
     $("#testPerformedFGT").text(data[0].performedBy);
     $("#noteFGT").text(data[0].Note);
     
     data[0].Approvalname? $("#testApprovedFGT").text(data[0].Approvalname):$("#testApprovedFGT").text("Pending");
   
   //  $("#Incharge").text(data[0].Approvalname);
     
     data[0].reviewName? $("#testReviewedFGT").text(data[0].reviewName):$("#testReviewedFGT").text("Pending");
     $("#ConclusionFGT").text(data[0].Result);
     $.post(url2, {'TID':TID},
    function(data, status) {

        html = ''
        data.forEach(element => {
           html += `<tr>
                            <td style="border:2px solid black">${element.Weight?element.Weight:''}</td>
                            <td style="border:2px solid black">${element.CircumferenceMin?element.CircumferenceMin:''}</td>
                            <td style="border:2px solid black">${element.CircumferenceMax?element.CircumferenceMax:''}</td>
                            <td style="border:2px solid black">${element.Deviation?element.Deviation:''}</td>
                            <td style="border:2px solid black">${element.ReboundTest?element.ReboundTest:''}</td>
                            <td style="border:2px solid black">${element.Remarks?element.Remarks:''}</td>
                   
                        </tr>`
       });

     $("#DetailsTestFGT").html(html);

    });
    $('#exampleModalFGT').modal('toggle');

    }
     


    });
        
     });


     $("#customData").on("click",".customprintButton", function() {

  let id= this.id;

let split_value = id.split(".");

var TID =split_value[1];

let testTypeGet;
    let url = '<?php echo base_url('LabController/getHead'); ?>'
    let url2 = '<?php echo base_url('LabController/getDetails'); ?>'

$.post(url, {'TID':TID},
function(data, status) {
    testTypeGet = data[0].ItemType;

    if(data[0].ItemType.trim() == 'Carton'){
        $("#testNo").text(data[0].TestNO);
     $("#dateTest").text(data[0].Date);
     $("#pono").text(data[0].PO);
     $("#receiveDate").text(data[0].Receiving_Date);
     $("#size").text(data[0].Size);
     $("#supplierName").text(data[0].Supplier_Name);
     $("#supplierRef").text(data[0].Supplier_Ref);
     $("#quantityCarton").text(data[0].Quantity_Carton);

     $("#testPerformed").text(data[0].performedBy);
     data[0].Approvalname? $("#testApproved").text(data[0].Approvalname):$("#testApproved").text("Pending");
   //  $("#Incharge").text(data[0].Approvalname);
     
     data[0].reviewName? $("#testReviewed").text(data[0].reviewName):$("#testReviewed").text("Pending");
     $("#Conclusion").text(data[0].Result);
     $.post(url2, {'TID':TID},
    function(data, status) {
      
        html = ''
        data.forEach(element => {
           html += `<tr>
                            <td style="border:2px solid black">${element.Test}</td>
                            <td style="border:2px solid black">${element.Requirments}</td>
                            <td style="border:2px solid black">${element.Value}</td>
                            <td style="border:2px solid black">
                           ${element.result}
                            </td>
                        </tr>`
       });

     $("#DetailsTest").html(html);

    });
    $('#exampleModal').modal('toggle');
    }
    else if(data[0].ItemType.trim() == 'Foam'){
        $("#testNoFoam").text(data[0].TestNO);
     $("#dateTestFoam").text(data[0].Date);
     $("#ponoFoam").text(data[0].PO);
     $("#receiveDateFoam").text(data[0].Receiving_Date);
    
     $("#supplierRefFoam").text(data[0].Supplier_Ref);

     $("#testPerformedFoam").text(data[0].performedBy);
     data[0].Approvalname? $("#testApprovedFoam").text(data[0].Approvalname):$("#testApprovedFoam").text("Pending");
   //  $("#Incharge").text(data[0].Approvalname);
     
     data[0].reviewName? $("#testReviewedFoam").text(data[0].reviewName):$("#testReviewedFoam").text("Pending");
     $("#Conclusion").text(data[0].Result);
     $.post(url2, {'TID':TID},
    function(data, status) {
      
        html = ''
        data.forEach(element => {
           html += `<tr>
                            <td style="border:2px solid black">${element.Test}</td>
                            <td style="border:2px solid black">${element.result}</td>
                            <td style="border:2px solid black">${element.Unit}</td>
                            <td style="border:2px solid black">
                           ${element.Standard}
                            </td>
                        </tr>`
       });

     $("#DetailsTestFoam").html(html);

    });
    $('#exampleModalFoam').modal('toggle');
    }
    else if(data[0].ItemType.trim() == 'Fabric'){
        $("#testNoFabric").text(data[0].TestNO);
     $("#dateTestFabric").text(data[0].Date);
     $("#ponoFabric").text(data[0].PO);
     $("#receiveDateFabric").text(data[0].Receiving_Date);
    
     $("#supplierRefFabric").text(data[0].Supplier_Ref);

     $("#testPerformedFabric").text(data[0].performedBy);
     $("#ResultFabric").text(data[0].Result);
     $("#CSSNoFabric").text(data[0].CSSNO);
     $("#materialNameFabric").text(data[0].Size);

     data[0].Approvalname? $("#testApprovedFabric").text(data[0].Approvalname):$("#testApprovedFabric").text("Pending");
   //  $("#Incharge").text(data[0].Approvalname);
     
     data[0].reviewName? $("#testReviewedFabric").text(data[0].reviewName):$("#testReviewedFabric").text("Pending");
     $("#Conclusion").text(data[0].Result);
     $.post(url2, {'TID':TID},
    function(data, status) {
 
        html = ''
        data.forEach(element => {
           html += `<tr>
                            <td style="border:2px solid black">${element.Test}</td>
                            <td style="border:2px solid black">${element.result}</td>
                            <td style="border:2px solid black">${element.Uncertainty}</td>
                            <td style="border:2px solid black">
                           ${element.ReMarks}
                            </td>
                        </tr>`
       });

     $("#DetailsTestFabric").html(html);

    });
    $('#exampleModalFabric').modal('toggle');
    }
    else if(data[0].ItemType.trim() == 'Material'){
        $("#testNoMaterial").text(data[0].TestNO);
     $("#dateTestMaterial").text(data[0].Date);
     $("#ponoMaterial").text(data[0].PO);
     $("#receiveDateMaterial").text(data[0].Receiving_Date);
    
     $("#supplierRefMaterial").text(data[0].Supplier_Ref);

     $("#testPerformedMaterial").text(data[0].performedBy);
     $("#ResultMaterial").text(data[0].Result);
     $("#CSSNoMaterial").text(data[0].CSSNO);
     $("#materialNameMaterial").text(data[0].Size);

     data[0].Approvalname? $("#testApprovedMaterial").text(data[0].Approvalname):$("#testApprovedMaterial").text("Pending");
   //  $("#Incharge").text(data[0].Approvalname);
     
     data[0].reviewName? $("#testReviewedMaterial").text(data[0].reviewName):$("#testReviewedMaterial").text("Pending");
     $("#ConclusionMaterial").text(data[0].Result);
     $.post(url2, {'TID':TID},
    function(data, status) {

        html = ''
        data.forEach(element => {
           html += `<tr>
                            <td style="border:2px solid black">${element.Test}</td>
                            <td style="border:2px solid black">${element.result}</td>
                            <td style="border:2px solid black">${element.Uncertainty}</td>
                            <td style="border:2px solid black">
                           ${element.ReMarks}
                            </td>
                        </tr>`
       });

     $("#DetailsTestMaterial").html(html);

    });
    $('#exampleModalMaterial').modal('toggle');
    }
    else if(data[0].ItemType.trim() == 'Thread'){
      
        $("#testNoThread").text(data[0].TestNO);
     $("#dateTestThread").text(data[0].Date);
     $("#ponoThread").text(data[0].PO);
     $("#receiveDateThread").text(data[0].Receiving_Date);
     $("#thicknessThread").text(data[0].Thickness);
     $("#supplierNameThread").text(data[0].Supplier_Name);
     $("#supplierRefThread").text(data[0].Supplier_Ref);
     $("#linearDensityThread").text(data[0].LinearDensity);
     $("#twistThread").text(data[0].TwistPerInch);
     $("#testPerformedThread").text(data[0].performedBy);
     data[0].Approvalname? $("#testApprovedThread").text(data[0].Approvalname):$("#testApprovedThread").text("Pending");
   //  $("#Incharge").text(data[0].Approvalname);
     
     data[0].reviewName? $("#testReviewedThread").text(data[0].reviewName):$("#testReviewedThread").text("Pending");
     $("#ConclusionThread").text(data[0].Result);
     $.post(url2, {'TID':TID},
    function(data, status) {
      
        html = ''
        data.forEach(element => {
           html += `<tr>
                            <td style="border:2px solid black">${element.TDate}</td>
                            <td style="border:2px solid black">${element.ExtatMax}</td>
                            <td style="border:2px solid black">${element.MaxLoad}</td>
                            <td style="border:2px solid black">
                           ${element.Ext}
                            </td>
                        </tr>`
       });

     $("#DetailsTestThread").html(html);

    });
    $('#exampleModalThread').modal('toggle');
    }

    else if(data[0].ItemType.trim() == 'Blader')
    {
        $("#testNoBlader").text(data[0].TestNO);
     $("#dateTestBlader").text(data[0].Date);
     $("#ponoBlader").text(data[0].PO);
     $("#receiveDateBlader").text(data[0].Receiving_Date);
  
     $("#supplierNameBlader").text(data[0].Supplier_Name);
     $("#supplierRefBlader").text(data[0].Supplier_Ref);
     $("#hardnessBlader").text(data[0].Hardness);
     $("#sizeBlader").text(data[0].Size);
     $("#materialBlader").text(data[0].material);
     $("#testPerformedBlader").text(data[0].performedBy);
     data[0].Approvalname? $("#testApprovedBlader").text(data[0].Approvalname):$("#testApprovedBlader").text("Pending");
   //  $("#Incharge").text(data[0].Approvalname);
     
     data[0].reviewName? $("#testReviewedBlader").text(data[0].reviewName):$("#testReviewedBlader").text("Pending");
     $("#Conclusion").text(data[0].Result);
     $.post(url2, {'TID':TID},
    function(data, status) {

        html = ''
        data.forEach(element => {
           html += `<tr>
                            <td style="border:2px solid black">${element.Test}</td>
                            <td style="border:2px solid black">${element.Unit}</td>
                            <td style="border:2px solid black">${element.result1}</td>
                            <td style="border:2px solid black">${element.result2}</td>
                            <td style="border:2px solid black">${element.result3}</td>
                            <td style="border:2px solid black">${element.result4}</td>
                   
                        </tr>`
       });

     $("#DetailsTestBlader").html(html);

    });
    $('#exampleModalBlader').modal('toggle');

    }

    else if(data[0].ItemType.trim() == 'FGT')
    {
    
        $("#testNoFGT").text(data[0].TestNO);
     $("#dateTestFGT").text(data[0].Date);
     $("#modelNameFGT").text(data[0].ModelName);
     $("#CSSCodeFGT").text(data[0].CSSNO);
  
     $("#pressureFGT").text(data[0].Pressure);
     $("#TempHumFGT").text(data[0].TempHumidity);
     $("#articleFGT").text(data[0].Article);
     $("#categoryFGT").text(data[0].Category);
     $("#sizeFGT").text(data[0].Size);
     $("#testedForFGT").text(data[0].Testedfor);
     $("#testPerformedFGT").text(data[0].performedBy);
     $("#noteFGT").text(data[0].Note);
     
     data[0].Approvalname? $("#testApprovedFGT").text(data[0].Approvalname):$("#testApprovedFGT").text("Pending");
   
   //  $("#Incharge").text(data[0].Approvalname);
     
     data[0].reviewName? $("#testReviewedFGT").text(data[0].reviewName):$("#testReviewedFGT").text("Pending");
     $("#ConclusionFGT").text(data[0].Result);
     $.post(url2, {'TID':TID},
    function(data, status) {

        html = ''
        data.forEach(element => {
           html += `<tr>
                            <td style="border:2px solid black">${element.Weight?element.Weight:''}</td>
                            <td style="border:2px solid black">${element.CircumferenceMin?element.CircumferenceMin:''}</td>
                            <td style="border:2px solid black">${element.CircumferenceMax?element.CircumferenceMax:''}</td>
                            <td style="border:2px solid black">${element.Deviation?element.Deviation:''}</td>
                            <td style="border:2px solid black">${element.ReboundTest?element.ReboundTest:''}</td>
                            <td style="border:2px solid black">${element.Remarks?element.Remarks:''}</td>
                   
                        </tr>`
       });

     $("#DetailsTestFGT").html(html);

    });
    $('#exampleModalFGT').modal('toggle');

    }
     


});
     
});
                          
     
     
     
     $(document).ready(function() {
                              
                                $('#table').dataTable({
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
                        </script>
                        <!-- END Page Footer -->
                        <!-- BEGIN Shortcuts -->
                        <div class="modal fade modal-backdrop-transparent" id="modal-shortcut" tabindex="-1" role="dialog" aria-labelledby="modal-shortcut" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-top modal-transparent" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <ul class="app-list w-auto h-auto p-0 text-left">
                                            <li>
                                                <a href="intel_introduction.html" class="app-list-item text-white border-0 m-0">
                                                    <div class="icon-stack">
                                                        <i class="base base-7 icon-stack-3x opacity-100 color-primary-500 "></i>
                                                        <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                                        <i class="fal fa-home icon-stack-1x opacity-100 color-white"></i>
                                                    </div>
                                                    <span class="app-list-name">
                                                        Home
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page_inbox_general.html" class="app-list-item text-white border-0 m-0">
                                                    <div class="icon-stack">
                                                        <i class="base base-7 icon-stack-3x opacity-100 color-success-500 "></i>
                                                        <i class="base base-7 icon-stack-2x opacity-100 color-success-300 "></i>
                                                        <i class="ni ni-envelope icon-stack-1x text-white"></i>
                                                    </div>
                                                    <span class="app-list-name">
                                                        Inbox
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="intel_introduction.html" class="app-list-item text-white border-0 m-0">
                                                    <div class="icon-stack">
                                                        <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                                        <i class="fal fa-plus icon-stack-1x opacity-100 color-white"></i>
                                                    </div>
                                                    <span class="app-list-name">
                                                        Add More
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        <script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
        <script type="text/javascript">
            /* Activate smart panels */
            $('#js-page-content').smartPanel();
        </script>
        <!-- The order of scripts is irrelevant. Please check out the plugin pages for more details about these plugins below: -->
        <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
        <script>
            
            $('#schedule').dataTable({
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
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js" integrity="sha512-gtII6Z4fZyONX9GBrF28JMpodY4vIOI0lBjAtN/mcK7Pz19Mu1HHIRvXH6bmdChteGpEccxZxI0qxXl9anY60w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            let fileSelectStore;
            let HeaderArray = [];
            let ChildArray = [];
            let IdOfNewlyEnteredRecord;

            function fileSelect(event) {
                fileSelectStore = event[0];
            }
            $("#submitData").click(function(e) {
                e.preventDefault();
                $("#submitData").css("display", "none");
                $("#sendHeaderValues").css("display", "block");
                let testType = $("#testType").val();  

                if (testType == 1){
         
                    if (fileSelectStore) {
                
                    this.filetoupload = fileSelectStore;
                    //show image review
                    var reader = new FileReader();
                    reader.readAsDataURL(this.filetoupload);
                    this.fileNameStore = this.filetoupload.name;
                    this.file = fileSelectStore;
                    let fileReader = new FileReader();
                    fileReader.readAsArrayBuffer(this.file);
                    fileReader.onload = (e) => {
                        this.arrayBuffer = fileReader.result;
                        var data = new Uint8Array(this.arrayBuffer);
                        var arr = new Array();
                        for (var i = 0; i != data.length; ++i) arr[i] = String.fromCharCode(data[i]);
                        var bstr = arr.join("");
                        var workbook = XLSX.read(bstr, {
                            type: "binary"
                        });
                        let sheetNo = $("#sheetNo").val();
                        // alert(sheetNo);
                        var first_sheet_name = workbook.SheetNames[sheetNo - 1];
                        var worksheet = workbook.Sheets[first_sheet_name];
                        //  console.log(XLSX.utils.sheet_to_json(worksheet,{raw:true}));    
                        let arraylist = XLSX.utils.sheet_to_json(worksheet, {
                            raw: false
                        });
                        this.filelist = arraylist;
                        let testNumber;
                        let PONumber
                        this.filelist.forEach(element => {
                            if (element.TestNo != undefined || element.PONo != undefined) {
                                testNumber = element.TestNo;
                                PONumber = element.PONo;
                                let arrayHead = [element.TestDate, element.PONo, element.Quantity, element.ReceivingDate, element.ItemName, element.SupplierName, element.TestNo, element.SupplierRef, element.Result, element.ItemType];
                                let arrayBody = [element.TestNo, element.PONo, element.Requirement, element.Test, element.Results, element.Value,']'];
                                HeaderArray.push(arrayHead);
                                ChildArray.push(arrayBody)
                            } else {

                                let arrayBody = [testNumber, PONumber, element.Requirement, element.Test, element.Results, element.Value,']'];

                                ChildArray.push(arrayBody)
                            }
                        });
                        $("#headerData").val(HeaderArray);
                $("#childData").val(ChildArray);
     

                    }
                }
                }
                else if(testType == 2){
              
                  if (fileSelectStore) {
                
                this.filetoupload = fileSelectStore;
                //show image review
                var reader = new FileReader();
                reader.readAsDataURL(this.filetoupload);
                this.fileNameStore = this.filetoupload.name;
                this.file = fileSelectStore;
                let fileReader = new FileReader();
                fileReader.readAsArrayBuffer(this.file);
                fileReader.onload = (e) => {
                    this.arrayBuffer = fileReader.result;
                    var data = new Uint8Array(this.arrayBuffer);
                    var arr = new Array();
                    for (var i = 0; i != data.length; ++i) arr[i] = String.fromCharCode(data[i]);
                    var bstr = arr.join("");
                    var workbook = XLSX.read(bstr, {
                        type: "binary"
                    });
                    let sheetNo = $("#sheetNo").val();
                    // alert(sheetNo);
                    var first_sheet_name = workbook.SheetNames[sheetNo - 1];
                    var worksheet = workbook.Sheets[first_sheet_name];
                    //  console.log(XLSX.utils.sheet_to_json(worksheet,{raw:true}));    
                    let arraylist = XLSX.utils.sheet_to_json(worksheet, {
                        raw: false
                    });
                    this.filelist = arraylist;
                    let testNumber;
                    let PONumber
                    this.filelist.forEach(element => {
                        if (element.TestNo != undefined || element.PONo != undefined) {
                            testNumber = element.TestNo;
                            PONumber = element.PONO;
                            let arrayHead = [element.TestNo,element.Date, element.ReceivingDate, element.PONO, element.RefNo];
                            let arrayBody = [element.TestNo, element.PONO, element.Test, element.Standard, element.Unit,element.Result,']'];
                            HeaderArray.push(arrayHead);
                            ChildArray.push(arrayBody)
                        } else {

                            let arrayBody = [testNumber, PONumber, element.Test, element.Standard, element.Unit,element.Result,']'];

                            ChildArray.push(arrayBody)
                        }
                    });
                    $("#headerData").val(HeaderArray);
            $("#childData").val(ChildArray);


                }
            }     
                }
                else if(testType == 3){
                  
                    if (fileSelectStore) {
                
                this.filetoupload = fileSelectStore;
                //show image review
                var reader = new FileReader();
                reader.readAsDataURL(this.filetoupload);
                this.fileNameStore = this.filetoupload.name;
                this.file = fileSelectStore;
                let fileReader = new FileReader();
                fileReader.readAsArrayBuffer(this.file);
                fileReader.onload = (e) => {
                    this.arrayBuffer = fileReader.result;
                    var data = new Uint8Array(this.arrayBuffer);
                    var arr = new Array();
                    for (var i = 0; i != data.length; ++i) arr[i] = String.fromCharCode(data[i]);
                    var bstr = arr.join("");
                    var workbook = XLSX.read(bstr, {
                        type: "binary"
                    });
                    let sheetNo = $("#sheetNo").val();
                    // alert(sheetNo);
                    var first_sheet_name = workbook.SheetNames[sheetNo - 1];
                    var worksheet = workbook.Sheets[first_sheet_name];
                    //  console.log(XLSX.utils.sheet_to_json(worksheet,{raw:true}));    
                    let arraylist = XLSX.utils.sheet_to_json(worksheet, {
                        raw: false
                    });
                    this.filelist = arraylist;
                    let testNumber;
                    let PONumber
                    this.filelist.forEach(element => {
                        if (element.TestNo != undefined || element.PONo != undefined) {
                            testNumber = element.TestNo;
                            PONumber = element.PONo;
                            let arrayHead = [element.TestNo,element.CSSNO, element.TestDate, element.ItemName, element.PONo, element.ReceivingDate, element.SupplierName, element.SupplierRef, element.Quantity, element.Result, element.ItemType];
                            let arrayBody = [element.Test,element.Requirement, element.Result, element.Uncertainty,element.Remark,']'];
                            HeaderArray.push(arrayHead);
                            ChildArray.push(arrayBody)
                        } else {
                        
                            let arrayBody = [element.Test,element.Requirement, element.Result_1, element.Uncertainty,element.Remark,']'];

                            ChildArray.push(arrayBody)
                        }
                    });
                    $("#headerData").val(HeaderArray);
            $("#childData").val(ChildArray);
                }
            }
                }
                else if (testType == 4){
                 
                    if (fileSelectStore) {
                
                this.filetoupload = fileSelectStore;
                //show image review
                var reader = new FileReader();
                reader.readAsDataURL(this.filetoupload);
                this.fileNameStore = this.filetoupload.name;
                this.file = fileSelectStore;
                let fileReader = new FileReader();
                fileReader.readAsArrayBuffer(this.file);
                fileReader.onload = (e) => {
                    this.arrayBuffer = fileReader.result;
                    var data = new Uint8Array(this.arrayBuffer);
                    var arr = new Array();
                    for (var i = 0; i != data.length; ++i) arr[i] = String.fromCharCode(data[i]);
                    var bstr = arr.join("");
                    var workbook = XLSX.read(bstr, {
                        type: "binary"
                    });
                    let sheetNo = $("#sheetNo").val();
                    // alert(sheetNo);
                    var first_sheet_name = workbook.SheetNames[sheetNo - 1];
                    var worksheet = workbook.Sheets[first_sheet_name];
                    //  console.log(XLSX.utils.sheet_to_json(worksheet,{raw:true}));    
                    let arraylist = XLSX.utils.sheet_to_json(worksheet, {
                        raw: false
                    });
                    this.filelist = arraylist;
                    let testNumber;
                    let PONumber
                    this.filelist.forEach(element => {

                        if (element.TestNo != undefined || element.PONo != undefined) {
                            testNumber = element.TestNo;
                            PONumber = element.PONo;
                            let arrayHead = [element.TestNo, element.Date, element.Receiving,element.PONo, element.Ref, element.Supplier, element.Thickness, element.LinearDensity, element.TwistPerInch,element.Result,']'];
                            let arrayBody = [element.TestNo, element.PONo, element.Tdate , element.ExtAtMaxLoad_mm, element.MaxLoad_N, element.Ext,']'];
                            HeaderArray.push(arrayHead);
                            ChildArray.push(arrayBody)
                        } else {
                     
                            let arrayBody = [testNumber, PONumber, element.Tdate , element.ExtAtMaxLoad_mm, element.MaxLoad_N, element.Ext,']'];

                            ChildArray.push(arrayBody)
                        }
                    });
                    $("#headerData").val(HeaderArray);
            $("#childData").val(ChildArray);


                }
            }
                }
                else if (testType == 5){
                  
                    if (fileSelectStore) {
                
                this.filetoupload = fileSelectStore;
                //show image review
                var reader = new FileReader();
                reader.readAsDataURL(this.filetoupload);
                this.fileNameStore = this.filetoupload.name;
                this.file = fileSelectStore;
                let fileReader = new FileReader();
                fileReader.readAsArrayBuffer(this.file);
                fileReader.onload = (e) => {
                    this.arrayBuffer = fileReader.result;
                    var data = new Uint8Array(this.arrayBuffer);
                    var arr = new Array();
                    for (var i = 0; i != data.length; ++i) arr[i] = String.fromCharCode(data[i]);
                    var bstr = arr.join("");
                    var workbook = XLSX.read(bstr, {
                        type: "binary"
                    });
                    let sheetNo = $("#sheetNo").val();
                    // alert(sheetNo);
                    var first_sheet_name = workbook.SheetNames[sheetNo - 1];
                    var worksheet = workbook.Sheets[first_sheet_name];
                    //  console.log(XLSX.utils.sheet_to_json(worksheet,{raw:true}));    
                    let arraylist = XLSX.utils.sheet_to_json(worksheet, {
                        raw: false
                    });
                    this.filelist = arraylist;
                    let testNumber;
                    let PONumber
                    this.filelist.forEach(element => {
                        if (element.TestNo != undefined || element.PONo != undefined) {
                            testNumber = element.TestNo;
                            PONumber = element.PONo;
                            let arrayHead = [element.TestNo, element.Date, element.Receiving, element.PONo, element.Supplier, element.Ref, element.material, element.Size, element.Hardness,element.ReMarks,']'];
                            let arrayBody = [element.TestNo, element.PONo, element.Test, element.Unit, element.Results1,element.Results2,element.Results3,element.Results4, element.ValveTest,element.SpecificGravity,element.ResilienceTest,element.AbrasionLossOfWt,element.StabilityTest,element. MigrationTest, element.AirDate,element.Day,element.DecreaseInPr,element.TPressure,element.PercentageLeakage,']'];
                            HeaderArray.push(arrayHead);
                            ChildArray.push(arrayBody)
                        } else {

                            let arrayBody = [testNumber, PONumber, element.Test, element.Unit, element.Results1,element.Results2,element.Results3,element.Results4, element.ValveTest,element.SpecificGravity,element.ResilienceTest,element.AbrasionLossOfWt,element.StabilityTest,element. MigrationTest,element.AirDate,element.Day,element.DecreaseInPr,element.TPressure,element.PercentageLeakage,']'];

                            ChildArray.push(arrayBody)
                        }
                    });
                    $("#headerData").val(HeaderArray);
            $("#childData").val(ChildArray);
  

                }
            }
                }

                else if(testType == 6){
                  
                  if (fileSelectStore) {
              
              this.filetoupload = fileSelectStore;
              //show image review
              var reader = new FileReader();
              reader.readAsDataURL(this.filetoupload);
              this.fileNameStore = this.filetoupload.name;
              this.file = fileSelectStore;
              let fileReader = new FileReader();
              fileReader.readAsArrayBuffer(this.file);
              fileReader.onload = (e) => {
                  this.arrayBuffer = fileReader.result;
                  var data = new Uint8Array(this.arrayBuffer);
                  var arr = new Array();
                  for (var i = 0; i != data.length; ++i) arr[i] = String.fromCharCode(data[i]);
                  var bstr = arr.join("");
                  var workbook = XLSX.read(bstr, {
                      type: "binary"
                  });
                  let sheetNo = $("#sheetNo").val();
                  // alert(sheetNo);
                  var first_sheet_name = workbook.SheetNames[sheetNo - 1];
                  var worksheet = workbook.Sheets[first_sheet_name];
                  //  console.log(XLSX.utils.sheet_to_json(worksheet,{raw:true}));    
                  let arraylist = XLSX.utils.sheet_to_json(worksheet, {
                      raw: false
                  });
                  this.filelist = arraylist;
                  let testNumber;
                  let PONumber
                  this.filelist.forEach(element => {
                      if (element.TestNo != undefined || element.PONo != undefined) {
                          testNumber = element.TestNo;
                          PONumber = element.PONo;
                          let arrayHead = [element.TestNo,element.CSSNO, element.TestDate, element.ItemName, element.PONo, element.ReceivingDate, element.SupplierName, element.SupplierRef, element.Quantity, element.Result, element.ItemType];
                          let arrayBody = [element.Test,element.Requirement, element.Result, element.Uncertainty,element.Remark,']'];
                          HeaderArray.push(arrayHead);
                          ChildArray.push(arrayBody)
                      } else {
                      
                          let arrayBody = [element.Test,element.Requirement, element.Result_1, element.Uncertainty,element.Remark,']'];

                          ChildArray.push(arrayBody)
                      }
                  });
                  $("#headerData").val(HeaderArray);
          $("#childData").val(ChildArray);
              }
          }
              }

              else if(testType == 7){
                  
                  if (fileSelectStore) {
              
              this.filetoupload = fileSelectStore;
              //show image review
              var reader = new FileReader();
              reader.readAsDataURL(this.filetoupload);
              this.fileNameStore = this.filetoupload.name;
              this.file = fileSelectStore;
              let fileReader = new FileReader();
              fileReader.readAsArrayBuffer(this.file);
              fileReader.onload = (e) => {
                  this.arrayBuffer = fileReader.result;
                  var data = new Uint8Array(this.arrayBuffer);
                  var arr = new Array();
                  for (var i = 0; i != data.length; ++i) arr[i] = String.fromCharCode(data[i]);
                  var bstr = arr.join("");
                  var workbook = XLSX.read(bstr, {
                      type: "binary"
                  });
                  let sheetNo = $("#sheetNo").val();
                  // alert(sheetNo);
                  var first_sheet_name = workbook.SheetNames[sheetNo - 1];
                  var worksheet = workbook.Sheets[first_sheet_name];
                  //  console.log(XLSX.utils.sheet_to_json(worksheet,{raw:true}));    
                  let arraylist = XLSX.utils.sheet_to_json(worksheet, {
                      raw: false
                  });
                  this.filelist = arraylist;
                  let testNumber;
                  let PONumber
                  this.filelist.forEach(element => {
                      if (element.TestNo != undefined || element.PONo != undefined) {
                          testNumber = element.TestNo;
                          PONumber = element.PONo;
                          let arrayHead = [element.TestNo,element.Date,element.ModelName, element.CSSCode, element.Pressure, element.TempHumidity, element.Article, element.Category, element.size, element.Testedfor,element.Note];
                          let arrayBody = [element.Weight,element.CircumferenceMin, element.CircumferenceMax, element.Deviation,element.ReboundTest,element.Remarks,']'];
                          HeaderArray.push(arrayHead);
                          ChildArray.push(arrayBody)
                      } else {
                      
                          let arrayBody = [element.Test,element.Weight,element.CircumferenceMin, element.CircumferenceMax, element.Deviation,element.ReboundTest,element.Remarks,']'];

                          ChildArray.push(arrayBody)
                      }
                  });
                  $("#headerData").val(HeaderArray);
          $("#childData").val(ChildArray);
              }
          }
              }
            });

            $("#sendHeaderValues").click(function(e) {
                e.preventDefault()
               //  let file_data =  
                 var fd = new FormData();
                 var files = $("#img")[0].files[0];
                $("#alertShown").css("display", "block");
               
                let testGroup = $("#testGroup").val(); 
                let testPerformer = $("#testPerformer").val();
                fd.append('file', files);
                 fd.append('HeaderArray',HeaderArray);
                 fd.append('ChildArray', ChildArray);
                 fd.append('testGroup', testGroup);
                 fd.append('testPerformer', testPerformer);
             
                 let testType = $("#testType").val();  
                if(testType == 1){
                    url = '<?php echo base_url('LabController/addHeadData'); ?>'

                    $.ajax({
                        url:url, 
                        type:'post',
                        data:fd,
                        contentType:false,
                        processData:false,
                        function(data, status) {
                            setInterval(function() {
                                window.location.reload();
                            }, 2000);

                        }
                    });
                } 
                else if(testType == 2){
                    url = '<?php echo base_url('LabController/addHeadDataFoam'); ?>'

                        $.ajax({
                            url:url, 
                            type:'post',
                            data:fd,
                            contentType:false,
                            processData:false,
                            function(data, status) {
                             
                                setInterval(function() {
                                    window.location.reload();
                                }, 2000);

                            }
                        });
                }

                else if(testType == 3){
                    url = '<?php echo base_url('LabController/addHeadDataFabric'); ?>'

                        $.ajax({
                            url:url, 
                            type:'post',
                            data:fd,
                            contentType:false,
                            processData:false,
                            function(data, status) {
                       
                                setInterval(function() {
                                    window.location.reload();
                                }, 2000);

                            }
                        });
                }

                else if(testType == 4){
                    url = '<?php echo base_url('LabController/addHeadDataThread'); ?>'

                        $.ajax({
                            url:url, 
                            type:'post',
                            data:fd,
                            contentType:false,
                            processData:false,
                            function(data, status) {
                      
                                setInterval(function() {
                                    window.location.reload();
                                }, 2000);

                            }
                        });
                }

                else if(testType == 5){
                    url = '<?php echo base_url('LabController/addHeadDataBlader'); ?>'

                        $.ajax({
                            url:url, 
                            type:'post',
                            data:fd,
                            contentType:false,
                            processData:false,
                            function(data, status) {
                      
                                setInterval(function() {
                                    window.location.reload();
                                }, 2000);

                            }
                        });
                }

                else if(testType == 6){
                    url = '<?php echo base_url('LabController/addHeadDataMaterial'); ?>'

                        $.ajax({
                            url:url, 
                            type:'post',
                            data:fd,
                            contentType:false,
                            processData:false,
                            function(data, status) {
                              
                                setInterval(function() {
                                    window.location.reload();
                                }, 2000);

                            }
                        });
                }

                else if(testType == 7){
                    url = '<?php echo base_url('LabController/addHeadDataFGT'); ?>'

                        $.ajax({
                            url:url, 
                            type:'post',
                            data:fd,
                            contentType:false,
                            processData:false,
                            function(data, status) {
                          
                                setInterval(function() {
                                    window.location.reload();
                                }, 2000);

                            }
                        });
                }
                

           
            });

            $("#sendDetailsValues").click(function(e) {
                e.preventDefault()

                postData = {
                    ChildArray,
                    IdOfNewlyEnteredRecord
                }

                url = '<?php echo base_url('LabController/addBodyData'); ?>'

                $.post(url, postData,
                    function(data, status) {


                



                    });
            });
            //  <select class="form-control" id="testType" onchange="SetSheetNo()">
            //                                                          <option value="" selected>Select Test </option>
            //                                                         <option value="1" >Cotton Test</option>
            //                                                         <option value="2">Foam</option>
            //                                                         <option value="3">Fabric</option>
            //                                                         <option value="4">Thread</option>
            //                                                         <option value="5">SR Blader</option>
            //                                                     </select>
              function SetSheetNo(){
                testno =  $("#testType").val();
                 //alert(testno);
let Sheetvalue;
if(testno==1){
Sheetvalue=2;
}else if(testno==2){
Sheetvalue=2;
}else if(testno==3){
Sheetvalue=2;
}else if(testno==4){
Sheetvalue=2;
}else if(testno==5){
Sheetvalue=2;
}else if(testno==6){
Sheetvalue=2;
}
else if(testno==7){
Sheetvalue=2;
}

$("#sheetNo").val(Sheetvalue);
                                    //alert(Sheetvalue);
                                    
                                }
   
                                
$('#customData').on('click','.customundobtn',function(){
                            
                                 let id= this.id;
    let split_value = id.split(".");
     var TID =split_value[1];
var proceed = confirm("Are you sure you want to Delete?");
if (proceed) {
    url = "<?php echo base_url(''); ?>LabController/undo/"+ TID 
     $.get(url, function(data){
            alert("Data Updated Successfully");
           location.reload();
            });
} else {
  alert("Undo Cancel");
} });



$('.undobtn').click(function(){
     let id= this.id;
    let split_value = id.split(".");
     var TID =split_value[1];
var proceed = confirm("Are you sure you want to Delete?");
if (proceed) {
    url = "<?php echo base_url(''); ?>LabController/undo/"+ TID 
     $.get(url, function(data){
            alert("Data Updated Successfully");
           location.reload();
            });
} else {
  alert("Undo Cancel");
}
  

                            });
                            

        </script>
        </body>

        </html>


    <?php
} ?>
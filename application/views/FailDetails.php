

    <?php $this->load->view('includes/new_header'); ?>
  
    <!-- BEGIN Page Wrapper -->
    <div class="page-wrapper">
        <div class="page-inner">
            <!-- BEGIN Left Aside -->
    
            <!-- END Left Aside -->
            <div class="page-content-wrapper">
                <!-- BEGIN Page Header -->
                <?php $this->load->view('includes/top_header.php'); ?>
                <main id="js-page-content" role="main" class="page-content">
                  
                    <div class="col-lg-12" style="margin-bottom:20px">

                        <!-- Start here with columns -->

                        <div class="col-md-6 offset-md-3 offset-0 table-responsive">
                         
                            <div id="panel-1" class="panel">
                              

        <!-- Model Carton HTML -->
<?php if($headData[0]['ItemType'] == 'Carton'){ ?>

    <div class="modal-content">
      <div class="modal-header" style="background-color: red;color:white">
        <h5 class="modal-title" id="exampleModalLabel" ><b>Report</b></h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
      <div class="card" id="printCard">
  <div class="card-body">

       <div class="row">
       <table class="table">
               <tr>
               <th><img src="<?php echo base_url()?>assets/img/frwd.jpg" alt="report_logo" width="150px" height="100px" /></th>
             
                   <th></th>
                   <th></th>
                   <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Failed Report Of Carton</th>
                <th></th>
               </tr>
           </table>
           <!-- <div class="col-md-6" style="font-weight: bolder;font-size:x-large;margin-top:25px"></div>
           <div class="col-md-3"></div>
           <div class="col-md-3"><img src="https://upload.wikimedia.org/wikipedia/en/0/01/This_is_the_Forward_Sport_brand_logo.jpg" alt="report_logo" width="150px" height="100px" /></div> -->
          <table class="table">
          <tr>    
          <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNo"><?php echo $headData[0]['TestNO'] ?> </span></label></th>
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTest"> <?php echo $headData[0]['Date'] ?> </span></label></th>
        </tr>
        <tr>      
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Size:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="size"> <?php echo $headData[0]['Size'] ?> </span> </label></th>
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="pono"> <?php echo $headData[0]['Date'] ?> </span></label></th>
        </tr>
            </table>
           <!-- <div class="col-md-6">
            <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span></label>
            </div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span></label></div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Size:</span></label></div>
            <div class="col-md-6"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span></label></div> -->
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDate"> <?php echo $headData[0]['Receiving_Date'] ?> </span></label></div>
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="supplierName"> <?php echo $headData[0]['Supplier_Name'] ?> </span></label></div>
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRef"> <?php echo $headData[0]['Supplier_Ref'] ?> </span></label></div>
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Quantity Carton:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="quantityCarton"> <?php echo $headData[0]['Quantity_Carton'] ?> </span></label></div>
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
                    <?php foreach ($detailsData as $key) { ?>
                    <tr>
                        <td style="border:2px solid black"><?php echo $key['Test'] ?></td>
                        <td style="border:2px solid black"><?php echo $key['Requirments']  ?></td>
                        <td style="border:2px solid black"><?php echo $key['Value']  ?></td>
                        <td style="border:2px solid black"><?php echo $key['result']  ?></td>
                    </tr>
                    <?php } ?>
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
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="Conclusion"> <?php echo $headData[0]['Result'] ?> </span></label></div>
            <!-- <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Causes of Rejection:</span> <span style="font-size: medium;font-weight:bold" id="rejection"> </span></label></div> -->

            <table class="table">
                <tr>
                    <th></th>
                    <th></th>
                    <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u></span><br>
                    <span >Sohail Ghouri </span></th>
          <th></th>
                    <th></th>
                    <th></th>
                    <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                    <span id="testPerformed"> <?php echo $headData[0]['performedBy'] ?>  </span></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u> </span><br><span  id="testReviewed"><?php echo $headData[0]['reviewName'] ?> </span>
            </th>
            <th></th>
                    <th></th>
                    <th></th>
             

                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u>  </span><br>
                    <span id="testApproved"> <?php echo $headData[0]['Approvalname'] ?> </span></th>
                </tr>
            </table>

            <table class="table">
                <tr>
           
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                  <th>
                      <h5 style="font-weight:bold;color:black">Carton Image</h5>
                      <?php if($headData[0]['image'] != null ){ ?>
                      <img src="<?php echo base_url(); ?>/assets/img/img/<?php echo $headData[0]['image'] ?>" id="cartonImage" height="250px" width="300px" alt="CartonPhoto" />
                      <?php } else{ ?>
                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="cartonImage" height="250px" width="300px" alt="CartonPhoto" />
                      <?php } ?>
                  </th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
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
        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('printCard')" data-dismiss="modal">Print Report</button> -->
      </div>
      <div class="card-footer text-muted">
  Forward Sports Pvt. Ltd.
  </div>
    </div>
  
 <?php } ?>
        <!-- End Model Carton HTML -->


      <!-- Model Foam HTML -->
      <!-- <?php if($headData[0]['ItemType'] == 'Foam'){ ?>
      <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
               <th><img src="<?php echo base_url()?>assets/img/frwd.jpg" alt="report_logo" width="150px" height="100px" /></th>
             
                   <th></th>
                   <th></th>
                   <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Failed Report Of Foam</th>
                <th> </th>
               </tr>
           </table>
               <table class="table">
          <tr>    
          <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoFoam"><?php echo $headData[0]['TestNO'] ?> </span></label></th>
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestFoam"><?php echo $headData[0]['Date'] ?> </span></label></th>
        </tr>
        <tr>      
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoFoam"><?php echo $headData[0]['PO'] ?> </span></label></th>
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateFoam"> <?php echo $headData[0]['Receiving_Date'] ?> </span></label></th>     
    </tr>
            </table>
               <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefFoam"> <?php echo $headData[0]['Supplier_Ref'] ?> </span></label></div>
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
             
                        </tr>
                    </thead>
                    <tbody id= "DetailsTestFoam">
                    <?php foreach ($detailsData as $key) { ?>
                        <tr>
                        <td><?php echo $key['Test'] ?></td>
                        <td><?php echo $key['result'] ?></td>
                        <td><?php echo $key['Unit'] ?></td>
                        <td><?php echo $key['Standard'] ?></td>
                    </tr>
                    <?php } ?>
                    </tbody>                
                </table>
            </div>

            <div class="col-md-2"></div>
         
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="ConclusionFoam"><?php echo $headData[0]['Result'] ?> </span></label></div>
         
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
                    <span id="testPerformedFoam"><?php echo $headData[0]['performedBy'] ?> </span></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span  id="testReviewedFoam"> <?php echo $headData[0]['reviewName'] ?> </span>
            </th>
            <th></th>
                    <th></th>
                    <th></th>
             

                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                    <span id="testApprovedFoam"> <?php echo $headData[0]['Approvalname'] ?> </span></th>
                </tr>
            </table>
            <table class="table">
                <tr>
                <th></th>
         
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                  <th>
                      <h5 style="font-weight:bold;color:black">Foam Image</h5>
                      <?php if($headData[0]['image'] != null ){ ?>
                      <img src="<?php echo base_url(); ?>/assets/img/img/<?php echo $headData[0]['image'] ?>" id="cartonImage" height="250px" width="300px" alt="CartonPhoto" />
                      <?php } else{ ?>
                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="cartonImage" height="250px" width="300px" alt="CartonPhoto" />
                      <?php } ?>
                  </th>
                </tr>
            </table>
      
        </div>

       </div>
</div>
      </div>
      <div class="modal-footer">
       </div>
      <div class="card-footer text-muted">
  Forward Sports Pvt. Ltd.
  </div>
    </div>
  </div>
</div>
 <?php } ?> -->
        <!-- End Model Foam HTML -->

  <!-- Model Fabric HTML -->
  <?php if($headData[0]['ItemType'] == 'Fabric'){ ?>

    <div class="modal-content">
      <div class="modal-header" style="background-color: red;color:white">
        <h5 class="modal-title" id="exampleModalLabel" ><b>Report</b></h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
      <div class="card" id="printCardFabric">
  <div class="card-body">

       <div class="row">
       <table class="table">
               <tr>
               <th><img src="<?php echo base_url()?>assets/img/frwd.jpg" alt="report_logo" width="150px" height="100px" /></th>
             
                   <th></th>
                   <th></th>
                   <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Failed Report Of Fabric</th>
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
          <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoFabric"> <?php echo $headData[0]['TestNO'] ?> </span></label></th>
          <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> CSS No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="CSSNoFabric"> <?php echo $headData[0]['CSSNO'] ?> </span></label></th>
    
        </tr>
        <tr>     
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestFabric"> <?php echo $headData[0]['Date'] ?> </span></label></th>
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateFabric"> <?php echo $headData[0]['Receiving_Date'] ?> </span></label></th>     
    </tr>
    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Material Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="materialNameFabric" > <?php echo $headData[0]['Size'] ?> </span></label></th>
    </tr>
    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Status:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="ResultFabric" > <?php echo $headData[0]['Result'] ?> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoFabric"> <?php echo $headData[0]['PO'] ?> </span></label></th>
</tr>
    <tr>
    <!-- <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="supplierNameFabric"> </span></label></th> -->
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefFabric">  <?php echo $headData[0]['Supplier_Ref'] ?></span></label></th>
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
           
                        </tr>
                    </thead>
                    <tbody id= "DetailsTestFabric">
                    <?php foreach ($detailsData as $key) { ?>
                              <tr>
                              <td style="border:2px solid black"><?php echo $key['Test'] ?></td>
                            <td style="border:2px solid black"><?php echo $key['result'] ?></td>
                            <td style="border:2px solid black"><?php echo $key['Uncertainty'] ?></td>
                            <td style="border:2px solid black"><?php echo $key['ReMarks'] ?></td>
                              </tr>
                        <?php } ?>
                    </tbody>                
                </table>
            </div>

            <div class="col-md-2"></div>

            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="ConclusionFabric"><?php echo $headData[0]['Result'] ?> </span></label></div>
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
                    <span id="testPerformedFabric"> <?php echo $headData[0]['performedBy'] ?> </span></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span  id="testReviewedFabric"> <?php echo $headData[0]['reviewName'] ?> </span>
            </th>
            <th></th>
                    <th></th>
                    <th></th>
             

                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                    <span id="testApprovedFabric"> <?php echo $headData[0]['Approvalname'] ?> </span></th>
                </tr>
            </table>
            <table class="table">
                <tr>
                <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                  <th>
                      <h5 style="font-weight:bold;color:black">Fabric Image</h5>
                      <?php if($headData[0]['image'] != null ){ ?>
                      <img src="<?php echo base_url(); ?>/assets/img/img/<?php echo $headData[0]['image'] ?>" id="cartonImage" height="250px" width="300px" alt="CartonPhoto" />
                      <?php } else{ ?>
                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="cartonImage" height="250px" width="300px" alt="CartonPhoto" />
                      <?php } ?>
                  </th>
                </tr>
            </table>
        </div>

       </div>
</div>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('printCardFabric')" data-dismiss="modal">Print Report</button> -->
      </div>
      <div class="card-footer text-muted">
  Forward Sports Pvt. Ltd.
  </div>
    </div>
  
 <?php } ?>
        <!-- End Model Fabric HTML -->


 <!-- Model Fabric HTML -->
 <?php if($headData[0]['ItemType'] == 'Material'){ ?>

    <div class="modal-content">
      <div class="modal-header" style="background-color: red;color:white">
        <h5 class="modal-title" id="exampleModalLabel" ><b>Report</b></h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
      <div class="card" id="printCardMaterial">
  <div class="card-body">

       <div class="row">
       <table class="table">
               <tr>
               <th><img src="<?php echo base_url()?>assets/img/frwd.jpg" alt="report_logo" width="150px" height="100px" /></th>
             
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
          <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoMaterial"> <?php echo $headData[0]['TestNO'] ?> </span></label></th>
          <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> CSS No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="CSSNoMaterial"> <?php echo $headData[0]['CSSNO'] ?> </span></label></th>
    
        </tr>
        <tr>     
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestMaterial"> <?php echo $headData[0]['Date'] ?> </span></label></th>
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateMaterial"> <?php echo $headData[0]['Receiving_Date'] ?> </span></label></th>     
    </tr>
    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Material Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="materialNameMaterial"> <?php echo $headData[0]['Size'] ?> </span></label></th>
    </tr>
    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Status:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="ResultMaterial"> <?php echo $headData[0]['Result'] ?> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoMaterial"> <?php echo $headData[0]['PO'] ?> </span></label></th>
</tr>
    <tr>
    <!-- <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="supplierNameFabric"> </span></label></th> -->
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefMaterial"> <?php echo $headData[0]['Supplier_Ref'] ?> </span></label></th>
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
                    <?php foreach ($detailsData as $key) { ?>
                        <tr>
                        <td style="border:2px solid black"><?php echo $key['Test'] ?></td>
                        <td style="border:2px solid black"><?php echo $key['result'] ?></td>
                        <td style="border:2px solid black"><?php echo $key['Uncertainty'] ?></td>
                        <td style="border:2px solid black"><?php echo $key['ReMarks'] ?></td>
                    </tr>
                    <?php } ?>
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
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="ConclusionMaterial"> <?php echo $headData[0]['Result'] ?> </span></label></div>
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
                    <span id="testPerformedMaterial"> <?php echo $headData[0]['performedBy'] ?> </span></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span  id="testReviewedMaterial"> <?php echo $headData[0]['reviewName'] ?> </span>
            </th>
            <th></th>
                    <th></th>
                    <th></th>
             

                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                    <span id="testApprovedMaterial"> <?php echo $headData[0]['Approvalname'] ?> </span></th>
                </tr>
            </table>
            <table class="table">
                <tr>
                <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                  <th>
                      <h5 style="font-weight:bold;color:black">Material Image</h5>
                      <?php if($headData[0]['image'] != null ){ ?>
                      <img src="<?php echo base_url(); ?>/assets/img/img/<?php echo $headData[0]['image'] ?>" id="cartonImage" height="250px" width="300px" alt="CartonPhoto" />
                      <?php } else{ ?>
                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="cartonImage" height="250px" width="300px" alt="CartonPhoto" />
                      <?php } ?>
                  </th>
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
        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('printCardMaterial')" data-dismiss="modal">Print Report</button> -->
      </div>
      <div class="card-footer text-muted">
  Forward Sports Pvt. Ltd.
  </div>
    </div>

 <?php } ?>
        <!-- End Model Fabric HTML -->


          <!-- Model Thread HTML -->
          <?php if($headData[0]['ItemType'] == 'Thread'){ ?>
 
    <div class="modal-content">
      <div class="modal-header" style="background-color: red;color:white">
        <h5 class="modal-title" id="exampleModalLabel" ><b>Report</b></h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
      <div class="card" id="printCardThread">
  <div class="card-body">

       <div class="row">
       <table class="table">
               <tr>
               <th><img src="<?php echo base_url()?>assets/img/frwd.jpg" alt="report_logo" width="150px" height="100px" /></th>
             
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
          <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoThread"> <?php echo $headData[0]['TestNO'] ?> </span></label></th>
       
        </tr>
        <tr>     
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestThread"> <?php echo $headData[0]['Date'] ?> </span></label></th>
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateThread"> <?php echo $headData[0]['Receiving_Date'] ?> </span></label></th>     
    </tr>

    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="supplierNameThread"> <?php echo $headData[0]['Supplier_Name'] ?> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefThread"> <?php echo $headData[0]['Supplier_Ref'] ?> </span></label></th>
    </tr>

    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoThread"> <?php echo $headData[0]['PO'] ?> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Thickness:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="thicknessThread"> <?php echo $headData[0]['Thickness'] ?> </span></label></th>
   
</tr>

    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Linear Density:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="linearDensityThread"> <?php echo $headData[0]['LinearDensity'] ?> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Twist Per Inch:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="twistThread"> <?php echo $headData[0]['TwistPerInch'] ?> </span></label></th>
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
                    <?php
                      $extMax = 0;
                       $Max = 0;
                       $ext = 0;
                    foreach ($detailsData as $key) {
                        $extMax += (int) $key['ExtatMax'];
                        $Max += (int) $key['MaxLoad'];
                        $ext += (int) $key['Ext'];
                        ?>
                        <tr>
                        <td style="border:2px solid black"><?php echo $key['TDate'] ?></td>
                        <td style="border:2px solid black"><?php echo $key['ExtatMax'] ?></td>
                        <td style="border:2px solid black"><?php echo $key['MaxLoad'] ?></td>
                        <td style="border:2px solid black"><?php echo $key['Ext'] ?></td>
                    </tr>
                    <?php } ?>
                    <tr>
                    <td style="border:2px solid black">Average</td>
                            <td style="border:2px solid black"><?php echo ($extMax/count($detailsData))?></td>
                            <td style="border:2px solid black"><?php echo ($Max/count($detailsData)) ?></td>
                            <td style="border:2px solid black">
                          <?php echo ($ext/count($detailsData)) ?>
                            </td>
      </tr>`
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
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="ConclusionThread"> <?php echo $headData[0]['Result'] ?> </span></label></div>
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
                    <span id="testPerformedThread"> <?php echo $headData[0]['performedBy'] ?> </span></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span  id="testReviewedThread"> <?php echo $headData[0]['reviewName'] ?> </span>
            </th>
            <th></th>
                    <th></th>
                    <th></th>
             

                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                    <span id="testApprovedThread"> <?php echo $headData[0]['Approvalname'] ?> </span></th>
                </tr>
            </table>
            <table class="table">
                <tr>
                <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                  <th>
                      <h5 style="font-weight:bold;color:black">Thread Image</h5>
                      <?php if($headData[0]['image'] != null ){ ?>
                      <img src="<?php echo base_url(); ?>/assets/img/img/<?php echo $headData[0]['image'] ?>" id="cartonImage" height="250px" width="300px" alt="CartonPhoto" />
                      <?php } else{ ?>
                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="cartonImage" height="250px" width="300px" alt="CartonPhoto" />
                      <?php } ?>
                  </th>
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
        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('printCardThread')" data-dismiss="modal">Print Report</button> -->
      </div>
      <div class="card-footer text-muted">
  Forward Sports Pvt. Ltd.
  </div>
    </div>

 <?php } ?>
        <!-- End Model Thread HTML -->


          <!-- Model MS Thread HTML -->
          <?php if($headData[0]['ItemType'] == 'MS Thread'){ ?>
 
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
        <h5 class="modal-title" id="exampleModalLabel" ><b>Report</b></h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
      <div class="card" id="printCardMSThread">
  <div class="card-body">

       <div class="row">
       <table class="table">
               <tr>
               <th><img src="<?php echo base_url()?>assets/img/frwd.jpg" alt="report_logo" width="150px" height="100px" /></th>
             
                   <th></th>
                   <th></th>
                   <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of MS Thread</th>
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
          <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoMSThread"> <?php echo $headData[0]['TestNO'] ?> </span></label></th>
          <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestMSThread"> <?php echo $headData[0]['Date'] ?> </span></label></th>   
        </tr>
        <tr>     
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Material Name:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="MaterialNameMSThread"> <?php echo $headData[0]['material'] ?> </span></label></th>
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateMSThread"> <?php echo $headData[0]['Receiving_Date'] ?> </span></label></th>     
    </tr>

    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="supplierNameMSThread"> <?php echo $headData[0]['Supplier_Name'] ?> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefMSThread"> <?php echo $headData[0]['Supplier_Ref'] ?> </span></label></th>
    </tr>

    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoMSThread"> <?php echo $headData[0]['PO'] ?> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Status:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="statusMSThread"> <?php echo $headData[0]['Result'] ?> </span></label></th>
   
</tr>
            </table>
  <div class="col-md-2"></div>
            <div class="col-md-10 mt-3" >
                <table class="table table-bordered" style="border:2px solid black">
                    <thead>
                        <tr style="border:2px solid black">
                            <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Test</th>
                            <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Method</th>
                                  <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Unit</th>
                            <th style="text-align: center;font-size:large;border:2px solid black">  
                           Requirement
                            </th>
                            <th style="text-align: center;font-size:large;border:2px solid black">  
                           Result
                            </th>
                        </tr>
                    </thead>
                    <tbody id= "DetailsTestMSThread">
                    <?php foreach ($detailsData as $key) { ?>
                        <tr>
                        <td style="border:2px solid black"><?php echo $key['Test'] ?></td>
                        <td style="border:2px solid black"><?php echo $key['Method'] ?></td>
                        <td style="border:2px solid black"><?php echo $key['Unit'] ?></td>
                        <td style="border:2px solid black"><?php echo $key['Requirments'] ?></td>
                        <td style="border:2px solid black"><?php echo $key['result'] ?></td>
                    </tr>
                    <?php } ?>
                    </tbody>                
                </table>
            </div>

            <div class="col-md-2"></div>
  
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="ConclusionMSThread"> <?php echo $headData[0]['Result'] ?> </span></label></div>
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
                    <span id="testPerformedMSThread"> <?php echo $headData[0]['performedBy'] ?> </span></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span  id="testReviewedMSThread"> <?php echo $headData[0]['reviewName'] ?> </span>
            </th>
            <th></th>
                    <th></th>
                    <th></th>
             

                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                    <span id="testApprovedMSThread"> <?php echo $headData[0]['Approvalname'] ?> </span></th>
                </tr>
            </table>
            <table class="table">
                <tr>
                <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                  <th>
                      <h5 style="font-weight:bold;color:black">MS Thread Image</h5>
                      <?php if($headData[0]['image'] != null ){ ?>
                      <img src="<?php echo base_url(); ?>/assets/img/img/<?php echo $headData[0]['image'] ?>" id="cartonImage" height="250px" width="300px" alt="CartonPhoto" />
                      <?php } else{ ?>
                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="cartonImage" height="250px" width="300px" alt="CartonPhoto" />
                      <?php } ?>
                  </th>
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
        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="printDiv('printCardMSThread')" data-dismiss="modal">Print Report</button> -->
      </div>
      <div class="card-footer text-muted">
  Forward Sports Pvt. Ltd.
  </div>
    </div>

 <?php } ?>
        <!-- End Model MS Thread HTML -->


   <!-- Model Blader HTML -->
   <!-- <?php if($headData[0]['ItemType'] == 'Blader'){ ?>
   <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
               <th><img src="<?php echo base_url()?>assets/img/frwd.jpg" alt="report_logo" width="150px" height="100px" /></th>
             
                   <th></th>
                   <th></th>
                   <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Failed Report Of Blader</th>
                <th> </th>
               </tr>
           </table>
            <table class="table">
          <tr>    
          <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoBlader"> <?php echo $headData[0]['TestNO'] ?> </span></label></th>
          <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestBlader"> <?php echo $headData[0]['Date'] ?> </span></label></th>
        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateBlader"> <?php echo $headData[0]['Receiving_Date'] ?> </span></label></th>         
        </tr>
    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="supplierNameBlader"> <?php echo $headData[0]['Supplier_Name'] ?> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefBlader"> <?php echo $headData[0]['Supplier_Ref'] ?> </span></label></th>
    </tr>

    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Material Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="materialBlader"> <?php echo $headData[0]['material'] ?> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Size:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="sizeBlader"> <?php echo $headData[0]['Size'] ?> </span></label></th>
   
</tr>

    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Hardness:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="hardnessBlader"> <?php echo $headData[0]['Hardness'] ?> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoBlader"> <?php echo $headData[0]['PO'] ?> </span></label></th>
 
    </tr>
 
 
            </table>
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
             

                        </tr>
                    </thead>
                    <tbody id= "DetailsTestBlader">
                    <?php foreach ($variable as $key => $value) { ?>
                          <tr>
                          <td><?php echo $key['Test'] ?></td>
                            <td><?php echo $key['Unit'] ?></td>
                            <td><?php echo $key['result1'] ?></td>
                            <td><?php echo $key['result2'] ?></td>
                            <td><?php echo $key['result3'] ?></td>
                            <td><?php echo $key['result4'] ?></td>
                          </tr>
                     <?php } ?>   
                    </tbody>                
                </table>
            </div>

            <div class="col-md-2"></div>

            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Remarks:</span> <span style="font-size: medium;font-weight:bold" id="remarksBlader"> <?php echo $headData[0]['Result'] ?> </span></label></div>
    
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
                    <span id="testPerformedBlader"> <?php echo $headData[0]['performedBy'] ?> </span></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span  id="testReviewedBlader"> <?php echo $headData[0]['reviewName'] ?> </span>
            </th>
            <th></th>
                    <th></th>
                    <th></th>
             

                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                    <span id="testApprovedBlader"> <?php echo $headData[0]['Approvalname'] ?> </span></th>
                </tr>
            </table>
            <table class="table">
                <tr>
                <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                  <th>
                      <h5 style="font-weight:bold;color:black">Blader Image</h5>
                      <?php if($headData[0]['image'] != null ){ ?>
                      <img src="<?php echo base_url(); ?>/assets/img/img/<?php echo $headData[0]['image'] ?>" id="cartonImage" height="250px" width="300px" alt="CartonPhoto" />
                      <?php } else{ ?>
                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="cartonImage" height="250px" width="300px" alt="CartonPhoto" />
                      <?php } ?>
                  </th>
                </tr>
            </table>
   
        </div>

       </div>
</div>
      </div>
      <div class="modal-footer">

      </div>
      <div class="card-footer text-muted">
  Forward Sports Pvt. Ltd.
  </div>
    </div>
  </div>
</div>
 <?php } ?> -->
        <!-- End Model Blader HTML -->


 <!-- Model FGT HTML -->
 <!-- <?php if($headData[0]['ItemType'] == 'FGT'){ ?>
 <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                   <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Failed CSM Test Report of Football</th>
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
        <table class="table">
          <tr>    
          <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoFGT"> <?php echo $headData[0]['TestNO'] ?> </span></label></th>
          <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestFGT"> <?php echo $headData[0]['Date'] ?> </span></label></th>
        </tr>
    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Model Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="modelNameFGT"> <?php echo $headData[0]['ModelName'] ?> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> CSS Code:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="CSSCodeFGT"> <?php echo $headData[0]['CSSNO'] ?> </span></label></th>
    </tr>

    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Pressure:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="pressureFGT"> <?php echo $headData[0]['Pressure'] ?> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Temp/Humidity:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="TempHumFGT"> <?php echo $headData[0]['TempHumidity'] ?> </span></label></th>
   
</tr>

    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Article:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="articleFGT"> <?php echo $headData[0]['Article'] ?> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Category:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="categoryFGT"> <?php echo $headData[0]['Category'] ?> </span></label></th>
 
    </tr>
    <tr>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Size:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="sizeFGT"> <?php echo $headData[0]['Size'] ?> </span></label></th>
    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Tested For:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testedForFGT"> <?php echo $headData[0]['Testedfor'] ?> </span></label></th>
 
    </tr>
 
            </table>
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
    
                        </tr>
                    </thead>
                    <tbody id= "DetailsTestFGT">
                    <?php foreach ($variable as $key => $value) { ?>
                          <tr>
                          <td><?php echo $key['Weight'] ?></td>
                            <td><?php echo $key['CircumferenceMin'] ?></td>
                            <td><?php echo $key['CircumferenceMax'] ?></td>
                            <td><?php echo $key['Deviation'] ?></td>
                            <td><?php echo $key['ReboundTest'] ?></td>
                            <td><?php echo $key['Remarks'] ?></td>
                          </tr>
                     <?php } ?>   
                    </tbody>                
                </table>
            </div>

            <div class="col-md-2"></div>
         
            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Note:</span> <span style="font-size: medium;font-weight:bold" id="noteFGT"> <?php echo $headData[0]['Result'] ?> </span></label></div>
         
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
                    <span id="testPerformedFGT"> <?php echo $headData[0]['performedBy'] ?> </span></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span  id="testReviewedFGT"> <?php echo $headData[0]['reviewName'] ?> </span>
            </th>
            <th></th>
                    <th></th>
                    <th></th>
             

                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                    <span id="testApprovedFGT"> <?php echo $headData[0]['Approvalname'] ?> </span></th>
                </tr>
            </table>
            <table class="table">
                <tr>
                <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                  <th>
                      <h5 style="font-weight:bold;color:black">FGT CSM Image</h5>
                      <?php if($headData[0]['image'] != null ){ ?>
                      <img src="<?php echo base_url(); ?>/assets/img/img/<?php echo $headData[0]['image'] ?>" id="cartonImage" height="250px" width="300px" alt="CartonPhoto" />
                      <?php } else{ ?>
                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="cartonImage" height="250px" width="300px" alt="CartonPhoto" />
                      <?php } ?>
                  </th>
                </tr>
            </table>
      
        </div>

       </div>
</div>
      </div>
      <div class="modal-footer">
     </div>
      <div class="card-footer text-muted">
  Forward Sports Pvt. Ltd.
  </div>
    </div>
  </div>
</div>
 <?php } ?> -->
        <!-- End Model FGT HTML -->

                            </div>
                        </div>

                        <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
                        <!-- BEGIN Page Footer -->
              
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

        $("#myModal").modal('show');
})

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
 
        </body>

        </html>

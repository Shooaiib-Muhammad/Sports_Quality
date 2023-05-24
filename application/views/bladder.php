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
                        <!-- <li class="breadcrumb-item"><a href="<?php echo base_url(
                                                                        'index.php/main/dmms_dashboard'
                                                                    ); ?>">FGT Rhombus Test</a></li> -->


                        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                    </ol>
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



                        <!-- Model Carton HTML -->

                        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card" id="printCard">
                                            <div class="card-body">

                                                <!-- <div class="col-sm-12">
                                                                <div class="col-sm-4">
                                                                <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> 
                                                                </div>
                                                                <div class="col-sm-4">
                                                                <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> 
                                                                </div>
                                                                <div class="col-sm-4">
                                                                <img src="<?php echo base_url() ?>assets/img/adidas.jpg" alt="report_logo" width="250px" height="100px" /> 
                                                                </div>
                                                            </div> -->


                                                <div class="row">
                                                    <div class="col-sm-12 d-flex flex-row">
                                                        <div class="col-sm-4" id="cortonLogoHide">
                                                            <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" />
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" />
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <img src="<?php echo base_url() ?>assets/img/adidasLogo.svg" alt="report_logo" width="250px" height="100px" />
                                                        </div>
                                                    </div>

                                                    <h3 style="font-size: Medium;font-weight:bold;padding:50px;margin-left:25%;"> Quality Assurance Lab of Forward Sports (Pvt) Ltd <br> Test Report Of Carton </h3>


                                                    <!-- <h3 style="font-size: Medium;font-weight:bold;padding:50px;margin-left:25%;">Test Report Of Carton</h3> -->


                                                    <!-- <table class="table">
                                                                <tr>
                                                                    <th><img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /></th>
                                                                    <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /></th>
                                                                    <th><img src="<?php echo base_url() ?>assets/img/adidas.jpg" alt="report_logo" width="250px" height="100px" /></th> <br>
                                                                    <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Carton</th>
                                    
                                                                </tr>
                                                            </table> -->
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
                                                    <div class="col-md-10 mt-3">
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
                                                            <tbody id="DetailsTest">

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
                                                                <span>Sohail Ghouri </span>
                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                                                                <span id="testPerformed"> </span>
                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <!-- <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewed"> </span> -->
                                                            <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br>Fatima Rasheed </span>
                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>


                                                            <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                                <!-- <span id="testApproved"> </span> -->
                                                                <span> Zain Abbas</span>
                                                            </th>
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
                                                                <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="cartonImage" height="250px" width="300px" alt="CartonPhoto" />
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
                                                <h2 class="mt-3" style="text-align:center;font-weight:bold">End Of Report</h2>
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


                        <!-- Start Model Adhesion HTML-->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalAdhesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card" id="printCardAdhesion">
                                            <div class="card-body">

                                                <!-- <div class="col-sm-12">
                                                                <div class="col-sm-4">
                                                                <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> 
                                                                </div>
                                                                <div class="col-sm-4">
                                                                <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> 
                                                                </div>
                                                                <div class="col-sm-4">
                                                                <img src="<?php echo base_url() ?>assets/img/adidas.jpg" alt="report_logo" width="250px" height="100px" /> 
                                                                </div>
                                                            </div> -->


                                                <div class="row">
                                                    <div class="col-sm-12 d-flex flex-row">
                                                        <div class="col-sm-4" id="cortonLogoHide">
                                                            <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" />
                                                        </div>
                                                        <div class="col-sm-4">

                                                        </div>
                                                        <div class="col-sm-4">
                                                            <table class="table border">
                                                                <thead>
                                                                    <tr>
                                                                        <td class="border">Document</td>
                                                                        <td class="border">QSD-12/RTR/TRM</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="border">Revision</td>
                                                                        <td class="border">0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="border">Copy</td>
                                                                        <td class="border">03</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="border">Holder</td>
                                                                        <td class="border">Lab</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="border">Status</td>
                                                                        <td class="border">Controlled</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="border">Date of Issuance</td>
                                                                        <td class="border">01/07/2021</td>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <h3 style="font-size: Medium;font-weight:bold;margin-left:33%;"> Quality Assurance Lab of Forward Sports (Pvt) Ltd <br> Test Report Of Adhesion Material </h3>


                                                    <!-- <h3 style="font-size: Medium;font-weight:bold;padding:50px;margin-left:25%;">Test Report Of Carton</h3> -->


                                                    <!-- <table class="table">
                                                                <tr>
                                                                    <th><img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /></th>
                                                                    <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /></th>
                                                                    <th><img src="<?php echo base_url() ?>assets/img/adidas.jpg" alt="report_logo" width="250px" height="100px" /></th> <br>
                                                                    <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Carton</th>
                                    
                                                                </tr>
                                                            </table> -->
                                                    <!-- <div class="col-md-6" style="font-weight: bolder;font-size:x-large;margin-top:25px"></div>
                                                            <div class="col-md-3"></div>
                                                            <div class="col-md-3"><img src="https://upload.wikimedia.org/wikipedia/en/0/01/This_is_the_Forward_Sport_brand_logo.jpg" alt="report_logo" width="150px" height="100px" /></div> -->
                                                    <table class="table">
                                                        <tr>
                                                            <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testDateAdhesion"> </span></label></th>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Received Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="receDateTestAdhesion"> </span></label></th>
                                                        </tr>
                                                        <tr>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="testNoAdhesion"> </span> </label></th>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Code:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receCodeAdhesion"> </span></label></th>
                                                        </tr>

                                                        <tr>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Article#:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="articleNoAdhesion"> </span> </label></th>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Article Name#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="articleNameAdhesion"> </span></label></th>
                                                        </tr>

                                                        <tr>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="ponoAdhesion"> </span> </label></th>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Result#:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="resultAdhesion"> </span> </label></th>

                                                        </tr>
                                                    </table>


                                                    <div class="col-md-12 mt-3">
                                                        <table class="table table-bordered" style="border:2px solid black">
                                                            <thead>
                                                                <tr style="border:2px solid black">

                                                                    <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Date</th>
                                                                    <th style="text-align: center;font-size:large;border:2px solid black">Test No</th>
                                                                    <th style="text-align: center;font-size:large;border:2px solid black">Batch Reference</th>
                                                                    <th style="text-align: center;font-size:large;border:2px solid black">Standard</th>
                                                                    <th style="text-align: center;font-size:large;border:2px solid black">MaximumForce</th>
                                                                    <th style="text-align: center;font-size:large;border:2px solid black">AverageForce</th>
                                                                    <th style="text-align: center;font-size:large;border:2px solid black">Comments</th>
                                                                    <th style="text-align: center;font-size:large;border:2px solid black">MaximumForceInch</th>


                                                                </tr>
                                                            </thead>

                                                            <tbody id="DetailsAdhesion">

                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="col-md-10 mt-3">
                                                        <table class="table ">
                                                            <thead>
                                                                <tr>
                                                                    <th rowspan="2"></th>
                                                                    <th rowspan="2"></th>
                                                                    <th rowspan="2"></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>


                                                                </tr>
                                                                <tr>
                                                                    <th rowspan="2"></th>
                                                                    <th rowspan="2"></th>
                                                                    <th rowspan="2"></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>


                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Checked By</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>Lab In-Charge</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pervaiz Bhitti</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>Sohail Ghouri</td>
                                                                </tr>

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
                                                    <!-- <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Causes of Rejection:</span> <span style="font-size: medium;font-weight:bold" id="rejection"> </span></label></div> -->




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
                                        <button type="button" class="btn btn-primary" onclick="printDiv('printCardAdhesion')" data-dismiss="modal">Print Report</button>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Forward Sports Pvt. Ltd.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- End Model Adhesion HTML -->


                        <!-- Start Model Adhesion HTML-->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalCSM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card" id="printCardCSM">
                                            <div class="card-body">

                                                <!-- <div class="col-sm-12">
                                                                <div class="col-sm-4">
                                                                <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> 
                                                                </div>
                                                                <div class="col-sm-4">
                                                                <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> 
                                                                </div>
                                                                <div class="col-sm-4">
                                                                <img src="<?php echo base_url() ?>assets/img/adidas.jpg" alt="report_logo" width="250px" height="100px" /> 
                                                                </div>
                                                            </div> -->


                                                <div class="row">
                                                    <div class="col-sm-12 d-flex flex-row">
                                                        <div class="col-sm-4" id="cortonLogoHide">
                                                            <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" />
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="300px" height="180px" />

                                                        </div>
                                                        <div class="col-sm-4">
                                                            <table class="table border">
                                                                <thead>
                                                                    <tr>
                                                                        <td class="border">Document</td>
                                                                        <td class="border">QSD-12/RTR/TRM</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="border">Revision</td>
                                                                        <td class="border">0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="border">Copy</td>
                                                                        <td class="border">03</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="border">Holder</td>
                                                                        <td class="border">Lab</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="border">Status</td>
                                                                        <td class="border">Controlled</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="border">Date of Issuance</td>
                                                                        <td class="border">01/07/2021</td>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <h3 style="font-size: Medium;font-weight:bold;margin-left:33%;"> Quality Assurance Lab of Forward Sports (Pvt) Ltd <br>CSM Test Report Of Football </h3>


                                                    <!-- <h3 style="font-size: Medium;font-weight:bold;padding:50px;margin-left:25%;">Test Report Of Carton</h3> -->


                                                    <!-- <table class="table">
                                                                <tr>
                                                                    <th><img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /></th>
                                                                    <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /></th>
                                                                    <th><img src="<?php echo base_url() ?>assets/img/adidas.jpg" alt="report_logo" width="250px" height="100px" /></th> <br>
                                                                    <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Carton</th>
                                    
                                                                </tr>
                                                            </table> -->
                                                    <!-- <div class="col-md-6" style="font-weight: bolder;font-size:x-large;margin-top:25px"></div>
                                                            <div class="col-md-3"></div>
                                                            <div class="col-md-3"><img src="https://upload.wikimedia.org/wikipedia/en/0/01/This_is_the_Forward_Sport_brand_logo.jpg" alt="report_logo" width="150px" height="100px" /></div> -->
                                                    <table class="table">
                                                        <tr>
                                                            <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="TestNoCSM"> </span></label></th>
                                                            <th><label class="form-control" for="date"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateCSM"> </span></label></th>
                                                        </tr>
                                                        <tr>
                                                            <th><label class="form-control" for="modelName"><span style="font-size: medium;font-weight:bold"> Model Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="modelNameCSM"> </span> </label></th>
                                                            <th><label class="form-control" for="cssCode"><span style="font-size: medium;font-weight:bold"> CSS Code:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="cssCodeCSM"> </span></label></th>
                                                        </tr>

                                                        <tr>
                                                            <th><label class="form-control" for="pressure"><span style="font-size: medium;font-weight:bold"> Pressure:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="pressureCSM"> </span> </label></th>
                                                            <th><label class="form-control" for="tempHumidity"><span style="font-size: medium;font-weight:bold"> Temp Humidity:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="tempHumidityCSM"> </span></label></th>
                                                        </tr>

                                                        <tr>
                                                            <th><label class="form-control" for="article"><span style="font-size: medium;font-weight:bold"> Article:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="articleCSM"> </span> </label></th>
                                                            <th><label class="form-control" for="category"><span style="font-size: medium;font-weight:bold"> Category:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="categoryCSM"> </span> </label></th>

                                                        </tr>
                                                        <tr>
                                                            <th><label class="form-control" for="size"><span style="font-size: medium;font-weight:bold"> Size:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="sizeCSM"> </span> </label></th>
                                                            <th><label class="form-control" for="testedFor"><span style="font-size: medium;font-weight:bold"> Tested for:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="testedForCSM"> </span> </label></th>

                                                        </tr>
                                                        <tr>
                                                            <!-- id="noteCSM" -->
                                                            <th><label class="form-control" for="note"><span style="font-size: medium;font-weight:bold"> Note:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium">

                                                                        The above reported result is applicable to the sample as recived at customer service section.
                                                                    </span> </label></th>
                                                            <th></th>

                                                        </tr>
                                                    </table>


                                                    <div class="col-md-12 mt-3">
                                                        <table class="table table-bordered" style="border:2px solid black">
                                                            <thead>
                                                                <tr style="border:2px solid black">

                                                                    <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Weight (gm)</th>
                                                                    <th style="text-align: center;font-size:large;border:2px solid black">Circumference Min(cm)</th>
                                                                    <th style="text-align: center;font-size:large;border:2px solid black">Circumference Max(cm)</th>
                                                                    <th style="text-align: center;font-size:large;border:2px solid black">Deviation</th>
                                                                    <th style="text-align: center;font-size:large;border:2px solid black">Rebound Test</th>
                                                                    <th style="text-align: center;font-size:large;border:2px solid black">Remarks</th>
                                                                    <th style="text-align: center;font-size:large;border:2px solid black">Result</th>

                                                                </tr>
                                                            </thead>

                                                            <tbody id="DetailsCSM">

                                                            </tbody>
                                                        </table>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12">


                                                                <span class="h2"><b>Test Request:<b></span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                                <span class="h4">
                                                                    <u>
                                                                        By MR. Oman Sb
                                                                    </u>
                                                                </span>


                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12">
                                                                <span class="h2"><b>Remarks:<b></span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;
                                                                <span class="h4">
                                                                    <u>
                                                                        Without Conditioning Testing
                                                                    </u>
                                                                </span>

                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12">
                                                                <span class="h2"><b>Note:<b></span>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;
                                                                <span class="h4">
                                                                    <u>
                                                                        The above reported result is applicable to the sample as received
                                                                        at customer service section<br>
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        &nbsp;


                                                                        Report was Electronically generated,
                                                                        are not required
                                                                    </u>
                                                                </span>

                                                            </div>
                                                        </div>


                                                    </div>



                                                    <!-- <div class="col-md-10 mt-3">
                                                                <table class="table ">
                                                                    <thead>
                                                                        <tr>
                                                                            <th rowspan="2"></th>
                                                                            <th rowspan="2"></th>
                                                                            <th rowspan="2"></th>
                                                                            <th></th>
                                                                            <th></th>
                                                                            <th></th>
                                                                            <th></th>


                                                                        </tr>
                                                                        <tr>
                                                                            <th rowspan="2"></th>
                                                                            <th rowspan="2"></th>
                                                                            <th rowspan="2"></th>
                                                                            <th></th>
                                                                            <th></th>
                                                                            <th></th>
                                                                            <th></th>


                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Checked By</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>Lab In-Charge</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Pervaiz Bhitti</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>Sohail Ghouri</td>
                                                                        </tr>
                                                                    
                                                                    </tbody>
                                                                </table>
                                                            </div> -->

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
                                                    <!-- <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Causes of Rejection:</span> <span style="font-size: medium;font-weight:bold" id="rejection"> </span></label></div> -->




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
                                                            Sohail 
                                                            

                                                            </div> -->


                                                </div>

                                                <div class="row mt-5">
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

                                                        <div class="row">
                                                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                                                <h5><u>Prepared By</u></h5>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 d-flex justify-content-center">
                                                                <h5><u>Reviewed By</u></h5>

                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 d-flex justify-content-end">
                                                                <h5><u>Approved By</u></h5>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row mt-1">
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

                                                        <div class="row">
                                                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                                                <h5>Sohail Rasheed</h5>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 d-flex justify-content-center">
                                                                <h5>Fatima Rasheed</h5>

                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 d-flex justify-content-end">
                                                                <h5>Zain Abbas</h5>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>



                                        </div>

                                    </div>



                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" onclick="printDiv('printCardCSM')" data-dismiss="modal">Print Report</button>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Forward Sports Pvt. Ltd.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- End Model Adhesion HTML -->



                        <!-- Start Model PolyBag HTML-->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalPolyBag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card" id="printCardPolyBag">
                                            <div class="card-body">

                                                <!-- <div class="col-sm-12">
                                                                <div class="col-sm-4">
                                                                <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> 
                                                                </div>
                                                                <div class="col-sm-4">
                                                                <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> 
                                                                </div>
                                                                <div class="col-sm-4">
                                                                <img src="<?php echo base_url() ?>assets/img/adidas.jpg" alt="report_logo" width="250px" height="100px" /> 
                                                                </div>
                                                            </div> -->


                                                <div class="row">
                                                    <div class="col-sm-12 d-flex flex-row">
                                                        <div class="col-sm-4" id="cortonLogoHide">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" />
                                                        </div>
                                                        <div class="col-sm-4">

                                                        </div>
                                                    </div>

                                                    <h3 style="font-size: Medium;font-weight:bold;padding:50px;margin-left:25%;"> Quality Assurance Lab of Forward Sports (Pvt) Ltd <br> Test Report Of PolyBag </h3>


                                                    <!-- <h3 style="font-size: Medium;font-weight:bold;padding:50px;margin-left:25%;">Test Report Of Carton</h3> -->


                                                    <!-- <table class="table">
                                                                <tr>
                                                                    <th><img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /></th>
                                                                    <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /></th>
                                                                    <th><img src="<?php echo base_url() ?>assets/img/adidas.jpg" alt="report_logo" width="250px" height="100px" /></th> <br>
                                                                    <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Carton</th>
                                    
                                                                </tr>
                                                            </table> -->
                                                    <!-- <div class="col-md-6" style="font-weight: bolder;font-size:x-large;margin-top:25px"></div>
                                                            <div class="col-md-3"></div>
                                                            <div class="col-md-3"><img src="https://upload.wikimedia.org/wikipedia/en/0/01/This_is_the_Forward_Sport_brand_logo.jpg" alt="report_logo" width="150px" height="100px" /></div> -->
                                                    <table class="table">
                                                        <tr>
                                                            <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoPolyBag"> </span></label></th>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="POPolyBag"> </span></label></th>
                                                        </tr>
                                                        <tr>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Received Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="receivedDatePolyBag"> </span> </label></th>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="datePolyBag"> </span></label></th>
                                                        </tr>

                                                        <tr>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Poly Bag:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="polyBagPolyBag"> </span> </label></th>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Vendor Name:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="vendorNamePolyBag"> </span></label></th>
                                                        </tr>

                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                    </table>


                                                    <div class="col-md-10 mt-3">
                                                        <table class="table table-bordered" style="border:2px solid black">
                                                            <thead>
                                                                <tr style="border:2px solid black">
                                                                    <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Sr no</th>
                                                                    <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Test</th>
                                                                    <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Unit</th>
                                                                    <th style="text-align: center;font-size:large;border:2px solid black">Standard</th>
                                                                    <th style="text-align: center;font-size:large;border:2px solid black">Result</th>
                                                                    <th style="text-align: center;font-size:large;border:2px solid black">Remarks</th>


                                                                </tr>
                                                            </thead>
                                                            <tbody id="DetailsPolyBag">

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
                                                            </div> --> <!-- <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Causes of Rejection:</span> <span style="font-size: medium;font-weight:bold" id="rejection"> </span></label></div> -->

                                                    <table class="table">
                                                        <tr>
                                                            <th>Checked by</th>
                                                            <th></th>
                                                            <th>

                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <!-- <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewed"> </span> -->
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>


                                                            <th>Lab Manager</th>
                                                        </tr>
                                                    </table>

                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Tanveer Ali</th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th>Sohail Ghouri</th>
                                                            </tr>
                                                        </thead>

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
                                                <h2 class="mt-3" style="text-align:center;font-weight:bold">End Of Report</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" onclick="printDiv('printCardPolyBag')" data-dismiss="modal">Print Report</button>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Forward Sports Pvt. Ltd.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- End Model PolyBag HTML -->



                        <!-- Model Carton HTML Standard -->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalStandard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card" id="printCardStandard">
                                            <div class="card-body">

                                                <div class="row">
                                                    <!-- <div class="col-md-6">
                                                                <h3 style="text-align: center;color:black;font-weight:bolder;font-size:x-large">Results</h3>
                                                                <table class="table">
                                                                    <tr>
                                                                        <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="150px" height="100px" /></th>

                                                                        <th></th>
                                                                        <th></th>
                                                                        <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Carton</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </table>
                                                               <table class="table">
                                                                    <tr>
                                                                        <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestStandard"> </span></label></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Size:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="sizeStandard"> </span> </label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoStandard"> </span></label></th>
                                                                    </tr>
                                                                </table>
                                                                  <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateStandard"> </span></label></div>
                                                                <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="supplierNameStandard"> </span></label></div>
                                                                <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefStandard"> </span></label></div>
                                                                <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Quantity Carton:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="quantityCartonStandard"> </span></label></div>
                                                                <div class="col-md-2"></div>
                                                                <div class="col-md-10 mt-3">
                                                                    <table class="table table-bordered" style="border:2px solid black">
                                                                        <thead>
                                                                            <tr style="border:2px solid black">
                                                                                <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Test</th>
                                                                                <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Requirement</th>
                                                                                <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Value</th>
                                                                                <th style="text-align: center;font-size:large;border:2px solid black">
                                                                                    Result
                                                                                </th>
                                                                        


                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="DetailsTestStandard">

                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <div class="col-md-2"></div>
                                                                
                                                                <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="ConclusionStandard"> </span></label></div>
                                                              
                                                                <table class="table">
                                                                    <tr>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                                            <span>Sohail Ghouri </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                                                                            <span id="testPerformedStandard"> </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedStandard"> </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>


                                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                                            <span id="testApprovedStandard"> </span>
                                                                        </th>
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
                                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="cartonImageStandard" height="250px" width="300px" alt="CartonPhoto" />
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                    </tr>
                                                                </table>
                                                             
                                                            </div> -->
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-8">
                                                        <h3 style="text-align: center;color:black;font-weight:bolder;font-size:x-large">Development Report</h3>
                                                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="cartonImageStandardComp" style='margin-top:70%' height="35%" width="100%" alt="StandardReport" />

                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" onclick="printDiv('printCardStandard')" data-dismiss="modal">Print Report</button> -->
                                    </div>
                                    <div class="card-footer text-muted">
                                        Forward Sports Pvt. Ltd.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Model Foam HTML -->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalFoam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card" id="printCardFoam">
                                            <div class="card-body">

                                                <div class="row">
                                                    <!-- <table class="table">
                                                                <tr>
                                                                    <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /></th>

                                                                    <th></th>
                                                                    <th></th>
                                                                    <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Foam</th>
                                                                    <th> </th>
                                                                </tr>
                                                            </table> -->
                                                    <div class="col-sm-12 d-flex flex-row">
                                                        <div class="col-sm-4" id="FoamLogoHide">
                                                            <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" />
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" />
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <img src="<?php echo base_url() ?>assets/img/adidas.jpg" alt="report_logo" width="250px" height="100px" />
                                                        </div>
                                                    </div>

                                                    <h3 style="font-size: Medium;font-weight:bold;padding:50px;margin-left:25%;"> Quality Assurance Lab of Forward Sports (Pvt) Ltd <br> Test Report Of Foam </h3>
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
                                                    <div class="col-md-10 mt-3">
                                                        <table class="table table-bordered" style="border:2px solid black">
                                                            <thead>
                                                                <tr style="border:2px solid black">
                                                                    <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Test</th>

                                                                    <th style="text-align: center;font-size:large;border:2px solid black">
                                                                        Standard
                                                                    </th>
                                                                    <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Unit</th>
                                                                    <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Result</th>

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
                                                            <tbody id="DetailsTestFoam">

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
                                                                <span>Sohail Ghouri </span>
                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                                                                <span id="testPerformedFoam"> </span>
                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <!-- <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedFoam"> </span> -->
                                                            <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span> Fatima Rasheed </span>

                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>


                                                            <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                                <!-- <span id="testApprovedFoam"> </span> -->
                                                                <span> Zain Abbas</span>
                                                            </th>
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
                                                                <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="foamImage" height="250px" width="300px" alt="FoamPhoto" />
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
                                                <h2 class="mt-3" style="text-align:center;font-weight:bold">End Of Report</h2>
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

                        <!-- Model Foam HTML Standard -->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalFoamStandard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card" id="printCardFoamStandard">
                                            <div class="card-body">

                                                <div class="row">
                                                    <!-- <div class="col-md-6">
                                                                <h3 style="text-align: center;color:black;font-weight:bolder;font-size:x-large">Results</h3>
                                                                <table class="table">
                                                                    <tr>
                                                                        <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="150px" height="100px" /></th>

                                                                        <th></th>
                                                                        <th></th>
                                                                        <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Foam</th>
                                                                        <th> </th>
                                                                    </tr>
                                                                </table>
                                                              <table class="table">
                                                                    <tr>
                                                                        <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoFoamStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestFoamStandard"> </span></label></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoFoamStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateFoamStandard"> </span></label></th>
                                                                    </tr>
                                                                </table>
                                                                <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefFoamStandard"> </span></label></div>
                                                                <div class="col-md-2"></div>
                                                                <div class="col-md-10 mt-3">
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
                                                                        <tbody id="DetailsTestFoamStandard">

                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <div class="col-md-2"></div>
                                                              
                                                                <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="ConclusionFoamStandard"> </span></label></div>
                                                            
                                                                <table class="table">
                                                                    <tr>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                                            <span>Sohail Ghouri </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                                                                            <span id="testPerformedFoamStandard"> </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedFoamStandard"> </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>


                                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                                            <span id="testApprovedFoamStandard"> </span>
                                                                        </th>
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
                                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="foamImageStandard" height="250px" width="300px" alt="FoamPhoto" />
                                                                        </th>
                                                                    </tr>
                                                                </table>
                                                              
                                                            </div> -->
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-8">
                                                        <h3 style="text-align: center;color:black;font-weight:bolder;font-size:x-large">Development Report</h3>
                                                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="foamImageStandardComp" style='margin-top:70%' height="35%" width="100%" alt="StandardReport" />

                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" onclick="printDiv('printCardFoamStandard')" data-dismiss="modal">Print Report</button> -->
                                    </div>
                                    <div class="card-footer text-muted">
                                        Forward Sports Pvt. Ltd.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Model Foam HTML Standard -->

                        <!-- Model Fabric HTML -->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalFabric" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
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
                                                            <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /></th>

                                                            <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> </th>
                                                            <th></th>
                                                            <!-- <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Fabric</th> -->
                                                            <td style="font-size: small;padding:0%">
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
                                                    <h3 style="font-size: Medium;font-weight:bold;padding:50px;margin-left:25%;"> Quality Assurance Lab of Forward Sports (Pvt) Ltd <br> Test Report Of Fabric </h3>
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
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Status:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="ResultFabric"> </span></label></th>

                                                        </tr>
                                                        <tr>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoFabric"> </span></label></th>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefFabric"> </span></label></th>

                                                        </tr>
                                                        <tr>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Temperature:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="temperatureF"> </span></label></th>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Humidity:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="humidityF"> </span></label></th>

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
                                                    <div class="col-md-10 mt-3">
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
                                                            <tbody id="DetailsTestFabric">

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
                                                                <span>Sohail Ghouri </span>
                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                                                                <span id="testPerformedFabric"> </span>
                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <!-- <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedFabric"> </span> -->
                                                            <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span> Fatima Rasheed </span>

                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>


                                                            <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                                <!-- <span id="testApprovedFabric"> </span> -->
                                                                <span> Zain Abbas </span>
                                                            </th>
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
                                                                <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="fabricImage" height="250px" width="300px" alt="FabricPhoto" />
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
                                                <h2 class="mt-3" style="text-align:center;font-weight:bold">End Of Report</h2>
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

                        <!-- Model Fabric HTML Standard -->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalFabricStandard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card" id="printCardFabricStandard">
                                            <div class="card-body">

                                                <div class="row">
                                                    <!-- <div class="col-md-6">
                                                                <h3 style="text-align: center;color:black;font-weight:bolder;font-size:x-large">Results</h3>
                                                                <table class="table">
                                                                    <tr>
                                                                        <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="150px" height="100px" /></th>

                                                                        <th></th>
                                                                        <th></th>
                                                                        <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Fabric</th>
                                                                        <td style="font-size: small;padding:0%">
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
                                                                <table class="table">
                                                                    <tr>
                                                                        <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoFabricStandard"> </span></label></th>
                                                                        <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> CSS No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="CSSNoFabricStandard"> </span></label></th>

                                                                    </tr>
                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestFabricStandard"> </span></label></th>
                                                                        <th><span style="font-size: medium;font-weight:bold;background-color:white;"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateFabricStandard"> </span></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Material Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="materialNameFabricStandard"> </span></label></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Status:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="ResultFabricStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoFabricStandard"> </span></label></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefFabricStandard"> </span></label></th>
                                                                    </tr>
                                                                </table>
                                                               <div class="col-md-2"></div>
                                                                <div class="col-md-10 mt-3">
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
                                                                        <tbody id="DetailsTestFabricStandard">

                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <div class="col-md-2"></div>

                                                                <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="ConclusionFabricStandard"> </span></label></div>
                                                             
                                                                <table class="table">

                                                                    <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                                        <span>Sohail Ghouri </span>
                                                                    </th>

                                                                    <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                                                                        <span id="testPerformedFabricStandard"> </span>
                                                                    </th>

                                                                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedFabricStandard"> </span>
                                                                    </th>



                                                                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                                        <span id="testApprovedFabricStandard"> </span>
                                                                    </th>
                                                                    </tr>
                                                                </table>
                                                                <table class="table">
                                                                    <tr>

                                                                        <th>
                                                                            <h5 style="font-weight:bold;color:black">Fabric Image</h5>
                                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="fabricImageStandard" height="250px" width="300px" alt="FabricPhoto" />
                                                                        </th>
                                                                    </tr>
                                                                </table>
                                                              
                                                            </div> -->
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-8">
                                                        <h3 style="text-align: center;color:black;font-weight:bolder;font-size:x-large">Development Report</h3>
                                                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="fabricImageStandardComp" style='margin-top:10px' height="100%" width="100%" alt="StandardReport" />
                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" onclick="printDiv('printCardFabricStandard')" data-dismiss="modal">Print Report</button> -->
                                    </div>
                                    <div class="card-footer text-muted">
                                        Forward Sports Pvt. Ltd.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Model Fabric HTML Standard -->

                        <!-- Model Fabric Comparison HTML -->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalFabricComparison" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card" id="printCardFabric">
                                            <div class="card-body">

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h3 style="color: black;font-weight:bold;font-size:medium;text-align:center">RM Test Report </h3>
                                                        <div class="row" style="padding: 10px;border: 2px solid black">

                                                            <table class="table">
                                                                <tr>

                                                                    <th style="font-size: Medium;font-weight:bold;padding:20px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Fabric</th>

                                                                </tr>
                                                            </table>
                                                            <table class="table">
                                                                <tr>
                                                                    <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoComp"> </span></label></th>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestComp"> </span></label></th>

                                                                </tr>
                                                                <tr>
                                                                    <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> CSS No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="cssNoComp"> </span></label></th>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateComp"> </span></label></th>
                                                                </tr>
                                                                <tr>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Material Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="materialNameFabricComp"> </span></label></th>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Status:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="ResultFabricComp"> </span></label></th>

                                                                </tr>
                                                                <tr>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoComp"> </span></label></th>
                                                                </tr>
                                                                <tr>
                                                                    <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefComp"> </span></label></div>
                                                                </tr>
                                                            </table>
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-10 mt-3">
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
                                                                    <tbody id="DetailsTestComp">

                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <div class="col-md-2"></div>

                                                            <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="ConclusionComp"> </span></label></div>

                                                            <table class="table">
                                                                <tr>
                                                                    <th></th>

                                                                    <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                                        <span>Sohail Ghouri </span>
                                                                    </th>
                                                                    <th></th>

                                                                    <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                                                                        <span id="testPerformedComp"> </span>
                                                                    </th>
                                                                    <th></th>

                                                                    <!-- <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedComp"> </span> -->
                                                                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span> Fatima Rasheed</span>

                                                                    </th>
                                                                    <th></th>

                                                                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                                        <!-- <span id="testApprovedComp"> </span> -->
                                                                        <span> Zain Abbas</span>
                                                                    </th>
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
                                                                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="cartonImageComp" height="250px" width="300px" alt="FabricPhoto" />
                                                                    </th>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </table>

                                                        </div>
                                                        <h2 class="mt-3" style="text-align:center;font-weight:bold">End Of Report</h2>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3 style="color: black;font-weight:bold;font-size:medium;text-align:center">Development test report </h3>
                                                        <div class="row" style="padding: 10px;border: 2px solid black">
                                                            <table class="table">
                                                                <tr>
                                                                    <th style="font-size: Medium;font-weight:bold;padding:20px">Store Department of Forward Sports (Pvt) Ltd<br>4 Point System Inspection Report</th>

                                                                </tr>
                                                            </table>
                                                            <table class="table">
                                                                <tr>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestCompCartonStore"> </span></label></th>

                                                                </tr>
                                                                <tr>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoCompCartonStore"> </span></label></th>

                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Color:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="colorCompCartonStore"> </span> </label></th>

                                                                </tr>
                                                                <tr>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold">Fabric Description:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="descCompCartonStore"> </span> </label></th>
                                                                </tr>
                                                                <tr>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Sup.Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="supCompCartonStore"> </span> </label></th>
                                                                </tr>
                                                            </table>
                                                            <h1> Length (meter)</h1>
                                                            <table class="table">
                                                                <tr>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> On Tag:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="len1CompCartonStore"> </span> </label></th>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Actual:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="len2CompCartonStore"> </span> </label></th>
                                                                </tr>
                                                            </table>
                                                            <h1> width (meter)</h1>
                                                            <table class="table">
                                                                <tr>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> On Tag:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="width1CompCartonStore"> </span> </label></th>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Actual:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="width2CompCartonStore"> </span> </label></th>
                                                                </tr>

                                                            </table>

                                                            <h1> Defect 1: <span id="defect1"></span> </h1>
                                                            <table class="table">
                                                                <tr>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> 0-3":</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="defect11CompCartonStore"> </span> </label></th>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> 3-6":</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="defect12CompCartonStore"> </span> </label></th>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> 6-9":</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="defect13CompCartonStore"> </span> </label></th>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> >9":</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="defect14CompCartonStore"> </span> </label></th>

                                                                </tr>

                                                            </table>
                                                            <h1> Defect 2: <span id="defect2"></span> </h1>
                                                            <table class="table">
                                                                <tr>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> 0-3":</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="defect21CompCartonStore"> </span> </label></th>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> 3-6":</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="defect22CompCartonStore"> </span> </label></th>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> 6-9":</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="defect23CompCartonStore"> </span> </label></th>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> >9":</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="defect24CompCartonStore"> </span> </label></th>

                                                                </tr>

                                                            </table>
                                                            <h1> Defect 3: <span id="defect3"></span> </h1>
                                                            <table class="table">
                                                                <tr>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> 0-3":</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="defect31CompCartonStore"> </span> </label></th>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> 3-6":</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="defect32CompCartonStore"> </span> </label></th>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> 6-9":</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="defect33CompCartonStore"> </span> </label></th>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> >9":</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="defect34CompCartonStore"> </span> </label></th>

                                                                </tr>

                                                            </table>
                                                            <h1> Defect 4: <span id="defect4"></span> </h1>
                                                            <table class="table">
                                                                <tr>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> 0-3":</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="defect41CompCartonStore"> </span> </label></th>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> 3-6":</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="defect42CompCartonStore"> </span> </label></th>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> 6-9":</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="defect43CompCartonStore"> </span> </label></th>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> >9":</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="defect44CompCartonStore"> </span> </label></th>

                                                                </tr>

                                                            </table>

                                                            <h1> Hole <span id="hole"></span> </h1>
                                                            <table class="table">
                                                                <tr>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> 0-1":</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="hole1CompCartonStore"> </span> </label></th>
                                                                    <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> >1":</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="hole2CompCartonStore"> </span> </label></th>
                                                                </tr>

                                                            </table>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h1> Total Point Found: <span id="totalCompCartonStore"></span> </h1>

                                                                </div>
                                                                <div class="col-md-12">
                                                                    <h1> Points/1000 Squre Meter: <span id="pointsCompCartonStore"></span> </h1>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <h1> Status: <span id="statusCompCartonStore"></span> </h1>
                                                                </div>
                                                            </div>
                                                        </div>



                                                    </div>
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

                        <!-- End Model Fabric Comparison HTML -->


                        <!-- Model Material HTML -->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalMaterial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
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
                                                            <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /></th>

                                                            <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> </th>
                                                            <th></th>
                                                            <!-- <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Material</th> -->
                                                            <td style="font-size: small;padding:0%">
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
                                                    <h3 style="font-size: Medium;font-weight:bold;padding:50px;margin-left:25%;"> Quality Assurance Lab of Forward Sports (Pvt) Ltd <br> Test Report Of Material </h3>
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
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Status:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="ResultMaterial"> </span></label></th>

                                                        </tr>
                                                        <tr>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoMaterial"> </span></label></th>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefMaterial"> </span></label></th>

                                                        </tr>
                                                        <tr>
                                                            <!-- <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="supplierNameFabric"> </span></label></th> -->
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold">Temperature:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="temperatureM"> </span></label></th>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold">Humidity:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="humidityM"> </span></label></th>

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
                                                    <div class="col-md-10 mt-3">
                                                        <table class="table table-bordered" style="border:2px solid black">
                                                            <thead>
                                                                <tr style="border:2px solid black">
                                                                    <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Test</th>
                                                                    <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Requirenmt</th>
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
                                                            <tbody id="DetailsTestMaterial">

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
                                                                <span>Sohail Ghouri </span>
                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                                                                <span id="testPerformedMaterial"> </span>
                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <!-- <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedMaterial"> </span> -->
                                                            <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span> Fatima Rasheed</span>

                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>


                                                            <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                                <!-- <span id="testApprovedMaterial"> </span> -->
                                                                <span> Zain Abbas</span>
                                                            </th>
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
                                                                <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="materialImage" height="250px" width="300px" alt="MaterialPhoto" />
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

                                                <h2 class="mt-3" style="text-align:center;font-weight:bold">End Of Report</h2>

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

                        <!-- End Model Material HTML -->


                        <!-- Model Material HTML Standard -->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalMaterialStandard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card" id="printCardMaterialStandard">
                                            <div class="card-body">

                                                <div class="row">
                                                    <!-- <div class="col-md-6">
                                                                <h3 style="text-align: center;color:black;font-weight:bolder;font-size:x-large">Results</h3>
                                                                <table class="table">
                                                                    <tr>
                                                                        <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="150px" height="100px" /></th>

                                                                        <th></th>
                                                                        <th></th>
                                                                        <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Material</th>
                                                                        <td style="font-size: small;padding:0%">
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
                                                                <table class="table">
                                                                    <tr>
                                                                        <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoMaterialStandard"> </span></label></th>
                                                                        <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> CSS No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="CSSNoMaterialStandard"> </span></label></th>

                                                                    </tr>
                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestMaterialStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateMaterialStandard"> </span></label></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Material Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="materialNameMaterialStandard"> </span></label></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Status:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="ResultMaterialStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoMaterialStandard"> </span></label></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefMaterialStandard"> </span></label></th>
                                                                    </tr>
                                                                </table>
                                                              <div class="col-md-2"></div>
                                                                <div class="col-md-10 mt-3">
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
                                                                        <tbody id="DetailsTestMaterialStandard">

                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <div class="col-md-2"></div>
                                                              
                                                                <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="ConclusionMaterialStandard"> </span></label></div>
                                                          
                                                                <table class="table">
                                                                    <tr>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                                            <span>Sohail Ghouri </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                                                                            <span id="testPerformedMaterialStandard"> </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedMaterialStandard"> </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>


                                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                                            <span id="testApprovedMaterialStandard"> </span>
                                                                        </th>
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
                                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="materialImageStandard" height="250px" width="300px" alt="MaterialPhoto" />
                                                                        </th>
                                                                    </tr>
                                                                </table>
                                                            
                                                            </div> -->
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-8">
                                                        <h3 style="text-align: center;color:black;font-weight:bolder;font-size:x-large">Development Report</h3>
                                                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="materialImageStandardComp" style='margin-top:70%' height="35%" width="100%" alt="StandardReport" />

                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" onclick="printDiv('printCardMaterialStandard')" data-dismiss="modal">Print Report</button> -->
                                    </div>
                                    <div class="card-footer text-muted">
                                        Forward Sports Pvt. Ltd.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Model Material HTML Standard -->

                        <!-- Model Thread HTML -->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalThread" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
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
                                                            <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /></th>

                                                            <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> </th>
                                                            <th></th>
                                                            <!-- <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Thread</th> -->
                                                            <td style="font-size: small;padding:0%">
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
                                                    <h3 style="font-size: Medium;font-weight:bold;padding:50px;margin-left:25%;"> Quality Assurance Lab of Forward Sports (Pvt) Ltd <br> Test Report Of Thread </h3>
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
                                                    <div class="col-md-10 mt-3">
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
                                                            <tbody id="DetailsTestThread">

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
                                                                <span>Sohail Ghouri </span>
                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                                                                <span id="testPerformedThread"> </span>
                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <!-- <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedThread"> </span> -->
                                                            <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span>Fatima Rasheed </span>

                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>


                                                            <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                                <!-- <span id="testApprovedThread"> </span> -->
                                                                <span> Zain Abbas</span>
                                                            </th>
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
                                                                <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="threadImage" height="250px" width="300px" alt="ThreadPhoto" />
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
                                                <h2 class="mt-3" style="text-align:center;font-weight:bold">End Of Report</h2>
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

                        <!-- Model Thread HTML Standard -->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalThreadStandard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card" id="printCardThreadStandard">
                                            <div class="card-body">

                                                <div class="row">
                                                    <!-- <div class="col-md-6">
                                                                <h3 style="text-align: center;color:black;font-weight:bolder;font-size:x-large">Results</h3>
                                                                <table class="table">
                                                                    <tr>
                                                                        <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="150px" height="100px" /></th>

                                                                        <th></th>
                                                                        <th></th>
                                                                        <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Thread</th>
                                                                        <td style="font-size: small;padding:0%">
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
                                                              <table class="table">
                                                                    <tr>
                                                                        <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoThreadStandard"> </span></label></th>

                                                                    </tr>
                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestThreadStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateThreadStandard"> </span></label></th>
                                                                    </tr>

                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="supplierNameThreadStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefThreadStandard"> </span></label></th>
                                                                    </tr>

                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoThreadStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Thickness:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="thicknessThreadStandard"> </span></label></th>

                                                                    </tr>

                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Linear Density:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="linearDensityThreadStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Twist Per Inch:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="twistThreadStandard"> </span></label></th>
                                                                    </tr>


                                                                </table>
                                                               <div class="col-md-2"></div>
                                                                <div class="col-md-10 mt-3">
                                                                    <table class="table table-bordered" style="border:2px solid black">
                                                                        <thead>
                                                                            <tr style="border:2px solid black">
                                                                                <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Date</th>
                                                                                <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Ext. at Max. Load (mm)</th>
                                                                                <th rowspan="2" style="text-align: center;font-size:large;border:2px solid black">Max. Load (N)</th>
                                                                                <th style="text-align: center;font-size:large;border:2px solid black">
                                                                                    Ext. at 350.0 N (mm)
                                                                                </th>
                                                                                


                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="DetailsTestThreadStandard">

                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <div class="col-md-2"></div>
                                                            
                                                                <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="ConclusionThreadStandard"> </span></label></div>
                                                             
                                                                <table class="table">
                                                                    <tr>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                                            <span>Sohail Ghouri </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                                                                            <span id="testPerformedThreadStandard"> </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedThreadStandard"> </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>


                                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                                            <span id="testApprovedThreadStandard"> </span>
                                                                        </th>
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
                                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="threadImageStandard" height="250px" width="300px" alt="ThreadPhoto" />
                                                                        </th>
                                                                    </tr>
                                                                </table>
                                                              
                                                            </div> -->
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-8">
                                                        <h3 style="text-align: center;color:black;font-weight:bolder;font-size:x-large">Development Report</h3>
                                                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="threadImageStandardComp" style='margin-top:70%' height="35%" width="100%" alt="StandardReport" />

                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" onclick="printDiv('printCardThreadStandard')" data-dismiss="modal">Print Report</button> -->
                                    </div>
                                    <div class="card-footer text-muted">
                                        Forward Sports Pvt. Ltd.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Model Thread HTML Standard -->



                        <!-- Model MS Thread HTML -->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalMSThread" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card" id="printCardMSMaterial">
                                            <div class="card-body">

                                                <div class="row">
                                                    <table class="table">
                                                        <tr>
                                                            <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" class="ml-5" alt="report_logo" width="250px" height="100px" /></th>

                                                            <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /></th>
                                                            <th></th>
                                                            <!-- <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of MS Thread</th> -->
                                                            <td style="font-size: small;padding:0%">
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
                                                    <h3 style="font-size: Medium;font-weight:bold;padding:50px;margin-left:25%;"> Quality Assurance Lab of Forward Sports (Pvt) Ltd <br> Test Report Of MS Thread </h3>
                                                    <!-- <div class="col-md-6" style="font-weight: bolder;font-size:x-large;margin-top:25px"></div>
                                                            <div class="col-md-3"></div>
                                                            <div class="col-md-3"><img src="https://upload.wikimedia.org/wikipedia/en/0/01/This_is_the_Forward_Sport_brand_logo.jpg" alt="report_logo" width="150px" height="100px" /></div> -->
                                                    <table class="table">
                                                        <tr>
                                                            <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoMSThread"> </span></label></th>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestMSThread"> </span></label></th>
                                                        </tr>
                                                        <tr>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Material Name:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="MaterialNameMSThread"> </span></label></th>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateMSThread"> </span></label></th>
                                                        </tr>

                                                        <tr>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="supplierNameMSThread"> </span></label></th>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefMSThread"> </span></label></th>
                                                        </tr>

                                                        <tr>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoMSThread"> </span></label></th>
                                                            <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Status:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="statusMSThread"> </span></label></th>

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
                                                    <div class="col-md-10 mt-3">
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
                                                            <tbody id="DetailsTestMSThread">

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
                                                    <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="ConclusionMSThread"> </span></label></div>
                                                    <!-- <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Causes of Rejection:</span> <span style="font-size: medium;font-weight:bold" id="rejection"> </span></label></div> -->

                                                    <table class="table">
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                            <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                                <span>Sohail Ghouri </span>
                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                                                                <span id="testPerformedMSThread"> </span>
                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <!-- <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedMSThread"> </span> -->
                                                            <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span> Fatima Rasheed</span>

                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>


                                                            <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                                <!-- <span id="testApprovedMSThread"> </span> -->
                                                                <span>Zain Abbas </span>
                                                            </th>
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
                                                                <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="threadMSImage" height="250px" width="300px" alt="MSThreadPhoto" />
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
                                                <h2 class="mt-3" style="text-align:center;font-weight:bold">End Of Report</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" onclick="printDiv('printCardMSMaterial')" data-dismiss="modal">Print Report</button>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Forward Sports Pvt. Ltd.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Model MS Thread HTML -->

                        <!-- Model MS Thread HTML Standard -->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalMSThreadStandard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card" id="printCardMSThreadStandard">
                                            <div class="card-body">

                                                <div class="row">
                                                    <!-- <div class="col-md-6">
                                                                <h3 style="text-align: center;color:black;font-weight:bolder;font-size:x-large">Results</h3>
                                                                <table class="table">
                                                                    <tr>
                                                                        <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="150px" height="100px" /></th>

                                                                        <th></th>
                                                                        <th></th>
                                                                        <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of MS Thread</th>
                                                                        <td style="font-size: small;padding:0%">
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
                                                                 <table class="table">
                                                                    <tr>
                                                                        <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoMSThreadStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestMSThreadStandard"> </span></label></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Material Name:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="MaterialNameMSThreadStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateMSThreadStandard"> </span></label></th>
                                                                    </tr>

                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="supplierNameMSThreadStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefMSThreadStandard"> </span></label></th>
                                                                    </tr>

                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoMSThreadStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Status:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="statusMSThreadStandard"> </span></label></th>

                                                                    </tr>
                                                                </table>
                                                                 <div class="col-md-2"></div>
                                                                <div class="col-md-10 mt-3">
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
                                                                        <tbody id="DetailsTestMSThreadStandard">

                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <div class="col-md-2"></div>
                                                               
                                                                <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="ConclusionMSThreadStandard"> </span></label></div>
                                                              
                                                                <table class="table">
                                                                    <tr>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                                            <span>Sohail Ghouri </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                                                                            <span id="testPerformedMSThreadStandard"> </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedMSThreadStandard"> </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>


                                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                                            <span id="testApprovedMSThreadStandard"> </span>
                                                                        </th>
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
                                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="threadMSImageStandard" height="250px" width="300px" alt="MSThreadPhoto" />
                                                                        </th>
                                                                    </tr>
                                                                </table>
                                                              
                                                            </div> -->
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3 style="text-align: center;color:black;font-weight:bolder;font-size:x-large">Development Report</h3>
                                                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="threadMSImageStandardComp" style='margin-top:70%' height="35%" width="100%" alt="StandardReport" />

                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" onclick="printDiv('printCardMSThreadStandard')" data-dismiss="modal">Print Report</button> -->
                                    </div>
                                    <div class="card-footer text-muted">
                                        Forward Sports Pvt. Ltd.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Model MS Thread HTML Standard -->


                        <!-- Model Blader HTML -->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalBlader" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
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
                                                            <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /></th>

                                                            <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /></th>
                                                            <th></th>
                                                            <!-- <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Blader</th> -->
                                                            <th> </th>
                                                        </tr>
                                                    </table>
                                                    <h3 style="font-size: Medium;font-weight:bold;padding:50px;margin-left:25%;"> Quality Assurance Lab of Forward Sports (Pvt) Ltd <br> Test Report Of Blader </h3>
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
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-10 mt-3">
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
                                                            <tbody id="DetailsTestBlader">

                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="col-md-2"></div>

                                                    <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Remarks:</span> <span style="font-size: medium;font-weight:bold" id="remarksBlader"> </span></label></div>

                                                    <table class="table">
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                            <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                                <span>Sohail Ghouri </span>
                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                                                                <span id="testPerformedBlader"> </span>
                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <!-- <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedBlader"> </span> -->
                                                            <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span> Fatima Rasheed </span>

                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>


                                                            <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                                <!-- <span id="testApprovedBlader"> </span> -->
                                                                <span>Zain Abbas </span>
                                                            </th>
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
                                                                <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="bladerImage" height="250px" width="300px" alt="BladerPhoto" />
                                                            </th>
                                                        </tr>
                                                    </table>

                                                </div>
                                                <h2 class="mt-3" style="text-align:center;font-weight:bold">End Of Report</h2>
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

                        <!-- Model MS Materail HTML -->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalMSMaterial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card" id="printCardMSMaterialL">
                                            <div class="card-body">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="table">
                                                            <tr>


                                                                <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" style="visibility:hidden" /></th>
                                                                <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /></th>
                                                                <th></th>
                                                                <!-- <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Blader</th> -->
                                                                <th> </th>
                                                            </tr>
                                                        </table>
                                                        <h3 style="font-size: Medium;font-weight:bold;padding:50px;margin-left:25%;"> Quality Assurance Lab of Forward Sports (Pvt) Ltd <br> Test Report Of MS Material </h3>
                                                        <table class="table">
                                                            <tr>
                                                                <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testMSMaterial"> </span></label></th>
                                                                <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestMSMaterial"> </span></label></th>
                                                            </tr>
                                                            <tr>
                                                                <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Po#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="poMSMaterial"> </span></label></th>
                                                                <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Material Ref.:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="MaterialRefMSMaterial"> </span></label></th>

                                                            </tr>


                                                        </table>
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-10 mt-3">
                                                            <table class="table table-bordered ">
                                                                <thead>
                                                                    <tr class="border">
                                                                        <th class="border border-dark" style="text-align: center;font-size:large;">Test</th>
                                                                        <th class="border border-dark" style="text-align: center;font-size:large;">Method</th>
                                                                        <th class="border border-dark" style="text-align: center;font-size:large;">Unit</th>
                                                                        <th class="border border-dark" style="text-align: center;font-size:large;">Requirement</th>
                                                                        <th class="border border-dark" style="text-align: center;font-size:large;">Result</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody id="DetailsTestMSMaterial">

                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="col-md-2"></div>

                                                        <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Conclusion:</span> <span style="font-size: medium;font-weight:bold" id="visualResultMSMaterialr"> </span></label></div>

                                                        <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Causes of Rejection:</span> <span style="font-size: medium;font-weight:bold" id="Conclusion"> </span></label></div>


                                                        <table class="table">
                                                            <tr>
                                                                <th></th>
                                                                <th></th>



                                                                <th> <span style="font-size: medium;font-weight:bold"> <u>Prepared By</u> </span><br>
                                                                    <span> Sohail Ghouri </span>
                                                                </th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th> <span style="font-size: medium;font-weight:bold"><u>Test Performed By</u> </span><br>
                                                                    <span id="testPerformedMSMaterial"> </span>
                                                                </th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th><span style="font-size: medium;font-weight:bold"><u>Test Reviewed By</u> </span><br>
                                                                    <span>Fatima Rasheed </span>

                                                                </th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <!-- <th><span style="font-size: medium;font-weight:bold"></span><br><span id="testReviewedMSMaterial"> </span> -->
                                                                <th><span style="font-size: medium;font-weight:bold"><u>Test Approved By</u> </span><br>
                                                                    <span>Zain Abbas </span>
                                                                <th>

                                                                </th>

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

                                                            </tr>
                                                        </table>




                                                    </div>





                                                </div>
                                                <h2 class="mt-3" style="text-align:center;font-weight:bold">End Of Report</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" onclick="printDiv('printCardMSMaterialL')" data-dismiss="modal">Print Report</button>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Forward Sports Pvt. Ltd.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Model MS Material HTML -->

                        <!-- Model Blader HTML Standard -->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalBladerStandard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card" id="printCardBladerStandard">
                                            <div class="card-body">

                                                <div class="row">
                                                    <!-- <div class="col-md-6">
                                                                <h3 style="text-align: center;color:black;font-weight:bolder;font-size:x-large">Results</h3>
                                                                <table class="table">
                                                                    <tr>
                                                                        <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="150px" height="100px" /></th>

                                                                        <th></th>
                                                                        <th></th>
                                                                        <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>Test Report Of Blader</th>
                                                                        <th> </th>
                                                                    </tr>
                                                                </table>
                                                               <table class="table">
                                                                    <tr>
                                                                        <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoBladerStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestBladerStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Receiving Date:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="receiveDateBladerStandard"> </span></label></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="supplierNameBladerStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Supplier Ref.:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="supplierRefBladerStandard"> </span></label></th>
                                                                    </tr>

                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Material Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="materialBladerStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Size:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="sizeBladerStandard"> </span></label></th>

                                                                    </tr>

                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Hardness:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="hardnessBladerStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> PO#:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="ponoBladerStandard"> </span></label></th>

                                                                    </tr>


                                                                </table>
                                                                <div class="col-md-2"></div>
                                                                <div class="col-md-10 mt-3">
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
                                                                        <tbody id="DetailsTestBladerStandard">

                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <div class="col-md-2"></div>
                                                           
                                                                <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Remarks:</span> <span style="font-size: medium;font-weight:bold" id="remarksBladerStandard"> </span></label></div>
                                                             
                                                                <table class="table">
                                                                    <tr>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                                            <span>Sohail Ghouri </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                                                                            <span id="testPerformedBladerStandard"> </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedBladerStandard"> </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>


                                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                                            <span id="testApprovedBladerStandard"> </span>
                                                                        </th>
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
                                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="bladerImageStandard" height="250px" width="300px" alt="BladerPhoto" />
                                                                        </th>
                                                                    </tr>
                                                                </table>
                                                             
                                                            </div> -->
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-8">
                                                        <h3 style="text-align: center;color:black;font-weight:bolder;font-size:x-large">Development Report</h3>
                                                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="bladerImageStandardComp" style='margin-top:70%' height="35%" width="100%" alt="StandardReport" />

                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" onclick="printDiv('printCardBladerStandard')" data-dismiss="modal">Print Report</button> -->
                                    </div>
                                    <div class="card-footer text-muted">
                                        Forward Sports Pvt. Ltd.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Model Blader HTML Standard -->



                        <!-- Model FGT HTML -->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalFGT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card" id="printCSM">
                                            <div class="card-body">

                                                <div class="row">
                                                    <table class="table">
                                                        <tr>
                                                            <th><img src="<?php echo base_url() ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>

                                                            <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /></th>

                                                            <th></th>
                                                            <!-- <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>CSM Test Report of Football</th> -->
                                                            <td style="font-size: small;padding:0%">
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
                                                    <h3 style="font-size: Medium;font-weight:bold;padding:50px;margin-left:25%;"> Quality Assurance Lab of Forward Sports (Pvt) Ltd <br> CSM Test Report of Football </h3>

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
                                                    <div class="col-md-10 mt-3">
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
                                                            <tbody id="DetailsTestFGT">

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
                                                                <span>Sohail Ghouri </span>
                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                                                                <span id="testPerformedFGT"> </span>
                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <!-- <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedFGT"> </span> -->
                                                            <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span> Fatima Rasheed</span>

                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>


                                                            <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                                <!-- <span id="testApprovedFGT"> </span> -->
                                                                <span> Zain Abbas</span>
                                                            </th>
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
                                                                <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="fgtImage" height="250px" width="300px" alt="FGTCSMPhoto" />
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
                                                <h2 class="mt-3" style="text-align:center;font-weight:bold">End Of Report</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" onclick="printDiv('printCSM')" data-dismiss="modal">Print Report</button>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Forward Sports Pvt. Ltd.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Model FGT HTML -->


                        <!-- Model FGT HTML Standard -->

                        <div class="modal fade bd-example-modal-lg" id="exampleModalFGTStandard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card" id="printCardFGTStandard">
                                            <div class="card-body">

                                                <div class="row">
                                                    <!-- <div class="col-md-6">
                                                                <h3 style="text-align: center;color:black;font-weight:bolder;font-size:x-large">Results</h3>
                                                                <table class="table">
                                                                    <tr>
                                                                        <th><img src="<?php echo base_url() ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>

                                                                        <th></th>
                                                                        <th></th>
                                                                        <th style="font-size: Medium;font-weight:bold;padding:50px">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>CSM Test Report of Football</th>
                                                                        <td style="font-size: small;padding:0%">
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
                                                                        <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testNoFGTStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateTestFGTStandard"> </span></label></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Model Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="modelNameFGTStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> CSS Code:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="CSSCodeFGTStandard"> </span></label></th>
                                                                    </tr>

                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Pressure:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="pressureFGTStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Temp/Humidity:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="TempHumFGTStandard"> </span></label></th>

                                                                    </tr>

                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Article:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="articleFGTStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Category:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="categoryFGTStandard"> </span></label></th>

                                                                    </tr>
                                                                    <tr>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Size:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="sizeFGTStandard"> </span></label></th>
                                                                        <th><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Tested For:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="testedForFGTStandard"> </span></label></th>

                                                                    </tr>

                                                                </table>
                                                                  <div class="col-md-2"></div>
                                                                <div class="col-md-10 mt-3">
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
                                                                        <tbody id="DetailsTestFGTStandard">

                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <div class="col-md-2"></div>
                                                             
                                                                <div class="col-md-12"><label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold"> Note:</span> <span style="font-size: medium;font-weight:bold" id="noteFGTStandard"> </span></label></div>
                                                               <table class="table">
                                                                    <tr>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                                            <span>Sohail Ghouri </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                                                                            <span id="testPerformedFGTStandard"> </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedFGTStandard"> </span>
                                                                        </th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>


                                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                                            <span id="testApprovedFGTStandard"> </span>
                                                                        </th>
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
                                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="fgtImageStandard" height="250px" width="300px" alt="FGTCSMPhoto" />
                                                                        </th>
                                                                    </tr>
                                                                </table>
                                                              
                                                            </div> -->
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-8">
                                                        <h3 style="text-align: center;color:black;font-weight:bolder;font-size:x-large">Development Report</h3>
                                                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="fgtImageStandardComp" style='margin-top:70%' height="35%" width="100%" alt="StandardReport" />

                                                    </div>
                                                    <div class="col-md-2">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" onclick="printDiv('printCardFGTStandard')" data-dismiss="modal">Print Report</button> -->
                                    </div>
                                    <div class="card-footer text-muted">
                                        Forward Sports Pvt. Ltd.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Model FGT HTML Standard -->


                        <!-- START FGT TESTING DATE RANGE -->
                        <div class="col-md-12  table-responsive">

                            <div id="panel-1" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        <b>Bladder</b>
                                    </h2>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:black;font-weight:bolder">Date Filteration</h5>
                                        <div class="row">
                                            <div class="col-md-3"><input class="form-control" type="date" id="date1" /></div>
                                            <div class="col-md-3"><input class="form-control" type="date" id="date2" /></div>
                                            
                                            <div class="col-md-3"><button class="btn btn-primary" id="searchFGTtest">Search</button></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="row">

                                            <div class="col-md-12 d-flex justify-content-center flex-wrap">
                                                <div id="container" style="width: 100%"></div>
                                            </div>

                                        </div>
                                        <div class="demo-v-spacing" id="tableData">
                                            <table id="defualtTable" class="table table-bordered table-hover table-responsive table-striped w-100">
                                                <thead class="bg-primary-200">
                                                <tr style="color:white;">
                                                        <th>Company Name</th>
                                                        <th>Bladder Type</th>
                                                        <th>Size</th>
                                                        <th>Total Checked </th>
                                                        <th>Pass</th>
                                                        <th>Fail</th>
                                                        <th>Joint Fault</th>
                                                        <th>Nozzel Fault</th>
                                                        <th>Body Fault</th>
                                                        <th>Weight Fault</th>
                                                        <th>Size Fault</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- END FGT TESTING  DATE RANGE-->

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
                        <script src="<?php echo base_url() ?>assets/js/notifications/toastr/toastr.js"></script>

                        <script src="<?php echo base_url(); ?>/assets/js/highcharts.js"></script>
                        <!-- <script src="<?php echo base_url(); ?>/assets/js/data.js"></script> -->
                        <script src="<?php echo base_url(); ?>/assets/js/series-label.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/drilldown.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/exporting.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/export-data.js"></script>
                        <script src="<?php echo base_url(); ?>/assets/js/accessibility.js"></script>

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
                                let date = new Date().toJSON().substr(0, 10);
                                

                                $("#date1").val(date);
                                $("#date2").val(date);
                            });

                            
                            $('#searchFGTtest').on('click', function() {
                                var date1 = $("#date1").val();
                                var date2 = $("#date2").val();
                                url = '<?php echo base_url('MIS/DW/bladderDateRange'); ?>';
                                $.post(url, {
                                    'date1': date1,
                                    'date2': date2,
                                }, function(data) {
                                    if (data != '') {
                                      let  fgtHtml = `<table id="fgtTestTableData" class="table table-bordered table-hover table-responsive table-striped w-100">
                                                <thead class="bg-primary-200">
                                                    <tr style="color:white;">
                                                        <th>Company Name</th>
                                                        <th>Bladder Type</th>
                                                        <th>Size</th>
                                                        <th>Total Checked </th>
                                                        <th>Pass</th>
                                                        <th>Fail</th>
                                                        <th>Joint Fault</th>
                                                        <th>Nozzel Fault</th>
                                                        <th>Body Fault</th>
                                                        <th>Weight Fault</th>
                                                        <th>Size Fault</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>`;
                                        data.forEach(element => {
                                            fgtHtml += `<tr>
                                                <td>${element.CompanyName}</td>
                                                <td>${element.BladderTpye}</td>
                                                <td>${element.Size}</td>
                                                <td>${element.TotalChecked}</td>
                                                <td>${element.Pass}</td>
                                                <td>${element.Fail}</td>
                                                <td>${element.JointFault}</td>
                                                <td>${element.NozzleFault}</td>
                                                <td>${element.BodyFault}</td>
                                                <td>${element.WeightFault}</td>
                                                <td>${element.SizeFault}</td>
                                                <td>${element.DateName.split('00:00:00')[0]}</td>
                                            </tr>`

                                        });
                                        fgtHtml += `</body>
                                        </table>`;

                                        $("#tableData").html(fgtHtml);
                                        $('#fgtTestTableData').dataTable({
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
                                    } else {
                                        toastr["info"]("No Record found with provided credentials!.", "Info!")

                                        toastr.options = {
                                            "closeButton": true,
                                            "debug": false,
                                            "newestOnTop": true,
                                            "progressBar": true,
                                            "positionClass": "toast-top-center",
                                            "preventDuplicates": false,
                                            "onclick": null,
                                            "showDuration": 300,
                                            "hideDuration": 100,
                                            "timeOut": 5000,
                                            "extendedTimeOut": 1000
                                        }
                                        $("#tableData").html(`<table id="fgtTestTableData" class="table table-bordered table-hover table-responsive table-striped w-100">
                                                <thead class="bg-primary-200">
                                                    <tr style="color:white;">
                                                        <th>Lab No</th>
                                                        <th>CSS No </th>
                                                        <th>Receiving Date</th>
                                                        <th>Testing Date </th>
                                                        <th>Issue Date </th>
                                                        <th>Envirmental Cond</th>
                                                        <th>TestAccToCat </th>
                                                        <th>CoverMat</th>
                                                        <th>Backing</th>
                                                        <th>Bladder </th>
                                                        <th>Ball Type </th>
                                                        <th>FIFA Stamp </th>
                                                        <th>Production Month</th>
                                                        <th>Test Type </th>
                                                        <th>Main Mat Color </th>
                                                        <th>Printing Colors </th>
                                                        <th>Article No </th>
                                                        <th>Working No</th>
                                                        <th>Result </th>
                                                        <!-- <th>Generated By </th> -->
                                                        <!-- <th>Review Status </th> -->
                                                        <th>Review By </th>
                                                        <!-- <th>Approved Status </th> -->
                                                        <th>Approved By </th>
                                                        <th>Generated By </th>
                                                        <th>Action </th>
                                                    </tr>
                                                </thead>
                                                <tbody>`);
                                    }

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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
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

            //             function getRandomArbitrary(min, max) {
            //     return (Math.random() * (max - min) + min).toFixed(1);
            // }

            $(document).ready(function() {


                // temperature = getRandomArbitrary(10,30);

                // $("#temperature").text(temperature);

                $("#cssCode").select2();
                /* init datatables */
                $('#defualtTable').dataTable({
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
        <script src="https://unpkg.com/read-excel-file@5.x/bundle/read-excel-file.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



        </body>

        </html>


    <?php
} ?>
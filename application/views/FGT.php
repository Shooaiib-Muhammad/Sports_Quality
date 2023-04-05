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
                  
                   
  

                    <style>
                        .table th,
                        .table td {
                            padding: 4px;
                            vertical-align: top;
                            border-top: 1px solid #e9e9e9;
                        }
                    </style>


                    <!-- Modal SOCCER BALL INDOOR-->
                    <div class="modal fade bd-example-modal-xl" id="soccerBallsIndoor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                    <h5 class="modal-title" id="exampleModalLongTitle">FGT Report</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card" id="printFGT">
                                        <div class="card-body">
                                            <!-- <table class="table">
                                                <tr>
                                                    <th style="font-size: large;font-weight:bold;padding:50px" id="exampleModalLabel">FGT REPORT FOR SOCCERBALLS INDOOR</th>
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
                                                    <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>
                                                </tr>
                                            </table> -->
                                            <table class="table">
                                                <tr>
                                                    <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> </th>

                                                    <th style="text-align:Center;"> <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="200px" height="100px" /> </th>
                                                    <th></th>
                                                    <!-- <th style="font-size: x-large;font-weight:bold;padding:50px" id="exampleModalLabel">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>FGT REPORT FOR SOCCERBALLS INDOOR</th> -->

                                                </tr>
                                            </table>
                                            <tr>
                                                <th> </th>

                                                <!-- <h4 class="modal-title text-center m-4" id="exampleModalLabel">FGT REPORT FOR SOCCERBALLS INDOOR</h4> -->
                                                <th> </th>
                                            </tr>
                                            <tr>
                                                <h3 style="font-size: x-large;font-weight:bold;padding:50px" class="text-center" id="exampleModalLabel">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>FGT REPORT FOR SOCCERBALLS INDOOR</h3>
                                            </tr>
                                            <div class="container-fluid p-5">

                                                <div class="row p-2">
                                                    <div class="col-sm-4">
                                                        <table class="table table-striped p-0">
                                                            <tbody style="border: 1px solid;padding:0px">
                                                                <tr>
                                                                    <th style="border: 1px solid;" id="workingNoIndoor"></th>
                                                                    <td class="text-center" id="articleNoIndoor"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;"><br>LAB #</th>
                                                                    <td id="content32" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;"><br>Css Code :</th>
                                                                    <td id="content3222" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;"><br>TESTING DATE</th>
                                                                    <td id="content33" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">TEST ACC. TO CAT:</th>
                                                                    <td id="content34" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">FIFA STAMP</th>
                                                                    <td id="content35" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">PRODUCTION MONTH</th>
                                                                    <td id="content36" class="text-center">Jul-21</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-4">
                                                        <table class="table table-striped p-0">
                                                            <tbody style="border: 1px solid;padding:0px">
                                                                <tr style="padding: 0px;">
                                                                    <th colspan="2" style="border: 1px solid; text-align:center">Construction</th>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;"><br>COVER MAT.</th>
                                                                    <td id="content37" class="text-center"><br></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;"><br><br>BACKING</th>
                                                                    <td id="content38" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;"><br>BLADDER</th>
                                                                    <td id="content39" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">BALLTYPE</th>
                                                                    <td id="content40" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">Temperature</th>
                                                                    <td id="" class="text-center"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-4">
                                                        <table class="table table-striped">
                                                            <tbody style="border: 1px solid;">
                                                                <tr>
                                                                    <th style="border: 1px solid;">TEST TYPE</th>
                                                                    <td id="content41" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;"><br>MAIN MAT.COLOR</th>
                                                                    <td id="content42" class="text-center"><br>White</td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">PRINTING COLORS</th>
                                                                    <td id="content43" class="text-center">Silver Met,<br>Solar Orange, Black, </td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">RESULT</th>
                                                                    <td id="content44" class="text-center">Fail</td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;"><br>TESTED BY</th>
                                                                    <td id="content45" class="text-center"><br>Imran Munir</td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;"><br>Humidity</th>
                                                                    <td id="" class="text-center"><br></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div style="margin: 15px auto" class="container-fluid p-2">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <table class="table table-striped">
                                                                <tbody style="border: 1px solid;">
                                                                    <tr>
                                                                        <th style="border: 1px solid">Category 1</th>
                                                                        <td>- all balls stamped with "FIFA Quality PRO" logo (replaced "FIFA APPROVED") or destined for getting the "FIFA Quality PRO" logo, whatever price!
                                                                            <br> -all balls with a "FOB price" of 10.01 or more USD, with or without FIFA logo!
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th style="border: 1px solid">Category 2</th>
                                                                        <td>- all balls stamped with "FIFA Quality PRO" logo (replaced "FIFA APPROVED") or destined for getting the "FIFA Quality PRO" logo, whatever price!
                                                                            <br> -all balls with a "FOB price" of 10.01 or more USD, with or without FIFA logo!
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th style="border: 1px solid">Category 3</th>
                                                                        <td>- all balls stamped with "FIFA Quality PRO" logo (replaced "FIFA APPROVED") or destined for getting the "FIFA Quality PRO" logo, whatever price!
                                                                            <br> -all balls with a "FOB price" of 10.01 or more USD, with or without FIFA logo!
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="container-fluid p-2">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <table class="table table-striped">
                                                                <tbody>
                                                                    <tr>
                                                                        <th class="text-center" style="border: 1px solid">TEST</th>
                                                                        <th class="text-center" style="border: 1px solid">METHOD</th>
                                                                        <th class="text-center" style="border: 1px solid">Condition</th>
                                                                        <th class="text-center" colspan="4" style="border: 1px solid;">Requirement</th>
                                                                        <th colspan="2" class="text-center" style="border: 1px solid">Result</th>
                                                                        <th style="border: 1px solid ">Remarks</th>

                                                                    </tr>
                                                                    <tr>
                                                                        <!-- <th style="border: 1px solid ">Static Properties</th> -->
                                                                        <th style="border: 1px solid ">Static Properties</th>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid;"></td>
                                                                        <td class="text-center" style="border: 1px solid; width:2%">
                                                                            <b>UNIT</b>
                                                                        <th style="border: 1px solid; width:7% ">CAT1</th>
                                                                        <th style="border: 1px solid ">CAT.2</th>
                                                                        <th style="border: 1px solid ">CAT.3</th>
                                                                        </td>
                                                                        <th colspan="2" class="text-center" style="border: 1px solid; border-collapse:collapse">
                                                                            min / max

                                                                        </th>
                                                                        <td style="border: 1px solid "></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Weight</td>
                                                                        <td style="border: 1px solid ">FGT-35</td>
                                                                        <td style="border: 1px solid ">0.8 bar</td>
                                                                        <td style="border: 1px solid ">
                                                                            <b>g</b>
                                                                        <td style="border: 1px solid ">420-445</td>
                                                                        <td style="border: 1px solid ">420-450</td>

                                                                        <td style="border: 1px solid; ">
                                                                            410-450
                                                                        </td>
                                                                        </td>
                                                                        <td id="content46" class="text-center" style="border: 1px solid;  ">

                                                                        <td id="content47" style="border: 1px solid "></td>
                                                                        </td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Circumference (CSM)</td>
                                                                        <td style="border: 1px solid ">FGT-37</td>
                                                                        <td style="border: 1px solid ">0.8 bar</td>
                                                                        <td style="border: 1px solid ">
                                                                            <b>cm</b>
                                                                        <td style="border: 1px solid ">68,5-69,5</td>
                                                                        <td style="border: 1px solid ">68,0-69,5</td>

                                                                        <td class="text-center" style="border: 1px solid; border-collapse:collapse ">
                                                                            68,0-70,0
                                                                        </td>
                                                                        </td>
                                                                        <td id="content48" style="border: 1px solid "></td>
                                                                        <td id="content49" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Dev. in Sphericity in ref. to 100% roundness CSM</td>
                                                                        <td style="border: 1px solid ">FGT-37</td>
                                                                        <td style="border: 1px solid ">0.8 bar</td>
                                                                        <td style="border: 1px solid ">
                                                                            <b>%</b>
                                                                        <td style="border: 1px solid ">max 1,3</td>
                                                                        <td style="border: 1px solid ">max 1,6</td>
                                                                        <td style="border: 1px solid ">max 1,6</td>
                                                                        </td>
                                                                        <td id="content50" style="border: 1px solid "></td>
                                                                        <td id="content51" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Loss of pressure</td>
                                                                        <td style="border: 1px solid ">FGT-38</td>
                                                                        <td class="text-center" style="border: 1px solid ">1.0 bar<br>evaluation after 72h</td>
                                                                        <td style="border: 1px solid ">
                                                                            <b>%</b>
                                                                        <td style="border: 1px solid ">max 20</td>
                                                                        <td style="border: 1px solid ">max 25</td>
                                                                        <td style="border: 1px solid ">max 25</td>
                                                                        </td>
                                                                        <td id="content52" style="border: 1px solid "></td>
                                                                        <td id="content53" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <th style="border: 1px solid ">Dynamic Properties</th>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td colspan="8" style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Rebound at RT</td>
                                                                        <td style="border: 1px solid ">FGT-39</td>
                                                                        <td style="border: 1px solid ">0.6 bar</td>
                                                                        <td style="border: 1px solid ">cm</td>
                                                                        <td style="border: 1px solid ">55-65</td>
                                                                        <td style="border: 1px solid ">50-65</td>
                                                                        <td style="border: 1px solid ">50-65</td>
                                                                        <td id="content54" style="border: 1px solid "></td>
                                                                        <td id="content55" style="border: 1px solid; border-collapse:collapse">

                                                                        </td>
                                                                        <td style="border: 1px solid "></td>

                                                                    </tr>
                                                                    <tr>

                                                                    <tr>
                                                                        <th style="border: 1px solid ">Shooter Test</th>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid ">0.8 bar</td>
                                                                        <td colspan="4" style="border: 1px solid ">cyles: &nbsp &nbsp &nbsp &nbsp &nbsp 2000x
                                                                        </td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Increase in Circumference</td>
                                                                        <td style="border: 1px solid ">FGT-41<br>FGT-37</td>
                                                                        <td style="border: 1px solid ">after cycles completed</td>
                                                                        <td style="border: 1px solid ">cm</td>
                                                                        <td style="border: 1px solid ">max 1,0</td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td id="content56" style="border: 1px solid "></td>
                                                                        <td id="content57" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Dev. in Sphericity in ref. to 100% roundness CSM</td>
                                                                        <td style="border: 1px solid ">FGT-41<br>FGT-37</td>
                                                                        <td style="border: 1px solid ">after cycles completed</td>
                                                                        <td style="border: 1px solid ">%</td>
                                                                        <td style="border: 1px solid ">max 1,3</td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td id="content58" style="border: 1px solid "></td>
                                                                        <td id="content59" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Change of pressure in ref. to initial pressure</td>
                                                                        <td style="border: 1px solid ">FGT-41</td>
                                                                        <td style="border: 1px solid ">after cycles completed</td>
                                                                        <td style="border: 1px solid ">bar</td>
                                                                        <td style="border: 1px solid ">max 0,1</td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td id="content60" style="border: 1px solid "></td>
                                                                        <td id="content61" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Material</td>
                                                                        <td style="border: 1px solid ">FGT-41</td>
                                                                        <td style="border: 1px solid ">after cycles completed</td>
                                                                        <td colspan="2" style="border: 1px solid ">stiching / bonding <br> + air valve undamaged <br> & no delamination <br> (seam/valve:no damage:)</td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td id="content62" style="border: 1px solid "></td>
                                                                        <td id="content63" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="border: 1px solid ">Printing Durability</th>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td colspan="8" style="border: 1px solid "></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="border: 1px solid ">Abrasion resistence on 2 panels</td>
                                                                        <td style="border: 1px solid ">FGT-43</td>
                                                                        <td style="border: 1px solid ">on 2 panels - 1x50cycl;<br>9 kPa load, Sandpaper P150</td>
                                                                        <td colspan="4" style="border: 1px solid ">dyestuff still visible; not smeared</td>
                                                                        <td id="content64" style="border: 1px solid "></td>
                                                                        <td id="content65" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>

                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div style="margin: 15px auto" class="container-fluid p-2">
                                                    <div class="row">

                                                        <div class="col-12">
                                                            <table class="table table-striped col-12">
                                                                <tbody style="border: 1px solid;">
                                                                    <tr>
                                                                        <!-- Test request obvious problems before,during and after tests Improvements -->
                                                                        <th style="border: 1px solid">Note:</th>
                                                                        <td>The above reported result is applicable to the sample as received at customer service section<br>
                                                                            Report was Electronically generated, Signature are not required
                                                                            **: These Tests are out of scope of ISO/IEC 17025-2017
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="col-12">
                                                            <table class="table table-striped col-12">
                                                                <tbody style="border: 1px solid;">
                                                                    <tr>
                                                                        <!-- Test request obvious problems before,during and after tests Improvements -->
                                                                        <th style="border: 1px solid">Remarks:</th>
                                                                        <td><span id="content667"></span></td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <table class="table">
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                            <span>Sohail Rasheed </span>
                                                        </th>
                                                        <th></th>

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
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Fresh Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="FreshPhotoIndoor" height="150px" width="200px" alt="FreshPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Shooter Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="ShooterPhotoIndoor" height="150px" width="200px" alt="ShooterPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Hydrolysis Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="HydroPhotoIndoor" height="150px" width="200px" alt="HydroPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Drum Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="DrumPhotoIndoor" height="150px" width="200px" alt="DrumPhoto" />
                                                        </th>
                                                    </tr>
                                                </table>
                                                <div class="col-12">
                                                    <table class="table table-striped col-12">

                                                        <tr>

                                                            <td style="text-align:Center; font-size:Bold; font-size:25;">
                                                                <h2>End of Report</h2>
                                                            </td>
                                                        </tr>

                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" onclick="printDiv('printFGT')">Print Report</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--Soccer Ball Size 4-->

                    <div class="modal fade bd-example-modal-xl" id="soccerBallsSize4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Soccer Ball Size 4</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="printSoccerBallsSize4">
                                    <div class="card" id="">
                                        <div class="card-body">


                                            <table class="table">
                                                <tr>
                                                    <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>


                                                    <center>
                                                        <th style="text-align:Center;"> <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> </th>
                                                    </center>


                                                    <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> </th>
                                                </tr>
                                                <tr>
                                                    <!-- <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th> -->

                                                    <th></th>
                                                    <!-- <th> <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> </th> -->
                                                    <th style="font-size: x-large;font-weight:bold;padding:50px" id="exampleModalLabel">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>
                                                        FGT Report for Soccerballs Size 4</th>
                                                    <th> </th>
                                                    <!-- <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> </th> -->
                                                </tr>
                                            </table>


                                            <div style="display:flex;">
                                                <div style="padding-left:30px;padding-right:30px;">
                                                    <table border="1">
                                                        <tbody>
                                                            <tr>
                                                                <th>FACTORY NAME</th>
                                                                <td><span id="content122"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>lAB NO.</th>
                                                                <td><span id="content123"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>TESTING DATE</th>
                                                                <td><span id="content124"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>TEST ACC. TO CAT:</th>
                                                                <td><span id="content125"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>FIFA STAMP</th>
                                                                <td><span id="content126"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>PRODUCTION MONTH</th>
                                                                <td><span id="content127"></span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div style="padding-left:30px;padding-right:30px;">
                                                    <table border="1">

                                                        <th colspan="2" class="text-center">CONSTRUCTION</th>

                                                        <tr>
                                                            <th>CONVERT MAT.</th>
                                                            <td><span id="content128"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>BACKING</th>
                                                            <td><span id="content129"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>BLADDER</th>
                                                            <td><span id="content130"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>BALLTYPE</th>
                                                            <td><span id="content131"></span></td>
                                                        </tr>


                                                    </table>

                                                </div>

                                                <div style="padding-left:30px;padding-right:30px;">
                                                    <table border="1">
                                                        <tr>
                                                            <th>TEST TYPE</th>
                                                            <td><span id="content132"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>MAIN MAT.COLOR</th>
                                                            <td><span id="content133"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>PRINTING COLOR</th>
                                                            <td><span id="content134"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>RESULT</th>
                                                            <td><span id="content135"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>TESTED BY</th>
                                                            <td><span id="content136"></span></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>

                                            <br>


                                            <div style="margin: 1px auto" class="container-fluid ">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <table class="table table-striped">
                                                            <tbody style="border: 1px solid;">
                                                                <tr>
                                                                    <th style="border: 1px solid">Category 1</th>
                                                                    <td> -all Beach Balls with "FIFA QUALITY" logo (replace "FIFA INSPECTED")</td>
                                                                </tr>

                                                                <tr>
                                                                    <th style="border: 1px solid">Category 2</th>
                                                                    <td>-all non stamped balls</td>
                                                                </tr>

                                                                <tr>
                                                                    <th style="border: 1px solid">Category 3</th>
                                                                    <td> -entry price beach soccer % leisure balls</td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>




                                            <div style="padding-left:30px;padding-right:30px;">
                                                <table border="1">
                                                    <tr>
                                                        <th>CATEGORY 1</th>
                                                        <td> -all Beach Balls with "FIFA QUALITY" logo (replace "FIFA INSPECTED")</td>
                                                    </tr>
                                                    <tr>
                                                        <th>CATEGORY 2</th>
                                                        <td>-all non stamped balls</td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <br>

                                            <div style="padding-left:30px;padding-right:30px;">
                                                <table border="1">
                                                    <tr style="text-align:center;">
                                                        <th>TEST</th>
                                                        <th>METHOD</th>
                                                        <th>CONDITION</th>
                                                        <th colspan="3">REQUIREMENT</th>
                                                        <th colspan="2">RESULT</th>
                                                        <th>REMARKS</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Static Properties</th>
                                                        <th></th>
                                                        <th></th>
                                                        <th style="text-align:center;">UNIT</th>
                                                        <th style="text-align:center;">Cat.1</th>
                                                        <th style="text-align:center;">Cat.2</th>
                                                        <th style="text-align:center; word-spacing: 8px;" colspan="2">min / max</th>
                                                        <td style="text-align:center;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Weight</td>
                                                        <td>FGT-35</td>
                                                        <td>0.8 bar</td>
                                                        <td>g</td>
                                                        <td>350-390</td>
                                                        <td>350-390</td>
                                                        <td id="content137"></td>
                                                        <td id="content138"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Circumference (CSM)</td>
                                                        <td>FGT-37</td>
                                                        <td>0.8 bar</td>
                                                        <td>cm</td>
                                                        <td>63.5-66.0</td>
                                                        <td>63.5-66.0</td>
                                                        <td id="content139"></td>
                                                        <td id="content140"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dev. in Sehericity in ref. to 100% roundness CSM</td>
                                                        <td>FGT-37</td>
                                                        <td>0.8 bar</td>
                                                        <td>%</td>
                                                        <td>max 1,6</td>
                                                        <td>max 1,8</td>
                                                        <td id="content141"></td>
                                                        <td id="content142"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Loss fo Pressure</td>
                                                        <td>FGT-38</td>
                                                        <td>1.0 bar evalution of 72h</td>
                                                        <td>%</td>
                                                        <td>max 20</td>
                                                        <td>max 20</td>
                                                        <td id="content143"></td>
                                                        <td id="content144"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Dynamic Pressure</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Round at RT</td>
                                                        <td>FGT-39</td>
                                                        <td>0.8 bar</td>
                                                        <td>cm</td>
                                                        <td>115-155</td>
                                                        <td>115-155</td>
                                                        <td id="content145"></td>
                                                        <td id="content146"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Round at 5 C</td>
                                                        <td>FGT-39</td>
                                                        <td>0.8 bar</td>
                                                        <td>cm</td>
                                                        <td>min 120</td>
                                                        <td>min 110</td>
                                                        <td id="content147"></td>
                                                        <td id="content148"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Water Resistance Test</th>
                                                        <td></td>
                                                        <td>0.8 bar</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Water uptake</td>
                                                        <td>FGT-40</td>
                                                        <td>after 300 cycles</td>
                                                        <td>%</td>
                                                        <td>max 10%/ball</td>
                                                        <td>max 20%/ball</td>
                                                        <td id="content149"></td>
                                                        <td id="content150"></td>

                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Increase in Circumference</td>
                                                        <td>FGT-40 FGT-37</td>
                                                        <td>after 300 cycles</td>
                                                        <td>cm</td>
                                                        <td>max 0,8</td>
                                                        <td>max 1</td>
                                                        <td id="content151"></td>
                                                        <td id="content152"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dev. in Sehericity in ref. to 100% roundness CSM</td>
                                                        <td>FGT-40 FGT-37</td>
                                                        <td>after 300 cycles</td>
                                                        <td>%</td>
                                                        <td>max 1,6</td>
                                                        <td>max 1,8</td>
                                                        <td id="content153"></td>
                                                        <td id="content154"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Shooter Test</th>
                                                        <td></td>
                                                        <td>0.8 bar</td>
                                                        <td>cycles:</td>
                                                        <td>2000x</td>
                                                        <td>1000x</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Increase in Circumference</td>
                                                        <td>FGT-41 FGT-37</td>
                                                        <td>after cycles completed</td>
                                                        <td>cm</td>
                                                        <td>max 1,5</td>
                                                        <td>max 1,5</td>
                                                        <td id="content156"></td>
                                                        <td id="content157"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dev. in Sehericity in ref. to 100% roundness CSM</td>
                                                        <td>FGT-41 FGT-37</td>
                                                        <td>after cycles completed</td>
                                                        <td>%</td>
                                                        <td>max 1,6</td>
                                                        <td>max 1,8</td>
                                                        <td id="content158"></td>
                                                        <td id="content159"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Change of pressure in ref. to 100% pressure</td>
                                                        <td>FGT-41</td>
                                                        <td>after cycles completed</td>
                                                        <td>bar</td>
                                                        <td>max 0,1</td>
                                                        <td>max 0,1</td>
                                                        <td id="content160"></td>
                                                        <td id="content161"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Material</td>
                                                        <td>FGT-41</td>
                                                        <td>after cycles completed</td>
                                                        <td style="text-align:center ;" colspan="3">stitching/bonding+air value damaged % no delamination</td>
                                                        <td id="content162"></td>
                                                        <td id="content163"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Printing Durability</th>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Drum Test</td>
                                                        <td>FGT-50</td>
                                                        <td>0.8 bar / 240 minutes-wet</td>
                                                        <td colspan="3" style="text-align:center ;"> print is still visible around the ball</td>
                                                        <td id="content164"></td>
                                                        <td id="content165"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Abrasion resistance on 2 panles after water test W/Sandpaper grade P150</td>
                                                        <td>FGT-43</td>
                                                        <td>1x50cycl.; 9kPa load</td>
                                                        <td colspan="3" style="text-align:center ;"> dyestuff still visible; not smeared</td>
                                                        <td id="content166"></td>
                                                        <td id="content167"></td>
                                                        <td></td>
                                                    </tr>

                                                    <tr>
                                                        <th>Climate-Strenth Tests</th>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>UV Light Fastness</td>
                                                        <td>FGT-04</td>
                                                        <td>2h/550W</td>
                                                        <td colspan="3" style="text-align:center ;"> min 3 acc.greyscale</td>
                                                        <td id="content168"></td>
                                                        <td id="content169"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ozon Test on Rubber (only on balls with rubber surface)</td>
                                                        <td>FGT-46</td>
                                                        <td>24h</td>
                                                        <td colspan="3" style="text-align:center ;">DIN 5350 Cat.1</td>
                                                        <td id="content170"></td>
                                                        <td id="content171"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hydrolysis - Lamination</td>
                                                        <td>FGT-01</td>
                                                        <td>60 C ; 95% r.H.7 days</td>
                                                        <td colspan="3" style="text-align:center ;">no delamination</td>
                                                        <td id="content172"></td>
                                                        <td id="content173"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hydrolysis - color change</td>
                                                        <td>FGT-01</td>
                                                        <td>60 C ; 95% r.H. 7 days</td>
                                                        <td colspan="3" style="text-align:center ;">min 3acc.greyscale</td>
                                                        <td id="content174"></td>
                                                        <td id="content175"></td>
                                                        <td></td>
                                                    </tr>
                                                </table>

                                                <br>
                                                <div>
                                                    <table border="1" style="width:100% ;">
                                                        <tbody>
                                                            <tr>
                                                                <th>REMARKS:</th>
                                                                <td><span id="content175R"></span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>



                                                <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                    <!-- <span id="testApprovedSize5"> </span> -->
                                                    <span>Zain Abbas </span>
                                                </th>
                                                </tr>
                                                </table>

                                                <table class="table">
                                                    <tr>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Fresh Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="FreshPhotoSize4" height="150px" width="200px" alt="FreshPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Shooter Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="ShooterPhotoSize4" height="150px" width="200px" alt="ShooterPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Hydrolysis Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="HydroPhotoSize4" height="150px" width="200px" alt="HydroPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Drum Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="DrumPhotoSize4" height="150px" width="200px" alt="DrumPhoto" />
                                                        </th>
                                                    </tr>
                                                </table>
                                                <div class="col-12">
                                                    <table class="table table-striped col-12">

                                                        <tr>

                                                            <td style="text-align:Center; font-size:Bold; font-size:25;">
                                                                <h2>End of Report</h2>
                                                            </td>
                                                        </tr>

                                                    </table>
                                                </div>



                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button onclick="printDiv('printSoccerBallsSize4')" type="button" class="btn btn-primary">Print Report</button>
                                                </div>





                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>



                    <!-- Modal SOCCER SIZE 5 BALLS -->
                    <div class="modal fade bd-example-modal-xl" id="soccerBallsSize5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                    <h5 class="modal-title" id="exampleModalLongTitle">FGT Report</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="printSoccerBallsSize5">
                                    <!--printFGTSize5-->
                                    <div class="card" id="printFGTSize5">
                                        <div class="card-body">
                                            <!-- <table class="table">
                                                <tr>
                                                    <th style="font-size: large;font-weight:bold;padding:50px" id="exampleModalLabel">FGT REPORT FOR SOCCERBALLS SIZE 5</th>
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
                                                    <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>
                                                </tr>
                                            </table> -->
                                            <?php
                                            $Uploading = $this->session->userdata('Uploading');
                                            $RS = $this->session->userdata('ReviewStatus');
                                            $AS = $this->session->userdata('ApprovalStatus');


                                            // if($Uploading==1){

                                            ?>
                                            <table class="table">
                                                <tr>
                                                    <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>


                                                    <center>
                                                        <th style="text-align:Center;"> <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> </th>
                                                    </center>


                                                    <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="300px" height="180px" /> </th>
                                                </tr>
                                                <tr>
                                                    <!-- <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th> -->

                                                    <th></th>
                                                    <!-- <th> <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> </th> -->
                                                    <th style="font-size: x-large;font-weight:bold;padding:30px" id="exampleModalLabel">Quality Assurance Lab of Forward Sports (Pvt) Ltd FGT REPORT FOR SOCCERBALLS SIZE 5</th>
                                                    <th> </th>
                                                    <!-- <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> </th> -->
                                                </tr>
                                            </table>

                                            <!-- <h4 class="modal-title text-center m-4" id="exampleModalLabel">FGT REPORT FOR SOCCERBALLS SIZE 5</h4> -->
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <table class="table table-striped">
                                                            <tbody style="border: 1px solid;">
                                                                <tr>
                                                                    <th style="border: 1px solid;" id="workingNoSize5"></th>
                                                                    <td class="text-center" id="articleNoSize5"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">LAB #</th>
                                                                    <td id="content66" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">CSS Code</th>
                                                                    <td id="content666" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">TESTING DATE</th>
                                                                    <td id="content67" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">TEST ACC. TO CAT:</th>
                                                                    <td id="content68" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">FIFA STAMP</th>
                                                                    <td id="content69" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">PRODUCTION MONTH</th>
                                                                    <td id="content70" class="text-center"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-4">
                                                        <table class="table table-striped">
                                                            <tbody style="border: 1px solid;">
                                                                <tr>
                                                                    <th colspan="2" style="border: 1px solid; text-align:center">Construction</th>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">COVER MAT.</th>
                                                                    <td id="content71" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">BACKING</th>
                                                                    <td id="content72" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">BLADDER</th>
                                                                    <td id="content73" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">BALLTYPE</th>
                                                                    <td id="content74" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">TEMPERATURE</th>
                                                                    <td id="content74C" class="text-center"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-4">
                                                        <table class="table table-striped">
                                                            <tbody style="border: 1px solid;">
                                                                <tr>
                                                                    <th style="border: 1px solid;">TEST TYPE</th>
                                                                    <td id="content75" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">MAIN MAT.COLOR</th>
                                                                    <td id="content76" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">PRINTING COLORS</th>
                                                                    <td id="content77" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">RESULT</th>
                                                                    <td id="content78" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">TESTED BY</th>
                                                                    <td id="content79" class="text-center"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">HUMIDITY</th>
                                                                    <td id="content79C" class="text-center"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div style="margin: 1px auto" class="container-fluid ">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <table class="table table-striped">
                                                                <tbody style="border: 1px solid;">
                                                                    <tr>
                                                                        <th style="border: 1px solid">Category 1</th>
                                                                        <td>- all balls stamped with "FIFA Quality PRO" logo (replaced "FIFA APPROVED") or destined for getting the "FIFA Quality PRO" logo, whatever price!

                                                                            <br>- all balls with a "FOB price" of 10.01 or more USD, with or without FIFA logo!
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th style="border: 1px solid">Category 2</th>
                                                                        <td>- all balls stamped with "FIFA Quality" logo (replaced "FIFA INSPECTED") or destined for getting the"FIFA Quality" logo, whatever price!
                                                                            <br> - all balls with a "FOB price" between 5.01 USD and 10.00 USD, with or without FIFA logo!
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th style="border: 1px solid">Category 3</th>
                                                                        <td>- this is the basic requirement, valid for all balls with a "FOB price" less or equal to 5.00 USD, without any FIFA logo!

                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <table class="table table-striped">
                                                                <tbody>
                                                                    <tr>
                                                                        <th class="text-center" style="border: 1px solid">TEST</th>
                                                                        <th class="text-center" style="border: 1px solid">METHOD</th>
                                                                        <th class="text-center" style="border: 1px solid">Condition</th>
                                                                        <th class="text-center" colspan="4" style="border: 1px solid;">Requirement</th>
                                                                        <th colspan="2" class="text-center" style="border: 1px solid">Result</th>
                                                                        <th style="border: 1px solid ">Remarks</th>

                                                                    </tr>
                                                                    <tr>
                                                                        <!-- <th style="border: 1px solid ">Static Properties</th> -->
                                                                        <th style="border: 1px solid ">Static Properties</th>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid;"></td>
                                                                        <td class="text-center" style="border: 1px solid; width:2%">
                                                                            <b>UNIT</b>
                                                                        <th style="border: 1px solid; width:7% ">CAT1</th>
                                                                        <th style="border: 1px solid; width:7%">CAT.2</th>
                                                                        <th style="border: 1px solid; width:7% ">CAT.3</th>
                                                                        </td>
                                                                        <th colspan="2" class="text-center" style="border: 1px solid; border-collapse:collapse">
                                                                            min / max

                                                                        </th>
                                                                        <td style="border: 1px solid "></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Weight</td>
                                                                        <td style="border: 1px solid ">FGT-35</td>
                                                                        <td style="border: 1px solid ">0.8 bar</td>
                                                                        <td style="border: 1px solid ">
                                                                            <b>g</b>
                                                                        <td style="border: 1px solid ">420-445</td>
                                                                        <td style="border: 1px solid ">420-450</td>

                                                                        <td style="border: 1px solid; ">
                                                                            410-450
                                                                        </td>
                                                                        </td>
                                                                        <td id="content80" style="border: 1px solid;  ">

                                                                        <td id="content81" style="border: 1px solid "></td>
                                                                        </td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Circumference (CSM)</td>
                                                                        <td style="border: 1px solid ">FGT-37</td>
                                                                        <td style="border: 1px solid ">0.8 bar</td>
                                                                        <td style="border: 1px solid ">
                                                                            <b>cm</b>
                                                                        <td style="border: 1px solid ">68,5-69,5</td>
                                                                        <td style="border: 1px solid ">68,0-69,5</td>

                                                                        <td style="border: 1px solid; border-collapse:collapse ">
                                                                            68,0-70,0
                                                                        </td>
                                                                        </td>
                                                                        <td id="content82" style="border: 1px solid "></td>
                                                                        <td id="content83" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Dev. in Sphericity in ref. to 100% roundness CSM</td>
                                                                        <td style="border: 1px solid ">FGT-37</td>
                                                                        <td style="border: 1px solid ">0.8 bar</td>
                                                                        <td style="border: 1px solid ">
                                                                            <b>%</b>
                                                                        <td style="border: 1px solid ">max 1,3</td>
                                                                        <td style="border: 1px solid ">max 1,6</td>
                                                                        <td style="border: 1px solid ">max 1,6</td>
                                                                        </td>
                                                                        <td id="content84" style="border: 1px solid "></td>
                                                                        <td id="content85" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Loss of pressure</td>
                                                                        <td style="border: 1px solid ">FGT-38</td>
                                                                        <td style="border: 1px solid ">1.0 bar<br>evaluation after 72h</td>
                                                                        <td style="border: 1px solid ">
                                                                            <b>%</b>
                                                                        <td style="border: 1px solid ">max 20</td>
                                                                        <td style="border: 1px solid ">max 25</td>
                                                                        <td style="border: 1px solid ">max 25</td>
                                                                        </td>
                                                                        <td id="content86" style="border: 1px solid "></td>
                                                                        <td id="content87" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <th style="border: 1px solid ">Dynamic Properties</th>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td colspan="8" style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Rebound at RT</td>
                                                                        <td style="border: 1px solid ">FGT-39</td>
                                                                        <td style="border: 1px solid ">0.8 bar</td>
                                                                        <td style="border: 1px solid ">cm</td>
                                                                        <td style="border: 1px solid ">135-155</td>
                                                                        <td style="border: 1px solid ">125-155</td>
                                                                        <td style="border: 1px solid ">115-155</td>
                                                                        <td id="content88" style="border: 1px solid "></td>
                                                                        <td id="content89" style="border: 1px solid; border-collapse:collapse">

                                                                        </td>
                                                                        <td style="border: 1px solid "></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Rebound at 5ºC</td>
                                                                        <td style="border: 1px solid ">FGT-39</td>
                                                                        <td style="border: 1px solid ">0.8 bar; 5ºC/12h fridge</td>
                                                                        <td style="border: 1px solid ">cm</td>
                                                                        <td style="border: 1px solid ">min 130</td>
                                                                        <td style="border: 1px solid ">min 120</td>
                                                                        <td style="border: 1px solid ">min 110</td>
                                                                        <td id="content90" style="border: 1px solid "></td>
                                                                        <td id="content91" style="border: 1px solid; border-collapse:collapse">

                                                                        </td>
                                                                        <td style="border: 1px solid "></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Rebound at 0*C</td>
                                                                        <td style="border: 1px solid ">FGT-39</td>
                                                                        <td style="border: 1px solid ">0.8 bar; 5ºC/12h fridge</td>
                                                                        <td style="border: 1px solid ">cm</td>
                                                                        <td style="border: 1px solid ">120 min</td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td id="content92" style="border: 1px solid "></td>
                                                                        <td id="content93" style="border: 1px solid; border-collapse:collapse">

                                                                        </td>
                                                                        <td style="border: 1px solid "></td>

                                                                    </tr>
                                                                    <tr>

                                                                    <tr>
                                                                        <th style="border: 1px solid ">Shooter Test</th>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid ">0.8 bar</td>
                                                                        <td colspan="4" style="border: 1px solid ">cyles: &nbsp &nbsp &nbsp &nbsp &nbsp 3500x &nbsp &nbsp 3000x &nbsp &nbsp 2500x
                                                                        </td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Increase in Circumference</td>
                                                                        <td style="border: 1px solid ">FGT-41<br>FGT-37</td>
                                                                        <td style="border: 1px solid ">after cycles completed</td>
                                                                        <td style="border: 1px solid ">cm</td>
                                                                        <td style="border: 1px solid ">max 1.5</td>
                                                                        <td style="border: 1px solid ">max 1.5</td>
                                                                        <td style="border: 1px solid ">max 1.5</td>
                                                                        <td id="content94" style="border: 1px solid "></td>
                                                                        <td id="content95" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Dev. in Sphericity in ref. to 100% roundness CSM</td>
                                                                        <td style="border: 1px solid ">FGT-41<br>FGT-37</td>
                                                                        <td style="border: 1px solid ">after cycles completed</td>
                                                                        <td style="border: 1px solid ">%</td>
                                                                        <td style="border: 1px solid ">max 1,3</td>
                                                                        <td style="border: 1px solid ">max 1,6</td>
                                                                        <td style="border: 1px solid ">max 1,6</td>
                                                                        <td id="content96" style="border: 1px solid "></td>
                                                                        <td id="content97" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Change of pressure in ref. to initial pressure</td>
                                                                        <td style="border: 1px solid ">FGT-41</td>
                                                                        <td style="border: 1px solid ">after cycles completed</td>
                                                                        <td style="border: 1px solid ">bar</td>
                                                                        <td style="border: 1px solid ">max 0,1</td>
                                                                        <td style="border: 1px solid ">max 0,1</td>
                                                                        <td style="border: 1px solid ">max 0,1</td>
                                                                        <td id="content98" style="border: 1px solid "></td>
                                                                        <td id="content99" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Material</td>
                                                                        <td style="border: 1px solid ">FGT-41</td>
                                                                        <td style="border: 1px solid ">after cycles completed</td>
                                                                        <td colspan="4" style="border: 1px solid ">stiching / bonding + air valve<br> undamaged & no delamination <br> (seam/valve:no damage:)</td>
                                                                        <td id="content100" style="border: 1px solid "></td>
                                                                        <td id="content101" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th colspan="10" style="border: 1px solid ">Water Resistence
                                                                        </th>

                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Water uptake</td>
                                                                        <td style="border: 1px solid ">FGT-40</td>
                                                                        <td style="border: 1px solid ">after 300 cycles</td>
                                                                        <td style="border: 1px solid ">%</td>
                                                                        <td style="border: 1px solid ">max 10% / ball</td>
                                                                        <td style="border: 1px solid ">max 10% / ball</td>
                                                                        <td style="border: 1px solid ">max 15% / ball</td>
                                                                        <td id="content102" style="border: 1px solid "></td>
                                                                        <td id="content103" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Increase in Circumference</td>
                                                                        <td style="border: 1px solid ">FGT-40<br>FGT-37</td>
                                                                        <td style="border: 1px solid ">after 300 cycles</td>
                                                                        <td style="border: 1px solid ">%</td>
                                                                        <td style="border: 1px solid ">max 0.5</td>
                                                                        <td style="border: 1px solid ">max 0.8</td>
                                                                        <td style="border: 1px solid ">max 1.0</td>
                                                                        <td id="content104" style="border: 1px solid "></td>
                                                                        <td id="content105" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Dev in Sphericity in ref. to 100% roundness CSM</td>
                                                                        <td style="border: 1px solid ">FGT-40<br>FGT-37</td>
                                                                        <td style="border: 1px solid ">after 300 cycles</td>
                                                                        <td style="border: 1px solid ">%</td>
                                                                        <td style="border: 1px solid ">max 1.3</td>
                                                                        <td style="border: 1px solid ">max 1.6</td>
                                                                        <td style="border: 1px solid ">max 1.6</td>
                                                                        <td id="content106" style="border: 1px solid "></td>
                                                                        <td id="content107" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="border: 1px solid ">Printing Durability</th>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td colspan="8" style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Drum Test</td>
                                                                        <td style="border: 1px solid ">FGT-50</td>
                                                                        <td style="border: 1px solid ">0.8 bar/240 minutes-/<br>wet</td>
                                                                        <td colspan="4" style="border: 1px solid ">Priniting is visible around the ball</td>
                                                                        <td id="content108" style="border: 1px solid "></td>
                                                                        <td id="content109" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Abrasion resistence on 2 panels after water test w/<br>Sandpapergrade P150</td>
                                                                        <td style="border: 1px solid ">FGT-43</td>
                                                                        <td style="border: 1px solid ">1x50cycl;<br>9 kPa load</td>
                                                                        <td colspan="4" style="border: 1px solid ">dyestuff still visible; not smeared</td>
                                                                        <td id="content110" style="border: 1px solid "></td>
                                                                        <td id="content111" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th style="border: 1px solid ">Climatic-Strength Test</th>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td colspan="8" style="border: 1px solid "></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="border: 1px solid ">UV light Fastness</td>
                                                                        <td style="border: 1px solid ">FGT-04</td>
                                                                        <td style="border: 1px solid ">2h/550W</td>
                                                                        <td colspan="4" style="border: 1px solid ">min 3 acc. greyscale</td>
                                                                        <td id="content112" style="border: 1px solid "></td>
                                                                        <td id="content113" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="border: 1px solid ">Ozon Test Rubber(Only on balls with Rubber<br>Surface</td>
                                                                        <td style="border: 1px solid ">FGT-46</td>
                                                                        <td style="border: 1px solid ">24h</td>
                                                                        <td colspan="4" style="border: 1px solid ">DIN 5350 Cat. 1</td>
                                                                        <td id="content114" style="border: 1px solid "></td>
                                                                        <td id="content115" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="border: 1px solid ">Hydrolysis-Lamination</td>
                                                                        <td style="border: 1px solid ">FGT-01</td>
                                                                        <td style="border: 1px solid ">60ºC; 95% R.h.<br>7 days</td>
                                                                        <td colspan="4" style="border: 1px solid ">no delamination</td>
                                                                        <td id="content116" style="border: 1px solid "></td>
                                                                        <td id="content117" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="border: 1px solid ">Hydrolysis-Color Change</td>
                                                                        <td style="border: 1px solid ">FGT-01</td>
                                                                        <td style="border: 1px solid ">60ºC; 95% R.h.<br>7 days</td>
                                                                        <td colspan="4" style="border: 1px solid ">min 3 acc. greyscale</td>
                                                                        <td id="content118" style="border: 1px solid "></td>
                                                                        <td id="content119" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>

                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div style="margin: 5px auto" class="container-fluid">
                                                    <div class="row">

                                                        <div class="col-12">
                                                            <table class="table table-striped col-12">
                                                                <tbody style="border: 1px solid;">
                                                                    <tr>
                                                                        <th style="border: 1px solid">Note:</th>
                                                                        <td>
                                                                            The above reported result is applicable to the sample as received at customer service section
                                                                            Report was Electronically generated, Signature are not required
                                                                            **: These Tests are out of scope of ISO/IEC 17025-2017
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>


                                                        <div class="col-12">
                                                            <table class="table table-striped col-12">
                                                                <tbody style="border: 1px solid;">
                                                                    <tr>
                                                                        <th style="border: 1px solid">Remarks:</th>
                                                                        <td><span id="content120"></span></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <table class="table">
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                            <span>Sohail Rasheed </span>
                                                        </th>
                                                        <th></th>

                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <!-- <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedSize5"> </span> -->
                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span>Fatima Rasheed </span>

                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>


                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                            <!-- <span id="testApprovedSize5"> </span> -->
                                                            <span>Zain Abbas </span>
                                                        </th>
                                                    </tr>
                                                </table>

                                                <table class="table">
                                                    <tr>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Fresh Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="FreshPhotoSize5" height="150px" width="200px" alt="FreshPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Shooter Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="ShooterPhotoSize5" height="150px" width="200px" alt="ShooterPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Hydrolysis Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="HydroPhotoSize5" height="150px" width="200px" alt="HydroPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Drum Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="DrumPhotoSize5" height="150px" width="200px" alt="DrumPhoto" />
                                                        </th>
                                                    </tr>
                                                </table>
                                                <div class="col-12">
                                                    <table class="table table-striped col-12">

                                                        <tr>

                                                            <td style="text-align:Center; font-size:Bold; font-size:25;">
                                                                <h2>End of Report</h2>
                                                            </td>
                                                        </tr>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button onclick="printDiv('printFGTSize5')" type="button" class="btn btn-primary">Print Report</button>
                                </div>
                            </div>
                        </div>

                    </div>



                    <!--Soccer Balls B2B-->
                    <div class="modal fade bd-example-modal-xl" id="soccerBallsSizeB2B" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                    <h5 class="modal-title" id="exampleModalLongTitle">FGT Report</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="printSoccerBallB2B">
                                    <div class="card" id="">
                                        <div class="card-body">


                                            <table class="table">
                                                <tr>
                                                    <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>


                                                    <center>
                                                        <th style="text-align:Center;"> <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> </th>
                                                    </center>


                                                    <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> </th>
                                                </tr>
                                                <tr>
                                                    <!-- <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th> -->

                                                    <th></th>
                                                    <!-- <th> <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> </th> -->
                                                    <th style="font-size: x-large;font-weight:bold;padding:50px" id="exampleModalLabel">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>
                                                        FGT Report for Soccerballs B2B</th>
                                                    <th> </th>
                                                    <!-- <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> </th> -->
                                                </tr>
                                            </table>


                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <table style="border:1px solid" class="table table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <th style="border:1px solid">FACTORY NAME</th>
                                                                    <td style="border:1px solid" class="text-center"><span id="content176"></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border:1px solid">lAB NO.</th>
                                                                    <td style="border:1px solid" class="text-center"><span id="content177"></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border:1px solid">TESTING DATE</th>
                                                                    <td style="border:1px solid" class="text-center"><span id="content178"></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border:1px solid">TEST ACC. TO CAT:</th>
                                                                    <td style="border:1px solid" class="text-center"><span id="content179"></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border:1px solid">PRODUCTION MONTH</th>
                                                                    <td style="border:1px solid" class="text-center"><span id="content181"></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border:1px solid">TEMPERATURE</th>
                                                                    <td style="border:1px solid" class="text-center"><span id="content190B"></span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-4">
                                                        <table class="table table-striped">

                                                            <table style="border:1px solid">

                                                                <th colspan="2" style="text-align:center;">CONSTRUCTION</th>

                                                                <tr>
                                                                    <th style="border:1px solid">CONVERT MAT.</th>
                                                                    <td style="border:1px solid" class="text-center"><span id="content182"></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border:1px solid">BACKING</th>
                                                                    <td style="border:1px solid" class="text-center"><span id="content183"></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border:1px solid">BLADDER</th>
                                                                    <td style="border:1px solid" class="text-center"><span id="content184"></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border:1px solid">BALLTYPE</th>
                                                                    <td style="border:1px solid" class="text-center"><span id="content185"></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border:1px solid">HUMIDITY</th>
                                                                    <td style="border:1px solid" class="text-center"><span id="content191B"></span></td>
                                                                </tr>
                                                            </table>

                                                        </table>
                                                    </div>
                                                    <div class="col-4">
                                                        <table style="border:1px solid" class="table table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <th style="border:1px solid">TEST TYPE</th>
                                                                    <td style="border:1px solid" class="text-center"><span id="content186"></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border:1px solid">MAIN MAT.COLOR</th>
                                                                    <td style="border:1px solid" class="text-center"><span id="content187"></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border:1px solid">PRINTING COLOR</th>
                                                                    <td style="border:1px solid" class="text-center"><span id="content188"></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border:1px solid">RESULT</th>
                                                                    <td style="border:1px solid" class="text-center"><span id="content189"></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border:1px solid">TESTED BY</th>
                                                                    <td style="border:1px solid"><span id="content190"></span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>



                                            <br>

                                            <div style="margin: 1px auto" class="container-fluid ">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <table class="table table-striped">
                                                            <tbody style="border: 1px solid;">
                                                                <tr>
                                                                    <th style="border: 1px solid">Category 1</th>
                                                                    <td>size 5,4 (excel, OMB, construction)</td>
                                                                </tr>

                                                                <tr>
                                                                    <th style="border: 1px solid">Category 2</th>
                                                                    <td>small soccer Balls (Midi, size 1, mini, x-mini)</td>
                                                                </tr>

                                                                <tr>
                                                                    <th style="border: 1px solid">Category 3</th>
                                                                    <td>jumbo balls</td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>




                                            <br>

                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <table border="1">
                                                            <tr style="text-align:center;">
                                                                <th>TEST</th>
                                                                <th>METHOD</th>
                                                                <th>CONDITION</th>
                                                                <th colspan="5">REQUIREMENT</th>
                                                                <th colspan="2">RESULT</th>
                                                                <th>REMARKS</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Static Properties</th>
                                                                <th></th>
                                                                <th></th>
                                                                <th style="text-align:center;">UNIT</th>
                                                                <th style="text-align:center;" colspan="2">Cat.1</th>
                                                                <th style="text-align:center;">Cat.2</th>
                                                                <th style="text-align:center;">Cat.3</th>
                                                                <th style="text-align:center; word-spacing: 12px;" colspan="2">min / max</th>
                                                                <td style="text-align:center;"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Weight</td>
                                                                <td>FGT-35</td>
                                                                <td>FGT-00</td>
                                                                <td>g</td>
                                                                <td>410-450</td>
                                                                <td>410-451</td>
                                                                <td>midi 205-225 size1: 170-200 mini:140-160 x-mini:95-115</td>
                                                                <td>mean value</td>
                                                                <td><span id="content191"></span></td>
                                                                <td><span id="content192"></span></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Circumference</td>
                                                                <td>FGT-36</td>
                                                                <td>FGT-00</td>
                                                                <td>cm</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>midi 205-225 size1: 170-200 mini:140-160 x-mini:95-115</td>
                                                                <td>230,0-250.0</td>
                                                                <td><span id="content193"></span></td>
                                                                <td><span id="content194"></span></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Circumference (CSM)</td>
                                                                <td>FGT-37</td>
                                                                <td>FGT-00</td>
                                                                <td>cm</td>
                                                                <td>size 68,0-70,0 size 68,0-70.0</td>
                                                                <td>59.0-60.0</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><span id="content195"></span></td>
                                                                <td><span id="content196"></span></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Dev. in Sehericity in ref. to 100% roundness CSM</td>
                                                                <td>FGT-37</td>
                                                                <td>FGT-00</td>
                                                                <td>%</td>
                                                                <td>max 1,8</td>
                                                                <td>max 1,6</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><span id="content197"></span></td>
                                                                <td><span id="content198"></span></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Loss fo Pressure</td>
                                                                <td>FGT-38</td>
                                                                <td>FGT-00 evalution after 72h</td>
                                                                <td>%</td>
                                                                <td colspan="3">max 20%ball</td>
                                                                <td></td>
                                                                <td><span id="content199"></span></td>
                                                                <td><span id="content200"></span></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>color check</td>
                                                                <td>FGT-42</td>
                                                                <td>FGT-00 </td>
                                                                <td style="text-align:center;" colspan="5">L>40->max 3; L=40-70->max;4 L>75->max;5</td>
                                                                <td colspan="3"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Dynamic Properties</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Round at RT</td>
                                                                <td>FGT-39</td>
                                                                <td>FGT-00</td>
                                                                <td>cm</td>
                                                                <td>min 115</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><span id="content201"></span></td>
                                                                <td><span id="content202"></span></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Round at 5 C</td>
                                                                <td>FGT-39</td>
                                                                <td>FGT-00</td>
                                                                <td>cm</td>
                                                                <td>min 100</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><span id="content203"></span></td>
                                                                <td><span id="content204"></span></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Water Resistance Test</th>
                                                            </tr>
                                                            <tr>
                                                                <td>water uptake</td>
                                                                <td>FGT-40 </td>
                                                                <td>after 300 cycles</td>
                                                                <td>%</td>
                                                                <td>max 20%/balls</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><span id="content205"></span></td>
                                                                <td><span id="content206"></span></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Increase in Circumference</td>
                                                                <td>FGT-40 FGT-36</td>
                                                                <td>after 300 cycles</td>
                                                                <td>cm</td>
                                                                <td>max 1,5</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><span id="content207"></span></td>
                                                                <td><span id="content208"></span></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Dev. in Sehericity in ref. to 100% roundness CSM</td>
                                                                <td>FGT-40 FGT-37</td>
                                                                <td>after 300 cycles</td>
                                                                <td>%</td>
                                                                <td>max 1,8</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><span id="content209"></span></td>
                                                                <td><span id="content210"></span></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Shooter Test</th>
                                                                <td></td>
                                                                <td>0.6 bar</td>
                                                                <td></td>
                                                                <td>1000x</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Increase in Circumference</td>
                                                                <td>FGT-41 FGT-36</td>
                                                                <td>after cycles completed</td>
                                                                <td>cm</td>
                                                                <td>max 2</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><span id="content211"></span></td>
                                                                <td><span id="content212"></span></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Dev. in Sehericity in ref. to 100% roundness CSM</td>
                                                                <td>FGT-41 FGT-37</td>
                                                                <td>after cycles completed</td>
                                                                <td>%</td>
                                                                <td>max 1,8</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><span id="content213"></span></td>
                                                                <td><span id="content214"></span></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Change of pressure in ref. to 100% pressure</td>
                                                                <td>FGT-41</td>
                                                                <td>after cycles completed</td>
                                                                <td>bar</td>
                                                                <td>max 0,1</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><span id="content215"></span></td>
                                                                <td><span id="content216"></span></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Material</td>
                                                                <td>FGT-41</td>
                                                                <td>after cycles completed</td>
                                                                <td style="align-items:center" colspan="2">stitching/bonding+air value damaged % no delamination</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><span id="content217"></span></td>
                                                                <td><span id="content218"></span></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Printing Durability</th>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Drum Test</td>
                                                                <td>FGT-50</td>
                                                                <td>0.6 bar /150 minutes-wet</td>
                                                                <td colspan="3" style="text-align:center;"> print is still visible around the ball</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><span id="content219"></span></td>
                                                                <td><span id="content220"></span></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Abrasion resistance on 2 panles after water test W/Sandpaper grade P150</td>
                                                                <td>FGT-43</td>
                                                                <td>1x50cycl.; 9kPa load</td>
                                                                <td colspan="3" style="text-align:center;"> dyestuff still visible; not smeared</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><span id="content221"></span></td>
                                                                <td><span id="content222"></span></td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <th>Climate-Strenth Tests</th>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>UV Light Fastness</td>
                                                                <td>FGT-04</td>
                                                                <td>2h/550W</td>
                                                                <td colspan="3" style="text-align:center;"> min 3 acc.greyscale</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><span id="content223"></span></td>
                                                                <td><span id="content224"></span></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hydrolysis - Lamination</td>
                                                                <td>FGT-01</td>
                                                                <td>60 C ; 95% 7 days</td>
                                                                <td colspan="2">no delamination</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><span id="content225"></span></td>
                                                                <td><span id="content226"></span></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hydrolysis - color change</td>
                                                                <td>FGT-01</td>
                                                                <td>60 C ; 95% 7 days</td>
                                                                <td colspan="2">min 3acc.greyscale</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><span id="content227"></span></td>
                                                                <td><span id="content228"></span></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Child Safety Tests</th>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Use Abuse Testing</td>
                                                                <td>FGT-81</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>pass</td>
                                                                <td></td>
                                                                <td><span id="content229"></span></td>
                                                                <td><span id="content230"></span></td>
                                                                <td></td>
                                                            </tr>
                                                        </table>

                                                    </div>
                                                </div>
                                            </div>


                                            <br>
                                            <div>
                                                <table border="1" style="width:100% ;">
                                                    <tbody>
                                                        <tr>
                                                            <th style="text-align:center">REMARKS:</th>
                                                            <td>
                                                                <table border="1">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th> Test request </th>
                                                                            <td style="width:100% ;">R&D asghar@forward.pk</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th> failed criteria</th>
                                                                            <td style="width:100% ;">0</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>obvious problems before, during and after tests</th>
                                                                            <td style="width:100% ;">occur</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>improvements</th>
                                                                            <td style="width:100% ;">nothing</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="table">
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                            <span>Sohail Rasheed </span>
                                                        </th>
                                                        <th></th>

                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <!-- <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedSize5"> </span> -->
                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span>Fatima Rasheed </span>

                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>


                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                            <!-- <span id="testApprovedSize5"> </span> -->
                                                            <span>Zain Abbas </span>
                                                        </th>
                                                    </tr>
                                                </table>

                                                <table class="table">
                                                    <tr>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Fresh Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="FreshPhotoSize4" height="150px" width="200px" alt="FreshPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Shooter Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="ShooterPhotoSize4" height="150px" width="200px" alt="ShooterPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Hydrolysis Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="HydroPhotoSize4" height="150px" width="200px" alt="HydroPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Drum Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="DrumPhotoSize4" height="150px" width="200px" alt="DrumPhoto" />
                                                        </th>
                                                    </tr>
                                                </table>




                                                <div class="col-12">
                                                    <table class="table table-striped col-12">

                                                        <tr>

                                                            <td style="text-align:Center; font-size:Bold; font-size:25;">
                                                                <h2>End of Report</h2>
                                                            </td>
                                                        </tr>

                                                    </table>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button onclick="printDiv('printSoccerBallB2B')" type="button" class="btn btn-primary">Print Report</button>
                                                </div>



                                            </div>



                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>


                    <!--Soccer Balls Beach-->
                    <div class="modal fade bd-example-modal-xl" id="soccerBallsSizeBeach" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                    <h5 class="modal-title" id="exampleModalLongTitle">FGT Report</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="printSoccerBallsBeach">
                                    <div class="card" id="">
                                        <div class="card-body">



                                            <table class="table">
                                                <tr>
                                                    <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>


                                                    <center>
                                                        <th style="text-align:Center;"> <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> </th>
                                                    </center>


                                                    <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> </th>
                                                </tr>
                                                <tr>
                                                    <!-- <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th> -->

                                                    <th></th>
                                                    <!-- <th> <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> </th> -->
                                                    <th style="font-size: x-large;font-weight:bold;padding:50px" id="exampleModalLabel">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>FGT Report for Soccerballs Beach</th>
                                                    <th> </th>
                                                    <!-- <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> </th> -->
                                                </tr>
                                            </table>








                                            <div style="display:flex;">
                                                <div style="padding-left:30px;padding-right:30px;">
                                                    <table border="1">
                                                        <tbody>
                                                            <tr>
                                                                <th>FACTORY NAME</th>
                                                                <td><span id="content231"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>lAB NO.</th>
                                                                <td><span id="content232"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>TESTING DATE</th>
                                                                <td><span id="content233"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>TEST ACC. TO CAT:</th>
                                                                <td><span id="content234"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>FILE STAMP</th>
                                                                <td><span id="content235"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>PRODUCTION MONTH</th>
                                                                <td><span id="content236"></span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div style="padding-left:30px;padding-right:30px;">
                                                    <table border="1">

                                                        <th colspan="2" style="text-align:center;">CONSTRUCTION</th>

                                                        <tr>
                                                            <th>CONVERT MAT.</th>
                                                            <td><span id="content237"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>BACKING</th>
                                                            <td><span id="content238"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>BLADDER</th>
                                                            <td><span id="content239"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>BALLTYPE</th>
                                                            <td><span id="content240"></span></td>
                                                        </tr>


                                                    </table>

                                                </div>

                                                <div style="padding-left:30px;padding-right:30px;">
                                                    <table border="1">
                                                        <tr>
                                                            <th>TEST TYPE</th>
                                                            <td><span id="content241"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>MAIN MAT.COLOR</th>
                                                            <td><span id="content242"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>PRINTING COLOR</th>
                                                            <td><span id="content243"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>RESULT</th>
                                                            <td><span id="content244"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>TESTED BY</th>
                                                            <td><span id="content245"></span></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <br>




                                            <div style="margin: 1px auto" class="container-fluid ">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <table class="table table-striped">
                                                            <tbody style="border: 1px solid;">
                                                                <tr>
                                                                    <th style="border: 1px solid">Category 1</th>
                                                                    <td> -all Beach Balls with "FIFA QUALITY PRO" logo (replace "FIFA approved")</td>
                                                                </tr>

                                                                <tr>
                                                                    <th style="border: 1px solid">Category 2</th>
                                                                    <td> -all Beach Balls with "FIFA QUALITY" logo (replace "FIFA inspected") -> Training</td>
                                                                </tr>

                                                                <tr>
                                                                    <th style="border: 1px solid">Category 3</th>
                                                                    <td> -entry price beach soccer % leisure balls</td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>


                                            <br>
                                            <div style="padding-left:30px;padding-right:30px;">
                                                <table border="1">
                                                    <tr style="text-align:center;">
                                                        <th>TEST</th>
                                                        <th>METHOD</th>
                                                        <th>CONDITION</th>
                                                        <th colspan="4">REQUIREMENT</th>
                                                        <th colspan="2">RESULT</th>
                                                        <th>REMARKS</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Static Properties</th>
                                                        <th></th>
                                                        <th></th>
                                                        <th style="text-align:center;">UNIT</th>
                                                        <th style="text-align:center;">Cat.1</th>
                                                        <th style="text-align:center;">Cat.2</th>
                                                        <th style="text-align:center;">Cat.3</th>
                                                        <th style="text-align:center; word-spacing: 8px;" colspan="2">min / max</th>
                                                        <td style="text-align:center; "></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Weight</td>
                                                        <td>FGT-35</td>
                                                        <td>mean value</td>
                                                        <td>g</td>
                                                        <td>420-440</td>
                                                        <td>420-440</td>
                                                        <td>400-440</td>
                                                        <td><span id="content246"></span></td>
                                                        <td><span id="content247"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Circumference (CSM)</td>
                                                        <td>FGT-37</td>
                                                        <td>mean value</td>
                                                        <td>cm</td>
                                                        <td>68,0-70,0</td>
                                                        <td>68,0-70,0</td>
                                                        <td>68,0-70,0</td>
                                                        <td><span id="content248"></span></td>
                                                        <td><span id="content249"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dev. in Sehericity in ref. to 100% roundness CSM</td>
                                                        <td>FGT-37</td>
                                                        <td>mean value</td>
                                                        <td>%</td>
                                                        <td>max 1,6</td>
                                                        <td>max 1,6</td>
                                                        <td>max 1,8</td>
                                                        <td><span id="content250"></span></td>
                                                        <td><span id="content251"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Loss fo Pressure</td>
                                                        <td>FGT-38</td>
                                                        <td>mean value evalution of 72h</td>
                                                        <td>%</td>
                                                        <td>max 20</td>
                                                        <td>max 20</td>
                                                        <td>max 20</td>
                                                        <td><span id="content252"></span></td>
                                                        <td><span id="content253"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Dynamic Properties</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Round at RT</td>
                                                        <td>FGT-39</td>
                                                        <td>mean value</td>
                                                        <td>cm</td>
                                                        <td>100-150</td>
                                                        <td>100-150</td>
                                                        <td>100-150</td>
                                                        <td><span id="content254"></span></td>
                                                        <td><span id="content255"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Water Resistance Test &npar; (This test has to conducted after the shooter test with the shooter
                                                            test ball!</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Water uptake</td>
                                                        <td>FGT-40</td>
                                                        <td>after 300 cycles</td>
                                                        <td>%</td>
                                                        <td>min 8%/ball</td>
                                                        <td>min 10%/ball</td>
                                                        <td>min 12%/ball</td>
                                                        <td><span id="content256"></span></td>
                                                        <td><span id="content257"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Increase in Circumference</td>
                                                        <td>FGT-40 FGT-37</td>
                                                        <td>after 300 cycles</td>
                                                        <td>cm</td>
                                                        <td>max 0,8</td>
                                                        <td>max 1,0</td>
                                                        <td>max 1,5</td>
                                                        <td><span id="content258"></span></td>
                                                        <td><span id="content259"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dev. in Sehericity in ref. to 100% roundness CSM</td>
                                                        <td>FGT-40 FGT-37</td>
                                                        <td>after 300 cycles</td>
                                                        <td>%</td>
                                                        <td>max 1,6</td>
                                                        <td>max 1,6</td>
                                                        <td>max 1,8</td>
                                                        <td><span id="content260"></span></td>
                                                        <td><span id="content261"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Shooter Test</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td>cycles:</td>
                                                        <td>3500x</td>
                                                        <td>3000x</td>
                                                        <td>1000x</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Increase in Circumference</td>
                                                        <td>FGT-41 FGT-37</td>
                                                        <td>after cycles completed</td>
                                                        <td>cm</td>
                                                        <td>max 1.5</td>
                                                        <td>max 1.5</td>
                                                        <td>max 2</td>
                                                        <td><span id="content262"></span></td>
                                                        <td><span id="content263"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dev. in Sehericity in ref. to 100% roundness CSM</td>
                                                        <td>FGT-41 FGT-37</td>
                                                        <td>after cycles completed</td>
                                                        <td>%</td>
                                                        <td>max 1,6</td>
                                                        <td>max 1,6</td>
                                                        <td>max 1,8</td>
                                                        <td><span id="content264"></span></td>
                                                        <td><span id="content265"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Change of pressure in ref. to 100% pressure</td>
                                                        <td>FGT-41</td>
                                                        <td>after cycles completed</td>
                                                        <td>bar</td>
                                                        <td>max 0,1</td>
                                                        <td>max 0,1</td>
                                                        <td>max 0,3</td>
                                                        <td><span id="content266"></span></td>
                                                        <td><span id="content267"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Material</td>
                                                        <td>FGT-41</td>
                                                        <td>after cycles completed</td>
                                                        <td style="text-align:center;" colspan="3">stitching/bonding+air value damaged % no delamination</td>
                                                        <td><span id="content268"></span></td>
                                                        <td colspan="2"><span id="content269"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Printing Durability</th>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Drum Test</td>
                                                        <td>FGT-50</td>
                                                        <td>mean value / 240 minutes-wet</td>
                                                        <td colspan="3" style="text-align:center;"> print is still visible around the ball</td>
                                                        <td></td>
                                                        <td><span id="content270"></span></td>
                                                        <td><span id="content271"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Abrasion resistance on 2 panles after water test W/Sandpaper grade P150</td>
                                                        <td>FGT-43</td>
                                                        <td>1x50cycl.; 9kPa load</td>
                                                        <td colspan="4" style="text-align:center;"> dyestuff still visible; not smeared</td>
                                                        <td><span id="content272"></span></td>
                                                        <td><span id="content273"></span></td>
                                                        <td></td>
                                                    </tr>

                                                    <tr>
                                                        <th>Climate-Strenth Tests</th>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>UV Light Fastness</td>
                                                        <td>FGT-04</td>
                                                        <td>2h/550W</td>
                                                        <td colspan="4" style="text-align:center;"> min 3 acc.greyscale</td>
                                                        <td><span id="content274"></span></td>
                                                        <td><span id="content275"></span></td>
                                                        <td></td>
                                                    </tr>
                                                </table>

                                                <br>
                                                <div>
                                                    <table border="1" style="width:100% ;">
                                                        <tbody>
                                                            <tr>
                                                                <th>REMARKS:</th>
                                                                <td><span id="content275R"></span></td>

                                                            </tr>






                                                        </tbody>
                                                    </table>



                                                    <table class="table">
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                            <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                                <span>Sohail Rasheed </span>
                                                            </th>
                                                            <th></th>

                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <!-- <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedSize5"> </span> -->
                                                            <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span>Fatima Rasheed </span>

                                                            </th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>


                                                            <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                                <!-- <span id="testApprovedSize5"> </span> -->
                                                                <span>Zain Abbas </span>
                                                            </th>
                                                        </tr>
                                                    </table>

                                                    <table class="table">
                                                        <tr>
                                                            <th>
                                                                <h5 style="font-weight:bold;color:black">Fresh Image</h5>
                                                                <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="FreshPhotoSoccerBallBeach" height="150px" width="200px" alt="FreshPhoto" />
                                                            </th>
                                                            <th>
                                                                <h5 style="font-weight:bold;color:black">Shooter Image</h5>
                                                                <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="ShooterPhotoSoccerBallBeach" height="150px" width="200px" alt="ShooterPhoto" />
                                                            </th>
                                                            <th>
                                                                <h5 style="font-weight:bold;color:black">Hydrolysis Image</h5>
                                                                <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="HydroPhotoSoccerBallBeach" height="150px" width="200px" alt="HydroPhoto" />
                                                            </th>
                                                            <th>
                                                                <h5 style="font-weight:bold;color:black">Drum Image</h5>
                                                                <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="DrumPhotoSoccerBallBeach" height="150px" width="200px" alt="DrumPhoto" />
                                                            </th>
                                                        </tr>
                                                    </table>




                                                    <div class="col-12">
                                                        <table class="table table-striped col-12">

                                                            <tr>

                                                                <td style="text-align:Center; font-size:Bold; font-size:25;">
                                                                    <h2>End of Report</h2>
                                                                </td>
                                                            </tr>

                                                        </table>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button onclick="printDiv('printSoccerBallsBeach')" type="button" class="btn btn-primary">Print Report</button>
                                                    </div>



                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!--Soccer Balls Light-->
                    <div class="modal fade bd-example-modal-xl" id="soccerBallsSizeLight" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                    <h5 class="modal-title" id="exampleModalLongTitle">FGT Report</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="">



                                    <div class="card" id="printFGTSoccerBallsLight">
                                        <table style="margin-left:150px">
                                            <tbody>

                                                <tr>
                                                    <th style="margin-right:100px"><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>

                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <th style="margin-left:100px"> <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> </th>

                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <th style="margin-left:600px"> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> </th>
                                                </tr>

                                            </tbody>
                                        </table>


                                        <div class="card-body">






                                            <h2 style="font-size: x-large;font-weight:bold;padding:50px; align-text:center; margin-left:250px" id="exampleModalLabel">
                                                Quality Assurance Lab of Forward Sports (Pvt) Ltd
                                                <br>
                                                FGT Report for Soccerballs Light
                                            </h2>

                                            <div style="display:flex;">
                                                <div style="padding-left:30px;padding-right:30px;">
                                                    <table border="1">
                                                        <tbody>
                                                            <tr>
                                                                <th>FACTORY NAME</th>
                                                                <td><span id="content286"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>lAB NO.</th>
                                                                <td><span id="content287"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>TESTING DATE</th>
                                                                <td><span id="content288"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>TEST ACC. TO CAT:</th>
                                                                <td><span id="content289"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>PRODUCTION MONTH</th>
                                                                <td><span id="content291"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>TEMPERATURE</th>
                                                                <td><span id="content300C"></span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div style="padding-left:30px;padding-right:30px;">
                                                    <table border="1">
                                                        <th colspan="2" style="text-align:center;">CONSTRUCTION</th>
                                                        <tr>
                                                            <th>CONVERT MAT.</th>
                                                            <td><span id="content292"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>BACKING</th>
                                                            <td><span id="content293"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>BLADDER</th>
                                                            <td><span id="content294"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>BALLTYPE</th>
                                                            <td><span id="content295"></span></td>
                                                        </tr>
                                                    </table>

                                                </div>

                                                <div style="padding-left:30px;padding-right:30px;">
                                                    <table border="1">
                                                        <tr>
                                                            <th>TEST TYPE</th>
                                                            <td><span id="content296"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>MAIN MAT.COLOR</th>
                                                            <td><span id="content297"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>PRINTING COLOR</th>
                                                            <td><span id="content298"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th></th>
                                                            <td><span></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>RESULT</th>
                                                            <td><span id="content299"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>TESTED BY</th>
                                                            <td><span id="content300"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>HUMIDITY</th>
                                                            <td><span id="content301C"></span></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>

                                            <br>

                                            <div style="padding-left:30px;padding-right:30px; width:100%">
                                                <table border="1" style="width:1000px">
                                                    <tr>
                                                        <th>CATEGORY 1</th>
                                                        <td> 400g - Children balls (size 5)</td>
                                                    </tr>
                                                    <tr>
                                                        <th>CATEGORY 2</th>
                                                        <td>350g - Children balls (size 5,4)</td>
                                                    </tr>
                                                    <tr>
                                                        <th>CATEGORY 3</th>
                                                        <td>290g - Children balls (size 5,4,3)</td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <br>

                                            <div style="padding-left:30px;padding-right:30px;">
                                                <table border="1">
                                                    <tr style="text-align:center;">
                                                        <th>TEST</th>
                                                        <th>METHOD</th>
                                                        <th>CONDITION</th>
                                                        <th colspan="4">REQUIREMENT</th>
                                                        <th colspan="2">RESULT</th>
                                                        <th>REMARKS</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Static Properties</th>
                                                        <th></th>
                                                        <th></th>
                                                        <th>UNIT</th>
                                                        <th>Cat.1</th>
                                                        <th>Cat.2</th>
                                                        <th colspan="1">Cat.3</th>
                                                        <th></th>
                                                        <!-- <th>Size 5</th>
                                                        <th>Size 5,4</th>
                                                        <th>Size 5,4</th>
                                                        <th>Size 3</th>  -->
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th>Size 5</th>
                                                        <th>Size 5,4</th>
                                                        <th>Size 5,4</th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Weight</td>
                                                        <td>FGT-35</td>
                                                        <td>0.6 bar</td>
                                                        <td>g</td>
                                                        <td>390-410</td>
                                                        <td>360-330</td>
                                                        <td>300-270</td>
                                                        <td><span id="content301"></span></td>
                                                        <td><span id="content302"></span></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Circumference (CSM)</td>
                                                        <td>FGT-37</td>
                                                        <td>0.6 bar</td>
                                                        <td>cm</td>
                                                        <td>68.0-70.0</td>
                                                        <td>Size 5:68,0 - 70,0 Size 4:63.5-</td>
                                                        <td>Size 5:68,0 - 70,0 Size 4:63.5-66.0</td>
                                                        <td><span id="content303"></span></td>
                                                        <td><span id="content304"></span></td>
                                                        <td></td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Dev. in Sehericity in ref. to 100% roundness CSM</td>
                                                        <td>FGT-37</td>
                                                        <td>0.6 bar</td>
                                                        <td>%</td>
                                                        <td>max 1.8</td>
                                                        <td>max 1,6</td>
                                                        <td colspan="1">max 1,6</td>
                                                        <td><span id="content305"></span></td>
                                                        <td><span id="content306"></span></td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Loss of Pressure</td>
                                                        <td>FGT-38</td>
                                                        <td>0.6 bar evalution of 72h</td>
                                                        <td>%</td>
                                                        <td>max 20%/ball</td>
                                                        <td>max 20%/ball</td>
                                                        <td colspan="1">max 20%/ball</td>
                                                        <td><span id="content307"></span></td>
                                                        <td><span id="content308"></span></td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <th>Dynamic Properties</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Round at RT</td>
                                                        <td>FGT-39</td>
                                                        <td>0.6 bar </td>
                                                        <td>cm</td>
                                                        <td>min 115</td>
                                                        <td>min 115</td>
                                                        <td>min 115</td>
                                                        <td><span id="content309"></span></td>
                                                        <td><span id="content310"></span></td>
                                                        <td></td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Round at 5 C</td>
                                                        <td>FGT-39</td>
                                                        <td>0.6 bar</td>
                                                        <td>cm</td>
                                                        <td>min 100</td>
                                                        <td>min 100</td>
                                                        <td>min 100</td>
                                                        <td><span id="content311"></span></td>
                                                        <td><span id="content312"></span></td>
                                                        <td></td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <th>Water Resistance Test</th>
                                                        <td></td>
                                                        <td>0.6 bar</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Water uptake</td>
                                                        <td>FGT-40</td>
                                                        <td>after 300 cycles</td>
                                                        <td>%</td>
                                                        <td>max 20%/ball</td>
                                                        <td>max 15%/ball</td>
                                                        <td>max 15%/ball</td>
                                                        <td><span id="content313"></span></td>
                                                        <td><span id="content314"></span></td>
                                                        <td></td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Increase in Circumference</td>
                                                        <td>FGT-40 FGT-36</td>
                                                        <td>after 300 cycles</td>
                                                        <td>cm</td>
                                                        <td>max 1,5</td>
                                                        <td>max 1,0</td>
                                                        <td>max 1,0</td>
                                                        <td><span id="content315"></span></td>
                                                        <td><span id="content316"></span></td>
                                                        <td></td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Dev. in Sehericity in ref. to 100% roundness CSM</td>
                                                        <td>FGT-40 FGT-37</td>
                                                        <td>after 300 cycles</td>
                                                        <td>%</td>
                                                        <td>max 1.8</td>
                                                        <td>max 1,6</td>
                                                        <td>max 1,6</td>
                                                        <td><span id="content317"></span></td>
                                                        <td><span id="content318"></span></td>
                                                        <td></td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <th>Shooter Test</th>
                                                        <td></td>
                                                        <td>0.6 bar</td>
                                                        <td></td>
                                                        <td>1000x</td>
                                                        <td>1000x</td>
                                                        <td>1000x</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Increase in Circumference</td>
                                                        <td>FGT-41 FGT-36</td>
                                                        <td>after cycles completed</td>
                                                        <td>cm</td>
                                                        <td>max 2</td>
                                                        <td>max 1.5</td>
                                                        <td>max 1.5</td>
                                                        <td><span id="content319"></span></td>
                                                        <td><span id="content320"></span></td>
                                                        <td></td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Dev. in Sehericity in ref. to 100% roundness CSM</td>
                                                        <td>FGT-41 FGT-37</td>
                                                        <td>after cycles completed</td>
                                                        <td>%</td>
                                                        <td>max 1.8</td>
                                                        <td>max 1,6</td>
                                                        <td>max 1,6</td>
                                                        <td><span id="content321"></span></td>
                                                        <td><span id="content322"></span></td>
                                                        <td></td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Change of pressure in ref. to 100% pressure</td>
                                                        <td>FGT-41</td>
                                                        <td>after cycles completed</td>
                                                        <td>bar</td>
                                                        <td>max 0,1</td>
                                                        <td>max 0,1</td>
                                                        <td>max 0,1</td>
                                                        <td><span id="content323"></span></td>
                                                        <td><span id="content324"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Material</td>
                                                        <td>FGT-41</td>
                                                        <td>after cycles completed</td>
                                                        <td colspan="4">stitching/bonding+air value damaged % no delamination</td>
                                                        <td><span id="content325"></span></td>
                                                        <td><span id="content326"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Printing Durability</th>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Drum Test</td>
                                                        <td>FGT-50</td>
                                                        <td>0.6 bar / 150 minutes-wet</td>
                                                        <td colspan="4"> print is still visible around the ball</td>
                                                        <td><span id="content327"></span></td>
                                                        <td><span id="content328"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Abrasion resistance on 2 panles after water test W/Sandpaper grade P150
                                                        </td>
                                                        <td>FGT-43</td>
                                                        <td>1X30cycl.; 9kPa load</td>
                                                        <td colspan="4"> dyestuff still visible; not smeared</td>
                                                        <td><span id="content329"></span></td>
                                                        <td><span id="content330"></span></td>
                                                        <td></td>
                                                    </tr>

                                                    <tr>
                                                        <th>Climate-Strenth Tests</th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>UV Light Fastness</td>
                                                        <td>FGT-04</td>
                                                        <td>2h/550W</td>
                                                        <td colspan="4"> min 3 acc.greyscale</td>
                                                        <td><span id="content331"></span></td>
                                                        <td><span id="content332"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hydrolysis - Lamination</td>
                                                        <td>FGT-01</td>
                                                        <td>60 C ; 95% 7 days</td>
                                                        <td colspan="4">no delamination</td>
                                                        <td><span id="content333"></span></td>
                                                        <td><span id="content334"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hydrolysis - color change</td>
                                                        <td>FGT-01</td>
                                                        <td>60 C ; 95% 7 days</td>
                                                        <td colspan="4">min 3acc.greyscale</td>
                                                        <td><span id="content335"></span></td>
                                                        <td><span id="content336"></span></td>
                                                        <td></td>
                                                    </tr>
                                                </table>

                                                <br>
                                                <div>
                                                    <table border="1" style="width:100% ;">
                                                        <tbody>
                                                            <tr>
                                                                <th>REMARKS:</th>
                                                                <td><span id="content337R"></span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>




                                                <table class="table">
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                            <span>Sohail Rasheed </span>
                                                        </th>
                                                        <th></th>

                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <!-- <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedSize5"> </span> -->
                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span>Fatima Rasheed </span>

                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>


                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                            <!-- <span id="testApprovedSize5"> </span> -->
                                                            <span>Zain Abbas </span>
                                                        </th>
                                                    </tr>
                                                </table>


                                                <table class="table">
                                                    <tr>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Fresh Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="FreshPhotoSoccerBallsLight" height="150px" width="200px" alt="FreshPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Shooter Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="ShooterPhotoSoccerBallsLight" height="150px" width="200px" alt="ShooterPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Hydrolysis Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="HydroPhotoSoccerBallsLight" height="150px" width="200px" alt="HydroPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Drum Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="DrumPhotoSoccerBallsLight" height="150px" width="200px" alt="DrumPhoto" />
                                                        </th>
                                                    </tr>
                                                </table>



                                                <div class="col-12">
                                                    <table class="table table-striped col-12">

                                                        <tr>

                                                            <td style="text-align:Center; font-size:Bold; font-size:25;">
                                                                <h2>End of Report</h2>
                                                            </td>
                                                        </tr>

                                                    </table>
                                                </div>


                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button onclick="printDiv('printFGTSoccerBallsLight')" type="button" class="btn btn-primary">Print Report</button>
                                                </div>



                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
                        * {
                            margin: 0%;
                            padding: 0%;
                        }

                        .container1 {

                            width: 100%;
                            display: inline;
                        }

                        .table1 th,
                        td {
                            border: 1px solid black;
                        }

                        .table1 {
                            display: inline;
                            border-collapse: collapse;
                            margin-left: 5%;
                            margin-right: 5%;

                        }

                        .table1 td {
                            width: 160px;
                        }

                        .container2 {
                            width: 100%;
                            margin-top: 40px;
                            margin: 50px;
                        }

                        .table2 th,
                        td {
                            border: 1px solid black;
                        }

                        .table2 {
                            border-collapse: collapse;
                            margin-left: 2.2%;
                            margin-right: 5%;
                            text-align: center;
                        }

                        .table3 {
                            margin-left: 2.2%;
                            margin-right: 5%;
                            width: 50%;
                        }

                        .table3 .td-3 table tbody th,
                        td {
                            border: 1px solid black;
                        }

                        .table3 th {
                            border: 1px solid black;
                            width: 8%;
                        }

                        .table3 .td-3 table tbody th,
                        td {
                            border-collapse: collapse;
                        }

                        .table3 .td-3 {
                            width: 42%;
                        }
                    </style>


                    <!--FGT Soccer Balls Size 3-->
                    <div class="subheader">
                        <h4 class="subheader-title">
                            <a href="<?php echo base_url('LabController/labReportFGT') ?>" class="mx-4"> <button class='btn btn-primary'> <i class="fal fa-arrow-left"></i>&nbsp; Lab FGT Reports</button></a>
                        </h1>
                    </div>
                    <div class="modal fade bd-example-modal-xl" id="soccerBallsSize3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                    <h5 class="modal-title" id="exampleModalLongTitle">FGT Report</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="printSoccerBallsSize5">
                                    <div class="card" id="printFGTSize5">
                                        <div class="card-body">


                                            <table class="table">
                                                <tr>
                                                    <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>


                                                    <center>
                                                        <th style="text-align:Center;"> <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> </th>
                                                    </center>


                                                    <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> </th>
                                                </tr>
                                                <tr>
                                                    <!-- <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th> -->

                                                    <th></th>
                                                    <!-- <th> <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> </th> -->
                                                    <th style="font-size: x-large;font-weight:bold;padding:50px" id="exampleModalLabel">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>FGT Report for Soccerball Size 3</th>
                                                    <th> </th>
                                                    <!-- <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> </th> -->
                                                </tr>
                                            </table>

                                            <!-- <h1 style="text-align: center ; margin: 20px">FGT Report for Soccerball Size 3 <span
                                            style="float: right ; margin-right: 40px; ">adidas</span></h1> -->
                                            <div class="container1">
                                                <table class="table1">
                                                    <tr>
                                                        <th>FACTORY NAME</th>
                                                        <td><span id="content341"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>LAB NO.</th>
                                                        <td><span id="content342"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>TESTING DATE</th>
                                                        <td><span id="content343"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>TEST ACC. TO Cat.:</th>
                                                        <td><span id="content344"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>PRODUCTION MONTH</th>
                                                        <td><span id="content345"></span></td>
                                                    </tr>
                                                </table>

                                                <table class="table1">
                                                    <tr>
                                                        <th colspan="2">CONSTRUCTION</th>
                                                    </tr>
                                                    <tr>
                                                        <th>COVER MAT.</th>
                                                        <td><span id="content346"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>BACKING</th>
                                                        <td><span id="content347"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>BLADDER</th>
                                                        <td><span id="content348"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>BALLTYPE</th>
                                                        <td><span id="content349"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>TEMPERATURE</th>
                                                        <td><span id="content349Size3"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>HUMIDITY</th>
                                                        <td><span id="content350Size3"></span></td>
                                                    </tr>
                                                </table>

                                                <table class="table1">
                                                    <tr>
                                                        <th>TEST TYPE</th>
                                                        <td><span id="content350"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>MAIN MAT. COLOR</th>
                                                        <td><span id="content351"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>PRINTING COLORS</th>
                                                        <td><span id="content352"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>RESULT</th>
                                                        <td><span id="content353"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>TESTED BY</th>
                                                        <td><span id="content354"></span></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <div class="container2">
                                                <table class="table2">
                                                    <tr>
                                                        <th>TEST</th>
                                                        <th>METHOD</th>
                                                        <th>CONDITION</th>
                                                        <th colspan="2">REQUIREMENT</th>
                                                        <th colspan="2">RESULT</th>
                                                        <th>REMARKS</th>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left"> <b>Static Properties</b></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td style="width: 20%"><b>UNIT</b></td>
                                                        <td></td>
                                                        <td colspan="2"><b>min / max</b></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td> Weight</td>
                                                        <td>FGT-35</td>
                                                        <td>0.6 bar/24h</td>
                                                        <td style="width: 20%">g</td>
                                                        <td>280 - 320</td>
                                                        <td><span id="content356"></span></td>
                                                        <td><span id="content357"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td> Circumference(CSM)</td>
                                                        <td>FGT-37</td>
                                                        <td>0.6 bar/24h</td>
                                                        <td style="width: 20%">cm</td>
                                                        <td>59,0 - 60,5</td>
                                                        <td><span id="content358"></span></td>
                                                        <td><span id="content359"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td> Dev. in Sphericity in ref. to 100% roundness CSM</td>
                                                        <td>FGT-37</td>
                                                        <td>0.6 bar/24h</td>
                                                        <td style="width: 20%">%</td>
                                                        <td>max 1,6</td>
                                                        <td><span id="content360"></span></td>
                                                        <td><span id="content361"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td> Loss of Pressure</td>
                                                        <td>FGT-38</td>
                                                        <td>1.0 bar/12h<br>evaluation after 72h</td>
                                                        <td style="width: 20%">%</td>
                                                        <td>max 20</td>
                                                        <td><span id="content362"></span></td>
                                                        <td><span id="content363"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td> UV Light Fastness</td>
                                                        <td>FGT-04</td>
                                                        <td>2h/550W</td>
                                                        <td style="width:20%; text-align: center;" colspan="2">min 3 acc. greyscale</td>
                                                        <td></td>
                                                        <td><span id="content364"></span></td>
                                                        <td><span id="content365"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Abrasion resistance on 2 panels after water test w/<br>Sandpaper grade P150</td>
                                                        <td>FGT-43</td>
                                                        <td>1<small>X</small>50cycl.:<br>9 kPa load</td>
                                                        <td style="width:20% ; text-align: center;" colspan="2">dyestuff still visible; not<br>smeared</td>
                                                        <td></td>
                                                        <td><span id="content366"></span></td>
                                                        <td><span id="content367"></span></td>
                                                        <td></td>
                                                    </tr>
                                                </table>

                                                <table class="table3">
                                                    <tr>
                                                    </tr>
                                                    <tr class="tr-3">
                                                        <th>Remarks :</th>
                                                        <td class="td-3">
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Test Request</th>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>

                                                                        <th>failed criteria</th>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>

                                                                        <th>obvious problems before during and after tests</th>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>

                                                                        <th>improvements</th>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>

                                                <table class="table">
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                            <span>Sohail Rasheed </span>
                                                        </th>
                                                        <th></th>

                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <!-- <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedSize5"> </span> -->
                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span>Fatima Rasheed </span>

                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>


                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                            <!-- <span id="testApprovedSize5"> </span> -->
                                                            <span>Zain Abbas </span>
                                                        </th>
                                                    </tr>
                                                </table>

                                                <table class="table">
                                                    <tr>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Fresh Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="FreshPhotoSize5" height="150px" width="200px" alt="FreshPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Shooter Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="ShooterPhotoSize5" height="150px" width="200px" alt="ShooterPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Hydrolysis Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="HydroPhotoSize5" height="150px" width="200px" alt="HydroPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Drum Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="DrumPhotoSize5" height="150px" width="200px" alt="DrumPhoto" />
                                                        </th>
                                                    </tr>
                                                </table>
                                                <div class="col-12">
                                                    <table class="table table-striped col-12">

                                                        <tr>

                                                            <td style="text-align:Center; font-size:Bold; font-size:25;">
                                                                <h2>End of Report</h2>
                                                            </td>
                                                        </tr>

                                                    </table>




                                                </div>





                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button onclick="printDiv('soccerBallsSize3')" type="button" class="btn btn-primary">Print Report</button>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!--Soccer Balls Small-->
                    <div class="modal fade bd-example-modal-xl" id="soccerBallsSmall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                    <h5 class="modal-title" id="exampleModalLongTitle">FGT Report</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="printSoccerBallsSize4">
                                    <div class="card" id="printFGTSizeSmall">
                                        <div class="card-body">
                                            <table class="table">
                                                <tr>
                                                    <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>


                                                    <center>
                                                        <th style="text-align:Center;"> <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> </th>
                                                    </center>


                                                    <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> </th>
                                                </tr>
                                                <tr>
                                                    <!-- <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th> -->

                                                    <th></th>
                                                    <!-- <th> <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> </th> -->
                                                    <th style="font-size: x-large;font-weight:bold;padding:50px" id="exampleModalLabel">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>FGT Report for Soccerballs Small</th>
                                                    <th> </th>
                                                    <!-- <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> </th> -->
                                                </tr>
                                            </table>







                                            <table class="table1">

                                                <tbody style="border: 1px solid;">


                                                    <tr>
                                                        <th style="border: 1px solid;">FACTORY NAME</th>
                                                        <td><span class="text-center" class="text-center" id="content396"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="border: 1px solid;">LAB NO.</th>
                                                        <td><span class="text-center" id="content397"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="border: 1px solid;">TESTING DATE</th>
                                                        <td><span class="text-center" id="content398"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="border: 1px solid;">TEST ACC. TO Cat.:</th>
                                                        <td><span class="text-center" id="content398"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="border: 1px solid;">PRODUCTION MONTH</th>
                                                        <td><span class="text-center" id="content399"></span></td>
                                                    </tr>


                                                </tbody>
                                            </table>

                                            <table class="table1">
                                                <tr>
                                                    <th colspan="2">CONSTRUCTION</th>
                                                </tr>
                                                <tr>
                                                    <th>COVER MAT.</th>
                                                    <td><span id="content400"></span></td>
                                                </tr>
                                                <tr>
                                                    <th>BACKING</th>
                                                    <td><span id="content401"></span></td>
                                                </tr>
                                                <tr>
                                                    <th>BLADDER</th>
                                                    <td><span id="content402"></span></td>
                                                </tr>
                                                <tr>
                                                    <th>BALLTYPE</th>
                                                    <td><span id="content403"></span></td>
                                                </tr>
                                            </table>

                                            <table class="table1">
                                                <tr>
                                                    <th>TEST TYPE</th>
                                                    <td><span id="content404"></span></td>
                                                </tr>
                                                <tr>
                                                    <th>MAIN MAT. COLOR</th>
                                                    <td><span id="content405"></span></td>
                                                </tr>
                                                <tr>
                                                    <th>PRINTING COLORS</th>
                                                    <td><span id="content406"></span></td>
                                                </tr>
                                                <tr>
                                                    <th>RESULT</th>
                                                    <td><span id="content407"></span></td>
                                                </tr>
                                                <tr>
                                                    <th>TESTED BY</th>
                                                    <td><span id="content408"></span></td>
                                                </tr>
                                            </table>


                                            <table class="table2">
                                                <tr>
                                                    <th>TEST</th>
                                                    <th>METHOD</th>
                                                    <th>CONDITION</th>
                                                    <th colspan="2">REQUIREMENT</th>
                                                    <th colspan="2">RESULT</th>
                                                    <th>REMARKS</th>
                                                </tr>
                                                <tr>
                                                    <td> <b>Static Properties</b></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td style="width: 20%"><b>UNIT</b></td>
                                                    <td>Midi, Size 1, Mini,<br>x-Mini</td>
                                                    <td colspan="2"><b>min / max</b></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td> Weight</td>
                                                    <td>FGT-35</td>
                                                    <td>0.4 bar</td>
                                                    <td style="width: 20%">g</td>
                                                    <td>Midi:205-225<br>Size 1: 170-200<br>Mini: 140-160<br>x-Mini: 33.0-34.5</td>
                                                    <td><span id="content411"></span></td>
                                                    <td><span id="content412"></span></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td> Circumference(CSM)</td>
                                                    <td>FGT-36</td>
                                                    <td>0.4 bar</td>
                                                    <td style="width: 20%">cm</td>
                                                    <td>Midi:50.0-51.5<br>Size 1: 47.0-48.5<br>Mini: 40.0-41.5<br>x-Mini: 33.0-34.5</td>
                                                    <td><span id="content413"></span></td>
                                                    <td><span id="content414"></span></td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <table class="table3">
                                                <tr>
                                                </tr>
                                                <tr>
                                                    <th>Remarks :</th>
                                                    <td class="td-3">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Test Request</th>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>

                                                                    <th>failed criteria</th>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>

                                                                    <th>obvious problems before during and after tests</th>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>

                                                                    <th>improvements</th>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>


                                            <table class="table">
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                        <span>Sohail Rasheed </span>
                                                    </th>
                                                    <th></th>

                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <!-- <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedSize5"> </span> -->
                                                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span>Fatima Rasheed </span>

                                                    </th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>


                                                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                        <!-- <span id="testApprovedSize5"> </span> -->
                                                        <span>Zain Abbas </span>
                                                    </th>
                                                </tr>
                                            </table>

                                            <table class="table">
                                                <tr>
                                                    <th>
                                                        <h5 style="font-weight:bold;color:black">Fresh Image</h5>
                                                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="FreshPhotoSize5" height="150px" width="200px" alt="FreshPhoto" />
                                                    </th>
                                                    <th>
                                                        <h5 style="font-weight:bold;color:black">Shooter Image</h5>
                                                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="ShooterPhotoSize5" height="150px" width="200px" alt="ShooterPhoto" />
                                                    </th>
                                                    <th>
                                                        <h5 style="font-weight:bold;color:black">Hydrolysis Image</h5>
                                                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="HydroPhotoSize5" height="150px" width="200px" alt="HydroPhoto" />
                                                    </th>
                                                    <th>
                                                        <h5 style="font-weight:bold;color:black">Drum Image</h5>
                                                        <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="DrumPhotoSize5" height="150px" width="200px" alt="DrumPhoto" />
                                                    </th>
                                                </tr>
                                            </table>
                                            <div class="col-12">
                                                <table class="table table-striped col-12">

                                                    <tr>

                                                        <td style="text-align:Center; font-size:Bold; font-size:25;">
                                                            <h2>End of Report</h2>
                                                        </td>
                                                    </tr>

                                                </table>
                                            </div>








                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button onclick="printDiv('printFGTSizeSmall')" type="button" class="btn btn-primary">Print Report</button>
                                            </div>






                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!--Society + Soccer Balls-->
                    <div class="modal fade bd-example-modal-xl" id="soccerBallsSocietySoccerBALLS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                    <h5 class="modal-title" id="exampleModalLongTitle">FGT Report</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="printSoccerBallsSociety">
                                    <div class="card" id="printFGTSize5">
                                        <div class="card-body">


                                            <table class="table">
                                                <tr>
                                                    <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>


                                                    <center>
                                                        <th style="text-align:Center;"> <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> </th>
                                                    </center>


                                                    <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> </th>
                                                </tr>
                                                <tr>
                                                    <!-- <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th> -->

                                                    <th></th>
                                                    <!-- <th> <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> </th> -->
                                                    <th style="font-size: x-large;font-weight:bold;padding:50px" id="exampleModalLabel">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>FGT REPORT FOR SOCIETY + SOCCERBALLS</th>
                                                    <th> </th>
                                                    <!-- <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> </th> -->
                                                </tr>
                                            </table>



                                            <div style="display:flex;">
                                                <div style="padding-left:30px;padding-right:30px;">
                                                    <table border="1">
                                                        <tbody>
                                                            <tr>
                                                                <th>FACTORY NAME</th>
                                                                <td><span id="content451"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>lAB NO.</th>
                                                                <td><span id="content452"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>TESTING DATE</th>
                                                                <td><span id="content453"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>TEST ACC. TO CAT:</th>
                                                                <td><span id="content455"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>FILE STAMP</th>
                                                                <td><span id="content453"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>PRODUCTION MONTH</th>
                                                                <td><span id="content456"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>ARTICLE NO.</th>
                                                                <td><span id=""></span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div style="padding-left:30px;padding-right:30px;">
                                                    <table border="1">
                                                        <th colspan="2" style="text-align:center;">CONSTRUCTION</th>
                                                        <tbody>
                                                            <tr>
                                                                <th>CONVERT MAT.</th>
                                                                <td><span id="content457"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>BACKING</th>
                                                                <td><span id="content458"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>BLADDER</th>
                                                                <td><span id="content459"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>BALLTYPE</th>
                                                                <td><span id="content460"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>WORKING No</th>
                                                                <td><span id=""></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>BALL NAME</th>
                                                                <td><span id="content461"></span></td>
                                                            </tr>

                                                        </tbody>


                                                    </table>

                                                </div>
                                                <div style="padding-left:30px;padding-right:30px;">
                                                    <table border="1">
                                                        <tbody>
                                                            <tr>
                                                                <th>TEST TYPE</th>
                                                                <td><span id="content461"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>MAIN MAT.COLOR</th>
                                                                <td><span id="content462"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>PRINTING COLOR</th>
                                                                <td><span id="content463"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>RESULT</th>
                                                                <td><span id="content464"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>TESTED BY</th>
                                                                <td><span id="content465"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>TEMPERATURE</th>
                                                                <td><span id="content465Society"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>HUMIDITY</th>
                                                                <td><span id="content466Society"></span></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <br>

                                            <div style="padding-left:30px;padding-right:30px; width:100%">
                                                <table border="1">
                                                    <tbody>
                                                        <tr>
                                                            <th>CATEGORY 3</th>
                                                            <td> -this is basic requirement, valid for all balls with a "FOB Price" less or equal to 5.00 USB,
                                                                without any FIFA logo!</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <br>

                                            <div style="padding-left:30px;padding-right:30px;">
                                                <table border="1">
                                                    <tr style="text-align:center;">
                                                        <th>TEST</th>
                                                        <th>METHOD</th>
                                                        <th>CONDITION</th>
                                                        <th colspan="2">REQUIREMENT</th>
                                                        <th colspan="2">RESULT</th>
                                                        <th>REMARKS</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Static Properties</th>
                                                        <th></th>
                                                        <th></th>
                                                        <th style="text-align:center;">UNIT</th>
                                                        <th style="text-align:center;">Cat.3</th>
                                                        <th style="text-align:center; word-spacing: 12px" colspan="2">min / max</th>
                                                        <td style="text-align:center;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Weight</td>
                                                        <td>FGT-35</td>
                                                        <td>0.6 bar</td>
                                                        <td>g</td>
                                                        <td>410-450</td>
                                                        <td><span id="content466"></span></td>
                                                        <td><span id="content467"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Circumference (CSM)</td>
                                                        <td>FGT-37</td>
                                                        <td>0.6 bar</td>
                                                        <td>cm</td>
                                                        <td>68,0-70,0</td>
                                                        <td><span id="content468"></span></td>
                                                        <td><span id="content469"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dev. in Sehericity in ref. to 100% roundness CSM</td>
                                                        <td>FGT-37</td>
                                                        <td>0.6 bar</td>
                                                        <td>%</td>
                                                        <td>max 1,6</td>
                                                        <td><span id="content470"></span></td>
                                                        <td><span id="content471"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Loss fo Pressure</td>
                                                        <td>FGT-38</td>
                                                        <td>1.0 bar evalution after 72h</td>
                                                        <td>%</td>
                                                        <td>max 25</td>
                                                        <td><span id="content472"></span></td>
                                                        <td><span id="content473"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Dynamic Properties</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Round at RT</td>
                                                        <td>FGT-39</td>
                                                        <td>0.6 bar</td>
                                                        <td>cm</td>
                                                        <td>110-120</td>
                                                        <td><span id="content474"></span></td>
                                                        <td><span id="content475"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Round at 5 C</td>
                                                        <td>FGT-39</td>
                                                        <td>0.6 bar 5C/12h fridge</td>
                                                        <td>cm</td>
                                                        <td>min 110</td>
                                                        <td><span id="content476"></span></td>
                                                        <td><span id="content477"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Water Resistance Test</th>
                                                        <td></td>
                                                        <td>0.6 bar</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Water uptake</td>
                                                        <td>FGT-40</td>
                                                        <td>after 300 cycles</td>
                                                        <td>%</td>
                                                        <td>max 15%/ball</td>
                                                        <td><span id="content478"></span></td>
                                                        <td><span id="content479"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Increase in Circumference</td>
                                                        <td>FGT-40 FGT-37</td>
                                                        <td>after 300 cycles</td>
                                                        <td>cm</td>
                                                        <td>max 1,0</td>
                                                        <td><span id="content480"></span></td>
                                                        <td><span id="content481"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dev. in Sehericity in ref. to 100% roundness CSM</td>
                                                        <td>FGT-40 FGT-37</td>
                                                        <td>after 300 cycles</td>
                                                        <td>%</td>
                                                        <td>max 1,6</td>
                                                        <td><span id="content482"></span></td>
                                                        <td><span id="content483"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Shooter Test</th>
                                                        <td></td>
                                                        <td>0.8 bar</td>
                                                        <td>cycles:</td>
                                                        <td>3500x</td>
                                                        <td>3000x</td>
                                                        <td>2500x</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Increase in Circumference</td>
                                                        <td>FGT-41 FGT-37</td>
                                                        <td>after cycles completed</td>
                                                        <td>cm</td>
                                                        <td>max 1,5</td>
                                                        <td><span id="content484"></span></td>
                                                        <td><span id="content485"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dev. in Sehericity in ref. to 100% roundness CSM</td>
                                                        <td>FGT-41 FGT-37</td>
                                                        <td>after cycles completed</td>
                                                        <td>%</td>
                                                        <td>max 1,6</td>
                                                        <td><span id="content486"></span></td>
                                                        <td><span id="content487"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Change of pressure in ref. to 100% pressure</td>
                                                        <td>FGT-41</td>
                                                        <td>after cycles completed</td>
                                                        <td>bar</td>
                                                        <td>max 0,1</td>
                                                        <td><span id="content488"></span></td>
                                                        <td><span id="content489"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Material</td>
                                                        <td>FGT-41</td>
                                                        <td>after cycles completed</td>
                                                        <td style="text-align:center;" colspan="2">stitching/bonding+air value damaged % no delamination</td>
                                                        <td style="text-align:center;" colspan="2">stitching/bonding+air value damaged % no delamination (seam/value no
                                                            damaged)</td>
                                                        <td></td>
                                                    <tr>
                                                        <th>Printing Durability</th>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Drum Test</td>
                                                        <td>FGT-50</td>
                                                        <td>0.6 bar / 240 minutes-wet</td>
                                                        <td colspan="2" style="text-align:center;"> print is still visible around the ball</td>
                                                        <td colspan="2" style="text-align:center;"> print is still visible around the ball</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Abrasion resistance on 2 panles after water test W/Sandpaper grade P150</td>
                                                        <td>FGT-43</td>
                                                        <td>1x50cycl.; 9kPa load</td>
                                                        <td colspan="2" style="text-align:center;"> dyestuff still visible; not smeared</td>
                                                        <td colspan="2" style="text-align:center;"> dyestuff still visible; not smeared</td>
                                                        <td></td>
                                                    </tr>

                                                    <tr>
                                                        <th>Climate-Strenth Tests</th>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>UV Light Fastness</td>
                                                        <td>FGT-04</td>
                                                        <td>2h/550W</td>
                                                        <td colspan="2" style="text-align:center;"> min 3 acc.greyscale</td>
                                                        <td><span id="content490"></span></td>
                                                        <td><span id="content491"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ozon Test on Rubber (only on balls with rubber surface)</td>
                                                        <td>FGT-46</td>
                                                        <td>24h</td>
                                                        <td colspan="2" style="text-align:center;">DIN 5350 Cat.1</td>
                                                        <td><span id="content492"></span></td>
                                                        <td><span id="content493"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hydrolysis - Lamination</td>
                                                        <td>FGT-01</td>
                                                        <td>60 C ; 95% r.H.7 days</td>
                                                        <td colspan="2" style="text-align:center;">no delamination</td>
                                                        <td><span id="content494"></span></td>
                                                        <td><span id="content495"></span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hydrolysis - color change</td>
                                                        <td>FGT-01</td>
                                                        <td>60 C ; 95% r.H. 7 days</td>
                                                        <td colspan="2" style="text-align:center;">min 3acc.greyscale</td>
                                                        <td><span id="content496"></span></td>
                                                        <td><span id="content497"></span></td>
                                                        <td></td>
                                                    </tr>
                                                </table>

                                                <br>


                                                <table border="1" style="width:100% ;">
                                                    <tbody>
                                                        <tr>
                                                            <th>REMARKS:</th>
                                                            <td><span id="content465R"></span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>


                                                <table class="table">
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                            <span>Sohail Rasheed </span>
                                                        </th>
                                                        <th></th>

                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <!-- <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedSize5"> </span> -->
                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span>Fatima Rasheed </span>

                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>


                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                            <!-- <span id="testApprovedSize5"> </span> -->
                                                            <span>Zain Abbas </span>
                                                        </th>
                                                    </tr>
                                                </table>

                                                <table class="table">
                                                    <tr>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Fresh Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="FreshPhotoSize5" height="150px" width="200px" alt="FreshPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Shooter Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="ShooterPhotoSize5" height="150px" width="200px" alt="ShooterPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Hydrolysis Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="HydroPhotoSize5" height="150px" width="200px" alt="HydroPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Drum Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="DrumPhotoSize5" height="150px" width="200px" alt="DrumPhoto" />
                                                        </th>
                                                    </tr>
                                                </table>
                                                <div class="col-12">
                                                    <table class="table table-striped col-12">

                                                        <tr>

                                                            <td style="text-align:Center; font-size:Bold; font-size:25;">
                                                                <h2>End of Report</h2>
                                                            </td>
                                                        </tr>

                                                    </table>
                                                </div>








                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button onclick="printDiv('printSoccerBallsSociety')" type="button" class="btn btn-primary">Print Report</button>
                                                </div>



                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="ModalLoginForm" class="modal fade">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title">Add Building</h1>
                                </div>
                                <div class="modal-body">
                                    <form role="form" name="form" id="myForm" method="POST" action="">
                                        <!-- <input type="hidden" name="_token" value=""> -->
                                        <div class="form-group" style="display:none;">
                                            <label class="control-label">ID</label>
                                            <div>
                                                <input type="text" class="form-control input-lg" id="project-bid" name="BID">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label">Building Name :</label>
                                            <div>
                                                <input type="text" class="form-control input-lg" name="buildName" placeholder="Building Name">
                                            </div>
                                        </div>

                                        <!-- <div class="form-group">
                                            <label class="control-label">Password</label>
                                            <div>
                                                <input type="password" class="form-control input-lg" name="password">
                                            </div>
                                        </div> -->

                                        <div class="form-group">
                                            <div>
                                                <button type="submit" class="btn btn-success" id="saveButtonBuilding">Save</button>
                                                <button type="submit" class="btn btn-success" id="updateButtonBuilding" style="display:none">Update</button>
                                                <input type="reset" class="bg-secondary text-white btn-sm" id="btnClear" />

                                                <button class="btn btn-success" data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="ModelDeleteloc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Delete Building Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete detail of project? (This process is irreversible)
                                </div>
                                <div class="modal-footer">

                                    <button type="button" class="btn btn-primary btn-confirm-del-loc">Yes</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="ModelDeleteDept" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Delete Department Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete detail of project? (This process is irreversible)
                                </div>
                                <div class="modal-footer">

                                    <button type="button" class="btn btn-primary btn-confirm-del-dept">Yes</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="ModelDeleteSec" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Delete Department Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete detail of project? (This process is irreversible)
                                </div>
                                <div class="modal-footer">

                                    <button type="button" class="btn btn-primary btn-confirm-del-sec">Yes</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if ($this->session->flashdata('info')) { ?>
                        <div class="alert alert-danger alert-dismissible show fade" id="msgbox">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>&times;</span>
                                </button>
                                <?php echo $this->session->flashdata('info'); ?>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('danger')) { ?>
                        <div class="alert alert-danger alert-dismissible show fade" id="msgbox">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>&times;</span>
                                </button>
                                <?php echo $this->session->flashdata('danger'); ?>
                            </div>
                        </div>
                    <?php } ?>

                    <div id="ModalFGTTestType" class="modal fade bd-example-modal-lg">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h1 class="modal-title">Add FGT Test Type</h1>
                                </div>
                                <div class="modal-body">

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Test Type:</label>
                                                <input type="text" class="form-control" id="testtypes" name="testtypes" />
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row d-flex justify-content-center">

                                        <div class="col-md-2 col-sm-12 col-xs-12 mt-4">

                                            <button type="button" class="btn btn-success" id="save" onclick="Save_FGT_TestType()">Save</button>

                                        </div>
                                        <!-- <div class="col-md-2 col-sm-12 col-xs-12 mt-4">                
                                            <button type="button" class="btn btn-danger" id="save" onclick="Delete_FGT_TestType()">Delete</button>                                    
                                        </div> -->
                                        <div class="col-md-2 col-sm-12 col-xs-12 mt-4">

                                            <!-- <input type = "reset" class="bg-secondary text-white btn-sm" id="btnClear" /> -->
                                            <button class="btn btn-warning" data-dismiss="modal">Close</button>

                                        </div>

                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>


                    <div id="Modaldepartment" class="modal fade bd-example-modal-lg">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title">Add FGT Head</h1>
                                </div>
                                <div class="modal-body">
                                    <form name="formDepartment" id="myformDepartment" method="POST" action="<?php echo base_url(''); ?>DevelopmentController/AddActivity">
                                        <!-- <input type="hidden" name="_token" value=""> -->

                                        <div class="row" style="display:flex">

                                            <div class="col-md-6">
                                                <div class="form-group mt-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="fresh" name="fresh" accept="image/*">

                                                        <label class="custom-file-label" for="customFile">Upload Fresh Image:</label>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span class="text-danger">Please Upload Fresh Image</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group mt-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="shooter" name="shooter" accept="image/*">

                                                        <label class="custom-file-label" for="customFile">Upload Shooter Image:</label>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span class="text-danger">Please Upload Shooter Image</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group mt-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="hydro" name="hydro" accept="image/*">

                                                        <label class="custom-file-label" for="customFile">Upload Hydrolysis Image:</label>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span class="text-danger">Please Upload Hydrolysis Image</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group mt-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="drum" name="drum" accept="image/*">

                                                        <label class="custom-file-label" for="customFile">Upload Drum Image:</label>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span class="text-danger">Please Upload Drum Image</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">FGT Type:</label>
                                                    <select class="form-control" id="fgttype" name="fgttype">
                                                        <option value="" disabled>Select one of the following</option>
                                                        <option value="SOCCER BALLS">SOCCER BALLS</option>
                                                        <option value="SOCCER INDOOR BALLS">SOCCER INDOOR BALLS</option>
                                                        <option value="SOCCER BALLS SIZE 5">SOCCER BALLS SIZE 5</option>
                                                        <option value="SOCCER BALLS SIZE 4">SOCCER BALLS SIZE 4</option>
                                                        <option value="SOCCER BALLS B2B">SOCCER BALLS B2B</option>
                                                        <option value="SOCCER BALLS BEACH">SOCCER BALLS BEACH</option>
                                                        <option value="SOCCER BALLS LIGHT">SOCCER BALLS LIGHT</option>
                                                        <option value="SOCCER BALLS SIZE 3">SOCCER BALLS SIZE 3</option>
                                                        <option value="SOCCER BALLS SMALL">SOCCER BALLS SMALL</option>
                                                        <option value="SOCIETY+SOCCERBALLS">SOCIETY+SOCCERBALLS</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label>Test Performed By:</label>
                                                    <select class="form-control" id="testperformedby">
                                                        <option value="" selected>Select Test Performed By</option>
                                                        <option value="Imran">Imran</option>
                                                        <option value="Pervaiz">Pervaiz</option>
                                                        <option value="Tanveer">Tanveer</option>
                                                        <option value="Umer">Umer</option>
                                                        <option value="Bilal">Bilal</option>
                                                    </select>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span class="text-danger">Please Select Test Performed By</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="display:flex">
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label for="sel1">CSS # :</label><br>
                                                    <select class="js-example-basic-single" id="cssCode" name="cssCode" onchange="getData()">
                                                        <option value="">Select one of the following</option>
                                                        <?php foreach ($GetCssNo as $Key) { ?>

                                                            <option value="<?php echo $Key['CSSNo']; ?>"><?php echo $Key['CSSNo']; ?></option>
                                                        <?php } ?>
                                                    </select>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span class="text-danger">Please Select Css No</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">Article Code:</label>
                                                    <input disabled type="text" class="form-control" id="article" name="article">
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">Test Type:</label>
                                                    <input disabled type="text" class="form-control" id="tetype" name="tetype" />

                                                </div>
                                            </div>
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">FGT TEST:</label>
                                                    <select disabled class="form-control" id="fgttest" name="fgttest">
                                                        <option value="" disabled>Select one of the following</option>
                                                        <option value="DESTRUCTI
                                                        ON">DESTRUCTION</option>
                                                        <option value="NON-DESTRUCTION">NON-DESTRUCTION</option>
                                                        <option value="Full FGT">Full FGT</option>
                                                        <option value="Shooter">Shooter</option>
                                                        <option value="Hydrolysis">Hydrolysis</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">Department:</label>
                                                    <!-- Type here -->
                                                    <input disabled type="text" class="form-control" id="department" name="department" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="display:flex">


                                        </div>

                                        <div class="row" style="display:flex">
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">Lab #:</label>

                                                    <input type="text" class="form-control input-lg" id='labno' name="labno" placeholder="Lab #:">

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span class="text-danger">Please Select Lab No</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">Testing Date:</label>
                                                    <div>
                                                        <input type="Date" class="form-control input-lg" id='tdate' name="tdate">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="display:flex">
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">Test ACC. TO Cat:</label>
                                                    <div>
                                                        <input type="text" class="form-control input-lg" id='testcat' name="testcat" placeholder="Test ACC. TO Cat">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">FIFA STUMP:</label>

                                                    <input type="text" class="form-control input-lg" id='fifastump' name="fifastump" placeholder="">

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span class="text-danger">Please Select FIFA STUMP</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="display:flex">
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">PRODUCTION MONTH:</label>
                                                    <div>
                                                        <input type="date" class="form-control input-lg" id='pmonth' name="pmonth">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">COVER MAT:</label>
                                                    <div>
                                                        <input disabled type="text" class="form-control input-lg" id='cmat' name="cmat" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="display:flex">
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">BACKING:</label>
                                                    <div>
                                                        <input disabled type="text" class="form-control input-lg" id='backing' name="backing" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">BLADDER:</label>
                                                    <div>
                                                        <input disabled type="text" class="form-control input-lg" id='bladder' name="bladder" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="display:flex">
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">BALL TYPE:</label>


                                                    <input type="text" class="form-control input-lg" id='btype' name="btype" placeholder="">

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span class="text-danger">Please Select Ball Type</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <!-- <label class="control-label">TEST TYPE:</label> -->
                                                    <div class="form-group">
                                                        <label class="control-label">TEST TYPE:</label>
                                                        <select class="form-control" id="ttype" name="ttype">
                                                            <option value="" disabled>Select one of the following</option>

                                                            <?php foreach ($getFGTTestType as $key) { ?>

                                                                <option><?php echo $key['testName'] ?></option>

                                                            <?php } ?>

                                                            <!-- <option value="Shooter">Shooter</option>
                                                            <option value="Hydrolysis">Hydrolysis</option>
                                                            <option value="Drum">Drum</option>
                                                            <option value="Non Destructive">Non Destructive</option>
                                                            <option value="Water Uptake">Water Uptake</option>
                                                            <option value="Full FGT">Full FGT</option> -->
                                                        </select>

                                                    </div>
                                                    <!-- <div>
                                                        <input type="text" class="form-control input-lg" id='ttype' name="ttype" placeholder="">
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="display:flex">
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">MAIN MAT. COLOR:</label>

                                                    <input type="text" class="form-control input-lg" id='mmcolor' name="mmcolor" placeholder="">

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span class="text-danger">Please Select MAIN MAT COLOR</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">PRINTING COLORS:</label>
                                                    <div>
                                                        <input disabled type="text" class="form-control input-lg" id='pcolors' name="pcolors" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="display:flex" hidden>
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">Factory Code:</label>
                                                    <div>
                                                        <input type="text" class="form-control input-lg" id='fn' name="fn" placeholder="">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6" style="margin-top:25px" hidden>
                                                <div class="form-group">
                                                    <label class="control-label">Modal:</label>
                                                    <div>
                                                        <input type="text" class="form-control input-lg" id='m' name="m" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="display:flex">
                                            <!-- <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                        <label class="control-label">Inner</label>
                                                        <div>
                                                            <input type="text" class="form-control input-lg" id='inn' name="inn" placeholder="">
                                                        </div>
                                                    </div>
                                            </div> -->
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">Pannel Shape</label>
                                                    <div>
                                                        <input disabled type="text" class="form-control input-lg" id='pshape' name="pshape" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="display:flex">
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">Remarks</label>

                                                    <input type="text" class="form-control input-lg" id='rem' name="rem" placeholder="">

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span class="text-danger">Please Select Remarks</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">RESULT</label>

                                                    <input type="text" class="form-control input-lg" id='result' name="result" placeholder="">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <span class="text-danger">Please Select Result</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div style="display:none" class="row" style="display:flex">
                                            <div class="col-md-12" style="margin-top:25px">
                                                <div class="form-group">
                                                    <label class="control-label">NOTE:</label>
                                                    <div>
                                                        <input type="text" class="form-control input-lg" id='note' name="note" placeholder="">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row" style="display:flex">
                                            <div class="col-md-12" style="margin-top:25px">
                                                <div class="form-group">

                                                    <div id="data">

                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                    </form>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12 d-flex text-start justify-content-start">
                                        <button type="button" class="btn btn-success" id="save" onclick="Save_FGT_H()">
                                            Save</button>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12 d-flex text-end justify-content-end">
                                        <!-- <input type = "reset" class="bg-secondary text-white btn-sm" id="btnClear" /> -->
                                        <button class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->

                        </div><!-- /.modal-dialog -->
                    </div>

                    <div id="ModalDetail" class="modal fade bd-example-modal-lg">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title">Add FGT Details</h1>
                                </div>

                                <div class="modal-body">
                                    <form name="formDepartment" id="myformDepartment" method="POST" action="<?php echo base_url(
                                                                                                                ''
                                                                                                            ); ?>DevelopmentController/AddActivity">
                                        <!-- <input type="hidden" name="_token" value=""> -->

                                        <div class="row" style="display:flex">
                                            <div class="col-md-12" style="margin-top:25px">
                                                <div class="form-group">
                                                    <?php
                                                    //Print_r($loadFGT_H);
                                                    ?>
                                                    <label class="control-label">Select FGT Head:</label>
                                                    <select class="form-control" id="fgtH" name="fgtH">
                                                        <option value="" disabled>Select one of the following</option>
                                                        <?php foreach ($loadFGT_H_L as $keys) { ?>
                                                            <option value="<?php echo $keys['TID']; ?>"><?php echo $keys['labno']; ?></option>


                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <form>
                                                <fieldset style="padding:15px;">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Weight</span>

                                                            <div class="form-group">
                                                                <div>
                                                                    <label class="control-label">Max</label>
                                                                    <input type="text" class="form-control input-lg" id='w1' name="w1" placeholder="">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Weight</span>

                                                            <div class="form-group">
                                                                <label class="control-label"> Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='w2' name="w2" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Circumference</span>

                                                            <div class="form-group">
                                                                <label class="control-label"> Max</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='c1_sp' name="c1_sp`" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Circumference</span>

                                                            <div class="form-group">
                                                                <label class="control-label"> Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='c2_sp' name="c2_sp" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </fieldset>

                                                <fieldset style="padding:15px;">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Sphecity</span>

                                                            <div class="form-group">
                                                                <label class="control-label">Max</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='sp1_sp' name="sp1_sp" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Sphecity</span>

                                                            <div class="form-group">
                                                                <label class="control-label">Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='sp2_sp' name="sp2_sp" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Loss of pressure</span>

                                                            <div class="form-group">
                                                                <label class="control-label">Max</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='lp1' name="lp1" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Loss of pressure</span>

                                                            <div class="form-group">
                                                                <label class="control-label">Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='lp2' name="lp2" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset style="padding:15px;">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Rebound at RT</span>

                                                            <div class="form-group">
                                                                <label class="control-label">Max</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='rrt1' name="rrt1" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Rebound at RT</span>

                                                            <div class="form-group">
                                                                <label class="control-label">Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='rrt2' name="rrt2" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Rebound at RT 5*C</span>

                                                            <div class="form-group">
                                                                <label class="control-label">Max</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='rrt51' name="rrt51" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Rebound at RT 5*C</span>

                                                            <div class="form-group">
                                                                <label class="control-label">Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='rrt52' name="rrt52" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset style="padding:15px;">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Rebound at RT 0*C</span>

                                                            <div class="form-group">
                                                                <label class="control-label">Max</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='rrt01' name="rrt01" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Rebound at RT 0*C</span>

                                                            <div class="form-group">
                                                                <label class="control-label">Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='rrt02' name="rrt02" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Increase in Circumference</span>

                                                            <div class="form-group">
                                                                <label class="control-label">Max</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='c1_dp' name="c1_dp" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Increase in Circumference</span>

                                                            <div class="form-group">
                                                                <label class="control-label">Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='c2_dp' name="c2_dp" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset style="padding:15px;">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Sphericity ref to 100% </span>

                                                            <div class="form-group">
                                                                <label class="control-label">Max</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='sp_dp1' name="sp_dp1" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Sphericity ref to 100% </span>

                                                            <div class="form-group">
                                                                <label class="control-label">Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='sp_dp2' name="sp_dp2" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Change of pressure</span>

                                                            <div class="form-group">
                                                                <label class="control-label">Max</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='lp_dp1' name="lp_dp1" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Change of pressure</span>

                                                            <div class="form-group">
                                                                <label class="control-label">Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='lp_dp2' name="lp_dp2" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset style="padding:15px;">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Change of pressure</span>
                                                            <div class="form-group">
                                                                <label class="control-label">Max</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='m1' name="m1" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Change of pressure</span>

                                                            <div class="form-group">
                                                                <label class="control-label">Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='m2' name="m2" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Water uptake</span>

                                                            <div class="form-group">
                                                                <label class="control-label">Max</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='wup1' name="wup1" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Water uptake</span>
                                                            <div class="form-group">
                                                                <label class="control-label">Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='wup2' name="wup2" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset style="padding:15px;">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Increase in Circumference</span>
                                                            <div class="form-group">
                                                                <label class="control-label">Max</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='c1_wrt' name="c1_wrt" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Increase in Circumference</span>
                                                            <div class="form-group">
                                                                <label class="control-label">Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='c2_wrt' name="c2_wrt" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Sphericity in ref. to 100%</span>
                                                            <div class="form-group">
                                                                <label class="control-label">Max</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='sp1_wrt' name="sp1_wrt" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Sphericity in ref. to 100%</span>
                                                            <div class="form-group">
                                                                <label class="control-label">Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='sp2_wrt' name="sp2_wrt" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset style="padding:15px;">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Drum Test</span>
                                                            <div class="form-group">
                                                                <label class="control-label">Max</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='dt1' name="dt1" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Drum Test</span>
                                                            <div class="form-group">
                                                                <label class="control-label">Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='dt2' name="dt2" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Abrasion resistance on 2 panels</span>
                                                            <div class="form-group">
                                                                <label class="control-label">Max</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='abr1' name="abr1" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Abrasion resistance on 2 panels</span>
                                                            <div class="form-group">
                                                                <label class="control-label">Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='abr2' name="abr2" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset style="padding:15px;">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">UV Light Fastness</span>
                                                            <div class="form-group">
                                                                <label class="control-label">Max</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='uvlf1' name="uvlf1" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">UV Light Fastness</span>
                                                            <div class="form-group">
                                                                <label class="control-label">Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='uvlf2' name="uvlf2" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Ozon Test on Rubber</span>
                                                            <div class="form-group">
                                                                <label class="control-label">Max</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='otr1' name="otr1" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Ozon Test on Rubber</span>

                                                            <div class="form-group">
                                                                <label class="control-label">Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='otr2' name="otr2" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset style="padding:15px;">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Hydrolysis - Lamination</span>
                                                            <div class="form-group">
                                                                <label class="control-label">Max</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='hl1' name="hl1" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Hydrolysis - Lamination</span>
                                                            <div class="form-group">
                                                                <label class="control-label">Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='hl2' name="hl2" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Hydrolysis - Color Change </span>
                                                            <div class="form-group">
                                                                <label class="control-label">Max</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='hcc1' name="hcc1" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="badge badge-primary">Hydrolysis - Color Change </span>
                                                            <div class="form-group">
                                                                <label class="control-label">Min</label>
                                                                <div>
                                                                    <input type="text" class="form-control input-lg" id='hcc2' name="hcc2" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>

                                        <div class="row" style="display:flex; margin-top:10px;">

                                        </div>

                                    </form>

                                </div>


                                <div class="row">

                                    <div class="col-md-6 col-sm-12 col-xs-12 text-start d-flex justify-content-start">
                                        <button type="button" class="btn btn-success" id="save" onclick="Save_FGT_D()">Save</button>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12 d-flex text-end justify-content-end">
                                        <!-- <input type = "reset" class="bg-secondary text-white btn-sm" id="btnClear" /> -->
                                        <button class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>


                    <div class="modal fade bd-example-modal-xl" id="FGTReportModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                                    <h5 class="modal-title" id="exampleModalLongTitle">FGT Report</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card" id="printFGTSoccer">
                                        <div class="card-body">
                                            <!-- <table class="table">
                                                <tr>
                                                    <th style="font-size: large;font-weight:bold;padding:50px">FGT REPORT FOR AIRLINES MINI <span id="titleBalls">()</span></th>
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
                                                    <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>
                                                </tr>
                                            </table> -->

                                            <table class="table">
                                                <tr>
                                                    <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>


                                                    <center>
                                                        <th style="text-align:Center;"> <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> </th>
                                                    </center>
                                                    <!-- <th style="font-size:x-large;font-weight:bold;padding:50px" id="exampleModalLabel">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>FGT REPORT FOR AIRLINES MINI <span id="titleBalls">()</span></th> -->


                                                    <th> <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" /> </th>
                                                </tr>
                                                <tr>
                                                    <!-- <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th> -->

                                                    <th></th>
                                                    <!-- <th> <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="250px" height="100px" /> </th> -->
                                                    <th style="font-size:x-large;font-weight:bold;padding:50px" id="exampleModalLabel">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>FGT REPORT FOR AIRLINES MINI <span id="titleBalls">()</span></th>
                                                    <th> </th>
                                                </tr>
                                            </table>
                                            <!-- <h4 class="text-center m-4">FGT REPORT FOR AIRLINES MINI <span id="titleBalls">()</span></h4> -->

                                            <div class="container-fluid p-5">
                                                <div class="row p-2">
                                                    <div class="col-sm-4">
                                                        <table class="table table-striped">
                                                            <tbody style="border: 1px solid;">
                                                                <tr>
                                                                    <th style="border: 1px solid;" id="workingNoMini"></th>
                                                                    <td class="text-center" id="articleNoMini"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">FACTORY Code</th>
                                                                    <td class="text-center">Forward Sports</td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;"><br>LAB #</th>
                                                                    <td class="text-center" id="content2"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;"><br>CSS Code :</th>
                                                                    <td class="text-center" id="content222"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;"><br>TESTING DATE</th>
                                                                    <td class="text-center" id="content3"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">TEST ACC. TO CAT</th>
                                                                    <td class="text-center" id="content4"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">PRODUCTION MONTH</th>
                                                                    <td class="text-center" id="content5"></td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="col-4">
                                                        <table class="table table-striped">
                                                            <tbody style="border: 1px solid;">
                                                                <tr>
                                                                    <th colspan="2" style="border: 1px solid; text-align:center">Construction</th>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">MODEL</th>
                                                                    <td class="text-center" id="content6"></td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <th style="border: 1px solid;"><br><br>INNER</th>
                                                                    <td class="text-center" id="content7"></td>
                                                                </tr> -->
                                                                <tr>
                                                                    <th style="border: 1px solid;">PANEL SHAPE</th>
                                                                    <td class="text-center" id="content8"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">REMARK</th>
                                                                    <td class="text-center" id="content9"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">BALL TYPE</th>
                                                                    <td class="text-center" id="content10"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">Temperature</th>
                                                                    <td class="text-center" id="content10Air"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-4">
                                                        <table class="table table-striped">
                                                            <tbody style="border: 1px solid;">
                                                                <tr>
                                                                    <th style="border: 1px solid;">TEST TYPE</th>
                                                                    <td class="text-center" id="content11"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;"><br>MAIN MAT. COLOR</th>
                                                                    <td class="text-center" id="content12"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">PRINTING COLORS</th>
                                                                    <td class="text-center" id="content13"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;">RESULT</th>
                                                                    <td class="text-center" id="content14"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;"><br>TESTED BY</th>
                                                                    <td class="text-center" id="content15"></td>
                                                                </tr>
                                                                <tr>
                                                                    <th style="border: 1px solid;"><br>Humidity</th>
                                                                    <td class="text-center" id="content15Air"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="container-fluid p-2">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <table class="table table-striped">
                                                                <tbody>
                                                                    <tr>
                                                                        <th class="text-center" style="border: 1px solid">TEST</th>
                                                                        <th class="text-center" style="border: 1px solid">METHOD</th>
                                                                        <th class="text-center" style="border: 1px solid">Condition</th>
                                                                        <th class="text-center" colspan="2" style="border: 1px solid;">Requirement</th>
                                                                        <th colspan="4" class="text-center" style="border: 1px solid">Result</th>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="border: 1px solid"></td>
                                                                        <td style="border: 1px solid"></td>
                                                                        <td style="border: 1px solid"></td>
                                                                        <th style="border: 1px solid; border-collapse: collapse">
                                                                            Unit
                                                                        <th style="border: 1px solid">Airless Mini Soccerball</th>
                                                                        </th>
                                                                        <td style="border: 1px solid">1</td>
                                                                        <td style="border: 1px solid">2</td>
                                                                        <td style="border: 1px solid">2</td>
                                                                        <td style="border: 1px solid">3</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <!-- <th style="border: 1px solid ">Static Properties</th> -->
                                                                        <th style="border: 1px solid ">Static Properties</th>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid; border-collapse:collapse"></td>
                                                                        <td class="text-center" style="border: 1px solid ">
                                                                            <b></b>
                                                                        <th class="text-center" style="border: 1px solid "></th>
                                                                        <th class="text-center" style="border: 1px solid "></th>
                                                                        <th class="text-center" colspan="2" style="border: 1px solid "></th>
                                                                        </td>

                                                                        <td style="border: 1px solid "></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Weight</td>
                                                                        <td style="border: 1px solid ">FGT-35</td>
                                                                        <td style="border: 1px solid ">RT/24h</td>
                                                                        <td style="border: 1px solid ">
                                                                            <b>g</b>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td id="content16" style="border: 1px solid "></td>
                                                                        <td id="content17" style="border: 1px solid "></td>
                                                                        <td id="content18" style="border: 1px solid "></td>

                                                                        </td>
                                                                        <td id="content19" class="text-center" style="border: 1px solid;  ">

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Circumference</td>
                                                                        <td style="border: 1px solid ">FGT-36</td>
                                                                        <td style="border: 1px solid ">RT/24h</td>
                                                                        <td style="border: 1px solid ">
                                                                            <b>cm</b>
                                                                        <td id="content20" style="border: 1px solid "></td>
                                                                        <td id="content21" style="border: 1px solid "></td>

                                                                        <td id="content22" class="text-center" style="border: 1px solid; border-collapse:collapse ">

                                                                        </td>
                                                                        </td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Dynamic Properties</td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td colspan="7" style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Rebound at RT</td>
                                                                        <td style="border: 1px solid ">FGT-39</td>
                                                                        <td class="text-center" style="border: 1px solid ">RT/24h</td>
                                                                        <td style="border: 1px solid ">
                                                                            <b>cm</b>
                                                                        <td style="border: 1px solid ">min .85</td>
                                                                        <td id="content23" style="border: 1px solid "></td>

                                                                        <td id="content24" class="text-center" style="border: 1px solid "></td>
                                                                        </td>
                                                                        <td id="content25" style="border: 1px solid "></td>
                                                                        <td id="content26" style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="border: 1px solid ">Water Uptake / Durability</th>
                                                                        <td colspan="8" style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Drum Test</td>
                                                                        <td style="border: 1px solid ">FGT-50</td>
                                                                        <td style="border: 1px solid ">240 mnutes - wet</td>
                                                                        <td class="text-center" colspan="2" style="border: 1px solid ">water uptake max. 15%/ no delamination</td>
                                                                        <td id="content27" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="border: 1px solid ">Light Fastness</th>
                                                                        <td colspan="8" style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">UV Light Fastness</td>
                                                                        <td style="border: 1px solid ">FGT-04</td>
                                                                        <td class="text-center" style="border: 1px solid ">2h/550W</td>
                                                                        <td class="text-center" colspan="2" style="border: 1px solid ">max 3 acc. greyscale</td>
                                                                        <th id="content28" class="text-center" style="border: 1px solid "></th>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <th style="border: 1px solid ">Hydrolysis</th>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td colspan="7" style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Lamination</td>
                                                                        <td style="border: 1px solid ">FGT-01</td>
                                                                        <td style="border: 1px solid ">60*C; 95% r.H.<br>3 days</td>
                                                                        <td class="text-center" colspan="2" style="border: 1px solid ">no delamination</td>
                                                                        <td id="content29" class="text-center" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>


                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Color Change</td>
                                                                        <td style="border: 1px solid ">FGT-01</td>
                                                                        <td style="border: 1px solid ">60*C; 95% r.H.<br>3 days</td>
                                                                        <td class="text-center" colspan="2" style="border: 1px solid ">max 3 acc. greyscale</td>
                                                                        <td id="content30" class="text-center" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div style="margin: 15px auto" class="container-fluid p-2">
                                                    <div class="row">

                                                        <div class="col-12">
                                                            <table class="table table-striped col-12">
                                                                <tbody style="border: 1px solid;">
                                                                    <tr>
                                                                        <!-- id="content31" -->
                                                                        <th style="border: 1px solid">Note:</th>
                                                                        <td>The above reported result is applicable to the sample as received at customer service section
                                                                            Report was Electronically generated, Signature are not required
                                                                            **: These Tests are out of scope of ISO/IEC 17025-2017
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <!-- <div class="col-12">
                                                            <table class="table table-striped col-12">
                                                                <tbody style="border: 1px solid;">
                                                                    <tr>
                                                                        <th rowspan="3" style="border: 1px solid">Note: <span id="contentNoteSoccer"></span></th>

                                                                    </tr>



                                                                </tbody>
                                                            </table>
                                                        </div> -->
                                                        <div class="col-12">
                                                            <table class="table table-striped col-12">
                                                                <tbody style="border: 1px solid;">
                                                                    <tr>
                                                                        <th style="border: 1px solid">Remarks:</th>
                                                                        <td><span id="content31"></span></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table">
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th> <span style="font-size: medium;font-weight:bold"><u>Prepared By</u> </span><br>
                                                            <span>Sohail Rasheed </span>
                                                        </th>
                                                        <th></th>

                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <!-- <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedSoccer"> </span> -->
                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span>Fatima Rasheed </span>

                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>


                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                            <!-- <span id="testApprovedSoccer"> </span> -->
                                                            <span> Zain Abbas </span>
                                                        </th>
                                                    </tr>
                                                </table>

                                                <table class="table">
                                                    <tr>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Fresh Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="FreshPhotoSoccer" height="150px" width="200px" alt="FreshPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Shooter Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="ShooterPhotoSoccer" height="150px" width="200px" alt="ShooterPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Hydrolysis Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="HydroPhotoSoccer" height="150px" width="200px" alt="HydroPhoto" />
                                                        </th>
                                                        <th>
                                                            <h5 style="font-weight:bold;color:black">Drum Image</h5>
                                                            <img src="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon1.png" id="DrumPhotoSoccer" height="150px" width="200px" alt="DrumPhoto" />
                                                        </th>
                                                    </tr>
                                                </table>
                                                <div class="col-12">
                                                    <table class="table table-striped col-12">

                                                        <tr>

                                                            <td style="text-align:Center; font-size:Bold; font-size:25;">
                                                                <h2>End of Report</h2>
                                                            </td>
                                                        </tr>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="printDiv('printFGTSoccer')">Print Report</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br><br>
                    <div class="row">
                        <div class="col-md-12">



                            <div class="col-md-12  table-responsive">

                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            FGT Report</span>
                                        </h2>

                                        <?php
                                        $Uploading = $this->session->userdata('Uploading');
                                        $RS = $this->session->userdata('ReviewStatus');
                                        $AS = $this->session->userdata('ApprovalStatus');
                                        ?>
                                        <!-- <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div> -->
                                        <!-- <?php if ($Uploading == 1) { ?>
                                            <button type="button" class="btn btn-primary" style="float:right;" data-toggle="modal" data-target="#ModalFGTTestType" class="d-grid gap-2 d-md-block" id="createDepartment">+ Add FGT Test Type</button>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type="button" class="btn btn-primary" style="float:right;" data-toggle="modal" data-target="#Modaldepartment" class="d-grid gap-2 d-md-block" id="createDepartment">+ Create FGT Head</button>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type="button" class="btn btn-primary" style="float:right;" data-toggle="modal" data-target="#ModalDetail" class="d-grid gap-2 d-md-block" id="createDepartment">+ Add FGT Detail</button>
                                        <?php } ?> -->

                                    </div>


                                    <div class="panel-container show">

                                        <div class="panel-content">


                                            <h5 class="card-title" style="color:black;font-weight:bolder">Date Filteration</h5>
                                            <div class="row">
                                                <div class="col-md-3"><input class="form-control" type="date" id="startDate" /></div>
                                                <div class="col-md-3"><input class="form-control" type="date" id="endDate" /></div>
                                                <div class="col-md-3"><button class="btn btn-primary" id="searchRange">Search</button></div>
                                            </div>
                                            <br>
                                            <div class="demo-v-spacing" id="defaultTable">
                                                <table id="ActivityData" class="table table-bordered table-hover table-responsive table-striped w-100">
                                                    <thead class="bg-primary-200 text-light">

                                                        <th>FGT Report</th>
                                                        <th>Article</th>
                                                        <th>CSS #</th>
                                                        <th>Working #</th>
                                                        <th>LAB #</th>
                                                        <th>TESTING DATE</th>
                                                        <th>TEST ACC. TO Cat</th>
                                                        <th>FIFA STUMP</th>
                                                        <th>PRODUCTION MONTH</th>
                                                        <th>COVER MAT.</th>
                                                        <th>BACKING</th>
                                                        <th>BLADDER</th>
                                                        <th>BALL TYPE</th>
                                                        <th>TEST TYPE</th>
                                                        <th>MAIN MAT. COLOR</th>
                                                        <th>PRINTING COLORS</th>
                                                        <th>RESULT</th>
                                                        <th>Factory Code</th>
                                                        <th>Model</th>
                                                        <!-- <th>Inner</th> -->
                                                        <th>Panel Shape</th>
                                                        <th>Remark</th>

                                                        <th>Review Status</th>
                                                        <th>Review BY</th>
                                                        <th>Approved Status</th>
                                                        <th>Approved BY</th>
                                                        <th>TESTED BY</th>
                                                        <th>ACTIONS</th>
                                                        <th>Print Report</th>
                                                        <th>UNDO</th>
                                                    </thead>
                                                    <tbody>


                                                        <?php //print_r($loadFGT_H);
                                                        foreach ($loadFGT_H as $keys) {

                                                            $Approvalname =
                                                                $keys['Approvalname'];
                                                            $ReviewName =
                                                                $keys['ReviewName'];
                                                            $ReviewStatus =
                                                                $keys['ReviewStatus'];
                                                            $ApprovedStatus =
                                                                $keys['ApprovedStatus'];
                                                        ?>

                                                            <tr>
                                                                <td id="fgtype<?php echo $keys['TID']; ?>"><?php echo $keys['FGTType']; ?></td>
                                                                <td><?php echo $keys['Article']; ?></td>
                                                                <td><?php echo $keys['cssCode']; ?></td>
                                                                <td><?php echo $keys['WorkNo']; ?></td>
                                                                <td><?php echo $keys['labno']; ?></td>
                                                                <td><?php echo $keys['testdate']; ?></td>
                                                                <td><?php echo $keys['tastcat']; ?></td>
                                                                <td><?php echo $keys['fifiastemp']; ?></td>
                                                                <td><?php echo $keys['productionmonth']; ?>/<?php echo $keys['Year']; ?></td>
                                                                <td><?php echo $keys['covermat']; ?></td>
                                                                <td><?php echo $keys['backing']; ?></td>
                                                                <td><?php echo $keys['bladder']; ?></td>
                                                                <td><?php echo $keys['FactoryCode'] . '-' . $keys['Size']; ?></td>
                                                                <td><?php echo $keys['labno']; ?></td>
                                                                <td><?php echo $keys['mainmatcolor']; ?></td>
                                                                <td><?php echo $keys['printngscolors']; ?></td>
                                                                <td><?php echo $keys['result']; ?></td>
                                                                <td> <?php echo $keys['factory_name']; ?></td>
                                                                <td> <?php echo $keys['modal']; ?></td>
                                                                <!-- <td> <?php echo $keys['Innervalue']; ?></td> -->
                                                                <td> <?php echo $keys['panel_shape']; ?></td>
                                                                <td> <?php echo $keys['remark']; ?></td>
                                                                <td>
                                                                    <?php if ($ReviewStatus == '1') { ?>
                                                                        <div class="custom-control custom-switch">

                                                                            <?php if ($RS == 1) { ?>
                                                                                <input type="checkbox" class="custom-control-input" id="review<?php echo $keys['TID']; ?>" checked="">
                                                                            <?php } else { ?>
                                                                                <input type="checkbox" disabled="disabled" class="custom-control-input" id="review<?php echo $keys['TID']; ?>" checked="">
                                                                            <?php } ?>
                                                                            <label class="custom-control-label" for="review<?php echo $keys['TID']; ?>"></label>
                                                                        </div>
                                                                    <?php } else { ?>
                                                                        <div class="custom-control custom-switch">
                                                                            <?php if (
                                                                                $RS == 1
                                                                            ) { ?>
                                                                                <input type="checkbox" class="custom-control-input" id="review<?php echo $keys['TID']; ?>" checked>
                                                                            <?php } else { ?>
                                                                                <input type="checkbox" disabled="disabled" class="custom-control-input" id="review<?php echo $keys['TID']; ?>" checked>
                                                                            <?php } ?>
                                                                            <label class="custom-control-label" for="review<?php echo $keys['TID']; ?>"></label>
                                                                        </div>
                                                                    <?php } ?>
                                                                </td>
                                                                <td>

                                                                    <?php if ($ReviewStatus == '1') { ?>
                                                                        <span class="badge badge-success p-1">Fatima Rasheed</span>
                                                                        <!-- <span class="badge badge-success p-1"><?php echo $ReviewName; ?></span> -->
                                                                    <?php } else { ?>
                                                                        <span class="badge badge-warning p-1">Fatima Rasheed</span>
                                                                    <?php } ?>
                                                                </td>
                                                                <td>
                                                                    <?php if ($ApprovedStatus == '1') { ?>
                                                                        <div class="custom-control custom-switch">
                                                                            <?php if ($AS == 1) { ?>
                                                                                <input type="checkbox" class="custom-control-input" id="approved<?php echo $keys['TID']; ?>" checked="">
                                                                            <?php } else { ?>
                                                                                <input type="checkbox" disabled="disabled" class="custom-control-input" id="approved<?php echo $keys['TID']; ?>" checked="">
                                                                            <?php } ?>
                                                                            <label class="custom-control-label" for="approved<?php echo $keys['TID']; ?>"></label>
                                                                        </div>
                                                                    <?php } else { ?>
                                                                        <div class="custom-control custom-switch">
                                                                            <?php if (
                                                                                $AS ==
                                                                                1
                                                                            ) { ?>
                                                                                <input type="checkbox" class="custom-control-input" id="approved<?php echo $keys['TID']; ?>" checked>
                                                                            <?php } else { ?>
                                                                                <input type="checkbox" disabled="disabled" class="custom-control-input" id="approved<?php echo $keys['TID']; ?>" checked>
                                                                            <?php } ?>
                                                                            <label class="custom-control-label" for="approved<?php echo $keys['TID']; ?>"></label>
                                                                        </div>
                                                                    <?php } ?>
                                                                </td>
                                                                <td> <?php if ($ApprovedStatus == '1') { ?>
                                                                        <span class="badge badge-success p-1"> Zain Abbas</span>
                                                                        <!-- <span class="badge badge-success p-1"> <?php echo $Approvalname; ?></span> -->
                                                                    <?php } else { ?>
                                                                        <span class="badge badge-warning p-1">Zain Abbas</span>
                                                                    <?php } ?>
                                                                </td>

                                                                <!-- <td> <?php //echo $keys['LoginName']; 
                                                                            ?></td> -->
                                                                <td> <?php echo $keys['Performedby']; ?></td>


                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-md-2">
                                                                            <button type="button" class="btn btn-info btn-xs updatebtn" id="btn.<?php echo $keys['TID']; ?>"><i class="fal fa-edit" aria-hidden="true"></i></button>
                                                                        </div>





                                                                </td>
                                                                <td>
                                                                    <div class="col-md-2">

                                                                        <button type="button" class="btn btn-warning btn-xs printButton" id="btnPrint.<?php echo $keys['TID']; ?>"><i class="fal fa-print" aria-hidden="true"></i></button>

                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <!-- <div class="col-md-2">

                                                                        <button type="button" id="undo.<?php echo $keys['TID']; ?>" value="<?php echo $keys['TID']; ?>" class="btn btn-danger btn-xs undobtn"><i class="fal fa-trash" aria-hidden="true"></i></button>

                                                                    </div> -->
                                                                </td>
                                                            </tr>


                                                        <?php
                                                        } ?>
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




                        </div>
                    </div>
                    <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/js//jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/statistics/peity/peity.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/statistics/flot/flot.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/datagrid/datatables/datatables.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            // $("#article").select2();
            $('#cssCode').select2({
                dropdownParent: $('#Modaldepartment')
            });
            // $('.js-example-basic-single').select2();
        });
    </script>
    <script>
        // window.onload = function() {
        //     // alert("called");
        // //     $("#ArtCode").select2();
        // // };
        // // //alert('heloo');
        // // $('.mySelect2Edit').select({
        // //     dropdownParent: $('#Modaldepartment')
        // // });

        // $("#ArtCode").select2();
        // };
        // //alert('heloo');
        // $('.mySelect2Edit').select({
        //     dropdownParent: $('#Modaldepartment')
        // });


        $('#customData').on('click', '.customundobtn', function() {

            let id = this.id;
            let split_value = id.split(".");
            var TID = split_value[1];
            var proceed = confirm("Are you sure you want to Delete?");
            if (proceed) {
                url = "<?php echo base_url(''); ?>FGT/undo/" + TID
                $.get(url, function(data) {
                    alert("Data Updated Successfully");
                    location.reload();
                });
            } else {
                alert("Undo Cancel");
            }
        });



        $('.undobtn').click(function() {
            let id = this.id;
            let split_value = id.split(".");
            var TID = split_value[1];
            var proceed = confirm("Are you sure you want to Delete?");
            if (proceed) {
                url = "<?php echo base_url(''); ?>FGT/undo/" + TID
                $.get(url, function(data) {
                    alert("Data Updated Successfully");
                    location.reload();
                });
            } else {
                alert("Undo Cancel");
            }


        });

        $(".updatebtn").click(function(e) {
            //alert("heloo");
            let id = this.id;
            //alert(id);
            let split_value = id.split(".");
            //alert(split_value);
            //console.log(split_value);
            var TID = split_value[1];
            //alert(`#issueDate.${split_value[1]}`);
            //alert(split_value[1]);
            //   let RID =split_value[1]);
            ///var reviewStatus = $(`#review${split_value[1]}`).val();
            ///var approved = $(`#review${split_value[1]}`).val();

            let reviewStatus;
            if ($(`#review${split_value[1]}`).is(":checked")) {
                reviewStatus = 1;
            } else {
                reviewStatus = 0;
            }
            let approvedStatus;
            if ($(`#approved${split_value[1]}`).is(":checked")) {
                approvedStatus = 1;
            } else {
                approvedStatus = 0;
            }
            //alert(Status);
            //$('#check_id').val();
            //alert(reviewStatus);
            //alert(approvedStatus);
            //alert(TID);

            url = "<?php echo base_url(
                        ''
                    ); ?>FGT/updated/" + reviewStatus + "/" + approvedStatus + "/" + TID

            //alert(url);
            $.get(url, function(data) {
                alert("Data Updated Successfully");
                location.reload();
            });


        });

        function CallData() {
            let ArtCode = $("#article").val();

            url1 = "<?php echo base_url(''); ?>DevelopmentController/getSize/" + ArtCode
            //alert(url1);
            $.get(url1, function(res) {

                data1 = res.data

                options = "<option value=''>Select Size </option>"
                for (i = 0; i < data1.length; i++) {
                    options += '<option value="' + data1[i].ArtSize + '">' + data1[i].ArtSize + '</option>'
                }
                $("#size").html(options)
            });
        }

        function processData(article, Size1, Size2) {
            url = "<?php echo base_url(
                        ''
                    ); ?>DevelopmentController/POData/" + article + '/' + Size1 + '/' + Size2
            //alert(url);
            $.get(url, function(data) {

                $("#Data").html(data)
            });

        }

        /* defined datas */
        $(document).ready(function() {
            // LoadData(stDate, enDate);

            $('#ActivityData').dataTable({
                responsive: false,
                lengthChange: false,
                dom:
                    /*     --- Layout Structure 
                              --- Options
                              l               -              length changing input control
                              f              -              filtering input
                             t              -              The table!
                              i               -              Table information summary
                              p             -              pagination control
                              r              -              processing display element
                              B             -              buttons
                              R             -              ColReorder
                              S              -              Select

                              --- Markup
                              < and >                                                 - div element
                              <"class" and >                    - div with a class
                              <"#id" and >                       - div with an ID
                             <"#id.class" and >             - div with an ID and a class

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

        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
            window.location.reload();
        }
    </script>
    <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->
    <!-- BEGIN Page Footer -->
    <footer class="page-footer" role="contentinfo">
        <div class="d-flex align-items-center flex-1 text-muted">
            <span class="hidden-md-down fw-700">2021 © Forward Sports by&nbsp;IT Dept Forward Sports</span>
        </div>
        <div>

        </div>
    </footer>
    <script src="<?php echo base_url(); ?>assets/js/statistics/peity/peity.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/statistics/flot/flot.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/datagrid/datatables/datatables.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js" integrity="sha512-d5Jr3NflEZmFDdFHZtxeJtBzk0eB+kkRXWFQqEc1EKmolXjHm2IKCA7kTvXBNjIYzjXfD5XzIjaaErpkZHCkBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo base_url(); ?>assets/js/statistics/peity/peity.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/statistics/flot/flot.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/datagrid/datatables/datatables.bundle.js"></script>
    <script>
        $(window).on('load', function() {
            //alert("I am here");
            let date = new Date().toJSON().substr(0, 10);
            $("#startDate").val(date);
            $("#endDate").val(date);
        })


        var sDate;
        var eDate;



        $("#searchRange").click(function(e) {

            e.preventDefault();
            // alert("I am here");
            sDate = $("#startDate").val();
            eDate = $("#endDate").val();
            $("#customData").html("");
            $("#defaultTable").css("display", "none");

            url = '<?php echo base_url('FGT/getTableData'); ?>'

            $.post(url, {
                    'startDate': sDate,
                    'endDate': eDate
                },
                function(data, status) {

                    let reviewStatus = '<?php echo $RS; ?>';
                    let approvalStatus = '<?php echo $AS; ?>';


                    html = `    <table id="table1" class="table table-bordered table-hover table-responsive table-striped w-100">
                                                <thead class="bg-primary-200">
                                                   
                                                <th>FGT Report</th>
                                                       <th>Article</th>
                                                       <th>CSS #</th>
                                                       <th>Working #</th>
                                                    <th>LAB #</th>
                                                    <th>TESTING DATE</th>
                                                    <th>TEST ACC. TO Cat</th>   
                                                    <th>FIFA STUMP</th>
                                                    <th>PRODUCTION MONTH</th>
                                                    <th>COVER MAT.</th>
                                                    <th>BACKING</th>
                                                    <th>BLADDER</th>
                                                    <th>BALL TYPE</th>
                                                    <th>TEST TYPE</th>
                                                    <th>MAIN MAT. COLOR</th>
                                                    <th>PRINTING COLORS</th>
                                                    <th>RESULT</th>
                                                    <th>Factory Code</th>
                                                    <th>Model</th>
                                                    <!-- <th>Inner</th> -->
                                                    <th>Panel Shape</th>
                                                    <th>Remark</th>
                                                 
                                                     <th>Review Status</th>
                                                      <th>Review BY</th>
                                                       <th>Approved Status</th>
                                                        <th>Approved BY</th>
                                                           <th>TESTED BY</th>
                                                    <th>ACTIONS</th>
                                                     <th>Print Report</th>
                                                        
                                                            
                                                                  
                                                  
                                                </thead>
                                                <tbody>`;
                    data.forEach(element => {

                        html += `
        <tr>
<td id="fgtype${element.TID}"> ${element.FGTType}</td>
<td> ${element.Article}</td>
<td> ${element.cssCode}</td>
<td>${element.WorkNo}</td>
                        <td>${element.labno}</td>
                        <td>${element.testdate}</td>
                        <td>${element.tastcat}</td>   
                        <td>${element.fifiastemp}</td>
                        <td>${element.productionmonth}</td>
                        <td>${element.covermat}</td>
                        <td>${element.backing}</td>
                        <td>${element.bladder}</td>
                        <td>${element.FactoryCode}  - ${element.Size}</td>
                        <td>${element.testtype}</td>
                        <td>${element.mainmatcolor}</td>
                        <td>${element.printngscolors}</td>
                        <td>${element.result}</td>
                        <td>${element.FactoryCode}</td>
                        <td>${element.modal}</td>

                        <td>${element.panel_shape}</td>
                        <td>${element.remark}</td>
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
              <input type="checkbox" class="custom-control-input" id="customreview${element.TID}" checked>
              <label class="custom-control-label" for="customreview${element.TID}" disabled></label>
          </div>`
          :
          `<div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customreview${element.TID}" checked disabled>
              <label class="custom-control-label" for="customreview${element.TID}" disabled></label>
          </div>`
      }
`   }
  </td>
    <td>

    ${element.ReviewStatus == '1'?
            `<span class="badge badge-primary p-1">Fatima Rasheed</span>`:
            `<span class="badge badge-warning p-1">Fatima Rasheed</span>`
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
                <input type="checkbox" class="custom-control-input" id="customapproved${element.TID}" checked>
                <label class="custom-control-label" for="customapproved${element.TID}"></label>
            </div>`
            :
            `<div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customapproved${element.TID}" checked disabled>
                <label class="custom-control-label" for="customapproved${element.TID}"></label>
            </div>`
       }
      `  }
    </td>
    <td>
            ${element.ApprovedStatus == '1'?
          `<span class="badge badge-primary p-1">Zain Abbas</span>`:
          
            `<span class="badge badge-warning p-1">Zain Abbas</span>`
            }
    </td>
    
       
                                              <td>${element.Performedby}</td>
                                                <td>
            <div class="row">
     <div class="col-md-2">
                <button type="button" class="btn btn-info btn-xs updbtn" id="btn.${element.TID}"><i class="fal fa-edit" aria-hidden="true"></i></button>
                </div>
           
           </td> 
            <td> <div class="col-md-2">
               
              <button type="button" class="btn btn-warning btn-xs customPrintButton" id="btnPrint.${element.TID}" ><i class="fal fa-print" aria-hidden="true"></i></button>
      
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
                            /*            --- Layout Structure 
                             --- Options
                            l               -              length changing input control
                            f              -              filtering input
                            t              -              The table!
                            i               -              Table information summary
                            p             -              pagination control
                            r              -              processing display element
                            B             -              buttons
                            R             -              ColReorder
                            S              -              Select

                             --- Markup
                            < and >                                                 - div element
                            <"class" and >                    - div with a class
                            <"#id" and >                       - div with an ID
                            <"#id.class" and >             - div with an ID and a class

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
    <script src="<?php echo base_url(); ?>assets/js/vendors.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/app.bundle.js"></script>
    <script type="text/javascript">
        /* Activate smart panels */
        $('#js-page-content').smartPanel();
    </script>
    <!-- The order of scripts is irrelevant. Please check out the plugin pages for more details about these plugins below: -->
    <script src="<?php echo base_url(); ?>assets/js/statistics/peity/peity.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/statistics/flot/flot.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/datagrid/datatables/datatables.bundle.js"></script>
    <script>
        $('#schedule').dataTable({
            responsive: true,
            lengthChange: false,
            dom:
                /*          --- Layout Structure 
                              --- Options
                              l               -              length changing input control
                              f              -              filtering input
                              t              -              The table!
                              i               -              Table information summary
                              p             -              pagination control
                              r              -              processing display element
                              B             -              buttons
                              R             -              ColReorder
                              S              -              Select

                              --- Markup
                              < and >                                                 - div element
                              <"class" and >                    - div with a class
                              <"#id" and >                       - div with an ID
                              <"#id.class" and >             - div with an ID and a class

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
        $("#customData").on('click', '.customPrintButton', function(e) {
            // e.preventDefault();
            let id = this.id;

            let split_value = id.split(".");

            var TID = split_value[1];

            let type = $("#fgtype" + TID).text();


            url = "<?php echo base_url(''); ?>FGT/FGT_PRINT"
            $.post(url, {
                TID
            }, function(data) {

                if (type == " SOCCER BALLS" || type == " SOCCERBALLS") {

                    // alert(type == " SOCCER BALLS" || type == " SOCCERBALLS");

                    $("#titleBalls").text(data['head'][0].FGTType);
                    $("#workingNoMini").text(data['head'][0].WorkNo ? data['head'][0].WorkNo : 'WORKING #: Nil');
                    $("#articleNoMini").text(data['head'][0].ArtCode != '' ? data['head'][0].ArtCode : 'Article Code: Nil');
                    $("#content2").text(data['head'][0].labno);
                    $("#content222").text(data['head'][0].cssCode);
                    $("#content3").text(data['head'][0].testdate);
                    $("#content4").text(data['head'][0].tastcat);
                    $("#content5").text(data['head'][0].productionmonth);
                    $("#content6").text(data['head'][0].modal);
                    //   $("#content7").text(data['head'][0].Innervalue);
                    $("#content8").text(data['head'][0].panel_shape);
                    $("#content9").text(data['head'][0].remark);
                    $("#content10").text(data['head'][0].balltype);
                    $("#content11").text(data['head'][0].testtype);
                    $("#content12").text(data['head'][0].mainmatcolor);
                    $("#content13").text(data['head'][0].printngscolors);
                    $("#content14").text(data['head'][0].result);
                    $("#content15").text(data['head'][0].Performedby);
                    $("#content377").text(data['head'][0].remark);

                    $("#content10Air").text(data['head'][0].Temperature);
                    $("#content15Air").text(data['head'][0].Humidity);


                    // if(data['head'][0].result.toLowerCase().trim() == "urgent" || data['head'][0].remark.toLowerCase().trim() == "urgent" ){
                    //     console.log("equal Urgent")
                    //     $("#contentNoteSoccer").text('As per the request of customer, testing is proceeded without condition.')


                    // }
                    // else{
                    //     console.log("Not equal Urgent", data['head'][0].result.toLowerCase().trim())
                    $("#contentNoteSoccer").text('The above reported result is applicable to the sample as received at customer service section<br>Report was Electronically generated, Signature are not required<br>**: These Tests are out of scope of ISO/IEC 17025:2017');

                    // }



                    if (data['head'][0].pictureFresh != null && data['head'][0].pictureFresh != "") {
                        $("#FreshPhotoSoccer").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureFresh);
                    } else {
                        $("#FreshPhotoSoccer").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureShooter != null && data['head'][0].pictureShooter != "") {
                        $("#ShooterPhotoSoccer").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureShooter);
                    } else {
                        $("#ShooterPhotoSoccer").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureHydro != null && data['head'][0].pictureHydro != "") {
                        $("#HydroPhotoSoccer").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureHydro);
                    } else {
                        $("#HydroPhotoSoccer").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureDrum != null && data['head'][0].pictureDrum != "") {
                        $("#DrumPhotoSoccer").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureDrum);
                    } else {
                        $("#DrumPhotoSoccer").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }

                    $("#testReviewedSoccer").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    $("#testApprovedSoccer").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content16").text(data['detail'][0].weight1);
                        $("#content17").text(data['detail'][0].weight2);
                        $("#content21").text(data['detail'][0].cir1);
                        $("#content22").text(data['detail'][0].cir2);
                        $("#content23").text(data['detail'][0].rebound_rt1);
                        $("#content24").text(data['detail'][0].rebound_rt2);
                        $("#content27").text(data['detail'][0].drum_test_pd1);
                        $("#content28").text(data['detail'][0].uv_light_fast_cst1);
                        $("#content29").text(data['detail'][0].hydrolysis_lam1);
                        $("#content30").text(data['detail'][0].hydrolysis_color1);
                        $("#content31").text(data['head'][0].remark);
                    }




                    $('#FGTReportModal').modal('toggle');
                } else if (type == " SOCCER BALLS SIZE 5") {

                    // alert(type == " SOCCER BALLS SIZE 5");

                    $("#content66").text(data['head'][0].labno);
                    $("#content666").text(data['head'][0].cssCode);


                    $("#workingNoSize5").text(data['head'][0].WorkNo ? data['head'][0].WorkNo : 'WORKING #: Nil');
                    $("#articleNoSize5").text(data['head'][0].ArtCode ? data['head'][0].ArtCode : 'Article Code: Nil');
                    $("#content67").text(data['head'][0].testdate);
                    $("#content68").text(data['head'][0].tastcat);
                    $("#content69").text(data['head'][0].fifiastemp);
                    $("#content70").text(data['head'][0].productionmonth);
                    $("#content71").text(data['head'][0].covermat);
                    $("#content72").text(data['head'][0].backing);
                    $("#content73").text(data['head'][0].bladder);
                    $("#content74").text(data['head'][0].balltype);
                    $("#content75").text(data['head'][0].testtype);
                    $("#content76").text(data['head'][0].mainmatcolor);
                    $("#content77").text(data['head'][0].printngscolors);
                    $("#content78").text(data['head'][0].result);
                    $("#content120").text(data['head'][0].remark);
                    $("#content79").text(data['head'][0].Performedby);

                    $("#content74C").text(data['head'][0].Temperature);
                    $("#content79C").text(data['head'][0].Humidity);



                    if (data['head'][0].pictureFresh != null && data['head'][0].pictureFresh != "") {
                        $("#FreshPhotoSize5").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureFresh);
                    } else {
                        $("#FreshPhotoSize5").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureShooter != null && data['head'][0].pictureShooter != "") {
                        $("#ShooterPhotoSize5").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureShooter);
                    } else {
                        $("#ShooterPhotoSize5").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureHydro != null && data['head'][0].pictureHydro != "") {
                        $("#HydroPhotoSize5").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureHydro);
                    } else {
                        $("#HydroPhotoSize5").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureDrum != null && data['head'][0].pictureDrum != "") {
                        $("#DrumPhotoSize5").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureDrum);
                    } else {
                        $("#DrumPhotoSize5").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }



                    if (data['head'][0].result.toLowerCase().trim() == "urgent" || data['head'][0].remark.toLowerCase().trim() == "urgent") {

                        // $("#contentNoteSize5").text('As per the request of customer, testing is proceeded without condition.')
                        $("#contentNoteSize5").text('The above reported result is applicable to the sample as received at customer service section<br>Report was Electronically generated, Signature are not required<br>**: These Tests are out of scope of ISO/IEC 17025:2017')

                    } else {
                        $("#contentNoteSize5").text('The above reported result is applicable to the sample as received at customer service section<br>Report was Electronically generated, Signature are not required<br>**: These Tests are out of scope of ISO/IEC 17025:2017');

                    }




                    $("#testReviewedSize5").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    $("#testApprovedSize5").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content80").text(data['detail'][0].weight1);
                        $("#content81").text(data['detail'][0].weight2);
                        $("#content82").text(data['detail'][0].cir1);
                        $("#content83").text(data['detail'][0].cir2);
                        $("#content84").text(data['detail'][0].sphericity_sp1);
                        $("#content85").text(data['detail'][0].sphericity_sp2);
                        $("#content86").text(data['detail'][0].loss_of_pressure1);
                        $("#content87").text(data['detail'][0].loss_of_pressure2);
                        $("#content88").text(data['detail'][0].rebound_rt1);
                        $("#content89").text(data['detail'][0].rebound_rt2);
                        $("#content90").text(data['detail'][0].rebound_5_1);
                        $("#content91").text(data['detail'][0].rebound_5_2);
                        $("#content92").text(data['detail'][0].rebound_0_1);
                        $("#content93").text(data['detail'][0].rebound_0_2);
                        $("#content94").text(data['detail'][0].cir_st_1);
                        $("#content95").text(data['detail'][0].cir_st_2);
                        $("#content96").text(data['detail'][0].sphericity_st1);
                        $("#content97").text(data['detail'][0].sphericity_st2);
                        $("#content98").text(data['detail'][0].ch_of_pressure_st1);
                        $("#content99").text(data['detail'][0].ch_of_pressure_st2);
                        $("#content100").text(data['detail'][0].material_st1);
                        $("#content101").text(data['detail'][0].material_st2);
                        $("#content102").text(data['detail'][0].water_uptake_wrt1);
                        $("#content103").text(data['detail'][0].water_uptake_wrt2);
                        $("#content104").text(data['detail'][0].cir1_wrt);
                        $("#content105").text(data['detail'][0].cir2_wrt);
                        $("#content106").text(data['detail'][0].sphericity_wrt1);
                        $("#content107").text(data['detail'][0].sphericity_wrt2);
                        $("#content108").text(data['detail'][0].drum_test_pd1);
                        $("#content109").text(data['detail'][0].drum_test_pd2);
                        $("#content110").text(data['detail'][0].abraison_resistance_pd1);
                        $("#content111").text(data['detail'][0].abraison_resistance_pd2);
                        $("#content112").text(data['detail'][0].uv_light_fast_cst1);
                        $("#content113").text(data['detail'][0].uv_light_fast_cst2);
                        $("#content114").text(data['detail'][0].ozon_test_cst1);
                        $("#content115").text(data['detail'][0].ozon_test_cst2);
                        $("#content116").text(data['detail'][0].hydrolysis_lam1);
                        $("#content117").text(data['detail'][0].hydrolysis_lam2);
                        $("#content118").text(data['detail'][0].hydrolysis_color1);
                        $("#content119").text(data['detail'][0].hydrolysis_color2);
                    }

                    $('#soccerBallsSize5').modal('toggle');

                } else if (type == " SOCCER BALLS SIZE 4") {

                    $("#content122").text(data['head'][0].FactoryCode);
                    $("#content123").text(data['head'][0].labno);
                    $("#content124").text(data['head'][0].testdate);
                    $("#content125").text(data['head'][0].tastcat);
                    $("#content126").text(data['head'][0].fifiastemp);
                    $("#content127").text(data['head'][0].productionmonth);
                    $("#content128").text(data['head'][0].covermat);
                    $("#content129").text(data['head'][0].backing);
                    $("#content130").text(data['head'][0].bladder);
                    $("#content131").text(data['head'][0].balltype);
                    $("#content132").text(data['head'][0].testtype);
                    $("#content133").text(data['head'][0].mainmatcolor);
                    $("#content134").text(data['head'][0].printngscolors);
                    $("#content135").text(data['head'][0].result);
                    $("#content136").text(data['head'][0].Performedby);
                    $("#content175R").text(data['head'][0].remark);



                    if (data['head'][0].pictureFresh != null && data['head'][0].pictureFresh != "") {
                        $("#FreshPhotoSize4").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureFresh);
                    } else {
                        $("#FreshPhotoSize4").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureShooter != null && data['head'][0].pictureShooter != "") {
                        $("#ShooterPhotoSize4").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureShooter);
                    } else {
                        $("#ShooterPhotoSize4").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureHydro != null && data['head'][0].pictureHydro != "") {
                        $("#HydroPhotoSize4").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureHydro);
                    } else {
                        $("#HydroPhotoSize4").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureDrum != null && data['head'][0].pictureDrum != "") {
                        $("#DrumPhotoSize4").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureDrum);
                    } else {
                        $("#DrumPhotoSize4").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }



                    // if(data['head'][0].result.toLowerCase().trim() == "urgent" || data['head'][0].remark.toLowerCase().trim() == "urgent" ){

                    //     // $("#contentNoteSize5").text('As per the request of customer, testing is proceeded without condition.')
                    //     $("#contentNoteSize5").text('The above reported result is applicable to the sample as received at customer service section<br>Report was Electronically generated, Signature are not required<br>**: These Tests are out of scope of ISO/IEC 17025:2017')

                    // }
                    // else{
                    //    $("#contentNoteSize5").text('The above reported result is applicable to the sample as received at customer service section<br>Report was Electronically generated, Signature are not required<br>**: These Tests are out of scope of ISO/IEC 17025:2017');     

                    // }




                    // $("#testReviewedSize5").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    // $("#testApprovedSize5").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content137").text(data['detail'][0].weight1);
                        $("#content138").text(data['detail'][0].weight2);
                        $("#content139").text(data['detail'][0].cir1);
                        $("#content140").text(data['detail'][0].cir2);
                        $("#content141").text(data['detail'][0].sphericity_sp1);
                        $("#content142").text(data['detail'][0].sphericity_sp2);
                        $("#content143").text(data['detail'][0].loss_of_pressure1);
                        $("#content144").text(data['detail'][0].loss_of_pressure2);
                        $("#content145").text(data['detail'][0].rebound_rt1);
                        $("#content146").text(data['detail'][0].rebound_rt2);
                        $("#content147").text(data['detail'][0].rebound_5_1);
                        $("#content148").text(data['detail'][0].rebound_5_2);
                        $("#content149").text(data['detail'][0].rebound_0_1);
                        $("#content150").text(data['detail'][0].rebound_0_2);
                        $("#content151").text(data['detail'][0].cir_st_1);
                        $("#content152").text(data['detail'][0].cir_st_2);
                        $("#content153").text(data['detail'][0].sphericity_st1);
                        $("#content154").text(data['detail'][0].sphericity_st2);
                        $("#content155").text(data['detail'][0].ch_of_pressure_st1);
                        $("#content155").text(data['detail'][0].ch_of_pressure_st2);
                        $("#content156").text(data['detail'][0].material_st1);
                        $("#content157").text(data['detail'][0].material_st2);
                        $("#content158").text(data['detail'][0].water_uptake_wrt1);
                        $("#content159").text(data['detail'][0].water_uptake_wrt2);
                        $("#content160").text(data['detail'][0].cir1_wrt);
                        $("#content161").text(data['detail'][0].cir2_wrt);
                        $("#content162").text(data['detail'][0].sphericity_wrt1);
                        $("#content163").text(data['detail'][0].sphericity_wrt2);
                        $("#content164").text(data['detail'][0].drum_test_pd1);
                        $("#content165").text(data['detail'][0].drum_test_pd2);
                        $("#content166").text(data['detail'][0].abraison_resistance_pd1);
                        $("#content167").text(data['detail'][0].abraison_resistance_pd2);
                        $("#content168").text(data['detail'][0].uv_light_fast_cst1);
                        $("#content169").text(data['detail'][0].uv_light_fast_cst2);
                        $("#content170").text(data['detail'][0].ozon_test_cst1);
                        $("#content171").text(data['detail'][0].ozon_test_cst2);
                        $("#content172").text(data['detail'][0].hydrolysis_lam1);
                        $("#content173").text(data['detail'][0].hydrolysis_lam2);
                        $("#content174").text(data['detail'][0].hydrolysis_color1);
                        $("#content175").text(data['detail'][0].hydrolysis_color2);
                    }




                    $('#soccerBallsSize4').modal('toggle');

                } else if (type == " SOCCER BALLS B2B") {


                    $("#content176").text(data['head'][0].FactoryCode);
                    $("#content177").text(data['head'][0].labno);
                    $("#content178").text(data['head'][0].testdate);
                    $("#content179").text(data['head'][0].tastcat);
                    $("#content180").text(data['head'][0].fifiastemp);
                    $("#content181").text(data['head'][0].productionmonth);
                    $("#content182").text(data['head'][0].covermat);
                    $("#content183").text(data['head'][0].backing);
                    $("#content184").text(data['head'][0].bladder);
                    $("#content185").text(data['head'][0].balltype);
                    $("#content186").text(data['head'][0].testtype);
                    $("#content187").text(data['head'][0].mainmatcolor);
                    $("#content188").text(data['head'][0].printngscolors);
                    $("#content189").text(data['head'][0].result);
                    $("#content190").text(data['head'][0].Performedby);
                    $("#content190B").text(data['head'][0].Temperature);
                    $("#content191B").text(data['head'][0].Humidity);




                    $("#testReviewedSize5").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    $("#testApprovedSize5").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content191").text(data['detail'][0].weight1);
                        $("#content192").text(data['detail'][0].weight2);
                        $("#content193").text(data['detail'][0].cir1);
                        $("#content194").text(data['detail'][0].cir2);
                        $("#content195").text(data['detail'][0].sphericity_sp1);
                        $("#content196").text(data['detail'][0].sphericity_sp2);
                        $("#content197").text(data['detail'][0].loss_of_pressure1);
                        $("#content198").text(data['detail'][0].loss_of_pressure2);
                        $("#content199").text(data['detail'][0].rebound_rt1);
                        $("#content200").text(data['detail'][0].rebound_rt2);
                        $("#content201").text(data['detail'][0].rebound_5_1);
                        $("#content202").text(data['detail'][0].rebound_5_2);
                        $("#content203").text(data['detail'][0].rebound_0_1);
                        $("#content204").text(data['detail'][0].rebound_0_2);
                        $("#content205").text(data['detail'][0].cir_st_1);
                        $("#content206").text(data['detail'][0].cir_st_2);
                        $("#content207").text(data['detail'][0].sphericity_st1);
                        $("#content208").text(data['detail'][0].sphericity_st2);
                        $("#content209").text(data['detail'][0].ch_of_pressure_st1);
                        $("#content210").text(data['detail'][0].ch_of_pressure_st2);
                        $("#content211").text(data['detail'][0].material_st1);
                        $("#content212").text(data['detail'][0].material_st2);
                        $("#content213").text(data['detail'][0].water_uptake_wrt1);
                        $("#content214").text(data['detail'][0].water_uptake_wrt2);
                        $("#content215").text(data['detail'][0].cir1_wrt);
                        $("#content216").text(data['detail'][0].cir2_wrt);
                        $("#content217").text(data['detail'][0].sphericity_wrt1);
                        $("#content218").text(data['detail'][0].sphericity_wrt2);
                        $("#content219").text(data['detail'][0].drum_test_pd1);
                        $("#content220").text(data['detail'][0].drum_test_pd2);
                        $("#content221").text(data['detail'][0].abraison_resistance_pd1);
                        $("#content222").text(data['detail'][0].abraison_resistance_pd2);
                        $("#content223").text(data['detail'][0].uv_light_fast_cst1);
                        $("#content224").text(data['detail'][0].uv_light_fast_cst2);
                        $("#content225").text(data['detail'][0].ozon_test_cst1);
                        $("#content226").text(data['detail'][0].ozon_test_cst2);
                        $("#content227").text(data['detail'][0].hydrolysis_lam1);
                        $("#content228").text(data['detail'][0].hydrolysis_lam2);
                        $("#content229").text(data['detail'][0].hydrolysis_color1);
                        $("#content230").text(data['detail'][0].hydrolysis_color2);
                    }



                    $('#soccerBallsSizeB2B').modal('toggle');

                } else if (type == " SOCCER BALLS BEACH") {



                    $("#content231").text(data['head'][0].FactoryCode);
                    $("#content232").text(data['head'][0].labno);
                    $("#content233").text(data['head'][0].testdate);
                    $("#content234").text(data['head'][0].tastcat);
                    $("#content235").text(data['head'][0].fifiastemp);
                    $("#content236").text(data['head'][0].productionmonth);
                    $("#content237").text(data['head'][0].covermat);
                    $("#content238").text(data['head'][0].backing);
                    $("#content239").text(data['head'][0].bladder);
                    $("#content240").text(data['head'][0].balltype);
                    $("#content241").text(data['head'][0].testtype);
                    $("#content242").text(data['head'][0].mainmatcolor);
                    $("#content243").text(data['head'][0].printngscolors);
                    $("#content244").text(data['head'][0].result);
                    $("#content245").text(data['head'][0].Performedby);
                    $("#content275R").text(data['head'][0].remark);


                    if (data['head'][0].pictureFresh != null && data['head'][0].pictureFresh != "") {
                        $("#FreshPhotoSoccerBallBeach").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureFresh);
                    } else {
                        $("#FreshPhotoSoccerBallBeach").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureShooter != null && data['head'][0].pictureShooter != "") {
                        $("#ShooterPhotoSoccerBallBeach").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureShooter);
                    } else {
                        $("#ShooterPhotoSoccerBallBeach").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureHydro != null && data['head'][0].pictureHydro != "") {
                        $("#HydroPhotoSoccerBallBeach").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureHydro);
                    } else {
                        $("#HydroPhotoSoccerBallBeach").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureDrum != null && data['head'][0].pictureDrum != "") {
                        $("#DrumPhotoSoccerBallBeach").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureDrum);
                    } else {
                        $("#DrumPhotoSoccerBallBeach").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }




                    $("#testReviewedSize5").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    $("#testApprovedSize5").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content246").text(data['detail'][0].weight1);
                        $("#content247").text(data['detail'][0].weight2);
                        $("#content248").text(data['detail'][0].cir1);
                        $("#content249").text(data['detail'][0].cir2);
                        $("#content250").text(data['detail'][0].sphericity_sp1);
                        $("#content251").text(data['detail'][0].sphericity_sp2);
                        $("#content252").text(data['detail'][0].loss_of_pressure1);
                        $("#content253").text(data['detail'][0].loss_of_pressure2);
                        $("#content254").text(data['detail'][0].rebound_rt1);
                        $("#content255").text(data['detail'][0].rebound_rt2);
                        $("#content256").text(data['detail'][0].rebound_5_1);
                        $("#content257").text(data['detail'][0].rebound_5_2);
                        $("#content258").text(data['detail'][0].rebound_0_1);
                        $("#content259").text(data['detail'][0].rebound_0_2);
                        $("#content260").text(data['detail'][0].cir_st_1);
                        $("#content261").text(data['detail'][0].cir_st_2);
                        $("#content262").text(data['detail'][0].sphericity_st1);
                        $("#content263").text(data['detail'][0].sphericity_st2);
                        $("#content264").text(data['detail'][0].ch_of_pressure_st1);
                        $("#content265").text(data['detail'][0].ch_of_pressure_st2);
                        $("#content266").text(data['detail'][0].material_st1);
                        $("#content267").text(data['detail'][0].material_st2);
                        $("#content268").text(data['detail'][0].water_uptake_wrt1);
                        $("#content269").text(data['detail'][0].water_uptake_wrt2);
                        $("#content270").text(data['detail'][0].cir1_wrt);
                        $("#content271").text(data['detail'][0].cir2_wrt);
                        $("#content272").text(data['detail'][0].sphericity_wrt1);
                        $("#content273").text(data['detail'][0].sphericity_wrt2);
                        $("#content274").text(data['detail'][0].drum_test_pd1);
                        $("#content275").text(data['detail'][0].drum_test_pd2);
                        $("#content276").text(data['detail'][0].abraison_resistance_pd1);
                        $("#content277").text(data['detail'][0].abraison_resistance_pd2);
                        $("#content278").text(data['detail'][0].uv_light_fast_cst1);
                        $("#content279").text(data['detail'][0].uv_light_fast_cst2);
                        $("#content280").text(data['detail'][0].ozon_test_cst1);
                        $("#content281").text(data['detail'][0].ozon_test_cst2);
                        $("#content282").text(data['detail'][0].hydrolysis_lam1);
                        $("#content283").text(data['detail'][0].hydrolysis_lam2);
                        $("#content284").text(data['detail'][0].hydrolysis_color1);
                        $("#content285").text(data['detail'][0].hydrolysis_color2);
                    }


                    $('#soccerBallsSizeBeach').modal('toggle');

                } else if (type == " SOCCER BALLS LIGHT") {


                    $("#content286").text(data['head'][0].FactoryCode);
                    $("#content287").text(data['head'][0].labno);
                    $("#content288").text(data['head'][0].testdate);
                    $("#content289").text(data['head'][0].tastcat);
                    $("#content290").text(data['head'][0].fifiastemp);
                    $("#content291").text(data['head'][0].productionmonth);
                    $("#content292").text(data['head'][0].covermat);
                    $("#content293").text(data['head'][0].backing);
                    $("#content294").text(data['head'][0].bladder);
                    $("#content295").text(data['head'][0].balltype);
                    $("#content296").text(data['head'][0].testtype);
                    $("#content297").text(data['head'][0].mainmatcolor);
                    $("#content298").text(data['head'][0].printngscolors);
                    $("#content299").text(data['head'][0].result);
                    $("#content300").text(data['head'][0].Performedby);
                    $("#content337R").text(data['head'][0].remark);
                    $("#content300C").text(data['head'][0].Temperature);
                    $("#content301C").text(data['head'][0].Humidity);



                    if (data['head'][0].pictureFresh != null && data['head'][0].pictureFresh != "") {
                        $("#FreshPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureFresh);
                    } else {
                        $("#FreshPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureShooter != null && data['head'][0].pictureShooter != "") {
                        $("#ShooterPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureShooter);
                    } else {
                        $("#ShooterPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureHydro != null && data['head'][0].pictureHydro != "") {
                        $("#HydroPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureHydro);
                    } else {
                        $("#HydroPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureDrum != null && data['head'][0].pictureDrum != "") {
                        $("#DrumPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureDrum);
                    } else {
                        $("#DrumPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }






                    $("#testReviewedSize5").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    $("#testApprovedSize5").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content301").text(data['detail'][0].weight1);
                        $("#content302").text(data['detail'][0].weight2);
                        $("#content303").text(data['detail'][0].cir1);
                        $("#content304").text(data['detail'][0].cir2);
                        $("#content305").text(data['detail'][0].sphericity_sp1);
                        $("#content306").text(data['detail'][0].sphericity_sp2);
                        $("#content307").text(data['detail'][0].loss_of_pressure1);
                        $("#content308").text(data['detail'][0].loss_of_pressure2);
                        $("#content309").text(data['detail'][0].rebound_rt1);
                        $("#content310").text(data['detail'][0].rebound_rt2);
                        $("#content311").text(data['detail'][0].rebound_5_1);
                        $("#content312").text(data['detail'][0].rebound_5_2);
                        $("#content313").text(data['detail'][0].rebound_0_1);
                        $("#content314").text(data['detail'][0].rebound_0_2);
                        $("#content315").text(data['detail'][0].cir_st_1);
                        $("#content316").text(data['detail'][0].cir_st_2);
                        $("#content317").text(data['detail'][0].sphericity_st1);
                        $("#content318").text(data['detail'][0].sphericity_st2);
                        $("#content319").text(data['detail'][0].ch_of_pressure_st1);
                        $("#content320").text(data['detail'][0].ch_of_pressure_st2);
                        $("#content321").text(data['detail'][0].material_st1);
                        $("#content322").text(data['detail'][0].material_st2);
                        $("#content323").text(data['detail'][0].water_uptake_wrt1);
                        $("#content324").text(data['detail'][0].water_uptake_wrt2);
                        $("#content325").text(data['detail'][0].cir1_wrt);
                        $("#content326").text(data['detail'][0].cir2_wrt);
                        $("#content327").text(data['detail'][0].sphericity_wrt1);
                        $("#content328").text(data['detail'][0].sphericity_wrt2);
                        $("#content329").text(data['detail'][0].drum_test_pd1);
                        $("#content330").text(data['detail'][0].drum_test_pd2);
                        $("#content331").text(data['detail'][0].abraison_resistance_pd1);
                        $("#content332").text(data['detail'][0].abraison_resistance_pd2);
                        $("#content333").text(data['detail'][0].uv_light_fast_cst1);
                        $("#content334").text(data['detail'][0].uv_light_fast_cst2);
                        $("#content335").text(data['detail'][0].ozon_test_cst1);
                        $("#content336").text(data['detail'][0].ozon_test_cst2);
                        $("#content337").text(data['detail'][0].hydrolysis_lam1);
                        $("#content338").text(data['detail'][0].hydrolysis_lam2);
                        $("#content339").text(data['detail'][0].hydrolysis_color1);
                        $("#content340").text(data['detail'][0].hydrolysis_color2);
                    }



                    $('#soccerBallsSizeLight').modal('toggle');

                } else if (type == "SOCCER BALLS SIZE 3") {


                    $("#content341").text(data['head'][0].FactoryCode);
                    $("#content342").text(data['head'][0].labno);
                    $("#content343").text(data['head'][0].testdate);
                    $("#content344").text(data['head'][0].tastcat);
                    $("#content345").text(data['head'][0].fifiastemp);
                    $("#content346").text(data['head'][0].productionmonth);
                    $("#content347").text(data['head'][0].covermat);
                    $("#content348").text(data['head'][0].backing);
                    $("#content349").text(data['head'][0].bladder);
                    $("#content350").text(data['head'][0].balltype);
                    $("#content351").text(data['head'][0].testtype);
                    $("#content352").text(data['head'][0].mainmatcolor);
                    $("#content353").text(data['head'][0].printngscolors);
                    $("#content354").text(data['head'][0].result);
                    $("#content355").text(data['head'][0].Performedby);

                    $("#content349Size3").text(data['head'][0].Temperature);
                    $("#content350Size3").text(data['head'][0].Humidity);



                    $("#testReviewedSize5").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    $("#testApprovedSize5").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content356").text(data['detail'][0].weight1);
                        $("#content357").text(data['detail'][0].weight2);
                        $("#content358").text(data['detail'][0].cir1);
                        $("#content359").text(data['detail'][0].cir2);
                        $("#content360").text(data['detail'][0].sphericity_sp1);
                        $("#content361").text(data['detail'][0].sphericity_sp2);
                        $("#content362").text(data['detail'][0].loss_of_pressure1);
                        $("#content363").text(data['detail'][0].loss_of_pressure2);
                        $("#content364").text(data['detail'][0].rebound_rt1);
                        $("#content365").text(data['detail'][0].rebound_rt2);
                        $("#content366").text(data['detail'][0].rebound_5_1);
                        $("#content367").text(data['detail'][0].rebound_5_2);
                        $("#content368").text(data['detail'][0].rebound_0_1);
                        $("#content369").text(data['detail'][0].rebound_0_2);
                        $("#content370").text(data['detail'][0].cir_st_1);
                        $("#content371").text(data['detail'][0].cir_st_2);
                        $("#content372").text(data['detail'][0].sphericity_st1);
                        $("#content373").text(data['detail'][0].sphericity_st2);
                        $("#content374").text(data['detail'][0].ch_of_pressure_st1);
                        $("#content375").text(data['detail'][0].ch_of_pressure_st2);
                        $("#content376").text(data['detail'][0].material_st1);
                        $("#content377").text(data['detail'][0].material_st2);
                        $("#content378").text(data['detail'][0].water_uptake_wrt1);
                        $("#content379").text(data['detail'][0].water_uptake_wrt2);
                        $("#content380").text(data['detail'][0].cir1_wrt);
                        $("#content381").text(data['detail'][0].cir2_wrt);
                        $("#content382").text(data['detail'][0].sphericity_wrt1);
                        $("#content383").text(data['detail'][0].sphericity_wrt2);
                        $("#content384").text(data['detail'][0].drum_test_pd1);
                        $("#content385").text(data['detail'][0].drum_test_pd2);
                        $("#content386").text(data['detail'][0].abraison_resistance_pd1);
                        $("#content387").text(data['detail'][0].abraison_resistance_pd2);
                        $("#content388").text(data['detail'][0].uv_light_fast_cst1);
                        $("#content389").text(data['detail'][0].uv_light_fast_cst2);
                        $("#content390").text(data['detail'][0].ozon_test_cst1);
                        $("#content391").text(data['detail'][0].ozon_test_cst2);
                        $("#content392").text(data['detail'][0].hydrolysis_lam1);
                        $("#content393").text(data['detail'][0].hydrolysis_lam2);
                        $("#content394").text(data['detail'][0].hydrolysis_color1);
                        $("#content395").text(data['detail'][0].hydrolysis_color2);
                    }



                    $('#soccerBallsSize3').modal('toggle');

                } else if (type == " SOCCER BALLS SMALL") {

                    $("#content396").text(data['head'][0].FactoryCode);
                    $("#content397").text(data['head'][0].labno);
                    $("#content398").text(data['head'][0].testdate);
                    $("#content399").text(data['head'][0].tastcat);
                    $("#content400").text(data['head'][0].fifiastemp);
                    $("#content401").text(data['head'][0].productionmonth);
                    $("#content402").text(data['head'][0].covermat);
                    $("#content403").text(data['head'][0].backing);
                    $("#content404").text(data['head'][0].bladder);
                    $("#content405").text(data['head'][0].balltype);
                    $("#content406").text(data['head'][0].testtype);
                    $("#content407").text(data['head'][0].mainmatcolor);
                    $("#content408").text(data['head'][0].printngscolors);
                    $("#content409").text(data['head'][0].result);
                    $("#content410").text(data['head'][0].Performedby);




                    $("#testReviewedSize5").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    $("#testApprovedSize5").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content411").text(data['detail'][0].weight1);
                        $("#content412").text(data['detail'][0].weight2);
                        $("#content413").text(data['detail'][0].cir1);
                        $("#content414").text(data['detail'][0].cir2);
                        $("#content415").text(data['detail'][0].sphericity_sp1);
                        $("#content416").text(data['detail'][0].sphericity_sp2);
                        $("#content417").text(data['detail'][0].loss_of_pressure1);
                        $("#content418").text(data['detail'][0].loss_of_pressure2);
                        $("#content419").text(data['detail'][0].rebound_rt1);
                        $("#content420").text(data['detail'][0].rebound_rt2);
                        $("#content421").text(data['detail'][0].rebound_5_1);
                        $("#content422").text(data['detail'][0].rebound_5_2);
                        $("#content423").text(data['detail'][0].rebound_0_1);
                        $("#content424").text(data['detail'][0].rebound_0_2);
                        $("#content425").text(data['detail'][0].cir_st_1);
                        $("#content426").text(data['detail'][0].cir_st_2);
                        $("#content427").text(data['detail'][0].sphericity_st1);
                        $("#content428").text(data['detail'][0].sphericity_st2);
                        $("#content429").text(data['detail'][0].ch_of_pressure_st1);
                        $("#content430").text(data['detail'][0].ch_of_pressure_st2);
                        $("#content431").text(data['detail'][0].material_st1);
                        $("#content432").text(data['detail'][0].material_st2);
                        $("#content433").text(data['detail'][0].water_uptake_wrt1);
                        $("#content434").text(data['detail'][0].water_uptake_wrt2);
                        $("#content435").text(data['detail'][0].cir1_wrt);
                        $("#content436").text(data['detail'][0].cir2_wrt);
                        $("#content437").text(data['detail'][0].sphericity_wrt1);
                        $("#content438").text(data['detail'][0].sphericity_wrt2);
                        $("#content439").text(data['detail'][0].drum_test_pd1);
                        $("#content440").text(data['detail'][0].drum_test_pd2);
                        $("#content441").text(data['detail'][0].abraison_resistance_pd1);
                        $("#content442").text(data['detail'][0].abraison_resistance_pd2);
                        $("#content443").text(data['detail'][0].uv_light_fast_cst1);
                        $("#content444").text(data['detail'][0].uv_light_fast_cst2);
                        $("#content445").text(data['detail'][0].ozon_test_cst1);
                        $("#content446").text(data['detail'][0].ozon_test_cst2);
                        $("#content447").text(data['detail'][0].hydrolysis_lam1);
                        $("#content448").text(data['detail'][0].hydrolysis_lam2);
                        $("#content449").text(data['detail'][0].hydrolysis_color1);
                        $("#content450").text(data['detail'][0].hydrolysis_color2);
                    }



                    $('#soccerBallsSmall').modal('toggle');

                } else if (type == " SOCIETY+SOCCERBALLS") {


                    $("#content451").text(data['head'][0].FactoryCode);
                    $("#content452").text(data['head'][0].labno);
                    $("#content453").text(data['head'][0].testdate);
                    $("#content454").text(data['head'][0].tastcat);
                    $("#content455").text(data['head'][0].fifiastemp);
                    $("#content456").text(data['head'][0].productionmonth);
                    $("#content457").text(data['head'][0].covermat);
                    $("#content458").text(data['head'][0].backing);
                    $("#content459").text(data['head'][0].bladder);
                    $("#content460").text(data['head'][0].balltype);
                    $("#content461").text(data['head'][0].testtype);
                    $("#content462").text(data['head'][0].mainmatcolor);
                    $("#content463").text(data['head'][0].printngscolors);
                    $("#content464").text(data['head'][0].result);
                    $("#content465").text(data['head'][0].Performedby);
                    $("#content465R").text(data['head'][0].remark);


                    $("#content465Society").text(data['head'][0].Temperature);
                    $("#content466Society").text(data['head'][0].Humidity);


                    $("#testReviewedSize5").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    $("#testApprovedSize5").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content466").text(data['detail'][0].weight1);
                        $("#content467").text(data['detail'][0].weight2);
                        $("#content468").text(data['detail'][0].cir1);
                        $("#content469").text(data['detail'][0].cir2);
                        $("#content470").text(data['detail'][0].sphericity_sp1);
                        $("#content471").text(data['detail'][0].sphericity_sp2);
                        $("#content472").text(data['detail'][0].loss_of_pressure1);
                        $("#content473").text(data['detail'][0].loss_of_pressure2);
                        $("#content474").text(data['detail'][0].rebound_rt1);
                        $("#content475").text(data['detail'][0].rebound_rt2);
                        $("#content476").text(data['detail'][0].rebound_5_1);
                        $("#content477").text(data['detail'][0].rebound_5_2);
                        $("#content478").text(data['detail'][0].rebound_0_1);
                        $("#content479").text(data['detail'][0].rebound_0_2);
                        $("#content480").text(data['detail'][0].cir_st_1);
                        $("#content481").text(data['detail'][0].cir_st_2);
                        $("#content482").text(data['detail'][0].sphericity_st1);
                        $("#content483").text(data['detail'][0].sphericity_st2);
                        $("#content484").text(data['detail'][0].ch_of_pressure_st1);
                        $("#content485").text(data['detail'][0].ch_of_pressure_st2);
                        $("#content486").text(data['detail'][0].material_st1);
                        $("#content487").text(data['detail'][0].material_st2);
                        $("#content488").text(data['detail'][0].water_uptake_wrt1);
                        $("#content489").text(data['detail'][0].water_uptake_wrt2);
                        $("#content490").text(data['detail'][0].cir1_wrt);
                        $("#content491").text(data['detail'][0].cir2_wrt);
                        $("#content492").text(data['detail'][0].sphericity_wrt1);
                        $("#content493").text(data['detail'][0].sphericity_wrt2);
                        $("#content494").text(data['detail'][0].drum_test_pd1);
                        $("#content495").text(data['detail'][0].drum_test_pd2);
                        $("#content496").text(data['detail'][0].abraison_resistance_pd1);
                        $("#content497").text(data['detail'][0].abraison_resistance_pd2);
                        $("#content498").text(data['detail'][0].uv_light_fast_cst1);
                        $("#content499").text(data['detail'][0].uv_light_fast_cst2);
                        $("#content500").text(data['detail'][0].ozon_test_cst1);
                        $("#content501").text(data['detail'][0].ozon_test_cst2);
                        $("#content502").text(data['detail'][0].hydrolysis_lam1);
                        $("#content503").text(data['detail'][0].hydrolysis_lam2);
                        $("#content504").text(data['detail'][0].hydrolysis_color1);
                        $("#content505").text(data['detail'][0].hydrolysis_color2);
                    }


                    $('#soccerBallsSocietySoccerBALLS').modal('toggle');

                } else {
                    $("#content32").text(data['head'][0].labno);
                    $("#content3222").text(data['head'][0].cssCode);
                    $("#workingNoIndoor").text(data['head'][0].WorkNo ? data['head'][0].WorkNo : 'WORKING #: Nil');
                    $("#articleNoIndoor").text(data['head'][0].ArtCode ? data['head'][0].ArtCode : 'Article Code: Nil');
                    $("#content33").text(data['head'][0].testdate);
                    $("#content34").text(data['head'][0].tastcat);
                    $("#content35").text(data['head'][0].fifiastemp);
                    $("#content36").text(data['head'][0].productionmonth);
                    $("#content37").text(data['head'][0].covermat);
                    $("#content38").text(data['head'][0].backing);
                    $("#content39").text(data['head'][0].bladder);
                    $("#content40").text(data['head'][0].balltype);
                    $("#content41").text(data['head'][0].testtype);
                    $("#content42").text(data['head'][0].mainmatcolor);
                    $("#content43").text(data['head'][0].printngscolors);
                    $("#content44").text(data['head'][0].result);
                    $("#content667").text(data['head'][0].remark);
                    $("#content45").text(data['head'][0].Performedby);



                    if (data['head'][0].result.toLowerCase().trim() == "urgent" || data['head'][0].remark.toLowerCase().trim() == "urgent") {

                        // $("#contentNoteFGT").text('As per the request of customer, testing is proceeded without condition.')
                        $("#contentNoteFGT").text('The above reported result is applicable to the sample as received at customer service section<br>Report was Electronically generated, Signature are not required<br>**: These Tests are out of scope of ISO/IEC 17025:2017')

                    } else {
                        $("#contentNoteFGT").text('The above reported result is applicable to the sample as received at customer service section<br>Report was Electronically generated, Signature are not required<br>**: These Tests are out of scope of ISO/IEC 17025:2017');

                    }






                    if (data['head'][0].pictureFresh != null && data['head'][0].pictureFresh != "") {
                        $("#FreshPhotoIndoor").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureFresh);
                    } else {
                        $("#FreshPhotoIndoor").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureShooter != null && data['head'][0].pictureShooter != "") {
                        $("#ShooterPhotoIndoor").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureShooter);
                    } else {
                        $("#ShooterPhotoIndoor").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureHydro != null && data['head'][0].pictureHydro != "") {
                        $("#HydroPhotoIndoor").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureHydro);
                    } else {
                        $("#HydroPhotoIndoor").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureDrum != null && data['head'][0].pictureDrum != "") {
                        $("#DrumPhotoIndoor").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureDrum);
                    } else {
                        $("#DrumPhotoIndoor").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }

                    $("#testReviewedFGT").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    $("#testApprovedFGT").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content46").text(data['detail'][0].weight1);
                        $("#content47").text(data['detail'][0].weight2);
                        $("#content48").text(data['detail'][0].cir1);
                        $("#content49").text(data['detail'][0].cir2);
                        $("#content50").text(data['detail'][0].sphericity_sp1);
                        $("#content51").text(data['detail'][0].sphericity_sp2);
                        $("#content52").text(data['detail'][0].loss_of_pressure1);
                        $("#content53").text(data['detail'][0].loss_of_pressure2);
                        $("#content54").text(data['detail'][0].rebound_0_1);
                        $("#content55").text(data['detail'][0].rebound_0_2);
                        $("#content56").text(data['detail'][0].cir_st_1);
                        $("#content57").text(data['detail'][0].cir_st_2);
                        $("#content58").text(data['detail'][0].sphericity_sp1);
                        $("#content59").text(data['detail'][0].sphericity_sp2);
                        $("#content60").text(data['detail'][0].ch_of_pressure_st1);
                        $("#content61").text(data['detail'][0].ch_of_pressure_st2);
                        $("#content62").text(data['detail'][0].material_st1);
                        $("#content63").text(data['detail'][0].material_st2);
                        $("#content64").text(data['detail'][0].abraison_resistance_pd1);
                        $("#content65").text(data['detail'][0].abraison_resistance_pd2);
                    }






                    $('#soccerBallsIndoor').modal('toggle');

                }
            })
        });
        $("#ActivityData").on('click', '.printButton', function(e) {

            // e.preventDefault();
            let id = this.id;

            let split_value = id.split(".");

            var TID = split_value[1];

            let type = $("#fgtype" + TID).text();


            url = "<?php echo base_url(''); ?>FGT/FGT_PRINT"
            $.post(url, {
                TID
            }, function(data) {

                if (type == "SOCCER BALLS" || type == "SOCCERBALLS") {

                    // alert(type == "SOCCER BALLS" || type == "SOCCERBALLS");

                    $("#titleBalls").text(data['head'][0].FGTType);
                    $("#workingNoMini").text(data['head'][0].WorkNo ? data['head'][0].WorkNo : 'WORKING #: Nil');
                    $("#articleNoMini").text(data['head'][0].ArtCode != '' ? data['head'][0].ArtCode : 'Article Code: Nil');
                    $("#content2").text(data['head'][0].labno);
                    $("#content222").text(data['head'][0].cssCode);
                    $("#content3").text(data['head'][0].testdate);
                    $("#content4").text(data['head'][0].tastcat);
                    $("#content5").text(data['head'][0].productionmonth);
                    $("#content6").text(data['head'][0].modal);
                    //   $("#content7").text(data['head'][0].Innervalue);
                    $("#content8").text(data['head'][0].panel_shape);
                    $("#content9").text(data['head'][0].remark);
                    $("#content10").text(data['head'][0].balltype);
                    $("#content11").text(data['head'][0].testtype);
                    $("#content12").text(data['head'][0].mainmatcolor);
                    $("#content13").text(data['head'][0].printngscolors);
                    $("#content14").text(data['head'][0].result);
                    $("#content15").text(data['head'][0].Performedby);
                    $("#content377").text(data['head'][0].remark);


                    // if(data['head'][0].result.toLowerCase().trim() == "urgent" || data['head'][0].remark.toLowerCase().trim() == "urgent" ){
                    //     console.log("equal Urgent")
                    //     $("#contentNoteSoccer").text('As per the request of customer, testing is proceeded without condition.')


                    // }
                    // else{
                    //     console.log("Not equal Urgent", data['head'][0].result.toLowerCase().trim())
                    $("#contentNoteSoccer").text('The above reported result is applicable to the sample as received at customer service section<br>Report was Electronically generated, Signature are not required<br>**: These Tests are out of scope of ISO/IEC 17025:2017');

                    // }



                    if (data['head'][0].pictureFresh != null && data['head'][0].pictureFresh != "") {
                        $("#FreshPhotoSoccer").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureFresh);
                    } else {
                        $("#FreshPhotoSoccer").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureShooter != null && data['head'][0].pictureShooter != "") {
                        $("#ShooterPhotoSoccer").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureShooter);
                    } else {
                        $("#ShooterPhotoSoccer").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureHydro != null && data['head'][0].pictureHydro != "") {
                        $("#HydroPhotoSoccer").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureHydro);
                    } else {
                        $("#HydroPhotoSoccer").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureDrum != null && data['head'][0].pictureDrum != "") {
                        $("#DrumPhotoSoccer").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureDrum);
                    } else {
                        $("#DrumPhotoSoccer").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }

                    $("#testReviewedSoccer").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    $("#testApprovedSoccer").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content16").text(data['detail'][0].weight1);
                        $("#content17").text(data['detail'][0].weight2);
                        $("#content21").text(data['detail'][0].cir1);
                        $("#content22").text(data['detail'][0].cir2);
                        $("#content23").text(data['detail'][0].rebound_rt1);
                        $("#content24").text(data['detail'][0].rebound_rt2);
                        $("#content27").text(data['detail'][0].drum_test_pd1);
                        $("#content28").text(data['detail'][0].uv_light_fast_cst1);
                        $("#content29").text(data['detail'][0].hydrolysis_lam1);
                        $("#content30").text(data['detail'][0].hydrolysis_color1);
                        $("#content31").text(data['head'][0].remark);

                        $("#content10Air").text(data['head'][0].Temperature);
                        $("#content15Air").text(data['head'][0].Humidity);
                    }




                    $('#FGTReportModal').modal('toggle');
                } else if (type == "SOCCER BALLS SIZE 5") {

                    // alert(type == "SOCCER BALLS SIZE 5");

                    $("#content66").text(data['head'][0].labno);
                    $("#content666").text(data['head'][0].cssCode);
                    $("#workingNoSize5").text(data['head'][0].WorkNo ? data['head'][0].WorkNo : 'WORKING #: Nil');
                    $("#articleNoSize5").text(data['head'][0].ArtCode ? data['head'][0].ArtCode : 'Article Code: Nil');
                    $("#content67").text(data['head'][0].testdate);
                    $("#content68").text(data['head'][0].tastcat);
                    $("#content69").text(data['head'][0].fifiastemp);
                    $("#content70").text(data['head'][0].productionmonth);
                    $("#content71").text(data['head'][0].covermat);
                    $("#content72").text(data['head'][0].backing);
                    $("#content73").text(data['head'][0].bladder);
                    $("#content74").text(data['head'][0].balltype);
                    $("#content75").text(data['head'][0].testtype);
                    $("#content76").text(data['head'][0].mainmatcolor);
                    $("#content77").text(data['head'][0].printngscolors);
                    $("#content78").text(data['head'][0].result);
                    $("#content120").text(data['head'][0].remark);
                    $("#content79").text(data['head'][0].Performedby);

                    $("#content74C").text(data['head'][0].Temperature);
                    $("#content79C").text(data['head'][0].Humidity);


                    if (data['head'][0].pictureFresh != null && data['head'][0].pictureFresh != "") {
                        $("#FreshPhotoSize5").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureFresh);
                    } else {
                        $("#FreshPhotoSize5").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureShooter != null && data['head'][0].pictureShooter != "") {
                        $("#ShooterPhotoSize5").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureShooter);
                    } else {
                        $("#ShooterPhotoSize5").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureHydro != null && data['head'][0].pictureHydro != "") {
                        $("#HydroPhotoSize5").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureHydro);
                    } else {
                        $("#HydroPhotoSize5").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureDrum != null && data['head'][0].pictureDrum != "") {
                        $("#DrumPhotoSize5").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureDrum);
                    } else {
                        $("#DrumPhotoSize5").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }



                    if (data['head'][0].result.toLowerCase().trim() == "urgent" || data['head'][0].remark.toLowerCase().trim() == "urgent") {

                        // $("#contentNoteSize5").text('As per the request of customer, testing is proceeded without condition.')
                        $("#contentNoteSize5").text('The above reported result is applicable to the sample as received at customer service section<br>Report was Electronically generated, Signature are not required<br>**: These Tests are out of scope of ISO/IEC 17025:2017')

                    } else {
                        $("#contentNoteSize5").text('The above reported result is applicable to the sample as received at customer service section<br>Report was Electronically generated, Signature are not required<br>**: These Tests are out of scope of ISO/IEC 17025:2017');

                    }




                    $("#testReviewedSize5").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    $("#testApprovedSize5").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content80").text(data['detail'][0].weight1);
                        $("#content81").text(data['detail'][0].weight2);
                        $("#content82").text(data['detail'][0].cir1);
                        $("#content83").text(data['detail'][0].cir2);
                        $("#content84").text(data['detail'][0].sphericity_sp1);
                        $("#content85").text(data['detail'][0].sphericity_sp2);
                        $("#content86").text(data['detail'][0].loss_of_pressure1);
                        $("#content87").text(data['detail'][0].loss_of_pressure2);
                        $("#content88").text(data['detail'][0].rebound_rt1);
                        $("#content89").text(data['detail'][0].rebound_rt2);
                        $("#content90").text(data['detail'][0].rebound_5_1);
                        $("#content91").text(data['detail'][0].rebound_5_2);
                        $("#content92").text(data['detail'][0].rebound_0_1);
                        $("#content93").text(data['detail'][0].rebound_0_2);
                        $("#content94").text(data['detail'][0].cir_st_1);
                        $("#content95").text(data['detail'][0].cir_st_2);
                        $("#content96").text(data['detail'][0].sphericity_st1);
                        $("#content97").text(data['detail'][0].sphericity_st2);
                        $("#content98").text(data['detail'][0].ch_of_pressure_st1);
                        $("#content99").text(data['detail'][0].ch_of_pressure_st2);
                        $("#content100").text(data['detail'][0].material_st1);
                        $("#content101").text(data['detail'][0].material_st2);
                        $("#content102").text(data['detail'][0].water_uptake_wrt1);
                        $("#content103").text(data['detail'][0].water_uptake_wrt2);
                        $("#content104").text(data['detail'][0].cir1_wrt);
                        $("#content105").text(data['detail'][0].cir2_wrt);
                        $("#content106").text(data['detail'][0].sphericity_wrt1);
                        $("#content107").text(data['detail'][0].sphericity_wrt2);
                        $("#content108").text(data['detail'][0].drum_test_pd1);
                        $("#content109").text(data['detail'][0].drum_test_pd2);
                        $("#content110").text(data['detail'][0].abraison_resistance_pd1);
                        $("#content111").text(data['detail'][0].abraison_resistance_pd2);
                        $("#content112").text(data['detail'][0].uv_light_fast_cst1);
                        $("#content113").text(data['detail'][0].uv_light_fast_cst2);
                        $("#content114").text(data['detail'][0].ozon_test_cst1);
                        $("#content115").text(data['detail'][0].ozon_test_cst2);
                        $("#content116").text(data['detail'][0].hydrolysis_lam1);
                        $("#content117").text(data['detail'][0].hydrolysis_lam2);
                        $("#content118").text(data['detail'][0].hydrolysis_color1);
                        $("#content119").text(data['detail'][0].hydrolysis_color2);
                    }

                    $('#soccerBallsSize5').modal('toggle');

                } else if (type == "SOCCER BALLS SIZE 4") {

                    $("#content122").text(data['head'][0].FactoryCode);
                    $("#content123").text(data['head'][0].labno);
                    $("#content124").text(data['head'][0].testdate);
                    $("#content125").text(data['head'][0].tastcat);
                    $("#content126").text(data['head'][0].fifiastemp);
                    $("#content127").text(data['head'][0].productionmonth);
                    $("#content128").text(data['head'][0].covermat);
                    $("#content129").text(data['head'][0].backing);
                    $("#content130").text(data['head'][0].bladder);
                    $("#content131").text(data['head'][0].balltype);
                    $("#content132").text(data['head'][0].testtype);
                    $("#content133").text(data['head'][0].mainmatcolor);
                    $("#content134").text(data['head'][0].printngscolors);
                    $("#content135").text(data['head'][0].result);
                    $("#content136").text(data['head'][0].Performedby);
                    $("#content175R").text(data['head'][0].remark);



                    if (data['head'][0].pictureFresh != null && data['head'][0].pictureFresh != "") {
                        $("#FreshPhotoSize4").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureFresh);
                    } else {
                        $("#FreshPhotoSize4").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureShooter != null && data['head'][0].pictureShooter != "") {
                        $("#ShooterPhotoSize4").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureShooter);
                    } else {
                        $("#ShooterPhotoSize4").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureHydro != null && data['head'][0].pictureHydro != "") {
                        $("#HydroPhotoSize4").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureHydro);
                    } else {
                        $("#HydroPhotoSize4").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureDrum != null && data['head'][0].pictureDrum != "") {
                        $("#DrumPhotoSize4").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureDrum);
                    } else {
                        $("#DrumPhotoSize4").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }



                    // if(data['head'][0].result.toLowerCase().trim() == "urgent" || data['head'][0].remark.toLowerCase().trim() == "urgent" ){

                    //     // $("#contentNoteSize5").text('As per the request of customer, testing is proceeded without condition.')
                    //     $("#contentNoteSize5").text('The above reported result is applicable to the sample as received at customer service section<br>Report was Electronically generated, Signature are not required<br>**: These Tests are out of scope of ISO/IEC 17025:2017')

                    // }
                    // else{
                    //    $("#contentNoteSize5").text('The above reported result is applicable to the sample as received at customer service section<br>Report was Electronically generated, Signature are not required<br>**: These Tests are out of scope of ISO/IEC 17025:2017');     

                    // }




                    // $("#testReviewedSize5").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    // $("#testApprovedSize5").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content137").text(data['detail'][0].weight1);
                        $("#content138").text(data['detail'][0].weight2);
                        $("#content139").text(data['detail'][0].cir1);
                        $("#content140").text(data['detail'][0].cir2);
                        $("#content141").text(data['detail'][0].sphericity_sp1);
                        $("#content142").text(data['detail'][0].sphericity_sp2);
                        $("#content143").text(data['detail'][0].loss_of_pressure1);
                        $("#content144").text(data['detail'][0].loss_of_pressure2);
                        $("#content145").text(data['detail'][0].rebound_rt1);
                        $("#content146").text(data['detail'][0].rebound_rt2);
                        $("#content147").text(data['detail'][0].rebound_5_1);
                        $("#content148").text(data['detail'][0].rebound_5_2);
                        $("#content149").text(data['detail'][0].rebound_0_1);
                        $("#content150").text(data['detail'][0].rebound_0_2);
                        $("#content151").text(data['detail'][0].cir_st_1);
                        $("#content152").text(data['detail'][0].cir_st_2);
                        $("#content153").text(data['detail'][0].sphericity_st1);
                        $("#content154").text(data['detail'][0].sphericity_st2);
                        $("#content155").text(data['detail'][0].ch_of_pressure_st1);
                        $("#content155").text(data['detail'][0].ch_of_pressure_st2);
                        $("#content156").text(data['detail'][0].material_st1);
                        $("#content157").text(data['detail'][0].material_st2);
                        $("#content158").text(data['detail'][0].water_uptake_wrt1);
                        $("#content159").text(data['detail'][0].water_uptake_wrt2);
                        $("#content160").text(data['detail'][0].cir1_wrt);
                        $("#content161").text(data['detail'][0].cir2_wrt);
                        $("#content162").text(data['detail'][0].sphericity_wrt1);
                        $("#content163").text(data['detail'][0].sphericity_wrt2);
                        $("#content164").text(data['detail'][0].drum_test_pd1);
                        $("#content165").text(data['detail'][0].drum_test_pd2);
                        $("#content166").text(data['detail'][0].abraison_resistance_pd1);
                        $("#content167").text(data['detail'][0].abraison_resistance_pd2);
                        $("#content168").text(data['detail'][0].uv_light_fast_cst1);
                        $("#content169").text(data['detail'][0].uv_light_fast_cst2);
                        $("#content170").text(data['detail'][0].ozon_test_cst1);
                        $("#content171").text(data['detail'][0].ozon_test_cst2);
                        $("#content172").text(data['detail'][0].hydrolysis_lam1);
                        $("#content173").text(data['detail'][0].hydrolysis_lam2);
                        $("#content174").text(data['detail'][0].hydrolysis_color1);
                        $("#content175").text(data['detail'][0].hydrolysis_color2);
                    }




                    $('#soccerBallsSize4').modal('toggle');

                } else if (type == "SOCCER BALLS B2B") {


                    $("#content176").text(data['head'][0].FactoryCode);
                    $("#content177").text(data['head'][0].labno);
                    $("#content178").text(data['head'][0].testdate);
                    $("#content179").text(data['head'][0].tastcat);
                    $("#content180").text(data['head'][0].fifiastemp);
                    $("#content181").text(data['head'][0].productionmonth);
                    $("#content182").text(data['head'][0].covermat);
                    $("#content183").text(data['head'][0].backing);
                    $("#content184").text(data['head'][0].bladder);
                    $("#content185").text(data['head'][0].balltype);
                    $("#content186").text(data['head'][0].testtype);
                    $("#content187").text(data['head'][0].mainmatcolor);
                    $("#content188").text(data['head'][0].printngscolors);
                    $("#content189").text(data['head'][0].result);
                    $("#content190").text(data['head'][0].Performedby);


                    $("#content190B").text(data['head'][0].Temperature);
                    $("#content191B").text(data['head'][0].Humidity);


                    $("#testReviewedSize5").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    $("#testApprovedSize5").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content191").text(data['detail'][0].weight1);
                        $("#content192").text(data['detail'][0].weight2);
                        $("#content193").text(data['detail'][0].cir1);
                        $("#content194").text(data['detail'][0].cir2);
                        $("#content195").text(data['detail'][0].sphericity_sp1);
                        $("#content196").text(data['detail'][0].sphericity_sp2);
                        $("#content197").text(data['detail'][0].loss_of_pressure1);
                        $("#content198").text(data['detail'][0].loss_of_pressure2);
                        $("#content199").text(data['detail'][0].rebound_rt1);
                        $("#content200").text(data['detail'][0].rebound_rt2);
                        $("#content201").text(data['detail'][0].rebound_5_1);
                        $("#content202").text(data['detail'][0].rebound_5_2);
                        $("#content203").text(data['detail'][0].rebound_0_1);
                        $("#content204").text(data['detail'][0].rebound_0_2);
                        $("#content205").text(data['detail'][0].cir_st_1);
                        $("#content206").text(data['detail'][0].cir_st_2);
                        $("#content207").text(data['detail'][0].sphericity_st1);
                        $("#content208").text(data['detail'][0].sphericity_st2);
                        $("#content209").text(data['detail'][0].ch_of_pressure_st1);
                        $("#content210").text(data['detail'][0].ch_of_pressure_st2);
                        $("#content211").text(data['detail'][0].material_st1);
                        $("#content212").text(data['detail'][0].material_st2);
                        $("#content213").text(data['detail'][0].water_uptake_wrt1);
                        $("#content214").text(data['detail'][0].water_uptake_wrt2);
                        $("#content215").text(data['detail'][0].cir1_wrt);
                        $("#content216").text(data['detail'][0].cir2_wrt);
                        $("#content217").text(data['detail'][0].sphericity_wrt1);
                        $("#content218").text(data['detail'][0].sphericity_wrt2);
                        $("#content219").text(data['detail'][0].drum_test_pd1);
                        $("#content220").text(data['detail'][0].drum_test_pd2);
                        $("#content221").text(data['detail'][0].abraison_resistance_pd1);
                        $("#content222").text(data['detail'][0].abraison_resistance_pd2);
                        $("#content223").text(data['detail'][0].uv_light_fast_cst1);
                        $("#content224").text(data['detail'][0].uv_light_fast_cst2);
                        $("#content225").text(data['detail'][0].ozon_test_cst1);
                        $("#content226").text(data['detail'][0].ozon_test_cst2);
                        $("#content227").text(data['detail'][0].hydrolysis_lam1);
                        $("#content228").text(data['detail'][0].hydrolysis_lam2);
                        $("#content229").text(data['detail'][0].hydrolysis_color1);
                        $("#content230").text(data['detail'][0].hydrolysis_color2);
                    }



                    $('#soccerBallsSizeB2B').modal('toggle');

                } else if (type == "SOCCER BALLS BEACH") {


                    $("#content231").text(data['head'][0].FactoryCode);
                    $("#content232").text(data['head'][0].labno);
                    $("#content233").text(data['head'][0].testdate);
                    $("#content234").text(data['head'][0].tastcat);
                    $("#content235").text(data['head'][0].fifiastemp);
                    $("#content236").text(data['head'][0].productionmonth);
                    $("#content237").text(data['head'][0].covermat);
                    $("#content238").text(data['head'][0].backing);
                    $("#content239").text(data['head'][0].bladder);
                    $("#content240").text(data['head'][0].balltype);
                    $("#content241").text(data['head'][0].testtype);
                    $("#content242").text(data['head'][0].mainmatcolor);
                    $("#content243").text(data['head'][0].printngscolors);
                    $("#content244").text(data['head'][0].result);
                    $("#content245").text(data['head'][0].Performedby);
                    $("#content275R").text(data['head'][0].remark);


                    if (data['head'][0].pictureFresh != null && data['head'][0].pictureFresh != "") {
                        $("#FreshPhotoSoccerBallBeach").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureFresh);
                    } else {
                        $("#FreshPhotoSoccerBallBeach").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureShooter != null && data['head'][0].pictureShooter != "") {
                        $("#ShooterPhotoSoccerBallBeach").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureShooter);
                    } else {
                        $("#ShooterPhotoSoccerBallBeach").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureHydro != null && data['head'][0].pictureHydro != "") {
                        $("#HydroPhotoSoccerBallBeach").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureHydro);
                    } else {
                        $("#HydroPhotoSoccerBallBeach").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureDrum != null && data['head'][0].pictureDrum != "") {
                        $("#DrumPhotoSoccerBallBeach").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureDrum);
                    } else {
                        $("#DrumPhotoSoccerBallBeach").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }



                    $("#testReviewedSize5").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    $("#testApprovedSize5").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content246").text(data['detail'][0].weight1);
                        $("#content247").text(data['detail'][0].weight2);
                        $("#content248").text(data['detail'][0].cir1);
                        $("#content249").text(data['detail'][0].cir2);
                        $("#content250").text(data['detail'][0].sphericity_sp1);
                        $("#content251").text(data['detail'][0].sphericity_sp2);
                        $("#content252").text(data['detail'][0].loss_of_pressure1);
                        $("#content253").text(data['detail'][0].loss_of_pressure2);
                        $("#content254").text(data['detail'][0].rebound_rt1);
                        $("#content255").text(data['detail'][0].rebound_rt2);
                        $("#content256").text(data['detail'][0].rebound_5_1);
                        $("#content257").text(data['detail'][0].rebound_5_2);
                        $("#content258").text(data['detail'][0].rebound_0_1);
                        $("#content259").text(data['detail'][0].rebound_0_2);
                        $("#content260").text(data['detail'][0].cir_st_1);
                        $("#content261").text(data['detail'][0].cir_st_2);
                        $("#content262").text(data['detail'][0].sphericity_st1);
                        $("#content263").text(data['detail'][0].sphericity_st2);
                        $("#content264").text(data['detail'][0].ch_of_pressure_st1);
                        $("#content265").text(data['detail'][0].ch_of_pressure_st2);
                        $("#content266").text(data['detail'][0].material_st1);
                        $("#content267").text(data['detail'][0].material_st2);
                        $("#content268").text(data['detail'][0].water_uptake_wrt1);
                        $("#content269").text(data['detail'][0].water_uptake_wrt2);
                        $("#content270").text(data['detail'][0].cir1_wrt);
                        $("#content271").text(data['detail'][0].cir2_wrt);
                        $("#content272").text(data['detail'][0].sphericity_wrt1);
                        $("#content273").text(data['detail'][0].sphericity_wrt2);
                        $("#content274").text(data['detail'][0].drum_test_pd1);
                        $("#content275").text(data['detail'][0].drum_test_pd2);
                        $("#content276").text(data['detail'][0].abraison_resistance_pd1);
                        $("#content277").text(data['detail'][0].abraison_resistance_pd2);
                        $("#content278").text(data['detail'][0].uv_light_fast_cst1);
                        $("#content279").text(data['detail'][0].uv_light_fast_cst2);
                        $("#content280").text(data['detail'][0].ozon_test_cst1);
                        $("#content281").text(data['detail'][0].ozon_test_cst2);
                        $("#content282").text(data['detail'][0].hydrolysis_lam1);
                        $("#content283").text(data['detail'][0].hydrolysis_lam2);
                        $("#content284").text(data['detail'][0].hydrolysis_color1);
                        $("#content285").text(data['detail'][0].hydrolysis_color2);
                    }


                    $('#soccerBallsSizeBeach').modal('toggle');

                } else if (type == "SOCCER BALLS LIGHT") {


                    $("#content286").text(data['head'][0].FactoryCode);
                    $("#content287").text(data['head'][0].labno);
                    $("#content288").text(data['head'][0].testdate);
                    $("#content289").text(data['head'][0].tastcat);
                    $("#content290").text(data['head'][0].fifiastemp);
                    $("#content291").text(data['head'][0].productionmonth);
                    $("#content292").text(data['head'][0].covermat);
                    $("#content293").text(data['head'][0].backing);
                    $("#content294").text(data['head'][0].bladder);
                    $("#content295").text(data['head'][0].balltype);
                    $("#content296").text(data['head'][0].testtype);
                    $("#content297").text(data['head'][0].mainmatcolor);
                    $("#content298").text(data['head'][0].printngscolors);
                    $("#content299").text(data['head'][0].result);
                    $("#content300").text(data['head'][0].Performedby);
                    $("#content337R").text(data['head'][0].remark);
                    $("#content300C").text(data['head'][0].Temperature);
                    $("#content301C").text(data['head'][0].Humidity);


                    if (data['head'][0].pictureFresh != null && data['head'][0].pictureFresh != "") {
                        $("#FreshPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureFresh);
                    } else {
                        $("#FreshPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureShooter != null && data['head'][0].pictureShooter != "") {
                        $("#ShooterPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureShooter);
                    } else {
                        $("#ShooterPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureHydro != null && data['head'][0].pictureHydro != "") {
                        $("#HydroPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureHydro);
                    } else {
                        $("#HydroPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureDrum != null && data['head'][0].pictureDrum != "") {
                        $("#DrumPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureDrum);
                    } else {
                        $("#DrumPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }






                    $("#testReviewedSize5").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    $("#testApprovedSize5").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content301").text(data['detail'][0].weight1);
                        $("#content302").text(data['detail'][0].weight2);
                        $("#content303").text(data['detail'][0].cir1);
                        $("#content304").text(data['detail'][0].cir2);
                        $("#content305").text(data['detail'][0].sphericity_sp1);
                        $("#content306").text(data['detail'][0].sphericity_sp2);
                        $("#content307").text(data['detail'][0].loss_of_pressure1);
                        $("#content308").text(data['detail'][0].loss_of_pressure2);
                        $("#content309").text(data['detail'][0].rebound_rt1);
                        $("#content310").text(data['detail'][0].rebound_rt2);
                        $("#content311").text(data['detail'][0].rebound_5_1);
                        $("#content312").text(data['detail'][0].rebound_5_2);
                        $("#content313").text(data['detail'][0].rebound_0_1);
                        $("#content314").text(data['detail'][0].rebound_0_2);
                        $("#content315").text(data['detail'][0].cir_st_1);
                        $("#content316").text(data['detail'][0].cir_st_2);
                        $("#content317").text(data['detail'][0].sphericity_st1);
                        $("#content318").text(data['detail'][0].sphericity_st2);
                        $("#content319").text(data['detail'][0].ch_of_pressure_st1);
                        $("#content320").text(data['detail'][0].ch_of_pressure_st2);
                        $("#content321").text(data['detail'][0].material_st1);
                        $("#content322").text(data['detail'][0].material_st2);
                        $("#content323").text(data['detail'][0].water_uptake_wrt1);
                        $("#content324").text(data['detail'][0].water_uptake_wrt2);
                        $("#content325").text(data['detail'][0].cir1_wrt);
                        $("#content326").text(data['detail'][0].cir2_wrt);
                        $("#content327").text(data['detail'][0].sphericity_wrt1);
                        $("#content328").text(data['detail'][0].sphericity_wrt2);
                        $("#content329").text(data['detail'][0].drum_test_pd1);
                        $("#content330").text(data['detail'][0].drum_test_pd2);
                        $("#content331").text(data['detail'][0].abraison_resistance_pd1);
                        $("#content332").text(data['detail'][0].abraison_resistance_pd2);
                        $("#content333").text(data['detail'][0].uv_light_fast_cst1);
                        $("#content334").text(data['detail'][0].uv_light_fast_cst2);
                        $("#content335").text(data['detail'][0].ozon_test_cst1);
                        $("#content336").text(data['detail'][0].ozon_test_cst2);
                        $("#content337").text(data['detail'][0].hydrolysis_lam1);
                        $("#content338").text(data['detail'][0].hydrolysis_lam2);
                        $("#content339").text(data['detail'][0].hydrolysis_color1);
                        $("#content340").text(data['detail'][0].hydrolysis_color2);
                    }



                    $('#soccerBallsSizeLight').modal('toggle');

                } else if (type == "SOCCER BALLS SIZE 3") {


                    $("#content341").text(data['head'][0].FactoryCode);
                    $("#content342").text(data['head'][0].labno);
                    $("#content343").text(data['head'][0].testdate);
                    $("#content344").text(data['head'][0].tastcat);
                    $("#content345").text(data['head'][0].fifiastemp);
                    $("#content346").text(data['head'][0].productionmonth);
                    $("#content347").text(data['head'][0].covermat);
                    $("#content348").text(data['head'][0].backing);
                    $("#content349").text(data['head'][0].bladder);
                    $("#content350").text(data['head'][0].balltype);
                    $("#content351").text(data['head'][0].testtype);
                    $("#content352").text(data['head'][0].mainmatcolor);
                    $("#content353").text(data['head'][0].printngscolors);
                    $("#content354").text(data['head'][0].result);
                    $("#content355").text(data['head'][0].Performedby);


                    $("#content349Size3").text(data['head'][0].Temperature);
                    $("#content350Size3").text(data['head'][0].Humidity);


                    if (data['head'][0].pictureFresh != null && data['head'][0].pictureFresh != "") {
                        $("#FreshPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureFresh);
                    } else {
                        $("#FreshPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureShooter != null && data['head'][0].pictureShooter != "") {
                        $("#ShooterPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureShooter);
                    } else {
                        $("#ShooterPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureHydro != null && data['head'][0].pictureHydro != "") {
                        $("#HydroPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureHydro);
                    } else {
                        $("#HydroPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureDrum != null && data['head'][0].pictureDrum != "") {
                        $("#DrumPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureDrum);
                    } else {
                        $("#DrumPhotoSoccerBallsLight").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }




                    $("#testReviewedSize5").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    $("#testApprovedSize5").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content356").text(data['detail'][0].weight1);
                        $("#content357").text(data['detail'][0].weight2);
                        $("#content358").text(data['detail'][0].cir1);
                        $("#content359").text(data['detail'][0].cir2);
                        $("#content360").text(data['detail'][0].sphericity_sp1);
                        $("#content361").text(data['detail'][0].sphericity_sp2);
                        $("#content362").text(data['detail'][0].loss_of_pressure1);
                        $("#content363").text(data['detail'][0].loss_of_pressure2);
                        $("#content364").text(data['detail'][0].rebound_rt1);
                        $("#content365").text(data['detail'][0].rebound_rt2);
                        $("#content366").text(data['detail'][0].rebound_5_1);
                        $("#content367").text(data['detail'][0].rebound_5_2);
                        $("#content368").text(data['detail'][0].rebound_0_1);
                        $("#content369").text(data['detail'][0].rebound_0_2);
                        $("#content370").text(data['detail'][0].cir_st_1);
                        $("#content371").text(data['detail'][0].cir_st_2);
                        $("#content372").text(data['detail'][0].sphericity_st1);
                        $("#content373").text(data['detail'][0].sphericity_st2);
                        $("#content374").text(data['detail'][0].ch_of_pressure_st1);
                        $("#content375").text(data['detail'][0].ch_of_pressure_st2);
                        $("#content376").text(data['detail'][0].material_st1);
                        $("#content377").text(data['detail'][0].material_st2);
                        $("#content378").text(data['detail'][0].water_uptake_wrt1);
                        $("#content379").text(data['detail'][0].water_uptake_wrt2);
                        $("#content380").text(data['detail'][0].cir1_wrt);
                        $("#content381").text(data['detail'][0].cir2_wrt);
                        $("#content382").text(data['detail'][0].sphericity_wrt1);
                        $("#content383").text(data['detail'][0].sphericity_wrt2);
                        $("#content384").text(data['detail'][0].drum_test_pd1);
                        $("#content385").text(data['detail'][0].drum_test_pd2);
                        $("#content386").text(data['detail'][0].abraison_resistance_pd1);
                        $("#content387").text(data['detail'][0].abraison_resistance_pd2);
                        $("#content388").text(data['detail'][0].uv_light_fast_cst1);
                        $("#content389").text(data['detail'][0].uv_light_fast_cst2);
                        $("#content390").text(data['detail'][0].ozon_test_cst1);
                        $("#content391").text(data['detail'][0].ozon_test_cst2);
                        $("#content392").text(data['detail'][0].hydrolysis_lam1);
                        $("#content393").text(data['detail'][0].hydrolysis_lam2);
                        $("#content394").text(data['detail'][0].hydrolysis_color1);
                        $("#content395").text(data['detail'][0].hydrolysis_color2);
                    }



                    $('#soccerBallsSize3').modal('toggle');

                } else if (type == "SOCCER BALLS SMALL") {

                    $("#content396").text(data['head'][0].FactoryCode);
                    $("#content397").text(data['head'][0].labno);
                    $("#content398").text(data['head'][0].testdate);
                    $("#content399").text(data['head'][0].tastcat);
                    $("#content400").text(data['head'][0].fifiastemp);
                    $("#content401").text(data['head'][0].productionmonth);
                    $("#content402").text(data['head'][0].covermat);
                    $("#content403").text(data['head'][0].backing);
                    $("#content404").text(data['head'][0].bladder);
                    $("#content405").text(data['head'][0].balltype);
                    $("#content406").text(data['head'][0].testtype);
                    $("#content407").text(data['head'][0].mainmatcolor);
                    $("#content408").text(data['head'][0].printngscolors);
                    $("#content409").text(data['head'][0].result);
                    $("#content410").text(data['head'][0].Performedby);




                    $("#testReviewedSize5").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    $("#testApprovedSize5").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content411").text(data['detail'][0].weight1);
                        $("#content412").text(data['detail'][0].weight2);
                        $("#content413").text(data['detail'][0].cir1);
                        $("#content414").text(data['detail'][0].cir2);
                        $("#content415").text(data['detail'][0].sphericity_sp1);
                        $("#content416").text(data['detail'][0].sphericity_sp2);
                        $("#content417").text(data['detail'][0].loss_of_pressure1);
                        $("#content418").text(data['detail'][0].loss_of_pressure2);
                        $("#content419").text(data['detail'][0].rebound_rt1);
                        $("#content420").text(data['detail'][0].rebound_rt2);
                        $("#content421").text(data['detail'][0].rebound_5_1);
                        $("#content422").text(data['detail'][0].rebound_5_2);
                        $("#content423").text(data['detail'][0].rebound_0_1);
                        $("#content424").text(data['detail'][0].rebound_0_2);
                        $("#content425").text(data['detail'][0].cir_st_1);
                        $("#content426").text(data['detail'][0].cir_st_2);
                        $("#content427").text(data['detail'][0].sphericity_st1);
                        $("#content428").text(data['detail'][0].sphericity_st2);
                        $("#content429").text(data['detail'][0].ch_of_pressure_st1);
                        $("#content430").text(data['detail'][0].ch_of_pressure_st2);
                        $("#content431").text(data['detail'][0].material_st1);
                        $("#content432").text(data['detail'][0].material_st2);
                        $("#content433").text(data['detail'][0].water_uptake_wrt1);
                        $("#content434").text(data['detail'][0].water_uptake_wrt2);
                        $("#content435").text(data['detail'][0].cir1_wrt);
                        $("#content436").text(data['detail'][0].cir2_wrt);
                        $("#content437").text(data['detail'][0].sphericity_wrt1);
                        $("#content438").text(data['detail'][0].sphericity_wrt2);
                        $("#content439").text(data['detail'][0].drum_test_pd1);
                        $("#content440").text(data['detail'][0].drum_test_pd2);
                        $("#content441").text(data['detail'][0].abraison_resistance_pd1);
                        $("#content442").text(data['detail'][0].abraison_resistance_pd2);
                        $("#content443").text(data['detail'][0].uv_light_fast_cst1);
                        $("#content444").text(data['detail'][0].uv_light_fast_cst2);
                        $("#content445").text(data['detail'][0].ozon_test_cst1);
                        $("#content446").text(data['detail'][0].ozon_test_cst2);
                        $("#content447").text(data['detail'][0].hydrolysis_lam1);
                        $("#content448").text(data['detail'][0].hydrolysis_lam2);
                        $("#content449").text(data['detail'][0].hydrolysis_color1);
                        $("#content450").text(data['detail'][0].hydrolysis_color2);
                    }



                    $('#soccerBallsSmall').modal('toggle');

                } else if (type == "SOCIETY+SOCCERBALLS") {


                    $("#content451").text(data['head'][0].FactoryCode);
                    $("#content452").text(data['head'][0].labno);
                    $("#content453").text(data['head'][0].testdate);
                    $("#content454").text(data['head'][0].tastcat);
                    $("#content455").text(data['head'][0].fifiastemp);
                    $("#content456").text(data['head'][0].productionmonth);
                    $("#content457").text(data['head'][0].covermat);
                    $("#content458").text(data['head'][0].backing);
                    $("#content459").text(data['head'][0].bladder);
                    $("#content460").text(data['head'][0].balltype);
                    $("#content461").text(data['head'][0].testtype);
                    $("#content462").text(data['head'][0].mainmatcolor);
                    $("#content463").text(data['head'][0].printngscolors);
                    $("#content464").text(data['head'][0].result);
                    $("#content465").text(data['head'][0].Performedby);
                    $("#content465R").text(data['head'][0].remark);


                    $("#content465Society").text(data['head'][0].Temperature);
                    $("#content466Society").text(data['head'][0].Humidity);


                    $("#testReviewedSize5").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    $("#testApprovedSize5").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content466").text(data['detail'][0].weight1);
                        $("#content467").text(data['detail'][0].weight2);
                        $("#content468").text(data['detail'][0].cir1);
                        $("#content469").text(data['detail'][0].cir2);
                        $("#content470").text(data['detail'][0].sphericity_sp1);
                        $("#content471").text(data['detail'][0].sphericity_sp2);
                        $("#content472").text(data['detail'][0].loss_of_pressure1);
                        $("#content473").text(data['detail'][0].loss_of_pressure2);
                        $("#content474").text(data['detail'][0].rebound_rt1);
                        $("#content475").text(data['detail'][0].rebound_rt2);
                        $("#content476").text(data['detail'][0].rebound_5_1);
                        $("#content477").text(data['detail'][0].rebound_5_2);
                        $("#content478").text(data['detail'][0].rebound_0_1);
                        $("#content479").text(data['detail'][0].rebound_0_2);
                        $("#content480").text(data['detail'][0].cir_st_1);
                        $("#content481").text(data['detail'][0].cir_st_2);
                        $("#content482").text(data['detail'][0].sphericity_st1);
                        $("#content483").text(data['detail'][0].sphericity_st2);
                        $("#content484").text(data['detail'][0].ch_of_pressure_st1);
                        $("#content485").text(data['detail'][0].ch_of_pressure_st2);
                        $("#content486").text(data['detail'][0].material_st1);
                        $("#content487").text(data['detail'][0].material_st2);
                        $("#content488").text(data['detail'][0].water_uptake_wrt1);
                        $("#content489").text(data['detail'][0].water_uptake_wrt2);
                        $("#content490").text(data['detail'][0].cir1_wrt);
                        $("#content491").text(data['detail'][0].cir2_wrt);
                        $("#content492").text(data['detail'][0].sphericity_wrt1);
                        $("#content493").text(data['detail'][0].sphericity_wrt2);
                        $("#content494").text(data['detail'][0].drum_test_pd1);
                        $("#content495").text(data['detail'][0].drum_test_pd2);
                        $("#content496").text(data['detail'][0].abraison_resistance_pd1);
                        $("#content497").text(data['detail'][0].abraison_resistance_pd2);
                        $("#content498").text(data['detail'][0].uv_light_fast_cst1);
                        $("#content499").text(data['detail'][0].uv_light_fast_cst2);
                        $("#content500").text(data['detail'][0].ozon_test_cst1);
                        $("#content501").text(data['detail'][0].ozon_test_cst2);
                        $("#content502").text(data['detail'][0].hydrolysis_lam1);
                        $("#content503").text(data['detail'][0].hydrolysis_lam2);
                        $("#content504").text(data['detail'][0].hydrolysis_color1);
                        $("#content505").text(data['detail'][0].hydrolysis_color2);
                    }


                    $('#soccerBallsSocietySoccerBALLS').modal('toggle');

                } else {
                    $("#content32").text(data['head'][0].labno);
                    $("#content3222").text(data['head'][0].cssCode);
                    $("#workingNoIndoor").text(data['head'][0].WorkNo ? data['head'][0].WorkNo : 'WORKING #: Nil');
                    $("#articleNoIndoor").text(data['head'][0].ArtCode ? data['head'][0].ArtCode : 'Article Code: Nil');
                    $("#content33").text(data['head'][0].testdate);
                    $("#content34").text(data['head'][0].tastcat);
                    $("#content35").text(data['head'][0].fifiastemp);
                    $("#content36").text(data['head'][0].productionmonth);
                    $("#content37").text(data['head'][0].covermat);
                    $("#content38").text(data['head'][0].backing);
                    $("#content39").text(data['head'][0].bladder);
                    $("#content40").text(data['head'][0].balltype);
                    $("#content41").text(data['head'][0].testtype);
                    $("#content42").text(data['head'][0].mainmatcolor);
                    $("#content43").text(data['head'][0].printngscolors);
                    $("#content44").text(data['head'][0].result);
                    $("#content667").text(data['head'][0].remark);
                    $("#content45").text(data['head'][0].Performedby);



                    if (data['head'][0].result.toLowerCase().trim() == "urgent" || data['head'][0].remark.toLowerCase().trim() == "urgent") {

                        // $("#contentNoteFGT").text('As per the request of customer, testing is proceeded without condition.')
                        $("#contentNoteFGT").text('The above reported result is applicable to the sample as received at customer service section<br>Report was Electronically generated, Signature are not required<br>**: These Tests are out of scope of ISO/IEC 17025:2017')

                    } else {
                        $("#contentNoteFGT").text('The above reported result is applicable to the sample as received at customer service section<br>Report was Electronically generated, Signature are not required<br>**: These Tests are out of scope of ISO/IEC 17025:2017');

                    }






                    if (data['head'][0].pictureFresh != null && data['head'][0].pictureFresh != "") {
                        $("#FreshPhotoIndoor").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureFresh);
                    } else {
                        $("#FreshPhotoIndoor").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureShooter != null && data['head'][0].pictureShooter != "") {
                        $("#ShooterPhotoIndoor").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureShooter);
                    } else {
                        $("#ShooterPhotoIndoor").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureHydro != null && data['head'][0].pictureHydro != "") {
                        $("#HydroPhotoIndoor").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureHydro);
                    } else {
                        $("#HydroPhotoIndoor").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }
                    if (data['head'][0].pictureDrum != null && data['head'][0].pictureDrum != "") {
                        $("#DrumPhotoIndoor").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data['head'][0].pictureDrum);
                    } else {
                        $("#DrumPhotoIndoor").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                    }

                    $("#testReviewedFGT").text(data['head'][0].Reviewby ? data['head'][0].ReviewName : 'Pending');
                    $("#testApprovedFGT").text(data['head'][0].ApprovedBy ? data['head'][0].Approvalname : 'Pending');
                    if (data['detail'][0]) {
                        $("#content46").text(data['detail'][0].weight1);
                        $("#content47").text(data['detail'][0].weight2);
                        $("#content48").text(data['detail'][0].cir1);
                        $("#content49").text(data['detail'][0].cir2);
                        $("#content50").text(data['detail'][0].sphericity_sp1);
                        $("#content51").text(data['detail'][0].sphericity_sp2);
                        $("#content52").text(data['detail'][0].loss_of_pressure1);
                        $("#content53").text(data['detail'][0].loss_of_pressure2);
                        $("#content54").text(data['detail'][0].rebound_0_1);
                        $("#content55").text(data['detail'][0].rebound_0_2);
                        $("#content56").text(data['detail'][0].cir_st_1);
                        $("#content57").text(data['detail'][0].cir_st_2);
                        $("#content58").text(data['detail'][0].sphericity_sp1);
                        $("#content59").text(data['detail'][0].sphericity_sp2);
                        $("#content60").text(data['detail'][0].ch_of_pressure_st1);
                        $("#content61").text(data['detail'][0].ch_of_pressure_st2);
                        $("#content62").text(data['detail'][0].material_st1);
                        $("#content63").text(data['detail'][0].material_st2);
                        $("#content64").text(data['detail'][0].abraison_resistance_pd1);
                        $("#content65").text(data['detail'][0].abraison_resistance_pd2);
                    }






                    $('#soccerBallsIndoor').modal('toggle');

                }
            })

        });
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
            if (fileSelectStore) {
                // let fileReader = new FileReader();
                // fileReader.readAsBinaryString(fileSelectStore);
                // fileReader.onload = (event) => {
                //  let data = event.target.result;
                //  let workbook = XLSX.read(data,{type:"binary"})

                //  workbook.SheetNames.forEach(sheet => {
                //   let rowObject = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheet])
                //   console.log("Row Object", rowObject);
                //  });
                // }

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
                    var first_sheet_name = workbook.SheetNames[0];
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
                            let arrayBody = [element.TestNo, element.PONo, element.Requirement, element.Test, element.Results];
                            HeaderArray.push(arrayHead);
                            ChildArray.push(arrayBody)
                        } else {

                            let arrayBody = [testNumber, PONumber, element.Requirement, element.Test, element.Results];

                            ChildArray.push(arrayBody)
                        }




                    });

                }
            }

        });

        function Save_FGT_D() {
            //alert("Call Successfully!");
            let w1 = $("#w1").val();
            let w2 = $("#w2").val();
            let c1_sp = $("#c1_sp").val();
            let c2_sp = $("#c2_sp").val();
            let sp1_sp = $('#sp1_sp').val();
            let sp2_sp = $('#sp2_sp').val();
            let lp1 = $("#lp1").val();
            let lp2 = $("#lp2").val();
            let rrt1 = $("#rrt1").val();
            let rrt2 = $("#rrt2").val();
            let rrt51 = $("#rrt51").val();
            let rrt52 = $("#rrt52").val();
            let rrt01 = $("#rrt01").val();
            let rrt02 = $("#rrt02").val();
            let c1_dp = $("#c1_dp").val();
            let c2_dp = $("#c2_dp").val();
            let sp_dp1 = $("#sp_dp1").val();
            let sp_dp2 = $("#sp_dp2").val();
            let lp_dp1 = $("#lp_dp1").val();
            let lp_dp2 = $("#lp_dp2").val();
            let m1 = $("#m1").val();
            let m2 = $("#m2").val();
            let wup1 = $("#wup1").val();
            let wup2 = $("#wup2").val();
            let c1_wrt = $("#c1_wrt").val();
            let c2_wrt = $("#c2_wrt").val();
            let sp1_wrt = $("#sp1_wrt").val();
            let sp2_wrt = $("#sp2_wrt").val();
            let dt1 = $("#dt1").val();
            let dt2 = $("#dt2").val();
            let abr1 = $("#abr1").val();
            let abr2 = $("#abr2").val();
            let uvlf1 = $("#uvlf1").val();
            let uvlf2 = $("#uvlf2").val();
            let otr1 = $("#otr1").val();
            let otr2 = $("#otr2").val();
            let hl1 = $("#hl1").val();
            let hl2 = $("#hl2").val();
            let hcc1 = $("#hcc1").val();
            let hcc2 = $("#hcc2").val();
            let TID = $("#fgtH").val();
            // alert(c2_sp);


            // if(w1.length <= 0 || w2.length <= 0 || c1_sp.length <= 0 || c2_sp.length <= 0 || sp1_sp.length <= 0 || sp2_sp.length <= 0 
            // || lp1.length <= 0 || lp2.length <= 0 || rrt1.length <= 0 || rrt2.length <= 0 || rrt51.length <= 0 || rrt52.length <= 0 ||  
            // rrt01.length <= 0 || rrt02.length <= 0 || c1_dp.length <= 0 || c2_dp.length <= 0 || sp_dp1.length <= 0 || sp_dp2.length <= 0
            // || lp_dp1.length <= 0 || lp_dp2.length <= 0 || m1.length <= 0 || m2.length <= 0 || wup1.length <= 0 || wup2.length <= 0
            // || c1_wrt.length <= 0 || c2_wrt.length <= 0 || sp1_wrt.length <= 0 || sp2_wrt.length <= 0 || dt1.length <= 0 || dt2.length <= 0
            // || abr1.length <= 0 || abr2.length <= 0 || uvlf1.length <= 0 || uvlf2.length <= 0 || otr1.length <= 0 || otr2.length <= 0
            // || hl1.length <= 0 || hl2.length <= 0 || hcc1.length <= 0 || hcc2.length <= 0){
            //                 alert("All Fields are mandatroy");
            //             }
            //             else{



            //             }


            url = "<?php echo base_url(''); ?>FGT/FGT_D"
            // url = "<?php echo base_url(
                            ''
                        ); ?>FGT/FGT_D/"+ w1 + '/' +  w2 + '/'+ c1_sp + '/' + c2_sp + '/'+ sp1_sp + '/' + sp2_sp + '/'+ lp1 + '/' + lp2 + '/'+  rrt1 + '/' + rrt2 + '/'+ rrt51 + '/' +  rrt52 + '/' + rrt01 + '/' + rrt02 '/' + c1_dp + '/' + c2_dp '/' + sp_dp1 '/' + sp_dp2 '/' + lp_dp1 '/' + lp_dp2 '/' + m1 '/' + m2 '/' +  wup1 '/' +  wup2 '/' +  c1_wrt '/' +  c2_wrt '/' +  sp1_wrt '/' +  sp2_wrt '/' +  dt1 '/' +  dt2  '/' +  abr1  '/' +  abr2 '/' +  uvlf1 '/' +  uvlf2 '/' +   otr1 '/' +  otr2 '/' +   hl1 '/' +  hl2 '/' +  hcc1 '/' +   hcc2

            //alert(url)
            //alert(url);
            $.post(url, {
                "TID": TID,
                "w1": w1 ? w1 : 0,
                "w2": w2 ? w2 : 0,
                "c1_sp": c1_sp ? c1_sp : 0,
                "c2_sp": c2_sp ? c2_sp : 0,
                "sp1_sp": sp1_sp ? sp1_sp : 0,
                "sp2_sp": sp2_sp ? sp2_sp : 0,
                "lp1": lp1 ? lp1 : 0,
                "lp2": lp2 ? lp2 : 0,
                "rrt1": rrt1 ? rrt1 : 0,
                "rrt2": rrt2 ? rrt2 : 0,
                "rrt51": rrt51 ? rrt51 : 0,
                "rrt52": rrt52 ? rrt52 : 0,
                "rrt01": rrt01 ? rrt01 : 0,
                "rrt02": rrt02 ? rrt02 : 0,
                "c1_dp": c1_dp ? c1_dp : 0,
                "c2_dp": c2_dp ? c2_dp : 0,
                "sp_dp1": sp_dp1 ? sp_dp1 : 0,
                "sp_dp2": sp_dp2 ? sp_dp2 : 0,
                "lp_dp1": lp_dp1 ? lp_dp1 : 0,
                "lp_dp2": lp_dp2 ? lp_dp2 : 0,
                "m1": m1 ? m1 : 0,
                "m2": m2 ? m2 : 0,
                "wup1": wup1 ? wup1 : 0,
                "wup2": wup2 ? wup2 : 0,
                "c1_wrt": c1_wrt ? c1_wrt : 0,
                "c2_wrt": c2_wrt ? c2_wrt : 0,
                "sp1_wrt": sp1_wrt ? sp1_wrt : 0,
                "sp2_wrt": sp2_wrt ? sp2_wrt : 0,
                "dt1": dt1 ? dt1 : 0,
                "dt2": dt2 ? dt2 : 0,
                "abr1": abr1 ? abr1 : 0,
                "abr2": abr2 ? abr2 : 0,
                "uvlf1": uvlf1 ? uvlf1 : 0,
                "uvlf2": uvlf2 ? uvlf2 : 0,
                "otr1": otr1 ? otr1 : 0,
                "otr2": otr2 ? otr2 : 0,
                "hl1": hl1 ? hl1 : 0,
                "hl2": hl2 ? hl2 : 0,
                "hcc1": hcc1 ? hcc1 : 0,
                "hcc2": hcc2 ? hcc2 : 0,
            }, function(data) {
                alert("FGT Head inserted Successfully");
                location.reload();
            });


        }


        function Save_FGT_TestType() {
            let testtypes = $("#testtypes").val();



            url = "<?php echo base_url('FGT/FGT_H_Test_Type/') ?>"
            //alert("insertion Call");

            $.post(url, {
                'type': testtypes
            }, function(data) {
                alert("Test Type Added!");


                location.reload();
            })


            // $.ajax({
            //     url: url,
            //     type: 'post',
            //     data: testtypes,
            //     contentType: false,
            //     processData: false,
            //     success: function(data, status) {
            //         alert("FGT Details inserted Successfully");
            //         //console.log("Data Get from Function",data);
            //         location.reload();
            //     }
            // });

        }


        function Save_FGT_H() {

            var fd = new FormData();
            var fileFresh = $("#fresh")[0].files[0];
            var fileShooter = $("#shooter")[0].files[0];
            var fileHydro = $("#hydro")[0].files[0];
            var fileDrum = $("#drum")[0].files[0];
            fd.append('fileFresh', fileFresh);
            fd.append('fileShooter', fileShooter);
            fd.append('fileHydro', fileHydro);
            fd.append('fileDrum', fileDrum);

            //alert("I am Ammar");
            let fgttype = $("#fgttype").val();
            let lbno = $("#labno").val();

            let tdate = $("#tdate").val();
            let testcat = $("#testcat").val();
            let fifastump = $("#fifastump").val();
            let pmonth = $("#pmonth").val();
            let cmat = $("#cmat").val();
            let backing = $("#backing").val();
            let bladder = $("#bladder").val();
            let btype = $("#btype").val();
            let ttype = $("#ttype").val();
            let cssCode = $("#cssCode").val();
            let mmcolor = $("#mmcolor").val();
            let pcolors = $("#pcolors").val();
            let fn = $("#fn").val();
            let m = $("#m").val();
            // let inn = $("#inn").val();
            let pshape = $("#pshape").val();
            let rem = $("#rem").val();
            let result = $("#result").val();
            let testperformedby = $("#testperformedby").val();
            let note = $("#note").val();
            let article = $("#article").val();
            let size = $("#size").val();
            let tetype = $('#tetype').val();
            let department = $('#department').val();
            let fgttest = $("#fgttest").val();


            //alert(result)
            //alert(size);




            if (lbno.length <= 0 || btype.length <= 0 || mmcolor.length <= 0 || rem.length <= 0 || result.length <= 0 || testperformedby.length <= 0 ||
                fifastump.length <= 0 || fgttype.length <= 0 || tdate.length <= 0 || pmonth.length <= 0 || tetype.length <= 0 || testcat.length <= 0) {
                alert("All Fields are mandatroy");
            } else {


                let dataSend = [fgttype ? fgttype : null, lbno ? lbno : null, tdate ? tdate : null, testcat ? testcat : null, fifastump ? fifastump : 0, pmonth ? pmonth : null, cmat ? cmat : null, backing ? backing : null, bladder ? bladder : null, btype ? btype : null, ttype ? ttype : null, cssCode ? cssCode : null, mmcolor ? mmcolor : null, pcolors ? pcolors : null, result ? result : null, fn ? fn : null, m ? m : null, pshape ? pshape : null, rem ? rem : null, testperformedby ? testperformedby : null, note ? note : null, null, null, null, null, null, article ? article : null, size ? size : null, tetype ? tetype : null, department ? department : null, fgttest ? fgttest : null];

                fd.append('formData', dataSend);
                url = "<?php echo base_url(''); ?>FGT/FGT_H"

                //alert(size);

                // $.post(url,{"fgttype":fgttype?fgttype:null,"labno":labno?labno:null,"tdate":tdate?tdate:null, "testcat":testcat?testcat:null, "fifastum": fifastump? fifastump:0, "pmonth": pmonth? pmonth:null, "cmat": cmat ? cmat :null, "backing": backing ? backing :null, "bladder": bladder ? bladder :null, "btype": btype ? btype :null, "ttype": ttype ? ttype :null,"mmcolor": mmcolor ? mmcolor :null, "pcolors": pcolors ? pcolors :null, "result": result ? result :null,"fn": fn ? fn :null, "m": m ? m :null, "inn": inn ? inn :null, "pshape": pshape ? pshape :null, "rem": rem ? rem :null} ,function(data){
                //               //alert("Details   inserted Successfully");
                //               console.log("Data Get from Function",data);
                //            // location.reload();
                //               });

                $.ajax({
                    url: url,
                    type: 'post',
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function(data, status) {
                        alert("FGT Details inserted Successfully");
                        //console.log("Data Get from Function",data);
                        location.reload();
                    }
                });

            }

        }


        $("#customData").on('click', '.updbtn', function(e) {
            let id = this.id;
            let split_value = id.split(".");
            var TID = split_value[1];
            let reviewStatus;
            if ($(`#customreview${split_value[1]}`).is(":checked")) {
                reviewStatus = 1;
            } else {
                reviewStatus = 0;
            }
            let approvedStatus;
            if ($(`#customapproved${split_value[1]}`).is(":checked")) {
                approvedStatus = 1;
            } else {
                approvedStatus = 0;
            }

            url = "<?php echo base_url(
                        ''
                    ); ?>FGT/updated/" + reviewStatus + "/" + approvedStatus + "/" + TID

            $.get(url, function(data) {
                alert("Data Updated Successfully");
                location.reload();
            });

        });

        $(".updatebtn").click(function(e) {
            //alert("heloo");
            let id = this.id;
            //alert(id);
            let split_value = id.split(".");
            //alert(split_value);
            //console.log(split_value);
            var TID = split_value[1];
            //alert(`#issueDate.${split_value[1]}`);
            //alert(split_value[1]);
            //   let RID =split_value[1]);
            ///var reviewStatus = $(`#review${split_value[1]}`).val();
            ///var approved = $(`#review${split_value[1]}`).val();

            let reviewStatus;
            if ($(`#review${split_value[1]}`).is(":checked")) {
                reviewStatus = 1;
            } else {
                reviewStatus = 0;
            }
            let approvedStatus;
            if ($(`#approved${split_value[1]}`).is(":checked")) {
                approvedStatus = 1;
            } else {
                approvedStatus = 0;
            }

            url = "<?php echo base_url(
                        ''
                    ); ?>FGT/updated/" + reviewStatus + "/" + approvedStatus + "/" + TID

            //alert(url);
            $.get(url, function(data) {
                alert("Data Updated Successfully");
                location.reload();
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






        $("#sendHeaderValues").click(function(e) {
            e.preventDefault()

            $("#alertShown").css("display", "block");
            postData = {
                HeaderArray,
                ChildArray
            }

            url = '<?php echo base_url('LabController/addHeadData'); ?>'

            $.post(url, postData,
                function(data, status) {
                    setInterval(function() {
                        window.location.reload();
                    }, 6000);

                });
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


                    console.log(data);



                });
        });
    </script>
    <script>
        function printSoccerballsSize5() {

            var prtContent = document.getElementById("printSoccerBallsSize5");
            var WinPrint = window.open('', '', '');
            WinPrint.document.write(prtContent.innerHTML);
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }
    </script>
    <script>
        function getData() {
            css = $("#cssCode").val();
            $("#article").val(' ');
            $("#tetype").val(' ');
            $("#department").val(' ');
            $("#pcolors").val(' ');
            $("#pshape").val(' ');
            $("#backing").val(' ');
            $("#bladder").val(' ');
            $("#cmat").val(' ');
            $("#data").html(' ')
            url = "<?php echo base_url(''); ?>FGT/getData"
            $.post(url, {
                "css": css
            }, function(data) {
                console.log(data);
                $("#article").val(data['css'][0]['Article']);
                $("#tetype").val(data['css'][0]['TestType']);
                $("#department").val(data['css'][0]['Department']);
                $("#pcolors").val(data['css'][0]['PrintingColors']);
                $("#pshape").val(data['css'][0]['PanelShape']);
                $("#backing").val(data['css'][0]['L4Name']);
                $("#bladder").val(data['css'][1]['L4Name']);
                $("#cmat").val(data['css'][2]['L4Name']);

                let i = 1;
                console.log(data, "hello");
                let appendtable = '';
                appendtable += `<table class="table table-striped table-hover table-sm" id="ActivityData" >
                            <thead>
                                <tr  class="bg-primary-200"  style="color:white;">
                                <th>#SR</th>
                                 <th>Name  </th>  
                                   
                                </tr>
                            </thead>
                            <tbody>`
                data['cssTable'].forEach((element) => {
                    console.log("hello", element)

                    appendtable += `<tr>
                            <td>${i++} </td>
                            <td> ${element.Name} </td>
                               
                                    </tr>`
                })

                appendtable += `</tbody>

                            </table>`
                $("#data").html(appendtable)
                $('#ActivityData').dataTable({
                    responsive: false,
                    lengthChange: false,
                    dom:
                        /* --- Layout Structure 
                             --- Options
                             l               -              length changing input control
                             f              -              filtering input
                             t              -              The table!
                             i               -              Table information summary
                             p             -              pagination control
                             r              -              processing display element
                             B             -              buttons
                             R             -              ColReorder
                             S              -              Select

                             --- Markup
                             < and >                                                 - div element
                             <"class" and >                    - div with a class
                             <"#id" and >                       - div with an ID
                             <"#id.class" and >             - div with an ID and a class

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

            })
        }
    </script>


    </body>

    </html>


<?php
} ?>
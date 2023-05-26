<?php
if (!$this->session->has_userdata('user_id')) {
    redirect('');
} else {
?>

    <?php $this->load->view('includes/new_header'); ?>
    <?php
    $user_id = $this->session->userdata('user_id');

    ?>

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

                    <br><br>

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
                                                    <th><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>

                                                    <th></th>
                                                    <th></th>
                                                    <th style="font-size: x-large;font-weight:bold;padding:50px" id="exampleModalLabel">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>FGT REPORT FOR SOCCERBALLS INDOOR</th>
                                                    <th> </th>
                                                </tr>
                                            </table>
                                            <!-- <h4 class="modal-title text-center m-4" id="exampleModalLabel">FGT REPORT FOR SOCCERBALLS INDOOR</h4> -->
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
                                                                        <th rowspan="3" style="border: 1px solid">Note: <span id="contentNoteFGT"></span></th>

                                                                    </tr>




                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="col-12">
                                                            <table class="table table-striped col-12">
                                                                <tbody style="border: 1px solid;">
                                                                    <tr>
                                                                        <th style="border: 1px solid">Remarks:</th>
                                                                        <td>Test request obvious problems before,during and after tests Improvements</td>
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
                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedFGT"> </span>
                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>


                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                            <span id="testApprovedFGT"> </span>
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

                                                    <th></th>
                                                    <th></th>
                                                    <th style="font-size: x-large;font-weight:bold;padding:50px" id="exampleModalLabel">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>FGT REPORT FOR SOCCERBALLS SIZE 5</th>
                                                    <th> </th>
                                                </tr>
                                            </table>

                                            <!-- <h4 class="modal-title text-center m-4" id="exampleModalLabel">FGT REPORT FOR SOCCERBALLS SIZE 5</h4> -->
                                            <div class="container-fluid ">
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
                                                                        <td id="content82" style="border: 1px solid ">68.6</td>
                                                                        <td id="content83" style="border: 1px solid ">69.3</td>
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
                                                                        <td id="content84" style="border: 1px solid ">0.96</td>
                                                                        <td id="content85" style="border: 1px solid ">1.19</td>
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
                                                                        <td id="content86" style="border: 1px solid ">10</td>
                                                                        <td id="content87" style="border: 1px solid ">12</td>
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
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
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
                                                                        <td style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
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
                                                                        <td style="border: 1px solid ">max 0,5</td>
                                                                        <td style="border: 1px solid ">max 0,8</td>
                                                                        <td style="border: 1px solid ">max 1,0</td>
                                                                        <td id="content104" style="border: 1px solid "></td>
                                                                        <td id="content105" style="border: 1px solid "></td>
                                                                        <td style="border: 1px solid "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="border: 1px solid ">Dev in Sphericity in ref. to 100% roundness CSM</td>
                                                                        <td style="border: 1px solid ">FGT-40<br>FGT-37</td>
                                                                        <td style="border: 1px solid ">after 300 cycles</td>
                                                                        <td style="border: 1px solid ">%</td>
                                                                        <td style="border: 1px solid ">max 1,5</td>
                                                                        <td style="border: 1px solid ">max 1,6</td>
                                                                        <td style="border: 1px solid ">max 1,6</td>
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
                                                                        <th rowspan="3" style="border: 1px solid">Note:<span id="contentNoteSize5"></span></th>

                                                                    </tr>




                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="col-12">
                                                            <table class="table table-striped col-12">
                                                                <tbody style="border: 1px solid;">
                                                                    <tr>
                                                                        <th style="border: 1px solid">Remarks:</th>
                                                                        <td>Test request obvious problems before,during and after tests Improvements</td>
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
                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedSize5"> </span>
                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>


                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                            <span id="testApprovedSize5"> </span>
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

                                                        <img src="<?php echo base_url() ?>assets/img/frwd.jpg" class="ml-5" alt="report_logo" width="250px" height="100px" />



                                                    </div>
                                                    <div class="col-sm-4">
                                                        <img src="<?php echo base_url() ?>assets/img/LabLogo.jpg" alt="report_logo" width="250px" height="100px" />
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
                                                        <th> <label class="form-control" for="TestNo"><span style="font-size: medium;font-weight:bold; width:50%"> Test No:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="TestNoCSM"> </span></label></th>
                                                        <th><label class="form-control" for="date"><span style="font-size: medium;font-weight:bold"> Date:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="dateCSM"> </span></label></th>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="form-control" for="modelName"><span style="font-size: medium;font-weight:bold; width:50%"> Model Name:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="modelNameCSM"> </span> </label></th>
                                                        <th><label class="form-control" for="cssCode"><span style="font-size: medium;font-weight:bold"> CSS Code:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="cssCodeCSM"> </span></label></th>
                                                    </tr>

                                                    <tr>
                                                        <th><label class="form-control" for="pressure"><span style="font-size: medium;font-weight:bold; width:50%"> Pressure:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="pressureCSM"> </span> </label></th>
                                                        <th><label class="form-control" for="tempHumidity"><span style="font-size: medium;font-weight:bold"> Temp Humidity:</span>&nbsp;&nbsp;&nbsp;<span style="font-size: medium" id="tempHumidityCSM"> </span></label></th>
                                                    </tr>

                                                    <tr>
                                                        <th><label class="form-control" for="article"><span style="font-size: medium;font-weight:bold; width:50%"> Article:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="articleCSM"> </span> </label></th>
                                                        <th><label class="form-control" for="category"><span style="font-size: medium;font-weight:bold"> Category:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="categoryCSM"> </span> </label></th>

                                                    </tr>
                                                    <tr>
                                                        <th><label class="form-control" for="size"><span style="font-size: medium;font-weight:bold"> Size:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="sizeCSM"> </span> </label></th>
                                                        <th><label class="form-control" for="testedFor"><span style="font-size: medium;font-weight:bold"> Tested for:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="testedForCSM"> </span> </label></th>

                                                    </tr>
                                                    <tr>
                                                        <th><label class="form-control" for="note"><span style="font-size: medium;font-weight:bold"> Note:</span>&nbsp;&nbsp;&nbsp; <span style="font-size: medium" id="noteCSM"> </span> </label></th>
                                                        <th></th>

                                                    </tr>
                                                </table>


                                                <div class="col-md-12 mt-3">
                                                    <table class="table table-bordered" style="border:2px solid black">
                                                        <thead>
                                                            <tr style="border:2px solid black">

                                                                <th style="text-align: center;font-size:large;border:2px solid black">Weight (gm)</th>
                                                                <th style="text-align: center;font-size:large;border:2px solid black">CircumferenceMin</th>
                                                                <th style="text-align: center;font-size:large;border:2px solid black">CircumferenceMax</th>
                                                                <th style="text-align: center;font-size:large;border:2px solid black">Deviation</th>

                                                                <th style="text-align: center;font-size:large;border:2px solid black">Rebount Test</th>
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

                                                    <th></th>
                                                    <th></th>
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
                                                                        <th rowspan="3" style="border: 1px solid">Note:<span id="contentNoteSoccer"></span></th>

                                                                    </tr>



                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="col-12">
                                                            <table class="table table-striped col-12">
                                                                <tbody style="border: 1px solid;">
                                                                    <tr>
                                                                        <th style="border: 1px solid">Remarks:</th>
                                                                        <td id="content31"></td>
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
                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedSoccer"> </span>
                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>


                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                            <span id="testApprovedSoccer"> </span>
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

                                            <div class="row">
                                                <table class="table">
                                                    <tr>
                                                        <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="150px" height="100px" /></th>

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
                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewed"> </span>
                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>


                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                            <span id="testApproved"> </span>
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

                    <!-- Modal -->
                    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(255,10,10);color:white">
                                    <h5 class="modal-title" id="exampleModalCenterTitle" style="font-size:xx-large;">Alert!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card" id="printCard">
                                        <div class="card-body">

                                            <h3>Hello <b><?php echo $this->session->userdata('Username');  ?></b> &#128522;</h3>
                                            <h4>The report isn't uploaded by Lab Team yet &#128577;</h4>
                                            <h4>Kindly wait for the lab team to upload the results then you will be able to see the report!</h4>
                                            <h3><b>Thanks in Advance</b> &#10084;</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                                <div class="card-footer text-muted">
                                    Forward Sports Pvt. Ltd.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Model Carton HTML -->

                    <div class="modal fade bd-example-modal-lg" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(255,10,10);color:white">
                                    <div class="icon-box">
                                        Hello
                                    </div>
                                    <button type="button" class="close" style="color: white;font-size:xx-large" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card" id="printCard">
                                        <div class="card-body">



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

                    <!-- End Model Error HTML -->
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
                                                <table class="table">
                                                    <tr>
                                                        <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="150px" height="100px" /></th>

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
                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedFoam"> </span>
                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>


                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                            <span id="testApprovedFoam"> </span>
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
                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedFabric"> </span>
                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>


                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                            <span id="testApprovedFabric"> </span>
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
                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedMaterial"> </span>
                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>


                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                            <span id="testApprovedMaterial"> </span>
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
                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedThread"> </span>
                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>


                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                            <span id="testApprovedThread"> </span>
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
                                    <div class="card" id="printCardMSThread">
                                        <div class="card-body">

                                            <div class="row">
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
                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedMSThread"> </span>
                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>


                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                            <span id="testApprovedMSThread"> </span>
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

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="printDiv('printCardMSThread')" data-dismiss="modal">Print Report</button>
                                </div>
                                <div class="card-footer text-muted">
                                    Forward Sports Pvt. Ltd.
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- End Model MS Thread HTML -->



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
                                                        <th><img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="report_logo" width="150px" height="100px" /></th>

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
                                                        <tbody id="DetailsTestBlader">

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
                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedBlader"> </span>
                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>


                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                            <span id="testApprovedBlader"> </span>
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
                                    <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
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
                                                        <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span id="testReviewedFGT"> </span>
                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>


                                                        <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                                                            <span id="testApprovedFGT"> </span>
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

                    <!-- Model FGT TESTING HTML -->
                    <?php include('FGT_Models/fgtTestingModel.php') ?>
                    <?php include('FGT_Models/fgtTestingAirlessMiniModel.php') ?>
                    <?php include('FGT_Models/fgtTestingAdhesionModel.php') ?>
                    <?php include('FGT_Models/fgtTestingCSMModel.php') ?>
                    <!-- End Model FGT TESTING  HTML -->


                    <div class="row">
                        <div class="col-md-12">

                            <div class="col-md-12">

                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            <i class='subheader-icon fal fa-vial'></i> Test Request</span>
                                        </h2>

                                    </div>


                                    <div class="panel-container show">

                                        <div class="panel-content">
                                            <ul class="nav nav-pills" role="tablist">
                                                <li class="nav-item"><a class="nav-link d-none" data-toggle="tab" href="#tab_direction-1">Request Form</a></li>

                                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab_direction-2" hidden>Generated Requests</a></li>


                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-3">Requests Status</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-4">Production</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-5">Development</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-6">Material</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-7">Trial</a></li>

                                            </ul>

                                            <div class="tab-content py-3">

                                                <div class="tab-pane fade d-none" id="tab_direction-1" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <h1 style="width: 100%;background-color: rgb(83,78,130);color:white;font-weight:bolder;padding:10px;text-align:center">Testss Request Generation Form</h1>
                                                            <div class="modal-body" style="border: 2px solid black;padding:10px">

                                                                <div style="display:none" class="row">
                                                                    <div class="col-md-12">
                                                                        <span style="font-size:20px" class="text-danger text-center"><b>Note:</b>
                                                                            (Attention here! Please Fill All Fields Before Generating Test Request
                                                                            & after saving test request article will be shown below in select box )</span>
                                                                    </div>
                                                                </div>

                                                                <form name="formDepartment" id="myformDepartment" method="POST" action="<?php echo base_url(
                                                                                                                                            ''
                                                                                                                                        ); ?>LabController/AddRequest">
                                                                    <input type="hidden" name="Id" id="IdValue" value="">
                                                                    <button type="button" class="btn btn-info btn-pills" id="Addnew" onclick="Refresh()">Add New Request</button>

                                                                    <div class="row" style="display:flex">


                                                                        <div class="form-group col-md-6">
                                                                            <label for="inputEmail4">Request No.:</label>
                                                                            <?php
                                                                            // print_r($MAXID[0]['MaXID']);

                                                                            if ($this->session->has_userdata('MAXID')) {
                                                                                $RID = $this->session->userdata('MAXID');
                                                                            } else {
                                                                                $RID = '';
                                                                            }

                                                                            ?>
                                                                            <input type="text" style="text-align: center;" id="RID" class="form-control" name="RID" value="<?php echo $RID; ?>" required="required" readonly>
                                                                        </div>
                                                                        <?php

                                                                        // $RID = $this->session->userdata('MAXID');
                                                                        //                                                                     print_r($RID);
                                                                        if ($this->session->has_userdata('MAXID')) {
                                                                            if ($RData) {
                                                                                //$Request_Date = $RData[0]['Approved'];
                                                                                $Type = $RData[0]['Type'];
                                                                                $TestType = $RData[0]['TestType'];
                                                                                $Sample_RequestDate = $RData[0]['Sample_RequestDate'];
                                                                                $Factory_Code = $RData[0]['Factory_Code'];
                                                                                $PONo = $RData[0]['PONo'];
                                                                                $SupplierName = $RData[0]['SupplierName'];
                                                                                $Quantity_Issued = $RData[0]['Quantity_Issued'];
                                                                                $MaterialType = $RData[0]['MaterialType'];

                                                                        ?>
                                                                                <div class="col-md-6">
                                                                                    <label class="form-contol" for="customFile">Request Date</label>
                                                                                    <input type="text" class="form-control" id="Date" value="<?php echo $Sample_RequestDate; ?>">
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <label class="form-contol" for="customFile">Type</label>
                                                                                    <select class="form-control" id="type" name="type">

                                                                                        <option value="<?php echo $Type; ?>"><?php echo $Type; ?></option>

                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <label class="form-contol" for="customFile">Test Catagory</label>
                                                                                    <select class="form-control" id="Test" name="Test">

                                                                                        <option value="<?php echo $TestType; ?>"><?php echo $TestType; ?></option>

                                                                                    </select>
                                                                                    <input type="text" hidden="true" value="<?php echo $TestType; ?>" id="testCatagpryData" name="typeCatagory" />
                                                                                </div>
                                                                                <div class="col-md-6 mt-2">
                                                                                    <label for="sel1">Select Factory Code :</label>

                                                                                    <select class="form-control" id="FC" name="FC">

                                                                                        <option value="<?php echo $Factory_Code; ?>"><?php echo $Factory_Code; ?></option>

                                                                                    </select>

                                                                                </div>
                                                                                <?php
                                                                                if ($PONo) {
                                                                                ?>
                                                                                    <div style="display:none" id="PoNoShow" class="col-md-6 ">
                                                                                        <label class="form-contol" for="customFile">PO # :</label>
                                                                                        <input type="text" class="form-control" value="<?php echo $PONo; ?>" id="po" name="po">
                                                                                    </div>
                                                                                    <div style="display:block" id="supplierNShow" class="col-md-6 ">
                                                                                        <label class="form-contol" for="customFile">Supplier Name :</label>


                                                                                        <input type="text" class="form-control" value="<?php echo $SupplierName; ?>" id="supplier" name="supplier">
                                                                                    </div>
                                                                                    <div class="col-md-4 ">
                                                                                        <div class="form-group">
                                                                                            <label>Material Type</label>
                                                                                            <input type="text" class="form-control" value="<?php echo $MaterialType; ?>" id="MaterialType" name="MaterialType">
                                                                                        </div>
                                                                                    </div>
                                                                                <?php
                                                                                }
                                                                                ?>

                                                                                <div class="col-md-6 mt-2">
                                                                                    <label class="form-contol" for="customFile">Quantity Issued</label>
                                                                                    <input type="number" class="form-control" value="<?php echo $Quantity_Issued; ?>" id="qIssued" name="qIssued">
                                                                                </div>
                                                                                <div class="col-md-8">

                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="form-group">
                                                                                        <div>


                                                                                            <button type="button" class="btn btn-primary m-3 " id="save">Save</button>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            <?php
                                                                            }
                                                                        } else {
                                                                            ?>
                                                                            <div class="col-md-6">
                                                                                <label class="form-contol" for="customFile">Request Date</label>
                                                                                <input type="date" class="form-control" id="rDate" name="rDate">
                                                                            </div>
                                                                            <div class="col-md-6">

                                                                                <label class="form-contol" for="customFile">Type</label>
                                                                                <select class="form-control" id="type" name="type" onchange="Callpo()">
                                                                                    <option value="" selected disabled>Select Type</option>
                                                                                    <option value="Production">Production</option>
                                                                                    <option value="Development">Development</option>
                                                                                    <option value="Material">Material</option>
                                                                                    <option value="Trial">Trial</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label class="form-contol" for="customFile">Test Catagory</label>
                                                                                <select class="form-control" id="typeCatagory" name="typeCatagory">
                                                                                    <option value="" selected disabled>Select Type</option>
                                                                                    <option value="Material Test">Material Test</option>
                                                                                    <option value="FGT Test">FGT Test</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-6 mt-2">
                                                                                <label for="sel1">Select Factory Code :</label>
                                                                                <select class="form-control" id="fCode" name="fCode">
                                                                                    <option value="">Select one of the following</option>
                                                                                    <option value="B34001">B34001</option>
                                                                                    <option value="B34002">B34002</option>
                                                                                    <option value="B34003">B34003</option>
                                                                                    <option value="B34004">B34004</option>
                                                                                    <option value="B34005">B34005</option>
                                                                                    <option value="B34006">B34006</option>
                                                                                    <option value="B34007">B34007</option>
                                                                                </select>
                                                                            </div>
                                                                            <div style="display:block" id="PoNoShow" class="col-md-6 Poinfo">
                                                                                <label class="form-contol" for="customFile">PO # :</label>
                                                                                <input type="text" class="form-control" id="po" name="po">
                                                                            </div>
                                                                            <div style="display:block" id="supplierNShow" class="col-md-6 Poinfo">
                                                                                <label class="form-contol" for="customFile">Supplier Name :</label>
                                                                                <!-- <input type="text" class="form-control" id="supplier" name="supplier"> -->
                                                                                <select class="form-control js-example-basic-single" id="supplier" name="supplier" style="width: 100%">
                                                                                    <?php
                                                                                    foreach ($supplier as $keys) {

                                                                                    ?>
                                                                                        <option value="<?php echo $keys['CompanyName']; ?>"><?php echo $keys['CompanyName']; ?></option>
                                                                                    <?php

                                                                                    }
                                                                                    ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4 Poinfo">
                                                                                <div class="form-group">
                                                                                    <label>Select Material Type</label>
                                                                                    <select class="form-control" id="testType">
                                                                                        <option value="" selected>Select Material Type</option>
                                                                                        <option value="Carton Test">Carton Test</option>
                                                                                        <option value="Foam">Foam</option>
                                                                                        <option value="Fabric">Fabric</option>
                                                                                        <option value="Thread">Thread</option>
                                                                                        <option value="SR Blader">SR Blader</option>
                                                                                        <option value="Material">Material</option>
                                                                                        <option value="FGT Report">FGT Report</option>
                                                                                        <option value="MS Thread">MS Thread</option>
                                                                                        <option value="MS Material">MS Material</option>
                                                                                        <option value="Poly Bag">Poly Bag</option>
                                                                                        <option value="Adhesion">Adhesion</option>
                                                                                        <option value="CSM">CSM</option>

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 mt-2">
                                                                                <label class="form-contol" for="customFile">Quantity Issued</label>
                                                                                <input type="number" class="form-control" id="qIssued" name="qIssued">
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="form-group">
                                                                                    <div class="m-2">
                                                                                        <button type="button" class="btn btn-primary m-3" id="save">Save</button>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                </form>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3"></div>

                                                    </div>
                                                </div>

                                                <div class="tab-pane fade d-none" id="tab_direction-1" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">

                                                            <div class="modal-body" style="padding:10px">
                                                                <form name="formDepartment" id="myformDepartment" method="POST" action="<?php echo base_url(); ?>LabController/AddRequest">
                                                                    <input type="hidden" name="Id" id="IdValue" value="">

                                                                    <div class="row" style="display:flex">


                                                                        <?php
                                                                        // print_r($RData);
                                                                        if ($this->session->has_userdata('MAXID')) {
                                                                            if ($RData[0]['Type'] == 'Production') {
                                                                                //echo "I am here";
                                                                        ?>




                                                                                <div class="col-md-6 mt-2">


                                                                                    <div class="form-group">
                                                                                        <label for="sel1">Article Selection</label><br>
                                                                                        <select class="form-control" id="selection" name="selection" onchange="toggleArticle()">
                                                                                            <option value="" disabled>Select one of the following</option>
                                                                                            <option value="">Select one of the following</option>
                                                                                            <option value="Auto">Auto</option>
                                                                                            <option value="Manual">Manual</option>


                                                                                        </select>

                                                                                    </div>


                                                                                </div>

                                                                                <div class="col-md-6 mt-2" style="display: none;" id="autoArticle">
                                                                                    <div class="form-group">

                                                                                        <label for="sel1">Select Article :</label><br>
                                                                                        <select class="form-control" id="ArtCodeAuto" name="ArtCodeAuto">
                                                                                            <option value="">Select one of the following</option>
                                                                                            <?php foreach ($Articles as $Key) { ?>

                                                                                                <option value="<?php echo $Key['ArtCode']; ?>"><?php echo $Key['ArtCode']; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 mt-2" id="manualArticle">


                                                                                    <div class="form-group">
                                                                                        <label for="sel1">Article</label><br>
                                                                                        <input class="form-control" id="article" name="article" />

                                                                                    </div>


                                                                                </div>

                                                                            <?php
                                                                            }
                                                                            if ($RData[0]['Type'] == 'Development') {
                                                                                //echo "I am here";
                                                                            ?>




                                                                                <div class="col-md-6 mt-2">


                                                                                    <div class="form-group">
                                                                                        <label for="sel1">Article Selection</label><br>
                                                                                        <select class="form-control" id="selection" name="selection" onchange="toggleArticle()">
                                                                                            <option value="" disabled>Select one of the following</option>
                                                                                            <option value="">Select one of the following</option>
                                                                                            <option value="Auto">Auto</option>
                                                                                            <option value="Manual">Manual</option>


                                                                                        </select>

                                                                                    </div>


                                                                                </div>

                                                                                <div class="col-md-6 mt-2" style="display: none;" id="autoArticle">
                                                                                    <div class="form-group">

                                                                                        <label for="sel1">Select Article :</label><br>
                                                                                        <select class="form-control" id="ArtCodeAuto" name="ArtCodeAuto">
                                                                                            <option value="">Select one of the following</option>
                                                                                            <?php foreach ($Articles as $Key) { ?>

                                                                                                <option value="<?php echo $Key['ArtCode']; ?>"><?php echo $Key['ArtCode']; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 mt-2" id="manualArticle">


                                                                                    <div class="form-group">
                                                                                        <label for="sel1">Article</label><br>
                                                                                        <input class="form-control" id="article" name="article" />
                                                                                    </div>


                                                                                </div>

                                                                            <?php
                                                                            }
                                                                        }
                                                                        if ($this->session->has_userdata('MAXID')) {
                                                                            if ($RData[0]['Type'] == 'Material') {
                                                                            ?>
                                                                                <div id="ItemShow" class="col-md-6">

                                                                                    <label class="form-contol" for="customFile">Item Name :</label>

                                                                                    <select class="form-control js-example-basic-single" id="name" name="name">
                                                                                        <option value="">Select one of the following</option>
                                                                                        <?php foreach ($GetItems as $items) { ?>
                                                                                            <option value="<?php echo $items['Code']; ?>"><?php echo $items['L4Name']; ?></option>
                                                                                        <?php } ?>


                                                                                    </select>
                                                                                </div>
                                                                        <?php
                                                                            }
                                                                        }

                                                                        ?>

                                                                        <?php
                                                                        //Print_r($getTestTypes);
                                                                        ?>

                                                                        <div class="col-md-6 mt-2">
                                                                            <div class="form-group mb-2">
                                                                                <label for="sel1">Test Type</label><br>
                                                                                <select class="js-example-basic-single" id="tType" name="tType" style="width: 100%">
                                                                                    <option value="">Select one of the following</option>
                                                                                    <?php
                                                                                    if ($getTestTypes) {


                                                                                    ?>
                                                                                        <?php foreach ($getTestTypes as $Key) { ?>

                                                                                            <option value="<?php echo $Key['TestID']; ?>"><?php echo $Key['Name']; ?></option>
                                                                                    <?php }
                                                                                    }

                                                                                    ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>



                                                                        <div class="col-md-6 ">
                                                                            <div class="form-group">
                                                                                <div>
                                                                                    <button type="button" class="btn btn-success " id="AddItems">Add Items</button>


                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6 ">
                                                                            <div class="form-group">
                                                                                <div>
                                                                                    <button type="button" class="btn btn-success " id="Addtest">Add Test</button>
                                                                                    <!-- <button type="button" class="btn btn-success " id="Alltest">Load All Test</button> -->


                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 ">
                                                                    <?php
                                                                    //Echo $RData[0]['PONo'];

                                                                    if ($RData[0]['PONo'] == '0') {
                                                                    ?>
                                                                        <table class="table table-striped table-hover table-sm">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Article Code</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                if ($this->session->has_userdata('MAXID')) {
                                                                                    foreach ($getDetails as $keys) {
                                                                                ?>
                                                                                        <tr>


                                                                                            <td><?php echo $keys['Article']; ?>

                                                                                            </td>
                                                                                            <td> <button id="undo.<?php echo $keys['DTID']; ?>" value="<?php echo $keys['DTID']; ?>" type="button" class="btn btn-xs btn-danger undoitemsbtn">Undo</button></td>

                                                                                        </tr>
                                                                                <?php
                                                                                    }
                                                                                }
                                                                                ?>
                                                                        </table>
                                                                    <?php
                                                                    } else {

                                                                    ?>
                                                                        <table class="table table-striped table-hover table-sm">
                                                                            <thead>

                                                                                <tr>

                                                                                    <th>Item Name</th>
                                                                                    <th>Action</th>






                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                if ($this->session->has_userdata('MAXID')) {
                                                                                    foreach ($getDetails as $keys) {
                                                                                ?>
                                                                                        <tr>

                                                                                            <td><?php echo $keys['L4Name']; ?>

                                                                                            </td>

                                                                                            <td> <button id="undo.<?php echo $keys['DTID']; ?>" value="<?php echo $keys['DTID']; ?>" type="button" class="btn btn-xs btn-danger undoitemsbtn">Undo</button></td>
                                                                                        </tr>
                                                                                <?php
                                                                                    }
                                                                                }
                                                                                ?>
                                                                        </table>

                                                                    <?php

                                                                    }

                                                                    ?>
                                                                </div>
                                                                <div class="col-md-6 ">
                                                                    <?php
                                                                    //Echo $RData[0]['PONo'];

                                                                    if ($RData[0]['PONo'] == '0') {
                                                                    ?>
                                                                        <table class="table table-striped table-hover table-sm" id="ActivityData3">
                                                                            <thead>

                                                                                <tr>
                                                                                    <th>Test Name</th>

                                                                                    <th>Status</th>
                                                                                    <th>Action</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                if ($this->session->has_userdata('MAXID')) {
                                                                                    foreach ($TypeDetails as $keys) {
                                                                                ?>
                                                                                        <tr>

                                                                                            <td><?php echo $keys['Name']; ?>

                                                                                            </td>

                                                                                            <td> <span class="badge badge-warning p-1"><?php echo $keys['Status']; ?></span></td>
                                                                                            <td> <button id="undo.<?php echo $keys['TID']; ?>" value="<?php echo $keys['TID']; ?>" type="button" class="btn btn-xs btn-danger undobtn">Undo</button></td>
                                                                                        </tr>
                                                                                <?php
                                                                                    }
                                                                                }
                                                                                ?>
                                                                        </table>
                                                                    <?php
                                                                    } else {

                                                                    ?>
                                                                        <table class="table table-striped table-hover table-sm" id="ActivityData3">
                                                                            <thead>

                                                                                <tr>

                                                                                    <th>Test Name</th>
                                                                                    <th>Status</th>
                                                                                    <th>Action</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                if ($this->session->has_userdata('MAXID')) {
                                                                                    foreach ($TypeDetails as $keys) {
                                                                                ?>
                                                                                        <tr>






                                                                                            <td><?php echo $keys['Name']; ?>

                                                                                            </td>

                                                                                            <td> <span class="badge badge-warning p-1"><?php echo $keys['Status']; ?></span></td>
                                                                                            <td> <button id="undo.<?php echo $keys['TID']; ?>" value="<?php echo $keys['TID']; ?>" type="button" class="btn btn-xs btn-danger undobtn">Undo</button></td>
                                                                                        </tr>
                                                                                <?php
                                                                                    }
                                                                                }
                                                                                ?>
                                                                        </table>

                                                                    <?php

                                                                    }

                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3"></div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="tab-pane fade show active" id="tab_direction-2" role="tabpanel">


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
                                                                    <div class="col-md-3"><input class="form-control" type="date" id="startDate" /></div>
                                                                    <div class="col-md-3"><input class="form-control" type="date" id="endDate" /></div>
                                                                    <div class="col-md-3"><button class="btn btn-primary" id="searchRange1">Search</button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel-container show">
                                                            <div class="panel-content">
                                                                <div class="demo-v-spacing" id="defaultTable">
                                                                    <table id="table" class="table table-bordered table-hover table-responsive table-striped w-100">
                                                                        <thead class="bg-primary-200">
                                                                            <tr style="color:white;">
                                                                                <th>Item Type</th>
                                                                                <th>Test No </th>
                                                                                <th>CSS No </th>
                                                                                <th> Date </th>
                                                                                <th>Item Name </th>
                                                                                <th>PO # </th>
                                                                                <th>Receiving Date </th>
                                                                                <th>Supplier</th>
                                                                                <!-- <th>Supplier Refrence</th> -->
                                                                                <th>Quantity </th>

                                                                                <th>Result </th>
                                                                                <th>Generated By </th>
                                                                                <th>Review Status </th>
                                                                                <th>Review By </th>
                                                                                <th>Approved Status </th>
                                                                                <th>Approved By </th>
                                                                                <th>Actions</th>

                                                                                <!-- <th>Comparison</th> -->
                                                                                <th>Development Report</th>



                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php
                                                                            //$this->load->model('LabModel', 'l');
                                                                            //print_r($Labtest);


                                                                            foreach ($Labtest as $Key) {

                                                                                $Approvalname = $Key['Approvalname'];
                                                                                $ReviewName = $Key['reviewName'];
                                                                                $ReviewStatus = $Key['ReviewStatus'];
                                                                                $ApprovedStatus = $Key['ApprovedStatus'];
                                                                            ?>
                                                                                <tr>
                                                                                    <td><?php echo $Key['ItemType']; ?></td>
                                                                                    <td><?php echo $Key['TestNO']; ?></td>
                                                                                    <td><?php echo $Key['CSSNO']; ?></td>
                                                                                    <td><?php echo $Key['Date']; ?></td>
                                                                                    <td><?php echo $Key['Size']; ?></td>
                                                                                    <td><?php echo $Key['PO']; ?></td>
                                                                                    <td><?php echo $Key['Receiving_Date']; ?></td>
                                                                                    <td><?php echo $Key['Supplier_Name']; ?></td>
                                                                                    <!-- <td><?php echo $Key['Supplier_Ref']; ?></td> -->
                                                                                    <td><?php echo $Key['Quantity_Carton']; ?></td>

                                                                                    <td><?php echo $Key['Result']; ?></td>
                                                                                    <td><?php echo $Key['LoginName']; ?></td>

                                                                                    <td>
                                                                                        <?php




                                                                                        if ($ReviewStatus == '1') {
                                                                                        ?>
                                                                                            <div class="custom-control custom-switch">

                                                                                                <?php
                                                                                                if ($RS == 1) {
                                                                                                ?>
                                                                                                    <input type="checkbox" class="custom-control-input" id="review<?php echo $Key['TID']; ?>" checked="">
                                                                                                <?php

                                                                                                } else {
                                                                                                ?>
                                                                                                    <input type="checkbox" disabled="disabled" class="custom-control-input" id="review<?php echo $Key['TID']; ?>" checked="">
                                                                                                <?php
                                                                                                }
                                                                                                ?>
                                                                                                <label class="custom-control-label" for="review<?php echo $Key['TID']; ?>"></label>
                                                                                            </div>
                                                                                        <?php
                                                                                        } else {
                                                                                        ?>
                                                                                            <div class="custom-control custom-switch">
                                                                                                <?php
                                                                                                if ($RS == 1) {
                                                                                                ?>
                                                                                                    <input type="checkbox" class="custom-control-input" id="review<?php echo $Key['TID']; ?>" checked="">
                                                                                                <?php

                                                                                                } else {
                                                                                                ?>
                                                                                                    <input type="checkbox" disabled="disabled" class="custom-control-input" id="review<?php echo $Key['TID']; ?>" checked="">
                                                                                                <?php
                                                                                                }
                                                                                                ?>
                                                                                                <label class="custom-control-label" for="review<?php echo $Key['TID']; ?>"></label>
                                                                                            </div>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </td>
                                                                                    <td>

                                                                                        <?php
                                                                                        if ($ReviewStatus == '1') {
                                                                                        ?>
                                                                                            <?php echo $ReviewName; ?>
                                                                                        <?php
                                                                                        } else {
                                                                                        ?>
                                                                                            <span class="badge badge-warning p-1">Fatima Rasheed</span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </td>
                                                                                    <td>
                                                                                        <?php
                                                                                        if ($ApprovedStatus == '1') {
                                                                                        ?>
                                                                                            <div class="custom-control custom-switch">
                                                                                                <?php
                                                                                                if ($AS == 1) {
                                                                                                ?>
                                                                                                    <input type="checkbox" class="custom-control-input" id="approved<?php echo $Key['TID']; ?>" checked="">
                                                                                                <?php
                                                                                                } else {
                                                                                                ?>
                                                                                                    <input type="checkbox" disabled="disabled" class="custom-control-input" id="approved<?php echo $Key['TID']; ?>" checked="">
                                                                                                <?php
                                                                                                }
                                                                                                ?>
                                                                                                <label class="custom-control-label" for="approved<?php echo $Key['TID']; ?>"></label>
                                                                                            </div>
                                                                                        <?php
                                                                                        } else {
                                                                                        ?>
                                                                                            <div class="custom-control custom-switch">
                                                                                                <?php
                                                                                                if ($AS == 1) {
                                                                                                ?>
                                                                                                    <input type="checkbox" class="custom-control-input" id="approved<?php echo $Key['TID']; ?>" checked="">
                                                                                                <?php
                                                                                                } else {
                                                                                                ?>
                                                                                                    <input type="checkbox" disabled="disabled" class="custom-control-input" checked="" id="approved<?php echo $Key['TID']; ?>">
                                                                                                <?php
                                                                                                }
                                                                                                ?>
                                                                                                <label class="custom-control-label" for="approved<?php echo $Key['TID']; ?>"></label>
                                                                                            </div>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </td>
                                                                                    <td> <?php
                                                                                            if ($ApprovedStatus == '1') {
                                                                                            ?>
                                                                                            Zain Abbas
                                                                                        <?php
                                                                                            } else {
                                                                                        ?>
                                                                                            <span class="badge badge-warning p-1">Zain Abbas</span>
                                                                                        <?php
                                                                                            }
                                                                                        ?>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="row">

                                                                                            <div class="col-md-2">
                                                                                                <button type="button" class="btn btn-warning btn-xs printButton" id="btnPrint.<?php echo $Key['TID']; ?>"><i class="fal fa-print" aria-hidden="true"></i></button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>

                                                                                    <!-- <?php
                                                                                            if ($Key['ItemType'] == 'Fabric') {
                                                                                            ?>
                                    <td>
                                        <div class="col-md-2">

                                            <button type="button" class="btn btn-warning btn-xs comparisonButton waves-effect waves-themed" id="btnPrint.${element.TID}">standard</button>


                                        </div>
                                    </td>
                                <?php
                                                                                            } else {
                                ?>
                                

                                        </div>
                                    </td>

                                <?php
                                                                                            }
                                ?> -->



                                                                                    <?php
                                                                                    if (trim($Key['Size'], "") == 'Azuga W-V85B Hi White Star' || trim($Key['Size'], "") == 'B3766 181MP' || trim($Key['Size'], '') == 'FB107' || trim($Key['Size'], '') == 'FB122' || trim($Key['Size'], '') == 'PU 357 Signal Green' || trim($Key['Size'], '') == 'TPU Film 0.15mm White') {
                                                                                    ?>
                                                                                        <td>
                                                                                            <div class="col-md-2">

                                                                                                <button type="button" class="btn btn-warning btn-xs standardButton waves-effect waves-themed" id="btnPrint.${element.TID}">Development Reports</button>


                                                                                            </div>
                                                                                        </td>
                                                                                    <?php
                                                                                    } else {
                                                                                    ?>
                                                                                        <td>
                                                                                            <div class="col-md-2">


                                                                                            </div>
                                                                                        </td>

                                                                                    <?php
                                                                                    }
                                                                                    ?>

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




                                            </div>



                                            <div class="tab-pane fade" id="tab_direction-3" role="tabpanel">

                                                <ul class="nav nav-pills p-2" role="tablist">
                                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab_direction-new-raw">New Raw Material Requests</a></li>
                                                    <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-fgt">FGT Requests</a></li> -->

                                                </ul>
                                                <div class="tab-content p-2">
                                                    <div class="row mx-4">
                                                        <div class="col-md-2 mt-3">
                                                            <label for="month">Select Month:</label>
                                                            <input type="month" class="form-control" id="getmonth">
                                                        </div>
                                                        <div class="col-md-4 mt-3">

                                                            <input type="button" value="Search" class="form-contorl mt-4" id="searchBtn">
                                                        </div>

                                                    </div>

                                                    <div class="tab-pane fade d-none" id="tab_direction-fgt" role="tabpanel">


                                                        <div class="row" id="counterShow">

                                                        </div>
                                                        <div class="row p-2 mt-4">
                                                            <div class="col-md-12" id="reportData">

                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade  show active" id="tab_direction-new-raw" role="tabpanel">
                                                        <div class="row" id="counterShow3">

                                                        </div>
                                                        <div class="row p-2 mt-4">
                                                            <div class="col-md-12" id="reportData3">

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <!-- <span style="font-size:14px" class="text-danger text-center"><span style="font-size:19px"><strong>Note:</strong></span>

            Until Lab does not Approve Requests then in Generated Test Request Form you can't see your Requests. In this situation, you must contact with Lab.
            After 3 statuses you can see requests in Generated Request Form.
            <span style="font-size:16px"><strong>Responsibilites of Ahmad:</strong></span><br>

            <span style="font-size:16px"><strong>1.</strong></span> Pending Status<br>
            <span style="font-size:16px"><strong>2.</strong></span> Send to Lab<br>
            <span style="font-size:16px"><strong>3.</strong></span> Send Back to Requester ( Final Status after this you can see your Requests)

        </span> -->
                                                    </div>
                                                </div>

                                                <div style="display:none" class="card">

                                                    <div class="card-body">
                                                        <h5 class="card-title" style="color:black;font-weight:bolder">Date Filteration</h5>
                                                        <div class="row">
                                                            <div class="col-md-2"><input class="form-control" type="date" id="startDate" /></div>
                                                            <div class="col-md-2"><input class="form-control" type="date" id="endDate" /></div>
                                                            <div class="col-md-4"><button class="btn btn-primary" id="searchRange">Search</button></div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div id="Rstatus" style="display:none">

                                                </div>
                                            </div>



                                            <div class="tab-pane fade" id="tab_direction-4" role="tabpanel">

                                                <div class="container col-md-6">


                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            <h1 style="width: 100%;background-color: rgb(83,78,130);color:white;font-weight:bolder;padding:10px;text-align:center">Production Test Request Generation Form</h1>




                                                            <div class="modal-body" style="border: 2px solid black;padding:10px">

                                                                <div style="display:none" class="row">
                                                                    <div class="col-md-12">
                                                                        <span style="font-size:20px" class="text-danger text-center"><b>Note:</b>
                                                                            (Attention here! Please Fill All Fields Before Generating Test Request
                                                                            & after saving test request article will be shown below in select box )</span>
                                                                    </div>
                                                                </div>





                                                                <div class="row mt-2">
                                                                    <div class="col-md-12">

                                                                        <button id="addNewReqP" type="button" style="border-radius:25px" onclick="AddNewRequestP()" class="btn btn-info">Add New Request</button>

                                                                    </div>
                                                                </div>


                                                                <div class="row">
                                                                    <div class="col-md-6">


                                                                        <label for="inputEmail4">Request No.:</label>

                                                                        <input type="text" id="RIDP" class="form-control" name="RIDP" value="" required="required" readonly>




                                                                    </div>
                                                                    <div class="col-md-6">



                                                                        <label class="form-contol" for="customFile">Request Date</label>
                                                                        <input type="date" class="form-control" id="DateP" value="">

                                                                        <div id="reqDateP"></div>

                                                                    </div>
                                                                </div>


                                                                <div class="row">

                                                                    <!-- id="testTypee1" -->

                                                                    <div style="display:none" class="col-md-12">


                                                                        <?php
                                                                        if ($getTestTypes) {


                                                                        ?>

                                                                            <label for="sel1">Test Type</label><br>
                                                                            <select class="form-control js-example-basic-single" style="width: 100%">
                                                                                <option value="">Select one of the following</option>
                                                                                <?php foreach ($getTestTypes as $Key) { ?>

                                                                                    <option id="tTypeP1" name="tTypeP1" value="<?php echo $Key['Name']; ?>"><?php echo $Key['Name']; ?></option>
                                                                                <?php } ?>
                                                                            </select>

                                                                        <?php } ?>




                                                                    </div>

                                                                </div>

                                                                <div style="display:none" class="row">
                                                                    <div class="col-md-6">

                                                                        <label class="form-contol" for="customFile">Type</label>

                                                                        <input disabled type="text" class="form-control" id="typeP" name="typeP" value="Production" />


                                                                    </div>
                                                                    <div class="col-md-6">


                                                                        <label class="form-contol" for="customFile">Test Catagory</label>
                                                                        <input disabled type="text" class="form-control" id="TestCP" name="TestCP" value="Material Test" />


                                                                    </div>
                                                                </div>

                                                                <div id="testReqP">

                                                                    <div class="row mt-3">
                                                                        <div class="col-md-6">

                                                                            <label for="sel1">Select Factory Code :</label>

                                                                            <br>
                                                                            <select class="form-control" id="FCP" name="FCP">

                                                                                <option value="">Select one of the following</option>
                                                                                <option value="B34001">B34001</option>
                                                                                <option value="B34002">B34002</option>
                                                                                <option value="B34003">B34003</option>
                                                                                <option value="B34004">B34004</option>
                                                                                <option value="B34005">B34005</option>
                                                                                <option value="B34006">B34006</option>
                                                                                <option value="B34007">B34007</option>

                                                                            </select>

                                                                        </div>
                                                                        <div class="col-md-6">

                                                                            <label class="form-contol" for="customFile">Quantity Issued</label>
                                                                            <input type="number" class="form-control" value="" id="qIssuedP" name="qIssuedP">

                                                                        </div>
                                                                    </div>




                                                                    <div class="row mt-3">
                                                                        <div class="col-md-6">

                                                                            <div id="suppliersP">

                                                                            </div>

                                                                        </div>

                                                                        <div class="col-md-6">





                                                                            <label for="customFile">Select Material Type</label>
                                                                            <br>
                                                                            <select class="form-control" id="testTypeP" name="testTypeP">
                                                                                <option value="" selected>Select Material Type</option>
                                                                                <option value="Carton Test">Carton Test</option>
                                                                                <option value="Foam">Foam</option>
                                                                                <option value="Fabric">Fabric</option>
                                                                                <option value="Thread">Thread</option>
                                                                                <option value="SR Blader">SR Blader</option>
                                                                                <option value="Material">Material</option>
                                                                                <option value="FGT Report">FGT Report</option>
                                                                                <option value="MS Thread">MS Thread</option>
                                                                                <option value="MS Material">MS Material</option>
                                                                                <option value="Poly Bag">Poly Bag</option>
                                                                                <option value="Adhesion">Adhesion</option>
                                                                                <option value="CSM">CSM</option>


                                                                                <option value="PU Film">PU Film</option>
                                                                                <option value="HA Bladder">HA Bladder
                                                                                <option>
                                                                            </select>




                                                                        </div>
                                                                    </div>

                                                                    <!-- id="testTypee" -->

                                                                    <div class="row mt-3">
                                                                        <!-- <div style="display:none"  class="col-md-6" >
    <?php
    if ($getTestTypes) {


    ?>

                                <label for="sel1">Test Type</label><br>
                                <select class="form-control js-example-basic-single" id="tTypeP" name="tTypeP" style="width: 100%"
                              
                                >
                                    <option value="">Select one of the following</option>
                                    <?php foreach ($getTestTypes as $Key) { ?>

                                            <option value="<?php echo $Key['Name']; ?>"><?php echo $Key['Name']; ?></option>
                                   <?php } ?>
                                </select>
                       
    <?php } ?>


    </div> -->

                                                                        <div id="ItemNameeP" class="col-md-6">

                                                                            <label class="form-contol" for="customFile">Item Name :</label>

                                                                            <select class="form-control js-example-basic-single" id="ItemNameP" name="ItemNameP">

                                                                                <option value="" disabled>Select one of the following</option>
                                                                                <?php foreach ($GetItems as $items) { ?>
                                                                                    <option value="<?php echo $items['L4Name']; ?>"><?php echo $items['L4Name']; ?></option>
                                                                                <?php } ?>


                                                                            </select>




                                                                        </div>



                                                                    </div>





                                                                </div>





                                                                <div class="row mt-3 d-flex justify-content-center">
                                                                    <div class="col-md-4">

                                                                        <button id="savePPP" type="button" style="font-size:15px; border-radius:10px; display:block" class="btn btn-primary w-100 font-weight-bold" onclick="saveP()">Save</button>

                                                                    </div>
                                                                </div>


                                                                <!-- id="testTypeShow" -->
                                                                <div style="display:none">

                                                                    <button type="button" onclick="addTestType()" class="btn btn-success mt-2">Add More Test Type</button>

                                                                </div>



                                                            </div>






                                                            <div class="row">

                                                                <div class="col-md-12">

                                                                    <div class="container d-flex justify-content-center">


                                                                        <div class="row mt-5">

                                                                            <div class="col-md-12">

                                                                                <table style="display:none" id="tableP" class="table table-bordered table-hover table-responsive table-striped w-100">

                                                                                    <thead class="bg-primary-200 text-light">

                                                                                        <tr class="w-100">

                                                                                            <th><span>Request ID</span></th>
                                                                                            <th><span>Date</span></th>
                                                                                            <th><span>Type</span></th>
                                                                                            <th><span>Test Category</span></th>
                                                                                            <th><span>FactoryCode</span></th>
                                                                                            <th><span>Quantity Issued</span></th>
                                                                                            <th><span>TestType</span></th>
                                                                                            <th><span>Status</span></th>
                                                                                            <!-- <th><span>Test Name</span></th> -->
                                                                                            <th><span>Item Name</span></th>
                                                                                        </tr>

                                                                                    </thead>

                                                                                    <tbody class="w-100">


                                                                                        <tr>

                                                                                            <td><span id="RIDPP"></span></td>
                                                                                            <td><span id="DatePP"></span></td>
                                                                                            <td><span id="TypePP"></span></td>
                                                                                            <td><span id="TestCategoryPP"></span></td>
                                                                                            <td><span id="FactoryCodePP"></span></td>
                                                                                            <td><span id="QuantityPP"></span></td>
                                                                                            <td><span id="TestTypePP"></span></td>
                                                                                            <td><span id="StatusPP"></span></td>
                                                                                            <!-- <td><span id="testNameeP"></span></td> -->
                                                                                            <td><span id="itemNameeePPPP"></span></td>

                                                                                        </tr>

                                                                                    </tbody>

                                                                                </table>

                                                                            </div>


                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </div>





                                                        </div>







                                                    </div>

                                                </div>

                                            </div>


                                            <div class="tab-pane fade" id="tab_direction-5" role="tabpanel">


                                                <div class="container col-md-6">


                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            <h1 style="width: 100%;background-color: rgb(83,78,130);color:white;font-weight:bolder;padding:10px;text-align:center">Development Test Request Generation Form</h1>




                                                            <div class="modal-body" style="border: 2px solid black;padding:10px">

                                                                <div style="display:none" class="row">
                                                                    <div class="col-md-12">
                                                                        <span style="font-size:20px" class="text-danger text-center"><b>Note:</b>
                                                                            (Attention here! Please Fill All Fields Before Generating Test Request
                                                                            & after saving test request article will be shown below in select box )</span>
                                                                    </div>
                                                                </div>





                                                                <div class="row mt-2">
                                                                    <div class="col-md-12">

                                                                        <button id="addNewRequestD" type="button" style="border-radius:25px" onclick="AddNewRequestD()" class="btn btn-info">Add New Request</button>

                                                                    </div>
                                                                </div>


                                                                <div class="row">
                                                                    <div class="col-md-6">


                                                                        <label for="inputEmail4">Request No.:</label>

                                                                        <input type="text" id="RIDD" class="form-control" name="RIDD" value="" required="required" readonly>




                                                                    </div>
                                                                    <div class="col-md-6">

                                                                        <label class="form-contol" for="customFile">Request Date</label>
                                                                        <input type="date" class="form-control" id="DateD" value="">


                                                                    </div>
                                                                </div>

                                                                <div style="display:none" class="row">
                                                                    <div class="col-md-6">

                                                                        <label class="form-contol" for="customFile">Type</label>

                                                                        <input disabled type="text" class="form-control" id="typeD" name="typeD" value="Development" />


                                                                    </div>
                                                                    <div class="col-md-6">


                                                                        <label class="form-contol" for="customFile">Test Catagory</label>
                                                                        <input disabled type="text" class="form-control" id="TestCD" name="TestCD" value="Material Test" />


                                                                    </div>
                                                                </div>


                                                                <div id="testReqD">

                                                                    <div class="row mt-3">
                                                                        <div class="col-md-6">

                                                                            <label for="sel1">Select Factory Code :</label>

                                                                            <select class="form-control" id="FCD" name="FCD">

                                                                                <option value="">Select one of the following</option>
                                                                                <option value="B34001">B34001</option>
                                                                                <option value="B34002">B34002</option>
                                                                                <option value="B34003">B34003</option>
                                                                                <option value="B34004">B34004</option>
                                                                                <option value="B34005">B34005</option>
                                                                                <option value="B34006">B34006</option>
                                                                                <option value="B34007">B34007</option>

                                                                            </select>

                                                                        </div>
                                                                        <div class="col-md-6">

                                                                            <label class="form-contol" for="customFile">Quantity Issued</label>
                                                                            <input type="number" class="form-control" value="" id="qIssuedD" name="qIssuedD">

                                                                        </div>
                                                                    </div>


                                                                    <div class="row mt-3">
                                                                        <div class="col-md-6">


                                                                            <div id="suppliersD">


                                                                            </div>



                                                                        </div>

                                                                        <div class="col-md-6">

                                                                            <div class="form-group">
                                                                                <label>Select Material Type</label>
                                                                                <select class="form-control" id="testTypeD">
                                                                                    <option value="" selected>Select Material Type</option>
                                                                                    <option value="Carton Test">Carton Test</option>
                                                                                    <option value="Foam">Foam</option>
                                                                                    <option value="Fabric">Fabric</option>
                                                                                    <option value="Thread">Thread</option>
                                                                                    <option value="SR Blader">SR Blader</option>
                                                                                    <option value="Material">Material</option>
                                                                                    <option value="FGT Report">FGT Report</option>
                                                                                    <option value="MS Thread">MS Thread</option>
                                                                                    <option value="MS Material">MS Material</option>
                                                                                    <option value="Poly Bag">Poly Bag</option>
                                                                                    <option value="Adhesion">Adhesion</option>
                                                                                    <option value="CSM">CSM</option>
                                                                                    <option value="PU Film">PU Film</option>
                                                                                    <option value="HA Bladder">HA Bladder</option>
                                                                                </select>
                                                                            </div>




                                                                        </div>




                                                                    </div>


                                                                    <div class="row mt-3">


                                                                        <div class="col-md-6 ">

                                                                            <label class="form-contol" for="customFile">Item Name :</label>

                                                                            <select class="form-control js-example-basic-single" id="ItemNameDDDD" name="ItemNameDDDD">
                                                                                <option value="" disabled>Select one of the following</option>
                                                                                <?php foreach ($GetItems as $items) { ?>
                                                                                    <option value="<?php echo $items['L4Name']; ?>"><?php echo $items['L4Name']; ?></option>
                                                                                <?php } ?>


                                                                            </select>




                                                                        </div>


                                                                        <div class="col-md-6">


                                                                            <?php
                                                                            if ($getTestTypes) {


                                                                            ?>

                                                                                <label for="sel1">Test Type</label><br>
                                                                                <select class="form-control js-example-basic-single" id="tTypeD2" name="tTypeD2" style="width: 100%">
                                                                                    <option value="">Select one of the following</option>
                                                                                    <?php foreach ($getTestTypes as $Key) { ?>

                                                                                        <option value="<?php echo $Key['Name']; ?>"><?php echo $Key['Name']; ?></option>
                                                                                    <?php } ?>
                                                                                </select>

                                                                            <?php } ?>




                                                                        </div>



                                                                    </div>




                                                                </div>





                                                                <div class="row mt-3 d-flex justify-content-center">
                                                                    <div class="col-md-4">

                                                                        <button id="saveDD" type="button" style="font-size:15px; border-radius:10px" class="btn btn-primary w-100 font-weight-bold" onclick="saveD()">Save</button>

                                                                    </div>
                                                                </div>



                                                            </div>





                                                            <div class="row mt-3">
                                                                <!-- <div class="col-md-6" id="testTypeeD">
    <?php
    if ($getTestTypes) {


    ?>

                                <label for="sel1">Test Type</label><br>
                                <select class="form-control js-example-basic-single" id="tTypeD" name="tTypeD" style="width: 100%"
                               
                                >
                                    <option value="">Select one of the following</option>
                                    <?php foreach ($getTestTypes as $Key) { ?>

                                            <option value="<?php echo $Key['Name']; ?>"><?php echo $Key['Name']; ?></option>
                                   <?php } ?>
                                </select>
                       
    <?php } ?>

    <button type="button" onclick="addTestTypeD()" class="btn btn-success mt-2">Add Test Type</button>

    </div> -->





                                                            </div>





                                                            <div class="row">

                                                                <div class="col-md-12">

                                                                    <div class="container d-flex justify-content-center">


                                                                        <div class="row mt-5">

                                                                            <div class="col-md-12">

                                                                                <table style="display:none" id="tableD" class="table table-bordered table-hover table-responsive table-striped w-100">

                                                                                    <thead class="bg-primary-200 text-light">

                                                                                        <tr class="w-100">

                                                                                            <th><span>Request ID</span></th>
                                                                                            <th><span>Date</span></th>
                                                                                            <th><span>Type</span></th>
                                                                                            <th><span>Test Category</span></th>
                                                                                            <th><span>FactoryCode</span></th>
                                                                                            <th><span>Quantity Issued</span></th>
                                                                                            <th><span>TestType</span></th>
                                                                                            <!-- <th><span>Test Name</span></th> -->
                                                                                            <th><span>Item Name</span></th>
                                                                                        </tr>

                                                                                    </thead>

                                                                                    <tbody class="w-100">


                                                                                        <tr>

                                                                                            <td><span id="RIDDDD"></span></td>
                                                                                            <td><span id="DateDDDD"></span></td>
                                                                                            <td><span id="TypeDDDD"></span></td>
                                                                                            <td><span id="TestCategoryDDD"></span></td>
                                                                                            <td><span id="FactoryCodeDDDD"></span></td>
                                                                                            <td><span id="QuantityDDDD"></span></td>
                                                                                            <td><span id="TestTypeDDDD"></span></td>
                                                                                            <!-- <td><span id="testNameeDD"></span></td> -->
                                                                                            <td><span id="itemNameeeDDDD"></span></td>

                                                                                        </tr>

                                                                                    </tbody>

                                                                                </table>

                                                                            </div>


                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </div>





                                                        </div>
                                                    </div>

                                                </div>

                                            </div>


                                            <div class="tab-pane fade" id="tab_direction-6" role="tabpanel">




                                                <div class="container col-md-6">


                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            <h1 style="width: 100%;background-color: rgb(83,78,130);color:white;font-weight:bolder;padding:10px;text-align:center">Material Test Request Generation Form</h1>




                                                            <div class="modal-body" style="border: 2px solid black;padding:10px">

                                                                <div style="display:none" class="row">
                                                                    <div class="col-md-12">
                                                                        <span style="font-size:20px" class="text-danger text-center"><b>Note:</b>
                                                                            (Attention here! Please Fill All Fields Before Generating Test Request
                                                                            & after saving test request article will be shown below in select box )</span>
                                                                    </div>
                                                                </div>





                                                                <div class="row mt-2">
                                                                    <div class="col-md-12">

                                                                        <button type="button" id="addNewRequestMM" style="border-radius:25px" onclick="AddNewRequestM()" class="btn btn-info">Add New Request</button>

                                                                    </div>
                                                                </div>


                                                                <div class="row">
                                                                    <div class="col-md-6">


                                                                        <label for="inputEmail4">Request No.:</label>

                                                                        <input type="text" id="RIDM" class="form-control" name="RIDM" value="" required="required" readonly>




                                                                    </div>
                                                                    <div class="col-md-6">

                                                                        <label class="form-contol" for="customFile">Request Date</label>
                                                                        <input type="date" class="form-control" id="DateM" value="">


                                                                    </div>
                                                                </div>

                                                                <div style="display:none" class="row">
                                                                    <div class="col-md-6">

                                                                        <label class="form-contol" for="customFile">Type</label>

                                                                        <input disabled type="text" class="form-control" id="typeM" name="typeM" value="Material" />


                                                                    </div>
                                                                    <div class="col-md-6">


                                                                        <label class="form-contol" for="customFile">Test Catagory</label>
                                                                        <input disabled type="text" class="form-control" id="TestM" name="TestM" value="Material Test" />


                                                                    </div>
                                                                </div>


                                                                <div id="testReqM">

                                                                    <div class="row mt-2">
                                                                        <div class="col-md-6">

                                                                            <label for="sel1">Select Factory Code :</label>

                                                                            <select class="form-control" id="FCM" name="FCM">

                                                                                <option value="" selected>Select one of the following</option>
                                                                                <option value="B34001">B34001</option>
                                                                                <option value="B34002">B34002</option>
                                                                                <option value="B34003">B34003</option>
                                                                                <option value="B34004">B34004</option>
                                                                                <option value="B34005">B34005</option>
                                                                                <option value="B34006">B34006</option>
                                                                                <option value="B34007">B34007</option>

                                                                            </select>

                                                                        </div>
                                                                        <div class="col-md-6">

                                                                            <label class="form-contol" for="customFile">Quantity Issued</label>
                                                                            <input type="number" class="form-control" value="" id="qIssuedM" name="qIssuedM">

                                                                        </div>
                                                                    </div>



                                                                    <div class="row">
                                                                        <div class="col-md-6">


                                                                            <div id="suppliersM"></div>

                                                                        </div>

                                                                        <div class="col-md-6 mt-2">

                                                                            <div class="form-group">
                                                                                <label class="form-contol">Select Material Type</label>
                                                                                <select class="form-control js-example-basic-single" id="testTypeM" name="testTypeM">
                                                                                    <option value="" selected>Select Material Type</option>
                                                                                    <option value="Carton Test">Carton Test</option>
                                                                                    <option value="Foam">Foam</option>
                                                                                    <option value="Fabric">Fabric</option>
                                                                                    <option value="Thread">Thread</option>
                                                                                    <option value="SR Blader">SR Blader</option>
                                                                                    <option value="Material">Material</option>
                                                                                    <option value="FGT Report">FGT Report</option>
                                                                                    <option value="MS Thread">MS Thread</option>
                                                                                    <option value="MS Material">MS Material</option>
                                                                                    <option value="Poly Bag">Poly Bag</option>
                                                                                    <option value="Adhesion">Adhesion</option>
                                                                                    <option value="CSM">CSM</option>
                                                                                    <option value="TPU Film">TPU Film</option>
                                                                                    <option value="Winding Thread">Winding Thread</option>
                                                                                    <option value="HA Blader">HA Blader</option>
                                                                                    <option value="PU Film">PU Film</option>

                                                                                </select>
                                                                            </div>



                                                                        </div>





                                                                        <div class="col-md-6">

                                                                            <div class="row">
                                                                                <div class="col-md-6">

                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" onchange="ItemOption()" checked>
                                                                                        <label class="form-check-label" for="flexRadioDefault3">
                                                                                            Item Option
                                                                                        </label>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="col-md-6">


                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" onchange="ItemManual()" id="flexRadioDefault4">
                                                                                        <label class="form-check-label" for="flexRadioDefault4">
                                                                                            Manual Item
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>




                                                                            <!-- <button onclick="addItemNameM()" type="button" class="btn btn-success mt-2">Add Item Name</button> -->



                                                                        </div>

                                                                    </div>





                                                                    <div class="row">
                                                                        <div class="col-md-4">

                                                                            <label class="form-contol" for="customFile">Item Name :</label>


                                                                            <div style="display:none" id="itemNameOption">
                                                                                <input type="text" id="ItemNameM1" name="ItemNameM1" class="form-control" />

                                                                            </div>

                                                                            <div id="ItemNameMM">

                                                                                <select class="form-control js-example-basic-single" id="ItemNameM" name="ItemNameM">
                                                                                    <option value="" selected>Select one of the following</option>
                                                                                    <?php foreach ($GetItems as $items) { ?>
                                                                                        <option value="<?php echo $items['L4Name']; ?>"><?php echo $items['L4Name']; ?></option>
                                                                                    <?php } ?>


                                                                                </select>


                                                                            </div>


                                                                        </div>
                                                                        <div class="col-md-4">



                                                                            <label class="form-contol" for="customFile">PO # :</label>
                                                                            <input type="number" class="form-control" id="po1" name="po1">

                                                                        </div>

                                                                        <div class="col-md-4">

                                                                            <div class="col-md-12">


                                                                                <?php
                                                                                if ($getTestTypes) {


                                                                                ?>

                                                                                    <label for="sel1">Test Type</label><br>
                                                                                    <select class="form-control js-example-basic-single" id="tTypeM2" name="tTypeM2" style="width: 100%">
                                                                                        <option value="">Select one of the following</option>
                                                                                        <?php foreach ($getTestTypes as $Key) { ?>

                                                                                            <option value="<?php echo $Key['Name']; ?>"><?php echo $Key['Name']; ?></option>
                                                                                        <?php } ?>
                                                                                    </select>

                                                                                <?php } ?>




                                                                            </div>

                                                                        </div>
                                                                    </div>




                                                                </div>








                                                                <div class="row mt-3 d-flex justify-content-center">
                                                                    <div class="col-md-4">

                                                                        <button id="saveBtnM" type="button" style="font-size:15px; border-radius:10px" class="btn btn-primary w-100 font-weight-bold" onclick="saveM()">Save</button>

                                                                    </div>
                                                                </div>




                                                            </div>





                                                            <div class="row mt-3">
                                                                <!-- <div class="col-md-6">
    <?php
    if ($getTestTypes) {


    ?>

                                <label for="sel1">Test Type</label><br>
                                <select class="form-control js-example-basic-single" id="tTypeM" name="tTypeM" style="width: 100%"
                               
                                >
                                    <option value="">Select one of the following</option>
                                    <?php foreach ($getTestTypes as $Key) { ?>

                                            <option value="<?php echo $Key['Name']; ?>"><?php echo $Key['Name']; ?></option>
                                   <?php } ?>
                                </select>
                       
    <?php } ?>

    <button type="button" onclick="addTestTypeM()" class="btn btn-success mt-2">Add Test Type</button>

    </div> -->





                                                            </div>





                                                            <div class="row">

                                                                <div class="col-md-12">

                                                                    <div class="container d-flex justify-content-center">


                                                                        <div class="row mt-5">

                                                                            <div class="col-md-12">

                                                                                <table id="tableM" class="table table-bordered table-hover table-responsive table-striped w-100">

                                                                                    <thead class="bg-primary-200 text-light">

                                                                                        <tr class="w-100">

                                                                                            <th><span>Request ID</span></th>
                                                                                            <th><span>Date</span></th>
                                                                                            <th><span>Type</span></th>
                                                                                            <th><span>Test Category</span></th>
                                                                                            <th><span>FactoryCode</span></th>
                                                                                            <th><span>Quantity Issued</span></th>
                                                                                            <th><span>TestType</span></th>
                                                                                            <th><span>PO</span></th>
                                                                                            <!-- <th><span>Test Name</span></th> -->
                                                                                            <th><span>Item Name</span></th>
                                                                                        </tr>

                                                                                    </thead>

                                                                                    <tbody class="w-100">


                                                                                        <tr>

                                                                                            <td><span id="RIDMM"></span></td>
                                                                                            <td><span id="DateMM"></span></td>
                                                                                            <td><span id="TypeMM"></span></td>
                                                                                            <td><span id="TestCategoryMM"></span></td>
                                                                                            <td><span id="FactoryCodeMM"></span></td>
                                                                                            <td><span id="QuantityMM"></span></td>
                                                                                            <td><span id="TestTypeMM"></span></td>
                                                                                            <td><span id="POMM"></span></td>
                                                                                            <!-- <td><span id="testNameeM"></span></td> -->
                                                                                            <td><span id="itemNameeeMM"></span></td>

                                                                                        </tr>

                                                                                    </tbody>

                                                                                </table>

                                                                            </div>


                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </div>



                                                        </div>
                                                    </div>

                                                </div>



                                            </div>



                                            <div class="tab-pane fade" id="tab_direction-7" role="tabpanel">




                                                <div class="container col-md-6">


                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            <h1 style="width: 100%;background-color: rgb(83,78,130);color:white;font-weight:bolder;padding:10px;text-align:center">Trial Test Request Generation Form</h1>




                                                            <div class="modal-body" style="border: 2px solid black;padding:10px">

                                                                <div style="display:none" class="row">
                                                                    <div class="col-md-12">
                                                                        <span style="font-size:20px" class="text-danger text-center"><b>Note:</b>
                                                                            (Attention here! Please Fill All Fields Before Generating Test Request
                                                                            & after saving test request article will be shown below in select box )</span>
                                                                    </div>
                                                                </div>





                                                                <div class="row mt-2">
                                                                    <div class="col-md-12">

                                                                        <button type="button" id="addNewRequestTT" style="border-radius:25px" onclick="AddNewRequestT()" class="btn btn-info">Add New Request</button>

                                                                    </div>
                                                                </div>


                                                                <div class="row">
                                                                    <div class="col-md-6">


                                                                        <label for="inputEmail4">Request No.:</label>

                                                                        <input type="text" id="RIDT" class="form-control" name="RIDT" value="" required="required" readonly>




                                                                    </div>
                                                                    <div class="col-md-6">

                                                                        <label class="form-contol" for="customFile">Request Date</label>
                                                                        <input type="date" class="form-control" id="DateT" value="">


                                                                    </div>
                                                                </div>

                                                                <div style="display:none" class="row">
                                                                    <div class="col-md-6">

                                                                        <label class="form-contol" for="customFile">Type</label>

                                                                        <input disabled type="text" class="form-control" id="typeT" name="typeT" value="Trial" />


                                                                    </div>
                                                                    <div class="col-md-6">


                                                                        <label class="form-contol" for="customFile">Test Catagory</label>
                                                                        <input disabled type="text" class="form-control" id="TestT" name="TestT" value="Material Test" />


                                                                    </div>
                                                                </div>

                                                                <div id="addTestReqT">



                                                                    <div class="row mt-3">
                                                                        <div class="col-md-6">

                                                                            <label for="sel1">Select Factory Code :</label>

                                                                            <select class="form-control" id="FCT" name="FCT">

                                                                                <option value="">Select one of the following</option>
                                                                                <option value="B34001">B34001</option>
                                                                                <option value="B34002">B34002</option>
                                                                                <option value="B34003">B34003</option>
                                                                                <option value="B34004">B34004</option>
                                                                                <option value="B34005">B34005</option>
                                                                                <option value="B34006">B34006</option>
                                                                                <option value="B34007">B34007</option>

                                                                            </select>

                                                                        </div>
                                                                        <div class="col-md-6">

                                                                            <label class="form-contol" for="customFile">Quantity Issued</label>
                                                                            <input type="number" class="form-control" value="" id="qIssuedT" name="qIssuedT">

                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3">
                                                                        <div class="col-md-6">

                                                                            <div id="suppliersT"></div>

                                                                        </div>

                                                                        <div class="col-md-6">

                                                                            <div class="form-group">
                                                                                <label>Select Material Type</label>
                                                                                <select class="form-control" id="testTypeT">
                                                                                    <option value="" selected>Select Material Type</option>
                                                                                    <option value="Carton Test">Carton Test</option>
                                                                                    <option value="Foam">Foam</option>
                                                                                    <option value="Fabric">Fabric</option>
                                                                                    <option value="Thread">Thread</option>
                                                                                    <option value="SR Blader">SR Blader</option>
                                                                                    <option value="Material">Material</option>
                                                                                    <option value="FGT Report">FGT Report</option>
                                                                                    <option value="MS Thread">MS Thread</option>
                                                                                    <option value="MS Material">MS Material</option>
                                                                                    <option value="Poly Bag">Poly Bag</option>
                                                                                    <option value="Adhesion">Adhesion</option>
                                                                                    <option value="CSM">CSM</option>


                                                                                    <option value="PU Film">PU Film</option>
                                                                                    <option value="HA Bladder">HA Bladder</option>
                                                                                </select>
                                                                            </div>



                                                                        </div>




                                                                    </div>

                                                                    <div class="row">

                                                                        <div class="col-md-6">

                                                                            <label class="form-contol" for="customFile">Item Name :</label>

                                                                            <select class="form-control js-example-basic-single" id="ItemNameT" name="ItemNameT">
                                                                                <option value="">Select one of the following</option>
                                                                                <?php foreach ($GetItems as $items) { ?>
                                                                                    <option value="<?php echo $items['L4Name']; ?>"><?php echo $items['L4Name']; ?></option>
                                                                                <?php } ?>


                                                                            </select>




                                                                        </div>


                                                                        <div class="col-md-6">


                                                                            <?php
                                                                            if ($getTestTypes) {


                                                                            ?>

                                                                                <label for="sel1">Test Type</label><br>
                                                                                <select class="form-control js-example-basic-single" id="tTypeT2" name="tTypeT2" style="width: 100%">
                                                                                    <option value="">Select one of the following</option>
                                                                                    <?php foreach ($getTestTypes as $Key) { ?>

                                                                                        <option value="<?php echo $Key['Name']; ?>"><?php echo $Key['Name']; ?></option>
                                                                                    <?php } ?>
                                                                                </select>

                                                                            <?php } ?>




                                                                        </div>



                                                                    </div>



                                                                </div>




                                                                <div class="row mt-3 d-flex justify-content-center">
                                                                    <div class="col-md-4">

                                                                        <button id="saveBtnT" type="button" style="font-size:15px; border-radius:10px" class="btn btn-primary w-100 font-weight-bold" onclick="saveT()">Save</button>

                                                                    </div>
                                                                </div>



                                                            </div>




                                                            <div class="row mt-3">
                                                                <!-- <div style="display:none" class="col-md-6" id="testTypeeT">
<?php
    if ($getTestTypes) {


?>

                            <label for="sel1">Test Type</label><br>
                            <select class="form-control js-example-basic-single" id="tTypeT" name="tTypeT" style="width: 100%"
                        
                            >
                                <option value="">Select one of the following</option>
                                <?php foreach ($getTestTypes as $Key) { ?>

                                        <option value="<?php echo $Key['Name']; ?>"><?php echo $Key['Name']; ?></option>
                            <?php } ?>
                            </select>
                
<?php } ?>

<button type="button" onclick="addTestTypeT()" class="btn btn-success mt-2">Add Test Type</button>

</div> -->





                                                            </div>


                                                            <div class="row">

                                                                <div class="col-md-12">

                                                                    <div class="container d-flex justify-content-center">


                                                                        <div class="row mt-5">

                                                                            <div class="col-md-12">

                                                                                <table style="display:none" id="tableT" class="table table-bordered table-hover table-responsive table-striped w-100">

                                                                                    <thead class="bg-primary-200 text-light">

                                                                                        <tr class="w-100">

                                                                                            <th><span>Request ID</span></th>
                                                                                            <th><span>Date</span></th>
                                                                                            <th><span>Type</span></th>
                                                                                            <th><span>Test Category</span></th>
                                                                                            <th><span>FactoryCode</span></th>
                                                                                            <th><span>Quantity Issued</span></th>
                                                                                            <th><span>TestType</span></th>
                                                                                            <!-- <th><span>Test Name</span></th> -->
                                                                                            <th><span>Item Name</span></th>
                                                                                        </tr>

                                                                                    </thead>

                                                                                    <tbody class="w-100">


                                                                                        <tr>

                                                                                            <td><span id="RIDTTTT"></span></td>
                                                                                            <td><span id="DateTTTT"></span></td>
                                                                                            <td><span id="TypeTTTT"></span></td>
                                                                                            <td><span id="TestCategorTTTT"></span></td>
                                                                                            <td><span id="FactoryCodeTTTT"></span></td>
                                                                                            <td><span id="QuantityTTTT"></span></td>
                                                                                            <td><span id="TestTypeTTTT"></span></td>
                                                                                            <!-- <td><span id="testNameeTTTT"></span></td> -->
                                                                                            <td><span id="itemNameeeTTTT"></span></td>

                                                                                        </tr>

                                                                                    </tbody>

                                                                                </table>

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









                                        <!-- End Custom Table Content -->
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
    <div class="col-md-4"></div>
    </div>
    </div>
    </div>
    </div>
    <script src="<?php echo base_url(); ?>/assets/js//jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/Select/select2.min.js" defer></script>
    <link href="<?php echo base_url(); ?>/assets/Select/select2.min.css" rel="stylesheet" />
    <script src="<?php echo base_url(); ?>/assets/Select/select2.min.js"></script>



    <script>
        $('.Poinfo').css('display', 'none')
        $('#manualArticle').css('display', 'none')
        $('#articleslection').css('display', 'none')
        $('#autoArticle').css('display', 'none')

        function toggleArticle() {
            let selectionValue = $('#selection').val();
            if (selectionValue == 'Auto') {
                $('#autoArticle').css('display', 'block')
                $('#manualArticle').css('display', 'none')
            } else {
                $('#autoArticle').css('display', 'none')
                $('#manualArticle').css('display', 'block')
            }
        }

        function Callpo() {
            let SelectType = $('#type').val();
            if (SelectType == 'Material') {

                $('#manualArticle').css('display', 'none')
                $('#articleslection').css('display', 'none')
                $('#autoArticle').css('display', 'none')
                $('.Poinfo').css('display', 'block')

            } else if (SelectType == 'Production') {
                $('#manualArticle').css('display', 'none')
                $('#articleslection').css('display', 'none')
                $('#autoArticle').css('display', 'none')
                $('.Poinfo').css('display', 'block')
                $('#PoNoShow').css('display', 'none')
                $('#supplierNShow').css('display', 'block')
                $('#ItemShow').css('display', 'block')
            } else {
                $('#articleslection').css('display', 'block')
                $('#autoArticle').css('display', 'block')
                $('.Poinfo').css('display', 'none')
                //$('#manualArticle').css('display', 'block')
            }


        }

        $(".printButton").click(function(e) {



            let id = this.id;

            let split_value = id.split(".");

            var CssNo = split_value[1].split(',')[0];
            var typeOfTest = split_value[1].split(',')[1];
            let testTypeGet;


            if (typeOfTest == 'Material Test') {
                let urlForResult = '<?php echo base_url('LabController/getTestId'); ?>'
                let url2 = '<?php echo base_url('LabController/getDetails'); ?>'
                $.post(urlForResult, {
                        'CssNo': CssNo
                    },
                    function(data, status) {
                        if (data[0]) {
                            let TID = data[0].TID

                            testTypeGet = data[0].ItemType;

                            if (data[0].ItemType.trim() == 'Carton') {
                                $("#testNo").text(data[0].TestNO);
                                $("#dateTest").text(data[0].Date);
                                $("#pono").text(data[0].PO);
                                $("#receiveDate").text(data[0].Receiving_Date);
                                $("#size").text(data[0].Size);
                                $("#supplierName").text(data[0].Supplier_Name);
                                $("#supplierRef").text(data[0].Supplier_Ref);
                                $("#quantityCarton").text(data[0].Quantity_Carton);
                                if (data[0].image != null && data[0].image != "") {
                                    $("#cartonImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                } else {
                                    $("#cartonImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                }

                                $("#testPerformed").text(data[0].performedBy);
                                data[0].Approvalname ? $("#testApproved").text(data[0].Approvalname) : $("#testApproved").text("Pending");
                                //  $("#Incharge").text(data[0].Approvalname);

                                data[0].reviewName ? $("#testReviewed").text(data[0].reviewName) : $("#testReviewed").text("Pending");
                                $("#Conclusion").text(data[0].Result);
                                $.post(url2, {
                                        'TID': TID
                                    },
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
                            } else if (data[0].ItemType.trim() == 'Foam') {
                                $("#testNoFoam").text(data[0].TestNO);
                                $("#dateTestFoam").text(data[0].Date);
                                $("#ponoFoam").text(data[0].PO);
                                $("#receiveDateFoam").text(data[0].Receiving_Date);

                                $("#supplierRefFoam").text(data[0].Supplier_Ref);

                                $("#testPerformedFoam").text(data[0].performedBy);
                                data[0].Approvalname ? $("#testApprovedFoam").text(data[0].Approvalname) : $("#testApprovedFoam").text("Pending");
                                //  $("#Incharge").text(data[0].Approvalname);
                                if (data[0].image != null && data[0].image != "") {
                                    $("#foamImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                } else {
                                    $("#foamImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                }
                                data[0].reviewName ? $("#testReviewedFoam").text(data[0].reviewName) : $("#testReviewedFoam").text("Pending");
                                $("#ConclusionFoam").text(data[0].Result);
                                $.post(url2, {
                                        'TID': TID
                                    },
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
                            } else if (data[0].ItemType.trim() == 'Fabric') {
                                $("#testNoFabric").text(data[0].TestNO);
                                $("#dateTestFabric").text(data[0].Date);
                                $("#ponoFabric").text(data[0].PO);
                                $("#receiveDateFabric").text(data[0].Receiving_Date);

                                $("#supplierRefFabric").text(data[0].Supplier_Ref);

                                $("#testPerformedFabric").text(data[0].performedBy);
                                $("#ResultFabric").text(data[0].Result);
                                $("#CSSNoFabric").text(data[0].CSSNO);
                                $("#materialNameFabric").text(data[0].Size);

                                data[0].Approvalname ? $("#testApprovedFabric").text(data[0].Approvalname) : $("#testApprovedFabric").text("Pending");
                                //  $("#Incharge").text(data[0].Approvalname);
                                if (data[0].image != null && data[0].image != "") {
                                    $("#fabricImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                } else {
                                    $("#fabricImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                }
                                data[0].reviewName ? $("#testReviewedFabric").text(data[0].reviewName) : $("#testReviewedFabric").text("Pending");
                                $("#ConclusionFabric").text(data[0].Result);
                                $.post(url2, {
                                        'TID': TID
                                    },
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
                            } else if (data[0].ItemType.trim() == 'Material') {


                                $("#testNoMaterial").text(data[0].TestNO);
                                $("#dateTestMaterial").text(data[0].Date);
                                $("#ponoMaterial").text(data[0].PO);
                                $("#receiveDateMaterial").text(data[0].Receiving_Date);

                                $("#supplierRefMaterial").text(data[0].Supplier_Ref);

                                $("#testPerformedMaterial").text(data[0].performedBy);
                                $("#ResultMaterial").text(data[0].Result);
                                $("#CSSNoMaterial").text(data[0].CSSNO);
                                $("#materialNameMaterial").text(data[0].Size);
                                if (data[0].image != null && data[0].image != "") {
                                    $("#materialImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                } else {
                                    $("#materialImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                }
                                data[0].Approvalname ? $("#testApprovedMaterial").text(data[0].Approvalname) : $("#testApprovedMaterial").text("Pending");
                                //  $("#Incharge").text(data[0].Approvalname);

                                data[0].reviewName ? $("#testReviewedMaterial").text(data[0].reviewName) : $("#testReviewedMaterial").text("Pending");
                                $("#ConclusionMaterial").text(data[0].Result);
                                $.post(url2, {
                                        'TID': TID
                                    },
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
                            } else if (data[0].ItemType.trim() == 'Thread') {

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
                                data[0].Approvalname ? $("#testApprovedThread").text(data[0].Approvalname) : $("#testApprovedThread").text("Pending");
                                //  $("#Incharge").text(data[0].Approvalname);
                                if (data[0].image != null && data[0].image != "") {
                                    $("#threadImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                } else {
                                    $("#threadImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                }
                                data[0].reviewName ? $("#testReviewedThread").text(data[0].reviewName) : $("#testReviewedThread").text("Pending");
                                $("#ConclusionThread").text(data[0].Result);
                                $.post(url2, {
                                        'TID': TID
                                    },
                                    function(data, status) {

                                        html = ''
                                        let i = 0;
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
                            } else if (data[0].ItemType.trim() == 'Blader') {
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
                                data[0].Approvalname ? $("#testApprovedBlader").text(data[0].Approvalname) : $("#testApprovedBlader").text("Pending");
                                //  $("#Incharge").text(data[0].Approvalname);
                                if (data[0].image != null && data[0].image != "") {
                                    $("#bladerImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                } else {
                                    $("#bladerImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                }
                                data[0].reviewName ? $("#testReviewedBlader").text(data[0].reviewName) : $("#testReviewedBlader").text("Pending");
                                $("#Conclusion").text(data[0].Result);
                                $.post(url2, {
                                        'TID': TID
                                    },
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

                            } else if (data[0].ItemType.trim() == 'FGT') {

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
                                if (data[0].image != null && data[0].image != "") {
                                    $("#fgtImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                } else {
                                    $("#fgtImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                }
                                data[0].Approvalname ? $("#testApprovedFGT").text(data[0].Approvalname) : $("#testApprovedFGT").text("Pending");

                                //  $("#Incharge").text(data[0].Approvalname);

                                data[0].reviewName ? $("#testReviewedFGT").text(data[0].reviewName) : $("#testReviewedFGT").text("Pending");
                                $("#ConclusionFGT").text(data[0].Result);
                                $.post(url2, {
                                        'TID': TID
                                    },
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

                            } else if (data[0].ItemType.trim() == 'MS Thread') {

                                $("#testNoMSThread").text(data[0].TestNO);
                                $("#dateTestMSThread").text(data[0].Date);
                                $("#ponoMSThread").text(data[0].PO);
                                $("#receiveDateMSThread").text(data[0].Receiving_Date);
                                $("#MaterialNameMSThread").text(data[0].material);
                                $("#supplierNameMSThread").text(data[0].Supplier_Name);
                                $("#supplierRefMSThread").text(data[0].Supplier_Ref);
                                $("#testPerformedMSThread").text(data[0].performedBy);
                                data[0].Approvalname ? $("#testApprovedMSThread").text(data[0].Approvalname) : $("#testApprovedMSThread").text("Pending");
                                //  $("#Incharge").text(data[0].Approvalname);
                                if (data[0].image != null && data[0].image != "") {
                                    $("#threadMSImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                } else {
                                    $("#threadMSImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                }
                                data[0].reviewName ? $("#testReviewedMSThread").text(data[0].reviewName) : $("#testReviewedMSThread").text("Pending");
                                $("#ConclusionMSThread").text(data[0].Result);
                                $("#statusMSThread").text(data[0].Result);
                                $.post(url2, {
                                        'TID': TID
                                    },
                                    function(data, status) {

                                        html = ''
                                        data.forEach(element => {
                                            html += `<tr>
                  <td style="border:2px solid black">${element.Test}</td>
                  <td style="border:2px solid black">${element.Method}</td>
                  <td style="border:2px solid black">${element.Unit}</td>
                  <td style="border:2px solid black">${element.Requirments}</td>
                  <td style="border:2px solid black">${element.result}</td>
              </tr>`
                                        });

                                        $("#DetailsTestMSThread").html(html);

                                    });
                                $('#exampleModalMSThread').modal('toggle');
                            } else if (data[0].ItemType.trim() === 'MS Material') {

                                $("#testMSMaterial").text(data[0].TestNO);
                                $("#dateTestMSMaterial").text(data[0].Date);
                                $("#ponoMSMaterial").text(data[0].PO);
                                $("#receiveDateMSMaterial").text(data[0].Receiving_Date);
                                $("#MaterialNameMSMaterial").text(data[0].material);
                                $("#supplierNameMSMaterial").text(data[0].Supplier_Name);
                                $("#poMSMaterial").text(data[0].PO);
                                $("#thicknessMSMaterial").text(data[0].Thickness);
                                $("#hardnessMSMaterial").text(data[0].Hardness);
                                $("#MSMaterial").text(data[0].Thickness);
                                $("#visualResultMSMaterialr").text(data[0].Result);
                                $("#MaterialRefMSMaterial").text(data[0].MaterialRef)

                                $("#testPerformedMSMaterial").text(data[0].performedBy);
                                data[0].Approvalname ? $("#testApprovedMSMaterial").text(data[0].Approvalname) : $("#testApprovedMSMaterial").text("Pending");
                                //  $("#Incharge").text(data[0].Approvalname);
                                if (data[0].image != null && data[0].image != "") {
                                    $("#threadMSImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                } else {
                                    $("#threadMSImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                }
                                data[0].reviewName ? $("#testReviewedMSMaterial").text(data[0].reviewName) : $("#testReviewedMSMaterial").text("Pending");
                                $("#ConclusionMSMaterial").text(data[0].Result);
                                $("#statusMSMaterial").text(data[0].Result);
                                $.post(url2, {
                                        'TID': TID
                                    },
                                    function(data, status) {

                                        html = ''
                                        data.forEach(element => {
                                            html += `<tr>
<td style="border:2px solid black">${element.Test}</td>
<td style="border:2px solid black">${element.Method}</td>
<td style="border:2px solid black">${element.Unit}</td>
<td style="border:2px solid black">${element.Requirments}</td>
<td style="border:2px solid black">${element.result}</td>
</tr>`
                                        });
                                        $("#DetailsTestMSMaterial").html(html);


                                    });



                                $('#exampleModalMSMaterial').modal('toggle');


                            } else if (data[0].ItemType.trim() == 'Carton') {
                                $("#cortonLogoHide").css("display", "none");
                                $("#testNo").text(data[0].TestNO);
                                $("#dateTest").text(data[0].Date);
                                $("#pono").text(data[0].PO);
                                $("#receiveDate").text(data[0].Receiving_Date);
                                $("#size").text(data[0].Size);
                                $("#supplierName").text(data[0].Supplier_Name);
                                $("#supplierRef").text(data[0].Supplier_Ref);
                                $("#quantityCarton").text(data[0].Quantity_Carton);
                                if (data[0].image != null && data[0].image != "") {
                                    $("#cartonImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                } else {
                                    $("#cartonImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                }
                                $("#testPerformed").text(data[0].performedBy);
                                data[0].Approvalname ? $("#testApproved").text(data[0].Approvalname) : $("#testApproved").text("Pending");
                                //  $("#Incharge").text(data[0].Approvalname);

                                data[0].reviewName ? $("#testReviewed").text(data[0].reviewName) : $("#testReviewed").text("Pending");
                                $("#Conclusion").text(data[0].Result);
                                $.post(url2, {
                                        'TID': TID
                                    },
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
                            } else if (data[0].ItemType.trim() == 'MS Thread') {

                                $("#testNoMSThread").text(data[0].TestNO);
                                $("#dateTestMSThread").text(data[0].Date);
                                $("#ponoMSThread").text(data[0].PO);
                                $("#receiveDateMSThread").text(data[0].Receiving_Date);
                                $("#MaterialNameMSThread").text(data[0].material);
                                $("#supplierNameMSThread").text(data[0].Supplier_Name);
                                $("#supplierRefMSThread").text(data[0].Supplier_Ref);
                                $("#testPerformedMSThread").text(data[0].performedBy);
                                data[0].Approvalname ? $("#testApprovedMSThread").text(data[0].Approvalname) : $("#testApprovedMSThread").text("Pending");
                                //  $("#Incharge").text(data[0].Approvalname);
                                if (data[0].image != null && data[0].image != "") {
                                    $("#threadMSImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                } else {
                                    $("#threadMSImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                }
                                data[0].reviewName ? $("#testReviewedMSThread").text(data[0].reviewName) : $("#testReviewedMSThread").text("Pending");
                                $("#ConclusionMSThread").text(data[0].Result);
                                $("#statusMSThread").text(data[0].Result);
                                $.post(url2, {
                                        'TID': TID
                                    },
                                    function(data, status) {

                                        html = ''
                                        data.forEach(element => {
                                            html += `<tr>
<td style="border:2px solid black">${element.Test}</td>
<td style="border:2px solid black">${element.Method}</td>
<td style="border:2px solid black">${element.Unit}</td>
<td style="border:2px solid black">${element.Requirments}</td>
<td style="border:2px solid black">${element.result}</td>
</tr>`
                                        });

                                        $("#DetailsTestMSThread").html(html);

                                    });
                                $('#exampleModalMSThread').modal('toggle');
                            } else if (data[0].ItemType.trim() == 'Adhesion Material') {

                                $("#testDateAdhesion").text(data[0].Date);
                                $("#receDateTestAdhesion").text(data[0].Receiving_Date);
                                $("#receCodeAdhesion").text(data[0].RecevingCode);
                                $("#testAdhesion").text(data[0].TestNO);

                                $("#ponoAdhesion").text(data[0].PO);
                                $("#articleNoAdhesion").text(data[0].ArticleNo);
                                $("#articleNameAdhesion").text(data[0].Article);
                                $("#resultAdhesion").text(data[0].Result);

                                $("#testNoAdhesion").text(data[0].TestNO);
                                $("#testPerformedAdhesion").text(data[0].performedBy);

                                $.post(url2, {
                                        'TID': TID
                                    },
                                    function(data, status) {

                                        html = ''
                                        data.forEach(element => {
                                            html += `<tr>

<td style="border:2px solid black">${element.TDate}</td>
<td style="border:2px solid black">${element.BatchReference}</td>
<td style="border:2px solid black">${element.TestNO}</td>
<td style="border:2px solid black">${element.Standard}</td>
<td style="border:2px solid black">${element.MaximumForce}</td>
<td style="border:2px solid black">${element.AverageForce}</td>
<td style="border:2px solid black">${element.Comments}</td>
<td style="border:2px solid black">${element.MaximumForceInch}</td>
</tr>`
                                        });

                                        $("#DetailsAdhesion").html(html);

                                    });


                                $('#exampleModalAdhesion').modal('toggle');
                            } else if (data[0].ItemType.trim() == 'CSM Material') {


                                $("#TestNoCSM").text(data[0].TestNO);
                                $("#dateCSM").text(data[0].Date);

                                $("#modelNameCSM").text(data[0].ModelName);


                                $("#cssCodeCSM").text(data[0].CSSNO);
                                $("#pressureCSM").text(data[0].Pressure);
                                $("#tempHumidityCSM").text(data[0].TempHumidity);
                                $("#articleCSM").text(data[0].Article);
                                $("#categoryCSM").text(data[0].Category);

                                $("#sizeCSM").text(data[0].Size);
                                $("#testedForCSM").text(data[0].Testedfor);
                                $("#noteCSM").text(data[0].Note);


                                // $("#testPerformedAdhesion").text(data[0].performedBy);


                                $.post(url2, {
                                        'TID': TID
                                    },
                                    function(data, status) {


                                        html = ''
                                        data.forEach(element => {
                                            html += `<tr>
<td style="border:2px solid black">${element.Weight}</td>
<td style="border:2px solid black">${element.CircumferenceMin}</td>
<td style="border:2px solid black">${element.CircumferenceMax}</td>
<td style="border:2px solid black">${element.Deviation}</td>
<td style="border:2px solid black">${element.ReboundTest}</td>
<td style="border:2px solid black">${element.ReMarks}</td>
<td style="border:2px solid black">${element.result}</td>

</tr>`
                                        });

                                        $("#DetailsCSM").html(html);

                                    });

                                $('#exampleModalCSM').modal('toggle');



                            } else if (data[0].ItemType.trim() == 'PolyBag Material') {

                                $("#testNoPolyBag").text(data[0].TestNO);
                                $("#receivedDatePolyBag").text(data[0].Receiving_Date);
                                $("#datePolyBag").text(data[0].Date);
                                $("#vendorNamePolyBag").text(data[0].VenderName);
                                $("#polyBagPolyBag").text(data[0].PolyBag);
                                $("#POPolyBag").text(data[0].PO);

                                $.post(url2, {
                                        'TID': TID
                                    },
                                    function(data, status) {

                                        html = ''
                                        data.forEach(element => {
                                            html += `<tr>
<td style="border:2px solid black">${element.srno}</td>
<td style="border:2px solid black">${element.Test}</td>
<td style="border:2px solid black">${element.Unit}</td>
<td style="border:2px solid black">${element.Standard}</td>
<td style="border:2px solid black">${element.result}</td>
<td style="border:2px solid black">${element.ReMarks}</td>

</tr>`
                                        });

                                        $("#DetailsPolyBag").html(html);

                                    });


                                $('#exampleModalPolyBag').modal('toggle');

                            }



                        } else {



                            $('#errorModal').modal('toggle');

                        }

                    });

            } else if (typeOfTest == 'FGT Test') {

                url = "<?php echo base_url(''); ?>FGT/FGT_PRINT_CSSNO"
                $.post(url, {
                    CssNo
                }, function(data) {
                    if (data['head'][0]) {
                        // console.log("Data Get", data['head'][0].FGTType)
                        if (data['head'][0].FGTType == "SOCCER BALLS" || data['head'][0].FGTType == "SOCCERBALLS") {

                            $("#titleBalls").text(data['head'][0].FGTType);
                            $("#workingNoMini").text(data['head'][0].WorkNo ? data['head'][0].WorkNo : 'WORKING #: Nil');
                            $("#articleNoMini").text(data['head'][0].ArtCode != '' ? data['head'][0].ArtCode : 'Article Code: Nil');
                            $("#content2").text(data['head'][0].labno);
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
                            $("#contentNoteSoccer").text(data['head'][0].Note);
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
                        } else if (data['head'][0].FGTType == "SOCCER BALL SIZE 5") {
                            // console.log("from aSIZE 5", data);
                            $("#content66").text(data['head'][0].labno);
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
                            $("#content79").text(data['head'][0].Performedby);
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



                            $("#contentNoteSize5").text(data['head'][0].Note);
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

                        } else {
                            // console.log("from soccerBallsIndoor", data);
                            $("#content32").text(data['head'][0].labno);
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
                            $("#content45").text(data['head'][0].Performedby);
                            $("#contentNoteFGT").text(data['head'][0].Note);
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
                    } else {
                        $('#errorModal').modal('toggle');
                    }

                })
            }


        });

        $('#Alltest').click(function(e) {
            // alert("Heloo");
            e.preventDefault();
            let typeCatagory = $('#testCatagpryData').val();

            let RID = $('#RID').val();
            let url = "<?php echo base_url(''); ?>LabController/loadAlltest/" + typeCatagory + "/" + RID
            //alert(url);
            $.get(url, function(data) {
                alert("All Test Inserted Successfully");
                window.location.reload();
            });

        });






        $('#save').click(function(e) {
            // alert("Heloo");
            e.preventDefault();
            if ($('#type').val() != null && $('#typeCatagory').val() != null && $('#rDate').val() != null && $('#fCode').val() != null && $('#qIssued').val() != null && $('#testType').val() != null && $('#po').val() != null && $('#supplier').val() != null) {

                let Type = $('#type').val();

                let typeCatagory = $('#typeCatagory').val();
                let Sample_RequestDate = $('#rDate').val();
                let Factory_Code = $('#fCode').val();

                let Quantity_Issued = $('#qIssued').val();
                let Status = "Pending";
                let MaterialType = $('#testType').val();
                let po = $('#po').val();
                let suppliername = $('#supplier').val();

                let url = "<?php echo base_url(''); ?>LabController/AddRequest"
                // alert(url);
                $.post(url, {
                        'Type': Type,
                        'testType': typeCatagory,
                        'Sample_RequestDate': Sample_RequestDate,
                        'Factory_Code': Factory_Code,
                        'po': po,
                        'suppliername': suppliername,
                        'Quantity_Issued': Quantity_Issued,
                        'Status': Status,
                        'MaterialType': MaterialType
                    },
                    function(data, status) {
                        // console.log('data', data)
                        if (data == true) {
                            // alert("Data Inserted Successfully! Click on Ok to Reload the Page")
                            window.location.reload();
                        } else {
                            alert("Data is not Inserted Successfully!")
                        }


                    });

            } else {
                alert("All fields are mandatory");
            }
        });


        function getDataAfterRequest() {

            let RID = $("#RID").val();

            urlAddAfReq = "<?php echo base_url(''); ?>LabController/getDataAfterRequest";


            $.post(urlAddAfReq, {
                'TID': RID,

            }, function(data, status) {


                // console.log(data)

            })


        }




        $(".undobtn").click(function(e) {
            //alert("undobtn");
            let id = this.id;

            let split_value = id.split(".");

            var TID = split_value[1];
            url = "<?php echo base_url(''); ?>LabController/undotest/" + TID
            // alert(url);
            var proceed = confirm("Are you sure you want to Delete?");
            if (proceed) {
                $.get(url, function(data) {
                    alert("Test Deleted Successfully");
                    location.reload();
                });
            } else {
                alert("Update Cancel");
            }


        });
        $(".undoitemsbtn").click(function(e) {
            //alert("Heloo");
            let id = this.id;

            let split_value = id.split(".");

            var DTID = split_value[1];

            // var TIDD = $(`#TID${split_value[1]}`).val();

            //alert(DTID);
            url = "<?php echo base_url(''); ?>LabController/undotestitems/" + DTID
            // alert(url);
            var proceed = confirm("Are you sure you want to Delete?");
            if (proceed) {
                $.get(url, function(data) {
                    alert("Item Deleted Successfully");
                    location.reload();
                });
            } else {
                alert("Update Cancel");
            }


        });

        function Refresh() {
            //alert("Refresh Successfully");
            //$('#RID').val();

            url = "<?php echo base_url('LabController/NewRequest/') ?>"

            $.get(url, function(res) {
                //alert(url);
                location.reload(true);
            });
        }
        $('#AddItems').click(function(e) {
            //alert("Heloo");
            e.preventDefault();
            let name = $('#name').val();
            let RID = $('#RID').val();
            let article = $('#article').val();
            let ArtCodeAuto = $('#ArtCodeAuto').val();

            let tType = $('#tType').val();

            if (tType != null) {

                let url = "<?php echo base_url(''); ?>LabController/AddRdetails"
                //alert(url);
                $.post(url, {
                        'RID': RID,
                        'Code': name,
                        'Article': article,
                        'ArtCodeAuto': ArtCodeAuto,

                    },
                    function(data, status) {
                        // console.log('data', data)
                        if (data == true) {
                            alert("Data Inserted Successfully! Click on Ok to Reload the Page")
                            window.location.reload();
                        } else {
                            alert("Data is not Inserted Successfully!")
                        }


                    });
                window.location.reload();
            } else {
                alert("Please Tes")
            }


        });

        $('#Addtest').click(function(e) {
            //alert("Heloo");
            e.preventDefault();
            // let Type = $('#type').val();


            let TestID = $('#tType').val();
            let testtype = $('#testtype').val();
            let RID = $('#RID').val();


            // let Quantity_Issued = $('#qIssued').val();
            // let Status = "Pending";

            // let po = $('#po').val();
            // let suppliername = $('#supplier').val();

            let url = "<?php echo base_url(''); ?>LabController/AddRdetailsTest"
            //alert(url);
            $.post(url, {
                    'RID': RID,
                    'TestID': TestID,
                    'testtype': testtype,


                },
                function(data, status) {
                    // console.log('data', data)
                    if (data == true) {
                        // alert("Test Inserted Successfully! Click on Ok to Reload the Page")
                        window.location.reload();
                    } else {
                        alert("Data is not Inserted Successfully!")
                    }


                });
            window.location.reload();
        });

        $(".acknowledge").click(function(e) {
            let id = this.id;
            let split_value = id.split(".");
            var TID = split_value[1];
            let proceed = confirm("Are you sure you want Acknowledge the Results?");
            if (proceed) {

                url2 = "<?php echo base_url(''); ?>LabController/AcknowledgeResult";

                $.post(url2, {
                    'Id': TID,
                }, function(data, status) {
                    alert("Data Updated Successfully! Click on Ok to Reload the Page")
                    window.location.reload();
                });
            } else {
                alert("Acknowledgement Cancel");
            }
        });
        $(document).ready(function() {
            $("#ArtCodeAuto").select2();
            $("#name").select2();
            $("#supplier").select2();
            let currentDate = new Date().toJSON().substr(0, 10);
            $('#rDate').val(currentDate);
            $("#tType").select2();
            $('#ActivityData').dataTable({
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

            $('#ActivityData5').dataTable({
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

            $('#ActivityData2').dataTable({
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
            $('#ActivityData3').dataTable({
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
                    // {
                    //     extend: 'pdfHtml5',
                    //     text: 'PDF',
                    //     titleAttr: 'Generate PDF',
                    //     className: 'btn-outline-danger btn-sm mr-1'
                    // },
                    // {
                    //     extend: 'excelHtml5',
                    //     text: 'Excel',
                    //     titleAttr: 'Generate Excel',
                    //     className: 'btn-outline-success btn-sm mr-1'
                    // },
                    // {
                    //     extend: 'csvHtml5',
                    //     text: 'CSV',
                    //     titleAttr: 'Generate CSV',
                    //     className: 'btn-outline-primary btn-sm mr-1'
                    // },
                    // {
                    //     extend: 'copyHtml5',
                    //     text: 'Copy',
                    //     titleAttr: 'Copy to clipboard',
                    //     className: 'btn-outline-primary btn-sm mr-1'
                    // },
                    // {
                    //     extend: 'print',
                    //     text: 'Print',
                    //     titleAttr: 'Print Table',
                    //     className: 'btn-outline-primary btn-sm'
                    // }
                ]
            });

            url7 = "<?php echo base_url(''); ?>LabController/getRequestsStatus";

            $.post(url7, function(data, status) {

                // console.log(data);

                let appendtable = ``;

                appendtable += `
                    


                    <div id="tableData">

<table style="overflow:scroll;" class="table table-striped table-hover table-sm" id="ActivityData6">
    <thead class="bg-primary-200 text-white">

        <tr>
            <th>Request Date</th>
            <th>Type</th>
            <th>Material</th>
            <th>CSS Code</th>
            <th>Factory Code</th>
            <th>Article / Material Name</th>
            <th>Test Requested</th>
            <th>Due Date</th>
            <th>Complete Date</th>
            <th>Quantity Issed</th>
            <th>Lab Status</th>
            <th>Status</th>
            <th>Sender Reference</th>
            <th>Sender Signature</th>
            <th>Receiver Signature Receiving</th>
            <th>Receiver Signature Returned</th>
            <th>Sender Signature Returned</th>
       
        </tr>
    </thead>
    <tbody>

    `


                data['getRequests'].forEach(element => {

                    appendtable += `


            <tr>
                <td>${element.Sample_RequestDate}</td>
                <td>${element.Type}</td>
                <td>${element.MaterialType}</td>
                <td>${element.CSSNo}</td>

                <td>${element.Factory_Code}</td>
                <td>${element.Article}</td>
                <td>${element.Sample_RequestDate}</td>
                <td>${element.Due_Date}</td>
                <td>${element.Sample_Receiving_Date}</td>
                <td>${element.Quantity_Issued}</td>
                <td>${element.LabAcknowledgementStatus}</td>
                <td> <span class="badge badge-warning p-1">${element.Status}</span></td>
                <td> <span class="badge badge-primary p-1">${element.SRSenderID}</span></td>
                <td> <span class="badge badge-primary p-1">${element.senderSignatureRec}</span></td>
                <td> <span class="badge badge-primary p-1">${element.SRReceiverID}</span></td>
                <td> <span class="badge badge-primary p-1">${element.SRETReceiverID}</span></td>
                <td> <span class="badge badge-primary p-1">${element.SRETSenderID}</span></td>
             
            

            </tr>

`

                })

                appendtable += `
       

    </tbody>
</table>
</div>
                    

                    `
                $("#Rstatus").html(appendtable)


                $('#ActivityData6').dataTable({
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
    <scri src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></scri>
    <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js" integrity="sha512-d5Jr3NflEZmFDdFHZtxeJtBzk0eB+kkRXWFQqEc1EKmolXjHm2IKCA7kTvXBNjIYzjXfD5XzIjaaErpkZHCkBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>

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
        $('#searchRange').on('click', function(e) {
            e.preventDefault();
            let startDate = $("#startDate").val()
            let endDate = $("#endDate").val()
            let url = "<?php echo base_url('LabController/getRequestOverAllData') ?>";
            $.post(url, {
                "startDate": startDate,
                "endDate": endDate
            }, function(data) {
                $("#tableData").html('')
                let html = `


            <div class="modal fade bd-example-modal-lg" id="exampleModalaterial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: rgb(177,157,206);color:white">

                                            </div>

                                            <div class="modal-body">
                                                <div class="card" id="printCardMSMaterialL">
                                                    <div class="card-body">


                                                    sdfsdfdsf

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
            </div>




            
            
            <table class="table table-striped table-hover table-sm" id="ActivityData5">
                                                        <thead class="bg-primary-400 text-white">
    
                                                            <tr>
                                                                <th>Request Date</th>
                                                                <th>Type</th>
                                                                <th>Material</th>
                                                                <th>CSS Code</th>
                                                                <th>Factory Code</th>
                                                                <th>Article / Material Name</th>
                                                              
                                                                <th>Due Date</th>
                                                                <th>Complete Date</th>
                                                                <th>Quantity Issed</th>
                                                                <th>Sender Reference</th>
                                                                <th>Receiver Signature Receiving</th>
                                                                <th>Sender Signature Receiving</th>
                                                                <th>Receiver Signature Returned</th>
                                                                <th>Sender Signature Returned</th>
                                                                <th>Status</th>
                                                                <th>Requester Acknowlegement</th>
                                                                <th>View Result</th>
                                                                <th>ACTIONS</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>                                      
            `
                data.getTestByRequesterDate.forEach(element => {
                    // console.log(element);
                    html += `
                <tr>
                                                                    <td>${element.Sample_RequestDate}</td>
                                                                    <td>${element.Type}</td>
                                                                    <td>${element.MaterialType}</td>
                                                                    <td>${element.CSSNo}</td>
    
                                                                    <td>${element.Factory_Code}</td>
                                                                    <td>${element.Article}</td>
                                                                    <td>${element.Due_Date}</td>
                                                                    <td>${element.CompletationDate}</td>
                                                                    <td>${element.Quantity_Issued}</td>

                                                                    <td> <span class="badge badge-primary p-1">${element.SRSenderIDName}</span></td>
                                                                    <td> <span class="badge badge-primary p-1">${element.SRReceiverID}</span></td>
                                                                    <td> <span class="badge badge-primary p-1">${element.senderSignatureRec}</</span></td>
                                                                    <td> <span class="badge badge-primary p-1">${element.SRETReceiverID}</span></td>
                                                                    <td> <span class="badge badge-primary p-1">${element.SRETSenderID}</span></td>
                                                                    <td> <span class="badge badge-warning p-1">${element.Status}</span></td>
                                                                    <td> <span class="badge badge-warning p-1">${element.finalStatus}</span></td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-warning btn-xs printButton" id="btnPrint.${element.CSSNo},${element.TestType}"><i class="fal fa-print" aria-hidden="true"></i></button>
    
                                                                    </td>
                                                                           <td >
                                                                           ${element.finalStatus == 'Pending' ? 
                                                                            `<button type="button" style="display: inline-block;" class="btn btn-primary btn-xs acknowledge" id="btn.${element.TID}">Acknowledge</button>` :
                                                                            
                                                                            `<button type="button" style="display: inline-block;" class="btn btn-danger btn-xs" disabled id="btn.${element.TID}">Locked</button>`
                                                                           }
                                                                            </td>

    
    
                                                                </tr>
                `

                });
                html += `  </tbody> </table>`;



                $("#tableData").append(html);

                $(".printButton").click(function(e) {
                    // $('#exampleModalaterial').modal('toggle');

                    // alert(this.id)l

                    let id = this.id;

                    let split_value = id.split(".");

                    var CssNo = split_value[1].split(',')[0];
                    var typeOfTest = split_value[1].split(',')[1];
                    let testTypeGet;

                    // alert(typeOfTest == 'Material Test');


                    if (typeOfTest == 'Material Test') {
                        let urlForResult = '<?php echo base_url('LabController/getTestId'); ?>'
                        let url2 = '<?php echo base_url('LabController/getDetails'); ?>'
                        $.post(urlForResult, {
                                'CssNo': CssNo
                            },
                            function(data, status) {
                                if (data[0]) {
                                    let TID = data[0].TID

                                    testTypeGet = data[0].ItemType;

                                    if (data[0].ItemType.trim() == 'Carton') {
                                        $("#testNo").text(data[0].TestNO);
                                        $("#dateTest").text(data[0].Date);
                                        $("#pono").text(data[0].PO);
                                        $("#receiveDate").text(data[0].Receiving_Date);
                                        $("#size").text(data[0].Size);
                                        $("#supplierName").text(data[0].Supplier_Name);
                                        $("#supplierRef").text(data[0].Supplier_Ref);
                                        $("#quantityCarton").text(data[0].Quantity_Carton);
                                        if (data[0].image != null && data[0].image != "") {
                                            $("#cartonImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                        } else {
                                            $("#cartonImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                        }

                                        $("#testPerformed").text(data[0].performedBy);
                                        data[0].Approvalname ? $("#testApproved").text(data[0].Approvalname) : $("#testApproved").text("Pending");
                                        //  $("#Incharge").text(data[0].Approvalname);

                                        data[0].reviewName ? $("#testReviewed").text(data[0].reviewName) : $("#testReviewed").text("Pending");
                                        $("#Conclusion").text(data[0].Result);
                                        $.post(url2, {
                                                'TID': TID
                                            },
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
                                    } else if (data[0].ItemType.trim() == 'Foam') {
                                        $("#testNoFoam").text(data[0].TestNO);
                                        $("#dateTestFoam").text(data[0].Date);
                                        $("#ponoFoam").text(data[0].PO);
                                        $("#receiveDateFoam").text(data[0].Receiving_Date);

                                        $("#supplierRefFoam").text(data[0].Supplier_Ref);

                                        $("#testPerformedFoam").text(data[0].performedBy);
                                        data[0].Approvalname ? $("#testApprovedFoam").text(data[0].Approvalname) : $("#testApprovedFoam").text("Pending");
                                        //  $("#Incharge").text(data[0].Approvalname);
                                        if (data[0].image != null && data[0].image != "") {
                                            $("#foamImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                        } else {
                                            $("#foamImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                        }
                                        data[0].reviewName ? $("#testReviewedFoam").text(data[0].reviewName) : $("#testReviewedFoam").text("Pending");
                                        $("#ConclusionFoam").text(data[0].Result);
                                        $.post(url2, {
                                                'TID': TID
                                            },
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
                                    } else if (data[0].ItemType.trim() == 'Fabric') {
                                        $("#testNoFabric").text(data[0].TestNO);
                                        $("#dateTestFabric").text(data[0].Date);
                                        $("#ponoFabric").text(data[0].PO);
                                        $("#receiveDateFabric").text(data[0].Receiving_Date);

                                        $("#supplierRefFabric").text(data[0].Supplier_Ref);

                                        $("#testPerformedFabric").text(data[0].performedBy);
                                        $("#ResultFabric").text(data[0].Result);
                                        $("#CSSNoFabric").text(data[0].CSSNO);
                                        $("#materialNameFabric").text(data[0].Size);

                                        data[0].Approvalname ? $("#testApprovedFabric").text(data[0].Approvalname) : $("#testApprovedFabric").text("Pending");
                                        //  $("#Incharge").text(data[0].Approvalname);
                                        if (data[0].image != null && data[0].image != "") {
                                            $("#fabricImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                        } else {
                                            $("#fabricImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                        }
                                        data[0].reviewName ? $("#testReviewedFabric").text(data[0].reviewName) : $("#testReviewedFabric").text("Pending");
                                        $("#ConclusionFabric").text(data[0].Result);
                                        $.post(url2, {
                                                'TID': TID
                                            },
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
                                    } else if (data[0].ItemType.trim() == 'Material') {


                                        $("#testNoMaterial").text(data[0].TestNO);
                                        $("#dateTestMaterial").text(data[0].Date);
                                        $("#ponoMaterial").text(data[0].PO);
                                        $("#receiveDateMaterial").text(data[0].Receiving_Date);

                                        $("#supplierRefMaterial").text(data[0].Supplier_Ref);

                                        $("#testPerformedMaterial").text(data[0].performedBy);
                                        $("#ResultMaterial").text(data[0].Result);
                                        $("#CSSNoMaterial").text(data[0].CSSNO);
                                        $("#materialNameMaterial").text(data[0].Size);
                                        if (data[0].image != null && data[0].image != "") {
                                            $("#materialImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                        } else {
                                            $("#materialImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                        }
                                        data[0].Approvalname ? $("#testApprovedMaterial").text(data[0].Approvalname) : $("#testApprovedMaterial").text("Pending");
                                        //  $("#Incharge").text(data[0].Approvalname);

                                        data[0].reviewName ? $("#testReviewedMaterial").text(data[0].reviewName) : $("#testReviewedMaterial").text("Pending");
                                        $("#ConclusionMaterial").text(data[0].Result);
                                        $.post(url2, {
                                                'TID': TID
                                            },
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
                                    } else if (data[0].ItemType.trim() == 'Thread') {

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
                                        data[0].Approvalname ? $("#testApprovedThread").text(data[0].Approvalname) : $("#testApprovedThread").text("Pending");
                                        //  $("#Incharge").text(data[0].Approvalname);
                                        if (data[0].image != null && data[0].image != "") {
                                            $("#threadImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                        } else {
                                            $("#threadImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                        }
                                        data[0].reviewName ? $("#testReviewedThread").text(data[0].reviewName) : $("#testReviewedThread").text("Pending");
                                        $("#ConclusionThread").text(data[0].Result);
                                        $.post(url2, {
                                                'TID': TID
                                            },
                                            function(data, status) {

                                                html = ''
                                                let i = 0;
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
                                    } else if (data[0].ItemType.trim() == 'Blader') {
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
                                        data[0].Approvalname ? $("#testApprovedBlader").text(data[0].Approvalname) : $("#testApprovedBlader").text("Pending");
                                        //  $("#Incharge").text(data[0].Approvalname);
                                        if (data[0].image != null && data[0].image != "") {
                                            $("#bladerImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                        } else {
                                            $("#bladerImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                        }
                                        data[0].reviewName ? $("#testReviewedBlader").text(data[0].reviewName) : $("#testReviewedBlader").text("Pending");
                                        $("#Conclusion").text(data[0].Result);
                                        $.post(url2, {
                                                'TID': TID
                                            },
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

                                    } else if (data[0].ItemType.trim() == 'FGT') {

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
                                        if (data[0].image != null && data[0].image != "") {
                                            $("#fgtImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                        } else {
                                            $("#fgtImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                        }
                                        data[0].Approvalname ? $("#testApprovedFGT").text(data[0].Approvalname) : $("#testApprovedFGT").text("Pending");

                                        //  $("#Incharge").text(data[0].Approvalname);

                                        data[0].reviewName ? $("#testReviewedFGT").text(data[0].reviewName) : $("#testReviewedFGT").text("Pending");
                                        $("#ConclusionFGT").text(data[0].Result);
                                        $.post(url2, {
                                                'TID': TID
                                            },
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

                                    } else if (data[0].ItemType.trim() == 'MS Thread') {

                                        $("#testNoMSThread").text(data[0].TestNO);
                                        $("#dateTestMSThread").text(data[0].Date);
                                        $("#ponoMSThread").text(data[0].PO);
                                        $("#receiveDateMSThread").text(data[0].Receiving_Date);
                                        $("#MaterialNameMSThread").text(data[0].material);
                                        $("#supplierNameMSThread").text(data[0].Supplier_Name);
                                        $("#supplierRefMSThread").text(data[0].Supplier_Ref);
                                        $("#testPerformedMSThread").text(data[0].performedBy);
                                        data[0].Approvalname ? $("#testApprovedMSThread").text(data[0].Approvalname) : $("#testApprovedMSThread").text("Pending");
                                        //  $("#Incharge").text(data[0].Approvalname);
                                        if (data[0].image != null && data[0].image != "") {
                                            $("#threadMSImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                        } else {
                                            $("#threadMSImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                        }
                                        data[0].reviewName ? $("#testReviewedMSThread").text(data[0].reviewName) : $("#testReviewedMSThread").text("Pending");
                                        $("#ConclusionMSThread").text(data[0].Result);
                                        $("#statusMSThread").text(data[0].Result);
                                        $.post(url2, {
                                                'TID': TID
                                            },
                                            function(data, status) {

                                                html = ''
                                                data.forEach(element => {
                                                    html += `<tr>
      <td style="border:2px solid black">${element.Test}</td>
      <td style="border:2px solid black">${element.Method}</td>
      <td style="border:2px solid black">${element.Unit}</td>
      <td style="border:2px solid black">${element.Requirments}</td>
      <td style="border:2px solid black">${element.result}</td>
  </tr>`
                                                });

                                                $("#DetailsTestMSThread").html(html);

                                            });
                                        $('#exampleModalMSThread').modal('toggle');
                                    } else if (data[0].ItemType.trim() === 'MS Material') {

                                        $("#testMSMaterial").text(data[0].TestNO);
                                        $("#dateTestMSMaterial").text(data[0].Date);
                                        $("#ponoMSMaterial").text(data[0].PO);
                                        $("#receiveDateMSMaterial").text(data[0].Receiving_Date);
                                        $("#MaterialNameMSMaterial").text(data[0].material);
                                        $("#supplierNameMSMaterial").text(data[0].Supplier_Name);
                                        $("#poMSMaterial").text(data[0].PO);
                                        $("#thicknessMSMaterial").text(data[0].Thickness);
                                        $("#hardnessMSMaterial").text(data[0].Hardness);
                                        $("#MSMaterial").text(data[0].Thickness);
                                        $("#visualResultMSMaterialr").text(data[0].Result);
                                        $("#MaterialRefMSMaterial").text(data[0].MaterialRef)

                                        $("#testPerformedMSMaterial").text(data[0].performedBy);
                                        data[0].Approvalname ? $("#testApprovedMSMaterial").text(data[0].Approvalname) : $("#testApprovedMSMaterial").text("Pending");
                                        //  $("#Incharge").text(data[0].Approvalname);
                                        if (data[0].image != null && data[0].image != "") {
                                            $("#threadMSImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                        } else {
                                            $("#threadMSImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                        }
                                        data[0].reviewName ? $("#testReviewedMSMaterial").text(data[0].reviewName) : $("#testReviewedMSMaterial").text("Pending");
                                        $("#ConclusionMSMaterial").text(data[0].Result);
                                        $("#statusMSMaterial").text(data[0].Result);
                                        $.post(url2, {
                                                'TID': TID
                                            },
                                            function(data, status) {

                                                html = ''
                                                data.forEach(element => {
                                                    html += `<tr>
<td style="border:2px solid black">${element.Test}</td>
<td style="border:2px solid black">${element.Method}</td>
<td style="border:2px solid black">${element.Unit}</td>
<td style="border:2px solid black">${element.Requirments}</td>
<td style="border:2px solid black">${element.result}</td>
</tr>`
                                                });
                                                $("#DetailsTestMSMaterial").html(html);


                                            });



                                        $('#exampleModalMSMaterial').modal('toggle');


                                    } else if (data[0].ItemType.trim() == 'Carton') {
                                        $("#cortonLogoHide").css("display", "none");
                                        $("#testNo").text(data[0].TestNO);
                                        $("#dateTest").text(data[0].Date);
                                        $("#pono").text(data[0].PO);
                                        $("#receiveDate").text(data[0].Receiving_Date);
                                        $("#size").text(data[0].Size);
                                        $("#supplierName").text(data[0].Supplier_Name);
                                        $("#supplierRef").text(data[0].Supplier_Ref);
                                        $("#quantityCarton").text(data[0].Quantity_Carton);
                                        if (data[0].image != null && data[0].image != "") {
                                            $("#cartonImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                        } else {
                                            $("#cartonImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                        }
                                        $("#testPerformed").text(data[0].performedBy);
                                        data[0].Approvalname ? $("#testApproved").text(data[0].Approvalname) : $("#testApproved").text("Pending");
                                        //  $("#Incharge").text(data[0].Approvalname);

                                        data[0].reviewName ? $("#testReviewed").text(data[0].reviewName) : $("#testReviewed").text("Pending");
                                        $("#Conclusion").text(data[0].Result);
                                        $.post(url2, {
                                                'TID': TID
                                            },
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
                                    } else if (data[0].ItemType.trim() == 'MS Thread') {

                                        $("#testNoMSThread").text(data[0].TestNO);
                                        $("#dateTestMSThread").text(data[0].Date);
                                        $("#ponoMSThread").text(data[0].PO);
                                        $("#receiveDateMSThread").text(data[0].Receiving_Date);
                                        $("#MaterialNameMSThread").text(data[0].material);
                                        $("#supplierNameMSThread").text(data[0].Supplier_Name);
                                        $("#supplierRefMSThread").text(data[0].Supplier_Ref);
                                        $("#testPerformedMSThread").text(data[0].performedBy);
                                        data[0].Approvalname ? $("#testApprovedMSThread").text(data[0].Approvalname) : $("#testApprovedMSThread").text("Pending");
                                        //  $("#Incharge").text(data[0].Approvalname);
                                        if (data[0].image != null && data[0].image != "") {
                                            $("#threadMSImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                                        } else {
                                            $("#threadMSImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                                        }
                                        data[0].reviewName ? $("#testReviewedMSThread").text(data[0].reviewName) : $("#testReviewedMSThread").text("Pending");
                                        $("#ConclusionMSThread").text(data[0].Result);
                                        $("#statusMSThread").text(data[0].Result);
                                        $.post(url2, {
                                                'TID': TID
                                            },
                                            function(data, status) {

                                                html = ''
                                                data.forEach(element => {
                                                    html += `<tr>
<td style="border:2px solid black">${element.Test}</td>
<td style="border:2px solid black">${element.Method}</td>
<td style="border:2px solid black">${element.Unit}</td>
<td style="border:2px solid black">${element.Requirments}</td>
<td style="border:2px solid black">${element.result}</td>
</tr>`
                                                });

                                                $("#DetailsTestMSThread").html(html);

                                            });
                                        $('#exampleModalMSThread').modal('toggle');
                                    } else if (data[0].ItemType.trim() == 'Adhesion Material') {

                                        $("#testDateAdhesion").text(data[0].Date);
                                        $("#receDateTestAdhesion").text(data[0].Receiving_Date);
                                        $("#receCodeAdhesion").text(data[0].RecevingCode);
                                        $("#testAdhesion").text(data[0].TestNO);

                                        $("#ponoAdhesion").text(data[0].PO);
                                        $("#articleNoAdhesion").text(data[0].ArticleNo);
                                        $("#articleNameAdhesion").text(data[0].Article);
                                        $("#resultAdhesion").text(data[0].Result);

                                        $("#testNoAdhesion").text(data[0].TestNO);
                                        $("#testPerformedAdhesion").text(data[0].performedBy);

                                        $.post(url2, {
                                                'TID': TID
                                            },
                                            function(data, status) {

                                                html = ''
                                                data.forEach(element => {
                                                    html += `<tr>

<td style="border:2px solid black">${element.TDate}</td>
<td style="border:2px solid black">${element.BatchReference}</td>
<td style="border:2px solid black">${element.TestNO}</td>
<td style="border:2px solid black">${element.Standard}</td>
<td style="border:2px solid black">${element.MaximumForce}</td>
<td style="border:2px solid black">${element.AverageForce}</td>
<td style="border:2px solid black">${element.Comments}</td>
<td style="border:2px solid black">${element.MaximumForceInch}</td>
</tr>`
                                                });

                                                $("#DetailsAdhesion").html(html);

                                            });


                                        $('#exampleModalAdhesion').modal('toggle');
                                    } else if (data[0].ItemType.trim() == 'CSM Material') {


                                        $("#TestNoCSM").text(data[0].TestNO);
                                        $("#dateCSM").text(data[0].Date);

                                        $("#modelNameCSM").text(data[0].ModelName);


                                        $("#cssCodeCSM").text(data[0].CSSNO);
                                        $("#pressureCSM").text(data[0].Pressure);
                                        $("#tempHumidityCSM").text(data[0].TempHumidity);
                                        $("#articleCSM").text(data[0].Article);
                                        $("#categoryCSM").text(data[0].Category);

                                        $("#sizeCSM").text(data[0].Size);
                                        $("#testedForCSM").text(data[0].Testedfor);
                                        $("#noteCSM").text(data[0].Note);


                                        // $("#testPerformedAdhesion").text(data[0].performedBy);


                                        $.post(url2, {
                                                'TID': TID
                                            },
                                            function(data, status) {

                                                // console.log("4", data)

                                                html = ''
                                                data.forEach(element => {
                                                    html += `<tr>
<td style="border:2px solid black">${element.Weight}</td>
<td style="border:2px solid black">${element.CircumferenceMin}</td>
<td style="border:2px solid black">${element.CircumferenceMax}</td>
<td style="border:2px solid black">${element.Deviation}</td>
<td style="border:2px solid black">${element.ReboundTest}</td>
<td style="border:2px solid black">${element.ReMarks}</td>
<td style="border:2px solid black">${element.result}</td>

</tr>`
                                                });

                                                $("#DetailsCSM").html(html);

                                            });

                                        $('#exampleModalCSM').modal('toggle');



                                    } else if (data[0].ItemType.trim() == 'PolyBag Material') {

                                        $("#testNoPolyBag").text(data[0].TestNO);
                                        $("#receivedDatePolyBag").text(data[0].Receiving_Date);
                                        $("#datePolyBag").text(data[0].Date);
                                        $("#vendorNamePolyBag").text(data[0].VenderName);
                                        $("#polyBagPolyBag").text(data[0].PolyBag);
                                        $("#POPolyBag").text(data[0].PO);

                                        $.post(url2, {
                                                'TID': TID
                                            },
                                            function(data, status) {

                                                html = ''
                                                data.forEach(element => {
                                                    html += `<tr>
<td style="border:2px solid black">${element.srno}</td>
<td style="border:2px solid black">${element.Test}</td>
<td style="border:2px solid black">${element.Unit}</td>
<td style="border:2px solid black">${element.Standard}</td>
<td style="border:2px solid black">${element.result}</td>
<td style="border:2px solid black">${element.ReMarks}</td>

</tr>`
                                                });

                                                $("#DetailsPolyBag").html(html);

                                            });


                                        $('#exampleModalPolyBag').modal('toggle');

                                    }



                                } else {



                                    $('#errorModal').modal('toggle');

                                }

                            });

                    } else if (typeOfTest == 'FGT Test') {

                        url = "<?php echo base_url(''); ?>FGT/FGT_PRINT_CSSNO"
                        $.post(url, {
                            CssNo
                        }, function(data) {
                            if (data['head'][0]) {
                                // console.log("Data Get", data['head'][0].FGTType)
                                if (data['head'][0].FGTType == "SOCCER BALLS" || data['head'][0].FGTType == "SOCCERBALLS") {

                                    $("#titleBalls").text(data['head'][0].FGTType);
                                    $("#workingNoMini").text(data['head'][0].WorkNo ? data['head'][0].WorkNo : 'WORKING #: Nil');
                                    $("#articleNoMini").text(data['head'][0].ArtCode != '' ? data['head'][0].ArtCode : 'Article Code: Nil');
                                    $("#content2").text(data['head'][0].labno);
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
                                    $("#contentNoteSoccer").text(data['head'][0].Note);
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
                                } else if (data['head'][0].FGTType == "SOCCER BALL SIZE 5") {
                                    // console.log("from aSIZE 5", data);
                                    $("#content66").text(data['head'][0].labno);
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
                                    $("#content79").text(data['head'][0].Performedby);
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



                                    $("#contentNoteSize5").text(data['head'][0].Note);
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

                                } else {
                                    // console.log("from soccerBallsIndoor", data);
                                    $("#content32").text(data['head'][0].labno);
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
                                    $("#content45").text(data['head'][0].Performedby);
                                    $("#contentNoteFGT").text(data['head'][0].Note);
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
                            } else {
                                $('#errorModal').modal('toggle');
                            }

                        })
                    }


                });



                $('#ActivityData5').dataTable({
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


            })
        })
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










        $(document).ready(function() {


            $('#ItemNameM').select2();

            $('#testTypeM').select2();
            $('#FCM').select2();


            $('#tTypeP1').select2();
            $('#FCP').select2();
            $('#testTypeP').select2();
            $('#ItemNameP').select2();


            $('#FCD').select2();
            $('#testTypeD').select2();
            $('#ItemNameDDDD').select2();
            $('#supplierD').select2();


            $('#FCT').select2();
            $('#testTypeT').select2();
            $('#ItemNameT').select2();










            if (sessionStorage.length <= 2) {

                $("#testReqP").css("display", "block");
                // $("#testTypee1").css("display", "none");
                // $("#testTypeShow").css("display", "none");
                document.getElementById("savePPP").disabled = false;
                document.getElementById("addNewReqP").disabled = true;
                document.getElementById("saveBtnM").disabled = false;
                document.getElementById("addNewRequestMM").disabled = true;
                $("#tableP").css("display", "none");
                $("#tableM").css("display", "none");
                document.getElementById("DateP").disabled = false;
                document.getElementById("DateM").disabled = false;

            } else {
                $("#testReqP").css("display", "none");
                // $("#testTypee1").css("display", "block");
                // $("#testTypeShow").css("display", "block");
                document.getElementById("savePPP").disabled = true;
                document.getElementById("addNewReqP").disabled = false;
                document.getElementById("saveBtnM").disabled = true;
                document.getElementById("addNewRequestMM").disabled = false;
                $("#tableP").css("display", "block");
                $("#tableM").css("display", "block");
                document.getElementById("DateP").disabled = true;
                document.getElementById("DateM").disabled = true;


            }


            $("#RIDP").val(sessionStorage.getItem('Requestid'));

            $("#DateP").val(sessionStorage.getItem('DateP'));


            // $("#typeP").val(sessionStorage.getItem('typeP'));
            $("#FCP").val(sessionStorage.getItem('FCP'));
            $("#qIssuedP").val(sessionStorage.getItem('qIssuedP'));
            $("#testTypeP").val(sessionStorage.getItem('testTypeP'));
            $("#tTypeP").val(sessionStorage.getItem('tTypeP'));
            $("#ItemNameP").val(sessionStorage.getItem('ItemNameP'));
            $("#TestP").val(sessionStorage.getItem('testCateogryP'));


            $("#testNameeP").text(sessionStorage.getItem('testNameeP'));
            $("#itemNameeePPPP").text(sessionStorage.getItem('ItemNameP'));


            $("#RIDPP").text(sessionStorage.getItem('Requestid'));
            $("#DatePP").text(sessionStorage.getItem('DateP'));
            $("#TypePP").text(sessionStorage.getItem('Type'));
            $("#FactoryCodePP").text(sessionStorage.getItem('FCP'));
            $("#QuantityPP").text(sessionStorage.getItem('qIssuedP'));
            $("#TestTypePP").text(sessionStorage.getItem('testTypeP'));
            $("#TestCategoryPP").text(sessionStorage.getItem('testCategoryP'));
            $("#StatusPP").text(sessionStorage.getItem('statusP'));


            // $("#tTypeP1").text(sessionStorage.getItem('testNameeP'));



            if (sessionStorage.length <= 2) {

                $("#testReqD").css("display", "block");
                $("#testReqM").css("display", "block");

                // $("#testTypee1").css("display", "none");
                // $("#testTypeShow").css("display", "none");
                document.getElementById("saveDD").disabled = false;
                document.getElementById("addNewRequestD").disabled = true;
                $("#tableD").css("display", "none");
                document.getElementById("DateD").disabled = false;



            } else {
                $("#testReqD").css("display", "none");
                $("#testReqM").css("display", "none");

                // $("#testTypee1").css("display", "block");
                // $("#testTypeShow").css("display", "block");
                document.getElementById("saveDD").disabled = true;
                document.getElementById("addNewRequestD").disabled = false;
                $("#tableD").css("display", "block");
                document.getElementById("DateD").disabled = true;

            }


            $("#RIDD").val(sessionStorage.getItem('RequestidD'));

            $("#DateD").val(sessionStorage.getItem('DateD'));


            // $("#typeP").val(sessionStorage.getItem('typeP'));
            $("#FCD").val(sessionStorage.getItem('FCD'));
            $("#qIssuedD").val(sessionStorage.getItem('qIssuedD'));
            $("#testTypeD").val(sessionStorage.getItem('testTypeD'));
            $("#tTypeD").val(sessionStorage.getItem('tTypeD'));
            $("#ItemNameD").val(sessionStorage.getItem('ItemNameD'));

            $("#testNameeDD").text(sessionStorage.getItem('testNameeD'));
            $("#itemNameeeDDDD").text(sessionStorage.getItem('ItemNameD'));


            $("#RIDDDD").text(sessionStorage.getItem('RequestidD'));
            $("#DateDDDD").text(sessionStorage.getItem('DateD'));
            $("#TypeDDDD").text(sessionStorage.getItem('TypeD'));
            $("#FactoryCodeDDDD").text(sessionStorage.getItem('FCD'));
            $("#QuantityDDDD").text(sessionStorage.getItem('qIssuedD'));
            $("#TestTypeDDDD").text(sessionStorage.getItem('testTypeD'));
            $("#TestCategoryDDD").text(sessionStorage.getItem('TestCategoryD'));


            if (sessionStorage.length <= 2) {

                $("#addTestReqT").css("display", "block");
                // $("#testTypee1").css("display", "none");
                // $("#testTypeShow").css("display", "none");
                document.getElementById("saveBtnT").disabled = false;
                document.getElementById("addNewRequestTT").disabled = true;
                document.getElementById("DateT").disabled = false;
                document.getElementById("tableT").disabled = true;

                $("#tableT").css("display", "none");



            } else {

                $("#addTestReqT").css("display", "none");
                // $("#testTypee1").css("display", "block");
                // $("#testTypeShow").css("display", "block");
                document.getElementById("addNewRequestTT").disabled = false;
                document.getElementById("DateT").disabled = true;
                $("#tableT").css("display", "block");

                document.getElementById("saveBtnT").disabled = true;


            }




            // $("#typeP").val(sessionStorage.getItem('typeP'));
            $("#FCT").val(sessionStorage.getItem('FCPT'));
            $("#qIssuedT").val(sessionStorage.getItem('qIssuedT'));
            $("#testTypeT").val(sessionStorage.getItem('testTypeT'));
            $("#tTypeT").val(sessionStorage.getItem('tTypeT'));
            $("#ItemNameT").val(sessionStorage.getItem('ItemNameT'));

            $("#RIDT").val(sessionStorage.getItem('RequestidT'));
            $("#DateT").val(sessionStorage.getItem('DateT'));

            $("#supplierT").val(sessionStorage.getItem('SupplierT'));


            $("#testNameeTT").text(sessionStorage.getItem('testNameeT'));
            $("#itemNameeeTTTT").text(sessionStorage.getItem('ItemNameT'));


            $("#RIDTTTT").text(sessionStorage.getItem('RequestidT'));
            $("#DateTTTT").text(sessionStorage.getItem('DateT'));
            $("#TypeTTTT").text(sessionStorage.getItem('TypeT'));
            $("#FactoryCodeTTTT").text(sessionStorage.getItem('FCPT'));
            $("#QuantityTTTT").text(sessionStorage.getItem('qIssuedT'));
            $("#TestTypeTTTT").text(sessionStorage.getItem('testTypeT'));
            $("#TestCategorTTTT").text(sessionStorage.getItem('TestCategorT'));



            $("#RIDM").val(sessionStorage.getItem('RequestidM'));
            $("#DateM").val(sessionStorage.getItem('DateM'));
            $("#typeM").val(sessionStorage.getItem('TypeM'));
            $("#TestM").val(sessionStorage.getItem('testTypeM'));
            $("#FCM").val(sessionStorage.getItem('FCM'));
            $("#qIssuedM").val(sessionStorage.getItem('qIssuedM'));
            $("#testTypeM").val(sessionStorage.getItem('testTypeM'));
            $("#ItemNameM").val(sessionStorage.getItem('ItemNameM'));
            $("#po1").val(sessionStorage.getItem('POM'));




            $("#RIDMM").text(sessionStorage.getItem('RequestidM'));
            $("#DateMM").text(sessionStorage.getItem('DateM'));
            $("#TypeMM").text(sessionStorage.getItem('TypeM'));
            $("#FactoryCodeMM").text(sessionStorage.getItem('FCM'));
            $("#QuantityMM").text(sessionStorage.getItem('qIssuedM'));
            $("#TestTypeMM").text(sessionStorage.getItem('testTypeM'));
            $("#TestCategoryMM").text(sessionStorage.getItem('TestCategoryM'));
            $("#itemNameeeMM").text(sessionStorage.getItem('ItemNameM'));
            $("#POMM").text(sessionStorage.getItem('POM'));


            // addNewReqP


            // document.getElementById("addNewReqP").disabled = true;




            url4 = "<?php echo base_url(''); ?>LabController/getSuppliers";

            htmlappend = ``;


            $.post(url4,
                function(data, status) {



                    htmlappend += `

            
            

            
            <label class="form-contol" for="customFile">Supplier Name :</label>


<select class="form-control" value="" id="supplierP" name="supplierP">
<option value="" selected>Select Supplier Name</option>

            `


                    data.forEach(element => {


                        htmlappend += `
            


<option value="${element.SupplierName}">${element.SupplierName}</option>

            `

                    });



                    htmlappend += `

</select>



`

                    $("#suppliersP").html(htmlappend);

                    $('#supplierP').select2();


                })





            urlD = "<?php echo base_url(''); ?>LabController/getSuppliers";

            htmlappendD = ``;


            $.post(urlD,
                function(data, status) {

                    htmlappendD += `
            
            
            <label class="form-contol" for="customFile">Supplier Name :</label>


<select class="form-control" value="" id="supplierD" name="supplierD">

<option vlaue="">Select Supplier Name</option>

            `
                    data.forEach(element => {


                        htmlappendD += `
            


<option value="${element.SupplierName}">${element.SupplierName}</option>

            `

                    });



                    htmlappendD += `

</select>



`

                    $("#suppliersD").html(htmlappendD);


                    $('#supplierD').select2();

                })



            urlM = "<?php echo base_url(''); ?>LabController/getSuppliers";

            htmlappendM = ``;


            $.post(urlM,
                function(data, status) {

                    htmlappendM += `

            <div  class="row">
            <div class="col-md-6">
            
            <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"  onchange='Option()' checked>
  <label class="form-check-label" for="flexRadioDefault1">
Supplier Option
  </label>
</div>

            </div>
            <div class="col-md-6">

            
            <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" onchange='Manual()'>
  <label class="form-check-label" for="flexRadioDefault2">
   Manual Supplier
  </label>
</div>
            </div>
            </div>

    




            
            <label class="form-contol" for="customFile">Supplier Name :</label>

            <div style="display:none"  id="supplerManual">

            <input type="text" id="supplierM1" name="supplierM1" class="form-control" value="" >    


            </div>


<div id="supplierMM">

<select class="form-control" value="" id="supplierM" name="supplierM">
<option value="" selected>Select one of the following</option>

            `


                    data.forEach(element => {


                        htmlappendM += `
            


<option value="${element.SupplierName}">${element.SupplierName}</option>

            `

                    });



                    htmlappendM += `

</select>


</div>
`

                    $("#suppliersM").html(htmlappendM);



                    $('#supplierM').select2();


                })










            urlT = "<?php echo base_url(''); ?>LabController/getSuppliers";

            htmlappendT = ``;


            $.post(urlT,
                function(data, status) {

                    htmlappendT += `
            
            
            <label class="form-contol" for="customFile">Supplier Name :</label>


<select class="form-control" value="" id="supplierT" name="supplierT">
            <option value="">Select Supplier Name</option>
            `


                    data.forEach(element => {

                        // console.log(element['SupplierName']);

                        htmlappendT += `
            


<option value="${element.SupplierName}">${element.SupplierName}</option>

            `

                    });



                    htmlappendT += `

</select>



`

                    $("#suppliersT").html(htmlappendT);

                    $("#supplierT").select2();

                })







            // $("#DateP").val(date);


            urlP = "<?php echo base_url(''); ?>LabController/getLabRawMatHead";

            let TID = [];

            $.post(urlP, {
                    'Id': 1
                },
                function(data, status) {


                    data['Raw_MatHead'].forEach(element => {

                        $("#supplierP").val(element['SupplierNam']);

                    })


                })


        })

        arrayList = [];
        arrayListD = [];
        arrayListM = [];
        arrayListT = [];




        function AddNewRequestT() {


            document.getElementById('RIDT').value = '';
            document.getElementById('DateT').value = '';
            document.getElementById('FCT').value = '';
            document.getElementById('qIssuedT').value = '';
            document.getElementById('testTypeT').value = '';
            document.getElementById('ItemNameT').value = '';
            document.getElementById('supplierT').value = '';

            document.getElementById('RIDTTTT').value = '';
            document.getElementById('DateTTTT').value = '';
            document.getElementById('TypeTTTT').value = '';
            document.getElementById('FactoryCodeTTTT').value = '';
            document.getElementById('QuantityTTTT').value = '';
            document.getElementById('TestTypeTTTT').value = '';
            document.getElementById('itemNameeeTTTT').value = '';


            $("#ItemNameeT").css("display", "none");
            // $("#testTypeeT").css("display", "none");
            $("#tableT").css("display", "none");

            sessionStorage.clear();

            document.getElementById("saveBtnT").disabled = false;
            document.getElementById("DateT").disabled = false;

            document.getElementById("addNewRequestTT").disabled = true;


            $("#addTestReqT").css("display", "block");



            for (let i = 0; i <= arrayListT.length + 1; i++) {
                arrayListT.pop();
            }

            setTimeout(function() {
                location.reload(true);
            }, 2000);


        }

        function ItemOption() {

            $("#ItemNameM1").val('');



            $("#ItemNameMM").css("display", "block");

            $("#itemNameOption").css("display", "none");

        }


        function ItemManual() {

            $("#ItemNameM").val('');

            $("#ItemNameMM").css("display", "none");

            $("#itemNameOption").css("display", "block");

        }


        function Option() {

            $("#supplierM1").val('');

            $("#supplierMM").css("display", "block");
            $("#supplerManual").css("display", "none");


        }

        function Manual() {


            $("#supplierM").val('');

            $("#supplierMM").css("display", "none");
            $("#supplerManual").css("display", "block");

        }



        function AddNewRequestP() {


            document.getElementById('RIDP').value = '';
            document.getElementById('DateP').value = '';
            document.getElementById('FCP').value = '';
            document.getElementById('qIssuedP').value = '';
            document.getElementById('supplierP').value = '';
            document.getElementById('testTypeP').value = '';
            document.getElementById("DateP").disabled = false;
            document.getElementById("savePPP").disabled = true;
            document.getElementById("addNewReqP").disabled = true;



            tesetNamePPPP = [];



            $("#RIDPP").text('');
            $("#DatePP").text('');
            $("#TypePP").text('');
            $("#FactoryCodePP").text('');
            $("#QuantityPP").text('');
            $("#TestTypePP").text('');
            $("#itemNameeePPPP").text('');


            // $("#ItemNameP").text('');

            // $("#testTypee1").css("display","none");


            $("#testNameeP").text("");

            document.getElementById("savePPP").disabled = false;

            $("#testReqP").css("display", "block");
            $("#tableP").css("display", "none");

            sessionStorage.clear();

            arrayList = [];

            $("#testNamee").text(arrayList);

            // $("#testTypeShow").css("display", "none");

            $("#ItemNamee").css("display", "none");


            $("#saveBtn").css("display", "block");


            for (let i = 0; i <= arrayList.length + 1; i++) {
                arrayList.pop();
            }


            setTimeout(function() {
                location.reload(true);
            }, 2000);

        }


        function AddNewRequestD() {

            document.getElementById('RIDD').value = '';
            document.getElementById('DateD').value = '';
            document.getElementById('typeD').value = '';
            document.getElementById('FCD').value = '';
            document.getElementById('TestCD').value = '';
            document.getElementById('qIssuedD').value = '';
            document.getElementById('supplierD').value = '';
            document.getElementById('testTypeD').value = '';
            document.getElementById('ItemNameDDDD').value = '';




            $("#RIDDDD").text('');
            $("#DateDDDD").text('');
            $("#TypeDDDD").text('');
            $("#FactoryCodeDDDD").text('');
            $("#QuantityDDDD").text('');
            $("#TestTypeDDDD").text('');
            $("#itemNameeeDDDD").text('');

            $("#testReqD").css("display", "block");
            document.getElementById("saveDD").disabled = false;

            document.getElementById("DateD").disabled = false;

            $("#ItemNameeD").css("display", "none");
            $("#testTypeeD").css("display", "none");


            $("#saveBtnD").css("display", "block");


            for (let i = 0; i <= arrayListD.length + 1; i++) {
                arrayListD.pop();
            }

            sessionStorage.clear()

            setTimeout(function() {
                location.reload(true);
            }, 2000);


        }



        function AddNewRequestM() {

            document.getElementById('RIDM').value = '';
            document.getElementById('DateM').value = '';
            document.getElementById('FCM').value = '';
            document.getElementById('qIssuedM').value = '';
            document.getElementById('testTypeM').value = '';
            document.getElementById('po1').value = '';
            document.getElementById('typeM').value = '';
            document.getElementById('TestM').value = '';
            document.getElementById('ItemNameM1').value = '';
            document.getElementById('ItemNameM').value = '';
            document.getElementById('supplierM').value = '';
            document.getElementById('supplierM1').value = '';




            $("#tableM").css("display", "none");

            document.getElementById("DateM").disabled = false;


            document.getElementById("saveBtnM").disabled = false;

            $("#RIDMM").text('');
            $("#DateMM").text('');
            $("#TypeMM").text('');
            $("#FactoryCodeMM").text('');
            $("#QuantityMM").text('');
            $("#TestTypeMM").text('');
            $("#itemNameeeMM").text('');

            $("#ItemNameM1").val('');
            $("#ItemNameM").val('');




            document.getElementById("addNewRequestMM").disabled = true;

            $("#ItemNameeM").css("display", "none");
            $("#testTypeeM").css("display", "none");


            $("#testReqM").css("display", "block");


            sessionStorage.clear()
            $("#saveBtnM").css("display", "block");

            for (let i = 0; i <= arrayListM.length + 1; i++) {
                arrayListM.pop();
            }


            setTimeout(function() {
                location.reload(true);
            }, 1000);


        }



        // function addItemName(){

        // let RNO = $("#RIDP").val();

        // let ItemNameD = $("#ItemNameP").val();

        // urlEditItemNameP = "<?php echo base_url(''); ?>LabController/EditAddItemName";




        // $.post(urlEditItemNameP, 
        // {
        // 'ItemNameP':ItemNameP,
        // 'RNO': RNO

        // }
        // ,function(data, status) {

        //     alert("Item Name Added Successfully!");


        // })

        // }

        arrayItemList = [];


        function AddItemName() {



            let RNO = $("#RIDP").val();

            let ItemNameP = $("#ItemNameP").val();

            urlEditItemNameP = "<?php echo base_url(''); ?>LabController/EditAddItemName";




            $.post(urlEditItemNameP, {
                'ItemNameP': ItemNameP,
                'RNO': RNO

            }, function(data, status) {

                alert("Item Name Added Successfully!");


            })



            urlItemN = "<?php echo base_url(''); ?>LabController/getItemName";

            $.post(urlItemN, {
                    'RNO': RNO
                },
                function(data, status) {



                    data.forEach(element => {

                        $("#itemNameeeP").text(element.itemName);

                        // $("#ItemNameeP").css("display","none");

                    })


                })





        }





        function AddItemNameT() {

            let RNO = $("#RIDT").val();

            let ItemNameT = $("#ItemNameT").val();

            urlEditItemNameT = "<?php echo base_url(''); ?>LabController/EditAddItemName";




            $.post(urlEditItemNameT, {
                'ItemNameP': ItemNameT,
                'RNO': RNO

            }, function(data, status) {

                alert("Item Name Added Successfully!");


            })


            urlItemN = "<?php echo base_url(''); ?>LabController/getItemName";

            $.post(urlItemN, {
                    'RNO': RNO
                },
                function(data, status) {



                    data.forEach(element => {

                        $("#itemNameeeT").text(element.itemName);

                    })


                })

        }




        function addItemNameD() {

            let RNO = $("#RIDD").val();

            let ItemNameD = $("#ItemNameD").val();

            urlEditItemNameD = "<?php echo base_url(''); ?>LabController/EditAddItemName";




            $.post(urlEditItemNameD, {
                'ItemNameP': ItemNameD,
                'RNO': RNO

            }, function(data, status) {

                alert("Item Name Added Successfully!");



            })



            urlItemN = "<?php echo base_url(''); ?>LabController/getItemName";

            $.post(urlItemN, {
                    'RNO': RNO
                },
                function(data, status) {



                    data.forEach(element => {

                        $("#itemNameeeD").text(element.itemName);

                    })


                })



        }




        function addItemNameM() {

            let RNO = $("#RIDM").val();

            let ItemNameM = $("#ItemNameM").val();

            urlEditItemNameM = "<?php echo base_url(''); ?>LabController/EditAddItemName";




            $.post(urlEditItemNameM, {
                'ItemNameP': ItemNameM,
                'RNO': RNO

            }, function(data, status) {

                alert("Item Name Added Successfully!");


            })


            urlItemN = "<?php echo base_url(''); ?>LabController/getItemName";

            $.post(urlItemN, {
                    'RNO': RNO
                },
                function(data, status) {


                    RIDD
                    data.forEach(element => {

                        $("#itemNameeeM").text(element.itemName);

                    })


                })


        }




        function addTestTypeD() {



            let RNO = $("#RIDD").val();


            let TtypeD = $('#tTypeD').val();



            arrayListD.push(TtypeD);



            urlEditD = "<?php echo base_url(''); ?>LabController/EditAddRaw_MatHead";


            $.post(urlEditD, {
                    'TtypeP': arrayListD,
                    'RNO': RNO

                }, function(data, status) {


                    alert("Test Type Added Successfully!");


                    $("#ItemNameeD").css("display", "block");


                }



            )






            urlTestN = "<?php echo base_url(''); ?>LabController/getTestName";




            htmlappendTestN = ``;


            $.post(urlTestN, {
                    'RNO': RNO
                },
                function(data, status) {



                    data.forEach(element => {



                        $("#testNameeD").text(element.testName);



                    })



                })





            $('#tableD').dataTable({
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




        }




        function addTestTypeM() {



            let RNO = $("#RIDM").val();


            let TtypeM = $('#tTypeM').val();



            arrayListM.push(TtypeM);



            urlEditM = "<?php echo base_url(''); ?>LabController/EditAddRaw_MatHead";


            $.post(urlEditM, {
                    'TtypeP': arrayListM,
                    'RNO': RNO

                }, function(data, status) {


                    alert("Test Type Added Successfully!");


                    $("#ItemNameeM").css("display", "block");


                }




            )






            urlTestM = "<?php echo base_url(''); ?>LabController/getTestName";





            $.post(urlTestM, {
                    'RNO': RNO
                },
                function(data, status) {



                    data.forEach(element => {



                        $("#testNameeM").text(element.testName);

                        sessionStorage.setItem('testNameeM', element.testName);

                    })



                })




            $('#tableM').dataTable({
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



        }

        tesetNamePPPP = [];


        function addTestType() {


            urlTestN = "<?php echo base_url(''); ?>LabController/getTestName";





            let RNO = $("#RIDP").val();




            let TtypePPP1 = $('#tTypeP1').val();
            let TtypePPP2 = $('#tTypeP').val();


            if (TtypePPP2 != '') {


                alert(TtypePPP2 + TtypePPP1);

                // alert("testType1" + tesetNamePPPP);
                // alert("testType2" + TtypePPP);


                // alert(tesetNamePPPP + TtypePPP);

                arrayList.push(TtypePPP2 + TtypePPP1);




                urlEdit = "<?php echo base_url(''); ?>LabController/EditAddRaw_MatHead";


                $.post(urlEdit, {
                        'TtypeP': arrayList,
                        'RNO': RNO

                    }, function(data, status) {


                        alert("Test Type Added Successfully!");


                        $("#ItemNameeP").css("display", "block");

                        $('#tTypeP').val('');

                    }



                )
            } else {



                // alert("testType1" + tesetNamePPPP);
                // alert("testType2" + TtypePPP);


                // alert(tesetNamePPPP + TtypePPP);

                arrayList.push(TtypePPP1);




                urlEdit = "<?php echo base_url(''); ?>LabController/EditAddRaw_MatHead";


                $.post(urlEdit, {
                        'TtypeP': arrayList,
                        'RNO': RNO

                    }, function(data, status) {


                        alert("Test Type Added Successfully!");


                        $("#ItemNameeP").css("display", "block");


                    }



                )


            }






            $.post(urlTestN, {
                    'RNO': RNO
                },
                function(data, status) {



                    data.forEach(element => {


                        tesetNamePPPP.push(element.testName);

                        $("#testNameeP").text(element.testName);

                        sessionStorage.setItem('testNameeP', element.testName);

                    })



                })





            $('#tableP').dataTable({
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





        }






        function Undo() {



        }



        function addTestTypeT() {



            let RNO = $("#RIDT").val();


            let TtypeT = $('#tTypeT').val();



            arrayListT.push(TtypeT);



            urlEditT = "<?php echo base_url(''); ?>LabController/EditAddRaw_MatHead";


            $.post(urlEditT, {
                    'TtypeP': arrayListT,
                    'RNO': RNO

                }, function(data, status) {


                    alert("Test Type Added Successfully!");


                    $("#ItemNameeT").css("display", "block");


                }



            )







            urlTestT = "<?php echo base_url(''); ?>LabController/getTestName";





            $.post(urlTestT, {
                    'RNO': RNO
                },
                function(data, status) {



                    data.forEach(element => {



                        $("#testNameeT").text(element.testName);



                    })



                })




            $('#tableT').dataTable({
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



        }







        function saveD() {



            let RNO = $("#RIDD").val();
            let DateD = $("#DateD").val();
            let TypeD = 'Development';
            let testCategoryD = 'Material Test';
            let factoryCode = $("#FCD").val();
            let quantityIssued = $("#qIssuedD").val();
            let supplierN = $("#supplierD").val();
            let testTypeDD = $("#testTypeD").val();
            let tTypeD2 = $("#tTypeD2").val();

            let ItemNameD = $("#ItemNameDDDD").val();

            let po1 = $("#po1").val();

            // Type.length <=0 || factoryCode <= 0 || quantityIssued <= 0 || DateP <= 0 || supplierN <= 0 || testType <= 0 || ItemNameP <= 0

            if (factoryCode.length <= 0 || quantityIssued.length <= 0 || DateD.length <= 0 || supplierN.length <= 0 || testTypeDD.length <= 0 || ItemNameD.length <= 0 || tTypeD2.length <= 0) {

                alert("All Fields are mandatory");


            } else {





                urlAddD = "<?php echo base_url(''); ?>LabController/AddRaw_MatHead";


                $.post(urlAddD, {
                        'Date': DateD,
                        'Type': TypeD,
                        'testCategory': testCategoryD,
                        'factoryCode': factoryCode,
                        'quantityIssued': quantityIssued,
                        'supplier': supplierN,
                        'testType': testTypeDD,
                        'ItemName': ItemNameD,
                        'po1': po1,
                        'tTypeP1': tTypeD2

                    }


                    ,
                    function(data, status) {

                        alert("Added Request Successfully!")

                        $("#testReqD").css("display", "none");
                        $("#tableD").css("display", "block");

                        document.getElementById("saveDD").disabled = true;
                        document.getElementById("addNewRequestD").disabled = false;



                    })



                url4 = "<?php echo base_url(''); ?>LabController/getLabRawMatHead";

                let TID = [];

                $.post(url4, {

                        'RNO': RNO
                    },
                    function(data, status) {


                        data['Raw_MatHead'].forEach(element => {

                            $("#RIDD").val(element['Requestid']);


                            sessionStorage.setItem('RequestidD', element['Requestid']);
                            sessionStorage.setItem('DateD', element['Date']);
                            sessionStorage.setItem('FCD', element['FactoryCode']);
                            sessionStorage.setItem('qIssuedD', element['Quantity']);
                            sessionStorage.setItem('testTypeD', element['TestType']);
                            sessionStorage.setItem('tTypeD', element['testName']);
                            sessionStorage.setItem('ItemNameD', element['itemName']);
                            sessionStorage.setItem('TypeD', element['Type']);
                            sessionStorage.setItem('TestCategoryD', element['testCateogry']);

                            document.getElementById("DateD").disabled = true;

                            // $("#DateP").disabled = true;



                        })



                    })


                document.getElementById("testReqD").disabled = true;


                // $("#saveBtnD").css("display","none");
                $("#testTypeeD").css("display", "block");



                RIDD = "#RIDDDD";
                DateD = "#DateDDDD";
                TypeD = "#TypeDDDD";
                TestCategor = "#TestCategor"
                FactoryCodeD = "#FactoryCodeDDDD";
                QuantityD = "#QuantityDDDD";
                TestTypeD = "#TestTypeDDDD";
                ItemNameeD = "#itemNameeeDDDD";


                // userIdP = "#userIdPP";
                // EntryDateP = "#EntryDatePP";
                // SupplierNamDateP = "#SupplierNamDatePP";



                getAllDataP(RNO, RIDD, DateD, TypeD, FactoryCodeD, QuantityD, TestTypeD, ItemNameeD, TestCategor);



            }


        }





        function saveM() {

            ItemNameList = [];
            SupplierNameList = [];

            let RNO = $("#RIDM").val();
            let DateM = $("#DateM").val();
            let TypeM = 'Material';
            let testCategoryM = 'Material Test';
            let factoryCodeM = $("#FCM").val();
            let quantityIssuedM = $("#qIssuedM").val();
            let supplierM = $("#supplierM").val();
            let supplierM1 = $("#supplierM1").val();

            let testTypeM = $("#testTypeM").val();
            let ItemNameM = $("#ItemNameM").val();
            let ItemNameM1 = $("#ItemNameM1").val();

            let po1 = $("#po1").val();

            let tTypeP1 = $("#tTypeM2").val();

            //    alert(ItemNameM != undefined);

            if (ItemNameM != "") {


                ItemNameList = ItemNameM.trim();

            } else {

                ItemNameList = ItemNameM1.trim();
            }

            if (supplierM) {


                SupplierNameList = supplierM.trim();

            } else {

                SupplierNameList = supplierM1.trim();
            }

            console.log(ItemNameList.trim());

            if (parseInt(DateM.length) <= 0) {

                alert("Please Select Test Date");

            } else if (parseInt(factoryCodeM.length) <= 0) {

                alert("Please Select Factory Code");

            } else if (parseInt(quantityIssuedM.length) <= 0) {

                alert("Please Enter Issued Quantity");

            } else if (parseInt(SupplierNameList.length) <= 0) {

                alert("Please Select/Enter Supplier Name");

            } else if (parseInt(testTypeM.length) <= 0) {

                alert("Please Material Type");

            } else if (parseInt(ItemNameList.length) <= 0) {

                alert("Please Select/Enter Item Name");

            } else if (parseInt(po1.length) <= 0) {

                alert("Please Enter PO number");

            } else if (parseInt(tTypeP1.length) <= 0) {
                alert("Please Select Test Type");
            } else {




                urlAddM = "<?php echo base_url(''); ?>LabController/AddRaw_MatHead";

                $.post(urlAddM, {
                    'Date': DateM,
                    'Type': TypeM,
                    'testCategory': testCategoryM,
                    'factoryCode': factoryCodeM,
                    'quantityIssued': quantityIssuedM,
                    'supplier': SupplierNameList,
                    'testType': testTypeM,
                    'ItemName': ItemNameList,
                    'po1': po1,
                    'tTypeP1': tTypeP1

                }, function(data, status) {



                    alert("Added Request Successfully!");
                    $("#testReqM").css("display", "none");
                    $("#tableM").css("display", "block");
                    document.getElementById("saveBtnM").disabled = true;
                    document.getElementById("addNewRequestMM").disabled = false;
                    $("#tableM").css("display", "block");




                    url4M = "<?php echo base_url(''); ?>LabController/getLabRawMatHead";

                    let TID = [];

                    $.post(url4M,

                        function(data, status) {


                            data['Raw_MatHead'].forEach(element => {

                                // console.log(element)

                                $("#RIDM").val(element['Requestid']);

                                sessionStorage.setItem('RequestidM', element['Requestid']);
                                sessionStorage.setItem('DateM', element['Date']);
                                sessionStorage.setItem('FCM', element['FactoryCode']);
                                sessionStorage.setItem('qIssuedM', element['Quantity']);
                                sessionStorage.setItem('testTypeM', element['TestType']);
                                sessionStorage.setItem('tTypeM', element['testName']);
                                sessionStorage.setItem('ItemNameM', element['itemName']);
                                sessionStorage.setItem('TypeM', element['Type']);
                                sessionStorage.setItem('TestCategoryM', element['testCateogry']);
                                sessionStorage.setItem('POM', element['Po']);
                                sessionStorage.setItem('POM', element['comptest']);


                            })



                            document.getElementById("DateM").disabled = true;


                        })



                    RIDM = "#RIDMM";
                    DateM = "#DateMM";
                    TypeM = "#TypeMM";
                    TestCategoryM = "#TestCategoryMM";
                    FactoryCodeM = "#FactoryCodeMM";
                    QuantityM = "#QuantityMM";
                    TestTypeM = "#TestTypeMM";
                    itemNameeeM = "#itemNameeeMM";
                    POM = "#POMM";

                    // userIdP = "#userIdPP";
                    // EntryDateP = "#EntryDatePP";
                    // SupplierNamDateP = "#SupplierNamDatePP";



                    getAllDataP(RNO, RIDM, DateM, TypeM, FactoryCodeM, QuantityM, TestTypeM, itemNameeeM, TestCategoryM, POM);


                })



                $("#testReq").css("display", "none");


                $("#testTypeeM").css("display", "block");






            }






        }



        function getAllDataP(RNO, RIDP, DATE, Type, FactoryCode, Quantity, TestType, ItemName, testCategore, POM) {



            urlgetAllData = "<?php echo base_url(''); ?>LabController/getLabRawMatHead";

            $.post(urlgetAllData, {
                    'RNO': RNO
                },
                function(data, status) {

                    data['Raw_MatHead'].forEach(element => {

                        $(RIDP).text(element.Requestid);
                        $(DATE).text(element.Date);
                        $(Type).text(element.Type);
                        $(FactoryCode).text(element.FactoryCode);
                        $(Quantity).text(element.Quantity);
                        $(TestType).text(element.TestType);
                        $(ItemName).text(element.itemName);
                        $(testCategore).text(element.testCateogry);
                        $(POM).text(element.Po);



                    })


                })


        }



        function saveP() {

            arrayList = [];

            let tTypeP = $("#tTypeP").val();


            let RNO = $("#RIDP").val();
            let DateP = $("#DateP").val();
            let TypeP = 'Production';
            let testCategoryP = 'Material Test';
            let factoryCode = $("#FCP").val();
            let quantityIssued = $("#qIssuedP").val();
            let supplierN = $("#supplierP").val();
            let testType = $("#testTypeP").val();

            let ItemNameP = $("#ItemNameP").val();



            // || tTypeP <= 0 

            reqDateP = [];

            if (factoryCode.length <= 0 || quantityIssued.length <= 0 || DateP.length <= 0 || supplierN.length <= 0 || testType.length <= 0 || ItemNameP.length <= 0) {

                alert("All Fields are mandatory");


            } else {


                urlAdd = "<?php echo base_url(''); ?>LabController/AddRaw_MatHead";


                $.post(urlAdd, {
                    'Date': DateP,
                    'Type': TypeP,
                    'testCategory': testCategoryP,
                    'factoryCode': factoryCode,
                    'quantityIssued': quantityIssued,
                    'supplier': supplierN,
                    'testType': testType,
                    // 'tTypeP': tTypeP,
                    'ItemName': ItemNameP

                }, function(data, status) {





                    // sessionStorage.setItem('typeP',testCategory);
                    sessionStorage.setItem('addNewReqP', document.getElementById("addNewReqP").disabled = false);
                    alert("Test Request Added Successfully!");


                    $("#testReqP").css("display", "none");
                    $("#saveBtnP").css("display", "none");
                    $("#tableP").css("display", "block");

                    document.getElementById("savePPP").disabled = true;

                    document.getElementById("addNewReqP").disabled = false;




                })




                url4 = "<?php echo base_url(''); ?>LabController/getLabRawMatHead";

                let TID = [];

                $.post(url4,
                    function(data, status) {


                        data['Raw_MatHead'].forEach(element => {

                            $("#RIDP").val(element['Requestid']);


                            sessionStorage.setItem('Requestid', element['Requestid']);
                            sessionStorage.setItem('DateP', element['Date']);
                            sessionStorage.setItem('FCP', element['FactoryCode']);
                            sessionStorage.setItem('qIssuedP', element['Quantity']);
                            sessionStorage.setItem('testTypeP', element['TestType']);
                            sessionStorage.setItem('tTypeP', element['testName']);
                            sessionStorage.setItem('ItemNameP', element['itemName']);
                            sessionStorage.setItem('Type', element['Type']);
                            sessionStorage.setItem('testCategoryP', element['testCateogry']);
                            sessionStorage.setItem('statusP', element['status']);

                            document.getElementById("DateP").disabled = true;

                            // $("#DateP").disabled = true;$(doc)



                        })



                    })


                // $("#testTypee1").css("display","block");
                $("#testReqP").css("display", "none");
                // $("#testTypeShow").css("display","block");


                // $("#saveBtn").css("display","none");
                $("#testTypee").css("display", "block");




                RIDP = "#RIDPP";
                DateP = "#DatePP";
                TypeP = "#TypePP";
                FactoryCodeP = "#FactoryCodePP";
                QuantityP = "#QuantityPP";
                TestTypeP = "#TestTypePP";
                ItemName = "#itemNameeePPPP";
                testCatgeor = "#TestCategoryPP"


                // userIdP = "#userIdPP";
                // EntryDateP = "#EntryDatePP";
                // SupplierNamDateP = "#SupplierNamDatePP";



                getAllDataP(RNO, RIDP, DateP, TypeP, FactoryCodeP, QuantityP, TestTypeP, ItemName, testCatgeor);

            }





        }





        function saveT() {



            let RNOT = $("#RIDT").val();
            let DateT = $("#DateT").val();
            let TypeT = 'Trial';
            let testCategoryT = 'Material Test';
            let factoryCodeT = $("#FCT").val();
            let quantityIssuedT = $("#qIssuedT").val();
            let supplierT = $("#supplierT").val();
            let testTypeT = $("#testTypeT").val();
            let ItemNameT = $("#ItemNameT").val();
            let po1 = $("#po1").val();

            let tTypeT2 = $("#tTypeT2").val();

            if (factoryCodeT.length <= 0 || quantityIssuedT.length <= 0 || DateT.length <= 0 || supplierT.length <= 0 || testTypeT.length <= 0 || ItemNameT.length <= 0 || tTypeT2.length <= 0) {

                alert("All Fields are mandatory");


            } else {

                urlAddT = "<?php echo base_url(''); ?>LabController/AddRaw_MatHead";


                $.post(urlAddT, {
                    'Date': DateT,
                    'Type': TypeT,
                    'testCategory': testCategoryT,
                    'factoryCode': factoryCodeT,
                    'quantityIssued': quantityIssuedT,
                    'supplier': supplierT,
                    'testType': testTypeT,
                    'ItemName': ItemNameT,
                    'po1': po1,
                    'tTypeP1': tTypeT2

                }, function(data, status) {

                    alert("Added Request Successfully!");


                    $("#addTestReqT").css("display", "none");
                    $("#tableT").css("display", "block");

                    document.getElementById("addNewRequestTT").disabled = false;

                })


                $("#testReqT").css("display", "none");



                url4T = "<?php echo base_url(''); ?>LabController/getLabRawMatHead";

                let TID = [];

                $.post(url4T,
                    function(data, status) {


                        data['Raw_MatHead'].forEach(element => {


                            $("#RIDT").val(element['Requestid']);




                            sessionStorage.setItem('RequestidT', element['Requestid']);
                            sessionStorage.setItem('DateT', element['Date']);
                            sessionStorage.setItem('FCPT', element['FactoryCode']);
                            sessionStorage.setItem('qIssuedT', element['Quantity']);
                            sessionStorage.setItem('testTypeT', element['TestType']);
                            sessionStorage.setItem('tTypeT', element['testName']);
                            sessionStorage.setItem('ItemNameT', element['itemName']);
                            sessionStorage.setItem('SupplierT', element['SupplierNam']);
                            sessionStorage.setItem('TypeT', element['Type']);
                            sessionStorage.setItem('TestCategorT', element['testCateogry']);




                        })


                        document.getElementById("DateT").disabled = true;


                    })





                document.getElementById("saveBtnT").disabled = true;
                $("#testTypeeT").css("display", "block");



                RIDT = "#RIDTTTT";
                DateT = "#DateTTTT";
                TypeT = "#TypeTTTT";
                FactoryCodeT = "#FactoryCodeTTTT";
                QuantityT = "#QuantityTTTT";
                TestTypeT = "#TestTypeTTTT";
                ItemNameT = "#itemNameeeTTTT";

                // userIdP = "#userIdPP";
                // EntryDateP = "#EntryDatePP";
                // SupplierNamDateP = "#SupplierNamDatePP";



                getAllDataP(RNOT, RIDT, DateT, TypeT, FactoryCodeT, QuantityT, TestTypeT, ItemNameT);


            }




        }




        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
            window.location.reload();
        }



        // Dashboard Mini data user wise request handling
        var TotalReq = [];
        var pendingOrNoCssNoFGT = [];
        var sendToLabOrAppliedCssNoFGT = [];
        var acknowledgedByLabFGT = [];

        var TotalReq3 = [];
        var pendingOrNoCssNoFGT3 = [];
        var sendToLabOrAppliedCssNoFGT3 = [];
        var acknowledgedByLabFGT3 = [];

        var user_id = <?php echo $user_id; ?>;
        console.log("user id is ", user_id);

        $(document).ready(function() {
            let date = new Date().toJSON().substr(0, 10);
            $("#start_date").val(date);
            $("#end_date").val(date);

            let currentDate = new Date().toJSON().substr(0, 7);
            console.log(currentDate);
            $('#getmonth').val(currentDate);


            url = "<?php echo base_url('LabController/allFGTRequests'); ?>"
            $.post(url, {
                "search": false
            }, function(data) {

                // FGT Requests
                // TotalReq = data.allFGTRequests;
                data.allFGTRequests.filter(item => {
                    if (item.userid == user_id) {
                        TotalReq.push(item);
                    }
                    if (item.RequestStatus == null && item.userid == user_id) {
                        pendingOrNoCssNoFGT.push(item)
                    }
                    if (item.RequestStatus == "Send to Lab" && item.userid == user_id) {
                        sendToLabOrAppliedCssNoFGT.push(item)
                    }
                    if ((item.RequestStatus == "Acknowledge By Lab" && item.userid == user_id)) {
                        acknowledgedByLabFGT.push(item)
                    }
                })
                let html = `<div class="col-md-4">
                                        </div>
                                        <div class="col-md-4 detailsClick " id="allFGTRequests">
                                            <a href="javascript:void(0)">
                                                <div class="p-3 bg-primary rounded overflow-hidden position-relative text-white mb-g">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                            ${TotalReq.length}
                                                            <small class="m-0 l-h-n "> <strong>Total FGT Requests </strong> </small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                        </div>

                                        <div class="col-md-4 detailsClick " id="pendingOrNoCssNoFGT">
                                            <a href="javascript:void(0)">
                                                <div class="p-3 bg-warning rounded overflow-hidden position-relative text-white mb-g">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                            ${pendingOrNoCssNoFGT.length}
                                                            <small class="m-0 l-h-n "> <strong>(No CSS No.) Requests </strong> </small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>
                                        

                                        <div class="col-md-4 detailsClick" id="sendToLabOrAppliedCssNoFGT" >
                                            <a href="javascript:void(0)">
                                                <div class="p-3 bg-danger rounded overflow-hidden position-relative text-white mb-g" >
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">

                                                        ${sendToLabOrAppliedCssNoFGT.length}
                                                            <small class="m-0 l-h-n"> <strong>(Applied CSS No./Send To Lab/Lab Pending) Requests</strong></small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4 detailsClick" id="acknowledgedByLabFGT">
                                            <a href="javascript:void(0)">
                                                <div class="p-3  rounded overflow-hidden position-relative text-white mb-g"
                                                style="background-color:green">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                        ${acknowledgedByLabFGT.length}
                                                            <small class="m-0 l-h-n"> <strong>(Aknowledged By Lab) Requests</strong></small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>`
                $("#counterShow").html("");
                $("#counterShow").html(html);


                // New Raw Material Requests
                // TotalReq3 = data.allNewRawMaterialRequests;
                data.allNewRawMaterialRequests.filter(item => {
                    if (item.userid == user_id) {
                        TotalReq3.push(item);
                    }
                    if (item.status == 'Pending' && item.userid == user_id) {
                        pendingOrNoCssNoFGT3.push(item)
                    }
                    if (item.status == "Send to Lab" && item.userid == user_id) {
                        sendToLabOrAppliedCssNoFGT3.push(item)
                    }
                    if (item.LabAcknowledge == "Acknowledged" && item.userid == user_id) {
                        acknowledgedByLabFGT3.push(item)
                    }
                })
                let html3 = `        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4 detailsClick3 " id="allNewRawMaterialRequests">
                                            <a href="javascript:void(0)">
                                                <div class="p-3 bg-primary rounded overflow-hidden position-relative text-white mb-g">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                            ${TotalReq3.length}
                                                            <small class="m-0 l-h-n "> <strong>Total Raw Material Requests </strong> </small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>
                                        
                                        <div class="col-md-4">
                                        </div>

                                        <div class="col-md-4 detailsClick3 " id="pendingOrNoCssNoFGT3">
                                            <a href="javascript:void(0)">
                                                <div class="p-3 bg-warning rounded overflow-hidden position-relative text-white mb-g">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                            ${pendingOrNoCssNoFGT3.length}
                                                            <small class="m-0 l-h-n "> <strong>(No CSS No.) Requests </strong> </small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>
                                        

                                        <div class="col-md-4 detailsClick3" id="sendToLabOrAppliedCssNoFGT3" >
                                            <a href="javascript:void(0)">
                                                <div class="p-3 bg-danger rounded overflow-hidden position-relative text-white mb-g">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">

                                                        ${sendToLabOrAppliedCssNoFGT3.length}
                                                            <small class="m-0 l-h-n"> <strong>(Applied CSS No./Send To Lab/Lab Pending) Requests</strong></small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4 detailsClick3" id="acknowledgedByLabFGT3">
                                            <a href="javascript:void(0)">
                                                <div class="p-3 rounded overflow-hidden position-relative text-white mb-g"
                                                style="background-color:green">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                        ${acknowledgedByLabFGT3.length}
                                                            <small class="m-0 l-h-n"> <strong>(Aknowledged By Lab) Requests</strong></small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>`
                $("#counterShow3").html("");
                $("#counterShow3").html(html3);

            })


        });

        $("#counterShow").on('click', '.detailsClick', function(e) {
            let id = $(this).attr('id');
            // console.log(id)
            let data;
            let Title;
            if (id == "allFGTRequests") {
                data = TotalReq
                title = "Total FGT Requests"
            } else if (id == "pendingOrNoCssNoFGT") {
                data = pendingOrNoCssNoFGT
                title = "Pending/No CSS No. FGT Requests"
            } else if (id == "sendToLabOrAppliedCssNoFGT") {
                data = sendToLabOrAppliedCssNoFGT
                title = "Applied CSS NO/Send To Lab/Lab Pending Requests"
            } else if (id == "acknowledgedByLabFGT") {
                data = acknowledgedByLabFGT
                title = "Aknowledged By Lab Requests"
            }

            $("#reportData").html('')
            // console.log(data);return;




            let appendtable = '';
            appendtable += `<h1 style="text-align:center;font-weight:bolder;border:1px solid black;padding:20px">${title}</h3>
                                <table class="table table-bordered table-hover table-responsive table-striped w-100" id="OtReport">
                                <thead class="bg-primary-200 text-light p-2">
                                <tr>
                                    <th class="h5">Request Date</th>
                                    <th class="h5">Lab Aknowledged Date</th>
                                    <th class="h5">CSS NO</th>
                                    <th class="h5">Factory Code</th>
                                    <th class="h5">Working No</th>
                                    <th class="h5">Article No</th>
                                    <th class="h5">Modal Name</th>
                                    <th class="h5">Size</th>
                                    <th class="h5">Ball Type</th>                  
                                    <th class="h5">Main Material Color</th>
                                    <th class="h5">Convert Mat</th>
                                    <th class="h5">Backing</th>
                                    <th class="h5">Bladder Details</th>
                                    <th class="h5">Production Month</th>
                                    <th class="h5">Printing Color</th>
                                    <th class="h5">Panel Shape</th>
                                    <th class="h5">Test Type</th>
                                    <th class="h5">Deliever Qty</th>
                                    <th class="h5">Any Info</th>
                                    <th class="h5">Lab Status</th>
                                    <th class="h5">CSS Status</th>
                                    <th class="h5">Request Status</th>
                                    <th class="h5">Generated By</th>`
            if (id == 'acknowledgedByLabFGT') {

                appendtable += `<th class="h5">Action</th>`
            }

            appendtable += `</tr>
                                </thead>
                                <tbody>`
            data.forEach((element) => {
                appendtable += `<tr>
                            <td><span class="badge badge-info p-1">${element.Date != null ? element.Date.split("00:00:00")[0]: ''}</span></td>
                            <td><span class="badge badge-info p-1">${element.labAcceptDate != null ? element.labAcceptDate.split("00:00:00")[0]: ''}</span></td>
                            <td><span class="badge badge-warning p-1">${element.CssNO}</span></td>
                            <td>${element.factoryCode}</td>
                            <td>${element.WorkingNo}</td>
                            <td>${element.Articleno}</td>
                            <td>${element.ModelName}</td>
                            <td>${element.Size}</td>
                            <td>${element.BallType}</td>               
                            <td>${element.mainmaterialColor}</td>
                            <td><span>${element.Covermat}</span></td>
                            <td><span>${element.backing}</span></td>
                            <td><span> ${element.Bladderdetail} </span></td>
                            <td><span> ${element.ProductionMonth} </span></td>
                            <td><span> ${element.Printingcolor} </span></td>
                            <td><span> ${element.panelShape} </span></td>
                            <td><span> ${element.testype} </span></td>
                            <td><span> ${element.deliverqty} </span></td>
                            <td><span> ${element.additionalinfo} </span></td>
                            <td><span class="badge badge-secondary p-1">${element.LabStatus == null ? `Pending` : `Aknowledged`} </span></td>
                            <td><span class="badge badge-secondary p-1">${element.CsStatus == 1 ? `Applied Css` : `null`} </span></td>

                            <td><span class="badge badge-warning p-1">${element.RequestStatus}</span></td>
                            <td><span class="badge badge-danger p-1">${element.LoginName}</span></td>`

                if (id == 'acknowledgedByLabFGT') {
                    appendtable += `<td>
                                    <button type="button" style="display: inline-block;" class="btn btn-warning btn-xs updatebtn2" id="" onclick="printFgt('${element.TID}', '${element.CssNO}')"><i class="fal fa-print" aria-hidden="true" ></i></button> &nbsp;
                                    
                                    </td>`
                }

                appendtable += `</tr>`;
            })

            appendtable += `</tbody>

                                </table>`

            $("#reportData").html(appendtable)
            $('#OtReport').dataTable({
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
        })


        $("#counterShow3").on('click', '.detailsClick3', function(e) {
            let id = $(this).attr('id');
            // console.log(id)
            let data;
            let Title;
            if (id == "allNewRawMaterialRequests") {
                data = TotalReq3
                title = "Total New Raw Material Requests"
            } else if (id == "pendingOrNoCssNoFGT3") {
                data = pendingOrNoCssNoFGT3
                title = "Pending/No CSS No. Raw Material Requests"
            } else if (id == "sendToLabOrAppliedCssNoFGT3") {
                data = sendToLabOrAppliedCssNoFGT3
                title = "Applied CSS NO/Send To Lab/Lab Pending Requests"
            } else if (id == "acknowledgedByLabFGT3") {
                data = acknowledgedByLabFGT3
                title = "Aknowledged By Lab Requests"
            }

            $("#reportData3").html('')
            console.log(data);




            let appendtable = '';
            appendtable += `<h1 style="text-align:center;font-weight:bolder;border:1px solid black;padding:20px">${title}</h3>
                                <table class="table table-bordered table-hover table-responsive table-striped w-100" id="OtReport3">
                                <thead class="bg-primary-200 text-light p-2">
                                <tr>
                                    <th class="h5">CSS No</th>
                                    <th class="h5">Request Generated Date</th>
                                    <th class="h5">Completion Date</th>
                                    <th class="h5">Due Date</th>
                                    <th class="h5">Factory Code</th>
                                    <th class="h5">Item Name</th>
                                    <th class="h5">Lab Status</th>
                                    <th class="h5">Material Type</th>
                                    <th class="h5">PO No</th>
                                    <th class="h5">Quantity Issued</th>
                                    <th class="h5">Quantity Recieved</th>
                                    <th class="h5">Quantity Retained</th>
                                    <th class="h5">Remarks</th>
                                    <th class="h5">Status</th>
                                    <th class="h5">Supplier Name</th>
                                    <th class="h5">Test Type</th>
                                    <th class="h5">Material Type</th>
                                    <th class="h5">Test Name</th>
                                    <th class="h5">Lab Acknowledge</th>
                                    <th class="h5">Generated By</th>
                                    <th class="h5">Receiver Signature</th>
                                    <th class="h5">Sender Signature</th>
                                    <th class="h5">Undo Request</th>`
            if (id == 'acknowledgedByLabFGT3') {
                appendtable += `<th class="h5">Action</th>`

            }
            appendtable += `</tr>
                                </thead>
                                <tbody>`
            data.forEach((element) => {
                appendtable += `<tr>
                            <td><span class="badge badge-info p-1">${element.CSSNo != null ? element.CSSNo : ''}</span></td>
                            <td><span class="badge badge-warning p-1">${element.Date != null ? element.Date.split("00:00:00")[0] : ''}</span></td>
                            <td><span class="badge badge-warning p-1">${element.comDate != null ? element.comDate.split("00:00:00")[0] : ''}</span></td>
                            <td><span class="badge badge-warning p-1">${element.dueDate != null ? element.dueDate.split("00:00:00")[0] : ''}</span></td>
                            <td>${element.FactoryCode}</td>
                            <td>${element.itemName}</td>
                            <td><span class="badge badge-warning p-1">${element.LabStatus == 1 ? `Send To Lab` : ''}</span></td>
                            <td>${element.Type}</td>
                            <td>${element.Po}</td>
                            <td>${element.Quantity}</td>
                            <td>${element.qtyRece}</td>               
                            <td>${element.qtyRetain}</td>
                            <td><span>${element.remarks}</span></td>
                            <td><span class="badge badge-danger p-1"> ${element.status == "Pending" ? `Pending` : element.status == "Send to Lab" ? `Send to Lab` : `Locked`} </span></td>
                            <td><span> ${element.SupplierNam} </span></td>
                            <td><span> ${element.TestType} </span></td>
                            <td><span> ${element.Type} </span></td>
                            <td><span> ${element.comptest} </span></td>
                            <td><span class="badge badge-info p-1"> ${element.LabAcknowledge == "Acknowledged" ? `Acknowledged`: ``} </span></td>
                            <td><span> ${element.LoginName} </span></td>
                            <td><span> ${element.receSign} </span></td>
                            <td><span> ${element.senderSign} </span></td>

                            <td>
                            <button type="button" class="btn btn-danger btn-xs deleteBtn waves-effect waves-themed" id="undoBtn.${element.Requestid}"
                            ><i class="fal fa-delete" aria-hidden="true"></i>Delete</button>
                            </td>`
                if (id == 'acknowledgedByLabFGT3') {

                    appendtable += `<td>
                                <button type="button" class="btn btn-warning btn-xs customprintButton" id="btnPrint.${element.CSSNo}"><i class="fal fa-print" aria-hidden="true"></i></button>
                                </td>`
                }
                appendtable += `</tr>`
            })

            appendtable += `</tbody>

                                </table>`

            $("#reportData3").html(appendtable)
            $('#OtReport3').dataTable({
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
        })

        // Search By Month
        $('#searchBtn').click(function() {
            $("#reportData").html('');
            $("#reportData3").html('');
            getmonth = $('#getmonth').val();
            console.log(getmonth);

            TotalReq.length = 0;
            pendingOrNoCssNoFGT.length = 0;
            sendToLabOrAppliedCssNoFGT.length = 0;
            acknowledgedByLabFGT.length = 0;

            TotalReq3.length = 0;
            pendingOrNoCssNoFGT3.length = 0;
            sendToLabOrAppliedCssNoFGT3.length = 0;
            acknowledgedByLabFGT3.length = 0;


            url = "<?php echo base_url('LabController/allFGTRequests'); ?>"
            $.post(url, {
                "getMonth": getmonth,
                "search": true
            }, function(data) {

                // FGT Requests
                data.allFGTRequests.filter(item => {
                    if (item.RequestStatus == null && item.userid == user_id) {
                        TotalReq.push(item);
                        pendingOrNoCssNoFGT.push(item)
                    }
                    if (item.RequestStatus == "Send to Lab" && item.userid == user_id) {
                        TotalReq.push(item);
                        sendToLabOrAppliedCssNoFGT.push(item)
                    }
                    if ((item.RequestStatus == "Acknowledge By Lab" && item.userid == user_id)) {
                        TotalReq.push(item);
                        acknowledgedByLabFGT.push(item)
                    }
                })
                let html = `<div class="col-md-4">
                                        </div>
                                        <div class="col-md-4 detailsClick" id="allFGTRequests">
                                            <a href="javascript:void(0)">
                                                <div class="p-3 bg-primary rounded overflow-hidden position-relative text-white mb-g">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                            ${TotalReq.length}
                                                            <small class="m-0 l-h-n "> <strong>Total FGT Requests </strong> </small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                        </div>

                                        <div class="col-md-4 detailsClick" id="pendingOrNoCssNoFGT">
                                            <a href="javascript:void(0)">
                                                <div class="p-3 bg-warning rounded overflow-hidden position-relative text-white mb-g">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                            ${pendingOrNoCssNoFGT.length}
                                                            <small class="m-0 l-h-n "> <strong>(No CSS No.) Requests </strong> </small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>
                                        

                                        <div class="col-md-4 detailsClick" id="sendToLabOrAppliedCssNoFGT" >
                                            <a href="javascript:void(0)">
                                                <div class="p-3 bg-danger rounded overflow-hidden position-relative text-white mb-g" >
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">

                                                        ${sendToLabOrAppliedCssNoFGT.length}
                                                            <small class="m-0 l-h-n"> <strong>(Applied CSS No./Send To Lab/Lab Pending) Requests</strong></small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4 detailsClick" id="acknowledgedByLabFGT">
                                            <a href="javascript:void(0)">
                                                <div class="p-3  rounded overflow-hidden position-relative text-white mb-g"
                                                style="background-color:green">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                        ${acknowledgedByLabFGT.length}
                                                            <small class="m-0 l-h-n"> <strong>(Aknowledged By Lab) Requests</strong></small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>`
                $("#counterShow").html("");
                $("#counterShow").html(html);


                // New Raw Material Requests
                data.allNewRawMaterialRequests.filter(item => {
                    if (item.status == 'Pending' && item.userid == user_id) {
                        TotalReq3.push(item);
                        pendingOrNoCssNoFGT3.push(item)
                    }
                    if (item.status == "Send to Lab" && item.userid == user_id) {
                        TotalReq3.push(item);
                        sendToLabOrAppliedCssNoFGT3.push(item)
                    }
                    if (item.LabAcknowledge == "Acknowledged" && item.userid == user_id) {
                        TotalReq3.push(item);
                        acknowledgedByLabFGT3.push(item)
                    }
                })
                let html3 = `        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4 detailsClick3" id="allNewRawMaterialRequests">
                                            <a href="javascript:void(0)">
                                                <div class="p-3 bg-primary rounded overflow-hidden position-relative text-white mb-g">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                            ${TotalReq3.length}
                                                            <small class="m-0 l-h-n "> <strong>Total Raw Material Requests </strong> </small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>
                                        
                                        <div class="col-md-4">
                                        </div>

                                        <div class="col-md-4 detailsClick3" id="pendingOrNoCssNoFGT3">
                                            <a href="javascript:void(0)">
                                                <div class="p-3 bg-warning rounded overflow-hidden position-relative text-white mb-g">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                            ${pendingOrNoCssNoFGT3.length}
                                                            <small class="m-0 l-h-n "> <strong>(No CSS No.) Requests </strong> </small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>
                                        

                                        <div class="col-md-4 detailsClick3" id="sendToLabOrAppliedCssNoFGT3" >
                                            <a href="javascript:void(0)">
                                                <div class="p-3 bg-danger rounded overflow-hidden position-relative text-white mb-g">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">

                                                        ${sendToLabOrAppliedCssNoFGT3.length}
                                                            <small class="m-0 l-h-n"> <strong>(Applied CSS No./Send To Lab/Lab Pending) Requests</strong></small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4 detailsClick3" id="acknowledgedByLabFGT3">
                                            <a href="javascript:void(0)">
                                                <div class="p-3 rounded overflow-hidden position-relative text-white mb-g"
                                                style="background-color:green">
                                                    <div class="">
                                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                                        ${acknowledgedByLabFGT3.length}
                                                            <small class="m-0 l-h-n"> <strong>(Aknowledged By Lab) Requests</strong></small>
                                                        </h3>
                                                    </div>
                                                    <i class="fal fa-futbol position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                                </div>
                                            </a>
                                        </div>`
                $("#counterShow3").html("");
                $("#counterShow3").html(html3);
            })
        })

        function printFgt(TID, CssNo) {
            url1 = '<?php echo base_url('LabController/getFGTTestReqHead'); ?>'
            url2 = '<?php echo base_url('LabController/getFGTTestReqDetails'); ?>'
            let returnedTID;
            $.post(url1, {
                    CssNo: CssNo
                },
                function(data, status) {
                    if (data != '') {
                        returnedTID = data[0]['TID'];
                        if (data[0]['FC'] == 'B34006') { //Airless Mini Formate
                            $('#labNoFGTAirlessMini').html(data[0]['LabNo']);
                            $('#cssNoFGTAirlessMini').html(data[0]['CssNo']);
                            $('#receiveDateFGTAirlessMini').html(data[0]['Receiving_Date']);
                            $('#testingDataFGTSAirlessMini').html(data[0]['Testing_DateS']);
                            $('#testingDataFGTEAirlessMini').html(data[0]['Testing_DateE']);
                            $('#issueDateFGTAirlessMini').html(data[0]['Issue_Date']);
                            $('#environmentalCondFGTAirlessMini').html(data[0]['EnvironmentalC']);
                            $('#testAccToCatFGTAirlessMini').html(data[0]['TestAccToCat']);
                            $('#coverMatFGTAirlessMini').html(data[0]['CoverMat']);
                            $('#backingFGTAirlessMini').html(data[0]['Backing']);
                            $('#bladderFGTAirlessMini').html(data[0]['Bladder']);
                            $('#ballTypeFGTAirlessMini').html(data[0]['BallType']);
                            $('#fifaStumpFGTAirlessMini').html(data[0]['Fifa_stump']);
                            $('#prodMonthFGTAirlessMini').html(data[0]['ProductionMon']);
                            $('#testTypeFGTAirlessMini').html(data[0]['TestType']);
                            $('#mainMatColorFGTAirlessMini').html(data[0]['MainMatColor']);
                            $('#printingColorFGTAirlessMini').html(data[0]['PrintingColor']);
                            $('#modelNameFGTAirlessMini').html(data[0]['ModelName']);
                            $('#acticleNoFGTAirlessMini').html(data[0]['Article']);
                            $('#workingNoFGTAirlessMini').html(data[0]['Working']);
                            $('#resultFGTAirlessMini').html(data[0]['Result']);
                            $('#testedbyFGtAirlessMini').html(data[0]['TestedBy']);
                            if (data[0]['freshImage']) {
                                $("#freshImageFGTAirlessMini").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].freshImage);
                            } else {
                                $("#freshImageFGTAirlessMini").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            if (data[0]['afterShooterImage']) {
                                $("#afterShooterImageFGTAirlessMini").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].afterShooterImage);
                            } else {
                                $("#afterShooterImageFGTAirlessMini").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            if (data[0]['hydrolysisImage']) {
                                $("#hydrolysisImageFGTAirlessMini").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].hydrolysisImage);
                            } else {
                                $("#hydrolysisImageFGTAirlessMini").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            if (data[0]['drumImage']) {
                                $("#drumImageFGTAirlessMini").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].drumImage);
                            } else {
                                $("#drumImageFGTAirlessMini").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }
                            $.post(url2, {
                                TID: returnedTID
                            }, function(data, status) {
                                // console.log("details data",data);
                                let html;
                                if (data) {
                                    data.forEach((element, index) => {
                                        html += `<tr>
                                                <td style="padding:left: 2px">${element.Test}</td>
                                                <th style="text-align:center">${element.Method }</th>
                                                <th style="text-align:center">${element.Condition}</th>
                                                <th style="text-align:center">${element.Unit}</th>
                                                <th style="text-align:center">${element.AirlessMiniSoccerball}</th>
                                                <th style="text-align:center">${element.Ball1}</th>
                                                <th style="text-align:center">${element.Ball2}</th>
                                                <th style="text-align:center">${element.Ball3}</th>
                                                <th style="text-align:center">${element.Ball4}</th>
                                                <th style="text-align:center">${element.Ball5}</th>
                                        </tr>`

                                    })
                                    $('#fgtTestDetailsAirlessMini').html(html);
                                }
                            });
                            $('#exampleModalFGTAirlessMiniTesting').modal('toggle');
                        } else if (data[0]['Type'] == 'Adhesion test') { //For FGT Adhesion test
                            $('#testNoFGTAdhesion').html(data[0]['TestNo']);
                            $('#dateFGTAdhesion').html(data[0]['Testing_DateS']);
                            $('#RecDateFGTAdhesion').html(data[0]['Receiving_Date']);
                            $('#cssNoFGTAdhesion').html(data[0]['CssNo']);
                            $('#articleNoFGTAdhesion').html(data[0]['Article']);
                            $('#articleNameFGTAdhesion').html(data[0]['ArticleName']);
                            $('#POFGTAdhesion').html(data[0]['PONo']);
                            $('#resultFGTAdhesion').html(data[0]['Result']);
                            $('#testedByFGTAdhesion').html(data[0]['TestedBy']);
                            $.post(url2, {
                                TID: returnedTID
                            }, function(data, status) {
                                // console.log("details data",data);
                                let html;
                                if (data) {
                                    data.forEach((element, index) => {
                                        html += `<tr>
                                                <td style="padding:left: 2px">${element.AdhesionDate}</td>
                                                <th style="text-align:center">${element.BatchReference}</th>
                                                <th style="text-align:center">${element.ArticleNo}</th>
                                                <th style="text-align:center">${element.Standard}</th>
                                                <th style="text-align:center">${element.MaxForce}</th>
                                                <th style="text-align:center">${element.AvgForce}</th>
                                                <th style="text-align:center">${element.Comments}</th>
                                        </tr>`

                                    })
                                    $('#fgtTestDetailsAdhesion').html(html);
                                }
                            });
                            $('#fgtTestingAdhesionModel').modal('toggle');
                        } else if (data[0]['Type'] == 'CSM Rebound') { // For FGT CSM Rebound
                            $('#labNoFGTCSM').html(data[0]['LabNo']);
                            $('#cssNoFGTCSM').html(data[0]['CssNo']);
                            $('#receiveDateFGTCSM').html(data[0]['Receiving_Date']);
                            $('#testingDataFGTSCSM').html(data[0]['Testing_DateS']);
                            $('#testingDataFGTECSM').html(data[0]['Testing_DateE']);
                            $('#issueDateFGTCSM').html(data[0]['Issue_Date']);
                            $('#environmentalCondFGTCSM').html(data[0]['EnvironmentalC']);
                            $('#testAccToCatFGTCSM').html(data[0]['TestAccToCat']);
                            $('#coverMatFGTCSM').html(data[0]['CoverMat']);
                            $('#backingFGTCSM').html(data[0]['Backing']);
                            $('#bladderFGTCSM').html(data[0]['Bladder']);
                            $('#pressureFGTCSM').html(data[0]['Pressure']);
                            $('#ballTypeFGTCSM').html(data[0]['BallType']);
                            $('#fifaStumpFGTCSM').html(data[0]['Fifa_stump']);
                            $('#prodMonthFGTCSM').html(data[0]['ProductionMon']);
                            $('#testTypeFGTCSM').html(data[0]['TestType']);
                            $('#mainMatColorFGTCSM').html(data[0]['MainMatColor']);
                            $('#modelNameFGTCSM').html(data[0]['ModelName']);
                            $('#printingColorFGTCSM').html(data[0]['PrintingColor']);
                            $('#acticleNoFGTCSM').html(data[0]['Article']);
                            $('#workingNoFGTCSM').html(data[0]['Working']);
                            $('#resultFGTCSM').html(data[0]['Result']);
                            $('#testedbyFGTCSM').html(data[0]['TestedBy']);
                            // if (data[0]['LabNo'].includes('MS')) {
                            //     $("#testRequestCSM").html("By Mr.Zeeshan Ikram - MS2@Forward.pk")
                            // }else if(data[0]['LabNo'].includes('LFB') || data[0]['LabNo'].includes('lfb')){
                            //     $("#testRequestCSM").html("By Ahmed Sb - Qc@forward.pk")
                            // } else {
                            //     $("#testRequestCSM").html("By Oman Sb - oman@forward.pk")
                            // }
                            if (data[0]['freshImage']) {
                                $("#freshImageFGTCSM").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].freshImage);
                            } else {
                                $("#freshImageFGTCSM").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            if (data[0]['afterShooterImage']) {
                                $("#afterShooterImageFGTCSM").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].afterShooterImage);
                            } else {
                                $("#afterShooterImageFGTCSM").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            if (data[0]['hydrolysisImage']) {
                                $("#hydrolysisImageFGTCSM").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].hydrolysisImage);
                            } else {
                                $("#hydrolysisImageFGTCSM").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            if (data[0]['drumImage']) {
                                $("#drumImageFGTCSM").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].drumImage);
                            } else {
                                $("#drumImageFGTCSM").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }
                            $.post(url2, {
                                TID: returnedTID
                            }, function(data, status) {
                                // console.log("details data",data);
                                let html;
                                if (data != '') {
                                    data.forEach((element, index) => {
                                        html += `<tr>
                                                            <td style="text-align:center">${element.Weight}</td>
                                                            <th style="text-align:center">${element.Average}</th>
                                                            <th style="text-align:center">${element.Min}</th>
                                                            <th style="text-align:center">${element.Max}</th>
                                                            <th style="text-align:center">${element.Diff}</th>
                                                            <th style="text-align:center">${element.Deviation}</th>
                                                            <th style="text-align:center">${element.Rebound}</th>
                                                            <th style="text-align:center">${element.Remarks}</th>
                                                        </tr>`

                                    })
                                    $('#fgtTestDetailsCSM').html(html);
                                }
                            });
                            $('#exampleModalFGTTestingCSMRebound').modal('toggle');

                        } else {
                            $('#labNoFGT').html(data[0]['LabNo']);
                            $('#cssNoFGT').html(data[0]['CssNo']);
                            $('#receiveDateFGT').html(data[0]['Receiving_Date']);
                            $('#testingDataFGTS').html(data[0]['Testing_DateS']);
                            $('#testingDataFGTE').html(data[0]['Testing_DateE']);
                            $('#issueDateFGT').html(data[0]['Issue_Date']);
                            $('#environmentalCondFGT').html(data[0]['EnvironmentalC']);
                            $('#testAccToCatFGT').html(data[0]['TestAccToCat']);
                            $('#coverMatFGT').html(data[0]['CoverMat']);
                            $('#backingFGT').html(data[0]['Backing']);
                            $('#bladderFGT').html(data[0]['Bladder']);
                            $('#ballTypeFGT').html(data[0]['BallType']);
                            $('#fifaStumpFGT').html(data[0]['Fifa_stump']);
                            $('#prodMonthFGT').html(data[0]['ProductionMon']);
                            $('#testTypeFGT').html(data[0]['TestType']);
                            $('#mainMatColorFGT').html(data[0]['MainMatColor']);
                            $('#printingColorFGT').html(data[0]['PrintingColor']);
                            $('#acticleNoFGT').html(data[0]['Article']);
                            $('#workingNoFGT').html(data[0]['Working']);
                            $('#resultFGT').html(data[0]['Result']);
                            $('#testedbyFGt').html(data[0]['TestedBy']);

                            if (data[0]['LabNo'].includes('MS')) {
                                $("#testRequest").html("By Mr.Zeeshan Ikram - MS2@Forward.pk")
                            } else {
                                $("#testRequest").html("By Oman Sb - oman@forward.pk")
                            }

                            if (data[0]['freshImage']) {
                                $("#freshImageFGT").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].freshImage);
                            } else {
                                $("#freshImageFGT").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            if (data[0]['afterShooterImage']) {
                                $("#afterShooterImageFGT").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].afterShooterImage);
                            } else {
                                $("#afterShooterImageFGT").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            if (data[0]['hydrolysisImage']) {
                                $("#hydrolysisImageFGT").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].hydrolysisImage);
                            } else {
                                $("#hydrolysisImageFGT").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            if (data[0]['drumImage']) {
                                $("#drumImageFGT").attr('src', '<?php echo base_url(); ?>assets/img/Fgt/' + data[0].drumImage);
                            } else {
                                $("#drumImageFGT").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                            }

                            $.post(url2, {
                                TID: returnedTID
                            }, function(data, status) {
                                // console.log("details data",data);
                                let html;
                                if (data) {
                                    data.forEach((element, index) => {
                                        if (index == 12) {
                                            let mergedRow = '';
                                            mergedRow += element.Method + "," + element.Condition;
                                            html += `<tr>
                                            <td style="padding:left: 2px">${element.Test}</td>
                                            <th style="text-align:center">` + mergedRow + `</th>
                                            <th style="text-align:center"></th>
                                            <th style="text-align:center">${element.Unit}</th>
                                            <th style="text-align:center">${element.Cat1}</th>
                                            <th style="text-align:center">${element.Cat2}</th>
                                            <th style="text-align:center">${element.Cat3}</th>
                                            <th style="text-align:center">${element.Min}</th>
                                            <th style="text-align:center">${element.Max}</th>
                                            <th style="text-align:center">${element.Remarks}</th>
                                        </tr>`
                                            // console.log("merged data", mergedRow);
                                        } else {
                                            html += `<tr>
                                                <td style="padding:left: 2px">${element.Test}</td>
                                                <th style="text-align:center">${element.Method }</th>
                                                <th style="text-align:center">${element.Condition}</th>
                                                <th style="text-align:center">${element.Unit}</th>
                                                <th style="text-align:center">${element.Cat1}</th>
                                                <th style="text-align:center">${element.Cat2}</th>
                                                <th style="text-align:center">${element.Cat3}</th>
                                                <th style="text-align:center">${element.Min}</th>
                                                <th style="text-align:center">${element.Max}</th>
                                                <th style="text-align:center">${element.Remarks}</th>
                                            </tr>`
                                        }
                                    })
                                    $('#fgtTestDetails').html(html);
                                }
                            });
                            $('#exampleModalFGTTesting').modal('toggle');
                        }
                    } else {
                        alert('Lab did not upload data(excel file) of this test type and with matched Css No. Contact Lab for your query!');
                    }

                })


        }

        $("#relportData3").on('click', '.deleteBtn', function() {

            alert("Request Deleted Successfully!");

            let id = this.id;
            //alert(id);
            let split_value = id.split(".");
            //alert(split_value);
            //console.log(split_value);
            var TID = split_value[1];




            url = '<?php echo base_url('LabController/MaterialTestReqDelByid'); ?>'

            $.post(url, {
                    'TID': TID,

                },
                function(data, status) {

                    window.location.reload();

                })

            setTimeout(function() {
                location.reload(true);
            }, 1000);

        })




        //             var htmlAppenG = ``;


        //             $(document).ready(function() {


        //                                 sDate = $("#startDate").val();
        //                                 eDate = $("#endDate").val();

        //                                 alert("Hello");

        //                                 $("#customData").html("");
        //                                 $("#defaultTable").css("display", "none");

        //                                 urlGenerated = '<?php echo base_url('LabController/getTableDatalabGenerated'); ?>'

        //                                 $.post(urlGenerated, {
        //                                         'startDate': sDate,
        //                                         'endDate': eDate
        //                                     },
        //                                     function(data, status) {


        //                                         console.log(data);



        //                                     });

        // htmlAppenG += `


        // <table id="table" class="table table-bordered table-hover table-responsive table-striped w-100">
        //     <thead class="bg-primary-200">
        //         <tr style="color:white;">
        //             <th>Item Type</th>
        //             <th>Test No </th>
        //             <th>CSS No </th>
        //             <th> Date </th>
        //             <th>Item Name </th>
        //             <th>PO # </th>
        //             <th>Receiving Date </th>
        //             <th>Supplier</th>
        //             <th>Quantity </th>

        //             <th>Result </th>
        //             <th>Generated By </th>
        //             <th>Review Status </th>
        //             <th>Review By </th>
        //             <th>Approved Status </th>
        //             <th>Approved By </th>

        //             <th>Actions </th>
        //             <th>Development Report</th>
        //             <th>Undo </th>


        //         </tr>
        //     </thead>
        //     <tbody >

        //     <tr>

        //     <td>sdfdsf</td>
        //     <td>dsfds</td>
        //     <td></td>
        //     <td></td>
        //     <td></td>
        //     <td></td>
        //     <td></td>
        //     <td></td>
        //     <td></td>
        //     <td></td>
        //     <td></td>
        //     <td></td>
        //     <td></td>
        //     <td></td>
        //     <td></td>
        //     <td></td>
        //     <td></td>
        //     <td></td>

        //     </tr>


        //     </tbody>

        // </table>



        // `


        // alert(htmlAppenG)


        // $("#GenReq").html(htmlAppenG);










        //             })







        //             $("#searchRange1").click(function(){

        //                 alert("Search RANGE")

        //             })


        $(window).on('load', function() {
            let date = new Date().toJSON().substr(0, 10);
            $("#startDate").val(date);
            $("#endDate").val(date);

            $("#cssCodetUpdate").select2();
        })


        $("#searchRange1").click(function(e) {
            e.preventDefault();
            sDate = $("#startDate").val();
            eDate = $("#endDate").val();
            $("#customData").html("");
            $("#defaultTable").css("display", "none");

            url = '<?php echo base_url('LabController/getTableDatalab'); ?>'

            $.post(url, {
                    'startDate': sDate,
                    'endDate': eDate
                },
                function(data, status) {

                    let reviewStatus = '<?php echo $RS; ?>';
                    let approvalStatus = '<?php echo $AS; ?>';


                    html = `    <table id="table1" class="table table-bordered table-hover table-responsive table-striped w-100">
                                                <thead class="bg-primary-200">
                                                    <tr style="color:white;">
                                                      <th>Item Type</th>
                                                        <th>Test No </th>
                                                        <th>CSS No </th>
                                                        <th> Date </th>
                                                        <th>Size </th>
                                                        <th>Item Name </th>
                                                        
                                                        <th>PO # </th>
                                                        
                                                        <th>Supplier</th>
                                                     <th>Supplier Refrence</th>
                                                          
                                                             
                                                                 <th>Result </th>
                                                                   <th>Generated By </th>
                                                                 
                                                                   
                                                
                                                        
                                                                  
                                                                   <th>Actions </th>
                                                            
                                                                  
                                                    </tr>
                                                </thead>
                                                <tbody>`;
                    data.forEach(element => {

                        html += `
        <tr>
    <td>${element.ItemType}</td>
    <td>${element.TestNo}</td>
    <td>${element.CSSNO}</td>
    <td>${element.Date}</td>
    <td>${element.Size}</td>
    <td>${element.MaterialRef}</td>
    <td>${element.PO}</td>
  
    <td>${element.Supplier_Name}</td>
    <td>${element.Supplier_Ref}</td>
 

    <td>${element.Result}</td>
    <td><span class="badge badge-primary p-1">${element.LoginName}</span></td>

   
    <td>
        <div class="row">
        
            <div class="col-md-2">
                <button type="button" class="btn btn-warning btn-xs customprintButton waves-effect waves-themed" id="btnPrint.${element.TID}"><i class="fal fa-print" aria-hidden="true"></i></button>
            </div>
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





        $("#reportData3").on("click", ".customprintButton", function() {

            let id = this.id;

            let split_value = id.split(".");

            var cssno = split_value[1];

            let testTypeGet;
            let url = '<?php echo base_url('LabController/getHead1'); ?>'
            let url2 = '<?php echo base_url('LabController/getDetails1'); ?>'

            $.post(url, {
                    'cssno': cssno
                },
                function(data) {
                    if(data != ''){
                        let TID = data[0]['TID'];
                    testTypeGet = data[0].ItemType;
                    console.log("over all header ", data)
                    if (data[0].ItemType.trim() == 'Carton') {
                        $("#cortonLogoHide").css("display", "none");
                        $("#testNo").text(data[0].TestNO);
                        $("#dateTest").text(data[0].Date);
                        $("#pono").text(data[0].PO);
                        $("#receiveDate").text(data[0].Receiving_Date);
                        $("#size").text(data[0].Size);
                        $("#supplierName").text(data[0].Supplier_Name);
                        $("#supplierRef").text(data[0].Supplier_Ref);
                        $("#quantityCarton").text(data[0].Quantity_Carton);
                        if (data[0].image != null && data[0].image != "") {
                            $("#cartonImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                        } else {
                            $("#cartonImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                        }
                        $("#testPerformed").text(data[0].performedBy);
                        data[0].Approvalname ? $("#testApproved").text(data[0].Approvalname) : $("#testApproved").text("Pending");
                        //  $("#Incharge").text(data[0].Approvalname);

                        data[0].reviewName ? $("#testReviewed").text(data[0].reviewName) : $("#testReviewed").text("Pending");
                        $("#Conclusion").text(data[0].Result);
                        $.post(url2, {
                                'TID': TID
                            },
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
                    } else if (data[0].ItemType.trim() == 'Foam') {
                        // $("#FoamLogoHide").css("visibility", "hidden");
                        $("#FoamLogoHide").css("display", "none");
                        $("#testNoFoam").text(data[0].TestNO);
                        $("#dateTestFoam").text(data[0].Date);
                        $("#ponoFoam").text(data[0].PO);
                        $("#receiveDateFoam").text(data[0].Receiving_Date);

                        $("#supplierRefFoam").text(data[0].Supplier_Ref);

                        $("#testPerformedFoam").text(data[0].performedBy);
                        data[0].Approvalname ? $("#testApprovedFoam").text(data[0].Approvalname) : $("#testApprovedFoam").text("Pending");
                        //  $("#Incharge").text(data[0].Approvalname);
                        if (data[0].image != null && data[0].image != "") {
                            $("#foamImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                        } else {
                            $("#foamImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                        }
                        data[0].reviewName ? $("#testReviewedFoam").text(data[0].reviewName) : $("#testReviewedFoam").text("Pending");
                        $("#Conclusion").text(data[0].Result);
                        $.post(url2, {
                                'TID': TID
                            },
                            function(data, status) {

                                html = ''
                                data.forEach(element => {
                                    html += `<tr>
<td style="border:2px solid black">${element.Test}</td>
<td style="border:2px solid black">${element.Standard}</td>
<td style="border:2px solid black">${element.Unit}</td>
<td style="border:2px solid black">
${element.result}
</td>
</tr>`
                                });

                                $("#DetailsTestFoam").html(html);

                            });
                        $('#exampleModalFoam').modal('toggle');
                    } else if (data[0].ItemType.trim() == 'Fabric') {

                        $("#labNoFab").text(data[0].LabNo);
                        $("#cssNoFab").text(data[0].CSSNO);
                        $("#receiveDateFab").text(data[0].Receiving_Date);
                        $("#issueDateFab").text(data[0].IssueDate);
                        $("#testingDateSFab").text(data[0].TestingDate);
                        $("#testingDateEFab").text(data[0].TestingDateE);
                        $("#lofRefFab").text(data[0].LotReference);
                        $("#environmentalCondFab").text(data[0].EnvironmentalC);
                        $("#supplierNameFab").text(data[0].Supplier_Name);
                        $("#resultFab").text(data[0].Result);
                        $("#senderFab").text(data[0].Sender);
                        $("#testedByFab").text(data[0].performedBy);
                        $("#matNameFab").text(data[0].MaterialName);
                        $("#testPerformedFabric").text(data[0].performedBy);


                        if (data[0].image != null && data[0].image != "") {
                            $("#fabricImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                        } else {
                            $("#fabricImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                        }

                        $.post(url2, {
                                'TID': TID
                            },
                            function(data, status) {

                                html = ''
                                data.forEach(element => {
                                    console.log("element.Test", element.Test.trim())
                                    html += `<tr>
                        <td style="border:2px solid black">${element.Test}</td>
                        <td style="border:2px solid black">${element.Method}</td>
                        <td style="border:2px solid black">${element.Requirments}</td>
                        <td style="border:2px solid black">${element.result}</td>
                        <td style="border:2px solid black">${element.ReMarks}</td>
                    </tr>`
                                });

                                $("#DetailsTestFabric").html(html);

                            });
                        $('#exampleModalFabric').modal('toggle');
                    } else if (data[0].ItemType.trim() == 'Material') {
                        // alert("Called")

                        $("#labNoMat").text(data[0].LabNo);
                        $("#cssNoMat").text(data[0].CSSNO);
                        $("#receiveDateMat").text(data[0].Receiving_Date);
                        $("#issueDateMat").text(data[0].IssueDate);
                        $("#testingDateSMat").text(data[0].TestingDate);
                        $("#testingDateEMat").text(data[0].TestingDateE);
                        $("#lofRefMat").text(data[0].LotReference);
                        $("#environmentalCondMat").text(data[0].EnvironmentalC);
                        $("#supplierNameMat").text(data[0].Supplier_Name);
                        $("#resultMat").text(data[0].Result);
                        $("#senderMat").text(data[0].Sender);
                        $("#testedByMat").text(data[0].performedBy);
                        $("#matNameMat").text(data[0].MaterialName);
                        $("#testPerformedMaterialTest").text(data[0].performedBy);

                        if (data[0].image != null && data[0].image != "") {
                            $("#materialImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                        } else {
                            $("#materialImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                        }

                        $.post(url2, {
                                'TID': TID
                            },
                            function(data, status) {
                                console.log("material detail data", data)
                                html = ''


                                data.forEach(element => {
                                    html += `<tr>
                            <td style="border:2px solid black">${element.Test}</td>
                            <td style="border:2px solid black">${element.Requirments}</td>
                            <td style="border:2px solid black">${element.result}</td>
                            <td style="border:2px solid black">${element.Uncertainty}</td>
                            <td style="border:2px solid black">${element.ReMarks}</td>
                        </tr>`
                                });

                                $("#DetailsTestMaterial").html(html);

                            });
                        $('#exampleModalMaterial').modal('toggle');
                    } else if (data[0].ItemType.trim() == 'Thread') {

                        $("#testNoThread").text(data[0].TestNO);
                        $("#dateTestThread").text(data[0].Date);
                        $("#ponoThread").text(data[0].PO);
                        $("#receiveDateThread").text(data[0].Receiving_Date);
                        $("#thicknessThread").text(data[0].Thickness);
                        $("#supplierNameThread").text(data[0].Supplier_Name);
                        $("#ResultThread").text(data[0].Result);

                        $("#supplierRefThread").text(data[0].Supplier_Ref);
                        $("#linearDensityThread").text(data[0].LinearDensity);
                        $("#twistThread").text(data[0].TwistPerInch);
                        $("#testPerformedThread").text(data[0].performedBy);
                        data[0].Approvalname ? $("#testApprovedThread").text(data[0].Approvalname) : $("#testApprovedThread").text("Pending");
                        //  $("#Incharge").text(data[0].Approvalname);
                        if (data[0].image != null && data[0].image != "") {
                            $("#threadImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                        } else {
                            $("#threadImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                        }
                        data[0].reviewName ? $("#testReviewedThread").text(data[0].reviewName) : $("#testReviewedThread").text("Pending");
                        $("#ConclusionThread").text(data[0].Result);
                        $.post(url2, {
                                'TID': TID
                            },
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
                    } else if (data[0].ItemType.trim() == 'Blader') {
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
                        data[0].Approvalname ? $("#testApprovedBlader").text(data[0].Approvalname) : $("#testApprovedBlader").text("Pending");
                        //  $("#Incharge").text(data[0].Approvalname);
                        if (data[0].image != null && data[0].image != "") {
                            $("#bladerImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                        } else {
                            $("#bladerImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                        }
                        data[0].reviewName ? $("#testReviewedBlader").text(data[0].reviewName) : $("#testReviewedBlader").text("Pending");
                        $("#Conclusion").text(data[0].Result);
                        $.post(url2, {
                                'TID': TID
                            },
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

                    } else if (data[0].ItemType.trim() == 'FGT') {

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

                        data[0].Approvalname ? $("#testApprovedFGT").text(data[0].Approvalname) : $("#testApprovedFGT").text("Pending");

                        //  $("#Incharge").text(data[0].Approvalname);
                        if (data[0].image != null && data[0].image != "") {
                            $("#fgtImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                        } else {
                            $("#fgtImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                        }
                        data[0].reviewName ? $("#testReviewedFGT").text(data[0].reviewName) : $("#testReviewedFGT").text("Pending");
                        $("#ConclusionFGT").text(data[0].Result);
                        $.post(url2, {
                                'TID': TID
                            },
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

                    } else if (data[0].ItemType.trim() == 'MS Material') {

                        $("#testMSMaterial").text(data[0].TestNO);
                        $("#dateTestMSMaterial").text(data[0].Date);
                        $("#ponoMSMaterial").text(data[0].PO);
                        $("#receiveDateMSMaterial").text(data[0].Receiving_Date);
                        $("#MaterialNameMSMaterial").text(data[0].material);
                        $("#supplierNameMSMaterial").text(data[0].Supplier_Name);
                        $("#poMSMaterial").text(data[0].PO);
                        $("#thicknessMSMaterial").text(data[0].Thickness);
                        $("#hardnessMSMaterial").text(data[0].Hardness);
                        $("#MSMaterial").text(data[0].Thickness);
                        $("#visualResultMSMaterialr").text(data[0].Result);
                        $("#MaterialRefMSMaterial").text(data[0].MaterialRef)

                        $("#testPerformedMSMaterial").text(data[0].performedBy);
                        data[0].Approvalname ? $("#testApprovedMSMaterial").text(data[0].Approvalname) : $("#testApprovedMSMaterial").text("Pending");
                        //  $("#Incharge").text(data[0].Approvalname);
                        if (data[0].image != null && data[0].image != "") {
                            $("#threadMSImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                        } else {
                            $("#threadMSImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                        }
                        data[0].reviewName ? $("#testReviewedMSMaterial").text(data[0].reviewName) : $("#testReviewedMSMaterial").text("Pending");
                        $("#ConclusionMSMaterial").text(data[0].Result);
                        $("#statusMSMaterial").text(data[0].Result);
                        $.post(url2, {
                                'TID': TID
                            },
                            function(data, status) {

                                html = ''
                                data.forEach(element => {
                                    html += `<tr>
<td style="border:2px solid black">${element.Test}</td>
<td style="border:2px solid black">${element.Method}</td>
<td style="border:2px solid black">${element.Unit}</td>
<td style="border:2px solid black">${element.Requirments}</td>
<td style="border:2px solid black">${element.result}</td>
</tr>`
                                });
                                $("#DetailsTestMSMaterial").html(html);


                            });


                        $('#exampleModalMSMaterial').modal('toggle');


                    } else if (data[0].ItemType.trim() == 'MS Thread') {

                        $("#testNoMSThread").text(data[0].TestNO);
                        $("#dateTestMSThread").text(data[0].Date);
                        $("#ponoMSThread").text(data[0].PO);
                        $("#receiveDateMSThread").text(data[0].Receiving_Date);
                        $("#MaterialNameMSThread").text(data[0].material);
                        $("#supplierNameMSThread").text(data[0].Supplier_Name);
                        $("#supplierRefMSThread").text(data[0].Supplier_Ref);
                        $("#testPerformedMSThread").text(data[0].performedBy);
                        data[0].Approvalname ? $("#testApprovedMSThread").text(data[0].Approvalname) : $("#testApprovedMSThread").text("Pending");
                        //  $("#Incharge").text(data[0].Approvalname);
                        if (data[0].image != null && data[0].image != "") {
                            $("#threadMSImage").attr('src', '<?php echo base_url(); ?>assets/img/img/' + data[0].image);
                        } else {
                            $("#threadMSImage").attr('src', '<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon1.png');
                        }
                        data[0].reviewName ? $("#testReviewedMSThread").text(data[0].reviewName) : $("#testReviewedMSThread").text("Pending");
                        $("#ConclusionMSThread").text(data[0].Result);
                        $("#statusMSThread").text(data[0].Result);
                        $.post(url2, {
                                'TID': TID
                            },
                            function(data, status) {

                                html = ''
                                data.forEach(element => {
                                    html += `<tr>
<td style="border:2px solid black">${element.Test}</td>
<td style="border:2px solid black">${element.Method}</td>
<td style="border:2px solid black">${element.Unit}</td>
<td style="border:2px solid black">${element.Requirments}</td>
<td style="border:2px solid black">${element.result}</td>
</tr>`
                                });

                                $("#DetailsTestMSThread").html(html);

                            });
                        $('#exampleModalMSThread').modal('toggle');
                    } else if (data[0].ItemType.trim() == 'Adhesion Material') {

                        $("#testDateAdhesion").text(data[0].Date);
                        $("#receDateTestAdhesion").text(data[0].Receiving_Date);
                        $("#receCodeAdhesion").text(data[0].RecevingCode);
                        $("#testAdhesion").text(data[0].TestNO);

                        $("#ponoAdhesion").text(data[0].PO);
                        $("#articleNoAdhesion").text(data[0].ArticleNo);
                        $("#articleNameAdhesion").text(data[0].Article);
                        $("#resultAdhesion").text(data[0].Result);

                        $("#testNoAdhesion").text(data[0].TestNO);
                        $("#testPerformedAdhesion").text(data[0].performedBy);

                        $.post(url2, {
                                'TID': TID
                            },
                            function(data, status) {

                                html = ''
                                data.forEach(element => {
                                    html += `<tr>

<td style="border:2px solid black">${element.TDate}</td>
<td style="border:2px solid black">${element.BatchReference}</td>
<td style="border:2px solid black">${element.TestNO}</td>
<td style="border:2px solid black">${element.Standard}</td>
<td style="border:2px solid black">${element.MaximumForce}</td>
<td style="border:2px solid black">${element.AverageForce}</td>
<td style="border:2px solid black">${element.Comments}</td>
<td style="border:2px solid black">${element.MaximumForceInch}</td>
</tr>`
                                });

                                $("#DetailsAdhesion").html(html);

                            });


                        $('#exampleModalAdhesion').modal('toggle');
                    } else if (data[0].ItemType.trim() == 'CSM Material') {


                        $("#TestNoCSM").text(data[0].TestNO);
                        $("#dateCSM").text(data[0].Date);

                        $("#modelNameCSM").text(data[0].ModelName);


                        $("#cssCodeCSM").text(data[0].CSSNO);
                        $("#pressureCSM").text(data[0].Pressure);
                        $("#tempHumidityCSM").text(data[0].TempHumidity);
                        $("#articleCSM").text(data[0].Article);
                        $("#categoryCSM").text(data[0].Category);

                        $("#sizeCSM").text(data[0].Size);
                        $("#testedForCSM").text(data[0].Testedfor);
                        $("#noteCSM").text(data[0].Note);


                        // $("#testPerformedAdhesion").text(data[0].performedBy);


                        $.post(url2, {
                                'TID': TID
                            },
                            function(data, status) {

                                console.log("4", data)

                                html = ''
                                data.forEach(element => {
                                    html += `<tr>
<td style="border:2px solid black">${element.Weight}</td>
<td style="border:2px solid black">${element.CircumferenceMin}</td>
<td style="border:2px solid black">${element.CircumferenceMax}</td>
<td style="border:2px solid black">${element.Deviation}</td>
<td style="border:2px solid black">${element.ReboundTest}</td>
<td style="border:2px solid black">${element.ReMarks}</td>
<td style="border:2px solid black">${element.result}</td>

</tr>`
                                });

                                $("#DetailsCSM").html(html);

                            });

                        $('#exampleModalCSM').modal('toggle');



                    } else if (data[0].ItemType.trim() == 'PolyBag Material') {

                        $("#testNoPolyBag").text(data[0].TestNO);
                        $("#receivedDatePolyBag").text(data[0].Receiving_Date);
                        $("#datePolyBag").text(data[0].Date);
                        $("#vendorNamePolyBag").text(data[0].VenderName);
                        $("#polyBagPolyBag").text(data[0].PolyBag);
                        $("#POPolyBag").text(data[0].PO);

                        $.post(url2, {
                                'TID': TID
                            },
                            function(data, status) {

                                html = ''
                                data.forEach(element => {
                                    html += `<tr>
<td style="border:2px solid black">${element.srno}</td>
<td style="border:2px solid black">${element.Test}</td>
<td style="border:2px solid black">${element.Unit}</td>
<td style="border:2px solid black">${element.Standard}</td>
<td style="border:2px solid black">${element.result}</td>
<td style="border:2px solid black">${element.ReMarks}</td>

</tr>`
                                });

                                $("#DetailsPolyBag").html(html);

                            });


                        $('#exampleModalPolyBag').modal('toggle');

                    }

                    }else{
                        alert('Lab did not upload data(excel file) of this test type and with matched Css No. Contact Lab for your query!');
                    }


                });

        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js" integrity="sha512-gtII6Z4fZyONX9GBrF28JMpodY4vIOI0lBjAtN/mcK7Pz19Mu1HHIRvXH6bmdChteGpEccxZxI0qxXl9anY60w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    </body>

    </html>


<?php
} ?>
<div class="modal fade bd-example-modal-lg" id="exampleModalFGTAirlessMiniTesting" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(177,157,206);color:white">
                <h5 class="modal-title" id="exampleModalLabel"><b>Report</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card" id="printCardFGTTesting">
                    <div class="card-body">
                        <div class="row">
                            <div class="table" style="display: flex; justify-content:space-between">
                                <div style="margin-left:10px;">
                                    <img src="<?php echo base_url() ?>assets/img/frwd.jpg" alt="Forward_logo" width="250px" height="170px" />
                                </div>
                                <div>
                                    <img style="margin-right:20px;" src="<?php echo base_url() ?>assets/img/adidasLogo.png" alt="Lab_logo" width="100px" height="100px" />
                                </div>

                                <div style="font-size: medium; font-weight:bold; padding-top:40px; text-align:center;">
                                    <p style="padding-right: 20px;"> Quality Assurance Lab of Forward Sports (Pvt) Ltd <br> Wazirabad Road, Sahowala Stop Sialkot
                                    </p>
                                </div>

                                <div>
                                    <div>
                                        <img style="padding-right:10px;" src="<?php echo base_url() ?>assets/img/newLabLogo.jpg" alt="Lab_logo" width="100%" height="90px" />
                                    </div>
                                    <table border="1" style="margin-top: 5px; width:96%;">
                                        <tr>
                                            <td style="padding: 0px; text-align:left;">Document</td>
                                            <td style="padding: 0px; text-align:left;">QSD-12/RTR/FGTRSB</td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px; text-align:left;">Revision</td>
                                            <td style="padding: 0px; text-align:left;">2</td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0px; text-align:left;">Date of Issuance</td>
                                            <td style="padding: 0px; text-align:left;">26-01-2023</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>


                            <div style="font-weight:bold; margin-left: 35%;">
                                <h4>FGT Report Airless Mini</h4>
                            </div>

                            <div style="display:flex; justify-content:space-between">
                                <div style="padding-left:30px;padding-right:30px;">
                                    <table border="1">
                                        <tbody>
                                            <tr>
                                                <td>lAB NO.</td>
                                                <th colspan="2" style="text-align: center;" id="labNoFGTAirlessMini"></th>
                                            </tr>
                                            <tr>
                                                <td>CSS NO.</td>
                                                <th colspan="2" style="text-align: center;" id="cssNoFGTAirlessMini"> </th>
                                            </tr>
                                            <tr>
                                                <td>Receiving Date:</td>
                                                <th colspan="2" style="text-align: center;" id="receiveDateFGTAirlessMini"></th>
                                            </tr>
                                            <tr>
                                                <td colspan="1">Testing Date</td>
                                                <th style="text-align: center;" id="testingDataFGTSAirlessMini"></th>
                                                <th style="text-align: center;" id="testingDataFGTEAirlessMini"></th>
                                            </tr>
                                            <tr>
                                                <td>Issue Date</td>
                                                <th colspan="2" style="text-align: center;" id="issueDateFGTAirlessMini"></th>
                                            </tr>
                                            <tr>
                                                <td>Enviromental Cond.</td>
                                                <th colspan="2" style="text-align: center;" id="environmentalCondFGTAirlessMini"></th>
                                            </tr>
                                            <tr>
                                                <td>Test Acc. To Cat.</td>
                                                <th colspan="2" style="text-align: center;" id="testAccToCatFGTAirlessMini"></th>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                                <div style="padding-left:30px;padding-right:30px;">
                                    <table border="1">
                                        <th colspan="2" style="text-align:center;">CONSTRUCTION</th>
                                        <tbody>
                                            <tr>
                                                <td>COVER MAT.</td>
                                                <th style="text-align: center;" id="coverMatFGTAirlessMini"></th>
                                            </tr>
                                            <tr>
                                                <td>BACKING</td>
                                                <th style="text-align: center;" id="backingFGTAirlessMini"></th>
                                            </tr>
                                            <tr>
                                                <td>BLADDER</td>
                                                <th style="text-align: center;" id="bladderFGTAirlessMini"></th>
                                            </tr>
                                            <tr>
                                                <td>BALLTYPE</td>
                                                <th style="text-align: center;" id="ballTypeFGTAirlessMini"></th>
                                            </tr>
                                            <tr>
                                                <td>FiFA STUMP</td>
                                                <th style="text-align: center;" id="fifaStumpFGTAirlessMini"></th>
                                            </tr>
                                            <tr>
                                                <td>Production Month</td>
                                                <th style="text-align: center;" id="prodMonthFGTAirlessMini"></th>
                                            </tr>

                                        </tbody>


                                    </table>

                                </div>
                                <div style="padding-left:30px;padding-right:30px;">
                                    <table border="1">
                                        <tbody>
                                            <tr>
                                                <td>TEST TYPE</td>
                                                <th style="text-align: center;" id="testTypeFGTAirlessMini"></th>
                                            </tr>
                                            <tr>
                                                <td>MAIN MAT.COLOR</td>
                                                <th style="text-align: center;" id="mainMatColorFGTAirlessMini"></th>
                                            </tr>
                                            <tr>
                                                <td>PRINTING COLOR</td>
                                                <th style="text-align: center;" id="printingColorFGTAirlessMini"></th>
                                            </tr>
                                            <tr>
                                                <td>Model Name</td>
                                                <th style="text-align: center;" id="modelNameFGTAirlessMini"></th>
                                            </tr>
                                            <tr>
                                                <td>Article #</td>
                                                <th style="text-align: center;" id="acticleNoFGTAirlessMini"></th>
                                            </tr>
                                            <tr>
                                                <td>Working #</td>
                                                <th style="text-align: center;" id="workingNoFGTAirlessMini"></th>
                                            </tr>
                                            <tr>
                                                <td>RESULT</td>
                                                <th style="text-align: center;" id="resultFGTAirlessMini"></th>
                                            </tr>
                                            <tr>
                                                <td>TESTED BY </td>
                                                <th style="text-align: center;" id="testedbyFGtAirlessMini"></th>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br> <br>

                            <!-- <div style="margin-top:8px; padding-left:30px;padding-right:30px; width:100%">
                                <table border="1">
                                    <tbody>
                                        <tr>
                                            <td style="width: 10%">CATEGORY 1</td>
                                            <th>- all balls stamped with "FIFA Quality PRO" logo (replaced "FIFA APPROVED") or destined for getting the "FIFA Quality PRO" logo, whatever price!- all balls with a "FOB price" of 10.01 or more USD, with or without FIFA logo!</th>
                                        </tr>
                                        <tr>
                                            <td style="width: 10%">CATEGORY 2</td>
                                            <th>- all balls stamped with "FIFA Quality" logo (replaced "FIFA INSPECTED") or destined for getting the"FIFA Quality" logo, whatever price!- all balls with a "FOB price" between 5.01 USD and 10.00 USD, with or without FIFA logo!</th>
                                        </tr>
                                        <tr>
                                            <td style="width: 10%">CATEGORY 2</td>
                                            <th>- this is the basic requirement, valid for all balls with a "FOB price" less or equal to 5.00 USD, without any FIFA logo!</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> -->

                            <br>
                            <div style="margin-top: 8px; padding-left:30px;padding-right:30px;">
                                <table border="1">
                                    <thead>
                                        <tr style="font-weight:bold; text-align:center;">
                                            <td>TEST</td>
                                            <td>METHOD</td>
                                            <td>CONDITION</td>
                                            <td>Unit</td>
                                            <td>Airless Mini Soccer Ball</td>
                                            <td>Ball 1</td>
                                            <td>Ball 2</td>
                                            <td>Ball 3</td>
                                            <td>Ball 4</td>
                                            <td>Ball 5</td>

                                        </tr>
                                    <tbody id="fgtTestDetailsAirlessMini">

                                    </tbody>
                                    </thead>
                                </table>
                            </div>


                            <div style="margin-left: 30px; margin-right:30px">
                                <table style="margin-top: 8px; width:100%; border: 1px solid black;">
                                    <tbody>
                                        <tr>
                                            <th style="text-align:center; font-weight:bold;">REMARKS:</th>
                                            <td>
                                                <table border="1">
                                                    <tbody>
                                                        <tr>
                                                            <th style="font-weight: bold;"> Test request </th>
                                                            <td style="width:100%; text-align:center;" id="testRequestAirlessMini">By Abdul Haseeb abdulhaseeb@forward.pk</td>
                                                        </tr>
                                                        <tr>
                                                            <th style="font-weight: bold;"> failed criteria</th>
                                                            <td style="width:100% ;"></td>
                                                        </tr>
                                                        <tr>
                                                            <th style="font-weight: bold;">obvious problems, during and after tests</th>
                                                            <td style="width:100% ;"></td>
                                                        </tr>
                                                        <tr>
                                                            <th style="font-weight: bold;">Note</th>
                                                            <td style="width:100% ;">The above reported result is applicable to the sample as received at customer service section Uncertainty will be given on the demand of customer</td>
                                                        </tr>
                                                        <tr>
                                                            <th style="font-weight: bold;">improvements</th>
                                                            <td style="width:100% ;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


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
                                    <!-- <th> <span style="font-size: medium;font-weight:bold"><u>Performed By</u> </span><br>
                                                                        <span id="testPerformedFGT">Imran Munir </span>
                                                                    </th> -->
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


                        </div>
                        <div style="display: flex; justify-content: space-evenly; margin-top: 5px; margin-bottom: 5px; text-align:center; font-weight:bold;">
                            <div>
                                <h3>Fresh Image</h3>
                                <img style="border-radius: 8px;" src="" width="150px" height="150px" alt="No image" id="freshImageFGTAirlessMini">
                            </div>
                            <div>
                                <h3>After Shooter Image</h3>
                                <img style="border-radius: 8px;" src="" width="150px" height="150px" alt="No image" id="afterShooterImageFGTAirlessMini">
                            </div>
                            <div>
                                <h3>Hydrolysis Image</h3>
                                <img style="border-radius: 8px;" src="" width="150px" height="150px" alt="No image" id="hydrolysisImageFGTAirlessMini">
                            </div>
                            <div>
                                <h3>Drum Image</h3>
                                <img style="border-radius: 8px;" src="" width="150px" height="150px" alt="No image" id="drumImageFGTAirlessMini">
                            </div>
                        </div>
                        <h2 class="mt-3" style="text-align:center;font-weight:bold">End Of Report</h2>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="printDiv('printCardFGTTesting')" data-dismiss="modal">Print Report</button>
            </div>
            <div class="card-footer text-muted">
                Forward Sports Pvt. Ltd.
            </div>
        </div>
    </div>
</div>
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
                            ); ?>">FGT</a></li>
                        
                         
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                 <i class='subheader-icon fal fa-chart-area'></i> FGT</span>
                                
                            </h1>
                        </div>




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
                   <th><img src="<?php echo base_url()?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>
               </tr>
           </table> -->
           <table class="table">
               <tr>
               <th><img src="<?php echo base_url()?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>
             
                   <th></th>
                   <th></th>
                   <th style="font-size: Medium;font-weight:bold;padding:50px" id="exampleModalLabel">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>FGT REPORT FOR SOCCERBALLS INDOOR</th>
                <th> </th>
               </tr>
           </table>
      <!-- <h4 class="modal-title text-center m-4" id="exampleModalLabel">FGT REPORT FOR SOCCERBALLS INDOOR</h4> -->
      <div class="container-fluid p-5">
        <div class="row p-2">
            <div class="col-sm-4">
                <table class="table table-striped">
                    <tbody style="border: 1px solid;">
                        <tr>
                            <th style="border: 1px solid;">F2206LSB888</th>
                            <td  class="text-center">HM4183</td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid;"><br>LAB NO.</th>
                            <td id="content32" class="text-center"></td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid;"><br>TESTING DATE</th>
                            <td id="content33" class="text-center"></td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid;">TEST ACC. TO CAT:</th>
                            <td  id="content34"class="text-center"></td>
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
                <table class="table table-striped">
                    <tbody style="border: 1px solid;">
                        <tr>
                            <th colspan="2" style="border: 1px solid; text-align:center">Construction</th>
                        </tr>
                        <tr>
                            <th style="border: 1px solid;"><br>COVER MAT.</th>
                            <td id="content37" class="text-center"><br></td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid;"><br><br>BACKING</th>
                            <td  id="content38"class="text-center"></td>
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
                                    <td style="border: 1px solid ">Abraison resistence on 2 panels</td>
                                    <td style="border: 1px solid ">FGT-43</td>
                                    <td style="border: 1px solid ">on 2 panels - 1x50cycl;<br>9 kPa load, Sandpaper P150</td>
                                    <td colspan="4" style="border: 1px solid ">dyestuff still visible; not smeared</td>
                                    <td id="content64" style="border: 1px solid "></td>
                                    <td id="content65" style="border: 1px solid "></td>
                                    <td  style="border: 1px solid "></td>
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
                    <table class="table table-striped col-6">
                        <tbody style="border: 1px solid;">
                            <tr>
                                <th rowspan="4" style="border: 1px solid">Remarks:</th>
                            </tr>

                            <tr>
                                <td>Test request</td>
                            </tr>

                            <tr>
                                <td>obvious problems<br>before,<br>during<br>and after tests</td>
                            </tr>

                            <tr>
                                <td>Improvements</td>
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
                    <span >Sohail Rasheed </span></th>
          <th></th>
          
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
                   <th><img src="<?php echo base_url()?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>
               </tr>
           </table> -->
           
           <table class="table">
               <tr>
               <th><img src="<?php echo base_url()?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>
             
                   <th></th>
                   <th></th>
                   <th style="font-size: Medium;font-weight:bold;padding:50px" id="exampleModalLabel">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>FGT REPORT FOR SOCCERBALLS SIZE 5</th>
                <th> </th>
               </tr>
           </table>
      <!-- <h4 class="modal-title text-center m-4" id="exampleModalLabel">FGT REPORT FOR SOCCERBALLS SIZE 5</h4> -->
      <div class="container-fluid p-5">
        <div class="row p-2">
            <div class="col-sm-4">
                <table class="table table-striped">
                    <tbody style="border: 1px solid;">
                        <tr>
                            <th style="border: 1px solid;"><br>F2206LSB888<br></th>
                            <td class="text-center"><br>HM4183<br></td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid;"><br>LAB NO.</th>
                            <td id="content66" class="text-center"></td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid;"><br>TESTING DATE</th>
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
                            <th style="border: 1px solid;"><br><br>COVER MAT.</th>
                            <td id="content71" class="text-center"></td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid;"><br><br>BACKING</th>
                            <td id="content72" class="text-center"></td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid;">BLADDER</th>
                            <td id="content73" class="text-center"></td>
                        </tr>
                        <tr>
                            <th style="border: 1px solid;"><br>BALLTYPE</th>
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
                            <th style="border: 1px solid;"><br>MAIN MAT.COLOR</th>
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
                            <th style="border: 1px solid;"><br>TESTED BY</th>
                            <td id="content79" class="text-center"></td>
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
                                    <td  id="content103" style="border: 1px solid "></td>
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
                                    <td  id="content104" style="border: 1px solid "></td>
                                    <td  id="content105" style="border: 1px solid "></td>
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
                                    <td  id="content106" style="border: 1px solid "></td>
                                    <td  id="content107" style="border: 1px solid "></td>
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
                                    <td  id="content108" style="border: 1px solid "></td>
                                    <td  id="content109" style="border: 1px solid "></td>
                                    <td style="border: 1px solid "></td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid ">Abraison resistence on 2 panels after water test w/<br>Sandpapergrade P150</td>
                                    <td style="border: 1px solid ">FGT-43</td>
                                    <td style="border: 1px solid ">1x50cycl;<br>9 kPa load</td>
                                    <td colspan="4" style="border: 1px solid ">dyestuff still visible; not smeared</td>
                                    <td  id="content110" style="border: 1px solid "></td>
                                    <td  id="content111" style="border: 1px solid "></td>
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
                                    <td  id="content112" style="border: 1px solid "></td>
                                    <td  id="content113" style="border: 1px solid "></td>
                                    <td style="border: 1px solid "></td>
                                </tr>

                                <tr>
                                    <td style="border: 1px solid ">Ozon Test Rubber(Only on balls with Rubber<br>Surface</td>
                                    <td style="border: 1px solid ">FGT-46</td>
                                    <td style="border: 1px solid ">24h</td>
                                    <td colspan="4" style="border: 1px solid ">DIN 5350 Cat. 1</td>
                                    <td  id="content114" style="border: 1px solid "></td>
                                    <td  id="content115" style="border: 1px solid "></td>
                                    <td style="border: 1px solid "></td>
                                </tr>

                                <tr>
                                    <td style="border: 1px solid ">Hydrolysis-Lamination</td>
                                    <td style="border: 1px solid ">FGT-01</td>
                                    <td style="border: 1px solid ">60ºC; 95% R.h.<br>7 days</td>
                                    <td colspan="4" style="border: 1px solid ">no delamination</td>
                                    <td  id="content116" style="border: 1px solid "></td>
                                    <td  id="content117" style="border: 1px solid "></td>
                                    <td style="border: 1px solid "></td>
                                </tr>

                                <tr>
                                    <td style="border: 1px solid ">Hydrolysis-Color Change</td>
                                    <td style="border: 1px solid ">FGT-01</td>
                                    <td style="border: 1px solid ">60ºC; 95% R.h.<br>7 days</td>
                                    <td colspan="4" style="border: 1px solid ">min 3 acc. greyscale</td>
                                    <td  id="content118" style="border: 1px solid "></td>
                                    <td  id="content119" style="border: 1px solid "></td>
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
                            <th rowspan="3" style="border: 1px solid">Note:<span id="contentNoteSize5"></span></th>
                     
                        </tr>

                    

                        
                    </tbody>
                </table>
            </div>
                <div class="col-12">
                    <table class="table table-striped col-6">
                        <tbody style="border: 1px solid;">
                            <tr>
                                <th rowspan="4" style="border: 1px solid">Remarks:</th>
                            </tr>

                            <tr>
                                <td>Test request</td>
                            </tr>

                            <tr>
                                <td>obvious problems<br>before,<br>during<br>and after tests</td>
                            </tr>

                            <tr>
                                <td>Improvements</td>
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
                    <span >Sohail Rasheed </span></th>
          <th></th>
      
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span  id="testReviewedSize5"> </span>
            </th>
            <th></th>
                    <th></th>
                    <th></th>
             

                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                    <span id="testApprovedSize5"> </span></th>
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
                            <input type="text" class="form-control input-lg" id="project-bid"  name="BID">
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
                        <button type="submit" class="btn btn-success" id="saveButtonBuilding" >Save</button>
                        <button type="submit" class="btn btn-success" id="updateButtonBuilding" style="display:none" >Update</button>   
                            <input type = "reset" class="bg-secondary text-white btn-sm" id="btnClear" />

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

<?php
      if($this->session->flashdata('info')){ 
    
    
      ?>
    <div class="alert alert-danger alert-dismissible show fade" id="msgbox">
                    <div class="alert-body">
                      <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                      </button>
                      <?php echo $this->session->flashdata('info');?>
                    </div>
                  </div>
                  <?php
      }

                  ?>
                  <?php
      if($this->session->flashdata('danger')){ 
    
    
      ?>
    <div class="alert alert-danger alert-dismissible show fade" id="msgbox">
                    <div class="alert-body">
                      <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                      </button>
                      <?php echo $this->session->flashdata('danger');?>
                    </div>
                  </div>
                  <?php
      }

                  ?>

<div id="Modaldepartment" class="modal fade bd-example-modal-lg">
    <div  class="modal-dialog modal-lg">
        <div class="modal-content" >
            <div class="modal-header">
                <h1 class="modal-title">Add FGT Head</h1>
            </div>
            <div class="modal-body">
                <form name="formDepartment" id="myformDepartment" method="POST" action="<?php echo base_url(''); ?>DevelopmentController/AddActivity">
                    <!-- <input type="hidden" name="_token" value=""> -->
                   
                    <div class="row" style="display:flex">
                    <div class="col-md-6" style="margin-top:25px">  
                     <div class="form-group">
                        <label class="control-label">FGT Type:</label>
                        <select class="form-control" id="fgttype" name="fgttype" >
                        <option value="" disabled>Select one of the following</option>
                        <option value="SOCCER BALLS" >SOCCER BALLS</option>
                        <option value="SOCCER INDOOR BALLS" >SOCCER INDOOR BALLS</option>
                        <option value="SOCCER BALLS SIZE 5" >SOCCER BALLS SIZE 5</option>
                            </select>
                    </div></div>
                  
                     <div class="col-md-6" style="margin-top:25px">  
                     <div class="form-group">
                     <label>Test Performed By</label>
                                                                <select class="form-control" id="testperformedby">
                                                                     <option value="" selected>Select Test Performed By</option>
                                                                    <option value="Imran" >Imran</option>
                                                                    <option value="Pervaiz">Pervaiz</option>
                                                                    <option value="Tanveer" >Tanveer</option>
                                                                    <option value="Umer">Umer</option>
                                                                    <option value="Bilal">Bilal</option>
                                                                </select>
                    </div></div>
                                                             </div>
   

                   <div class="row" style="display:flex">
                    <div class="col-md-6" style="margin-top:25px">  
                     <div class="form-group">
                        <label class="control-label">Lab No:</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='labno' name="labno" placeholder="Lab No:">
                        </div>
                    </div></div>
                    <div class="col-md-6" style="margin-top:25px">   
                     <div class="form-group">
                        <label class="control-label">Testing Date:</label>
                        <div>
                            <input type="Date" class="form-control input-lg" id='tdate' name="tdate" >
                        </div>
                    </div></div>
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
                        <label class="control-label">FIFA STUMP</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='fifastump' name="fifastump" placeholder="">
                        </div>
                    </div>
                   </div>
                   </div>
                   <div class="row" style="display:flex">
                   <div class="col-md-6" style="margin-top:25px">
                   <div class="form-group">
                        <label class="control-label">PRODUCTION MONTH</label>
                        <div>
                            <input type="date" class="form-control input-lg" id='pmonth' name="pmonth">
                        </div>
                    </div>
                   </div>
                   <div class="col-md-6" style="margin-top:25px">
                   <div class="form-group">
                        <label class="control-label">COVER MAT.</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='cmat' name="cmat" placeholder="">
                        </div>
                    </div>
                   </div>
                   </div>
                   <div class="row" style="display:flex">
                   <div class="col-md-6" style="margin-top:25px">
                   <div class="form-group">
                        <label class="control-label">BACKING</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='backing' name="backing" placeholder="">
                        </div>
                    </div>
                   </div>
                   <div class="col-md-6" style="margin-top:25px">
                   <div class="form-group">
                        <label class="control-label">BLADDER</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='bladder' name="bladder" placeholder="">
                        </div>
                    </div>
                   </div>
                   </div>
                   <div class="row" style="display:flex">
                   <div class="col-md-6" style="margin-top:25px">
                   <div class="form-group">
                        <label class="control-label">BALLTYPE</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='btype' name="btype" placeholder="">
                        </div>
                    </div>
                   </div>
                   <div class="col-md-6" style="margin-top:25px"> 
                   <div class="form-group">
                        <label class="control-label">TEST TYPE</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='ttype' name="ttype" placeholder="">
                        </div>
                    </div>
                   </div>
                   </div>
                   <div class="row" style="display:flex">
                   <div class="col-md-6" style="margin-top:25px">
                   <div class="form-group">
                        <label class="control-label">MAIN MAT. COLOR</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='mmcolor' name="mmcolor" placeholder="">
                        </div>
                    </div>

                   </div>
                    <div class="col-md-6" style="margin-top:25px">
                    <div class="form-group">
                        <label class="control-label">PRINTING COLORS</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='pcolors' name="pcolors" placeholder="">
                        </div>
                    </div>
                   </div>
                    </div>
                    <div class="row" style="display:flex">
                   <div class="col-md-6" style="margin-top:25px">
                   <div class="form-group">
                        <label class="control-label">Factory Name</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='fn' name="fn" placeholder="">
                        </div>
                    </div>

                   </div>
                    <div class="col-md-6" style="margin-top:25px">
                    <div class="form-group">
                        <label class="control-label">Modal</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='m' name="m" placeholder="">
                        </div>
                    </div>
                   </div>
                    </div>
                    <div class="row" style="display:flex">
                   <div class="col-md-6" style="margin-top:25px">
                   <div class="form-group">
                        <label class="control-label">Inner</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='inn' name="inn" placeholder="">
                        </div>
                    </div>

                   </div>
                    <div class="col-md-6" style="margin-top:25px">
                    <div class="form-group">
                        <label class="control-label">Pannel Shape</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='pshape' name="pshape" placeholder="">
                        </div>
                    </div>
                   </div>
                    </div>
                    <div class="row" style="display:flex">
                    <div class="col-md-6" style="margin-top:25px">
                   <div class="form-group">
                        <label class="control-label">Remarks</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='rem' name="rem" placeholder="">
                        </div>
                    </div>

                   </div>
                    <div class="col-md-6" style="margin-top:25px">
                    <div class="form-group">
                        <label class="control-label">RESULT</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='result' name="result" placeholder="">
                        </div>
                    </div>
                    
                    </div>
                    </div>
                       <div class="row" style="display:flex">
                    <div class="col-md-12" style="margin-top:25px">
                   <div class="form-group">
                        <label class="control-label">NOTE:</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='note' name="note" placeholder="">
                        </div>
                    </div>

                   </div>
                    
                    </div>
                    <div class="row">
                    <div class="form-group">
                        <div>
                        <button type="button" class="btn btn-success m-3" id="save" onclick="Save_FGT_H()" >Save</button>
                       
                            
                            <!-- <input type = "reset" class="bg-secondary text-white btn-sm" id="btnClear" /> -->

                            <button class="btn btn-success" data-dismiss="modal">Close</button>
                          
                 </div>
                    </div>
                    </div>
                </form>
       
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
        </div>

        <div id="ModalDetail" class="modal fade bd-example-modal-lg">
    <div  class="modal-dialog modal-lg">
        <div class="modal-content" >
            <div class="modal-header">
                <h1 class="modal-title">Add FGT Details</h1>
            </div>
           
            <div class="modal-body">
                <form name="formDepartment" id="myformDepartment" method="POST" action="<?php echo base_url(''); ?>DevelopmentController/AddActivity">
                    <!-- <input type="hidden" name="_token" value=""> -->
                   
                    <div class="row" style="display:flex">
                    <div class="col-md-12" style="margin-top:25px">  
                     <div class="form-group">
                     <?php 
        //Print_r($loadFGT_H);
            ?>
                        <label class="control-label">Select FGT Head:</label>
                        <select class="form-control" id="fgtH" name="fgtH" >
                        <option value="" disabled>Select one of the following</option>
                      <?php Foreach($loadFGT_H as $keys) { ?>
                        <option value="<?php Echo $keys['TID'];?>" ><?php Echo $keys['labno'];?></option>
                       
                       
                       <?php
                      }
                      ?>
                            </select>
                    </div></div>
                  
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
                 
                    <div class="col-md-3" >
                    <span class="badge badge-primary">Circumference</span>
   
                     <div class="form-group">
                        <label class="control-label"> Max</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='c1_sp' name="c1_sp`" placeholder="">
                        </div>
                    </div>
                   </div>

                   <div class="col-md-3" >  
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
                <div class="col-md-3" >
                <span class="badge badge-primary">Sphecity</span>   

                     <div class="form-group">
                        <label class="control-label">Max</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='sp1_sp' name="sp1_sp" placeholder="">
                        </div>
                    </div>
                   </div>
                   <div class="col-md-3" >   
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
                <div class="col-md-3" >
                <span class="badge badge-primary">Drum Test</span>              
                     <div class="form-group">
                        <label class="control-label">Max</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='dt1' name="dt1" placeholder="">
                        </div>
                    </div>
                   </div>
                   <div class="col-md-3" > 
                   <span class="badge badge-primary">Drum Test</span>              
                     <div class="form-group">
                        <label class="control-label">Min</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='dt2' name="dt2" placeholder="">
                        </div>
                    </div>
                   </div>
                   <div class="col-md-3" > 
                   <span class="badge badge-primary">Abraison resistance on 2 panels</span>              
                     <div class="form-group">
                        <label class="control-label">Max</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='abr1' name="abr1" placeholder="">
                        </div>
                    </div>
                   </div>
                   <div class="col-md-3" >
                     <span class="badge badge-primary">Abraison resistance on 2 panels</span>              
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
                <div class="col-md-3" >
                <span class="badge badge-primary">UV Light Fastness</span>                
                     <div class="form-group">
                        <label class="control-label">Max</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='uvlf1' name="uvlf1" placeholder="">
                        </div>
                    </div>
                   </div>
                   <div class="col-md-3" >  
                   <span class="badge badge-primary">UV Light Fastness</span>                
                     <div class="form-group">
                        <label class="control-label">Min</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='uvlf2' name="uvlf2" placeholder="">
                        </div>
                    </div>
                   </div>
                   <div class="col-md-3" >  
                   <span class="badge badge-primary">Ozon Test on Rubber</span>                
                     <div class="form-group">
                        <label class="control-label">Max</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='otr1' name="otr1" placeholder="">
                        </div>
                    </div>
                   </div>
                   <div class="col-md-3" >  
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
                <div class="col-md-3" >
                <span class="badge badge-primary">Hydrolysis - Lamination</span>                 
                     <div class="form-group">
                        <label class="control-label">Max</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='hl1' name="hl1" placeholder="">
                        </div>
                    </div>
                   </div>
                   <div class="col-md-3" > 
                   <span class="badge badge-primary">Hydrolysis - Lamination</span>                 
                     <div class="form-group">
                        <label class="control-label">Min</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='hl2' name="hl2" placeholder="">
                        </div>
                    </div>
                   </div>
                   <div class="col-md-3" > 
                   <span class="badge badge-primary">Hydrolysis - Color Change </span>                 
                     <div class="form-group">
                        <label class="control-label">Max</label>
                        <div>
                            <input type="text" class="form-control input-lg" id='hcc1' name="hcc1" placeholder="">
                        </div>
                    </div>
                   </div>
                   <div class="col-md-3" >
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
                    <div class="row">
                    <div class="form-group">
                        <div>
                        <button type="button" class="btn btn-success m-3" id="save" onclick="Save_FGT_D()" >Save</button>
                       
                
                            <!-- <input type = "reset" class="bg-secondary text-white btn-sm" id="btnClear" /> -->

                            <button class="btn btn-success" data-dismiss="modal">Close</button>
                          
                 </div>
                    </div>
                    </div>
                </form>
       
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
                   <th><img src="<?php echo base_url()?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>
               </tr>
           </table> -->

           <table class="table">
               <tr>
               <th><img src="<?php echo base_url()?>assets/img/logo.jpg" alt="report_logo" width="150px" height="100px" /></th>
             
                   <th></th>
                   <th></th>
                   <th style="font-size: Medium;font-weight:bold;padding:50px" id="exampleModalLabel">Quality Assurance Lab of Forward Sports (Pvt) Ltd<br>FGT REPORT FOR AIRLINES MINI <span id="titleBalls">()</span></th>
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
                        <th style="border: 1px solid;">F2206LSB060</th>
                        <td id="content1" class="text-center"></td>
                    </tr>
                    <tr>
                        <th style="border: 1px solid;">FACTORY NAME</th>
                        <td class="text-center">Forward Sports</td>
                    </tr>
                    <tr>
                        <th style="border: 1px solid;"><br>LAB NO.</th>
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
                    <tr>
                        <th style="border: 1px solid;"><br><br>INNER</th>
                        <td class="text-center" id="content7"></td>
                    </tr>
                    <tr>
                        <th style="border: 1px solid;">PANEL SHAPE</th>
                        <td class="text-center" id="content8"></td>
                    </tr>
                    <tr>
                        <th style="border: 1px solid;">REMARK</th>
                        <td class="text-center" id="content9"></td>
                    </tr>
                    <tr>
                        <th style="border: 1px solid;">BALLTYPE</th>
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
                        <th style="border: 1px solid;"><br>MAIN MAT.COLOR</th>
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
                            <td  style="border: 1px solid"></td>
                            <td style="border: 1px solid"></td>
                            <td  style="border: 1px solid"></td>
                            <th  style="border: 1px solid; border-collapse: collapse">
                                Unit
                                <th style="border: 1px solid">Airless Mini Soccerball</th>
                            </th>
                            <td  style="border: 1px solid">1</td>
                            <td  style="border: 1px solid">2</td>
                            <td  style="border: 1px solid">2</td>
                            <td  style="border: 1px solid">3</td>
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
                                <td  style="border: 1px solid "></td>
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
                <table class="table table-striped col-6">
                    <tbody style="border: 1px solid;">
                        <tr>
                            <th rowspan="5" style="border: 1px solid">Remarks:</th>
                        </tr>

                        <tr>
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
                    <span >Sohail Rasheed </span></th>
          <th></th>
           
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><span style="font-size: medium;font-weight:bold"> <u>Reviewed By</u></span><br><span  id="testReviewedSoccer"> </span>
            </th>
            <th></th>
                    <th></th>
                    <th></th>
             

                    <th> <span style="font-size: medium;font-weight:bold"> <u>Approved By</u> </span><br>
                    <span id="testApprovedSoccer"> </span></th>
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

<br><br>
  <div class="row">
                                               <div class="col-md-12" >

                                   
                                
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
            <?php
            if($Uploading==1){
?>
<button type="button" class="btn btn-primary" style="float:right;" data-toggle="modal" data-target="#Modaldepartment" class="d-grid gap-2 d-md-block" id="createDepartment">+ Create FGT Head</button>
                                          &nbsp;&nbsp;&nbsp;&nbsp;  
                                          <button type="button" class="btn btn-primary" style="float:right;" data-toggle="modal" data-target="#ModalDetail" class="d-grid gap-2 d-md-block" id="createDepartment">+  Add FGT Detail</button> 
<?php
            }
            ?>
            
    </div>
   
    
    <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="demo-v-spacing" id="defaultTable" >
                                            <table id="ActivityData" class="table table-bordered table-hover table-responsive table-striped w-100">
                                            <thead class="bg-primary-200 text-light">
                                               
                                                       <th>FGT Report</th>
                                                    <th>LAB NO.</th>
                                                    <th>TESTING DATE</th>
                                                    <th>TEST ACC. TO Cat</th>   
                                                    <th>FIFA STUMP</th>
                                                    <th>PRODUCTION MONTH</th>
                                                    <th>COVER MAT.</th>
                                                    <th>BACKING</th>
                                                    <th>BLADDER</th>
                                                    <th>BALLTYPE</th>
                                                    <th>TEST TYPE</th>
                                                    <th>MAIN MAT. COLOR</th>
                                                    <th>PRINTING COLORS</th>
                                                    <th>RESULT</th>
                                                    <th>Factory Name</th>
                                                    <th>Modal</th>
                                                    <th>Inner</th>
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
                                                     
                                                <?php
                                               //print_r($loadFGT_H);
                                                 Foreach($loadFGT_H as $keys) { 
                                                     
                                                     $Approvalname =$keys['Approvalname'];
  $ReviewName =$keys['ReviewName'];
  $ReviewStatus =$keys['ReviewStatus'];
  $ApprovedStatus =$keys['ApprovedStatus'];
                                                     ?>
                 
                        <tr>
<td id="fgtype<?php Echo $keys['TID'];?>"><?php echo $keys['FGTType'];?></td>
                        <td><?php echo $keys['labno'];?></td>
                        <td><?php echo $keys['testdate'];?></td>
                                                <td><?php echo $keys['tastcat'];?></td>   
                                                <td><?php echo $keys['fifiastemp'];?></td>
                                                <td><?php echo $keys['productionmonth'];?>/<?php echo $keys['Year'];?></td>
                                                <td><?php echo $keys['covermat'];?></td>
                                                <td><?php echo $keys['backing'];?></td>
                                                <td><?php echo $keys['bladder'];?></td>
                                                <td><?php echo $keys['testtype'];?></td>
                                                <td><?php echo $keys['labno'];?></td>
                                                <td><?php echo $keys['mainmatcolor'];?></td>
                                                <td><?php echo $keys['printngscolors'];?></td>
                                                <td><?php echo $keys['result'];?></td>
                                                <td> <?php echo $keys['factory_name']; ?></td>
                                                <td> <?php echo $keys['modal'];?></td>
                                                <td> <?php echo $keys['Innervalue'];?></td>
                                                <td> <?php echo $keys['panel_shape'];?></td>
                                                <td> <?php echo $keys['remark'];?></td>
                                                <td>
             <?php
                                                                   

                                                                    
               
    if($ReviewStatus=='1'){
        ?>    
        <div class="custom-control custom-switch">
            
            <?php
             if($RS==1){
            ?>
                                                                <input type="checkbox" class="custom-control-input" id="review<?php Echo $keys['TID']; ?>" checked="">
                                                                <?php
                                                                
             }else{
                 ?>
                    <input type="checkbox" disabled="disabled" class="custom-control-input" id="review<?php Echo $keys['TID']; ?>" checked="">
                 <?php
                 }
                 ?>
                                                                <label class="custom-control-label" for="review<?php Echo $keys['TID']; ?>"></label>
                                                            </div>
                                                          <?php
    }else{
        ?>
         <div class="custom-control custom-switch">
                                                               <?php
             if($RS==1){
            ?>
                                                                <input type="checkbox" class="custom-control-input" id="review<?php Echo $keys['TID']; ?>" >
                                                                <?php
                                                                
             }else{
                 ?>
                    <input type="checkbox" disabled="disabled" class="custom-control-input" id="review<?php Echo $keys['TID']; ?>">
                 <?php
                 }
                 ?>
                                                                <label class="custom-control-label" for="review<?php Echo $keys['TID']; ?>"></label>
                                                            </div>
         <?php
    }
    ?>
                                                        </td>
        <td>
            
    <?php
    if($ReviewStatus=='1'){
        ?>
        
        <span class="badge badge-success p-1"><?php Echo $ReviewName; ?></span>
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
                                                                <input type="checkbox" class="custom-control-input" id="approved<?php Echo $keys['TID']; ?>" checked="">
                                                                <?php
                                                                }else{
                                                                    ?>
                                                                     <input type="checkbox" disabled="disabled" class="custom-control-input" id="approved<?php Echo $keys['TID']; ?>" checked="">
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                <label class="custom-control-label" for="approved<?php Echo $keys['TID']; ?>"></label>
                                                            </div>
                                                               <?php
    }else{
        ?>
         <div class="custom-control custom-switch">
                                                                       <?php
             if($AS==1){
            ?>
                                                                <input type="checkbox" class="custom-control-input" id="approved<?php Echo $keys['TID']; ?>" >
                                                                <?php
                                                                }else{
                                                                    ?>
                                                                     <input type="checkbox" disabled="disabled" class="custom-control-input" id="approved<?php Echo $keys['TID']; ?>" >
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                <label class="custom-control-label" for="approved<?php Echo $keys['TID']; ?>"></label>
                                                            </div>
        <?php
    }
    ?>
                                                        </td>
        <td>  <?php
    if($ApprovedStatus=='1'){
        ?>
       
        <span class="badge badge-success p-1"> <?php Echo $Approvalname; ?></span>
        <?php
    }else{
        ?>
         <span class="badge badge-warning p-1">Pending</span>
        <?php
    }
    ?></td>
       
                                              <td> <?php echo $keys['LoginName'];?></td>
                                                <td>
            <div class="row">
     <div class="col-md-2">
                <button type="button" class="btn btn-info btn-xs updatebtn" id="btn.<?php Echo $keys['TID']; ?>"><i class="fal fa-edit" aria-hidden="true"></i></button>
                </div>
               
          
        
           
           
           </td> 
            <td> <div class="col-md-2">
               
              <button type="button" class="btn btn-warning btn-xs printButton" id="btnPrint.<?php Echo $keys['TID']; ?>" ><i class="fal fa-print" aria-hidden="true"></i></button>
      
                </div>
            </td>  
            <td> <div class="col-md-2">
               
            <button type="button" id="undo.<?php echo $keys['TID'];?>" value="<?php echo $keys['TID'];?>" class="btn btn-danger btn-xs undobtn"><i class="fal fa-trash" aria-hidden="true"></i></button> 
      
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


    

<!-- End Custom Table Content -->
</div>
</div>



    
                            </div>
                            </div>
                                                <div class="col-md-4" ></div>
                                           </div>
                        </div>
                        </div>
                        </div>
                          <script src="<?php echo base_url();?>/assets/js//jquery.min.js" type="text/javascript"></script>
                        <script src="<?php echo base_url();?>/assets/js/statistics/peity/peity.bundle.js"></script>
        <script src="<?php echo base_url();?>/assets/js/statistics/flot/flot.bundle.js"></script>
        <script src="<?php echo base_url();?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
        <script src="<?php echo base_url();?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
        <script>
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
   
 url = "<?php echo base_url(''); ?>FGT/updated/"+ reviewStatus + "/" + approvedStatus  + "/" + TID
  
//alert(url);
   $.get(url, function(data){
            alert("Data Updated Successfully");
            location.reload();
            });

            
     });



     $('.undobtn').click(function(){
     let id= this.id;
    let split_value = id.split(".");
     var TID =split_value[1];
var proceed = confirm("Are you sure you want to Delete?");
if (proceed) {
    url = "<?php echo base_url(''); ?>FGT/undo/"+ TID 
    //alert(url);
     $.get(url, function(data){
            alert("Data Updated Successfully");
           location.reload();
            });
} else {
  alert("Undo Cancel");
}
     });
  
            /* defined datas */
             $(document).ready(function()
            {
            $('#ActivityData').dataTable(
                {
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
            
       function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
     window.location.reload();
}

       
       $(".undobtn").click(function(e) {
     let id= this.id;
     let split_value = id.split(".");

     var TID =split_value[1];
 url = "<?php echo base_url(''); ?>DevelopmentController/undo/"+ TID
  
//alert(url);
   $.get(url, function(data){
            alert("Activity  Deleted Successfully");
            location.reload();
            });

            
     });
$(".updatebtn").click(function(e) {
      //alert("heloo");
     let id= this.id;
    //alert(id);
     let split_value = id.split(".");
    //loadData alert(split_value);
     //console.log(split_value);
     var TID =split_value[1];
     //alert(`#issueDate.${split_value[1]}`);
      //alert(split_value[1]);
//   let RID =split_value[1]);
     var Name = $(`#Name${split_value[1]}`).val();
     let Status;
     if($(`#Status${split_value[1]}`).is(":checked")){
Status = 1;
     }
     else{
      Status = 0;
     }

//alert(Status);
      //$('#check_id').val();
      //alert(Name);
       //alert(Status);
        //alert(TID);
   
 url = "<?php echo base_url(''); ?>DevelopmentController/UpdateActivity/"+ Name + "/" + Status + "/" + TID
  
//alert(url);
   $.get(url, function(data){
            alert("Data Updated Successfully");
            location.reload();
            });

            
     });
            $('#schedule').dataTable(
                {
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
                    <script src="<?php echo base_url();?>/assets/js/statistics/peity/peity.bundle.js"></script>
        <script src="<?php echo base_url();?>/assets/js/statistics/flot/flot.bundle.js"></script>
        <script src="<?php echo base_url();?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
        <script src="<?php echo base_url();?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
        <script>

            $('#schedule').dataTable(
                {
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

            $('#schedule').dataTable(
                {
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

            $(document).ready(function()
            {

                /* init datatables */
                $('#dt-basic-example').dataTable(
                {
                    responsive: true,
                    dom: "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'B>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        {
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
                    columnDefs: [
                        {
                            targets: -1,
                            title: '',
                            orderable: false,
                            render: function(data, type, full, meta)
                            {

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
                var flot_toggle = function()
                {

                    var data = [
                    {
                        label: "Target Profit",
                        data: dataTargetProfit,
                        color: color.info._400,
                        bars:
                        {
                            show: true,
                            align: "center",
                            barWidth: 30 * 30 * 60 * 1000 * 80,
                            lineWidth: 0,
                            /*fillColor: {
                            	colors: [color.primary._500, color.primary._900]
                            },*/
                            fillColor:
                            {
                                colors: [
                                {
                                    opacity: 0.9
                                },
                                {
                                    opacity: 0.1
                                }]
                            }
                        },
                        highlightColor: 'rgba(255,255,255,0.3)',
                        shadowSize: 0
                    },
                    {
                        label: "Actual Profit",
                        data: dataProfit,
                        color: color.warning._500,
                        lines:
                        {
                            show: true,
                            lineWidth: 2
                        },
                        shadowSize: 0,
                        points:
                        {
                            show: true
                        }
                    },
                    {
                        label: "User Signups",
                        data: dataSignups,
                        color: color.success._500,
                        lines:
                        {
                            show: true,
                            lineWidth: 2
                        },
                        shadowSize: 0,
                        points:
                        {
                            show: true
                        }
                    }]

                    var options = {
                        grid:
                        {
                            hoverable: true,
                            clickable: true,
                            tickColor: '#f2f2f2',
                            borderWidth: 1,
                            borderColor: '#f2f2f2'
                        },
                        tooltip: true,
                        tooltipOpts:
                        {
                            cssClass: 'tooltip-inner',
                            defaultTheme: false
                        },
                        xaxis:
                        {
                            mode: "time"
                        },
                        yaxes:
                        {
                            tickFormatter: function(val, axis)
                            {
                                return "$" + val;
                            },
                            max: 1200
                        }

                    };

                    var plot2 = null;

                    function plotNow()
                    {
                        var d = [];
                        $("#js-checkbox-toggles").find(':checkbox').each(function()
                        {
                            if ($(this).is(':checked'))
                            {
                                d.push(data[$(this).attr("name").substr(4, 1)]);
                            }
                        });
                        if (d.length > 0)
                        {
                            if (plot2)
                            {
                                plot2.setData(d);
                                plot2.draw();
                            }
                            else
                            {
                                plot2 = $.plot($("#flot-toggles"), d, options);
                            }
                        }

                    };

                    $("#js-checkbox-toggles").find(':checkbox').on('change', function()
                    {
                        plotNow();
                    });
                    plotNow()
                }
                flot_toggle();
                /* flot toggle example -- end*/

                /* flot area */
                var flotArea = $.plot($('#flot-area'), [
                {
                    data: dataSet1,
                    label: 'New Customer',
                    color: color.success._200
                },
                {
                    data: dataSet2,
                    label: 'Returning Customer',
                    color: color.info._200
                }],
                {
                    series:
                    {
                        lines:
                        {
                            show: true,
                            lineWidth: 2,
                            fill: true,
                            fillColor:
                            {
                                colors: [
                                {
                                    opacity: 0
                                },
                                {
                                    opacity: 0.5
                                }]
                            }
                        },
                        shadowSize: 0
                    },
                    points:
                    {
                        show: true,
                    },
                    legend:
                    {
                        noColumns: 1,
                        position: 'nw'
                    },
                    grid:
                    {
                        hoverable: true,
                        clickable: true,
                        borderColor: '#ddd',
                        tickColor: '#ddd',
                        aboveData: true,
                        borderWidth: 0,
                        labelMargin: 5,
                        backgroundColor: 'transparent'
                    },
                    yaxis:
                    {
                        tickLength: 1,
                        min: 0,
                        max: 15,
                        color: '#eee',
                        font:
                        {
                            size: 0,
                            color: '#999'
                        }
                    },
                    xaxis:
                    {
                        tickLength: 1,
                        color: '#eee',
                        font:
                        {
                            size: 10,
                            color: '#999'
                        }
                    }

                });
                /* flot area -- end */

                var flotVisit = $.plot('#flotVisit', [
                {
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
                }],
                {
                    series:
                    {
                        shadowSize: 0,
                        lines:
                        {
                            show: true,
                            lineWidth: 2,
                            fill: true,
                            fillColor:
                            {
                                colors: [
                                {
                                    opacity: 0
                                },
                                {
                                    opacity: 0.12
                                }]
                            }
                        }
                    },
                    grid:
                    {
                        borderWidth: 0
                    },
                    yaxis:
                    {
                        min: 0,
                        max: 15,
                        tickColor: '#ddd',
                        ticks: [
                            [0, ''],
                            [5, '100K'],
                            [10, '200K'],
                            [15, '300K']
                        ],
                        font:
                        {
                            color: '#444',
                            size: 10
                        }
                    },
                    xaxis:
                    {

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
                        font:
                        {
                            color: '#999',
                            size: 9
                        }
                    }
                });


            });

        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js" integrity="sha512-gtII6Z4fZyONX9GBrF28JMpodY4vIOI0lBjAtN/mcK7Pz19Mu1HHIRvXH6bmdChteGpEccxZxI0qxXl9anY60w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>

        $("#ActivityData").on('click','.printButton',function(e){
            e.preventDefault();

            let id= this.id;

let split_value = id.split(".");

var TID =split_value[1];

let type=$("#fgtype"+TID).text();


            url = "<?php echo base_url(''); ?>FGT/FGT_PRINT"
            $.post(url, {TID},function(data){  
              
      if(type=="SOCCER BALLS" ||type=="SOCCERBALLS"){
            
              $("#titleBalls").text(data['head'][0].FGTType);
              $("#content2").text(data['head'][0].labno);
              $("#content3").text(data['head'][0].testdate);
              $("#content4").text(data['head'][0].tastcat);
              $("#content5").text(data['head'][0].productionmonth);
              $("#content6").text(data['head'][0].modal);
              $("#content7").text(data['head'][0].Innervalue);
              $("#content8").text(data['head'][0].panel_shape);
              $("#content9").text(data['head'][0].remark);
              $("#content10").text(data['head'][0].balltype);
              $("#content11").text(data['head'][0].testtype);
              $("#content12").text(data['head'][0].mainmatcolor);
              $("#content13").text(data['head'][0].printngscolors);
              $("#content14").text(data['head'][0].result);
              $("#content15").text(data['head'][0].LoginName);
              $("#contentNoteSoccer").text(data['head'][0].Note);
              $("#testReviewedSoccer").text(data['head'][0].Reviewby?data['head'][0].ReviewName:'Pending');
              $("#testApprovedSoccer").text(data['head'][0].ApprovedBy?data['head'][0].Approvalname:'Pending');
              if(data['detail'][0]){
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
        }
        else if(type=="SOCCER BALL SIZE 5"){
            console.log("from aSIZE 5",data);
            $("#content66").text(data['head'][0].labno);
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
            $("#content79").text(data['head'][0].LoginName);
            $("#contentNoteSize5").text(data['head'][0].Note);
            $("#testReviewedSize5").text(data['head'][0].Reviewby?data['head'][0].ReviewName:'Pending');
              $("#testApprovedSize5").text(data['head'][0].ApprovedBy?data['head'][0].Approvalname:'Pending');
              if(data['detail'][0]){
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
            
        }else{
            console.log("from soccerBallsIndoor",data);
            $("#content32").text(data['head'][0].labno);
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
            $("#content45").text(data['head'][0].LoginName);
            $("#contentNoteFGT").text(data['head'][0].Note);
              $("#testReviewedFGT").text(data['head'][0].Reviewby?data['head'][0].ReviewName:'Pending');
              $("#testApprovedFGT").text(data['head'][0].ApprovedBy?data['head'][0].Approvalname:'Pending');
              if(data['detail'][0]){
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
        function fileSelect(event){
               fileSelectStore = event[0];
         }
         $("#submitData").click(function(e){
           e.preventDefault();
           $("#submitData").css("display","none");
               $("#sendHeaderValues").css("display","block");
           if(fileSelectStore){
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
  this.file= fileSelectStore;     
  let fileReader = new FileReader();    
  fileReader.readAsArrayBuffer(this.file);     
  fileReader.onload = (e) => {    
      this.arrayBuffer = fileReader.result;    
      var data = new Uint8Array(this.arrayBuffer);    
      var arr = new Array();    
      for(var i = 0; i != data.length; ++i) arr[i] = String.fromCharCode(data[i]);    
      var bstr = arr.join("");    
      var workbook = XLSX.read(bstr, {type:"binary"});    
      var first_sheet_name = workbook.SheetNames[0];    
      var worksheet = workbook.Sheets[first_sheet_name];    
    //  console.log(XLSX.utils.sheet_to_json(worksheet,{raw:true}));    
        let arraylist = XLSX.utils.sheet_to_json(worksheet,{raw:false});     
            this.filelist = arraylist;     
            let testNumber;
            let PONumber
            this.filelist.forEach(element => {
            if(element.TestNo != undefined || element.PONo != undefined){
             testNumber = element.TestNo;
             PONumber = element.PONo;
let arrayHead = [element.TestDate,element.PONo,element.Quantity,element.ReceivingDate,element.ItemName,element.SupplierName,element.TestNo,element.SupplierRef,element.Result,element.ItemType];
              let arrayBody = [element.TestNo,element.PONo,element.Requirement,element.Test,element.Results];
                     HeaderArray.push(arrayHead);
              ChildArray.push(arrayBody)
            }else{
           
              let arrayBody = [testNumber,PONumber,element.Requirement,element.Test,element.Results];
           
              ChildArray.push(arrayBody)
            }
             
       
         

  });

  } 
           }

         });

        function Save_FGT_D(){
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
            
            url = "<?php echo base_url(''); ?>FGT/FGT_D"
            // url = "<?php echo base_url(''); ?>FGT/FGT_D/"+ w1 + '/' +  w2 + '/'+ c1_sp + '/' + c2_sp + '/'+ sp1_sp + '/' + sp2_sp + '/'+ lp1 + '/' + lp2 + '/'+  rrt1 + '/' + rrt2 + '/'+ rrt51 + '/' +  rrt52 + '/' + rrt01 + '/' + rrt02 '/' + c1_dp + '/' + c2_dp '/' + sp_dp1 '/' + sp_dp2 '/' + lp_dp1 '/' + lp_dp2 '/' + m1 '/' + m2 '/' +  wup1 '/' +  wup2 '/' +  c1_wrt '/' +  c2_wrt '/' +  sp1_wrt '/' +  sp2_wrt '/' +  dt1 '/' +  dt2  '/' +  abr1  '/' +  abr2 '/' +  uvlf1 '/' +  uvlf2 '/' +   otr1 '/' +  otr2 '/' +   hl1 '/' +  hl2 '/' +  hcc1 '/' +   hcc2

//alert(url)
  //alert(url);
     $.post(url,{"TID":TID,"w1":w1?w1:0,"w2":w2?w2:0,"c1_sp":c1_sp?c1_sp:0, "c2_sp":c2_sp?c2_sp:0, "sp1_sp": sp1_sp? sp1_sp:0, "sp2_sp": sp2_sp? sp2_sp:0, "lp1": lp1 ? lp1 :0, "lp2": lp2 ? lp2 :0, "rrt1": rrt1 ? rrt1 :0, "rrt2": rrt2 ? rrt2 :0, "rrt51": rrt51 ? rrt51 :0,"rrt52": rrt52 ? rrt52 :0, "rrt01": rrt01 ? rrt01 :0, "rrt02": rrt02 ? rrt02 :0, "c1_dp": c1_dp ? c1_dp :0,
        "c2_dp": c2_dp ? c2_dp :0, "sp_dp1": sp_dp1 ? sp_dp1 :0, "sp_dp2": sp_dp2 ? sp_dp2 :0, "lp_dp1": lp_dp1 ? lp_dp1 :0, "lp_dp2": lp_dp2 ? lp_dp2 :0, "m1": m1 ? m1 :0, "m2": m2 ? m2 :0, "wup1": wup1 ? wup1 :0, "wup2": wup2 ? wup2 :0, "c1_wrt": c1_wrt ? c1_wrt :0, "c2_wrt": c2_wrt ? c2_wrt :0, "sp1_wrt": sp1_wrt ? sp1_wrt :0, "sp2_wrt": sp2_wrt ? sp2_wrt :0, "dt1": dt1 ? dt1 :0, "dt2": dt2 ? dt2 :0, "abr1": abr1 ? abr1 :0, "abr2": abr2 ? abr2 :0, "uvlf1": uvlf1 ? uvlf1 :0, "uvlf2": uvlf2 ? uvlf2 :0, "otr1":  otr1 ?  otr1 :0,  "otr2":  otr2 ?  otr2 :0,
        "hl1":  hl1 ?  hl1 :0, "hl2":  hl2 ?  hl2 :0, "hcc1":  hcc1 ?  hcc1 :0, "hcc2":  hcc2 ?  hcc2 :0,} ,function(data){
              alert("FGT Head inserted Successfully");
            location.reload();
              });
            
         }


         function Save_FGT_H(){
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
let mmcolor = $("#mmcolor").val();
let pcolors = $("#pcolors").val();
let fn = $("#fn").val();
let m = $("#m").val();
let inn = $("#inn").val();
let pshape = $("#pshape").val();
let rem = $("#rem").val();
let result = $("#result").val();
let testperformedby = $("#testperformedby").val();
let note = $("#note").val();
//alert(result)

url = "<?php echo base_url(''); ?>FGT/FGT_H"

// $.post(url,{"fgttype":fgttype?fgttype:null,"labno":labno?labno:null,"tdate":tdate?tdate:null, "testcat":testcat?testcat:null, "fifastum": fifastump? fifastump:0, "pmonth": pmonth? pmonth:null, "cmat": cmat ? cmat :null, "backing": backing ? backing :null, "bladder": bladder ? bladder :null, "btype": btype ? btype :null, "ttype": ttype ? ttype :null,"mmcolor": mmcolor ? mmcolor :null, "pcolors": pcolors ? pcolors :null, "result": result ? result :null,"fn": fn ? fn :null, "m": m ? m :null, "inn": inn ? inn :null, "pshape": pshape ? pshape :null, "rem": rem ? rem :null} ,function(data){
//               //alert("Details   inserted Successfully");
//               console.log("Data Get from Function",data);
//            // location.reload();
//               });


$.post(url,{"fgttype":fgttype?fgttype:null,"labno":lbno?lbno:null,"tdate":tdate?tdate:null, "testcat":testcat?testcat:null, "fifastump": fifastump? fifastump:0, "pmonth": pmonth? pmonth:null, "cmat": cmat ? cmat :null, "backing": backing ? backing :null, "bladder": bladder ? bladder :null, "btype": btype ? btype :null, "ttype": ttype ? ttype :null,"mmcolor": mmcolor ? mmcolor :null, "pcolors": pcolors ? pcolors :null, "result": result ? result :null,"fn": fn ? fn :null, "m": m ? m :null, "inn": inn ? inn :null, "pshape": pshape ? pshape :null, "rem": rem ? rem :null, "testperformedby": testperformedby ? testperformedby :null, "note": note ? note :null} ,function(data){
            alert("FGT Details   inserted Successfully");
            //console.log("Data Get from Function",data);
            location.reload();
              });


// url = "<?php echo base_url(''); ?>FGT/FGT_H/"+ fgttype + '/' + lbno + '/'+ tdate + '/' + testcat + '/'+ fifastump + '/' + pmonth + '/'+ cmat + '/' + backing + '/'+ bladder + '/' + btype + '/'+ ttype + '/' + mmcolor+ '/' + pcolors + '/' + result + '/'+  fn + '/'+ m + '/'+ inn + '/'+ pshape + '/' + rem
// // url = "<?php echo base_url(''); ?>FGT/FGT_H/"+ fgttype + '/' + lbno + '/'+ tdate + '/' + testcat + '/'+ fifastump + '/' + pmonth + '/'+ cmat + '/' + backing + '/'+ fgbladderttype + '/' + btype + '/'+ ttype + '/' + mmcolor+ '/' + pcolors + '/' + result
//   alert(url);
//      $.get(url, function(data){
//               alert("Activity  inserted Successfully");
//               location.reload();
//               });

}

    $("#sendHeaderValues").click(function(e){
    e.preventDefault()

    $("#alertShown").css("display","block");
postData = {
    HeaderArray,
     ChildArray
  }
 
  url = '<?php echo base_url('LabController/addHeadData'); ?>'
  
  $.post(url,postData,
  function(data, status){
setInterval(function(){   window.location.reload(); }, 6000);
 
  });    
    });   

 $("#sendDetailsValues").click(function(e){
    e.preventDefault()

postData = {
    ChildArray,
    IdOfNewlyEnteredRecord
  }
 
  url = '<?php echo base_url('LabController/addBodyData'); ?>'
  
  $.post(url,postData,
  function(data, status){
  
   
   console.log(data);
 


  });  
    });  
    
    
         </script>

         <script>

function printSoccerballsSize5(){
             
             var prtContent = document.getElementById("printSoccerBallsSize5");
var WinPrint = window.open('', '', '');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
         </script>
    </body>
</html>


<?php
} ?>

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



            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
          </ol>
       





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



      


          <div id="panel-7 exampleModalEditDep" class="panel">
            <div class="panel-hdr">
              <h2>
                Development Progress <span class="fw-300"><i>Application</i></span>
              </h2>

            </div>
            <div class="panel-container show">
              <div class="panel-content">

              <?php
              $DPA =  $this->session->userdata('DPA_Status');
          
                if ($DPA =='1'){
                ?>
                <div class="row" hidden>
                  <?php
                  
                }else{
                  ?>
                   <div class="row">
                  <?php
                }
                ?>
                  <div class="col-md-2">
                    <div class="form-group">

                      <label for="sel1">Select Article :</label>
                      <select class="form-control" id="ArtCode" name="FC" onchange="CallData()">
                        <option value="">Select one of the following</option>
                        <?php foreach ($Articles as $Key) { ?>

                          <option value="<?php echo $Key['ArtCode']; ?>"><?php echo $Key['ArtCode']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <label>Working:</label>
                    <div class="form-group-inline">

                      <input name="working" id="working" class="form-control" type="text" readonly="true">

                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>Product Name:</label>
                    <div class="form-group-inline">

                      <input name="pname" id="pname" class="form-control" type="text" readonly="true">

                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>Colorway Name:</label>
                    <div class="form-group-inline">

                      <input name="colorway" id="colorway" class="form-control" type="text" readonly="true">

                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>Factory Code:</label>
                    <div class="form-group-inline">

                      <input name="fcode" id="fcode" class="form-control" type="text" readonly="true">

                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>Panel Shape:</label>
                    <div class="form-group-inline">

                      <input name="pshape" id="pshape" class="form-control" type="text" readonly="true">

                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>Yield:</label>
                    <div class="form-group-inline">

                      <input name="yield" id="yield" class="form-control" type="number">

                    </div>
                  </div>
                  <div class="col-md-2" style="display:none">
                    <label>Client Id:</label>
                    <div class="form-group-inline">

                      <input name="client" id="client" class="form-control" type="text" readonly="true">

                    </div>
                  </div>
                  <div class="col-md-2" style="display:none">
                    <label>Model ID:</label>
                    <div class="form-group-inline">

                      <input name="model" id="model" class="form-control" type="text" readonly="true">

                    </div>
                  </div>
                  <div class="col-md-2" style="display:none">
                    <label>Article Id:</label>
                    <div class="form-group-inline">

                      <input name="art" id="art" class="form-control" type="text" readonly="true">

                    </div>
                  </div>

                  <div class="col-md-2">
                    <label>Article Option:</label>
                    <div class="form-group-inline">

                      <input name="ac" id="ac" class="form-control" type="number">

                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>First Briefing Out:</label>
                    <div class="form-group-inline">

                      <input name="fbo" id="fbo" class="form-control" type="Date">

                    </div>
                  </div>

                  <div class="col-md-2">
                    <label>CR1 In-House Date:</label>
                    <div class="form-group-inline">

                      <input name="inhousedate" id="inhousedate" class="form-control" type="Date">

                    </div>
                  </div>

                  <div class="col-md-2">
                    <label>CR1 CS Submission Date:</label>
                    <div class="form-group-inline">

                      <input name="csdate" id="csdate" class="form-control" type="Date">

                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>CR1 Comments:</label>
                    <div class="form-group-inline">

                      <input name="cr1comments" id="cr1comments" class="form-control" type="text">

                    </div>
                  </div>

                  <div class="col-md-2">
                    <label>CR2 In-House Date:</label>
                    <div class="form-group-inline">

                      <input name="inhousedate1" id="inhousedate1" class="form-control" type="Date">

                    </div>
                  </div>

                  <div class="col-md-2">
                    <label>CR2 CS Submission Date:</label>
                    <div class="form-group-inline">

                      <input name="csdate1" id="csdate1" class="form-control" type="Date">

                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>CR2 Comments:</label>
                    <div class="form-group-inline">

                      <input name="cr2comments" id="cr2comments" class="form-control" type="text">

                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>Post CR2 Date:</label>
                    <div class="form-group-inline">

                      <input name="postD" id="postD" class="form-control" type="Date">

                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>Comments:</label>
                    <div class="form-group-inline">

                      <input name="comments" id="comments" class="form-control" type="text">

                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>Earliest Buy Model:</label>
                    <div class="form-group-inline">

                      <input name="buymodel" id="buymodel" class="form-control" type="date">

                    </div>
                  </div>

                  <div class="col-md-2">
                    <label>Earliest Buy Article:</label>
                    <div class="form-group-inline">

                      <input name="buyarticle" id="buyarticle" class="form-control" type="date">

                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>REV BR Date:</label>
                    <div class="form-group-inline">

                      <input name="revdate" id="revdate" class="form-control" type="date">

                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>Retail Intro:</label>
                    <div class="form-group-inline">

                      <input name="retail" id="retail" class="form-control" type="date">

                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">

                      <label for="sel1">Select Seasonal Range :</label>
                      <select class="form-control" id="seasonal" name="seasonal">
                        <option value="">Select one of the following</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>


                      </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>Season:</label>
                    <div class="form-group-inline">
                      <select name="season" id="season" class="form-control">
                        <option value="SS">SS</option>
                        <option value="FW">FW</option>

                      </select>
                      <!-- <input name="DevType" id="DevType" class="form-control" type="text"> -->

                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>FTY Priority:</label>
                    <div class="form-group-inline">

                      <select name="cars" id="cars" class="form-control">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="X">X</option>
                        <option value="Y">Y</option>
                      </select>

                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>Remarks:</label>
                    <div class="form-group-inline">

                      <input name="remarks" id="remarks" class="form-control" type="text">

                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>Development Type:</label>
                    <div class="form-group-inline">
                      <select name="DevType" id="DevType" class="form-control">
                        <option value="New">New</option>
                        <option value="Carry Over">Carry Over</option>

                      </select>
                      <!-- <input name="DevType" id="DevType" class="form-control" type="text"> -->

                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>MKTG FC(GLOBAL):</label>
                    <div class="form-group-inline">

                      <input name="mktg" id="mktg" class="form-control" type="text">

                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>FIFA Validity:</label>
                    <div class="form-group-inline">

                      <input name="fifa" id="fifa" class="form-control" type="date">

                    </div>
                  </div>


                  <!-- <img id="output" height="100" width="200" src="https://www.freeiconspng.com/thumbs/no-image-icon/no-image-icon-6.png" /> -->

                  <div class="col-md-1">
                    <label style=" visibility: hidden">CR1 In-House:</label>
                    <div class="form-group-inline">

                      <input name="inhouse" id="inhouse" type="checkbox">
                      <label>CR1 In-House:</label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <label style=" visibility: hidden">CR1 CS Submission:</label>
                    <div class="form-group-inline">

                      <input name="cs" id="cs" type="checkbox">
                      <label>CR1 CS :</label>
                    </div>
                  </div>

                  <div class="col-md-1">
                    <label style=" visibility: hidden">CR2 In-House:</label>
                    <div class="form-group-inline">

                      <input name="inhouse1" id="inhouse1" type="checkbox">
                      <label>CR2 In-House:</label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <label style=" visibility: hidden">CR2 CS Submission:</label>
                    <div class="form-group-inline">

                      <input name="cs1" id="cs1" type="checkbox">
                      <label>CR2 CS :</label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <label style=" visibility: hidden">Approved:</label>
                    <div class="form-group-inline">

                      <input name="approve" id="approve" type="checkbox">
                      <label>Approved:</label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <label style=" visibility: hidden">Final CS Confirm:</label>
                    <div class="form-group-inline">

                      <input name="finalcs" id="finalcs" type="checkbox">
                      <label>Final CS Confirm:</label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <label style=" visibility: hidden">BR Status:</label>
                    <div class="form-group-inline">

                      <input name="br" id="br" type="checkbox">
                      <label>BR Status:</label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <label style=" visibility: hidden">MCS:</label>
                    <div class="form-group-inline">

                      <input name="mcs" id="mcs" type="checkbox">
                      <label>MCS:</label>
                    </div>
                  </div>

                  <div class="col-md-4 mt-4">

                    <div class="form-group-inline">

                      <button type="button" class="btn-info btn btn-md" onclick="submit()">Add</button>

                    </div>
                  </div>
                </div><br>
                <br>




                <div class="row">
                  <div class="col-sm-2">
                    <div class="form-group">

                      <label for="sel1">Select Factory Code :</label>
                      <select class="form-control" id="fC" name="fC">
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
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">

                      <label for="sel1">Select Seasonal Range :</label>
                      <select class="form-control" id="seasonal1" name="seasonal1">
                        <option value="">Select one of the following</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>


                      </select>
                    </div>
                  </div>

                  <div class="col-sm-2">
                    <div class="form-group">

                      <label for="sel1">Select Season :</label>
                      <select class="form-control" id="season1" name="season1">
                        <option selected value="">Select one of the following</option>
                        <option value="SS">SS</option>
                        <option value="FW">FW</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group-inline">

                      <button type="button" class="btn-success btn btn-md mt-3" onclick="onSearch()">Search</button>
                      <button type="button" class="btn-info btn btn-md mt-3" onclick="onClear()">Clear</button>
                    </div>
                    
                  </div>
                  
                </div>
                <div class="row">

                  <div class="col-md-12 mt-4" id="Data" style=" overflow:auto;">
                  <!-- <table class="table table-striped table-hover table-sm" id="ActivityData" >
                                <thead>
                                    <tr  class="bg-primary-200"  style="color:white;">
                                    <th>#SR</th>
                                     <th>Article  </th>
                                       <th>Working </th>
                                        <th>Product Name</th>
                                        <th>Colorway Name</th>
                                          <th>Factory Code </th>
                                         <th>Panel Shape</th>
                                          <th>Yield</th>
                                          <th>Article Option</th>
                                            <th>First Briefing Out</th>
                                              <th>CR1 in-house Date</th>
                                             <th>CR1 Submission date</th>
                                             <th>CR1 Comments</th>
                                             <th>CR2 in-house Date</th>
                                             <th>CR2 Submission date</th>
                                             <th>CR2 Comments</th>
                                             <th>Post CR2 Date</th>
                                             <th>Comments</th>
                                             <th>Earliest Buy Model</th>
                                             <th>Earliest Buy Article</th>
                                             <th>REV BR Date</th>
                                             <th>Retail Intro</th>
                                             <th>FTY Priority</th>
                                             <th>Remarks</th>
                                             <th>MKTG FC(Global)</th>
                                             <th>FIFA Validity</th>
                                             <th>CR1 in-house</th>
                                             <th>CR1 Submission</th>
                                             <th>CR2 in-house</th>
                                             <th>CR2 Submission</th>
                                             <th>Approve</th>
                                             <th>Final CS Confirm</th>
                                             <th>Br Status</th>
                                             <th>MCS</th>
                                             <th>Development  Type</th>
                                             <th>Season</th>
                                             <th>Undo</th>
                                             <th>Update</th>
                                              
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $i=1;
                                   foreach($allDPA as $DPA){ ?>
                                <tr id="2tr">
                                <td>#<?php echo $i++?> </td>
                                <td><?php echo $DPA['ArtCode']?> </td>
                                       <td><?php echo $DPA['WorkNo']?> </td>
                                        <td > <?php echo $DPA['ModelName']?></td>
                                        <td ><?php echo $DPA['PrintingColors']?></td>
                                          <td><?php echo $DPA['FactoryCode']?></td>
                                         <td ><?php echo $DPA['PanelShape']?></td>
                                          <td contenteditable="true" id="Yield"><?php echo $DPA['Yield']?></td>
                                          <td contenteditable="true" id="Article_Count"><?php echo $DPA['Article_Count']?></td>
                                          <td contenteditable="true" id="BF_Date" > <?php echo $DPA['BF_Date']?></td>
                                          <td contenteditable="true" id="CR1_In_House_Date"><?php echo $DPA['CR1_In_House_Date']?></td>
                                          <td contenteditable="true" id="CR1_Subbmition_Date"><?php echo $DPA['CR1_Subbmition_Date']?></td>
                                          <td contenteditable="true" id="CR1_Comments"><?php echo $DPA['CR1_Comments']?></td>
                                          <td contenteditable="true" id="CR2_In_House_Date"> <?php echo $DPA['CR2_In_House_Date']?></td>
                                          <td contenteditable="true" id="CR2_Subbmition_Date"><?php echo $DPA['CR2_Subbmition_Date']?></td>
                                          <td contenteditable="true" id="CR2_Comments"><?php echo $DPA['CR2_Comments']?></td>
                                          <td contenteditable="true" id="Post_CR2_Ex_fty"><?php echo $DPA['Post_CR2_Ex_fty']?></td>
                                          <td contenteditable="true" id="Comments_Remarks"><?php echo $DPA['Comments_Remarks']?></td>
                                          <td contenteditable="true" id="EBR_Model_Date"><?php echo $DPA['EBR_Model_Date']?></td>
                                          <td contenteditable="true" id="EBR_Article_Date"><?php echo $DPA['EBR_Article_Date']?></td>
                                          <td contenteditable="true" id="Rev_BR_Date"><?php echo $DPA['Rev_BR_Date']?></td>
                                          <td contenteditable="true" id="Retail_Intro"><?php echo $DPA['Retail_Intro']?></td>
                                          <td contenteditable="true" id="Fty_Priority"><?php echo $DPA['Fty_Priority']?></td>
                                          <td contenteditable="true" id="Remarks"><?php echo $DPA['Remarks']?></td>
                                          <td contenteditable="true" id="Mktg_FC"><?php echo $DPA['Mktg_FC']?></td>
                                          <td contenteditable="true" id="FIFA_authorization_validity_Date"><?php echo $DPA['FIFA_authorization_validity_Date']?></td>
                                          <td contenteditable="true" id="CR1_In_House_Status"><?php echo $DPA['CR1_In_House_Status']?></td>
                                          <td contenteditable="true" id="CR1_Subbmition_Status"><?php echo $DPA['CR1_Subbmition_Status']?></td>
                                          <td contenteditable="true" id="CR2_In_House_Status"><?php echo $DPA['CR2_In_House_Status']?></td>
                                          <td contenteditable="true" id="CR2_Subbmition_Status"><?php echo $DPA['CR2_Subbmition_Status']?></td>
                                          <td contenteditable="true" id="Approved"><?php echo $DPA['Approved']?></td>
                                          <td contenteditable="true" id="Final_CS_Confirmation"><?php echo $DPA['Final_CS_Confirmation']?></td>
                                          <td contenteditable="true" id="BR_Status"><?php echo $DPA['BR_Status']?></td>
                                          <td contenteditable="true" id="MCS"><?php echo $DPA['MCS']?></td>
                                               <td contenteditable="true" id="DevTypeN"><?php echo $DPA['DevType']?></td>
                                               <td contenteditable="true" id="seasonN"><?php echo $DPA['season']?></td>
                                             
                                          <td>
                                          <button type="button" class="btn btn-danger" onclick="deleterecord(<?php echo $DPA['TID']?>)">Delete</button>
                                      
                                          </td>
                                          <td>
                                          <button type="button" class="btn btn-info" onclick="updaterecord(<?php echo $DPA['TID']?>)">Update</button>
                                          </td>
                                        </tr>
                                        <?php }?>
                                </tbody>
                  </table> -->
                  </div>
                </div>
              </div>

            </div>
          </div>
          <br>

          <div class="row">



          </div>



      </div>
    </div>

  </div>
  </div>
  </div>
  </div>
  <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
  <!-- <script src="<?php echo base_url(); ?>/assets/Select/select2.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
  <script>
    window.onload = function() {
      $("#ArtCode").select2();
      $("#fC").select2();
      $("#season").select2();

    };
    $('.mySelect2Edit').select({
      dropdownParent: $('#exampleModalEditDep')
    });

    function CallData() {
      $("#working").val(' ');
      $("#pname").val(' ');
      $("#fcode").val(' ');
      $("#colorway").val(' ');
      $("#pshape").val(' ');
      $("#client").val(' ');
      $("#model").val(' ');
      $("#art").val(' ');
      let ArtCode = $("#ArtCode").val();

      url = "<?php echo base_url(''); ?>DPA/CallData/"
      $.post(url, {
        "article": ArtCode,

      }, function(articles) {
        console.log(articles)
        $("#working").val(articles[0]['WorkNo']);
        $("#pname").val(articles[0]['ModelName']);
        $("#fcode").val(articles[0]['FactoryCode']);
        $("#colorway").val(articles[0]['PrintingColors']);
        $("#pshape").val(articles[0]['PanelShape']);
        // $("#yield").val(articles[0]['Yield']);
        $("#client").val(articles[0]['ClientID']);
        $("#model").val(articles[0]['ModelID']);
        $("#art").val(articles[0]['ArtID']);



      });




    }

    function submit() {


      let seasonal = $("#seasonal").val();
      var twoDigitYear = seasonal.toString().substr(-2);

      let article = $("#ArtCode").val();
      let working = $("#working").val();
      let pname = $("#pname").val();
      let colorway = $("#colorway").val();
      let fcode = $("#fcode").val();
      let pshape = $("#pshape").val();
      let yields = $("#yield").val();
      let client = $("#client").val();
      let model = $("#model").val();
      let art = $("#art").val();
      let ac = $("#ac").val();
      let fbo = $("#fbo").val();
      let inhousedate = $("#inhousedate").val();
      let csdate = $("#csdate").val();
      let cr1comments = $("#cr1comments").val();
      let inhousedate1 = $("#inhousedate1").val();
      let csdate1 = $("#csdate1").val();
      let cr2comments = $("#cr2comments").val();
      let postD = $("#postD").val();
      let comments = $("#comments").val();
      let DevType = $("#DevType").val();
      let buymodel = $("#buymodel").val();
      let buyarticle = $("#buyarticle").val();
      let revdate = $("#revdate").val();
      let retail = $("#retail").val();
      let cars = $("#cars").val();
      let remarks = $("#remarks").val();
      let mktg = $("#mktg").val();
      let fifa = $("#fifa").val();
      let inhouse = $("#inhouse").prop('checked');
      let cs = $("#cs").prop('checked');
      let inhouse1 = $("#inhouse1").prop('checked');
      let cs1 = $("#cs1").prop('checked');
      let approve = $("#approve").prop('checked');
      let finalcs = $("#finalcs").prop('checked');
      let br = $("#br").prop('checked');
      let mcs = $("#mcs").prop('checked');
      let season = $("#season").val();
      let finalSeason = season + twoDigitYear;

      data = {
        "article": article,
        "working": working,
        "pname": pname,
        "colorway": colorway,
        "fcode": fcode,
        "pshape": pshape,
        "yields": yields,
        "client": client,
        "model": model,
        "art": art,
        "ac": ac,
        "fbo": fbo,
        "inhousedate": inhousedate,
        "csdate": csdate,
        "cr1comments": cr1comments,
        "inhousedate1": inhousedate1,
        "csdate1": csdate1,
        "cr2comments": cr2comments,
        "postD": postD,
        "comments": comments,
        "buymodel": buymodel,
        "buyarticle": buyarticle,
        "revdate": revdate,
        "retail": retail,
        "cars": cars,
        "remarks": remarks,
        "mktg": mktg,
        "fifa": fifa,
        "inhouse": inhouse,
        "cs": cs,
        "inhouse1": inhouse1,
        "cs1": cs1,
        "approve": approve,
        "finalcs": finalcs,
        "br": br,
        "mcs": mcs,
        "DevType": DevType,
        "finalSeason": finalSeason

      }



      url = "<?php echo base_url(''); ?>DPA/submit/"
      $.post(url, data, function(data) {
        articles = JSON.parse(data)
        console.log(articles);
        alert('Data Inserted Successfully')
        location.reload();



      });
    }

    function onSearch() {
      fc = $("#fC").val();
      seasonal1 = $("#seasonal1").val();
      season1 = $("#season1").val();
      var twoDigitYear1 = seasonal1.toString().substr(-2);
      fSeason = season1 + twoDigitYear1;


      urls = "<?php echo base_url(''); ?>DPA/getTableData/";
      $.post(urls, {
        "fc": fc,
        "season": seasonal1,
        "fSeason": fSeason

      }, function(data) {

        let i = 1;

        let appendtable = '';
        appendtable += `<table class="table table-striped table-hover table-sm" id="ActivityData" >
                                <thead>
                                    <tr  class="bg-primary-200"  style="color:white;">
                                    <th>#SR</th>
                                     <th>Article  </th>
                                       <th>Working </th>
                                        <th>Product Name</th>
                                        <th>Colorway Name</th>
                                          <th>Factory Code </th>
                                         <th>Panel Shape</th>
                                          <th>Yield</th>
                                          <th>Article Option</th>
                                            <th>First Briefing Out</th>
                                              <th>CR1 in-house Date</th>
                                             <th>CR1 Submission date</th>
                                             <th>CR1 Comments</th>
                                             <th>CR2 in-house Date</th>
                                             <th>CR2 Submission date</th>
                                             <th>CR2 Comments</th>
                                             <th>Post CR2 Date</th>
                                             <th>Comments</th>
                                             <th>Earliest Buy Model</th>
                                             <th>Earliest Buy Article</th>
                                             <th>REV BR Date</th>
                                             <th>Retail Intro</th>
                                             <th>FTY Priority</th>
                                             <th>Remarks</th>
                                             <th>MKTG FC(Global)</th>
                                             <th>FIFA Validity</th>
                                             <th>CR1 in-house</th>
                                             <th>CR1 Submission</th>
                                             <th>CR2 in-house</th>
                                             <th>CR2 Submission</th>
                                             <th>Approve</th>
                                             <th>Final CS Confirm</th>
                                             <th>Br Status</th>
                                             <th>MCS</th>
                                             <th>Development  Type</th>
                                             <th>Season</th>
                                             <?php
                                             if ($DPA =='1'){}else{
                                          ?>
                                             <th>Undo</th>
                                             <th>Update</th>
                                              
                                             <?php
                                             
      }
      
      ?>
                                       
                                    </tr>
                                </thead>
                                <tbody>`
        data.forEach((element) => {
          CR1_In_House_Datee=element.CR1_In_House_Date

dd_CR1_In_House_Datee =CR1_In_House_Datee.substring(0, 2);
mm_CR1_In_House_Datee =CR1_In_House_Datee.substring(3, 5);
yy_CR1_In_House_Datee =CR1_In_House_Datee.substring(6, 10);
final_CR1_In_House_Datee=yy_CR1_In_House_Datee+'-'+mm_CR1_In_House_Datee+'-'+dd_CR1_In_House_Datee


BF_Datee=element.BF_Date
dd_BF_Datee =BF_Datee.substring(0, 2);
mm_BF_Datee =BF_Datee.substring(3, 5);
yy_BF_Datee =BF_Datee.substring(6, 10);
final_BF_Datee=yy_BF_Datee+'-'+mm_BF_Datee+'-'+dd_BF_Datee

CR1_Subbmition_Datee=element.CR1_Subbmition_Date
dd_CR1_Subbmition_Datee =CR1_Subbmition_Datee.substring(0, 2);
mm_CR1_Subbmition_Datee =CR1_Subbmition_Datee.substring(3, 5);
yy_CR1_Subbmition_Datee =CR1_Subbmition_Datee.substring(6, 10);
final_CR1_Subbmition_Datee=yy_CR1_Subbmition_Datee+'-'+mm_CR1_Subbmition_Datee+'-'+dd_CR1_Subbmition_Datee


CR2_In_House_Datee=element.CR2_In_House_Date
dd_CR2_In_House_Datee =CR2_In_House_Datee.substring(0, 2);
mm_CR2_In_House_Datee =CR2_In_House_Datee.substring(3, 5);
yy_CR2_In_House_Datee=CR2_In_House_Datee.substring(6, 10);
final_CR2_In_House_Datee=yy_CR2_In_House_Datee+'-'+mm_CR2_In_House_Datee+'-'+dd_CR2_In_House_Datee


CR2_Subbmition_Date=element.CR2_Subbmition_Date
dd_CR2_Subbmition_Date =CR2_Subbmition_Date.substring(0, 2);
mm_CR2_Subbmition_Date =CR2_Subbmition_Date.substring(3, 5);
yy_CR2_Subbmition_Date=CR2_Subbmition_Date.substring(6, 10);
final_CR2_Subbmition_Date=yy_CR2_Subbmition_Date+'-'+mm_CR2_Subbmition_Date+'-'+dd_CR2_Subbmition_Date


EBR_Model_Date=element.EBR_Model_Date
dd_EBR_Model_Date =EBR_Model_Date.substring(0, 2);
mm_EBR_Model_Date =EBR_Model_Date.substring(3, 5);
yy_EBR_Model_Date=EBR_Model_Date.substring(6, 10);
final_EBR_Model_Date=yy_EBR_Model_Date+'-'+mm_EBR_Model_Date+'-'+dd_EBR_Model_Date


EBR_Article_Date=element.EBR_Article_Date
dd_EBR_Article_Date =EBR_Article_Date.substring(0, 2);
mm_EBR_Article_Date =EBR_Article_Date.substring(3, 5);
yy_EBR_Article_Date=EBR_Article_Date.substring(6, 10);
final_EBR_Article_Date=yy_EBR_Article_Date+'-'+mm_EBR_Article_Date+'-'+dd_EBR_Article_Date


Rev_BR_Date=element.Rev_BR_Date
dd_Rev_BR_Date =Rev_BR_Date.substring(0, 2);
mm_Rev_BR_Date =Rev_BR_Date.substring(3, 5);
yy_Rev_BR_Date=Rev_BR_Date.substring(6, 10);
final_Rev_BR_Date=yy_Rev_BR_Date+'-'+mm_Rev_BR_Date+'-'+dd_Rev_BR_Date

FIFA_authorization_validity_Date=element.FIFA_authorization_validity_Date
dd_FIFA_authorization_validity_Date =FIFA_authorization_validity_Date.substring(0, 2);
mm_FIFA_authorization_validity_Date =FIFA_authorization_validity_Date.substring(3, 5);
yy_FIFA_authorization_validity_Date=FIFA_authorization_validity_Date.substring(6, 10);
final_FIFA_authorization_validity_Date=yy_FIFA_authorization_validity_Date+'-'+mm_FIFA_authorization_validity_Date+'-'+dd_FIFA_authorization_validity_Date

          appendtable += `<tr id="2tr">
                                <td>#${i++} </td>
                                <td> ${element.ArtCode} </td>
                                       <td>${element.WorkNo} </td>
                                        <td >${element.ModelName}</td>
                                        <td >${element.PrintingColors}</td>
                                          <td>${element.FactoryCode}</td>
                                         <td >${element.PanelShape}</td>
                                         <td contenteditable="true" id="Yield">${element.Yield}</td>
                                          <td contenteditable="true" id="Article_Count"> ${element.Article_Count}</td>
                                          <td contenteditable="true" id="BF_Date" > <input type="date" value="${final_BF_Datee}"/><i style="color:white;">${final_BF_Datee}</i></td>
                                          <td contenteditable="true" id="CR1_In_House_Date"><input type="date" value="${final_CR1_In_House_Datee}"/> <i style="color:white;">${final_CR1_In_House_Datee}</i></td>
                                          <td contenteditable="true" id="CR1_Subbmition_Date"> <input type="date" value="${final_CR1_Subbmition_Datee}"/> <i style="color:white;">${final_CR1_Subbmition_Datee}</i></td>
                                          <td contenteditable="true" id="CR1_Comments">${element.CR1_Comments}</td>
                                          <td contenteditable="true" id="CR2_In_House_Date"> <input type="date" value="${final_CR2_In_House_Datee}"/><i style="color:white;">${final_CR2_In_House_Datee}</i></td>
                                          <td contenteditable="true" id="CR2_Subbmition_Date"><input type="date" value="${final_CR2_Subbmition_Date}"/><i style="color:white;">${final_CR2_Subbmition_Date}</i></td>
                                          <td contenteditable="true" id="CR2_Comments">${element.CR2_Comments}</td>
                                          <td contenteditable="true" id="Post_CR2_Ex_fty"><input type="date" value="${element.Post_CR2_Ex_fty}"/></td>
                                          <td contenteditable="true" id="Comments_Remarks">${element.Comments_Remarks}</td>
                                          <td contenteditable="true" id="EBR_Model_Date"><input type="date" value="${final_EBR_Model_Date}"/><i style="color:white;">${final_EBR_Model_Date}</i></td>
                                          <td contenteditable="true" id="EBR_Article_Date"><input type="date" value="${final_EBR_Article_Date}"/><i style="color:white;">${final_EBR_Article_Date}</i></td>
                                          <td contenteditable="true" id="Rev_BR_Date"><input type="date" value="${final_Rev_BR_Date}"/><i style="color:white;">${final_Rev_BR_Date}</i></td>
                                          <td contenteditable="true" id="Retail_Intro"><input type="date" value="${element.Retail_Intro}"/></td>
                                          <td contenteditable="true" id="Fty_Priority">${element.Fty_Priority}</td>
                                          <td contenteditable="true" id="Remarks">${element.Remarks}</td>
                                          <td contenteditable="true" id="Mktg_FC">${element.Mktg_FC}</td>
                                          <td contenteditable="true" id="FIFA_authorization_validity_Date"><input type="date" value="${final_FIFA_authorization_validity_Date}"/><i style="color:white;">${final_FIFA_authorization_validity_Date}</i></td>
                                          <td contenteditable="true" id="CR1_In_House_Status">${element.CR1_In_House_Status}</td>
                                          <td contenteditable="true" id="CR1_Subbmition_Status">${element.CR1_Subbmition_Status}</td>
                                          <td contenteditable="true" id="CR2_In_House_Status">${element.CR2_In_House_Status}</td>
                                          <td contenteditable="true" id="CR2_Subbmition_Status">${element.CR2_Subbmition_Status}</td>
                                          <td contenteditable="true" id="Approved">${element.Approved}</td>
                                          <td contenteditable="true" id="Final_CS_Confirmation">${element.Final_CS_Confirmation}</td>
                                          <td contenteditable="true" id="BR_Status">${element.BR_Status}</td>
                                          <td contenteditable="true" id="MCS">${element.MCS}</td>
                                               <td contenteditable="true" id="DevTypeN">${element.DevType}</td>
                                               <td contenteditable="true" id="seasonN">${element.season}</td>
                                             
                                               <?php
                                             if ($DPA =='1'){}else{
                                          ?>
                                          <td>
                                   
                                        
                                                <button type="button" class="btn btn-danger" onclick="deleterecord(${element.TID})">Delete</button>
                                             
                                          </td>
                                          <td>
                                     
                                                 <button type="button" class="btn btn-info" onclick="updaterecord(${element.TID})">Update</button>
                                            
                                        
                                          </td>
                                          <?php
                                          
                                             }
                                             
                                             ?>
                                        </tr>`
        })

        appendtable += `</tbody>

                                </table>`

        $("#Data").html(appendtable)
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



      });
    }


    function onClear(){
      
      location.reload();
      // $('#fC').append(`<option value="">
                                      
      //                             </option>`);
      // // fc = $("#fC").append('<option ></option>');
      // seasonal1 = $("#seasonal1").val();
      // season1 = $("#season1").val();
    }
    function deleterecord(id) {
      path = "<?php echo base_url(''); ?>DPA/delteRecord/"

      $.post(path, {
        "id": id
      }, function(data) {
        alert("Data Deleted Successfully", id)
        location.reload();
      });
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
  <script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
  <script>
    $(document).ready(function() {

      var contentEdits = document.querySelectorAll("[contenteditable]");
      for (let index = 0; index < contentEdits.length; index++) {
        contentEdits[index].style.border = 'red 2px solid';
      }
    });
  </script>

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

    function updaterecord(id) {
      // let ModelName = $("#ModelName").text()
      // let PrintingColors = $("#PrintingColors").text()
      // let PanelShape = $("#PanelShape").text()
      let Yield = $("#Yield").text()
      let Article_Count = $("#Article_Count").text()
      let BF_Date=$('#2tr td:eq(9) input').val();
      let CR1_In_House_Date = $('#2tr td:eq(10) input').val();
      let CR1_Subbmition_Date = $('#2tr td:eq(11) input').val();
      let CR1_Comments = $("#CR1_Comments").text()
      let CR2_In_House_Date = $('#2tr td:eq(13) input').val();
      let CR2_Subbmition_Date = $('#2tr td:eq(14) input').val();
      let CR2_Comments = $("#CR2_Comments").text()
      let Post_CR2_Ex_fty = $('#2tr td:eq(16) input').val();
      let Comments_Remarks = $("#Comments_Remarks").text()
      let EBR_Model_Date = $('#2tr td:eq(18) input').val();
      let EBR_Article_Date = $('#2tr td:eq(19) input').val();
      let Rev_BR_Date = $('#2tr td:eq(20) input').val();
      let Retail_Intro = $('#2tr td:eq(21) input').val();
      let Fty_Priority = $("#Fty_Priority").text()
      let Remarks = $("#Remarks").text()
      let Mktg_FC = $("#Mktg_FC").text()
      let FIFA_authorization_validity_Date = $('#2tr td:eq(25) input').val();
      let CR1_In_House_Status = $("#CR1_In_House_Status").text()
      let CR1_Subbmition_Status = $("#CR1_Subbmition_Status").text()
      let CR2_In_House_Status = $("#CR2_In_House_Status").text()
      let CR2_Subbmition_Status = $("#CR2_Subbmition_Status").text()
      let Approved = $("#Approved").text()
      let Final_CS_Confirmation = $("#Final_CS_Confirmation").text()
      let BR_Status = $("#BR_Status").text()
      let MCS = $("#MCS").text()
      let DevTypeN = $("#DevTypeN").text()
      let seasonN = $("#seasonN").text()
      
      data = {


        "id":id,
        // "ModelName":ModelName,
        // "PrintingColors" :PrintingColors,
        // "PanelShape" :PanelShape,
        "Yield" :Yield,
        "Article_Count":Article_Count, 
        "BF_Date":BF_Date, 
        "CR1_In_House_Date":CR1_In_House_Date, 
        "CR1_Subbmition_Date":CR1_Subbmition_Date, 
        "CR1_Comments":CR1_Comments, 
        "CR2_In_House_Date":CR2_In_House_Date, 
        "CR2_Subbmition_Date":CR2_Subbmition_Date, 
        "CR2_Comments" :CR2_Comments,
        "Post_CR2_Ex_fty":Post_CR2_Ex_fty ,
        "Comments_Remarks":Comments_Remarks, 
        "EBR_Model_Date":EBR_Model_Date, 
        "EBR_Article_Date":EBR_Article_Date, 
        "Rev_BR_Date":Rev_BR_Date, 
        "Retail_Intro" :Retail_Intro,
        "Fty_Priority":Fty_Priority, 
        "Remarks":Remarks, 
        "Mktg_FC":Mktg_FC, 
        "FIFA_authorization_validity_Date" :FIFA_authorization_validity_Date,
        "CR1_In_House_Status":CR1_In_House_Status, 
        "CR1_Subbmition_Status":CR1_Subbmition_Status, 
        "CR2_In_House_Status":CR2_In_House_Status, 
        "CR2_Subbmition_Status":CR2_Subbmition_Status,
        "Approved":Approved, 
        "Final_CS_Confirmation":Final_CS_Confirmation, 
        "BR_Status":BR_Status, 
        "MCS" :MCS,
        "DevTypeN" :DevTypeN,
        "seasonN" :seasonN

      }
      url = '<?php echo base_url('DPA/updateDPA') ?>';

      $.post(url,data, function(data) {
        console.log('updated');
      })
    }
  </script>
  <script>

    window.onload=function(){
      
      
      var twoDigitYear1 = seasonal1.toString().substr(-2);
      fSeason = season1 + twoDigitYear1;


      urls = "<?php echo base_url(''); ?>DPA/dpaLoad/";
      $.get(urls, {
        

      }, function(data) {

        let i = 1;

        let appendtable = '';
        appendtable += `<table class="table table-striped table-hover table-sm" id="ActivityData" >
                                <thead>
                                    <tr  class="bg-primary-200"  style="color:white;">
                                    <th>#SR</th>
                                     <th>Article  </th>
                                       <th>Working </th>
                                        <th>Product Name</th>
                                        <th>Colorway Name</th>
                                          <th>Factory Code </th>
                                         <th>Panel Shape</th>
                                          <th>Yield</th>
                                          <th>Article Option</th>
                                            <th>First Briefing Out</th>
                                              <th>CR1 in-house Date</th>
                                             <th>CR1 Submission date</th>
                                             <th>CR1 Comments</th>
                                             <th>CR2 in-house Date</th>
                                             <th>CR2 Submission date</th>
                                             <th>CR2 Comments</th>
                                             <th>Post CR2 Date</th>
                                             <th>Comments</th>
                                             <th>Earliest Buy Model</th>
                                             <th>Earliest Buy Article</th>
                                             <th>REV BR Date</th>
                                             <th>Retail Intro</th>
                                             <th>FTY Priority</th>
                                             <th>Remarks</th>
                                             <th>MKTG FC(Global)</th>
                                             <th>FIFA Validity</th>
                                             <th>CR1 in-house</th>
                                             <th>CR1 Submission</th>
                                             <th>CR2 in-house</th>
                                             <th>CR2 Submission</th>
                                             <th>Approve</th>
                                             <th>Final CS Confirm</th>
                                             <th>Br Status</th>
                                             <th>MCS</th>
                                             <th>Development  Type</th>
                                             <th>Season</th>
                                             <?php
                                             if ($DPA =='1'){}else{
                                          ?>
                                             <th>Undo</th>
                                             <th>Update</th>
                                              
                                             <?php
                                             
      }
      
      ?>
                                       
                                    </tr>
                                </thead>
                                <tbody>`
        data.forEach((element) => {
          CR1_In_House_Datee=element.CR1_In_House_Date

dd_CR1_In_House_Datee =CR1_In_House_Datee.substring(0, 2);
mm_CR1_In_House_Datee =CR1_In_House_Datee.substring(3, 5);
yy_CR1_In_House_Datee =CR1_In_House_Datee.substring(6, 10);
final_CR1_In_House_Datee=yy_CR1_In_House_Datee+'-'+mm_CR1_In_House_Datee+'-'+dd_CR1_In_House_Datee


BF_Datee=element.BF_Date
dd_BF_Datee =BF_Datee.substring(0, 2);
mm_BF_Datee =BF_Datee.substring(3, 5);
yy_BF_Datee =BF_Datee.substring(6, 10);
final_BF_Datee=yy_BF_Datee+'-'+mm_BF_Datee+'-'+dd_BF_Datee

CR1_Subbmition_Datee=element.CR1_Subbmition_Date
dd_CR1_Subbmition_Datee =CR1_Subbmition_Datee.substring(0, 2);
mm_CR1_Subbmition_Datee =CR1_Subbmition_Datee.substring(3, 5);
yy_CR1_Subbmition_Datee =CR1_Subbmition_Datee.substring(6, 10);
final_CR1_Subbmition_Datee=yy_CR1_Subbmition_Datee+'-'+mm_CR1_Subbmition_Datee+'-'+dd_CR1_Subbmition_Datee


CR2_In_House_Datee=element.CR2_In_House_Date
dd_CR2_In_House_Datee =CR2_In_House_Datee.substring(0, 2);
mm_CR2_In_House_Datee =CR2_In_House_Datee.substring(3, 5);
yy_CR2_In_House_Datee=CR2_In_House_Datee.substring(6, 10);
final_CR2_In_House_Datee=yy_CR2_In_House_Datee+'-'+mm_CR2_In_House_Datee+'-'+dd_CR2_In_House_Datee


CR2_Subbmition_Date=element.CR2_Subbmition_Date
dd_CR2_Subbmition_Date =CR2_Subbmition_Date.substring(0, 2);
mm_CR2_Subbmition_Date =CR2_Subbmition_Date.substring(3, 5);
yy_CR2_Subbmition_Date=CR2_Subbmition_Date.substring(6, 10);
final_CR2_Subbmition_Date=yy_CR2_Subbmition_Date+'-'+mm_CR2_Subbmition_Date+'-'+dd_CR2_Subbmition_Date


EBR_Model_Date=element.EBR_Model_Date
dd_EBR_Model_Date =EBR_Model_Date.substring(0, 2);
mm_EBR_Model_Date =EBR_Model_Date.substring(3, 5);
yy_EBR_Model_Date=EBR_Model_Date.substring(6, 10);
final_EBR_Model_Date=yy_EBR_Model_Date+'-'+mm_EBR_Model_Date+'-'+dd_EBR_Model_Date


EBR_Article_Date=element.EBR_Article_Date
dd_EBR_Article_Date =EBR_Article_Date.substring(0, 2);
mm_EBR_Article_Date =EBR_Article_Date.substring(3, 5);
yy_EBR_Article_Date=EBR_Article_Date.substring(6, 10);
final_EBR_Article_Date=yy_EBR_Article_Date+'-'+mm_EBR_Article_Date+'-'+dd_EBR_Article_Date


Rev_BR_Date=element.Rev_BR_Date
dd_Rev_BR_Date =Rev_BR_Date.substring(0, 2);
mm_Rev_BR_Date =Rev_BR_Date.substring(3, 5);
yy_Rev_BR_Date=Rev_BR_Date.substring(6, 10);
final_Rev_BR_Date=yy_Rev_BR_Date+'-'+mm_Rev_BR_Date+'-'+dd_Rev_BR_Date

FIFA_authorization_validity_Date=element.FIFA_authorization_validity_Date
dd_FIFA_authorization_validity_Date =FIFA_authorization_validity_Date.substring(0, 2);
mm_FIFA_authorization_validity_Date =FIFA_authorization_validity_Date.substring(3, 5);
yy_FIFA_authorization_validity_Date=FIFA_authorization_validity_Date.substring(6, 10);
final_FIFA_authorization_validity_Date=yy_FIFA_authorization_validity_Date+'-'+mm_FIFA_authorization_validity_Date+'-'+dd_FIFA_authorization_validity_Date

          appendtable += `<tr id="2tr">
                                <td>#${i++} </td>
                                <td> ${element.ArtCode} </td>
                                       <td>${element.WorkNo} </td>
                                        <td >${element.ModelName}</td>
                                        <td >${element.PrintingColors}</td>
                                          <td>${element.FactoryCode}</td>
                                         <td >${element.PanelShape}</td>
                                          <td contenteditable="true" id="Yield">${element.Yield}</td>
                                          <td contenteditable="true" id="Article_Count"> ${element.Article_Count}</td>
                                          <td contenteditable="true" id="BF_Date" > <input type="date" value="${final_BF_Datee}"/><i style="color:white;">${final_BF_Datee}</i></td>
                                          <td contenteditable="true" id="CR1_In_House_Date"><input type="date" value="${final_CR1_In_House_Datee}"/> <i style="color:white;">${final_CR1_In_House_Datee}</i></td>
                                          <td contenteditable="true" id="CR1_Subbmition_Date"> <input type="date" value="${final_CR1_Subbmition_Datee}"/> <i style="color:white;">${final_CR1_Subbmition_Datee}</i></td>
                                          <td contenteditable="true" id="CR1_Comments">${element.CR1_Comments}</td>
                                          <td contenteditable="true" id="CR2_In_House_Date"> <input type="date" value="${final_CR2_In_House_Datee}"/><i style="color:white;">${final_CR2_In_House_Datee}</i></td>
                                          <td contenteditable="true" id="CR2_Subbmition_Date"><input type="date" value="${final_CR2_Subbmition_Date}"/><i style="color:white;">${final_CR2_Subbmition_Date}</i></td>
                                          <td contenteditable="true" id="CR2_Comments">${element.CR2_Comments}</td>
                                          <td contenteditable="true" id="Post_CR2_Ex_fty"><input type="date" value="${element.Post_CR2_Ex_fty}"/></td>
                                          <td contenteditable="true" id="Comments_Remarks">${element.Comments_Remarks}</td>
                                          <td contenteditable="true" id="EBR_Model_Date"><input type="date" value="${final_EBR_Model_Date}"/><i style="color:white;">${final_EBR_Model_Date}</i></td>
                                          <td contenteditable="true" id="EBR_Article_Date"><input type="date" value="${final_EBR_Article_Date}"/><i style="color:white;">${final_EBR_Article_Date}</i></td>
                                          <td contenteditable="true" id="Rev_BR_Date"><input type="date" value="${final_Rev_BR_Date}"/><i style="color:white;">${final_Rev_BR_Date}</i></td>
                                          <td contenteditable="true" id="Retail_Intro"><input type="date" value="${element.Retail_Intro}"/></td>
                                          <td contenteditable="true" id="Fty_Priority">${element.Fty_Priority}</td>
                                          <td contenteditable="true" id="Remarks">${element.Remarks}</td>
                                          <td contenteditable="true" id="Mktg_FC">${element.Mktg_FC}</td>
                                          <td contenteditable="true" id="FIFA_authorization_validity_Date"><input type="date" value="${final_FIFA_authorization_validity_Date}"/><i style="color:white;">${final_FIFA_authorization_validity_Date}</i></td>
                                          <td contenteditable="true" id="CR1_In_House_Status">${element.CR1_In_House_Status}</td>
                                          <td contenteditable="true" id="CR1_Subbmition_Status">${element.CR1_Subbmition_Status}</td>
                                          <td contenteditable="true" id="CR2_In_House_Status">${element.CR2_In_House_Status}</td>
                                          <td contenteditable="true" id="CR2_Subbmition_Status">${element.CR2_Subbmition_Status}</td>
                                          <td contenteditable="true" id="Approved">${element.Approved}</td>
                                          <td contenteditable="true" id="Final_CS_Confirmation">${element.Final_CS_Confirmation}</td>
                                          <td contenteditable="true" id="BR_Status">${element.BR_Status}</td>
                                          <td contenteditable="true" id="MCS">${element.MCS}</td>
                                               <td contenteditable="true" id="DevTypeN">${element.DevType}</td>
                                               <td contenteditable="true" id="seasonN">${element.season}</td>
                                               <?php
                                             if ($DPA =='1'){}else{
                                          ?>
                                          <td>
                                   
                                        
                                                <button type="button" class="btn btn-danger" onclick="deleterecord(${element.TID})">Delete</button>
                                             
                                          </td>
                                          <td>
                                     
                                                 <button type="button" class="btn btn-info" onclick="updaterecord(${element.TID})">Update</button>
                                            
                                        
                                          </td>
                                          <?php
                                          
                                             }
                                             
                                             ?>
                                        </tr>`
        })

        appendtable += `</tbody>

                                </table>`

        $("#Data").html(appendtable)
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



      });
    
    }
  </script>
  </body>

  </html>


<?php
} ?>
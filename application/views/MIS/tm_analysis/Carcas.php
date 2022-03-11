

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
                            <i class='subheader-icon fal fa-chart-area'></i>Carcas</span>

                        </h1>
                    </div>
          <?php
if ($this->session->userdata('userStus') == 1) {
?>


  <body>

    <div id="right-panel" class="right-panel">

      <style>



      </style>
      <link href="<?php link_file('assets/qa_assets/main.css') ?>" rel="stylesheet">

      <script>
        function CallCombox() {
          Domain = $('#Select').val();
          url = "<?php echo base_url('MIS/Carcas/fact2/') ?>" + Domain
          //alert(Domain);
          //  alert(url);
          $.get(url, function(res) {

            data = res.data
            //alert(data); 
            options = "<option value=''>Select Material Type  </option>"
            for (i = 0; i < data.length; i++) {
              options += '<option value="' + data[i].ShapeID + '">' + data[i].ShapeName + '</option>'
            }
            $("#SelectBox").html(options)
          });

        }


        function CallCombox1() {
          Domain = $('#SelectBox').val();
          url = "<?php echo base_url('MIS/Carcas/material/') ?>" + Domain

          $.get(url, function(res) {
            data = res.data
            options = "<option value=''>Select Material Shape  </option>"
            for (i = 0; i < data.length; i++) {
              options += '<option value="' + data[i].MatID + '">' + data[i].MatName + '</option>'
            }
            $("#SelectBox1").html(options)
          });
        }

        function MainFunction() {
          //alert('hi');
          fc = $('#Select').val();
          matType = $('#SelectBox').val();
          Shape = $('#SelectBox1').val();
          Sdate = $('#SDate').val();
          EDate = $('#EDate').val();
          //alert(fc);
          url = "<?php echo base_url('MIS/Carcas/searchQuery/') ?>" + fc + "/" + matType + "/" + Shape + "/" + Sdate + "/" + EDate
          //alert(url);
          $.get(url, function(data) {
            //alert(data);



            fillReport(data, true)

          });
        }

        function fillReport(data, group) {


          $('#content').html(data);
          $('#forming').dataTable(getOptions(group))



        }

        function getOptions(group) {
          var options = {
            dom: 'Bfrtip',
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
            ],
            "ordering": false,
            "pageLength": 10,
            "searching": false,
            "LengthChange": true,
            "oLanguage": {
              "sEmptyTable": "Data Is Not Available Yet!"
            },

          }



          return options
        }
      </script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


      <?php



      $Month = date('m');
      $Year = date('Y');
      $Day = date('d');
      $CurrentDate = $Year . '-' . $Month . '-' . $Day;
      ?>


      <!-- <div class="row clearfix"> -->
        <div class="row">
        <div class="col-md-2">
        <div class="form-group">
          <div class="input-group">
            <label for="email">Select F-Code</label>
            <select class="form-control" name="Type" required="true" onchange="CallCombox()" id="Select" style="width: 100%">
              <option value="">Select F-Code</option>
              <option value="2">B34002</option>
              <option value="3">B34003</option>
              <option value="4">B34004</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <div class="form-line">
            <label for="email">Select Material Type :</label>
            <select class="form-control show-tick" data-live-search="true" name="materialType" id="SelectBox" style="width: 100%;" onchange="CallCombox1()" required="required">
              <option value="">Select Material Type</option>
            </select>
          </div>
        </div>

      </div>
      <div class="col-md-2">
        <div class="form-group">
          <div class="form-line">
            <label for="email">Select Shape</label>
            <select class="form-control show-tick" data-live-search="true" name="material" id="SelectBox1" style="width: 100%;" required="required">
              <option value="">Select Material</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <label class="form-control-label">From Date:</label>
          <div class="input-group">
            <input class="form-control" type="Date" id="SDate" name="Sdate" value="<?php echo $CurrentDate; ?>" style="width: 100%">
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <label class="form-control-label">To Date:</label>
          <div class="input-group">
            <input class="form-control" type="Date" id="EDate" name="Edate" value="<?php echo $CurrentDate; ?>" style="width: 100%">
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <label class=" form-control-label"></label>
          <div class="input-group">

            <button style="margin:19px" type="submit" id="submit" name="submit" onclick="MainFunction()" class="btn btn-success btn-block" style="border-radius: 15px;"><i class=" fa fa-search"></i> Search</buttonst>
        </div>
      </div>
        </div>


      <?php
      if (isset($CarcasData)) {
        print_r($CarcasData);
      ?>
        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width:70%;">
          <thead class="bg-primary-200 text-light" style="color: #fff;">
            <th colspan="6" style="text-align: center;">Carcas Weight Between of (<?php echo $Sdate; ?>) And (<?php echo $Edate; ?>)</th>
          </thead>

        </table>
        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 65%;">
          <thead class="bg-primary-200 text-light" style="color: #fff;">
            <th>Hours</th>
            <th>Size</th>
            <th>Weight Range</th>

            <th>Weight</th>

            <th>Cir. Range</th>
            <th>Circumference</th>
          </thead>
          <tbody>
            <tr>asasa
              <?php
              foreach ($CarcasData as $d) {
                $HourName = $d->HourName;
                $Size = $d->Size;
              ?>

                <td style="text-align: center;"><?php echo $HourName; ?></td>

                <td style="text-align: center;"><?php echo $Size; ?></td>

                <td style="text-align: right; color: red;"><?php echo Round($d->CarcWghtStartRange); ?>-<?php echo Round($d->CarcWghtEndRange); ?></td>

                <?php if (($d->CarcassWght > $d->CarcWghtEndRange) || ($d->CarcassWght < $d->CarcWghtStartRange)) {
                ?>

                  <td style="text-align: right;"><?php echo Round($d->CarcassWght); ?></td>
                <?php

                } else {
                ?>
                  <td style="text-align: right; color: green;"><?php echo Round($d->CarcassWght); ?></td>
                <?php
                }
                ?>

                <td style="text-align: right; color: red;"><?php echo Round($d->CarcCircumStartRange); ?>-<?php echo Round($d->CarcCircumEndRange); ?></td>

                <?php if (($d->CarcassCircum > $d->CarcWghtEndRange) || ($d->CarcassCircum < $d->CarcWghtStartRange)) {
                ?>

                  <td style="text-align: right;"><?php echo Round($d->CarcassCircum); ?></td>
                <?php

                } else {
                ?>
                  <td style="text-align: right; color: green;"><?php echo Round($d->CarcassCircum); ?></td>
                <?php
                }
                ?>

            </tr>
          </tbody>
        <?php

              }
        ?>

      <?php
      } else {

      ?>
      <div class="col-md-12">
        <div class="card">
        <div id="content">
          <center>
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 100%; margin-top:-300px; ">
              <thead class="bg-primary-200 text-light" style="color: #fff;">
                <th colspan="6" style="text-align: center;">Carcas Details (<?php echo $Day; ?>/<?php echo $Month; ?>/<?php echo $Year; ?> )</th>
              </thead>
              <tr style="font-weight: bold;">
                <td>Factory Code</td>

                <td>Material</td>
                <td>Shape</td>
              </tr>
              <?php



              foreach ($getCarsasData as $Key) {

              ?>
                <tr>
                  <td><?php echo $Key['FactoryCode']; ?></td>

                  <td><?php echo $Key['ShapeName']; ?></td>

                  <td><?php echo $Key['MatName']; ?></td>
                </tr>
              <?php
              }

              ?>
          </center>
        </div>
        </div>
      </div>
        <div id="container"></div>
        <?php
        $this->load->View('AdminFooter');
        ?>
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

    <?php

      }
    } else {
      redirect('Welcome/index');
    }
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
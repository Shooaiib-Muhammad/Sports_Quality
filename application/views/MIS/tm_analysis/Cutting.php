
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
          <ol class="breadcrumb page-breadcrumb">
               
               <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
           </ol>
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i>Cutting</span>

                        </h1>
                    </div>
          <?php
if ($this->session->userdata('userStus') == 1) {
?>

  <body>
    
    <div id="right-panel" class="right-panel">


      <script src="<?php echo base_url(); ?>assets/js/jquery.js" type="text/javascript"></script>

      <script>
        function CallCombox() {
          Domain = $('#Select').val();
          url = "<?php echo base_url('MIS/Cutting/fact2/') ?>" + Domain

          $.get(url, function(res) {
            data = res.data
            options = "<option value=''>Select Material Type  </option>"
            for (i = 0; i < data.length; i++) {
              options += '<option value="' + data[i].TID + '">' + data[i].MaterialType + '</option>'
            }
            $("#SelectBox").html(options)
          });

        }


        function CallCombox1() {
          Domain = $('#SelectBox').val();
          url = "<?php echo base_url('MIS/Cutting/material/') ?>" + Domain

          $.get(url, function(res) {
            data = res.data
            options = "<option value=''>Select Material Shape  </option>"
            for (i = 0; i < data.length; i++) {
              options += '<option value="' + data[i].MatID + '">' + data[i].MatName + '</option>'
            }
            $("#SelectBox1").html(options)
          });
        }

        function CallCombox2() {
          Domain = $('#SelectBox1').val();
          url = "<?php echo base_url('MIS/Cutting/shape/') ?>" + Domain

          $.get(url, function(res) {
            data = res.data
            options = "<option value=''>Select Material Shape  </option>"
            for (i = 0; i < data.length; i++) {
              options += '<option value="' + data[i].ShapeID + '">' + data[i].ShapeName + '</option>'
            }
            $("#SelectBox2").html(options)
          });
        }

        function Cut() {
          fc = $('#Select').val();
          matType = $('#SelectBox').val();
          Shape = $('#SelectBox1').val();
          material = $('#SelectBox2').val();
          Sdate = $('#SDate').val();
          EDate = $('#EDate').val();
          //alert(fc);
          url = "<?php echo base_url('MIS/Cutting/Cutting1/') ?>" + fc + "/" + matType + "/" + Shape + "/" + material + "/" + Sdate + "/" + EDate
          //   alert(url);
          $.get(url, function(data) {
            //alert(data);
            fillReport(data, true)
          });
        }

        function fillReport(data, group) {

          $('#content').html(data);
          // $('#forming-table').dataTable(getOptions(group))
          $('#forming-table').dataTable({
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

      
      </script>

      <?php
      $Month = date('m');
      $Year = date('Y');
      $Day = date('d');
      $CurrentDate = $Year . '-' . $Month . '-' . $Day;
      ?>

      <!-- <div class="row clearfix"> -->
        <div class="row">
        <div class="col-md-1">
        <div class="form-group">
          <div class="input-group">
            <label class="form-control-label">Select F-Code</label>
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
            <label class="form-control-label">Select Material Type :</label>
            <select class="form-control show-tick" data-live-search="true" name="materialType" id="SelectBox" style="width: 100%;" onchange="CallCombox1()" required="required">
              <option value="">Select Material Type</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <div class="form-line">
            <label class="form-control-label">Select Shape</labe>
            <select class="form-control show-tick" data-live-search="true" name="material" id="SelectBox1" style="width: 100%;" onchange="CallCombox2()" required="required">
              <option value="">Select Material</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <div class="form-line">
            <label class="form-control-label" >Select Material </label>
            <select class="form-control show-tick" data-live-search="true" name="Shape" id="SelectBox2" style="width: 100%;" required="required">
              <option value="">Select Shape</option>
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
      <div class="col-md-1">
        <div class="form-group">
          <label class=" form-control-label"></label>
          <div style="margin:18px" class="input-group">
            <button type="submit" onclick="Cut()" class="btn btn-primary " style="border-radius: 15px;"><i class=" fa fa-search"></i> Search</button>
          </div>
        </div>
      </div>
        </div>

      <div style="margin:30px auto" id="content">
        <center>
          <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 65%; ">
            <thead class="bg-primary-200 text-light" style="color: #fff;">
              <th colspan="6" style="text-align: center;">Cutting Details</th>
            </thead>
            <tr>
              <td colspan="3">Material Type:PU</td>
            </tr>
            <tr style="font-weight: bold;">
              <td>Factory Code</td>
              <td>Shape</td>
              <td> Material</td>
            </tr>
            <?php
            foreach ($Data1 as $Key) {
            ?>
              <tr>
                <td><?php echo $Key['FactoryCode']; ?></td>
                <td><?php echo $Key['MatName']; ?></td>
                <td><?php echo $Key['ShpeName']; ?></td>

              </tr>
            <?php
            }

            ?>



          </table>
          <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 65%; ">

            <tr>
              <td colspan="3">Material Type:Fabric</td>
            </tr>

            <?php
            foreach ($Data2 as $Key) {
            ?>
              <tr>
                <td><?php echo $Key['FactoryCode']; ?></td>
                <td><?php echo $Key['MatName']; ?></td>
                <td><?php echo $Key['ShpeName']; ?></td>

              </tr>
            <?php
            }

            ?>



          </table>
          <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 65%; ">

            <tr>
              <td colspan="3">Material Type:Foam</td>
            </tr>

            <?php
            foreach ($Data3 as $Key) {
            ?>
              <tr>
                <td><?php echo $Key['FactoryCode']; ?></td>
                <td><?php echo $Key['MatName']; ?></td>
                <td><?php echo $Key['ShpeName']; ?></td>

              </tr>
            <?php
            }

            ?>



          </table>
        </center>
      </div>
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
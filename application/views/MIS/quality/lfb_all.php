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
                                <!doctype html>
<?php
if ($this->session->userdata('userStus')==1) {
?>
<html class="no-js" lang="en">
<!--<![endif]-->

<body>

<div id="right-panel" class="right-panel">


<style type="text/css">
                  td{
                    text-align: center;
                  }
                  .Froming{
                    color: #33cccc;
                  }
                  .packing{
                    color: #1a8cff;
                  }
</style> 
  <div class="container-fluid">
<div class="row">

<div class="col-md-12">
<h2 class="bg-primary-200 text-white p-2 text-center"> MP No Wise PO Detail</h2>
</h2>
<div class="table-responsive">
<table class="table table-hover table-bordered table-responsive" id="table">
    <thead class="bg-primary-200 text-light">
        <tr class="text-center">
            <th>MPNo</th>
            <th>PO Code</th>
            <th>Article </th>
            <th>Size </th>
            <td>Plan Qty</td>
            <th>Check</th>
            <td>Pass</td>
            <th>Fail</th>
            <td>Type</td>
            

        </tr>
    </thead>
    <tbody>
        <?php foreach ($Record as $d) {; ?>
        <tr class="text-center">
            <td><?php Echo $d['MPID']; ?></td>
              <td><?php Echo $d['POCode']; ?></td>
                  <td><?php Echo $d['ArtCode']; ?></td>
                      <td><?php Echo $d['ArtSize']; ?></td>
                          <td><?php Echo $d['PlanQty']; ?></td>
                              <td><?php Echo $d['CheckSheets']; ?></td>
                                  <td><?php Echo $d['PassSheets']; ?></td>
                                      <td><?php Echo $d['FailSheets']; ?></td>
                                          <td><?php Echo $d['printingType']; ?></td>
            
        </tr>
        <?php }; ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
  

</body>
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

      <script>
         $(document).ready(function() {
            // LoadData(stDate, enDate);

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
<!-- <script>
  $(document).ready( function () {

    $('#table').DataTable(
    { 
       dom: 'Bfrtip',
        buttons: [
            'copy',
            {
                extend: 'excel',
                messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
            },
            {
                extend: 'pdf',
                messageBottom: null
            },
            
           
        ],
     "ordering":false,
      "pageLength":10,
      "searching":false,
      "LengthChange":true,
      "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},

    
    }


      );

   
} );
</script> -->
<?php
}else{
    redirect('Welcome/index');
}
?>


                                </div>
                                </main>
                                </div>
                                </div>
                                </div>
                                </div>
                                <?php }?>
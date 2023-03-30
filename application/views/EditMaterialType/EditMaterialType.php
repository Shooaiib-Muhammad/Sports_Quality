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
                        <li class="breadcrumb-item"><a href="<?php echo base_url(
                                                                    'index.php/DashboardController'
                                                                ); ?>">Dashboard</a></li>
                                                                <li class="breadcrumb-item"> Edit Material Types</li>


                        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                    </ol>


                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">

                                    
                                        <h2>Edit Material Types </h2>

                                    </div>

                                    <div class="panel-container show">






<div class="panel-content">


<div class="card-body ab-c-btable-responsive">
                            <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="demo-v-spacing" id="defaultTable" > 
                                <table  id="table" class="table table-bordered table-hover table-responsive table-striped w-100" style="width: 100%;">
<thead class="bg-primary-200 text-light">
                <style type="text/css">
                  td{
                    text-align: center;
                  }
                
                </style>                      
                                       
                                       
<tr style="font-weight: bold;">
<td style="text-align: left;">Type</td> 
<td  style="width:10%; " >Test Type</td>
<td  style="width:10%; " >CSSNo</td>
<td  style="width:10%;">Sample Request Data</td>
<td  style="width:10%;">Factory Code</td>
<td  style="width:10%;">Supplier Name</td>
<td  style="width:10%;">Quantity Issued</td>
<td  style="width:10%;">Status</td>
<td  style="width:10%;">Material Type</td>
<td  style="width:10%;">Actions</td>

</tr>
</thead>
<tbody style="border:1px black solid; ">

<?php
foreach($getLabRequestData as $key){
?> 
<tr>
<td style="width:10%; text-align: left;"><?php echo $key['Type'] ?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo $key['TestType'] ?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo $key['CSSNo'] ?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo $key['Sample_RequestDate'] ?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo $key['Factory_Code'] ?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo $key['SupplierName'] ?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo $key['Quantity_Issued'] ?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo $key['Status'] ?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo $key['MaterialType'] ?></td>
<td  style="width:10%; text-align: center;" class="packing">
<button type="button" class="btn btn-warning updatebtn" style="float:right;" 
data-toggle="modal" data-target="#Modaldepartment" 
value="<?php echo $key['TID']; ?>"
id="btn.<?php echo $key['TID']; ?>">Edit Material Type</button>
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
</div>



</div>

</div>




</div>



<div id="Modaldepartment" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: rgb(83,78,130);color:white;font-weight:bolder">

                                <h1 class="modal-title" id="changeTitle">Edit Material Type</h1>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" style="color: white;">&times;</span>
                                    </button>

                                </div>

                                <div class="modal-body">


                                <form name="formDepartment" id="myformDepartment" method="POST" action="<?php echo base_url(
                                                                                                                ''
                                                                                                            ); ?>LabController/AddTestType">
                                        <input type="hidden" name="Id" id="IdValue" value="">

                                        <div class="row" style="display:flex">

                                        <div class="col-md-12">
                                            <label class="form-contol" for="customFile">TID</label>
                                            <input type="text" class="form-control" disabled id="tid" name="tid">
                                        </div>


                                        <div class="col-md-12">
                                            <label class="form-contol" for="customFile">CSS No</label>
                                            <input type="text" class="form-control" disabled id="cssNo" name="cssNo">
                                        </div>

                                            <div class="col-md-12">


                                            <div class="form-group">
                                                            
                                                                                    <label>Select Material Type</label>
                                                                                    <select class="form-control" 
                                                                                    id="materialName" name="materialName"
                                                                                    
                                                                                    >
                                                                                        <option value="" selected="">Select Material Type</option>
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

                                                <!-- <label class="form-contol" for="customFile">Material Type</label>
                                                <input type="text" class="form-control" id="materialName" name="materialName"> -->

                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="form-group">
                                                <div>
                                                    <button type="button" class="btn btn-primary m-3" id="editValue">Update</button>

                                                    <!-- <input type = "reset" class="bg-secondary text-white btn-sm" id="btnClear" /> -->

                                                    <!-- <button class="btn btn-danger" data-dismiss="modal" style="display:inline-block;">Close</button> -->

                                                </div>
                                            </div>
                                        </div>
                                    </form>




                                </div>




                            </div>
                        </div>

</div>





              
                </div>
            </main>
            
        </div>
    </div>
</div>
</div>


<script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
      <script type="text/javascript">
          /* Activate smart panels */
          $('#js-page-content').smartPanel();
      </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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


            $(".updatebtn").click(function(e) {

let id = this.id;
let split_value = id.split(".");
var TID = split_value[1];


url4 = "<?php echo base_url(''); ?>EditMaterialType/EditMaterialType/getLabRequestDataById";


$.post(url4, {
                    'Id': TID
                },
                function(data, status) {
                    console.log("Data", data)
                    $('#tid').val(TID);
                    $('#cssNo').val(TID);

                    $('#materialName').val(MaterialType);

             
                });

})


$('#editValue').click(function(e) {

e.preventDefault();

let materialName = $('#materialName').val();
let TID = $('#tid').val();


let url = "<?php echo base_url(''); ?>EditMaterialType/EditMaterialType/EditMaterialType"

$.post(url, {   
                    'Id': TID,
                    'materialName': materialName,
                },
                function(data, status) {
                    alert("Data Updated Successfully! Wait for page to be Reloaded")
                    setInterval(function() {
                        window.location.reload();
                    }, 3000);

                });


})

</script>



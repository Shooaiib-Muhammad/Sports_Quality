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

                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>Edit Lab Reports </h2>

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
<td style="text-align: left;">Test No</td> 
<td  style="width:10%; " >Date</td>
<td  style="width:10%; " >Size</td>
<td  style="width:10%; " >CSS No</td>
<td  style="width:10%;">PO</td>
<td  style="width:10%;">Receving Date</td>
<td  style="width:10%;">Supplier Name</td>
<td  style="width:10%;">Supplier Reference</td>
<td  style="width:10%;">Qauntity Carbon</td>
<td  style="width:10%;">Entry Date</td>
<td  style="width:10%;">Actions</td>

</tr>
</thead>
<tbody style="border:1px black solid; ">

<?php
foreach($getLabEditRep as $key){
?> 
<tr>
<td style="width:10%; text-align: left;"><?php echo $key['TestNO']; ?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo $key['Date']; ?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo $key['Size']; ?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo $key['CSSNO']; ?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo $key['PO']; ?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo $key['Receiving_Date']; ?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo $key['Supplier_Name']; ?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo $key['Supplier_Ref']; ?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo $key['Quantity_Carton']; ?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo $key['Entrydate11']; ?></td>
<td  style="width:10%; text-align: center;" class="packing">
<button type="button" class="btn btn-info  updatebtn" style="float:right;" 
data-toggle="modal" data-target="#Modaldepartment" 
value="<?php echo $key['TID']; ?>"
id="btn.<?php echo $key['TID']; ?>"><i class="fal fa-edit " aria-hidden="true"></i></button>
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

                                <h1 class="modal-title" id="changeTitle">Edit Report</h1>
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

                                                <label class="form-contol" for="customFile">Size</label>
                                                <input type="text" class="form-control" id="Size" name="Size">

                                            </div>
                                            <div class="col-md-12">

<label class="form-contol" for="supplierName">Supplier Name</label>
<input type="text" class="form-control" id="supplierName" name="supplierName">

</div>

<div class="col-md-12">

<label class="form-contol" for="quantityCarton">Quanity Carton</label>
<input type="number" class="form-control" id="quantityCarton" name="quantityCarton">

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


url4 = "<?php echo base_url(''); ?>EditRep/EditRep/getLabRepById";


$.post(url4, {
                    'Id': TID
                },
                function(data, status) {
                    console.log("Data", data)
                    $('#tid').val(TID);

            
                    $('#Size').val(data[0].Size);
                    $('#supplierName').val(data[0].Supplier_Name);
                    $('#quantityCarton').val(data[0].Quantity_Carton);
             
                });

})


$('#editValue').click(function(e) {

e.preventDefault();

let Size = $('#Size').val();
let supplierName = $('#supplierName').val();
let quantityCarton = $('#quantityCarton').val();
let TID = $('#tid').val();


let url = "<?php echo base_url(''); ?>EditRep/EditRep/EditLabRep"

$.post(url, {   
                    'Id': TID,
                    'Size': Size,
                    'supplierName': supplierName,
                    'quantityCarton': quantityCarton,
                },
                function(data, status) {
                    alert("Data Updated Successfully! Wait for page to be Reloaded")
                    setInterval(function() {
                        window.location.reload();
                    }, 3000);

                });


})



</script>



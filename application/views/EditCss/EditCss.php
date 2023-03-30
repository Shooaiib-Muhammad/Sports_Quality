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

                                    
                                        <h2>Edit CSS Code </h2>

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
<td  style="width:10%; " >Material Type</td>
<td  style="width:10%; " >CSSNo</td>
<td  style="width:10%;">Sample Request Data</td>
<td  style="width:10%;">Factory Code</td>
<td  style="width:10%;">Article</td>
<td  style="width:10%;">Supplier Name</td>
<td  style="width:10%;">Quantity Issued</td>
<!-- <td  style="width:10%;">Test Requested</td> -->
<td  style="width:10%;">Status</td>
<td  style="width:10%;">Actions</td>

</tr>
</thead>
<tbody style="border:1px black solid; ">


<?php //print_r($loadFGT_H);
        $this->load->model('EditCssModel/EditCssModel', 'css');
        foreach ($getTestRequests as $keys) {
            $Requestid = $keys['TID'];
            $gettests = $this->css->getrequesttest($Requestid);
            //   print_r($gettests);
            if ($gettests) {
                // $name = implode(",", $gettests['Name']);
                // echo $name;
                //echo 'The values are: ';
                $result = '';
                foreach ($gettests as $key) {
                    $result .= $key['Name'] . ',';
                }
                $result = rtrim($result, ',');
            } else {
                $result = '';
            }

        }
        ?>

<?php foreach($getCSSDataBlank as $css){ ?>

<tr>
<td style="width:10%; text-align: left;"><?php echo $css['Type']; ?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo $css['TestType']; ?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo $css['MaterialType']; ?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo $css['CSSNo']; ?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo $css['Sample_RequestDate']; ?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo $css['Factory_Code']; ?></td>
<td  style="width:10%; text-align: center;" class="Froming"><?php echo $css['Article']; ?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo $css['SupplierName']; ?></td>
<td  style="width:10%; text-align: center;" class="packing"><?php echo $css['Quantity_Issued']; ?></td>
<!-- <td  style="width:10%; text-align: center;" class="packing"><?php echo $result; ?></td> -->
<td  style="width:10%; text-align: center;" class="packing"><?php echo $css['Status']; ?></td>
<td  style="width:10%; text-align: center;" class="packing">
<button type="button" class="btn btn-info updatebtn" style="float:right;" 
data-toggle="modal" data-target="#Modaldepartment" 
value="<?php echo $css['TID']; ?>"
id="btn.<?php echo $css['TID']; ?>"
><i class="fal fa-edit " aria-hidden="true"></i></button>
</td>



</tr>
<?php } ?>


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

                                <h1 class="modal-title" id="changeTitle">Edit CSS Code</h1>
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


                                            <div class="form-group">
                                                            
                                            <div class="col-md-12">

<label class="form-contol" for="customFile">Css Code</label>
<input type="text" class="form-control" id="cssCode" name="cssCode">

</div>
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



url4 = "<?php echo base_url(''); ?>EditCss/EditCss/getNullCssDataById";



$.post(url4, {
                    'Id': TID
                },
                function(data, status) {
                    console.log("Data", data)
                
                    $('#tid').val(TID);
             

                    
                });


        })



        $('#editValue').click(function(e) {

            
e.preventDefault();

cssCode = $("#cssCode").val();
let TID = $('#tid').val();



let url = "<?php echo base_url(''); ?>EditCss/EditCss/EditCssCode"


$.post(url, {   
                    'Id': TID,
                    'cssCode': cssCode,
                },
                function(data, status) {
                    alert("Data Updated Successfully! Wait for page to be Reloaded")
                    setInterval(function() {
                        window.location.reload();
                    }, 3000);

                });


        })



</script>
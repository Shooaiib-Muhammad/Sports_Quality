<script type="text/javascript">
 $(".updatebtn").click(function(e) {
      //alert("heloo");
     let id= this.id;
    //alert(id);
    let split_value = id.split(".");
 
     var TID =split_value[1];

     var Datee = $(`#Date${split_value[1]}`).val();
      var Balls = $(`#Balls${split_value[1]}`).val();
  var PO = $(`#PO${split_value[1]}`).val();

//alert(Status);
      //$('#check_id').val();
     // alert(TID);
      // alert(Datee);
       // alert(Balls);
    
  url = "<?php echo base_url(''); ?>DevelopmentController/updateprocess/"+ TID + "/" + Balls + "/" + Datee
  
//alert(url);
   $.get(url, function(data){
            alert("Data Updated Successfully");
           processData(PO)
            });

            
     });
      
      function processData(PO){
 url = "<?php echo base_url(''); ?>DevelopmentController/POData/"+ PO
            //alert(url);
            $.get(url, function(data){
             
              $("#Data").html(data)
            });

         }
 </script>
<table class="table table-striped table-hover table-sm" id="ActivityData">
                                <thead>
                                    <tr  class="bg-primary-200"  style="color:white;">
                                     <th>PO No </th>
                                        <th>Factory Code</th>
                                        <th>Process Name</th>
                                         <th>Date</th>
                                          <th>NO Of Balls</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                    if (isset($ProcessData)) {
                        foreach ($ProcessData as $Key) {
                           $TID=$Key['TID'];
                           $Month=date('m');
$Year=date('Y');
$Day=date('d');
$CurrentDate=$Year.'-'.$Month.'-'.$Day;
                    ?>

                                    <tr>
                                     <td ><?php echo $Key['PO']; ?> </td>
                                        <td ><?php echo $Key['VendorName']; ?> 
                                       <input name="PO" id="PO<?php echo $TID;?>" class="form-control" value="<?php echo $Key['PO'];?>" type="numeric" hidden>
                                      </td>
                                     
                                          
                                        <td > <?php echo $Key['Name']; ?></td>
                                          <td >


                                          <?php
                                          if ($Key['RDate']){
?>
 <?php echo $Key['RDate']; ?>
<?php
                                          }else{
                                           ?>
                                           <?php

                                          
                                           ?>
                                            <input name="Date" id="Date<?php echo $TID;?>" class="form-control" value="<?php echo $CurrentDate;?>" type="Date">
                                            <?php
                                          }
                                          ?>
                                          </td>
                                           <td >
                                          <input name="Date" value="<?php echo $Key['NoOfBalls']; ?>"id="Balls<?php echo $TID;?>" class="form-control" type="numeric"></td>
                                          <?php
                                          if ($Key['RDate']){
?>
                                            <td ><button type="submit" class="btn btn-success btn-xs updatebtn" readonly="true">update</button></td>
                                       <?php
                                          }else{
                                           ?>
                                           <td ><button type="submit" class="btn btn-info btn-xs updatebtn" id="btn.<?php echo $TID;?>" >update</button></td>
                                           <?php
                                          }
                                   ?>
                                      
                         
                                      <!--   <a class="btn" href="#ModalProjectForm"><i class="fa fa-pencil-square-o"  style="font-size:25px;"></i> 
                                        <a class="btn" href="#"><i class="fa fa-trash" aria-hidden="true" style="font-size:25px;"></i> -->
                                    
                                    </tr>
                                    <?php
                        }
}
?>

                                </tbody>
                            </table>
                            <script>
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
                             </script>
                             

  
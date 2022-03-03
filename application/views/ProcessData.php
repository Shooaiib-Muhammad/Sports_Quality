<script type="text/javascript">
   $(".updatebtn").click(function(e) {
      //alert("heloo");
     let id= this.id;
    //alert(id);
    let split_value = id.split(".");
 
     var TID =split_value[1];

     var Datee = $(`#Date${split_value[1]}`).val();
      var Balls = $(`#Balls${split_value[1]}`).val();
  var ArtCode = $(`#ArtCode${split_value[1]}`).val();
   var Size = $(`#ArtSize${split_value[1]}`).val();
   var percentageComplete = $(`#percentageComplete${split_value[1]}`).val();
var ProcessEndDate = $(`#ProcessEndDate${split_value[1]}`).val();
   var Status = $(`#Status${split_value[1]}`).val();
            //alert(Size);
    var splitter=Size.split('/');
    Size1=splitter[0];
    Size2=splitter[1];
     
    url = "<?php echo base_url(''); ?>DevelopmentController/updateprocess"
  // url = "<?php echo base_url(''); ?>DevelopmentController/updateprocessStart/"+ TID + "/" + Balls + "/" + Status + "/" + Datee + "/" + ProcessEndDate
  
//alert(url);
  //  $.get(url, function(data){
  //           alert("Data Updated Successfully");
  //          processData(article,Size1,Size2)
  //           });

            
  //    });

  $.post(url,{
  "TID":TID , "Balls":Balls, "Status":Status, "Datee":Datee , "ProcessEndDate":ProcessEndDate,"percentageComplete":percentageComplete}, function(data){
            alert("Data Updated Successfully");
           processData(article,Size1,Size2)
            });

            
     });
 $(".updatebtncomplete").click(function(e) {
      //alert("heloo");
     let id= this.id;
    //alert(id);
    let split_value = id.split(".");
 
     var TID =split_value[1];

     var Datee = $(`#Date${split_value[1]}`).val();
      var Balls = $(`#Balls${split_value[1]}`).val();
  var ArtCode = $(`#ArtCode${split_value[1]}`).val();
   var Size = $(`#ArtSize${split_value[1]}`).val();
 var Datee = $(`#Date${split_value[1]}`).val();
var ProcessEndDate = $(`#ProcessEndDate${split_value[1]}`).val();
   var Status = $(`#Status${split_value[1]}`).val();
    var rootcasuse = $(`#rootcasuse${split_value[1]}`).val();
    var percentageComplete = $(`#percentageComplete${split_value[1]}`).val();
    alert(percentageComplete);
     var action = $(`#action${split_value[1]}`).val();
            //alert(Size);
    var splitter=Size.split('/');
    Size1=splitter[0];
    Size2=splitter[1];
     

  url = "<?php echo base_url(''); ?>DevelopmentController/updatecprocess"
//alert(url);
   $.post(url,{
  "TID":TID , "Balls":Balls, "Status":Status, "Datee":Datee , "ProcessEndDate":ProcessEndDate, "rootcasuse":rootcasuse, "action":action,"percentageComplete":percentageComplete}, function(data){
            alert("Data Updated Successfully");
           processData(article,Size1,Size2)
            });

            
     });

     
      
               function processData(article,Size1,Size2){
 url = "<?php echo base_url(''); ?>DevelopmentController/POData/"+ article+ '/'+ Size1 + '/'+ Size2
            //alert(url);
            $.get(url, function(data){
             
              $("#Data").html(data)
            });

         }
 </script>
<table class="table table-striped table-hover table-sm" id="ActivityData" >
                                <thead>
                                    <tr  class="bg-primary-200"  style="color:white;">
                                     <th>Article  </th>
                                       <th>Size </th>
                                        <th>Factory Code</th>
                                        <th>Process Name</th>
                                          <th>Order Type </th>
                                         <th>Process Start Date</th>
                                          <th>Process End  Date</th>
                                         
                                          <th>No Of Balls</th>
                                            <th>Root Cause</th>
                                              <th>Corrective Action</th>
                                              <th>% Complete</th>
                                             <th>Status</th>
                                              
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                //print_r($ProcessData);

                    if (isset($ProcessData)) {
                        foreach ($ProcessData as $Key) {
                           $TID=$Key['TID'];
                           $Month=date('m');
$Year=date('Y');
$Day=date('d');
$CurrentDate=$Year.'-'.$Month.'-'.$Day;
 $Date1=$Key['RDate'];
//26/11/2021
 $SDay=substr($Date1,0,2);
 $SMonth=substr($Date1,3,2);
$SYear=substr($Date1,-4,7);
 $ReceivedDate=$SYear.'-'.$SMonth.'-'.$SDay;

 $ProcessEndDate=$Key['ProcessEndDate'];
 $PDay=substr($ProcessEndDate,0,2);
 $PMonth=substr($ProcessEndDate,3,2);
$PYear=substr($ProcessEndDate,-4,7);
 $PENDDate=$PYear.'-'.$PMonth.'-'.$PDay;
 $PEDate=$PDay.'-'.$PMonth.'-'.$PYear;

if($PENDDate > $CurrentDate OR $PENDDate == $CurrentDate){
?>
<tr >
                                     <td ><?php echo $Key['ArtCode']; ?> </td>
                                      <td ><?php echo $Key['ArtSize']; ?> </td>
                                        <td ><?php echo $Key['VendorName']; ?> 
                                       <input name="ArtCode" id="ArtCode<?php echo $TID;?>" class="form-control" value="<?php echo $Key['ArtCode'];?>" type="text" hidden>
                                        <input name="ArtSize" id="ArtSize<?php echo $TID;?>" class="form-control" value="<?php echo $Key['ArtSize'];?>" type="text" hidden>
                                      </td>
                                     
                                          
                                        <td > <?php echo $Key['Name']; ?></td>
                                           <td > <?php echo $Key['Type']; ?></td>
                                          <td >
                                          <?php
                                          if ($Key['RDate']){
?>
 <input name="Date" id="Date<?php echo $TID;?>" class="form-control" value="<?php echo $ReceivedDate;?>" type="Date">
<?php
                                          }else{
                                           ?>
                                            <input name="Date" id="Date<?php echo $TID;?>" class="form-control"  type="Date">
                                            <?php
                                          }
                                          ?>
                                          </td>
                                            <td >
                                          <?php
                                          if ($Key['ProcessEndDate']){
?>
 <input name="Date" id="ProcessEndDate<?php echo $TID;?>" class="form-control" value="<?php echo $PENDDate;?>" type="Date">
<?php
                                          }else{
                                           ?>
                                            <input name="Date" id="ProcessEndDate<?php echo $TID;?>" class="form-control"  type="Date">
                                            <?php
                                          }
                                          ?>
                                          </td>
                                           <td >
                                          <input name="Date" value="<?php echo $Key['NoOfBalls']; ?>" id="Balls<?php echo $TID;?>" class="form-control" type="numeric">
                                        </td>
                                            <?php
                                          if ($Key['Status']=='Complete'){
?> <td ><i style="display:none;"> <?php echo $Key['rootcasue']; ?> </i> 
                                         <input name="rootcasue" readonly="readonly" value="<?php echo $Key['rootcasue']; ?>" id="rootcasuse<?php echo $TID;?>" class="form-control" type="text">
                                          </td>
                                       <td >  <i style="display:none;"> <?php echo $Key['action']; ?> </i> 
                                          <input name="correctiveactionpln" readonly="readonly"  id="action<?php echo $TID;?>" value="<?php echo $Key['action']; ?>" class="form-control" type="text">
                                          </td>
                                       <?php
                                          }else{
                                           ?>
                                           <td> 
                                            <input name="rootcasue" placeholder="Root Cause"  id="rootcasuse<?php echo $TID;?>" class="form-control" type="text">
                                        </td> 
                                         <td> <input name="correctiveactionpln"  id="action<?php echo $TID;?>" placeholder="Corrective Action Plan" class="form-control" type="text">
                                         </td>
                                    
                                            <?php
                                          }
                                          ?>
                                         <td> 
                                         <select name="percentageComplete"  id="percentageComplete<?php echo $TID;?>" class="form-control" >
                                            <?php if($Key['percentageComplete'] == 0 || $Key['percentageComplete'] == null){ ?>
                                          <option value="0" selected>0</option>
                                          <?php }else{ ?>
                                            <option value="0">0</option>
                                          <?php 
                                          } ?>
                                           <?php if($Key['percentageComplete'] == 0.1){ ?>
                                          <option value="0.1" selected>0.1</option>
                                          <?php }else{ ?>
                                            <option value="0.1">0.1</option>
                                          <?php 
                                          } ?>
                                                 <?php if($Key['percentageComplete'] == 0.2){ ?>
                                          <option value="0.2" selected>0.2</option>
                                          <?php }else{ ?>
                                            <option value="0.2">0.2</option>
                                          <?php 
                                          } ?>
                                                 <?php if($Key['percentageComplete'] == 0.3){ ?>
                                          <option value="0.3" selected>0.3</option>
                                          <?php }else{ ?>
                                            <option value="0.3" >0.3</option>
                                          <?php 
                                          } ?>
                                                 <?php if($Key['percentageComplete'] == 0.4){ ?>
                                          <option value="0.4" selected>0.4</option>
                                          <?php }else{ ?>
                                            <option value="0.4">0.4</option>
                                          <?php 
                                          } ?>
                                                 <?php if($Key['percentageComplete'] == 0.5){ ?>
                                          <option value="0.5" selected>0.5</option>
                                          <?php }else{ ?>
                                            <option value="0.5" >0.5</option>
                                          <?php 
                                          } ?>
                                                 <?php if($Key['percentageComplete'] == 0.6){ ?>
                                          <option value="0.6" selected>0.6</option>
                                          <?php }else{ ?>
                                            <option value="0.6" >0.6</option>
                                          <?php 
                                          } ?>
                                                 <?php if($Key['percentageComplete'] == 0.7){ ?>
                                          <option value="0.7" selected>0.7</option>
                                          <?php }else{ ?>
                                            <option value="0.7" >0.7</option>
                                          <?php 
                                          } ?>
                                                 <?php if($Key['percentageComplete'] == 0.8){ ?>
                                          <option value="0.8" selected>0.8</option>
                                          <?php }else{ ?>
                                            <option value="0.8" >0.8</option>
                                          <?php 
                                          } ?>
                                                 <?php if($Key['percentageComplete'] == 0.9){ ?>
                                          <option value="0.9" selected>0.9</option>
                                          <?php }else{ ?>
                                            <option value="0.9" >0.9</option>
                                          <?php 
                                          } ?>
                                                 <?php if($Key['percentageComplete'] == 1){ ?>
                                          <option value="1" selected>1</option>
                                          <?php }else{ ?>
                                            <option value="1" >1</option>
                                          <?php 
                                          } ?>
                                          </select>
                                        </td> 
                                            <td >
                                                  <select class="form-control " id="Status<?php echo $TID;?>"  name="Status"  >
                        <option value="<?php echo $Key['Status']; ?>" ><?php echo $Key['Status']; ?></option>
                        <option value="Complete" >Complete</option>
                        
                            </select>
                                         </td>
                                 
                                           <td >
                                             
                                             <?php
                                          if ($Key['Status']=='Complete'){
?>
                                           <button disabled  type="submit" class="btn btn-primary btn-xs updatebtn" id="btn.<?php echo $TID;?>" >Done</button>
                                           <?php
                                          }else{
                                           ?>
                                           <button   type="submit" class="btn btn-info btn-xs updatebtncomplete" id="btn.<?php echo $TID;?>" >Update</button>
                                          
                                            <?php
                                          }
                                          ?></td>
                                          
                                      
                         
                                      <!--   <a class="btn" href="#ModalProjectForm"><i class="fa fa-pencil-square-o"  style="font-size:25px;"></i> 
                                        <a class="btn" href="#"><i class="fa fa-trash" aria-hidden="true" style="font-size:25px;"></i> -->
                                    
                                    </tr>
<?php
}else{
?>

                                    <tr>
                                     <td ><?php echo $Key['ArtCode']; ?> </td>
                                      <td ><?php echo $Key['ArtSize']; ?> </td>
                                        <td ><?php echo $Key['VendorName']; ?> 
                                       <input name="ArtCode" id="ArtCode<?php echo $TID;?>" class="form-control" value="<?php echo $Key['ArtCode'];?>" type="text" hidden>
                                        <input name="ArtSize" id="ArtSize<?php echo $TID;?>" class="form-control" value="<?php echo $Key['ArtSize'];?>" type="text" hidden>
                                      </td>
                                     
                                          
                                        <td > <?php echo $Key['Name']; ?></td>
                                           <td > <?php echo $Key['Type']; ?></td>
                                          <td >
                                          <?php
                                          if ($Key['RDate']){
?>
 <input name="Date" id="Date<?php echo $TID;?>" class="form-control" value="<?php echo $ReceivedDate;?>" type="Date">
<?php
                                          }else{
                                           ?>
                                            <input name="Date" id="Date<?php echo $TID;?>" class="form-control"  type="Date">
                                            <?php
                                          }
                                          ?>
                                          </td>
                                            <td >
                                          <?php
                                          if ($Key['ProcessEndDate']){
?>
 <input name="Date" id="ProcessEndDate<?php echo $TID;?>" class="form-control" value="<?php echo $PENDDate;?>" type="Date">
<?php
                                          }else{
                                           ?>
                                            <input name="Date" id="ProcessEndDate<?php echo $TID;?>" class="form-control"  type="Date">
                                            <?php
                                          }
                                          ?>
                                          </td>
                                           <td >
                                          <input name="Date" value="<?php echo $Key['NoOfBalls']; ?>" id="Balls<?php echo $TID;?>" class="form-control" type="numeric"></td>
                                            <td >
                                              <?php echo $Key['rootcasue']; ?></td>
                                           <td > <?php echo $Key['action']; ?></td>
                                           <td> 
                                            <select name="percentageComplete"  id="percentageComplete<?php echo $TID;?>" class="form-control" >
                                            <?php if($Key['percentageComplete'] == 0 || $Key['percentageComplete'] == null){ ?>
                                          <option value="0" selected>0</option>
                                          <?php }else{ ?>
                                            <option value="0">0</option>
                                          <?php 
                                          } ?>
                                           <?php if($Key['percentageComplete'] == 0.1){ ?>
                                          <option value="0.1" selected>0.1</option>
                                          <?php }else{ ?>
                                            <option value="0.1" >0.1</option>
                                          <?php 
                                          } ?>
                                                 <?php if($Key['percentageComplete'] == 0.2){ ?>
                                          <option value="0.2" selected>0.2</option>
                                          <?php }else{ ?>
                                            <option value="0.2" >0.2</option>
                                          <?php 
                                          } ?>
                                                 <?php if($Key['percentageComplete'] == 0.3){ ?>
                                          <option value="0.3" selected>0.3</option>
                                          <?php }else{ ?>
                                            <option value="0.3" >0.3</option>
                                          <?php 
                                          } ?>
                                                 <?php if($Key['percentageComplete'] == 0.4){ ?>
                                          <option value="0.4" selected>0.4</option>
                                          <?php }else{ ?>
                                            <option value="0.4" >0.4</option>
                                          <?php 
                                          } ?>
                                                 <?php if($Key['percentageComplete'] == 0.5){ ?>
                                          <option value="0.5" selected>0.5</option>
                                          <?php }else{ ?>
                                            <option value="0.5" >0.5</option>
                                          <?php 
                                          } ?>
                                                 <?php if($Key['percentageComplete'] == 0.6){ ?>
                                          <option value="0.6" selected>0.6</option>
                                          <?php }else{ ?>
                                            <option value="0.6" >0.6</option>
                                          <?php 
                                          } ?>
                                                 <?php if($Key['percentageComplete'] == 0.7){ ?>
                                          <option value="0.7" selected>0.7</option>
                                          <?php }else{ ?>
                                            <option value="0.7" >0.7</option>
                                          <?php 
                                          } ?>
                                                 <?php if($Key['percentageComplete'] == 0.8){ ?>
                                          <option value="0.8" selected>0.8</option>
                                          <?php }else{ ?>
                                            <option value="0.8" >0.8</option>
                                          <?php 
                                          } ?>
                                                 <?php if($Key['percentageComplete'] == 0.9){ ?>
                                          <option value="0.9" selected>0.9</option>
                                          <?php }else{ ?>
                                            <option value="0.9" >0.9</option>
                                          <?php 
                                          } ?>
                                                 <?php if($Key['percentageComplete'] == 1){ ?>
                                          <option value="1" selected>1</option>
                                          <?php }else{ ?>
                                            <option value="1" >1</option>
                                          <?php 
                                          } ?>
                                          </select>
                                        </td>
                                            <td >
                                                  <select class="form-control " id="Status<?php echo $TID;?>"  name="Status"  >
                        <option value="<?php echo $Key['Status']; ?>" ><?php echo $Key['Status']; ?></option>
                        <option value="Complete" >Complete</option>
                        
                            </select>
                                         </td>
                                 
                                           <td >
                                             
                                             <?php
                                          if ($Key['Status']=='Complete'){
?>
                                           <button disabled  type="submit" class="btn btn-primary btn-xs updatebtn" id="btn.<?php echo $TID;?>" >Done</button>
                                           <?php
                                          }else{
                                           ?>
                                           <button   type="submit" class="btn btn-info btn-xs updatebtn" id="btn.<?php echo $TID;?>" >Update</button>
                                          
                                            <?php
                                          }
                                          ?></td>
                                          
                                      
                         
                                      <!--   <a class="btn" href="#ModalProjectForm"><i class="fa fa-pencil-square-o"  style="font-size:25px;"></i> 
                                        <a class="btn" href="#"><i class="fa fa-trash" aria-hidden="true" style="font-size:25px;"></i> -->
                                    
                                    </tr>
                                    <?php
}
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
                             

  

<?php
if ($this->session->userdata('userStus')==1) {

$Month=date('m');
$Year=date('Y');
$Day=date('d');
$CurrentDate=$Year.'-'.$Month.'-'.$Day;
  
$this->load->View('Adminheader');
    ?>

<body>

<?php
$this->load->View('menu');
    ?>

   
    <div id="right-panel" class="right-panel">

    <?php
$this->load->View('Setting');



    ?>


   
     
<form  class="form-inline" action="<?php echo base_url('prdData/GetprdData'); ?>" method="POST">

<div class="col-md-3">
Start Date:
<input type="Date" name="Sdate" required="required" class="form-control"  value="<?php Echo $CurrentDate;?>"  >
 </div>
<div class="col-md-3">
End Date:
<input type="Date"  name="Edate"  required="required" class="form-control" value="<?php Echo $CurrentDate;?>" >
</div>
<div class="col-md-3">
  Select Product:
<select  class="form-control"  name="Process"  required="required">    
 <option value="4">All</option>               
        <option value="1">Airless Mini Ball</option>      
        <option value="2">Thermo Bonded Ball</option>
              <option value="3">Machine Stitch Ball</option>
      </select>
</div>
                            <div class="col-md-2">
      <button type="submit" id="submit" name="submit" class="btn btn-primary " ><i class=" fa fa-search"></i> Search</button>
                                       
                                </div>
                        
                        </form>

     <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Airless Mini Ball Production </strong>
                            </div>
                            <div class="card-body" class="table-responsive"> 
                                <table  id="table" class="display responsive nowrap" style="width: 100%;">
<thead class="thead-dark">
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
                                       
<tr style="background-color: #282828; color: #fff;">
      <Td style="text-align: left; ; ">Factory Code</Td>

    <Td style=" text-align: center; " >Today Efficiency</Td>
     <Td style=" text-align: center; " >Monthly Efficiency</Td>
      <Td style=" text-align: center; " >Target Efficiency SS19 </Td>
       <Td style="text-align: center; " > Variance </td>
  <!--  <th style="text-align: center;" >Efficency</th> -->
  
  </thead>
<tbody >
    
      
<style type="text/css">
    .chkbg{
        
         color: #3399ff;
    }
    .MinthlyBg{
        color:  #15a0b7;
    }
    .targetBg{
        color: #0b3160;
    }
    .RFTbg{
        color: red;
    }
</style>


   
 


 </tr>
   <?php




// $array = array($FQEfficency2,$FQEfficency3,$FQEfficency4,$MSFinalEffic,$AMbFinalEffic);
 
// //Calculate the average and round it up.
// $average = ceil( array_sum($array) / count($array) );
   ?>

  
  
  
   

 
</tr>

</tbody>
  </table>
      
</body>
 
<?php
$this->load->View('AdminFooter');
    ?>
     
<script>
  $(document).ready( function () {
    $('#table1').DataTable(
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
            {
                extend: 'print',
                messageTop: function () {
                    printCounter++;
 
                    if ( printCounter === 1 ) {
                        return 'This is the first time you have printed this document.';
                    }
                    else {
                        return 'You have printed this document '+printCounter+' times';
                    }
                },
                messageBottom: null
            }
        ],
      "ordering":true,
      "pageLength":10,
      "searching":true,
      "LengthChange":true,
      "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},
    
    }
      );
} );
</script>
   </html>
<?php

}else{
    redirect('Welcome/index');
}
?>






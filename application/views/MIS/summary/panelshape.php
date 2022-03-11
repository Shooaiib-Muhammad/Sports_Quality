<center>
 <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 65%;margin-top:30px; ">
  <thead class="bg-primary-200 text-light" style="color: #fff;"  >
    <th colspan="6" style="text-align: center;">Pannel Shape Details </th>
</thead>
 <tr style="font-weight: bold; background-color:#9fbd99;"> 
<td>Factory Code</td>
<td>Size</td>
<td > Material</td>
<td>Shape</td>

  </tr>
  <?php



foreach($Data5 as $Key){
 
 ?>
  <tr>
 <td><?php Echo $Key['FactoryCode'];?></td>
  <td><?php Echo $Key['Type'];?></td>
  <td><?php Echo $Key['ShapeName'];?></td>
 <td><?php Echo $Key['MatName'];?></td>
 

  </tr>
 <?php
}
 
 ?>
  </center>
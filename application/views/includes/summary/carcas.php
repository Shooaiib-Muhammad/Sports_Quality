
<center>
 <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 65%;  ">
  <thead style="background-color: #282828; color: #fff;"  >
    <th colspan="6" style="text-align: center;">Carcas Details </th>
</thead>
 <tr style="font-weight: bold; background-color:#9fbd99;"> 
<td>Factory Code</td>
<td>Shape</td>
<td>Material</td>
  </tr>
  <?php

foreach($Data2 as $Key){
 
 ?>
  <tr>
 <td><?php Echo $Key['FactoryCode'];?></td>
 <td><?php Echo $Key['MatName'];?></td>
 <td><?php Echo $Key['ShapeName'];?></td>

  </tr>
 <?php
}
 
 ?>
  </center>

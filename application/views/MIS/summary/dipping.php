<center>
 <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 65%;margin-top:30px;">
  <thead class="bg-primary-200 text-light" style="color: #fff;"  >
    <th colspan="6" style="text-align: center;">Dipping Details </th>
</thead>
 <tr style="font-weight: bold; background-color:#9fbd99;"> 
<td>Factory Code</td>
<td>Size</td>
<td > Material</td>
  </tr>

  <?php

foreach($Data3 as $Key){
 
 ?>
  <tr>
 <td><?php Echo $Key['VendorName'];?></td>
 <td><?php Echo $Key['Size'];?></td>
 <td><?php Echo $Key['MaterialName'];?></td>

  </tr>
 <?php
}
 
 ?>
  </center>
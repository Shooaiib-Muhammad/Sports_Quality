<center>
 <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 65%; margin-top:30px; ">
  <thead style="background-color: #282828; color: #fff;"  >
    <th colspan="6" style="text-align: center;">Assembling Details  )</th>
</thead>
 <tr style="font-weight: bold; background-color:#9fbd99;"> 
<td>Factory Code</td>
<td>Size</td>
<td>ArtCode</td>
  </tr>
  <?php
foreach($Data4 as $Key){
 ?>
  <tr>
 <td><?php Echo $Key['FactoryCode'];?></td>
 <td><?php Echo $Key['Size'];?></td>
 <td><?php Echo $Key['ArtCode'];?></td> 

  </tr>
 <?php
}
 
 ?>
  </center>
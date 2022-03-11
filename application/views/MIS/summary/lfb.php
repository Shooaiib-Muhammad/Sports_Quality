<center>
 <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="width: 65%; margin-top:30px;">
  <thead class="bg-primary-200 text-light" style="color: #fff;"  >
    <th colspan="6" style="text-align: center;">LFB Details </th>
</thead>
 <tr style="font-weight: bold; background-color:#9fbd99;"> 
<td>Factory Code</td>
<td>Article Code</td>
<td>Model Name</td>

<td > Size</td>


  </tr>

  <?php



foreach($Data7 as $Key){
 
 ?>
  <tr>
 <td><?php Echo $Key['FactoryCode'];?></td>
 <td><?php Echo $Key['ArtCode'];?></td>
 <td><?php Echo $Key['ModelName'];?></td>
 <td><?php Echo $Key['ArtSize'];?></td> -->
 

  </tr>
 <?php
}
 
 ?>
  </center>
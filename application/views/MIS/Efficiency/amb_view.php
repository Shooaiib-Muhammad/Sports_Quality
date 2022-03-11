<table class="table table-hover " style="border: 1px gray solid; width:100%; ">
    <thead class="bg-primary-200 text-light" style="color: #fffbfb;" >
      <th style="text-align: center">Airless Mini Ball Finale (B34006)</th>
  </thead>
</table>

<div class="table-responsive">
  <table class="table">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">Strength</th>
      <th scope="col">Attendant Mints</th>
      <th scope="col">Pass *SAM</th>
      <th scope="col">Forming Passed</th>
      <th scope="col">Eficiency</th>
  
  
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $d) {?>
    <tr>
      <th scope="row"><?php echo $d['Strength'] ?></th>
      <td><?php echo $d['Mints'] ?></td>
      <td><?php echo $d['PassQty'] ?></td>
      <td><?php echo $d['PassQty'] ?></td>
      <td><?php echo $d['Produced']/$d['Attendance']*100;?></td>
    </tr>
    <?php } ?>
 
  </tbody>
  </table>
</div>
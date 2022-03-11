<?php include_once('../panel/config.php');

if(isset($_POST['Datta'])){

    $DAttaa=$_POST['Datta'];
    if($DAttaa==11){
        ?>

<select class="form-control show-tick" data-live-search="true" name="SelectBox" style="width: 100%;" onchange="GotCombox()" style="width: 100%">
<option value="11"  required="required">All</option>
</select>
        <?php

    }
    if($DAttaa==22){
        ?>
        <span class="label-input100">Select Article</span>
        <input type="text" class="input101" list="CID" id="Material222" required="required" name="ArtCode"  oninput="CallSize()"  style="background-color: #fff ; color: #202020; text-align: center;" onblur="CallClient()" />
      <!-- <input type="number"  id="one"  name="one" onblur="CallCombox2()"    style="border: 1px solid black; width:70%;  border-radius:5px; height: 30px;" /> -->
      <datalist name="ArtCode" id="CID" required="required"  >
      <?php
      
      
       $POQuery="SELECT        tbl_Pro_Article.ClientID, tbl_Pro_Article.ModelID, tbl_Pro_Article.ArtID, tbl_Pro_Article.ArtCode, tbl_Pro_Article.Target, tbl_Pro_Article.SAMForming, 
                               tbl_Pro_Article.SAMPacking, tbl_Pro_Article.TargetPacking, tbl_Pro_Model.ModelNo, tbl_Pro_Model.ModelName, tbl_Pro_Model.FactoryCode, 
                               tbl_Pro_Client.UnitID
      FROM            tbl_Pro_Article, tbl_Pro_Model, tbl_Pro_Client
      WHERE        tbl_Pro_Article.ClientID = tbl_Pro_Model.ClientID AND tbl_Pro_Article.ModelID = tbl_Pro_Model.ModelID AND tbl_Pro_Article.ClientID = tbl_Pro_Client.ClientID AND 
                               (tbl_Pro_Model.FactoryCode = 'B34005') AND (tbl_Pro_Client.UnitID = 1)";
      $ExecuteP=sqlsrv_query($conn,$POQuery);     
      while($Data=sqlsrv_fetch_array($ExecuteP)){
          $ArtID=$Data['ArtID'];
          $ArtCode=$Data['ArtCode'];
           $ModelID=$Data['ModelID'];
           $ClientID=$Data['ClientID'];
      echo '<option >'.$ArtCode.'</option>';
      } 
      ?>
      </datalist>
      <br>
      <!-- <span class="label-input100">Select Size </span>
      <select class="form-control show-tick" data-live-search="true" name="GetSize" id="GetSize" style="width: 60%;" >



     
     
   </select> -->
 
          <span class="label-input100">Select Size</span>
<select  class="form-control" name="ArtSize"    style="width:50%;"  required="required" id="GetSize"> 

      </select>
                                      
                               </div>
    <?php
}
if($DAttaa==33){
    
   $sql= "SELECT        HourID, HourName
   FROM            dbo.Tbl_PC_MS_Hours"; 

 $do=sqlsrv_query($conn,$sql); 
//echo '<option value="">Select User Name </option>';
?>
<label for="byLines">Start Hour</label>
<select class="form-control show-tick" data-live-search="true" name="Hstart" style="width: 100%;"  style="width: 100%">
 <?php
    while ($row=sqlsrv_fetch_array($do)) {
$ID=$row['HourID'];
$HourName=$row['HourName'];
       ?>  
       <option  value="<?php Echo $ID;?>"><?php Echo $HourName;?></option>
       <?php
    
    }
    ?>
    </select>
<?php
   $sql= "SELECT        HourID, HourName
   FROM            dbo.Tbl_PC_MS_Hours"; 

 $do=sqlsrv_query($conn,$sql); 
//echo '<option value="">Select User Name </option>';
?>
<label for="byLines">End Hour</label>
<select class="form-control show-tick" data-live-search="true" name="HEnd" style="width: 100%;"  style="width: 100%">


<?php

    while ($row=sqlsrv_fetch_array($do)) {
$ID=$row['HourID'];
$HourName=$row['HourName'];
       ?>  
       <option  value="<?php Echo $ID;?>"><?php Echo $HourName;?></option>
       <?php
      
    }
    ?>
    </select>
<?php
    
}

if($DAttaa==44){
    
    $sql= "SELECT        LineID, LineName
    FROM            dbo.tbl_PC_AMB_Line"; 
 
  $do=sqlsrv_query($conn,$sql); 
 //echo '<option value="">Select User Name </option>';
 ?>
 <label for="byLines">Start Line</label>
 <select class="form-control show-tick" data-live-search="true" name="SLine" style="width: 100%;" onchange="GotCombox()" style="width: 100%">
 
 
 <?php
 
     while ($row=sqlsrv_fetch_array($do)) {
 $ID=$row['LineID'];
 $HourName=$row['LineName'];
        ?>  
        <option  value="<?php Echo $ID;?>"><?php Echo $HourName;?></option>
        <?php
       
     }
     ?>
     </select>
 <?php
    $sql= "SELECT        LineID, LineName
    FROM            dbo.tbl_PC_AMB_Line"; 
 
  $do=sqlsrv_query($conn,$sql); 
 //echo '<option value="">Select User Name </option>';
 ?>
  <label for="byLines">End Line</label>
 <select class="form-control show-tick" data-live-search="true" name="ELine" style="width: 100%;" onchange="GotCombox()" style="width: 100%">
 
 
<?php
 
     while ($row=sqlsrv_fetch_array($do)) {
 $ID=$row['LineID'];
 $HourName=$row['LineName'];
        ?>  
        <option  value="<?php Echo $ID;?>"><?php Echo $HourName;?></option>
        <?php
       
     }
     ?>
     </select>
 <?php
     
 }


 if($DAttaa==55){
   
    $sql= "SELECT        LineID, LineName
    FROM            dbo.tbl_PC_AMB_Line"; 
 
  $do=sqlsrv_query($conn,$sql); 
 //echo '<option value="">Select User Name </option>';
 ?>
 <label for="byLines">Start Line</label>
 <select class="form-control show-tick" data-live-search="true" name="SLine" style="width: 100%;" onchange="GotCombox()" style="width: 100%">
 
 
 <?php
 
     while ($row=sqlsrv_fetch_array($do)) {
 $ID=$row['LineID'];
 $HourName=$row['LineName'];
        ?>  
        <option  value="<?php Echo $ID;?>"><?php Echo $HourName;?></option>
        <?php
       
     }
     ?>
     </select>
 <?php
    $sql= "SELECT        LineID, LineName
    FROM            dbo.tbl_PC_AMB_Line"; 
 
  $do=sqlsrv_query($conn,$sql); 
 //echo '<option value="">Select User Name </option>';
 ?>
  <label for="byLines">End Line</label>
 <select class="form-control show-tick" data-live-search="true" name="ELine" style="width: 100%;" onchange="GotCombox()" style="width: 100%">
 
 
<?php
 
     while ($row=sqlsrv_fetch_array($do)) {
 $ID=$row['LineID'];
 $HourName=$row['LineName'];
        ?>  
        <option  value="<?php Echo $ID;?>"><?php Echo $HourName;?></option>
        <?php
       
     }
     ?>
     </select>
    
     <span class="label-input100">Select Article</span>
        <input type="text" class="input101" list="CID" id="Material222" required="required" name="ArtCode"  oninput="CallSize()"  style="background-color: #fff ; color: #202020; text-align: center;" onblur="CallClient()" />
      <!-- <input type="number"  id="one"  name="one" onblur="CallCombox2()"    style="border: 1px solid black; width:70%;  border-radius:5px; height: 30px;" /> -->
      <datalist name="ArtCode" id="CID" required="required"  >
      <?php
      
      
       $POQuery="SELECT        tbl_Pro_Article.ClientID, tbl_Pro_Article.ModelID, tbl_Pro_Article.ArtID, tbl_Pro_Article.ArtCode, tbl_Pro_Article.Target, tbl_Pro_Article.SAMForming, 
                               tbl_Pro_Article.SAMPacking, tbl_Pro_Article.TargetPacking, tbl_Pro_Model.ModelNo, tbl_Pro_Model.ModelName, tbl_Pro_Model.FactoryCode, 
                               tbl_Pro_Client.UnitID
      FROM            tbl_Pro_Article, tbl_Pro_Model, tbl_Pro_Client
      WHERE        tbl_Pro_Article.ClientID = tbl_Pro_Model.ClientID AND tbl_Pro_Article.ModelID = tbl_Pro_Model.ModelID AND tbl_Pro_Article.ClientID = tbl_Pro_Client.ClientID AND 
                               (tbl_Pro_Model.FactoryCode = 'B34005') AND (tbl_Pro_Client.UnitID = 1)";
      $ExecuteP=sqlsrv_query($conn,$POQuery);     
      while($Data=sqlsrv_fetch_array($ExecuteP)){
          $ArtID=$Data['ArtID'];
          $ArtCode=$Data['ArtCode'];
           $ModelID=$Data['ModelID'];
           $ClientID=$Data['ClientID'];
      echo '<option >'.$ArtCode.'</option>';
      } 
      ?>
      </datalist>
      <br>
      <!-- <span class="label-input100">Select Size </span>
      <select class="form-control show-tick" data-live-search="true" name="GetSize" id="GetSize" style="width: 60%;" >



     
     
   </select> -->
 
          <span class="label-input100">Select Size</span>
<select  class="form-control" name="ArtSize"    style="width:50%;"  required="required" id="GetSize"> 

      </select>
                                      
                               </div>

  
 
   

 <?php
     
 }

}



?>
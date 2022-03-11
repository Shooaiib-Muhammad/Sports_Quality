<Style>
    .center{
        text-align: center;
    }
</style>
<h2 class="bg-primary-200 text-light text-white p-2 text-center">LFB Assembling ( <?php format($start_date1); echo " To "; format($end_date1) ?> )</h2>
<table class="table table-hover table-bordered table-responsive" id="forming-table" >
    <thead class="bg-primary-200 text-light">
    <tr>
        <th>Date</th>
        <th class="center" >MP No</th>
        <th class="center">Article code</th>
        <th class="center">SIze</th>
        <th class="center">Total</th>

        <th class="center">Pass</th>
        <th class="center">Fail</th>
        <th class="center">mat. Fault</th>
        <th class="center"> Smearing</th>
       
        <th class="center">Mis Print</th>
       
        <th class="center">Ink Spread</th>
       
        <th class="center">Printing Spots</th>
      
        <th class="center">Lac. Missing</th>
       
        <th class="center">St. OutPanels</th>
        
        <th class="center">D-c. Panels</th>
       
        <th class="center">C. Panels</th>
      
        <th class="center"> Imp. Emb-</th>
      

        <th class="center">Mis Allignment</th>
       
        <th class="center"> St. Cut</th>
       
        <th class="center"> Dam.</th>
      
        <th class="center">Burn Panel</th>
       
        <th class="center"> Sp. Panels</th>
   

    </tr>
    </thead>
    <tbody>
    <?php 
     $TotalChecked=0;
     $TotalPass=0;
     $Fail=0;
     $materialFault=0;
     $Smearing=0;
     $MisPrint=0;
     $InkSpread=0;
     $PrintingSpots=0;
     $LacquerMissing=0;
     $SettingOutPanels=0;
     $DiscolorPanels=0;
     $CoveringPanels=0;
     $ImproperEmbossing=0;
     $MisAllignment=0;
     $StraightCut=0;
     $DamagePanels=0;
     $BurningPanels=0;
     $SparkingPanels=0;
    foreach($data as $d){
        ; ?>
        <tr>
            <td><?php format($d['DateName']); ?></td>
            <td> <?php echo $d['MPID']; ?></td>
            <td><?php  echo $d['ArtCode']; ?></td>
            <td><?php echo $d['ArtSIze']; ?></td>
            <td><?php r($d['TotalChecked']); ?></td>
            <td><?php r($d['TotalPass']); ?></td>
            <td><?php r($d['Fail']); ?></td>
            <td><?php r($d['materialFault']); ?></td>
            <td><?php r($d['Smearing']); ?></td>
            <td><?php r($d['MisPrint']); ?></td>
            <td><?php r($d['InkSpread']); ?></td>
            <td><?php r($d['PrintingSpots']); ?></td>
            <td><?php r($d['LacquerMissing']); ?></td>
            <td><?php r($d['SettingOutPanels']); ?></td>
            <td><?php r($d['DiscolorPanels']); ?></td>
            <td><?php r($d['CoveringPanels']); ?></td>
            <td><?php r($d['ImproperEmbossing']); ?></td>
            <td><?php r($d['MisAllignment']); ?></td>
            <td><?php r($d['StraightCut']); ?></td>
            <td><?php r($d['DamagePanels']); ?></td>
            <td><?php r($d['BurningPanels']); ?></td>
            <td><?php r($d['SparkingPanels']); ?></td>
        </tr>
    <?php
   $TotalChecked=$d['TotalChecked']+$TotalChecked;
   $TotalPass=$d['TotalPass']+$TotalPass;
   $Fail=$d['Fail']+$Fail;
   $materialFault=$d['materialFault']+$materialFault;
   $Smearing=$d['Smearing']+$Smearing;
   $MisPrint=$d['MisPrint']+$MisPrint;
   $InkSpread=$d['InkSpread']+$InkSpread;
   $PrintingSpots=$d['PrintingSpots']+$PrintingSpots;
   $LacquerMissing=$d['LacquerMissing']+$LacquerMissing;
   $SettingOutPanels=$d['SettingOutPanels']+$SettingOutPanels;
   $DiscolorPanels=$d['DiscolorPanels']+$DiscolorPanels;
   $CoveringPanels=$d['CoveringPanels']+$CoveringPanels;
   $ImproperEmbossing=$d['ImproperEmbossing']+$ImproperEmbossing;
   $MisAllignment=$d['MisAllignment']+$MisAllignment;
   $StraightCut=$d['StraightCut']+$StraightCut;
   $DamagePanels=$d['DamagePanels']+$DamagePanels;
   $BurningPanels=$d['BurningPanels']+$BurningPanels;
   $SparkingPanels=$d['SparkingPanels']+$SparkingPanels;
    };

    ?>
      <tr>
    <td></td>
            <td> </td>
            <td></td>
            <td>Total :</td>
            <td><?php r($TotalChecked); ?></td>
            <td><?php r($TotalPass); ?></td>
            <td><?php r($Fail); ?></td>
            <td><?php r($materialFault); ?></td>
            <td><?php r($Smearing); ?></td>
            <td><?php r($MisPrint); ?></td>
            <td><?php r($InkSpread); ?></td>
            <td><?php r($PrintingSpots); ?></td>
            <td><?php r($LacquerMissing); ?></td>
            <td><?php r($SettingOutPanels); ?></td>
            <td><?php r($DiscolorPanels); ?></td>
            <td><?php r($CoveringPanels); ?></td>
            <td><?php r($ImproperEmbossing); ?></td>
            <td><?php r($MisAllignment); ?></td>
            <td><?php r($StraightCut); ?></td>
            <td><?php r($DamagePanels); ?></td>
            <td><?php r($BurningPanels); ?></td>
            <td><?php r($SparkingPanels); ?></td>
            </tr>
    </tbody>
</table>



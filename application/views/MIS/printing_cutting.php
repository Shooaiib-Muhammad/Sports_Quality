

                      <!-- Start here with columns -->

<!doctype html>
<?php
if ($this->session->userdata('userStus')==1) {
?>
<html class="no-js" lang="en">
<!--<![endif]-->

<script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
      <script type="text/javascript">
          /* Activate smart panels */
          $('#js-page-content').smartPanel();
      </script>

<script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
      

<link href="<?php link_file('assets/qa_assets/main.css')?>" rel="stylesheet">
<Style>
    .center{
        text-align: center;
    }
</style>
<h2 class="bg-primary-200 text-light text-white p-2 text-center">After Printing( <?php format($start_date1); echo " To "; format($end_date1) ?> )</h2>
<table class="table table-hover table-bordered table-responsive" id="forming-table" >
    <thead>
    <tr class="bg-primary-200 text-light">
        <th>Date</th>
        <th class="center" >MP No</th>
        <th class="center">Article</th>
        <th class="center">Size</th>
        <th class="center">Sheet Type</th>
        <th class="center">Check</th>

        <th class="center">Pass</th>
        <th class="center">Fail</th>
        <th class="center"> Mat. Fault</th>
        <th class="center">Same</th>
        <th class="center">Mat. Joint</th>
        <th class="center">Mis Print</th>
        <th class="center">Ink Spread</th>
        <th class="center">Printing Spots</th>
        <th class="center">Lacquer Missing</th>
        <th class="center">Setting Out </th>
        <th class="center"> Discolor Panels</th>
        <th class="center">Covering Panels</th>
        <th class="center"> Improper Embossing </th>
        <th class="center"> Mis Allignment</th>
        <th class="center">Straight Cut</th>
        <th class="center"> Damage Panels</th>
        <th class="center">Burning Panels</th>
        <th class="center"> Sparking  Panels</th>
        <th class="center"> Dust</th>

    </tr>
    </thead>
    <tbody>
    <?php 
  $CheckSheets1=0;
  $PrintingPass=0;
  $FailSheets=0;
  $materialFault=0;
  $Smearing=0;
  $MaterialJoint=0;
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
  $Dust=0;
    foreach($data as $d){
        ; ?>
        <tr>
            <td><?php format($d['DateName']); ?></td>
            <td> <?php echo $d['MPID']; ?></td>
            <td><?php echo $d['ArtCode']; ?></td>
            <td><?php echo $d['ArtSize']; ?></td>
            <td><?php echo $d['SheetType']; ?></td>
            <td><?php  r($d['CheckSheets']); ?></td>
            <td><?php r($d['PrintingPass']); ?></td>
            <td><?php r($d['FailSheets']); ?></td>
            <td><?php r($d['materialFault']); ?></td>
            <td><?php r($d['Smearing']); ?></td>
            <td><?php r($d['MaterialJoint']); ?></td>
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
            <td><?php r($d['Dust']); ?></td>
        </tr>
        <?php
        $CheckSheets1=$d['CheckSheets']+$CheckSheets1;

$PrintingPass=$d['PrintingPass']+$PrintingPass;
$FailSheets=$d['FailSheets']+$FailSheets;
$materialFault=$d['materialFault']+$materialFault;
$Smearing=$d['Smearing']+$Smearing;
$MaterialJoint=$d['MaterialJoint']+$MaterialJoint;
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
$Dust=$d['Dust']+$Dust;
    };

    ?>
      <tr style="color:black;">
    <td></td>
    <td> </td>
    <td></td>
    <td></td>
    <td>Total:</td>
    <td><?php  r($CheckSheets1); ?></td>
    <td><?php r($PrintingPass); ?></td>
    <td><?php r($FailSheets); ?></td>
    <td><?php r($materialFault); ?></td>
    <td><?php r($Smearing); ?></td>
    <td><?php r($MaterialJoint); ?></td>
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
    <td><?php r($Dust); ?></td>
    </tr>
    </tbody>
</table>
<h2 class="bg-primary-200 text-light text-white p-2 text-center">After HF Cutting( <?php format($start_date1); echo " To "; format($end_date1) ?> )</h2>
<table class="table table-hover table-bordered table-responsive" id="FH-table" >
    <thead>
    <tr class="bg-primary-200 text-light">
        <th>Date</th>
        <th class="center" >MP No</th>
        <th class="center">Article</th>
        <th class="center">Size</th>
        <th class="center">Sheet Type</th>
        <th class="center">Check</th>

        <th class="center">Pass</th>
        <th class="center">Fail</th>
        <th class="center"> Mat. Fault</th>
        <th class="center">Same</th>
        <th class="center">Mat. Joint</th>
        <th class="center">Mis Print</th>
        <th class="center">Ink Spread</th>
        <th class="center">Printing Spots</th>
        <th class="center">Lacquer Missing</th>
        <th class="center">Setting Out </th>
        <th class="center"> Discolor Panels</th>
        <th class="center">Covering Panels</th>
        <th class="center"> Improper Embossing </th>
        <th class="center"> Mis Allignment</th>
        <th class="center">Straight Cut</th>
        <th class="center"> Damage Panels</th>
        <th class="center">Burning Panels</th>
        <th class="center"> Sparking  Panels</th>
        <th class="center"> Dust</th>

    </tr>
    </thead>
    <tbody>
    <?php 
  $CheckSheets=0;
  $PrintingPass=0;
  $FailSheets=0;
  $materialFault=0;
  $Smearing=0;
  $MaterialJoint=0;
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
  $Dust=0;
    foreach($data1 as $d){
        ; ?>
        <tr>
            <td><?php format($d['DateName']); ?></td>
            <td> <?php echo $d['MPID']; ?></td>
            <td><?php echo $d['ArtCode']; ?></td>
            <td><?php echo $d['ArtSize']; ?></td>
            <td><?php echo $d['SheetType']; ?></td>
            <td><?php  r($d['CheckSheets']); ?></td>
            <td><?php r($d['PrintingPass']); ?></td>
            <td><?php r($d['FailSheets']); ?></td>
            <td><?php r($d['materialFault']); ?></td>
            <td><?php r($d['Smearing']); ?></td>
            <td><?php r($d['MaterialJoint']); ?></td>
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
            <td><?php r($d['Dust']); ?></td>
        </tr>
    <?php
$CheckSheets=$d['CheckSheets']+$CheckSheets;
$PrintingPass=$d['PrintingPass']+$PrintingPass;
$FailSheets=$d['FailSheets']+$FailSheets;
$materialFault=$d['materialFault']+$materialFault;
$Smearing=$d['Smearing']+$Smearing;
$MaterialJoint=$d['MaterialJoint']+$MaterialJoint;
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
$Dust=$d['Dust']+$Dust;
    };

    ?>
      <tr style="color:black;"> 
    <td></td>
    <td> </td>
    <td></td>
    <td></td>
    <td>Total:</td>
    <td><?php  r($CheckSheets1); ?></td>
    <td><?php r($PrintingPass); ?></td>
    <td><?php r($FailSheets); ?></td>
    <td><?php r($materialFault); ?></td>
    <td><?php r($Smearing); ?></td>
    <td><?php r($MaterialJoint); ?></td>
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
    <td><?php r($Dust); ?></td>
    </tr>
    </tbody>
</table>
<h2 class="bg-primary-200 text-light text-white p-2 text-center">PO Wise MP No Details</h2>
<table class="table table-hover table-bordered table-responsive" id="Po-table">
    <thead>
    <tr class="bg-primary-200 text-light">
            <th>MPNo</th>
             <th>Ticket No.</th>
            <th>PO Code</th>
            <th>Article </th>
            <th>Size </th>
            <td>Ticket Wise Plan Qty</td>
            <td>Plan Qty</td>
            <th>Check</th>
            <td>Pass</td>
            <th>Fail</th>
            <td>Type</td>
            

        </tr>
    </thead>
    <tbody>
        <?php foreach ($Record as $d) {; ?>
        <tr class="text-center">
            <td><?php Echo $d['MPID']; ?></td>
              <td><?php Echo $d['TID']; ?></td>
              <td><?php Echo $d['POCode']; ?></td>
                  <td><?php Echo $d['ArtCode']; ?></td>
                      <td><?php Echo $d['ArtSize']; ?></td>
                           <td><?php r($d['TicketPlanQty']); ?></td>
                          <td><?php Echo $d['PlanQty']; ?></td>
                              <td><?php Echo $d['CheckSheets']; ?></td>
                                  <td><?php Echo $d['PassSheets']; ?></td>
                                      <td><?php Echo $d['FailSheets']; ?></td>
                                          <td><?php Echo $d['printingType']; ?></td>
            
        </tr>
        <?php }; ?>
</tbody>
</table>
<?php
}
?>



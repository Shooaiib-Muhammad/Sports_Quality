<!doctype html>
<?php
if ($this->session->userdata('userStus')==1) {
?>
<html class="no-js" lang="en">
<!--<![endif]-->

<link href="<?php link_file('assets/qa_assets/main.css')?>" rel="stylesheet">
<Style>
    .center{
        text-align: center;
    }
</style>
<h2 class="bg-primary-200 text-light text-white p-2 text-center">LFB Sheet Sizing ( <?php
    format($start_date1); echo " To ";
    format($end_date1) ?> )</h2>
<table class="table table-hover table-bordered table-responsive" id="forming-table" >
    <thead>
    <tr class="bg-primary-200 text-light">
        <th>Date</th>
        <th class="center" >MPNO</th>
        <th class="center">Sheet Type</th>
        <th class="center">Factory Code</th>
        <th class="center">Article Code</th>
        <th class="center">Size</th>
        <th class="center">Check Sheets</th>
        <th class="center">Pass Sheet</th>
        <th class="center">Fail Sheet</th>
        <th class="center"> Dis Color</th>
        <th class="center">Thickness Variation</th>
        <th class="center">Material Joint</th>
        <th class="center">Holes In Foam</th>
        <th class="center">Tape Foam Joint</th>
        <th class="center">Film and Fom</th>
        <th class="center">M. Wrinkles</th>
        <th class="center">Indent</th>
        <th class="center"> Material Spot</th>
        <th class="center"> Material Demange</th>
        <th class="center"> Less More </th>
        <th class="center"> Cutting Edge</th>
        <th class="center"> Fim Poor Adhesis</th>
        <th class="center"> Wrinkles</th>
    </tr>
    </thead>
    <tbody>
    <?php 
  $CheckSheets=0;
  $PassSheets=0;
  $FailSheets=0;
  $Discolor=0;
  $Thicknessvariation=0;
  $MaterialJoint=0;
  $HolesInFoam=0;
  $TapeFoamJoint=0;
  $filmandfomdiff=0;
  $mwrinkles=0;
  $indent=0;
  $materialspot=0;
  $materialDemange=0;
  $lessmore=0;
  $CuttingEdge=0;
  $fimPoorAdhesis=0;
  $Wrinkles=0;
    foreach($data as $d){
        ; ?>
        <tr>
            <td><?php format($d['DateName']); ?></td>
            <td> <?php echo $d['MPNO']; ?></td>
            <td><?php  Echo $d['SheetType']; ?></td>
            <td><?php Echo $d['FactoryCode']; ?></td>
            <td><?php Echo $d['ArtCode']; ?></td>
            <td><?php Echo $d['ArtSize']; ?></td>
            <td><?php r($d['CheckSheets']); ?></td>
            <td><?php r($d['PassSheets']); ?></td>
            <td><?php r($d['FailSheets']); ?></td>
            <td><?php r($d['Discolor']); ?></td>
            <td><?php r($d['Thicknessvariation']); ?></td>
            <td><?php r($d['MaterialJoint']); ?></td>
            <td><?php r($d['HolesInFoam']); ?></td>
            <td><?php r($d['TapeFoamJoint']); ?></td>
            <td><?php r($d['filmandfomdiff']); ?></td>
            <td><?php r($d['mwrinkles']); ?></td>
            <td><?php r($d['indent']); ?></td>
            <td><?php r($d['materialspot']); ?></td>
            <td><?php r($d['materialDemange']); ?></td>
            <td><?php r($d['lessmore']); ?></td>
            <td><?php r($d['CuttingEdge']); ?></td>
            <td><?php r($d['fimPoorAdhesis']); ?></td>
            <td><?php r($d['Wrinkles']); ?></td>
        </tr>
    <?php
$CheckSheets=$d['CheckSheets']+$CheckSheets;
$PassSheets=$d['PassSheets']+$PassSheets;
$FailSheets=$d['FailSheets']+$FailSheets;
$Discolor=$d['Discolor']+$Discolor;
$Thicknessvariation=$d['Thicknessvariation']+$Thicknessvariation;
$MaterialJoint=$d['MaterialJoint']+$MaterialJoint;
$HolesInFoam=$d['HolesInFoam']+$HolesInFoam;
$TapeFoamJoint=$d['TapeFoamJoint']+$TapeFoamJoint;
$filmandfomdiff=$d['filmandfomdiff']+$filmandfomdiff;
$mwrinkles=$d['mwrinkles']+$mwrinkles;
$indent=$d['indent']+$indent;
$materialspot=$d['materialspot']+$materialspot;
$materialDemange=$d['materialDemange']+$materialDemange;
$lessmore=$d['lessmore']+$lessmore;
$CuttingEdge=$d['CuttingEdge']+$CuttingEdge;
$fimPoorAdhesis=$d['fimPoorAdhesis']+$fimPoorAdhesis;
$Wrinkles=$d['Wrinkles']+$Wrinkles;
    };

    ?><tr style="color:black;">
    <td></td>
    <td> </td>
    <td></td>
    <td></td>
    <td></td>
    <td>Total</td>
    <td><?php r($CheckSheets); ?></td>
    <td><?php r($PassSheets); ?></td>
    <td><?php r($FailSheets); ?></td>
    <td><?php r($Discolor); ?></td>
    <td><?php r($Thicknessvariation); ?></td>
    <td><?php r($MaterialJoint); ?></td>
    <td><?php r($HolesInFoam); ?></td>
    <td><?php r($TapeFoamJoint); ?></td>
    <td><?php r($filmandfomdiff); ?></td>
    <td><?php r($mwrinkles); ?></td>
    <td><?php r($indent); ?></td>
    <td><?php r($materialspot); ?></td>
    <td><?php r($materialDemange); ?></td>
    <td><?php r($lessmore); ?></td>
    <td><?php r($CuttingEdge); ?></td>
    <td><?php r($fimPoorAdhesis); ?></td>
    <td><?php r($Wrinkles); ?></td>
</tr>
    </tbody>
</table>
<?php
}
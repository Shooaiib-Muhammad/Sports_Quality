<?php
if (!$this->session->has_userdata('user_id')) {
    redirect('');
} else {
?>
 <div id="panel-1" class="panel">
                    <h2 class="bg-primary-200 text-light p-2 text-center">Hand Stitch Ball Final QC Summary
    (<?php format($start_date); echo " To "; format($end_date); ?>)</h2>
<table class="table table-bordered table-hover table-responsive table-striped w-100" id="forming-table">
    <thead class="bg-primary-200 text-light">

        <th>ArtCode</th>
        <th>Total Checked</th>
        <th>Pass</th>
        <th>Fail</th>
        <th>ZigZag</th>
        <th>Art Work</th>
        <th>UnStitched</th>
        <th>Loose Stitch</th>
        <th>Torn Stitch </th>
        <th>LPS</th>
        <th>Full Puncture</th>
        <th>Miss Panel</th>
        <th>Nozzle Move</th>
        <th>Needle Mark</th>
        <th>Maker Dirty</th>
        <th>Bladder Drop</th>
        <th>Latex Bladder</th>
        <th>Nozzle Move In Sala Bladder</th>
        <th>PUB ladder</th>
        <th>Lamination Problem</th>
        <th>DisColor</th>
        <th>ColorMark</th>
        <th>Cut Mark</th>
        <th>Thread Discolor</th>
        <th>Printing Crack</th>
        <th>Smearing</th>
        <th>SettingOut</th>
        <th>Fabric Impression</th>
        <th>Shade Difference</th>
        <th>Factory Fault Dirty</th>
        <th>Factory Fault Bladder Drop</th>
        <th>MatTorn</th>
        <th>JointProblem</th>
        <th>Lamination</th>
        <th>Dirty</th>
        <th>Puncture</th>
        <th>NozzelDrop</th>
        <th>Others</th>
    </thead>
    <tbody>
        <?php foreach($data as $d){
            ; ?>
        <tr>
            <td> <?php echo $d->ArtCode; ?></td>
            <td><?php r($d->TotalChecked); ?></td>
            <td><?php r($d->PassQty); ?></td>
            <td><?php r($d->FailQty); ?></td>
            <td><?php r($d->ZigZag); ?></td>
            <td><?php r($d->ArtWork); ?></td>
            <td><?php r($d->UnStitched); ?></td>
            <td><?php r($d->LooseStitch); ?></td>
            <td><?php r($d->TornStitch); ?></td>
            <td><?php r($d->LPS); ?></td>
            <td><?php r($d->FullPuncture); ?></td>
            <td><?php r($d->MissPanel); ?></td>
            <td><?php r($d->NozzleMove); ?></td>
            <td><?php r($d->NeedleMark); ?></td>
            <td><?php r($d->MakerDirty); ?></td>
            <td><?php r($d->BladderDrop); ?></td>
            <td><?php r($d->LatexBladder); ?></td>
            <td><?php r($d->NozzleMoveInSalaBladder); ?></td>
            <td><?php r($d->PUBladder); ?></td>
            <td><?php r($d->LaminationProb); ?></td>
            <td><?php r($d->DisColor); ?></td>
            <td><?php r($d->ColorMark); ?></td>
            <td><?php r($d->CutMark); ?></td>
            <td><?php r($d->ThreadDiscolor); ?></td>
            <td><?php r($d->PrintingCrack); ?></td>
            <td><?php r($d->Smearing); ?></td>
            <td><?php r($d->SettingOut); ?></td>
            <td><?php r($d->FabricImpression); ?></td>
            <td><?php r($d->ShadeDiff); ?></td>
            <td><?php r($d->FactoryFaultDirty); ?></td>
            <td><?php r($d->FactoryFaultBladderDrop); ?></td>
            <td><?php r($d->MatTorn); ?></td>
            <td><?php r($d->JointProblem); ?></td>
            <td><?php r($d->Lamination); ?></td>
            <td><?php r($d->Dirty); ?></td>
            <td><?php r($d->Puncture); ?></td>
            <td><?php r($d->NozzelDrop); ?></td>
            <td><?php r($d->Others); ?></td>
        </tr>


        <?php
        }; ?>
        <?php foreach($datasum as $d){
            ; ?>
        <tr style="color:black">
            <td>Total</td>

            <td><?php r($d->TotalChecked); ?></td>
            <td><?php r($d->PassQty); ?></td>
            <td><?php r($d->FailQty); ?></td>
            <td><?php r($d->ZigZag); ?></td>
            <td><?php r($d->ArtWork); ?></td>
            <td><?php r($d->UnStitched); ?></td>
            <td><?php r($d->LooseStitch); ?></td>
            <td><?php r($d->TornStitch); ?></td>
            <td><?php r($d->LPS); ?></td>
            <td><?php r($d->FullPuncture); ?></td>
            <td><?php r($d->MissPanel); ?></td>
            <td><?php r($d->NozzleMove); ?></td>
            <td><?php r($d->NeedleMark); ?></td>
            <td><?php r($d->MakerDirty); ?></td>
            <td><?php r($d->BladderDrop); ?></td>
            <td><?php r($d->LatexBladder); ?></td>
            <td><?php r($d->NozzleMoveInSalaBladder); ?></td>
            <td><?php r($d->PUBladder); ?></td>
            <td><?php r($d->LaminationProb); ?></td>
            <td><?php r($d->DisColor); ?></td>
            <td><?php r($d->ColorMark); ?></td>
            <td><?php r($d->CutMark); ?></td>
            <td><?php r($d->ThreadDiscolor); ?></td>
            <td><?php r($d->PrintingCrack); ?></td>
            <td><?php r($d->Smearing); ?></td>
            <td><?php r($d->SettingOut); ?></td>
            <td><?php r($d->FabricImpression); ?></td>
            <td><?php r($d->ShadeDiff); ?></td>
            <td><?php r($d->FactoryFaultDirty); ?></td>
            <td><?php r($d->FactoryFaultBladderDrop); ?></td>
            <td><?php r($d->MatTorn); ?></td>
            <td><?php r($d->JointProblem); ?></td>
            <td><?php r($d->Lamination); ?></td>
            <td><?php r($d->Dirty); ?></td>
            <td><?php r($d->Puncture); ?></td>
            <td><?php r($d->NozzelDrop); ?></td>
            <td><?php r($d->Others); ?></td>
        </tr>


        <?php
        }; ?>
    </tbody>
</table>


<div id="container"></div>


<?php 

    }
?>
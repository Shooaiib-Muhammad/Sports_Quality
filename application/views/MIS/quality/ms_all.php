
                    <h2 class="bg-primary-200 text-light text-white p-2 text-center">Machine Stitch Ball Final QC
    (<?php format($start_date); echo " To "; format($end_date); ?>)</h2>
<table class="table table-bordered table-responsive text-center" id="forming-table">

    <thead>
        <tr class="bg-primary-200 text-light">
            <th>Date</th>
            <th>Line</th>
          
            <th>Checked</th>
            <th>Pass</th>
            <th>Fail</th>
            <th>RFT</th>
            <th>LOOSE STITCH</th>
            <th>% </th>
            <th>BROKEN STITCH</th>
            <th>% </th>
            <th>ZIG ZAG STITCH</th>
            <th>% </th>
            <th>MATERIAL BROKEN</th>
            <th>% </th>
            <th>MATERIAL WAVING</th>
            <th>% </th>
            <th>WRIKNLES</th>
            <th>% </th>
            <th>BUMPS</th>
            <th>% </th>
            <th>OPEN COMPOSITE</th>
            <th>% </th>
            <th>UNEVEN COMPOSITE</th>
            <th>% </th>
            <th>PRINTING DEFECTS</th>
            <th>% </th>
            <th>TOUCHING PEELING OFF</th>
            <th>% </th>
            <th>PRINT MISSALIGNMENT</th>
            <th>% </th>
            <th>COLOUR SHADE DIFFERENCE</th>
            <th>% </th>
            <th>WRONG ARTWORK</th>
            <th>% </th>
            <th>VALVE NOZZLE MOVE</th>
            <th>% </th>
            <th>D SHAPE</th>
            <th>% </th>
            <th>AIR LEAKAGE</th>
            <th>% </th>
        </tr>
    </thead>
    <thead>
        <tr class="bg-primary-200 text-light">    
        <th colspan="6" style="background-color:white;"></th>
            <th colspan="6" style="background-color:white; color:red;">STITCHING DEFECTS :</th>
            <th colspan="6" style="background-color:white; color:red;">MATERIAL DEFECTS :</th>
            <th colspan="4" style="background-color:white; color:red;">SURFACE APPEARANCE :</th>
            <th colspan="4" style="background-color:white; color:red;">COMPOSITE LINE DEFECTS :</th>
            <th colspan="10" style="background-color:white; color:red;">COSMETIC DEFECTS :</th>
            <th colspan="6" style="background-color:white; color:red;">PLAYABLITY  / BLADDER :</th>
        </tr>
    </thead>
    <tbody>
   
        <!-- <tr class="bg-dark text-white">
            <td colspan='6'></td>
           
            <td colspan='6'>LOOSE STITCH</td>
           
            <td  colspan='4' >MATERIAL BROKEN</td>
            
            <td colspan='4' >WRIKNLES</td>
          
            <td  colspan='4' >OPEN COMPOSITE</td>
           
            <td  colspan='10'>PRINTING DEFECTS</td>
           
            <td colspan='6'>VALVE NOZZLE MOVE</td>
           
        </tr> -->
   
        <?php foreach($data as $d){; ?>
        <tr>
            <td><?php format($d->DateName); ?></td>
            <td><?php Echo $d->LineName; ?></td>
            
          
            <td><?php r($d->TotalChecked); ?></td>
            <td><?php r($d->Pass); ?></td>
            <td><?php r($d->Fail); ?></td>
            <td><?php percent($d->Pass, $d->TotalChecked); ?></td>
            <td><?php r($d->LooseStitch); ?></td>
            <td ><?php percent($d->LooseStitch, $d->TotalChecked); ?></td>
            <td><?php r($d->MissStitch); ?></td>
            <td><?php percent($d->MissStitch, $d->TotalChecked); ?></td>
            <td><?php r($d->TornStitch); ?></td>
            <td><?php percent($d->TornStitch, $d->TotalChecked); ?></td>
            <td><?php r($d->LamProblem); ?></td>
            <td><?php percent($d->LamProblem, $d->TotalChecked); ?></td>
            <td><?php r($d->DisColor); ?></td>
            <td><?php percent($d->DisColor, $d->TotalChecked); ?></td>
            <td><?php r($d->CompositCornersEdges); ?></td>
            <td><?php percent($d->CompositCornersEdges, $d->TotalChecked); ?></td>
            <td><?php r($d->CompoitMissPrint); ?></td>
            <td><?php percent($d->CompoitMissPrint, $d->TotalChecked); ?></td>
            <td><?php r($d->OpenComposit); ?></td>
            <td><?php percent($d->OpenComposit, $d->TotalChecked); ?></td>
            <td><?php r($d->DailyComposit); ?></td>
            <td><?php percent($d->DailyComposit, $d->TotalChecked); ?></td>
            <td><?php r($d->TreatOff); ?></td>
            <td><?php percent($d->TreatOff, $d->TotalChecked); ?></td>
            <td><?php r($d->Smearing); ?></td>
            <td><?php percent($d->Smearing, $d->TotalChecked); ?></td>
            <td><?php r($d->MissPrinting); ?></td>
            <td><?php percent($d->MissPrinting, $d->TotalChecked); ?></td>
            <td><?php r($d->NozleMove); ?></td>
            <td><?php percent($d->NozleMove, $d->TotalChecked); ?></td>
            <td><?php r($d->WrongArtWork); ?></td>
            <td><?php percent($d->WrongArtWork, $d->TotalChecked); ?></td>
            <td><?php r($d->LeakPuncture); ?></td>
            <td><?php percent($d->LeakPuncture, $d->TotalChecked); ?></td>
            <td><?php r($d->CutMark); ?></td>
            <td><?php percent($d->CutMark, $d->TotalChecked); ?></td>
            <td><?php r($d->CornersOut); ?></td>
            <td><?php percent($d->CornersOut, $d->TotalChecked); ?></td>
        
   
   
        </tr>

        <?php }; ?>


        <?php foreach($datasum as $d){; ?>
        <tr>
       <td></td>
            <td >Total</td>
            <td><?php r($d->TotalChecked); ?></td>
            <td><?php r($d->Pass); ?></td>
            <td><?php r($d->Fail); ?></td>
            <td><?php percent($d->Pass, $d->TotalChecked); ?></td>
            <td><?php r($d->LooseStitch); ?></td>
            <td><?php percent($d->LooseStitch, $d->TotalChecked); ?></td>
            <td><?php r($d->MissStitch); ?></td>
            <td><?php percent($d->MissStitch, $d->TotalChecked); ?></td>
            <td><?php r($d->TornStitch); ?></td>
            <td><?php percent($d->TornStitch, $d->TotalChecked); ?></td>
            <td><?php r($d->LamProblem); ?></td>
            <td><?php percent($d->LamProblem, $d->TotalChecked); ?></td>
            <td><?php r($d->DisColor); ?></td>
            <td><?php percent($d->DisColor, $d->TotalChecked); ?></td>
            <td><?php r($d->CompositCornersEdges); ?></td>
            <td><?php percent($d->CompositCornersEdges, $d->TotalChecked); ?></td>
            <td><?php r($d->CompoitMissPrint); ?></td>
            <td><?php percent($d->CompoitMissPrint, $d->TotalChecked); ?></td>
            <td><?php r($d->OpenComposit); ?></td>
            <td><?php percent($d->OpenComposit, $d->TotalChecked); ?></td>
            <td><?php r($d->DailyComposit); ?></td>
            <td><?php percent($d->DailyComposit, $d->TotalChecked); ?></td>
            <td><?php r($d->TreatOff); ?></td>
            <td><?php percent($d->TreatOff, $d->TotalChecked); ?></td>
            <td><?php r($d->Smearing); ?></td>
            <td><?php percent($d->Smearing, $d->TotalChecked); ?></td>
            <td><?php r($d->MissPrinting); ?></td>
            <td><?php percent($d->MissPrinting, $d->TotalChecked); ?></td>
            <td><?php r($d->NozleMove); ?></td>
            <td><?php percent($d->NozleMove, $d->TotalChecked); ?></td>
            <td><?php r($d->WrongArtWork); ?></td>
            <td><?php percent($d->WrongArtWork, $d->TotalChecked); ?></td>
            <td><?php r($d->LeakPuncture); ?></td>
            <td><?php percent($d->LeakPuncture, $d->TotalChecked); ?></td>
            <td><?php r($d->CutMark); ?></td>
            <td><?php percent($d->CutMark, $d->TotalChecked); ?></td>
            <td ><?php r($d->CornersOut); ?></td>
            <td><?php percent($d->CornersOut, $d->TotalChecked); ?></td>
        <?php
        
        $STITCHING_DEFECTS=($d->LooseStitch)+($d->MissStitch)+($d->TornStitch);

        $MATERIAL_DEFECTS=($d->LamProblem)+($d->DisColor)+($d->CompositCornersEdges);
        $SURFACE_APPEARANCE=($d->CompoitMissPrint)+($d->OpenComposit);
        $COMPOSITE_LIN_DEFECTS=($d->DailyComposit)+($d->TreatOff);
        $COSMETIC_DEFECTS =($d->Smearing)+($d->MissPrinting)+($d->NozleMove)+($d->WrongArtWork)+($d->LeakPuncture);
        $PLAYABLITY=($d->CutMark)+($d->CornersOut);
        ?>
   
        </tr>
        <thead>
        <tr>    
        <th colspan="6" >Total Defects :</th>
            <th colspan="6" ><?php Echo $STITCHING_DEFECTS;?></th>
            <th colspan="6"><?php Echo $MATERIAL_DEFECTS;?></th>
            <th colspan="4" ><?php Echo $SURFACE_APPEARANCE;?></th>
            <th colspan="4" ><?php Echo $COMPOSITE_LIN_DEFECTS;?></th>
            <th colspan="10" ><?php Echo $COSMETIC_DEFECTS;?></th>
            <th colspan="6" ><?php Echo $PLAYABLITY;?></th>
   
        </tr>
    </thead>
        <?php }; ?>

      

    </tbody>
    
</table>

<div id="container"></div>






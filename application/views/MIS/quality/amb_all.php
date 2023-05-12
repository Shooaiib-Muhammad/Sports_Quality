<Style>
    .center {
        text-align: center;
    }
</style>
<h2 class="bg-primary-200 text-light text-white p-2 text-center">Airless Mini Ball Fresh Ball Forming QC ( <?php format($start_date);
                                                                                                            echo " To ";
                                                                                                            format($end_date) ?> )</h2>
<table class="table table-hover table-bordered table-responsive" id="forming-table">
    <thead>
        <tr class="bg-primary-200 text-light">
            <th>Date</th>
            <th>Lines</th>

            <th class="center">Checked</th>
            <th class="center">Pass</th>
            <th class="center">RFT</th>
            <th class="center">Fail Qty</th>

            <th class="center">%</th>
            <th class="center">Uneven Ball Surface</th>
            <th class="center">%</th>
            <th class="center">Un Sharped Cut</th>
            <th class="center">%</th>
            <th class="center">Zig Zag Edge</th>
            <th class="center">%</th>
            <th class="center"> Cutting Panel</th>
            <th class="center">%</th>
            <th class="center">Print Defects</th>
            <th class="center">%</th>
            <th class="center">Touching</th>
            <th class="center">%</th>
            <th class="center">Miss Allignament</th>
            <th class="center">%</th>
            <th class="center">Any Mis Print</th>
            <th class="center">%</th>
            <th class="center">Colour Shape</th>
            <th class="center">%</th>
            <th class="center">Wrong Art Work</th>
            <th class="center">%</th>
            <th class="center">Material Defects</th>
            <th class="center">%</th>
            <th class="center"> Open Seam</th>
            <th class="center">%</th>

            <th class="center"> Seam Over Lapping</th>
            <th class="center">%</th>
            <th class="center"> Wrinkle </th>
            <th class="center">%</th>
            <th class="center"> Excuss Glue</th>
            <th class="center">%</th>
            <th class="center"> Missing Glue</th>
            <th class="center">%</th>
            <th class="center"> Pressore Mark</th>
            <th class="center">%</th>
            <th class="center"> Air Bubble</th>
            <th class="center">%</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $Checked = 0;
        $passsss = 0;
        $unevenBallSurface = 0;
        $unshapecut = 0;
        $zigzagedge = 0;
        $cuttingpanel = 0;
        $heavyprintdefects = 0;
        $NewTouching = 0;
        $printmissallignament = 0;
        $anymisprint = 0;
        $colourShape = 0;
        $wrongartwork = 0;
        $materialdefects = 0;
        $newopenSeam = 0;
        $seamoverlapping = 0;
        $Wrinkle = 0;
        $excussglue = 0;
        $missingglue = 0;
        $pressoremark = 0;
        $airbubble = 0;
        $FailQty = 0;
        ?>
        <?php foreach ($data as $d) { ?>
            <tr>
                <?php
                $passsss = ($d->pass) + $passsss;
                $Checked = ($d->TotalChecked) + $Checked;

                $unevenBallSurface = ($d->unevenBallSurface) + $unevenBallSurface;
                $unshapecut = ($d->unshapecut) + $unshapecut;
                $zigzagedge = ($d->zigzagedge) + $zigzagedge;
                $cuttingpanel = ($d->cuttingpanel) + $cuttingpanel;
                $heavyprintdefects = ($d->heavyprintdefects) + $heavyprintdefects;
                $NewTouching = ($d->NewTouching) + $NewTouching;
                $printmissallignament = ($d->printmissallignament) + $printmissallignament;
                $anymisprint = ($d->anymisprint) + $anymisprint;
                $colourShape = ($d->colourShape) + $colourShape;
                $wrongartwork = ($d->wrongartwork) + $wrongartwork;
                $materialdefects = ($d->materialdefects) + $materialdefects;
                $newopenSeam = ($d->newopenSeam) + $newopenSeam;
                $seamoverlapping = ($d->seamoverlapping) + $seamoverlapping;
                $Wrinkle = ($d->Wrinkle) + $Wrinkle;
                $excussglue = ($d->excussglue) + $excussglue;
                $missingglue = ($d->missingglue) + $missingglue;
                $pressoremark = ($d->pressoremark) + $pressoremark;
                $airbubble = ($d->airbubble) + $airbubble;
                ?>
                <td><?php format($d->DateName); ?></td>
                <td><?php echo $d->LineName; ?></td>

                <td class="center"><?php r($d->TotalChecked); ?></td>

                <td class="center"><?php r($d->pass); ?></td>
                <?php
                $RFT = (($d->pass) / ($d->TotalChecked)) * 100;
                ?>
                <td class="center"><?php r($RFT); ?>%</td>
                <?php
                $pass = $d->pass;
                $Fail = ($d->TotalChecked) - $pass;
                $FailQty = $Fail + $FailQty;
                ?>

                <td class="center"><?php echo $Fail;
                                    ?></td>
                <td><?php percent($Fail, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->unevenBallSurface); ?></td>
                <td><?php percent($d->unevenBallSurface, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->unshapecut); ?></td>
                <td><?php percent($d->unshapecut, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->zigzagedge); ?></td>
                <td><?php percent($d->zigzagedge, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->cuttingpanel); ?></td>
                <td><?php percent($d->cuttingpanel, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->heavyprintdefects); ?></td>
                <td><?php percent($d->heavyprintdefects, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->NewTouching); ?></td>
                <td><?php percent($d->NewTouching, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->printmissallignament); ?></td>
                <td><?php percent($d->printmissallignament, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->anymisprint); ?></td>
                <td><?php percent($d->anymisprint, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->colourShape); ?></td>
                <td><?php percent($d->colourShape, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->wrongartwork); ?></td>
                <td><?php percent($d->wrongartwork, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->materialdefects); ?></td>
                <td><?php percent($d->materialdefects, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->newopenSeam); ?></td>
                <td><?php percent($d->newopenSeam, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->seamoverlapping); ?></td>
                <td><?php percent($d->seamoverlapping, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->Wrinkle); ?></td>
                <td><?php percent($d->Wrinkle, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->excussglue); ?></td>
                <td><?php percent($d->excussglue, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->missingglue); ?></td>
                <td><?php percent($d->missingglue, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->pressoremark); ?></td>
                <td><?php percent($d->pressoremark, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->airbubble); ?></td>
                <td><?php percent($d->airbubble, $d->TotalChecked); ?></td>




            </tr>
        <?php }; ?>
    <tfoot>
        <tr style="color:white;" class="bg-primary-200">
            <?php
            $upperNames = ['Uneven Ball Surface', 'Un Sharped Cut', 'Zig Zag Edge', 'Cutting Panel', 'Print Defects', 'Touching', 'Miss Allignament', 'Any Mis Print', 'Colour Shape', 'Wrong Art Work', 'Material Defects', 'Open Seam', 'Seam Over Lapping', 'Wrinkle', 'Excuss Glue', 'Missing Glue', 'Pressore Mark', 'Air Bubble'];
            $data_points1 = [];

            $upperContent = [$unevenBallSurface, $unshapecut, $zigzagedge, $cuttingpanel, $heavyprintdefects, $NewTouching, $printmissallignament, $anymisprint, $colourShape, $wrongartwork, $materialdefects, $newopenSeam, $seamoverlapping, $Wrinkle, $excussglue, $missingglue, $pressoremark, $airbubble];

            $combineArray = array_combine($upperNames, $upperContent);
            foreach ($combineArray as $key => $value) {
                $point1 = [
                    'name' => $key,
                    'y' => $value,
                    // 'drilldown' => $d->FactoryCode
                ];
                array_push($data_points1, $point1);
            }
            ?>
            <td></td>

            <td> Totals</td>
            <td class="center"><?php r($Checked); ?></td>

            <td class="center"><?php r($passsss); ?></td>
            <?php
            $RFT = ($passsss / ($Checked)) * 100;
            ?>
            <td class="center"><?php echo  r($RFT); ?> %</td>


            <td class="center"><?php r($FailQty); ?></td>
            <td><?php percent($FailQty, $Checked); ?></td>
            <td class="center"><?php r($unevenBallSurface); ?></td>
            <td><?php percent($unevenBallSurface, $Checked); ?></td>
            <td class="center"><?php r($unshapecut); ?></td>
            <td><?php percent($unshapecut, $Checked); ?></td>
            <td class="center"><?php r($zigzagedge); ?></td>
            <td><?php percent($zigzagedge, $Checked); ?></td>

            <td class="center"><?php r($cuttingpanel); ?></td>
            <td><?php percent($cuttingpanel, $Checked); ?></td>

            <td class="center"><?php r($heavyprintdefects); ?></td>
            <td><?php percent($heavyprintdefects, $Checked); ?></td>

            <td class="center"><?php r($NewTouching); ?></td>
            <td><?php percent($NewTouching, $Checked); ?></td>

            <td class="center"><?php r($printmissallignament); ?></td>
            <td><?php percent($printmissallignament, $Checked); ?></td>

            <td class="center"><?php r($anymisprint); ?></td>
            <td><?php percent($anymisprint, $Checked); ?></td>

            <td class="center"><?php r($colourShape); ?></td>
            <td><?php percent($colourShape, $Checked); ?></td>

            <td class="center"><?php r($wrongartwork); ?></td>
            <td><?php percent($wrongartwork, $Checked); ?></td>

            <td class="center"><?php r($materialdefects); ?></td>
            <td><?php percent($materialdefects, $Checked); ?></td>

            <td class="center"><?php r($newopenSeam); ?></td>
            <td><?php percent($newopenSeam, $Checked); ?></td>

            <td class="center"><?php r($seamoverlapping); ?></td>
            <td><?php percent($seamoverlapping, $Checked); ?></td>

            <td class="center"><?php r($Wrinkle); ?></td>
            <td><?php percent($Wrinkle, $Checked); ?></td>

            <td class="center"><?php r($excussglue); ?></td>
            <td><?php percent($excussglue, $Checked); ?></td>
            <td class="center"><?php r($missingglue); ?></td>
            <td><?php percent($missingglue, $Checked); ?></td>

            <td class="center"><?php r($pressoremark); ?></td>
            <td><?php percent($pressoremark, $Checked); ?></td>
            <td class="center"><?php r($airbubble); ?></td>
            <td><?php percent($airbubble, $Checked); ?></td>


        </tr>
    </tfoot>
    </tbody>
</table>
<div class="m-2">
    <div id="graphContent">

    </div>
</div>
<h2 class="bg-primary-200 text-light text-white p-2 text-center">Airless Mini Repair Pass Ball Forming QC ( <?php format($start_date);
                                                                                                            echo " To ";
                                                                                                            format($end_date) ?> )</h2>
<table class="table table-hover table-bordered table-responsive" id="forming-RPtable">
    <thead>
        <tr class="bg-primary-200 text-light">
            <th>Date</th>
            <th>Lines</th>


            <th>Repair Pass</th>

            <th>Uneven Ball Surface</th>
            <th>%</th>
            <th>Un Sharped Cut</th>
            <th>%</th>
            <th>Zig Zag Edge</th>
            <th>%</th>
            <th> Cutting Panel</th>
            <th>%</th>
            <th>Print Defects</th>
            <th>%</th>
            <th>Touching</th>
            <th>%</th>
            <th>Miss Allignament</th>
            <th>%</th>
            <th>Any Mis Print</th>
            <th>%</th>
            <th>Colour Shape</th>
            <th>%</th>
            <th>Wrong Art Work</th>
            <th>%</th>
            <th>Material Defects</th>
            <th>%</th>
            <th> Open Seam</th>
            <th>%</th>

            <th> Seam Over Lapping</th>
            <th>%</th>
            <th> Wrinkle </th>
            <th>%</th>
            <th> Excuss Glue</th>
            <th>%</th>
            <th> Missing Glue</th>
            <th>%</th>
            <th> Pressore Mark</th>
            <th>%</th>
            <th> Air Bubble</th>
            <th>%</th>


        </tr>
    </thead>
    <tbody>
        <?php
        $Checked = 0;
        $RPass = 0;

        $unevenBallSurface = 0;
        $unshapecut = 0;
        $zigzagedge = 0;
        $cuttingpanel = 0;
        $heavyprintdefects = 0;
        $NewTouching = 0;
        $printmissallignament = 0;
        $anymisprint = 0;
        $colourShape = 0;
        $wrongartwork = 0;
        $materialdefects = 0;
        $newopenSeam = 0;
        $seamoverlapping = 0;
        $Wrinkle = 0;
        $excussglue = 0;
        $missingglue = 0;
        $pressoremark = 0;
        $airbubble = 0;
        $FailQty = 0;
        ?>
        <?php foreach ($data_RP as $d) {; ?>
            <tr>
                <?php
                $RPass = ($d->RPass) + $RPass;
                $Checked = ($d->TotalChecked) + $Checked;
                $Checked = ($d->TotalChecked) + $Checked;
                $unevenBallSurface = ($d->unevenBallSurface) + $unevenBallSurface;
                $unshapecut = ($d->unshapecut) + $unshapecut;
                $zigzagedge = ($d->zigzagedge) + $zigzagedge;
                $cuttingpanel = ($d->cuttingpanel) + $cuttingpanel;
                $heavyprintdefects = ($d->heavyprintdefects) + $heavyprintdefects;
                $NewTouching = ($d->NewTouching) + $NewTouching;
                $printmissallignament = ($d->printmissallignament) + $printmissallignament;
                $anymisprint = ($d->anymisprint) + $anymisprint;
                $colourShape = ($d->colourShape) + $colourShape;
                $wrongartwork = ($d->wrongartwork) + $wrongartwork;
                $materialdefects = ($d->materialdefects) + $materialdefects;
                $newopenSeam = ($d->newopenSeam) + $newopenSeam;
                $seamoverlapping = ($d->seamoverlapping) + $seamoverlapping;
                $Wrinkle = ($d->Wrinkle) + $Wrinkle;
                $excussglue = ($d->excussglue) + $excussglue;
                $missingglue = ($d->missingglue) + $missingglue;
                $pressoremark = ($d->pressoremark) + $pressoremark;
                $airbubble = ($d->airbubble) + $airbubble;
                ?>
                <td><?php format($d->DateName); ?></td>
                <td><?php echo $d->LineName; ?></td>

                <td class="center"><?php r($d->RPass); ?></td>

                <td class="center"><?php r(($d->unevenBallSurface) * -1); ?></td>
                <td class="text-danger"><?php percent($d->unevenBallSurface, $d->RPass); ?></td>
                <td class="center"><?php r(($d->unshapecut) * -1); ?></td>
                <td class="text-danger"><?php percent($d->unshapecut, $d->RPass); ?></td>
                <td class="center"><?php r(($d->zigzagedge) * -1); ?></td>
                <td class="text-danger"><?php percent($d->zigzagedge, $d->RPass); ?></td>

                <td class="center"><?php r(($d->cuttingpanel) * -1); ?></td>
                <td class="text-danger"><?php percent($d->cuttingpanel, $d->RPass); ?></td>

                <td class="center"><?php r(($d->heavyprintdefects) * -1); ?></td>
                <td class="text-danger"><?php percent($d->heavyprintdefects, $d->RPass); ?></td>

                <td class="center"><?php r(($d->NewTouching) * -1); ?></td>
                <td class="text-danger"><?php percent($d->NewTouching, $d->RPass); ?></td>

                <td class="center"><?php r(($d->printmissallignament) * -1); ?></td>
                <td class="text-danger"><?php percent($d->printmissallignament, $d->RPass); ?></td>

                <td class="center"><?php r(($d->anymisprint) * -1); ?></td>
                <td class="text-danger"><?php percent($d->anymisprint, $d->RPass); ?></td>

                <td class="center"><?php r(($d->colourShape) * -1); ?></td>
                <td class="text-danger"><?php percent($d->colourShape, $d->RPass); ?></td>

                <td class="center"><?php r(($d->wrongartwork) * -1); ?></td>
                <td class="text-danger"><?php percent($d->wrongartwork, $d->RPass); ?></td>

                <td class="center"><?php r(($d->materialdefects) * -1); ?></td>
                <td class="text-danger"><?php percent($d->materialdefects, $d->RPass); ?></td>

                <td class="center"><?php r(($d->newopenSeam) * -1); ?></td>
                <td class="text-danger"><?php percent($d->newopenSeam, $d->RPass); ?></td>

                <td class="center"><?php r(($d->seamoverlapping) * -1); ?></td>
                <td class="text-danger"><?php percent($d->seamoverlapping, $d->RPass); ?></td>

                <td class="center"><?php r(($d->Wrinkle) * -1); ?></td>
                <td class="text-danger"><?php percent($d->Wrinkle, $d->RPass); ?></td>

                <td class="center"><?php r(($d->excussglue) * -1); ?></td>
                <td class="text-danger"><?php percent($d->excussglue, $d->RPass); ?></td>
                <td class="center"><?php r(($d->missingglue) * -1); ?></td>
                <td class="text-danger"><?php percent($d->missingglue, $d->RPass); ?></td>

                <td class="center"><?php r(($d->pressoremark) * -1); ?></td>
                <td class="text-danger"><?php percent($d->pressoremark, $d->RPass); ?></td>
                <td class="center"><?php r(($d->airbubble) * -1); ?></td>
                <td class="text-danger"><?php percent($d->airbubble, $d->RPass); ?></td>





            </tr>
        <?php }; ?>
        <tr style="color:black;">
            <td></td>

            <td> Total</td>





            <td class="center"><?php r($RPass); ?></td>

            <td class="center"><?php r(($unevenBallSurface) * -1); ?></td>
            <td class="text-danger"><?php percent($unevenBallSurface, $RPass); ?></td>
            <td class="center"><?php r(($unshapecut) * -1); ?></td>
            <td class="text-danger"><?php percent($unshapecut, $RPass); ?></td>
            <td class="center"><?php r(($zigzagedge) * -1); ?></td>
            <td class="text-danger"><?php percent($zigzagedge, $RPass); ?></td>

            <td class="center"><?php r(($cuttingpanel) * -1); ?></td>
            <td class="text-danger"><?php percent($cuttingpanel, $RPass); ?></td>

            <td class="center"><?php r(($heavyprintdefects) * -1); ?></td>
            <td class="text-danger"><?php percent($heavyprintdefects, $RPass); ?></td>

            <td class="center"><?php r(($NewTouching) * -1); ?></td>
            <td class="text-danger"><?php percent($NewTouching, $RPass); ?></td>

            <td class="center"><?php r(($printmissallignament) * -1); ?></td>
            <td class="text-danger"><?php percent($printmissallignament, $RPass); ?></td>

            <td class="center"><?php r(($anymisprint) * -1); ?></td>
            <td class="text-danger"><?php percent($anymisprint, $RPass); ?></td>

            <td class="center"><?php r(($colourShape) * -1); ?></td>
            <td class="text-danger"><?php percent($colourShape, $RPass); ?></td>

            <td class="center"><?php r(($wrongartwork) * -1); ?></td>
            <td class="text-danger"><?php percent($wrongartwork, $RPass); ?></td>

            <td class="center"><?php r(($materialdefects) * -1); ?></td>
            <td class="text-danger"><?php percent($materialdefects, $RPass); ?></td>

            <td class="center"><?php r(($newopenSeam) * -1); ?></td>
            <td class="text-danger"><?php percent($newopenSeam, $RPass); ?></td>

            <td class="center"><?php r(($seamoverlapping) * -1); ?></td>
            <td class="text-danger"><?php percent($seamoverlapping, $RPass); ?></td>

            <td class="center"><?php r(($Wrinkle) * -1); ?></td>
            <td class="text-danger"><?php percent($Wrinkle, $RPass); ?></td>

            <td class="center"><?php r(($excussglue) * -1); ?></td>
            <td class="text-danger"><?php percent($excussglue, $RPass); ?></td>
            <td class="center"><?php r(($missingglue) * -1); ?></td>
            <td class="text-danger"><?php percent($missingglue, $RPass); ?></td>

            <td class="center"><?php r(($pressoremark) * -1); ?></td>
            <td class="text-danger"><?php percent($pressoremark, $RPass); ?></td>
            <td class="center"><?php r(($airbubble) * -1); ?></td>
            <td class="text-danger"><?php percent($airbubble, $RPass); ?></td>

        </tr>
    </tbody>
</table>
<h2 class="bg-primary-200 text-light text-white p-2 text-center">Airless Mini Repair Fail Ball Forming QC ( <?php format($start_date);
                                                                                                            echo " To ";
                                                                                                            format($end_date) ?> )</h2>
<table class="table table-hover table-bordered table-responsive" id="forming-RFtable">
    <thead>
        <tr class="bg-primary-200 text-light">
            <th>Date</th>
            <th>Lines</th>

            <th>Repair Fail</th>
            <th>Uneven Ball Surface</th>
            <th>%</th>
            <th>Un Sharped Cut</th>
            <th>%</th>
            <th>Zig Zag Edge</th>
            <th>%</th>
            <th> Cutting Panel</th>
            <th>%</th>
            <th>Print Defects</th>
            <th>%</th>
            <th>Touching</th>
            <th>%</th>
            <th>Miss Allignament</th>
            <th>%</th>
            <th>Any Mis Print</th>
            <th>%</th>
            <th>Colour Shape</th>
            <th>%</th>
            <th>Wrong Art Work</th>
            <th>%</th>
            <th>Material Defects</th>
            <th>%</th>
            <th> Open Seam</th>
            <th>%</th>
            <th> Seam Over Lapping</th>
            <th>%</th>
            <th> Wrinkle </th>
            <th>%</th>
            <th> Excuss Glue</th>
            <th>%</th>
            <th> Missing Glue</th>
            <th>%</th>
            <th> Pressore Mark</th>
            <th>%</th>
            <th> Air Bubble</th>
            <th>%</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $RCheck = 0;
        $RPass = 0;

        $unevenBallSurface = 0;
        $unshapecut = 0;
        $zigzagedge = 0;
        $cuttingpanel = 0;
        $heavyprintdefects = 0;
        $NewTouching = 0;
        $printmissallignament = 0;
        $anymisprint = 0;
        $colourShape = 0;
        $wrongartwork = 0;
        $materialdefects = 0;
        $newopenSeam = 0;
        $seamoverlapping = 0;
        $Wrinkle = 0;
        $excussglue = 0;
        $missingglue = 0;
        $pressoremark = 0;
        $airbubble = 0;
        $FailQty = 0;
        ?>
        <?php foreach ($data_RF  as $d) {; ?>
            <tr>
                <?php
                $RPass = ($d->RPass) + $RPass;
                $RCheck = ($d->RCheck) + $RCheck;

                $unevenBallSurface = ($d->unevenBallSurface) + $unevenBallSurface;
                $unshapecut = ($d->unshapecut) + $unshapecut;
                $zigzagedge = ($d->zigzagedge) + $zigzagedge;
                $cuttingpanel = ($d->cuttingpanel) + $cuttingpanel;
                $heavyprintdefects = ($d->heavyprintdefects) + $heavyprintdefects;
                $NewTouching = ($d->NewTouching) + $NewTouching;
                $printmissallignament = ($d->printmissallignament) + $printmissallignament;
                $anymisprint = ($d->anymisprint) + $anymisprint;
                $colourShape = ($d->colourShape) + $colourShape;
                $wrongartwork = ($d->wrongartwork) + $wrongartwork;
                $materialdefects = ($d->materialdefects) + $materialdefects;
                $newopenSeam = ($d->newopenSeam) + $newopenSeam;
                $seamoverlapping = ($d->seamoverlapping) + $seamoverlapping;
                $Wrinkle = ($d->Wrinkle) + $Wrinkle;
                $excussglue = ($d->excussglue) + $excussglue;
                $missingglue = ($d->missingglue) + $missingglue;
                $pressoremark = ($d->pressoremark) + $pressoremark;
                $airbubble = ($d->airbubble) + $airbubble;
                ?>
                <td><?php format($d->DateName); ?></td>
                <td><?php echo $d->LineName; ?></td>

                <?php
                $RFail = ($d->RPass) - ($d->RCheck)
                ?>
                <td><?php r($d->RCheck); ?></td>


                <td><?php r($d->unevenBallSurface) * -1; ?></td>
                <td class="text-danger"><?php percent($d->unevenBallSurface, $d->TotalChecked); ?></td>
                <td><?php r($d->unshapecut) * -1; ?></td>
                <td class="text-danger"><?php percent($d->unshapecut, $d->TotalChecked); ?></td>
                <td><?php r($d->zigzagedge) * -1; ?></td>
                <td class="text-danger"><?php percent($d->zigzagedge, $d->TotalChecked); ?></td>

                <td><?php r($d->cuttingpanel) * -1; ?></td>
                <td class="text-danger"><?php percent($d->cuttingpanel, $d->TotalChecked); ?></td>

                <td><?php r($d->heavyprintdefects) * -1; ?></td>
                <td class="text-danger"><?php percent($d->heavyprintdefects, $d->TotalChecked); ?></td>

                <td><?php r($d->NewTouching) * -1; ?></td>
                <td class="text-danger"><?php percent($d->NewTouching, $d->TotalChecked); ?></td>

                <td><?php r($d->printmissallignament) * -1; ?></td>
                <td class="text-danger"><?php percent($d->printmissallignament, $d->TotalChecked); ?></td>

                <td><?php r($d->anymisprint) * -1; ?></td>
                <td class="text-danger"><?php percent($d->anymisprint, $d->TotalChecked); ?></td>

                <td><?php r($d->colourShape) * -1; ?></td>
                <td class="text-danger"><?php percent($d->colourShape, $d->TotalChecked); ?></td>

                <td><?php r($d->wrongartwork) * -1; ?></td>
                <td class="text-danger"><?php percent($d->wrongartwork, $d->TotalChecked); ?></td>

                <td><?php r($d->materialdefects) * -1; ?></td>
                <td class="text-danger"><?php percent($d->materialdefects, $d->TotalChecked); ?></td>

                <td><?php r($d->newopenSeam) * -1; ?></td>
                <td class="text-danger"><?php percent($d->newopenSeam, $d->TotalChecked); ?></td>

                <td><?php r($d->seamoverlapping) * -1; ?></td>
                <td class="text-danger"><?php percent($d->seamoverlapping, $d->TotalChecked); ?></td>

                <td><?php r($d->Wrinkle) * -1; ?></td>
                <td class="text-danger"><?php percent($d->Wrinkle, $d->TotalChecked); ?></td>

                <td><?php r($d->excussglue) * -1; ?></td>
                <td class="text-danger"><?php percent($d->excussglue, $d->TotalChecked); ?></td>
                <td><?php r($d->missingglue) * -1; ?></td>
                <td class="text-danger"><?php percent($d->missingglue, $d->TotalChecked); ?></td>

                <td><?php r($d->pressoremark) * -1; ?></td>
                <td class="text-danger"><?php percent($d->pressoremark, $d->TotalChecked); ?></td>
                <td><?php r($d->airbubble) * -1; ?></td>
                <td class="text-danger"><?php percent($d->airbubble, $d->TotalChecked); ?></td>


            </tr>
        <?php }; ?>
        <tr style="color:black;">
            <td></td>

            <td> Total</td>


            <td class="center"><?php r($RCheck); ?></td>

            <td class="center"><?php r($unevenBallSurface) * -1; ?></td>
            <td class="text-danger"><?php percent($unevenBallSurface, $Checked); ?></td>
            <td class="center"><?php r($unshapecut) * -1; ?></td>
            <td class="text-danger"><?php percent($unshapecut, $Checked); ?></td>
            <td class="center"><?php r($zigzagedge) * -1; ?></td>
            <td class="text-danger"><?php percent($zigzagedge, $Checked); ?></td>

            <td class="center"><?php r($cuttingpanel) * -1; ?></td>
            <td class="text-danger"><?php percent($cuttingpanel, $Checked); ?></td>

            <td class="center"><?php r($heavyprintdefects) * -1; ?></td>
            <td class="text-danger"><?php percent($heavyprintdefects, $Checked); ?></td>

            <td class="center"><?php r($NewTouching) * -1; ?></td>
            <td class="text-danger"><?php percent($NewTouching, $Checked); ?></td>

            <td class="center"><?php r($printmissallignament) * -1; ?></td>
            <td class="text-danger"><?php percent($printmissallignament, $Checked); ?></td>

            <td class="center"><?php r($anymisprint) * -1; ?></td>
            <td class="text-danger"><?php percent($anymisprint, $Checked); ?></td>

            <td class="center"><?php r($colourShape) * -1; ?></td>
            <td class="text-danger"><?php percent($colourShape, $Checked); ?></td>

            <td class="center"><?php r($wrongartwork) * -1; ?></td>
            <td class="text-danger"><?php percent($wrongartwork, $Checked); ?></td>

            <td class="center"><?php r($materialdefects) * -1; ?></td>
            <td class="text-danger"><?php percent($materialdefects, $Checked); ?></td>

            <td class="center"><?php r($newopenSeam) * -1; ?></td>
            <td class="text-danger"><?php percent($newopenSeam, $Checked); ?></td>

            <td class="center"><?php r($seamoverlapping) * -1; ?></td>
            <td class="text-danger"><?php percent($seamoverlapping, $Checked); ?></td>

            <td class="center"><?php r($Wrinkle) * -1; ?></td>
            <td class="text-danger"><?php percent($Wrinkle, $Checked); ?></td>

            <td class="center"><?php r($excussglue) * -1; ?></td>
            <td class="text-danger"><?php percent($excussglue, $Checked); ?></td>
            <td class="center"><?php r($missingglue) * -1; ?></td>
            <td class="text-danger"><?php percent($missingglue, $Checked); ?></td>

            <td class="center"><?php r($pressoremark) * -1; ?></td>
            <td class="text-danger"><?php percent($pressoremark, $Checked); ?></td>
            <td class="center"><?php r($airbubble) * -1; ?></td>
            <td class="text-danger"><?php percent($airbubble, $Checked); ?></td>

        </tr>
    </tbody>
</table>
<h2 class="bg-primary-200 text-light text-white p-2 text-center">Airless Mini Ball Packing QC ( <?php format($start_date);
                                                                                                echo " To ";
                                                                                                format($end_date) ?> )</h2>
<table class="table table-hover table-bordered table-responsive" id="packing-table">
    <thead>
        <tr class="bg-primary-200 text-light">
            <th>Date</th>
            <th>Lines</th>

            <th>Checked</th>
            <th>Pass</th>
            <th>RFT</th>
            <th>Fail Qty</th>
            <th>%</th>
            <th>Uneven Ball Surface</th>
            <th>%</th>
            <th>Un Sharped Cut</th>
            <th>%</th>
            <th>Zig Zag Edge</th>
            <th>%</th>
            <th> Cutting Panel</th>
            <th>%</th>
            <th>Print Defects</th>
            <th>%</th>
            <th>Touching</th>
            <th>%</th>
            <th>Miss Allignament</th>
            <th>%</th>
            <th>Any Mis Print</th>
            <th>%</th>
            <th>Colour Shape</th>
            <th>%</th>
            <th>Wrong Art Work</th>
            <th>%</th>
            <th>Material Defects</th>
            <th>%</th>
            <th> Open Seam</th>
            <th>%</th>

            <th> Seam Over Lapping</th>
            <th>%</th>
            <th> Wrinkle </th>
            <th>%</th>
            <th> Excuss Glue</th>
            <th>%</th>
            <th> Missing Glue</th>
            <th>%</th>
            <th> Pressore Mark</th>
            <th>%</th>
            <th> Air Bubble</th>
            <th>%</th>
            <th> Dirty</th>
            <th>%</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $Checked = 0;
        $passQ = 0;

        $unevenBallSurface = 0;
        $unshapecut = 0;
        $zigzagedge = 0;
        $cuttingpanel = 0;
        $heavyprintdefects = 0;
        $NewTouching = 0;
        $printmissallignament = 0;
        $anymisprint = 0;
        $colourShape = 0;
        $wrongartwork = 0;
        $materialdefects = 0;
        $newopenSeam = 0;
        $seamoverlapping = 0;
        $Wrinkle = 0;
        $excussglue = 0;
        $missingglue = 0;
        $pressoremark = 0;
        $airbubble = 0;
        $dirty = 0;
        $FailQty = 0;
        ?>
        <?php foreach ($data2 as $d) {; ?>
            <tr>
                <?php
                $passQ = ($d->pass) + $passQ;
                $Checked = ($d->TotalChecked) + $Checked;

                $unevenBallSurface = ($d->unevenBallSurface) + $unevenBallSurface;
                $unshapecut = ($d->unshapecut) + $unshapecut;
                $zigzagedge = ($d->zigzagedge) + $zigzagedge;
                $cuttingpanel = ($d->cuttingpanel) + $cuttingpanel;
                $heavyprintdefects = ($d->heavyprintdefects) + $heavyprintdefects;
                $NewTouching = ($d->NewTouching) + $NewTouching;
                $printmissallignament = ($d->printmissallignament) + $printmissallignament;
                $anymisprint = ($d->anymisprint) + $anymisprint;
                $colourShape = ($d->colourShape) + $colourShape;
                $wrongartwork = ($d->wrongartwork) + $wrongartwork;
                $materialdefects = ($d->materialdefects) + $materialdefects;
                $newopenSeam = ($d->newopenSeam) + $newopenSeam;
                $seamoverlapping = ($d->seamoverlapping) + $seamoverlapping;
                $Wrinkle = ($d->Wrinkle) + $Wrinkle;
                $excussglue = ($d->excussglue) + $excussglue;
                $missingglue = ($d->missingglue) + $missingglue;
                $pressoremark = ($d->pressoremark) + $pressoremark;
                $airbubble = ($d->airbubble) + $airbubble;
                $dirty = ($d->Dirty) + $dirty;
                ?>
                <td><?php format($d->DateName); ?></td>
                <td><?php echo $d->LineName; ?></td>

                <td class="center"><?php r($d->TotalChecked); ?></td>
                <td class="center"><?php r($d->pass); ?></td>
                <?php
                $RFT = (($d->pass) / ($d->TotalChecked)) * 100;
                ?>
                <td class="center"><?php r($RFT); ?>%</td>
                <?php
                $passasas = $d->pass;
                $Fail = ($d->TotalChecked) - $passasas;
                $FailQty = $Fail + $FailQty;
                ?>

                <td class="center"><?php echo $Fail;
                                    ?></td>
                <td class="text-danger"><?php percent($Fail, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->unevenBallSurface); ?></td>
                <td class="text-danger"><?php percent($d->unevenBallSurface, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->unshapecut); ?></td>
                <td class="text-danger"><?php percent($d->unshapecut, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->zigzagedge); ?></td>
                <td class="text-danger"><?php percent($d->zigzagedge, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->cuttingpanel); ?></td>
                <td class="text-danger"><?php percent($d->cuttingpanel, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->heavyprintdefects); ?></td>
                <td class="text-danger"><?php percent($d->heavyprintdefects, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->NewTouching); ?></td>
                <td class="text-danger"><?php percent($d->NewTouching, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->printmissallignament); ?></td>
                <td class="text-danger"><?php percent($d->printmissallignament, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->anymisprint); ?></td>
                <td class="text-danger"><?php percent($d->anymisprint, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->colourShape); ?></td>
                <td class="text-danger"><?php percent($d->colourShape, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->wrongartwork); ?></td>
                <td class="text-danger"><?php percent($d->wrongartwork, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->materialdefects); ?></td>
                <td class="text-danger"><?php percent($d->materialdefects, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->newopenSeam); ?></td>
                <td class="text-danger"><?php percent($d->newopenSeam, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->seamoverlapping); ?></td>
                <td class="text-danger"><?php percent($d->seamoverlapping, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->Wrinkle); ?></td>
                <td class="text-danger"><?php percent($d->Wrinkle, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->excussglue); ?></td>
                <td class="text-danger"><?php percent($d->excussglue, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->missingglue); ?></td>
                <td class="text-danger"><?php percent($d->missingglue, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->pressoremark); ?></td>
                <td class="text-danger"><?php percent($d->pressoremark, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->airbubble); ?></td>
                <td class="text-danger"><?php percent($d->airbubble, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->Dirty); ?></td>
                <td class="text-danger"><?php percent($d->Dirty, $d->TotalChecked); ?></td>

            </tr>
        <?php }; ?>
        <tr style="color:black;">
            <td></td>

            <td> Total</td>
            <td class="center"><?php r($Checked); ?></td>

            <td class="center"><?php r($passQ); ?></td>
            <?php
            if ($passQ == 0 or $Checked == 0) {
                $RFT = 0;
            } else {
                $RFT = ($passQ / ($Checked)) * 100;
            }
            ?>
            <td class="center"><?php echo  r($RFT); ?> %</td>


            <td class="center"><?php r($FailQty); ?></td>
            <td class="text-danger"><?php percent($FailQty, $Checked); ?></td>
            <td class="center"><?php r($unevenBallSurface); ?></td>
            <td class="text-danger"><?php percent($unevenBallSurface, $Checked); ?></td>
            <td class="center"><?php r($unshapecut); ?></td>
            <td class="text-danger"><?php percent($unshapecut, $Checked); ?></td>
            <td class="center"><?php r($zigzagedge); ?></td>
            <td class="text-danger"><?php percent($zigzagedge, $Checked); ?></td>

            <td class="center"><?php r($cuttingpanel); ?></td>
            <td class="text-danger"><?php percent($cuttingpanel, $Checked); ?></td>

            <td class="center"><?php r($heavyprintdefects); ?></td>
            <td class="text-danger"><?php percent($heavyprintdefects, $Checked); ?></td>

            <td class="center"><?php r($NewTouching); ?></td>
            <td class="text-danger"><?php percent($NewTouching, $Checked); ?></td>

            <td class="center"><?php r($printmissallignament); ?></td>
            <td class="text-danger"><?php percent($printmissallignament, $Checked); ?></td>

            <td class="center"><?php r($anymisprint); ?></td>
            <td class="text-danger"><?php percent($anymisprint, $Checked); ?></td>

            <td class="center"><?php r($colourShape); ?></td>
            <td class="text-danger"><?php percent($colourShape, $Checked); ?></td>

            <td class="center"><?php r($wrongartwork); ?></td>
            <td class="text-danger"><?php percent($wrongartwork, $Checked); ?></td>

            <td class="center"><?php r($materialdefects); ?></td>
            <td class="text-danger"><?php percent($materialdefects, $Checked); ?></td>

            <td class="center"><?php r($newopenSeam); ?></td>
            <td class="text-danger"><?php percent($newopenSeam, $Checked); ?></td>

            <td class="center"><?php r($seamoverlapping); ?></td>
            <td class="text-danger"><?php percent($seamoverlapping, $Checked); ?></td>

            <td class="center"><?php r($Wrinkle); ?></td>
            <td class="text-danger"><?php percent($Wrinkle, $Checked); ?></td>

            <td class="center"><?php r($excussglue); ?></td>
            <td class="text-danger"><?php percent($excussglue, $Checked); ?></td>
            <td class="center"><?php r($missingglue); ?></td>
            <td class="text-danger"><?php percent($missingglue, $Checked); ?></td>

            <td class="center"><?php r($pressoremark); ?></td>
            <td class="text-danger"><?php percent($pressoremark, $Checked); ?></td>
            <td class="center"><?php r($airbubble); ?></td>
            <td class="text-danger"><?php percent($airbubble, $Checked); ?></td>
            <td class="center"><?php r($dirty); ?></td>
            <td class="text-danger"><?php percent($dirty, $Checked); ?></td>


        </tr>
    </tbody>
</table>
<h2 class="bg-primary-200 text-light text-white p-2 text-center">Airless Mini Ball Repair Pass Packing QC ( <?php format($start_date);
                                                                                                            echo " To ";
                                                                                                            format($end_date) ?> )</h2>
<table class="table table-hover table-bordered table-responsive" id="packing-RPtable">
    <thead>
        <tr class="bg-primary-200 text-light">
            <th>Date</th>
            <th>Lines</th>

            <th>Checked</th>
            <th>Pass</th>
            <th>RFT</th>
            <th class="center">Fail Qty</th>
            <th class="center">%</th>
            <th class="center">Uneven Ball Surface</th>
            <th class="center">%</th>
            <th class="center">Un Sharped Cut</th>
            <th class="center">%</th>
            <th class="center">Zig Zag Edge</th>
            <th class="center">%</th>
            <th class="center"> Cutting Panel</th>
            <th class="center">%</th>
            <th class="center">Print Defects</th>
            <th class="center">%</th>
            <th class="center">Touching</th>
            <th class="center">%</th>
            <th class="center">Miss Allignament</th>
            <th class="center">%</th>
            <th class="center">Any Mis Print</th>
            <th class="center">%</th>
            <th class="center">Colour Shape</th>
            <th class="center">%</th>
            <th class="center">Wrong Art Work</th>
            <th class="center">%</th>
            <th class="center">Material Defects</th>
            <th class="center">%</th>
            <th class="center"> Open Seam</th>
            <th class="center">%</th>

            <th class="center"> Seam Over Lapping</th>
            <th class="center">%</th>
            <th class="center"> Wrinkle </th>
            <th class="center">%</th>
            <th class="center"> Excuss Glue</th>
            <th class="center">%</th>
            <th class="center"> Missing Glue</th>
            <th class="center">%</th>
            <th class="center"> Pressore Mark</th>
            <th class="center">%</th>
            <th class="center"> Air Bubble</th>
            <th class="center">%</th>
            <th class="center"> Dirty</th>
            <th class="center">%</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $Checked = 0;
        $PasQty = 0;

        $unevenBallSurface = 0;
        $unshapecut = 0;
        $zigzagedge = 0;
        $cuttingpanel = 0;
        $heavyprintdefects = 0;
        $NewTouching = 0;
        $printmissallignament = 0;
        $anymisprint = 0;
        $colourShape = 0;
        $wrongartwork = 0;
        $materialdefects = 0;
        $newopenSeam = 0;
        $seamoverlapping = 0;
        $Wrinkle = 0;
        $excussglue = 0;
        $missingglue = 0;
        $pressoremark = 0;
        $airbubble = 0;
        $dirty = 0;
        $FailQty = 0;
        ?>
        <?php foreach ($data_packing_RP as $d) {; ?>
            <tr>
                <?php
                $PasQty = ($d->Pass) + $PasQty;
                $Checked = ($d->TotalChecked) + $Checked;

                $unevenBallSurface = ($d->unevenBallSurface) + $unevenBallSurface;
                $unshapecut = ($d->unshapecut) + $unshapecut;
                $zigzagedge = ($d->zigzagedge) + $zigzagedge;
                $cuttingpanel = ($d->cuttingpanel) + $cuttingpanel;
                $heavyprintdefects = ($d->heavyprintdefects) + $heavyprintdefects;
                $NewTouching = ($d->NewTouching) + $NewTouching;
                $printmissallignament = ($d->printmissallignament) + $printmissallignament;
                $anymisprint = ($d->anymisprint) + $anymisprint;
                $colourShape = ($d->colourShape) + $colourShape;
                $wrongartwork = ($d->wrongartwork) + $wrongartwork;
                $materialdefects = ($d->materialdefects) + $materialdefects;
                $newopenSeam = ($d->newopenSeam) + $newopenSeam;
                $seamoverlapping = ($d->seamoverlapping) + $seamoverlapping;
                $Wrinkle = ($d->Wrinkle) + $Wrinkle;
                $excussglue = ($d->excussglue) + $excussglue;
                $missingglue = ($d->missingglue) + $missingglue;
                $pressoremark = ($d->pressoremark) + $pressoremark;
                $airbubble = ($d->airbubble) + $airbubble;
                $dirty = ($d->Dirty) + $dirty;
                ?>
                <td><?php format($d->DateName); ?></td>
                <td><?php echo $d->LineName; ?></td>

                <td class="center"><?php r($d->TotalChecked); ?></td>
                <td class="center"><?php r($d->pass); ?></td>
                <?php
                $RFT = (($d->pass) / ($d->TotalChecked)) * 100;
                ?>
                <td class="center"><?php r($RFT); ?>%</td>
                <?php
                $passss = $d->pass;
                $Fail = ($d->TotalChecked) - $passss;
                $FailQty = $Fail + $FailQty;
                ?>

                <td class="center"><?php echo $Fail;
                                    ?></td>
                <td class="text-danger"><?php percent($Fail, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->unevenBallSurface); ?></td>
                <td class="text-danger"><?php percent($d->unevenBallSurface, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->unshapecut); ?></td>
                <td class="text-danger"><?php percent($d->unshapecut, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->zigzagedge); ?></td>
                <td class="text-danger"><?php percent($d->zigzagedge, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->cuttingpanel); ?></td>
                <td class="text-danger"><?php percent($d->cuttingpanel, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->heavyprintdefects); ?></td>
                <td class="text-danger"><?php percent($d->heavyprintdefects, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->NewTouching); ?></td>
                <td class="text-danger"><?php percent($d->NewTouching, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->printmissallignament); ?></td>
                <td class="text-danger"><?php percent($d->printmissallignament, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->anymisprint); ?></td>
                <td class="text-danger"><?php percent($d->anymisprint, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->colourShape); ?></td>
                <td class="text-danger"><?php percent($d->colourShape, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->wrongartwork); ?></td>
                <td class="text-danger"><?php percent($d->wrongartwork, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->materialdefects); ?></td>
                <td class="text-danger"><?php percent($d->materialdefects, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->newopenSeam); ?></td>
                <td class="text-danger"><?php percent($d->newopenSeam, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->seamoverlapping); ?></td>
                <td class="text-danger"><?php percent($d->seamoverlapping, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->Wrinkle); ?></td>
                <td class="text-danger"><?php percent($d->Wrinkle, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->excussglue); ?></td>
                <td class="text-danger"><?php percent($d->excussglue, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->missingglue); ?></td>
                <td class="text-danger"><?php percent($d->missingglue, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->pressoremark); ?></td>
                <td class="text-danger"><?php percent($d->pressoremark, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->airbubble); ?></td>
                <td class="text-danger"><?php percent($d->airbubble, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->Dirty); ?></td>
                <td class="text-danger"><?php percent($d->Dirty, $d->TotalChecked); ?></td>
            </tr>
        <?php }; ?>
        <tr style="color:black">
            <td></td>

            <td> Total</td>
            <td class="center"><?php r($Checked); ?></td>

            <td class="center"><?php r($PasQty); ?></td>

            <?php
            if ($PasQty == 0 or $Checked == 0) {
                $RFT = 0;
            } else {
                $RFT = ($PasQty / ($Checked)) * 100;
            }
            ?>
            <td class="center"><?php echo  r($RFT); ?> %</td>


            <td class="center"><?php r($FailQty); ?></td>
            <td class="text-danger"><?php percent($FailQty, $Checked); ?></td>
            <td class="center"><?php r($unevenBallSurface); ?></td>
            <td class="text-danger"><?php percent($unevenBallSurface, $Checked); ?></td>
            <td class="center"><?php r($unshapecut); ?></td>
            <td class="text-danger"><?php percent($unshapecut, $Checked); ?></td>
            <td class="center"><?php r($zigzagedge); ?></td>
            <td class="text-danger"><?php percent($zigzagedge, $Checked); ?></td>

            <td class="center"><?php r($cuttingpanel); ?></td>
            <td class="text-danger"><?php percent($cuttingpanel, $Checked); ?></td>

            <td class="center"><?php r($heavyprintdefects); ?></td>
            <td class="text-danger"><?php percent($heavyprintdefects, $Checked); ?></td>

            <td class="center"><?php r($NewTouching); ?></td>
            <td class="text-danger"><?php percent($NewTouching, $Checked); ?></td>

            <td class="center"><?php r($printmissallignament); ?></td>
            <td class="text-danger"><?php percent($printmissallignament, $Checked); ?></td>

            <td class="center"><?php r($anymisprint); ?></td>
            <td class="text-danger"><?php percent($anymisprint, $Checked); ?></td>

            <td class="center"><?php r($colourShape); ?></td>
            <td class="text-danger"><?php percent($colourShape, $Checked); ?></td>

            <td class="center"><?php r($wrongartwork); ?></td>
            <td class="text-danger"><?php percent($wrongartwork, $Checked); ?></td>

            <td class="center"><?php r($materialdefects); ?></td>
            <td class="text-danger"><?php percent($materialdefects, $Checked); ?></td>

            <td class="center"><?php r($newopenSeam); ?></td>
            <td class="text-danger"><?php percent($newopenSeam, $Checked); ?></td>

            <td class="center"><?php r($seamoverlapping); ?></td>
            <td class="text-danger"><?php percent($seamoverlapping, $Checked); ?></td>

            <td class="center"><?php r($Wrinkle); ?></td>
            <td class="text-danger"><?php percent($Wrinkle, $Checked); ?></td>

            <td class="center"><?php r($excussglue); ?></td>
            <td class="text-danger"><?php percent($excussglue, $Checked); ?></td>
            <td class="center"><?php r($missingglue); ?></td>
            <td class="text-danger"><?php percent($missingglue, $Checked); ?></td>

            <td class="center"><?php r($pressoremark); ?></td>
            <td class="text-danger"><?php percent($pressoremark, $Checked); ?></td>
            <td class="center"><?php r($airbubble); ?></td>
            <td class="text-danger"><?php percent($airbubble, $Checked); ?></td>
            <td class="center"><?php r($dirty); ?></td>
            <td class="text-danger"><?php percent($dirty, $Checked); ?></td>
        </tr>
    </tbody>
</table>
<h2 class="bg-primary-200 text-light text-white p-2 text-center">Airless Mini Ball Packing Station Wise QC ( <?php format($start_date);
                                                                                                                echo " To ";
                                                                                                                format($end_date) ?> )</h2>
<table class="table table-hover table-bordered table-responsive" id="packing-StationWise">
    <thead>
        <tr class="bg-primary-200 text-light">
            <th>Date</th>
            <th>Station Name</th>
            <th>Line Name</th>
            <th>Article Code</th>
            <th>Size</th>
            <th>Checked</th>
            <th>Pass</th>
            <th>RFT</th>
            <th>Fail Qty</th>
            <th>%</th>
            <th>Uneven Ball Surface</th>
            <th>%</th>
            <th>Un Sharped Cut</th>
            <th>%</th>
            <th>Zig Zag Edge</th>
            <th>%</th>
            <th> Cutting Panel</th>
            <th>%</th>
            <th>Print Defects</th>
            <th>%</th>
            <th>Touching</th>
            <th>%</th>
            <th>Miss Allignament</th>
            <th>%</th>
            <th>Any Mis Print</th>
            <th>%</th>
            <th>Colour Shape</th>
            <th>%</th>
            <th>Wrong Art Work</th>
            <th>%</th>
            <th>Material Defects</th>
            <th>%</th>
            <th> Open Seam</th>
            <th>%</th>

            <th> Seam Over Lapping</th>
            <th>%</th>
            <th> Wrinkle </th>
            <th>%</th>
            <th> Excuss Glue</th>
            <th>%</th>
            <th> Missing Glue</th>
            <th>%</th>
            <th> Pressore Mark</th>
            <th>%</th>
            <th> Air Bubble</th>
            <th>%</th>
            <th> Dirty</th>
            <th>%</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $Checked = 0;
        $passQ = 0;

        $unevenBallSurface = 0;
        $unshapecut = 0;
        $zigzagedge = 0;
        $cuttingpanel = 0;
        $heavyprintdefects = 0;
        $NewTouching = 0;
        $printmissallignament = 0;
        $anymisprint = 0;
        $colourShape = 0;
        $wrongartwork = 0;
        $materialdefects = 0;
        $newopenSeam = 0;
        $seamoverlapping = 0;
        $Wrinkle = 0;
        $excussglue = 0;
        $missingglue = 0;
        $pressoremark = 0;
        $airbubble = 0;
        $dirty = 0;
        $FailQty = 0;
        ?>
        <?php foreach ($StationwiseOutput as $d) {; ?>
            <tr>
                <?php
                $passQ = ($d->Pass) + $passQ;
                $Checked = ($d->TotalChecked) + $Checked;

                $unevenBallSurface = ($d->unevenBallSurface) + $unevenBallSurface;
                $unshapecut = ($d->unshapecut) + $unshapecut;
                $zigzagedge = ($d->zigzagedge) + $zigzagedge;
                $cuttingpanel = ($d->cuttingpanel) + $cuttingpanel;
                $heavyprintdefects = ($d->heavyprintdefects) + $heavyprintdefects;
                $NewTouching = ($d->NewTouching) + $NewTouching;
                $printmissallignament = ($d->printmissallignament) + $printmissallignament;
                $anymisprint = ($d->anymisprint) + $anymisprint;
                $colourShape = ($d->colourShape) + $colourShape;
                $wrongartwork = ($d->wrongartwork) + $wrongartwork;
                $materialdefects = ($d->materialdefects) + $materialdefects;
                $newopenSeam = ($d->newopenSeam) + $newopenSeam;
                $seamoverlapping = ($d->seamoverlapping) + $seamoverlapping;
                $Wrinkle = ($d->Wrinkle) + $Wrinkle;
                $excussglue = ($d->excussglue) + $excussglue;
                $missingglue = ($d->missingglue) + $missingglue;
                $pressoremark = ($d->pressoremark) + $pressoremark;
                $airbubble = ($d->airbubble) + $airbubble;
                $dirty = ($d->Dirty) + $dirty;
                ?>
                <td><?php format($d->DateName); ?></td>
                <td><?php echo $d->StationName; ?></td>
                <td><?php echo $d->LineName; ?></td>
                <td><?php echo $d->ArtCode; ?></td>
                <td><?php echo $d->ArtSize; ?></td>

                <td class="center"><?php r($d->TotalChecked); ?></td>
                <td class="center"><?php r($d->Pass); ?></td>
                <?php
                $RFT = (($d->Pass) / ($d->TotalChecked)) * 100;
                ?>
                <td class="center"><?php r($RFT); ?>%</td>
                <?php
                $passasas = $d->Pass;
                $Fail = ($d->TotalChecked) - $passasas;
                $FailQty = $Fail + $FailQty;
                ?>

                <td class="center"><?php echo $Fail;
                                    ?></td>
                <td class="text-danger"><?php percent($Fail, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->unevenBallSurface); ?></td>
                <td class="text-danger"><?php percent($d->unevenBallSurface, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->unshapecut); ?></td>
                <td class="text-danger"><?php percent($d->unshapecut, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->zigzagedge); ?></td>
                <td class="text-danger"><?php percent($d->zigzagedge, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->cuttingpanel); ?></td>
                <td class="text-danger"><?php percent($d->cuttingpanel, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->heavyprintdefects); ?></td>
                <td class="text-danger"><?php percent($d->heavyprintdefects, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->NewTouching); ?></td>
                <td class="text-danger"><?php percent($d->NewTouching, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->printmissallignament); ?></td>
                <td class="text-danger"><?php percent($d->printmissallignament, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->anymisprint); ?></td>
                <td class="text-danger"><?php percent($d->anymisprint, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->colourShape); ?></td>
                <td class="text-danger"><?php percent($d->colourShape, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->wrongartwork); ?></td>
                <td class="text-danger"><?php percent($d->wrongartwork, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->materialdefects); ?></td>
                <td class="text-danger"><?php percent($d->materialdefects, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->newopenSeam); ?></td>
                <td class="text-danger"><?php percent($d->newopenSeam, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->seamoverlapping); ?></td>
                <td class="text-danger"><?php percent($d->seamoverlapping, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->Wrinkle); ?></td>
                <td class="text-danger"><?php percent($d->Wrinkle, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->excussglue); ?></td>
                <td class="text-danger"><?php percent($d->excussglue, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->missingglue); ?></td>
                <td class="text-danger"><?php percent($d->missingglue, $d->TotalChecked); ?></td>

                <td class="center"><?php r($d->pressoremark); ?></td>
                <td class="text-danger"><?php percent($d->pressoremark, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->airbubble); ?></td>
                <td class="text-danger"><?php percent($d->airbubble, $d->TotalChecked); ?></td>
                <td class="center"><?php r($d->Dirty); ?></td>
                <td class="text-danger"><?php percent($d->Dirty, $d->TotalChecked); ?></td>
            </tr>
        <?php }; ?>
        <tr style="color:black;">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td> Total</td>
            <td class="center"><?php r($Checked); ?></td>

            <td class="center"><?php r($passQ); ?></td>
            <?php
            if ($passQ == 0 or $Checked == 0) {
                $RFT = 0;
            } else {
                $RFT = ($passQ / ($Checked)) * 100;
            }
            ?>
            <td class="center"><?php echo  r($RFT); ?> %</td>


            <td class="center"><?php r($FailQty); ?></td>
            <td class="text-danger"><?php percent($FailQty, $Checked); ?></td>
            <td class="center"><?php r($unevenBallSurface); ?></td>
            <td class="text-danger"><?php percent($unevenBallSurface, $Checked); ?></td>
            <td class="center"><?php r($unshapecut); ?></td>
            <td class="text-danger"><?php percent($unshapecut, $Checked); ?></td>
            <td class="center"><?php r($zigzagedge); ?></td>
            <td class="text-danger"><?php percent($zigzagedge, $Checked); ?></td>

            <td class="center"><?php r($cuttingpanel); ?></td>
            <td class="text-danger"><?php percent($cuttingpanel, $Checked); ?></td>

            <td class="center"><?php r($heavyprintdefects); ?></td>
            <td class="text-danger"><?php percent($heavyprintdefects, $Checked); ?></td>

            <td class="center"><?php r($NewTouching); ?></td>
            <td class="text-danger"><?php percent($NewTouching, $Checked); ?></td>

            <td class="center"><?php r($printmissallignament); ?></td>
            <td class="text-danger"><?php percent($printmissallignament, $Checked); ?></td>

            <td class="center"><?php r($anymisprint); ?></td>
            <td class="text-danger"><?php percent($anymisprint, $Checked); ?></td>

            <td class="center"><?php r($colourShape); ?></td>
            <td class="text-danger"><?php percent($colourShape, $Checked); ?></td>

            <td class="center"><?php r($wrongartwork); ?></td>
            <td class="text-danger"><?php percent($wrongartwork, $Checked); ?></td>

            <td class="center"><?php r($materialdefects); ?></td>
            <td class="text-danger"><?php percent($materialdefects, $Checked); ?></td>

            <td class="center"><?php r($newopenSeam); ?></td>
            <td class="text-danger"><?php percent($newopenSeam, $Checked); ?></td>

            <td class="center"><?php r($seamoverlapping); ?></td>
            <td class="text-danger"><?php percent($seamoverlapping, $Checked); ?></td>

            <td class="center"><?php r($Wrinkle); ?></td>
            <td class="text-danger"><?php percent($Wrinkle, $Checked); ?></td>

            <td class="center"><?php r($excussglue); ?></td>
            <td class="text-danger"><?php percent($excussglue, $Checked); ?></td>
            <td class="center"><?php r($missingglue); ?></td>
            <td class="text-danger"><?php percent($missingglue, $Checked); ?></td>

            <td class="center"><?php r($pressoremark); ?></td>
            <td class="text-danger"><?php percent($pressoremark, $Checked); ?></td>
            <td class="center"><?php r($airbubble); ?></td>
            <td class="text-danger"><?php percent($airbubble, $Checked); ?></td>
            <td class="center"><?php r($dirty); ?></td>
            <td class="text-danger"><?php percent($dirty, $Checked); ?></td>
        </tr>
    </tbody>
</table>
<script src="<?php echo base_url(); ?>/assets/js/highcharts.js"></script>
<!-- <script src="<?php echo base_url(); ?>/assets/js/data.js"></script> -->
<script src="<?php echo base_url(); ?>/assets/js/series-label.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/drilldown.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/exporting.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/export-data.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/accessibility.js"></script>

<script>
    Highcharts.chart('graphContent', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Airless Mini Ball Fresh Ball Forming QC (<?php echo $start_date . ' To ' . $end_date; ?>)'
        },

        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Airless Mini Ball Fresh Ball Forming QC (<?php echo $start_date . ' To ' . $end_date; ?>)'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 1,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:13px">{point.name}</span><br>',
            // headerFormat: '<span style="font-size:13px">{point.y:f}</span>:%<br>',
            pointFormat: '<span style="color:{point.color}">{point.y}</span><br/>'
        },

        series: [{
            name: "Production",
            colorByPoint: true,
            data: <?php echo json_encode($data_points1, JSON_NUMERIC_CHECK); ?>,

        }]
    });
</script>
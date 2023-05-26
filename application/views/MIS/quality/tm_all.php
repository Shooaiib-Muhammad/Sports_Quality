<h2 class="bg-primary-200 text-light p-2 text-center"><?php echo $title; ?> Forming QC <?php echo "( $start_date to $end_date )"; ?>
</h2>
<!-- <?php print_r($data); ?> -->
<table class="table table-bordered table-hover table-responsive table-striped w-100" id="forming-table">
    <thead>
        <tr class="bg-primary-200 text-light">
            <th>Date</th>
            <th style="text-align: center;">Total Checked</th>
            <th style="width:20%; text-align: center;">Total Pass</th>
            <th style="width:20%; text-align: center;">Total Fail</th>
            <th style="width:15%; text-align: center;">MaterialDefect</th>

            <th>SeamDefect</th>
            <th>SeamOverlaping</th>
            <th>Wrinkles</th>

            <th>ExcessGlue</th>
            <th>PressureMarks</th>
            <th>AirBubble</th>
            <th>TouchingPeelingOff</th>
            <th>PrintMisalignment</th>
            <th>WrongeArtwork</th>
            <th>MoldMark</th>
            <th>ColourShade</th>
            <th>ValveNozzleMove</th>
            <th>DShape</th>
            <th>Oversize</th>
            <th>UnderSize</th>
            <th>OverWeight</th>
            <th>UnderWeight</th>
            <th>MissGlue</th>


        </tr>
    </thead>
    <tbody>
        <?php
        $TotalChecked1 = 0;
        $TotalPass1 = 0;
        $Fail1 = 0;
        $MaterialDefect1 = 0;
        $SeamDefect1 = 0;
        $SeamOverlaping1 = 0;
        $Wrinkles1 = 0;

        $ExcessGlue1 = 0;
        $PressureMarks1 = 0;
        $AirBubble1 = 0;

        $TouchingPeelingOff1 = 0;
        $PrintMisalignment1 = 0;
        $WrongeArtwork1 = 0;
        $MoldMark1 = 0;
        $ColourShade1 = 0;
        $ValveNozzleMove1 = 0;
        $DShape1 = 0;
        $Oversize1 = 0;
        $UnderSize1 = 0;
        $OverWeight1 = 0;
        $UnderWeight1 = 0;
        $MissGlue1 = 0;

        foreach ($data as $d) {
            // Sum the value
            $TotalChecked1 += $d['TotalChecked'];
            $TotalPass1 += $d['TotalPass'];
            $Fail1 += $d['Fail'];
            $MaterialDefect1 += $d['MaterialDefect'];
            $SeamDefect1 += $d['SeamDefect'];
            $SeamOverlaping1 += $d['SeamOverlaping'];
            $Wrinkles1 += $d['Wrinkles'];

            $ExcessGlue1 += $d['ExcessGlue'];
            $PressureMarks1 += $d['PressureMarks'];
            $AirBubble1 += $d['AirBubble'];

            $TouchingPeelingOff1 += $d['TouchingPeelingOff'];
            $PrintMisalignment1 += $d['PrintMisalignment'];
            $WrongeArtwork1 += $d['WrongeArtwork'];
            $MoldMark1 += $d['MoldMark'];
            $ColourShade1 += $d['ColourShade'];
            $ValveNozzleMove1 += $d['ValveNozzleMove'];
            $DShape1 += $d['DShape'];
            $Oversize1 += $d['Oversize'];
            $UnderSize1 += $d['UnderSize'];
            $OverWeight1 += $d['OverWeight'];
            $UnderWeight1 += $d['UnderWeight'];
            $MissGlue1 += $d['MissGlue'];
            //End Sum the value


            $Datee = substr($d['DateName'], 0, 11);
            $TotalChecked = $d['TotalChecked'];
            $TotalPass = $d['TotalPass'];
            $Fail = $d['Fail'];
            $MaterialDefect = $d['MaterialDefect'];
            $SeamDefect = $d['SeamDefect'];
            $SeamOverlaping = $d['SeamOverlaping'];
            $Wrinkles = $d['Wrinkles'];

            $ExcessGlue = $d['ExcessGlue'];
            $PressureMarks = $d['PressureMarks'];
            $AirBubble = $d['AirBubble'];

            $TouchingPeelingOff = $d['TouchingPeelingOff'];
            $PrintMisalignment = $d['PrintMisalignment'];
            $WrongeArtwork = $d['WrongeArtwork'];
            $MoldMark = $d['MoldMark'];
            $ColourShade = $d['ColourShade'];
            $ValveNozzleMove = $d['ValveNozzleMove'];
            $DShape = $d['DShape'];
            $Oversize = $d['Oversize'];
            $UnderSize = $d['UnderSize'];
            $OverWeight = $d['OverWeight'];
            $UnderWeight = $d['UnderWeight'];
            $MissGlue = $d['MissGlue'];


        ?>
            <tr class="text-center">
                <td><?php echo $Datee; ?></td>

                <td><?php echo intval($TotalChecked); ?></td>
                <td><?php echo intval($TotalPass); ?></td>
                <td><?php echo intval($Fail); ?></td>
                <td><?php echo $MaterialDefect; ?></td>
                <td><?php echo $SeamDefect; ?></td>
                <td><?php echo $SeamOverlaping; ?></td>
                <td><?php echo $Wrinkles; ?></td>

                <td><?php echo $ExcessGlue; ?></td>
                <td><?php echo $PressureMarks; ?></td>
                <td><?php echo $AirBubble; ?></td>

                <td><?php echo $TouchingPeelingOff; ?></td>
                <td><?php echo $PrintMisalignment; ?></td>
                <td><?php echo $WrongeArtwork; ?></td>
                <td><?php echo $MoldMark; ?></td>
                <td><?php echo $ColourShade; ?></td>
                <td><?php echo $ValveNozzleMove; ?></td>
                <td><?php echo $DShape; ?></td>
                <td><?php echo $Oversize; ?></td>
                <td><?php echo $UnderSize; ?></td>
                <td><?php echo $OverWeight; ?></td>
                <td><?php echo $UnderWeight; ?></td>
                <td><?php echo $MissGlue; ?></td>


            </tr>
        <?php }; ?>

    </tbody>
    <tfoot>
    <tr class="bg-primary-200 text-light">
        <td>Total: </td>
        <td><?php echo $TotalChecked1;?> </td>
        <td><?php echo $TotalPass1;?> </td>
        <td><?php echo $Fail1;?> </td>
        <td><?php echo $MaterialDefect1;?> </td>
        <td><?php echo $SeamDefect1;?> </td>
        <td><?php echo $SeamOverlaping1;?> </td>
        <td><?php echo $Wrinkles1;?> </td>

        <td><?php echo $ExcessGlue1;?> </td>
        <td><?php echo $PressureMarks1;?> </td>
        <td><?php echo $AirBubble1;?> </td>

        <td><?php echo $TouchingPeelingOff1;?> </td>
        <td><?php echo $PrintMisalignment1;?> </td>
        <td><?php echo $WrongeArtwork1;?> </td>
        <td><?php echo $MoldMark1;?> </td>
        <td><?php echo $ColourShade1;?> </td>
        <td><?php echo $ValveNozzleMove1;?> </td>
        <td><?php echo $DShape1;?> </td>
        <td><?php echo $Oversize1;?> </td>
        <td><?php echo $UnderSize1;?> </td>
        <td><?php echo $OverWeight1;?> </td>
        <td><?php echo $UnderWeight1;?> </td>
        <td><?php echo $MissGlue1;?> </td>
            </tr>
    </tfoot>
</table>

<div id="container"></div>


<h2 class="bg-primary-200 text-light p-2 text-center"><?php echo $title; ?> Final QC <?php echo "( $start_date to $end_date )"; ?></h2>
<table class="table table-bordered table-hover table-responsive table-striped w-100" id="packing-table">
    <thead>
        <tr class="bg-primary-200 text-light">
            <th>Dates</th>
            <th>Checked</th>
            <th>Pass</th>
            <th>Fail</th>
            <th>RFT</th>
            <th>B Grade</th>
            <th>%</th>
            <th>Printing</th>
            <th>%</th>
            <th> Panel Defect</th>
            <th>%</th>
            <th>Panel Gap</th>
            <th>%</th>
            <th>Under Weight</th>
            <th>%</th>
            <th>Over Weight</th>
            <th>%</th>
            <th>Touching</th>
            <th>%</th>
            <th>D Shape</th>
            <th>%</th>
            <th>Nozel Move</th>
            <th>%</th>
            <th>Art Work</th>
            <th>%</th>
            <th>Dirty</th>
            <th>%</th>
            <th>Over Size</th>
            <th>%</th>
            <th>Seam Alligment</th>
            <th>%</th>
            <th>leak Puncture </th>
            <th>%</th>
            <th>Mold Mark</th>
            <th>%</th>
            <th>Wrinkle</th>
            <th>%</th>
            <th>Under Size</th>
            <th>%</th>
            <th>Printng Alligment</th>
            <th>%</th>
            <th>Air Bubble</th>
            <th>%</th>
            <th>Dull</th>
            <th>%</th>
            <th>Over Lapping</th>
            <th>%</th>
            <th>Pressure Mark</th>
            <th>%</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($data2 as $d) {; ?>
            <tr>
                <td><?php format($d->DailyDate); ?></td>
                <td><?php r($d->Checked); ?></td>
                <td><?php r($d->Pass); ?></td>
                <td><?php r($d->FailQty); ?></td>
                <td><?php percent($d->Pass, $d->Checked); ?></td>
                <td><?php r($d->BGrade); ?></td>
                <td><?php percent($d->BGrade, $d->Checked); ?></td>
                <td><?php r($d->Printing); ?></td>
                <td><?php percent($d->Printing, $d->Checked); ?></td>
                <td><?php r($d->PanelDefect); ?></td>
                <td><?php percent($d->PanelDefect, $d->Checked); ?></td>
                <td><?php r($d->Cavity); ?></td>
                <td><?php percent($d->Cavity, $d->Checked); ?></td>
                <td><?php r($d->UnderWeight); ?></td>
                <td><?php percent($d->UnderWeight, $d->Checked); ?></td>
                <td><?php r($d->OverWeight); ?></td>
                <td><?php percent($d->OverWeight, $d->Checked); ?></td>
                <td><?php r($d->Touching); ?></td>
                <td><?php percent($d->Touching, $d->Checked); ?></td>
                <td><?php r($d->DShape); ?></td>
                <td><?php percent($d->DShape, $d->Checked); ?></td>
                <td><?php r($d->Puncture); ?></td>
                <td><?php percent($d->Puncture, $d->Checked); ?></td>
                <td><?php r($d->ArtWork); ?></td>
                <td><?php percent($d->ArtWork, $d->Checked); ?></td>
                <td><?php r($d->Dirty); ?></td>
                <td><?php percent($d->Dirty, $d->Checked); ?></td>
                <td><?php r($d->OverSize); ?></td>
                <td><?php percent($d->OverSize, $d->Checked); ?></td>
                <td><?php r($d->SeamAlligment); ?></td>
                <td><?php percent($d->SeamAlligment, $d->Checked); ?></td>
                <td><?php r($d->LeakPuncture); ?></td>
                <td><?php percent($d->LeakPuncture, $d->Checked); ?></td>
                <td><?php r($d->Moldmark); ?></td>
                <td><?php percent($d->Moldmark, $d->Checked); ?></td>
                <td><?php r($d->Wrinkle); ?></td>
                <td><?php percent($d->Wrinkle, $d->Checked); ?></td>
                <td><?php r($d->UnderSize); ?></td>
                <td><?php percent($d->UnderSize, $d->Checked); ?></td>
                <td><?php r($d->PrintingAlligment); ?></td>
                <td><?php percent($d->PrintingAlligment, $d->Checked); ?></td>
                <td><?php r($d->AirBubble); ?></td>
                <td><?php percent($d->AirBubble, $d->Checked); ?></td>
                <td><?php r($d->Dull); ?></td>
                <td><?php percent($d->Dull, $d->Checked); ?></td>
                <td><?php r($d->Overlaping); ?></td>
                <td><?php percent($d->Overlaping, $d->Checked); ?></td>
                <td><?php r($d->Indent); ?></td>
                <td><?php percent($d->Indent, $d->Checked); ?></td>


            </tr>
        <?php }; ?>


        <?php foreach ($data2sum as $d) {; ?>
            <tr>
                <td>Total is</td>
                <td><?php r($d->Checked); ?></td>
                <td><?php r($d->Pass); ?></td>
                <td><?php r($d->FailQty); ?></td>
                <td><?php percent($d->Pass, $d->Checked); ?></td>
                <td><?php r($d->BGrade); ?></td>
                <td><?php percent($d->BGrade, $d->Checked); ?></td>
                <td><?php r($d->Printing); ?></td>
                <td><?php percent($d->Printing, $d->Checked); ?></td>
                <td><?php r($d->PanelDefect); ?></td>
                <td><?php percent($d->PanelDefect, $d->Checked); ?></td>
                <td><?php r($d->Cavity); ?></td>
                <td><?php percent($d->Cavity, $d->Checked); ?></td>
                <td><?php r($d->UnderWeight); ?></td>
                <td><?php percent($d->UnderWeight, $d->Checked); ?></td>
                <td><?php r($d->OverWeight); ?></td>
                <td><?php percent($d->OverWeight, $d->Checked); ?></td>
                <td><?php r($d->Touching); ?></td>
                <td><?php percent($d->Touching, $d->Checked); ?></td>
                <td><?php r($d->DShape); ?></td>
                <td><?php percent($d->DShape, $d->Checked); ?></td>
                <td><?php r($d->Puncture); ?></td>
                <td><?php percent($d->Puncture, $d->Checked); ?></td>
                <td><?php r($d->ArtWork); ?></td>
                <td><?php percent($d->ArtWork, $d->Checked); ?></td>
                <td><?php r($d->Dirty); ?></td>
                <td><?php percent($d->Dirty, $d->Checked); ?></td>
                <td><?php r($d->OverSize); ?></td>
                <td><?php percent($d->OverSize, $d->Checked); ?></td>
                <td><?php r($d->SeamAlligment); ?></td>
                <td><?php percent($d->SeamAlligment, $d->Checked); ?></td>
                <td><?php r($d->LeakPuncture); ?></td>
                <td><?php percent($d->LeakPuncture, $d->Checked); ?></td>
                <td><?php r($d->Moldmark); ?></td>
                <td><?php percent($d->Moldmark, $d->Checked); ?></td>
                <td><?php r($d->Wrinkle); ?></td>
                <td><?php percent($d->Wrinkle, $d->Checked); ?></td>
                <td><?php r($d->UnderSize); ?></td>
                <td><?php percent($d->UnderSize, $d->Checked); ?></td>
                <td><?php r($d->PrintingAlligment); ?></td>
                <td><?php percent($d->PrintingAlligment, $d->Checked); ?></td>
                <td><?php r($d->AirBubble); ?></td>
                <td><?php percent($d->AirBubble, $d->Checked); ?></td>
                <td><?php r($d->Dull); ?></td>
                <td><?php percent($d->Dull, $d->Checked); ?></td>
                <td><?php r($d->Overlaping); ?></td>
                <td><?php percent($d->Overlaping, $d->Checked); ?></td>
                <td><?php r($d->Indent); ?></td>
                <td><?php percent($d->Indent, $d->Checked); ?></td>

            </tr>
        <?php }; ?>

    </tbody>
</table>


<div id="container2"></div>
<h2 class="bg-primary-200 text-light p-2 text-center"><?php echo $title; ?> PO Wise Details <?php echo "( $start_date to $end_date )"; ?></h2>
<table class="table table-bordered table-hover table-responsive table-striped w-100" id="forming-table1">
    <thead>
        <tr class="bg-primary-200 text-light">
            <th>Dates</th>
            <th>PO Code.</th>
            <th>Article</th>
            <th>Size</th>
            <th>Order Qty</th>
            <th>Checked</th>
            <th>Pass</th>
            <th>Fail</th>
            <th>RFT</th>
            <th>Balance</th>



        </tr>
    </thead>
    <tbody>
        <?php

        $Inspected1 = 0;
        $Pass1 = 0;
        $Fail1 = 0;

        $OrderQty1 = 0;

        foreach ($POSum as $d) {;
            $balance = ($d->OrderQty) - ($d->Pass);
            $RFT = ($d->Inspected / $d->Pass) * 100;
        ?>
            <tr>
                <td><?php format($d->EntryDate); ?></td>
                <td><?php echo $d->POCode; ?></td>
                <td><?php echo $d->ArtCode; ?></td>
                <td><?php echo $d->ArtSize; ?></td>
                <td><?php echo $d->OrderQty; ?></td>

                <td><?php r($d->Inspected); ?></td>
                <td><?php r($d->Pass); ?></td>
                <td><?php r($d->Fail); ?></td>
                <td><?php r($RFT); ?></td>
                <td style="color:red;"><?php r($balance); ?></td>
            </tr>
        <?php
            $Inspected1 = ($d->Inspected) + $Inspected1;
            $Pass1 = ($d->Pass) + $Pass1;
            $Fail1 = ($d->Fail) + $Fail1;
            $OrderQty1 = ($d->OrderQty) + $OrderQty1;;
        }; ?>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Total:</td>
            <td><?php echo $OrderQty1; ?></td>

            <td><?php r($Inspected1); ?></td>
            <td><?php r($Pass1); ?></td>
            <td><?php r($Fail1); ?></td>
            <?php
            $balance = ($OrderQty1) - ($Pass1);
            if ($Pass1 != null) {
                $RFT = ($Inspected1 / $Pass1) * 100;
            } else {
                $RFT = null;
            }
            ?>
            <td><?php r($RFT); ?></td>
            <td style="color:red;"><?php r($balance); ?></td>
        </tr>

    </tbody>
</table>

<script>
    chart1 = <?php echo $chart1; ?>[0]
    chart2 = <?php echo $chart2; ?>[0]
    if (chart1 != undefined) {
        checked = chart1.Checked
        delete chart1.CheckedQty
        delete chart1.Pass
        delete chart1.TMRollNo
        delete chart1.Fail

        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: '<?php echo $title ?> Forming QC: <?php echo $start_date . " to " . $end_date ?>'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: Object.keys(chart1),
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: ''
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Defects',
                data: Object.values(chart1).map(function(val) {
                    return parseFloat(val)
                })

            }]
        });
    }

    if (chart2 != undefined) {
        delete chart2.Checked
        delete chart2.Pass
        delete chart2.TMRollNo
        delete chart2.FailQty

        Highcharts.chart('container2', {
            chart: {
                type: 'column'
            },
            title: {
                text: '<?php echo $title ?> Final QC: <?php echo $start_date . " to " . $end_date ?>'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: Object.keys(chart2),
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: ''
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Defects',
                data: Object.values(chart2).map(function(val) {
                    return parseFloat(val)
                })

            }]
        });
    }
</script>
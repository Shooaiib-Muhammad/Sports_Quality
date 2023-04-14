<h2 class="bg-primary-200 text-light p-2 text-center"><?php echo $title; ?> Forming QC <?php echo "( $start_date to $end_date )"; ?>
</h2>
<table class="table table-bordered table-hover table-responsive table-striped w-100" id="forming-table">
    <thead>
        <tr class="bg-primary-200 text-light">
            <th>Dates</th>
            <th>Checked</th>
            <th>Pass</th>
            <th>Fail </th>
            <td>RFT</td>
            <th>B Grade </th>
            <td>%</td>
            <th>Panel DMG</th>
            <td>%</td>
            <th>Bubble</th>
            <td>%</td>
            <th>Alignment</th>
            <td>%</td>
            <th>Corner</th>
            <td>%</td>
            <th>Touching</th>
            <td>%</td>
            <th>Wrong Art Work</th>
            <td>%</td>
            <th>Nozzle Move</th>
            <td>%</td>
            <th>Over lapping</th>
            <td>%</td>
            <th>Cavity</th>
            <td>%</td>
            <th>leak Puncture </th>
            <td>%</td>
            <th>Mold Mark</th>
            <td>%</td>
            <th>Wrinkle</th>
            <td>%</td>
            <th>Dirty</th>
            <td>%</td>
            <th>Pressure Mark</th>
            <td>%</td>
            <th>Printing</th>
            <td>%</td>
            <th>Open Seam</th>
            <td>%</td>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $d) {; ?>
        <tr class="text-center">
            <td><?php format($d->DailyDate); ?></td>
            <td><?php r($d->CheckedQty); ?></td>
            <td><?php r($d->Pass); ?></td>
            <td><?php r($d->Fail); ?></td>
            <td><?php percent($d->Pass, $d->CheckedQty); ?></td>
            <td><?php r($d->BGrade); ?></td>
            <td><?php percent($d->BGrade, $d->CheckedQty); ?></td>
            <td><?php r($d->PanelDMG); ?></td>
            <td><?php percent($d->PanelDMG, $d->CheckedQty); ?></td>
            <td><?php r($d->Bubble); ?></td>
            <td><?php percent($d->Bubble, $d->CheckedQty); ?></td>
            <td><?php r($d->Alignment); ?></td>
            <td><?php percent($d->Alignment, $d->CheckedQty); ?></td>
            <td><?php r($d->Corner); ?></td>
            <td><?php percent($d->Corner, $d->CheckedQty); ?></td>
            <td><?php r($d->Touching); ?></td>
            <td><?php percent($d->Touching, $d->CheckedQty); ?></td>
            <td><?php r($d->WrongArtWork); ?></td>
            <td><?php percent($d->WrongArtWork, $d->CheckedQty); ?></td>
            <td><?php r($d->NozzleMove); ?></td>
            <td><?php percent($d->NozzleMove, $d->CheckedQty); ?></td>
            <td><?php r($d->Overlapping); ?></td>
            <td><?php percent($d->Overlapping, $d->CheckedQty); ?></td>
            <td><?php r($d->Cavity); ?></td>
            <td><?php percent($d->Cavity, $d->CheckedQty); ?></td>
            <td><?php r($d->LeakPuncture); ?></td>
            <td><?php percent($d->LeakPuncture, $d->CheckedQty); ?></td>
            <td><?php r($d->Moldmark); ?></td>
            <td><?php percent($d->Moldmark, $d->CheckedQty); ?></td>
            <td><?php r($d->Wrinkle); ?></td>
            <<thead>
            
            </thead>><?php percent($d->Wrinkle, $d->CheckedQty); ?></td>
            <td><?php r($d->Dirty); ?></td>
            <td><?php percent($d->Dirty, $d->CheckedQty); ?></td>
            <td><?php r($d->Indent); ?></td>
            <td><?php percent($d->Indent, $d->CheckedQty); ?></td>
            <td><?php r($d->Printing); ?></td>
            <td><?php percent($d->Printing, $d->CheckedQty); ?></td>
            <td><?php r($d->OpenSeam); ?></td>
            <td><?php percent($d->OpenSeam, $d->CheckedQty); ?></td>


        </tr>
        <?php }; ?>


        <?php foreach ($datasum as $d) {; ?>
        <tr>
            <td>Total</td>
            <td><?php r($d->CheckedQty); ?></td>
            <td><?php r($d->Pass); ?></td>
            <td><?php r($d->Fail); ?></td>
            <td><?php percent($d->Pass, $d->CheckedQty); ?></td>
            <td><?php r($d->BGrade); ?></td>
            <td><?php percent($d->BGrade, $d->CheckedQty); ?></td>
            <td><?php r($d->PanelDMG); ?></td>
            <td><?php percent($d->PanelDMG, $d->CheckedQty); ?></td>
            <td><?php r($d->Bubble); ?></td>
            <td><?php percent($d->Bubble, $d->CheckedQty); ?></td>
            <td><?php r($d->Alignment); ?></td>
            <td><?php percent($d->Alignment, $d->CheckedQty); ?></td>
            <td><?php r($d->Corner); ?></td>
            <td><?php percent($d->Corner, $d->CheckedQty); ?></td>
            <td><?php r($d->Touching); ?></td>
            <td><?php percent($d->Touching, $d->CheckedQty); ?></td>
            <td><?php r($d->WrongArtWork); ?></td>
            <td><?php percent($d->WrongArtWork, $d->CheckedQty); ?></td>
            <td><?php r($d->NozzleMove); ?></td>
            <td><?php percent($d->NozzleMove, $d->CheckedQty); ?></td>
            <td><?php r($d->Overlapping); ?></td>
            <td><?php percent($d->Overlapping, $d->CheckedQty); ?></td>
            <td><?php r($d->Cavity); ?></td>
            <td ><?php percent($d->Cavity, $d->CheckedQty); ?></td>
            <td><?php r($d->LeakPuncture); ?></td>
            <td><?php percent($d->LeakPuncture, $d->CheckedQty); ?></td>
            <td><?php r($d->Moldmark); ?></td>
            <td><?php percent($d->Moldmark, $d->CheckedQty); ?></td>
            <td><?php r($d->Wrinkle); ?></td>
            <td><?php percent($d->Wrinkle, $d->CheckedQty); ?></td>
            <td><?php r($d->Dirty); ?></td>
            <td><?php percent($d->Dirty, $d->CheckedQty); ?></td>
            <td><?php r($d->Indent); ?></td>
            <td ><?php percent($d->Indent, $d->CheckedQty); ?></td>
            <td><?php r($d->Printing); ?></td>
            <td><?php percent($d->Printing, $d->CheckedQty); ?></td>
            <td><?php r($d->OpenSeam); ?></td>
            <td><?php percent($d->OpenSeam, $d->CheckedQty); ?></td>
        </tr>
        <?php }; ?>

    </tbody>
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
            <td ><?php percent($d->PrintingAlligment, $d->Checked); ?></td>
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
        
        $Inspected1=0;
         $Pass1=0;
          $Fail1=0;
           
            $OrderQty1=0;
        
        foreach ($POSum as $d) {; 
            $balance=($d->OrderQty)-($d->Pass);
            $RFT=($d->Inspected/$d->Pass)*100;
            ?>
        <tr>
            <td><?php format($d->EntryDate); ?></td>
              <td><?php Echo $d->POCode; ?></td>
                 <td><?php Echo $d->ArtCode; ?></td>
                   <td><?php Echo $d->ArtSize; ?></td>
                     <td><?php Echo $d->OrderQty; ?></td>

            <td><?php r($d->Inspected); ?></td>
            <td><?php r($d->Pass); ?></td>
            <td><?php r($d->Fail); ?></td>
            <td><?php r($RFT); ?></td>
            <td style="color:red;"><?php r($balance); ?></td>
        </tr>
        <?php
     $Inspected1=($d->Inspected)+$Inspected1;
         $Pass1=($d->Pass)+$Pass1;
          $Fail1=($d->Fail)+$Fail1;
           $OrderQty1=($d->OrderQty)+$OrderQty1;;
     
    }; ?>

<tr>
           <td></td>
              <td></td>
                 <td></td>
                   <td>Total:</td>
                     <td><?php Echo $OrderQty1; ?></td>

            <td><?php r($Inspected1); ?></td>
            <td><?php r($Pass1); ?></td>
            <td><?php r($Fail1); ?></td>
            <?php
            $balance=($OrderQty1)-($Pass1);
            $RFT=($Inspected1/$Pass1)*100;
            ?>
            <td><?php r($RFT); ?></td>
            <td style="color:red;"><?php r($balance); ?></td>
        </tr>
        
    </tbody>
</table>

<script>
chart1 = <?php echo $chart1; ?> [0]
chart2 = <?php echo $chart2; ?> [0]
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
            text: '<?php echo $title?> Forming QC: <?php echo $start_date." to ".$end_date ?>'
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
            text: '<?php echo $title?> Final QC: <?php echo $start_date." to ".$end_date ?>'
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

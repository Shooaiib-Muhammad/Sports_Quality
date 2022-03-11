<style>


    td{
        text-align:center;
    }
</style>

<h2 class="bg-primary-200 text-light p-2 text-center"><?php echo $title; ?> Forming QC <?php echo "( $start_date to $end_date )"; ?>
</h2>
<div class="table-responsive">
<table class="table table-bordered table-hover table-responsive table-striped w-100" id="packing-table" id="forming-table">
    <thead>
        <tr class="bg-primary-200 text-light">
            <th>Date</th>
            <th>Art. Code </th>
            <th>Size</th>
            <th>Total Checked </th>
            <th>Total Passed</th>
            <th>Fail Qty</th>
            <th>RFT </th>
            <th>Over Size</th>
            <td>%</td>
            <th>D shape</th>
            <td>%</td>
            <th>Air Bubble</th>
            <td>%</td>
            <th>Print Alignment</th>
            <td>%</td>
            <th>Material Defects</th>
            <td>%</td>
            <th>Touching Peeling Off</th>
            <td>%</td>
            <th>Wrong Art Work</th>
            <td>%</td>
            <th>Nozzle Move</th>
            <td>%</td>
            <th>Seam Over lapping</th>
            <td>%</td>
            <th>Color Shade</th>
            <td>%</td>
            <th>Missing Glue </th>
            <td>%</td>
            <th>Mold Mark</th>
            <td>%</td>
            <th>Wrinkle</th>
            <td>%</td>
            <th>Excess Glue</th>
            <td>%</td>
            <th>Pressure Mark</th>
            <td>%</td>
            <th>Heavy Print Defects</th>
            <td>%</td>
            <th>Seam Defects</th>
            <td>%</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $d){; ?>
        <tr>
            <td><?php format($d->DateName); ?></td>
            <td><?php echo $d->ArtCode; ?></td>
            <td><?php echo $d->ArtSize; ?></td>
            <td><?php r($d->Inspected); ?></td>
            <td><?php r($d->PassQty); ?></td>
            <td><?php r($d->FailQty); ?></td>
            <td><?php percent($d->PassQty, $d->Inspected); ?></td>
            <td><?php r($d->BGrade); ?></td>
            <td><?php percent($d->BGrade, $d->Inspected); ?></td>
            <td><?php r($d->PanelDMG); ?></td>
            <td><?php percent($d->PanelDMG, $d->Inspected); ?></td>
            <td><?php r($d->Bubble); ?></td>
            <td><?php percent($d->Bubble, $d->Inspected); ?></td>
            <td><?php r($d->Alignment); ?></td>
            <td><?php percent($d->Alignment, $d->Inspected); ?></td>
            <td><?php r($d->Corner); ?></td>
            <td><?php percent($d->Corner, $d->Inspected); ?></td>
            <td><?php r($d->Touching); ?></td>
            <td><?php percent($d->Touching, $d->Inspected); ?></td>
            <td><?php r($d->WrongArtWork); ?></td>
            <td><?php percent($d->WrongArtWork, $d->Inspected); ?></td>
            <td><?php r($d->NozzleMove); ?></td>
            <td><?php percent($d->NozzleMove, $d->Inspected); ?></td>
            <td><?php r($d->Overlapping); ?></td>
            <td><?php percent($d->Overlapping, $d->Inspected); ?></td>
            <td><?php r($d->Cavity); ?></td>
            <td><?php percent($d->Cavity, $d->Inspected); ?></td>
            <td><?php r($d->LeakPuncture); ?></td>
            <td><?php percent($d->LeakPuncture, $d->Inspected); ?></td>
            <td><?php r($d->Moldmark); ?></td>
            <td><?php percent($d->Moldmark, $d->Inspected); ?></td>
            <td><?php r($d->Wrinkle); ?></td>
            <td><?php percent($d->Wrinkle, $d->Inspected); ?></td>
            <td><?php r($d->Dirty); ?></td>
            <td><?php percent($d->Dirty, $d->Inspected); ?></td>
            <td><?php r($d->Indent); ?></td>
            <td><?php percent($d->Indent, $d->Inspected); ?></td>
            <td><?php r($d->Printing); ?></td>
            <td><?php percent($d->Printing, $d->Inspected); ?></td>
            <td><?php r($d->OpenSeam); ?></td>
            <td><?php percent($d->OpenSeam, $d->Inspected); ?></td>

        </tr>
        <?php }; ?>

        <?php foreach($datasum as $d){; ?>
        <tr>
            <td></td>
            <td></td>
            <td>Total</td>
            <td><?php r($d->Inspected); ?></td>
            <td><?php r($d->PassQty); ?></td>
            <td><?php r($d->FailQty); ?></td>
            <td><?php percent($d->PassQty, $d->Inspected); ?></td>
            <td><?php r($d->BGrade); ?></td>
            <td<?php percent($d->BGrade, $d->Inspected); ?></td>
            <td><?php r($d->PanelDMG); ?></td>
            <td><?php percent($d->PanelDMG, $d->Inspected); ?></td>
            <td><?php r($d->Bubble); ?></td>
            <td><?php percent($d->Bubble, $d->Inspected); ?></td>
            <td><?php r($d->Alignment); ?></td>
            <td ><?php percent($d->Alignment, $d->Inspected); ?></td>
            <td><?php r($d->Corner); ?></td>
            <td><?php percent($d->Corner, $d->Inspected); ?></td>
            <td><?php r($d->Touching); ?></td>
            <td><?php percent($d->Touching, $d->Inspected); ?></td>
            <td><?php r($d->WrongArtWork); ?></td>
            <td><?php percent($d->WrongArtWork, $d->Inspected); ?></td>
            <td><?php r($d->NozzleMove); ?></td>
            <td><?php percent($d->NozzleMove, $d->Inspected); ?></td>
            <td><?php r($d->Overlapping); ?></td>
            <td><?php percent($d->Overlapping, $d->Inspected); ?></td>
            <td><?php r($d->Cavity); ?></td>
            <td><?php percent($d->Cavity, $d->Inspected); ?></td>
            <td><?php r($d->LeakPuncture); ?></td>
            <td><?php percent($d->LeakPuncture, $d->Inspected); ?></td>
            <td><?php r($d->Moldmark); ?></td>
            <td><?php percent($d->Moldmark, $d->Inspected); ?></td>
            <td><?php r($d->Wrinkle); ?></td>
            <td><?php percent($d->Wrinkle, $d->Inspected); ?></td>
            <td><?php r($d->Dirty); ?></td>
            <td><?php percent($d->Dirty, $d->Inspected); ?></td>
            <td><?php r($d->Indent); ?></td>
            <td><?php percent($d->Indent, $d->Inspected); ?></td>
            <td><?php r($d->Printing); ?></td>
            <td><?php percent($d->Printing, $d->Inspected); ?></td>
            <td><?php r($d->OpenSeam); ?></td>
            <td><?php percent($d->OpenSeam, $d->Inspected); ?></td>

        </tr>
        <?php }; ?>

    </tbody>
</table>
</div>
<h2 class="bg-primary-200 text-light p-2 text-center"><?php echo $title; ?> Final QC <?php echo "( $start_date to $end_date )"; ?>
</h2>
<div class="table-responsive">
<table class="table table-bordered table-hover table-responsive table-striped w-100" id="packing-table">
    <thead>
        <tr class="bg-primary-200 text-light">
            <th>Date</th>
            <th>Art. Code </th>
            <th>Size</th>
            <th>Total Checked </th>
            <th>Total Passed</th>
            <th>Fail Qty</th>
            <th>RFT </th>
            <th>Heavy Printing defects</th>
            <th>%</th>
            <th> Wrong Art Work</th>
            <th>%</th>
            <th>Seam Defects</th>
            <th>%</th>
            <th>Under Weight</th>
            <th>%</th>
            <th>Over Weight</th>
            <th>%</th>
            <th>Touching Peeling Off</th>
            <th>%</th>
            <th>D Shape</th>
            <th>%</th>
           
          
            <th>Wrinkle</th>
            <th>%</th>
            <th>Over Size</th>
            <th>%</th>
            <th>Excess Glue</th>
            <th>%</th>
            <th>Nozzel Move</th>
            <th>%</th>
            <th>Mold Mark</th>
            <th>%</th>
            <th>Air Bubble</th>
            <th>%</th>
            <th>Under Size</th>
            <th>%</th>
            <th>Printng Miss Alligment</th>
            <th>%</th>
            <th>Color Shade</th>
            <th>%</th>
            <th>Material Defects</th>
            <th>%</th>
            <th>Seam Over Lapping</th>
            <th>%</th>
            <th>Pressure Mark</th>
            <th>%</th>

        </tr>

    </thead>
    <tbody>
        <?php foreach($data2 as $d){; ?>
        <tr>
            <td><?php format($d->DateName); ?></td>
            <td><?php echo $d->ArtCode; ?></td>
            <td><?php echo $d->ArtSize; ?></td>
            <td><?php r($d->Inspected); ?></td>
            <td><?php r($d->PassQty); ?></td>
            <td><?php r($d->FailQty); ?></td>
            <td><?php percent($d->PassQty, $d->Inspected); ?></td>
            <td><?php r($d->Printing); ?></td>
            <td ><?php percent($d->Printing, $d->Inspected); ?></td>
            <td><?php r($d->PanelDefect); ?></td>
            <td ><?php percent($d->PanelDefect, $d->Inspected); ?></td>
            <td><?php r($d->Cavity); ?></td>
            <td><?php percent($d->Cavity, $d->Inspected); ?></td>
            <td><?php r($d->UnderWeight); ?></td>
            <td><?php percent($d->UnderWeight, $d->Inspected); ?></td>
            <td><?php r($d->OverWeight); ?></td>
            <td><?php percent($d->OverWeight, $d->Inspected); ?></td>
            <td><?php r($d->Touching); ?></td>
            <td><?php percent($d->Touching, $d->Inspected); ?></td>
            <td><?php r($d->DShape); ?></td>
            <td><?php percent($d->DShape, $d->Inspected); ?></td>
           
            <td><?php r($d->ArtWork); ?></td>
            <td><?php percent($d->ArtWork, $d->Inspected); ?></td>
            <td><?php r($d->Dirty); ?></td>
            <td><?php percent($d->Dirty, $d->Inspected); ?></td>
            <td><?php r($d->OverSize); ?></td>
            <td><?php percent($d->OverSize, $d->Inspected); ?></td>
            <td><?php r($d->SeamAlligment); ?></td>
            <td ><?php percent($d->SeamAlligment, $d->Inspected); ?></td>
          
            <td><?php r($d->Moldmark); ?></td>
            <td><?php percent($d->Moldmark, $d->Inspected); ?></td>
            <td><?php r($d->Wrinkle); ?></td>
            <td><?php percent($d->Wrinkle, $d->Inspected); ?></td>
            <td><?php r($d->UnderSize); ?></td>
            <td><?php percent($d->UnderSize, $d->Inspected); ?></td>
            <td><?php r($d->BGrade); ?></td>
            <td><?php percent($d->BGrade, $d->Inspected); ?></td>
            <td><?php r($d->AirBubble); ?></td>
            <td><?php percent($d->AirBubble, $d->Inspected); ?></td>
            <td><?php r($d->Dull); ?></td>
            <td><?php percent($d->Dull, $d->Inspected); ?></td>
            <td><?php r($d->Overlaping); ?></td>
            <td><?php percent($d->Overlaping, $d->Inspected); ?></td>
            <td><?php r($d->Indent); ?></td>
            <td><?php percent($d->Indent, $d->Inspected); ?></td>
        </tr>
        <?php }; ?>

        <?php foreach($data2sum as $d){; ?>
        <tr>
            <td></td>
            <td></td>
            <td>Total</td>
            <td><?php r($d->Inspected); ?></td>
            <td><?php r($d->PassQty); ?></td>
            <td><?php r($d->FailQty); ?></td>
            <td><?php percent($d->PassQty, $d->Inspected); ?></td>
            <td><?php r($d->Printing); ?></td>
            <td><?php percent($d->Printing, $d->Inspected); ?></td>
            <td><?php r($d->PanelDefect); ?></td>
            <td><?php percent($d->PanelDefect, $d->Inspected); ?></td>
            <td><?php r($d->Cavity); ?></td>
            <td><?php percent($d->Cavity, $d->Inspected); ?></td>
            <td><?php r($d->UnderWeight); ?></td>
            <td><?php percent($d->UnderWeight, $d->Inspected); ?></td>
            <td><?php r($d->OverWeight); ?></td>
            <td><?php percent($d->OverWeight, $d->Inspected); ?></td>
            <td><?php r($d->Touching); ?></td>
            <td><?php percent($d->Touching, $d->Inspected); ?></td>
            <td><?php r($d->DShape); ?></td>
            <td><?php percent($d->DShape, $d->Inspected); ?></td>
           
            <td><?php r($d->ArtWork); ?></td>
            <td><?php percent($d->ArtWork, $d->Inspected); ?></td>
            <td><?php r($d->Dirty); ?></td>
            <td><?php percent($d->Dirty, $d->Inspected); ?></td>
            <td><?php r($d->OverSize); ?></td>
            <td><?php percent($d->OverSize, $d->Inspected); ?></td>
            <td><?php r($d->SeamAlligment); ?></td>
            <td><?php percent($d->SeamAlligment, $d->Inspected); ?></td>
         
            <td><?php r($d->Moldmark); ?></td>
            <td><?php percent($d->Moldmark, $d->Inspected); ?></td>
            <td><?php r($d->Wrinkle); ?></td>
            <td><?php percent($d->Wrinkle, $d->Inspected); ?></td>
            <td><?php r($d->UnderSize); ?></td>
            <td><?php percent($d->UnderSize, $d->Inspected); ?></td>
            <td><?php r($d->BGrade); ?></td>
            <td><?php percent($d->BGrade, $d->Inspected); ?></td>
            <td><?php r($d->AirBubble); ?></td>
            <td><?php percent($d->AirBubble, $d->Inspected); ?></td>
            <td><?php r($d->Dull); ?></td>
            <td><?php percent($d->Dull, $d->Inspected); ?></td>
            <td><?php r($d->Overlaping); ?></td>
            <td><?php percent($d->Overlaping, $d->Inspected); ?></td>
            <td><?php r($d->Indent); ?></td>
            <td><?php percent($d->Indent, $d->Inspected); ?></td>
        </tr>
        <?php }; ?>
    </tbody>
</table>
</div>

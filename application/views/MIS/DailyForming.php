<Style>
  .center {
    text-align: center;
  }

  td {
    text-align: center;
  }
</style>
<h2 class="bg-primary text-white p-2 text-center">LFB Forming QC ( <?php format($start_date1);
                                                                    echo " To ";
                                                                    format($end_date1) ?> )</h2>
<!-- <?php print_r($data); ?> -->
<table class="table table-hover table-bordered table-responsive" id="forming-table">
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
      <th>HeavyPrintDefect</th>
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

  <tbody style="border:1px black solid; ">

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

    $HeavyPrintDefect1 = 0;
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
    if ($data) {
      foreach ($data as $d) {
        // sum the value
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

        $HeavyPrintDefect1 += $d['HeavyPrintDefect'];
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
        // end sum the value

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

        $HeavyPrintDefect = $d['HeavyPrintDefect'];
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
        <tr>
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

          <td><?php echo$HeavyPrintDefect; ?></td>
          <td><?php echo$TouchingPeelingOff; ?></td>
          <td><?php echo$PrintMisalignment; ?></td>
          <td><?php echo$WrongeArtwork; ?></td>
          <td><?php echo$MoldMark; ?></td>
          <td><?php echo$ColourShade; ?></td>
          <td><?php echo$ValveNozzleMove; ?></td>
          <td><?php echo$DShape; ?></td>
          <td><?php echo$Oversize; ?></td>
          <td><?php echo$UnderSize; ?></td>
          <td><?php echo$OverWeight; ?></td>
          <td><?php echo$UnderWeight; ?></td>
          <td><?php echo$MissGlue; ?></td>



        </tr>
      <?php
      }
      ?>
      <tfoot>
        <tr class="bg-primary-200 text-light">
          
          <td>Total: </td>
          <td><?php echo $TotalChecked1; ?> </td>
        <td><?php echo $TotalPass1; ?> </td>
        <td><?php echo $Fail1; ?> </td>
        <td><?php echo $MaterialDefect1; ?> </td>
        <td><?php echo $SeamDefect1; ?> </td>
        <td><?php echo $SeamOverlaping1; ?> </td>
        <td><?php echo $Wrinkles1; ?> </td>

        <td><?php echo $ExcessGlue1; ?> </td>
        <td><?php echo $PressureMarks1; ?> </td>
        <td><?php echo $AirBubble1; ?> </td>

        <td><?php echo $HeavyPrintDefect1; ?> </td>
        <td><?php echo $TouchingPeelingOff1; ?> </td>
        <td><?php echo $PrintMisalignment1; ?> </td>
        <td><?php echo $WrongeArtwork1; ?> </td>
        <td><?php echo $MoldMark1; ?> </td>
        <td><?php echo $ColourShade1; ?> </td>
        <td><?php echo $ValveNozzleMove1; ?> </td>
        <td><?php echo $DShape1; ?> </td>
        <td><?php echo $Oversize1; ?> </td>
        <td><?php echo $UnderSize1; ?> </td>
        <td><?php echo $OverWeight1; ?> </td>
        <td><?php echo $UnderWeight1; ?> </td>
        <td><?php echo $MissGlue1; ?> </td>
  
  
        </tr>
      </tfoot>



    <?php
    } else {
    ?>
      <tr>
        <th colspan="24">
          <center>No Record Available Yet!</center>
        </th>
      </tr>
    <?php }
    ?>


  </tbody>
</table>
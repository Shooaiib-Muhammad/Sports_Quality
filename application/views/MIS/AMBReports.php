<div id="panel-1" class="panel">



  <?php $this->load->view('includes/new_header'); ?>

  <!-- BEGIN Page Wrapper -->
  <div class="page-wrapper">
    <div class="page-inner">
      <!-- BEGIN Left Aside -->
      <?php $this->load->view('includes/new_aside'); ?>
      <!-- END Left Aside -->
      <div class="page-content-wrapper">
        <!-- BEGIN Page Header -->
        <?php $this->load->view('includes/top_header.php'); ?>
        <main id="js-page-content" role="main" class="page-content">

          <div class="col-lg-12" style="margin-bottom:20px">
        
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i> AMB Reports (Airless Mini Ball Reports)</span>

                        </h1>
                    </div>
          <!doctype html>
<?php
if ($this->session->userdata('userStus')==1) {
?>
<html class="no-js" lang="en">
<!--<![endif]-->
<style>
    #container {
  height: 420px; 
}

.highcharts-figure, .highcharts-data-table table {
  min-width: 360px; 
  max-width: 820px;
  margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
 
</style>

<>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/themes/high-contrast-light.js"></script>
<div id="right-panel" class="right-panel">

<?php

  
$Month=date('m');
$Year=date('Y');
$Day=date('d');
$CurrentDate=$Year.'-'.$Month.'-'.$Day;

foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $PanelDMG = $key1['PanelDMG'];
    $data1[] = "['$ArticleCode', $PanelDMG]";
    $dataArticle[] = "['$ArticleCode']";   
 }
 
 foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $OverLap = $key1['OverLap'];
    $data2[] = "['$ArticleCode', $OverLap]";
    $dataArticle[] = "['$ArticleCode']";   
 }
 
 foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $Wrinkle = $key1['Wrinkle'];
    $data3[] = "['$ArticleCode', $Wrinkle]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $ZigZagSeam = $key1['ZigZagSeam'];
    $data4[] = "['$ArticleCode', $ZigZagSeam]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $UnbondedPanels = $key1['UnbondedPanels'];
    $data5[] = "['$ArticleCode', $UnbondedPanels]";
    $dataArticle[] = "['$ArticleCode']";   
 } 
 
 foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $SingleOpenStrip = $key1['SingleOpenStrip'];
    $data6[] = "['$ArticleCode', $SingleOpenStrip]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $PanelCavity = $key1['PanelCavity'];
    $data7[] = "['$ArticleCode', $PanelCavity]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $Touching = $key1['Touching'];
    $data8[] = "['$ArticleCode', $Touching]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $OtherPrintingIssue = $key1['OtherPrintingIssue'];
    $data9[] = "['$ArticleCode', $OtherPrintingIssue]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $CoreCavity = $key1['CoreCavity'];
    $data10[] = "['$ArticleCode', $CoreCavity]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $ColorMArk = $key1['ColorMArk'];
    $data11[] = "['$ArticleCode', $ColorMArk]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $StraightCut = $key1['StraightCut'];
    $data12[] = "['$ArticleCode', $StraightCut]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $GLueDirts = $key1['GLueDirts'];
    $data13[] = "['$ArticleCode', $GLueDirts]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $DisColor = $key1['DisColor'];
    $data14[] = "['$ArticleCode', $DisColor]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $LogoDoubling = $key1['LogoDoubling'];
    $data15[] = "['$ArticleCode', $LogoDoubling]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $LargerSpots = $key1['LargerSpots'];
    $data16[] = "['$ArticleCode', $LargerSpots]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $Smearing = $key1['Smearing'];
    $data17[] = "['$ArticleCode', $Smearing]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $MissAlligment = $key1['MissAlligment'];
    $data18[] = "['$ArticleCode', $MissAlligment]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $BlurPrinting = $key1['BlurPrinting'];
    $data19[] = "['$ArticleCode', $BlurPrinting]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $HFMissAlignment = $key1['HFMissAlignment'];
    $data20[] = "['$ArticleCode', $HFMissAlignment]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $RoundCorner = $key1['RoundCorner'];
    $data21[] = "['$ArticleCode', $RoundCorner]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $CornerOut = $key1['CornerOut'];
    $data22[] = "['$ArticleCode', $CornerOut]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $coveringDefects = $key1['coveringDefects'];
    $data23[] = "['$ArticleCode', $coveringDefects]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $Burning = $key1['Burning'];
    $data24[] = "['$ArticleCode', $Burning]";
    $dataArticle[] = "['$ArticleCode']";   
 } 
 $data_points2 = array();
foreach($Record as $key1) {
$point2 = array($key1['ArtCode']);
array_push($data_points2, $point2);       
}

  ?>


  <div id="container"></div>
 
</div>



<script>
  $(document).ready( function () {
    var colors = Highcharts.getOptions().colors;

Highcharts.chart('container', {
  chart: {
    type: 'spline'
  },

  legend: {
    symbolWidth: 40
  },

  title: {
    text: 'Ariless Mini Ball Packing '
  },

  subtitle: {
    text: 'Article Wise Analytics'
  },

  yAxis: {
    title: {
      text: 'Defects'
    }
  },

  xAxis: {
    title: {
      text: 'Articel Wise '
    },
    accessibility: {
      //description: 'Time from December 2010 to September 2019'
    },
    categories: <?php echo json_encode($data_points2, JSON_NUMERIC_CHECK); ?>
  },

  tooltip: {
    //valueSuffix: '%'
  },

  plotOptions: {
    series: {
      point: {
        events: {
          click: function () {
            window.location.href = this.series.options.website;
          }
        }
      },
      cursor: 'pointer'
    }
  },

  series: [
    {
        name: 'Panel Demage',
        data: [<?php echo join(',',$data1); ?>],
      color: colors[1]
    },
      {
        name: 'Over Lap',
        data: [<?php echo join( ',',$data2); ?>],
      color: colors[2]
      },{
        name: 'Wrinkle',
        data: [<?php echo join(',', $data3); ?>],
      color: colors[2]
    },
      {
        name: 'Zig Zag Seam',
        data: [<?php echo join(',', $data4); ?>],
      color: colors[3]
      },{
        name: 'Unbonded Panels',
        data: [<?php echo join(',', $data5); ?>],
      color: colors[4]
    },
      {
        name: 'Single Open Strip',
        data: [<?php echo join(',', $data6); ?>],
      color: colors[5]
      },{
        name: 'Panel Cavity',
        data: [<?php echo join(',', $data7); ?>],
      color: colors[6]
    },
      {
        name: 'Touching',
        data: [<?php echo join(',', $data8); ?>],
      color: colors[7]
      },{
        name: 'Other Printing Issue',
        data: [<?php echo join(',', $data9); ?>],
      color: colors[8]
    },
      {
        name: 'Core Cavity',
        data: [<?php echo join(',', $data10); ?>],
      color: colors[9]
      },{
        name: 'Color Mark',
        data: [<?php echo join(',', $data11); ?>],
      color: colors[10]
    },
      {
        name: 'Straight Cut',
        data: [<?php echo join(',', $data12); ?>],
      color: colors[11]
      },{
        name: 'Glue Dirts',
        data: [<?php echo join(',', $data13); ?>],
      color: colors[12]
    },
      {
        name: 'Dis Color',
        data: [<?php echo join(',', $data14); ?>],
      color: colors[13]
      },{
        name: 'Logo Doubling',
        data: [<?php echo join(',', $data15); ?>],
      color: colors[14]
    },
      {
        name: 'LargerSpots',
        data: [<?php echo join(',', $data16); ?>],
      color: colors[15]
      },{
        name: 'Smearing',
        data: [<?php echo join(',', $data17); ?>],
      color: colors[16]
    },
      {
        name: 'Smearing',
        data: [<?php echo join(',', $data18); ?>],
      color: colors[17]
      },{
        name: 'Miss Alligment',
        data: [<?php echo join(',', $data19); ?>],
      color: colors[18]
    },
      {
        name: 'Blur Printing',
        data: [<?php echo join(',', $data20); ?>],
      color: colors[19]
      },{
        name: 'HF Miss Alignment',
        data: [<?php echo join(',', $data21); ?>],
      color: colors[20]
    },
      {
        name: 'Round Corner ',
        data: [<?php echo join(',', $data22); ?>],
      color: colors[21]
      },{
        name: 'Covering Defects',
        data: [<?php echo join(',', $data23); ?>],
      color: colors[22]
    },
      {
        name: 'Burning',
        data: [<?php echo join(',', $data24); ?>],
      color: colors[23]
      }
  ],

  responsive: {
    rules: [{
      condition: {
        maxWidth: 550
      },
      chartOptions: {
        legend: {
          itemWidth: 150
        },
        xAxis: {
            categories: <?php echo json_encode($data_points2, JSON_NUMERIC_CHECK); ?>,
        },
        yAxis: {
          title: {
            enabled: false
          },
          labels: {
            format: '{value}'
          }
        }
      }
    }]
  }
});

    $('#table').DataTable(
    { 
       dom: 'Bfrtip',
        buttons: [
            'copy',
            {
                extend: 'excel',
                messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
            },
            {
                extend: 'pdf',
                messageBottom: null
            },
           
        ],
     "ordering":false,
      "pageLength":10,
      "searching":false,
      "LengthChange":true,
      "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},

    
    }


      );

    $('#table1').DataTable(
    { 
       dom: 'Bfrtip',
        buttons: [
            'copy',
            {
                extend: 'excel',
                messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
            },
            {
                extend: 'pdf',
                messageBottom: null
            },
           
        ],
     "ordering":false,
      "pageLength":10,
      "searching":false,
      "LengthChange":true,
      "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},

    
    }


      );
} );
</script>
<?php
}else{
    redirect('Welcome/index');
}
?>


          </div>
        </main>
      </div>
    </div>
  </div>
</div>
</body>
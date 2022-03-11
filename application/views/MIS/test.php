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
<?php
$this->load->View('Adminheader');
?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/themes/high-contrast-light.js"></script>
<body>
<?php
$this->load->View('menu');
?>
<div id="right-panel" class="right-panel">

<?php
$this->load->View('Setting');


?>  


<?php

  
$Month=date('m');
$Year=date('Y');
$Day=date('d');
$CurrentDate=$Year.'-'.$Month.'-'.$Day;

foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $PanelDMG = $key1['PanelDMG'];
    $data1[] = "['Glue Dirts', $PanelDMG]";
    $dataArticle[] = "['$ArticleCode']";   
 }
 
 foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $OverLap = $key1['OverLap'];
    $data2[] = "['Over Lap', $OverLap]";
    $dataArticle[] = "['$ArticleCode']";   
 }
 
 foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $Wrinkle = $key1['Wrinkle'];
    $data3[] = "['Wrinkle', $Wrinkle]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $ZigZagSeam = $key1['ZigZagSeam'];
    $data4[] = "['ZigZagSeam', $ZigZagSeam]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $UnbondedPanels = $key1['UnbondedPanels'];
    $data5[] = "['Un bonded Panels', $UnbondedPanels]";
    $dataArticle[] = "['$ArticleCode']";   
 } 
 
 foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $SingleOpenStrip = $key1['SingleOpenStrip'];
    $data6[] = "['SingleOpenStrip', $SingleOpenStrip]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $PanelCavity = $key1['PanelCavity'];
    $data7[] = "['Panel Cavity', $PanelCavity]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $Touching = $key1['Touching'];
    $data8[] = "['Touching', $Touching]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $OtherPrintingIssue = $key1['OtherPrintingIssue'];
    $data9[] = "['Other Printing Issue', $OtherPrintingIssue]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $CoreCavity = $key1['CoreCavity'];
    $data10[] = "['Core Cavity', $CoreCavity]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $ColorMArk = $key1['ColorMArk'];
    $data11[] = "['Color Mark', $ColorMArk]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $StraightCut = $key1['StraightCut'];
    $data12[] = "['StraightCut', $StraightCut]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $GLueDirts = $key1['GLueDirts'];
    $data13[] = "['GLue Dirts', $GLueDirts]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $DisColor = $key1['DisColor'];
    $data14[] = "['Dis Color', $DisColor]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $LogoDoubling = $key1['LogoDoubling'];
    $data15[] = "['Logo Doubling', $LogoDoubling]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $LargerSpots = $key1['LargerSpots'];
    $data16[] = "['Larger Spots', $LargerSpots]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $Smearing = $key1['Smearing'];
    $data17[] = "['Smearing', $Smearing]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $MissAlligment = $key1['MissAlligment'];
    $data18[] = "['Miss Alligment', $MissAlligment]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $BlurPrinting = $key1['BlurPrinting'];
    $data19[] = "['Blur Printing', $BlurPrinting]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $HFMissAlignment = $key1['HFMissAlignment'];
    $data20[] = "['HF Miss Alignment', $HFMissAlignment]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $RoundCorner = $key1['RoundCorner'];
    $data21[] = "['Round Corner', $RoundCorner]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $CornerOut = $key1['CornerOut'];
    $data22[] = "['CornerOut', $CornerOut]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $coveringDefects = $key1['coveringDefects'];
    $data23[] = "['covering Defects', $coveringDefects]";
    $dataArticle[] = "['$ArticleCode']";   
 } foreach($Record as $key1) {
    $ArticleCode = $key1['ArtCode'];
    $Burning = $key1['Burning'];
    $data24[] = "['Burning', $Burning]";
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
</body>
<?php
$this->load->View('AdminFooter');
?>
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
        data: [<?php echo join($data1, ',') ?>],
      color: colors[1]
    },
      {
        name: 'Over Lap',
        data: [<?php echo join($data2, ',') ?>],
      color: colors[2]
      },{
        name: 'Wrinkle',
        data: [<?php echo join($data3, ',') ?>],
      color: colors[2]
    },
      {
        name: 'Zig Zag Seam',
        data: [<?php echo join($data4, ',') ?>],
      color: colors[3]
      },{
        name: 'Unbonded Panels',
        data: [<?php echo join($data5, ',') ?>],
      color: colors[4]
    },
      {
        name: 'Single Open Strip',
        data: [<?php echo join($data6, ',') ?>],
      color: colors[5]
      },{
        name: 'Panel Cavity',
        data: [<?php echo join($data7, ',') ?>],
      color: colors[6]
    },
      {
        name: 'Touching',
        data: [<?php echo join($data8, ',') ?>],
      color: colors[7]
      },{
        name: 'Other Printing Issue',
        data: [<?php echo join($data9, ',') ?>],
      color: colors[8]
    },
      {
        name: 'Core Cavity',
        data: [<?php echo join($data10, ',') ?>],
      color: colors[9]
      },{
        name: 'Color Mark',
        data: [<?php echo join($data11, ',') ?>],
      color: colors[10]
    },
      {
        name: 'Straight Cut',
        data: [<?php echo join($data12, ',') ?>],
      color: colors[11]
      },{
        name: 'Glue Dirts',
        data: [<?php echo join($data13, ',') ?>],
      color: colors[12]
    },
      {
        name: 'Dis Color',
        data: [<?php echo join($data14, ',') ?>],
      color: colors[13]
      },{
        name: 'Logo Doubling',
        data: [<?php echo join($data15, ',') ?>],
      color: colors[14]
    },
      {
        name: 'LargerSpots',
        data: [<?php echo join($data16, ',') ?>],
      color: colors[15]
      },{
        name: 'Smearing',
        data: [<?php echo join($data17, ',') ?>],
      color: colors[16]
    },
      {
        name: 'Smearing',
        data: [<?php echo join($data18, ',') ?>],
      color: colors[17]
      },{
        name: 'Miss Alligment',
        data: [<?php echo join($data19, ',') ?>],
      color: colors[18]
    },
      {
        name: 'Blur Printing',
        data: [<?php echo join($data20, ',') ?>],
      color: colors[19]
      },{
        name: 'HF Miss Alignment',
        data: [<?php echo join($data21, ',') ?>],
      color: colors[20]
    },
      {
        name: 'Round Corner ',
        data: [<?php echo join($data22, ',') ?>],
      color: colors[21]
      },{
        name: 'Covering Defects',
        data: [<?php echo join($data23, ',') ?>],
      color: colors[22]
    },
      {
        name: 'Burning',
        data: [<?php echo join($data24, ',') ?>],
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

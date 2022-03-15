<?php
if (!$this->session->has_userdata('user_id')) {
    redirect('');
} else {
?>

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
          <ol class="breadcrumb page-breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(
                                                                    'index.php/main/dmms_dashboard'
                                                                ); ?>">Tem Humidity</a></li>


                        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                    </ol>
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i>Tem Humidty</span>

                        </h1>
                    </div>
          <?php if ($this->session->userdata('userStus') == 1) { ?>


<body>

  
  <div id="right-panel" class="right-panel">

    <style>



    </style>
    <link href="<?php link_file(
        'assets/qa_assets/main.css'
    ); ?>" rel="stylesheet">





    <?php
    $Month = date('m');
    $Year = date('Y');
    $Day = date('d');
    $CurrentDate = $Year . '-' . $Month . '-' . $Day;
    ?>


    <!-- <div class="row clearfix"> -->
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><b>Date Filteration</b></h5>
        <div class="row clearfix">
          <div class="col-md-2" style="margin-right:20px;">
            <div class="form-group">
              <label class="form-control-label">From Date:</label>
              <div class="input-group">
                <input class="form-control" type="Date" id="SDate" name="Sdate" value="<?php echo $CurrentDate; ?>" style="width: 100%">
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label class="form-control-label">To Date:</label>
              <div class="input-group">
                <input class="form-control" type="Date" id="EDate" name="Edate" value="<?php echo $CurrentDate; ?>" style="width: 100%">
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label class="form-control-label">Select Hall:</label>
              <div class="input-group">
                <select class="form-control" id="hallValue" name="hall" style="width: 100%">
                <option value="All">All Halls</option>
                <option value="MS Hall-1">MS-1</option>
                <option value="MS Hall-2">MS-2</option>
                <option value="AMB Hall">AMB</option>
                <option value="TM Hall">TM</option>
                </select>
              </div>
            </div>
          </div>

          <div class="col-md-1">
            <div class="form-group">
              <label class=" form-control-label"></label>
              <div style="margin-top:18px" class="input-group">
              
                <button type="submit" id="submit" name="submit" onclick="MainFunction()" class="btn btn-success btn-block" style="border-radius: 15px;"><i class=" fa fa-search"></i> Search</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>


    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div id="HumidityMax"></div>
          </div>
          <div class="col-md-6">
            <div id="HumidityMin"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div id="lineChartHum"></div>
          </div>

        </div>
        <div class="row">
          <div class="col-md-6">
            <div id="Tempmax"></div>
          </div>
          <div class="col-md-6">
            <div id="TempMin"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div id="lineChartTemp"></div>
          </div>

        </div>
      </div>
    </div>







    <script src="<?php echo base_url(); ?>assets/js/chart.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
      <?php $this->load->View('AdminFooter'); ?>
      <script src="<?php echo base_url(); ?>/assets/charts/highcharts.js"></script>
      <script src="<?php echo base_url(); ?>/assets/charts/data.js"></script>
      <script src="<?php echo base_url(); ?>/assets/charts/drilldown.js"></script>
      <script src="<?php echo base_url(); ?>/assets/charts/exporting.js"></script>
      <script src="<?php echo base_url(); ?>/assets/charts/export-data.js"></script>
      <script src="<?php echo base_url(); ?>/assets/charts/accessibility.js"></script>

      <script type="text/javascript">

          /* Activate smart panels */
          $('#js-page-content').smartPanel();
      </script>
    



<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js" integrity="sha512-gtII6Z4fZyONX9GBrF28JMpodY4vIOI0lBjAtN/mcK7Pz19Mu1HHIRvXH6bmdChteGpEccxZxI0qxXl9anY60w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script>
      window.onload = function() {

        let date_ob = new Date();

        // adjust 0 before single digit date
        let date = ("0" + date_ob.getDate()).slice(-2);

        // current month
        let month = ("0" + (date_ob.getMonth() + 1)).slice(-2);

        // current year
        let year = date_ob.getFullYear();

        // current hours
        let hours = date_ob.getHours();
        console.log("hours", hours)

        // current minutes
        let minutes = (date_ob.getMinutes() < 10 ? '0' : '') + date_ob.getMinutes();

        // current seconds
        let seconds = date_ob.getSeconds();
        let entrYdate = year + "-" + month + "-" + date + " " + hours + ":" + minutes + ":" + "00"
        $.ajax({

          url: "<?php echo base_url('/MIS/TemHumidityController/getData'); ?>",
          method: "POST",
          data: {
            "entrYdate": entrYdate,

          },
          success: function(data) {


            console.log("load table data", data);

          }
        })


      }
    </script>
    <script>
      function MainFunction() {

        c_date = $('#SDate').val();
        e_date = $('#EDate').val();
        hallValue = $('#hallValue').val();
  
        if(hallValue == "All"){


          $.ajax({

url: "<?php echo base_url('MIS/TemHumidityController/gethumMax'); ?>",
method: "POST",
data: {
"c_date": c_date,
"e_date": e_date,

},
success: function(data) {
let url = "<?php echo base_url(
  '/MIS/TemHumidityController/gethumidity'
); ?>";
$.ajax({

url: url,
method: "POST",
data: {
"c_date": c_date,
"e_date": e_date,

},
success: function(data) {
$("#lineChartHum").html("");
humidityAmb = []
dateHumAmb = [];
humidityTm = []
dateHumTm = [];
humidityMs1 = []
dateHumMs1 = [];
humidityMs2 = []
dateHumMs2 = [];
tempAmb = []
datetempAmb = [];
tempTm = []
tempMs1 = []
tempMs2 = []


$.each(data['amb'], function(index, value) {

  humidityAmb.push(parseFloat(value.Humdity));
  dateHumAmb.push(value.EntryDate);

});
$.each(data['tm'], function(index, value) {

  humidityTm.push(parseFloat(value.Humdity));
  dateHumTm.push(value.EntryDate);

});
$.each(data['ms1'], function(index, value) {

  humidityMs1.push(parseFloat(value.Humdity));
  dateHumMs1.push(value.EntryDate);

});
$.each(data['ms2'], function(index, value) {

  humidityMs2.push(parseFloat(value.Humdity));
  dateHumMs2.push(value.EntryDate);

});
 $.each(data['ambtemp'], function(index, value) {

  tempAmb.push(parseFloat(value.Temperature));
  datetempAmb.push(value.EntryDate);

});
$.each(data['tmtemp'], function(index, value) {

  tempTm.push(parseFloat(value.Temperature));
 

});
$.each(data['ms1temp'], function(index, value) {

  tempMs1.push(parseFloat(value.Temperature));
  

});
$.each(data['ms2temp'], function(index, value) {

  tempMs2.push(parseFloat(value.Temperature));
  

});
let serieshumidityAmb = [{
    name: 'AMB Hall',
    data: humidityAmb
  },
  {
    name: 'TM Hall',
    data: humidityTm
  },
  {
    name: 'MS Hall-1',
    data: humidityMs1
  },
  {
    name: 'MS Hall-2',
    data: humidityMs2
  }

]
let seriestemp = [{
    name: 'AMB Hall',
    data: tempAmb
  },
  {
    name: 'TM Hall',
    data: tempTm
  },
  {
    name: 'MS Hall-1',
    data: tempMs1
  },
  {
    name: 'MS Hall-2',
    data: tempMs2
  }

]
Highcharts.chart('lineChartHum', {

  title: {
    text: 'Humidity'
  },

  yAxis: {
    title: {
      text: 'Humidity'
    }
  },

  xAxis: {
    categories: dateHumAmb,
    visible:false

  },
    tooltip: {
        formatter: function() {
            return `Value:${this.y} , Date:"${this.x}`;
        }
    },
  legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
  },

  plotOptions: {
    series: {
      label: {
        connectorAllowed: false
      },

    }
  },

  series: serieshumidityAmb,

  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        legend: {
          layout: 'horizontal',
          align: 'center',
          verticalAlign: 'bottom'
        }
      }
    }]
  }

});
 Highcharts.chart('lineChartTemp', {

  title: {
    text: 'Temperature'
  },

  yAxis: {
    title: {
      text: 'Temperature'
    }
  },

  xAxis: {
    categories: datetempAmb,
    visible:false
  },
    tooltip: {
        formatter: function() {
            return `Value:${this.y} , Date:"${this.x}`;
        }
    },
  legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
  },

  plotOptions: {
    series: {
      label: {
        connectorAllowed: false
      },

    }
  },

  series: seriestemp,

  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        legend: {
          layout: 'horizontal',
          align: 'center',
          verticalAlign: 'bottom'
        }
      }
    }]
  }

});
}
})


hummax = [];
humiditymax = [];
datesArray = [];
hallmax1 = [];
hallmax2 = [];
hallmax3 = [];
hallmax4 = [];
hallmin1 = [];
hallmin2 = [];
hallmin3 = [];
hallmin4 = [];
halltempmax1 = [];
halltempmax2 = [];
halltempmax3 = [];
halltempmax4 = [];
halltempmin1 = [];
halltempmin2 = [];
halltempmin3 = [];
halltempmin4 = [];
$.each(data['max'], function(index, value) {
  if (value.HallName == "TM Hall") {
    hallmax1.push(parseFloat(value.Humdity));
  } else if (value.HallName == "MS Hall-1") {
    hallmax2.push(parseFloat(value.Humdity));
  } else if (value.HallName == "AMB Hall") {
    hallmax3.push(parseFloat(value.Humdity));
  } else if (value.HallName == "MS Hall-2") {
    hallmax4.push(parseFloat(value.Humdity));
  }
});
$.each(data['min'], function(index, value) {
  if (value.HallName == "TM Hall") {
    hallmin1.push(parseFloat(value.Humdity));
  } else if (value.HallName == "MS Hall-1") {
    hallmin2.push(parseFloat(value.Humdity));
  } else if (value.HallName == "AMB Hall") {
    hallmin3.push(parseFloat(value.Humdity));
  } else if (value.HallName == "MS Hall-2") {
    hallmin4.push(parseFloat(value.Humdity));
  }
});
$.each(data['tempmax'], function(index, value) {
  if (value.Name == "TM Hall") {
    halltempmax1.push(parseFloat(value.Temperature));
  } else if (value.Name == "MS Hall-1") {
    halltempmax2.push(parseFloat(value.Temperature));
  } else if (value.Name == "AMB Hall") {
    halltempmax3.push(parseFloat(value.Temperature));
  } else if (value.Name == "MS Hall-2") {
    halltempmax4.push(parseFloat(value.Temperature));
  }
});
$.each(data['tempmin'], function(index, value) {
  if (value.Name == "TM Hall") {
    halltempmin1.push(parseFloat(value.Temperature));
  } else if (value.Name == "MS Hall-1") {
    halltempmin2.push(parseFloat(value.Temperature));
  } else if (value.Name == "AMB Hall") {
    halltempmin3.push(parseFloat(value.Temperature));
  } else if (value.Name == "MS Hall-2") {
    halltempmin4.push(parseFloat(value.Temperature));
  }
});
$.each(data['max'], function(index, value) {
  if (datesArray.indexOf(value.Date) === -1) {
    datesArray.push(value.Date);
  }
});
console.log("from table and latest", data)
console.log("Dates Array", datesArray)
data['max'].forEach(element => {
  hummax.push(element['HallName']);

})
data['max'].forEach(element => {
  humiditymax.push(element['Humdity']);
})
humidityAmb = []
dateHumAmb = [];
humidityTm = []
dateHumTm = [];
humidityMs1 = []
dateHumMs1 = [];
humidityMs2 = []
dateHumMs2 = [];

$.each(data['amb'], function(index, value) {

  humidityAmb.push(parseFloat(value.Humdity));
  dateHumAmb.push(value.EntryDate);

});
$.each(data['tm'], function(index, value) {

  humidityTm.push(parseFloat(value.Humdity));
  dateHumTm.push(value.EntryDate);

});
$.each(data['ms1'], function(index, value) {

  humidityMs1.push(parseFloat(value.Humdity));
  dateHumMs1.push(value.EntryDate);

});
$.each(data['ms1'], function(index, value) {

  humidityMs2.push(parseFloat(value.Humdity));
  dateHumMs2.push(value.EntryDate);

});
let serieshumidityAmb = [{
    name: 'AMB Hall',
    data: humidityAmb
  },
  {
    name: 'TM Hall',
    data: humidityTm
  },
  {
    name: 'MS Hall-1',
    data: humidityMs1
  },
  {
    name: 'MS Hall-2',
    data: humidityMs2
  }

]
let seriesData = [{
    name: 'TM Hall',
    data: hallmax1
  },
  {
    name: 'MS Hall-1',
    data: hallmax2
  },
  {
    name: 'AMB Hall',
    data: hallmax3
  },
  {
    name: 'MS Hall-2',
    data: hallmax4
  },
]
let seriesDataMin = [{
    name: 'TM Hall',
    data: hallmin1
  },
  {
    name: 'MS Hall-1',
    data: hallmin2
  },
  {
    name: 'AMB Hall',
    data: hallmin3
  },
  {
    name: 'MS Hall-2',
    data: hallmin4
  },
]
let seriesDataTempMax = [{
    name: 'TM Hall',
    data: halltempmax1
  },
  {
    name: 'MS Hall-1',
    data: halltempmax2
  },
  {
    name: 'AMB Hall',
    data: halltempmax3
  },
  {
    name: 'MS Hall-2',
    data: halltempmax4
  },
]
let seriesDataTempMin = [{
    name: 'TM Hall',
    data: halltempmin1
  },
  {
    name: 'MS Hall-1',
    data: halltempmin2
  },
  {
    name: 'AMB Hall',
    data: halltempmin3
  },
  {
    name: 'MS Hall-2',
    data: halltempmin4
  },
]
Highcharts.chart('HumidityMax', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Humidity Maximum'
  },

  xAxis: {
    categories: datesArray,
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Humidity (Max)'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
  series: seriesData
});

Highcharts.chart('HumidityMin', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Humidity Minimum'
  },
  xAxis: {
    categories: datesArray,
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Humidity (min)'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
  series: seriesDataMin
});
Highcharts.chart('Tempmax', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Temprature Maximum'
  },

  xAxis: {
    categories: datesArray,
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Temprature (Max)'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
  series: seriesDataTempMax
});

Highcharts.chart('TempMin', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Temperature Minimum'
  },
  xAxis: {
    categories: datesArray,
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Temprature (min)'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
  series: seriesDataTempMin
});

Highcharts.chart('lineChartHum', {

  title: {
    text: 'Humidity'
  },

  yAxis: {
    title: {
      text: 'Humidity'
    }
  },

  xAxis: {
    categories: dateHumAmb,
    crosshair: true
  },

  legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
  },

  plotOptions: {
    series: {
      label: {
        connectorAllowed: false
      },

    }
  },

  series: serieshumidityAmb,

  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        legend: {
          layout: 'horizontal',
          align: 'center',
          verticalAlign: 'bottom'
        }
      }
    }]
  }

});
}

})
}
else if(hallValue == "MS Hall-1"){

$.ajax({

url: "<?php echo base_url('MIS/TemHumidityController/gethumHallWise'); ?>",
method: "POST",
data: {
"c_date": c_date,
"e_date": e_date,
"hallName": hallValue,
},
success: function(data) {
let url =  "<?php echo base_url(
  '/MIS/TemHumidityController/gethumidity'
); ?>";
$.ajax({

url:url,
method: "POST",
data: {
"c_date": c_date,
"e_date": e_date,

},
success: function(data) {
$("#lineChartHum").html("");
console.log("Line Chart Data", data);
humidityMs1 = []
dateHumMs1 = [];

tempAmb = []
datetempAmb = [];
tempTm = []
tempMs1 = []
tempMs1Date = []
tempMs2 = []

$.each(data['ms1'], function(index, value) {

  humidityMs1.push(parseFloat(value.Humdity));
  dateHumMs1.push(value.EntryDate);

});

$.each(data['ms1temp'], function(index, value) {

  tempMs1.push(parseFloat(value.Temperature));
  tempMs1Date.push(value.EntryDate);

});
let serieshumidityAmb = [
  {
    name: 'MS Hall-1',
    data: humidityMs1
  }

]
let seriestemp = [
  {
    name: 'MS Hall-1',
    data: tempMs1
  }

]
Highcharts.chart('lineChartHum', {

  title: {
    text: 'Humidity'
  },

  yAxis: {
    title: {
      text: 'Humidity'
    }
  },

  xAxis: {
    categories: dateHumMs1,
   visible:false
  },
      tooltip: {
          formatter: function() {
              return `Value:${this.y} , Date"${this.x}`;
          }
      },
  legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
  },

  plotOptions: {
    series: {
      label: {
        connectorAllowed: false
      },

    }
  },

  series: serieshumidityAmb,

  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        legend: {
          layout: 'horizontal',
          align: 'center',
          verticalAlign: 'bottom'
        }
      }
    }]
  }

});
 Highcharts.chart('lineChartTemp', {

  title: {
    text: 'Temperature'
  },

  yAxis: {
    title: {
      text: 'Temperature'
    }
  },

  xAxis: {
    categories: tempMs1Date,
    visible:false
  },
      tooltip: {
          formatter: function() {
              return `Value:${this.y} , Date"${this.x}`;
          }
      },

  legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
  },

  plotOptions: {
    series: {
      label: {
        connectorAllowed: false
      },

    }
  },

  series: seriestemp,

  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        legend: {
          layout: 'horizontal',
          align: 'center',
          verticalAlign: 'bottom'
        }
      }
    }]
  }

});
}
})

hummax = [];
humiditymax = [];
datesArray = [];
hallmax1 = [];

hallmin1 = [];
hallmax2 = [];
hallmin2 = [];
halltempmax1 = [];
halltempmax2 = [];
halltempmin2 = [];
halltempmin1 = [];
$.each(data['max'], function(index, value) {
    hallmax2.push(parseFloat(value.Humdity));
});
$.each(data['min'], function(index, value) {
if (value.HallName == "MS Hall-1") {
    hallmin2.push(parseFloat(value.Humdity));
  } 
});
$.each(data['tempmax'], function(index, value) {
if (value.Name == "MS Hall-1") {
    halltempmax2.push(parseFloat(value.Temperature));
  } 
});
$.each(data['tempmin'], function(index, value) {
 if (value.Name == "MS Hall-1") {
    halltempmin2.push(parseFloat(value.Temperature));
  }
});
$.each(data['max'], function(index, value) {

    datesArray.push(value.Date);

});
console.log("from table and latest", data)
console.log("Dates Array", datesArray)
data['max'].forEach(element => {
  hummax.push(element['HallName']);

})
data['max'].forEach(element => {
  humiditymax.push(element['Humdity']);
})

dateHumAmb = [];

humidityMs1 = []
dateHumMs1 = [];


$.each(data['ms1'], function(index, value) {

  humidityMs1.push(parseFloat(value.Humdity));
  dateHumMs1.push(value.EntryDate);

});

let serieshumidityAmb = [

  {
    name: 'MS Hall-1',
    data: humidityMs1
  }

]
let seriesData = [
  {
    name: 'MS Hall-1',
    data: hallmax2
  }
]
let seriesDataMin = [
  {
    name: 'MS Hall-1',
    data: hallmin2
  }
]
let seriesDataTempMax = [
  {
    name: 'MS Hall-1',
    data: halltempmax2
  }
]
let seriesDataTempMin = [
  {
    name: 'MS Hall-1',
    data: halltempmin2
  }
]
console.log("Series Data",seriesData)
Highcharts.chart('HumidityMax', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Humidity Maximum'
  },

  xAxis: {
    categories: datesArray,
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Humidity (Max)'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
  series: seriesData
});

Highcharts.chart('HumidityMin', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Humidity Minimum'
  },
  xAxis: {
    categories: datesArray,
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Humidity (min)'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
  series: seriesDataMin
});
Highcharts.chart('Tempmax', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Temprature Maximum'
  },

  xAxis: {
    categories: datesArray,
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Temprature (Max)'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
  series: seriesDataTempMax
});

Highcharts.chart('TempMin', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Temperature Minimum'
  },
  xAxis: {
    categories: datesArray,
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Temprature (min)'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
  series: seriesDataTempMin
});

Highcharts.chart('lineChartHum', {

  title: {
    text: 'Humidity'
  },

  yAxis: {
    title: {
      text: 'Humidity'
    }
  },

  xAxis: {
    categories: dateHumAmb,
    crosshair: true
  },

  legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
  },

  plotOptions: {
    series: {
      label: {
        connectorAllowed: false
      },

    }
  },

  series: serieshumidityAmb,

  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        legend: {
          layout: 'horizontal',
          align: 'center',
          verticalAlign: 'bottom'
        }
      }
    }]
  }

});
}

})
}

else if(hallValue == "MS Hall-2"){

$.ajax({

url: "<?php echo base_url('/MIS/TemHumidityController/gethumHallWise'); ?>",
method: "POST",
data: {
"c_date": c_date,
"e_date": e_date,
"hallName": hallValue,
},
success: function(data) {

$.ajax({

url: "<?php echo base_url(
'/MIS/TemHumidityController/gethumidity'
); ?>",
url: "<?php echo base_url('/MIS/TemHumidityController/gethumidity'); ?>",
method: "POST",
data: {
"c_date": c_date,
"e_date": e_date,

},
success: function(data) {
$("#lineChartHum").html("");
console.log("Line Chart Data", data);
humidityMs1 = []
dateHumMs1 = [];

tempAmb = []
datetempAmb = [];
tempTm = []
tempMs1 = []
tempMs1Date = []
tempMs2 = []

$.each(data['ms2'], function(index, value) {

humidityMs1.push(parseFloat(value.Humdity));
dateHumMs1.push(value.EntryDate);

});

$.each(data['ms2temp'], function(index, value) {

tempMs1.push(parseFloat(value.Temperature));
tempMs1Date.push(value.EntryDate);

});
let serieshumidityAmb = [
{
  name: 'MS Hall-2',
  data: humidityMs1
}

]
let seriestemp = [
{
  name: 'MS Hall-2',
  data: tempMs1
}

]
Highcharts.chart('lineChartHum', {

title: {
  text: 'Humidity'
},

yAxis: {
  title: {
    text: 'Humidity'
  }
},

xAxis: {
  categories: dateHumMs1,
 visible:false
},
    tooltip: {
        formatter: function() {
            return `Value:${this.y} , Date"${this.x}`;
        }
    },
legend: {
  layout: 'vertical',
  align: 'right',
  verticalAlign: 'middle'
},

plotOptions: {
  series: {
    label: {
      connectorAllowed: false
    },

  }
},

series: serieshumidityAmb,

responsive: {
  rules: [{
    condition: {
      maxWidth: 500
    },
    chartOptions: {
      legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
      }
    }
  }]
}

});
Highcharts.chart('lineChartTemp', {

title: {
  text: 'Temperature'
},

yAxis: {
  title: {
    text: 'Temperature'
  }
},

xAxis: {
  categories: tempMs1Date,
  visible:false
},
    tooltip: {
        formatter: function() {
            return `Value:${this.y} , Date"${this.x}`;
        }
    },

legend: {
  layout: 'vertical',
  align: 'right',
  verticalAlign: 'middle'
},

plotOptions: {
  series: {
    label: {
      connectorAllowed: false
    },

  }
},

series: seriestemp,

responsive: {
  rules: [{
    condition: {
      maxWidth: 500
    },
    chartOptions: {
      legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
      }
    }
  }]
}

});
}
})

hummax = [];
humiditymax = [];
datesArray = [];
hallmax1 = [];

hallmin1 = [];
hallmax2 = [];
hallmin2 = [];
halltempmax1 = [];
halltempmax2 = [];
halltempmin2 = [];
halltempmin1 = [];
$.each(data['max'], function(index, value) {
  hallmax2.push(parseFloat(value.Humdity));
});
$.each(data['min'], function(index, value) {
if (value.HallName == "MS Hall-2") {
  hallmin2.push(parseFloat(value.Humdity));
} 
});
$.each(data['tempmax'], function(index, value) {
if (value.Name == "MS Hall-2") {
  halltempmax2.push(parseFloat(value.Temperature));
} 
});
$.each(data['tempmin'], function(index, value) {
if (value.Name == "MS Hall-2") {
  halltempmin2.push(parseFloat(value.Temperature));
}
});
$.each(data['max'], function(index, value) {

  datesArray.push(value.Date);

});
console.log("from table and latest", data)
console.log("Dates Array", datesArray)
data['max'].forEach(element => {
hummax.push(element['HallName']);

})
data['max'].forEach(element => {
humiditymax.push(element['Humdity']);
})

dateHumAmb = [];

humidityMs1 = []
dateHumMs1 = [];


$.each(data['ms2'], function(index, value) {

humidityMs1.push(parseFloat(value.Humdity));
dateHumMs1.push(value.EntryDate);

});

let serieshumidityAmb = [

{
  name: 'MS Hall-2',
  data: humidityMs1
}

]
let seriesData = [
{
  name: 'MS Hall-2',
  data: hallmax2
}
]
let seriesDataMin = [
{
  name: 'MS Hall-2',
  data: hallmin2
}
]
let seriesDataTempMax = [
{
  name: 'MS Hall-2',
  data: halltempmax2
}
]
let seriesDataTempMin = [
{
  name: 'MS Hall-2',
  data: halltempmin2
}
]
console.log("Series Data",seriesData)
Highcharts.chart('HumidityMax', {
chart: {
  type: 'column'
},
title: {
  text: 'Humidity Maximum'
},

xAxis: {
  categories: datesArray,
  crosshair: true
},
yAxis: {
  min: 0,
  title: {
    text: 'Humidity (Max)'
  }
},
tooltip: {
  headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
  pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
series: seriesData
});

Highcharts.chart('HumidityMin', {
chart: {
  type: 'column'
},
title: {
  text: 'Humidity Minimum'
},
xAxis: {
  categories: datesArray,
  crosshair: true
},
yAxis: {
  min: 0,
  title: {
    text: 'Humidity (min)'
  }
},
tooltip: {
  headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
  pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
series: seriesDataMin
});
Highcharts.chart('Tempmax', {
chart: {
  type: 'column'
},
title: {
  text: 'Temprature Maximum'
},

xAxis: {
  categories: datesArray,
  crosshair: true
},
yAxis: {
  min: 0,
  title: {
    text: 'Temprature (Max)'
  }
},
tooltip: {
  headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
  pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
series: seriesDataTempMax
});

Highcharts.chart('TempMin', {
chart: {
  type: 'column'
},
title: {
  text: 'Temperature Minimum'
},
xAxis: {
  categories: datesArray,
  crosshair: true
},
yAxis: {
  min: 0,
  title: {
    text: 'Temprature (min)'
  }
},
tooltip: {
  headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
  pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
series: seriesDataTempMin
});

Highcharts.chart('lineChartHum', {

title: {
  text: 'Humidity'
},

yAxis: {
  title: {
    text: 'Humidity'
  }
},

xAxis: {
  categories: dateHumAmb,
  crosshair: true
},

legend: {
  layout: 'vertical',
  align: 'right',
  verticalAlign: 'middle'
},

plotOptions: {
  series: {
    label: {
      connectorAllowed: false
    },

  }
},

series: serieshumidityAmb,

responsive: {
  rules: [{
    condition: {
      maxWidth: 500
    },
    chartOptions: {
      legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
      }
    }
  }]
}

});
}

})
}

else if(hallValue == "TM Hall"){

$.ajax({

url: "<?php echo base_url('MIS/TemHumidityController/gethumHallWise'); ?>",
method: "POST",
data: {
"c_date": c_date,
"e_date": e_date,
"hallName": hallValue,
},
success: function(data) {


$.ajax({

url: "<?php echo base_url('/MIS/TemHumidityController/gethumidity'); ?>",
method: "POST",
data: {
"c_date": c_date,
"e_date": e_date,

},
success: function(data) {
$("#lineChartHum").html("");
console.log("Line Chart Data", data);
humidityMs1 = []
dateHumMs1 = [];

tempAmb = []
datetempAmb = [];
tempTm = []
tempMs1 = []
tempMs1Date = []
tempMs2 = []

$.each(data['tm'], function(index, value) {

humidityMs1.push(parseFloat(value.Humdity));
dateHumMs1.push(value.EntryDate);

});

$.each(data['tmtemp'], function(index, value) {

tempMs1.push(parseFloat(value.Temperature));
tempMs1Date.push(value.EntryDate);

});
let serieshumidityAmb = [
{
  name: 'TM Hall',
  data: humidityMs1
}

]
let seriestemp = [
{
  name: 'TM Hall',
  data: tempMs1
}

]
Highcharts.chart('lineChartHum', {

title: {
  text: 'Humidity'
},

yAxis: {
  title: {
    text: 'Humidity'
  }
},

xAxis: {
  categories: dateHumMs1,
 visible:false
},
    tooltip: {
        formatter: function() {
            return `Value:${this.y} , Date:"${this.x}`;
        }
    },
legend: {
  layout: 'vertical',
  align: 'right',
  verticalAlign: 'middle'
},

plotOptions: {
  series: {
    label: {
      connectorAllowed: false
    },

  }
},

series: serieshumidityAmb,

responsive: {
  rules: [{
    condition: {
      maxWidth: 500
    },
    chartOptions: {
      legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
      }
    }
  }]
}

});
Highcharts.chart('lineChartTemp', {

title: {
  text: 'Temperature'
},

yAxis: {
  title: {
    text: 'Temperature'
  }
},

xAxis: {
  categories: tempMs1Date,
  visible:false
},
    tooltip: {
        formatter: function() {
            return `Value:${this.y} , Date"${this.x}`;
        }
    },

legend: {
  layout: 'vertical',
  align: 'right',
  verticalAlign: 'middle'
},

plotOptions: {
  series: {
    label: {
      connectorAllowed: false
    },

  }
},

series: seriestemp,

responsive: {
  rules: [{
    condition: {
      maxWidth: 500
    },
    chartOptions: {
      legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
      }
    }
  }]
}

});
}
});

hummax = [];
humiditymax = [];
datesArray = [];
hallmax1 = [];

hallmin1 = [];
hallmax2 = [];
hallmin2 = [];
halltempmax1 = [];
halltempmax2 = [];
halltempmin2 = [];
halltempmin1 = [];
$.each(data['max'], function(index, value) {
  hallmax2.push(parseFloat(value.Humdity));
});
$.each(data['min'], function(index, value) {
if (value.HallName == "TM Hall") {
  hallmin2.push(parseFloat(value.Humdity));
} 
});
$.each(data['tempmax'], function(index, value) {
if (value.Name == "TM Hall") {
  halltempmax2.push(parseFloat(value.Temperature));
} 
});
$.each(data['tempmin'], function(index, value) {
if (value.Name == "TM Hall") {
  halltempmin2.push(parseFloat(value.Temperature));
}
});
$.each(data['max'], function(index, value) {

  datesArray.push(value.Date);

});
console.log("from table and latest", data)
console.log("Dates Array", datesArray)
data['max'].forEach(element => {
hummax.push(element['HallName']);

})
data['max'].forEach(element => {
humiditymax.push(element['Humdity']);
})

dateHumAmb = [];

humidityMs1 = []
dateHumMs1 = [];


$.each(data['tm'], function(index, value) {

humidityMs1.push(parseFloat(value.Humdity));
dateHumMs1.push(value.EntryDate);

});

let serieshumidityAmb = [

{
  name: 'TM Hall',
  data: humidityMs1
}

]
let seriesData = [
{
  name: 'TM Hall',
  data: hallmax2
}
]
let seriesDataMin = [
{
  name: 'TM Hall',
  data: hallmin2
}
]
let seriesDataTempMax = [
{
  name: 'TM Hall',
  data: halltempmax2
}
]
let seriesDataTempMin = [
{
  name: 'TM Hall',
  data: halltempmin2
}
]
console.log("Series Data",seriesData)
Highcharts.chart('HumidityMax', {
chart: {
  type: 'column'
},
title: {
  text: 'Humidity Maximum'
},

xAxis: {
  categories: datesArray,
  crosshair: true
},
yAxis: {
  min: 0,
  title: {
    text: 'Humidity (Max)'
  }
},
tooltip: {
  headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
  pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
series: seriesData
});

Highcharts.chart('HumidityMin', {
chart: {
  type: 'column'
},
title: {
  text: 'Humidity Minimum'
},
xAxis: {
  categories: datesArray,
  crosshair: true
},
yAxis: {
  min: 0,
  title: {
    text: 'Humidity (min)'
  }
},
tooltip: {
  headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
  pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
series: seriesDataMin
});
Highcharts.chart('Tempmax', {
chart: {
  type: 'column'
},
title: {
  text: 'Temprature Maximum'
},

xAxis: {
  categories: datesArray,
  crosshair: true
},
yAxis: {
  min: 0,
  title: {
    text: 'Temprature (Max)'
  }
},
tooltip: {
  headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
  pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
series: seriesDataTempMax
});

Highcharts.chart('TempMin', {
chart: {
  type: 'column'
},
title: {
  text: 'Temperature Minimum'
},
xAxis: {
  categories: datesArray,
  crosshair: true
},
yAxis: {
  min: 0,
  title: {
    text: 'Temprature (min)'
  }
},
tooltip: {
  headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
  pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
series: seriesDataTempMin
});

Highcharts.chart('lineChartHum', {

title: {
  text: 'Humidity'
},

yAxis: {
  title: {
    text: 'Humidity'
  }
},

xAxis: {
  categories: dateHumAmb,
  crosshair: true
},

legend: {
  layout: 'vertical',
  align: 'right',
  verticalAlign: 'middle'
},

plotOptions: {
  series: {
    label: {
      connectorAllowed: false
    },

  }
},

series: serieshumidityAmb,

responsive: {
  rules: [{
    condition: {
      maxWidth: 500
    },
    chartOptions: {
      legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
      }
    }
  }]
}

});
}

})
}

else if(hallValue == "AMB Hall"){

$.ajax({

url: "<?php echo base_url('MIS/TemHumidityController/gethumHallWise'); ?>",
method: "POST",
data: {
"c_date": c_date,
"e_date": e_date,
"hallName": hallValue,
},
success: function(data) {

$.ajax({

url: "<?php echo base_url('/MIS/TemHumidityController/gethumidity'); ?>",
method: "POST",
data: {
"c_date": c_date,
"e_date": e_date,

},
success: function(data) {
$("#lineChartHum").html("");
console.log("Line Chart Data", data);
humidityMs1 = []
dateHumMs1 = [];

tempAmb = []
datetempAmb = [];
tempTm = []
tempMs1 = []
tempMs1Date = []
tempMs2 = []

$.each(data['amb'], function(index, value) {

humidityMs1.push(parseFloat(value.Humdity));
dateHumMs1.push(value.EntryDate);

});

$.each(data['ambtemp'], function(index, value) {

tempMs1.push(parseFloat(value.Temperature));
tempMs1Date.push(value.EntryDate);

});
let serieshumidityAmb = [
{
  name: 'AMB Hall',
  data: humidityMs1
}

]
let seriestemp = [
{
  name: 'AMB Hall',
  data: tempMs1
}

]
Highcharts.chart('lineChartHum', {

title: {
  text: 'Humidity'
},

yAxis: {
  title: {
    text: 'Humidity'
  }
},

xAxis: {
  categories: dateHumMs1,
 visible:false
},
    tooltip: {
        formatter: function() {
            return `Value:${this.y} , Date"${this.x}`;
        }
    },
legend: {
  layout: 'vertical',
  align: 'right',
  verticalAlign: 'middle'
},

plotOptions: {
  series: {
    label: {
      connectorAllowed: false
    },

  }
},

series: serieshumidityAmb,

responsive: {
  rules: [{
    condition: {
      maxWidth: 500
    },
    chartOptions: {
      legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
      }
    }
  }]
}

});
Highcharts.chart('lineChartTemp', {

title: {
  text: 'Temperature'
},

yAxis: {
  title: {
    text: 'Temperature'
  }
},

xAxis: {
  categories: tempMs1Date,
  visible:false
},
    tooltip: {
        formatter: function() {
            return `Value:${this.y} , Date"${this.x}`;
        }
    },

legend: {
  layout: 'vertical',
  align: 'right',
  verticalAlign: 'middle'
},

plotOptions: {
  series: {
    label: {
      connectorAllowed: false
    },

  }
},

series: seriestemp,

responsive: {
  rules: [{
    condition: {
      maxWidth: 500
    },
    chartOptions: {
      legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
      }
    }
  }]
}

});
}
})

hummax = [];
humiditymax = [];
datesArray = [];
hallmax1 = [];

hallmin1 = [];
hallmax2 = [];
hallmin2 = [];
halltempmax1 = [];
halltempmax2 = [];
halltempmin2 = [];
halltempmin1 = [];
$.each(data['max'], function(index, value) {
  hallmax2.push(parseFloat(value.Humdity));
});
$.each(data['min'], function(index, value) {
if (value.HallName == "AMB Hall") {
  hallmin2.push(parseFloat(value.Humdity));
} 
});
$.each(data['tempmax'], function(index, value) {
if (value.Name == "AMB Hall") {
  halltempmax2.push(parseFloat(value.Temperature));
} 
});
$.each(data['tempmin'], function(index, value) {
if (value.Name == "AMB Hall") {
  halltempmin2.push(parseFloat(value.Temperature));
}
});
$.each(data['max'], function(index, value) {

  datesArray.push(value.Date);

});
console.log("from table and latest", data)
console.log("Dates Array", datesArray)
data['max'].forEach(element => {
hummax.push(element['HallName']);

})
data['max'].forEach(element => {
humiditymax.push(element['Humdity']);
})

dateHumAmb = [];

humidityMs1 = []
dateHumMs1 = [];


$.each(data['amb'], function(index, value) {

humidityMs1.push(parseFloat(value.Humdity));
dateHumMs1.push(value.EntryDate);

});

let serieshumidityAmb = [

{
  name: 'AMB Hall',
  data: humidityMs1
}

]
let seriesData = [
{
  name: 'AMB Hall',
  data: hallmax2
}
]
let seriesDataMin = [
{
  name: 'AMB Hall',
  data: hallmin2
}
]
let seriesDataTempMax = [
{
  name: 'AMB Hall',
  data: halltempmax2
}
]
let seriesDataTempMin = [
{
  name: 'AMB Hall',
  data: halltempmin2
}
]
console.log("Series Data",seriesData)
Highcharts.chart('HumidityMax', {
chart: {
  type: 'column'
},
title: {
  text: 'Humidity Maximum'
},

xAxis: {
  categories: datesArray,
  crosshair: true
},
yAxis: {
  min: 0,
  title: {
    text: 'Humidity (Max)'
  }
},
tooltip: {
  headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
  pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
series: seriesData
});

Highcharts.chart('HumidityMin', {
chart: {
  type: 'column'
},
title: {
  text: 'Humidity Minimum'
},
xAxis: {
  categories: datesArray,
  crosshair: true
},
yAxis: {
  min: 0,
  title: {
    text: 'Humidity (min)'
  }
},
tooltip: {
  headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
  pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
series: seriesDataMin
});
Highcharts.chart('Tempmax', {
chart: {
  type: 'column'
},
title: {
  text: 'Temprature Maximum'
},

xAxis: {
  categories: datesArray,
  crosshair: true
},
yAxis: {
  min: 0,
  title: {
    text: 'Temprature (Max)'
  }
},
tooltip: {
  headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
  pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
series: seriesDataTempMax
});

Highcharts.chart('TempMin', {
chart: {
  type: 'column'
},
title: {
  text: 'Temperature Minimum'
},
xAxis: {
  categories: datesArray,
  crosshair: true
},
yAxis: {
  min: 0,
  title: {
    text: 'Temprature (min)'
  }
},
tooltip: {
  headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
  pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
series: seriesDataTempMin
});

Highcharts.chart('lineChartHum', {

title: {
  text: 'Humidity'
},

yAxis: {
  title: {
    text: 'Humidity'
  }
},

xAxis: {
  categories: dateHumAmb,
  crosshair: true
},

legend: {
  layout: 'vertical',
  align: 'right',
  verticalAlign: 'middle'
},

plotOptions: {
  series: {
    label: {
      connectorAllowed: false
    },

  }
},

series: serieshumidityAmb,

responsive: {
  rules: [{
    condition: {
      maxWidth: 500
    },
    chartOptions: {
      legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
      }
    }
  }]
}

});
}

})
}

}


      window.onload = function() {

        c_date = $('#SDate').val();
        e_date = $('#EDate').val();

        $.ajax({

url: "<?php echo base_url('/MIS/TemHumidityController/gethumidity'); ?>",
method: "POST",
data: {
"c_date": c_date,
"e_date": e_date,

},
success: function(data) {
humidityAmb = []
dateHumAmb = [];
humidityTm = []
dateHumTm = [];
humidityMs1 = []
dateHumMs1 = [];
humidityMs2 = []
dateHumMs2 = [];
tempAmb = []
datetempAmb = [];
tempTm = []
tempMs1 = []
tempMs2 = []


$.each(data['amb'], function(index, value) {

  humidityAmb.push(parseFloat(value.Humdity));
  dateHumAmb.push(value.EntryDate);

});
$.each(data['tm'], function(index, value) {

  humidityTm.push(parseFloat(value.Humdity));
  dateHumTm.push(value.EntryDate);

});
$.each(data['ms1'], function(index, value) {

  humidityMs1.push(parseFloat(value.Humdity));
  dateHumMs1.push(value.EntryDate);

});
$.each(data['ms2'], function(index, value) {

  humidityMs2.push(parseFloat(value.Humdity));
  dateHumMs2.push(value.EntryDate);

});
 $.each(data['ambtemp'], function(index, value) {

  tempAmb.push(parseFloat(value.Temperature));
  datetempAmb.push(value.EntryDate);

});
$.each(data['tmtemp'], function(index, value) {

  tempTm.push(parseFloat(value.Temperature));
 

});
$.each(data['ms1temp'], function(index, value) {

  tempMs1.push(parseFloat(value.Temperature));
  

});
$.each(data['ms2temp'], function(index, value) {

  tempMs2.push(parseFloat(value.Temperature));
  

});
let serieshumidityAmb = [{
    name: 'AMB Hall',
    data: humidityAmb
  },
  {
    name: 'TM Hall',
    data: humidityTm
  },
  {
    name: 'MS Hall-1',
    data: humidityMs1
  },
  {
    name: 'MS Hall-2',
    data: humidityMs2
  }

]
let seriestemp = [{
    name: 'AMB Hall',
    data: tempAmb
  },
  {
    name: 'TM Hall',
    data: tempTm
  },
  {
    name: 'MS Hall-1',
    data: tempMs1
  },
  {
    name: 'MS Hall-2',
    data: tempMs2
  }

]
Highcharts.chart('lineChartHum', {

  title: {
    text: 'Humidity'
  },

  yAxis: {
    title: {
      text: 'Humidity'
    }
  },

  xAxis: {
    categories: dateHumAmb,
    visible:false

  },
    tooltip: {
        formatter: function() {
            return `Value:${this.y} , Date:"${this.x}`;
        }
    },
  legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
  },

  plotOptions: {
    series: {
      label: {
        connectorAllowed: false
      },

    }
  },

  series: serieshumidityAmb,

  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        legend: {
          layout: 'horizontal',
          align: 'center',
          verticalAlign: 'bottom'
        }
      }
    }]
  }

});
 Highcharts.chart('lineChartTemp', {

  title: {
    text: 'Temperature'
  },

  yAxis: {
    title: {
      text: 'Temperature'
    }
  },

  xAxis: {
    categories: datetempAmb,
    visible:false
  },
    tooltip: {
        formatter: function() {
            return `Value:${this.y} , Date:"${this.x}`;
        }
    },
  legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
  },

  plotOptions: {
    series: {
      label: {
        connectorAllowed: false
      },

    }
  },

  series: seriestemp,

  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        legend: {
          layout: 'horizontal',
          align: 'center',
          verticalAlign: 'bottom'
        }
      }
    }]
  }

});
}
})

       
        $.ajax({

          url: "<?php echo base_url('/MIS/TemHumidityController/gethumMax'); ?>",
          method: "POST",
          data: {
            "c_date": c_date,
            "e_date": e_date,

          },
          success: function(data) {

            hummax = [];
            humiditymax = [];
            datesArray = [];
            hallmax1 = [];
            hallmax2 = [];
            hallmax3 = [];
            hallmax4 = [];
            hallmin1 = [];
            hallmin2 = [];
            hallmin3 = [];
            hallmin4 = [];
            halltempmax1 = [];
            halltempmax2 = [];
            halltempmax3 = [];
            halltempmax4 = [];
            halltempmin1 = [];
            halltempmin2 = [];
            halltempmin3 = [];
            halltempmin4 = [];
            $.each(data['max'], function(index, value) {
              if (value.HallName == "TM Hall") {
                hallmax1.push(parseFloat(value.Humdity));
              } else if (value.HallName == "MS Hall-1") {
                hallmax2.push(parseFloat(value.Humdity));
              } else if (value.HallName == "AMB Hall") {
                hallmax3.push(parseFloat(value.Humdity));
              } else if (value.HallName == "MS Hall-2") {
                hallmax4.push(parseFloat(value.Humdity));
              }
            });
            $.each(data['min'], function(index, value) {
              if (value.HallName == "TM Hall") {
                hallmin1.push(parseFloat(value.Humdity));
              } else if (value.HallName == "MS Hall-1") {
                hallmin2.push(parseFloat(value.Humdity));
              } else if (value.HallName == "AMB Hall") {
                hallmin3.push(parseFloat(value.Humdity));
              } else if (value.HallName == "MS Hall-2") {
                hallmin4.push(parseFloat(value.Humdity));
              }
            });
            $.each(data['tempmax'], function(index, value) {
              if (value.Name == "TM Hall") {
                halltempmax1.push(parseFloat(value.Temperature));
              } else if (value.Name == "MS Hall-1") {
                halltempmax2.push(parseFloat(value.Temperature));
              } else if (value.Name == "AMB Hall") {
                halltempmax3.push(parseFloat(value.Temperature));
              } else if (value.Name == "MS Hall-2") {
                halltempmax4.push(parseFloat(value.Temperature));
              }
            });
            $.each(data['tempmin'], function(index, value) {
              if (value.Name == "TM Hall") {
                halltempmin1.push(parseFloat(value.Temperature));
              } else if (value.Name == "MS Hall-1") {
                halltempmin2.push(parseFloat(value.Temperature));
              } else if (value.Name == "AMB Hall") {
                halltempmin3.push(parseFloat(value.Temperature));
              } else if (value.Name == "MS Hall-2") {
                halltempmin4.push(parseFloat(value.Temperature));
              }
            });
            $.each(data['max'], function(index, value) {
              if (datesArray.indexOf(value.Date) === -1) {
                datesArray.push(value.Date);
              }
            });
            console.log("from table and latest", data)
            console.log("Dates Array", datesArray)
            data['max'].forEach(element => {
              hummax.push(element['HallName']);

            })
            data['max'].forEach(element => {
              humiditymax.push(element['Humdity']);
            })

            let seriesData = [{
                name: 'TM Hall',
                data: hallmax1
              },
              {
                name: 'MS Hall-1',
                data: hallmax2
              },
              {
                name: 'AMB Hall',
                data: hallmax3
              },
              {
                name: 'MS Hall-2',
                data: hallmax4
              },
            ]
            let seriesDataMin = [{
                name: 'TM Hall',
                data: hallmin1
              },
              {
                name: 'MS Hall-1',
                data: hallmin2
              },
              {
                name: 'AMB Hall',
                data: hallmin3
              },
              {
                name: 'MS Hall-2',
                data: hallmin4
              },
            ]
            let seriesDataTempMax = [{
                name: 'TM Hall',
                data: halltempmax1
              },
              {
                name: 'MS Hall-1',
                data: halltempmax2
              },
              {
                name: 'AMB Hall',
                data: halltempmax3
              },
              {
                name: 'MS Hall-2',
                data: halltempmax4
              },
            ]
            let seriesDataTempMin = [{
                name: 'TM Hall',
                data: halltempmin1
              },
              {
                name: 'MS Hall-1',
                data: halltempmin2
              },
              {
                name: 'AMB Hall',
                data: halltempmin3
              },
              {
                name: 'MS Hall-2',
                data: halltempmin4
              },
            ]
            Highcharts.chart('HumidityMax', {
              chart: {
                type: 'column'
              },
              title: {
                text: 'Humidity Maximum'
              },

              xAxis: {
                categories: datesArray,
                crosshair: true
              },
              yAxis: {
                min: 0,
                title: {
                  text: 'Humidity (Max)'
                }
              },
              tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                  '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
              series: seriesData
            });

            Highcharts.chart('HumidityMin', {
              chart: {
                type: 'column'
              },
              title: {
                text: 'Humidity Minimum'
              },
              xAxis: {
                categories: datesArray,
                crosshair: true
              },
              yAxis: {
                min: 0,
                title: {
                  text: 'Humidity (min)'
                }
              },
              tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                  '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
              series: seriesDataMin
            });
            Highcharts.chart('Tempmax', {
              chart: {
                type: 'column'
              },
              title: {
                text: 'Temprature Maximum'
              },

              xAxis: {
                categories: datesArray,
                crosshair: true
              },
              yAxis: {
                min: 0,
                title: {
                  text: 'Temprature (Max)'
                }
              },
              tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                  '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
              series: seriesDataTempMax
            });

            Highcharts.chart('TempMin', {
              chart: {
                type: 'column'
              },
              title: {
                text: 'Temperature Minimum'
              },
              xAxis: {
                categories: datesArray,
                crosshair: true
              },
              yAxis: {
                min: 0,
                title: {
                  text: 'Temprature (min)'
                }
              },
              tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                  '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
              series: seriesDataTempMin
            });

            Highcharts.chart('lineChart', {

              title: {
                text: 'Solar Employment Growth by Sector, 2010-2016'
              },

              subtitle: {
                text: 'Source: thesolarfoundation.com'
              },

              yAxis: {
                title: {
                  text: 'Number of Employees'
                }
              },

              xAxis: {
                accessibility: {
                  rangeDescription: 'Range: 2010 to 2017'
                }
              },

              legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
              },

              plotOptions: {
                series: {
                  label: {
                    connectorAllowed: false
                  },
                  pointStart: 2010
                }
              },

              series: [{
                name: 'Installation',
                data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
              }, {
                name: 'Manufacturing',
                data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
              }, {
                name: 'Sales & Distribution',
                data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
              }, {
                name: 'Project Development',
                data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
              }, {
                name: 'Other',
                data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
              }],

              responsive: {
                rules: [{
                  condition: {
                    maxWidth: 500
                  },
                  chartOptions: {
                    legend: {
                      layout: 'horizontal',
                      align: 'center',
                      verticalAlign: 'bottom'
                    }
                  }
                }]
              }

            });
          }

        })


      }




      function fillReport(data, group) {


        $('#content').html(data);
        $('#forming').dataTable(getOptions(group))



      }

      function getOptions(group) {
        var options = {
          dom: 'Bfrtip',
          buttons: [
            'copy',
            {
              extend: 'excel',
              messageTop: 'The information in this table is copyright Forward Sports.'
            },
            {
              extend: 'pdf',
              messageBottom: null
            }
          ],
          "ordering": false,
          "pageLength": 10,
          "searching": false,
          "LengthChange": true,
          "oLanguage": {
            "sEmptyTable": "Data Is Not Available Yet!"
          },

        }




        return options
      }
    </script>



  <?php } else {redirect('Welcome/index');}
?>

          </div>
        </main>
      </div>
    </div>
  </div>
</div>
<?php 
}
?>
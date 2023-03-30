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
                                                                    'index.php/DashboardController'
                                                                ); ?>">Dashboard</a></li>
                                                                <li class="breadcrumb-item">Conveyers</li>


                        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                    </ol>
                   
          <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i>Conveyers</span>

                        </h1>
                    </div>
          <?php if ($this->session->userdata('userStus') == 1) { ?>

<style>
#Tempmax {
  margin: 0 auto;
  min-width: 600px;
}
#TempMin {
  margin: 0 auto;
  min-width: 600px;
}

#lineChartTemp {
  margin: 0 auto;
  min-width: 600px;
}

</style>
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
              <label class="form-control-label">Select Conveyors:</label>
              <div class="input-group">
                <select class="form-control" id="hallValue" name="hall" style="width: 100%">
                <option value="All">All Conveyors</option>
                <option value="Hall-01 Conveyers TC-01">Conveyor 1</option>
                <option value="Hall-01 Conveyers TC-02">Conveyor 2</option>
                <option value="Hall-01 Conveyers TC-03">Conveyor 3</option>
                <option value="Hall-01 Conveyers TC-04">Conveyor 4</option>
                <option value="Hall-01 Conveyers TC-05">Conveyor 5</option>
                <option value="Hall-01 Conveyers TC-06">Conveyor 6</option>
                <option value="Hall-01 Conveyers TC-07">Conveyor 7</option>
                <option value="Hall-01 Conveyers TC-08">Conveyor 8</option>
                <option value="Hall-01 Conveyers TC-09">Conveyor 9</option>
                <option value="Hall-01 Conveyers TC-10">Conveyor 10</option>
                <!-- <option value="11">Conveyor 11</option>
                <option value="12">Conveyor 12</option>
                <option value="13">Conveyor 13</option>
                <option value="14">Conveyor 14</option>
                <option value="15">Conveyor 15</option>
                <option value="16">Conveyor 16</option>
                <option value="17">Conveyor 17</option>
                <option value="18">Conveyor 18</option>
                <option value="19">Conveyor 19</option>
                <option value="20">Conveyor 20</option>
                <option value="21">Conveyor 21</option>
                <option value="22">Conveyor 22</option>
                <option value="23">Conveyor 23</option>
                <option value="24">Conveyor 24</option>
                <option value="25">Conveyor 25</option>
                <option value="26">Conveyor 26</option>
                <option value="27">Conveyor 27</option>
                <option value="28">Conveyor 28</option>
                <option value="29">Conveyor 29</option>
                <option value="30">Conveyor 30</option> -->
                <option value="Hall-02 Conveyers TC-31">Conveyor 31</option>
                <option value="Hall-02 Conveyers TC-32">Conveyor 32</option>
                <option value="Hall-02 Conveyers TC-33">Conveyor 33</option>
                <option value="Hall-02 Conveyers TC-34">Conveyor 34</option>
                <option value="Hall-02 Conveyers TC-35">Conveyor 35</option>
                <option value="Hall-02 Conveyers TC-36">Conveyor 36</option>
                <option value="Hall-02 Conveyers TC-37">Conveyor 37</option>
                <option value="Hall-02 Conveyers TC-38">Conveyor 38</option>
                <option value="Hall-02 Conveyers TC-39">Conveyor 39</option>
                <!-- <option value="40">Conveyor 40</option>
                <option value="41">Conveyor 41</option>
                <option value="42">Conveyor 42</option>
                <option value="43">Conveyor 43</option>
                <option value="44">Conveyor 44</option>
                <option value="45">Conveyor 45</option>
                <option value="46">Conveyor 46</option>
                <option value="47">Conveyor 47</option>
                <option value="48">Conveyor 48</option>
                <option value="49">Conveyor 49</option>
                <option value="50">Conveyor 50</option>
                <option value="51">Conveyor 51</option>
                <option value="52">Conveyor 52</option>
                <option value="53">Conveyor 53</option>
                <option value="54">Conveyor 54</option>
                <option value="55">Conveyor 55</option>
                <option value="56">Conveyor 56</option>
                <option value="57">Conveyor 57</option>
                <option value="58">Conveyor 58</option>
                <option value="59">Conveyor 59</option>
                <option value="60">Conveyor 60</option> -->
                </select>
              </div>
            </div>
          </div>

          <div class="col-md-1">
            <div class="form-group">
              <label class=" form-control-label"></label>
              <div style="margin-top:18px" class="input-group">

                <button type="submit" id="submit" name="submit" onclick="MainFunction()" class="btn btn-success btn-block " style="border-radius: 15px;"><i class=" fa fa-search"></i> Search</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>


    <div class="card">
      <div class="card-body">

      
        <div class="row">
          <div class="col-md-12">
            <div id="lineChartTemp"></div>
          </div>

        </div>
      </div>
    </div>






    <script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
      <script type="text/javascript">
          /* Activate smart panels */
          $('#js-page-content').smartPanel();

      </script>


<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>


<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>

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

url: "<?php echo base_url(
  '/MIS/ParametersController/gethumidity'
); ?>",
method: "POST",
data: {
"c_date": c_date,
"e_date": e_date,

},
success: function(data) {
  console.log("Data Get", data)
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


dateValueLine = [];
dateValueMax = [];
dateValueMin = [];
tempTm = []
tempMs1 = []
tempMs2 = []
conveyer1 = [];
conveyer2 = [];
conveyer3 = [];
conveyer4 = [];
conveyer5 = [];
conveyer6 = [];
conveyer7 = [];
conveyer8 = [];
conveyer9 = [];
conveyer10 = [];

conveyer1Max = [];
conveyer2Max = [];
conveyer3Max = [];
conveyer4Max = [];
conveyer5Max = [];
conveyer6Max = [];
conveyer7Max = [];
conveyer8Max = [];
conveyer9Max = [];
conveyer10Max = [];

conveyer1Min = [];
conveyer2Min = [];
conveyer3Min = [];
conveyer4Min = [];
conveyer5Min = [];
conveyer6Min = [];
conveyer7Min = [];
conveyer8Min = [];
conveyer9Min = [];
conveyer10Min = [];

conveyer31 = [];
conveyer32 = [];
conveyer33 = [];
conveyer34 = [];
conveyer35 = [];
conveyer36 = [];
conveyer37 = [];
conveyer38 = [];
conveyer39 = [];

conveyer31Max = [];
conveyer32Max = [];
conveyer33Max = [];
conveyer34Max = [];
conveyer35Max = [];
conveyer36Max = [];
conveyer37Max = [];
conveyer38Max = [];
conveyer39Max = [];

conveyer31Min = [];
conveyer32Min = [];
conveyer33Min = [];
conveyer34Min = [];
conveyer35Min = [];
conveyer36Min = [];
conveyer37Min = [];
conveyer38Min = [];
conveyer39Min = [];

 $.each(data['temperatureDataMax'], function(index, value) {
if(value.Name == "Hall-01 Conveyers TC-01"){
    conveyer1.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-02"){
    conveyer2.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-03"){
    conveyer3.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-04"){
    conveyer4.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-05"){
    conveyer5.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-06"){
    conveyer6.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-07"){
    conveyer7.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-08"){
    conveyer8.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-09"){
    conveyer9.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-10"){
    conveyer10.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-31"){
    conveyer31.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-32"){
    conveyer32.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-33"){
    conveyer33.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-34"){
    conveyer34.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-35"){
    conveyer35.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-36"){
    conveyer36.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-37"){
    conveyer37.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-38"){
    conveyer38.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-39"){
    conveyer39.push(parseInt(value.Temperature))
  }
  if (datetempAmb.indexOf(value.Date) === -1) {
    dateValueLine.push(value.Date);
    }


});

$.each(data['temperatureMaxOrg'], function(index, value) {
if(value.Name == "Hall-01 Conveyers TC-01"){
    conveyer1Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-02"){
    conveyer2Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-03"){
    conveyer3Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-04"){
    conveyer4Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-05"){
    conveyer5Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-06"){
    conveyer6Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-07"){
    conveyer7Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-08"){
    conveyer8Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-09"){
    conveyer9Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-10"){
    conveyer10Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-31"){
    conveyer31Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-32"){
    conveyer32Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-33"){
    conveyer33Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-34"){
    conveyer34Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-35"){
    conveyer35Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-36"){
    conveyer36Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-37"){
    conveyer37Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-38"){
    conveyer38Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-39"){
    conveyer39Max.push(parseInt(value.Temperature))
  }
  if (datetempAmb.indexOf(value.Date) === -1) {
    dateValueMax.push(value.Date);
    }
});

$.each(data['temperatureMin'], function(index, value) {
if(value.Name == "Hall-01 Conveyers TC-01"){
    conveyer1Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-02"){
    conveyer2Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-03"){
    conveyer3Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-04"){
    conveyer4Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-05"){
    conveyer5Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-06"){
    conveyer6Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-07"){
    conveyer7Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-08"){
    conveyer8Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-09"){
    conveyer9Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-10"){
    conveyer10Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-31"){
    conveyer31Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-32"){
    conveyer32Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-33"){
    conveyer33Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-34"){
    conveyer34Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-35"){
    conveyer35Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-36"){
    conveyer36Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-37"){
    conveyer37Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-38"){
    conveyer38Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-39"){
    conveyer39Min.push(parseInt(value.Temperature))
  }
  if (datetempAmb.indexOf(value.Date) === -1) {
    dateValueMin.push(value.Date);
    }
});

let seriestemp = [
  {
    name: 'Hall-01 Conveyer 1',
    data: conveyer1
  },
  {
    name: 'Hall-01 Conveyer 2',
    data: conveyer2
  },
  {
    name: 'Hall-01 Conveyer 3',
    data: conveyer3
  },
  {
    name: 'Hall-01 Conveyer 4',
    data: conveyer4
  },
  {
    name: 'Hall-01 Conveyer 5',
    data: conveyer5
  },
  {
    name: 'Hall-01 Conveyer 6',
    data: conveyer6
  },
  {
    name: 'Hall-01 Conveyer 7',
    data: conveyer7
  },
  {
    name: 'Hall-01 Conveyer 8',
    data: conveyer8
  },
  {
    name: 'Hall-01 Conveyer 9',
    data: conveyer9
  },
  {
    name: 'Hall-01 Conveyer 10',
    data: conveyer10
  },
  {
    name: 'Hall-02 Conveyer 31',
    data: conveyer31
  },
  {
    name: 'Hall-02 Conveyer 32',
    data: conveyer32
  },
  {
    name: 'Hall-02 Conveyer 33',
    data: conveyer33
  },
  {
    name: 'Hall-02 Conveyer 34',
    data: conveyer34
  },
  {
    name: 'Hall-02 Conveyer 35',
    data: conveyer35
  },
  {
    name: 'Hall-02 Conveyer 36',
    data: conveyer36
  },
  {
    name: 'Hall-02 Conveyer 37',
    data: conveyer37
  },
  {
    name: 'Hall-02 Conveyer 38',
    data: conveyer38
  },
  {
    name: 'Hall-02 Conveyer 39',
    data: conveyer39
  }

]

let seriestempMax = [
  {
    name: 'Hall-01 Conveyer 1',
    data: conveyer1Max
  },
  {
    name: 'Hall-01 Conveyer 2',
    data: conveyer2Max
  },
  {
    name: 'Hall-01 Conveyer 3',
    data: conveyer3Max
  },
  {
    name: 'Hall-01 Conveyer 4',
    data: conveyer4Max
  },
  {
    name: 'Hall-01 Conveyer 5',
    data: conveyer5Max
  },
  {
    name: 'Hall-01 Conveyer 6',
    data: conveyer6Max
  },
  {
    name: 'Hall-01 Conveyer 7',
    data: conveyer7Max
  },
  {
    name: 'Hall-01 Conveyer 8',
    data: conveyer8Max
  },
  {
    name: 'Hall-01 Conveyer 9',
    data: conveyer9Max
  },
  {
    name: 'Hall-01 Conveyer 10',
    data: conveyer10Max
  },
  {
    name: 'Hall-02 Conveyer 31',
    data: conveyer31Max
  },
  {
    name: 'Hall-02 Conveyer 32',
    data: conveyer32Max
  },
  {
    name: 'Hall-02 Conveyer 33',
    data: conveyer33Max
  },
  {
    name: 'Hall-02 Conveyer 34',
    data: conveyer34Max
  },
  {
    name: 'Hall-02 Conveyer 35',
    data: conveyer35Max
  },
  {
    name: 'Hall-02 Conveyer 36',
    data: conveyer36Max
  },
  {
    name: 'Hall-02 Conveyer 37',
    data: conveyer37Max
  },
  {
    name: 'Hall-02 Conveyer 38',
    data: conveyer38Max
  },
  {
    name: 'Hall-02 Conveyer 39',
    data: conveyer39Max
  }

]

let seriestempMin = [
  {
    name: 'Hall-01 Conveyer 1',
    data: conveyer1Min
  },
  {
    name: 'Hall-01 Conveyer 2',
    data: conveyer2Min
  },
  {
    name: 'Hall-01 Conveyer 3',
    data: conveyer3Min
  },
  {
    name: 'Hall-01 Conveyer 4',
    data: conveyer4Min
  },
  {
    name: 'Hall-01 Conveyer 5',
    data: conveyer5Min
  },
  {
    name: 'Hall-01 Conveyer 6',
    data: conveyer6Min
  },
  {
    name: 'Hall-01 Conveyer 7',
    data: conveyer7Min
  },
  {
    name: 'Hall-01 Conveyer 8',
    data: conveyer8Min
  },
  {
    name: 'Hall-01 Conveyer 9',
    data: conveyer9Min
  },
  {
    name: 'Hall-01 Conveyer 10',
    data: conveyer10Min
  },
  {
    name: 'Hall-02 Conveyer 31',
    data: conveyer31Min
  },
  {
    name: 'Hall-02 Conveyer 32',
    data: conveyer32Min
  },
  {
    name: 'Hall-02 Conveyer 33',
    data: conveyer33Min
  },
  {
    name: 'Hall-02 Conveyer 34',
    data: conveyer34Min
  },
  {
    name: 'Hall-02 Conveyer 35',
    data: conveyer35Min
  },
  {
    name: 'Hall-02 Conveyer 36',
    data: conveyer36Min
  },
  {
    name: 'Hall-02 Conveyer 37',
    data: conveyer37Min
  },
  {
    name: 'Hall-02 Conveyer 38',
    data: conveyer38Min
  },
  {
    name: 'Hall-02 Conveyer 39',
    data: conveyer39Min
  }

]

 Highcharts.chart('lineChartTemp', {

  title: {
    text: 'Temperature'
  },

  yAxis: {
    title: {
      text: 'Temperature'
    }
  },
  scrollbar: {
    enabled: true
},
  xAxis: {
    categories: dateValueLine,
    visible:false
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
}
else{
  $.ajax({

url: "<?php echo base_url(
  '/MIS/ParametersController/gethumidityConveyor'
); ?>",
method: "POST",
data: {
"c_date": c_date,
"e_date": e_date,
"conveyor":hallValue
},
success: function(data) {
  console.log("Data Get", data)
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


dateValueLine = [];
dateValueMax = [];
dateValueMin = [];
tempTm = []
tempMs1 = []
tempMs2 = []
conveyer1 = [];
conveyer2 = [];
conveyer3 = [];
conveyer4 = [];
conveyer5 = [];
conveyer6 = [];
conveyer7 = [];
conveyer8 = [];
conveyer9 = [];
conveyer10 = [];

conveyer1Max = [];
conveyer2Max = [];
conveyer3Max = [];
conveyer4Max = [];
conveyer5Max = [];
conveyer6Max = [];
conveyer7Max = [];
conveyer8Max = [];
conveyer9Max = [];
conveyer10Max = [];

conveyer1Min = [];
conveyer2Min = [];
conveyer3Min = [];
conveyer4Min = [];
conveyer5Min = [];
conveyer6Min = [];
conveyer7Min = [];
conveyer8Min = [];
conveyer9Min = [];
conveyer10Min = [];

conveyer31 = [];
conveyer32 = [];
conveyer33 = [];
conveyer34 = [];
conveyer35 = [];
conveyer36 = [];
conveyer37 = [];
conveyer38 = [];
conveyer39 = [];

conveyer31Max = [];
conveyer32Max = [];
conveyer33Max = [];
conveyer34Max = [];
conveyer35Max = [];
conveyer36Max = [];
conveyer37Max = [];
conveyer38Max = [];
conveyer39Max = [];

conveyer31Min = [];
conveyer32Min = [];
conveyer33Min = [];
conveyer34Min = [];
conveyer35Min = [];
conveyer36Min = [];
conveyer37Min = [];
conveyer38Min = [];
conveyer39Min = [];

 $.each(data['temperatureDataMax'], function(index, value) {
if(value.Name == "Hall-01 Conveyers TC-01"){
    conveyer1.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-02"){
    conveyer2.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-03"){
    conveyer3.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-04"){
    conveyer4.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-05"){
    conveyer5.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-06"){
    conveyer6.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-07"){
    conveyer7.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-08"){
    conveyer8.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-09"){
    conveyer9.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-10"){
    conveyer10.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-31"){
    conveyer31.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-32"){
    conveyer32.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-33"){
    conveyer33.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-34"){
    conveyer34.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-35"){
    conveyer35.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-36"){
    conveyer36.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-37"){
    conveyer37.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-38"){
    conveyer38.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-39"){
    conveyer39.push(parseInt(value.Temperature))
  }
  if (datetempAmb.indexOf(value.Date) === -1) {
    dateValueLine.push(value.Date);
    }


});

$.each(data['temperatureMaxOrg'], function(index, value) {
if(value.Name == "Hall-01 Conveyers TC-01"){
    conveyer1Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-02"){
    conveyer2Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-03"){
    conveyer3Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-04"){
    conveyer4Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-05"){
    conveyer5Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-06"){
    conveyer6Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-07"){
    conveyer7Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-08"){
    conveyer8Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-09"){
    conveyer9Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-10"){
    conveyer10Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-31"){
    conveyer31Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-32"){
    conveyer32Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-33"){
    conveyer33Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-34"){
    conveyer34Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-35"){
    conveyer35Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-36"){
    conveyer36Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-37"){
    conveyer37Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-38"){
    conveyer38Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-39"){
    conveyer39Max.push(parseInt(value.Temperature))
  }
  if (datetempAmb.indexOf(value.Date) === -1) {
    dateValueMax.push(value.Date);
    }
});

$.each(data['temperatureMin'], function(index, value) {
if(value.Name == "Hall-01 Conveyers TC-01"){
    conveyer1Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-02"){
    conveyer2Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-03"){
    conveyer3Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-04"){
    conveyer4Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-05"){
    conveyer5Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-06"){
    conveyer6Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-07"){
    conveyer7Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-08"){
    conveyer8Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-09"){
    conveyer9Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-10"){
    conveyer10Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-31"){
    conveyer31Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-32"){
    conveyer32Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-33"){
    conveyer33Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-34"){
    conveyer34Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-35"){
    conveyer35Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-36"){
    conveyer36Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-37"){
    conveyer37Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-38"){
    conveyer38Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-39"){
    conveyer39Min.push(parseInt(value.Temperature))
  }
  if (datetempAmb.indexOf(value.Date) === -1) {
    dateValueMin.push(value.Date);
    }
});
let seriestemp = [];
let seriestempMax = [];
let seriestempMin = [];
if(conveyer1.length > 0){
   seriestemp.push(
  {
    name: 'Hall-01 Conveyer 1',
    data: conveyer1
  }
   )
}
else if(conveyer2.length > 0){
  seriestemp.push(
  {
    name: 'Hall-01 Conveyer 2',
    data: conveyer2
  }
  )
}
else if(conveyer3.length > 0){
  seriestemp.push(
  {
    name: 'Hall-01 Conveyer 3',
    data: conveyer3
  }
  )
}
else if(conveyer4.length > 0){
  seriestemp.push(
  {
    name: 'Hall-01 Conveyer 4',
    data: conveyer4
  }
  )
}
else if(conveyer5.length > 0){
  seriestemp.push(
  {
    name: 'Hall-01 Conveyer 5',
    data: conveyer5
  }
  )
}
else if(conveyer6.length > 0){
  seriestemp.push(
  {
    name: 'Hall-01 Conveyer 6',
    data: conveyer6
  }
  )
}
else if(conveyer7.length > 0){
  seriestemp.push(
  {
    name: 'Hall-01 Conveyer 7',
    data: conveyer7
  }
  )
}
else if(conveyer8.length > 0){
  seriestemp.push(
  {
    name: 'Hall-01 Conveyer 8',
    data: conveyer8
  }
  )
}
else if(conveyer9.length > 0){
  seriestemp.push(
  {
    name: 'Hall-01 Conveyer 9',
    data: conveyer9
  }
  )
}
else if(conveyer10.length > 0){
  seriestemp.push(
  {
    name: 'Hall-01 Conveyer 10',
    data: conveyer10
  }
  )
}
else if(conveyer31.length > 0){
  seriestemp.push(
  {
    name: 'Hall-02 Conveyer 31',
    data: conveyer31
  }
  )
}
else if(conveyer32.length > 0){
  seriestemp.push(
  {
    name: 'Hall-02 Conveyer 32',
    data: conveyer32
  }
  )
}
else if(conveyer33.length > 0){
  seriestemp.push(
  {
    name: 'Hall-02 Conveyer 33',
    data: conveyer33
  }
  )
}
else if(conveyer34.length > 0){
  seriestemp.push(
  {
    name: 'Hall-02 Conveyer 34',
    data: conveyer34
  }
  )
}
else if(conveyer35.length > 0){
  seriestemp.push(
  {
    name: 'Hall-02 Conveyer 35',
    data: conveyer35
  }
  )
}
else if(conveyer36.length > 0){
  seriestemp.push(
  {
    name: 'Hall-02 Conveyer 36',
    data: conveyer36
  }
  )
}
else if(conveyer37.length > 0){
  seriestemp.push(
  {
    name: 'Hall-02 Conveyer 37',
    data: conveyer37
  }
  )
}
else if(conveyer38.length > 0){
  seriestemp.push(
  {
    name: 'Hall-02 Conveyer 38',
    data: conveyer38
  }
  )
}
else if(conveyer39.length > 0){
  seriestemp.push(
  {
    name: 'Hall-02 Conveyer 39',
    data: conveyer39
  }
  )
}

if(conveyer1Max.length > 0){
  seriestempMax.push(
  {
    name: 'Hall-01 Conveyer 1',
    data: conveyer1Max
  }
  )
}
else if(conveyer2Max.length > 0){
  seriestempMax.push(
  {
    name: 'Hall-01 Conveyer 2',
    data: conveyer2Max
  }
  )
}
else if(conveyer3Max.length > 0){
  seriestempMax.push(
  {
    name: 'Hall-01 Conveyer 3',
    data: conveyer3Max
  }
  )
}
else if(conveyer4Max.length > 0){
  seriestempMax.push(
  {
    name: 'Hall-01 Conveyer 4',
    data: conveyer4Max
  }
  )
}
else if(conveyer5Max.length > 0){
  seriestempMax.push(
  {
    name: 'Hall-01 Conveyer 5',
    data: conveyer5Max
  }
  )
}
else if(conveyer6Max.length > 0){
  seriestempMax.push(
  {
    name: 'Hall-01 Conveyer 6',
    data: conveyer6Max
  }
  )
}
else if(conveyer7Max.length > 0){
  seriestempMax.push(
  {
    name: 'Hall-01 Conveyer 7',
    data: conveyer7Max
  }
  )
}
else if(conveyer8Max.length > 0){
  seriestempMax.push(
  {
    name: 'Hall-01 Conveyer 8',
    data: conveyer8Max
  }
  )
}
else if(conveyer9Max.length > 0){
  seriestempMax.push(
  {
    name: 'Hall-01 Conveyer 9',
    data: conveyer9Max
  }
  )
}
else if(conveyer10Max.length > 0){
  seriestempMax.push(
  {
    name: 'Hall-01 Conveyer 10',
    data: conveyer10Max
  }
  )
}
else if(conveyer31Max.length > 0){
  seriestempMax.push(
  {
    name: 'Hall-02 Conveyer 31',
    data: conveyer31Max
  }
  )
}
else if(conveyer32Max.length > 0){
  seriestempMax.push(
  {
    name: 'Hall-02 Conveyer 32',
    data: conveyer32Max
  }
  )
}
else if(conveyer33Max.length > 0){
  seriestempMax.push(
  {
    name: 'Hall-02 Conveyer 33',
    data: conveyer33Max
  }
  )
}
else if(conveyer34Max.length > 0){
  seriestempMax.push(
  {
    name: 'Hall-02 Conveyer 34',
    data: conveyer34Max
  }
  )
}
else if(conveyer35Max.length > 0){
  seriestempMax.push(
  {
    name: 'Hall-02 Conveyer 35',
    data: conveyer35Max
  }
  )
}
else if(conveyer36Max.length > 0){
  seriestempMax.push(
  {
    name: 'Hall-02 Conveyer 36',
    data: conveyer36Max
  }
  )
}
else if(conveyer37Max.length > 0){
  seriestempMax.push(
  {
    name: 'Hall-02 Conveyer 37',
    data: conveyer37Max
  }
  )
}
else if(conveyer38Max.length > 0){
  seriestempMax.push(
  {
    name: 'Hall-02 Conveyer 38',
    data: conveyer38Max
  }
  )
}
else if(conveyer39Max.length > 0){
  seriestempMax.push(
  {
    name: 'Hall-02 Conveyer 39',
    data: conveyer39Max
  }
  )
}

if(conveyer1Min.length > 0){
  seriestempMin.push(
  {
    name: 'Hall-01 Conveyer 1',
    data: conveyer1Min
  }
  )
}
else if(conveyer2Min.length > 0){
  seriestempMin.push(
  {
    name: 'Hall-01 Conveyer 2',
    data: conveyer2Min
  }
  )
}
else if(conveyer3Min.length > 0){
  seriestempMin.push(
  {
    name: 'Hall-01 Conveyer 3',
    data: conveyer3Min
  }
  )
}
else if(conveyer4Min.length > 0){
  seriestempMin.push(
  {
    name: 'Hall-01 Conveyer 4',
    data: conveyer4Min
  }
  )
}
else if(conveyer5Min.length > 0){
  seriestempMin.push(
  {
    name: 'Hall-01 Conveyer 5',
    data: conveyer5Min
  }
  )
}
else if(conveyer6Min.length > 0){
  seriestempMin.push(
  {
    name: 'Hall-01 Conveyer 6',
    data: conveyer6Min
  }
  )
}
else if(conveyer7Min.length > 0){
  seriestempMin.push(
  {
    name: 'Hall-01 Conveyer 7',
    data: conveyer7Min
  }
  )
}
else if(conveyer8Min.length > 0){
  seriestempMin.push(
  {
    name: 'Hall-01 Conveyer 8',
    data: conveyer8Min
  }
  )
}
else if(conveyer9Min.length > 0){
  seriestempMin.push(
  {
    name: 'Hall-01 Conveyer 9',
    data: conveyer9Min
  }
  )
}
else if(conveyer10Min.length > 0){
  seriestempMin.push(
  {
    name: 'Hall-01 Conveyer 10',
    data: conveyer10Min
  }
  )
}
else if(conveyer31Min.length > 0){
  seriestempMin.push(
  {
    name: 'Hall-02 Conveyer 31',
    data: conveyer31Min
  }
  )
}
else if(conveyer32Min.length > 0){
  seriestempMin.push(
  {
    name: 'Hall-02 Conveyer 32',
    data: conveyer32Min
  }
  )
}
else if(conveyer33Min.length > 0){
  seriestempMin.push(
  {
    name: 'Hall-02 Conveyer 33',
    data: conveyer33Min
  }
  )
}
else if(conveyer34Min.length > 0){
  seriestempMin.push(
  {
    name: 'Hall-02 Conveyer 34',
    data: conveyer34Min
  }
  )
}
else if(conveyer35Min.length > 0){
  seriestempMin.push(
  {
    name: 'Hall-02 Conveyer 35',
    data: conveyer35Min
  }
  )
}
else if(conveyer36Min.length > 0){
  seriestempMin.push(
  {
    name: 'Hall-02 Conveyer 36',
    data: conveyer36Min
  }
  )
}
else if(conveyer37Min.length > 0){
  seriestempMin.push(
  {
    name: 'Hall-02 Conveyer 37',
    data: conveyer37Min
  }
  )
}
else if(conveyer38Min.length > 0){
  seriestempMin.push(
  {
    name: 'Hall-02 Conveyer 38',
    data: conveyer38Min
  }
  )
}
else if(conveyer39Min.length > 0){
  seriestempMin.push(
  {
    name: 'Hall-02 Conveyer 39',
    data: conveyer39Min
  }
  )
}

 Highcharts.chart('lineChartTemp', {

  title: {
    text: 'Temperature'
  },

  yAxis: {
    title: {
      text: 'Temperature'
    }
  },
  scrollbar: {
    enabled: true
},
  xAxis: {
    categories: dateValueLine,
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
}

}


      window.onload = function() {

        c_date = $('#SDate').val();
        e_date = $('#EDate').val();

        $.ajax({

url: "<?php echo base_url(
  '/MIS/ParametersController/gethumidity'
); ?>",
method: "POST",
data: {
"c_date": c_date,
"e_date": e_date,

},
success: function(data) {
  console.log("Data Get", data)
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


dateValueLine = [];
dateValueMax = [];
dateValueMin = [];
tempTm = []
tempMs1 = []
tempMs2 = []
conveyer1 = [];
conveyer2 = [];
conveyer3 = [];
conveyer4 = [];
conveyer5 = [];
conveyer6 = [];
conveyer7 = [];
conveyer8 = [];
conveyer9 = [];
conveyer10 = [];

conveyer1Max = [];
conveyer2Max = [];
conveyer3Max = [];
conveyer4Max = [];
conveyer5Max = [];
conveyer6Max = [];
conveyer7Max = [];
conveyer8Max = [];
conveyer9Max = [];
conveyer10Max = [];

conveyer1Min = [];
conveyer2Min = [];
conveyer3Min = [];
conveyer4Min = [];
conveyer5Min = [];
conveyer6Min = [];
conveyer7Min = [];
conveyer8Min = [];
conveyer9Min = [];
conveyer10Min = [];
// conveyer11 = [];
// conveyer12 = [];
// conveyer13 = [];
// conveyer14 = [];
// conveyer15 = [];
// conveyer16 = [];
// conveyer17 = [];
// conveyer18 = [];
// conveyer19 = [];
// conveyer20 = [];
// conveyer21 = [];
// conveyer22= [];
// conveyer23 = [];
// conveyer24 = [];
// conveyer25 = [];
// conveyer26 = [];
// conveyer27 = [];
// conveyer28 = [];
// conveyer29 = [];
// conveyer30 = [];
conveyer31 = [];
conveyer32 = [];
conveyer33 = [];
conveyer34 = [];
conveyer35 = [];
conveyer36 = [];
conveyer37 = [];
conveyer38 = [];
conveyer39 = [];

conveyer31Max = [];
conveyer32Max = [];
conveyer33Max = [];
conveyer34Max = [];
conveyer35Max = [];
conveyer36Max = [];
conveyer37Max = [];
conveyer38Max = [];
conveyer39Max = [];

conveyer31Min = [];
conveyer32Min = [];
conveyer33Min = [];
conveyer34Min = [];
conveyer35Min = [];
conveyer36Min = [];
conveyer37Min = [];
conveyer38Min = [];
conveyer39Min = [];
// conveyer40 = [];
// conveyer41 = [];
// conveyer42 = [];
// conveyer43 = [];
// conveyer44 = [];
// conveyer45 = [];
// conveyer46 = [];
// conveyer47 = [];
// conveyer48 = [];
// conveyer49= [];
// conveyer50 = [];
// conveyer51 = [];
// conveyer52 = [];
// conveyer53 = [];
// conveyer54 = [];
// conveyer55 = [];
// conveyer56 = [];
// conveyer57 = [];
// conveyer58 = [];
// conveyer59 = [];
// conveyer60 = [];

 $.each(data['temperatureDataMax'], function(index, value) {
if(value.Name == "Hall-01 Conveyers TC-01"){
    conveyer1.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-02"){
    conveyer2.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-03"){
    conveyer3.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-04"){
    conveyer4.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-05"){
    conveyer5.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-06"){
    conveyer6.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-07"){
    conveyer7.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-08"){
    conveyer8.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-09"){
    conveyer9.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-10"){
    conveyer10.push(parseInt(value.Temperature))
  }
  // else if(value.Name == "Hall-01 Conveyers TC-11"){
  //   conveyer11.push(parseInt(value.Temperature))
  // }
  //  else if(value.Name == "Hall-01 Conveyers TC-12"){
  //   conveyer12.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-01 Conveyers TC-13"){
  //   conveyer13.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-01 Conveyers TC-14"){
  //   conveyer14.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-01 Conveyers TC-15"){
  //   conveyer15.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-01 Conveyers TC-16"){
  //   conveyer16.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-01 Conveyers TC-17"){
  //   conveyer17.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-01 Conveyers TC-18"){
  //   conveyer18.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-01 Conveyers TC-19"){
  //   conveyer19.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-01 Conveyers TC-20"){
  //   conveyer20.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-01 Conveyers TC-21"){
  //   conveyer21.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-01 Conveyers TC-22"){
  //   conveyer22.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-01 Conveyers TC-23"){
  //   conveyer23.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-01 Conveyers TC-24"){
  //   conveyer24.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-01 Conveyers TC-25"){
  //   conveyer25.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-01 Conveyers TC-26"){
  //   conveyer26.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-01 Conveyers TC-27"){
  //   conveyer27.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-01 Conveyers TC-28"){
  //   conveyer28.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-01 Conveyers TC-29"){
  //   conveyer29.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-01 Conveyers TC-30"){
  //   conveyer30.push(parseInt(value.Temperature))
  // }
  else if(value.Name == "Hall-02 Conveyers TC-31"){
    conveyer31.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-32"){
    conveyer32.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-33"){
    conveyer33.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-34"){
    conveyer34.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-35"){
    conveyer35.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-36"){
    conveyer36.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-37"){
    conveyer37.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-38"){
    conveyer38.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-39"){
    conveyer39.push(parseInt(value.Temperature))
  }
  // else if(value.Name == "Hall-02 Conveyers TC-40"){
  //   conveyer40.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-02 Conveyers TC-41"){
  //   conveyer41.push(parseInt(value.Temperature))
  // }
  //  else if(value.Name == "Hall-02 Conveyers TC-42"){
  //   conveyer42.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-02 Conveyers TC-43"){
  //   conveyer43.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-02 Conveyers TC-44"){
  //   conveyer44.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-02 Conveyers TC-45"){
  //   conveyer45.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-02 Conveyers TC-46"){
  //   conveyer46.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-02 Conveyers TC-47"){
  //   conveyer47.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-02 Conveyers TC-48"){
  //   conveyer48.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-02 Conveyers TC-49"){
  //   conveyer49.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-02 Conveyers TC-50"){
  //   conveyer50.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-02 Conveyers TC-51"){
  //   conveyer51.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-02 Conveyers TC-52"){
  //   conveyer52.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-02 Conveyers TC-53"){
  //   conveyer53.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-02 Conveyers TC-54"){
  //   conveyer54.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-02 Conveyers TC-55"){
  //   conveyer55.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-02 Conveyers TC-56"){
  //   conveyer56.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-02 Conveyers TC-57"){
  //   conveyer57.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-02 Conveyers TC-58"){
  //   conveyer58.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-02 Conveyers TC-59"){
  //   conveyer59.push(parseInt(value.Temperature))
  // }
  // else if(value.Name == "Hall-02 Conveyers TC-60"){
  //   conveyer60.push(parseInt(value.Temperature))
  // }
  if (datetempAmb.indexOf(value.Date) === -1) {
    dateValueLine.push(value.Date);
    }


});

$.each(data['temperatureMaxOrg'], function(index, value) {
if(value.Name == "Hall-01 Conveyers TC-01"){
    conveyer1Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-02"){
    conveyer2Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-03"){
    conveyer3Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-04"){
    conveyer4Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-05"){
    conveyer5Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-06"){
    conveyer6Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-07"){
    conveyer7Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-08"){
    conveyer8Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-09"){
    conveyer9Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-10"){
    conveyer10Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-31"){
    conveyer31Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-32"){
    conveyer32Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-33"){
    conveyer33Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-34"){
    conveyer34Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-35"){
    conveyer35Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-36"){
    conveyer36Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-37"){
    conveyer37Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-38"){
    conveyer38Max.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-39"){
    conveyer39Max.push(parseInt(value.Temperature))
  }
  if (datetempAmb.indexOf(value.Date) === -1) {
    dateValueMax.push(value.Date);
    }
});

$.each(data['temperatureMin'], function(index, value) {
if(value.Name == "Hall-01 Conveyers TC-01"){
    conveyer1Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-02"){
    conveyer2Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-03"){
    conveyer3Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-04"){
    conveyer4Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-05"){
    conveyer5Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-06"){
    conveyer6Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-07"){
    conveyer7Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-08"){
    conveyer8Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-09"){
    conveyer9Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-01 Conveyers TC-10"){
    conveyer10Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-31"){
    conveyer31Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-32"){
    conveyer32Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-33"){
    conveyer33Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-34"){
    conveyer34Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-35"){
    conveyer35Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-36"){
    conveyer36Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-37"){
    conveyer37Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-38"){
    conveyer38Min.push(parseInt(value.Temperature))
  }
  else if(value.Name == "Hall-02 Conveyers TC-39"){
    conveyer39Min.push(parseInt(value.Temperature))
  }
  if (datetempAmb.indexOf(value.Date) === -1) {
    dateValueMin.push(value.Date);
    }
});

let seriestemp = [
  {
    name: 'Hall-01 Conveyer 1',
    data: conveyer1
  },
  {
    name: 'Hall-01 Conveyer 2',
    data: conveyer2
  },
  {
    name: 'Hall-01 Conveyer 3',
    data: conveyer3
  },
  {
    name: 'Hall-01 Conveyer 4',
    data: conveyer4
  },
  {
    name: 'Hall-01 Conveyer 5',
    data: conveyer5
  },
  {
    name: 'Hall-01 Conveyer 6',
    data: conveyer6
  },
  {
    name: 'Hall-01 Conveyer 7',
    data: conveyer7
  },
  {
    name: 'Hall-01 Conveyer 8',
    data: conveyer8
  },
  {
    name: 'Hall-01 Conveyer 9',
    data: conveyer9
  },
  {
    name: 'Hall-01 Conveyer 10',
    data: conveyer10
  },
  {
    name: 'Hall-02 Conveyer 31',
    data: conveyer31
  },
  {
    name: 'Hall-02 Conveyer 32',
    data: conveyer32
  },
  {
    name: 'Hall-02 Conveyer 33',
    data: conveyer33
  },
  {
    name: 'Hall-02 Conveyer 34',
    data: conveyer34
  },
  {
    name: 'Hall-02 Conveyer 35',
    data: conveyer35
  },
  {
    name: 'Hall-02 Conveyer 36',
    data: conveyer36
  },
  {
    name: 'Hall-02 Conveyer 37',
    data: conveyer37
  },
  {
    name: 'Hall-02 Conveyer 38',
    data: conveyer38
  },
  {
    name: 'Hall-02 Conveyer 39',
    data: conveyer39
  }

]

let seriestempMax = [
  {
    name: 'Hall-01 Conveyer 1',
    data: conveyer1Max
  },
  {
    name: 'Hall-01 Conveyer 2',
    data: conveyer2Max
  },
  {
    name: 'Hall-01 Conveyer 3',
    data: conveyer3Max
  },
  {
    name: 'Hall-01 Conveyer 4',
    data: conveyer4Max
  },
  {
    name: 'Hall-01 Conveyer 5',
    data: conveyer5Max
  },
  {
    name: 'Hall-01 Conveyer 6',
    data: conveyer6Max
  },
  {
    name: 'Hall-01 Conveyer 7',
    data: conveyer7Max
  },
  {
    name: 'Hall-01 Conveyer 8',
    data: conveyer8Max
  },
  {
    name: 'Hall-01 Conveyer 9',
    data: conveyer9Max
  },
  {
    name: 'Hall-01 Conveyer 10',
    data: conveyer10Max
  },
  {
    name: 'Hall-02 Conveyer 31',
    data: conveyer31Max
  },
  {
    name: 'Hall-02 Conveyer 32',
    data: conveyer32Max
  },
  {
    name: 'Hall-02 Conveyer 33',
    data: conveyer33Max
  },
  {
    name: 'Hall-02 Conveyer 34',
    data: conveyer34Max
  },
  {
    name: 'Hall-02 Conveyer 35',
    data: conveyer35Max
  },
  {
    name: 'Hall-02 Conveyer 36',
    data: conveyer36Max
  },
  {
    name: 'Hall-02 Conveyer 37',
    data: conveyer37Max
  },
  {
    name: 'Hall-02 Conveyer 38',
    data: conveyer38Max
  },
  {
    name: 'Hall-02 Conveyer 39',
    data: conveyer39Max
  }

]

let seriestempMin = [
  {
    name: 'Hall-01 Conveyer 1',
    data: conveyer1Min
  },
  {
    name: 'Hall-01 Conveyer 2',
    data: conveyer2Min
  },
  {
    name: 'Hall-01 Conveyer 3',
    data: conveyer3Min
  },
  {
    name: 'Hall-01 Conveyer 4',
    data: conveyer4Min
  },
  {
    name: 'Hall-01 Conveyer 5',
    data: conveyer5Min
  },
  {
    name: 'Hall-01 Conveyer 6',
    data: conveyer6Min
  },
  {
    name: 'Hall-01 Conveyer 7',
    data: conveyer7Min
  },
  {
    name: 'Hall-01 Conveyer 8',
    data: conveyer8Min
  },
  {
    name: 'Hall-01 Conveyer 9',
    data: conveyer9Min
  },
  {
    name: 'Hall-01 Conveyer 10',
    data: conveyer10Min
  },
  {
    name: 'Hall-02 Conveyer 31',
    data: conveyer31Min
  },
  {
    name: 'Hall-02 Conveyer 32',
    data: conveyer32Min
  },
  {
    name: 'Hall-02 Conveyer 33',
    data: conveyer33Min
  },
  {
    name: 'Hall-02 Conveyer 34',
    data: conveyer34Min
  },
  {
    name: 'Hall-02 Conveyer 35',
    data: conveyer35Min
  },
  {
    name: 'Hall-02 Conveyer 36',
    data: conveyer36Min
  },
  {
    name: 'Hall-02 Conveyer 37',
    data: conveyer37Min
  },
  {
    name: 'Hall-02 Conveyer 38',
    data: conveyer38Min
  },
  {
    name: 'Hall-02 Conveyer 39',
    data: conveyer39Min
  }

]

 Highcharts.chart('lineChartTemp', {

  title: {
    text: 'Temperature'
  },

  yAxis: {
    title: {
      text: 'Temperature'
    }
  },
  scrollbar: {
    enabled: true
},
  xAxis: {
    categories: dateValueLine,
    visible:false
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

       
//         $.ajax({

//           url: "<?php echo base_url('/MIS/TemHumidityController/gethumMax'); ?>",
//           method: "POST",
//           data: {
//             "c_date": c_date,
//             "e_date": e_date,

//           },
//           success: function(data) {

//             hummax = [];
//             humiditymax = [];
//             datesArray = [];
//             hallmax1 = [];
//             hallmax2 = [];
//             hallmax3 = [];
//             hallmax4 = [];
//             hallmin1 = [];
//             hallmin2 = [];
//             hallmin3 = [];
//             hallmin4 = [];
//             halltempmax1 = [];
//             halltempmax2 = [];
//             halltempmax3 = [];
//             halltempmax4 = [];
//             halltempmin1 = [];
//             halltempmin2 = [];
//             halltempmin3 = [];
//             halltempmin4 = [];
//             $.each(data['max'], function(index, value) {
//               if (value.HallName == "TM Hall") {
//                 hallmax1.push(parseFloat(value.Humdity));
//               } else if (value.HallName == "MS Hall-1") {
//                 hallmax2.push(parseFloat(value.Humdity));
//               } else if (value.HallName == "AMB Hall") {
//                 hallmax3.push(parseFloat(value.Humdity));
//               } else if (value.HallName == "MS Hall-2") {
//                 hallmax4.push(parseFloat(value.Humdity));
//               }
//             });
//             $.each(data['min'], function(index, value) {
//               if (value.HallName == "TM Hall") {
//                 hallmin1.push(parseFloat(value.Humdity));
//               } else if (value.HallName == "MS Hall-1") {
//                 hallmin2.push(parseFloat(value.Humdity));
//               } else if (value.HallName == "AMB Hall") {
//                 hallmin3.push(parseFloat(value.Humdity));
//               } else if (value.HallName == "MS Hall-2") {
//                 hallmin4.push(parseFloat(value.Humdity));
//               }
//             });
//             $.each(data['tempmax'], function(index, value) {
//               if (value.Name == "TM Hall") {
//                 halltempmax1.push(parseFloat(value.Temperature));
//               } else if (value.Name == "MS Hall-1") {
//                 halltempmax2.push(parseFloat(value.Temperature));
//               } else if (value.Name == "AMB Hall") {
//                 halltempmax3.push(parseFloat(value.Temperature));
//               } else if (value.Name == "MS Hall-2") {
//                 halltempmax4.push(parseFloat(value.Temperature));
//               }
//             });
//             $.each(data['tempmin'], function(index, value) {
//               if (value.Name == "TM Hall") {
//                 halltempmin1.push(parseFloat(value.Temperature));
//               } else if (value.Name == "MS Hall-1") {
//                 halltempmin2.push(parseFloat(value.Temperature));
//               } else if (value.Name == "AMB Hall") {
//                 halltempmin3.push(parseFloat(value.Temperature));
//               } else if (value.Name == "MS Hall-2") {
//                 halltempmin4.push(parseFloat(value.Temperature));
//               }
//             });
//             $.each(data['max'], function(index, value) {
//               if (datesArray.indexOf(value.Date) === -1) {
//                 datesArray.push(value.Date);
//               }
//             });
//             console.log("from table and latest", data)
//             console.log("Dates Array", datesArray)
//             data['max'].forEach(element => {
//               hummax.push(element['HallName']);

//             })
//             data['max'].forEach(element => {
//               humiditymax.push(element['Humdity']);
//             })

//             let seriesData = [{
//                 name: 'TM Hall',
//                 data: hallmax1
//               },
//               {
//                 name: 'MS Hall-1',
//                 data: hallmax2
//               },
//               {
//                 name: 'AMB Hall',
//                 data: hallmax3
//               },
//               {
//                 name: 'MS Hall-2',
//                 data: hallmax4
//               },
//             ]
//             let seriesDataMin = [{
//                 name: 'TM Hall',
//                 data: hallmin1
//               },
//               {
//                 name: 'MS Hall-1',
//                 data: hallmin2
//               },
//               {
//                 name: 'AMB Hall',
//                 data: hallmin3
//               },
//               {
//                 name: 'MS Hall-2',
//                 data: hallmin4
//               },
//             ]
//             let seriesDataTempMax = [{
//                 name: 'TM Hall',
//                 data: halltempmax1
//               },
//               {
//                 name: 'MS Hall-1',
//                 data: halltempmax2
//               },
//               {
//                 name: 'AMB Hall',
//                 data: halltempmax3
//               },
//               {
//                 name: 'MS Hall-2',
//                 data: halltempmax4
//               },
//             ]
//             let seriesDataTempMin = [{
//                 name: 'TM Hall',
//                 data: halltempmin1
//               },
//               {
//                 name: 'MS Hall-1',
//                 data: halltempmin2
//               },
//               {
//                 name: 'AMB Hall',
//                 data: halltempmin3
//               },
//               {
//                 name: 'MS Hall-2',
//                 data: halltempmin4
//               },
//             ]
//             Highcharts.chart('HumidityMax', {
//               chart: {
//                 type: 'column'
//               },
//               title: {
//                 text: 'Humidity Maximum'
//               },

//               xAxis: {
//                 categories: datesArray,
//                 crosshair: true
//               },
//               yAxis: {
//                 min: 0,
//                 title: {
//                   text: 'Humidity (Max)'
//                 }
//               },
//               tooltip: {
//                 headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
//                 pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
//                   '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
//                 footerFormat: '</table>',
//                 shared: true,
//                 useHTML: true
//               },
//               plotOptions: {
//                 column: {
//                   pointPadding: 0.2,
//                   borderWidth: 0
//                 }
//               },
//               series: seriesData
//             });

//             Highcharts.chart('HumidityMin', {
//               chart: {
//                 type: 'column'
//               },
//               title: {
//                 text: 'Humidity Minimum'
//               },
//               xAxis: {
//                 categories: datesArray,
//                 crosshair: true
//               },
//               yAxis: {
//                 min: 0,
//                 title: {
//                   text: 'Humidity (min)'
//                 }
//               },
//               tooltip: {
//                 headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
//                 pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
//                   '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
//                 footerFormat: '</table>',
//                 shared: true,
//                 useHTML: true
//               },
//               plotOptions: {
//                 column: {
//                   pointPadding: 0.2,
//                   borderWidth: 0
//                 }
//               },
//               series: seriesDataMin
//             });
//             Highcharts.chart('Tempmax', {
//               chart: {
//                 type: 'column'
//               },
//               title: {
//                 text: 'Temprature Maximum'
//               },

//               xAxis: {
//                 categories: datesArray,
//                 crosshair: true
//               },
//               yAxis: {
//                 min: 0,
//                 title: {
//                   text: 'Temprature (Max)'
//                 }
//               },
//               tooltip: {
//                 headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
//                 pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
//                   '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
//                 footerFormat: '</table>',
//                 shared: true,
//                 useHTML: true
//               },
//               plotOptions: {
//                 column: {
//                   pointPadding: 0.2,
//                   borderWidth: 0
//                 }
//               },
//               series: seriesDataTempMax
//             });

//             Highcharts.chart('TempMin', {
//               chart: {
//                 type: 'column'
//               },
//               title: {
//                 text: 'Temperature Minimum'
//               },
//               xAxis: {
//                 categories: datesArray,
//                 crosshair: true
//               },
//               yAxis: {
//                 min: 0,
//                 title: {
//                   text: 'Temprature (min)'
//                 }
//               },
//               tooltip: {
//                 headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
//                 pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
//                   '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
//                 footerFormat: '</table>',
//                 shared: true,
//                 useHTML: true
//               },
//               plotOptions: {
//                 column: {
//                   pointPadding: 0.2,
//                   borderWidth: 0
//                 }
//               },
//               series: seriesDataTempMin
//             });

//             Highcharts.chart('lineChart', {

//               title: {
//                 text: 'Solar Employment Growth by Sector, 2010-2016'
//               },

//               subtitle: {
//                 text: 'Source: thesolarfoundation.com'
//               },

//               yAxis: {
//                 title: {
//                   text: 'Number of Employees'
//                 }
//               },

//               xAxis: {
//                 accessibility: {
//                   rangeDescription: 'Range: 2010 to 2017'
//                 }
//               },

//               legend: {
//                 layout: 'vertical',
//                 align: 'right',
//                 verticalAlign: 'middle'
//               },

//               plotOptions: {
//                 series: {
//                   label: {
//                     connectorAllowed: false
//                   },
//                   pointStart: 2010
//                 }
//               },

//               series: [{
//                 name: 'Installation',
//                 data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
//               }, {
//                 name: 'Manufacturing',
//                 data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
//               }, {
//                 name: 'Sales & Distribution',
//                 data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
//               }, {
//                 name: 'Project Development',
//                 data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
//               }, {
//                 name: 'Other',
//                 data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
//               }],

//               responsive: {
//                 rules: [{
//                   condition: {
//                     maxWidth: 500
//                   },
//                   chartOptions: {
//                     legend: {
//                       layout: 'horizontal',
//                       align: 'center',
//                       verticalAlign: 'bottom'
//                     }
//                   }
//                 }]
//               }

//             });
      //     }

      //   })


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

    </div>

    </body>


    <script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
      <script type="text/javascript">
          /* Activate smart panels */
          $('#js-page-content').smartPanel();
      </script>

  <?php } else {redirect('Welcome/index');}
?>


  

<?php
}
?>

          </div>

        </main>

      </div>

    </div>

    </div>

  </div>         
                  
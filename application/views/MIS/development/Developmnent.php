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
                                                                <li class="breadcrumb-item">Dashboard</li>


                        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                    </ol>

                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-chart-area'></i>Dashboard</span>

                        </h1>
                    </div>
          <?php
if ($this->session->userdata('userStus') == 1) { ?>


  <body>

    <div id="right-panel" class="right-panel">

      <style>



      </style>
      <link href="<?php link_file(
          'assets/qa_assets/main.css'
      ); ?>" rel="stylesheet">

     
     


   <?php
   $ProcessDate = [];
   //print_r($RDate);
   foreach ($RDate as $key) {
       $RDatee = [$key['Datee']];
       array_push($ProcessDate, $RDatee);
   }

   $Month = date('m');
   $Year = date('Y');
   $Day = date('d');
   $CurrentDate = $Year . '-' . $Month . '-' . $Day;
   ?>

<div class="card">
  <div class="card-body">
  <h5 class="card-title"><b>Date Filteration</b></h5>
      <div class="row clearfix" >
      <div class="col-md-2" >
            <div class="position-relative form-group">
                <label for="factory" class="">Filteration Type</label>
                <select  id="filterationSelection" class="form-control" onchange="changeType()">
                <option value="All">All</option>
                      <option value="date">Date Wise</option>
                      <option value="article">Article Wise</option>
                      <option value="type">Type Wise</option>
                      <option value="season">Season Wise</option>
                </select>
            </div>
        </div>

        <div class="col-md-2" id="fcShow" style="display: none;">
            <div class="position-relative form-group" >
            <label for="sel1">Select Factory Code :</label>
                      <select class="form-control" id="FC" name="fC">
                        <option value="">Select one of the following</option>


                        <option value="B34001">B34001</option>
                        <option value="B34002">B34002</option>
                        <option value="B34003">B34003</option>
                        <option value="B34004">B34004</option>
                        <option value="B34005">B34005</option>
                        <option value="B34006">B34006</option>
                        <option value="B34007">B34007</option>

                      </select>
            </div>
        </div>

        <div class="col-md-2" id="seasonShow" style="display: none;">
            <div class="position-relative form-group" >
            <label for="sel1">Select Seasonal Range :</label>
                      <select class="form-control" id="season" name="season">
                        <option value="">Select one of the following</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>


                      </select>
            </div>
        </div>
        <div class="col-md-2" style="margin-right:20px;" id="startDateShow">
        
        <div class="form-group">
     
          <label class="form-control-label">From Date:</label>
          <div class="input-group">
            <input class="form-control" type="Date" onchange="setStartDate()" id="SDate" name="Sdate" value="<?php echo $CurrentDate; ?>" style="width: 100%">
          </div>
        </div>
      </div>
      <div class="col-md-2" id="endDateShow">
        <div class="form-group">
          <label class="form-control-label">To Date:</label>
          <div class="input-group">
            <input class="form-control" type="Date" id="EDate" onchange="setEndDate()" name="Edate" value="<?php echo $CurrentDate; ?>" style="width: 100%">
          </div>
        </div>
      </div>

      <div class="col-md-2" id="articleShow">
                            <div class="position-relative form-group">
                                <label for="factory" class="">Article wise Selection</label>
                                <select  id="articlePlaceSelection" class="form-control" onchange="checkArticles()">
                                      <option value="All">All Articles</option>
                                      <option value="Specific">Specific Articles</option>

                                </select>
                            </div>
                        </div>
      
        <div class="col-md-2" id="typeShow">
            <div class="position-relative form-group">
                <label for="factory" class="">Type wise Selection</label>
                <select  id="processPlaceSelection" class="form-control" onchange="checkProcesses()">
                      <option value="All">All Types</option>
                      <option value="Specific">Specific Type</option>
                     
                </select>
            </div>
        </div>

      <div class="col-md-2 mt-4" style="display: none;" id="specificArticle" >
                            <div class="position-relative form-group">
                                <label for="factory" class="">Article</label>
                                <select  id="articlePlace" class="js-example-basic-single">
                                    
                                   

                                </select>
                            </div>
                        </div>
      <div class="col-md-2" style="display: none; margin-top:25px;" id="specificType">
          <div class="">
              <label for="factory" class="">Type</label>
              <select  id="processPlace" class="js-example-basic-single">
              <option value="CR0">CR0</option>
              <option value="CR1">CR1</option>
              <option value="CR2">CR2</option>
              <option value="CR3">CR3</option>
              <option value="CR4">CR4</option>
              <option value="CR5">CR5</option>
              <option value="MCS">MCS</option>
                  

              </select>
          </div>
      </div>
    

    

      <div class="col-md-2"  id="searchButton" >
        <div class="form-group">
          <label class=" form-control-label"></label>
          <div class="input-group">
            <br>
            <br>
            <button type="submit" id="submit" name="submit" onclick="MainFunction()" class="btn btn-primary " style="border-radius: 15px;"><i class=" fa fa-search"></i> Search</button>
          </div>
        </div>
      </div>

      <div id="c_date"></div>
      <div id="e_date"></div>
 <div class="col-md-6">
   </div>
   </div>
  </div>
</div>
  




        <!--/.col-->

      
    <!--/.col-->

<?php
foreach ($DevIP as $keys) {
    $inprocess = $keys['Counter'];
}
foreach ($DevComplete as $keys) {
    $complete = $keys['Counter'];
}
?>
<div style="margin-top:30px" class="row">
<div class="col-6 col-lg-3">
        <div class="card">
            <div class="card-body" id="DevTodayActivities">
                <div class="clearfix">
                    <i class="fa fa-cogs bg-flat-color-5 p-3 font-2xl mr-3 float-left text-light"></i>
                    <div class="h5 text-secondary mb-0 mt-1 count"><?php echo $DevTodayActivities; ?></div>
                    <div class="text-muted text-uppercase font-weight-bold font-xs small">Total Activities</div>
                </div>
            </div>
        </div>
    </div>
        <!--/.col-->
        <div class="col-6 col-lg-3">
        <div class="card">
            <div class="card-body" id="DevIP">
                <div class="clearfix">
                    <i class="fa fa-laptop bg-info p-3 font-2xl mr-3 float-left text-light"></i>
                    <div class="h5 text-secondary mb-0 mt-1 count"><?php echo $inprocess; ?></div>
                    <div class="text-muted text-uppercase font-weight-bold font-xs small">In Process Activities</div>
                </div>
            </div>
        </div>
    </div>
      <!--/.col-->
      <div class="col-6 col-lg-3">
        <div class="card" id="DevComplete">
            <div class="card-body">
                <div class="clearfix">
                    <i class="fa fa-moon-o bg-warning p-3 font-2xl mr-3 float-left text-light"></i>
                    <div class="h5 text-secondary mb-0 mt-1 count"><?php echo $complete; ?></div>
                    <div class="text-muted text-uppercase font-weight-bold font-xs small">Complete Activities</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card" id="empty">
            <div class="card-body">
               <img src="<?php echo base_url(); ?>/assets/Admin/images/development.png" height="50px" width="80%" alt="logo" />
            </div>
        </div>
    </div>
</div>



    <div style="margin-top:30px" class="col-xl-12" id="defaultLoadGant">
                <div class="card">
                    <div class="card-body">
                        <!-- <div class="row"> -->
                            <!-- <div class="col-sm-4">
                                <h4 class="card-title mb-0" style="color:#16AAFF;">Developement Activities</h4>
                                <div class="small text-muted" style="color:##F7B924">From 01/11/2021 to 29/11/2021</div>
                            </div> -->
                            <div style="max-height: 600px;overflow:scroll">
                             <div id="gantChart"></div>
                            </div>
                            <!--/.col-->
                          
                            <!--/.col-->


                     <!-- </div> -->
                        <!--/.row-->
                     
                    </div>
                    <div class="card-footer">
                        
                    </div>
                </div>
</div>

<div style="margin-top:30px"  class="col-xl-12" id="customLoadGant" style="display: none;">
                <div class="card">
                    <div class="card-body">
                        <!-- <div class="row"> -->
                            <!-- <div class="col-sm-4">
                                <h4 class="card-title mb-0" style="color:#16AAFF;">Developement Activities</h4>
                                <div class="small text-muted" style="color:##F7B924">From 01/11/2021 to 29/11/2021</div>
                            </div> -->
                            <div style="max-height: 600px;overflow:scroll">
                            <div id="gantChartCustom"></div>
                            </div>
                             
                            <!--/.col-->
                          
                            <!--/.col-->


                     <!-- </div> -->
                        <!--/.row-->
                     
                    </div>
                    <div class="card-footer">
                        
                    </div>
                </div>
</div>
        
   
 <div style="margin-top:30px"  class="col-xl-12" id="defaultBarLineChart">
                <div class="card">
                    <div class="card-body">
                        <!-- <div class="row"> -->
                            <!-- <div class="col-sm-4">
                                <h4 class="card-title mb-0" style="color:#16AAFF;">Developement Activities</h4>
                                <div class="small text-muted" style="color:##F7B924">From 01/11/2021 to 29/11/2021</div>
                            </div> -->
                             <div id="container"></div>
                            <!--/.col-->
                          
                            <!--/.col-->


                     <!-- </div> -->
                        <!--/.row-->
                     
                    </div>
                    <div class="card-footer">
                        
                    </div>
                </div>
</div>

<div class="col-xl-12" id="customBarLineChart" style="display: none;">
                <div class="card">
                    <div class="card-body">
                        <!-- <div class="row"> -->
                            <!-- <div class="col-sm-4">
                                <h4 class="card-title mb-0" style="color:#16AAFF;">Developement Activities</h4>
                                <div class="small text-muted" style="color:##F7B924">From 01/11/2021 to 29/11/2021</div>
                            </div> -->
                             <div id="customcontainer"></div>
                            <!--/.col-->
                          
                            <!--/.col-->


                     <!-- </div> -->
                        <!--/.row-->
                     
                    </div>
                    <div class="card-footer">
                        
                    </div>
                </div>
</div>


    <div class="col-xl-12" id="defaultTable">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <h4 class="card-title mb-0" style="color:#16AAFF;">Articles wise Activities</h4>
                                <div class="small text-muted" style="color:#F7B924">From <span id="startLabel"></span> to <span id="endLabel"></span></div>
                            </div>
                            <!--/.col-->
                          
                            <!--/.col-->


                        </div>
                        <!--/.row-->
                     
                    </div>
                    <div class="card-footer">
                        <table id="exampleDataTable" class="table table-striped table-bordered" style="width:100%">
        <thead style="background-color: #4DBD74; color: #fff;">
            <tr>
                <th>Article Code </th>
                <th>Size</th>
                <th>Type</th>
                <th>Activities </th>
                <th>Activity Start Date</th>
                <th>Activity End Date</th>
                 <th>Days Required</th>
                 
                <th>Status</th>
                 <th>Root Causes</th>
                   <th>Corrective Action</th>
                
            </tr>
        </thead>
        <tbody>

      <?php foreach ($GetArticles as $Keys) { ?> <tr>
  <th><?php echo $Keys['ArtCode']; ?></th>
                <th><?php echo $Keys['Size']; ?></th>
                <th><?php echo $Keys['Type']; ?></th>
                <th><?php echo $Keys['Name']; ?> </th>
                <th><?php echo $Keys['PSDate1']; ?></th>
                <th><?php echo $Keys['PEDate1']; ?></th>
                 <th><?php echo $Keys['NoofDays']; ?></th>
                 
                <th><?php echo $Keys['Status']; ?></th>
                  <th><?php echo $Keys['rootcasue']; ?></th>
                     <th><?php echo $Keys['action']; ?></th>
             </tr>    
<?php } ?>
           
        
        </tbody>
   
    </table>
                    </div>
                </div>
</div>


<div class="col-xl-12" id="customTableDate" style="display: none;">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <h4 class="card-title mb-0" style="color:#16AAFF;">Articles wise Activities</h4>
                                <div class="small text-muted" style="color:#F7B924"><span id="startLabelCustom"></span> to <span id="endLabelCustom"></span></div>
                            </div>
                            <!--/.col-->
                          
                            <!--/.col-->


                        </div>
                        <!--/.row-->
                     
                    </div>
                    <div class="card-footer" id="customTableDateRange">
                       
                    </div>
                </div>
</div>





  





            <!-- ti-pulse
            ti-bar-chart -->

           
            <div class="col-xl-3 col-lg-6">
                <section class="card" style="display:none;">
                    <div class="twt-feed blue-bg">
                      
                        <div class="fa fa-twitter wtt-mark"></div>

                       
                    </div>
                    <div class="weather-category twt-category">
                       
                    </div>
                    <div class="twt-write col-sm-12">
                        <textarea placeholder="Write your Tweet and Enter" rows="1" class="form-control t-text-area"></textarea>
                    </div>
                  
                </section>
            </div>
            
            <script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
      <script type="text/javascript">

          /* Activate smart panels */
          $('#js-page-content').smartPanel();
      </script>
            <script src="<?php echo base_url(); ?>Assets/js/select2.min.js"></script>
<script src="https://code.highcharts.com/gantt/highcharts-gantt.js"></script>
<script src="https://code.highcharts.com/gantt/modules/exporting.js"></script>

  <script>
  
    var sdate;
var edate;

// function loadArticle(){
//   sdate = $("#SDate").val();
//   edate =  $("#EDate").val();

//   $.ajax({

// url  : "<?php echo base_url('MIS/Developement/loadArticle'); ?>",
// method: "GET",
// data: {"c_date":sdate,"e_date":edate },
// success: function (data) {
//   $("#loadButton").css("display","none");
//   $("#searchButton").css("display","block");
//   $("#articleShow").css("display","block");
//    let dataReturned = JSON.parse(data);
//    let html='<option value="All" selected>All Articles</option>';
//     dataReturned.forEach(element => {
//       html+=`<option value="${element.ArtCode}">${element.ArtCode}</option>`
//     });
//     $("#articlePlace").append(html);
// }
// });

// }

function  setStartDate(){
          sdate = $("#SDate").val();
          $("#loadButton").css("display","block");

        }
        function  setEndDate(){
         edate =  $("#EDate").val();
         $("#loadButton").css("display","block");

        }

</script>

<script>
function changeType(){
 let filterValue = $("#filterationSelection").val();
 if(filterValue == "All"){
  $("#startDateShow").css('display', 'block');
  $("#endDateShow").css('display', 'block');
  $("#articleShow").css('display', 'block');
  $("#typeShow").css('display', 'block');
  $("#specificArticle").css('display', 'none');
  $("#specificType").css('display', 'none');
  $("#fcShow").css('display', 'none');
  $("#seasonShow").css('display', 'none');
 }
 else if(filterValue == "date"){
  $("#startDateShow").css('display', 'block');
  $("#endDateShow").css('display', 'block');
  $("#articleShow").css('display', 'none');
  $("#typeShow").css('display', 'none');
  $("#specificType").css('display', 'none');
  $("#specificArticle").css('display', 'none');
  $("#fcShow").css('display', 'none');
  $("#seasonShow").css('display', 'none');
 }
 else if(filterValue == "article"){
  $("#startDateShow").css('display', 'none');
  $("#endDateShow").css('display', 'none');
  $("#articleShow").css('display', 'none');
  $("#typeShow").css('display', 'none');
  $("#specificArticle").css('display', 'block');
  $("#specificType").css('display', 'none');
  $("#fcShow").css('display', 'none');
  $("#seasonShow").css('display', 'none');
  }
  else if(filterValue == "type"){
    $("#startDateShow").css('display', 'none');
  $("#endDateShow").css('display', 'none');
  $("#articleShow").css('display', 'none');
  $("#typeShow").css('display', 'none');
  $("#specificArticle").css('display', 'none');
  $("#specificType").css('display', 'block');
  $("#fcShow").css('display', 'none');
  $("#seasonShow").css('display', 'none');
  }
  else if(filterValue == "season"){
    $("#startDateShow").css('display', 'none');
  $("#endDateShow").css('display', 'none');
  $("#articleShow").css('display', 'none');
  $("#typeShow").css('display', 'none');
  $("#specificArticle").css('display', 'none');
  $("#specificType").css('display', 'none');
  $("#fcShow").css('display', 'block');
  $("#seasonShow").css('display', 'block');

  }
 
}

</script>


<script>



 var c_date=$("#SDate").val();
 var e_date=$("#EDate").val();



 $.ajax({

        url  : "<?php echo base_url('MIS/Lab/pie'); ?>",
        method: "GET",
        data: {"c_date":c_date,"e_date":e_date },
        success: function (data) {
           var data1=JSON.parse(data);

            Highcharts.chart('container1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Pass and Fail Balls'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: false,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Balls',
        colorByPoint: true,
        data: [{
            name: 'Pass',
            y: data1['pass'][0]?data1['pass'][0].Result:0,
            sliced: true,
            selected: true
        },  {
            name: 'Fail',
            y: data1['fail'][0]?data1['fail'][0].Result:0
        }]
    }]
});

        }



 });


        
    
</script>

     
<script src="<?php echo base_url(); ?>/assets/js/statistics/peity/peity.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/statistics/flot/flot.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/datagrid/datatables/datatables.bundle.js"></script>
<script>

function checkArticles(){
  let valArt = $('#articlePlaceSelection').val();
 
  if(valArt == "All"){
    $('#specificArticle').css("display","none");
  }
  else if(valArt == "Specific"){
    $('#specificArticle').css("display","block");
  }
}

function checkProcesses(){
  let valArt = $('#processPlaceSelection').val();
 
  if(valArt == "All"){
    $('#specificType').css("display","none");
  }
  else if(valArt == "Specific"){
    $('#specificType').css("display","block");
  }
}

function generateDataGant(data1) {
 
 var ret = {},
     ps = [],
     series = [],
     len = data1.length;
     let today = new Date();
    let day = 1000 * 60 * 60 * 24;
   
 //concat to get points
 for (var i = 0; i < len; i++) {
   let startdate = data1[i].PSDate1;
   let endDate = data1[i].PEDate1;
   
   let sDateSplit = startdate.split("/");
   let eDateSplit = endDate.split("/"); 
   
   let finalSDateCombine = sDateSplit[2]+ "-"+sDateSplit[1]+"-"+sDateSplit[0];
   let finalEDateCombine = eDateSplit[2]+ "-"+eDateSplit[1]+"-"+eDateSplit[0];

  let startDateObject = new Date(finalSDateCombine);
  let endDateObject = new Date(finalEDateCombine);
  let startDateMili = startDateObject.getTime();
  let endDateMili = endDateObject.getTime();
  let rangeData = data1[i].percentageComplete != null?data1[i].percentageComplete:0;
  console.log("random Number", rangeData);
//    let date = new Date("11/21/1987 16:00:00"); // some mock date
// var milliseconds = date.getTime(); 
if(startDateMili == endDateMili){

  ps[i] = {
      name: 'Activities',
        data:[
          {
         name:  data1[i].ArtCode  + " " + data1[i].PSDate1  ,
         id: data1[i].Name,
         start: startDateMili,
         end: endDateMili,
         completed: rangeData,
         
     }]
     };
}
else{
  if(rangeData==1){
    ps[i] = {
      name: 'Activities',
        data:[
          {
         name:  data1[i].ArtCode ,
         id: data1[i].Name,
         start: startDateMili,
         end: endDateMili,
         completed: rangeData,
         color:'rgba(11,156,49,0.8)' 
     }]
     };
  }
  else if(rangeData<=0.7 && rangeData>=0.5){
    ps[i] = {
      name: 'Activities',
        data:[
          {
         name:  data1[i].ArtCode ,
         id: data1[i].Name,
         start: startDateMili,
         end: endDateMili,
         complete: rangeData,
         completed: rangeData,
         color:'rgba(0,0,255,0.6)' 
     }]
     };
  }
  else{
    ps[i] = {
      name: 'Activities',
        data:[
          {
         name:  data1[i].ArtCode ,
         id: data1[i].Name,
         start: startDateMili,
         end: endDateMili,
         complete: rangeData,
         completed: rangeData,
         color:'rgba(255,0,0,0.6)' 
     }]
     };
  }
 
}
    
 }
 names = [];
 //generate series and split points
 for (i = 0; i < len; i++) {
     var p = ps[i];
   
     series.push(p);
 }
 return series;
}

window.onload=function(){
  $("#articlePlace").select2();
  let date = new Date().toJSON().substr(0,10);
  let datesplit = date.split("-");
  let newDate = datesplit[2]+"-"+datesplit[1]+"-"+datesplit[0];
$("#startLabel").text(newDate);
$("#endLabel").text(newDate);

//////////////////////////// Line Bar Chart Current Date ///////////////////////////

$.ajax({

url  : "<?php echo base_url('MIS/Developement/loadArticleAll'); ?>",
method: "GET",
success: function (data) {
     
   let dataReturned = JSON.parse(data);
 
   let html='';
    dataReturned.forEach(element => {
      html+=`<option value="${element.ArtCode}">${element.ArtCode}</option>`
    });
   
    $("#articlePlace").append(html);
  
}
});

url3 = '<?php echo base_url('MIS/Developement/CallDataDefault'); ?>'

$.post(url3, {"currentDate":date},
    function(data, status) {
       let processDate = [];
       let articles=[];
       let NoOfBalls=[];
       data.forEach(element => {
         processDate.push(element.ArtCode);
         articles.push(element.NoofDays);
         NoOfBalls.push(parseInt(element.NoOfBalls));
       });
 
       Highcharts.chart('container', {
  chart: {
    zoomType: 'xy'
  },
  title: {
    text: `Process Based Activity  From ${newDate} to ${newDate}`
  },
  subtitle: {
    //text: 'Source: WorldClimate.com'
  },
  xAxis: [{
    categories: processDate,
    crosshair: true
  }],
  yAxis: [{ // Primary yAxis
    labels: {
      format: '{value}',
      style: {
        color: Highcharts.getOptions().colors[1]
      }
    },
    title: {
      text: 'Activities',
      style: {
        color: Highcharts.getOptions().colors[1]
      }
    }
  }, { // Secondary yAxis
    title: {
      //text: 'Rainfall',
      style: {
        color: Highcharts.getOptions().colors[0]
      }
    },
    labels: {
      format: '{value} ',
      style: {
        color: Highcharts.getOptions().colors[0]
      }
    },
    opposite: true
  }],
  tooltip: {
    shared: true
  },
  legend: {
    layout: 'vertical',
    align: 'left',
    x: 120,
    verticalAlign: 'top',
    y: 100,
    floating: true,
    backgroundColor:
      Highcharts.defaultOptions.legend.backgroundColor || // theme
      'rgba(255,255,255,0.25)'
  },
  series: [{
    name: 'Days Required',
    type: 'column',
    yAxis: 1,
    data: articles,
    tooltip: {
      valueSuffix: ''
    }

  }, {
    name: 'No of Balls',
    type: 'spline',
    data:NoOfBalls,
    tooltip: {
      valueSuffix: ''
    }
  }]
});

    });


///////////////////////////// Gant Chart Current Date //////////////////////////////
  url = '<?php echo base_url('MIS/Developement/getGantCurrentDateData'); ?>'


$.post(url, {"currentDate":date},
    function(data, status) {
console.log(data);
  let series = generateDataGant(data);
 
var today = new Date();
    day = 1000 * 60 * 60 * 24;
    // Utility functions
    dateFormat = Highcharts.dateFormat;
    defined = Highcharts.defined;
    isObject = Highcharts.isObject;

// Set to 00:00:00:000 today
today.setUTCHours(0);
today.setUTCMinutes(0);
today.setUTCSeconds(0);
today.setUTCMilliseconds(0);
today = today.getTime();

Highcharts.ganttChart('gantChart', {
    series: series,
    tooltip: {
        pointFormatter: function () {
            var point = this,
                format = '%e. %b',
                options = point.options,
                completed = options.completed,
                amount = isObject(completed) ? completed.amount : completed,
                status = ((amount || 0) * 100) + '%',
                lines;

            lines = [{
                value: point.name,
                style: 'font-weight: bold;'
            }, {
                title: 'Start',
                value: dateFormat(format, point.start)
            }, {
                visible: !options.milestone,
                title: 'End',
                value: dateFormat(format, point.end)
            }
            , {
                title: 'Complete %',
                value: point.complete
            }
            ];

            return lines.reduce(function (str, line) {
                var s = '',
                    style = (
                        defined(line.style) ? line.style : 'font-size: 0.8em;'
                    );
                if (line.visible !== false) {
                    s = (
                        '<span style="' + style + '">' +
                        (defined(line.title) ? line.title + ': ' : '') +
                        (defined(line.value) ? line.value : '') +
                        '</span><br/>'
                    );
                }
                return str + s;
            }, '');
        }
    },
    title: {
        text: 'Activities Timeline'
    },
    xAxis: [
      { // first x-axis
    tickInterval: 1000 * 60 * 60 * 24 // 1 month
  }, { // second x-axis
    tickInterval: 1000 * 60 * 60 * 24 * 31, // 1 day
  }]
});

    });

  //   {
      
  //     currentDateIndicator: true,
  //     min: today - 3 * day,
  //     max: today + 18 * day
  // }

//////////////////////////// End Gant Chart Current Date ///////////////////////////

    //$('#exampleDataTable').DataTable();


 var c_date=$("#SDate").val();
 var e_date=$("#EDate").val();

 
 $(document).ready(function() {
            // LoadData(stDate, enDate);

            $('#exampleDataTable').dataTable({
                responsive: false,
                lengthChange: false,
                dom:
                    /*	--- Layout Structure 
                    	--- Options
                    	l	-	length changing input control
                    	f	-	filtering input
                    	t	-	The table!
                    	i	-	Table information summary
                    	p	-	pagination control
                    	r	-	processing display element
                    	B	-	buttons
                    	R	-	ColReorder
                    	S	-	Select

                    	--- Markup
                    	< and >				- div element
                    	<"class" and >		- div with a class
                    	<"#id" and >		- div with an ID
                    	<"#id.class" and >	- div with an ID and a class

                    	--- Further reading
                    	https://datatables.net/reference/option/dom
                    	--------------------------------------
                     */
                    "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                buttons: [
                    /*{
                    	extend:    'colvis',
                    	text:      'Column Visibility',
                    	titleAttr: 'Col visibility',
                    	className: 'mr-sm-3'
                    },*/
                    {
                        extend: 'pdfHtml5',
                        text: 'PDF',
                        titleAttr: 'Generate PDF',
                        className: 'btn-outline-danger btn-sm mr-1'
                    },
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        titleAttr: 'Generate Excel',
                        className: 'btn-outline-success btn-sm mr-1'
                    },
                    {
                        extend: 'csvHtml5',
                        text: 'CSV',
                        titleAttr: 'Generate CSV',
                        className: 'btn-outline-primary btn-sm mr-1'
                    },
                    {
                        extend: 'copyHtml5',
                        text: 'Copy',
                        titleAttr: 'Copy to clipboard',
                        className: 'btn-outline-primary btn-sm mr-1'
                    },
                    {
                        extend: 'print',
                        text: 'Print',
                        titleAttr: 'Print Table',
                        className: 'btn-outline-primary btn-sm'
                    }
                ]
            });


        });

// $('#exampleDataTable').DataTable(
//    { 
  
//        dom: 'Bfrtip',
//         buttons: [
//             'copy',
//             {
//                 extend: 'excel',
//                 messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
//             },
//             {
//                 extend: 'pdf',
//                 messageBottom: null
//             }
//         ],
//       "ordering":false,
//       "pageLength":10,
//       "searching":true,
//       "LengthChange":true,
//       "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},
    
//     }


//       );
 $.ajax({

        url  : "<?php echo base_url('MIS/Lab/loadtable'); ?>",
        method: "GET",
        data: {"c_date":c_date,"e_date":e_date },
        success: function (data) {
            var data1=JSON.parse(data);
            var appenTable='';
       
data1.forEach((item, index)=>{


  appenTable+=` <tr>
                <td>${item.TestNO}</td>
                <td>${item.Date}</td>
                <td>${item.Size}</td>
                <td>${item.PO}</td>
                <td>${item.Receiving_Date}</td>
                <td>${item.Supplier_Name}</td>
                 <td>${item.Supplier_Ref}</td>
                <td>${item.Quantity_Carton}</td>
                <td>${item.Entrydate}</td>
                <td>${item.Result}</td>
            </tr>`;
})
          


            $("#appendTable").html(appenTable);
        }
         })
 $.ajax({

        url  : "<?php echo base_url('MIS/Lab/load'); ?>",
        method: "GET",
        data: {"c_date":c_date,"e_date":e_date },
        success: function (data) {
           var data1=JSON.parse(data);
         
           const ctx = document.getElementById('myChart');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [data1[0].Supplier_Name, data1[1].Supplier_Name, data1[2].Supplier_Name],
        datasets: [{
            label: '# of Result',
            data: [data1[0].Result, data1[1].Result, data1[2].Result],
            backgroundColor: [
                '#90ED7D',
                '#F7A35C',
                '#434348',
                'rgb(75, 192, 192, 0.2)',
                'rgb(153, 102, 255, 0.2)',
                'rgb(255, 159, 64, 0.2)'
            ],
            borderColor: [
               '#90ED7D',
                '#F7A35C',
                '#434348',
                'rgb(75, 192, 192, 1)',
                'rgb(153, 102, 255, 1)',
                'rgb(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


}



 })

}
</script>

 <script>
        function CallCombox() {
          Domain = $('#Select').val();
          url = "<?php echo base_url('MIS/Carcas/fact2/'); ?>" + Domain
          //alert(Domain);
          //  alert(url);
          $.get(url, function(res) {

            data = res.data
            //alert(data); 
            options = "<option value=''>Select Material Type  </option>"
            for (i = 0; i < data.length; i++) {
              options += '<option value="' + data[i].ShapeID + '">' + data[i].ShapeName + '</option>'
            }
            $("#SelectBox").html(options)
          });

        }

        function generateData(data1, ballsData) {
 
    var ret = {},
        ps = [],
        series = [],
        len = data1.Graphs.length;

    //concat to get points
    for (var i = 0; i < len; i++) {
        ps[i] = {
            name: data1.Graphs[i].Name,
            data: ballsData
        };
    }
    names = [];
    //generate series and split points
    for (i = 0; i < len; i++) {
        var p = ps[i];
      
        series.push(p);
    }
    return series;
}


        function MainFunction() {
   
          c_date = $('#SDate').val();
          e_date = $('#EDate').val();

            let datesplit = c_date.split("-");
  let newDate = datesplit[2]+"-"+datesplit[1]+"-"+datesplit[0];

           let datesplitEnd = e_date.split("-");
  let newDateEnd = datesplitEnd[2]+"-"+datesplitEnd[1]+"-"+datesplitEnd[0];
           
          let articleCode = $("#articlePlaceSelection").val();
          let typeofProject = $("#processPlaceSelection").val();
      
          $("#container").css("display",'none')
          $("#customGraph").css("display",'block')
          $("#defaultLoadGant").css("display",'none')
          $("#customLoadGant").css("display",'block')
          $("#defaultTable").css("display",'none')
          $("#customTableDate").css("display",'block')
          $("#defaultBarLineChart").css("display",'none')
          $("#customBarLineChart").css("display",'block')
          $("#startLabelCustom").text(newDate);
          $("#endLabelCustom").text(newDateEnd);

////////////////////////////// Custom Line Bar Chart Content //////////////////////

if($('#filterationSelection').val() == "All"){

if(articleCode == "All" && typeofProject == "All"){

url4 = '<?php echo base_url('MIS/Developement/CallDataRangeData'); ?>'

$.post(url4, {"startDate":c_date,"endDate":e_date},
  function(data, status) {
     let processDate = [];
     let articles=[];
     let NoOfBalls=[];
     data.forEach(element => {
       processDate.push(element.ArtCode);
       articles.push(element.NoofDays);
       NoOfBalls.push(parseInt(element.NoOfBalls));
     });

     Highcharts.chart('customcontainer', {
chart: {
  zoomType: 'xy'
},
title: {
  text: `Process Based Activity  From ${c_date} to ${e_date}`
},
subtitle: {
  //text: 'Source: WorldClimate.com'
},
xAxis: [{
  categories: processDate,
  crosshair: true
}],
yAxis: [{ // Primary yAxis
  labels: {
    format: '{value}',
    style: {
      color: Highcharts.getOptions().colors[1]
    }
  },
  title: {
    text: 'Activities',
    style: {
      color: Highcharts.getOptions().colors[1]
    }
  }
}, { // Secondary yAxis
  title: {
    //text: 'Rainfall',
    style: {
      color: Highcharts.getOptions().colors[0]
    }
  },
  labels: {
    format: '{value} ',
    style: {
      color: Highcharts.getOptions().colors[0]
    }
  },
  opposite: true
}],
tooltip: {
  shared: true
},
legend: {
  layout: 'vertical',
  align: 'left',
  x: 120,
  verticalAlign: 'top',
  y: 100,
  floating: true,
  backgroundColor:
    Highcharts.defaultOptions.legend.backgroundColor || // theme
    'rgba(255,255,255,0.25)'
},
series: [{
  name: 'Days Required',
  type: 'column',
  yAxis: 1,
  data: articles,
  tooltip: {
    valueSuffix: ''
  }

}, {
  name: 'No of Balls',
  type: 'spline',
  data:NoOfBalls,
  tooltip: {
    valueSuffix: ''
  }
}]
});
  });
        

///////////////////////////// Gant Chart Custom Date //////////////////////////////
url1 = '<?php echo base_url('MIS/Developement/getGantDateRangeData'); ?>'

$.post(url1, {"startDate":c_date,"endDate":e_date},
  function(data, status) {
   
//console.log("Custom",data);
let series = generateDataGant(data);

var today = new Date();
  day = 1000 * 60 * 60 * 24;
  // Utility functions
  dateFormat = Highcharts.dateFormat;
  defined = Highcharts.defined;
  isObject = Highcharts.isObject;

// Set to 00:00:00:000 today
today.setUTCHours(0);
today.setUTCMinutes(0);
today.setUTCSeconds(0);
today.setUTCMilliseconds(0);
today = today.getTime();

Highcharts.ganttChart('gantChartCustom', {
  series: series,
  tooltip: {
      pointFormatter: function () {
          var point = this,
              format = '%e. %b',
              options = point.options,
              completed = options.completed,
              amount = isObject(completed) ? completed.amount : completed,
              status = ((amount || 0) * 100) + '%',
              lines;

          lines = [{
              value: point.name,
              style: 'font-weight: bold;'
          }, {
              title: 'Start',
              value: dateFormat(format, point.start)
          }, {
              visible: !options.milestone,
              title: 'End',
              value: dateFormat(format, point.end)
          }
          , {
                title: 'Complete %',
                value: point.complete
            }
          ];

          return lines.reduce(function (str, line) {
              var s = '',
                  style = (
                      defined(line.style) ? line.style : 'font-size: 0.8em;'
                  );
              if (line.visible !== false) {
                  s = (
                      '<span style="' + style + '">' +
                      (defined(line.title) ? line.title + ': ' : '') +
                      (defined(line.value) ? line.value : '') +
                      '</span><br/>'
                  );
              }
              return str + s;
          }, '');
      }
  },
  title: {
      text: 'Activities Management'
  },
  xAxis: [{ // first x-axis
  tickInterval: 1000 * 60 * 60 * 24 // 1 month
}, { // second x-axis
  tickInterval: 1000 * 60 * 60 * 24 * 30, // 1 day
}]
});

  });

//////////////////////////// End Gant Chart Custom ///////////////////////////

//////////////////////////// Custom Table Content ///////////////////////////////

url2 = '<?php echo base_url('MIS/Developement/getCustomTableData'); ?>'

$.post(url2, {"startDate":c_date,"endDate":e_date},
  function(data, status) {
 
    $("#customTableDateRange").html("");
    htmlTableContent = `<table id="exampleDataTable1" class="table table-striped table-bordered" style="width:100%">
      <thead style="background-color: #4DBD74; color: #fff;">
          <tr>
              <th>Article Code </th>
              <th>Size</th>
              <th>Type</th>
              <th>Activities </th>
              <th>Activity Start Date</th>
              <th>Activity End Date</th>
               <th>Days Required</th>
                
              <th>Status</th>
              <th>Root Cause</th>
               <th>Corrective Action</th>
              
          </tr>
      </thead>
      <tbody>`;
    data.forEach(element => {
      htmlTableContent += ` <tr>
              <td>${element.ArtCode1}</td>
              <td>${element.Size}</td>
              <td>${element.Type}</td>
              <td>${element.Name} </td>
              <td>${element.PSDate1}</td>
              <td>${element.PEDate1}</td>
               <td>${element.NoofDays}</td>
             
               
              <td>${element.Status}</td>
                  <td>${element.rootcasue}</td>
               <td>${element.action}</td>
           </tr>   `
    });
    htmlTableContent += `</tbody>
 </table>`
 $("#customTableDateRange").append(htmlTableContent);
 $("#exampleDataTable1").DataTable(
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
          }
      ],
    "ordering":false,
    "pageLength":10,
    "searching":true,
    "LengthChange":true,
    "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},
  
  });
  });

/////////////////////////// End Custom Table Content ///////////////////////////
        
         $.ajax({

      url  : "<?php echo base_url('MIS/Developement/customload'); ?>",
      method: "GET",
      data: {"c_date":c_date,"e_date":e_date},
      success: function (data) {
         
         var data1=JSON.parse(data);
         let datesget = [];
         for(let i=0;i<data1.RDate.length;i++){
            datesget.push(data1.RDate[i].Datee)
         }
         //let datesget = data1.RDate;
         let ballsData = [];
         data1.NoOfBalls.forEach(element => {
           ballsData.push(parseInt(element.NoOfBalls));
         });

         var seriesGet = generateData(data1, ballsData);
          

        var appendDevTodayActivities='';

        appendDevTodayActivities+=`<div class="clearfix">
                  <i class="fa fa-cogs bg-flat-color-5 p-3 font-2xl mr-3 float-left text-light"></i>
                  <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevTodayActivities']}</div>
                  <div class="text-muted text-uppercase font-weight-bold font-xs small">Total Activities</div>
              </div>`

var apppendDevIP='';
apppendDevIP+=`
              <div class="clearfix">
                  <i class="fa fa-laptop bg-info p-3 font-2xl mr-3 float-left text-light"></i>
                  <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevIP'][0].Counter}</div>
                  <div class="text-muted text-uppercase font-weight-bold font-xs small">In Process Activities</div>
              </div>`


              var apppendDevComplete='';
              apppendDevComplete+=`
              <div class="card-body">
              <div class="clearfix">
                  <i class="fa fa-moon-o bg-warning p-3 font-2xl mr-3 float-left text-light"></i>
                  <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevComplete'][0].Counter}</div>
                  <div class="text-muted text-uppercase font-weight-bold font-xs small">Complete Activities</div>
              </div>
          </div>`



var appendActivities='';
data1['Activities'].forEach((item, index)=>{

appendActivities+=`
       
          
                       <li>
                              <div class="text-muted">${item.ArtCode?item.ArtCode:Nothing}</div>
                            
                              <strong>${item.Name?item.Name:0} </strong>
                              <div class="progress progress-xs mt-2" style="height: 5px;">
                         
                                 <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                               
                                    </div> 
                                    </li>`

})

var appendDevType='';
appendDevType+=`
<li>
                              <div class="text-muted">${data1['DevType'][0]?data1['DevType'][0].Type:'Nothing'}</div>
                              <strong>${data1['DevType'][0]?data1['DevType'][0].Counter:0} Activitie </strong>
                              <div class="progress progress-xs mt-2" style="height: 5px;">
                             
                                 <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                              
                                    </div>
                          </li>
                          `

                          var appendFactoryWise='';
                          appendFactoryWise+=`<div class="stat-text">${data1['FactoryWise'][0]?data1['FactoryWise'][0].VendorName:'Nothing'}></div>
                              <div class="stat-digit count">${data1['FactoryWise'][0]?data1['FactoryWise'][0].Counter:0}</div>`
                          
              $("#DevTodayActivities").html(appendDevTodayActivities);
              $("#DevIP").html(apppendDevIP);
              $("#DevComplete").html(apppendDevComplete);
              $("#Activities").html(appendActivities);
              $("#DevType").html(appendDevType);
              $("#FactoryWise").html(appendFactoryWise);
              

        
              Highcharts.chart('customGraph', {

chart: {
type: 'column'
},

title: {
text: 'Article Wise Activities'
},

xAxis: {
categories: datesget,
},

yAxis: {
allowDecimals: false,
min: 0,
title: {
  text: 'Number of Balls'
}
},

//   tooltip: {
//     formatter: function () {
//       return '<b>' + this.x + '</b><br/>' +
//         this.series.name + ': ' + this.y + '<br/>' +
//         'Total: ' + this.point.stackTotal;
//     }
//   },

plotOptions: {
column: {
  stacking: 'normal'
}
},

series: seriesGet


});
var chartGetting = $("#customGraph").highcharts();
chartGetting.updateFromData();



      }
         })

         $.ajax({

      url  : "<?php echo base_url('/MIS/Lab/custompie'); ?>",
      method: "GET",
      data: {"c_date":c_date,"e_date":e_date },
      success: function (data) {
        
    


      }
     })

       $.ajax({

      url  : "<?php echo base_url('MIS//Lab/customtable'); ?>",
      method: "GET",
      data: {"c_date":c_date,"e_date":e_date },
      success: function (data) {
          var data1=JSON.parse(data);
          var appenTable='';
        
   
data1.forEach((item, index)=>{


appenTable+=` <tr>
              <td>${item.TestNO}</td>
              <td>${item.Date}</td>
              <td>${item.Size}</td>
              <td>${item.PO}</td>
              <td>${item.Receiving_Date}</td>
              <td>${item.Supplier_Name}</td>
               <td>${item.Supplier_Ref}</td>
              <td>${item.Quantity_Carton}</td>
              <td>${item.Entrydate}</td>
              <td>${item.Result}</td>
          </tr>`;
})
        
          $("#appendTable").html(appenTable);
      }
       })


}
//////////////////////////////////////////// Article Code Wise Data /////////////////////////////////////////
else if(articleCode == "Specific" && typeofProject == "All"){
   let articleCodevalue = $("#articlePlace").val()
url4 = '<?php echo base_url('MIS/Developement/CallDataRangeDataArticleCode'); ?>'

$.post(url4, {"startDate":c_date,"endDate":e_date,"article_code":articleCodevalue},
  function(data, status) {
    console.log("CallDataRangeDataArticleCode", data)
     let processDate = [];
     let articles=[];
     let NoOfBalls=[];
     data.forEach(element => {
       processDate.push(element.ArtCode);
       articles.push(element.NoofDays);
       NoOfBalls.push(parseInt(element.NoOfBalls));
     });

     Highcharts.chart('customcontainer', {
chart: {
  zoomType: 'xy'
},
title: {
  text: `Process Based Activity  From ${c_date} to ${e_date}`
},
subtitle: {
  //text: 'Source: WorldClimate.com'
},
xAxis: [{
  categories: processDate,
  crosshair: true
}],
yAxis: [{ // Primary yAxis
  labels: {
    format: '{value}',
    style: {
      color: Highcharts.getOptions().colors[1]
    }
  },
  title: {
    text: 'Activities',
    style: {
      color: Highcharts.getOptions().colors[1]
    }
  }
}, { // Secondary yAxis
  title: {
    //text: 'Rainfall',
    style: {
      color: Highcharts.getOptions().colors[0]
    }
  },
  labels: {
    format: '{value} ',
    style: {
      color: Highcharts.getOptions().colors[0]
    }
  },
  opposite: true
}],
tooltip: {
  shared: true
},
legend: {
  layout: 'vertical',
  align: 'left',
  x: 120,
  verticalAlign: 'top',
  y: 100,
  floating: true,
  backgroundColor:
    Highcharts.defaultOptions.legend.backgroundColor || // theme
    'rgba(255,255,255,0.25)'
},
series: [{
  name: 'Days Required',
  type: 'column',
  yAxis: 1,
  data: articles,
  tooltip: {
    valueSuffix: ''
  }

}, {
  name: 'No of Balls',
  type: 'spline',
  data:NoOfBalls,
  tooltip: {
    valueSuffix: ''
  }
}]
});
  });
        

///////////////////////////// Gant Chart Custom Date //////////////////////////////
url1 = '<?php echo base_url(
    'MIS/Developement/getGantDateRangeDataArticleCode'
); ?>'

$.post(url1, {"startDate":c_date,"endDate":e_date, "article_code":articleCodevalue},
  function(data, status) {
    console.log("CallDataRangeDataArticleCode 2", data)
//console.log("Custom",data);
let series = generateDataGant(data);

var today = new Date();
  day = 1000 * 60 * 60 * 24;
  // Utility functions
  dateFormat = Highcharts.dateFormat;
  defined = Highcharts.defined;
  isObject = Highcharts.isObject;

// Set to 00:00:00:000 today
today.setUTCHours(0);
today.setUTCMinutes(0);
today.setUTCSeconds(0);
today.setUTCMilliseconds(0);
today = today.getTime();

Highcharts.ganttChart('gantChartCustom', {
  series: series,
  tooltip: {
      pointFormatter: function () {
          var point = this,
              format = '%e. %b',
              options = point.options,
              completed = options.completed,
              amount = isObject(completed) ? completed.amount : completed,
              status = ((amount || 0) * 100) + '%',
              lines;

          lines = [{
              value: point.name,
              style: 'font-weight: bold;'
          }, {
              title: 'Start',
              value: dateFormat(format, point.start)
          }, {
              visible: !options.milestone,
              title: 'End',
              value: dateFormat(format, point.end)
          }
          , {
                title: 'Complete %',
                value: point.complete
            }
          ];

          return lines.reduce(function (str, line) {
              var s = '',
                  style = (
                      defined(line.style) ? line.style : 'font-size: 0.8em;'
                  );
              if (line.visible !== false) {
                  s = (
                      '<span style="' + style + '">' +
                      (defined(line.title) ? line.title + ': ' : '') +
                      (defined(line.value) ? line.value : '') +
                      '</span><br/>'
                  );
              }
              return str + s;
          }, '');
      }
  },
  title: {
      text: 'Activities Management'
  },
  xAxis: [{ // first x-axis
  tickInterval: 1000 * 60 * 60 * 24 // 1 month
}, { // second x-axis
  tickInterval: 1000 * 60 * 60 * 24 * 30, // 1 day
}]
});

  });

//   {
    
//     currentDateIndicator: true,
//     min: today - 3 * day,
//     max: today + 18 * day
// }

//////////////////////////// End Gant Chart Custom ///////////////////////////

//////////////////////////// Custom Table Content ///////////////////////////////

url2 = '<?php echo base_url('MIS/Developement/getCustomTableDataArticleCode'); ?>'

$.post(url2, {"startDate":c_date,"endDate":e_date, "article_code":articleCodevalue},
  function(data, status) {
    console.log("CallDataRangeDataArticleCode 3", data)
    $("#customTableDateRange").html("");
    htmlTableContent = `<table id="exampleDataTable1" class="table table-striped table-bordered" style="width:100%">
      <thead style="background-color: #4DBD74; color: #fff;">
          <tr>
              <th>Article Code </th>
              <th>Size</th>
              <th>Type</th>
              <th>Activities </th>
              <th>Activity Start Date</th>
              <th>Activity End Date</th>
               <th>Days Required</th>
              
               
              <th>Status</th>
               <th>Root Cause</th>
               <th>Corrective Action</th>
          </tr>
      </thead>
      <tbody>`;
    data.forEach(element => {
      htmlTableContent += ` <tr>
              <td>${element.ArtCode1}</td>
              <td>${element.Size}</td>
              <td>${element.Type}</td>
              <td>${element.Name} </td>
              <td>${element.PSDate1}</td>
              <td>${element.PEDate1}</td>
               <td>${element.NoofDays}</td>
                 
              <td>${element.Status}</td>
              <td>${element.rootcasue}</td>
               <td>${element.action}</td>
           </tr>   `
    });
    htmlTableContent += `</tbody>
 </table>`
 $("#customTableDateRange").append(htmlTableContent);
 $("#exampleDataTable1").DataTable(
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
          }
      ],
    "ordering":false,
    "pageLength":10,
    "searching":true,
    "LengthChange":true,
    "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},
  
  });
  });


       
      


/////////////////////////// End Custom Table Content ///////////////////////////
        
         $.ajax({

      url  : "<?php echo base_url('MIS/Developement/customload'); ?>",
      method: "GET",
      data: {"c_date":c_date,"e_date":e_date},
      success: function (data) {
         
         var data1=JSON.parse(data);
         let datesget = [];
         for(let i=0;i<data1.RDate.length;i++){
            datesget.push(data1.RDate[i].Datee)
         }
         //let datesget = data1.RDate;
         let ballsData = [];
         data1.NoOfBalls.forEach(element => {
           ballsData.push(parseInt(element.NoOfBalls));
         });

         var seriesGet = generateData(data1, ballsData);
          

        var appendDevTodayActivities='';

        appendDevTodayActivities+=`<div class="clearfix">
                  <i class="fa fa-cogs bg-flat-color-5 p-3 font-2xl mr-3 float-left text-light"></i>
                  <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevTodayActivities']}</div>
                  <div class="text-muted text-uppercase font-weight-bold font-xs small">Total Activities</div>
              </div>`

var apppendDevIP='';
apppendDevIP+=`
              <div class="clearfix">
                  <i class="fa fa-laptop bg-info p-3 font-2xl mr-3 float-left text-light"></i>
                  <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevIP'][0].Counter}</div>
                  <div class="text-muted text-uppercase font-weight-bold font-xs small">In Process Activities</div>
              </div>`


              var apppendDevComplete='';
              apppendDevComplete+=`
              <div class="card-body">
              <div class="clearfix">
                  <i class="fa fa-moon-o bg-warning p-3 font-2xl mr-3 float-left text-light"></i>
                  <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevComplete'][0].Counter}</div>
                  <div class="text-muted text-uppercase font-weight-bold font-xs small">Complete Activities</div>
              </div>
          </div>`



var appendActivities='';
data1['Activities'].forEach((item, index)=>{

appendActivities+=`
       
          
                       <li>
                              <div class="text-muted">${item.ArtCode?item.ArtCode:Nothing}</div>
                            
                              <strong>${item.Name?item.Name:0} </strong>
                              <div class="progress progress-xs mt-2" style="height: 5px;">
                         
                                 <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                               
                                    </div> 
                                    </li>`

})

var appendDevType='';
appendDevType+=`
<li>
                              <div class="text-muted">${data1['DevType'][0]?data1['DevType'][0].Type:'Nothing'}</div>
                              <strong>${data1['DevType'][0]?data1['DevType'][0].Counter:0} Activitie </strong>
                              <div class="progress progress-xs mt-2" style="height: 5px;">
                             
                                 <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                              
                                    </div>
                          </li>
                          `

                          var appendFactoryWise='';
                          appendFactoryWise+=`<div class="stat-text">${data1['FactoryWise'][0]?data1['FactoryWise'][0].VendorName:'Nothing'}></div>
                              <div class="stat-digit count">${data1['FactoryWise'][0]?data1['FactoryWise'][0].Counter:0}</div>`
                          
              $("#DevTodayActivities").html(appendDevTodayActivities);
              $("#DevIP").html(apppendDevIP);
              $("#DevComplete").html(apppendDevComplete);
              $("#Activities").html(appendActivities);
              $("#DevType").html(appendDevType);
              $("#FactoryWise").html(appendFactoryWise);
              

        
              Highcharts.chart('customGraph', {

chart: {
type: 'column'
},

title: {
text: 'Article Wise Activities'
},

xAxis: {
categories: datesget,
},

yAxis: {
allowDecimals: false,
min: 0,
title: {
  text: 'Number of Balls'
}
},

//   tooltip: {
//     formatter: function () {
//       return '<b>' + this.x + '</b><br/>' +
//         this.series.name + ': ' + this.y + '<br/>' +
//         'Total: ' + this.point.stackTotal;
//     }
//   },

plotOptions: {
column: {
  stacking: 'normal'
}
},

series: seriesGet


});
var chartGetting = $("#customGraph").highcharts();
chartGetting.updateFromData();



      }
         })

         $.ajax({

      url  : "<?php echo base_url('/MIS/Lab/custompie'); ?>",
      method: "GET",
      data: {"c_date":c_date,"e_date":e_date },
      success: function (data) {
        
    


      }
     })

       $.ajax({

      url  : "<?php echo base_url('MIS/Lab/customtableArticleCode'); ?>",
      method: "GET",
      data: {"c_date":c_date,"e_date":e_date, "article_code":articleCodevalue },
      success: function (data) {
          var data1=JSON.parse(data);
          var appenTable='';
        
   
data1.forEach((item, index)=>{


appenTable+=` <tr>
              <td>${item.TestNO}</td>
              <td>${item.Date}</td>
              <td>${item.Size}</td>
              <td>${item.PO}</td>
              <td>${item.Receiving_Date}</td>
              <td>${item.Supplier_Name}</td>
               <td>${item.Supplier_Ref}</td>
              <td>${item.Quantity_Carton}</td>
              <td>${item.Entrydate}</td>
              <td>${item.Result}</td>
          </tr>`;
})
        
          $("#appendTable").html(appenTable);
      }
       })


}

else if(articleCode == "All" && typeofProject == "Specific"){

   let Typevalue = $("#processPlace").val()
url4 = '<?php echo base_url('MIS/Developement/CallDataRangeDataType'); ?>'

$.post(url4, {"startDate":c_date,"endDate":e_date,"type":Typevalue},
  function(data, status) {
    console.log("CallDataRangeDataArticleCode", data)
     let processDate = [];
     let articles=[];
     let NoOfBalls=[];
     data.forEach(element => {
       processDate.push(element.ArtCode);
       articles.push(element.NoofDays);
       NoOfBalls.push(parseInt(element.NoOfBalls));
     });

     Highcharts.chart('customcontainer', {
chart: {
  zoomType: 'xy'
},
title: {
  text: `Process Based Activity  From ${c_date} to ${e_date}`
},
subtitle: {
  //text: 'Source: WorldClimate.com'
},
xAxis: [{
  categories: processDate,
  crosshair: true
}],
yAxis: [{ // Primary yAxis
  labels: {
    format: '{value}',
    style: {
      color: Highcharts.getOptions().colors[1]
    }
  },
  title: {
    text: 'Activities',
    style: {
      color: Highcharts.getOptions().colors[1]
    }
  }
}, { // Secondary yAxis
  title: {
    //text: 'Rainfall',
    style: {
      color: Highcharts.getOptions().colors[0]
    }
  },
  labels: {
    format: '{value} ',
    style: {
      color: Highcharts.getOptions().colors[0]
    }
  },
  opposite: true
}],
tooltip: {
  shared: true
},
legend: {
  layout: 'vertical',
  align: 'left',
  x: 120,
  verticalAlign: 'top',
  y: 100,
  floating: true,
  backgroundColor:
    Highcharts.defaultOptions.legend.backgroundColor || // theme
    'rgba(255,255,255,0.25)'
},
series: [{
  name: 'Days Required',
  type: 'column',
  yAxis: 1,
  data: articles,
  tooltip: {
    valueSuffix: ''
  }

}, {
  name: 'No of Balls',
  type: 'spline',
  data:NoOfBalls,
  tooltip: {
    valueSuffix: ''
  }
}]
});
  });
        

///////////////////////////// Gant Chart Custom Date //////////////////////////////
url1 = '<?php echo base_url('MIS/Developement/getGantDateRangeDataType'); ?>'

$.post(url1, {"startDate":c_date,"endDate":e_date, "type":Typevalue},
  function(data, status) {
    console.log("CallDataRangeDataArticleCode 2", data)
//console.log("Custom",data);
let series = generateDataGant(data);

var today = new Date();
  day = 1000 * 60 * 60 * 24;
  // Utility functions
  dateFormat = Highcharts.dateFormat;
  defined = Highcharts.defined;
  isObject = Highcharts.isObject;

// Set to 00:00:00:000 today
today.setUTCHours(0);
today.setUTCMinutes(0);
today.setUTCSeconds(0);
today.setUTCMilliseconds(0);
today = today.getTime();

Highcharts.ganttChart('gantChartCustom', {
  series: series,
  tooltip: {
      pointFormatter: function () {
          var point = this,
              format = '%e. %b',
              options = point.options,
              completed = options.completed,
              amount = isObject(completed) ? completed.amount : completed,
              status = ((amount || 0) * 100) + '%',
              lines;

          lines = [{
              value: point.name,
              style: 'font-weight: bold;'
          }, {
              title: 'Start',
              value: dateFormat(format, point.start)
          }, {
              visible: !options.milestone,
              title: 'End',
              value: dateFormat(format, point.end)
          }
          , {
                title: 'Complete %',
                value: point.complete
            }
          ];

          return lines.reduce(function (str, line) {
              var s = '',
                  style = (
                      defined(line.style) ? line.style : 'font-size: 0.8em;'
                  );
              if (line.visible !== false) {
                  s = (
                      '<span style="' + style + '">' +
                      (defined(line.title) ? line.title + ': ' : '') +
                      (defined(line.value) ? line.value : '') +
                      '</span><br/>'
                  );
              }
              return str + s;
          }, '');
      }
  },
  title: {
      text: 'Activities Management'
  },
  xAxis: [{ // first x-axis
  tickInterval: 1000 * 60 * 60 * 24 // 1 month
}, { // second x-axis
  tickInterval: 1000 * 60 * 60 * 24 * 30, // 1 day
}]
});

  });

//   {
    
//     currentDateIndicator: true,
//     min: today - 3 * day,
//     max: today + 18 * day
// }

//////////////////////////// End Gant Chart Custom ///////////////////////////

//////////////////////////// Custom Table Content ///////////////////////////////

url2 = '<?php echo base_url('MIS/Developement/getCustomTableDataType'); ?>'

$.post(url2, {"startDate":c_date,"endDate":e_date, "type":Typevalue},
  function(data, status) {
    console.log("CallDataRangeDataArticleCode 3", data)
    $("#customTableDateRange").html("");
    htmlTableContent = `<table id="exampleDataTable1" class="table table-striped table-bordered" style="width:100%">
      <thead style="background-color: #4DBD74; color: #fff;">
          <tr>
              <th>Article Code </th>
              <th>Size</th>
              <th>Type</th>
              <th>Activities </th>
              <th>Activity Start Date</th>
              <th>Activity End Date</th>
               <th>Days Required</th>
              
              <th>Status</th>
                <th>Root Cause</th>
               <th>Corrective Action</th>
          </tr>
      </thead>
      <tbody>`;
    data.forEach(element => {
      htmlTableContent += ` <tr>
              <td>${element.ArtCode1}</td>
              <td>${element.Size}</td>
              <td>${element.Type}</td>
              <td>${element.Name} </td>
              <td>${element.PSDate1}</td>
              <td>${element.PEDate1}</td>
               <td>${element.NoofDays}</td>
              
              <td>${element.Status}</td>
                 <td>${element.rootcasue}</td>
               <td>${element.action}</td>
           </tr>   `
    });
    htmlTableContent += `</tbody>
 </table>`
 $("#customTableDateRange").append(htmlTableContent);
 $("#exampleDataTable1").DataTable(
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
          }
      ],
    "ordering":false,
    "pageLength":10,
    "searching":true,
    "LengthChange":true,
    "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},
  
  });
  });


       
      


/////////////////////////// End Custom Table Content ///////////////////////////
        
         $.ajax({

      url  : "<?php echo base_url('MIS/Developement/customload'); ?>",
      method: "GET",
      data: {"c_date":c_date,"e_date":e_date},
      success: function (data) {
         
         var data1=JSON.parse(data);
         let datesget = [];
         for(let i=0;i<data1.RDate.length;i++){
            datesget.push(data1.RDate[i].Datee)
         }
         //let datesget = data1.RDate;
         let ballsData = [];
         data1.NoOfBalls.forEach(element => {
           ballsData.push(parseInt(element.NoOfBalls));
         });

         var seriesGet = generateData(data1, ballsData);
          

        var appendDevTodayActivities='';

        appendDevTodayActivities+=`<div class="clearfix">
                  <i class="fa fa-cogs bg-flat-color-5 p-3 font-2xl mr-3 float-left text-light"></i>
                  <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevTodayActivities']}</div>
                  <div class="text-muted text-uppercase font-weight-bold font-xs small">Total Activities</div>
              </div>`

var apppendDevIP='';
apppendDevIP+=`
              <div class="clearfix">
                  <i class="fa fa-laptop bg-info p-3 font-2xl mr-3 float-left text-light"></i>
                  <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevIP'][0].Counter}</div>
                  <div class="text-muted text-uppercase font-weight-bold font-xs small">In Process Activities</div>
              </div>`


              var apppendDevComplete='';
              apppendDevComplete+=`
              <div class="card-body">
              <div class="clearfix">
                  <i class="fa fa-moon-o bg-warning p-3 font-2xl mr-3 float-left text-light"></i>
                  <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevComplete'][0].Counter}</div>
                  <div class="text-muted text-uppercase font-weight-bold font-xs small">Complete Activities</div>
              </div>
          </div>`



var appendActivities='';
data1['Activities'].forEach((item, index)=>{

appendActivities+=`
       
          
                       <li>
                              <div class="text-muted">${item.ArtCode?item.ArtCode:Nothing}</div>
                            
                              <strong>${item.Name?item.Name:0} </strong>
                              <div class="progress progress-xs mt-2" style="height: 5px;">
                         
                                 <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                               
                                    </div> 
                                    </li>`

})

var appendDevType='';
appendDevType+=`
<li>
                              <div class="text-muted">${data1['DevType'][0]?data1['DevType'][0].Type:'Nothing'}</div>
                              <strong>${data1['DevType'][0]?data1['DevType'][0].Counter:0} Activitie </strong>
                              <div class="progress progress-xs mt-2" style="height: 5px;">
                             
                                 <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                              
                                    </div>
                          </li>
                          `

                          var appendFactoryWise='';
                          appendFactoryWise+=`<div class="stat-text">${data1['FactoryWise'][0]?data1['FactoryWise'][0].VendorName:'Nothing'}></div>
                              <div class="stat-digit count">${data1['FactoryWise'][0]?data1['FactoryWise'][0].Counter:0}</div>`
                          
              $("#DevTodayActivities").html(appendDevTodayActivities);
              $("#DevIP").html(apppendDevIP);
              $("#DevComplete").html(apppendDevComplete);
              $("#Activities").html(appendActivities);
              $("#DevType").html(appendDevType);
              $("#FactoryWise").html(appendFactoryWise);
              

        
              Highcharts.chart('customGraph', {

chart: {
type: 'column'
},

title: {
text: 'Article Wise Activities'
},

xAxis: {
categories: datesget,
},

yAxis: {
allowDecimals: false,
min: 0,
title: {
  text: 'Number of Balls'
}
},

//   tooltip: {
//     formatter: function () {
//       return '<b>' + this.x + '</b><br/>' +
//         this.series.name + ': ' + this.y + '<br/>' +
//         'Total: ' + this.point.stackTotal;
//     }
//   },

plotOptions: {
column: {
  stacking: 'normal'
}
},

series: seriesGet


});
var chartGetting = $("#customGraph").highcharts();
chartGetting.updateFromData();



      }
         })

         $.ajax({

      url  : "<?php echo base_url('/MIS/Lab/custompie'); ?>",
      method: "GET",
      data: {"c_date":c_date,"e_date":e_date },
      success: function (data) {
        
    


      }
     })

       $.ajax({

      url  : "<?php echo base_url('/MIS/Lab/customtableArticleCode'); ?>",
      method: "GET",
      data: {"c_date":c_date,"e_date":e_date, "type":Typevalue },
      success: function (data) {
          var data1=JSON.parse(data);
          var appenTable='';
        
   
data1.forEach((item, index)=>{


appenTable+=` <tr>
              <td>${item.TestNO}</td>
              <td>${item.Date}</td>
              <td>${item.Size}</td>
              <td>${item.PO}</td>
              <td>${item.Receiving_Date}</td>
              <td>${item.Supplier_Name}</td>
               <td>${item.Supplier_Ref}</td>
              <td>${item.Quantity_Carton}</td>
              <td>${item.Entrydate}</td>
              <td>${item.Result}</td>
          </tr>`;
})
        
          $("#appendTable").html(appenTable);
      }
       })


}

else if(articleCode == "Specific" && typeofProject == "Specific"){

let Typevalue = $("#processPlace").val()
let artCode = $("#articlePlace").val()
url4 = '<?php echo base_url(
  'MIS/Developement/CallDataRangeDataTypeArticleCode'
); ?>'

$.post(url4, {"startDate":c_date,"endDate":e_date,"type":Typevalue,"art_code":artCode},
function(data, status) {
console.log("CallDataRangeDataArticleCode", data)
let processDate = [];
let articles=[];
let NoOfBalls=[];
data.forEach(element => {
  processDate.push(element.ArtCode);
  articles.push(element.NoofDays);
  NoOfBalls.push(parseInt(element.NoOfBalls));
});

Highcharts.chart('customcontainer', {
chart: {
zoomType: 'xy'
},
title: {
text: `Process Based Activity  From ${c_date} to ${e_date}`
},
subtitle: {
//text: 'Source: WorldClimate.com'
},
xAxis: [{
categories: processDate,
crosshair: true
}],
yAxis: [{ // Primary yAxis
labels: {
format: '{value}',
style: {
 color: Highcharts.getOptions().colors[1]
}
},
title: {
text: 'Activities',
style: {
 color: Highcharts.getOptions().colors[1]
}
}
}, { // Secondary yAxis
title: {
//text: 'Rainfall',
style: {
 color: Highcharts.getOptions().colors[0]
}
},
labels: {
format: '{value} ',
style: {
 color: Highcharts.getOptions().colors[0]
}
},
opposite: true
}],
tooltip: {
shared: true
},
legend: {
layout: 'vertical',
align: 'left',
x: 120,
verticalAlign: 'top',
y: 100,
floating: true,
backgroundColor:
Highcharts.defaultOptions.legend.backgroundColor || // theme
'rgba(255,255,255,0.25)'
},
series: [{
name: 'Days Required',
type: 'column',
yAxis: 1,
data: articles,
tooltip: {
valueSuffix: ''
}

}, {
name: 'No of Balls',
type: 'spline',
data:NoOfBalls,
tooltip: {
valueSuffix: ''
}
}]
});
});
   

///////////////////////////// Gant Chart Custom Date //////////////////////////////
url1 = '<?php echo base_url(
  'MIS/Developement/getGantDateRangeDataTypeArticleCode'
); ?>'

$.post(url1, {"startDate":c_date,"endDate":e_date, "type":Typevalue,"art_code":artCode},
function(data, status) {
console.log("CallDataRangeDataArticleCode 2", data)
//console.log("Custom",data);
let series = generateDataGant(data);

var today = new Date();
day = 1000 * 60 * 60 * 24;
// Utility functions
dateFormat = Highcharts.dateFormat;
defined = Highcharts.defined;
isObject = Highcharts.isObject;

// Set to 00:00:00:000 today
today.setUTCHours(0);
today.setUTCMinutes(0);
today.setUTCSeconds(0);
today.setUTCMilliseconds(0);
today = today.getTime();

Highcharts.ganttChart('gantChartCustom', {
series: series,
tooltip: {
 pointFormatter: function () {
     var point = this,
         format = '%e. %b',
         options = point.options,
         completed = options.completed,
         amount = isObject(completed) ? completed.amount : completed,
         status = ((amount || 0) * 100) + '%',
         lines;

     lines = [{
         value: point.name,
         style: 'font-weight: bold;'
     }, {
         title: 'Start',
         value: dateFormat(format, point.start)
     }, {
         visible: !options.milestone,
         title: 'End',
         value: dateFormat(format, point.end)
     }
     , {
                title: 'Complete %',
                value: point.complete
            }
     ];

     return lines.reduce(function (str, line) {
         var s = '',
             style = (
                 defined(line.style) ? line.style : 'font-size: 0.8em;'
             );
         if (line.visible !== false) {
             s = (
                 '<span style="' + style + '">' +
                 (defined(line.title) ? line.title + ': ' : '') +
                 (defined(line.value) ? line.value : '') +
                 '</span><br/>'
             );
         }
         return str + s;
     }, '');
 }
},
title: {
 text: 'Activities Management'
},
xAxis: [{ // first x-axis
tickInterval: 1000 * 60 * 60 * 24 // 1 month
}, { // second x-axis
tickInterval: 1000 * 60 * 60 * 24 * 30, // 1 day
}]
});

});

//   {

//     currentDateIndicator: true,
//     min: today - 3 * day,
//     max: today + 18 * day
// }

//////////////////////////// End Gant Chart Custom ///////////////////////////

//////////////////////////// Custom Table Content ///////////////////////////////

url2 = '<?php echo base_url(
  'MIS/Developement/getCustomTableDataTypeArticleCode'
); ?>'

$.post(url2, {"startDate":c_date,"endDate":e_date, "type":Typevalue,"art_code":artCode},
function(data, status) {
console.log("CallDataRangeDataArticleCode 3", data)
$("#customTableDateRange").html("");
htmlTableContent = `<table id="exampleDataTable1" class="table table-striped table-bordered" style="width:100%">
 <thead style="background-color: #4DBD74; color: #fff;">
     <tr>
         <th>Article Code </th>
         <th>Size</th>
         <th>Type</th>
         <th>Activities </th>
         <th>Activity Start Date</th>
         <th>Activity End Date</th>
          <th>Days Required</th>
          
         <th>Status</th>
          <th>Root Cause/th>
               <th>Corrective Action</th>
     </tr>
 </thead>
 <tbody>`;
data.forEach(element => {
 htmlTableContent += ` <tr>
         <td>${element.ArtCode1}</td>
         <td>${element.Size}</td>
         <td>${element.Type}</td>
         <td>${element.Name} </td>
         <td>${element.PSDate1}</td>
         <td>${element.PEDate1}</td>
          <td>${element.NoofDays}</td>
        
         <td>${element.Status}</td>
            <td>${element.rootcasue}</td>
          <td>${element.action}</td>
      </tr>   `
});
htmlTableContent += `</tbody>
</table>`
$("#customTableDateRange").append(htmlTableContent);
$("#exampleDataTable1").DataTable(
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
     }
 ],
"ordering":false,
"pageLength":10,
"searching":true,
"LengthChange":true,
"oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},

});
});


  
 


/////////////////////////// End Custom Table Content ///////////////////////////
   
    $.ajax({

 url  : "<?php echo base_url('MIS/Developement/customload'); ?>",
 method: "GET",
 data: {"c_date":c_date,"e_date":e_date},
 success: function (data) {
    
    var data1=JSON.parse(data);
    let datesget = [];
    for(let i=0;i<data1.RDate.length;i++){
       datesget.push(data1.RDate[i].Datee)
    }
    //let datesget = data1.RDate;
    let ballsData = [];
    data1.NoOfBalls.forEach(element => {
      ballsData.push(parseInt(element.NoOfBalls));
    });

    var seriesGet = generateData(data1, ballsData);
     

   var appendDevTodayActivities='';

   appendDevTodayActivities+=`<div class="clearfix">
             <i class="fa fa-cogs bg-flat-color-5 p-3 font-2xl mr-3 float-left text-light"></i>
             <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevTodayActivities']}</div>
             <div class="text-muted text-uppercase font-weight-bold font-xs small">Total Activities</div>
         </div>`

var apppendDevIP='';
apppendDevIP+=`
         <div class="clearfix">
             <i class="fa fa-laptop bg-info p-3 font-2xl mr-3 float-left text-light"></i>
             <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevIP'][0].Counter}</div>
             <div class="text-muted text-uppercase font-weight-bold font-xs small">In Process Activities</div>
         </div>`


         var apppendDevComplete='';
         apppendDevComplete+=`
         <div class="card-body">
         <div class="clearfix">
             <i class="fa fa-moon-o bg-warning p-3 font-2xl mr-3 float-left text-light"></i>
             <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevComplete'][0].Counter}</div>
             <div class="text-muted text-uppercase font-weight-bold font-xs small">Complete Activities</div>
         </div>
     </div>`



var appendActivities='';
data1['Activities'].forEach((item, index)=>{

appendActivities+=`
  
     
                  <li>
                         <div class="text-muted">${item.ArtCode?item.ArtCode:Nothing}</div>
                       
                         <strong>${item.Name?item.Name:0} </strong>
                         <div class="progress progress-xs mt-2" style="height: 5px;">
                    
                            <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                          
                               </div> 
                               </li>`

})

var appendDevType='';
appendDevType+=`
<li>
                         <div class="text-muted">${data1['DevType'][0]?data1['DevType'][0].Type:'Nothing'}</div>
                         <strong>${data1['DevType'][0]?data1['DevType'][0].Counter:0} Activitie </strong>
                         <div class="progress progress-xs mt-2" style="height: 5px;">
                        
                            <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                         
                               </div>
                     </li>
                     `

                     var appendFactoryWise='';
                     appendFactoryWise+=`<div class="stat-text">${data1['FactoryWise'][0]?data1['FactoryWise'][0].VendorName:'Nothing'}></div>
                         <div class="stat-digit count">${data1['FactoryWise'][0]?data1['FactoryWise'][0].Counter:0}</div>`
                     
         $("#DevTodayActivities").html(appendDevTodayActivities);
         $("#DevIP").html(apppendDevIP);
         $("#DevComplete").html(apppendDevComplete);
         $("#Activities").html(appendActivities);
         $("#DevType").html(appendDevType);
         $("#FactoryWise").html(appendFactoryWise);
         

   
         Highcharts.chart('customGraph', {

chart: {
type: 'column'
},

title: {
text: 'Article Wise Activities'
},

xAxis: {
categories: datesget,
},

yAxis: {
allowDecimals: false,
min: 0,
title: {
text: 'Number of Balls'
}
},

//   tooltip: {
//     formatter: function () {
//       return '<b>' + this.x + '</b><br/>' +
//         this.series.name + ': ' + this.y + '<br/>' +
//         'Total: ' + this.point.stackTotal;
//     }
//   },

plotOptions: {
column: {
stacking: 'normal'
}
},

series: seriesGet


});
var chartGetting = $("#customGraph").highcharts();
chartGetting.updateFromData();



 }
    })

    $.ajax({

 url  : "<?php echo base_url('/MIS/Lab/custompie'); ?>",
 method: "GET",
 data: {"c_date":c_date,"e_date":e_date },
 success: function (data) {
   



 }
})

  $.ajax({

 url  : "<?php echo base_url('/MIS/Lab/customtableArticleCode'); ?>",
 method: "GET",
 data: {"c_date":c_date,"e_date":e_date, "type":Typevalue },
 success: function (data) {
     var data1=JSON.parse(data);
     var appenTable='';
   

data1.forEach((item, index)=>{


appenTable+=` <tr>
         <td>${item.TestNO}</td>
         <td>${item.Date}</td>
         <td>${item.Size}</td>
         <td>${item.PO}</td>
         <td>${item.Receiving_Date}</td>
         <td>${item.Supplier_Name}</td>
          <td>${item.Supplier_Ref}</td>
         <td>${item.Quantity_Carton}</td>
         <td>${item.Entrydate}</td>
         <td>${item.Result}</td>
     </tr>`;
})
   
     $("#appendTable").html(appenTable);
 }
  })


}
}
else if($('#filterationSelection').val() == "date"){

url4 = '<?php echo base_url('MIS/Developement/CallDataRangeData'); ?>'

$.post(url4, {"startDate":c_date,"endDate":e_date},
  function(data, status) {
     let processDate = [];
     let articles=[];
     let NoOfBalls=[];
     data.forEach(element => {
       processDate.push(element.ArtCode);
       articles.push(element.NoofDays);
       NoOfBalls.push(parseInt(element.NoOfBalls));
     });

     Highcharts.chart('customcontainer', {
chart: {
  zoomType: 'xy'
},
title: {
  text: `Process Based Activity  From ${c_date} to ${e_date}`
},
subtitle: {
  //text: 'Source: WorldClimate.com'
},
xAxis: [{
  categories: processDate,
  crosshair: true
}],
yAxis: [{ // Primary yAxis
  labels: {
    format: '{value}',
    style: {
      color: Highcharts.getOptions().colors[1]
    }
  },
  title: {
    text: 'Activities',
    style: {
      color: Highcharts.getOptions().colors[1]
    }
  }
}, { // Secondary yAxis
  title: {
    //text: 'Rainfall',
    style: {
      color: Highcharts.getOptions().colors[0]
    }
  },
  labels: {
    format: '{value} ',
    style: {
      color: Highcharts.getOptions().colors[0]
    }
  },
  opposite: true
}],
tooltip: {
  shared: true
},
legend: {
  layout: 'vertical',
  align: 'left',
  x: 120,
  verticalAlign: 'top',
  y: 100,
  floating: true,
  backgroundColor:
    Highcharts.defaultOptions.legend.backgroundColor || // theme
    'rgba(255,255,255,0.25)'
},
series: [{
  name: 'Days Required',
  type: 'column',
  yAxis: 1,
  data: articles,
  tooltip: {
    valueSuffix: ''
  }

}, {
  name: 'No of Balls',
  type: 'spline',
  data:NoOfBalls,
  tooltip: {
    valueSuffix: ''
  }
}]
});
  });
        

///////////////////////////// Gant Chart Custom Date //////////////////////////////
url1 = '<?php echo base_url('MIS/Developement/getGantDateRangeData'); ?>'

$.post(url1, {"startDate":c_date,"endDate":e_date},
  function(data, status) {
   
//console.log("Custom",data);
let series = generateDataGant(data);

var today = new Date();
  day = 1000 * 60 * 60 * 24;
  // Utility functions
  dateFormat = Highcharts.dateFormat;
  defined = Highcharts.defined;
  isObject = Highcharts.isObject;

// Set to 00:00:00:000 today
today.setUTCHours(0);
today.setUTCMinutes(0);
today.setUTCSeconds(0);
today.setUTCMilliseconds(0);
today = today.getTime();

Highcharts.ganttChart('gantChartCustom', {
  series: series,
  tooltip: {
      pointFormatter: function () {
          var point = this,
              format = '%e. %b',
              options = point.options,
              completed = options.completed,
              amount = isObject(completed) ? completed.amount : completed,
              status = ((amount || 0) * 100) + '%',
              lines;

          lines = [{
              value: point.name,
              style: 'font-weight: bold;'
          }, {
              title: 'Start',
              value: dateFormat(format, point.start)
          }, {
              visible: !options.milestone,
              title: 'End',
              value: dateFormat(format, point.end)
          }
          , {
                title: 'Complete %',
                value: point.complete
            }
          ];

          return lines.reduce(function (str, line) {
              var s = '',
                  style = (
                      defined(line.style) ? line.style : 'font-size: 0.8em;'
                  );
              if (line.visible !== false) {
                  s = (
                      '<span style="' + style + '">' +
                      (defined(line.title) ? line.title + ': ' : '') +
                      (defined(line.value) ? line.value : '') +
                      '</span><br/>'
                  );
              }
              return str + s;
          }, '');
      }
  },
  title: {
      text: 'Activities Management'
  },
  xAxis: [{ // first x-axis
  tickInterval: 1000 * 60 * 60 * 24 // 1 month
}, { // second x-axis
  tickInterval: 1000 * 60 * 60 * 24 * 30, // 1 day
}]
});

  });

//////////////////////////// End Gant Chart Custom ///////////////////////////

//////////////////////////// Custom Table Content ///////////////////////////////

url2 = '<?php echo base_url('MIS/Developement/getCustomTableData'); ?>'

$.post(url2, {"startDate":c_date,"endDate":e_date},
  function(data, status) {
 
    $("#customTableDateRange").html("");
    htmlTableContent = `<table id="exampleDataTable1" class="table table-striped table-bordered" style="width:100%">
      <thead style="background-color: #4DBD74; color: #fff;">
          <tr>
              <th>Article Code </th>
              <th>Size</th>
              <th>Type</th>
              <th>Activities </th>
              <th>Activity Start Date</th>
              <th>Activity End Date</th>
               <th>Days Required</th>
                
              <th>Status</th>
              <th>Root Cause</th>
               <th>Corrective Action</th>
              
          </tr>
      </thead>
      <tbody>`;
    data.forEach(element => {
      htmlTableContent += ` <tr>
              <td>${element.ArtCode1}</td>
              <td>${element.Size}</td>
              <td>${element.Type}</td>
              <td>${element.Name} </td>
              <td>${element.PSDate1}</td>
              <td>${element.PEDate1}</td>
               <td>${element.NoofDays}</td>
             
               
              <td>${element.Status}</td>
                  <td>${element.rootcasue}</td>
               <td>${element.action}</td>
           </tr>   `
    });
    htmlTableContent += `</tbody>
 </table>`
 $("#customTableDateRange").append(htmlTableContent);
 $("#exampleDataTable1").DataTable(
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
          }
      ],
    "ordering":false,
    "pageLength":10,
    "searching":true,
    "LengthChange":true,
    "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},
  
  });
  });

/////////////////////////// End Custom Table Content ///////////////////////////
        
         $.ajax({

      url  : "<?php echo base_url('MIS/Developement/customload'); ?>",
      method: "GET",
      data: {"c_date":c_date,"e_date":e_date},
      success: function (data) {
         
         var data1=JSON.parse(data);
         let datesget = [];
         for(let i=0;i<data1.RDate.length;i++){
            datesget.push(data1.RDate[i].Datee)
         }
         //let datesget = data1.RDate;
         let ballsData = [];
         data1.NoOfBalls.forEach(element => {
           ballsData.push(parseInt(element.NoOfBalls));
         });

         var seriesGet = generateData(data1, ballsData);
          

        var appendDevTodayActivities='';

        appendDevTodayActivities+=`<div class="clearfix">
                  <i class="fa fa-cogs bg-flat-color-5 p-3 font-2xl mr-3 float-left text-light"></i>
                  <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevTodayActivities']}</div>
                  <div class="text-muted text-uppercase font-weight-bold font-xs small">Total Activities</div>
              </div>`

var apppendDevIP='';
apppendDevIP+=`
              <div class="clearfix">
                  <i class="fa fa-laptop bg-info p-3 font-2xl mr-3 float-left text-light"></i>
                  <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevIP'][0].Counter}</div>
                  <div class="text-muted text-uppercase font-weight-bold font-xs small">In Process Activities</div>
              </div>`


              var apppendDevComplete='';
              apppendDevComplete+=`
              <div class="card-body">
              <div class="clearfix">
                  <i class="fa fa-moon-o bg-warning p-3 font-2xl mr-3 float-left text-light"></i>
                  <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevComplete'][0].Counter}</div>
                  <div class="text-muted text-uppercase font-weight-bold font-xs small">Complete Activities</div>
              </div>
          </div>`



var appendActivities='';
data1['Activities'].forEach((item, index)=>{

appendActivities+=`
       
          
                       <li>
                              <div class="text-muted">${item.ArtCode?item.ArtCode:Nothing}</div>
                            
                              <strong>${item.Name?item.Name:0} </strong>
                              <div class="progress progress-xs mt-2" style="height: 5px;">
                         
                                 <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                               
                                    </div> 
                                    </li>`

})

var appendDevType='';
appendDevType+=`
<li>
                              <div class="text-muted">${data1['DevType'][0]?data1['DevType'][0].Type:'Nothing'}</div>
                              <strong>${data1['DevType'][0]?data1['DevType'][0].Counter:0} Activitie </strong>
                              <div class="progress progress-xs mt-2" style="height: 5px;">
                             
                                 <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                              
                                    </div>
                          </li>
                          `

                          var appendFactoryWise='';
                          appendFactoryWise+=`<div class="stat-text">${data1['FactoryWise'][0]?data1['FactoryWise'][0].VendorName:'Nothing'}></div>
                              <div class="stat-digit count">${data1['FactoryWise'][0]?data1['FactoryWise'][0].Counter:0}</div>`
                          
              $("#DevTodayActivities").html(appendDevTodayActivities);
              $("#DevIP").html(apppendDevIP);
              $("#DevComplete").html(apppendDevComplete);
              $("#Activities").html(appendActivities);
              $("#DevType").html(appendDevType);
              $("#FactoryWise").html(appendFactoryWise);
              

        
              Highcharts.chart('customGraph', {

chart: {
type: 'column'
},

title: {
text: 'Article Wise Activities'
},

xAxis: {
categories: datesget,
},

yAxis: {
allowDecimals: false,
min: 0,
title: {
  text: 'Number of Balls'
}
},

//   tooltip: {
//     formatter: function () {
//       return '<b>' + this.x + '</b><br/>' +
//         this.series.name + ': ' + this.y + '<br/>' +
//         'Total: ' + this.point.stackTotal;
//     }
//   },

plotOptions: {
column: {
  stacking: 'normal'
}
},

series: seriesGet


});
var chartGetting = $("#customGraph").highcharts();
chartGetting.updateFromData();



      }
         })

         $.ajax({

      url  : "<?php echo base_url('/MIS/Lab/custompie'); ?>",
      method: "GET",
      data: {"c_date":c_date,"e_date":e_date },
      success: function (data) {
        
    


      }
     })

       $.ajax({

      url  : "<?php echo base_url('/MIS/Lab/customtable'); ?>",
      method: "GET",
      data: {"c_date":c_date,"e_date":e_date },
      success: function (data) {
          var data1=JSON.parse(data);
          var appenTable='';
        
   
data1.forEach((item, index)=>{


appenTable+=` <tr>
              <td>${item.TestNO}</td>
              <td>${item.Date}</td>
              <td>${item.Size}</td>
              <td>${item.PO}</td>
              <td>${item.Receiving_Date}</td>
              <td>${item.Supplier_Name}</td>
               <td>${item.Supplier_Ref}</td>
              <td>${item.Quantity_Carton}</td>
              <td>${item.Entrydate}</td>
              <td>${item.Result}</td>
          </tr>`;
})
        
          $("#appendTable").html(appenTable);
      }
       })
}

else if($("#filterationSelection").val() == "article"){

   let articleCodevalue = $("#articlePlace").val()
url4 = '<?php echo base_url('MIS/Developement/CallSpecificDataArticleCode'); ?>'

$.post(url4, {"article_code":articleCodevalue},
  function(data, status) {
    console.log("CallDataRangeDataArticleCode", data)
     let processDate = [];
     let articles=[];
     let NoOfBalls=[];
     data.forEach(element => {
       processDate.push(element.ArtCode);
       articles.push(element.NoofDays);
       NoOfBalls.push(parseInt(element.NoOfBalls));
     });

     Highcharts.chart('customcontainer', {
chart: {
  zoomType: 'xy'
},
title: {
  text: `Process Based Activity`
},
subtitle: {
  //text: 'Source: WorldClimate.com'
},
xAxis: [{
  categories: processDate,
  crosshair: true
}],
yAxis: [{ // Primary yAxis
  labels: {
    format: '{value}',
    style: {
      color: Highcharts.getOptions().colors[1]
    }
  },
  title: {
    text: 'Activities',
    style: {
      color: Highcharts.getOptions().colors[1]
    }
  }
}, { // Secondary yAxis
  title: {
    //text: 'Rainfall',
    style: {
      color: Highcharts.getOptions().colors[0]
    }
  },
  labels: {
    format: '{value} ',
    style: {
      color: Highcharts.getOptions().colors[0]
    }
  },
  opposite: true
}],
tooltip: {
  shared: true
},
legend: {
  layout: 'vertical',
  align: 'left',
  x: 120,
  verticalAlign: 'top',
  y: 100,
  floating: true,
  backgroundColor:
    Highcharts.defaultOptions.legend.backgroundColor || // theme
    'rgba(255,255,255,0.25)'
},
series: [{
  name: 'Days Required',
  type: 'column',
  yAxis: 1,
  data: articles,
  tooltip: {
    valueSuffix: ''
  }

}, {
  name: 'No of Balls',
  type: 'spline',
  data:NoOfBalls,
  tooltip: {
    valueSuffix: ''
  }
}]
});
  });
        

///////////////////////////// Gant Chart Custom Date //////////////////////////////
url1 = '<?php echo base_url(
    'MIS/Developement/getGantSpecificDataArticleCode'
); ?>'

$.post(url1, {"article_code":articleCodevalue},
  function(data, status) {
    console.log("CallDataRangeDataArticleCode 2", data)
//console.log("Custom",data);
let series = generateDataGant(data);

var today = new Date();
  day = 1000 * 60 * 60 * 24;
  // Utility functions
  dateFormat = Highcharts.dateFormat;
  defined = Highcharts.defined;
  isObject = Highcharts.isObject;

// Set to 00:00:00:000 today
today.setUTCHours(0);
today.setUTCMinutes(0);
today.setUTCSeconds(0);
today.setUTCMilliseconds(0);
today = today.getTime();

Highcharts.ganttChart('gantChartCustom', {
  series: series,
  tooltip: {
      pointFormatter: function () {
          var point = this,
              format = '%e. %b',
              options = point.options,
              completed = options.completed,
              amount = isObject(completed) ? completed.amount : completed,
              status = ((amount || 0) * 100) + '%',
              lines;

          lines = [{
              value: point.name,
              style: 'font-weight: bold;'
          }, {
              title: 'Start',
              value: dateFormat(format, point.start)
          }, {
              visible: !options.milestone,
              title: 'End',
              value: dateFormat(format, point.end)
          }
          , {
                title: 'Complete %',
                value: point.complete
            }
          ];

          return lines.reduce(function (str, line) {
              var s = '',
                  style = (
                      defined(line.style) ? line.style : 'font-size: 0.8em;'
                  );
              if (line.visible !== false) {
                  s = (
                      '<span style="' + style + '">' +
                      (defined(line.title) ? line.title + ': ' : '') +
                      (defined(line.value) ? line.value : '') +
                      '</span><br/>'
                  );
              }
              return str + s;
          }, '');
      }
  },
  title: {
      text: 'Activities Management'
  },
  xAxis: [{ // first x-axis
  tickInterval: 1000 * 60 * 60 * 24 // 1 month
}, { // second x-axis
  tickInterval: 1000 * 60 * 60 * 24 * 30, // 1 day
}]
});

  });

//   {
    
//     currentDateIndicator: true,
//     min: today - 3 * day,
//     max: today + 18 * day
// }

//////////////////////////// End Gant Chart Custom ///////////////////////////

//////////////////////////// Custom Table Content ///////////////////////////////

url2 = '<?php echo base_url('MIS/Developement/getCustomTableDataSpecificArticleCode'); ?>'

$.post(url2, {"article_code":articleCodevalue},
  function(data, status) {
    console.log("CallDataRangeDataArticleCode 3", data)
    $("#customTableDateRange").html("");
    htmlTableContent = `<table id="exampleDataTable1" class="table table-striped table-bordered" style="width:100%">
      <thead style="background-color: #4DBD74; color: #fff;">
          <tr>
              <th>Article Code </th>
              <th>Size</th>
              <th>Type</th>
              <th>Activities </th>
              <th>Activity Start Date</th>
              <th>Activity End Date</th>
               <th>Days Required</th>
              
               
              <th>Status</th>
               <th>Root Cause</th>
               <th>Corrective Action</th>
          </tr>
      </thead>
      <tbody>`;
    data.forEach(element => {
      htmlTableContent += ` <tr>
              <td>${element.ArtCode1}</td>
              <td>${element.Size}</td>
              <td>${element.Type}</td>
              <td>${element.Name} </td>
              <td>${element.PSDate1}</td>
              <td>${element.PEDate1}</td>
               <td>${element.NoofDays}</td>
                 
              <td>${element.Status}</td>
              <td>${element.rootcasue}</td>
               <td>${element.action}</td>
           </tr>   `
    });
    htmlTableContent += `</tbody>
 </table>`
 $("#customTableDateRange").append(htmlTableContent);
 $("#exampleDataTable1").DataTable(
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
          }
      ],
    "ordering":false,
    "pageLength":10,
    "searching":true,
    "LengthChange":true,
    "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},
  
  });
  });


       
      


/////////////////////////// End Custom Table Content ///////////////////////////
        
         $.ajax({

      url  : "<?php echo base_url('MIS/Developement/customload'); ?>",
      method: "GET",
      data: {"c_date":c_date,"e_date":e_date},
      success: function (data) {
         
         var data1=JSON.parse(data);
         let datesget = [];
         for(let i=0;i<data1.RDate.length;i++){
            datesget.push(data1.RDate[i].Datee)
         }
         //let datesget = data1.RDate;
         let ballsData = [];
         data1.NoOfBalls.forEach(element => {
           ballsData.push(parseInt(element.NoOfBalls));
         });

         var seriesGet = generateData(data1, ballsData);
          

        var appendDevTodayActivities='';

        appendDevTodayActivities+=`<div class="clearfix">
                  <i class="fa fa-cogs bg-flat-color-5 p-3 font-2xl mr-3 float-left text-light"></i>
                  <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevTodayActivities']}</div>
                  <div class="text-muted text-uppercase font-weight-bold font-xs small">Total Activities</div>
              </div>`

var apppendDevIP='';
apppendDevIP+=`
              <div class="clearfix">
                  <i class="fa fa-laptop bg-info p-3 font-2xl mr-3 float-left text-light"></i>
                  <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevIP'][0].Counter}</div>
                  <div class="text-muted text-uppercase font-weight-bold font-xs small">In Process Activities</div>
              </div>`


              var apppendDevComplete='';
              apppendDevComplete+=`
              <div class="card-body">
              <div class="clearfix">
                  <i class="fa fa-moon-o bg-warning p-3 font-2xl mr-3 float-left text-light"></i>
                  <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevComplete'][0].Counter}</div>
                  <div class="text-muted text-uppercase font-weight-bold font-xs small">Complete Activities</div>
              </div>
          </div>`



var appendActivities='';
data1['Activities'].forEach((item, index)=>{

appendActivities+=`
       
          
                       <li>
                              <div class="text-muted">${item.ArtCode?item.ArtCode:Nothing}</div>
                            
                              <strong>${item.Name?item.Name:0} </strong>
                              <div class="progress progress-xs mt-2" style="height: 5px;">
                         
                                 <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                               
                                    </div> 
                                    </li>`

})

var appendDevType='';
appendDevType+=`
<li>
                              <div class="text-muted">${data1['DevType'][0]?data1['DevType'][0].Type:'Nothing'}</div>
                              <strong>${data1['DevType'][0]?data1['DevType'][0].Counter:0} Activitie </strong>
                              <div class="progress progress-xs mt-2" style="height: 5px;">
                             
                                 <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                              
                                    </div>
                          </li>
                          `

                          var appendFactoryWise='';
                          appendFactoryWise+=`<div class="stat-text">${data1['FactoryWise'][0]?data1['FactoryWise'][0].VendorName:'Nothing'}></div>
                              <div class="stat-digit count">${data1['FactoryWise'][0]?data1['FactoryWise'][0].Counter:0}</div>`
                          
              $("#DevTodayActivities").html(appendDevTodayActivities);
              $("#DevIP").html(apppendDevIP);
              $("#DevComplete").html(apppendDevComplete);
              $("#Activities").html(appendActivities);
              $("#DevType").html(appendDevType);
              $("#FactoryWise").html(appendFactoryWise);
              

        
              Highcharts.chart('customGraph', {

chart: {
type: 'column'
},

title: {
text: 'Article Wise Activities'
},

xAxis: {
categories: datesget,
},

yAxis: {
allowDecimals: false,
min: 0,
title: {
  text: 'Number of Balls'
}
},

//   tooltip: {
//     formatter: function () {
//       return '<b>' + this.x + '</b><br/>' +
//         this.series.name + ': ' + this.y + '<br/>' +
//         'Total: ' + this.point.stackTotal;
//     }
//   },

plotOptions: {
column: {
  stacking: 'normal'
}
},

series: seriesGet


});
var chartGetting = $("#customGraph").highcharts();
chartGetting.updateFromData();



      }
         })

         $.ajax({

      url  : "<?php echo base_url('/MIS/Lab/custompie'); ?>",
      method: "GET",
      data: {"c_date":c_date,"e_date":e_date },
      success: function (data) {
        
    


      }
     })

       $.ajax({

      url  : "<?php echo base_url('/MIS/Lab/customtableArticleCode'); ?>",
      method: "GET",
      data: {"c_date":c_date,"e_date":e_date, "article_code":articleCodevalue },
      success: function (data) {
          var data1=JSON.parse(data);
          var appenTable='';
        
   
data1.forEach((item, index)=>{


appenTable+=` <tr>
              <td>${item.TestNO}</td>
              <td>${item.Date}</td>
              <td>${item.Size}</td>
              <td>${item.PO}</td>
              <td>${item.Receiving_Date}</td>
              <td>${item.Supplier_Name}</td>
               <td>${item.Supplier_Ref}</td>
              <td>${item.Quantity_Carton}</td>
              <td>${item.Entrydate}</td>
              <td>${item.Result}</td>
          </tr>`;
})
        
          $("#appendTable").html(appenTable);
      }
       })

}
else if($("#filterationSelection").val() == "type"){

  
  let Typevalue = $("#processPlace").val()
 url4 = '<?php echo base_url('MIS/Developement/CallSpecificDataType'); ?>'

$.post(url4, {"type":Typevalue},
   function(data, status) {
     console.log("CallDataRangeDataArticleCode", data)
      let processDate = [];
      let articles=[];
      let NoOfBalls=[];
      data.forEach(element => {
        processDate.push(element.ArtCode);
        articles.push(element.NoofDays);
        NoOfBalls.push(parseInt(element.NoOfBalls));
      });

      Highcharts.chart('customcontainer', {
 chart: {
   zoomType: 'xy'
 },
 title: {
   text: `Process Based Activity  From ${c_date} to ${e_date}`
 },
 subtitle: {
   //text: 'Source: WorldClimate.com'
 },
 xAxis: [{
   categories: processDate,
   crosshair: true
 }],
 yAxis: [{ // Primary yAxis
   labels: {
     format: '{value}',
     style: {
       color: Highcharts.getOptions().colors[1]
     }
   },
   title: {
     text: 'Activities',
     style: {
       color: Highcharts.getOptions().colors[1]
     }
   }
 }, { // Secondary yAxis
   title: {
     //text: 'Rainfall',
     style: {
       color: Highcharts.getOptions().colors[0]
     }
   },
   labels: {
     format: '{value} ',
     style: {
       color: Highcharts.getOptions().colors[0]
     }
   },
   opposite: true
 }],
 tooltip: {
   shared: true
 },
 legend: {
   layout: 'vertical',
   align: 'left',
   x: 120,
   verticalAlign: 'top',
   y: 100,
   floating: true,
   backgroundColor:
     Highcharts.defaultOptions.legend.backgroundColor || // theme
     'rgba(255,255,255,0.25)'
 },
 series: [{
   name: 'Days Required',
   type: 'column',
   yAxis: 1,
   data: articles,
   tooltip: {
     valueSuffix: ''
   }

 }, {
   name: 'No of Balls',
   type: 'spline',
   data:NoOfBalls,
   tooltip: {
     valueSuffix: ''
   }
 }]
});
   });
         

///////////////////////////// Gant Chart Custom Date //////////////////////////////
 url1 = '<?php echo base_url('MIS/Developement/getGantSpecificDataType'); ?>'

$.post(url1, {"type":Typevalue},
   function(data, status) {
     console.log("CallDataRangeDataArticleCode 2", data)
//console.log("Custom",data);
 let series = generateDataGant(data);

var today = new Date();
   day = 1000 * 60 * 60 * 24;
   // Utility functions
   dateFormat = Highcharts.dateFormat;
   defined = Highcharts.defined;
   isObject = Highcharts.isObject;

// Set to 00:00:00:000 today
today.setUTCHours(0);
today.setUTCMinutes(0);
today.setUTCSeconds(0);
today.setUTCMilliseconds(0);
today = today.getTime();

Highcharts.ganttChart('gantChartCustom', {
   series: series,
   tooltip: {
       pointFormatter: function () {
           var point = this,
               format = '%e. %b',
               options = point.options,
               completed = options.completed,
               amount = isObject(completed) ? completed.amount : completed,
               status = ((amount || 0) * 100) + '%',
               lines;

           lines = [{
               value: point.name,
               style: 'font-weight: bold;'
           }, {
               title: 'Start',
               value: dateFormat(format, point.start)
           }, {
               visible: !options.milestone,
               title: 'End',
               value: dateFormat(format, point.end)
           }
           , {
                title: 'Complete %',
                value: point.complete
            }
           ];

           return lines.reduce(function (str, line) {
               var s = '',
                   style = (
                       defined(line.style) ? line.style : 'font-size: 0.8em;'
                   );
               if (line.visible !== false) {
                   s = (
                       '<span style="' + style + '">' +
                       (defined(line.title) ? line.title + ': ' : '') +
                       (defined(line.value) ? line.value : '') +
                       '</span><br/>'
                   );
               }
               return str + s;
           }, '');
       }
   },
   title: {
       text: 'Activities Management'
   },
   xAxis: [{ // first x-axis
   tickInterval: 1000 * 60 * 60 * 24 // 1 month
 }, { // second x-axis
   tickInterval: 1000 * 60 * 60 * 24 * 30, // 1 day
 }]
});

   });

 //   {
     
 //     currentDateIndicator: true,
 //     min: today - 3 * day,
 //     max: today + 18 * day
 // }

//////////////////////////// End Gant Chart Custom ///////////////////////////

//////////////////////////// Custom Table Content ///////////////////////////////

url2 = '<?php echo base_url('MIS/Developement/getCustomTableDataSpecificType'); ?>'

$.post(url2, {"type":Typevalue},
   function(data, status) {
     console.log("CallDataRangeDataArticleCode 3", data)
     $("#customTableDateRange").html("");
     htmlTableContent = `<table id="exampleDataTable1" class="table table-striped table-bordered" style="width:100%">
       <thead style="background-color: #4DBD74; color: #fff;">
           <tr>
               <th>Article Code </th>
               <th>Size</th>
               <th>Type</th>
               <th>Activities </th>
               <th>Activity Start Date</th>
               <th>Activity End Date</th>
                <th>Days Required</th>
               
               <th>Status</th>
                 <th>Root Cause</th>
                <th>Corrective Action</th>
           </tr>
       </thead>
       <tbody>`;
     data.forEach(element => {
       htmlTableContent += ` <tr>
               <td>${element.ArtCode1}</td>
               <td>${element.Size}</td>
               <td>${element.Type}</td>
               <td>${element.Name} </td>
               <td>${element.PSDate1}</td>
               <td>${element.PEDate1}</td>
                <td>${element.NoofDays}</td>
               
               <td>${element.Status}</td>
                  <td>${element.rootcasue}</td>
                <td>${element.action}</td>
            </tr>   `
     });
     htmlTableContent += `</tbody>
  </table>`
  $("#customTableDateRange").append(htmlTableContent);
  $("#exampleDataTable1").DataTable(
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
           }
       ],
     "ordering":false,
     "pageLength":10,
     "searching":true,
     "LengthChange":true,
     "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},
   
   });
   });


        
       


/////////////////////////// End Custom Table Content ///////////////////////////
         
          $.ajax({

       url  : "<?php echo base_url('MIS/Developement/customload'); ?>",
       method: "GET",
       data: {"c_date":c_date,"e_date":e_date},
       success: function (data) {
          
          var data1=JSON.parse(data);
          let datesget = [];
          for(let i=0;i<data1.RDate.length;i++){
             datesget.push(data1.RDate[i].Datee)
          }
          //let datesget = data1.RDate;
          let ballsData = [];
          data1.NoOfBalls.forEach(element => {
            ballsData.push(parseInt(element.NoOfBalls));
          });
 
          var seriesGet = generateData(data1, ballsData);
           

         var appendDevTodayActivities='';

         appendDevTodayActivities+=`<div class="clearfix">
                   <i class="fa fa-cogs bg-flat-color-5 p-3 font-2xl mr-3 float-left text-light"></i>
                   <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevTodayActivities']}</div>
                   <div class="text-muted text-uppercase font-weight-bold font-xs small">Total Activities</div>
               </div>`

var apppendDevIP='';
apppendDevIP+=`
               <div class="clearfix">
                   <i class="fa fa-laptop bg-info p-3 font-2xl mr-3 float-left text-light"></i>
                   <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevIP'][0].Counter}</div>
                   <div class="text-muted text-uppercase font-weight-bold font-xs small">In Process Activities</div>
               </div>`


               var apppendDevComplete='';
               apppendDevComplete+=`
               <div class="card-body">
               <div class="clearfix">
                   <i class="fa fa-moon-o bg-warning p-3 font-2xl mr-3 float-left text-light"></i>
                   <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevComplete'][0].Counter}</div>
                   <div class="text-muted text-uppercase font-weight-bold font-xs small">Complete Activities</div>
               </div>
           </div>`



var appendActivities='';
data1['Activities'].forEach((item, index)=>{

 appendActivities+=`
        
           
                        <li>
                               <div class="text-muted">${item.ArtCode?item.ArtCode:Nothing}</div>
                             
                               <strong>${item.Name?item.Name:0} </strong>
                               <div class="progress progress-xs mt-2" style="height: 5px;">
                          
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                
                                     </div> 
                                     </li>`

})

var appendDevType='';
appendDevType+=`
<li>
                               <div class="text-muted">${data1['DevType'][0]?data1['DevType'][0].Type:'Nothing'}</div>
                               <strong>${data1['DevType'][0]?data1['DevType'][0].Counter:0} Activitie </strong>
                               <div class="progress progress-xs mt-2" style="height: 5px;">
                              
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                               
                                     </div>
                           </li>
                           `

                           var appendFactoryWise='';
                           appendFactoryWise+=`<div class="stat-text">${data1['FactoryWise'][0]?data1['FactoryWise'][0].VendorName:'Nothing'}></div>
                               <div class="stat-digit count">${data1['FactoryWise'][0]?data1['FactoryWise'][0].Counter:0}</div>`
                           
               $("#DevTodayActivities").html(appendDevTodayActivities);
               $("#DevIP").html(apppendDevIP);
               $("#DevComplete").html(apppendDevComplete);
               $("#Activities").html(appendActivities);
               $("#DevType").html(appendDevType);
               $("#FactoryWise").html(appendFactoryWise);
               

         
               Highcharts.chart('customGraph', {

chart: {
 type: 'column'
},

title: {
 text: 'Article Wise Activities'
},

xAxis: {
 categories: datesget,
},

yAxis: {
 allowDecimals: false,
 min: 0,
 title: {
   text: 'Number of Balls'
 }
},

//   tooltip: {
//     formatter: function () {
//       return '<b>' + this.x + '</b><br/>' +
//         this.series.name + ': ' + this.y + '<br/>' +
//         'Total: ' + this.point.stackTotal;
//     }
//   },

plotOptions: {
 column: {
   stacking: 'normal'
 }
},

series: seriesGet


});
var chartGetting = $("#customGraph").highcharts();
chartGetting.updateFromData();



       }
          })

          $.ajax({

       url  : "<?php echo base_url('/MIS/Lab/custompie'); ?>",
       method: "GET",
       data: {"c_date":c_date,"e_date":e_date },
       success: function (data) {
         
     


       }
      })

        $.ajax({

       url  : "<?php echo base_url('/MIS/Lab/customtableArticleCode'); ?>",
       method: "GET",
       data: {"c_date":c_date,"e_date":e_date, "type":Typevalue },
       success: function (data) {
           var data1=JSON.parse(data);
           var appenTable='';
         
    
data1.forEach((item, index)=>{


 appenTable+=` <tr>
               <td>${item.TestNO}</td>
               <td>${item.Date}</td>
               <td>${item.Size}</td>
               <td>${item.PO}</td>
               <td>${item.Receiving_Date}</td>
               <td>${item.Supplier_Name}</td>
                <td>${item.Supplier_Ref}</td>
               <td>${item.Quantity_Carton}</td>
               <td>${item.Entrydate}</td>
               <td>${item.Result}</td>
           </tr>`;
})
         
           $("#appendTable").html(appenTable);
       }
        })



}

else if($("#filterationSelection").val() == "season"){

  
let factoryCode = $("#FC").val()
let season = $("#season").val()
console.log("factory Code", factoryCode);
console.log("Season", season);
url4 = '<?php echo base_url('MIS/Developement/CallSpecificDataSeason'); ?>'

$.post(url4, {"factoryCode":factoryCode,"season":season},
 function(data, status) {
   console.log("CallDataRangeDataArticleCode", data)
    let processDate = [];
    let articles=[];
    let NoOfBalls=[];
    data.forEach(element => {
      processDate.push(element.ArtCode);
      articles.push(element.NoofDays);
      NoOfBalls.push(parseInt(element.NoOfBalls));
    });

    Highcharts.chart('customcontainer', {
chart: {
 zoomType: 'xy'
},
title: {
 text: `Process Based Activity  From ${c_date} to ${e_date}`
},
subtitle: {
 //text: 'Source: WorldClimate.com'
},
xAxis: [{
 categories: processDate,
 crosshair: true
}],
yAxis: [{ // Primary yAxis
 labels: {
   format: '{value}',
   style: {
     color: Highcharts.getOptions().colors[1]
   }
 },
 title: {
   text: 'Activities',
   style: {
     color: Highcharts.getOptions().colors[1]
   }
 }
}, { // Secondary yAxis
 title: {
   //text: 'Rainfall',
   style: {
     color: Highcharts.getOptions().colors[0]
   }
 },
 labels: {
   format: '{value} ',
   style: {
     color: Highcharts.getOptions().colors[0]
   }
 },
 opposite: true
}],
tooltip: {
 shared: true
},
legend: {
 layout: 'vertical',
 align: 'left',
 x: 120,
 verticalAlign: 'top',
 y: 100,
 floating: true,
 backgroundColor:
   Highcharts.defaultOptions.legend.backgroundColor || // theme
   'rgba(255,255,255,0.25)'
},
series: [{
 name: 'Days Required',
 type: 'column',
 yAxis: 1,
 data: articles,
 tooltip: {
   valueSuffix: ''
 }

}, {
 name: 'No of Balls',
 type: 'spline',
 data:NoOfBalls,
 tooltip: {
   valueSuffix: ''
 }
}]
});
 });
       

///////////////////////////// Gant Chart Custom Date //////////////////////////////
url1 = '<?php echo base_url('MIS/Developement/getGantSpecificDataSeason'); ?>'

$.post(url1,  {"factoryCode":factoryCode,"season":season},
 function(data, status) {
   console.log("CallDataRangeDataArticleCode 2", data)
//console.log("Custom",data);
let series = generateDataGant(data);

var today = new Date();
 day = 1000 * 60 * 60 * 24;
 // Utility functions
 dateFormat = Highcharts.dateFormat;
 defined = Highcharts.defined;
 isObject = Highcharts.isObject;

// Set to 00:00:00:000 today
today.setUTCHours(0);
today.setUTCMinutes(0);
today.setUTCSeconds(0);
today.setUTCMilliseconds(0);
today = today.getTime();

Highcharts.ganttChart('gantChartCustom', {
 series: series,
 tooltip: {
     pointFormatter: function () {
         var point = this,
             format = '%e. %b',
             options = point.options,
             completed = options.completed,
             amount = isObject(completed) ? completed.amount : completed,
             status = ((amount || 0) * 100) + '%',
             lines;

         lines = [{
             value: point.name,
             style: 'font-weight: bold;'
         }, {
             title: 'Start',
             value: dateFormat(format, point.start)
         }, {
             visible: !options.milestone,
             title: 'End',
             value: dateFormat(format, point.end)
         }
         , {
                title: 'Complete %',
                value: point.complete
            }
         ];

         return lines.reduce(function (str, line) {
             var s = '',
                 style = (
                     defined(line.style) ? line.style : 'font-size: 0.8em;'
                 );
             if (line.visible !== false) {
                 s = (
                     '<span style="' + style + '">' +
                     (defined(line.title) ? line.title + ': ' : '') +
                     (defined(line.value) ? line.value : '') +
                     '</span><br/>'
                 );
             }
             return str + s;
         }, '');
     }
 },
 title: {
     text: 'Activities Management'
 },
 xAxis: [{ // first x-axis
 tickInterval: 1000 * 60 * 60 * 24 // 1 month
}, { // second x-axis
 tickInterval: 1000 * 60 * 60 * 24 * 30, // 1 day
}]
});

 });

//   {
   
//     currentDateIndicator: true,
//     min: today - 3 * day,
//     max: today + 18 * day
// }

//////////////////////////// End Gant Chart Custom ///////////////////////////

//////////////////////////// Custom Table Content ///////////////////////////////

url2 = '<?php echo base_url('MIS/Developement/getCustomTableDataSpecificSeason'); ?>'

$.post(url2,  {"factoryCode":factoryCode,"season":season},
 function(data, status) {
   console.log("CallDataRangeDataArticleCode 3", data)
   $("#customTableDateRange").html("");
   htmlTableContent = `<table id="exampleDataTable1" class="table table-striped table-bordered" style="width:100%">
     <thead style="background-color: #4DBD74; color: #fff;">
         <tr>
             <th>Article Code </th>
             <th>Size</th>
             <th>Type</th>
             <th>Activities </th>
             <th>Activity Start Date</th>
             <th>Activity End Date</th>
              <th>Days Required</th>
             
             <th>Status</th>
               <th>Root Cause</th>
              <th>Corrective Action</th>
         </tr>
     </thead>
     <tbody>`;
   data.forEach(element => {
     htmlTableContent += ` <tr>
             <td>${element.ArtCode1}</td>
             <td>${element.Size}</td>
             <td>${element.Type}</td>
             <td>${element.Name} </td>
             <td>${element.PSDate1}</td>
             <td>${element.PEDate1}</td>
              <td>${element.NoofDays}</td>
             
             <td>${element.Status}</td>
                <td>${element.rootcasue}</td>
              <td>${element.action}</td>
          </tr>   `
   });
   htmlTableContent += `</tbody>
</table>`
$("#customTableDateRange").append(htmlTableContent);
$("#exampleDataTable1").DataTable(
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
         }
     ],
   "ordering":false,
   "pageLength":10,
   "searching":true,
   "LengthChange":true,
   "oLanguage":{"sEmptyTable":"Data Is Not Available Yet!"},
 
 });
 });


      
     


/////////////////////////// End Custom Table Content ///////////////////////////
       
        $.ajax({

     url  : "<?php echo base_url('MIS/Developement/customload'); ?>",
     method: "GET",
     data: {"c_date":c_date,"e_date":e_date},
     success: function (data) {
        
        var data1=JSON.parse(data);
        let datesget = [];
        for(let i=0;i<data1.RDate.length;i++){
           datesget.push(data1.RDate[i].Datee)
        }
        //let datesget = data1.RDate;
        let ballsData = [];
        data1.NoOfBalls.forEach(element => {
          ballsData.push(parseInt(element.NoOfBalls));
        });

        var seriesGet = generateData(data1, ballsData);
         

       var appendDevTodayActivities='';

       appendDevTodayActivities+=`<div class="clearfix">
                 <i class="fa fa-cogs bg-flat-color-5 p-3 font-2xl mr-3 float-left text-light"></i>
                 <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevTodayActivities']}</div>
                 <div class="text-muted text-uppercase font-weight-bold font-xs small">Total Activities</div>
             </div>`

var apppendDevIP='';
apppendDevIP+=`
             <div class="clearfix">
                 <i class="fa fa-laptop bg-info p-3 font-2xl mr-3 float-left text-light"></i>
                 <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevIP'][0].Counter}</div>
                 <div class="text-muted text-uppercase font-weight-bold font-xs small">In Process Activities</div>
             </div>`


             var apppendDevComplete='';
             apppendDevComplete+=`
             <div class="card-body">
             <div class="clearfix">
                 <i class="fa fa-moon-o bg-warning p-3 font-2xl mr-3 float-left text-light"></i>
                 <div class="h5 text-secondary mb-0 mt-1 count">${data1['DevComplete'][0].Counter}</div>
                 <div class="text-muted text-uppercase font-weight-bold font-xs small">Complete Activities</div>
             </div>
         </div>`



var appendActivities='';
data1['Activities'].forEach((item, index)=>{

appendActivities+=`
      
         
                      <li>
                             <div class="text-muted">${item.ArtCode?item.ArtCode:Nothing}</div>
                           
                             <strong>${item.Name?item.Name:0} </strong>
                             <div class="progress progress-xs mt-2" style="height: 5px;">
                        
                                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                              
                                   </div> 
                                   </li>`

})

var appendDevType='';
appendDevType+=`
<li>
                             <div class="text-muted">${data1['DevType'][0]?data1['DevType'][0].Type:'Nothing'}</div>
                             <strong>${data1['DevType'][0]?data1['DevType'][0].Counter:0} Activitie </strong>
                             <div class="progress progress-xs mt-2" style="height: 5px;">
                            
                                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                             
                                   </div>
                         </li>
                         `

                         var appendFactoryWise='';
                         appendFactoryWise+=`<div class="stat-text">${data1['FactoryWise'][0]?data1['FactoryWise'][0].VendorName:'Nothing'}></div>
                             <div class="stat-digit count">${data1['FactoryWise'][0]?data1['FactoryWise'][0].Counter:0}</div>`
                         
             $("#DevTodayActivities").html(appendDevTodayActivities);
             $("#DevIP").html(apppendDevIP);
             $("#DevComplete").html(apppendDevComplete);
             $("#Activities").html(appendActivities);
             $("#DevType").html(appendDevType);
             $("#FactoryWise").html(appendFactoryWise);
             

       
             Highcharts.chart('customGraph', {

chart: {
type: 'column'
},

title: {
text: 'Article Wise Activities'
},

xAxis: {
categories: datesget,
},

yAxis: {
allowDecimals: false,
min: 0,
title: {
 text: 'Number of Balls'
}
},

//   tooltip: {
//     formatter: function () {
//       return '<b>' + this.x + '</b><br/>' +
//         this.series.name + ': ' + this.y + '<br/>' +
//         'Total: ' + this.point.stackTotal;
//     }
//   },

plotOptions: {
column: {
 stacking: 'normal'
}
},

series: seriesGet


});
var chartGetting = $("#customGraph").highcharts();
chartGetting.updateFromData();



     }
        })

        $.ajax({

     url  : "<?php echo base_url('/MIS/Lab/custompie'); ?>",
     method: "GET",
     data: {"c_date":c_date,"e_date":e_date },
     success: function (data) {
       
   


     }
    })

      $.ajax({

     url  : "<?php echo base_url('/MIS/Lab/customtableArticleCode'); ?>",
     method: "GET",
     data: {"c_date":c_date,"e_date":e_date, "type":Typevalue },
     success: function (data) {
         var data1=JSON.parse(data);
         var appenTable='';
       
  
data1.forEach((item, index)=>{


appenTable+=` <tr>
             <td>${item.TestNO}</td>
             <td>${item.Date}</td>
             <td>${item.Size}</td>
             <td>${item.PO}</td>
             <td>${item.Receiving_Date}</td>
             <td>${item.Supplier_Name}</td>
              <td>${item.Supplier_Ref}</td>
             <td>${item.Quantity_Carton}</td>
             <td>${item.Entrydate}</td>
             <td>${item.Result}</td>
         </tr>`;
})
       
         $("#appendTable").html(appenTable);
     }
      })



}

       
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
            <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            <script>
                $(document).ready(function() {
                
    $('.js-example-basic-single').select2();
});
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
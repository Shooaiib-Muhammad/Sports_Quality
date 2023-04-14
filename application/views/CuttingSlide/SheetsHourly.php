<?php
$M= date('i');
 $H=date('H');


// if ($M==30 or $M==00 or $H==8) {
// redirect('Line1/Pic1');
//  }else{
$data_point = array();
foreach ($data_points as $key) {
    $point = array("label" => $key['HourName'] , "y" =>  $key['Pass']);    
    array_push($data_point, $point);     
} ?> 
<!DOCTYPE HTML>
<html>
<style>
    body, html {
    height: 100%;
}
</style><title>Sheets Hourly</title>
<head>
<script>
window.onload = function() {

    // setTimeout(function(){window.location = 'Cutting_Slide/SheetSizing/BallsSlide';}, 10000)
    setTimeout(function(){window.location = '<?php echo base_url('Cutting_Slide/SheetSizing/BallsHourly'); ?>';}, 10000)
    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light4",
      //  exportEnabled: true,
        title:{
            // text: "<?php Echo $LineName;?> OutPut"
            text: "Sheets Hourly"

        },
        axisY: {
            title: "Sheets Hourly"
        },
        data: [{
            type: "column",
            indexLabel: "{y}",
            yValueFormatString: "",
            color: "#ffd633",
            dataPoints: <?php echo json_encode($data_point, JSON_NUMERIC_CHECK); ?>
        }]
    });
    chart.render();
    }
</script>
</head>
<body> 
<div id="chartContainer" style="height: 100%; width: 100%;"></div>
<script src="<?php echo base_url(); ?>assets/Css/Testcode.js"></script>
</body>
</html>
<?php //} ?>
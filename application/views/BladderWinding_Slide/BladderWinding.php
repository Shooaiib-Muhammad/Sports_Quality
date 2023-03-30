
<!DOCTYPE HTML>
<html>
<style>
    body, html {
    height: 100%;
}
</style>
<head>
<?php
$M= date('i');
 $H=date('H');

//  $point1 = array($key['Counter']*6,);
//  $point2 = array($key['Name'],);
// if ($M==30 or $M==00 or $H==8) {
// redirect('Line1/Pic1');
//  }else{
$data_point = array();
foreach ($Stationwise as $key) {
    $point = array("label" => $key['Name'] , "y" =>  $key['Counter']*6);    
    array_push($data_point, $point);     
} ?> 
<script>
window.onload = function () {
    setTimeout(function(){window.location = 'BW';}, 10000)
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "Bladder Winding"
	},
	axisY: {
		title: "Winding Production"
		//suffix: "%"
	},
	axisX: {
		title: "Machine Wise Production"
	},
	data: [{
		type: "column",
        indexLabel: "{y}",
         indexLabelPlacement: "outside",  
         indexLabelOrientation: "horizontal",
		yValueFormatString: "#",
		dataPoints:<?php echo json_encode($data_point, JSON_NUMERIC_CHECK); ?>
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

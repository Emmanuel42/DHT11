<!DOCTYPE html>
<html>
<head>
	<title>DHT11</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>

	<h1>Température</h1>


<?php 

$filename = "data.txt"; 
$data_json = file_get_contents($filename) ; 
$data = json_decode($data_json) ;

$bargraph_height = 161 + $data->temperature*4;
$bargraph_top = 315 - $data->temperature*4;

?>

Il fait <?php echo $data->temperature ; ?>°C avec <?php echo $data->humidite ; ?>% d'humidité.</br>

<div id="thermometer"> <div id="bargraph" style="height: <?php echo $bargraph_height;?>px; top: <?php echo $bargraph_top; ?>px;"></div></div>


</br>



</body>
</html>



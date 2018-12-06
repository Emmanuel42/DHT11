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

//echo "$filename a été modifié pour la dernière fois le : ".date("F d Y à H:i:s.", filectime($filename));

//met l'heure locale (fr)
setlocale(LC_TIME, "fr_FR");

?>

Il fait <?php echo $data->temperature ; ?>°C avec <?php echo $data->humidite ; ?>% d'humidité.<br>

<!-- Date de dernière modification du fichier -->
Le fichier <?php echo"$filename"; ?> a été modifié pour la dernière fois le : <?php echo date("d/m/Y à H:i:s.", filemtime($filename))."<br>"; ?>

<!-- Ajout de la date du jour et de l'heure (fr) -->
Nous sommes le <?php echo strftime("%d/%m/%Y"); ?>, il est : <?php echo strftime("%Hh %Mm %Ss"); ?>


<div id="thermometer"> <div id="bargraph" style="height: <?php echo $bargraph_height;?>px; top: <?php echo $bargraph_top; ?>px;"></div></div>


</br>



</body>
</html>



<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */

session_start();
$ID=$_SESSION['ID'];
require '../divsys/umcdssictrl.php';

$Puntaje=$_POST['PUNTAJE'];


#Realizar votación
	$setVotacion="INSERT INTO votacionesumc (ID, PUNT) VALUES ('$ID', '$Puntaje')";
	$doSV=mysqli_query($link, $setVotacion);
	if (!$doSV){die("<img src='apps/NO.png' height='42' width='42'><br>	No se pudo registrar tu voto. Intenta de nuevo más tarde.");}
	echo "<img src='apps/OK.png' height='42' width='42'><br>Se ha registrado tu voto exitosamente, gracias por participar.";


?>
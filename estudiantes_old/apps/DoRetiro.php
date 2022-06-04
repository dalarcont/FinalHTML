<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
session_start();

require '../divsys/umcdssictrl.php';

#Retiro del estudiante

$ID=$_SESSION['ID'];
$PROGC=$_SESSION['PROGC'];
$NAME=$_SESSION['NAME'];

#Desactivar ingreso a plataforma

	$RmUser="DELETE FROM platformusers WHERE ID='$ID' AND PROGC='$PROGC'";
	$doRm=mysqli_query($link, $RmUser);

#Desactivar estudiante en akadata y en gendata
	
	$Disable="UPDATE gendata, akadata SET STATE='0' WHERE ID='$ID' AND PROGC='$PROGC'";
	$goDisable=mysqli_query($link, $Disable);

#Registrar impedimento de PIN

	$NoPIN="INSERT INTO app1ins (PIN, ID, NOM, TYPE, STATE) VALUES  ('0', '$ID', '0', '0', '1')";
	$doNoPIN=mysqli_query($link, $NoPIN);

#Añadir a base de datos de cancelados

	$AddCancelado="INSERT INTO cancelados (ID, PROGC) VALUES ('$ID', '$PROGC')";
	$doAdd=mysqli_query($link, $AddCancelado);



	echo "<br><br><big><b> Gracias $NAME por participar. </b></big>";
	#echo "<p><i> En unos momentos serás expulsado de la plataforma </i></p>";
	echo "<script type='text/javascript'> function ExpulsionUMC() {  window.location = 'index.php'; } setTimeout('ExpulsionUMC()', 9000); </script>";
?>
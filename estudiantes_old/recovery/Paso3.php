<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
session_start();
$ID=$_SESSION['ID'];


$Respuesta=$_POST['Respuesta'];
$Answer=$Respuesta;

require '../divsys/umcdssictrl.php';


#Validar respuesta
	$ValidarRespuesta="SELECT * FROM platformusers WHERE ID='$ID'";
	$doVR=mysqli_query($link, $ValidarRespuesta);
	$rowVR=mysqli_fetch_array($doVR);
	$UserRecovery=$rowVR['PASSRQ'];
		if ($UserRecovery==$Answer) {
			#Respuesta a pregunta de seguridad correcto
				#Eliminar la contraseña actual y se le indica al usuario que se conecte nuevamente para crear nueva contraseña
				$RmPassword="UPDATE platformusers SET PASS='' WHERE ID='$ID'";				
				$doRmP=mysqli_query($link, $RmPassword);
				#Confirmamos remoción de contraseña
				$ValidarRespuesta="SELECT * FROM platformusers WHERE ID='$ID'";
				$doVR=mysqli_query($link, $ValidarRespuesta);
				$rowVR=mysqli_fetch_array($doVR);
				if ($rowVR['PASS']=='') {
					#Contraseña removida
					echo "<p><b> Tu contraseña ha sido removida. <br> Por favor inicia sesión de nuevo como si fueras primíparo. </b></p>";
					echo "<img src='apps/OK.png' height='42' width='42'><script language='javascript'>function unLoginGotoLogin() {window.location='index.php';} setTimeout('unLoginGotoLogin()', 3500); </script>";
				}
				else
				{
					echo "<p>Error en remoción de contraseña, intenta de nuevo más tarde, de lo contrario, reporta el incidente a la DSSI <script language='javascript'>function unLoginGotoLogin() {window.location='index.php';} setTimeout('unLoginGotoLogin()', 2500); </script>";
				}
		}
		else
		{
			echo "<img src='apps/NO.png' height='42' width='42'><br> La respuesta no coincide con la que indicaste al primer ingreso. <script language='javascript'>function unLoginGotoLogin() {window.location='index.php';} setTimeout('unLoginGotoLogin()', 2500); </script>";
		}

?>
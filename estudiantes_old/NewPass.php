<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
session_start();
require 'divsys/umcdssictrl.php';

session_start();
$ID=$_SESSION['ID'];
$FIRSTPASS=$_SESSION['PASS'];
$PASS1=$_POST['PASS1'];#Contraseña
$PASS2=$_POST['PASS2'];#Confirmación de contraseña
$PASS3=$_POST['PASS3'];#Pregunta de seguridad
$PASS4=$_POST['PASS4'];#Respuesta a pregunta de seguridad


if ($PASS1==$PASS2) {
	
	#Registrar nueva contraseña
	$chkPass="SELECT * FROM platformusers WHERE ID='$ID' AND FIRSTPASS='$FIRSTPASS'";
	$doPass=mysqli_query($link, $chkPass);
	$row=mysqli_fetch_array($doPass);
	
	if ($row['PASS']=='') {
		#La contraseña no se ha creado
		$setPass="UPDATE platformusers SET PASS='$PASS1', RECQUEST='$PASS3', PASSRQ='$PASS4' WHERE ID='$ID' AND FIRSTPASS='$FIRSTPASS'";
		$doset=mysqli_query($link, $setPass);

		$ChkPass="SELECT * FROM platformusers WHERE ID='$ID' AND PASS='$PASS1'";
		$doChkPass=mysqli_query($link, $ChkPass);
		$rowPass=mysqli_fetch_array($doChkPass); 
		if ($rowPass['PASS']==$PASS1) {
			# Contraseña correctamente registrada
			echo "<big><p> Se ha registrado tu contraseña: <b>"; echo $rowPass['PASS']; echo "</b></p><br></big>";
			echo "Si se te olvida, estás perdido...";
			echo "<br><br><p> Serás redirigido al acceso al portal nuevamente para que uses tu contraseña. </p>";
			session_unset();
		    session_destroy();
		    echo "<script language='javascript'>function unLoginGotoLogin() {  window.location = 'index.php'; } setTimeout('unLoginGotoLogin()', 4000);  </script>";
		}
		else
		{
			echo "Error en el registro de contraseña";
		}
		
	}
	else
	{
		session_unset();
		    session_destroy();
		    echo "<script language='javascript'>function unLoginGotoLogin() {  window.location = 'index.php'; } setTimeout('unLoginGotoLogin()', 1000);  alert('La contraseña ya fue registrada anteriormente... Se detiene este proceso. '); </script>";
	}
}
else 
{

	
	echo "<script language='javascript'>function unLoginGotoLogin() {  window.location = 'index.php'; } setTimeout('unLoginGotoLogin()');  alert('Las contraseñas no coinciden, deberás empezar de nuevo. '); </script>";
}
?>
<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
session_start();
$ID=$_SESSION['ID'];
$IDUM=$_SESSION['IDUM'];
$PASSSOURCE=$_POST['PASSSOURCE'];
$PASS1=$_POST['PASS1'];
$PASS2=$_POST['PASS2'];
$PASS3=$_POST['PASS3'];
$PASS4=$_POST['PASS4'];


require '../../divsys/umcdssictrl.php';

#Realizamos el cambio de contraseña 
$UpdPassword="UPDATE platformusers SET PASS='$PASS2', RECQUEST='$PASS3', PASSRQ='$PASS4' WHERE PASS='$PASSSOURCE' AND ID='$ID'";
$doUpdate=mysqli_query($link, $UpdPassword);
if (!$doUpdate){die("<img src='apps/NO.png' height='42' width='42'><br>	No se pudo realizar el cambio de contraseña. Intenta de nuevo más tarde.");}
		#El código mencionado aquí abajo es qué hacer cuando la función no muere
echo "<img src='apps/OK.png' height='42' width='42'><br> Se realizó correctamente el cambio de contraseña. Para veracidad de los hechos, deberás ingresar de nuevo a la plataforma.";
echo "<script language='javascript'>function unLoginGotoLogin() {  window.location = 'index.php'; } setTimeout('unLoginGotoLogin()', 5500); </script>";


?>
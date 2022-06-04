<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
session_start();
$ID=$_SESSION['ID'];
$PASS=$_SESSION['PASS'];

if ($ID=='' AND $PASS=='') {
    session_unset();
    session_destroy();
    echo "<script language='javascript'>function unLoginGotoLogin() {  window.location = 'index.php'; } setTimeout('unLoginGotoLogin()', 0000); alert('No se ha identificado correctamente...'); </script>";
    
    #Se rompe la sesión debido a que el estudiante no está identificado
}
else
{   
	#Mantener la sesión y permitir acceso al estudiante por su correcta identificación
	header("Content-Type: text/html;charset=utf-8");
    require 'portal_content.php';

}

?>
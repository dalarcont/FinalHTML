<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
require 'divsys/umcdssictrl.php';
#Login de plataforma estudiantil

$ID=$_POST['ID'];
$PASS=$_POST['PASS'];


#Consultar por contraseña
$byPass="SELECT * FROM platformusers WHERE ID='$ID' AND PASS='$PASS'";
$doPass=mysqli_query($link, $byPass);
$rowPass=mysqli_fetch_array($doPass);

#Consultar por ID
$byID="SELECT * FROM platformusers WHERE ID='$ID' AND FIRSTPASS='$PASS'";
$doID=mysqli_query($link, $byID);
$rowID=mysqli_fetch_array($doID);


if ($pe_access==0) {
	echo "
        <div style='background-color: red;'><center><p style='color: white;'><b> Actualmente, la universidad tiene inhabilitado el accesso a la plataforma</b></p></center></div><br>";
}
else
{
	if ($rowPass['ID']==$ID AND $rowPass['PASS']==$PASS) 
            {
                #Existe usuario y contraseña correctos se inicia sesión
                    session_start();
                    $_SESSION['ID']=$ID;
                    $_SESSION['PASS']=$PASS;
                    echo "<b style='color:red;'>Verificando datos...</b>";
                echo "<script language='javascript'>function GoToPortal() {  window.location = 'Portal.php'; } setTimeout('GoToPortal()', 1900); </script>";
            }
    else
    {
        if ($rowID['ID']==$ID AND $rowID['FIRSTPASS']==$PASS) {
            
            if ($rowID['PASS']=='') {
                #Es primer ingreso
            session_start();
                    $_SESSION['ID']=$ID;
                    $_SESSION['PASS']=$PASS;
                    echo "<fieldset><b style='color:red;'>Verificando datos... Ohh, eres primíparo!</b></fieldset>";
            echo "<script language='javascript'>function GoMakeNewPassword() {  window.location = 'PrimerIngreso.php'; } setTimeout('GoMakeNewPassword()', 2100); </script>";
            }            
            else
            {
                echo "
                <div style='background-color: #ff6600;'><center><p style='color: white;'><b> ¡DATOS INCORRECTOS! <br></b> Contraseña incorrecta. </p></center><p></div><br>";
            }
        }
            

    else

        {echo "
                <div style='background-color: #ff6600;'><center><p style='color: white;'><b> ¡DATOS INCORRECTOS! <br></b> Identificación y/o contraseña incorrectos. </p></center><p></div><br>";
            }
    } 
}


?>
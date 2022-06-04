<?php 
/* Universidad Falsa - División Superior de Sistemas Informáticos */
session_start();

$PROGC=$_SESSION['PROGC'];
$ID=$_SESSION['ID'];
require '../../divsys/DatosProgramas.php';
//echo "<script>window.close();</script>";

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><!-- Universidad Falsa - División Superior de Sistemas Informáticos -->
<head>
    <meta charset="utf-8">
    <title>Plan de estudios del estudiante</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <link rel='stylesheet' href='css/alertify.css' />
 
<link rel='stylesheet' href='css/themes/bootstrap.css' />
 
<script src='alertify.js'></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>

<!-- Script para submit -->
        <script type="text/javascript">
        $('document').ready(function()
        {
        $('#Asignaturas').ajaxForm( {
        target: '#MostrarDatosMateria',
        success: function() {
        $('#PlanDeEstudios');
        }
        });
        });
        </script>

<meta name="description" content="Página principal de la Universidad Falsa">


</head>
<!-- Desactivar la actualización automática de la página -->
<body> <!-- body onload="setInterval('window.location.reload()',300000)" -->
<div id="art-main">
<header class="art-header">

    <div class="art-shapes">
        <div class="art-object1542056463"></div>
        <div style="position:absolute;left:250px;top:65px;width:210px;height:80px;"><button onclick="window.close()">Cerrar ventana</button></div>

            </div>

<h1 class="art-headline">
    <a href="/">Universidad Falsa</a>
</h1>

<?php
if (empty($ID)) {
    #No hay identificación de estudiante por lo tanto se detiene el proceso
    echo "<script>
        alertify.alert('Plan de estudios', 'No estás identificado correctamente, ingresa de nuevo al portal estudiantil.', function(){ alertify.success('Limpiando datos');location.href='../../index.php'; });
        </script>";

}


?>



        <!-- overflow: auto;-->                
                    
</header>

                    <div><center><p> <?php echo $NombrePlanEstudios; ?></p></center></div>
<center>
<!-- FIN FORM-MATERIAS-DATA -->
<div id="PlanDeEstudios" style="height: 350px; width: auto; border: solid black; overflow: scroll;">


    <?php 
    require '../../divsys/umcdssictrl.php';

    if ($pe_materias=='1') {
        #Permitido ver el plan de estudios
        if(empty($PROGC)){
                    echo "<script>
        alertify.alert('Plan de estudios', 'No estás matriculado en ningún programa de la Universidad. <br /> Deberás iniciar sesión de nuevo.', function(){ alertify.success('Limpiando datos');location.href='../../index.php'; });
        </script>";}
                    
        #Llamar el contenido del plan de estudios
        require 'PlanEstudios/Contenidos/'.$PROGC.'.php';
                    

        
    }
    else
    {
        #No se permite el ajuste de matrícula por directiva
        echo "
        alertify.alert('Plan de estudios', 'Este aplicativo está fuera de servicio.', function(){ alertify.success('Limpiando datos');window.close(); });
        </script>";
    }
    ?>
</div>
<!-- PLAN DE ESTUDIOS -->
<div id="MostrarDatosMateria" >
    <center><h3> Haz clic en la asignatura de la cual deseas obtener datos. </h3></center>
</div>
    <!-- FIN -->

<!-- FIN PLAN DE ESTUDIOS -->

<!-- FIN -->

<!-- SALTOS DE LÍNEA -->
<!-- Ya que el footer se esá superponiendo al módulo de información de asignatura -->
<footer class="art-footer">
<!--
  <div class="art-footer-inner">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%">
        <p style="text-align: center;"><span style="font-family: 'Trebuchet MS';">Universidad Falsa</span></p><p style="text-align: center;"><span style="font-family: 'Trebuchet MS';">División Superior de Sistemas Informáticos</span></p><p style="text-align: center;"><span style="font-family: 'Trebuchet MS';">Falsos derechos reservados</span></p><p style="text-align: center;"><span style="font-family: 'Trebuchet MS';">2016</span></p>
    </div>
    </div>
</div>

  </div>
  -->
</footer>
</div>


</body></html>
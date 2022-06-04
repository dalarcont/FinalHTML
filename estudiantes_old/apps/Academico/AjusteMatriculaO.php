<?php 
/* Universidad Falsa - División Superior de Sistemas Informáticos */
session_start();

$PROGC=$_SESSION['PROGC'];
$ID=$_SESSION['ID'];
require '../../divsys/DatosProgramas.php';
//echo "<script>window.close();</script>";
$LetOptativa=$_SESSION['LetOptativa'];
if ($LetOptativa=='N') {
    #Desde raíz de matrícula se impide visualizar este aplicativo
    //echo "<script>window.close();</script>";
    exit("<body style='background-color:gray'>
        <meta charset='utf-8'> <center>
        <p>
            <b>Universidad Falsa <br> División Superior de Sistemas Informáticos <br>
            División Superior Registro y Control <br><br><br>
            <i>Aplicativo de ajustes de matrícula optativa</i><br>
            El servidor detecta que está usted intentando alteraciones a las tecnologías de información de la universidad.<br>
            Esto es una incidencia en una operación no permitida y considerada fraude por las directivas y el reglamento estudiantil.<br>
            Proceda a salir inmediatamente de esta ventana antes de que se realice el reporte. <br> Reporte el cual es consecuente con la CANCELACIÓN de matrícula e INHABILIDAD PERMANENTE de servicios ofertador por la Universidad para usted. <br><br><br>
            Que arda troya.</b></p></center>");
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Universidad Falsa - División Superior de Sistemas Informáticos -->
    <meta charset="utf-8">
    <title>Ajuste de matrícula optativa del estudiante</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel='stylesheet' href='css/alertify.css' />
 
<link rel='stylesheet' href='css/themes/bootstrap.css' />
 
<script src='alertify.js'></script>

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    
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
<body>
<div id="art-main">
<header class="art-header">

    <div class="art-shapes">
        <div class="art-object1542056463"></div>
        <div style="position:absolute;left:250px;top:65px;width:210px;height:80px;"><button onclick="window.close()">Cerrar ventana</button></div>

            </div>

<h1 class="art-headline">
    <a>Universidad Falsa</a>
</h1>
<?php
if (empty($ID)) {
    #No hay identificación de estudiante por lo tanto se detiene el proceso
    echo "<script>
        alertify.alert('Ajustes de matrícula optativa', 'No estás identificado correctamente, ingresa de nuevo al portal estudiantil.', function(){ alertify.success('Limpiando datos');location.href='../../index.php'; });
        </script>";

}


?>




        <!-- overflow: auto;-->                
                    
</header>

<center>
<!-- FIN FORM-MATERIAS-DATA -->
<div id="PlanDeEstudios" style="height: 350px; width: auto; border: solid black; overflow: scroll;">
<?php 
    require '../../divsys/umcdssictrl.php';
    if ($pe_mat_opta=='1') {
        #Permitir ajuste de matrícula
        switch ($PROGC) {
            case 'ORTGRA':
            case 'DIGSEN':
            case 'MISERA':
            case 'SOCWEB':
            case 'GESBIX':
                #Mostrar optativas Míseras, Básicas y Tecnologías
                require 'AjusteMatriculaO/Contenidos/PlanFacMBT.php';
            break;
            case 'DIGHUM':
            case 'IDEPER':
            case 'FINFPA':
            case 'GESHET':
            case 'GESHOM':
            case 'DIGHUM2':
            case 'IDEPER2':
            case 'FINFPA2':
            case 'GESHET2':
            case 'GESHOM2':
                #Mostrar optativas Míseras, Tecnologías e Ingenierías
                require 'AjusteMatriculaO/Contenidos/PlanFacMTI.php';
            break;
            case 'YOUTUB':
            case 'FINANC':
            case 'SEXUAL':
            case 'FRACAS':
            case 'PRESID':
            case 'DESPER':
            case 'GLAMUR':
            case 'YOUTUB2':
            case 'FINANC2':
            case 'SEXUAL2':
            case 'FRACAS2':
            case 'PRESID2':
            case 'DESPER2':
            case 'GLAMUR2':
                #Mostrar optativas Míseras, Tecnologías e Ingenierías
                require 'AjusteMatriculaO/Contenidos/PlanFacMTI.php';
            break;
            case 'SEXAPI':
            case 'FIPMIT':
            case 'ENAMAT':
            case 'IDIOAV':
                #Mostrar optativas Básicas, Tecnologías, Ingenierías y Superior
                require 'AjusteMatriculaO/Contenidos/PlanFacBTIS.php';

            break;
            
          default:
            echo "<script>
        alertify.alert('Ajustes de matrícula optativa', 'Tu programa no tiene habilidad para matrícula optativa. <br /> Deberás iniciar sesión de nuevo.', function(){ alertify.success('Limpiando datos');location.href='../../index.php'; });
        </script>";
            break;
        } 
    }
    else
    {
        echo "<script>
        alertify.alert('Ajustes de matrícula optativa', 'Este aplicativo está fuera de servicio.', function(){ alertify.success('Limpiando datos');location.href='../../index.php'; });
        </script>";
    }

    ?>
</div>
<!-- PLAN DE ESTUDIOS -->
<p><br></p>
<div id="MostrarDatosMateria" style="width: auto;">
    <center><h3> Haz clic en la asignatura de la cual deseas obtener datos antes de proceder a realizar ajustes. </h3></center>
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
<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
session_start();

$PROGC=$_SESSION['PROGC'];
$ID=$_SESSION['ID'];
require '../../divsys/umcdssictrl.php';
$_SESSION['APPTYPE']="PE";
$ProgramaCargar=$_SESSION['Programa_PdeE'];
$PROGC=$ProgramaCargar;

require '../../divsys/DatosProgramas.php';

//Para mostrar la nota final del estudiante con un decimal
function MostrarFlotante($Numero){
    $Mostrar = sprintf('%0.1f', $Numero);
    return $Mostrar;
}


?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Universidad Falsa - División Superior de Sistemas Informáticos -->
    <meta charset="utf-8">
    <title>Proceso académico</title>
<meta  name="viewport" content="width=1024" />
<!--<meta http-equiv="refresh" content="60">-->
<!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link rel="stylesheet" href="style.css" media="screen">

<style type="text/css">
.buttonAdd
{
    /* your styles here, You can just increase its font size below*/
    font-size: 10px;
    font-weight: bold;
    font-family: Arial;
    background-color: #ffedca;
}
</style>

    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
<link rel='stylesheet' href='css/alertify.css' />
<link rel='stylesheet' href='css/themes/bootstrap.css' />
<div id="ResultadoAjuste" style="display:none;"></div>
<script src='alertify.js'></script>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<script src="validarFormularios.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>

<!-- Script para submit -->
<script type="text/javascript">
    $('document').ready(function()
    {
        $('#ModificarAsignatura').ajaxForm( {
            target: '#ResultadoAjuste',
            success: function() {
            $('#contenedorPde');
        }
        });
    });
</script>
<script type="text/javascript">
    function drawAsignatura(CodL,CodN,Name){
    $('#ContenedorEquivalencias').before('<span>&nbsp;<button class=btnAsgMatric onclick=CargarAsignatura'+codN+'()><b>'+CodL+'</b><br>'+Name+'</button></span>');
}
</script>
<script type="text/javascript">
        $(document).ready(function($){
            //Leer la altura de la ventana
                var ventana_alto = $(window).height();
                var ventana_ancho = $(window).width();
                var EquivPosition = ventana_ancho - 145;
                //184 ModInfo
                //23 ModHeader
                var FinalHeight = ventana_alto - 207;
                var FinalHeightEquiv = ventana_alto - 207;
            //Establecer nuevo height
                $("#ContenedorPlan").height(FinalHeight);
                $("#ContenedorPlan").width(EquivPosition);
            //ContenedorAsignaturasMatriculadas
                //tamaño de 250px
                $("#ContenedorEquivalencias").height(FinalHeightEquiv);
                $("#ContenedorEquivalencias").css({'left' : EquivPosition + 'px', top: 22, position: 'absolute'});
                $("#ContenedorEquivalenciasTitulo").css({'left' : EquivPosition + 'px', top: 19, position: 'absolute'});
        });

        $(document).ready(function($){
            var ventana_ancho = $(window).width();
            //405 Is the size of BoxAsignatura && BtnActionAsignatura
            var FinalWidth = ventana_ancho - 455;
            var EquivWidth = FinalWidth - 50;
            //Establecer Width nuevo en los campos de información
            $("#ModInfoAsignaturaNombre").width(FinalWidth);
            $("#ModInfoAsignaturaEstado").width(FinalWidth);
            $("#ModInfoAsignaturaDetalle").width(FinalWidth);
        });
</script>

<meta name="description" content="Proceso de matrícula académica del estudiante Universidad Falsa">

</head>

<script language="JavaScript" type="text/javascript">
function muestraGranDiv(){
document.getElementById('granDiv').style.visibility = "visible";
document.getElementById('cargando').style.visibility = "hidden";
}
</script>

<body id="body" onload="muestraGranDiv()">
<div id="art-main">
<div id="cargando" style="width: 100%; height: 500px; position: absolute; padding-top:20px; text-align:center">
    <span class="fontloadingcont">
        <h3>Programa de visualización del plan de estudios de tu programa <br>Te permite ver tu progreso académico respecto a las asignaturas de tu programa.<br> Por favor espera mientras el sistema carga los datos... <br>Se paciente...</h3>
    </span>
</div>
<!-- Estilo para respetar el contendor de información de asignaturas -->
<div id="granDiv" style="visibility:hidden;">
    <?php
        if (empty($ID)) {
            #No hay identificación de estudiante por lo tanto se detiene el proceso
            echo "<script>alertify.alert('Proceso académico', 'No estás identificado correctamente, ingresa de nuevo al portal estudiantil.', function(){ alertify.success('Limpiando datos');location.href='../../index.php'; });</script>";}
    ?>

    <div style="background: blue; color: white;"><big>Universidad Falsa - Proceso académico</big> --- Periodo: <?php echo $NombrePlanEstudios; ?>&nbsp;&nbsp;&nbsp;<button onclick="window.close()">Cerrar ventana</button></div>

    <div id="ContenedorPlan" style="height:10px; width:auto; border:thin solid silver; overflow:auto;">
    <?php
    //Leer si el programa tiene permisos para cancelar asignaturas
    if($PermisoCancelar!=NULL){
        if ($pe_materias=='1') {
        #Permitido ver el semáforo
            if(empty($PROGC)){
                echo "<script>
                alertify.alert('Proceso académico', 'No estás matriculado en ningún programa de la Universidad. <br /> Deberás iniciar sesión de nuevo.', function(){ alertify.success('Limpiando datos');location.href='../../index.php'; });
                </script>";
            }
            else
            {
                #Llamar el contenido del plan de estudios
                echo '<input type="hidden" name="estDat" id="estDat" value="',$ID,'">';
                require 'PlanesProgramas/'.$PROGC.'.php';
            }
        }
        else
        {
            #No se permite el ajuste de matrícula por directiva
            echo "<script>
            alertify.alert('Proceso académico', 'Este aplicativo está fuera de servicio.', function(){ alertify.success('Limpiando datos');window.close(); });
            </script>";
        }
    }
    else
    {
    #No se permite el ajuste de matrícula por directiva de la Facultad
        echo "<script>alertify.alert('Proceso de matrícula', 'Actualmente tu programa no permite realizar ajustes a la matrícula.', function(){ alertify.success('Limpiando datos');window.close(); });</script>";
    }
    ?>
    </div>


<!-- CONTENEDOR DE EQUIVALENCIAS -->
    <div id="ContenedorEquivalencias" style="width:145px;border:thin solid silver; overflow:auto;">
        <!-- <span style="width:145px;background-color: #BDBDBD"><b>EQUIVALENCIAS</b></span> -->

    <center>

        <!-- <div>cargarEquivalencias(Asignatura_root);</div> -->
    </center>
    </div>
     <div id="ContenedorEquivalenciasTitulo" style="width:145px; background-color: #BDBDBD; color: #000000"><center><b>EQUIVALENCIAS</b></center></div>
<!-- CONTENEDOR DE EQUIVALENCIAS -->


    <style type="text/css">
        .btnAsgMatric{
            width:130px;height:45px;overflow:hidden;border:thin solid black;font-family: Arial;font-size: 11px;background-color:#FFFF00;text-align:center;
        }

        .btnAsgEquiv{
            width:115px;height:35px;overflow:hidden;border:thin solid black;font-family: Arial;font-size: 11px;background-color:#BDBDBD;color:#000000;text-align:center;
        }

        .MIBC1{
            position:absolute;left:10px;top:30px;width:210px;height:80px;clip:rect(0,215px,100px,0);background-color:;overflow:hidden;
        }
        .MIBC2{
            position:absolute;overflow:hidden;left:30px;top:40px;width:180px;text-align:center;font-family:Arial;font-size:20px;font-weight:bold;
        }
        .MIBN{
            position:absolute;overflow:hidden;left:25px;top:72px;width:180px;text-align:center;font-family:arial;font-size:12px;font-weight:bold;
        }
    </style>

<div class="art-content-layout" id="ContenedorDatosAsignaturaSeleccionada" style="display:none;">
    <div class="art-content-layout-row responsive-layout-row-2">
        <div class="art-layout-cell" style="width: 25%">
            <!-- Imagen asignatura -->
            <!-- <h3>Imagen asignatura</h3> -->
            <div id="contenedorSeleccion" style="position:absolute; float:left;">
                <div style="font-size: 0px;"></div>
                <div id="ModInfoBoxColor" class="MIBC1"></div>
                <div id="ModInfoBoxCode" class="MIBC2"></div>
                <div id="ModInfoBoxNombre" class="MIBN"></div>
            </div>
        </div>
        <div class="art-layout-cell" style="width: 100%;">
            <!-- Datos asignatura -->
            <!-- <h3>Datos asignatura</h3> -->
            <fieldset style="border:solid silver;border:1px;">
            <table>
                <tbody>
                <tr>
                    <td><b>ASIGNATURA:</b></td>
                    <td colspan="3"><input type="text" id="ModInfoAsignaturaNombre" style="width:auto;" readonly="" value=""></td>
                </tr>
                <tr>
                    <td><b>ESTADO:</b></td>
                    <td colspan="3"><input type="text" id="ModInfoAsignaturaEstado" style="width:auto;" readonly="" value=""></td>
                </tr>
                <tr>
                    <td><b>DETALLE:</b></td>
                    <td colspan="3"><textarea id="ModInfoAsignaturaDetalle" style="width:auto; resize: none;" rows="4" readonly=""></textarea></td>
                </tr>
                </tbody>
            </table>
            </fieldset>
        </div>
    </div>
</div>

</div>

</body></html>

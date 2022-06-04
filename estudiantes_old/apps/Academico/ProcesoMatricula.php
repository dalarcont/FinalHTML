<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
session_start();

$PROGC=$_SESSION['PROGC'];
$ID=$_SESSION['ID'];
require '../../divsys/umcdssictrl.php';
require '../../divsys/DatosProgramas.php';
//echo "<script>window.close();</script>";
$_SESSION['APPTYPE']="MAT";

//Para mostrar la nota final del estudiante con un decimal
function MostrarFlotante($Numero){
    $Mostrar = sprintf('%0.1f', $Numero);
    return $Mostrar;
}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Universidad Falsa - División Superior de Sistemas Informáticos -->
    <meta charset="utf-8">
    <title>Proceso de matrícula académica</title>
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
        <script type="text/javascript">/*
        $('document').ready(function()
        {
        $('#ModificarAsignatura').ajaxForm( {
        target: '#ResultadoAjuste',
        success: function() {
        $('#contenedorPde');
        }
        });
        }); */
        </script>

<script type="text/javascript">
    /*
        $(document).ready(function($){
            //height++(free_area_after(header+ModInfo));
            //Leer la altura de la ventana
                var ventana_alto = $(window).height();
            //184 ModInfo
            //78 ModMatriculadas
            //23 ModHeader
                var FinalHeight = ventana_alto - 285;
            //Establecer nuevo height
                $("#ContenedorPlan").height(FinalHeight);
        });

        $(document).ready(function($){
            var ventana_ancho = $(window).width();
            //405 Is the size of BoxAsignatura && BtnActionAsignatura
            var FinalWidth = ventana_ancho - 455;
            //Establecer Width nuevo en los campos de información
            $("#ModInfoAsignaturaNombre").width(FinalWidth);
            $("#ModInfoAsignaturaEstado").width(FinalWidth);
            $("#ModInfoAsignaturaDetalle").width(FinalWidth);
            //alert(FinalWidth);
        }); */
</script>

<!--<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>-->
<script>
    /*
    function cancelar() {
        alertify.confirm('Operación de ajuste de matrícula', '¿Deseas cancelar la asignatura seleccionada?', function(){ cancelarAsignatura_exe() }, function(){ alertify.error('Cancelación de asignatura: abortada por estudiante.')})
    }
    function cancelarAsignatura_exe() {
        var EstProg = $('#MATCODE').val();

        if (EstProg != '') {
            $.post('Cancelacion.php', {Est_Prog: EstProg}, function(mensaje) {
                $('#ResultadoAjuste').html(mensaje);
                });
                } else {
                $('#ResultadoAjuste').html('');
            };
        }; */
</script>

<script src="UmcDivSys_Aka_PE_MatProc.js">
    ProcesoMatricula_ventana();
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
<!--<header class="art-header">
    <div class="art-shapes">
        <div class="art-object1542056463"></div>
        <div style="position:absolute;left:850px;top:15px;width:auto;height:auto;"><button onclick="window.close()">Cerrar ventana</button></div>
    </div>
    <h1 class="art-headline"><a href="/">Universidad Falsa - PROCESO DE MATRÍCULA</a></h1>
</header> -->
<div id="cargando" style="width: 100%; height: 500px; position: absolute; padding-top:20px; text-align:center">
    <span class="fontloadingcont">
        <h3>Programa de ajuste de matrícula académica de tu programa <br>Te permite realizar matrícula de las asignaturas de tu programa.<br> Por favor espera mientras el sistema carga los datos... <br>Se paciente...</h3>
    </span>
</div>
<!-- Estilo para respetar el contendor de información de asignaturas -->
<div id="granDiv" style="visibility:hidden;">
    <?php
        if (empty($ID)) {
            #No hay identificación de estudiante por lo tanto se detiene el proceso
            echo "<script>alertify.alert('Proceso de matrícula', 'No estás identificado correctamente, ingresa de nuevo al portal estudiantil.', function(){ alertify.success('Limpiando datos');location.href='../../index.php'; });</script>";}
    ?>

    <div style="background: blue; color: white;"><big>Universidad Falsa - Ajuste de matrícula académica</big> --- Periodo:<?php echo $NombrePlanEstudios; ?><button onclick="window.close()">Cerrar ventana</button></div>

    <div id="ContenedorPlan" style="height:10px; width:auto; border:thin solid silver; overflow:auto;">
    <?php
    //Leer si el programa tiene permisos para cancelar asignaturas
    if($PermisoCancelar!=NULL){
        if ($pe_materias=='1') {
        #Permitido ver el semáforo
            if(empty($PROGC)){
                echo "<script>
                alertify.alert('Proceso de matrícula', 'No estás matriculado en ningún programa de la Universidad. <br /> Deberás iniciar sesión de nuevo.', function(){ alertify.success('Limpiando datos');location.href='../../index.php'; });
                </script>";
            }
            else
            {
                #Llamar el contenido del plan de estudios
                require 'PlanesProgramas/'.$PROGC.'.php';
            }
        }
        else
        {
            #No se permite el ajuste de matrícula por directiva
            echo "<script>
            alertify.alert('Proceso de matrícula', 'Este aplicativo está fuera de servicio.', function(){ alertify.success('Limpiando datos');window.close(); });
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

    <style type="text/css">
        .btnAsgMatric{
            width:130px;height:45px;overflow:hidden;border:thin solid black;font-family: Arial;font-size: 11px;background-color:#FFFF00;text-align:center;
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

    <div id="ContenedorMatriculadas" style="height:75px; width:auto; border:thin solid silver; overflow:auto;">
        <center><h3>ASIGNATURAS ACTUALES EN MATRÍCULA ACADÉMICA</h3></center>
        <center>
        <?php
        /*     @dalarcont       */
        /* Módulo de datos de asignaturas actuales matrículadas */
        $LISTAR="SELECT * FROM platformdata WHERE ID='$ID' AND PARAM IN('A') ";
        $OPERAR=mysqli_query($link, $LISTAR);
        if ($row=mysqli_fetch_array($OPERAR)){
            do{
                $MATCODE=$row['MAT'];
                require '../../divsys/Materias.php';
                $MatNameLit=substr($MateriaNombre,0,12);
                echo "<span id='Added",$MATCODE,"'>&nbsp;<button onclick='CargarAsignatura",$MATCODE,"()' class='btnAsgMatric'><b>",$CodigoLiteral,"</b><br>",$MatNameLit,"...</button></span>";
            }//CERRAR Consulta
            while ($row=mysqli_fetch_array($OPERAR));
        }
        else
        {
           // echo '<br><big><i><b> NO HAY ASIGNATURAS MATRICULADAS </b></i></big><br>';
        }
        ?>
        <!-- Asignaturas.Added-; place_to_before(this); -->
        <span id='Added_Init' style='display:none;'></span>
        </center>
    </div>

<div class="art-content-layout" id="ContenedorDatosAsignaturaSeleccionada" style="display:none;">
    <div class="art-content-layout-row responsive-layout-row-3">
        <div class="art-layout-cell" style="width: 25%">
            <!-- Imagen asignatura -->
            <!-- <h3>Imagen asignatura</h3> -->
            <div id="contenedorSeleccion" style="position:absolute;">
                <div style="font-size: 0px;"></div>
                <div id="ModInfoBoxColor" class="MIBC1"></div>
                <div id="ModInfoBoxCode" class="MIBC2"></div>
                <div id="ModInfoBoxNombre" class="MIBN"></div>
            </div>
        </div>
        <div class="art-layout-cell" style="width: 10%">
            <!-- Botones de acción -->
            <!-- <h3>Botones de acción</h3> -->
            <div id="AjusteAsignatura" style="position:relative; top:35px;">
                    <!-- <form name="ModificarAsignatura" id="ModificarAsignatura" action="setAjuste.php" method="POST"> -->
                    <input name="MATCODE" id="MATCODE" value="" type="hidden">
                    <div id="botones"><center>
                        <button id="setAsignatura" onclick="matricular()" class="art-button" name="Orden" value="MATRICULAR">Agregar</button>
                        <!-- <img src="cancelar.png"  onclick="matricular()"> -->
                        <br><br>
                        <button id="unsetAsignatura" onclick="cancelar()" class="art-button" name="Orden" value="CANCELAR">Retirar</button>
                    </center>
                    </div>
                    <!-- </form> -->
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
<?php

/**
  * @desc Funcion para retardar el completado de carga de la página de aplicativo de ajuste de matrícula por lado estudiante
  * Se implementa dado que en algunos navegadores no se presenta anomalías pero en otros sí.
  * Dado que el archivo JS externo que carga los scripts para el sistema de plan de estudios, termina su carga y automáticamente se borra del servidor, el lado cliente no alcanza muchas veces a cargarlo completamente
  * o simplemente no lo carga dejando al usuario a la deriva.
  * Con este comando se provee un tiempo de espera de 3 segundos para que el navegador cliente pueda cargar el archivo JS en su computadora dado que al ser borrado del servidor no habrá forma de cargarlo sin requerir una recarga de la página.
  * @author danielAlarcon @dalarcont
*/
sleep(3);
/*Remover archivo de Scripts*/
?>

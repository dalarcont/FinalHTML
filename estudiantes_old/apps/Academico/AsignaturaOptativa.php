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
    <title>Proceso de matrícula optativa</title>
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
<meta name="description" content="Proceso de matrícula académica del estudiante Universidad Falsa">
</head>
<div id="ResultadoAjuste" style="display: none;"></div>
<script language="JavaScript" type="text/javascript">
function muestraGranDiv(){
document.getElementById('granDiv').style.visibility = "visible";
document.getElementById('cargando').style.visibility = "hidden";
}
</script>
<body id="body" onload="muestraGranDiv()">
<div id="art-main">
<header class="art-header">

    <div class="art-shapes">
        <div class="art-object1542056463"></div>

        <div style="position:absolute;left:850px;top:15px;width:auto;height:auto;"><button onclick="window.close()">Cerrar ventana</button>

            </div>
        </div>

<h1 class="art-headline">
    <a href="/">Universidad Falsa - PROCESO DE MATRÍCULA OPTATIVA</a>
</h1>   
</header>

<!-- Estilo para respetar el contendor de información de asignaturas -->
<div id="cargando" style="width: 100%; height: 500px; position: absolute; padding-top:20px; text-align:center"><span class="fontloadingcont">
<img src="images/UMC.png"><br>
    <h3>Programa de ajuste de matrícula académica optativa. <br>Permite que adiciones una asignatura de tu elección/preferencia a tu plan de estudios actual. <br> Por favor espera mientras el sistema carga los datos de las asignaturas habilitadas para ser optativas en el periodo actual (<?php echo $SMActual; ?>)... <br>Se paciente...</h3></span></div>

<div id="granDiv" style="visibility:hidden;">
 <?php
 require '../../divsys/umcdssictrl.php';
$findOptaHabilidad="SELECT * FROM akadata WHERE ID='$ID'";
$doFOH=mysqli_query($link,$findOptaHabilidad);
$rowFOH=mysqli_fetch_array($doFOH);
if($rowFOH['OPTA']!=''){
/* YA HAY ASIGNATURA OPTATIVA */
echo "<script>
        alertify.alert('Matrícula optativa', 'No puedes hacer uso nuevamente de la matrícula optativa porque ya tienes una asignatura optativa matriculada. <br />Qué descaro.', function(){ alertify.success('Limpiando datos');window.close(); });
        </script>";
}
else
{
    /* */
}
                if (empty($ID)) {
                    #No hay identificación de estudiante por lo tanto se detiene el proceso
                    echo "<script>
                        alertify.alert('Proceso de matrícula', 'No estás identificado correctamente, ingresa de nuevo al portal estudiantil.', function(){ alertify.success('Limpiando datos');location.href='../../index.php'; });
                        </script>";
                }
                ?>

                <div><center><p> Unimísera:Optativas:<?php echo $NombrePlanEstudios; ?> </p></center></div>

                <!-- <div id="PlanDeEstudios" style="position:relative;height:425px;border:1px; border:solid silver;overflow:auto;"> -->
                    <div id="contenedorPde" style="height: 425px; border: thin solid silver; overflow: auto;">
                    <center>
                <?php 
                    require '../../divsys/umcdssictrl.php';

                    if ($pe_materias=='1') {
                        #Permitido ver el semáforo
                        if(empty($PROGC)){
                        echo "<script>
                        alertify.alert('Matrícula optativa', 'No estás matriculado en ningún programa de la Universidad. <br /> Deberás iniciar sesión de nuevo.', function(){ alertify.success('Limpiando datos');location.href='../../index.php'; });
                        </script>";}                        
                        #Llamar el contenido del plan de estudios                           
                        switch ($FAC) {
                            case 'FACING':
                                 require 'PlanesProgramas/OPTA-FACING.php';
                                break;
                            case 'FACBAS':
                            case 'FACTEC':
                                 require 'PlanesProgramas/OPTA-FACBASTEC.php';
                            break;

                            case 'FACSUP':
                                require 'PlanesProgramas/OPTA-FACSUP.php';
                            break;
                            
                            default:
                                echo "<script>
                                alertify.alert('Matrícula optativa', 'La facultad a la que pertenece tu programa declaró que no tendrás acceso a matrícula optativa.', function(){ alertify.success('Limpiando datos');window.close(); });
                                </script>";
                            break;
                        }          
                    }
                    else
                    {
                        #No se permite el ajuste de matrícula por directiva
                        echo "
                        alertify.alert('Plan de estudios', 'Este aplicativo está fuera de servicio.', function(){ alertify.success('Limpiando datos');window.close(); });
                        </script>";
                    }
                    ?>
                    </center>
                </div>
                <div>
           <!-- DATA ASIGNATURA -->
            <!-- loadModulo(AsignaturaBox); -->
            <div >
            <div class="art-content-layout-row">
                <div class="art-layout-cell"style="width: 25%" >
                    <!-- IMAGEN ASIGNATURA -->
                    <div id="contenedorSeleccion" style="position:absolute;">
                        <div style="font-size: 0px;"></div>
                        <div id="ModInfoBoxColor" style="position:absolute;left:10px;top:30px;width:210px;height:80px;clip:rect(0,215px,100px,0);background-color:;overflow:hidden;"></div>
                        <div id="ModInfoBoxCode" style="position:absolute;overflow:hidden;left:30px;top:40px;width:180px;text-align:center;font-family:Arial;font-size:20px;font-weight:bold;"></div>
                        <div id="ModInfoBoxNombre" style="position:absolute;overflow:hidden;left:25px;top:72px;width:180px;text-align:center;font-family:arial;font-size:12px;font-weight:bold;"></div>
                    </div>
                    <!-- FIN -->
                    
                </div>
                
                        
                
            <div id="ContenedorDatosAsignaturaSeleccionada" style="display:none;" class="art-layout-cell" style="width: 0%" >
                    <!-- CONTENEDOR BOTONES -->
                    <div class="art-layout-cell" style="width: 50%" ><center>
                        <br><br><br>   <br> 
                        <div id="AjusteAsignatura" >
                            <form name="ModificarAsignatura" id="ModificarAsignatura" action="setAjusteO.php" method="POST">
                                <input type="hidden" name="MATCODE" id="MATCODE" value="">
                                <button  type="submit" name="Orden" class="art-button" value="MATRICULAR">MATRICULAR</button>
                                <?php //<button  type="submit" name="Orden" class="art-button" value="CANCELAR">CANCELAR</button> 
                                ?>
                            </form>
                        </div>

                    </center>
                    </div>
                        <!-- DATOS ASIGNATURA -->
                        <div class="art-layout-cell" style="width: 90%" >
                            <fieldset style="border:solid silver;border:1px;">
                                <table>
                                    <tbody>
                                    <tr>
                                      <td><b>ASIGNATURA:</b></td>
                                      <td colspan="3"><input type="text" id="ModInfoAsignaturaNombre" style="width: 600px;" readonly="" value=""></td>
                                    </tr>
                                    <tr>
                                      <td><b>ESTADO:</b></td>
                                      <td colspan="3"><input type="text" id="ModInfoAsignaturaEstado" style="width: 600px;" readonly="" value=""></td>
                                    </tr>
                                    <tr>
                                      <td><b>DETALLE:</b></td>
                                      <td colspan="3"><textarea id="ModInfoAsignaturaDetalle" style="width: 600px; resize: none;" rows="3" readonly=""></textarea></td>
                                    </tr>   
                                    </tbody>
                                </table>
                            </fieldset>
                        </div>
                </div>
            </div>
            </div>
    </div>
</div>
</div>

</body></html>
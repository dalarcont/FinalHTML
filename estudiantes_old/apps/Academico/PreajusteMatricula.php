<?php  
/* Universidad Falsa - División Superior de Sistemas Informáticos */
session_start();

$PROGC=$_SESSION['PROGC'];
$ID=$_SESSION['ID'];
require '../../divsys/umcdssictrl.php';
require '../../divsys/DatosProgramas.php';

//echo "<script>alert(",$PROGC,");</script>";
$_SESSION['APPTYPE']="MAT";
//Para mostrar la nota final del estudiante con un decimal
function MostrarFlotante($Numero){
    $Mostrar = sprintf('%0.1f', $Numero);
    return $Mostrar;
}
//Este aplicativo es únicamente para estudiantes de la Facultad Continua, comprobar que lo sea:


?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Universidad Falsa - División Superior de Sistemas Informáticos -->
    <meta charset="utf-8">
    <title>Proceso de pre-matrícula académica</title>
<meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width" > 
<!--<meta http-equiv="refresh" content="60">-->
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
<link rel='stylesheet' href='css/alertify.css' />
 
<link rel='stylesheet' href='css/themes/bootstrap.css' />
 <div id="ResultadoAjuste"></div>
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


<script type="text/javascript">
        $(document).ready(function($){
            //height++(free_area_after(header+ModInfo));
            //Leer la altura de la ventana
                var ventana_alto = $(window).height();
            //235 is the Px_size of header and ModInfo joined.
            //235 es el tamaño en Px del header y ModInfo juntos.
                var FinalHeight = ventana_alto - 235;
            //Establecer nuevo height
                $("#ContenedorPlan").height(FinalHeight);
        });
</script>

<meta name="description" content="Proceso de pre-matrícula académica del estudiante egresado Universidad Falsa">

</head>

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
    <a href="/">Universidad Falsa - PROCESO DE MATRÍCULA</a>
</h1>   
</header>
<div id="cargando" style="width: 100%; height: 500px; position: absolute; padding-top:20px; text-align:center"><span class="fontloadingcont">
<img src="images/UMC.png"><br>
    <h3>Programa de pre-matrícula académica de tu programa <br>Te permite pre-matricular las asignaturas que deseas cursar.<br> Por favor espera mientras el sistema carga los datos... <br>Se paciente...</h3></span></div>
<!-- Estilo para respetar el contendor de información de asignaturas -->
<div id="granDiv" style="visibility:hidden;">
 <?php
                if (empty($ID)) {
                    #No hay identificación de estudiante por lo tanto se detiene el proceso
                    echo "<script>
                        alertify.alert('Proceso de pre-matrícula', 'No estás identificado correctamente, ingresa de nuevo al portal estudiantil.', function(){ alertify.success('Limpiando datos');location.href='../../index.php'; });
                        </script>";
                }
                ?>

                <div><center><p> <?php echo $NombrePlanEstudios; ?> </p></center></div>

                <!-- <div id="PlanDeEstudios" style="position:relative;height:425px;border:1px; border:solid silver;overflow:auto;"> -->
                    <div id="ContenedorPlan" style="height:10px; width:auto; border:thin solid silver; overflow:auto;">
                   <center>
                <?php 
    
    

    if ($pe_mat_kill=='1') {
        #Permitir ajuste de matrícula
        if($PROGC!=''){
            switch ($FAC) {
                case 'FACMIS':
                case 'FACBAS':
                case 'FACTEC':
                case 'FACING':
                    #Este aplicativo no se permite para ellos
                    echo "<script src='alertify.js'></script><script>
                    alertify.alert('Ajustes de prematrícula', 'Tu programa es de pre-grado, el cual NO pertenece a la Facultad Continua.', function(){ alertify.success('Limpiando datos');window.close(); });
                    </script>";
                break;

                case 'FACSUP':
                    #Este aplicativo no es para posgrados
                    echo "<script src='alertify.js'></script><script>
                    alertify.alert('Ajustes de prematrícula', 'Tu programa es de post-grado, pero NO pertenece a la Facultad Continua.', function(){ alertify.success('Limpiando datos');window.close(); });
                    </script>";
                break;

                case 'FACCON':
                    require 'PreajusteMatricula/Contenidos/'.$PROGC.'.php';
                break;
                
                default:
                    #Este aplicativo no es para posgrados
                    echo "<script src='alertify.js'></script><script>
                    alertify.alert('Ajustes de prematrícula', 'Tu programa no pertenece a ninguna facultad, ni a la Facultad Continua.', function(){ alertify.success('Limpiando datos');window.close(); });
                    </script>";
                    break;
            }
            
        }
        else
        {
            echo "<script src='alertify.js'></script><script>
        alertify.alert('Ajustes de prematrícula', 'Tu programa no pertenece a la Facultad Continua. <br />Deberás iniciar sesión de nuevo.', function(){ alertify.success('Limpiando datos');location.href='../../index.php'; });
        </script>";
        }
        
    }
    else
    {
        #No se permite el ajuste de matrícula por directiva
       echo "<script src='alertify.js'></script><script>
        alertify.alert('Ajustes de prematrícula', 'Este aplicativo está fuera de servicio.', function(){ alertify.success('Limpiando datos');window.close(); });
        </script>";
    }
    ?>
               </center> </div>

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
                            <form name="ModificarAsignatura" id="ModificarAsignatura" action="setPreajuste.php" method="POST">
                                <input type="hidden" name="MATCODE" id="MATCODE" value="">
                                <button  type="submit" name="Orden" class="art-button" value="ADICIONAR">ADICIONAR</button>
                                <button  type="submit" name="Orden" class="art-button" value="REMOVER">REMOVER</button>
                            </form>
                        </div>
                        <!-- <div id="ResultadoAjuste"></div> -->

                    </center>
                    </div>
                        <!-- DATOS ASIGNATURA -->
                        <div class="art-layout-cell" style="width: 100%" >
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
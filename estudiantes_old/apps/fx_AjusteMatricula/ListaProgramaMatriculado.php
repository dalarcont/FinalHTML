<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */

session_start();
$ID=$_SESSION['ID'];
$PROGC=$_SESSION['PROGC'];
require '../../divsys/umcdssictrl.php';

	$get_Akadata="SELECT * FROM akadata WHERE SM='$SMActual' AND ID='$ID'";
	$do_gA=mysqli_query($link, $get_Akadata);
	$Pack_Akadata=mysqli_fetch_array($do_gA);
    $PROGC = $Pack_Akadata['PROGC'];
    $_SESSION['ALL_PROGS'] = $_SESSION['PROGC'];
    $_SESSION['PROGC'] = $PROGC;
    require '../../divsys/DatosProgramas.php';
/* En este módulo no se leerá el programa matriculado desde la base de datos general dado que se carga desde la sesión inicial que es la que se encarga de traer el programa matrículado*/

echo "
<link rel='stylesheet' href='../../css/alertify.css' />
<link rel='stylesheet' href='../../css/themes/bootstrap.css' />
<script src='../../alertify.js'></script> 
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script>
function callEstProg() {
    var EstProg = $('#ProgramasEstudiante').val();

    if (EstProg != '') {
        $.post('apps/fx_AjusteMatricula/ProcesarProgramaMatricula.php', {EstProg: EstProg}, function(mensaje) {
            $('#ResSelectPdeE').html(mensaje);
            }); 
            } else { 
            $('#ResSelectPdeE').html('<p>Selecciona de la lista, el programa académico del que deseas hacer ajustes de matrícula.</p>');
        };
    };
</script>
<script type='text/javascript' src='../../jquery.form.js'></script>
<script>

function AjustarMatricula(){
    window.open('apps/Academico/ProcesoMatricula.php');
}
</script>";

echo "<h6> AJUSTE DE MATRÍCULA </h6><br><br>";

echo "
<div id='AjusteMatricula'>";
if(!empty($PROGC)){
	echo "<select style='height:25px;' name='ProgramasEstudiante' id='ProgramasEstudiante' onchange='callEstProg();'>";
		echo '<option value="null">Seleccionar programa académico para realizar ajustes</option>';
		
		echo "<option value='",$PROGC,"'>",$NombrePlanEstudios,"</option>";	
		//echo "<option value='umc0'>Facultad Mísera - Plan de asignaturas optativas míseras gratuitas sin créditos</option>";	
		echo "</select><br><br>\n";
	    
		echo "<div id='ResSelectPdeE' style='display:block;'>
        </div>";
	        
    }
    else
    {
    	echo '<big><i><b> No tienes programas académicos matriculado.</b></i></big><br>';
      	echo '<br> --- --- --- --- --- <br>';
            
    } 
echo"</div>";
//Regresar la variable PROGC a su estado original
$PROGC=$_SESSION['PROGC'];

?>
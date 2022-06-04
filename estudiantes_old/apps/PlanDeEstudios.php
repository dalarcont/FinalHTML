<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
session_start();
$ID=$_SESSION['ID'];
$PROGC=$_SESSION['PROGC'];
#Switch de definición de programa
require 'divsys/DatosProgramas.php';
require 'divsys/umcdssictrl.php';
echo "
<link rel='stylesheet' href='css/alertify.css' />
<link rel='stylesheet' href='css/themes/bootstrap.css' />
<script src='alertify.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script>
function callEstProg() {
    var EstProg = $('#ProgramasEstudiante').val();

    if (EstProg != '') {
        $.post('apps/ProcesarPdeE.php', {EstProg: EstProg}, function(mensaje) {
            $('#ResSelectPdeE').html(mensaje);
            });
            } else {
            $('#ResSelectPdeE').html('<p>Selecciona de la lista, el programa académico del que deseas ver el historial.</p>');
        };
    };
</script>
<script type='text/javascript' src='jquery.form.js'></script>
<link href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css' rel='stylesheet' type='text/css'/>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js'></script>

    <!-- Script para submit está de tal manera que ejecutado el submit, no importa si accede o no, los campos 'ID' y 'Pass' se limpian-->
        <script type='text/javascript'>
        $('document').ready(function()
        {
        $('#SelectorPdeE').ajaxForm( {
        target: '#ResSelectPdeE',
        success: function() {
        return false;
        }
        });
        });
        </script>";


echo "

<script>
function validarSlct(){
	var Option = document.getElementById('ProgramasEstudiante').value;
	if(Option=='' || Option=='null'){
		alertify.alert('Plan de estudios','Por favor indica el programa académico');
		return false;
	}
    return true;
}

function MostrarProcesoAcademico(){
    window.open('apps/Academico/ProcesoAcademico.php');
}
</script>";


echo "<h6> PLAN DE ESTUDIOS </h6><br><br>";

/* Indicar al sistema que busque programas académicos asociados al ID del estudiante en akadata dado que se piensa ver es el plan curricular y no matrícula */
echo "
<div id='PlanEstudios'>
<form name='SelectorPdeE' id='SelectorPdeE' action='apps/ProcesarPdeE.php' method='POST' onsubmit='return validarSlct(this);'>

";
    $PrevProgC=$PROGC;
    $LISTAR="SELECT * FROM akadata WHERE ID='$ID'";
    $OPERAR=mysqli_query($link, $LISTAR);
    $row=mysqli_fetch_array($OPERAR);
    //echo "<script>alert('",$row['PROGC'],"');</script>";
    if (!empty($row['PROGC'])){
	        //listado
	        echo '<select style="height:25px;" name="ProgramasEstudiante" id="ProgramasEstudiante" onchange="callEstProg();">';
	    	echo '<option value="null">Seleccionar programa académico</option>';
		do{
    		$PROGC=$row['PROGC'];
    		require 'divsys/DatosProgramas.php';
    		if($row['STATE']==0){
    			//Estudiante no matriculó programa
    			echo "<option value='",$PROGC,"'>",$NombrePlanEstudiosOld,"</option>";
    		}
    		else
    		{
    			echo "<option value='",$PROGC,"'>",$NombrePlanEstudios,"</option>";
    		}

	    }
	        while ($row=mysqli_fetch_array($OPERAR));
	        echo "</select><br><br>\n";
            echo "<div id='ResSelectPdeE' style='display:block;'>

            </div>
            ";

    }
    else
    {
    	echo '<br><big><i><b> No tienes programas académicos matriculados o cursados.</b></i></big><br>';
      	echo '<br> --- --- --- --- --- <br>';

    }
echo"</form></div>";
//Regresar la variable PROGC a su estado original
$PROGC=$_SESSION['PROGC'];
?>

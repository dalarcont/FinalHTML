<?php
session_start();
$PROGC=$_SESSION['PROGC'];
$ID=$_SESSION['ID'];
require '../../divsys/umcdssictrl.php';
require '../../divsys/DatosProgramas.php';


echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<link rel='stylesheet' href='css/alertify.css' />

<link rel='stylesheet' href='css/themes/bootstrap.css' />

<script src='alertify.js'></script>
<script>
function letCancelar() {
	var Pincode = $('#PINCODE').val();
	var EstId = '",$ID,"';
	if (Pincode != '') {
		$.post('apps/fx_CancelarRetirar/set_Cancelar.php', {Pincode: Pincode, EstId: EstId}, function(mensaje) {
			$('#resForm').html(mensaje);
			});
			} else {
			var t = 'Cancelación de semestre';
			var m = 'Por favor indica el código de cancelación de semestre';
			alertify.alert(t,m);
		};
	};


  function letRetiro() {
  	var EstId = '",$ID,"';
  	if (EstId != '') {
  		$.post('apps/fx_CancelarRetirar/set_Retirar.php', {EstId: EstId}, function(mensaje) {
  			$('#resForm').html(mensaje);
  			});
  			} else {
  			var t = 'Retiro definitivo';
  			var m = 'No se detecta el documento de identidad válido, por favor inicia sesión nuevamente.';
  			alertify.alert(t,m);
  		};
  	};
</script>";



echo "<h6>Cancelación de semestre o retiro definitivo de la universidad</h6>";

/*

	La cancelación de semestre deberá aparecer únicamente si se registra periodo académico activo en la hoja académica del estudiante


*/

echo "<div id='FormularioCoR'>";

$isActive = "SELECT * FROM akadata WHERE ID='$ID' AND PROGC='$PROGC'";
$do_isActive = mysqli_query($link, $isActive);
$pack_isActive = mysqli_fetch_array($do_isActive);

if($pack_isActive['STATE']=='1'){
	//El estudiante tiene semestre/periodo académico debidamente matriculado, puede mostrarse el módulo de cancelación
	echo "
	<fieldset><legend><h6>Cancelación de semestre</h6></legend>

		<p><b><i>La cancelación de semestre desactiva la matrícula académica del periodo actual del estudiante, esto quiere decir que se revoca el distintivo de estudiante activo para el periodo ",$SMActual,", las asignaturas matriculadas en este periodo automáticamente regresan a configuración cero (0) y el estudiante podrá cursarlas luego. Esta acción no se puede deshacer.</i><br><big>El hecho de cancelar el semestre NO es circunstancia para devolución de dineros de matrícula financiera ni otros conceptos.</big></b></p>
		<p><b>Código PIN de cancelación de semestre: </b><input type='text' id='PINCODE'></p>
		<button class='art-button' onclick='letCancelar()'>Cancelar semestre</button>
	</fieldset>



	<!-- --><br>


";
}
else
{
	echo "<fieldset><legend><h6>Cancelación de semestre</h6></legend>
		<p>No se te otorga habilidad de cancelación de semestre dado que no tienes programa académico matriculado para el periodo actual.</p>
		</fieldset>";
}



echo "
	<fieldset><legend><h6>Retiro definitivo de la universidad</h6></legend>

		<p><b><i>El retiro definitivo desactiva y luego elimina todo dato asociado al estudiante en los archivos de la universidad, se pierde el distintivo de estudiante, todo programa cursado retirá la validación de diploma y/o egreso. Se aplica consecuente de inhabilidad para inscripciones por un número de temporadas que el Consejo de Facultad determine.</i></b></p>
		<p>Para retirarte definitivamente no necesitas pagar el PIN, dado que como te vas para siempre, no se requiere cobro para derechos de conservación de datos.<br><b><big>El hecho de retirarse definitivamente NO es circunstancia para devolución de dineros de matrícula financiera ni otros conceptos.</big></b></p><br>
		<button class='art-button' onclick='letRetiro()'>Acepto mi retiro definitivo conforme lo dictamina el reglamento estudiantil vigente</button>
	</fieldset>
	<p><b></b></p>
	<p><b></b></p>
	<p><b></b></p>
	<p><b></b></p>

</div>
<div id='resForm'></div>";
?>

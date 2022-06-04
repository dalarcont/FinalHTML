<?php 
/* Universidad Falsa - División Superior de Sistemas Informáticos */

session_start();
$ID=$_SESSION['ID'];
require 'divsys/umcdssictrl.php';

$ConsultarVotacion="SELECT * FROM votacionesumc WHERE ID='$ID'";
$doCV=mysqli_query($link, $ConsultarVotacion);
$rowCV=mysqli_fetch_array($doCV);

if ($rowCV) {
	#El estudiante ya calificó la UMC
	echo "<p><big><b> Disculpa, ya has participado de esta votación, muchas gracias.</b></big></p>";
	echo "<p></p>";
	
}
else
{
	echo "<p>
		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js'></script>
		<script type='text/javascript' src='apps/jquery.form.js'></script>

		<!-- Script para submit -->
        <script type='text/javascript'>
	        $('document').ready(function()
	        {
	        $('#CalificarUMC').ajaxForm( {
	        target: '#ResultadoCalificar',
	        success: function() {
	        $('#OpcionesCalificar').slideUp('fast');
	        }
	        });
	        });
        </script>
        <h3>Calificar Universidad Falsa</h3>
        <div id='OpcionesCalificar'>
		    <form id='CalificarUMC' name='CalificarUMC' method='POST' action='apps/setCalificar.php'>
					<p><b> Por favor, califica qué tal te ha parecido la Universidad Falsa</b></p>
					<p><i> Recuerda que sólo podrás participar en esta votación una vez. </i></p>
					<input type='radio' name='PUNTAJE' value='1'><b>1</b></>&nbsp;
					<input type='radio' name='PUNTAJE' value='2'><b>2</b></>&nbsp;
					<input type='radio' name='PUNTAJE' value='3'><b>3</b></>&nbsp;
					<input type='radio' name='PUNTAJE' value='4'><b>4</b></>&nbsp;
					<input type='radio' name='PUNTAJE' value='5'><b>5</b></>&nbsp;
					<input type='radio' name='PUNTAJE' value='6'><b>6</b></>&nbsp;
					<input type='radio' name='PUNTAJE' value='7'><b>7</b></>&nbsp;
					<input type='radio' name='PUNTAJE' value='8'><b>8</b></>&nbsp;
					<input type='radio' name='PUNTAJE' value='9'><b>9</b></>&nbsp;
					<input type='radio' name='PUNTAJE' value='10'><b>10</b></>&nbsp;
					<p></p>
				 <input type='submit' class='art-button' value='Votar'>
			</form>
		</div>
			<br>
		<div id='ResultadoCalificar'></div>
		</p>";
}


?>

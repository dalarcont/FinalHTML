<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
session_start();
require '../divsys/umcdssictrl.php';
$ID=$_POST['ID'];
$IDUM=$_POST['IDUM'];

$_SESSION['ID']=$ID;
$_SESSION['IDUM']=$IDUM;

#Validar identidad del estudiante
	$ValidarIdentidad="SELECT * FROM gendata WHERE ID='$ID'";
	$doVI=mysqli_query($link, $ValidarIdentidad);
	$rowVI=mysqli_fetch_array($doVI);
		$Identificacion=$rowVI['ID'];
		if ($ID==$Identificacion) {
			# Identidad confirmada
				#Traer datos de recuperación de contraseña
				$DatosRecovery="SELECT * FROM platformusers WHERE ID='$ID'";
				$doDR=mysqli_query($link, $DatosRecovery);
				$rowDR=mysqli_fetch_array($doDR);
				$Pregunta=$rowDR['RECQUEST'];
					#Formulario de cuestión
					echo 
					"<h6> Responder pregunta seguridad </h6>
					<p> Hola <b><big>"; echo $rowVI['NOM']; echo "</big></b> <br>
					<br>
					Cuando creaste tu contraseña de acceso se te solicitó que indicaras una pregunta de tu autoría y una respuesta para ella, la cual sólo sabes tú y será utilizada para casos de olvidar contraseña, la pregunta es: <br>
					<b><big> "; echo $Pregunta; echo "</big></b>
					<p><br></p>Indica la respuesta:<br>";
					#Formulario

					echo "
					<script type='text/javascript'>
			        $('document').ready(function()
			        {
			        $('#FormPaso2').ajaxForm( {
			        target: '#Resultado2',
			        success: function() {
			        $('#Formulario2').slideUp('fast');
			        }
			        });
			        });
			        </script>
			        <script type='text/javascript'>
				    function validarCampos2(FormPaso2) {
				        if(FormPaso2.Respuesta.value.length<=0) {
				            FormPaso2.Respuesta.focus();
				            alertify.alert('Recuperar acceso','Debes indicar la respuesta!');
				            return false;
				        }
				        return true;
				    }
				</script>";
        			echo '
					<div id="Resultado2"></div>
				        <div id="Formulario2">
				            <form id="FormPaso2" name="FormPaso2" action="recovery/Paso3.php" method="POST" onsubmit="return validarCampos2(this)">

				                <p><input type="text" name="Respuesta" autocomplete="off"><br></p>
				                
				                <p>&nbsp;<input type="submit" value="Continuar" class="art-button"> &nbsp;<br></p>
				            </form>
				        </div>';
		}
		else
		{
			echo "<img src='apps/NO.png' height='42' width='42'><br> Error, no existe estudiante. <script language='javascript'>function unLoginGotoLogin() {window.location='index';} setTimeout('unLoginGotoLogin()', 2500); </script>";
		}


?>
<?php
session_start();
$PROGC=$_SESSION['PROGC'];
$ID=$_SESSION['ID'];
$NAME=$_SESSION['NAME'];
require '../../divsys/umcdssictrl.php';
require '../../divsys/DatosProgramas.php';

//Get the student data
$Import = "SELECT * FROM gendata WHERE ID='$ID'";
$execut = mysqli_query($link, $Import);
$General_arr=mysqli_fetch_array($execut);

$PinIngreso = $General_arr['PIN'];
$Email = $General_arr['EMAIL'];
$PuntajeIcfes = $General_arr['ICFES'];
if($General_arr['STATE']==0){$EstadoGeneral = "Estudiante inactivo(a)";}else{$EstadoGeneral = "Estudiante activo(a)";}
if($General_arr['GEN']=='H'){$Genero = "Masculino";}else{$Genero="Femenino";}
$CiudadResidencia = $General_arr['CITY'];

switch ($General_arr['SCHOOL']) {
	case 'SECCOM':
		$Escolaridad = "Secundaria Completa";
		break;
	case 'SECBAC':
		$Escolaridad = "Secundaria Incompleta";
		break;

	default:
		$Escolaridad = "Ninguna o Primaria";
	break;
}


$EstratoSocial = $General_arr['SOCIAL'];



echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<link rel='stylesheet' href='css/alertify.css' />

<link rel='stylesheet' href='css/themes/bootstrap.css' />

<script src='apps/fx_Perfil/LetQR/qrcode.js'></script>
<script src='alertify.js'></script>
";

echo "<h6>Perfil del estudiante</h6>";

echo "<div id='datosEstudiante'>";


	echo "
	<fieldset><legend><h6>Datos generales</h6></legend>

		<p><b><i>Son tus datos primarios y básicos respecto a tu sociedad con la Universidad</big></b></p>
		
		<p><b>Identificación:</b> $ID</p>
		<p><b>Nombres:</b> $NAME</p>
		<p><b>Género:</b> $Genero</p>
		<p><b>Código PIN de inscripción usado:</b> ",$PinIngreso,"</p>
		<p><b>Dirección electrónica:</b> $Email</p>
		<p><b>Puntaje de ingreso:</b> $PuntajeIcfes</p>
		<p><b>Ciudad de residencia:</b> $CiudadResidencia</p>
		<p><b>Escolaridad:</b> $Escolaridad</p>
		<p><b>Estrato social:</b> $EstratoSocial</p>
		<p><b></b></p>
		<p><b></b></p>
		<p><b></b></p>
	</fieldset>



	<!-- --><br>


";



echo "
	<fieldset><legend><h6>Código QR Universitario</h6></legend>

		<br>
		<div id='qrcode'></div><br>
	</fieldset>
	
				<script type='text/javascript'>
				new QRCode(document.getElementById('qrcode'), 'Universidad Falsa:",$ID,"-",$NAME,"-",$Genero,"-",$Email,":Universidad Falsa');
				</script>
	<p><b></b></p>
	<p><b></b></p>
	<p><b></b></p>
	<p><b></b></p>

</div>
<div id='resForm'></div>";
?>

<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
session_start();
$PROGC=$_SESSION['PROGC'];

echo "<h6> REGISTRO DE ASISTENCIAS Y PUNTAJES </h6>
<p><i> Únicamente se mostrarán asignaturas que estén matriculadas.</i></p>";
switch ($PROGC) {
		case 'ORTGRA':
		require 'listmat/ORTGRA.php';
		break;

		case 'DIGSEN':
		require 'listmat/DIGSEN.php';
		break;

		case 'MISERA':
		require 'listmat/MISERA.php';
		break;

		case 'SOCWEB':
		require 'listmat/SOCWEB.php';
		break;

		case 'GESBIX':
		require 'listmat/GESBIX.php';
		break;

		case 'DIGHUM':
		require 'listmat/DIGHUM.php';
		break;

		case 'IDEPER':
		require 'listmat/IDEPER.php';
		break;

		case 'FINFPA':
		require 'listmat/FINFPA.php';
		break;

		case 'GESHET':
		require 'listmat/GESHET.php';
		break;

		case 'GESHOM':
		require 'listmat/GESHOM.php';
		break;

		case 'YOUTUB':
		require 'listmat/YOUTUB.php';
		break;

		case 'FINANC':
		require 'listmat/FINANC.php';
		break;

		case 'SEXUAL':
		require 'listmat/SEXUAL.php';
		break;

		case 'FRACAS':
		require 'listmat/FRACAS.php';
		break;

		case 'PRESID':
		require 'listmat/PRESID.php';
		break;

		case 'DESPER':
		require 'listmat/DESPER.php';
		break;

		case 'GLAMUR':
		require 'listmat/GLAMUR.php';
		break;

		case 'SEXAPI':
		require 'listmat/SEXAPI.php';
		break;

		case 'FIPMIT':
		require 'listmat/FIPMIT.php';
		break;

		case 'ENAMAT':
		require 'listmat/ENAMAT.php';
		break;

		case 'IDIOAV':
		require 'listmat/IDIOAV.php';
		break;

				case 'DIGHUM2':
		require 'listmat/DIGHUM2.php';
		break;

		case 'IDEPER2':
		require 'listmat/IDEPER2.php';
		break;

		case 'FINFPA2':
		require 'listmat/FINFPA2.php';
		break;

		case 'GESHET2':
		require 'listmat/GESHET2.php';
		break;

		case 'GESHOM2':
		require 'listmat/GESHOM2.php';
		break;

		case 'YOUTUB2':
		require 'listmat/YOUTUB2.php';
		break;

		case 'FINANC2':
		require 'listmat/FINANC2.php';
		break;

		case 'SEXUAL2':
		require 'listmat/SEXUAL2.php';
		break;

		case 'FRACAS2':
		require 'listmat/FRACAS2.php';
		break;

		case 'PRESID2':
		require 'listmat/PRESID2.php';
		break;

		case 'DESPER2':
		require 'listmat/DESPER2.php';
		break;

		case 'GLAMUR2':
		require 'listmat/GLAMUR2.php';
		break;

		case 'CREDES':
		require 'listmat/CREDES.php';
		break;

	default:
		echo "Error del sistema. UMC:DIVSIS:PE:Load(RegAsistForm):-break;NonDefProg-404";
		break;
}

echo '<br>
<link rel="stylesheet" href="css/alertify.css" />
 
<link rel="stylesheet" href="css/themes/bootstrap.css" />
 
<script src="alertify.js"></script>
<script type="text/javascript">
function AyudaNuevones() {

     alertify.alert("Asignaturas", "Con este aplicativo podrás registrar puntaje a tus asignaturas, selecciona la asignatura y podrás registrar puntaje. \\n El aplicativo listará las asignaturas que están bajo el carácter de activas, no importa sus requerimientos. \\n Cuando una asignatura ya está aprobada, ésta desaparece del listado, así mismo, cuando esté aprobada dejará de registrar puntajes. \\n Algunas asignaturas requieren que para su obtención de puntaje, otras asignaturas que le preceden o sean sus requisitos para curso, estén debidamente aprobadas. \\n Para conocer el sistema de requisitos de tus asignaturas visita el plan de estudios y/o la semaforización de tu programa y plan de estudios.");
        }
</script>
<a href="#" onclick="AyudaNuevones();">No entiendes? Necesitas ayuda?</a>
       ';
?>
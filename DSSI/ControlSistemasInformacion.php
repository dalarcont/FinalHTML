<?php
#Universidad Falsa
#División Superior de Sistemas Informáticos
#Datos generales para el funcionamiento de los sistemas de información

//Última fecha de revisión: 2022-MAYO-21-02:11PM

class Root_BasesDatos{
	function DB_CON(){
		return mysqli_connect("localhost","universidad","eLzxVpaY2PABPUg","universidadfalsa");
	}
}


class variablesAcademicasGenerales{
	const SemestreAnterior2 = "2021-1";
	const SemestreAnterior = "2021-2";
	const SemestreActual = "2022-1";
	const SemestreProximo = "2022-2";
	const infoPregrado_Anterior = "unifalsa:pregrado:".self::SemestreAnterior;
	const infoPregrado_Actual = "unifalsa:pregrado:".self::SemestreActual;
	const infoPregrado_Proximo = "unifalsa:pregrado:".self::SemestreProximo;
	const infoPostgrado_Anterior = "unifalsa:postgrado:".self::SemestreAnterior;
	const infoPostgrado_Actual = "unifalsa:postgrado:".self::SemestreActual;
	const infoPostgrado_Proximo = "unifalsa:postgrado:".self::SemestreProximo;
	//const smCantidadParcialesGenerales = 4 ;
	const mensajeFalla = "<p><big><b> Actualmente esta función no está disponible según lo establecen las directivas de la universidad. <br> Gracias. </b></big></p>";
	const mensajeBroma = "<p><big><b> Lo sentimos, en este momento al servidor le place bromear con el sistema, espere hasta que éste decida funcionar de nuevo correctamente. Besos. </b></big></p>";
	const mensajeErrorGeneral = "<p><big><b> Error general en el sistema, comunique este incidente a la universidad, si le da la real gana. </b></big><br></p>";
}



class CorreoElectronico{
	//ENVIAR CODIGO PIN INSCRIPCION
	function CodigoPin_Inscripcion($EMAIL,$pin,$precio){
		$emisor = "inscripciones@unifalsa.com";
		$asunto = "Código PIN para inscripción";
		$contenido = "Apreciado(a) usuario(a):<br>A través del aplicativo de adquisición de código pin para inscripción, se le recuerda por este medio su código:<br><br>
		<big><b>$pin</b></big><br><br>Recuerde que por ahora tiene un pago pendiente por valor de $precio que deberá ser cancelado junto a la matrícula en caso de ser admitido(a).<br>Si no es admitido(a) quedará a paz y salvo*.<br>El paz y salvo aplica si no realiza otra inscripción durante el periodo inmediato al que adquirió este PIN.<br>Si en inscripciones extraordinarias de este mismo periodo desea aplicar, podrá utilizar nuevamente este PIN.<br>";
		$cabeceras = "MIME-Version: 1.0\r\n";
		$cabeceras .= "Content-Type: text/html; charset=\"UTF-8\"\r\n";
		$cabeceras .= "Content-Transfer-Encoding: 8bit\r\n";
		$cabeceras .= "From:" . $emisor;
		//enviar Correo
		mail($EMAIL, mb_encode_mimeheader($asunto), $contenido, $cabeceras);
		//echo "The email message was sent.";
	}

}
//APLICATIVOS DE LA WEB PRINCIPAL

	class aplicativos_webPrincipal_inscripciones{
		//Aca es solo indicar true o false
		public function estado_ObtenerPIN(){return true;}
		public function estado_ProcesoObtenerPIN(){return true;}
		public function inscripcion_listadoPregrado(){return true;}
		public function inscripcion_listadoPostgrado(){return true;}
		public function inscripcion_acceso(){return false;}
		public function inscripcion_ejecutar(){return false;}
		public function estados_adicionales_PIN($a){
			switch ($a) {
				case "CancelacionSemestre":
					$retorno = "No estás habilitado para acceso a inscripciones.<br>Tienes una sanción: Se efectuó cancelación de semestre.<br>El reglamento no permite inscripciones a quienes hayan realizado tal acción.<br>Se te habilitará el sistema de inscripciones para la próxima temporada (ordinaria y/o extraordinaria)";
				break;
				
				case "RetiroUniversitario":
					$retorno = "No estás habilitado para acceso a inscripciones.<br>Tienes una sanción: Se efectuó retiro definitivo de la universidad.<br>El reglamento sanciona los retiros definitivos con prohibición de acceso al sistema de inscripciones por 2 temporadas (ordinarias y/o extraordinarias).<br>Una vez finalizado este tiempo sancionatorio se te habilitará el sistema de inscripciones para la temporada post-sanción (sea ordinaria o extraordinaria).";
				break;

				case "SancionUniversitariaIndefinida":
					$retorno = "No estás habilitado para acceso a inscripciones.<br>Tienes una sanción: Cometiste una violación contra el sistema universitario y/o su reglamento estudiantil y se te sancionó con prohibición de acceso al sistema de inscripciones por tiempo indefinido.<br>Te sugerimos estar pendiente en cada temporada de inscripciones para que puedas conocer si tu sanción ha sido retirada.";
				break;

				case "SancionUniversitariaPermanente":
					$retorno = "No estás habilitado para acceso a inscripciones.<br>Tienes una sanción: Cometiste una violación contra el sistema universitario y/o su reglamento estudiantil y bajo el VoBo de la Alta Presidencia se te sentencia a inhabilidad de por vida para el acceso a inscripciones y/o cualquier servicio de la universidad. No podrás volver.";
				break;

				default:
					$retorno = "";//Significa que simplemente la persona que intenta obtener PIN o acceder a inscripción tiene inhabilidad por existencia de PIN y uso de pin respectivamente
				break;
			}
			return $retorno ;
		}

	}

	class aplicativos_webPrincipal_admisiones{

		public function estado_consultarResultado(){return true;}
		public function estado_consultarReferenciaPago(){return true;}

	}

	class aplicativos_webPrincipal_Iscetex{
		public function estado_EjecutarPagos(){return true;}
		public function estado_EjecutarPagosGrados(){return true;}
		public function estado_ConsultaDeuda(){return true;}
	}

	class aplicativos_webPrincipal_Staff{

		public function estado_RecepcionPQR(){return true;}
		public function estado_RespuestaPQR(){return true;}

	}

?>

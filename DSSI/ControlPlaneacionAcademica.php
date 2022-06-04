<?php
#Universidad Mísera de Colombia
#División Superior Planeación Académica
#Datos generales para el funcionamiento de los sistemas de información y fechas específicas

//Última fecha de revisión: 2019-DICIEMBRE-29-06:16AM



class PlaneacionAcademica{

	//Entrega el calendario académico actual
	public function CalendarioAcademico(){
		return array(
			"ResolucionCalendarioNum" => "A",
			"ResolucionCalendarioDia" => "B",
			"ResolucionCalendarioMes" => "C",
			"ResolucionCalendarioYear" => "D",
			"MatriculaAjusteAntiguos" => "E",
			"MatriculaSolicitudesAntiguos" => "F",
			"SemestreInicio" => "G",
			"MatriculaSolicitudSuficiencias" => "H",
			"Parcial1FechaLimite" => "I",
			"Parcial2FechaLimite" => "J",
			"MatriculaAjustesVarios" => "K",
			"Parcial3FechaLimite" => "L",
			"MatriculaAjusteUnicoFinal" => "M",
			"ParcialFinalFechaLimite" => "N",
			"SemestreFinal" => "O",
			"MatriculaCancelarSemestre" => "P",
			"MatriculaPromediar" => "Q",
			"SolicitudesGenerales" => "R",
			"SolicitudesGrados" => "S", 	//Fechas deben ser iguales y 1 semana posterior al fin de semestre en curso
			"RenovacionesFinancieras" => "T",
		);
	}


	//Entrega el calendario de inscripciones, grados y transferencias
	public function CalendarioInscripciones(){
		return array(
			"ResolucionCalendarioNum" => "U",
			"ResolucionCalendarioDia" => "V",
			"ResolucionCalendarioMes" => "W",
			"ResolucionCalendarioYear" => "X",
			"InscripcionesPregrado"	=>	"Y", 	//Fechas deben ser iguales y 1 semana posterior al fin de semestre en curso
			"InscripcionesPostgrado" =>	"Z", 	//Fechas deben ser iguales y 1 semana posterior al fin de semestre en curso
			"ProcesoAdmisiones"	=>	"AA",
			"PublicacionAdmisiones" => "AB",
			"ResultadosGrados"	=> "AC",
			"PublicacionRecibosPagoPrimiparos" => "AD",
			"PublicacionRecibosPagoGrado" =>	"AE",
			"SolicitudesFinancieras" => "AF",
			"PagosMatriculaPrimiparos" =>	"AG",
			"PagosGrados" =>	"AH",
			"HabilitacionPortalEstudiantilPrimiparos" => "AI",
			"PublicacionMatriculaPrimiparos" => "AJ",
			"GradosExpedicionDiplomasFecha" => 	"AK",
			"DescargarGrado" => 	"AL",
		);
	}

	//Entrega el calendario académico del año y semestre especificos (Año = ####, semestre: # (1-2-3) programando como 1=1, 2=default si no hay tercero, si hay tercero entonces 1=1, 2=2, 3=default)
	
	public function CalendariosAcademicosPrevios($semestre){
		switch ($semestre) {
			case "2019-2":
				$r = array(
					"ResolucionCalendarioNum" => "CALENDARIO 2019-2",
					"ResolucionCalendarioDia" => "CALENDARIO 2019-2",
					"ResolucionCalendarioMes" => "CALENDARIO 2019-2",
					"ResolucionCalendarioYear" => "CALENDARIO 2019-2",
					"MatriculaAjusteAntiguos" => "CALENDARIO 2019-2",
					"MatriculaSolicitudesAntiguos" => "CALENDARIO 2019-2",
					"SemestreInicio" => "CALENDARIO 2019-2",
					"MatriculaSolicitudSuficiencias" => "CALENDARIO 2019-2",
					"Parcial1FechaLimite" => "CALENDARIO 2019-2",
					"Parcial2FechaLimite" => "CALENDARIO 2019-2",
					"MatriculaAjustesVarios" => "CALENDARIO 2019-2",
					"Parcial3FechaLimite" => "CALENDARIO 2019-2",
					"MatriculaAjusteUnicoFinal" => "CALENDARIO 2019-2",
					"ParcialFinalFechaLimite" => "CALENDARIO 2019-2",
					"SemestreFinal" => "CALENDARIO 2019-2",
					"MatriculaCancelarSemestre" => "CALENDARIO 2019-2",
					"MatriculaPromediar" => "CALENDARIO 2019-2",
					"SolicitudesGenerales" => "CALENDARIO 2019-2",
					"SolicitudesGrados" => "CALENDARIO 2019-2",
					"RenovacionesFinancieras" => "CALENDARIO 2019-2",
				);
			break;

			case "2019-1":
				$r = array(
					"ResolucionCalendarioNum" => "CALENDARIO 2019-1",
					"ResolucionCalendarioDia" => "CALENDARIO 2019-1",
					"ResolucionCalendarioMes" => "CALENDARIO 2019-1",
					"ResolucionCalendarioYear" => "CALENDARIO 2019-1",
					"MatriculaAjusteAntiguos" => "CALENDARIO 2019-1",
					"MatriculaSolicitudesAntiguos" => "CALENDARIO 2019-1",
					"SemestreInicio" => "CALENDARIO 2019-1",
					"MatriculaSolicitudSuficiencias" => "CALENDARIO 2019-1",
					"Parcial1FechaLimite" => "CALENDARIO 2019-1",
					"Parcial2FechaLimite" => "CALENDARIO 2019-1",
					"MatriculaAjustesVarios" => "CALENDARIO 2019-1",
					"Parcial3FechaLimite" => "CALENDARIO 2019-1",
					"MatriculaAjusteUnicoFinal" => "CALENDARIO 2019-1",
					"ParcialFinalFechaLimite" => "CALENDARIO 2019-1",
					"SemestreFinal" => "CALENDARIO 2019-1",
					"MatriculaCancelarSemestre" => "CALENDARIO 2019-1",
					"MatriculaPromediar" => "CALENDARIO 2019-1",
					"SolicitudesGenerales" => "CALENDARIO 2019-1",
					"SolicitudesGrados" => "CALENDARIO 2019-1",
					"RenovacionesFinancieras" => "CALENDARIO 2019-1",
				);
			break;
			
			default:
				# code...
				break;
		}
		return $r ;
	}
}

?>
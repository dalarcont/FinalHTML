<?php
#Universidad Mísera de Colombia
#División Superior Sistemas Informáticos
#División Superior Registro y Control
#División Superior Planeación Académica

//Última fecha de revisión: 2019-DICIEMBRE-29-06:16AM

#Archivo de control de datos académicos respecto a los programas académicos


#Indicadores de programas por facultad

class programasFacultades_literal{

	public function facultadIngenierias(){
		return array('PRESID');
	}

}


class programasFacultades_numerico{


	public function facultadIngenierias(){
		return array(86229);
	}

}

class programasInformacion_FacultadIngenierias{

	public function IngenieriaPresidencial(){ 

		return array(
			"NombrePrograma" 			=>	"Ingeniería Presidencial",
			"NombreProgramaUC" 			=>	"INGENIERÍA PRESIDENCIAL",
			"TituloEntregado"			=>	"Ingeniero(a) Presidencial",
			"Facultad" 					=> 	"Facultad Ingenierías",
			"FacultadCodigo"			=>	"FACING",
			"TipoPrograma"				=>	"PREGRADO",
			"CodigoNIE"					=>	"86229",
			"PlanEstudios"				=>	"Plan2",
			"NumeroSemestres"			=>	7,
			"TotalAsignaturas"			=>	71,
			"CreditosSemestres"			=> array(39,46,39,27,32,40,34),
			"TotalCreditos"				=> 257,
			"CreditosMatriculaMin"		=> 10,
			"CreditosMatriculaMax"		=> 27,
			"CreditosMatriculaOpt"		=> 32,
			"CreditosMatriculaE"		=> 151,
			"Asignaturas"				=>	array(
											array(291,292,293,125,126,118,101,106,108,109),
                							array(294,295,296,297,298,299,2910,134,1410,102),
                							array(2911,2912,2913,2914,2915,2916,2917,2918,103,107),
                							array(2919,2920,2921,104,164,1613,1620,1621,1622,1623),
                							array(2922,2923,2924,2925,2926,2927,105,1719,1814,1820),
                							array(2928,2929,2930,2931,2932,2933,2934,2135,2241,1010),
                							array(2935,2936,2937,2938,2939,2940,2941,2942,2431,2229)
										),
			"AsignaturasElectivas"		=> array(2944,2945,2946,2947,2948,2949,2950,2951,2952),
			"TipoPIN"					=> "PRE",
			"PermisoCancelacionExtra"	=> FALSE
		);
	}
} 

//Funciones generales
class programasInformacion_AppGeneral{

	public function derivarProposito($codigo){
		switch($codigo){
			//FACULTAD INGENIERÍAS
				case "PRESID":
				case 86229:
					$retorno = "Formar mísero-profesionales capaces de realizar procesos de adecuación de las demás personas o de sí mismos para obtener o asesorar cargos políticos leves hasta altos como una presidencia, teniendo en cuenta el pueblo y sus características, así también el poder desempeñar una correcta presidencia al más estilo colombiano." ;
				break;

				
			//NO FACULTAD NO NOMBRE
			default:
				$retorno = "No existe finalidad definida de este programa." ;
			break;
		}

		return $retorno;
	}

	public function derivarDatos($codigo){
		//Codigo se interpreta por código NIE o código literal

		switch($codigo){
				case "PRESID":
				case 86229:
					$retorno = programasInformacion_FacultadIngenierias::IngenieriaPresidencial();
				break;

				
			default:
				$retorno = "NULO";
			break;
		}

		return $retorno;
	}
}

?>
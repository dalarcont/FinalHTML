<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */

#require '../../divsys/Materias.php';
#$Asignatura="$MATCODE - $MateriaNombre";

switch ($MATCODE) {

	#MÓDULO 1

#Al ser asignaturas sin requerimientos no es necesario configurarlas.
	#También aplica para asignaturas de otros módulos que no tienen requerimientos

	#MÓDULO 2

	case 'MGB7':
		$MatType="1R";
		$Mat1="MGB6";
		
		break;

	case 'THO26':
	case 'THO27':
		$MatType="1R";
		$Mat1="THO13";
		
		break;

	case 'THO29':
		$MatType="2R";
		$Mat1="THO14";
		$Mat2="THO15";
		
		break;

	#MÓDULO 3

	case 'THO317':
		$MatType="1R";
		$Mat1="THO11";
		
		break;

	case 'THO315':
	case 'THO316':
		$MatType="1R";
		$Mat1="THO29";
		
		break;
	
	#MÓDULO 4

	case 'THO420':
		$MatType="1R";
		$Mat1="MGB7";
		
		break;

	case 'THO419':
		$MatType="1R";
		$Mat1="THO310";
		
		break;

	case 'THO421':
		$MatType="2R";
		$Mat1="THO312";
		$Mat2="THO315";
		
		break;

	#MÓDULO 5

	case 'THO529':
		$MatType="1R";
		$Mat1="THO420";
		
		break;

	case 'THO525':
		$MatType="1R";
		$Mat1="THO418";
		
		break;

	case 'ISX631':
	case 'THO528':
		$MatType="1R";
		$Mat1="ISX418";
		
		break;

	case 'THO524':
		$MatType="1R";
		$Mat1="THO422";
		
		break;


	
	default:
		$MatType="NR";
		
		break;
}
?>
<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */


switch ($MATCODE) {

	#MÓDULO 1

#Al ser asignaturas sin requerimientos no es necesario configurarlas.
	#También aplica para asignaturas de otros módulos que no tienen requerimientos

	#MÓDULO 2

	case 'BGB26':
		$MatType="2R";
		$Mat1="BGB12";
		$Mat2="BGB13";
		
		break;

	case 'BGB28':
		$MatType="1R";
		$Mat1="BGB15";
		
		break;

	
	default:
		$MatType="NR";
		
		break;
}
?>

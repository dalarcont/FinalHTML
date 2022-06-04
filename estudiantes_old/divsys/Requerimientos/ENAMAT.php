<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */

switch ($MATCODE) {

	#MÓDULO 1

#Al ser asignaturas sin requerimientos no es necesario configurarlas.
	#También aplica para asignaturas de otros módulos que no tienen requerimientos

	#MÓDULO 2

	case 'MEM25':
		$MatType="1R";
		$Mat1="MEM13";
		
		break;

	case 'MEM26':
	case 'MEM27':
		$MatType="1R";
		$Mat1="MEM14";
		
		break;


	#MÓDULO 3

	case 'MEM310':
		$MatType="1R";
		$Mat1="MEM25";
		
		break;

	case 'MEM312':
		$MatType="1R";
		$Mat1="MEM13";
		
		break;

	case 'MEM38':
		$MatType="1R";
		$Mat1="MEM26";
		
		break;

	case 'MEM39':
		$MatType="1R";
		$Mat1="MEM27";
		
		break;

	#MÓDULO 4

	case 'MEM413':
		$MatType="1R";
		$Mat1="MEM11";
		
		break;

	case 'MEM416':
	case 'MEM417':
		$MatType="1R";
		$Mat1="MEM310";
		
		break;


	case 'MEM414':
	case 'MEM415':
		$MatType="1R";
		$Mat1="MEM311";
		
		break;
	
	default:
		$MatType="NR";
		
		break;
}
?>

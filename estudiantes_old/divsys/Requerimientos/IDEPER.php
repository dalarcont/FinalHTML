<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */


switch ($MATCODE) {

	#MÓDULO 1

#Al ser asignaturas sin requerimientos no es necesario configurarlas.
	#También aplica para asignaturas de otros módulos que no tienen requerimientos

	#MÓDULO 2

	case 'TIP28':
		$MatType="1R";
		$Mat1="TIP12";
		
		break;

	case 'TIP29':
		$MatType="1R";
		$Mat1="TIP13";
		
		break;

	case 'TIP210':
		$MatType="1R";
		$Mat1="TIP14";
		
		break;

	#MÓDULO 3

	case 'TIP314':
		$MatType="1R";
		$Mat1="TIP27";
		
		break;

	case 'TIP319':
		$MatType="1R";
		$Mat1="TIP210";
		
		break;

	case 'TIP320':
		$MatType="2R";
		$Mat1="TIP211";
		$Mat2="TIP212";
		
		break;
	
	#MÓDULO 4

	case 'TIP421':
	case 'TIP422':
		$MatType="1R";
		$Mat1="TIP319";
		
		break;

	case 'TIP423':
		$MatType="2R";
		$Mat1="TIP315";
		$Mat2="TIP316";
		
		break;

	#MÓDULO 5

	case 'TIP530':
		$MatType="2R";
		$Mat1="TIP421";
		$Mat2="TIP422";
		
		break;

	case 'TIP528':
		$MatType="1R";
		$Mat1="TIP424";
		
		break;
	
	default:
		$MatType="NR";
		
		break;
}
?>

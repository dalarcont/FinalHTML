<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */


switch ($MATCODE) {

	#MÓDULO 1

#Al ser asignaturas sin requerimientos no es necesario configurarlas.
	#También aplica para asignaturas de otros módulos que no tienen requerimientos

	#MÓDULO 2

	case 'THE27':
		$MatType="2R";
		$Mat1="THE11";
		$Mat2="THE12";
		
		break;

	case 'THE26':
		$MatType="1R";
		$Mat1="THE13";
		
		break;

	case 'ISX26':
		$MatType="1R";
		$Mat1="ISX12";
		
		break;

	case 'ISX27':
		$MatType="1R";
		$Mat1="ISX13";
		
		break;

	case 'IFZ28':
		$MatType="1R";
		$Mat1="IFZ16";
		
		break;

	#MÓDULO 3

	case 'ISX310':
		$MatType="1R";
		$Mat1="ISX26";
		
		break;

	case 'THE38':
		$MatType="2R";
		$Mat1="ISX26";
		$Mat2="ISX27";
		
		break;

	case 'THE310':
		$MatType="1R";
		$Mat1="IFZ28";
		
		break;
	
	#MÓDULO 4

	case 'ISX632':
		$MatType="1R";
		$Mat1="ISX419";
		
		break;

	case 'MGB7':
		$MatType="1R";
		$Mat1="MGB6";
		
		break;

	#MÓDULO 5

	case 'THE516':
		$MatType="1R";
		$Mat1="THE412";
		
		break;

	case 'THE514':
	case 'TDH416':
		$MatType="1R";
		$Mat1="MGB7";
		
		break;

	case 'THE517':
		$MatType="1R";
		$Mat1="MGB1";
		
		break;

	
	default:
		$MatType="NR";
		break;
}
?>

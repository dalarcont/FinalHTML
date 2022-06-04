<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */


switch ($MATCODE) {

	#MÓDULO 1

#Al ser asignaturas sin requerimientos no es necesario configurarlas.
	#También aplica para asignaturas de otros módulos que no tienen requerimientos

#MÓDULO 2

	
	case 'MIA26':
		$MatType="1R";
		$Mat1="MIA12";
		
		break;

	case 'MIA27':
		$MatType="2R";
		$Mat1="MIA12";
		$Mat2="MIA15";
		
		break;

	case 'MIA28':
		$MatType="2R";
		$Mat1="MIA13";
		$Mat2="MIA14";
		
		break;

#MÓDULO 3

	case 'MIA311':
		$MatType="2R";
		$Mat1="MIA26";
		$Mat2="MIA27";
		
		break;

	case 'MIA312':
		$MatType="1R";
		$Mat1="MIA210";
		
		break;

	case 'MIA313':
		$MatType="1R";
		$Mat1="MIA28";
		
		break;

	case 'MIA316A':
	case 'MIA316B':
		$MatType="1R";
		$Mat1="MIA29";
		
		break;
#MÓDULO 4

	case 'MIA417':
		$MatType="2R";
		$Mat1="MIA314";
		$Mat2="MIA315";
		
		break;

	case 'MIA418':
	case 'MIA419':
		$MatType="1R";
		$Mat1="MIA313";
		
		break;

	case 'MIA421':
	case 'MIA422':
		$MatType="1R";
		$Mat1="MIA312";
		
		break;

	case 'MIA423':
		$MatType="1R";
		$Mat1="MIA11";
		
		break;

	default:
		$MatType="NR";
		
		break;
}
?>

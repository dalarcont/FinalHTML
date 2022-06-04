<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */


switch ($MATCODE) {

	#MÓDULO 1

#Al ser asignaturas sin requerimientos no es necesario configurarlas.
	#También aplica para asignaturas de otros módulos que no tienen requerimientos

	#MÓDULO 2

	case 'MGB7':
		$MatType="1R";
		$Mat1="MGB6";
		
		break;

	case 'IFZ532':
		$MatType="1R";
		$Mat1="IFZ11";
		
		break;
	
	case 'IFR22':
		$MatType="1R";
		$Mat1="IFR11";
		
		break;

	#MÓDULO 3

	case 'IFR310':
	case 'IFR311':
		$MatType="1R";
		$Mat1="IFR22";
		
		break;

	case 'IFR35':
		$MatType="1R";
		$Mat1="IFR23";
		
		break;

	case 'IFR36':
		$MatType="1R";
		$Mat1="IFR24";
		
		break;

	#MÓDULO 4

	case 'TFP24':
		$MatType="1R";
		$Mat1="IFR37";
		
		break;

	case 'IFR415':
		$MatType="2R";
		$Mat1="IFR37";
		$Mat2="BMI11";
		
		break;

	case 'IFR416':
		$MatType="1R";
		$Mat1="IFR310";
		
		break;

	#MÓDULO 5

	case 'IFR522':
		$MatType="1R";
		$Mat1="IFR415";
		
		break;

	case 'IFR520':
		$MatType="1R";
		$Mat1="IFR310";
		
		break;

	case 'THE310':
		$MatType="1R";
		$Mat1="IFR35";
		
		break;

	#MÓDULO 6

	case 'IFR624':
		$MatType="1R";
		$Mat1="IFZ532";
		
		break;

	case 'IFR625':
		$MatType="1R";
		$Mat1="IFR416";
		
		break;

	case 'IFR627':
		$MatType="1R";
		$Mat1="IFR520";
		
		break;

	case 'IFR626':
		$MatType="1R";
		$Mat1="IFR35";
		
		break;


	#MÓDULO 7

	case 'IFR728':
		$MatType="2R";
		$Mat1="IFR624";
		$Mat2="IFR625";
		
		break;

	case 'ISX526':
		$MatType="1R";
		$Mat1="ISX528";
		
		break;

	case 'ISX418':
	case 'ISX15':
		$MatType="1R";
		$Mat1="IFR517";
		
		break;

	case 'IFR729':
	case 'IFR730':
		$MatType="1R";
		$Mat1="IFR521";
		
		break;

	case 'IFR732':
		$MatType="1R";
		$Mat1="IFR39";
		
		break;
	
	default:
		$MatType="NR";
		
		break;
}
?>

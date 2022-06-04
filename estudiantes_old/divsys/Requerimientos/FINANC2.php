<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */



/* Este código es para obtener los datos a mostrar en el apartado de estado de la asignatura seleccionada en el plan de estudios */
switch ($MATCODE) {

	#MÓDULO 0
		case 'IFZ11':
		case 'MGB1':
		$MatType="1R";
		$Mat1="MGB0I";
		break;

	#MÓDULO 1
		case 'IFZ12':
		case 'IFZ14':
		case 'IFZ16':
		case 'IFZ15':
		case 'IFZ13':
		$MatType="2R";
		$Mat1="IFZ11";
		$Mat2="MGB1";
		break;

	#MÓDULO 2

	case 'IYO26':
		$MatType="1R";
		$Mat1="IFZ14";
		
		break;

	case 'MGB2':
		$MatType="1R";
		$Mat1="MGB1";
		
		break;

	case 'IFZ28':
		$MatType="1R";
		$Mat1="IFZ16";
		
		break;

	case 'IFZ210':
		$MatType="1R";
		$Mat1="IFZ13";
		
		break;


	#MÓDULO 3

	case 'IFZ312':
		$MatType="1R";
		$Mat1="IFZ29";
		
		break;

	case 'IFZ313':
		$MatType="1R";
		$Mat1="IFZ210";
		
		break;

	#MÓDULO 4

	case 'IFZ423':
	case 'IFZ425':
		$MatType="1R";
		$Mat1="IFZ318";
		
		break;

	case 'IFZ421':
		$MatType="2R";
		$Mat1="IFZ312";
		$Mat2="IFZ313";
		
		break;

	case 'IFZ422':
		$MatType="1R";
		$Mat1="IFZ27";
		
		break;

	#MÓDULO 5

	case 'IFZ530':
		$MatType="1R";
		$Mat1="IFZ11";
		
		break;

	case 'IFZ531':
		$MatType="1R";
		$Mat1="IFZ12";
		
		break;

	case 'MGB3':
		$MatType="1R";
		$Mat1="MGB2";
		
		break;

	case 'IFZ528':
		$MatType="1R";
		$Mat1="IFZ420";
		
		break;

	case 'IFZ529':
		$MatType="1R";
		$Mat1="IFZ421";
		
		break;

	case 'IFZ526':
		$MatType="1R";
		$Mat1="IFZ27";
		
		break;

	#MÓDULO 6

	case 'MGB4':
		$MatType="1R";
		$Mat1="MGB3";
		
		break;


	#MÓDULO 7

	case 'IFZ739':
		$MatType="1R";
		$Mat1="MGB8";
		
		break;

	case 'IFZ740':
	case 'IFZ741':
		$MatType="1R";
		$Mat1="IFZ531";
		
		break;

	case 'MGB5':
		$MatType="1R";
		$Mat1="MGB4";
		
		break;

	case 'TFP410':
		$MatType="1R";
		$Mat1="IFZ528";
		
		break;

	case 'IFZ738':
		$MatType="1R";
		$Mat1="IFZ532";
		
		break;

	case 'IFZ736':
		$MatType="1R";
		$Mat1="IFZ526";
		
		break;
	
	default:
		$MatType="NR";
		
		break;
}
?>

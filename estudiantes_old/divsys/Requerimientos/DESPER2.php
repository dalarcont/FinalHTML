<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */

$Asignatura="$MATCODE - $MateriaNombre";

switch ($MATCODE) {

	#MÓDULO 0
	case 'IDP11':
	case 'MGB1':
		$MatType="1R";
		$Mat1="MGB0I";
		break;

	#MÓDULO 1

	case 'IFZ12':
	case 'MGB6':
	case 'IDP13':
	case 'IDP12':
	$MatType="2R";
	$Mat1="IDP11";
	$Mat2="MGB1";
	break;


	#MÓDULO 2
	case 'MGB7':
		$MatType="1R";
		$Mat1="MGB6";
		
		break;

	case 'IDP25':
		$MatType="1R";
		$Mat1="IDP12";
		
		break;

	case 'IFZ531':
		$MatType="2R";
		$Mat1="IFZ12";
		$Mat2="IDP11";
		
		break;

	#MÓDULO 3
		case 'MGB2':
		$MatType="1R";
		$Mat1="MGB1";
		break;

	case 'IDP36':
	case 'IDP38':
		$MatType="1R";
		$Mat1="IDP25";
		
		break;

	case 'IDP410':
		$MatType="1R";
		$Mat1="IFZ531";
		
		break;

	case 'IDP411':
		$MatType="1R";
		$Mat1="IDP25";
		
		break;

	case 'IDP514':
	case 'MGB8':
		$MatType="1R";
		$Mat1="IDP410";
		
		break;

	case 'IDP516':
		$MatType="1R";
		$Mat1="IDP411";
		
		break;

	case 'IDP515':
		$MatType="1R";
		$Mat1="IDP412";
		
		break;

	#MÓDULO 4

	case 'IDP617':
	case 'IDP721':
		$MatType="1R";
		$Mat1="IDP514";
		
		break;

	case 'IDP619':
		$MatType="2R";
		$Mat1="MGB8";
		$Mat2="TIP320";
		
		break;

	case 'IDP618':
		$MatType="2R";
		$Mat1="IDP516";
		$Mat2="IDP515";
		
		break;

	case 'IDP723':
		$MatType="1R";
		$Mat1="IDP516";
		
		break;



	#MÓDULO 5

	case 'IDP724':
		$MatType="1R";
		$Mat1="IDP618";
		
		break;

	case 'IDP722':
		$MatType="1R";
		$Mat1="IDP515";
		
		break;
	
	default:
		$MatType="NR";
		
		break;
}
?>

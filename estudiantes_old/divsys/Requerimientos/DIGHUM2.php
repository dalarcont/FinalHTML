<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */

switch ($MATCODE) {

	#MÓDULO 0

	case 'MGB6':
	case 'TDH11':
	$MatType="1R";
	$Mat1="MGB0T";
	break;

	#MÓDULO 1

	case 'TDH12':
	case 'IYO14':
	$MatType="2R";
	$Mat1="MGB6";
	$Mat2="TDH11";
	break;

	#MÓDULO 2

	case 'MGB7':
		$MatType="1R";
		$Mat1="MGB6";
		
		break;

	case 'TDH28':
		$MatType="1R";
		$Mat1="TDH12";
		
		break;

	case 'TDH27':
		$MatType="1R";
		$Mat1="TDH11";
		
		break;


	#MÓDULO 3

	case 'TDH312':
		$MatType="1R";
		$Mat1="TDH28";
		
		break;

	case 'TDH313':
		$MatType="2R";
		$Mat1="TDH25";
		$Mat2="TDH26";
		
		break;

	case 'TDH39':
		$MatType="1R";
		$Mat1="TDH23";
		
		break;
	
	#MÓDULO 4

	case 'TDH414':
	case 'TDH418':
		$MatType="1R";
		$Mat1="TDH311";
		
		break;

	case 'TDH415':
		$MatType="2R";
		$Mat1="TDH312";
		$Mat2="TDH313";
		
		break;
	

	#MÓDULO 5

	case 'TDH520':
	case 'TDH522':
		$MatType="1R";
		$Mat1="TDH414";
		
		break;

	case 'TDH523':
		$MatType="1R";
		$Mat1="TDH415";
		
		break;	
	
	default:
		$MatType="NR";
		
		break;
}
?>

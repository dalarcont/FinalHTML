<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */


switch ($MATCODE) {

	#MÓDULO 0
	case 'THE11':
	case 'MGB1':
	$MatType="1R";
	$Mat1="MGB0T";
	break;

	#MÓDULO 1
	case 'THE12':
	case 'THE13':
	case 'ISX12':
	case 'ISX13':
	case 'IFZ16':
	case 'IFZ314':
	case 'THE14':
	$MatType="2R";
	$Mat1="THE11";
	$Mat2="MGB1";
	break;
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

<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */


switch ($MATCODE) {

	#MÓDULO 0
	case 'MGB1':
	case 'TFP11':
		$MatType="1R";
		$Mat1="MGB0T";
		break;

	#MÓDULO 1
	case 'IFZ420':
	case 'IFZ16':
	case 'IFZ29':
	case 'IFZ13':
	case 'IFZ736':
	$MatType="2R";
	$Mat1="MGB1";
	$Mat2="TFP11";
	break;
	#MÓDULO 2

	case 'IFZ528':
		$MatType="1R";
		$Mat1="IFZ420";
		
		break;

	case 'IFZ28':
		$MatType="1R";
		$Mat1="IFZ16";
		
		break;

	case 'IFZ312':
		$MatType="1R";
		$Mat1="IFZ29";
		
		break;

	case 'TFP23':
		$MatType="1R";
		$Mat1="TFP11";
		
		break;


	#MÓDULO 3

	case 'IFZ314':
	case 'IFZ315':
		$MatType="1R";
		$Mat1="IFZ28";
		
		break;

	case 'TFP35':
	case 'TFP36':
		$MatType="1R";
		$Mat1="IFZ312";
		
		break;

	case 'IFZ210':
		$MatType="1R";
		$Mat1="IFZ13";
		
		break;

	case 'TFP38':
		$MatType="1R";
		$Mat1="TFP23";
		
		break;
	
	#MÓDULO 4

	case 'IFZ317':
	case 'IFZ318':
		$MatType="1R";
		$Mat1="IFZ314";
		
		break;

	#MÓDULO 5

	case 'TFP518':
		$MatType="2R";
		$Mat1="IFZ318";
		$Mat2="TFP49";
		
		break;

	case 'TFP514':
		$MatType="1R";
		$Mat1="IFZ739";
		
		break;

	case 'TFP519':
		$MatType="2R";
		$Mat1="IFZ739";
		$Mat2="TFP410";
		
		break;

	case 'TFP513':
		$MatType="1R";
		$Mat1="TFP38";
		
		break;
	
	default:
		$MatType="NR";
		
		break;
}
?>

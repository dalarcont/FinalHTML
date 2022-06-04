<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */


switch ($MATCODE) {

	#MÓDULO 1

#Al ser asignaturas sin requerimientos no es necesario configurarlas.
	#También aplica para asignaturas de otros módulos que no tienen requerimientos

	#MÓDULO 2

	case 'EFP25':
		$MatType="1R";
		$Mat1="EFP11";
		
		break;

	case 'EFP27':
		$MatType="1R";
		$Mat1="EFP14";
		
		break;

	case 'EFP28':
	case 'EFP29':
		$MatType="1R";
		$Mat1="EFP13";
		
		break;


	#MÓDULO 3

	case 'EFP313':
		$MatType="1R";
		$Mat1="EFP12";
		
		break;

	case 'EFP310':
		$MatType="2R";
		$Mat1="EFP28";
		$Mat2="EFP29";
		
		break;

	case 'EFP312':
		$MatType="1R";
		$Mat1="EFP26";
		
		break;


	#MÓDULO 4

	case 'EFP416':
		$MatType="1R";
		$Mat1="EFP313";
		
		break;

	case 'EFP414':
		$MatType="1R";
		$Mat1="EFP311";
		
		break;

	case 'EFP415':
		$MatType="1R";
		$Mat1="EFP310";
		
		break;
	
	default:
		$MatType="NR";
		
		break;
}
?>

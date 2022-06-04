<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */


switch ($MATCODE) {

	#MÓDULO 1

#Al ser asignaturas sin requerimientos no es necesario configurarlas.
	#También aplica para asignaturas de otros módulos que no tienen requerimientos

	#MÓDULO 2

	case 'ESX26':
		$MatType="1R";
		$Mat1="ESX14";
		
		break;

	case 'ESX29':
		$MatType="1R";
		$Mat1="ESX15";
		
		break;


	#MÓDULO 3

	case 'ESX314':
		$MatType="2R";
		$Mat1="ESX11";
		$Mat2="ESX12";
		
		break;

	case 'ESX315':
		$MatType="1R";
		$Mat1="ESX13";
		
		break;

	case 'ESX312':
		$MatType="1R";
		$Mat1="ESX28";
		
		break;

	case 'ESX311':
		$MatType="1R";
		$Mat1="ESX29";
		
		break;

	case 'ESX313':
		$MatType="1R";
		$Mat1="ESX210";
		
		break;

	case 'ESX316':
		$MatType="1R";
		$Mat1="ESX15";
		
		break;


	#MÓDULO 4

	case 'ESX417':
		$MatType="1R";
		$Mat1="ESX312";
		
		break;

	case 'ESX418':
	case 'ESX419':
		$MatType="1R";
		$Mat1="ESX311";
		
		break;
	
	default:
		$MatType="NR";
		
		break;
}
?>

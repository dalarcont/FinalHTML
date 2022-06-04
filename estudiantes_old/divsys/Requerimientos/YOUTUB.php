<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */


switch ($MATCODE) {

	#MÓDULO 1

#Al ser asignaturas sin requerimientos no es necesario configurarlas.
	#También aplica para asignaturas de otros módulos que no tienen requerimientos

	#MÓDULO 2

	case 'IYO27':
		$MatType="1R";
		$Mat1="IYO11";
		
		break;

	#MÓDULO 3

	case 'IYO314':
		$MatType="1R";
		$Mat1="IYO14";
		
		break;

	case 'IYO315':
		$MatType="2R";
		$Mat1="IYO28";
		$Mat2="IYO29";
		
		break;
	
	#MÓDULO 4

	case 'IYO417':
		$MatType="1R";
		$Mat1="IYO210";
		
		break;

	case 'MGB7':
		$MatType="1R";
		$Mat1="MGB6";
		
		break;

	case 'IFZ531':
		$MatType="1R";
		$Mat1="IFZ12";
		
		break;

	case 'IYO416':
		$MatType="1R";
		$Mat1="IYO15";
		
		break;

	case 'IYO418':
		$MatType="1R";
		$Mat1="IYO311";
		
		break;

	#MÓDULO 5

	case 'IYO524':
		$MatType="1R";
		$Mat1="ISX418";
		
		break;

	case 'IYO525':
		$MatType="1R";
		$Mat1="IYO419";
		
		break;

	#MÓDULO 6



	#MÓDULO 7

	case 'IYO733':
		$MatType="1R";
		$Mat1="IYO417";
		
		break;

	case 'IYO734':
		$MatType="1R";
		$Mat1="IYO521";
		
		break;

	case 'IYO732':
		$MatType="1R";
		$Mat1="IYO525";
		
		break;

	case 'BSI29':
		$MatType="1R";
		$Mat1="IYO626";
		
		break;

	case 'IYO738':
		$MatType="2R";
		$Mat1="IYO627";
		$Mat2="IYO629";
		
		break;

	case 'IYO735':
		$MatType="1R";
		$Mat1="IYO630";
		
		break;

	case 'IYO737':
		$MatType="1R";
		$Mat1="IYO631";
		
		break;
	
	default:
		$MatType="NR";
		
		break;
}
?>

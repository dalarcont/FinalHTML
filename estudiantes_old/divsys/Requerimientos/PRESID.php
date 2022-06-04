<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */


switch ($MATCODE) {

	#Módulo 1
	#Al ser asignaturas sin requerimientos no es necesario configurarlas.
	#También aplica para asignaturas de otros módulos que no tienen requerimientos

	#Módulo 2
		case 294:
			$MatType="1R";
			$Mat1=291;
		break;

		case 295:
			$MatType="1R";
			$Mat1=292;
		break;

		case 296:
			$MatType="1R";
			$Mat1=293;
		break;

		case 102:
			$MatType="1R";
			$Mat1=101;
		break;

	#Módulo 3
		case 2911:
			$MatType="1R";
			$Mat1=2910;
		break;

		case 2912:
			$MatType="1R";
			$Mat1=299;
		break;

		case 2913:
			$MatType="1R";
			$Mat1=297;
		break;

		case 2914:
			$MatType="1R";
			$Mat1=299;
		break;

		case 2915:
			$MatType="1R";
			$Mat1=298;
		break;

		case 2916:
			$MatType="2R";
			$Mat1=125;
			$Mat2=126;
		break;

		case 2917:
			$MatType="1R";
			$Mat1=294;
		break;

		case 103:
			$MatType="1R";
			$Mat1=102;
		break;

		case 107:
			$MatType="1R";
			$Mat1=106;
		break;

	#Módulo 4

		case 2919:
			$MatType="1R";
			$Mat1=2911;
		break;

		case 2920:
			$MatType="1R";
			$Mat1=2912;
		break;

		case 2921:
			$MatType="1R";
			$Mat1=2917;
		break;

		case 104:
			$MatType="1R";
			$Mat1=103;
		break;

	#Módulo 5

		case 2922:
			$MatType="1R";
			$Mat1=2921;
		break;

		case 2924:
			$MatType="1R";
			$Mat1=2921;
		break;

		case 2925:
			$MatType="1R";
			$Mat1=295;
		break;

		case 2927:
			$MatType="1R";
			$Mat1=294;
		break;

		case 105:
			$MatType="1R";
			$Mat1=104;
		break;

		case 1719:
			$MatType="1R";
			$Mat1=1620;
		break;

		case 1814:
			$MatType="1R";
			$Mat1=107;
		break;

	#Módulo 6

		case 2928:
			$MatType="1R";
			$Mat1=2919;
		break;

		case 2929:
			$MatType="1R";
			$Mat1=2915;
		break;

		case 2930:
			$MatType="1R";
			$Mat1=1623;
		break;

		case 2931:
			$MatType="1R";
			$Mat1=2924;
		break;

		case 2932:
			$MatType="1R";
			$Mat1=2923;
		break;

		case 2933:
			$MatType="1R";
			$Mat1=2918;
		break;
		
		case 2934:
			$MatType="CRA";
			$CreditosRequeridosAprobados=169;
		break;

	#Módulo 7

		case 2935:
			$MatType="1R";
			$Mat1=2934;
		break;

		case 2936:
			$MatType="1R";
			$Mat1=2922;
		break;

		case 2937:
			$MatType="1R";
			$Mat1=2928;
		break;

		case 2939:
			$MatType="1R";
			$Mat1=2933;
		break;

		case 2940:
			$MatType="2R";
			$Mat1=2929;
			$Mat2=2932;
		break;

		case 2941:
			$MatType="2R";
			$Mat1=1621;
			$Mat2=1820;
		break;

		case 2942:
			$MatType="3R";
			$Mat1=2931;
			$Mat2=2914;
			$Mat3=2928;
		break;

		case 2229:
			$MatType="1R";
			$Mat1=2221;
		break;

		case 2944:
		case 2945:
		case 2946:
		case 2947:
		case 2948:
		case 2949:
		case 2950:
		case 2951:
		case 2952:
		$MatType="E";
		$CreditosRequeridosAprobados=150;
		break;
	
	default:
		$MatType="NR";
	break;
}
?>

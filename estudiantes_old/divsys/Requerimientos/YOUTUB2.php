<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */


switch ($MATCODE) {

	#MÓDULO 1

#Al ser asignaturas sin requerimientos no es necesario configurarlas.
	#También aplica para asignaturas de otros módulos que no tienen requerimientos

	#MÓDULO 2
		case 217:
			$MatType = "1R";
			$Mat1 = 211;
		break;

		case 2147:
			$MatType = "S";
			$Mat1 = 2146;
		break;

	#MÓDULO 3
		case 2141:
			$MatType="1R";
			$Mat1=2140;
		break;

		case 2115:
			$MatType="2R";
			$Mat1=218;
			$Mat2=219;
		break;
	
	#MÓDULO 4
		case 2117:
			$MatType="1R";
			$Mat1=2110;
		break;

		case 107:
			$MatType="1R";
			$Mat1=106;
		break;

		case 2116:
			$MatType="1R";
			$Mat1=215;
		break;

		case 2118:
			$MatType="1R";
			$Mat1=2111;
		break;

		case 2142:
			$MatType="1R";
			$Mat1=2141;
		break;

		case 2149:
			$MatType="2R";
			$Mat1=2140;
			$Mat2=2139;
		break;

	#MÓDULO 5
		case 2151:
			$MatType="2R";
			$Mat1=2149;
			$Mat2=149;
		break;

		case 2125:
			$MatType="1R";
			$Mat1=2119;
		break;

		case 2153:
			$MatType="3R";
			$Mat1=2111;
			$Mat2=2114;
			$Mat3=2116;
		break;

	#MÓDULO 6
		case 2143:
			$MatType="2R";
			$Mat1=2142;
			$Mat2=2149;
		break;

	#MÓDULO 7
		case 2144:
			$MatType="1R";
			$Mat1=2143;
		break;

		case 2132:
			$MatType="1R";
			$Mat1=2125;
		break;

		case 2133:
			$MatType="1R";
			$Mat1=2117;
		break;

		case 2135:
			$MatType="1R";
			$Mat1=2129;
		break;




	
	default:
		$MatType="NR";
		$Mat1=null;
		$Mat2=null;
		$Mat3=null;
		$CreditosRequeridosAprobados=null;
		
		break;
}
?>

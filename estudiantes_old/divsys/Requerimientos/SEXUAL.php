<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */

switch ($MATCODE) {

	#MÓDULO 1

#Al ser asignaturas sin requerimientos no es necesario configurarlas.
	#También aplica para asignaturas de otros módulos que no tienen requerimientos

	#MÓDULO 2

	case 236:
		$MatType="1R";
		$Mat1=232;
		
		break;

	case 237:
		$MatType="1R";
		$Mat1=233;
		
		break;


	#MÓDULO 3

	case 2310:
		$MatType="1R";
		$Mat1=236;
		
		break;

	case 2311:
		$MatType="1R";
		$Mat1=237;
		
		break;

	case 228:
		$MatType="2R";
		$Mat1=226;
		$Mat2=101;
		break;

	case 2219:
		$MatType="1R";
		$Mat1=101;
	break;

	case 2313:
		$MatType="1R";
		$Mat1=235;
		
		break;

	case 2314:
	case 2315:
		$MatType="1R";
		$Mat1=238;
	break;

	#MÓDULO 4

	case 2317:
		$MatType="1R";
		$Mat1=2310;
		
		break;

	case 2316:
		$MatType="1R";
		$Mat1=239;
		
		break;

	case 2322:
	case 2323:
		$MatType="1R";
		$Mat1=2315;
		
		break;

	#MÓDULO 5

	case 2328:
		$MatType="1R";
		$Mat1=2322;
		
		break;

	#MÓDULO 6

	case 2330:
		$MatType="1R";
		$Mat1=2325;
		
		break;

	case 2331:
		$MatType="1R";
		$Mat1=2318;
		
		break;

	case 2332:
		$MatType="1R";
		$Mat1=2319;
		
		break;

	case 2336:
		$MatType="1R";
		$Mat1=2323;
		
		break;

	case 2337:
		$MatType="1R";
		$Mat1=2321;
		
		break;

	case 2335:
		$MatType="1R";
		$Mat1=2324;
		
		break;

	#MÓDULO 7
		case 2233:
		$MatType="1R";
		$Mat1=101;
		break;
	case 2340:
		$MatType="1R";
		$Mat1=2316;
		
		break;

	case 2338:
		$MatType="1R";
		$Mat1=2330;
		
		break;

	case 2339:
		$MatType="1R";
		$Mat1=2333;
		
		break;

	case 2342:
		$MatType="1R";
		$Mat1=2331;
		
		break;

	case 2341:
		$MatType="1R";
		$Mat1=2313;
		
		break;

	case 2343:
		$MatType="3R";
		$Mat1=2337;
		$Mat2=2336;
		$Mat3=2335;	
		break;

	case 2345:
	$MatType="CRA";
	$CreditosRequeridosAprobados=169;			
	break;


	case 2346:
	case 2347:
	case 2348:
	case 2349:
	case 2350:
	case 2351:
	case 2352:
	case 2353:
	case 2354:
	case 2355:
	case 2355:
	case 2356:
	$MatType="E";
	$CreditosRequeridosAprobados=180;
	break;
	
	default:
		$MatType="NR";
	break;
}
?>

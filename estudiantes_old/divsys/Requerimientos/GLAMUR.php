<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */

switch ($MATCODE) {


	#MÓDULO 2
	case 'MGB7':
		$MatType="1R";
		$Mat1="MGB6";
	break;

	case 'TDH311':
	case 'IGM37':
		$MatType="1R";
		$Mat1="IGM12";
	break;

	case 'IGM23':
	case 'IGM36':
		$MatType="1R";
		$Mat1="IGM11";
	break;

	#MÓDULO 3
	case 'MGB2':
		$MatType="1R";
		$Mat1="MGB1";
	break;

	case 'IGM35':
	case 'IJV720':
		$MatType="1R";
		$Mat1="TDH311";
	break;

	#MÓDULO 4
	case 'IGM49':
		$MatType="1R";
		$Mat1="IGM35";
	break;

	case 'IGM410':
		$MatType="2R";
		$Mat1="IGM37";
		$Mat2="IGM36";
	break;

	#MÓDULO 5
	case 'IGM511':
	case 'IGM512':
		$MatType="2R";
		$Mat1="IGM49";
		$Mat2="IGM410";
	break;

	case 'IGM514':
		$MatType="2R";
		$Mat1="IDP24";
		$Mat2="IDP617";
	break;

	#MÓDULO 6
	case 'IGM615':
		$MatType="2R";
		$Mat1="IGM49";
		$Mat2="IGM514";
	break;

	case 'IGM616':
	case 'IGM618':
		$MatType="1R";
		$Mat1="IGM514";
	break;

	#MÓDULO 7
	case 'IGM722':
		$MatType="2R";
		$Mat1="IGM615";
		$Mat2="IGM616";
	break;

	case 'IGM721':
		$MatType="1R";
		$Mat1="IGM618";
	break;

	
	default:
		$MatType="NR";
	break;
}
?>
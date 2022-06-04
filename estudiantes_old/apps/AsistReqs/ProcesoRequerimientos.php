<?php


/* Archivo que define que proceso de registro de asignatura utilizar */

switch ($MatType) {
	case 'NR':
		#Asignatura no tiene requerimientos para ser cursada
		require 'RegistroSinRequerimiento.php';
		break;

	case '1R':
		#Asignatura tiene 1 requerimiento para ser cursada
		require '1Requerimiento.php';
		break;

	case '2R':
		#Asignatura tiene 2 requerimientos para ser cursada
		require '2Requerimientos.php';
		break;

	case 'BE':
		#Asignatura es base electiva
		require 'BaseElectiva.php';
		break;
	
	default:
		#No se define si la asignatura tiene o no requerimientos
		echo "Error: No se pudo definir si la asignatura indicada tiene o no requisitos para ser cursada... Intente de nuevo más tarde, si persiste el error comuníquelo con la División De Sistemas";
	break;
}

	?>
<?php

/*Universidad Falsa - División Superior de Sistemas Informáticos*/

/* Archivo de equivalencia de asignaturas */

/***

case CodigoNumerico: case CodigoLiteral: 
	$Equivalencias_arr = array (n1,n2,...,n);
break;

Donde n = cantidad de asignaturas equivalentes a la asignatura indicada, dichos elementos del arreglo son los códigos numéricos de la asignatura

Si la asignatura no tiene equivalencias simplemente se retorna FALSE

***/

switch ($MATCODE) {
	case 2932: case "IPR632":
		$Equivalencias_Exist = true;
		$Equivalencias_arr = array (108);
		break;

	case 101: case "MGB1":
		$Equivalencias_Exist = true;
		$Equivalencias_arr = array (1013,291);
		break;

	case 101: case "MGB1":
		$Equivalencias_Exist = true;
		$Equivalencias_arr = array (1013,1014);
		break;

	case 101: case "MGB1":
		$Equivalencias_Exist = true;
		$Equivalencias_arr = array (1013,1014);
		break;

	case 101: case "MGB1":
		$Equivalencias_Exist = true;
		$Equivalencias_arr = array (1013,1014);
		break;
	
	default:
		$Equivalencias_Exist = false ;
		break;
}







?>
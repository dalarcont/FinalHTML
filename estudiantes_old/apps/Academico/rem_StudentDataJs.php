<?php
/*** Universidad Falsa  - División Superior de Sistemas Informáticos ***/
/*Eliminar archivos JS de control de las asignaturas visualizadas en la malla curricular*/
//Recibir ID del estudiante
	$StdId=$_POST['estDat_Js'];
//Eliminar JS del plan de estudios del estudiante que se cargó
	unlink("ScriptsPdeE/StudentDataJS_$StdId.js");
?>
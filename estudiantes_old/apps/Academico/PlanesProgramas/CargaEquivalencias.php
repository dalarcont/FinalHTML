<?php
/*Universidad Falsa - División Superior de Sistemas Informáticos*/

/* Archivo de equivalencia de asignaturas */

/***********************************************************************************************************************/
$ArchivosJS=fopen("ScriptsPdeE/StudentDataJS_$ID.js","a");
	//Escribir la cabecera de propiedad intelectual
	/*fwrite($ArchivosJS,"/* Universidad Falsa 
/* División Superior de Sistemas Informáticos 
/* Archivo de datos de asignaturas equivalentes del estudiante: $ID 

");*/
//echo "<script>alert(",$MATCODE,");</script>";

require '../../divsys/MateriasEquivalencias.php';

if($Equivalencias_Exist==true){
//	echo "<script>alert('Existe equivalencias');</script>";

	for($c=0; $c<=(count($Equivalencias_arr)-1); $c++){
		$MATCODE = $Equivalencias_arr[$c];
		require '../../divsys/Materias.php';

		$Estado="* NO SE PUEDE CURSAR UNA EQUIVALENCIA";
		$Detalle="* Las equivalencias de esta asignaturas refieren a contenidos programáticos similares de una asignatura anterior del plan de estudios del programa o de otra asignatura de diferente programa.&#10 * Normalmente las equivalencias pueden aparecer aprobadas si el estudiante cursó dicha equivalencia como asignatura en un plan de estudios previo.&#10 * 0 créditos académicos.";
		$Color="#BDBDBD";
		$ColorTxt="#000000";
		$Cancelar=false; $Matricular=false;
		$MateriaNombreEquiv = ReduceNombre($MateriaNombre,15);
		$drawers = "
function drawAsignatura$MATCODE(){ $('#ContenedorEquivalencias').append('<br><center><span id=Added$MATCODE>&nbsp;<button class=btnAsgEquiv onclick=AsignaturaEquivalente$MATCODE()><b>$CodigoLiteral</b><br>$MateriaNombreEquiv</button></span></center>'); }";

		$AsignaturaAction = "
function AsignaturaEquivalente$MATCODE(){document.getElementById('ContenedorDatosAsignaturaSeleccionada').style.display='block';	var BoxCode=document.getElementById('ModInfoBoxCode');	var BoxNombre=document.getElementById('ModInfoBoxNombre');	var BoxColor=document.getElementById('ModInfoBoxColor');	var ModInfoName=document.getElementById('ModInfoAsignaturaNombre');	var ModInfoStatus=document.getElementById('ModInfoAsignaturaEstado');	var ModInfoDetalle=document.getElementById('ModInfoAsignaturaDetalle');	var SubmitCode=document.getElementById('MATCODE');	var valueBoxCode = '$CodigoLiteral';	var valueBoxNombre = '$MateriaNombre';	var valueBoxColor = '$Color';	var valueModInfoName = ' $CodigoLiteral - $MateriaNombre';	var valueModInfoStatus = ' $Estado';	var valueModInfoDetalle = ' $Detalle';	var valueSubmit = '$MATCODE';	BoxCode.innerHTML = valueBoxCode;	BoxNombre.innerHTML = valueBoxNombre;	BoxCode.style.color = '$ColorTxt';	BoxNombre.style.color = '$ColorTxt';	BoxColor.style.backgroundColor = valueBoxColor;	ModInfoName.value = valueModInfoName;	ModInfoStatus.value = valueModInfoStatus;	ModInfoDetalle.innerHTML = valueModInfoDetalle;}";

	fwrite($ArchivosJS,$drawers);
			
	fwrite($ArchivosJS,$AsignaturaAction);

	}


	
}
else
{
	/*Nothing*/
	//echo "<script>alert('No hay equivalencias');</script>";
	$Equivalencias_arr = false ;
}

?>
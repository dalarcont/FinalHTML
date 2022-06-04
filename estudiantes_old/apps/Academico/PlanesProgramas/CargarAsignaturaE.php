<?php
$PROGC=$_SESSION['PROGC'];
$Aplicativo=$_SESSION['APPTYPE'];

//Procesos para crear archivo JavaScript de tal manera que se guarden ahí los datos de las asignaturas del estudiante
	//Buscar el archivo para escribir al final, o en su defecto crearlo. Formato StudentDataJS Numero de identificación estudiante
	//$ArchivosJS=fopen("StudentDataJS$ID.js","w");
	$ArchivosJS=fopen("StudentDataElectivasJS.js","w");
	//Escribir la cabecera de propiedad intelectual
	fwrite($ArchivosJS,"/* Universidad Falsa */ 
/* División Superior de Sistemas Informáticos */
/* Archivo de datos de asignaturas del estudiante: $ID */");

/* PROCESO PARA ASIGNATURAS DEL PLAN DE ESTUDIOS DEL PROGRAMA */
for($i=0; $i<=count($Asignaturas)-1; $i++){
	#Leer en la base de datos de la DSSI los parámetros y datos internos de la asignatura indicada
	$MATCODE=$Asignaturas[$i]; $Codigo=$MATCODE;
	require '../../divsys/Materias.php'; 
	require '../../divsys/Requerimientos/'.$PROGC.'.php';
	require 'CargaAsignaturaMat.php';

	/*//if($Aplicativo=='PE'){ */ /*$Limites="//";}else{ require 'CargaAsignaturaMat.php'; }*/	
	if($Aplicativo=='PE'){
		//Cargar los scripts en manera de lectura
		fwrite($ArchivosJS,"
function CargarAsignatura$MATCODE(){document.getElementById('ContenedorDatosAsignaturaSeleccionada').style.display='block';	var BoxCode=document.getElementById('ModInfoBoxCode');	var BoxNombre=document.getElementById('ModInfoBoxNombre');	var BoxColor=document.getElementById('ModInfoBoxColor');	var ModInfoName=document.getElementById('ModInfoAsignaturaNombre');	var ModInfoStatus=document.getElementById('ModInfoAsignaturaEstado');	var ModInfoDetalle=document.getElementById('ModInfoAsignaturaDetalle');	var SubmitCode=document.getElementById('MATCODE');	var valueBoxCode = '$CodigoLiteral';	var valueBoxNombre = '$MateriaNombre';	var valueBoxColor = '$Color';	var valueModInfoName = ' $CodigoLiteral - $MateriaNombre';	var valueModInfoStatus = ' $Estado';	var valueModInfoDetalle = ' $Detalle';	var valueSubmit = '$MATCODE';	BoxCode.innerHTML = valueBoxCode;	BoxNombre.innerHTML = valueBoxNombre;	BoxCode.style.color = '$ColorTxt';	BoxNombre.style.color = '$ColorTxt';	BoxColor.style.backgroundColor = valueBoxColor;	ModInfoName.value = valueModInfoName;	ModInfoStatus.value = valueModInfoStatus;	ModInfoDetalle.innerHTML = valueModInfoDetalle;}");
	}
	else
	{
	//Cargar los script de manera de matrícula
		fwrite($ArchivosJS,"
function CargarAsignatura$MATCODE(){
document.getElementById('ContenedorDatosAsignaturaSeleccionada').style.display='block';var BoxCode=document.getElementById('ModInfoBoxCode');var BoxNombre=document.getElementById('ModInfoBoxNombre');var BoxColor=document.getElementById('ModInfoBoxColor');var ModInfoName=document.getElementById('ModInfoAsignaturaNombre');var ModInfoStatus=document.getElementById('ModInfoAsignaturaEstado');var ModInfoDetalle=document.getElementById('ModInfoAsignaturaDetalle');var SubmitCode=document.getElementById('MATCODE');var valueBoxCode = '$CodigoLiteral';var valueBoxNombre = '$MateriaNombre';var valueBoxColor = '$Color';var valueModInfoName = ' $CodigoLiteral - $MateriaNombre';var valueModInfoStatus = ' $Estado';var valueModInfoDetalle = ' $Detalle';var valueSubmit = '$MATCODE';BoxCode.innerHTML = valueBoxCode;BoxNombre.innerHTML = valueBoxNombre;BoxCode.style.color = '$ColorTxt';BoxNombre.style.color = '$ColorTxt';BoxColor.style.backgroundColor = valueBoxColor;ModInfoName.value = valueModInfoName;ModInfoStatus.value = valueModInfoStatus;ModInfoDetalle.innerHTML = valueModInfoDetalle; SubmitCode.value = valueSubmit;}");
	}
}//Cierre for

		
//unlink("StudentDataJS$ID.js");

//Tras haber escrito los script de JS en el archivo correspondiente al estudiante, indicarle al HTML que lea el archivo mencionado
echo "<script src='StudentDataElectivasJS.js'></script>";

?>
<?php
$Aplicativo=$_SESSION['APPTYPE'];
//Procesos para crear archivo JavaScript de tal manera que se guarden ahí los datos de las asignaturas del estudiante
	//Buscar el archivo para escribir al final, o en su defecto crearlo. Formato StudentDataJS Numero de identificación estudiante
	$ArchivosJS=fopen("ScriptsPdeE/StudentDataJS_$ID.js","w");
	//Escribir la cabecera de propiedad intelectual
	fwrite($ArchivosJS,"/* Universidad Falsa */ 
/* División Superior de Sistemas Informáticos */
/* Archivo de datos de asignaturas del estudiante: $ID */

");

/* PROCESO PARA ASIGNATURAS DEL PLAN DE ESTUDIOS DEL PROGRAMA */
for($i=0; $i<=count($Asignaturas)-1; $i++){
	#Leer en la base de datos de la DSSI los parámetros y datos internos de la asignatura indicada
	$MATCODE=$Asignaturas[$i]; $CodigoPrevio=$MATCODE;
	//Cargar equivalencias
	require 'CargaEquivalencias.php'; //Retorna una $MATCODE diferente por lo tanto se debe...:
	//CargaEquivalencias.php también retorna un array con los comandos de equivalencias a dibujar llamado $EquivDrawing;
	$MATCODE=$Asignaturas[$i];
	//Cargar parametros asignaturas del plan de estudios
	require '../../divsys/Materias.php'; 
	require '../../divsys/Requerimientos/'.$PROGC.'.php';

	require 'CargaAsignaturaMat.php';

//	echo "<script>alert(",$Equivalencias_arr,");</script>";

	//$DataJS = 
	
	if($Aplicativo=='PE'){

		if($Equivalencias_arr!=false){
			/*Existen equivalencias, generar los llamados a los dibujadores*/
			for($d=0; $d<=(count($Equivalencias_arr)-1); $d++){
				$EquivCode = $Equivalencias_arr[$d];
				$EquivDrawing = $EquivDrawing . "drawAsignatura$EquivCode();";
			}
		}
		else
		{
			$EquivDrawing = " document.getElementById('ContenedorEquivalencias').innerHTML = '';";
		}

		$DataJS = "
function CargarAsignatura$MATCODE(){".$EquivDrawing." document.getElementById('ContenedorEquivalenciasTitulo').innerHTML = '<center><b>EQUIVALENCIAS ".$CodigoLiteral."</b></center>'; document.getElementById('ContenedorDatosAsignaturaSeleccionada').style.display='block'; var BoxCode=document.getElementById('ModInfoBoxCode');	var BoxNombre=document.getElementById('ModInfoBoxNombre');	var BoxColor=document.getElementById('ModInfoBoxColor');	var ModInfoName=document.getElementById('ModInfoAsignaturaNombre');	var ModInfoStatus=document.getElementById('ModInfoAsignaturaEstado');	var ModInfoDetalle=document.getElementById('ModInfoAsignaturaDetalle');	var SubmitCode=document.getElementById('MATCODE');	var valueBoxCode = '$CodigoLiteral';	var valueBoxNombre = '$MateriaNombre';	var valueBoxColor = '$Color';	var valueModInfoName = ' $CodigoLiteral - $MateriaNombre';	var valueModInfoStatus = ' $Estado';	var valueModInfoDetalle = ' $Detalle';	var valueSubmit = '$MATCODE';	BoxCode.innerHTML = valueBoxCode;	BoxNombre.innerHTML = valueBoxNombre;	BoxCode.style.color = '$ColorTxt';	BoxNombre.style.color = '$ColorTxt';	BoxColor.style.backgroundColor = valueBoxColor;	ModInfoName.value = valueModInfoName;	ModInfoStatus.value = valueModInfoStatus;	ModInfoDetalle.innerHTML = valueModInfoDetalle;}";

		//$DataJS = $EquivDrawing . "$DataJS";

		//Cargar los scripts en manera de lectura
		fwrite($ArchivosJS,$DataJS);
		//echo "<script>alert(",$EquivDrawing,");</script>";
	}
	else
	{
	//Cargar los script de manera de matrícula
		if($Cancelar==true){$UnsetButton='block';}else{$UnsetButton='none';}
		if($Matricular==true){$SetButton='block';}else{$SetButton='none';}
		fwrite($ArchivosJS,"
function CargarAsignatura$MATCODE(){
document.getElementById('ContenedorDatosAsignaturaSeleccionada').style.display='block';var BoxCode=document.getElementById('ModInfoBoxCode');var BoxNombre=document.getElementById('ModInfoBoxNombre');var BoxColor=document.getElementById('ModInfoBoxColor');var ModInfoName=document.getElementById('ModInfoAsignaturaNombre');var ModInfoStatus=document.getElementById('ModInfoAsignaturaEstado');var ModInfoDetalle=document.getElementById('ModInfoAsignaturaDetalle');var SubmitCode=document.getElementById('MATCODE'); var SetButton=document.getElementById('setAsignatura'); var UnsetButton=document.getElementById('unsetAsignatura'); var valueBoxCode = '$CodigoLiteral';var valueBoxNombre = '$MateriaNombre';var valueBoxColor = '$Color';var valueModInfoName = ' $CodigoLiteral - $MateriaNombre';var valueModInfoStatus = ' $Estado';var valueModInfoDetalle = ' $Detalle';var valueSubmit = '$MATCODE';BoxCode.innerHTML = valueBoxCode;BoxNombre.innerHTML = valueBoxNombre;BoxCode.style.color = '$ColorTxt';BoxNombre.style.color = '$ColorTxt';BoxColor.style.backgroundColor = valueBoxColor;ModInfoName.value = valueModInfoName;ModInfoStatus.value = valueModInfoStatus;ModInfoDetalle.innerHTML = valueModInfoDetalle; SetButton.style.display= '$SetButton'; UnsetButton.style.display= '$UnsetButton'; SubmitCode.value = valueSubmit;}");
	}
}//Cierre for

/* PROCESO PARA ASIGNATURA OPTATIVA */
if($Optativa==TRUE){
	$getOpta="SELECT * FROM platformdata WHERE ID='$ID' AND PROGC IN('OPTA')";
		$doGO=mysqli_query($link, $getOpta);
		$rowOpta=mysqli_fetch_array($doGO);
		$MATCODE=$rowOpta['MAT'];
		$_SESSION['OptaCode']=$MATCODE;
		$OptaCode=$MATCODE;
		$MatType="NR";
		require '../../divsys/Materias.php';
		require 'CargaAsignaturaMat.php';
		if(!empty($OptaCode)){
			if($Aplicativo=='PE'){
			//Cargar el script de la optativa de manera de lectura
			fwrite($ArchivosJS,"
function CargarAsignatura$OptaCode(){document.getElementById('ContenedorDatosAsignaturaSeleccionada').style.display='block';	var BoxCode=document.getElementById('ModInfoBoxCode');	var BoxNombre=document.getElementById('ModInfoBoxNombre');	var BoxColor=document.getElementById('ModInfoBoxColor');	var ModInfoName=document.getElementById('ModInfoAsignaturaNombre');	var ModInfoStatus=document.getElementById('ModInfoAsignaturaEstado');	var ModInfoDetalle=document.getElementById('ModInfoAsignaturaDetalle');	var SubmitCode=document.getElementById('MATCODE');	var valueBoxCode = '$CodigoLiteral';	var valueBoxNombre = '$MateriaNombre';	var valueBoxColor = '$Color';	var valueModInfoName = ' OPTATIVA -  $CodigoLiteral - $MateriaNombre';	var valueModInfoStatus = ' $Estado';	var valueModInfoDetalle = ' $Detalle';	var valueSubmit = '$MATCODE';	BoxCode.innerHTML = valueBoxCode;	BoxNombre.innerHTML = valueBoxNombre;	BoxCode.style.color = '$ColorTxt';	BoxNombre.style.color = '$ColorTxt';	BoxColor.style.backgroundColor = valueBoxColor;	ModInfoName.value = valueModInfoName;	ModInfoStatus.value = valueModInfoStatus;	ModInfoDetalle.innerHTML = valueModInfoDetalle; }");
			}
			else
			{
			//Cargar el script de la optativa de manera de matrícula
				if($Cancelar==true){$UnsetButton='block';}else{$UnsetButton='none';}
				if($Matricular==true){$SetButton='block';}else{$SetButton='none';}
			fwrite($ArchivosJS,"
function CargarAsignatura$OptaCode(){document.getElementById('ContenedorDatosAsignaturaSeleccionada').style.display='block';	var BoxCode=document.getElementById('ModInfoBoxCode');	var BoxNombre=document.getElementById('ModInfoBoxNombre');	var BoxColor=document.getElementById('ModInfoBoxColor');	var ModInfoName=document.getElementById('ModInfoAsignaturaNombre');	var ModInfoStatus=document.getElementById('ModInfoAsignaturaEstado');	var ModInfoDetalle=document.getElementById('ModInfoAsignaturaDetalle');	var SubmitCode=document.getElementById('MATCODE');	var SetButton=document.getElementById('setAsignatura'); var UnsetButton=document.getElementById('unsetAsignatura'); var valueBoxCode = '$CodigoLiteral';	var valueBoxNombre = '$MateriaNombre';	var valueBoxColor = '$Color';	var valueModInfoName = ' OPTATIVA - $CodigoLiteral - $MateriaNombre';	var valueModInfoStatus = ' $Estado';	var valueModInfoDetalle = ' $Detalle';	var valueSubmit = '$MATCODE';	BoxCode.innerHTML = valueBoxCode;	BoxNombre.innerHTML = valueBoxNombre;	BoxCode.style.color = '$ColorTxt';	BoxNombre.style.color = '$ColorTxt';	BoxColor.style.backgroundColor = valueBoxColor;	ModInfoName.value = valueModInfoName;	ModInfoStatus.value = valueModInfoStatus;	ModInfoDetalle.innerHTML = valueModInfoDetalle; SetButton.style.display= '$SetButton'; UnsetButton.style.display= '$UnsetButton'; SubmitCode.value = valueSubmit;}");
			}
		}
		else{
			//No hay optativa
		}			
}


//Tras haber escrito los script de JS en el archivo correspondiente al estudiante, indicarle al HTML que lea el archivo mencionado
echo "<script src='ScriptsPdeE/StudentDataJS_$ID.js'></script>";

?>
<?php
session_start();
//Cargar variables de sesión
$ID=$_SESSION['ID'];
$PROGC=$_SESSION['PROGC'];
//Cargar variables de datos de conexión
require '../../divsys/umcdssictrl.php';
function ReduceNombre($cad,$cadN){
  //Reducir una cadena a mostrar solo sus primeros cadN dígitos
  $strToShort=str_split($cad,$cadN);
  $strToOut=$strToShort[0]."...";
  return $strToOut;
}

//Paraámetros de asignaturas
$MATCODE= $_POST['MatCodeN'];
$Matcode=$MATCODE;
function isElectiva($Matcode){
	switch ($Matcode) {
		#Electivas de Ingeniería Sexual
		case '2346': case '2347': case '2348': case '2349': case '2350': case '2351':
		case '2352': case '2353': case '2354': case '2355': case '2356':
		#Electivas de Ingeniería Presidencial
		case '2944': case '2945': case '2946': case '2947': case '2948':
		case '2949': case '2950': case '2951': case '2952':
		return TRUE;
		break;

		default:
			#No es una electiva
		return FALSE;
		break;
	}
}

require '../../divsys/DatosProgramas.php';
require '../../divsys/Materias.php';
require '../../divsys/MateriasPerCredits.php';
require '../../divsys/Requerimientos/'.$PROGC.'.php';


if(isElectiva($MATCODE)==TRUE){
		//Es una asignatura electiva la que se desea matricular
		$setMatricular="UPDATE platformdata SET PARAM='A',PARAM3='E' WHERE ID='$ID' AND MAT='$MATCODE' AND PROGC='$PROGC'";
		$doSM=mysqli_query($link, $setMatricular);
		//Cambiar los atributos de la asignatura en plan de estudios y en el módulo de datos
		/* Desactivar colores de las demás asignaturas */
			$BackMATCODE=$MATCODE;
			for($i=0;$i<=(count($AsignaturasElectiva)-1); $i++){
				if($AsignaturasElectiva[$i]!='$MATCODE'){
					$MATCODE=$AsignaturasElectiva[$i];
					//Asignatura diferente de la electiva adjudicada
					require '../../divsys/Materias.php';
					$Estado="* ASIGNATURA ELECTIVA NO SE PUEDE CURSAR";
					$Detalle="* La asignatura electiva no se puede cursar porque ya existe otra electiva matriculada.&#10 * $Creditos créditos académicos.";
					$Color="#FF0000";
					$ColorTxt="#FFFFFF";
					echo "<script>
					//Remover el botón de matrícula y añadir el botón de cancelación
						document.getElementById('setAsignatura').style.display='none';
						document.getElementById('unsetAsignatura').style.display='block';
					//Cambiar color background y texto en elemento <g> del plan de estudios
						var BoxPeColorCaja = document.getElementById('BoxPeColorCaja",$MATCODE,"');
						var BoxPeColorTexto = document.getElementById('BoxPeColorTexto",$MATCODE,"');
						BoxPeColorTexto.style.fill='",$ColorTxt,"';
						BoxPeColorCaja.style.fill='",$Color,"';
					//Cambiar color background y texto en ModInfoBox
						document.getElementById('ModInfoBoxColor').style.backgroundColor='",$Color,"';
						document.getElementById('ModInfoAsignaturaEstado').value = ' ",$Estado,"';
						document.getElementById('ModInfoAsignaturaDetalle').innerHTML = ' ",$Detalle,"';
						document.getElementById('ModInfoBoxCode').style.color = '",$ColorTxt,"';
						document.getElementById('ModInfoBoxNombre').style.color = '",$ColorTxt,"';
					//Nueva función con los datos del ajuste de matrícula realizado
					function CargarAsignatura",$MATCODE,"(){
					//Elementos
						document.getElementById('ContenedorDatosAsignaturaSeleccionada').style.display='block';
						var BoxCode=document.getElementById('ModInfoBoxCode');
						var BoxNombre=document.getElementById('ModInfoBoxNombre');
						var BoxColor=document.getElementById('ModInfoBoxColor');
						var ModInfoName=document.getElementById('ModInfoAsignaturaNombre');
						var ModInfoStatus=document.getElementById('ModInfoAsignaturaEstado');
						var ModInfoDetalle=document.getElementById('ModInfoAsignaturaDetalle');
						var SubmitCode=document.getElementById('MATCODE');
						var SetButton=document.getElementById('setAsignatura');
						var UnsetButton=document.getElementById('unsetAsignatura');
					//Contenidos a asignar
						var valueBoxCode = '",$CodigoLiteral,"';
						var valueBoxNombre = '",$MateriaNombre,"';
						var valueBoxColor = '",$Color,"';
						var valueModInfoName = ' ELECTIVA - ",$CodigoLiteral,"- ",$MateriaNombre,"';
						var valueModInfoStatus = ' ",$Estado,"';
						var valueModInfoDetalle = ' ",$Detalle,"';
						var valueSubmit = '",$MATCODE,"';
					//Ejecutar cambios
						BoxCode.innerHTML = valueBoxCode;
						BoxNombre.innerHTML = valueBoxNombre;
						BoxCode.style.color = '",$ColorTxt,"';
						BoxNombre.style.color = '",$ColorTxt,"';
						BoxColor.style.backgroundColor = valueBoxColor;
						ModInfoName.value = valueModInfoName;
						ModInfoStatus.value = valueModInfoStatus;
						ModInfoDetalle.innerHTML = valueModInfoDetalle;
						SubmitCode.value = valueSubmit;
						SetButton.style.display= 'none'; UnsetButton.style.display= 'none';
					}</script>";
				}
			}
		//Regresar MATCODE a su variable original
		$MATCODE=$BackMATCODE;
		require '../../divsys/Materias.php';
		$Detalle="* NO LA HAS INICIADO.&#10 * Esta asignatura electiva tiene $Creditos créditos.";
		$Estado="* ASIGNATURA ELECTIVA ESTÁ MATRICULADA";
		$Color="#FFFF00";
		$ColorTxt="#000000";
		$NombreAsg = ReduceNombre($MateriaNombre,12) ;
		/* Imprimir botón en el módulo de las asignaturas matriculadas */
	    echo "<script>
	        $('#Added_Init').before('<span id=Added$MATCODE>&nbsp;<button class=btnAsgMatric onclick=CargarAsignatura$MATCODE()><b>$CodigoLiteral</b><br>$NombreAsg</button></span>');
	    </script>";

		echo "<script>
		//Remover el botón de matrícula y añadir el botón de cancelación
			document.getElementById('setAsignatura').style.display='none';
			document.getElementById('unsetAsignatura').style.display='block';
		//Cambiar color background y texto en elemento <g> del plan de estudios
			var BoxPeColorCaja = document.getElementById('BoxPeColorCaja",$MATCODE,"');
			var BoxPeColorTexto = document.getElementById('BoxPeColorTexto",$MATCODE,"');
			BoxPeColorTexto.style.fill='",$ColorTxt,"';
			BoxPeColorCaja.style.fill='",$Color,"';
		//Cambiar color background y texto en ModInfoBox
			document.getElementById('ModInfoBoxColor').style.backgroundColor='",$Color,"';
			document.getElementById('ModInfoAsignaturaEstado').value = ' ",$Estado,"';
			document.getElementById('ModInfoAsignaturaDetalle').innerHTML = ' ",$Detalle,"';
			document.getElementById('ModInfoBoxCode').style.color = '",$ColorTxt,"';
			document.getElementById('ModInfoBoxNombre').style.color = '",$ColorTxt,"';
		//Nueva función con los datos del ajuste de matrícula realizado
		function CargarAsignatura",$MATCODE,"(){
		//Elementos
			document.getElementById('ContenedorDatosAsignaturaSeleccionada').style.display='block';
			var BoxCode=document.getElementById('ModInfoBoxCode');
			var BoxNombre=document.getElementById('ModInfoBoxNombre');
			var BoxColor=document.getElementById('ModInfoBoxColor');
			var ModInfoName=document.getElementById('ModInfoAsignaturaNombre');
			var ModInfoStatus=document.getElementById('ModInfoAsignaturaEstado');
			var ModInfoDetalle=document.getElementById('ModInfoAsignaturaDetalle');
			var SubmitCode=document.getElementById('MATCODE');
			var SetButton=document.getElementById('setAsignatura');
			var UnsetButton=document.getElementById('unsetAsignatura');
		//Contenidos a asignar
			var valueBoxCode = '",$CodigoLiteral,"';
			var valueBoxNombre = '",$MateriaNombre,"';
			var valueBoxColor = '",$Color,"';
			var valueModInfoName = ' ELECTIVA - ",$CodigoLiteral,"- ",$MateriaNombre,"';
			var valueModInfoStatus = ' ",$Estado,"';
			var valueModInfoDetalle = ' ",$Detalle,"';
			var valueSubmit = '",$MATCODE,"';
		//Ejecutar cambios
			BoxCode.innerHTML = valueBoxCode;
			BoxNombre.innerHTML = valueBoxNombre;
			BoxCode.style.color = '",$ColorTxt,"';
			BoxNombre.style.color = '",$ColorTxt,"';
			BoxColor.style.backgroundColor = valueBoxColor;
			ModInfoName.value = valueModInfoName;
			ModInfoStatus.value = valueModInfoStatus;
			ModInfoDetalle.innerHTML = valueModInfoDetalle;
			SubmitCode.value = valueSubmit;
			SetButton.style.display= 'none'; UnsetButton.style.display= 'block';
		}</script>";

	}
	else
	{
		//Es cualquier otra asignatura
		if($rowAA['ADDRM']=='1'){
			//La asignatura estaba cancelada por primera vez
			$setMatricular="UPDATE platformdata SET PARAM='A', ADDRM='2' WHERE ID='$ID' AND MAT='$MATCODE' AND PROGC='$PROGC'";
			$doSM=mysqli_query($link, $setMatricular);
		}
		else
		{
			//La asignatura es virgen
			$setMatricular="UPDATE platformdata SET PARAM='A' WHERE ID='$ID' AND MAT='$MATCODE' AND PROGC='$PROGC'";
			$doSM=mysqli_query($link, $setMatricular);
		}
		//Cambiar los atributos de la asignatura en plan de estudios y en el módulo de datos
			$Detalle="* NO LA HAS INICIADO.&#10 * Esta asignatura tiene $Creditos créditos.";
			$Estado="* ASIGNATURA ESTÁ MATRICULADA";
			$Color="#FFFF00";
			$ColorTxt="#000000";
			/* Imprimir botón en el módulo de las asignaturas matriculadas */
			$NombreAsg = ReduceNombre($MateriaNombre,12) ;
   		/* Imprimir botón en el módulo de las asignaturas matriculadas */
   	    echo "<script>
   	        $('#Added_Init').before('<span id=Added$MATCODE>&nbsp;<button class=btnAsgMatric onclick=CargarAsignatura$MATCODE()><b>$CodigoLiteral</b><br>$NombreAsg</button></span>');
   	    </script>";

			echo "<script>
			//Remover el botón de matrícula y añadir el botón de cancelación
				document.getElementById('setAsignatura').style.display='none';
				document.getElementById('unsetAsignatura').style.display='block';
			//Cambiar color background y texto en elemento <g> del plan de estudios
				var BoxPeColorCaja = document.getElementById('BoxPeColorCaja",$MATCODE,"');
				var BoxPeColorTexto = document.getElementById('BoxPeColorTexto",$MATCODE,"');
				BoxPeColorTexto.style.fill='",$ColorTxt,"';
				BoxPeColorCaja.style.fill='",$Color,"';
			//Cambiar color background y texto en ModInfoBox
				document.getElementById('ModInfoBoxColor').style.backgroundColor='",$Color,"';
				document.getElementById('ModInfoAsignaturaEstado').value = ' ",$Estado,"';
				document.getElementById('ModInfoAsignaturaDetalle').innerHTML = ' ",$Detalle,"';
				document.getElementById('ModInfoBoxCode').style.color = '",$ColorTxt,"';
				document.getElementById('ModInfoBoxNombre').style.color = '",$ColorTxt,"';
			//Nueva función con los datos del ajuste de matrícula realizado
			function CargarAsignatura",$MATCODE,"(){
			//Elementos
				document.getElementById('ContenedorDatosAsignaturaSeleccionada').style.display='block';
				var BoxCode=document.getElementById('ModInfoBoxCode');
				var BoxNombre=document.getElementById('ModInfoBoxNombre');
				var BoxColor=document.getElementById('ModInfoBoxColor');
				var ModInfoName=document.getElementById('ModInfoAsignaturaNombre');
				var ModInfoStatus=document.getElementById('ModInfoAsignaturaEstado');
				var ModInfoDetalle=document.getElementById('ModInfoAsignaturaDetalle');
				var SubmitCode=document.getElementById('MATCODE');
				var SetButton=document.getElementById('setAsignatura');
				var UnsetButton=document.getElementById('unsetAsignatura');
			//Contenidos a asignar
				var valueBoxCode = '",$CodigoLiteral,"';
				var valueBoxNombre = '",$MateriaNombre,"';
				var valueBoxColor = '",$Color,"';
				var valueModInfoName = ' ",$CodigoLiteral,"- ",$MateriaNombre,"';
				var valueModInfoStatus = ' ",$Estado,"';
				var valueModInfoDetalle = ' ",$Detalle,"';
				var valueSubmit = '",$MATCODE,"';
			//Ejecutar cambios
				BoxCode.innerHTML = valueBoxCode;
				BoxNombre.innerHTML = valueBoxNombre;
				BoxCode.style.color = '",$ColorTxt,"';
				BoxNombre.style.color = '",$ColorTxt,"';
				BoxColor.style.backgroundColor = valueBoxColor;
				ModInfoName.value = valueModInfoName;
				ModInfoStatus.value = valueModInfoStatus;
				ModInfoDetalle.innerHTML = valueModInfoDetalle;
				SubmitCode.value = valueSubmit;
				SetButton.style.display= 'none'; UnsetButton.style.display= 'block';
			}</script>";
	}
	echo "<script>
	var asignatura = $('#ModInfoAsignaturaNombre').val();
	alertify.alert('Operación de ajuste de matrícula', 'Asignatura <b>'+asignatura+'</b><br />Ha sido matriculada exitosamente.<br />', function(){ alertify.success('Felicidades!');});
	</script>";


?>

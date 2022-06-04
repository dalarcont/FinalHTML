<?php
session_start();
//Cargar variables de sesión
$ID=$_SESSION['ID'];
$PROGC=$_SESSION['PROGC'];
//Cargar variables de datos de conexión
require '../../divsys/umcdssictrl.php';


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


if($rowAA['ADDRM']=='2'){
		//La asignatura estaba re-matriculada
		$setCancelar="UPDATE platformdata SET PARAM='C', ADDRM='3', PARAM2='', DEF='' WHERE ID='$ID' AND MAT='$MATCODE'";
		$doSM=mysqli_query($link, $setCancelar);
		$Estado="* ASIGNATURA ESTÁ CANCELADA E INHABILITADA";
		$Detalle="* Esta asignatura no la puedes cursar porque la has cancelado el número de veces permitidas.&#10 * No puedes volver a cursarla ni habilitarla durante el periodo actual.&#10 * Qué decepción.&#10 $Creditos créditos académicos.";
		$Color="#BDBDBD";
		$ColorTxt="#000000";
        /* Script para remover el botón de la asignatura si el mismo fue cargado por ProcesoMatricula o por la adición de la asignatura por parte del estudiante */
		echo "<script>$(document).ready(function(){
					$('#Added$MATCODE').remove();
					});</script>";
				echo "<script>
				//Remover el botón de matrícula y el botón de cancelación
						document.getElementById('setAsignatura').style.display='none';
						document.getElementById('unsetAsignatura').style.display='none';
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
				function CargarAsignatura$MATCODE(){
				//Elementos
					document.getElementById('ContenedorDatosAsignaturaSeleccionada').style.display='block';
					var BoxCode=document.getElementById('ModInfoBoxCode');
					var BoxNombre=document.getElementById('ModInfoBoxNombre');
					var BoxColor=document.getElementById('ModInfoBoxColor');
					var ModInfoName=document.getElementById('ModInfoAsignaturaNombre');
					var ModInfoStatus=document.getElementById('ModInfoAsignaturaEstado');
					var ModInfoDetalle=document.getElementById('ModInfoAsignaturaDetalle');
					var SetButton=document.getElementById('setAsignatura'); 
					var UnsetButton=document.getElementById('unsetAsignatura');
					var SubmitCode=document.getElementById('MATCODE');
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
					SetButton.style.display= 'none'; UnsetButton.style.display= 'none';
					SubmitCode.value = valueSubmit;	
			}</script>";
	}
	else
	{
		//La asignatura estaba normalmente matriculada
		$setCancelar="UPDATE platformdata SET PARAM='NM', ADDRM='1', PARAM2='', DEF='' WHERE ID='$ID' AND MAT='$MATCODE'";
		$doSM=mysqli_query($link, $setCancelar);
		$Estado=" ASIGNATURA YA ESTÁ CANCELADA";
		$Detalle=" *Esta asignatura no la puedes cursar porque la has cancelado. &#10*Puedes matricularla de nuevo para volver a cursarla.";
		$Color="#FF7307";
		$ColorTxt="#FFFFFF";
		echo "<script>$(document).ready(function(){
					$('#Added$MATCODE').remove();
					});</script>";
				echo "<script>
				//Remover el botón de cancelación y añadir el botón de matrícula
						document.getElementById('setAsignatura').style.display='block';
						document.getElementById('unsetAsignatura').style.display='none';
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
				function CargarAsignatura$MATCODE(){
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
					SetButton.style.display= 'block'; UnsetButton.style.display= 'none';
					SubmitCode.value = valueSubmit;	
					
			}</script>";
	}
		echo "<script>
		var asignatura = $('#ModInfoAsignaturaNombre').val();
		alertify.alert('Operación de ajuste de matrícula', 'Asignatura <b>'+asignatura+'</b><br />Ha sido cancelada exitosamente.<br />', function(){ alertify.success('Qué tristeza!');});
		</script>";

?>

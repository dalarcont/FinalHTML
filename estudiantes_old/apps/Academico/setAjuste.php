<?php 
/* Universidad Falsa - División Superior de Sistemas Informáticos */
session_start();
/* 

Cancelar == 1
Matricular == 2
Inhabilitada == 3

Cuando una asignatura virgen(tal como la entrega la universidad) se cancela esta recibe un código ADDRM con valor 1
Cuando una asignatura cancelada se va a volver a matricular esta recibe un código ADDRM con valor 2
Cuando una asignatura matriculada con ADDRM=2 se vuelve a cancelar esta recibe un código ADDRM con valor 3
Cuando no importa la operación, el sistema encuentra que la asignatura tiene ADDRM con valor 3, el sistema no permite hacer nada, la asignatura queda totalmente cancelada.

Para cancelar tiene que estar en vacío ( PARAM=A ADDRM='')
Para matricular tiene que estar en 1 ( PARAM=C ADDRM=1)
Para volver a cancelar tiene que estar en 2 ( PARAM=A ADDRM=2)
Para impedir ajustes tiene que estar en 3 ( PARAM=C ACodigoLiteral
*/

$PROGC=$_SESSION['PROGC'];
$ID=$_SESSION['ID'];
if (empty($ID)) {
    #No hay identificación de estudiante por lo tanto se detiene el proceso
    echo "<script>
                            alertify.alert('Error de identificación', 'No estás identificado correctamente. <br />Ingresa de nuevo al portal estudiantil.', function(){ alertify.success('Limpiando datos');window.close(); });
                            </script>";

}

require '../../divsys/umcdssictrl.php'; 
require '../../divsys/DatosProgramas.php'; 


$MATCODE=$_POST['MATCODE'];
$Orden=$_POST['Orden'];
require '../../divsys/Materias.php';
require '../../divsys/MateriasPerCredits.php';

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

echo '
<link rel="stylesheet" href="css/alertify.css" />
 
<link rel="stylesheet" href="css/themes/bootstrap.css" />
 
<script src="alertify.js"></script>
';

	//Es cualquier otra asignatura
	$AjustesAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE'";
		$doAA=mysqli_query($link, $AjustesAsignatura);
		$rowAA=mysqli_fetch_array($doAA);

	#Cargar número de créditos acumulados
    $con=$link;
  	$consulta="SELECT SUM(CR) as TotalCR FROM platformdata WHERE ID='$ID' AND PARAM='A'";
	$resultado=$con -> query($consulta);
	$fila=$resultado->fetch_assoc();
	$TotalCR=$fila['TotalCR']; //Este es el valor que acabas de calcular en la consulta
	$DataCreditos=$TotalCR;

	//Sumatoria de la cantidad de créditos matriculados + los que piensa adicionar el estudiante
	$CantCR=$DataCreditos+$Creditos;
	if ($pe_mat_kill=='1') {
		require '../../divsys/Requerimientos/'.$PROGC.'.php';
		if ($Orden=='MATRICULAR') {
			//Llamar archivo que entrega parámetros de permisibilidad de adiciones a la matrícula
			require 'CheckToMatricular.php';
			if($Permiso==true){
				if($CantCR>$CreditosMatriculaMaximo){
					$AuxPermisivoCR="Se supera el límite de créditos académicos a matricular.";
					//La asignatura que se planea matricular provoca que se irrespete el límite de créditos: DENEGAR PROCESO
					echo "<script>
					alertify.alert('Operación de ajuste de matrícula','No puedes realizar más adiciones a tu matrícula<br /><b>Créditos seleccionados:</b> ",$Creditos,"<br /><b>Créditos matriculados hasta ahora:</b> ",$DataCreditos,"<br /><b>Límite de créditos a matricular:</b> ",$CreditosMatriculaMaximo,"<br />",$AuxPermisivoCR," ', function(){ alertify.success('Lo sentimos mucho...'); });
					</script>";						
				}else{
					//No se supera el límite de créditos
					if(isElectiva($MATCODE)==TRUE){
						//Es una asignatura electiva la que se desea matricular
						$setMatricular="UPDATE platformdata SET PARAM='A',PARAM3='E' WHERE ID='$ID' AND MAT='$MATCODE'";
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
						$MATCODE=$BackMATCODE;
						require '../../divsys/Materias.php';
						$Detalle="* NO LA HAS INICIADO.&#10 * Esta asignatura electiva tiene $Creditos créditos.";
						$Estado="* ASIGNATURA ELECTIVA ESTÁ MATRICULADA";
						$Color="#FFFF00";
						$ColorTxt="#000000";
						/* Imprimir botón en el módulo de las asignaturas matriculadas */
                        echo "<script>
                            $('#Added_Init').before('<span id=Added$MATCODE>&nbsp;<button class=btnAsgMatric onclick=CargarAsignatura$MATCODE()><b>$CodigoLiteral</b><br>$MateriaNombreCorto</button></span>');
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
						//echo "<script>alert('@dalarcont : ",$DataCreditos,"');</script>";
						//Es cualquier otra asignatura
						if($rowAA['ADDRM']=='1'){
							//La asignatura estaba cancelada por primera vez
							$setMatricular="UPDATE platformdata SET PARAM='A', ADDRM='2' WHERE ID='$ID' AND MAT='$MATCODE'";
							$doSM=mysqli_query($link, $setMatricular);
						}
						else
						{
							//La asignatura es virgen
							$setMatricular="UPDATE platformdata SET PARAM='A' WHERE ID='$ID' AND MAT='$MATCODE'";
							$doSM=mysqli_query($link, $setMatricular);
						}
						//Cambiar los atributos de la asignatura en plan de estudios y en el módulo de datos
							$Detalle="* NO LA HAS INICIADO.&#10 * Esta asignatura tiene $Creditos créditos.";
							$Estado="* ASIGNATURA ESTÁ MATRICULADA";
							$Color="#FFFF00";
							$ColorTxt="#000000";
							/* Imprimir botón en el módulo de las asignaturas matriculadas */
                        echo "<script>
                            $('#Added_Init').before('<span id=Added$MATCODE>&nbsp;<button class=btnAsgMatric onclick=CargarAsignatura$MATCODE()><b>$CodigoLiteral</b><br>$MateriaNombreCorto</button></span>');
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
							//echo "<script>alert('@dalarcont : CANT CREDITOS: ",$CantCR," -- NO SE SUPERA EL LÍMITE DE CRÉDITOS Y ES ASIGNATURA DIFERENTE DE ELECTIVA');</script>";
					}
					echo "<script>
					alertify.alert('Operación de ajuste de matrícula', 'Asignatura <b>", $CodigoLiteral, " - ", $MateriaNombre, "</b><br /> ",$PermisoMensaje,"<br />', function(){ alertify.success('",$PermisoMensajeNotruf,"');});
					</script>";
				}
			}
			else
			{
				//Sistema no otorgó permiso para matrícula
				echo "<script>
				alertify.alert('Operación de ajuste de matrícula', 'Asignatura <b>", $CodigoLiteral, " - ", $MateriaNombre, "</b><br /> ",$PermisoMensaje,"<br />', function(){ alertify.success('",$PermisoMensajeNotruf,"'); });
				</script>";
			}
		}
		else
		{
			if ($Orden=='CANCELAR') {
				//Llamar archivo que entrega parámetros de permisibilidad de remociones a la matrícula
				require 'CheckToCancelar.php';

				if($Permiso==true){
					if($rowAA['ADDRM']=='2'){
						//La asignatura estaba re-matriculada
						$setCancelar="UPDATE platformdata SET PARAM='C', ADDRM='3', PARAM2='', PUNT='', ASIST='', DEF='' WHERE ID='$ID' AND MAT='$MATCODE'";
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
						$setCancelar="UPDATE platformdata SET PARAM='NM', ADDRM='1', PARAM2='', PUNT='', ASIST='', DEF='' WHERE ID='$ID' AND MAT='$MATCODE'";
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
					alertify.alert('Operación de ajuste de matrícula', 'Asignatura <b>", $CodigoLiteral, " - ", $MateriaNombre, "</b><br /> ",$PermisoMensaje,"<br />', function(){ alertify.success('",$PermisoMensajeNotruf,"'); });
					</script>";
				}
				else
				{
					//Sistema no otorgó permiso para matrícula
					echo "<script>
					alertify.alert('Operación de ajuste de matrícula', 'Asignatura <b>", $CodigoLiteral, " - ", $MateriaNombre, "</b><br /> ",$PermisoMensaje,"<br />', function(){ alertify.success('",$PermisoMensajeNotruf,"'); });
					</script>";
				}
			}
		}
	}
	else
	{
		echo "<script>
		alertify.alert('Proceso de matrícula', 'Las operaciones de ajuste de matrícula están desactivadas.', function(){ alertify.success('Recargando datos');window.location.reload(); });
		</script>";
	}


?>
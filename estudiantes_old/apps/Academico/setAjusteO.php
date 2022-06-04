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


$MATCODE=$_POST['MATCODE'];
$Orden=$_POST['Orden'];
require '../../divsys/Materias.php';
require '../../divsys/MateriasPerCredits.php';


echo '
<link rel="stylesheet" href="css/alertify.css" />
 
<link rel="stylesheet" href="css/themes/bootstrap.css" />
 
<script src="alertify.js"></script>';

$AjustesAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE'";
$doAA=mysqli_query($link, $AjustesAsignatura);
$rowAA=mysqli_fetch_array($doAA);

if ($pe_mat_kill=='1') {

	require '../../divsys/Requerimientos/'.$PROGC.'.php';
	

	if ($Orden=='MATRICULAR') {
		//Llamar archivo que entrega parámetros de permisibilidad de adiciones a la matrícula
		require 'CheckToOptativa.php';

		if($Permiso=='SI'){
				//Se permite matricular asignatura optativa
				$setOptativa="INSERT INTO platformdata (ID, MAT, PARAM, PROGC, CR) VALUES ('$ID', '$MATCODE', 'A', 'OPTA', '$Creditos')";
				$doSO=mysqli_query($link, $setOptativa);
				echo "<script>alert('",$doSO,"');</script>";
				if($doSO){
				$setAkadata="UPDATE akadata SET OPTA='$MATCODE' WHERE ID='$ID' AND PROGC='$PROGC'";
				$doSA=mysqli_query($link, $setAkadata);
				}
								$Detalle=" NO LA HAS INICIADO.";
								$Estado=" ASIGNATURA ESTÁ MATRICULADA";
								$Color="#FFFF00";
								$ColorTxt="#000000";
								echo "<script>
								//Cambiar color background y texto en elemento <g> del plan de estudios
								document.getElementById('BotonAsignatura",$MATCODE,"').style.backgroundColor='",$Color,"';
								document.getElementById('CodigoAsignatura",$MATCODE,"').style.color='",$ColorTxt,"';
								document.getElementById('NombreAsignatura",$MATCODE,"').style.color='",$ColorTxt,"';
								//Cambiar color background y texto en ModInfoBox 
									document.getElementById('ModInfoBoxColor').style.backgroundColor='",$Color,"';
									document.getElementById('ModInfoAsignaturaEstado').value = ' ",$Estado,"';
									document.getElementById('ModInfoAsignaturaDetalle').innerHTML = ' ",$Detalle,"';
									document.getElementById('ModInfoBoxCode').style.color = '",$ColorTxt,"';
									document.getElementById('ModInfoBoxNombre').style.color = '",$ColorTxt,"';
								//Nueva función con los datos del ajuste de matrícula realizado
								function CargarAsignaturaOpta$MATCODE(){
								//Elementos
									document.getElementById('ContenedorDatosAsignaturaSeleccionada').style.display='block';
									var BoxCode=document.getElementById('ModInfoBoxCode');
									var BoxNombre=document.getElementById('ModInfoBoxNombre');
									var BoxColor=document.getElementById('ModInfoBoxColor');
									var ModInfoName=document.getElementById('ModInfoAsignaturaNombre');
									var ModInfoStatus=document.getElementById('ModInfoAsignaturaEstado');
									var ModInfoDetalle=document.getElementById('ModInfoAsignaturaDetalle');
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
									SubmitCode.value = valueSubmit;	color
								}</script>";
								
				echo "<script>
			alertify.alert('Operación de ajuste de matrícula optativa', 'Asignatura optativa <b>", $CodigoLiteral, " - ", $MateriaNombre, "</b><br /> ",$PermisoMensaje,"<br />', function(){ alertify.success('",$PermisoMensajeNotruf,"');setTimeout('",$ReloadAfter,"', 1500); });
			</script>";
			
		}
		else
		{
			//Sistema no otorgó permiso para matrícula
			echo "<script>
			alertify.alert('Operación de ajuste de matrícula optativa', 'Asignatura optativa <b>", $CodigoLiteral, " - ", $MateriaNombre, "</b><br /> ",$PermisoMensaje,"<br />', function(){ alertify.success('",$PermisoMensajeNotruf,"');setTimeout('",$ReloadAfter,"', 3500); });
			</script>";
		}
	}
	else
	{
		if ($Orden=='CANCELAR') {

			//Llamar archivo que entrega parámetros de permisibilidad de remociones a la matrícula
			require 'CheckToCancelar.php';

			if($Permiso=='SI'){
				if($rowAA['ADDRM']=='2'){
				//La asignatura estaba re-matriculada
				//$setCancelar="UPDATE platformdata SET PARAM='C', ADDRM='3' WHERE ID='$ID' AND MAT='$MATCODE'";
				//$doSM=mysqli_query($link, $setCancelar);
				}
				else
				{
					//La asignatura es virgen
					//$setCancelar="UPDATE platformdata SET PARAM='NM', ADDRM='1' WHERE ID='$ID' AND MAT='$MATCODE'";
					//$doSM=mysqli_query($link, $setCancelar);
				}
				echo "<script>
				alertify.alert('Operación de ajuste de matrícula optativa', 'Asignatura optativa <b>", $CodigoLiteral, " - ", $MateriaNombre, "</b><br /> ",$PermisoMensaje,"<br />', function(){ alertify.success('",$PermisoMensajeNotruf,"');setTimeout('",$ReloadAfter,"', 3500); });
				</script>";
			}
			else
			{
				//Sistema no otorgó permiso para matrícula
				echo "<script>
				alertify.alert('Operación de ajuste de matrícula optativa', 'Asignatura optativa <b>", $CodigoLiteral, " - ", $MateriaNombre, "</b><br /> ",$PermisoMensaje,"<br />', function(){ alertify.success('",$PermisoMensajeNotruf,"');setTimeout('",$ReloadAfter,"', 3500); });
				</script>";
			}
		}
	}
}
else
{
	echo "<script>
							alertify.alert('Proceso de matrícula optativa', 'Las operaciones de ajuste de matrícula están desactivadas.', function(){ alertify.success('Recargando datos');window.location.reload(); });
							</script>";
}


?>
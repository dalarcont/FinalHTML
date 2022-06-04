<?php
//Remoción de asignatura a toda costa 
	$rmMat="DELETE FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE'";
	$dorm=mysqli_query($link, $rmMat);
require '../../divsys/Materias.php';

	if($dorm)
        {
            echo "<script>
		alertify.alert('Preajuste de matrícula', 'La asignatura <b>", $CodigoLiteral, " - ", $MateriaNombre, "</b> <br /> Ha sido retirada exitosamente.', function(){ alertify.success('Decídete pues!'); });
		</script>";
			$Estado=" ASIGNATURA YA ESTÁ CANCELADA";
			$Detalle=" Esta asignatura no la puedes cursar porque la has cancelado. &#10 Puedes matricularla de nuevo para volver a cursarla.";
			$Color="#FF7307";
			$ColorTxt="#FFFFFF";
					echo "<script>
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
				}</script>";
        }
        else
        {
           echo "<script>
		alertify.alert('Preajuste de matrícula', 'La asignatura <b>", $CodigoLiteral, " - ", $MateriaNombre, "</b> <br /> No se pudo retirar.', function(){ alertify.success('Decídete pues!'); });
		</script>";
        }

?>
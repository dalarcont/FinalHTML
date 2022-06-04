<?php
#Asignatura no pre-matriculada, se puede pre-matrícular
    $addMat="INSERT INTO platformdata (ID, MAT, PARAM, PROGC, CR) VALUES ('$ID', '$MATCODE', 'A', '$PROGC', '4')";
    $doadd=mysqli_query($link, $addMat);
require '../../divsys/Materias.php';

    if($doadd)
        {
            echo "<script>
		alertify.alert('Preajuste de matrícula', 'La asignatura <b>", $CodigoLiteral, " - ", $MateriaNombre, "</b> <br /> Ha sido adicionada exitosamente.', function(){ alertify.success('Continúa así!'); });
		</script>";
		$Detalle=" Esta asignatura está parcialmente en tu plan de estudios.";
		$Estado=" ASIGNATURA ESTÁ PRE-MATRICULADA";
		$Color="#0000FF";
		$ColorTxt="FFFFFF";
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
		alertify.alert('Preajuste de matrícula', 'La asignatura <b>", $CodigoLiteral, " - ", $MateriaNombre, "</b> <br /> No se pudo adicionar.', function(){ alertify.success('Continúa así!'); });
		</script>";
        }

?>
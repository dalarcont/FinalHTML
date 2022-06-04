<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
#Buscar en platformdata
$Buscar="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE'";
$DoBuscar=mysqli_query($link, $Buscar);
$rowBuscar=mysqli_fetch_array($DoBuscar);


$Materia=$rowBuscar['MAT'];


		if ($Materia==$MATCODE) {
		#Cargar el parámetro
		$Parametro=$rowBuscar['PARAM'];
		$PuntajeMateria=$Semanas*$Creditos;
	    $Puntaje=$rowBuscar['PUNT'];
		if ($Parametro=='A') {
			#Materia activa, comprobación de puntajes
				if ($Puntaje>=$PuntajeMateria) {
					#Puntaje completado
						#Realizar el cambio de parámetro
						$setOK="UPDATE platformdata SET PARAM='OK', PARAM2='NORMAL' WHERE MAT='$MATCODE' AND ID='$ID'";
						$doSet=mysqli_query($link, $setOK);
						#Indicar al usuario
						echo "<img src='apps/AD.png' height='42' width='42'><img src='apps/OK.png' height='42' width='42'><br>La asignatura <b>$MATCODE - $MateriaNombre</b> ya está aprobada, por lo tanto no se registran más asistencias";
				}#CierreIF
				else
				{
					
					#Puntaje sin completar, proceder a realizar registro de asistencias y puntaje
					$GenAsist="UPDATE gendata SET PUNT=PUNT+$Creditos, ASIST=ASIST+1 WHERE ID='$ID'";
					$doGen=mysqli_query($link, $GenAsist);

					$Akadata="UPDATE akadata SET PUNT=PUNT+$Creditos, ASIST=ASIST+1 WHERE ID='$ID'";
					$doAkadata=mysqli_query($link, $Akadata);

					$Asistencia="UPDATE platformdata SET PUNT=PUNT+$Creditos, ASIST=ASIST+1 WHERE MAT='$MATCODE' AND ID='$ID'";
					$doAsist=mysqli_query($link, $Asistencia);
					if (!$doAsist){die("<img src='apps/NO.png' height='42' width='42'><br>	No se pudo realizar el registro de asistencia a la asignatura <b>$MATCODE - $MateriaNombre</b>. Intenta de nuevo más tarde.");}
	            		echo "<img src='apps/OK.png' height='42' width='42'><br>Se ha realizado el registro de asistencia y puntaje para la asignatura <b>$MATCODE - $MateriaNombre</b>. <br> Eres muy inteligente. ";
				}#CierreELSE
		}#CierreIF
		else
		{
			if ($Parametro=='C') {
				#Materia cancelada, detener operaciones
				echo "<img src='apps/NO.png' height='42' width='42'><br>No se pudo realizar el registro de asistencia a la asignatura <b>$MATCODE - $MateriaNombre</b>. <br> Porque está <b>CANCELADA</b>. <br> Te recomendamos revisar tus asignaturas activas para que sepas a cuáles registrar asistencias.";
			}#CierreIF
			else
			{
				if ($Parametro=='OK') {
					#Materia completada
					echo "<img src='apps/AD.png' height='42' width='42'><img src='apps/OK.png' height='42' width='42'><br>La asignatura <b>$MATCODE - $MateriaNombre</b> ya está aprobada, por lo tanto no se registran más asistencias";
				}#CierreIF
				else
				{
					echo "<img src='apps/NO.png' height='60' width='60'><br>Error del sistema en lectura de parámetro de asignatura. <br> <b>UMCDSSI:PE:AKAOPS:REGASPU(MatParameter:404)</b>";
				}#CierreELSE
			}#CierreELSE
		}#CierreELSE
	}#CierreIF
	else
	{
		echo "<img src='apps/NO.png' height='60' width='60'><br>La asignatura <b>$MATCODE - $MateriaNombre</b>  no está registrada en tu plan de estudios cuando debería estarlo. <br> Intenta nuevamente más tarde, si el problema persiste comunícate con la División Superior de Sistemas Informáticos.";
	}#CierreELSE


?>
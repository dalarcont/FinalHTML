<?php
switch ($MatType) {

	case 'NR':
		#Asignatura sin requisitos para ser cursada
		#Codigo para datos de asignatura
		$DatosAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE'";
		$doDA=mysqli_query($link, $DatosAsignatura);
		$rowDA=mysqli_fetch_array($doDA);
		require '../../divsys/MateriasPerCredits.php';
			if ($rowDA['MAT']==$MATCODE) {
				#Asignatura existe
					#Detalle y Estado
						switch ($rowDA['PARAM']) {
							case 'A':
								#Asignatura matriculada
								$PermisoMensaje="La asignatura se ha cancelado exitosamente.<br />Todas las notas parciales y permisos han sido revocados.";
								$PermisoMensajeNotruf="Cancelación ejecutada.<br />Qué tristeza!";
								$Permiso=true;
							break;

							case 'C':
								#Cancelada
								$PermisoMensaje="La asignatura no puede ser cancelada.<br />Se encuentra inhabilitada por doble cancelación.";
								$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Qué vergüenza!";
								$Permiso=false;
							break;

							case 'OK':
								#Aprobada
								$PermisoMensaje="La asignatura no puede ser cancelada.<br />Está aprobada, no se permite cancelación de asignaturas aprobadas.";
								$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Eso es suicidio.";
								$Permiso=false;
							break;

							case 'NM':
								#Se puede cursar
								$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada.";
								$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Eso es precipitarse.";
								$Permiso=false;
							break;

							default:
								#Sin paramétro
								$PermisoMensaje="La asignatura no puede ser cancelada.<br />No cuenta con los parámetros internos, por lo tanto cualquier operación de matrícula queda descartada.";
								$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Hay inconsistencias.";
								$Permiso=false;
							break;
					}
			}
			else
			{
				#Asignatura no existe
				$PermisoMensaje="La asignatura no puede ser cancelada.<br />La asignatura no hace parte del programa académico en el periodo actual.";
				$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />No existe asignatura.";
				$Permiso=false;
			}

	break;

###############################################################################################################################################################
	case '1R':
		#Asignatura con 1 requisitos
		#Codigo para datos de asignatura
		$DatosAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE'";
		$doDA=mysqli_query($link, $DatosAsignatura);
		$rowDA=mysqli_fetch_array($doDA);
		require '../../divsys/MateriasPerCredits.php';
			if ($rowDA['MAT']==$MATCODE) {
				#Asignatura existe, procedemos a revisar su requerimiento
				#Materia requisito
				$MATCODERequisito=$Mat1;
				require '../../divsys/MateriasReqs.php';
				#Verificar que materia requisito exista
				$Requisito="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat1')";
				$doReq=mysqli_query($link, $Requisito);
				$rowReq=mysqli_fetch_array($doReq);
				if ($rowReq['MAT']==$Mat1) {
					#Requisito existe
					$Parametro=$rowReq['PARAM'];
						if ($Parametro=='OK') {
								switch ($rowDA['PARAM']) {
								case 'A':
									#Asignatura matriculada
									$PermisoMensaje="La asignatura se ha cancelado exitosamente.<br />Todas las notas parciales y permisos han sido revocados.";
									$PermisoMensajeNotruf="Cancelación ejecutada.<br />Qué tristeza!";
									$Permiso=true;
								break;

								case 'C':
									#Cancelada
									$PermisoMensaje="La asignatura no puede ser cancelada.<br />Se encuentra inhabilitada por doble cancelación.";
									$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Qué vergüenza!";
									$Permiso=false;
								break;

								case 'OK':
									#Aprobada
									$PermisoMensaje="La asignatura no puede ser cancelada.<br />Está aprobada, no se permite cancelación de asignaturas aprobadas.";
									$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Eso es suicidio.";
									$Permiso=false;
								break;

								case 'NM':
									#Se puede cursar
									$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada.";
									$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Eso es precipitarse.";
									$Permiso=false;
								break;

								default:
									#Sin paramétro
									$PermisoMensaje="La asignatura no puede ser cancelada.<br />No cuenta con los parámetros internos, por lo tanto cualquier operación de matrícula queda descartada.";
									$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Hay inconsistencias.";
									$Permiso=false;
								break;
								}
						}
						else
						{
							if($rowDA['PARAM3']=='LETMAT'){
								#Permiso para cursar asignatura sin requisito
								$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada. Además es un descaro que pidas permiso de curso sin requisitos y la vayas a cancelar.";
								$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
								$Permiso=false;
							}
							else
							{
								#Materia requisito no aprobada
								$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada porque la asignatura requisito no está aprobada.";
								$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
								$Permiso=false;
							}
						}
				}
				else
				{
					#Requisito no existe
					$PermisoMensaje="La asignatura no puede ser cancelada.<br />La asignatura requisito no hace parte del programa académico en el periodo actual, impidiendo matricular esta y a su vez cancelarla.";
					$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
					$Permiso=false;
				}

			}
			else
			{
				#Asignatura no existe
				$PermisoMensaje="La asignatura no puede ser cancelada.<br />La asignatura no hace parte del programa académico en el periodo actual.";
				$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />No existe asignatura.";
				$Permiso=false;
			}
	break;

###############################################################################################################################################################
	case '2R':
		#Asignatura con 2 requisitos
		#Codigo para datos de asignatura
		$DatosAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE'";
		$doDA=mysqli_query($link, $DatosAsignatura);
		$rowDA=mysqli_fetch_array($doDA);
		require '../../divsys/MateriasPerCredits.php';
		if ($rowDA['MAT']==$MATCODE) {
			#Asignatura existe, procedemos a revisar su requerimiento
			#Materia requisito 1
				$MATCODERequisito=$Mat1;
				require '../../divsys/MateriasReqs.php';
				$MateriaRequisito1=$MateriaRequisito; $CodigoLiteralREQ1=$CodigoLiteralREQ;
				#Verificar que materia requisito exista
				$Requisito="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat1')";
				$doReq=mysqli_query($link, $Requisito);
				$rowReq=mysqli_fetch_array($doReq);
				#Parámetro de la materia requisito 1
				if ($rowReq['PARAM']=='OK') {$REQ1='OK';}else{$REQ1='NO';}
			#Materia requisito 2
				$MATCODERequisito=$Mat2;
				require '../../divsys/MateriasReqs.php';
				$MateriaRequisito2=$MateriaRequisito; $CodigoLiteralREQ2=$CodigoLiteralREQ;
				#Verificar que materia requisito exista
				$Requisito2="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat2')";
				$doReq2=mysqli_query($link, $Requisito2);
				$rowReq2=mysqli_fetch_array($doReq2);
				#Parámetro de la materia requisito 2
				if ($rowReq2['PARAM']=='OK') {$REQ2='OK';}else{$REQ2='NO';}
				#$Estado=$Mat2;

			#Comprobación de ambos requisitos
				if ($REQ1=='OK' AND $REQ2=='OK') {
					#Ambos requisitos completos, materia indicada puede cursarse sin problema
					switch ($rowDA['PARAM']) {
						case 'A':
							#Asignatura matriculada
							$PermisoMensaje="La asignatura se ha cancelado exitosamente.<br />Todas las notas parciales y permisos han sido revocados.";
							$PermisoMensajeNotruf="Cancelación ejecutada.<br />Qué tristeza!";
							$Permiso=true;
						break;

						case 'C':
							#Cancelada
							$PermisoMensaje="La asignatura no puede ser cancelada.<br />Se encuentra inhabilitada por doble cancelación.";
							$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Qué vergüenza!";
							$Permiso=false;
						break;

						case 'OK':
							#Aprobada
							$PermisoMensaje="La asignatura no puede ser cancelada.<br />Está aprobada, no se permite cancelación de asignaturas aprobadas.";
							$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Eso es suicidio.";
							$Permiso=false;
						break;

						case 'NM':
							#Se puede cursar
							$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada.";
							$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Eso es precipitarse.";
							$Permiso=false;
						break;

						default:
							#Sin paramétro
							$PermisoMensaje="La asignatura no puede ser cancelada.<br />No cuenta con los parámetros internos, por lo tanto cualquier operación de matrícula queda descartada.";
							$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Hay inconsistencias.";
							$Permiso=false;
						break;
					}
				}
				else
				{
					if ($REQ1=='OK' AND $REQ2=='NO') {
							if($rowDA['PARAM3']=='LETMAT'){
								#Permiso para cursar asignatura sin requisito
								$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada. Además es un descaro que pidas permiso de curso sin requisitos y la vayas a cancelar.";
								$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
								$Permiso=false;
							}
							else
							{
								#Requisito 1 aprobado Requisito 2 no aprobado
								$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada porque la asignatura requisito 2: <b>$CodigoLiteralREQ2 - $MateriaRequisito2</b>, no está aprobada.";
								$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
								$Permiso=false;
							}
					}
					else
					{
						if ($REQ1=='NO' AND $REQ2=='OK') {
							if($rowDA['PARAM3']=='LETMAT'){
								#Permiso para cursar asignatura sin requisito
								$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada. Además es un descaro que pidas permiso de curso sin requisitos y la vayas a cancelar.";
								$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
								$Permiso=false;
							}
							else
							{
								#Requisito 1 no aprobado Requisito 2 aprobado
								$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada porque la asignatura requisito 1: <b>$CodigoLiteralREQ1 - $MateriaRequisito1</b>, no está aprobada.";
								$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
								$Permiso=false;
							}
						}
						else
						{
							if ($REQ1=='NO' AND $REQ2=='NO') {
								if($rowDA['PARAM3']=='LETMAT'){
									#Permiso para cursar asignatura sin requisito
									$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada. Además es un descaro que pidas permiso de curso sin requisitos y la vayas a cancelar.";
									$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
									$Permiso=false;
								}
								else
								{
									#Ambos requisitos no están aprobados
									$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada porque las asignaturas requisito no están aprobadas.";
									$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
									$Permiso=false;
								}
							}
							else
							{
								if($rowDA['PARAM3']=='LETMAT'){
									#Permiso para cursar asignatura sin requisito
									$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada. Además es un descaro que pidas permiso de curso sin requisitos y la vayas a cancelar.";
									$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
									$Permiso=false;
								}
								else
								{
									#Error en lectura de parámetros, puede ser alguno de los requerimientos no esté matriculado o esté cancelado.
									$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada porque alguna o ambas de las asignaturas requisito no hace parte del programa académico en el periodo actual.";
									$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
									$Permiso=false;
								}
							}
						}
					}
				}
		}
		else
		{
			#Asignatura no existe
			$PermisoMensaje="La asignatura no puede ser cancelada.<br />La asignatura no hace parte del programa académico en el periodo actual.";
			$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />No existe asignatura.";
			$Permiso=false;
		}
	break;

###############################################################################################################################################################
	case '3R':
	//Asignatura con 3 requisitos
	#Codigo para datos de asignatura
	$DatosAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE'";
	$doDA=mysqli_query($link, $DatosAsignatura);
	$rowDA=mysqli_fetch_array($doDA);
	require '../../divsys/MateriasPerCredits.php';
	if ($rowDA['MAT']==$MATCODE) {
		#Asignatura existe, procedemos a revisar su requerimiento
		#Materia requisito 1
			$MATCODERequisito=$Mat1;
			require '../../divsys/MateriasReqs.php';
			$MateriaRequisito1=$MateriaRequisito;
			$CodigoLiteralREQ1=$CodigoLiteralREQ;
			#Verificar que materia requisito exista
			$Requisito="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat1')";
			$doReq=mysqli_query($link, $Requisito);
			$rowReq=mysqli_fetch_array($doReq);
			#Parámetro de la materia requisito 1
			if ($rowReq['PARAM']=='OK') {$EstadoMateria1=11;}else{$EstadoMateria1=0;}

		#Materia requisito 2
			$MATCODERequisito=$Mat2;
			require '../../divsys/MateriasReqs.php';
			$MateriaRequisito2=$MateriaRequisito;
			$CodigoLiteralREQ2=$CodigoLiteralREQ;
			#Verificar que materia requisito exista
			$Requisito2="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat2')";
			$doReq2=mysqli_query($link, $Requisito2);
			$rowReq2=mysqli_fetch_array($doReq2);
			#Parámetro de la materia requisito 2
			if ($rowReq2['PARAM']=='OK') {$EstadoMateria2=21;}else{$EstadoMateria2=0;}

		#Materia requisito 3
			$MATCODERequisito=$Mat3;
			require '../../divsys/MateriasReqs.php';
			$MateriaRequisito3=$MateriaRequisito;
			$CodigoLiteralREQ3=$CodigoLiteralREQ;
			#Verificar que materia requisito exista
			$Requisito3="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat3')";
			$doReq3=mysqli_query($link, $Requisito3);
			$rowReq3=mysqli_fetch_array($doReq3);
			#Parámetro de la materia requisito 3
			if ($rowReq3['PARAM']=='OK') {$EstadoMateria3=31;}else{$EstadoMateria3=0;}

		#Almacenamiento y resultado final para cálculo.
			$Requisitos=array($EstadoMateria1,$EstadoMateria2,$EstadoMateria3);
			$LongArray=count($Requisitos);
			$ControlAprobados=$EstadoMateria1+$EstadoMateria2+$EstadoMateria3;

		#Switch de Control de Asignaturas Aprobadas
		switch ($ControlAprobados) {
			case 63:
				//Se han aprobado 3 requisitos
				//Switch para estado de la asignatura original
				switch ($rowDA['PARAM']) {
					case 'A':
						#Asignatura matriculada
						$PermisoMensaje="La asignatura se ha cancelado exitosamente.<br />Todas las notas parciales y permisos han sido revocados.";
						$PermisoMensajeNotruf="Cancelación ejecutada.<br />Qué tristeza!";
						$Permiso=true;
					break;

					case 'C':
						#Cancelada
						$PermisoMensaje="La asignatura no puede ser cancelada.<br />Se encuentra inhabilitada por doble cancelación.";
						$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Qué vergüenza!";
						$Permiso=false;
					break;

					case 'OK':
						#Aprobada
						$PermisoMensaje="La asignatura no puede ser cancelada.<br />Está aprobada, no se permite cancelación de asignaturas aprobadas.";
						$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Eso es suicidio.";
						$Permiso=false;
					break;

					case 'NM':
						#Se puede cursar
						$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada.";
						$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Eso es precipitarse.";
						$Permiso=false;
					break;

					default:
						#Sin paramétro
						$PermisoMensaje="La asignatura no puede ser cancelada.<br />No cuenta con los parámetros internos, por lo tanto cualquier operación de matrícula queda descartada.";
						$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Hay inconsistencias.";
						$Permiso=false;
					break;
				}

			break;

			case 52:
				if($rowDA['PARAM3']=='LETMAT'){
					#Permiso para cursar asignatura sin requisito
					$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada. Además es un descaro que pidas permiso de curso sin requisitos y la vayas a cancelar.";
					$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
					$Permiso=false;
				}
				else
				{
					//Se han aprobado los requisitos #2 y #3
					$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada porque la asignatura requisito 1: <b>$CodigoLiteralREQ1 - $MateriaRequisito1</b> no está aprobada.";
					$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
					$Permiso=false;
				}
			break;

			case 42:
				if($rowDA['PARAM3']=='LETMAT'){
					#Permiso para cursar asignatura sin requisito
					$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada. Además es un descaro que pidas permiso de curso sin requisitos y la vayas a cancelar.";
					$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
					$Permiso=false;
				}
				else
				{
					//Se han aprobado los requisitos #1 y #3
					$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada porque la asignatura requisito 2: <b>$CodigoLiteralREQ2 - $MateriaRequisito2</b> no está aprobada.";
					$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
					$Permiso=false;
				}
			break;

			case 32:
				if($rowDA['PARAM3']=='LETMAT'){
					#Permiso para cursar asignatura sin requisito
					$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada. Además es un descaro que pidas permiso de curso sin requisitos y la vayas a cancelar.";
					$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
					$Permiso=false;
				}
				else
				{
					//Se han aprobado los requisitos #1 y #2
					$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada porque la asignatura requisito 3: <b>$CodigoLiteralREQ3 - $MateriaRequisito3</b> no está aprobada.";
					$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
					$Permiso=false;
				}
			break;

			case 31:
				if($rowDA['PARAM3']=='LETMAT'){
					#Permiso para cursar asignatura sin requisito
					$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada. Además es un descaro que pidas permiso de curso sin requisitos y la vayas a cancelar.";
					$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
					$Permiso=false;
				}
				else
				{
					//Solamente se tiene aprobado el requisito 3
					$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada porque la asignatura requisito 1: <b>$CodigoLiteralREQ1 - $MateriaRequisito1</b>, y la asignatura requisito 2: <b>$CodigoLiteralREQ2 - $MateriaRequisito2</b> no está aprobada.";
					$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
					$Permiso=false;
				}
			break;

			case 21:
				if($rowDA['PARAM3']=='LETMAT'){
					#Permiso para cursar asignatura sin requisito
					$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada. Además es un descaro que pidas permiso de curso sin requisitos y la vayas a cancelar.";
					$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
					$Permiso=false;
				}
				else
				{
					//Solamente se tiene aprobado el requisito 2
					$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada porque la asignatura requisito 1: <b>$CodigoLiteralREQ1 - $MateriaRequisito1</b>, y la asignatura requisito 3: <b>$CodigoLiteralREQ3 - $MateriaRequisito3</b> no está aprobada.";
					$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
					$Permiso=false;
				}
			break;

			case 11:
				if($rowDA['PARAM3']=='LETMAT'){
					#Permiso para cursar asignatura sin requisito
					$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada. Además es un descaro que pidas permiso de curso sin requisitos y la vayas a cancelar.";
					$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
					$Permiso=false;
				}
				else
				{
					//Solamente se tiene aprobado el requisito 1
					$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada porque la asignatura requisito 2: <b>$CodigoLiteralREQ2 - $MateriaRequisito2</b>, y la asignatura requisito 3: <b>$CodigoLiteralREQ3 - $MateriaRequisito3</b> no está aprobada.";
					$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
					$Permiso=false;
				}
			break;

			default:
				if($rowDA['PARAM3']=='LETMAT'){
					#Permiso para cursar asignatura sin requisito
					$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada. Además es un descaro que pidas permiso de curso sin requisitos y la vayas a cancelar.";
					$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
					$Permiso=false;
				}
				else
				{
					//No se han aprobado 3 de las requisito
					$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada porque ninguna de las 3 asignaturas requisito se ha aprobado.";
					$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
					$Permiso=false;
				}
			break;
		}
	}
	else
	{
		#Asignatura no existe
		$PermisoMensaje="La asignatura no puede ser cancelada.<br />La asignatura no hace parte del programa académico en el periodo actual.";
		$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />No existe asignatura.";
		$Permiso=false;
	}
	break;

###############################################################################################################################################################
	//Asignatura de reeemplazo de electiva base
	case 'E':
	$PermisoMensaje="Por orden del Consejo Superior <b>NO</b> está permitida la cancelación de asignaturas electivas.";
	$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
	$Permiso=false;
	break;

#################################################################################################################################################################################################################
	//Asignatura que se habilita por créditos aprobados acumulados
	case 'CRA':
		$getCreditosOK="SELECT SUM(CR) as TotalCR FROM platformdata WHERE ID='$ID' AND PARAM IN('OK')";
		$rowDataCreditos=$link -> query($getCreditosOK);
		$fila=$rowDataCreditos->fetch_assoc(); //que te devuelve un array asociativo con el nombre del campo
		$DataCreditos=$fila['TotalCR'];
	    if($DataCreditos>=$CreditosRequeridosAprobados){
	    	#Asignatura existe
			require '../../divsys/MateriasPerCredits.php';
			#Detalle y Estado
				switch ($rowDA['PARAM']) {
					case 'A':
						#Asignatura matriculada
						$PermisoMensaje="La asignatura se ha cancelado exitosamente.<br />Todas las notas parciales y permisos han sido revocados.";
						$PermisoMensajeNotruf="Cancelación ejecutada.<br />Qué tristeza!";
						$Permiso=true;
					break;

					case 'C':
						#Cancelada
						$PermisoMensaje="La asignatura no puede ser cancelada.<br />Se encuentra inhabilitada por doble cancelación.";
						$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Qué vergüenza!";
						$Permiso=false;
					break;

					case 'OK':
						#Aprobada
						$PermisoMensaje="La asignatura no puede ser cancelada.<br />Está aprobada, no se permite cancelación de asignaturas aprobadas.";
						$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Eso es suicidio.";
						$Permiso=false;
					break;

					case 'NM':
						#Se puede cursar
						$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada.";
						$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Eso es precipitarse.";
						$Permiso=false;
					break;

					default:
						#Sin paramétro
						$PermisoMensaje="La asignatura no puede ser cancelada.<br />No cuenta con los parámetros internos, por lo tanto cualquier operación de matrícula queda descartada.";
						$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Hay inconsistencias.";
						$Permiso=false;
					break;
				}
	    }
	    else
	    {
	    	#Acumulación de créditos aprobados requeridos NO presente, NO se puede matrícular asignatura.
			if($rowDA['PARAM3']=="LETMAT"){
				//Estudiante tiene permiso de cursar la asignatura sin requisitos aprobados
				$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada. Además es un descaro que pidas permiso de curso sin requisitos y la vayas a cancelar.";
				$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
				$Permiso=false;
			}
			else
			{
				$PermisoMensaje="La asignatura no puede ser cancelada.<br />Ni siquiera está matriculada porque no cumples el requisito de $CreditosRequeridosAprobados créditos académicos aprobados.";
				$PermisoMensajeNotruf="Registro y Control detiene el proceso.";
				$Permiso=false;
			}
	    }
	break;

########################################################################################################
	//Asignatura no definida
	default:
		$PermisoMensaje="La asignatura no puede ser cancelada.<br />No cuenta con los parámetros internos, por lo tanto cualquier operación de matrícula queda descartada.";
		$PermisoMensajeNotruf="Registro y Control detiene el proceso.<br />Hay inconsistencias.";
		$Permiso=false;
	break;
}

?>

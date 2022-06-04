<?php 
/* Control para permisividad de matricula de asignatura */
/* El sistema solo entrega Permitido=NO o Permitido=SI */
$MatType="NR";
switch ($MatType) {

	case 'NR':
		#Asignatura sin requisitos para ser cursada
		#Codigo para datos de asignatura
		$DatosAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE'";
		$doDA=mysqli_query($link, $DatosAsignatura);
		$rowDA=mysqli_fetch_array($doDA);
		

			if ($rowDA['MAT']==$MATCODE) {
				#Asignatura existe
					#Detalle y Estado
						switch ($rowDA['PARAM']) {
							case 'A':
								#Matriculada
								if ($rowDA['PUNT']==0 || $rowDA['PUNT']=='') {
									#Matriculada y sin puntaje alguno											
									$PermisoMensaje="No puedes matricular esta asignatura porque pertenece a tu plan de estudios actual y ya está matriculada.";
									$PermisoMensajeNotruf="2 veces lo mismo? No aguanta...";
									$Permiso="NO"; $ReloadAfter="";
								}
								else
								{
									#Matriculada y ya posee puntajes
									$PermisoMensaje="No puedes matricular esta asignatura porque pertenece a tu plan de estudios actual y ya está matriculada y se está cursando.";
									$PermisoMensajeNotruf="2 veces lo mismo? No aguanta...";
									$Permiso="NO"; $ReloadAfter="";
								}
							break;

							case 'C':
								#Cancelada
								if($rowDA['ADDRM']=='3'){
									$PermisoMensaje="No puedes matricular esta asignatura porque pertenece a tu plan de estudios actual y está inhabilitada al superarse el límite de veces que puede ser cancelada.";
									$PermisoMensajeNotruf="Debería darte pena.";
									$Permiso="NO"; $ReloadAfter="";
								}
							break;

							case 'OK':
								#Aprobada
									$PermisoMensaje="No puedes matricular esta asignatura porque pertenece a tu plan de estudios actual y ya la aprobaste.";
									$PermisoMensajeNotruf="Para qué otra vez?";
									$Permiso="NO"; $ReloadAfter="";
							break;

							case 'NM':
									$PermisoMensaje="No puedes matricular como optativa esta asignatura. <br />Esta asignatura pertenece a tu plan de estudios de actual.";
									$Permiso="NO"; $ReloadAfter="";

									$PermisoMensajeNotruf="Pues te aguantas...";
							break;
							
							default:
									$PermisoMensaje="No puedes matricular como optativa esta asignatura porque tal parece la universidad dio la orden de no ofertarla.";
									$PermisoMensajeNotruf="No te puedes quejar.";
									$Permiso="NO"; $ReloadAfter="";
							break;
						}			
			}
			else
			{
				#Asignatura no existe, por lo tanto puede matricularse
				$PermisoMensaje="Fue matriculada exitosamente. <br />Ya la puedes cursar. <br /> Recuerda que NO puedes pedir cambio de la asignatura optativa <br />Recuerda que es susceptible a la inhabilidad por doble cancelación. Mucho cuidado!";
				$Permiso="SI"; $ReloadAfter="window.close(); window.opener.location.reload()";
				$PermisoMensajeNotruf="Esperamos la disfrutes!";
			}
	break;
###############################################################################################################################################################
	/*case '1R':
		#Asignatura con 1 requisitos
		#Codigo para datos de asignatura
		$DatosAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE'";
		$doDA=mysqli_query($link, $DatosAsignatura);
		$rowDA=mysqli_fetch_array($doDA);
		

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
									#Matriculada
									if ($rowDA['PUNT']==0 || $rowDA['PUNT']=='') {
										#Matriculada y sin puntaje alguno											
										$PermisoMensaje="No puedes matricular esta asignatura porque ya está matriculada.";
										$PermisoMensajeNotruf="2 veces lo mismo? No aguanta...";
										$Permiso="NO"; $ReloadAfter="";
									}
									else
									{
										#Matriculada y ya posee puntajes
										$PermisoMensaje="No puedes matricular esta asignatura porque ya está matriculada y se está cursando.";
										$PermisoMensajeNotruf="2 veces lo mismo? No aguanta...";
										$Permiso="NO"; $ReloadAfter="";
									}
								break;

								case 'C':
									#Cancelada
									if($rowDA['ADDRM']=='3'){
										$PermisoMensaje="No puedes matricular esta asignatura porque está inhabilitada al superarse el límite de veces que puede ser cancelada.";
										$PermisoMensajeNotruf="Debería darte pena.";
										$Permiso="NO"; $ReloadAfter="";
									}
								break;

								case 'OK':
									#Aprobada
									$PermisoMensaje="No puedes matricular esta asignatura porque ya la aprobaste.";
									$PermisoMensajeNotruf="Para qué otra vez?";
									$Permiso="NO"; $ReloadAfter="";
								break;

								case 'NM':
									if(($rowDA['PARAM']=='NM') && ($rowDA['ADDRM']=='1' || $rowDA['ADDRM']=='2')){
									$PermisoMensaje="La has matriculado nuevamente, pues, fue cancelada una (1) vez. <br />Ya la puedes cursar.";
									$Permiso="SI"; $ReloadAfter="window.location.reload()";

									$PermisoMensajeNotruf="Ojalá esta vez sí!";
									}
									else
									{
										$PermisoMensaje="Fue matriculada exitosamente por primera vez. <br />Ya la puedes cursar.";
										$Permiso="SI"; $ReloadAfter="window.location.reload()";

										$PermisoMensajeNotruf="Esperamos la disfrutes!";
									}
								break;
							
								default:
									$PermisoMensaje="No puedes matricular esta asignatura porque tal parece la universidad dio la orden de no ofertarla.";
									$PermisoMensajeNotruf="No te puedes quejar.";
									$Permiso="NO"; $ReloadAfter="";
								break;

								}
						}
						else
						{
							#Asignatura requisito no aprobada
							$PermisoMensaje="No puedes matricular esta asignatura porque no has aprobado el requisito $CodigoLiteralREQ - $MateriaRequisito.";
							$Permiso="NO"; $ReloadAfter="";
							$PermisoMensajeNotruf="No tomes prisa...";
						}
				}
				else
				{
					#Requisito no existe
					$PermisoMensaje="No puedes matricular esta asignatura porque el requisito $CodigoLiteralREQ - $MateriaRequisito. no está en tu plan de estudios para el periodo actual por lo tanto esta asignatura no puede ser cursada.";
					$Permiso="NO"; $ReloadAfter="";
					$PermisoMensajeNotruf="No te puedes quejar.";
				}	
			}
			else
			{
				#Asignatura no existe
				$PermisoMensaje="No puedes matricular esta asignatura porque no está dentro de tu plan de estudios en el periodo actual.";
				$Permiso="NO"; $ReloadAfter="";
				$PermisoMensajeNotruf="Asignaturas fantasma!";	
			}
	break;

###############################################################################################################################################################
	case '2R':
		#Asignatura con 2 requisitos
		#Codigo para datos de asignatura
		$DatosAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE'";
		$doDA=mysqli_query($link, $DatosAsignatura);
		$rowDA=mysqli_fetch_array($doDA);
		

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
					#$Puntaje=" ".$rowDA['PUNT']." ";$Mat1;
					#$Estado=$Mat2;
				
				#Comprobación de ambos requisitos
					if ($REQ1=='OK' AND $REQ2=='OK') {
						#Ambos requisitos completos, materia indicada puede cursarse sin problema

						switch ($rowDA['PARAM']) {
								case 'A':
									#Matriculada
									if ($rowDA['PUNT']==0 || $rowDA['PUNT']=='') {
										#Matriculada y sin puntaje alguno											
										$PermisoMensaje="No puedes matricular esta asignatura porque ya está matriculada.";
										$PermisoMensajeNotruf="2 veces lo mismo? No aguanta...";
										$Permiso="NO"; $ReloadAfter="";
									}
									else
									{
										#Matriculada y ya posee puntajes
										$PermisoMensaje="No puedes matricular esta asignatura porque ya está matriculada y se está cursando.";
										$PermisoMensajeNotruf="2 veces lo mismo? No aguanta...";
										$Permiso="NO"; $ReloadAfter="";
									}
								break;

								case 'C':
									#Cancelada
									if($rowDA['ADDRM']=='3'){
										$PermisoMensaje="No puedes matricular esta asignatura porque está inhabilitada al superarse el límite de veces que puede ser cancelada.";
										$PermisoMensajeNotruf="Debería darte pena.";
										$Permiso="NO"; $ReloadAfter="";
									}
								break;

								case 'OK':
									#Aprobada
									$PermisoMensaje="No puedes matricular esta asignatura porque ya la aprobaste.";
									$PermisoMensajeNotruf="Para qué otra vez?";
									$Permiso="NO"; $ReloadAfter="";
								break;

								case 'NM':
									if(($rowDA['PARAM']=='NM') && ($rowDA['ADDRM']=='1' || $rowDA['ADDRM']=='2')){
									$PermisoMensaje="La has matriculado nuevamente, pues, fue cancelada una (1) vez. <br />Ya la puedes cursar.";
									$Permiso="SI"; $ReloadAfter="window.location.reload()";

									$PermisoMensajeNotruf="Ojalá esta vez sí!";
									}
									else
									{
										$PermisoMensaje="Fue matriculada exitosamente por primera vez. <br />Ya la puedes cursar.";
										$Permiso="SI"; $ReloadAfter="window.location.reload()";

										$PermisoMensajeNotruf="Esperamos la disfrutes!";
									}
								break;
							
								default:
									$PermisoMensaje="No puedes matricular esta asignatura porque tal parece la universidad dio la orden de no ofertarla.";
									$PermisoMensajeNotruf="No te puedes quejar.";
									$Permiso="NO"; $ReloadAfter="";
								break;
						}	
					}
					else
					{
						if ($REQ1=='OK' AND $REQ2=='NO') {
								#Requisito 1 aprobado Requisito 2 no aprobado
								$PermisoMensaje="No puedes matricular esta asignatura porque has aprobado el requisito $CodigoLiteralREQ1 - $MateriaRequisito1 pero no has aprobado el requisito $CodigoLiteralREQ2 - $MateriaRequisito2.";
								$Permiso="NO"; $ReloadAfter="";
								$PermisoMensajeNotruf="No tomes prisa...";
							}
							else
							{
								if ($REQ1=='NO' AND $REQ2=='OK') {
									#Requisito 1 no aprobado Requisito 2 aprobado 
									$PermisoMensaje="No puedes matricular esta asignatura porque has aprobado el requisito $CodigoLiteralREQ2 - $MateriaRequisito2 pero no has aprobado el requisito $CodigoLiteralREQ1 - $MateriaRequisito1.";
									$Permiso="NO"; $ReloadAfter="";
									$PermisoMensajeNotruf="No tomes prisa...";
								}
								else
								{
									if ($REQ1=='NO' AND $REQ2=='NO') {
										
										#Ambos requisitos no están aprobados
										$PermisoMensaje="No puedes matricular esta asignatura porque no has aprobado el requisito $CodigoLiteralREQ1 - $MateriaRequisito1 y tampoco el requisito $CodigoLiteralREQ2 - $MateriaRequisito2.";
										$Permiso="NO"; $ReloadAfter="";
										$PermisoMensajeNotruf="No tomes prisa...";
										
									}
									else
									{
										#Error en lectura de parámetros, puede ser alguno de los requerimientos no esté matriculado o esté cancelado.
										$PermisoMensaje="No puedes matricular esta asignatura porque alguno de los requisitos no está disponible en tu plan de estudios durante este periodo. Puede que sea el requisito $CodigoLiteralREQ1 - $MateriaRequisito1 o el $CodigoLiteralREQ2 - $MateriaRequisito2.";
										$Permiso="NO"; $ReloadAfter="";
										$PermisoMensajeNotruf="No tomes prisa...";
									}
								}
							}
					}
			}
			else
			{
				#Asignatura no existe
				$PermisoMensaje="No puedes matricular esta asignatura porque no está dentro de tu plan de estudios en el periodo actual.";
				$Permiso="NO"; $ReloadAfter="";
				$PermisoMensajeNotruf="Asignaturas fantasma!";	
				
			}		
	break;
###############################################################################################################################################################

	case '3R':
				//Asignatura con 3 requisitos
				#Codigo para datos de asignatura
				$DatosAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE'";
				$doDA=mysqli_query($link, $DatosAsignatura);
				$rowDA=mysqli_fetch_array($doDA);
				

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
									#Matriculada
									if ($rowDA['PUNT']==0 || $rowDA['PUNT']=='') {
										#Matriculada y sin puntaje alguno											
										$PermisoMensaje="No puedes matricular esta asignatura porque ya está matriculada.";
										$PermisoMensajeNotruf="2 veces lo mismo? No aguanta...";
										$Permiso="NO";
										$ReloadAfter="";
									}
									else
									{
										#Matriculada y ya posee puntajes
										$PermisoMensaje="No puedes matricular esta asignatura porque ya está matriculada y se está cursando.";
										$PermisoMensajeNotruf="2 veces lo mismo? No aguanta...";
										$Permiso="NO";
										$ReloadAfter="";
									}
								break;

								case 'C':
									#Cancelada
									if($rowDA['ADDRM']=='3'){
										$PermisoMensaje="No puedes matricular esta asignatura porque está inhabilitada al superarse el límite de veces que puede ser cancelada.";
										$PermisoMensajeNotruf="Debería darte pena.";
										$Permiso="NO";
										$ReloadAfter="";
									} 
								break;

								case 'OK':
									#Aprobada
									$PermisoMensaje="No puedes matricular esta asignatura porque ya la aprobaste.";
									$PermisoMensajeNotruf="Para qué otra vez?";
									$Permiso="NO"; $ReloadAfter="";
								break;

								case 'NM':
									if(($rowDA['PARAM']=='NM') && ($rowDA['ADDRM']=='1' || $rowDA['ADDRM']=='2')){
									$PermisoMensaje="La has matriculado nuevamente, pues, fue cancelada una (1) vez. <br />Ya la puedes cursar.";
									$Permiso="SI"; $ReloadAfter="window.location.reload()";
									$PermisoMensajeNotruf="Ojalá esta vez sí!";
									}
									else
									{
										$PermisoMensaje="Fue matriculada exitosamente por primera vez. <br />Ya la puedes cursar.";
										$Permiso="SI"; $ReloadAfter="window.location.reload()";
										$PermisoMensajeNotruf="Esperamos la disfrutes!";
									}

								break;
							
								default:
									$PermisoMensaje="No puedes matricular esta asignatura porque tal parece la universidad dio la orden de no ofertarla.";
									$PermisoMensajeNotruf="No te puedes quejar.";
									$Permiso="NO"; $ReloadAfter="";
								break;
							}	
									
							break;	

								case 52:
									//Se han aprobado los requisitos #2 y #3
									$PermisoMensaje="No puedes matricular esta asignatura porque has aprobado el requisito $CodigoLiteralREQ2 - $MateriaRequisito2 y el requisito $CodigoLiteralREQ3 - $MateriaRequisito3, pero te falta aprobar $CodigoLiteralREQ1 - $MateriaRequisito1.";
										$Permiso="NO"; $ReloadAfter="";
										$PermisoMensajeNotruf="No tomes prisa...";
									
								break;
								
								case 42:
									//Se han aprobado los requisitos #1 y #3
									$PermisoMensaje="No puedes matricular esta asignatura porque has aprobado el requisito $CodigoLiteralREQ1 - $MateriaRequisito1 y el requisito $CodigoLiteralREQ3 - $MateriaRequisito3, pero te falta aprobar $CodigoLiteralREQ2 - $MateriaRequisito2.";
										$Permiso="NO"; $ReloadAfter="";
										$PermisoMensajeNotruf="No tomes prisa...";
									
								break;

								case 32:
									//Se han aprobado los requisitos #1 y #2
									$PermisoMensaje="No puedes matricular esta asignatura porque has aprobado el requisito $CodigoLiteralREQ1 - $MateriaRequisito1 y el requisito $CodigoLiteralREQ2 - $MateriaRequisito2, pero te falta aprobar $CodigoLiteralREQ3 - $MateriaRequisito3.";
										$Permiso="NO"; $ReloadAfter="";
										$PermisoMensajeNotruf="No tomes prisa...";
									
								break;

								case 31:
									//Solamente se tiene aprobado el requisito 3
									$PermisoMensaje="No puedes matricular esta asignatura porque has aprobado el requisito $CodigoLiteralREQ3 - $MateriaRequisito3 pero te falta aprobar el requisito $CodigoLiteralREQ1 - $MateriaRequisito1 y también $CodigoLiteralREQ2 - $MateriaRequisito2.";
										$Permiso="NO"; $ReloadAfter="";
										$PermisoMensajeNotruf="No tomes prisa...";
									
								break;

								case 21:
									//Solamente se tiene aprobado el requisito 2
									$PermisoMensaje="No puedes matricular esta asignatura porque has aprobado el requisito $CodigoLiteralREQ2 - $MateriaRequisito2 pero te falta aprobar el requisito $CodigoLiteralREQ1 - $MateriaRequisito1 y también $CodigoLiteralREQ3 - $MateriaRequisito3.";
										$Permiso="NO"; $ReloadAfter="";
										$PermisoMensajeNotruf="No tomes prisa...";
									
								break;

								case 11:
									//Solamente se tiene aprobado el requisito 1
									$PermisoMensaje="No puedes matricular esta asignatura porque has aprobado el requisito $CodigoLiteralREQ1 - $MateriaRequisito1 pero te falta aprobar el requisito $CodigoLiteralREQ2 - $MateriaRequisito2 y también $CodigoLiteralREQ3 - $MateriaRequisito3.";
										$Permiso="NO"; $ReloadAfter="";
										$PermisoMensajeNotruf="No tomes prisa...";
									
								break;

								default:
									//No se han aprobado 3 de las requisito
									$PermisoMensaje="No puedes matricular esta asignatura porque no has aprobado ninguno de los 3 requisitos: $CodigoLiteralREQ3 - $MateriaRequisito3, $CodigoLiteralREQ1 - $MateriaRequisito1 y $CodigoLiteralREQ2 - $MateriaRequisito2.";
										$Permiso="NO"; $ReloadAfter="";
										$PermisoMensajeNotruf="No tomes prisa y exigencia...";
									
								break;
							}
				}
				else
					{
						#Asignatura no existe
						$PermisoMensaje="No puedes matricular esta asignatura porque no está dentro de tu plan de estudios en el periodo actual.";
						$Permiso="NO"; $ReloadAfter="";
						$PermisoMensajeNotruf="Asignaturas fantasma!";	
						
					}
	break;

###############################################################################################################################################################
	//Asignatura que se habilita por créditos
	case 'CR':
		$getDataElectivaBase="SELECT * FROM platformdata WHERE MAT='$MATCODE' AND ID='$ID' AND PROGC='$PROGC'";
		$doDEB=mysqli_query($link, $getDataElectivaBase);
		$rowDEB=mysqli_fetch_array($doDEB);
		$Parametro2=$rowDEB['PARAM2'];
		if($Parametro2=='E'){
			//Estudiante aprobó y acumuló un número de créditos mayor o igual a los requeridos para electiva
				$PermisoMensaje="Has aprobado los $CreditosParaElectiva créditos requeridos para activar esta asignatura. <br />Ahora debes buscar la electiva de tu preferencia y matricularla.";
				$Permiso="NO"; $ReloadAfter="";
				$PermisoMensajeNotruf="Busca tu electiva preferida";
		}
		else
		{
			if($Parametro2==''){
				//Estudiante aun no tiene los créditos, revisar si es verdad
				$TotalCreditosAcumulados="SELECT SUM(CR) as TotalCreditos FROM platformdata WHERE ID='$ID' AND PARAM IN('OK')";
	            $ResultadoPuntajes = mysqli_query($link, $TotalCreditosAcumulados);   
	            $rowCreditos = mysqli_fetch_array($ResultadoPuntajes, MYSQL_ASSOC);
	            $DataCreditos=$rowCreditos["TotalCreditos"];
	            if($DataCreditos>=$CreditosParaElectiva){
	            	//Ya los tiene, permitir el distintivo de habilidad para electiva
	            	$allowE="UPDATE platformdata SET PARAM2='E' WHERE MAT='$MATCODE' AND ID='$ID' AND PROGC='$PROGC'";
	            	$doallowE=mysqli_query($link, $allowE);
	            	//Dado que ya se habilitó, mostrar los datos de habilidad
	            	$PermisoMensaje="Has aprobado los $CreditosParaElectiva créditos suficientes para activar esta asignatura. <br />Ahora debes buscar la electiva de tu preferencia y matricularla.";
					$Permiso="NO"; $ReloadAfter="";
					$PermisoMensajeNotruf="Busca tu electiva preferida";		
	            }
	            else
	            {
	            	//Estudiante no posee aprobados y acumulados un número de créditos mayor o igual a los requeridos para electiva
	            	$PermisoMensaje="No has aprobado los $CreditosParaElectiva créditos suficientes para activar esta asignatura.";
					$Permiso="NO"; $ReloadAfter="";
					$PermisoMensajeNotruf="Vuelve cuando tengas lo requerido.";
	            }
	         }
			else{
				//Si se llega a este punto, es porque hay alguna electiva matriculada
				//Por lo tanto se toma como parámetros de la asignatura base electiva, como si estuviera
				///matriculada como cualquier otra asignatura
				//Pero, se debe revisar si la asignatura electiva ya está aprobada, en caso de estarlo la asignatura base debe aparecer aprobada
				$MatCodeElectiva=$rowDEB['PARAM2'];
				$getDataElectivaAsignatura="SELECT * FROM platformdata WHERE MAT='$MatCodeElectiva' AND ID='$ID' AND PROGC='$PROGC'";
				$doGDEA=mysqli_query($link, $getDataElectivaAsignatura);
				$rowGDEA=mysqli_fetch_array($doGDEA);
				$EstadoElectiva=$rowGDEA['PARAM'];
				if ($EstadoElectiva=='OK') {
					#Estudiane aprobó la electiva
					$PermisoMensaje="Esta asignatura la has aprobado porque aprobaste la asignatura electiva de preferencia.";
					$Permiso="NO"; $ReloadAfter="";
					$PermisoMensajeNotruf="Bien por ti";
					//Se establece que el botón de acciones de matrícula irá desactivado para esta opción
					
				}
				else
				{
					$PermisoMensaje="Actualmente está asignatura se determina como matriculada porque es la base para que la electiva que matriculaste pueda cursarse.";
					$Permiso="NO"; $ReloadAfter="";
					$PermisoMensajeNotruf="No vayas a cometer errores.";
					//Se establece que el botón de acciones de matrícula irá desactivado para esta opción
					
				}
				
			}
		}
	break;

###############################################################################################################################################################
	//Asignatura de reeemplazo de electiva base
	case 'E':
		//Asignatura Electiva base
		$getDataElectivaBase="SELECT * FROM platformdata WHERE MAT='$Mat' AND ID='$ID' AND PROGC='$PROGC'";
		$doDEB=mysqli_query($link, $getDataElectivaBase);
		$rowDEB=mysqli_fetch_array($doDEB);
		$ParametroE=$rowDEB['PARAM2'];

		if($ParametroE==$MATCODE){
			//La asignatura electiva coincide con la que el estudiante matriculó
			//Tiene electiva matriculada
				//Revisar estado de la electiva
				//Asignatura electiva
				$getElectiva="SELECT * FROM platformdata WHERE MAT='$MATCODE' AND ID='$ID' AND PROGC='$PROGC'";
				$doE=mysqli_query($link, $getElectiva);
				$rowE=mysqli_fetch_array($doE);
				
				switch ($rowE['PARAM']) {
					case 'A':
					#Matriculada
							if ($rowE['PUNT']==0 || $rowE['PUNT']=='') {
								#Matriculada y sin puntaje alguno
								$PermisoMensaje="No puedes matricular esta asignatura electiva porque ya está matriculada.";
								$PermisoMensajeNotruf="2 electivas, imposible!";
								$Permiso="NO"; $ReloadAfter="";
							}
							else
							{
								#Matriculada y ya posee puntajes
								$PermisoMensaje="No puedes matricular esta asignatura porque ya está matriculada.";
								$PermisoMensajeNotruf="2 veces lo mismo? No aguanta...";
								$Permiso="NO";										 $ReloadAfter="";
							}
					break;
					case 'OK':
						#Aprobada
						$PermisoMensaje="No puedes matricular esta asignatura electiva porque ya la aprobaste.";
						$PermisoMensajeNotruf="Para qué otra vez?";
						$Permiso="NO"; $ReloadAfter="";
					break;

					default:
						#Sin paramétro
						#También puede ser que, el sistema al buscar todas las electivas a ver cuál está matriculada omita detalles.
						$PermisoMensaje="No puedes matricular esta asignatura electiva.";
						$PermisoMensajeNotruf="Órdenes de la admón.";
						$Permiso="NO";							 $ReloadAfter="";
					break; 
			}
		}
		else
		{
			if ($ParametroE=='') {
				#El estudiante aun no puede matricular electivas
				$PermisoMensaje="No puedes matricular esta asignatura electiva porque no se han aprobado los créditos requeridos de su asignatura base.";
						$PermisoMensajeNotruf="Vuelve cuando tengas lo requerido.";
						$Permiso="NO";				 $ReloadAfter="";
			}
			else
			{
				
				if($ParametroE=='E'){
					//No tiene electiva matriculada y puede matricularla
				//Puede matricular pero no la ha matriculado
					$PermisoMensaje="La asignatura electiva ha sido matriculada exitosamente <br />Ya puedes cursarla.";
					$Permiso="SI"; $ReloadAfter="window.location.reload()";

					$PermisoMensajeNotruf="Esperamos la disfrutes!";
				}else
				{
					$PermisoMensaje="No puedes matricular esta asignatura electiva porque ya tienes una asignatura electiva matriculada.";
						$PermisoMensajeNotruf="Vuelve cuando tengas lo requerido.";
						$Permiso="NO";	 $ReloadAfter="";
				}
				
			}
		}

	

	break;*/

########################################################################################################
	//Asignatura no definida
	default:
		$PermisoMensaje="No puedes matricular esta asignatura, parece ser que este periodo no se ofertará.";
		$PermisoMensajeNotruf="Órdenes de la admón.";
		$Permiso="NO";	 $ReloadAfter="";
	break;
}

?>
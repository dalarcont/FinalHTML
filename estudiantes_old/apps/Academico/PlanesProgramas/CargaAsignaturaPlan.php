<?php 
/*
switch ($MatType) {

	case 'NR':
		#Asignatura sin requisitos para ser cursada
		#Codigo para datos de asignatura
		$DatosAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE'";
		$doDA=mysqli_query($link, $DatosAsignatura);
		$rowDA=mysqli_fetch_array($doDA);
		$Definitiva=MostrarFlotante($rowDA['DEF']); $EstadoAsignatura=$rowDA['PARAM'];
			if ($rowDA['MAT']==$MATCODE) {
				#Asignatura existe
					#Detalle y Estado
						switch ($rowDA['PARAM']) {
							case 'A':
								#Matriculada
										if($rowDA['ASIST']<$Semanas){
								            //Asignatura aun no tiene definitiva, mostrar una parcial
								            $DefParcial=$rowDA['PUNT']/$Semanas;
								            $Puntaje=MostrarFlotante($DefParcial);
								        }
								        else
								        {
								            //Asignatura ya tiene definitiva
								            $Puntaje=MostrarFlotante($rowDA['DEF']);
								        }
										if ($rowDA['PUNT']==0 || $rowDA['PUNT']=='') {
											#Matriculada y sin puntaje alguno											
											$Detalle=" NO LA HAS INICIADO.";
										}
										else
										{
											#Matriculada y ya posee puntajes
											$Detalle=" SE ESTÁ CURSANDO Y LA LLEVAS EN $Puntaje ";											
										}
										#Está matriculada, e independienemente de si el estudiante ya la inició o no, su color de representación es 'matriculada'
										$Estado=" ASIGNATURA ESTÁ MATRICULADA";
										$Color="#FFFF00";
										$ColorTxt="#000000";
							break;

							case 'C':
								#Cancelada
									if($rowDA['ADDRM']=='3'){
										$Estado=" ASIGNATURA ESTÁ CANCELADA E INHABILITADA";
										$Detalle=" Esta asignatura no la puedes cursar porque la has cancelado el número de veces permitidas. &#10 No puedes volver a cursarla ni habilitarla durante el periodo actual &#10 Qué decepción.";
										#El color representante de una asignatura inhabilitada por doble cancelación es igual al color de inhabilitada.
										$Color="#BDBDBD";
										$Puntaje=" No tendrá puntaje por inhabilidad.";
										$ColorTxt="#000000";
									}
									else
									{
										$Estado=" ASIGNATURA YA ESTÁ CANCELADA";
										$Detalle=" Esta asignatura no la puedes cursar porque la has cancelado. &#10 Puedes matricularla de nuevo para volver a cursarla.";
										#El color representante de una asignatura que posee 1 sola cancelación es igual al color de no matriculada.
										$Color="#FF7307";
										$Puntaje=" No dispone de puntaje por no estar matriculada.";
										$ColorTxt="#FFFFFF";
									}
									
							break;

							case 'OK':
								#Aprobada
									$Estado=" ASIGNATURA APROBADA";
									switch ($rowDA['PARAM2']) {
										case 'CLASIF':
											#Asignatura se aprobó por el sistema de clasificación.
											$Detalle=" Esta asignatura la aprobaste por clasificación en el periodo $SMActual.&#10 No se puede volver a cursar una asignatura aprobada.";
										break;
										case 'NORMAL':
											#Asignatura se cursó y aprobó normalmente
											$Detalle=" Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 No se puede volver a cursar una asignatura aprobada.";
										break;
										case 'ADMIN':
											#Asignatura se aprobó por orden de la administración de la universidad
											$Detalle=" Esta asignatura la has aprobado por orden de la administración universitaria con nota definitiva $Definitiva. &#10 Puede haber sido por solicitud estrictamente justificada, corrupción académica y/o bendición y fortuna. &#10 No se puede volver a cursar una asignatura aprobada.";
										break;
										default:
											#Asignatura se aprobó por otro medio diferente a Clasificación y/o Curso Normal
											$Detalle=" Esta asignatura la has aprobado por curso dudoso e irregular con nota definitiva $Definitiva en el periodo $SMActual.&#10 No se puede volver a cursar una asignatura aprobada.";
										break;
									}
									
									$Puntaje=" ".$rowDA['PUNT']." ";
									$Color="#0B610B";
									$ColorTxt="#FFFFFF";
										
								break;

							case 'NM':
								require '../../divsys/MateriasPerCredits.php';
								$Estado=" ASIGNATURA NO ESTÁ MATRICULADA";
								$Detalle=" La asignatura no está matriculada. &#10 Se puede cursar. &#10 Posee $Creditos crédito(s) académico(s)";
								$Puntaje=" No dispone de puntaje por no estar matriculada.";
								$Color="#FF7307";
								$ColorTxt="#FFFFFF";
							break;
							
							default:
									#Sin paramétro
										$Estado=" ASIGNATURA NO VÁLIDA";
										$Detalle=" La asignatura no es válida. &#10 Puede que la universidad haya desactivado la asignatura para este periodo.";	
										$Puntaje=" Sin puntaje por invalidez.";
										$Color="#FAFAFA";
										$ColorTxt="#000000";
								break;
						}			
			}
			else
			{
				#Asignatura no existe
				$Detalle=" LA ASIGNATURA NO FORMA PARTE DEL PLAN DE ESTUDIOS ACTUAL&#10 La directiva pudo haber retirado la asignatura de tu plan de estudios.";
				$Estado=" LA ASIGNATURA NO EXISTE. ";
				$Puntaje=" Sin puntaje por invalidez";
				$Color="#999966";
				$ColorTxt="#000000";
			}
	break;
###############################################################################################################################################################
	case '1R':
		#Asignatura con 1 requisitos
		#Codigo para datos de asignatura
		$DatosAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE'";
		$doDA=mysqli_query($link, $DatosAsignatura);
		$rowDA=mysqli_fetch_array($doDA);
		$Definitiva=MostrarFlotante($rowDA['DEF']); $EstadoAsignatura=$rowDA['PARAM'];

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
										if($rowDA['ASIST']<$Semanas){
								            //Asignatura aun no tiene definitiva, mostrar una parcial
								            $DefParcial=$rowDA['PUNT']/$Semanas;
								            $Puntaje=MostrarFlotante($DefParcial);
								        }
								        else
								        {
								            //Asignatura ya tiene definitiva
								            $Puntaje=MostrarFlotante($rowDA['DEF']);
								        }
										if ($rowDA['PUNT']==0 || $rowDA['PUNT']=='') {
											#Matriculada y sin puntaje alguno											
											$Detalle=" NO LA HAS INICIADO.";
										}
										else
										{
											#Matriculada y ya posee puntajes
											$Detalle=" SE ESTÁ CURSANDO Y LA LLEVAS EN $Puntaje ";											
										}
										#Está matriculada, e independienemente de si el estudiante ya la inició o no, su color de representación es 'matriculada'
										$Estado=" ASIGNATURA ESTÁ MATRICULADA";
										$Color="#FFFF00";
										$ColorTxt="#000000";
								break;

								case 'C':
								#Cancelada
									if($rowDA['ADDRM']=='3'){
										$Estado=" ASIGNATURA ESTÁ CANCELADA E INHABILITADA";
										$Detalle=" Esta asignatura no la puedes cursar porque la has cancelado el número de veces permitidas. &#10 No puedes volver a cursarla ni habilitarla durante el periodo actual &#10 Qué decepción.";
										#El color representante de una asignatura inhabilitada por doble cancelación es igual al color de inhabilitada.
										$Color="#BDBDBD";
										$Puntaje=" No tendrá puntaje por inhabilidad.";
										$ColorTxt="#000000";
									}
									else
									{
										$Estado=" ASIGNATURA YA ESTÁ CANCELADA";
										$Detalle=" Esta asignatura no la puedes cursar porque la has cancelado. &#10 Puedes matricularla de nuevo para volver a cursarla.";
										#El color representante de una asignatura que posee 1 sola cancelación es igual al color de no matriculada.
										$Color="#FF7307";
										$Puntaje=" No dispone de puntaje por no estar matriculada.";
										$ColorTxt="#FFFFFF";
									}
									
								break;

								case 'OK':
								#Aprobada
									$Estado=" ASIGNATURA APROBADA";
									switch ($rowDA['PARAM2']) {
										case 'CLASIF':
											#Asignatura se aprobó por el sistema de clasificación.
											$Detalle=" Esta asignatura la aprobaste por clasificación en el periodo $SMActual.&#10 No se puede volver a cursar una asignatura aprobada.";
										break;
										case 'NORMAL':
											#Asignatura se cursó y aprobó normalmente
											$Detalle=" Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 No se puede volver a cursar una asignatura aprobada.";
										break;
										case 'ADMIN':
											#Asignatura se aprobó por orden de la administración de la universidad
											$Detalle=" Esta asignatura la has aprobado por orden de la administración universitaria con nota definitiva $Definitiva. &#10 Puede haber sido por solicitud estrictamente justificada, corrupción académica y/o bendición y fortuna. &#10 No se puede volver a cursar una asignatura aprobada.";
										break;
										default:
											#Asignatura se aprobó por otro medio diferente a Clasificación y/o Curso Normal
											$Detalle=" Esta asignatura la has aprobado por curso dudoso e irregular con nota definitiva $Definitiva en el periodo $SMActual.&#10 No se puede volver a cursar una asignatura aprobada.";
										break;
									}
									
									$Puntaje=" ".$rowDA['PUNT']." ";
									$Color="#0B610B";
									$ColorTxt="#FFFFFF"	;
								break;

								case 'NM':
									require '../../divsys/MateriasPerCredits.php';
									$Estado=" ASIGNATURA NO ESTÁ MATRICULADA. - SE PUEDE CURSAR";
									$Detalle=" Esta asignatura la puedes cursar porque has aprobado el requisito $CodigoLiteralREQ - $MateriaRequisito &#10 Todavía no la has matriculado. &#10 Posee $Creditos crédito(s) académico(s)";
									$Color="#FF7307";
									$Puntaje=" No dispone de puntaje por no estar matriculada.";
									$ColorTxt="#FFFFFF";
								break;
							
								default:
									#Sin paramétro
										$Estado=" ASIGNATURA NO VÁLIDA";
										$Detalle=" La asignatura no es válida. &#10 Puede que la universidad haya desactivado la asignatura para este periodo.";	
										$Puntaje=" Sin puntaje por invalidez.";
										$Color="#FAFAFA";
										$ColorTxt="#000000";
								break;
								}	
							
						}
						else
						{
							#Materia requisito no aprobada
							$Estado=" ASIGNATURA NO SE PUEDE CURSAR";
							$Detalle=" Esta asignatura NO la puedes cursar porque no has aprobado el requisito $CodigoLiteralREQ - $MateriaRequisito";
							#Puntaje de la materia seleccionada
							$Puntaje=" Sin puntaje por requerimiento no aprobado";
							$Color="#FF0000";
							$ColorTxt="#FFFFFF";
							$Accion="none";
						}
				}
				else
				{
					#Requisito no existe
					$Estado=" NO SE PUEDE CURSAR";
					$Detalle=" Esta asignatura nunca la podrás cursar porque el requisito $CodigoLiteralREQ - $MateriaRequisito no está en tu plan de estudios. &#10 Este incidente puede ocurrir si la universidad desactivó la asignatura para este periodo.";
					$Puntaje=" ";
					$Color="#999966";
					$ColorTxt="#000000";
					$Accion="none";
				}
					
			}
			else
			{
				#Asignatura no existe
				$Detalle=" LA ASIGNATURA NO FORMA PARTE DEL PLAN DE ESTUDIOS ACTUAL. &#10 La directiva pudo haber retirado la asignatura de tu plan de estudios.";
				$Estado=" LA ASIGNATURA NO EXISTE ";
				$Puntaje=" Sin puntaje por invalidez";
				$Color="#999966";
				$ColorTxt="#000000";
				$Accion="none";
			}
	break;

###############################################################################################################################################################
	case '2R':
		#Asignatura con 2 requisitos
		#Codigo para datos de asignatura
		$DatosAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE'";
		$doDA=mysqli_query($link, $DatosAsignatura);
		$rowDA=mysqli_fetch_array($doDA);
		$Definitiva=MostrarFlotante($rowDA['DEF']); $EstadoAsignatura=$rowDA['PARAM'];

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
										if($rowDA['ASIST']<$Semanas){
								            //Asignatura aun no tiene definitiva, mostrar una parcial
								            $DefParcial=$rowDA['PUNT']/$Semanas;
								            $Puntaje=MostrarFlotante($DefParcial);
								        }
								        else
								        {
								            //Asignatura ya tiene definitiva
								            $Puntaje=MostrarFlotante($rowDA['DEF']);
								        }
										if ($rowDA['PUNT']==0 || $rowDA['PUNT']=='') {
											#Matriculada y sin puntaje alguno											
											$Detalle=" NO LA HAS INICIADO.";
										}
										else
										{
											#Matriculada y ya posee puntajes
											$Detalle=" SE ESTÁ CURSANDO Y LA LLEVAS EN $Puntaje ";											
										}
										#Está matriculada, e independienemente de si el estudiante ya la inició o no, su color de representación es 'matriculada'
										$Estado=" ASIGNATURA ESTÁ MATRICULADA";
										$Color="#FFFF00";
										$ColorTxt="#000000";
								break;

								case 'C':
								#Cancelada
									if($rowDA['ADDRM']=='3'){
										$Estado=" ASIGNATURA ESTÁ CANCELADA E INHABILITADA";
										$Detalle=" Esta asignatura no la puedes cursar porque la has cancelado el número de veces permitidas. &#10 No puedes volver a cursarla ni habilitarla durante el periodo actual &#10 Qué decepción.";
										#El color representante de una asignatura inhabilitada por doble cancelación es igual al color de inhabilitada.
										$Color="#BDBDBD";
										$Puntaje=" No tendrá puntaje por inhabilidad.";
										$ColorTxt="#000000";
									}
									else
									{
										$Estado=" ASIGNATURA YA ESTÁ CANCELADA";
										$Detalle=" Esta asignatura no la puedes cursar porque la has cancelado. &#10 Puedes matricularla de nuevo para volver a cursarla.";
										#El color representante de una asignatura que posee 1 sola cancelación es igual al color de no matriculada.
										$Color="#FF7307";
										$Puntaje=" No dispone de puntaje por no estar matriculada.";
										$ColorTxt="#FFFFFF";
									}
									
								break;

								case 'OK':
								#Aprobada
									$Estado=" ASIGNATURA APROBADA";
									switch ($rowDA['PARAM2']) {
										case 'CLASIF':
											#Asignatura se aprobó por el sistema de clasificación.
											$Detalle=" Esta asignatura la aprobaste por clasificación en el periodo $SMActual.&#10 No se puede volver a cursar una asignatura aprobada.";
										break;
										case 'NORMAL':
											#Asignatura se cursó y aprobó normalmente
											$Detalle=" Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 No se puede volver a cursar una asignatura aprobada.";
										break;
										case 'ADMIN':
											#Asignatura se aprobó por orden de la administración de la universidad
											$Detalle=" Esta asignatura la has aprobado por orden de la administración universitaria con nota definitiva $Definitiva. &#10 Puede haber sido por solicitud estrictamente justificada, corrupción académica y/o bendición y fortuna. &#10 No se puede volver a cursar una asignatura aprobada.";
										break;
										default:
											#Asignatura se aprobó por otro medio diferente a Clasificación y/o Curso Normal
											$Detalle=" Esta asignatura la has aprobado por curso dudoso e irregular con nota definitiva $Definitiva en el periodo $SMActual.&#10 No se puede volver a cursar una asignatura aprobada.";
										break;
									}
									
									$Puntaje=" ".$rowDA['PUNT']." ";
									$Color="#0B610B";
									$ColorTxt="#FFFFFF";
								break;
								
								case 'NM':
									$Estado=" ASIGNATURA NO ESTÁ MATRICULADA. - SE PUEDE CURSAR";
									require '../../divsys/MateriasPerCredits.php';
									$Detalle=" Esta asignatura la puedes cursar porque has aprobado el requisito #1 $Mat1 - $MateriaRequisito1 y el requisito #2 $Mat2 - $MateriaRequisito2 &#10 Todavía no la has matriculado. &#10 Posee $Creditos crédito(s) académico(s)";
									$Color="#FF7307";
									$Puntaje=" No dispone de puntaje por no estar matriculada.";
									$ColorTxt="#FFFFFF";
								break;
							
								default:
									#Sin paramétro
										$Estado=" ASIGNATURA NO VÁLIDA";
										$Detalle=" La asignatura no es válida. &#10 Puede que la universidad haya desactivado la asignatura para este periodo.";	
										$Puntaje=" Sin puntaje por invalidez.";
										$Color="#FAFAFA";
										$ColorTxt="#000000";
								break;
									}	

					}
					else
					{
						if ($REQ1=='OK' AND $REQ2=='NO') {
								#Requisito 1 aprobado Requisito 2 no aprobado 
								$Estado=" ASIGNATURA NO SE PUEDE CURSAR";
								$Detalle=" Esta asignatura NO la puedes cursar porque has aprobado el requisito #1 $CodigoLiteralREQ1 - $MateriaRequisito1, pero el requisito #2 $CodigoLiteralREQ2 - $MateriaRequisito2, NO lo has aprobado. ";
								$Puntaje=" No dispone de puntaje por falta de aprobación de uno de sus requisitos.";
								$Color="#FF0000";
								$ColorTxt="#FFFFFF";
								$Accion="none";
							}
							else
							{
								if ($REQ1=='NO' AND $REQ2=='OK') {
									#Requisito 1 no aprobado Requisito 2 aprobado 
									$Estado=" ASIGNATURA NO SE PUEDE CURSAR";
									$Detalle=" Esta asignatura NO la puedes cursar porque el requisito #1 $CodigoLiteralREQ1 - $MateriaRequisito1, NO lo has aprobado pero el requisito #2 $CodigoLiteralREQ2 - $MateriaRequisito2, lo has aprobado. ";
									$Puntaje=" No dispone de puntaje por falta de aprobación de uno de sus requisitos.";
									$Color="#FF0000";
									$ColorTxt="#FFFFFF";
									$Accion="none";
								}
								else
								{
									if ($REQ1=='NO' AND $REQ2=='NO') {
										
										#Ambos requisitos no están aprobados
										$Estado=" ASIGNATURA NO SE PUEDE CURSAR";
										$Detalle=" Esta asignatura NO la puedes cursar porque los requisitos #1 $CodigoLiteralREQ1 - $MateriaRequisito1, y #2 $CodigoLiteralREQ2 - $MateriaRequisito2, NO los has aprobado. ";
										$Puntaje=" No dispone de puntaje por falta de aprobación de ambos requisitos.";
										$Color="#FF0000";
										$ColorTxt="#FFFFFF";
										$Accion="none";
									}
									else
									{
										#Error en lectura de parámetros, puede ser alguno de los requerimientos no esté matriculado o esté cancelado.
										$Detalle=" El sistema no ha podido leer los parámetros de los requisitos de esta asignatura. &#10 Puede haber fallas en el sistema o algún error en el proceso de matrícula de alguno de los dos requisitos. &#10 Puede que alguno de los requisitos no esté matriculado o alguno esté cancelado.";
										$Estado=" ASIGNATURA NO SE PUEDE CURSAR";
										$Puntaje=" No dispone de puntaje por falta de parámetros de sus requisitos.";
										$Color="#FF0000";
										$ColorTxt="#FFFFFF";
										$Accion="none";
									}
								}
							}
					}
				
					
			}
			else
			{
				#Asignatura no existe
				$Detalle=" LA ASIGNATURA NO EXISTE.";
				$Estado=" LA ASIGNATURA NO FORMA PARTE DEL PLAN DE ESTUDIOS ACTUAL &#10 La directiva pudo haber retirado la asignatura de tu plan de estudios.";
				$Puntaje=" Sin puntaje por invalidez";
				$Color="#999966";
				$ColorTxt="#000000";
				$Accion="none";
			}		
	break;
###############################################################################################################################################################

	case '3R':
				//Asignatura con 3 requisitos
				#Codigo para datos de asignatura
				$DatosAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE'";
				$doDA=mysqli_query($link, $DatosAsignatura);
				$rowDA=mysqli_fetch_array($doDA);
				$Definitiva=MostrarFlotante($rowDA['DEF']); $EstadoAsignatura=$rowDA['PARAM'];

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
										if($rowDA['ASIST']<$Semanas){
								            //Asignatura aun no tiene definitiva, mostrar una parcial
								            $DefParcial=$rowDA['PUNT']/$Semanas;
								            $Puntaje=MostrarFlotante($DefParcial);
								        }
								        else
								        {
								            //Asignatura ya tiene definitiva
								            $Puntaje=MostrarFlotante($rowDA['DEF']);
								        }
										if ($rowDA['PUNT']==0 || $rowDA['PUNT']=='') {
											#Matriculada y sin puntaje alguno											
											$Detalle=" NO LA HAS INICIADO.";
										}
										else
										{
											#Matriculada y ya posee puntajes
											$Detalle=" SE ESTÁ CURSANDO Y LA LLEVAS EN $Puntaje ";											
										}
										#Está matriculada, e independienemente de si el estudiante ya la inició o no, su color de representación es 'matriculada'
										$Estado=" ASIGNATURA ESTÁ MATRICULADA";
										$Color="#FFFF00";
										$ColorTxt="#000000";
										break;

										case 'C':
										#Cancelada
											if($rowDA['ADDRM']=='3'){
												$Estado=" ASIGNATURA ESTÁ CANCELADA E INHABILITADA";
												$Detalle=" Esta asignatura no la puedes cursar porque la has cancelado el número de veces permitidas. &#10 No puedes volver a cursarla ni habilitarla durante el periodo actual &#10 Qué decepción.";
												#El color representante de una asignatura inhabilitada por doble cancelación es igual al color de inhabilitada.
												$Color="#BDBDBD";
												$Puntaje=" No tendrá puntaje por inhabilidad.";
												$ColorTxt="#000000";
											}
											else
											{
												$Estado=" ASIGNATURA YA ESTÁ CANCELADA";
												$Detalle=" Esta asignatura no la puedes cursar porque la has cancelado. &#10 Puedes matricularla de nuevo para volver a cursarla.";
												#El color representante de una asignatura que posee 1 sola cancelación es igual al color de no matriculada.
												$Color="#FF7307";
												$Puntaje=" No dispone de puntaje por no estar matriculada.";
												$ColorTxt="#FFFFFF";
											}
										break;

										case 'OK':
										#Aprobada
											$Estado=" ASIGNATURA APROBADA";
											switch ($rowDA['PARAM2']) {
												case 'CLASIF':
													#Asignatura se aprobó por el sistema de clasificación.
													$Detalle=" Esta asignatura la aprobaste por clasificación en el periodo $SMActual.&#10 No se puede volver a cursar una asignatura aprobada.";
												break;
												case 'NORMAL':
													#Asignatura se cursó y aprobó normalmente
													$Detalle=" Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 No se puede volver a cursar una asignatura aprobada.";
												break;
												case 'ADMIN':
													#Asignatura se aprobó por orden de la administración de la universidad
													$Detalle=" Esta asignatura la has aprobado por orden de la administración universitaria con nota definitiva $Definitiva. &#10 Puede haber sido por solicitud estrictamente justificada, corrupción académica y/o bendición y fortuna. &#10 No se puede volver a cursar una asignatura aprobada.";
												break;
												default:
													#Asignatura se aprobó por otro medio diferente a Clasificación y/o Curso Normal
													$Detalle=" Esta asignatura la has aprobado por curso dudoso e irregular con nota definitiva $Definitiva en el periodo $SMActual.&#10 No se puede volver a cursar una asignatura aprobada.";
												break;
											}
											
											$Puntaje=" ".$rowDA['PUNT']." ";
											$Color="#0B610B";	
											$ColorTxt="#FFFFFF";
										break;
										
										case 'NM':
										require '../../divsys/MateriasPerCredits.php';
										
											$Estado=" ASIGNATURA NO ESTÁ MATRICULADA. - SE PUEDE CURSAR";
											$Detalle=" Esta asignatura la puedes cursar porque has aprobado los 3 requisitos #1 $CodigoLiteralREQ1 - $MateriaRequisito1, #2 $CodigoLiteralREQ2 - $MateriaRequisito2, y #3 $CodigoLiteralREQ3 - $MateriaRequisito3. &#10 Todavía no la has matriculado. &#10 Posee $Creditos crédito(s) académico(s)";
											$Color="#FF7307";
											$Puntaje=" No dispone de puntaje por no estar matriculada.";
											$ColorTxt="#FFFFFF";
										break;
									
										default:
											#Sin paramétro
												$Estado=" ASIGNATURA NO VÁLIDA";
												$Detalle=" La asignatura no es válida. &#10 Puede que la universidad haya desactivado la asignatura para este periodo.";	
												$Puntaje=" Sin puntaje por invalidez.";
												$Color="#FAFAFA";
												$ColorTxt="#000000";
										break;
									}	
									
								break;	

								case 52:
									//Se han aprobado los requisitos #2 y #3
									$Estado=" ASIGNATURA NO SE PUEDE CURSAR";
									$Puntaje=" No dispone de puntaje por falta de aprobación de sus requisitos.";
									$Detalle=" Esta asignatura NO la puedes cursar porque solo has aprobado los requisitos #2 $CodigoLiteralREQ2 - $MateriaRequisito2, y #3 $CodigoLiteralREQ3 - $MateriaRequisito3 falta que apruebes el requisito #1 $CodigoLiteralREQ1 - $MateriaRequisito1 ." ;
									$Color="#FF0000";
									$ColorTxt="#FFFFFF";
									$Accion="none";
								break;
								
								case 42:
									//Se han aprobado los requisitos #1 y #3
									$Estado=" ASIGNATURA NO SE PUEDE CURSAR";
									$Puntaje=" No dispone de puntaje por falta de aprobación de sus requisitos.";
									$Detalle=" Esta asignatura NO la puedes cursar porque solo has aprobado los requisitos #1 $CodigoLiteralREQ1 - $MateriaRequisito1, y #3 $CodigoLiteralREQ3 - $MateriaRequisito3 falta que apruebes el requisito #2 $CodigoLiteralREQ2 - $MateriaRequisito2 ." ;
									$Color="#FF0000";
									$ColorTxt="#FFFFFF";
									$Accion="none";
								break;

								case 32:
									//Se han aprobado los requisitos #1 y #2
									$Estado=" ASIGNATURA NO SE PUEDE CURSAR";
									$Puntaje=" No dispone de puntaje por falta de aprobación de sus requisitos.";
									$Detalle=" Esta asignatura NO la puedes cursar porque solo has aprobado los requisitos #1 $CodigoLiteralREQ1 - $MateriaRequisito1, y #2 $CodigoLiteralREQ2 - $MateriaRequisito2 falta que apruebes el requisito #3 $CodigoLiteralREQ3 - $MateriaRequisito3 ." ;
									$Color="#FF0000";
									$ColorTxt="#FFFFFF";
									$Accion="none";
								break;

								case 31:
									//Solamente se tiene aprobado el requisito 3
									$Estado=" ASIGNATURA NO SE PUEDE CURSAR";
									$Puntaje=" No dispone de puntaje por falta de aprobación de sus requisitos.";
									$Detalle=" Esta asignatura NO la puedes cursar porque solo has aprobado el requisito #3 $CodigoLiteralREQ3 - $MateriaRequisito3, falta que apruebes los requisitos #1 $CodigoLiteralREQ1 - $MateriaRequisito1 y #2 $CodigoLiteralREQ2 - $MateriaRequisito2 ." ;
									$Color="#FF0000";
									$ColorTxt="#FFFFFF";
									$Accion="none";
								break;

								case 21:
									//Solamente se tiene aprobado el requisito 2
									$Estado=" ASIGNATURA NO SE PUEDE CURSAR";
									$Puntaje=" No dispone de puntaje por falta de aprobación de sus requisitos.";
									$Detalle=" Esta asignatura NO la puedes cursar porque solo has aprobado el requisito #2 $CodigoLiteralREQ2 - $MateriaRequisito2, falta que apruebes los requisitos #1 $CodigoLiteralREQ1 - $MateriaRequisito1 y #3 $CodigoLiteralREQ3 - $MateriaRequisito3 ." ;
									$Color="#FF0000";
									$ColorTxt="#FFFFFF";
									$Accion="none";
								break;

								case 11:
									//Solamente se tiene aprobado el requisito 1
									$Estado=" ASIGNATURA NO SE PUEDE CURSAR";
									$Puntaje=" No dispone de puntaje por falta de aprobación de sus requisitos.";
									$Detalle=" Esta asignatura NO la puedes cursar porque solo has aprobado el requisito #1 $CodigoLiteralREQ1 - $MateriaRequisito1, falta que apruebes los requisitos #2 $CodigoLiteralREQ2 - $MateriaRequisito2 y #3 $CodigoLiteralREQ3 - $MateriaRequisito3 ." ;
									$Color="#FF0000";
									$ColorTxt="#FFFFFF";
									$Accion="none";
								break;

								default:
									//No se han aprobado 3 de las requisito
									$Estado=" ASIGNATURA NO SE PUEDE CURSAR";
									$Puntaje=" No dispone de puntaje por falta de aprobación de sus requisitos.";
									$Detalle=" Esta asignatura NO la puedes cursar porque no has aprobado los 3 requisitos: $CodigoLiteralREQ1 - $MateriaRequisito1, $CodigoLiteralREQ2 - $MateriaRequisito2 y $CodigoLiteralREQ3 - $MateriaRequisito3 ." ;
									$Color="#FF0000";
									$ColorTxt="#FFFFFF";
									$Accion="none";
								break;
							}
				}
				else
					{
						#Asignatura no existe
						$Detalle=" LA ASIGNATURA NO EXISTE.";
						$Estado=" LA ASIGNATURA NO FORMA PARTE DEL PLAN DE ESTUDIOS ACTUAL &#10 La directiva pudo haber retirado la asignatura de tu plan de estudios.";
						$Puntaje=" Sin puntaje por invalidez";
						$Color="#999966";
						$ColorTxt="#000000";
						$Accion="none";
					}
	break;

###############################################################################################################################################################
	//Asignatura que se habilita por créditos
	case 'CR':
		$getDataElectivaBase="SELECT * FROM platformdata WHERE MAT='$MATCODE' AND ID='$ID'";
		$doDEB=mysqli_query($link, $getDataElectivaBase);
		$rowDEB=mysqli_fetch_array($doDEB);
		$Parametro2=$rowDEB['PARAM2'];
		if($Parametro2=='E'){
			//Estudiante aprobó y acumuló un número de créditos mayor o igual a los requeridos para electiva
            	$Estado=" ASIGNATURA BASE ELECTIVA PERMITIDA";
            	$Detalle=" Esta asignatura se activa cuando apruebas y acumulas $CreditosParaElectiva créditos académicos &#10 Puedes matricular tú electiva de preferencia, recuerda que una vez la matricules no hay vuelta atrás. &#10 La asignatura electiva matriculada reemplazará a esta asignatura.";				
				$Puntaje=" No dispone de puntaje por ser electiva base.";
				$Color="#FF7307";
				$ColorTxt="#FFFFFF";
				//Se establece que el botón de acciones de matrícula irá desactivado para esta opción
					$Accion="none";
					$ThereIsElectiva=TRUE;
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
	            	//Ya los tiene, permitir el distintivo de habilidad para electiva tanto a ella misma como a sus hijas electivas
	            	$allowE="UPDATE platformdata SET PARAM2='E' WHERE MAT IN('$MATCODE') AND ID='$ID' AND PROGC='$PROGC'";
	            	$doallowE=mysqli_query($link, $allowE);
	            	//Dado que ya se habilitó, mostrar los datos de habilidad
	            	$Estado=" ASIGNATURA BASE ELECTIVA PERMITIDA";
	            	$Detalle=" Esta asignatura se activa cuando apruebas y acumulas $CreditosParaElectiva créditos académicos &#10 Puedes matricular tú electiva de preferencia, recuerda que una vez la matricules no hay vuelta atrás. &#10 La asignatura electiva matriculada reemplazará a esta asignatura.";				
					$Puntaje=" No dispone de puntaje por ser electiva base.";
					$Color="#FF7307";
					$ColorTxt="#FFFFFF";
					//Se establece que el botón de acciones de matrícula irá desactivado para esta opción
					$Accion="none";
					$ThereIsElectiva=TRUE;
	            }
	            else
	            {
	            	//Estudiante no posee aprobados y acumulados un número de créditos mayor o igual a los requeridos para electiva
	            	$Estado=" ASIGNATURA BASE ELECTIVA NO PERMITIDA";
	            	$Detalle=" Esta asignatura se activa cuando apruebas y acumulas $CreditosParaElectiva créditos académicos &#10 Aún no has aprobado el requisito de créditos aprobados acumulados. ";				
					$Puntaje=" No dispone de puntaje por ser electiva base.";
					$Color="#FF0000";
					$ColorTxt="#FFFFFF";
					//Se establece que el botón de acciones de matrícula irá desactivado para esta opción
					$Accion="none";
					$ThereIsElectiva=FALSE;
					//$ThereIsElectivaMatriculada=
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
					$Estado=" ASIGNATURA APROBADA POR ELECTIVA ";
					$Detalle=" Asignatura electiva base exige 1 asignatura electiva aprobada, se aprobó (1) asignatura electiva. &#10 Los créditos y puntajes de la electiva aprobada se ceden a la asignatura electiva base. &#10 No se puede volver a cursar esta asignatura ni otras electivas durante el periodo actual.";
					$Puntaje=$rowGDEA['PUNT'];
					$Color="#0B610B";
					$ColorTxt="#FFFFFF";
					//Se establece que el botón de acciones de matrícula irá desactivado para esta opción
					$Accion="none";
					$ThereIsElectiva=TRUE;

				}
				else
				{
					$Estado=" ASIGNATURA ELECTIVA BASE MATRICULADA";
					$Detalle=" Esta asignatura electiva base ya está portando una asignatura electiva. &#10 Para más información de la asignatura electiva matriculada, revisa el apartado de asignaturas electivas. &#10 Está asignatura la apruebas si y solo si apruebas la electiva matriculada.";
					$Puntaje=" Revisa el apartado de asignaturas electivas. ";
					$Color="#FFFF00";
					$ColorTxt="#000000";
					//Se establece que el botón de acciones de matrícula irá desactivado para esta opción
					$Accion="none";
					$ThereIsElectiva=TRUE;

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
		//Asignatura electiva
		$getElectiva="SELECT * FROM platformdata WHERE MAT='$MATCODE' AND ID='$ID' AND PROGC='$PROGC'";
		$doE=mysqli_query($link, $getElectiva);
		$rowE=mysqli_fetch_array($doE);
		//$ParametroE Solo puede tener estos estados:
		// E = Permiso electiva concedido y aun no porta asignatura electiva
		// MATCODE = Permiso electiva concedido, ya tiene asignatura electiva
		// '' (vacío) = Permiso electiva no concedido.

		//1 -- La electiva base está activada?
		if($ParametroE=='E'){
			//Asignatura electiva base activada y no tiene asignatura matriculada
				require '../../divsys/MateriasPerCredits.php';
				$Estado=" ASIGNATURA ELECTIVA NO ESTÁ MATRICULADA";
				$Detalle=" La asignatura electiva no está matriculada. &#10 Se puede martricular dado que cumples con los requisitos. &#10 Posee $Creditos crédito(s) académico(s)";
				$Color="#FF7307";
				$ColorTxt="#FFFFFF";
				$ThereIsElectivaMatriculada="SINMATRICULAR";
		}
		else
		{
			//Asignatura electiva indica un estado diferente de activa
			//2 -- Verificar si la asignatura electiva base posee una electiva matriculada o simplemente NO está activa
			if($ParametroE!='' && $ParametroE!='E'){
				//Asignatura electiva porta una asignatura electiva
				//3 -- Verificar que la asignatura matriculada es diferente de la solicitada
				if($ParametroE==$MATCODE){
					//Asignatura electiva matriculada es igual a la solicitada
					//Revisar estado de la electiva
					//$getElectiva="SELECT * FROM platformdata WHERE MAT='$MATCODE' AND ID='$ID' AND PROGC='$PROGC'";
					//$doE=mysqli_query($link, $getElectiva);
					//$rowE=mysqli_fetch_array($doE);
					$Definitiva=MostrarFlotante($rowE['DEF']);
					switch ($rowE['PARAM']) {
						case 'A':
							#Matriculada
								if($rowDA['ASIST']<$Semanas){
						            //Asignatura aun no tiene definitiva, mostrar una parcial
						            	$DefParcial=$rowDA['PUNT']/$Semanas;
						            	$Puntaje=MostrarFlotante($DefParcial);
						        }
						        else
						        {
						            //Asignatura ya tiene definitiva
						            	$Puntaje=MostrarFlotante($rowDA['DEF']);
						        }
								if ($rowDA['PUNT']==0 || $rowDA['PUNT']=='') {
									#Matriculada y sin puntaje alguno											
										$Detalle=" NO LA HAS INICIADO.";
								}
								else
								{
									#Matriculada y ya posee puntajes
										$Detalle=" SE ESTÁ CURSANDO Y LA LLEVAS EN $Puntaje ";											
								}
								#Está matriculada, e independienemente de si el estudiante ya la inició o no, su color de representación es 'matriculada'
								$Estado=" ASIGNATURA ESTÁ MATRICULADA";
								$Color="#FFFF00";
								$ColorTxt="#000000";
								$ThereIsElectivaMatriculada="MATRICULADA";
						break;

						case 'OK':
						#Aprobada
							$setOKElectivaBase="UPDATE platformdata SET PARAM='OK' WHERE MAT='$Mat' AND ID='$ID'";
							$doSOKEB=mysqli_query($link, $setOKElectivaBase);
							
							switch ($rowE['PARAM2']) {
								case 'CLASIF':
									#Asignatura se aprobó por el sistema de clasificación.
									$Detalle=" Esta asignatura la aprobaste por clasificación en el periodo $SMActual.&#10 No se puede volver a cursar una asignatura aprobada.";
									$Estado=" ASIGNATURA ELECTIVA APROBADA ";
								break;
								case 'NORMAL':
									#Asignatura se cursó y aprobó normalmente
									$Detalle=" Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 No se puede volver a cursar una asignatura aprobada.";
									$Estado=" ASIGNATURA ELECTIVA APROBADA ";
								break;
								case 'ADMIN':
									#Asignatura se aprobó por orden de la administración de la universidad
									$Detalle=" Esta asignatura la has aprobado por orden de la administración universitaria con nota definitiva $Definitiva. &#10 Puede haber sido por solicitud estrictamente justificada, corrupción académica y/o bendición y fortuna. &#10 No se puede volver a cursar una asignatura aprobada.";
									$Estado=" ASIGNATURA ELECTIVA APROBADA ";
								break;
								default:
									#Asignatura se aprobó por otro medio diferente a Clasificación y/o Curso Normal
									$Detalle=" Esta asignatura la has aprobado por curso dudoso e irregular con nota definitiva $Definitiva en el periodo $SMActual.&#10 No se puede volver a cursar una asignatura aprobada.";
									$Estado=" ASIGNATURA ELECTIVA APROBADA ";
								break;
							}
							$Color="#0B610B";	
							$ColorTxt="#FFFFFF";
							$ThereIsElectivaMatriculada="APROBADA";
						break;

						default:
							#Sin paramétro
							#También puede ser que, el sistema al buscar todas las electivas a ver cuál está matriculada omita detalles.
								$Estado=" ASIGNATURA ELECTIVA NO SE PUEDE CURSAR";
								$Detalle=" La asignatura no puede matricularse ni cursarse .";	
								$Color="#FAFAFA";
								$ColorTxt="#000000";
								$Accion="none";
						break; 
					}
				}
				else
				{
					//Asignatura electiva matriculada es diferente a la solicitada
						$Estado=" ASIGNATURA ELECTIVA NO SE PUEDE CURSAR";
						$Detalle=" La asignatura no puede matricularse ni cursarse porque ya se matriculó la electiva de preferencia.";	
						$Color="#FF0000";
						$ColorTxt="#FFFFFF";
						
						switch ($rowE['PARAM']) {
							case 'A':
								$ThereIsElectivaMatriculada="MATRICULADA";
							break;

							case 'OK':
								$ThereIsElectivaMatriculada="APROBADA";
							break;

							default:
							break;
						}
				}
			}
			else
			{
				//Asignatura electiva base no permite matrícula, no se reunen requisitos
				$Estado=" ASIGNATURA ELECTIVA NO SE PUEDE MATRICULAR";
				$Detalle=" Esta asignatura electiva no podrás matricularla porque no has acumulado los créditos académicos requeridos para activar la asignatura electiva base. ";
				$Color="#FF0000";
				$ColorTxt="#FFFFFF";
			}
		}
/*
		if($rowE['PARAM2']=='E'){
			//La electiva base activó el permiso de matrícula de las asignaturas hijas electivas.
			//Para indicar a la asignatura si puede ser matriculada hay que revisar que no haya otra matriculada
			if($ParametroE='E'){
				//No se ha matriculado electiva
				//No tiene electiva matriculada y puede matricularla
				//Puede matricular pero no la ha matriculado
				require '../../divsys/MateriasPerCredits.php';
				$Estado=" ASIGNATURA ELECTIVA NO ESTÁ MATRICULADA";
				$Detalle=" La asignatura electiva no está matriculada. &#10 Se puede martricular dado que cumples con los requisitos. &#10 Posee $Creditos crédito(s) académico(s)";
				$Color="#FF7307";
				$ColorTxt="#FFFFFF";
			}
			else
			{
				//Ya hay electiva matriculada

			}
		}
		else
		{
			//La electiva base aun no ha activado el permiso de matrícula electiva
			#El estudiante aun no puede matricular electivas
				$Estado=" ASIGNATURA ELECTIVA NO SE PUEDE MATRICULAR";
				$Detalle=" Esta asignatura electiva no podrás matricularla porque no has acumulado los créditos académicos requeridos para activar la asignatura electiva base. ";
				$Color="#FF0000";
				$ColorTxt="#FFFFFF";
		}
		/*
		if($ParametroE=='$MATCODE'){
			//La asignatura electiva coincide con la que el estudiante matriculó
			//Tiene electiva matriculada
				//Revisar estado de la electiva
				//Asignatura electiva
				$getElectiva="SELECT * FROM platformdata WHERE MAT='$MATCODE' AND ID='$ID' AND PROGC='$PROGC'";
				$doE=mysqli_query($link, $getElectiva);
				$rowE=mysqli_fetch_array($doE);
				$Definitiva=MostrarFlotante($rowE['DEF']);
				switch ($rowE['PARAM']) {
					case 'A':
					#Matriculada
										if($rowDA['ASIST']<$Semanas){
								            //Asignatura aun no tiene definitiva, mostrar una parcial
								            $DefParcial=$rowDA['PUNT']/$Semanas;
								            $Puntaje=MostrarFlotante($DefParcial);
								        }
								        else
								        {
								            //Asignatura ya tiene definitiva
								            $Puntaje=MostrarFlotante($rowDA['DEF']);
								        }
										if ($rowDA['PUNT']==0 || $rowDA['PUNT']=='') {
											#Matriculada y sin puntaje alguno											
											$Detalle=" NO LA HAS INICIADO.";
										}
										else
										{
											#Matriculada y ya posee puntajes
											$Detalle=" SE ESTÁ CURSANDO Y LA LLEVAS EN $Puntaje ";											
										}
										#Está matriculada, e independienemente de si el estudiante ya la inició o no, su color de representación es 'matriculada'
										$Estado=" ASIGNATURA ESTÁ MATRICULADA";
										$Color="#FFFF00";
										$ColorTxt="#000000";
					break;

					case 'OK':
					#Aprobada
						$setOKElectivaBase="UPDATE platformdata SET PARAM='OK' WHERE MAT='$Mat' AND ID='$ID'";
						$doSOKEB=mysqli_query($link, $setOKElectivaBase);
						
						switch ($rowE['PARAM2']) {
							case 'CLASIF':
								#Asignatura se aprobó por el sistema de clasificación.
								$Detalle=" Esta asignatura la aprobaste por clasificación en el periodo $SMActual.&#10 No se puede volver a cursar una asignatura aprobada.";
								$Estado=" ASIGNATURA ELECTIVA APROBADA ";
							break;
							case 'NORMAL':
								#Asignatura se cursó y aprobó normalmente
								$Detalle=" Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 No se puede volver a cursar una asignatura aprobada.";
								$Estado=" ASIGNATURA ELECTIVA APROBADA ";
							break;
							case 'ADMIN':
								#Asignatura se aprobó por orden de la administración de la universidad
								$Detalle=" Esta asignatura la has aprobado por orden de la administración universitaria con nota definitiva $Definitiva. &#10 Puede haber sido por solicitud estrictamente justificada, corrupción académica y/o bendición y fortuna. &#10 No se puede volver a cursar una asignatura aprobada.";
								$Estado=" ASIGNATURA ELECTIVA APROBADA ";
							break;
							default:
								#Asignatura se aprobó por otro medio diferente a Clasificación y/o Curso Normal
								$Detalle=" Esta asignatura la has aprobado por curso dudoso e irregular con nota definitiva $Definitiva en el periodo $SMActual.&#10 No se puede volver a cursar una asignatura aprobada.";
								$Estado=" ASIGNATURA ELECTIVA APROBADA ";
							break;
						}
						$Color="#0B610B";	
						$ColorTxt="#FFFFFF";
					break;

					default:
						#Sin paramétro
						#También puede ser que, el sistema al buscar todas las electivas a ver cuál está matriculada omita detalles.
							$Estado=" ASIGNATURA ELECTIVA NO SE PUEDE CURSAR";
							$Detalle=" La asignatura no puede matricularse ni cursarse .";	
							$Color="#FAFAFA";
							$ColorTxt="#000000";
							$Accion="none";
					break; 
			}
		}
		else
		{
			if ($ParametroE=='') {
				#El estudiante aun no puede matricular electivas
				$Estado=" ASIGNATURA ELECTIVA NO SE PUEDE MATRICULAR";
				$Detalle=" Esta asignatura electiva no podrás matricularla porque no has acumulado los créditos académicos requeridos para activar la asignatura electiva base. ";
				$Color="#FF0000";
				$ColorTxt="#FFFFFF";
				$Accion="none";
			}
			else
			{
				
				if($ParametroE=='E'){
					//No tiene electiva matriculada y puede matricularla
					//Puede matricular pero no la ha matriculado
					require '../../divsys/MateriasPerCredits.php';
					$Estado=" ASIGNATURA ELECTIVA NO ESTÁ MATRICULADA";
					$Detalle=" La asignatura electiva no está matriculada. &#10 Se puede martricular dado que cumples con los requisitos. &#10 Posee $Creditos crédito(s) académico(s)";
					$Color="#FF7307";
					$ColorTxt="#FFFFFF";
					$Accion="block";
					$EstadoBotonMatricula="MATRICULAR";
				}
				else
				{
					$Estado=" ASIGNATURA ELECTIVA NO SE PUEDE CURSAR";
					$Detalle=" La asignatura no puede matricularse ni cursarse porque ya se matriculó la electiva de preferencia.";	
							$Color="#FF0000";
							$ColorTxt="#FFFFFF";
							$Accion="none";
				}
				
			}
		}



	break;

########################################################################################################
	//Asignatura no definida
	default:
		$Detalle=" Error. No disponibilidad de parámetros internos de la asignatura seleccionada.";
		$Estado=$Detalle;
		$Puntaje=$Detalle;
		$Color="#999966";
		$ColorTxt="#000000";
	break;
}
*/
?>
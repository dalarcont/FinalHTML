<?php 

switch ($MatType) {

	case 'NR':
		#Asignatura sin requisitos para ser cursada
		#Codigo para datos de asignatura
		$DatosAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE' AND PROGC IN('$PROGC')";
		$doDA=mysqli_query($link, $DatosAsignatura);
		$rowDA=mysqli_fetch_array($doDA);
		$Definitiva=MostrarFlotante($rowDA['DEF']); $EstadoAsignatura=$rowDA['PARAM'];
		require '../../divsys/MateriasPerCredits.php';
			if ($rowDA['MAT']==$MATCODE) {
				#Asignatura existe
					#Detalle y Estado
						switch ($rowDA['PARAM']) {
							case 'A':
								#Asignatura matriculada
								$Estado="* ASIGNATURA ESTÁ MATRICULADA";
								$Detalle="* La asignatura está matriculada.&#10 * $Creditos créditos académicos.";
								$Color="#FFFF00";
								$ColorTxt="#000000";
								$Cancelar=true; $Matricular=false;
							break;

							case 'C':
								#Cancelada
								$Estado="* ASIGNATURA CANCELADA E INHABILITADA";
								$Detalle="* Esta asignatura no la puedes cursar porque la has cancelado el número de veces permitidas.&#10 * No puedes volver a cursarla ni habilitarla durante el periodo actual. Qué decepción.&#10 * $Creditos créditos académicos.";
								#El color representante de una asignatura inhabilitada por doble cancelación es igual al color de inhabilitada.
								$Color="#BDBDBD";
								$ColorTxt="#000000";
								$Cancelar=false; $Matricular=false;
							break;

							case 'OK':
								#Aprobada
								$Estado="* ASIGNATURA APROBADA";
									switch ($rowDA['PARAM2']) {
										case 'CLASIF':
											#Asignatura se aprobó por el sistema de clasificación.
											$Detalle="* Esta asignatura la aprobaste por clasificación en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
										break;
										case 'NORMAL':
											#Asignatura se cursó y aprobó normalmente
											$Detalle="* Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
										break;
										case 'ADMIN':
											#Asignatura se aprobó por orden de la administración de la universidad
											$Detalle="* Esta asignatura la has aprobado por orden de la administración universitaria con nota definitiva $Definitiva.&#10 * Puede haber sido por solicitud estrictamente justificada, corrupción académica y/o bendición y fortuna.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
										break;
										case 'TRANSF':
											#La asignatura se aprobó porque se cursó y se aprobó en otro programa académico
											$PROGC=$rowDA['PARAM3']; require '../../divsys/DatosProgramas.php'; $NombreProgramaPrevio=$NombrePrograma; $PeriodoAprobacion=$rowDA['SM'];
											$Detalle="* La asignatura se aprobó anteriormente por curso en otro programa académico. &#10 * La asignatura fue cursada en el programa $NombreProgramaPrevio en el periodo $PeriodoAprobacion. &#10 * Nota definitiva: $Definitiva &#10 * $Creditos créditos académicos.";
										break;
										case 'SUF':
											#Asignatura se aprobó porque el estudiante presentó prueba de suficiencia en conocimientos
											$Detalle="* La asignatura se aprobó por suficiencia en el periodo $SMActual. &#10 * Nota definitiva: $Definitiva &#10 * $Creditos créditos académicos.";
										break;
										default:
											#Asignatura se aprobó por otro medio diferente a Clasificación y/o Curso Normal
											$Detalle="* Esta asignatura la has aprobado por curso dudoso e irregular con nota definitiva $Definitiva en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.  &#10 * $Creditos créditos académicos.";
										break;
									}
									$Color="#0B610B";
									$ColorTxt="#FFFFFF";
									$Cancelar=false; $Matricular=false;
							break;

							case 'NM':
								#Se puede cursar
								require '../../divsys/MateriasPerCredits.php';
								$Estado="* ASIGNATURA SE PUEDE MATRICULAR";
								$Detalle="* La asignatura no está matriculada. &#10 * Se puede cursar. &#10 * Posee $Creditos crédito(s) académico(s)";
								$Color="#FF7307";
								$ColorTxt="#FFFFFF";
								$Cancelar=false; $Matricular=true;
							break;
							
							default:
								#Sin paramétro
								$Estado="* ASIGNATURA NO VÁLIDA";
								$Detalle="* La asignatura no es válida. &#10 * Puede que la universidad haya desactivado la asignatura para este periodo.";
								$Color="#FAFAFA";
								$ColorTxt="#000000";
								$Cancelar=false; $Matricular=false;
							break;
					}
			}
			else
			{
				#Asignatura no existe
				$Detalle="* LA ASIGNATURA NO FORMA PARTE DEL PLAN DE ESTUDIOS ACTUAL&#10 * La directiva pudo haber retirado la asignatura de tu plan de estudios.";
				$Estado="* LA ASIGNATURA NO EXISTE. ";
				$Color="#999966";
				$ColorTxt="#000000";
				$Cancelar=false; $Matricular=false;
			}

	break;

###############################################################################################################################################################
	case '1R':
		#Asignatura con 1 requisitos
		#Codigo para datos de asignatura
		$DatosAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE' AND PROGC IN('$PROGC')";
		$doDA=mysqli_query($link, $DatosAsignatura);
		$rowDA=mysqli_fetch_array($doDA);
		$Definitiva=MostrarFlotante($rowDA['DEF']); $EstadoAsignatura=$rowDA['PARAM'];
		require '../../divsys/MateriasPerCredits.php';
			if ($rowDA['MAT']==$MATCODE) {
				#Asignatura existe, procedemos a revisar su requerimiento
				#Materia requisito
				$MATCODERequisito=$Mat1;
				require '../../divsys/MateriasReqs.php';
				#Verificar que materia requisito exista
				$Requisito="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat1') AND PROGC IN('$PROGC')";
				$doReq=mysqli_query($link, $Requisito);
				$rowReq=mysqli_fetch_array($doReq);
				if ($rowReq['MAT']==$Mat1) {
					#Requisito existe
					$Parametro=$rowReq['PARAM'];
						if ($Parametro=='OK') {
							/* Si la asignatura requisito fue aprobada entonces la asignatura en cuestión en caso de que haya sido aprobada mediante curso sin requisitos, el sistema debe cambiar el parámetrok 'OK2' => 'OK'*/
							if($rowDA['PARAM']=='OK2'){
								$OktoOK="UPDATE platformdata set PARAM='OK' WHERE MAT='$MATCODE' AND PARAM='OK2' AND ID='$ID' AND PROGC IN('$PROGC')";
								$doOktoOk=mysqli_query($link, $OktoOK);
								if($doOktoOk){
									//Dado que se hizo un cambio en un parámetro, indicar el cambio a su respectiva variable
									$rowDA['PARAM']='OK';
								}
							}
								switch ($rowDA['PARAM']) {
								case 'A':
									#Asignatura matriculada
									$Estado="* ASIGNATURA ESTÁ MATRICULADA";
									$Detalle="* La asignatura está matriculada.&#10 * $Creditos créditos académicos.";
									$Color="#FFFF00";
									$ColorTxt="#000000";
									$Cancelar=true; $Matricular=false;
								break;

								case 'C':
									#Cancelada
									$Estado="* ASIGNATURA CANCELADA E INHABILITADA";
									$Detalle="* Esta asignatura no la puedes cursar porque la has cancelado el número de veces permitidas.&#10 * No puedes volver a cursarla ni habilitarla durante el periodo actual. Qué decepción.&#10 * $Creditos créditos académicos.";
									#El color representante de una asignatura inhabilitada por doble cancelación es igual al color de inhabilitada.
									$Color="#BDBDBD";
									$ColorTxt="#000000";
									$Cancelar=false; $Matricular=false;
								break;

								case 'OK':
									#Aprobada
									$Estado="* ASIGNATURA APROBADA";
										switch ($rowDA['PARAM2']) {
											case 'CLASIF':
												#Asignatura se aprobó por el sistema de clasificación.
												$Detalle="* Esta asignatura la aprobaste por clasificación en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
											break;
											case 'NORMAL':
												#Asignatura se cursó y aprobó normalmente
												$Detalle="* Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
											break;
											case 'ADMIN':
												#Asignatura se aprobó por orden de la administración de la universidad
												$Detalle="* Esta asignatura la has aprobado por orden de la administración universitaria con nota definitiva $Definitiva.&#10 * Puede haber sido por solicitud estrictamente justificada, corrupción académica y/o bendición y fortuna.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
											break;
											case 'TRANSF':
												#La asignatura se aprobó porque se cursó y se aprobó en otro programa académico
												$PROGC=$rowDA['PARAM3']; require '../../divsys/DatosProgramas.php'; $NombreProgramaPrevio=$NombrePrograma; $PeriodoAprobacion=$rowDA['SM'];
												$Detalle="* La asignatura se aprobó anteriormente por curso en otro programa académico. &#10 * La asignatura fue cursada en el programa $NombreProgramaPrevio en el periodo $PeriodoAprobacion. &#10 * Nota definitiva: $Definitiva &#10 * $Creditos créditos académicos.";
											break;
											case 'SUF':
												#Asignatura se aprobó porque el estudiante presentó prueba de suficiencia en conocimientos
												$Detalle="* La asignatura se aprobó por suficiencia en el periodo $SMActual. &#10 * Nota definitiva: $Definitiva &#10 * $Creditos créditos académicos.";
											break;
											default:
												#Asignatura se aprobó por otro medio diferente a Clasificación y/o Curso Normal
												$Detalle="* Esta asignatura la has aprobado por curso dudoso e irregular con nota definitiva $Definitiva en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.  &#10 * $Creditos créditos académicos.";
											break;
										}
										$Color="#0B610B";
										$ColorTxt="#FFFFFF";
										$Cancelar=false; $Matricular=false;
								break;

								case 'NM':
									#Se puede cursar
									$Estado="* ASIGNATURA SE PUEDE MATRICULAR";
									$Detalle="* La asignatura no está matriculada.&#10 * Asignatura requisito $CodigoLiteralREQ - $MateriaRequisito ha sido aprobada.&#10 * Posee $Creditos crédito(s) académico(s)";
									$Color="#FF7307";
									$ColorTxt="#FFFFFF";
									$Cancelar=false; $Matricular=true;
								break;
								
								default:
									#Sin paramétro
									$Estado="* ASIGNATURA NO VÁLIDA";
									$Detalle="* La asignatura no es válida. &#10 * Puede que la universidad haya desactivado la asignatura para este periodo.";
									$Color="#FAFAFA";
									$ColorTxt="#000000";
									$Cancelar=false; $Matricular=false;
								break;
								}
						}
						else
						{
								if((($Parametro=='NM' || $Parametro=='A') || $Parametro=='C') && $rowDA['PARAM']=='OK2'){
								//Asignatura fue aprobada por permiso de curso sin requisitos
									$Estado="* ASIGNATURA APROBADA Y EN SUSPENSIÓN";
									$Detalle="* Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 * Se pudo cursar por permiso de curso sin requisitos.&#10 * Esta asignatura se conservará aprobada pero figurará como NO aprobada ante las demás asignaturas que para su curso la requieran.&#10 * $Creditos créditos académicos.";
									$Color="#0B610B";
									$ColorTxt="#FFFFFF";
									$Cancelar=false; $Matricular=false;
								}
								else
								{
									if($rowDA['PARAM3']=='LETMAT'){
										#Permiso para cursar asignatura sin requisito
										//Verificar si ya está matriculada bajo este permiso
										if($rowDA['PARAM']=='A'){
											$Estado="* ASIGNATURA ESTÁ MATRICULADA";
											$Detalle="* La asignatura está matriculada.&#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * $Creditos créditos académicos.";
											$Color="#FFFF00";
											$ColorTxt="#000000";
											$Cancelar=true; $Matricular=false;
										}
										else
										{
											//Asignatura tiene permiso de curso sin requisito y está sin matricular
											$Estado="* ASIGNATURA SE PUEDE MATRICULAR";
											$Detalle="* La asignatura no está matriculada. &#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * Posee $Creditos crédito(s) académico(s)";
											$Color="#FF7307";
											$ColorTxt="#FFFFFF";
											$Cancelar=false; $Matricular=true;
										}
									}
									else
									{
										#Materia requisito no aprobada
										$Estado="* ASIGNATURA NO SE PUEDE CURSAR";
										$Detalle="* Esta asignatura NO la puedes cursar porque no has aprobado el requisito $CodigoLiteralREQ - $MateriaRequisito.&#10 * $Creditos créditos académicos.";
										#Puntaje de la materia seleccionada
										$Color="#FF0000";
										$ColorTxt="#FFFFFF";
										$Cancelar=false; $Matricular=false;
									}
								}
						}
				}
				else
				{
					#Requisito no existe
					$Estado="* NO SE PUEDE CURSAR";
					$Detalle="* Esta asignatura nunca la podrás cursar porque el requisito $CodigoLiteralREQ - $MateriaRequisito no está en tu plan de estudios.&#10 * Este incidente puede ocurrir si la universidad desactivó la asignatura para este periodo.";
					$Color="#999966";
					$ColorTxt="#000000";
					$Cancelar=false; $Matricular=false;
				}
					
			}
			else
			{
				#Asignatura no existe
				$Detalle="* La asignatura no forma parte del plan de estudios actual.&#10 * La directiva pudo haber retirado la asignatura de tu plan de estudios.";
				$Estado="* ASIGNATURA NO EXISTE ";
				$Color="#999966";
				$ColorTxt="#000000";
				$Cancelar=false; $Matricular=false;
			}
	break;

###############################################################################################################################################################
	case '2R':
		#Asignatura con 2 requisitos
		#Codigo para datos de asignatura
		$DatosAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE' AND PROGC IN('$PROGC')";
		$doDA=mysqli_query($link, $DatosAsignatura);
		$rowDA=mysqli_fetch_array($doDA);
		$Definitiva=MostrarFlotante($rowDA['DEF']); $EstadoAsignatura=$rowDA['PARAM'];
		require '../../divsys/MateriasPerCredits.php';
		if ($rowDA['MAT']==$MATCODE) {
			#Asignatura existe, procedemos a revisar su requerimiento
			#Materia requisito 1
				$MATCODERequisito=$Mat1;
				require '../../divsys/MateriasReqs.php';
				$MateriaRequisito1=$MateriaRequisito; $CodigoLiteralREQ1=$CodigoLiteralREQ;
				#Verificar que materia requisito exista
				$Requisito="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat1') AND PROGC IN('$PROGC')";
				$doReq=mysqli_query($link, $Requisito);
				$rowReq=mysqli_fetch_array($doReq);
				#Parámetro de la materia requisito 1
				if ($rowReq['PARAM']=='OK') {$REQ1='OK';}else{$REQ1='NO';}
			#Materia requisito 2
				$MATCODERequisito=$Mat2;
				require '../../divsys/MateriasReqs.php';
				$MateriaRequisito2=$MateriaRequisito; $CodigoLiteralREQ2=$CodigoLiteralREQ;
				#Verificar que materia requisito exista
				$Requisito2="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat2') AND PROGC IN('$PROGC')";
				$doReq2=mysqli_query($link, $Requisito2);
				$rowReq2=mysqli_fetch_array($doReq2);
				#Parámetro de la materia requisito 2
				if ($rowReq2['PARAM']=='OK') {$REQ2='OK';}else{$REQ2='NO';}
				#$Estado=$Mat2;
			
			#Comprobación de ambos requisitos
				if ($REQ1=='OK' AND $REQ2=='OK') {
					/* Si la asignatura requisito fue aprobada entonces la asignatura en cuestión en caso de que haya sido aprobada mediante curso sin requisitos, el sistema debe cambiar el parámetrok 'OK2' => 'OK'*/
					if($rowDA['PARAM']=='OK2'){
						$OktoOK="UPDATE platformdata set PARAM='OK' WHERE MAT='$MATCODE' AND ID='$ID' AND PARAM='OK2' AND PROGC IN('$PROGC')";
						$doOktoOk=mysqli_query($link, $OktoOK);
						if($doOktoOk){
							//Dado que se hizo un cambio en un parámetro, indicar el cambio a su respectiva variable
							$rowDA['PARAM']='OK';
						}
					}
					#Ambos requisitos completos, materia indicada puede cursarse sin problema
					switch ($rowDA['PARAM']) {
						case 'A':
							#Asignatura matriculada
							$Estado="* ASIGNATURA ESTÁ MATRICULADA";
							$Detalle="* La asignatura está matriculada.&#10 * $Creditos créditos académicos.";
							$Color="#FFFF00";
							$ColorTxt="#000000";
							$Cancelar=true; $Matricular=false;
						break;

						case 'C':
							#Cancelada
							$Estado="* ASIGNATURA CANCELADA E INHABILITADA";
							$Detalle="* Esta asignatura no la puedes cursar porque la has cancelado el número de veces permitidas.&#10 * No puedes volver a cursarla ni habilitarla durante el periodo actual. Qué decepción.&#10 * $Creditos créditos académicos.";
							#El color representante de una asignatura inhabilitada por doble cancelación es igual al color de inhabilitada.
							$Color="#BDBDBD";
							$ColorTxt="#000000";
							$Cancelar=false; $Matricular=false;
						break;

						case 'OK':
							#Aprobada
							$Estado="* ASIGNATURA APROBADA";
								switch ($rowDA['PARAM2']) {
									case 'CLASIF':
										#Asignatura se aprobó por el sistema de clasificación.
										$Detalle="* Esta asignatura la aprobaste por clasificación en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
									break;
									case 'NORMAL':
										#Asignatura se cursó y aprobó normalmente
										$Detalle="* Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
									break;
									case 'ADMIN':
										#Asignatura se aprobó por orden de la administración de la universidad
										$Detalle="* Esta asignatura la has aprobado por orden de la administración universitaria con nota definitiva $Definitiva.&#10 * Puede haber sido por solicitud estrictamente justificada, corrupción académica y/o bendición y fortuna.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
									break;
									case 'TRANSF':
										#La asignatura se aprobó porque se cursó y se aprobó en otro programa académico
										$PROGC=$rowDA['PARAM3']; require '../../divsys/DatosProgramas.php'; $NombreProgramaPrevio=$NombrePrograma; $PeriodoAprobacion=$rowDA['SM'];
										$Detalle="* La asignatura se aprobó anteriormente por curso en otro programa académico. &#10 * La asignatura fue cursada en el programa $NombreProgramaPrevio en el periodo $PeriodoAprobacion. &#10 * Nota definitiva: $Definitiva &#10 * $Creditos créditos académicos.";
									break;
									case 'SUF':
										#Asignatura se aprobó porque el estudiante presentó prueba de suficiencia en conocimientos
										$Detalle="* La asignatura se aprobó por suficiencia en el periodo $SMActual. &#10 * Nota definitiva: $Definitiva &#10 * $Creditos créditos académicos.";
									break;
									default:
										#Asignatura se aprobó por otro medio diferente a Clasificación y/o Curso Normal
										$Detalle="* Esta asignatura la has aprobado por curso dudoso e irregular con nota definitiva $Definitiva en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.  &#10 * $Creditos créditos académicos.";
									break;
								}
								$Color="#0B610B";
								$ColorTxt="#FFFFFF";
								$Cancelar=false; $Matricular=false;
						break;

						case 'NM':
							#Se puede cursar
							require '../../divsys/MateriasPerCredits.php';
							$Estado="* ASIGNATURA SE PUEDE MATRICULAR";
							$Detalle="* La asignatura no está matriculada. &#10 * Asignatura requisito 1 $CodigoLiteralREQ1 - $MateriaRequisito1 ha sido aprobada.&#10 * Asignatura requisito 2: $CodigoLiteralREQ2 - $MateriaRequisito2 ha sido aprobada.&#10 * Posee $Creditos crédito(s) académico(s)";
							$Color="#FF7307";
							$ColorTxt="#FFFFFF";
							$Cancelar=false; $Matricular=true;
						break;
						
						default:
							#Sin paramétro
							$Estado="* ASIGNATURA NO VÁLIDA";
							$Detalle="* La asignatura no es válida. &#10 * Puede que la universidad haya desactivado la asignatura para este periodo.";
							$Color="#FAFAFA";
							$ColorTxt="#000000";
							$Cancelar=false; $Matricular=false;
						break;
					}
				}
				else
				{
					if((($REQ1=='OK' || $REQ1=='NO') && ($REQ2=='OK' || $REQ2=='NO')) && $rowDA['PARAM']=='OK2'){
						//Asignatura fue aprobada por permiso de curso sin requisitos
									$Estado="* ASIGNATURA APROBADA Y EN SUSPENSIÓN";
									$Detalle="* Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 * Se pudo cursar por permiso de curso sin requisitos.&#10 * Esta asignatura se conservará aprobada pero figurará como NO aprobada ante las demás asignaturas que para su curso la requieran.&#10 * $Creditos créditos académicos.";
									$Color="#0B610B";
									$ColorTxt="#FFFFFF";
									$Cancelar=false; $Matricular=false;
					}
					else
					{
						if ($REQ1=='OK' AND $REQ2=='NO') {
								if($rowDA['PARAM3']=='LETMAT'){
									if($rowDA['PARAM']=='A'){
											$Estado="* ASIGNATURA ESTÁ MATRICULADA";
											$Detalle="* La asignatura está matriculada.&#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * $Creditos créditos académicos.";
											$Color="#FFFF00";
											$ColorTxt="#000000";
											$Cancelar=true; $Matricular=false;
										}
										else
										{
											//Asignatura tiene permiso de curso sin requisito y está sin matricular
											$Estado="* ASIGNATURA SE PUEDE MATRICULAR";
											$Detalle="* La asignatura no está matriculada. &#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * Posee $Creditos crédito(s) académico(s)";
											$Color="#FF7307";
											$ColorTxt="#FFFFFF";
											$Cancelar=false; $Matricular=true;
										}
								}
								else
								{
									#Requisito 1 aprobado Requisito 2 no aprobado 
									$Estado="* ASIGNATURA NO SE PUEDE CURSAR";
									$Detalle="* Esta asignatura NO la puedes cursar porque has aprobado el requisito #1 $CodigoLiteralREQ1 - $MateriaRequisito1, pero el requisito #2 $CodigoLiteralREQ2 - $MateriaRequisito2, NO lo has aprobado.&#10 * $Creditos créditos académicos.";
									$Color="#FF0000";
									$ColorTxt="#FFFFFF";
									$Cancelar=false; $Matricular=false;
								}
						}
						else
						{
							if ($REQ1=='NO' AND $REQ2=='OK') {
								if($rowDA['PARAM3']=='LETMAT'){
									if($rowDA['PARAM']=='A'){
											$Estado="* ASIGNATURA ESTÁ MATRICULADA";
											$Detalle="* La asignatura está matriculada.&#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * $Creditos créditos académicos.";
											$Color="#FFFF00";
											$ColorTxt="#000000";
											$Cancelar=true; $Matricular=false;
										}
										else
										{
											//Asignatura tiene permiso de curso sin requisito y está sin matricular
											$Estado="* ASIGNATURA SE PUEDE MATRICULAR";
											$Detalle="* La asignatura no está matriculada. &#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * Posee $Creditos crédito(s) académico(s)";
											$Color="#FF7307";
											$ColorTxt="#FFFFFF";
											$Cancelar=false; $Matricular=true;
										}
								}
								else
								{
									#Requisito 1 no aprobado Requisito 2 aprobado 
									$Estado="* ASIGNATURA NO SE PUEDE CURSAR";
									$Detalle="* Esta asignatura NO la puedes cursar porque el requisito #1 $CodigoLiteralREQ1 - $MateriaRequisito1, NO lo has aprobado pero el requisito #2 $CodigoLiteralREQ2 - $MateriaRequisito2, lo has aprobado.&#10 * $Creditos créditos académicos.";
									$Color="#FF0000";
									$ColorTxt="#FFFFFF";
									$Cancelar=false; $Matricular=false;
								}
							}
							else
							{
								if ($REQ1=='NO' AND $REQ2=='NO') {
									if($rowDA['PARAM3']=='LETMAT'){
										if($rowDA['PARAM']=='A'){
											$Estado="* ASIGNATURA ESTÁ MATRICULADA";
											$Detalle="* La asignatura está matriculada.&#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * $Creditos créditos académicos.";
											$Color="#FFFF00";
											$ColorTxt="#000000";
											$Cancelar=true; $Matricular=false;
										}
										else
										{
											//Asignatura tiene permiso de curso sin requisito y está sin matricular
											$Estado="* ASIGNATURA SE PUEDE MATRICULAR";
											$Detalle="* La asignatura no está matriculada. &#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * Posee $Creditos crédito(s) académico(s)";
											$Color="#FF7307";
											$ColorTxt="#FFFFFF";
											$Cancelar=false; $Matricular=true;
										}
									}
									else
									{
										#Ambos requisitos no están aprobados
										$Estado="* ASIGNATURA NO SE PUEDE CURSAR";
										$Detalle="* Esta asignatura NO la puedes cursar porque los requisitos #1 $CodigoLiteralREQ1 - $MateriaRequisito1, y #2 $CodigoLiteralREQ2 - $MateriaRequisito2, NO los has aprobado.&#10 * $Creditos créditos académicos.";
										$Color="#FF0000";
										$ColorTxt="#FFFFFF";
										$Cancelar=false; $Matricular=false;
									}
								}
								else
								{
									if($rowDA['PARAM3']=='LETMAT'){
										if($rowDA['PARAM']=='A'){
											$Estado="* ASIGNATURA ESTÁ MATRICULADA";
											$Detalle="* La asignatura está matriculada.&#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * $Creditos créditos académicos.";
											$Color="#FFFF00";
											$ColorTxt="#000000";
											$Cancelar=true; $Matricular=false;
										}
										else
										{
											//Asignatura tiene permiso de curso sin requisito y está sin matricular
											$Estado="* ASIGNATURA SE PUEDE MATRICULAR";
											$Detalle="* La asignatura no está matriculada. &#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * Posee $Creditos crédito(s) académico(s)";
											$Color="#FF7307";
											$ColorTxt="#FFFFFF";
											$Cancelar=false; $Matricular=true;
										}
									}
									else
									{
										#Error en lectura de parámetros, puede ser alguno de los requerimientos no esté matriculado o esté cancelado.
										$Detalle="* El sistema no ha podido leer los parámetros de los requisitos de esta asignatura.&#10 * Puede haber fallas en el sistema o algún error en el proceso de matrícula de alguno de los dos requisitos.&#10 * Puede que alguno de los requisitos no esté matriculado o alguno esté cancelado.&#10 * $Creditos créditos académicos.";
										$Estado="* ASIGNATURA NO SE PUEDE CURSAR";
										$Color="#FF0000";
										$ColorTxt="#FFFFFF";
										$Cancelar=false; $Matricular=false;
									}
									
								}
							}
						}
					}
				}	
		}
		else
		{
			#Asignatura no existe
			$Estado="* ASIGNATURA NO EXISTE.";
			$Detalle="* La asignatura no forma parte del plan de estudios actual.&#10 * La directiva pudo haber retirado la asignatura de tu plan de estudios.";
			$Color="#999966";
			$ColorTxt="#000000";
			$Cancelar=false; $Matricular=false;
		}		
	break;

###############################################################################################################################################################
	case '3R':
		//Asignatura con 3 requisitos
		#Codigo para datos de asignatura
		$DatosAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE' AND PROGC IN('$PROGC')";
		$doDA=mysqli_query($link, $DatosAsignatura);
		$rowDA=mysqli_fetch_array($doDA);
		$Definitiva=MostrarFlotante($rowDA['DEF']); $EstadoAsignatura=$rowDA['PARAM'];
		require '../../divsys/MateriasPerCredits.php';
		if ($rowDA['MAT']==$MATCODE) {
			#Asignatura existe, procedemos a revisar su requerimiento
			#Materia requisito 1
				$MATCODERequisito=$Mat1;
				require '../../divsys/MateriasReqs.php';
				$MateriaRequisito1=$MateriaRequisito;
				$CodigoLiteralREQ1=$CodigoLiteralREQ;
				#Verificar que materia requisito exista
				$Requisito="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat1') AND PROGC IN('$PROGC')";
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
				$Requisito2="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat2') AND PROGC IN('$PROGC')";
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
				$Requisito3="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat3') AND PROGC IN('$PROGC')";
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
					if($rowDA['PARAM']=='OK2'){
								$OktoOK="UPDATE platformdata set PARAM='OK' WHERE MAT='$MATCODE' AND ID='$ID' AND PARAM='OK2' AND PROGC IN('$PROGC')";
								$doOktoOk=mysqli_query($link, $OktoOK);
								if($doOktoOk){
									//Dado que se hizo un cambio en un parámetro, indicar el cambio a su respectiva variable
									$rowDA['PARAM']='OK';
								}
							}
					//Switch para estado de la asignatura original
					switch ($rowDA['PARAM']) {
						case 'A':
							#Asignatura matriculada
							$Estado="* ASIGNATURA ESTÁ MATRICULADA";
							$Detalle="* La asignatura está matriculada.&#10 * $Creditos créditos académicos.";
							$Color="#FFFF00";
							$ColorTxt="#000000";
							$Cancelar=true; $Matricular=false;
						break;

						case 'C':
							#Cancelada
							$Estado="* ASIGNATURA CANCELADA E INHABILITADA";
							$Detalle="* Esta asignatura no la puedes cursar porque la has cancelado el número de veces permitidas.&#10 * No puedes volver a cursarla ni habilitarla durante el periodo actual. Qué decepción.&#10 * $Creditos créditos académicos.";
							#El color representante de una asignatura inhabilitada por doble cancelación es igual al color de inhabilitada.
							$Color="#BDBDBD";
							$ColorTxt="#000000";
							$Cancelar=false; $Matricular=false;
						break;

						case 'OK':
							#Aprobada
							$Estado="* ASIGNATURA APROBADA";
								switch ($rowDA['PARAM2']) {
									case 'CLASIF':
										#Asignatura se aprobó por el sistema de clasificación.
										$Detalle="* Esta asignatura la aprobaste por clasificación en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
									break;
									case 'NORMAL':
										#Asignatura se cursó y aprobó normalmente
										$Detalle="* Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
									break;
									case 'ADMIN':
										#Asignatura se aprobó por orden de la administración de la universidad
										$Detalle="* Esta asignatura la has aprobado por orden de la administración universitaria con nota definitiva $Definitiva.&#10 * Puede haber sido por solicitud estrictamente justificada, corrupción académica y/o bendición y fortuna.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
									break;
									case 'TRANSF':
										#La asignatura se aprobó porque se cursó y se aprobó en otro programa académico
										$PROGC=$rowDA['PARAM3']; require '../../divsys/DatosProgramas.php'; $NombreProgramaPrevio=$NombrePrograma; $PeriodoAprobacion=$rowDA['SM'];
										$Detalle="* La asignatura se aprobó anteriormente por curso en otro programa académico. &#10 * La asignatura fue cursada en el programa $NombreProgramaPrevio en el periodo $PeriodoAprobacion. &#10 * Nota definitiva: $Definitiva &#10 * $Creditos créditos académicos.";
									break;
									case 'SUF':
										#Asignatura se aprobó porque el estudiante presentó prueba de suficiencia en conocimientos
										$Detalle="* La asignatura se aprobó por suficiencia en el periodo $SMActual. &#10 * Nota definitiva: $Definitiva &#10 * $Creditos créditos académicos.";
									break;
									default:
										#Asignatura se aprobó por otro medio diferente a Clasificación y/o Curso Normal
										$Detalle="* Esta asignatura la has aprobado por curso dudoso e irregular con nota definitiva $Definitiva en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.  &#10 * $Creditos créditos académicos.";
									break;
								}
								$Color="#0B610B";
								$ColorTxt="#FFFFFF";
								$Cancelar=false; $Matricular=false;
						break;

						case 'NM':
							#Se puede cursar
							require '../../divsys/MateriasPerCredits.php';
							$Estado="* ASIGNATURA SE PUEDE MATRICULAR";
							$Detalle="* La asignatura no está matriculada. &#10 * Asignatura requisito 1 $CodigoLiteralREQ1 - $MateriaRequisito1 ha sido aprobada.&#10 * Asignatura requisito 2 $CodigoLiteralREQ2 - $MateriaRequisito2 ha sido aprobada.&#10 * Asignatura requisito 3 $CodigoLiteralREQ3 - $MateriaRequisito3 ha sido aprobada.&#10 * Posee $Creditos crédito(s) académico(s)";
							$Color="#FF7307";
							$ColorTxt="#FFFFFF";
							$Cancelar=false; $Matricular=true;
						break;
						
						default:
							#Sin paramétro
							$Estado="* ASIGNATURA NO VÁLIDA";
							$Detalle="* La asignatura no es válida. &#10 * Puede que la universidad haya desactivado la asignatura para este periodo.";
							$Color="#FAFAFA";
							$ColorTxt="#000000";
							$Cancelar=false; $Matricular=false;
						break;
					}	
					
				break;	

				case 52:
					if($rowDA['PARAM3']=='LETMAT'){
						if($rowDA['PARAM']=='A'){
							$Estado="* ASIGNATURA ESTÁ MATRICULADA";
							$Detalle="* La asignatura está matriculada.&#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * $Creditos créditos académicos.";
							$Color="#FFFF00";
							$ColorTxt="#000000";
							$Cancelar=true; $Matricular=false;
						}
						else
						{
							if($rowDA['PARAM']=='OK2'){
								//Asignatura fue aprobada por permiso de curso sin requisitos
								$Estado="* ASIGNATURA APROBADA Y EN SUSPENSIÓN";
								$Detalle="* Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 * Se pudo cursar por permiso de curso sin requisitos.&#10 * Esta asignatura se conservará aprobada pero figurará como NO aprobada ante las demás asignaturas que para su curso la requieran.&#10 * $Creditos créditos académicos.";
								$Color="#0B610B";
								$ColorTxt="#FFFFFF";
								$Cancelar=false; $Matricular=false;
							}
							else
							{
								//Asignatura tiene permiso de curso sin requisito y está sin matricular
								$Estado="* ASIGNATURA SE PUEDE MATRICULAR";
								$Detalle="* La asignatura no está matriculada. &#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * Posee $Creditos crédito(s) académico(s)";
								$Color="#FF7307";
								$ColorTxt="#FFFFFF";
								$Cancelar=false; $Matricular=true;
							}
						}
					}
					else
					{
						//Se han aprobado los requisitos #2 y #3
						$Estado="* ASIGNATURA NO SE PUEDE CURSAR";
						$Detalle="* Esta asignatura NO la puedes cursar porque solo has aprobado los requisitos #2 $CodigoLiteralREQ2 - $MateriaRequisito2, y #3 $CodigoLiteralREQ3 - $MateriaRequisito3 falta que apruebes el requisito #1 $CodigoLiteralREQ1 - $MateriaRequisito1.&#10 * $Creditos créditos académicos." ;
						$Color="#FF0000";
						$ColorTxt="#FFFFFF";
						$Cancelar=false; $Matricular=false;
					}
				break;
				
				case 42:
					if($rowDA['PARAM3']=='LETMAT'){
						if($rowDA['PARAM']=='A'){
							$Estado="* ASIGNATURA ESTÁ MATRICULADA";
							$Detalle="* La asignatura está matriculada.&#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * $Creditos créditos académicos.";
							$Color="#FFFF00";
							$ColorTxt="#000000";
							$Cancelar=true; $Matricular=false;
						}
						else
						{
							if($rowDA['PARAM']=='OK2'){
								//Asignatura fue aprobada por permiso de curso sin requisitos
								$Estado="* ASIGNATURA APROBADA Y EN SUSPENSIÓN";
								$Detalle="* Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 * Se pudo cursar por permiso de curso sin requisitos.&#10 * Esta asignatura se conservará aprobada pero figurará como NO aprobada ante las demás asignaturas que para su curso la requieran.&#10 * $Creditos créditos académicos.";
								$Color="#0B610B";
								$ColorTxt="#FFFFFF";
								$Cancelar=false; $Matricular=false;
							}
							else
							{
								//Asignatura tiene permiso de curso sin requisito y está sin matricular
								$Estado="* ASIGNATURA SE PUEDE MATRICULAR";
								$Detalle="* La asignatura no está matriculada. &#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * Posee $Creditos crédito(s) académico(s)";
								$Color="#FF7307";
								$ColorTxt="#FFFFFF";
								$Cancelar=false; $Matricular=true;
							}
						}
					}
					else
					{
						//Se han aprobado los requisitos #1 y #3
						$Estado="* ASIGNATURA NO SE PUEDE CURSAR";
						$Detalle="* Esta asignatura NO la puedes cursar porque solo has aprobado los requisitos #1 $CodigoLiteralREQ1 - $MateriaRequisito1, y #3 $CodigoLiteralREQ3 - $MateriaRequisito3 falta que apruebes el requisito #2 $CodigoLiteralREQ2 - $MateriaRequisito2.&#10 * $Creditos créditos académicos." ;
						$Color="#FF0000";
						$ColorTxt="#FFFFFF";
						$Cancelar=false; $Matricular=false;
					}
				break;

				case 32:
					if($rowDA['PARAM3']=='LETMAT'){
						if($rowDA['PARAM']=='A'){
							$Estado="* ASIGNATURA ESTÁ MATRICULADA";
							$Detalle="* La asignatura está matriculada.&#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * $Creditos créditos académicos.";
							$Color="#FFFF00";
							$ColorTxt="#000000";
							$Cancelar=true; $Matricular=false;
						}
						else
						{
							if($rowDA['PARAM']=='OK2'){
								//Asignatura fue aprobada por permiso de curso sin requisitos
								$Estado="* ASIGNATURA APROBADA Y EN SUSPENSIÓN";
								$Detalle="* Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 * Se pudo cursar por permiso de curso sin requisitos.&#10 * Esta asignatura se conservará aprobada pero figurará como NO aprobada ante las demás asignaturas que para su curso la requieran.&#10 * $Creditos créditos académicos.";
								$Color="#0B610B";
								$ColorTxt="#FFFFFF";
								$Cancelar=false; $Matricular=false;
							}
							else
							{
								//Asignatura tiene permiso de curso sin requisito y está sin matricular
								$Estado="* ASIGNATURA SE PUEDE MATRICULAR";
								$Detalle="* La asignatura no está matriculada. &#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * Posee $Creditos crédito(s) académico(s)";
								$Color="#FF7307";
								$ColorTxt="#FFFFFF";
								$Cancelar=false; $Matricular=true;
							}
						}
					}
					else
					{
						//Se han aprobado los requisitos #1 y #2
						$Estado="* ASIGNATURA NO SE PUEDE CURSAR";
						$Detalle="* Esta asignatura NO la puedes cursar porque solo has aprobado los requisitos #1 $CodigoLiteralREQ1 - $MateriaRequisito1, y #2 $CodigoLiteralREQ2 - $MateriaRequisito2 falta que apruebes el requisito #3 $CodigoLiteralREQ3 - $MateriaRequisito3.&#10 * $Creditos créditos académicos." ;
						$Color="#FF0000";
						$ColorTxt="#FFFFFF";
						$Cancelar=false; $Matricular=false;
					}
				break;

				case 31:
					if($rowDA['PARAM3']=='LETMAT'){
						if($rowDA['PARAM']=='A'){
							$Estado="* ASIGNATURA ESTÁ MATRICULADA";
							$Detalle="* La asignatura está matriculada.&#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * $Creditos créditos académicos.";
							$Color="#FFFF00";
							$ColorTxt="#000000";
							$Cancelar=true; $Matricular=false;
						}
						else
						{
							if($rowDA['PARAM']=='OK2'){
								//Asignatura fue aprobada por permiso de curso sin requisitos
								$Estado="* ASIGNATURA APROBADA Y EN SUSPENSIÓN";
								$Detalle="* Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 * Se pudo cursar por permiso de curso sin requisitos.&#10 * Esta asignatura se conservará aprobada pero figurará como NO aprobada ante las demás asignaturas que para su curso la requieran.&#10 * $Creditos créditos académicos.";
								$Color="#0B610B";
								$ColorTxt="#FFFFFF";
								$Cancelar=false; $Matricular=false;
							}
							else
							{
								//Asignatura tiene permiso de curso sin requisito y está sin matricular
								$Estado="* ASIGNATURA SE PUEDE MATRICULAR";
								$Detalle="* La asignatura no está matriculada. &#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * Posee $Creditos crédito(s) académico(s)";
								$Color="#FF7307";
								$ColorTxt="#FFFFFF";
								$Cancelar=false; $Matricular=true;
							}
						}
					}
					else
					{
						//Solamente se tiene aprobado el requisito 3
						$Estado="* ASIGNATURA NO SE PUEDE CURSAR";
						$Detalle="* Esta asignatura NO la puedes cursar porque solo has aprobado el requisito #3 $CodigoLiteralREQ3 - $MateriaRequisito3, falta que apruebes los requisitos #1 $CodigoLiteralREQ1 - $MateriaRequisito1 y #2 $CodigoLiteralREQ2 - $MateriaRequisito2.&#10 * $Creditos créditos académicos." ;
						$Color="#FF0000";
						$ColorTxt="#FFFFFF";
						$Cancelar=false; $Matricular=false;
					}
				break;

				case 21:
					if($rowDA['PARAM3']=='LETMAT'){
						if($rowDA['PARAM']=='A'){
							$Estado="* ASIGNATURA ESTÁ MATRICULADA";
							$Detalle="* La asignatura está matriculada.&#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * $Creditos créditos académicos.";
							$Color="#FFFF00";
							$ColorTxt="#000000";
							$Cancelar=true; $Matricular=false;
						}
						else
						{
							if($rowDA['PARAM']=='OK2'){
								//Asignatura fue aprobada por permiso de curso sin requisitos
								$Estado="* ASIGNATURA APROBADA Y EN SUSPENSIÓN";
								$Detalle="* Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 * Se pudo cursar por permiso de curso sin requisitos.&#10 * Esta asignatura se conservará aprobada pero figurará como NO aprobada ante las demás asignaturas que para su curso la requieran.&#10 * $Creditos créditos académicos.";
								$Color="#0B610B";
								$ColorTxt="#FFFFFF";
								$Cancelar=false; $Matricular=false;
							}
							else
							{
								//Asignatura tiene permiso de curso sin requisito y está sin matricular
								$Estado="* ASIGNATURA SE PUEDE MATRICULAR";
								$Detalle="* La asignatura no está matriculada. &#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * Posee $Creditos crédito(s) académico(s)";
								$Color="#FF7307";
								$ColorTxt="#FFFFFF";
								$Cancelar=false; $Matricular=true;
							}
						}
					}
					else
					{
						//Solamente se tiene aprobado el requisito 2
						$Estado="* ASIGNATURA NO SE PUEDE CURSAR";
						$Detalle="* Esta asignatura NO la puedes cursar porque solo has aprobado el requisito #2 $CodigoLiteralREQ2 - $MateriaRequisito2, falta que apruebes los requisitos #1 $CodigoLiteralREQ1 - $MateriaRequisito1 y #3 $CodigoLiteralREQ3 - $MateriaRequisito3.&#10 * $Creditos créditos académicos." ;
						$Color="#FF0000";
						$ColorTxt="#FFFFFF";
						$Cancelar=false; $Matricular=false;
					}
				break;

				case 11:
					if($rowDA['PARAM3']=='LETMAT'){
						if($rowDA['PARAM']=='A'){
							$Estado="* ASIGNATURA ESTÁ MATRICULADA";
							$Detalle="* La asignatura está matriculada.&#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * $Creditos créditos académicos.";
							$Color="#FFFF00";
							$ColorTxt="#000000";
							$Cancelar=true; $Matricular=false;
						}
						else
						{
							if($rowDA['PARAM']=='OK2'){
								//Asignatura fue aprobada por permiso de curso sin requisitos
								$Estado="* ASIGNATURA APROBADA Y EN SUSPENSIÓN";
								$Detalle="* Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 * Se pudo cursar por permiso de curso sin requisitos.&#10 * Esta asignatura se conservará aprobada pero figurará como NO aprobada ante las demás asignaturas que para su curso la requieran.&#10 * $Creditos créditos académicos.";
								$Color="#0B610B";
								$ColorTxt="#FFFFFF";
								$Cancelar=false; $Matricular=false;
							}
							else
							{
								//Asignatura tiene permiso de curso sin requisito y está sin matricular
								$Estado="* ASIGNATURA SE PUEDE MATRICULAR";
								$Detalle="* La asignatura no está matriculada. &#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * Posee $Creditos crédito(s) académico(s)";
								$Color="#FF7307";
								$ColorTxt="#FFFFFF";
								$Cancelar=false; $Matricular=true;
							}
						}
					}
					else
					{
						//Solamente se tiene aprobado el requisito 1
						$Estado="* ASIGNATURA NO SE PUEDE CURSAR";
						$Detalle="* Esta asignatura NO la puedes cursar porque solo has aprobado el requisito #1 $CodigoLiteralREQ1 - $MateriaRequisito1, falta que apruebes los requisitos #2 $CodigoLiteralREQ2 - $MateriaRequisito2 y #3 $CodigoLiteralREQ3 - $MateriaRequisito3&#10 * $Creditos créditos académicos." ;
						$Color="#FF0000";
						$ColorTxt="#FFFFFF";
						$Cancelar=false; $Matricular=false;
					}
				break;

				default:
					if($rowDA['PARAM3']=='LETMAT'){
						if($rowDA['PARAM']=='A'){
							$Estado="* ASIGNATURA ESTÁ MATRICULADA";
							$Detalle="* La asignatura está matriculada.&#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * $Creditos créditos académicos.";
							$Color="#FFFF00";
							$ColorTxt="#000000";
							$Cancelar=true; $Matricular=false;
						}
						else
						{
							if($rowDA['PARAM']=='OK2'){
								//Asignatura fue aprobada por permiso de curso sin requisitos
								$Estado="* ASIGNATURA APROBADA Y EN SUSPENSIÓN";
								$Detalle="* Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 * Se pudo cursar por permiso de curso sin requisitos.&#10 * Esta asignatura se conservará aprobada pero figurará como NO aprobada ante las demás asignaturas que para su curso la requieran.&#10 * $Creditos créditos académicos.";
								$Color="#0B610B";
								$ColorTxt="#FFFFFF";
								$Cancelar=false; $Matricular=false;
							}
							else
							{
								//Asignatura tiene permiso de curso sin requisito y está sin matricular
								$Estado="* ASIGNATURA SE PUEDE MATRICULAR";
								$Detalle="* La asignatura no está matriculada. &#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * Posee $Creditos crédito(s) académico(s)";
								$Color="#FF7307";
								$ColorTxt="#FFFFFF";
								$Cancelar=false; $Matricular=true;
							}
						}
								
					}
					else
					{
						//No se han aprobado 3 de las requisito
						$Estado="* ASIGNATURA NO SE PUEDE CURSAR";
						$Detalle="* Esta asignatura NO la puedes cursar porque no has aprobado los 3 requisitos:&#10 * $CodigoLiteralREQ1 - $MateriaRequisito1&#10 * $CodigoLiteralREQ2 - $MateriaRequisito2&#10 * $CodigoLiteralREQ3 - $MateriaRequisito3&#10 * $Creditos créditos académicos." ;
						$Color="#FF0000";
						$ColorTxt="#FFFFFF";
						$Cancelar=false; $Matricular=false;
					}
				break;
			}
		}
		else
		{
			#Asignatura no existe
			$Detalle="* ASIGNATURA NO EXISTE.";
			$Estado="* La asignatura no forma parte del plan de estudios actual&#10 La directiva pudo haber retirado la asignatura de tu plan de estudios.";
			$Color="#999966";
			$ColorTxt="#000000";
			$Cancelar=false; $Matricular=false;
		}
	break;

###############################################################################################################################################################
	//Asignatura de reeemplazo de electiva base
	case 'E':
		$ConteoAprobados="SELECT SUM(CR) as TotalCR FROM platformdata WHERE ID='$ID' AND PARAM IN('OK') AND PROGC IN('$PROGC')";
		$rowCreditos=$link -> query($ConteoAprobados);
		$fila=$rowCreditos->fetch_assoc(); //que te devuelve un array asociativo con el nombre del campo
		$DataCreditos=$fila['TotalCR'];
		if($DataCreditos>=$CreditosRequeridosAprobados){
			//Estudiante cumple con el requisito de créditos aprobados, puede operar electivas según sus parámetros.
			$findElectiva="SELECT * FROM platformdata WHERE PARAM3 IN('E') AND ID='$ID' AND PROGC='$PROGC'";
			$doFE=mysqli_query($link, $findElectiva);
			//Crear array de datos de la electiva que se encontró
				$rowFE=mysqli_fetch_array($doFE);
				$ParametroFE=$rowFE['PARAM'];
			//Traer datos de la electiva que se busca en el momento
				$getElectivaData="SELECT * FROM platformdata WHERE MAT='$MATCODE' AND ID='$ID' AND PROGC='$PROGC'";
				$doED=mysqli_query($link, $getElectivaData);
				//Crear array de datos de la electiva si la orden de búsqueda se ejecuta
				$DatosElectiva=mysqli_fetch_array($doED);
			//Hay electiva?
			if(!empty($rowFE['MAT'])){
				//La electiva encontrada se encuentra...
				if($ParametroFE=='OK'){
				//Existe electiva, pero está aprobada
				//Comparar si es la electiva que se busca en el momento
					$Asignatura=$rowFE['MAT'];
					if($rowFE['MAT']==$MATCODE){
						//Son idénticas, por lo tanto consultar datos de aprobación y mostrar
						$Estado="* ASIGNATURA APROBADA";
						switch ($rowFE['PARAM2']) {
							case 'CLASIF':
								#Asignatura se aprobó por el sistema de clasificación.
								$Detalle="* Esta asignatura electiva la aprobaste por clasificación en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
							break;
							case 'NORMAL':
								#Asignatura se cursó y aprobó normalmente
								$Detalle="* Esta asignatura electiva la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
							break;
							case 'ADMIN':
								#Asignatura se aprobó por orden de la administración de la universidad
								$Detalle="* Esta asignatura electiva la has aprobado por orden de la administración universitaria con nota definitiva $Definitiva.&#10 * Puede haber sido por solicitud estrictamente justificada, corrupción académica y/o bendición y fortuna.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
							break;
							case 'TRANSF':
								#La asignatura se aprobó porque se cursó y se aprobó en otro programa académico
								$PROGC=$rowDA['PARAM3']; require '../../divsys/DatosProgramas.php'; $NombreProgramaPrevio=$NombrePrograma; $PeriodoAprobacion=$rowDA['SM'];
								$Detalle="* La asignatura electiva se aprobó anteriormente por curso en otro programa académico. &#10 * La asignatura fue cursada en el programa $NombreProgramaPrevio en el periodo $PeriodoAprobacion. &#10 * Nota definitiva: $Definitiva &#10 * Dado que las electivas son propias de cada programa, esta asignatura electiva aporta 0 créditos académicos.";
							break;
							case 'SUF':
								#Asignatura se aprobó porque el estudiante presentó prueba de suficiencia en conocimientos
								$Detalle="* La asignatura electiva se aprobó por suficiencia en el periodo $SMActual. &#10 * Nota definitiva: $Definitiva &#10 * $Creditos créditos académicos.";
							break;
							default:
								#Asignatura se aprobó por otro medio diferente a Clasificación y/o Curso Normal
								$Detalle="* Esta asignatura electiva la has aprobado por curso dudoso e irregular con nota definitiva $Definitiva en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.  &#10 * $Creditos créditos académicos.";
							break;
						}
						$Color="#0B610B";
						$ColorTxt="#FFFFFF";
						$Cancelar=false; $Matricular=false;
					}
					else
					{
						//La electiva encontrada es distinta de la buscada
						$Estado="* ASIGNATURA ELECTIVA NO SE PUEDE CURSAR POR EXISTENCIA DE ELECTIVA APROBADA";
						$Detalle="* La asignatura electiva no se puede cursar porque ya existe otra electiva aprobada.&#10 * $Creditos créditos académicos.";
						$Color="#FF0000";
						$ColorTxt="#FFFFFF";
						$Cancelar=false; $Matricular=false;
					}
				}
				else
				{
					if($ParametroFE=='A'){
						//La electiva encontrada está matriculada
						if($rowFE['MAT']==$MATCODE){
							//La electiva encontrada es idéntica a la asignatura buscada
							$Estado="* ASIGNATURA ELECTIVA ESTÁ MATRICULADA";
							$Detalle="* La asignatura electiva está matriculada.&#10 * $Creditos créditos académicos.";
							$Color="#FFFF00";
							$ColorTxt="#000000";
							$Cancelar=false; $Matricular=false;
						}
						else
						{
							//La electiva encontrada es diferente de la asignatura buscada
							$Estado="* ASIGNATURA ELECTIVA NO SE PUEDE CURSAR";
							$Detalle="* La asignatura electiva no se puede cursar porque ya existe otra electiva matriculada.&#10 * $Creditos créditos académicos.";
							$Color="#FF0000";
							$ColorTxt="#FFFFFF";
							$Cancelar=false; $Matricular=false;
						}
					}
					else
					{
						//La electiva encontrada no posee los parámetros internos, por lo tanto se impide operaciones en todas las electivas
						$Estado="* ASIGNATURA ELECTIVA NO VÁLIDA";
						$Detalle="* La asignatura electiva no es válida, no posee parámetros internos académicos. &#10 * Puede que la universidad haya desactivado la asignatura para este periodo.&#10 * Se impide operaciones de matrícula con todas las electivas del programa.";
						$Color="#FAFAFA";
						$ColorTxt="#000000";
						$Cancelar=false; $Matricular=false;
					}
				}
			}
			else
			{
				//No hay electiva matriculada
				require '../../divsys/MateriasPerCredits.php';
				#Detalle y Estado
				switch ($DatosElectiva['PARAM']) {
					case 'A':
						#Asignatura matriculada
						$Estado="* ASIGNATURA ELECTIVA ESTÁ MATRICULADA";
						$Detalle="* La asignatura electiva está matriculada.&#10 * $Creditos créditos académicos.";
						$Color="#FFFF00";
						$ColorTxt="#000000";
						$Cancelar=true; $Matricular=false;
					break;

					case 'C':
						#Cancelada
						$Estado="* ASIGNATURA ELECTIVA CANCELADA E INHABILITADA";
						$Detalle="* Esta asignatura electiva no la puedes cursar porque la has cancelado el número de veces permitidas.&#10 * No puedes volver a cursarla ni habilitarla durante el periodo actual. Qué decepción.&#10 * $Creditos créditos académicos.";
						#El color representante de una asignatura inhabilitada por doble cancelación es igual al color de inhabilitada.
						$Color="#BDBDBD";
						$ColorTxt="#000000";
						$Cancelar=false; $Matricular=false;
					break;

					case 'OK':
						#Aprobada
						$Estado="* ASIGNATURA APROBADA";
							switch ($DatosElectiva['PARAM2']) {
								case 'CLASIF':
								#Asignatura se aprobó por el sistema de clasificación.
								$Detalle="* Esta asignatura electiva la aprobaste por clasificación en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
								break;
								case 'NORMAL':
								#Asignatura se cursó y aprobó normalmente
								$Detalle="* Esta asignatura electiva la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
								break;
								case 'ADMIN':
								#Asignatura se aprobó por orden de la administración de la universidad
								$Detalle="* Esta asignatura electiva la has aprobado por orden de la administración universitaria con nota definitiva $Definitiva.&#10 * Puede haber sido por solicitud estrictamente justificada, corrupción académica y/o bendición y fortuna.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
								break;
								case 'TRANSF':
								#La asignatura se aprobó porque se cursó y se aprobó en otro programa académico
								$PROGC=$DatosElectiva['PARAM3']; require '../../divsys/DatosProgramas.php'; $NombreProgramaPrevio=$NombrePrograma; $PeriodoAprobacion=$DatosElectiva['SM'];
								$Detalle="* La asignatura electiva se aprobó anteriormente por curso en otro programa académico. &#10 * La asignatura fue cursada en el programa $NombreProgramaPrevio en el periodo $PeriodoAprobacion. &#10 * Nota definitiva: $Definitiva &#10 * Dado que las electivas son propias de cada programa, esta asignatura electiva aporta 0 créditos académicos.";
								break;
								case 'SUF':
								#Asignatura se aprobó porque el estudiante presentó prueba de suficiencia en conocimientos
								$Detalle="* La asignatura electiva se aprobó por suficiencia en el periodo $SMActual. &#10 * Nota definitiva: $Definitiva &#10 * $Creditos créditos académicos.";
								break;
								default:
								#Asignatura se aprobó por otro medio diferente a Clasificación y/o Curso Normal
								$Detalle="* Esta asignatura electiva la has aprobado por curso dudoso e irregular con nota definitiva $Definitiva en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.  &#10 * $Creditos créditos académicos.";
								break;
							}
						$Color="#0B610B";
						$ColorTxt="#FFFFFF";
						$Cancelar=false; $Matricular=false;
					break;

					case 'NM':
						#Se puede cursar
						require '../../divsys/MateriasPerCredits.php';
						$Estado="* ASIGNATURA SE PUEDE MATRICULAR";
						$Detalle="* La asignatura electiva no está matriculada. &#10 * El requisito de $CreditosRequeridosAprobados créditos académicos acumulados se cumple. &#10 * Posee $Creditos crédito(s) académico(s)";
						$Color="#FF7307";
						$ColorTxt="#FFFFFF";
						$Cancelar=false; $Matricular=true;
					break;

					default:
						#Sin paramétro
						$Estado="* ASIGNATURA ELECTIVA NO VÁLIDA";
						$Detalle="* La asignatura electiva no es válida. &#10 * Puede que la universidad haya desactivado la asignatura para este periodo.";
						$Color="#FAFAFA";
						$ColorTxt="#000000";
						$Cancelar=false; $Matricular=false;
					break;
				}
			}
		}
		else
		{
			//Estudiante NO cumple con requisito de créditos aprobados
			$Estado="* ASIGNATURA ELECTIVA NO SE PUEDE CURSAR";
			$Detalle="* La asignatura electiva no se puede cursar porque no se ha aprobado el requisito de $CreditosRequeridosAprobados créditos académicos acumulados aprobados.&#10 * $Creditos créditos académicos.";
			$Color="#FF0000";
			$ColorTxt="#FFFFFF";
			$Cancelar=false; $Matricular=false;
		}
	break;

###############################################################################################################################################################
	//Asignatura que se habilita por créditos aprobados acumulados
	case 'CRA':
		$getCreditosOK="SELECT SUM(CR) as TotalCR FROM platformdata WHERE ID='$ID' AND PARAM IN('OK') AND PROGC IN('$PROGC')";
		$rowDataCreditos=$link -> query($getCreditosOK);
		$fila=$rowDataCreditos->fetch_assoc(); //que te devuelve un array asociativo con el nombre del campo
		$DataCreditos=$fila['TotalCR'];
		//echo "<script>alert(",$DataCreditos,")</script>";
	    if($DataCreditos>=$CreditosRequeridosAprobados){
	    	#Se cumple requisito
	    	$findAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE' AND PROGC IN('$PROGC')";
			$DA=mysqli_query($link, $findAsignatura);
			$rowDA=mysqli_fetch_array($DA);
			require '../../divsys/MateriasPerCredits.php';
			#Detalle y Estado
			$Definitiva=MostrarFlotante($rowDA['DEF']);
				switch ($rowDA['PARAM']) {
					case 'A':
						#Asignatura matriculada
						$Estado="* ASIGNATURA ESTÁ MATRICULADA";
						$Detalle="* La asignatura está matriculada.&#10 * $Creditos créditos académicos.";
						$Color="#FFFF00";
						$ColorTxt="#000000";
						$Cancelar=true; $Matricular=false;
					break;

					case 'C':
						#Cancelada
						$Estado="* ASIGNATURA CANCELADA E INHABILITADA";
						$Detalle="* Esta asignatura no la puedes cursar porque la has cancelado el número de veces permitidas.&#10 * No puedes volver a cursarla ni habilitarla durante el periodo actual. Qué decepción.&#10 * $Creditos créditos académicos.";
						#El color representante de una asignatura inhabilitada por doble cancelación es igual al color de inhabilitada.
						$Color="#BDBDBD";
						$ColorTxt="#000000";
						$Cancelar=false; $Matricular=false;
					break;

					case 'OK':
						#Aprobada
						$Estado="* ASIGNATURA APROBADA";
							switch ($rowDA['PARAM2']) {
								case 'CLASIF':
									#Asignatura se aprobó por el sistema de clasificación.
									$Detalle="* Esta asignatura la aprobaste por clasificación en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
								break;
								case 'NORMAL':
									#Asignatura se cursó y aprobó normalmente
									$Detalle="* Esta asignatura la aprobaste con tu sudor y con nota definitiva $Definitiva en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
								break;
								case 'ADMIN':
									#Asignatura se aprobó por orden de la administración de la universidad
									$Detalle="* Esta asignatura la has aprobado por orden de la administración universitaria con nota definitiva $Definitiva.&#10 * Puede haber sido por solicitud estrictamente justificada, corrupción académica y/o bendición y fortuna.&#10 * No se puede volver a cursar una asignatura aprobada.&#10 * $Creditos créditos académicos.";
								break;
								case 'TRANSF':
									#La asignatura se aprobó porque se cursó y se aprobó en otro programa académico
									$PROGC=$rowDA['PARAM3']; require '../../divsys/DatosProgramas.php'; $NombreProgramaPrevio=$NombrePrograma; $PeriodoAprobacion=$rowDA['SM'];
									$Detalle="* La asignatura se aprobó anteriormente por curso en otro programa académico. &#10 * La asignatura fue cursada en el programa $NombreProgramaPrevio en el periodo $PeriodoAprobacion. &#10 * Nota definitiva: $Definitiva &#10 * $Creditos créditos académicos.";
								break;
								case 'SUF':
									#Asignatura se aprobó porque el estudiante presentó prueba de suficiencia en conocimientos
									$Detalle="* La asignatura se aprobó por suficiencia en el periodo $SMActual. &#10 * Nota definitiva: $Definitiva &#10 * $Creditos créditos académicos.";
								break;
								default:
									#Asignatura se aprobó por otro medio diferente a Clasificación y/o Curso Normal
									$Detalle="* Esta asignatura la has aprobado por curso dudoso e irregular con nota definitiva $Definitiva en el periodo $SMActual.&#10 * No se puede volver a cursar una asignatura aprobada.  &#10 * $Creditos créditos académicos.";
								break;
							}
							$Color="#0B610B";
							$ColorTxt="#FFFFFF";
							$Cancelar=false; $Matricular=false;
					break;

					case 'NM':
						#Se puede cursar
						$Estado="* ASIGNATURA SE PUEDE MATRICULAR";
						$Detalle="* La asignatura no está matriculada. &#10 * El requisito de $CreditosRequeridosAprobados créditos académicos acumulados se cumple. &#10 * Posee $Creditos crédito(s) académico(s)";
						$Color="#FF7307";
						$ColorTxt="#FFFFFF";
						$Cancelar=false; $Matricular=true;
					break;
					
					default:
						#Sin paramétro
						$Estado="* ASIGNATURA NO VÁLIDA";
						$Detalle="* La asignatura no es válida. &#10 * Puede que la universidad haya desactivado la asignatura para este periodo.";
						$Color="#FAFAFA";
						$ColorTxt="#000000";
						$Cancelar=false; $Matricular=false;
					break;
				}	
	    }
	    else
	    {
	    	#Acumulación de créditos aprobados requeridos NO presente, NO se puede matrícular asignatura.
			if($rowDA['PARAM3']=="LETMAT"){
				if($rowDA['PARAM']=='A'){
					$Estado="* ASIGNATURA ESTÁ MATRICULADA";
					$Detalle="* La asignatura está matriculada.&#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * $Creditos créditos académicos.";
					$Color="#FFFF00";
					$ColorTxt="#000000";
					$Cancelar=true; $Matricular=false;
				}
				else
				{
					//Asignatura tiene permiso de curso sin requisito y está sin matricular
					$Estado="* ASIGNATURA SE PUEDE MATRICULAR";
					$Detalle="* La asignatura no está matriculada. &#10 * Dirección del programa concedió permiso para cursar sin requisito. &#10 * Posee $Creditos crédito(s) académico(s)";
					$Color="#FF7307";
					$ColorTxt="#FFFFFF";
					$Cancelar=false; $Matricular=true;
				}
			}
			else
			{
				$Estado="* ASIGNATURA NO SE PUEDE CURSAR";
				$Detalle="* Esta asignatura NO la puedes cursar porque no has aprobado el requisito de $CreditosRequeridosAprobados créditos académicos aprobados.&#10 * $Creditos créditos académicos." ;
				$Color="#FF0000";
				$ColorTxt="#FFFFFF";
				$Cancelar=false; $Matricular=false;
			}
	    }
	break;

###############################################################################################################################################################
	//Asignatura no definida
	default:
		$Detalle="* Error. No disponibilidad de parámetros internos de la asignatura seleccionada.";
		$Estado=$Detalle;
		$Color="#999966";
		$ColorTxt="#000000";
		$Cancelar=false; $Matricular=false;
	break;
}

?>
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
								$Color="#FFFF00";
								$ColorTxt="#000000";
							break;

							case 'C':
								#Cancelada
								$Color="#BDBDBD";
								$ColorTxt="#000000";
							break;

							case 'OK':
								#Aprobada
								$Color="#0B610B";
								$ColorTxt="#FFFFFF";
							break;

							case 'NM':
								#Se puede cursar
								$Color="#FF7307";
								$ColorTxt="#FFFFFF";
							break;
							
							default:
								#Sin paramétro
								$Color="#FAFAFA";
								$ColorTxt="#000000";
							break;
					}
			}
			else
			{
				#Asignatura no existe
				$Color="#999966";
				$ColorTxt="#000000";
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
								switch ($rowDA['PARAM']) {
								case 'A':
									#Asignatura matriculada
									$Color="#FFFF00";
									$ColorTxt="#000000";
								break;

								case 'C':
									#Cancelada
									$Color="#BDBDBD";
									$ColorTxt="#000000";
								break;

								case 'OK':
									#Aprobada
									$Color="#0B610B";
									$ColorTxt="#FFFFFF";
								break;

								case 'NM':
									#Se puede cursar
									$Color="#FF7307";
									$ColorTxt="#FFFFFF";
								break;
								
								default:
									#Sin paramétro
									$Color="#FAFAFA";
									$ColorTxt="#000000";
								break;
								}
						}
						else
						{
								if((($Parametro=='NM' || $Parametro=='A') || $Parametro=='C') && $rowDA['PARAM']=='OK2'){
								//Asignatura fue aprobada por permiso de curso sin requisitos
									$Color="#0B610B";
									$ColorTxt="#FFFFFF";
								}
								else
								{
									if($rowDA['PARAM3']=='LETMAT'){
										#Permiso para cursar asignatura sin requisito
										//Verificar si ya está matriculada bajo este permiso
										if($rowDA['PARAM']=='A'){
											$Color="#FFFF00";
											$ColorTxt="#000000";
										}
										else
										{
											//Asignatura tiene permiso de curso sin requisito y está sin matricular
											$Color="#FF7307";
											$ColorTxt="#FFFFFF";
										}
									}
									else
									{
										#Materia requisito no aprobada
										$Color="#FF0000";
										$ColorTxt="#FFFFFF";
									}
								}
						}
				}
				else
				{
					#Requisito no existe
					$Color="#999966";
					$ColorTxt="#000000";
				}
					
			}
			else
			{
				#Asignatura no existe
				$Color="#999966";
				$ColorTxt="#000000";
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
					#Ambos requisitos completos, materia indicada puede cursarse sin problema
					switch ($rowDA['PARAM']) {
						case 'A':
							#Asignatura matriculada
							$Color="#FFFF00";
							$ColorTxt="#000000";
						break;

						case 'C':
							#Cancelada
							$Color="#BDBDBD";
							$ColorTxt="#000000";
						break;

						case 'OK':
							#Aprobada
							$Color="#0B610B";
							$ColorTxt="#FFFFFF";
						break;

						case 'NM':
							#Se puede cursar
							$Color="#FF7307";
							$ColorTxt="#FFFFFF";
						break;
						
						default:
							#Sin paramétro
							$Color="#FAFAFA";
							$ColorTxt="#000000";
						break;
					}
				}
				else
				{
					if((($REQ1=='OK' || $REQ1=='NO') && ($REQ2=='OK' || $REQ2=='NO')) && $rowDA['PARAM']=='OK2'){
						//Asignatura fue aprobada por permiso de curso sin requisitos
									$Color="#0B610B";
									$ColorTxt="#FFFFFF";
					}
					else
					{
						if ($REQ1=='OK' AND $REQ2=='NO') {
								if($rowDA['PARAM3']=='LETMAT'){
									if($rowDA['PARAM']=='A'){
											$Color="#FFFF00";
											$ColorTxt="#000000";
										}
										else
										{
											//Asignatura tiene permiso de curso sin requisito y está sin matricular
											$Color="#FF7307";
											$ColorTxt="#FFFFFF";
										}
								}
								else
								{
									#Requisito 1 aprobado Requisito 2 no aprobado 
									$Color="#FF0000";
									$ColorTxt="#FFFFFF";
								}
						}
						else
						{
							if ($REQ1=='NO' AND $REQ2=='OK') {
								if($rowDA['PARAM3']=='LETMAT'){
									if($rowDA['PARAM']=='A'){
											$Color="#FFFF00";
											$ColorTxt="#000000";
										}
										else
										{
											//Asignatura tiene permiso de curso sin requisito y está sin matricular
											$Color="#FF7307";
											$ColorTxt="#FFFFFF";
										}
								}
								else
								{
									#Requisito 1 no aprobado Requisito 2 aprobado 
									$Color="#FF0000";
									$ColorTxt="#FFFFFF";
								}
							}
							else
							{
								if ($REQ1=='NO' AND $REQ2=='NO') {
									if($rowDA['PARAM3']=='LETMAT'){
										if($rowDA['PARAM']=='A'){
											$Color="#FFFF00";
											$ColorTxt="#000000";
										}
										else
										{
											//Asignatura tiene permiso de curso sin requisito y está sin matricular
											$Color="#FF7307";
											$ColorTxt="#FFFFFF";
										}
									}
									else
									{
										#Ambos requisitos no están aprobados
										$Color="#FF0000";
										$ColorTxt="#FFFFFF";
									}
								}
								else
								{
									if($rowDA['PARAM3']=='LETMAT'){
										if($rowDA['PARAM']=='A'){
											$Color="#FFFF00";
											$ColorTxt="#000000";
										}
										else
										{
											//Asignatura tiene permiso de curso sin requisito y está sin matricular
											$Color="#FF7307";
											$ColorTxt="#FFFFFF";
										}
									}
									else
									{
										#Error en lectura de parámetros, puede ser alguno de los requerimientos no esté matriculado o esté cancelado.
										$Color="#FF0000";
										$ColorTxt="#FFFFFF";
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
					//Switch para estado de la asignatura original
					switch ($rowDA['PARAM']) {
						case 'A':
							#Asignatura matriculada
							$Color="#FFFF00";
							$ColorTxt="#000000";
						break;

						case 'C':
							#Cancelada
							$Color="#BDBDBD";
							$ColorTxt="#000000";
						break;

						case 'OK':
							#Aprobada
							$Color="#0B610B";
							$ColorTxt="#FFFFFF";
						break;

						case 'NM':
							#Se puede cursar
							$Color="#FF7307";
							$ColorTxt="#FFFFFF";
						break;
						
						default:
							#Sin paramétro
							$Color="#FAFAFA";
							$ColorTxt="#000000";
						break;
					}	
					
				break;	

				case 52:
					if($rowDA['PARAM3']=='LETMAT'){
						if($rowDA['PARAM']=='A'){
							$Color="#FFFF00";
							$ColorTxt="#000000";
						}
						else
						{
							if($rowDA['PARAM']=='OK2'){
								//Asignatura fue aprobada por permiso de curso sin requisitos
								$Color="#0B610B";
								$ColorTxt="#FFFFFF";
							}
							else
							{
								//Asignatura tiene permiso de curso sin requisito y está sin matricular
								$Color="#FF7307";
								$ColorTxt="#FFFFFF";
							}
						}
					}
					else
					{
						//Se han aprobado los requisitos #2 y #3
						$Color="#FF0000";
						$ColorTxt="#FFFFFF";
					}
				break;
				
				case 42:
					if($rowDA['PARAM3']=='LETMAT'){
						if($rowDA['PARAM']=='A'){
							$Color="#FFFF00";
							$ColorTxt="#000000";
						}
						else
						{
							if($rowDA['PARAM']=='OK2'){
								//Asignatura fue aprobada por permiso de curso sin requisitos
								$Color="#0B610B";
								$ColorTxt="#FFFFFF";
							}
							else
							{
								//Asignatura tiene permiso de curso sin requisito y está sin matricular
								$Color="#FF7307";
								$ColorTxt="#FFFFFF";
							}
						}
					}
					else
					{
						//Se han aprobado los requisitos #1 y #3
						$Color="#FF0000";
						$ColorTxt="#FFFFFF";
					}
				break;

				case 32:
					if($rowDA['PARAM3']=='LETMAT'){
						if($rowDA['PARAM']=='A'){
							$Color="#FFFF00";
							$ColorTxt="#000000";
						}
						else
						{
							if($rowDA['PARAM']=='OK2'){
								//Asignatura fue aprobada por permiso de curso sin requisitos
								$Color="#0B610B";
								$ColorTxt="#FFFFFF";
							}
							else
							{
								//Asignatura tiene permiso de curso sin requisito y está sin matricular
								$Color="#FF7307";
								$ColorTxt="#FFFFFF";
							}
						}
					}
					else
					{
						//Se han aprobado los requisitos #1 y #2
						$Color="#FF0000";
						$ColorTxt="#FFFFFF";
					}
				break;

				case 31:
					if($rowDA['PARAM3']=='LETMAT'){
						if($rowDA['PARAM']=='A'){
							$Color="#FFFF00";
							$ColorTxt="#000000";
						}
						else
						{
							if($rowDA['PARAM']=='OK2'){
								//Asignatura fue aprobada por permiso de curso sin requisitos
								$Color="#0B610B";
								$ColorTxt="#FFFFFF";
							}
							else
							{
								//Asignatura tiene permiso de curso sin requisito y está sin matricular
								$Color="#FF7307";
								$ColorTxt="#FFFFFF";
							}
						}
					}
					else
					{
						//Solamente se tiene aprobado el requisito 3
						$Color="#FF0000";
						$ColorTxt="#FFFFFF";
					}
				break;

				case 21:
					if($rowDA['PARAM3']=='LETMAT'){
						if($rowDA['PARAM']=='A'){
							$Color="#FFFF00";
							$ColorTxt="#000000";
						}
						else
						{
							if($rowDA['PARAM']=='OK2'){
								//Asignatura fue aprobada por permiso de curso sin requisitos
								$Color="#0B610B";
								$ColorTxt="#FFFFFF";
							}
							else
							{
								//Asignatura tiene permiso de curso sin requisito y está sin matricular
								$Color="#FF7307";
								$ColorTxt="#FFFFFF";
							}
						}
					}
					else
					{
						//Solamente se tiene aprobado el requisito 2
						$Color="#FF0000";
						$ColorTxt="#FFFFFF";
					}
				break;

				case 11:
					if($rowDA['PARAM3']=='LETMAT'){
						if($rowDA['PARAM']=='A'){
							$Color="#FFFF00";
							$ColorTxt="#000000";
						}
						else
						{
							if($rowDA['PARAM']=='OK2'){
								//Asignatura fue aprobada por permiso de curso sin requisitos
								$Color="#0B610B";
								$ColorTxt="#FFFFFF";
							}
							else
							{
								//Asignatura tiene permiso de curso sin requisito y está sin matricular
								$Color="#FF7307";
								$ColorTxt="#FFFFFF";
							}
						}
					}
					else
					{
						//Solamente se tiene aprobado el requisito 1
						$Color="#FF0000";
						$ColorTxt="#FFFFFF";
					}
				break;

				default:
					if($rowDA['PARAM3']=='LETMAT'){
						if($rowDA['PARAM']=='A'){
							$Color="#FFFF00";
							$ColorTxt="#000000";
						}
						else
						{
							if($rowDA['PARAM']=='OK2'){
								//Asignatura fue aprobada por permiso de curso sin requisitos
								$Color="#0B610B";
								$ColorTxt="#FFFFFF";
							}
							else
							{
								//Asignatura tiene permiso de curso sin requisito y está sin matricular
								$Color="#FF7307";
								$ColorTxt="#FFFFFF";
							}
						}
								
					}
					else
					{
						//No se han aprobado 3 de las requisito
						$Color="#FF0000";
						$ColorTxt="#FFFFFF";
					}
				break;
			}
		}
		else
		{
			#Asignatura no existe
			$Color="#999966";
			$ColorTxt="#000000";
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
						$Color="#0B610B";
						$ColorTxt="#FFFFFF";
					}
					else
					{
						//La electiva encontrada es distinta de la buscada
						$Color="#FF0000";
						$ColorTxt="#FFFFFF";
					}
				}
				else
				{
					if($ParametroFE=='A'){
						//La electiva encontrada está matriculada
						if($rowFE['MAT']==$MATCODE){
							//La electiva encontrada es idéntica a la asignatura buscada
							$Color="#FFFF00";
							$ColorTxt="#000000";
						}
						else
						{
							//La electiva encontrada es diferente de la asignatura buscada
							$Color="#FF0000";
							$ColorTxt="#FFFFFF";
						}
					}
					else
					{
						//La electiva encontrada no posee los parámetros internos, por lo tanto se impide operaciones en todas las electivas
						$Color="#FAFAFA";
						$ColorTxt="#000000";
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
						$Color="#FFFF00";
						$ColorTxt="#000000";
					break;

					case 'C':
						#Cancelada
						$Color="#BDBDBD";
						$ColorTxt="#000000";
					break;

					case 'OK':
						#Aprobada
						$Color="#0B610B";
						$ColorTxt="#FFFFFF";
					break;

					case 'NM':
						#Se puede cursar
						$Color="#FF7307";
						$ColorTxt="#FFFFFF";
					break;

					default:
						#Sin paramétro
						$Color="#FAFAFA";
						$ColorTxt="#000000";
					break;
				}
			}
		}
		else
		{
			//Estudiante NO cumple con requisito de créditos aprobados
			$Color="#FF0000";
			$ColorTxt="#FFFFFF";
		}
	break;

#################################################################################################################################################################################################################
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
				switch ($rowDA['PARAM']) {
					case 'A':
						#Asignatura matriculada
						$Color="#FFFF00";
						$ColorTxt="#000000";
					break;

					case 'C':
						#Cancelada
						$Color="#BDBDBD";
						$ColorTxt="#000000";
					break;

					case 'OK':
						#Aprobada
						$Color="#0B610B";
						$ColorTxt="#FFFFFF";
					break;

					case 'NM':
						#Se puede cursar
						$Color="#FF7307";
						$ColorTxt="#FFFFFF";
					break;
					
					default:
						#Sin paramétro
						$Color="#FAFAFA";
						$ColorTxt="#000000";
					break;
				}	
	    }
	    else
	    {
	    	#Acumulación de créditos aprobados requeridos NO presente, NO se puede matrícular asignatura.
			if($rowDA['PARAM3']=="LETMAT"){
				if($rowDA['PARAM']=='A'){
					$Color="#FFFF00";
					$ColorTxt="#000000";
				}
				else
				{
					//Asignatura tiene permiso de curso sin requisito y está sin matricular
					$Color="#FF7307";
					$ColorTxt="#FFFFFF";
				}
			}
			else
			{
				$Color="#FF0000";
				$ColorTxt="#FFFFFF";
			}
	    }
	break;

########################################################################################################
	//Asignatura no definida
	default:
		$Color="#999966";
		$ColorTxt="#000000";
	break;
}

?>
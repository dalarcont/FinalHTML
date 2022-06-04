<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
#Materia cuyo requerimiento es cierta cantidad de puntos totales
#PuntReq=Puntaje requisito
#Mat=Materia en cuestión

#Verificar que materia requisito exista
						$Requisito="SELECT * FROM gendata WHERE ID='$ID'";
						$doReq=mysqli_query($link, $Requisito);
						$rowReq=mysqli_fetch_array($doReq);
						if (!$doReq){die("<p style='background-color: green;'>ERROR</p>");}
						#El código mencionado aquí abajo es ejecutado cuando la consulta no muere.
						$PuntajeEstudiante=$rowReq['PUNT'];
						if ($PuntajeEstudiante>=$PuntReq) {
							#Cumple con puntaje requerido

							#Datos de materia
					    	$MateriaDatos="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat')";
								$doMD=mysqli_query($link, $MateriaDatos);
								$rowMateria=mysqli_fetch_array($doMD);
								$Parametro=$rowMateria['PARAM'];
								$Puntaje=$rowMateria['PUNT'];
							#Comprobar parámetros de la materia requisito			
							if ($Parametro=='A') {
								#Materia requisito no puede estar completa bajo determinación de APROBADA, cosa que es imposible, ya que sistema no permite registro de puntaje para materia que activa la materia electiva. 
								switch ($rowMateria[PARAM]) {
										case 'A':
											$Estado="<p style='background-color: yellow; font-weight: bold;'>PERMITE REGISTRO ELECTIVA</p>";
											break;
										case 'C':
											$Estado="<p style='color: white; text-align:center; background-color: gray;  font-weight: bold;'>CANCELADA, TE JODISTE</p>";
											break;

										default:
											$Estado="<p style='color: white; background-color: orange; font-weight: bold;'>NO MATRICULADA</p>";
											break;
									}							
							}
							else
							{
								#Significa que la materia no existe porque una electiva ya fue registrada
								$Estado="<p style='color:white; background-color: green; font-weight: bold;'>REEMPLAZADA POR ELECTIVA</p>";
							}

						}
						else
						{
							#No se cumple el puntaje requerido
							$Estado="<p style='color:white; background-color: red; font-weight: bold;'>NO CUMPLE PUNTAJE TOTAL REQUERIDO</p>";
						}
					    
?>
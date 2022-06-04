<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
#Materia cuyo requerimiento es 1 materia
#Mat1=Materia requisito
#Mat3=Materia en cuestión

#Verificar que materia requisito exista
						$Requisito="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat1')";
						$doReq=mysqli_query($link, $Requisito);
						$rowReq=mysqli_fetch_array($doReq);
						if (!$doReq){die("<p style='background-color: green;'>ERROR</p>");}
						#El código mencionado aquí abajo es qué hacer cuando la función no muere
					    	$Parametro=$rowReq[4];
					    #Datos de materia
					    	$MateriaDatos="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat3')";
								$doMD=mysqli_query($link, $MateriaDatos);
								$rowMateria=mysqli_fetch_array($doMD);
								$Puntaje=$rowMateria[3];
							#Comprobar parámetros de la materia requisito			
							if ($Parametro=='OK') {
								#Materia requisito completa, proceder a comprobar si materia actual esta cursandose o completada
								switch ($rowMateria[4]) {
										case 'A':
											$Estado="<p style='background-color: yellow; font-weight: bold;'>SE PUEDE CURSAR</p>";
											break;
										case 'C':
											$Estado="<p style='color: white; text-align:center; background-color: gray;  font-weight: bold;'>CANCELADA</p>";
											break;
										case 'OK':
											$Estado="<p style='color: white; background-color: green; font-weight: bold;'>COMPLETADA</p>";
											break;
										
										default:
											$Estado="<p style='color: white; background-color: orange; font-weight: bold;'>NO MATRICULADA</p>";
											break;
									}
								
							}
							else
							{
								$Estado="<p style='color:white; background-color: red; font-weight: bold;'>NO SE PUEDE CURSAR</p>";
							}
?>
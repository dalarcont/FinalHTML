<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
#Materia cuyo requerimiento es 1 materia
#Mat1=Materia requisito
#Mat2=Materia requisito 2
#MatData=Materia en cuestión

$MateriaDatos="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat3')";
						$doMD=mysqli_query($link, $MateriaDatos);
						$rowMateria=mysqli_fetch_array($doMD);
						$Puntaje=$rowMateria[3];
						switch ($rowMateria[4]) {
							case 'A':
								$Estado="<p style='text-align:center; background-color: yellow;  font-weight: bold;'>SE PUEDE CURSAR</p>";
								break;
							case 'C':
								$Estado="<p style='color: white; text-align:center; background-color: gray;  font-weight: bold;'>CANCELADA</p>";
								break;
							case 'OK':
								$Estado="<p style='color: white; text-align:center; background-color: green;  font-weight: bold; '>COMPLETADA</p>";
								break;
							
							default:
								$Estado="<p style='color: white; background-color: orange; font-weight: bold;'>NO MATRICULADA</p>";
								break;
						}
?>
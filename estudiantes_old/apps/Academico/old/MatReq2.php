<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
#Materia cuyo requerimiento es 1 materia
#Mat1=Materia requisito
#Mat2=Materia requisito 2
#Mat3=Materia en cuestión

#Operaciones materia requisito 1
	$DataMat1="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat1')";
	$doMat1=mysqli_query($link, $DataMat1);
	if (!$doMat1){die($REQ1='NO');}
	$rowReq1=mysqli_fetch_array($doMat1);
	$Parametro1=$rowReq1[4];
		#Comprobar el parámetro de la materia requisito 1
		if ($Parametro1=='OK') {
			$REQ1='OK';
		}
		else
		{
			#El parámetro es diferente de aprobado
			$REQ1='NO';
		}
	#Operaciones materia requisito 2
	$DataMat2="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat2')";
	$doMat2=mysqli_query($link, $DataMat2);
	if (!$doMat2){die($REQ2='NO');}
	$rowReq2=mysqli_fetch_array($doMat2);
	$Parametro2=$rowReq2[4];
		#Comprobar el parámetro de la materia requisito 1
		if ($Parametro2=='OK') {
			$REQ2='OK';
		}
		else
		{
			#El parámetro es diferente de aprobado
			$REQ2='NO';
		}
	###
	#Comprobación de ambos requisitos
		if($REQ1=='OK' AND $REQ2=='OK')
		{
			#Materias requisito aprobadas
			#Comprobar datos de materia en cuestión
			$MateriaDatos="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat3')";
			$doMD=mysqli_query($link, $MateriaDatos);
			$rowMat=mysqli_fetch_array($doMD);
			$Puntaje=$rowMat[3];
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
		}
		else
		{
			if ($REQ1=='OK' AND $REQ2=='NO') { $Estado="<p style='color:white; background-color: red; font-weight: bold;'>NO SE PUEDE CURSAR</p>";
			 $Puntaje="VIRGEN";}
			else{
				if ($REQ1=='NO' AND $REQ2=='OK') { $Estado="<p style='color:white; background-color: red; font-weight: bold;'>NO SE PUEDE CURSAR</p>";
				 $Puntaje="VIRGEN";}
				else
				{if ($REQ1=='NO' AND $REQ2=='NO') { $Estado="<p style='color:white; background-color: red; font-weight: bold;'>NO SE PUEDE CURSAR</p>";
			 $Puntaje="VIRGEN";}
					else{$Estado="ERROR. UMC:DSSI:PE:AKAOPS:MateriaGrupal(Param:404)";}
				}
			}
		}
?>
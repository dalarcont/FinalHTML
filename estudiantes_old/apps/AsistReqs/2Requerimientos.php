<?php 

$MATCODERequisito=$Mat1;
		require '../divsys/MateriasReqs.php';
		$MateriaRequisito1=$MateriaRequisito;
		$MATCODERequisito=$Mat2;
		require '../divsys/MateriasReqs.php';
		$MateriaRequisito2=$MateriaRequisito;
		#Operaciones
		$Materia1="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat1')";
			$doMateria1=mysqli_query($link, $Materia1);
			if (!$doMateria1){die($REQ1='NO');}
			$rowReq1=mysqli_fetch_array($doMateria1);
			$Parametro1=$rowReq1['PARAM'];
				#Comprobar el parámetro de la asignatura requisito 1
				if ($Parametro1=='OK') {
					$REQ1='OK';
				}
				else
				{
					#El parámetro es diferente de aprobado
					$REQ1='NO';
				}

			$Materia2="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat2')";
			$doMateria2=mysqli_query($link, $Materia2);
			if (!$doMateria2){die($REQ2='NO');}
			$rowReq2=mysqli_fetch_array($doMateria2);
			$Parametro2=$rowReq2['PARAM'];
				#Comprobar el parámetro de la asignatura requisito 1
				if ($Parametro2=='OK') {
					$REQ2='OK';
				}
				else
				{
					#El parámetro es diferente de aprobado
					$REQ2='NO';
				}


			#Proceso de comprobación de aprobación de ambos requisitos.
			if ($REQ1=='OK' AND $REQ2=='OK') {
				
				#Materias requisito completas, proceder a comprobaciones de la asignatura indicada
				require 'RegistroConRequerimiento.php';

			}
			else
			{
				if ($REQ1=='OK' AND $REQ2=='NO') {
					
					echo "<img src='apps/NO.png' height='42' width='42'><br> No se puede registrar asistencia a la asignatura <b>$MATCODE - $MateriaNombre</b><br> Porque el requisito 2 <b><i>$Mat2 - $MateriaRequisito2</i></b> no está aprobado. ";
				}
				else
				{
					if ($REQ1=='NO' AND $REQ2=='OK') {
						
						echo "<img src='apps/NO.png' height='42' width='42'><br> No se puede registrar asistencia a la asignatura <b>$MATCODE - $MateriaNombre</b><br> Porque el requisito 1 <b><i>$Mat1 - $MateriaRequisito1</i></b> no está aprobado. ";
					}
					else
					{
						if ($REQ1=='NO' AND $REQ2=='NO') {
							
							echo "<img src='apps/NO.png' height='42' width='42'><br> No se puede registrar asistencia a la asignatura <b>$MATCODE - $MateriaNombre</b><br> Porque el requisito 1 <b><i>$Mat1 - $MateriaRequisito1</i></b><br> y el requisito 2 <b><i>$Mat2 - $MateriaRequisito2</i></b> no están aprobados.";
						}
						else
						{
							echo "Error de datos de parámetros de materias requisito. UMC:DSSI:PE:AKAOPS:MateriaGrupal(Param:404)";
						}
					}
				}
			} 

			?>
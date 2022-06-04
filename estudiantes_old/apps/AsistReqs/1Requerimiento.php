<?php 



$MATCODERequisito=$Mat1;
		require '../divsys/MateriasReqs.php';
		#Verificar que asignatura requisito exista
		$Requisito="SELECT * FROM platformdata WHERE ID='$ID' AND MAT IN('$Mat1')";
		$doReq=mysqli_query($link, $Requisito);
		$rowReq=mysqli_fetch_array($doReq);
		if (!$doReq){die("<img src='apps/NO.png' height='42' width='42'><br>	No se pudo realizar el registro de asistencia a la asignatura <b>$MATCODE - $MateriaNombre</b>. Intenta de nuevo más tarde.");}
		#El código mencionado aquí abajo es qué hacer cuando la función no muere
	    	#Comprobar parámetros de la asignatura requisito
			$Parametro=$rowReq['PARAM'];
			if ($Parametro=='OK') {
				#asignatura requisito completa, proceder a comprobaciones de la asignatura indicada
				require 'RegistroConRequerimiento.php';
			}
			else
			{
				echo "<img src='apps/NO.png' height='42' width='42'><br> No se puede registrar asistencia a la asignatura <b>$MATCODE - $MateriaNombre</b> <br> Porque el requisito <b>$Mat1 - $MateriaRequisito</b> no ha sido aprobado.";
			}

			?>
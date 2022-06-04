<?php


require '../divsys/DatosProgramas.php';
	/* Leer si tiene el puntaje completo para el proceso de matriculado de electivas */
			#Cargar número de créditos acumulados
	    		$TotalCreditosAcumulados="SELECT SUM(CR) as TotalCreditos FROM platformdata WHERE ID='$ID' AND PARAM IN('OK')";
	            $ResultadoPuntajes = mysqli_query($link, $TotalCreditosAcumulados);   
	            $rowCreditos = mysqli_fetch_array($ResultadoPuntajes, MYSQL_ASSOC);
	            $DataCreditos=$rowCreditos["TotalCreditos"];
		if ($DataCreditos>=$CreditosParaElectiva) {
			#Posee habilidad para electiva
			echo "Matrícula de electiva habilitada<br> Has acumulado ", $CreditosParaElectiva, " créditos. <br> Los créditos de esta asignatura se ceden a la electiva una vez esté matriculada. <br> Por favor realiza tu matrícula electiva <br> De lo contrario reprobarás 8 créditos académicos.";
		}
		else
		{
			#No hay habilidad para electiva
			echo "Matrícula de electiva inhabilitada porque el estudiante no ha acumulado ", $CreditosParaElectiva, " créditos. <br>";
		}

		?>
<?php

require 'divsys/umcdssictrl.php';
	$EstadoAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND PROGC IN('OPTA') AND PARAM IN('A')";
	$doEA=mysqli_query($link, $EstadoAsignatura);
	$rowEA=mysqli_fetch_array($doEA);
	if ($rowEA) {
		$MATCODE=$rowEA['MAT'];
		require 'divsys/Materias.php';
		#Imprimir la asignatura para habilidad de registro
		echo '<option style="font-weight:bold" value="null">--- OPTATIVA ---</option>';
		echo '<option value="', $MATCODE, '">', $CodigoLiteral, ' - ', $MateriaNombre, '</option>';
	}
	else
	{

	}

	?>
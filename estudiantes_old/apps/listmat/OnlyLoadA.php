<?php
	$ID=$_SESSION['ID'];	
	require 'divsys/umcdssictrl.php';
	$EstadoAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE' AND PARAM='A'";
	$doEA=mysqli_query($link, $EstadoAsignatura);
	$rowEA=mysqli_fetch_array($doEA);
	if ($rowEA) {
		require 'divsys/Materias.php';
		#Imprimir la asignatura para habilidad de registro
		echo '<option value="', $rowEA['MAT'], '">', $CodigoLiteral, ' - ', $MateriaNombre, '</option>';
	}


?>
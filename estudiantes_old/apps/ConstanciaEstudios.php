<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */

#ConstanciaEstudios

session_start();
$PROGC=$_SESSION['PROGC'];
$ID=$_SESSION['ID'];
require 'divsys/umcdssictrl.php';

$hora= date ("h:i:s");
$fecha= date ("j/n/Y");

#Obtener datos para constancia de estudios
$getData="SELECT * FROM gendata WHERE ID='$ID' AND PROGC='$PROGC'";
$goData=mysqli_query($link, $getData);
$rowData=mysqli_fetch_array($goData);

	//$PROGC=$rowData['PROGC'];
	require 'divsys/DatosProgramas.php';

	#Cargar número de materias activas
	$NumeroMateriasAct="SELECT * FROM platformdata WHERE ID='$ID' AND PARAM IN('A') AND PROGC='$PROGC'";
    $MatA=mysqli_query($link, $NumeroMateriasAct);
    $MatRow=mysqli_fetch_array($MatA);
    $MatACont=mysqli_num_rows($MatA);

    #Cargar número de materias aprobadas
    $NumeroMateriasOK="SELECT * FROM platformdata WHERE ID='$ID' AND PARAM IN('OK') AND PROGC='$PROGC'";
    $MatOK=mysqli_query($link, $NumeroMateriasOK);
    $MatRow=mysqli_fetch_array($MatOK);
    $MatContOK=mysqli_num_rows($MatOK);

    #Cargar número de materias canceladas
    $NumeroMateriasNO="SELECT * FROM platformdata WHERE ID='$ID' AND PARAM IN('C') AND PROGC='$PROGC'";
    $MatNO=mysqli_query($link, $NumeroMateriasNO);
    $MatRow=mysqli_fetch_array($MatNO);
    $MatContNO=mysqli_num_rows($MatNO);

    #Cargar número de créditos acumulados
    $TotalCreditosAcumulados="SELECT SUM(CR) as TotalCreditos FROM platformdata WHERE ID='$ID' AND PARAM IN('OK') AND PROGC='$PROGC'";
            $ResultadoPuntajes = mysqli_query($link, $TotalCreditosAcumulados);   
            $rowCreditos = mysqli_fetch_array($ResultadoPuntajes, MYSQL_ASSOC);
            $DataCreditos=$rowCreditos["TotalCreditos"];

	echo "
<br><br>
	<h6> Universidad Falsa <br> CONSTANCIA DE ESTUDIOS </h6>
	<p></p>
	<p>
	A través de la presente se hace constar que el/la estudiante: <br><br> <b>"; echo $rowData['NOM']; echo "</b>, identificado(a) con el número de documento: <b>"; echo $ID; echo "</b>.<br> También identificado con código de estudiante: <b>"; echo $rowData['IDUM']; echo "</b>.
	<br><br>Se encuentra cursando el programa ofrecido por la universidad: <b>"; echo $NombrePrograma; echo "</b> que cuenta con un número de <b> $NumeroModulos módulos</b>.<br></p>";

	echo '<p> Cuenta con <b>', $DataCreditos, '</b> créditos acumulados de un total de <b>', $TotalCreditosPrograma, '</b></p>';

	printf("<p>Actualmente cuenta con un número de <b>%d</b> asignatura(s) <b>activa(s)</b> y en curso. </p> \n", $MatACont);
	mysqli_free_result($MatA);

	printf("<p>Actualmente cuenta con un número de <b>%d</b> asignatura(s) <b>aprobada(s)</b>. </p> \n", $MatContOK);
	mysqli_free_result($MatOK);

	printf("<p>Actualmente cuenta con un número de <b>%d</b> asignatura(s) <b>cancelada(s)</b>. </p> \n", $MatContNO);
	mysqli_free_result($MatNO);

	echo "
	<p> Esta constancia de estudios fue generada en la siguiente fecha: <b>"; echo $fecha; echo " - "; echo $hora; echo "</b><br>
	<br>
	<i> Esta constancia se adjudica únicamente a la persona nombrada anteriormente, la universidad no se hace responsable por el mal uso de esta constancia. </i></p>
	<p> Autorizan esta constancia: <br>
		<b>Alta Presidencia <br> Consejo Superior <br> </b> Divisiones Superiores de Registro y Control & Planeación Académica <br>  <i>Auxiliarmente testifica: División Baja de Estudiantes.</i> <br> Operó: <b> División Superior de Sistemas Informáticos </b> </p>
	";


?>
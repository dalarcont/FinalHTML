<?php
session_start();

$PROGC=$_SESSION['ProgcToCert'];
require '../../divsys/DatosProgramas.php';

echo "<body onload='window.print()'>
<link rel='stylesheet' href='../../style.css' media='screen'>
<link href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css' rel='stylesheet' type='text/css'/>

<h3>Universidad Falsa</h3>
<h3>División Superior de Registro y Control</h3>
<h3>Dirección de Facultad ",$Facultad,"</h3>
<br><br>
<p>La prestigiosa Universidad Falsa se place en certificar a petición de quien solicita, que dentro de nuestra institución, figura como estudiante ",$BBBBBBB," adscrito(a) de la ",$CCCCC," en el programa <b>",$DDDDDD,"</b>.
Programa académico en el cual cursó los periodos: ",$EEEEEEE_1," con promedio: ",$FFFFFFFF_1,", ",$EEEEEEE_n," con promedio: ",$FFFFFFFF_n,", acumulando ",$GGGGGGGG," créditos académicos aprobados.<br>
<br>
";
if($UltimoPeriodo==true){
  echo "Y se encuentra cursando el programa mencionado en el periodo actual.<br>";
}
echo "
</p>

</body>
";
?>

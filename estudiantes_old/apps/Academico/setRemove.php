<?php

$Code = $_POST['MatCodeN'];

echo "<script>alertify.alert('Operación de ajuste de matrícula','NO SE PUEDE CANCELAR LA ASIGNATURA DADO QUE EL MÍNIMO DE CRÉDITOS A DJAR EN MATRÍCULA NO RESPETAN LO ACORDADO EN EL REGLAMENTO ESTUDIANTIL, CANCELACION DE PRUEBA ",$Code,"', function (){ alertify.error('Cancelación de asignatura: <br>ABORTADA POR REGISTRO Y CONTROL.')});</script>";
?>

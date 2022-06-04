<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */


session_start();
$ID=$_SESSION['ID'];
require 'divsys/umcdssictrl.php';
$PROGC=$_SESSION['PROGC'];
function MostrarFlotante($Numero){
    $Mostrar = sprintf('%0.1f', $Numero);
    return $Mostrar;
}
#Obtener datos para constancia de estudios
$getData="SELECT * FROM gendata WHERE ID='$ID' AND PROGC='$PROGC'";
$goData=mysqli_query($link, $getData);
$rowData=mysqli_fetch_array($goData);

$PIN=$rowData['PIN'];
//$NAME=$rowData[2];
//$EMAIL=$rowData[3];
//$ICFES=$rowData[4];
//$PROGC=$rowData[5];
//$ASIST=$rowData[8];
//$PUNT=$rowData[9];
//$REFPAGO=$rowData[10];

require 'divsys/DatosProgramas.php';
#Scripts para desplegable de asignaturas
/*echo "<script>
function EnCurso() {
    var x = document.getElementById('AsignaturasCursando');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
}

function Aprobadas() {
    var x = document.getElementById('AsignaturasAprobadas');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
}

function Canceladas() {
    var x = document.getElementById('AsignaturasCanceladas');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
}
</script>
"; */

#Estilo de tabla
echo '<style type="text/css">
.tg  {width:100%;border: inset 0pt;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;overflow:hidden;word-break:normal;width:auto;border: inset 0pt;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;overflow:hidden;word-break:normal;width:auto;border: inset 0pt;}
.tg .tg-83d4{font-style:italic;text-align:right;vertical-align:top;width:auto;border: inset 0pt;}
.tg .tg-wreh{font-weight:bold;vertical-align:top;width:auto;text-align:left;border: inset 0pt;}
.tg .tg-us36{vertical-align:top;width:auto;border: inset 0pt;text-align:center;}
</style>
';
    
//Aplicación de listado de asignaturas activas
   // echo "<b>El orden de las asignaturas en los listados es tal que encabeza la asignatura con mayor número de créditos académicos</b><br>";
    $LISTAR="SELECT * FROM platformdata WHERE ID='$ID' AND PROGC='$PROGC' AND PARAM IN('A') ORDER BY CR DESC";  
    $OPERAR=mysqli_query($link, $LISTAR);
    if ($row=mysqli_fetch_array($OPERAR)){
    do{
        $MATCODE=$row['MAT'];
        require 'divsys/Materias.php';
        $Fechas=json_decode($row['FECHAS']);
        $Parciales=json_decode($row['PARCIALES']);
        echo '<fieldset>
                <table class="tg">
                <tbody><tr>
                    <th class="tg-wreh" colspan="3"><h6>',$CodigoLiteral,' - ',$MateriaNombre,'<br></h6></th>
                    <th class="tg-83d4" colspan="2">Nota ',$Definitiva,' </th>
                </tr>
                <tr>
                    <td class="tg-us36"><b>Proceso</b></td>
                    <td class="tg-us36"><b>Fecha</b></td>
                    <td class="tg-us36"><b>Nota obtenida</b></td>
                    <td class="tg-us36"><b>Estado</b></td>
                </tr>';

            for($i=0; $i<=(count($Parciales)-1); $i++){
                $ParcialNo=$i+1;
                $NombreActividad="Parcial $ParcialNo";
                //$FechaParcial=$Fechas[$i];
                $Puntaje=MostrarFlotante($Parciales[$i]);
                if($Puntaje<=2.9){$Estado="NO APROBADA";}else{$Estado="APROBADA";}
                echo '
                    <tr>
                      <td class="tg-us36">',$NombreActividad,'</td>
                      <td class="tg-us36">',$Fechas,'</td>
                      <td class="tg-us36">',$Puntaje,'</td>
                      <td class="tg-us36">',$Estado,'</td>
                    </tr>
                ';
            }
            echo '</tbody></table></fieldset>';
            echo count($Parciales);
        }//CERRAR Consulta
        while ($row=mysqli_fetch_array($OPERAR));
        
    }
    
    else{
        echo "<p>No tienes asignaturas matriculadas.</p>";
            } 
    

?>
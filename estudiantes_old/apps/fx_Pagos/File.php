<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */


#ConsultarPagos

session_start();
$PROGC=$_SESSION['PROGC'];
$ID=$_SESSION['ID'];
require '../../divsys/umcdssictrl.php';
require '../../divsys/iscetex.php';
require '../../divsys/DatosProgramas.php';


$get="SELECT * FROM iscetex_history WHERE ID='$ID'";
$Do_get=mysqli_query($link, $get);
$PackPagos=mysqli_fetch_array($Do_get);
//$Valor="Cualquiera";
$Referencias=json_decode($PackPagos['REFS']);
$ReferenciasParametros=json_decode($PackPagos['REFDATA']);
$FechasPagos=json_decode($PackPagos['DATES']);
$EstadoPagos=json_decode($PackPagos['STATUS']);
$ValoresPagados=json_decode($PackPagos['PRICEDATA']);
echo  "
<style type='text/css'>
.tg  {width:100%;border: inset 0pt;}
.tg td{font-family:Arial, sans-serif;font-size:12px;padding:10px 5px;overflow:hidden;word-break:normal;width:auto;border: inset 0pt;}
.tg th{font-family:Arial, sans-serif;font-size:12px;font-weight:normal;padding:10px 5px;overflow:hidden;word-break:normal;width:auto;border: inset 0pt;}
.tg .tg-83d4{font-style:italic;text-align:right;vertical-align:top;width:auto;border: inset 0pt;}
.tg .tg-wreh{font-weight:bold;vertical-align:top;width:auto;text-align:left;border: inset 0pt;}
.tg .tg-us36{vertical-align:top;width:auto;border: inset 0pt;text-align:center;}
.tg .tg-acum{vertical-align:top;width:auto;border: inset 0pt;text-align:center;}
</style>";
echo '<table class="tg">';
echo '
    <tr style="border:solid;">
      <th class="tg-wreh" colspan="1"><h6>CÓDIGO</h6></th>
      <th class="tg-wreh" colspan="2"><h6>REFERENCIA</h6></th>
      <th class="tg-wreh" colspan="1"><h6>VALOR</h6></th>
      <th class="tg-wreh" colspan="1"><h6>ESTADO</h6></th>
      <th class="tg-wreh" colspan="1"><h6>FECHA PAGADO</h6></th>
    </tr>';

for($i=0; $i<=(count($Referencias)-1); $i++){

    if(RefCodePago($Referencias[$i])==false){
        /*Es el pago de algún programa académico*/
        $ReferenciaDetallada="";
        $PROGC=$Referencias[$i];
        require '../../divsys/DatosProgramas.php';
        $Periodo=$ReferenciasParametros[$i];
        $ReferenciaDetallada="Matrícula $NombrePrograma - Periodo $Periodo";
        $Valor = $ValoresPagados[$i];
    }
    else
    {
        $Periodo=$ReferenciasParametros[$i];
        $ReferenciaDetallada=RefCodePago($Referencias[$i]);
        $ReferenciaDetallada="$ReferenciaDetallada Periodo $Periodo";
        $Valor = $ValoresPagados[$i];
    }
    if($EstadoPagos[$i]==0){
      $Estado="NO PAGADO";
    }
    else
    {
      $Estado="PAGADO";
    }
    //echo "<h3>Código: ",$Referencias[$i]," --- Referencia: ",$ReferenciaDetallada," --- Valor: ",$Valor,"</h3>";
    echo '<tr>
          <td class="tg-us36">',$Referencias[$i],'</td>
          <td class="tg-us36" colspan="2">',$ReferenciaDetallada,'</td>
          <td class="tg-us36">',$Valor,'</td>
          <td class="tg-us36">',$Estado,'</td>
          <td class="tg-us36">',$FechasPagos[$i],'</td>
          </tr>';
}

echo "</table>";


?>

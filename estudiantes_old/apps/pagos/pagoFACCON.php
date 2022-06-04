<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
require 'FormatoMoneda.php';
$ValorTotal=$ValorCredito*$DataCreditos;
$ValorPagar=formatcurrency($ValorTotal, "COP");

echo "
<style type='text/css'>
.tg  {border-collapse:collapse;border-spacing:0;border-color:#999;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-blbj{font-weight:bold;background-color:#3531ff;color:#ffffff;text-align:center;vertical-align:top}
.tg .tg-hgcj{font-weight:bold;text-align:center}
.tg .tg-gozu{font-size:10px;text-align:center}
</style>
<center>
<table class='tg'>
  <tr>
    <th class='tg-blbj' colspan='7'>Pago de matrícula según créditos matriculados</th>
  </tr>
  <tr>
    <td class='tg-hgcj'>Periodo</td>
    <td class='tg-hgcj'>Programa</td>
    <td class='tg-hgcj'>Asignaturas matriculadas</td>
    <td class='tg-hgcj'>Créditos matriculados</td>
    <td class='tg-hgcj'>Valor crédito</td>
    <td class='tg-hgcj'>Descuentos</td>
    <td class='tg-hgcj'>Total pago</td>
  </tr>
  <tr>
    <td class='tg-baqh'>$SMActual</td>
    <td class='tg-baqh'><i>$NombrePrograma</i></td>
    <td class='tg-baqh'>$MatACont</td>
    <td class='tg-baqh'>$DataCreditos</td>
    <td class='tg-baqh'>$ $ValorCreditoMostrar</td>
    <td class='tg-baqh'>MATRÍCULA=NO<br>GRADO=100%</td>
    <td class='tg-baqh'><b>$",$ValorPagar,"</b></td>
  </tr>

  <tr>
    <th class='tg-blbj' colspan='7'>Total pago realizado: $",$ValorPagar," </th>
  </tr>
  <tr>
    <td class='tg-gozu' colspan='7'>Universidad Falsa - D.S. REGISTRO Y CONTROL<br> FACULTAD CONTINUA - D.G.FINANCIERA</td>
  </tr>
</table>
<h6>Ten en cuenta:</h6>
<p>No se realizarán devoluciones de dinero por solicitud del estudiante.</p>
<p><b>No vayas a tener el descaro de decir que como los derechos de grado son prácticamente gratuitos, el valor que hubieren adquirido en caso de que los tuvieras que pagar se te compense en devolución.</b></p>
<p>No se realizarán devoluciones de dinero por cancelación de tu semestre por parte de las directivas.</p>
<p>No se realizarán devoluciones de dinero por cancelación general del semestre por parte de las directivas.</p>
<p>No se realizarán devoluciones de dinero por créditos aprobados, no aprobados y/o abandonados.</p>
<p>No se realizarán devoluciones de dinero por cancelación y retiro voluntario.</p>
</center>
";

?>
<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */


session_start();
$ID=$_SESSION['ID'];
$NAME=$_SESSION['NAME'];
$PROGC=$_SESSION['PROGC'];
require 'divsys/umcdssictrl.php';

function derivarPrograma($code){
    $PROGC=$code;
    require 'divsys/DatosProgramas.php';
    return $NombrePrograma;
}
function derivarDependencia($type){
    switch ($type) {
        case 'SI':
            $Dependencia="D.S. SISTEMAS INFORMÁTICOS";
            break;

        case 'RC':
            $Dependencia="D.S. REGISTRO Y CONTROL";
        break;

        case 'DF':
            $Dependencia="D.S. DIRECTIVA DE FACULTADES";
        break;

        case 'FZ':
            $Dependencia="D.G. FINANCIERA";
        break;

        case 'PA':
            $Dependencia="D.S. PLANEACIÓN ACADÉMICA";
        break;
        
        default:
            $Dependencia="SIN ESPECIFICAR";
        break;
    }
    return $Dependencia;
}

function derivarEstado($stat){
    switch ($stat) {
        case 1:
            $estado="SIN REVISAR";
            break;
        case 2:
            $estado="REVISADA. PROCESANDO.";
        break;

        case 3:
            $estado="FINALIZADA. ACEPTADA";
        break;

        case 4:
            $estado="FINALIZADA. RECHAZADA";
        break;

        case 5:
            $estado="FINALIZADA. REGULAR.";
        break;

        case 6:
            $estado="CONSEJO SUPERIOR TOMA CONTROL";
        break;

        case 7:
            $estado="SOCIALIZACIÓN ACEPTADA.";
        break;

        default:
            $estado="DEPENDENCIA NO HA RECIBIDO EL TICKET";
            break;
    }
    return $estado;
}

#Obtener tickets presentados por el estudiante
        
    $getAlreadyTickets="SELECT * FROM akatickets WHERE STDID='$ID' AND STDPROGC IN('$PROGC') ORDER BY STDDATE ASC";  
    $Operar=mysqli_query($link, $getAlreadyTickets);
    if ($rowGTS=mysqli_fetch_array($Operar)){
        //Mostrar los datos
        echo '<style>
                table.blueTable {
          font-family: "Trebuchet MS", Helvetica, sans-serif;
          border: 2px solid #1C6EA4;
          background-color: #EEEEEE;
          width: 100%;
          text-align: center;
          border-collapse: collapse;
        }
        table.blueTable td, table.blueTable th {
          border: 1px solid #AAAAAA;
          padding: 3px 2px;
        }
        table.blueTable tbody td {
          font-size: 12px;
                    text-align: center;

        }
        table.blueTable tr:nth-child(even) {
          background: #D0E4F5;
        }
        table.blueTable thead {
          background: #1C6EA4;
          background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
          background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
          background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
          border-bottom: 0px solid #444444;
        }
        table.blueTable thead th {
          font-size: 13px;
          font-weight: bold;
          color: #FFFFFF;
          text-align: center;
          border-left: 0px solid #D0E4F5;
        }
        table.blueTable thead th:first-child {
          border-left: none;
        }

        table.blueTable tfoot td {
          font-size: 14px;
        }
        table.blueTable tfoot .links {
          text-align: right;
        }
        table.blueTable tfoot .links a{
          display: inline-block;
          background: #1C6EA4;
          color: #FFFFFF;
          padding: 2px 8px;
          border-radius: 5px;
        }</style>';
        echo '<table class="blueTable">
            <thead>
            <tr>
                <th>TICKET</th>
                <th>FECHA DE RADICACIÓN</th>
                
                <th>DEPENDENCIA</th>
                
                <th>ESTADO</th>
            </tr>
            </thead>
            <tbody>';

        do{
            //Cargar los datos
            $STDTicket=$rowGTS['STDTICKET'];
            $STDDate=$rowGTS['STDDATE'];
            $STDID=$rowGTS['STDID'];
            $STDNAME=$rowGTS['STDNAME'];
            $STDPROGC=derivarPrograma($rowGTS['STDPROGC']);
            $STDTYPE=derivarDependencia($rowGTS['STDTYPE']);
            $STDMSG=$rowGTS['STDMSG'];
            $STDSTATUS=derivarEstado($rowGTS['STDSTATUS']);
            $STDANSW=$rowGTS['STDANSW'];
            if($rowGTS['STDSTATUS']==6){
                $STDANSW="El encargado asignado a tu ticket enviado a la dependencia indicada consideró: <br>1) No tiene capacidad para tu ticket <br> 2) Requiere ayuda para darte solución <br> 3) Lenguaje grosero en tu justificación <br> 4) Intentas cometer algo que atenta al reglamento <br> 5) Has mandado varios tickets que pueden ser considerados SPAM <br> 6) Le caes mal al encargado de tu ticket y solicitó tu expulsión";                
            }
            else
            {
                if($rowGTS['STDSTATUS']==5){
                    $STDANSW="Tu ticket fue medianamente solucionado.<br> $STDANSW";
                }
                if(empty($STDANSW)){
                    $STDANSW=$STDSTATUS;
                }
            }
            //Fila a mostrar
            echo "<script>
                function RE",$STDTicket,"(){
                    var areaRE = document.getElementById('areaRE');
                    var sFecha = document.getElementById('ticketFecha');
                    var sEstud = document.getElementById('ticketStudent');
                    var sProgc = document.getElementById('ticketProg');
                    var pJusty = document.getElementById('REJustificacion');
                    var pRespuesta = document.getElementById('RESpace');
                    var Legend = document.getElementById('legendTicket');
                        areaRE.style.display='block';
                        sFecha.innerHTML='",$STDDate,"';
                        sEstud.innerHTML='",$STDID," - ",$STDNAME,"';
                        sProgc.innerHTML='",$STDPROGC,"';
                        pJusty.innerHTML = '",$STDMSG,"';
                        pRespuesta.innerHTML = '",$STDANSW,"';
                        Legend.innerHTML = 'PROCESO TICKET <b>",$STDTicket,"</b>';
                }
            </script>";
            echo '<tr>
                    <td>',$STDTicket,'</td>
                    <td>',$STDDate,'</td>
                    <td>',$STDTYPE,'</td>
                    
                    <td><a title="Haz clic para ver información" onclick="RE',$STDTicket,'()">',$STDSTATUS,'</a></td>
                </tr>
            '; 
        }//CERRAR DO

        while ($rowGTS=mysqli_fetch_array($Operar));
        echo "</tbody></tr></table>\n";
        echo "<br> --- --- --- --- --- <br>";
    }


echo "<fieldset id='areaRE'style='display:none;'>
<legend id='legendTicket'></legend>
<h6>--- DATOS ---</h6>
<p><b>FECHA DE RADICACIÓN</b>: <span id='ticketFecha'></span><br><b>ESTUDIANTE</b>: <span id='ticketStudent'></span> <br> <b>PROGRAMA</b>: <span id='ticketProg'></span></p>
<br><h6>--- JUSTIFICACIÓN ---</h6><br>
<p id='REJustificacion'></p><br>
<h6>--- RESPUESTA ---</h6>
<p id='RESpace'></p>
<p>----------<br>Gracias por utilizar el servicio de soporte estudiantil. <br>Hasta pronto.</p>
<button class='art-button' onclick='unShowAnswer()'>Ocultar</button>
</fieldset>";

echo "<br> --- --- --- --- --- <br>";
echo "<h6>REALIZAR TICKET</h6>";



echo "
<script src='alertify.js'></script>
<link rel='stylesheet' href='css/alertify.css' />
<link rel='stylesheet' href='css/themes/bootstrap.css' />

<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js'></script>
<script type='text/javascript' src='apps/jquery.form.js'></script>
<script type='text/javascript'>
        $('document').ready(function()
        {
        $('#formSend').ajaxForm( {
        target: '#sendMensaje',
        success: function() {
        $('#PostSend').slideUp('fast');
        }
        });
        });
</script>
<script type='text/javascript' src='validarFormularios.js'></script>";
echo '
<div id="sendMensaje">
    <div id="PostSend">
        <form id="formSend" name="formSend" action="apps/EnviarTicketStudent.php" method="POST" onsubmit="return MessageToStaff(this)">
        <p>Elije la dependencia:</p>
            <p>
            <select id="TYPE" name="TYPE">
            <option default value="null">---</option>
            <option value="RC">D.S. REGISTRO Y CONTROL</option>
            <option value="SI">D.S. SISTEMAS INFORMÁTICOS</option>
            <option value="FZ">D.G. FINANCIERA</option>
            <option value="DF">D.S. DIRECTIVA DE FACULTADES</option>
            <option value="PA">D.S. PLANEACIÓN ACADÉMICA</option>
            <option value="SP">CONTRIBUCIONES ECONÓMICAS/LEGALES</option>
            </select><br></p>
            <p style="color:red;" id="alert"></p>
        <p>Escribe tu justificación/problema/solicitud</p>
            <p><textarea style="width:650px; height=50px;" rows="15" cols="75" id="MSG" name="MSG"></textarea><br></p>
        <p>&nbsp;<input type="submit" class="art-button" value="Enviar mensaje">&nbsp;<br></p>
            <p><br></p>
        </form>
    </div>
</div> ';

?>
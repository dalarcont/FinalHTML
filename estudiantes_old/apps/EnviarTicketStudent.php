<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos - 2016 */
session_start();
$ID=$_SESSION['ID'];
$NAME=$_SESSION['NAME'];
$PROGC=$_SESSION['PROGC'];
require '../divsys/umcdssictrl.php';

#Obtener datos del formulario

    $TYPE=$_POST['TYPE'];
    $MSG=$_POST['MSG'];
    function make_Ticket($length = 10) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
    }

    $gotTicket=make_Ticket();
    #Fecha de radicaci´n
    $FechaRadicado=date("Y-m-d H:i:s");
#Registrar mensaje en la DB
    $sendMessage="INSERT INTO akatickets (STDTICKET, STDDATE, STDID, STDNAME, STDPROGC, STDTYPE, STDMSG, STDSTATUS) VALUES ('$gotTicket', '$FechaRadicado', '$ID', '$NAME', '$PROGC', '$TYPE', '$MSG', 1)";
    $executeSend=mysqli_query($link, $sendMessage);     
        #Mostrar al usuario su código
        echo "";
        echo "<p>";
        echo "Gracias por utilizar el servicio de tickets estudiantiles. <br> Tu ticket es: <big><b>";
        echo $gotTicket;
        echo "</b></big><br> Si olvidas el ticket, no hay problema, al entrar nuevamente en este aplicativo verás los tickets que has realizado. </p>";
        echo "<p><br></p>";
        echo "";

?>
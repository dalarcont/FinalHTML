<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
session_start();

$ID=$_SESSION['ID'];
$PROGC=$_SESSION['PROGC'];
$NAME=$_SESSION['NAME'];
echo "<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js'></script>
<script type='text/javascript' src='apps/jquery.form.js'></script>

    <!-- Script para submit -->
        <script type='text/javascript'>
        $('document').ready(function()
        {
        $('#RetirarseForm').ajaxForm( {
        target: '#Retiro',
        success: function() {
        $('#divForm').slideUp('fast');
        }
        });
        });
        </script>";


#Cancelación de matrícula y retiro de la universidad.

	echo "<h6> CANCELACIÓN Y RETIRO </h6>";

	echo "<div id='divForm'><p><i>Lee por favor lo siguiente:</i></p> <br>
    <h6>A TENER EN CUENTA:</h6>
    <p>Es un derecho que por reglamento tienes y puedes ejecutar sin presiones. Derecho especificado en el <b>Capítulo 9</b> del Reglamento Estudiantil</p>
    <p>Todas tus asignaturas serán automáticamente canceladas, inhabilitadas y reducidas a puntajes de 0,0.</p>
    <p>La universidad no se hace responsable si el retiro que se ejecuta fue por tu propia hazaña o fue realizado por alguien ajeno a ti.</p>
    <p>El retiro incurre en que no puedes contraer inscripciones en el periodo actual ",$SMActual," y posiblemente en un número de veces igual al número de módulos de tu programa, y en otros casos más extremos, permanentemente sin habilidad para inscripciones.</p>
    <p>Cualquier dato relacionado a tu historial académico desparece permanentemente.</p>
    <p>No existe la posibilidad de re-integrarte en la universidad.</p>
    <p>No se realizarán devoluciones de dinero.</p>
    <p>Sin más que decir, tienes el siguiente botón de confirmación...</p>
	";

	

echo "


<form name='RetirarseForm' id='RetirarseForm' method='post' action='apps/DoRetiro.php'>
<input type='hidden' name='ORDEN' value='RETIRO'>
<input type='submit' class='art-button' value='Acepto que quiero retirarme y que estoy totalmente de acuerdo con las consecuencias que pueda derivar mi retiro. Procedo a retirarme'>
</form></div>";

echo "<div id='Retiro'></div>";
?>

<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
session_start();
$ID=$_SESSION['ID'];
$IDUM=$_SESSION['IDUM'];
?>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js'></script>
<script type='text/javascript' src='jquery.form.js'></script>
    <!-- Script para submit -->
        <script type='text/javascript'>
        $('document').ready(function()
        {
        $('#FormUpdatePass').ajaxForm( {
        target: '#CambioContrasena',
        success: function() {
        $('#FormularioUpdatePass').slideUp('fast');
        }
        });
        });</script>
        <script type='text/javascript'>
        function ValidarCampos(FormLogin) {

        if(FormUpdatePass.PASS1.value.length<=7) {
            FormUpdatePass.PASS1.focus();
            alert('Por favor indica tu nueva contraseña, esta debe ser de 8 dígitos en adelante!');
            return false;
        }

        if(FormUpdatePass.PASS2.value.length<=7) {
            FormUpdatePass.PASS2.focus();
            alert('Por favor indica tu nueva contraseña, esta debe ser de 8 dígitos en adelante');
            return false;
        }
        if(FormUpdatePass.PASS3.value.length==0) {
            FormUpdatePass.PASS3.focus();
            alert('Por favor indica tu nueva pregunta de seguridad!');
            return false;
        }

        if(FormUpdatePass.PASS4.value.length==0) {
            FormUpdatePass.PASS4.focus();
            alert('Por favor indica la respuesta a tu pregunta de seguridad.');
            return false;
        }

        var PASS_1 = document.FormUpdatePass.PASS1.value;
		var PASS_2 = document.FormUpdatePass.PASS2.value;
		var Val_PASS_1 = PASS_1.length;
		var Val_PASS_2 = PASS_2.length;
		if (Val_PASS_1 != Val_PASS_2) {
			alert('Las contraseñas no coinciden, verifica nuevamente...');
			return false;
		} else {
			for (n = 0; n < Val_PASS_1; n++) {
				if (PASS_1.charAt(n) != PASS_2.charAt(n)) {
					alert('Las contraseñas no coinciden, verifica nuevamente...');
					return false;
				}
			}
		}

		return true;
    }
</script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script type="text/javascript">
function AyudaParaPendejos() {

     $("#dialog").dialog({ show: "blind",
              hide: "blind",
              width: 500,
              height: 240
          });
        }
</script>
<script language="javascript">

function capLock(e){
kc=e.keyCode?e.keyCode:e.which;
sk=e.shiftKey?e.shiftKey:((kc==16)?true:false);
if(((kc>=65&&kc<=90)&&!sk)||((kc>=97&&kc<=122)&&sk ))
document.getElementById('caplock').style.visibility = 'visible';
else document.getElementById('caplock').style.visibility = 'hidden';
}
</script>

<?php
require 'divsys/umcdssictrl.php';

echo "



        <div id='FormularioUpdatePass'>
        <form id='FormUpdatePass' name='FormUpdatePass' action='apps/updatePassword' method='POST' onsubmit='return ValidarCampos(this);'>
            <p><b>Nueva contraseña:</b></p>
            <p><input type='password' name='PASS1' autocomplete='off' onkeypress='capLock(event)'><br></p><div id='caplock' style='visibility:hidden'><p style='color:red;'><b>Tienes activadas las mayúsculas</b></p></div>

            <p><b>Confirma tu nueva contraseña:</b></p>
            <p><input type='password' name='PASS2' autocomplete='off' onkeypress='capLock(event)'></p><div id='caplock' style='visibility:hidden'><p style='color:red;'><b>Tienes activadas las mayúsculas</b></p></div>

            <p><b>Nueva pregunta de seguridad:</b></p>
            <p><input type='text' name='PASS3' autocomplete='off'></p>
            <p><b>Respuesta pregunta de seguridad:</b></p>
            <p><input type='text' name='PASS4' autocomplete='off'></p>

            <p>&nbsp;
            <button type='submit' class='art-button' value='Cambiar contraseña'>Cambiar contraseña</button></p>
        <br>
        <a onclick='AyudaParaPendejos();'>¿Necesitas ayuda?</a>
            </form></div>
<div id='CambioContrasena'></div>

<!-- AYUDA PARA PENDEJOS -->
<div id='dialog' style='display: none;' title='Cambio de contraseña'>
    <div style='width: 460px; height: 190px;' id='int_dialog'>
        <div style='text-align: justify; font-size: 13px; width: 450px;'>
            <center><p>Debes indicar una nueva contraseña, luego indicarla nuevamente.</p>
            <p>Debes indicar una nueva pregunta de seguridad que será utilizada en caso de que en el futuro olvides tu contraseña, luego indicar la respuesta a esa pregunta.</p>
            <p> Finalmente debes presionar el botón 'Cambiar contraseña'. </p><br>
            <i> El cambio de contraseña se realizará y para efectos de seguridad y verificación, deberás ingresar nuevamente al portal con la nueva contraseña.</i>
            </center>
        </div>
    </div>
</div>
";

?>
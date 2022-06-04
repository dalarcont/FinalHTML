<?php
session_start();
session_unset();
session_destroy();
#require 'NoDisponibilidadPorDivsys.php';
?><!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Universidad Falsa - División Superior de Sistemas Informáticos -->
    <meta charset="utf-8">
    <title>Portal estudiantil - Ingresar</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
    <link rel="stylesheet" href="style.css" media="screen">
<link rel="stylesheet" href="css/alertify.css" />

<link rel="stylesheet" href="css/themes/bootstrap.css" />

<script src="alertify.js"></script>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script language="javascript">

function capLock(e){
  kc=e.keyCode?e.keyCode:e.which;
  sk=e.shiftKey?e.shiftKey:((kc==16)?true:false);
  if(((kc>=65&&kc<=90)&&!sk)||((kc>=97&&kc<=122)&&sk ))
  document.getElementById('caplock').style.visibility = 'visible';
  else document.getElementById('caplock').style.visibility = 'hidden';
}
</script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <!-- Script para submit está de tal manera que ejecutado el submit, no importa si accede o no, los campos 'ID' y 'Pass' se limpian-->
        <script type="text/javascript">
        $('document').ready(function()
        {
        $('#FormLogin').ajaxForm( {
        target: '#AccesoResultado',
        success: function() {
        $('#FormLogin')[0].reset();
        }
        });
        });</script>


<script src="validarFormularios.js"></script>
<script>
        function justNumbers(e)
            {
            var keynum = window.event ? window.event.keyCode : e.which;
            if ((keynum == 8) || (keynum == 46))
            return true;

            return /\d/.test(String.fromCharCode(keynum));
            }
        </script>
        <script type="text/javascript"> function LostPass() {window.location ="RecuperarAcceso.php"; } </script>

<script type="text/javascript">
function Ayuda() {
alertify.alert('Ayuda', '<center>Para primer ingreso general: Contraseña es el código PIN de inscripción.<br/><br/>Para quienes olvidaron la contraseña y validaron el acceso a recuperación de la misma, la contraseña es la fecha de nacimiento en formato DDMMAAAA.<br><br/>Para aquellos que cursan un nuevo programa academico la contraseña continúa siendo la última con la que se ingresaba.<center />');
        }
</script>


<meta name="description" content="Portal estudiantil de la Universidad Falsa">


<style>.art-content .art-postcontent-0 .layout-item-0 { padding: 15px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
<div id="art-main">
<header class="art-header">

    <div class="art-shapes">
        <!-- <div class="art-object1542056463"></div> -->
            </div>
<h1 class="art-headline">
    <a href="/">PORTAL ESTUDIANTIL - Universidad Falsa</a>
</h1>
<h2 class="art-slogan">Infelix studiorum nam miseris populum</h2>
</header>

<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <h2 class="art-postheader">Acceso al portal</h2>

                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 100%" >

    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 100%" >

    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 33%" >
    </div><div class="art-layout-cell" style="width: 34%" >
    <?php

    require 'divsys/umcdssictrl.php';
    //$pe_login=$_GET['pe_login'];
    switch ($pe_login) {
        case '0':
        echo "<h6>Por directivas de la universidad, está inhabilitado el acceso a la plataforma.</h6>";
        break;

        #Habilitado para estudiantes
        case'1':
            echo '
        <div id="LoginPE">
        <form id="FormLogin" name="FormLogin" action="LoginPE.php" method="POST" onsubmit="return LogPE(this);">
            <p><b>Documento de identidad:</b></p>
            <p><input name="ID" id="ID" type="text" autocomplete="off"><br></p>

            <p><b>Contraseña:</b></p>
            <p><input name="PASS" id="PASS" type="password" autocomplete="off" onkeypress="capLock(event)"></p>
            <div id="caplock" style="visibility:hidden"><p style="color:red;"><b>Tienes activadas las mayúsculas</b></p></div>


            <p>&nbsp;
            <button type="submit" class="art-button" value="Ingresar" onclick="clearForm();">Ingresar</button></p>

            <p>
            <i> Primer ingreso: Contraseña es código PIN de inscripción.</i><br>
            <i> Ingreso por olvido de contraseña: <br>Contraseña es fecha de nacimiento DDMMAAAA.</i></p>
            <a onclick="LostPass();">¿Olvidaste tu contraseña?</a>
        <br>
        <a onclick="Ayuda();">¿Necesitas ayuda?</a>
            </form></div>
            ';
            break;
    }

?>
<div id="AccesoResultado"></div>
        <br>
    </div><div class="art-layout-cell" style="width: 33%" >
    </div>
    </div>
</div>
</div>
</article></div>
                    </div>
                </div>
            </div>
    </div>
<footer class="art-footer">
  <div class="art-footer-inner">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%">
        <p style="text-align: center;">
          <span style="font-family: 'Trebuchet MS';"><a href="../index.php">Universidad Falsa</a></span>
        </p>
        <p style="text-align: center;">
          <span style="font-family: 'Trebuchet MS';">División Superior de Sistemas Informáticos</span>
        </p>
        <p style="text-align: center;">
          <span style="font-family: 'Trebuchet MS';">Falsos derechos reservados</span>
        </p>
        <p style="text-align: center;">
          <span style="font-family: 'Trebuchet MS';">2019</span>
        </p>
    </div>
    </div>
</div>
  </div>
</footer>
</div>
</body></html>

<?php
session_start();
$ID=$_SESSION['ID'];
$IDUM=$_SESSION['PASS'];
if ($ID=='' OR $IDUM=='') {
    #Destruir
    session_unset();
    session_destroy();
    echo '<script type="text/javascript">alert("No hay datos de identificación especificados...¿Eres un intruso?");window.location ="index.php";
  </script>';
}
?><!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Universidad Falsa - División Superior de Sistemas Informáticos -->
    <meta charset="utf-8">
    <title>Portal estudiantil - Primer ingreso</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>
<script type="text/javascript">
    $('document').ready(function()
    {
    $('#PrimerIngreso').ajaxForm( {
    target: '#ResultadoNewPass',
    success: function() {
    $('#NewPass').slideUp('fast');
    }
    });
    });
</script>
<script type="text/javascript">
    function validarCampos(PrimerIngreso) {
        if(PrimerIngreso.PASS1.value.length<=7) {
            PrimerIngreso.PASS1.focus();
            alert('La contraseña es demasiado corta, debe ser de 8 dígitos en adelante!');
            return false;
        }
        if(PrimerIngreso.PASS2.value.length<=0) {
            PrimerIngreso.PASS2.focus();
            alert('Por favor indica nuevamente la contraseña!');
            return false;
        }
        if(PrimerIngreso.PASS3.value.length<=0) {
            PrimerIngreso.PASS3.focus();
            alert('Por favor escribe una pregunta de seguridad!');
            return false;
        }
        if(PrimerIngreso.PASS4.value.length<=0) {
            PrimerIngreso.PASS4.focus();
            alert('Por favor escribe la respuesta a pregunta de seguridad!');
            return false;
        }

        return true;
    }

    function IgualdadContrasenas(PrimerIngreso) {
        var PASS_1 = document.FormUpdatePass.PASS1.value;
        var PASS_2 = document.FormUpdatePass.PASS2.value;
        var Val_PASS_1 = PASS_1.length;
        var Val_PASS_2 = PASS_2.length;
        if (Val_PASS_1 != Val_PASS_2) {
            alert('Las contraseñas no coindicen...');
            return false;
        } else {
            for (n = 0; n < Val_PASS_1; n++) {
                if (PASS_1.charAt(n) != PASS_2.charAt(n)) {
                    alert('Las contraseñas no coindicen...');
                    return false;
                }
            }
        }
        return true;
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
        <div class="art-object1542056463"></div>

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
                                <h2 class="art-postheader">PRIMER INGRESO AL PORTAL - CREAR CONTRASEÑA </h2>

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
    <div class="art-layout-cell" style="width: 100%" >
    <?php

    require 'divsys/umcdssictrl.php';
    echo '
    <div id="NewPass">
    <p></p>
    <h6 style="color:blue;"> 1) Crear contraseña de acceso: </h6>
<p style="text-size: 10px;"> Los estudiantes que ingresan por primera vez al portal son obligados a crear una contraseña de acceso. </p>
<p> Indicaciones </p>
<i> 1- Debe ser de 8 dígitos en adelante </i><br>
<i> 2- Debe contener letras y números </i><br>


    <form id="PrimerIngreso" name="PrimerIngreso" method="POST" action="NewPass.php" onsubmit="return validarCampos(this); return IgualdadContrasenas(this);">
        <p> <b>Ingresa tu nueva contraseña:</b> </p>
        <input type="password" name="PASS1" autocomplete="off"/>

        <p> <b>Vuelve a ingresar tu nueva contraseña </b></p>
        <input type="password" name="PASS2" autocomplete="off"/>
        <br>
        <p></p>
        <h6 style="color:blue;"> 2) Recuperación de contraseña en caso de olvido <i style="font-size:9px";>(No falta el pendejo que la olvide)</i></h6>
        <p></p>
        <p> Indicanos una pregunta de seguridad de tu autoría: </p>
        <i> Se te mostrará esa pregunta cuando se de la ocasión en que olvides tu contraseña de acceso. </i><br>
        <input type="text" name="PASS3" autocomplete="off"/>
        <p> Indica la respuesta de tu pregunta <br><i>Será mostrada a la par que la escribes. </i> </p>
        <input type="text" name="PASS4" autocomplete="off"/>


<p><br></p>
        <input type="submit" class="art-button" value="Crear contraseña" />
        <p><br></p>
    </form>
</div>';

        ?>
        <div id="ResultadoNewPass"></div>
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
        <p style="text-align: center;"><span style="font-family: 'Trebuchet MS';">Universidad Falsa</span></p><p style="text-align: center;"><span style="font-family: 'Trebuchet MS';">División Superior de Sistemas Informáticos</span></p><p style="text-align: center;"><span style="font-family: 'Trebuchet MS';">Falsos derechos reservados</span></p><p style="text-align: center;"><span style="font-family: 'Trebuchet MS';">2019</span></p>
    </div>
    </div>
</div>

  </div>
</footer>

</div>


</body></html>

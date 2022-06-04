<?php
session_start();
session_unset();
session_destroy();
?><!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
<!-- Universidad Falsa - División Superior de Sistemas Informáticos -->
    <meta charset="utf-8">
    <title>Portal estudiantil - Ingresar</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="alertify.js"></script>
    <link rel="stylesheet" href="css/alertify.css" media="all">
    <link rel="stylesheet" href="css/themes/bootstrap.css" media="all">
    <!-- <script src="script.responsive.js"></script>-->

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>


    <!-- Script para submit está de tal manera que ejecutado el submit, no importa si accede o no, los campos 'ID' y 'Pass' se limpian-->
        <script type="text/javascript">
        $('document').ready(function()
        {
        $('#FormPaso1').ajaxForm( {
        target: '#resultado',
        success: function() {
        $('#formulario').slideUp('fast');
        }
        });
        });
        </script>


<script>
        function justNumbers(e)
            {
            var keynum = window.event ? window.event.keyCode : e.which;
            if ((keynum == 8) || (keynum == 46))
            return true;

            return /\d/.test(String.fromCharCode(keynum));
            }
        </script>
        <script type="text/javascript">
    function validarCampos(FormPaso1) {
        if(FormPaso1.ID.value.length<=0) {
            FormPaso1.ID.focus();
            //alert('Indica tu identificación!');
            alertify.alert('Recuperar acceso','Debes indicar tu identificación.');
            return false;
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
                                <h2 class="art-postheader">Recuperar acceso</h2>

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
        <p><br></p>
    </div>
    <div class="art-layout-cell" style="width: 34%" >

<fieldset>
<h3>Validar estudiante</h3>
    <div id="resultado"></div>
        <div id="formulario"><br>
            <form id="FormPaso1" name="FormPaso1" action="recovery/Paso2.php" method="POST" onsubmit="return validarCampos(this)">

                <p>Identificación:</p>
                <p><input type="text" name="ID" autocomplete="off" onkeypress="return justNumbers(event);"><br></p>

                <p><i>Si la identificación ingresada corresponde a un estudiante activo/inactivo de cualquier programa, el sistema le ayudará a recuperar el acceso, de lo contrario no hay proceso alguno.</i></p>

                <p>&nbsp;<input type="submit" value="Continuar" class="art-button"> &nbsp;<br></p>
            </form>
        </div>
</fieldset>




    </div><div class="art-layout-cell" style="width: 33%" >
        <p><br></p>
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
        <p style="text-align: center;"><span style="font-family: 'Trebuchet MS';"><a href="../index.php">Universidad Falsa</a></span></p><p style="text-align: center;"><span style="font-family: 'Trebuchet MS';">División Superior de Sistemas Informáticos</span></p><p style="text-align: center;"><span style="font-family: 'Trebuchet MS';">Falsos derechos reservados</span></p><p style="text-align: center;"><span style="font-family: 'Trebuchet MS';">2019</span></p>
    </div>
    </div>
</div>

  </div>
</footer>

</div>


</body></html>

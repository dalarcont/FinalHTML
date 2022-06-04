<?php
//*session_start();
	$ID=$_SESSION['ID'];
	$PASS=$_SESSION['PASS'];
	require 'divsys/umcdssictrl.php';

$getUserData="SELECT * FROM gendata WHERE ID='$ID'";
	$doGet=mysqli_query($link, $getUserData);
	$rowGet=mysqli_fetch_array($doGet);

#Datos del estudiante
	$NAME=$rowGet['NOM'];
	$_SESSION['NAME']=$NAME;
	$_SESSION['ID']=$ID;
	$EMAIL = $rowGet['EMAIL'];
	$_SESSION['PROGC'] = $rowGet['PROGC'];

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Universidad Falsa - División Superior de Sistemas Informáticos -->
    <meta charset="utf-8">
    <title>Portal estudiantil - <?php echo $NAME; ?></title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <!-- <link rel="stylesheet" href="style.responsive.css" media="all"> -->
<link rel="stylesheet" href="css/alertify.css" />
<link rel="stylesheet" href="css/themes/bootstrap.css" />
<script src="alertify.js"></script>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script>
	function Fx2(){
        //alertify.alert('Prueba de funciones','function Fx2');
        $.post('apps/fx_Calificar/File.php', {}, function(mensaje) {
            $('#ProcesarAccion').html(mensaje);
            });
    };
	function Fx733(){
        //alertify.alert('Prueba de funciones','function Fx733');
        $.post('apps/fx_PdeE/ListaPdeE.php', {}, function(mensaje) {
            $('#ProcesarAccion').html(mensaje);
            });
    };
	function Fx236(){
        //alertify.alert('Prueba de funciones','function Fx236');
        $.post('apps/fx_AjusteMatricula/ListaProgramaMatriculado.php', {}, function(mensaje) {
            $('#ProcesarAccion').html(mensaje);
            });
    };
	function Fx27(){
        //alertify.alert('Prueba de funciones','function Fx27');
        $.post('apps/fx_CancelarRetirar/File.php', {}, function(mensaje) {
            $('#ProcesarAccion').html(mensaje);
            });
    };
	function Fx23(){
        //alertify.alert('Prueba de funciones','function Fx23');
        $.post('apps/fx_Certificado/File.php', {}, function(mensaje) {
            $('#ProcesarAccion').html(mensaje);
            });
    };
	function Fx272(){
        //alertify.alert('Prueba de funciones','function Fx272');
        $.post('apps/fx_Pagos/File.php', {}, function(mensaje) {
            $('#ProcesarAccion').html(mensaje);
            });
    };
	function Fx67(){
        //alertify.alert('Prueba de funciones','function Fx67');
        $.post('apps/fx_NotasParciales/File.php', {}, function(mensaje) {
            $('#ProcesarAccion').html(mensaje);
            });
    };
	function Fx42(){
        //alertify.alert('Prueba de funciones','function Fx42');
        $.post('apps/fx_Historial/Historial.php', {}, function(mensaje) {
            $('#ProcesarAccion').html(mensaje);
            });
    };
	function Fx73(){
        //alertify.alert('Prueba de funciones','function Fx73');
        $.post('apps/fx_Perfil/File.php', {}, function(mensaje) {
            $('#ProcesarAccion').html(mensaje);
            });
    };
	function Fx22(){
        //alertify.alert('Prueba de funciones','function Fx22');
        $.post('apps/fx_CambioPassword/File.php', {}, function(mensaje) {
            $('#ProcesarAccion').html(mensaje);
            });
    };
	function Fx7(){
        //alertify.alert('Prueba de funciones','function Fx7');
        $.post('apps/fx_Reglamento/File.php', {}, function(mensaje) {
            $('#ProcesarAccion').html(mensaje);
            });
    };
	function Fx758(){
        //alertify.alert('Prueba de funciones','function Fx758');
        $.post('apps/fx_SolicitudesPortal/File.php', {}, function(mensaje) {
            $('#ProcesarAccion').html(mensaje);
            });
    };
</script>
<script type="text/javascript" src="jquery.form.js"></script>
<script type="text/javascript">
    function unShowAnswer(){
        document.getElementById('areaRE').style.display='none';
    }
</script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<meta name="description" content="Portal estudiantil Universidad Falsa">


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
<nav class="art-nav">
    <div class="art-nav-inner">
    <ul class="art-hmenu"><li><a href="Portal.php" class="active">Inicio</a></li><li><a href="index.php">SALIR</a></li></ul> <p align="right" style="color: yellow;"><b><?php echo $NAME; ?></b></p>
        </div>
    </nav>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <center><h3></h3></center>

                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 100%" >
        <p>Bienvenido(a) a tu portal estudiantil.</p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 25%" >
        <h4>
        <span style="color: #878787;">MENÚ</span></h4>
        <div id="Acciones">
        <?php
        #Botón de función para calificar a la UMC
        if ($pe_calificar_umc==1) {
			//echo '<p>&nbsp;<input type="submit" name="ORDEN" accesskey="a" class="art-button" value="Calificar">&nbsp;';
			echo "<button class='art-button' onclick='Fx2()'>Calificar servicio</button>";
        }?>
        <span style="color: rgb(135, 135, 135);"><br></span></p>

        <?php
        if ($pe_materias==1) {
            #<-- Ver plan de estudios -->
			echo "<p><button class='art-button' onclick='Fx733()'>Plan de estudios</button><br></p>";
        }
        ?>
        <?php
            if($PermisoCancelar==TRUE){
				echo "<p><button class='art-button' onclick='Fx236()'>Ajuste de matrícula</button><br></p>";
            }
        ?>

        <?php
        if ($pe_student_kill==1) {
            #<-- Retiro estudiantil -->
			echo "<button class='art-button' onclick='Fx27()'>Cancelación/Retiro</button>";
        }?>

		<p><button class='art-button' onclick='Fx23()'>Certificado estudios</button><br></p>

		<p><button class='art-button' onclick='Fx272()'>Consultar pagos</button><br></p>

		<p><button class='art-button' onclick='Fx67()'>Notas parciales</button><br></p>

		<p><button class='art-button' onclick='Fx42()'>Historial académico</button><br></p>

		<p><button class='art-button' onclick='Fx73()'>Perfil estudiante</button><br></p>

		<p><button class='art-button' onclick='Fx22()'>Cambio contraseña</button><br></p>

		<p><button class='art-button' onclick='Fx7()'>Reglamento estudiantil</button><br></p>

		<p><button class='art-button' onclick='Fx758()'>Solicitudes</button><br></p>

        </div>
        <p>&nbsp;<a href="index.php" accesskey="m" class="art-button">SALIR del portal</a>&nbsp;<br></p>
    </div>

    <div class="art-layout-cell layout-item-0" style="width: 75%" ><i style="font-size:11px;">
    </i>
        <p>Selecciona una opción del menú académico.&nbsp;</p>

        <div id="ProcesarAccion"></div>

    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 100%" >
        <i><p>Algunos contenidos no son autoajustables a las pantallas de dispositivos móviles, si tienes algún inconveniente solicita a tu navegador móvil la versión de escritorio.
			  <br>Algunas funciones no son compatibles con Internet Explorer/Navegador Microsoft.</p>
			  <p>Recomendamos utilices otro navegador.</p></i>
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

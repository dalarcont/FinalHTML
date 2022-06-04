<?php

/* Universidad Falsa - División Superior de Sistemas Informáticos */
session_start();
$ID=$_SESSION['ID'];
$PROGC=$_SESSION['PROGC'];
#Switch de definición de programa

require '../../divsys/umcdssictrl.php';

echo "
<link rel='stylesheet' href='../../css/alertify.css' />
<link rel='stylesheet' href='../../css/themes/bootstrap.css' />
<script src='../../alertify.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script>

function callEstProg() {
    var EstProg = $('#ProgramasEstudiante').val();

    if (EstProg != '') {
        $.post('apps/fx_Certificado/ProcesarCertificado.php', {EstProg: EstProg}, function(mensaje) {
            $('#ResSelectPdeE').html(mensaje);
            });
            } else {
            $('#ResSelectPdeE').html('<p>Selecciona de la lista, el programa académico del que deseas generar certificado.</p>');
        };
    };


</script>
<script type='text/javascript' src='../../jquery.form.js'></script>
";


echo "<h6> CERTIFICADO DE ESTUDIOS </h6><br>";
echo "
<div id='PlanEstudios'>
";
    $PrevProgC=$PROGC;
    $LISTAR="SELECT * FROM gendata WHERE ID='$ID'";
    $OPERAR=mysqli_query($link, $LISTAR);
    $row=mysqli_fetch_array($OPERAR);
    if (!empty($row['PROGC'])){
	        //listado
	        echo '<select style="height:25px;" name="ProgramasEstudiante" id="ProgramasEstudiante" onchange="callEstProg();">';
	    	echo '<option value="null">Seleccionar programa académico</option>';

			$array_Progc=json_decode($row['PROGC']);
			$array_Progc_Status=json_decode($row['PROGCSTATE']);
			for($i=0; $i<=(count($array_Progc)-1); $i++){
				$PROGC=$array_Progc[$i];
				require '../../divsys/DatosProgramas.php';
					echo "<option value='",$PROGC,"'>",$TipoGradoPrograma," --- ",$CodigoNIE," --- ",$NombrePrograma,"</option>";

			}
            /*Option to show all the programs in 1 certification*/
                    echo "<option value='ALL'>Imprimir un solo certificado de todos mis programas</option>";
	        echo "</select><br><br>\n";
            echo "<div id='ResSelectPdeE' style='display:block;'>
            </div>
            ";
    }
    else
    {
    	echo '<br><big><i><b> No tienes programas académicos matriculados o cursados.</b></i></big><br>';
      	echo '<br> --- --- --- --- --- <br>';

    }
echo"</div>";
//Regresar la variable PROGC a su estado original
$PROGC=$_SESSION['PROGC'];
?>

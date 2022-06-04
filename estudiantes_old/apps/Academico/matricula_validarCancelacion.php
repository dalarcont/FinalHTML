<?php
session_start();
//Cargar variables de sesión
$ID=$_SESSION['ID'];
$PROGC=$_SESSION['PROGC'];
//Cargar variables de datos de conexión
require '../../divsys/umcdssictrl.php';

//Procesos
echo "<script>
function matricula_ejecutarCancelacion (){
		var MatCodeN = $('#MATCODE').val();
		if(MatCodeN != '' || MatCodeN == null){
			$.post('matricula_EjecutarCancelacion.php', {MatCodeN: MatCodeN}, function(sucess){
			$('#ResultadoAjuste').html(sucess);
			});
		}else{
			$('#ResultadoAjuste').html('');
		};
	}
</script>";


//Leer el código de la asignatura
$MATCODE= $_POST['MatCodeN'];
$Matcode=$MATCODE;
function isElectiva($Matcode){
	switch ($Matcode) {
		#Electivas de Ingeniería Sexual
		case '2346': case '2347': case '2348': case '2349': case '2350': case '2351':
		case '2352': case '2353': case '2354': case '2355': case '2356':
		#Electivas de Ingeniería Presidencial
		case '2944': case '2945': case '2946': case '2947': case '2948':
		case '2949': case '2950': case '2951': case '2952':
		return TRUE;
		break;

		default:
			#No es una electiva
		return FALSE;
		break;
	}
}

require '../../divsys/DatosProgramas.php';
require '../../divsys/Materias.php';
require '../../divsys/MateriasPerCredits.php';
require '../../divsys/Requerimientos/'.$PROGC.'.php';


#Cargar número de créditos acumulados
    $con=$link;
  	$consulta="SELECT SUM(CR) as TotalCR FROM platformdata WHERE ID='$ID' AND PARAM='A'";
	$resultado=$con -> query($consulta);
	$fila=$resultado->fetch_assoc();
	$TotalCR=$fila['TotalCR']; //Este es el valor que acabas de calcular en la consulta
	$DataCreditos=$TotalCR;
	//Sumatoria de la cantidad de créditos matriculados + los que piensa adicionar el estudiante
	$CantCR=$DataCreditos-$Creditos;


//Llamar archivo que entrega parámetros de permisibilidad de adiciones a la matrícula
			require 'CheckToCancelar.php';
			if($Permiso==true){
				//Existe permiso, verificar contabilidad de créditos
				if($CantCR<$CreditosMatriculaMinimo){
					$AuxPermisivoCR="La cancelación provocaría el incumplir el mínimo exigido.";
					//La asignatura que se planea matricular provoca que se irrespete el límite de créditos: DENEGAR PROCESO
					echo "<script>
					alertify.alert('Operación de ajuste de matrícula','No puedes realizar más cancelaciones a tu matrícula<br /><b>Créditos seleccionados a cancelar:</b> ",$Creditos,"<br /><b>Créditos matriculados:</b> ",$DataCreditos,"<br /><b>Mínimo de créditos a dejar en matrícula:</b> ",$CreditosMatriculaMinimo,"<br />",$AuxPermisivoCR," ', function(){ alertify.error('Cancelación de asignatura: <br>Registro y Control detiene el proceso.'); });
					</script>";						
				}else{
					//No se supera el límite de créditos
					echo '<script>
				var asignatura = $("#ModInfoAsignaturaNombre").val();
				alertify.confirm("Operación de ajuste de matrícula: Cancelación de asignatura","¿Confirmas la cancelación de la asignatura <br /><b>"+asignatura+"</b> ?", function(){ matricula_ejecutarCancelacion() }, function(){ alertify.error("Cancelación de asignatura:<br />Estudiante detiene el proceso.")})</script>';
				}
				
			}
			else
			{
				//Sistema no otorgó permiso para matrícula
				echo "<script>
				alertify.alert('Operación de ajuste de matrícula', 'Asignatura <b>", $CodigoLiteral, " - ", $MateriaNombre, "</b><br /> ",$PermisoMensaje,"<br />', function(){ alertify.error('",$PermisoMensajeNotruf,"'); });
				</script>";
			}


/*





















































































//Sentencia y ejecución de datos de la asignatura
	$getAsignaturaDatos="SELECT * FROM platformdata WHERE ID = '$ID' AND MAT ='$MATCODE' AND PROGC='$PROGC'";
	$doGet=mysqli_query($link, $getAsignaturaDatos);
	$AsignaturaDatos=mysqli_fetch_array($doGet);

if(!empty($AsignaturaDatos)){
	//echo "<script>alert('OBTUVE DATOS');</script>";
	if($AsignaturaDatos['PARAM']=="NM"){echo "<script>alert('SE PUEDE MATRICULAR'); cancelar();</script>";}else{echo "<script>alert('NO SE PUEDE MATRICULAR');
	cancelar();</script>";}
}
*/

//echo "<script>alertify.alert('Operación de ajuste de matrícula','NO SE PUEDE ADICIONAR LA ASIGNATURA DADO QUE EL MÍNIMO DE CRÉDITOS A DJAR EN MATRÍCULA NO RESPETAN LO ACORDADO EN EL REGLAMENTO ESTUDIANTIL, CANCELACION DE PRUEBA ",$Code,"', function (){ alertify.error('Adición de asignatura: <br>ABORTADA POR REGISTRO Y CONTROL.')});</script>";



?>

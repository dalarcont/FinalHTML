<?php
session_start();
//Cargar variables de sesión
$ID=$_SESSION['ID'];
$PROGC=$_SESSION['PROGC'];
//Cargar variables de datos de conexión
require '../../divsys/umcdssictrl.php';

//Procesos
echo "<script>
function matricula_ejecutar(){
		var MatCodeN = $('#MATCODE').val();
		if(MatCodeN != '' || MatCodeN == null){
			$.post('matricula_Ejecutar.php', {MatCodeN: MatCodeN}, function(sucess){
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
	$CantCR=$DataCreditos+$Creditos;


//Llamar archivo que entrega parámetros de permisibilidad de adiciones a la matrícula
			require 'CheckToMatricular.php';
			if($Permiso==true){
				//Existe permiso, verificar contabilidad de créditos
				if($CantCR>$CreditosMatriculaMaximo){
					$AuxPermisivoCR="Se supera el límite de créditos académicos a matricular.";
					//La asignatura que se planea matricular provoca que se irrespete el límite de créditos: DENEGAR PROCESO
					echo "<script>
					alertify.alert('Operación de ajuste de matrícula','No puedes realizar más adiciones a tu matrícula<br /><b>Créditos seleccionados:</b> ",$Creditos,"<br /><b>Créditos matriculados hasta ahora:</b> ",$DataCreditos,"<br /><b>Límite de créditos a matricular:</b> ",$CreditosMatriculaMaximo,"<br />",$AuxPermisivoCR," ', function(){ alertify.error('Adición de asignatura:<br />Registro y Control detiene el proceso.'); });
					</script>";						
				}else{
					//No se supera el límite de créditos
					echo '<script>
				var asignatura = $("#ModInfoAsignaturaNombre").val();
				alertify.confirm("Operación de ajuste de matrícula: Adición de asignatura","¿Confirmas la adición de la asignatura <br /><b>"+asignatura+"</b> ?", function(){ matricula_ejecutar() }, function(){ alertify.error("Adición de asignatura: <br />Estudiante detiene el proceso.")})</script>';
				}
				
			}
			else
			{
				//Sistema no otorgó permiso para matrícula
				echo "<script>
				alertify.alert('Operación de ajuste de matrícula', 'Asignatura <b>", $CodigoLiteral, " - ", $MateriaNombre, "</b><br /> ",$PermisoMensaje,"<br />', function(){ alertify.error('",$PermisoMensajeNotruf,"'); });
				</script>";
			}



?>

<?php
session_start();
$ID=$_SESSION['ID'];
require'../../divsys/umcdssictrl.php';
/*Archivo para indicar a ProcesoAcademico qué plan de estudios debe mostrar */
//echo "<script>alert('Prueba Se recibió orden de prueba por this.submit en el programa ",$_POST['EstProg'],"');</script>";

//Crear variable de sesión cuyo valor es el programa que el estudiante desea ver.
$_SESSION['Programa_PdeE']=$_POST['EstProg'];
//Abrir la ventana de Proceso académico <---------------------- REVOCADO por nuevo script (22 junio 2018)
//echo "<script>window.open('apps/Academico/ProcesoAcademico.php'); </script>";
//echo "<script>alert('HOLA');</script>";

function MostrarFlotante($Numero){
		$Mostrar = sprintf('%0.1f', $Numero);
		return $Mostrar;
	}
function EstadoPeriodo($Promedio){
		if(empty($Promedio)){
			$r="No aplica, primer periodo a cursar.";
			return $r;
		}
		else
		{
			if($Promedio>=4.5){
			$r="Superior, destacado";
			return $r;
			}
			else{
				if($Promedio>=3.5){
					$r="Normal";
					return $r;
				}
				else{
					if($Promedio>=3.0){
						$r="Regular";
						return $r;
					}
					else{
						if($Promedio>=2.5){
							$r="Bajo";
							return $r;
						}
						else{
							if($Promedio>=1.5){
								$r="Deficiente, control por Consejo de Facultad";
								return $r;
							}else{
								//Promedio de estudiante fue el peor, por lo tanto se expulsa
								$r="Expulsado del programa";
								return $r;
							}
						}
					}
				}
			}
		}
	}

echo "
<script>
function MostrarProcesoAcademico(){
    window.open('apps/Academico/CertificadoEstudios.php');
		document.getElementById('ProcesarAccion').innerHTML = '';
}
function chkPincode() {
    var PIN = $('#PinCode').val();

    if (PIN != '') {
        $.post('apps/fx_Certificado/validacionPin.php', {PIN: PIN}, function(mensaje) {
            $('#afterValidacion').html(mensaje);
            });
            } else {
            $('#afterValidacion').html('<p>Selecciona de la lista, el programa académico del que deseas generar certificado.</p>');
        };
    };

</script>
";

$dataProg=$_POST['EstProg'];
$ListarPeriodosAcademicos="SELECT * FROM akahistory WHERE ID='$ID' AND PROGC='$dataProg' ORDER BY HISTNUM DESC";
$EjecutarListados=mysqli_query($link, $ListarPeriodosAcademicos);
$Pack_Periodo=mysqli_fetch_array($EjecutarListados);
if(empty($Pack_Periodo)){
		$UltimoPeriodo="No aplica. Primer periodo del programa en curso.";
		$Periodo=$SMActual;
		$PromedioPeriodo=$UltimoPeriodo;
		$EstadoPeriodo=$UltimoPeriodo;
	}
	else{
		$UltimoPeriodo=$Pack_Periodo['PLAN'];
		$Periodo_a=$Pack_Periodo['SM'];
		$Periodo_b=$Pack_Periodo['SMP'];
		$Periodo="$Periodo_a-$Periodo_b";
		$PromedioPeriodo=MostrarFlotante($Pack_Periodo['PROM']);
		$EstadoPeriodo=EstadoPeriodo($PromedioPeriodo);
	}

if($_POST['EstProg']=='null' || $_POST['EstProg']==''){
	echo "<script>document.getElementById('InformacionProgramaSeleccionado').style.display='none';</script>";
}
else
{
	$PROGC=$_POST['EstProg'];
	if($PROGC=="ALL"){
		//El estudiante solicitó un certificado estudiantil de todos los programas
		echo "<div id='InformacionProgramaSeleccionado'>
		<p>Estudiante:<br>
		Para el certificado de estudios que menciona todos los programas asociados a tu hoja académica general, solo se tendrán en cuenta ÚNICAMENTE los últimos periodos de cada programas.
		<br>Para un informe de cada periodo por cada programa deberás generar certificado de estudios individual.</p>
	<p id='Msg_pin'>Ingresa el código PIN para certificado de estudios</p>
		<input type='text' id='PinCode'>
		<button class='art-button' id='letChk' onclick='chkPincode()'>Validar</button>

	            <div id='afterValidacion' style='display:block;'>
		</div>";
	}
	else {
			require '../../divsys/DatosProgramas.php';
			if($CreditosParaElectiva==0){$CreditosParaElectiva="N/A";}
			if($CreditosParaOptativa==0){$CreditosParaOptativa="N/A";}
			echo "<div id='InformacionProgramaSeleccionado'>
			<p><b>Facultad:</b> ",$Facultad,"</p>
			<p><b>Periodo:</b> ",$SMActual,"</p>
			<p><b>Créditos requeridos para optativa:</b> ",$CreditosParaOptativa,"</p>
			<p><b>Créditos requeridos para electiva:</b> ",$CreditosParaElectiva,"</p>
			<p><b>Último periodo cursado: </b>",$Periodo,"---",$UltimoPeriodo,"</p>
			<p><b>Promedio último periodo cursado: </b>",$PromedioPeriodo,"</p>
			<p><b>Estado académico del estudiante en el programa:</b> ",$EstadoPeriodo,"</p>

			<p id='Msg_pin'>Ingresa el código PIN para certificado de estudios</p>
			<input type='text' id='PinCode'>
			<button class='art-button' id='letChk' onclick='chkPincode()'>Validar</button>

								<div id='afterValidacion' style='display:block;'>
			</div>";
	}

}

$Est_Name="ANONIMO";
$Est_Id="108833716";
$_SESSION['ProgcToCert']=$_POST['EstProg'];

/*Se hace de esta manera para que cuando el estudiante en un eventual recargo de la página, el sistema no esté preguntando si desea "reenviar los datos del formulario" */
?>

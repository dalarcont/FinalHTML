<?php
session_start();
$ID=$_SESSION['ID'];
require'../../divsys/umcdssictrl.php';
/*Archivo para indicar a ProcesoAcademico qué plan de estudios debe mostrar */

//Crear variable de sesión cuyo valor es el programa que el estudiante desea ver.
$_SESSION['Programa_PdeE']=$_POST['EstProg'];
if($_POST['EstProg']=="umc0"){
	echo  "
		<style type='text/css'>
		.tg  {width:100%;border: inset 0pt;}
		.tg td{font-family:Arial, sans-serif;font-size:12px;padding:10px 5px;overflow:hidden;word-break:normal;width:auto;border: inset 0pt;}
		.tg th{font-family:Arial, sans-serif;font-size:12px;font-weight:normal;padding:10px 5px;overflow:hidden;word-break:normal;width:auto;border: inset 0pt;}
		.tg .tg-83d4{font-style:italic;text-align:right;vertical-align:top;width:auto;border: inset 0pt;}
		.tg .tg-wreh{font-weight:bold;vertical-align:top;width:auto;text-align:right;border: inset 0pt;}
		.tg .tg-us36{vertical-align:top;width:auto;border: inset 0pt;text-align:center;}
		.tg .tg-acum{vertical-align:top;width:auto;border: inset 0pt;text-align:center;}
		</style>";
echo "<div id='InformacionProgramaSeleccionado'><center>
		<table class='tg'>
		<tr>
			<td><b>Facultad:</b></td>
			<td class='tg-wreh'>Facultad Mísera</td>
		</tr>
		<tr>
			<td><b>Periodo académico actual:</b></td>
			<td class='tg-wreh'>Aplica siempre</td>
		</tr>
		<tr>
			<td><b>Créditos requeridos para matrícula optativa</b></td>
			<td class='tg-wreh'>No aplica</td>
		</tr>
		<tr>
			<td><b>Créditos requeridos para asignatura electiva</b></td>
			<td class='tg-wreh'>No hay electivas</td>
		</tr>
		<tr>
			<td><b>Último periodo cursado:</b></td>
			<td class='tg-wreh'>No aplica</td>
		</tr>
		<tr>
			<td><b>Promedio del último periodo cursado:</b></td>
			<td class='tg-wreh'>No aplica</td>
		</tr>
		<tr>
			<td><b>Estado académico del estudiante en el programa:</b></td>
			<td class='tg-wreh'>No aplica</td>
		</tr>
		</table>
		";
echo "
		<button class='art-button' onclick='AjustarMatricula()'>Ajustar matrícula</button>
		</center>
		</div>";
}
else{

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
		echo  "
		<style type='text/css'>
		.tg  {width:100%;border: inset 0pt;}
		.tg td{font-family:Arial, sans-serif;font-size:12px;padding:10px 5px;overflow:hidden;word-break:normal;width:auto;border: inset 0pt;}
		.tg th{font-family:Arial, sans-serif;font-size:12px;font-weight:normal;padding:10px 5px;overflow:hidden;word-break:normal;width:auto;border: inset 0pt;}
		.tg .tg-83d4{font-style:italic;text-align:right;vertical-align:top;width:auto;border: inset 0pt;}
		.tg .tg-wreh{font-weight:bold;vertical-align:top;width:auto;text-align:right;border: inset 0pt;}
		.tg .tg-us36{vertical-align:top;width:auto;border: inset 0pt;text-align:center;}
		.tg .tg-acum{vertical-align:top;width:auto;border: inset 0pt;text-align:center;}
		</style>";
		$PROGC=$_POST['EstProg'];
		require '../../divsys/DatosProgramas.php';
		switch($FAC){
			case "FACCON":
			case "FACSUP":
				$PeriodoActualInfo=$InfoPostgrado;
			break;

			default:
				$PeriodoActualInfo=$InfoPregrado;
			break;
		}
		if($CreditosParaElectiva==0){$CreditosParaElectiva="N/A";}
		if($CreditosParaOptativa==0){$CreditosParaOptativa="N/A";}
		echo "<div id='InformacionProgramaSeleccionado'><center>
		<table class='tg'>
		<tr>
			<td><b>Facultad:</b></td>
			<td class='tg-wreh'>",$Facultad,"</td>
		</tr>
		<tr>
			<td><b>Periodo académico actual:</b></td>
			<td class='tg-wreh'>",$PeriodoActualInfo,"</td>
		</tr>
		<tr>
			<td><b>Créditos requeridos para matrícula optativa</b></td>
			<td class='tg-wreh'>",$CreditosParaOptativa,"</td>
		</tr>
		<tr>
			<td><b>Créditos requeridos para asignatura electiva</b></td>
			<td class='tg-wreh'>",$CreditosParaElectiva,"</td>
		</tr>
		<tr>
			<td><b>Último periodo cursado:</b></td>
			<td class='tg-wreh'>",$Periodo,"---",$UltimoPeriodo,"</td>
		</tr>
		<tr>
			<td><b>Promedio del último periodo cursado:</b></td>
			<td class='tg-wreh'>",$PromedioPeriodo,"</td>
		</tr>
		<tr>
			<td><b>Estado académico del estudiante en el programa:</b></td>
			<td class='tg-wreh'>",$EstadoPeriodo,"</td>
		</tr>
		</table>
		";
		/*
		<p><span style='float:left;'><b>Facultad:</b></span> <span style='float:right;'>",$Facultad,"</span></p>
		<p><span style='float:left;'><b>Periodo:</b></span><span style='float:right;'> ",$SMActual,"</span></p>
		<p><span style='float:left;'><b>Créditos requeridos para optativa:</b></span> <span style='float:right;'>",$CreditosParaOptativa,"</span></p>
		<p><span style='float:left;'><b>Créditos requeridos para electiva:</b></span> <span style='float:right;'>",$CreditosParaElectiva,"</span></p>
		<p><span style='float:left;'><b>Último periodo cursado: </b></span><span style='float:right;'>",$Periodo,"---",$UltimoPeriodo,"</span></p>
		<p><span style='float:left;'><b>Promedio último periodo cursado: </b></span><span style='float:right;'>",$PromedioPeriodo,"</span></p>
		<p><span style='float:left;'><b>Estado académico del estudiante en el programa:</b> </span><span style='float:right;'>",$EstadoPeriodo,"</span></p>*/
		echo "
		<button class='art-button' onclick='AjustarMatricula()'>Ajustar matrícula</button>
		</center>
		</div>";
	}
}
/*Se hace de esta manera para que cuando el estudiante en un eventual recargo de la página, el sistema no esté preguntando si desea "reenviar los datos del formulario" */
?>

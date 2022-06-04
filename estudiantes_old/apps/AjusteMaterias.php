<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
#AjustesMaterias

session_start();
$PROGC=$_SESSION['PROGC'];
$ID=$_SESSION['ID'];
require 'divsys/umcdssictrl.php';
require 'divsys/DatosProgramas.php';
$getFromAkadata="SELECT * FROM akadata WHERE ID='$ID'";
$doget=mysqli_query($link, $getFromAkadata);
$rowAkadata=mysqli_fetch_array($doget);
$CodigoEstudiante=$ID;
/*
--- Nombre del plan de estudios - # Módulos - Total de asignaturas ---
*/



//Módulo de ajuste de asignatura optativa del programa
	if ($rowAkadata['OPTA']=='') {
		/* Leer si tiene el puntaje completo para el proceso de matrículado de optativa */
		/*$CreditosToOptativas="SELECT SUM(CR) as TotalPuntaje FROM platformdata WHERE ID='$CodigoEstudiante' AND PARAM IN('OK')";
		$ResultadoPuntajes = mysqli_query($link, $CreditosToOptativas);
		$rowToOptativa = mysqli_fetch_array($ResultadoPuntajes, MYSQL_ASSOC);
		$DataPunt=$rowToOptativa["TotalPuntaje"]; */
		$con=$link;
          	$consulta="SELECT SUM(CR) as TotalCR FROM platformdata WHERE ID='$CodigoEstudiante' AND PARAM='OK'";
			$resultado=$con -> query($consulta);
			$fila=$resultado->fetch_assoc();
			$TotalCR=$fila['TotalCR']; //Este es el valor que acabas de calcular en la consulta
			$DataCreditos=$TotalCR;

		if ($DataCreditos>=$CreditosParaOptativa) {

		$_SESSION['LetOptativa']='S';
		$PlanOptativas="<option value='Optativa'>--- $Facultad : $NombrePrograma - Plan de optativas periodo $SMActual ---</option>";
		//Cargar control para que en el listado se seleccione un plan y el sistema se comporte con su eleccion
		echo "<script>

        function CargarPlan(){

	        var Prog = document.getElementById('AjusteMatricula').value;
	        var GoTo = document.getElementById('Matricula');
	        if(Prog=='Optativa'){
	        	GoTo.href='apps/Academico/AsignaturaOptativa.php';
	        }
	        else
	        {
	        	if(Prog=='Programa'){GoTo.href='apps/Academico/ProcesoMatricula.php';
	        	}
	        }
		}
  		</script>";

		}
		else
		{$_SESSION['LetOptativa']='N';}
	}
	else
	{$_SESSION['LetOptativa']='N';}

echo "<h6> AJUSTES DE MATRÍCULA PREVIA</h6>";

//Módulo de ajuste de asignaturas del programa
	if ($pe_mat_kill==1) {
		#Se permite ajustar matrícula
		$_SESSION['LetMatriculaNormal']='S';
		require 'divsys/DatosProgramas.php';
		//CargarPlan() está declarado en cabecera de portal_content.php
		echo '
			<br><h6> Realizar ajustes a la matrícula </h6><br><select id="AjusteMatricula" onchange="CargarPlan()">';
		//Programa del estudiane
		echo '<option value="0" selected>--- Selecciona programa o plan --- </option>
				<option value="Programa">--- ', $NombrePlanEstudios, ' Módulos --- </option>';
		//Plan de optativas
		echo $PlanOptativas;

		echo '</select>
			<p></p>
			<a id="Matricula" href="apps/Academico/ProcesoMatricula.php" class="art-button" target="_blank">Ajustar matrícula</a>
			<div id="Retorno"></div>
		';

	}
	else
	{
		$_SESSION['LetMatriculaNormal']='N';
	}


//Módulo de ajuste de asignatura electiva del programa
//Desactivado dada la implementación del programa de matrícula universal. Desde el mismo aplicativo de matricula de las asignaturas del programa, se podrá realizar la matrícula electiva
/*	///Si la variable $CreditosParaElectiva = 0 significa que el programa no contiene ni dispone de electivas
	///Entonces se hará una comparación tal que
	///Si estudiante no tiene electiva y los créditos para electiva son mayor a 0 significa que puede tener electivas
	if ($CreditosParaElectiva==0)
	{
		#No se permite electiva
		#La siguiente variable es permisiva, dará a entender al sistema de matrícula electiva que NO se puede matricular electiva
		##Previniendo el caso de que el estudiante/usuario experimentado abra la ventana de matrícula electiva
		###y realice matrícula electiva habiéndola hecho ya o sin hacerla.
		$_SESSION['LetElectiva']='N';
	}
	else
	{
		if ($rowAkadata['ELECT']=='') {

			$CreditosToOptativas="SELECT SUM(CR) as TotalPuntaje FROM platformdata WHERE ID='$CodigoEstudiante' AND PARAM IN('OK')";
			$ResultadoPuntajes = mysqli_query($link, $CreditosToOptativas);
			$rowToOptativa = mysqli_fetch_array($ResultadoPuntajes, MYSQL_ASSOC);
			$DataPunt=$rowToOptativa["TotalPuntaje"];
			//La cantidad de créditos aprobados acumulados ya está definida en $DataPunt
			if ($DataPunt>=$CreditosParaElectiva) {
				//Variable permisiva
				$_SESSION['LetElectiva']='S';
				echo
				'
				<br>
				<h6> Ver sistema de matrícula electiva</h6>
				<select name="AJUSTESmatrículaE">
				<option value="$student/prog/dataAjustes">--- ', $Facultad, ' ', $NombrePlanEstudios, ' - Plan de Electivas --- </option>
				</select>
				<p></p>
				<a href="apps/Academico/AjusteMatriculaE.php" class="art-button" target="_blank">Ajustar matrícula electiva</a>
				<p></p>';

			}
			else
			{
				//Variable permisiva
			 	$_SESSION['LetElectiva']='N';
				echo "<br><h6>Ajuste matrícula electiva</h6><p>Estudiante: No puedes matrícular electiva hasta que acumules ", $CreditosParaElectiva, " y/o más créditos.</p>";
			}
		}
		else
		{
			//Variable permisiva
			$_SESSION['LetElectiva']='N';
		echo "<br><h6>Ajuste matrícula optativa</h6><p>Estudiante: Ya tienes asignatura electiva matriculada.</p>";

		}
	}
*/

?>

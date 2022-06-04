<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
/*Archivo donde se llaman las condiciones y requerimientos respectivos para el registro de asistencia a las asignaturas */
session_start();
$PROGC=$_SESSION['PROGC'];
$ID=$_SESSION['ID'];
require '../divsys/umcdssictrl.php';

$MATCODE=$_POST['MATCODE'];
require '../divsys/MateriasPerCredits.php';
require '../divsys/Materias.php';

/*************************************************************************/
/* AVISO: POR MODIFICACIÓN DEL SISTEMA EL APLICATIVO DE REGISTRO DE ASISTENCIAS
  AHORA SE DENOMINA COMO SISTEMA DE REGISTRO DE NOTAS PARCIALES
  PERO EL SISTEMA LE SEGUIRÁ LLAMANDO 'ASISTENCIAS' 
  * Se remueve el llamado de requerimientos y procedimientos previos al registro
  	Ya que el sistema nuevo, se encarga de mostrar al estudiante asignaturas que estén matriculadas
  	Por lo tanto una asignatura con requisitos no puede ser mostrada dado que no está matriculada 
  		por no cumplir sus requerimientos */
/**************************************************************************/

function GenerarNotaParcial($IntMin,$IntMax,$DecMin,$DecMax,$FPos){
	//Int Min & Max define el rango de números para el entero
	$Int=rand($IntMin,$IntMax);
	//Dec Min & Max define el rango de números para el decimal
	$Dec=rand($DecMin,$DecMax);
	//FPos define el número de decimales a mostrar
	//10 = 1 decimal / 100 = 2 decimales y así sucesivamente
	//Debe iniciar en 1 para la multiplicación por 10 en caso de FPos>=1
	$DecRange=1;
	if($FPos==0){$DecRange=10;}else{for($a=1; $a<=$FPos; $a++){$DecRange=$DecRange*10;}}
	//Integrar operaciones
	$DecPart=$Dec/$DecRange;
	$NotaParcial=$Int+$DecPart;
	//Como se configura normalmente a que el minimo sea 2,1 hasta 4,9
	//Se puede llegar el caso de que un estudiante obtenga varias veces una nota inferior a 3,0 
	//Por lo tanto el sistema permitirá el registro de notas desde 2,9 hasta 4,9
	//Si detecta una nota inferior a 2,9 la incrementará hasta que esté >2,9
	while($NotaParcial<2.9){
		$NotaParcial+=0.1;
	}
	//echo "<script>alert('",$NotaParcial,"');</script>";
	return $NotaParcial;
}
function MostrarFlotante($Numero){
	$Mostrar = sprintf('%0.1f', $Numero);
	return $Mostrar;
}
function isElectivaBase($Matcode){
	$imgWarning="<img src='apps/AD.png' height='42' width='42'><br>";
	$Message="Has acumulado los créditos necesarios para activar esta asignatura electiva base... <br>";
	$Message2="Deberás matricular la asignatura electiva de tu preferencia mediante el aplicativo de proceso de matrícula.";
	switch ($Matcode) {
		case '2345':
			exit($imgWarning.$Message.$Message2);
			break;
		
		default:
			# code...
			break;
	}
}

if($MATCODE=='null' || $MATCODE==''){
	exit("<img src='apps/NO.png' height='42' width='42'><br> No has seleccionado asignatura...");
}


isElectivaBase($MATCODE);
//Definir si es electiva

$FindAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE'";
$doFA=mysqli_query($link, $FindAsignatura);
//Comprobar que se realizó el query solicitado
if (!$doFA){die("<img src='apps/NO.png' height='42' width='42'><br>	La asignatura -<b>$CodigoLiteral - $MateriaNombre</b>- no existe en tu plan de estudios. <br> Si presentas problemas persistentes, cierra el portal e ingresa nuevamente, y vuelve a intentarlo.");}
	//Continuar, se encontró la asignatura y está matriculada
	$Asignatura=mysqli_fetch_array($doFA);

	if($Asignatura['PARAM']=='OK'){
		//Ya tiene estado de aprobación, no permitir más datos
		$Definitiva=$Asignatura['DEF'];
		$DefinitivaMostrar=MostrarFlotante($Definitiva);
		echo "<img src='apps/OK.png' height='42' width='42'><br>La asignatura -<b>$CodigoLiteral - $MateriaNombre</b>- ya la aprobaste con nota definitiva <b>$DefinitivaMostrar</b><br> No se pueden registrar más notas parciales para asignaturas aprobadas<br> Eres muy inteligente, felicidades... ";
	}
	else
	{
		//Aun no está aprobada, revisar si ha superado el limite de registros 
		if($Asignatura['ASIST']>=$Semanas){
			//Lo ha superado, aprobar asignatura
			
			$Definitiva=$Asignatura['PUNT']/$Semanas;
			$DefinitivaMostrar=MostrarFlotante($Definitiva);
			/* Cambiar la sentencia en caso de que la asignatura a aprobar esté siendo cursada por permiso sin requisitos*/
			if($Asignatura['PARAM3']=='LETMAT'){
				$Aprobar="UPDATE platformdata SET ASIST=ASIST+1, PARAM='OK2', DEF='$Definitiva', PARAM2='NORMAL' WHERE MAT='$MATCODE' AND ID='$ID'";
			}
			else
			{
				//Es una asignatura de curso común
				$Aprobar="UPDATE platformdata SET ASIST=ASIST+1, PARAM='OK', DEF='$Definitiva', PARAM2='NORMAL' WHERE MAT='$MATCODE' AND ID='$ID'";
			}
			
			$doAprobar=mysqli_query($link, $Aprobar);
			if (!$doAprobar){die("<img src='apps/NO.png' height='42' width='42'><br>No se pudo registrar la nota parcial para tu asignatura <b>$CodigoLiteral - $MateriaNombre</b>. <br>Intenta de nuevo más tarde.");}
		    echo "<img src='apps/OK.png' height='42' width='42'><br>La asignatura -<b>$CodigoLiteral - $MateriaNombre</b>- la has aprobado con nota definitiva <b>$DefinitivaMostrar</b><br> Eres muy inteligente, felicidades... "; 
		    //echo "APROBAR NOTA";
		    /* 2018 
		    /*
		    	Cuando una asignatura se aprueba, asegurar que las asignaturas siguientes tengan su parámetro en "OK" de lo contrario dejar tal como está
		    
		    require '../divsys/ContinuidadAsignaturas/'.$PROGC.'.php';
		    for($i=0; $i<=(count($AsignaturasSgtes))-1; $i++){
		    	$MatCodeSgte=$AsignaturasSgtes[$i];
		    	$Find="SELECT * FROM platformdata WHERE MAT='$MatCodeSgte' AND ID='$ID'";
		    	$doFind=mysqli_query($link, $Find);
		    	$rowFind=mysqli_fetch_array($doFind);
		    	if($rowFind['PARAM']=='OK2'){
		    		//convertir a OK
		    		$updateParam="UPDATE platformdata SET PARAM='OK' WHERE MAT='$MatCodeSgte' AND ID='$ID'";
		    		$doUpdateParam=mysqli_query($link, $updateParam);
		    	}
		    	else
		    	{
		    		
		    	}
		    //} */
		}
		else
		{
			//No lo ha superado, permitir registro
			$NotaParcialLugar=$Asignatura['ASIST']+1;
			$NotaParcial=GenerarNotaParcial(2,4,0,9,1);
			$NotaParcialMostrar=MostrarFlotante($NotaParcial);
			$Asistencia="UPDATE platformdata SET ASIST=ASIST+1 WHERE MAT='$MATCODE' AND ID='$ID'";
			$doAsistencia=mysqli_query($link,$Asistencia);
			$Puntaje="UPDATE platformdata SET PUNT=PUNT+$NotaParcial WHERE MAT='$MATCODE' AND ID='$ID'";
			$doPuntaje=mysqli_query($link,$Puntaje);
			if (!$doAsistencia){die("<img src='apps/NO.png' height='42' width='42'><br>	No se pudo realizar el registro de la nota parcial para tu asignatura -<b>$CodigoLiteral - $MateriaNombre</b>-.<br> Intenta de nuevo más tarde, puede que el profesor esté ocupado.");}
		    echo "<img src='apps/OK.png' height='42' width='42'><br>Se ha realizado el registro de la nota parcial #$NotaParcialLugar con <b>$NotaParcialMostrar</b> para tu asignatura -<b>$CodigoLiteral - $MateriaNombre</b>-. <br> Eres muy inteligente, bueno, eso creemos. ";

		}

	}

echo "<script>
document.getElementById('ListaMaterias').focus();
</script>";
//ANTIGUO SISTEMA DE REGISTRO DE ASISTENCIA CON VERIFICACIÓN EXTENSA DE SUS REQUISITOS
	/*
	switch ($PROGC) {
		#FACBAS

			case 'ORTGRA':
			require 'Academico/Requerimientos/ORTGRA.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;

			case 'DIGSEN':
			require 'Academico/Requerimientos/DIGSEN.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;

			case 'MISERA':
			require 'Academico/Requerimientos/MISERA.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;

			case 'SOCWEB':
			require 'Academico/Requerimientos/SOCWEB.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;

			case 'GESBIX':
			require 'Academico/Requerimientos/GESBIX.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;
		
		#FACTEC

			case 'DIGHUM':
			require 'Academico/Requerimientos/DIGHUM.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;

			case 'FINFPA':
			require 'Academico/Requerimientos/FINFPA.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;

			case 'IDEPER':
			require 'Academico/Requerimientos/IDEPER.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;

			case 'GESHET':
			require 'Academico/Requerimientos/GESHET.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;

			case 'GESHOM':
			require 'Academico/Requerimientos/GESHOM.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;

		#FACING

			case 'YOUTUB':
			require 'Academico/Requerimientos/YOUTUB.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;

			case 'FINANC':
			require 'Academico/Requerimientos/FINANC.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;

			case 'SEXUAL':
			require 'Academico/Requerimientos/SEXUAL.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;

			case 'FRACAS':
			require 'Academico/Requerimientos/FRACAS.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;
		
			case 'PRESID':
			require 'Academico/Requerimientos/PRESID.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;

			case 'DESPER':
			require 'Academico/Requerimientos/DESPER.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;

			case 'GLAMUR':
			require 'Academico/Requerimientos/GLAMUR.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;

		#FACSUP-E

			case 'SEXAPI':
			require 'Academico/Requerimientos/SEXAPI.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;

			case 'FIPMIT':
			require 'Academico/Requerimientos/FIPMIT.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;

		#FACSUP-M

			case 'ENAMAT':
			require 'Academico/Requerimientos/ENAMAT.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;

			case 'IDIOAV':
			require 'Academico/Requerimientos/IDIOAV.php';
			require 'AsistReqs/ProcesoRequerimientos.php';
			break;

		##################################################
		### 		PLAN DE ESTUDIOS 2 				######
		##################################################
			#FACTEC

				case 'DIGHUM2':
				require 'Academico/Requerimientos/DIGHUM2.php';
				require 'AsistReqs/ProcesoRequerimientos.php';
				break;

				case 'FINFPA2':
				require 'Academico/Requerimientos/FINFPA2.php';
				require 'AsistReqs/ProcesoRequerimientos.php';
				break;

				case 'IDEPER2':
				require 'Academico/Requerimientos/IDEPER2.php';
				require 'AsistReqs/ProcesoRequerimientos.php';
				break;

				case 'GESHET2':
				require 'Academico/Requerimientos/GESHET2.php';
				require 'AsistReqs/ProcesoRequerimientos.php';
				break;

				case 'GESHOM2':
				require 'Academico/Requerimientos/GESHOM2.php';
				require 'AsistReqs/ProcesoRequerimientos.php';
				break;

			#FACING

				case 'YOUTUB2':
				require 'Academico/Requerimientos/YOUTUB2.php';
				require 'AsistReqs/ProcesoRequerimientos.php';
				break;

				case 'FINANC2':
				require 'Academico/Requerimientos/FINANC2.php';
				require 'AsistReqs/ProcesoRequerimientos.php';
				break;

				case 'SEXUAL2':
				require 'Academico/Requerimientos/SEXUAL2.php';
				require 'AsistReqs/ProcesoRequerimientos.php';
				break;

				case 'FRACAS2':
				require 'Academico/Requerimientos/FRACAS2.php';
				require 'AsistReqs/ProcesoRequerimientos.php';
				break;
			
				case 'PRESID2':
				require 'Academico/Requerimientos/PRESID2.php';
				require 'AsistReqs/ProcesoRequerimientos.php';
				break;

				case 'DESPER2':
				require 'Academico/Requerimientos/DESPER2.php';
				require 'AsistReqs/ProcesoRequerimientos.php';
				break;

				case 'GLAMUR2':
				require 'Academico/Requerimientos/GLAMUR2.php';
				require 'AsistReqs/ProcesoRequerimientos.php';
				break;

			#FACCON
				//Las asignaturas de programas de la Facultad Continua no tienen requerimientos para curso ni habilitan otras.
				case 'CREDES':
				$MatType="NR";
				require 'AsistReqs/ProcesoRequerimientos.php';
				break;

		default:
			echo "<img src='apps/NO.png' height='60' width='60'><br>Error del sistema en lectura de identificación de programa. <br> <b> Umc:Dssi:Pe:Akaops:RegAstAsg(progc404-nondef);</b>";
		break;
	}#CIERRE SWITCH */
?>
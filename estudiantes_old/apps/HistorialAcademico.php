<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
#Cargar los datos de las asignaturas por asignatura
session_start();
$PROGC=$_SESSION['PROGC'];
$ID=$_SESSION['ID'];
require 'divsys/umcdssictrl.php';
require 'divsys/DatosProgramas.php';


echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script>
function callEstProg() {
	var EstProg = $('#EstProgList').val();
	var DataNull = 12345;
	if (EstProg != '') {
		$.post('apps/HistorialApp.php', {EstProg: EstProg}, function(mensaje) {
			$('#resForm').html(mensaje);
			});
			} else {
			$('#resForm').html('<p>Selecciona de la lista, el programa académico del que deseas ver el historial.</p>');
		};
	};
</script>";

echo  "
<style type='text/css'>
.tg  {width:100%;border: inset 0pt;}
.tg td{font-family:Arial, sans-serif;font-size:12px;padding:10px 5px;overflow:hidden;word-break:normal;width:auto;border: inset 0pt;}
.tg th{font-family:Arial, sans-serif;font-size:12px;font-weight:normal;padding:10px 5px;overflow:hidden;word-break:normal;width:auto;border: inset 0pt;}
.tg .tg-83d4{font-style:italic;text-align:right;vertical-align:top;width:auto;border: inset 0pt;}
.tg .tg-wreh{font-weight:bold;vertical-align:top;width:auto;text-align:left;border: inset 0pt;}
.tg .tg-us36{vertical-align:top;width:auto;border: inset 0pt;text-align:center;}
.tg .tg-acum{vertical-align:top;width:auto;border: inset 0pt;text-align:center;}
</style>

<center>
    <p>Seleccione el programa de la lista PAR FAVAR</p>
    <form id='getDataProg1' method='POST'>
    <select style='width:100%' id='EstProgList' onchange='callEstProg();'>";

 $PrevProgC=$PROGC;
    $LISTAR="SELECT * FROM akahistory WHERE ID='$ID'";
    $OPERAR=mysqli_query($link, $LISTAR);
    $row=mysqli_fetch_array($OPERAR);
    /*
    Prueba de muestreo de parámetros ajax
    echo "<script>alert('",$row['PROGC'],"');</script>";
    */
    if (!empty($row)){
	        //Mostrar opción predeterminada.
	    	echo '<option value="null">Seleccionar programa académico</option>';
	    	$EvitarRepetir=0; $EvitarRepetir2="";
		do{
			if($EvitarRepetir2==$row['PROGC']){
				/*No mostrar de nuevo un registro de semestre de programa*/
			}
			else
			{
				$PROGC=$row['PROGC'];
				require 'divsys/DatosProgramas.php';
				echo "<option value='",$PROGC,"'>",$Facultad," - ",$row['PLAN']," - ",$NombrePrograma,"</option>";
				$EvitarRepetir2=$row['PROGC'];
				$EvitarRepetir++;
			}
	    }
        while ($row=mysqli_fetch_array($OPERAR));
    }
    else
    {
      	//El estudiante nunca ha cursado un programa/fueron revocados los programas totalmente/Error del sistema
      	echo "<option value='null'>No hay programas académicos adscritos al estudiante</option>";
    }
echo "
    </select>
    </form>
    <br>
    <div id='resForm'>
    <!-- --umc:getData(akaApps/Historial/MostrarHistorial/Estudiante_%_ESTID_%) -html_path_print(return_on:_this_) -no_reload --->
    </div>

</center>";































/*
function MostrarFlotante($Numero){
    $Mostrar = sprintf('%0.1f', $Numero);
    return $Mostrar;
}
function isElectivaBase($Matcode){
	switch ($Matcode) {
		case '2345':
		#Electiva base de Ingeniería Sexual
			return TRUE;

		case '2943':
		#Electiva base de Ingeniería Presidencial
			return TRUE;
		break;
	}
}
function DatosAsignatura($Matcode,$Id,$link,$Semanas,$Program){
	//Conectar a DB
	$getData="SELECT * FROM platformdata WHERE MAT='$Matcode' AND ID='$Id' AND PROGC='$Program'";
	$do_getData=mysqli_query($link, $getData);
	//Array de datos de la conexión a DB
	$Array=mysqli_fetch_array($do_getData);
	//Variables individuales para elementos del array
	$Status=$Array['PARAM'];
	if($Array['DEF']==''){$NotaFinal=0;}else{$NotaFinal=MostrarFlotante($Array['DEF']);}
	$Status2=$Array['PARAM2'];
	$Status3=$Array['ADDRM'];
	//Array que será retornado (Definitiva,Estado,Detalle)
	$ArrayAsignatura=array('','','');
	if($Status=='NM'){
		//Asignatura no está matriculada, no importa si es por omisión del estudiante o por falta de requisitos
		$ArrayAsignatura[0]=$NotaFinal; $ArrayAsignatura[1]="NO MATRICULADA";
			//Verificar si el estado de no matriculada es por virginidad o cancelación
			if($Status3==1){$ArrayAsignatura[2]="HA SIDO CANCELADA 1 VEZ";}else{$ArrayAsignatura[2]="ASIGNATURA VIRGEN";}
	}
	else
	{
		if($Status=='C'){
			//Asignatura está cancelada definitivamente
			$ArrayAsignatura[0]=$NotaFinal; $ArrayAsignatura[1]="INHABILITADA"; $ArrayAsignatura[2]="HA SIDO CANCELADA 2 VECES";
		}
		else
		{
			if($Status=='A'){
				//Asignatura está matriculada
				$ArrayAsignatura[1]="MATRICULADA";
				//Puntaje debe ser parcial dado que aún no se ha aprobado
				$DefParcial=$Array['PUNT']/$Semanas;	$NotaFinal=MostrarFlotante($DefParcial);	$ArrayAsignatura[0]=$NotaFinal;
				//Revisar parámetros adicionales a la asignatura matriculada
				$Aux="EN CURSO ";
				if($Status3==2){$ArrayAsignatura[2]=$Aux."- RIESGO INHABILIDAD";}else{$ArrayAsignatura[2]=$Aux;}
			}
			else
			{
				if($Status=='OK'){
					//Asignatura está aprobada
					$ArrayAsignatura[0]=$NotaFinal;
					$ArrayAsignatura[1]="APROBADA";
					//Verificar si se aprobó por curso normal o diferente
					switch ($Status2) {
						case 'NORMAL':
							$ArrayAsignatura[2]="POR CURSO NORMAL";
						break;

						case 'CLASIF':
							$ArrayAsignatura[2]="POR CLASIFICACIÓN";
						break;

						case 'ADMIN':
							$ArrayAsignatura[2]="POR ORDEN ADMINISTRATIVA";
						break;

						default:
							$ArrayAsignatura[2]="POR CURSO DUDOSO";
						break;
					}
				}
				else
				{
					//No se obtienen detalles de la asignatura
					$ArrayAsignatura[0]=$NotaFinal;
					$ArrayAsignatura[1]="DESCONOCIDO";
					$ArrayAsignatura[2]="DESCONOCIDO";
				}
			}
		}
	}
	return $ArrayAsignatura;
}
function DatosAsignaturaElectiva($Matcode,$Id,$link,$Semanas){
	$ElectivaHabilidad=NULL;
	if(isElectivaBase($Matcode)==TRUE){
		//Buscar datos de la asignatura Base
		//Conectar a DB
		$getData="SELECT * FROM platformdata WHERE MAT='$Matcode' AND ID='$Id' AND PROGC='$PROGC'";
		$do_getData=mysqli_query($link, $getData);
		//Array de datos de la conexión a DB
		$Array=mysqli_fetch_array($do_getData);
		//Variables individuales para elementos del array
		$Status=$Array['PARAM'];
		if($Array['DEF']==''){$NotaFinal=0;}else{$NotaFinal=MostrarFlotante($Array['DEF']);}
		$Status2=$Array['PARAM2'];
		$Status3=$Array['ADDRM'];
		//Array que será retornado (Definitiva,Estado,Detalle)
		$ArrayAsignatura=array('','','','TRUE');
		if($Status2=='E'){
			//Asignatura base electiva se puede utilizar
			$ArrayAsignatura[0]="N/A";
			$ArrayAsignatura[1]="ACTIVADA SIN USARSE";
			$ArrayAsignatura[2]="PUEDE MATRICULAR ELECTIVA";
			$ElectivaHabilidad=1;
		}
		else
		{
			if($Status2==''){
			//Asignatura base electiva NO se puede utilizar
				$ArrayAsignatura[0]="N/A";
				$ArrayAsignatura[1]="NO ACTIVADA";
				$ArrayAsignatura[2]="NO DISPONE REQUISITOS";
				$ElectivaHabilidad=0;
			}
			else
			{
				//Asignatura base tiene electiva matriculada
				$ArrayAsignatura[0]="N/A";
				$ArrayAsignatura[1]="EN USO";
				$ArrayAsignatura[2]="ELECTIVA MATRICULADA";
				$ElectivaHabilidad=1;
			}
		}
		return $ArrayAsignatura;
	}
	else
	{
		//if($ElectivaHabilidad==1){
			//Buscar electivas
				//No es electiva base, es la asignatura electiva
				//Buscar datos de la asignatura electiva
				//Conectar a DB
				$getData="SELECT * FROM platformdata WHERE MAT='$Matcode' AND ID='$Id' AND PROGC='$PROGC'";
				$do_getData=mysqli_query($link, $getData);
				//Array de datos de la conexión a DB
				$Array=mysqli_fetch_array($do_getData);
				//Variables individuales para elementos del array
				$Status=$Array['PARAM'];
				if($Array['DEF']==''){$NotaFinal=0;}else{$NotaFinal=MostrarFlotante($Array['DEF']);}
				$Status2=$Array['PARAM2'];
				$Status3=$Array['ADDRM'];
				//Array que será retornado (Definitiva,Estado,Detalle,Estado matricula)
				$ArrayAsignatura=array('','','','');
				if(!$Array['MAT']==''){
					//Hay electiva
					if($Status=='NM'){
					//Asignatura no está matriculada, no importa si es por omisión del estudiante o por falta de requisitos
					$ArrayAsignatura[0]=$NotaFinal; $ArrayAsignatura[1]="NO MATRICULADA"; $ArrayAsignatura[3]=FALSE;
						//Verificar si el estado de no matriculada es por virginidad o cancelación
						if($Status3==1){$ArrayAsignatura[2]="HA SIDO CANCELADA 1 VEZ";}else{$ArrayAsignatura[2]="ELECTIVA VIRGEN";}
					}
					else
					{
						if($Status=='C'){
							//Asignatura está cancelada definitivamente
							$ArrayAsignatura[0]=$NotaFinal; $ArrayAsignatura[1]="INHABILITADA"; $ArrayAsignatura[2]="HA SIDO CANCELADA 2 VECES";
						}
						else
						{
							if($Status=='A'){
								//Asignatura está matriculada
								$ArrayAsignatura[1]="MATRICULADA"; $ArrayAsignatura[3]=TRUE;
								//Puntaje debe ser parcial dado que aún no se ha aprobado
								$DefParcial=$Array['PUNT']/$Semanas;	$NotaFinal=MostrarFlotante($DefParcial);	$ArrayAsignatura[0]=$NotaFinal;
								//Revisar parámetros adicionales a la asignatura matriculada
								$Aux="EN CURSO ";
								if($Status3==2){$ArrayAsignatura[2]=$Aux."- RIESGO INHABILIDAD";}else{$ArrayAsignatura[2]=$Aux;}
							}
							else
							{
								if($Status=='OK'){
									//Asignatura está aprobada
									$ArrayAsignatura[0]=$NotaFinal;
									$ArrayAsignatura[1]="APROBADA"; $ArrayAsignatura[3]=TRUE;
									//Verificar si se aprobó por curso normal o diferente
									switch ($Status2) {
										case 'NORMAL':
											$ArrayAsignatura[2]="POR CURSO NORMAL";
										break;

										case 'CLASIF':
											$ArrayAsignatura[2]="POR CLASIFICACIÓN";
										break;

										case 'ADMIN':
											$ArrayAsignatura[2]="POR ORDEN ADMINISTRATIVA";
										break;

										default:
											$ArrayAsignatura[2]="POR CURSO DUDOSO";
										break;
									}
								}
								else
								{
									//No se obtienen detalles de la asignatura
									$ArrayAsignatura[0]=$NotaFinal;
									$ArrayAsignatura[1]="DESCONOCIDO";
									$ArrayAsignatura[2]="DESCONOCIDO";
									$ArrayAsignatura[3]=FALSE;
								}
							}
						}
					}
				}
				else
				{
					//No hay electiva
					$ArrayAsignatura[0]="N/A";
					$ArrayAsignatura[1]="SIN MATRICULAR";
					$ArrayAsignatura[2]="ELECTIVA NO SE HA MATRICULADO";
					$ArrayAsignatura[3]=FALSE;
				}
		/*}
		else
		{
			//No puede aun tener electivas
			$ArrayAsignatura[0]="N/A";
			$ArrayAsignatura[1]="SUSPENDIDA";
			$ArrayAsignatura[2]="NO DISPONE REQUISITOS EN ELECTIVA BASE";
			$ArrayAsignatura[3]=FALSE;
		}*//*
		return $ArrayAsignatura;
	}
}
function EstadoModulo($Promed){
	if(($Promed>=0) && ($Promed<=2.4)){
		//Estudiante deja el módulo en Nivel Académico Deficiente
		$Resultado="Módulo académico DEFICIENTE";
	}else{
		if(($Promed>=2.5) && ($Promed<=2.9)){
			//Estudiane deja el módulo en nivel académico bajo
			$Resultado="Módulo académico BAJO";
		}
		else
		{
			if(($Promed>=3) && ($Promed<=4)){
				//Estudiante deja el módulo en nivel académico normal
				$Resultado="Módulo académico NORMAL";
			}
			else
			{
				//Estudiante deja el módulo en nivel académico Excelente
				$Resultado="Módulo académico EXCELENTE";
			}
		}
	}
	return $Resultado;
}
echo '
<fieldset style="width:100%;">
	<legend> <b>',$NombrePlanEstudios,'</b> </legend>';
/* MÓDULO OPTATIVA *//*
$findOpta="SELECT * FROM platformdata WHERE ID='$ID' AND PROGC IN('OPTA')";
$do_findOpta=mysqli_query($link, $findOpta);
$rowOpta=mysqli_fetch_array($do_findOpta);
if(!$rowOpta['MAT']==''){
	//Existe optativa
	$MATCODE=$rowOpta['MAT'];
	echo '<fieldset style="width:auto;">
    <legend> <h6>MÓDULO OPTATIVA</h6> </legend>
	    <table align="center" width="100%">
	  	<tbody>
	    <tr>
    	<td colspan="4">
      	<table width="100%;">
        <tbody>
        <tr>
          	<th><h6>Código</h6></th>
            <th><h6>Asignatura</h6></th>
            <th><h6>Créditos</h6></th>
            <th><h6>Nota definitiva</h6></th>
            <th><h6>Estado</h6></th>
            <th><h6>Detalle</h6></th>
          </tr>';

	require 'divsys/Materias.php';
		require 'divsys/MateriasPerCredits.php';

          $ArrayAsignatura=DatosAsignatura($MATCODE,$ID,$link,$Semanas,$PROGC);
			echo"<tr>
		            <td style='text-align:center;'><b>",$CodigoLiteral,"</b></td>
		            <td style='text-align:center;'><b>",$MateriaNombre,"</b></td>
		            <td style='text-align:center;'><b>",$Creditos,"</b></td>
		            <td style='text-align:center;'><b>",$ArrayAsignatura[0],"</b></td>
		            <td style='text-align:center;'><b>",$ArrayAsignatura[1],"</b></td>
		            <td style='text-align:center;'><b>",$ArrayAsignatura[2],"</b></td>
				</tr>";
		echo '</tbody>
				</table>
		      </td>
		    </tr>
			</tbody></table>
	    </fieldset><br>';
	}
	else
	{
		/* */
	/*}

//Variables para promedio modular
	//Acumular créditos
	/*$ConteoCR=null;
	//Acumular suma de notas (CR * DEF)
	$ConteoDEF=null;

for($Nmods=0; $Nmods<=($NumeroModulos-1); $Nmods++){
	//Variables para promedio modular
	//Acumular créditos
	$ConteoCR=null;
	//Acumular suma de notas (CR * DEF)
	$ConteoDEF=null;
echo '<fieldset>
    <legend> <h6>MÓDULO ',$Nmods+1,'</h6> </legend>
	    <table align="center" width="100%">
	  	<tbody>
	    <tr>
    	<td colspan="4">
      	<table width="100%;">
        <tbody>
        <tr>
          	<th><h6>Código</h6></th>
            <th><h6>Asignatura</h6></th>
            <th><h6>Créditos</h6></th>
            <th><h6>Nota definitiva</h6></th>
            <th><h6>Estado</h6></th>
            <th><h6>Detalle</h6></th>
          </tr>';
	for($Asig=0; $Asig<=count($Asignaturas[$Nmods])-1; $Asig++){
		$MATCODE=$Asignaturas[$Nmods][$Asig];
		require 'divsys/Materias.php';
		require 'divsys/MateriasPerCredits.php';
		$ArrayAsignatura=DatosAsignatura($MATCODE,$ID,$link,$Semanas,$PROGC);
		echo"<tr>
	            <td style='text-align:center;'><b>",$CodigoLiteral,"</b></td>
	            <td style='text-align:center;'><b>",$MateriaNombre,"</b></td>
	            <td style='text-align:center;'><b>",$Creditos,"</b></td>
	            <td style='text-align:center;'><b>",$ArrayAsignatura[0],"</b></td>
	            <td style='text-align:center;'><b>",$ArrayAsignatura[1],"</b></td>
	            <td style='text-align:center;'><b>",$ArrayAsignatura[2],"</b></td>
			</tr>";
		$ConteoCR+=$Creditos;
		$ConteoDEF+=$ArrayAsignatura[0]*$Creditos;
	}
	//Promedio
	$PromedioModular=$ConteoDEF/$ConteoCR;
	$PromedioModular=MostrarFlotante($PromedioModular);
	echo '
	<tr style="border-collapse:collapse;border-spacing:0;border-color:#FF0000;">
        <td colspan="2" style="text-align:center; border-collapse:collapse;border-spacing:0;border-color:#FF0000;"><b>PROMEDIO</b></td>
		<td colspan="1" style="text-align:center; border-collapse:collapse;border-spacing:0;border-color:#FF0000;"><b>',$PromedioModular,'</b></td>
		<td colspan="1" style="text-align:center; border-collapse:collapse;border-spacing:0;border-color:#FF0000;"><b>ESTADO</b></td>
		<td colspan="2" style="text-align:center; border-collapse:collapse;border-spacing:0;border-color:#FF0000;"><i>',EstadoModulo($PromedioModular),'</i></td>
	</tr>
	';
	echo '</tbody>
			</table>
	      </td>
	    </tr>
		</tbody></table>
    </fieldset><br>';
}

/* ELECTIVAS *//*
if($CreditosParaElectiva>=1){
	//El programa permite electiva, se entiende que el array AsignaturasElectiva empieza por la asignatura base y sigue con las asignaturas electivas
	echo '<fieldset style="width:auto;">
    <legend> <h6>MÓDULO ELECTIVAS</h6> </legend>
	    <table align="center" width="100%">
	  	<tbody>
	    <tr>
    	<td colspan="4">
      	<table width="100%;">
        <tbody>
        <tr>
          	<th><h6>Código</h6></th>
            <th><h6>Asignatura</h6></th>
            <th><h6>Créditos</h6></th>
            <th><h6>Nota definitiva</h6></th>
            <th><h6>Estado</h6></th>
            <th><h6>Detalle</h6></th>
          </tr>';
		for($Asig=0; $Asig<=count($AsignaturasElectiva)-1; $Asig++){
			$MATCODE=$AsignaturasElectiva[$Asig];
			require 'divsys/Materias.php';
			require 'divsys/MateriasPerCredits.php';
			$ArrayAsignatura=DatosAsignaturaElectiva($MATCODE,$ID,$link,$Semanas);
			if($ArrayAsignatura[3]=='TRUE'){
				//Asignatura electiva está matrículada
				echo"<tr>
		            <td style='text-align:center;'><b>",$CodigoLiteral,"</b></td>
		            <td style='text-align:center;'><b>",$MateriaNombre,"</b></td>
		            <td style='text-align:center;'><b>",$Creditos,"</b></td>
		            <td style='text-align:center;'><b>",$ArrayAsignatura[0],"</b></td>
		            <td style='text-align:center;'><b>",$ArrayAsignatura[1],"</b></td>
		            <td style='text-align:center;'><b>",$ArrayAsignatura[2],"</b></td>
				</tr>";
			}

		}
		echo '</tbody>
				</table>
		      </td>
		    </tr>
			</tbody></table>
	    </fieldset><br>';
}
else
{
	/* *//*
}

echo '

</fieldset>';*/
?>

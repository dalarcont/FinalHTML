<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
#Cargar los datos de las asignaturas por asignatura
session_start();
$PROGC=$_SESSION['PROGC'];
$ID=$_SESSION['ID'];

require '../../divsys/umcdssictrl.php';
function CalcularDefinitiva($nParciales,$Porcentaje,$Notas){
	$nParciales = 4;
					for($i=0; $i<$nParciales; $i++){
						//$SumatoriaPorcentajes+=$Porcentaje[$i];
						$Sumatoria+=$Notas[$i]*$Porcentaje[$i];
					}
					//Obtener nota definitiva
					//$temp_res = $Sumatoria/$SumatoriaPorcentajes;
					$temp_res = $Sumatoria/10;
					return $temp_res;
				}
echo "<center>";
$PrevProgC=$PROGC;
    $Sql_GetAsignaturas="SELECT * FROM platformdata WHERE ID='$ID' AND PARAM='A' ORDER BY CR DESC";  
    $EjecutarSql=mysqli_query($link, $Sql_GetAsignaturas);
    $Asignaturas_arr=mysqli_fetch_array($EjecutarSql);

    if (!empty($Asignaturas_arr)){
	        //Mostrar opción predeterminada.
    		//Cargar estilos
    		echo "<link rel='stylesheet' href='apps/fx_NotasParciales/NotasParciales_Style.css' media='screen'>";
	    	//echo 'Existen asignaturas';
	    	//$EvitarRepetir=0; $EvitarRepetir2="";

		do{
			
			if($Asignaturas_arr['PARCIALES']!="[]"){
				//La asignatura actual tiene notas parciales registradas
				$MATCODE=$Asignaturas_arr['MAT']; echo "<br>"; //Código numérico asigntura
				require '../../divsys/Materias.php';
				$Parciales_arr=json_decode($Asignaturas_arr['PARCIALES']);
				$Fechas_arr=json_decode($Asignaturas_arr['FECHAS']);
				$Porcentajes_arr=json_decode($Asignaturas_arr['PORCENTAJES']);

				$DefinitivaActual=CalcularDefinitiva(4,$Porcentajes_arr,$Parciales_arr);
				echo '
					<fieldset><table class="tg">
					  <tr>
					    <th class="tg-zlqz" colspan="4">Asignatura ',$CodigoLiteral,' - ',$MateriaNombre,'</th>
					  </tr>
					  <tr>
					    <td class="tg-7btt">Nota general</td>
					    <td class="tg-7btt">',$DefinitivaActual,'</td>
					    <td class="tg-7btt">Nota Suficiencia</td>
					    <td class="tg-7btt"></td>
					  </tr>
					  <tr>
					    <td class="tg-7btt">Detalle<br></td>
					    <td class="tg-7btt">Fecha Digitación<br></td>
					    <td class="tg-7btt">Porcentaje<br></td>
					    <td class="tg-7btt">Nota</td>
					  </tr>';
					  $Consecutivo=1; //Inicia en Parcial I
					  for($i=0; $i<=(count($Parciales_arr))-1; $i++){
					  	
					  	echo '<tr>
					    <td class="tg-c3ow">Parcial ',$Consecutivo,'</td>
					    <td class="tg-c3ow">',$Fechas_arr[$i],'</td>
					    <td class="tg-c3ow">',$Porcentajes_arr[$i],'</td>
					    <td class="tg-c3ow">',$Parciales_arr[$i],'</td>
					  </tr>';	
					  $Consecutivo++;
					  }
					  
					echo '</table></fieldset>';				
			}else
			{
				//echo "No existe información de notas parciales dado que los responsables de tus asignaturas matriculadas no han subido notas parciales.";	     		
			}
	    }
        while ($Asignaturas_arr=mysqli_fetch_array($EjecutarSql));
    }
    else
    {
      	//El estudiante nunca ha cursado un programa/fueron revocados los programas totalmente/Error del sistema
      	echo "No existe información de notas parciales dado que no se encontraron asignaturas matriculadas";	     
    } 
echo "</center>";

?>
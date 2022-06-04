<?php
session_start();
require '../../divsys/umcdssictrl.php';
$dataProg=$_POST['EstProg'];
//Las siguientes 2 lineas son de prueba
//$datanull=$_POST['DataNull'];
//echo "<script>alert('",$datanull,"');</script>";
function MostrarFlotante($Numero){
                $Mostrar = sprintf('%0.1f', $Numero);
                return $Mostrar;
            }
$ID=$_SESSION['ID'];
$PROGC=$dataProg;
require '../../divsys/DatosProgramas.php';
$ListarPeriodosAcademicos="SELECT * FROM akahistory WHERE ID='$ID' AND PROGC='$dataProg' ORDER BY HISTNUM DESC";
$EjecutarListados=mysqli_query($link, $ListarPeriodosAcademicos);
if ($DatosProgramaHistorial=mysqli_fetch_array($EjecutarListados)){
	do{
		$SM=$DatosProgramaHistorial['SM'];
		$MATS=json_decode($DatosProgramaHistorial['MATS']);
	  	$DFS=json_decode($DatosProgramaHistorial['DFS']);
      $PARAMS=json_decode($DatosProgramaHistorial['PARAMS']);
	  	$PROM=$DatosProgramaHistorial['PROM'];
	  	$PromedioSemestre=MostrarFlotante($PROM);
      //count($PARAMS);
      //Posición en array de los conteos se define en
      //Ejemplo: 8 datos en el array PARAM equivale a n-3 donde n = Cantidad de datos en array MENOS los parámetros de conteo
      //Significa que en el ejemplo de 8 datos, 5 son los parámetros de asignaturas y los ultimos 3 son
      //Total / Aprobados / No aprobados    Por lo tanto las posiciones en array de ellos son
      //NO APROBADOS = n-1    APROBADOS = n-2   TOTAL = n-3
      //NO APROBADOS = n-1    APROBADOS = NO APROBADOS-1   TOTAL= APROBADOS-1
      $SectorNO=count($PARAMS)-1;
      $SectorOK=$SectorNO-1;
      $SectorTotal=$SectorOK-1;
      $CRAprobados=$PARAMS[$SectorOK];
      $CRNAprobados=$PARAMS[$SectorNO];
      $CRAcumulados=$PARAMS[$SectorTotal];
      $CRMatriculados=$CRAprobados+$CRNAprobados;
		$STAT=$DatosProgramaHistorial['STAT'];
		 if($DatosProgramaHistorial['SMP']=='1'){$SMP="Primer semestre de";}else{$SMP="Segundo semestre de";}
     echo '<table class="tg">';
     echo '
    <tr style="border:solid;">
      <th class="tg-wreh" colspan="3"><h6>',strtoupper($SMP),' ',strtoupper($SM),'<br></h6></th>
      <th class="tg-83d4" colspan="3">Promedio ',$PromedioSemestre,'</th>
    </tr>
    <tr>
      <th class="tg-acum" colspan="5"><b>Acumulación créditos</b>: ',$CRAcumulados,'</th>
    </tr>
    <tr>
      <th class="tg-83d4" colspan="1"><b>Matriculados:</b> ',$CRMatriculados,'</th>
      <th class="tg-83d4" colspan="1"><b>Aprobados</b></th>
      <th class="tg-us36" colspan="1">',$CRAprobados,'</th>
      <th class="tg-83d4" colspan="1"><b>No aprobados</b></th>
      <th class="tg-us36" colspan="1">',$CRNAprobados,'</th>
    </tr>
    <tr>
      <td class="tg-us36"><b>Código</b></td>
      <td class="tg-us36"><b>Asignatura</b></td>
      <td class="tg-us36"><b>Créditos</b></td>
      <td class="tg-us36"><b>Nota</b></td>
      <td class="tg-us36"><b>Estado</b></td>
      <td class="tg-us36"><b>Detalle</b></td>
    </tr>';
		//echo "<big><b>$NombrePrograma</b></big><br>";
  		//echo "<big><b>$SMP $SM</b></big>";
  		//echo "<br> Promedio $PromedioSemestre</br>";
  		//echo count($MATS); echo "<br>"; echo count($DFS);
  		for($i=0; $i<=(count($MATS)-1); $i++){
            $MATCODE=$MATS[$i]; require '../../divsys/Materias.php'; require '../../divsys/MateriasPerCredits.php';
            $DEF=$DFS[$i];
            $NotaDef=MostrarFlotante($DEF);
            $Detalle="";
            switch($PARAMS[$i]){
              case 0:
                $Detalle="Curso normal";
              break;
              case 1:
                $Detalle="Suficiencia";
              break;
              case 2:
                $Detalle="Orden superior";
              break;
              case 3:
                $Detalle="Clasificación";
              case 4:
                $Detalle="Homologación";
              break;
              
              case 5:
              	$Detalle = "EN CURSO";
              
              default:
              	$Detalle = "N/D";
              break;
            }
            if($DEF>2.9){$Estado="APROBADA";}else{$Estado="NO APROBADA";}
            
            echo '<tr>
                  <td class="tg-us36">',$CodigoLiteral,'</td>
                  <td class="tg-us36">',$MateriaNombre,'</td>
                  <td class="tg-us36">',$Creditos,'</td>
                  <td class="tg-us36">',$NotaDef,'</td>
                  <td class="tg-us36">',$Estado,'</td>
                  <td class="tg-us36">',$Detalle,'</td>
                </tr>';

      	}
      	echo "<br>";



	}//Cierra do

	while ($DatosProgramaHistorial=mysqli_fetch_array($EjecutarListados));
  echo "</table>";
	}
else{
	echo "<p>No hay registros de periodos académicos cursados del programa seleccionado, puede tratarse de un error</p>";
}


?>

<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
session_start();


$ID=$_SESSION['ID'];
$NAME=$_SESSION['NAME'];
$PINCERT=$_SESSION['PINCERT'];



require '../../divsys/umcdssictrl.php';

//Leer que programa eligió el estudiante para certificar
$PROGC=$_SESSION['Programa_PdeE'];
//Funciones primordiales
function PromedioGeneral($TotalDefs,$TotalCR){

    if($TotalCR==0){
        return $Resultado;
    }
    else
    {
        $Resultado=$TotalDefs/$TotalCR;
        return $Resultado;
    }
}
function MostrarFlotante($Numero){
    $Mostrar = sprintf('%0.1f', $Numero);
    return $Mostrar;
}
function CalcularPosicionModular($Facultad,$CR,$CR_S){
    //$Facultad == Indicar la facultad
    //$CR == array con la cantidad de créditos de cada módulo
    //$CR_S == Créditos acumulados del estudiante
    switch ($Facultad) {
        case 'FACBAS':
        #Facultad Básica
            $CR_M1=$CR[0];  $CR_M2=$CR_M1+$CR[1];
            if($CR_S<=$CR_M1){
                $Mensaje="Primeroo";
            }
            else
            {
                $Mensaje="Segundo y último";
            }
        break;

        case 'FACTEC':
        #Facultad Tecnologías
            $CR_M1=$CR[0];  $CR_M2=$CR_M1+$CR[1];   $CR_M3=$CR_M2+$CR[2];
            $CR_M4=$CR_M3+$CR[3];   $CR_M5=$CR_M4+$CR[4];
            if($CR_S<=$CR_M1){
                $Mensaje="Primero";
            }
            else
            {
                if($CR_S<=$CR_M2){
                    $Mensaje="Segundo";
                }
                else
                {
                    if($CR_S<=$CR_M3){
                        $Mensaje="Tercero";
                    }
                    else
                    {
                        if($CR_S<=$CR_M4){
                            $Mensaje="Cuarto";
                        }
                        else
                        {
                                $Mensaje="Quinto y último";
                        }
                    }
                }
            }
        break;

        case 'FACING':
        #Facultad Ingenierías
            $CR_M1=$CR[0];  $CR_M2=$CR_M1+$CR[1];   $CR_M3=$CR_M2+$CR[2];
            $CR_M4=$CR_M3+$CR[3];   $CR_M5=$CR_M4+$CR[4];   $CR_M6=$CR_M5+$CR[5];
            $CR_M7=$CR_M6+$CR[6];
            if($CR_S<=$CR_M1){
                $Mensaje="Primero";
            }
            else
            {
                if($CR_S<=$CR_M2){
                    $Mensaje="Segundo";
                }
                else
                {
                    if($CR_S<=$CR_M3){
                        $Mensaje="Tercero";
                    }
                    else
                    {
                        if($CR_S<=$CR_M4){
                            $Mensaje="Cuarto";
                        }
                        else
                        {
                            if($CR_S<=$CR_M5){
                                $Mensaje="Quinto";
                            }
                            else
                            {
                                if($CR_S<=$CR_M6){
                                    $Mensaje="Sexto";
                                }
                                else
                                {
                                    $Mensaje="Séptimo y último";
                                }
                            }
                        }
                    }
                }
            }
        break;

        case 'FACSUP':
        #Facultad Superior
            $CR_M1=$CR[0];  $CR_M2=$CR_M1+$CR[1];   $CR_M3=$CR_M2+$CR[2];   $CR_M4=$CR_M3+$CR[3];
            if($CR_S<=$CR_M1){
                $Mensaje="Primero";
            }
            else
            {
                if($CR_S<=$CR_M2){
                    $Mensaje="Segundo";
                }
                else
                {
                    if($CR_S<=$CR_M3){
                        $Mensaje="Tercero";
                    }
                    else
                    {
                        $Mensaje="Cuarto y último";
                    }
                }
            }
        break;

        default:
            #Aplica para la Facultad Continua
        $Mensaje="ningún";
        break;
    }
    return $Mensaje;
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Universidad Falsa - División Superior de Sistemas Informáticos -->
<!-- HTML DATA -->
      <meta charset="utf-8">
      <title>UMC - Certificado estudios</title>
  <meta  name="viewport" content="width=1024" />
  <!--<meta http-equiv="refresh" content="60">-->
      <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
      <link rel="stylesheet" href="style.css" media="screen">
      <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

  <meta name="description" content="Certificado de estudios académicos del estudiante Universidad Falsa">
    <style type='text/css'>
      .tg  {width:100%;border: inset 1pt; text-align: center;}
      .tg td{font-family:Arial, sans-serif;font-size:12px;padding:10px 5px;overflow:hidden;word-break:normal;width:auto;border: inset 1pt;}
      .tg th{font-family:Arial, sans-serif;font-size:12px;font-weight:normal;padding:10px 5px;overflow:hidden;word-break:normal;width:auto;border: inset 1pt;}
      .tg .tg-83d4{font-style:italic;text-align:right;vertical-align:top;width:auto;border: inset 1pt;}
      .tg .tg-wreh{font-weight:bold;vertical-align:top;width:auto;text-align:left;border: inset 1pt;}
      .tg .tg-us36{vertical-align:top;width:auto;border: inset 1pt;text-align:center;}
      .tg .tg-acum{vertical-align:top;width:auto;border: inset 1pt;text-align:center;}
    </style>
  </head>
  <script src='alertify.js'></script>
  <link rel='stylesheet' href='css/alertify.css' />

  <link rel='stylesheet' href='css/themes/bootstrap.css' />


  <script language="JavaScript" type="text/javascript">
  //Width
  $(document).ready(function($){
    //Read window's width
    var v_ancho = $(window).width();
    var FinalWidth = v_ancho - 225;
    $("#SpanSpacer").width(FinalWidth);
  });
  </script>

  <body id="body" onload="muestraGranDiv(); window.print();">
  <div id="art-main">
  <header class="art-header">
      <div class="art-shapes">
          <!-- <div class="art-object1542056463"></div> -->
          <!-- <h1 class="art-headline"><a href="/">CERTIFICADO</a></h1> -->
      </div>
      <div class="art-object1542056463"></div>
      <h1 class="art-headline"><center><p id="SpanSpacer"></p><a href="/">Universidad Falsa - CERTIFICADO DE ESTUDIOS</a></center></h1>
  </header>

  <!-- Estilo para respetar el contendor de información de asignaturas -->

<!-- STRUCTURED -->
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 0%" ></div>
    <div class="art-layout-cell" style="width: 100%;" >
      <center>

        <!-- HEADER -->
        <br>
        <h3>Universidad Falsa</h3>
        <h3>División Superior de Registro y Control</h3>
        <?php
        if (empty($ID)) {
            #No hay identificación de estudiante por lo tanto se detiene el proceso
            echo "<script>alertify.alert('Certificado de estudios', 'No estás identificado correctamente, ingresa de nuevo al portal estudiantil.', function(){ alertify.error('Limpiando datos');location.href='../../index.php'; });</script>";}
        ?>
        <br>



        <!-- CONTENT -->
        <?php



        //Si el estudiante eligió todos pues generar de todos en uno solo.
        if($PROGC=="ALL"){
          echo "
             <p>El/la estudiante ",$NAME," identificado/a con documento de identidad <b>",$ID,"</b>, pertenece a la Universidad Falsa catalogado/a en el/los siguiente/s programa/s así: </p><br>
          ";
          //Crear el paquete contenedor de los $Programas
          $Package = array();
          $Programa = 1 ;
            //Generar para todos los programas en uno solo.
              $PackGendata = "SELECT * FROM gendata WHERE ID='$ID'";
              $do1 = mysqli_query($link, $PackGendata);
              $PackGendata_arr = mysqli_fetch_array($do1);
            //Traer listado de programas y sus estados
              $Programas = json_decode($PackGendata_arr['PROGC']);
              $Programas_estados = json_decode($PackGendata_arr['PROGCSTATE']);
            //Crear arreglos con los datos solicitados por programa

            for($i=0; $i<=count($Programas)-1; $i++){
                //Leer programa
                  $PROGC = $Programas[$i];
                //leer datos del programa
                require '../../divsys/DatosProgramas.php';
                #Cargar número de créditos acumulados
                    $TotalCreditosAcumulados="SELECT SUM(CR) as TotalCreditos FROM platformdata WHERE ID='$ID' AND PARAM IN('OK') AND PROGC='$PROGC'";
                    $ResultadoPuntajes = mysqli_query($link, $TotalCreditosAcumulados);
                    $rowCreditos = mysqli_fetch_array($ResultadoPuntajes, MYSQL_ASSOC);
                    $DataCreditos=$rowCreditos["TotalCreditos"];
                    if(empty($DataCreditos)){$DataCreditos="0";}

                #Cargar último periodo cursado
                    $LastPeriodo = "SELECT *  FROM akahistory WHERE ID='$ID' AND PROGC='$PROGC' ORDER BY HISTNUM DESC";
                    $do2 = mysqli_query($link, $LastPeriodo);
                    $LastPeriodo_arr = mysqli_fetch_array($do2);
                    $ultimoperiodo = " ".$LastPeriodo_arr['SM']."-".$LastPeriodo_arr['SMP']."";
                    $ultimopromedio = $LastPeriodo_arr['PROM'];
                    $estadoAcademico = $LastPeriodo_arr['STAT'];

                    $Posicion = CalcularPosicionModular($FAC,$CreditosModulo,$DataCreditos);
                    //Estado del programa en proceso
                      if($Programas_estados[$i]=='1'){$EstadoPrograma = "Activo";}else{$EstadoPrograma="Inactivo";}
                    //Variable de datos unificados
                      $Data = "<p><h3>Programa $Programa</h3><b>FACULTAD Y PROGRAMA</b>: $Facultad : $CodigoNIE-$NombrePrograma en el plan de estudios $VersionPensum-$Plan<br><b>Estado actual</b>: $EstadoPrograma<br><b>Último periodo cursado</b>: $ultimoperiodo<br><b>Promedio del Periodo</b>: $ultimopromedio<br><b>Estado académico</b>: $estadoAcademico<br><b>Créditos aprobados totales</b>: $DataCreditos<br><b>Posición Módular</b>: $Posicion</p><br>";
                      array_push($Package, $Data);
                      $Programa++;
            }
        }
        else
        {
          $PROGC=$_SESSION['Programa_PdeE'];
          //leer datos del programa
          require '../../divsys/DatosProgramas.php';
          #Cargar número de créditos acumulados
              $TotalCreditosAcumulados="SELECT SUM(CR) as TotalCreditos FROM platformdata WHERE ID='$ID' AND PARAM IN('OK') AND PROGC='$PROGC'";
              $ResultadoPuntajes = mysqli_query($link, $TotalCreditosAcumulados);
              $rowCreditos = mysqli_fetch_array($ResultadoPuntajes, MYSQL_ASSOC);
              $DataCreditos=$rowCreditos["TotalCreditos"];
              //if(empty($DataCreditos)){$DataCreditos="0";}

              $Posicion = CalcularPosicionModular($FAC,$CreditosModulo,$DataCreditos);
              //Estado del programa en proceso
                if($Programas_estados[$i]=='1'){$EstadoPrograma = "Activo";}else{$EstadoPrograma="Inactivo";}
          echo "
             <p>El/la estudiante ",$NAME," identificado/a con documento de identidad <b>",$ID,"</b>, pertenece a la Universidad Falsa en el siguiente programa académico con sus respectivos periodos académicos cursados encabezando por el último periodo culminado: </p><br>
             <p><h3>Programa $Programa</h3>
             <b>FACULTAD Y PROGRAMA</b>: $Facultad : $CodigoNIE-$NombrePrograma en el plan de estudios $VersionPensum-$Plan<br>
             <b>Estado actual</b>: $EstadoPrograma<br>
             <b>Créditos aprobados totales</b>: $DataCreditos<br>
             <b>Posición Módular</b>: $Posicion</p><br>
          ";
          #Cargar último periodo cursado

              $ListarPeriodosAcademicos="SELECT * FROM akahistory WHERE ID='$ID' AND PROGC='$PROGC' ORDER BY HISTNUM DESC";
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
                   echo '<center><table class="tg">';
                   echo '
                  <tr style="border:solid;">
                    <th class="tg-wreh" colspan="3"><h3>',strtoupper($SMP),' ',strtoupper($SM),'<br></h3></th>
                    <th class="tg-83d4" colspan="3">PROMEDIO ',$PromedioSemestre,'</th>
                  </tr>
                  <tr>
                    <th class="tg-acum" colspan="6"><b>ACUMULACIÓN CRÉDITOS</b>: ',$CRAcumulados,'</th>
                  </tr>
                  <tr>
                    <th class="tg-83d4" colspan="1"><b>MATRICULADOS:</b> ',$CRMatriculados,'</th>
                    <th class="tg-83d4" colspan="1"><b>APROBADOS</b></th>
                    <th class="tg-us36" colspan="1">',$CRAprobados,'</th>
                    <th class="tg-83d4" colspan="1"><b>NO APROBADOS</b></th>
                    <th class="tg-us36" colspan="2">',$CRNAprobados,'</th>
                  </tr>
                  <tr>
                    <td class="tg-us36"><b>CÓDIGO</b></td>
                    <td class="tg-us36"><b>ASIGNATURA</b></td>
                    <td class="tg-us36"><b>CRÉDITOS</b></td>
                    <td class="tg-us36"><b>NOTA</b></td>
                    <td class="tg-us36"><b>ESTADO</b></td>
                    <td class="tg-us36"><b>DETALLE</b></td>
                  </tr>';
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
                      echo "<br><br>";



                }//Cierra do

                while ($DatosProgramaHistorial=mysqli_fetch_array($EjecutarListados));
                echo "</table></center>";
                }
              else{
                echo "<p>No hay registros de periodos académicos cursados del programa seleccionado</p>";
              }

        }
        //echo $Data;
        if(empty($Package)){
          //Sginifica que el paquete de datos vino vacío pero puede haber 2 razones.
          //Error de datos en DB
          //El estudiante eligió cargar un solo programa
          if($PROGC!="ALL"){
            //Estudiante SÍ eligió cargar un solo programa
            echo $Periodos_Cantidad;
          }
          else {
            echo "<p>Error de datos. <br><i>Umc_DivSys_Pe_AkaOps_Cert:General:_NPULL_DATA_PKG</i></p>";
          }
        }
        for($p=0; $p<=(count($Package)-1); $p++){
          //Imprimir datos del programa por periodo encontrado
          echo $Package[$p];
        }

    ?>

      <!-- FOOTER -->
      <br><br>
      <p>Para efectos de verificación de genuinidad de este documento, puede consultarse en la página web de la universidad en la sección Documentación>Base de datos pública utilizando el código PIN: <?php echo $PINCERT; ?>.</p>
      <p>Este certificado de estudios consta el hecho del paso inactivo o activo del estudiante en cuestión en el programa académico respectivo.</p>
      <p>Elaborado automáticamente por el sistema.</p><br>

      <p>Universidad Falsa</p>
      <p>2018</p>

<?php
/*
Desactivar código PIN
*/

  $disablePIN = "UPDATE iscetex_pines SET STATE=1 WHERE ID='$ID' AND PIN='$PINCERT'";
  mysqli_query($link, $disablePIN);


?>
    </center>
    </div>
    <div class="art-layout-cell" style="width: 0%" ></div>
    </div>
</div>

</body></html>

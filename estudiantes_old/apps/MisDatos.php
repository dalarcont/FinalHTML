<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */


session_start();
$ID=$_SESSION['ID'];
$PROGC=$_SESSION['PROGC'];
require 'divsys/umcdssictrl.php';

#Obtener datos para constancia de estudios
$getData="SELECT * FROM gendata WHERE ID='$ID' AND PROGC='$PROGC'";
$goData=mysqli_query($link, $getData);
$rowData=mysqli_fetch_array($goData);

$PIN=$rowData['PIN'];
$NAME=$rowData['NOM'];
//Directiva ordenó retirar el muestreo de e-mail ya que es inútil
//$EMAIL=$rowData['EMAIL'];
$ICFES=$rowData['ICFES'];
$PROGC=$rowData['PROGC'];
$ASIST=$rowData['ASIST'];
$PUNT=$rowData['PUNT'];
$REFPAGO=$rowData['REFPAGO'];
require 'divsys/DatosProgramas.php';

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
                $Mensaje="primer";
            }
            else
            {
                $Mensaje="segundo y último";
            }
        break;
        
        case 'FACTEC':
        #Facultad Tecnologías
            $CR_M1=$CR[0];  $CR_M2=$CR_M1+$CR[1];   $CR_M3=$CR_M2+$CR[2];
            $CR_M4=$CR_M3+$CR[3];   $CR_M5=$CR_M4+$CR[4];
            if($CR_S<=$CR_M1){
                $Mensaje="primer";
            }
            else
            {
                if($CR_S<=$CR_M2){
                    $Mensaje="segundo";
                }
                else
                {
                    if($CR_S<=$CR_M3){
                        $Mensaje="tercer";
                    }
                    else
                    {
                        if($CR_S<=$CR_M4){
                            $Mensaje="cuarto";
                        }
                        else
                        {
                                $Mensaje="quinto y último";
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
                $Mensaje="primer";
            }
            else
            {
                if($CR_S<=$CR_M2){
                    $Mensaje="segundo";
                }
                else
                {
                    if($CR_S<=$CR_M3){
                        $Mensaje="tercer";
                    }
                    else
                    {
                        if($CR_S<=$CR_M4){
                            $Mensaje="cuarto";
                        }
                        else
                        {
                            if($CR_S<=$CR_M5){
                                $Mensaje="quinto";
                            }
                            else
                            {
                                if($CR_S<=$CR_M6){
                                    $Mensaje="sexto";
                                }
                                else
                                {
                                    $Mensaje="séptimo y último";
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
                $Mensaje="primer";
            }
            else
            {
                if($CR_S<=$CR_M2){
                    $Mensaje="segundo";
                }
                else
                {
                    if($CR_S<=$CR_M3){
                        $Mensaje="tercer";
                    }
                    else
                    {
                        $Mensaje="cuarto y último";
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
#Cargar número de materias activas
    $NumeroMateriasAct="SELECT * FROM platformdata WHERE ID='$ID' AND PARAM IN('A') AND PROGC='$PROGC'";
    $MatA=mysqli_query($link, $NumeroMateriasAct);
    $MatRow=mysqli_fetch_array($MatA);
    $MatACont=mysqli_num_rows($MatA);

#Cargar número de materias aprobadas
    $NumeroMateriasOK="SELECT * FROM platformdata WHERE ID='$ID' AND PARAM IN('OK') AND PROGC='$PROGC'";
    $MatOK=mysqli_query($link, $NumeroMateriasOK);
    $MatRow=mysqli_fetch_array($MatOK);
    $MatContOK=mysqli_num_rows($MatOK);

#Cargar número de materias canceladas
    $NumeroMateriasNO="SELECT * FROM platformdata WHERE ID='$ID' AND PARAM IN('C') AND PROGC='$PROGC'";
    $MatNO=mysqli_query($link, $NumeroMateriasNO);
    $MatRow=mysqli_fetch_array($MatNO);
    $MatContNO=mysqli_num_rows($MatNO);

#Cargar número de créditos acumulados
    $TotalCreditosAcumulados="SELECT SUM(CR) as TotalCreditos FROM platformdata WHERE ID='$ID' AND PARAM IN('OK') AND PROGC='$PROGC'";
            $ResultadoPuntajes = mysqli_query($link, $TotalCreditosAcumulados);   
            $rowCreditos = mysqli_fetch_array($ResultadoPuntajes, MYSQL_ASSOC);
            $DataCreditos=$rowCreditos["TotalCreditos"];            


#Sumatoria de Notas definitivas * crédito correspondiente
    $SumatoriaDefinitivas=0;
    $PrepareSumNotas="SELECT * FROM platformdata WHERE ID='$ID' AND PARAM IN('OK') AND PROGC='$PROGC'";  
    $TraerNotas=mysqli_query($link, $PrepareSumNotas);
    if ($row=mysqli_fetch_array($TraerNotas)){
        /* Ignora esta parte */
    do{
        $MATCODE=$row['MAT'];
        require 'divsys/Materias.php';
        require 'divsys/MateriasPerCredits.php';
        //Calcular Definitiva Obtenida * Crédito académico correspondiente
        $Calculo=$row['DEF']*$Creditos;
        $SumatoriaDefinitivas+=$Calculo;
        }
        while ($row=mysqli_fetch_array($TraerNotas));
    }
    $PromGeneralCalcular=PromedioGeneral($SumatoriaDefinitivas,$DataCreditos);
    $PromedioGeneral=MostrarFlotante($PromGeneralCalcular);
    echo '

    <h6>MIS DATOS</h6>

    <p> Nombre estudiante: <b>'; echo $NAME; echo '</b></p>
    <p> Identificación: <b>'; echo $ID; echo '</b></p>
    <p> Puntaje de ingreso a la unimísera: <b>'; echo $ICFES; echo '</b></p>
    <p> Programa académico: <b>'; echo $Facultad; echo " : ",$NombrePrograma; echo '</b></p>
    <p> Código estudiante: <b>'; echo $rowData['IDUM']; echo '</b></p>
    <p> Promedio general del programa acumulado: <b>'; echo $PromedioGeneral; echo '</b></p>
    <p> Créditos académicos aprobados acumulados: <b>'; echo $DataCreditos; /* SE DESACTIVÓ EL APARTADO DE MUESTREO DE TOTALIDAD DE CRÉDITOS DEL PROGRAMA YA QUE VARIA POR LA MATRÍCULA DE LA ELECTIVA Y LA OPTATIVA 
    echo '</b> de un total de <b>', $TotalCreditosPrograma, '</b></p>*/
    echo '<p>Actualmente con la cantidad de créditos acumulados y aprobados que tienes, te encuentras posicionado en el ',CalcularPosicionModular($FAC,$CreditosModulo,$DataCreditos),' módulo.';



    printf("<p>Actualmente cuenta con un número de <b>%d</b> asignaturas <b>activas</b> y en curso. </p> \n", $MatACont);
    mysqli_free_result($MatA);

    printf("<p>Actualmente cuenta con un número de <b>%d</b> asignatura(s) <b>aprobada(s)</b>. </p> \n", $MatContOK);
    mysqli_free_result($MatOK);

    printf("<p>Actualmente cuenta con un número de <b>%d</b> asignatura(s) <b>cancelada(s)</b>. </p> \n", $MatContNO);
    mysqli_free_result($MatNO); 

    echo '<p> Código usado pago matrícula: <b>'; echo $REFPAGO; echo '</b></p>


    ';

            ?>
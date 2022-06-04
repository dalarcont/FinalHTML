<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */


session_start();
$ID=$_SESSION['ID'];
$PROGC=$_SESSION['PROGC'];
require 'divsys/umcdssictrl.php';


require 'divsys/DatosProgramas.php';

#Traer listado de compañeros

#Estilo de tabla
echo '<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#999;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-amwm{font-weight:bold;text-align:center;vertical-align:top}
</style>
';

//Aplicación de listado hombres

$LISTAR="SELECT * FROM akadata WHERE PROGC IN('$PROGC') AND STATE IN('1') AND GEN IN('H') AND ID NOT LIKE '$ID'";  
            $OPERAR=mysqli_query($link, $LISTAR);
            if ($row=mysqli_fetch_array($OPERAR)){
                //lisado             
                echo '<center><table class="tg">
								  <tr>
								    <th class="tg-amwm"  colspan="2">LISTADO DE COMPAÑEROS DEL PROGRAMA '; echo $NombrePrograma; echo '</th>
								  </tr>
								  <tr>
								    <td class="tg-amwm">NOMBRE</td>
                                    <td class="tg-amwm">CÓDIGO DE ESTUDIANTE</td>
								  </tr>
								  ';

                do{
                    echo '
                        <tr>
						    <td class="tg-baqh">'; echo $row['NOM']; echo '</td>
                            <td class="tg-baqh">'; echo $row['IDUM']; echo '</td>
						  </tr>
    
                        ';}//CERRAR Consulta de inscritos

                while ($row=mysqli_fetch_array($OPERAR));
                echo "</table></center><br>\n";
                $Companeros="SELECT * FROM akadata WHERE PROGC IN('$PROGC') AND STATE IN('1') AND GEN IN('H') AND ID NOT LIKE '$ID'";
                $HombresCantidad=mysqli_query($link, $Companeros);
                $CantidadH=mysqli_num_rows($HombresCantidad);
                printf("<p><b>Tienes %d compañero(s) de programa.</p> \n", $CantidadH);
                    mysqli_free_result($HombresCantidad);
                echo "<br> --- --- --- --- --- <br>";
            }
            
            else{echo '<br><big><i><b> No hay compañeros estudiando este programa... </b></i></big><br>';
            echo '---';
                    echo '<br> --- --- --- --- --- <br>';} 

//Aplicación de listado homres

$LISTAR="SELECT * FROM akadata WHERE PROGC IN('$PROGC') AND STATE IN('1') AND GEN IN('M') AND ID NOT LIKE '$ID'";
            $OPERAR=mysqli_query($link, $LISTAR);
            if ($row=mysqli_fetch_array($OPERAR)){
                //lisado             
                echo '<center><table class="tg">
								  <tr>
								    <th class="tg-amwm"  colspan="2">LISTADO DE COMPAÑERAS DEL PROGRAMA '; echo $NombrePrograma; echo '</th>
								  </tr>
								  <tr>
								    <td class="tg-amwm">NOMBRE</td>
                                    <td class="tg-amwm">CÓDIGO DE ESTUDIANTE</td>
								  </tr>
								  ';

                do{
                    echo '
                        <tr>
						    <td class="tg-baqh">'; echo $row['NOM']; echo '</td>
                            <td class="tg-baqh">'; echo $row['IDUM']; echo '</td>
						  </tr>
    
                        ';}//CERRAR Consulta de inscritos

                while ($row=mysqli_fetch_array($OPERAR));
                echo "</table></center><br>\n";
                $Companeras="SELECT * FROM akadata WHERE PROGC IN('$PROGC') AND STATE IN('1') AND GEN IN('M') AND ID NOT LIKE '$ID'";
                $MujeresCantidad=mysqli_query($link, $Companeras);
                $CantidadM=mysqli_num_rows($MujeresCantidad);
                printf("<p><b>Tienes %d compañera(s) de programa.</p> \n", $CantidadM);
                    mysqli_free_result($MujeresCantidad);
                echo "<br> --- --- --- --- --- <br>";
            }
            
            else{echo '<br><big><i><b> No hay compañeras estudiando este programa... </b></i></big><br>';
            echo '---';
                    echo '<br> --- --- --- --- --- <br>';} 


            ?>
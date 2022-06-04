<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
#Cargar los datos de las asignaturas por asignatura
session_start();
$PROGC=$_SESSION['PROGC'];
$ID=$_SESSION['ID'];
require '../../divsys/umcdssictrl.php';
require '../../divsys/DatosProgramas.php';


echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script>
function callEstProg() {
	var EstProg = $('#EstProgList').val();
	var DataNull = 12345;
	if (EstProg != '') {
		$.post('apps/fx_Historial/HistorialApp.php', {EstProg: EstProg}, function(mensaje) {
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
    <p>Seleccione el programa acacémico</p>
    <form id='getDataProg1' method='POST'>
    <select style='width:100%' id='EstProgList' onchange='callEstProg();'>";
    //Imprimir la opción predeterminada
    echo '<option value="null">Seleccionar programa académico</option>';


 //$PrevProgC=$PROGC;

 	$Programas = "SELECT * FROM gendata WHERE ID='$ID'";
 	$execut = mysqli_query($link, $Programas);
 	$Programas_arr = mysqli_fetch_array($execut);

 	$Programas_arr_JSON = json_decode($Programas_arr['PROGC']);

 	if(count($Programas_arr_JSON)>0){
 		//Estudiante culminó por lo menos un semestre en algún programa
	 	for($i = 0; $i<=(count($Programas_arr_JSON)-1); $i++){
 		$PROGC=$Programas_arr_JSON[$i];
 		require '../../divsys/DatosProgramas.php';
		echo "<option value='",$PROGC,"'>",$Facultad," - ",$CodigoNIE,"-",$VersionPensum,"-",$Plan," - ",$NombrePrograma,"</option>";
 		}
 		
 	}
 	else
 	{
		//El estudiante no tiene culimnado por lo menos 1 semestre en algún programa
 		echo "<option value='null'>",$ID,"No hay programas académicos adscritos al estudiante o no se ha concluido un primer periodo</option>";
 	}



/*

    $LISTAR="SELECT * FROM akahistory WHERE ID='$ID'";
    $OPERAR=mysqli_query($link, $LISTAR);
    $row=mysqli_fetch_array($OPERAR);

    if (!empty($row)){
	        //Mostrar opción predeterminada.
	    	echo '<option value="null">Seleccionar programa académico</option>';
	    	$EvitarRepetir=0; $EvitarRepetir2="";
		do{
			if($EvitarRepetir2==$row['PROGC']){
				// mostrar de nuevo un registro de semestre de programa
			}
			else
			{
				$PROGC=$row['PROGC'];
				require '../../divsys/DatosProgramas.php';
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
      	echo "<option value='null'>No hay programas académicos adscritos al estudiante o no se ha concluido un primer periodo</option>";
    }

    */
echo "
    </select>
    </form>
    <br>
    <div id='resForm'>
    <!-- --umc:getData(akaApps/Historial/MostrarHistorial/Estudiante_%_ESTID_%) -html_path_print(return_on:_this_) -no_reload --->
    </div>

</center>";


?>

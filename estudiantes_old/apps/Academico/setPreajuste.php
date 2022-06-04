<?php 
/* Universidad Falsa - División Superior de Sistemas Informáticos */
session_start();
$PROGC=$_SESSION['PROGC'];
$ID=$_SESSION['ID'];
require '../../divsys/umcdssictrl.php';
$MATCODE=$_POST['MATCODE'];
$Orden=$_POST['Orden'];
require '../../divsys/Materias.php';

if (empty($ID)) {
    #No hay identificación de estudiante por lo tanto se detiene el proceso
    echo "<script>
                            alertify.alert('Error de identificación', 'No estás identificado correctamente, ingresa de nuevo al portal estudiantil.', function(){ alertify.success('Limpiando datos');window.close(); });
                            </script>";

}
?>

<link rel="stylesheet" href="css/alertify.css" />
 
<link rel="stylesheet" href="css/themes/bootstrap.css" />
 
<script src="alertify.js"></script>

<?php
$AjustesAsignatura="SELECT * FROM platformdata WHERE ID='$ID' AND MAT='$MATCODE'";
$doAA=mysqli_query($link, $AjustesAsignatura);
$rowAA=mysqli_fetch_array($doAA);

if ($pe_mat_kill=='1') {
	if ($Orden=='ADICIONAR') {
	#Usuario desea pre-matricular una asignatura
        		if($rowAA['MAT']=='$MATCODE') {
                #Asignatura ya pre-matriculada, no se puede re-pre-matrícular
                echo "<script>
                alertify.alert('Preajuste de matrícula', 'La asignatura <b>", $CodigoLiteral, " - ", $MateriaNombre, "</b> <br /> Ya está pre-matriculada. <br /> Únicamente puedes retirarla.');
                </script>";                           
		        }
		        else
		        {
		        	//Verficar si la asignatura pertenece a cosa de conjuntos
		            switch ($PROGC) {
		            	case 'CREDES':
		            		require 'PreajusteMatricula/Credes_Asignaturas.php';
		            		break;
		            	
		            	default:
		            		echo "<script>
                            alertify.alert('Preajuste de matrícula', 'Error en la definición de código de programa para operaciones de matrícula.', function(){ alertify.success('Expulsando');window.close(); });
                            </script>";
		            		break;
		            }
		        }
        	

	}
	else
	{
			if ($Orden=='REMOVER') {
				//Verficar si la asignatura pertenece a cosa de conjuntos
		            switch ($PROGC) {
		            	case 'CREDES':
		            		require 'PreajusteMatricula/Credes_AsignaturasRm.php';
		            		break;
		            	
		            	default:
		            		echo "<script>
                            alertify.alert('Preajuste de matrícula', 'Error en la definición de código de programa para operaciones de matrícula.', function(){ alertify.success('Expulsando');window.close(); });
                            </script>";
		            		break;
		            }
			}
			else
			{  
				echo "<script>
							alertify.alert('Preajuste de matrícula', 'No se recibió orden, puede ser un error del sistema, intente de nuevo.', function(){ alertify.success('Recargando datos');window.location.reload(); });
							</script>";
			}
	}
}
else
{
	echo "<script>
							alertify.alert('Preajuste de matrícula', 'Las operaciones de ajuste de matrícula están desactivadas.', function(){ alertify.success('Recargando datos');window.close(); });
							</script>";
}



?>
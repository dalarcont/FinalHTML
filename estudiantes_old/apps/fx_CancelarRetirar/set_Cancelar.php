<?php
session_start();
$PROGC=$_SESSION['PROGC'];
$ID=$_POST['EstId'];
$PIN=$_POST['Pincode'];
require '../../divsys/umcdssictrl.php';


$ComprobarPin="SELECT * FROM iscetex_pines WHERE ID='$ID' AND PIN='$PIN'";
$do1=mysqli_query($link, $ComprobarPin);
$Pack1=mysqli_fetch_array($do1);

$CodigoCancelar=$Pack1['PIN'];
$CodigoTipo=$Pack1['TYPE'];
if($CodigoCancelar===$PIN){
	//Comprobar el tipo de código PIN que se referencie a cancelación de semestre
	if($CodigoTipo=='87'){
		$Comprobado = true ;
	}
	else{
		$Comprobado = false ;
	}
}
else
{
	$Comprobado=false;
}


if($Comprobado==true){

	//Cancelar semestre hoja general
	$pre_unset_PeriodoAcademico="SELECT * FROM gendata  WHERE ID='$ID'";
	$do_pre=mysqli_query($link, $pre_unset_PeriodoAcademico);
	$pack_pre=mysqli_fetch_array($do_pre);
	$Pack_Programas=json_decode($pack_pre['PROGC']); //Traer el listado de programas del estudiante
	$Pack_ProgramasEstado=json_decode($pack_pre['PROGCSTATE']); //Los estados académicos de los programas del estudiante

	//Buscar en la lista el programa académico a cancelar el periodo y de acuerdo a éste desactivar su estado
	for($i=0; $i<=(count($Pack_Programas)-1); $i++){
		if($Pack_Programas[$i]==$PROGC){
			$Pack_ProgramasEstado[$i]=0;
		}
	}
		//Aplicar la configuración
		$new_Pack_Programas_Estado=json_encode($Pack_ProgramasEstado);
		$unset_PeriodoAcademico="UPDATE gendata SET PROGCSTATE='$new_Pack_Programas_Estado' WHERE ID='$ID'";
		$do_unset=mysqli_query($link, $unset_PeriodoAcademico);

	//Desactivar asignaturas
		$unset_Asignaturas="UPDATE platformdata SET ASIST=0,PUNT=0,PARAM='NM',ADDRM='',PARAM2='',DEF='',PARAM3='',PARCIALES='[]',PORCENTAJES='[]',FECHAS='[]' WHERE ID='$ID' AND PROGC='$PROGC' AND PARAM='A'";
		$do_unset_A=mysqli_query($link, $unset_Asignaturas);

	//Desactivar hoja academica del periodo
		$unset_Academica="DELETE FROM akadata WHERE ID='$ID' AND PROGC='$PROGC'";
		$do_unset_Ak=mysqli_query($link, $unset_Academica);

	echo "<script>alertify.alert('Cancelación de semestre', 'Se ha ejecutado exitosamente la cancelación del semestre actual ",$SMActual,".', function(){ alertify.success('Limpiando datos');location.href='index.php'; });</script>";
}
else{
	echo "<script>alertify.alert('Cancelación de semestre','El PIN de cancelación de semestre no es válido.');</script>";
}

?>

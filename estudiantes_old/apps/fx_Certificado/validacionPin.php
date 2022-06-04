<?php
session_start();
$ID=$_SESSION['ID'];
$PIN=$_POST['PIN'];
$_SESSION['PINCERT']=$PIN;
require'../../divsys/umcdssictrl.php';
/*Archivo para indicar a ProcesoAcademico qué plan de estudios debe mostrar */






$chkSql = "SELECT * FROM iscetex_pines WHERE ID='$ID' AND PIN='$PIN'";
$do_1=mysqli_query($link, $chkSql);
if($do_1){
	$pin_arr=mysqli_fetch_array($do_1);


	if(($pin_arr['PIN']==$PIN) && ($pin_arr['TYPE']=='83')){
		//Existe pin
		if($pin_arr['STATUS']==0){
			//Pin sin usar
			//echo "<script>alert('El pin ",$_POST['PIN']," existe y se puede usar');</script>";
			echo "<script>document.getElementById('Msg_pin').innerHTML = '<b>Código PIN de certificado de estudios válido para uso.</b>';  document.getElementById('letChk').style.display = 'none'; document.getElementById('PinCode').style.display = 'none';</script>";

			echo "<br><button class='art-button' onclick='MostrarProcesoAcademico()'>Generar certificado</button>";
		}
		else{
			//Pin usado
			echo "<script>document.getElementById('Msg_pin').innerHTML = '<b>Código PIN de certificado de estudios ya fue usado.</b>';</script>";
		}
	}
	else
	{
		//no existe
		echo "<script>document.getElementById('Msg_pin').innerHTML = '<b>Código PIN de certificado de estudios no existe.</b>';</script>";
	}
}
else
{
	echo "<script>document.getElementById('Msg_pin').innerHTML = '<b>ERROR: No se puede realizar la verificación del código PIN.</b>';</script>";
}

?>

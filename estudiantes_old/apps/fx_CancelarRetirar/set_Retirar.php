<?php
session_start();
$PROGC=$_SESSION['PROGC'];
$ID=$_POST['EstId'];
$NAME = $_SESSION['NAME'];
//$PIN=$_POST['Pincode'];
require '../../divsys/umcdssictrl.php';


//Querys

	$unset_akadata = "DELETE FROM akadata WHERE ID='$ID'";
	$unset_akahistory = "DELETE FROM akahistory WHERE ID='$ID'";
	$unset_akatickets = "DELETE FROM akatickets WHERE ID='$ID'";
	$unset_app1ins = "DELETE FROM app1ins WHERE ID='$ID'";
	$unset_app3ins = "DELETE FROM app4ins WHERE ID='$ID'";
	$unset_app6chk = "DELETE FROM app6chk WHERE ID='$ID'";
	$unset_app6dl = "DELETE FROM app6dl WHERE ID='$ID'";
	$unset_datapub = "DELETE FROM datapub WHERE ID='$ID'";
	$unset_gendata = "DELETE FROM gendata WHERE ID='$ID'";
	$unset_insdata = "DELETE FROM insdata WHERE ID='$ID'";
	$unset_iscetex_history = "DELETE FROM iscetex_history WHERE ID='$ID'";
	$unset_iscetex_pines = "DELETE FROM iscetex_pines WHERE ID='$ID'";
	$unset_platformdata = "DELETE FROM platformdata WHERE ID='$ID'";
	$unset_platformusers = "DELETE FROM platformusers WHERE ID='$ID'";
	$unset_priv_egresados = "DELETE FROM priv_egresados WHERE ID='$ID'";
	$unset_publicpqr = "DELETE FROM publicpqr WHERE ID='$ID'";
	$unset_votacionesumc = "DELETE FROM votacionesumc WHERE ID='$ID'";
/*

	$SQL.= "DELETE FROM akadata WHERE ID='$ID'";
	$SQL.= "DELETE FROM akahistory WHERE ID='$ID'";
	$SQL.= "DELETE FROM akatickets WHERE ID='$ID'";
	$SQL.= "DELETE FROM app1ins WHERE ID='$ID'";
	$SQL.= "DELETE FROM app4ins WHERE ID='$ID'";
	$SQL.= "DELETE FROM app6chk WHERE ID='$ID'";
	$SQL.= "DELETE FROM app6dl WHERE ID='$ID'";
	$SQL.= "DELETE FROM datapub WHERE ID='$ID'";
	$SQL.= "DELETE FROM gendata WHERE ID='$ID'";
	$SQL.= "DELETE FROM insdata WHERE ID='$ID'";
	$SQL.= "DELETE FROM iscetex_history WHERE ID='$ID'";
	$SQL.= "DELETE FROM iscetex_pines WHERE ID='$ID'";
	$SQL.= "DELETE FROM platformdata WHERE ID='$ID'";
	$SQL.= "DELETE FROM platformusers WHERE ID='$ID'";
	$SQL.= "DELETE FROM priv_egresados WHERE ID='$ID'";
	$SQL.= "DELETE FROM publicpqr WHERE ID='$ID'";
	$SQL.= "DELETE FROM votacionesumc WHERE ID='$ID'";

	mysqli_query($link, $SQL);*/
//Do q$do1){echo "ERROR SQL ok";}eryselse{echo "error<br>";}

	$do1 = mysqli_query($link, $unset_akadata);
		//if($do1){echo "ok";}else{echo "error<br>";}

	$do2 = mysqli_query($link, $unset_akahistory);
		//if($do2){echo "$do3 ok";}else{echo "error<br>";}

	$do3 = mysqli_query($link, $unset_akatickets);
		//if($do3){echo "$do4 ok";}else{echo "error<br>";}

	$do4 = mysqli_query($link, $unset_app1ins);
		//if($do4){echo "$do5 ok";}else{echo "error<br>";}

	$do5 = mysqli_query($link, $unset_app3ins);
		//if($do5){echo "$do6 ok";}else{echo "error<br>";}

	$do6 = mysqli_query($link, $unset_app6chk);
		//if($do6){echo "$do7 ok";}else{echo "error<br>";}

	$do7 = mysqli_query($link, $unset_app6dl);
		//if($do7){echo "$do8 ok";}else{echo "error<br>";}

	$do8 = mysqli_query($link, $unset_datapub);
		//if($do8){echo "$do9 ok";}else{echo "error<br>";}

	$do9 = mysqli_query($link, $unset_gendata);
		//if($do9){echo "ERROR SQL ok";}else{echo "error<br>";}

	$do10 = mysqli_query($link, $unset_insdata);
		//if($do10){echo "ERROR SQL ok";}else{echo "error<br>";}

	$do11 = mysqli_query($link, $unset_iscetex_history);
		//if($do11){echo "ERROR SQL ok";}else{echo "error<br>";}

	$do12 = mysqli_query($link, $unset_iscetex_pines);
		//if($do12){echo "ERROR SQL ok";}else{echo "error<br>";}

	$do13 = mysqli_query($link, $unset_platformdata);
		//if($do13){echo "ERROR SQL ok";}else{echo "error<br>";}

	$do14 = mysqli_query($link, $unset_platformusers);
		//if($do14){echo "ERROR SQL ok";}else{echo "error<br>";}

	$do15 = mysqli_query($link, $unset_priv_egresados);
		//if($do15){echo "ERROR SQL ok";}else{echo "error<br>";}

	$do16 = mysqli_query($link, $unset_publicpqr);
		//if($do16){echo "ERROR SQL ok";}else{echo "error<br>";}

	$do17 = mysqli_query($link, $unset_votacionesumc);
		//if($do17){echo "ERROR SQL ok";}else{echo "error<br>";}

	echo "<script>alertify.alert('Retiro definitivo', 'Se ha ejecutado exitosamente el retiro definitivo, ejecutado en el periodo ",$SMActual,". por usuario/a: ",$NAME,"<br/><br/><big>GRACIAS POR HABER SIDO PARTE DE LA FAMILIA UNIMÍSERA!</big>', function(){ alertify.success('Limpiando datos');location.href='index.php'; });</script>";

?>

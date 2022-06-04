<?php
 
// get the q parameter from URL
session_start();
$q = $_REQUEST["q"];

$PROGC=$_SESSION['PROGC'];
$ID=$_SESSION['ID'];
require '../../divsys/DatosProgramas.php';
require '../../divsys/umcdssictrl.php';


// lookup all hints from array if $q is different from ""
if($q!=$PROGC && $q!='0'){
require 'AjusteMatriculaO/Contenidos/PlanFacMTI.php';
}
else
{
    if($q=='0'){
        
    //return 0;
    }
    else
    {
        echo "<br><h3>No puedes matricular como optativa alguna asignatura del programa que cursas.</h3> ";
    }
}


?> 
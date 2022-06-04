<?php

//echo "La DSSI se encuentra realizando labores de diseño y planeación del portal de solicitudes estudiantiles <br>";
//echo rand(0,1088333702);


echo "<script>
function readyRequest(){
   var Option = $('#OptList').val();
   //alertify.alert('Opción seleccionada',Option);

   switch(Option){
      case '42': alertify.alert('Opción seleccionada','Habilitar asignatura'); break;
      case '72': alertify.alert('Opción seleccionada','Suficiencia asignatura'); break;
      case '62': alertify.alert('Opción seleccionada','Optativa asignatura'); break;
      case '227': alertify.alert('Opción seleccionada','Curso asignatura sin requisitos'); break;
      case '82': alertify.alert('Opción seleccionada','Validar asignaturas'); break;
      case '47': alertify.alert('Opción seleccionada','Grado Pregrado'); break;
      case '46': alertify.alert('Opción seleccionada','Grado Postgrado'); break;
      case '74': alertify.alert('Opción seleccionada','Reingreso'); break;
      case '24': alertify.alert('Opción seleccionada','Cambio de programa'); break;
      case '22': alertify.alert('Opción seleccionada','Adicionar más crédito'); break;
      default: break;
   }



}
</script>";
echo "<h3>Portal de solicitudes estudiantiles</h3>";
echo "<p>Seleccione la solicitud deseada:</p>

   <select id='OptList' name='OptList' onchange='readyRequest()'>
      <option value='null'>--- Seleccionar solicitud ---</option>
      <option value='42'>  Solicitud:Academia:Asignaturas:Academia::: Habilitar asignatura </option>
      <option value='72'>  Solicitud:Academia:Asignaturas:Academia::: Suficiencia asignatura </option>
      <option value='62'>  Solicitud:Academia:Asignaturas:Academia::: Optativa asignatura </option>
      <option value='227'> Solicitud:Academia:Asignaturas:Academia::: Curso asignatura sin requisitos </option>
      <option value='82'>  Solicitud:Academia:Asignaturas:Academia::: Validar asignaturas </option>
      <option value='47'>  Solicitud:Academia:Programa::: Grado Pregrado </option>
      <option value='46'>  Solicitud:Academia:Programa::: Grado Postgrado </option>
      <option value='74'>  Solicitud:Academia:Programa::: Reingreso </option>
      <option value='24'>  Solicitud:Academia:Programa::: Cambio de programa </option>
      <option value='22'>  Solicitud:Academia:Programa::: Adicionar más créditos</option>
   </select>";


?>

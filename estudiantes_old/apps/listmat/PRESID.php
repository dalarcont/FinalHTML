<!-- Universidad Falsa - División Superior de Sistemas Informáticos -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="apps/jquery.form.js"></script>

    <!-- Script para submit -->
        <script type="text/javascript">
        $('document').ready(function()
        {
        $('#ListMat').ajaxForm( {
        target: '#RegistroMateria',
        success: function() {
        $('#ListadoMaterias');
        }
        });
        });
        </script>

<?php 
require 'divsys/DatosProgramas.php';
?>

<div id="ListadoMaterias">
    <form id="ListMat" name="ListMat" method="POST" action="apps/setAsistencia.php">
		<select name="MATCODE" id="ListaMaterias">
			<option value="null">Selecciona asignatura</option>
			<option style="font-weight:bold" value="null">--- MÓDULO 1 ---</option>
				<?php
					for($i=0; $i<=(count($Asignaturas[0])-1); $i++){
						$MATCODE=$Asignaturas[0][$i]; require 'OnlyLoadA.php';
					}
				?>
			<option style="font-weight:bold" value="null">--- MÓDULO 2 ---</option>
				<?php
					for($i=0; $i<=(count($Asignaturas[1])-1); $i++){
						$MATCODE=$Asignaturas[1][$i]; require 'OnlyLoadA.php';
					}
				?>
			<option style="font-weight:bold" value="null">--- MÓDULO 3 ---</option>
				<?php
					for($i=0; $i<=(count($Asignaturas[2])-1); $i++){
						$MATCODE=$Asignaturas[2][$i]; require 'OnlyLoadA.php';
					}
				?>
			<option style="font-weight:bold" value="null">--- MÓDULO 4 ---</option>
				<?php
					for($i=0; $i<=(count($Asignaturas[3])-1); $i++){
						$MATCODE=$Asignaturas[3][$i]; require 'OnlyLoadA.php';
					}
				?>
			<option style="font-weight:bold" value="null">--- MÓDULO 5 ---</option>
				<?php
					for($i=0; $i<=(count($Asignaturas[4])-1); $i++){
						$MATCODE=$Asignaturas[4][$i]; require 'OnlyLoadA.php';
					}
				?>
			<option style="font-weight:bold" value="null">--- MÓDULO 6 ---</option>
				<?php
					for($i=0; $i<=(count($Asignaturas[5])-1); $i++){
						$MATCODE=$Asignaturas[5][$i]; require 'OnlyLoadA.php';
					}
				?>
			<option style="font-weight:bold" value="null">--- MÓDULO 7 ---</option>
				<?php
					for($i=0; $i<=(count($Asignaturas[6])-1); $i++){
						$MATCODE=$Asignaturas[6][$i]; require 'OnlyLoadA.php';
					}
				?>
				<!-- Código para agregar materia electiva al listado en caso de que exista, en caso de no existir, se mostrará IPR743 -->
				<?php 

				/**************************************************************************************************************/
				/* Es importante que en la siguiente sentencia establezca MAT= Codigo numérico de la asignatura base electiva */
				/**************************************************************************************************************/
				require 'divsys/umcdssictrl.php';
				$ExistenciaElectiva="SELECT * FROM platformdata WHERE ID='$ID' AND PROGC='$PROGC' AND PARAM='A' AND PARAM3='E'";
				$doExistenciaElectiva=mysqli_query($link, $ExistenciaElectiva);
				$rowElectiva=mysqli_fetch_array($doExistenciaElectiva);

				if(!empty($MATCODE=$rowElectiva['MAT'])){
				require 'divsys/Materias.php';

				echo '<option style="font-weight:bold" value="null">--- ELECTIVA ---</option>
				<option value="',$MATCODE,'">',$CodigoLiteral,' - ',$MateriaNombre,'</option>';
				}
				
						
				?>
		<!-- ESPACIO PARA OPTATIVA -->
				<?php require 'LoadOpta.php'; ?>
		</select>
		<p></p>
		 <input type="submit" class="art-button" value="Registrar">
	</form>
</div>
	<br>
	<div id="RegistroMateria"></div>


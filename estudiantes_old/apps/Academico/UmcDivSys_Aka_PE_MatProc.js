/*
	Universidad Falsa
	División Superior de Sistemas Informáticos
*/

/*
	Scripts ProcesoMatricula
*/


		//Height
		$(document).ready(function($){
			//Read window's heiht
			var v_alto = $(window).height();
			//184px -> ModInfo
			//78px -> ModMatriculadas
			//23 -> ModHeader
			var FinalHeight = v_alto - 285 ;
			//Set the height
			$("#ContenedorPlan").height(FinalHeight);
		});
		//Width
		$(document).ready(function($){
			//Read window's width
			var v_ancho = $(window).width();
			//405px it's the size of BoxAsignatura && BtnActionAsignatura
			var FinalWidth = v_ancho - 455;
			//Set the width on the information fields
			$("#ModInfoAsignaturaNombre").width(FinalWidth);	//ModInfoAsignaturaNombre
			$("#ModInfoAsignaturaEstado").width(FinalWidth);	//ModInfoAsignaturaEstado
			$("#ModInfoAsignaturaDetalle").width(FinalWidth);	//ModInfoAsignaturaDetalle
		});

	//Cancelar
	function matricula_validarCancelacion(){
		var MatCodeN = $("#MATCODE").val();
		if(MatCodeN != '' || MatCodeN == null){
			$.post('matricula_validarCancelacion.php', {MatCodeN: MatCodeN}, function(sucess){
			$("#ResultadoAjuste").html(sucess);
			});
		}else{
			$("#ResultadoAjuste").html('');
		};
	}
	//Matricular
	function matricula_validarAdicion(){
		var MatCodeN = $("#MATCODE").val();
		if(MatCodeN != '' || MatCodeN == null){
			$.post('matricula_validarAdicion.php', {MatCodeN: MatCodeN}, function(sucess){
			$("#ResultadoAjuste").html(sucess);
			});
		}else{
			$("#ResultadoAjuste").html('');
		};
	}


	//Confirm rem messages
	function cancelar(){
		matricula_validarCancelacion();
		//var asignatura = $("#ModInfoAsignaturaNombre").val();
		//alertify.confirm('Operación de ajuste de matrícula: Cancelación de asignatura','Confirmas la cancelación de la asignatura <b>'+asignatura+'</b>', function(){ remAsignatura_exe() }, function(){ alertify.error('Cancelación de asignatura: <br>Estudiante detiene el proceso.')})
	}
	//Confirm add messages
	function matricular(){
		//var asignatura = $("#ModInfoAsignaturaNombre").val();
		//alertify.confirm('Operación de ajuste de matrícula: Adición de asignatura','Confirmas la adición de la asignatura <b>'+asignatura+'</b>', function(){ matricula_validarAdicion() }, function(){ alertify.error('Cancelación de asignatura: <br>Estudiante detiene el proceso.')})
		matricula_validarAdicion();
	}

	
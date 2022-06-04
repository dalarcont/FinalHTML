<?php
#Universidad Falsa
#División Superior de Sistemas Informáticos
#Datos Generales

	#Conexión a Base de datos
		#Host
			$linkdir="localhost"; //"mysql.hostinger.es";
		#Usuario
			$linkusr="universidad"; //"u958243579_root";
		#Contraseña
			$linkpss="eLzxVpaY2PABPUg"; //"6nEGRz3Hen";
		#Base de datos
			$linktbl="universidad"; //"u958243579_umc";
		#Ejecutor de conexión
			$link=mysqli_connect($linkdir,$linkusr,$linkpss,$linktbl);

#Hoja de control de habilidad e inhabilidad de aplicaciones y secciones del sitio web

#Tenga en cuenta que el valor 0=DESACTIVADO y el valor 1=ACTIVADO, el valor 2=DS-SISTEMAS EN PARO, el valor 2, no aplica para $pe_login

	#Variables generales y administrativas
		#Puntaje general de aprobación, cuando administrativo aprueba el programa a todos los estudiantes de un programa
			$PuntajeGeneralAprobacion="86";
		#Semestre actual
			$SMActual="2022-1";
			$InfoPregrado="Universidad Falsa:pregrado:$SMActual";
			$InfoPostgrado="Universidad Falsa:postgrado:$SMActual";
		#Semanas semestre actual (Variable para directiva, en portal estudiantil se entiende como semanas al número de notas parciales que se deben obtener de una asignatura)
			$Semanas="4";
		#Cantidad de notas parciales
			$CantParciales=$Semanas;
		#Semestre siguiente
			$SMNext="2022-2";
		#Valor financiero del crédito académico para Facultad Continua
			$ValorCredito=86200;
		#Mensajes generales
			#Administración desactiva función
			$msgfail="<p><big><b> Actualmente esta función no está disponible según lo establecen las directivas de la universidad. <br> Gracias. </b></big></p>";
			#Division de sistemas entra en paro
			$msgfun="<p><big><b> Lo sentimos, en este momento al servidor le place bromear con el sistema, espere hasta que éste decida funcionar de nuevo correctamente. Besos. </b></big></p>";
			#Error general
			$none="<p><big><b> Error general en el sistema, comunique este incidente a la universidad, si le da la real gana. </b></big><br></p>";

	#Inscripciones Universidad Falsa
		#Aplicativo Código PIN
			#Habilitar formulario
				$app1="1";
			#Permitir Proceso
				$app1f="1";

		#Inscripción
			#Listado Programas Pre-grado
				$app21="1";
			#Listado Programas Post-grado / Facultad Continua
				$app22="1";
			#Aviso de solicitud de datos (HabeasData)
				$app2h="1";
			#Acceso a formulario de inscripción
				$app2l="1";
			#Formulario de inscripción
				$app2="1";
			#Procesador de inscripción y fin del proceso
				$app2f="1";

		#Resultados de admisión
			#Consulta
				$app3="1";

		#Pagos de matrícula
			#Consulta código
				$app4g="1";
			#Consulta pago
				$app4c="1";

		#Códigos de estudiante
			#Consulta
				$app5idum="1";

	#Portal Estudiantil
		#Formulario  //0=NO HÁBIL //1=ESTUDIANTES  //2=PREMATRICULA
			$pe_login="1";
		#Acceso
			$pe_access="1";
		#Registro de asistencia asignaturas
			$pe_matreg="1";
		#Ver plan de estudios
			$pe_materias="1";
		#Ajuste de matrícula
			$pe_mat_kill="1";
			$PermisoCancelar = TRUE;
		#Ajuste de matrícula electiva
			$pe_mat_elect="1";
		#Ajuste de matrícula optativa
			$pe_mat_opta="1";
		#Cancelación de matrícula y retiro
			$pe_student_kill="1";
		#Calificar a la umc
			$pe_calificar_umc="1";

	#Graduaciones
		#Consulta resultado
			$gradchk="1";
		#Realizar pago
			$gradpay="1";
		#Consultar pago
			$gradpc="1";
		#Documentos de grado, consulta y descarga
			$graddoc="1";

	#Consulta pública
		$bdpcheck="1";

	#ISCETEX
		#Pago Matrícula
			$iscetex1="1";
		#Pago derechos de grado
			$iscetex2="1";
		#Consulta deuda
			$iscetex3="1";

	#Contácto staff
		#Recepción de mensajes
			$openmsg="1";
		#Consulta respuestas de mensajes
			$readansw="1";

?>

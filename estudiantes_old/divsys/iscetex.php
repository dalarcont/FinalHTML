<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
#División Superior Registro y Control
#División General Financiera
#ISCETEX

#Hoja de control de precios

/*LA FUNCIÓN DE VALORES DE PAGO ESTÁ AL FINAL*/
/*Códigos de pagos*/
function RefCodePago($ref){
	switch($ref){

	case 81:
		$Referencia="PIN: Inscripción Pregrado";
	break;

	case 82:
		$Referencia="PIN: Inscripción Postgrado";
	break;

	case 83:
		$Referencia="PIN: Certificado Estudios";
	break;

	case 84:
		$Referencia="PIN: Habilitación Asignaturas";
	break;

	case 85:
		$Referencia="PIN: Suficiencia Asignaturas";
	break;

	case 86:
		$Referencia="PIN: Cancelación de matrícula";
	break;

	case 87:
		$Referencia="PIN: Certificado de grado";
	break;

	case 89:
		$Referencia="PIN: Nueva expedición de diploma";
	break;

	default:
		$Referencia=false;
	break;

	}
	return $Referencia;
}
/*
81 Codigo PIN
82 Pin Certificados Estudios
83 Pin Certificados Grado
84 Pin Habilitación
85 Pin Suficiencia
86 Pin cancelación
89 Pin Re-expedición diploma
862## Matricula periodo de X programa
*/


function ValorCodePago($ref){

//Variables generales
		
		#81 Codigo PIN Pregrado
			$valorPINPRE=186200;	//Valores en formato int
			$valorPRE_Mostrar="186.200";	//Valores en formato String
		#82 Codigo PIN Postgrado
			$valorPINPOST=786200;	//Valores en formato int
			$valorPOST_Mostrar="786.200";	//Valores en formato String
		#83 Pin Certificados estudios
			$valor_CertEstudios = 18600;
			$valor_CertEstudios_Mostrar = "18.600";
		#84 Pin Habilitación
			$valor_Habilitacion = 116000;
			$valor_Habilitacion_Mostrar = "116.000";
		#85 Pin Suficiencia
			$valor_Suficiencia = 126000;
			$valor_Suficiencia_Mostrar = "126.000";
		#86 Pin cancelación
			$valor_Cancelacion = 260000;
			$valor_Cancelacion_Mostrar = "260.000";
		#87 Pin certificado de grado
			$valor_CertGrado = 186000;
			$valor_CertGrado_Mostrar = "186.000";
		#89 Pin Re-expedición diploma
			$valor_ExpedirDiploma = 286000;
			$valor_ExpedirDiploma_Mostrar = "286.000";


	#PREGRADO Y POSGRADO MATRÍCULAS
		#PROGRAMAS FACULTAD BÁSICA
			$moduloFACBAS=558600;
			$ValorFACBAS=1117200;
			$FACBASModuloMostrar="558.600";
			$FACBASMostrar="1.117.200";
		#PROGRAMAS FACULTAD TECNOLOGÍAS
			$moduloFACTEC=1117200;
			$ValorFACTEC=5586000;
			$FACTECModuloMostrar="1.117.200";
			$FACTECMostrar="5.586.000";
		#PROGRAMAS FACULTAD INGENIERÍAS
			$moduloFACING=1675800;
			$ValorFACING=11730600;
			$FACINGModuloMostrar="1.675.800";
			$FACINGMostrar="11.730.600";

		#PROGRAMAS FACULTAD SUPERIOR
			#ESPECIALIZACIONES
				$moduloFACSUP1=3144800;
				$ValorFACSUP1=12579200;
				$FACSUP1ModuloMostrar="3.144.800";
				$FACSUP1Mostrar="12.579.200";
			#MAESTRÍAS
				$moduloFACSUP2=3931000;
				$ValorFACSUP2=19655000;
				$FACSUP2ModuloMostrar="3.931.000";
				$FACSUP2Mostrar="19.655.000";
			#DOCTORADO
				$moduloFACUP3=4717200;
				$ValorFACSUP3=28303200;
				$FACSUP3ModuloMostrar="4.717.200";
				$FACSUP3Mostrar="28.303.200";
			#CONTINUA
				$valorFACCON=675800;
				$valorFACCONMostrar="675.800";

	#DERECHOS DE GRADO

		#PREGRADO
			#FACULTAD BÁSICA
				$ValorGFACBAS=325850;
				$ValorGFACBASMostrar="325.850";
				$ValorGTotalFACBAS=1443050;
				$ValorGTotalFACBASMostrar="1.443.050";
			#FACULTAD TECNOLOGÍAS
				$ValorGFACTEC=465500;
				$ValorGFACTECMostrar="465.500";
				$ValorGTotalFACTEC=6051500;
				$ValorGTotalFACTECMostrar="6.051.500";
			#FACULTAD INGENIERÍAS
				$ValorGFACING=605150;
				$ValorGFACINGMostrar="605.150";
				$ValorGTotalFACING=12335750;
				$ValorGTotalFACINGMostrar="12.335.750";

		#POSTGRADO
			#ESPECIALIZACIONES
				$ValorGFACSUP1=1235457;
				$ValorGFACSUP1Mostrar="1.235.457";
				$ValorGTotalFACSUP1=13814657;
				$ValorGTotalFACSUP1Mostrar="13.814.657";
			#MAESTRÍAS
				$ValorGFACSUP2=1347771;
				$ValorGFACSUP2Mostrar="1.347.771";
				$ValorGTotalFACSUP2=21002771;
				$ValorGTotalFACSUP2Mostrar="21.002.771";
			#DOCTORADOS
				$ValorGFACSUP3=1460086;
				$ValorGFACSUP3Mostrar="1.460.086";
				$ValorGTotalFACSUP3=29763268;
				$ValorGTotalFACSUP3Mostrar="29.763.268";

	switch ($ref) {

		case 81:
			$R = $valorPRE_Mostrar="186.200";
		break;

		case 82:
			$R = $valorPOST_Mostrar="786.200";
		break;

		case 83:
			$R = $valor_CertEstudios_Mostrar = "18.600";
		break;

		case 84:
			$R = $valor_Habilitacion_Mostrar = "116.000";
		break;

		case 85:
			$R = $valor_Suficiencia_Mostrar = "126.000";
		break;

		case 86:
			$R = $valor_Cancelacion_Mostrar = "260.000";
		break;

		case 87:
			$R = $valor_CertGrado_Mostrar = "186.000";
		break;

		case 89:
			$R = $valor_ExpedirDiploma_Mostrar = "286.000";
		break;



 
		case 86211:
		case 86212:
		case 86213:
		case 86214:
		case 86215:
			$R = "$".$FACBASModuloMostrar;
		break;

		case 86216:
		case 86217:
		case 86218:
		case 86219:
		case 86220:
			$R = "$".$FACTECModuloMostrar;
		break;

		case 86221:
		case 86222:
		case 86223:
		case 86224:
		case 86229:
		case 86230:
		case 86231:
		case 86234:
			$R = $FACINGModuloMostrar;
		break;

		case 86225:
		case 86226:
			$R = "$".$FACSUP1ModuloMostrar;
		break;

		case 86227:
		case 86228:
			$R = "$".$FACSUP2ModuloMostrar;
		break;

		case 86235:
			$R = "$".$ValorProgramaMostrar;
		break;
		
		default:
			$R = "N/A";
		break;
	}

	return $R;
}
?>

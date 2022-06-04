<?php
#Universidad Mísera de Colombia
#División Superior Sistemas Informáticos
#División General Financiera

//Última fecha de revisión: 2019-DICIEMBRE-29-06:16AM

#Archivo de control de datos financieros
//SI = sistema de información

#Necesario llamar a programas académicos
require 'ControlProgramasAcademicosInformacion.php';

class CodigosPIN_2019{
	const CodigoPIN = 186200 ;
	const CreditoAcademico = 86200 ;
	//Los datos son contabilizables por el SI
	public function Precio_CodigoPIN_Pregrado(){
		return CodigosPIN_2019::CodigoPIN;
	}

	public function Precio_CodigoPIN_Postgrado(){
		return (CodigosPIN_2019::CodigoPIN*3);
	}

	public function Precio_CodigoPIN_CertificadoEstudios_Pregrado(){
		return (CodigosPIN_2019::CodigoPIN/75);
	}

	public function Precio_CodigoPIN_CertificadoEstudios_Postgrado(){
		return (CodigosPIN_2019::CodigoPIN/55);
	}

	public function Precio_CodigoPIN_SuficienciaAsignaturas_Pregrado(){
		return (CodigosPIN_2019::CodigoPIN/45);
	}

	public function Precio_CodigoPIN_SuficienciaAsignaturas_Postgrado(){
		return (CodigosPIN_2019::CodigoPIN/35);
	}

	public function Precio_CodigoPIN_HabilitacionAsignaturas_Pregrado(){
		return (CodigosPIN_2019::CodigoPIN/80);
	}

	public function Precio_CodigoPIN_HabilitacionAsignaturas_Postgrado(){
		return (CodigosPIN_2019::CodigoPIN/70);
	}

	public function Precio_CodigoPIN_ValidacionAsignaturas_Pregrado(){
		return (CodigosPIN_2019::CodigoPIN/95);
	}

	public function Precio_CodigoPIN_ValidacionAsignaturas_Postgrado(){
		return (CodigosPIN_2019::CodigoPIN/90);
	}

	public function Precio_CodigoPIN_CancelarSemestre_Pregrado(){
		return (CodigosPIN_2019::CodigoPIN/9);
	}

	public function Precio_CodigoPIN_CancelarSemestre_Postgrado(){
		return (CodigosPIN_2019::CodigoPIN/3);
	}

	public function Precio_CodigoPIN_ReExpedirDiploma_Pregrado(){
		return (CodigosPIN_2019::CodigoPIN/6);
	}

	public function Precio_CodigoPIN_ReExpedirDiploma_Postgrado(){
		return (CodigosPIN_2019::CodigoPIN/4);
	}


}

class DatosFinancieros{

	//Datos entregables mediante arreglo tanto para informativo (string) como contabilizable (para el SI)
	public function Referencias($x){
		$retorno = "No existe información asociada";

		switch ($x) {
			//Códigos pines
			case 81:
				$retorno = array(
								"Referencia" => "Código PIN de Inscripción Pregrado",
								"CostoMostrar" =>	"$ ".number_format(CodigosPIN_2019::Precio_CodigoPIN_Pregrado(),0)." COP",
								"CostoContable" =>	CodigosPIN_2019::Precio_CodigoPIN_Pregrado()
							);
			break;

			case 82:
				$retorno = array(
								"Referencia" => "Código PIN de Inscripción Postgrado",
								"CostoMostrar" =>	"$ ".number_format(CodigosPIN_2019::Precio_CodigoPIN_Postgrado(),0)." COP",
								"CostoContable" =>	CodigosPIN_2019::Precio_CodigoPIN_Postgrado()
							);
			break;

			case 83:
				$retorno = array(
								"Referencia" => "Código PIN Certificado Estudios Pregrado",
								"CostoMostrar" =>	"$ ".number_format(CodigosPIN_2019::Precio_CodigoPIN_CertificadoEstudios_Pregrado(),0)." COP",
								"CostoContable" =>	CodigosPIN_2019::Precio_CodigoPIN_CertificadoEstudios_Pregrado()
							);
			break;

			case 84:
				$retorno = array(
								"Referencia" => "Código PIN Certificado Estudios Postgrado",
								"CostoMostrar" =>	"$ ".number_format(CodigosPIN_2019::Precio_CodigoPIN_CertificadoEstudios_Postgrado(),0)." COP",
								"CostoContable" =>	CodigosPIN_2019::Precio_CodigoPIN_CertificadoEstudios_Postgrado()
							);
			break;

			case 85:
				$retorno = array(
								"Referencia" => "Código PIN Suficiencia Asignaturas Pregrado",
								"CostoMostrar" =>	"$ ".number_format(CodigosPIN_2019::Precio_CodigoPIN_SuficienciaAsignaturas_Pregrado(),0)." COP",
								"CostoContable" =>	CodigosPIN_2019::Precio_CodigoPIN_SuficienciaAsignaturas_Pregrado()
							);
			break;

			case 86:
				$retorno = array(
								"Referencia" => "Código PIN Suficiencia Asignaturas Postgrado",
								"CostoMostrar" =>	"$ ".number_format(CodigosPIN_2019::Precio_CodigoPIN_SuficienciaAsignaturas_Postgrado(),0)." COP",
								"CostoContable" =>	CodigosPIN_2019::Precio_CodigoPIN_SuficienciaAsignaturas_Postgrado()
							);
			break;

			case 87:
				$retorno = array(
								"Referencia" => "Código PIN Habilitación Asignaturas Pregrado",
								"CostoMostrar" =>	"$ ".number_format(CodigosPIN_2019::Precio_CodigoPIN_HabilitacionAsignaturas_Pregrado(),0)." COP",
								"CostoContable" =>	CodigosPIN_2019::Precio_CodigoPIN_HabilitacionAsignaturas_Pregrado()
							);
			break;

			case 88:
				$retorno = array(
								"Referencia" => "Código PIN Habilitación Asignaturas Postgrado",
								"CostoMostrar" =>	"$ ".number_format(CodigosPIN_2019::Precio_CodigoPIN_HabilitacionAsignaturas_Postgrado(),0)." COP",
								"CostoContable" =>	CodigosPIN_2019::Precio_CodigoPIN_HabilitacionAsignaturas_Postgrado()
							);
			break;

			case 89:
				$retorno = array(
								"Referencia" => "Código PIN Validación Asignaturas Pregrado",
								"CostoMostrar" =>	"$ ".number_format(CodigosPIN_2019::Precio_CodigoPIN_ValidacionAsignaturas_Pregrado(),0)." COP",
								"CostoContable" =>	CodigosPIN_2019::Precio_CodigoPIN_ValidacionAsignaturas_Pregrado()
							);
			break;

			case 810:
				$retorno = array(
								"Referencia" => "Código PIN Validación Asignaturas Postgrado",
								"CostoMostrar" =>	"$ ".number_format(CodigosPIN_2019::Precio_CodigoPIN_ValidacionAsignaturas_Postgrado(),0)." COP",
								"CostoContable" =>	CodigosPIN_2019::Precio_CodigoPIN_ValidacionAsignaturas_Postgrado()
							);
			break;

			case 811:
				$retorno = array(
								"Referencia" => "Código PIN Cancelación semestre Pregrado",
								"CostoMostrar" =>	"$ ".number_format(CodigosPIN_2019::Precio_CodigoPIN_CancelarSemestre_Pregrado(),0)." COP",
								"CostoContable" =>	CodigosPIN_2019::Precio_CodigoPIN_CancelarSemestre_Pregrado()
							);
			break;

			case 812:
				$retorno = array(
								"Referencia" => "Código PIN Cancelación semestre Postgrado",
								"CostoMostrar" =>	"$ ".number_format(CodigosPIN_2019::Precio_CodigoPIN_CancelarSemestre_Postgrado(),0)." COP",
								"CostoContable" =>	CodigosPIN_2019::Precio_CodigoPIN_CancelarSemestre_Postgrado()
							);
			break;

			case 813:
				$retorno = array(
								"Referencia" => "Código PIN Expedir nuevamente diploma de Pregrado",
								"CostoMostrar" =>	"$ ".number_format(CodigosPIN_2019::Precio_CodigoPIN_ReExpedirDiploma_Pregrado(),0)." COP",
								"CostoContable" =>	CodigosPIN_2019::Precio_CodigoPIN_ReExpedirDiploma_Pregrado()
							);
			break;

			case 814:
				$retorno = array(
								"Referencia" => "Código PIN Expedir nuevamente diploma de Postgrado",
								"CostoMostrar" =>	"$ ".number_format(CodigosPIN_2019::Precio_CodigoPIN_ReExpedirDiploma_Postgrado(),0)." COP",
								"CostoContable" =>	CodigosPIN_2019::Precio_CodigoPIN_ReExpedirDiploma_Postgrado()
							);
			break;


			//Matrículas académicas
				
					case "PRESID":
					case 86229:
			
			default:
				$retorno = "No existe información asociada" ;
			break;
		}
		return $retorno;
	}
}

//class DatosContables{}


?>
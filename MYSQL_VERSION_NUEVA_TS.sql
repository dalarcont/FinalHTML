-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-06-2022 a las 16:20:40
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `universidadfalsa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_appstates`
--

CREATE TABLE `uf_appstates` (
  `APPCODE` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `APPSTATE` tinyint(1) DEFAULT NULL,
  `APPMESSAGE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_asignaturagruponotas`
--

CREATE TABLE `uf_asignaturagruponotas` (
  `NICKNAME_ESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CODASIGNATURA` int(8) NOT NULL,
  `GRUPO` int(3) NOT NULL,
  `IDACTIVIDAD` tinyint(2) NOT NULL,
  `NOTARESPECTIVA` float(1,1) NOT NULL,
  `FECHADEREGISTRONOTA` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_asignaturas`
--

CREATE TABLE `uf_asignaturas` (
  `CODIGOASIGNATURA` int(11) NOT NULL,
  `CODIGOLITERALASIGNATURA` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NOMBREASIGNATURA` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CODIGO_UNIDADACADEMICA` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CODIGO_PROGRAMA` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `TIPOASIGNATURA` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CURSOASIGNATURA` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `DISTINCIONASIGNATURA` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CREDITOSACADEMICOS` tinyint(4) NOT NULL,
  `ESTADO` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CODIGOPLAN` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `temp` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `uf_asignaturas`
--

INSERT INTO `uf_asignaturas` (`CODIGOASIGNATURA`, `CODIGOLITERALASIGNATURA`, `NOMBREASIGNATURA`, `CODIGO_UNIDADACADEMICA`, `CODIGO_PROGRAMA`, `TIPOASIGNATURA`, `CURSOASIGNATURA`, `DISTINCIONASIGNATURA`, `CREDITOSACADEMICOS`, `ESTADO`, `CODIGOPLAN`, `temp`) VALUES
(101, 'TST001', 'Testing 1', 'FACPRO', 'PRESID', 'TP', 'CA1', 'DA2', 5, 'E1', 'PRESID1', 'NO'),
(102, 'TST002', 'Testing 2', 'FACPRO', 'PRESID', 'TP', 'CA1', 'DA2', 2, 'E1', 'PRESID1', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_asignaturas_relaciones`
--

CREATE TABLE `uf_asignaturas_relaciones` (
  `CODIGO_ASIGNATURA` int(11) NOT NULL,
  `CODIGO_PLAN` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `REQ1` int(11) DEFAULT NULL,
  `REQ2` int(11) DEFAULT NULL,
  `REQ3` int(11) DEFAULT NULL,
  `REQ4` int(11) DEFAULT NULL,
  `SIM1` int(11) DEFAULT NULL,
  `SIM2` int(11) DEFAULT NULL,
  `SIM3` int(11) DEFAULT NULL,
  `SIM4` int(11) DEFAULT NULL,
  `EQ1` int(11) DEFAULT NULL,
  `EQ2` int(11) DEFAULT NULL,
  `EQ3` int(11) DEFAULT NULL,
  `EQ4` int(11) DEFAULT NULL,
  `CODIGOASIGNATURA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_asignatura_actividades`
--

CREATE TABLE `uf_asignatura_actividades` (
  `CODASIGNATURA` int(8) NOT NULL,
  `GRUPO` int(3) NOT NULL,
  `ACTIVIDADNOMBRE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PORCENTAJE` float(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_aspirantes`
--

CREATE TABLE `uf_aspirantes` (
  `NROINSCRIPCION` int(11) NOT NULL,
  `PININSCRIPCION` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `FECHAINSCRIPCION` datetime NOT NULL,
  `SEMESTREASPIRACION` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ESTADOINSCRIPCION` tinyint(4) NOT NULL,
  `DETALLEINSCRIPCION` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `TIPOINSCRITO` tinyint(4) NOT NULL,
  `IDINSCRITO` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `FECHANACIMIENTO` date NOT NULL,
  `NOMBRES` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDOS` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NICKNAME` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `GENERO` varchar(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `EMAIL` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PUNTAJEINGRESO` smallint(6) NOT NULL,
  `ORIGEN_PAIS` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ORIGEN_CIUDAD` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `RESIDE_PAIS` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `RESIDE_CIUDAD` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PROGRAMAINSCRITO` int(11) NOT NULL,
  `ESTRATOSOCIAL` tinyint(4) NOT NULL,
  `ESCOLARIDAD` tinyint(4) NOT NULL,
  `PIN` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla con el contenido de datos de los diferentes inscritos. Se repiten los datos de la tabla ''personas'' dado que la modalidad de inscripción es que si no es admitido, al cierre del sistemase borran los datos. Mientras que los que sean admitidos y con pago ejecutado pues serán registrados en ''personas''';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_calificarservicio`
--

CREATE TABLE `uf_calificarservicio` (
  `NICKNAME_ESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `VALORACION` tinyint(4) NOT NULL,
  `MENSAJE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHACALIFICACIÓN` datetime NOT NULL,
  `NICKNAMEESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_codigoscargos`
--

CREATE TABLE `uf_codigoscargos` (
  `CODIGO` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NIVEL` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `NOMBRE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `uf_codigoscargos`
--

INSERT INTO `uf_codigoscargos` (`CODIGO`, `NIVEL`, `NOMBRE`) VALUES
('AUXI01', 'Auxiliar I', 'Asistencia Junior'),
('AUXI02', 'Auxiliar II', 'Asistencia Media'),
('AUXI03', 'Auxiliar III', 'Asistencia Experta'),
('AUXI04', 'Auxiliar IV', 'Asistencia Coordinación'),
('AUXI05', 'Auxiliar V', 'Asistencia Senior'),
('AUXI06', 'Auxiliar VI', 'Asistencia Académica Junior'),
('AUXI07', 'Auxiliar VII', 'Asistencia Académica Media'),
('AUXI08', 'Auxiliar VIII', 'Asistencia Académica Experta'),
('AUXI09', 'Auxiliar IX', 'Asistencia Académica Coordinación'),
('AUXI10', 'Auxiliar X', 'Asistencia Académica Senior'),
('JEFE00', 'Profesional Directivo Ejecutivo Presidente', 'Rector/Presidente'),
('JEFE01', 'Profesional Directivo Ejecutivo Vicepresidente', 'Vicerrector/VicePresidente'),
('JEFE02', 'Profesional Directivo Ejecutivo Menor', 'Jefe de Unidad Vicerrectora'),
('JEFE03', 'Profesional Directivo Ejecutivo', 'Jefe Departamento'),
('JEFE04', 'Profesional Directivo I', 'Jefe de Área'),
('JEFE05', 'Profesional Directivo II', 'Asesor/Suplente Jefe Área'),
('JEFE06', 'Profesional Directivo III', 'Jefe de Sub Área Especial'),
('JEFE07', 'Académico Directivo Ejecutivo', 'Jefe de Unidad Académica'),
('JEFE08', 'Académico Directivo I', 'Jefe de Área Académica'),
('JEFE09', 'Académico Directivo II', 'Asesor/Suplente Jefe Área Académica'),
('JEFE10', 'Académico Directivo III', 'Jefe de Sub Área Especial Académica'),
('OPER01', 'Operario I', 'Operador Inicial'),
('OPER02', 'Operario II', 'Operador Medio'),
('OPER03', 'Operario III', 'Operador Experto'),
('PROF01', 'Profesional I', 'Operativo Área Junior'),
('PROF02', 'Profesional II', 'Operativo Área Plata'),
('PROF03', 'Profesional III', 'Operativo Área Medio'),
('PROF04', 'Profesional IV', 'Operativo Área Experto'),
('PROF05', 'Profesional V', 'Operativo Área Senior'),
('PROF06', 'Profesional VI', 'Coordinador Sección'),
('PROF07', 'Profesional VII', 'Asesor Área General'),
('PROF08', 'Profesional VIII', 'Asesor Sección'),
('PROF09', 'Profesional IX', 'SubEncargado Sección'),
('PROF10', 'Profesional X', 'Encargado Sección'),
('PROF11', 'Profesional Académico I', 'Docentes Profesionales Junior'),
('PROF12', 'Profesional Académico II', 'Docentes Profesionales Senior'),
('PROF13', 'Profesional Académico III', 'Docentes Especializados'),
('PROF14', 'Profesional Académico IV', 'Docentes Magíster'),
('PROF15', 'Profesional Académico V', 'Docentes PhD'),
('TECNO1', 'Técnico I', 'Operador Junior'),
('TECNO2', 'Técnico II', 'Operador Medio'),
('TECNO3', 'Técnico III', 'Operador Experto'),
('TECNO4', 'Técnico IV', 'Operador Coordinador'),
('TECNO5', 'Técnico V', 'Técnico Administrativo Senior'),
('TECNO6', 'Técnico VI', 'Técnico Académico Junior'),
('TECNO7', 'Técnico VII', 'Técnico Académico Medio'),
('TECNO8', 'Técnico VIII', 'Técnico Académico Experto'),
('TECNO9', 'Técnico IX', 'Técnico Académico Coordinador'),
('TECNOX', 'Técnico X', 'Técnico Administrativo Senior');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_codigossalariales`
--

CREATE TABLE `uf_codigossalariales` (
  `CODIGOSALARIAL` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `SMMLV` decimal(11,2) NOT NULL,
  `PORCENTAJE_ASIGNACION` decimal(11,2) NOT NULL,
  `MESES_ASIGNACION` int(2) NOT NULL,
  `ASIGNACION_MENSUAL` decimal(11,2) GENERATED ALWAYS AS ((`SMMLV` * `PORCENTAJE_ASIGNACION`)) VIRTUAL,
  `PRIMA1` decimal(11,2) GENERATED ALWAYS AS ((`ASIGNACION_MENSUAL` * 0.45)) VIRTUAL,
  `PRIMA2` decimal(11,2) GENERATED ALWAYS AS ((`ASIGNACION_MENSUAL` * 0.50)) VIRTUAL,
  `VACACIONES` decimal(11,2) GENERATED ALWAYS AS ((`ASIGNACION_MENSUAL` * 0.60)) VIRTUAL,
  `PRIMA_TECNICA` decimal(11,2) GENERATED ALWAYS AS ((`ASIGNACION_MENSUAL` * 0.70)) VIRTUAL,
  `PRIMA_INSTITUCIONAL` decimal(11,2) GENERATED ALWAYS AS ((`ASIGNACION_MENSUAL` * 0.75)) VIRTUAL,
  `TOTAL_ASIGNACIONES` decimal(11,2) GENERATED ALWAYS AS (((((((`ASIGNACION_MENSUAL` * `MESES_ASIGNACION`) + `PRIMA_INSTITUCIONAL`) + `PRIMA_TECNICA`) + `VACACIONES`) + `PRIMA1`) + `PRIMA2`)) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `uf_codigossalariales`
--

INSERT INTO `uf_codigossalariales` (`CODIGOSALARIAL`, `SMMLV`, `PORCENTAJE_ASIGNACION`, `MESES_ASIGNACION`) VALUES
('ORPS00', '1000000.00', '5.67', 11),
('ORPS01', '1000000.00', '5.61', 11),
('ORPS02', '1000000.00', '5.55', 11),
('ORPS03', '1000000.00', '5.49', 11),
('ORPS04', '1000000.00', '5.43', 11),
('ORPS05', '1000000.00', '5.38', 11),
('ORPS06', '1000000.00', '5.32', 11),
('ORPS07', '1000000.00', '5.26', 11),
('ORPS08', '1000000.00', '5.20', 11),
('ORPS09', '1000000.00', '5.14', 11),
('ORPS10', '1000000.00', '5.08', 11),
('ORPS11', '1000000.00', '5.02', 11),
('ORPS12', '1000000.00', '4.97', 11),
('ORPS13', '1000000.00', '4.91', 11),
('ORPS14', '1000000.00', '4.85', 11),
('ORPS15', '1000000.00', '3.87', 11),
('ORPS16', '1000000.00', '3.81', 11),
('ORPS17', '1000000.00', '3.75', 11),
('ORPS18', '1000000.00', '3.69', 11),
('ORPS19', '1000000.00', '3.64', 11),
('ORPS20', '1000000.00', '3.58', 11),
('ORPS21', '1000000.00', '3.52', 11),
('ORPS22', '1000000.00', '2.93', 11),
('ORPS23', '1000000.00', '2.87', 11),
('ORPS24', '1000000.00', '2.81', 11),
('ORPS25', '1000000.00', '2.49', 11),
('ORPS26', '1000000.00', '2.43', 11),
('ORPS27', '1000000.00', '2.38', 11),
('ORPS28', '1000000.00', '2.32', 11),
('ORPS29', '1000000.00', '2.26', 11),
('ORPS30', '1000000.00', '2.20', 11),
('ORPS31', '1000000.00', '2.14', 11),
('ORPS32', '1000000.00', '2.08', 11),
('ORPS33', '1000000.00', '2.02', 11),
('ORPS34', '1000000.00', '1.96', 11),
('ORPS35', '1000000.00', '1.73', 11),
('ORPS36', '1000000.00', '1.53', 11),
('ORPS37', '1000000.00', '1.34', 11),
('PLNR00', '1000000.00', '15.00', 11),
('PLNR01', '1000000.00', '8.00', 11),
('PLNR02', '1000000.00', '7.80', 11),
('PLNR03', '1000000.00', '7.50', 11),
('PLNR04', '1000000.00', '7.30', 11),
('PLNR05', '1000000.00', '6.80', 11),
('PLNR06', '1000000.00', '6.75', 11),
('PLNR07', '1000000.00', '6.55', 11),
('PLNR08', '1000000.00', '6.35', 11),
('PLNR09', '1000000.00', '6.15', 11),
('PLNR10', '1000000.00', '5.85', 11),
('PLNR11', '1000000.00', '5.80', 11),
('PLNR12', '1000000.00', '5.74', 11),
('PLNR13', '1000000.00', '5.68', 11),
('PLNR14', '1000000.00', '5.62', 11),
('PLNR15', '1000000.00', '5.56', 11),
('PLNR16', '1000000.00', '5.50', 11),
('PLNR17', '1000000.00', '5.44', 11),
('PLNR18', '1000000.00', '5.38', 11),
('PLNR19', '1000000.00', '5.32', 11),
('PLNR20', '1000000.00', '5.26', 11),
('PLNR21', '1000000.00', '5.20', 11),
('PLNR22', '1000000.00', '5.14', 11),
('PLNR23', '1000000.00', '5.08', 11),
('PLNR24', '1000000.00', '5.02', 11),
('PLNR25', '1000000.00', '4.96', 11),
('PLNR26', '1000000.00', '3.96', 11),
('PLNR27', '1000000.00', '3.90', 11),
('PLNR28', '1000000.00', '3.84', 11),
('PLNR29', '1000000.00', '3.78', 11),
('PLNR30', '1000000.00', '3.72', 11),
('PLNR31', '1000000.00', '3.66', 11),
('PLNR32', '1000000.00', '3.60', 11),
('PLNR33', '1000000.00', '3.00', 11),
('PLNR34', '1000000.00', '2.94', 11),
('PLNR35', '1000000.00', '2.88', 11),
('PLNR36', '1000000.00', '2.55', 11),
('PLNR37', '1000000.00', '2.49', 11),
('PLNR38', '1000000.00', '2.43', 11),
('PLNR39', '1000000.00', '2.37', 11),
('PLNR40', '1000000.00', '2.31', 11),
('PLNR41', '1000000.00', '2.25', 11),
('PLNR42', '1000000.00', '2.19', 11),
('PLNR43', '1000000.00', '2.13', 11),
('PLNR44', '1000000.00', '2.07', 11),
('PLNR45', '1000000.00', '2.01', 11),
('PLNR46', '1000000.00', '1.77', 11),
('PLNR47', '1000000.00', '1.57', 11),
('PLNR48', '1000000.00', '1.37', 11),
('TITD00', '1000000.00', '5.25', 11),
('TITD01', '1000000.00', '5.19', 11),
('TITD02', '1000000.00', '5.14', 11),
('TITD03', '1000000.00', '5.09', 11),
('TITD04', '1000000.00', '5.03', 11),
('TITD05', '1000000.00', '4.98', 11),
('TITD06', '1000000.00', '4.92', 11),
('TITD07', '1000000.00', '4.87', 11),
('TITD08', '1000000.00', '4.81', 11),
('TITD09', '1000000.00', '4.76', 11),
('TITD10', '1000000.00', '4.71', 11),
('TITD11', '1000000.00', '4.65', 11),
('TITD12', '1000000.00', '4.60', 11),
('TITD13', '1000000.00', '4.54', 11),
('TITD14', '1000000.00', '4.49', 11),
('TITD15', '1000000.00', '3.58', 11),
('TITD16', '1000000.00', '3.53', 11),
('TITD17', '1000000.00', '3.48', 11),
('TITD18', '1000000.00', '3.42', 11),
('TITD19', '1000000.00', '3.37', 11),
('TITD20', '1000000.00', '3.31', 11),
('TITD21', '1000000.00', '3.26', 11),
('TITD22', '1000000.00', '2.72', 11),
('TITD23', '1000000.00', '2.66', 11),
('TITD24', '1000000.00', '2.61', 11),
('TITD25', '1000000.00', '2.31', 11),
('TITD26', '1000000.00', '2.25', 11),
('TITD27', '1000000.00', '2.20', 11),
('TITD28', '1000000.00', '2.14', 11),
('TITD29', '1000000.00', '2.09', 11),
('TITD30', '1000000.00', '2.04', 11),
('TITD31', '1000000.00', '1.98', 11),
('TITD32', '1000000.00', '1.93', 11),
('TITD33', '1000000.00', '1.87', 11),
('TITD34', '1000000.00', '1.82', 11),
('TITD35', '1000000.00', '1.60', 11),
('TITD36', '1000000.00', '1.42', 11),
('TITD37', '1000000.00', '1.24', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_consultaegresados`
--

CREATE TABLE `uf_consultaegresados` (
  `NICKNAMEEGRESADO` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PROGRAMAEGRESADO` int(11) NOT NULL,
  `PROMEDIOEGRESADO` float(1,1) NOT NULL,
  `CREDITOSCURSADOS` int(11) NOT NULL,
  `CODIGOGENERALDEGRADO` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `SEMESTREEGRESO` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NICKNAME` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_contratos`
--

CREATE TABLE `uf_contratos` (
  `YEAR` year(4) NOT NULL,
  `NROCONTRATO` int(11) NOT NULL,
  `TIPOCONTRATO` varchar(4) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NICKNAME_CONTRATISTA` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `FUNCIONCONTRATO` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NICKNAME_SUPERIOR` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_INICIO` date NOT NULL,
  `FECHA_FIN` date NOT NULL,
  `ASIGNACIONSALARIAL_EMPLEADO` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `VALOR_CONTRATO` decimal(10,2) DEFAULT NULL,
  `ESTADOCONTRATO` varchar(4) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `UNIDAD_CONTRATISTA` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `uf_contratos`
--

INSERT INTO `uf_contratos` (`YEAR`, `NROCONTRATO`, `TIPOCONTRATO`, `NICKNAME_CONTRATISTA`, `FUNCIONCONTRATO`, `NICKNAME_SUPERIOR`, `FECHA_INICIO`, `FECHA_FIN`, `ASIGNACIONSALARIAL_EMPLEADO`, `VALOR_CONTRATO`, `ESTADOCONTRATO`, `UNIDAD_CONTRATISTA`) VALUES
(2022, 1, 'TC1', 'jmtabaress', 'DICTAR LA ASIGNATURA DE PRUEBA', 'dalarcont', '2022-02-01', '2022-05-31', 'TITD10', NULL, 'EC2', 'VIACAD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_convenciones_apps`
--

CREATE TABLE `uf_convenciones_apps` (
  `tabla_origen` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `codigo` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `detalle` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Conserva los códigos/acrónimos de ciertos contextos y muestra su significado';

--
-- Volcado de datos para la tabla `uf_convenciones_apps`
--

INSERT INTO `uf_convenciones_apps` (`tabla_origen`, `codigo`, `detalle`) VALUES
('general', 'SMMLV2022', '1000000'),
('uf_asignatura', 'CA0', 'Opcional'),
('uf_asignatura', 'CA1', 'Obligatoria'),
('uf_asignatura', 'DA0', 'Optativa'),
('uf_asignatura', 'DA1', 'Electiva'),
('uf_asignatura', 'DA2', 'Normal'),
('uf_asignatura', 'E0', 'Inactiva completamente, no ofertada'),
('uf_asignatura', 'E1', 'Activa, en oferta'),
('uf_asignaturas', 'A', 'Autodidacta'),
('uf_asignaturas', 'P', 'Práctica'),
('uf_asignaturas', 'T', 'Teórica'),
('uf_asignaturas', 'TP', 'Teorico-práctica'),
('uf_contratos', 'DEC0', 'No se ha autorizado por la respectiva unidad solicitante'),
('uf_contratos', 'DEC1', 'Autorizado por la respectiva unidad solicitante'),
('uf_contratos', 'DEC2', 'Se está ejecutando'),
('uf_contratos', 'DEC3', 'En proceso de liquidación'),
('uf_contratos', 'DEC4', 'Finalizado, liquidación realizada (si aplica)'),
('uf_contratos', 'DEC5', 'Suspendido'),
('uf_contratos', 'DEC6', 'Anulado (Autorización revocada)'),
('uf_contratos', 'DEC7', 'Cancelado por cumplimiento anticipado'),
('uf_contratos', 'DEC8', 'Empleado/Contratista accionado legalmente'),
('uf_contratos', 'DEC9', 'Empleado/Contratista fallece'),
('uf_contratos', 'EC0', 'No autorizado'),
('uf_contratos', 'EC1', 'Autorizado'),
('uf_contratos', 'EC10', 'Pendiente por firma de las partes involucradas'),
('uf_contratos', 'EC2', 'Ejecución'),
('uf_contratos', 'EC3', 'Liquidación'),
('uf_contratos', 'EC4', 'Finalizado'),
('uf_contratos', 'EC5', 'Suspendido'),
('uf_contratos', 'EC6', 'Anulado'),
('uf_contratos', 'EC7', 'Cancelado'),
('uf_contratos', 'EC8', 'Accionado legalmente'),
('uf_contratos', 'EC9', 'Fin contractual postmortem'),
('uf_contratos', 'TC0', 'Contratista/Orden de prestación de servicios'),
('uf_contratos', 'TC1', 'Término definido'),
('uf_contratos', 'TC2', 'Término indefinido'),
('uf_contratos', 'TC3', 'Planta Oficial'),
('uf_contratos', 'TC4', 'Alternativos/Servicios/Compras menores'),
('uf_contratos', 'TC5', 'Compras masivas'),
('uf_contratos', 'TC6', 'Libre Nombramiento Remoción'),
('uf_eha', 'A', 'Aprobada'),
('uf_eha', 'C', 'Cursando'),
('uf_eha', 'ES1', 'Normal'),
('uf_eha', 'ES2', 'Refuerzo'),
('uf_eha', 'ES3', 'Honorífico'),
('uf_eha', 'ES4', 'Suspensión'),
('uf_eha', 'ES5', 'Fuera del programa'),
('uf_eha', 'ES6', 'Expulsión institución'),
('uf_eha', 'I', 'Inhabilitada'),
('uf_eha', 'R', 'Reprobada'),
('uf_eha', 'TC1', 'Curso normal'),
('uf_eha', 'TC2', 'Homologación'),
('uf_eha', 'TC3', 'Acreditación'),
('uf_eha', 'TC4', 'Suficiencia'),
('uf_eha', 'TC5', 'Inasistencia'),
('uf_eha', 'TC6', 'Fraude'),
('uf_eha', 'TC7', 'Suficiencia fallida'),
('uf_eha', 'TC8', '2da cancelación'),
('uf_eha', 'TC9', '2da reprobatoria'),
('uf_personalinstitucional', 'E0', 'Despedido'),
('uf_personalinstitucional', 'E1', 'Activo'),
('uf_personalinstitucional', 'E2', 'Vacaciones'),
('uf_personalinstitucional', 'E3', 'Suspendido por procesos disciplinarios/labora'),
('uf_personalinstitucional', 'E4', 'Suspendido por procesos legales'),
('uf_personalinstitucional', 'E5', 'Expulsado de la institución'),
('uf_personalinstitucional', 'LINORE', 'Personal de libre nombramiento y remoción'),
('uf_personalinstitucional', 'ORDEPS', 'Contratistas'),
('uf_personalinstitucional', 'PLANTA', 'Personal de planta'),
('uf_personalinstitucional', 'T0', 'Administrativo'),
('uf_personalinstitucional', 'T1', 'Académico'),
('uf_personalinstitucional', 'TERDEF', 'Personal de término indefinido'),
('uf_personalinstitucional', 'TERFIJ', 'Personal de término fijo'),
('uf_personas', 'ESC0', 'Ninguno'),
('uf_personas', 'ESC1', 'Básica Primaria'),
('uf_personas', 'ESC2', 'Secundaria'),
('uf_personas', 'ESC3', 'Técnico/Tecnológico'),
('uf_personas', 'ESC4', 'Profesional/Licenciatura en curso'),
('uf_personas', 'ESC5', 'Profesional/Licenciatura culminado'),
('uf_personas', 'ESC6', 'Especialista'),
('uf_personas', 'ESC7', 'Maestría'),
('uf_personas', 'ESC8', 'Doctorado'),
('uf_personas', 'ESC9', 'Inteligencia Artificial'),
('uf_unidades_institucionales', 'T0', 'Administración'),
('uf_unidades_institucionales', 'T1', 'Académia'),
('uf_unidades_institucionales', 'T2', 'Externa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_countrycodes`
--

CREATE TABLE `uf_countrycodes` (
  `CODIGO` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `SIGNIFICADO` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `uf_countrycodes`
--

INSERT INTO `uf_countrycodes` (`CODIGO`, `SIGNIFICADO`) VALUES
('AD', 'Andorra'),
('AE', 'United Arab Emirates'),
('AF', 'Afghanistan'),
('AG', 'Antigua and Barbuda'),
('AI', 'Anguilla'),
('AL', 'Albania'),
('AM', 'Armenia'),
('AN', 'Netherlands Antilles'),
('AO', 'Angola'),
('AQ', 'Antarctica'),
('AR', 'Argentina'),
('AT', 'Austria'),
('AU', 'Australia'),
('AW', 'Aruba'),
('AZ', 'Azerbaijan'),
('BA', 'Bosnia and Herzegovina'),
('BB', 'Barbados'),
('BD', 'Bangladesh'),
('BE', 'Belgium'),
('BF', 'Burkina Faso'),
('BG', 'Bulgaria'),
('BH', 'Bahrain'),
('BI', 'Burundi'),
('BJ', 'Benin'),
('BM', 'Bermuda'),
('BN', 'Brunei Darussalam'),
('BO', 'Bolivia'),
('BR', 'Brazil'),
('BS', 'Bahamas'),
('BT', 'Bhutan'),
('BV', 'Bouvet Island'),
('BW', 'Botswana'),
('BY', 'Belarus'),
('BZ', 'Belize'),
('CA', 'Canada'),
('CC', 'Cocos (Keeling) Islands'),
('CD', 'Democratic Republic of the Congo'),
('CF', 'Central African Republic'),
('CG', 'Republic of Congo'),
('CH', 'Switzerland'),
('CI', 'Ivory Coast'),
('CK', 'Cook Islands'),
('CL', 'Chile'),
('CM', 'Cameroon'),
('CN', 'China'),
('CO', 'Colombia'),
('CR', 'Costa Rica'),
('CU', 'Cuba'),
('CV', 'Cape Verde'),
('CX', 'Christmas Island'),
('CY', 'Cyprus'),
('CZ', 'Czech Republic'),
('DE', 'Germany'),
('DJ', 'Djibouti'),
('DK', 'Denmark'),
('DM', 'Dominica'),
('DO', 'Dominican Republic'),
('DS', 'American Samoa'),
('DZ', 'Algeria'),
('EC', 'Ecuador'),
('EE', 'Estonia'),
('EG', 'Egypt'),
('EH', 'Western Sahara'),
('ER', 'Eritrea'),
('ES', 'Spain'),
('ET', 'Ethiopia'),
('FI', 'Finland'),
('FJ', 'Fiji'),
('FK', 'Falkland Islands (Malvinas)'),
('FM', 'Micronesia, Federated States of'),
('FO', 'Faroe Islands'),
('FR', 'France'),
('FX', 'France, Metropolitan'),
('GA', 'Gabon'),
('GB', 'United Kingdom'),
('GD', 'Grenada'),
('GE', 'Georgia'),
('GF', 'French Guiana'),
('GH', 'Ghana'),
('GI', 'Gibraltar'),
('GK', 'Guernsey'),
('GL', 'Greenland'),
('GM', 'Gambia'),
('GN', 'Guinea'),
('GP', 'Guadeloupe'),
('GQ', 'Equatorial Guinea'),
('GR', 'Greece'),
('GS', 'South Georgia South Sandwich Islands'),
('GT', 'Guatemala'),
('GU', 'Guam'),
('GW', 'Guinea-Bissau'),
('GY', 'Guyana'),
('HK', 'Hong Kong'),
('HM', 'Heard and Mc Donald Islands'),
('HN', 'Honduras'),
('HR', 'Croatia (Hrvatska)'),
('HT', 'Haiti'),
('HU', 'Hungary'),
('ID', 'Indonesia'),
('IE', 'Ireland'),
('IL', 'Israel'),
('IM', 'Isle of Man'),
('IN', 'India'),
('IO', 'British Indian Ocean Territory'),
('IQ', 'Iraq'),
('IR', 'Iran (Islamic Republic of)'),
('IS', 'Iceland'),
('IT', 'Italy'),
('JE', 'Jersey'),
('JM', 'Jamaica'),
('JO', 'Jordan'),
('JP', 'Japan'),
('KE', 'Kenya'),
('KG', 'Kyrgyzstan'),
('KH', 'Cambodia'),
('KI', 'Kiribati'),
('KM', 'Comoros'),
('KN', 'Saint Kitts and Nevis'),
('KP', 'Korea, Democratic People\'s Republic of'),
('KR', 'Korea, Republic of'),
('KW', 'Kuwait'),
('KY', 'Cayman Islands'),
('KZ', 'Kazakhstan'),
('LA', 'Lao People\'s Democratic Republic'),
('LB', 'Lebanon'),
('LC', 'Saint Lucia'),
('LI', 'Liechtenstein'),
('LK', 'Sri Lanka'),
('LR', 'Liberia'),
('LS', 'Lesotho'),
('LT', 'Lithuania'),
('LU', 'Luxembourg'),
('LV', 'Latvia'),
('LY', 'Libyan Arab Jamahiriya'),
('MA', 'Morocco'),
('MC', 'Monaco'),
('MD', 'Moldova, Republic of'),
('ME', 'Montenegro'),
('MG', 'Madagascar'),
('MH', 'Marshall Islands'),
('MK', 'North Macedonia'),
('ML', 'Mali'),
('MM', 'Myanmar'),
('MN', 'Mongolia'),
('MO', 'Macau'),
('MP', 'Northern Mariana Islands'),
('MQ', 'Martinique'),
('MR', 'Mauritania'),
('MS', 'Montserrat'),
('MT', 'Malta'),
('MU', 'Mauritius'),
('MV', 'Maldives'),
('MW', 'Malawi'),
('MX', 'Mexico'),
('MY', 'Malaysia'),
('MZ', 'Mozambique'),
('NA', 'Namibia'),
('NC', 'New Caledonia'),
('NE', 'Niger'),
('NF', 'Norfolk Island'),
('NG', 'Nigeria'),
('NI', 'Nicaragua'),
('NL', 'Netherlands'),
('NO', 'Norway'),
('NP', 'Nepal'),
('NR', 'Nauru'),
('NU', 'Niue'),
('NZ', 'New Zealand'),
('OM', 'Oman'),
('PA', 'Panama'),
('PE', 'Peru'),
('PF', 'French Polynesia'),
('PG', 'Papua New Guinea'),
('PH', 'Philippines'),
('PK', 'Pakistan'),
('PL', 'Poland'),
('PM', 'St. Pierre and Miquelon'),
('PN', 'Pitcairn'),
('PR', 'Puerto Rico'),
('PS', 'Palestine'),
('PT', 'Portugal'),
('PW', 'Palau'),
('PY', 'Paraguay'),
('QA', 'Qatar'),
('RE', 'Reunion'),
('RO', 'Romania'),
('RS', 'Serbia'),
('RU', 'Russian Federation'),
('RW', 'Rwanda'),
('SA', 'Saudi Arabia'),
('SB', 'Solomon Islands'),
('SC', 'Seychelles'),
('SD', 'Sudan'),
('SE', 'Sweden'),
('SG', 'Singapore'),
('SH', 'St. Helena'),
('SI', 'Slovenia'),
('SJ', 'Svalbard and Jan Mayen Islands'),
('SK', 'Slovakia'),
('SL', 'Sierra Leone'),
('SM', 'San Marino'),
('SN', 'Senegal'),
('SO', 'Somalia'),
('SR', 'Suriname'),
('SS', 'South Sudan'),
('ST', 'Sao Tome and Principe'),
('SV', 'El Salvador'),
('SY', 'Syrian Arab Republic'),
('SZ', 'Swaziland'),
('TC', 'Turks and Caicos Islands'),
('TD', 'Chad'),
('TF', 'French Southern Territories'),
('TG', 'Togo'),
('TH', 'Thailand'),
('TJ', 'Tajikistan'),
('TK', 'Tokelau'),
('TM', 'Turkmenistan'),
('TN', 'Tunisia'),
('TO', 'Tonga'),
('TP', 'East Timor'),
('TR', 'Turkey'),
('TT', 'Trinidad and Tobago'),
('TV', 'Tuvalu'),
('TW', 'Taiwan'),
('TY', 'Mayotte'),
('TZ', 'Tanzania, United Republic of'),
('UA', 'Ukraine'),
('UG', 'Uganda'),
('UM', 'United States minor outlying islands'),
('US', 'United States'),
('UY', 'Uruguay'),
('UZ', 'Uzbekistan'),
('VA', 'Vatican City State'),
('VC', 'Saint Vincent and the Grenadines'),
('VE', 'Venezuela'),
('VG', 'Virgin Islands (British)'),
('VI', 'Virgin Islands (U.S.)'),
('VN', 'Vietnam'),
('VU', 'Vanuatu'),
('WF', 'Wallis and Futuna Islands'),
('WS', 'Samoa'),
('XK', 'Kosovo'),
('YE', 'Yemen'),
('ZA', 'South Africa'),
('ZM', 'Zambia'),
('ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_docentes_grupos`
--

CREATE TABLE `uf_docentes_grupos` (
  `NICKNAME_DOCENTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CODASIGNATURA` int(11) NOT NULL,
  `GRUPO` int(11) NOT NULL,
  `CODIGOUNIDAD` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `NROCONTRATO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `uf_docentes_grupos`
--

INSERT INTO `uf_docentes_grupos` (`NICKNAME_DOCENTE`, `CODASIGNATURA`, `GRUPO`, `CODIGOUNIDAD`, `NROCONTRATO`) VALUES
('dalarcont', 102, 2, 'FACPRO', 2),
('jmtabaress', 101, 1, 'FACPRO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_estudiantes_abandono`
--

CREATE TABLE `uf_estudiantes_abandono` (
  `NICKNAME_ESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PROGRAMA_AFECCION` int(11) NOT NULL,
  `MOTIVO` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `TIPOABANDONO` tinyint(4) NOT NULL,
  `FECHA_EJECUCION` datetime NOT NULL,
  `NICKNAMEESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_estudiantes_cambioprograma`
--

CREATE TABLE `uf_estudiantes_cambioprograma` (
  `NICKNAME_ESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `FECHAREGISTRO` datetime NOT NULL,
  `FECHAAPROBACION` datetime NOT NULL,
  `PROGRAMAORIGEN` int(11) NOT NULL,
  `PROGRAMADESTINO` int(11) NOT NULL,
  `SEMESTREORIGEN` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `JUSTIFICACIONESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `SEMESTREDESTINO` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ENTEAPROBADOR` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `RESPUESTA` tinyint(4) NOT NULL,
  `JUSTIFICACION` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NICKNAMEESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_estudiantes_general`
--

CREATE TABLE `uf_estudiantes_general` (
  `FECHAINGRESO` date NOT NULL,
  `ESTADOGENERAL` tinyint(4) NOT NULL,
  `NICKNAMEESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PUNTAJEINGRESO` int(11) NOT NULL,
  `ULTIMOPROGRAMAMATRICULADO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `uf_estudiantes_general`
--

INSERT INTO `uf_estudiantes_general` (`FECHAINGRESO`, `ESTADOGENERAL`, `NICKNAMEESTUDIANTE`, `PUNTAJEINGRESO`, `ULTIMOPROGRAMAMATRICULADO`) VALUES
('2016-08-01', 1, 'estudiante', 99, 8311);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_estudiantes_historial_academico`
--

CREATE TABLE `uf_estudiantes_historial_academico` (
  `NUMHIST` int(11) NOT NULL,
  `NICKNAME_ESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PROGRAMA` int(11) NOT NULL,
  `PERIODO` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `MATRICULA_LISTA` json NOT NULL,
  `MATRICULA_ESTADODETALLE` json NOT NULL,
  `MATRICULA_ESTADOS` json NOT NULL,
  `MATRICULA_NOTAS` json NOT NULL,
  `MATRICULA_GRUPO` json NOT NULL,
  `SEMESTRE_ESTADO` varchar(4) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CREDITOSAPROBADOS` int(3) NOT NULL,
  `UBICACIONSEMESTRAL` int(1) NOT NULL,
  `PROMEDIO` decimal(2,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Registro de periodos cursados por el estudiante';

--
-- Volcado de datos para la tabla `uf_estudiantes_historial_academico`
--

INSERT INTO `uf_estudiantes_historial_academico` (`NUMHIST`, `NICKNAME_ESTUDIANTE`, `PROGRAMA`, `PERIODO`, `MATRICULA_LISTA`, `MATRICULA_ESTADODETALLE`, `MATRICULA_ESTADOS`, `MATRICULA_NOTAS`, `MATRICULA_GRUPO`, `SEMESTRE_ESTADO`, `CREDITOSAPROBADOS`, `UBICACIONSEMESTRAL`, `PROMEDIO`) VALUES
(1, 'estudiante', 8311, '20202', 'null', 'null', 'null', 'null', 'null', 'ES1', 1, 1, '1.0'),
(2, 'estudiante', 8311, '20211', '[101, 102]', '[null, null]', '[\"C\", \"C\"]', '[0, 0]', '[1, 2]', 'ES5', 38, 1, '0.0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_estudiantes_pagos`
--

CREATE TABLE `uf_estudiantes_pagos` (
  `NICKNAME_ESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CODIGOSERVICIOPAGO` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `VALORPAGADO` float(10,2) DEFAULT NULL,
  `FECHADELPAGO` datetime NOT NULL,
  `FACTURAENLACE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CODIGOSERVICIO` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `NICKNAMEESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_estudiantes_portal`
--

CREATE TABLE `uf_estudiantes_portal` (
  `NICKNAME_ESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PKEYESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `RECUPERAR_PREGUNTA` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `RECUPERAR_RESPUESTA` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `uf_estudiantes_portal`
--

INSERT INTO `uf_estudiantes_portal` (`NICKNAME_ESTUDIANTE`, `PKEYESTUDIANTE`, `RECUPERAR_PREGUNTA`, `RECUPERAR_RESPUESTA`) VALUES
('estudiante', 'estudiante', '2+2', '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_estudiantes_registroejecutivo`
--

CREATE TABLE `uf_estudiantes_registroejecutivo` (
  `REGISTRONUM` int(11) NOT NULL,
  `LOGNICKNAME` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `LOGDATE` datetime NOT NULL,
  `APPSET` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ACTION` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `NICKNAMEESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_estudiantes_solicitudes`
--

CREATE TABLE `uf_estudiantes_solicitudes` (
  `SOLICITUDNUMERO` int(10) NOT NULL,
  `TICKET` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `FECHARADICADO` datetime NOT NULL,
  `NICKNAME_ESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `AREADESTINO` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ASUNTO` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CONTENIDO` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ESTADO` tinyint(1) NOT NULL,
  `RESPUESTA` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `FECHAS` json NOT NULL,
  `ESTUDIANTE_PROGRAMA` int(6) DEFAULT NULL,
  `NICKNAMEESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_financiera_servicios`
--

CREATE TABLE `uf_financiera_servicios` (
  `CODIGOSERVICIO` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `DESCRIPCION` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `COSTO` int(11) NOT NULL,
  `IMPUESTO` float(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `uf_financiera_servicios`
--

INSERT INTO `uf_financiera_servicios` (`CODIGOSERVICIO`, `DESCRIPCION`, `COSTO`, `IMPUESTO`) VALUES
('83-32-1', 'Matrícula Programa Académico Pregrado Facultad Basica', 20000, 0.0),
('83-32-2', 'Matrícula Programa Académico Pregrado Facultad Tecnologías', 25000, 0.0),
('83-32-3', 'Matrícula Programa Académico Pregrado Facultad Profesional', 30000, 0.0),
('83-32-4', 'Matrícula Programa Académico Posgrado Especializaciones Facultad Superior', 35000, 0.0),
('83-32-5', 'Matrícula Programa Académico Posgrado Maestrías Facultad Superior', 40000, 0.0),
('83-32-6', 'Matrícula Programa Académico Posgrado Doctorados Facultad Superior', 50000, 0.0),
('83-32-7', 'Matrícula Cursos Extensión', 10000, 0.0),
('83-32-8', 'Matrícula Programa Académico Universal', 70000, 0.0),
('83-37726-1', 'Aprobación Programa e Inmediato Grado Facultad Básica Pregrado', 100000, 0.0),
('83-37726-10', 'Actualizar Nota Actividad Parcial Asignatura a 5.0 Posgrado Doctorado', 10000, 0.0),
('83-37726-11', 'Aprobación Programa e Inmediato Grado Facultad Universal', 400000, 0.0),
('83-37726-12', 'Actualizar Nota Actividad Parcial Asignatura a 5.0 Facultad Universal', 19000, 0.0),
('83-37726-2', 'Aprobación Programa e Inmediato Grado Facultad Tecnologías Pregrado', 150000, 0.0),
('83-37726-3', 'Aprobación Programa e Inmediato Grado Facultad Profesional Pregrado', 200000, 0.0),
('83-37726-4', 'Aprobación Programa e Inmediato Grado Facultad Superior Especializaciones', 250000, 0.0),
('83-37726-5', 'Aprobación Programa e Inmediato Grado Facultad Superior Maestrías', 300000, 0.0),
('83-37726-6', 'Aprobación Programa e Inmediato Grado Facultad Superior Doctorados', 350000, 0.0),
('83-37726-7', 'Aprobación Programa e Inmediata Certificación Cursos Extensión', 100000, 0.0),
('83-37726-8', 'Actualizar Nota Actividad Parcial Asignatura a 5.0 Pregrado', 5000, 0.0),
('83-37726-9', 'Actualizar Nota Actividad Parcial Asignatura a 5.0 Posgrado Especialización/Maestría', 7000, 0.0),
('83-47-1', 'Derechos de grado Facultad Básica Pregrado', 20000, 0.0),
('83-47-2', 'Derechos de grado Facultad Tecnologías Pregrado', 25000, 0.0),
('83-47-3', 'Derechos de grado Facultad Profesional Pregrado', 30000, 0.0),
('83-47-4', 'Derechos de grado Facultad Superior Especializaciones', 35000, 0.0),
('83-47-5', 'Derechos de grado Facultad Superior Maestrías', 40000, 0.0),
('83-47-6', 'Derechos de grado Facultad Superior Doctorados', 50000, 0.0),
('83-47-7', 'Derechos de certificación Cursos Extensión', 10000, 0.0),
('83-47-8', 'Derechos de grado Facultad Universal', 70000, 0.0),
('8321', 'Certificado Estudios Pregrado Último Programa', 2000, 0.0),
('83212', 'Certificado Estudios Pregrado Todos los programas cursados', 3000, 0.0),
('8322', 'Certificado Estudios Posgrado Último Programa', 4000, 0.0),
('83222', 'Certificado Estudios Posgrado Todos los programas cursados', 5000, 0.0),
('8323', 'Certificado Académico Pregrado', 6000, 0.0),
('83232', 'Crédito Académico Pregrado', 10000, 0.0),
('83233', 'Crédito Académico Posgrado', 20000, 0.0),
('83234', 'Crédito Académico Universal', 30000, 0.0),
('8324', 'Certificado Académico Posgrado', 7000, 0.0),
('8325', 'Re-expedición diploma pregrado', 8000, 0.0),
('8326', 'Re-expedición diploma posgrado', 9000, 0.0),
('8331', 'Código PIN Habilitar Asignatura Pregrado', 4000, 0.0),
('8332', 'Código PIN Prueba Suficiencia Pregrado', 5000, 0.0),
('8333', 'Código PIN Aprobación Asignatura Pregrado', 6000, 0.0),
('8334', 'Código PIN Habilitar Asignatura Posgrado', 7000, 0.0),
('8335', 'Código PIN Prueba Suficiencia Posgrado', 8000, 0.0),
('8336', 'Código PIN Aprobación Asignatura Posgrado', 9000, 0.0),
('8337', 'Certificado Estudios Programa Universial Último Programa', 20000, 0.0),
('83372', 'Certificado Estudios Programa Universal Todos los programas cursados', 20000, 0.0),
('8338', 'Certificado Académico', 13000, 0.0),
('83382', 'Re-expedicion Diploma', 16000, 0.0),
('8339', 'Código PIN Habilitar Asignatura Universal', 11000, 0.0),
('83392', 'Código PIN Suficiencia Asignatura Universal', 12000, 0.0),
('83467271', 'Código Pin Inscripción Pregrado', 11000, 0.0),
('83467272', 'Código Pin Inscripción Posgrado', 15000, 0.0),
('83467273', 'Código Pin Inscripción Curso Extensión', 8500, 0.0),
('83467274', 'Código PIN Inscripción Programa Universal', 20000, 0.0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_inscripcion_pin`
--

CREATE TABLE `uf_inscripcion_pin` (
  `PIN` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ID` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `TYPE` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `EMAIL` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `STATE` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_matricula_academica`
--

CREATE TABLE `uf_matricula_academica` (
  `NICKNAME_ESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PERIODOACADEMICO` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PROGRAMACADEMICO` int(11) NOT NULL,
  `PLANESTUDIOSPROGRAMA` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `uf_matricula_academica`
--

INSERT INTO `uf_matricula_academica` (`NICKNAME_ESTUDIANTE`, `PERIODOACADEMICO`, `PROGRAMACADEMICO`, `PLANESTUDIOSPROGRAMA`) VALUES
('estudiante', '20221', 8311, 'PRESID1'),
('estudiante2', '20221', 8311, 'PRESID1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_matricula_estudianteasignatura`
--

CREATE TABLE `uf_matricula_estudianteasignatura` (
  `NICKNAME_ESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CODASIGNATURA` int(11) NOT NULL,
  `GRUPO` int(11) NOT NULL,
  `PERMISOSASIGNATURA` json DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `uf_matricula_estudianteasignatura`
--

INSERT INTO `uf_matricula_estudianteasignatura` (`NICKNAME_ESTUDIANTE`, `CODASIGNATURA`, `GRUPO`, `PERMISOSASIGNATURA`) VALUES
('estudiante', 101, 1, NULL),
('estudiante', 102, 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_matricula_grupos`
--

CREATE TABLE `uf_matricula_grupos` (
  `CODASIGNATURA` int(11) NOT NULL,
  `GRUPO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `uf_matricula_grupos`
--

INSERT INTO `uf_matricula_grupos` (`CODASIGNATURA`, `GRUPO`) VALUES
(101, 1),
(102, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_matricula_horarios`
--

CREATE TABLE `uf_matricula_horarios` (
  `CODASIGNATURA` int(11) NOT NULL,
  `GRUPO` int(11) NOT NULL,
  `CONFIG_LUN` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CONFIG_MAR` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CONFIG_MIE` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CONFIG_JUE` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CONFIG_VIE` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CONFIG_SAB` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CONFIG_DOM` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `uf_matricula_horarios`
--

INSERT INTO `uf_matricula_horarios` (`CODASIGNATURA`, `GRUPO`, `CONFIG_LUN`, `CONFIG_MAR`, `CONFIG_MIE`, `CONFIG_JUE`, `CONFIG_VIE`, `CONFIG_SAB`, `CONFIG_DOM`) VALUES
(101, 1, '1A-101/08:00>>10:00', '', '1A-101/08:30>>10:30', '', '1A-101/08:30>>10:30', '', ''),
(102, 2, '1A-101/10:30>>16:00', '1A-101/20:00>>22:00', '', '', '1A-101/20:00>>22:00', '1A-101/20:00>>22:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_memorandos`
--

CREATE TABLE `uf_memorandos` (
  `CODIGOMEMORANDO` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NICKNAME_EMISOR` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NICKNAME_RECEPTOR` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `IMPORTANCIA` tinyint(4) NOT NULL,
  `ADJUNTO` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ESTADOMEMORANDO` tinyint(4) NOT NULL,
  `FECHA_EMISION` datetime NOT NULL,
  `NICKNAME` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_pagosmatricula`
--

CREATE TABLE `uf_pagosmatricula` (
  `NICKNAME_ESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `REFERENCIAPAGO` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `REFERENCIASERVICIO` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `DESCUENTOS` json DEFAULT NULL,
  `ESTADOPAGO` int(11) NOT NULL,
  `REFERENCIASEXTRAS` json DEFAULT NULL,
  `NICKNAME` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_personalinstitucional`
--

CREATE TABLE `uf_personalinstitucional` (
  `NICKNAME` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `DEPARTAMENTO` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `AREA` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CARGO` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CONTRATACION` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ESTADO` varchar(4) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `TIPOPERSONAL` varchar(4) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `uf_personalinstitucional`
--

INSERT INTO `uf_personalinstitucional` (`NICKNAME`, `DEPARTAMENTO`, `AREA`, `CARGO`, `CONTRATACION`, `ESTADO`, `TIPOPERSONAL`) VALUES
('dalarcont', 'FACPRO', '', 'PROF15', 'TERDEF', 'E1', 'T1'),
('dalarcont', 'POTUS', '', 'JEFE00', 'PLANTA', 'E1', 'T0'),
('jmtabaress', 'FACPRO', '', 'PROF11', 'TERDEF', 'E1', 'T1'),
('jmtabaress', 'VIACAD', '', 'JEFE01', 'PLANTA', 'E1', 'T0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_personas`
--

CREATE TABLE `uf_personas` (
  `FECHAREGISTRO` datetime NOT NULL,
  `IDPERSONA` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `NOMBRES` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `APELLIDOS` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `NICKNAME` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `GENERO` varchar(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `EMAIL_LABORAL` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ORIGEN_PAIS` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ORIGEN_CIUDAD` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `RESIDE_PAIS` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `RESIDE_CIUDAD` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ESCOLARIDAD` varchar(4) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `uf_personas`
--

INSERT INTO `uf_personas` (`FECHAREGISTRO`, `IDPERSONA`, `NOMBRES`, `APELLIDOS`, `NICKNAME`, `GENERO`, `EMAIL_LABORAL`, `ORIGEN_PAIS`, `ORIGEN_CIUDAD`, `RESIDE_PAIS`, `RESIDE_CIUDAD`, `ESCOLARIDAD`) VALUES
('2021-03-30 07:14:29', '15-6165004', 'Adena', 'Adolfsen', 'aadolfsena9', 'F', 'aadolfsena9@universidadfalsa.com', 'PH', 'Magtaking', 'CN', 'Hezuoqiao', 'ESC3'),
('2020-01-01 19:32:13', '83-1661428', 'Abbey', 'Alabone', 'aalabone3h', 'F', 'aalabone3h@universidadfalsa.com', 'RU', 'Knyaginino', 'IL', 'Even Yehuda', 'ESC6'),
('2020-04-10 22:24:10', '53-5355144', 'Arabel', 'Antcliff', 'aantcliff6b', 'F', 'aantcliff6b@universidadfalsa.com', 'CN', 'Da’an', 'CN', 'Chenzhou', 'ESC1'),
('2021-06-26 01:12:47', '12-6180095', 'Angel', 'Berthome', 'aberthomece', 'M', 'aberthomece@universidadfalsa.com', 'CN', 'Hantai', 'CN', 'Caohe', 'ESC2'),
('2020-07-22 04:27:07', '94-4461526', 'Alleen', 'Bessant', 'abessanthn', 'F', 'abessanthn@universidadfalsa.com', 'ID', 'Lebak', 'PL', 'Jasionów', 'ESC5'),
('2020-09-03 16:49:27', '24-7190493', 'Alta', 'Bircher', 'abircherg', 'F', 'abircherg@universidadfalsa.com', 'PL', 'Bystrzyca', 'AR', 'Rivadavia', 'ESC2'),
('2021-02-08 21:27:16', '77-0428878', 'Aili', 'Bloxland', 'abloxlandi0', 'F', 'abloxlandi0@universidadfalsa.com', 'GR', 'Argithéa', 'IR', 'Fareydūnshahr', 'ESC7'),
('2021-10-25 09:03:36', '75-7548487', 'Arline', 'Bouch', 'abouchm4', 'F', 'abouchm4@universidadfalsa.com', 'CN', 'Huangtan', 'CN', 'Shuangshan', 'ESC2'),
('2020-11-06 03:02:31', '29-2471481', 'Ardath', 'Bound', 'aboundpo', 'F', 'aboundpo@universidadfalsa.com', 'ID', 'Siborong-borong', 'CN', 'Tunguang', 'ESC3'),
('2020-11-29 05:50:10', '45-3235375', 'Abba', 'Bramstom', 'abramstom1j', 'M', 'abramstom1j@universidadfalsa.com', 'ID', 'Panineungan', 'BY', 'Karanyowka', 'ESC2'),
('2021-11-16 20:16:53', '10-4565256', 'Aldon', 'Breitler', 'abreitlerat', 'M', 'abreitlerat@universidadfalsa.com', 'MY', 'Petaling Jaya', 'ID', 'Palebunan', 'ESC7'),
('2021-04-05 10:09:23', '87-3041323', 'Arney', 'Calderon', 'acalderonqd', 'M', 'acalderonqd@universidadfalsa.com', 'AR', 'Chacabuco', 'UA', 'Chernelytsya', 'ESC6'),
('2020-07-09 23:48:44', '52-5368286', 'Arnuad', 'Casoni', 'acasonics', 'M', 'acasonics@universidadfalsa.com', 'RU', 'Volokolamsk', 'PL', 'Żarki', 'ESC4'),
('2020-06-25 05:04:24', '78-1346548', 'Ashlen', 'Cattle', 'acattle29', 'F', 'acattle29@universidadfalsa.com', 'CN', 'Shuangpu', 'CN', 'Zhengji', 'ESC5'),
('2020-01-17 23:32:32', '43-6094081', 'Ashla', 'Clemendet', 'aclemendet1p', 'F', 'aclemendet1p@universidadfalsa.com', 'CU', 'Florencia', 'CN', 'Zougang', 'ESC1'),
('2021-09-15 17:50:27', '33-6088994', 'Abie', 'Colton', 'acoltonrk', 'M', 'acoltonrk@universidadfalsa.com', 'ET', 'Goba', 'FR', 'Compiègne', 'ESC3'),
('2020-04-19 04:36:09', '31-5770854', 'Adelice', 'Combes', 'acombeske', 'F', 'acombeske@universidadfalsa.com', 'CY', 'Pergamos', 'CA', 'Winnipeg', 'ESC3'),
('2021-07-12 08:05:59', '59-2543470', 'Adore', 'Comolli', 'acomollib4', 'F', 'acomollib4@universidadfalsa.com', 'PH', 'Manabo', 'CN', 'Sanfang', 'ESC2'),
('2021-06-17 00:44:03', '30-9195121', 'Aleda', 'Costerd', 'acosterdoc', 'F', 'acosterdoc@universidadfalsa.com', 'MX', 'La Loma', 'NG', 'Bununu Kasa', 'ESC2'),
('2020-07-19 01:16:14', '06-4480186', 'Antonius', 'Dawid', 'adawidr0', 'M', 'adawidr0@universidadfalsa.com', 'LK', 'Battaramulla South', 'JP', 'Shiroi', 'ESC6'),
('2021-01-19 10:42:41', '87-5377364', 'Amery', 'Deveril', 'adeverilmr', 'M', 'adeverilmr@universidadfalsa.com', 'RU', 'Zaokskiy', 'CN', 'Huangqiang', 'ESC2'),
('2021-01-20 18:46:20', '30-5259703', 'Ana', 'Dingle', 'adingle3f', 'F', 'adingle3f@universidadfalsa.com', 'CN', 'Guniushan', 'CM', 'Nanga Eboko', 'ESC6'),
('2020-04-25 11:07:58', '39-8800983', 'Ambros', 'Ditchfield', 'aditchfieldc3', 'M', 'aditchfieldc3@universidadfalsa.com', 'CN', 'Tangchijie', 'ID', 'Tarikolot', 'ESC2'),
('2021-02-10 19:17:30', '60-9769961', 'Amitie', 'Dorset', 'adorsethx', 'F', 'adorsethx@universidadfalsa.com', 'FR', 'Orléans', 'CN', 'Dehui', 'ESC5'),
('2020-02-22 07:06:22', '45-7635450', 'Arin', 'Doubrava', 'adoubrava2a', 'M', 'adoubrava2a@universidadfalsa.com', 'CN', 'Danxi', 'ID', 'Margahayu', 'ESC1'),
('2020-08-14 13:16:40', '22-4156881', 'Arlee', 'Esson', 'aessonqe', 'F', 'aessonqe@universidadfalsa.com', 'CA', 'Sherwood Park', 'CN', 'Zhenzhushan', 'ESC5'),
('2020-12-01 22:19:50', '61-9994304', 'Amos', 'Exrol', 'aexrol7t', 'M', 'aexrol7t@universidadfalsa.com', 'CG', 'Djambala', 'RU', 'Khlevnoye', 'ESC4'),
('2020-06-22 23:46:49', '81-7655201', 'Ariana', 'Fatscher', 'afatscherfu', 'F', 'afatscherfu@universidadfalsa.com', 'CA', 'North Vancouver', 'CN', 'Haoguantun', 'ESC7'),
('2021-10-11 19:16:47', '35-5582710', 'Abran', 'Fereday', 'aferedaybi', 'M', 'aferedaybi@universidadfalsa.com', 'PS', 'Bīr Zayt', 'AL', 'Belsh', 'ESC7'),
('2020-05-09 04:15:19', '12-0964757', 'Alanson', 'Freiberg', 'afreiberg1t', 'M', 'afreiberg1t@universidadfalsa.com', 'ZA', 'Brandfort', 'TL', 'Venilale', 'ESC6'),
('2021-11-22 22:22:13', '72-7963146', 'Alis', 'Gainsburgh', 'againsburgh8j', 'F', 'againsburgh8j@universidadfalsa.com', 'JP', 'Hiratsuka', 'RE', 'Saint-Denis', 'ESC2'),
('2020-02-03 03:47:39', '56-2278841', 'Adrea', 'Geibel', 'ageibelbh', 'F', 'ageibelbh@universidadfalsa.com', 'CN', 'Chaowai', 'BY', 'Kryvichy', 'ESC1'),
('2020-01-03 05:02:14', '57-4183699', 'Aurie', 'Gernier', 'agerniernq', 'F', 'agerniernq@universidadfalsa.com', 'CN', 'Yilan', 'NP', 'Banepa', 'ESC6'),
('2021-07-01 19:30:52', '57-8808360', 'Anestassia', 'Getsham', 'agetshamh5', 'F', 'agetshamh5@universidadfalsa.com', 'ID', 'Merdeka', 'BY', 'Khodasy', 'ESC6'),
('2020-12-23 23:24:34', '48-9610140', 'Almeta', 'Gittoes', 'agittoesdn', 'F', 'agittoesdn@universidadfalsa.com', 'CN', 'Fushan', 'MK', 'Demir Hisar', 'ESC1'),
('2021-10-24 03:48:54', '75-2095282', 'Arlene', 'Gonin', 'agonin2b', 'F', 'agonin2b@universidadfalsa.com', 'CA', 'Boissevain', 'MD', 'Slobozia', 'ESC7'),
('2020-08-16 09:26:30', '04-7893798', 'Aldus', 'Harnes', 'aharnes28', 'M', 'aharnes28@universidadfalsa.com', 'BD', 'Bāndarban', 'EG', 'Al Bawīţī', 'ESC5'),
('2020-03-05 16:19:10', '90-9785028', 'Alphonso', 'Havis', 'ahavisjs', 'M', 'ahavisjs@universidadfalsa.com', 'GR', 'Áno Kómi', 'CO', 'San Benito Abad', 'ESC7'),
('2020-01-31 09:14:26', '22-5120780', 'August', 'Hull', 'ahull1a', 'M', 'ahull1a@universidadfalsa.com', 'XK', 'Zubin Potok', 'ID', 'Panyingkiran', 'ESC3'),
('2021-09-22 10:13:08', '62-7232335', 'Arie', 'Jansky', 'ajanskydc', 'M', 'ajanskydc@universidadfalsa.com', 'CN', 'Fulu', 'SM', 'Poggio di Chiesanuova', 'ESC7'),
('2020-04-07 01:41:10', '16-0718310', 'Angelico', 'Johnsee', 'ajohnsee2v', 'M', 'ajohnsee2v@universidadfalsa.com', 'JP', 'Shimodate', 'MN', 'Bayshint', 'ESC5'),
('2021-02-19 22:42:08', '80-8911108', 'Adah', 'Jopke', 'ajopkeoh', 'F', 'ajopkeoh@universidadfalsa.com', 'MA', 'Adassil', 'ID', 'Serang', 'ESC5'),
('2021-04-02 06:01:16', '27-4913364', 'Ashlan', 'Kerner', 'akernerdw', 'F', 'akernerdw@universidadfalsa.com', 'RU', 'Staraya Kupavna', 'PH', 'Maddela', 'ESC5'),
('2020-02-17 10:37:54', '34-3833400', 'Aymer', 'Lakey', 'alakeyfb', 'M', 'alakeyfb@universidadfalsa.com', 'GR', 'Kerasochóri', 'MK', 'Selce', 'ESC4'),
('2020-12-13 18:50:11', '75-9136731', 'Arron', 'Lehrmann', 'alehrmann6s', 'M', 'alehrmann6s@universidadfalsa.com', 'RU', 'Sovetskaya', 'PH', 'Magdug', 'ESC6'),
('2020-02-16 10:57:25', '66-5668876', 'Adolf', 'Linstead', 'alinsteado', 'M', 'alinsteado@universidadfalsa.com', 'KE', 'Embu', 'PL', 'Stoszowice', 'ESC5'),
('2020-08-14 10:06:08', '10-7872397', 'Arney', 'Maffetti', 'amaffetti82', 'M', 'amaffetti82@universidadfalsa.com', 'CN', 'Leiling', 'CN', 'Luci', 'ESC2'),
('2021-04-05 02:21:34', '80-8005296', 'Adrienne', 'Maffi', 'amaffi2n', 'F', 'amaffi2n@universidadfalsa.com', 'MA', 'Rislane', 'AO', 'Cabinda', 'ESC2'),
('2021-07-13 12:45:25', '90-5963136', 'Audrye', 'Mc Combe', 'amccombeol', 'F', 'amccombeol@universidadfalsa.com', 'GR', 'Áyioi Apóstoloi', 'PL', 'Łubnice', 'ESC1'),
('2021-03-17 15:45:23', '96-9664470', 'Andie', 'McMaster', 'amcmasterkc', 'M', 'amcmasterkc@universidadfalsa.com', 'VN', 'Thuận Nam', 'RS', 'Šid', 'ESC3'),
('2021-01-17 02:41:29', '37-3939308', 'Anabelle', 'Mealand', 'amealandec', 'F', 'amealandec@universidadfalsa.com', 'GR', 'Níkaia', 'ZA', 'Wolmaransstad', 'ESC7'),
('2020-11-12 19:39:53', '60-2482386', 'Ardine', 'Meysham', 'ameyshamlh', 'F', 'ameyshamlh@universidadfalsa.com', 'DO', 'Hondo Valle', 'RS', 'Ljukovo', 'ESC7'),
('2020-12-29 01:56:23', '20-2844918', 'Ardisj', 'Michele', 'amichelea3', 'F', 'amichelea3@universidadfalsa.com', 'CN', 'Bailianhe', 'CN', 'Xinsheng', 'ESC3'),
('2021-04-04 10:51:14', '39-5730159', 'Ashlen', 'Mosten', 'amostenqy', 'F', 'amostenqy@universidadfalsa.com', 'AR', 'Junín', 'BR', 'Macau', 'ESC6'),
('2021-09-02 18:01:17', '30-3835639', 'Ardelia', 'Neligan', 'aneliganeu', 'F', 'aneliganeu@universidadfalsa.com', 'PT', 'Barreira', 'TN', 'La Goulette', 'ESC6'),
('2020-04-14 22:28:32', '75-8439195', 'Amie', 'Obbard', 'aobbardkr', 'F', 'aobbardkr@universidadfalsa.com', 'XK', 'Lumbardhi', 'PE', 'Jivia', 'ESC3'),
('2020-04-23 10:38:14', '89-4153194', 'Alonzo', 'Palay', 'apalayjn', 'M', 'apalayjn@universidadfalsa.com', 'BR', 'Mafra', 'PL', 'Obsza', 'ESC7'),
('2021-08-17 13:09:20', '49-3839431', 'Aviva', 'Paylor', 'apaylorbv', 'F', 'apaylorbv@universidadfalsa.com', 'BR', 'Cacoal', 'CN', 'Jinhe', 'ESC6'),
('2020-08-11 18:58:54', '52-9186566', 'Aldon', 'Pesterfield', 'apesterfield8r', 'M', 'apesterfield8r@universidadfalsa.com', 'EG', 'Shibīn al Qanāţir', 'CN', 'Longshan', 'ESC6'),
('2021-02-22 04:25:50', '68-8161614', 'Ado', 'Plumbley', 'aplumbley5f', 'M', 'aplumbley5f@universidadfalsa.com', 'GT', 'San Luis Jilotepeque', 'UY', 'Nuevo Berlín', 'ESC6'),
('2020-09-23 06:38:57', '88-8667794', 'Ardys', 'Pocock', 'apocockly', 'F', 'apocockly@universidadfalsa.com', 'PT', 'Zambujal', 'JM', 'Wakefield', 'ESC1'),
('2021-03-17 00:50:31', '09-9175426', 'Annissa', 'Poundford', 'apoundfordc0', 'F', 'apoundfordc0@universidadfalsa.com', 'PE', 'Huaranchal', 'ID', 'Aemura', 'ESC2'),
('2021-05-22 22:32:23', '88-8079082', 'Angelika', 'Purseglove', 'apurseglove7q', 'F', 'apurseglove7q@universidadfalsa.com', 'UZ', 'Sirdaryo', 'PS', 'Ţūlkarm', 'ESC5'),
('2022-05-11 14:47:10', '0011223344', 'Aquiles', 'Bailo', 'aquibailo', 'M', 'CONCAT(NICKNAME,\"@universidadfalsa.com\")', 'JP', 'Tokyo', 'CO', 'Pereira', 'ESC6'),
('2020-03-17 00:14:41', '75-4006292', 'Alden', 'Rangeley', 'arangeleyk8', 'M', 'arangeleyk8@universidadfalsa.com', 'PT', 'Azueira', 'TH', 'Ban Nong Wua So', 'ESC7'),
('2020-07-30 19:46:46', '08-4586375', 'Alexine', 'Ricciardiello', 'aricciardiello86', 'F', 'aricciardiello86@universidadfalsa.com', 'RU', 'Dubinino', 'AM', 'Ejmiatsin', 'ESC4'),
('2021-06-23 22:14:34', '51-2608722', 'Aluin', 'Robinet', 'arobinetkn', 'M', 'arobinetkn@universidadfalsa.com', 'AL', 'Mesopotam', 'PT', 'Andorinha', 'ESC6'),
('2020-08-23 09:24:03', '58-4374265', 'Alfonse', 'Rosenfeld', 'arosenfeld91', 'M', 'arosenfeld91@universidadfalsa.com', 'CN', 'Shunling', 'CN', 'Zhangtan', 'ESC5'),
('2020-02-06 09:28:58', '87-9676061', 'Auguste', 'Roxburgh', 'aroxburghkf', 'F', 'aroxburghkf@universidadfalsa.com', 'AW', 'Oranjestad', 'ZA', 'Bloemfontein', 'ESC7'),
('2021-07-16 03:24:48', '43-7913572', 'Adelice', 'Rylett', 'arylettie', 'F', 'arylettie@universidadfalsa.com', 'PE', 'Cocachacra', 'CN', 'Shuigou', 'ESC7'),
('2021-07-22 18:53:27', '41-2401586', 'Arte', 'Starkings', 'astarkingshe', 'M', 'astarkingshe@universidadfalsa.com', 'CN', 'Hongshi', 'CA', 'Napanee Downtown', 'ESC7'),
('2020-07-14 21:47:50', '47-3831345', 'Abraham', 'Stockwell', 'astockwell4g', 'M', 'astockwell4g@universidadfalsa.com', 'LK', 'Talpe', 'CZ', 'Libouchec', 'ESC1'),
('2020-05-10 13:01:42', '07-3849345', 'Alisa', 'Stonner', 'astonnerda', 'F', 'astonnerda@universidadfalsa.com', 'CN', 'Dongshangguan', 'CA', 'Hanna', 'ESC2'),
('2021-08-30 19:49:50', '85-8723701', 'Ashley', 'Stoves', 'astovesiz', 'F', 'astovesiz@universidadfalsa.com', 'RU', 'Staryy Urukh', 'SE', 'Örebro', 'ESC2'),
('2020-02-24 02:08:39', '46-0423939', 'Antony', 'Strank', 'astrank9u', 'M', 'astrank9u@universidadfalsa.com', 'AR', 'Valcheta', 'RU', 'Kangalassy', 'ESC3'),
('2021-06-06 02:13:59', '40-5533905', 'Athena', 'Strowthers', 'astrowthersmy', 'F', 'astrowthersmy@universidadfalsa.com', 'IE', 'Caherconlish', 'SE', 'Boden', 'ESC4'),
('2021-03-28 11:40:50', '90-7935236', 'Adelheid', 'Surgen', 'asurgen21', 'F', 'asurgen21@universidadfalsa.com', 'CN', 'Xiong’erzhai', 'PH', 'Sagay', 'ESC4'),
('2020-06-24 20:57:19', '32-3031110', 'Alaster', 'Surmeyers', 'asurmeyersgu', 'M', 'asurmeyersgu@universidadfalsa.com', 'LK', 'Hendala', 'ID', 'Lewopao', 'ESC1'),
('2021-07-06 05:52:30', '31-0742315', 'Alexis', 'Thorby', 'athorby5n', 'M', 'athorby5n@universidadfalsa.com', 'PH', 'Siraway', 'PH', 'Pogonsili', 'ESC6'),
('2020-01-09 23:36:59', '78-7474208', 'Aprilette', 'Thurnham', 'athurnhaml5', 'F', 'athurnhaml5@universidadfalsa.com', 'TH', 'Songkhla', 'PL', 'Nowe Miasto', 'ESC6'),
('2020-07-06 03:42:35', '93-6462541', 'Anna-maria', 'Timby', 'atimby4q', 'F', 'atimby4q@universidadfalsa.com', 'TH', 'Mae Lao', 'CN', 'Yangchun', 'ESC7'),
('2021-08-03 10:05:40', '99-4534062', 'Avigdor', 'Toppin', 'atoppincr', 'M', 'atoppincr@universidadfalsa.com', 'AM', 'Parravak’ar', 'RU', 'Mayskiy', 'ESC3'),
('2020-01-08 10:38:00', '37-5541980', 'Alick', 'Ugolini', 'augolini55', 'M', 'augolini55@universidadfalsa.com', 'PT', 'Horta', 'VN', 'Nam Sách', 'ESC5'),
('2020-03-25 18:25:40', '20-0741647', 'Amby', 'Wharby', 'awharbyc1', 'M', 'awharbyc1@universidadfalsa.com', 'BR', 'Saubara', 'CN', 'Jiashan', 'ESC5'),
('2021-01-11 18:33:01', '23-2433786', 'Adelind', 'Wisdish', 'awisdish3n', 'F', 'awisdish3n@universidadfalsa.com', 'CU', 'Jaruco', 'BR', 'José de Freitas', 'ESC1'),
('2021-01-13 01:20:23', '44-1946601', 'Allyn', 'Wooldridge', 'awooldridgel2', 'F', 'awooldridgel2@universidadfalsa.com', 'CN', 'Renhe', 'US', 'Frankfort', 'ESC5'),
('2020-08-06 03:05:01', '15-1896258', 'Bondie', 'Ackred', 'backredkb', 'M', 'backredkb@universidadfalsa.com', 'KY', 'East End', 'ID', 'Gowa', 'ESC2'),
('2021-03-14 10:53:48', '98-4502464', 'Bent', 'Andreichik', 'bandreichikdl', 'M', 'bandreichikdl@universidadfalsa.com', 'ID', 'Pakisaji', 'CN', 'Hengli', 'ESC3'),
('2020-07-31 18:57:22', '90-9345522', 'Brandtr', 'Antuoni', 'bantuoniau', 'M', 'bantuoniau@universidadfalsa.com', 'RU', 'Lyubokhna', 'TH', 'Nong Phok', 'ESC6'),
('2020-06-07 17:19:10', '64-5491559', 'Bentley', 'Attenborough', 'battenboroughjf', 'M', 'battenboroughjf@universidadfalsa.com', 'RU', 'Kangalassy', 'MA', 'Amouguer', 'ESC1'),
('2020-07-18 13:21:27', '61-3920658', 'Brod', 'Aupol', 'baupolv', 'M', 'baupolv@universidadfalsa.com', 'ID', 'Sungai Nyamuk', 'CN', 'Donghe', 'ESC5'),
('2021-09-08 18:51:35', '40-9617554', 'Berni', 'Belfelt', 'bbelfelt9d', 'F', 'bbelfelt9d@universidadfalsa.com', 'MX', 'Benito Juarez', 'BR', 'Ji Paraná', 'ESC3'),
('2021-07-20 13:04:20', '21-1870720', 'Bryn', 'Billett', 'bbillettn5', 'M', 'bbillettn5@universidadfalsa.com', 'CA', 'Bromont', 'CO', 'Palmira', 'ESC4'),
('2020-02-04 12:47:43', '71-7506651', 'Bernice', 'Blanko', 'bblanko6f', 'F', 'bblanko6f@universidadfalsa.com', 'PH', 'Victoria', 'US', 'Mobile', 'ESC2'),
('2020-05-01 05:04:48', '83-6639110', 'Berton', 'Boone', 'bbooneey', 'M', 'bbooneey@universidadfalsa.com', 'CN', 'Yidao', 'CN', 'Dadong', 'ESC3'),
('2020-12-18 16:50:30', '22-8043942', 'Bethena', 'Buckerfield', 'bbuckerfield8u', 'F', 'bbuckerfield8u@universidadfalsa.com', 'TH', 'Bo Phloi', 'CN', 'Yaqian', 'ESC7'),
('2020-05-09 21:46:12', '42-6395538', 'Bartie', 'Buttrum', 'bbuttrumgt', 'M', 'bbuttrumgt@universidadfalsa.com', 'CN', 'Leshan', 'CN', 'Tiantang', 'ESC3'),
('2021-06-13 03:19:45', '81-0887035', 'Berton', 'Carleman', 'bcarlemanq2', 'M', 'bcarlemanq2@universidadfalsa.com', 'CN', 'Yuanguping', 'NG', 'Zungeru', 'ESC3'),
('2020-10-10 05:50:20', '29-6008223', 'Baillie', 'Cornehl', 'bcornehl6r', 'M', 'bcornehl6r@universidadfalsa.com', 'IR', 'Āzādshahr', 'KM', 'Mtsamdou', 'ESC3'),
('2021-04-16 09:09:45', '03-6422424', 'Barny', 'Creffeild', 'bcreffeildc7', 'M', 'bcreffeildc7@universidadfalsa.com', 'CA', 'Thetford-Mines', 'ID', 'Gresik', 'ESC1'),
('2021-06-08 23:39:10', '08-5800676', 'Beatriz', 'Crosen', 'bcrosenen', 'F', 'bcrosenen@universidadfalsa.com', 'RU', 'Ishim', 'CA', 'Danville', 'ESC5'),
('2020-03-14 12:23:40', '92-6466571', 'Baryram', 'Dalziell', 'bdalzielllw', 'M', 'bdalzielllw@universidadfalsa.com', 'BY', 'Tsimkavichy', 'MA', 'Tissa', 'ESC7'),
('2020-01-22 08:15:30', '06-0033732', 'Beryl', 'Donnan', 'bdonnannx', 'F', 'bdonnannx@universidadfalsa.com', 'SE', 'Falun', 'CZ', 'Černilov', 'ESC6'),
('2021-01-13 08:33:43', '49-9360695', 'Britni', 'Dradey', 'bdradey4m', 'F', 'bdradey4m@universidadfalsa.com', 'RU', 'Ust’-Abakan', 'CN', 'Guishan', 'ESC1'),
('2020-07-23 04:12:22', '58-7511465', 'Berke', 'Duerdin', 'bduerdinnz', 'M', 'bduerdinnz@universidadfalsa.com', 'MM', 'Myanaung', 'CN', 'Guanli', 'ESC1'),
('2020-12-12 02:44:29', '21-6207693', 'Blair', 'Duguid', 'bduguid7z', 'M', 'bduguid7z@universidadfalsa.com', 'ID', 'Besah', 'PH', 'Tubod', 'ESC4'),
('2020-05-26 09:31:55', '83-8352864', 'Babbette', 'Dunster', 'bdunsterms', 'F', 'bdunsterms@universidadfalsa.com', 'RU', 'Admiralteisky', 'TZ', 'Tabora', 'ESC2'),
('2021-07-20 10:44:41', '76-5381858', 'Brod', 'Edney', 'bedneyif', 'M', 'bedneyif@universidadfalsa.com', 'PH', 'Cama Juan', 'ID', 'Kablukan', 'ESC1'),
('2020-07-03 13:57:21', '32-3545995', 'Burgess', 'Ferguson', 'bferguson22', 'M', 'bferguson22@universidadfalsa.com', 'PL', 'Żyrardów', 'ID', 'Kusi', 'ESC1'),
('2020-05-31 23:35:39', '93-6014617', 'Bertha', 'Gavrielli', 'bgavrielliod', 'F', 'bgavrielliod@universidadfalsa.com', 'PH', 'Lopez Jaena', 'TH', 'Dusit', 'ESC4'),
('2021-05-12 14:11:20', '95-9611016', 'Benedikt', 'Giddons', 'bgiddonset', 'M', 'bgiddonset@universidadfalsa.com', 'PH', 'Gutalac', 'BD', 'Dohār', 'ESC3'),
('2020-01-25 01:17:16', '21-3571810', 'Brandon', 'Glanister', 'bglanisteraq', 'M', 'bglanisteraq@universidadfalsa.com', 'IR', 'Arāk', 'RU', 'Isheyevka', 'ESC3'),
('2020-12-21 19:50:27', '70-2157563', 'Brant', 'Golby', 'bgolby7c', 'M', 'bgolby7c@universidadfalsa.com', 'BR', 'Patos', 'CN', 'Nangong', 'ESC2'),
('2021-10-06 19:20:00', '69-7098514', 'Berrie', 'Grogona', 'bgrogonafj', 'F', 'bgrogonafj@universidadfalsa.com', 'CN', 'Xiazhai', 'ID', 'Wolometang', 'ESC6'),
('2021-01-30 10:55:39', '30-3204222', 'Bernhard', 'Hodges', 'bhodges9c', 'M', 'bhodges9c@universidadfalsa.com', 'RU', 'Kulunda', 'ID', 'Kedungtuban', 'ESC2'),
('2020-07-03 09:17:24', '20-1757687', 'Barbara-anne', 'Joyes', 'bjoyesq9', 'F', 'bjoyesq9@universidadfalsa.com', 'CN', 'Pimian', 'CO', 'La Unión', 'ESC5'),
('2021-01-26 17:26:38', '72-6999381', 'Bianca', 'Kibby', 'bkibbyb9', 'F', 'bkibbyb9@universidadfalsa.com', 'FR', 'Toulouse', 'CZ', 'Zbraslav', 'ESC2'),
('2021-11-05 06:54:33', '24-6782600', 'Brana', 'Legister', 'blegister71', 'F', 'blegister71@universidadfalsa.com', 'CN', 'Dangmu', 'SE', 'Kristianstad', 'ESC3'),
('2021-04-22 02:34:38', '23-7745597', 'Brittani', 'MacAdam', 'bmacadamkq', 'F', 'bmacadamkq@universidadfalsa.com', 'BR', 'Valinhos', 'ID', 'Sumuragung', 'ESC6'),
('2020-10-14 10:26:12', '89-5359679', 'Bail', 'Maidstone', 'bmaidstonei6', 'M', 'bmaidstonei6@universidadfalsa.com', 'AZ', 'Shamakhi', 'CN', 'Wan’an', 'ESC3'),
('2020-12-09 02:52:38', '92-3217505', 'Braden', 'McGaughie', 'bmcgaughie4y', 'M', 'bmcgaughie4y@universidadfalsa.com', 'AR', 'Trelew', 'LT', 'Lazdijai', 'ESC5'),
('2020-02-24 00:20:02', '45-6758722', 'Bathsheba', 'McGinney', 'bmcginney1g', 'F', 'bmcginney1g@universidadfalsa.com', 'RS', 'Kraljevo', 'CN', 'Yanghou', 'ESC4'),
('2021-04-14 20:27:04', '19-8291926', 'Bentlee', 'Menendez', 'bmenendez5v', 'M', 'bmenendez5v@universidadfalsa.com', 'CN', 'Xiangdian', 'CN', 'Shanxia', 'ESC6'),
('2020-05-12 16:58:23', '09-3480411', 'Belvia', 'Milne', 'bmilne7m', 'F', 'bmilne7m@universidadfalsa.com', 'PL', 'Baruchowo', 'CN', 'Huangshagang', 'ESC5'),
('2021-05-05 11:27:09', '47-8855116', 'Barbara', 'Mundie', 'bmundieg1', 'F', 'bmundieg1@universidadfalsa.com', 'VE', 'Pedraza La Vieja', 'US', 'Spring', 'ESC7'),
('2020-09-03 10:51:17', '03-0994511', 'Brinna', 'Nealand', 'bnealandhm', 'F', 'bnealandhm@universidadfalsa.com', 'CN', 'Xinghua', 'US', 'Albany', 'ESC2'),
('2021-06-03 15:32:54', '09-1023999', 'Barnabas', 'Norheny', 'bnorhenyov', 'M', 'bnorhenyov@universidadfalsa.com', 'TH', 'Watthana Nakhon', 'CN', 'Baitang', 'ESC2'),
('2021-06-01 20:50:47', '74-5740963', 'Binni', 'Pettit', 'bpettit4a', 'F', 'bpettit4a@universidadfalsa.com', 'US', 'Arlington', 'RU', 'Tsementnozavodskiy', 'ESC6'),
('2020-09-04 03:19:57', '84-9426874', 'Blane', 'Pingstone', 'bpingstoner5', 'M', 'bpingstoner5@universidadfalsa.com', 'CN', 'Zhengdun', 'NP', 'Gaur', 'ESC3'),
('2020-09-24 08:12:34', '39-9724776', 'Bruce', 'Prene', 'bprenef2', 'M', 'bprenef2@universidadfalsa.com', 'CN', 'Kulun', 'ID', 'Lubuk Sikaping', 'ESC1'),
('2020-08-10 23:29:13', '10-9440320', 'Bevan', 'Probets', 'bprobetscm', 'M', 'bprobetscm@universidadfalsa.com', 'PH', 'Patpata Segundo', 'RU', 'Kalashnikovo', 'ESC4'),
('2020-07-25 07:16:48', '47-9714947', 'Beatriz', 'Roubeix', 'broubeixai', 'F', 'broubeixai@universidadfalsa.com', 'PH', 'Dukay', 'BR', 'Elói Mendes', 'ESC4'),
('2021-09-21 10:05:43', '88-2921688', 'Benedict', 'Slisby', 'bslisbyfl', 'M', 'bslisbyfl@universidadfalsa.com', 'PT', 'Ribafria', 'CN', 'Kangxung', 'ESC5'),
('2021-07-01 01:48:59', '20-1113992', 'Barclay', 'Sollon', 'bsollonah', 'M', 'bsollonah@universidadfalsa.com', 'CN', 'Yangjingziwan', 'PS', 'An Naşr', 'ESC4'),
('2021-10-27 09:54:17', '86-8903517', 'Bambi', 'Tait', 'btaitli', 'F', 'btaitli@universidadfalsa.com', 'ID', 'Cihaurbeuti', 'KE', 'Garissa', 'ESC4'),
('2021-11-19 04:18:29', '91-3517334', 'Bianca', 'Temprell', 'btemprellne', 'F', 'btemprellne@universidadfalsa.com', 'ID', 'Cibaregbeg', 'BF', 'Boulsa', 'ESC3'),
('2020-09-11 16:06:33', '08-9288481', 'Bank', 'Trenchard', 'btrenchard9a', 'M', 'btrenchard9a@universidadfalsa.com', 'RU', 'Gritsovskiy', 'SE', 'Eslöv', 'ESC3'),
('2021-08-27 11:59:26', '77-7686124', 'Benson', 'Vevers', 'bveversf1', 'M', 'bveversf1@universidadfalsa.com', 'IQ', 'Ramadi', 'CN', 'Jiqu', 'ESC6'),
('2021-06-28 04:50:39', '82-4886418', 'Barn', 'Westmacott', 'bwestmacottds', 'M', 'bwestmacottds@universidadfalsa.com', 'RU', 'Usogorsk', 'SL', 'Lunsar', 'ESC5'),
('2020-12-13 22:26:28', '54-3142348', 'Bob', 'Yateman', 'byatemanqo', 'M', 'byatemanqo@universidadfalsa.com', 'PK', 'Kabīrwāla', 'PH', 'Nunguan', 'ESC6'),
('2020-09-22 21:46:50', '62-4698440', 'Crichton', 'Ardling', 'cardlingi5', 'M', 'cardlingi5@universidadfalsa.com', 'PT', 'Pomar', 'CN', 'Sanjiang', 'ESC3'),
('2020-04-21 01:48:15', '42-5637408', 'Carol-jean', 'Arguile', 'carguileqc', 'F', 'carguileqc@universidadfalsa.com', 'CO', 'Corozal', 'SE', 'Lysekil', 'ESC1'),
('2020-06-02 18:13:31', '00-5803013', 'Chariot', 'Balls', 'cballsmk', 'M', 'cballsmk@universidadfalsa.com', 'FR', 'Créteil', 'ID', 'Ngrejo', 'ESC4'),
('2021-03-30 12:42:29', '35-4395976', 'Carma', 'Banasevich', 'cbanasevichqb', 'F', 'cbanasevichqb@universidadfalsa.com', 'BA', 'Donja Dubica', 'BY', 'Klyetsk', 'ESC6'),
('2021-04-07 02:00:01', '64-9293300', 'Catherin', 'Boote', 'cbootenr', 'F', 'cbootenr@universidadfalsa.com', 'RU', 'Suponevo', 'BO', 'Yumani', 'ESC3'),
('2020-03-13 21:19:31', '56-0656900', 'Culver', 'Breche', 'cbrechet', 'M', 'cbrechet@universidadfalsa.com', 'ET', 'Dodola', 'PL', 'Reda', 'ESC2'),
('2020-11-04 09:03:33', '63-7444949', 'Cornie', 'Brindley', 'cbrindleynw', 'M', 'cbrindleynw@universidadfalsa.com', 'CN', 'Xiali', 'SE', 'Åkersberga', 'ESC4'),
('2020-02-18 03:10:40', '19-6187061', 'Cate', 'Caneo', 'ccaneoir', 'F', 'ccaneoir@universidadfalsa.com', 'FI', 'Saukkola', 'CN', 'Dayan', 'ESC4'),
('2021-03-07 22:30:45', '45-9625671', 'Cordelie', 'Castelin', 'ccastelinba', 'F', 'ccastelinba@universidadfalsa.com', 'FR', 'Puget-sur-Argens', 'PT', 'Dois Portos', 'ESC5'),
('2021-10-29 15:15:30', '97-8234372', 'Casandra', 'Castenda', 'ccastendal7', 'F', 'ccastendal7@universidadfalsa.com', 'PL', 'Tyszowce', 'ID', 'Druju', 'ESC2'),
('2020-10-16 12:29:32', '69-8961182', 'Cheston', 'Chritchlow', 'cchritchlow5t', 'M', 'cchritchlow5t@universidadfalsa.com', 'US', 'Memphis', 'BR', 'Guaíba', 'ESC3'),
('2021-02-06 18:32:18', '34-6149658', 'Cherey', 'Clemencon', 'cclemencon2k', 'F', 'cclemencon2k@universidadfalsa.com', 'SE', 'Sandviken', 'ID', 'Pringgoboyo', 'ESC1'),
('2020-12-26 07:38:23', '82-4752775', 'Corinne', 'Cleveley', 'ccleveleyik', 'F', 'ccleveleyik@universidadfalsa.com', 'KP', 'Sakchu-ŭp', 'FR', 'Montesson', 'ESC6'),
('2021-06-02 14:58:02', '81-1813926', 'Cyrill', 'Conichie', 'cconichie9h', 'M', 'cconichie9h@universidadfalsa.com', 'CO', 'Gualmatán', 'KM', 'Harembo', 'ESC2'),
('2020-10-11 16:27:15', '87-8582921', 'Cherrita', 'Cumberlidge', 'ccumberlidgea8', 'F', 'ccumberlidgea8@universidadfalsa.com', 'SE', 'Kristianstad', 'PS', 'Al Mughayyir', 'ESC5'),
('2020-10-26 17:17:11', '76-1831893', 'Corrinne', 'Dengate', 'cdengateb2', 'F', 'cdengateb2@universidadfalsa.com', 'MX', 'Guadalupe', 'ID', 'Basen', 'ESC2'),
('2020-08-31 13:22:02', '65-1731273', 'Currey', 'Deppe', 'cdeppejh', 'M', 'cdeppejh@universidadfalsa.com', 'JP', 'Tsukumiura', 'CN', 'Zhongcheng', 'ESC7'),
('2021-07-12 17:37:22', '01-8684917', 'Cathrine', 'Dillestone', 'cdillestone8q', 'F', 'cdillestone8q@universidadfalsa.com', 'PT', 'Gândara', 'PH', 'Tabio', 'ESC1'),
('2021-09-29 05:12:47', '49-7403611', 'Curtice', 'Duchart', 'cduchart1s', 'M', 'cduchart1s@universidadfalsa.com', 'CN', 'Xicheng', 'PL', 'Góra', 'ESC6'),
('2020-05-09 01:52:38', '74-8409373', 'Carlos', 'Dumper', 'cdumperfa', 'M', 'cdumperfa@universidadfalsa.com', 'PH', 'Sabang', 'CN', 'Dahuang', 'ESC2'),
('2020-10-20 14:10:56', '21-9634003', 'Chrissy', 'Durbin', 'cdurbin7k', 'M', 'cdurbin7k@universidadfalsa.com', 'CZ', 'Bzenec', 'SE', 'Enköping', 'ESC5'),
('2020-07-08 04:01:42', '06-5522870', 'Caz', 'Dysart', 'cdysartde', 'M', 'cdysartde@universidadfalsa.com', 'PH', 'Cordon', 'PT', 'Boavista', 'ESC2'),
('2021-09-07 20:47:51', '69-3760746', 'Casar', 'Edgler', 'cedgler2o', 'M', 'cedgler2o@universidadfalsa.com', 'CN', 'Liufang', 'UA', 'Nizhyn', 'ESC5'),
('2021-01-15 03:39:28', '74-5980833', 'Christie', 'Fison', 'cfisonqg', 'F', 'cfisonqg@universidadfalsa.com', 'UG', 'Buyende', 'PT', 'A-da-Gorda', 'ESC4'),
('2021-08-14 00:23:38', '47-5119064', 'Christalle', 'Forten', 'cfortenin', 'F', 'cfortenin@universidadfalsa.com', 'BR', 'Carazinho', 'CN', 'Chumen', 'ESC6'),
('2021-05-17 19:14:16', '42-9485604', 'Christa', 'Fursse', 'cfurssee7', 'F', 'cfurssee7@universidadfalsa.com', 'PT', 'Terrugem', 'TZ', 'Kisarawe', 'ESC6'),
('2021-01-21 08:36:01', '29-0392189', 'Cyb', 'Gallelli', 'cgallelliqu', 'F', 'cgallelliqu@universidadfalsa.com', 'RU', 'Krasnyy Yar', 'NO', 'Trondheim', 'ESC5'),
('2021-10-17 08:52:23', '26-5063909', 'Cristal', 'Garms', 'cgarmsmu', 'F', 'cgarmsmu@universidadfalsa.com', 'RU', 'Yasnyy', 'PH', 'Teresita', 'ESC3'),
('2021-02-24 07:15:04', '49-7266457', 'Clarice', 'Geffe', 'cgeffe4', 'F', 'cgeffe4@universidadfalsa.com', 'CZ', 'Nový Knín', 'PK', 'Dera Bugti', 'ESC2'),
('2021-11-08 05:10:01', '29-6872644', 'Conny', 'Girdwood', 'cgirdwoodmj', 'M', 'cgirdwoodmj@universidadfalsa.com', 'FR', 'Cestas', 'GH', 'Cape Coast', 'ESC3'),
('2020-10-14 11:02:57', '93-8626149', 'Caroljean', 'Goundry', 'cgoundryqf', 'F', 'cgoundryqf@universidadfalsa.com', 'NG', 'Disina', 'BR', 'Paraguaçu', 'ESC4'),
('2020-07-03 08:24:19', '68-7029592', 'Cora', 'Halwill', 'chalwillk7', 'F', 'chalwillk7@universidadfalsa.com', 'CN', 'Qianwei', 'KR', 'T’aebaek', 'ESC1'),
('2021-02-08 05:10:07', '36-3254110', 'Correy', 'Hawler', 'chawlerj6', 'M', 'chawlerj6@universidadfalsa.com', 'CN', 'Shibi', 'PH', 'Kinamayan', 'ESC4'),
('2021-03-07 03:04:38', '73-3475814', 'Candide', 'Hennington', 'chenningtonk2', 'F', 'chenningtonk2@universidadfalsa.com', 'BF', 'Sebba', 'PE', 'Tomas', 'ESC4'),
('2020-05-09 12:30:46', '47-7533316', 'Carter', 'Hopkins', 'chopkinse2', 'M', 'chopkinse2@universidadfalsa.com', 'PH', 'Baquero Norte', 'FR', 'Guingamp', 'ESC3'),
('2020-09-08 10:53:01', '90-1378459', 'Celestine', 'Huelin', 'chuelinfe', 'F', 'chuelinfe@universidadfalsa.com', 'CL', 'Puerto Natales', 'AR', 'San Lorenzo', 'ESC1'),
('2020-02-11 16:31:28', '11-6215822', 'Cornela', 'Ickovici', 'cickovici6z', 'F', 'cickovici6z@universidadfalsa.com', 'CN', 'Wangzha', 'GR', 'Aigínio', 'ESC6'),
('2020-02-05 21:33:15', '36-9724585', 'Corilla', 'Issakov', 'cissakovnt', 'F', 'cissakovnt@universidadfalsa.com', 'PT', 'Soito', 'SE', 'Söderhamn', 'ESC4'),
('2021-02-02 06:53:14', '48-1484589', 'Catrina', 'Jakoviljevic', 'cjakoviljevic61', 'F', 'cjakoviljevic61@universidadfalsa.com', 'CN', 'Dianshui', 'GB', 'Charlton', 'ESC2'),
('2020-07-28 01:50:37', '44-6696917', 'Carmine', 'Janauschek', 'cjanauschekem', 'F', 'cjanauschekem@universidadfalsa.com', 'SE', 'Uddevalla', 'MN', 'Tsul-Ulaan', 'ESC4'),
('2021-01-07 13:56:38', '32-7467755', 'Chancey', 'Joney', 'cjoneym9', 'M', 'cjoneym9@universidadfalsa.com', 'PL', 'Kamieniec', 'PT', 'Gaio', 'ESC2'),
('2021-06-06 13:54:15', '90-5919022', 'Cinda', 'Josefs', 'cjosefsap', 'F', 'cjosefsap@universidadfalsa.com', 'RU', 'Goragorskiy', 'ID', 'Menanga', 'ESC3'),
('2020-10-22 15:12:54', '09-6219444', 'Curry', 'Keld', 'ckelde9', 'M', 'ckelde9@universidadfalsa.com', 'VN', 'Thị Trấn Phù Yên', 'CY', 'Liopétri', 'ESC3'),
('2021-05-27 20:38:51', '14-0190718', 'Chrissie', 'Kennally', 'ckennallymm', 'M', 'ckennallymm@universidadfalsa.com', 'VN', 'Tân An', 'FR', 'Alençon', 'ESC3'),
('2021-07-25 00:51:06', '96-3059591', 'Chadwick', 'Keynes', 'ckeynesiu', 'M', 'ckeynesiu@universidadfalsa.com', 'PH', 'Malayal', 'PH', 'Obong', 'ESC3'),
('2020-07-26 06:06:47', '08-1115989', 'Calvin', 'Lakenden', 'clakendene5', 'M', 'clakendene5@universidadfalsa.com', 'TH', 'Bang Lamung', 'PH', 'Kinatakutan', 'ESC3'),
('2020-07-09 03:01:52', '84-7912589', 'Charity', 'Lazenbury', 'clazenburykk', 'F', 'clazenburykk@universidadfalsa.com', 'PK', 'Harnoli', 'XK', 'Lëbushë', 'ESC4'),
('2021-01-13 08:44:59', '78-5112533', 'Cecelia', 'Leer', 'cleer8v', 'F', 'cleer8v@universidadfalsa.com', 'CN', 'Baoluan', 'CO', 'Oporapa', 'ESC5'),
('2020-09-17 05:37:27', '62-1680326', 'Carrissa', 'Lehr', 'clehr12', 'F', 'clehr12@universidadfalsa.com', 'CN', 'Ganyan', 'BG', 'Boychinovtsi', 'ESC3'),
('2021-05-21 16:55:14', '07-6078661', 'Cornie', 'Lowle', 'clowle5h', 'M', 'clowle5h@universidadfalsa.com', 'BR', 'Inhumas', 'DE', 'Berlin', 'ESC1'),
('2021-04-17 10:17:42', '15-5319147', 'Cecily', 'Mahood', 'cmahood4z', 'F', 'cmahood4z@universidadfalsa.com', 'UA', 'Novi Bilokorovychi', 'ID', 'Pohbango', 'ESC5'),
('2020-11-05 00:57:43', '29-6991586', 'Caz', 'Manssuer', 'cmanssuerdo', 'M', 'cmanssuerdo@universidadfalsa.com', 'RU', 'Polovinnoye', 'BR', 'Divinópolis', 'ESC6'),
('2020-10-13 16:45:04', '09-4364604', 'Corene', 'Matuszewski', 'cmatuszewskiby', 'F', 'cmatuszewskiby@universidadfalsa.com', 'CN', 'Kaoshan', 'US', 'Fort Myers', 'ESC3'),
('2021-04-13 19:23:12', '23-6045964', 'Clevie', 'McGreay', 'cmcgreay96', 'M', 'cmcgreay96@universidadfalsa.com', 'ID', 'Seupakat', 'SE', 'Solna', 'ESC4'),
('2021-02-10 16:33:39', '90-9101877', 'Cammy', 'Mitton', 'cmittonp0', 'F', 'cmittonp0@universidadfalsa.com', 'CN', 'Fengshan', 'CN', 'Yushu', 'ESC3'),
('2020-10-11 06:09:16', '26-7971425', 'Cloe', 'Mudge', 'cmudge5', 'F', 'cmudge5@universidadfalsa.com', 'TH', 'Bua Yai', 'FR', 'Albertville', 'ESC2'),
('2021-08-31 14:42:31', '16-1670429', 'Constantina', 'Naire', 'cnairebr', 'F', 'cnairebr@universidadfalsa.com', 'ID', 'Wolowona', 'TH', 'Khlong Toei', 'ESC4'),
('2020-08-19 20:23:58', '15-1904396', 'Constantino', 'Paffett', 'cpaffett2q', 'M', 'cpaffett2q@universidadfalsa.com', 'JP', 'Kamiichi', 'ID', 'Nangabulik', 'ESC7'),
('2021-11-21 14:19:42', '00-3747551', 'Cicely', 'Peaker', 'cpeakeri2', 'F', 'cpeakeri2@universidadfalsa.com', 'RU', 'Staroshcherbinovskaya', 'HN', 'San Vicente Centenario', 'ESC7'),
('2021-09-22 02:59:57', '40-0459836', 'Christabella', 'Petranek', 'cpetranekpk', 'F', 'cpetranekpk@universidadfalsa.com', 'UA', 'Kivsharivka', 'VN', 'Lai Cách', 'ESC1'),
('2020-09-06 09:57:49', '26-3314638', 'Cassondra', 'Proctor', 'cproctorqw', 'F', 'cproctorqw@universidadfalsa.com', 'PH', 'Buenavista', 'CZ', 'Měřín', 'ESC3'),
('2020-03-17 10:20:18', '14-1737061', 'Creight', 'Quantrill', 'cquantrillb6', 'M', 'cquantrillb6@universidadfalsa.com', 'NP', 'Bāglung', 'RU', 'Dubki', 'ESC3'),
('2020-09-14 01:05:43', '71-4577144', 'Connie', 'Quarton', 'cquartondf', 'F', 'cquartondf@universidadfalsa.com', 'FR', 'Cergy-Pontoise', 'YE', 'Ḩawf', 'ESC5'),
('2020-11-04 19:27:46', '38-0737257', 'Carole', 'Reditt', 'creditt1z', 'F', 'creditt1z@universidadfalsa.com', 'ID', 'Krajan Kinanti', 'ID', 'Kakaek', 'ESC5'),
('2021-10-31 03:33:00', '53-8339225', 'Cordy', 'Rees', 'creesfr', 'M', 'creesfr@universidadfalsa.com', 'AL', 'Steblevë', 'CN', 'Mudanjiang', 'ESC5'),
('2020-01-18 09:07:07', '68-7104860', 'Chery', 'Ricardou', 'cricardoum5', 'F', 'cricardoum5@universidadfalsa.com', 'CA', 'Daveluyville', 'PH', 'Bani', 'ESC4'),
('2020-09-25 20:51:34', '20-4223647', 'Cris', 'Rowbottom', 'crowbottomkt', 'F', 'crowbottomkt@universidadfalsa.com', 'ID', 'Sidaharja', 'CA', 'Maniwaki', 'ESC5'),
('2020-01-04 19:33:52', '42-4706965', 'Cherry', 'Seely', 'cseelyl', 'F', 'cseelyl@universidadfalsa.com', 'BO', 'Cliza', 'CO', 'Cucutilla', 'ESC4'),
('2021-10-12 21:20:34', '03-0742563', 'Crysta', 'Shaefer', 'cshaefer1u', 'F', 'cshaefer1u@universidadfalsa.com', 'CN', 'Guangshan', 'PH', 'Isugod', 'ESC7'),
('2021-05-29 00:55:59', '54-0166816', 'Cheryl', 'Siccombe', 'csiccombefy', 'F', 'csiccombefy@universidadfalsa.com', 'PH', 'Agpangi', 'ID', 'Bakunase', 'ESC1'),
('2021-08-26 16:47:24', '73-0704774', 'Corrie', 'Skally', 'cskallyc4', 'M', 'cskallyc4@universidadfalsa.com', 'PL', 'Złotniki Kujawskie', 'PL', 'Reszel', 'ESC7'),
('2020-03-30 10:42:59', '74-8238809', 'Corbie', 'Slessor', 'cslessorpf', 'M', 'cslessorpf@universidadfalsa.com', 'PK', 'Khairpur Nathan Shāh', 'PL', 'Długosiodło', 'ESC5'),
('2021-05-13 22:23:49', '63-3665956', 'Coletta', 'Spohrmann', 'cspohrmannns', 'F', 'cspohrmannns@universidadfalsa.com', 'CN', 'Huajie', 'AE', 'Abu Dhabi', 'ESC2'),
('2020-02-28 12:11:27', '66-1962620', 'Craggie', 'Sturmey', 'csturmey1c', 'M', 'csturmey1c@universidadfalsa.com', 'ID', 'Bangrat', 'CN', 'Ganshui', 'ESC4'),
('2021-11-08 10:32:03', '45-3552138', 'Consalve', 'Toomey', 'ctoomeyk3', 'M', 'ctoomeyk3@universidadfalsa.com', 'PH', 'Topdac', 'JP', 'Otofuke', 'ESC4'),
('2020-12-27 14:32:28', '87-9951267', 'Celka', 'Ville', 'cvilleji', 'F', 'cvilleji@universidadfalsa.com', 'LV', 'Vangaži', 'BI', 'Bururi', 'ESC1'),
('2020-09-09 07:55:05', '91-1154724', 'Concettina', 'Wogden', 'cwogden95', 'F', 'cwogden95@universidadfalsa.com', 'KZ', 'Shīeli', 'US', 'Mesa', 'ESC3'),
('2020-06-23 15:44:13', '63-9218601', 'Debbie', 'Aglione', 'daglioneh', 'F', 'daglioneh@universidadfalsa.com', 'NO', 'Molde', 'LT', 'Trakai', 'ESC3'),
('2016-08-01 18:30:00', '1088333702', 'DANIEL FERNANDO', 'ALARCON TABARES', 'dalarcont', 'M', 'daniel.alarcon@universidadfalsa.com', 'CO', 'PEREIRA', 'CO', 'PEREIRA', 'ESC5'),
('2021-07-21 16:25:43', '34-8783027', 'Dalis', 'Alessandrelli', 'dalessandrellid4', 'M', 'dalessandrellid4@universidadfalsa.com', 'AR', 'La Cesira', 'CN', 'Kaiyuan', 'ESC3'),
('2021-07-07 21:44:54', '60-3817404', 'Doyle', 'Alessandrucci', 'dalessandrucciri', 'M', 'dalessandrucciri@universidadfalsa.com', 'RU', 'Kropachëvo', 'US', 'Des Moines', 'ESC3'),
('2020-05-03 00:50:25', '76-8346071', 'Dwayne', 'Bartolomeu', 'dbartolomeuep', 'M', 'dbartolomeuep@universidadfalsa.com', 'ID', 'Lilin Satu', 'RU', 'Yazykovo', 'ESC3'),
('2021-10-25 06:04:45', '72-4436700', 'Domenic', 'Basil', 'dbasilb5', 'M', 'dbasilb5@universidadfalsa.com', 'CN', 'Pukou', 'CZ', 'Klenčí pod Čerchovem', 'ESC4'),
('2020-10-13 20:22:25', '64-7801266', 'Darbee', 'Beane', 'dbeaneo5', 'M', 'dbeaneo5@universidadfalsa.com', 'VN', 'Bù Đốp', 'PH', 'Hinlayagan Ilaud', 'ESC1'),
('2021-10-13 03:19:46', '16-1757484', 'Denny', 'Behning', 'dbehningcy', 'M', 'dbehningcy@universidadfalsa.com', 'PL', 'Świeradów-Zdrój', 'ID', 'Kukuluk', 'ESC1'),
('2021-05-04 23:08:30', '32-8742176', 'Dewie', 'Bellows', 'dbellowsbj', 'M', 'dbellowsbj@universidadfalsa.com', 'ID', 'Selat', 'PH', 'Lepanto', 'ESC1'),
('2021-01-24 10:20:25', '01-5183152', 'Davon', 'Berth', 'dberth8i', 'M', 'dberth8i@universidadfalsa.com', 'UA', 'Tsarychanka', 'RU', 'Solnechnogorsk', 'ESC2'),
('2020-11-22 17:50:56', '05-2366540', 'Dicky', 'Binfield', 'dbinfield7w', 'M', 'dbinfield7w@universidadfalsa.com', 'RU', 'Pyatigorskiy', 'PH', 'Guruyan', 'ESC5'),
('2021-08-07 18:54:12', '74-1528721', 'Deina', 'Blakeslee', 'dblakesleeqm', 'F', 'dblakesleeqm@universidadfalsa.com', 'SY', 'Talldaww', 'US', 'Atlanta', 'ESC7'),
('2020-04-15 21:42:07', '06-8914484', 'Dolley', 'Brockbank', 'dbrockbankgo', 'F', 'dbrockbankgo@universidadfalsa.com', 'RU', 'Krasnovishersk', 'LV', 'Kocēni', 'ESC6'),
('2021-04-22 17:01:43', '18-4635615', 'Dori', 'Brownsall', 'dbrownsallna', 'F', 'dbrownsallna@universidadfalsa.com', 'GR', 'Diónysos', 'AR', 'Leleque', 'ESC2'),
('2020-01-25 03:36:53', '66-9220679', 'Darren', 'Camblin', 'dcamblinon', 'M', 'dcamblinon@universidadfalsa.com', 'ET', 'Lobuni', 'PT', 'Casalinho', 'ESC4'),
('2021-09-17 02:59:37', '85-6282320', 'Daffie', 'Cardon', 'dcardonbn', 'F', 'dcardonbn@universidadfalsa.com', 'CN', 'Xianyi', 'PT', 'Midões', 'ESC2'),
('2020-02-09 22:34:47', '70-2544866', 'Desiree', 'Carlesso', 'dcarlessocv', 'F', 'dcarlessocv@universidadfalsa.com', 'ID', 'Pasarnangka', 'GR', 'Alivéri', 'ESC5'),
('2020-08-27 15:15:13', '39-6404923', 'Darcey', 'Condit', 'dcondit89', 'F', 'dcondit89@universidadfalsa.com', 'BR', 'Campos', 'SE', 'Kumla', 'ESC7'),
('2020-06-28 07:54:11', '42-8800891', 'Dode', 'Covendon', 'dcovendony', 'F', 'dcovendony@universidadfalsa.com', 'PH', 'Quezon', 'CN', 'Muleng', 'ESC3'),
('2021-11-12 01:46:08', '78-6650861', 'Dory', 'Cringle', 'dcringlegg', 'F', 'dcringlegg@universidadfalsa.com', 'PY', 'Unión', 'RU', 'Yelat’ma', 'ESC7'),
('2020-01-28 07:21:22', '04-2699949', 'Dewain', 'Dearnley', 'ddearnleyjc', 'M', 'ddearnleyjc@universidadfalsa.com', 'CN', 'Caijiazha', 'UA', 'Kosiv', 'ESC7'),
('2020-04-10 22:30:29', '73-0832696', 'Delcine', 'Debenham', 'ddebenhamq6', 'F', 'ddebenhamq6@universidadfalsa.com', 'SE', 'Arlöv', 'BR', 'Rolante', 'ESC1'),
('2020-03-05 18:33:43', '35-7603873', 'Dulciana', 'Dominguez', 'ddominguez60', 'F', 'ddominguez60@universidadfalsa.com', 'HR', 'Čačinci', 'AR', 'General San Martín', 'ESC7'),
('2021-02-07 12:31:37', '98-0628300', 'Dory', 'Drust', 'ddrustr9', 'F', 'ddrustr9@universidadfalsa.com', 'TH', 'Phra Phutthabat', 'MT', 'Vittoriosa', 'ESC4'),
('2020-01-24 04:03:16', '93-0248355', 'Donn', 'Duffet', 'dduffetil', 'M', 'dduffetil@universidadfalsa.com', 'US', 'Milwaukee', 'BR', 'Presidente Epitácio', 'ESC5'),
('2020-10-18 08:50:43', '71-9463103', 'Danyelle', 'Esh', 'desh9w', 'F', 'desh9w@universidadfalsa.com', 'IR', 'Kahnūj', 'SN', 'Tiébo', 'ESC1'),
('2021-05-17 02:25:06', '26-1243452', 'Doris', 'Gandar', 'dgandarmw', 'F', 'dgandarmw@universidadfalsa.com', 'RU', 'Novoye Leushino', 'ID', 'Jenamas', 'ESC1'),
('2020-12-15 00:35:14', '87-6793078', 'Di', 'Geindre', 'dgeindre7s', 'F', 'dgeindre7s@universidadfalsa.com', 'CN', 'Zhangping', 'EC', 'Calceta', 'ESC6'),
('2021-01-17 13:07:10', '92-6595334', 'Dukey', 'Grinaugh', 'dgrinaughoo', 'M', 'dgrinaughoo@universidadfalsa.com', 'ID', 'Krajan Siki', 'FI', 'Askainen', 'ESC3'),
('2021-04-04 10:39:59', '76-9056195', 'Di', 'Hampshaw', 'dhampshawq4', 'F', 'dhampshawq4@universidadfalsa.com', 'PL', 'Kołbiel', 'US', 'Huntsville', 'ESC3'),
('2021-11-02 10:45:05', '05-1666909', 'Damon', 'Hearley', 'dhearley1x', 'M', 'dhearley1x@universidadfalsa.com', 'PH', 'Buliran', 'KP', 'Najin', 'ESC3'),
('2021-03-08 02:20:18', '20-2315404', 'Dredi', 'Heugle', 'dheuglecf', 'F', 'dheuglecf@universidadfalsa.com', 'TH', 'Thap Than', 'PE', 'Acobamba', 'ESC1'),
('2020-04-22 18:01:06', '66-8677037', 'Dynah', 'Hupka', 'dhupkakl', 'F', 'dhupkakl@universidadfalsa.com', 'GR', 'Sérvia', 'CN', 'Yuannan', 'ESC3'),
('2020-10-29 22:07:20', '28-4788444', 'Dennie', 'Ivory', 'divorya6', 'M', 'divorya6@universidadfalsa.com', 'RU', 'Zvenigorod', 'CO', 'Campoalegre', 'ESC5'),
('2021-08-21 17:36:12', '99-3049489', 'Dulcinea', 'Keeri', 'dkeeriiw', 'F', 'dkeeriiw@universidadfalsa.com', 'HN', 'La Labor', 'BR', 'Matozinhos', 'ESC1'),
('2020-05-30 03:24:41', '76-0726920', 'Dorey', 'Keyte', 'dkeyteej', 'F', 'dkeyteej@universidadfalsa.com', 'CN', 'Wulong', 'MK', 'Могила', 'ESC1'),
('2021-01-26 03:43:47', '32-0686454', 'Darda', 'Leghorn', 'dleghorndr', 'F', 'dleghorndr@universidadfalsa.com', 'CN', 'Taiyuan', 'YE', 'Shiḩan as Suflá', 'ESC1'),
('2020-12-19 08:27:38', '58-0148032', 'Danna', 'Le Maitre', 'dlemaitrekh', 'F', 'dlemaitrekh@universidadfalsa.com', 'PT', 'Lobão', 'BF', 'Fada Ngourma', 'ESC5'),
('2020-05-10 04:31:17', '44-8376640', 'Duff', 'Loud', 'dloud9y', 'M', 'dloud9y@universidadfalsa.com', 'CR', 'Escazú', 'FR', 'Langres', 'ESC3'),
('2020-07-15 21:19:51', '97-7025261', 'Daniele', 'McCuish', 'dmccuishrl', 'F', 'dmccuishrl@universidadfalsa.com', 'GR', 'Pánormos', 'UA', 'Vyshhorod', 'ESC1'),
('2020-11-02 22:19:47', '32-5152468', 'Diahann', 'McDavid', 'dmcdavidgw', 'F', 'dmcdavidgw@universidadfalsa.com', 'RU', 'Ust-Maya', 'RU', 'Tashla', 'ESC4'),
('2021-10-06 13:44:54', '48-9071602', 'Dionis', 'Measey', 'dmeaseyhu', 'F', 'dmeaseyhu@universidadfalsa.com', 'CN', 'Zhifang', 'ID', 'Bangkal', 'ESC2'),
('2021-01-25 05:31:14', '55-4892343', 'Dolli', 'Mynard', 'dmynardpy', 'F', 'dmynardpy@universidadfalsa.com', 'MK', 'Makedonski Brod', 'SI', 'Rogoza', 'ESC2'),
('2021-04-13 01:47:58', '12-3947639', 'Debbie', 'Oret', 'doretok', 'F', 'doretok@universidadfalsa.com', 'CN', 'Dapeng', 'CN', 'Shanxi', 'ESC2'),
('2020-11-28 17:46:31', '90-0398815', 'Dael', 'Pasley', 'dpasley5r', 'F', 'dpasley5r@universidadfalsa.com', 'ID', 'Waerana', 'RU', 'Pochep', 'ESC7'),
('2021-05-20 13:29:31', '30-4362164', 'Dermot', 'Peert', 'dpeertki', 'M', 'dpeertki@universidadfalsa.com', 'ME', 'Lipci', 'CN', 'Dongshandi', 'ESC6'),
('2020-07-19 14:31:35', '66-1039967', 'Damita', 'Perryman', 'dperryman2t', 'F', 'dperryman2t@universidadfalsa.com', 'CN', 'Shuicha', 'MY', 'Kuching', 'ESC6'),
('2020-02-07 14:23:40', '73-4233349', 'Devlen', 'Pina', 'dpina83', 'M', 'dpina83@universidadfalsa.com', 'BW', 'Janeng', 'PT', 'Sebadelhe', 'ESC2'),
('2020-08-23 16:39:24', '63-7384084', 'Deeann', 'Piner', 'dpinerow', 'F', 'dpinerow@universidadfalsa.com', 'SE', 'Västerås', 'FR', 'Colombes', 'ESC1'),
('2021-03-10 21:27:17', '35-7175451', 'Davin', 'Quarmby', 'dquarmbyr6', 'M', 'dquarmbyr6@universidadfalsa.com', 'ID', 'Subulussalam', 'ML', 'Diré', 'ESC1'),
('2020-11-10 07:14:40', '70-9962679', 'Dalt', 'Recke', 'dreckedt', 'M', 'dreckedt@universidadfalsa.com', 'CN', 'Tuanjie', 'ID', 'Wanareja', 'ESC4'),
('2021-11-11 07:00:47', '37-3725636', 'Dulcea', 'Scamal', 'dscamala0', 'F', 'dscamala0@universidadfalsa.com', 'CD', 'Bongandanga', 'IL', 'Tirat Karmel', 'ESC1'),
('2021-06-04 03:48:34', '93-4101623', 'Dita', 'Scoggins', 'dscoggins16', 'F', 'dscoggins16@universidadfalsa.com', 'NG', 'Kujama', 'BR', 'Rondonópolis', 'ESC2'),
('2021-06-09 21:27:58', '46-6261645', 'Darby', 'Segrott', 'dsegrott52', 'M', 'dsegrott52@universidadfalsa.com', 'CN', 'Zhonghe', 'CN', 'Guanshui', 'ESC5'),
('2021-05-24 16:37:34', '33-9688583', 'Dukie', 'Shee', 'dsheejz', 'M', 'dsheejz@universidadfalsa.com', 'CN', 'Wanmingang', 'CA', 'Orillia', 'ESC7'),
('2020-07-27 14:36:34', '36-9023999', 'Danila', 'Sidaway', 'dsidawaylk', 'F', 'dsidawaylk@universidadfalsa.com', 'CN', 'Zhuanqukou', 'CU', 'Vertientes', 'ESC2'),
('2020-11-18 19:07:55', '15-7313407', 'Deane', 'Thomasset', 'dthomassetd1', 'M', 'dthomassetd1@universidadfalsa.com', 'TV', 'Funafuti', 'MX', 'Buenos Aires', 'ESC7'),
('2020-02-17 08:58:35', '04-9658777', 'Duff', 'Vondrys', 'dvondrysky', 'M', 'dvondrysky@universidadfalsa.com', 'HR', 'Stobreč', 'CN', 'Huangbu', 'ESC5'),
('2020-09-09 11:54:09', '02-4089232', 'Dante', 'Wastell', 'dwastellgm', 'M', 'dwastellgm@universidadfalsa.com', 'CN', 'Beiling', 'BR', 'Valparaíso', 'ESC3'),
('2020-11-08 05:04:02', '61-7889281', 'Dewain', 'Watt', 'dwatt2i', 'M', 'dwatt2i@universidadfalsa.com', 'CN', 'Lipu', 'BR', 'Nova Olímpia', 'ESC3'),
('2021-03-20 12:49:17', '65-9893555', 'Danice', 'Witchalls', 'dwitchallspv', 'F', 'dwitchallspv@universidadfalsa.com', 'CN', 'Jingdezhen', 'US', 'Albany', 'ESC2'),
('2020-09-01 04:53:32', '84-8828587', 'Dorolice', 'Wrankmore', 'dwrankmorelu', 'F', 'dwrankmorelu@universidadfalsa.com', 'ID', 'Solor', 'VN', 'Vũng Tàu', 'ESC6'),
('2020-05-15 12:45:05', '34-3514914', 'Ella', 'Apperley', 'eapperley7a', 'F', 'eapperley7a@universidadfalsa.com', 'CN', 'Xinlong', 'IE', 'Whitegate', 'ESC3'),
('2020-09-26 08:29:46', '68-4846824', 'Ethel', 'Arnout', 'earnoutg5', 'F', 'earnoutg5@universidadfalsa.com', 'CN', 'Wudabao', 'UA', 'Partenit', 'ESC4'),
('2020-09-09 17:32:36', '52-6247018', 'Elvina', 'Atyea', 'eatyeacu', 'F', 'eatyeacu@universidadfalsa.com', 'PH', 'Maputi', 'CN', 'Zhouwang', 'ESC6'),
('2020-05-14 20:26:01', '55-4360252', 'Eva', 'Aymeric', 'eaymericgf', 'F', 'eaymericgf@universidadfalsa.com', 'GR', 'Argostólion', 'BR', 'Ipu', 'ESC1'),
('2021-06-16 03:40:11', '92-0960923', 'Enid', 'Baccus', 'ebaccusd7', 'F', 'ebaccusd7@universidadfalsa.com', 'ID', 'Sangiang', 'ID', 'Penanggungan', 'ESC5'),
('2020-02-20 09:36:57', '27-3339750', 'Eleanora', 'Blazewski', 'eblazewski9p', 'F', 'eblazewski9p@universidadfalsa.com', 'ID', 'Munse', 'BW', 'Gaborone', 'ESC6'),
('2020-03-06 07:40:19', '05-6535475', 'Euell', 'Burnsall', 'eburnsallpi', 'M', 'eburnsallpi@universidadfalsa.com', 'CN', 'Huangbu', 'IT', 'Torino', 'ESC4'),
('2021-05-26 08:29:38', '15-7774115', 'Ellette', 'Callaghan', 'ecallaghan4w', 'F', 'ecallaghan4w@universidadfalsa.com', 'CN', 'Luotuo', 'FR', 'Limoges', 'ESC7'),
('2020-01-09 12:35:03', '03-5297235', 'Ezri', 'Caughan', 'ecaughanlt', 'M', 'ecaughanlt@universidadfalsa.com', 'PT', 'Calvaria de Baixo', 'CU', 'Venezuela', 'ESC1'),
('2021-01-15 07:57:15', '36-4669258', 'Ellette', 'Chifney', 'echifneyo0', 'F', 'echifneyo0@universidadfalsa.com', 'PL', 'Białobrzegi', 'CN', 'Wuchagou', 'ESC2'),
('2021-04-24 18:54:34', '14-2368304', 'Edithe', 'Clampe', 'eclampe1w', 'F', 'eclampe1w@universidadfalsa.com', 'PH', 'Balatero', 'ID', 'Kalipare', 'ESC1'),
('2021-05-15 11:24:13', '44-0594788', 'Eugenius', 'Coltart', 'ecoltart62', 'M', 'ecoltart62@universidadfalsa.com', 'CN', 'Machang', 'US', 'Springfield', 'ESC6'),
('2021-09-14 21:17:06', '48-6262572', 'Elvis', 'Colten', 'ecoltennv', 'M', 'ecoltennv@universidadfalsa.com', 'MA', 'Zaïo', 'TM', 'Yylanly', 'ESC7'),
('2021-10-07 02:36:21', '98-3559355', 'Elwyn', 'Crosbie', 'ecrosbie4p', 'M', 'ecrosbie4p@universidadfalsa.com', 'VN', 'Hội An', 'PH', 'Talabaan', 'ESC3'),
('2021-01-14 15:37:17', '61-5637633', 'Elenore', 'Curtois', 'ecurtoisqv', 'F', 'ecurtoisqv@universidadfalsa.com', 'KR', 'Seogeom-ri', 'JP', 'Sobue', 'ESC2'),
('2021-07-17 12:16:25', '40-1995126', 'Elke', 'Deveraux', 'edeverauxbf', 'F', 'edeverauxbf@universidadfalsa.com', 'PT', 'Devesa', 'CN', 'Liutan', 'ESC2'),
('2020-08-25 15:59:51', '09-8062231', 'Emilio', 'Dominguez', 'edominguez8z', 'M', 'edominguez8z@universidadfalsa.com', 'PL', 'Nowe Grocholice', 'US', 'Miami', 'ESC7'),
('2020-01-27 18:36:39', '56-9131038', 'Eliza', 'Duesberry', 'eduesberryqk', 'F', 'eduesberryqk@universidadfalsa.com', 'MA', 'Telouet', 'MX', 'Santa Cruz', 'ESC1'),
('2021-08-09 09:33:52', '99-1569588', 'Evey', 'Forshaw', 'eforshawaj', 'F', 'eforshawaj@universidadfalsa.com', 'AM', 'Tsaghkunk’', 'PE', 'Coayllo', 'ESC5'),
('2020-05-15 07:31:30', '51-6794096', 'Eada', 'Gosse', 'egosseeg', 'F', 'egosseeg@universidadfalsa.com', 'PE', 'Taquile', 'CL', 'Curanilahue', 'ESC3'),
('2020-05-02 16:41:33', '24-5226598', 'Eolande', 'Heine', 'eheinemc', 'F', 'eheinemc@universidadfalsa.com', 'CO', 'Mutatá', 'LK', 'Horana South', 'ESC6'),
('2020-04-22 23:24:42', '84-5789182', 'Elisabetta', 'Herion', 'eherionl3', 'F', 'eherionl3@universidadfalsa.com', 'ID', 'Makbon', 'CU', 'Pinar del Río', 'ESC5'),
('2021-05-11 10:53:49', '41-8357131', 'Emmalee', 'Jeayes', 'ejeayespt', 'F', 'ejeayespt@universidadfalsa.com', 'CN', 'Zhongcheng', 'CO', 'Cáceres', 'ESC3'),
('2020-04-27 01:56:52', '89-5308712', 'Edy', 'Joselovitch', 'ejoselovitchlm', 'F', 'ejoselovitchlm@universidadfalsa.com', 'ID', 'Cineumbeuy', 'CN', 'Sanchahe', 'ESC7'),
('2020-12-17 17:48:56', '83-4875702', 'Emelia', 'Kubas', 'ekubas88', 'F', 'ekubas88@universidadfalsa.com', 'CN', 'Shijiazhuang', 'CN', 'Xiaomian', 'ESC7'),
('2021-05-31 08:58:14', '53-5186892', 'Elysia', 'Linge', 'elinge4v', 'F', 'elinge4v@universidadfalsa.com', 'MA', 'Kariat Arkmane', 'FR', 'Saint-Maurice-lExil', 'ESC5'),
('2021-09-14 21:08:25', '44-5942740', 'Erma', 'Louiset', 'elouisetra', 'F', 'elouisetra@universidadfalsa.com', 'CN', 'Lingbeizhou', 'CN', 'Baizhang', 'ESC6'),
('2021-04-30 08:49:17', '54-1066151', 'Elissa', 'MBarron', 'embarronk0', 'F', 'embarronk0@universidadfalsa.com', 'ID', 'Kadubetara', 'CN', 'Jianshan', 'ESC2'),
('2021-04-30 09:33:40', '71-0414472', 'Earle', 'McCoveney', 'emccoveneygv', 'M', 'emccoveneygv@universidadfalsa.com', 'CN', 'Lufang', 'ID', 'Panguruan', 'ESC7'),
('2021-05-12 22:05:27', '44-1507746', 'Edvard', 'McQuillan', 'emcquillanfv', 'M', 'emcquillanfv@universidadfalsa.com', 'US', 'Jefferson City', 'CN', 'Laba Goumen', 'ESC2'),
('2021-05-05 00:58:44', '02-8864239', 'Erek', 'Morriss', 'emorriss9k', 'M', 'emorriss9k@universidadfalsa.com', 'US', 'Chattanooga', 'MX', 'San Francisco', 'ESC1'),
('2020-07-07 08:20:44', '26-5047716', 'Elysia', 'Muddle', 'emuddle7j', 'F', 'emuddle7j@universidadfalsa.com', 'CN', 'Ordos', 'CN', 'Ji’ergele Teguoleng', 'ESC5'),
('2021-05-14 06:42:36', '17-2414433', 'Ermin', 'Orpwood', 'eorpwood32', 'M', 'eorpwood32@universidadfalsa.com', 'GH', 'Kete Krachi', 'SI', 'Moste', 'ESC5'),
('2021-09-06 04:56:11', '22-1242789', 'Edie', 'Patron', 'epatronpp', 'F', 'epatronpp@universidadfalsa.com', 'CN', 'Huilong', 'BR', 'Santarém', 'ESC6'),
('2020-12-13 07:31:30', '79-3466655', 'Earvin', 'Pedlingham', 'epedlinghamre', 'M', 'epedlinghamre@universidadfalsa.com', 'PT', 'Rio', 'AZ', 'Sabirabad', 'ESC6'),
('2020-09-29 00:01:06', '67-1237721', 'Eric', 'Rames', 'erames99', 'M', 'erames99@universidadfalsa.com', 'BR', 'São João del Rei', 'CZ', 'Nová Role', 'ESC4'),
('2021-06-01 21:32:35', '92-0058346', 'Edmund', 'Ridpath', 'eridpathje', 'M', 'eridpathje@universidadfalsa.com', 'PE', 'Layo', 'PE', 'Callahuanca', 'ESC5'),
('2021-10-16 03:40:25', '91-0299205', 'Eunice', 'Rosini', 'erosini27', 'F', 'erosini27@universidadfalsa.com', 'PH', 'Tagoloan', 'CN', 'Shuangnian', 'ESC7');
INSERT INTO `uf_personas` (`FECHAREGISTRO`, `IDPERSONA`, `NOMBRES`, `APELLIDOS`, `NICKNAME`, `GENERO`, `EMAIL_LABORAL`, `ORIGEN_PAIS`, `ORIGEN_CIUDAD`, `RESIDE_PAIS`, `RESIDE_CIUDAD`, `ESCOLARIDAD`) VALUES
('2020-06-13 22:36:25', '25-3437026', 'Ellsworth', 'Sabin', 'esabinpn', 'M', 'esabinpn@universidadfalsa.com', 'FR', 'Vannes', 'PE', 'Quinuabamba', 'ESC2'),
('2021-08-17 21:35:32', '33-3164505', 'Eve', 'Sanper', 'esanperhr', 'F', 'esanperhr@universidadfalsa.com', 'ID', 'Piru', 'CN', 'Suozhen', 'ESC5'),
('2020-07-23 05:28:10', '87-0278668', 'Emmye', 'Shekle', 'esheklea1', 'F', 'esheklea1@universidadfalsa.com', 'BR', 'Araçatuba', 'ID', 'Cihaur', 'ESC6'),
('2021-08-22 13:48:37', '57-4820766', 'Ephraim', 'Simak', 'esimakjv', 'M', 'esimakjv@universidadfalsa.com', 'PH', 'Agoo', 'CN', 'Tailing', 'ESC7'),
('2022-06-01 00:00:00', '0123456789', 'Estudiante', 'de Prueba', 'estudiante', 'M', 'estudiante@estudiante.com', 'CO', 'Pereira', 'CO', 'Pereira', 'ESC3'),
('2021-07-20 01:18:38', '03-8384610', 'Elston', 'Szymanski', 'eszymanskij', 'M', 'eszymanskij@universidadfalsa.com', 'CN', 'Guanmian', 'NG', 'Dindima', 'ESC2'),
('2020-03-30 21:29:48', '52-3409528', 'Emiline', 'Tomkies', 'etomkiesm0', 'F', 'etomkiesm0@universidadfalsa.com', 'CN', 'Huangling', 'CA', 'Saint-Bruno-de-Guigues', 'ESC7'),
('2021-07-10 13:53:29', '44-3760208', 'Elinor', 'Wardlow', 'ewardlowp', 'F', 'ewardlowp@universidadfalsa.com', 'PH', 'Maria Aurora', 'FR', 'Carcassonne', 'ESC3'),
('2020-12-05 14:48:07', '31-0357073', 'Enrique', 'Wivell', 'ewivella5', 'M', 'ewivella5@universidadfalsa.com', 'FI', 'Urjala', 'KZ', 'Oytal', 'ESC5'),
('2020-09-28 20:54:10', '71-9945184', 'Franz', 'Andryushchenko', 'fandryushchenko26', 'M', 'fandryushchenko26@universidadfalsa.com', 'ID', 'Maundai', 'CN', 'Tantou', 'ESC6'),
('2021-10-26 22:02:49', '36-7228670', 'Flossi', 'Avard', 'favardfg', 'F', 'favardfg@universidadfalsa.com', 'YE', 'Al Ḩarajah', 'CN', 'Huaiya', 'ESC5'),
('2020-03-28 15:34:49', '35-6736467', 'Francisco', 'Bachanski', 'fbachanski19', 'M', 'fbachanski19@universidadfalsa.com', 'ID', 'Mujur', 'PH', 'Culianin', 'ESC2'),
('2020-03-22 18:08:16', '34-9688449', 'Frannie', 'Bowry', 'fbowryak', 'M', 'fbowryak@universidadfalsa.com', 'TH', 'Nong Chik', 'CN', 'Tawen Aobao', 'ESC1'),
('2021-10-05 04:07:32', '29-7180534', 'Ferguson', 'Carah', 'fcarahj8', 'M', 'fcarahj8@universidadfalsa.com', 'PY', 'Villa Elisa', 'UA', 'Klavdiyevo-Tarasove', 'ESC4'),
('2020-03-14 08:16:48', '79-0368536', 'Farlie', 'Chree', 'fchree2h', 'M', 'fchree2h@universidadfalsa.com', 'RU', 'Novaya Mayna', 'MN', 'Bayan-Ovoo', 'ESC3'),
('2020-07-14 14:34:01', '13-9528414', 'Franz', 'Codi', 'fcodipu', 'M', 'fcodipu@universidadfalsa.com', 'PL', 'Września', 'PE', 'Santiago de Cao', 'ESC3'),
('2021-05-12 15:07:36', '40-9916095', 'Flory', 'Collis', 'fcollis5o', 'F', 'fcollis5o@universidadfalsa.com', 'ID', 'Cungking', 'AR', 'Pasco', 'ESC1'),
('2020-08-17 18:42:16', '18-8109304', 'Farlay', 'Eckels', 'feckelsqr', 'M', 'feckelsqr@universidadfalsa.com', 'SE', 'Karlskoga', 'FR', 'Lunéville', 'ESC2'),
('2020-12-09 01:52:11', '97-2413276', 'Farlee', 'Gargett', 'fgargettgp', 'M', 'fgargettgp@universidadfalsa.com', 'ZA', 'Fort Beaufort', 'CN', 'Liangshuihe', 'ESC5'),
('2020-05-01 17:19:09', '62-2907078', 'Francene', 'Gillogley', 'fgillogleynu', 'F', 'fgillogleynu@universidadfalsa.com', 'MX', 'San Jose', 'MY', 'Pulau Pinang', 'ESC4'),
('2020-03-28 19:46:08', '44-1342893', 'Friedrick', 'Hare', 'fharec9', 'M', 'fharec9@universidadfalsa.com', 'ID', 'Pordapor Barat', 'RU', 'Tommot', 'ESC1'),
('2020-01-05 12:31:31', '57-6784952', 'Ferd', 'Jachimczak', 'fjachimczakpa', 'M', 'fjachimczakpa@universidadfalsa.com', 'CN', 'Sishilichengzi', 'PH', 'Villanueva', 'ESC3'),
('2021-01-18 17:05:01', '00-8732004', 'Franni', 'Jeffreys', 'fjeffreysu', 'F', 'fjeffreysu@universidadfalsa.com', 'RU', 'Mnogoudobnoye', 'CN', 'Yajin', 'ESC3'),
('2020-01-31 08:35:30', '07-1649372', 'Fidelity', 'Kienlein', 'fkienleinkj', 'F', 'fkienleinkj@universidadfalsa.com', 'ID', 'Suci Kaler', 'PE', 'Vischongo', 'ESC7'),
('2021-01-05 14:32:43', '73-6844534', 'Fidelio', 'Klaves', 'fklavesqz', 'M', 'fklavesqz@universidadfalsa.com', 'PT', 'Vessada', 'ET', 'Bichena', 'ESC6'),
('2021-03-26 22:42:43', '38-2069473', 'Florencia', 'Klima', 'fklimaio', 'F', 'fklimaio@universidadfalsa.com', 'PH', 'Samboan', 'CO', 'Cerinza', 'ESC6'),
('2021-03-07 17:47:16', '64-8561037', 'Fancy', 'Klisch', 'fklischgj', 'F', 'fklischgj@universidadfalsa.com', 'CN', 'Beishan', 'MM', 'Myeik', 'ESC6'),
('2021-05-09 21:40:06', '72-9646599', 'Filippo', 'Lambersen', 'flambersener', 'M', 'flambersener@universidadfalsa.com', 'SE', 'Enköping', 'JP', 'Tōgane', 'ESC7'),
('2021-02-07 10:06:32', '58-9143367', 'Fanchette', 'Leblanc', 'fleblanc2x', 'F', 'fleblanc2x@universidadfalsa.com', 'CN', 'Heimahe', 'GR', 'Síkinos', 'ESC7'),
('2021-03-31 10:32:50', '39-2231172', 'Freeland', 'Linwood', 'flinwood58', 'M', 'flinwood58@universidadfalsa.com', 'AR', 'San Vicente', 'CN', 'Ulan Us', 'ESC2'),
('2020-01-14 00:23:30', '87-7993605', 'Fianna', 'Magauran', 'fmagaurank5', 'F', 'fmagaurank5@universidadfalsa.com', 'PE', 'Manuel Antonio Mesones Muro', 'LB', 'El Hermel', 'ESC5'),
('2021-06-01 11:48:45', '59-3860471', 'Flori', 'McCrum', 'fmccrumee', 'F', 'fmccrumee@universidadfalsa.com', 'CO', 'San Calixto', 'JP', 'Mihara', 'ESC5'),
('2020-06-04 09:36:14', '89-9497386', 'Fidelity', 'Morgan', 'fmorgan4r', 'F', 'fmorgan4r@universidadfalsa.com', 'JP', 'Tsuruoka', 'RU', 'Uchkeken', 'ESC5'),
('2021-09-26 12:32:24', '48-9885108', 'Faustine', 'Morrieson', 'fmorrieson9l', 'F', 'fmorrieson9l@universidadfalsa.com', 'ID', 'Wates', 'LU', 'Berdorf', 'ESC6'),
('2021-01-01 20:49:14', '37-0099635', 'Federico', 'Mullinger', 'fmullinger50', 'M', 'fmullinger50@universidadfalsa.com', 'CN', 'Xin’an', 'PH', 'Bantuanon', 'ESC5'),
('2020-07-10 15:37:01', '71-7198826', 'Freddie', 'Novacek', 'fnovacekmn', 'F', 'fnovacekmn@universidadfalsa.com', 'PH', 'Alfonso', 'CN', 'Fuyu', 'ESC7'),
('2021-01-08 08:25:27', '28-1231226', 'Fonsie', 'Ost', 'fost20', 'M', 'fost20@universidadfalsa.com', 'CN', 'Wangchang', 'PL', 'Bardo', 'ESC4'),
('2020-05-10 08:58:12', '31-6343303', 'Farr', 'Pearson', 'fpearsone8', 'M', 'fpearsone8@universidadfalsa.com', 'CD', 'Bolobo', 'VN', 'Hậu Nghĩa', 'ESC4'),
('2021-09-14 14:21:56', '00-6592319', 'Ferdinanda', 'Pilmore', 'fpilmore7o', 'F', 'fpilmore7o@universidadfalsa.com', 'CN', 'Gujun', 'PH', 'Quintong', 'ESC1'),
('2021-04-14 17:17:16', '96-5441350', 'Florella', 'Poschel', 'fposchelbu', 'F', 'fposchelbu@universidadfalsa.com', 'BR', 'Porteirinha', 'CN', 'Shizi', 'ESC7'),
('2021-10-08 19:35:40', '36-2613175', 'Ferris', 'Pothergill', 'fpothergillia', 'M', 'fpothergillia@universidadfalsa.com', 'CN', 'Sizhou', 'CN', 'Zhaotong', 'ESC1'),
('2021-11-24 18:17:27', '11-7128802', 'Fernando', 'Pringer', 'fpringerhd', 'M', 'fpringerhd@universidadfalsa.com', 'ID', 'Cipanas', 'PH', 'Anilao', 'ESC5'),
('2020-08-21 09:13:16', '44-8810983', 'Felic', 'Sangra', 'fsangraoy', 'M', 'fsangraoy@universidadfalsa.com', 'JP', 'Hōfu', 'CN', 'Xubu', 'ESC3'),
('2021-02-18 22:55:51', '02-2644231', 'Fraser', 'Smallthwaite', 'fsmallthwaite67', 'M', 'fsmallthwaite67@universidadfalsa.com', 'CN', 'Liulin', 'MK', 'Berovo', 'ESC4'),
('2020-04-29 03:02:29', '30-1831683', 'Fawnia', 'Smeal', 'fsmealch', 'F', 'fsmealch@universidadfalsa.com', 'PT', 'Lameiro', 'CN', 'Taoyao', 'ESC4'),
('2021-10-18 12:05:11', '48-0787725', 'Filippo', 'Sterry', 'fsterry8w', 'M', 'fsterry8w@universidadfalsa.com', 'CN', 'Erdaocha', 'VN', 'Quảng Yên', 'ESC3'),
('2021-04-07 22:32:51', '75-9400588', 'Fredrick', 'Stower', 'fstowerfs', 'M', 'fstowerfs@universidadfalsa.com', 'CN', 'Shangqing', 'MM', 'Kayan', 'ESC2'),
('2020-12-30 04:51:20', '02-5568409', 'Franchot', 'Tabbitt', 'ftabbittd8', 'M', 'ftabbittd8@universidadfalsa.com', 'US', 'Beaumont', 'TH', 'Ban Phue', 'ESC3'),
('2020-04-28 05:28:43', '44-2249239', 'Fred', 'Tink', 'ftinkn0', 'M', 'ftinkn0@universidadfalsa.com', 'ML', 'Diré', 'ID', 'Jampang Tengah', 'ESC2'),
('2021-07-14 04:07:26', '27-5530243', 'Gnni', 'Aleso', 'galesoro', 'F', 'galesoro@universidadfalsa.com', 'PL', 'Sieniawa Żarska', 'RU', 'Kaliningrad', 'ESC4'),
('2020-12-04 13:06:05', '30-5629639', 'Gorden', 'Anyon', 'ganyon66', 'M', 'ganyon66@universidadfalsa.com', 'HU', 'Érd', 'MA', 'Aknoul', 'ESC5'),
('2021-09-28 06:34:13', '94-7910122', 'Gage', 'Artois', 'gartoisb', 'M', 'gartoisb@universidadfalsa.com', 'CZ', 'Herálec', 'VN', 'Lâm Thao', 'ESC2'),
('2021-06-26 19:50:36', '00-6527462', 'Gladys', 'Aymerich', 'gaymerichgz', 'F', 'gaymerichgz@universidadfalsa.com', 'PE', 'Jauja', 'RU', 'Pechora', 'ESC2'),
('2020-12-29 08:21:12', '97-8308716', 'Grant', 'Besemer', 'gbesemer24', 'M', 'gbesemer24@universidadfalsa.com', 'PH', 'Bantog', 'US', 'Philadelphia', 'ESC5'),
('2021-10-10 05:12:59', '19-1087906', 'Gratiana', 'Bloxsom', 'gbloxsomp1', 'F', 'gbloxsomp1@universidadfalsa.com', 'NO', 'Skien', 'YE', '‘Amrān', 'ESC5'),
('2020-10-19 02:20:39', '00-5862671', 'Gerard', 'Caines', 'gcaines3s', 'M', 'gcaines3s@universidadfalsa.com', 'IR', 'Falāvarjān', 'CN', 'Jiwei', 'ESC4'),
('2021-07-03 05:13:30', '67-9319358', 'Gianna', 'Charville', 'gcharville84', 'F', 'gcharville84@universidadfalsa.com', 'CN', 'Jiuli', 'PH', 'Harrison', 'ESC4'),
('2021-09-02 19:27:00', '99-6407426', 'Glennie', 'Coldtart', 'gcoldtarthw', 'F', 'gcoldtarthw@universidadfalsa.com', 'PL', 'Rzgów', 'AL', 'Laç', 'ESC5'),
('2020-04-25 01:23:31', '55-1210244', 'Gretna', 'Cortese', 'gcortesecd', 'F', 'gcortesecd@universidadfalsa.com', 'CN', 'Jiangtian', 'RS', 'Dobrica', 'ESC4'),
('2021-02-21 15:55:54', '11-1309866', 'Glennis', 'Cotterell', 'gcotterell6w', 'F', 'gcotterell6w@universidadfalsa.com', 'FR', 'Montpellier', 'KG', 'Kara-Balta', 'ESC7'),
('2021-09-20 02:06:05', '34-8213260', 'Gearard', 'Cubbin', 'gcubbinn1', 'M', 'gcubbinn1@universidadfalsa.com', 'AF', 'Qarah Bāgh', 'ID', 'Karangtengah', 'ESC2'),
('2020-11-20 12:07:11', '19-7032996', 'Gisela', 'Dumbarton', 'gdumbarton9v', 'F', 'gdumbarton9v@universidadfalsa.com', 'KM', 'Kangani', 'PH', 'Gueset', 'ESC3'),
('2020-03-09 18:13:39', '00-6315976', 'Glyn', 'Finessy', 'gfinessy3y', 'F', 'gfinessy3y@universidadfalsa.com', 'RU', 'Pokachi', 'NO', 'Steinkjer', 'ESC4'),
('2021-10-11 12:37:04', '06-2774404', 'Gertrudis', 'Floyd', 'gfloydj7', 'F', 'gfloydj7@universidadfalsa.com', 'PT', 'Ferreira do Zêzere', 'SE', 'Stockholm', 'ESC5'),
('2021-01-13 18:34:27', '70-8243585', 'Gaelan', 'Fortoun', 'gfortounm1', 'M', 'gfortounm1@universidadfalsa.com', 'ID', 'Sukasari', 'BD', 'Mirzāpur', 'ESC2'),
('2021-11-12 17:11:40', '87-8238665', 'Georges', 'Garvill', 'ggarvillev', 'M', 'ggarvillev@universidadfalsa.com', 'US', 'Rochester', 'NO', 'Oslo', 'ESC7'),
('2021-11-11 19:16:24', '17-9743523', 'Gustavus', 'Gildroy', 'ggildroya7', 'M', 'ggildroya7@universidadfalsa.com', 'RU', 'Verkhov’ye', 'ID', 'Kanginan', 'ESC6'),
('2021-09-05 21:28:55', '04-3083729', 'Giffy', 'Gilmore', 'ggilmore1e', 'M', 'ggilmore1e@universidadfalsa.com', 'FR', 'Orléans', 'PK', 'Parachinar', 'ESC4'),
('2021-06-17 03:50:15', '26-6940254', 'Glad', 'Giraldez', 'ggiraldez3v', 'F', 'ggiraldez3v@universidadfalsa.com', 'ZA', 'Brandfort', 'RU', 'Petushki', 'ESC3'),
('2021-01-01 12:59:25', '28-0499282', 'Gussi', 'Gutman', 'ggutmanqq', 'F', 'ggutmanqq@universidadfalsa.com', 'UZ', 'Qorao’zak', 'CN', 'Jingping', 'ESC6'),
('2021-05-30 16:20:34', '47-5703953', 'Gussi', 'Hebburn', 'ghebburnmi', 'F', 'ghebburnmi@universidadfalsa.com', 'PH', 'Mabini', 'ID', 'Baranusa', 'ESC2'),
('2020-11-04 16:47:04', '05-6030080', 'Gavin', 'Hughill', 'ghughillrf', 'M', 'ghughillrf@universidadfalsa.com', 'JP', 'Matsushima', 'NZ', 'Picton', 'ESC2'),
('2020-03-06 02:06:12', '20-9435600', 'Gwenny', 'Kendell', 'gkendellhg', 'F', 'gkendellhg@universidadfalsa.com', 'CZ', 'Heřmanova Huť', 'VN', 'Ninh Giang', 'ESC3'),
('2021-03-29 15:24:53', '00-3448751', 'Gretna', 'Kimbly', 'gkimbly1r', 'F', 'gkimbly1r@universidadfalsa.com', 'IE', 'Cloyne', 'FR', 'Saint-Amand-les-Eaux', 'ESC1'),
('2020-06-11 11:14:10', '49-4597240', 'Gunther', 'MacInnes', 'gmacinnesih', 'M', 'gmacinnesih@universidadfalsa.com', 'PT', 'Buarcos', 'PT', 'Casa Nova', 'ESC2'),
('2020-02-02 19:11:25', '04-2298877', 'Georgeanna', 'Nickels', 'gnickelskv', 'F', 'gnickelskv@universidadfalsa.com', 'CZ', 'Hronov', 'BR', 'São Manuel', 'ESC7'),
('2020-08-27 21:18:21', '20-0010989', 'Goddart', 'OConnel', 'goconnelg9', 'M', 'goconnelg9@universidadfalsa.com', 'UA', 'Myronivka', 'TH', 'Phu Phiang', 'ESC5'),
('2021-01-20 13:33:15', '52-4053246', 'Germain', 'Oglethorpe', 'goglethorpe3k', 'F', 'goglethorpe3k@universidadfalsa.com', 'CN', 'Longwu', 'AM', 'Nor Gyugh', 'ESC6'),
('2020-04-15 21:45:32', '33-1085395', 'Georgena', 'Osborne', 'gosborne8y', 'F', 'gosborne8y@universidadfalsa.com', 'CN', 'Mahe', 'PA', 'Portobelo', 'ESC6'),
('2021-07-03 12:46:07', '35-5282630', 'Geri', 'Pickerell', 'gpickerellbs', 'F', 'gpickerellbs@universidadfalsa.com', 'ID', 'Merik', 'NG', 'Lapai', 'ESC3'),
('2020-05-18 09:41:27', '27-3201673', 'Gwendolyn', 'Pizzie', 'gpizziehs', 'F', 'gpizziehs@universidadfalsa.com', 'AR', 'Granadero Baigorria', 'CN', 'Baoxing', 'ESC6'),
('2020-03-07 10:56:12', '84-0357794', 'Gray', 'Ploughwright', 'gploughwright44', 'M', 'gploughwright44@universidadfalsa.com', 'ID', 'Banjar Gunungpande', 'RU', 'Vypolzovo', 'ESC7'),
('2021-04-03 19:47:35', '29-6534762', 'Grayce', 'Ponder', 'gponderq', 'F', 'gponderq@universidadfalsa.com', 'TH', 'Chon Buri', 'PL', 'Wierzawice', 'ESC7'),
('2020-02-03 08:58:02', '89-0202055', 'Guenna', 'Ripsher', 'gripsher6v', 'F', 'gripsher6v@universidadfalsa.com', 'UA', 'Nyzhnya Krynka', 'FR', 'Beauvais', 'ESC5'),
('2021-07-02 16:35:51', '10-9076620', 'Gerianna', 'Sam', 'gsamk9', 'F', 'gsamk9@universidadfalsa.com', 'PT', 'Corticeiro de Baixo', 'CN', 'Jialou', 'ESC3'),
('2020-06-26 22:45:05', '38-8975572', 'Gray', 'Sancias', 'gsanciasf8', 'M', 'gsanciasf8@universidadfalsa.com', 'CN', 'Wugong', 'HN', 'Petoa', 'ESC3'),
('2020-05-28 23:35:14', '63-7231379', 'Gianni', 'Slite', 'gslite5i', 'M', 'gslite5i@universidadfalsa.com', 'ID', 'Sangkalputung', 'KG', 'Talas', 'ESC2'),
('2021-05-01 23:18:34', '30-9752323', 'Galvan', 'Sparrow', 'gsparrow76', 'M', 'gsparrow76@universidadfalsa.com', 'CN', 'Shuangqiao', 'CU', 'Puerto Padre', 'ESC4'),
('2021-04-02 19:48:33', '45-3081752', 'Gerty', 'Tomasino', 'gtomasinof9', 'F', 'gtomasinof9@universidadfalsa.com', 'HR', 'Donja Brela', 'NL', 'Alkmaar', 'ESC2'),
('2020-12-11 02:25:59', '61-6093117', 'Gabi', 'Woodcock', 'gwoodcockct', 'M', 'gwoodcockct@universidadfalsa.com', 'NL', 'Maastricht', 'PT', 'Quintães', 'ESC7'),
('2020-03-31 10:58:50', '86-0218517', 'Honor', 'Adiscot', 'hadiscot6', 'F', 'hadiscot6@universidadfalsa.com', 'PH', 'Makilala', 'CA', 'Logan Lake', 'ESC3'),
('2021-04-04 00:30:06', '99-3207646', 'Hermina', 'Ainger', 'haingerip', 'F', 'haingerip@universidadfalsa.com', 'ID', 'Wailolong', 'CN', 'Xincun', 'ESC6'),
('2020-08-21 11:34:21', '27-4732285', 'Hinda', 'Antognozzii', 'hantognozzii2r', 'F', 'hantognozzii2r@universidadfalsa.com', 'KR', 'Changsu', 'RU', 'Novoye Leushino', 'ESC2'),
('2020-09-11 08:36:09', '85-6109713', 'Hannis', 'Booker', 'hbookerg3', 'F', 'hbookerg3@universidadfalsa.com', 'UA', 'Talalayivka', 'RU', 'Shilovo', 'ESC1'),
('2021-03-27 05:08:51', '52-4467959', 'Hercule', 'Brazil', 'hbrazilhj', 'M', 'hbrazilhj@universidadfalsa.com', 'CO', 'Municipio de Copacabana', 'CN', 'Shangfang', 'ESC4'),
('2021-07-17 07:03:20', '80-9853946', 'Heidie', 'Brinsden', 'hbrinsdenn7', 'F', 'hbrinsdenn7@universidadfalsa.com', 'PE', 'Chalaco', 'PH', 'Lennec', 'ESC3'),
('2020-07-15 19:23:52', '64-5463754', 'Hardy', 'Bronot', 'hbronotx', 'M', 'hbronotx@universidadfalsa.com', 'ID', 'Pangkalanbunut', 'US', 'Jeffersonville', 'ESC6'),
('2020-04-30 13:39:36', '65-3220394', 'Hertha', 'Brundill', 'hbrundill2u', 'F', 'hbrundill2u@universidadfalsa.com', 'RU', 'Pokachi', 'CN', 'Mozhong', 'ESC5'),
('2021-05-01 02:57:18', '77-2113564', 'Hadrian', 'Cavan', 'hcavanlf', 'M', 'hcavanlf@universidadfalsa.com', 'CN', 'Yanjiang', 'TN', 'Mahdia', 'ESC4'),
('2021-06-12 23:44:39', '80-5669656', 'Harlen', 'Ciobutaru', 'hciobutaru3j', 'M', 'hciobutaru3j@universidadfalsa.com', 'SY', 'Al Bahlūlīyah', 'PH', 'Baguio', 'ESC7'),
('2021-07-15 22:54:27', '77-3922485', 'Hinze', 'Coon', 'hcoonos', 'M', 'hcoonos@universidadfalsa.com', 'PH', 'Becerril', 'FR', 'Béthune', 'ESC1'),
('2020-10-03 10:48:38', '99-3441112', 'Herculie', 'Dell Casa', 'hdellcasa9r', 'M', 'hdellcasa9r@universidadfalsa.com', 'BR', 'Camocim', 'CN', 'Hepu', 'ESC5'),
('2020-10-14 15:31:41', '89-5008608', 'Hamid', 'De Mico', 'hdemicod', 'M', 'hdemicod@universidadfalsa.com', 'CN', 'Bopu', 'ID', 'Idi Rayeuk', 'ESC2'),
('2020-09-08 03:13:16', '12-0075498', 'Hardy', 'Drysdall', 'hdrysdall6h', 'M', 'hdrysdall6h@universidadfalsa.com', 'ID', 'Gatak', 'PK', 'Rājo Khanāni', 'ESC2'),
('2020-10-25 23:38:36', '02-9375417', 'Hilda', 'Dumsday', 'hdumsdayqj', 'F', 'hdumsdayqj@universidadfalsa.com', 'MA', 'Ouaoula', 'CN', 'Guazhou', 'ESC5'),
('2021-04-18 05:37:52', '34-6455908', 'Hanan', 'Enrietto', 'henriettoax', 'M', 'henriettoax@universidadfalsa.com', 'ID', 'Panoongan', 'CN', 'Heping', 'ESC1'),
('2020-01-10 08:18:21', '80-3563297', 'Hattie', 'Forsyth', 'hforsythfq', 'F', 'hforsythfq@universidadfalsa.com', 'PT', 'Oliveiras', 'IR', 'Javānrūd', 'ESC5'),
('2020-05-27 07:57:30', '43-8195446', 'Hube', 'Godfroy', 'hgodfroyhz', 'M', 'hgodfroyhz@universidadfalsa.com', 'CN', 'Zheshan', 'CZ', 'Pyšely', 'ESC4'),
('2021-09-14 14:30:18', '05-5289232', 'Hasty', 'Goggen', 'hgoggenh7', 'M', 'hgoggenh7@universidadfalsa.com', 'PL', 'Krynice', 'JP', 'Ikeda', 'ESC7'),
('2021-03-25 23:24:03', '69-7302126', 'Herold', 'Goold', 'hgooldib', 'M', 'hgooldib@universidadfalsa.com', 'JP', 'Ichihara', 'MX', 'La Soledad', 'ESC5'),
('2020-04-19 23:21:07', '75-7187075', 'Hieronymus', 'Harpin', 'hharpinmg', 'M', 'hharpinmg@universidadfalsa.com', 'PE', 'Juli', 'AR', 'Ancasti', 'ESC6'),
('2020-08-15 22:15:16', '11-5206650', 'Huey', 'Harrild', 'hharrildh2', 'M', 'hharrildh2@universidadfalsa.com', 'TZ', 'Makuyuni', 'CN', 'Dasha', 'ESC6'),
('2020-10-17 19:39:14', '39-1923491', 'Hedwiga', 'Kasperski', 'hkasperski9i', 'F', 'hkasperski9i@universidadfalsa.com', 'CO', 'Baranoa', 'CN', 'Xin Bulag', 'ESC6'),
('2021-11-08 23:17:08', '80-6940228', 'Hillier', 'Longmate', 'hlongmatehf', 'M', 'hlongmatehf@universidadfalsa.com', 'IQ', 'Al Mawşil al Jadīdah', 'UA', 'Ovruch', 'ESC4'),
('2020-01-26 23:22:18', '18-2531528', 'Howey', 'Mantha', 'hmanthaek', 'M', 'hmanthaek@universidadfalsa.com', 'CN', 'Lingquan', 'CA', 'Deep River', 'ESC6'),
('2021-09-14 12:50:13', '90-5899669', 'Hollis', 'McCabe', 'hmccabe4s', 'M', 'hmccabe4s@universidadfalsa.com', 'PH', 'Guinabsan', 'CN', 'Jianfeng', 'ESC1'),
('2020-07-07 11:26:24', '50-9269653', 'Hillel', 'McCarl', 'hmccarl7f', 'M', 'hmccarl7f@universidadfalsa.com', 'GB', 'Milton', 'PH', 'Lamut', 'ESC6'),
('2021-11-16 13:26:38', '89-8541181', 'Hersch', 'Mollison', 'hmollisonae', 'M', 'hmollisonae@universidadfalsa.com', 'CN', 'Qingban', 'ID', 'Sugihmukti', 'ESC1'),
('2020-10-15 04:17:05', '79-6791275', 'Holmes', 'Otto', 'hottohc', 'M', 'hottohc@universidadfalsa.com', 'NG', 'Wasagu', 'ID', 'Wangkung', 'ESC2'),
('2020-05-07 10:29:13', '88-9312730', 'Halsey', 'Pidgeley', 'hpidgeleyp2', 'M', 'hpidgeleyp2@universidadfalsa.com', 'RS', 'Zemun', 'CN', 'Qinghua', 'ESC6'),
('2021-06-05 17:53:30', '84-7157747', 'Herculie', 'Pogg', 'hpogg6u', 'M', 'hpogg6u@universidadfalsa.com', 'SE', 'Motala', 'CN', 'Lixi', 'ESC6'),
('2021-07-01 02:35:53', '11-8050760', 'Hagen', 'Server', 'hserverel', 'M', 'hserverel@universidadfalsa.com', 'FI', 'Lammi', 'ID', 'Dawuhan', 'ESC5'),
('2021-05-08 08:10:23', '52-0807039', 'Halsy', 'Sharper', 'hsharper9g', 'M', 'hsharper9g@universidadfalsa.com', 'LU', 'Berdorf', 'BR', 'Pedregulho', 'ESC7'),
('2021-11-04 15:34:14', '79-0350793', 'Humbert', 'Shilston', 'hshilstonmt', 'M', 'hshilstonmt@universidadfalsa.com', 'CN', 'Shuangfeng', 'MZ', 'Nampula', 'ESC5'),
('2020-11-23 22:33:55', '62-5861423', 'Hamil', 'Southerell', 'hsoutherell7', 'M', 'hsoutherell7@universidadfalsa.com', 'CN', 'Qiaotou', 'CM', 'Doumé', 'ESC2'),
('2021-09-03 00:42:16', '71-7361492', 'Harri', 'Spencock', 'hspencock87', 'F', 'hspencock87@universidadfalsa.com', 'CZ', 'Polešovice', 'NO', 'Trondheim', 'ESC4'),
('2020-03-07 09:55:49', '86-9802060', 'Herrick', 'Terbeek', 'hterbeekr1', 'M', 'hterbeekr1@universidadfalsa.com', 'LU', 'Ettelbruck', 'CZ', 'Žďár', 'ESC3'),
('2020-02-22 09:59:59', '54-5083699', 'Hortensia', 'Truse', 'htrusemp', 'F', 'htrusemp@universidadfalsa.com', 'NG', 'Damasak', 'CN', 'Zhangdian', 'ESC7'),
('2021-07-03 11:27:03', '48-1297875', 'Isabelle', 'Allgood', 'iallgoodk', 'F', 'iallgoodk@universidadfalsa.com', 'CZ', 'Lukavec', 'JP', 'Nagai', 'ESC7'),
('2020-02-05 21:41:28', '09-0055798', 'Issiah', 'Claesens', 'iclaesensa2', 'M', 'iclaesensa2@universidadfalsa.com', 'CN', 'Wengang', 'CO', 'Los Santos', 'ESC6'),
('2020-09-03 19:19:55', '65-7409425', 'Ingamar', 'Clemenzo', 'iclemenzo8p', 'M', 'iclemenzo8p@universidadfalsa.com', 'BE', 'Bouillon', 'CN', 'Guniushan', 'ESC3'),
('2021-05-19 15:35:34', '38-0447205', 'Ingeberg', 'Cruise', 'icruiseew', 'F', 'icruiseew@universidadfalsa.com', 'VN', 'Quế Sơn', 'BY', 'Bykhaw', 'ESC2'),
('2021-01-26 06:22:39', '39-8827014', 'Idelle', 'Dallaway', 'idallawayci', 'F', 'idallawayci@universidadfalsa.com', 'US', 'Virginia Beach', 'US', 'Hartford', 'ESC6'),
('2020-07-30 15:21:02', '17-1709377', 'Idalina', 'Darnborough', 'idarnboroughph', 'F', 'idarnboroughph@universidadfalsa.com', 'CH', 'Chur', 'TJ', 'Orzu', 'ESC3'),
('2021-05-02 20:22:38', '55-0497776', 'Ilysa', 'Franses', 'ifransesrp', 'F', 'ifransesrp@universidadfalsa.com', 'BR', 'Açu', 'ID', 'Arbais', 'ESC3'),
('2020-06-30 13:50:45', '74-5896254', 'Ingemar', 'Froom', 'ifroom6i', 'M', 'ifroom6i@universidadfalsa.com', 'CN', 'Shuanghekou', 'FI', 'Pyhäselkä', 'ESC2'),
('2020-01-29 23:44:21', '62-5970019', 'Ina', 'Heavens', 'iheavense6', 'F', 'iheavense6@universidadfalsa.com', 'MY', 'Kangar', 'CA', 'New-Richmond', 'ESC4'),
('2020-12-10 01:24:35', '27-0953444', 'Ingelbert', 'Jennions', 'ijennionsc5', 'M', 'ijennionsc5@universidadfalsa.com', 'CN', 'Tacheng', 'RU', 'Kirovsk', 'ESC3'),
('2020-02-17 14:22:18', '47-5186230', 'Ileane', 'Larham', 'ilarham2f', 'F', 'ilarham2f@universidadfalsa.com', 'CN', 'Hujia', 'ID', 'Lowotukan', 'ESC7'),
('2021-10-17 08:39:58', '27-8201939', 'Ivor', 'Liquorish', 'iliquorish5e', 'M', 'iliquorish5e@universidadfalsa.com', 'VN', 'Thị Trấn Yên Châu', 'PH', 'Mangarine', 'ESC2'),
('2020-12-05 07:50:44', '48-8251942', 'Ivy', 'Mallison', 'imallisonlv', 'F', 'imallisonlv@universidadfalsa.com', 'EG', 'Al Bawīţī', 'UA', 'Strohonivka', 'ESC7'),
('2021-04-04 21:06:53', '84-4986678', 'Idelle', 'Morison', 'imorisonb1', 'F', 'imorisonb1@universidadfalsa.com', 'PT', 'Devesa', 'JP', 'Miyazaki-shi', 'ESC3'),
('2020-03-10 13:19:19', '44-2827359', 'Ingamar', 'Scorthorne', 'iscorthorne1m', 'M', 'iscorthorne1m@universidadfalsa.com', 'MY', 'Kuala Lumpur', 'CO', 'El Carmen', 'ESC1'),
('2021-06-25 07:10:48', '86-9138401', 'Izak', 'Severwright', 'iseverwrightnb', 'M', 'iseverwrightnb@universidadfalsa.com', 'SE', 'Täby', 'GR', 'Káto Miliá', 'ESC6'),
('2020-04-25 22:23:15', '33-2267220', 'Israel', 'Sinkin', 'isinkinqi', 'M', 'isinkinqi@universidadfalsa.com', 'AT', 'Graz', 'SE', 'Helsingborg', 'ESC5'),
('2021-04-23 11:47:37', '91-3290668', 'Isador', 'Sotheby', 'isothebyl4', 'M', 'isothebyl4@universidadfalsa.com', 'ID', 'Krajan', 'SE', 'Järfälla', 'ESC3'),
('2021-08-12 05:48:05', '04-6743719', 'Idaline', 'Stowte', 'istowte36', 'F', 'istowte36@universidadfalsa.com', 'SE', 'Göteborg', 'HR', 'Jelsa', 'ESC7'),
('2020-02-19 21:12:28', '54-6675206', 'Ingemar', 'Tickner', 'iticknere3', 'M', 'iticknere3@universidadfalsa.com', 'BR', 'Gaspar', 'PK', 'Jāmpur', 'ESC6'),
('2020-05-07 05:45:42', '19-7003469', 'Ike', 'Tuckwood', 'ituckwood6t', 'M', 'ituckwood6t@universidadfalsa.com', 'JP', 'Hachiōji', 'CN', 'Longtou', 'ESC1'),
('2020-12-15 22:16:41', '13-3832865', 'Ives', 'Yarranton', 'iyarrantonoa', 'M', 'iyarrantonoa@universidadfalsa.com', 'ID', 'Bojonggaling', 'MX', 'San Isidro', 'ESC2'),
('2020-03-19 13:11:15', '18-1259045', 'Jenda', 'Aps', 'japsal', 'F', 'japsal@universidadfalsa.com', 'VN', 'Thị Trấn Văn Quan', 'NG', 'Bassa', 'ESC5'),
('2021-03-24 01:08:12', '98-2241040', 'Jermaine', 'Arboin', 'jarboinrm', 'M', 'jarboinrm@universidadfalsa.com', 'CN', 'Donglai', 'AF', 'Qarqīn', 'ESC3'),
('2021-06-25 00:15:31', '72-7276495', 'Jeanie', 'Bandt', 'jbandt69', 'F', 'jbandt69@universidadfalsa.com', 'CN', 'Hengxianhe', 'ID', 'Daniwato', 'ESC4'),
('2020-04-10 15:01:53', '61-1530771', 'Jilli', 'Beckett', 'jbeckettq7', 'F', 'jbeckettq7@universidadfalsa.com', 'CZ', 'Miřetice', 'BR', 'Mangaratiba', 'ESC2'),
('2021-09-14 02:54:44', '60-4815750', 'Janine', 'Bristo', 'jbristo5b', 'F', 'jbristo5b@universidadfalsa.com', 'ID', 'Cisompet', 'MG', 'Soanierana Ivongo', 'ESC6'),
('2020-11-01 12:43:54', '69-7405427', 'Janie', 'Brumby', 'jbrumbyka', 'F', 'jbrumbyka@universidadfalsa.com', 'CN', 'Wenci', 'BR', 'Igarapé', 'ESC6'),
('2020-04-14 01:10:42', '12-8757871', 'Jeri', 'Criag', 'jcriag6x', 'F', 'jcriag6x@universidadfalsa.com', 'AU', 'Perth', 'BR', 'Breves', 'ESC1'),
('2020-03-24 16:14:31', '57-7882565', 'Jorey', 'Doe', 'jdoeig', 'F', 'jdoeig@universidadfalsa.com', 'FR', 'Marseille', 'SE', 'Partille', 'ESC5'),
('2021-01-03 13:14:36', '58-4897958', 'Joshia', 'Espinosa', 'jespinosadq', 'M', 'jespinosadq@universidadfalsa.com', 'CN', 'Shifang', 'VN', 'U Minh', 'ESC5'),
('2020-10-06 19:38:58', '68-0961045', 'Jaymie', 'Glasser', 'jglassera', 'M', 'jglassera@universidadfalsa.com', 'ID', 'Pajung', 'CN', 'Dongxin', 'ESC4'),
('2021-09-12 10:15:14', '58-1443717', 'Jodie', 'Greensitt', 'jgreensittd5', 'F', 'jgreensittd5@universidadfalsa.com', 'CZ', 'Humpolec', 'TN', 'Beni Khiar', 'ESC6'),
('2020-01-05 14:02:57', '16-0859842', 'Jake', 'Hagerty', 'jhagertyp4', 'M', 'jhagertyp4@universidadfalsa.com', 'BR', 'Duque de Caxias', 'UY', 'Santa Rosa', 'ESC1'),
('2021-02-09 11:24:28', '80-9907350', 'Jayme', 'Hinken', 'jhinkenn2', 'M', 'jhinkenn2@universidadfalsa.com', 'AM', 'Tsaghkaber', 'AR', 'Colonia Elía', 'ESC6'),
('2020-05-24 23:50:10', '42-4212359', 'Jeanelle', 'Hissett', 'jhissettq5', 'F', 'jhissettq5@universidadfalsa.com', 'RU', 'Rozhdestveno', 'BR', 'Oliveira', 'ESC6'),
('2021-11-20 15:14:44', '24-0581049', 'Jacob', 'Hugnet', 'jhugnetgy', 'M', 'jhugnetgy@universidadfalsa.com', 'CN', 'Haitou', 'CN', 'Tangquan', 'ESC3'),
('2021-08-27 04:47:40', '77-0828233', 'Juli', 'Hunnicot', 'jhunnicot8t', 'F', 'jhunnicot8t@universidadfalsa.com', 'KE', 'Ol Kalou', 'LY', 'Şurmān', 'ESC1'),
('2020-04-03 15:08:31', '67-5607570', 'Josepha', 'Jaggs', 'jjaggs2z', 'F', 'jjaggs2z@universidadfalsa.com', 'US', 'Newport Beach', 'CN', 'Dalu', 'ESC4'),
('2020-10-23 02:57:27', '68-6365113', 'Jordan', 'Jozsika', 'jjozsikafo', 'M', 'jjozsikafo@universidadfalsa.com', 'ID', 'Tempaling', 'RU', 'Khorinsk', 'ESC5'),
('2021-05-10 15:37:12', '24-5543801', 'Jobye', 'Lawey', 'jlaweyfc', 'F', 'jlaweyfc@universidadfalsa.com', 'CN', 'Tunzhai', 'PH', 'Candijay', 'ESC7'),
('2020-06-30 14:48:24', '90-1513257', 'Josefa', 'Le Gall', 'jlegallbd', 'F', 'jlegallbd@universidadfalsa.com', 'PL', 'Goczałkowice Zdrój', 'FI', 'Utsjoki', 'ESC7'),
('2021-11-10 23:47:36', '81-1865464', 'Joelly', 'Lempertz', 'jlempertzh9', 'F', 'jlempertzh9@universidadfalsa.com', 'RU', 'Vyksa', 'ID', 'Kandangsapi', 'ESC5'),
('2021-01-13 01:09:28', '94-8610322', 'Jannelle', 'Libbey', 'jlibbey5a', 'F', 'jlibbey5a@universidadfalsa.com', 'PH', 'Masoli', 'NL', 'Winschoten', 'ESC4'),
('2020-10-18 21:27:48', '71-2637776', 'Jesselyn', 'MacWhirter', 'jmacwhirterdi', 'F', 'jmacwhirterdi@universidadfalsa.com', 'US', 'Fort Worth', 'JP', 'Ōta', 'ESC3'),
('2021-03-07 15:37:50', '59-9726405', 'Jo', 'Matisoff', 'jmatisofff7', 'M', 'jmatisofff7@universidadfalsa.com', 'SE', 'Stockholm', 'CN', 'Banjing', 'ESC7'),
('2021-07-27 17:36:32', '28-4304671', 'Jakob', 'McCrackem', 'jmccrackemof', 'M', 'jmccrackemof@universidadfalsa.com', 'UA', 'Rodatychi', 'CN', 'Furong', 'ESC4'),
('2021-09-13 19:55:23', '64-6742343', 'Jessee', 'McIntosh', 'jmcintoshlg', 'M', 'jmcintoshlg@universidadfalsa.com', 'CA', 'Melfort', 'PH', 'Lalagsan', 'ESC7'),
('2016-08-01 18:30:00', '1088023438', 'JUAN MANUEL', 'TABARES SALGADO', 'jmtabaress', 'M', 'jmtabaress@universidadfalsa.com', 'CO', 'PEREIRA', 'CO', 'PEREIRA', 'ESC3'),
('2020-02-29 03:54:17', '68-9110600', 'Jason', 'Ogelbe', 'jogelbe39', 'M', 'jogelbe39@universidadfalsa.com', 'JP', 'Satsumasendai', 'CN', 'Yunlu', 'ESC2'),
('2020-07-16 05:25:03', '09-1301532', 'Jarad', 'Perche', 'jperchejr', 'M', 'jperchejr@universidadfalsa.com', 'CA', 'Okotoks', 'CN', 'Wangcheng', 'ESC1'),
('2020-08-11 06:40:56', '82-7946712', 'Janeen', 'Poundsford', 'jpoundsfordql', 'F', 'jpoundsfordql@universidadfalsa.com', 'BY', 'Chavusy', 'GB', 'Aberdeen', 'ESC3'),
('2020-08-21 04:19:46', '90-2065873', 'Jarvis', 'Powner', 'jpownerqx', 'M', 'jpownerqx@universidadfalsa.com', 'ID', 'Gelap', 'AR', 'Rada Tilly', 'ESC4'),
('2020-11-25 04:08:11', '35-0642417', 'Joshia', 'Pybworth', 'jpybworthpd', 'M', 'jpybworthpd@universidadfalsa.com', 'PL', 'Kowale Oleckie', 'ID', 'Growong Kidul', 'ESC6'),
('2020-03-28 02:32:20', '96-4666545', 'Jan', 'Rameau', 'jrameau9o', 'F', 'jrameau9o@universidadfalsa.com', 'ID', 'Lairoka', 'SE', 'Luleå', 'ESC6'),
('2021-08-13 07:28:09', '09-8705734', 'Joshia', 'Ray', 'jraynm', 'M', 'jraynm@universidadfalsa.com', 'JO', 'Karak City', 'ID', 'Cikijing', 'ESC4'),
('2020-04-15 13:28:27', '21-4600983', 'Jillene', 'Roantree', 'jroantrees', 'F', 'jroantrees@universidadfalsa.com', 'CO', 'San Francisco', 'MD', 'Străşeni', 'ESC4'),
('2020-07-23 15:44:19', '78-2542328', 'Johny', 'Samett', 'jsamettpg', 'M', 'jsamettpg@universidadfalsa.com', 'BR', 'Rio Piracicaba', 'FR', 'Bayonne', 'ESC1'),
('2020-07-25 07:03:55', '51-5927973', 'Jewelle', 'Scheu', 'jscheuez', 'F', 'jscheuez@universidadfalsa.com', 'TH', 'Yala', 'CO', 'Pitalito', 'ESC2'),
('2021-09-14 16:07:29', '74-7702321', 'Judith', 'Sirman', 'jsirman81', 'F', 'jsirman81@universidadfalsa.com', 'RU', 'Makarov', 'NL', 'Sneek', 'ESC6'),
('2021-03-10 02:47:45', '75-5411382', 'Joshua', 'Squires', 'jsquires5z', 'M', 'jsquires5z@universidadfalsa.com', 'RU', 'Marfino', 'RU', 'Melenki', 'ESC4'),
('2021-10-19 22:52:08', '93-8323542', 'Jacquette', 'Tetla', 'jtetladj', 'F', 'jtetladj@universidadfalsa.com', 'SE', 'Göteborg', 'PH', 'Concepcion', 'ESC3'),
('2020-10-24 18:10:14', '63-4653281', 'Justine', 'Tirrey', 'jtirrey2j', 'F', 'jtirrey2j@universidadfalsa.com', 'AL', 'Elbasan', 'AL', 'Kolsh', 'ESC5'),
('2021-01-22 09:15:24', '51-7478254', 'Janek', 'Torbet', 'jtorbetqs', 'M', 'jtorbetqs@universidadfalsa.com', 'CN', 'Fengqiao', 'CN', 'Maquanzhen', 'ESC3'),
('2020-05-11 18:44:47', '97-4665033', 'Jodi', 'Waterfall', 'jwaterfallo9', 'M', 'jwaterfallo9@universidadfalsa.com', 'CD', 'Mushie', 'GR', 'Armenokhórion', 'ESC6'),
('2021-11-08 05:28:50', '90-2427428', 'Jenelle', 'Wolseley', 'jwolseleyfh', 'F', 'jwolseleyfh@universidadfalsa.com', 'PL', 'Szczecinek', 'PK', 'Jarānwāla', 'ESC1'),
('2021-01-04 18:55:30', '97-8022937', 'Kiley', 'Anwell', 'kanwellmb', 'F', 'kanwellmb@universidadfalsa.com', 'JP', 'Nakano', 'LR', 'New Yekepa', 'ESC2'),
('2021-09-13 17:49:04', '86-5123924', 'Kellyann', 'Ashtonhurst', 'kashtonhursto2', 'F', 'kashtonhursto2@universidadfalsa.com', 'UA', 'Onokivtsi', 'CN', 'Muyi', 'ESC3'),
('2020-04-27 10:45:28', '30-0499137', 'Kingston', 'Aulds', 'kaulds74', 'M', 'kaulds74@universidadfalsa.com', 'AR', 'Rosario', 'PT', 'Santa Luzia', 'ESC2'),
('2021-10-12 19:22:55', '09-0962856', 'Kendra', 'Bedburrow', 'kbedburrow80', 'F', 'kbedburrow80@universidadfalsa.com', 'CN', 'Jiazhuang', 'IL', 'Abū Ghaush', 'ESC5'),
('2021-04-11 12:54:06', '18-8207817', 'Kelila', 'Benedito', 'kbenedito3c', 'F', 'kbenedito3c@universidadfalsa.com', 'AM', 'Nalbandyan', 'CA', 'Oak Bay', 'ESC7'),
('2021-01-09 13:06:27', '94-7493438', 'Konstance', 'Bernhardt', 'kbernhardto4', 'F', 'kbernhardto4@universidadfalsa.com', 'CZ', 'Hudlice', 'BR', 'Corumbá', 'ESC5'),
('2021-11-13 18:15:54', '65-1204669', 'Kurt', 'Carette', 'kcarette97', 'M', 'kcarette97@universidadfalsa.com', 'FR', 'Orléans', 'CN', 'Dapuchaihe', 'ESC6'),
('2020-08-02 06:27:53', '51-9519069', 'Krystal', 'Cave', 'kcaveg8', 'F', 'kcaveg8@universidadfalsa.com', 'BR', 'Jequitinhonha', 'ID', 'Aegela', 'ESC6'),
('2020-07-04 10:32:10', '79-0286073', 'Karoline', 'Cockshtt', 'kcockshttoz', 'F', 'kcockshttoz@universidadfalsa.com', 'CN', 'Honghuatao', 'AR', 'Salto', 'ESC3'),
('2021-11-04 15:41:29', '74-6266342', 'Kurtis', 'Coker', 'kcokerle', 'M', 'kcokerle@universidadfalsa.com', 'ID', 'Pineleng', 'UY', 'Baltasar Brum', 'ESC6'),
('2020-06-04 05:40:34', '09-5499799', 'Kelsey', 'Cressy', 'kcressybw', 'M', 'kcressybw@universidadfalsa.com', 'PH', 'Balabagan', 'CN', 'Runsonglaozhai', 'ESC3'),
('2021-02-14 07:05:00', '91-4397491', 'Kippie', 'Danilchenko', 'kdanilchenko11', 'M', 'kdanilchenko11@universidadfalsa.com', 'ID', 'Partikan', 'RU', 'Staraya Ladoga', 'ESC7'),
('2020-05-23 00:58:41', '31-2279412', 'Kamilah', 'Daveran', 'kdaveranlj', 'F', 'kdaveranlj@universidadfalsa.com', 'CN', 'Jianggu', 'CN', 'Fengle', 'ESC4'),
('2021-09-16 02:43:43', '01-7910315', 'Katina', 'Donke', 'kdonkeot', 'F', 'kdonkeot@universidadfalsa.com', 'NG', 'Warri', 'BR', 'Icó', 'ESC3'),
('2020-06-09 01:03:34', '91-9249799', 'Kit', 'Dyble', 'kdyblemo', 'M', 'kdyblemo@universidadfalsa.com', 'RU', 'Nizhniy Dzhengutay', 'ID', 'Krajansumbermujur', 'ESC5'),
('2020-01-04 03:59:36', '53-0049784', 'Kendrick', 'Eisold', 'keisoldl0', 'M', 'keisoldl0@universidadfalsa.com', 'CN', 'Huangtan', 'AL', 'Poshnje', 'ESC5'),
('2021-08-14 09:35:02', '34-9545252', 'Kendrick', 'Evans', 'kevansic', 'M', 'kevansic@universidadfalsa.com', 'CN', 'Taizhou', 'LV', 'Riga', 'ESC1'),
('2021-08-11 05:28:08', '77-3639296', 'Kathleen', 'Fidoe', 'kfidoecc', 'F', 'kfidoecc@universidadfalsa.com', 'RU', 'Khoroshëvo-Mnevniki', 'TN', 'La Goulette', 'ESC2'),
('2021-06-24 00:15:07', '54-3534761', 'Kelvin', 'Fulep', 'kfulepa4', 'M', 'kfulepa4@universidadfalsa.com', 'IR', 'Īlām', 'PL', 'Kleszczów', 'ESC5'),
('2021-11-03 17:40:15', '59-2575988', 'Kandy', 'Gniewosz', 'kgniewoszrd', 'F', 'kgniewoszrd@universidadfalsa.com', 'EE', 'Sindi', 'CN', 'Maopingchang', 'ESC6'),
('2020-05-27 20:06:25', '15-0141684', 'Korella', 'Grigorkin', 'kgrigorkinmh', 'F', 'kgrigorkinmh@universidadfalsa.com', 'ID', 'Gabahan', 'VN', 'Bích Động', 'ESC5'),
('2021-03-01 01:09:27', '11-5229973', 'Kellyann', 'Hansom', 'khansomr8', 'F', 'khansomr8@universidadfalsa.com', 'PH', 'Limbaan', 'SY', 'Al Ya‘rubīyah', 'ESC5'),
('2021-07-03 23:08:18', '04-9690062', 'Kaleb', 'Hillhouse', 'khillhouse6m', 'M', 'khillhouse6m@universidadfalsa.com', 'ID', 'Jenang Selatan', 'PK', 'Bhāi Pheru', 'ESC7'),
('2020-07-16 19:22:13', '31-9167337', 'Kaye', 'Houlton', 'khoultoncx', 'F', 'khoultoncx@universidadfalsa.com', 'FR', 'Paris 02', 'AR', 'Mina Clavero', 'ESC4'),
('2020-11-10 12:14:43', '55-6124675', 'Kane', 'Klaussen', 'kklaussenpl', 'M', 'kklaussenpl@universidadfalsa.com', 'KR', 'Chinchŏn', 'CN', 'Xixiang', 'ESC4'),
('2020-08-06 13:09:44', '04-8126900', 'Kin', 'Knowlson', 'kknowlsonjm', 'M', 'kknowlsonjm@universidadfalsa.com', 'PE', 'Sucre', 'SE', 'Karlstad', 'ESC1'),
('2020-10-25 16:39:46', '21-2061470', 'Katee', 'Kruszelnicki', 'kkruszelnickimv', 'F', 'kkruszelnickimv@universidadfalsa.com', 'PH', 'Anuling', 'UA', 'Apostolove', 'ESC6'),
('2021-02-28 07:14:41', '20-0250033', 'Korry', 'Leal', 'klealj5', 'F', 'klealj5@universidadfalsa.com', 'FI', 'Valtimo', 'CN', 'Huangzhu', 'ESC2'),
('2021-07-14 15:25:21', '95-8790791', 'Korey', 'Lemerie', 'klemerie72', 'M', 'klemerie72@universidadfalsa.com', 'CA', 'Cornwall', 'FI', 'Varkaus', 'ESC2'),
('2021-06-08 02:14:06', '94-0891113', 'Katina', 'Leonard', 'kleonardqt', 'F', 'kleonardqt@universidadfalsa.com', 'FR', 'Beaune', 'HN', 'Santiago Puringla', 'ESC3'),
('2021-09-06 01:00:35', '52-0514331', 'Karlotta', 'Marney', 'kmarneylr', 'F', 'kmarneylr@universidadfalsa.com', 'ZA', 'Glencoe', 'SE', 'Lindome', 'ESC7'),
('2021-04-03 19:04:40', '18-8339513', 'Kippy', 'Mayhow', 'kmayhow43', 'F', 'kmayhow43@universidadfalsa.com', 'HU', 'Budapest', 'VE', 'Quiriquire', 'ESC7'),
('2020-04-01 16:50:20', '40-7364052', 'Kai', 'McKie', 'kmckiebz', 'F', 'kmckiebz@universidadfalsa.com', 'ID', 'Sukamaju Kidul', 'CO', 'Molagavita', 'ESC7'),
('2020-06-06 17:36:29', '91-4551870', 'Katerine', 'Moulding', 'kmoulding6n', 'F', 'kmoulding6n@universidadfalsa.com', 'TK', 'Atafu Village', 'ID', 'Gerdu', 'ESC4'),
('2021-08-05 02:27:41', '89-0416451', 'Keary', 'Moysey', 'kmoysey6d', 'M', 'kmoysey6d@universidadfalsa.com', 'CN', 'Dandian', 'SO', 'Bandarbeyla', 'ESC2'),
('2020-04-19 21:03:41', '76-3021692', 'Kara', 'Norster', 'knorsternc', 'F', 'knorsternc@universidadfalsa.com', 'DK', 'Frederiksberg', 'PL', 'Chojna', 'ESC5'),
('2020-11-11 03:22:25', '38-0200518', 'Kissiah', 'Peeter', 'kpeeter94', 'F', 'kpeeter94@universidadfalsa.com', 'PH', 'Minuyan', 'ID', 'Petung', 'ESC6'),
('2021-04-25 09:45:56', '37-4742421', 'Kippy', 'Pllu', 'kpllu7v', 'M', 'kpllu7v@universidadfalsa.com', 'CN', 'Guohe', 'FR', 'Lyon', 'ESC5'),
('2020-04-20 06:47:29', '38-3380576', 'Kathryn', 'Posten', 'kpostenjj', 'F', 'kpostenjj@universidadfalsa.com', 'AM', 'Ejmiatsin', 'FI', 'Pargas', 'ESC3'),
('2021-06-13 22:11:40', '65-6495963', 'Kermit', 'Preon', 'kpreoni7', 'M', 'kpreoni7@universidadfalsa.com', 'FR', 'Marseille', 'ID', 'Lebak Timur', 'ESC4'),
('2020-03-20 16:43:19', '15-2716365', 'Keir', 'Quig', 'kquig13', 'M', 'kquig13@universidadfalsa.com', 'ID', 'Nangabere', 'AR', 'Elena', 'ESC3'),
('2020-08-19 10:28:13', '95-1851970', 'Kai', 'Redley', 'kredley15', 'F', 'kredley15@universidadfalsa.com', 'VN', 'Gò Dầu', 'PL', 'Słupsk', 'ESC1'),
('2020-10-15 04:14:06', '34-5046336', 'Keven', 'Rochford', 'krochford8k', 'M', 'krochford8k@universidadfalsa.com', 'VN', 'Giemdiem', 'GR', 'Pérama', 'ESC3'),
('2020-06-15 16:12:55', '68-8035351', 'Kaleb', 'Ruddock', 'kruddock4u', 'M', 'kruddock4u@universidadfalsa.com', 'PL', 'Zblewo', 'PH', 'Rajal Norte', 'ESC6'),
('2021-08-02 10:47:38', '63-4575555', 'Katinka', 'Scyner', 'kscynerjd', 'F', 'kscynerjd@universidadfalsa.com', 'PT', 'Tavira', 'CN', 'Liukou', 'ESC1'),
('2021-05-12 11:44:48', '58-7191190', 'Keslie', 'Seabon', 'kseabonid', 'F', 'kseabonid@universidadfalsa.com', 'CN', 'Xiangfu', 'CF', 'Ndélé', 'ESC5'),
('2020-07-19 00:44:22', '06-6673848', 'Karine', 'Signe', 'ksigne5x', 'F', 'ksigne5x@universidadfalsa.com', 'ID', 'Kali', 'CN', 'Dinggou', 'ESC4'),
('2021-01-26 06:03:07', '94-1690815', 'Karine', 'Skowcraft', 'kskowcraft8f', 'F', 'kskowcraft8f@universidadfalsa.com', 'SI', 'Ankaran', 'CN', 'Dadong', 'ESC1'),
('2021-07-02 11:14:12', '71-8114823', 'Krystle', 'Spoward', 'kspoward2s', 'F', 'kspoward2s@universidadfalsa.com', 'VN', 'Thị Trấn Nguyên Bình', 'US', 'Norfolk', 'ESC6'),
('2021-04-18 13:10:33', '82-3239274', 'Kermy', 'Stolz', 'kstolzjt', 'M', 'kstolzjt@universidadfalsa.com', 'PA', 'Jaqué', 'SN', 'Nguékhokh', 'ESC7'),
('2021-03-06 11:22:19', '16-2316007', 'Kellen', 'Truelock', 'ktruelockcj', 'M', 'ktruelockcj@universidadfalsa.com', 'MY', 'Kota Kinabalu', 'PH', 'Vito', 'ESC6'),
('2020-01-15 19:14:49', '03-5403876', 'Kylila', 'Venes', 'kvenes3z', 'F', 'kvenes3z@universidadfalsa.com', 'AR', 'Diamante', 'FR', 'Saint-Ouen', 'ESC7'),
('2020-01-09 02:52:53', '65-8971894', 'Kitty', 'Vigurs', 'kvigursi3', 'F', 'kvigursi3@universidadfalsa.com', 'KP', 'Nanam', 'BR', 'Sinop', 'ESC1'),
('2021-07-02 03:28:27', '12-4861264', 'Karon', 'Wandrey', 'kwandreyd3', 'F', 'kwandreyd3@universidadfalsa.com', 'UG', 'Kamuli', 'RU', 'Kovrov', 'ESC6'),
('2021-09-18 12:39:39', '70-5660476', 'Lisabeth', 'Aylmer', 'laylmer3i', 'F', 'laylmer3i@universidadfalsa.com', 'JP', 'Watari', 'CM', 'Belo', 'ESC4'),
('2020-12-12 08:57:16', '81-0279289', 'Lindon', 'Bane', 'lbanef4', 'M', 'lbanef4@universidadfalsa.com', 'PK', 'Pithoro', 'AM', 'Kasakh', 'ESC3'),
('2020-02-15 09:28:21', '32-3857559', 'Lily', 'Banke', 'lbankeog', 'F', 'lbankeog@universidadfalsa.com', 'ID', 'Siluman', 'DO', 'Río Limpio', 'ESC2'),
('2020-09-03 23:45:05', '32-2643474', 'Llewellyn', 'Beauvais', 'lbeauvaisr3', 'M', 'lbeauvaisr3@universidadfalsa.com', 'TH', 'Ban Ko Lan', 'CO', 'Girardot', 'ESC2'),
('2021-03-04 07:11:17', '12-2640438', 'Lek', 'Berndt', 'lberndt7l', 'M', 'lberndt7l@universidadfalsa.com', 'ID', 'Cicayur', 'CN', 'Leigu', 'ESC3'),
('2020-07-15 19:16:59', '83-7359157', 'Leroy', 'Birtley', 'lbirtleybb', 'M', 'lbirtleybb@universidadfalsa.com', 'CN', 'Kutao', 'CN', 'Xilin', 'ESC1'),
('2021-08-19 08:46:46', '29-4855603', 'Lynett', 'Blondin', 'lblondin1n', 'F', 'lblondin1n@universidadfalsa.com', 'GR', 'Mégara', 'PA', 'Tocumen', 'ESC7'),
('2020-04-29 10:37:46', '39-2482479', 'Lark', 'Broz', 'lbroz56', 'F', 'lbroz56@universidadfalsa.com', 'LK', 'Sigiriya', 'MG', 'Anjepy', 'ESC3'),
('2020-06-08 03:23:07', '64-8378164', 'Lynelle', 'Chalder', 'lchalder3g', 'F', 'lchalder3g@universidadfalsa.com', 'CO', 'Floresta', 'PE', 'Putina', 'ESC1'),
('2021-10-27 15:59:43', '88-0477315', 'Lauraine', 'Cocking', 'lcockingk4', 'F', 'lcockingk4@universidadfalsa.com', 'CN', 'Dayong', 'MY', 'Petaling Jaya', 'ESC2'),
('2021-05-09 03:21:07', '62-0816034', 'Lisbeth', 'Crocker', 'lcrocker98', 'F', 'lcrocker98@universidadfalsa.com', 'CN', 'Jiuguan', 'TM', 'Seydi', 'ESC2'),
('2020-12-11 23:12:54', '36-7448918', 'Lazar', 'Curphey', 'lcurpheyhq', 'M', 'lcurpheyhq@universidadfalsa.com', 'PH', 'Lurugan', 'CN', 'Taohua', 'ESC4'),
('2021-07-01 04:08:11', '74-5196024', 'Leora', 'Cutchey', 'lcutcheycn', 'F', 'lcutcheycn@universidadfalsa.com', 'JP', 'Atsugi', 'ID', 'Sukatani', 'ESC4'),
('2020-03-27 00:35:03', '03-7767423', 'Ludwig', 'Damrel', 'ldamreljq', 'M', 'ldamreljq@universidadfalsa.com', 'CN', 'Tangxian', 'RU', 'Kysyl-Syr', 'ESC4'),
('2021-06-20 07:21:24', '10-6703627', 'Lincoln', 'Dei', 'ldei31', 'M', 'ldei31@universidadfalsa.com', 'BA', 'Sokolac', 'CN', 'Changpo', 'ESC4'),
('2020-02-20 06:32:14', '97-5883673', 'Lewie', 'Ditter', 'lditter41', 'M', 'lditter41@universidadfalsa.com', 'UA', 'Pryyutivka', 'ID', 'Rapas', 'ESC7'),
('2020-03-07 06:18:09', '40-4315806', 'Lamont', 'Duffus', 'lduffus7b', 'M', 'lduffus7b@universidadfalsa.com', 'SE', 'Norrahammar', 'CN', 'Dazuo', 'ESC2'),
('2021-07-11 16:59:59', '56-9791501', 'Lorens', 'Dunridge', 'ldunridgeqp', 'M', 'ldunridgeqp@universidadfalsa.com', 'FI', 'Varkaus', 'PL', 'Małkinia Górna', 'ESC4'),
('2021-09-05 01:11:03', '74-0448464', 'Laurene', 'Flea', 'lflea1o', 'F', 'lflea1o@universidadfalsa.com', 'FR', 'Angers', 'CN', 'Honghuatao', 'ESC1'),
('2021-04-21 19:12:30', '82-4569511', 'Lothario', 'Fosserd', 'lfosserdge', 'M', 'lfosserdge@universidadfalsa.com', 'RU', 'Vetluzhskiy', 'CN', 'Wangcun', 'ESC1'),
('2020-11-17 09:51:47', '46-7947068', 'Leroi', 'Gilhoolie', 'lgilhoolielq', 'M', 'lgilhoolielq@universidadfalsa.com', 'JP', 'Obama', 'PH', 'Talangnan', 'ESC4'),
('2021-03-23 21:04:45', '93-3009287', 'Letty', 'Gilkes', 'lgilkesqa', 'F', 'lgilkesqa@universidadfalsa.com', 'ID', 'Karangduren Dua', 'CN', 'Jingdang', 'ESC2'),
('2020-03-14 05:41:12', '87-3213911', 'Lexy', 'Grimstead', 'lgrimstead8a', 'F', 'lgrimstead8a@universidadfalsa.com', 'PL', 'Trzebunia', 'CU', 'San Miguel del Padrón', 'ESC5'),
('2020-02-06 06:56:04', '81-4824292', 'Lawton', 'Harbach', 'lharbachc6', 'M', 'lharbachc6@universidadfalsa.com', 'CL', 'Freire', 'PL', 'Zawichost', 'ESC3'),
('2020-07-08 18:09:46', '38-4500900', 'Lance', 'Haysman', 'lhaysmanpz', 'M', 'lhaysmanpz@universidadfalsa.com', 'AR', 'Pontevedra', 'MX', 'Miguel Hidalgo', 'ESC3'),
('2020-05-07 21:05:06', '52-2958708', 'Loydie', 'Heinle', 'lheinlef3', 'M', 'lheinlef3@universidadfalsa.com', 'CN', 'Huanggang', 'PH', 'Dulangan', 'ESC5'),
('2020-01-05 00:14:39', '29-5142342', 'Liv', 'Hunnam', 'lhunnamr2', 'F', 'lhunnamr2@universidadfalsa.com', 'BR', 'Herval', 'CN', 'Xishaqiao', 'ESC5'),
('2021-07-02 23:43:51', '15-0201374', 'Leta', 'Inwood', 'linwoodb3', 'F', 'linwoodb3@universidadfalsa.com', 'ID', 'Cangkuang', 'GT', 'Esquipulas Palo Gordo', 'ESC5'),
('2021-02-01 09:30:27', '70-7127317', 'Lisbeth', 'Janouch', 'ljanouchls', 'F', 'ljanouchls@universidadfalsa.com', 'KP', 'Kyŏngsŏng', 'PL', 'Skomlin', 'ESC1'),
('2020-10-14 20:26:17', '61-1048935', 'Liam', 'Jelfs', 'ljelfsoi', 'M', 'ljelfsoi@universidadfalsa.com', 'CZ', 'Netolice', 'CN', 'Daping', 'ESC4'),
('2021-08-30 02:22:09', '20-8551106', 'Lauretta', 'Josef', 'ljosefdb', 'F', 'ljosefdb@universidadfalsa.com', 'PH', 'Parion', 'CO', 'Sahagún', 'ESC3'),
('2020-06-10 02:29:45', '13-3222264', 'Linette', 'Kohen', 'lkohenrc', 'F', 'lkohenrc@universidadfalsa.com', 'RU', 'Vyksa', 'UA', 'Matviyivka', 'ESC1'),
('2021-03-31 13:16:34', '03-7626541', 'Lars', 'Krauss', 'lkraussgr', 'M', 'lkraussgr@universidadfalsa.com', 'CA', 'Kamloops', 'KE', 'Londiani', 'ESC1'),
('2020-05-03 23:17:56', '88-8751778', 'Lynett', 'Lackner', 'llacknerg2', 'F', 'llacknerg2@universidadfalsa.com', 'US', 'Milwaukee', 'AZ', 'Yelenendorf', 'ESC4'),
('2021-11-17 02:50:20', '98-9374594', 'Leonhard', 'MacNamara', 'lmacnamara4h', 'M', 'lmacnamara4h@universidadfalsa.com', 'CN', 'Zhushan Chengguanzhen', 'PH', 'Iraray', 'ESC3'),
('2021-02-02 10:42:20', '25-8617662', 'Logan', 'McGilvary', 'lmcgilvary9e', 'M', 'lmcgilvary9e@universidadfalsa.com', 'PH', 'Dapdap', 'UA', 'Bryukhovychi', 'ESC2'),
('2020-02-25 16:22:02', '15-7844672', 'Laurence', 'McKenny', 'lmckenny6g', 'M', 'lmckenny6g@universidadfalsa.com', 'RS', 'Gadžin Han', 'RU', 'Il’ichëvo', 'ESC4'),
('2021-11-23 13:27:48', '58-7924952', 'Lindsay', 'McLagan', 'lmclagangi', 'M', 'lmclagangi@universidadfalsa.com', 'MA', 'Teroual', 'RU', 'Novodvinsk', 'ESC7'),
('2021-07-07 11:13:31', '36-9751260', 'Liliane', 'Montrose', 'lmontrose6y', 'F', 'lmontrose6y@universidadfalsa.com', 'ID', 'Sukamenak', 'CN', 'Heshi', 'ESC5'),
('2021-03-22 04:18:44', '93-4442745', 'Lind', 'Nabbs', 'lnabbsac', 'M', 'lnabbsac@universidadfalsa.com', 'BG', 'Ardino', 'ID', 'Pojok', 'ESC6'),
('2021-11-24 01:30:22', '03-6667536', 'Luis', 'Nund', 'lnundkm', 'M', 'lnundkm@universidadfalsa.com', 'TZ', 'Buseresere', 'CN', 'Rendian', 'ESC1'),
('2021-01-05 06:02:16', '96-6899273', 'Lewiss', 'Pacht', 'lpachtdu', 'M', 'lpachtdu@universidadfalsa.com', 'CN', 'Gaoyao', 'ID', 'Cibeureum', 'ESC2'),
('2021-10-13 08:53:03', '01-9322615', 'Leda', 'Perazzo', 'lperazzop6', 'F', 'lperazzop6@universidadfalsa.com', 'NG', 'Runka', 'ZA', 'Welkom', 'ESC2'),
('2020-01-02 03:34:04', '61-6323387', 'Lev', 'Piburn', 'lpiburnoq', 'M', 'lpiburnoq@universidadfalsa.com', 'TN', 'Medenine', 'CR', 'Paraíso', 'ESC3'),
('2021-09-21 15:16:48', '22-5632695', 'Lockwood', 'Plewes', 'lplewesaa', 'M', 'lplewesaa@universidadfalsa.com', 'FR', 'Mende', 'ID', 'Walenrang', 'ESC1'),
('2021-10-19 21:27:27', '14-7853091', 'Lilas', 'Ridpath', 'lridpath92', 'F', 'lridpath92@universidadfalsa.com', 'MZ', 'Mocímboa', 'BR', 'Ceará Mirim', 'ESC1'),
('2021-03-17 21:26:32', '92-2509862', 'Luise', 'Risbridger', 'lrisbridgernh', 'F', 'lrisbridgernh@universidadfalsa.com', 'PE', 'Mucllo', 'SN', 'Goléré', 'ESC5'),
('2020-12-12 08:05:59', '14-5774100', 'Les', 'Robertelli', 'lrobertelli46', 'M', 'lrobertelli46@universidadfalsa.com', 'CH', 'Zürich', 'CN', 'Qishui', 'ESC1'),
('2020-06-05 02:34:49', '90-3737171', 'Leesa', 'Sackey', 'lsackey5p', 'F', 'lsackey5p@universidadfalsa.com', 'CG', 'Sémbé', 'CN', 'Changbai', 'ESC5'),
('2020-03-25 05:14:15', '28-3991828', 'Leonanie', 'Sanney', 'lsanney9z', 'F', 'lsanney9z@universidadfalsa.com', 'BG', 'Opaka', 'CN', 'Hualong', 'ESC5'),
('2020-01-22 09:23:43', '58-1680318', 'Latrina', 'Shemmans', 'lshemmans79', 'F', 'lshemmans79@universidadfalsa.com', 'SE', 'Västerås', 'DK', 'København', 'ESC7'),
('2021-11-01 20:30:38', '79-2563798', 'Lazaro', 'Solomonides', 'lsolomonideskw', 'M', 'lsolomonideskw@universidadfalsa.com', 'RU', 'Shedok', 'PH', 'Wawa', 'ESC7'),
('2020-06-01 01:38:49', '86-1946803', 'Leola', 'Sorey', 'lsoreyit', 'F', 'lsoreyit@universidadfalsa.com', 'CN', 'Shiye', 'ID', 'Menampukrajan', 'ESC3'),
('2021-02-10 14:40:35', '84-9803750', 'Lavena', 'Stiger', 'lstigeraz', 'F', 'lstigeraz@universidadfalsa.com', 'ID', 'Karangbalong', 'RU', 'Marks', 'ESC3'),
('2021-03-28 18:27:50', '81-5084952', 'Luciana', 'Surman', 'lsurmanef', 'F', 'lsurmanef@universidadfalsa.com', 'JP', 'Okegawa', 'NG', 'Yanda Bayo', 'ESC3'),
('2021-02-25 00:57:34', '02-7483672', 'Lon', 'Treslove', 'ltreslove53', 'M', 'ltreslove53@universidadfalsa.com', 'KE', 'Londiani', 'DO', 'Santa Cruz de Barahona', 'ESC3'),
('2021-01-19 19:38:27', '57-2904556', 'Lilla', 'Trusler', 'ltrusler78', 'F', 'ltrusler78@universidadfalsa.com', 'ID', 'Klutuk', 'PH', 'Basista', 'ESC4'),
('2020-05-31 02:55:55', '85-5290491', 'Lucie', 'Vibert', 'lvibertq1', 'F', 'lvibertq1@universidadfalsa.com', 'US', 'Jamaica', 'PH', 'Kauswagan', 'ESC2'),
('2020-09-08 12:03:27', '00-8249539', 'Lindsey', 'Wyse', 'lwyseam', 'F', 'lwyseam@universidadfalsa.com', 'PH', 'Sula', 'AL', 'Shushicë', 'ESC1'),
('2021-01-01 08:00:00', '1088323733', 'MAURICIO', 'GONZALEZ ECHAVARRIA', 'mago', 'M', 'mago@universidadfalsa.com', 'COL', 'PEREIRA', 'COL', 'ARMENIA', 'ESC6'),
('2021-09-07 04:10:32', '61-5741241', 'Mitchell', 'Allison', 'mallisonm', 'M', 'mallisonm@universidadfalsa.com', 'TH', 'Sap Yai', 'US', 'Minneapolis', 'ESC7'),
('2020-04-18 04:13:47', '35-1682294', 'Myrtle', 'Amberg', 'mambergh0', 'F', 'mambergh0@universidadfalsa.com', 'CZ', 'Chlumec nad Cidlinou', 'ID', 'Kiukasen', 'ESC4'),
('2020-03-13 22:25:31', '98-1726683', 'Marita', 'Aslet', 'maslet9b', 'F', 'maslet9b@universidadfalsa.com', 'CY', 'Mesógi', 'CZ', 'Mirotice', 'ESC3'),
('2020-05-25 07:15:04', '35-5260121', 'Mata', 'Bailey', 'mbaileyou', 'M', 'mbaileyou@universidadfalsa.com', 'CN', 'Xingang', 'ID', 'Karangtengah Lor', 'ESC3'),
('2021-07-11 07:17:21', '65-0596619', 'Mina', 'Bartolomivis', 'mbartolomivis4f', 'F', 'mbartolomivis4f@universidadfalsa.com', 'CN', 'Hongdun', 'SE', 'Strömsund', 'ESC4'),
('2020-02-20 07:35:01', '17-2248217', 'Mychal', 'Batter', 'mbatter8n', 'M', 'mbatter8n@universidadfalsa.com', 'US', 'Los Angeles', 'PT', 'Ladoeiro', 'ESC4'),
('2020-03-17 04:22:53', '00-2504226', 'Morna', 'Bedin', 'mbedingx', 'F', 'mbedingx@universidadfalsa.com', 'CU', 'Corralillo', 'CN', 'Zongzhai', 'ESC4'),
('2021-04-07 06:03:55', '17-5576882', 'Minta', 'Beller', 'mbellercg', 'F', 'mbellercg@universidadfalsa.com', 'PT', 'Bodiosa a Velha', 'PL', 'Rymanów', 'ESC6'),
('2021-08-01 12:30:14', '81-0099368', 'My', 'Bows', 'mbowsr4', 'M', 'mbowsr4@universidadfalsa.com', 'PA', 'Chigoré', 'ID', 'Randuagung', 'ESC2'),
('2021-11-15 23:26:39', '48-4088867', 'Mahala', 'Brainsby', 'mbrainsby3q', 'F', 'mbrainsby3q@universidadfalsa.com', 'AR', 'San Pedro', 'SE', 'Falun', 'ESC1'),
('2020-08-14 04:36:36', '29-8831979', 'Mike', 'Bridgeman', 'mbridgemaniv', 'M', 'mbridgemaniv@universidadfalsa.com', 'GU', 'Chalan Pago-Ordot Village', 'ID', 'Cipari', 'ESC1');
INSERT INTO `uf_personas` (`FECHAREGISTRO`, `IDPERSONA`, `NOMBRES`, `APELLIDOS`, `NICKNAME`, `GENERO`, `EMAIL_LABORAL`, `ORIGEN_PAIS`, `ORIGEN_CIUDAD`, `RESIDE_PAIS`, `RESIDE_CIUDAD`, `ESCOLARIDAD`) VALUES
('2021-08-15 02:52:07', '99-6058513', 'Mata', 'Bromley', 'mbromleyi1', 'M', 'mbromleyi1@universidadfalsa.com', 'CN', 'Linshui', 'UA', 'Nova Odesa', 'ESC6'),
('2020-04-05 15:05:42', '16-8089172', 'Marchelle', 'Brownill', 'mbrownillbk', 'F', 'mbrownillbk@universidadfalsa.com', 'MN', 'Chonogol', 'ID', 'Tebanah', 'ESC7'),
('2020-12-26 20:46:14', '33-3320211', 'Mala', 'Broxap', 'mbroxap8h', 'F', 'mbroxap8h@universidadfalsa.com', 'CO', 'Luruaco', 'BR', 'Gandu', 'ESC6'),
('2020-08-12 20:15:25', '84-8907443', 'Malva', 'Bucham', 'mbuchamcz', 'F', 'mbuchamcz@universidadfalsa.com', 'BG', 'Suvorovo', 'CN', 'Xilong', 'ESC6'),
('2020-06-05 00:54:24', '20-6226161', 'Mavra', 'Camoletto', 'mcamoletto10', 'F', 'mcamoletto10@universidadfalsa.com', 'VN', 'Quận Bốn', 'PE', 'Jilili', 'ESC5'),
('2020-01-26 09:47:46', '80-0601220', 'Marshall', 'Carder', 'mcarderbl', 'M', 'mcarderbl@universidadfalsa.com', 'SR', 'Lelydorp', 'RU', 'Nizhniy Chir', 'ESC2'),
('2021-05-20 07:19:49', '20-1830815', 'Matty', 'Clayborn', 'mclayborned', 'F', 'mclayborned@universidadfalsa.com', 'US', 'Wilmington', 'PL', 'Wałcz', 'ESC7'),
('2021-10-27 21:44:54', '81-7954811', 'Modestine', 'Conyers', 'mconyersex', 'F', 'mconyersex@universidadfalsa.com', 'PT', 'Martinlongo', 'CN', 'Saga', 'ESC3'),
('2021-03-15 05:46:22', '55-9999190', 'Marcos', 'Craggs', 'mcraggsfz', 'M', 'mcraggsfz@universidadfalsa.com', 'PH', 'Naawan', 'FR', 'Amiens', 'ESC5'),
('2020-04-12 16:21:11', '35-5143914', 'Masha', 'Dalmon', 'mdalmon9f', 'F', 'mdalmon9f@universidadfalsa.com', 'PA', 'Río Sereno', 'RU', 'Yamkino', 'ESC6'),
('2021-04-01 16:14:05', '17-9708307', 'Mil', 'Danigel', 'mdanigel3b', 'F', 'mdanigel3b@universidadfalsa.com', 'TH', 'Kuchinarai', 'YT', 'Tsingoni', 'ESC7'),
('2021-07-29 16:55:36', '42-5630084', 'Morna', 'Dumbrill', 'mdumbrillom', 'F', 'mdumbrillom@universidadfalsa.com', 'BR', 'Conde', 'PL', 'Rzozów', 'ESC4'),
('2020-07-24 19:15:18', '36-6386554', 'Mallissa', 'Dunstall', 'mdunstalljl', 'F', 'mdunstalljl@universidadfalsa.com', 'RU', 'Engel’-Yurt', 'PH', 'Maagnas', 'ESC1'),
('2020-11-07 17:02:34', '43-7556369', 'Miriam', 'Easson', 'measson4x', 'F', 'measson4x@universidadfalsa.com', 'US', 'Trenton', 'PE', 'Curibaya', 'ESC6'),
('2021-01-22 02:09:53', '34-7131271', 'Megan', 'Ewart', 'mewartcl', 'F', 'mewartcl@universidadfalsa.com', 'GR', 'Marína', 'PL', 'Krzczonów', 'ESC6'),
('2020-06-01 21:24:21', '04-1386768', 'Man', 'Ewbank', 'mewbank8o', 'M', 'mewbank8o@universidadfalsa.com', 'CZ', 'Chropyně', 'AE', 'Khawr Fakkān', 'ESC5'),
('2020-05-20 23:51:04', '56-3908454', 'Maurine', 'Gabbatt', 'mgabbatt9t', 'F', 'mgabbatt9t@universidadfalsa.com', 'CN', 'Hayan Hudong', 'SE', 'Eskilstuna', 'ESC1'),
('2020-02-04 03:06:34', '71-1827003', 'Maryellen', 'Goghin', 'mgoghinhy', 'F', 'mgoghinhy@universidadfalsa.com', 'NG', 'Ikeja', 'PT', 'Duas Igrejas', 'ESC2'),
('2021-03-07 05:43:52', '13-7487413', 'Miriam', 'Gosland', 'mgosland33', 'F', 'mgosland33@universidadfalsa.com', 'PH', 'Naili', 'AM', 'Masis', 'ESC4'),
('2021-11-01 10:19:41', '19-5723432', 'Moria', 'Gwyneth', 'mgwynethj1', 'F', 'mgwynethj1@universidadfalsa.com', 'PH', 'Boñgalon', 'CN', 'Qianjia', 'ESC3'),
('2021-07-12 17:51:47', '74-3259930', 'Maryann', 'Haitlie', 'mhaitlieh4', 'F', 'mhaitlieh4@universidadfalsa.com', 'EE', 'Särevere', 'SE', 'Billdal', 'ESC2'),
('2021-01-07 11:06:38', '75-0297229', 'Meg', 'Hamper', 'mhamperan', 'F', 'mhamperan@universidadfalsa.com', 'NG', 'Kukawa', 'CN', 'Qinxi', 'ESC7'),
('2020-07-23 04:30:51', '81-0520599', 'Meryl', 'Harlin', 'mharlini4', 'M', 'mharlini4@universidadfalsa.com', 'AR', 'Ceres', 'CN', 'Shanhou', 'ESC7'),
('2020-10-01 14:04:42', '78-2297508', 'Mady', 'Heinrich', 'mheinrichao', 'F', 'mheinrichao@universidadfalsa.com', 'PT', 'Boavista', 'CN', 'Huantuo', 'ESC7'),
('2020-05-04 20:49:57', '39-8516166', 'Maggee', 'Hourican', 'mhouricanz', 'F', 'mhouricanz@universidadfalsa.com', 'PE', 'Antabamba', 'CN', 'Gongchang', 'ESC3'),
('2020-07-26 02:06:56', '75-3676163', 'Moira', 'Ilewicz', 'milewicz65', 'F', 'milewicz65@universidadfalsa.com', 'PH', 'Adela', 'BR', 'Coelho Neto', 'ESC6'),
('2020-05-04 03:57:09', '77-8548280', 'Morris', 'Ingerfield', 'mingerfield4c', 'M', 'mingerfield4c@universidadfalsa.com', 'GE', 'Bagdadi', 'CN', 'Fuxing', 'ESC4'),
('2020-05-24 22:56:45', '96-1009160', 'Muffin', 'Janew', 'mjanew4e', 'F', 'mjanew4e@universidadfalsa.com', 'CN', 'Dongjin', 'ID', 'Tebara', 'ESC6'),
('2020-02-23 04:50:09', '08-2102804', 'Magdalene', 'Joerning', 'mjoerningj4', 'F', 'mjoerningj4@universidadfalsa.com', 'BS', 'Arthur’s Town', 'BR', 'Pindamonhangaba', 'ESC6'),
('2021-02-15 05:28:34', '27-4138540', 'Matthus', 'Keme', 'mkemehl', 'M', 'mkemehl@universidadfalsa.com', 'FR', 'Paris 07', 'IT', 'Roma', 'ESC1'),
('2020-08-04 21:18:03', '98-5321696', 'Meaghan', 'Kirvell', 'mkirvellgh', 'F', 'mkirvellgh@universidadfalsa.com', 'PF', 'Otutara', 'ID', 'Sukosari', 'ESC2'),
('2021-01-06 22:58:53', '54-2179892', 'Michal', 'Kynan', 'mkynang7', 'M', 'mkynang7@universidadfalsa.com', 'AR', 'Italó', 'ID', 'Maumere', 'ESC2'),
('2020-12-06 16:33:25', '02-1001072', 'Meghan', 'MacRonald', 'mmacronaldca', 'F', 'mmacronaldca@universidadfalsa.com', 'PL', 'Zaniemyśl', 'US', 'Stockton', 'ESC1'),
('2021-04-06 13:05:00', '12-9823442', 'Mahmud', 'McAllester', 'mmcallester54', 'M', 'mmcallester54@universidadfalsa.com', 'ID', 'Sidamulya Satu', 'HN', 'El Tablón', 'ESC1'),
('2020-10-24 10:30:31', '55-8207262', 'Melisent', 'McCaighey', 'mmccaighey34', 'F', 'mmccaighey34@universidadfalsa.com', 'PH', 'Kulase', 'TM', 'Tejen', 'ESC7'),
('2020-03-07 00:46:28', '70-9450003', 'Manfred', 'McVicker', 'mmcvickernj', 'M', 'mmcvickernj@universidadfalsa.com', 'UA', 'Mizhhir’ya', 'PT', 'Ermida', 'ESC6'),
('2020-04-13 12:43:07', '17-2538591', 'Mead', 'Menary', 'mmenary1l', 'M', 'mmenary1l@universidadfalsa.com', 'JP', 'Kajiki', 'AR', 'Necochea', 'ESC3'),
('2021-08-26 00:01:03', '63-3044991', 'Marylin', 'Mitrovic', 'mmitrovicbg', 'F', 'mmitrovicbg@universidadfalsa.com', 'CN', 'Fangyan', 'AR', 'Coronel Belisle', 'ESC7'),
('2021-03-01 05:06:51', '13-1601160', 'Marshall', 'Mulqueen', 'mmulqueen9j', 'M', 'mmulqueen9j@universidadfalsa.com', 'RU', 'Prokop’yevsk', 'MX', 'Las Palmas', 'ESC4'),
('2020-04-16 17:59:38', '13-9106096', 'Melvin', 'Narramor', 'mnarramorgl', 'M', 'mnarramorgl@universidadfalsa.com', 'CN', 'Yingchengzi', 'PK', 'Ghauspur', 'ESC4'),
('2020-01-13 02:18:57', '79-9121618', 'Merwin', 'Oldcote', 'moldcote5d', 'M', 'moldcote5d@universidadfalsa.com', 'PL', 'Zagórze', 'KG', 'Kara Suu', 'ESC2'),
('2020-08-13 00:29:05', '08-6025278', 'Michale', 'Ollis', 'mollis5k', 'M', 'mollis5k@universidadfalsa.com', 'ID', 'Sangojar', 'RU', 'Uk', 'ESC3'),
('2020-05-01 10:41:43', '01-8163057', 'Melicent', 'Overbury', 'moverburyg4', 'F', 'moverburyg4@universidadfalsa.com', 'PL', 'Świnna', 'CN', 'Wuling', 'ESC6'),
('2020-02-09 05:27:15', '57-1833586', 'Mallory', 'Rockell', 'mrockell7g', 'M', 'mrockell7g@universidadfalsa.com', 'PT', 'Arranhó', 'NA', 'Ongandjera', 'ESC1'),
('2021-08-05 00:31:33', '43-9225092', 'Moishe', 'Sambell', 'msambellgn', 'M', 'msambellgn@universidadfalsa.com', 'CA', 'Prince Albert', 'ID', 'Ebak', 'ESC6'),
('2020-10-27 06:56:31', '01-4552451', 'Mavra', 'Sammon', 'msammonii', 'F', 'msammonii@universidadfalsa.com', 'ID', 'Borehbangle', 'FR', 'Toul', 'ESC7'),
('2020-12-23 19:19:16', '68-6404733', 'Maureene', 'Sedgemore', 'msedgemore5u', 'F', 'msedgemore5u@universidadfalsa.com', 'IR', 'Sarāvān', 'CN', 'Huai’an', 'ESC1'),
('2020-10-24 18:12:52', '97-8538186', 'Meridel', 'Shelly', 'mshelly35', 'F', 'mshelly35@universidadfalsa.com', 'PH', 'Paiisa', 'PH', 'Aurora', 'ESC6'),
('2020-09-09 08:23:53', '51-0120825', 'Minnie', 'Shrive', 'mshrive51', 'F', 'mshrive51@universidadfalsa.com', 'CN', 'Xugu', 'CN', 'Nierumai', 'ESC4'),
('2020-05-07 03:43:58', '58-0358898', 'Merry', 'Shrive', 'mshriveln', 'M', 'mshriveln@universidadfalsa.com', 'PF', 'Arue', 'CN', 'Yushang', 'ESC1'),
('2020-03-17 22:47:40', '89-4595224', 'Marcie', 'Sopper', 'msopperf', 'F', 'msopperf@universidadfalsa.com', 'CO', 'Arboleda', 'ID', 'Astanajapura', 'ESC3'),
('2020-10-26 06:53:23', '63-5057307', 'Mordecai', 'Sottell', 'msottellrb', 'M', 'msottellrb@universidadfalsa.com', 'PH', 'Tandag', 'NE', 'Matamey', 'ESC6'),
('2020-01-05 11:30:42', '89-0856214', 'Mervin', 'Stammers', 'mstammersj0', 'M', 'mstammersj0@universidadfalsa.com', 'ID', 'Ketapang', 'PL', 'Błaszki', 'ESC5'),
('2021-07-03 21:20:38', '77-2586850', 'Marlon', 'Symper', 'msymperlx', 'M', 'msymperlx@universidadfalsa.com', 'PH', 'Jagupit', 'CO', 'Campoalegre', 'ESC6'),
('2021-04-09 17:30:11', '88-7584503', 'Maxi', 'Tooher', 'mtooherp8', 'F', 'mtooherp8@universidadfalsa.com', 'AR', 'Jesús María', 'PH', 'Kauswagan', 'ESC3'),
('2020-05-05 22:54:53', '87-5787273', 'Maryanna', 'Trethowan', 'mtrethowane4', 'F', 'mtrethowane4@universidadfalsa.com', 'BR', 'Ipojuca', 'CA', 'Mont-Joli', 'ESC1'),
('2020-05-21 18:04:49', '00-9783439', 'Mandy', 'Tutchings', 'mtutchingsox', 'F', 'mtutchingsox@universidadfalsa.com', 'CN', 'Yingjiang', 'PL', 'Złota', 'ESC1'),
('2020-09-10 07:11:49', '39-1033632', 'Max', 'Vedstra', 'mvedstra8s', 'M', 'mvedstra8s@universidadfalsa.com', 'CN', 'Qingyuan', 'CN', 'Linxihe', 'ESC6'),
('2020-10-18 00:38:23', '38-8521698', 'Melli', 'Wackett', 'mwackettlb', 'F', 'mwackettlb@universidadfalsa.com', 'CN', 'Bailu', 'CN', 'Dogarmo', 'ESC2'),
('2020-08-19 13:18:23', '10-1539745', 'Manya', 'Wormell', 'mwormell4t', 'F', 'mwormell4t@universidadfalsa.com', 'SE', 'Vårgårda', 'BR', 'Sinop', 'ESC5'),
('2021-03-28 16:48:09', '49-4660968', 'Mildred', 'Wort', 'mwortfd', 'F', 'mwortfd@universidadfalsa.com', 'CN', 'Tiantang', 'SI', 'Žalec', 'ESC5'),
('2021-02-28 23:21:39', '29-4204902', 'Nanice', 'Adelberg', 'nadelbergrq', 'F', 'nadelbergrq@universidadfalsa.com', 'TH', 'Lat Yao', 'MG', 'Ampanihy', 'ESC6'),
('2021-02-08 03:47:46', '76-9857972', 'Nancee', 'Avrahamian', 'navrahamianeq', 'F', 'navrahamianeq@universidadfalsa.com', 'CN', 'Xin’an', 'CN', 'Maoping', 'ESC3'),
('2020-07-26 23:41:46', '29-1313880', 'Netta', 'Bloor', 'nbloor38', 'F', 'nbloor38@universidadfalsa.com', 'CR', 'Pejibaye', 'YE', 'Manwakh', 'ESC4'),
('2021-11-04 12:04:42', '13-6242959', 'Noellyn', 'Bowbrick', 'nbowbrick6l', 'F', 'nbowbrick6l@universidadfalsa.com', 'CN', 'Xiaotao', 'RU', 'Fakel', 'ESC6'),
('2021-11-11 03:43:00', '51-7318491', 'Norton', 'Burgwyn', 'nburgwynp7', 'M', 'nburgwynp7@universidadfalsa.com', 'PL', 'Mała Wieś', 'ID', 'Bedayu', 'ESC2'),
('2021-01-06 04:25:52', '77-0118090', 'Nancee', 'Churches', 'nchurchesrr', 'F', 'nchurchesrr@universidadfalsa.com', 'ID', 'Banyutengah', 'ID', 'Andamui', 'ESC3'),
('2020-09-19 16:37:34', '31-5102744', 'Nicholas', 'Dalrymple', 'ndalrymple48', 'M', 'ndalrymple48@universidadfalsa.com', 'SE', 'Helsingborg', 'PL', 'Świnna', 'ESC3'),
('2020-07-18 00:20:15', '80-4439940', 'Nert', 'Deviney', 'ndevineyjw', 'F', 'ndevineyjw@universidadfalsa.com', 'XK', 'Klina', 'PS', 'Bil‘īn', 'ESC5'),
('2021-09-15 05:24:35', '29-6539726', 'Nariko', 'Egan', 'negan7r', 'F', 'negan7r@universidadfalsa.com', 'PH', 'Quipot', 'MT', 'Ħamrun', 'ESC7'),
('2021-02-13 17:01:49', '68-7491888', 'Norman', 'Faunt', 'nfauntf0', 'M', 'nfauntf0@universidadfalsa.com', 'MA', 'Tinghir', 'PH', 'Budta', 'ESC4'),
('2021-01-04 21:34:17', '61-2799359', 'Nikolaus', 'Fernley', 'nfernley2g', 'M', 'nfernley2g@universidadfalsa.com', 'TH', 'Santi Suk', 'JP', 'Yatsushiro', 'ESC7'),
('2020-04-06 15:45:20', '53-7245103', 'Norry', 'Goldwater', 'ngoldwatergb', 'M', 'ngoldwatergb@universidadfalsa.com', 'HN', 'San Agustín', 'CN', 'Mengjia', 'ESC4'),
('2021-09-11 01:35:40', '48-0377125', 'Natalie', 'Gounin', 'ngounin2w', 'F', 'ngounin2w@universidadfalsa.com', 'DE', 'Münster', 'ID', 'Bangbayang', 'ESC4'),
('2021-10-16 14:19:15', '21-3447012', 'Noak', 'Gwynn', 'ngwynnqn', 'M', 'ngwynnqn@universidadfalsa.com', 'LY', 'Zawiya', 'UA', 'Chornukhy', 'ESC6'),
('2021-06-22 12:09:46', '70-8983055', 'Nigel', 'Hayle', 'nhayle7p', 'M', 'nhayle7p@universidadfalsa.com', 'PH', 'Tudela', 'CA', 'Saint-Tite', 'ESC7'),
('2020-09-02 03:29:26', '52-1275324', 'Nickie', 'Hopkins', 'nhopkinsju', 'M', 'nhopkinsju@universidadfalsa.com', 'PH', 'Biga', 'NG', 'Mayo Belwa', 'ESC3'),
('2021-09-28 06:34:16', '77-1318558', 'Nero', 'Ivasyushkin', 'nivasyushkin73', 'M', 'nivasyushkin73@universidadfalsa.com', 'BG', 'Ruse', 'ZA', 'Diepsloot', 'ESC6'),
('2020-02-05 10:21:58', '24-6722298', 'Neysa', 'Kingsford', 'nkingsford64', 'F', 'nkingsford64@universidadfalsa.com', 'PL', 'Osiek', 'AL', 'Finiq', 'ESC5'),
('2020-02-08 15:55:42', '31-1292767', 'Noe', 'MacGillespie', 'nmacgillespieo7', 'M', 'nmacgillespieo7@universidadfalsa.com', 'FR', 'Le Mans', 'AU', 'Sydney', 'ESC2'),
('2020-11-08 23:38:26', '73-6814559', 'Norman', 'Muffitt', 'nmuffitt7e', 'M', 'nmuffitt7e@universidadfalsa.com', 'SV', 'Zaragoza', 'GE', 'Gulrip’shi', 'ESC5'),
('2021-06-03 17:40:12', '92-7261125', 'Nahum', 'Orkney', 'norkneyas', 'M', 'norkneyas@universidadfalsa.com', 'CN', 'Heba', 'KZ', 'Taldykorgan', 'ESC3'),
('2020-12-16 03:15:53', '47-7854502', 'Nevins', 'Rampton', 'nramptondx', 'M', 'nramptondx@universidadfalsa.com', 'FI', 'Ylihärmä', 'CN', 'Hangou', 'ESC4'),
('2020-05-08 21:52:56', '63-9878406', 'Nicholas', 'Ratlee', 'nratlee3u', 'M', 'nratlee3u@universidadfalsa.com', 'RU', 'Novyy Karachay', 'RU', 'Imeni Zhelyabova', 'ESC6'),
('2020-10-17 18:10:21', '07-2671575', 'Nola', 'Sadd', 'nsadd4d', 'F', 'nsadd4d@universidadfalsa.com', 'CN', 'Tieshan', 'PE', 'Oxapampa', 'ESC6'),
('2021-05-07 20:09:45', '93-7745930', 'Noel', 'Scimone', 'nscimonen3', 'M', 'nscimonen3@universidadfalsa.com', 'PL', 'Bierawa', 'FI', 'Ranua', 'ESC5'),
('2020-11-12 13:50:30', '00-8748792', 'Nye', 'Shawl', 'nshawl14', 'M', 'nshawl14@universidadfalsa.com', 'PT', 'Estreito Câmara de Lobos', 'CN', 'Lizi', 'ESC5'),
('2021-05-29 23:50:11', '89-6972996', 'Norean', 'Sisselot', 'nsisselote0', 'F', 'nsisselote0@universidadfalsa.com', 'ID', 'Terbangan', 'MK', 'Ilinden', 'ESC2'),
('2021-11-05 07:52:14', '16-5736718', 'Nil', 'Swanston', 'nswanstonn', 'M', 'nswanstonn@universidadfalsa.com', 'PL', 'Kuczbork-Osada', 'CN', 'Xinhe', 'ESC6'),
('2020-08-03 07:45:42', '53-2751204', 'Othella', 'Bracco', 'obraccokg', 'F', 'obraccokg@universidadfalsa.com', 'TH', 'Phra Phrom', 'AL', 'Burrel', 'ESC7'),
('2021-01-03 14:40:14', '75-7565590', 'Otes', 'Cinavas', 'ocinavasn4', 'M', 'ocinavasn4@universidadfalsa.com', 'NG', 'Port Harcourt', 'CN', 'Daying', 'ESC2'),
('2020-03-17 07:36:54', '83-5692147', 'Ole', 'Drewes', 'odrewesnn', 'M', 'odrewesnn@universidadfalsa.com', 'ID', 'Tebluru', 'CO', 'Heliconia', 'ESC5'),
('2020-06-12 06:06:04', '71-5824307', 'Othello', 'Ertel', 'oertelj9', 'M', 'oertelj9@universidadfalsa.com', 'ID', 'Mekarsari', 'TZ', 'Ruangwa', 'ESC1'),
('2020-02-29 04:41:04', '14-4755982', 'Odelle', 'Faloon', 'ofaloonhi', 'F', 'ofaloonhi@universidadfalsa.com', 'AR', 'Hualfín', 'MG', 'Toliara', 'ESC3'),
('2021-11-14 00:30:55', '88-8837292', 'Olivie', 'Feaveryear', 'ofeaveryear7y', 'F', 'ofeaveryear7y@universidadfalsa.com', 'PE', 'Nueva Cajamarca', 'CN', 'Tiegai', 'ESC2'),
('2021-07-28 17:00:24', '74-3886403', 'Orelie', 'Findlater', 'ofindlaterr', 'F', 'ofindlaterr@universidadfalsa.com', 'PH', 'Batan', 'SE', 'Norsborg', 'ESC3'),
('2021-02-12 10:09:54', '52-5993876', 'Obidiah', 'Fontell', 'ofontellhh', 'M', 'ofontellhh@universidadfalsa.com', 'CN', 'Niaohe', 'PL', 'Plewiska', 'ESC2'),
('2021-10-11 22:32:11', '97-6553105', 'Obadias', 'Ikins', 'oikinsi9', 'M', 'oikinsi9@universidadfalsa.com', 'CN', 'Jinshan', 'CN', 'Ludishan', 'ESC2'),
('2020-05-11 11:22:02', '01-9530652', 'Ora', 'Leisman', 'oleisman49', 'F', 'oleisman49@universidadfalsa.com', 'PL', 'Świętochłowice', 'IL', 'Kafr Kannā', 'ESC1'),
('2021-01-18 00:04:05', '06-8024160', 'Oneida', 'Rodd', 'oroddl6', 'F', 'oroddl6@universidadfalsa.com', 'CN', 'Shifang', 'CN', 'Jiangnan', 'ESC7'),
('2021-11-02 08:03:25', '44-4423491', 'Ozzy', 'Slegg', 'osleggo8', 'M', 'osleggo8@universidadfalsa.com', 'SI', 'Turnišče', 'CN', 'Tieling', 'ESC1'),
('2021-05-04 06:08:00', '23-2808700', 'Ondrea', 'Stowell', 'ostowellhv', 'F', 'ostowellhv@universidadfalsa.com', 'BA', 'Stupari', 'LY', 'Al Abyār', 'ESC6'),
('2020-11-05 20:03:44', '36-7148467', 'Orren', 'Whitticks', 'owhitticks57', 'M', 'owhitticks57@universidadfalsa.com', 'US', 'Akron', 'TH', 'Chon Daen', 'ESC1'),
('2021-10-10 02:52:24', '62-8846743', 'Pate', 'Boydle', 'pboydle9s', 'M', 'pboydle9s@universidadfalsa.com', 'CN', 'Haoxue', 'RU', 'Maslovka', 'ESC3'),
('2020-07-04 04:03:36', '22-2860978', 'Peri', 'California', 'pcaliforniam7', 'F', 'pcaliforniam7@universidadfalsa.com', 'CN', 'Qingshui', 'ZA', 'Aliwal North', 'ESC2'),
('2020-12-25 05:51:40', '78-0724236', 'Porty', 'Callis', 'pcallisjk', 'M', 'pcallisjk@universidadfalsa.com', 'CN', 'Qianzhou', 'SI', 'Lavrica', 'ESC3'),
('2020-11-02 15:28:54', '92-0713458', 'Pattie', 'Cluelow', 'pcluelow1i', 'M', 'pcluelow1i@universidadfalsa.com', 'PL', 'Wisznice', 'RU', 'Shikhany', 'ESC3'),
('2020-03-12 15:07:50', '18-6156189', 'Pietra', 'Collister', 'pcollisterdv', 'F', 'pcollisterdv@universidadfalsa.com', 'ID', 'Jalupang Dua', 'US', 'San Diego', 'ESC6'),
('2021-07-26 20:17:55', '20-5511082', 'Petronella', 'Cowsby', 'pcowsbyck', 'F', 'pcowsbyck@universidadfalsa.com', 'RU', 'Klyuchevskiy', 'ZA', 'Claremont', 'ESC2'),
('2020-01-07 19:42:05', '81-9723629', 'Pepito', 'Decker', 'pdecker93', 'M', 'pdecker93@universidadfalsa.com', 'SI', 'Log pri Brezovici', 'TH', 'Tha Bo', 'ESC1'),
('2021-02-25 15:02:10', '27-3049741', 'Peggi', 'Du Hamel', 'pduhamelfk', 'F', 'pduhamelfk@universidadfalsa.com', 'CN', 'Huarong', 'NZ', 'Bluff', 'ESC6'),
('2021-02-24 19:17:01', '76-3788326', 'Perren', 'Dyne', 'pdyne5m', 'M', 'pdyne5m@universidadfalsa.com', 'CN', 'Jiangjiazui', 'LY', 'Zawiya', 'ESC4'),
('2021-04-13 01:20:33', '16-2116256', 'Pamella', 'Hadlee', 'phadleep9', 'F', 'phadleep9@universidadfalsa.com', 'ID', 'Cipicung', 'CN', 'Chujiang', 'ESC3'),
('2021-10-20 07:09:39', '99-5364455', 'Phoebe', 'Hagley', 'phagleyrj', 'F', 'phagleyrj@universidadfalsa.com', 'RU', 'Priupskiy', 'CN', 'Yuquan', 'ESC4'),
('2020-01-24 06:23:31', '38-5776345', 'Perceval', 'Hiley', 'philey9', 'M', 'philey9@universidadfalsa.com', 'PL', 'Wasilków', 'FR', 'Bobigny', 'ESC6'),
('2020-06-01 16:38:58', '27-4471517', 'Percy', 'Lambole', 'plambole1f', 'M', 'plambole1f@universidadfalsa.com', 'SA', 'Julayjilah', 'CN', 'Dadong', 'ESC6'),
('2021-06-21 10:11:38', '42-1877973', 'Prudence', 'Latek', 'platek3w', 'F', 'platek3w@universidadfalsa.com', 'FR', 'Vanves', 'CN', 'Yangjiafang', 'ESC1'),
('2021-11-10 13:09:04', '95-1092251', 'Petronilla', 'Mangenet', 'pmangenet3l', 'F', 'pmangenet3l@universidadfalsa.com', 'LV', 'Mērsrags', 'SE', 'Trollhättan', 'ESC4'),
('2020-09-21 21:55:15', '15-5678676', 'Padgett', 'Marvin', 'pmarvin3e', 'M', 'pmarvin3e@universidadfalsa.com', 'PT', 'Cachada', 'CN', 'Danzao', 'ESC4'),
('2020-03-05 10:21:17', '12-9564051', 'Pedro', 'Murrigans', 'pmurrigans42', 'M', 'pmurrigans42@universidadfalsa.com', 'CZ', 'Mistřice', 'SE', 'Lidingö', 'ESC5'),
('2020-01-27 03:38:22', '38-1152571', 'Padraig', 'Petherick', 'ppetherick17', 'M', 'ppetherick17@universidadfalsa.com', 'CN', 'Xingtan', 'ZW', 'Centenary', 'ESC1'),
('2020-07-25 15:16:39', '07-9834769', 'Pace', 'Quaintance', 'pquaintancel9', 'M', 'pquaintancel9@universidadfalsa.com', 'ID', 'Semambung', 'EG', 'Qinā', 'ESC2'),
('2021-10-03 06:21:13', '58-4834181', 'Pembroke', 'Redpath', 'predpathix', 'M', 'predpathix@universidadfalsa.com', 'ID', 'Krajan Karanganyar', 'ZA', 'Somerset East', 'ESC1'),
('2020-11-12 06:08:02', '62-0028620', 'Pier', 'Suttaby', 'psuttaby4n', 'F', 'psuttaby4n@universidadfalsa.com', 'CF', 'Berbérati', 'CN', 'Nansan', 'ESC5'),
('2021-07-04 07:48:05', '97-1208845', 'Patsy', 'Treherne', 'ptreherne3d', 'M', 'ptreherne3d@universidadfalsa.com', 'RS', 'Novi Beograd', 'FI', 'Västanfjärd', 'ESC2'),
('2020-01-22 14:07:16', '53-0477390', 'Pooh', 'Trengrove', 'ptrengrove5q', 'F', 'ptrengrove5q@universidadfalsa.com', 'ID', 'Cisalak', 'US', 'Boulder', 'ESC6'),
('2021-08-06 16:24:04', '16-5833703', 'Patton', 'Wapplington', 'pwapplingtonmx', 'M', 'pwapplingtonmx@universidadfalsa.com', 'CN', 'Shuanghe', 'MY', 'Kota Bharu', 'ESC3'),
('2021-02-08 23:47:20', '98-5715271', 'Pattie', 'Whitton', 'pwhitton6q', 'F', 'pwhitton6q@universidadfalsa.com', 'CZ', 'Psáry', 'CA', 'Lumsden', 'ESC5'),
('2020-06-12 15:42:40', '62-0733643', 'Pearce', 'Winship', 'pwinshipht', 'M', 'pwinshipht@universidadfalsa.com', 'CN', 'Youyang', 'ID', 'Oebaki', 'ESC6'),
('2021-04-27 03:30:35', '64-6773731', 'Paten', 'Zuanelli', 'pzuanelli9m', 'M', 'pzuanelli9m@universidadfalsa.com', 'BO', 'Sotomayor', 'FR', 'Mont-de-Marsan', 'ESC2'),
('2021-11-10 00:31:54', '41-8860502', 'Quill', 'Chomicz', 'qchomiczq3', 'M', 'qchomiczq3@universidadfalsa.com', 'PE', 'San Pablo', 'SE', 'Tyresö', 'ESC3'),
('2021-05-02 14:15:17', '97-8851618', 'Quill', 'Cogdell', 'qcogdellhb', 'M', 'qcogdellhb@universidadfalsa.com', 'YE', 'Al Bilād', 'PT', 'Santa Cruz', 'ESC4'),
('2020-10-21 07:43:59', '65-3712199', 'Quillan', 'Morrison', 'qmorrisonho', 'M', 'qmorrisonho@universidadfalsa.com', 'JP', 'Jōetsu', 'CO', 'Algarrobo', 'ESC4'),
('2020-07-19 14:04:58', '26-9676646', 'Raff', 'Amorts', 'ramorts6p', 'M', 'ramorts6p@universidadfalsa.com', 'UA', 'Sivers’k', 'NG', 'Keffi', 'ESC5'),
('2020-11-15 20:07:28', '02-0313429', 'Redford', 'Bannester', 'rbannesteray', 'M', 'rbannesteray@universidadfalsa.com', 'PH', 'Santol', 'CM', 'Dizangué', 'ESC5'),
('2021-09-21 00:04:03', '57-4474840', 'Randy', 'Bartul', 'rbartul2y', 'M', 'rbartul2y@universidadfalsa.com', 'FR', 'Houilles', 'PT', 'Areeiro', 'ESC3'),
('2020-06-28 14:36:38', '20-0913954', 'Royall', 'Bettenson', 'rbettenson77', 'M', 'rbettenson77@universidadfalsa.com', 'DO', 'San Cristóbal', 'PH', 'Estefania', 'ESC3'),
('2021-05-23 06:23:10', '99-4522188', 'Roldan', 'Bexley', 'rbexleyhk', 'M', 'rbexleyhk@universidadfalsa.com', 'ZA', 'Knysna', 'CO', 'Líbano', 'ESC3'),
('2021-09-24 17:13:25', '76-4114057', 'Roxie', 'Billiard', 'rbilliardno', 'F', 'rbilliardno@universidadfalsa.com', 'ID', 'Glugur Krajan', 'PT', 'Silveiros', 'ESC2'),
('2021-10-22 05:53:08', '99-1745137', 'Riva', 'Botcherby', 'rbotcherbyl8', 'F', 'rbotcherbyl8@universidadfalsa.com', 'PL', 'Koźmin Wielkopolski', 'TH', 'Ban Chalong', 'ESC4'),
('2020-09-10 12:29:25', '77-9763411', 'Rodrigo', 'Bourgeois', 'rbourgeoisnk', 'M', 'rbourgeoisnk@universidadfalsa.com', 'ID', 'Suwatu', 'PH', 'Bungabon', 'ESC6'),
('2020-04-28 05:11:18', '87-6757132', 'Remington', 'Boynton', 'rboynton5l', 'M', 'rboynton5l@universidadfalsa.com', 'ID', 'Cungkal', 'PT', 'Jardia', 'ESC1'),
('2020-03-01 14:36:37', '27-3265704', 'Rafaellle', 'Caple', 'rcaplebt', 'M', 'rcaplebt@universidadfalsa.com', 'CN', 'Xinhua', 'PT', 'Gafanha da Encarnação', 'ESC7'),
('2021-03-10 08:19:18', '84-9098930', 'Rozanna', 'Conochie', 'rconochie8e', 'F', 'rconochie8e@universidadfalsa.com', 'JP', 'Kawage', 'PT', 'Pedro Miguel', 'ESC1'),
('2020-11-30 20:45:16', '10-2484916', 'Romona', 'Cosbey', 'rcosbeyes', 'F', 'rcosbeyes@universidadfalsa.com', 'CN', 'Yong’an', 'ID', 'Wanareja', 'ESC4'),
('2021-05-17 00:41:01', '71-0726722', 'Rayner', 'Dawid', 'rdawid7i', 'M', 'rdawid7i@universidadfalsa.com', 'CN', 'Xibing', 'UA', 'Verenchanka', 'ESC5'),
('2021-06-18 03:07:32', '61-0712384', 'Reyna', 'Dudman', 'rdudman3p', 'F', 'rdudman3p@universidadfalsa.com', 'CN', 'Pantian', 'CN', 'Wolong', 'ESC1'),
('2020-07-19 19:26:53', '22-8877082', 'Ruperta', 'Eastes', 'reastesfp', 'F', 'reastesfp@universidadfalsa.com', 'TR', 'Yeniköy', 'XK', 'Strellc i Ulët', 'ESC4'),
('2020-11-13 16:02:28', '57-4566528', 'Rae', 'Fosten', 'rfosten7u', 'F', 'rfosten7u@universidadfalsa.com', 'PY', 'Colonia Yguazú', 'FR', 'Toulouse', 'ESC4'),
('2020-12-13 04:39:08', '24-5383667', 'Rogers', 'Frazier', 'rfrazierll', 'M', 'rfrazierll@universidadfalsa.com', 'SE', 'Västerås', 'ID', 'Banturkrajan', 'ESC6'),
('2020-08-25 19:36:30', '76-8961591', 'Roz', 'Giacobbo', 'rgiacobbof6', 'F', 'rgiacobbof6@universidadfalsa.com', 'ET', 'Asaita', 'CN', 'Mashi', 'ESC1'),
('2021-09-30 16:37:29', '80-1484536', 'Ray', 'Godspeede', 'rgodspeede40', 'F', 'rgodspeede40@universidadfalsa.com', 'CN', 'Guandu', 'RU', 'Sarmanovo', 'ESC5'),
('2021-01-13 07:46:12', '69-7132955', 'Rafaelia', 'Hirsthouse', 'rhirsthouse4l', 'F', 'rhirsthouse4l@universidadfalsa.com', 'IQ', 'Hīt', 'HR', 'Ferdinandovac', 'ESC3'),
('2020-05-24 07:05:23', '57-8052024', 'Riobard', 'Hunn', 'rhunnei', 'M', 'rhunnei@universidadfalsa.com', 'ID', 'Kolbano', 'PL', 'Budzów', 'ESC4'),
('2020-06-04 15:54:41', '01-2333418', 'Renelle', 'Jedras', 'rjedras7x', 'F', 'rjedras7x@universidadfalsa.com', 'PH', 'Calauag', 'PH', 'Calinaoan Malasin', 'ESC7'),
('2020-12-11 19:42:43', '83-2239988', 'Roseanne', 'Jesper', 'rjespercb', 'F', 'rjespercb@universidadfalsa.com', 'ID', 'Rengat', 'HR', 'Tužno', 'ESC3'),
('2020-09-17 13:44:16', '57-1753768', 'Richmound', 'Jiroutek', 'rjiroutekco', 'M', 'rjiroutekco@universidadfalsa.com', 'HT', 'Dessalines', 'ID', 'Sungaikakap', 'ESC4'),
('2021-03-09 11:57:42', '81-7299347', 'Ross', 'Kensington', 'rkensingtondp', 'M', 'rkensingtondp@universidadfalsa.com', 'PL', 'Sępólno Krajeńskie', 'KZ', 'Zhangatas', 'ESC4'),
('2020-11-09 20:28:15', '71-3103531', 'Ron', 'Kirimaa', 'rkirimaa7h', 'M', 'rkirimaa7h@universidadfalsa.com', 'ID', 'Airmadidi', 'ET', 'Gorē', 'ESC6'),
('2021-04-08 09:24:02', '75-6563504', 'Rolland', 'Klimpke', 'rklimpke6k', 'M', 'rklimpke6k@universidadfalsa.com', 'ID', 'Timbrangan', 'PK', 'Fort Abbās', 'ESC4'),
('2020-04-22 19:45:48', '48-7178482', 'Rosy', 'Lessmare', 'rlessmare5w', 'F', 'rlessmare5w@universidadfalsa.com', 'PE', 'Ramón Castilla', 'FR', 'Boé', 'ESC7'),
('2020-04-11 23:17:37', '77-6509154', 'Raimund', 'Levett', 'rlevettnd', 'M', 'rlevettnd@universidadfalsa.com', 'BR', 'Ceres', 'US', 'Richmond', 'ESC2'),
('2021-04-10 03:42:42', '11-5768265', 'Rosco', 'Livingstone', 'rlivingstonen8', 'M', 'rlivingstonen8@universidadfalsa.com', 'MQ', 'Fort-de-France', 'PL', 'Orzesze', 'ESC1'),
('2020-11-04 16:14:17', '88-6144899', 'Roslyn', 'Lutz', 'rlutzis', 'F', 'rlutzis@universidadfalsa.com', 'ID', 'Rancaerang', 'RU', 'Sasovo', 'ESC6'),
('2021-02-12 07:45:44', '16-1357701', 'Ryan', 'MacCartair', 'rmaccartairfn', 'M', 'rmaccartairfn@universidadfalsa.com', 'JP', 'Toyohashi', 'VN', 'Khánh Hải', 'ESC4'),
('2020-07-03 20:49:25', '53-4744945', 'Rutter', 'MacQueen', 'rmacqueeno6', 'M', 'rmacqueeno6@universidadfalsa.com', 'GR', 'Methóni', 'RU', 'Krasnoye', 'ESC6'),
('2020-10-14 04:39:28', '06-5733817', 'Robert', 'Mansfield', 'rmansfieldiy', 'M', 'rmansfieldiy@universidadfalsa.com', 'SE', 'Saltsjöbaden', 'GR', 'Genisséa', 'ESC7'),
('2020-11-17 17:58:14', '52-3900841', 'Rudolph', 'Mattersey', 'rmattersey90', 'M', 'rmattersey90@universidadfalsa.com', 'CN', 'Xuanhua', 'AZ', 'Heydərabad', 'ESC3'),
('2021-07-10 13:35:18', '87-8844207', 'Rooney', 'Meach', 'rmeachma', 'M', 'rmeachma@universidadfalsa.com', 'CN', 'Wuping', 'CN', 'Songjiang', 'ESC2'),
('2020-02-21 00:44:36', '68-4471198', 'Reeta', 'Millwater', 'rmillwaterad', 'F', 'rmillwaterad@universidadfalsa.com', 'AL', 'Bradashesh', 'PE', 'Ticllos', 'ESC6'),
('2020-05-08 05:50:08', '95-7356970', 'Raphael', 'Milroy', 'rmilroyi', 'M', 'rmilroyi@universidadfalsa.com', 'NI', 'San José de los Remates', 'ID', 'Muara', 'ESC6'),
('2021-03-10 06:48:33', '10-9508085', 'Ricky', 'Muzzullo', 'rmuzzulloq0', 'F', 'rmuzzulloq0@universidadfalsa.com', 'UA', 'Luhansk', 'CR', 'Belén', 'ESC5'),
('2021-10-22 01:42:11', '05-8568013', 'Reamonn', 'OCorrigane', 'rocorriganem6', 'M', 'rocorriganem6@universidadfalsa.com', 'KE', 'Kajiado', 'PL', 'Pyzdry', 'ESC4'),
('2021-03-10 09:42:56', '83-2521663', 'Reynold', 'Petroff', 'rpetroffpq', 'M', 'rpetroffpq@universidadfalsa.com', 'ZA', 'Botshabelo', 'ID', 'Terara', 'ESC1'),
('2021-02-03 00:47:23', '58-7384783', 'Roi', 'Petyakov', 'rpetyakovku', 'M', 'rpetyakovku@universidadfalsa.com', 'SE', 'Storuman', 'KG', 'Karakol', 'ESC3'),
('2021-01-24 14:54:37', '16-4861531', 'Rourke', 'Philipps', 'rphilipps47', 'M', 'rphilipps47@universidadfalsa.com', 'AR', 'Trelew', 'CZ', 'Vrbovec', 'ESC1'),
('2021-05-17 14:25:34', '65-3661507', 'Rubin', 'Provest', 'rprovestj2', 'M', 'rprovestj2@universidadfalsa.com', 'CN', 'Hekou', 'AM', 'Masis', 'ESC2'),
('2021-07-30 15:37:10', '72-4615738', 'Rennie', 'Regler', 'rreglereo', 'F', 'rreglereo@universidadfalsa.com', 'BR', 'Itajuípe', 'US', 'Bellevue', 'ESC1'),
('2021-04-30 04:09:25', '43-8689463', 'Rene', 'Riddlesden', 'rriddlesdenks', 'F', 'rriddlesdenks@universidadfalsa.com', 'EH', 'Smara', 'PL', 'Psary', 'ESC4'),
('2021-09-17 16:38:24', '15-5098947', 'Randie', 'Seagrove', 'rseagrovenl', 'F', 'rseagrovenl@universidadfalsa.com', 'PL', 'Węgliniec', 'CN', 'Shixiang', 'ESC3'),
('2021-01-07 22:58:24', '52-4882787', 'Raleigh', 'Shackleton', 'rshackletonkp', 'M', 'rshackletonkp@universidadfalsa.com', 'US', 'Tacoma', 'BR', 'Criciúma', 'ESC3'),
('2021-05-01 05:02:13', '01-2404438', 'Reina', 'Stebbins', 'rstebbinsim', 'F', 'rstebbinsim@universidadfalsa.com', 'TN', 'Sousse', 'SY', 'Duwayr Raslān', 'ESC6'),
('2020-07-07 17:22:48', '96-7265706', 'Rutger', 'Stoppe', 'rstoppekd', 'M', 'rstoppekd@universidadfalsa.com', 'RU', 'Urus-Martan', 'ID', 'Cikiruh Wetan', 'ESC2'),
('2021-08-02 01:03:12', '95-7617904', 'Randolph', 'Strathe', 'rstrathear', 'M', 'rstrathear@universidadfalsa.com', 'EG', 'Ḩawsh ‘Īsá', 'TN', 'Al Qarmadah', 'ESC2'),
('2021-05-22 08:44:11', '69-4766297', 'Ronda', 'Strethill', 'rstrethillaf', 'F', 'rstrethillaf@universidadfalsa.com', 'PK', 'Kabīrwāla', 'RU', 'Murmino', 'ESC7'),
('2020-10-13 07:27:30', '29-7924152', 'Remus', 'Studdal', 'rstuddal85', 'M', 'rstuddal85@universidadfalsa.com', 'SE', 'Mullsjö', 'PA', 'La Peña', 'ESC3'),
('2020-12-25 17:03:03', '80-7513965', 'Richmond', 'Tramel', 'rtramelb7', 'M', 'rtramelb7@universidadfalsa.com', 'MG', 'Ambatolaona', 'FR', 'Lyon', 'ESC6'),
('2021-06-06 18:29:31', '19-9967742', 'Rhianon', 'Trevance', 'rtrevanceh6', 'F', 'rtrevanceh6@universidadfalsa.com', 'AM', 'Metsamor', 'CZ', 'Jince', 'ESC3'),
('2020-06-04 05:52:36', '39-0224191', 'Rawley', 'Waplinton', 'rwaplinton7d', 'M', 'rwaplinton7d@universidadfalsa.com', 'KZ', 'Kentau', 'GR', 'Néos Oropós', 'ESC1'),
('2020-09-07 04:01:41', '49-8614218', 'Reinaldo', 'Windham', 'rwindhamiq', 'M', 'rwindhamiq@universidadfalsa.com', 'UA', 'Melekyne', 'CN', 'Dayong', 'ESC2'),
('2021-06-08 14:44:23', '05-5161045', 'Randy', 'Wondraschek', 'rwondraschekpc', 'F', 'rwondraschekpc@universidadfalsa.com', 'CZ', 'Vidče', 'NI', 'Chichigalpa', 'ESC5'),
('2021-09-14 14:03:58', '49-5400580', 'Richardo', 'Youd', 'ryoudjp', 'M', 'ryoudjp@universidadfalsa.com', 'CN', 'Yuanqiao', 'BR', 'Cordeirópolis', 'ESC2'),
('2021-02-14 14:09:38', '90-0567435', 'Sawyer', 'Aleveque', 'salevequerg', 'M', 'salevequerg@universidadfalsa.com', 'PS', 'Al Jīb', 'CN', 'Huaiyuan Chengguanzhen', 'ESC3'),
('2021-05-02 13:13:58', '90-4710481', 'Stephine', 'Alpin', 'salpinjo', 'F', 'salpinjo@universidadfalsa.com', 'SE', 'Arlöv', 'JP', 'Hisai', 'ESC5'),
('2020-01-28 04:22:35', '01-9141560', 'Simmonds', 'Anglish', 'sanglish7n', 'M', 'sanglish7n@universidadfalsa.com', 'PH', 'Binucayan', 'CZ', 'Pardubice', 'ESC4'),
('2021-07-09 07:00:52', '64-1996525', 'Skye', 'Baseggio', 'sbaseggio4o', 'M', 'sbaseggio4o@universidadfalsa.com', 'US', 'Vancouver', 'ID', 'Karangsembung', 'ESC6'),
('2020-06-05 22:05:11', '45-6720383', 'Shani', 'Bollen', 'sbollen3m', 'F', 'sbollen3m@universidadfalsa.com', 'PT', 'Tavira', 'PH', 'Maluso', 'ESC5'),
('2020-05-07 11:33:05', '18-6531601', 'Susette', 'Brumfield', 'sbrumfieldmd', 'F', 'sbrumfieldmd@universidadfalsa.com', 'CN', 'Wenping', 'ID', 'Windusakti Hilir', 'ESC6'),
('2020-10-17 10:13:01', '36-7276779', 'Siouxie', 'Buckler', 'sbucklern6', 'F', 'sbucklern6@universidadfalsa.com', 'CZ', 'Loučná nad Desnou', 'SY', 'Kafr Zaytā', 'ESC3'),
('2021-10-04 07:40:16', '12-9170960', 'Seward', 'Caustic', 'scaustic3o', 'M', 'scaustic3o@universidadfalsa.com', 'BG', 'Chirpan', 'KZ', 'Taranovskoye', 'ESC4'),
('2021-05-03 15:59:10', '41-5999899', 'Salvatore', 'Chansonnau', 'schansonnaujx', 'M', 'schansonnaujx@universidadfalsa.com', 'FR', 'La Roche-sur-Yon', 'KZ', 'Terenozek', 'ESC5'),
('2021-04-29 09:03:26', '30-2715015', 'Spenser', 'Coulthart', 'scoulthartqh', 'M', 'scoulthartqh@universidadfalsa.com', 'NP', 'Surkhet', 'CN', 'Wanzhai', 'ESC2'),
('2020-06-30 12:09:43', '43-3521227', 'Stephi', 'Crutcher', 'scrutcherkx', 'F', 'scrutcherkx@universidadfalsa.com', 'ID', 'Makbon', 'AM', 'Tsaghkahovit', 'ESC6'),
('2020-10-12 17:48:49', '30-7684449', 'Silvanus', 'Dipple', 'sdipple1y', 'M', 'sdipple1y@universidadfalsa.com', 'PT', 'Recarei', 'PY', 'Caacupé', 'ESC3'),
('2021-02-12 04:03:45', '48-5465571', 'Shelba', 'Filip', 'sfilip1h', 'F', 'sfilip1h@universidadfalsa.com', 'KZ', 'Aksu', 'CN', 'Baima', 'ESC6'),
('2021-06-15 15:53:33', '44-5004696', 'Shae', 'Firebrace', 'sfirebrace1v', 'M', 'sfirebrace1v@universidadfalsa.com', 'ID', 'Pangkalan', 'CO', 'Yarumal', 'ESC5'),
('2020-05-04 03:29:55', '62-9986373', 'Sonny', 'Franzen', 'sfranzenm3', 'M', 'sfranzenm3@universidadfalsa.com', 'MA', 'Khemisset', 'CN', 'Hulan', 'ESC4'),
('2021-06-08 06:21:08', '08-3264251', 'Sibella', 'Gilsthorpe', 'sgilsthorpe2c', 'F', 'sgilsthorpe2c@universidadfalsa.com', 'CN', 'Bayan Hure', 'EH', 'Dakhla', 'ESC7'),
('2020-04-19 08:28:06', '78-5976318', 'Saundra', 'Goodenough', 'sgoodenough1', 'M', 'sgoodenough1@universidadfalsa.com', 'CN', 'Baishi', 'CA', 'Concord', 'ESC6'),
('2021-05-29 23:33:47', '90-8733075', 'Samara', 'Gorgler', 'sgorgler8g', 'F', 'sgorgler8g@universidadfalsa.com', 'EG', 'Shibīn al Qanāţir', 'US', 'Portland', 'ESC4'),
('2021-06-19 03:38:20', '67-4762905', 'Sharron', 'Gregoletti', 'sgregolettipr', 'F', 'sgregolettipr@universidadfalsa.com', 'RU', 'Gorodets', 'BR', 'Sobral', 'ESC3'),
('2020-03-19 00:33:52', '94-0240978', 'Shirl', 'Grzegorzewski', 'sgrzegorzewskiny', 'F', 'sgrzegorzewskiny@universidadfalsa.com', 'FR', 'Cournon-dAuvergne', 'BR', 'Itabaiana', 'ESC7'),
('2021-10-04 11:25:02', '40-6319462', 'Sterling', 'Guess', 'sguessor', 'M', 'sguessor@universidadfalsa.com', 'LK', 'Anuradhapura', 'LC', 'Laborie', 'ESC5'),
('2020-03-06 22:58:54', '22-7910110', 'Spence', 'Halligan', 'shalliganja', 'M', 'shalliganja@universidadfalsa.com', 'HU', 'Debrecen', 'GU', 'Sinajana Village', 'ESC3'),
('2020-11-20 22:29:05', '87-1317264', 'Sena', 'Hare', 'sharejy', 'F', 'sharejy@universidadfalsa.com', 'GR', 'Kárystos', 'GT', 'Soloma', 'ESC2'),
('2020-10-20 08:01:14', '68-9346440', 'Sapphira', 'Hedling', 'shedlinge', 'F', 'shedlinge@universidadfalsa.com', 'BR', 'Boa Viagem', 'ZM', 'Namwala', 'ESC6'),
('2020-08-04 10:20:26', '04-0385421', 'Star', 'Husset', 'shussetfm', 'F', 'shussetfm@universidadfalsa.com', 'ID', 'Nobo', 'RU', 'Pushkinskiye Gory', 'ESC2'),
('2020-03-14 20:44:53', '43-1973820', 'Shaughn', 'Jerke', 'sjerkem8', 'M', 'sjerkem8@universidadfalsa.com', 'FR', 'Montbrison', 'CN', 'Ketang', 'ESC3'),
('2020-05-17 21:25:18', '47-6585601', 'Sigfrid', 'Jump', 'sjumpdh', 'M', 'sjumpdh@universidadfalsa.com', 'ID', 'Banjar Dauhpura', 'JP', 'Aisai', 'ESC6'),
('2020-12-23 21:10:13', '91-4356384', 'Sadella', 'Karpmann', 'skarpmann5j', 'F', 'skarpmann5j@universidadfalsa.com', 'ID', 'Indralayang', 'CN', 'Changfeng', 'ESC6'),
('2021-10-15 00:18:17', '15-2589204', 'Sigrid', 'Keave', 'skeave6j', 'F', 'skeave6j@universidadfalsa.com', 'BR', 'Parintins', 'BR', 'Itu', 'ESC7'),
('2021-08-16 19:00:57', '65-2886671', 'Shae', 'Keson', 'skesonb0', 'M', 'skesonb0@universidadfalsa.com', 'US', 'Zephyrhills', 'RU', 'Proletarskiy', 'ESC1'),
('2021-01-21 06:57:36', '05-0185434', 'Sig', 'Klement', 'sklementng', 'M', 'sklementng@universidadfalsa.com', 'SE', 'Hässelby', 'PH', 'Digdig', 'ESC6'),
('2020-07-05 15:02:05', '85-8978892', 'Stanislaus', 'Lambrick', 'slambrickgk', 'M', 'slambrickgk@universidadfalsa.com', 'CN', 'Jintian', 'CN', 'Baimaqiao', 'ESC1'),
('2021-10-04 10:53:56', '74-0547382', 'Sollie', 'Ledstone', 'sledstone4k', 'M', 'sledstone4k@universidadfalsa.com', 'DK', 'København', 'AL', 'Orosh', 'ESC2'),
('2020-02-10 02:57:50', '55-0274091', 'Sandro', 'Lefeuvre', 'slefeuvreha', 'M', 'slefeuvreha@universidadfalsa.com', 'BR', 'Cajati', 'VE', 'San José de Barlovento', 'ESC1'),
('2020-11-25 11:15:08', '94-3233147', 'Sidney', 'Linning', 'slinningrh', 'M', 'slinningrh@universidadfalsa.com', 'PA', 'Dolega District', 'US', 'Salt Lake City', 'ESC2'),
('2020-12-14 10:47:04', '77-1220280', 'Shaw', 'Lippi', 'slippik1', 'M', 'slippik1@universidadfalsa.com', 'MY', 'Kuala Lumpur', 'PK', 'Malakwal City', 'ESC1'),
('2021-07-27 20:43:29', '11-8565375', 'Sella', 'Lisle', 'slislejb', 'F', 'slislejb@universidadfalsa.com', 'SI', 'Gotovlje', 'BR', 'Planaltina', 'ESC5'),
('2020-10-21 01:26:55', '17-1346340', 'Steven', 'MacGoun', 'smacgounps', 'M', 'smacgounps@universidadfalsa.com', 'CA', 'Norfolk County', 'PE', 'Santa Eulalia', 'ESC2'),
('2021-02-19 21:55:20', '98-5784516', 'Selia', 'MacMechan', 'smacmechan8m', 'F', 'smacmechan8m@universidadfalsa.com', 'KZ', 'Ülken', 'CN', 'Shishang', 'ESC2'),
('2021-03-14 21:24:39', '62-2299416', 'Shoshanna', 'MacTavish', 'smactavish68', 'F', 'smactavish68@universidadfalsa.com', 'VE', 'Ocumare de la Costa', 'CN', 'Budayuan', 'ESC4'),
('2020-12-17 13:38:55', '88-1887112', 'Sholom', 'McKyrrelly', 'smckyrrellyga', 'M', 'smckyrrellyga@universidadfalsa.com', 'LI', 'Planken', 'ID', 'Cigintung', 'ESC5'),
('2021-10-03 09:54:40', '73-5316765', 'Sherwynd', 'Metzig', 'smetzigpx', 'M', 'smetzigpx@universidadfalsa.com', 'RU', 'Sosnovyy Bor', 'TH', 'Wang Nam Yen', 'ESC3'),
('2021-04-21 06:27:11', '40-6165973', 'Sherill', 'Nairn', 'snairnk6', 'F', 'snairnk6@universidadfalsa.com', 'CZ', 'Bystré', 'RU', 'Uk', 'ESC6'),
('2021-04-21 10:30:33', '66-3512895', 'Sherill', 'Orgill', 'sorgillea', 'F', 'sorgillea@universidadfalsa.com', 'CD', 'Inongo', 'PH', 'Agoncillo', 'ESC4'),
('2020-08-01 22:32:50', '40-3576774', 'Scarface', 'Pawlicki', 'spawlickipe', 'M', 'spawlickipe@universidadfalsa.com', 'PH', 'Libas', 'AR', 'Del Campillo', 'ESC4'),
('2020-12-12 08:29:17', '52-2314395', 'Silvio', 'Prydie', 'sprydiefw', 'M', 'sprydiefw@universidadfalsa.com', 'EG', 'Kafr ad Dawwār', 'CN', 'Xiying', 'ESC1'),
('2020-05-07 10:24:25', '68-4794091', 'Shelby', 'Richings', 'srichings9x', 'M', 'srichings9x@universidadfalsa.com', 'PH', 'Taluksangay', 'JP', 'Ōmamachō-ōmama', 'ESC6'),
('2020-08-10 05:14:58', '22-9067509', 'Sibyl', 'Rowbury', 'srowburyni', 'F', 'srowburyni@universidadfalsa.com', 'FR', 'Villejuif', 'UA', 'Zdovbytsya', 'ESC7'),
('2020-10-11 10:02:50', '30-0647549', 'Sibley', 'Sarsons', 'ssarsonsko', 'F', 'ssarsonsko@universidadfalsa.com', 'MG', 'Alarobia', 'ID', 'Nangakeo', 'ESC6'),
('2021-06-17 11:12:00', '29-3028358', 'Somerset', 'Scheu', 'sscheucq', 'M', 'sscheucq@universidadfalsa.com', 'JP', 'Owase', 'RU', 'Pavlodol’skaya', 'ESC5'),
('2020-07-31 04:25:09', '08-5723851', 'Salomo', 'Skinner', 'sskinner2', 'M', 'sskinner2@universidadfalsa.com', 'QA', 'Ar Ru’ays', 'ES', 'Aviles', 'ESC2'),
('2020-02-22 20:00:53', '94-6023238', 'Sherilyn', 'Stirzaker', 'sstirzaker1b', 'F', 'sstirzaker1b@universidadfalsa.com', 'CN', 'Dongqinggou', 'KP', 'Hyesan-si', 'ESC3'),
('2020-12-05 05:09:15', '42-7499770', 'Shelley', 'Swatten', 'sswattenmq', 'M', 'sswattenmq@universidadfalsa.com', 'LV', 'Vecumnieki', 'IE', 'Bailieborough', 'ESC1'),
('2021-08-05 17:42:12', '15-2064872', 'Sarge', 'Tedder', 'stedderdm', 'M', 'stedderdm@universidadfalsa.com', 'ID', 'Ploso Wetan', 'CO', 'Zarzal', 'ESC6'),
('2020-06-19 05:57:17', '88-6802132', 'Selie', 'Thunderchief', 'sthunderchiefpw', 'F', 'sthunderchiefpw@universidadfalsa.com', 'SE', 'Västra Frölunda', 'CN', 'Sanligang', 'ESC1'),
('2020-06-16 23:21:37', '97-4388903', 'Susy', 'Tipperton', 'stippertonj3', 'F', 'stippertonj3@universidadfalsa.com', 'RU', 'Naro-Fominsk', 'NC', 'Fayaoué', 'ESC7'),
('2021-02-04 00:31:35', '89-6774319', 'Sibby', 'todor', 'stodorpj', 'F', 'stodorpj@universidadfalsa.com', 'PH', 'New Iloilo', 'BR', 'Florianópolis', 'ESC3'),
('2020-09-29 14:49:00', '83-0035259', 'Shane', 'Towers', 'stowersab', 'M', 'stowersab@universidadfalsa.com', 'ID', 'Dajalorong', 'ID', 'Bulakbanjar', 'ESC3'),
('2021-10-18 19:49:00', '68-3425670', 'Shaylyn', 'Upham', 'supham2d', 'F', 'supham2d@universidadfalsa.com', 'CN', 'Yonghe', 'PH', 'Tiglauigan', 'ESC7'),
('2020-03-16 06:26:43', '42-6173198', 'Shayne', 'Vasilechko', 'svasilechko37', 'M', 'svasilechko37@universidadfalsa.com', 'RU', 'Troitskaya', 'ID', 'Suruhwadang', 'ESC5'),
('2020-04-26 03:59:46', '41-0996523', 'Stan', 'Vaune', 'svauneoe', 'M', 'svauneoe@universidadfalsa.com', 'RS', 'Voždovac', 'TH', 'Uthai Thani', 'ESC2'),
('2020-01-19 08:12:05', '00-2844496', 'Sande', 'Wellwood', 'swellwoodp5', 'F', 'swellwoodp5@universidadfalsa.com', 'CO', 'Balboa', 'BR', 'Caucaia', 'ESC4'),
('2020-11-27 16:54:47', '67-5730388', 'Stanfield', 'Wheatley', 'swheatleylp', 'M', 'swheatleylp@universidadfalsa.com', 'PE', 'Camilaca', 'CZ', 'Postoloprty', 'ESC4'),
('2021-02-11 14:23:02', '70-9819286', 'Sarene', 'Wheatman', 'swheatmandg', 'F', 'swheatmandg@universidadfalsa.com', 'JP', 'Sandachō', 'PT', 'Estarreja', 'ESC7'),
('2021-09-09 06:39:52', '06-6614390', 'Sydel', 'Whittleton', 'swhittletond6', 'F', 'swhittletond6@universidadfalsa.com', 'BR', 'Floresta', 'TN', 'Al Wardānīn', 'ESC2'),
('2021-01-12 09:46:51', '87-2720918', 'Stanfield', 'Yaakov', 'syaakovp3', 'M', 'syaakovp3@universidadfalsa.com', 'CO', 'La Vega', 'IR', 'Varazqān', 'ESC7'),
('2021-06-04 22:13:01', '70-1156994', 'Stevena', 'Yusupov', 'syusupovh3', 'F', 'syusupovh3@universidadfalsa.com', 'ID', 'Cihaur', 'ID', 'Tlogowungu', 'ESC7'),
('2020-04-03 12:04:35', '61-7011234', 'Torre', 'Arend', 'tarendf5', 'M', 'tarendf5@universidadfalsa.com', 'RU', 'Pallasovka', 'CL', 'Victoria', 'ESC6'),
('2020-09-27 05:54:44', '10-6646527', 'Tab', 'Arnoldi', 'tarnoldieb', 'M', 'tarnoldieb@universidadfalsa.com', 'PT', 'Castanheira', 'CN', 'Yashao', 'ESC3'),
('2020-11-20 16:08:59', '69-4797506', 'Therese', 'Attrey', 'tattrey4i', 'F', 'tattrey4i@universidadfalsa.com', 'CN', 'Chishui', 'PL', 'Jejkowice', 'ESC4'),
('2021-10-04 22:57:41', '87-4083449', 'Timothee', 'Attwill', 'tattwill8b', 'M', 'tattwill8b@universidadfalsa.com', 'CN', 'Shangpai', 'CN', 'Huzhen', 'ESC4'),
('2021-08-02 10:53:02', '22-4641150', 'Teressa', 'Bartali', 'tbartali5c', 'F', 'tbartali5c@universidadfalsa.com', 'US', 'Akron', 'UA', 'Znomenka', 'ESC2'),
('2021-06-09 19:02:31', '34-3669151', 'Tully', 'Beddingham', 'tbeddinghamjg', 'M', 'tbeddinghamjg@universidadfalsa.com', 'CN', 'Kutao', 'PT', 'Resende', 'ESC1'),
('2021-06-28 14:59:30', '24-0864991', 'Trudi', 'Begwell', 'tbegwellkz', 'F', 'tbegwellkz@universidadfalsa.com', 'TZ', 'Muleba', 'NG', 'Yashikera', 'ESC3'),
('2020-04-21 09:09:17', '64-5132025', 'Tybi', 'Cabell', 'tcabell45', 'F', 'tcabell45@universidadfalsa.com', 'PL', 'Brdów', 'TJ', 'Panjakent', 'ESC2'),
('2020-08-15 06:28:20', '29-9565492', 'Theodosia', 'Carillo', 'tcarilloeh', 'F', 'tcarilloeh@universidadfalsa.com', 'PH', 'Eguia', 'PL', 'Lachowice', 'ESC2'),
('2021-05-02 20:57:50', '22-7145695', 'Tucky', 'Cawley', 'tcawleybq', 'M', 'tcawleybq@universidadfalsa.com', 'PH', 'Magsaysay', 'BR', 'Tabira', 'ESC6'),
('2020-04-23 09:20:21', '62-4796843', 'Tyrone', 'Charte', 'tcharte6e', 'M', 'tcharte6e@universidadfalsa.com', 'PL', 'Łubnice', 'CN', 'Zhenzhushan', 'ESC7'),
('2020-07-04 06:26:50', '97-4311175', 'Tova', 'Coleiro', 'tcoleirobx', 'F', 'tcoleirobx@universidadfalsa.com', 'ID', 'Osapsio', 'BR', 'Manhumirim', 'ESC4'),
('2021-02-10 07:10:30', '58-1079341', 'Town', 'Dellenty', 'tdellentybc', 'M', 'tdellentybc@universidadfalsa.com', 'DE', 'Bielefeld', 'PH', 'Dalupaon', 'ESC6'),
('2021-07-30 06:44:24', '84-8856876', 'Tully', 'Denys', 'tdenys3t', 'M', 'tdenys3t@universidadfalsa.com', 'TH', 'Thung Yang Daeng', 'SE', 'Sundbyberg', 'ESC7'),
('2021-09-19 03:52:54', '38-4024035', 'Town', 'Elis', 'telisaw', 'M', 'telisaw@universidadfalsa.com', 'AR', 'Castro Barros', 'CO', 'Pivijay', 'ESC7'),
('2020-02-27 20:27:08', '29-3517830', 'Teri', 'Espinazo', 'tespinazodd', 'F', 'tespinazodd@universidadfalsa.com', 'PE', 'Quinuabamba', 'CN', 'Liuheng', 'ESC5'),
('2020-06-17 02:58:45', '78-7568265', 'Thaddeus', 'Everett', 'teverett25', 'M', 'teverett25@universidadfalsa.com', 'TH', 'Pom Prap Sattru Phai', 'GR', 'Grevená', 'ESC3'),
('2021-08-14 12:22:49', '64-9236578', 'Tobiah', 'Fer', 'tfer8d', 'M', 'tfer8d@universidadfalsa.com', 'SE', 'Sundsvall', 'US', 'Buffalo', 'ESC3'),
('2021-05-02 17:24:56', '28-6085591', 'Tasia', 'Fraanchyonok', 'tfraanchyonokbp', 'F', 'tfraanchyonokbp@universidadfalsa.com', 'PT', 'Ameixoeira', 'PE', 'Bellavista', 'ESC5'),
('2020-10-09 07:12:13', '71-7551502', 'Tamma', 'Giacomuzzo', 'tgiacomuzzo30', 'F', 'tgiacomuzzo30@universidadfalsa.com', 'BR', 'Forquilhinha', 'BR', 'Jaboticabal', 'ESC1'),
('2020-06-07 03:34:45', '45-6757164', 'Therine', 'Gomez', 'tgomez1q', 'F', 'tgomez1q@universidadfalsa.com', 'BR', 'São Miguel dos Campos', 'CN', 'Hexi', 'ESC7'),
('2020-05-09 06:32:46', '97-9773850', 'Tedda', 'Goomes', 'tgoomesld', 'F', 'tgoomesld@universidadfalsa.com', 'PL', 'Tarnawatka', 'US', 'Miami Beach', 'ESC3'),
('2021-01-16 03:37:33', '73-7861597', 'Trumaine', 'Gustus', 'tgustus4b', 'M', 'tgustus4b@universidadfalsa.com', 'TH', 'Thai Charoen', 'ID', 'Glempang Tengah', 'ESC5'),
('2020-12-20 08:23:31', '00-4395060', 'Tymon', 'Hassard', 'thassardc2', 'M', 'thassardc2@universidadfalsa.com', 'HU', 'Miskolc', 'PT', 'Palmeiros', 'ESC2'),
('2020-02-21 17:23:03', '82-4903621', 'Tiebold', 'Heaker', 'theakerlz', 'M', 'theakerlz@universidadfalsa.com', 'ZW', 'Shangani', 'FR', 'Orléans', 'ESC7'),
('2021-08-11 05:13:58', '65-8576510', 'Tomasina', 'Kloss', 'tklossfx', 'F', 'tklossfx@universidadfalsa.com', 'ID', 'Sumberdangdang', 'FR', 'Ivry-sur-Seine', 'ESC7'),
('2020-02-02 11:27:31', '34-1301080', 'Toby', 'Limpertz', 'tlimpertzag', 'M', 'tlimpertzag@universidadfalsa.com', 'HR', 'Mirkovci', 'VN', 'Sa Pá', 'ESC2'),
('2021-03-14 13:48:00', '66-1415474', 'Teddie', 'MacDougall', 'tmacdougallav', 'M', 'tmacdougallav@universidadfalsa.com', 'AR', 'Pocito', 'ID', 'Loga', 'ESC2'),
('2020-02-21 05:32:35', '29-2952567', 'Teddi', 'MacPaik', 'tmacpaikdy', 'F', 'tmacpaikdy@universidadfalsa.com', 'CN', 'Meixian', 'RU', 'Staryy Togul', 'ESC7'),
('2020-01-01 01:21:16', '39-2429081', 'Tamar', 'Maleck', 'tmaleckfi', 'F', 'tmaleckfi@universidadfalsa.com', 'BR', 'Taquarituba', 'ID', 'Longka', 'ESC6'),
('2020-05-23 22:37:49', '49-6459137', 'Terrel', 'Miko', 'tmikoc', 'M', 'tmikoc@universidadfalsa.com', 'FR', 'Paris 06', 'RU', 'Pyt-Yakh', 'ESC3'),
('2021-07-19 05:37:16', '48-5753255', 'Thomas', 'Mohan', 'tmohan5y', 'M', 'tmohan5y@universidadfalsa.com', 'PE', 'Hualgayoc', 'PL', 'Strachówka', 'ESC1'),
('2020-11-20 12:12:46', '46-8684326', 'Thomasine', 'Mothersdale', 'tmothersdale59', 'F', 'tmothersdale59@universidadfalsa.com', 'HR', 'Goričan', 'DK', 'København', 'ESC3'),
('2021-07-19 18:51:37', '11-4258172', 'Tedd', 'Olorenshaw', 'tolorenshawlc', 'M', 'tolorenshawlc@universidadfalsa.com', 'HR', 'Bistrinci', 'SE', 'Lidköping', 'ESC4'),
('2021-10-13 13:18:26', '90-6877756', 'Torrence', 'Oxtiby', 'toxtibygq', 'M', 'toxtibygq@universidadfalsa.com', 'RU', 'Cherëmukhovo', 'CN', 'Heishan', 'ESC2'),
('2020-09-10 22:51:54', '70-0732351', 'Thebault', 'Rake', 'trakeml', 'M', 'trakeml@universidadfalsa.com', 'ID', 'Wewoloe', 'RU', 'Glubokiy', 'ESC3'),
('2020-12-16 04:06:57', '45-7001117', 'Tracey', 'Rasor', 'trasorq8', 'M', 'trasorq8@universidadfalsa.com', 'ID', 'Pilang', 'GT', 'San Juan Atitán', 'ESC1'),
('2020-07-15 15:00:35', '38-4032855', 'Tyler', 'Rawls', 'trawlsbm', 'M', 'trawlsbm@universidadfalsa.com', 'FR', 'Villeurbanne', 'PL', 'Tomaszów Lubelski', 'ESC7'),
('2020-06-21 08:47:52', '64-0138488', 'Theobald', 'Riggulsford', 'triggulsfordft', 'M', 'triggulsfordft@universidadfalsa.com', 'PK', 'Hadāli', 'CN', 'Banzhong', 'ESC7'),
('2021-03-12 02:38:31', '94-5492560', 'Thedrick', 'Rosenbaum', 'trosenbaumm2', 'M', 'trosenbaumm2@universidadfalsa.com', 'BG', 'Karnobat', 'CN', 'Shuangfeng', 'ESC5'),
('2020-08-05 03:41:32', '30-1877535', 'Trueman', 'Sired', 'tsired2m', 'M', 'tsired2m@universidadfalsa.com', 'PL', 'Oksa', 'ID', 'Pagaden', 'ESC6'),
('2020-01-17 04:07:16', '54-2769296', 'Tybie', 'Smittoune', 'tsmittoune5s', 'F', 'tsmittoune5s@universidadfalsa.com', 'AR', 'Tama', 'ID', 'Nunbaundelha', 'ESC4'),
('2020-06-16 23:25:21', '04-5373687', 'Theobald', 'Sorbey', 'tsorbey75', 'M', 'tsorbey75@universidadfalsa.com', 'CN', 'Zhujiang', 'VU', 'Port-Vila', 'ESC6'),
('2021-04-14 02:26:38', '67-7207545', 'Tabor', 'Switzer', 'tswitzer6a', 'M', 'tswitzer6a@universidadfalsa.com', 'CN', 'Rentian', 'CN', 'Paisha', 'ESC2'),
('2021-08-19 08:12:36', '68-4720208', 'Teriann', 'Tomaino', 'ttomainoff', 'F', 'ttomainoff@universidadfalsa.com', 'PT', 'Giesteira', 'PS', 'Al Mazra‘ah ash Sharqīyah', 'ESC7'),
('2020-12-07 23:37:38', '84-4058375', 'Tobey', 'Wassung', 'twassung8c', 'F', 'twassung8c@universidadfalsa.com', 'PH', 'Pananaw', 'ID', 'Parapat', 'ESC6'),
('2021-05-21 01:39:19', '70-9582071', 'Travus', 'Whitlock', 'twhitlockr7', 'M', 'twhitlockr7@universidadfalsa.com', 'ID', 'Manado', 'JP', 'Haebaru', 'ESC1'),
('2020-04-13 10:01:41', '53-2041362', 'Tirrell', 'Yaknov', 'tyaknov3', 'M', 'tyaknov3@universidadfalsa.com', 'RU', 'Tuymazy', 'MY', 'Nusajaya', 'ESC1'),
('2020-02-08 13:09:05', '46-2828305', 'Ula', 'Brown', 'ubrowngd', 'F', 'ubrowngd@universidadfalsa.com', 'CN', 'Mingzhong', 'UA', 'Bile', 'ESC6'),
('2021-09-21 03:36:55', '48-8384754', 'Ursuline', 'Clemence', 'uclemence1d', 'F', 'uclemence1d@universidadfalsa.com', 'PT', 'Estrada', 'SE', 'Stockholm', 'ESC3'),
('2021-07-27 22:57:31', '02-8520663', 'Udall', 'Landis', 'ulandisb8', 'M', 'ulandisb8@universidadfalsa.com', 'ID', 'Panggungasri', 'ID', 'Nonggunong', 'ESC3'),
('2021-04-17 10:45:59', '33-3144380', 'Ulla', 'Mourge', 'umourgepb', 'F', 'umourgepb@universidadfalsa.com', 'PH', 'Cafe', 'RS', 'Begejci', 'ESC6'),
('2020-05-14 17:07:21', '19-4055007', 'Ulrica', 'Sunners', 'usunners2e', 'F', 'usunners2e@universidadfalsa.com', 'ES', 'Cartagena', 'RU', 'Groznyy', 'ESC2'),
('2020-08-13 13:08:17', '31-2242343', 'Vail', 'Berthomier', 'vberthomier1k', 'M', 'vberthomier1k@universidadfalsa.com', 'RU', 'Borovichi', 'GR', 'Neochórion', 'ESC7'),
('2021-07-12 21:18:52', '26-7890995', 'Valida', 'Bowyer', 'vbowyerrn', 'F', 'vbowyerrn@universidadfalsa.com', 'HN', 'La Libertad', 'KE', 'Butere', 'ESC7'),
('2021-08-02 09:14:44', '51-8958166', 'Vanna', 'Brussell', 'vbrussellme', 'F', 'vbrussellme@universidadfalsa.com', 'PL', 'Ostrzeszów', 'KR', 'Kyosai', 'ESC5'),
('2020-11-24 08:30:01', '31-5874983', 'Van', 'Chasle', 'vchaslec8', 'F', 'vchaslec8@universidadfalsa.com', 'CZ', 'Nelahozeves', 'NE', 'Madaoua', 'ESC2');
INSERT INTO `uf_personas` (`FECHAREGISTRO`, `IDPERSONA`, `NOMBRES`, `APELLIDOS`, `NICKNAME`, `GENERO`, `EMAIL_LABORAL`, `ORIGEN_PAIS`, `ORIGEN_CIUDAD`, `RESIDE_PAIS`, `RESIDE_CIUDAD`, `ESCOLARIDAD`) VALUES
('2020-12-09 21:28:38', '33-2749412', 'Vonni', 'Cluse', 'vclusel1', 'F', 'vclusel1@universidadfalsa.com', 'RU', 'Novosineglazovskiy', 'ID', 'Panggungrejo', 'ESC3'),
('2021-03-04 02:53:25', '78-3052612', 'Virge', 'Deadman', 'vdeadmano1', 'M', 'vdeadmano1@universidadfalsa.com', 'CN', 'Gao’an', 'PT', 'Praia da Vagueira', 'ESC6'),
('2020-05-06 00:27:39', '75-9845767', 'Vernor', 'Drinkel', 'vdrinkelgs', 'M', 'vdrinkelgs@universidadfalsa.com', 'IE', 'Balrothery', 'FR', 'Créteil', 'ESC6'),
('2020-04-23 09:58:48', '77-1931656', 'Viviyan', 'Eagar', 'veagarg0', 'F', 'veagarg0@universidadfalsa.com', 'JP', 'Ishioka', 'AR', 'San Jorge', 'ESC3'),
('2021-06-17 15:43:57', '83-5425962', 'Vassili', 'Hebbron', 'vhebbron9q', 'M', 'vhebbron9q@universidadfalsa.com', 'CN', 'Yanzhou', 'CO', 'Santa Lucía', 'ESC7'),
('2021-05-17 01:01:21', '80-0759013', 'Van', 'Ishak', 'vishak2l', 'M', 'vishak2l@universidadfalsa.com', 'PE', 'Achoma', 'PL', 'Ropa', 'ESC4'),
('2020-02-11 04:33:28', '58-7129139', 'Vallie', 'Mapletoft', 'vmapletoftla', 'F', 'vmapletoftla@universidadfalsa.com', 'FR', 'Nevers', 'PT', 'Cortezia', 'ESC7'),
('2021-07-20 07:00:34', '27-0127302', 'Viv', 'Marian', 'vmariann9', 'F', 'vmariann9@universidadfalsa.com', 'CN', 'Liucheng', 'PT', 'Calçada', 'ESC7'),
('2020-10-14 02:04:01', '73-4682638', 'Vanni', 'McGillicuddy', 'vmcgillicuddynf', 'F', 'vmcgillicuddynf@universidadfalsa.com', 'MZ', 'Manjacaze', 'PH', 'San Pedro', 'ESC2'),
('2020-12-20 15:49:31', '32-0482380', 'Vanny', 'Pettis', 'vpettismf', 'F', 'vpettismf@universidadfalsa.com', 'RU', 'Ullubiyaul', 'FR', 'Lomme', 'ESC6'),
('2021-02-22 19:18:34', '06-3612063', 'Van', 'Piesing', 'vpiesingw', 'F', 'vpiesingw@universidadfalsa.com', 'MN', 'Undurkhaan', 'CN', 'Shuitian', 'ESC1'),
('2021-09-03 02:00:18', '30-9209601', 'Verne', 'Pocock', 'vpocock9n', 'M', 'vpocock9n@universidadfalsa.com', 'UA', 'Mukacheve', 'SE', 'Göteborg', 'ESC6'),
('2020-06-06 13:53:48', '19-2016272', 'Vail', 'Rakes', 'vrakesd9', 'M', 'vrakesd9@universidadfalsa.com', 'CA', 'Marystown', 'ID', 'Mangga Dua', 'ESC6'),
('2020-08-01 11:48:24', '06-7911458', 'Virgie', 'Snare', 'vsnarebe', 'M', 'vsnarebe@universidadfalsa.com', 'SE', 'Stockholm', 'PT', 'Rio de Moinhos', 'ESC6'),
('2020-10-09 11:13:48', '23-1406810', 'Vladamir', 'Tomaszewski', 'vtomaszewskiop', 'M', 'vtomaszewskiop@universidadfalsa.com', 'US', 'Washington', 'ID', 'Krajan Demit', 'ESC2'),
('2021-04-03 02:41:53', '45-0828557', 'Vance', 'Tonkes', 'vtonkes63', 'M', 'vtonkes63@universidadfalsa.com', 'CA', 'Bonavista', 'PH', 'Binabaan', 'ESC3'),
('2020-10-02 18:37:25', '17-0490519', 'Vi', 'Tuther', 'vtutherlo', 'F', 'vtutherlo@universidadfalsa.com', 'PT', 'Vinha', 'GT', 'San Agustín Acasaguastlán', 'ESC2'),
('2021-02-18 23:19:58', '99-4922671', 'Vita', 'Wederell', 'vwederell5g', 'F', 'vwederell5g@universidadfalsa.com', 'CO', 'Cunday', 'ID', 'Cikarang', 'ESC7'),
('2020-07-09 01:57:49', '68-0987654', 'Vallie', 'Whetland', 'vwhetland23', 'F', 'vwhetland23@universidadfalsa.com', 'BR', 'Santo Antônio do Amparo', 'ID', 'Lewobelek', 'ESC1'),
('2020-04-01 19:51:40', '43-9840894', 'Waverley', 'Aris', 'warisbo', 'M', 'warisbo@universidadfalsa.com', 'CA', 'Hudson Bay', 'PH', 'Lambayong', 'ESC7'),
('2020-04-04 23:45:11', '84-2795312', 'Wayne', 'Bowsher', 'wbowsher3x', 'M', 'wbowsher3x@universidadfalsa.com', 'ID', 'Mulyadadi', 'SE', 'Skutskär', 'ESC3'),
('2021-03-01 02:56:17', '52-0906831', 'Weylin', 'Briars', 'wbriars0', 'M', 'wbriars0@universidadfalsa.com', 'CN', 'Honghua’erji', 'RU', 'Magadan', 'ESC7'),
('2021-03-15 22:07:13', '42-9219071', 'Wenona', 'Conneely', 'wconneelyij', 'F', 'wconneelyij@universidadfalsa.com', 'MG', 'Ambilobe', 'ID', 'Plandirejo', 'ESC4'),
('2021-09-17 23:53:43', '20-2480097', 'Wynny', 'Epilet', 'wepiletdk', 'F', 'wepiletdk@universidadfalsa.com', 'ID', 'Cigalontang', 'CN', 'Daqian', 'ESC6'),
('2021-03-17 18:56:28', '21-8709369', 'Walt', 'Essex', 'wessexpm', 'M', 'wessexpm@universidadfalsa.com', 'ID', 'Nangkasari', 'ID', 'Mangga Dua', 'ESC1'),
('2021-07-30 11:41:45', '13-7277927', 'Winston', 'Fautley', 'wfautleyh8', 'M', 'wfautleyh8@universidadfalsa.com', 'ZM', 'Kasempa', 'PL', 'Brudzew', 'ESC6'),
('2021-09-17 18:00:12', '90-6794640', 'Wyn', 'Flack', 'wflack8x', 'M', 'wflack8x@universidadfalsa.com', 'BD', 'Sātkhira', 'ID', 'Penanggungan', 'ESC1'),
('2021-05-14 07:55:29', '17-9459469', 'Wynn', 'Garric', 'wgarric8l', 'M', 'wgarric8l@universidadfalsa.com', 'CN', 'Baitao', 'AR', 'Almafuerte', 'ESC6'),
('2021-11-19 15:41:24', '30-9866228', 'Wernher', 'Gosnall', 'wgosnallmz', 'M', 'wgosnallmz@universidadfalsa.com', 'US', 'Washington', 'BR', 'Santana', 'ESC5'),
('2021-09-19 09:02:39', '21-9548056', 'Winfred', 'Hegley', 'whegleyoj', 'M', 'whegleyoj@universidadfalsa.com', 'TJ', 'Norak', 'IR', 'Hashtpar', 'ESC7'),
('2021-10-21 19:08:42', '13-6909514', 'Worthy', 'Keetch', 'wkeetch3a', 'M', 'wkeetch3a@universidadfalsa.com', 'PL', 'Wojcieszków', 'CY', 'Kissónerga', 'ESC4'),
('2021-02-03 13:08:13', '97-7492148', 'Worth', 'Mealand', 'wmealanddz', 'M', 'wmealanddz@universidadfalsa.com', 'FR', 'Cavaillon', 'CN', 'Rucheng Chengguanzhen', 'ESC3'),
('2020-06-12 01:56:42', '06-0491452', 'Wanda', 'Phippard', 'wphipparde1', 'F', 'wphipparde1@universidadfalsa.com', 'CN', 'Gusong', 'EG', 'Port Said', 'ESC3'),
('2020-12-09 17:06:22', '13-2589942', 'Wilbur', 'Pieper', 'wpiepergc', 'M', 'wpiepergc@universidadfalsa.com', 'CN', 'Chaihe', 'ID', 'Krajan Karanganyar', 'ESC2'),
('2021-10-05 03:56:56', '45-4893498', 'Wyn', 'Rodson', 'wrodsong6', 'M', 'wrodsong6@universidadfalsa.com', 'EE', 'Narva', 'PT', 'Afonsoeiro', 'ESC1'),
('2020-11-18 10:08:26', '42-7252126', 'Winnie', 'Scurry', 'wscurryd0', 'F', 'wscurryd0@universidadfalsa.com', 'IR', 'Fareydūnshahr', 'CN', 'Qiaozi', 'ESC4'),
('2021-06-28 23:22:15', '06-8983285', 'Wolfie', 'Shobbrook', 'wshobbrookcw', 'M', 'wshobbrookcw@universidadfalsa.com', 'PT', 'São Lourenço de Mamporcão', 'CN', 'Oymak', 'ESC3'),
('2021-03-13 21:02:41', '24-4246105', 'Winnifred', 'Tiernan', 'wtiernancp', 'F', 'wtiernancp@universidadfalsa.com', 'ET', 'Nazrēt', 'RU', 'Svetlyy', 'ESC6'),
('2020-11-29 16:11:16', '57-2400778', 'Woodman', 'Tonepohl', 'wtonepohlh1', 'M', 'wtonepohlh1@universidadfalsa.com', 'PL', 'Buk', 'BR', 'Espinosa', 'ESC1'),
('2020-08-25 20:35:07', '27-2136294', 'Wald', 'Wortt', 'wworttob', 'M', 'wworttob@universidadfalsa.com', 'MY', 'Kuala Terengganu', 'ID', 'Balung', 'ESC4'),
('2020-10-30 22:11:02', '68-5145998', 'Ximenez', 'Brauner', 'xbrauneri8', 'M', 'xbrauneri8@universidadfalsa.com', 'CN', 'Yangjiaqiao', 'RU', 'Kolyvan’', 'ESC6'),
('2021-08-23 23:23:27', '94-7455845', 'Xever', 'Eeles', 'xeeleshp', 'M', 'xeeleshp@universidadfalsa.com', 'HT', 'Cornillon', 'PH', 'Patria', 'ESC7'),
('2021-06-01 03:42:58', '62-4166796', 'Xymenes', 'Gabey', 'xgabey8', 'M', 'xgabey8@universidadfalsa.com', 'RU', 'Ozëry', 'CN', 'Xinshan', 'ESC7'),
('2020-11-30 05:35:45', '59-2596915', 'Xylia', 'Tenby', 'xtenby4j', 'F', 'xtenby4j@universidadfalsa.com', 'DO', 'Oviedo', 'CN', 'Qianhong', 'ESC6'),
('2020-01-24 00:31:49', '43-6401592', 'Yankee', 'Bremmell', 'ybremmell6o', 'M', 'ybremmell6o@universidadfalsa.com', 'GR', 'Kými', 'CN', 'Huangtan', 'ESC2'),
('2021-01-02 05:04:21', '31-7059509', 'Yasmeen', 'Fouch', 'yfouch6c', 'F', 'yfouch6c@universidadfalsa.com', 'PL', 'Chojnów', 'CN', 'Dagkar', 'ESC5'),
('2020-05-02 11:17:07', '60-6097471', 'Yehudi', 'McIlvaney', 'ymcilvaney18', 'M', 'ymcilvaney18@universidadfalsa.com', 'VN', 'U Minh', 'RU', 'Martyush', 'ESC1'),
('2021-04-15 16:31:13', '64-6081401', 'Zerk', 'Bonafacino', 'zbonafacinod2', 'M', 'zbonafacinod2@universidadfalsa.com', 'JP', 'Ichinomiya', 'AR', 'Montecarlo', 'ESC5'),
('2020-10-11 09:34:07', '00-0710947', 'Zolly', 'Cushelly', 'zcushellynp', 'M', 'zcushellynp@universidadfalsa.com', 'NG', 'Kura', 'VE', 'San Francisco', 'ESC6'),
('2021-06-21 13:20:25', '93-8162592', 'Zachary', 'Febvre', 'zfebvre70', 'M', 'zfebvre70@universidadfalsa.com', 'UA', 'Boyarka', 'GT', 'Jacaltenango', 'ESC5'),
('2021-01-26 06:50:58', '78-1007326', 'Zachary', 'Gotcher', 'zgotcher2p', 'M', 'zgotcher2p@universidadfalsa.com', 'CN', 'Wengtian', 'AZ', 'Xaçmaz', 'ESC2'),
('2021-08-08 05:33:05', '38-5309640', 'Zedekiah', 'Lackemann', 'zlackemann3r', 'M', 'zlackemann3r@universidadfalsa.com', 'TH', 'Sop Moei', 'VN', 'Di Linh', 'ESC2'),
('2021-06-01 11:51:15', '00-3547592', 'Zia', 'Snar', 'zsnaro3', 'F', 'zsnaro3@universidadfalsa.com', 'PL', 'Chorkówka', 'PE', 'Turpo', 'ESC5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_planes_estudio`
--

CREATE TABLE `uf_planes_estudio` (
  `CODIGOPLAN` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `FECHACREACION` datetime DEFAULT NULL,
  `RESOLUCIONACADEMICA` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `PROGRAMACODIGO` int(11) DEFAULT NULL,
  `SEMESTRE1` json DEFAULT NULL,
  `SEMESTRE2` json DEFAULT NULL,
  `SEMESTRE3` json DEFAULT NULL,
  `SEMESTRE4` json DEFAULT NULL,
  `SEMESTRE5` json DEFAULT NULL,
  `SEMESTRE6` json DEFAULT NULL,
  `SEMESTRE7` json DEFAULT NULL,
  `SEMESTRE8` json DEFAULT NULL,
  `CODIGONUMERICOPROGRAMA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_portallaboral`
--

CREATE TABLE `uf_portallaboral` (
  `NICKNAME_USUARIO` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PKEYESTUDIANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `RECUPERAR_PREGUNTA` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `RECUPERAR_RESPUESTA` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NICKNAME` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_pqr`
--

CREATE TABLE `uf_pqr` (
  `PQRNUMERO` int(10) NOT NULL,
  `TICKET` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `FECHARADICADO` datetime NOT NULL,
  `RECHAREVISADO` datetime NOT NULL,
  `ESTADO` tinyint(1) NOT NULL,
  `AREADESTINO` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `REMITENTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ASUNTO` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CONTENIDO` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `RESPUESTA` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `FECHAS` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_programasacademicos`
--

CREATE TABLE `uf_programasacademicos` (
  `CODIGOPROGRAMA` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CODIGONUMERICOPROGRAMA` int(11) NOT NULL,
  `NOMENCLATURAASIGNATURAS` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL,
  `NIVELPROGRAMA` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NOMBREPROGRAMA` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `UNIDADACADEMICA` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NICKNAMEDIRECTORPROGRAMA` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CODIGO_PLANESTUDIOS` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CODIGOUNIDAD` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `uf_programasacademicos`
--

INSERT INTO `uf_programasacademicos` (`CODIGOPROGRAMA`, `CODIGONUMERICOPROGRAMA`, `NOMENCLATURAASIGNATURAS`, `NIVELPROGRAMA`, `NOMBREPROGRAMA`, `UNIDADACADEMICA`, `NICKNAMEDIRECTORPROGRAMA`, `CODIGO_PLANESTUDIOS`, `CODIGOUNIDAD`) VALUES
('PRESID', 8311, 'IPR', 'Profesional', 'Ingeniería en Política Presidencial', '', '', 'PRESID1', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_registroejecutivo`
--

CREATE TABLE `uf_registroejecutivo` (
  `REGISTRONUM` int(11) NOT NULL,
  `LOGNICKNAME` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `LOGDATE` datetime NOT NULL,
  `APPSET` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ACTION` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `NICKNAME` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_sisinfo_permisibilidad`
--

CREATE TABLE `uf_sisinfo_permisibilidad` (
  `NICKNAME` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `APP1` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_sistema_votaciones`
--

CREATE TABLE `uf_sistema_votaciones` (
  `CODIGOVOTACION` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NOMBREVOTACION` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `DESCRIPCIONVOTACION` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_unidades_institucionales`
--

CREATE TABLE `uf_unidades_institucionales` (
  `CODIGOUNIDAD` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NOMBREUNIDAD` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CODIGOPADREUNIDAD` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NICKNAMEJEFEUNIDAD` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `UNIDADABREVIATURA` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `TIPOUNIDAD` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `uf_unidades_institucionales`
--

INSERT INTO `uf_unidades_institucionales` (`CODIGOUNIDAD`, `NOMBREUNIDAD`, `CODIGOPADREUNIDAD`, `NICKNAMEJEFEUNIDAD`, `UNIDADABREVIATURA`, `TIPOUNIDAD`) VALUES
('CONACA', 'Consejo Académico', '', '', 'Consejo Académico', 1),
('CONSUP', 'Consejo Superior', '', '', 'Consejo Superior', 0),
('DIGCOM', 'División General Comunicaciones', '', '', 'D.g. Comunicaciones', 0),
('DIGDAF', 'División General Directiva de Facultades', '', '', 'D.g. Dir. Facultades', 1),
('DIGDEE', 'División General Docentes, Egresados y Estudiantes', '', '', 'D.g. Docentes, Egresados y Estudiantes', 1),
('DISGEF', 'División Superior Gestión Financiera', '', '', 'D.s. Gestión Financiera', 0),
('DISJUR', 'División Superior Jurídica', '', '', 'D.s. Jurídica', 0),
('DISPLA', 'División Superior Planeación', '', '', 'D.s. Planeación', 0),
('DISREC', 'División Superior Registro y Control', '', '', 'D.s. Registro y Control', 0),
('DISSIS', 'División Superor Sistemas Informáticos', '', '', 'D.s. Sistemas Informáticos', 0),
('DISUAC', 'División Superior Académica', '', '', 'D.s. Académica', 1),
('FACBAC', 'Direccion Facultad Básica', 'DIGDAF', '', 'Dir. Facultad Básica', 1),
('FACCON', 'Direccion Facultad Continua', 'DIGDAF', '', 'Dir. Facultad Continua', 1),
('FACMED', 'Direccion Facultad Media', 'DIGDAF', '', 'Dir. Facultad Media', 1),
('FACPRO', 'Direccion Facultad Profesional', 'DIGDAF', '', 'Dir. Facultad Profesional', 1),
('FACSUP', 'Direccion Facultad Superior', 'DIGDAF', '', 'Dir. Facultad Superior', 1),
('FACUNI', 'Direccion Facultad Universal', 'DIGDAF', '', 'Dir. Facultad Universal', 1),
('POTUS', 'Presidencia', '', 'dalarcont', 'Presidencia', 0),
('VIACAD', 'Vicerrectoria Académica y Administrativa', '', '', 'VRA Acad. Y Admitiva.', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf_votaciones`
--

CREATE TABLE `uf_votaciones` (
  `NICKNAME_VOTANTE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `VOTOELECCION` tinyint(4) NOT NULL,
  `OPINIONDELVOTO` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHAVOTACION` datetime NOT NULL,
  `CODIGOVOTACION` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `uf_asignaturagruponotas`
--
ALTER TABLE `uf_asignaturagruponotas`
  ADD PRIMARY KEY (`NICKNAME_ESTUDIANTE`,`CODASIGNATURA`,`GRUPO`,`IDACTIVIDAD`);

--
-- Indices de la tabla `uf_asignaturas`
--
ALTER TABLE `uf_asignaturas`
  ADD PRIMARY KEY (`CODIGOASIGNATURA`);

--
-- Indices de la tabla `uf_asignaturas_relaciones`
--
ALTER TABLE `uf_asignaturas_relaciones`
  ADD PRIMARY KEY (`CODIGO_ASIGNATURA`,`CODIGO_PLAN`);

--
-- Indices de la tabla `uf_aspirantes`
--
ALTER TABLE `uf_aspirantes`
  ADD PRIMARY KEY (`NROINSCRIPCION`,`PININSCRIPCION`);

--
-- Indices de la tabla `uf_calificarservicio`
--
ALTER TABLE `uf_calificarservicio`
  ADD PRIMARY KEY (`NICKNAME_ESTUDIANTE`);

--
-- Indices de la tabla `uf_codigoscargos`
--
ALTER TABLE `uf_codigoscargos`
  ADD PRIMARY KEY (`CODIGO`);

--
-- Indices de la tabla `uf_codigossalariales`
--
ALTER TABLE `uf_codigossalariales`
  ADD PRIMARY KEY (`CODIGOSALARIAL`),
  ADD UNIQUE KEY `CODIGOSALARIAL_UNIQUE` (`CODIGOSALARIAL`);

--
-- Indices de la tabla `uf_consultaegresados`
--
ALTER TABLE `uf_consultaegresados`
  ADD PRIMARY KEY (`NICKNAMEEGRESADO`,`PROGRAMAEGRESADO`);

--
-- Indices de la tabla `uf_contratos`
--
ALTER TABLE `uf_contratos`
  ADD PRIMARY KEY (`NROCONTRATO`);

--
-- Indices de la tabla `uf_convenciones_apps`
--
ALTER TABLE `uf_convenciones_apps`
  ADD PRIMARY KEY (`tabla_origen`,`codigo`),
  ADD KEY `tabla` (`tabla_origen`);

--
-- Indices de la tabla `uf_countrycodes`
--
ALTER TABLE `uf_countrycodes`
  ADD PRIMARY KEY (`CODIGO`);

--
-- Indices de la tabla `uf_docentes_grupos`
--
ALTER TABLE `uf_docentes_grupos`
  ADD PRIMARY KEY (`NICKNAME_DOCENTE`,`CODASIGNATURA`,`GRUPO`);

--
-- Indices de la tabla `uf_estudiantes_general`
--
ALTER TABLE `uf_estudiantes_general`
  ADD PRIMARY KEY (`NICKNAMEESTUDIANTE`);

--
-- Indices de la tabla `uf_estudiantes_historial_academico`
--
ALTER TABLE `uf_estudiantes_historial_academico`
  ADD PRIMARY KEY (`NICKNAME_ESTUDIANTE`,`PERIODO`),
  ADD KEY `INDEXFK` (`PROGRAMA`);

--
-- Indices de la tabla `uf_estudiantes_portal`
--
ALTER TABLE `uf_estudiantes_portal`
  ADD PRIMARY KEY (`NICKNAME_ESTUDIANTE`);

--
-- Indices de la tabla `uf_estudiantes_registroejecutivo`
--
ALTER TABLE `uf_estudiantes_registroejecutivo`
  ADD PRIMARY KEY (`REGISTRONUM`);

--
-- Indices de la tabla `uf_estudiantes_solicitudes`
--
ALTER TABLE `uf_estudiantes_solicitudes`
  ADD PRIMARY KEY (`TICKET`),
  ADD UNIQUE KEY `SOLICITUDNUMERO` (`SOLICITUDNUMERO`);

--
-- Indices de la tabla `uf_financiera_servicios`
--
ALTER TABLE `uf_financiera_servicios`
  ADD PRIMARY KEY (`CODIGOSERVICIO`);

--
-- Indices de la tabla `uf_inscripcion_pin`
--
ALTER TABLE `uf_inscripcion_pin`
  ADD PRIMARY KEY (`PIN`);

--
-- Indices de la tabla `uf_matricula_academica`
--
ALTER TABLE `uf_matricula_academica`
  ADD PRIMARY KEY (`NICKNAME_ESTUDIANTE`),
  ADD KEY `INDEXFK` (`PROGRAMACADEMICO`);

--
-- Indices de la tabla `uf_matricula_estudianteasignatura`
--
ALTER TABLE `uf_matricula_estudianteasignatura`
  ADD PRIMARY KEY (`NICKNAME_ESTUDIANTE`,`CODASIGNATURA`,`GRUPO`);

--
-- Indices de la tabla `uf_matricula_grupos`
--
ALTER TABLE `uf_matricula_grupos`
  ADD PRIMARY KEY (`CODASIGNATURA`,`GRUPO`);

--
-- Indices de la tabla `uf_matricula_horarios`
--
ALTER TABLE `uf_matricula_horarios`
  ADD PRIMARY KEY (`CODASIGNATURA`,`GRUPO`);

--
-- Indices de la tabla `uf_memorandos`
--
ALTER TABLE `uf_memorandos`
  ADD PRIMARY KEY (`CODIGOMEMORANDO`);

--
-- Indices de la tabla `uf_pagosmatricula`
--
ALTER TABLE `uf_pagosmatricula`
  ADD PRIMARY KEY (`REFERENCIAPAGO`,`NICKNAME_ESTUDIANTE`);

--
-- Indices de la tabla `uf_personalinstitucional`
--
ALTER TABLE `uf_personalinstitucional`
  ADD PRIMARY KEY (`NICKNAME`,`DEPARTAMENTO`);

--
-- Indices de la tabla `uf_personas`
--
ALTER TABLE `uf_personas`
  ADD PRIMARY KEY (`NICKNAME`);

--
-- Indices de la tabla `uf_planes_estudio`
--
ALTER TABLE `uf_planes_estudio`
  ADD PRIMARY KEY (`CODIGOPLAN`);

--
-- Indices de la tabla `uf_portallaboral`
--
ALTER TABLE `uf_portallaboral`
  ADD PRIMARY KEY (`NICKNAME_USUARIO`);

--
-- Indices de la tabla `uf_pqr`
--
ALTER TABLE `uf_pqr`
  ADD PRIMARY KEY (`TICKET`),
  ADD UNIQUE KEY `PQRNUMERO` (`PQRNUMERO`);

--
-- Indices de la tabla `uf_programasacademicos`
--
ALTER TABLE `uf_programasacademicos`
  ADD PRIMARY KEY (`CODIGONUMERICOPROGRAMA`);

--
-- Indices de la tabla `uf_registroejecutivo`
--
ALTER TABLE `uf_registroejecutivo`
  ADD PRIMARY KEY (`REGISTRONUM`);

--
-- Indices de la tabla `uf_sisinfo_permisibilidad`
--
ALTER TABLE `uf_sisinfo_permisibilidad`
  ADD PRIMARY KEY (`NICKNAME`);

--
-- Indices de la tabla `uf_sistema_votaciones`
--
ALTER TABLE `uf_sistema_votaciones`
  ADD PRIMARY KEY (`CODIGOVOTACION`);

--
-- Indices de la tabla `uf_unidades_institucionales`
--
ALTER TABLE `uf_unidades_institucionales`
  ADD PRIMARY KEY (`CODIGOUNIDAD`);

--
-- Indices de la tabla `uf_votaciones`
--
ALTER TABLE `uf_votaciones`
  ADD PRIMARY KEY (`NICKNAME_VOTANTE`,`VOTOELECCION`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `uf_aspirantes`
--
ALTER TABLE `uf_aspirantes`
  MODIFY `NROINSCRIPCION` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `uf_contratos`
--
ALTER TABLE `uf_contratos`
  MODIFY `NROCONTRATO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `uf_estudiantes_solicitudes`
--
ALTER TABLE `uf_estudiantes_solicitudes`
  MODIFY `SOLICITUDNUMERO` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `uf_pqr`
--
ALTER TABLE `uf_pqr`
  MODIFY `PQRNUMERO` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

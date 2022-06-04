<?php
require 'umcdssictrl.php';
/* Universidad Falsa - División Superior de Sistemas Informáticos */
#División Superior Registro y Control
/*               */
#Formato
    #case 'ProgramaCodigo6Digitos': Codigo literal de 6 digitos del programa Ej: FRACAS
        #$NombrePrograma                //Nombre del programa en mayúscula Ej: FRACAS1
$CodigoProgramaLiteral="";
        #$FAC                           //Codigo Facultad a la que pertenece MIS/BAS/TEC/ING/SUP/CON
        #$TipoGradoPrograma             //Tipo de programa Pre-post grado / Continuo
        #$Facultad                      //Nombre facultad a la que pertence EN MAYÚSCULAS
        #$CodigoNIE                     //Código NIE del programa, obviamente encabezado por 862
        #$VersionPensum                 //Indica la versión del plan de estudios, por cada modificación se incrementa en 1
        #$Plan                          //Indica si el plan es Normal o Inicialización, y en futuros casos Transferencia / Homologado
        #$NumeroModulos                 //Total número de módulos
        #$NombrePlanEstudios            //Nombre plan estudios.  Umc:$SMActual:$InfoPregrado - 86223:2 - Plan1 - $SEXUAL2 - $NumeroModulos módulos
        #$TotalAsignaturasPrograma      //Total número de asignaturas del programa, independiente de si propias o externas
        #$CreditosParaOptativa          //Cantidad de créditos aprobados para matricular optativa
        #$CreditosModulo                //Array con el total de créditos por módulo del programa
        #$TotalCreditosPrograma         //Total créditos del programa sin contar la optativa y la electiva
        #$CreditosMatriculaMaximo       //Número máximo de créditos a matricular    $CreditosMatriculaMinimo=0;
        #$CreditosMinimoGrado           //Número mínimo de créditos aprobados para graduarse
        #$CreditosParaElectiva          //Cantidad de créditos aprobados para matricular electiva
        #$Asignaturas                   //Códigos numéricos de las asignaturas contenidas en cada módulo del programa
            #array(),
            #Se crean la cantidad de array necesarios dependiendo la cantidad de módulos del programa
        #);
        #$AsignaturasElectiva           //Array con los códigos numéricos de las asignaturas electivas. Encabezado por la asignatura base.
        #$TipoPIN                       //Tipo de pin PRE POST
        #$PermisoCancelar               //El programa otorga permiso para cancelar asignaturas
    #break;


#PROGRAMAS ACADÉMICOS Y SUS NOMBRES A MOSTRAR
    #NOMENCLATURA MAYÚSCULA
        #Facultad Básica (1 = Mayúscula )
            $ORTGRA1="TÉCNICO EN ORTOGRAFÍA";
            $DIGSEN1="TÉCNICO EN DIGNIDAD SENTIMENTAL";
            $SOCWEB1="TÉCNICO EN SOCIEDAD WEB";
            $MISERA1="TÉCNICO EN MISERABLEZA";
            $GESBIX1="TÉCNICO EN GESTIÓN BISEXUAL";

        #Facultad Tecnologías (1 = Mayúscula )
            $DIGHUM1="TECNOLOGÍA EN DIGNIDAD HUMANA";
            $FINFPA1="TECNOLOGÍA EN FINANZAS FAMILIARES Y PERSONALES";
            $IDEPER1="TECNOLOGÍA EN IDENTIFICACIÓN DE PERSONAL";
            $GESHET1="TECNOLOGÍA EN GESTIÓN HETEROSEXUAL";
            $GESHOM1="TECNOLOGÍA EN GESTIÓN HOMOSEXUAL";

        #Facultad Ingenierías (1 = Mayúscula )
            $YOUTUB1="INGENIERÍA YOUTUBER";
            $FINANC1="INGENIERÍA FINANCIERA";
            $SEXUAL1="INGENIERÍA SEXUAL";
            $FRACAS1="INGENIERÍA DEL FRACASO";
            $PRESID1="INGENIERÍA PRESIDENCIAL";
            $DESPER1="INGENIERÍA EN DESTRUCCIÓN PERSONAL";
            $GLAMUR1="INGENIERÍA DEL GLAMOUR";
            $JUVENT1="INGENIERÍA JUVENIL";

        #Facultad Superior
            $SEXAPI1="ESPECIALIZACIÓN EN SEXUALIDAD APLICADA";
            $FIPMIT1="ESPECIALIZACIÓN EN FINANZAS PERSONALES MÍSERAS Y TRIUNFANTES";
            $ENAMAT1="MAESTRÍA EN ENSEÑANZA AUDIOVISUAL DE LA MATEMÁTICA";
            $IDIOAV1="MAESTRÍA EN IDIOTEZ AUDIOVISUAL";

        #Facultad Continua
            $CREDES1="PROFUNDIZACIÓN EN REDES SOCIALES";

    #NOMENCLATURA MINÚSCULA
        #Facultad Básica (2 = Minúscula )
            $ORTGRA2="Técnico en Ortografía";
            $DIGSEN2="Técnico en Dignidad Sentimental";
            $SOCWEB2="Técnico en Sociedad Web";
            $MISERA2="Técnico en Miserableza";
            $GESBIX2="Técnico en Gestión Bisexual";

        #Facultad Tecnologías (2 = Minúscula )
            $DIGHUM2="Tecnología en Dignidad Humana";
            $FINFPA2="Tecnología en Finanzas Familiares y Personales";
            $IDEPER2="Tecnología en Identificación de Personal";
            $GESHET2="Tecnología en Gestión Heterosexual";
            $GESHOM2="Tecnología en Gestión Homosexual";

        #Facultad Ingenierías (2 = Minúscula )
            $YOUTUB2="Ingeniería Youtuber";
            $FINANC2="Ingeniería Financiera";
            $SEXUAL2="Ingeniería Sexual";
            $FRACAS2="Ingeniería del Fracaso";
            $PRESID2="Ingeniería Presidencial";
            $DESPER2="Ingeniería en Destrucción Personal";
            $GLAMUR2="Ingeniería del Glamour";
            $JUVENT2="Ingeniería Juvenil";

        #Facultad Superior
            $SEXAPI2="Especialización en Sexualidad Aplicada";
            $FIPMIT2="Especialización en Finanzas Personales Míseras y Triunfantes";
            $ENAMAT2="Maestría en Enseñanza Audiovisual de la Matemática";
            $IDIOAV2="Maestría en Idiotez Audiovisual";

        #Facultad Continua
            $CREDES2="Profundización en Redes Sociales";

/*               */
$ProgramasFACBAS=array('ORTGRA','DIGSEN','MISERA','SOCWEB','GESBIX');
$ProgramasFACTEC=array('DIGHUM','FINFPA','IDEPER','GESHET','GESHOM');
$ProgramasFACING=array('YOUTUB','FINANC','SEXUAL','FRACAS','PRESID','DESPER','JUVENT','GLAMUR');
$ProgramasFACSUP=array('SEXAPI','FIPMIT','ENAMAT','IDIOAV');
$ProgramasFACCON=array('CREDES');
$ProgramasPREGRADO_TODOS=array('ORTGRA','DIGSEN','MISERA','SOCWEB','GESBIX','DIGHUM','FINFPA','IDEPER','GESHET','GESHOM','YOUTUB','FINANC','SEXUAL','FRACAS','PRESID','DESPER','JUVENT','GLAMUR');
$ProgramasPOSTGRADO_TODOS=array('SEXAPI','FIPMIT','ENAMAT','IDIOAV');

/*               */
#Nombre y datos de programas
// Para el módulo de ajustes de matrícula, semaforización y plan de estudios se usará la variable $NombrePlanEstudios
switch ($PROGC) {
    #FACULTAD MÍSERA
        case 'FACMIS':
            $NombrePrograma="FACULTAD MÍSERA";
            $CodigoProgramaLiteral="FACMIS";
            $FAC="FACMIS";
            $TipoGradoPrograma="PREGRADO";
            $NumeroModulos="N/A";
            $NombrePlanEstudios="N/A";
            $TotalAsignaturasPrograma="N/A";
            $TotalCreditosPrograma="N/A";
            $CreditosMinimoGrado="N/A";
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

    #FACULTAD BÁSICA
        case 'ORTGRA':
        case 86211:
            $NombrePrograma=$ORTGRA1;
            $CodigoProgramaLiteral="ORTGRA";
            $FAC="FACBAS";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD BÁSICA";
            $CodigoNIE="86211"; $VersionPensum="1"; $Plan="Normal";
            $NumeroModulos="2";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan - $ORTGRA2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=10;
            $CreditosParaOptativa=16;
            $CreditosModulo=array(16,7);
            $TotalCreditosPrograma=23;
            $CreditosMatriculaMaximo=6;
            $CreditosMinimoGrado=12;
            $Asignaturas=array(
                array(111,112,113,114,115,116),
                array(117,118,119,1110)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'DIGSEN':
        case 86212:
            $NombrePrograma=$DIGSEN1;
            $CodigoProgramaLiteral="DIGSEN";
            $FAC="FACBAS";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD BÁSICA";
            $CodigoNIE="86212"; $VersionPensum="1"; $Plan="Normal";
            $NumeroModulos="2";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan - $DIGSEN2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=12;
            $CreditosParaOptativa=18;
            $CreditosModulo=array(18,16);
            $TotalCreditosPrograma=34;
            $CreditosMatriculaMaximo=9;
            $CreditosMinimoGrado=17;
            $Asignaturas=array(
                array(121,122,123,124,125,126),
                array(106,127,128,129,1210,1010)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'MISERA':
        case 86213:
            $NombrePrograma=$MISERA1;
            $CodigoProgramaLiteral="MISERA";
            $FAC="FACBAS";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD BÁSICA";
            $CodigoNIE="86213"; $VersionPensum="1"; $Plan="Normal";
            $NumeroModulos="2";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan - $MISERA2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=13;
            $CreditosParaOptativa=34;
            $CreditosModulo=array(34,15);
            $TotalCreditosPrograma=49;
            $CreditosMatriculaMaximo=12;
            $CreditosMinimoGrado=25;
            $Asignaturas=array(
                array(221,131,132,133,222,2232,224,225),
                array(134,135,227,136,137)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'SOCWEB':
        case 86214:
            $NombrePrograma=$SOCWEB1;
            $CodigoProgramaLiteral="SOCWEB";
            $FAC="FACBAS";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD BÁSICA";
            $CodigoNIE="86214"; $VersionPensum="1"; $Plan="Normal";
            $NumeroModulos="2";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan - $SOCWEB2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=12;
            $CreditosParaOptativa=26;
            $CreditosModulo=array(26,9);
            $TotalCreditosPrograma=35;
            $CreditosMatriculaMaximo=9;
            $CreditosMinimoGrado=18;
            $Asignaturas=array(
                array(211,215,141,142,143,144,145,146),
                array(147,148,149,1410)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'GESBIX':
        case 86215:
            $NombrePrograma=$GESBIX1;
            $CodigoProgramaLiteral="GESBIX";
            $FAC="FACBAS";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD BÁSICA";
            $CodigoNIE="86215"; $VersionPensum="1"; $Plan="Normal";
            $NumeroModulos="2";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan - $GESBIX2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=13;
            $CreditosParaOptativa=24;
            $CreditosModulo=array(24,23);
            $TotalCreditosPrograma=47;
            $CreditosMatriculaMaximo=12;
            $CreditosMinimoGrado=24;
            $Asignaturas=array(
                array(2018,151,152,153,154,106,155),
                array(156,232,233,2236,157,158)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

    #FACULTAD TECNOLOGÍAS PLANES NORMALES
        case 'DIGHUM':
        case 86216:
            $NombrePrograma=$DIGHUM1;
            $CodigoProgramaLiteral="DIGHUM";
            $FAC="FACTEC";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD TECNOLOGÍAS";
            $CodigoNIE="86216"; $VersionPensum="2"; $Plan="Normal";
            $NumeroModulos="5";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan - $DIGHUM2 - $NumeroModulos módulos ";
             $TotalAsignaturasPrograma=27;
            $CreditosParaOptativa=20;
            $CreditosModulo=array(20,22,18,15,11);
            $TotalCreditosPrograma=86;
            $CreditosMatriculaMaximo=12;
            $CreditosMinimoGrado=43;
            $Asignaturas=array(
                array(106,214,161,162),
                array(163,164,165,166,107,167,168),
                array(169,1610,1611,1612,1613),
                array(1614,1615,1616,1617,1618,1619),
                array(1620,1621,1622,1623,148)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'FINFPA':
        case 86217:
            $NombrePrograma=$FINFPA1;
            $CodigoProgramaLiteral="FINFPA";
            $FAC="FACTEC";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD TECNOLOGÍAS";
            $CodigoNIE="86217"; $VersionPensum="2"; $Plan="Normal";
            $NumeroModulos="5";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan - $FINFPA2 - $NumeroModulos módulos ";
             $TotalAsignaturasPrograma=37;
            $CreditosParaOptativa=39;
            $CreditosModulo=array(39,24,21,26,21);
            $TotalCreditosPrograma=131;
            $CreditosMatriculaMaximo=21;
            $CreditosMinimoGrado=66;
            $Asignaturas=array(
                array(226,2236,101,229,2220,223,171),
                array(228,2228,2212,172,173,174),
                array(2214,2215,2216,2210,175,176,177,178),
                array(2217,2218,2211,179,2240,2239,1710,1711,1712),
                array(1713,1714,1715,1716,1717,1718,1719)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'IDEPER':
        case 86218:
            $NombrePrograma=$IDEPER1;
            $CodigoProgramaLiteral="IDEPER";
            $FAC="FACTEC";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD TECNOLOGÍAS";
            $CodigoNIE="86218"; $VersionPensum="2"; $Plan="Normal";
            $NumeroModulos="5";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan - $IDEPER2 - $NumeroModulos módulos ";
             $TotalAsignaturasPrograma=33;
            $CreditosParaOptativa=25;
            $CreditosModulo=array(25,22,19,17,15);
            $TotalCreditosPrograma=98;
            $CreditosMatriculaMaximo=15;
            $CreditosMinimoGrado=66;
            $Asignaturas=array(
                array(181,182,183,184,185,126,186),
                array(187,188,189,1810,1811,1812,1813),
                array(1814,1815,1816,1817,1819,1820),
                array(1821,1822,1823,1824,1825,1826,1827),
                array(1828,1829,108,1830,1010)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'GESHET':
        case 86219:
            $NombrePrograma=$GESHET1;
            $CodigoProgramaLiteral="GESHET";
            $FAC="FACTEC";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD TECNOLOGÍAS";
            $CodigoNIE="86219"; $VersionPensum="2"; $Plan="Normal";
            $NumeroModulos="5";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan - $GESHET2 - $NumeroModulos módulos ";
             $TotalAsignaturasPrograma=32;
            $CreditosParaOptativa=41;
            $CreditosModulo=array(41,24,25,11,19);
            $TotalCreditosPrograma=120;
            $CreditosMatriculaMaximo=19;
            $CreditosMinimoGrado=60;
            $Asignaturas=array(
                array(191,192,232,233,101,2214,193,194,226),
                array(236,237,228,195,196,197),
                array(198,199,1910,2310,2319,1911,106),
                array(107,2332,1912),
                array(1913,1914,1616,1811,1915,1916,1917)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'GESHOM':
        case 86220:
            $NombrePrograma=$GESHOM1;
            $CodigoProgramaLiteral="GESHOM";
            $FAC="FACTEC";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD TECNOLOGÍAS";
            $CodigoNIE="86220"; $VersionPensum="2"; $Plan="Normal";
            $NumeroModulos="5";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan - $GESHOM2 - $NumeroModulos módulos ";
             $TotalAsignaturasPrograma=35;
            $CreditosParaOptativa=26;
            $CreditosModulo=array(26,18,22,26,19);
            $TotalCreditosPrograma=111;
            $CreditosMatriculaMaximo=17;
            $CreditosMinimoGrado=56;
            $Asignaturas=array(
                array(106,201,202,203,101,204,205),
                array(107,1811,206,207,208,209),
                array(2010,2011,2012,2013,2014,2015,2016,2017),
                array(2018,2318,2019,2020,2021,2022,2023),
                array(2024,2331,2025,2026,2027,2028,2029)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break; 

    #FACULTAD INGENIERÍAS PLANES NORMALES
        case 'YOUTUB':
        case 86221:
            $NombrePrograma=$YOUTUB1;
            $CodigoProgramaLiteral="YOUTUB";
            $FAC="FACING";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD INGENIERÍAS";
            $CodigoNIE="86221"; $VersionPensum="2"; $Plan="Normal";
            $NumeroModulos="7";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan - $YOUTUB2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=45;
            $CreditosParaOptativa=17;
            $CreditosModulo=array(17,26,19,38,20,20,20);
            $TotalCreditosPrograma=160;
            $CreditosMatriculaMaximo=16;    $CreditosMatriculaMinimo=0;
            $CreditosMinimoGrado=80;
            $CreditosParaElectiva=0;
            $Asignaturas=array(
                array(211,212,213,214,215),
                array(106,222,216,217,218,219,2110),
                array(2111,2112,2114,2115),
                array(2116,2231,107,2117,2118,2318,2119,149),
                array(2120,2121,2122,2123,2124,2125),
                array(2126,2127,2128,2129,2130,2131),
                array(2132,2133,2134,148,2135,2136,2137,2138)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'FINANC':
        case 86222:
            $NombrePrograma=$FINANC1;
            $CodigoProgramaLiteral="FINANC";
            $FAC="FACING";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD INGENIERÍAS";
            $CodigoNIE="86222"; $VersionPensum="2"; $Plan="Normal";
            $NumeroModulos="7";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan - $FINANC2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=51;
            $CreditosParaOptativa=36;
            $CreditosModulo=array(36,34,23,21,35,12,32);
            $TotalCreditosPrograma=193;
            $CreditosMatriculaMaximo=21;    $CreditosMatriculaMinimo=0;
            $CreditosMinimoGrado=97;
            $CreditosParaElectiva=0;
            $Asignaturas=array(
                array(221,222,223,224,225,101,226),
                array(227,133,228,229,2210,2211,216,102),
                array(2212,2213,2214,2215,2216,2217,2218,2219),
                array(2220,2221,2222,2223,2224,2225),
                array(2226,2227,2228,2229,103,2230,2231,2232),
                array(104,2233,109,2234,2235,108),
                array(105,2236,2237,2238,2239,1710,2240,2241)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'SEXUAL':
        case 86223:
            $NombrePrograma=$SEXUAL1;
            $CodigoProgramaLiteral="SEXUAL";
            $FAC="FACING";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD INGENIERÍAS";
            $CodigoNIE="86223"; $VersionPensum="2"; $Plan="Normal";
            $NumeroModulos="7";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan - $SEXUAL2 - $NumeroModulos módulos ";
            $NombrePlanEstudiosOld="Umc:Pregrado - $CodigoNIE:$VersionPensum - $Plan - $SEXUAL2 - $NumeroModulos módulos - NoMatrícula($SMActual)";
            $TotalAsignaturasPrograma=53;
            $CreditosParaOptativa=30;
            $CreditosModulo=array(30,33,25,32,19,29,38);
            $TotalCreditosPrograma=204;
            $CreditosMatriculaMaximo=22;    $CreditosMatriculaMinimo=0;
            $CreditosMinimoGrado=102;
            $CreditosParaElectiva=120;
            $Asignaturas=array(
                array(231,232,233,226,234,211,235),
                array(236,237,101,2219,134,238,239),
                array(2310,2311,228,2312,2313,2314,2315),
                array(2316,2317,2318,2319,2320,2321,2322,2323),
                array(2324,2325,2326,2327,2328,2329),
                array(2330,2331,2332,2333,2334,2335,2336,2337),
                array(2338,2339,2340,2233,2341,2342,2343,2344,2345)
            );
            $AsignaturasElectiva=array(2346,2347,2348,2349,2350,2351,2352,2353,2354,2355,2356);
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'FRACAS':
        case 86224:
            $NombrePrograma=$FRACAS1;
            $CodigoProgramaLiteral="FRACAS";
            $FAC="FACING";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD INGENIERÍAS";
            $CodigoNIE="86224"; $VersionPensum="2"; $Plan="Normal";
            $NumeroModulos="7";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan - $FRACAS2 - $NumeroModulos módulos ";
			      $NombrePlanEstudiosOld="Umc:Pregrado - $CodigoNIE:$VersionPensum - $Plan - $FRACAS2 - $NumeroModulos módulos - NoMatrícula($SMActual)";
            $TotalAsignaturasPrograma=52;
            $CreditosParaOptativa=26;
            $CreditosModulo=array(26,31,30,16,29,18,40);
            $TotalCreditosPrograma=190;
            $CreditosMatriculaMaximo=20;    $CreditosMatriculaMinimo=0;
            $CreditosMinimoGrado=95;
            $CreditosParaElectiva=0;
            $Asignaturas=array(
                array(106,125,126,221,131,241),
                array(2232,224,242,243,137,107,244),
                array(245,246,165,247,248,249,2410,2411),
                array(2412,2413,2414,2415,174,175,2416),
                array(2328,2417,2418,1910,2420,2421,2422,2423),
                array(2424,2425,2426,2427,1916),
                array(2428,149,216,2318,235,2326,2429,2430,2431,2432)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'PRESID':
        case 86229:
            $NombrePrograma=$PRESID1;
            $CodigoProgramaLiteral="PRESID";
            $FAC="FACING";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD INGENIERÍAS";
            $CodigoNIE="86229"; $VersionPensum="2"; $Plan="Normal";
            $NumeroModulos="7";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan - $PRESID2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=71;
            $CreditosParaOptativa=39;
            $CreditosModulo=array(39,46,39,27,32,40,40);
            $TotalCreditosPrograma=263;
            $CreditosMatriculaMaximo=31;    $CreditosMatriculaMinimo=6;
            $CreditosMinimoGrado=132;
            $CreditosParaElectiva=151;
            $Asignaturas=array(
                array(291,292,293,125,126,118,101,106,108,109),
                array(294,295,296,297,298,299,2910,134,1410,102),
                array(2911,2912,2913,2914,2915,2916,2917,2918,103,107),
                array(2919,2920,2921,104,164,1613,1620,1621,1622,1623),
                array(2922,2923,2924,2925,2926,2927,105,1719,1814,1820),
                array(2928,2929,2930,2931,2932,2933,2934,2135,2221,1010),
                array(2935,2936,2937,2938,2939,2940,2941,2942,2431,2229)
            );
            $AsignaturasElectiva=array(2944,2945,2946,2947,2948,2949,2950,2951,2952);
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'DESPER':
        case 86230:
            $NombrePrograma=$DESPER1;
            $CodigoProgramaLiteral="DESPER";
            $FAC="FACING";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD INGENIERÍAS";
            $CodigoNIE="86230"; $VersionPensum="1"; $Plan="Normal";
            $NumeroModulos="7";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan - $DESPER2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=34;
            $CreditosParaOptativa=26;
            $CreditosModulo=array(26,15,18,28,21,16,13);
            $TotalCreditosPrograma=137;
            $CreditosMatriculaMaximo=13;    $CreditosMatriculaMinimo=0;
            $CreditosMinimoGrado=69;
            $CreditosParaElectiva=0;
            $Asignaturas=array(
                array(106,101,301,222,302,303),
                array(107,2231,304,305),
                array(102,306,307,308),
                array(309,3010,3011,3012,3013,1613),
                array(3014,3015,3016,108,149,1820),
                array(3017,3018,3019,3020),
                array(3021,3022,3023,3024)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'GLAMUR':
        case 86231:
            $NombrePrograma=$GLAMUR1;
            $CodigoProgramaLiteral="GLAMUR";
            $FAC="FACING";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD INGENIERÍAS";
            $CodigoNIE="86231"; $VersionPensum="1"; $Plan="Normal";
            $NumeroModulos="7";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan - $GLAMUR2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=33;
            $CreditosParaOptativa=29;
            $CreditosModulo=array(29,23,27,18,21,26,30);
            $TotalCreditosPrograma=174;
            $CreditosMatriculaMaximo=18;    $CreditosMatriculaMinimo=0;
            $CreditosMinimoGrado=87;
            $CreditosParaElectiva=0;
            $Asignaturas=array(
                array(106,101,311,312,313),
                array(107,314,1611,1615),
                array(102,315,316,317,318),
                array(319,3110,3111,304,3017),
                array(3112,3113,3114,3115,2318),
                array(3116,3117,3118,3119,3420),
                array(3120,3121,3122,3123)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'JUVENT':
        case 86234:
            $NombrePrograma=$JUVENT1;
            $CodigoProgramaLiteral="JUVENT";
            $FAC="FACING";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD INGENIERÍAS";
            $CodigoNIE="86234"; $VersionPensum="1"; $Plan="Normal";
            $NumeroModulos="7";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan - $JUVENT2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=46;
            $CreditosParaOptativa=21;
            $CreditosModulo=array(21,13,18,13,25,25,11);
            $TotalCreditosPrograma=126;
            $CreditosMatriculaMaximo=11;    $CreditosMatriculaMinimo=0;
            $CreditosMinimoGrado=63;
            $CreditosParaElectiva=0;
            $Asignaturas=array(
                array(101,341,342,343,344,345,2325),
                array(346,347,348,106,2330,235),
                array(349,3410,3411,3412,102,107,2313),
                array(3413,108,1820,3414,2318),
                array(226,303,1613,3415,3416,2331,2120,2128),
                array(3417,232,2323,3418,1611),
                array(3419,236,3420,3421,3422,3423,3424)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

    #FACULTAD INGENIERÍAS PLANES EN INICIALIZACIÓN
        case 'YOUTUB2':
            $NombrePrograma=$YOUTUB1." INICIALIZACIÓN";
            $CodigoProgramaLiteral="";
            $FAC="FACING";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD INGENIERÍAS";
            $CodigoNIE="86221"; $VersionPensum="2"; $Plan="Inicialización";
            $NumeroModulos="8";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan $YOUTUB2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=45;
            $CreditosParaOptativa=17;
            $CreditosModulo=array(17,26,19,38,20,20,20);
            $TotalCreditosPrograma=160;
            $CreditosMatriculaMaximo=16;
            $CreditosMinimoGrado=80;
            $CreditosParaElectiva=0;
            $Asignaturas=array(
                array(1013,211,101),
                array(212,213,214,215),
                array(106,222,216,217,218,219,2110),
                array(2111,2112,2114,2115),
                array(2116,2231,107,2117,2118,2318,2119,149),
                array(2120,2121,2122,2123,2124,2125),
                array(2126,2127,2128,2129,2130,2131),
                array(2132,2133,2134,148,2135,2136,2137,2138)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'FINANC2':
            $NombrePrograma=$FINANC1." INICIALIZACIÓN";
            $CodigoProgramaLiteral="";
            $FAC="FACING";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD INGENIERÍAS";
            $CodigoNIE="86222"; $VersionPensum="2"; $Plan="Inicialización";
            $NumeroModulos="8";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan $FINANC2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=51;
            $CreditosParaOptativa=36;
            $CreditosModulo=array(36,34,23,21,35,12,32);
            $TotalCreditosPrograma=193;
            $CreditosMatriculaMaximo=21;
            $CreditosMinimoGrado=97;
            $CreditosParaElectiva=0;
            $Asignaturas=array(
                array(1013,221,101),
                array(222,223,224,225,226),
                array(227,133,228,229,2210,2211,216,102),
                array(2212,2213,2214,2215,2216,2217,2218,2219),
                array(2220,2221,2222,2223,2224,2225),
                array(2226,2227,2228,2229,103,2230,2231,2232),
                array(104,2233,109,2234,2235,108),
                array(105,2236,2237,2238,2239,1710,2240,2241)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'SEXUAL2':
            $NombrePrograma=$SEXUAL1." INICIALIZACIÓN";
            $CodigoProgramaLiteral="";
            $FAC="FACING";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD INGENIERÍAS";
            $CodigoNIE="86223"; $VersionPensum="2"; $Plan="Inicialización";
            $NumeroModulos="8";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan $SEXUAL2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=52;
            $CreditosParaOptativa=30;
            $CreditosModulo=array(30,33,25,32,19,29,36);
            $TotalCreditosPrograma=204;
            $CreditosMatriculaMaximo=22;
            $CreditosMinimoGrado=102;
            $CreditosParaElectiva=120;
            $Asignaturas=array(
                array(1013,101,231),
                array(232,233,226,234,211,235),
                array(236,237,2219,134,238,239),
                array(2310,2311,228,2312,2313,2314,2315),
                array(2316,2317,2318,2319,2320,2321,2322,2323),
                array(2324,2325,2326,2327,2328,2329),
                array(2330,2331,2332,2333,2334,2335,2336,2337),
                array(2338,2339,2340,2233,2341,2342,2343,2344)
            );
            $AsignaturasElectiva=array(2345,2346,2347,2348,2349,2350,2351,2352,2353,2354,2355,2356);
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'FRACAS2':
            $NombrePrograma=$FRACAS1." INICIALIZACIÓN";
            $CodigoProgramaLiteral="";
            $FAC="FACING";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD INGENIERÍAS";
            $CodigoNIE="86224"; $VersionPensum="2"; $Plan="Inicialización";
            $NumeroModulos="8";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan $FRACAS2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=52;
            $CreditosParaOptativa=26;
            $CreditosModulo=array(26,31,30,16,29,18,40);
            $TotalCreditosPrograma=190;
            $CreditosMatriculaMaximo=20;
            $CreditosMinimoGrado=95;
            $CreditosParaElectiva=0;
            $Asignaturas=array(
                array(1013,101,241),
                array(106,125,126,221,131),
                array(2232,224,242,243,137,107,244),
                array(245,246,165,247,248,249,2410,2411),
                array(2412,2413,2414,2415,174,175,2416),
                array(2328,2417,2418,1910,2420,2421,2422,2423),
                array(2424,2425,2426,2427,1916),
                array(2428,149,216,2318,235,2326,2429,2430,2431,2432)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'PRESID2':
            $NombrePrograma=$PRESID1." INICIALIZACIÓN";
            $CodigoProgramaLiteral="";
            $FAC="FACING";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD INGENIERÍAS";
            $CodigoNIE="86229"; $VersionPensum="2"; $Plan="Inicialización";
            $NumeroModulos="8";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan $PRESID2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=71;
            $CreditosParaOptativa=39;
            $CreditosModulo=array(39,46,39,27,32,40,40);
            $TotalCreditosPrograma=263;
            $CreditosMatriculaMaximo=31;
            $CreditosMinimoGrado=132;
            $CreditosParaElectiva=151;
            $Asignaturas=array(
                array(1013,291,101),
                array(292,293,125,126,118,106,108,109),
                array(294,295,296,297,298,299,2910,134,1410,102),
                array(2911,2912,2913,2914,2915,2916,2917,2918,103,107),
                array(2919,2920,2921,104,164,1613,1620,1621,1622,1623),
                array(2922,2923,2924,2925,2926,2927,105,1719,1814,1820),
                array(2928,2929,2930,2931,2932,2933,2934,2135,2221,1010),
                array(2935,2936,2937,2938,2939,2940,2941,2942,2431,2229)
            );
            $AsignaturasElectiva=array(2943,2944,2945,2946,2947,2948,2949,2950,2951,2952);
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'DESPER2':
            $NombrePrograma=$DESPER1." INICIALIZACIÓN";
            $CodigoProgramaLiteral="";
            $FAC="FACING";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD INGENIERÍAS";
            $CodigoNIE="86230"; $VersionPensum="1"; $Plan="Inicialización";
            $NumeroModulos="8";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan $DESPER2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=34;
            $CreditosParaOptativa=26;
            $CreditosModulo=array(26,15,18,28,21,16,13);
            $TotalCreditosPrograma=137;
            $CreditosMatriculaMaximo=13;
            $CreditosMinimoGrado=69;
            $CreditosParaElectiva=0;
            $Asignaturas=array(
                array(1013,301,101),
                array(106,222,302,303),
                array(107,2231,304,305),
                array(102,306,307,308),
                array(309,3010,3011,3012,3013,1613),
                array(3014,3015,3016,108,149,1820),
                array(3017,3018,3019,3020),
                array(3021,3022,3023,3024)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'GLAMUR2':
            $NombrePrograma=$GLAMUR1;
            $CodigoProgramaLiteral="";
            $FAC="FACING";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD INGENIERÍAS";
            $CodigoNIE="86231"; $VersionPensum="1"; $Plan="Inicialización";
            $NumeroModulos="7";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan $GLAMUR2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=33;
            $CreditosParaOptativa=29;
            $CreditosModulo=array(29,23,27,18,21,26,30);
            $TotalCreditosPrograma=174;
            $CreditosMatriculaMaximo=18;
            $CreditosMinimoGrado=87;
            $CreditosParaElectiva=0;
            $Asignaturas=array(
                array(1013,311,101),
                array(106,312,313),
                array(107,314,1611,1615),
                array(102,315,316,317,318),
                array(319,3110,3111,304,3017),
                array(3112,3113,3114,3115,2318),
                array(3116,3117,3118,3119,3420),
                array(3120,3121,3122,3123)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

        case 'JUVENT2':
            $NombrePrograma=$JUVENT1;
            $CodigoProgramaLiteral="";
            $FAC="FACING";
            $TipoGradoPrograma="PREGRADO";
            $Facultad="FACULTAD INGENIERÍAS";
            $CodigoNIE="86234"; $VersionPensum="1"; $Plan="Inicialización";
            $NumeroModulos="7";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPregrado - $CodigoNIE:$VersionPensum - $Plan $JUVENT2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=46;
            $CreditosParaOptativa=21;
            $CreditosModulo=array(21,13,18,13,25,25,11);
            $TotalCreditosPrograma=126;
            $CreditosMatriculaMaximo=11;
            $CreditosMinimoGrado=63;
            $CreditosParaElectiva=0;
            $Asignaturas=array(
                array(1013,101,341),
                array(342,343,344,345,2325),
                array(346,347,348,106,2330,235),
                array(349,3410,3411,3412,102,107,2313),
                array(3413,108,1820,3414,2318),
                array(226,303,1613,3415,3416,2331,2120,2128),
                array(3417,232,2323,3418,1611),
                array(3419,236,3420,3421,3422,3423,3424)
            );
            $TipoPIN="PRE";
            $PermisoCancelar=TRUE;
        break;

    #FACULTAD SUPERIOR
        case 'SEXAPI':
        case 86225:
            $NombrePrograma=$SEXAPI1;
            $CodigoProgramaLiteral="SEXAPI";
            $FAC="FACSUP";
            $TipoGradoPrograma="POSTGRADO";
            $Facultad="FACULTAD SUPERIOR";
            $CodigoNIE="86225"; $VersionPensum="1"; $Plan="Normal";
            $NumeroModulos="4";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPostgrado -$CodigoNIE:$VersionPensum -$Plan - $SEXAPI2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=21;
            $CreditosParaOptativa=24;
            $CreditosModulo=array(24,22,26,28);
            $TotalCreditosPrograma=100;
            $CreditosMatriculaMaximo=21;
            $CreditosMinimoGrado=50;
            $CreditosParaElectiva=0;
            $Asignaturas=array(
                array(251,252,253,254,255),
                array(256,257,258,259,2510),
                array(2511,2512,2513,2514,2515,2516),
                array(2517,2518,2519,2520,2521)
            );
            $TipoPIN="POST";
            $PermisoCancelar=TRUE;
        break;

        case 'FIPMIT':
        case 86226:
            $NombrePrograma=$FIPMIT1;
            $CodigoProgramaLiteral="FIPMIT";
            $FAC="FACSUP";
            $TipoGradoPrograma="POSTGRADO";
            $Facultad="FACULTAD SUPERIOR";
            $CodigoNIE="86226"; $VersionPensum="1"; $Plan="Normal";
            $NumeroModulos="4";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPostgrado -$CodigoNIE:$VersionPensum -$Plan - $FIPMIT2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=17;
            $CreditosParaOptativa=18;
            $CreditosModulo=array(18,20,18,20);
            $TotalCreditosPrograma=76;
            $CreditosMatriculaMaximo=15;
            $CreditosMinimoGrado=38;
            $CreditosParaElectiva=0;
            $Asignaturas=array(
                array(261,262,263,264),
                array(265,266,267,268,269),
                array(2610,2611,2612,2613),
                array(2614,2615,2616,2617)
            );
            $TipoPIN="POST";
            $PermisoCancelar=TRUE;
        break;

        case 'ENAMAT':
        case 86227:
            $NombrePrograma=$ENAMAT1;
            $CodigoProgramaLiteral="ENAMAT";
            $FAC="FACSUP";
            $TipoGradoPrograma="POSTGRADO";
            $Facultad="FACULTAD SUPERIOR";
            $CodigoNIE="86227"; $VersionPensum="1"; $Plan="Normal";
            $NumeroModulos="4";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPostgrado -$CodigoNIE:$VersionPensum -$Plan - $ENAMAT2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=17;
            $CreditosParaOptativa=18;
            $CreditosModulo=array(18,14,24,30);
            $TotalCreditosPrograma=86;
            $CreditosMatriculaMaximo=18;
            $CreditosMinimoGrado=43;
            $CreditosParaElectiva=0;
            $Asignaturas=array(
                array(271,272,273,274),
                array(275,276,277),
                array(278,279,2710,2711,2712),
                array(2713,2714,2715,2716,2717)
            );
            $TipoPIN="POST";
            $PermisoCancelar=TRUE;
        break;

        case 'IDIOAV':
        case 86228:
            $NombrePrograma=$IDIOAV1;
            $CodigoProgramaLiteral="IDIOAV";
            $FAC="FACSUP";
            $TipoGradoPrograma="POSTGRADO";
            $Facultad="FACULTAD SUPERIOR";
            $CodigoNIE="86228"; $VersionPensum="1"; $Plan="Normal";
            $NumeroModulos="4";
            $NombrePlanEstudios="Umc:$SMActual:$InfoPostgrado -$CodigoNIE:$VersionPensum -$Plan - $IDIOAV2 - $NumeroModulos módulos ";
            $TotalAsignaturasPrograma=24;
            $CreditosParaOptativa=20;
            $CreditosModulo=array(20,20,32,38);
            $TotalCreditosPrograma=110;
            $CreditosMatriculaMaximo=24;
            $CreditosMinimoGrado=55;
            $CreditosParaElectiva=0;
            $Asignaturas=array(
                array(281,282,283,284,285),
                array(286,287,288,289,2810),
                array(2811,2812,2813,2814,2815,2816,2817),
                array(2818,2819,2820,2821,2822,2823,2824)
            );
            $TipoPIN="POST";
            $PermisoCancelar=TRUE;
        break;

    #FACULTAD CONTINUA
        case 'CREDES':
        case 86235:
            $NombrePrograma=$CREDES1;
            $CodigoProgramaLiteral="CREDES";
            $FAC="FACCON";
            $TipoGradoPrograma="POSTGRADO";
            $Facultad="FACULTAD CONTINUA";
            $CodigoNIE="86235"; $VersionPensum="1"; $Plan="Normal";
            $NumeroModulos="1";
            $TotalAsignaturasPrograma=26;
            $TotalCreditosPrograma=104;
            $CreditosMinimoGrado=0;
            $CreditosParaOptativa=0;
            $CreditosMatriculaMaximo=00;
            $CreditosParaElectiva=0;
            $NombrePlanEstudios="Umc:$SMActual:$InfoPostgrado -$CodigoNIE:$VersionPensum -$Plan - $CREDES2 - $TotalAsignaturasPrograma asignaturas";
            $PreAjusteMinimo=52;
            $Asignaturas=array(
                array(351,352,353,354,355,356,357,358,359,3510,3511,3512,3513,3514,3515,3516,3517,3518,3519,3515,3516,3517,3518,3519,3520,3521,3522,3523,3524,3525,3526),
            );
            $TipoPIN="POST";
            $PermisoCancelar=NULL;
        break;

    default:
        $NombrePrograma="Error de datos.";
        $CodigoProgramaLiteral="";
            $FAC="Error de datos.";
            $TipoGradoPrograma="Error de datos";
            $Facultad="Error de datos.";
            $CodigoNIE=""; $VersionPensum=""; $Plan="";
            $NumeroModulos="0";
            $NombrePlanEstudios="Error de datos.";
            $TotalAsignaturasPrograma="Error de datos.";
            $TotalCreditosPrograma="Error de datos.";
            $CreditosMinimoGrado="Error de datos.";
            $CreditosParaOptativa=0;
            $CreditosMatriculaMaximo=00;
            $CreditosParaElectiva=0;
            $TipoPIN="POST";
            $PermisoCancelar=NULL;
        break;  $CreditosMatriculaMinimo=0;
}

?>

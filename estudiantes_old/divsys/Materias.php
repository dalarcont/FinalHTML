<?php
/* Universidad Falsa */
/* División Superior de Sistemas Informáticos - División Superior Registro y Control - División Superior Planeación Académica */
/* Archivo de asignaturas */
/* LOS PROGRAMAS ESTÁN EN TAL ORDEN IDÉNTICO AL QUE SE ENCUENTRAN EN EL ARCHIVO DE PLANEACIÓN ACADÉMICA */
/* Formato: */
/* 'CódigoNumérico' 'Código literal' "Nombre normal mayúscula" "Nombre corto" */

switch ($MATCODE) {

//FACULAD MÍSERA
	case '101': case 'MGB1':
		$MateriaNombre="MATEMÁTICAS I"; $CodigoLiteral="MGB1"; break;
	case '102': case 'MGB2':
		$MateriaNombre="MATEMÁTICAS II"; $CodigoLiteral="MGB2"; break;
	case '103': case 'MGB3':
		$MateriaNombre="MATEMÁTICAS III"; $CodigoLiteral="MGB3"; break;
	case '104': case 'MGB4':
		$MateriaNombre="MATEMÁTICAS IV"; $CodigoLiteral="MGB4"; break;
	case '105': case 'MGB5':
		$MateriaNombre="MATEMÁTICAS V"; $CodigoLiteral="MGB5"; break;
	case '106': case 'MGB6':
		$MateriaNombre="DIGNIDAD I"; $CodigoLiteral="MGB6"; break;
	case '107': case 'MGB7':
		$MateriaNombre="DIGNIDAD II"; $CodigoLiteral="MGB7"; break;
	case '108': case 'MGB8':
		$MateriaNombre="LEYES"; $CodigoLiteral="MGB8"; break;
	case '109': case 'MGB9':
		$MateriaNombre="ANÁLISIS Y ORÁLISIS"; $CodigoLiteral="MGB9"; break;
	case '1010': case 'MGB10':
		$MateriaNombre="SIMULACIÓN"; $CodigoLiteral="MGB10"; break;
	case '1013': case 'MGB0I':
		$MateriaNombre="INICIALIZACIÓN MÍSERO-INGENIERIL"; $CodigoLiteral="MGB0I"; break;
	case '1014': case 'MGB0T':
		$MateriaNombre="INICIALIZACIÓN MÍSERO-TECNOLÓGICO"; $CodigoLiteral="MGB0T"; break;
	case '1011': case 'MGB11':
		$MateriaNombre="CULTURA CIUDADANA"; $CodigoLiteral="MGB11"; break;
	case '1012': case 'MGB12':
		$MateriaNombre="CÁTEDRA Universidad FalsaBLILÍSTICA"; $CodigoLiteral="MGB12"; break;

//FACULTAD BASICA
	//ORTGRA
		case '111': case 'BOR11':
			$MateriaNombre="CASTELLANO"; $CodigoLiteral="BOR11"; break;
		case '112': case 'BOR12':
			$MateriaNombre="COMPRENSIÓN ORAL"; $CodigoLiteral="BOR12"; break;
		case '113': case 'BOR13':
			$MateriaNombre="COMPRENSIÓN ESCRITA I"; $CodigoLiteral="BOR13"; break;
		case '114': case 'BOR14':
			$MateriaNombre="TÉCNICAS ESCRITURA"; $CodigoLiteral="BOR14"; break;
		case '115': case 'BOR15':
			$MateriaNombre="GRAMÁTICA BÁSICA"; $CodigoLiteral="BOR15"; break;
		case '116': case 'BOR16':
			$MateriaNombre="FORMATOS REGIONALES"; $CodigoLiteral="BOR16"; break;
		case '117': case 'BOR27':
			$MateriaNombre="COMPRENSIÓN ESCRITA II"; $CodigoLiteral="BOR27"; break;
		case '118': case 'BOR28':
			$MateriaNombre="ORTOGRAFÍA"; $CodigoLiteral="BOR28"; break;
		case '119': case 'BOR29':
			$MateriaNombre="NORMAS BÁSICAS DOCUMENTOS"; $CodigoLiteral="BOR29"; break;
		case '1110': case 'BOR210':
			$MateriaNombre="DIGNIDAD LINGUÍSTICA"; $CodigoLiteral="BOR210"; break;

	//DIGSEN
		case '121': case 'BDS11':
			$MateriaNombre="NOVIAZGO"; $CodigoLiteral="BDS11"; break;
		case '122': case 'BDS12':
			$MateriaNombre="SENTIMIENTO MASCULINO I"; $CodigoLiteral="BDS12"; break;
		case '123': case 'BDS13':
			$MateriaNombre="SENTIMIENTO FEMENINO I"; $CodigoLiteral="BDS13"; break;
		case '124': case 'BDS14':
			$MateriaNombre="PSICOLOGÍA SENTIMENTAL"; $CodigoLiteral="BDS14"; break;
		case '125': case 'BDS15':
			$MateriaNombre="RELACIONES PERSONALES"; $CodigoLiteral="BDS15"; break;
		case '126': case 'BDS16':
			$MateriaNombre="RELACIONES PÚBLICAS"; $CodigoLiteral="BDS16"; break;
		case '127': case 'BDS27':
			$MateriaNombre="AUTOESTIMA SENTIMENTAL"; $CodigoLiteral="BDS27"; break;
		case '128': case 'BDS28':
			$MateriaNombre="SENTIMENTALISMO GENERAL"; $CodigoLiteral="BDS28"; break;
		case '129': case 'BDS29':
			$MateriaNombre="RELACIONES FALLIDAS"; $CodigoLiteral="BDS29"; break;
		case '1210': case 'BDS210':
			$MateriaNombre="ANTI-EX RELACIONES"; $CodigoLiteral="BDS210"; break;

	//MISERA
		case '131': case 'BMI11':
			$MateriaNombre="ÑEROLOGÍA MONETARIA"; $CodigoLiteral="BMI11"; break;
		case '132': case 'BMI12':
			$MateriaNombre="CONTROL REPRODUCCIÓN"; $CodigoLiteral="BMI12"; break;
		case '133': case 'BMI13':
			$MateriaNombre="METODOLOGÍA DEL COMPARTIR"; $CodigoLiteral="BMI13"; break;
		case '134': case 'BMI24':
			$MateriaNombre="ESTRATIFICACIÓN"; $CodigoLiteral="BMI24"; break;
		case '135': case 'BMI25':
			$MateriaNombre="FORMALIDAD LABORAL"; $CodigoLiteral="BMI25"; break;
		case '136': case 'BMI26':
			$MateriaNombre="GASTOS Falsos"; $CodigoLiteral="BMI26"; break;
		case '137': case 'BMI27':
			$MateriaNombre="TACAÑISMO"; $CodigoLiteral="BMI27"; break;

	//SOCWEB
		case '141': case 'BSI11':
			$MateriaNombre="FENÓMENOS"; $CodigoLiteral="BSI11"; break;
		case '142': case 'BSI12':
			$MateriaNombre="CRÍTICA FOTOGRÁFICA"; $CodigoLiteral="BSI12"; break;
		case '143': case 'BSI13':
			$MateriaNombre="CRÍTICA AUDIO-VISUAL"; $CodigoLiteral="BSI13"; break;
		case '144': case 'BSI14':
			$MateriaNombre="ARENA GENERAL"; $CodigoLiteral="BSI14"; break;
		case '145': case 'BSI15':
			$MateriaNombre="ARENA RELIGIOSA"; $CodigoLiteral="BSI15"; break;
		case '146': case 'BSI16':
			$MateriaNombre="HIPOCRESÍA SOCIAL VIRTUAL"; $CodigoLiteral="BSI16"; break;
		case '147': case 'BSI27':
			$MateriaNombre="MULTIMEDIA ESTRATIFICADA"; $CodigoLiteral="BSI27"; break;
		case '148': case 'BSI28':
			$MateriaNombre="DIGNIDAD SOCIAL INFORMÁTICA"; $CodigoLiteral="BSI28"; break;
		case '149': case 'BSI29':
			$MateriaNombre="REDES SOCIALES"; $CodigoLiteral="BSI29"; break;
		case '1410': case 'BSI210':
			$MateriaNombre="POLÍTICA VIRTUAL"; $CodigoLiteral="BSI210"; break;

	//GESBIX
		case '151': case 'BGB11':
			$MateriaNombre="DOBLE VÍA LÓGICO-SEXUAL"; $CodigoLiteral="BGB11"; break;
		case '152': case 'BGB12':
			$MateriaNombre="DOBLE INTIMIDÁ"; $CodigoLiteral="BGB12"; break;
		case '153': case 'BGB13':
			$MateriaNombre="DOBLE DECISIÓN"; $CodigoLiteral="BGB13"; break;
		case '154': case 'BGB14':
			$MateriaNombre="DOBLE DIGNIDAD"; $CodigoLiteral="BGB14"; break;
		case '155': case 'BGB15':
			$MateriaNombre="ADAPTATIVA DE ROL"; $CodigoLiteral="BGB15"; break;
		case '156': case 'BGB26':
			$MateriaNombre="INDECISIONES"; $CodigoLiteral="BGB26"; break;
		case '157': case 'BGB27':
			$MateriaNombre="MULTIPLESEXUALISMO"; $CodigoLiteral="BGB27"; break;
		case '158': case 'BGB28':
			$MateriaNombre="PLACER VARIADO"; $CodigoLiteral="BGB28"; break;

//FACULTAD TECNOLOGÍAS
	//DIGHUM
		case '161': case 'TDH11':
			$MateriaNombre="CARÁCTER I"; $CodigoLiteral="TDH11"; break;
		case '162': case 'TDH12':
			$MateriaNombre="SOCIEDAD I"; $CodigoLiteral="TDH12"; break;
		case '163': case 'TDH23':
			$MateriaNombre="INTIMIDAD"; $CodigoLiteral="TDH23"; break;
		case '164': case 'TDH24':
			$MateriaNombre="MUNDO LABORAL"; $CodigoLiteral="TDH24"; break;
		case '165': case 'TDH25':
			$MateriaNombre="ORGULLO PROPIO"; $CodigoLiteral="TDH25"; break;
		case '166': case 'TDH26':
			$MateriaNombre="ORGULLO GENERAL"; $CodigoLiteral="TDH26"; break;
		case '167': case 'TDH27':
			$MateriaNombre="CARÁCTER II"; $CodigoLiteral="TDH27"; break;
		case '168': case 'TDH28':
			$MateriaNombre="SOCIEDAD II"; $CodigoLiteral="TDH28"; break;
		case '169': case 'TDH39':
			$MateriaNombre="INTIMIDAD PERSONAL"; $CodigoLiteral="TDH39"; break;
		case '1610': case 'TDH310':
			$MateriaNombre="INTIMIDAD DE PAREJA"; $CodigoLiteral="TDH310"; break;
		case '1611': case 'TDH311':
			$MateriaNombre="PERSONALIDAD I"; $CodigoLiteral="TDH311"; break;
		case '1612': case 'TDH312':
			$MateriaNombre="SOCIEDAD III"; $CodigoLiteral="TDH312"; break;
		case '1613': case 'TDH313':
			$MateriaNombre="IMPORTACULISMO"; $CodigoLiteral="TDH313"; break;
		case '1614': case 'TDH414':
			$MateriaNombre="PACIENCIA"; $CodigoLiteral="TDH414"; break;
		case '1615': case 'TDH415':
			$MateriaNombre="ESTIGMAS SOCIALES"; $CodigoLiteral="TDH415"; break;
		case '1616': case 'TDH416':
			$MateriaNombre="BÁSICO SEXUAL DIGNO"; $CodigoLiteral="TDH416"; break;
		case '1617': case 'TDH417':
			$MateriaNombre="EDUCACIÓN DIGNOS"; $CodigoLiteral="TDH417"; break;
		case '1618': case 'TDH418':
			$MateriaNombre="AMISTAD DIGNA"; $CodigoLiteral="TDH418"; break;
		case '1619': case 'TDH419':
			$MateriaNombre="INDIGNA"; $CodigoLiteral="TDH419"; break;
		case '1620': case 'TDH520':
			$MateriaNombre="ECONOMÍA DIGNA"; $CodigoLiteral="TDH520"; break;
		case '1621': case 'TDH521':
			$MateriaNombre="LEY DIGNA"; $CodigoLiteral="TDH521"; break;
		case '1622': case 'TDH522':
			$MateriaNombre="SALUD DIGNA"; $CodigoLiteral="TDH522"; break;
		case '1623': case 'TDH523':
			$MateriaNombre="MISERIA DIGNA"; $CodigoLiteral="TDH523"; break;

	//FINFPA
		case '171': case 'TFP11':
			$MateriaNombre="PADRES E HIJOS I"; $CodigoLiteral="TFP11"; break;
		case '172': case 'TFP22':
			$MateriaNombre="CONTROL DE COSTOS"; $CodigoLiteral="TFP22"; break;
		case '173': case 'TFP23':
			$MateriaNombre="PADRES E HIJOS II"; $CodigoLiteral="TFP23"; break;
		case '174': case 'TFP24':
			$MateriaNombre="REPRODUCCIÓN ESTRATIFICADA"; $CodigoLiteral="TFP24"; break;
		case '175': case 'TFP35':
			$MateriaNombre="CHIMBADITAS PROPIAS"; $CodigoLiteral="TFP35"; break;
		case '176': case 'TFP36':
			$MateriaNombre="GASTOS PRIMARIOS"; $CodigoLiteral="TFP36"; break;
		case '177': case 'TFP37':
			$MateriaNombre="GASTOS SECUNDARIOS"; $CodigoLiteral="TFP37"; break;
		case '178': case 'TFP38':
			$MateriaNombre="PADRES E HIJOS III"; $CodigoLiteral="TFP38"; break;
		case '179': case 'TFP49':
			$MateriaNombre="ECONOMÍA BENDECIDA"; $CodigoLiteral="TFP49"; break;
		case '1710': case 'TFP410':
			$MateriaNombre="HIPOTECATIVA"; $CodigoLiteral="TFP410"; break;
		case '1711': case 'TFP411':
			$MateriaNombre="COMPRAVENTAS Y EMPEÑO"; $CodigoLiteral="TFP411"; break;
		case '1712': case 'TFP412':
			$MateriaNombre="EDUCACIÓN PERSONAL"; $CodigoLiteral="TFP412"; break;
		case '1713': case 'TFP513':
			$MateriaNombre="PADRES E HIJOS IV"; $CodigoLiteral="TFP513"; break;
		case '1714': case 'TFP514':
			$MateriaNombre="FIDUCIARIAS"; $CodigoLiteral="TFP514"; break;
		case '1715': case 'TFP515':
			$MateriaNombre="BÁSICO CONTABILIDAD"; $CodigoLiteral="TFP515"; break;
		case '1716': case 'TFP516':
			$MateriaNombre="CONTROL SALARIAL"; $CodigoLiteral="TFP516"; break;
		case '1717': case 'TFP517':
			$MateriaNombre="RIESGOS ECONÓMICOS"; $CodigoLiteral="TFP517"; break;
		case '1718': case 'TFP518':
			$MateriaNombre="GASTOS FIESTEROS"; $CodigoLiteral="TFP518"; break;
		case '1719': case 'TFP519':
			$MateriaNombre="BANCARROTA"; $CodigoLiteral="TFP519"; break;

	//IDEPER
		case '181': case 'TIP11':
			$MateriaNombre="PERSONALIDAD "; $CodigoLiteral="TIP11"; break;
		case '182': case 'TIP12':
			$MateriaNombre="GÉNERO MASCULINO I "; $CodigoLiteral="TIP12"; break;
		case '183': case 'TIP13':
			$MateriaNombre="GÉNERO FEMENINO I"; $CodigoLiteral="TIP13"; break;
		case '184': case 'TIP14':
			$MateriaNombre="RASGOS FÍSICOS I "; $CodigoLiteral="TIP14"; break;
		case '185': case 'TIP15':
			$MateriaNombre="ANÁLISIS PERSONAL"; $CodigoLiteral="TIP15"; break;
		case '186': case 'TIP16':
			$MateriaNombre="DATOS COLECTIVOS "; $CodigoLiteral="TIP16"; break;
		case '187': case 'TIP27':
			$MateriaNombre="ALCOHOLEMIA"; $CodigoLiteral="TIP27"; break;
		case '188': case 'TIP28':
			$MateriaNombre="GÉNERO MASCULINO II "; $CodigoLiteral="TIP28"; break;
		case '189': case 'TIP29':
			$MateriaNombre="GÉNERO FEMENINO II"; $CodigoLiteral="TIP29"; break;
		case '1810': case 'TIP210':
			$MateriaNombre="RASGOS FÍSICOS II"; $CodigoLiteral="TIP210"; break;
		case '1811': case 'TIP211':
			$MateriaNombre="MÉTODOS ANTI-SHOW"; $CodigoLiteral="TIP211"; break;
		case '1812': case 'TIP212':
			$MateriaNombre="TEORÍA DEL GOMELO "; $CodigoLiteral="TIP212"; break;
		case '1813': case 'TIP213':
			$MateriaNombre="LENGUAJE DE SEÑAS"; $CodigoLiteral="TIP213"; break;
		case '1814': case 'TIP314':
			$MateriaNombre="CONSERVA DE LA DIGNIDAD"; $CodigoLiteral="TIP314"; break;
		case '1815': case 'TIP315':
			$MateriaNombre="LENGUAJE CORPORAL"; $CodigoLiteral="TIP315"; break;
		case '1816': case 'TIP316':
			$MateriaNombre="LENGUAJE VULGAR"; $CodigoLiteral="TIP316"; break;
		case '1817': case 'TIP317':
			$MateriaNombre="ÑERISMO I"; $CodigoLiteral="TIP317"; break;
		case '1818': case 'TIP318':
			$MateriaNombre="LENGUAJE IDENTIFICATIVO "; $CodigoLiteral="TIP318"; break;
		case '1819': case 'TIP319':
			$MateriaNombre="FAMILIARIZACIÓN"; $CodigoLiteral="TIP319"; break;
		case '1820': case 'TIP320':
			$MateriaNombre="IRRESPETO"; $CodigoLiteral="TIP320"; break;
		case '1821': case 'TIP421':
			$MateriaNombre="IDENTIFICACIÓN POR PÚBLICO"; $CodigoLiteral="TIP421"; break;
		case '1822': case 'TIP422':
			$MateriaNombre="IDENTIFICACIÓN DE PERSONAL"; $CodigoLiteral="TIP422"; break;
		case '1823': case 'TIP423':
			$MateriaNombre="COMUNICACIÓN E INFORMES"; $CodigoLiteral="TIP423"; break;
		case '1824': case 'TIP424':
			$MateriaNombre="USTED NO SABE QUIÉN SOY YO I"; $CodigoLiteral="TIP424"; break;
		case '1825': case 'TIP425':
			$MateriaNombre="IDENTIFICACIÓN DE FENÓMENOS"; $CodigoLiteral="TIP425"; break;
		case '1826': case 'TIP426':
			$MateriaNombre="IDENTIFICACIÓN DEPORTIVA"; $CodigoLiteral="TIP426"; break;
		case '1827': case 'TIP427':
			$MateriaNombre="IDENTIFICACIÓN ESTRATIFICADA"; $CodigoLiteral="TIP427"; break;
		case '1828': case 'TIP528':
			$MateriaNombre="USTED NO SABE QUIÉN SOY YO II"; $CodigoLiteral="TIP528"; break;
		case '1829': case 'TIP529':
			$MateriaNombre="RIDÍCULO AJENO"; $CodigoLiteral="TIP529"; break;
		case '1830': case 'TIP530':
			$MateriaNombre="PLENA IDENTIFICACIÓN"; $CodigoLiteral="TIP530"; break;

	//GESHET
		case '191': case 'THE11':
			$MateriaNombre="TETALLES FEMENINOS"; $CodigoLiteral="THE11"; break;
		case '192': case 'THE12':
			$MateriaNombre="DETALLES MASCULINOS "; $CodigoLiteral="THE12"; break;
		case '193': case 'THE13':
			$MateriaNombre="CLASIFICACIONES"; $CodigoLiteral="THE13"; break;
		case '194': case 'THE14':
			$MateriaNombre="MATRICIDIO "; $CodigoLiteral="THE14"; break;
		case '195': case 'THE25':
			$MateriaNombre="BENDICIONES Y FORTUNAS"; $CodigoLiteral="THE25"; break;
		case '196': case 'THE26':
			$MateriaNombre="DISCRIMINATIVA "; $CodigoLiteral="THE26"; break;
		case '197': case 'THE27':
			$MateriaNombre="ARTES PLÁSTICAS "; $CodigoLiteral="THE27"; break;
		case '198': case 'THE38':
			$MateriaNombre="CONTROL SOLTERÍA"; $CodigoLiteral="THE38"; break;
		case '199': case 'THE39':
			$MateriaNombre="CONTROL SENTIMENTAL"; $CodigoLiteral="THE39"; break;
		case '1910': case 'THE310':
			$MateriaNombre="RUMBEROLOGÍA"; $CodigoLiteral="THE310"; break;
		case '1911': case 'THE311':
			$MateriaNombre="BENDECIOLOGÍA Y FORTUNOLOGÍA"; $CodigoLiteral="THE311"; break;
		case '1912': case 'THE412':
			$MateriaNombre="ENVIDIÁSTICA FEMENINA"; $CodigoLiteral="THE412"; break;
		case '1913': case 'THE513':
			$MateriaNombre="CONTROL HORMONAS"; $CodigoLiteral="THE513"; break;
		case '1914': case 'THE514':
			$MateriaNombre="CASUALES Y RÁPIDOS"; $CodigoLiteral="THE514"; break;
		case '1915': case 'THE515':
			$MateriaNombre="LENGUAJES HETEROCOMUNICATIVOS"; $CodigoLiteral="THE515"; break;
		case '1916': case 'THE516':
			$MateriaNombre="PARCERÁSTICA MASCULINA"; $CodigoLiteral="THE516"; break;
		case '1917': case 'THE517':
			$MateriaNombre="INTERÉS EXTRANJERO"; $CodigoLiteral="THE517"; break;

	//GESHOM
		case '201': case 'THO11':
			$MateriaNombre="SOCIEDAD BÁSICA"; $CodigoLiteral="THO11"; break;
		case '202': case 'THO12':
			$MateriaNombre="ESTILISTISMO"; $CodigoLiteral="THO12"; break;
		case '203': case 'THO13':
			$MateriaNombre="PROCESOS ENVIDIÁSTICOS"; $CodigoLiteral="THO13"; break;
		case '204': case 'THO14':
			$MateriaNombre="SALIDA ARMARIO"; $CodigoLiteral="THO14"; break;
		case '205': case 'THO15':
			$MateriaNombre="SALIDA CAJA DE HERRAMIENTAS"; $CodigoLiteral="THO15"; break;
		case '206': case 'THO26':
			$MateriaNombre="GÉNERO HOMOMASCULINO"; $CodigoLiteral="THO26"; break;
		case '207': case 'THO27':
			$MateriaNombre="GÉNERO HOMOFEMENINO"; $CodigoLiteral="THO27"; break;
		case '208': case 'THO28':
			$MateriaNombre="GÉNERO HOMOVARIADO"; $CodigoLiteral="THO28"; break;
		case '209': case 'THO29':
			$MateriaNombre="FESTEJOLOGÍA "; $CodigoLiteral="THO29"; break;
		case '2010': case 'THO310':
			$MateriaNombre="EXTRANJERISMOS"; $CodigoLiteral="THO310"; break;
		case '2011': case 'THO311':
			$MateriaNombre="GLAMOURÍSTICA "; $CodigoLiteral="THO311"; break;
		case '2012': case 'THO312':
			$MateriaNombre="VENENOLOGÍA "; $CodigoLiteral="THO312"; break;
		case '2013': case 'THO313':
			$MateriaNombre="FANATISMO MUSICAL"; $CodigoLiteral="THO313"; break;
		case '2014': case 'THO314':
			$MateriaNombre="MODA ESTRATIFICADA"; $CodigoLiteral="THO314"; break;
		case '2015': case 'THO315':
			$MateriaNombre="DEFENSA UNIDA ANTI-HOMOFOBIA"; $CodigoLiteral="THO315"; break;
		case '2016': case 'THO316':
			$MateriaNombre="CRÍTICA INTERNA COMUNITARIA"; $CodigoLiteral="THO316"; break;
		case '2017': case 'THO317':
			$MateriaNombre="DISCRIMINATORIAS"; $CodigoLiteral="THO317"; break;
		case '2018': case 'THO418':
			$MateriaNombre="LENGUAJE I "; $CodigoLiteral="THO418"; break;
		case '2019': case 'THO419':
			$MateriaNombre="FAGGOTOLOGÍA"; $CodigoLiteral="THO419"; break;
		case '2020': case 'THO420':
			$MateriaNombre="APLICACIONES SEXO-SOCIALES "; $CodigoLiteral="THO420"; break;
		case '2021': case 'THO421':
			$MateriaNombre="HOMOFOBIATOLOGÍA"; $CodigoLiteral="THO421"; break;
		case '2022': case 'THO422':
			$MateriaNombre="TÉCNICA DE GUSTOS GENERALES"; $CodigoLiteral="THO422"; break;
		case '2023': case 'THO423':
			$MateriaNombre="EXAGERACIONES Y DRAMA"; $CodigoLiteral="THO423"; break;
		case '2024': case 'THO524':
			$MateriaNombre="TÉCNICA DE GUSTOS PROPIOS "; $CodigoLiteral="THO524"; break;
		case '2025': case 'THO525':
			$MateriaNombre="LENGUAJE II "; $CodigoLiteral="THO525"; break;
		case '2026': case 'THO526':
			$MateriaNombre="TEMÁTICA BITCH"; $CodigoLiteral="THO526"; break;
		case '2027': case 'THO527':
			$MateriaNombre="ERECTIVA Y ANALITIVA"; $CodigoLiteral="THO527"; break;
		case '2028': case 'THO528':
			$MateriaNombre="INVESTIGAYCIÓN"; $CodigoLiteral="THO528"; break;
		case '2029': case 'THO529':
			$MateriaNombre="SALUD Y ESTILOS DE VIDA"; $CodigoLiteral="THO529"; break;

//FACULTAD INGENIERÍAS PARTE 1
	//YOUTUB
		case '211': case 'IYO11':
			$MateriaNombre="INFORMÁTICA"; $CodigoLiteral="IYO11"; break;
		case '212': case 'IYO12':
			$MateriaNombre="DESOCUPADOLOGÍA"; $CodigoLiteral="IYO12"; break;
		case '213': case 'IYO13':
			$MateriaNombre="MEDIOS DE GARAJE"; $CodigoLiteral="IYO13"; break;
		case '214': case 'IYO14':
			$MateriaNombre="AUTOESTIMA I"; $CodigoLiteral="IYO14"; break;
		case '215': case 'IYO15':
			$MateriaNombre="INTERNÉ I"; $CodigoLiteral="IYO15"; break;
		case '216': case 'IYO26':
			$MateriaNombre="SOCIEDAD CLASIFICANTE"; $CodigoLiteral="IYO26"; break;
		case '217': case 'IYO27':
			$MateriaNombre="DISEÑO WEB"; $CodigoLiteral="IYO27"; break;
		case '218': case 'IYO28':
			$MateriaNombre="ESTUPIDOLOGÍA"; $CodigoLiteral="IYO28"; break;
		case '219': case 'IYO29':
			$MateriaNombre="ARTES MISERABLES"; $CodigoLiteral="IYO29"; break;
		case '2110': case 'IYO210':
			$MateriaNombre="ARTES DRAMÁTICAS I"; $CodigoLiteral="IYO210"; break;
		case '2111': case 'IYO311':
			$MateriaNombre="INVERSIÓN DEL TIEMPO I"; $CodigoLiteral="IYO311"; break;
		case '2112': case 'IYO312':
			$MateriaNombre="AUDIO-VISUALES SONIDO"; $CodigoLiteral="IYO312"; break;
		case '2113': case 'IYO313':
			$MateriaNombre="AUDIO-VISUALES VIDEO"; $CodigoLiteral="IYO313"; break;
		case '2114': case 'IYO314':
			$MateriaNombre="AUTOESTIMA II "; $CodigoLiteral="IYO314"; break;
		case '2115': case 'IYO315':
			$MateriaNombre="GESTOS AMÓRFICOS"; $CodigoLiteral="IYO315"; break;
		case '2116': case 'IYO416':
			$MateriaNombre="INTERNÉ II"; $CodigoLiteral="IYO416"; break;
		case '2117': case 'IYO417':
			$MateriaNombre="ARTES DRAMÁTICAS II"; $CodigoLiteral="IYO417"; break;
		case '2118': case 'IYO418':
			$MateriaNombre="INVERSIÓN DEL TIEMPO II"; $CodigoLiteral="IYO418"; break;
		case '2119': case 'IYO419':
			$MateriaNombre="YOUTUBEOLOGÍA I "; $CodigoLiteral="IYO419"; break;
		case '2120': case 'IYO520':
			$MateriaNombre="APAGUE Y VÁMONOS "; $CodigoLiteral="IYO520"; break;
		case '2121': case 'IYO521':
			$MateriaNombre="CONTENIDO DIGNO"; $CodigoLiteral="IYO521"; break;
		case '2122': case 'IYO522':
			$MateriaNombre="VESTIMENTA"; $CodigoLiteral="IYO522"; break;
		case '2123': case 'IYO523':
			$MateriaNombre="INTENTOS LITERARIOS"; $CodigoLiteral="IYO523"; break;
		case '2124': case 'IYO524':
			$MateriaNombre="HOMOSEXUALIDAD II"; $CodigoLiteral="IYO524"; break;
		case '2125': case 'IYO525':
			$MateriaNombre="YOUTUBELOGOÍA II "; $CodigoLiteral="IYO525"; break;
		case '2126': case 'IYO626':
			$MateriaNombre="MENDIGOLOGÍA VIRTUAL"; $CodigoLiteral="IYO626"; break;
		case '2127': case 'IYO627':
			$MateriaNombre="MARKETING VIRTUAL"; $CodigoLiteral="IYO627"; break;
		case '2128': case 'IYO628':
			$MateriaNombre="ZANGANOLOGÍA"; $CodigoLiteral="IYO628"; break;
		case '2129': case 'IYO629':
			$MateriaNombre="PROPAGACIÓN"; $CodigoLiteral="IYO629"; break;
		case '2130': case 'IYO630':
			$MateriaNombre="PÉRDIDA DE PRIVACIDAD"; $CodigoLiteral="IYO630"; break;
		case '2131': case 'IYO631':
			$MateriaNombre="ESTRELLATO ESTRELLADO"; $CodigoLiteral="IYO631"; break;
		case '2132': case 'IYO732':
			$MateriaNombre="YOUTUBEOLOGÍA III"; $CodigoLiteral="IYO732"; break;
		case '2133': case 'IYO733':
			$MateriaNombre="ARTES DRAMÁTICAS III"; $CodigoLiteral="IYO733"; break;
		case '2134': case 'IYO734':
			$MateriaNombre="REPETITIVIDAD Y ORIGINALIDAD"; $CodigoLiteral="IYO734"; break;
		case '2135': case 'IYO735':
			$MateriaNombre="EVASIÓN COMENTARISTA Y CRÍTICA"; $CodigoLiteral="IYO735"; break;
		case '2136': case 'IYO736':
			$MateriaNombre="GIMNASIA"; $CodigoLiteral="IYO736"; break;
		case '2137': case 'IYO737':
			$MateriaNombre="JUBILACIÓN DUDOSA"; $CodigoLiteral="IYO737"; break;
		case '2138': case 'IYO738':
			$MateriaNombre="MANIPULACIÓN Y TENDENCIAS"; $CodigoLiteral="IYO738"; break;
		case '2139': case 'IYO139':
			$MateriaNombre="INGENIERÍA SOCIAL"; $CodigoLiteral="IYO139"; break;
		case '2140': case 'IYO240':
			$MateriaNombre="INFLUENCIAMIENTO I"; $CodigoLiteral="IYO240"; break;
		case '2141': case 'IYO341':
			$MateriaNombre="INFLUENCIAMIENTO II"; $CodigoLiteral="IYO341"; break;
		case '2142': case 'IYO442':
			$MateriaNombre="INFLUENCIAMIENTO III"; $CodigoLiteral="IYO442"; break;
		case '2143': case 'IYO643':
			$MateriaNombre="INFLUENCIAMIENTO IV"; $CodigoLiteral="IYO643"; break;
		case '2144': case 'IYO744':
			$MateriaNombre="INFLUENCIAMIENTO V"; $CodigoLiteral="IYO744"; break;
		case '2145': case 'IYO745':
			$MateriaNombre="RELACIONES HUMANAS AVANZADAS"; $CodigoLiteral="IYO745"; break;
		case '2146': case 'IYO246':
			$MateriaNombre="FOTOGRAFÍA Y DISEÑO"; $CodigoLiteral="IYO246"; break;
		case '2147': case 'IYO247':
			$MateriaNombre="LABORATORIO DE FOTOGRAFÍA Y DISEÑO"; $CodigoLiteral="IYO247"; break;
		case '2148': case 'IYO348':
			$MateriaNombre="ALTERNATIVAS SOCIOMEDIÁTICAS"; $CodigoLiteral="IYO348"; break;
		case '2149': case 'IYO449':
			$MateriaNombre="ADMINISTRACIÓN SOCIAL MEDIÁTICA"; $CodigoLiteral="IYO449"; break;
		case '2150': case 'IYO650':
			$MateriaNombre="INDEPENDENCIA SOCIOMEDÍÁTICA"; $CodigoLiteral="IYO650"; break;
		case '2151': case 'IYO551':
			$MateriaNombre="NEGOCIOS SOCIALES MEDIÁTICOS"; $CodigoLiteral="IYO551"; break;
		case '2152': case 'IYO552':
			$MateriaNombre="FARÁNDULA NACIONAL"; $CodigoLiteral="IYO552"; break;
		case '2153': case 'IYO553':
			$MateriaNombre="INTERNACIONALIZACIÓN MEDIÁTICA"; $CodigoLiteral="IYO553"; break;

	//FINANC
		case '221': case 'IFZ11':
			$MateriaNombre="POBREZA I"; $CodigoLiteral="IFZ11"; break;
		case '222': case 'IFZ12':
			$MateriaNombre="MISERIA I"; $CodigoLiteral="IFZ12"; break;
		case '223': case 'IFZ13':
			$MateriaNombre="AHORRO I"; $CodigoLiteral="IFZ13"; break;
		case '224': case 'IFZ14':
			$MateriaNombre="INFORMALIDAD LABORAL"; $CodigoLiteral="IFZ14"; break;
		case '225': case 'IFZ15':
			$MateriaNombre="GERENCIA SALARIAL"; $CodigoLiteral="IFZ15"; break;
		case '226': case 'IFZ16':
			$MateriaNombre="ECONOMÍA I"; $CodigoLiteral="IFZ16"; break;
		case '227': case 'IFZ27':
			$MateriaNombre="APROVECHAMIENTO"; $CodigoLiteral="IFZ27"; break;
		case '228': case 'IFZ28':
			$MateriaNombre="ECONOMÍA II"; $CodigoLiteral="IFZ28"; break;
		case '229': case 'IFZ29':
			$MateriaNombre="APRECIO DEL DINERO I"; $CodigoLiteral="IFZ29"; break;
		case '2210': case 'IFZ210':
			$MateriaNombre="AHORRO II"; $CodigoLiteral="IFZ210"; break;
		case '2211': case 'IFZ211':
			$MateriaNombre="MONEDA EXTRANJERA"; $CodigoLiteral="IFZ211"; break;
		case '2212': case 'IFZ312':
			$MateriaNombre="APRECIO DEL DINERO II"; $CodigoLiteral="IFZ312"; break;
		case '2213': case 'IFZ313':
			$MateriaNombre="AHORRO III"; $CodigoLiteral="IFZ313"; break;
		case '2214': case 'IFZ314':
			$MateriaNombre="GASTOS PÚBLICOS"; $CodigoLiteral="IFZ314"; break;
		case '2215': case 'IFZ315':
			$MateriaNombre="GASTOS PRIVADOS"; $CodigoLiteral="IFZ315"; break;
		case '2216': case 'IFZ316':
			$MateriaNombre="GASTOS INNECESARIOS"; $CodigoLiteral="IFZ316"; break;
		case '2217': case 'IFZ317':
			$MateriaNombre="RELACIONES BANCARIAS"; $CodigoLiteral="IFZ317"; break;
		case '2218': case 'IFZ318':
			$MateriaNombre="INVERSIONES"; $CodigoLiteral="IFZ318"; break;
		case '2219': case 'IFZ319':
			$MateriaNombre="CONTABILIDAD"; $CodigoLiteral="IFZ319"; break;
		case '2220': case 'IFZ420':
			$MateriaNombre="FAMILIAS I"; $CodigoLiteral="IFZ420"; break;
		case '2221': case 'IFZ421':
			$MateriaNombre="JUEGOS DEL HAMBRE I"; $CodigoLiteral="IFZ421"; break;
		case '2222': case 'IFZ422':
			$MateriaNombre="SISTEMAS SUBSIDIADOS"; $CodigoLiteral="IFZ422"; break;
		case '2223': case 'IFZ423':
			$MateriaNombre="SANTIDAD Y FORTUNA"; $CodigoLiteral="IFZ423"; break;
		case '2224': case 'IFZ424':
			$MateriaNombre="TEORÍA DEL TACAÑO"; $CodigoLiteral="IFZ424"; break;
		case '2225': case 'IFZ425':
			$MateriaNombre="GASTOS ANUALES FESTIVOS"; $CodigoLiteral="IFZ425"; break;
		case '2226': case 'IFZ526':
			$MateriaNombre="ÑERISMO ECONÓMICO"; $CodigoLiteral="IFZ526"; break;
		case '2227': case 'IFZ527':
			$MateriaNombre="DESTINO MONETARIO"; $CodigoLiteral="IFZ527"; break;
		case '2228': case 'IFZ528':
			$MateriaNombre="FAMILIAS II"; $CodigoLiteral="IFZ528"; break;
		case '2229': case 'IFZ529':
			$MateriaNombre="JUEGOS DEL HAMBRE II"; $CodigoLiteral="IFZ529"; break;
		case '2230': case 'IFZ530':
			$MateriaNombre="POBREZA II"; $CodigoLiteral="IFZ530"; break;
		case '2231': case 'IFZ531':
			$MateriaNombre="MISERIA II"; $CodigoLiteral="IFZ531"; break;
		case '2232': case 'IFZ532':
			$MateriaNombre="REBUSQUE I"; $CodigoLiteral="IFZ532"; break;
		case '2233': case 'IFZ633':
			$MateriaNombre="ESTADÍSTICA"; $CodigoLiteral="IFZ633"; break;
		case '2234': case 'IFZ634':
			$MateriaNombre="ENSEÑANZA APLICATIVA"; $CodigoLiteral="IFZ634"; break;
		case '2235': case 'IFZ635':
			$MateriaNombre="PEREZA NUMÉRICA"; $CodigoLiteral="IFZ635"; break;
		case '2236': case 'IFZ736':
			$MateriaNombre="MATEMÁTICA PARA POBRES"; $CodigoLiteral="IFZ736"; break;
		case '2237': case 'IFZ737':
			$MateriaNombre="PARACETAMOLOGÍA Y SALUD"; $CodigoLiteral="IFZ737"; break;
		case '2238': case 'IFZ738':
			$MateriaNombre="REBUSQUE II"; $CodigoLiteral="IFZ738"; break;
		case '2239': case 'IFZ739':
			$MateriaNombre="CENTRALES DE RIESGO"; $CodigoLiteral="IFZ739"; break;
		case '2240': case 'IFZ740':
			$MateriaNombre="SISTEMA DE SALUD"; $CodigoLiteral="IFZ740"; break;
		case '2241': case 'IFZ741':
			$MateriaNombre="IMPUESTOS JUSTOS E INJUSTOS"; $CodigoLiteral="IFZ741"; break;

	//SEXUAL
		case '231': case 'ISX11':
			$MateriaNombre="DETALLES"; $CodigoLiteral="ISX11"; break;
		case '232': case 'ISX12':
			$MateriaNombre="PARLA I"; $CodigoLiteral="ISX12"; break;
		case '233': case 'ISX13':
			$MateriaNombre="CONQUISTA I"; $CodigoLiteral="ISX13"; break;
		case '234': case 'ISX14':
			$MateriaNombre="GÉNEROS"; $CodigoLiteral="ISX14"; break;
		case '235': case 'ISX15':
			$MateriaNombre="HETEROSEXUALIDAD I"; $CodigoLiteral="ISX15"; break;
		case '236': case 'ISX26':
			$MateriaNombre="PARLA II"; $CodigoLiteral="ISX26"; break;
		case '237': case 'ISX27':
			$MateriaNombre="CONQUISTA II"; $CodigoLiteral="ISX27"; break;
		case '238': case 'ISX28':
			$MateriaNombre="PORNOGRAFÍA Y CONSUELO"; $CodigoLiteral="ISX28"; break;
		case '239': case 'ISX29':
			$MateriaNombre="SALUD I"; $CodigoLiteral="ISX29"; break;
		case '2310': case 'ISX310':
			$MateriaNombre="PARLA III"; $CodigoLiteral="ISX310"; break;
		case '2311': case 'ISX311':
			$MateriaNombre="CONQUISTA III"; $CodigoLiteral="ISX311"; break;
		case '2312': case 'ISX312':
			$MateriaNombre="CATEGORIZACIÓN SEXUAL"; $CodigoLiteral="ISX312"; break;
		case '2313': case 'ISX313':
			$MateriaNombre="HETEROSEXUALIDAD II"; $CodigoLiteral="ISX313"; break;
		case '2314': case 'ISX314':
			$MateriaNombre="FANTASÍAS"; $CodigoLiteral="ISX314"; break;
		case '2315': case 'ISX315':
			$MateriaNombre="POLVOGRAFÍA"; $CodigoLiteral="ISX315"; break;
		case '2316': case 'ISX416':
			$MateriaNombre="SALUD II"; $CodigoLiteral="ISX416"; break;
		case '2317': case 'ISX417':
			$MateriaNombre="PARLA IV"; $CodigoLiteral="ISX417"; break;
		case '2318': case 'ISX418':
			$MateriaNombre="HOMOSEXUALIDAD I"; $CodigoLiteral="ISX418"; break;
		case '2319': case 'ISX419':
			$MateriaNombre="AMOR I"; $CodigoLiteral="ISX419"; break;
		case '2320': case 'ISX420':
			$MateriaNombre="ENVIDIÁSTICA GENERAL"; $CodigoLiteral="ISX420"; break;
		case '2321': case 'ISX421':
			$MateriaNombre="PARCERÁSTICA GENERAL"; $CodigoLiteral="ISX421"; break;
		case '2322': case 'ISX422':
			$MateriaNombre="FALSEDAD ORGÁSMICA"; $CodigoLiteral="ISX422"; break;
		case '2323': case 'ISX423':
			$MateriaNombre="CONTROL DE HORMONAS"; $CodigoLiteral="ISX423"; break;
		case '2324': case 'ISX524':
			$MateriaNombre="CASUAL GENERAL Y HABITUAL"; $CodigoLiteral="ISX524"; break;
		case '2325': case 'ISX525':
			$MateriaNombre="SEXO I"; $CodigoLiteral="ISX525"; break;
		case '2326': case 'ISX526':
			$MateriaNombre="TÉCNICO BISEXUAL"; $CodigoLiteral="ISX526"; break;
		case '2327': case 'ISX527':
			$MateriaNombre="INCLINACIONES Y ORIENTACIONES"; $CodigoLiteral="ISX527"; break;
		case '2328': case 'ISX528':
			$MateriaNombre="DIGNIDAD SEXUAL"; $CodigoLiteral="ISX528"; break;
		case '2329': case 'ISX529':
			$MateriaNombre="LENGUAJES"; $CodigoLiteral="ISX529"; break;
		case '2330': case 'ISX630':
			$MateriaNombre="SEXO II"; $CodigoLiteral="ISX630"; break;
		case '2331': case 'ISX631':
			$MateriaNombre="HOMOSEXUALIDAD II"; $CodigoLiteral="ISX631"; break;
		case '2332': case 'ISX632':
			$MateriaNombre="AMOR II"; $CodigoLiteral="ISX632"; break;
		case '2333': case 'ISX633':
			$MateriaNombre="FORNICOLOGÍA I"; $CodigoLiteral="ISX633"; break;
		case '2334': case 'ISX634':
			$MateriaNombre="LEGALIDADES Y ABUSOS"; $CodigoLiteral="ISX634"; break;
		case '2335': case 'ISX635':
			$MateriaNombre="INFIDELIDADES"; $CodigoLiteral="ISX635"; break;
		case '2336': case 'ISX636':
			$MateriaNombre="OBSESIONES"; $CodigoLiteral="ISX636"; break;
		case '2337': case 'ISX637':
			$MateriaNombre="CURIOSIDAD GENERAL"; $CodigoLiteral="ISX637"; break;
		case '2338': case 'ISX738':
			$MateriaNombre="SEXO III"; $CodigoLiteral="ISX738"; break;
		case '2339': case 'ISX739':
			$MateriaNombre="FORNICOLOGÍA II"; $CodigoLiteral="ISX739"; break;
		case '2340': case 'ISX740':
			$MateriaNombre="SALUD III"; $CodigoLiteral="ISX740"; break;
		case '2341': case 'ISX741':
			$MateriaNombre="HETERO-EROTISMO"; $CodigoLiteral="ISX741"; break;
		case '2342': case 'ISX742':
			$MateriaNombre="HOMO-EROTISMO"; $CodigoLiteral="ISX742"; break;
		case '2343': case 'ISX743':
			$MateriaNombre="INTRODUCTORIO ESPERANZA GÓMEZ"; $CodigoLiteral="ISX743"; break;
		case '2344': case 'ISX744':
			$MateriaNombre="REFERENCIAMIENTO"; $CodigoLiteral="ISX744"; break;
		case '2345': case 'ISX745':
			$MateriaNombre="PROYECTO O PRÁCTICA DE GRADO"; $CodigoLiteral="ISX745"; break;

		########################################
		##### 			ELECTIVAS 			####
		########################################
			case '2346': case 'ISX-E01':
				$MateriaNombre="HETERO-INDUCCIÓN Y REGULACIÓN"; $CodigoLiteral="ISX-E01"; break;
			case '2347': case 'ISX-E02':
				$MateriaNombre="HETERO-HIDRÁULICA"; $CodigoLiteral="ISX-E02"; break;
			case '2348': case 'ISX-E03':
				$MateriaNombre="GERENCIA HETEROSEXUAL"; $CodigoLiteral="ISX-E03"; break;
			case '2349': case 'ISX-E04':
				$MateriaNombre="HOMO-INDUCCIÓN Y REGULACIÓN"; $CodigoLiteral="ISX-E04"; break;
			case '2350': case 'ISX-E05':
				$MateriaNombre="HOMO-HIDRÁULICA"; $CodigoLiteral="ISX-E05"; break;
			case '2351': case 'ISX-E06':
				$MateriaNombre="GERENCIA HOMOSEXUAL"; $CodigoLiteral="ISX-E06"; break;
			case '2352': case 'ISX-E07':
				$MateriaNombre="ROLES SEXUALES MÚLTIPLES"; $CodigoLiteral="ISX-E07"; break;
			case '2353': case 'ISX-E08':
				$MateriaNombre="HIDRÁULICA GENERAL MASCULINA"; $CodigoLiteral="ISX-E08"; break;
			case '2354': case 'ISX-E09':
				$MateriaNombre="HIDRÁULICA GENERAL FEMENINA"; $CodigoLiteral="ISX-E09"; break;
			case '2355': case 'ISX-E10':
				$MateriaNombre="LEGISLATURA SEXUAL GENERAL"; $CodigoLiteral="ISX-E10"; break;
			case '2356': case 'ISX-E11':
				$MateriaNombre="PROFUNDIZACIÓN EN LGBTI"; $CodigoLiteral="ISX-E11"; break;

	//FRACAS
		case '241': case 'IFR11':
					$MateriaNombre="FRACASO EDUCATIVO I"; $CodigoLiteral="IFR11"; break;
		case '242': case 'IFR22':
					$MateriaNombre="FRACASO EDUCATIVO II"; $CodigoLiteral="IFR22"; break;
		case '243': case 'IFR23':
					$MateriaNombre="PROCRASTINAR I"; $CodigoLiteral="IFR23"; break;
		case '244': case 'IFR24':
					$MateriaNombre="RESPONSABILIDAD I"; $CodigoLiteral="IFR24"; break;
		case '245': case 'IFR35':
					$MateriaNombre="PROCRASTINAR II"; $CodigoLiteral="IFR35"; break;
		case '246': case 'IFR36':
					$MateriaNombre="RESPONSABILIDAD II"; $CodigoLiteral="IFR36"; break;
		case '247': case 'IFR37':
					$MateriaNombre="PROCESOS VAGOS"; $CodigoLiteral="IFR37"; break;
		case '248': case 'IFR38':
					$MateriaNombre="NINILOGÍA"; $CodigoLiteral="IFR38"; break;
		case '249': case 'IFR39':
					$MateriaNombre="INGENIERÍA INDUSTRIAL I"; $CodigoLiteral="IFR39"; break;
		case '2410': case 'IFR310':
					$MateriaNombre="IGNORANCIA"; $CodigoLiteral="IFR310"; break;
		case '2411': case 'IFR311':
					$MateriaNombre="CONFORMISMO PERSONAL"; $CodigoLiteral="IFR311"; break;
		case '2412': case 'IFR412':
					$MateriaNombre="CONFORMISMO ECONÓMICO"; $CodigoLiteral="IFR412"; break;
		case '2413': case 'IFR413':
					$MateriaNombre="CONFORMISMO SOCIAL"; $CodigoLiteral="IFR413"; break;
		case '2414': case 'IFR414':
					$MateriaNombre="CRÍTICA NO APORTANTE"; $CodigoLiteral="IFR414"; break;
		case '2415': case 'IFR415':
					$MateriaNombre="ÑEROLOGÍA I"; $CodigoLiteral="IFR415"; break;
		case '2416': case 'IFR416':
					$MateriaNombre="BÁSICO MAMERTISMO"; $CodigoLiteral="IFR416"; break;
		case '2417': case 'IFR517':
					$MateriaNombre="CONTROL REPRODUCTORIO"; $CodigoLiteral="IFR517"; break;
		case '2418': case 'IFR518':
					$MateriaNombre="PROPAGACIÓN DE IDEALES"; $CodigoLiteral="IFR518"; break;
		case '2419': case 'IFR519':
					$MateriaNombre="MATEMÁTICA PRE-ESCOLAR"; $CodigoLiteral="IFR519"; break;
		case '2420': case 'IFR520':
					$MateriaNombre="FUTURO INFUTURO"; $CodigoLiteral="IFR520"; break;
		case '2421': case 'IFR521':
					$MateriaNombre="LÓGICA DE DECISIONES"; $CodigoLiteral="IFR521"; break;
		case '2422': case 'IFR522':
					$MateriaNombre="ÑEROLOGÍA II"; $CodigoLiteral="IFR522"; break;
		case '2423': case 'IFR523':
					$MateriaNombre="VESTIMENTA DEL FRACASO"; $CodigoLiteral="IFR523"; break;
		case '2424': case 'IFR624':
					$MateriaNombre="DEPENDENCIA PARENTAL"; $CodigoLiteral="IFR624"; break;
		case '2425': case 'IFR625':
					$MateriaNombre="DEPENDENCIA GUBERNAMENTAL"; $CodigoLiteral="IFR625"; break;
		case '2426': case 'IFR626':
					$MateriaNombre="QUEJUMBROSO TOTALITARIO"; $CodigoLiteral="IFR626"; break;
		case '2427': case 'IFR627':
					$MateriaNombre="JUEGOS DEL HAMBRE PERSONALES"; $CodigoLiteral="IFR627"; break;
		case '2428': case 'IFR728':
					$MateriaNombre="MANIFESTACIONES ILÓGICAS"; $CodigoLiteral="IFR728"; break;
		case '2429': case 'IFR729':
					$MateriaNombre="IMPORTANCIA ALCOHÓLICA"; $CodigoLiteral="IFR729"; break;
		case '2430': case 'IFR730':
					$MateriaNombre="IMPORTANCIA DEPORTISTA"; $CodigoLiteral="IFR730"; break;
		case '2431': case 'IFR731':
					$MateriaNombre="PERDICIÓN"; $CodigoLiteral="IFR731"; break;
		case '2432': case 'IFR732':
					$MateriaNombre="INGENIERÍA INDUSTRIAL II"; $CodigoLiteral="IFR732"; break;

//FACULTAD SUPERIOR
	//SEXAPI
		case '251': case 'ESX11':
						$MateriaNombre="GENÉTICA BÁSICA"; $CodigoLiteral="ESX11"; break;
		case '252': case 'ESX12':
						$MateriaNombre="REPRODUCCIÓN"; $CodigoLiteral="ESX12"; break;
		case '253': case 'ESX13':
						$MateriaNombre="PLANIFICACIÓN"; $CodigoLiteral="ESX13"; break;
		case '254': case 'ESX14':
						$MateriaNombre="SALUD SEXUAL AVANZADA I"; $CodigoLiteral="ESX14"; break;
		case '255': case 'ESX15':
						$MateriaNombre="INGENIERÍA DEL PLACER"; $CodigoLiteral="ESX15"; break;
		case '256': case 'ESX26':
						$MateriaNombre="SALUD SEXUAL AVANZADA II"; $CodigoLiteral="ESX26"; break;
		case '257': case 'ESX27':
						$MateriaNombre="COCHINADAS"; $CodigoLiteral="ESX27"; break;
		case '258': case 'ESX28':
						$MateriaNombre="KAMASUTRA I"; $CodigoLiteral="ESX28"; break;
		case '259': case 'ESX29':
						$MateriaNombre="SEXO EXPLÍCITO"; $CodigoLiteral="ESX29"; break;
		case '2510': case 'ESX210':
						$MateriaNombre="PROCESOS ORGÁSMICOS REALES"; $CodigoLiteral="ESX210"; break;
		case '2511': case 'ESX311':
						$MateriaNombre="ENTORNOS SEXUALES"; $CodigoLiteral="ESX311"; break;
		case '2512': case 'ESX312':
						$MateriaNombre="KAMASUTRA II"; $CodigoLiteral="ESX312"; break;
		case '2513': case 'ESX313':
						$MateriaNombre="FISIOLOGÍA SEXUAL"; $CodigoLiteral="ESX313"; break;
		case '2514': case 'ESX314':
						$MateriaNombre="LÓGICA DE PROCESOS"; $CodigoLiteral="ESX314"; break;
		case '2515': case 'ESX315':
						$MateriaNombre="CÁTEDRA ANTI ETS/ITS/EMBARAZOS"; $CodigoLiteral="ESX315"; break;
		case '2516': case 'ESX316':
						$MateriaNombre="CONTROL LIBIDOSO"; $CodigoLiteral="ESX316"; break;
		case '2517': case 'ESX417':
						$MateriaNombre="KAMASUTRA III"; $CodigoLiteral="ESX417"; break;
		case '2518': case 'ESX418':
						$MateriaNombre="PRÁCTICA DUAL"; $CodigoLiteral="ESX418"; break;
		case '2519': case 'ESX419':
						$MateriaNombre="PRÁCTICA GRUPAL"; $CodigoLiteral="ESX419"; break;
		case '2520': case 'ESX420':
						$MateriaNombre="CÁTEDRA ESPERANZA GÓMEZ"; $CodigoLiteral="ESX420"; break;
		case '2521': case 'ESX421':
						$MateriaNombre="SUS TENTACIONES Y SUSTENTACIÓN"; $CodigoLiteral="ESX421"; break;

	//FIPMIT
		case '261': case 'EFP11':
						$MateriaNombre="MISERIA PROFUNDA I"; $CodigoLiteral="EFP11"; break;
		case '262': case 'EFP12':
						$MateriaNombre="REPASO AHORRATIVO"; $CodigoLiteral="EFP12"; break;
		case '263': case 'EFP13':
						$MateriaNombre="DIGNIDAD ECONÓMICA"; $CodigoLiteral="EFP13"; break;
		case '264': case 'EFP14':
						$MateriaNombre="TRIUNFO MÍSERO"; $CodigoLiteral="EFP14"; break;
		case '265': case 'EFP25':
						$MateriaNombre="MISERIA PROFUNDA II"; $CodigoLiteral="EFP25"; break;
		case '266': case 'EFP26':
						$MateriaNombre="GASTOS GLOBALES"; $CodigoLiteral="EFP26"; break;
		case '267': case 'EFP27':
						$MateriaNombre="TRIUNFO BÁSICO"; $CodigoLiteral="EFP27"; break;
		case '268': case 'EFP28':
						$MateriaNombre="FINANZA SOLITARIA"; $CodigoLiteral="EFP28"; break;
		case '269': case 'EFP29':
						$MateriaNombre="FINANZA DEL FRACASO"; $CodigoLiteral="EFP29"; break;
		case '2610': case 'EFP310':
						$MateriaNombre="IMPULSO DERROCHADOR"; $CodigoLiteral="EFP310"; break;
		case '2611': case 'EFP311':
						$MateriaNombre="TRIUNFO PROFUNDO I"; $CodigoLiteral="EFP311"; break;
		case '2612': case 'EFP312':
						$MateriaNombre="SALUD MONETARIA"; $CodigoLiteral="EFP312"; break;
		case '2613': case 'EFP313':
						$MateriaNombre="CONTROL MONETARIO"; $CodigoLiteral="EFP313"; break;
		case '2614': case 'EFP414':
						$MateriaNombre="TRIUNFO PROFUNDO II"; $CodigoLiteral="EFP414"; break;
		case '2615': case 'EFP415':
						$MateriaNombre="TENTATIVA DE GASTO"; $CodigoLiteral="EFP415"; break;
		case '2616': case 'EFP416':
						$MateriaNombre="ENDEUDAMIENTO"; $CodigoLiteral="EFP416"; break;
		case '2617': case 'EFP417':
						$MateriaNombre="SUSTENTACIÓN"; $CodigoLiteral="EFP417"; break;

	//ENAMAT
		case '271': case 'MEM11':
						$MateriaNombre="MATEMÁTICAS PENDEJAS"; $CodigoLiteral="MEM11"; break;
		case '272': case 'MEM12':
						$MateriaNombre="LÓGICA YOUTUBER"; $CodigoLiteral="MEM12"; break;
		case '273': case 'MEM13':
						$MateriaNombre="DOCENCIA MATEMÁTICA BÁSICA"; $CodigoLiteral="MEM13"; break;
		case '274': case 'MEM14':
						$MateriaNombre="TERRORISMO MATEMÁTICO I"; $CodigoLiteral="MEM14"; break;
		case '275': case 'MEM25':
						$MateriaNombre="DOCENCIA MATEMÁTICA AVANZADA"; $CodigoLiteral="MEM25"; break;
		case '276': case 'MEM26':
						$MateriaNombre="TERRORISMO MATEMÁTICO II"; $CodigoLiteral="MEM26"; break;
		case '277': case 'MEM27':
						$MateriaNombre="TRIUNFO BÁSICO"; $CodigoLiteral="MEM27"; break;
		case '278': case 'MEM38':
						$MateriaNombre="NÚMEROS Y LETRAS AVANZADOS"; $CodigoLiteral="MEM38"; break;
		case '279': case 'MEM39':
						$MateriaNombre="TORTURA CEREBRAL"; $CodigoLiteral="MEM39"; break;
		case '2710': case 'MEM310':
						$MateriaNombre="APLICACIÓN EDUCATIVA I"; $CodigoLiteral="MEM310"; break;
		case '2711': case 'MEM311':
						$MateriaNombre="ROLES ESTUDIANTILES"; $CodigoLiteral="MEM311"; break;
		case '2712': case 'MEM312':
						$MateriaNombre="TORTURA A ESTUDIANTES"; $CodigoLiteral="MEM312"; break;
		case '2713': case 'MEM413':
						$MateriaNombre="MATEMÁTICA TRIBUTARIA"; $CodigoLiteral="MEM413"; break;
		case '2714': case 'MEM414':
						$MateriaNombre="PÚBLICO DIFÍCIL COGNITIVO"; $CodigoLiteral="MEM414"; break;
		case '2715': case 'MEM415':
						$MateriaNombre="PÚBLICO FÁCIL COGNITIVO"; $CodigoLiteral="MEM415"; break;
		case '2716': case 'MEM416':
						$MateriaNombre="APROVECHAMIENTO SABIO"; $CodigoLiteral="MEM416"; break;
		case '2717': case 'MEM417':
						$MateriaNombre="APLICACIÓN EDUCATIVA II"; $CodigoLiteral="MEM417"; break;

	//IDIOAV
		case '281': case 'MIA11':
						$MateriaNombre="GESTION HOMOSEXUAL (NIVELATORIO)"; $CodigoLiteral="MIA11"; break;
		case '282': case 'MIA12':
						$MateriaNombre="GESTIÓN GENERAL"; $CodigoLiteral="MIA12"; break;
		case '283': case 'MIA13':
						$MateriaNombre="PENDEJADAS AUDIBLES"; $CodigoLiteral="MIA13"; break;
		case '284': case 'MIA14':
						$MateriaNombre="PENDEJADAS VISUALES"; $CodigoLiteral="MIA14"; break;
		case '285': case 'MIA15':
						$MateriaNombre="INDUCCIÓN SOCIAL MASIVA"; $CodigoLiteral="MIA15"; break;
		case '286': case 'MIA26':
						$MateriaNombre="GESTIÓN POPULAR GRATUITA"; $CodigoLiteral="MIA26"; break;
		case '287': case 'MIA27':
						$MateriaNombre="GESTIÓN POPULAR"; $CodigoLiteral="MIA27"; break;
		case '288': case 'MIA28':
						$MateriaNombre="TEATRO Y TEMARIOS I"; $CodigoLiteral="MIA28"; break;
		case '289': case 'MIA29':
						$MateriaNombre="PROPAGACIÓN LIMOSNERA"; $CodigoLiteral="MIA29"; break;
		case '2810': case 'MIA210':
						$MateriaNombre="MEDIOS TELEVISIVOS NACIONALES"; $CodigoLiteral="MIA210"; break;
		case '2811': case 'MIA311':
						$MateriaNombre="GESTIÓN DE IDIOTAS"; $CodigoLiteral="MIA311"; break;
		case '2812': case 'MIA312':
						$MateriaNombre="GESTIÓN DE PLAGAS/PROLES JUVENILES"; $CodigoLiteral="MIA312"; break;
		case '2813': case 'MIA313':
						$MateriaNombre="TEATRO Y TEMARIOS II"; $CodigoLiteral="MIA313"; break;
		case '2814': case 'MIA314':
						$MateriaNombre="ARGUMENTACIÓN DE CONTENIDO"; $CodigoLiteral="MIA314"; break;
		case '2815': case 'MIA315':
						$MateriaNombre="PROFUNDIZACIÓN EN ORIGINALIDAD"; $CodigoLiteral="MIA315"; break;
		case '2816': case 'MIA316A':
						$MateriaNombre="DIGNIDAD AUDITIVA"; $CodigoLiteral="MIA316A"; break;
		case '2817': case 'MIA316B':
						$MateriaNombre="DIGNIDAD VISUAL"; $CodigoLiteral="MIA316B"; break;
		case '2818': case 'MIA417':
						$MateriaNombre="ANTI-REPETITIVIDAD DEL CONTENIDO"; $CodigoLiteral="MIA417"; break;
		case '2819': case 'MIA418':
						$MateriaNombre="COMPILACIÓN AUDIOVISUAL"; $CodigoLiteral="MIA418"; break;
		case '2820': case 'MIA419':
						$MateriaNombre="CONTROL DEL ESTRELLATO"; $CodigoLiteral="MIA419"; break;
		case '2821': case 'MIA420':
						$MateriaNombre="HUMILDAD NULA"; $CodigoLiteral="MIA420"; break;
		case '2822': case 'MIA421':
						$MateriaNombre="FINANZAS VIRTUALES Y COBROS"; $CodigoLiteral="MIA421"; break;
		case '2823': case 'MIA422':
						$MateriaNombre="LENGUAJE MÚLTIPLE"; $CodigoLiteral="MIA422"; break;
		case '2824': case 'MIA423':
						$MateriaNombre="CONFESIÓN HOMOSEXUAL GANA-SEGUIDORES"; $CodigoLiteral="MIA423"; break;


//FACULTAD INGENIERÍAS PARTE 2
	//PRESID
		case '291': case 'IPR11':
						$MateriaNombre="DERECHO I"; $CodigoLiteral="IPR11"; break;
		case '292': case 'IPR12':
						$MateriaNombre="ALCALDÍA MENOR"; $CodigoLiteral="IPR12"; break;
		case '293': case 'IPR13':
						$MateriaNombre="CORRUPCIÓN I"; $CodigoLiteral="IPR13"; break;
		case '294': case 'IPR24':
						$MateriaNombre="DERECHO II"; $CodigoLiteral="IPR24"; break;
		case '295': case 'IPR25':
						$MateriaNombre="ALCALDÍA MAYOR"; $CodigoLiteral="IPR25"; break;
		case '296': case 'IPR26':
						$MateriaNombre="CORRUPCIÓN II"; $CodigoLiteral="IPR26"; break;
		case '297': case 'IPR27':
						$MateriaNombre="CONTROL ELECTORAL PREVIO"; $CodigoLiteral="IPR27"; break;
		case '298': case 'IPR28':
						$MateriaNombre="PLAGA CORRUPTA"; $CodigoLiteral="IPR28"; break;
		case '299': case 'IPR29':
						$MateriaNombre="CONSTITUCIÓN I"; $CodigoLiteral="IPR29"; break;
		case '2910': case 'IPR210':
						$MateriaNombre="ENMIERDATIZACIÓN CIUDADANA I"; $CodigoLiteral="IPR210"; break;
		case '2911': case 'IPR311':
						$MateriaNombre="ENMIERDATIZACIÓN CIUDADANA II"; $CodigoLiteral="IPR311"; break;
		case '2912': case 'IPR312':
						$MateriaNombre="CONSTITUCIÓN II"; $CodigoLiteral="IPR312"; break;
		case '2913': case 'IPR313':
						$MateriaNombre="CIUDADANÍA SUBSIDIO-DEPENDIENTE"; $CodigoLiteral="IPR313";
		case '2914': case 'IPR314':
						$MateriaNombre="PATRIOTISMO CONVENIENTE"; $CodigoLiteral="IPR314"; break;
		case '2915': case 'IPR315':
						$MateriaNombre="CENTRO PROBLEMÁTICO"; $CodigoLiteral="IPR315"; break;
		case '2916': case 'IPR316':
						$MateriaNombre="RELACIONES EXTERIORES"; $CodigoLiteral="IPR316"; break;
		case '2917': case 'IPR317':
						$MateriaNombre="DERECHO III"; $CodigoLiteral="IPR317"; break;
		case '2918': case 'IPR318':
						$MateriaNombre="EXTRAVÍO FINANCIERO"; $CodigoLiteral="IPR318"; break;
		case '2919': case 'IPR419':
						$MateriaNombre="ENMIERDATIZACIÓN CIUDADANA III"; $CodigoLiteral="IPR419"; break;
		case '2920': case 'IPR420':
						$MateriaNombre="CONSTITUCIÓN FINAL"; $CodigoLiteral="IPR420"; break;
		case '2921': case 'IPR421':
						$MateriaNombre="DERECHO IV"; $CodigoLiteral="IPR421"; break;
		case '2922': case 'IPR522':
						$MateriaNombre="DERECHO V"; $CodigoLiteral="IPR522"; break;
		case '2923': case 'IPR523':
						$MateriaNombre="INFLUENCIA ECLESIÁSTICA"; $CodigoLiteral="IPR523"; break;
		case '2924': case 'IPR524':
						$MateriaNombre="CONTROL CIEGO DE MINISTERIOS"; $CodigoLiteral="IPR524"; break;
		case '2925': case 'IPR525':
						$MateriaNombre="GOBERNACIÓN"; $CodigoLiteral="IPR525"; break;
		case '2926': case 'IPR526':
						$MateriaNombre="LENGUAJES EXTRANJEROS"; $CodigoLiteral="IPR526"; break;
		case '2927': case 'IPR527':
						$MateriaNombre="JUSTICIA INTERNACIONAL"; $CodigoLiteral="IPR527"; break;
		case '2928': case 'IPR628':
						$MateriaNombre="ESPALDARAZO POST-ELECTORAL"; $CodigoLiteral="IPR628"; break;
		case '2929': case 'IPR629':
						$MateriaNombre="FALSOS POSITIVOS"; $CodigoLiteral="IPR629"; break;
		case '2930': case 'IPR630':
						$MateriaNombre="CONDOLENCIA NACIONAL"; $CodigoLiteral="IPR630"; break;
		case '2931': case 'IPR631':
						$MateriaNombre="FRAUDE PRESIDENCIAL"; $CodigoLiteral="IPR631"; break;
		case '2932': case 'IPR632':
						$MateriaNombre="LAICISMO DORMIDO"; $CodigoLiteral="IPR632"; break;
		case '2933': case 'IPR633':
						$MateriaNombre="JUSTICIA BENDECIDA Y AFORTUNADA"; $CodigoLiteral="IPR633"; break;
		case '2934': case 'IPR634':
						$MateriaNombre="PROYECTO PRESIDENCIAL I"; $CodigoLiteral="IPR634"; break;
		case '2935': case 'IPR735':
						$MateriaNombre="PROYECTO PRESIDENCIAL II"; $CodigoLiteral="IPR735"; break;
		case '2936': case 'IPR736':
						$MateriaNombre="DERECHO VI"; $CodigoLiteral="IPR736"; break;
		case '2937': case 'IPR737':
						$MateriaNombre="VENTA DE LA PATRIA"; $CodigoLiteral="IPR737"; break;
		case '2938': case 'IPR738':
						$MateriaNombre="MANIPULACIÓN TELEVISIVA DE PROLES"; $CodigoLiteral="IPR738"; break;
		case '2939': case 'IPR739':
						$MateriaNombre="VIOLENCIA PARA TODOS"; $CodigoLiteral="IPR739"; break;
		case '2940': case 'IPR740':
						$MateriaNombre="PUEBLO ADULTO DORMIDO IGNORANTE"; $CodigoLiteral="IPR740"; break;
		case '2941': case 'IPR741':
						$MateriaNombre="PUEBLO JOVEN ACTIVO OPRIMIDO"; $CodigoLiteral="IPR741"; break;
		case '2942': case 'IPR742':
						$MateriaNombre="MANDATO PROLONGADO"; $CodigoLiteral="IPR742"; break;
		case '2943': case 'IPR743':
						$MateriaNombre="ELECTIVA"; $CodigoLiteral="IPR743"; break;

			########################################
			#### 			ELECTIVAS 			####
			########################################
			case '2944': case 'IPR-E01':
						$MateriaNombre="MILITARIZACIÓN CONVENIENTE"; $CodigoLiteral="IPR-E01"; break;
			case '2945': case 'IPR-E02':
						$MateriaNombre="APROVECHAMIENTO DE LA IGNORANCIA"; $CodigoLiteral="IPR-E02"; break;
			case '2946': case 'IPR-E03':
						$MateriaNombre="CULPABILIDAD EVADIDA"; $CodigoLiteral="IPR-E03"; break;
			case '2947': case 'IPR-E04':
						$MateriaNombre="FALSEDAD DEL DISCURSO"; $CodigoLiteral="IPR-E04"; break;
			case '2948': case 'IPR-E05':
						$MateriaNombre="COMPRA DEL SILENCIO"; $CodigoLiteral="IPR-E05"; break;
			case '2949': case 'IPR-E06':
						$MateriaNombre="SISTEMA DE IMPUESTOS"; $CodigoLiteral="IPR-E06"; break;
			case '2950': case 'IPR-E07':
						$MateriaNombre="TENTATIVA DE ENTREGA PATRIÓTICA"; $CodigoLiteral="IPR-E07"; break;
			case '2951': case 'IPR-E08':
						$MateriaNombre="PROCLAMACIÓN INDEBIDA"; $CodigoLiteral="IPR-E08"; break;
			case '2952': case 'IPR-E09':
						$MateriaNombre="EVASIÓN CONSTITUCIONAL"; $CodigoLiteral="IPR-E09"; break;


	//DESPER
		case '301': case 'IDP11':
						$MateriaNombre="TEORÍA MÍSERA"; $CodigoLiteral="IDP11"; break;
		case '302': case 'IDP12':
						$MateriaNombre="DIALECTO DESTRUCTIVO"; $CodigoLiteral="IDP12"; break;
		case '303': case 'IDP13':
						$MateriaNombre="PROBABILIDAD SUICIDA"; $CodigoLiteral="IDP13"; break;
		case '304': case 'IDP24':
						$MateriaNombre="ENTORNO"; $CodigoLiteral="IDP24"; break;
		case '305': case 'IDP25':
						$MateriaNombre="DESTRUCCIÓN I"; $CodigoLiteral="IDP25"; break;
		case '306': case 'IDP36':
						$MateriaNombre="DESTRUCCIÓN INTERNA"; $CodigoLiteral="IDP36"; break;
		case '307': case 'IDP37':
						$MateriaNombre="PROBABILIDADES"; $CodigoLiteral="IDP37"; break;
		case '308': case 'IDP38':
						$MateriaNombre="DESTRUCCIÓN VENGATIVA"; $CodigoLiteral="IDP38"; break;
		case '309': case 'IDP49':
						$MateriaNombre="TEORÍA DE LA CRÍTICA"; $CodigoLiteral="IDP49"; break;
		case '3010': case 'IDP410':
						$MateriaNombre="INSULTOS I"; $CodigoLiteral="IDP410"; break;
		case '3011': case 'IDP411':
						$MateriaNombre="DESTRUCCIÓN II"; $CodigoLiteral="IDP411"; break;
		case '3012': case 'IDP412':
						$MateriaNombre="VENENO I"; $CodigoLiteral="IDP412"; break;
		case '3013': case 'IDP413':
						$MateriaNombre="CONTROL MORTÍFERO"; $CodigoLiteral="IDP413"; break;
		case '3014': case 'IDP514':
						$MateriaNombre="INSULTOS II"; $CodigoLiteral="IDP514"; break;
		case '3015': case 'IDP515':
						$MateriaNombre="VENENO II"; $CodigoLiteral="IDP515"; break;
		case '3016': case 'IDP516':
						$MateriaNombre="DESTRUCCIÓN III"; $CodigoLiteral="IDP516"; break;
		case '3017': case 'IDP617':
						$MateriaNombre="EXPRESIVIDAD CORPORAL"; $CodigoLiteral="IDP617"; break;
		case '3018': case 'IDP618':
						$MateriaNombre="PROYECTO DESTRUCTIVO I"; $CodigoLiteral="IDP618"; break;
		case '3019': case 'IDP619':
						$MateriaNombre="MISERIA PRIVADA"; $CodigoLiteral="IDP619"; break;
		case '3020': case 'IDP620':
						$MateriaNombre="DESTRUCCIÓN ESTRATIFICADA"; $CodigoLiteral="IDP620"; break;
		case '3021': case 'IDP721':
						$MateriaNombre="INSULTOS III"; $CodigoLiteral="IDP721"; break;
		case '3022': case 'IDP722':
						$MateriaNombre="VENENO III"; $CodigoLiteral="IDP722"; break;
		case '3023': case 'IDP723':
						$MateriaNombre="DESTRUCCIÓN IV"; $CodigoLiteral="IDP723"; break;
		case '3024': case 'IDP724':
						$MateriaNombre="PROYECTO DESTRUCTIVO II"; $CodigoLiteral="IDP724"; break;

//FACULTAD CONTINUA
	//CREDES
		case '351': case 'CRS01':
						$MateriaNombre="DATOS Y REGISTROS"; $CodigoLiteral="CRS01"; break;
		case '352': case 'CRS02':
						$MateriaNombre="CAPACIDAD PÚBLICA"; $CodigoLiteral="CRS02"; break;
		case '353': case 'CRS03':
						$MateriaNombre="CAPACIDAD PRIVADA"; $CodigoLiteral="CRS03"; break;
		case '354': case 'CRS04':
						$MateriaNombre="INTELECTO DUDOSO"; $CodigoLiteral="CRS04"; break;
		case '355': case 'CRS05':
						$MateriaNombre="EGOÍSMO PROPIO"; $CodigoLiteral="CRS05"; break;
		case '356': case 'CRS06':
						$MateriaNombre="AUTOESTIMA POR NIVELES"; $CodigoLiteral="CRS06"; break;
		case '357': case 'CRS07':
						$MateriaNombre="ESTRATOS VIRTUALES"; $CodigoLiteral="CRS07"; break;
		case '358': case 'CRS08':
						$MateriaNombre="BURLA BÁSICA"; $CodigoLiteral="CRS08"; break;
		case '359': case 'CRS09':
						$MateriaNombre="IDONEIDAD PUBLICITARIA"; $CodigoLiteral="CRS09"; break;
		case '3510': case 'CRS10':
						$MateriaNombre="CONTROL DE MASAS"; $CodigoLiteral="CRS10"; break;
		case '3511': case 'CRS11':
						$MateriaNombre="CRÍTICA ORTOGRÁFICA"; $CodigoLiteral="CRS11"; break;
		case '3512': case 'CRS12':
						$MateriaNombre="REALIDADES Y FALSEDAD"; $CodigoLiteral="CRS12"; break;
		case '3513': case 'CRS1A':
						$MateriaNombre="POBLACIÓN INFANTIL"; $CodigoLiteral="CRS1A"; break;
		case '3514': case 'CRS1B':
						$MateriaNombre="POBLACIÓN JUVENIL"; $CodigoLiteral="CRS1B"; break;
		case '3515': case 'CRS1C':
						$MateriaNombre="POBLACIÓN ADULTA"; $CodigoLiteral="CRS1C"; break;
		case '3516': case 'CRS1D':
						$MateriaNombre="POBLACIÓN MUERTA"; $CodigoLiteral="CRS1D"; break;
		case '3517': case 'CRS2A':
						$MateriaNombre="BANEO"; $CodigoLiteral="CRS2A"; break;
		case '3518': case 'CRS2B':
						$MateriaNombre="ACEPTACIÓN GRUPAL PÚBLICA"; $CodigoLiteral="CRS2B"; break;
		case '3519': case 'CRS2C':
						$MateriaNombre="ACEPTACIÓN GRUPAL PRIVADA"; $CodigoLiteral="CRS2C"; break;
		case '3520': case 'CRS3A':
						$MateriaNombre="TEORÍA DEL MEME"; $CodigoLiteral="CRS3A"; break;
		case '3521': case 'CRS3B':
						$MateriaNombre="INTRODUCCIÓN AL DIBUJO"; $CodigoLiteral="CRS3B"; break;
		case '3522': case 'CRS4A':
						$MateriaNombre="CALIDAD TEXTUAL"; $CodigoLiteral="CRS4A"; break;
		case '3523': case 'CRS4B':
						$MateriaNombre="CALIDAD GRÁFICA"; $CodigoLiteral="CRS4B"; break;
		case '3524': case 'CRS4C':
						$MateriaNombre="CALIDAD AUDIOVISUAL"; $CodigoLiteral="CRS4C"; break;
		case '3525': case 'CRS5A':
						$MateriaNombre="SEXUALIDAD IMPLÍCITA LEVE"; $CodigoLiteral="CRS5A"; break;
		case '3526': case 'CRS5B':
						$MateriaNombre="SEXUALIDAD A FLOTE"; $CodigoLiteral="CRS5B"; break;

//FACULTAD INGENIERÍAS PARTE 3
	//JUVENT
		case '341': case 'IJV11':
						$MateriaNombre="OBJETIVIDAD"; $CodigoLiteral="IJV11"; break;
		case '342': case 'IJV12':
						$MateriaNombre="PUBERTAD I"; $CodigoLiteral="IJV12"; break;
		case '343': case 'IJV13':
						$MateriaNombre="ÑERISMO ECOLÓGICO"; $CodigoLiteral="IJV13"; break;
		case '344': case 'IJV14':
						$MateriaNombre="VANDALISMO"; $CodigoLiteral="IJV14"; break;
		case '345': case 'IJV15':
						$MateriaNombre="INTELECTO ESTRATIFICADO"; $CodigoLiteral="IJV15"; break;
		case '346': case 'IJV26':
						$MateriaNombre="DEPENDENCIA PARENTAL"; $CodigoLiteral="IJV26"; break;
		case '347': case 'IJV27':
						$MateriaNombre="LENGUAJE CON GLAMOUR"; $CodigoLiteral="IJV27"; break;
		case '348': case 'IJV28':
						$MateriaNombre="PROCESOS PREÑÁTICOS"; $CodigoLiteral="IJV28"; break;
		case '349': case 'IJV39':
						$MateriaNombre="CRÍTICA CONSTRUCTIVA"; $CodigoLiteral="IJV39"; break;
		case '3410': case 'IJV310':
						$MateriaNombre="PROCESOS ACADÉMICOS"; $CodigoLiteral="IJV310"; break;
		case '3411': case 'IJV311':
						$MateriaNombre="LENGUAJE SOEZ & VULGAR"; $CodigoLiteral="IJV311"; break;
		case '3412': case 'IJV312':
						$MateriaNombre="BULLYING SANO"; $CodigoLiteral="IJV312"; break;
		case '3413': case 'IJV413':
						$MateriaNombre="APARIENCIAS ENGAÑOSAS"; $CodigoLiteral="IJV413"; break;
		case '3414': case 'IJV414':
						$MateriaNombre="JUVENTUD ACADÉMICA"; $CodigoLiteral="IJV414"; break;
		case '3415': case 'IJV515':
						$MateriaNombre="BASE FUTURISTA JUVENIL"; $CodigoLiteral="IJV515"; break;
		case '3416': case 'IJV516':
						$MateriaNombre="JUVENTUD ECONÓMICA"; $CodigoLiteral="IJV516"; break;
		case '3417': case 'IJV617':
						$MateriaNombre="PROYECTO JUVENIL I"; $CodigoLiteral="IJV617"; break;
		case '3418': case 'IJV618':
						$MateriaNombre="FANATISMO"; $CodigoLiteral="IJV618"; break;
		case '3419': case 'IJV719':
						$MateriaNombre="PROYECTO JUVENIL II"; $CodigoLiteral="IJV719"; break;
		case '3420': case 'IJV720':
						$MateriaNombre="PERSONALIDAD II"; $CodigoLiteral="IJV720"; break;
		case '3421': case 'IJV721':
						$MateriaNombre="BULLYING NEFASTO"; $CodigoLiteral="IJV721"; break;
		case '3422': case 'IJV722':
						$MateriaNombre="ANTIREPRODUCTIVIDAD"; $CodigoLiteral="IJV722"; break;
		case '3423': case 'IJV723':
						$MateriaNombre="TEORÍA MILENIALISTA"; $CodigoLiteral="IJV723"; break;
		case '3424': case 'IJV724':
						$MateriaNombre="JUVENTUD MUNDIAL"; $CodigoLiteral="IJV724"; break;

	//GLAMUR
		case '311': case 'IGM11':
						$MateriaNombre="TEORÍA DE LA MODA"; $CodigoLiteral="IGM11"; break;
		case '312': case 'IGM12':
						$MateriaNombre="LÍNEA DE TIEMPO"; $CodigoLiteral="IGM12"; break;
		case '313': case 'IGM13':
						$MateriaNombre="TEORÍA DEL GLAMOUR"; $CodigoLiteral="IGM13"; break;
		case '314': case 'IGM24':
						$MateriaNombre="TALLAS Y TAMAÑOS"; $CodigoLiteral="IGM24"; break;
		case '315': case 'IGM35':
						$MateriaNombre="MODA LOCAL"; $CodigoLiteral="IGM35"; break;
		case '316': case 'IGM36':
						$MateriaNombre="GLAMOUR I"; $CodigoLiteral="IGM36"; break;
		case '317': case 'IGM37':
						$MateriaNombre="CRÍTICA DE LA MODA"; $CodigoLiteral="IGM37"; break;
		case '318': case 'IGM38':
						$MateriaNombre="CRÍTICA DEL GLAMOUR"; $CodigoLiteral="IGM38"; break;
		case '319': case 'IGM49':
						$MateriaNombre="MODA NACIONAL Y PATRIÓTICA"; $CodigoLiteral="IGM49"; break;
		case '3110': case 'IGM410':
						$MateriaNombre="GLAMOUR II"; $CodigoLiteral="IGM410"; break;
		case '3111': case 'IGM411':
						$MateriaNombre="CRÍTICA PROFESIONAL"; $CodigoLiteral="IGM411"; break;
		case '3112': case 'IGM512':
						$MateriaNombre="AUDITORÍA DE LA MODA"; $CodigoLiteral="IGM512"; break;
		case '3113': case 'IGM513':
						$MateriaNombre="AUDITORÍA DEL GLAMOUR"; $CodigoLiteral="IGM513"; break;
		case '3114': case 'IGM514':
						$MateriaNombre="PROCESOS VESTUARIOS"; $CodigoLiteral="IGM514"; break;
		case '3115': case 'IGM515':
						$MateriaNombre="PASARELA I"; $CodigoLiteral="IGM515"; break;
		case '3116': case 'IGM616':
						$MateriaNombre="PROYECTO DE GLAMOUR"; $CodigoLiteral="IGM616"; break;
		case '3117': case 'IGM617':
						$MateriaNombre="PROYECTO DE MODA"; $CodigoLiteral="IGM617"; break;
		case '3118': case 'IGM618':
						$MateriaNombre="MARCO MÍSERO DE LA MODA"; $CodigoLiteral="IGM618"; break;
		case '3119': case 'IGM619':
						$MateriaNombre="PASARELA II"; $CodigoLiteral="IGM619"; break;
		case '3120': case 'IGM720':
						$MateriaNombre="MODA Y GLAMOUR"; $CodigoLiteral="IGM720"; break;
		case '3121': case 'IGM721':
						$MateriaNombre="SEGURIDAD TEXTIL"; $CodigoLiteral="IGM721"; break;
		case '3122': case 'IGM722':
						$MateriaNombre="DESFILES DEL HAMBRE"; $CodigoLiteral="IGM722"; break;
		case '3123': case 'IGM723':
						$MateriaNombre="MODA INTERNACIONAL"; $CodigoLiteral="IGM723"; break;
						//ASIGNATURA NO EXISTE
	default:
					$MateriaNombre="ASIGNATURA DESCONOCIDA (ERROR)";
	$MateriaNombreCorto="ASIGNATURA DESCONOCIDA (ERROR)";
	$CodigoLiteral="";
	break;

}

?>

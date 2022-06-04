<?php
#Universidad Mísera de Colombia
#División Superior Sistemas Informáticos
#División Superior Registro y Control
#División Superior Planeación Académica
#División Superior Dirección de Facultades

//Última fecha de revisión: 2019-DICIEMBRE-29-06:16AM

#Archivo de control de datos de asignaturas académicos respecto a los programas académicos

class Asignaturas{

	//Entrega el valor numérico de créditos académicos
	public function CreditosAcademicos($x){

		switch ($x) {
			//1 Crédito Académico
				case 108:
				case 109:
				case 1011:
				case 116:
				case 119:
				case 1110:
				case 141:
				case 145:
				case 1410:
				case 151:
				case 1616:
				case 1617:
				case 1621:
				case 1711:
				case 1712:
				case 1813:
				case 1823:
				case 1825:
				case 1826:
				case 1827:
				case 1915:
				case 202:
				case 2023:
				case 2026:
				case 212:
				case 213:
				case 2120:
				case 2136:
				case 2137:
				case 2222:
				case 2223:
				case 2235:
				case 231:
				case 2329:
				case 2337:
				case 2414:
				case 2416:
				case 2926:
				case 2932:
				case 2936:
				case 304:
				case 3019:
				case 347:
				case 3415:
				case 3416:
				case 319:
				case 3122:
				case 3315:
				case 3316:
				case 2150:
				case 3622:
				case 3711:
				case 3714:
					$r = 1;
				break;
				
			//2 Créditos Académicos
				case 118:
				case 2028:
				case 2029:
				case 216:
				case 217:
				case 2115:
				case 2123:
				case 2128:
				case 2135:
				case 224:
				case 225:
				case 2214:
				case 2215:
				case 2216:
				case 2218:
				case 2226:
				case 2227:
				case 2234:
				case 2236:
				case 2237:
				case 234:
				case 2312:
				case 2314:
				case 2322:
				case 2326:
				case 2335:
				case 2336:
				case 248:
				case 2411:
				case 2412:
				case 2413:
				case 2418:
				case 2419:
				case 2426:
				case 2914:
				case 2916:
				case 2920:
				case 2922:
				case 2930:
				case 2931:
				case 2935:
				case 303:
				case 309:
				case 3017:
				case 3024:
				case 343:
				case 344:
				case 345:
				case 346:
				case 349:
				case 3414:
				case 3419:
				case 314:
				case 315:
				case 317:
				case 318:
				case 3121:
				case 337:
				case 3311:
				case 3312:
				case 3320:
				case 3324:
				case 3326:
				case 2147:
				case 2152:
				case 2153:
				case 2144:
				case 2145:
				case 362:
				case 3615:
				case 3616:
				case 3618:
				case 3623:
				case 375:
				case 3712:
				case 3713:
				case 3715:
					$r = 2 ;
				break;

			//3 Créditos Académicos
				case 105:
				case 107:
				case 1010:
				case 115:
				case 117:
				case 125:
				case 126:
				case 128:
				case 134:
				case 135:
				case 136:
				case 137:
				case 144:
				case 147:
				case 149:
				case 158:
				case 163:
				case 165:
				case 166:
				case 169:
				case 1612:
				case 1613:
				case 1614:
				case 1615:
				case 1620:
				case 1623:
				case 172:
				case 176:
				case 178:
				case 1710:
				case 1714:
				case 1717:
				case 186:
				case 187:
				case 1811:
				case 1812:
				case 1815:
				case 1816:
				case 1817:
				case 1819:
				case 1820:
				case 1821:
				case 1829:
				case 191:
				case 192:
				case 194:
				case 196:
				case 1910:
				case 1912:
				case 1914:
				case 201:
				case 204:
				case 206:
				case 207:
				case 208:
				case 209:
				case 2012:
				case 2017:
				case 2019:
				case 2022:
				case 2027:
				case 211:
				case 218:
				case 219:
				case 2112:
				case 2113:
				case 2122:
				case 2126:
				case 2127:
				case 2134:
				case 2138:
				case 227:
				case 2211:
				case 2217:
				case 2219:
				case 2225:
				case 2233:
				case 238:
				case 2315:
				case 2317:
				case 2320:
				case 2321:
				case 2327:
				case 2328:
				case 2334:
				case 2341:
				case 2342:
				case 2344:
				case 2410:
				case 2417:
				case 2421:
				case 2424:
				case 2425:
				case 2428:
				case 297:
				case 2913:
				case 2921:
				case 2924:
				case 2925:
				case 2938:
				case 2939:
				case 2940:
				case 2942:
				case 301:
				case 302:
				case 308:
				case 3023:
				case 341:
				case 3410:
				case 3411:
				case 3413:
				case 3418:
				case 3423:
				case 311:
				case 312:
				case 313:
				case 3114:
				case 3118:
				case 3120:
				case 332:
				case 335:
				case 336:
				case 339:
				case 3322:
				case 3325:
				case 2148:
				case 2151:
				case 2143:
				case 363:
				case 3614:
				case 3619:
				case 3624:
				case 3626:
				case 373:
				case 377:
				case 3710:
					$r = 3;
				break;

			//4 Créditos Académicos
				case 104:
				case 106:
				case 113:
				case 114:
				case 122:
				case 123:
				case 131:
				case 132:
				case 133:
				case 142:
				case 143:
				case 146:
				case 152:
				case 153:
				case 155:
				case 156:
				case 167:
				case 168:
				case 1610:
				case 173:
				case 1718:
				case 188:
				case 189:
				case 1810:
				case 1828:
				case 1830:
				case 193:
				case 197:
				case 198:
				case 1917:
				case 2015:
				case 2016:
				case 2020:
				case 2021:
				case 2025:
				case 2121:
				case 2129:
				case 2130:
				case 2131:
				case 2132:
				case 2133:
				case 2213:
				case 2224:
				case 2310:
				case 2311:
				case 2323:
				case 2324:
				case 2338:
				case 2340:
				case 247:
				case 2420:
				case 2423:
				case 2429:
				case 2430:
				case 2917:
				case 2918:
				case 2919:
				case 2923:
				case 2928:
				case 2937:
				case 307:
				case 3016:
				case 3021:
				case 3022:
				case 3424:
				case 3111:
				case 333:
				case 338:
				case 3310:
				case 3314:
				case 3317:
				case 2142:
				case 2149:
				case 364:
				case 3611:
				case 3612:
				case 3613:
				case 3617:
				case 3620:
				case 3621:
				case 3627:
				case 376:
				case 378:
					$r = 4;
				break;

			//5 Créditos Académicos
				case 103:
				case 1014:
				case 1013:
				case 1012:
				case 161:
				case 162:
				case 1611:
				case 1619:
				case 171:
				case 1719:
				case 182:
				case 183:
				case 184:
				case 1822:
				case 1824:
				case 1916:
				case 203:
				case 2018:
				case 2114:
				case 2116:
				case 2117:
				case 2118:
				case 2121:
				case 2125:
				case 228:
				case 2210:
				case 2212:
				case 2228:
				case 2229:
				case 2230:
				case 2231:
				case 2238:
				case 2239:
				case 236:
				case 237:
				case 2313:
				case 2316:
				case 2330:
				case 2331:
				case 2332:
				case 2339:
				case 2343:
				case 242:
				case 245:
				case 246:
				case 2422:
				case 2427:
				case 2431:
				case 2432:
				case 292:
				case 294:
				case 295:
				case 296:
				case 2911:
				case 2912:
				case 2941:
				case 306:
				case 3011:
				case 3014:
				case 3015:
				case 3020:
				case 348:
				case 3412:
				case 3420:
				case 3422:
				case 3110:
				case 3112:
				case 3113:
				case 3117:
				case 3123:
				case 334:
				case 3313:
				case 3319:
				case 2139:
				case 2146:
				case 2141:
				case 365:
				case 366:
				case 369:
				case 3610:
				case 374:
				case 379:
					$r = 5 ;
				break;

			//6 Créditos Académicos
				case 102:
				case 214:
				case 215:
				case 2110:
				case 2111:
				case 2119:
				case 221:
				case 222:
				case 223:
				case 226:
				case 229:
				case 2220:
				case 2221:
				case 2232:
				case 2240:
				case 2241:
				case 232:
				case 233:
				case 235:
				case 239:
				case 2318:
				case 2319:
				case 2325:
				case 2333:
				case 2345:
				case 241:
				case 243:
				case 244:
				case 249:
				case 2415:
				case 291:
				case 293:
				case 298:
				case 299:
				case 2910:
				case 2915:
				case 2927:
				case 2929:
				case 2933:
				case 2943:
				case 305:
				case 3010:
				case 3012:
				case 3013:
				case 342:
				case 3421:
				case 316:
				case 3115:
				case 3116:
				case 3119:
				case 331:
				case 3318:
				case 2140:
				case 367:
				case 368:
				case 371:
				case 372:
					$r = 6 ;
				break;

			//8 Créditos Académicos
				case 101:
				case 2934:
				case 3018:
				case 3417:
					$r = 8;
				break;

			//No créditos
				default:
					$r = 0;
				break;

		}

		return $r ;
	}

	//Entrega las asignaturas equivalentes a X asignatura para efectos de acreditacion/homologacion
	public function EquivalenciasAcreditablesHomologables($x){
		return true;
	}

	//Entrega el código numérico de una asignatura a partir de su código literal
	public function AsignaturaCodigoN($x){
		switch ($x) {
			//Facultad Mísera (Míseras Generales Básicas)
				case "MGB1":	$r	=	101;	break;
				case "MGB2":	$r	=	102;	break;
				case "MGB3":	$r	=	103;	break;
				case "MGB4":	$r	=	104;	break;
				case "MGB5":	$r	=	105;	break;
				case "MGB6":	$r	=	106;	break;
				case "MGB7":	$r	=	107;	break;
				case "MGB8":	$r	=	108;	break;
				case "MGB9":	$r	=	109;	break;
				case "MGB10":	$r	=	1010;	break;
				case "MGB11":	$r	=	1011;	break;
				case "MGB12":	$r	=	1012;	break;
				case "MGB13":	$r	=	1013;	break;
				case "MGB14":	$r	=	1014;	break;
			
			//Facultad Básica
				//Técnico Ortografía
					case "BOR11":	$r	=	111;
					case "BOR12":	$r	=	112;
					case "BOR13":	$r	=	113;
					case "BOR14":	$r	=	114;
					case "BOR15":	$r	=	115;
					case "BOR16":	$r	=	116;
					case "BOR27":	$r	=	117;
					case "BOR28":	$r	=	118;
					case "BOR29":	$r	=	119;
					case "BOR210":	$r	=	1110;
				//Técnico Dignidad Sentimental
					case "BDS11":	$r	=	121;
					case "BDS12":	$r	=	122;
					case "BDS13":	$r	=	123;
					case "BDS14":	$r	=	124;
					case "BDS15":	$r	=	125;
					case "BDS16":	$r	=	126;
					case "BDS27":	$r	=	127;
					case "BDS28":	$r	=	128;
					case "BDS29":	$r	=	129;
					case "BDS210":	$r	=	1210;
				//Técnico Miserableza
					case "BMI11":	$r	=	131;
					case "BMI12":	$r	=	132;
					case "BMI13":	$r	=	133;
					case "BMI24":	$r	=	134;
					case "BMI25":	$r	=	135;
					case "BMI26":	$r	=	136;
					case "BMI27":	$r	=	137;
				//Técnico Sociedad Web
					case "BSI11":	$r	=	141;
					case "BSI12":	$r	=	142;
					case "BSI13":	$r	=	143;
					case "BSI14":	$r	=	144;
					case "BSI15":	$r	=	145;
					case "BSI16":	$r	=	146;
					case "BSI27":	$r	=	147;
					case "BSI28":	$r	=	148;
					case "BSI29":	$r	=	149;
					case "BSI210":	$r	=	1410;
				//Técnico Gestión Bisexual
					case "BGB11":	$r	=	151;
					case "BGB12":	$r	=	152;
					case "BGB13":	$r	=	153;
					case "BGB14":	$r	=	154;
					case "BGB15":	$r	=	155;
					case "BGB26":	$r	=	156;
					case "BGB27":	$r	=	157;
					case "BGB28":	$r	=	158;

			//Facultad Tecnologías
				//Tecnología Dignidad Humana
					case "TDH11":	$r	=	161;	break;
					case "TDH12":	$r	=	162;	break;
					case "TDH23":	$r	=	163;	break;
					case "TDH24":	$r	=	164;	break;
					case "TDH25":	$r	=	165;	break;
					case "TDH26":	$r	=	166;	break;
					case "TDH27":	$r	=	167;	break;
					case "TDH28":	$r	=	168;	break;
					case "TDH39":	$r	=	169;	break;
					case "TDH310":	$r	=	1610;	break;
					case "TDH311":	$r	=	1611;	break;
					case "TDH312":	$r	=	1612;	break;
					case "TDH313":	$r	=	1613;	break;
					case "TDH414":	$r	=	1614;	break;
					case "TDH415":	$r	=	1615;	break;
					case "TDH416":	$r	=	1616;	break;
					case "TDH417":	$r	=	1617;	break;
					case "TDH418":	$r	=	1618;	break;
					case "TDH419":	$r	=	1619;	break;
					case "TDH520":	$r	=	1620;	break;
					case "TDH521":	$r	=	1621;	break;
					case "TDH522":	$r	=	1622;	break;
					case "TDH523":	$r	=	1623;	break;
				//Tecnología Finanzas Familiares Personales
					case "TFP11":	$r	=	171;	break;
					case "TFP22":	$r	=	172;	break;
					case "TFP23":	$r	=	173;	break;
					case "TFP24":	$r	=	174;	break;
					case "TFP35":	$r	=	175;	break;
					case "TFP36":	$r	=	176;	break;
					case "TFP37":	$r	=	177;	break;
					case "TFP38":	$r	=	178;	break;
					case "TFP49":	$r	=	179;	break;
					case "TFP410":	$r	=	1710;	break;
					case "TFP411":	$r	=	1711;	break;
					case "TFP412":	$r	=	1712;	break;
					case "TFP513":	$r	=	1713;	break;
					case "TFP514":	$r	=	1714;	break;
					case "TFP515":	$r	=	1715;	break;
					case "TFP516":	$r	=	1716;	break;
					case "TFP517":	$r	=	1717;	break;
					case "TFP518":	$r	=	1718;	break;
					case "TFP519":	$r	=	1719;	break;
				//Tecnología Identificación Personal
					case "TIP11":	$r	=	181;	break;
					case "TIP12":	$r	=	182;	break;
					case "TIP13":	$r	=	183;	break;
					case "TIP14":	$r	=	184;	break;
					case "TIP15":	$r	=	185;	break;
					case "TIP16":	$r	=	186;	break;
					case "TIP27":	$r	=	187;	break;
					case "TIP28":	$r	=	188;	break;
					case "TIP29":	$r	=	189;	break;
					case "TIP210":	$r	=	1810;	break;
					case "TIP211":	$r	=	1811;	break;
					case "TIP212":	$r	=	1812;	break;
					case "TIP213":	$r	=	1813;	break;
					case "TIP314":	$r	=	1814;	break;
					case "TIP315":	$r	=	1815;	break;
					case "TIP316":	$r	=	1816;	break;
					case "TIP317":	$r	=	1817;	break;
					case "TIP318":	$r	=	1818;	break;
					case "TIP319":	$r	=	1819;	break;
					case "TIP320":	$r	=	1820;	break;
					case "TIP421":	$r	=	1821;	break;
					case "TIP422":	$r	=	1822;	break;
					case "TIP423":	$r	=	1823;	break;
					case "TIP424":	$r	=	1824;	break;
					case "TIP425":	$r	=	1825;	break;
					case "TIP426":	$r	=	1826;	break;
					case "TIP427":	$r	=	1827;	break;
					case "TIP528":	$r	=	1828;	break;
					case "TIP529":	$r	=	1829;	break;
					case "TIP530":	$r	=	1830;	break;
				//Tecnología Gestión Heterosexual
					case "THE11":	$r	=	191;	break;
					case "THE12":	$r	=	192;	break;
					case "THE13":	$r	=	193;	break;
					case "THE14":	$r	=	194;	break;
					case "THE25":	$r	=	195;	break;
					case "THE26":	$r	=	196;	break;
					case "THE27":	$r	=	197;	break;
					case "THE38":	$r	=	198;	break;
					case "THE39":	$r	=	199;	break;
					case "THE310":	$r	=	1910;	break;
					case "THE311":	$r	=	1911;	break;
					case "THE412":	$r	=	1912;	break;
					case "THE513":	$r	=	1913;	break;
					case "THE514":	$r	=	1914;	break;
					case "THE515":	$r	=	1915;	break;
					case "THE516":	$r	=	1916;	break;
					case "THE517":	$r	=	1917;	break;
				//Tecnología Gestión Homosexual
					case "THO11":	$r	=	201;	break;
					case "THO12":	$r	=	202;	break;
					case "THO13":	$r	=	203;	break;
					case "THO14":	$r	=	204;	break;
					case "THO15":	$r	=	205;	break;
					case "THO26":	$r	=	206;	break;
					case "THO27":	$r	=	207;	break;
					case "THO28":	$r	=	208;	break;
					case "THO29":	$r	=	209;	break;
					case "THO310":	$r	=	2010;	break;
					case "THO311":	$r	=	2011;	break;
					case "THO312":	$r	=	2012;	break;
					case "THO313":	$r	=	2013;	break;
					case "THO314":	$r	=	2014;	break;
					case "THO315":	$r	=	2015;	break;
					case "THO316":	$r	=	2016;	break;
					case "THO317":	$r	=	2017;	break;
					case "THO418":	$r	=	2018;	break;
					case "THO419":	$r	=	2019;	break;
					case "THO420":	$r	=	2020;	break;
					case "THO421":	$r	=	2021;	break;
					case "THO422":	$r	=	2022;	break;
					case "THO423":	$r	=	2023;	break;
					case "THO524":	$r	=	2024;	break;
					case "THO525":	$r	=	2025;	break;
					case "THO526":	$r	=	2026;	break;
					case "THO527":	$r	=	2027;	break;
					case "THO528":	$r	=	2028;	break;
					case "THO529":	$r	=	2029;	break;
				//Tecnología Depresión Cotidiana
					case "TDC11":	$r	=	391;	break;
					case "TDC12":	$r	=	392;	break;
					case "TDC13":	$r	=	393;	break;
					case "TDC24":	$r	=	394;	break;
					case "TDC25":	$r	=	395;	break;
					case "TDC26":	$r	=	396;	break;
					case "TDC27":	$r	=	397;	break;
					case "TDC28":	$r	=	398;	break;
					case "TDC39":	$r	=	399;	break;
					case "TDC310":	$r	=	3910;	break;
					case "TDC311":	$r	=	3911;	break;
					case "TDC312":	$r	=	3912;	break;
					case "TDC313":	$r	=	3913;	break;
					case "TDC414":	$r	=	3914;	break;
					case "TDC415":	$r	=	3915;	break;
					case "TDC416":	$r	=	3916;	break;
					case "TDC417":	$r	=	3917;	break;
					case "TDC518":	$r	=	3918;	break;
					case "TDC519":	$r	=	3919;	break;
					case "TDC520":	$r	=	3920;	break;
					case "TDC521":	$r	=	3921;	break;
					case "TDC522":	$r	=	3922;	break;

			//Facultad Ingenierías
				//Ingeniería Youtuber
					case "IYO11":	$r	=	211;	break;
					case "IYO12":	$r	=	212;	break;
					case "IYO13":	$r	=	213;	break;
					case "IYO14":	$r	=	214;	break;
					case "IYO15":	$r	=	215;	break;
					case "IYO26":	$r	=	216;	break;
					case "IYO27":	$r	=	217;	break;
					case "IYO28":	$r	=	218;	break;
					case "IYO29":	$r	=	219;	break;
					case "IYO210":	$r	=	2110;	break;
					case "IYO311":	$r	=	2111;	break;
					case "IYO312":	$r	=	2112;	break;
					case "IYO313":	$r	=	2113;	break;
					case "IYO314":	$r	=	2114;	break;
					case "IYO315":	$r	=	2115;	break;
					case "IYO416":	$r	=	2116;	break;
					case "IYO417":	$r	=	2117;	break;
					case "IYO418":	$r	=	2118;	break;
					case "IYO419":	$r	=	2119;	break;
					case "IYO520":	$r	=	2120;	break;
					case "IYO521":	$r	=	2121;	break;
					case "IYO522":	$r	=	2122;	break;
					case "IYO523":	$r	=	2123;	break;
					case "IYO524":	$r	=	2124;	break;
					case "IYO525":	$r	=	2125;	break;
					case "IYO626":	$r	=	2126;	break;
					case "IYO627":	$r	=	2127;	break;
					case "IYO628":	$r	=	2128;	break;
					case "IYO629":	$r	=	2129;	break;
					case "IYO630":	$r	=	2130;	break;
					case "IYO631":	$r	=	2131;	break;
					case "IYO732":	$r	=	2132;	break;
					case "IYO733":	$r	=	2133;	break;
					case "IYO734":	$r	=	2134;	break;
					case "IYO735":	$r	=	2135;	break;
					case "IYO736":	$r	=	2136;	break;
					case "IYO737":	$r	=	2137;	break;
					case "IYO738":	$r	=	2138;	break;
					case "IYO139":	$r	=	2139;	break;
					case "IYO240":	$r	=	2140;	break;
					case "IYO341":	$r	=	2141;	break;
					case "IYO442":	$r	=	2142;	break;
					case "IYO643":	$r	=	2143;	break;
					case "IYO744":	$r	=	2144;	break;
					case "IYO745":	$r	=	2145;	break;
					case "IYO246":	$r	=	2146;	break;
					case "IYO247":	$r	=	2147;	break;
					case "IYO348":	$r	=	2148;	break;
					case "IYO449":	$r	=	2149;	break;
					case "IYO650":	$r	=	2150;	break;
					case "IYO551":	$r	=	2151;	break;
					case "IYO552":	$r	=	2152;	break;
					case "IYO553":	$r	=	2153;	break;
				//Ingeniería Financiera
					case "IFZ11":	$r	=	221;	break;
					case "IFZ12":	$r	=	222;	break;
					case "IFZ13":	$r	=	223;	break;
					case "IFZ14":	$r	=	224;	break;
					case "IFZ15":	$r	=	225;	break;
					case "IFZ16":	$r	=	226;	break;
					case "IFZ27":	$r	=	227;	break;
					case "IFZ28":	$r	=	228;	break;
					case "IFZ29":	$r	=	229;	break;
					case "IFZ210":	$r	=	2210;	break;
					case "IFZ211":	$r	=	2211;	break;
					case "IFZ312":	$r	=	2212;	break;
					case "IFZ313":	$r	=	2213;	break;
					case "IFZ314":	$r	=	2214;	break;
					case "IFZ315":	$r	=	2215;	break;
					case "IFZ316":	$r	=	2216;	break;
					case "IFZ317":	$r	=	2217;	break;
					case "IFZ318":	$r	=	2218;	break;
					case "IFZ319":	$r	=	2219;	break;
					case "IFZ420":	$r	=	2220;	break;
					case "IFZ421":	$r	=	2221;	break;
					case "IFZ422":	$r	=	2222;	break;
					case "IFZ423":	$r	=	2223;	break;
					case "IFZ424":	$r	=	2224;	break;
					case "IFZ425":	$r	=	2225;	break;
					case "IFZ526":	$r	=	2226;	break;
					case "IFZ527":	$r	=	2227;	break;
					case "IFZ528":	$r	=	2228;	break;
					case "IFZ529":	$r	=	2229;	break;
					case "IFZ530":	$r	=	2230;	break;
					case "IFZ531":	$r	=	2231;	break;
					case "IFZ532":	$r	=	2232;	break;
					case "IFZ633":	$r	=	2233;	break;
					case "IFZ634":	$r	=	2234;	break;
					case "IFZ635":	$r	=	2235;	break;
					case "IFZ736":	$r	=	2236;	break;
					case "IFZ737":	$r	=	2237;	break;
					case "IFZ738":	$r	=	2238;	break;
					case "IFZ739":	$r	=	2239;	break;
					case "IFZ740":	$r	=	2240;	break;
					case "IFZ741":	$r	=	2241;	break;
				//Ingeniería Sexual
					case "ISX11":	$r	=	231;	break;
					case "ISX12":	$r	=	232;	break;
					case "ISX13":	$r	=	233;	break;
					case "ISX14":	$r	=	234;	break;
					case "ISX15":	$r	=	235;	break;
					case "ISX26":	$r	=	236;	break;
					case "ISX27":	$r	=	237;	break;
					case "ISX28":	$r	=	238;	break;
					case "ISX29":	$r	=	239;	break;
					case "ISX310":	$r	=	2310;	break;
					case "ISX311":	$r	=	2311;	break;
					case "ISX312":	$r	=	2312;	break;
					case "ISX313":	$r	=	2313;	break;
					case "ISX314":	$r	=	2314;	break;
					case "ISX315":	$r	=	2315;	break;
					case "ISX416":	$r	=	2316;	break;
					case "ISX417":	$r	=	2317;	break;
					case "ISX418":	$r	=	2318;	break;
					case "ISX419":	$r	=	2319;	break;
					case "ISX420":	$r	=	2320;	break;
					case "ISX421":	$r	=	2321;	break;
					case "ISX422":	$r	=	2322;	break;
					case "ISX423":	$r	=	2323;	break;
					case "ISX524":	$r	=	2324;	break;
					case "ISX525":	$r	=	2325;	break;
					case "ISX526":	$r	=	2326;	break;
					case "ISX527":	$r	=	2327;	break;
					case "ISX528":	$r	=	2328;	break;
					case "ISX529":	$r	=	2329;	break;
					case "ISX630":	$r	=	2330;	break;
					case "ISX631":	$r	=	2331;	break;
					case "ISX632":	$r	=	2332;	break;
					case "ISX633":	$r	=	2333;	break;
					case "ISX634":	$r	=	2334;	break;
					case "ISX635":	$r	=	2335;	break;
					case "ISX636":	$r	=	2336;	break;
					case "ISX637":	$r	=	2337;	break;
					case "ISX738":	$r	=	2338;	break;
					case "ISX739":	$r	=	2339;	break;
					case "ISX740":	$r	=	2340;	break;
					case "ISX741":	$r	=	2341;	break;
					case "ISX742":	$r	=	2342;	break;
					case "ISX743":	$r	=	2343;	break;
					case "ISX744":	$r	=	2344;	break;
					case "ISX745":	$r	=	2345;	break;
					case "ISX-E01":	$r	=	2346;	break;
					case "ISX-E02":	$r	=	2347;	break;
					case "ISX-E03":	$r	=	2348;	break;
					case "ISX-E04":	$r	=	2349;	break;
					case "ISX-E05":	$r	=	2350;	break;
					case "ISX-E06":	$r	=	2351;	break;
					case "ISX-E07":	$r	=	2352;	break;
					case "ISX-E08":	$r	=	2353;	break;
					case "ISX-E09":	$r	=	2354;	break;
					case "ISX-E10":	$r	=	2355;	break;
					case "ISX-E11":	$r	=	2356;	break;
				//Ingeniería Fracaso
					case "IFR11":	$r	=	241;	break;
					case "IFR22":	$r	=	242;	break;
					case "IFR23":	$r	=	243;	break;
					case "IFR24":	$r	=	244;	break;
					case "IFR35":	$r	=	245;	break;
					case "IFR36":	$r	=	246;	break;
					case "IFR37":	$r	=	247;	break;
					case "IFR38":	$r	=	248;	break;
					case "IFR39":	$r	=	249;	break;
					case "IFR310":	$r	=	2410;	break;
					case "IFR311":	$r	=	2411;	break;
					case "IFR412":	$r	=	2412;	break;
					case "IFR413":	$r	=	2413;	break;
					case "IFR414":	$r	=	2414;	break;
					case "IFR415":	$r	=	2415;	break;
					case "IFR416":	$r	=	2416;	break;
					case "IFR517":	$r	=	2417;	break;
					case "IFR518":	$r	=	2418;	break;
					case "IFR519":	$r	=	2419;	break;
					case "IFR520":	$r	=	2420;	break;
					case "IFR521":	$r	=	2421;	break;
					case "IFR522":	$r	=	2422;	break;
					case "IFR523":	$r	=	2423;	break;
					case "IFR624":	$r	=	2424;	break;
					case "IFR625":	$r	=	2425;	break;
					case "IFR626":	$r	=	2426;	break;
					case "IFR627":	$r	=	2427;	break;
					case "IFR728":	$r	=	2428;	break;
					case "IFR729":	$r	=	2429;	break;
					case "IFR730":	$r	=	2430;	break;
					case "IFR731":	$r	=	2431;	break;
					case "IFR732":	$r	=	2432;	break;
				//Ingeniería Presidencial
					case "IPR11":	$r	=	291;	break;
					case "IPR12":	$r	=	292;	break;
					case "IPR13":	$r	=	293;	break;
					case "IPR24":	$r	=	294;	break;
					case "IPR25":	$r	=	295;	break;
					case "IPR26":	$r	=	296;	break;
					case "IPR27":	$r	=	297;	break;
					case "IPR28":	$r	=	298;	break;
					case "IPR29":	$r	=	299;	break;
					case "IPR210":	$r	=	2910;	break;
					case "IPR311":	$r	=	2911;	break;
					case "IPR312":	$r	=	2912;	break;
					case "IPR313":	$r	=	2913;	break;
					case "IPR314":	$r	=	2914;	break;
					case "IPR315":	$r	=	2915;	break;
					case "IPR316":	$r	=	2916;	break;
					case "IPR317":	$r	=	2917;	break;
					case "IPR318":	$r	=	2918;	break;
					case "IPR419":	$r	=	2919;	break;
					case "IPR420":	$r	=	2920;	break;
					case "IPR421":	$r	=	2921;	break;
					case "IPR522":	$r	=	2922;	break;
					case "IPR523":	$r	=	2923;	break;
					case "IPR524":	$r	=	2924;	break;
					case "IPR525":	$r	=	2925;	break;
					case "IPR526":	$r	=	2926;	break;
					case "IPR527":	$r	=	2927;	break;
					case "IPR628":	$r	=	2928;	break;
					case "IPR629":	$r	=	2929;	break;
					case "IPR630":	$r	=	2930;	break;
					case "IPR631":	$r	=	2931;	break;
					case "IPR632":	$r	=	2932;	break;
					case "IPR633":	$r	=	2933;	break;
					case "IPR634":	$r	=	2934;	break;
					case "IPR735":	$r	=	2935;	break;
					case "IPR736":	$r	=	2936;	break;
					case "IPR737":	$r	=	2937;	break;
					case "IPR738":	$r	=	2938;	break;
					case "IPR739":	$r	=	2939;	break;
					case "IPR740":	$r	=	2940;	break;
					case "IPR741":	$r	=	2941;	break;
					case "IPR742":	$r	=	2942;	break;
					case "IPR743":	$r	=	2943;	break;
					case "IPR-E01":	$r	=	2944;	break;
					case "IPR-E02":	$r	=	2945;	break;
					case "IPR-E03":	$r	=	2946;	break;
					case "IPR-E04":	$r	=	2947;	break;
					case "IPR-E05":	$r	=	2948;	break;
					case "IPR-E06":	$r	=	2949;	break;
					case "IPR-E07":	$r	=	2950;	break;
					case "IPR-E08":	$r	=	2951;	break;
					case "IPR-E09":	$r	=	2952;	break;
				//Ingeniería Destruccion Personal
					case "IDP11":	$r	=	301;	break;
					case "IDP12":	$r	=	302;	break;
					case "IDP13":	$r	=	303;	break;
					case "IDP24":	$r	=	304;	break;
					case "IDP25":	$r	=	305;	break;
					case "IDP36":	$r	=	306;	break;
					case "IDP37":	$r	=	307;	break;
					case "IDP38":	$r	=	308;	break;
					case "IDP49":	$r	=	309;	break;
					case "IDP410":	$r	=	3010;	break;
					case "IDP411":	$r	=	3011;	break;
					case "IDP412":	$r	=	3012;	break;
					case "IDP413":	$r	=	3013;	break;
					case "IDP514":	$r	=	3014;	break;
					case "IDP515":	$r	=	3015;	break;
					case "IDP516":	$r	=	3016;	break;
					case "IDP617":	$r	=	3017;	break;
					case "IDP618":	$r	=	3018;	break;
					case "IDP619":	$r	=	3019;	break;
					case "IDP620":	$r	=	3020;	break;
					case "IDP721":	$r	=	3021;	break;
					case "IDP722":	$r	=	3022;	break;
					case "IDP723":	$r	=	3023;	break;
					case "IDP724":	$r	=	3024;	break;
				//Ingeniería Glamour
					case "IGM11":	$r	=	311;	break;
					case "IGM12":	$r	=	312;	break;
					case "IGM13":	$r	=	313;	break;
					case "IGM24":	$r	=	314;	break;
					case "IGM35":	$r	=	315;	break;
					case "IGM36":	$r	=	316;	break;
					case "IGM37":	$r	=	317;	break;
					case "IGM38":	$r	=	318;	break;
					case "IGM49":	$r	=	319;	break;
					case "IGM410":	$r	=	3110;	break;
					case "IGM411":	$r	=	3111;	break;
					case "IGM512":	$r	=	3112;	break;
					case "IGM513":	$r	=	3113;	break;
					case "IGM514":	$r	=	3114;	break;
					case "IGM515":	$r	=	3115;	break;
					case "IGM616":	$r	=	3116;	break;
					case "IGM617":	$r	=	3117;	break;
					case "IGM618":	$r	=	3118;	break;
					case "IGM619":	$r	=	3119;	break;
					case "IGM720":	$r	=	3120;	break;
					case "IGM721":	$r	=	3121;	break;
					case "IGM722":	$r	=	3122;	break;
					case "IGM723":	$r	=	3123;	break;
				//Ingeniería  Empirica
					case "IEM11":	$r	=	331;	break;
					case "IEM12":	$r	=	332;	break;
					case "IEM13":	$r	=	333;	break;
					case "IEM24":	$r	=	334;	break;
					case "IEM25":	$r	=	335;	break;
					case "IEM26":	$r	=	336;	break;
					case "IEM27":	$r	=	337;	break;
					case "IEM38":	$r	=	338;	break;
					case "IEM39":	$r	=	339;	break;
					case "IEM410":	$r	=	3310;	break;
					case "IEM411":	$r	=	3311;	break;
					case "IEM412":	$r	=	3312;	break;
					case "IEM413":	$r	=	3313;	break;
					case "IEM414":	$r	=	3314;	break;
					case "IEM515":	$r	=	3315;	break;
					case "IEM516":	$r	=	3316;	break;
					case "IEM517":	$r	=	3317;	break;
					case "IEM518":	$r	=	3318;	break;
					case "IEM619":	$r	=	3319;	break;
					case "IEM620":	$r	=	3320;	break;
					case "IEM621":	$r	=	3321;	break;
					case "IEM622":	$r	=	3322;	break;
					case "IEM623":	$r	=	3323;	break;
					case "IEM724":	$r	=	3324;	break;
					case "IEM725":	$r	=	3325;	break;
					case "IEM726":	$r	=	3326;	break;
				//Ingeniería  Juvenil
					case "IJV11":	$r	=	341;	break;
					case "IJV12":	$r	=	342;	break;
					case "IJV13":	$r	=	343;	break;
					case "IJV14":	$r	=	344;	break;
					case "IJV15":	$r	=	345;	break;
					case "IJV26":	$r	=	346;	break;
					case "IJV27":	$r	=	347;	break;
					case "IJV28":	$r	=	348;	break;
					case "IJV39":	$r	=	349;	break;
					case "IJV310":	$r	=	3410;	break;
					case "IJV311":	$r	=	3411;	break;
					case "IJV312":	$r	=	3412;	break;
					case "IJV413":	$r	=	3413;	break;
					case "IJV414":	$r	=	3414;	break;
					case "IJV515":	$r	=	3415;	break;
					case "IJV516":	$r	=	3416;	break;
					case "IJV617":	$r	=	3417;	break;
					case "IJV618":	$r	=	3418;	break;
					case "IJV719":	$r	=	3419;	break;
					case "IJV720":	$r	=	3420;	break;
					case "IJV721":	$r	=	3421;	break;
					case "IJV722":	$r	=	3422;	break;
					case "IJV723":	$r	=	3423;	break;
					case "IJV724":	$r	=	3424;	break;
				//Ingeniería Corrupta
					case "ICR11":	$r	=	361;	break;
					case "ICR12":	$r	=	362;	break;
					case "ICR23":	$r	=	363;	break;
					case "ICR24":	$r	=	364;	break;
					case "ICR25":	$r	=	365;	break;
					case "ICR26":	$r	=	366;	break;
					case "ICR27":	$r	=	367;	break;
					case "ICR28":	$r	=	368;	break;
					case "ICR39":	$r	=	369;	break;
					case "ICR310":	$r	=	3610;	break;
					case "ICR311":	$r	=	3611;	break;
					case "ICR412":	$r	=	3612;	break;
					case "ICR413":	$r	=	3613;	break;
					case "ICR414":	$r	=	3614;	break;
					case "ICR415":	$r	=	3615;	break;
					case "ICR416":	$r	=	3616;	break;
					case "ICR517":	$r	=	3617;	break;
					case "ICR518":	$r	=	3618;	break;
					case "ICR519":	$r	=	3619;	break;
					case "ICR520":	$r	=	3620;	break;
					case "ICR621":	$r	=	3621;	break;
					case "ICR622":	$r	=	3622;	break;
					case "ICR623":	$r	=	3623;	break;
					case "ICR624":	$r	=	3624;	break;
					case "ICR725":	$r	=	3625;	break;
					case "ICR726":	$r	=	3626;	break;
					case "ICR727":	$r	=	3627;	break;
				//Ingeniería Opresiva Patriarcal
					case "IOP11":	$r	=	371;	break;
					case "IOP12":	$r	=	372;	break;
					case "IOP13":	$r	=	373;	break;
					case "IOP24":	$r	=	374;	break;
					case "IOP25":	$r	=	375;	break;
					case "IOP26":	$r	=	376;	break;
					case "IOP27":	$r	=	377;	break;
					case "IOP38":	$r	=	378;	break;
					case "IOP39":	$r	=	379;	break;
					case "IOP310":	$r	=	3710;	break;
					case "IOP311":	$r	=	3711;	break;
					case "IOP312":	$r	=	3712;	break;
					case "IOP313":	$r	=	3713;	break;
					case "IOP314":	$r	=	3714;	break;
					case "IOP415":	$r	=	3715;	break;
					case "IOP416":	$r	=	3716;	break;
					case "IOP417":	$r	=	3717;	break;
					case "IOP418":	$r	=	3718;	break;
					case "IOP419":	$r	=	3719;	break;
					case "IOP520":	$r	=	3720;	break;
					case "IOP521":	$r	=	3721;	break;
					case "IOP522":	$r	=	3722;	break;
					case "IOP623":	$r	=	3723;	break;
					case "IOP624":	$r	=	3724;	break;
					case "IOP625":	$r	=	3725;	break;
					case "IOP626":	$r	=	3726;	break;
					case "IOP727":	$r	=	3727;	break;
					case "IOP728":	$r	=	3728;	break;
					case "IOP729":	$r	=	3729;	break;
					case "IOP730":	$r	=	3730;	break;

			//Facultad Superior
				//Especializacion Sexualidad Aplicada
					case "ESX11":	$r	=	251;	break;
					case "ESX12":	$r	=	252;	break;
					case "ESX13":	$r	=	253;	break;
					case "ESX14":	$r	=	254;	break;
					case "ESX15":	$r	=	255;	break;
					case "ESX26":	$r	=	256;	break;
					case "ESX27":	$r	=	257;	break;
					case "ESX28":	$r	=	258;	break;
					case "ESX29":	$r	=	259;	break;
					case "ESX210":	$r	=	2510;	break;
					case "ESX311":	$r	=	2511;	break;
					case "ESX312":	$r	=	2512;	break;
					case "ESX313":	$r	=	2513;	break;
					case "ESX314":	$r	=	2514;	break;
					case "ESX315":	$r	=	2515;	break;
					case "ESX316":	$r	=	2516;	break;
					case "ESX417":	$r	=	2517;	break;
					case "ESX418":	$r	=	2518;	break;
					case "ESX419":	$r	=	2519;	break;
					case "ESX420":	$r	=	2520;	break;
					case "ESX421":	$r	=	2521;	break;
				//Especializacion Finanzas Personales Miseras Triunfantes
					case "EFP11":	$r	=	261;	break;
					case "EFP12":	$r	=	262;	break;
					case "EFP13":	$r	=	263;	break;
					case "EFP14":	$r	=	264;	break;
					case "EFP25":	$r	=	265;	break;
					case "EFP26":	$r	=	266;	break;
					case "EFP27":	$r	=	267;	break;
					case "EFP28":	$r	=	268;	break;
					case "EFP29":	$r	=	269;	break;
					case "EFP310":	$r	=	2610;	break;
					case "EFP311":	$r	=	2611;	break;
					case "EFP312":	$r	=	2612;	break;
					case "EFP313":	$r	=	2613;	break;
					case "EFP414":	$r	=	2614;	break;
					case "EFP415":	$r	=	2615;	break;
					case "EFP416":	$r	=	2616;	break;
					case "EFP417":	$r	=	2617;	break;
				//Especializacion Procesos Miseros
					case "EPM11":	$r	=	321;	break;
					case "EPM12":	$r	=	322;	break;
					case "EPM13":	$r	=	323;	break;
					case "EPM14":	$r	=	324;	break;
					case "EPM25":	$r	=	325;	break;
					case "EPM26":	$r	=	326;	break;
					case "EPM27":	$r	=	327;	break;
					case "EPM38":	$r	=	328;	break;
					case "EPM39":	$r	=	329;	break;
					case "EPM310":	$r	=	3210;	break;
					case "EPM311":	$r	=	3211;	break;
					case "EPM312":	$r	=	3212;	break;
					case "EPM413":	$r	=	3213;	break;
					case "EPM414":	$r	=	3214;	break;
					case "EPM415":	$r	=	3215;	break;
					case "EPM416":	$r	=	3216;	break;
				//Maestria en Ensenanza Matematica
					case "MEM11":	$r	=	271;	break;
					case "MEM12":	$r	=	272;	break;
					case "MEM13":	$r	=	273;	break;
					case "MEM14":	$r	=	274;	break;
					case "MEM25":	$r	=	275;	break;
					case "MEM26":	$r	=	276;	break;
					case "MEM27":	$r	=	277;	break;
					case "MEM38":	$r	=	278;	break;
					case "MEM39":	$r	=	279;	break;
					case "MEM310":	$r	=	2710;	break;
					case "MEM311":	$r	=	2711;	break;
					case "MEM312":	$r	=	2712;	break;
					case "MEM413":	$r	=	2713;	break;
					case "MEM414":	$r	=	2714;	break;
					case "MEM415":	$r	=	2715;	break;
					case "MEM416":	$r	=	2716;	break;
					case "MEM417":	$r	=	2717;	break;
				//Maestria Idiotez Audiovisual
					case "MIA11":	$r	=	281;	break;
					case "MIA12":	$r	=	282;	break;
					case "MIA13":	$r	=	283;	break;
					case "MIA14":	$r	=	284;	break;
					case "MIA15":	$r	=	285;	break;
					case "MIA26":	$r	=	286;	break;
					case "MIA27":	$r	=	287;	break;
					case "MIA28":	$r	=	288;	break;
					case "MIA29":	$r	=	289;	break;
					case "MIA210":	$r	=	2810;	break;
					case "MIA311":	$r	=	2811;	break;
					case "MIA312":	$r	=	2812;	break;
					case "MIA313":	$r	=	2813;	break;
					case "MIA314":	$r	=	2814;	break;
					case "MIA315":	$r	=	2815;	break;
					case "MIA316A":	$r	=	2816;	break;
					case "MIA316B":	$r	=	2817;	break;
					case "MIA417":	$r	=	2818;	break;
					case "MIA418":	$r	=	2819;	break;
					case "MIA419":	$r	=	2820;	break;
					case "MIA420":	$r	=	2821;	break;
					case "MIA421":	$r	=	2822;	break;
					case "MIA422":	$r	=	2823;	break;
					case "MIA423":	$r	=	2824;	break;

			//Facultad Continua
				//Profundizacion en Redes Sociales
					case "CRS01":	$r	=	351;	break;
					case "CRS02":	$r	=	352;	break;
					case "CRS03":	$r	=	353;	break;
					case "CRS04":	$r	=	354;	break;
					case "CRS05":	$r	=	355;	break;
					case "CRS06":	$r	=	356;	break;
					case "CRS07":	$r	=	357;	break;
					case "CRS08":	$r	=	358;	break;
					case "CRS09":	$r	=	359;	break;
					case "CRS10":	$r	=	3510;	break;
					case "CRS11":	$r	=	3511;	break;
					case "CRS12":	$r	=	3512;	break;
					case "CRS1A":	$r	=	3513;	break;
					case "CRS1B":	$r	=	3514;	break;
					case "CRS1C":	$r	=	3515;	break;
					case "CRS1D":	$r	=	3516;	break;
					case "CRS2A":	$r	=	3517;	break;
					case "CRS2B":	$r	=	3518;	break;
					case "CRS2C":	$r	=	3519;	break;
					case "CRS3A":	$r	=	3520;	break;
					case "CRS3B":	$r	=	3521;	break;
					case "CRS4A":	$r	=	3522;	break;
					case "CRS4B":	$r	=	3523;	break;
					case "CRS4C":	$r	=	3524;	break;
					case "CRS5A":	$r	=	3525;	break;
					case "CRS5B":	$r	=	3526;	break;

			default:
				$r = 0;
			break;
		}
		return $r;
	}

	//Entrega el código Literal de una asignatura a partir de su código numérico
	public function AsignaturaCodigoL($x){
		switch ($x) {

			//Facultad Mísera
				case 101:	$r	=	"MGB1";	break;
				case 102:	$r	=	"MGB2";	break;
				case 103:	$r	=	"MGB3";	break;
				case 104:	$r	=	"MGB4";	break;
				case 105:	$r	=	"MGB5";	break;
				case 106:	$r	=	"MGB6";	break;
				case 107:	$r	=	"MGB7";	break;
				case 108:	$r	=	"MGB8";	break;
				case 109:	$r	=	"MGB9";	break;
				case 1010:	$r	=	"MGB10";	break;
				case 1011:	$r	=	"MGB11";	break;
				case 1012:	$r	=	"MGB12";	break;
				case 1013:	$r	=	"MGB13";	break;
				case 1014:	$r	=	"MGB14";	break;

			//Facultad Básica
				//Técnico Ortografía
					case 111:	$r	=	"BOR11";	break;
					case 112:	$r	=	"BOR12";	break;
					case 113:	$r	=	"BOR13";	break;
					case 114:	$r	=	"BOR14";	break;
					case 115:	$r	=	"BOR15";	break;
					case 116:	$r	=	"BOR16";	break;
					case 117:	$r	=	"BOR27";	break;
					case 118:	$r	=	"BOR28";	break;
					case 119:	$r	=	"BOR29";	break;
					case 1110:	$r	=	"BOR210";	break;
				//Técnico Dignidad Sentimental
					case 121:	$r	=	"BDS11";	break;
					case 122:	$r	=	"BDS12";	break;
					case 123:	$r	=	"BDS13";	break;
					case 124:	$r	=	"BDS14";	break;
					case 125:	$r	=	"BDS15";	break;
					case 126:	$r	=	"BDS16";	break;
					case 127:	$r	=	"BDS27";	break;
					case 128:	$r	=	"BDS28";	break;
					case 129:	$r	=	"BDS29";	break;
					case 1210:	$r	=	"BDS210";	break;
				//Técnico Miserableza
					case 131:	$r	=	"BMI11";	break;
					case 132:	$r	=	"BMI12";	break;
					case 133:	$r	=	"BMI13";	break;
					case 134:	$r	=	"BMI24";	break;
					case 135:	$r	=	"BMI25";	break;
					case 136:	$r	=	"BMI26";	break;
					case 137:	$r	=	"BMI27";	break;
				//Técnico Sociedad Web
					case 141:	$r	=	"BSI11";	break;
					case 142:	$r	=	"BSI12";	break;
					case 143:	$r	=	"BSI13";	break;
					case 144:	$r	=	"BSI14";	break;
					case 145:	$r	=	"BSI15";	break;
					case 146:	$r	=	"BSI16";	break;
					case 147:	$r	=	"BSI27";	break;
					case 148:	$r	=	"BSI28";	break;
					case 149:	$r	=	"BSI29";	break;
					case 1410:	$r	=	"BSI210";	break;
				//Técnico Gestión Bisexual
					case 151:	$r	=	"BGB11";	break;
					case 152:	$r	=	"BGB12";	break;
					case 153:	$r	=	"BGB13";	break;
					case 154:	$r	=	"BGB14";	break;
					case 155:	$r	=	"BGB15";	break;
					case 156:	$r	=	"BGB26";	break;
					case 157:	$r	=	"BGB27";	break;
					case 158:	$r	=	"BGB28";	break;

			//Facultad Tecnologías
				//Tecnología Dignidad Humana
					case	161:	$r	=	"TDH11";	break;
					case	162:	$r	=	"TDH12";	break;
					case	163:	$r	=	"TDH23";	break;
					case	164:	$r	=	"TDH24";	break;
					case	165:	$r	=	"TDH25";	break;
					case	166:	$r	=	"TDH26";	break;
					case	167:	$r	=	"TDH27";	break;
					case	168:	$r	=	"TDH28";	break;
					case	169:	$r	=	"TDH39";	break;
					case	1610:	$r	=	"TDH310";	break;
					case	1611:	$r	=	"TDH311";	break;
					case	1612:	$r	=	"TDH312";	break;
					case	1613:	$r	=	"TDH313";	break;
					case	1614:	$r	=	"TDH414";	break;
					case	1615:	$r	=	"TDH415";	break;
					case	1616:	$r	=	"TDH416";	break;
					case	1617:	$r	=	"TDH417";	break;
					case	1618:	$r	=	"TDH418";	break;
					case	1619:	$r	=	"TDH419";	break;
					case	1620:	$r	=	"TDH520";	break;
					case	1621:	$r	=	"TDH521";	break;
					case	1622:	$r	=	"TDH522";	break;
					case	1623:	$r	=	"TDH523";	break;
				//Tecnología Finanzas Familiares Personales
					case	171:	$r	=	"TFP11";	break;
					case	172:	$r	=	"TFP22";	break;
					case	173:	$r	=	"TFP23";	break;
					case	174:	$r	=	"TFP24";	break;
					case	175:	$r	=	"TFP35";	break;
					case	176:	$r	=	"TFP36";	break;
					case	177:	$r	=	"TFP37";	break;
					case	178:	$r	=	"TFP38";	break;
					case	179:	$r	=	"TFP49";	break;
					case	1710:	$r	=	"TFP410";	break;
					case	1711:	$r	=	"TFP411";	break;
					case	1712:	$r	=	"TFP412";	break;
					case	1713:	$r	=	"TFP513";	break;
					case	1714:	$r	=	"TFP514";	break;
					case	1715:	$r	=	"TFP515";	break;
					case	1716:	$r	=	"TFP516";	break;
					case	1717:	$r	=	"TFP517";	break;
					case	1718:	$r	=	"TFP518";	break;
					case	1719:	$r	=	"TFP519";	break;
				//Tecnología Identificación Personal
					case	181:	$r	=	"TIP11";	break;
					case	182:	$r	=	"TIP12";	break;
					case	183:	$r	=	"TIP13";	break;
					case	184:	$r	=	"TIP14";	break;
					case	185:	$r	=	"TIP15";	break;
					case	186:	$r	=	"TIP16";	break;
					case	187:	$r	=	"TIP27";	break;
					case	188:	$r	=	"TIP28";	break;
					case	189:	$r	=	"TIP29";	break;
					case	1810:	$r	=	"TIP210";	break;
					case	1811:	$r	=	"TIP211";	break;
					case	1812:	$r	=	"TIP212";	break;
					case	1813:	$r	=	"TIP213";	break;
					case	1814:	$r	=	"TIP314";	break;
					case	1815:	$r	=	"TIP315";	break;
					case	1816:	$r	=	"TIP316";	break;
					case	1817:	$r	=	"TIP317";	break;
					case	1818:	$r	=	"TIP318";	break;
					case	1819:	$r	=	"TIP319";	break;
					case	1820:	$r	=	"TIP320";	break;
					case	1821:	$r	=	"TIP421";	break;
					case	1822:	$r	=	"TIP422";	break;
					case	1823:	$r	=	"TIP423";	break;
					case	1824:	$r	=	"TIP424";	break;
					case	1825:	$r	=	"TIP425";	break;
					case	1826:	$r	=	"TIP426";	break;
					case	1827:	$r	=	"TIP427";	break;
					case	1828:	$r	=	"TIP528";	break;
					case	1829:	$r	=	"TIP529";	break;
					case	1830:	$r	=	"TIP530";	break;
				//Tecnología Gestión Heterosexual
					case	191:	$r	=	"THE11";	break;
					case	192:	$r	=	"THE12";	break;
					case	193:	$r	=	"THE13";	break;
					case	194:	$r	=	"THE14";	break;
					case	195:	$r	=	"THE25";	break;
					case	196:	$r	=	"THE26";	break;
					case	197:	$r	=	"THE27";	break;
					case	198:	$r	=	"THE38";	break;
					case	199:	$r	=	"THE39";	break;
					case	1910:	$r	=	"THE310";	break;
					case	1911:	$r	=	"THE311";	break;
					case	1912:	$r	=	"THE412";	break;
					case	1913:	$r	=	"THE513";	break;
					case	1914:	$r	=	"THE514";	break;
					case	1915:	$r	=	"THE515";	break;
					case	1916:	$r	=	"THE516";	break;
					case	1917:	$r	=	"THE517";	break;
				//Tecnología Gestión Homosexual
					case	201:	$r	=	"THO11";	break;
					case	202:	$r	=	"THO12";	break;
					case	203:	$r	=	"THO13";	break;
					case	204:	$r	=	"THO14";	break;
					case	205:	$r	=	"THO15";	break;
					case	206:	$r	=	"THO26";	break;
					case	207:	$r	=	"THO27";	break;
					case	208:	$r	=	"THO28";	break;
					case	209:	$r	=	"THO29";	break;
					case	2010:	$r	=	"THO310";	break;
					case	2011:	$r	=	"THO311";	break;
					case	2012:	$r	=	"THO312";	break;
					case	2013:	$r	=	"THO313";	break;
					case	2014:	$r	=	"THO314";	break;
					case	2015:	$r	=	"THO315";	break;
					case	2016:	$r	=	"THO316";	break;
					case	2017:	$r	=	"THO317";	break;
					case	2018:	$r	=	"THO418";	break;
					case	2019:	$r	=	"THO419";	break;
					case	2020:	$r	=	"THO420";	break;
					case	2021:	$r	=	"THO421";	break;
					case	2022:	$r	=	"THO422";	break;
					case	2023:	$r	=	"THO423";	break;
					case	2024:	$r	=	"THO524";	break;
					case	2025:	$r	=	"THO525";	break;
					case	2026:	$r	=	"THO526";	break;
					case	2027:	$r	=	"THO527";	break;
					case	2028:	$r	=	"THO528";	break;
					case	2029:	$r	=	"THO529";	break;
				//Tecnología Depresión Cotidiana
					case	391:	$r	=	"TDC11";	break;
					case	392:	$r	=	"TDC12";	break;
					case	393:	$r	=	"TDC13";	break;
					case	394:	$r	=	"TDC24";	break;
					case	395:	$r	=	"TDC25";	break;
					case	396:	$r	=	"TDC26";	break;
					case	397:	$r	=	"TDC27";	break;
					case	398:	$r	=	"TDC28";	break;
					case	399:	$r	=	"TDC39";	break;
					case	3910:	$r	=	"TDC310";	break;
					case	3911:	$r	=	"TDC311";	break;
					case	3912:	$r	=	"TDC312";	break;
					case	3913:	$r	=	"TDC313";	break;
					case	3914:	$r	=	"TDC414";	break;
					case	3915:	$r	=	"TDC415";	break;
					case	3916:	$r	=	"TDC416";	break;
					case	3917:	$r	=	"TDC417";	break;
					case	3918:	$r	=	"TDC518";	break;
					case	3919:	$r	=	"TDC519";	break;
					case	3920:	$r	=	"TDC520";	break;
					case	3921:	$r	=	"TDC521";	break;
					case	3922:	$r	=	"TDC522";	break;

			//Facultad Ingenierías
				//Ingeniería Youtuber
					case 211:	$r	=	"IYO11";	break;
					case 212:	$r	=	"IYO12";	break;
					case 213:	$r	=	"IYO13";	break;
					case 214:	$r	=	"IYO14";	break;
					case 215:	$r	=	"IYO15";	break;
					case 216:	$r	=	"IYO26";	break;
					case 217:	$r	=	"IYO27";	break;
					case 218:	$r	=	"IYO28";	break;
					case 219:	$r	=	"IYO29";	break;
					case 2110:	$r	=	"IYO210";	break;
					case 2111:	$r	=	"IYO311";	break;
					case 2112:	$r	=	"IYO312";	break;
					case 2113:	$r	=	"IYO313";	break;
					case 2114:	$r	=	"IYO314";	break;
					case 2115:	$r	=	"IYO315";	break;
					case 2116:	$r	=	"IYO416";	break;
					case 2117:	$r	=	"IYO417";	break;
					case 2118:	$r	=	"IYO418";	break;
					case 2119:	$r	=	"IYO419";	break;
					case 2120:	$r	=	"IYO520";	break;
					case 2121:	$r	=	"IYO521";	break;
					case 2122:	$r	=	"IYO522";	break;
					case 2123:	$r	=	"IYO523";	break;
					case 2124:	$r	=	"IYO524";	break;
					case 2125:	$r	=	"IYO525";	break;
					case 2126:	$r	=	"IYO626";	break;
					case 2127:	$r	=	"IYO627";	break;
					case 2128:	$r	=	"IYO628";	break;
					case 2129:	$r	=	"IYO629";	break;
					case 2130:	$r	=	"IYO630";	break;
					case 2131:	$r	=	"IYO631";	break;
					case 2132:	$r	=	"IYO732";	break;
					case 2133:	$r	=	"IYO733";	break;
					case 2134:	$r	=	"IYO734";	break;
					case 2135:	$r	=	"IYO735";	break;
					case 2136:	$r	=	"IYO736";	break;
					case 2137:	$r	=	"IYO737";	break;
					case 2138:	$r	=	"IYO738";	break;
					case 2139:	$r	=	"IYO139";	break;
					case 2140:	$r	=	"IYO240";	break;
					case 2141:	$r	=	"IYO341";	break;
					case 2142:	$r	=	"IYO442";	break;
					case 2143:	$r	=	"IYO643";	break;
					case 2144:	$r	=	"IYO744";	break;
					case 2145:	$r	=	"IYO745";	break;
					case 2146:	$r	=	"IYO246";	break;
					case 2147:	$r	=	"IYO247";	break;
					case 2148:	$r	=	"IYO348";	break;
					case 2149:	$r	=	"IYO449";	break;
					case 2150:	$r	=	"IYO650";	break;
					case 2151:	$r	=	"IYO551";	break;
					case 2152:	$r	=	"IYO552";	break;
					case 2153:	$r	=	"IYO553";	break;
				//Ingeniería Financiera
					case 221:	$r	=	"IFZ11";	break;
					case 222:	$r	=	"IFZ12";	break;
					case 223:	$r	=	"IFZ13";	break;
					case 224:	$r	=	"IFZ14";	break;
					case 225:	$r	=	"IFZ15";	break;
					case 226:	$r	=	"IFZ16";	break;
					case 227:	$r	=	"IFZ27";	break;
					case 228:	$r	=	"IFZ28";	break;
					case 229:	$r	=	"IFZ29";	break;
					case 2210:	$r	=	"IFZ210";	break;
					case 2211:	$r	=	"IFZ211";	break;
					case 2212:	$r	=	"IFZ312";	break;
					case 2213:	$r	=	"IFZ313";	break;
					case 2214:	$r	=	"IFZ314";	break;
					case 2215:	$r	=	"IFZ315";	break;
					case 2216:	$r	=	"IFZ316";	break;
					case 2217:	$r	=	"IFZ317";	break;
					case 2218:	$r	=	"IFZ318";	break;
					case 2219:	$r	=	"IFZ319";	break;
					case 2220:	$r	=	"IFZ420";	break;
					case 2221:	$r	=	"IFZ421";	break;
					case 2222:	$r	=	"IFZ422";	break;
					case 2223:	$r	=	"IFZ423";	break;
					case 2224:	$r	=	"IFZ424";	break;
					case 2225:	$r	=	"IFZ425";	break;
					case 2226:	$r	=	"IFZ526";	break;
					case 2227:	$r	=	"IFZ527";	break;
					case 2228:	$r	=	"IFZ528";	break;
					case 2229:	$r	=	"IFZ529";	break;
					case 2230:	$r	=	"IFZ530";	break;
					case 2231:	$r	=	"IFZ531";	break;
					case 2232:	$r	=	"IFZ532";	break;
					case 2233:	$r	=	"IFZ633";	break;
					case 2234:	$r	=	"IFZ634";	break;
					case 2235:	$r	=	"IFZ635";	break;
					case 2236:	$r	=	"IFZ736";	break;
					case 2237:	$r	=	"IFZ737";	break;
					case 2238:	$r	=	"IFZ738";	break;
					case 2239:	$r	=	"IFZ739";	break;
					case 2240:	$r	=	"IFZ740";	break;
					case 2241:	$r	=	"IFZ741";	break;
				//Ingeniería Sexual
					case 231:	$r	=	"ISX11";	break;
					case 232:	$r	=	"ISX12";	break;
					case 233:	$r	=	"ISX13";	break;
					case 234:	$r	=	"ISX14";	break;
					case 235:	$r	=	"ISX15";	break;
					case 236:	$r	=	"ISX26";	break;
					case 237:	$r	=	"ISX27";	break;
					case 238:	$r	=	"ISX28";	break;
					case 239:	$r	=	"ISX29";	break;
					case 2310:	$r	=	"ISX310";	break;
					case 2311:	$r	=	"ISX311";	break;
					case 2312:	$r	=	"ISX312";	break;
					case 2313:	$r	=	"ISX313";	break;
					case 2314:	$r	=	"ISX314";	break;
					case 2315:	$r	=	"ISX315";	break;
					case 2316:	$r	=	"ISX416";	break;
					case 2317:	$r	=	"ISX417";	break;
					case 2318:	$r	=	"ISX418";	break;
					case 2319:	$r	=	"ISX419";	break;
					case 2320:	$r	=	"ISX420";	break;
					case 2321:	$r	=	"ISX421";	break;
					case 2322:	$r	=	"ISX422";	break;
					case 2323:	$r	=	"ISX423";	break;
					case 2324:	$r	=	"ISX524";	break;
					case 2325:	$r	=	"ISX525";	break;
					case 2326:	$r	=	"ISX526";	break;
					case 2327:	$r	=	"ISX527";	break;
					case 2328:	$r	=	"ISX528";	break;
					case 2329:	$r	=	"ISX529";	break;
					case 2330:	$r	=	"ISX630";	break;
					case 2331:	$r	=	"ISX631";	break;
					case 2332:	$r	=	"ISX632";	break;
					case 2333:	$r	=	"ISX633";	break;
					case 2334:	$r	=	"ISX634";	break;
					case 2335:	$r	=	"ISX635";	break;
					case 2336:	$r	=	"ISX636";	break;
					case 2337:	$r	=	"ISX637";	break;
					case 2338:	$r	=	"ISX738";	break;
					case 2339:	$r	=	"ISX739";	break;
					case 2340:	$r	=	"ISX740";	break;
					case 2341:	$r	=	"ISX741";	break;
					case 2342:	$r	=	"ISX742";	break;
					case 2343:	$r	=	"ISX743";	break;
					case 2344:	$r	=	"ISX744";	break;
					case 2345:	$r	=	"ISX745";	break;
					case 2346:	$r	=	"ISX-E01";	break;
					case 2347:	$r	=	"ISX-E02";	break;
					case 2348:	$r	=	"ISX-E03";	break;
					case 2349:	$r	=	"ISX-E04";	break;
					case 2350:	$r	=	"ISX-E05";	break;
					case 2351:	$r	=	"ISX-E06";	break;
					case 2352:	$r	=	"ISX-E07";	break;
					case 2353:	$r	=	"ISX-E08";	break;
					case 2354:	$r	=	"ISX-E09";	break;
					case 2355:	$r	=	"ISX-E10";	break;
					case 2356:	$r	=	"ISX-E11";	break;
				//Ingeniería Fracaso
					case 241:	$r	=	"IFR11";	break;
					case 242:	$r	=	"IFR22";	break;
					case 243:	$r	=	"IFR23";	break;
					case 244:	$r	=	"IFR24";	break;
					case 245:	$r	=	"IFR35";	break;
					case 246:	$r	=	"IFR36";	break;
					case 247:	$r	=	"IFR37";	break;
					case 248:	$r	=	"IFR38";	break;
					case 249:	$r	=	"IFR39";	break;
					case 2410:	$r	=	"IFR310";	break;
					case 2411:	$r	=	"IFR311";	break;
					case 2412:	$r	=	"IFR412";	break;
					case 2413:	$r	=	"IFR413";	break;
					case 2414:	$r	=	"IFR414";	break;
					case 2415:	$r	=	"IFR415";	break;
					case 2416:	$r	=	"IFR416";	break;
					case 2417:	$r	=	"IFR517";	break;
					case 2418:	$r	=	"IFR518";	break;
					case 2419:	$r	=	"IFR519";	break;
					case 2420:	$r	=	"IFR520";	break;
					case 2421:	$r	=	"IFR521";	break;
					case 2422:	$r	=	"IFR522";	break;
					case 2423:	$r	=	"IFR523";	break;
					case 2424:	$r	=	"IFR624";	break;
					case 2425:	$r	=	"IFR625";	break;
					case 2426:	$r	=	"IFR626";	break;
					case 2427:	$r	=	"IFR627";	break;
					case 2428:	$r	=	"IFR728";	break;
					case 2429:	$r	=	"IFR729";	break;
					case 2430:	$r	=	"IFR730";	break;
					case 2431:	$r	=	"IFR731";	break;
					case 2432:	$r	=	"IFR732";	break;
				//Ingeniería Presidencial
					case 291:	$r	=	"IPR11";	break;
					case 292:	$r	=	"IPR12";	break;
					case 293:	$r	=	"IPR13";	break;
					case 294:	$r	=	"IPR24";	break;
					case 295:	$r	=	"IPR25";	break;
					case 296:	$r	=	"IPR26";	break;
					case 297:	$r	=	"IPR27";	break;
					case 298:	$r	=	"IPR28";	break;
					case 299:	$r	=	"IPR29";	break;
					case 2910:	$r	=	"IPR210";	break;
					case 2911:	$r	=	"IPR311";	break;
					case 2912:	$r	=	"IPR312";	break;
					case 2913:	$r	=	"IPR313";	break;
					case 2914:	$r	=	"IPR314";	break;
					case 2915:	$r	=	"IPR315";	break;
					case 2916:	$r	=	"IPR316";	break;
					case 2917:	$r	=	"IPR317";	break;
					case 2918:	$r	=	"IPR318";	break;
					case 2919:	$r	=	"IPR419";	break;
					case 2920:	$r	=	"IPR420";	break;
					case 2921:	$r	=	"IPR421";	break;
					case 2922:	$r	=	"IPR522";	break;
					case 2923:	$r	=	"IPR523";	break;
					case 2924:	$r	=	"IPR524";	break;
					case 2925:	$r	=	"IPR525";	break;
					case 2926:	$r	=	"IPR526";	break;
					case 2927:	$r	=	"IPR527";	break;
					case 2928:	$r	=	"IPR628";	break;
					case 2929:	$r	=	"IPR629";	break;
					case 2930:	$r	=	"IPR630";	break;
					case 2931:	$r	=	"IPR631";	break;
					case 2932:	$r	=	"IPR632";	break;
					case 2933:	$r	=	"IPR633";	break;
					case 2934:	$r	=	"IPR634";	break;
					case 2935:	$r	=	"IPR735";	break;
					case 2936:	$r	=	"IPR736";	break;
					case 2937:	$r	=	"IPR737";	break;
					case 2938:	$r	=	"IPR738";	break;
					case 2939:	$r	=	"IPR739";	break;
					case 2940:	$r	=	"IPR740";	break;
					case 2941:	$r	=	"IPR741";	break;
					case 2942:	$r	=	"IPR742";	break;
					case 2943:	$r	=	"IPR743";	break;
					case 2944:	$r	=	"IPR-E01";	break;
					case 2945:	$r	=	"IPR-E02";	break;
					case 2946:	$r	=	"IPR-E03";	break;
					case 2947:	$r	=	"IPR-E04";	break;
					case 2948:	$r	=	"IPR-E05";	break;
					case 2949:	$r	=	"IPR-E06";	break;
					case 2950:	$r	=	"IPR-E07";	break;
					case 2951:	$r	=	"IPR-E08";	break;
					case 2952:	$r	=	"IPR-E09";	break;
				//Ingeniería Destruccion Personal
					case 301:	$r	=	"IDP11";	break;
					case 302:	$r	=	"IDP12";	break;
					case 303:	$r	=	"IDP13";	break;
					case 304:	$r	=	"IDP24";	break;
					case 305:	$r	=	"IDP25";	break;
					case 306:	$r	=	"IDP36";	break;
					case 307:	$r	=	"IDP37";	break;
					case 308:	$r	=	"IDP38";	break;
					case 309:	$r	=	"IDP49";	break;
					case 3010:	$r	=	"IDP410";	break;
					case 3011:	$r	=	"IDP411";	break;
					case 3012:	$r	=	"IDP412";	break;
					case 3013:	$r	=	"IDP413";	break;
					case 3014:	$r	=	"IDP514";	break;
					case 3015:	$r	=	"IDP515";	break;
					case 3016:	$r	=	"IDP516";	break;
					case 3017:	$r	=	"IDP617";	break;
					case 3018:	$r	=	"IDP618";	break;
					case 3019:	$r	=	"IDP619";	break;
					case 3020:	$r	=	"IDP620";	break;
					case 3021:	$r	=	"IDP721";	break;
					case 3022:	$r	=	"IDP722";	break;
					case 3023:	$r	=	"IDP723";	break;
					case 3024:	$r	=	"IDP724";	break;
				//Ingeniería Glamour
					case 311:	$r	=	"IGM11";	break;
					case 312:	$r	=	"IGM12";	break;
					case 313:	$r	=	"IGM13";	break;
					case 314:	$r	=	"IGM24";	break;
					case 315:	$r	=	"IGM35";	break;
					case 316:	$r	=	"IGM36";	break;
					case 317:	$r	=	"IGM37";	break;
					case 318:	$r	=	"IGM38";	break;
					case 319:	$r	=	"IGM49";	break;
					case 3110:	$r	=	"IGM410";	break;
					case 3111:	$r	=	"IGM411";	break;
					case 3112:	$r	=	"IGM512";	break;
					case 3113:	$r	=	"IGM513";	break;
					case 3114:	$r	=	"IGM514";	break;
					case 3115:	$r	=	"IGM515";	break;
					case 3116:	$r	=	"IGM616";	break;
					case 3117:	$r	=	"IGM617";	break;
					case 3118:	$r	=	"IGM618";	break;
					case 3119:	$r	=	"IGM619";	break;
					case 3120:	$r	=	"IGM720";	break;
					case 3121:	$r	=	"IGM721";	break;
					case 3122:	$r	=	"IGM722";	break;
					case 3123:	$r	=	"IGM723";	break;
				//Ingeniería Empirica
					case 331:	$r	=	"IEM11";	break;
					case 332:	$r	=	"IEM12";	break;
					case 333:	$r	=	"IEM13";	break;
					case 334:	$r	=	"IEM24";	break;
					case 335:	$r	=	"IEM25";	break;
					case 336:	$r	=	"IEM26";	break;
					case 337:	$r	=	"IEM27";	break;
					case 338:	$r	=	"IEM38";	break;
					case 339:	$r	=	"IEM39";	break;
					case 3310:	$r	=	"IEM410";	break;
					case 3311:	$r	=	"IEM411";	break;
					case 3312:	$r	=	"IEM412";	break;
					case 3313:	$r	=	"IEM413";	break;
					case 3314:	$r	=	"IEM414";	break;
					case 3315:	$r	=	"IEM515";	break;
					case 3316:	$r	=	"IEM516";	break;
					case 3317:	$r	=	"IEM517";	break;
					case 3318:	$r	=	"IEM518";	break;
					case 3319:	$r	=	"IEM619";	break;
					case 3320:	$r	=	"IEM620";	break;
					case 3321:	$r	=	"IEM621";	break;
					case 3322:	$r	=	"IEM622";	break;
					case 3323:	$r	=	"IEM623";	break;
					case 3324:	$r	=	"IEM724";	break;
					case 3325:	$r	=	"IEM725";	break;
					case 3326:	$r	=	"IEM726";	break;
				//Ingeniería Juvenil
					case 341:	$r	=	"IJV11";	break;
					case 342:	$r	=	"IJV12";	break;
					case 343:	$r	=	"IJV13";	break;
					case 344:	$r	=	"IJV14";	break;
					case 345:	$r	=	"IJV15";	break;
					case 346:	$r	=	"IJV26";	break;
					case 347:	$r	=	"IJV27";	break;
					case 348:	$r	=	"IJV28";	break;
					case 349:	$r	=	"IJV39";	break;
					case 3410:	$r	=	"IJV310";	break;
					case 3411:	$r	=	"IJV311";	break;
					case 3412:	$r	=	"IJV312";	break;
					case 3413:	$r	=	"IJV413";	break;
					case 3414:	$r	=	"IJV414";	break;
					case 3415:	$r	=	"IJV515";	break;
					case 3416:	$r	=	"IJV516";	break;
					case 3417:	$r	=	"IJV617";	break;
					case 3418:	$r	=	"IJV618";	break;
					case 3419:	$r	=	"IJV719";	break;
					case 3420:	$r	=	"IJV720";	break;
					case 3421:	$r	=	"IJV721";	break;
					case 3422:	$r	=	"IJV722";	break;
					case 3423:	$r	=	"IJV723";	break;
					case 3424:	$r	=	"IJV724";	break;
				//Ingeniería Corrupta
					case 361:	$r	=	"ICR11";	break;
					case 362:	$r	=	"ICR12";	break;
					case 363:	$r	=	"ICR23";	break;
					case 364:	$r	=	"ICR24";	break;
					case 365:	$r	=	"ICR25";	break;
					case 366:	$r	=	"ICR26";	break;
					case 367:	$r	=	"ICR27";	break;
					case 368:	$r	=	"ICR28";	break;
					case 369:	$r	=	"ICR39";	break;
					case 3610:	$r	=	"ICR310";	break;
					case 3611:	$r	=	"ICR311";	break;
					case 3612:	$r	=	"ICR412";	break;
					case 3613:	$r	=	"ICR413";	break;
					case 3614:	$r	=	"ICR414";	break;
					case 3615:	$r	=	"ICR415";	break;
					case 3616:	$r	=	"ICR416";	break;
					case 3617:	$r	=	"ICR517";	break;
					case 3618:	$r	=	"ICR518";	break;
					case 3619:	$r	=	"ICR519";	break;
					case 3620:	$r	=	"ICR520";	break;
					case 3621:	$r	=	"ICR621";	break;
					case 3622:	$r	=	"ICR622";	break;
					case 3623:	$r	=	"ICR623";	break;
					case 3624:	$r	=	"ICR624";	break;
					case 3625:	$r	=	"ICR725";	break;
					case 3626:	$r	=	"ICR726";	break;
					case 3627:	$r	=	"ICR727";	break;
				//Ingeniería Opresiva Patriarcal
					case 371:	$r	=	"IOP11";	break;
					case 372:	$r	=	"IOP12";	break;
					case 373:	$r	=	"IOP13";	break;
					case 374:	$r	=	"IOP24";	break;
					case 375:	$r	=	"IOP25";	break;
					case 376:	$r	=	"IOP26";	break;
					case 377:	$r	=	"IOP27";	break;
					case 378:	$r	=	"IOP38";	break;
					case 379:	$r	=	"IOP39";	break;
					case 3710:	$r	=	"IOP310";	break;
					case 3711:	$r	=	"IOP311";	break;
					case 3712:	$r	=	"IOP312";	break;
					case 3713:	$r	=	"IOP313";	break;
					case 3714:	$r	=	"IOP314";	break;
					case 3715:	$r	=	"IOP415";	break;
					case 3716:	$r	=	"IOP416";	break;
					case 3717:	$r	=	"IOP417";	break;
					case 3718:	$r	=	"IOP418";	break;
					case 3719:	$r	=	"IOP419";	break;
					case 3720:	$r	=	"IOP520";	break;
					case 3721:	$r	=	"IOP521";	break;
					case 3722:	$r	=	"IOP522";	break;
					case 3723:	$r	=	"IOP623";	break;
					case 3724:	$r	=	"IOP624";	break;
					case 3725:	$r	=	"IOP625";	break;
					case 3726:	$r	=	"IOP626";	break;
					case 3727:	$r	=	"IOP727";	break;
					case 3728:	$r	=	"IOP728";	break;
					case 3729:	$r	=	"IOP729";	break;
					case 3730:	$r	=	"IOP730";	break;

			//Facultad Superior
				//Especializacion Sexualidad Aplicada
					case 251:	$r	=	"ESX11";	break;
					case 252:	$r	=	"ESX12";	break;
					case 253:	$r	=	"ESX13";	break;
					case 254:	$r	=	"ESX14";	break;
					case 255:	$r	=	"ESX15";	break;
					case 256:	$r	=	"ESX26";	break;
					case 257:	$r	=	"ESX27";	break;
					case 258:	$r	=	"ESX28";	break;
					case 259:	$r	=	"ESX29";	break;
					case 2510:	$r	=	"ESX210";	break;
					case 2511:	$r	=	"ESX311";	break;
					case 2512:	$r	=	"ESX312";	break;
					case 2513:	$r	=	"ESX313";	break;
					case 2514:	$r	=	"ESX314";	break;
					case 2515:	$r	=	"ESX315";	break;
					case 2516:	$r	=	"ESX316";	break;
					case 2517:	$r	=	"ESX417";	break;
					case 2518:	$r	=	"ESX418";	break;
					case 2519:	$r	=	"ESX419";	break;
					case 2520:	$r	=	"ESX420";	break;
					case 2521:	$r	=	"ESX421";	break;
				//Especializacion Finanzas Personales Miseras Triunfantes
					case 261:	$r	=	"EFP11";	break;
					case 262:	$r	=	"EFP12";	break;
					case 263:	$r	=	"EFP13";	break;
					case 264:	$r	=	"EFP14";	break;
					case 265:	$r	=	"EFP25";	break;
					case 266:	$r	=	"EFP26";	break;
					case 267:	$r	=	"EFP27";	break;
					case 268:	$r	=	"EFP28";	break;
					case 269:	$r	=	"EFP29";	break;
					case 2610:	$r	=	"EFP310";	break;
					case 2611:	$r	=	"EFP311";	break;
					case 2612:	$r	=	"EFP312";	break;
					case 2613:	$r	=	"EFP313";	break;
					case 2614:	$r	=	"EFP414";	break;
					case 2615:	$r	=	"EFP415";	break;
					case 2616:	$r	=	"EFP416";	break;
					case 2617:	$r	=	"EFP417";	break;
				//Especializacion Procesos Miseros
					case 321:	$r	=	"EPM11";	break;
					case 322:	$r	=	"EPM12";	break;
					case 323:	$r	=	"EPM13";	break;
					case 324:	$r	=	"EPM14";	break;
					case 325:	$r	=	"EPM25";	break;
					case 326:	$r	=	"EPM26";	break;
					case 327:	$r	=	"EPM27";	break;
					case 328:	$r	=	"EPM38";	break;
					case 329:	$r	=	"EPM39";	break;
					case 3210:	$r	=	"EPM310";	break;
					case 3211:	$r	=	"EPM311";	break;
					case 3212:	$r	=	"EPM312";	break;
					case 3213:	$r	=	"EPM413";	break;
					case 3214:	$r	=	"EPM414";	break;
					case 3215:	$r	=	"EPM415";	break;
					case 3216:	$r	=	"EPM416";	break;
				//Maestria en Ensenanza Matematica
					case 271:	$r	=	"MEM11";	break;
					case 272:	$r	=	"MEM12";	break;
					case 273:	$r	=	"MEM13";	break;
					case 274:	$r	=	"MEM14";	break;
					case 275:	$r	=	"MEM25";	break;
					case 276:	$r	=	"MEM26";	break;
					case 277:	$r	=	"MEM27";	break;
					case 278:	$r	=	"MEM38";	break;
					case 279:	$r	=	"MEM39";	break;
					case 2710:	$r	=	"MEM310";	break;
					case 2711:	$r	=	"MEM311";	break;
					case 2712:	$r	=	"MEM312";	break;
					case 2713:	$r	=	"MEM413";	break;
					case 2714:	$r	=	"MEM414";	break;
					case 2715:	$r	=	"MEM415";	break;
					case 2716:	$r	=	"MEM416";	break;
					case 2717:	$r	=	"MEM417";	break;
				//Maestria Idiotez Audiovisual
					case 281:	$r	=	"MIA11";	break;
					case 282:	$r	=	"MIA12";	break;
					case 283:	$r	=	"MIA13";	break;
					case 284:	$r	=	"MIA14";	break;
					case 285:	$r	=	"MIA15";	break;
					case 286:	$r	=	"MIA26";	break;
					case 287:	$r	=	"MIA27";	break;
					case 288:	$r	=	"MIA28";	break;
					case 289:	$r	=	"MIA29";	break;
					case 2810:	$r	=	"MIA210";	break;
					case 2811:	$r	=	"MIA311";	break;
					case 2812:	$r	=	"MIA312";	break;
					case 2813:	$r	=	"MIA313";	break;
					case 2814:	$r	=	"MIA314";	break;
					case 2815:	$r	=	"MIA315";	break;
					case 2816:	$r	=	"MIA316A";	break;
					case 2817:	$r	=	"MIA316B";	break;
					case 2818:	$r	=	"MIA417";	break;
					case 2819:	$r	=	"MIA418";	break;
					case 2820:	$r	=	"MIA419";	break;
					case 2821:	$r	=	"MIA420";	break;
					case 2822:	$r	=	"MIA421";	break;
					case 2823:	$r	=	"MIA422";	break;
					case 2824:	$r	=	"MIA423";	break;

			//Facultad Continua
				//Profundización Redes Sociales
					case 351:	$r	=	"CRS01";	break;
					case 352:	$r	=	"CRS02";	break;
					case 353:	$r	=	"CRS03";	break;
					case 354:	$r	=	"CRS04";	break;
					case 355:	$r	=	"CRS05";	break;
					case 356:	$r	=	"CRS06";	break;
					case 357:	$r	=	"CRS07";	break;
					case 358:	$r	=	"CRS08";	break;
					case 359:	$r	=	"CRS09";	break;
					case 3510:	$r	=	"CRS10";	break;
					case 3511:	$r	=	"CRS11";	break;
					case 3512:	$r	=	"CRS12";	break;
					case 3513:	$r	=	"CRS1A";	break;
					case 3514:	$r	=	"CRS1B";	break;
					case 3515:	$r	=	"CRS1C";	break;
					case 3516:	$r	=	"CRS1D";	break;
					case 3517:	$r	=	"CRS2A";	break;
					case 3518:	$r	=	"CRS2B";	break;
					case 3519:	$r	=	"CRS2C";	break;
					case 3520:	$r	=	"CRS3A";	break;
					case 3521:	$r	=	"CRS3B";	break;
					case 3522:	$r	=	"CRS4A";	break;
					case 3523:	$r	=	"CRS4B";	break;
					case 3524:	$r	=	"CRS4C";	break;
					case 3525:	$r	=	"CRS5A";	break;
					case 3526:	$r	=	"CRS5B";	break;


			default:
				$r = "N/A N/D";
			break;
		}
		return $r;
	}

	//Entrega el nombre de una asignatura
	public function AsignaturaNombre($x){
		switch ($x) {
			//Facultad Mísera
				//Míseras Generales Básicas
					case "MGB1":	case 	101:	$r=	"Matemáticas I";	break;
					case "MGB2":	case 	102:	$r=	"Matemáticas II";	break;
					case "MGB3":	case 	103:	$r=	"Matemáticas III";	break;
					case "MGB4":	case 	104:	$r=	"Matemáticas IV";	break;
					case "MGB5":	case 	105:	$r=	"Matemáticas V";	break;
					case "MGB6":	case 	106:	$r=	"Dignidad I";	break;
					case "MGB7":	case 	107:	$r=	"Dignidad II";	break;
					case "MGB8":	case 	108:	$r=	"Leyes";	break;
					case "MGB9":	case 	109:	$r=	"Análisis y Orálisis";	break;
					case "MGB10":	case 	1010:	$r=	"Simulación";	break;
					case "MGB11":	case 	1011:	$r=	"Cultura Ciudadana";	break;
					case "MGB12":	case 	1012:	$r=	"Cátedra Unimiserablilística";	break;
					case "MGB13":	case 	1013:	$r=	"Introducción a la Tecnología Mísera";	break;
					case "MGB14":	case 	1014:	$r=	"Introducción a la Ingeniería Mísera";	break;
			//Facultad Básica		
				//Técnico Ortografía
					case "BOR11":	case	111:	$r	=	"Castellano";	break;
					case "BOR12":	case	112:	$r	=	"Comprensión Oral";	break;
					case "BOR13":	case	113:	$r	=	"Comprensión Escrita I";	break;
					case "BOR14":	case	114:	$r	=	"Técnicas Escritura";	break;
					case "BOR15":	case	115:	$r	=	"Gramática Básica";	break;
					case "BOR16":	case	116:	$r	=	"Formatos regionales";	break;
					case "BOR27":	case	117:	$r	=	"Comprensión Escrita II";	break;
					case "BOR28":	case	118:	$r	=	"Ortografía";	break;
					case "BOR29":	case	119:	$r	=	"Normas básicas documentos";	break;
					case "BOR210":	case	1110:	$r	=	"Dignidad Linguística";	break;
				//Técnico Dignidad Sentimental
					case "BDS11":	case	121:	$r	=	"Noviazgo";	break;
					case "BDS12":	case	122:	$r	=	"Sentimiento Masculino I";	break;
					case "BDS13":	case	123:	$r	=	"Sentimiento Femenino I";	break;
					case "BDS14":	case	124:	$r	=	"Psicología sentimental";	break;
					case "BDS15":	case	125:	$r	=	"Relaciones Personales";	break;
					case "BDS16":	case	126:	$r	=	"Relaciones Públicas";	break;
					case "BDS27":	case	127:	$r	=	"Autoestima sentimental";	break;
					case "BDS28":	case	128:	$r	=	"Sentimentalismo General";	break;
					case "BDS29":	case	129:	$r	=	"Relaciones fallidas";	break;
					case "BDS210":	case	1210:	$r	=	"Anti-Ex Relaciones";	break;
				//Técnico Miserableza
					case "BMI11":	case	131:	$r	=	"Ñerología Monetaria";	break;
					case "BMI12":	case	132:	$r	=	"Control reproducción";	break;
					case "BMI13":	case	133:	$r	=	"Metodología del compartir";	break;
					case "BMI24":	case	134:	$r	=	"Estratificación";	break;
					case "BMI25":	case	135:	$r	=	"Formalidad Laboral";	break;
					case "BMI26":	case	136:	$r	=	"Gastos míseros";	break;
					case "BMI27":	case	137:	$r	=	"Tacañismo";	break;
				//Técnico Sociedad Web
					case "BSI11":	case	141:	$r	=	"Fenómenos";	break;
					case "BSI12":	case	142:	$r	=	"Crítica fotográfica";	break;
					case "BSI13":	case	143:	$r	=	"Crítica audio-visual";	break;
					case "BSI14":	case	144:	$r	=	"Arena General";	break;
					case "BSI15":	case	145:	$r	=	"Arena Religiosa";	break;
					case "BSI16":	case	146:	$r	=	"Hipocresía Social Virtual";	break;
					case "BSI27":	case	147:	$r	=	"Multimedia Estratificada";	break;
					case "BSI28":	case	148:	$r	=	"Dignidad Social Informática";	break;
					case "BSI29":	case	149:	$r	=	"Redes sociales";	break;
					case "BSI210":	case	1410:	$r	=	"Política Virtual";	break;
				//Técnico Gestión bisexual
					case "BGB11":	case	151:	$r	=	"Doble vía lógico-sexual";	break;
					case "BGB12":	case	152:	$r	=	"Doble Intimidá";	break;
					case "BGB13":	case	153:	$r	=	"Doble Decisión";	break;
					case "BGB14":	case	154:	$r	=	"Doble Dignidad";	break;
					case "BGB15":	case	155:	$r	=	"Adaptativa de rol";	break;
					case "BGB26":	case	156:	$r	=	"Indecisiones";	break;
					case "BGB27":	case	157:	$r	=	"Multiplesexualismo";	break;
					case "BGB28":	case	158:	$r	=	"Placer Variado";	break;
			//Facultad Tecnologías
				//Tecnología Dignidad Humana
					case "TDH11":	case	161:	$r	=	"Carácter I";	break;
					case "TDH12":	case	162:	$r	=	"Sociedad I";	break;
					case "TDH23":	case	163:	$r	=	"Intimidad";	break;
					case "TDH24":	case	164:	$r	=	"Mundo Laboral";	break;
					case "TDH25":	case	165:	$r	=	"Orgullo Propio";	break;
					case "TDH26":	case	166:	$r	=	"Orgullo General";	break;
					case "TDH27":	case	167:	$r	=	"Carácter II";	break;
					case "TDH28":	case	168:	$r	=	"Sociedad II";	break;
					case "TDH39":	case	169:	$r	=	"Intimidad Personal";	break;
					case "TDH310":	case	1610:	$r	=	"Intimidad de Pareja";	break;
					case "TDH311":	case	1611:	$r	=	"Personalidad I";	break;
					case "TDH312":	case	1612:	$r	=	"Sociedad III";	break;
					case "TDH313":	case	1613:	$r	=	"Importaculismo";	break;
					case "TDH414":	case	1614:	$r	=	"Paciencia";	break;
					case "TDH415":	case	1615:	$r	=	"Estigmas sociales";	break;
					case "TDH416":	case	1616:	$r	=	"Básico Sexual Digno";	break;
					case "TDH417":	case	1617:	$r	=	"Educación Dignos";	break;
					case "TDH418":	case	1618:	$r	=	"Amistad Digna";	break;
					case "TDH419":	case	1619:	$r	=	"Indigna";	break;
					case "TDH520":	case	1620:	$r	=	"Economía Digna";	break;
					case "TDH521":	case	1621:	$r	=	"Ley Digna";	break;
					case "TDH522":	case	1622:	$r	=	"Salud Digna";	break;
					case "TDH523":	case	1623:	$r	=	"Miseria Digna";	break;
				//Tecnología Finanzas Familiares Personales
					case "TFP11":	case	171:	$r	=	"Padres e hijos I";	break;
					case "TFP22":	case	172:	$r	=	"Control de costos";	break;
					case "TFP23":	case	173:	$r	=	"Padres e hijos II";	break;
					case "TFP24":	case	174:	$r	=	"Reproducción Estratificada";	break;
					case "TFP35":	case	175:	$r	=	"Chimbaditas Propias";	break;
					case "TFP36":	case	176:	$r	=	"Gastos Primarios";	break;
					case "TFP37":	case	177:	$r	=	"Gastos Secundarios";	break;
					case "TFP38":	case	178:	$r	=	"Padres e hijos III";	break;
					case "TFP49":	case	179:	$r	=	"Economía Bendecida";	break;
					case "TFP410":	case	1710:	$r	=	"Hipotecativa";	break;
					case "TFP411":	case	1711:	$r	=	"Compraventas y Empeño";	break;
					case "TFP412":	case	1712:	$r	=	"Educación Personal";	break;
					case "TFP513":	case	1713:	$r	=	"Padres e Hijos IV";	break;
					case "TFP514":	case	1714:	$r	=	"Fiduciarias";	break;
					case "TFP515":	case	1715:	$r	=	"Básico Contabilidad";	break;
					case "TFP516":	case	1716:	$r	=	"Control Salarial";	break;
					case "TFP517":	case	1717:	$r	=	"Riesgos Económicos";	break;
					case "TFP518":	case	1718:	$r	=	"Gastos Fiesteros";	break;
					case "TFP519":	case	1719:	$r	=	"Bancarrota";	break;
				//Tecnología Identificacion Personal
					case "TIP11":	case	181:	$r	=	"Personalidad ";	break;
					case "TIP12":	case	182:	$r	=	"Género Masculino I ";	break;
					case "TIP13":	case	183:	$r	=	"Género Femenino I";	break;
					case "TIP14":	case	184:	$r	=	"Rasgos Físicos I ";	break;
					case "TIP15":	case	185:	$r	=	"Análisis Personal";	break;
					case "TIP16":	case	186:	$r	=	"Datos Colectivos ";	break;
					case "TIP27":	case	187:	$r	=	"Alcoholemia";	break;
					case "TIP28":	case	188:	$r	=	"Género Masculino II ";	break;
					case "TIP29":	case	189:	$r	=	"Género Femenino II";	break;
					case "TIP210":	case	1810:	$r	=	"Rasgos Físicos II";	break;
					case "TIP211":	case	1811:	$r	=	"Métodos anti-show";	break;
					case "TIP212":	case	1812:	$r	=	"Teoría del Gomelo ";	break;
					case "TIP213":	case	1813:	$r	=	"Lenguaje de Señas";	break;
					case "TIP314":	case	1814:	$r	=	"Conserva de la Dignidad";	break;
					case "TIP315":	case	1815:	$r	=	"Lenguaje Corporal";	break;
					case "TIP316":	case	1816:	$r	=	"Lenguaje Vulgar";	break;
					case "TIP317":	case	1817:	$r	=	"Ñerismo I";	break;
					case "TIP318":	case	1818:	$r	=	"Lenguaje Identificativo ";	break;
					case "TIP319":	case	1819:	$r	=	"Familiarización";	break;
					case "TIP320":	case	1820:	$r	=	"Irrespeto";	break;
					case "TIP421":	case	1821:	$r	=	"Identificación por Público";	break;
					case "TIP422":	case	1822:	$r	=	"Identificación de Personal";	break;
					case "TIP423":	case	1823:	$r	=	"Comunicación e Informes";	break;
					case "TIP424":	case	1824:	$r	=	"Usted no sabe quién soy yo I";	break;
					case "TIP425":	case	1825:	$r	=	"Identificación de Fenómenos";	break;
					case "TIP426":	case	1826:	$r	=	"Identificación Deportiva";	break;
					case "TIP427":	case	1827:	$r	=	"Identificación Estratificada";	break;
					case "TIP528":	case	1828:	$r	=	"Usted no sabe quién soy yo II";	break;
					case "TIP529":	case	1829:	$r	=	"Ridículo Ajeno";	break;
					case "TIP530":	case	1830:	$r	=	"Plena Identificación";	break;
				//Tecnología Gestión Heterosexual
					case "THE11":	case	191:	$r	=	"TETAlles Femeninos";	break;
					case "THE12":	case	192:	$r	=	"Detalles Masculinos ";	break;
					case "THE13":	case	193:	$r	=	"Clasificaciones";	break;
					case "THE14":	case	194:	$r	=	"Matricidio ";	break;
					case "THE25":	case	195:	$r	=	"Bendiciones y Fortunas";	break;
					case "THE26":	case	196:	$r	=	"Discriminativa ";	break;
					case "THE27":	case	197:	$r	=	"Artes Plásticas ";	break;
					case "THE38":	case	198:	$r	=	"Control Soltería";	break;
					case "THE39":	case	199:	$r	=	"Control Sentimental";	break;
					case "THE310":	case	1910:	$r	=	"Rumberología";	break;
					case "THE311":	case	1911:	$r	=	"Bendeciología y Fortunología";	break;
					case "THE412":	case	1912:	$r	=	"Envidiástica Femenina";	break;
					case "THE513":	case	1913:	$r	=	"Control Hormonas";	break;
					case "THE514":	case	1914:	$r	=	"Casuales y Rápidos";	break;
					case "THE515":	case	1915:	$r	=	"Lenguajes Heterocomunicativos";	break;
					case "THE516":	case	1916:	$r	=	"Parcerástica Masculina";	break;
					case "THE517":	case	1917:	$r	=	"Interés Extranjero";	break;
				//Tecnología Gestión Homosexual
					case "THO11":	case	201:	$r	=	"Sociedad Básica";	break;
					case "THO12":	case	202:	$r	=	"Estilistismo";	break;
					case "THO13":	case	203:	$r	=	"Procesos Envidiásticos";	break;
					case "THO14":	case	204:	$r	=	"Salida Armario";	break;
					case "THO15":	case	205:	$r	=	"Salida Caja de Herramientas";	break;
					case "THO26":	case	206:	$r	=	"Género HomoMasculino";	break;
					case "THO27":	case	207:	$r	=	"Género HomoFemenino";	break;
					case "THO28":	case	208:	$r	=	"Género HomoVariado";	break;
					case "THO29":	case	209:	$r	=	"Festejología ";	break;
					case "THO310":	case	2010:	$r	=	"Extranjerismos";	break;
					case "THO311":	case	2011:	$r	=	"Glamourística ";	break;
					case "THO312":	case	2012:	$r	=	"Venenología ";	break;
					case "THO313":	case	2013:	$r	=	"Fanatismo Musical";	break;
					case "THO314":	case	2014:	$r	=	"Moda Estratificada";	break;
					case "THO315":	case	2015:	$r	=	"Defensa Unida Anti-Homofobia";	break;
					case "THO316":	case	2016:	$r	=	"Crítica Interna Comunitaria";	break;
					case "THO317":	case	2017:	$r	=	"Discriminatorias";	break;
					case "THO418":	case	2018:	$r	=	"Lenguaje I ";	break;
					case "THO419":	case	2019:	$r	=	"Faggotología";	break;
					case "THO420":	case	2020:	$r	=	"Aplicaciones Sexo-sociales ";	break;
					case "THO421":	case	2021:	$r	=	"Homofobiatología";	break;
					case "THO422":	case	2022:	$r	=	"Técnica de Gustos generales";	break;
					case "THO423":	case	2023:	$r	=	"Exageraciones y Drama";	break;
					case "THO524":	case	2024:	$r	=	"Técnica de Gustos Propios ";	break;
					case "THO525":	case	2025:	$r	=	"Lenguaje II ";	break;
					case "THO526":	case	2026:	$r	=	"Temática Bitch";	break;
					case "THO527":	case	2027:	$r	=	"Erectiva y Analitiva";	break;
					case "THO528":	case	2028:	$r	=	"Investigayción";	break;
					case "THO529":	case	2029:	$r	=	"Salud y Estilos de Vida";	break;
				//Tecnología Depresion Cotidiana
					case "TDC11":	case	391:	$r	=	"Depresión I";	break;
					case "TDC12":	case	392:	$r	=	"Entorno Público";	break;
					case "TDC13":	case	393:	$r	=	"Personalidad Aleatoria";	break;
					case "TDC24":	case	394:	$r	=	"Depresión II";	break;
					case "TDC25":	case	395:	$r	=	"Cotidianidad I";	break;
					case "TDC26":	case	396:	$r	=	"Factores Personales";	break;
					case "TDC27":	case	397:	$r	=	"Alteración Interna";	break;
					case "TDC28":	case	398:	$r	=	"Moda Depresiva";	break;
					case "TDC39":	case	399:	$r	=	"Cotidianométrica";	break;
					case "TDC310":	case	3910:	$r	=	"Métrica Depresiva";	break;
					case "TDC311":	case	3911:	$r	=	"Cotidianidad II";	break;
					case "TDC312":	case	3912:	$r	=	"Cálculo Fracasante";	break;
					case "TDC313":	case	3913:	$r	=	"Principios Psicológicos";	break;
					case "TDC414":	case	3914:	$r	=	"Depresión III";	break;
					case "TDC415":	case	3915:	$r	=	"Aislamiento";	break;
					case "TDC416":	case	3916:	$r	=	"Evasión Realista";	break;
					case "TDC417":	case	3917:	$r	=	"Apoyo Intelectual";	break;
					case "TDC518":	case	3918:	$r	=	"Proyección Depresiva Cotidiana";	break;
					case "TDC519":	case	3919:	$r	=	"Proyección Superativa";	break;
					case "TDC520":	case	3920:	$r	=	"Colectivismo Mental";	break;
					case "TDC521":	case	3921:	$r	=	"Consecuencialidad";	break;
					case "TDC522":	case	3922:	$r	=	"Conformismo y Resignación";	break;
			//Facultad Ingenierías
				//Ingeniería Youtuber
					case "IYO11":	case	211:	$r	=	"Informática";	break;
					case "IYO12":	case	212:	$r	=	"Desocupadología";	break;
					case "IYO13":	case	213:	$r	=	"Medios de Garaje";	break;
					case "IYO14":	case	214:	$r	=	"Autoestima I";	break;
					case "IYO15":	case	215:	$r	=	"Interné I";	break;
					case "IYO26":	case	216:	$r	=	"Sociedad Clasificante";	break;
					case "IYO27":	case	217:	$r	=	"Diseño Web";	break;
					case "IYO28":	case	218:	$r	=	"Estupidología";	break;
					case "IYO29":	case	219:	$r	=	"Artes Miserables";	break;
					case "IYO210":	case	2110:	$r	=	"Artes Dramáticas I";	break;
					case "IYO311":	case	2111:	$r	=	"Inversión del tiempo I";	break;
					case "IYO312":	case	2112:	$r	=	"Audio-visuales Sonido";	break;
					case "IYO313":	case	2113:	$r	=	"Audio-visuales Video";	break;
					case "IYO314":	case	2114:	$r	=	"Autoestima II ";	break;
					case "IYO315":	case	2115:	$r	=	"Gestos Amórficos";	break;
					case "IYO416":	case	2116:	$r	=	"Interné II";	break;
					case "IYO417":	case	2117:	$r	=	"Artes Dramáticas II";	break;
					case "IYO418":	case	2118:	$r	=	"Inversión del tiempo II";	break;
					case "IYO419":	case	2119:	$r	=	"Youtubeología I ";	break;
					case "IYO520":	case	2120:	$r	=	"Apague y Vámonos ";	break;
					case "IYO521":	case	2121:	$r	=	"Contenido Digno";	break;
					case "IYO522":	case	2122:	$r	=	"Vestimenta";	break;
					case "IYO523":	case	2123:	$r	=	"Intentos Literarios";	break;
					case "IYO524":	case	2124:	$r	=	"Homosexualidad II";	break;
					case "IYO525":	case	2125:	$r	=	"Youtubelogoía II ";	break;
					case "IYO626":	case	2126:	$r	=	"Mendigología Virtual";	break;
					case "IYO627":	case	2127:	$r	=	"Marketing Virtual";	break;
					case "IYO628":	case	2128:	$r	=	"Zanganología";	break;
					case "IYO629":	case	2129:	$r	=	"Propagación";	break;
					case "IYO630":	case	2130:	$r	=	"Pérdida de Privacidad";	break;
					case "IYO631":	case	2131:	$r	=	"Estrellato Estrellado";	break;
					case "IYO732":	case	2132:	$r	=	"Youtubeología III";	break;
					case "IYO733":	case	2133:	$r	=	"Artes Dramáticas III";	break;
					case "IYO734":	case	2134:	$r	=	"Repetitividad y Originalidad";	break;
					case "IYO735":	case	2135:	$r	=	"Evasión Comentarista y Crítica";	break;
					case "IYO736":	case	2136:	$r	=	"Gimnasia";	break;
					case "IYO737":	case	2137:	$r	=	"Jubilación Dudosa";	break;
					case "IYO738":	case	2138:	$r	=	"Manipulación y Tendencias";	break;
					case "IYO139":	case	2139:	$r	=	"Ingeniería Social";	break;
					case "IYO240":	case	2140:	$r	=	"Influenciamiento I";	break;
					case "IYO341":	case	2141:	$r	=	"Influenciamiento II";	break;
					case "IYO442":	case	2142:	$r	=	"Influenciamiento III";	break;
					case "IYO643":	case	2143:	$r	=	"Influenciamiento IV";	break;
					case "IYO744":	case	2144:	$r	=	"Influenciamiento V";	break;
					case "IYO745":	case	2145:	$r	=	"Relaciones Humanas Avanzadas";	break;
					case "IYO246":	case	2146:	$r	=	"Fotografía y Diseño";	break;
					case "IYO247":	case	2147:	$r	=	"Laboratorio de Fotografía y Diseño";	break;
					case "IYO348":	case	2148:	$r	=	"Alternativas Sociomediáticas";	break;
					case "IYO449":	case	2149:	$r	=	"Administración Social Mediática";	break;
					case "IYO650":	case	2150:	$r	=	"Independencia Sociomediática";	break;
					case "IYO551":	case	2151:	$r	=	"Negocios Sociales Mediáticos";	break;
					case "IYO552":	case	2152:	$r	=	"Farándula Nacional";	break;
					case "IYO553":	case	2153:	$r	=	"Internacionalización Mediática";	break;
				//Ingeniería Financiera
					case "IFZ11":	case	221:	$r	=	"Pobreza I";	break;
					case "IFZ12":	case	222:	$r	=	"Miseria I";	break;
					case "IFZ13":	case	223:	$r	=	"Ahorro I";	break;
					case "IFZ14":	case	224:	$r	=	"Informalidad Laboral";	break;
					case "IFZ15":	case	225:	$r	=	"Gerencia Salarial";	break;
					case "IFZ16":	case	226:	$r	=	"Economía I";	break;
					case "IFZ27":	case	227:	$r	=	"Aprovechamiento";	break;
					case "IFZ28":	case	228:	$r	=	"Economía II";	break;
					case "IFZ29":	case	229:	$r	=	"Aprecio del Dinero I";	break;
					case "IFZ210":	case	2210:	$r	=	"Ahorro II";	break;
					case "IFZ211":	case	2211:	$r	=	"Moneda Extranjera";	break;
					case "IFZ312":	case	2212:	$r	=	"Aprecio del Dinero II";	break;
					case "IFZ313":	case	2213:	$r	=	"Ahorro III";	break;
					case "IFZ314":	case	2214:	$r	=	"Gastos Públicos";	break;
					case "IFZ315":	case	2215:	$r	=	"Gastos Privados";	break;
					case "IFZ316":	case	2216:	$r	=	"Gastos Innecesarios";	break;
					case "IFZ317":	case	2217:	$r	=	"Relaciones Bancarias";	break;
					case "IFZ318":	case	2218:	$r	=	"Inversiones";	break;
					case "IFZ319":	case	2219:	$r	=	"Contabilidad";	break;
					case "IFZ420":	case	2220:	$r	=	"Familias I";	break;
					case "IFZ421":	case	2221:	$r	=	"Juegos del Hambre I";	break;
					case "IFZ422":	case	2222:	$r	=	"Sistemas Subsidiados";	break;
					case "IFZ423":	case	2223:	$r	=	"Santidad y Fortuna";	break;
					case "IFZ424":	case	2224:	$r	=	"Teoría del Tacaño";	break;
					case "IFZ425":	case	2225:	$r	=	"Gastos Anuales Festivos";	break;
					case "IFZ526":	case	2226:	$r	=	"Ñerismo Económico";	break;
					case "IFZ527":	case	2227:	$r	=	"Destino Monetario";	break;
					case "IFZ528":	case	2228:	$r	=	"Familias II";	break;
					case "IFZ529":	case	2229:	$r	=	"Juegos del Hambre II";	break;
					case "IFZ530":	case	2230:	$r	=	"Pobreza II";	break;
					case "IFZ531":	case	2231:	$r	=	"Miseria II";	break;
					case "IFZ532":	case	2232:	$r	=	"Rebusque I";	break;
					case "IFZ633":	case	2233:	$r	=	"Estadística";	break;
					case "IFZ634":	case	2234:	$r	=	"Enseñanza Aplicativa";	break;
					case "IFZ635":	case	2235:	$r	=	"Pereza Numérica";	break;
					case "IFZ736":	case	2236:	$r	=	"Matemática para Pobres";	break;
					case "IFZ737":	case	2237:	$r	=	"Paracetamología y Salud";	break;
					case "IFZ738":	case	2238:	$r	=	"Rebusque II";	break;
					case "IFZ739":	case	2239:	$r	=	"Centrales de Riesgo";	break;
					case "IFZ740":	case	2240:	$r	=	"Sistema de Salud";	break;
					case "IFZ741":	case	2241:	$r	=	"Impuestos Justos e Injustos";	break;
				//Ingeniería Sexual
					case "ISX11":	case	231:	$r	=	"Detalles";	break;
					case "ISX12":	case	232:	$r	=	"Parla I";	break;
					case "ISX13":	case	233:	$r	=	"Conquista I";	break;
					case "ISX14":	case	234:	$r	=	"Géneros";	break;
					case "ISX15":	case	235:	$r	=	"Heterosexualidad I";	break;
					case "ISX26":	case	236:	$r	=	"Parla II";	break;
					case "ISX27":	case	237:	$r	=	"Conquista II";	break;
					case "ISX28":	case	238:	$r	=	"Pornografía y Consuelo";	break;
					case "ISX29":	case	239:	$r	=	"Salud I";	break;
					case "ISX310":	case	2310:	$r	=	"Parla III";	break;
					case "ISX311":	case	2311:	$r	=	"Conquista III";	break;
					case "ISX312":	case	2312:	$r	=	"Categorización Sexual";	break;
					case "ISX313":	case	2313:	$r	=	"Heterosexualidad II";	break;
					case "ISX314":	case	2314:	$r	=	"Fantasías";	break;
					case "ISX315":	case	2315:	$r	=	"Polvografía";	break;
					case "ISX416":	case	2316:	$r	=	"Salud II";	break;
					case "ISX417":	case	2317:	$r	=	"Parla IV";	break;
					case "ISX418":	case	2318:	$r	=	"Homosexualidad I";	break;
					case "ISX419":	case	2319:	$r	=	"Amor I";	break;
					case "ISX420":	case	2320:	$r	=	"Envidiástica General";	break;
					case "ISX421":	case	2321:	$r	=	"Parcerástica General";	break;
					case "ISX422":	case	2322:	$r	=	"Falsedad Orgásmica";	break;
					case "ISX423":	case	2323:	$r	=	"Control de Hormonas";	break;
					case "ISX524":	case	2324:	$r	=	"Casual General y Habitual";	break;
					case "ISX525":	case	2325:	$r	=	"Sexo I";	break;
					case "ISX526":	case	2326:	$r	=	"Técnico Bisexual";	break;
					case "ISX527":	case	2327:	$r	=	"Inclinaciones y Orientaciones";	break;
					case "ISX528":	case	2328:	$r	=	"Dignidad Sexual";	break;
					case "ISX529":	case	2329:	$r	=	"Lenguajes";	break;
					case "ISX630":	case	2330:	$r	=	"Sexo II";	break;
					case "ISX631":	case	2331:	$r	=	"Homosexualidad II";	break;
					case "ISX632":	case	2332:	$r	=	"Amor II";	break;
					case "ISX633":	case	2333:	$r	=	"Fornicología I";	break;
					case "ISX634":	case	2334:	$r	=	"Legalidades y Abusos";	break;
					case "ISX635":	case	2335:	$r	=	"Infidelidades";	break;
					case "ISX636":	case	2336:	$r	=	"Obsesiones";	break;
					case "ISX637":	case	2337:	$r	=	"Curiosidad General";	break;
					case "ISX738":	case	2338:	$r	=	"Sexo III";	break;
					case "ISX739":	case	2339:	$r	=	"Fornicología II";	break;
					case "ISX740":	case	2340:	$r	=	"Salud III";	break;
					case "ISX741":	case	2341:	$r	=	"Hetero-Erotismo";	break;
					case "ISX742":	case	2342:	$r	=	"Homo-Erotismo";	break;
					case "ISX743":	case	2343:	$r	=	"Introductorio Esperanza Gómez";	break;
					case "ISX744":	case	2344:	$r	=	"Referenciamiento";	break;
					case "ISX745":	case	2345:	$r	=	"Electiva";	break;
					case "ISX-E01":	case	2346:	$r	=	"Hetero-Inducción y Regulación";	break;
					case "ISX-E02":	case	2347:	$r	=	"Hetero-Hidráulica";	break;
					case "ISX-E03":	case	2348:	$r	=	"Gerencia Heterosexual";	break;
					case "ISX-E04":	case	2349:	$r	=	"Homo-Inducción y Regulación";	break;
					case "ISX-E05":	case	2350:	$r	=	"Homo-Hidráulica";	break;
					case "ISX-E06":	case	2351:	$r	=	"Gerencia Homosexual";	break;
					case "ISX-E07":	case	2352:	$r	=	"Hidráulica General Masculina";	break;
					case "ISX-E08":	case	2353:	$r	=	"Hidráulica General Femenina";	break;
					case "ISX-E09":	case	2354:	$r	=	"Jueputa Qué Rico";	break;
					case "ISX-E10":	case	2355:	$r	=	"Roles Sexuales Múltiples";	break;
					case "ISX-E11":	case	2356:	$r	=	"Profundización en LGBTI";	break;
				//Ingeniería Fracaso
					case "IFR11":	case	241:	$r	=	"Fracaso Educativo I";	break;
					case "IFR22":	case	242:	$r	=	"Fracaso Educativo II";	break;
					case "IFR23":	case	243:	$r	=	"Procrastinar I";	break;
					case "IFR24":	case	244:	$r	=	"Responsabilidad I";	break;
					case "IFR35":	case	245:	$r	=	"Procrastinar II";	break;
					case "IFR36":	case	246:	$r	=	"Responsabilidad II";	break;
					case "IFR37":	case	247:	$r	=	"Procesos Vagos";	break;
					case "IFR38":	case	248:	$r	=	"Ninilogía";	break;
					case "IFR39":	case	249:	$r	=	"Ingeniería Industrial I";	break;
					case "IFR310":	case	2410:	$r	=	"Ignorancia";	break;
					case "IFR311":	case	2411:	$r	=	"Conformismo Personal";	break;
					case "IFR412":	case	2412:	$r	=	"Conformismo Económico";	break;
					case "IFR413":	case	2413:	$r	=	"Conformismo Social";	break;
					case "IFR414":	case	2414:	$r	=	"Crítica no aportante";	break;
					case "IFR415":	case	2415:	$r	=	"Ñerología I";	break;
					case "IFR416":	case	2416:	$r	=	"Básico Mamertismo";	break;
					case "IFR517":	case	2417:	$r	=	"Control Reproductorio";	break;
					case "IFR518":	case	2418:	$r	=	"Propagación de ideales";	break;
					case "IFR519":	case	2419:	$r	=	"Matemática Pre-escolar";	break;
					case "IFR520":	case	2420:	$r	=	"Futuro Infuturo";	break;
					case "IFR521":	case	2421:	$r	=	"Lógica de Decisiones";	break;
					case "IFR522":	case	2422:	$r	=	"Ñerología II";	break;
					case "IFR523":	case	2423:	$r	=	"Vestimenta del Fracaso";	break;
					case "IFR624":	case	2424:	$r	=	"Dependencia Parental";	break;
					case "IFR625":	case	2425:	$r	=	"Dependencia Gubernamental";	break;
					case "IFR626":	case	2426:	$r	=	"Quejumbroso Totalitario";	break;
					case "IFR627":	case	2427:	$r	=	"Juegos del hambre personales";	break;
					case "IFR728":	case	2428:	$r	=	"Manifestaciones Ilógicas";	break;
					case "IFR729":	case	2429:	$r	=	"Importancia Alcohólica";	break;
					case "IFR730":	case	2430:	$r	=	"Importancia Deportista";	break;
					case "IFR731":	case	2431:	$r	=	"Perdición";	break;
					case "IFR732":	case	2432:	$r	=	"Ingeniería Industrial II";	break;
				//Ingeniería Presidencial
					case "IPR11":	case	291:	$r	=	"Derecho I";	break;
					case "IPR12":	case	292:	$r	=	"Alcaldía Menor";	break;
					case "IPR13":	case	293:	$r	=	"Corrupción I";	break;
					case "IPR24":	case	294:	$r	=	"Derecho II";	break;
					case "IPR25":	case	295:	$r	=	"Alcaldía Mayor";	break;
					case "IPR26":	case	296:	$r	=	"Corrupción II";	break;
					case "IPR27":	case	297:	$r	=	"Control Electoral Previo";	break;
					case "IPR28":	case	298:	$r	=	"Plaga Corrupta";	break;
					case "IPR29":	case	299:	$r	=	"Constitución I";	break;
					case "IPR210":	case	2910:	$r	=	"Enmierdatización Ciudadana I";	break;
					case "IPR311":	case	2911:	$r	=	"Enmierdatización Ciudadana II";	break;
					case "IPR312":	case	2912:	$r	=	"Constitución II";	break;
					case "IPR313":	case	2913:	$r	=	"Ciudadanía Subsidio-Dependiente";	break;
					case "IPR314":	case	2914:	$r	=	"Patriotismo Conveniente";	break;
					case "IPR315":	case	2915:	$r	=	"Centro Problemático";	break;
					case "IPR316":	case	2916:	$r	=	"Relaciones Exteriores";	break;
					case "IPR317":	case	2917:	$r	=	"Derecho III";	break;
					case "IPR318":	case	2918:	$r	=	"Extravío Financiero";	break;
					case "IPR419":	case	2919:	$r	=	"Enmierdatización Ciudadana III";	break;
					case "IPR420":	case	2920:	$r	=	"Constitución Final";	break;
					case "IPR421":	case	2921:	$r	=	"Derecho IV";	break;
					case "IPR522":	case	2922:	$r	=	"Derecho V";	break;
					case "IPR523":	case	2923:	$r	=	"Influencia Eclesiástica";	break;
					case "IPR524":	case	2924:	$r	=	"Control Ciego de Ministerios";	break;
					case "IPR525":	case	2925:	$r	=	"Gobernación";	break;
					case "IPR526":	case	2926:	$r	=	"Lenguajes Extranjeros";	break;
					case "IPR527":	case	2927:	$r	=	"Justicia Internacional";	break;
					case "IPR628":	case	2928:	$r	=	"Espaldarazo Post-Electoral";	break;
					case "IPR629":	case	2929:	$r	=	"Falsos Positivos";	break;
					case "IPR630":	case	2930:	$r	=	"Condolencia Nacional";	break;
					case "IPR631":	case	2931:	$r	=	"Fraude Presidencial";	break;
					case "IPR632":	case	2932:	$r	=	"Laicismo Dormido";	break;
					case "IPR633":	case	2933:	$r	=	"Justicia Bendecida y Afortunada";	break;
					case "IPR634":	case	2934:	$r	=	"Proyecto Presidencial I";	break;
					case "IPR735":	case	2935:	$r	=	"Proyecto Presidencial II";	break;
					case "IPR736":	case	2936:	$r	=	"Derecho VI";	break;
					case "IPR737":	case	2937:	$r	=	"Venta de la Patria";	break;
					case "IPR738":	case	2938:	$r	=	"Manipulación Televisiva de Proles";	break;
					case "IPR739":	case	2939:	$r	=	"Violencia para Todos";	break;
					case "IPR740":	case	2940:	$r	=	"Pueblo Adulto Dormido Ignorante";	break;
					case "IPR741":	case	2941:	$r	=	"Pueblo Joven Activo Oprimido";	break;
					case "IPR742":	case	2942:	$r	=	"Mandato Prolongado";	break;
					case "IPR743":	case	2943:	$r	=	"Electiva";	break;
					case "IPR-E01":	case	2944:	$r	=	"Militarización Conveniente";	break;
					case "IPR-E02":	case	2945:	$r	=	"Aprovechamiento de la ignorancia";	break;
					case "IPR-E03":	case	2946:	$r	=	"Culpabilidad Evadida";	break;
					case "IPR-E04":	case	2947:	$r	=	"Falsedad del discurso";	break;
					case "IPR-E05":	case	2948:	$r	=	"Compra del silencio";	break;
					case "IPR-E06":	case	2949:	$r	=	"Sistema de impuestos";	break;
					case "IPR-E07":	case	2950:	$r	=	"Tentativa de entrega patriótica";	break;
					case "IPR-E08":	case	2951:	$r	=	"Proclamación indebida";	break;
					case "IPR-E09":	case	2952:	$r	=	"Evasión constitucional";	break;
				//Ingeniería Destrucción Personal
					case "IDP11":	case	301:	$r	=	"Teoría Mísera";	break;
					case "IDP12":	case	302:	$r	=	"Dialecto Destructivo";	break;
					case "IDP13":	case	303:	$r	=	"Probabilidad Suicida";	break;
					case "IDP24":	case	304:	$r	=	"Entorno";	break;
					case "IDP25":	case	305:	$r	=	"Destrucción I";	break;
					case "IDP36":	case	306:	$r	=	"Destrucción Interna";	break;
					case "IDP37":	case	307:	$r	=	"Probabilidades";	break;
					case "IDP38":	case	308:	$r	=	"Destrucción Vengativa";	break;
					case "IDP49":	case	309:	$r	=	"Teoría de la crítica";	break;
					case "IDP410":	case	3010:	$r	=	"Insultos I";	break;
					case "IDP411":	case	3011:	$r	=	"Destrucción II";	break;
					case "IDP412":	case	3012:	$r	=	"Veneno I";	break;
					case "IDP413":	case	3013:	$r	=	"Control Mortífero";	break;
					case "IDP514":	case	3014:	$r	=	"Insultos II";	break;
					case "IDP515":	case	3015:	$r	=	"Veneno II";	break;
					case "IDP516":	case	3016:	$r	=	"Destrucición III";	break;
					case "IDP617":	case	3017:	$r	=	"Expresividad Corporal";	break;
					case "IDP618":	case	3018:	$r	=	"Proyecto Destructivo I";	break;
					case "IDP619":	case	3019:	$r	=	"Miseria Privada";	break;
					case "IDP620":	case	3020:	$r	=	"Destrucción Estratificada";	break;
					case "IDP721":	case	3021:	$r	=	"Insultos III";	break;
					case "IDP722":	case	3022:	$r	=	"Veneno III";	break;
					case "IDP723":	case	3023:	$r	=	"Destrucción IV";	break;
					case "IDP724":	case	3024:	$r	=	"Proyecto Destructivo II";	break;
				//Ingeniería Glamour
					case "IGM11":	case	311:	$r	=	"Teoría de la Moda";	break;
					case "IGM12":	case	312:	$r	=	"Línea de Tiempo";	break;
					case "IGM13":	case	313:	$r	=	"Teoría del glamour";	break;
					case "IGM24":	case	314:	$r	=	"Tallas y Tamaños";	break;
					case "IGM35":	case	315:	$r	=	"Moda Local";	break;
					case "IGM36":	case	316:	$r	=	"Glamour I";	break;
					case "IGM37":	case	317:	$r	=	"Crítica de la Moda";	break;
					case "IGM38":	case	318:	$r	=	"Crítica del Glamour";	break;
					case "IGM49":	case	319:	$r	=	"Moda Nacional y Patriótica";	break;
					case "IGM410":	case	3110:	$r	=	"Glamour II";	break;
					case "IGM411":	case	3111:	$r	=	"Crítica Profesional";	break;
					case "IGM512":	case	3112:	$r	=	"Auditoría de la Moda";	break;
					case "IGM513":	case	3113:	$r	=	"Auditoría del Glamour";	break;
					case "IGM514":	case	3114:	$r	=	"Procesos Vestuarios";	break;
					case "IGM515":	case	3115:	$r	=	"Pasarela I";	break;
					case "IGM616":	case	3116:	$r	=	"Proyecto de Glamour";	break;
					case "IGM617":	case	3117:	$r	=	"Proyecto de Moda";	break;
					case "IGM618":	case	3118:	$r	=	"Marco Mísero de la Moda";	break;
					case "IGM619":	case	3119:	$r	=	"Pasarela II";	break;
					case "IGM720":	case	3120:	$r	=	"Moda y Glamour";	break;
					case "IGM721":	case	3121:	$r	=	"Seguridad Textil";	break;
					case "IGM722":	case	3122:	$r	=	"Desfiles del hambre";	break;
					case "IGM723":	case	3123:	$r	=	"Moda Internacional";	break;
				//Ingeniería Empirica
					case "IEM11":	case	331:	$r	=	"Supervivencia I";	break;
					case "IEM12":	case	332:	$r	=	"Teoría del Todo";	break;
					case "IEM13":	case	333:	$r	=	"Adaptativa Laboral";	break;
					case "IEM24":	case	334:	$r	=	"Supervivencia II";	break;
					case "IEM25":	case	335:	$r	=	"Adaptativa Económica";	break;
					case "IEM26":	case	336:	$r	=	"Adaptativa Entusiasta";	break;
					case "IEM27":	case	337:	$r	=	"Adaptativa General";	break;
					case "IEM38":	case	338:	$r	=	"Auto-teorización";	break;
					case "IEM39":	case	339:	$r	=	"Profundidad Superficial";	break;
					case "IEM410":	case	3310:	$r	=	"Supervivencia III";	break;
					case "IEM411":	case	3311:	$r	=	"Cultura General Local";	break;
					case "IEM412":	case	3312:	$r	=	"Cultura General Externa Básica";	break;
					case "IEM413":	case	3313:	$r	=	"Ecuaciones Egocéntricas";	break;
					case "IEM414":	case	3314:	$r	=	"Básico Superficial de Medicina";	break;
					case "IEM515":	case	3315:	$r	=	"Sistemas Politicos Reales";	break;
					case "IEM516":	case	3316:	$r	=	"Idiomas Básicos";	break;
					case "IEM517":	case	3317:	$r	=	"Callejerismo";	break;
					case "IEM518":	case	3318:	$r	=	"Totalitario básico I";	break;
					case "IEM619":	case	3319:	$r	=	"Totalitario básico II";	break;
					case "IEM620":	case	3320:	$r	=	"Sistemas Ñeros";	break;
					case "IEM621":	case	3321:	$r	=	"Viabilidad del Empirismo";	break;
					case "IEM622":	case	3322:	$r	=	"Empirismo Estratificado";	break;
					case "IEM623":	case	3323:	$r	=	"Proyecto Entusiasta";	break;
					case "IEM724":	case	3324:	$r	=	"Proyecto Empírico";	break;
					case "IEM725":	case	3325:	$r	=	"Miseria Empírica";	break;
					case "IEM726":	case	3326:	$r	=	"Teoría Investigativa";	break;
				//Ingeniería Juvenil
					case "IJV11":	case	341:	$r	=	"Objetividad";	break;
					case "IJV12":	case	342:	$r	=	"Pubertad I";	break;
					case "IJV13":	case	343:	$r	=	"Ñerismo Ecológico";	break;
					case "IJV14":	case	344:	$r	=	"Vandalismo";	break;
					case "IJV15":	case	345:	$r	=	"Intelecto Estratificado";	break;
					case "IJV26":	case	346:	$r	=	"Dependencia Parental";	break;
					case "IJV27":	case	347:	$r	=	"Lenguaje con Glamour";	break;
					case "IJV28":	case	348:	$r	=	"Procesos Preñáticos";	break;
					case "IJV39":	case	349:	$r	=	"Crítica Constructiva";	break;
					case "IJV310":	case	3410:	$r	=	"Procesos Académicos";	break;
					case "IJV311":	case	3411:	$r	=	"Lenguaje Soez & Vulgar";	break;
					case "IJV312":	case	3412:	$r	=	"Bullying Sano";	break;
					case "IJV413":	case	3413:	$r	=	"Apariencias Engañosas";	break;
					case "IJV414":	case	3414:	$r	=	"Juventud Académica";	break;
					case "IJV515":	case	3415:	$r	=	"Base Futurista Juvenil";	break;
					case "IJV516":	case	3416:	$r	=	"Juventud Económica";	break;
					case "IJV617":	case	3417:	$r	=	"Proyecto Juvenil I";	break;
					case "IJV618":	case	3418:	$r	=	"Fanatismo";	break;
					case "IJV719":	case	3419:	$r	=	"Proyecto Juvenil II";	break;
					case "IJV720":	case	3420:	$r	=	"Personalidad II";	break;
					case "IJV721":	case	3421:	$r	=	"Bullying Nefasto";	break;
					case "IJV722":	case	3422:	$r	=	"Antireproductividad";	break;
					case "IJV723":	case	3423:	$r	=	"Teoría Milenialista";	break;
					case "IJV724":	case	3424:	$r	=	"Juventud Mundial";	break;
				//Ingeniería Corrupta
					case "ICR11":	case	361:	$r	=	"Corrupción I";	break;
					case "ICR12":	case	362:	$r	=	"Legalidades y Abusos";	break;
					case "ICR23":	case	363:	$r	=	"Contrataciones";	break;
					case "ICR24":	case	364:	$r	=	"Economía Nacional";	break;
					case "ICR25":	case	365:	$r	=	"Senado y Congreso";	break;
					case "ICR26":	case	366:	$r	=	"Cámara";	break;
					case "ICR27":	case	367:	$r	=	"Política I";	break;
					case "ICR28":	case	368:	$r	=	"Corrupción II";	break;
					case "ICR39":	case	369:	$r	=	"Política II";	break;
					case "ICR310":	case	3610:	$r	=	"Corrupción III";	break;
					case "ICR311":	case	3611:	$r	=	"Ciudadanías y Localidades";	break;
					case "ICR412":	case	3612:	$r	=	"Alcaldías";	break;
					case "ICR413":	case	3613:	$r	=	"Ministerio";	break;
					case "ICR414":	case	3614:	$r	=	"Investigativa Clasificada";	break;
					case "ICR415":	case	3615:	$r	=	"Corruptología ";	break;
					case "ICR416":	case	3616:	$r	=	"Corruptocracia";	break;
					case "ICR517":	case	3617:	$r	=	"Corrupción IV";	break;
					case "ICR518":	case	3618:	$r	=	"Falsificación";	break;
					case "ICR519":	case	3619:	$r	=	"Mecánica de Contratos";	break;
					case "ICR520":	case	3620:	$r	=	"Gobernaciones";	break;
					case "ICR621":	case	3621:	$r	=	"Presidencia";	break;
					case "ICR622":	case	3622:	$r	=	"Auditorias";	break;
					case "ICR623":	case	3623:	$r	=	"Autodeterminación";	break;
					case "ICR624":	case	3624:	$r	=	"Corruptometría";	break;
					case "ICR725":	case	3625:	$r	=	"Proyecto de grado Corruptivo";	break;
					case "ICR726":	case	3626:	$r	=	"Expresidencia";	break;
					case "ICR727":	case	3627:	$r	=	"Mecánica de Protección Corruptiva";	break;
				//Ingeniería Opresiva Patriarcal
					case "IOP11":	case	371:	$r	=	"Patriarcado I";	break;
					case "IOP12":	case	372:	$r	=	"Opresión I";	break;
					case "IOP13":	case	373:	$r	=	"Lógica Discusional";	break;
					case "IOP24":	case	374:	$r	=	"Opresión II";	break;
					case "IOP25":	case	375:	$r	=	"Laboratorio Opresor";	break;
					case "IOP26":	case	376:	$r	=	"Artimética Discusional";	break;
					case "IOP27":	case	377:	$r	=	"Jerarquía Patriarcal";	break;
					case "IOP38":	case	378:	$r	=	"Opresión III";	break;
					case "IOP39":	case	379:	$r	=	"Patriarcado II";	break;
					case "IOP310":	case	3710:	$r	=	"Roles Patriarcales";	break;
					case "IOP311":	case	3711:	$r	=	"Tentativa Feminista";	break;
					case "IOP312":	case	3712:	$r	=	"Represiones";	break;
					case "IOP313":	case	3713:	$r	=	"Protestas Lógicas";	break;
					case "IOP314":	case	3714:	$r	=	"Proclamaciones por Género";	break;
					case "IOP415":	case	3715:	$r	=	"Imposiciones";	break;
					case "IOP416":	case	3716:	$r	=	"Patriarcado III";	break;
					case "IOP417":	case	3717:	$r	=	"Tradicionalización del género";	break;
					case "IOP418":	case	3718:	$r	=	"Comunicación Patriarcal Dominante";	break;
					case "IOP419":	case	3719:	$r	=	"Dominantes y Dominados";	break;
					case "IOP520":	case	3720:	$r	=	"Discursos Patriarcales";	break;
					case "IOP521":	case	3721:	$r	=	"Descendencia Familiar Patriarcal";	break;
					case "IOP522":	case	3722:	$r	=	"Patriarcado IV";	break;
					case "IOP623":	case	3723:	$r	=	"Proyección Opresiva";	break;
					case "IOP624":	case	3724:	$r	=	"Proyección Patriarcal";	break;
					case "IOP625":	case	3725:	$r	=	"Proyección General";	break;
					case "IOP626":	case	3726:	$r	=	"Revoluciones del Género";	break;
					case "IOP727":	case	3727:	$r	=	"Presidencia Patriarcal";	break;
					case "IOP728":	case	3728:	$r	=	"Patriarcamétrica";	break;
					case "IOP729":	case	3729:	$r	=	"Feminazismo";	break;
					case "IOP730":	case	3730:	$r	=	"Vicepresidencia Fémina";	break;
			//Facultad Superior
				//Especializacion Sexualidad Avanzada
					case "ESX11":	case	251:	$r	=	"Genética Básica";	break;
					case "ESX12":	case	252:	$r	=	"Reproducción";	break;
					case "ESX13":	case	253:	$r	=	"Planificación";	break;
					case "ESX14":	case	254:	$r	=	"Salud Sexual Avanzada I";	break;
					case "ESX15":	case	255:	$r	=	"Ingeniería del Placer";	break;
					case "ESX26":	case	256:	$r	=	"Salud Sexual Avanzada II";	break;
					case "ESX27":	case	257:	$r	=	"Cochinadas";	break;
					case "ESX28":	case	258:	$r	=	"Kamasutra I";	break;
					case "ESX29":	case	259:	$r	=	"Sexo Explícito";	break;
					case "ESX210":	case	2510:	$r	=	"Procesos Orgásmicos Reales";	break;
					case "ESX311":	case	2511:	$r	=	"Entornos Sexuales";	break;
					case "ESX312":	case	2512:	$r	=	"Kamasutra II";	break;
					case "ESX313":	case	2513:	$r	=	"Fisiología Sexual";	break;
					case "ESX314":	case	2514:	$r	=	"Lógica de Procesos";	break;
					case "ESX315":	case	2515:	$r	=	"Cátedra Anti ETS/ITS/Embarazos";	break;
					case "ESX316":	case	2516:	$r	=	"Control Libidoso";	break;
					case "ESX417":	case	2517:	$r	=	"Kamasutra III";	break;
					case "ESX418":	case	2518:	$r	=	"Práctica Dual";	break;
					case "ESX419":	case	2519:	$r	=	"Práctica Grupal";	break;
					case "ESX420":	case	2520:	$r	=	"Cátedra Esperanza Gómez";	break;
					case "ESX421":	case	2521:	$r	=	"Sus tentaciones y sustentación";	break;
				//Especializacion Finanzas personales miseras triunfantes
					case "EFP11":	case	261:	$r	=	"Miseria Profunda I";	break;
					case "EFP12":	case	262:	$r	=	"Repaso Ahorrativo";	break;
					case "EFP13":	case	263:	$r	=	"Dignidad Económica";	break;
					case "EFP14":	case	264:	$r	=	"Triunfo Mísero";	break;
					case "EFP25":	case	265:	$r	=	"Miseria Profunda II";	break;
					case "EFP26":	case	266:	$r	=	"Gastos Globales";	break;
					case "EFP27":	case	267:	$r	=	"Triunfo Básico";	break;
					case "EFP28":	case	268:	$r	=	"Finanza Solitaria";	break;
					case "EFP29":	case	269:	$r	=	"Finanza del Fracaso";	break;
					case "EFP310":	case	2610:	$r	=	"Impulso Derrochador";	break;
					case "EFP311":	case	2611:	$r	=	"Triunfo Profundo I";	break;
					case "EFP312":	case	2612:	$r	=	"Salud Monetaria";	break;
					case "EFP313":	case	2613:	$r	=	"Control Monetario";	break;
					case "EFP414":	case	2614:	$r	=	"Triunfo Profundo II";	break;
					case "EFP415":	case	2615:	$r	=	"Tentativa de Gasto";	break;
					case "EFP416":	case	2616:	$r	=	"Endeudamiento";	break;
					case "EFP417":	case	2617:	$r	=	"Sustentación";	break;
				//Especializacion Procesos Miseros
					case "EPM11":	case	321:	$r	=	"Esperanza de Vida";	break;
					case "EPM12":	case	322:	$r	=	"Procesamiento Mísero";	break;
					case "EPM13":	case	323:	$r	=	"Prolateriado Avanzado";	break;
					case "EPM14":	case	324:	$r	=	"Miseria Pública y Política";	break;
					case "EPM25":	case	325:	$r	=	"Miseria Privada";	break;
					case "EPM26":	case	326:	$r	=	"Estratificación Social";	break;
					case "EPM27":	case	327:	$r	=	"Mísero-Investigativa ";	break;
					case "EPM38":	case	328:	$r	=	"Miseria Sistemática";	break;
					case "EPM39":	case	329:	$r	=	"Administración Clasificatoria";	break;
					case "EPM310":	case	3210:	$r	=	"Autorizaciónes Míseras";	break;
					case "EPM311":	case	3211:	$r	=	"Miseria Total I";	break;
					case "EPM312":	case	3212:	$r	=	"Economía y Familias";	break;
					case "EPM413":	case	3213:	$r	=	"Miseria Total II";	break;
					case "EPM414":	case	3214:	$r	=	"Miserometría y Miserotemática";	break;
					case "EPM415":	case	3215:	$r	=	"Matemática de Control Mísera";	break;
					case "EPM416":	case	3216:	$r	=	"Sustentación Mísera";	break;
				//Maestria Ensenanza Matematica
					case "MEM11":	case	271:	$r	=	"Matemáticas Pendejas";	break;
					case "MEM12":	case	272:	$r	=	"Lógica Youtuber";	break;
					case "MEM13":	case	273:	$r	=	"Docencia Matemática Básica";	break;
					case "MEM14":	case	274:	$r	=	"Terrorismo Matemático I";	break;
					case "MEM25":	case	275:	$r	=	"Docencia Matemática Avanzada";	break;
					case "MEM26":	case	276:	$r	=	"Terrorismo Matemático II";	break;
					case "MEM27":	case	277:	$r	=	"Triunfo Básico";	break;
					case "MEM38":	case	278:	$r	=	"Números y letras avanzados";	break;
					case "MEM39":	case	279:	$r	=	"Tortura cerebral";	break;
					case "MEM310":	case	2710:	$r	=	"Aplicación Educativa I";	break;
					case "MEM311":	case	2711:	$r	=	"Roles estudiantiles";	break;
					case "MEM312":	case	2712:	$r	=	"Tortura a estudiantes";	break;
					case "MEM413":	case	2713:	$r	=	"Matemática Tributaria";	break;
					case "MEM414":	case	2714:	$r	=	"Público Difícil Cognitivo";	break;
					case "MEM415":	case	2715:	$r	=	"Público Fácil Cognitivo";	break;
					case "MEM416":	case	2716:	$r	=	"Aprovechamiento sabio";	break;
					case "MEM417":	case	2717:	$r	=	"Aplicación Educativa II";	break;
				//Maestria IdiotezAudiovisual
					case "MIA11":	case	281:	$r	=	"Gestion Homosexual (Nivelatorio)";	break;
					case "MIA12":	case	282:	$r	=	"Gestión General";	break;
					case "MIA13":	case	283:	$r	=	"Pendejadas Audibles";	break;
					case "MIA14":	case	284:	$r	=	"Pendejadas Visuales";	break;
					case "MIA15":	case	285:	$r	=	"Inducción Social Masiva";	break;
					case "MIA26":	case	286:	$r	=	"Gestión Popular Gratuita";	break;
					case "MIA27":	case	287:	$r	=	"Gestión Popular";	break;
					case "MIA28":	case	288:	$r	=	"Teatro y Temarios I";	break;
					case "MIA29":	case	289:	$r	=	"Propagación limosnera";	break;
					case "MIA210":	case	2810:	$r	=	"Medios televisivos nacionales";	break;
					case "MIA311":	case	2811:	$r	=	"Gestión de idiotas";	break;
					case "MIA312":	case	2812:	$r	=	"Gestión de plagas/proles juveniles";	break;
					case "MIA313":	case	2813:	$r	=	"Teatro y Temarios II";	break;
					case "MIA314":	case	2814:	$r	=	"Argumentación de contenido";	break;
					case "MIA315":	case	2815:	$r	=	"Profundización en originalidad";	break;
					case "MIA316A":	case	2816:	$r	=	"Dignidad Auditiva";	break;
					case "MIA316B":	case	2817:	$r	=	"Dignidad Visual";	break;
					case "MIA417":	case	2818:	$r	=	"Anti-repetitividad del contenido";	break;
					case "MIA418":	case	2819:	$r	=	"Compilación Audiovisual";	break;
					case "MIA419":	case	2820:	$r	=	"Control del estrellato";	break;
					case "MIA420":	case	2821:	$r	=	"Humildad Nula";	break;
					case "MIA421":	case	2822:	$r	=	"Finanzas Virtuales y Cobros";	break;
					case "MIA422":	case	2823:	$r	=	"Lenguaje Múltiple";	break;
					case "MIA423":	case	2824:	$r	=	"Confesión Homosexual Gana-Seguidores";	break;
			//Facultad Continua
				//Profundizacion en Redes Sociales
					case "CRS01":	case	351:	$r	=	"Datos y Registros";	break;
					case "CRS02":	case	352:	$r	=	"Capacidad Pública";	break;
					case "CRS03":	case	353:	$r	=	"Capacidad Privada";	break;
					case "CRS04":	case	354:	$r	=	"Intelecto Dudoso";	break;
					case "CRS05":	case	355:	$r	=	"Egoísmo Propio";	break;
					case "CRS06":	case	356:	$r	=	"Autoestima por Niveles";	break;
					case "CRS07":	case	357:	$r	=	"Estratos Virtuales";	break;
					case "CRS08":	case	358:	$r	=	"Burla Básica";	break;
					case "CRS09":	case	359:	$r	=	"Idoneidad Publicitaria";	break;
					case "CRS10":	case	3510:	$r	=	"Control de Masas";	break;
					case "CRS11":	case	3511:	$r	=	"Crítica Ortográfica";	break;
					case "CRS12":	case	3512:	$r	=	"Realidades y Falsedad";	break;
					case "CRS1A":	case	3513:	$r	=	"Población Infantil";	break;
					case "CRS1B":	case	3514:	$r	=	"Población Juvenil";	break;
					case "CRS1C":	case	3515:	$r	=	"Población Adulta";	break;
					case "CRS1D":	case	3516:	$r	=	"Población Muerta";	break;
					case "CRS2A":	case	3517:	$r	=	"Baneo";	break;
					case "CRS2B":	case	3518:	$r	=	"Aceptación Grupal Pública";	break;
					case "CRS2C":	case	3519:	$r	=	"Aceptación Grupal Privada";	break;
					case "CRS3A":	case	3520:	$r	=	"Teoría del Meme";	break;
					case "CRS3B":	case	3521:	$r	=	"Introducción al Dibujo";	break;
					case "CRS4A":	case	3522:	$r	=	"Calidad Textual";	break;
					case "CRS4B":	case	3523:	$r	=	"Calidad Gráfica";	break;
					case "CRS4C":	case	3524:	$r	=	"Calidad Audiovisual";	break;
					case "CRS5A":	case	3525:	$r	=	"Sexualidad Implícita Leve";	break;
					case "CRS5B":	case	3526:	$r	=	"Sexualidad a Flote";	break;
			
			default:
				$r = "N/A N/D";
			break;
		}
		return $r;
	}

	//Entrega el nombre corto visualizable de una asignatura
	public function AsignaturaNombreCorto($x){
		$r = substr(Asignaturas::AsignaturaNombre($x),0,12)."...";
		return $r ;
	}



}
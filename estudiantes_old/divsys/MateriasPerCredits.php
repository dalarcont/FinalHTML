<?php
/* Universidad Falsa - División Superior de Sistemas Informáticos */
#División Superior Registro y Control
#Control de créditos académicos

switch ($MATCODE) {

	/* PREGRADO */

		/* ASIGNATURAS 1 CRÉDITO ACADÉMICO */
			case '108': case 'MGB8': 
			case '109': case 'MGB9': 
			case '1011': case 'MGB11': 
			case '116': case 'BOR16': 
			case '119': case 'BOR29':
			case '1110': case 'BOR210': 
			case '141': case 'BSI11': 
			case '145': case 'BSI15': 
			case '1410': case 'BSI210': 
			case '151': case 'BGB11': 
			case '1616': case 'TDH416': 
			case '1617': case 'TDH417': 
			case '1621': case 'TDH521': 
			case '1711': case 'TFP411': 
			case '1712': case 'TFP412': 
			case '1813': case 'TIP213': 
			case '1823': case 'TIP423': 
			case '1825': case 'TIP425': 
			case '1826': case 'TIP426': 
			case '1827': case 'TIP427': 
			case '1915': case 'THE515': 
			case '202': case 'THO12': 
			case '2023': case 'THO423': 
			case '2026': case 'THO526': 
			case '212': case 'IYO12': 
			case '213': case 'IYO13': 
			case '2120': case 'IYO520': 
			case '2136': case 'IYO736': 
			case '2137': case 'IYO737': 
			case '2222': case 'IFZ422': 
			case '2223': case 'IFZ423': 
			case '2235': case 'IFZ635': 
			case '231': case 'ISX11': 
			case '2329': case 'ISX529': 
			case '2337': case 'ISX637': 
			case '2414': case 'IFR414': 
			case '2416': case 'IFR416': 
			case '2926': case 'IPR526': 
			case '2932': case 'IPR632': 
			case '2936': case 'IPR736': 
			case '304': case 'IDP24': 
			case '3019': case 'IDP619': 
			case '347': case 'IJV27': 
			case '3415': case 'IJV515': 
			case '3416': case 'IJV516': 
			case '319': case 'IGM49': 
			case '3122': case 'IGM722': 
			$Creditos=1;
			break;

		/* ASIGNATURAS 2 CRÉDITOS ACADÉMICOS */
			case '111': case 'BOR11': 
			case '112': case 'BOR12': 
			case '118': case 'BOR28': 
			case '121': case 'BDS11': 
			case '124': case 'BDS14': 
			case '127': case 'BDS27': 
			case '129': case 'BDS29': 
			case '1210': case 'BDS210':
			case '148': case 'BSI28': 
			case '154': case 'BGB14': 
			case '157': case 'BGB27': 
			case '164': case 'TDH24': 
			case '1618': case 'TDH418': 
			case '1622': case 'TDH522': 
			case '174': case 'TFP24': 
			case '175': case 'TFP35': 
			case '177': case 'TFP37': 
			case '179': case 'TFP49': 
			case '1713': case 'TFP513': 
			case '1715': case 'TFP515': 
			case '1716': case 'TFP516': 
			case '181': case 'TIP11': 
			case '185': case 'TIP15': 
			case '1814': case 'TIP314': 
			case '1818': case 'TIP318': 
			case '195': case 'THE25': 
			case '199': case 'THE39': 
			case '1911': case 'THE311': 
			case '1913': case 'THE513':
			case '205': case 'THO15': 
			case '2010': case 'THO310': 
			case '2011': case 'THO311': 
			case '2013': case 'THO313': 
			case '2014': case 'THO314': 
			case '2024': case 'THO524': 
			case '2028': case 'THO528': 
			case '2029': case 'THO529': 
			case '216': case 'IYO26': 
			case '217': case 'IYO27':  
			case '2115': case 'IYO315': 
			case '2123': case 'IYO523': 
			case '2128': case 'IYO628': 
			case '2135': case 'IYO735': 
			case '224': case 'IFZ14': 
			case '225': case 'IFZ15': 
			case '2214': case 'IFZ314': 
			case '2215': case 'IFZ315': 
			case '2216': case 'IFZ316': 
			case '2218': case 'IFZ318': 
			case '2226': case 'IFZ526': 
			case '2227': case 'IFZ527': 
			case '2234': case 'IFZ634': 
			case '2236': case 'IFZ736': 
			case '2237': case 'IFZ737': 
			case '234': case 'ISX14': 
			case '2312': case 'ISX312': 
			case '2314': case 'ISX314': 
			case '2322': case 'ISX422': 
			case '2326': case 'ISX526': 
			case '2335': case 'ISX635': 
			case '2336': case 'ISX636': 
			case '248': case 'IFR38': 
			case '2411': case 'IFR311': 
			case '2412': case 'IFR412': 
			case '2413': case 'IFR413': 
			case '2418': case 'IFR518': 
			case '2419': case 'IFR519': 
			case '2426': case 'IFR626': 
			case '2914': case 'IPR314': 
			case '2916': case 'IPR316': 
			case '2920': case 'IPR420': 
			case '2922': case 'IPR522': 
			case '2930': case 'IPR630': 
			case '2931': case 'IPR631': 
			case '2935': case 'IPR735': 
			case '303': case 'IDP13': 
			case '309': case 'IDP49': 
			case '3017': case 'IDP617': 
			case '3024': case 'IDP724': 
			case '343': case 'IJV13': 
			case '344': case 'IJV14': 
			case '345': case 'IJV15': 
			case '346': case 'IJV26': 
			case '349': case 'IJV39': 
			case '3414': case 'IJV414': 
			case '3419': case 'IJV719': 
			case '314': case 'IGM24': 
			case '315': case 'IGM35': 
			case '317': case 'IGM37': 
			case '318': case 'IGM38': 
			case '3121': case 'IGM721': 
			$Creditos=2;
			break; 

		/* ASIGNATURAS 3 CRÉDITOS ACADÉMICOS */
			case '105': case 'MGB5': 
			case '107': case 'MGB7': 
			case '1010': case 'MGB10': 
			case '115': case 'BOR15': 
			case '117': case 'BOR27': 
			case '125': case 'BDS15': 
			case '126': case 'BDS16': 
			case '128': case 'BDS28': 
			case '134': case 'BMI24': 
			case '135': case 'BMI25': 
			case '136': case 'BMI26': 
			case '137': case 'BMI27': 
			case '144': case 'BSI14': 
			case '147': case 'BSI27': 
			case '149': case 'BSI29': 
			case '158': case 'BGB28': 
			case '163': case 'TDH23': 
			case '165': case 'TDH25': 
			case '166': case 'TDH26': 
			case '169': case 'TDH39': 
			case '1612': case 'TDH312': 
			case '1613': case 'TDH313': 
			case '1614': case 'TDH414': 
			case '1615': case 'TDH415': 
			case '1620': case 'TDH520': 
			case '1623': case 'TDH523': 
			case '172': case 'TFP22': 
			case '176': case 'TFP36': 
			case '178': case 'TFP38': 
			case '1710': case 'TFP410': 
			case '1714': case 'TFP514': 
			case '1717': case 'TFP517': 
			case '186': case 'TIP16': 
			case '187': case 'TIP27': 
			case '1811': case 'TIP211': 
			case '1812': case 'TIP212': 
			case '1815': case 'TIP315': 
			case '1816': case 'TIP316': 
			case '1817': case 'TIP317': 
			case '1819': case 'TIP319': 
			case '1820': case 'TIP320': 
			case '1821': case 'TIP421': 
			case '1829': case 'TIP529': 
			case '191': case 'THE11': 
			case '192': case 'THE12': 
			case '194': case 'THE14': 
			case '196': case 'THE26': 
			case '1910': case 'THE310': 
			case '1912': case 'THE412': 
			case '1914': case 'THE514': 
			case '201': case 'THO11': 
			case '204': case 'THO14': 
			case '206': case 'THO26': 
			case '207': case 'THO27': 
			case '208': case 'THO28': 
			case '209': case 'THO29': 
			case '2012': case 'THO312': 
			case '2017': case 'THO317': 
			case '2019': case 'THO419': 
			case '2022': case 'THO422': 
			case '2027': case 'THO527': 
			case '211': case 'IYO11': 
			case '218': case 'IYO28': 
			case '219': case 'IYO29': 
			case '2112': case 'IYO312': 
			case '2113': case 'IYO313': 
			case '2122': case 'IYO522': 
			case '2126': case 'IYO626': 
			case '2127': case 'IYO627': 
			case '2134': case 'IYO734': 
			case '2138': case 'IYO738': 
			case '227': case 'IFZ27': 
			case '2211': case 'IFZ211': 
			case '2217': case 'IFZ317': 
			case '2219': case 'IFZ319': 
			case '2225': case 'IFZ425': 
			case '2233': case 'IFZ633': 
			case '238': case 'ISX28': 
			case '2315': case 'ISX315': 
			case '2317': case 'ISX417': 
			case '2320': case 'ISX420': 
			case '2321': case 'ISX421': 
			case '2327': case 'ISX527': 
			case '2328': case 'ISX528': 
			case '2334': case 'ISX634': 
			case '2341': case 'ISX741': 
			case '2342': case 'ISX742': 
			case '2344': case 'ISX744': 
			case '2410': case 'IFR310': 
			case '2417': case 'IFR517': 
			case '2421': case 'IFR521': 
			case '2424': case 'IFR624': 
			case '2425': case 'IFR625': 
			case '2428': case 'IFR728': 
			case '297': case 'IPR27': 
			case '2913': case 'IPR313': 
			case '2921': case 'IPR421': 
			case '2924': case 'IPR524': 
			case '2925': case 'IPR525': 
			case '2938': case 'IPR738': 
			case '2939': case 'IPR739': 
			case '2940': case 'IPR740': 
			case '2942': case 'IPR742': 
			case '301': case 'IDP11': 
			case '302': case 'IDP12': 
			case '308': case 'IDP38': 
			case '3023': case 'IDP723': 
			case '341': case 'IJV11': 
			case '3410': case 'IJV310': 
			case '3411': case 'IJV311': 
			case '3413': case 'IJV413': 
			case '3418': case 'IJV618': 
			case '3423': case 'IJV723': 
			case '311': case 'IGM11': 
			case '312': case 'IGM12': 
			case '313': case 'IGM13': 
			case '3114': case 'IGM514': 
			case '3118': case 'IGM618': 
			case '3120': case 'IGM720': 
			$Creditos=3;
			break;

		/* ASIGNATURAS 4 CRÉDITOS ACADÉMICOS */
			case '104': case 'MGB4': 
			case '106': case 'MGB6': 
			case '113': case 'BOR13': 
			case '114': case 'BOR14': 
			case '122': case 'BDS12': 
			case '123': case 'BDS13': 
			case '131': case 'BMI11': 
			case '132': case 'BMI12': 
			case '133': case 'BMI13': 
			case '142': case 'BSI12': 
			case '143': case 'BSI13': 
			case '146': case 'BSI16': 
			case '152': case 'BGB12': 
			case '153': case 'BGB13': 
			case '155': case 'BGB15': 
			case '156': case 'BGB26': 
			case '167': case 'TDH27': 
			case '168': case 'TDH28': 
			case '1610': case 'TDH310': 
			case '173': case 'TFP23': 
			case '1718': case 'TFP518': 
			case '188': case 'TIP28': 
			case '189': case 'TIP29': 
			case '1810': case 'TIP210': 
			case '1828': case 'TIP528': 
			case '1830': case 'TIP530': 
			case '193': case 'THE13': 
			case '197': case 'THE27': 
			case '198': case 'THE38': 
			case '1917': case 'THE517': 
			case '2015': case 'THO315': 
			case '2016': case 'THO316': 
			case '2020': case 'THO420': 
			case '2021': case 'THO421': 
			case '2025': case 'THO525': 
			case '2121': case 'IYO521': 
			case '2129': case 'IYO629': 
			case '2130': case 'IYO630': 
			case '2131': case 'IYO631': 
			case '2132': case 'IYO732': 
			case '2133': case 'IYO733': 
			case '2213': case 'IFZ313': 
			case '2224': case 'IFZ424': 
			case '2310': case 'ISX310': 
			case '2311': case 'ISX311': 
			case '2323': case 'ISX423': 
			case '2324': case 'ISX524': 
			case '2338': case 'ISX738': 
			case '2340': case 'ISX740': 
			case '247': case 'IFR37': 
			case '2420': case 'IFR520': 
			case '2423': case 'IFR523': 
			case '2429': case 'IFR729': 
			case '2430': case 'IFR730': 
			case '2917': case 'IPR317': 
			case '2918': case 'IPR318': 
			case '2919': case 'IPR419': 
			case '2923': case 'IPR523': 
			case '2928': case 'IPR628': 
			case '2937': case 'IPR737': 
			case '307': case 'IDP37': 
			case '3016': case 'IDP516': 
			case '3021': case 'IDP721': 
			case '3022': case 'IDP722': 
			case '3424': case 'IJV724': 
			case '3111': case 'IGM411': 
			$Creditos=4;
			break;

		/* ASIGNATURAS 5 CRÉDITOS ACADÉMICOS */
			case '103': case 'MGB3': 
			case '1013': case 'MGB0I': 
			case '1014': case 'MGB0T': 
			case '1012': case 'MGB12': 
			case '161': case 'TDH11': 
			case '162': case 'TDH12': 
			case '1611': case 'TDH311': 
			case '1619': case 'TDH419': 
			case '171': case 'TFP11': 
			case '1719': case 'TFP519': 
			case '182': case 'TIP12': 
			case '183': case 'TIP13': 
			case '184': case 'TIP14': 
			case '1822': case 'TIP422': 
			case '1824': case 'TIP424': 
			case '1916': case 'THE516': 
			case '203': case 'THO13': 
			case '2018': case 'THO418': 
			case '2114': case 'IYO314':
			case '2116': case 'IYO416': 
			case '2117': case 'IYO417': 
			case '2118': case 'IYO418':
			case '2124': case 'IYO524':  
			case '2125': case 'IYO525': 
			case '228': case 'IFZ28': 
			case '2210': case 'IFZ210': 
			case '2212': case 'IFZ312': 
			case '2228': case 'IFZ528': 
			case '2229': case 'IFZ529': 
			case '2230': case 'IFZ530': 
			case '2231': case 'IFZ531': 
			case '2238': case 'IFZ738': 
			case '2239': case 'IFZ739': 
			case '236': case 'ISX26': 
			case '237': case 'ISX27': 
			case '2313': case 'ISX313': 
			case '2316': case 'ISX416': 
			case '2330': case 'ISX630': 
			case '2331': case 'ISX631': 
			case '2332': case 'ISX632': 
			case '2339': case 'ISX739': 
			case '2343': case 'ISX743': 
			case '242': case 'IFR22': 
			case '245': case 'IFR35': 
			case '246': case 'IFR36': 
			case '2422': case 'IFR522': 
			case '2427': case 'IFR627': 
			case '2431': case 'IFR731': 
			case '2432': case 'IFR732': 
			case '292': case 'IPR12': 
			case '294': case 'IPR24': 
			case '295': case 'IPR25': 
			case '296': case 'IPR26': 
			case '2911': case 'IPR311': 
			case '2912': case 'IPR312': 
			case '2941': case 'IPR741': 
			case '306': case 'IDP36': 
			case '3011': case 'IDP411': 
			case '3014': case 'IDP514': 
			case '3015': case 'IDP515': 
			case '3020': case 'IDP620': 
			case '348': case 'IJV28': 
			case '3412': case 'IJV312': 
			case '3420': case 'IJV720': 
			case '3422': case 'IJV722': 
			case '3110': case 'IGM410': 
			case '3112': case 'IGM512': 
			case '3113': case 'IGM513': 
			case '3117': case 'IGM617': 
			case '3123': case 'IGM723': 
			$Creditos=5;
			break;

		/* ASIGNATURAS 6 CRÉDITOS ACADÉMICOS */
			case '102': case 'MGB2': 
			case '214': case 'IYO14': 
			case '215': case 'IYO15': 
			case '2110': case 'IYO210': 
			case '2111': case 'IYO311': 
			case '2119': case 'IYO419': 
			case '221': case 'IFZ11': 
			case '222': case 'IFZ12': 
			case '223': case 'IFZ13': 
			case '226': case 'IFZ16': 
			case '229': case 'IFZ29': 
			case '2220': case 'IFZ420': 
			case '2221': case 'IFZ421': 
			case '2232': case 'IFZ532': 
			case '2240': case 'IFZ740': 
			case '2241': case 'IFZ741': 
			case '232': case 'ISX12': 
			case '233': case 'ISX13': 
			case '235': case 'ISX15': 
			case '239': case 'ISX29': 
			case '2318': case 'ISX418': 
			case '2319': case 'ISX419': 
			case '2325': case 'ISX525': 
			case '2333': case 'ISX633': 
			case '2345': case 'ISX745': 
			case '241': case 'IFR11': 
			case '243': case 'IFR23': 
			case '244': case 'IFR24': 
			case '249': case 'IFR39': 
			case '2415': case 'IFR415': 
			case '291': case 'IPR11': 
			case '293': case 'IPR13': 
			case '298': case 'IPR28': 
			case '299': case 'IPR29': 
			case '2910': case 'IPR210': 
			case '2915': case 'IPR315': 
			case '2927': case 'IPR527': 
			case '2929': case 'IPR629': 
			case '2933': case 'IPR633': 
			case '2943': case 'IPR743': 
			case '305': case 'IDP25': 
			case '3010': case 'IDP410': 
			case '3012': case 'IDP412': 
			case '3013': case 'IDP413': 
			case '342': case 'IJV12': 
			case '3421': case 'IJV721': 
			case '316': case 'IGM36': 
			case '3115': case 'IGM515': 
			case '3116': case 'IGM616': 
			case '3119': case 'IGM619': 
			$Creditos=6;
			break;

		/* ASIGNATURAS 8 CRÉDITOS ACADÉMICOS */
			case '101': case 'MGB1': 
			case '2934': case 'IPR634': 
			case '3018': case 'IDP618': 
			case '3417': case 'IJV617':
			$Creditos=8;
			break;

		/* ELECTIVAS - 6 CRÉDITOS ACADÉMICOS */
			case '2346': case 'ISX-E01': 
			case '2347': case 'ISX-E02': 
			case '2348': case 'ISX-E03': 
			case '2349': case 'ISX-E04': 
			case '2350': case 'ISX-E05': 
			case '2351': case 'ISX-E06': 
			case '2352': case 'ISX-E07': 
			case '2353': case 'ISX-E08': 
			case '2354': case 'ISX-E09': 
			case '2355': case 'ISX-E10': 
			case '2356': case 'ISX-E11': 
			/**************************/
			case '2944': case 'IPR-E01': 
			case '2945': case 'IPR-E02': 
			case '2946': case 'IPR-E03': 
			case '2947': case 'IPR-E04': 
			case '2948': case 'IPR-E05': 
			case '2949': case 'IPR-E06': 
			case '2950': case 'IPR-E07': 
			case '2951': case 'IPR-E08': 
			case '2952': case 'IPR-E09':  
			$Creditos=6;
			break;

	/* POSTGRADO */

		/* ASIGNATURAS 4 CRÉDITO ACADÉMICO */
			case '251': case 'ESX11': 
			case '252': case 'ESX12': 
			case '253': case 'ESX13': 
			case '256': case 'ESX26': 
			case '257': case 'ESX27': 
			case '259': case 'ESX29': 
			case '2510': case 'ESX210': 
			case '2511': case 'ESX311': 
			case '2512': case 'ESX312': 
			case '2513': case 'ESX313': 
			case '2514': case 'ESX314': 
			case '2516': case 'ESX316': 
			case '2517': case 'ESX417': 
			case '2521': case 'ESX421': 
			case '262': case 'EFP12': 
			case '263': case 'EFP13': 
			case '264': case 'EFP14': 
			case '265': case 'EFP25': 
			case '266': case 'EFP26': 
			case '267': case 'EFP27': 
			case '268': case 'EFP28': 
			case '269': case 'EFP29': 
			case '2610': case 'EFP310': 
			case '2612': case 'EFP312': 
			case '2613': case 'EFP313': 
			case '2614': case 'EFP414': 
			case '2615': case 'EFP415': 
			case '271': case 'MEM11': 
			case '272': case 'MEM12': 
			case '273': case 'MEM13': 
			case '276': case 'MEM26': 
			case '277': case 'MEM27': 
			case '278': case 'MEM38': 
			case '279': case 'MEM39': 
			case '2711': case 'MEM311': 
			case '2713': case 'MEM413': 
			case '2715': case 'MEM415': 
			case '281': case 'MIA11': 
			case '282': case 'MIA12': 
			case '283': case 'MIA13': 
			case '284': case 'MIA14': 
			case '285': case 'MIA15': 
			case '286': case 'MIA26': 
			case '287': case 'MIA27': 
			case '288': case 'MIA28': 
			case '289': case 'MIA29': 
			case '2810': case 'MIA210': 
			case '2813': case 'MIA313': 
			case '2814': case 'MIA314': 
			case '2815': case 'MIA315': 
			case '2816': case 'MIA316A': 
			case '2817': case 'MIA316B': 
			case '2819': case 'MIA418': 
			case '2820': case 'MIA419': 
			case '2822': case 'MIA421': 
			$Creditos=4;
			break;

		/* ASIGNATURAS 6 CRÉDITOS ACADÉMICOS */
			case '254': case 'ESX14': 
			case '255': case 'ESX15': 
			case '258': case 'ESX28': 
			case '2515': case 'ESX315': 
			case '2518': case 'ESX418': 
			case '2519': case 'ESX419': 
			case '261': case 'EFP11': 
			case '2611': case 'EFP311': 
			case '2616': case 'EFP416': 
			case '2617': case 'EFP417': 
			case '274': case 'MEM14': 
			case '275': case 'MEM25': 
			case '2710': case 'MEM310': 
			case '2712': case 'MEM312': 
			case '2714': case 'MEM414': 
			case '2811': case 'MIA311': 
			case '2812': case 'MIA312': 
			case '2818': case 'MIA417': 
			case '2821': case 'MIA420': 
			case '2823': case 'MIA422': 
			$Creditos=6;
			break;

		/* ASIGNATURAS 8 CRÉDITOS ACADÉMICOS */
			case '2520': case 'ESX420': 
			case '2716': case 'MEM416': 
			case '2717': case 'MEM417': 
			case '2824': case 'MIA423': 
			$Creditos=8;
			break;

	/* FACULTAD CONTINUA */
	//TODAS SON DE 4 CRÉDITOS ACADÉMICOS
		case '351': case 'CRS01': 
		case '352': case 'CRS02': 
		case '353': case 'CRS03': 
		case '354': case 'CRS04': 
		case '355': case 'CRS05': 
		case '356': case 'CRS06': 
		case '357': case 'CRS07': 
		case '358': case 'CRS08': 
		case '359': case 'CRS09': 
		case '3510': case 'CRS10': 
		case '3511': case 'CRS11': 
		case '3512': case 'CRS12': 
		case '3513': case 'CRS1A': 
		case '3514': case 'CRS1B': 
		case '3515': case 'CRS1C': 
		case '3516': case 'CRS1D': 
		case '3517': case 'CRS2A': 
		case '3518': case 'CRS2B': 
		case '3519': case 'CRS2C': 
		case '3520': case 'CRS3A': 
		case '3521': case 'CRS3B': 
		case '3522': case 'CRS4A': 
		case '3523': case 'CRS4B': 
		case '3524': case 'CRS4C': 
		case '3525': case 'CRS5A': 
		case '3526': case 'CRS5B':
		$Creditos=4;
		break; 

	default:
	$Creditos=1;
	break;
}
?>
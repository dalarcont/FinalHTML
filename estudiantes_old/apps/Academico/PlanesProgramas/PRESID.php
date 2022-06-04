<?php
/*Universidad Falsa - Programa Ingeniería Presidencial Plan de estudios 1 Resolución 114*/
$Asignaturas = array(291,292,293,125,126,118,101,106,108,109,294,295,296,297,298,299,2910,134,1410,102,2911,2912,2913,2914,2915,2916,2917,2918,103,107,2919,2920,2921,104,164,1613,1620,1621,1622,1623,2922,2923,2924,2925,2926,2927,105,1719,1814,1820,2928,2929,2930,2931,2932,2933,2934,2135,2221,1010,2935,2936,2937,2938,2939,2940,2941,2942,2431,2229,2944,2945,2946,2947,2948,2949,2950,2951,2952);

//$Asignaturas = array(101,102,103,104,105);
//Indicar si el programa es apto para optativas
$Optativa=TRUE;
//Llamar la parametrización de asignaturas
require 'CargarAsignatura.php';

//Función de reducción para nombres de asignaturas largos
function ReduceNombre($cad,$cadN){
  //Reducir una cadena a mostrar solo sus primeros cadN dígitos
  $strToShort=str_split($cad,$cadN);
  $strToOut=$strToShort[0]."...";
  return $strToOut;
}
echo '
<!-- Universidad Falsa - Programa Ingeniería Presidencial Plan de estudios 1 Resolución 114-->
<center><?xml version="1.0" encoding="UTF-8" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:ev="http://www.w3.org/2001/xml-events"
		width="16.7289in" height="10.4975in" viewBox="0 0 1204.48 755.823" xml:space="preserve" color-interpolation-filters="sRGB"
		class="st6">
	<style type="text/css">
	<![CDATA[
		.st1 {fill:#ffff00;stroke:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:0.75}
		.st2 {fill:#000000;font-family:Arial;font-size:0.833336em;font-weight:bold}
		.st3 {font-size:0.799995em;font-weight:normal}
		.st4 {marker-end:url(#mrkr1-326);stroke:#0070c0;stroke-linecap:round;stroke-linejoin:round;stroke-width:1}
		.st5 {fill:#0070c0;fill-opacity:1;stroke:#0070c0;stroke-opacity:1;stroke-width:0.28409090909091}
		.st6 {fill:none;fill-rule:evenodd;font-size:12px;overflow:visible;stroke-linecap:square;stroke-miterlimit:3}
	]]>
	</style>

	<defs id="Markers">
		<g id="lend1">
			<path d="M 1 -1 L 0 0 L 1 1 " style="stroke-linecap:round;stroke-linejoin:round;fill:none"/>
		</g>
		<marker id="mrkr1-326" class="st5" orient="auto" markerUnits="strokeWidth" overflow="visible">
			<use xlink:href="#lend1" transform="scale(-3.52,-3.52) "/>
		</marker>
	</defs>
<!-- ASIGNATURAS -->
	<g>
	'; $MATCODE=291; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape1-1" transform="translate(0.375,-714.891)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR11 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="30.04" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR11 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=292; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape81-5" transform="translate(0.375,-432.146)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR12 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="30.04" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR12 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=293; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape82-9" transform="translate(0.375,-383.521)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR13 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="30.04" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR13 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=125; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape83-13" transform="translate(0.375,-288.232)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>BDS15 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.82" y="731.34" class="st2" style="fill:',$ColorTxt,';">BDS15 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=126; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape84-17" transform="translate(0.375,-242.892)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>BDS16 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.82" y="731.34" class="st2" style="fill:',$ColorTxt,';">BDS16 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=118; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape85-21" transform="translate(0.375,-561.417)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>BOR28 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">BOR28 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=101; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape86-25" transform="translate(0.375,-136.22)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>MGB1 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="29.49" y="731.34" class="st2" style="fill:',$ColorTxt,';">MGB1 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=106; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape87-29" transform="translate(0.375,-81.4895)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>MGB6 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="29.49" y="731.34" class="st2" style="fill:',$ColorTxt,';">MGB6 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=108; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape88-33" transform="translate(0.375,-662.592)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>MGB8 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="29.49" y="731.34" class="st2" style="fill:',$ColorTxt,';">MGB8 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=109; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape89-37" transform="translate(0.375,-612.004)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>MGB9 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="29.49" y="731.34" class="st2" style="fill:',$ColorTxt,';">MGB9 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=294; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape90-41" transform="translate(144.547,-705.112)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR24 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="30.04" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR24 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=295; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape91-45" transform="translate(144.547,-432.146)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR25 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="30.04" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR25 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=296; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape92-49" transform="translate(144.547,-383.521)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR26 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="30.04" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR26 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=297; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape93-53" transform="translate(144.547,-337.327)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR27 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="30.04" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR27 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=298; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape94-57" transform="translate(144.547,-221.259)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR28 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="30.04" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR28 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=299; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape95-61" transform="translate(144.547,-591.726)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR29 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="30.04" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR29 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2910; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape96-65" transform="translate(144.547,-510.829)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR210 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR210 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=134; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape97-69" transform="translate(143.95,-45.0752)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>BMI24 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="29.21" y="731.34" class="st2" style="fill:',$ColorTxt,';">BMI24 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=1410; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape98-73" transform="translate(144.547,-178.74)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>BSI210 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">BSI210 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=102; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape99-77" transform="translate(143.95,-136.22)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>MGB2 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="29.49" y="731.34" class="st2" style="fill:',$ColorTxt,';">MGB2 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2911; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape100-81" transform="translate(294.186,-510.829)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR311 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR311 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2912; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape101-85" transform="translate(294.186,-612.004)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR312 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR312 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2913; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape102-89" transform="translate(294.186,-337.327)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR313 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR313 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2914; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape103-93" transform="translate(294.186,-561.417)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR314 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR314 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2915; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape104-97" transform="translate(294.186,-229.327)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR315 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR315 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2916; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape105-101" transform="translate(294.186,-271.847)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR316 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR316 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2917; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape106-105" transform="translate(294.186,-690.938)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR317 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR317 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2918; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape107-109" transform="translate(294.186,-408.913)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR318 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR318 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=103; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape108-113" transform="translate(294.186,-136.22)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>MGB3 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="29.49" y="731.34" class="st2" style="fill:',$ColorTxt,';">MGB3 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=107; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape109-117" transform="translate(294.186,-79.527)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>MGB7 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="29.49" y="731.34" class="st2" style="fill:',$ColorTxt,';">MGB7 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2919; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape110-121" transform="translate(443.825,-510.829)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR419 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR419 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2920; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape111-125" transform="translate(443.825,-612.004)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR420 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR420 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2921; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape112-129" transform="translate(443.825,-668.697)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR421 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR421 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=104; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape113-133" transform="translate(443.825,-136.22)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>MGB4 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="29.49" y="731.34" class="st2" style="fill:',$ColorTxt,';">MGB4 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=164; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape114-137" transform="translate(443.825,-292.842)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>TDH24 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="28.1" y="731.34" class="st2" style="fill:',$ColorTxt,';">TDH24 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=1613; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape115-141" transform="translate(443.825,-51.1806)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>TDH313 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="25.32" y="731.34" class="st2" style="fill:',$ColorTxt,';">TDH313 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=1620; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape116-145" transform="translate(443.825,-337.327)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>TDH520 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="25.32" y="731.34" class="st2" style="fill:',$ColorTxt,';">TDH520 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=1621; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape117-149" transform="translate(443.825,-186.807)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>TDH521 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="25.32" y="731.34" class="st2" style="fill:',$ColorTxt,';">TDH521 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=1622; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape118-153" transform="translate(443.825,-464.167)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>TDH522 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="25.32" y="731.34" class="st2" style="fill:',$ColorTxt,';">TDH522 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=1623; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape119-157" transform="translate(443.825,-383.521)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>TDH523 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="25.32" y="731.34" class="st2" style="fill:',$ColorTxt,';">TDH523 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2922; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape120-161" transform="translate(608.533,-668.697)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR522 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR522 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2923; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape121-165" transform="translate(608.533,-294.088)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR523 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR523 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2924; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape122-169" transform="translate(608.533,-622.503)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR524 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR524 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2925; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape123-173" transform="translate(608.533,-448.031)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR525 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR525 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2926; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape124-177" transform="translate(608.533,-492.513)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR526 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR526 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2927; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape125-181" transform="translate(608.533,-714.891)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR527 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR527 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=105; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape126-185" transform="translate(608.533,-136.22)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>MGB5 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="29.49" y="731.34" class="st2" style="fill:',$ColorTxt,';">MGB5 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=1719; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape127-189" transform="translate(608.533,-337.327)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>TFP519 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="26.15" y="731.34" class="st2" style="fill:',$ColorTxt,';">TFP519 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=1814; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape128-193" transform="translate(608.533,-79.527)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>TIP314 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.82" y="731.34" class="st2" style="fill:',$ColorTxt,';">TIP314 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=1820; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape129-197" transform="translate(608.533,-209.049)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>TIP320 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.82" y="731.34" class="st2" style="fill:',$ColorTxt,';">TIP320 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2928; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape130-201" transform="translate(773.241,-533.07)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR628 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR628 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2929; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape131-205" transform="translate(773.241,-235.433)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR629 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR629 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2930; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape132-209" transform="translate(773.241,-383.521)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR630 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR630 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2931; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape133-213" transform="translate(773.241,-593.688)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR631 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR631 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2932; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape134-217" transform="translate(773.241,-279.915)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR632 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR632 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2933; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape135-221" transform="translate(773.241,-428.472)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR633 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR633 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2934; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape136-225" transform="translate(773.241,-714.891)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR634 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR634 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2135; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape137-229" transform="translate(773.241,-136.22)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IYO735 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="26.98" y="731.34" class="st2" style="fill:',$ColorTxt,';">IYO735 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2221; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape138-233" transform="translate(773.241,-337.327)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IFZ421 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="28.1" y="731.34" class="st2" style="fill:',$ColorTxt,';">IFZ421 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=1010; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape139-237" transform="translate(773.241,-480.771)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>MGB10 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="26.71" y="731.34" class="st2" style="fill:',$ColorTxt,';">MGB10 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2935; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape140-241" transform="translate(937.949,-714.891)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR735 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR735 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2936; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape141-245" transform="translate(937.949,-668.697)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR736 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR736 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2937; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape142-249" transform="translate(937.949,-491.27)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR737 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR737 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2938; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape143-253" transform="translate(937.949,-399.406)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR738 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR738 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2939; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape144-257" transform="translate(937.949,-445.338)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR739 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR739 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2940; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape145-261" transform="translate(937.949,-246.648)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR740 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR740 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2941; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape146-265" transform="translate(937.949,-186.807)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR741 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR741 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2942; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape147-269" transform="translate(937.949,-563.379)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR742 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.26" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR742 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2431; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape148-273" transform="translate(937.949,-291.988)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IFR731 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="27.54" y="731.34" class="st2" style="fill:',$ColorTxt,';">IFR731 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2229; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape149-277" transform="translate(937.949,-337.327)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IFZ529 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="28.1" y="731.34" class="st2" style="fill:',$ColorTxt,';">IFZ529 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2944; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape150-281" transform="translate(1116.23,-703.149)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR-E01 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="25.04" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR-E01 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2945; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape151-285" transform="translate(1116.23,-648.419)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR-E02 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="25.04" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR-E02 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2946; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape152-289" transform="translate(1116.23,-593.688)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR-E03 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="25.04" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR-E03 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2947; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape153-293" transform="translate(1116.23,-538.958)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR-E04 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="25.04" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR-E04 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2948; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape154-297" transform="translate(1116.23,-484.227)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR-E05 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="25.04" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR-E05 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2949; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape155-301" transform="translate(1116.23,-429.497)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR-E06 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="25.04" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR-E06 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2950; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape156-305" transform="translate(1116.23,-374.766)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR-E07 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="25.04" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR-E07 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2951; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape157-309" transform="translate(1116.23,-320.036)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>IPR-E08 ABCDEFGHIJKLMN</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="25.04" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR-E08 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

		'; $MATCODE=2952; require '../../divsys/Requerimientos/'.$PROGC.'.php'; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape158-313" transform="translate(1116.23,-265.305)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>', $MATCODE,' ', ReduceNombre($MateriaNombre,12), '</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="25.04" y="731.34" class="st2" style="fill:',$ColorTxt,';">IPR-E09 <tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12), '</tspan></text>		</g>

	';
	if(empty($_SESSION['OptaCode'])){
		//No hay optativa matriculada
	}
	else
	{
		//Existe optativa matriculada
	echo '<!-- OPTATIVA -->
	'; $MATCODE=$_SESSION['OptaCode']; $MatType="NR"; require 'ColorData.php'; require '../../divsys/Materias.php'; echo '
		<g id="shape159-317" transform="translate(0.375,-0.375)" onclick="CargarAsignatura',$MATCODE, '();">
			<desc>', $MATCODE,' ', ReduceNombre($MateriaNombre,12), '</desc>
			<rect id="BoxPeColorCaja',$MATCODE,'" x="0" y="715.266" width="87.874" height="40.5572" style="fill:'; echo $Color; echo ';stroke:#c7c8c8;stroke-width:0.25"/>
			<text id="BoxPeColorTexto',$MATCODE,'" x="25.59" y="731.34" class="st2" style="fill:',$ColorTxt,';">',$CodigoLiteral,'<tspan x="7.49" dy="1.725em" class="st3">', ReduceNombre($MateriaNombre,12),'</tspan></text>		</g>';
	}

echo '
<!-- CONECTORES -->
		<g id="shape160-321" transform="translate(88.249,-723.193)">
			<path d="M0 748.74 L56.3 748.74" class="st4"/>
		</g>
		<g id="shape161-327" transform="translate(232.421,-732.614)">
			<path d="M0 748.74 L376.11 748.74" class="st4"/>
		</g>
		<g id="shape162-332" transform="translate(232.421,-711.217)">
			<path d="M0 748.74 L61.77 748.74" class="st4"/>
		</g>
		<g id="shape163-337" transform="translate(382.06,-693.01)">
			<path d="M0 748.74 L61.77 748.74" class="st4"/>
		</g>
		<g id="shape164-342" transform="translate(531.699,-681.889)">
			<path d="M0 748.74 L76.83 748.74" class="st4"/>
		</g>
		<g id="shape166-347" transform="translate(531.699,-676.653)">
			<path d="M0 755.82 L76.83 777.37" class="st4"/>
		</g>
		<g id="shape167-352" transform="translate(696.407,-681.889)">
			<path d="M0 748.74 L241.54 748.74" class="st4"/>
		</g>
		<g id="shape168-357" transform="translate(861.115,-728.083)">
			<path d="M0 748.74 L76.83 748.74" class="st4"/>
		</g>
		<g id="shape169-362" transform="translate(696.407,-635.461)">
			<path d="M0 756.19 L76.83 769.63" class="st4"/>
		</g>
		<g id="shape170-367" transform="translate(861.115,-605.899)">
			<path d="M0 755.84 L76.83 769.98" class="st4"/>
		</g>
		<g id="shape171-372" transform="translate(382.06,-576.571)">
			<path d="M0 748.74 L555.89 748.74" class="st4"/>
		</g>
		<g id="shape172-377" transform="translate(861.115,-561.417)">
			<path d="M0 755.81 L76.83 741.67" class="st4"/>
		</g>
		<g id="shape173-382" transform="translate(232.421,-615.057)">
			<path d="M0 752.92 L61.77 744.55" class="st4"/>
		</g>
		<g id="shape174-387" transform="translate(232.421,-603.936)">
			<path d="M0 756.65 L61.77 769.17" class="st4"/>
		</g>
		<g id="shape175-392" transform="translate(382.06,-625.196)">
			<path d="M0 748.74 L61.77 748.74" class="st4"/>
		</g>
		<g id="shape176-397" transform="translate(232.421,-524.021)">
			<path d="M0 748.74 L61.77 748.74" class="st4"/>
		</g>
		<g id="shape177-402" transform="translate(382.06,-524.021)">
			<path d="M0 748.74 L61.77 748.74" class="st4"/>
		</g>
		<g id="shape178-407" transform="translate(531.699,-534.074)">
			<path d="M0 755.82 L241.54 739.52" class="st4"/>
		</g>
		<g id="shape179-412" transform="translate(861.115,-542.198)">
			<path d="M0 755.82 L76.83 775.32" class="st4"/>
		</g>
		<g id="shape180-417" transform="translate(88.249,-445.338)">
			<path d="M0 748.74 L56.3 748.74" class="st4"/>
		</g>
		<g id="shape181-422" transform="translate(232.421,-454.886)">
			<path d="M0 748.74 L376.11 748.74" class="st4"/>
		</g>
		<g id="shape182-427" transform="translate(88.249,-396.713)">
			<path d="M0 748.74 L56.3 748.74" class="st4"/>
		</g>
		<g id="shape183-432" transform="translate(382.06,-430.985)">
			<path d="M0 755.82 L391.18 739.85" class="st4"/>
		</g>
		<g id="shape184-437" transform="translate(861.115,-450.097)">
			<path d="M0 748.74 L76.83 748.74" class="st4"/>
		</g>
		<g id="shape185-442" transform="translate(232.421,-350.519)">
			<path d="M0 748.74 L61.77 748.74" class="st4"/>
		</g>
		<g id="shape187-447" transform="translate(88.249,-307.404)">
			<path d="M0 757.17 L205.94 768.65" class="st4"/>
		</g>
		<g id="shape188-452" transform="translate(88.249,-267.501)">
			<path d="M0 755.82 L205.94 735.53" class="st4"/>
		</g>
		<g id="shape189-457" transform="translate(531.699,-350.519)">
			<path d="M0 748.74 L76.83 748.74" class="st4"/>
		</g>
		<g id="shape190-462" transform="translate(531.699,-396.713)">
			<path d="M0 748.74 L241.54 748.74" class="st4"/>
		</g>
		<g id="shape191-467" transform="translate(696.407,-300.193)">
			<path d="M0 748.74 L76.83 748.74" class="st4"/>
		</g>
		<g id="shape192-472" transform="translate(232.421,-238.485)">
			<path d="M0 748.74 L61.77 748.74" class="st4"/>
		</g>
		<g id="shape193-477" transform="translate(382.06,-253.709)">
			<path d="M0 748.74 L391.18 748.74" class="st4"/>
		</g>
		<g id="shape194-482" transform="translate(861.115,-291.319)">
			<path d="M0 755.82 L76.83 771.34" class="st4"/>
		</g>
		<g id="shape195-487" transform="translate(861.115,-254.232)">
			<path d="M0 748.74 L76.83 748.74" class="st4"/>
		</g>
		<g id="shape196-492" transform="translate(696.407,-226.361)">
			<path d="M0 755.82 L241.54 772.13" class="st4"/>
		</g>
		<g id="shape197-497" transform="translate(531.699,-198.508)">
			<path d="M0 748.74 L406.25 748.74" class="st4"/>
		</g>
		<g id="shape198-502" transform="translate(88.249,-149.412)">
			<path d="M0 748.74 L55.7 748.74" class="st4"/>
		</g>
		<g id="shape199-507" transform="translate(231.824,-149.412)">
			<path d="M0 748.74 L62.36 748.74" class="st4"/>
		</g>
		<g id="shape200-512" transform="translate(382.06,-149.412)">
			<path d="M0 748.74 L61.77 748.74" class="st4"/>
		</g>
		<g id="shape201-517" transform="translate(531.699,-149.412)">
			<path d="M0 748.74 L76.83 748.74" class="st4"/>
		</g>
		<g id="shape202-522" transform="translate(88.249,-93.7003)">
			<path d="M0 748.74 L205.94 748.74" class="st4"/>
		</g>
		<g id="shape203-527" transform="translate(382.06,-92.719)">
			<path d="M0 748.74 L226.47 748.74" class="st4"/>
		</g>
		<g id="shape204-532" transform="translate(861.115,-350.519)">
			<path d="M0 748.74 L76.83 748.74" class="st4"/>
		</g>
	</g>
</svg></center>
';

/*Remover archivo de Scripts*/
fclose($ArchivosJS);
//unlink("ScriptsPdeE/StudentDataJS_$ID.js");

?>

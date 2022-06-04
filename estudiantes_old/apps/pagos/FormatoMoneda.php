<?php
function formatcurrency($floatcurr, $curr = "USD"){
        $currencies['ARS'] = array(0,',','.');          //  Argentine Peso
        $currencies['AMD'] = array(0,'.',',');          //  Armenian Dram
        $currencies['AWG'] = array(0,'.',',');          //  Aruban Guilder
        $currencies['AUD'] = array(0,'.',' ');          //  Australian Dollar
        $currencies['BSD'] = array(0,'.',',');          //  Bahamian Dollar
        $currencies['BHD'] = array(3,'.',',');          //  Bahraini Dinar
        $currencies['BDT'] = array(0,'.',',');          //  Bangladesh, Taka
        $currencies['BZD'] = array(0,'.',',');          //  Belize Dollar
        $currencies['BMD'] = array(0,'.',',');          //  Bermudian Dollar
        $currencies['BOB'] = array(0,'.',',');          //  Bolivia, Boliviano
        $currencies['BAM'] = array(0,'.',',');          //  Bosnia and Herzegovina, Convertible Marks
        $currencies['BWP'] = array(0,'.',',');          //  Botswana, Pula
        $currencies['BRL'] = array(0,',','.');          //  Brazilian Real
        $currencies['BND'] = array(0,'.',',');          //  Brunei Dollar
        $currencies['CAD'] = array(0,'.',',');          //  Canadian Dollar
        $currencies['KYD'] = array(0,'.',',');          //  Cayman Islands Dollar
        $currencies['CLP'] = array(0,'','.');           //  Chilean Peso
        $currencies['CNY'] = array(0,'.',',');          //  China Yuan Renminbi
        $currencies['COP'] = array(0,',','.');          //  Colombian Peso
        $currencies['CRC'] = array(0,',','.');          //  Costa Rican Colon
        $currencies['HRK'] = array(0,',','.');          //  Croatian Kuna
        $currencies['CUC'] = array(0,'.',',');          //  Cuban Convertible Peso
        $currencies['CUP'] = array(0,'.',',');          //  Cuban Peso
        $currencies['CYP'] = array(0,'.',',');          //  Cyprus Pound
        $currencies['CZK'] = array(0,'.',',');          //  Czech Koruna
        $currencies['DKK'] = array(0,',','.');          //  Danish Krone
        $currencies['DOP'] = array(0,'.',',');          //  Dominican Peso
        $currencies['XCD'] = array(0,'.',',');          //  East Caribbean Dollar
        $currencies['EGP'] = array(0,'.',',');          //  Egyptian Pound
        $currencies['SVC'] = array(0,'.',',');          //  El Salvador Colon
        $currencies['ATS'] = array(0,',','.');          //  Euro
        $currencies['BEF'] = array(0,',','.');          //  Euro
        $currencies['DEM'] = array(0,',','.');          //  Euro
        $currencies['EEK'] = array(0,',','.');          //  Euro
        $currencies['ESP'] = array(0,',','.');          //  Euro
        $currencies['EUR'] = array(0,',','.');          //  Euro
        $currencies['FIM'] = array(0,',','.');          //  Euro
        $currencies['FRF'] = array(0,',','.');          //  Euro
        $currencies['GRD'] = array(0,',','.');          //  Euro
        $currencies['IEP'] = array(0,',','.');          //  Euro
        $currencies['ITL'] = array(0,',','.');          //  Euro
        $currencies['LUF'] = array(0,',','.');          //  Euro
        $currencies['NLG'] = array(0,',','.');          //  Euro
        $currencies['PTE'] = array(0,',','.');          //  Euro
        $currencies['GHC'] = array(0,'.',',');          //  Ghana, Cedi
        $currencies['GIP'] = array(0,'.',',');          //  Gibraltar Pound
        $currencies['GTQ'] = array(0,'.',',');          //  Guatemala, Quetzal
        $currencies['HNL'] = array(0,'.',',');          //  Honduras, Lempira
        $currencies['HKD'] = array(0,'.',',');          //  Hong Kong Dollar
        $currencies['HUF'] = array(0,'','.');           //  Hungary, Forint
        $currencies['ISK'] = array(0,'','.');           //  Iceland Krona
        $currencies['INR'] = array(0,'.',',');          //  Indian Rupee
        $currencies['IDR'] = array(0,',','.');          //  Indonesia, Rupiah
        $currencies['IRR'] = array(0,'.',',');          //  Iranian Rial
        $currencies['JMD'] = array(0,'.',',');          //  Jamaican Dollar
        $currencies['JPY'] = array(0,'',',');           //  Japan, Yen
        $currencies['JOD'] = array(3,'.',',');          //  Jordanian Dinar
        $currencies['KES'] = array(0,'.',',');          //  Kenyan Shilling
        $currencies['KWD'] = array(3,'.',',');          //  Kuwaiti Dinar
        $currencies['LVL'] = array(0,'.',',');          //  Latvian Lats
        $currencies['LBP'] = array(0,'',' ');           //  Lebanese Pound
        $currencies['LTL'] = array(0,',',' ');          //  Lithuanian Litas
        $currencies['MKD'] = array(0,'.',',');          //  Macedonia, Denar
        $currencies['MYR'] = array(0,'.',',');          //  Malaysian Ringgit
        $currencies['MTL'] = array(0,'.',',');          //  Maltese Lira
        $currencies['MUR'] = array(0,'',',');           //  Mauritius Rupee
        $currencies['MXN'] = array(0,'.',',');          //  Mexican Peso
        $currencies['MZM'] = array(0,',','.');          //  Mozambique Metical
        $currencies['NPR'] = array(0,'.',',');          //  Nepalese Rupee
        $currencies['ANG'] = array(0,'.',',');          //  Netherlands Antillian Guilder
        $currencies['ILS'] = array(0,'.',',');          //  New Israeli Shekel
        $currencies['TRY'] = array(0,'.',',');          //  New Turkish Lira
        $currencies['NZD'] = array(0,'.',',');          //  New Zealand Dollar
        $currencies['NOK'] = array(0,',','.');          //  Norwegian Krone
        $currencies['PKR'] = array(0,'.',',');          //  Pakistan Rupee
        $currencies['PEN'] = array(0,'.',',');          //  Peru, Nuevo Sol
        $currencies['UYU'] = array(0,',','.');          //  Peso Uruguayo
        $currencies['PHP'] = array(0,'.',',');          //  Philippine Peso
        $currencies['PLN'] = array(0,'.',' ');          //  Poland, Zloty
        $currencies['GBP'] = array(0,'.',',');          //  Pound Sterling
        $currencies['OMR'] = array(3,'.',',');          //  Rial Omani
        $currencies['RON'] = array(0,',','.');          //  Romania, New Leu
        $currencies['ROL'] = array(0,',','.');          //  Romania, Old Leu
        $currencies['RUB'] = array(0,',','.');          //  Russian Ruble
        $currencies['SAR'] = array(0,'.',',');          //  Saudi Riyal
        $currencies['SGD'] = array(0,'.',',');          //  Singapore Dollar
        $currencies['SKK'] = array(0,',',' ');          //  Slovak Koruna
        $currencies['SIT'] = array(0,',','.');          //  Slovenia, Tolar
        $currencies['ZAR'] = array(0,'.',' ');          //  South Africa, Rand
        $currencies['KRW'] = array(0,'',',');           //  South Korea, Won
        $currencies['SZL'] = array(0,'.',', ');         //  Swaziland, Lilangeni
        $currencies['SEK'] = array(0,',','.');          //  Swedish Krona
        $currencies['CHF'] = array(0,'.','\'');         //  Swiss Franc 
        $currencies['TZS'] = array(0,'.',',');          //  Tanzanian Shilling
        $currencies['THB'] = array(0,'.',',');          //  Thailand, Baht
        $currencies['TOP'] = array(0,'.',',');          //  Tonga, Paanga
        $currencies['AED'] = array(0,'.',',');          //  UAE Dirham
        $currencies['UAH'] = array(0,',',' ');          //  Ukraine, Hryvnia
        $currencies['USD'] = array(0,'.',',');          //  US Dollar
        $currencies['VUV'] = array(0,'',',');           //  Vanuatu, Vatu
        $currencies['VEF'] = array(0,',','.');          //  Venezuela Bolivares Fuertes
        $currencies['VEB'] = array(0,',','.');          //  Venezuela, Bolivar
        $currencies['VND'] = array(0,'','.');           //  Viet Nam, Dong
        $currencies['ZWD'] = array(0,'.',' ');          //  Zimbabwe Dollar

        function formatinr($input){
            //CUSTOM FUNCTION TO GENERATE ##,##,###.##
            $dec = "";
            $pos = strpos($input, ".");
            if ($pos === false){
                //no decimals   
            } else {
                //decimals
                $dec = substr(round(substr($input,$pos),2),1);
                $input = substr($input,0,$pos);
            }
            $num = substr($input,-3); //get the last 3 digits
            $input = substr($input,0, -3); //omit the last 3 digits already stored in $num
            while(strlen($input) > 0) //loop the process - further get digits 2 by 2
            {
                $num = substr($input,-2).",".$num;
                $input = substr($input,0,-2);
            }
            return $num . $dec;
        }


        if ($curr == "INR"){    
            return formatinr($floatcurr);
        } else {
            return number_format($floatcurr,$currencies[$curr][0],$currencies[$curr][1],$currencies[$curr][2]);
        }
    }

?>
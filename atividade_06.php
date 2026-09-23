<?php
function converterTemperatura($temperatura, $dadoInicial, $dadoFinal){

    switch ($dadoInicial) {
        case "Celsius":
            switch ($dadoFinal) {
                case "Fahrenheit":
                    return ($temperatura * 9/5) + 32;
                case "Kelvin":
                    return $temperatura + 273.15;
            }
        case "Fahrenheit":
            switch ($dadoFinal) {
                case "Celsius":
                    return ($temperatura - 32) * 5/9;
                case "Kelvin":
                    return ($temperatura - 32) * 5/9 + 273.15;
            }
        case "Kelvin":
            switch ($dadoFinal) {
                case "Celsius":
                    return $temperatura - 273.15;
                case "Fahrenheit":
                    return ($temperatura - 273.15) * 9/5 + 32;
            }
    }

}

$temperatura = 24;
$dadoInicial = "Celsius";
$dadoFinal = "Fahrenheit";

echo converterTemperatura($temperatura, $dadoInicial, $dadoFinal);

?>
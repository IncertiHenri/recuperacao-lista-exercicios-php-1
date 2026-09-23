<?php

function analisarNumero($numero) {

    if ($numero % 2 == 0) {
        $verifica = "Par";
    } else {
        $verifica = "Ímpar";
    }

    $primo = true;

    if ($numero < 2) {
        $primo = false;
    } else {
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $primo = false;
            }
        }
    }
    $soma = 0;

    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }

    $perfeito = ($soma == $numero);

    return [
        "numero" => $numero,
        "par_impar" => $verifica,
        "primo" => $primo ? "Primo" : "Não primo",
        "perfeito" => $perfeito ? "Perfeito" : "Não perfeito"
    ];
}

$numero = 28;

$resultado = analisarNumero($numero);

echo "Número: " . $resultado["numero"] . "<br>";
echo "Par ou ímpar: " . $resultado["par_impar"] . "<br>";
echo "Primo: " . $resultado["primo"] . "<br>";
echo "Perfeito: " . $resultado["perfeito"];

?>
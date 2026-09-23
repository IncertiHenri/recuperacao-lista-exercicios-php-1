<?php
function estatisticasNumericas($numeros)
{

    $tamanho = count($numeros);

    $soma = 0;

    for ($i = 0; $i < $tamanho; $i++) {

        $soma = $numeros[$i] + $soma;

    }

    $media = $soma / $tamanho;

    $maiorNumero = $numeros[0];

    $menorNumero = $numeros[0];

    for ($i = 0; $i < $tamanho; $i++) {
        if ($numeros[$i] > $maiorNumero) {
            $maiorNumero = $numeros[$i];
        }
        if ($numeros[$i] < $menorNumero) {
            $menorNumero = $numeros[$i];
        }
    }

    $meio = intdiv($tamanho, 2);

    if ($tamanho % 2 != 0) {
        $mediana = $numeros[$meio];
    } else {
        $mediana = ($numeros[$meio - 1] + $numeros[$meio]) / 2;
    }

    $par = 0;

    $impar = 0;

    for ($i = 0; $i < $tamanho; $i++) {
        if ($numeros[$i] % 2 == 0) {
            $par++;
        } else {
            $impar++;
        }
        
    }

    return [
                "soma" => $soma,
                "media" => $media,
                "maior" => $maiorNumero,
                "menor" => $menorNumero,
                "mediana" => $mediana,
                "par" => $par,
                "impar" => $impar
            ];
}

$numeros = [5, 6, 14, 25, 67, 68, 69, 97];

$resultado = estatisticasNumericas($numeros);

echo "Soma: " . $resultado["soma"] . "<br>";
echo "Média: " . $resultado["media"] . "<br>";
echo "Maior valor: " . $resultado["maior"] . "<br>";
echo "Menor valor: " . $resultado["menor"] . "<br>";
echo "Mediana: " . $resultado["mediana"] . "<br>";
echo "Quantidade de pares: " . $resultado["par"] . "<br>";
echo "Quantidade de ímpares: " . $resultado["impar"];

?>
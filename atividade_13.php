<?php
function criptografarMensagem($mensagem)
{

    $alfabeto = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
    $cifra = array("f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "a", "b", "c", "d", "e", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E");

    $separado = str_split($mensagem);

    $tamanho = count($separado);

    $cifrado = "";

    for ($i = 0; $i < $tamanho; $i++) {

        $posicao = array_search($separado[$i], $alfabeto);

        if ($posicao !== false) {
            $cifrado = $cifrado . $cifra[$posicao];
        } else {
            $cifrado = $cifrado . $separado[$i];
        }
    }

    return $cifrado;
}

$mensagem = "Eu te amo";

$resultadoCifrado =  criptografarMensagem($mensagem);

function descriptografarMensagem($resultadoCifrado)
{

    $alfabeto = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
    $cifra = array("f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "a", "b", "c", "d", "e", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E");

    $separado = str_split($resultadoCifrado);

    $tamanho = count($separado);

    $decifrado = "";

    for ($i = 0; $i < $tamanho; $i++) {

        $posicao = array_search($separado[$i], $cifra);

        if ($posicao !== false) {
            $decifrado = $decifrado . $alfabeto[$posicao];
        } else {
            $decifrado = $decifrado . $separado[$i];
        }
    }

    return $decifrado;
}

$resultadoDecifrado = descriptografarMensagem($resultadoCifrado);

echo "Cifrado: " . $resultadoCifrado . "<br>";
echo "Cifrado: " . $resultadoDecifrado . "<br>";

?>
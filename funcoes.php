<?php
function calcularFormula($x, $y)
{

if (($x + $y) == 0) {
return "Não é possível realizar a divisão por zero.";
}
$resultado=(pow($x,2)+pow($y, 2))/($x+$y);

return $resultado;
}

function inverterTexto($texto){

$caracteres = preg_split("//u", $texto, -1,PREG_SPLIT_NO_EMPTY);

$caracteresInvertidos = array_reverse($caracteres);

$textoInvertido = implode('', $caracteresInvertidos);

$quantidadeCaracteres = mb_strlen($texto);

return [
"invertido" => $textoInvertido,
"quantidade" => $quantidadeCaracteres
];

}

function mascararCpf($cpf){

$cpfDivido = substr_replace($cpf, '.', -4, 0);

$esconderCpf = explode(".", $cpfDivido);

$cpfEscondido = str_replace(["0","1","2","3","4","5","6","7","8","9"], "*", $esconderCpf[0]);

$cpfOculto = $cpfEscondido;

$cpfVisivel = $esconderCpf[1];

$cpfPronto = $cpfOculto . $cpfVisivel;

return $cpfPronto;

}

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

function ordenarNomes($nomes){

$nomesSeparados = explode(',', $nomes);

sort($nomesSeparados);

$nomesJuntos = implode(',', $nomesSeparados);

return $nomesJuntos;

}

function calcularDesconto($valorCompra){

if($valorCompra < 100){
    return [
        "Valor original" => $valorCompra,
        "Valor após o desconto" => $valorCompra,
        "Info" => "Nenhum desconto foi aplicado pois não atingiu o valor limite"
    ];
} else if($valorCompra < 500 && $valorCompra > 100){
    $valorFinal = $valorCompra * 0.9;
    return [
        "Valor original" => $valorCompra,
        "Valor após o desconto" => $valorFinal,
        "Info" => "Foi aplicado um desconto de 10%!"
    ];
} else if($valorCompra < 1000 && $valorCompra > 500){
    $valorFinal = $valorCompra * 0.8;
    return [
        "Valor original" => $valorCompra,
        "Valor após o desconto" => $valorFinal,
        "Info" => "Foi aplicado um desconto de 20%!"
    ];
} else if($valorCompra > 1000){
    $valorFinal = $valorCompra * 0.7;
    return [
        "Valor original" => $valorCompra,
        "Valor após o desconto" => $valorFinal,
        "Info" => "Foi aplicado um desconto de 30%!"
    ];
}

}

function calcularMedia($notas){

$tamanho = count($notas);

$maiorNota = $notas[0];

$menorNota = $notas[0];

for($i = 0; $i < $tamanho; $i++){
    if($notas[$i] > $maiorNota){
        $maiorNota = $notas[$i];
    }
    if($notas[$i] < $menorNota){
        $menorNota = $notas[$i];
    }
}

$valorTotal = 0;

for($i = 0; $i < $tamanho; $i++){
    $valorTotal = $notas[$i] + $valorTotal;
}

$media = $valorTotal/$tamanho;

if($media > 7){
    $situação = "Aprovado!";
} else if ($media < 7){
    $situação = "Reprovado!";
} else if ($media == 7){
    $situação = "Recuperação!";
}

return [
    "maior_nota" => $maiorNota,
    "menor_nota" => $menorNota,
    "media" => $media,
    "situacao_final" => $situação
];

}

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

function gerarSenha($tamanho){
$letras = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
$especiais = array("!","@","#","$","%","&");
$quantidade = $tamanho;

for($i = 0; $i < $quantidade; $i++){

    $numeroEspeciais = rand(0,5);

    $numeroLetras = rand(0,51);

    $numeroNumeros = rand(0,9);

    $embaralhar = array($letras[$numeroLetras], $especiais[$numeroEspeciais], $numeroNumeros);

    $numeroEmbaralhar = rand(0,2);

    $senha[$i] = $embaralhar[$numeroEmbaralhar];
    }

    $senhaGerada = implode("",$senha);

    return $senhaGerada;

}

?>
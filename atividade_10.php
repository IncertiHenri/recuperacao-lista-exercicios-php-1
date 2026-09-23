<?php

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

$notas = [9, 6, 5, 7, 6];

$resultado = calcularMedia($notas);

echo "Maior nota: " . $resultado["maior_nota"] . "<br>";
echo "Menor nota: " . $resultado["menor_nota"] . "<br>";
echo "Média: " . $resultado["media"] . "<br>";
echo "Situação final: " . $resultado["situacao_final"];

?>
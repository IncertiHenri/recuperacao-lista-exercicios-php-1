<?php

function analisarProdutos($produtos, $precos, $pesquisa)
{

    $tamanho = count($produtos);

    $maiorPreco = $precos[0];

    $menorPreco = $precos[0];

    $valorTotal = 0;


    for ($i = 0; $i < $tamanho; $i++) {
        if ($precos[$i] > $maiorPreco) {
            $maiorPreco = $precos[$i];
        }
        if ($precos[$i] < $menorPreco) {
            $menorPreco = $precos[$i];
        }
    }

    for ($i = 0; $i < $tamanho; $i++) {
        $valorTotal = $precos[$i] + $valorTotal;
    }

    $media = $valorTotal / $tamanho;

    for ($i = 0; $i < $tamanho; $i++) {
        if ($pesquisa == $produtos[$i]) {

            $valorProduto = $precos[$i];

            return [
                "caro" => $maiorPreco,
                "barato" => $menorPreco,
                "media" => $media,
                "busca" => $pesquisa,
                "valor" => $valorProduto
            ];
        }
    }

}

$produtos = ["A54", "A55", "A56", "A57"];
$precos = [1000, 1300, 1600, 1900];
$pesquisa = "A54";

$resultado = analisarProdutos($produtos,$precos,$pesquisa);

echo "Produto mais caro: " . $resultado["caro"] . "<br>";
echo "Produto mais barato: " . $resultado["barato"] . "<br>";
echo "Média de valores: " . $resultado["media"] . "<br>";
echo "Produto buscado: " . $resultado["busca"] . "<br>";
echo "Valor do produto buscado: " . $resultado["valor"];

?>
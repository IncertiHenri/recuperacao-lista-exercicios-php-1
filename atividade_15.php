<?php

function valorTotalProduto($pedido)
{

    $quantidade = count($pedido);

    for ($i = 0; $i < $quantidade; $i++) {
        $valorProduto[$i] = $pedido[$i]["quantidade"] * $pedido[$i]["valor unitario"];
    }

    return $valorProduto;
}

function valorTotalCompra($pedido)
{

    $valores = valorTotalProduto($pedido);
    $valorCompra = 0;
    $quantidade = count($pedido);

    for ($i = 0; $i < $quantidade; $i++) {
        $valorCompra = $valorCompra + $valores[$i];
    }

    return $valorCompra;

}

function descontoAplicado($pedido)
{

    $valor = valorTotalCompra($pedido);

    if ($valor <= 500) {

        $valorDesconto = $valor;
        $info = "Sem desconto!";

    } else if ($valor > 500 && $valor <= 1000) {

        $valorDesconto = $valor * 0.9;
        $info = "Aplicado desconto de 10%!";

    } else if ($valor > 1000) {

        $valorDesconto = $valor * 0.85;
        $info = "Aplicado desconto de 15%!";

    }

    return [
        "valor com desconto" => $valorDesconto,
        "informacao" => $info
    ];

}

function calcularFrete($pedido)
{

    $valorCompra = descontoAplicado($pedido);

    if ($valorCompra["valor com desconto"] <= 300) {
        $frete = 35;
        $info = "O frete ficou R$ 35,00";
    } else if ($valorCompra["valor com desconto"] > 300 && $valorCompra["valor com desconto"] < 800) {
        $frete = 20;
        $info = "O frete ficou R$ 20,00";
    } else if ($valorCompra["valor com desconto"] > 800) {
        $frete = 0;
        $info = "O frete é grátis!";
    }

    return [
        "valor frete" => $frete,
        "informacao" => $info
    ];

}

function valorFinal($pedido)
{

    $valorCompra = descontoAplicado($pedido);

    $valorFrete = calcularFrete($pedido);

    $valorFinal = $valorCompra["valor com desconto"] + $valorFrete["valor frete"];

    return $valorFinal;

}

function quantidadeItens($pedido)
{

    $quantidade = count($pedido);
    $produtos = 0;

    for ($i = 0; $i < $quantidade; $i++) {
        $produtos = $produtos + $pedido[$i]["quantidade"];
    }

    return $produtos;

}

function produtoMaisCaro($pedido)
{

    $quantidade = count($pedido);

    $maiorValor = $pedido[0]["valor unitario"];
    $nomeProduto = $pedido[0]["nome produto"];

    for ($i = 0; $i < $quantidade; $i++) {
        if ($pedido[$i]["valor unitario"] > $maiorValor) {
            $nomeProduto = $pedido[$i]["nome produto"];
        }

    }
    

    return $nomeProduto;
}

function maiorSubtotal($pedido)
{

    $quantidade = count($pedido);

    $valores = valorTotalProduto($pedido);

    $maiorValor = $valores[0];

    for ($i = 0; $i < $quantidade; $i++) {
        if ($valores[$i] > $maiorValor) {
            $maiorValor = $valores[$i];
        }

    }

    return $maiorValor;
}

function processarPedido($pedido)
{

    $valorProdutos = valorTotalProduto($pedido);

    $frete = calcularFrete($pedido);

    $descontoAplicado = descontoAplicado($pedido);

    $valorFinal = valorFinal($pedido);

    $quantidadeProdutos = count($pedido);

    $quantidadeItens = quantidadeItens($pedido);

    $produtoMaisCaro = produtoMaisCaro($pedido);

    $maiorSubtotal = maiorSubtotal($pedido);

    return [
        "quantidade produtos diferentes" => $quantidadeProdutos,
        "quantidade total de itens" => $quantidadeItens,
        "produto mais caro" => $produtoMaisCaro,
        "subtotais" => $valorProdutos,
        "maior subtotal" => $maiorSubtotal,
        "desconto aplicado" => $descontoAplicado,
        "frete" => $frete,
        "valor final" => $valorFinal
    ];

}

?>
<?php
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

$valorCompra = 600;

$resultado = calcularDesconto($valorCompra);

echo "<h3>Valor original: " . $resultado["Valor original"] . "</h3>";
echo "<h3>Valor após o desconto: " . $resultado["Valor após o desconto"] . "</h3>";
echo "<h3>" . $resultado["Info"] . "</h3>";

?>
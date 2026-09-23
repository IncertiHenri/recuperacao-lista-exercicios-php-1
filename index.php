<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5 - lista 1/2</title>
</head>

<body>

    <h1>Biblioteca de funções</h1>

    <?php

    include("funcoes.php");

    $x = 67;
    $y = 42;

    echo "<h2>Cálculo de fórmulas</h2>";
    echo "Valor de X: $x <br>";
    echo "Valor de Y: $y <br><br>";
    echo "Resultado: " . calcularFormula($x, $y);

    $texto_usuario = "The cosmic carnival is begin!";

    echo "<h2>Inversão de texto</h2>";
    echo "Texto original: $texto_usuario <br>";

    $resultado = inverterTexto($texto_usuario);

    echo "Texto invertido: " . $resultado["invertido"] . "<br>";
    echo "Quantidade de caracteres: " . $resultado["quantidade"] . "<br>";

    $cpf = "02022626931";

    echo "<h2>Mascarar CPF</h2>";
    echo "CPF original: $cpf <br>";
    echo "CPF mascarado: " . mascararCpf($cpf);

    $temperatura = 14;
    $dadoInicial = "Fahrenheit";
    $dadoFinal = "Celsius";

    echo "<h2>Conversão de temperatura</h2>";
    echo "Temperatura em $dadoInicial: $temperatura <br>";
    echo "Temperatura em $dadoFinal: " . converterTemperatura($temperatura, $dadoInicial, $dadoFinal);

    $nomes = "Djeniffer, Ícaro, Júlia, Everton, Thalita, Thaís, Lucas";

    $resultado = ordenarNomes($nomes);

    echo "<h2>Ordenar nomes</h2>";
    echo "Nomes sem ordenação: $nomes <br>";
    echo "Nomes ordenados: " . $resultado;

    $valorCompra = 1500;

    $resultado = calcularDesconto($valorCompra);

    echo "<h2>Cálcular desconto</h2>";
    echo "Valor original: " . $resultado["Valor original"] . "<br>";
    echo "Valor após o desconto: " . $resultado["Valor após o desconto"] . "<br>";
    echo $resultado["Info"];

    $notas = [10, 8, 7.5, 4, 10];

    $resultado = calcularMedia($notas);

    echo "<h2>Cálcular média</h2>";
    echo "Notas: "; for($i = 0; $i < count($notas); $i++){echo $notas[$i] . ", "; } echo "<br>"; 
    echo "Maior nota: " . $resultado["maior_nota"] . "<br>";
    echo "Menor nota: " . $resultado["menor_nota"] . "<br>";
    echo "Média: " . $resultado["media"] . "<br>";
    echo "Situação final: " . $resultado["situacao_final"];


    $mensagem = "Take my paw!";

    echo "<h2>Criptografar mensagem</h2>";
    $resultadoCifrado =  criptografarMensagem($mensagem);
    echo "Cifrado: " . $resultadoCifrado;

    echo "<h2>Descriptografar mensagem</h2>";
    $resultadoDecifrado = descriptografarMensagem($resultadoCifrado);
    echo "Decifrado: " . $resultadoDecifrado . "<br>";

    $tamanho = 20;

    $senhaGerada = gerarSenha($tamanho);

    echo "<h2>Gerar senha automática</h2>";
    echo "Senha gerada pelo sistema: " . $senhaGerada;

    ?>

</body>

</html>
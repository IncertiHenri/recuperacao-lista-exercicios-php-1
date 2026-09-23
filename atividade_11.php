<?php
function formatarTexto($texto){

    $maiusculo = strtoupper($texto);

    $minusculo = strtolower($texto);

    $primeiraMaiuscula = ucwords($texto);

    $caracteres = mb_strlen($texto);

    return [
    "maiuculo" => $maiusculo,
    "minusculo" => $minusculo,
    "primeira_maiuscula" => $primeiraMaiuscula,
    "caracteres" => $caracteres
];

}

$texto = "Where did you learn what it means to reciprocate?
And how much can I be expected to tolerate? Uh
So I started to think 'bout the plans I made
The debt unpaid
And you just can't call a spade a spade
I watch the moon
Let it run my mood
Can't stop thinking of you
I watch you (now I let it go)
(And I watch as things play out like)
So long, nice to know you, I'll be moving on
We started off in such a nice place
We were talking the same language
I o-open and I'm closing
You can't stand the thought
Of a real beating heart
You'd be holding, having trouble
O-O-Owning and admit that I am hoping
I watch the moon
Let it run my mood
Can't stop thinking of you
I watch you (now I let it go)
(And I watch as things play out like)
So long, nice to know you, I'll be moving on
Moving on
You, yeah, I always know the truth
But I can't just say it to you
Yeah, I know the truth
I knew
Yeah, I always know the truth
But I can't just say it to you
Yeah, I know the truth
I never thought we'd see it through
I never could rely on you
And few times your face came into view
Into view
I'm not into you
Into you";

$resultado = formatarTexto($texto);

echo "Texto em maiúsculo: " . $resultado["maiuculo"] . "<br>";
echo "Texto em minúsculo: " . $resultado["minusculo"] . "<br>";
echo "Primeira letra em maiúsculo: " . $resultado["primeira_maiuscula"] . "<br>";
echo "Quantidade caracteres: " . $resultado["caracteres"];

?>
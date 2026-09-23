<?php
function analisarTexto($texto){
    $consoantes = array("b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","y","z","B","C","D","F","G","H","J","K","L","M","N","P","Q","R","S","T","V","W","X","Y","Z");
    $vogais = array("a","e","i","o","u","A","E","I","O","U");
    $quantidadeConsoantes = 0;
    $quantidadeVogais = 0;

    $quantidadePalavras = str_word_count($texto);

    $quantidadeCaracteres = mb_strlen($texto);

    $caracteres = preg_split("//u", $texto, -1,PREG_SPLIT_NO_EMPTY);

    for($i=0; $i < $quantidadeCaracteres; $i++){
        if(in_array($caracteres[$i], $consoantes)){
            $quantidadeConsoantes = $quantidadeConsoantes + 1;
        } else if(in_array($caracteres[$i], $vogais)){
            $quantidadeVogais = $quantidadeVogais + 1;
        }
    }

    return [
        "Quantidade de palavras" => $quantidadePalavras,
        "Quantidade de caracteres" => $quantidadeCaracteres,
        "Quantidade de vogais" => $quantidadeConsoantes,
        "Quantidade de consoantes" => $quantidadeVogais
    ];

}

$texto = "Once upon a time
Morning glow, scattered light
Shone on you and I
In fading poems, frozen rhymes
Our traces on the breeze
Whispers of past revelry
Please let me linger for now
Enveloped in your sound
Love on the page, it's the ink our story's penned
No matter how it ends, I'd do it all again
Oh, stay true
Blossom as spring renews
Dream in colors, every hue
Tomorrow's heights, to tomorrow's life
I'll walk in step beside you
So, stay true
Thaw winter's rime anew
Woven memories your boon
And like a melody, sing a song of reverie
Please, stay true
Cherish our memory
Go with love, your heart's your key
As rivers flow, oh, as gardens grow
I hope you bloom in beauty
See you soon
After the end of time
In the melted frost and rime
Now, stay true
Blossom as spring renews
Dream in colors, every hue
Tomorrow's heights, to tomorrow's life
I'll walk in step beside you
Now, stay true
Thaw winter's rime anew
Woven memories your boon
And like a melody, sing our reverie
And in our memory, pen the end of our journey";

$resultado = analisarTexto($texto);

echo "<h3>Quantidade de palavras: " . $resultado["Quantidade de palavras"] . "</h3>";
echo "<h3>Quantidade de caracteres: " . $resultado["Quantidade de caracteres"] . "</h3>";
echo "<h3>Quantidade de vogais: " . $resultado["Quantidade de vogais"] . "</h3>";
echo "<h3>Quantidade de consoantes: " . $resultado["Quantidade de consoantes"] . "</h3>";

?>
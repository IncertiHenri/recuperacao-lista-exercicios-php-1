<?php

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

echo gerarSenha(15);

?>
<?php

function mascararCpf($cpf){

$cpfDivido = substr_replace($cpf, '.', -4, 0);

$esconderCpf = explode(".", $cpfDivido);

$cpfEscondido = str_replace(["0","1","2","3","4","5","6","7","8","9"], "*", $esconderCpf[0]);

$cpfOculto = $cpfEscondido;

$cpfVisivel = $esconderCpf[1];

$cpfPronto = $cpfOculto . $cpfVisivel;

return $cpfPronto;

}

$cpf = "14083304901";

echo mascararCpf($cpf);

?>
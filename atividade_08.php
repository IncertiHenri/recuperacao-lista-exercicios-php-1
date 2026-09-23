<?php
function ordenarNomes($nomes){

$nomesSeparados = explode(',', $nomes);

sort($nomesSeparados);

$nomesJuntos = implode(',', $nomesSeparados);

return $nomesJuntos;

}

$nomes = "Serenna,Thais,Icaro,Erilene,Kai,Presunto,Pudim";

$resultado = ordenarNomes($nomes);

echo $resultado;

?>
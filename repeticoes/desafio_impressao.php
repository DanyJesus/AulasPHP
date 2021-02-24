<div class="titulo">Desafio Impressão</div>
<!-- 
    Imprima apenas os valores do array que contŕm indice par
    Desafio adicional: Resolver com for e foreach
    Valores esperados: AAA, CCC, EEE
-->
<?php

$array = 
[
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE"
];

for($i=0; $i<count($array); $i=+2)
{
echo $array[$i].'\n';
}
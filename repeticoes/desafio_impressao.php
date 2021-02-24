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

for($i=0; $i< count($array); $i=$i+2)
{
echo $array[$i].'<br>';
}
echo "<br><hr><br>";

for($i=0; $i<count($array); $i++){
    if($i % 2 ===1)continue;
    echo "{$array[$i]}<br>";
}
echo "<br><hr><br>";
foreach($array as $indice => $valor){
    if($indice % 2 ===0) echo $valor.'<br>';
    else continue;
    
}
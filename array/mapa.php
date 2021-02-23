<div class="titulo">Mapa </div>
<?php

$dados =  array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);
echo '<br>'. $dados['idade'];
echo '<br>'. $dados['cor'];
echo '<br>'. $dados['peso'];
echo '<br>'. $dados['carinha'];

$lista = array(
    "a",
    "cinco"=>"b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);
print_r($lista);
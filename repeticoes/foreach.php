<div class="titulo">Foreach</div>

<?php

$array = [
    1000=>'Segunda', 
    'Terça', 
    'Quarta', 
    'Quinta',
     'Sexta', 
     'Sabado', 
     'Domingo'];

foreach($array as $valor){
    echo "$valor<br>";
}

foreach($array as $indice => $valor){
    echo "$indice=$valor<br>";
}
$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];
foreach($matrix as  $valor){
    foreach($valor as $linhas){
        echo $linhas.' ';
    }
}

/**
 * Pode alterar o valor de referencia com &
 */
$numeros = [1, 2, 3, 4, 5, 6];
 foreach($numeros as &$dobrar){
     $dobrar=$dobrar*2;
     echo $dobrar.' ';
 }
print_r($numeros);
<div class="titulo">Closure Callable</div>
<?php

$soma= function($a, $b){ return $a + $b; };
echo $soma(2, 3). '<br>';

echo (is_callable($soma) ? 'Sim' : 'Não') . '<br>';

function soma2($a, $b){ 
    return $a + $b;
 }
 echo soma2(8, 9). '<br>';
 echo (is_callable(soma2(2,3)) ? 'Sim' : 'Não') . '<br>';

 //var_dump($soma);

 function executar($a, $b, $op, Callable $funcao){
    $resultado = $funcao($a,$b)?? "Nada";
    echo "$a $op $b = $resultado<br>";
}
executar(5, 9, '+', $soma);
//executar(5, 9, '+', soma2(5,9));// não executa

function executar2($a, $b, $op, Closure $funcao){
    $resultado = $funcao($a,$b)?? "Nada";
    echo "$a $op $b = $resultado<br>";
}
executar2(5, 9, '+', $soma);
//executar2(5, 9, '+', soma2(5,9));// não executa
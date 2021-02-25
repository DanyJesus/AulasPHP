<div class="titulo">Funções Anônimas</div>
<?php
/*Uma variavel que recebe o valor d euma função*/
$soma= function($a, $b)
{
    return $a + $b;
};

echo $soma(1,2). '<br>';

function executar($a, $b, $op, $funcao){
    $resultado = $funcao($a,$b)?? "Nada";
    echo "$a $op $b = $resultado<br>";
}

executar(5, 9, '+', $soma);

$multipliacao= function($a, $b){
    return $a * $b;
};

executar(5, 2, '*',$multipliacao);

$divisao= function ($a, $b){
    return $a / $b;
};

executar(30, 2, '/', $divisao);

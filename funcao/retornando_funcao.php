<div class="titulo">Retornando Função</div>
<?php

function soma($a){
    return function($b) use($a){
        return $a + $b;
    };
}
/**
 * Função que retorna outra função
 * utilize use e a variavel em parentese para ser
 * utilizada na outra função
 */
echo soma(3)(3);
$doismais= soma(2);
/**
 * Já informa o primeir valor do parametro e
 *  depois informa o segundo
 */
echo '<br>'. $doismais(10);
echo '<br>'. $doismais(89);
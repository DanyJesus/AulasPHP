<div class="titulo">Recursividade</div>

<?php

function fatorial($numero)
{
    $tamanho = $numero;
    $resultado = $numero;
    for ($i = 1; $i <= $tamanho; $i++) {
        if($numero>1){
        echo "$numero *";
        $resultado*= $numero - 1;        
    }
    $numero--;
    
    }
    echo '1<br>' . $resultado;
}

function fatorial2($numero)
{
    $tamanho = $numero;
    $resultado = $numero;
    echo ' <br>'.$numero.'*';
    for ($i = $tamanho-1; $i>0; $i--) {
        echo "$i *";
        $resultado*=$numero-$i;
       }
    echo '<br>' . $resultado;
}
function fatorialSoma($numero)
{
    $tamanho = $numero;
    $resultado = $numero;
    echo ' <br>'.$numero.'+';
    for ($i = $tamanho-1; $i>0; $i--) {
        echo "$i +";
        $resultado+=$numero-$i;
       }
    echo '<br>' . $resultado;
}

function somaAteUm($numero){
    $soma=0;
    for(; $numero>=1; $numero--){
        echo "$numero +";
        $soma+=$numero;
    }
    return $soma;
}
function multiplicaAteUm($numero){
    $multi=1;
    for(; $numero>=1; $numero--){
        echo "$numero *";
        $multi*=$numero;
    }
    return $multi;
}

/**
 * Uma Função chamadno ela mesma Recursiva
 */

 function somaRecursiva($numero){
     if($numero==1){
         return 1;
     }
     echo "$numero+";
     return $numero+ somaRecursiva($numero-1);
 }
 function recursivaEconomica($numero){
     return $numero ===1 ? 1: $numero + recursivaEconomica($numero-1);
 }

fatorial(9);
fatorial2(9);
fatorialSoma(5);
echo '<br>';
echo '<br>'.somaAteUm(5);
echo '<br>';
echo '<br>'.multiplicaAteUm(9);
echo '<br>';
echo '1<br>'.somaRecursiva(5);

echo '<br>'.recursivaEconomica(5);

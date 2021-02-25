<div class="titulo">Argumentos Variáveis</div>
<?php
function soma($a , $b){
    return $a + $b;
}

echo soma(5,6,4,9,4).'<br>';

function somaCompleta(...$numeros){
    print_r($numeros);
    $soma=0;
    foreach($numeros as $num){
        $soma+= $num;
    }
    return $soma;
}
 //echo somaCompleta(1,2,3,4,5);

 $array = [6,7,8];
 echo '<br>'. somaCompleta(...$array);
/**
 * A partir do PHP 5.6 é possível incluir o indicador de lista de argumentos ... para 
 * informar que a função aceita um número variável de argumentos. Os argumentos 
 * serão passados  na forma de um array. Por exemplo. 
 * / */
 function membros($titular, ...$dependentes){
    echo "Titular: $titular<br>";
    if($dependentes){
        foreach($dependentes as $dep){
            echo "Dependentes: $dep<br>";
        }
    } 
 }

 echo "<br>";
 membros("Maria do Espírito", "Daniele", "Bruno");
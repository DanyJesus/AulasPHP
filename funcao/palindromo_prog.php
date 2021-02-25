<div class="titulo">Desafio Palindromo Prof</div>
<?php
function palindromo($palavra){
    $ultimoIndice= strlen($palavra)-1;

    for($i=0; $i<=$ultimoIndice; $i++){
        if($palavra[$i] !== $palavra[$ultimoIndice-$i]){
            return 'Não';
        }
    }
    return 'Sim';
}
function palindromoSimples($palavra){
    return $palavra===strrev($palavra)? "Sim" : "Não";
}

echo palindromo("A base do teto desaba.");
echo palindromoSimples("A base do teto desaba.");
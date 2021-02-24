<div class="titulo">Função & Escopo</div>


<?php
function imprimirMensagens(){
echo "Olá Mundo!!";
echo "Daniele Lindona!!<br>";
}

imprimirMensagens();
 $variavel= 1;
 function trocaValor(){
     $variavel =2;
     echo "Durante a função : $variavel <br>";
 }
 trocaValor();
echo "Antes: $variavel <br>";

function trocarValorVerdade()
{
    global $variavel;
    $variavel=3;
    echo "Durante a função $variavel<br>";
}
echo "Antes $variavel <br>";
trocarValorVerdade();
echo "Depois $variavel<br>";

var_dump(trocarValorVerdade());
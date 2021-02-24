<div class="titulo">Argumentos & Retornos</div>
<?php
function obterMensagem(){
    return "Sejam bem vindo!";
}

$mensagem= obterMensagem();
echo $mensagem;

function obterMensagemComNome($nome){
    return "<br>Bem vindo $nome<br>";
}

echo obterMensagemComNome("Daniele");

function soma($numero1, $numero2){
    $resultado= $numero1+$numero2;
    return $resultado;
}
 echo soma(25,89);
 /**
  * Para mudar o valor da variavel dentro d euma função é necessario parrar o endereço e não só o valor
    */

    function trocarValor($a, $novoValor){
        $a= $novoValor;
    }
    $variavel=1;
    trocarValor($variavel, 3);
    echo '<br>'. $variavel;
/**
 * Quando é passado o endereço da memoria pelo simbolo & e modificado o valor de origem
 */

 function trocarValorDeVerdade(&$a, $novoValor){
     $a= $novoValor;
 }
trocarValorDeVerdade($variavel, 5);
echo '<br>'. $variavel;
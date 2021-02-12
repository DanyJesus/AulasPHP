<div class="titulo">Valor por Referência</div>
<?php
/* Atribuição por referência
Atribuição é passado o valor de uma mvariavel para outra
JA a atribuição por Referência é passado o valor com o 
endereço de memoria. Ou seja se mudar um. Muda ambos.
*/

// Atribuição por Valor
echo "<p>Atribuição por Valor</p>";
$variavel= 'valor inicial';
echo $variavel;
$vaialvelValor = $variavel;
echo "<br> $vaialvelValor";
$vaialvelValor='novo valor';
echo "<br>$variavel";
echo "<br>$vaialvelValor";

// Atribuição por Referência
echo "<p>Atribuição por Referência</p>";
$variavelReferencia= &$variavel;
$variavelReferencia = 'mesma referência';
echo "$variavelReferencia = $variavel";
/**
 * No Valor de Referência quando altera o valor de um avariavel
 * é alteado o valor da variavel que tem a referência
 * Ou seja não é uma cópia independente
 */
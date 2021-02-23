<div class="titulo">Operações com Array</div>

<?php

$dados1 = [
    "nome" => "José",
    "idade" => 28
];

$dados2 = [
    "nome" => "Maria",
    "naturalidade" => "Fortaleza"
];

$dadosCompletos = $dados1 + $dados2;
/**
 * Quando houver ambiguidade de dados os dados do array do lado esquerdo vai ter preferencia
 */
print_r ($dadosCompletos);
/**
 * is_array() verifica se é um array ou não
 */
echo '<br>'. is_array($dadosCompletos);
/**
 * Quantos elementos tem um array
 */
echo '<br>'. count($dadosCompletos);
/**
 * array_rand() 
 */
$indice= array_rand($dadosCompletos);
echo "<br>$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo '<br>';
echo "${dadosCompletos['idade']}";
/**
 * unset apaga informação do array o valor é liberadi
 */
unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);
unset($dadosCompletos);
echo '<br>';
print_r($dadosCompletos);
var_dump($dadosCompletos);
$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);
/**
 * array_merge() mescla um ou mais arrays em um unico array
 */
$decimais= array_merge($pares, $impares);
echo '<br><br> Com array_merge<br>';
print_r($decimais);
/**
 * sort() coloca os elementos na ordem
 */
sort($decimais);
echo '<br><br>Sort() coloca os decimais na ordem<br>';
print_r($decimais);

<div class="titulo">Arrays constantes</div>
<?php
const FRUTAS = array( 'laranja', 'abacaxi');
//const FRUTAS = ['laranja', 'abacaxi']; duas formas de declarar constantes

//FRUTAS[0] = 'banana'; não é permetido alterar
//FRUTAS[]= 'banana'; também não pode acresecentar

echo FRUTAS[0];

const CARROS = ["fiat"=> "uno", "ford"=> "fiesta"];
echo '<br>'. CARROS["fiat"];

/**
 * Outra forma de define uma constante
 */

 define('CIDADES', array('Belo Horizonte', 'Recife'));

echo '<br>'. CIDADES[1];
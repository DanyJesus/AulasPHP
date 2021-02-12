<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;// CONSTANTES NÃO ACEITA $
const NOVA_TAXA=2.5;
echo '<br>' . NOVA_TAXA;

//Não pode
// $variavel= "José";
// const NOVISSIMA_TAXA = $variavel;
// echo  '<br>' .NOVISSIMA_TAXA;

//Pode 
$variavelValor= 2.8;
define('NOVISSIMA_TAXA', $variavelValor);// pelo define é possivel passar um avariavel para uma constante
 echo '<br>'. NOVISSIMA_TAXA;
//echo "<br> {NOVISSIMA_TAXA}";

const VALOR_TESTE =2.8 + 2.8;
echo '<br>'. VALOR_TESTE;

echo "<p>Outras Constantes</p>";
echo PHP_VERSION;
echo '<br>';
echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __DIR__;
/**
 * Uma vez definida uma constante não é possivel 
 * mudar seu valor 
 */


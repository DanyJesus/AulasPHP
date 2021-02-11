<div class="titulo">Variáveis variáveis</div>
<?php
$a= "valorA";
$$a='valorAA';
echo "$a {$$a} $valorA";

echo '<br>';
$epa= 'opa';
$opa= 'vish';
$vish = 'eita!!!!';
echo "$epa {$$epa}  {$$$epa}";
/**
 *Uma variável variável obtém o valor de uma variável e a trata como 
 *o nome de uma variável. No exemplo acima, epa pode ser utilizada 
 *como o nome de uma variável utilizando dois sinais de cifrão ou até 
 *com três sinais de cifrão: 
 */


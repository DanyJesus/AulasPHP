<div class="titulo">Variáveis</div>
<?php
$numeroA = 13;
echo $numeroA;
var_dump($numeroA);

echo '<br>';

$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;
$soma = 0;
echo '<br>';

 //unset($soma); // destroy variavel, remove as configurações d eum avariavel
echo isset($soma);//Verifica se a variavel foi iniciada
echo '<br>';

//Variaveis pr definidas
echo $_GET;
echo '<br>';
var_dump($_GET);
echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);
echo '<br>';

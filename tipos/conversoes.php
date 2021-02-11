<div class="titulo">Conversões</div>
<?php
echo is_int(PHP_INT_MAX); // is_int detecta se o paramentro é um inteiro ou não

// int para float
echo '<p>Int para Float</p>';

var_dump(PHP_INT_MAX +1);
echo '<br>' ;
var_dump(1 + 1.0);
echo '<br>'  ;
var_dump((float)3);

// float para int
echo '<p>Float para Int</p>';

var_dump((int)3.852);
echo '<br>'  ;
var_dump(intval(2.8,10)); // passar para base 10 decimal r= 2

echo '<br>';
var_dump(intval('1000111010',2));// passar para binário

// Arredondar
echo '<p>Arredondar</p>';
var_dump((int)round(2.8));// Arredonda e muda o tipo da variavel
echo '<br>';
var_dump(round(2.8));// Arredonda e permanece tipo da variavel

// Operação com string
echo '<p>Strings</p>';
var_dump(3 + "2");
echo '<br>';
var_dump(3 . "2");
echo '<br>', is_string("3" + 2);// não retorna porque é um inteiro 5
echo '<br>', is_string("3" . 2); // retorna 1 porque é uma string
echo '<br>';
var_dump(1 + "3.2");
echo '<br>';
var_dump((int) "10.5");
var_dump(1 + "cinco");// retorna nada

var_dump(1 + "5 cinco");// não retorna nada 




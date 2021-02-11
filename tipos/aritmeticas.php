<div class="titulo">Operações Aritméticas</div>
<?php

echo 1 + 1 . '<br>';
var_dump(1 + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>', 1 + 2.5 , '<br>';
echo 10 - 2, '<br>' ;
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7,4);// Divisão
echo '<br>';

echo round(7/4), '<br>'; // Arrendodar o resiltado
echo 7 % 4, '<br>';
echo 7 % 2, '<br>';
echo 8 % 2, '<br>';
//echo 7 / 0, '<br>';
//echo intdiv(7,0), '<br>'; //erro!
echo 4 ** 2, '<br>';

// Precedências dos Operadores
/* 
() => ** => / % => + -
*/

echo '<p>Precedências</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>' ;
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) **2;





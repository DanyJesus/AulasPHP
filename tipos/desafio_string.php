<div class="titulo">Desafio String</div>
<?php

/* Enunciado:
Avaliando os métodos da documentação da string, qual o método que a 
posição do texto 'abc' na string
!AbcaBcabc
retorna 1?
*/
$texto= "!AbcaBcabc";
$texto2= "abc";
echo stripos($texto, $texto2);
//Encontre a posição da primeira ocorrência de 
//"abc" dentro da string fazendo diferença entre maiusculas e minusculas
echo '<br>';
echo strpos($texto, $texto2);
//Encontre a posição da primeira ocorrência de 
//"abc" dentro da string conciderando maiusculas e minusculas
<div class="titulo">Tipo String</div>
<?php

echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");

//Concatenação
echo "Nós também". ' somos';
echo '<br>', "Também aceito", "virgulas";
echo '<br>';
echo "'Teste'". ' "Teste"'. ' \'Teste\''. " \"Teste\"";

print("<br>Também existe a função print");
print"<br>Também existe a função print";
echo ("<br>Nós também". ' somos');
 //Algumas funções
 echo '<br>' . strtoupper('maximizado'); //Coloca todas as letras em maiúsculas
echo '<br>' . strtolower('MINIMALIZA');// Coloca cada letra em minuscula
echo '<br>' . ucfirst('só a primeira letra'); //Coloca só a primeira letra em maiúscula.
echo '<br>' . ucwords('todas as palavras'); // COloca todas as primeiras letra das palavras em maiúsculas
echo '<br>' . strlen("Quantas letras");// imprime a quantidade de caracteres
echo '<br>' . mb_strlen("Quantas letras não conta acento", "utf-8"); // Imprime a quantidade de caracteres sem contar os acentos.
echo '<br>' . mb_strlen("Qunatas letras não conta acentos"); // Faz o mesmo do anterios 
echo '<br>' . substr("Só um parte mesmo", 7, 6);//Ele pula a quantidade do segundo parametro e imprime até a quantidade do segundo parametro.
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso');// troca no terceiro parametro a palavra informada no primeiro parametro pela do segundo parametro

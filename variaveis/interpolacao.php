<div class="titulo">Interpolação</div>
<?php
$numero= 10;
echo $numero;
echo '<br>$numero';
echo "<br>$numero"; // Interpolação interpreta o valor da variavel
echo "<br>$numero + 1"; // Não reconhece o numero 1
$objeto="Caneta";
echo "<br>Eu tenho 5 $objetos"; // Não imprime o valor da variavel
echo "<br>Eu tenho 5 {$objeto}s";//Para aparecer o 's' apos a palavra contida na variavel
echo "<br>Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s"; // o espaço anterior não da certo

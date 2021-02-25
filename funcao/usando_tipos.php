<div class="titulo">Usando Tipos</div>
<?php
function somar1($a, $b){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}
echo somar1(5,9). '<br>';
echo somar1(1.5,2.9). '<br>';
echo somar1(5,"1um"). '<br>';

echo "<br><hr><br>";

function somar2(int $a, int $b){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}
echo somar2(5,9). '<br>';
echo somar2(1.5,2.9). '<br>';
//echo somar2(5,'5um'). '<br>';

echo "<br><hr><br>";

function somar3($a, $b):int {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
    
}
echo somar3(5,9). '<br>';
echo somar3(1.5,2.9). '<br>';
echo somar3(5,'5um'). '<br>';
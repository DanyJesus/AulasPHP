<div class="titulo">While/Do While</div>

<?php


$i=0;
const VALOR_LIMITE = 5;

while($i<VALOR_LIMITE){
    echo "while $i<br>";
    $i++;
}
echo '<br><hr><br>';
do{
    echo "do while $i<br>";
    $i++;
}while($i<10);
echo '<br><hr><br>';
$a=0;
while(true){
    echo "while(true) $a <br>";
    $a++;
    if($a >= VALOR_LIMITE)break;
}
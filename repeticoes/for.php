<div class="titulo">Laço For</div>


<?php

for($cont=1; $cont<= 5; $cont++){
echo "<br>$cont" ;
}
for(; $cont<=10; $cont++){
    echo "<br>$cont";
}
echo '<br>';
for(; $cont<=15;){
    echo "$cont<br>";
    $cont++;
}
$array = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado', 'Domingo'];
print_r($array);
echo '<br><hr>';
for($cont=0; $cont<=6; $cont++){
    echo "$array[$cont]<br>";
}
echo "Nova contagem<br>";

for ($i=0; $i< count($array); $i++){
    echo "$array[$i]<br>";
}
$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];
 for($i=0; $i <= count($matrix); $i++){
       for($f=0; $f<= count($matrix[$i]); $f++){
        echo "{$matrix[$i][$f]}";
    }
 }
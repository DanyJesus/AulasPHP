<div class="titulo">Operadores Relacionais</div>

<?php
/**
 * ==   comparação
 * >    maior que
 * >=   maior igual a 
 * !=   diferente
 * <>   diferente
 */

var_dump(1 == 1);
echo '<br>';
var_dump(1 === 1); // igualdade estrita compara também o tipo
echo '<br>';
var_dump(1 === "1"); 
echo '<br>';
var_dump(1 !== "1"); //diferença estrita true
echo '<br>';
var_dump(1 != "1"); //comparação de valor false

echo '<p>Relacionais no if e Else</p><hr>';
$idade = 15;
if($idade<18){
    echo "Menor de idade = $idade<br>";
}elseif($idade>=18 & $idade<65){
    echo "Adulto = $idade <br>";
}else{
    echo "Idoso = $idade <br>";
}

if($idade<18){
    echo 'Menos de idade';
}elseif($idade<=65){
    echo 'Adulto';

}else{
    echo 'Idoso';
}

echo '<p>Spaceship</p><hr>';
?>
<style>
p{
    margin-bottom: 0px;
}
hr{
    margin-top:0px;
}
</style>
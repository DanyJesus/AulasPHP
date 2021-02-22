<div class="titulo">Operadores Logicos</div>
<?php
echo '<p>V ou F</p>';
var_dump(true);
echo '<br>';
var_dump(!true);// até duas exclamações
echo '<br>';
echo "<p class='topicos'>Tabela verdade 'AND' (E)</p><hr>";
var_dump(true && true);
echo '<br>';
var_dump(true && false);
echo '<br>';
var_dump(false && true);
echo '<br>';
var_dump(false and false);
echo '<br>';
var_dump(true and true);
echo '<br>';
var_dump(true and false);
echo '<br>';
var_dump(false and true);
echo '<br>';
var_dump(false and false);
echo "<p class='topicos'>Tabela verdade 'OR' (OU)</p><hr>";
var_dump(true || true);
echo '<br>';
var_dump(true || false);
echo '<br>';
var_dump(false || true);
echo '<br>';
var_dump(false || false);
echo '<br>';
var_dump(true or true);
echo '<br>';
var_dump(true or false);
echo '<br>';
var_dump(false or true);
echo '<br>';
var_dump(false or false);
echo "<p class='topicos'>Tabela verdade 'XOR' (OU Exclusivo)</p><hr>";
var_dump(true xor true);
echo '<br>';
var_dump(true xor false);
echo '<br>';
var_dump(false xor true);
echo '<br>';
var_dump(false xor false);
echo '<br>';
var_dump(true != true);
echo '<br>';
var_dump(true != false);
echo '<br>';
var_dump(false != true);
echo '<br>';
var_dump(false != false);

echo "<p>Exemplo</p><hr>";
$idade= 60;
$sexo= 'M';
if($idade>=60 && $sexo ==='F'){
    echo "Pode se aposentar -> $sexo";
}else if($idade >= 65 && $sexo==='M'){
    echo "Pode se aposentar ->$sexo";
}else{
    echo 'Vai er que trabalhar mais um pouco';
}


?>
<style>
p{
    margin-bottom: 0px;
}
hr{
    margin-top:0px;
}
.topicos{
   color: blue;

}
</style>
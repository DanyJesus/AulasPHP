<div class="titulo">Operador Ternário</div>
<?php
$idade= 70;
$status;
if($idade>=18){
    $status= "Maior de Idade";
}else{
    $status = "Menor de Idade";
}
echo $status, $idade;

$idade= 15;

$status= $idade>=18 ? "Maior de Idade" : "Menor de Idade";
//      expressão  caso for Verdadeiro     caso for Falso
//O operador ternario é seguido de ? e logo após :
echo '<br>'.$status, $idade;
$idade= 80;
$status= ($idade >= 18 ?($idade >= 65 ? 'Aposentado' : 'Maior de Idade' ): 'Menor de Idade');
     //                    1º a ser executado 
echo '<br>'.$status, $idade;

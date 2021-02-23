<div class="titulo">Multidimensionais</div>
<?php
$dados = [
    [
        "nome" =>"Daniele",
        "idade" => 27,
        "sexo" => "Femenino"
    ],
    [
        "nome" =>"Bruno",
        "idade" => 26,
        "sexo" => "Masculino"  
    ],
    [
        "nome" =>"Maria",
        "idade" => 54,
        "sexo" => "Femenino"
    ],
    [
        "nome" =>"Galvão",
        "idade" => 65,
        "sexo" => "Masculino"
    ]
];

print_r($dados);
echo "<br> {$dados[0]['idade']}";
echo "<br> {$dados[3]['nome']}";
echo "<br> {$dados[2]['sexo']}";
/**
 * Acrescentar informação sem sobreescrever
 */
$dados [] =[
    "nome" => "Florinda",
    "idade" => 30,
    "sexo"  => "Femenino"
];
echo '<br>Acrecentando informação sem sobreescrever<br>';
print_r($dados);

/**
 * Acrescentando novos atributos dentro de um array
 */
$dados[2]["naturalidade"] = "Piauí";
echo '<br>';
print_r($dados[2]);

/**
 * Ao remover  array indice um o php não reordena os array tera'0 ,2 ,3
 */
unset($dados[1]);
echo '<br><br>APAGANDO ARRAY 1<br>';
print_r($dados);
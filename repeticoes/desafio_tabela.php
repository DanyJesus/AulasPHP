<div class="titulo">Desafio Tabela #01</div>

<?php
$matriz = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20']
];
?>
<table>
   
        <?php
        foreach ($matriz as $array1) {
            echo "<tr>";
            foreach ($array1 as $array2) {
                echo "<td>$array2</td>";
            }
            echo "</tr>";
        }
        ?>
 
</table>

<table>
    <?php 
        foreach($matriz as $indice =>$linhas){
            $style= $indice % 2 === 1 ?"background-color:lightblue;" : " ";
            echo "<tr style='{$style}'>";
            foreach($linhas as $valor){
                echo  "<td>$valor</td>";
            }
            echo "</tr>";
        }
    ?>
</table>
<style>

tr:nth-child(odd) {background-color: #87CEEB;}/*even numeros impares */
/* tr:nth-child(even) {background-color: #87CEEB;}even numeros pares */
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table td {
        border: 1px solid #444;
        padding: 10px 20px;
    }
</style>
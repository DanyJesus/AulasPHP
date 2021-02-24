<div class="titulo">Desafio Tabela #02</div>
<form action="#" method="post">
    <label for="coluna">Quantidade de Colunas:</label>
    <input type="number" name="coluna" id="coluna">

    <label for="linhas">Quantidade de linhas</label>
    <input type="number" name="linhas" id="linhas">

    <input type="submit" value="Criar">

</form>

<?php
if(isset($_POST['coluna']) & isset($_POST['linhas'])){
    $linhas= $_POST['linhas'];
    $colunas= $_POST['coluna'];

    echo "<table>";
        for($i=0; $i<$linhas; $i++){
           echo "<tr>";
            for($j=0; $j<$colunas; $j++){
                echo "<td>$linhas</td>";
        }
            echo "<\tr>";
    }
    echo "</table>";

}
?>
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
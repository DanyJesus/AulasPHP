<div class="titulo">Desafio Sorteio</div>

<form action="#" method="post">
    <input type="submit" name="sorteio" value="Clique aqui">
</form>
<?php
if (isset($_POST['sorteio'])){
    $nomes= ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];
    $sorteado= array_rand($nomes);
    echo "<h1>$nomes[$sorteado]</h1>";
}
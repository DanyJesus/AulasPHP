<div class="titulo">Argumentos Padrão</div>
<?php
function saudacao($nome="Senhor(a)", $sobrenome="Cliente"){
    echo "Bem vindo, $nome $sobrenome!<br>";
}
saudacao();
saudacao(null);
saudacao(null, null);
saudacao("Daniele", "Galvão");

function anotarPedido($comida, $bebida='Água'){
    echo "Para comer $comida<br>Para Beber: $bebida<br>";
}
anotarPedido("Pizza");
anotarPedido("Churrasco", "Suco de Uva");
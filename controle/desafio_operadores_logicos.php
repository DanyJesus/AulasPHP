<div class="titulo">Desafio Operadores Lógicos</div>
<!-- Dois Trabalhos -> terça e quinta!
- Se os dois forem executados - > TV 50' e sorvetes
- Se apenas um for executado - > TV 32' e Sorvete
- Se nenhum for executado -> Fica em casa mais saudável!
 -->
<form action="#" method="post">
    <div>
        <label for="t1"> Trabalgo 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>

    <div>
        <label for="t2"> Trabalgo 2(Quinta Feira):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
button,
select {
    font-size: 1.8rem;

}
</style>
<?php
if(isset($_POST["t1"]) && isset($_POST["t2"])){
    $t1= $_POST['t1'];
    $t2= $_POST['t2'];

    if($t1 && $t2){
        echo 'Se os dois forem executados <br>';
        echo 'Será TV 50 e sorvetes';
    }
    else if( $t1 xor $t2){
        echo 'Se apenas um for executado  <br>';
        echo 'Será TV 32 e Sorvete';
    }else{
        echo 'Se nenhum for executado';
        echo '-> Fica em casa mais saudável!';
    }
}
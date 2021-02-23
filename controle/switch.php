<div class="titulo">Switch</div>
<form action="#" method="post">
    <label for="categoria">Categoria</label>
    <select id="categoria" name="categoria">

        <option value="luxo">Luxo</option>
        <option value="suv">SUV</option>
        <option value="sedan">Sedan</option>
        <option value="" selected>Escolha Categoria</option>
    </select>

    <!-- <label for="preco" >Preço</label>
<input type="number" name="preco" id="preco">

<label for="carro" >Carro</label>
<select id="categoria" name="categoria">
    <option value="mercedes"  >Mercedes</option>
    <option value="renegade" >Renegade</option>
    <option value="etios" >Etios</option>
</select> -->

    <button>Enviar</button>
</form>
<?php

if (isset($_POST['categoria'])) {
    $categoria = ucfirst($_POST['categoria']);
    $preco = 0.0;
    $carro = '';
    // if ($categoria === 'Luxo') {
    //     $carro = 'Mercedes';
    //     $preco = '250000';
    // } else if ($categoria === 'Suv') {
    //     $carro = 'Renegade';
    //     $preco = '80000';
    // } else if ($categoria === 'Sedan') {
    //     $carro = 'Etios';
    //     $preco = '55000';
    // } else {
    //     echo '<span style="color:red;">Categoria invalida</span>';
    // }
    // $precoFormatado = number_format($preco, 2, ',', '.');
    // echo "<p>Carro: $carro<br>Preco: $precoFormatado<br>Categoria:$categoria</p>";
    switch($categoria){
        case 'Luxo':
            $carro = 'Mercedes';
            $preco = '250000';
            break;
        case 'Suv':
        case 'suv':
            //aceita mais de uma case
            $carro = 'Renegade';
            $preco = '80000';  
            break;
        case 'Sedan':
            $carro = 'Etios';
            $preco = '55000';
            break;
        default:
        echo '<span style="color:red;">Categoria invalida</span>';
        break;
    }
    $precoFormatado = number_format($preco, 2, ',', '.');
    echo "<p>Carro: $carro<br>Preco: $precoFormatado<br>Categoria:$categoria</p>";

}

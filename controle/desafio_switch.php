<div class="titulo">Desafio Switch</div>
<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > km</option>
        <option value="km-metro">Km > Metro</option>
        <option value="celsius-f">Celsius > Fahrenheit</option>
        <option value="f-celsius">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>
<style>
  /* qualque elemento que está diretamente associado a form */
    form>* {
        font-size: 1.8rem;
    }
</style>
<?php

if (isset($_POST['param'])) {
    $valor = $_POST['param'];
    $tipo = $_POST['conversao'];
    /**
     * S e o valor não vier cetado
     * $param = $_POST['param] ?? 0;
     */

    if ($valor > 0) {

        switch ($tipo) {
            case 'km-milha':
                $resultado = ($valor * 0.6214)." mi";
                break;
            case 'milha-km':
                $resultado = ($valor * 1.60934)." km";
                break;
            case 'metro-km':
                $resultado = ($valor * 0.001). " km";
                break;
            case 'km-metro':
                $resultado = ($valor * 1000). "m";
                break;
            case 'celsius-f':
                $resultado =(($valor *9/5)+32). "º F";
                break;
            case 'f-celsius':
                $resultado= (($valor-32)*5/9). "º C";
                break;   
        }
    }else{
        echo '<span style="color:red;">Valor Nulo</span>';
    }
    echo "<p> $resultado </p>";
}

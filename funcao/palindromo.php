<div class="titulo">Desafio Palindromo</div>
<a href="exercicio.php?dir=funcao&file=palindromo_prog">Exemplo Professor</a>
<form action="#" method="post">
    <label for="texto">Informe um Nome para descobrir se é um Palindromo ou não:</label>
    <input type="text" name="texto" id="texto">
    <input type="submit" value="Enviar">

</form>
<?php
if (isset($_POST['texto'])) {
    $texto = $_POST['texto'];
    $tamanho = strlen($texto);

 

  

        // echo $tamanho;
        $invertido = "";
        for ($i = $tamanho; $i >= 0; $i--) {
            $invertido .= $texto[$i];
        }
            $texto = strtoupper($texto);
            $invertido = strtoupper($invertido);
            
        if (strcasecmp($texto, $invertido) == 0) {
            echo "$texto é um palindromo";
        } else {
           echo "$texto não é um  palindromo: $invertido";
        }
    
}

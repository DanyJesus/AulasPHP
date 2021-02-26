<div class="titulo">Construtor e Destrutor</div>
<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        echo "Construtor Invocado<br>";
        $this->nome= $nome;
        $this->idade= $idade;
    }

    function __destruct()
    {
        echo "Destruido!";
    }
    public function apresentar(){
echo "Nome= $this->nome <br>Idade= $this->idade<br>";
    }
   
}
$nome1= new Pessoa("Daniele", 28);
$nome1->apresentar();
//unset chaka o destruct
//unset($nome1);
$nome1=null;

<div class="titulo">Herança</div>
<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome=$nome;
        $this->idade= $idade;
        echo "Pessoa Criada!";
    }
    function __destruct()
    {
        echo "Destruido Pessoa";
    }   
    public function apresentar(){
        echo "Nome= $this->nome<br>Idade=$this->idade<br>";
    }


}

class Usuario extends Pessoa{
    public $login;

    function __construct($nome, $idade,$login){
        // $this->nome=$nome;
        // $this->idade=$idade;
        $this->login=$login;
        parent::__construct($nome, $idade);
    }
    
    function __destruct()
    {
        echo "Destruido Usuario";
        parent::__destruct();
    } 

    // public function apresentar(){
    //     echo "@$this->login<br> Nome= $this->nome<br>Idade=$this->idade<br>"; 
    // } 
    
    public function apresentar(){       
        echo "Bem Vindo!! @$this->login<br>";
        parent::apresentar();
    } 
}

$usuario = new Usuario('Daniele', 21, "daniJesus");
$usuario->apresentar();

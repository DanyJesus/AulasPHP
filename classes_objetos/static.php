<div class="titulo">Membro Estático</div>

<?php
class A{
    public $naoStatic='Variável de instância';
    public static $static='Variável de classe';

public function mostrarA(){
    echo "Não estático = $this->naoStatic <br>";
    //Tentativa 1
 //utilizava "self" basicamente para chamar métodos estáticos ou a
 //cessar atributos estáticos da classe. O que descobri é que ele 
 //também serve para instanciar um objeto da classe corrente.
    echo "Estática= ".self::$static."<br>";

}
}
$objetoA= new A();
$objetoA->mostrarA();
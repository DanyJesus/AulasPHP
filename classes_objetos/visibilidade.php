<div class="titu">Visibilidade</div>
<?php
class A{
    public $publico= 'Público';
    protected $protected= 'Protected';
    private $private= 'Private';

    public function mostrarA(){
        $this->naoMostrar();
        echo "Classe A) Publico= $this->publico<br>";
        echo "Classe A) Protected= $this->protected<br>";
        echo "Classe A) Private= $this->private<br>";
    }
    private function naoMostrar(){
        echo 'Não vai mostrar<br>';
    }
}
$a = new A();
$a->mostrarA();
 class B extends A{
     public function mostrarB(){
        echo "Classe B) Publico= $this->publico<br>";
        echo "Classe B) Protected= $this->protected<br>";
        echo "Classe B) Private= $this->private<br>";
     }
 }
echo '<br><hr><br>';
 $b= new B();
 $b->mostrarB();
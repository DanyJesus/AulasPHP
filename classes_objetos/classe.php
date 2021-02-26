<div class="titulo">Primeira Classe</div>
<?php
class Cliente {
    //atributos
    public $nome= 'Anônimo';
    public $idade= 18;

    //função Metodos
    public function apresentar(){
        echo 'Nome= '.$this->nome. " Idade:= $this->idade<br>";
    }
    public function apresentar2(){
        return 'Nome= '.$this->nome. " Idade:= $this->idade<br>";
    }

}
 $c1= new Cliente();
 $c1->nome= "Daniele Ferreira";
 $c1->idade= 27;
 $c1-> apresentar();

 $c2= new Cliente();
 $c2->nome= "Fome e Sono";
 $c2 -> idade=1000;
 $c2->apresentar();
 echo '<br><hr><br>';
echo $c2->apresentar2();
echo $c1->apresentar2();
 
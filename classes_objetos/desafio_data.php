<div class="titulo">Desafio Data</div>
<?php
class Data{
    public $dia=01;
    public $mes= 01;
    public $ano = 1970;

    function apresentarData(){
        echo "$this->dia / $this->mes / $this->ano<br>";
    }
}

$data= new Data();
$data->apresentarData();
$data->dia=28;
$data->mes= 04;
$data->ano=1993;
$data->apresentarData();
echo date("d m Y h:i:s");
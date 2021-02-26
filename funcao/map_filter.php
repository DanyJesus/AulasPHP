<div class="titulo">Map & Filter</div>

<?php

$notas= [5.8, 7.3, 9.8, 6.7];

$notasFinais1=[];

foreach($notas as $nota){
    $notasFinais1[]= round($nota);
   
}
foreach($notasFinais1 as $nota){
    echo $nota. ', ';
}
echo '<br>';
print_r($notasFinais1);
echo '<br>';
/**
 * Ultilizando o array_map() a função deve esta 
 * entre aspas apartir php 8;
 * array_map() retorna um array contendo todos 
 * os elementos de array1 depois de aplicada uma 
 * determinada função callback em cada um. 
 */
$notasFinais2= array_map("round", $notas);
print_r($notasFinais2);
 /**
  * Array_filter()
  * array_filter — Filtra elementos de um array 
  * utilizando uma função callback . Se for verdadeiro ele passa 
  * pra o novo array se for falso não é passado para o novo array
  */
  /**
   *  Itera sobre cada valor de array passando-os para a função callback. 
   * Se a função callback retornar true, o valor atual de array é retornado
   *  na matriz resultado. As chaves do array são preservadas. 
   */
  function aprovados($notas){
      return $notas >= 7;
  }
  echo '<br>';
  $apenasAprovados= array_filter($notas, "aprovados");
  print_r($apenasAprovados);

  /**
   * Ouro Exemplo
   */
  function calculoLegal($nota){
      $notaFinal= round($nota)+1;
      return $notaFinal>10 ? 10 : $notaFinal;
  }
  echo '<br>';
  $notasFinais3= array_map("calculoLegal", $notas);
  print_r($notasFinais3);


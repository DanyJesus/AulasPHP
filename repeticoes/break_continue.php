<div class="titulo">Break/Continue</div>
<?php
$cont = 1;
for(;;){
    echo "$cont\t";
    $cont++;
    if($cont>10){
        break;
    }
}
echo "<br><hr>";
for(;;){
  $cont++;
  if($cont % 2 === 1 ){
      continue;
  }  
  echo "$cont<br>";
  if ($cont>=30){
      break;
  }
}
echo "<br><hr>";

foreach(array(1, 2, 3, 4, 5, 6, 7, 8 ,9 ) as $valor){
  if($valor===9)break;
  if($valor % 2 === 0)continue;
  echo "$valor  ";
}
echo "fim!";

<div class="titulo">Break/Continue</div>
<?php
$cont = 1;
// for(;;){
//     echo "$cont\t";
//     $cont++;
//     if($cont>1001){
//         break;
//     }
// }

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
echo "fim!";
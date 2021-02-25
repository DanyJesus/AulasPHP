<div class="titulo">Desafio Recursão</div>
<?php
/**
 * $array= [1, 2, [3, 4, 5], 6, [7, [8, 9],], 10];
 * >1
 * >2
 * >>3
 * >>4
 * >>5
 * >6
 * >>7
 * >>>8
 * >>>9
 * >10
 */

 //function recursao($array){
   
  // }
//}
 $array= [1, 2, [3, 4, 5], 6, [7, [8, 9],], 10];
 //recursao($array);

       
   //var_dump($array);
 /*  array(6) { [0]=> int(1) 
              [1]=> int(2)
 [2]=> array(3) { [0]=> int(3)
                  [1]=> int(4)
                  [2]=> int(5) }
              [3]=> int(6)
 [4]=> array(2) {
                   [0]=> int(7) 
 [1]=> array(2) { [0]=> int(8) 
                  [1]=> int(9) } 
            } [5]=> int(10) }
*/
function imprimirArray($array, $nivel='>'){
    foreach($array as $ar){
        if(is_array($ar)){
            imprimirArray($ar, $nivel. $nivel[0]);
        }else{
            echo "$nivel $ar<br>";
        }
    }
   
}
imprimirArray($array);
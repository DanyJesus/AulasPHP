<div class="titulo">Tipo Booleano</div>
<?php

echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

//Fazer as regras de conversões

echo '<p>Regras:</p>';
echo '<br>'.var_dump((bool)0);//apenas zero é false
echo '<br>'.var_dump((bool)20);
echo '<br>'.var_dump((bool)-1);
echo '<br>'.var_dump((bool)0.0);
echo '<br>'.var_dump((bool)0.00000000);
echo '<br>'.var_dump((bool)"");// false
echo '<br>'.var_dump((bool)" ");
echo '<br>'.var_dump((bool)"0"); //false
/**Qualquer número diferente de 0 será true
 * Tambem tem como converter pelo var_dump por outros tipos
 * var_dump((float)5); 
 */
echo '<br>'.var_dump(!20);// com negação tambem retorna booleano
echo '<br>'.var_dump(!"false");
echo '<br>'.var_dump(!!"false");

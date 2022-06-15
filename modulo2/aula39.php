<?php

#VERIFICA SE A ESTRUTURA É UM ARRAY
echo "Função: is_array() - ";
echo "\n";
echo "Valor = [] -" . is_array([]);
echo "\n";
echo "Valor = array() -" . is_array(array());
echo "\n";
echo "Valor = [] - " . is_array([1,2,3]);
echo "\n";
echo "Valor = 1 - " . is_array(1); //false
echo "\n";
#RETORNA A QUANTIDADE DE ELEMENTOS DO ARRAY

echo "FUNÇÃO COUNT()" . "\n";
echo "\n";
echo "Valor = [1,2,3,4] - " . count([1,2,3,4]) . "\n";
echo "Valor = range(0,1000) - " . count(range(0,1000)) . "\n";
echo "\n";

#VERIFICA SE UM ELEMENTO ESTÁ CONTIDO
echo "FUNÇÃO IN_ARRAY(valor, array)" . "\n";
echo "Valor = in_array(2, [1,2,3,4,5]) - " . in_array(2, [1,2,3,4,5]) . "\n";
echo "Valor = in_array(6, [1,2,3,4,5]) - " . in_array(6, [1,2,3,4,5]) . "\n";

#ORDENAÇÃO

echo "FUNÇÃO SORT()" . "\n";
$arr = ["c", "a", "b", "f"];
sort($arr);
print_r($arr);
echo "\n";

#INVERSÃO	
echo "FUNÇÃO: array_reverse()" . "\n";
$arr = [1,2,3,4,5];
$arr = array_reverse($arr);
print_r($arr);

echo "\n";

#SOMA DE UM ARRAY
echo "FUNÇÃO: array_sum()" . "\n";
$arr = [1,2,3,4,5];
$arr = array_sum($arr);
print_r($arr);
echo "\n";

#JUNÇÃO DE ARRAYS
echo "FUNÇÃO: array_merge()" . "\n";
$arr1 = [1,2,3,4,5];
$arr2 = [6,7,8,9,10];
$x = array_merge($arr1, $arr2);
print_r($x);
?>
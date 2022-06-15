<?php

#Definindo o array
$arr = ["zero", "um", "dois", "três", "quatro"];

#Adicionando elementos
$arr[] = "cinco";

#Alterando Elementos
$arr[1] = 'ummmmm';
$arr[4] = 'quatrooooo';

#Excluindo elementos
unset($arr[3]);

print_r($arr);

?>
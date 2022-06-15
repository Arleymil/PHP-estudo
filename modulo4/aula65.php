<?php

#FUNÇÕES PARA MANIPULAR STRING

#FUNÇÃO - QUANTIDADE DE CARACTERS - strlen()

$len = strlen("123456abc");

echo "Quantidade de caracteres: $len \n";

#FUNÇÃO - RETORNA UM PEDAÇO DE UMA STRING - substr(<string>, <indice>, <len>)

$str = 'aaabbbccc';
$sub = substr($str, 3, 3);


echo "A parte retornada é: $sub \n";

#FUNÇÃO - CONVERTE PARA LETRAS MAIÚSCULAS - strtoupper(<string>)

$str = 'eXcript';
$up = strtoupper($str);

echo "A string convertida em Maiúsculo: $up \n";

#FUNCAO - CONVERTE PARA LETRAS MINÚSCULAS - strtolower(<string>)
$low = strtolower($str);

echo "A string convertida em Minúsculo: $low \n";

#FUNÇÃO -  SUBSTITUI UMA PARTE DE UMA STRING POR OUTRA - substr_replace(<string>, <string>, <indice>, <len>)

$str = '123456789';
$sub = substr_replace($str, 'abc', 3, 3);


echo "A parte retornada é: $sub \n";

# FUNCAO - SUBSTITUI UMA PARTE DE UMA STRING POR OUTRA - str_replace(<string>, <string>, <string>)


$str = '123456789';
$sub = str_replace('3', 'abc', $str);


echo "A parte retornada é: $sub \n";


?>
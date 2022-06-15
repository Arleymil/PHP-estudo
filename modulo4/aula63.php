<?php

#string double-quoted

#concatenar a+b
#interpolar

$num = 55;

echo "O valor de num é " . $num . "\n";
echo "O valor de num é $num \n";

$arr = ["preto", "azul", "verde"];
echo "A cor da bola é $arr[1] \n";

$a = 10;
$$a = 50;

echo "O valor de a é: $a e o valor de aa é ${$a} \n";

${$arr[2]} = 'Marrom';

echo "Var: $arr[2], ${$arr[2]} \n";
?>
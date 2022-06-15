<?php

define("teste", 10);

echo teste ;

for($x=0; $x<5; $x++) {
    define("CONSTANTE".$x, $x);
}
//imprimir constante
echo "CONSTANTE0"; //sem aspas

echo "\n";
const valor = 1000;

echo valor;

?>
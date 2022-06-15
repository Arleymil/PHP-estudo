<?php

#FUNÇÕES ANÔNIMAS

$func = function($nome){
    echo "O nome enviado como parâmetro foi: $nome";
};

function teste($f){
    $f("Cláudio");
}

//$func('Arley');
teste($func);

?>
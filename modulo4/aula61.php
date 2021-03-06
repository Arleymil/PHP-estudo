<?php

#PRÁTICA - FUNÇÕES ANÔNIMAS

$quadrado = function($item){
    return $item * $item;
};

$cubo = function($item) use ($quadrado){
    return $quadrado($item) * $item;
};
$soma = function($item){
    return $item + $item;
};

function processa_lista($lista, $func){
    foreach($lista as &$item){
        $item = $func($item);
    }
    return $lista;
}

//print_r (processa_lista(
//    range(1,10), 
//    function($item){
//        return $item - 10;
//    }
// ));
    echo "QUADRADO\n";
    print_r (processa_lista(range(1,10), $quadrado));

    echo "CUBO\n";
    print_r (processa_lista(range(1,10), $cubo));

    echo "SOMA\n";
    print_r (processa_lista(range(1,10), $soma));
?>
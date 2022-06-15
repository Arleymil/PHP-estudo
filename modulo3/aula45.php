<?php

function media(...$valores){

    $total = array_sum($valores) / count($valores);
    return $total;
}

echo media(5,5,5);
?>
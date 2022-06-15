<?php

#FUNÇOES COM PARAMÊTROS TIPADOS

function getArea(int $x, int $y){

    return $x * $y;
}

function getSum(int...$valores){

    return array_sum($valores);
}

echo"A área total é ". getArea(10, 5) . "\n";
echo getsum(1,2,3,4,5, "100");
?>
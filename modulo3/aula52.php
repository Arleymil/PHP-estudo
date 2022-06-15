<?php

#Valores de retorno tipados

function cubo(float $num) : float 
{
    return $num * $num * $num;
}

function teste(): array
{
    return [10 , "arley", 5.1];
}	



var_dump(teste ());

echo  cubo(10);


?>
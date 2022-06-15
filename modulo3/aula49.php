<?php

$a = [1,2,3];

function func (&$arg){
    $arg[1] = 5;
    print_r($arg);
}

func($a);
print_r($a);
?>
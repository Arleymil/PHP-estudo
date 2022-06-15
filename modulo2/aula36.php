<?php

$nums = range(0,10);
//print_r($nums);


foreach ($nums as $chave => &$valor){
    $valor *= 10;
    echo "$valor \n";
}

print_r($nums);




?>
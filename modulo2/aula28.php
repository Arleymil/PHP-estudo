<?php

$varvar = "teste";
$$varvar = 10;
echo $teste . "\n";
echo $varvar . " " . $$varvar;
echo "\n";

$num = 10;
$$num = 1000;

echo $num. "\n";
echo $$num . "\n";


?>
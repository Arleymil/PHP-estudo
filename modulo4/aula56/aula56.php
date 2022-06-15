<?php

#importando arquivos PHP

//include ('code.php');
//require ('code1.php');


include ('code.php');



echo $teste . "\n";

$teste = 5;

include_once('code.php');

echo $teste."\n";

require ('code.php');



echo $teste . "\n";

$teste = 5;

require_once('code.php');

echo $teste."\n";


?>
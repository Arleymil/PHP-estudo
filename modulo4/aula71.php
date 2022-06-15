<?php

#ACESSANDO MEMBROS DE CLASS

class Pessoa {
    public $idade = 0;
}

$p1 = new Pessoa();
$p2 = new Pessoa();

$p1 -> idade = 22;
$p2 -> idade = 33;


echo $p1 -> idade . "\n";
echo $p2 -> idade;

?>
<?php

#CONSTRUTORES

use Pessoa as GlobalPessoa;

class Pessoa{

       public $idade = 0;
       public $nome;
       
       function __construct(){
           var_dump($this);
       }

}

$p1 = new Pessoa();
$p2 = new Pessoa();
?>
<?php

Class A{

}

    class Pessoa{
        public $idade = 0;
        public $nome;

        public $a;

        function __construct($nome, $idade) 
        {
            $this-> a = new A();
            $this -> nome = $nome;
            $this -> idade = $idade;            
        }
    }    

$p1 = new Pessoa("Arley", 10);
var_dump($p1);

?>
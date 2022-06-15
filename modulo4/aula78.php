<?php

#ENCAPSULAMENTO

class Pessoa{

    private $nome;

    function setNome($nome){
        $this->nome = $nome;
    }
    function getNome(){
        return $this->nome;
    }
}

$p1 = new Pessoa();
$p1->setNome("Arley");
$p1 -> nome = "Arley";

?>
<?php

    # FUNÇOES DE ACESSO

    class Pessoa {

        private $nome;
        private $sobrenome;

        public function getNome() : string {
            return $this->nome;
        }
        public function setNome(string $nome) {
            $this->nome = $nome;
        }

        public function getSobrenome() : string {
            return $this->sobrenome;
        }
        public function setSobrenome(string $sobrenome) {
            $this->sobrenome = $sobrenome;
        }
    }


    $pessoa = new Pessoa();
    $pessoa->setNome("João");
    $pessoa->setSobrenome("Silva");


    echo $pessoa->getNome() . " " . $pessoa->getSobrenome();
?>
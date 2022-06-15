<?php

    # SOBREESCRITA DE FUNÇÕES

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

    class PFisica extends Pessoa {

        public function getNomeCompleto() : string {
            return "PFISICA: {$this->getNome()} {$this->getSobrenome()}";
        }
    }

    $pf = new PFisica();
    $pf->setNome("João");
    $pf->setSobrenome("Silva");
    $pf->getNomeCompleto();
    echo $pf->getNomeCompleto();
?>
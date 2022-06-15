<?php

    #VISIBILIDADE DAS FUNÇÕES

    class SuperClasse{

        public function publico(){
            echo "Função publica \n";
        }
        protected function protegido(){
            echo "Função protegida \n";
        }
        private function privado(){
            echo "Função privada \n";
        }
        function super(){
            $this->publico();
            $this->protegido();
            $this->privado();
        }
    }

    $super = new SuperClasse();
    $super->super();
    $super->publico();
    #$super->protegido(); //não pode ser invocada por uma instância de classe
    #$super->privado();  //só pode ser utilizada no escopo da própria classe



    class SubClasse extends SuperClasse{

        function __construct()
        {
            $this -> publico();
            $this -> protegido();
            
            
        }
    }

    $sub = new SubClasse();
    $sub->super();

?>
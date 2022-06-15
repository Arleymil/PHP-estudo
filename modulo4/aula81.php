<?php

    #modificadores de acesso I - public e private

    class SuperClasse{

        public $publico = 0;
        private $privado = 0;
        protected $protegido = 0;
        public function super(){
            echo $this -> publico;
            echo $this -> privado;
            echo $this -> protegido;
        }
    }
    class SubClasse extends SuperClasse{   
        public $publico;
        private $privado;
        protected $protegido;
        public function sub(int $x){  
            $this->publico = $x;
            $this->privado = $x; 
            $this->protegido = $x;
        } 
    }

    $sub = new SubClasse();
    $sub->sub(1);
    $sub->super();




?>
<?php

#DESTRUTOR

    class Pessoa {
        
        function __construct()
        {
            echo "Construtor";
        }
        function __destruct()
        {
            echo "Objeto destruido";
        }

    }

  $p1 =  new Pessoa;
  
  unset($p1);

?>
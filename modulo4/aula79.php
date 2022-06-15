<?php

# HERANÇA

class SuperClasse{

    public $a = 'variável $a';

    public function ini(){
        echo 'SuperClass -> ini()';
    }

}
class SubClasse extends SuperClasse{

}

$sub = new SubClasse();
$sub -> ini();

?>
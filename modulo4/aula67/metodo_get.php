<?php

    var_dump($_GET);


    if(count($_GET) > 0){
        echo 'Nome: ' . ($_GET['nome'] ?? '') . "<br>";
        echo 'E-mail: ' . ($_GET['email'] ?? '') . "<br>";
    }
?>
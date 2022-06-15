<?php

//var_dump($_POST);
echo 'Nome: ' . ($_POST['nome'] ?? '') . "<br>";
echo 'E-mail: ' . ($_POST['email'] ?? '') . "<br>";


?>
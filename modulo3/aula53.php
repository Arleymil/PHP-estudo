<?php

#NULL COALESCE OPERATOR

$ddd = $_GET['ddd'] ?? "00";

$telefone = $_GET['telefone'] ?? $_GET['celular'] ?? "0000-0000";

ECHO "Tel: ($ddd) $telefone";


?>
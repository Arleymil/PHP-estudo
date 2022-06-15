<?php

$pontos = ["Zé" => 11, "João" => 4, "Maria" => 22];

echo "Zé tem $pontos[Zé] pontos \n";
echo "João tem $pontos[João] pontos \n";    
echo "Maria tem $pontos[Maria] pontos \n";

$pontos["Zé"] += 1;
echo "Zé tem $pontos[Zé] pontos \n";
//ou
echo $pontos["Zé"]
?>
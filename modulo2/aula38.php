<?php

#  ID | Nome | Pontos
#   1 |  Zé  |  11
#   2 | João |  4
#   3 | Maria| 22


# $jogo = array(
#    array("id"=>1,"Nome"=> "Zé","Pontos"=> 11),
#    array("id"=>2,"Nome"=>"João","Pontos"=> 4),
#    array("id"=>3, "Nome"=>"Maria","Pontos"=> 22)
#);

$jogo =[
    ["id"=>1,"Nome"=> "Zé","Pontos"=> 11],
    ["id"=>2,"Nome"=>"João","Pontos"=> 4],
    ["id"=>3, "Nome"=>"Maria","Pontos"=> 22]
];

print_r($jogo);
//echo $jogo[1][1];
echo $jogo[1]["Nome"];
?>
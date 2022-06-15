<?php

$txt =  isset($_GET["texto"]) ? $_GET["texto"] : "A chave não existe";

//if(isset($_GET["texto"])){
   // $txt = $_GET["texto"];
//}else{
   // $txt = "A chave não existe";
//}

echo $txt;

?>
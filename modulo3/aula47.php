<?php
$a=10;
$b=5;

function estudoEscopo(){
   //$x=1;
   echo $GLOBALS['a'];
    //global $a ;
   //echo $a;

}
//echo $x;
estudoEscopo();

print_r($GLOBALS);
?>
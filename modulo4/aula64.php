<?php

#HEREDOC E NOWDOC

#HEREDOC == " "
$X = 50;

$heredoc = 
    <<<TESTE
    <div>O valor da variavél x é: $X</div>
TESTE;

echo $heredoc;

#NOWDOC == ' '

$nowdoc = <<<'EOT'

    classs NowDOC{
        functior __construct(){
            echo "Teste";
        }
    }

EOT;

echo $nowdoc;


?>
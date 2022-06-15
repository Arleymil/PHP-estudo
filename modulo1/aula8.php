<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambiente de estudo PHP</title>
</head>
<body>
    <?php
    echo "igualdade \n";
    echo "<br>";
     var_dump(10==10);
        echo '<br>';
    var_dump(10==11);
        echo '<br>';
     var_dump(11 == '11');

     echo 'diferente';
     var_dump(10 != 10);
        echo '<br>';
    var_dump(10 != 11);

    var_dump(10 <> '10');

    echo "\n\n identico";
    var_dump(10 === '10');
    var_dump(10 === 10);

    var_dump(10 !== '10');
    var_dump(10 !== 10);

    //menor e maior
    var_dump(10 <= 10);
    var_dump(10 >= 10);
    ?>
    
</body>
</html>
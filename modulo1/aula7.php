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
       if(isset($_POST['idade'])){
            $idade = $_POST['idade'];
            if($idade < 18){
                echo "A idade é de uma criança ou de um adolescente";
            } elseif($idade >= 18 and $idade <60) {
                echo "A idade é de um adulto";
            } elseif($idade >= 60 and $idade < 120) {
                echo "A idade é de um idoso";
            } elseif ($idade >= 120 ) {
                echo "A idade informada não é válida";
            }
       }
    ?>
    <form action="" method="post">
        <input type="text" name="idade" value="" />
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
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
    if(isset($_POST['valor1'])){
        echo $_POST["valor1"];
    }
    ?>
    <form action="" method="post">
        <input type="text" name="valor1" value="" />
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
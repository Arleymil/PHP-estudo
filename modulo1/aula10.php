<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login e senha - PHP</title>
</head>
<body>
    <?php
    $login = "arley";
    $senha = "123456";

     if(isset($_POST['login'])){}
        if($_POST["login"] == $login and $_POST ["senha"] == $senha){
            echo "Login e senha corretos";
        } else {
            echo "Login e senha incorretos";
        }
    ?>
    <form action="" method="post">
        <input type="text" name="login" value="">
        <br>
        <br>
        <input type="password" name="senha" value="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
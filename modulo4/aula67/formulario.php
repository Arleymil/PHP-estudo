
#FORMULÁRIO HTML
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="metodo_post.php" method="POST">
        <fieldset>
            <legend>Formulário HTML</legend>
            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </p>
            <p>
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email">
        </fieldset>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>
</body>
</html>


?>
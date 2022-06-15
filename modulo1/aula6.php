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
       if(isset($_POST['num'])){
           echo $_POST["num"];
           $num = $_POST['num'];


           if($num % 2 == 0){
               echo "<br>O número $num é par";
           } else {
               echo "<br>O número $num é ímpar";
           }
       }
    ?>
    <form action="" method="post">
        <input type="text" name="num" value="" />
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
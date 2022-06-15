<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura do while - PHP</title>
</head>
<body>
    <?php
    if(isset($_POST["dependentes"])){
       $dependentes = $_POST["dependentes"];
       
       if(! is_numeric($dependentes)){
            $dependentes = 1;
            echo "não numérico";
       }
       
       $conta = 0;

      echo 
      '<table style="border: 1px;">;
       <tr>
           <th></th>
           <th>Nome</th>
           <th>Nasc</th>
       </tr>' ;
    do{
        $conta = $conta + 1;
       echo "   <tr>
                    <td>Dependente $conta</td>
                    <td><input type='text' name='nome'></td>
                    <td><input type='text' name='nasc'></td>
                </tr>";
    }while($conta < $dependentes);
    echo '</table>';
}
    ?>
    </table>
    <form action="" method="post">
        <input type="text" name="dependentes">
        <input type="submit">
    </form>

</body>
</html>
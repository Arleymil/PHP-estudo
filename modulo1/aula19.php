<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada - PHP</title>
</head>
<body>

    <?php
     if(isset($_POST["edTABUADA"])){
         $tab=$_POST["edTABUADA"];
         if(!is_numeric($tab)){
             echo "<br>o valor informado não é numérico<br>";
         }else{
            //for($num=0; $num<=10; $num++){
                //0 x $tab = $num * $tab
                //0 x 5 = (0 * 5) = 0
                //1 x 5 = (1 * 5) = 5
                //2 x 5 = (2 * 5) = 10
                //3 x 5 = (3 * 5) = 15
                //...
                //  echo "$tab x $num = ".($tab*$num)."<br>";
            $num=0;
            while($num<=10){
                echo $num . " x " . $tab . " = " . ($num*$tab)."<br>";
                $num++;
            }
            
             
        }
     
    
    }
    ?>

    <form action="" method="post">
        <input type="text" name="edTABUADA">
        <input type="submit" value="enviar">
    </form>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrução switch na prática - PHP</title>
</head>
<body>

    <?php
        if(isset($_POST["cbxMES"])){
            $mes = $_POST["cbxMES"];
            switch($mes){
                case "1":
                    echo "Janeiro";
                    break;
                case "2":
                    echo "Fevereiro";
                    break;
                case "3":
                    echo "Março";
                    break;
                case "4":
                    echo "Abril";
                    break;
                case "5":
                    echo "Maio";
                    break;
                case "6":
                    echo "Junho";
                    break;
                case "7":
                    echo "Julho";
                    break;
                case "8":
                    echo "Agosto";
                    break;
                case "9":
                    echo "Setembro";
                    break;
                case "10":
                    echo "Outubro";
                    break;
                case "11":
                    echo "Novembro";
                    break;
                case "12":
                    echo "Dezembro";
                    break;
                default:
                    echo "Mês inválido";
            }
        }

    ?>

    <form action="" method="post">
        <select name="cbxMES">
            <option value="1">Janeiro</option>
            <option value="2">Fevereiro</option>
            <option value="3">Março</option>
            <option value="4">Abril</option>
            <option value="5">Maio</option>
            <option value="6">Junho</option>
            <option value="7">Julho</option>
            <option value="8">Agosto</option>
            <option value="9">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>